<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * North America/North America - 132°W to 126°W and NAD27 by country - onshore.
 * @internal
 */
class Extent2139
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-126, 70.704323517314], [-132, 70.704323517314], [-132, 49.180336458445], [-126, 49.180336458445], [-126, 70.704323517314],
                ],
            ],
            [
                [
                    [-130.91155451651, 54.188351493907], [-132, 54.188351493907], [-132, 51.894748466685], [-130.91155451651, 51.894748466685], [-130.91155451651, 54.188351493907],
                ],
            ],
            [
                [
                    [-130.65839661476, 54.677166684258], [-131.05171066847, 54.677166684258], [-131.05171066847, 54.405873791801], [-130.65839661476, 54.405873791801], [-130.65839661476, 54.677166684258],
                ],
            ],
            [
                [
                    [-126, 72.020491455014], [-126.13732656016, 72.020491455014], [-126.13732656016, 71.915909970703], [-126, 71.915909970703], [-126, 72.020491455014],
                ],
            ],
        ];
    }
}
