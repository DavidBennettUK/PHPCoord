<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord;

use function class_exists;
use DateTime;
use DateTimeImmutable;
use PHPCoord\CoordinateOperation\CoordinateOperationParams;
use PHPCoord\CoordinateOperation\CoordinateOperations;
use PHPCoord\CoordinateOperation\CRSTransformations;
use PHPCoord\CoordinateOperation\GTXNZGeoid2016Provider;
use PHPCoord\CoordinateOperation\IGNESHeightETRS89REDNAPSpainProvider;
use PHPCoord\CoordinateOperation\IGNFHeightRGF93v2bNGFIGN69FranceProvider;
use PHPCoord\CoordinateOperation\OSTN15OSGM15Provider;
use PHPCoord\CoordinateReferenceSystem\Compound;
use PHPCoord\CoordinateReferenceSystem\CompoundSRIDData;
use PHPCoord\CoordinateReferenceSystem\CoordinateReferenceSystem;
use PHPCoord\CoordinateReferenceSystem\Geographic;
use PHPCoord\CoordinateReferenceSystem\Geographic2D;
use PHPCoord\CoordinateReferenceSystem\Geographic3D;
use PHPCoord\CoordinateReferenceSystem\Projected;
use PHPCoord\CoordinateReferenceSystem\Vertical;
use PHPCoord\Exception\InvalidCoordinateReferenceSystemException;
use PHPCoord\Geometry\BoundingArea;
use PHPCoord\UnitOfMeasure\Angle\Degree;
use PHPCoord\UnitOfMeasure\Length\Metre;
use PHPUnit\Framework\TestCase;

class CompoundPointTest extends TestCase
{
    use CompoundSRIDData;

    public function testCompound(): void
    {
        $object = CompoundPoint::create(
            Compound::fromSRID(Compound::EPSG_WGS_84_WORLD_MERCATOR_PLUS_EGM2008_HEIGHT),
            ProjectedPoint::create(Projected::fromSRID(Projected::EPSG_WGS_84_WORLD_MERCATOR), new Metre(123), new Metre(456), null, null),
            VerticalPoint::create(Vertical::fromSRID(Vertical::EPSG_EGM2008_HEIGHT), new Metre(789))
        );
        self::assertEquals(123, $object->getHorizontalPoint()->getEasting()->getValue());
        self::assertEquals(456, $object->getHorizontalPoint()->getNorthing()->getValue());
        self::assertEquals(789, $object->getVerticalPoint()->getHeight()->getValue());
        self::assertEquals('urn:ogc:def:crs:EPSG::6893', $object->getCRS()->getSrid());
        self::assertNull($object->getCoordinateEpoch());
        self::assertEquals('((123, 456), (789))', $object->__toString());
    }

    public function testCompoundWithEpochDateTime(): void
    {
        $object = CompoundPoint::create(
            Compound::fromSRID(Compound::EPSG_WGS_84_WORLD_MERCATOR_PLUS_EGM2008_HEIGHT),
            ProjectedPoint::create(Projected::fromSRID(Projected::EPSG_WGS_84_WORLD_MERCATOR), new Metre(123), new Metre(456), null, null),
            VerticalPoint::create(Vertical::fromSRID(Vertical::EPSG_EGM2008_HEIGHT), new Metre(789)),
            new DateTime('2003-02-01')
        );
        self::assertEquals(123, $object->getHorizontalPoint()->getEasting()->getValue());
        self::assertEquals(456, $object->getHorizontalPoint()->getNorthing()->getValue());
        self::assertEquals(789, $object->getVerticalPoint()->getHeight()->getValue());
        self::assertEquals('urn:ogc:def:crs:EPSG::6893', $object->getCRS()->getSrid());
        self::assertEquals('2003-02-01', $object->getCoordinateEpoch()->format('Y-m-d'));
        self::assertEquals('((123, 456), (789))', $object->__toString());
    }

