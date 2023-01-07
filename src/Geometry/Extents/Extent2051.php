<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Global/World - S hemisphere - 30°W to 24°W - by country.
 * @internal
 */
class Extent2051
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-30.1, -80], [-30.1, 0], [-30.099862953475, 0.005233595624294], [-30.099452189537, 0.010452846326765], [-30.09876883406, 0.015643446504023], [-30.097814760073, 0.020791169081776], [-30.096592582629, 0.025881904510252], [-30.09510565163, 0.030901699437495], [-30.09335804265, 0.03583679495453], [-30.091354545764, 0.04067366430758], [-30.089100652419, 0.045399049973955], [-30.086602540378, 0.05], [-30.083867056795, 0.054463903501503], [-30.080901699437, 0.058778525229247], [-30.077714596146, 0.062932039104984], [-30.074314482548, 0.066913060635886], [-30.070710678119, 0.070710678118655], [-30.066913060636, 0.074314482547739], [-30.062932039105, 0.077714596145697], [-30.058778525229, 0.080901699437495], [-30.054463903501, 0.083867056794542], [-30.05, 0.086602540378444], [-30.045399049974, 0.089100652418837], [-30.040673664308, 0.09135454576426], [-30.035836794955, 0.09335804264972], [-30.030901699437, 0.095105651629515], [-30.02588190451, 0.096592582628907], [-30.020791169082, 0.097814760073381], [-30.015643446504, 0.098768834059514], [-30.010452846327, 0.099452189536827], [-30.005233595624, 0.099862953475457], [-30, 0.1], [-24, 0.1], [-23.994766404376, 0.099862953475457], [-23.989547153673, 0.099452189536827], [-23.984356553496, 0.098768834059514], [-23.979208830918, 0.097814760073381], [-23.97411809549, 0.096592582628907], [-23.969098300563, 0.095105651629515], [-23.964163205045, 0.09335804264972], [-23.959326335692, 0.09135454576426], [-23.954600950026, 0.089100652418837], [-23.95, 0.086602540378444], [-23.945536096498, 0.083867056794542], [-23.941221474771, 0.080901699437495], [-23.937067960895, 0.077714596145697], [-23.933086939364, 0.074314482547739], [-23.929289321881, 0.070710678118655], [-23.925685517452, 0.066913060635886], [-23.922285403854, 0.062932039104984], [-23.919098300562, 0.058778525229247], [-23.916132943205, 0.054463903501503], [-23.913397459622, 0.05], [-23.910899347581, 0.045399049973955], [-23.908645454236, 0.04067366430758], [-23.90664195735, 0.03583679495453], [-23.90489434837, 0.030901699437495], [-23.903407417371, 0.025881904510252], [-23.902185239927, 0.020791169081776], [-23.90123116594, 0.015643446504023], [-23.900547810463, 0.010452846326765], [-23.900137046525, 0.005233595624294], [-23.9, 0], [-23.9, -80], [-23.900137046525, -80.005233595624], [-23.900547810463, -80.010452846327], [-23.90123116594, -80.015643446504], [-23.902185239927, -80.020791169082], [-23.903407417371, -80.02588190451], [-23.90489434837, -80.030901699437], [-23.90664195735, -80.035836794955], [-23.908645454236, -80.040673664308], [-23.910899347581, -80.045399049974], [-23.913397459622, -80.05], [-23.916132943205, -80.054463903501], [-23.919098300562, -80.058778525229], [-23.922285403854, -80.062932039105], [-23.925685517452, -80.066913060636], [-23.929289321881, -80.070710678119], [-23.933086939364, -80.074314482548], [-23.937067960895, -80.077714596146], [-23.941221474771, -80.080901699437], [-23.945536096498, -80.083867056795], [-23.95, -80.086602540378], [-23.954600950026, -80.089100652419], [-23.959326335692, -80.091354545764], [-23.964163205045, -80.09335804265], [-23.969098300563, -80.09510565163], [-23.97411809549, -80.096592582629], [-23.979208830918, -80.097814760073], [-23.984356553496, -80.09876883406], [-23.989547153673, -80.099452189537], [-23.994766404376, -80.099862953475], [-24, -80.1], [-30, -80.1], [-30.005233595624, -80.099862953475], [-30.010452846327, -80.099452189537], [-30.015643446504, -80.09876883406], [-30.020791169082, -80.097814760073], [-30.02588190451, -80.096592582629], [-30.030901699437, -80.09510565163], [-30.035836794955, -80.09335804265], [-30.040673664308, -80.091354545764], [-30.045399049974, -80.089100652419], [-30.05, -80.086602540378], [-30.054463903501, -80.083867056795], [-30.058778525229, -80.080901699437], [-30.062932039105, -80.077714596146], [-30.066913060636, -80.074314482548], [-30.070710678119, -80.070710678119], [-30.074314482548, -80.066913060636], [-30.077714596146, -80.062932039105], [-30.080901699437, -80.058778525229], [-30.083867056795, -80.054463903501], [-30.086602540378, -80.05], [-30.089100652419, -80.045399049974], [-30.091354545764, -80.040673664308], [-30.09335804265, -80.035836794955], [-30.09510565163, -80.030901699437], [-30.096592582629, -80.02588190451], [-30.097814760073, -80.020791169082], [-30.09876883406, -80.015643446504], [-30.099452189537, -80.010452846327], [-30.099862953475, -80.005233595624], [-30.1, -80],
                ],
            ],
        ];
    }
}
