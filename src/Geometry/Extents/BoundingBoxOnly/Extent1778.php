<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * Europe-FSU/Russia - 108°E to 114°E onshore.
 * @internal
 */
class Extent1778
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [114, 74.101034164429], [108, 74.101034164429], [108, 49.142221450806], [114, 49.142221450806], [114, 74.101034164429],
                ],
            ],
            [
                [
                    [114, 76.809934616089], [108, 76.809934616089], [108, 73.604612350464], [114, 73.604612350464], [114, 76.809934616089],
                ],
            ],
            [
                [
                    [113.61323356628, 74.598520278931], [111.27689170837, 74.598520278931], [111.27689170837, 74.042295455933], [113.61323356628, 74.042295455933], [113.61323356628, 74.598520278931],
                ],
            ],
        ];
    }
}
