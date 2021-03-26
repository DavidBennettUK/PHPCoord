<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * Europe-FSU/Europe - 18°E to 24°E and ETRS89 by country.
 * @internal
 */
class Extent2128
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [24, 65.299102658782], [19.083199518001, 65.299102658782], [19.083199518001, 58.844500171001], [24, 58.844500171001], [24, 65.299102658782],
                ],
            ],
            [
                [
                    [24, 66.802096486583], [23.6397190094, 66.802096486583], [23.6397190094, 66.046036104263], [24, 66.046036104263], [24, 66.802096486583],
                ],
            ],
            [
                [
                    [24.000000002019, 84.530034782416], [18, 84.530034782416], [18, 66.803266021193], [24.000000002019, 66.803266021193], [24.000000002019, 84.530034782416],
                ],
            ],
        ];
    }
}
