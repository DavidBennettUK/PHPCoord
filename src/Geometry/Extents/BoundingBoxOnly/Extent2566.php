<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * North America/Greenland - west - 69°N to 72°N.
 * @internal
 */
class Extent2566
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-38, 72], [-56.059779660228, 72], [-56.059779660228, 69], [-38, 69], [-38, 72],
                ],
            ],
            [
                [
                    [-51.695804555672, 70.363895397737], [-55.128516887847, 70.363895397737], [-55.128516887847, 69.182243012551], [-51.695804555672, 69.182243012551], [-51.695804555672, 70.363895397737],
                ],
            ],
            [
                [
                    [-54.503211747302, 70.532001056039], [-55.17356928026, 70.532001056039], [-55.17356928026, 70.320746485823], [-54.503211747302, 70.320746485823], [-54.503211747302, 70.532001056039],
                ],
            ],
            [
                [
                    [-53.226436185484, 71.364098588269], [-54.14138026945, 71.364098588269], [-54.14138026945, 70.97615394843], [-53.226436185484, 70.97615394843], [-53.226436185484, 71.364098588269],
                ],
            ],
        ];
    }
}
