<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents\BoundingBoxOnly;

/**
 * Europe-FSU/Germany - onshore between 6°E and 12°E.
 * @internal
 */
class Extent3904
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [8.7102546691896, 47.711036682129], [8.6739530563355, 47.711036682129], [8.6739530563355, 47.693344116211], [8.7102546691896, 47.693344116211], [8.7102546691896, 47.711036682129],
                ],
            ],
            [
                [
                    [8.7512687867341, 54.131382658685], [8.6204167346689, 54.131382658685], [8.6204167346689, 53.98582812886], [8.7512687867341, 53.98582812886], [8.7512687867341, 54.131382658685],
                ],
            ],
            [
                [
                    [8.0011469282331, 54.23608043371], [7.8064799318144, 54.23608043371], [7.8064799318144, 54.138968747023], [8.0011469282331, 54.138968747023], [8.0011469282331, 54.23608043371],
                ],
            ],
            [
                [
                    [12, 55.086456230001], [6.0000000000001, 55.086456230001], [6.0000000000001, 47.274719238281], [12, 47.274719238281], [12, 55.086456230001],
                ],
            ],
        ];
    }
}
