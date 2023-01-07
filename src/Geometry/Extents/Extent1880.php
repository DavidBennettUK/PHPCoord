<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Global/World - S hemisphere - 162°W to 156°W.
 * @internal
 */
class Extent1880
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-162.1, -80], [-162.1, 0], [-162.09986295348, 0.005233595624294], [-162.09945218954, 0.010452846326765], [-162.09876883406, 0.015643446504023], [-162.09781476007, 0.020791169081776], [-162.09659258263, 0.025881904510252], [-162.09510565163, 0.030901699437495], [-162.09335804265, 0.03583679495453], [-162.09135454576, 0.04067366430758], [-162.08910065242, 0.045399049973955], [-162.08660254038, 0.05], [-162.08386705679, 0.054463903501503], [-162.08090169944, 0.058778525229247], [-162.07771459615, 0.062932039104984], [-162.07431448255, 0.066913060635886], [-162.07071067812, 0.070710678118655], [-162.06691306064, 0.074314482547739], [-162.0629320391, 0.077714596145697], [-162.05877852523, 0.080901699437495], [-162.0544639035, 0.083867056794542], [-162.05, 0.086602540378444], [-162.04539904997, 0.089100652418837], [-162.04067366431, 0.09135454576426], [-162.03583679495, 0.09335804264972], [-162.03090169944, 0.095105651629515], [-162.02588190451, 0.096592582628907], [-162.02079116908, 0.097814760073381], [-162.0156434465, 0.098768834059514], [-162.01045284633, 0.099452189536827], [-162.00523359562, 0.099862953475457], [-162, 0.1], [-156, 0.1], [-155.99476640438, 0.099862953475457], [-155.98954715367, 0.099452189536827], [-155.9843565535, 0.098768834059514], [-155.97920883092, 0.097814760073381], [-155.97411809549, 0.096592582628907], [-155.96909830056, 0.095105651629515], [-155.96416320505, 0.09335804264972], [-155.95932633569, 0.09135454576426], [-155.95460095003, 0.089100652418837], [-155.95, 0.086602540378444], [-155.9455360965, 0.083867056794542], [-155.94122147477, 0.080901699437495], [-155.9370679609, 0.077714596145697], [-155.93308693936, 0.074314482547739], [-155.92928932188, 0.070710678118655], [-155.92568551745, 0.066913060635886], [-155.92228540385, 0.062932039104984], [-155.91909830056, 0.058778525229247], [-155.91613294321, 0.054463903501503], [-155.91339745962, 0.05], [-155.91089934758, 0.045399049973955], [-155.90864545424, 0.04067366430758], [-155.90664195735, 0.03583679495453], [-155.90489434837, 0.030901699437495], [-155.90340741737, 0.025881904510252], [-155.90218523993, 0.020791169081776], [-155.90123116594, 0.015643446504023], [-155.90054781046, 0.010452846326765], [-155.90013704652, 0.005233595624294], [-155.9, 0], [-155.9, -80], [-155.90013704652, -80.005233595624], [-155.90054781046, -80.010452846327], [-155.90123116594, -80.015643446504], [-155.90218523993, -80.020791169082], [-155.90340741737, -80.02588190451], [-155.90489434837, -80.030901699437], [-155.90664195735, -80.035836794955], [-155.90864545424, -80.040673664308], [-155.91089934758, -80.045399049974], [-155.91339745962, -80.05], [-155.91613294321, -80.054463903501], [-155.91909830056, -80.058778525229], [-155.92228540385, -80.062932039105], [-155.92568551745, -80.066913060636], [-155.92928932188, -80.070710678119], [-155.93308693936, -80.074314482548], [-155.9370679609, -80.077714596146], [-155.94122147477, -80.080901699437], [-155.9455360965, -80.083867056795], [-155.95, -80.086602540378], [-155.95460095003, -80.089100652419], [-155.95932633569, -80.091354545764], [-155.96416320505, -80.09335804265], [-155.96909830056, -80.09510565163], [-155.97411809549, -80.096592582629], [-155.97920883092, -80.097814760073], [-155.9843565535, -80.09876883406], [-155.98954715367, -80.099452189537], [-155.99476640438, -80.099862953475], [-156, -80.1], [-162, -80.1], [-162.00523359562, -80.099862953475], [-162.01045284633, -80.099452189537], [-162.0156434465, -80.09876883406], [-162.02079116908, -80.097814760073], [-162.02588190451, -80.096592582629], [-162.03090169944, -80.09510565163], [-162.03583679495, -80.09335804265], [-162.04067366431, -80.091354545764], [-162.04539904997, -80.089100652419], [-162.05, -80.086602540378], [-162.0544639035, -80.083867056795], [-162.05877852523, -80.080901699437], [-162.0629320391, -80.077714596146], [-162.06691306064, -80.074314482548], [-162.07071067812, -80.070710678119], [-162.07431448255, -80.066913060636], [-162.07771459615, -80.062932039105], [-162.08090169944, -80.058778525229], [-162.08386705679, -80.054463903501], [-162.08660254038, -80.05], [-162.08910065242, -80.045399049974], [-162.09135454576, -80.040673664308], [-162.09335804265, -80.035836794955], [-162.09510565163, -80.030901699437], [-162.09659258263, -80.02588190451], [-162.09781476007, -80.020791169082], [-162.09876883406, -80.015643446504], [-162.09945218954, -80.010452846327], [-162.09986295348, -80.005233595624], [-162.1, -80],
                ],
            ],
        ];
    }
}
