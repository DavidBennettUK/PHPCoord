<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\EPSG\Import;

use SQLite3;

use function file_exists;
use function file_get_contents;
use function str_starts_with;
use function substr;
use function unlink;
use function sleep;

use const SQLITE3_OPEN_CREATE;
use const SQLITE3_OPEN_READWRITE;
use const SQLITE3_OPEN_READONLY;
use const SQLITE3_ASSOC;

class EPSGImporter
{
    private string $resourceDir;

    private const BOM = "\xEF\xBB\xBF";

    private const BUFFER_THRESHOLD = 200; // rough guess at where map maker got bored adding vertices for complex shapes
    private const BUFFER_SIZE = 0.1; // approx 10km

    public function __construct()
    {
        $this->resourceDir = __DIR__ . '/../../../resources';
    }

    public function dataFromSQLFiles(): void
    {
        // remove old file if any
        if (file_exists($this->resourceDir . '/epsg/epsg.sqlite')) {
            unlink($this->resourceDir . '/epsg/epsg.sqlite');
        }

        $sqlite = new SQLite3(
            $this->resourceDir . '/epsg/epsg.sqlite',
            SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE
        );

        $sqlite->enableExceptions(true);

        $tableSchema = file_get_contents($this->resourceDir . '/epsg/PostgreSQL_Table_Script.sql');
        if (str_starts_with($tableSchema, self::BOM)) {
            $tableSchema = substr($tableSchema, 3);
        }
        $sqlite->exec($tableSchema);

        $tableData = file_get_contents($this->resourceDir . '/epsg/PostgreSQL_Data_Script.sql');
        if (str_starts_with($tableData, self::BOM)) {
            $tableData = substr($tableData, 3);
        }
        $sqlite->exec($tableData);

        // Corrections
        $sqlite->exec("UPDATE epsg_coordoperationparamvalue SET param_value_file_ref = NULL WHERE param_value_file_ref = ''");
        $sqlite->exec('UPDATE epsg_coordinateaxis SET uom_code = 9102 WHERE uom_code = 9122'); // supplier-defined degrees to regular degrees
        $sqlite->exec('UPDATE epsg_coordoperation SET deprecated = 1 WHERE coord_op_code IN (1851, 9235, 15933)');
        $sqlite->exec('DELETE FROM epsg_coordinatereferencesystem WHERE coord_ref_sys_code = 9912;'); // erroneous test entry

        /*
         * AusGeoidv2 abuses the NTv2 file format to have very large files, and a confusing implementation (latitude shifts are actually height offsets),
         * so use a GTX conversion of those files instead...
         */
        $sqlite->exec('UPDATE epsg_coordoperation SET coord_op_method_code = 1088 WHERE coord_op_code IN (9465, 9466, 9467, 9693)');
        $sqlite->exec('UPDATE epsg_coordoperation SET coord_op_method_code = 9665 WHERE coord_op_code IN (5656, 5657, 8451, 9461, 9692)');

        $sqlite->exec("UPDATE epsg_coordoperationparamvalue SET param_value_file_ref = REPLACE(param_value_file_ref, '.gsb', '.gtx') WHERE coord_op_code IN (9465, 9466, 9467, 9693) OR coord_op_code IN (5656, 5657, 8451, 9692)");
        $sqlite->exec('UPDATE epsg_coordoperationparamvalue SET coord_op_method_code = 1088 WHERE coord_op_code IN (9465, 9466, 9467, 9693)');
        $sqlite->exec('UPDATE epsg_coordoperationparamvalue SET coord_op_method_code = 9665 WHERE coord_op_code IN (5656, 5657, 8451, 9692)');

        /*
         * VERTCON files/extents described in EPSG are the old VERTCON1/2 .94 file format, not the VERTCON3 .b files
         * which cover geographically different extents. Therefore we use the official NOAA VDatum GTX conversions of the
         * older files instead to avoid yet-another-grid-format implementation.
         */
        $sqlite->exec('UPDATE epsg_coordoperation SET coord_op_method_code = 1084 WHERE coord_op_code IN (7969, 7970, 7971)');
        $sqlite->exec("UPDATE epsg_coordoperationparamvalue SET param_value_file_ref = REPLACE(param_value_file_ref, '.94', '.gtx') WHERE coord_op_code IN (7969, 7970, 7971)");
        $sqlite->exec('UPDATE epsg_coordoperationparamvalue SET coord_op_method_code = 1084 WHERE coord_op_code IN (7969, 7970, 7971)');

        /*
         * Transformation from S-JTSK [JTSK03] to S-JTSK is listed as NADCON even though there's an official NTv2 file.
         * EPSG have declined to add it as an alternate to the DB, so override that here.
         */
        $sqlite->exec('UPDATE epsg_coordoperation SET coord_op_method_code = 9615 WHERE coord_op_code = 8364');
        $sqlite->exec('DELETE FROM epsg_coordoperationparamvalue WHERE coord_op_code = 8364');
        $sqlite->exec("INSERT INTO epsg_coordoperationparamvalue (coord_op_code, coord_op_method_code, parameter_code, param_value_file_ref) VALUES (8364, 9615, 8656, 'Slovakia_JTSK03_to_JTSK.gsb')");

        /*
         * Time-dependent transformations from/to ETRS89/WGS84 are only present in transforms involving specific realisations
         * so add transforms to/from the generic ensemble codes to the most recent version.
         */
        $sqlite->exec("INSERT INTO epsg_coordoperationmethod (coord_op_method_code, coord_op_method_name, reverse_op, data_source, revision_date, deprecated, remarks) VALUES (32768, 'Alias', 1, 'PHPCoord', '2021-10-28', 0, '')");
        $sqlite->exec("INSERT INTO epsg_coordoperation (coord_op_code, coord_op_name, coord_op_type, source_crs_code, target_crs_code, coord_op_method_code, coord_op_accuracy, data_source, revision_date, deprecated, show_operation, remarks) VALUES (32768, 'ETRS89 to ETRF2014 (geocen)', 'transformation', 4936, 8401, 32768, 0, 'PHPCoord', '2021-10-28', 0, 1, '')");
        $sqlite->exec("INSERT INTO epsg_usage (object_table_name, object_code, extent_code, scope_code) VALUES ('epsg_coordoperation', 32768, 1298, 1203)");
        $sqlite->exec("INSERT INTO epsg_coordoperation (coord_op_code, coord_op_name, coord_op_type, source_crs_code, target_crs_code, coord_op_method_code, coord_op_accuracy, data_source, revision_date, deprecated, show_operation, remarks) VALUES (32769, 'ETRS89 to ETRF2014 (geog2D to geocen)', 'transformation', 4258, 8401, 9602, 0, 'PHPCoord', '2021-10-28', 0, 1, '')");
        $sqlite->exec("INSERT INTO epsg_usage (object_table_name, object_code, extent_code, scope_code) VALUES ('epsg_coordoperation', 32769, 1298, 1203)");
        $sqlite->exec("INSERT INTO epsg_coordoperation (coord_op_code, coord_op_name, coord_op_type, source_crs_code, target_crs_code, coord_op_method_code, coord_op_accuracy, data_source, revision_date, deprecated, show_operation, remarks) VALUES (32770, 'ETRS89 to ETRF2014 (geog3D to geocen)', 'transformation', 4937, 8401, 9602, 0, 'PHPCoord', '2021-10-28', 0, 1, '')");
        $sqlite->exec("INSERT INTO epsg_usage (object_table_name, object_code, extent_code, scope_code) VALUES ('epsg_coordoperation', 32770, 1298, 1203)");
        $sqlite->exec("INSERT INTO epsg_coordoperation (coord_op_code, coord_op_name, coord_op_type, source_crs_code, target_crs_code, coord_op_method_code, coord_op_accuracy, data_source, revision_date, deprecated, show_operation, remarks) VALUES (32771, 'WGS 84 to WGS 84 (G2139) (geocen)', 'transformation', 4978, 9753, 32768, 0, 'PHPCoord', '2021-10-28', 0, 1, '')");
        $sqlite->exec("INSERT INTO epsg_usage (object_table_name, object_code, extent_code, scope_code) VALUES ('epsg_coordoperation', 32771, 1262, 1203)");
        $sqlite->exec("INSERT INTO epsg_coordoperation (coord_op_code, coord_op_name, coord_op_type, source_crs_code, target_crs_code, coord_op_method_code, coord_op_accuracy, data_source, revision_date, deprecated, show_operation, remarks) VALUES (32772, 'WGS 84 to WGS 84 (G2139) (geog2D to geocen)', 'transformation', 4326, 9753, 9602, 0, 'PHPCoord', '2021-10-28', 0, 1, '')");
        $sqlite->exec("INSERT INTO epsg_usage (object_table_name, object_code, extent_code, scope_code) VALUES ('epsg_coordoperation', 32772, 1262, 1203)");
        $sqlite->exec("INSERT INTO epsg_coordoperation (coord_op_code, coord_op_name, coord_op_type, source_crs_code, target_crs_code, coord_op_method_code, coord_op_accuracy, data_source, revision_date, deprecated, show_operation, remarks) VALUES (32773, 'WGS 84 to WGS 84 (G2139) (geog3D to geocen)', 'transformation', 4979, 9753, 9602, 0, 'PHPCoord', '2021-10-28', 0, 1, '')");
        $sqlite->exec("INSERT INTO epsg_usage (object_table_name, object_code, extent_code, scope_code) VALUES ('epsg_coordoperation', 32773, 1262, 1203)");

        /*
         * Too many "world" extents with confusing descriptions, unify
         */
        $sqlite->exec('UPDATE epsg_usage SET extent_code = 1262 WHERE extent_code IN (1263, 2346, 2830, 4393, 4520, 4523)');

        $sqlite->exec('VACUUM');
        $sqlite->close();
    }

