<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * Europe-FSU/Europe - FSU - 40.5°E to 43.5°E onshore.
 * @internal
 */
class Extent2660
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [43.5, 66.576150894165], [40.5, 66.576150894165], [40.5, 41.017642773315], [43.5, 41.017642773315], [43.5, 66.576150894165],
                ],
            ],
            [
                [
                    [42.846567153931, 66.838243484497], [42.307573318482, 66.838243484497], [42.307573318482, 66.637815475464], [42.846567153931, 66.637815475464], [42.846567153931, 66.838243484497],
                ],
            ],
            [
                [
                    [41.518899917603, 67.907225191288], [40.5, 67.907225191288], [40.5, 66.358878724173], [41.518899917603, 66.358878724173], [41.518899917603, 67.907225191288],
                ],
            ],
            [
                [
                    [43.5, 68.73525428772], [43.132936477661, 68.73525428772], [43.132936477661, 68.472698382226], [43.5, 68.472698382226], [43.5, 68.73525428772],
                ],
            ],
        ];
    }
}
