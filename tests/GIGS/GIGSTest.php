<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\GIGS;

use function explode;
use Generator;
use function min;
use PHPCoord\CoordinateOperation\CoordinateOperations;
use PHPCoord\CoordinateReferenceSystem\CoordinateReferenceSystem;
use PHPCoord\CoordinateReferenceSystem\Geocentric;
use PHPCoord\CoordinateReferenceSystem\Geographic2D;
use PHPCoord\CoordinateReferenceSystem\Geographic3D;
use PHPCoord\CoordinateReferenceSystem\Projected;
use PHPCoord\CoordinateReferenceSystem\Vertical;
use PHPCoord\Datum\Datum;
use PHPCoord\Datum\Ellipsoid;
use PHPCoord\Datum\PrimeMeridian;
use PHPCoord\Exception\UnknownSRIDException;
use PHPCoord\UnitOfMeasure\Angle\Angle;
use PHPCoord\UnitOfMeasure\Angle\Degree;
use PHPCoord\UnitOfMeasure\Length\Length;
use PHPCoord\UnitOfMeasure\Scale\Scale;
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;
use PHPUnit\Framework\TestCase;
use SplFileObject;
use function str_replace;
use function strlen;
use function strpos;
use function substr;

class GIGSTest extends TestCase
{
    /**
     * @dataProvider series2200UnitData
     */
    public function testSeries2200Units(string $epsgCode, string $unitType, string $unitName, string $baseUnitsPerUnit): void
    {
        $unit = UnitOfMeasureFactory::makeUnit(1, 'urn:ogc:def:uom:EPSG::' . $epsgCode);
        $this->assertEquals(str_replace('sexagesimal DMS', 'degree', $unitName), $unit->getUnitName());

        if ($baseUnitsPerUnit !== 'NULL') {
            $actualBaseUnitsPerUnit = match (true) {
                $unit instanceof Angle => $unit->asRadians(),
                $unit instanceof Length => $unit->asMetres(),
                $unit instanceof Scale => $unit->asUnity(),
            };

            $delta = 1 / 10 ** min(10, strlen(substr($baseUnitsPerUnit, strpos($baseUnitsPerUnit, '.') + 1)));
            $this->assertEqualsWithDelta($baseUnitsPerUnit, $actualBaseUnitsPerUnit->getValue(), $delta);
        }
    }

    public function series2200UnitData(): Generator
    {
        [$header, $body] = $this->parseDataFile(__DIR__ . '/GIGS 2200 Predefined Geodetic Data Objects test data/ASCII/GIGS_lib_2201_Unit.txt');

        foreach ($body as $row) {
            yield '#' . $row[0] => [$row[0], $row[1], $row[2], $row[4]];
        }
    }

    /**
     * @dataProvider series2200EllipsoidData
     */
    public function testSeries2200Ellipsoids(string $epsgCode, string $name, string $semiMajorAxis, string $semiMajorAxisUnitName, string $semiMajorAxisAsMetres, string $inverseFlattening, string $semiMinorAxis): void
    {
        $ellipsoid = Ellipsoid::fromSRID('urn:ogc:def:ellipsoid:EPSG::' . $epsgCode);
        $this->assertEquals($name, $ellipsoid->getName());
        $this->assertEquals($semiMajorAxis, $ellipsoid->getSemiMajorAxis()->getValue());
        $this->assertEquals($semiMajorAxisUnitName, $ellipsoid->getSemiMajorAxis()->getUnitName());

        if ($semiMinorAxis !== 'NULL') {
            $this->assertEquals($semiMinorAxis, $ellipsoid->getSemiMinorAxis()->getValue());
        } else {
            $this->assertEquals($inverseFlattening, $ellipsoid->getInverseFlattening());
        }

        if ($semiMajorAxisUnitName !== 'metre') {
            $delta = 1 / 10 ** min(10, strlen(substr($semiMajorAxisAsMetres, strpos($semiMajorAxisAsMetres, '.') + 1)));
            $this->assertEqualsWithDelta($semiMajorAxisAsMetres, $ellipsoid->getSemiMajorAxis()->asMetres()->getValue(), $delta);
        }
    }

    public function series2200EllipsoidData(): Generator
    {
        [$header, $body] = $this->parseDataFile(__DIR__ . '/GIGS 2200 Predefined Geodetic Data Objects test data/ASCII/GIGS_lib_2202_Ellipsoid.txt');

        foreach ($body as $row) {
            yield '#' . $row[0] => [$row[0], $row[1], $row[3], $row[4], $row[6], $row[7], $row[8]];
        }
    }

