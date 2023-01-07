<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Global/World - S hemisphere - 48°W to 42°W - by country.
 * @internal
 */
class Extent2045
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-48.1, -80], [-48.1, 0], [-48.099862953475, 0.005233595624294], [-48.099452189537, 0.010452846326765], [-48.09876883406, 0.015643446504023], [-48.097814760073, 0.020791169081776], [-48.096592582629, 0.025881904510252], [-48.09510565163, 0.030901699437495], [-48.09335804265, 0.03583679495453], [-48.091354545764, 0.04067366430758], [-48.089100652419, 0.045399049973955], [-48.086602540378, 0.05], [-48.083867056795, 0.054463903501503], [-48.080901699437, 0.058778525229247], [-48.077714596146, 0.062932039104984], [-48.074314482548, 0.066913060635886], [-48.070710678119, 0.070710678118655], [-48.066913060636, 0.074314482547739], [-48.062932039105, 0.077714596145697], [-48.058778525229, 0.080901699437495], [-48.054463903501, 0.083867056794542], [-48.05, 0.086602540378444], [-48.045399049974, 0.089100652418837], [-48.040673664308, 0.09135454576426], [-48.035836794955, 0.09335804264972], [-48.030901699437, 0.095105651629515], [-48.02588190451, 0.096592582628907], [-48.020791169082, 0.097814760073381], [-48.015643446504, 0.098768834059514], [-48.010452846327, 0.099452189536827], [-48.005233595624, 0.099862953475457], [-48, 0.1], [-42, 0.1], [-41.994766404376, 0.099862953475457], [-41.989547153673, 0.099452189536827], [-41.984356553496, 0.098768834059514], [-41.979208830918, 0.097814760073381], [-41.97411809549, 0.096592582628907], [-41.969098300563, 0.095105651629515], [-41.964163205045, 0.09335804264972], [-41.959326335692, 0.09135454576426], [-41.954600950026, 0.089100652418837], [-41.95, 0.086602540378444], [-41.945536096499, 0.083867056794542], [-41.941221474771, 0.080901699437495], [-41.937067960895, 0.077714596145697], [-41.933086939364, 0.074314482547739], [-41.929289321881, 0.070710678118655], [-41.925685517452, 0.066913060635886], [-41.922285403854, 0.062932039104984], [-41.919098300563, 0.058778525229247], [-41.916132943205, 0.054463903501503], [-41.913397459622, 0.05], [-41.910899347581, 0.045399049973955], [-41.908645454236, 0.04067366430758], [-41.90664195735, 0.03583679495453], [-41.90489434837, 0.030901699437495], [-41.903407417371, 0.025881904510252], [-41.902185239927, 0.020791169081776], [-41.90123116594, 0.015643446504023], [-41.900547810463, 0.010452846326765], [-41.900137046525, 0.005233595624294], [-41.9, 0], [-41.9, -80], [-41.900137046525, -80.005233595624], [-41.900547810463, -80.010452846327], [-41.90123116594, -80.015643446504], [-41.902185239927, -80.020791169082], [-41.903407417371, -80.02588190451], [-41.90489434837, -80.030901699437], [-41.90664195735, -80.035836794955], [-41.908645454236, -80.040673664308], [-41.910899347581, -80.045399049974], [-41.913397459622, -80.05], [-41.916132943205, -80.054463903501], [-41.919098300563, -80.058778525229], [-41.922285403854, -80.062932039105], [-41.925685517452, -80.066913060636], [-41.929289321881, -80.070710678119], [-41.933086939364, -80.074314482548], [-41.937067960895, -80.077714596146], [-41.941221474771, -80.080901699437], [-41.945536096499, -80.083867056795], [-41.95, -80.086602540378], [-41.954600950026, -80.089100652419], [-41.959326335692, -80.091354545764], [-41.964163205045, -80.09335804265], [-41.969098300563, -80.09510565163], [-41.97411809549, -80.096592582629], [-41.979208830918, -80.097814760073], [-41.984356553496, -80.09876883406], [-41.989547153673, -80.099452189537], [-41.994766404376, -80.099862953475], [-42, -80.1], [-48, -80.1], [-48.005233595624, -80.099862953475], [-48.010452846327, -80.099452189537], [-48.015643446504, -80.09876883406], [-48.020791169082, -80.097814760073], [-48.02588190451, -80.096592582629], [-48.030901699437, -80.09510565163], [-48.035836794955, -80.09335804265], [-48.040673664308, -80.091354545764], [-48.045399049974, -80.089100652419], [-48.05, -80.086602540378], [-48.054463903501, -80.083867056795], [-48.058778525229, -80.080901699437], [-48.062932039105, -80.077714596146], [-48.066913060636, -80.074314482548], [-48.070710678119, -80.070710678119], [-48.074314482548, -80.066913060636], [-48.077714596146, -80.062932039105], [-48.080901699437, -80.058778525229], [-48.083867056795, -80.054463903501], [-48.086602540378, -80.05], [-48.089100652419, -80.045399049974], [-48.091354545764, -80.040673664308], [-48.09335804265, -80.035836794955], [-48.09510565163, -80.030901699437], [-48.096592582629, -80.02588190451], [-48.097814760073, -80.020791169082], [-48.09876883406, -80.015643446504], [-48.099452189537, -80.010452846327], [-48.099862953475, -80.005233595624], [-48.1, -80],
                ],
            ],
        ];
    }
}