    public function testCompoundWithEpochDateTimeImmutable(): void
    {
        $object = CompoundPoint::create(
            Compound::fromSRID(Compound::EPSG_WGS_84_WORLD_MERCATOR_PLUS_EGM2008_HEIGHT),
            ProjectedPoint::create(Projected::fromSRID(Projected::EPSG_WGS_84_WORLD_MERCATOR), new Metre(123), new Metre(456), null, null),
            VerticalPoint::create(Vertical::fromSRID(Vertical::EPSG_EGM2008_HEIGHT), new Metre(789)),
            new DateTimeImmutable('2003-02-01')
        );
        self::assertEquals(123, $object->getHorizontalPoint()->getEasting()->getValue());
        self::assertEquals(456, $object->getHorizontalPoint()->getNorthing()->getValue());
        self::assertEquals(789, $object->getVerticalPoint()->getHeight()->getValue());
        self::assertEquals('urn:ogc:def:crs:EPSG::6893', $object->getCRS()->getSrid());
        self::assertEquals('2003-02-01', $object->getCoordinateEpoch()->format('Y-m-d'));
        self::assertEquals('((123, 456), (789))', $object->__toString());
    }

    public function testDistanceCalculation(): void
    {
        $from = CompoundPoint::create(
            Compound::fromSRID(Compound::EPSG_WGS_84_WORLD_MERCATOR_PLUS_EGM2008_HEIGHT),
            ProjectedPoint::create(Projected::fromSRID(Projected::EPSG_WGS_84_WORLD_MERCATOR), new Metre(438700), new Metre(114800), null, null),
            VerticalPoint::create(Vertical::fromSRID(Vertical::EPSG_EGM2008_HEIGHT), new Metre(789))
        );
        $to = CompoundPoint::create(
            Compound::fromSRID(Compound::EPSG_WGS_84_WORLD_MERCATOR_PLUS_EGM2008_HEIGHT),
            ProjectedPoint::create(Projected::fromSRID(Projected::EPSG_WGS_84_WORLD_MERCATOR), new Metre(533600), new Metre(180500), null, null),
            VerticalPoint::create(Vertical::fromSRID(Vertical::EPSG_EGM2008_HEIGHT), new Metre(789))
        );
        self::assertEqualsWithDelta(115423.134596, $from->calculateDistance($to)->getValue(), 0.000001);
    }

    public function testDistanceDifferentCRS(): void
    {
        $this->expectException(InvalidCoordinateReferenceSystemException::class);
        $from = CompoundPoint::create(
            Compound::fromSRID(Compound::EPSG_CR_SIRGAS_CRTM05_PLUS_DACR52_HEIGHT),
            ProjectedPoint::create(Projected::fromSRID(Projected::EPSG_CR_SIRGAS_CRTM05), new Metre(438700), new Metre(114800), null, null),
            VerticalPoint::create(Vertical::fromSRID(Vertical::EPSG_DACR52_HEIGHT), new Metre(789))
        );
        $to = CompoundPoint::create(
            Compound::fromSRID(Compound::EPSG_OSGB36_BRITISH_NATIONAL_GRID_PLUS_ODN_HEIGHT),
            ProjectedPoint::create(Projected::fromSRID(Projected::EPSG_OSGB36_BRITISH_NATIONAL_GRID), new Metre(533600), new Metre(180500), null, null),
            VerticalPoint::create(Vertical::fromSRID(Vertical::EPSG_ODN_HEIGHT), new Metre(789))
        );
        $from->calculateDistance($to);
    }

    public function testGeographic3DTo2DPlusGravityHeightOSGM15(): void
    {
        if (!class_exists(OSTN15OSGM15Provider::class)) {
            self::markTestSkipped('Requires phpcoord/datapack-europe');
        }
        $from = CompoundPoint::create(
            Compound::fromSRID(Compound::EPSG_ETRS89_PLUS_ODN_HEIGHT),
            GeographicPoint::create(
                Geographic2D::fromSRID(Geographic2D::EPSG_ETRS89),
                new Degree(53.77911025760),
                new Degree(-3.04045490691),
                null
            ),
            VerticalPoint::create(
                Vertical::fromSRID(Vertical::EPSG_ODN_HEIGHT),
                new Metre(12.658)
            )
        );
        $toCRS = Geographic3D::fromSRID(Geographic3D::EPSG_ETRS89);
        $to = $from->geographic3DTo2DPlusGravityHeightOSGM15($toCRS, (new OSTN15OSGM15Provider())->provideGrid(), Geographic2D::EPSG_ETRS89);

        self::assertEqualsWithDelta(53.77911025760, $to->getLatitude()->getValue(), 0.00000000001);
        self::assertEqualsWithDelta(-3.04045490691, $to->getLongitude()->getValue(), 0.00000000001);
        self::assertEqualsWithDelta(64.940, $to->getHeight()->getValue(), 0.001);
    }

