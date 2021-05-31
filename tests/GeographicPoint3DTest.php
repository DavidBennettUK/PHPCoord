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
use PHPCoord\CoordinateOperation\CoordinateOperationMethods;
use PHPCoord\CoordinateOperation\CoordinateOperationParams;
use PHPCoord\CoordinateOperation\CoordinateOperations;
use PHPCoord\CoordinateOperation\CRSTransformations;
use PHPCoord\CoordinateReferenceSystem\CoordinateReferenceSystem;
use PHPCoord\CoordinateReferenceSystem\Geographic;
use PHPCoord\CoordinateReferenceSystem\Geographic3D;
use PHPCoord\CoordinateReferenceSystem\Geographic3DSRIDData;
use PHPCoord\Geometry\BoundingArea;
use PHPCoord\UnitOfMeasure\Length\Metre;
use PHPUnit\Framework\TestCase;

class GeographicPoint3DTest extends TestCase
{
    use Geographic3DSRIDData;

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
        $centre = $boundingBox->getPointInside();

        $sourceCRS = Geographic::fromSRID($sourceCrsSrid);
        $sourceHeight = $sourceCRS instanceof Geographic3D ? new Metre(0) : null;
        $targetCRS = CoordinateReferenceSystem::fromSRID($targetCrsSrid);

        $epoch = new DateTime();

        $originalPoint = GeographicPoint::create($centre[0], $centre[1], $sourceHeight, $sourceCRS, $epoch);
        $newPoint = $originalPoint->performOperation($operationSrid, $targetCRS, false);
        self::assertInstanceOf(Point::class, $newPoint);
        self::assertEquals($targetCRS, $newPoint->getCRS());

        if ($reversible) {
            $delta = isset($operation['method']) && $operation['method'] === CoordinateOperationMethods::EPSG_REVERSIBLE_POLYNOMIAL_OF_DEGREE_13 ? 0.01 : 0.001;
            $reversedPoint = $newPoint->performOperation($operationSrid, $sourceCRS, true);

            self::assertEquals($sourceCRS, $reversedPoint->getCRS());
            self::assertEqualsWithDelta($originalPoint->getLatitude()->getValue(), $reversedPoint->getLatitude()->getValue(), $delta);
            self::assertEqualsWithDelta($originalPoint->getLongitude()->getValue(), $reversedPoint->getLongitude()->getValue(), $delta);
            if ($sourceHeight) {
                self::assertEqualsWithDelta($originalPoint->getHeight()->getValue(), $reversedPoint->getHeight()->getValue(), $delta);
            } else {
                self::assertNull($reversedPoint->getHeight());
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
