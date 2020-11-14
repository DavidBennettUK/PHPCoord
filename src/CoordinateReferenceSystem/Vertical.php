<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateReferenceSystem;

use PHPCoord\CoordinateSystem\CoordinateSystem;
use PHPCoord\Datum\Datum;

class Vertical extends CoordinateReferenceSystem
{
    /**
     * AHD (Tasmania) height
     * Extent: Australia - Tasmania mainland - onshore.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_AHD_TASMANIA_HEIGHT = 5712;

    /**
     * AHD height
     * Extent: Australia - Australian Capital Territory, New South Wales, Northern Territory, Queensland, South
     * Australia, Tasmania, Western Australia and Victoria - onshore. Christmas Island - onshore. Cocos and Keeling
     * Islands - onshore.
     * Scope: Cadastre, engineering surveying applications over distances up to 10km.
     * Appropriate for cadastral and local engineering survey including construction or mining. Only suitable onshore.
     * AVWS height (CRS code 9458) is more accurate than AHD height for applications over distances greater than 10 km
     * and also extends offshore.
     */
    public const EPSG_AHD_HEIGHT = 5711;

    /**
     * AIOC95 depth
     * Extent: Azerbaijan - Caspian offshore and onshore Sangachal terminal.
     * Scope: Oil and gas exploration and production.
     * Also used by AIOC and BP as a height system for engineering survey at Sangachal terminal (see CRS code 5797).
     * AIOC95 datum is 1.7m above Caspian datum and 26.3m below Baltic datum.
     */
    public const EPSG_AIOC95_DEPTH = 5734;

    /**
     * AIOC95 height
     * Extent: Azerbaijan - Caspian offshore and onshore Sangachal terminal.
     * Scope: Oil and gas exploration and production.
     * AIOC95 datum is 1.7m above Caspian datum and 26.3m below Baltic datum. Also used by AIOC and BP as the depth
     * system for all offshore Azerbaijan activities (see CRS code 5734).
     */
    public const EPSG_AIOC95_HEIGHT = 5797;

    /**
     * ASVD02 height
     * Extent: American Samoa - Tutuila island.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces Tutuila 1962 height (CRS code 6638).
     */
    public const EPSG_ASVD02_HEIGHT = 6643;

    /**
     * AVWS height
     * Extent: Australia including Lord Howe Island, Macquarie Islands, Ashmore and Cartier Islands, Christmas Island,
     * Cocos (Keeling) Islands, Norfolk Island. All onshore and offshore.
     * Scope: Geodesy, hydrography, transfer of accurate heights over distances greater than 10km.
     * For cadastral and local engineering applications see AHD height (CRS code 5711). AVWS is more accurate than AHD
     * for applications over distances greater than 10 km.
     */
    public const EPSG_AVWS_HEIGHT = 9458;

    /**
     * Alicante height
     * Extent: Gibraltar - onshore; Spain - mainland onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_ALICANTE_HEIGHT = 5782;

    /**
     * Antalya height
     * Extent: Turkey - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_ANTALYA_HEIGHT = 5775;

    /**
     * Auckland 1946 height
     * Extent: New Zealand - North Island - Auckland vertical CRS area.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_AUCKLAND_1946_HEIGHT = 5759;

    /**
     * BI height
     * Extent: United Kingdom (UK) - offshore to boundary of UKCS within 49°45'N to 61°N and 9°W to 2°E; onshore
     * Great Britain (England, Wales and Scotland) and Northern Ireland. Ireland onshore. Isle of Man onshore.
     * Scope: Spatial referencing.
     */
    public const EPSG_BI_HEIGHT = 9451;

    /**
     * Baltic 1957 depth
     * Extent: Czechia; Slovakia.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_BALTIC_1957_DEPTH = 8358;

    /**
     * Baltic 1957 height
     * Extent: Czechia; Slovakia.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_BALTIC_1957_HEIGHT = 8357;

    /**
     * Baltic 1977 depth
     * Extent: Armenia; Azerbaijan; Belarus; Estonia - onshore; Georgia - onshore; Kazakhstan; Kyrgyzstan; Latvia -
     * onshore; Lithuania - onshore; Moldova; Russian Federation - onshore; Tajikistan; Turkmenistan; Ukraine -
     * onshore; Uzbekistan.
     * Scope: Oil and gas exploration and production.
     */
    public const EPSG_BALTIC_1977_DEPTH = 5612;

    /**
     * Baltic 1977 height
     * Extent: Armenia; Azerbaijan; Belarus; Estonia - onshore; Georgia - onshore; Kazakhstan; Kyrgyzstan; Latvia -
     * onshore; Lithuania - onshore; Moldova; Russian Federation - onshore; Tajikistan; Turkmenistan; Ukraine -
     * onshore; Uzbekistan.
     * Scope: Geodesy, engineering survey.
     * The adjustment also included the Czech and Slovak Republics but not adopted there, with earlier 1957 adjustment
     * remaining in use: see CRS code 8357.
     */
    public const EPSG_BALTIC_1977_HEIGHT = 5705;

    /**
     * Baltic 1982 height
     * Extent: Bulgaria - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_BALTIC_1982_HEIGHT = 5786;

    /**
     * Bandar Abbas height
     * Extent: Iran - onshore.
     * Scope: Geodesy, engineering survey.
     * Replaces Fao height (CRS code 5751) for national map agency work in Iran. At time of record creation NIOC data
     * still generally referenced to Fao.
     */
    public const EPSG_BANDAR_ABBAS_HEIGHT = 5752;

    /**
     * Belfast height
     * Extent: United Kingdom (UK) - Northern Ireland (Ulster) - onshore.
     * Scope: Topographic mapping (large scale).
     * Malin Head height (CRS code 5731) used for medium and small scale topographic mapping.
     */
    public const EPSG_BELFAST_HEIGHT = 5732;

    /**
     * Black Sea depth
     * Extent: Georgia - onshore.
     * Scope: Hydrography and nautical charting.
     * Black Sea datum is 0.4m below Baltic datum.
     */
    public const EPSG_BLACK_SEA_DEPTH = 5336;

    /**
     * Black Sea height
     * Extent: Georgia - onshore.
     * Scope: Topographic mapping.
     * Black Sea datum is 0.4m below Baltic datum.
     */
    public const EPSG_BLACK_SEA_HEIGHT = 5735;

    /**
     * Bluff 1955 height
     * Extent: New Zealand - South Island - Bluff vertical CRS area.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_BLUFF_1955_HEIGHT = 5760;

    /**
     * Bora Bora SAU 2001 height
     * Extent: French Polynesia - Society Islands - Bora Bora.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Part of NGPF (CRS code 5600).
     */
    public const EPSG_BORA_BORA_SAU_2001_HEIGHT = 5607;

    /**
     * CBVD61 height (ft)
     * Extent: Cayman Islands - Cayman Brac.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_CBVD61_HEIGHT_FT = 6132;

    /**
     * CGVD2013(CGG2013) height
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces CGVD28 height (CRS code 5713). CGVD2013(CGG2013) height is realized by geoid model CGG2013 (CT code
     * 9246). Replaced by CGVD2013(CGG2013a) height (CRS code 9245).
     */
    public const EPSG_CGVD2013_CGG2013_HEIGHT = 6647;

    /**
     * CGVD2013(CGG2013a) height
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Scope: Geodesy, topographic mapping.
     * Replaces CGVD2013(CGG2013) height (CRS code 6647). CGVD2013(CGG2013a) height is realized by Canadian gravimetric
     * geoid model CGG2013a (CT code 9247).
     */
    public const EPSG_CGVD2013_CGG2013A_HEIGHT = 9245;

    /**
     * CGVD28 height
     * Extent: Canada - onshore - Alberta; British Columbia; Manitoba south of 57°N; New Brunswick; Northwest
     * Territories south west of a line between 60°N, 110°W and the coast at 132°W; Nova Scotia; Ontario south of
     * 52°N; Prince Edward Island; Quebec - mainland west of 66°W and south of 55°N; Saskatchewan south of 55°N;
     * Yukon.
     * Scope: Geodesy, engineering survey.
     * From November 2013 replaced by CGVD2013 height (CRS code 6647).
     */
    public const EPSG_CGVD28_HEIGHT = 5713;