    /**
     * @dataProvider series2200PrimeMeridianData
     */
    public function testSeries2200PrimeMeridians(string $epsgCode, string $name, string $longitudeFromGreenwich, string $longitudeFromGreenwichDegrees): void
    {
        $meridian = PrimeMeridian::fromSRID('urn:ogc:def:meridian:EPSG::' . $epsgCode);
        $this->assertEquals($name, $meridian->getName());

        if ($meridian->getGreenwichLongitude() instanceof Degree) {
            $this->assertEqualsWithDelta($longitudeFromGreenwichDegrees, $meridian->getGreenwichLongitude()->getValue(), 0.0000001);
        } else {
            $this->assertEqualsWithDelta($longitudeFromGreenwich, $meridian->getGreenwichLongitude()->getValue(), 0.0000001);
        }
    }

    public function series2200PrimeMeridianData(): Generator
    {
        [$header, $body] = $this->parseDataFile(__DIR__ . '/GIGS 2200 Predefined Geodetic Data Objects test data/ASCII/GIGS_lib_2203_PrimeMeridian.txt');

        foreach ($body as $row) {
            yield '#' . $row[0] => [$row[0], $row[1], $row[3], $row[5]];
        }
    }

    /**
     * @dataProvider series2200GeodeticDatumData
     */
    public function testSeries2200GeodeticDatums(string $epsgCode, string $name, string $ellipsoidName, string $primeMeridianName): void
    {
        $datum = Datum::fromSRID('urn:ogc:def:datum:EPSG::' . $epsgCode);
        $this->assertEquals($name, Datum::getSupportedSRIDs()['urn:ogc:def:datum:EPSG::' . $epsgCode]);
        $this->assertEquals($ellipsoidName, $datum->getEllipsoid()->getName());
        $this->assertEquals($primeMeridianName, $datum->getPrimeMeridian()->getName());
    }

    public function series2200GeodeticDatumData(): Generator
    {
        [$header, $body] = $this->parseDataFile(__DIR__ . '/GIGS 2200 Predefined Geodetic Data Objects test data/ASCII/GIGS_lib_2204_GeodeticDatum.txt');

        foreach ($body as $row) {
            yield '#' . $row[0] => [$row[0], $row[1], $row[3], $row[4]];
        }
    }

    /**
     * @dataProvider series2200GeodeticCRSData
     */
    public function testSeries2200GeodeticCRSs(string $epsgCode, string $type, string $name, string $datumCode): void
    {
        $crs = CoordinateReferenceSystem::fromSRID('urn:ogc:def:crs:EPSG::' . $epsgCode);
        $this->assertEquals($name, $crs->getName());

        if ($datumCode === '6258') { // treat ensemble as latest as code does
            $datumCode = '1206';
        } elseif ($datumCode === '6326') { // treat ensemble as latest as code does
            $datumCode = '1309';
        }

        $this->assertEquals('urn:ogc:def:datum:EPSG::' . $datumCode, $crs->getDatum()->getSRID());

        if ($crs instanceof Geocentric) {
            $this->assertEquals('X', $crs->getCoordinateSystem()->getAxes()[0]->getAbbreviation());
            $this->assertEquals('Y', $crs->getCoordinateSystem()->getAxes()[1]->getAbbreviation());
            $this->assertEquals('Z', $crs->getCoordinateSystem()->getAxes()[2]->getAbbreviation());
        } elseif ($crs instanceof Geographic2D) {
            $this->assertEquals('Lat', $crs->getCoordinateSystem()->getAxes()[0]->getAbbreviation());
            $this->assertEquals('Lon', $crs->getCoordinateSystem()->getAxes()[1]->getAbbreviation());
        } elseif ($crs instanceof Geographic3D) {
            $this->assertEquals('Lat', $crs->getCoordinateSystem()->getAxes()[0]->getAbbreviation());
            $this->assertEquals('Lon', $crs->getCoordinateSystem()->getAxes()[1]->getAbbreviation());
            $this->assertEquals('h', $crs->getCoordinateSystem()->getAxes()[2]->getAbbreviation());
        }
    }

    public function series2200GeodeticCRSData(): Generator
    {
        [$header, $body] = $this->parseDataFile(__DIR__ . '/GIGS 2200 Predefined Geodetic Data Objects test data/ASCII/GIGS_lib_2205_GeodeticCRS.txt');

        foreach ($body as $row) {
            yield '#' . $row[0] => [$row[0], $row[1], $row[2], $row[4]];
        }
    }

