<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\EPSG;

use SQLite3;

/**
 * @internal
 */
class Repository
{
    /** @var SQLite3 */
    private static $connection;

    /** @var array */
    private static $unitsOfMeasureData = [];

    /** @var array */
    private static $primeMeridianData = [];

    /** @var array */
    private static $ellipsoidData = [];

    /** @var array */
    private static $datumData = [];

    /** @var array */
    private static $coordinateSystemData = [];

    /** @var array */
    private static $coordinateSystemAxisData = [];

    private function getConnection(): SQLite3
    {
        if (!static::$connection instanceof SQLite3) {
            static::$connection = new SQLite3(__DIR__ . '/../../resources/epsg/epsg.sqlite', SQLITE3_OPEN_READONLY);
            static::$connection->enableExceptions(true);
        }

        return static::$connection;
    }

    public function getEllipsoids(): array
    {
        if (!static::$ellipsoidData) {
            $connection = $this->getConnection();
            $sql = '
            SELECT
                el.ellipsoid_code,
                el.ellipsoid_name,
                el.semi_major_axis,
                el.semi_minor_axis,
                el.inv_flattening,
                el.uom_code,
                el.deprecated
            FROM epsg_ellipsoid el
        ';

            $result = $connection->query($sql);

            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                // some ellipsoids are defined via inverse flattening and the DB doesn't store the calculated data...
                if (!$row['semi_minor_axis']) {
                    $row['semi_minor_axis'] = $row['semi_major_axis'] - ($row['semi_major_axis'] / $row['inv_flattening']);
                }

                static::$ellipsoidData[$row['ellipsoid_code']] = $row;
            }
        }

        return static::$ellipsoidData;
    }

    public function getDatums(): array
    {
        if (!static::$datumData) {
            $connection = $this->getConnection();
            $sql = "
            SELECT
                d.datum_code,
                d.datum_name,
                d.datum_type,
                d.ellipsoid_code,
                d.prime_meridian_code,
                d.conventional_rs_code,
                d.frame_reference_epoch,
                d.deprecated
            FROM epsg_datum d
            WHERE d.datum_type != 'engineering'
        ";

            $result = $connection->query($sql);

            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                static::$datumData[$row['datum_code']] = $row;
            }
        }

        return static::$datumData;
    }

    public function getUnitsOfMeasure(): array
    {
        if (!static::$unitsOfMeasureData) {
            $connection = $this->getConnection();
            $sql = '
            SELECT
                m.uom_code,
                m.unit_of_meas_name,
                m.unit_of_meas_type,
                m.target_uom_code,
                m.factor_b,
                m.factor_c,
                m.deprecated
            FROM epsg_unitofmeasure m
            ';

            $result = $connection->query($sql);

            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                static::$unitsOfMeasureData[$row['uom_code']] = $row;
            }
        }

        return static::$unitsOfMeasureData;
    }

    public function getPrimeMeridians(): array
    {
        if (!static::$primeMeridianData) {
            $connection = $this->getConnection();
            $sql = '
            SELECT
                p.prime_meridian_code,
                p.prime_meridian_name,
                p.greenwich_longitude,
                p.uom_code,
                p.deprecated
            FROM epsg_primemeridian p
            ';

            $result = $connection->query($sql);

            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                static::$primeMeridianData[$row['prime_meridian_code']] = $row;
            }
        }

        return static::$primeMeridianData;
    }

    public function getCoordinateSystems(): array
    {
        if (!static::$coordinateSystemData) {
            $connection = $this->getConnection();
            $sql = "
            SELECT
                cs.coord_sys_code,
                cs.coord_sys_name,
                cs.coord_sys_type,
                cs.dimension,
                cs.deprecated
            FROM epsg_coordinatesystem cs
            JOIN epsg_coordinatereferencesystem crs ON crs.coord_sys_code = cs.coord_sys_code AND crs.coord_ref_sys_kind NOT IN ('engineering', 'derived') AND crs.coord_ref_sys_name NOT LIKE '%example%'
            WHERE cs.coord_sys_type != 'ordinal'
            ";

            $result = $connection->query($sql);

            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                $row['axes'] = $this->getCoordinateSystemAxes()[$row['coord_sys_code']];
                static::$coordinateSystemData[$row['coord_sys_code']] = $row;
            }
        }

        return static::$coordinateSystemData;
    }

    private function getCoordinateSystemAxes(): array
    {
        if (!static::$coordinateSystemAxisData) {
            $connection = $this->getConnection();
            $sql = '
            SELECT
                a.coord_sys_code,
                a.coord_axis_orientation,
                a.coord_axis_abbreviation,
                an.coord_axis_name,
                a.uom_code,
                a.coord_axis_order
            FROM epsg_coordinateaxis a
            JOIN epsg_coordinateaxisname an on a.coord_axis_name_code = an.coord_axis_name_code
            ORDER BY a.coord_axis_order
            ';

            $result = $connection->query($sql);

            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                if (isset(static::$coordinateSystemAxisData[$row['coord_sys_code']])) {
                    static::$coordinateSystemAxisData[$row['coord_sys_code']][] = $row;
                } else {
                    static::$coordinateSystemAxisData[$row['coord_sys_code']] = [$row];
                }
            }
        }

        return static::$coordinateSystemAxisData;
    }
}
