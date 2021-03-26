<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * Europe-FSU/Russia - 109.5°E to 112.5°E onshore.
 * @internal
 */
class Extent2683
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [112.5, 76.809934616089], [109.5, 76.809934616089], [109.5, 74.033958744109], [112.5, 74.033958744109], [112.5, 76.809934616089],
                ],
            ],
            [
                [
                    [112.5, 74.598520278931], [111.27689170837, 74.598520278931], [111.27689170837, 74.063363763416], [112.5, 74.063363763416], [112.5, 74.598520278931],
                ],
            ],
            [
                [
                    [112.5, 74.101034164429], [109.5, 74.101034164429], [109.5, 49.142221450806], [112.5, 49.142221450806], [112.5, 74.101034164429],
                ],
            ],
        ];
    }
}
