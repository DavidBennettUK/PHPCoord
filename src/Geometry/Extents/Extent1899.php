<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Global/World - N hemisphere - 102°W to 96°W.
 * @internal
 */
class Extent1899
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-102.1, 0], [-102.1, 84], [-102.09986295348, 84.005233595624], [-102.09945218954, 84.010452846327], [-102.09876883406, 84.015643446504], [-102.09781476007, 84.020791169082], [-102.09659258263, 84.02588190451], [-102.09510565163, 84.030901699437], [-102.09335804265, 84.035836794955], [-102.09135454576, 84.040673664308], [-102.08910065242, 84.045399049974], [-102.08660254038, 84.05], [-102.08386705679, 84.054463903501], [-102.08090169944, 84.058778525229], [-102.07771459615, 84.062932039105], [-102.07431448255, 84.066913060636], [-102.07071067812, 84.070710678119], [-102.06691306064, 84.074314482548], [-102.0629320391, 84.077714596146], [-102.05877852523, 84.080901699437], [-102.0544639035, 84.083867056795], [-102.05, 84.086602540378], [-102.04539904997, 84.089100652419], [-102.04067366431, 84.091354545764], [-102.03583679495, 84.09335804265], [-102.03090169944, 84.09510565163], [-102.02588190451, 84.096592582629], [-102.02079116908, 84.097814760073], [-102.0156434465, 84.09876883406], [-102.01045284633, 84.099452189537], [-102.00523359562, 84.099862953475], [-102, 84.1], [-96, 84.1], [-95.994766404376, 84.099862953475], [-95.989547153673, 84.099452189537], [-95.984356553496, 84.09876883406], [-95.979208830918, 84.097814760073], [-95.97411809549, 84.096592582629], [-95.969098300562, 84.09510565163], [-95.964163205045, 84.09335804265], [-95.959326335692, 84.091354545764], [-95.954600950026, 84.089100652419], [-95.95, 84.086602540378], [-95.945536096499, 84.083867056795], [-95.941221474771, 84.080901699437], [-95.937067960895, 84.077714596146], [-95.933086939364, 84.074314482548], [-95.929289321881, 84.070710678119], [-95.925685517452, 84.066913060636], [-95.922285403854, 84.062932039105], [-95.919098300563, 84.058778525229], [-95.916132943205, 84.054463903501], [-95.913397459622, 84.05], [-95.910899347581, 84.045399049974], [-95.908645454236, 84.040673664308], [-95.90664195735, 84.035836794955], [-95.90489434837, 84.030901699437], [-95.903407417371, 84.02588190451], [-95.902185239927, 84.020791169082], [-95.90123116594, 84.015643446504], [-95.900547810463, 84.010452846327], [-95.900137046525, 84.005233595624], [-95.9, 84], [-95.9, 0], [-95.900137046525, -0.005233595624294], [-95.900547810463, -0.010452846326765], [-95.90123116594, -0.015643446504023], [-95.902185239927, -0.020791169081776], [-95.903407417371, -0.025881904510252], [-95.90489434837, -0.030901699437495], [-95.90664195735, -0.03583679495453], [-95.908645454236, -0.04067366430758], [-95.910899347581, -0.045399049973955], [-95.913397459622, -0.05], [-95.916132943205, -0.054463903501503], [-95.919098300563, -0.058778525229247], [-95.922285403854, -0.062932039104984], [-95.925685517452, -0.066913060635886], [-95.929289321881, -0.070710678118655], [-95.933086939364, -0.074314482547739], [-95.937067960895, -0.077714596145697], [-95.941221474771, -0.080901699437495], [-95.945536096499, -0.083867056794542], [-95.95, -0.086602540378444], [-95.954600950026, -0.089100652418837], [-95.959326335692, -0.09135454576426], [-95.964163205045, -0.09335804264972], [-95.969098300562, -0.095105651629515], [-95.97411809549, -0.096592582628907], [-95.979208830918, -0.097814760073381], [-95.984356553496, -0.098768834059514], [-95.989547153673, -0.099452189536827], [-95.994766404376, -0.099862953475457], [-96, -0.1], [-102, -0.1], [-102.00523359562, -0.099862953475457], [-102.01045284633, -0.099452189536827], [-102.0156434465, -0.098768834059514], [-102.02079116908, -0.097814760073381], [-102.02588190451, -0.096592582628907], [-102.03090169944, -0.095105651629515], [-102.03583679495, -0.09335804264972], [-102.04067366431, -0.09135454576426], [-102.04539904997, -0.089100652418837], [-102.05, -0.086602540378444], [-102.0544639035, -0.083867056794542], [-102.05877852523, -0.080901699437495], [-102.0629320391, -0.077714596145697], [-102.06691306064, -0.074314482547739], [-102.07071067812, -0.070710678118655], [-102.07431448255, -0.066913060635886], [-102.07771459615, -0.062932039104984], [-102.08090169944, -0.058778525229247], [-102.08386705679, -0.054463903501503], [-102.08660254038, -0.05], [-102.08910065242, -0.045399049973955], [-102.09135454576, -0.04067366430758], [-102.09335804265, -0.03583679495453], [-102.09510565163, -0.030901699437495], [-102.09659258263, -0.025881904510252], [-102.09781476007, -0.020791169081776], [-102.09876883406, -0.015643446504023], [-102.09945218954, -0.010452846326765], [-102.09986295348, -0.005233595624294], [-102.1, 0],
                ],
            ],
        ];
    }
}