    /**
     * Cais da Figueirinha - Angra do Heroismo height
     * Extent: Portugal - central Azores - Terceira island onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_CAIS_DA_FIGUEIRINHA_ANGRA_DO_HEROISMO_HEIGHT = 6184;

    /**
     * Cais da Madalena height
     * Extent: Portugal - central Azores - Pico island onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_CAIS_DA_MADALENA_HEIGHT = 6182;

    /**
     * Cais da Pontinha - Funchal height
     * Extent: Portugal - Madeira and Desertas islands - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_CAIS_DA_PONTINHA_FUNCHAL_HEIGHT = 6178;

    /**
     * Cais da Vila - Porto Santo height
     * Extent: Portugal - Porto Santo island (Madeira archipelago) onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_CAIS_DA_VILA_PORTO_SANTO_HEIGHT = 6179;

    /**
     * Cais da Vila do Porto height
     * Extent: Portugal - eastern Azores onshore - Santa Maria, Formigas.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_CAIS_DA_VILA_DO_PORTO_HEIGHT = 6186;

    /**
     * Cais das Velas height
     * Extent: Portugal - central Azores - Sao Jorge island onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_CAIS_DAS_VELAS_HEIGHT = 6180;

    /**
     * Cascais height
     * Extent: Portugal - mainland - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_CASCAIS_HEIGHT = 5780;

    /**
     * Caspian depth
     * Extent: Azerbaijan - offshore; Kazakhstan - offshore; Russian Federation - Caspian Sea; Turkmenistan - offshore.
     * Scope: Hydrography and nautical charting.
     * Caspian Sea water levels are now offset appreciably from this datum.
     */
    public const EPSG_CASPIAN_DEPTH = 5706;

    /**
     * Caspian height
     * Extent: Azerbaijan - offshore; Kazakhstan - offshore; Russian Federation - Caspian Sea; Turkmenistan - offshore.
     * Scope: Oil and gas exploration and production.
     * Caspian Sea water levels are now offset appreciably from this datum.
     */
    public const EPSG_CASPIAN_HEIGHT = 5611;

    /**
     * Ceuta 2 height
     * Extent: Spain - Ceuta onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_CEUTA_2_HEIGHT = 9402;

    /**
     * Chatham Island 1959 height
     * Extent: New Zealand - Chatham Island - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_CHATHAM_ISLAND_1959_HEIGHT = 5771;

    /**
     * Constanta height
     * Extent: Romania - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_CONSTANTA_HEIGHT = 5781;

    /**
     * DACR52 height
     * Extent: Costa Rica - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_DACR52_HEIGHT = 8911;

    /**
     * DHHN12 height
     * Extent: Germany - onshore - states of Baden-Wurtemberg, Bayern, Berlin, Brandenburg, Bremen, Hamburg, Hessen,
     * Mecklenburg-Vorpommern, Niedersachsen, Nordrhein-Westfalen, Rheinland-Pfalz, Saarland, Sachsen, Sachsen-Anhalt,
     * Schleswig-Holstein, Thuringen.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaced by SNN56 and then SNN76 in East Germany and by DHHN85 in West Germany.
     */
    public const EPSG_DHHN12_HEIGHT = 7699;

    /**
     * DHHN2016 height
     * Extent: Germany - onshore - states of Baden-Wurtemberg, Bayern, Berlin, Brandenburg, Bremen, Hamburg, Hessen,
     * Mecklenburg-Vorpommern, Niedersachsen, Nordrhein-Westfalen, Rheinland-Pfalz, Saarland, Sachsen, Sachsen-Anhalt,
     * Schleswig-Holstein, Thuringen.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces DHHN92 height (CRS code 5783).
     */
    public const EPSG_DHHN2016_HEIGHT = 7837;

    /**
     * DHHN85 height
     * Extent: Germany - states of former West Germany onshore - Baden-Wurtemberg, Bayern, Bremen, Hamburg, Hessen,
     * Niedersachsen, Nordrhein-Westfalen, Rheinland-Pfalz, Saarland, Schleswig-Holstein.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaced by DNNH92 height (CRS code 5783).
     */
    public const EPSG_DHHN85_HEIGHT = 5784;

    /**
     * DHHN92 height
     * Extent: Germany - onshore - states of Baden-Wurtemberg, Bayern, Berlin, Brandenburg, Bremen, Hamburg, Hessen,
     * Mecklenburg-Vorpommern, Niedersachsen, Nordrhein-Westfalen, Rheinland-Pfalz, Saarland, Sachsen, Sachsen-Anhalt,
     * Schleswig-Holstein, Thuringen.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces SNN76 height (CRS code 5785) and DHHN85 height (CRS code 5784). Replaced by DHHN2016 height (CRS code
     * 7837).
     */
    public const EPSG_DHHN92_HEIGHT = 5783;

    /**
     * DNN height
     * Extent: Denmark - onshore.
     * Scope: Engineering survey, topographic mapping.
     * Replaced by DVR90 height (CRS code 5799).
     */
    public const EPSG_DNN_HEIGHT = 5733;

    /**
     * DVR90 height
     * Extent: Denmark - onshore.
     * Scope: Engineering survey, topographic mapping.
     * Replaces Dansk Normal Null height (CRS code 5733).
     */
    public const EPSG_DVR90_HEIGHT = 5799;

    /**
     * Danger 1950 height
     * Extent: St Pierre and Miquelon - onshore.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_DANGER_1950_HEIGHT = 5792;

    /**
     * Douglas height
     * Extent: Isle of Man - onshore.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_DOUGLAS_HEIGHT = 5750;

    /**
     * Dunedin 1958 height
     * Extent: New Zealand - South Island - between approximately 44°S and 46°S - Dunedin vertical CRS area.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_DUNEDIN_1958_HEIGHT = 5761;

    /**
     * Dunedin-Bluff 1960 height
     * Extent: New Zealand - South Island - Dunedin-Bluff vertical CRS area.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_DUNEDIN_BLUFF_1960_HEIGHT = 4458;

    /**
     * Durres height
     * Extent: Albania - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_DURRES_HEIGHT = 5777;

    /**
     * EGM2008 height
     * Extent: World.
     * Scope: Geodesy.
     * Zero-height surface resulting from the application of the EGM2008 geoid model to the WGS 84 ellipsoid. Replaces
     * EGM96 height (CRS code 5773).
     */
    public const EPSG_EGM2008_HEIGHT = 3855;

    /**
     * EGM84 height
     * Extent: World.
     * Scope: Geodesy.
     * Zero-height surface resulting from the application of the EGM84 geoid model to the WGS 84 ellipsoid. Replaced by
     * EGM96 height (CRS code 5773).
     */
    public const EPSG_EGM84_HEIGHT = 5798;

    /**
     * EGM96 height
     * Extent: World.
     * Scope: Geodesy.
     * Zero-height surface resulting from the application of the EGM96 geoid model to the WGS 84 ellipsoid. Replaces
     * EGM84 height (CRS code 5798). Replaced by EGM2008 height (CRS code 3855).
     */
    public const EPSG_EGM96_HEIGHT = 5773;

    /**
     * EOMA 1980 height
     * Extent: Hungary.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_EOMA_1980_HEIGHT = 5787;

    /**
     * EVRF2000 Austria height
     * Extent: Austria.
     * Scope: Geodesy.
     * Austria-specific version of EVRF using orthometric heights instead of the Normal heights used in EVRF2000 (CRS
     * code 5730). Used for scientific purposes. See GHA height (CRS code 5778) for cadastral and other land survey
     * purposes.
     */
    public const EPSG_EVRF2000_AUSTRIA_HEIGHT = 9274;

    /**
     * EVRF2000 height
     * Extent: Europe - onshore - Andorra; Austria; Belgium; Bosnia and Herzegovina; Croatia; Czechia; Denmark;
     * Estonia; Finland; France - mainland; Germany; Gibraltar; Hungary; Italy - mainland and Sicily; Latvia;
     * Liechtenstein; Lithuania; Luxembourg; Netherlands; Norway; Poland; Portugal - mainland; Romania; San Marino;
     * Slovakia; Slovenia; Spain - mainland; Sweden; Switzerland; United Kingdom (UK) - Great Britain mainland; Vatican
     * City State.
     * Scope: Pan-European spatial positioning.
     * Uses Normal heights. Replaced by EVRF2007 height (CRS code 5621). In Austria, orthometric heights used instead -
     * see CRS code 9274.
     */
    public const EPSG_EVRF2000_HEIGHT = 5730;

    /**
     * EVRF2007 height
     * Extent: Europe - onshore - Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria; Croatia; Czechia;
     * Denmark; Estonia; Finland; France - mainland; Germany; Gibraltar, Hungary; Italy - mainland and Sicily; Latvia;
     * Liechtenstein; Lithuania; Luxembourg; Netherlands; Norway; Poland; Portugal - mainland; Romania; San Marino;
     * Slovakia; Slovenia; Spain - mainland; Sweden; Switzerland; United Kingdom (UK) - Great Britain mainland; Vatican
     * City State.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Uses Normal heights. Replaces EVRF2000 height (CRS code 5730). Replaced by EVRF2019 height (CRS code 9389).
     */
    public const EPSG_EVRF2007_HEIGHT = 5621;

