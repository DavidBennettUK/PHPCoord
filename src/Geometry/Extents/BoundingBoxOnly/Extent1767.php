<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * Europe-FSU/Russia - 42°E to 48°E onshore.
 * @internal
 */
class Extent1767
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [48, 68.73525428772], [42, 68.73525428772], [42, 41.196580886841], [48, 41.196580886841], [48, 68.73525428772],
                ],
            ],
            [
                [
                    [48, 80.902948379517], [44.557912826538, 80.902948379517], [44.557912826538, 80.02007484436], [48, 80.02007484436], [48, 80.902948379517],
                ],
            ],
            [
                [
                    [42.846567153931, 66.838243484497], [42.307573318482, 66.838243484497], [42.307573318482, 66.637815475464], [42.846567153931, 66.637815475464], [42.846567153931, 66.838243484497],
                ],
            ],
        ];
    }
}
