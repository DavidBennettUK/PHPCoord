<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Global/World - N hemisphere - 150°W to 144°W.
 * @internal
 */
class Extent1883
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-150.1, 0], [-150.1, 84], [-150.09986295348, 84.005233595624], [-150.09945218954, 84.010452846327], [-150.09876883406, 84.015643446504], [-150.09781476007, 84.020791169082], [-150.09659258263, 84.02588190451], [-150.09510565163, 84.030901699437], [-150.09335804265, 84.035836794955], [-150.09135454576, 84.040673664308], [-150.08910065242, 84.045399049974], [-150.08660254038, 84.05], [-150.08386705679, 84.054463903501], [-150.08090169944, 84.058778525229], [-150.07771459615, 84.062932039105], [-150.07431448255, 84.066913060636], [-150.07071067812, 84.070710678119], [-150.06691306064, 84.074314482548], [-150.0629320391, 84.077714596146], [-150.05877852523, 84.080901699437], [-150.0544639035, 84.083867056795], [-150.05, 84.086602540378], [-150.04539904997, 84.089100652419], [-150.04067366431, 84.091354545764], [-150.03583679495, 84.09335804265], [-150.03090169944, 84.09510565163], [-150.02588190451, 84.096592582629], [-150.02079116908, 84.097814760073], [-150.0156434465, 84.09876883406], [-150.01045284633, 84.099452189537], [-150.00523359562, 84.099862953475], [-150, 84.1], [-144, 84.1], [-143.99476640438, 84.099862953475], [-143.98954715367, 84.099452189537], [-143.9843565535, 84.09876883406], [-143.97920883092, 84.097814760073], [-143.97411809549, 84.096592582629], [-143.96909830056, 84.09510565163], [-143.96416320505, 84.09335804265], [-143.95932633569, 84.091354545764], [-143.95460095003, 84.089100652419], [-143.95, 84.086602540378], [-143.9455360965, 84.083867056795], [-143.94122147477, 84.080901699437], [-143.9370679609, 84.077714596146], [-143.93308693936, 84.074314482548], [-143.92928932188, 84.070710678119], [-143.92568551745, 84.066913060636], [-143.92228540385, 84.062932039105], [-143.91909830056, 84.058778525229], [-143.91613294321, 84.054463903501], [-143.91339745962, 84.05], [-143.91089934758, 84.045399049974], [-143.90864545424, 84.040673664308], [-143.90664195735, 84.035836794955], [-143.90489434837, 84.030901699437], [-143.90340741737, 84.02588190451], [-143.90218523993, 84.020791169082], [-143.90123116594, 84.015643446504], [-143.90054781046, 84.010452846327], [-143.90013704652, 84.005233595624], [-143.9, 84], [-143.9, 0], [-143.90013704652, -0.005233595624294], [-143.90054781046, -0.010452846326765], [-143.90123116594, -0.015643446504023], [-143.90218523993, -0.020791169081776], [-143.90340741737, -0.025881904510252], [-143.90489434837, -0.030901699437495], [-143.90664195735, -0.03583679495453], [-143.90864545424, -0.04067366430758], [-143.91089934758, -0.045399049973955], [-143.91339745962, -0.05], [-143.91613294321, -0.054463903501503], [-143.91909830056, -0.058778525229247], [-143.92228540385, -0.062932039104984], [-143.92568551745, -0.066913060635886], [-143.92928932188, -0.070710678118655], [-143.93308693936, -0.074314482547739], [-143.9370679609, -0.077714596145697], [-143.94122147477, -0.080901699437495], [-143.9455360965, -0.083867056794542], [-143.95, -0.086602540378444], [-143.95460095003, -0.089100652418837], [-143.95932633569, -0.09135454576426], [-143.96416320505, -0.09335804264972], [-143.96909830056, -0.095105651629515], [-143.97411809549, -0.096592582628907], [-143.97920883092, -0.097814760073381], [-143.9843565535, -0.098768834059514], [-143.98954715367, -0.099452189536827], [-143.99476640438, -0.099862953475457], [-144, -0.1], [-150, -0.1], [-150.00523359562, -0.099862953475457], [-150.01045284633, -0.099452189536827], [-150.0156434465, -0.098768834059514], [-150.02079116908, -0.097814760073381], [-150.02588190451, -0.096592582628907], [-150.03090169944, -0.095105651629515], [-150.03583679495, -0.09335804264972], [-150.04067366431, -0.09135454576426], [-150.04539904997, -0.089100652418837], [-150.05, -0.086602540378444], [-150.0544639035, -0.083867056794542], [-150.05877852523, -0.080901699437495], [-150.0629320391, -0.077714596145697], [-150.06691306064, -0.074314482547739], [-150.07071067812, -0.070710678118655], [-150.07431448255, -0.066913060635886], [-150.07771459615, -0.062932039104984], [-150.08090169944, -0.058778525229247], [-150.08386705679, -0.054463903501503], [-150.08660254038, -0.05], [-150.08910065242, -0.045399049973955], [-150.09135454576, -0.04067366430758], [-150.09335804265, -0.03583679495453], [-150.09510565163, -0.030901699437495], [-150.09659258263, -0.025881904510252], [-150.09781476007, -0.020791169081776], [-150.09876883406, -0.015643446504023], [-150.09945218954, -0.010452846326765], [-150.09986295348, -0.005233595624294], [-150.1, 0],
                ],
            ],
        ];
    }
}
