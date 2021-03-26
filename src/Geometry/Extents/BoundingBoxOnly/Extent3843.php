<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * South America/Argentina - mainland onshore and offshore TdF.
 * @internal
 */
class Extent3843
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-61.796045303345, -39.037691116333], [-62.162038803101, -39.037691116333], [-62.162038803101, -39.293502807617], [-61.796045303345, -39.293502807617], [-61.796045303345, -39.037691116333],
                ],
            ],
            [
                [
                    [-53.650005340576, -21.780521392822], [-73.582298278809, -21.780521392822], [-73.582298278809, -54.923015594482], [-53.650005340576, -54.923015594482], [-53.650005340576, -21.780521392822],
                ],
            ],
        ];
    }
}
