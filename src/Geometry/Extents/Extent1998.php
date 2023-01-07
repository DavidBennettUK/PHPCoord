<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Global/World - N hemisphere - 0°N to 84°N.
 * @internal
 */
class Extent1998
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-180.1, 0], [-180.1, 84], [-180.09986295348, 84.005233595624], [-180.09945218954, 84.010452846327], [-180.09876883406, 84.015643446504], [-180.09781476007, 84.020791169082], [-180.09659258263, 84.02588190451], [-180.09510565163, 84.030901699437], [-180.09335804265, 84.035836794955], [-180.09135454576, 84.040673664308], [-180.08910065242, 84.045399049974], [-180.08660254038, 84.05], [-180.08386705679, 84.054463903501], [-180.08090169944, 84.058778525229], [-180.07771459615, 84.062932039105], [-180.07431448255, 84.066913060636], [-180.07071067812, 84.070710678119], [-180.06691306064, 84.074314482548], [-180.0629320391, 84.077714596146], [-180.05877852523, 84.080901699437], [-180.0544639035, 84.083867056795], [-180.05, 84.086602540378], [-180.04539904997, 84.089100652419], [-180.04067366431, 84.091354545764], [-180.03583679495, 84.09335804265], [-180.03090169944, 84.09510565163], [-180.02588190451, 84.096592582629], [-180.02079116908, 84.097814760073], [-180.0156434465, 84.09876883406], [-180.01045284633, 84.099452189537], [-180.00523359562, 84.099862953475], [-180, 84.1], [180, 84.1], [180.00523359562, 84.099862953475], [180.01045284633, 84.099452189537], [180.0156434465, 84.09876883406], [180.02079116908, 84.097814760073], [180.02588190451, 84.096592582629], [180.03090169944, 84.09510565163], [180.03583679495, 84.09335804265], [180.04067366431, 84.091354545764], [180.04539904997, 84.089100652419], [180.05, 84.086602540378], [180.0544639035, 84.083867056795], [180.05877852523, 84.080901699437], [180.0629320391, 84.077714596146], [180.06691306064, 84.074314482548], [180.07071067812, 84.070710678119], [180.07431448255, 84.066913060636], [180.07771459615, 84.062932039105], [180.08090169944, 84.058778525229], [180.08386705679, 84.054463903501], [180.08660254038, 84.05], [180.08910065242, 84.045399049974], [180.09135454576, 84.040673664308], [180.09335804265, 84.035836794955], [180.09510565163, 84.030901699437], [180.09659258263, 84.02588190451], [180.09781476007, 84.020791169082], [180.09876883406, 84.015643446504], [180.09945218954, 84.010452846327], [180.09986295348, 84.005233595624], [180.1, 84], [180.1, 0], [180.09986295348, -0.005233595624294], [180.09945218954, -0.010452846326765], [180.09876883406, -0.015643446504023], [180.09781476007, -0.020791169081776], [180.09659258263, -0.025881904510252], [180.09510565163, -0.030901699437495], [180.09335804265, -0.03583679495453], [180.09135454576, -0.04067366430758], [180.08910065242, -0.045399049973955], [180.08660254038, -0.05], [180.08386705679, -0.054463903501503], [180.08090169944, -0.058778525229247], [180.07771459615, -0.062932039104984], [180.07431448255, -0.066913060635886], [180.07071067812, -0.070710678118655], [180.06691306064, -0.074314482547739], [180.0629320391, -0.077714596145697], [180.05877852523, -0.080901699437495], [180.0544639035, -0.083867056794542], [180.05, -0.086602540378444], [180.04539904997, -0.089100652418837], [180.04067366431, -0.09135454576426], [180.03583679495, -0.09335804264972], [180.03090169944, -0.095105651629515], [180.02588190451, -0.096592582628907], [180.02079116908, -0.097814760073381], [180.0156434465, -0.098768834059514], [180.01045284633, -0.099452189536827], [180.00523359562, -0.099862953475457], [180, -0.1], [-180, -0.1], [-180.00523359562, -0.099862953475457], [-180.01045284633, -0.099452189536827], [-180.0156434465, -0.098768834059514], [-180.02079116908, -0.097814760073381], [-180.02588190451, -0.096592582628907], [-180.03090169944, -0.095105651629515], [-180.03583679495, -0.09335804264972], [-180.04067366431, -0.09135454576426], [-180.04539904997, -0.089100652418837], [-180.05, -0.086602540378444], [-180.0544639035, -0.083867056794542], [-180.05877852523, -0.080901699437495], [-180.0629320391, -0.077714596145697], [-180.06691306064, -0.074314482547739], [-180.07071067812, -0.070710678118655], [-180.07431448255, -0.066913060635886], [-180.07771459615, -0.062932039104984], [-180.08090169944, -0.058778525229247], [-180.08386705679, -0.054463903501503], [-180.08660254038, -0.05], [-180.08910065242, -0.045399049973955], [-180.09135454576, -0.04067366430758], [-180.09335804265, -0.03583679495453], [-180.09510565163, -0.030901699437495], [-180.09659258263, -0.025881904510252], [-180.09781476007, -0.020791169081776], [-180.09876883406, -0.015643446504023], [-180.09945218954, -0.010452846326765], [-180.09986295348, -0.005233595624294], [-180.1, 0],
                ],
            ],
        ];
    }
}
