<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * Europe-FSU/Asia - FSU - 70.5°E to 73.5°E onshore.
 * @internal
 */
class Extent2670
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [73.5, 71.876550128908], [72.862565994263, 71.876550128908], [72.862565994263, 71.144057172286], [73.5, 71.144057172286], [73.5, 71.876550128908],
                ],
            ],
            [
                [
                    [73.5, 69.87968517202], [73.373865127563, 69.87968517202], [73.373865127563, 69.611842157788], [73.5, 69.611842157788], [73.5, 69.87968517202],
                ],
            ],
            [
                [
                    [73.5, 72.960634231567], [70.5, 72.960634231567], [70.5, 66.458780288696], [73.5, 66.458780288696], [73.5, 72.960634231567],
                ],
            ],
            [
                [
                    [73.5, 66.928187718402], [70.5, 66.928187718402], [70.5, 36.671844482422], [73.5, 36.671844482422], [73.5, 66.928187718402],
                ],
            ],
            [
                [
                    [71.847017288208, 73.565618515015], [70.5, 73.565618515015], [70.5, 72.992368902347], [71.847017288208, 72.992368902347], [71.847017288208, 73.565618515015],
                ],
            ],
        ];
    }
}