    /**
     * EVRF2019 height
     * Extent: Europe - onshore - Andorra; Austria; Belarus; Belgium; Bosnia and Herzegovina; Bulgaria; Croatia;
     * Czechia; Denmark; Estonia; Finland; France - mainland; Germany; Gibraltar, Hungary; Italy - mainland and Sicily;
     * Latvia; Liechtenstein; Lithuania; Luxembourg; Netherlands; North Macedonia; Norway; Poland; Portugal - mainland;
     * Romania; Russia – west of approximately 60°E; San Marino; Slovakia; Slovenia; Spain - mainland; Sweden;
     * Switzerland; United Kingdom (UK) - Great Britain mainland; Ukraine; Vatican City State.
     * Scope: Geodesy (gravity).
     * Replaces EVRF2007 height (CRS code 5621). Uses Normal heights. Zero-tide solution. See EVRF2019 mean-tide height
     * (CRS code 9390) for solution more appropriate for oceanography and GNSS-related activities.
     */
    public const EPSG_EVRF2019_HEIGHT = 9389;

    /**
     * EVRF2019 mean-tide height
     * Extent: Europe - onshore - Andorra; Austria; Belarus; Belgium; Bosnia and Herzegovina; Bulgaria; Croatia;
     * Czechia; Denmark; Estonia; Finland; France - mainland; Germany; Gibraltar, Hungary; Italy - mainland and Sicily;
     * Latvia; Liechtenstein; Lithuania; Luxembourg; Netherlands; North Macedonia; Norway; Poland; Portugal - mainland;
     * Romania; Russia – west of approximately 60°E; San Marino; Slovakia; Slovenia; Spain - mainland; Sweden;
     * Switzerland; United Kingdom (UK) - Great Britain mainland; Ukraine; Vatican City State.
     * Scope: Geodesy (GNSS), oceanography.
     * Uses Normal heights. Mean-tide solution. See EVRF2019 height (CRS code 9389) for zero-tide solution more
     * appropriate for gravity-related activities.
     */
    public const EPSG_EVRF2019_MEAN_TIDE_HEIGHT = 9390;

    /**
     * El Hierro height
     * Extent: Spain - Canary Islands - El Hierro onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_EL_HIERRO_HEIGHT = 9401;

    /**
     * FCSVR10 height
     * Extent: Fehmarnbelt area of Denmark and Germany.
     * Scope: Engineering survey and construction for Fehmarnbelt tunnel.
     */
    public const EPSG_FCSVR10_HEIGHT = 5597;

    /**
     * FVR09 height
     * Extent: Faroe Islands - onshore.
     * Scope: Engineering survey.
     * Introduced in 2010.
     */
    public const EPSG_FVR09_HEIGHT = 5317;

    /**
     * Fahud HD height
     * Extent: Oman - mainland onshore.
     * Scope: Geodesy, engineering survey.
     * Replaced by PHD93 height (CRS code 5724) from 1993.
     */
    public const EPSG_FAHUD_HD_HEIGHT = 5725;

    /**
     * Fair Isle height
     * Extent: United Kingdom (UK) - Great Britain - Scotland - Fair Isle onshore.
     * Scope: Geodesy, engineering survey.
     * Replaced by ODN (Offshore) height (CRS code 7707) in 2016.
     */
    public const EPSG_FAIR_ISLE_HEIGHT = 5741;

    /**
     * Famagusta 1960 height
     * Extent: Cyprus - onshore.
     * Scope: Engineering survey, topographic mapping.
     */
    public const EPSG_FAMAGUSTA_1960_HEIGHT = 7446;

    /**
     * Fao 1979 height
     * Extent: Iraq - onshore.
     * Scope: Geodesy, engineering survey.
     * Replaces Fao height (CRS code 5751) for national map agency work in Iraq. At time of record creation some
     * irrigation project data still referenced to Fao. Usage in oil industry is uncertain.
     */
    public const EPSG_FAO_1979_HEIGHT = 3886;

    /**
     * Fao height
     * Extent: Iraq - onshore southeast; Iran - onshore northern Gulf coast and west bordering southeast Iraq.
     * Scope: Oil and gas exploration and production.
     * Replaced by Bandar Abbas (CRS code 5752) in Iran and Fao 1979 (code 3886) in Iraq. At time of record creation
     * NIOC data in Ahwaz area of Iran and some irrigation project data in Iraq still usually referenced to Fao. Usage
     * in Iraqi oil industry uncertain.
     */
    public const EPSG_FAO_HEIGHT = 5751;

    /**
     * Flannan Isles height
     * Extent: United Kingdom (UK) - Great Britain - Scotland - Flannan Isles onshore.
     * Scope: Geodesy, engineering survey.
     * Replaced by ODN (Offshore) height (CRS code 7707) in 2016.
     */
    public const EPSG_FLANNAN_ISLES_HEIGHT = 5748;

    /**
     * Foula height
     * Extent: United Kingdom (UK) - Great Britain - Scotland - Foula onshore.
     * Scope: Geodesy, engineering survey.
     * Replaced by ODN (Offshore) height (CRS code 7707) in 2016.
     */
    public const EPSG_FOULA_HEIGHT = 5743;

    /**
     * Fuerteventura height
     * Extent: Spain - Canary Islands - Fuerteventura onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_FUERTEVENTURA_HEIGHT = 9396;

    /**
     * GCVD54 height (ft)
     * Extent: Cayman Islands - Grand Cayman.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_GCVD54_HEIGHT_FT = 6130;

    /**
     * GHA height
     * Extent: Austria.
     * Scope: Cadastre, engineering survey, topographic mapping.
     * For scientific purposes see EVRF2000 Austria height (CRS code 9274).
     */
    public const EPSG_GHA_HEIGHT = 5778;

    /**
     * GUVD04 height
     * Extent: Guam - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces Guam 1963 height (CRS code 6639).
     */
    public const EPSG_GUVD04_HEIGHT = 6644;

    /**
     * GVR2000 height
     * Extent: Greenland - onshore and offshore between 59°N and 84°N and west of 10°W.
     * Scope: Topographic mapping.
     * Replaced by GVR2016 height (CRS code 8267). GVR2000 is realized by gravimetric geoid model 2000 (transformation
     * code 8268) applied to GR96 (CRS code 4909).
     */
    public const EPSG_GVR2000_HEIGHT = 8266;

    /**
     * GVR2016 height
     * Extent: Greenland - onshore and offshore between 58°N and 85°N and west of 7°W.
     * Scope: Topographic mapping.
     * Replaces GVR2000 height (CRS code 8266). GVR2016 is realized by gravimetric geoid model 2016 (transformation
     * code 8269) applied to GR96 (CRS code 4909).
     */
    public const EPSG_GVR2016_HEIGHT = 8267;

    /**
     * Genoa height
     * Extent: Italy - mainland (including San Marino and Vatican City State) and Sicily.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_GENOA_HEIGHT = 5214;

    /**
     * Gisborne 1926 height
     * Extent: New Zealand - North Island - Gisborne vertical CRS area.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_GISBORNE_1926_HEIGHT = 5762;

    /**
     * Gran Canaria height
     * Extent: Spain - Canary Islands - Gran Canaria onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_GRAN_CANARIA_HEIGHT = 9397;

    /**
     * Guadeloupe 1951 height
     * Extent: Guadeloupe - onshore - Basse-Terre and Grande-Terre.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaced by Guadeloupe 1988 height (CRS code 5757).
     */
    public const EPSG_GUADELOUPE_1951_HEIGHT = 5795;

    /**
     * Guadeloupe 1988 height
     * Extent: Guadeloupe - onshore - Basse-Terre and Grande-Terre.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces Guadeloupe 1951 height (CRS code 5795).
     */
    public const EPSG_GUADELOUPE_1988_HEIGHT = 5757;

    /**
     * Guam 1963 height
     * Extent: Guam - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaced by GUVD04 height (CRS code 6644).
     */
    public const EPSG_GUAM_1963_HEIGHT = 6639;

    /**
     * HAT height
     * Extent: World.
     * Scope: Hydrography and nautical charting.
     * Not specific to any location or epoch.
     */
    public const EPSG_HAT_HEIGHT = 5872;

    /**
     * HHWLT height
     * Extent: World.
     * Scope: Hydrography and nautical charting.
     * Not specific to any location or epoch.
     */
    public const EPSG_HHWLT_HEIGHT = 5871;

    /**
     * HKCD depth
     * Extent: China - Hong Kong - offshore.
     * Scope: Hydrography and nautical charting.
     * Chart datum is 0.15 metres below Hong Kong Principal Datum (CRS code 5738) and 1.38m below MSL at Quarry Bay.
     */
    public const EPSG_HKCD_DEPTH = 5739;

    /**
     * HKPD depth
     * Extent: China - Hong Kong - onshore.
     * Scope: Intermediate stage in transformations - not used otherwise.
     */
    public const EPSG_HKPD_DEPTH = 7976;

