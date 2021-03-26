<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * Europe-FSU/France - mainland - 46°N to 48°N.
 * @internal
 */
class Extent3550
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [7.6231942176819, 48], [-4.7681728039005, 48], [-4.7681728039005, 46], [7.6231942176819, 46], [7.6231942176819, 48],
                ],
            ],
            [
                [
                    [-1.1821277053069, 46.099585233296], [-1.4709731099267, 46.099585233296], [-1.4709731099267, 46], [-1.1821277053069, 46], [-1.1821277053069, 46.099585233296],
                ],
            ],
            [
                [
                    [-2.9901630472168, 47.441319870419], [-3.3331158959584, 47.441319870419], [-3.3331158959584, 47.238112743907], [-2.9901630472168, 47.238112743907], [-2.9901630472168, 47.441319870419],
                ],
            ],
        ];
    }
}