    public function dataFromGeoRepository(): void
    {
        if (!file_exists($this->resourceDir . '/epsg/extents.sqlite')) {
            $extentDB = new SQLite3(
                $this->resourceDir . '/epsg/extents.sqlite',
                SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE
            );

            $extentDB->exec('CREATE TABLE extent(extent_code INTEGER PRIMARY KEY, original TEXT, buffered TEXT, revision_date DATE)');
        } else {
            $extentDB = new SQLite3(
                $this->resourceDir . '/epsg/extents.sqlite',
                SQLITE3_OPEN_READWRITE
            );
        }
        $extentDB->enableExceptions(true);
        $extentDB->loadExtension('mod_spatialite.so');

        $dataDB = new SQLite3(
            $this->resourceDir . '/epsg/epsg.sqlite',
            SQLITE3_OPEN_READONLY
        );
        $dataDB->enableExceptions(true);

        $extents = $dataDB->query('SELECT extent_code, extent_name, revision_date FROM epsg_extent e WHERE deprecated = 0');

        while ($extentMetaData = $extents->fetchArray(SQLITE3_ASSOC)) {
            $existingExtentSQL = "
            SELECT extent_code
            FROM extent
            WHERE extent_code = {$extentMetaData['extent_code']}
              AND revision_date = '{$extentMetaData['revision_date']}'
            ";
            $existingExtent = $extentDB->querySingle($existingExtentSQL);

            if (!$existingExtent) {
                echo $extentMetaData['extent_code'] . "\n";
                $geoJson = file_get_contents("https://apps.epsg.org/api/v1/Extent/{$extentMetaData['extent_code']}/polygon/");
                $upsertSQL = "
                    INSERT INTO extent (extent_code, original, buffered, revision_date)
                    VALUES ({$extentMetaData['extent_code']}, '{$geoJson}', NULL, '{$extentMetaData['revision_date']}')
                    ON CONFLICT(extent_code) DO UPDATE SET original = excluded.original, revision_date=excluded.revision_date, buffered = excluded.buffered
                ";
                $extentDB->exec($upsertSQL);
                sleep(2);
            }
        }

        $extentDB->exec('UPDATE extent SET buffered = CASE WHEN ST_NPoints(GeomFromGeoJSON(original)) > ' . self::BUFFER_THRESHOLD . ' THEN AsGeoJSON(ST_Buffer(GeomFromGeoJSON(original), ' . self::BUFFER_SIZE . ')) ELSE original END WHERE buffered IS NULL');

        $extentDB->exec('VACUUM');
        $extentDB->close();
        $dataDB->close();
    }
}
