<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Global/World - N hemisphere - north of 60°N.
 * @internal
 */
class Extent1996
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [-180.1, 59.9], [-179.43456561922, 59.9], [-178.76913123845, 59.9], [-178.10369685767, 59.9], [-177.43826247689, 59.9], [-176.77282809612, 59.9], [-176.10739371534, 59.9], [-175.44195933457, 59.9], [-174.77652495379, 59.9], [-174.11109057301, 59.9], [-173.44565619224, 59.9], [-172.78022181146, 59.9], [-172.11478743068, 59.9], [-171.44935304991, 59.9], [-170.78391866913, 59.9], [-170.11848428835, 59.9], [-169.45304990758, 59.9], [-168.7876155268, 59.9], [-168.12218114603, 59.9], [-167.45674676525, 59.9], [-166.79131238447, 59.9], [-166.1258780037, 59.9], [-165.46044362292, 59.9], [-164.79500924214, 59.9], [-164.12957486137, 59.9], [-163.46414048059, 59.9], [-162.79870609981, 59.9], [-162.13327171904, 59.9], [-161.46783733826, 59.9], [-160.80240295749, 59.9], [-160.13696857671, 59.9], [-159.47153419593, 59.9], [-158.80609981516, 59.9], [-158.14066543438, 59.9], [-157.4752310536, 59.9], [-156.80979667283, 59.9], [-156.14436229205, 59.9], [-155.47892791128, 59.9], [-154.8134935305, 59.9], [-154.14805914972, 59.9], [-153.48262476895, 59.9], [-152.81719038817, 59.9], [-152.15175600739, 59.9], [-151.48632162662, 59.9], [-150.82088724584, 59.9], [-150.15545286506, 59.9], [-149.49001848429, 59.9], [-148.82458410351, 59.9], [-148.15914972274, 59.9], [-147.49371534196, 59.9], [-146.82828096118, 59.9], [-146.16284658041, 59.9], [-145.49741219963, 59.9], [-144.83197781885, 59.9], [-144.16654343808, 59.9], [-143.5011090573, 59.9], [-142.83567467652, 59.9], [-142.17024029575, 59.9], [-141.50480591497, 59.9], [-140.8393715342, 59.9], [-140.17393715342, 59.9], [-139.50850277264, 59.9], [-138.84306839187, 59.9], [-138.17763401109, 59.9], [-137.51219963031, 59.9], [-136.84676524954, 59.9], [-136.18133086876, 59.9], [-135.51589648799, 59.9], [-134.85046210721, 59.9], [-134.18502772643, 59.9], [-133.51959334566, 59.9], [-132.85415896488, 59.9], [-132.1887245841, 59.9], [-131.52329020333, 59.9], [-130.85785582255, 59.9], [-130.19242144177, 59.9], [-129.526987061, 59.9], [-128.86155268022, 59.9], [-128.19611829945, 59.9], [-127.53068391867, 59.9], [-126.86524953789, 59.9], [-126.19981515712, 59.9], [-125.53438077634, 59.9], [-124.86894639556, 59.9], [-124.20351201479, 59.9], [-123.53807763401, 59.9], [-122.87264325323, 59.9], [-122.20720887246, 59.9], [-121.54177449168, 59.9], [-120.87634011091, 59.9], [-120.21090573013, 59.9], [-119.54547134935, 59.9], [-118.88003696858, 59.9], [-118.2146025878, 59.9], [-117.54916820702, 59.9], [-116.88373382625, 59.9], [-116.21829944547, 59.9], [-115.5528650647, 59.9], [-114.88743068392, 59.9], [-114.22199630314, 59.9], [-113.55656192237, 59.9], [-112.89112754159, 59.9], [-112.22569316081, 59.9], [-111.56025878004, 59.9], [-110.89482439926, 59.9], [-110.22939001848, 59.9], [-109.56395563771, 59.9], [-108.89852125693, 59.9], [-108.23308687616, 59.9], [-107.56765249538, 59.9], [-106.9022181146, 59.9], [-106.23678373383, 59.9], [-105.57134935305, 59.9], [-104.90591497227, 59.9], [-104.2404805915, 59.9], [-103.57504621072, 59.9], [-102.90961182994, 59.9], [-102.24417744917, 59.9], [-101.57874306839, 59.9], [-100.91330868762, 59.9], [-100.24787430684, 59.9], [-99.582439926063, 59.9], [-98.917005545287, 59.9], [-98.25157116451, 59.9], [-97.586136783734, 59.9], [-96.920702402958, 59.9], [-96.255268022181, 59.9], [-95.589833641405, 59.9], [-94.924399260629, 59.9], [-94.258964879852, 59.9], [-93.593530499076, 59.9], [-92.928096118299, 59.9], [-92.262661737523, 59.9], [-91.597227356747, 59.9], [-90.93179297597, 59.9], [-90.266358595194, 59.9], [-89.600924214418, 59.9], [-88.935489833641, 59.9], [-88.270055452865, 59.9], [-87.604621072089, 59.9], [-86.939186691312, 59.9], [-86.273752310536, 59.9], [-85.60831792976, 59.9], [-84.942883548983, 59.9], [-84.277449168207, 59.9], [-83.612014787431, 59.9], [-82.946580406654, 59.9], [-82.281146025878, 59.9], [-81.615711645102, 59.9], [-80.950277264325, 59.9], [-80.284842883549, 59.9], [-79.619408502773, 59.9], [-78.953974121996, 59.9], [-78.28853974122, 59.9], [-77.623105360444, 59.9], [-76.957670979667, 59.9], [-76.292236598891, 59.9], [-75.626802218115, 59.9], [-74.961367837338, 59.9], [-74.295933456562, 59.9], [-73.630499075786, 59.9], [-72.965064695009, 59.9], [-72.299630314233, 59.9], [-71.634195933457, 59.9], [-70.96876155268, 59.9], [-70.303327171904, 59.9], [-69.637892791128, 59.9], [-68.972458410351, 59.9], [-68.307024029575, 59.9], [-67.641589648799, 59.9], [-66.976155268022, 59.9], [-66.310720887246, 59.9], [-65.645286506469, 59.9], [-64.979852125693, 59.9], [-64.314417744917, 59.9], [-63.64898336414, 59.9], [-62.983548983364, 59.9], [-62.318114602588, 59.9], [-61.652680221811, 59.9], [-60.987245841035, 59.9], [-60.321811460259, 59.9], [-59.656377079482, 59.9], [-58.990942698706, 59.9], [-58.32550831793, 59.9], [-57.660073937153, 59.9], [-56.994639556377, 59.9], [-56.329205175601, 59.9], [-55.663770794824, 59.9], [-54.998336414048, 59.9], [-54.332902033272, 59.9], [-53.667467652495, 59.9], [-53.002033271719, 59.9], [-52.336598890943, 59.9], [-51.671164510166, 59.9], [-51.00573012939, 59.9], [-50.340295748614, 59.9], [-49.674861367837, 59.9], [-49.009426987061, 59.9], [-48.343992606285, 59.9], [-47.678558225508, 59.9], [-47.013123844732, 59.9], [-46.347689463956, 59.9], [-45.682255083179, 59.9], [-45.016820702403, 59.9], [-44.351386321627, 59.9], [-43.68595194085, 59.9], [-43.020517560074, 59.9], [-42.355083179298, 59.9], [-41.689648798521, 59.9], [-41.024214417745, 59.9], [-40.358780036969, 59.9], [-39.693345656192, 59.9], [-39.027911275416, 59.9], [-38.36247689464, 59.9], [-37.697042513863, 59.9], [-37.031608133087, 59.9], [-36.366173752311, 59.9], [-35.700739371534, 59.9], [-35.035304990758, 59.9], [-34.369870609982, 59.9], [-33.704436229205, 59.9], [-33.039001848429, 59.9], [-32.373567467652, 59.9], [-31.708133086876, 59.9], [-31.0426987061, 59.9], [-30.377264325323, 59.9], [-29.711829944547, 59.9], [-29.046395563771, 59.9], [-28.380961182994, 59.9], [-27.715526802218, 59.9], [-27.050092421442, 59.9], [-26.384658040665, 59.9], [-25.719223659889, 59.9], [-25.053789279113, 59.9], [-24.388354898336, 59.9], [-23.72292051756, 59.9], [-23.057486136784, 59.9], [-22.392051756007, 59.9], [-21.726617375231, 59.9], [-21.061182994455, 59.9], [-20.395748613678, 59.9], [-19.730314232902, 59.9], [-19.064879852126, 59.9], [-18.399445471349, 59.9], [-17.734011090573, 59.9], [-17.068576709797, 59.9], [-16.40314232902, 59.9], [-15.737707948244, 59.9], [-15.072273567468, 59.9], [-14.406839186691, 59.9], [-13.741404805915, 59.9], [-13.075970425139, 59.9], [-12.410536044362, 59.9], [-11.745101663586, 59.9], [-11.07966728281, 59.9], [-10.414232902033, 59.9], [-9.7487985212569, 59.9], [-9.0833641404806, 59.9], [-8.4179297597043, 59.9], [-7.7524953789279, 59.9], [-7.0870609981516, 59.9], [-6.4216266173752, 59.9], [-5.7561922365989, 59.9], [-5.0907578558226, 59.9], [-4.4253234750462, 59.9], [-3.7598890942699, 59.9], [-3.0944547134935, 59.9], [-2.4290203327172, 59.9], [-1.7635859519409, 59.9], [-1.0981515711645, 59.9], [-0.43271719038818, 59.9], [0.43271719038816, 59.9], [1.0981515711645, 59.9], [1.7635859519408, 59.9], [2.4290203327172, 59.9], [3.0944547134935, 59.9], [3.7598890942699, 59.9], [4.4253234750462, 59.9], [5.0907578558225, 59.9], [5.7561922365989, 59.9], [6.4216266173752, 59.9], [7.0870609981516, 59.9], [7.7524953789279, 59.9], [8.4179297597042, 59.9], [9.0833641404806, 59.9], [9.7487985212569, 59.9], [10.414232902033, 59.9], [11.07966728281, 59.9], [11.745101663586, 59.9], [12.410536044362, 59.9], [13.075970425139, 59.9], [13.741404805915, 59.9], [14.406839186691, 59.9], [15.072273567468, 59.9], [15.737707948244, 59.9], [16.40314232902, 59.9], [17.068576709797, 59.9], [17.734011090573, 59.9], [18.399445471349, 59.9], [19.064879852126, 59.9], [19.730314232902, 59.9], [20.395748613678, 59.9], [21.061182994455, 59.9], [21.726617375231, 59.9], [22.392051756007, 59.9], [23.057486136784, 59.9], [23.72292051756, 59.9], [24.388354898336, 59.9], [25.053789279113, 59.9], [25.719223659889, 59.9], [26.384658040665, 59.9], [27.050092421442, 59.9], [27.715526802218, 59.9], [28.380961182994, 59.9], [29.046395563771, 59.9], [29.711829944547, 59.9], [30.377264325323, 59.9], [31.0426987061, 59.9], [31.708133086876, 59.9], [32.373567467652, 59.9], [33.039001848429, 59.9], [33.704436229205, 59.9], [34.369870609981, 59.9], [35.035304990758, 59.9], [35.700739371534, 59.9], [36.366173752311, 59.9], [37.031608133087, 59.9], [37.697042513863, 59.9], [38.36247689464, 59.9], [39.027911275416, 59.9], [39.693345656192, 59.9], [40.358780036969, 59.9], [41.024214417745, 59.9], [41.689648798521, 59.9], [42.355083179298, 59.9], [43.020517560074, 59.9], [43.68595194085, 59.9], [44.351386321627, 59.9], [45.016820702403, 59.9], [45.682255083179, 59.9], [46.347689463956, 59.9], [47.013123844732, 59.9], [47.678558225508, 59.9], [48.343992606285, 59.9], [49.009426987061, 59.9], [49.674861367837, 59.9], [50.340295748614, 59.9], [51.00573012939, 59.9], [51.671164510166, 59.9], [52.336598890943, 59.9], [53.002033271719, 59.9], [53.667467652495, 59.9], [54.332902033272, 59.9], [54.998336414048, 59.9], [55.663770794824, 59.9], [56.329205175601, 59.9], [56.994639556377, 59.9], [57.660073937153, 59.9], [58.32550831793, 59.9], [58.990942698706, 59.9], [59.656377079482, 59.9], [60.321811460259, 59.9], [60.987245841035, 59.9], [61.652680221811, 59.9], [62.318114602588, 59.9], [62.983548983364, 59.9], [63.64898336414, 59.9], [64.314417744917, 59.9], [64.979852125693, 59.9], [65.645286506469, 59.9], [66.310720887246, 59.9], [66.976155268022, 59.9], [67.641589648799, 59.9], [68.307024029575, 59.9], [68.972458410351, 59.9], [69.637892791128, 59.9], [70.303327171904, 59.9], [70.96876155268, 59.9], [71.634195933457, 59.9], [72.299630314233, 59.9], [72.965064695009, 59.9], [73.630499075786, 59.9], [74.295933456562, 59.9], [74.961367837338, 59.9], [75.626802218115, 59.9], [76.292236598891, 59.9], [76.957670979667, 59.9], [77.623105360444, 59.9], [78.28853974122, 59.9], [78.953974121996, 59.9], [79.619408502773, 59.9], [80.284842883549, 59.9], [80.950277264325, 59.9], [81.615711645102, 59.9], [82.281146025878, 59.9], [82.946580406654, 59.9], [83.612014787431, 59.9], [84.277449168207, 59.9], [84.942883548984, 59.9], [85.60831792976, 59.9], [86.273752310536, 59.9], [86.939186691313, 59.9], [87.604621072089, 59.9], [88.270055452865, 59.9], [88.935489833642, 59.9], [89.600924214418, 59.9], [90.266358595194, 59.9], [90.931792975971, 59.9], [91.597227356747, 59.9], [92.262661737523, 59.9], [92.9280961183, 59.9], [93.593530499076, 59.9], [94.258964879852, 59.9], [94.924399260629, 59.9], [95.589833641405, 59.9], [96.255268022181, 59.9], [96.920702402958, 59.9], [97.586136783734, 59.9], [98.25157116451, 59.9], [98.917005545287, 59.9], [99.582439926063, 59.9], [100.24787430684, 59.9], [100.91330868762, 59.9], [101.57874306839, 59.9], [102.24417744917, 59.9], [102.90961182994, 59.9], [103.57504621072, 59.9], [104.2404805915, 59.9], [104.90591497227, 59.9], [105.57134935305, 59.9], [106.23678373383, 59.9], [106.9022181146, 59.9], [107.56765249538, 59.9], [108.23308687616, 59.9], [108.89852125693, 59.9], [109.56395563771, 59.9], [110.22939001848, 59.9], [110.89482439926, 59.9], [111.56025878004, 59.9], [112.22569316081, 59.9], [112.89112754159, 59.9], [113.55656192237, 59.9], [114.22199630314, 59.9], [114.88743068392, 59.9], [115.5528650647, 59.9], [116.21829944547, 59.9], [116.88373382625, 59.9], [117.54916820702, 59.9], [118.2146025878, 59.9], [118.88003696858, 59.9], [119.54547134935, 59.9], [120.21090573013, 59.9], [120.87634011091, 59.9], [121.54177449168, 59.9], [122.20720887246, 59.9], [122.87264325324, 59.9], [123.53807763401, 59.9], [124.20351201479, 59.9], [124.86894639556, 59.9], [125.53438077634, 59.9], [126.19981515712, 59.9], [126.86524953789, 59.9], [127.53068391867, 59.9], [128.19611829945, 59.9], [128.86155268022, 59.9], [129.526987061, 59.9], [130.19242144178, 59.9], [130.85785582255, 59.9], [131.52329020333, 59.9], [132.1887245841, 59.9], [132.85415896488, 59.9], [133.51959334566, 59.9], [134.18502772643, 59.9], [134.85046210721, 59.9], [135.51589648799, 59.9], [136.18133086876, 59.9], [136.84676524954, 59.9], [137.51219963031, 59.9], [138.17763401109, 59.9], [138.84306839187, 59.9], [139.50850277264, 59.9], [140.17393715342, 59.9], [140.8393715342, 59.9], [141.50480591497, 59.9], [142.17024029575, 59.9], [142.83567467653, 59.9], [143.5011090573, 59.9], [144.16654343808, 59.9], [144.83197781885, 59.9], [145.49741219963, 59.9], [146.16284658041, 59.9], [146.82828096118, 59.9], [147.49371534196, 59.9], [148.15914972274, 59.9], [148.82458410351, 59.9], [149.49001848429, 59.9], [150.15545286507, 59.9], [150.82088724584, 59.9], [151.48632162662, 59.9], [152.15175600739, 59.9], [152.81719038817, 59.9], [153.48262476895, 59.9], [154.14805914972, 59.9], [154.8134935305, 59.9], [155.47892791128, 59.9], [156.14436229205, 59.9], [156.80979667283, 59.9], [157.4752310536, 59.9], [158.14066543438, 59.9], [158.80609981516, 59.9], [159.47153419593, 59.9], [160.13696857671, 59.9], [160.80240295749, 59.9], [161.46783733826, 59.9], [162.13327171904, 59.9], [162.79870609982, 59.9], [163.46414048059, 59.9], [164.12957486137, 59.9], [164.79500924214, 59.9], [165.46044362292, 59.9], [166.1258780037, 59.9], [166.79131238447, 59.9], [167.45674676525, 59.9], [168.12218114603, 59.9], [168.7876155268, 59.9], [169.45304990758, 59.9], [170.11848428836, 59.9], [170.78391866913, 59.9], [171.44935304991, 59.9], [172.11478743068, 59.9], [172.78022181146, 59.9], [173.44565619224, 59.9], [174.11109057301, 59.9], [174.77652495379, 59.9], [175.44195933457, 59.9], [176.10739371534, 59.9], [176.77282809612, 59.9], [177.43826247689, 59.9], [178.10369685767, 59.9], [178.76913123845, 59.9], [179.43456561922, 59.9], [180.1, 59.9], [180.1, 60.22967032967], [180.1, 60.559340659341], [180.1, 60.889010989011], [180.1, 61.218681318681], [180.1, 61.548351648352], [180.1, 61.878021978022], [180.1, 62.207692307692], [180.1, 62.537362637363], [180.1, 62.867032967033], [180.1, 63.196703296703], [180.1, 63.526373626374], [180.1, 63.856043956044], [180.1, 64.185714285714], [180.1, 64.515384615385], [180.1, 64.845054945055], [180.1, 65.174725274725], [180.1, 65.504395604396], [180.1, 65.834065934066], [180.1, 66.163736263736], [180.1, 66.493406593407], [180.1, 66.823076923077], [180.1, 67.152747252747], [180.1, 67.482417582418], [180.1, 67.812087912088], [180.1, 68.141758241758], [180.1, 68.471428571429], [180.1, 68.801098901099], [180.1, 69.130769230769], [180.1, 69.46043956044], [180.1, 69.79010989011], [180.1, 70.11978021978], [180.1, 70.449450549451], [180.1, 70.779120879121], [180.1, 71.108791208791], [180.1, 71.438461538461], [180.1, 71.768131868132], [180.1, 72.097802197802], [180.1, 72.427472527472], [180.1, 72.757142857143], [180.1, 73.086813186813], [180.1, 73.416483516483], [180.1, 73.746153846154], [180.1, 74.075824175824], [180.1, 74.405494505494], [180.1, 74.735164835165], [180.1, 75.264835164835], [180.1, 75.594505494505], [180.1, 75.924175824176], [180.1, 76.253846153846], [180.1, 76.583516483516], [180.1, 76.913186813187], [180.1, 77.242857142857], [180.1, 77.572527472527], [180.1, 77.902197802198], [180.1, 78.231868131868], [180.1, 78.561538461538], [180.1, 78.891208791209], [180.1, 79.220879120879], [180.1, 79.550549450549], [180.1, 79.88021978022], [180.1, 80.20989010989], [180.1, 80.53956043956], [180.1, 80.869230769231], [180.1, 81.198901098901], [180.1, 81.528571428571], [180.1, 81.858241758242], [180.1, 82.187912087912], [180.1, 82.517582417582], [180.1, 82.847252747253], [180.1, 83.176923076923], [180.1, 83.506593406593], [180.1, 83.836263736264], [180.1, 84.165934065934], [180.1, 84.495604395604], [180.1, 84.825274725275], [180.1, 85.154945054945], [180.1, 85.484615384615], [180.1, 85.814285714286], [180.1, 86.143956043956], [180.1, 86.473626373626], [180.1, 86.803296703297], [180.1, 87.132967032967], [180.1, 87.462637362637], [180.1, 87.792307692308], [180.1, 88.121978021978], [180.1, 88.451648351648], [180.1, 88.781318681319], [180.1, 89.110989010989], [180.1, 89.440659340659], [180.1, 89.77032967033], [180.1, 90.1], [-180.1, 90.1], [-180.1, 89.77032967033], [-180.1, 89.440659340659], [-180.1, 89.110989010989], [-180.1, 88.781318681319], [-180.1, 88.451648351648], [-180.1, 88.121978021978], [-180.1, 87.792307692308], [-180.1, 87.462637362637], [-180.1, 87.132967032967], [-180.1, 86.803296703297], [-180.1, 86.473626373626], [-180.1, 86.143956043956], [-180.1, 85.814285714286], [-180.1, 85.484615384615], [-180.1, 85.154945054945], [-180.1, 84.825274725275], [-180.1, 84.495604395604], [-180.1, 84.165934065934], [-180.1, 83.836263736264], [-180.1, 83.506593406593], [-180.1, 83.176923076923], [-180.1, 82.847252747253], [-180.1, 82.517582417582], [-180.1, 82.187912087912], [-180.1, 81.858241758242], [-180.1, 81.528571428571], [-180.1, 81.198901098901], [-180.1, 80.869230769231], [-180.1, 80.53956043956], [-180.1, 80.20989010989], [-180.1, 79.88021978022], [-180.1, 79.550549450549], [-180.1, 79.220879120879], [-180.1, 78.891208791209], [-180.1, 78.561538461539], [-180.1, 78.231868131868], [-180.1, 77.902197802198], [-180.1, 77.572527472528], [-180.1, 77.242857142857], [-180.1, 76.913186813187], [-180.1, 76.583516483517], [-180.1, 76.253846153846], [-180.1, 75.924175824176], [-180.1, 75.594505494506], [-180.1, 75.264835164835], [-180.1, 74.735164835165], [-180.1, 74.405494505495], [-180.1, 74.075824175824], [-180.1, 73.746153846154], [-180.1, 73.416483516484], [-180.1, 73.086813186813], [-180.1, 72.757142857143], [-180.1, 72.427472527473], [-180.1, 72.097802197802], [-180.1, 71.768131868132], [-180.1, 71.438461538462], [-180.1, 71.108791208791], [-180.1, 70.779120879121], [-180.1, 70.449450549451], [-180.1, 70.11978021978], [-180.1, 69.79010989011], [-180.1, 69.46043956044], [-180.1, 69.130769230769], [-180.1, 68.801098901099], [-180.1, 68.471428571429], [-180.1, 68.141758241758], [-180.1, 67.812087912088], [-180.1, 67.482417582418], [-180.1, 67.152747252747], [-180.1, 66.823076923077], [-180.1, 66.493406593407], [-180.1, 66.163736263736], [-180.1, 65.834065934066], [-180.1, 65.504395604396], [-180.1, 65.174725274725], [-180.1, 64.845054945055], [-180.1, 64.515384615385], [-180.1, 64.185714285714], [-180.1, 63.856043956044], [-180.1, 63.526373626374], [-180.1, 63.196703296703], [-180.1, 62.867032967033], [-180.1, 62.537362637363], [-180.1, 62.207692307692], [-180.1, 61.878021978022], [-180.1, 61.548351648352], [-180.1, 61.218681318681], [-180.1, 60.889010989011], [-180.1, 60.559340659341], [-180.1, 60.22967032967], [-180.1, 59.9],
                ],
            ],
        ];
    }
}
