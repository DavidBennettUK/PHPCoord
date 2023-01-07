<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Global/World - S hemisphere - 18°W to 12°W.
 * @internal
 */
class Extent1928
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-18.1, -80], [-18.1, 0], [-18.099862953475, 0.005233595624294], [-18.099452189537, 0.010452846326765], [-18.09876883406, 0.015643446504023], [-18.097814760073, 0.020791169081776], [-18.096592582629, 0.025881904510252], [-18.09510565163, 0.030901699437495], [-18.09335804265, 0.03583679495453], [-18.091354545764, 0.04067366430758], [-18.089100652419, 0.045399049973955], [-18.086602540378, 0.05], [-18.083867056795, 0.054463903501503], [-18.080901699437, 0.058778525229247], [-18.077714596146, 0.062932039104984], [-18.074314482548, 0.066913060635886], [-18.070710678119, 0.070710678118655], [-18.066913060636, 0.074314482547739], [-18.062932039105, 0.077714596145697], [-18.058778525229, 0.080901699437495], [-18.054463903501, 0.083867056794542], [-18.05, 0.086602540378444], [-18.045399049974, 0.089100652418837], [-18.040673664308, 0.09135454576426], [-18.035836794955, 0.09335804264972], [-18.030901699437, 0.095105651629515], [-18.02588190451, 0.096592582628907], [-18.020791169082, 0.097814760073381], [-18.015643446504, 0.098768834059514], [-18.010452846327, 0.099452189536827], [-18.005233595624, 0.099862953475457], [-18, 0.1], [-12, 0.1], [-11.994766404376, 0.099862953475457], [-11.989547153673, 0.099452189536827], [-11.984356553496, 0.098768834059514], [-11.979208830918, 0.097814760073381], [-11.97411809549, 0.096592582628907], [-11.969098300563, 0.095105651629515], [-11.964163205045, 0.09335804264972], [-11.959326335692, 0.09135454576426], [-11.954600950026, 0.089100652418837], [-11.95, 0.086602540378444], [-11.945536096498, 0.083867056794542], [-11.941221474771, 0.080901699437495], [-11.937067960895, 0.077714596145697], [-11.933086939364, 0.074314482547739], [-11.929289321881, 0.070710678118655], [-11.925685517452, 0.066913060635886], [-11.922285403854, 0.062932039104984], [-11.919098300562, 0.058778525229247], [-11.916132943205, 0.054463903501503], [-11.913397459622, 0.05], [-11.910899347581, 0.045399049973955], [-11.908645454236, 0.04067366430758], [-11.90664195735, 0.03583679495453], [-11.90489434837, 0.030901699437495], [-11.903407417371, 0.025881904510252], [-11.902185239927, 0.020791169081776], [-11.90123116594, 0.015643446504023], [-11.900547810463, 0.010452846326765], [-11.900137046525, 0.005233595624294], [-11.9, 0], [-11.9, -80], [-11.900137046525, -80.005233595624], [-11.900547810463, -80.010452846327], [-11.90123116594, -80.015643446504], [-11.902185239927, -80.020791169082], [-11.903407417371, -80.02588190451], [-11.90489434837, -80.030901699437], [-11.90664195735, -80.035836794955], [-11.908645454236, -80.040673664308], [-11.910899347581, -80.045399049974], [-11.913397459622, -80.05], [-11.916132943205, -80.054463903501], [-11.919098300562, -80.058778525229], [-11.922285403854, -80.062932039105], [-11.925685517452, -80.066913060636], [-11.929289321881, -80.070710678119], [-11.933086939364, -80.074314482548], [-11.937067960895, -80.077714596146], [-11.941221474771, -80.080901699437], [-11.945536096498, -80.083867056795], [-11.95, -80.086602540378], [-11.954600950026, -80.089100652419], [-11.959326335692, -80.091354545764], [-11.964163205045, -80.09335804265], [-11.969098300563, -80.09510565163], [-11.97411809549, -80.096592582629], [-11.979208830918, -80.097814760073], [-11.984356553496, -80.09876883406], [-11.989547153673, -80.099452189537], [-11.994766404376, -80.099862953475], [-12, -80.1], [-18, -80.1], [-18.005233595624, -80.099862953475], [-18.010452846327, -80.099452189537], [-18.015643446504, -80.09876883406], [-18.020791169082, -80.097814760073], [-18.02588190451, -80.096592582629], [-18.030901699437, -80.09510565163], [-18.035836794955, -80.09335804265], [-18.040673664308, -80.091354545764], [-18.045399049974, -80.089100652419], [-18.05, -80.086602540378], [-18.054463903501, -80.083867056795], [-18.058778525229, -80.080901699437], [-18.062932039105, -80.077714596146], [-18.066913060636, -80.074314482548], [-18.070710678119, -80.070710678119], [-18.074314482548, -80.066913060636], [-18.077714596146, -80.062932039105], [-18.080901699437, -80.058778525229], [-18.083867056795, -80.054463903501], [-18.086602540378, -80.05], [-18.089100652419, -80.045399049974], [-18.091354545764, -80.040673664308], [-18.09335804265, -80.035836794955], [-18.09510565163, -80.030901699437], [-18.096592582629, -80.02588190451], [-18.097814760073, -80.020791169082], [-18.09876883406, -80.015643446504], [-18.099452189537, -80.010452846327], [-18.099862953475, -80.005233595624], [-18.1, -80],
                ],
            ],
        ];
    }
}
