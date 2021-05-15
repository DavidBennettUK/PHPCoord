<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * Europe-FSU/Norway - onshore - 14°E to 15°E.
 * @internal
 */
class Extent3655
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [15, 69.046340330777], [14.239018357506, 69.046340330777], [14.239018357506, 68.524457599426], [15, 68.524457599426], [15, 69.046340330777],
                ],
            ],
            [
                [
                    [15, 68.490455718443], [14, 68.490455718443], [14, 68.099311060108], [15, 68.099311060108], [15, 68.490455718443],
                ],
            ],
            [
                [
                    [15, 68.005899832642], [14, 68.005899832642], [14, 64.872560477938], [15, 64.872560477938], [15, 68.005899832642],
                ],
            ],
            [
                [
                    [14.150693893433, 64.492850690682], [14, 64.492850690682], [14, 64.030422739239], [14.150693893433, 64.030422739239], [14.150693893433, 64.492850690682],
                ],
            ],
        ];
    }
}