    /**
     * HKPD height
     * Extent: China - Hong Kong - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_HKPD_HEIGHT = 5738;

    /**
     * HS2-VRF height
     * Extent: UK - HS2 phases 1 and 2a railway corridor from London to Birmingham, Lichfield and Crewe.
     * Scope: Engineering survey for HS2 project phases 1 and 2a.
     * HS2-VRF height is equivalent to ODN height as historically realised through OSNet v2001 and OSGM02. After the
     * ODN realization was updated to be through OSNet v2009 and OSGM15, HS2-VRF height was introduced for backward
     * consistency.
     */
    public const EPSG_HS2_VRF_HEIGHT = 9303;

    /**
     * HVRS71 height
     * Extent: Croatia - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces Trieste height (CRS code 5195).
     */
    public const EPSG_HVRS71_HEIGHT = 5610;

    /**
     * Ha Tien 1960 height
     * Extent: Cambodia - mainland onshore; Vietnam - mainland onshore.
     * Scope: Geodesy, engineering survey.
     * In Vietnam replaced by Hon Dau height (CRS code 5727) from 1992.
     */
    public const EPSG_HA_TIEN_1960_HEIGHT = 5726;

    /**
     * High Water height
     * Extent: World.
     * Scope: Hydrography and nautical charting.
     * Not specific to any location or epoch.
     */
    public const EPSG_HIGH_WATER_HEIGHT = 5874;

    /**
     * Hon Dau 1992 height
     * Extent: Vietnam - mainland onshore.
     * Scope: Geodesy, engineering survey.
     * In Vietnam replaces Ha Tien height (CRS code 5726) from 1992.
     */
    public const EPSG_HON_DAU_1992_HEIGHT = 5727;

    /**
     * Horta height
     * Extent: Portugal - central Azores - Faial island onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_HORTA_HEIGHT = 6181;

    /**
     * Huahine SAU 2001 height
     * Extent: French Polynesia - Society Islands - Huahine.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Part of NGPF (CRS code 5600).
     */
    public const EPSG_HUAHINE_SAU_2001_HEIGHT = 5605;

    /**
     * IGLD 1955 height
     * Extent: Canada and United States (USA) - Great Lakes basin and St Lawrence Seaway.
     * Scope: Hydrology.
     * Replaces several earlier systems. Replaced by IGLD 1985 (CRS code 5609).
     */
    public const EPSG_IGLD_1955_HEIGHT = 5608;

    /**
     * IGLD 1985 height
     * Extent: Canada and United States (USA) - Great Lakes basin and St Lawrence Seaway.
     * Scope: Hydrology.
     * Replaces IGLD 1955 (CRS code 5608).
     */
    public const EPSG_IGLD_1985_HEIGHT = 5609;

    /**
     * IGN 1966 height
     * Extent: French Polynesia - Society Islands - Tahiti.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Part of NGPF (CRS code 5600).
     */
    public const EPSG_IGN_1966_HEIGHT = 5601;

    /**
     * IGN 1988 LS height
     * Extent: Guadeloupe - onshore - Les Saintes.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_IGN_1988_LS_HEIGHT = 5616;

    /**
     * IGN 1988 MG height
     * Extent: Guadeloupe - onshore - Marie-Galante.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_IGN_1988_MG_HEIGHT = 5617;

    /**
     * IGN 1988 SB height
     * Extent: Guadeloupe - onshore - St Barthelemy island.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_IGN_1988_SB_HEIGHT = 5619;

    /**
     * IGN 1988 SM height
     * Extent: Guadeloupe - onshore - St Martin island.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_IGN_1988_SM_HEIGHT = 5620;

    /**
     * IGN 1992 LD height
     * Extent: Guadeloupe - onshore - La Desirade.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaced by IGN 2008 LD height (CRS code 9130).
     */
    public const EPSG_IGN_1992_LD_HEIGHT = 5618;

    /**
     * IGN 2008 LD height
     * Extent: Guadeloupe - onshore - La Desirade.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces IGN 1992 LD height (CRS code 5618).
     */
    public const EPSG_IGN_2008_LD_HEIGHT = 9130;

    /**
     * INAGeoid2020 height
     * Extent: Indonesia - onshore and offshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Physical height component of national vertical control network (JKVN). Orthometric heights.
     */
    public const EPSG_INAGEOID2020_HEIGHT = 9471;

    /**
     * ISH2004 height
     * Extent: Iceland - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * National system replacing older local systems from March 2011.
     */
    public const EPSG_ISH2004_HEIGHT = 8089;

    /**
     * ISLW depth
     * Extent: World.
     * Scope: Hydrography and nautical charting.
     * Not specific to any location or epoch.
     */
    public const EPSG_ISLW_DEPTH = 5863;

    /**
     * Ibiza height
     * Extent: Spain - Balearic Islands - Ibiza and Formentera - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_IBIZA_HEIGHT = 9394;

    /**
     * Incheon height
     * Extent: Republic of Korea (South Korea) - mainland onshore.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_INCHEON_HEIGHT = 5193;

    /**
     * Instantaneous Water Level depth
     * Extent: World.
     * Scope: Hydrography, drilling, marine geophysics.
     * Depth relative to instantaneous water level uncorrected for tide. Not specific to any location or epoch.
     */
    public const EPSG_INSTANTANEOUS_WATER_LEVEL_DEPTH = 5831;

    /**
     * Instantaneous Water Level height
     * Extent: World.
     * Scope: Hydrography, drilling, marine geophysics.
     * Height relative to instantaneous water level uncorrected for tide. Not specific to any location or epoch.
     */
    public const EPSG_INSTANTANEOUS_WATER_LEVEL_HEIGHT = 5829;

    /**
     * JGD2000 (vertical) height
     * Extent: Japan - onshore mainland - Hokkaido, Honshu, Shikoku, Kyushu.
     * Scope: Geodesy, engineering survey.
     * Replaced JSLD69 and JSLD72 (CRS codes 5723 and 6693) from April 2002. Replaced by JGD2011 (vertical) (CRS code
     * 6695) with effect from 21st October 2011.
     */
    public const EPSG_JGD2000_VERTICAL_HEIGHT = 6694;

    /**
     * JGD2011 (vertical) height
     * Extent: Japan - onshore mainland - Hokkaido, Honshu, Shikoku, Kyushu.
     * Scope: Geodesy, engineering survey.
     * Replaces JGD2000 (vertical) (CRS code 6694) with effect from 21st October 2011.
     */
    public const EPSG_JGD2011_VERTICAL_HEIGHT = 6695;

    /**
     * JSLD69 height
     * Extent: Japan - onshore mainland - Honshu, Shikoku, Kyushu.
     * Scope: Geodesy, engineering survey.
     * Replaces JSLD49. Replaced by JGD2000 (vertical) (CRS code 6694) with effect from April 2002.
     */
    public const EPSG_JSLD69_HEIGHT = 5723;

    /**
     * JSLD72 height
     * Extent: Japan - onshore mainland - Hokkaido.
     * Scope: Geodesy, engineering survey.
     * Replaced by JGD2000 (vertical) (CRS code 6694) with effect from April 2002.
     */
    public const EPSG_JSLD72_HEIGHT = 6693;

    /**
     * Jamestown 1971 height
     * Extent: St Helena, Ascension and Tristan da Cunha - St Helena Island - onshore.
     * Scope: Topographic mapping.
     * Replaced by SHVD2016 (CRS code 7890) from 2016.
     */
    public const EPSG_JAMESTOWN_1971_HEIGHT = 7888;

    /**
     * KOC CD height
     * Extent: Kuwait - onshore.
     * Scope: KOC survey control and facilities engineering.
     */
    public const EPSG_KOC_CD_HEIGHT = 5790;

    /**
     * KOC WD depth
     * Extent: Kuwait - onshore.
     * Scope: KOC exploration and field development subsurface work.
     * See CRS code 5614 for equivalent system in feet.
     */
    public const EPSG_KOC_WD_DEPTH = 5789;

    /**
     * KOC WD depth (ft)
     * Extent: Kuwait - onshore.
     * Scope: KOC exploration and field development subsurface work.
     * See CRS code 5789 for equivalent system in feet.
     */
    public const EPSG_KOC_WD_DEPTH_FT = 5614;

    /**
     * KOC WD height
     * Extent: Kuwait - onshore.
     * Scope: KOC exploration and field development subsurface work.
     * See CRS code 5789 for equivalent depth system.
     */
    public const EPSG_KOC_WD_HEIGHT = 7979;

    /**
     * KSA-VRF14 height
     * Extent: Saudi Arabia - onshore.
     * Scope: Geodesy, cadastre, engineering survey, topographic mapping.
     * Orthometric heights.
     */
    public const EPSG_KSA_VRF14_HEIGHT = 9335;

