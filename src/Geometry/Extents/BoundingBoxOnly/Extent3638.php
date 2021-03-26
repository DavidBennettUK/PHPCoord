<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * South America/South America - 84°W to 78°W, S hemisphere and SIRGAS95 by country.
 * @internal
 */
class Extent3638
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-78, -39.591999053955], [-80.835645675659, -39.591999053955], [-80.835645675659, -56.446891784668], [-78, -56.446891784668], [-78, -39.591999053955],
                ],
            ],
            [
                [
                    [-78, -37.400423049927], [-78.201721191406, -37.400423049927], [-78.201721191406, -39.436695098877], [-78, -39.436695098877], [-78, -37.400423049927],
                ],
            ],
            [
                [
                    [-78, -30.266801834106], [-84, -30.266801834106], [-84, -37.124212265015], [-78, -37.124212265015], [-78, -30.266801834106],
                ],
            ],
            [
                [
                    [-78, -22.921533584595], [-83.81921005249, -22.921533584595], [-83.81921005249, -29.684276580811], [-78, -29.684276580811], [-78, -22.921533584595],
                ],
            ],
            [
                [
                    [-75.216842651367, 1.4496593475342], [-84, 1.4496593475342], [-84, -17.326360702515], [-75.216842651367, -17.326360702515], [-75.216842651367, 1.4496593475342],
                ],
            ],
        ];
    }
}
