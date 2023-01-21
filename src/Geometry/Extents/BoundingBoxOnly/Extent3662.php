<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * Europe-FSU/Norway - onshore - 20°E to 21°E.
 * @internal
 */
class Extent3662
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [20.204233169556, 68.529899068], [20, 68.529899068], [20, 68.376404683736], [20.204233169556, 68.376404683736], [20.204233169556, 68.529899068],
                ],
            ],
            [
                [
                    [21.000000234704, 70.361362478254], [20, 70.361362478254], [20, 68.559899681773], [21.000000234704, 68.559899681773], [21.000000234704, 70.361362478254],
                ],
            ],
        ];
    }
}