    /**
     * Kiunga height
     * Extent: Papua New Guinea - onshore south of 5°S and west of 144°E.
     * Scope: Engineering survey.
     * Kiunga height = WGS 84 ellipsoid height - value of geoid undulation derived by bilinear interpolation of EGM2008
     * geoid model - 3.0m = EGM2008 height - 3.0m.  See CRS code 3855 and transformation code 3858.
     */
    public const EPSG_KIUNGA_HEIGHT = 7652;

    /**
     * Kumul 34 height
     * Extent: Papua New Guinea - Papuan fold and thrust belt.
     * Scope: Engineering survey.
     * Kumul 34 height = WGS 84 ellipsoid height - value of geoid undulation derived by bilinear interpolation of EGM96
     * geoid model - 0.87m = EGM96 height - 0.87m. See CRS code 5773 and transformation code 10084.
     */
    public const EPSG_KUMUL_34_HEIGHT = 7651;

    /**
     * Kuwait PWD height
     * Extent: Kuwait - onshore.
     * Scope: Municipal spatial referencing.
     */
    public const EPSG_KUWAIT_PWD_HEIGHT = 5788;

    /**
     * LAT NL depth
     * Extent: Netherlands - offshore North Sea.
     * Scope: Hydrography and nautical charting.
     */
    public const EPSG_LAT_NL_DEPTH = 9287;

    /**
     * LAT depth
     * Extent: World.
     * Scope: Hydrography and nautical charting.
     * Not specific to any location or epoch.
     */
    public const EPSG_LAT_DEPTH = 5861;

    /**
     * LCVD61 height (ft)
     * Extent: Cayman Islands - Little Cayman.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_LCVD61_HEIGHT_FT = 6131;

    /**
     * LHN95 height
     * Extent: Liechtenstein; Switzerland.
     * Scope: Geodesy.
     * Replaces LN02 height (CRS code 5728).
     */
    public const EPSG_LHN95_HEIGHT = 5729;

    /**
     * LLWLT depth
     * Extent: World.
     * Scope: Hydrography and nautical charting.
     * Not specific to any location or epoch.
     */
    public const EPSG_LLWLT_DEPTH = 5862;

    /**
     * LN02 height
     * Extent: Liechtenstein; Switzerland.
     * Scope: Engineering survey, topographic mapping.
     * Replaced by LHN95 height (CRS code 5729).
     */
    public const EPSG_LN02_HEIGHT = 5728;

    /**
     * La Gomera height
     * Extent: Spain - Canary Islands - La Gomera onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_LA_GOMERA_HEIGHT = 9399;

    /**
     * La Palma height
     * Extent: Spain - Canary Islands - La Palma onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_LA_PALMA_HEIGHT = 9400;

    /**
     * Lagos 1955 height
     * Extent: Nigeria - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_LAGOS_1955_HEIGHT = 5796;

    /**
     * Lanzarote height
     * Extent: Spain - Canary Islands - Lanzarote onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_LANZAROTE_HEIGHT = 9395;

    /**
     * Latvia 2000 height
     * Extent: Latvia - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * In Latvia replaces Baltic 1977 system (CRS code 5705) from December 2014.
     */
    public const EPSG_LATVIA_2000_HEIGHT = 7700;

    /**
     * Lerwick height
     * Extent: United Kingdom (UK) - Great Britain - Scotland - Shetland Islands onshore.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_LERWICK_HEIGHT = 5742;

    /**
     * Low Water depth
     * Extent: World.
     * Scope: Hydrography and nautical charting.
     * Not specific to any location or epoch.
     */
    public const EPSG_LOW_WATER_DEPTH = 5873;

    /**
     * Lyttelton 1937 height
     * Extent: New Zealand - South Island - between approximately 41°20'S and 45°S - Lyttleton vertical CRS area.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_LYTTELTON_1937_HEIGHT = 5763;

    /**
     * MHHW height
     * Extent: World.
     * Scope: Hydrography and nautical charting.
     * Not specific to any location or epoch.
     */
    public const EPSG_MHHW_HEIGHT = 5869;

    /**
     * MHW height
     * Extent: World.
     * Scope: Hydrography and nautical charting.
     * Not specific to any location or epoch.
     */
    public const EPSG_MHW_HEIGHT = 5868;

    /**
     * MHWS height
     * Extent: World.
     * Scope: Hydrography and nautical charting.
     * Not specific to any location or epoch.
     */
    public const EPSG_MHWS_HEIGHT = 5870;

    /**
     * MLLW depth
     * Extent: World.
     * Scope: Hydrography and nautical charting.
     * Not specific to any location or epoch.
     */
    public const EPSG_MLLW_DEPTH = 5866;

    /**
     * MLLWS depth
     * Extent: World.
     * Scope: Hydrography and nautical charting.
     * Not specific to any location or epoch.
     */
    public const EPSG_MLLWS_DEPTH = 5864;

    /**
     * MLW depth
     * Extent: World.
     * Scope: Hydrography and nautical charting.
     * Not specific to any location or epoch.
     */
    public const EPSG_MLW_DEPTH = 5867;

    /**
     * MLWS depth
     * Extent: World.
     * Scope: Hydrography and nautical charting.
     * Not specific to any location or epoch.
     */
    public const EPSG_MLWS_DEPTH = 5865;

    /**
     * MSL NL depth
     * Extent: Netherlands - offshore North Sea.
     * Scope: Hydrography, drilling, offshore engineering.
     */
    public const EPSG_MSL_NL_DEPTH = 9288;

    /**
     * MSL depth
     * Extent: World.
     * Scope: Hydrography, drilling.
     * Not specific to any location or epoch.
     */
    public const EPSG_MSL_DEPTH = 5715;

    /**
     * MSL depth (ft)
     * Extent: World.
     * Scope: Hydrography, drilling.
     * Not specific to any location or epoch.
     */
    public const EPSG_MSL_DEPTH_FT = 8051;

    /**
     * MSL depth (ftUS)
     * Extent: United States (USA) - onshore and offshore.
     * Scope: Hydrography, drilling.
     * Not specific to any location or epoch.
     */
    public const EPSG_MSL_DEPTH_FTUS = 8053;

    /**
     * MSL height
     * Extent: World.
     * Scope: Hydrography, drilling.
     * Not specific to any location or epoch.
     */
    public const EPSG_MSL_HEIGHT = 5714;

    /**
     * MSL height (ft)
     * Extent: World.
     * Scope: Hydrography, drilling.
     * Not specific to any location or epoch.
     */
    public const EPSG_MSL_HEIGHT_FT = 8050;

    /**
     * MSL height (ftUS)
     * Extent: United States (USA) - onshore and offshore.
     * Scope: Hydrography, drilling.
     * Not specific to any location or epoch.
     */
    public const EPSG_MSL_HEIGHT_FTUS = 8052;

    /**
     * MVGC height
     * Extent: Saudi Arabia - onshore.
     * Scope: Geodesy, cadastre, engineering survey, topographic mapping.
     */
    public const EPSG_MVGC_HEIGHT = 8841;

    /**
     * Macao height
     * Extent: China - Macao - onshore and offshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_MACAO_HEIGHT = 8434;

    /**
     * Malin Head height
     * Extent: Ireland - onshore. United Kingdom (UK) - Northern Ireland (Ulster) - onshore.
     * Scope: Topographic mapping.
     * Topographic mapping at all scales in Republic and medium and small scales in Northern Ireland. Belfast Lough
     * height (CRS code 5732) used for large scale topographic mapping in Northern Ireland.
     */
    public const EPSG_MALIN_HEAD_HEIGHT = 5731;

    /**
     * Mallorca height
     * Extent: Spain - Balearic Islands - Mallorca onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_MALLORCA_HEIGHT = 9392;

    /**
     * Maputo height
     * Extent: Mozambique - onshore.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_MAPUTO_HEIGHT = 5722;

    /**
     * Martinique 1955 height
     * Extent: Martinique - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaced by Martinique 1987 height (CRS code 5756).
     */
    public const EPSG_MARTINIQUE_1955_HEIGHT = 5794;

    /**
     * Martinique 1987 height
     * Extent: Martinique - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces Martinique 1955 height (CRS code 5794).
     */
    public const EPSG_MARTINIQUE_1987_HEIGHT = 5756;

    /**
     * Maupiti SAU 2001 height
     * Extent: French Polynesia - Society Islands - Maupiti.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Part of NGPF (CRS code 5600).
     */
    public const EPSG_MAUPITI_SAU_2001_HEIGHT = 5604;

    /**
     * Mayotte 1950 height
     * Extent: Mayotte - onshore.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_MAYOTTE_1950_HEIGHT = 5793;

    /**
     * Menorca height
     * Extent: Spain - Balearic Islands - Menorca onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_MENORCA_HEIGHT = 9393;

    /**
     * Moorea SAU 1981 height
     * Extent: French Polynesia - Society Islands - Moorea.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Part of NGPF (CRS code 5600).
     */
    public const EPSG_MOOREA_SAU_1981_HEIGHT = 5602;

