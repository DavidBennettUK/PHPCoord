<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * Europe-FSU/Russia - 166.5°E to 169.5°E onshore.
 * @internal
 */
class Extent2702
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [169.5, 70.067041397095], [166.5, 70.067041397095], [166.5, 59.890951836472], [169.5, 59.890951836472], [169.5, 70.067041397095],
                ],
            ],
            [
                [
                    [166.75396537781, 54.996913132962], [166.5, 54.996913132962], [166.5, 54.630857467651], [166.75396537781, 54.630857467651], [166.75396537781, 54.996913132962],
                ],
            ],
            [
                [
                    [168.19739341736, 54.912969589233], [167.34578895569, 54.912969589233], [167.34578895569, 54.452356338501], [168.19739341736, 54.452356338501], [168.19739341736, 54.912969589233],
                ],
            ],
        ];
    }
}
