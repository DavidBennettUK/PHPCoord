<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord;

use function array_merge;
use function class_exists;
use DateTime;
use DateTimeImmutable;
use PHPCoord\CoordinateOperation\CoordinateOperationParams;
use PHPCoord\CoordinateOperation\CoordinateOperations;
use PHPCoord\CoordinateOperation\CRSTransformations;
use PHPCoord\CoordinateReferenceSystem\Compound;
use PHPCoord\CoordinateReferenceSystem\CompoundSRIDData;
use PHPCoord\CoordinateReferenceSystem\CoordinateReferenceSystem;
use PHPCoord\CoordinateReferenceSystem\Geographic;
use PHPCoord\CoordinateReferenceSystem\Geographic2D;
use PHPCoord\CoordinateReferenceSystem\Projected;
use PHPCoord\CoordinateReferenceSystem\Vertical;
use PHPCoord\Exception\InvalidCoordinateReferenceSystemException;
use PHPCoord\Geometry\BoundingArea;
use PHPCoord\UnitOfMeasure\Length\Metre;
use PHPUnit\Framework\TestCase;

class CompoundPointTest extends TestCase
{
    use CompoundSRIDData;

    public function testCompound(): void
    {
        $object = CompoundPoint::create(
            ProjectedPoint::create(new Metre(123), new Metre(456), null, null, Projected::fromSRID(Projected::EPSG_WGS_84_WORLD_MERCATOR)),
            VerticalPoint::create(new Metre(789), Vertical::fromSRID(Vertical::EPSG_EGM2008_HEIGHT)),
            Compound::fromSRID(Compound::EPSG_WGS_84_WORLD_MERCATOR_PLUS_EGM2008_HEIGHT)
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
            ProjectedPoint::create(new Metre(123), new Metre(456), null, null, Projected::fromSRID(Projected::EPSG_WGS_84_WORLD_MERCATOR)),
            VerticalPoint::create(new Metre(789), Vertical::fromSRID(Vertical::EPSG_EGM2008_HEIGHT)),
            Compound::fromSRID(Compound::EPSG_WGS_84_WORLD_MERCATOR_PLUS_EGM2008_HEIGHT),
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
            ProjectedPoint::create(new Metre(123), new Metre(456), null, null, Projected::fromSRID(Projected::EPSG_WGS_84_WORLD_MERCATOR)),
            VerticalPoint::create(new Metre(789), Vertical::fromSRID(Vertical::EPSG_EGM2008_HEIGHT)),
            Compound::fromSRID(Compound::EPSG_WGS_84_WORLD_MERCATOR_PLUS_EGM2008_HEIGHT),
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
            ProjectedPoint::create(new Metre(438700), new Metre(114800), null, null, Projected::fromSRID(Projected::EPSG_WGS_84_WORLD_MERCATOR)),
            VerticalPoint::create(new Metre(789), Vertical::fromSRID(Vertical::EPSG_EGM2008_HEIGHT)),
            Compound::fromSRID(Compound::EPSG_WGS_84_WORLD_MERCATOR_PLUS_EGM2008_HEIGHT)
        );
        $to = CompoundPoint::create(
            ProjectedPoint::create(new Metre(533600), new Metre(180500), null, null, Projected::fromSRID(Projected::EPSG_WGS_84_WORLD_MERCATOR)),
            VerticalPoint::create(new Metre(789), Vertical::fromSRID(Vertical::EPSG_EGM2008_HEIGHT)),
            Compound::fromSRID(Compound::EPSG_WGS_84_WORLD_MERCATOR_PLUS_EGM2008_HEIGHT)
        );
        self::assertEqualsWithDelta(115423.134596, $from->calculateDistance($to)->getValue(), 0.000001);
    }

    public function testDistanceDifferentCRS(): void
    {
        $this->expectException(InvalidCoordinateReferenceSystemException::class);
        $from = CompoundPoint::create(
            ProjectedPoint::create(new Metre(438700), new Metre(114800), null, null, Projected::fromSRID(Projected::EPSG_WGS_84_WORLD_MERCATOR)),
            VerticalPoint::create(new Metre(789), Vertical::fromSRID(Vertical::EPSG_EGM2008_HEIGHT)),
            Compound::fromSRID(Compound::EPSG_WGS_84_WORLD_MERCATOR_PLUS_EGM2008_HEIGHT)
        );
        $to = CompoundPoint::create(
            ProjectedPoint::create(new Metre(533600), new Metre(180500), null, null, Projected::fromSRID(Projected::EPSG_WGS_84_WORLD_MERCATOR)),
            VerticalPoint::create(new Metre(789), Vertical::fromSRID(Vertical::EPSG_EGM2008_HEIGHT)),
            Compound::fromSRID(Compound::EPSG_OSGB36_BRITISH_NATIONAL_GRID_PLUS_ODN_HEIGHT)
        );
        $from->calculateDistance($to);
    }

    /**
     * @group integration
     * @dataProvider supportedOperations
     */
    public function testOperations(string $sourceCrsSrid, string $targetCrsSrid, string $operationSrid, bool $reversible): void
    {
        $operation = CoordinateOperations::getOperationData($operationSrid);
        $extents = [];
        foreach ($operation['extent_code'] as $extentId) {
            $fullExtent = "PHPCoord\\Geometry\\Extents\\Extent{$extentId}";
            $basicExtent = "PHPCoord\\Geometry\\Extents\\BoundingBoxOnly\\Extent{$extentId}";
            $extentClass = class_exists($fullExtent) ? new $fullExtent() : new $basicExtent();
            $extents = array_merge($extents, $extentClass());
        }
        $boundingBox = BoundingArea::createFromArray($extents);

        $sourceCRS = Compound::fromSRID($sourceCrsSrid);
        $sourceHorizontalCRS = $sourceCRS->getHorizontal();
        if ($sourceHorizontalCRS instanceof Geographic2D) {
            $centre = $boundingBox->getPointInside();

            $horizontalPoint = GeographicPoint::create($centre[0], $centre[1], null, $sourceHorizontalCRS);
        } elseif ($sourceHorizontalCRS instanceof Geographic2D) {
            $horizontalPoint = ProjectedPoint::create(new Metre(0), new Metre(0), new Metre(0), new Metre(0), $sourceHorizontalCRS);
        }
        $verticalCRS = $sourceCRS->getVertical();
        $verticalPoint = VerticalPoint::create(new Metre(0), $verticalCRS);
        $targetCRS = CoordinateReferenceSystem::fromSRID($targetCrsSrid);

        $epoch = new DateTime();

        $originalPoint = CompoundPoint::create($horizontalPoint, $verticalPoint, $sourceCRS, $epoch);
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
            $operationsInTransformation = [];

            $operation = CoordinateOperations::getOperationData($transformation['operation']);
            if (isset($operation['operations'])) {
                foreach ($operation['operations'] as $subOperation) {
                    $operationsInTransformation[] = $subOperation['operation'];
                }
            } else {
                $operationsInTransformation[] = $transformation['operation'];
            }

            if (isset(static::$sridData[$transformation['source_crs']])) {
                foreach ($operationsInTransformation as $operationInTransformation) {
                    //filter out operations that require a grid file that we don't have
                    foreach (CoordinateOperationParams::getParamData($operationInTransformation) as $param) {
                        if (isset($param['fileProvider']) && !class_exists($param['fileProvider'])) {
                            $needsNonExistentFile = true;
                        }
                    }
                }

                if (!$needsNonExistentFile) {
                    $toTest[] = [
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
