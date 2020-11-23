<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord;

use DateTime;
use DateTimeImmutable;
use PHPCoord\CoordinateReferenceSystem\CoordinateReferenceSystem;
use PHPCoord\CoordinateReferenceSystem\Geographic2D;
use PHPCoord\CoordinateReferenceSystem\Geographic3D;
use PHPCoord\CoordinateReferenceSystem\Projected;
use PHPCoord\CoordinateSystem\CoordinateSystem;
use PHPCoord\Datum\Datum;
use PHPCoord\Datum\Ellipsoid;
use PHPCoord\Exception\InvalidCoordinateReferenceSystemException;
use PHPCoord\UnitOfMeasure\Angle\ArcSecond;
use PHPCoord\UnitOfMeasure\Angle\Degree;
use PHPCoord\UnitOfMeasure\Angle\Radian;
use PHPCoord\UnitOfMeasure\Length\Metre;
use PHPCoord\UnitOfMeasure\Scale\Coefficient;
use PHPCoord\UnitOfMeasure\Scale\Unity;
use PHPCoord\UnitOfMeasure\UnitOfMeasure;
use PHPCoord\UnitOfMeasure\UnitOfMeasureFactory;
use PHPUnit\Framework\TestCase;

class GeographicPointTest extends TestCase
{
    public function test2D(): void
    {
        $object = GeographicPoint::create(new Degree(0.123), new Degree(0.456), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84));
        self::assertEquals(0.123, $object->getLatitude()->getValue());
        self::assertEquals(0.456, $object->getLongitude()->getValue());
        self::assertNull($object->getHeight());
        self::assertEquals(4326, $object->getCRS()->getEpsgCode());
        self::assertNull($object->getCoordinateEpoch());
        self::assertEquals('(0.123, 0.456)', $object->__toString());
    }

    public function test2DWithEpochDateTime(): void
    {
        $object = GeographicPoint::create(new Degree(0.123), new Degree(0.456), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84), new DateTime('2003-02-01'));
        self::assertEquals(0.123, $object->getLatitude()->getValue());
        self::assertEquals(0.456, $object->getLongitude()->getValue());
        self::assertNull($object->getHeight());
        self::assertEquals(4326, $object->getCRS()->getEpsgCode());
        self::assertEquals('2003-02-01', $object->getCoordinateEpoch()->format('Y-m-d'));
        self::assertEquals('(0.123, 0.456)', $object->__toString());
    }

    public function test2DWithEpochDateTimeImmutable(): void
    {
        $object = GeographicPoint::create(new Degree(0.123), new Degree(0.456), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84), new DateTimeImmutable('2003-02-01'));
        self::assertEquals(0.123, $object->getLatitude()->getValue());
        self::assertEquals(0.456, $object->getLongitude()->getValue());
        self::assertNull($object->getHeight());
        self::assertEquals(4326, $object->getCRS()->getEpsgCode());
        self::assertEquals('2003-02-01', $object->getCoordinateEpoch()->format('Y-m-d'));
        self::assertEquals('(0.123, 0.456)', $object->__toString());
    }

    public function test2DWithRadianAsUnits(): void
    {
        $object = GeographicPoint::create(new Radian(0.123), new Radian(0.123), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84));
        self::assertEquals(7.047380880109133, $object->getLatitude()->getValue());
        self::assertEquals(7.047380880109133, $object->getLongitude()->getValue());
    }

    public function test2DWithHeight(): void
    {
        $this->expectException(InvalidCoordinateReferenceSystemException::class);
        $object = GeographicPoint::create(new Degree(0.123), new Degree(0.456), new Metre(789), CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84));
    }

    public function test3D(): void
    {
        $object = GeographicPoint::create(new Degree(0.123), new Degree(0.456), new Metre(789), CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_84));
        self::assertEquals(0.123, $object->getLatitude()->getValue());
        self::assertEquals(0.456, $object->getLongitude()->getValue());
        self::assertEquals(789, $object->getHeight()->getValue());
        self::assertEquals(4979, $object->getCRS()->getEpsgCode());
        self::assertEquals('(0.123, 0.456, 789)', $object->__toString());
    }

    public function test3DWithRadianAndFeetAsUnits(): void
    {
        $object = GeographicPoint::create(new Radian(0.123), new Radian(0.123), UnitOfMeasureFactory::makeUnit(123, UnitOfMeasure::EPSG_LENGTH_FOOT), CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_84));
        self::assertEquals(7.047380880109133, $object->getLatitude()->getValue());
        self::assertEquals(7.047380880109133, $object->getLongitude()->getValue());
        self::assertEquals(37.4904, $object->getHeight()->getValue());
    }

    public function test3DWithoutHeight(): void
    {
        $this->expectException(InvalidCoordinateReferenceSystemException::class);
        $object = GeographicPoint::create(new Degree(0.123), new Degree(0.456), null, CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_84));
    }

    public function testDistanceCalculation(): void
    {
        $from = GeographicPoint::create(new Degree(51.54105), new Degree(-0.12319), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84));
        $to = GeographicPoint::create(new Degree(51.507977), new Degree(-0.124588), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84));
        self::assertEqualsWithDelta(3679, $from->calculateDistance($to)->getValue(), 1);
    }

    public function test2DCoordinateFrameRotation(): void
    {
        $from = GeographicPoint::create(new Degree(55.0), new Degree(44.0), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_72));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84);
        $to = $from->coordinateFrameRotation($toCRS, new Metre(0), new Metre(0), new Metre(4.5), new ArcSecond(0), new ArcSecond(0), new ArcSecond(-0.554), UnitOfMeasureFactory::makeUnit(0.219, UnitOfMeasure::EPSG_SCALE_PARTS_PER_MILLION));

        self::assertEqualsWithDelta(55.000025, $to->getLatitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(44.000154, $to->getLongitude()->getValue(), 0.000001);
        self::assertNull($to->getHeight());
    }

    public function test3DCoordinateFrameRotation(): void
    {
        $from = GeographicPoint::create(new Degree(55.0), new Degree(44.0), new Metre(0), CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_72));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_84);
        $to = $from->coordinateFrameRotation($toCRS, new Metre(0), new Metre(0), new Metre(4.5), new ArcSecond(0), new ArcSecond(0), new ArcSecond(-0.554), UnitOfMeasureFactory::makeUnit(0.219, UnitOfMeasure::EPSG_SCALE_PARTS_PER_MILLION));

        self::assertEqualsWithDelta(55.000025, $to->getLatitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(44.000154, $to->getLongitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(3.22, $to->getHeight()->getValue(), 0.01);
    }

    public function test2DPositionVectorTransformation(): void
    {
        $from = GeographicPoint::create(new Degree(55.0), new Degree(44.0), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_72));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84);
        $to = $from->positionVectorTransformation($toCRS, new Metre(0), new Metre(0), new Metre(4.5), new ArcSecond(0), new ArcSecond(0), new ArcSecond(0.554), UnitOfMeasureFactory::makeUnit(0.219, UnitOfMeasure::EPSG_SCALE_PARTS_PER_MILLION));

        self::assertEqualsWithDelta(55.000025, $to->getLatitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(44.000154, $to->getLongitude()->getValue(), 0.000001);
        self::assertNull($to->getHeight());
    }

    public function test3DPositionVectorTransformation(): void
    {
        $from = GeographicPoint::create(new Degree(55.0), new Degree(44.0), new Metre(0), CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_72));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_84);
        $to = $from->positionVectorTransformation($toCRS, new Metre(0), new Metre(0), new Metre(4.5), new ArcSecond(0), new ArcSecond(0), new ArcSecond(0.554), UnitOfMeasureFactory::makeUnit(0.219, UnitOfMeasure::EPSG_SCALE_PARTS_PER_MILLION));

        self::assertEqualsWithDelta(55.000025, $to->getLatitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(44.000154, $to->getLongitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(3.22, $to->getHeight()->getValue(), 0.01);
    }

    public function test2DCoordinateFrameMolodenskyBadekas(): void
    {
        $from = GeographicPoint::create(new Degree(9.58344056), new Degree(-66.08002528), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_LA_CANOA));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84);
        $to = $from->coordinateFrameMolodenskyBadekas($toCRS, new Metre(-270.933), new Metre(115.599), new Metre(-360.226), new ArcSecond(-5.266), new ArcSecond(-1.238), new ArcSecond(2.381), UnitOfMeasureFactory::makeUnit(-5.109, UnitOfMeasure::EPSG_SCALE_PARTS_PER_MILLION), new Metre(2464351.59), new Metre(-5783466.61), new Metre(974809.81));

        self::assertEqualsWithDelta(9.580278, $to->getLatitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(-66.081862, $to->getLongitude()->getValue(), 0.000001);
        self::assertNull($to->getHeight());
    }

    public function test3DCoordinateFrameMolodenskyBadekas(): void
    {
        $from = GeographicPoint::create(new Degree(9.58344056), new Degree(-66.08002528), new Metre(201.465), CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_LGD2006));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_REGVEN);
        $to = $from->coordinateFrameMolodenskyBadekas($toCRS, new Metre(-270.933), new Metre(115.599), new Metre(-360.226), new ArcSecond(-5.266), new ArcSecond(-1.238), new ArcSecond(2.381), UnitOfMeasureFactory::makeUnit(-5.109, UnitOfMeasure::EPSG_SCALE_PARTS_PER_MILLION), new Metre(2464351.59), new Metre(-5783466.61), new Metre(974809.81));

        self::assertEqualsWithDelta(9.5802779305981, $to->getLatitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(-66.081862, $to->getLongitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(180.51, $to->getHeight()->getValue(), 0.01);
    }

    public function test2DPositionVectorMolodenskyBadekas(): void
    {
        $from = GeographicPoint::create(new Degree(9.58344056), new Degree(-66.08002528), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_LA_CANOA));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84);
        $to = $from->positionVectorMolodenskyBadekas($toCRS, new Metre(-270.933), new Metre(115.599), new Metre(-360.226), new ArcSecond(5.266), new ArcSecond(1.238), new ArcSecond(-2.381), UnitOfMeasureFactory::makeUnit(-5.109, UnitOfMeasure::EPSG_SCALE_PARTS_PER_MILLION), new Metre(2464351.59), new Metre(-5783466.61), new Metre(974809.81));

        self::assertEqualsWithDelta(9.580278, $to->getLatitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(-66.081862, $to->getLongitude()->getValue(), 0.000001);
        self::assertNull($to->getHeight());
    }

    public function test3DPositionVectorMolodenskyBadekas(): void
    {
        $from = GeographicPoint::create(new Degree(9.58344056), new Degree(-66.08002528), new Metre(201.465), CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_LGD2006));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_REGVEN);
        $to = $from->positionVectorMolodenskyBadekas($toCRS, new Metre(-270.933), new Metre(115.599), new Metre(-360.226), new ArcSecond(5.266), new ArcSecond(1.238), new ArcSecond(-2.381), UnitOfMeasureFactory::makeUnit(-5.109, UnitOfMeasure::EPSG_SCALE_PARTS_PER_MILLION), new Metre(2464351.59), new Metre(-5783466.61), new Metre(974809.81));

        self::assertEqualsWithDelta(9.5802779305981, $to->getLatitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(-66.081862, $to->getLongitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(180.51, $to->getHeight()->getValue(), 0.01);
    }

    public function testGeographic2DAbridgedMolodensky(): void
    {
        $from = GeographicPoint::create(new Degree(53.80939444), new Degree(2.12955000), new Metre(73), CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_84));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84);
        $to = $from->abridgedMolodensky($toCRS, new Metre(84.87), new Metre(96.49), new Metre(116.95), new Metre(251), new Unity(0.003367003 - 0.003352811));

        self::assertEqualsWithDelta(53.81015639, $to->getLatitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(2.13096583, $to->getLongitude()->getValue(), 0.000001);
        self::assertNull($to->getHeight());
    }

    public function testGeographic2DMolodensky(): void
    {
        $from = GeographicPoint::create(new Degree(53.80939444), new Degree(2.12955000), new Metre(73), CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_84));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84);
        $to = $from->molodensky($toCRS, new Metre(84.87), new Metre(96.49), new Metre(116.95), new Metre(251), new Unity(0.003367003 - 0.003352811));

        self::assertEqualsWithDelta(53.81015639, $to->getLatitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(2.13096583, $to->getLongitude()->getValue(), 0.000001);
        self::assertNull($to->getHeight());
    }

    public function testGeographic3DAbridgedMolodensky(): void
    {
        $from = GeographicPoint::create(new Degree(53.80939444), new Degree(2.12955000), new Metre(73), CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_84));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_84);
        $to = $from->abridgedMolodensky($toCRS, new Metre(84.87), new Metre(96.49), new Metre(116.95), new Metre(251), new Unity(0.003367003 - 0.003352811));

        self::assertEqualsWithDelta(53.81015639, $to->getLatitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(2.13096583, $to->getLongitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(28.091, $to->getHeight()->getValue(), 0.01);
    }

    public function testGeographic3DMolodensky(): void
    {
        $from = GeographicPoint::create(new Degree(53.80939444), new Degree(2.12955000), new Metre(73), CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_84));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_84);
        $to = $from->molodensky($toCRS, new Metre(84.87), new Metre(96.49), new Metre(116.95), new Metre(251), new Unity(0.003367003 - 0.003352811));

        self::assertEqualsWithDelta(53.81015639, $to->getLatitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(2.13096583, $to->getLongitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(28.018, $to->getHeight()->getValue(), 0.01);
    }

    public function testAlbersEqualAreaNorthHemisphere(): void
    {
        $from = GeographicPoint::create(new Radian(0.746128255), new Radian(-1.374446786), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_NAD83));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_NAD83_GREAT_LAKES_ALBERS);
        $to = $from->albersEqualArea($toCRS, new Degree(45.568977), new Degree(-84.455955), new Degree(42.122774), new Degree(49.01518), new Metre(1000000), new Metre(1000000));

        self::assertEqualsWithDelta(1466493.492, $to->getEasting()->asMetres()->getValue(), 0.01);
        self::assertEqualsWithDelta(702903.006, $to->getNorthing()->asMetres()->getValue(), 0.01);
    }

    public function testAlbersEqualAreaSouthHemisphere(): void
    {
        $from = GeographicPoint::create(new Radian(-0.322895686), new Radian(-0.802858912), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_TWD67));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_TWD67_TM2_ZONE_119);
        $to = $from->albersEqualArea($toCRS, new Degree(-32), new Degree(-60), new Degree(-5), new Degree(-42), new Metre(0), new Metre(0));

        self::assertEqualsWithDelta(1408623.196, $to->getEasting()->asMetres()->getValue(), 0.01);
        self::assertEqualsWithDelta(1507641.482, $to->getNorthing()->asMetres()->getValue(), 0.01);
    }

    public function testAmericanPolyconic(): void
    {
        $from = GeographicPoint::create(new Degree(40), new Degree(-75), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_NAD27));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_NAD27_ALABAMA_EAST);
        $to = $from->americanPolyconic($toCRS, new Degree(30), new Degree(-96), new Metre(10), new Metre(20));

        self::assertEqualsWithDelta(1776784.5, $to->getEasting()->asMetres()->getValue(), 0.1);
        self::assertEqualsWithDelta(1319677.8, $to->getNorthing()->asMetres()->getValue(), 0.1);
    }

    public function testBonneNorthOrientated(): void
    {
        $from = GeographicPoint::create(new Degree(30), new Degree(-85), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_NAD27));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_NAD27_ALABAMA_EAST);
        $to = $from->bonne($toCRS, new Degree(40), new Degree(-75), new Metre(10), new Metre(20));

        self::assertEqualsWithDelta(-962905.1, $to->getEasting()->asMetres()->getValue(), 0.01);
        self::assertEqualsWithDelta(-1056045.0, $to->getNorthing()->asMetres()->getValue(), 0.01);
    }

    public function testBonneSouthOrientated(): void
    {
        $from = GeographicPoint::create(new Degree(30), new Degree(-85), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_NAD27));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_NAD27_ALABAMA_EAST);
        $to = $from->bonneSouthOrientated($toCRS, new Degree(40), new Degree(-75), new Metre(10), new Metre(20));

        self::assertEqualsWithDelta(-962925.1, $to->getEasting()->asMetres()->getValue(), 0.01);
        self::assertEqualsWithDelta(-1056085.0, $to->getNorthing()->asMetres()->getValue(), 0.01);
    }

    public function testCassiniSoldner(): void
    {
        $from = GeographicPoint::create(new Degree(10), new Degree(-62), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_TRINIDAD_1903));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_TRINIDAD_1903_TRINIDAD_GRID);
        $to = $from->cassiniSoldner($toCRS, new Radian(0.182241463), new Radian(-1.070468608), UnitOfMeasureFactory::makeUnit(430000, UnitOfMeasure::EPSG_LENGTH_CLARKE_S_LINK), UnitOfMeasureFactory::makeUnit(325000, UnitOfMeasure::EPSG_LENGTH_CLARKE_S_LINK));

        self::assertEqualsWithDelta(66644.94, $to->getEasting()->getValue(), 0.01);
        self::assertEqualsWithDelta(82536.22, $to->getNorthing()->getValue(), 0.01);
    }

    public function testColumbiaUrban(): void
    {
        $from = GeographicPoint::create(new Radian(0.083775804), new Radian(-1.295906970), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_MAGNA_SIRGAS));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_MAGNA_SIRGAS_BOGOTA_URBAN_GRID);
        $to = $from->columbiaUrban($toCRS, new Radian(0.081689893), new Radian(-1.294102154), new Metre(92334.879), new Metre(109320.965), new Metre(2550));

        self::assertEqualsWithDelta(80859.033, $to->getEasting()->getValue(), 0.01);
        self::assertEqualsWithDelta(122543.174, $to->getNorthing()->getValue(), 0.01);
    }

    public function testEqualEarth(): void
    {
        $from = GeographicPoint::create(new Radian(0.5944163293), new Radian(-2.0454693977), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_WGS_84_EQUAL_EARTH_AMERICAS);
        $to = $from->equalEarth($toCRS, new Degree(-90), new Metre(0), new Metre(0));

        self::assertEqualsWithDelta(-2390749.042, $to->getEasting()->getValue(), 0.001);
        self::assertEqualsWithDelta(4242849.758, $to->getNorthing()->getValue(), 0.001);
    }

    public function testEquidistantCylindrical(): void
    {
        $from = GeographicPoint::create(new Degree(55), new Degree(10), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_WGS_84_WORLD_EQUIDISTANT_CYLINDRICAL);
        $to = $from->equidistantCylindrical($toCRS, new Degree(0), new Degree(0), new Metre(0), new Metre(0));

        self::assertEqualsWithDelta(1113194.91, $to->getEasting()->getValue(), 0.01);
        self::assertEqualsWithDelta(6097230.31, $to->getNorthing()->getValue(), 0.01);
    }

    public function testGuamProjection(): void
    {
        $from = GeographicPoint::create(new Radian(0.232810140), new Radian(2.524362746), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_GUAM_1963));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_GUAM_1963_GUAM_SPCS);
        $to = $from->guamProjection($toCRS, new Radian(0.235138896), new Radian(2.526342288), new Metre(50000), new Metre(50000));

        self::assertEqualsWithDelta(37712.48, $to->getEasting()->getValue(), 0.01);
        self::assertEqualsWithDelta(35242.00, $to->getNorthing()->getValue(), 0.01);
    }

    public function testHyperbolicCassiniSoldner(): void
    {
        $from = GeographicPoint::create(new Radian(-0.293938867), new Radian(3.141493807), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_VANUA_LEVU_1915));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_VANUA_LEVU_1915_VANUA_LEVU_GRID);
        $to = $from->hyperbolicCassiniSoldner($toCRS, new Radian(-0.283616003), new Radian(3.129957125), UnitOfMeasureFactory::makeUnit(12513.318, UnitOfMeasure::EPSG_LENGTH_CHAIN), UnitOfMeasureFactory::makeUnit(16628.885, UnitOfMeasure::EPSG_LENGTH_CHAIN));

        self::assertEqualsWithDelta(1601528.90, $to->getEasting()->getValue(), 0.1);
        self::assertEqualsWithDelta(1336966.01, $to->getNorthing()->getValue(), 0.1);
    }

    public function testGeocentricTranslation(): void
    {
        $from = GeographicPoint::create(new Degree(38.14349028), new Degree(23.80450972), new Metre(12), CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_84));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_84);
        $to = $from->geocentricTranslation($toCRS, new Metre(84.87), new Metre(96.49), new Metre(116.95));

        self::assertEqualsWithDelta(38.14367013, $to->getLatitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(23.80512601, $to->getLongitude()->getValue(), 0.000001);
        self::assertEqualsWithDelta(175.93046824727, $to->getHeight()->getValue(), 0.00001);
    }

    public function testKrovak(): void
    {
        $from = GeographicPoint::create(new Degree(50.20901167), new Degree(16.84977194), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_S_JTSK));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_S_JTSK_FERRO_KROVAK);
        $to = $from->krovak($toCRS, new Radian(0.863937979), new Radian(0.741764932), new Radian(0.528627763), new Radian(1.370083463), new Coefficient(0.9999), new Metre(0), new Metre(0));

        self::assertEqualsWithDelta(568991.00, $to->getWesting()->getValue(), 0.01);
        self::assertEqualsWithDelta(1050538.64, $to->getSouthing()->getValue(), 0.01);
    }

    public function testKrovakNorthOrientated(): void
    {
        $from = GeographicPoint::create(new Degree(50.20901167), new Degree(16.84977194), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_S_JTSK));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_S_JTSK_FERRO_KROVAK_EAST_NORTH);
        $to = $from->krovak($toCRS, new Radian(0.863937979), new Radian(0.741764932), new Radian(0.528627763), new Radian(1.370083463), new Coefficient(0.9999), new Metre(0), new Metre(0));

        self::assertEqualsWithDelta(-568991.00, $to->getEasting()->getValue(), 0.01);
        self::assertEqualsWithDelta(-1050538.64, $to->getNorthing()->getValue(), 0.01);
    }

    public function testKrovakModified(): void
    {
        $from = GeographicPoint::create(new Degree(50.20901167), new Degree(16.84977194), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_S_JTSK_05));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_S_JTSK_05_FERRO_MODIFIED_KROVAK);
        $to = $from->krovakModified($toCRS, new Radian(0.863937979), new Radian(0.741764932), new Radian(0.528627763), new Radian(1.370083463), new Coefficient(0.9999), new Metre(5000000), new Metre(5000000), new Metre(1089000), new Metre(654000), new Coefficient(2.946529277E-02), new Coefficient(2.515965696E-02), new Coefficient(1.193845912E-07), new Coefficient(-4.668270147E-07), new Coefficient(9.233980362E-12), new Coefficient(1.523735715E-12), new Coefficient(1.696780024E-18), new Coefficient(4.408314235E-18), new Coefficient(-8.331083518E-24), new Coefficient(-3.689471323E-24));

        self::assertEqualsWithDelta(5568990.91, $to->getWesting()->getValue(), 0.01);
        self::assertEqualsWithDelta(6050538.71, $to->getSouthing()->getValue(), 0.01);
    }

    public function testKrovakModifiedNorthOrientated(): void
    {
        $from = GeographicPoint::create(new Degree(50.20901167), new Degree(16.84977194), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_S_JTSK_05));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_S_JTSK_05_FERRO_MODIFIED_KROVAK_EAST_NORTH);
        $to = $from->krovakModified($toCRS, new Radian(0.863937979), new Radian(0.741764932), new Radian(0.528627763), new Radian(1.370083463), new Coefficient(0.9999), new Metre(5000000), new Metre(5000000), new Metre(1089000), new Metre(654000), new Coefficient(2.946529277E-02), new Coefficient(2.515965696E-02), new Coefficient(1.193845912E-07), new Coefficient(-4.668270147E-07), new Coefficient(9.233980362E-12), new Coefficient(1.523735715E-12), new Coefficient(1.696780024E-18), new Coefficient(4.408314235E-18), new Coefficient(-8.331083518E-24), new Coefficient(-3.689471323E-24));

        self::assertEqualsWithDelta(-5568990.91, $to->getEasting()->getValue(), 0.01);
        self::assertEqualsWithDelta(-6050538.71, $to->getNorthing()->getValue(), 0.01);
    }

    public function testLambertAzimuthalEqualArea(): void
    {
        $from = GeographicPoint::create(new Degree(50), new Degree(5), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_ETRS89));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_ETRS89_EXTENDED_LAEA_EUROPE);
        $to = $from->lambertAzimuthalEqualArea($toCRS, new Degree(52), new Degree(10), new Metre(4321000), new Metre(3210000));

        self::assertEqualsWithDelta(3962799.45, $to->getEasting()->getValue(), 0.01);
        self::assertEqualsWithDelta(2999718.85, $to->getNorthing()->getValue(), 0.01);
    }

    public function testLambertAzimuthalEqualAreaSpherical(): void
    {
        $fromCRS = new Geographic2D(
            0,
            CoordinateSystem::fromEPSGCode(6422),
            new Datum(
                Datum::DATUM_TYPE_GEODETIC,
                new Ellipsoid(
                    new Metre(3),
                    new Metre(3)
                ),
                null,
                null
            )
        );
        $from = GeographicPoint::create(new Degree(-20), new Degree(100), null, $fromCRS);

        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_ETRS89_EXTENDED_LAEA_EUROPE);
        $to = $from->lambertAzimuthalEqualAreaSpherical($toCRS, new Degree(40), new Degree(-100), new Metre(1), new Metre(2));

        self::assertEqualsWithDelta(-3.2339303, $to->getEasting()->getValue(), 0.0000001);
        self::assertEqualsWithDelta(6.0257775, $to->getNorthing()->getValue(), 0.0000001);
    }

    public function testLambertConicConformal1SP(): void
    {
        $from = GeographicPoint::create(new Radian(0.31297535), new Radian(-1.34292061), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_JAD69));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_JAD69_JAMAICA_NATIONAL_GRID);
        $to = $from->lambertConicConformal1SP($toCRS, new Degree(18), new Degree(-77), new Coefficient(1), new Metre(250000), new Metre(150000));

        self::assertEqualsWithDelta(255966.59, $to->getEasting()->getValue(), 0.01);
        self::assertEqualsWithDelta(142493.51, $to->getNorthing()->getValue(), 0.01);
    }

    public function testLambertConicConformal2SP(): void
    {
        $from = GeographicPoint::create(new Radian(0.49741884), new Radian(-1.67551608), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_NAD27));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_NAD27_TEXAS_SOUTH_CENTRAL);
        $to = $from->lambertConicConformal2SP($toCRS, new Radian(0.48578331), new Radian(-1.72787596), new Radian(0.49538262), new Radian(0.52854388), UnitOfMeasureFactory::makeUnit(2000000, UnitOfMeasure::EPSG_LENGTH_US_SURVEY_FOOT), new Metre(0));

        self::assertEqualsWithDelta(2963503.95, $to->getEasting()->getValue(), 0.01);
        self::assertEqualsWithDelta(254759.84, $to->getNorthing()->getValue(), 0.01);
    }

    public function testLambertConicConformal2SPMichigan(): void
    {
        $from = GeographicPoint::create(new Radian(0.763581548), new Radian(-1.451532161), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_NAD27));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_NAD27_MICHIGAN_CENTRAL);
        $to = $from->lambertConicConformal2SPMichigan($toCRS, new Radian(0.756018454), new Radian(-1.471894336), new Radian(0.771144641), new Radian(0.797615468), UnitOfMeasureFactory::makeUnit(2000000, UnitOfMeasure::EPSG_LENGTH_US_SURVEY_FOOT), new Metre(0), new Coefficient(1.0000382));

        self::assertEqualsWithDelta(2308335.75, $to->getEasting()->getValue(), 0.01);
        self::assertEqualsWithDelta(160210.49, $to->getNorthing()->getValue(), 0.01);
    }

    public function testLambertConicConformal2SPBelgium(): void
    {
        $from = GeographicPoint::create(new Radian(0.88452540), new Radian(0.10135773), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_BELGE_1972));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_BELGE_1972_BELGE_LAMBERT_72);
        $to = $from->lambertConicConformal2SPBelgium($toCRS, new Radian(1.57079633), new Radian(0.07604294), new Radian(0.86975574), new Radian(0.89302680), new Metre(150000.01), new Metre(5400088.44));

        self::assertEqualsWithDelta(251763.20, $to->getEasting()->getValue(), 0.01);
        self::assertEqualsWithDelta(153034.10, $to->getNorthing()->getValue(), 0.01);
    }

    public function testLambertConicNearConformal(): void
    {
        $from = GeographicPoint::create(new Radian(0.654874806), new Radian(0.595793792), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_DEIR_EZ_ZOR));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_DEIR_EZ_ZOR_LEVANT_ZONE);
        $to = $from->lambertConicNearConformal($toCRS, new Radian(0.604756586), new Radian(0.651880476), new Coefficient(0.99962560), new Metre(300000), new Metre(300000));

        self::assertEqualsWithDelta(15707.96, $to->getEasting()->getValue(), 0.01);
        self::assertEqualsWithDelta(623165.96, $to->getNorthing()->getValue(), 0.01);
    }

    public function testLambertCylindricalEqualArea(): void
    {
        $from = GeographicPoint::create(new Degree(10), new Degree(-78), null, CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_NAD27));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Projected::EPSG_NAD27_ALABAMA_EAST);
        $to = $from->lambertCylindricalEqualArea($toCRS, new Degree(5), new Degree(-75), new Metre(0), new Metre(0));

        self::assertEqualsWithDelta(-332699.8, $to->getEasting()->asMetres()->getValue(), 0.1);
        self::assertEqualsWithDelta(1104391.2, $to->getNorthing()->asMetres()->getValue(), 0.1);
    }

    public function testThreeDToTwoD(): void
    {
        $from = GeographicPoint::create(new Degree(0.123), new Degree(0.456), new Metre(789), CoordinateReferenceSystem::fromEPSGCode(Geographic3D::EPSG_WGS_84));
        $toCRS = CoordinateReferenceSystem::fromEPSGCode(Geographic2D::EPSG_WGS_84);
        $to = $from->threeDToTwoD($toCRS);

        self::assertEquals(0.123, $to->getLatitude()->getValue());
        self::assertEquals(0.456, $to->getLongitude()->getValue());
        self::assertNull($to->getHeight());
    }
}