    /**
     * @dataProvider series2200ProjectedCRSData
     */
    public function testSeries2200ProjectedCRSs(string $epsgCode, string $datumCode, string $name): void
    {
        $crs = Projected::fromSRID('urn:ogc:def:crs:EPSG::' . $epsgCode);
        $this->assertEquals($name, $crs->getName());

        if ($datumCode === '6258') { // treat ensemble as latest as code does
            $datumCode = '1206';
        } elseif ($datumCode === '6326') { // treat ensemble as latest as code does
            $datumCode = '1309';
        }

        $this->assertEquals('urn:ogc:def:datum:EPSG::' . $datumCode, $crs->getDatum()->getSRID());
    }

    public function series2200ProjectedCRSData(): Generator
    {
        [$header, $body] = $this->parseDataFile(__DIR__ . '/GIGS 2200 Predefined Geodetic Data Objects test data/ASCII/GIGS_lib_2207_ProjectedCRS.txt');

        foreach ($body as $row) {
            yield '#' . $row[0] => [$row[0], $row[1], $row[3]];
        }
    }

    /**
     * @dataProvider series2200VerticalDatumData
     */
    public function testSeries2200VerticalDatums(string $epsgCode, string $name): void
    {
        $datum = Datum::fromSRID('urn:ogc:def:datum:EPSG::' . $epsgCode);
        $this->assertEquals($name, Datum::getSupportedSRIDs()['urn:ogc:def:datum:EPSG::' . $epsgCode]);
    }

    public function series2200VerticalDatumData(): Generator
    {
        [$header, $body] = $this->parseDataFile(__DIR__ . '/GIGS 2200 Predefined Geodetic Data Objects test data/ASCII/GIGS_lib_2209_VerticalDatum.txt');

        foreach ($body as $row) {
            yield '#' . $row[0] => [$row[0], $row[1]];
        }
    }

    /**
     * @dataProvider series2200VerticalCRSData
     */
    public function testSeries2200VerticalCRSs(string $epsgCode, string $name, string $datumCode): void
    {
        $crs = Vertical::fromSRID('urn:ogc:def:crs:EPSG::' . $epsgCode);
        $this->assertEquals($name, $crs->getName());
        $this->assertEquals('urn:ogc:def:datum:EPSG::' . $datumCode, $crs->getDatum()->getSRID());
    }

    public function series2200VerticalCRSData(): Generator
    {
        [$header, $body] = $this->parseDataFile(__DIR__ . '/GIGS 2200 Predefined Geodetic Data Objects test data/ASCII/GIGS_lib_2210_VerticalCRS.txt');

        foreach ($body as $row) {
            yield '#' . $row[0] => [$row[0], $row[1], $row[3]];
        }
    }

    /**
     * @dataProvider series2200OperationData
     */
    public function testSeries2200Operations(string $epsgCode, string $name, string $method): void
    {
        $operation = CoordinateOperations::getOperationData('urn:ogc:def:coordinateOperation:EPSG::' . $epsgCode);
        $this->assertEquals($name, $operation['name']);
        //$this->assertEquals('urn:ogc:def:datum:EPSG::' . $datumCode, $crs->getDatum()->getSRID());
    }

    public function series2200OperationData(): Generator
    {
        [$header, $body] = $this->parseDataFile(__DIR__ . '/GIGS 2200 Predefined Geodetic Data Objects test data/ASCII/GIGS_lib_2206_Conversion.txt');

        foreach ($body as $row) {
            yield '#' . $row[0] => [$row[0], $row[1], $row[3]];
        }

        [$header, $body] = $this->parseDataFile(__DIR__ . '/GIGS 2200 Predefined Geodetic Data Objects test data/ASCII/GIGS_lib_2208_CoordTfm.txt');

        foreach ($body as $row) {
            if ($row[4] !== 'NADCON') {
                yield '#' . $row[0] => [$row[0], $row[1], $row[4]];
            }
        }

        [$header, $body] = $this->parseDataFile(__DIR__ . '/GIGS 2200 Predefined Geodetic Data Objects test data/ASCII/GIGS_lib_2211_VertTfm.txt');

        foreach ($body as $row) {
            yield '#' . $row[0] => [$row[0], $row[1], $row[3]];
        }
    }

