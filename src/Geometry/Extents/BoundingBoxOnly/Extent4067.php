<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * Europe-FSU/Norway - onshore - 12°E to 18°E.
 * @internal
 */
class Extent4067
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [12.856109619141, 63.209537070997], [12, 63.209537070997], [12, 59.88582611084], [12.856109619141, 59.88582611084], [12.856109619141, 63.209537070997],
                ],
            ],
            [
                [
                    [12.326168043163, 67.585981624793], [12, 67.585981624793], [12, 67.364009359712], [12.326168043163, 67.364009359712], [12.326168043163, 67.585981624793],
                ],
            ],
            [
                [
                    [18, 69.950045462364], [12, 69.950045462364], [12, 63.324785095533], [18, 63.324785095533], [18, 69.950045462364],
                ],
            ],
        ];
    }
}
