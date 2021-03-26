<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * Asia-ExFSU/Oman - mainland east of 54°E.
 * @internal
 */
class Extent4008
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [56.351070249297, 25.329778936091], [56.208600200307, 25.329778936091], [56.208600200307, 25.227608811382], [56.351070249297, 25.227608811382], [56.351070249297, 25.329778936091],
                ],
            ],
            [
                [
                    [59.900969249889, 24.988204699679], [54, 24.988204699679], [54, 16.898469322555], [59.900969249889, 16.898469322555], [59.900969249889, 24.988204699679],
                ],
            ],
            [
                [
                    [56.536657553777, 26.414718432713], [56.03328173145, 26.414718432713], [56.03328173145, 25.626110076905], [56.536657553777, 25.626110076905], [56.536657553777, 26.414718432713],
                ],
            ],
        ];
    }
}
