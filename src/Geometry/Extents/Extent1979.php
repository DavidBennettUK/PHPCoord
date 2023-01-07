<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Global/World - N hemisphere - 138°E to 144°E.
 * @internal
 */
class Extent1979
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [137.9, 0], [137.9, 84], [137.90013704652, 84.005233595624], [137.90054781046, 84.010452846327], [137.90123116594, 84.015643446504], [137.90218523993, 84.020791169082], [137.90340741737, 84.02588190451], [137.90489434837, 84.030901699437], [137.90664195735, 84.035836794955], [137.90864545424, 84.040673664308], [137.91089934758, 84.045399049974], [137.91339745962, 84.05], [137.91613294321, 84.054463903501], [137.91909830056, 84.058778525229], [137.92228540385, 84.062932039105], [137.92568551745, 84.066913060636], [137.92928932188, 84.070710678119], [137.93308693936, 84.074314482548], [137.9370679609, 84.077714596146], [137.94122147477, 84.080901699437], [137.9455360965, 84.083867056795], [137.95, 84.086602540378], [137.95460095003, 84.089100652419], [137.95932633569, 84.091354545764], [137.96416320505, 84.09335804265], [137.96909830056, 84.09510565163], [137.97411809549, 84.096592582629], [137.97920883092, 84.097814760073], [137.9843565535, 84.09876883406], [137.98954715367, 84.099452189537], [137.99476640438, 84.099862953475], [138, 84.1], [144, 84.1], [144.00523359562, 84.099862953475], [144.01045284633, 84.099452189537], [144.0156434465, 84.09876883406], [144.02079116908, 84.097814760073], [144.02588190451, 84.096592582629], [144.03090169944, 84.09510565163], [144.03583679495, 84.09335804265], [144.04067366431, 84.091354545764], [144.04539904997, 84.089100652419], [144.05, 84.086602540378], [144.0544639035, 84.083867056795], [144.05877852523, 84.080901699437], [144.0629320391, 84.077714596146], [144.06691306064, 84.074314482548], [144.07071067812, 84.070710678119], [144.07431448255, 84.066913060636], [144.07771459615, 84.062932039105], [144.08090169944, 84.058778525229], [144.08386705679, 84.054463903501], [144.08660254038, 84.05], [144.08910065242, 84.045399049974], [144.09135454576, 84.040673664308], [144.09335804265, 84.035836794955], [144.09510565163, 84.030901699437], [144.09659258263, 84.02588190451], [144.09781476007, 84.020791169082], [144.09876883406, 84.015643446504], [144.09945218954, 84.010452846327], [144.09986295348, 84.005233595624], [144.1, 84], [144.1, 0], [144.09986295348, -0.005233595624294], [144.09945218954, -0.010452846326765], [144.09876883406, -0.015643446504023], [144.09781476007, -0.020791169081776], [144.09659258263, -0.025881904510252], [144.09510565163, -0.030901699437495], [144.09335804265, -0.03583679495453], [144.09135454576, -0.04067366430758], [144.08910065242, -0.045399049973955], [144.08660254038, -0.05], [144.08386705679, -0.054463903501503], [144.08090169944, -0.058778525229247], [144.07771459615, -0.062932039104984], [144.07431448255, -0.066913060635886], [144.07071067812, -0.070710678118655], [144.06691306064, -0.074314482547739], [144.0629320391, -0.077714596145697], [144.05877852523, -0.080901699437495], [144.0544639035, -0.083867056794542], [144.05, -0.086602540378444], [144.04539904997, -0.089100652418837], [144.04067366431, -0.09135454576426], [144.03583679495, -0.09335804264972], [144.03090169944, -0.095105651629515], [144.02588190451, -0.096592582628907], [144.02079116908, -0.097814760073381], [144.0156434465, -0.098768834059514], [144.01045284633, -0.099452189536827], [144.00523359562, -0.099862953475457], [144, -0.1], [138, -0.1], [137.99476640438, -0.099862953475457], [137.98954715367, -0.099452189536827], [137.9843565535, -0.098768834059514], [137.97920883092, -0.097814760073381], [137.97411809549, -0.096592582628907], [137.96909830056, -0.095105651629515], [137.96416320505, -0.09335804264972], [137.95932633569, -0.09135454576426], [137.95460095003, -0.089100652418837], [137.95, -0.086602540378444], [137.9455360965, -0.083867056794542], [137.94122147477, -0.080901699437495], [137.9370679609, -0.077714596145697], [137.93308693936, -0.074314482547739], [137.92928932188, -0.070710678118655], [137.92568551745, -0.066913060635886], [137.92228540385, -0.062932039104984], [137.91909830056, -0.058778525229247], [137.91613294321, -0.054463903501503], [137.91339745962, -0.05], [137.91089934758, -0.045399049973955], [137.90864545424, -0.04067366430758], [137.90664195735, -0.03583679495453], [137.90489434837, -0.030901699437495], [137.90340741737, -0.025881904510252], [137.90218523993, -0.020791169081776], [137.90123116594, -0.015643446504023], [137.90054781046, -0.010452846326765], [137.90013704652, -0.005233595624294], [137.9, 0],
                ],
            ],
        ];
    }
}
