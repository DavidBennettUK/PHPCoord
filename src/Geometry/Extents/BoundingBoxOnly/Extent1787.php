<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * Europe-FSU/Russia - 162°E to 168°E onshore.
 * @internal
 */
class Extent1787
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [162.2376499176, 55.073137279695], [162, 55.073137279695], [162, 54.616541058892], [162.2376499176, 54.616541058892], [162.2376499176, 55.073137279695],
                ],
            ],
            [
                [
                    [168, 70.021879705443], [162, 70.021879705443], [162, 55.799308979204], [168, 55.799308979204], [168, 70.021879705443],
                ],
            ],
            [
                [
                    [168, 54.912969589233], [167.34578895569, 54.912969589233], [167.34578895569, 54.476552423254], [168, 54.476552423254], [168, 54.912969589233],
                ],
            ],
            [
                [
                    [166.75396537781, 55.409452438355], [165.74514579773, 55.409452438355], [165.74514579773, 54.630857467651], [166.75396537781, 54.630857467651], [166.75396537781, 55.409452438355],
                ],
            ],
            [
                [
                    [164.80045509338, 59.283964157104], [163.29041862488, 59.283964157104], [163.29041862488, 58.41847038269], [164.80045509338, 58.41847038269], [164.80045509338, 59.283964157104],
                ],
            ],
        ];
    }
}