    /**
     * Moturiki 1953 height
     * Extent: New Zealand - North Island - Moturiki vertical CRS area.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_MOTURIKI_1953_HEIGHT = 5764;

    /**
     * N2000 height
     * Extent: Finland - onshore.
     * Scope: Geodesy, engineering survey.
     * Replaces N43 height and N60 height (CRS codes 8675 and 5717).
     */
    public const EPSG_N2000_HEIGHT = 3900;

    /**
     * N43 height
     * Extent: Finland - onshore mainland south of approximately 66°N.
     * Scope: Geodesy, engineering survey.
     * Introduced during second national precise levelling as a temporary height system (or intended to be such).
     * Replaced by N60 height (CRS code 5717).
     */
    public const EPSG_N43_HEIGHT = 8675;

    /**
     * N60 height
     * Extent: Finland - onshore.
     * Scope: Geodesy, engineering survey.
     * In use since 1968. Replaced by N2000 height (CRS code 3900).
     */
    public const EPSG_N60_HEIGHT = 5717;

    /**
     * NAP height
     * Extent: Netherlands - onshore and offshore.
     * Scope: Geodesy, engineering survey.
     * Use has been extended from Netherlands onshore to Netherlands onshore and offshore from 2018.
     */
    public const EPSG_NAP_HEIGHT = 5709;

    /**
     * NAVD88 depth
     * Extent: Mexico - onshore. United States (USA) -  CONUS and Alaska - onshore - Alabama; Alaska; Arizona;
     * Arkansas; California; Colorado; Connecticut; Delaware; Florida; Georgia; Idaho; Illinois; Indiana; Iowa; Kansas;
     * Kentucky; Louisiana; Maine; Maryland; Massachusetts; Michigan; Minnesota; Mississippi; Missouri; Montana;
     * Nebraska; Nevada; New Hampshire; New Jersey; New Mexico; New York; North Carolina; North Dakota; Ohio; Oklahoma;
     * Oregon; Pennsylvania; Rhode Island; South Carolina; South Dakota; Tennessee; Texas; Utah; Vermont; Virginia;
     * Washington; West Virginia; Wisconsin; Wyoming.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_NAVD88_DEPTH = 6357;

    /**
     * NAVD88 depth (ftUS)
     * Extent: United States (USA) -  CONUS and Alaska - onshore - Alabama; Alaska mainland; Arizona; Arkansas;
     * California; Colorado; Connecticut; Delaware; Florida; Georgia; Idaho; Illinois; Indiana; Iowa; Kansas; Kentucky;
     * Louisiana; Maine; Maryland; Massachusetts; Michigan; Minnesota; Mississippi; Missouri; Montana; Nebraska;
     * Nevada; New Hampshire; New Jersey; New Mexico; New York; North Carolina; North Dakota; Ohio; Oklahoma; Oregon;
     * Pennsylvania; Rhode Island; South Carolina; South Dakota; Tennessee; Texas; Utah; Vermont; Virginia; Washington;
     * West Virginia; Wisconsin; Wyoming.
     * Scope: Geodesy, engineering survey.
     * Replaces NGVD29 depth (ftUS) (CRS code 6359).
     */
    public const EPSG_NAVD88_DEPTH_FTUS = 6358;

    /**
     * NAVD88 height
     * Extent: Mexico - onshore. United States (USA) -  CONUS and Alaska - onshore - Alabama; Alaska; Arizona;
     * Arkansas; California; Colorado; Connecticut; Delaware; Florida; Georgia; Idaho; Illinois; Indiana; Iowa; Kansas;
     * Kentucky; Louisiana; Maine; Maryland; Massachusetts; Michigan; Minnesota; Mississippi; Missouri; Montana;
     * Nebraska; Nevada; New Hampshire; New Jersey; New Mexico; New York; North Carolina; North Dakota; Ohio; Oklahoma;
     * Oregon; Pennsylvania; Rhode Island; South Carolina; South Dakota; Tennessee; Texas; Utah; Vermont; Virginia;
     * Washington; West Virginia; Wisconsin; Wyoming.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_NAVD88_HEIGHT = 5703;

    /**
     * NAVD88 height (ft)
     * Extent: United States (USA) - onshore - Arizona; Michigan; Montana; North Dakota; Oregon; South Carolina.
     * Scope: Engineering survey, GIS, topographic mapping.
     * Care: only for use as part of a compound CRS in conjunction with State Plane CS in States which have passed
     * State Plane legislation in International feet (note: not US survet feet).
     */
    public const EPSG_NAVD88_HEIGHT_FT = 8228;

    /**
     * NAVD88 height (ftUS)
     * Extent: United States (USA) -  CONUS and Alaska - onshore - Alabama; Alaska mainland; Arizona; Arkansas;
     * California; Colorado; Connecticut; Delaware; Florida; Georgia; Idaho; Illinois; Indiana; Iowa; Kansas; Kentucky;
     * Louisiana; Maine; Maryland; Massachusetts; Michigan; Minnesota; Mississippi; Missouri; Montana; Nebraska;
     * Nevada; New Hampshire; New Jersey; New Mexico; New York; North Carolina; North Dakota; Ohio; Oklahoma; Oregon;
     * Pennsylvania; Rhode Island; South Carolina; South Dakota; Tennessee; Texas; Utah; Vermont; Virginia; Washington;
     * West Virginia; Wisconsin; Wyoming.
     * Scope: Geodesy, engineering survey.
     * Replaces NGVD29 height (ftUS) (CRS code 5702).
     */
    public const EPSG_NAVD88_HEIGHT_FTUS = 6360;

    /**
     * NG-L height
     * Extent: Luxembourg.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_NG_L_HEIGHT = 5774;

    /**
     * NGC 1948 height
     * Extent: France - Corsica onshore.
     * Scope: Geodesy, engineering survey.
     * Replaced by IGN78 height (CRS code 5721).
     */
    public const EPSG_NGC_1948_HEIGHT = 5791;

    /**
     * NGF Lallemand height
     * Extent: France - mainland onshore.
     * Scope: Geodesy, engineering survey.
     * Generally but not entirely replaced by NGF IGN69 height (CRS code 5720).
     */
    public const EPSG_NGF_LALLEMAND_HEIGHT = 5719;

    /**
     * NGF-IGN69 height
     * Extent: France - mainland onshore.
     * Scope: Geodesy, engineering survey.
     * Generally but not entirely replaces NGF Lallemand height (CRS code 5719).
     */
    public const EPSG_NGF_IGN69_HEIGHT = 5720;

    /**
     * NGF-IGN78 height
     * Extent: France - Corsica onshore.
     * Scope: Geodesy, engineering survey.
     * Replaces NGC 1948 height (CRS code 5791).
     */
    public const EPSG_NGF_IGN78_HEIGHT = 5721;

    /**
     * NGG1977 height
     * Extent: French Guiana - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_NGG1977_HEIGHT = 5755;

    /**
     * NGNC08 height
     * Extent: New Caledonia - Belep, Grande Terre, Ile des Pins, Loyalty Islands (Lifou, Mare, Ouvea).
     * Scope: Spatial referencing.
     * On Grande Terre replaces NGNC69 (CRS code 5753).
     */
    public const EPSG_NGNC08_HEIGHT = 9351;

    /**
     * NGNC69 height
     * Extent: New Caledonia - Grande Terre.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaced by NGNC08 height (CRS code 9351).
     */
    public const EPSG_NGNC69_HEIGHT = 5753;

    /**
     * NGPF height
     * Extent: French Polynesia - Society Islands - Bora Bora, Huahine, Maupiti, Moorea, Raiatea, Tahaa and Tahiti.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * The collection of heterogeneous vertical coordinate reference systems throughout the Society Islands of French
     * Polynesia.
     */
    public const EPSG_NGPF_HEIGHT = 5600;

    /**
     * NGVD29 depth (ftUS)
     * Extent: United States (USA) - CONUS onshore - Alabama; Arizona; Arkansas; California; Colorado; Connecticut;
     * Delaware; Florida; Georgia; Idaho; Illinois; Indiana; Iowa; Kansas; Kentucky; Louisiana; Maine; Maryland;
     * Massachusetts; Michigan; Minnesota; Mississippi; Missouri; Montana; Nebraska; Nevada; New Hampshire; New Jersey;
     * New Mexico; New York; North Carolina; North Dakota; Ohio; Oklahoma; Oregon; Pennsylvania; Rhode Island; South
     * Carolina; South Dakota; Tennessee; Texas; Utah; Vermont; Virginia; Washington; West Virginia; Wisconsin;
     * Wyoming.
     * Scope: Geodesy, engineering survey.
     * Replaced by NAVD88 depth (ftUS) (CRS code 6358).
     */
    public const EPSG_NGVD29_DEPTH_FTUS = 6359;