    /**
     * @dataProvider series3200UnitData
     */
    public function testSeries3200Units(string $gigsCode, string $unitType, string $unitName, string $baseUnitsPerUnit, string $epsgCode): void
    {
        if ($unitType === 'Angle') {
            $gigsUnitClassName = "GIGSUnit{$gigsCode}";
            $gigsUnitClass = <<<ENDOFCLASS
                namespace PHPCoord\UnitOfMeasure\Angle;
                class {$gigsUnitClassName} extends Angle {

                    public function __construct(private float \$angle)
                    {
                    }

                    public function asRadians(): Radian
                    {
                        return new Radian(\$this->angle * {$baseUnitsPerUnit});
                    }

                    public function getValue(): float
                    {
                        return \$this->angle;
                    }

                    public function getUnitName(): string
                    {
                        return '{$unitName}';
                    }
                }
                ENDOFCLASS;
            eval($gigsUnitClass);
            Angle::registerCustomUnit('urn:ogc:def:uom:GIGS::' . $gigsCode, $unitName, 'PHPCoord\UnitOfMeasure\Angle\\' . $gigsUnitClassName);
            $gigsUnit = Angle::makeUnit(1, 'urn:ogc:def:uom:GIGS::' . $gigsCode);
            $actualBaseUnitsPerGigsUnit = $gigsUnit->asRadians();

            $epsgUnit = Angle::makeUnit(1, 'urn:ogc:def:uom:EPSG::' . $epsgCode);
            $actualBaseUnitsPerEPSGUnit = $epsgUnit->asRadians();
        } elseif ($unitType === 'Linear') {
            $gigsUnitClassName = "GIGSUnit{$gigsCode}";
            $gigsUnitClass = <<<ENDOFCLASS
                namespace PHPCoord\UnitOfMeasure\Length;
                class {$gigsUnitClassName} extends Length {

                    public function __construct(private float \$length)
                    {
                    }

                    public function asMetres(): Metre
                    {
                        return new Metre(\$this->length * {$baseUnitsPerUnit});
                    }

                    public function getValue(): float
                    {
                        return \$this->length;
                    }

                    public function getUnitName(): string
                    {
                        return '{$unitName}';
                    }
                }
                ENDOFCLASS;
            eval($gigsUnitClass);
            Length::registerCustomUnit('urn:ogc:def:uom:GIGS::' . $gigsCode, $unitName, 'PHPCoord\UnitOfMeasure\Length\\' . $gigsUnitClassName);
            $gigsUnit = Length::makeUnit(1, 'urn:ogc:def:uom:GIGS::' . $gigsCode);
            $actualBaseUnitsPerGigsUnit = $gigsUnit->asMetres();

            $epsgUnit = Length::makeUnit(1, 'urn:ogc:def:uom:EPSG::' . $epsgCode);
            $actualBaseUnitsPerEPSGUnit = $epsgUnit->asMetres();
        } elseif ($unitType === 'Scale') {
            $gigsUnitClassName = "GIGSUnit{$gigsCode}";
            $gigsUnitClass = <<<ENDOFCLASS
                namespace PHPCoord\UnitOfMeasure\Scale;
                class {$gigsUnitClassName} extends Scale {

                    public function __construct(private float \$scale)
                    {
                    }

                    public function asUnity(): Unity
                    {
                        return new Unity(\$this->scale * {$baseUnitsPerUnit});
                    }

                    public function getValue(): float
                    {
                        return \$this->scale;
                    }

                    public function getUnitName(): string
                    {
                        return '{$unitName}';
                    }
                }
                ENDOFCLASS;
            eval($gigsUnitClass);
            Scale::registerCustomUnit('urn:ogc:def:uom:GIGS::' . $gigsCode, $unitName, 'PHPCoord\UnitOfMeasure\Scale\\' . $gigsUnitClassName);
            $gigsUnit = Scale::makeUnit(1, 'urn:ogc:def:uom:GIGS::' . $gigsCode);
            $actualBaseUnitsPerGigsUnit = $gigsUnit->asUnity();

            $epsgUnit = Scale::makeUnit(1, 'urn:ogc:def:uom:EPSG::' . $epsgCode);
            $actualBaseUnitsPerEPSGUnit = $epsgUnit->asUnity();
        }

        $delta = 1 / 10 ** min(10, strlen(substr($baseUnitsPerUnit, strpos($baseUnitsPerUnit, '.') + 1)));
        $this->assertEqualsWithDelta($baseUnitsPerUnit, $actualBaseUnitsPerGigsUnit->getValue(), $delta);
        $this->assertEqualsWithDelta($baseUnitsPerUnit, $actualBaseUnitsPerEPSGUnit->getValue(), $delta);
        $this->assertSame($unitName, $gigsUnit->getUnitName());
    }