    public function testGeographic3DTo2DPlusGravityHeightGTX(): void
    {
        if (!class_exists(GTXNZGeoid2016Provider::class)) {
            self::markTestSkipped('Requires phpcoord/datapack-oceania');
        }
        $from = CompoundPoint::create(
            Compound::fromSRID(Compound::EPSG_NZGD2000_PLUS_NZVD2016_HEIGHT),
            GeographicPoint::create(
                Geographic2D::fromSRID(Geographic2D::EPSG_NZGD2000),
                new Degree(-36.9003),
                new Degree(174.7794),
                null
            ),
            VerticalPoint::create(
                Vertical::fromSRID(Vertical::EPSG_NZVD2016_HEIGHT),
                new Metre(15.715)
            )
        );
        $toCRS = Geographic3D::fromSRID(Geographic3D::EPSG_NZGD2000);
        $to = $from->geographic3DTo2DPlusGravityHeightFromGrid($toCRS, (new GTXNZGeoid2016Provider())->provideGrid());

        self::assertEqualsWithDelta(-36.9003, $to->getLatitude()->getValue(), 0.00000000001);
        self::assertEqualsWithDelta(174.7794, $to->getLongitude()->getValue(), 0.00000000001);
        self::assertEqualsWithDelta(50.000, $to->getHeight()->getValue(), 0.0001);
    }

    public function testGeographic3DTo2DPlusGravityHeightIGNF(): void
    {
        if (!class_exists(IGNFHeightRGF93v2bNGFIGN69FranceProvider::class)) {
            self::markTestSkipped('Requires phpcoord/datapack-europe');
        }
        $from = CompoundPoint::create(
            Compound::fromSRID(Compound::EPSG_RGF93_V2B_PLUS_NGF_IGN69_HEIGHT),
            GeographicPoint::create(
                Geographic2D::fromSRID(Geographic2D::EPSG_RGF93_V2B),
                new Degree(48.858222),
                new Degree(2.2945),
                null
            ),
            VerticalPoint::create(
                Vertical::fromSRID(Vertical::EPSG_NGF_IGN69_HEIGHT),
                new Metre(6.187)
            )
        );
        $toCRS = Geographic3D::fromSRID(Geographic3D::EPSG_RGF93_V2B);
        $to = $from->geographic3DTo2DPlusGravityHeightFromGrid($toCRS, (new IGNFHeightRGF93v2bNGFIGN69FranceProvider())->provideGrid());

        self::assertEqualsWithDelta(48.858222, $to->getLatitude()->getValue(), 0.00000000001);
        self::assertEqualsWithDelta(2.2945, $to->getLongitude()->getValue(), 0.00000000001);
        self::assertEqualsWithDelta(50.000, $to->getHeight()->getValue(), 0.001);
    }

    public function testGeographic3DTo2DPlusGravityHeightIGNESSpain(): void
    {
        if (!class_exists(IGNESHeightETRS89REDNAPSpainProvider::class)) {
            self::markTestSkipped('Requires phpcoord/datapack-europe');
        }
        $from = CompoundPoint::create(
            Compound::fromSRID(Compound::EPSG_ETRS89_PLUS_ALICANTE_HEIGHT),
            GeographicPoint::create(
                Geographic2D::fromSRID(Geographic2D::EPSG_ETRS89),
                new Degree(41.403611),
                new Degree(2.174444),
                null
            ),
            VerticalPoint::create(
                Vertical::fromSRID(Vertical::EPSG_ALICANTE_HEIGHT),
                new Metre(-49.196)
            )
        );
        $toCRS = Geographic3D::fromSRID(Geographic3D::EPSG_ETRS89);
        $to = $from->geographic3DTo2DPlusGravityHeightFromGrid($toCRS, (new IGNESHeightETRS89REDNAPSpainProvider())->provideGrid());

        self::assertEqualsWithDelta(41.403611, $to->getLatitude()->getValue(), 0.00000000001);
        self::assertEqualsWithDelta(2.174444, $to->getLongitude()->getValue(), 0.00000000001);
        self::assertEqualsWithDelta(0.000, $to->getHeight()->getValue(), 0.001);
    }

