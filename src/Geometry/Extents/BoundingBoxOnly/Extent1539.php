<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * Europe-FSU/Finland - 28.5°E to 31.5°E.
 * @internal
 */
class Extent1539
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [31.5, 68.475109732032], [28.5, 68.475109732032], [28.5, 60.94087983584], [31.5, 60.94087983584], [31.5, 68.475109732032],
                ],
            ],
            [
                [
                    [28.817358016968, 68.878326416016], [28.5, 68.878326416016], [28.5, 68.56867291681], [28.817358016968, 68.56867291681], [28.817358016968, 68.878326416016],
                ],
            ],
            [
                [
                    [29.298469543457, 69.804258375815], [28.5, 69.804258375815], [28.5, 68.929720568202], [29.298469543457, 68.929720568202], [29.298469543457, 69.804258375815],
                ],
            ],
        ];
    }
}
