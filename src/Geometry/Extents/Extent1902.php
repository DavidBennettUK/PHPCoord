<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Global/World - S hemisphere - 96°W to 90°W.
 * @internal
 */
class Extent1902
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-96.1, -80], [-96.1, 0], [-96.099862953475, 0.005233595624294], [-96.099452189537, 0.010452846326765], [-96.09876883406, 0.015643446504023], [-96.097814760073, 0.020791169081776], [-96.096592582629, 0.025881904510252], [-96.09510565163, 0.030901699437495], [-96.09335804265, 0.03583679495453], [-96.091354545764, 0.04067366430758], [-96.089100652419, 0.045399049973955], [-96.086602540378, 0.05], [-96.083867056795, 0.054463903501503], [-96.080901699437, 0.058778525229247], [-96.077714596146, 0.062932039104984], [-96.074314482548, 0.066913060635886], [-96.070710678119, 0.070710678118655], [-96.066913060636, 0.074314482547739], [-96.062932039105, 0.077714596145697], [-96.058778525229, 0.080901699437495], [-96.054463903501, 0.083867056794542], [-96.05, 0.086602540378444], [-96.045399049974, 0.089100652418837], [-96.040673664308, 0.09135454576426], [-96.035836794955, 0.09335804264972], [-96.030901699437, 0.095105651629515], [-96.02588190451, 0.096592582628907], [-96.020791169082, 0.097814760073381], [-96.015643446504, 0.098768834059514], [-96.010452846327, 0.099452189536827], [-96.005233595624, 0.099862953475457], [-96, 0.1], [-90, 0.1], [-89.994766404376, 0.099862953475457], [-89.989547153673, 0.099452189536827], [-89.984356553496, 0.098768834059514], [-89.979208830918, 0.097814760073381], [-89.97411809549, 0.096592582628907], [-89.969098300562, 0.095105651629515], [-89.964163205045, 0.09335804264972], [-89.959326335692, 0.09135454576426], [-89.954600950026, 0.089100652418837], [-89.95, 0.086602540378444], [-89.945536096499, 0.083867056794542], [-89.941221474771, 0.080901699437495], [-89.937067960895, 0.077714596145697], [-89.933086939364, 0.074314482547739], [-89.929289321881, 0.070710678118655], [-89.925685517452, 0.066913060635886], [-89.922285403854, 0.062932039104984], [-89.919098300563, 0.058778525229247], [-89.916132943205, 0.054463903501503], [-89.913397459622, 0.05], [-89.910899347581, 0.045399049973955], [-89.908645454236, 0.04067366430758], [-89.90664195735, 0.03583679495453], [-89.90489434837, 0.030901699437495], [-89.903407417371, 0.025881904510252], [-89.902185239927, 0.020791169081776], [-89.90123116594, 0.015643446504023], [-89.900547810463, 0.010452846326765], [-89.900137046525, 0.005233595624294], [-89.9, 0], [-89.9, -80], [-89.900137046525, -80.005233595624], [-89.900547810463, -80.010452846327], [-89.90123116594, -80.015643446504], [-89.902185239927, -80.020791169082], [-89.903407417371, -80.02588190451], [-89.90489434837, -80.030901699437], [-89.90664195735, -80.035836794955], [-89.908645454236, -80.040673664308], [-89.910899347581, -80.045399049974], [-89.913397459622, -80.05], [-89.916132943205, -80.054463903501], [-89.919098300563, -80.058778525229], [-89.922285403854, -80.062932039105], [-89.925685517452, -80.066913060636], [-89.929289321881, -80.070710678119], [-89.933086939364, -80.074314482548], [-89.937067960895, -80.077714596146], [-89.941221474771, -80.080901699437], [-89.945536096499, -80.083867056795], [-89.95, -80.086602540378], [-89.954600950026, -80.089100652419], [-89.959326335692, -80.091354545764], [-89.964163205045, -80.09335804265], [-89.969098300562, -80.09510565163], [-89.97411809549, -80.096592582629], [-89.979208830918, -80.097814760073], [-89.984356553496, -80.09876883406], [-89.989547153673, -80.099452189537], [-89.994766404376, -80.099862953475], [-90, -80.1], [-96, -80.1], [-96.005233595624, -80.099862953475], [-96.010452846327, -80.099452189537], [-96.015643446504, -80.09876883406], [-96.020791169082, -80.097814760073], [-96.02588190451, -80.096592582629], [-96.030901699437, -80.09510565163], [-96.035836794955, -80.09335804265], [-96.040673664308, -80.091354545764], [-96.045399049974, -80.089100652419], [-96.05, -80.086602540378], [-96.054463903501, -80.083867056795], [-96.058778525229, -80.080901699437], [-96.062932039105, -80.077714596146], [-96.066913060636, -80.074314482548], [-96.070710678119, -80.070710678119], [-96.074314482548, -80.066913060636], [-96.077714596146, -80.062932039105], [-96.080901699437, -80.058778525229], [-96.083867056795, -80.054463903501], [-96.086602540378, -80.05], [-96.089100652419, -80.045399049974], [-96.091354545764, -80.040673664308], [-96.09335804265, -80.035836794955], [-96.09510565163, -80.030901699437], [-96.096592582629, -80.02588190451], [-96.097814760073, -80.020791169082], [-96.09876883406, -80.015643446504], [-96.099452189537, -80.010452846327], [-96.099862953475, -80.005233595624], [-96.1, -80],
                ],
            ],
        ];
    }
}
