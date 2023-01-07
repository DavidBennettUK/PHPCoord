<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Global/World - S hemisphere - 24°W to 18°W.
 * @internal
 */
class Extent1926
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-24.1, -80], [-24.1, 0], [-24.099862953475, 0.005233595624294], [-24.099452189537, 0.010452846326765], [-24.09876883406, 0.015643446504023], [-24.097814760073, 0.020791169081776], [-24.096592582629, 0.025881904510252], [-24.09510565163, 0.030901699437495], [-24.09335804265, 0.03583679495453], [-24.091354545764, 0.04067366430758], [-24.089100652419, 0.045399049973955], [-24.086602540378, 0.05], [-24.083867056795, 0.054463903501503], [-24.080901699437, 0.058778525229247], [-24.077714596146, 0.062932039104984], [-24.074314482548, 0.066913060635886], [-24.070710678119, 0.070710678118655], [-24.066913060636, 0.074314482547739], [-24.062932039105, 0.077714596145697], [-24.058778525229, 0.080901699437495], [-24.054463903501, 0.083867056794542], [-24.05, 0.086602540378444], [-24.045399049974, 0.089100652418837], [-24.040673664308, 0.09135454576426], [-24.035836794955, 0.09335804264972], [-24.030901699437, 0.095105651629515], [-24.02588190451, 0.096592582628907], [-24.020791169082, 0.097814760073381], [-24.015643446504, 0.098768834059514], [-24.010452846327, 0.099452189536827], [-24.005233595624, 0.099862953475457], [-24, 0.1], [-18, 0.1], [-17.994766404376, 0.099862953475457], [-17.989547153673, 0.099452189536827], [-17.984356553496, 0.098768834059514], [-17.979208830918, 0.097814760073381], [-17.97411809549, 0.096592582628907], [-17.969098300563, 0.095105651629515], [-17.964163205045, 0.09335804264972], [-17.959326335692, 0.09135454576426], [-17.954600950026, 0.089100652418837], [-17.95, 0.086602540378444], [-17.945536096498, 0.083867056794542], [-17.941221474771, 0.080901699437495], [-17.937067960895, 0.077714596145697], [-17.933086939364, 0.074314482547739], [-17.929289321881, 0.070710678118655], [-17.925685517452, 0.066913060635886], [-17.922285403854, 0.062932039104984], [-17.919098300562, 0.058778525229247], [-17.916132943205, 0.054463903501503], [-17.913397459622, 0.05], [-17.910899347581, 0.045399049973955], [-17.908645454236, 0.04067366430758], [-17.90664195735, 0.03583679495453], [-17.90489434837, 0.030901699437495], [-17.903407417371, 0.025881904510252], [-17.902185239927, 0.020791169081776], [-17.90123116594, 0.015643446504023], [-17.900547810463, 0.010452846326765], [-17.900137046525, 0.005233595624294], [-17.9, 0], [-17.9, -80], [-17.900137046525, -80.005233595624], [-17.900547810463, -80.010452846327], [-17.90123116594, -80.015643446504], [-17.902185239927, -80.020791169082], [-17.903407417371, -80.02588190451], [-17.90489434837, -80.030901699437], [-17.90664195735, -80.035836794955], [-17.908645454236, -80.040673664308], [-17.910899347581, -80.045399049974], [-17.913397459622, -80.05], [-17.916132943205, -80.054463903501], [-17.919098300562, -80.058778525229], [-17.922285403854, -80.062932039105], [-17.925685517452, -80.066913060636], [-17.929289321881, -80.070710678119], [-17.933086939364, -80.074314482548], [-17.937067960895, -80.077714596146], [-17.941221474771, -80.080901699437], [-17.945536096498, -80.083867056795], [-17.95, -80.086602540378], [-17.954600950026, -80.089100652419], [-17.959326335692, -80.091354545764], [-17.964163205045, -80.09335804265], [-17.969098300563, -80.09510565163], [-17.97411809549, -80.096592582629], [-17.979208830918, -80.097814760073], [-17.984356553496, -80.09876883406], [-17.989547153673, -80.099452189537], [-17.994766404376, -80.099862953475], [-18, -80.1], [-24, -80.1], [-24.005233595624, -80.099862953475], [-24.010452846327, -80.099452189537], [-24.015643446504, -80.09876883406], [-24.020791169082, -80.097814760073], [-24.02588190451, -80.096592582629], [-24.030901699437, -80.09510565163], [-24.035836794955, -80.09335804265], [-24.040673664308, -80.091354545764], [-24.045399049974, -80.089100652419], [-24.05, -80.086602540378], [-24.054463903501, -80.083867056795], [-24.058778525229, -80.080901699437], [-24.062932039105, -80.077714596146], [-24.066913060636, -80.074314482548], [-24.070710678119, -80.070710678119], [-24.074314482548, -80.066913060636], [-24.077714596146, -80.062932039105], [-24.080901699437, -80.058778525229], [-24.083867056795, -80.054463903501], [-24.086602540378, -80.05], [-24.089100652419, -80.045399049974], [-24.091354545764, -80.040673664308], [-24.09335804265, -80.035836794955], [-24.09510565163, -80.030901699437], [-24.096592582629, -80.02588190451], [-24.097814760073, -80.020791169082], [-24.09876883406, -80.015643446504], [-24.099452189537, -80.010452846327], [-24.099862953475, -80.005233595624], [-24.1, -80],
                ],
            ],
        ];
    }
}