    public function series3200UnitData(): Generator
    {
        [$header, $body] = $this->parseDataFile(__DIR__ . '/GIGS 3200 User-defined Geodetic Data Objects test data/ASCII/GIGS_user_3201_Unit.txt');

        foreach ($body as $row) {
            yield '#' . $row[0] => [$row[0], $row[1], $row[2], $row[3], $row[5]];
        }
    }

    /**
     * @dataProvider series3200EllipsoidData
     */
    public function testSeries3200Ellipsoids(string $gigsCode, string $gigsName, string $semiMajorAxis, $unitName, string $inverseFlattening, string $semiMinorAxis): void
    {
        if ($semiMinorAxis === '0' && $inverseFlattening === '0') {
            $semiMinorAxis = $semiMajorAxis;
        } elseif ($semiMinorAxis === '0') {
            $semiMinorAxis = $semiMajorAxis - ($semiMajorAxis / $inverseFlattening);
        }

        foreach (Length::getSupportedSRIDs() as $srid => $name) {
            if ($name === $unitName) {
                Ellipsoid::registerCustomEllipsoid('urn:ogc:def:ellipsoid:GIGS::' . $gigsCode, $gigsName, (float) $semiMajorAxis, (float) $semiMinorAxis, $srid);
                break;
            }
        }

        $this->assertInstanceOf(Ellipsoid::class, Ellipsoid::fromSRID('urn:ogc:def:ellipsoid:GIGS::' . $gigsCode));
    }

    public function series3200EllipsoidData(): Generator
    {
        [$header, $body] = $this->parseDataFile(__DIR__ . '/GIGS 3200 User-defined Geodetic Data Objects test data/ASCII/GIGS_user_3202_Ellipsoid.txt');

        foreach ($body as $row) {
            yield '#' . $row[0] => [$row[0], $row[1], $row[2], $row[3], $row[4], $row[5]];
        }
    }

    /**
     * @dataProvider series3200PrimeMeridianData
     */
    public function testSeries3200PrimeMeridians(string $gigsCode, string $gigsName, string $longitudeFromGreenwich, string $unitName): void
    {
        if ($unitName !== 'sexagesimal DMS') {
            $longitudeFromGreenwich = (float) $longitudeFromGreenwich;
        }

        foreach (Angle::getSupportedSRIDs() as $srid => $name) {
            if ($name === $unitName) {
                PrimeMeridian::registerCustomMeridian('urn:ogc:def:meridian:GIGS::' . $gigsCode, $gigsName, $longitudeFromGreenwich, $srid);
                break;
            }
        }

        $this->assertInstanceOf(PrimeMeridian::class, PrimeMeridian::fromSRID('urn:ogc:def:meridian:GIGS::' . $gigsCode));
    }

    public function series3200PrimeMeridianData(): Generator
    {
        [$header, $body] = $this->parseDataFile(__DIR__ . '/GIGS 3200 User-defined Geodetic Data Objects test data/ASCII/GIGS_user_3203_PrimeMeridian.txt');

        foreach ($body as $row) {
            yield '#' . $row[0] => [$row[0], $row[1], $row[2], $row[3]];
        }
    }

    /**
     * @dataProvider series7000DeprecationData
     */
    public function testSeries7000Deprecation(string $epsgCode, string $entityType): void
    {
        $this->expectException(UnknownSRIDException::class);

        $object = match ($entityType) {
            'Coordinate_Operation' => CoordinateOperations::getOperationData('urn:ogc:def:coordinateOperation:EPSG::' . $epsgCode),
            'Coordinate Reference System' => CoordinateReferenceSystem::fromSRID('urn:ogc:def:crs:EPSG::' . $epsgCode),
        };
    }

    public function series7000DeprecationData(): Generator
    {
        [$header, $body] = $this->parseDataFile(__DIR__ . '/GIGS 7000 Deprecation test data/ASCII/GIGS_dep_7001.txt');

        foreach ($body as $row) {
            yield [$row[0], $row[1]];
        }
    }

    private function parseDataFile(string $filename): array
    {
        $file = new SplFileObject($filename);

        $header = [];
        $body = [];
        while (!$file->eof()) {
            $line = $file->fgets();
            if ($line !== '') {
                if ($line[0] === '#') {
                    $header[] = $line;
                } else {
                    $body[] = explode("\t", $line);
                }
            }
        }

        return [$header, $body];
    }
}