    /**
     * NGVD29 height (ftUS)
     * Extent: United States (USA) - CONUS onshore - Alabama; Arizona; Arkansas; California; Colorado; Connecticut;
     * Delaware; Florida; Georgia; Idaho; Illinois; Indiana; Iowa; Kansas; Kentucky; Louisiana; Maine; Maryland;
     * Massachusetts; Michigan; Minnesota; Mississippi; Missouri; Montana; Nebraska; Nevada; New Hampshire; New Jersey;
     * New Mexico; New York; North Carolina; North Dakota; Ohio; Oklahoma; Oregon; Pennsylvania; Rhode Island; South
     * Carolina; South Dakota; Tennessee; Texas; Utah; Vermont; Virginia; Washington; West Virginia; Wisconsin;
     * Wyoming.
     * Scope: Geodesy, engineering survey.
     * Replaced by NAVD88 height (ftUS) (CRS code 6360).
     */
    public const EPSG_NGVD29_HEIGHT_FTUS = 5702;

    /**
     * NGVD29 height (m)
     * Extent: United States (USA) - CONUS onshore - Alabama; Arizona; Arkansas; California; Colorado; Connecticut;
     * Delaware; Florida; Georgia; Idaho; Illinois; Indiana; Iowa; Kansas; Kentucky; Louisiana; Maine; Maryland;
     * Massachusetts; Michigan; Minnesota; Mississippi; Missouri; Montana; Nebraska; Nevada; New Hampshire; New Jersey;
     * New Mexico; New York; North Carolina; North Dakota; Ohio; Oklahoma; Oregon; Pennsylvania; Rhode Island; South
     * Carolina; South Dakota; Tennessee; Texas; Utah; Vermont; Virginia; Washington; West Virginia; Wisconsin;
     * Wyoming.
     * Scope: Intermediate stage in transformations - not used otherwise.
     * System defined by IOGP to allow transformation of heights to and from NGVD29. See CRS code 5702 for system in US
     * survey feet in actual use.
     */
    public const EPSG_NGVD29_HEIGHT_M = 7968;

    /**
     * NMVD03 height
     * Extent: Northern Mariana Islands - onshore - Rota, Saipan and Tinian.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces all earlier vertical CRSs on these islands.
     */
    public const EPSG_NMVD03_HEIGHT = 6640;

    /**
     * NN2000 height
     * Extent: Norway - onshore.
     * Scope: Geodesy, engineering survey.
     * Replaces NN54 height (CRS code 5776).
     */
    public const EPSG_NN2000_HEIGHT = 5941;

    /**
     * NN54 height
     * Extent: Norway - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaced by NN2000 height (CRS code 5941).
     */
    public const EPSG_NN54_HEIGHT = 5776;

    /**
     * NZVD2009 height
     * Extent: New Zealand - onshore and offshore. Includes Antipodes Islands, Auckland Islands, Bounty Islands,
     * Chatham Islands, Cambell Island, Kermadec Islands, Raoul Island and Snares Islands.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaced by NZVD2016 from 2016-06-27.
     */
    public const EPSG_NZVD2009_HEIGHT = 4440;

    /**
     * NZVD2016 height
     * Extent: New Zealand - onshore and offshore. Includes Antipodes Islands, Auckland Islands, Bounty Islands,
     * Chatham Islands, Cambell Island, Kermadec Islands, Raoul Island and Snares Islands.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Normal-orthometric heights. Replaces NZVD2009 height (CRS code 4440).
     */
    public const EPSG_NZVD2016_HEIGHT = 7839;

    /**
     * Napier 1962 height
     * Extent: New Zealand - North Island - Hawkes Bay meridional circuit and Napier vertical crs area.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_NAPIER_1962_HEIGHT = 5765;

    /**
     * Nelson 1955 height
     * Extent: New Zealand - South Island - north of approximately 42°20'S - Nelson vertical CRS area.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_NELSON_1955_HEIGHT = 5766;

    /**
     * North Rona height
     * Extent: United Kingdom (UK) - Great Britain - Scotland - North Rona onshore.
     * Scope: Geodesy, engineering survey.
     * Replaced by ODN (Offshore) height (CRS code 7707) in 2016.
     */
    public const EPSG_NORTH_RONA_HEIGHT = 5745;

    /**
     * ODN (Offshore) height
     * Extent: United Kingdom (UK) - offshore between 2km from shore and boundary of UKCS within 49°46'N to 61°01'N
     * and 7°33'W to 3°33'E.
     * Scope: Geodesy, engineering survey.
     * Defined through OSGM geoid model (transformation code 7713). Replaces Fair Isle height, Flannan Isles height,
     * Foula height, North Rona height, St Kilda height and Sule Skerry height (CRS codes 5741, 5748, 5743, 5745, 5747
     * and 5744) from 2016.
     */
    public const EPSG_ODN_OFFSHORE_HEIGHT = 7707;

    /**
     * ODN Orkney height
     * Extent: United Kingdom (UK) - Great Britain - Scotland - Orkney Islands onshore.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_ODN_ORKNEY_HEIGHT = 5740;

    /**
     * ODN height
     * Extent: United Kingdom (UK) - Great Britain onshore - England and Wales - mainland; Scotland - mainland and
     * Inner Hebrides.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_ODN_HEIGHT = 5701;

    /**
     * One Tree Point 1964 height
     * Extent: New Zealand - North Island - One Tree Point vertical CRS area.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_ONE_TREE_POINT_1964_HEIGHT = 5767;

    /**
     * Ostend height
     * Extent: Belgium - onshore.
     * Scope: Geodesy, engineering survey.
     * No gravity corrections applied.
     */
    public const EPSG_OSTEND_HEIGHT = 5710;

    /**
     * PHD93 height
     * Extent: Oman - onshore. Includes Musandam and the Kuria Muria (Al Hallaniyah) islands.
     * Scope: Geodesy, engineering survey.
     * Replaces Fahud Height Datum height (CRS code 5725) from 1993.
     */
    public const EPSG_PHD93_HEIGHT = 5724;

    /**
     * PNG08 height
     * Extent: Papua New Guinea - between 0°N and 12°S and 140°E and 158°E - onshore and offshore.
     * Scope: Geodesy.
     * PNG08 height = PNG94 ellipsoidal height - value of geoid undulation derived by bilinear interpolation of PNG08
     * geoid model (see transformation code 7655).
     */
    public const EPSG_PNG08_HEIGHT = 7447;

    /**
     * POM08 height
     * Extent: Papua New Guinea - onshore - Gulf province east of 144°24'E, Central province and National Capital
     * District.
     * Scope: Engineering survey.
     * POM08 height = WGS 84 ellipsoid height - value of geoid undulation derived by bilinear interpolation of EGM2008
     * geoid model - 0.93m = EGM2008 height - 0.93m. See CRS code 3855 and transformation codes 3858 and 3859.
     */
    public const EPSG_POM08_HEIGHT = 7841;

    /**
     * POM96 height
     * Extent: Papua New Guinea - onshore - Gulf province east of 144°24'E, Central province and National Capital
     * District.
     * Scope: Engineering survey.
     * POM96 height = WGS 84 ellipsoid height - value of geoid undulation derived by bilinear interpolation of EGM96
     * geoid model - 1.58m = EGM96 height - 1.58m. See CRS code 5773 and transformation code 10084.
     */
    public const EPSG_POM96_HEIGHT = 7832;

    /**
     * PRVD02 height
     * Extent: Puerto Rico - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces all earlier vertical CRSs for Puerto Rico.
     */
    public const EPSG_PRVD02_HEIGHT = 6641;

    /**
     * Piraeus height
     * Extent: Greece - onshore.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_PIRAEUS_HEIGHT = 5716;

    /**
     * Ponta Delgada height
     * Extent: Portugal - eastern Azores - Sao Miguel island onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_PONTA_DELGADA_HEIGHT = 6187;

    /**
     * Poolbeg height (ft(Br36))
     * Extent: Ireland - onshore. United Kingdom (UK) - Northern Ireland (Ulster) - onshore.
     * Scope: Topographic mapping.
     * Topographic mapping before 1956 in Northern Ireland and 1970 in the Republic of Ireland. Replaced by Belfast
     * Lough height and Malin Head height (CRS codes 5732 and 5731).
     */
    public const EPSG_POOLBEG_HEIGHT_FT_BR36 = 5754;

    /**
     * Poolbeg height (m)
     * Extent: Ireland - onshore. United Kingdom (UK) - Northern Ireland (Ulster) - onshore.
     * Scope: Intermediate stage in transformations - not used otherwise.
     * CRS in metres used only for transformation of heights referenced to Poolbeg height (ft). For CRS in feet see
     * code 5754.
     */
    public const EPSG_POOLBEG_HEIGHT_M = 7962;

    /**
     * RH00 height
     * Extent: Sweden - onshore.
     * Scope: Engineering survey.
     * Replaced by RH70 (CRS code 5718).
     */
    public const EPSG_RH00_HEIGHT = 5615;

