<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Global/World - S hemisphere - 72°E to 78°E.
 * @internal
 */
class Extent1958
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [71.9, -80], [71.9, 0], [71.900137046525, 0.005233595624294], [71.900547810463, 0.010452846326765], [71.90123116594, 0.015643446504023], [71.902185239927, 0.020791169081776], [71.903407417371, 0.025881904510252], [71.90489434837, 0.030901699437495], [71.90664195735, 0.03583679495453], [71.908645454236, 0.04067366430758], [71.910899347581, 0.045399049973955], [71.913397459622, 0.05], [71.916132943205, 0.054463903501503], [71.919098300563, 0.058778525229247], [71.922285403854, 0.062932039104984], [71.925685517452, 0.066913060635886], [71.929289321881, 0.070710678118655], [71.933086939364, 0.074314482547739], [71.937067960895, 0.077714596145697], [71.941221474771, 0.080901699437495], [71.945536096499, 0.083867056794542], [71.95, 0.086602540378444], [71.954600950026, 0.089100652418837], [71.959326335692, 0.09135454576426], [71.964163205045, 0.09335804264972], [71.969098300562, 0.095105651629515], [71.97411809549, 0.096592582628907], [71.979208830918, 0.097814760073381], [71.984356553496, 0.098768834059514], [71.989547153673, 0.099452189536827], [71.994766404376, 0.099862953475457], [72, 0.1], [78, 0.1], [78.005233595624, 0.099862953475457], [78.010452846327, 0.099452189536827], [78.015643446504, 0.098768834059514], [78.020791169082, 0.097814760073381], [78.02588190451, 0.096592582628907], [78.030901699437, 0.095105651629515], [78.035836794955, 0.09335804264972], [78.040673664308, 0.09135454576426], [78.045399049974, 0.089100652418837], [78.05, 0.086602540378444], [78.054463903501, 0.083867056794542], [78.058778525229, 0.080901699437495], [78.062932039105, 0.077714596145697], [78.066913060636, 0.074314482547739], [78.070710678119, 0.070710678118655], [78.074314482548, 0.066913060635886], [78.077714596146, 0.062932039104984], [78.080901699437, 0.058778525229247], [78.083867056795, 0.054463903501503], [78.086602540378, 0.05], [78.089100652419, 0.045399049973955], [78.091354545764, 0.04067366430758], [78.09335804265, 0.03583679495453], [78.09510565163, 0.030901699437495], [78.096592582629, 0.025881904510252], [78.097814760073, 0.020791169081776], [78.09876883406, 0.015643446504023], [78.099452189537, 0.010452846326765], [78.099862953475, 0.005233595624294], [78.1, 0], [78.1, -80], [78.099862953475, -80.005233595624], [78.099452189537, -80.010452846327], [78.09876883406, -80.015643446504], [78.097814760073, -80.020791169082], [78.096592582629, -80.02588190451], [78.09510565163, -80.030901699437], [78.09335804265, -80.035836794955], [78.091354545764, -80.040673664308], [78.089100652419, -80.045399049974], [78.086602540378, -80.05], [78.083867056795, -80.054463903501], [78.080901699437, -80.058778525229], [78.077714596146, -80.062932039105], [78.074314482548, -80.066913060636], [78.070710678119, -80.070710678119], [78.066913060636, -80.074314482548], [78.062932039105, -80.077714596146], [78.058778525229, -80.080901699437], [78.054463903501, -80.083867056795], [78.05, -80.086602540378], [78.045399049974, -80.089100652419], [78.040673664308, -80.091354545764], [78.035836794955, -80.09335804265], [78.030901699437, -80.09510565163], [78.02588190451, -80.096592582629], [78.020791169082, -80.097814760073], [78.015643446504, -80.09876883406], [78.010452846327, -80.099452189537], [78.005233595624, -80.099862953475], [78, -80.1], [72, -80.1], [71.994766404376, -80.099862953475], [71.989547153673, -80.099452189537], [71.984356553496, -80.09876883406], [71.979208830918, -80.097814760073], [71.97411809549, -80.096592582629], [71.969098300562, -80.09510565163], [71.964163205045, -80.09335804265], [71.959326335692, -80.091354545764], [71.954600950026, -80.089100652419], [71.95, -80.086602540378], [71.945536096499, -80.083867056795], [71.941221474771, -80.080901699437], [71.937067960895, -80.077714596146], [71.933086939364, -80.074314482548], [71.929289321881, -80.070710678119], [71.925685517452, -80.066913060636], [71.922285403854, -80.062932039105], [71.919098300563, -80.058778525229], [71.916132943205, -80.054463903501], [71.913397459622, -80.05], [71.910899347581, -80.045399049974], [71.908645454236, -80.040673664308], [71.90664195735, -80.035836794955], [71.90489434837, -80.030901699437], [71.903407417371, -80.02588190451], [71.902185239927, -80.020791169082], [71.90123116594, -80.015643446504], [71.900547810463, -80.010452846327], [71.900137046525, -80.005233595624], [71.9, -80],
                ],
            ],
        ];
    }
}