    /**
     * @group integration
     * @dataProvider supportedOperations
     */
    public function testOperations(string $sourceCrsSrid, string $targetCrsSrid, string $operationSrid, bool $reversible): void
    {
        $operation = CoordinateOperations::getOperationData($operationSrid);
        $operationExtent = BoundingArea::createFromExtentCodes($operation['extent_code']);

        $sourceCRS = Compound::fromSRID($sourceCrsSrid);
        $sourceHorizontalCRS = $sourceCRS->getHorizontal();
        if ($sourceHorizontalCRS instanceof Geographic2D) {
            $centre = $operationExtent->getPointInside();
            $centre[1] = $centre[1]->subtract($sourceCRS->getHorizontal()->getDatum()->getPrimeMeridian()->getGreenwichLongitude()); //compensate for non-Greenwich prime meridian

            $horizontalPoint = GeographicPoint::create($sourceHorizontalCRS, $centre[0], $centre[1], null);
        } elseif ($sourceHorizontalCRS instanceof Geographic2D) {
            $horizontalPoint = ProjectedPoint::create($sourceHorizontalCRS, new Metre(0), new Metre(0), new Metre(0), new Metre(0));
        }
        $verticalCRS = $sourceCRS->getVertical();
        $verticalPoint = VerticalPoint::create($verticalCRS, new Metre(0));
        $targetCRS = CoordinateReferenceSystem::fromSRID($targetCrsSrid);

        $epoch = new DateTime();

        $originalPoint = CompoundPoint::create($sourceCRS, $horizontalPoint, $verticalPoint, $epoch);
        $newPoint = $originalPoint->performOperation($operationSrid, $targetCRS, false);
        self::assertInstanceOf(Point::class, $newPoint);
        self::assertEquals($targetCRS, $newPoint->getCRS());

        if ($reversible) {
            $reversedPoint = $newPoint->performOperation($operationSrid, $sourceCRS, true);

            self::assertEquals($sourceCRS, $reversedPoint->getCRS());
            self::assertEqualsWithDelta($originalPoint->getVerticalPoint()->getHeight()->getValue(), $reversedPoint->getVerticalPoint()->getHeight()->getValue(), 0.001);

            if ($sourceCRS instanceof Geographic) {
                self::assertEqualsWithDelta($originalPoint->getHorizontalPoint()->getLatitude()->getValue(), $reversedPoint->getHorizontalPoint()->getLatitude()->getValue(), 0.001);
                self::assertEqualsWithDelta($originalPoint->getHorizontalPoint()->getLongitude()->getValue(), $reversedPoint->getHorizontalPoint()->getLongitude()->getValue(), 0.001);
            }
        }
    }

    public function supportedOperations(): array
    {
        $toTest = [];
        foreach (CRSTransformations::getSupportedTransformations() as $transformation) {
            $needsNonExistentFile = false;

            if (isset(static::$sridData[$transformation['source_crs']])) {
                //filter out operations that require a grid file that we don't have
                foreach (CoordinateOperationParams::getParamData($transformation['operation']) as $param) {
                    if (isset($param['fileProvider']) && !class_exists($param['fileProvider'])) {
                        $needsNonExistentFile = true;
                    }
                }

                if (!$needsNonExistentFile) {
                    $toTest[$transformation['operation'] . ' ' . $transformation['name'] . ': ' . $transformation['source_crs'] . '->' . $transformation['target_crs']] = [
                        $transformation['source_crs'],
                        $transformation['target_crs'],
                        $transformation['operation'],
                        $transformation['reversible'],
                    ];
                }
            }
        }

        return $toTest;
    }
}