    /**
     * RH2000 height
     * Extent: Sweden - onshore.
     * Scope: Geodesy, engineering survey.
     * Replaces RH70 (CRS code 5718) from 2005.
     */
    public const EPSG_RH2000_HEIGHT = 5613;

    /**
     * RH70 height
     * Extent: Sweden - onshore.
     * Scope: Geodesy, engineering survey.
     * Replaces RH00 (CRS code 5615). Replaced by RH2000 (CRS code 5613) from 2005.
     */
    public const EPSG_RH70_HEIGHT = 5718;

    /**
     * Raiatea SAU 2001 height
     * Extent: French Polynesia - Society Islands - Raiatea.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Part of NGPF (CRS code 5600).
     */
    public const EPSG_RAIATEA_SAU_2001_HEIGHT = 5603;

    /**
     * Ras Ghumays height
     * Extent: United Arab Emirates (UAE) - Abu Dhabi onshore.
     * Scope: Engineering survey, topographic mapping.
     */
    public const EPSG_RAS_GHUMAYS_HEIGHT = 5843;

    /**
     * Reunion 1989 height
     * Extent: Reunion - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_REUNION_1989_HEIGHT = 5758;

    /**
     * SA LLD height
     * Extent: South Africa - mainland onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_SA_LLD_HEIGHT = 9279;

    /**
     * SHD height
     * Extent: Singapore - onshore and offshore.
     * Scope: Engineering survey, GIS, topographic mapping.
     */
    public const EPSG_SHD_HEIGHT = 6916;

    /**
     * SHVD2015 height
     * Extent: St Helena, Ascension and Tristan da Cunha - St Helena Island - onshore.
     * Scope: Geodesy.
     * Replaces Jamestown 1971 height and Tritan 2011 height (CRS codes 7888-89) from 2016.
     */
    public const EPSG_SHVD2015_HEIGHT = 7890;

    /**
     * SLVD height
     * Extent: Sri Lanka - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_SLVD_HEIGHT = 5237;

    /**
     * SNN76 height
     * Extent: Germany - states of former East Germany - Berlin, Brandenburg; Mecklenburg-Vorpommern; Sachsen;
     * Sachsen-Anhalt; Thuringen.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaced by DNNH92 height (CRS code 5783).
     */
    public const EPSG_SNN76_HEIGHT = 5785;

    /**
     * SRB_VRS12 height
     * Extent: Serbia including Vojvodina.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces Trieste height (CRS code 5195) in Serbia from 2012-03.
     */
    public const EPSG_SRB_VRS12_HEIGHT = 8691;

    /**
     * SRVN16 height
     * Extent: Argentina - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Orthometric heights. Replaces SRVN71.
     */
    public const EPSG_SRVN16_HEIGHT = 9255;

    /**
     * SVS2000 height
     * Extent: Slovenia - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces Trieste height (CRS code 5195) in Slovenia from 2000. Replaced by SVS2010 (CRS code 8690) from 2019-01.
     */
    public const EPSG_SVS2000_HEIGHT = 5779;

    /**
     * SVS2010 height
     * Extent: Slovenia - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces SVS2000 height (CRS code 5779) from 2019-01.
     */
    public const EPSG_SVS2010_HEIGHT = 8690;

    /**
     * Santa Cruz da Graciosa height
     * Extent: Portugal - central Azores - Graciosa island onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_SANTA_CRUZ_DA_GRACIOSA_HEIGHT = 6183;

    /**
     * Santa Cruz das Flores height
     * Extent: Portugal - western Azores onshore - Flores, Corvo.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_SANTA_CRUZ_DAS_FLORES_HEIGHT = 6185;

    /**
     * St. Helena Tritan 2011 height
     * Extent: St Helena, Ascension and Tristan da Cunha - St Helena Island - onshore.
     * Scope: Engineering survey 2011 to 2015.
     * Replaced by SHVD2016 (CRS code 7890) from 2016.
     */
    public const EPSG_ST_HELENA_TRITAN_2011_HEIGHT = 7889;

    /**
     * St. Kilda height
     * Extent: United Kingdom (UK) - Great Britain - Scotland - St Kilda onshore.
     * Scope: Geodesy, engineering survey.
     * Replaced by ODN (Offshore) height (CRS code 7707) in 2016.
     */
    public const EPSG_ST_KILDA_HEIGHT = 5747;

    /**
     * St. Marys height
     * Extent: United Kingdom (UK) - Great Britain - England - Isles of Scilly onshore.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_ST_MARYS_HEIGHT = 5749;

    /**
     * Stewart Island 1977 height
     * Extent: New Zealand - Stewart Island.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_STEWART_ISLAND_1977_HEIGHT = 5772;

    /**
     * Stornoway height
     * Extent: United Kingdom (UK) - Great Britain - Scotland - Outer Hebrides onshore.
     * Scope: Geodesy, engineering survey.
     */
    public const EPSG_STORNOWAY_HEIGHT = 5746;

    /**
     * Sule Skerry height
     * Extent: United Kingdom (UK) - Great Britain - Scotland - Sule Skerry onshore.
     * Scope: Geodesy, engineering survey.
     * Replaced by ODN (Offshore) height (CRS code 7707) in 2016.
     */
    public const EPSG_SULE_SKERRY_HEIGHT = 5744;

    /**
     * TWVD 2001 height
     * Extent: Taiwan, Republic of China - onshore - Taiwan Island.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces TWVD79.
     */
    public const EPSG_TWVD_2001_HEIGHT = 8904;

    /**
     * Tahaa SAU 2001 height
     * Extent: French Polynesia - Society Islands - Tahaa.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Part of NGPF (CRS code 5600).
     */
    public const EPSG_TAHAA_SAU_2001_HEIGHT = 5606;

    /**
     * Taranaki 1970 height
     * Extent: New Zealand - North Island - Taranaki vertical CRS area.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_TARANAKI_1970_HEIGHT = 5769;

    /**
     * Tararu 1952 height
     * Extent: New Zealand - North Island - Tararu vertical CRS area.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_TARARU_1952_HEIGHT = 5768;

    /**
     * Tenerife height
     * Extent: Spain - Canary Islands - Tenerife onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_TENERIFE_HEIGHT = 9398;

    /**
     * Trieste height
     * Extent: Boznia and Herzegovina; Croatia - onshore; Kosovo; Montenegro - onshore; North Macedonia; Serbia;
     * Slovenia - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * In Croatia replaced by HVRS71 height (CRS code 5610). In Serbia replaced by SRB_VRS12 height (CRS code 8691). In
     * Slovenia replaced by SVS2000 height (CRS code 5779).
     */
    public const EPSG_TRIESTE_HEIGHT = 5195;

    /**
     * Tutuila 1962 height
     * Extent: American Samoa - Tutuila island.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaced by ASVD02 height (CRS code 6643).
     */
    public const EPSG_TUTUILA_1962_HEIGHT = 6638;

    /**
     * VIVD09 height
     * Extent: US Virgin Islands - onshore - St Croix, St John, and St Thomas.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Replaces all earlier vertical CRSs on these islands.
     */
    public const EPSG_VIVD09_HEIGHT = 6642;

    /**
     * Vienna height
     * Extent: Austria - Vienna city state.
     * Scope: Municipal spatial referencing.
     * Defined from GHA height (EPSG:5778) using a vertical offset (Wiener Null is 156.68m above GHA height).
     */
    public const EPSG_VIENNA_HEIGHT = 8881;

    /**
     * Wellington 1953 height
     * Extent: New Zealand - North Island - Wellington vertical CRS area.
     * Scope: Geodesy, engineering survey, topographic mapping.
     */
    public const EPSG_WELLINGTON_1953_HEIGHT = 5770;

    /**
     * Yellow Sea 1956 height
     * Extent: China - onshore.
     * Scope: Geodesy, engineering survey.
     * Replaced by Yellow Sea 1985 height (CRS code 5737).
     */
    public const EPSG_YELLOW_SEA_1956_HEIGHT = 5736;

    /**
     * Yellow Sea 1985 height
     * Extent: China - onshore.
     * Scope: Geodesy, engineering survey.
     * Replaces Yellow Sea 1956 height (CRS code 5736).
     */
    public const EPSG_YELLOW_SEA_1985_HEIGHT = 5737;

    public function __construct(
        int $epsgCode,
        CoordinateSystem $coordinateSystem,
        Datum $datum
    ) {
        $this->epsgCode = $epsgCode;
        $this->coordinateSystem = $coordinateSystem;
        $this->datum = $datum;

        assert(count($coordinateSystem->getAxes()) === 1);
    }

    public function getEpsgCode(): int
    {
        return $this->epsgCode;
    }

    public function getCoordinateSystem(): CoordinateSystem
    {
        return $this->coordinateSystem;
    }

    public function getDatum(): Datum
    {
        return $this->datum;
    }
}
