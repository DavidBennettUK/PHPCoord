<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Global/World - S hemisphere - 162°E to 168°E.
 * @internal
 */
class Extent1988
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [161.9, -80], [161.9, 0], [161.90013704652, 0.005233595624294], [161.90054781046, 0.010452846326765], [161.90123116594, 0.015643446504023], [161.90218523993, 0.020791169081776], [161.90340741737, 0.025881904510252], [161.90489434837, 0.030901699437495], [161.90664195735, 0.03583679495453], [161.90864545424, 0.04067366430758], [161.91089934758, 0.045399049973955], [161.91339745962, 0.05], [161.91613294321, 0.054463903501503], [161.91909830056, 0.058778525229247], [161.92228540385, 0.062932039104984], [161.92568551745, 0.066913060635886], [161.92928932188, 0.070710678118655], [161.93308693936, 0.074314482547739], [161.9370679609, 0.077714596145697], [161.94122147477, 0.080901699437495], [161.9455360965, 0.083867056794542], [161.95, 0.086602540378444], [161.95460095003, 0.089100652418837], [161.95932633569, 0.09135454576426], [161.96416320505, 0.09335804264972], [161.96909830056, 0.095105651629515], [161.97411809549, 0.096592582628907], [161.97920883092, 0.097814760073381], [161.9843565535, 0.098768834059514], [161.98954715367, 0.099452189536827], [161.99476640438, 0.099862953475457], [162, 0.1], [168, 0.1], [168.00523359562, 0.099862953475457], [168.01045284633, 0.099452189536827], [168.0156434465, 0.098768834059514], [168.02079116908, 0.097814760073381], [168.02588190451, 0.096592582628907], [168.03090169944, 0.095105651629515], [168.03583679495, 0.09335804264972], [168.04067366431, 0.09135454576426], [168.04539904997, 0.089100652418837], [168.05, 0.086602540378444], [168.0544639035, 0.083867056794542], [168.05877852523, 0.080901699437495], [168.0629320391, 0.077714596145697], [168.06691306064, 0.074314482547739], [168.07071067812, 0.070710678118655], [168.07431448255, 0.066913060635886], [168.07771459615, 0.062932039104984], [168.08090169944, 0.058778525229247], [168.08386705679, 0.054463903501503], [168.08660254038, 0.05], [168.08910065242, 0.045399049973955], [168.09135454576, 0.04067366430758], [168.09335804265, 0.03583679495453], [168.09510565163, 0.030901699437495], [168.09659258263, 0.025881904510252], [168.09781476007, 0.020791169081776], [168.09876883406, 0.015643446504023], [168.09945218954, 0.010452846326765], [168.09986295348, 0.005233595624294], [168.1, 0], [168.1, -80], [168.09986295348, -80.005233595624], [168.09945218954, -80.010452846327], [168.09876883406, -80.015643446504], [168.09781476007, -80.020791169082], [168.09659258263, -80.02588190451], [168.09510565163, -80.030901699437], [168.09335804265, -80.035836794955], [168.09135454576, -80.040673664308], [168.08910065242, -80.045399049974], [168.08660254038, -80.05], [168.08386705679, -80.054463903501], [168.08090169944, -80.058778525229], [168.07771459615, -80.062932039105], [168.07431448255, -80.066913060636], [168.07071067812, -80.070710678119], [168.06691306064, -80.074314482548], [168.0629320391, -80.077714596146], [168.05877852523, -80.080901699437], [168.0544639035, -80.083867056795], [168.05, -80.086602540378], [168.04539904997, -80.089100652419], [168.04067366431, -80.091354545764], [168.03583679495, -80.09335804265], [168.03090169944, -80.09510565163], [168.02588190451, -80.096592582629], [168.02079116908, -80.097814760073], [168.0156434465, -80.09876883406], [168.01045284633, -80.099452189537], [168.00523359562, -80.099862953475], [168, -80.1], [162, -80.1], [161.99476640438, -80.099862953475], [161.98954715367, -80.099452189537], [161.9843565535, -80.09876883406], [161.97920883092, -80.097814760073], [161.97411809549, -80.096592582629], [161.96909830056, -80.09510565163], [161.96416320505, -80.09335804265], [161.95932633569, -80.091354545764], [161.95460095003, -80.089100652419], [161.95, -80.086602540378], [161.9455360965, -80.083867056795], [161.94122147477, -80.080901699437], [161.9370679609, -80.077714596146], [161.93308693936, -80.074314482548], [161.92928932188, -80.070710678119], [161.92568551745, -80.066913060636], [161.92228540385, -80.062932039105], [161.91909830056, -80.058778525229], [161.91613294321, -80.054463903501], [161.91339745962, -80.05], [161.91089934758, -80.045399049974], [161.90864545424, -80.040673664308], [161.90664195735, -80.035836794955], [161.90489434837, -80.030901699437], [161.90340741737, -80.02588190451], [161.90218523993, -80.020791169082], [161.90123116594, -80.015643446504], [161.90054781046, -80.010452846327], [161.90013704652, -80.005233595624], [161.9, -80],
                ],
            ],
        ];
    }
}
