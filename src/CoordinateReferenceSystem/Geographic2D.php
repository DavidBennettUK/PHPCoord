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

class Geographic2D extends Geographic
{
    /**
     * AGD66
     * Extent: Australia - onshore and offshore. Papua New Guinea - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_AGD66 = 4202;

    /**
     * AGD84
     * Extent: Australia - Queensland, South Australia, Western Australia, federal areas offshore west of 129°E.
     * Scope: Geodesy.
     * National system replacing AGD 66 but officially adopted only in Queensland, South Australia and Western
     * Australia. Replaced by GDA94.
     */
    public const EPSG_AGD84 = 4203;

    /**
     * ATF (Paris)
     * Extent: France - mainland onshore.
     * Scope: Geodesy.
     * ProjCRS covering all mainland France based on this datum used Bonne projection. In Alsace, suspected to be an
     * extension of core network based on transformation of old German system.
     */
    public const EPSG_ATF_PARIS = 4901;

    /**
     * ATRF2014
     * Extent: Australia including Lord Howe Island, Macquarie Islands, Ashmore and Cartier Islands, Christmas Island,
     * Cocos (Keeling) Islands, Norfolk Island. All onshore and offshore.
     * Scope: Location-based services, Intelligent Transport Services, navigation, positioning.
     */
    public const EPSG_ATRF2014 = 9309;

    /**
     * ATS77
     * Extent: Canada - New Brunswick; Nova Scotia; Prince Edward Island.
     * Scope: Geodesy.
     * In use from 1979. To be phased out in late 1990's.
     */
    public const EPSG_ATS77 = 4122;

    /**
     * AbInvA96_2020-IRF
     * Extent: UK - on or related to the A96 highway from Aberdeen to Inverness.
     * Scope: Highway engineering.
     * Intermediate CRS created in 2020 to assist the emulation of the ETRS89 / AbInvA96_2020 SnakeGrid projected CRS
     * through transformation ETRS89 to AbInvA96_2020-IRF (1) (code 9386) used in conjunction with the AbInvA96_2020-TM
     * map projection (code 9385).
     */
    public const EPSG_ABINVA96_2020_IRF = 9384;

    /**
     * Abidjan 1987
     * Extent: Côte d'Ivoire (Ivory Coast) - onshore and offshore.
     * Scope: Geodesy.
     * Replaces Locodjo 1965 (EPSG code 4142).
     */
    public const EPSG_ABIDJAN_1987 = 4143;

    /**
     * Accra
     * Extent: Ghana - onshore and offshore.
     * Scope: Geodesy.
     * Ellipsoid semi-major axis (a)=20926201 exactly Gold Coast feet.
     * Replaced by Leigon (code 4250) in 1978.
     */
    public const EPSG_ACCRA = 4168;

    /**
     * Aden 1925
     * Extent: Yemen - South Yemen onshore mainland.
     * Scope: Engineering survey, harbour hydrography.
     */
    public const EPSG_ADEN_1925 = 6881;

    /**
     * Adindan
     * Extent: Eritrea; Ethiopia; South Sudan; Sudan.
     * Scope: Geodesy.
     * The 12th parallel traverse of 1966-70 (geogCRS Point 58, code 4620) is connected to the Blue Nile 1958 network
     * in western Sudan. This has given rise to misconceptions that the Blue Nile 1958 network is used in west Africa.
     */
    public const EPSG_ADINDAN = 4201;

    /**
     * Afgooye
     * Extent: Somalia - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_AFGOOYE = 4205;

    /**
     * Agadez
     * Extent: Niger.
     * Scope: Geodesy.
     */
    public const EPSG_AGADEZ = 4206;

    /**
     * Ain el Abd
     * Extent: Bahrain, Kuwait and Saudi Arabia - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_AIN_EL_ABD = 4204;

    /**
     * Albanian 1987
     * Extent: Albania - onshore.
     * Scope: Geodesy.
     * Replaced by KRGJSH-2010.
     */
    public const EPSG_ALBANIAN_1987 = 4191;

    /**
     * American Samoa 1962
     * Extent: American Samoa - Tutuila, Aunu'u, Ofu, Olesega and Ta'u islands.
     * Scope: Geodesy.
     */
    public const EPSG_AMERICAN_SAMOA_1962 = 4169;

    /**
     * Amersfoort
     * Extent: Netherlands - onshore, including Waddenzee, Dutch Wadden Islands and 12-mile offshore coastal zone.
     * Scope: Intermediate CRS in transformation to and from projected CRS.
     * Use of geographic2D CRS Amersfoort (code 4289) for spatial referencing is discouraged. Use projected CRS
     * Amersfoort / RD New (code 28992).
     */
    public const EPSG_AMERSFOORT = 4289;

    /**
     * Ammassalik 1958
     * Extent: Greenland - Ammassalik area onshore.
     * Scope: Geodesy.
     */
    public const EPSG_AMMASSALIK_1958 = 4196;

    /**
     * Anguilla 1957
     * Extent: Anguilla - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_ANGUILLA_1957 = 4600;

    /**
     * Antigua 1943
     * Extent: Antigua island - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_ANTIGUA_1943 = 4601;

    /**
     * Aratu
     * Extent: Brazil - offshore south and east of a line intersecting the coast at 2°55'S; onshore Tucano basin.
     * Scope: Geodesy.
     */
    public const EPSG_ARATU = 4208;

    /**
     * Arc 1950
     * Extent: Botswana; Malawi; Zambia; Zimbabwe.
     * Scope: Geodesy.
     */
    public const EPSG_ARC_1950 = 4209;

    /**
     * Arc 1960
     * Extent: Burundi, Kenya, Rwanda, Tanzania and Uganda.
     * Scope: Geodesy.
     */
    public const EPSG_ARC_1960 = 4210;

    /**
     * Ascension Island 1958
     * Extent: St Helena, Ascension and Tristan da Cunha - Ascension Island - onshore.
     * Scope: Military survey.
     */
    public const EPSG_ASCENSION_ISLAND_1958 = 4712;

    /**
     * Astro DOS 71
     * Extent: St Helena, Ascension and Tristan da Cunha - St Helena Island - onshore.
     * Scope: Geodesy, topographic mapping.
     * Used between 1972 and 2015. Replaced by SHGD2015 (CRS code 7886) from 2015.
     */
    public const EPSG_ASTRO_DOS_71 = 4710;

    /**
     * Australian Antarctic
     * Extent: Antarctica between 45°E and 136°E and between 142°E and 160°E - Australian sector.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_AUSTRALIAN_ANTARCTIC = 4176;

    /**
     * Ayabelle Lighthouse
     * Extent: Djibouti - onshore and offshore.
     * Scope: Military survey.
     */
    public const EPSG_AYABELLE_LIGHTHOUSE = 4713;

    /**
     * Azores Central 1948
     * Extent: Portugal - central Azores onshore - Faial, Graciosa, Pico, Sao Jorge, Terceira.
     * Scope: Geodesy.
     * Replaced by 1995 system (CRS code 4665).
     */
    public const EPSG_AZORES_CENTRAL_1948 = 4183;

    /**
     * Azores Central 1995
     * Extent: Portugal - central Azores onshore - Faial, Graciosa, Pico, Sao Jorge, Terceira.
     * Scope: Geodesy.
     * Replaces 1948 system (CRS code 4183). Replaced by PTRA08 (CRS code 5013).
     */
    public const EPSG_AZORES_CENTRAL_1995 = 4665;

    /**
     * Azores Occidental 1939
     * Extent: Portugal - western Azores onshore - Flores, Corvo.
     * Scope: Geodesy.
     * Replaced by PTRA08 (CRS code 5013).
     */
    public const EPSG_AZORES_OCCIDENTAL_1939 = 4182;

    /**
     * Azores Oriental 1940
     * Extent: Portugal - eastern Azores onshore - Sao Miguel, Santa Maria, Formigas.
     * Scope: Geodesy.
     * Replaced by 1995 system (CRS code 4664).
     */
    public const EPSG_AZORES_ORIENTAL_1940 = 4184;

    /**
     * Azores Oriental 1995
     * Extent: Portugal - eastern Azores onshore - Sao Miguel, Santa Maria, Formigas.
     * Scope: Geodesy.
     * Replaces 1948 system (CRS code 4184). Replaced by PTRA08 (CRS code 5013).
     */
    public const EPSG_AZORES_ORIENTAL_1995 = 4664;

    /**
     * BDA2000
     * Extent: Bermuda - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces Bermuda 1957 (CRS code 4216).
     */
    public const EPSG_BDA2000 = 4762;

    /**
     * BGS2005
     * Extent: Bulgaria - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Adopted 2010-07-29. Replaces earlier systems.
     */
    public const EPSG_BGS2005 = 7798;

    /**
     * Barbados 1938
     * Extent: Barbados - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_BARBADOS_1938 = 4212;

    /**
     * Batavia
     * Extent: Indonesia - Bali, Java and western Sumatra onshore, offshore southern Java Sea, Madura Strait and
     * western Bali Sea.
     * Scope: Geodesy.
     */
    public const EPSG_BATAVIA = 4211;

    /**
     * Batavia (Jakarta)
     * Extent: Indonesia - onshore - Bali, Java and western Sumatra.
     * Scope: Geodesy.
     */
    public const EPSG_BATAVIA_JAKARTA = 4813;

    /**
     * Beduaram
     * Extent: Niger - southeast
     * Scope: Geodesy.
     */
    public const EPSG_BEDUARAM = 4213;

    /**
     * Beijing 1954
     * Extent: China - onshore and offshore.
     * Scope: Geodesy.
     * In 1982 replaced by Xian 1980 (CRS code 4610) and New Beijing (CRS code 4555).
     */
    public const EPSG_BEIJING_1954 = 4214;

    /**
     * Bekaa Valley 1920
     * Extent: Lebanon - onshore.
     * Scope: Topographic mapping.
     */
    public const EPSG_BEKAA_VALLEY_1920 = 6882;

    /**
     * Belge 1950
     * Extent: Belgium - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_BELGE_1950 = 4215;

    /**
     * Belge 1950 (Brussels)
     * Extent: Belgium - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_BELGE_1950_BRUSSELS = 4809;

    /**
     * Belge 1972
     * Extent: Belgium - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_BELGE_1972 = 4313;

    /**
     * Bellevue
     * Extent: Vanuatu - southern islands - Aneityum, Efate, Erromango and Tanna.
     * Scope: Military survey.
     */
    public const EPSG_BELLEVUE = 4714;

    /**
     * Bermuda 1957
     * Extent: Bermuda - onshore.
     * Scope: Geodesy.
     * Replaced by BDA2000 (CRS code 4762).
     */
    public const EPSG_BERMUDA_1957 = 4216;

    /**
     * Bern 1898 (Bern)
     * Extent: Liechtenstein; Switzerland.
     * Scope: Geodesy.
     */
    public const EPSG_BERN_1898_BERN = 4801;

    /**
     * Bern 1938
     * Extent: Liechtenstein; Switzerland.
     * Scope: Topographic mapping.
     * Used for the geographic coordinates overprinted on topographic maps constructed on the CH1903 / LV03 projected
     * CS (code 21781).
     */
    public const EPSG_BERN_1938 = 4306;

    /**
     * Bioko
     * Extent: Equatorial Guinea - Bioko onshore.
     * Scope: Topographic mapping.
     */
    public const EPSG_BIOKO = 6883;

    /**
     * Bissau
     * Extent: Guinea-Bissau - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_BISSAU = 4165;

    /**
     * Bogota 1975
     * Extent: Colombia - mainland and offshore Caribbean.
     * Scope: Geodesy.
     * Replaces earlier 3 adjustments of 1951, 1944 and 1941. Replaced by MAGNA-SIRGAS (CRS code 4685).
     */
    public const EPSG_BOGOTA_1975 = 4218;

    /**
     * Bogota 1975 (Bogota)
     * Extent: Colombia - mainland onshore.
     * Scope: Geodesy.
     * Replaces earlier 3 adjustments of 1951, 1944 and 1941.
     */
    public const EPSG_BOGOTA_1975_BOGOTA = 4802;

    /**
     * Bukit Rimpah
     * Extent: Indonesia - Banga and Belitung Islands.
     * Scope: Geodesy.
     */
    public const EPSG_BUKIT_RIMPAH = 4219;

    /**
     * CGRS93
     * Extent: Cyprus - onshore.
     * Scope: Horizontal component of 3D system.
     * Adopted by DLS in 1993 for new survey plans and maps.
     */
    public const EPSG_CGRS93 = 6311;

    /**
     * CH1903
     * Extent: Liechtenstein; Switzerland.
     * Scope: Geodesy.
     * Replaced by CH1903+.
     */
    public const EPSG_CH1903 = 4149;

    /**
     * CH1903+
     * Extent: Liechtenstein; Switzerland.
     * Scope: Geodesy.
     * Replaces CH1903.
     */
    public const EPSG_CH1903_PLUS = 4150;

    /**
     * CHTRF95
     * Extent: Liechtenstein; Switzerland.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_CHTRF95 = 4151;

    /**
     * CIGD11
     * Extent: Cayman Islands - onshore and offshore. Includes Grand Cayman, Little Cayman and Cayman Brac.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_CIGD11 = 6135;

    /**
     * CR-SIRGAS
     * Extent: Costa Rica - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces CR05 (CRS code 5365) from April 2018.
     */
    public const EPSG_CR_SIRGAS = 8907;

    /**
     * CR05
     * Extent: Costa Rica - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces Ocotepeque (CRS code 5451) in Costa Rica from March 2007. Replaced by CR-SIRGAS (CRS code 8907) from
     * April 2018.
     */
    public const EPSG_CR05 = 5365;

    /**
     * CSG67
     * Extent: French Guiana - coastal area.
     * Scope: Geodesy.
     */
    public const EPSG_CSG67 = 4623;

    /**
     * Cadastre 1997
     * Extent: Mayotte - onshore.
     * Scope: Horizontal component of 3D system.
     * Replaces Combani 1950 (CRS code 4632) for cadastral purposes only. For other purposes see RGM04 (CRS code 4470).
     */
    public const EPSG_CADASTRE_1997 = 4475;

    /**
     * Camacupa 1948
     * Extent: Angola - Angola proper - onshore and offshore.
     * Scope: Oil and gas exploration and production.
     * Provisional adjustment. Coastal stations used for offshore radio-navigation positioning and determination of
     * transformations to WGS. Differs from second adjustment (Camacupa 2015, CRS code 8694), which is not used for
     * offshore E&P, by up to 25m.
     */
    public const EPSG_CAMACUPA_1948 = 4220;

    /**
     * Camacupa 2015
     * Extent: Angola - onshore and offshore.
     * Scope: EEZ delimitation.
     * Camacupa 1948 (CRS code 4220) is used for offshore oil and gas exploration and production. Camacupa 2015 differs
     * from Camacupa 1948 by up to 25m.
     */
    public const EPSG_CAMACUPA_2015 = 8694;

    /**
     * Camp Area Astro
     * Extent: Antarctica - McMurdo Sound, Camp McMurdo area.
     * Scope: Military survey.
     * Replaced by RSRGD2000 (CRS code 4764). The relationship to this is variable. See Land Information New Zealand
     * LINZS25001.
     */
    public const EPSG_CAMP_AREA_ASTRO = 4715;

    /**
     * Campo Inchauspe
     * Extent: Argentina - mainland onshore and Atlantic offshore Tierra del Fuego.
     * Scope: Geodesy.
     */
    public const EPSG_CAMPO_INCHAUSPE = 4221;

    /**
     * Cape
     * Extent: Botswana; Eswatini (Swaziland); Lesotho; South Africa - mainland.
     * Scope: Geodesy.
     * Replaced by Hartbeesthoek94 from 1999.
     */
    public const EPSG_CAPE = 4222;

    /**
     * Cape Canaveral
     * Extent: North America - onshore - Bahamas and USA - Florida (east).
     * Scope: US space and military operations.
     */
    public const EPSG_CAPE_CANAVERAL = 4717;

    /**
     * Carthage
     * Extent: Tunisia - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_CARTHAGE = 4223;

    /**
     * Carthage (Paris)
     * Extent: Tunisia - onshore.
     * Scope: Geodesy.
     * Replaced by Greenwich-based Carthage geogCRS.
     */
    public const EPSG_CARTHAGE_PARIS = 4816;

    /**
     * Chatham Islands 1971
     * Extent: New Zealand - Chatham Islands group - onshore.
     * Scope: Geodesy.
     * Replaced by CI1979.
     */
    public const EPSG_CHATHAM_ISLANDS_1971 = 4672;

    /**
     * Chatham Islands 1979
     * Extent: New Zealand - Chatham Islands group - onshore.
     * Scope: Geodesy.
     * Replaces CI1971. Replaced by NZGD2000 from March 2000.
     */
    public const EPSG_CHATHAM_ISLANDS_1979 = 4673;

    /**
     * China Geodetic Coordinate System 2000
     * Extent: China - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Adopted July 2008. Replaces Xian 1980 (CRS code 4610).
     */
    public const EPSG_CHINA_GEODETIC_COORDINATE_SYSTEM_2000 = 4490;

    /**
     * Chos Malal 1914
     * Extent: Argentina - Mendoza province, Neuquen province, western La Pampa province and western Rio Negro
     * province.
     * Scope: Geodesy.
     * Replaced by Campo Inchauspe (geogCRS code 4221) for topographic mapping, use for oil exploration and production
     * continues.
     */
    public const EPSG_CHOS_MALAL_1914 = 4160;

    /**
     * Chua
     * Extent: Brazil - south of 18°S and west of 54°W, plus Distrito Federal. Paraguay - north.
     * Scope: Geodesy.
     * The Chua origin and associated network is in Brazil with a connecting traverse through northern Paraguay. In
     * Brazil used only as input into the Corrego Allegre adjustment (CRS code 4225), except for government work
     * including SICAD in Distrito Federal.
     */
    public const EPSG_CHUA = 4224;

    /**
     * Cocos Islands 1965
     * Extent: Cocos (Keeling) Islands - onshore.
     * Scope: Military survey.
     */
    public const EPSG_COCOS_ISLANDS_1965 = 4708;

    /**
     * Combani 1950
     * Extent: Mayotte - onshore.
     * Scope: Geodesy.
     * Replaced by Cadastre 1997 (CRS code 4475) for cadastral purposes only and by RGM04 (CRS code 4470) for all other
     * purposes.
     */
    public const EPSG_COMBANI_1950 = 4632;

    /**
     * Conakry 1905
     * Extent: Guinea - onshore.
     * Scope: Geodesy.
     * Replaced by Dabola 1981 (EPSG code 4155).
     */
    public const EPSG_CONAKRY_1905 = 4315;

    /**
     * Corrego Alegre 1961
     * Extent: Brazil - onshore - between 18°S and 27°30'S, also east of 54°W between 15°S and 18°S.
     * Scope: Geodesy.
     * Replaced by Corrego Alegre 1970-72 (CRS code 4225).
     */
    public const EPSG_CORREGO_ALEGRE_1961 = 5524;

    /**
     * Corrego Alegre 1970-72
     * Extent: Brazil - onshore - west of 54°W and south of 18°S; also south of 15°S between 54°W and 42°W; also
     * east of 42°W.
     * Scope: Geodesy.
     * Replaces 1961 adjustment (CRS code 5524). Replaced by SAD69 (CRS code 4291).
     */
    public const EPSG_CORREGO_ALEGRE_1970_72 = 4225;

    /**
     * DB_REF
     * Extent: Germany - onshore - states of Baden-Wurtemberg, Bayern, Berlin, Brandenburg, Bremen, Hamburg, Hessen,
     * Mecklenburg-Vorpommern, Niedersachsen, Nordrhein-Westfalen, Rheinland-Pfalz, Saarland, Sachsen, Sachsen-Anhalt,
     * Schleswig-Holstein, Thuringen.
     * Scope: Geodesy.
     * Differs from DHDN by 0.5-1m in former West Germany and by a maximum of 3m in former East Germany.
     */
    public const EPSG_DB_REF = 5681;

    /**
     * DGN95
     * Extent: Indonesia - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces ID74.
     */
    public const EPSG_DGN95 = 4755;

    /**
     * DHDN
     * Extent: Germany - states of former West Germany onshore - Baden-Wurtemberg, Bayern, Bremen, Hamburg, Hessen,
     * Niedersachsen, Nordrhein-Westfalen, Rheinland-Pfalz, Saarland, Schleswig-Holstein.
     * Scope: Geodesy.
     * See also RD/83 for Saxony and PD/83 for Thuringen. For national digital cartographic purposes used across all
     * German states.
     */
    public const EPSG_DHDN = 4314;

    /**
     * DRUKREF 03
     * Extent: Bhutan.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_DRUKREF_03 = 5264;

    /**
     * Dabola 1981
     * Extent: Guinea - onshore.
     * Scope: Geodesy.
     * Replaces Conakry 1905 (EPSG code 4315).
     */
    public const EPSG_DABOLA_1981 = 4155;

    /**
     * Datum 73
     * Extent: Portugal - mainland - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_DATUM_73 = 4274;

    /**
     * Dealul Piscului 1930
     * Extent: Romania - onshore.
     * Scope: Geodesy.
     * Replaced by Pulkovo 1942(58) (geogCRS code 4179).
     */
    public const EPSG_DEALUL_PISCULUI_1930 = 4316;

    /**
     * Deception Island
     * Extent: Antarctica - South Shetland Islands - Deception Island.
     * Scope: Military survey.
     */
    public const EPSG_DECEPTION_ISLAND = 4736;

    /**
     * Deir ez Zor
     * Extent: Lebanon - onshore. Syrian Arab Republic - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_DEIR_EZ_ZOR = 4227;

    /**
     * Diego Garcia 1969
     * Extent: British Indian Ocean Territory - Chagos Archipelago - Diego Garcia.
     * Scope: Military survey.
     */
    public const EPSG_DIEGO_GARCIA_1969 = 4724;

    /**
     * Dominica 1945
     * Extent: Dominica - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_DOMINICA_1945 = 4602;

    /**
     * Douala 1948
     * Extent: Cameroon - coastal area.
     * Scope: Geodesy.
     * Replaced by Manoca 1962 (code 4193).
     */
    public const EPSG_DOUALA_1948 = 4192;

    /**
     * ED50
     * Extent: Europe - west: Andorra; Cyprus; Denmark - onshore and offshore; Faroe Islands - onshore; France -
     * offshore; Germany - offshore North Sea; Gibraltar; Greece - offshore; Israel - offshore; Italy including San
     * Marino and Vatican City State; Ireland offshore; Malta; Netherlands - offshore; North Sea; Norway including
     * Svalbard - onshore and offshore; Portugal - mainland - offshore; Spain - onshore; Turkey - onshore and offshore;
     * United Kingdom UKCS offshore east of 6°W including Channel Islands (Guernsey and Jersey). Egypt - Western
     * Desert; Iraq - onshore; Jordan.
     * Scope: Geodesy.
     */
    public const EPSG_ED50 = 4230;

    /**
     * ED50(ED77)
     * Extent: Iran - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_ED50_ED77 = 4154;

    /**
     * ED79
     * Extent: Europe - west.
     * Scope: Geodesy.
     */
    public const EPSG_ED79 = 4668;

    /**
     * ED87
     * Extent: Europe - west.
     * Scope: Geodesy.
     */
    public const EPSG_ED87 = 4231;

    /**
     * ELD79
     * Extent: Libya - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_ELD79 = 4159;

    /**
     * EST92
     * Extent: Estonia - onshore.
     * Scope: Geodesy.
     * This name is also used for a projected CRS (see projCRS code 3300). Replaced by EST97 (code 4180).
     */
    public const EPSG_EST92 = 4133;

    /**
     * EST97
     * Extent: Estonia - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * This name is also used for a projected CRS (see projCRS code 3301). Replaces EST92 (code 4133).
     */
    public const EPSG_EST97 = 4180;

    /**
     * ETRF2000
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Scope: Geodesy.
     * Replaces ETRF97 (code 9066). On the publication of ETRF2005 (code 9068),  the EUREF Technical Working Group
     * recommended that ETRF2000 be the realization of ETRS89. ETRF2014 (code 9069) is technically superior to all
     * earlier realizations of ETRS89.
     */
    public const EPSG_ETRF2000 = 9067;

    /**
     * ETRF2005
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Scope: Geodesy.
     * On publication in 2007 of this CRS, the EUREF Technical Working Group recommended that ETRF2000 (EPSG code 9067)
     * remained as the preferred realization of ETRS89. Replaced by ETRF2014 (code 9069).
     */
    public const EPSG_ETRF2005 = 9068;

    /**
     * ETRF2014
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Scope: Geodesy.
     * Replaces ETRF2005 (code 9068). ETRF2014 is technically superior to ETRF2000 but ETRF2000 and other previous
     * realizations may be preferred for backward compatibility reasons. Differences between ETRF2014 and ETRF2000 can
     * reach 7cm.
     */
    public const EPSG_ETRF2014 = 9069;

    /**
     * ETRF89
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Scope: Geodesy.
     * Replaced by ETRF90 (code 9060).
     */
    public const EPSG_ETRF89 = 9059;

    /**
     * ETRF90
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Scope: Geodesy.
     * Replaces ETRF89 (code 9059). Replaced by ETRF91 (code 9061).
     */
    public const EPSG_ETRF90 = 9060;

    /**
     * ETRF91
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Scope: Geodesy.
     * Replaces ETRF90 (code 9060). Replaced by ETRF92 (code 9062).
     */
    public const EPSG_ETRF91 = 9061;

    /**
     * ETRF92
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Scope: Geodesy.
     * Replaces ETRF91 (code 9061). Replaced by ETRF93 (code 9063).
     */
    public const EPSG_ETRF92 = 9062;

    /**
     * ETRF93
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Scope: Geodesy.
     * Replaces ETRF92 (code 9062). Replaced by ETRF94 (code 9064).
     */
    public const EPSG_ETRF93 = 9063;

    /**
     * ETRF94
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Scope: Geodesy.
     * Replaces ETRF93 (code 9063). Replaced by ETRF96 (code 9065).
     */
    public const EPSG_ETRF94 = 9064;

    /**
     * ETRF96
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Scope: Geodesy.
     * Replaces ETRF94 (code 9064). Replaced by ETRF97 (code 9066).
     */
    public const EPSG_ETRF96 = 9065;

    /**
     * ETRF97
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Scope: Geodesy.
     * Replaces ETRF96 (code 9065). Replaced by ETRF2000 (code 9067).
     */
    public const EPSG_ETRF97 = 9066;

    /**
     * ETRS89
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Scope: Spatial referencing.
     * Has been realized through ETRF89, ETRF90, ETRF91, ETRF92, ETRF93, ETRF94, ETRF96, ETRF97, ETRF2000, ETRF2005 and
     * ETRF2014. This 'ensemble' covers any or all of these realizations without distinction.
     */
    public const EPSG_ETRS89 = 4258;

    /**
     * Easter Island 1967
     * Extent: Chile - Easter Island onshore.
     * Scope: Military survey.
     */
    public const EPSG_EASTER_ISLAND_1967 = 4719;

    /**
     * Egypt 1907
     * Extent: Egypt - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_EGYPT_1907 = 4229;

    /**
     * Egypt 1930
     * Extent: Egypt - onshore.
     * Scope: Geodesy.
     * Note that Egypt 1930 uses the International 1924 ellipsoid, unlike the Egypt 1907 CRS (code 4229) which uses the
     * Helmert ellipsoid. Oil industry references to the Egypt 1930 name and the Helmert ellipsoid probably mean Egypt
     * 1907.
     */
    public const EPSG_EGYPT_1930 = 4199;

    /**
     * Egypt Gulf of Suez S-650 TL
     * Extent: Egypt - Gulf of Suez.
     * Scope: Oil and gas exploration and production.
     * Differs from Egypt 1907 (CRS code 4229) by approximately 20m.
     */
    public const EPSG_EGYPT_GULF_OF_SUEZ_S_650_TL = 4706;

    /**
     * FD54
     * Extent: Faroe Islands - onshore.
     * Scope: Geodesy, cadastre, engineering survey, topographic mapping.
     * Except for cadastral survey, replaced by ED50 in the late 1970's. For cadastral survey, replaced by fk89 (CRS
     * code 4753).
     */
    public const EPSG_FD54 = 4741;

    /**
     * FD58
     * Extent: Iran - Arwaz area and onshore Gulf coast west of 54°E, Lavan Island, offshore Balal field and South
     * Pars blocks 2 and 3.
     * Scope: Geodesy.
     */
    public const EPSG_FD58 = 4132;

    /**
     * FEH2010
     * Extent: Fehmarnbelt area of Denmark and Germany.
     * Scope: Horizontal component of 3D system.
     * Created for engineering survey and construction of Fehmarnbelt tunnel.
     */
    public const EPSG_FEH2010 = 5593;

    /**
     * Fahud
     * Extent: Oman - mainland onshore.
     * Scope: Geodesy.
     * Since 1993 replaced by PSD93 geogCRS (code 4134). Maximum differences to Fahud adjustment are 20 metres.
     */
    public const EPSG_FAHUD = 4232;

    /**
     * Fatu Iva 72
     * Extent: French Polynesia - Marquesas Islands - Fatu Hiva.
     * Scope: Hydrography, topographic mapping.
     * Recomputed by IGN in 1972 using origin and observations of 1953-1955 Mission Hydrographique des Etablissement
     * Francais d'Oceanie (MHEFO 55). Replaced by RGPF, CRS code 4687.
     */
    public const EPSG_FATU_IVA_72 = 4688;

    /**
     * Fiji 1956
     * Extent: Fiji - onshore - Vanua Levu, Taveuni, Viti Levu and and immediately adjacent smaller islands of Yasawa
     * and Kandavu groups.
     * Scope: Military survey.
     * For topographic mapping replaces Viti Levu 1912 (CRS code 4752) and Vanua Levu 1915 (CRS code 4748). Replaced by
     * Fiji 1986 (CRS code 4720).
     */
    public const EPSG_FIJI_1956 = 4721;

    /**
     * Fiji 1986
     * Extent: Fiji - onshore. Includes Viti Levu, Vanua Levu, Taveuni, the Yasawa Group, the Kadavu Group, the Lau
     * Islands and Rotuma Islands.
     * Scope: Geodesy.
     * Replaces Viti Levu 1912 (CRS code 4752), Vanua Levu 1915 (CRS code 4748) and Fiji 1956 (CRS code 4721).
     */
    public const EPSG_FIJI_1986 = 4720;

    /**
     * Fort Marigot
     * Extent: Guadeloupe - onshore - St Martin and St Barthélemy islands.
     * Scope: Geodesy.
     * Replaced by RRAF 1991 (CRS code 4558).
     */
    public const EPSG_FORT_MARIGOT = 4621;

    /**
     * GBK19-IRF
     * Extent: UK - on or related to the rail route from Glasgow via Barrhead to Kilmarnock and the branch to East
     * Kilbride.
     * Scope: Engineering survey and topographic mapping for railway applications.
     * Intermediate CRS created in 2020 to assist the emulation of the ETRS89 / GBK19 SnakeGrid projected CRS through
     * transformation ETRS89 to GBK19-IRF (1) (code 9454) used in conjunction with the GBK19-TM map projection (code
     * 9455).
     */
    public const EPSG_GBK19_IRF = 9453;

    /**
     * GCGD59
     * Extent: Cayman Islands - Grand Cayman.
     * Scope: Cadastre, engineering survey, topographic mapping.
     * Superseded by CIGD11 (CRS code 6135).
     */
    public const EPSG_GCGD59 = 4723;

    /**
     * GDA2020
     * Extent: Australia including Lord Howe Island, Macquarie Islands, Ashmore and Cartier Islands, Christmas Island,
     * Cocos (Keeling) Islands, Norfolk Island. All onshore and offshore.
     * Scope: Geodesy, cadastre, engineering survey, topographic mapping.
     */
    public const EPSG_GDA2020 = 7844;

    /**
     * GDA94
     * Extent: Australia including Lord Howe Island, Macquarie Islands, Ashmore and Cartier Islands, Christmas Island,
     * Cocos (Keeling) Islands, Norfolk Island. All onshore and offshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_GDA94 = 4283;

    /**
     * GDBD2009
     * Extent: Brunei Darussalam - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Introduced from July 2009 to replace Timbalai 1948 (CRS code 4298) for government purposes.
     */
    public const EPSG_GDBD2009 = 5246;

    /**
     * GDM2000
     * Extent: Malaysia - onshore and offshore. Includes peninsular Malayasia, Sabah and Sarawak.
     * Scope: Horizontal component of 3D system.
     * Replaces all earlier Malaysian geographic CRSs.
     */
    public const EPSG_GDM2000 = 4742;

    /**
     * GGRS87
     * Extent: Greece - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_GGRS87 = 4121;

    /**
     * GR96
     * Extent: Greenland - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces all earlier Greenland geographic CRSs.
     */
    public const EPSG_GR96 = 4747;

    /**
     * GSK-2011
     * Extent: Russian Federation - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces Pulkovo 1995 (CRS code 4200) with effect from 21st October 2011.
     */
    public const EPSG_GSK_2011 = 7683;

    /**
     * Gambia
     * Extent: Gambia - onshore.
     * Scope: Topographic mapping.
     */
    public const EPSG_GAMBIA = 6894;

    /**
     * Gan 1970
     * Extent: Maldives - onshore.
     * Scope: Geodesy.
     * In some references incorrectly named "Gandajika 1970". See CRS "Gandajika", code 4685, from the Democratic
     * Republic of the Congo (Zaire).
     */
    public const EPSG_GAN_1970 = 4684;

    /**
     * Garoua
     * Extent: Cameroon - Garoua area.
     * Scope: Geodesy.
     */
    public const EPSG_GAROUA = 4197;

    /**
     * Grand Comoros
     * Extent: Comoros - Njazidja (Grande Comore).
     * Scope: Geodesy.
     */
    public const EPSG_GRAND_COMOROS = 4646;

    /**
     * Greek
     * Extent: Greece - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_GREEK = 4120;

    /**
     * Greek (Athens)
     * Extent: Greece - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_GREEK_ATHENS = 4815;

    /**
     * Grenada 1953
     * Extent: Grenada and southern Grenadine Islands - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_GRENADA_1953 = 4603;

    /**
     * Guadeloupe 1948
     * Extent: Guadeloupe - onshore - Basse-Terre, Grande-Terre, La Desirade, Marie-Galante, Les Saintes.
     * Scope: Geodesy.
     * Replaced by RRAF 1991 (CRS code 4558).
     */
    public const EPSG_GUADELOUPE_1948 = 4622;

    /**
     * Guam 1963
     * Extent: Guam - onshore. Northern Mariana Islands - onshore.
     * Scope: Cadastre, engineering survey, topographic mapping.
     * Replaced by NAD83(HARN) alias Guam Geodetic Network 1993 (CRS code 4152) from 1995.
     */
    public const EPSG_GUAM_1963 = 4675;

    /**
     * Gulshan 303
     * Extent: Bangladesh - onshore and offshore.
     * Scope: Geodesy, cadastre, engineering survey, topographic mapping.
     */
    public const EPSG_GULSHAN_303 = 4682;

    /**
     * Gusterberg (Ferro)
     * Extent: Austria - Upper Austria and Salzburg provinces. Czechia - Bohemia.
     * Scope: Cadastre.
     */
    public const EPSG_GUSTERBERG_FERRO = 8042;

    /**
     * HD1909
     * Extent: Hungary.
     * Scope: Geodesy.
     * Replaced earlier HD1863 adjustment also on Bessel ellipsoid. Both HD1863 and HD1909 were originally on Ferro
     * Prime Meridian but subsequently converted to Greenwich. Replaced by HD72 (CRS code 4237).
     */
    public const EPSG_HD1909 = 3819;

    /**
     * HD72
     * Extent: Hungary.
     * Scope: Geodesy.
     * Replaced HD1909 (EPSG CRS code 3819).
     */
    public const EPSG_HD72 = 4237;

    /**
     * HS2-IRF
     * Extent: UK - HS2 phases 1 and 2a railway corridor from London to Birmingham, Lichfield and Crewe.
     * Scope: Engineering survey for HS2 project phases 1 and 2a.
     * Intermediate CRS created to assist the emulation of the ETRS89 / HS2P1+14 SnakeGrid projected CRS through
     * transformation HS2-IRF to ETRS89 (1) (code 9302) used in conjunction with the HS2-TM map projection (code 9301).
     */
    public const EPSG_HS2_IRF = 9299;

    /**
     * HTRS96
     * Extent: Croatia - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_HTRS96 = 4761;

    /**
     * Hanoi 1972
     * Extent: Vietnam - onshore.
     * Scope: Geodesy.
     * Replaces use of Indian 1960. Replaced by VN-2000 (CRS code 4756).
     */
    public const EPSG_HANOI_1972 = 4147;

    /**
     * Hartebeesthoek94
     * Extent: Eswatini (Swaziland); Lesotho; South Africa - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces Cape (code 4222) from 1999.
     */
    public const EPSG_HARTEBEESTHOEK94 = 4148;

    /**
     * Helle 1954
     * Extent: Jan Mayen - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_HELLE_1954 = 4660;

    /**
     * Herat North
     * Extent: Afghanistan.
     * Scope: Geodesy.
     */
    public const EPSG_HERAT_NORTH = 4255;

    /**
     * Hito XVIII 1963
     * Extent: Chile - Tierra del Fuego, onshore; Argentina - Tierra del Fuego, onshore and offshore Atlantic west of
     * 66°W.
     * Scope: Geodesy.
     */
    public const EPSG_HITO_XVIII_1963 = 4254;

    /**
     * Hjorsey 1955
     * Extent: Iceland - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_HJORSEY_1955 = 4658;

    /**
     * Hong Kong 1963
     * Extent: China - Hong Kong - onshore and offshore.
     * Scope: Topographic mapping.
     * Replaced by Hong Kong 1963(67) (CRS code 4839) for military purposes only. For all purposes, replaced by Hong
     * Kong 1980 (CRS code 4611).
     */
    public const EPSG_HONG_KONG_1963 = 4738;

    /**
     * Hong Kong 1963(67)
     * Extent: China - Hong Kong - onshore and offshore.
     * Scope: Military survey.
     * For military purposes only, replaces Hong Kong 1963. Replaced by Hong Kong 1980 (CRS code 4611).
     */
    public const EPSG_HONG_KONG_1963_67 = 4739;

    /**
     * Hong Kong 1980
     * Extent: China - Hong Kong - onshore and offshore.
     * Scope: Geodesy.
     * Replaces Hong Kong 1963 and Hong Kong 1963(67).
     */
    public const EPSG_HONG_KONG_1980 = 4611;

    /**
     * Hong Kong Geodetic CS
     * Extent: China - Hong Kong - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Locally sometimes referred to as ITRF96 or WGS 84, these are not strictly correct.
     */
    public const EPSG_HONG_KONG_GEODETIC_CS = 8427;

    /**
     * Hu Tzu Shan 1950
     * Extent: Taiwan, Republic of China - onshore - Taiwan Island, Penghu (Pescadores) Islands.
     * Scope: Geodesy.
     */
    public const EPSG_HU_TZU_SHAN_1950 = 4236;

    /**
     * ID74
     * Extent: Indonesia - onshore.
     * Scope: Geodesy.
     * Replaced by DGN95.
     */
    public const EPSG_ID74 = 4238;

    /**
     * IG05 Intermediate CRS
     * Extent: Israel - onshore; Palestine Territory - onshore.
     * Scope: Intermediate stage in transformations - not used otherwise.
     * Intermediate system not used for spatial referencing - use IGD05 (CRS code 6980). Referred to in Israeli
     * documentation as "in GRS80".
     */
    public const EPSG_IG05_INTERMEDIATE_CRS = 6983;

    /**
     * IG05/12 Intermediate CRS
     * Extent: Israel - onshore; Palestine Territory - onshore.
     * Scope: Intermediate stage in transformations - not used otherwise.
     * Intermediate system not used for spatial referencing - use IGD05/12 (CRS code 6987). Referred to in Israeli
     * documentation as "in GRS80".
     */
    public const EPSG_IG05_12_INTERMEDIATE_CRS = 6990;

    /**
     * IGC 1962 6th Parallel South
     * Extent: The Democratic Republic of the Congo (Zaire) - adjacent to 6th parallel south traverse.
     * Scope: Geodesy.
     */
    public const EPSG_IGC_1962_6TH_PARALLEL_SOUTH = 4697;

    /**
     * IGCB 1955
     * Extent: The Democratic Republic of the Congo (Zaire) - Lower Congo (Bas Congo)
     * Scope: Geodesy.
     * Replaced by IGC 1962 Arc of the 6th Parallel South, except for oil industry activities.
     */
    public const EPSG_IGCB_1955 = 4701;

    /**
     * IGD05
     * Extent: Israel - onshore and offshore.
     * Scope: Geodesy.
     * Replaces Israel 1993 (CRS code 4141) from January 2005. Replaced by IGD05/12 (CRS code 7139) from March 2012.
     */
    public const EPSG_IGD05 = 7136;

    /**
     * IGD05/12
     * Extent: Israel - onshore and offshore.
     * Scope: Geodesy.
     * Replaces IGD05 (CRS code 7136) from March 2012.
     */
    public const EPSG_IGD05_12 = 7139;

    /**
     * IGM95
     * Extent: Italy - onshore and offshore; San Marino, Vatican City State.
     * Scope: Horizontal component of 3D system.
     * Replaced by RDN2008 (CRS code 6706) from 2011-11-10.
     */
    public const EPSG_IGM95 = 4670;

    /**
     * IGN 1962 Kerguelen
     * Extent: French Southern Territories - Kerguelen onshore.
     * Scope: Geodesy.
     * Replaced by RGTAAF07 (CRS code 7073).
     */
    public const EPSG_IGN_1962_KERGUELEN = 4698;

    /**
     * IGN Astro 1960
     * Extent: Mauritania - onshore.
     * Scope: Minerals management (including oil and gas exploration and production).
     * Mining title descriptions referring only to "Clarke 1880 ellipsoid" should be assumed to be referenced to this
     * CRS. Oil industry considers Mining Cadastre 1999 to be exactly defined through tfm codes 15857-9. Replaced by
     * Mauritania 1999 (code 4702).
     */
    public const EPSG_IGN_ASTRO_1960 = 4700;

    /**
     * IGN53 Mare
     * Extent: New Caledonia - Loyalty Islands - Mare.
     * Scope: Geodesy.
     * Replaced by RGNC91-93 (CRS code 4749).
     */
    public const EPSG_IGN53_MARE = 4641;

    /**
     * IGN56 Lifou
     * Extent: New Caledonia - Loyalty Islands - Lifou.
     * Scope: Geodesy.
     * Replaced by RGNC91-93 (CRS code 4749).
     */
    public const EPSG_IGN56_LIFOU = 4633;

    /**
     * IGN63 Hiva Oa
     * Extent: French Polynesia - Marquesas Islands - Hiva Oa and Tahuata.
     * Scope: Hydrography, topographic mapping.
     * Replaced by RGPF, CRS code 4687.
     */
    public const EPSG_IGN63_HIVA_OA = 4689;

    /**
     * IGN72 Grande Terre
     * Extent: New Caledonia - Grande Terre.
     * Scope: Geodesy.
     * Replaced by RGNC91-93 (CRS code 4749).
     */
    public const EPSG_IGN72_GRANDE_TERRE = 4662;

    /**
     * IGN72 Nuku Hiva
     * Extent: French Polynesia - Marquesas Islands - Nuku Hiva, Ua Huka and Ua Pou.
     * Scope: Geodesy.
     * Replaced by RGPF, CRS code 4687.
     */
    public const EPSG_IGN72_NUKU_HIVA = 4630;

    /**
     * IGRS
     * Extent: Iraq - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_IGRS = 3889;

    /**
     * IGS00
     * Extent: World.
     * Scope: Geodesy.
     * Adopted by the International GNSS Service (IGS) from 2001-12-02 through 2004-01-10. Replaces IGS97, replaced by
     * IGb00 (CRS codes 9003 and 9009). For all practical purposes IGS00 is equivalent to ITRF2000.
     */
    public const EPSG_IGS00 = 9006;

    /**
     * IGS05
     * Extent: World.
     * Scope: Geodesy.
     * Adopted by the International GNSS Service (IGS) from 2006-11-05 through 2011-04-16. Replaces IGb00, replaced by
     * IGS08 (CRS codes 9009 and 9014). For all practical purposes IGS05 is equivalent to ITRF2005.
     */
    public const EPSG_IGS05 = 9012;

    /**
     * IGS08
     * Extent: World.
     * Scope: Geodesy.
     * Used for products from International GNSS Service (IGS) analysis centres from 2011-04-17 through 2012-10-06.
     * Replaces IGS05 (code 9012). Replaced by IGb08 (code 9017). For most practical purposes IGS08 is equivalent to
     * ITRF2008.
     */
    public const EPSG_IGS08 = 9014;

    /**
     * IGS14
     * Extent: World.
     * Scope: Geodesy.
     * Used for products from the International GNSS Service (IGS) from 2017-01-29 to 2020-05-16. Replaces IGb08 (code
     * 9017), replaced by IGb14 (code 9380). For most practical purposes IGS14 is equivalent to ITRF2014.
     */
    public const EPSG_IGS14 = 9019;

    /**
     * IGS97
     * Extent: World.
     * Scope: Geodesy.
     * Adopted by the International GNSS Service (IGS) from 2000-06-04 through 2001-12-01. Replaced by IGS00 (CRS code
     * 9006). For all practical purposes IGS97 is equivalent to ITRF97.
     */
    public const EPSG_IGS97 = 9003;

    /**
     * IGb00
     * Extent: World.
     * Scope: Geodesy.
     * Adopted by the International GNSS Service (IGS) from 2004-01-11 through 2006-11-04. Replaces IGS00, replaced by
     * IGS05 (CRS codes 9006 and 9012). For all practical purposes IGb00 is equivalent to ITRF2000.
     */
    public const EPSG_IGB00 = 9009;

    /**
     * IGb08
     * Extent: World.
     * Scope: Geodesy.
     * Adopted by the International GNSS Service (IGS) from 2012-10-07 through 2017-01-28. Replaces IGS08, replaced by
     * IGS14 (CRS codes 9014 and 9019). For all practical purposes IGb08 is equivalent to ITRF2008.
     */
    public const EPSG_IGB08 = 9017;

    /**
     * IGb14
     * Extent: World.
     * Scope: Geodesy.
     * Used for products from the International GNSS Service (IGS) from 2020-05-17. Replaces IGS14 (code 9019). For
     * most practical purposes IGb14 is equivalent to ITRF2014.
     */
    public const EPSG_IGB14 = 9380;

    /**
     * IKBD-92
     * Extent: Iraq - Kuwait boundary.
     * Scope: Geodesy.
     */
    public const EPSG_IKBD_92 = 4667;

    /**
     * IRENET95
     * Extent: Ireland - onshore. United Kingdom (UK) - Northern Ireland (Ulster) - onshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_IRENET95 = 4173;

    /**
     * ISN2004
     * Extent: Iceland - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces ISN93 (CRS code 4659).
     */
    public const EPSG_ISN2004 = 5324;

    /**
     * ISN2016
     * Extent: Iceland - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces ISN2004 (CRS code 5324) from September 2017.
     */
    public const EPSG_ISN2016 = 8086;

    /**
     * ISN93
     * Extent: Iceland - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaced by ISN2004 (CRS code 5324).
     */
    public const EPSG_ISN93 = 4659;

    /**
     * ITRF2000
     * Extent: World.
     * Scope: Geodesy.
     * Replaces ITRF97 (code 8996). Replaced by ITRF2005 (code 8998).
     */
    public const EPSG_ITRF2000 = 8997;

    /**
     * ITRF2005
     * Extent: World.
     * Scope: Geodesy.
     * Replaces ITRF2000 (code 8997). Replaced by ITRF2008 (code 8999).
     */
    public const EPSG_ITRF2005 = 8998;

    /**
     * ITRF2008
     * Extent: World.
     * Scope: Geodesy.
     * Replaces ITRF2005 (code 8998). Replaced by ITRF2014 (code 9000).
     */
    public const EPSG_ITRF2008 = 8999;

    /**
     * ITRF2014
     * Extent: World.
     * Scope: Geodesy.
     * Replaces ITRF2008 (code 8999).
     */
    public const EPSG_ITRF2014 = 9000;

    /**
     * ITRF88
     * Extent: World.
     * Scope: Geodesy.
     * Replaced by ITRF89 (code 8989).
     */
    public const EPSG_ITRF88 = 8988;

    /**
     * ITRF89
     * Extent: World.
     * Scope: Geodesy.
     * Replaces ITRF88 (code 8988). Replaced by ITRF90 (code 8990).
     */
    public const EPSG_ITRF89 = 8989;

    /**
     * ITRF90
     * Extent: World.
     * Scope: Geodesy.
     * Replaces ITRF89 (code 8989). Replaced by ITRF91 (code 8991).
     */
    public const EPSG_ITRF90 = 8990;

    /**
     * ITRF91
     * Extent: World.
     * Scope: Geodesy.
     * Replaces ITRF90 (code 8990). Replaced by ITRF92 (code 8992).
     */
    public const EPSG_ITRF91 = 8991;

    /**
     * ITRF92
     * Extent: World.
     * Scope: Geodesy.
     * Replaces ITRF91 (code 8991). Replaced by ITRF93 (code 8993).
     */
    public const EPSG_ITRF92 = 8992;

    /**
     * ITRF93
     * Extent: World.
     * Scope: Geodesy.
     * Replaces ITRF92 (code 8992). Replaced by ITRF94 (code 8994).
     */
    public const EPSG_ITRF93 = 8993;

    /**
     * ITRF94
     * Extent: World.
     * Scope: Geodesy.
     * Replaces ITRF93 (code 8993). Replaced by ITRF96 (code 8995).
     */
    public const EPSG_ITRF94 = 8994;

    /**
     * ITRF96
     * Extent: World.
     * Scope: Geodesy.
     * Replaces ITRF94 (code 8994). Replaced by ITRF97 (code 8996).
     */
    public const EPSG_ITRF96 = 8995;

    /**
     * ITRF97
     * Extent: World.
     * Scope: Geodesy.
     * Replaces ITRF96 (code 8995). Replaced by ITRF2000 (code 8997).
     */
    public const EPSG_ITRF97 = 8996;

    /**
     * Indian 1954
     * Extent: Myanmar (Burma) - onshore; Thailand - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_INDIAN_1954 = 4239;

    /**
     * Indian 1960
     * Extent: Cambodia - onshore; Vietnam - onshore and offshore Cuu Long basin.
     * Scope: Geodesy.
     */
    public const EPSG_INDIAN_1960 = 4131;

    /**
     * Indian 1975
     * Extent: Thailand - onshore plus offshore Gulf of Thailand.
     * Scope: Geodesy.
     */
    public const EPSG_INDIAN_1975 = 4240;

    /**
     * Israel 1993
     * Extent: Israel - onshore; Palestine Territory - onshore.
     * Scope: Geodesy.
     * Replaces Palestine 1923 (CRS code 4281) from June 1998. Replaced by IGD05 (CRS code 6980) from January 2005.
     */
    public const EPSG_ISRAEL_1993 = 4141;

    /**
     * Iwo Jima 1945
     * Extent: Japan - Iwo Jima island.
     * Scope: Military survey.
     */
    public const EPSG_IWO_JIMA_1945 = 4709;

    /**
     * JAD2001
     * Extent: Jamaica - onshore and offshore. Includes Morant Cays and Pedro Cays.
     * Scope: Horizontal component of 3D system.
     * Replaces JAD69 (CRS code 4242).
     */
    public const EPSG_JAD2001 = 4758;

    /**
     * JAD69
     * Extent: Jamaica - onshore.
     * Scope: Geodesy.
     * Replaced by JAD2001 (CRS code 4758).
     */
    public const EPSG_JAD69 = 4242;

    /**
     * JGD2000
     * Extent: Japan - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces Tokyo (CRS code 4301) from April 2002. From 21st October 2011 replaced by JGD2011 (CRS code 6668).
     */
    public const EPSG_JGD2000 = 4612;

    /**
     * JGD2011
     * Extent: Japan - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces JGD2000 (CRS code 4612) with effect from 21st October 2011.
     */
    public const EPSG_JGD2011 = 6668;

    /**
     * Jamaica 1875
     * Extent: Jamaica - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_JAMAICA_1875 = 4241;

    /**
     * Johnston Island 1961
     * Extent: United States Minor Outlying Islands - Johnston Island.
     * Scope: Military survey.
     */
    public const EPSG_JOHNSTON_ISLAND_1961 = 4725;

    /**
     * Jouik 1961
     * Extent: Mauritania - coastal area north of Cape Timiris.
     * Scope: Hydrography and nautical charting.
     * Replaced by Mauritania 1999 (CRS code 4702).
     */
    public const EPSG_JOUIK_1961 = 4679;

    /**
     * KKJ
     * Extent: Finland - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_KKJ = 4123;

    /**
     * KOC
     * Extent: Kuwait - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_KOC = 4246;

    /**
     * KOSOVAREF01
     * Extent: Kosovo.
     * Scope: Horizontal component of 3D system.
     * In Kosovo replaces MGI 1901 (CRS code 3906).
     */
    public const EPSG_KOSOVAREF01 = 9140;

    /**
     * KSA-GRF17
     * Extent: Saudi Arabia - onshore and offshore.
     * Scope: Geodesy, cadastre, engineering survey, topographic mapping.
     */
    public const EPSG_KSA_GRF17 = 9333;

    /**
     * KUDAMS
     * Extent: Kuwait - Kuwait City.
     * Scope: Geodesy.
     */
    public const EPSG_KUDAMS = 4319;

    /**
     * Kalianpur 1880
     * Extent: Bangladesh - onshore; India - mainland onshore; Myanmar (Burma) - onshore; Pakistan - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_KALIANPUR_1880 = 4243;

    /**
     * Kalianpur 1937
     * Extent: Bangladesh - onshore; India - mainland onshore; Myanmar - onshore and Moattama area offshore; Pakistan -
     * onshore.
     * Scope: Geodesy.
     * Adopts 1937 metric conversion of 0.30479841 metres per Indian foot.
     */
    public const EPSG_KALIANPUR_1937 = 4144;

    /**
     * Kalianpur 1962
     * Extent: Pakistan - onshore and offshore.
     * Scope: Geodesy.
     * Adopts 1962 metric conversion of 0.3047996 metres per Indian foot.
     */
    public const EPSG_KALIANPUR_1962 = 4145;

    /**
     * Kalianpur 1975
     * Extent: India - mainland onshore.
     * Scope: Geodesy.
     * Adopts 1975 metric conversion of 0.3047995 metres per Indian foot.
     */
    public const EPSG_KALIANPUR_1975 = 4146;

    /**
     * Kandawala
     * Extent: Sri Lanka - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_KANDAWALA = 4244;

    /**
     * Karbala 1979
     * Extent: Iraq - onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * Geodetic network established by Polservice consortium. Replaces Nahrwan 1934 (CRS code 4744). Replaced by IGRS
     * (CRS code 3889). At time of record population, information regarding usage within oil sector is not available.
     */
    public const EPSG_KARBALA_1979 = 4743;

    /**
     * Kasai 1953
     * Extent: The Democratic Republic of the Congo (Zaire) - Kasai - south of 5°S and east of 21°30'E.
     * Scope: Geodesy.
     */
    public const EPSG_KASAI_1953 = 4696;

    /**
     * Katanga 1955
     * Extent: The Democratic Republic of the Congo (Zaire) - Katanga.
     * Scope: Geodesy.
     */
    public const EPSG_KATANGA_1955 = 4695;

    /**
     * Kertau (RSO)
     * Extent: Malaysia - West Malaysia; Singapore.
     * Scope: Metrication of RSO grid.
     * Used only for metrication of RSO grid. See Kertau 1968 (CRS code 4245) for other purposes. Replaced by GDM2000
     * (CRS code 4742).
     */
    public const EPSG_KERTAU_RSO = 4751;

    /**
     * Kertau 1968
     * Extent: Malaysia - West Malaysia onshore and offshore east coast; Singapore - onshore and offshore.
     * Scope: Geodesy.
     * Not used for metrication of RSO grid - see Kertau (RSO) (CRS code 4751). Replaced by GDM2000 (CRS code 4742).
     */
    public const EPSG_KERTAU_1968 = 4245;

    /**
     * Korea 2000
     * Extent: Republic of Korea (South Korea) - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_KOREA_2000 = 4737;

    /**
     * Korean 1985
     * Extent: Republic of Korea (South Korea) - onshore.
     * Scope: Geodesy.
     * Replaces use of Tokyo datum.
     */
    public const EPSG_KOREAN_1985 = 4162;

    /**
     * Korean 1995
     * Extent: Republic of Korea (South Korea) - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_KOREAN_1995 = 4166;

    /**
     * Kousseri
     * Extent: Cameroon - N'Djamena area.
     * Scope: Geodesy.
     */
    public const EPSG_KOUSSERI = 4198;

    /**
     * Kusaie 1951
     * Extent: Federated States of Micronesia - Kosrae (Kusaie).
     * Scope: Military survey.
     */
    public const EPSG_KUSAIE_1951 = 4735;

    /**
     * Kyrg-06
     * Extent: Kyrgyzstan.
     * Scope: Horizontal component of 3D system.
     * Replaces usage of Pulkovo 1942 in Kyrgyzstan from 7th October 2010.
     */
    public const EPSG_KYRG_06 = 7686;

    /**
     * LGD2006
     * Extent: Libya - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces ELD79.
     */
    public const EPSG_LGD2006 = 4754;

    /**
     * LKS92
     * Extent: Latvia - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * This name is also used for a projected CRS (see projCRS code 3059).
     */
    public const EPSG_LKS92 = 4661;

    /**
     * LKS94
     * Extent: Lithuania - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_LKS94 = 4669;

    /**
     * La Canoa
     * Extent: Venezuela - onshore.
     * Scope: Geodesy.
     * This CRS is incorporated within PSAD56. See CRS code 4248.
     */
    public const EPSG_LA_CANOA = 4247;

    /**
     * Lake
     * Extent: Venezuela - Lake Maracaibo area, onshore and offshore in lake.
     * Scope: Geodesy.
     */
    public const EPSG_LAKE = 4249;

    /**
     * Lao 1993
     * Extent: Laos.
     * Scope: Horizontal component of 3D system.
     * Replaces Vientiane 1982. Replaced by Lao 1997. Lao 1993 coordinate values are within 1m of Lao 1997 values.
     */
    public const EPSG_LAO_1993 = 4677;

    /**
     * Lao 1997
     * Extent: Laos.
     * Scope: Horizontal component of 3D system.
     * Replaces Lao 1993 which in turn replaced Vientiane 1982. Lao 1993 coordinate values are within 1m of Lao 1997
     * values. Vientiane 1982 coordinate values are within 3m of Lao 1997 values.
     */
    public const EPSG_LAO_1997 = 4678;

    /**
     * Le Pouce 1934
     * Extent: Mauritius - mainland onshore.
     * Scope: Geodesy.
     * Densified with a GPS-derived coordinate set for 80 stations in 1994. This 1994 coordinate set is sometimes
     * referred to as "Mauritius 1994".
     */
    public const EPSG_LE_POUCE_1934 = 4699;

    /**
     * Leigon
     * Extent: Ghana - onshore and offshore.
     * Scope: Geodesy.
     * Replaced Accra (code 4168) from 1978.
     */
    public const EPSG_LEIGON = 4250;

    /**
     * Liberia 1964
     * Extent: Liberia - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_LIBERIA_1964 = 4251;

    /**
     * Lisbon
     * Extent: Portugal - mainland - onshore.
     * Scope: Geodesy.
     * Replaces Lisbon 1890 system which used Bessel 1841 ellipsoid (code 4666). Replaced by Datum 73 (code 4274).
     */
    public const EPSG_LISBON = 4207;

    /**
     * Lisbon (Lisbon)
     * Extent: Portugal - mainland - onshore.
     * Scope: Geodesy.
     * Replaces Lisbon 1890 (Lisbon) system which used Bessel 1841 ellipsoid (code 4904). Replaced by Datum 73 (code
     * 4274).
     */
    public const EPSG_LISBON_LISBON = 4803;

    /**
     * Lisbon 1890
     * Extent: Portugal - mainland - onshore.
     * Scope: Geodesy.
     * Replaced by Lisbon 1937 system which uses International 1924 ellipsoid (code 4207).
     */
    public const EPSG_LISBON_1890 = 4666;

    /**
     * Lisbon 1890 (Lisbon)
     * Extent: Portugal - mainland - onshore.
     * Scope: Geodesy.
     * Replaced by Lisbon 1937 system which uses International 1924 ellipsoid (code 4803).
     */
    public const EPSG_LISBON_1890_LISBON = 4904;

    /**
     * Locodjo 1965
     * Extent: Côte d'Ivoire (Ivory Coast) - onshore and offshore.
     * Scope: Geodesy.
     * Replaced by Abidjan 1987 (EPSG code 4143).
     */
    public const EPSG_LOCODJO_1965 = 4142;

    /**
     * Loma Quintana
     * Extent: Venezuela - onshore north of approximately 7°45'N.
     * Scope: Geodesy.
     * Replaced by La Canoa (code 4247).
     */
    public const EPSG_LOMA_QUINTANA = 4288;

    /**
     * Lome
     * Extent: Togo - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_LOME = 4252;

    /**
     * Luxembourg 1930
     * Extent: Luxembourg.
     * Scope: Geodesy.
     */
    public const EPSG_LUXEMBOURG_1930 = 4181;

    /**
     * Luzon 1911
     * Extent: Philippines - onshore.
     * Scope: Geodesy.
     * Replaced by PRS92 (CRS code 4683).
     */
    public const EPSG_LUZON_1911 = 4253;

    /**
     * M'poraloko
     * Extent: Gabon - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_M_PORALOKO = 4266;

    /**
     * MACARIO SOLIS
     * Extent: Panama - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_MACARIO_SOLIS = 5371;

    /**
     * MAGNA-SIRGAS
     * Extent: Colombia - onshore and offshore. Includes San Andres y Providencia, Malpelo Islands, Roncador Bank,
     * Serrana Bank and Serranilla Bank.
     * Scope: Horizontal component of 3D system.
     * Replaces Bogota 1975 (CRS code .4218).
     */
    public const EPSG_MAGNA_SIRGAS = 4686;

    /**
     * MARGEN
     * Extent: Bolivia.
     * Scope: Horizontal component of 3D system.
     * Replaces PSAD56 (CRS code 4248) in Bolivia.
     */
    public const EPSG_MARGEN = 5354;

    /**
     * MGI
     * Extent: Austria.
     * Scope: Geodesy.
     * Retrospectively defined as derived after the introduction of geographic 3D CRS (code 9267).
     */
    public const EPSG_MGI = 4312;

    /**
     * MGI (Ferro)
     * Extent: Austria. Bosnia and Herzegovina. Croatia - onshore. Kosovo. Montenegro - onshore. North Macedonia.
     * Serbia. Slovenia - onshore.
     * Scope: Geodesy.
     * Replaced by MGI (CRS code 4312) in Austria and MGI 1901 (CRS code 3906) in former Yugoslavia.
     */
    public const EPSG_MGI_FERRO = 4805;

    /**
     * MGI 1901
     * Extent: Boznia and Herzegovina; Croatia - onshore; Kosovo; Montenegro - onshore; North Macedonia; Serbia;
     * Slovenia - onshore.
     * Scope: Geodesy.
     * Adopted in 1924 replacing MGI (Ferro) (CRS code 4805). Densified in 1948. In Slovenia replaced by D96 (CRS code
     * 4765). In Croatia replaced by HTRS96 (CRS code 4761). In Serbia replaced by SREF98 and then by SRB_ETRS89
     * (STRS00) (CRS codes 4075 and 8691).
     */
    public const EPSG_MGI_1901 = 3906;

    /**
     * MML07-IRF
     * Extent: UK - on or related to the Midland Mainline rail route from Sheffield to London.
     * Scope: Engineering survey and topographic mapping for railway applications.
     * Intermediate CRS created in 2020 to assist the emulation of the ETRS89 / MML07 SnakeGrid projected CRS t(code
     * 9373) hrough transformation ETRS89 to MML07-IRF (1) (code 9369) used in conjunction with the MML07-TM map
     * projection (code 9370).
     */
    public const EPSG_MML07_IRF = 9372;

    /**
     * MMN
     * Extent: Argentina - Tierra del Fuego onshore.
     * Scope: Oil and gas exploration and production.
     */
    public const EPSG_MMN = 9251;

    /**
     * MMS
     * Extent: Argentina - Tierra del Fuego onshore.
     * Scope: Oil and gas exploration and production.
     */
    public const EPSG_MMS = 9253;

    /**
     * MOLDREF99
     * Extent: Moldova.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_MOLDREF99 = 4023;

    /**
     * MOP78
     * Extent: Wallis and Futuna - Wallis.
     * Scope: Geodesy.
     * Replaced by RGWF96 (CRS code 8900) for geodetic survey and RGWF96 (lon-lat) (CRS code 8902) for GIS.
     */
    public const EPSG_MOP78 = 4639;

    /**
     * MTRF-2000
     * Extent: Saudi Arabia - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces Ain el Abd (CRS 4204) in Saudi Arabia.
     */
    public const EPSG_MTRF_2000 = 8818;

    /**
     * Macao 1920
     * Extent: China - Macao - onshore and offshore.
     * Scope: Geodesy, cadastre, engineering survey, topographic mapping.
     */
    public const EPSG_MACAO_1920 = 8428;

    /**
     * Macao 2008
     * Extent: China - Macao - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Locally sometimes referred to as ITRF2005, this is not strictly correct.
     */
    public const EPSG_MACAO_2008 = 8431;

    /**
     * Madrid 1870 (Madrid)
     * Extent: Spain - mainland onshore.
     * Scope: Geodesy.
     * Replaced by ED50 in 1970.
     */
    public const EPSG_MADRID_1870_MADRID = 4903;

    /**
     * Madzansua
     * Extent: Mozambique - west - Tete province.
     * Scope: Geodesy.
     * Replaced by values transformed to Tete GeogCRS (code 4127).
     */
    public const EPSG_MADZANSUA = 4128;

    /**
     * Mahe 1971
     * Extent: Seychelles - Mahe Island.
     * Scope: Military survey.
     * This CRS has no known local application. South East Island 1943 (CRS codes 6892 and 6915) is used for
     * topographic mapping, cadastral and hydrographic survey.
     */
    public const EPSG_MAHE_1971 = 4256;

    /**
     * Makassar
     * Extent: Indonesia - south west Sulawesi.
     * Scope: Geodesy.
     */
    public const EPSG_MAKASSAR = 4257;

    /**
     * Makassar (Jakarta)
     * Extent: Indonesia - south west Sulawesi.
     * Scope: Geodesy.
     */
    public const EPSG_MAKASSAR_JAKARTA = 4804;

    /**
     * Malongo 1987
     * Extent: Angola (Cabinda) - offshore; The Democratic Republic of the Congo (Zaire) - offshore.
     * Scope: Oil and gas exploration and production.
     * Replaced Mhast (offshore) (CRS code 4705) in 1987. References to "Mhast" since 1987 often should have stated
     * "Malongo 1987".
     */
    public const EPSG_MALONGO_1987 = 4259;

    /**
     * Manoca 1962
     * Extent: Cameroon - coastal area.
     * Scope: Geodesy.
     * Replaces Doula 1948 (code 4192). The intent of the Bukavu 1953 conference was to adopt the Clarke 1880 (RGS)
     * ellipsoid (code 7012) but in practice this CRS has used the IGN version.
     */
    public const EPSG_MANOCA_1962 = 4193;

    /**
     * Marcus Island 1952
     * Extent: Japan - onshore - Tokyo-to south of 28°N and east of 143°E - Minamitori-shima (Marcus Island).
     * Scope: Military survey.
     */
    public const EPSG_MARCUS_ISLAND_1952 = 4711;

    /**
     * Marshall Islands 1960
     * Extent: Marshall Islands - onshore. Wake atoll onshore.
     * Scope: Military survey.
     */
    public const EPSG_MARSHALL_ISLANDS_1960 = 4732;

    /**
     * Martinique 1938
     * Extent: Martinique - onshore.
     * Scope: Geodesy.
     * Replaced by RRAF 1991 (CRS code 4558).
     */
    public const EPSG_MARTINIQUE_1938 = 4625;

    /**
     * Massawa
     * Extent: Eritrea - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_MASSAWA = 4262;

    /**
     * Maupiti 83
     * Extent: French Polynesia - Society Islands - Maupiti.
     * Scope: Hydrography, topographic mapping.
     * Replaced by RGPF, CRS code 4687.
     */
    public const EPSG_MAUPITI_83 = 4692;

    /**
     * Mauritania 1999
     * Extent: Mauritania - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces all earlier CRSs.
     */
    public const EPSG_MAURITANIA_1999 = 4702;

    /**
     * Merchich
     * Extent: Africa - Morocco and Western Sahara - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_MERCHICH = 4261;

    /**
     * Mexico ITRF2008
     * Extent: Mexico - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces Mexico ITRF92 (CRS code 4483) from December 2010.
     */
    public const EPSG_MEXICO_ITRF2008 = 6365;

    /**
     * Mexico ITRF92
     * Extent: Mexico - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces NAD27 (CRS code 4267). Replaced by Mexico ITRF2008 (CRS code 6365) from December 2010.
     */
    public const EPSG_MEXICO_ITRF92 = 4483;

    /**
     * Mhast (offshore)
     * Extent: Angola (Cabinda) - offshore; The Democratic Republic of the Congo (Zaire) - offshore.
     * Scope: Oil and gas exploration and production.
     * Used by CABGOC. Differs from Mhast (onshore) by approximately 10m. Replaced by Malongo 1987 (CRS code 4259) in
     * 1987.
     */
    public const EPSG_MHAST_OFFSHORE = 4705;

    /**
     * Mhast (onshore)
     * Extent: Angola (Cabinda) - onshore and offshore; The Democratic Republic of the Congo (Zaire) - onshore coastal
     * area and offshore.
     * Scope: Oil and gas exploration and production.
     * Adopted by CABGOC with intention of being Mhast 1951 (CRS code 4703) but because it uses a different ellipsoid
     * it is a different system. From 1979, offshore use replaced by Mhast (offshore) (CRS code 4705) from which this
     * CRS differes by approx. 10m.
     */
    public const EPSG_MHAST_ONSHORE = 4704;

    /**
     * Mhast 1951
     * Extent: Angola - Cabinda.
     * Scope: Coastal hydrography. Not used by oil industry.
     * A variation of this system has been adopted by the oil industry but using the International 1924 ellipsoid - see
     * Mhast (onshore) and Mhast (offshore) (codes 4704 and 4705).
     */
    public const EPSG_MHAST_1951 = 4703;

    /**
     * Midway 1961
     * Extent: United States Minor Outlying Islands - Midway Islands - Sand Island and Eastern Island.
     * Scope: Military survey.
     */
    public const EPSG_MIDWAY_1961 = 4727;

    /**
     * Minna
     * Extent: Nigeria - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_MINNA = 4263;

    /**
     * Monte Mario
     * Extent: Italy - onshore and offshore; San Marino, Vatican City State.
     * Scope: Geodesy, offshore minerals management.
     */
    public const EPSG_MONTE_MARIO = 4265;

    /**
     * Monte Mario (Rome)
     * Extent: Italy - onshore and offshore; San Marino, Vatican City State.
     * Scope: Geodesy, onshore minerals management.
     */
    public const EPSG_MONTE_MARIO_ROME = 4806;

    /**
     * Montserrat 1958
     * Extent: Montserrat - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_MONTSERRAT_1958 = 4604;

    /**
     * Moorea 87
     * Extent: French Polynesia - Society Islands - Moorea.
     * Scope: Hydrography, topographic mapping.
     * Replaces Tahiti 52 (CRS code 4628) in Moorea. Replaced by RGPF (CRS code 4687).
     */
    public const EPSG_MOOREA_87 = 4691;

    /**
     * Mount Dillon
     * Extent: Trinidad and Tobago - Tobago - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_MOUNT_DILLON = 4157;

    /**
     * Moznet
     * Extent: Mozambique - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_MOZNET = 4130;

    /**
     * NAD27
     * Extent: North and central America: Antigua and Barbuda - onshore. Bahamas - onshore plus offshore over internal
     * continental shelf only. Belize - onshore. British Virgin Islands - onshore. Canada onshore - Alberta, British
     * Columbia, Manitoba, New Brunswick, Newfoundland and Labrador, Northwest Territories, Nova Scotia, Nunavut,
     * Ontario, Prince Edward Island, Quebec, Saskatchewan and Yukon - plus offshore east coast. Cuba - onshore and
     * offshore. El Salvador - onshore. Guatemala - onshore. Honduras - onshore. Panama - onshore. Puerto Rico -
     * onshore. Mexico - onshore plus offshore east coast. Nicaragua - onshore. United States (USA) onshore and
     * offshore - Alabama, Alaska, Arizona, Arkansas, California, Colorado, Connecticut, Delaware, Florida, Georgia,
     * Idaho, Illinois, Indiana, Iowa, Kansas, Kentucky, Louisiana, Maine, Maryland, Massachusetts, Michigan,
     * Minnesota, Mississippi, Missouri, Montana, Nebraska, Nevada, New Hampshire, New Jersey, New Mexico, New York,
     * North Carolina, North Dakota, Ohio, Oklahoma, Oregon, Pennsylvania, Rhode Island, South Carolina, South Dakota,
     * Tennessee, Texas, Utah, Vermont, Virginia, Washington, West Virginia, Wisconsin and Wyoming - plus offshore . US
     * Virgin Islands - onshore.
     * Scope: Geodesy.
     * Note: this CRS includes longitudes which are POSITIVE EAST. Replaced by NAD27(76) (code 4608) in Ontario, CGQ77
     * (code 4609) in Quebec, Mexican Datum of  1993 (code 4483) in Mexico, NAD83 (code 4269) in Canada (excl. Ontario
     * & Quebec) & USA.
     */
    public const EPSG_NAD27 = 4267;

    /**
     * NAD27(76)
     * Extent: Canada - Ontario.
     * Scope: Geodesy.
     * Note: this CRS includes longitudes which are POSITIVE EAST.
     */
    public const EPSG_NAD27_76 = 4608;

    /**
     * NAD27(CGQ77)
     * Extent: Canada - Quebec.
     * Scope: Geodesy.
     * Note: this CRS includes longitudes which are POSITIVE EAST.
     */
    public const EPSG_NAD27_CGQ77 = 4609;

    /**
     * NAD83
     * Extent: North America - onshore and offshore: Canada - Alberta; British Columbia; Manitoba; New Brunswick;
     * Newfoundland and Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec;
     * Saskatchewan; Yukon. Puerto Rico. United States (USA) - Alabama; Alaska; Arizona; Arkansas; California;
     * Colorado; Connecticut; Delaware; Florida; Georgia; Hawaii; Idaho; Illinois; Indiana; Iowa; Kansas; Kentucky;
     * Louisiana; Maine; Maryland; Massachusetts; Michigan; Minnesota; Mississippi; Missouri; Montana; Nebraska;
     * Nevada; New Hampshire; New Jersey; New Mexico; New York; North Carolina; North Dakota; Ohio; Oklahoma; Oregon;
     * Pennsylvania; Rhode Island; South Carolina; South Dakota; Tennessee; Texas; Utah; Vermont; Virginia; Washington;
     * West Virginia; Wisconsin; Wyoming. US Virgin Islands.  British Virgin Islands.
     * Scope: Geodesy.
     * Longitude is POSITIVE EAST. The adjustment included connections to Greenland and Mexico but the system was not
     * adopted there. For applications with an accuracy of better than 1m replaced by NAD83(HARN) in the US and PRVI
     * and by NAD83(CSRS) in Canada.
     */
    public const EPSG_NAD83 = 4269;

    /**
     * NAD83(2011)
     * Extent: Puerto Rico - onshore and offshore. United States (USA) onshore and offshore - Alabama; Alaska; Arizona;
     * Arkansas; California; Colorado; Connecticut; Delaware; Florida; Georgia; Idaho; Illinois; Indiana; Iowa; Kansas;
     * Kentucky; Louisiana; Maine; Maryland; Massachusetts; Michigan; Minnesota; Mississippi; Missouri; Montana;
     * Nebraska; Nevada; New Hampshire; New Jersey; New Mexico; New York; North Carolina; North Dakota; Ohio; Oklahoma;
     * Oregon; Pennsylvania; Rhode Island; South Carolina; South Dakota; Tennessee; Texas; Utah; Vermont; Virginia;
     * Washington; West Virginia; Wisconsin; Wyoming. US Virgin Islands - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Note: this CRS includes longitudes which are POSITIVE EAST. Replaces NAD83(CORS96) and NAD83(NSRS2007) (CRS
     * codes 6783 and 4759).
     */
    public const EPSG_NAD83_2011 = 6318;

    /**
     * NAD83(CORS96)
     * Extent: Puerto Rico - onshore and offshore. United States (USA) onshore and offshore - Alabama; Alaska; Arizona;
     * Arkansas; California; Colorado; Connecticut; Delaware; Florida; Georgia; Idaho; Illinois; Indiana; Iowa; Kansas;
     * Kentucky; Louisiana; Maine; Maryland; Massachusetts; Michigan; Minnesota; Mississippi; Missouri; Montana;
     * Nebraska; Nevada; New Hampshire; New Jersey; New Mexico; New York; North Carolina; North Dakota; Ohio; Oklahoma;
     * Oregon; Pennsylvania; Rhode Island; South Carolina; South Dakota; Tennessee; Texas; Utah; Vermont; Virginia;
     * Washington; West Virginia; Wisconsin; Wyoming. US Virgin Islands - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Note: this CRS includes POSITIVE EAST longitudes. Replaced by NAD83(2011) (CRS code 6318) from 2011-09-06.
     */
    public const EPSG_NAD83_CORS96 = 6783;

    /**
     * NAD83(CSRS)
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Scope: Horizontal component of 3D system.
     * Includes all versions of NAD83(CSRS) from v2 [CSRS98] onwards without specific identification. As such it has an
     * accuracy of approximately 1m. Note: this CRS includes longitudes which are POSITIVE EAST.
     */
    public const EPSG_NAD83_CSRS = 4617;

    /**
     * NAD83(CSRS)v2
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Scope: Horizontal component of 3D system.
     * Adopted by the Canadian federal government from 1998-01-01 and by the provincial governments of British
     * Columbia, New Brunswick, Prince Edward Island and Quebec. Replaces NAD83(CSRS96). Replaced by NAD83(CSRS)v3
     * (code 8240). Longitudes are POSITIVE EAST.
     */
    public const EPSG_NAD83_CSRS_V2 = 8237;

    /**
     * NAD83(CSRS)v3
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Scope: Horizontal component of 3D system.
     * Adopted by the Canadian federal government from 1999-01-01 and by the provincial governments of Alberta, British
     * Columbia, Manitoba, Newfoundland and Labrador, Nova Scotia, Ontario and Saskatchewan. Replaces NAD83(CSRS)v2.
     * Replaced by NAD83(CSRS)v4.
     */
    public const EPSG_NAD83_CSRS_V3 = 8240;

    /**
     * NAD83(CSRS)v4
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Scope: Horizontal component of 3D system.
     * Adopted by the Canadian federal government from 2002-01-01 and by the provincial governments of Alberta and
     * British Columbia. Replaces NAD83(CSRS)v3. Replaced by NAD83(CSRS)v5 (CRS code 8249). Longitudes are POSITIVE
     * EAST.
     */
    public const EPSG_NAD83_CSRS_V4 = 8246;

    /**
     * NAD83(CSRS)v5
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Scope: Horizontal component of 3D system.
     * Adopted by the Canadian federal government from 2006-01-01. Replaces NAD83(CSRS)v4. Replaced by NAD83(CSRS)v6
     * (CRS code 8252). Longitudes are POSITIVE EAST.
     */
    public const EPSG_NAD83_CSRS_V5 = 8249;

    /**
     * NAD83(CSRS)v6
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Scope: Horizontal component of 3D system.
     * Adopted by the Canadian federal government from 2010-01-01 and the provincial governments of Alberta, British
     * Columbia, Manitoba, Newfoundland and Labrador, Nova Scotia, Ontario and Prince Edward Island. Replaces
     * NAD83(CSRS)v5. Replaced by NAD83(CSRS)v7.
     */
    public const EPSG_NAD83_CSRS_V6 = 8252;

    /**
     * NAD83(CSRS)v7
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Scope: Horizontal component of 3D system.
     * Adopted by the Canadian federal government from 2017-05-01. Replaces NAD83(CSRS)v6. Longitudes are POSITIVE
     * EAST.
     */
    public const EPSG_NAD83_CSRS_V7 = 8255;

    /**
     * NAD83(CSRS96)
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Scope: Horizontal component of 3D system.
     * Adopted by the Canadian federal government from 1996-01-01. Replaced by NAD83(CSRS)v2 (CRS code 8237). Note:
     * this CRS includes longitudes which are POSITIVE EAST.
     */
    public const EPSG_NAD83_CSRS96 = 8232;

    /**
     * NAD83(FBN)
     * Extent: American Samoa - Tutuila, Aunu'u, Ofu, Olesega, Ta'u and Rose islands - onshore. Guam - onshore.
     * Northern Mariana Islands - onshore. Puerto Rico - onshore. United States (USA) - CONUS - Alabama; Arizona;
     * Arkansas; California; Colorado; Connecticut; Delaware; Florida; Georgia; Idaho; Illinois; Indiana; Iowa; Kansas;
     * Kentucky; Louisiana; Maine; Maryland; Massachusetts; Michigan; Minnesota; Mississippi; Missouri; Montana;
     * Nebraska; Nevada; New Hampshire; New Jersey; New Mexico; New York; North Carolina; North Dakota; Ohio; Oklahoma;
     * Oregon; Pennsylvania; Rhode Island; South Carolina; South Dakota; Tennessee; Texas; Utah; Vermont; Virginia;
     * Washington; West Virginia; Wisconsin; Wyoming - onshore plus Gulf of Mexico offshore continental shelf (GoM
     * OCS). US Virgin Islands - onshore.
     * Scope: Geodesy.
     * In Continental US, American Samoa, Guam/NMI and PRVI, replaces NAD83(HARN). In Continental US, Puerto Rico and
     * US Virgin Islands replaced by NAD83(NSRS2007). In American Samoa and Hawaii replaced by NAD83(PA11). In Guam/NMI
     * replaced by NAD83(MA11).
     */
    public const EPSG_NAD83_FBN = 8860;

    /**
     * NAD83(HARN Corrected)
     * Extent: Puerto Rico and US Virgin Islands - onshore.
     * Scope: Horizontal component of 3D system.
     * Note: this CRS includes POSITIVE EAST longitudes. In PRVI replaces NAD83(HARN) = NAD83(1993 PRVI) to correct
     * errors. Replaced by NAD83(FBN) = NAD83(2002 PRVI).
     */
    public const EPSG_NAD83_HARN_CORRECTED = 8545;

    /**
     * NAD83(HARN)
     * Extent: American Samoa - onshore - Tutuila, Aunu'u, Ofu, Olesega, Ta'u and Rose islands. Guam - onshore.
     * Northern Mariana Islands - onshore. Puerto Rico - onshore. United States (USA) - onshore Alabama, Alaska,
     * Arizona, Arkansas, California, Colorado, Connecticut, Delaware, Florida, Georgia, Hawaii, Idaho, Illinois,
     * Indiana, Iowa, Kansas, Kentucky, Louisiana, Maine, Maryland, Massachusetts, Michigan, Minnesota, Mississippi,
     * Missouri, Montana, Nebraska, Nevada, New Hampshire, New Jersey, New Mexico, New York, North Carolina, North
     * Dakota, Ohio, Oklahoma, Oregon, Pennsylvania, Rhode Island, South Carolina, South Dakota, Tennessee, Texas,
     * Utah, Vermont, Virginia, Washington, West Virginia, Wisconsin and Wyoming; offshore Gulf of Mexico continental
     * shelf (GoM OCS). US Virgin Islands - onshore.
     * Scope: Horizontal component of 3D system.
     * In CONUS, AK, HI and PRVI replaces NAD83 for applications with an accuracy of better than 1m. Replaced by
     * NAD83(FBN) in CONUS, American Samoa and Guam / NMI, by NAD83(NSRS2007) in Alaska, by NAD83(PA11) in Hawaii and
     * by NAD83(HARN Corrected) in PRVI.
     */
    public const EPSG_NAD83_HARN = 4152;

    /**
     * NAD83(MA11)
     * Extent: Guam, Northern Mariana Islands and Palau; onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Note: this CRS includes longitudes which are POSITIVE EAST. Replaces NAD83(HARN) (GGN93) and NAD83(FBN) in Guam.
     */
    public const EPSG_NAD83_MA11 = 6325;

    /**
     * NAD83(MARP00)
     * Extent: Guam, Northern Mariana Islands and Palau; onshore and offshore.
     * Scope: Geodesy.
     * Replaces NAD83(HARN) (GGN93) and NAD83(FBN) in Guam. Replaced by NAD83(MA11).
     */
    public const EPSG_NAD83_MARP00 = 9072;

    /**
     * NAD83(NSRS2007)
     * Extent: Puerto Rico - onshore and offshore. United States (USA) onshore and offshore - Alabama; Alaska; Arizona;
     * Arkansas; California; Colorado; Connecticut; Delaware; Florida; Georgia; Idaho; Illinois; Indiana; Iowa; Kansas;
     * Kentucky; Louisiana; Maine; Maryland; Massachusetts; Michigan; Minnesota; Mississippi; Missouri; Montana;
     * Nebraska; Nevada; New Hampshire; New Jersey; New Mexico; New York; North Carolina; North Dakota; Ohio; Oklahoma;
     * Oregon; Pennsylvania; Rhode Island; South Carolina; South Dakota; Tennessee; Texas; Utah; Vermont; Virginia;
     * Washington; West Virginia; Wisconsin; Wyoming. US Virgin Islands - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Note: this CRS includes POSITIVE EAST longitudes. Replaces NAD83(HARN) and NAD83(FBN). Replaced by NAD83(2011).
     */
    public const EPSG_NAD83_NSRS2007 = 4759;

    /**
     * NAD83(PA11)
     * Extent: American Samoa, Marshall Islands, United States (USA) - Hawaii, United States minor outlying islands;
     * onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Note: this CRS includes longitudes which are POSITIVE EAST. Replaces NAD83(HARN) and NAD83(FBN) in Hawaii and
     * American Samoa.
     */
    public const EPSG_NAD83_PA11 = 6322;

    /**
     * NAD83(PACP00)
     * Extent: American Samoa, Marshall Islands, United States (USA) - Hawaii, United States minor outlying islands;
     * onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Note: this CRS includes longitudes which are POSITIVE EAST. Replaces NAD83(HARN) and NAD83(FBN) in Hawaii and
     * American Samoa. Replaced by NAD83(PA11).
     */
    public const EPSG_NAD83_PACP00 = 9075;

    /**
     * NEA74 Noumea
     * Extent: New Caledonia - Grande Terre - Noumea district.
     * Scope: Geodesy.
     * Replaced by RGNC91-93 (CRS code 4749).
     */
    public const EPSG_NEA74_NOUMEA = 4644;

    /**
     * NGN
     * Extent: Kuwait - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_NGN = 4318;

    /**
     * NGO 1948
     * Extent: Norway - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_NGO_1948 = 4273;

    /**
     * NGO 1948 (Oslo)
     * Extent: Norway - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_NGO_1948_OSLO = 4817;

    /**
     * NSWC 9Z-2
     * Extent: World.
     * Scope: Geodesy.
     */
    public const EPSG_NSWC_9Z_2 = 4276;

    /**
     * NTF
     * Extent: France - onshore - mainland and Corsica.
     * Scope: Geodesy.
     */
    public const EPSG_NTF = 4275;

    /**
     * NTF (Paris)
     * Extent: France - onshore - mainland and Corsica.
     * Scope: Geodesy.
     */
    public const EPSG_NTF_PARIS = 4807;

    /**
     * NZGD2000
     * Extent: New Zealand - onshore and offshore. Includes Antipodes Islands, Auckland Islands, Bounty Islands,
     * Chatham Islands, Cambell Island, Kermadec Islands, Raoul Island and Snares Islands.
     * Scope: Horizontal component of 3D system.
     * Replaces NZGD49 (code 4272) and CI79 (code 4673) from March 2000.
     */
    public const EPSG_NZGD2000 = 4167;

    /**
     * NZGD49
     * Extent: New Zealand - North Island, South Island, Stewart Island - onshore and nearshore.
     * Scope: Geodesy.
     * Replaced by NZGD2000 (CRS code 4167) in March 2000.
     */
    public const EPSG_NZGD49 = 4272;

    /**
     * Nahrwan 1934
     * Extent: Iraq - onshore; Iran - onshore northern Gulf coast and west bordering southeast Iraq.
     * Scope: Oil and gas exploration and production.
     * In Iran, replaced by FD58. In Iraq, replaced by Karbala 1979.
     */
    public const EPSG_NAHRWAN_1934 = 4744;

    /**
     * Nahrwan 1967
     * Extent: Arabian Gulf; Qatar - offshore; United Arab Emirates (UAE) - Abu Dhabi; Dubai; Sharjah; Ajman; Fujairah;
     * Ras Al Kaimah; Umm Al Qaiwain - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_NAHRWAN_1967 = 4270;

    /**
     * Nakhl-e Ghanem
     * Extent: Iran - Kangan district.
     * Scope: Engineering survey for onshore facilities for South Pars phase 11 and Pars LNG.
     */
    public const EPSG_NAKHL_E_GHANEM = 4693;

    /**
     * Naparima 1955
     * Extent: Trinidad and Tobago - Trinidad - onshore.
     * Scope: Geodesy.
     * Extended to Tobago as Naparima 1972. (Note: Naparima 1972 is not used in Trinidad).
     */
    public const EPSG_NAPARIMA_1955 = 4158;

    /**
     * Naparima 1972
     * Extent: Trinidad and Tobago - Tobago - onshore.
     * Scope: Geodesy.
     * Naparima 1972 is an extension to Tobago of the Naparima 1955 network of Trinidad.
     */
    public const EPSG_NAPARIMA_1972 = 4271;

    /**
     * Nepal 1981
     * Extent: Nepal.
     * Scope: Geodesy.
     * Adopts 1937 metric conversion of 0.30479841 metres per Indian foot.
     */
    public const EPSG_NEPAL_1981 = 6207;

    /**
     * New Beijing
     * Extent: China - onshore.
     * Scope: Topographic mapping.
     * Replaces Beijing 1954 (CRS code 4214). Replaced by CGCS2000 (code 4490).
     */
    public const EPSG_NEW_BEIJING = 4555;

    /**
     * Nord Sahara 1959
     * Extent: Algeria - onshore and offshore.
     * Scope: Geodesy.
     * Sometimes incorrectly referred to as Voirol Unifie 1960: this is NOT a GeogCRS but two projected CRSs based on
     * Nord Sahara 1959 (codes 30791-92). Strictly applicable only to north of 32°N but extended southwards
     * non-homogoneously by oil industry.
     */
    public const EPSG_NORD_SAHARA_1959 = 4307;

    /**
     * Nouakchott 1965
     * Extent: Mauritania - coastal area south of Cape Timiris.
     * Scope: Hydrography and nautical charting.
     * Replaced by Mauritania 1999 (CRS code 4702).
     */
    public const EPSG_NOUAKCHOTT_1965 = 4680;

    /**
     * ONGD14
     * Extent: Oman - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * In Oman replaces usage of WGS 84 (G873) from 2014. Replaced by ONGD17 (CRS code 9294) from March 2019.
     */
    public const EPSG_ONGD14 = 7373;

    /**
     * ONGD17
     * Extent: Oman - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces ONGD14 (CRS code 7373) from March 2019.
     */
    public const EPSG_ONGD17 = 9294;

    /**
     * OS(SN)80
     * Extent: Ireland - onshore. United Kingdom (UK) - onshore - England; Scotland; Wales; Northern Ireland. Isle of
     * Man.
     * Scope: Geodesy.
     */
    public const EPSG_OS_SN_80 = 4279;

    /**
     * OSGB 1936
     * Extent: United Kingdom (UK) - offshore to boundary of UKCS within 49°45'N to 61°N and 9°W to 2°E; onshore
     * Great Britain (England, Wales and Scotland). Isle of Man onshore.
     * Scope: Geodesy.
     */
    public const EPSG_OSGB_1936 = 4277;

    /**
     * OSGB70
     * Extent: United Kingdom (UK) - Great Britain - England and Wales onshore, Scotland onshore and Western Isles
     * nearshore; Isle of Man onshore.
     * Scope: Geodesy.
     */
    public const EPSG_OSGB70 = 4278;

    /**
     * OSNI 1952
     * Extent: United Kingdom (UK) - Northern Ireland (Ulster) - onshore.
     * Scope: Geodesy.
     * Replaced by 1975 Mapping Adjustment alias TM75. See CRS code 4300.
     */
    public const EPSG_OSNI_1952 = 4188;

    /**
     * Observatario
     * Extent: Mozambique - south.
     * Scope: Geodesy.
     * Replaced by values transformed to Tete geogCRS (code 4127).
     */
    public const EPSG_OBSERVATARIO = 4129;

    /**
     * Ocotepeque 1935
     * Extent: Costa Rica; El Salvador; Guatemala; Honduras; Nicaragua.
     * Scope: Geodesy, topographic mapping.
     * Replaced in Costa Rica by Costa Rica 2005 (CR05) from March 2007 and replaced in El Salvador by SIRGAS_ES2007
     * from August 2007.
     */
    public const EPSG_OCOTEPEQUE_1935 = 5451;

    /**
     * Old Hawaiian
     * Extent: United States (USA) - Hawaii - main islands onshore.
     * Scope: Geodesy.
     * Note: this CRS includes longitudes which are POSITIVE EAST.
     */
    public const EPSG_OLD_HAWAIIAN = 4135;

    /**
     * PD/83
     * Extent: Germany - Thuringen.
     * Scope: Cadastre, topographic mapping.
     * Consistent with DHDN (CRS code 4314) at the 1-metre level. For low accuracy applications PD/83 can be considered
     * the same as DHDN.
     */
    public const EPSG_PD_83 = 4746;

    /**
     * PN68
     * Extent: Spain - Canary Islands onshore.
     * Scope: Geodesy, engineering survey, topographic mapping.
     * On western islands (El Hierro, La Gomera, La Palma and Tenerife) replaced by PN84 (CRS code 4728) and later by
     * REGCAN95 (CRS code 4081). On eastern islands (Fuerteventura, Gran Canaria and Lanzarote) replaced by REGCAN95
     * (CRS code 4081).
     */
    public const EPSG_PN68 = 9403;

    /**
     * PN84
     * Extent: Spain - Canary Islands onshore.
     * Scope: Military survey.
     * Replaces PN68 (CRS code 9403) only on western islands (El Hierro, La Gomera, La Palma and Tenerife). Replaced by
     * REGCAN95 (CRS code 4081).
     */
    public const EPSG_PN84 = 4728;

    /**
     * PNG94
     * Extent: Papua New Guinea - onshore and offshore. Includes Bismark archipelago, Louisade archipelago, Admiralty
     * Islands, d'Entrecasteaux Islands, northern Solomon Islands, Trobriand Islands, New Britain, New Ireland,
     * Woodlark, and associated islands.
     * Scope: Horizontal component of 3D system.
     * Adopted 1996, replacing AGD66.
     */
    public const EPSG_PNG94 = 5546;

    /**
     * POSGAR 2007
     * Extent: Argentina - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Adopted as official replacement of POSGAR 94 in May 2009. Also replaces de facto use of POSGAR 98 as of same
     * date.
     */
    public const EPSG_POSGAR_2007 = 5340;

    /**
     * POSGAR 94
     * Extent: Argentina - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Legally adopted in May 1997. Replaced by POSGAR 98 for scientific and many practical purposes until May 2009.
     * Officially replaced by POSGAR 2007 in May 2009.
     */
    public const EPSG_POSGAR_94 = 4694;

    /**
     * POSGAR 98
     * Extent: Argentina - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Densification in Argentina of SIRGAS 1995. Until May 2009 replaced POSGAR 94 for many practical purposes (but
     * not as the legal system).  POSGAR 94 was officially replaced by POSGAR 2007 in May 2009.
     */
    public const EPSG_POSGAR_98 = 4190;

    /**
     * PRS92
     * Extent: Philippines - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces Luzon 19111 (CRS code 4253).
     */
    public const EPSG_PRS92 = 4683;

    /**
     * PSAD56
     * Extent: Aruba - onshore; Bolivia; Bonaire - onshore; Brazil - offshore - Amazon Cone shelf; Chile - onshore
     * north of 43°30'S; Curacao - onshore; Ecuador - mainland onshore; Guyana - onshore; Peru - onshore; Venezuela -
     * onshore.
     * Scope: Geodesy.
     * Incorporates La Canoa (CRS code 4247) and within Venezuela (but not beyond) the names La Canoa and PSAD56 are
     * synonymous.
     */
    public const EPSG_PSAD56 = 4248;

    /**
     * PSD93
     * Extent: Oman - onshore. Includes Musandam and the Kuria Muria (Al Hallaniyah) islands.
     * Scope: Geodesy.
     * Replaced Fahud geogCRS (code 4232) in 1993. Maximum differences to Fahud adjustment are 20 metres.
     */
    public const EPSG_PSD93 = 4134;

    /**
     * PTRA08
     * Extent: Portugal - Azores and Madeira island groups and surrounding EEZ - Flores, Corvo; Graciosa, Terceira, Sao
     * Jorge, Pico, Faial; Sao Miguel, Santa Maria; Madeira, Porto Santo, Desertas; Selvagens.
     * Scope: Horizontal component of 3D system.
     * Replaces Azores Occidental 1939, Azores Central 1995, Azores Oriental 1995 and Porto Santo 1995 (CRS codes 4182
     * and 4663-65).
     */
    public const EPSG_PTRA08 = 5013;

    /**
     * PZ-90
     * Extent: World.
     * Scope: Horizontal component of 3D system.
     * Used by the Glonass satellite navigation system prior to 2007-09-20.
     */
    public const EPSG_PZ_90 = 4740;

    /**
     * PZ-90.02
     * Extent: World.
     * Scope: Horizontal component of 3D system.
     * Replaces PZ-90 (CRS code 4740) from 2007-09-20. Replaced by PZ-90.11 (CRS code 9475) from 2014-01-15.
     */
    public const EPSG_PZ_90_02 = 9474;

    /**
     * PZ-90.11
     * Extent: World.
     * Scope: Horizontal component of 3D system.
     * Replaces PZ-90.02 (CRS code 9474) from 2014-01-15.
     */
    public const EPSG_PZ_90_11 = 9475;

    /**
     * Palestine 1923
     * Extent: Israel - onshore; Jordan; Palestine Territory - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_PALESTINE_1923 = 4281;

    /**
     * Pampa del Castillo
     * Extent: Argentina - Chibut province south of approximately 42°30'S and Santa Cruz province north of
     * approximately 50°20'S.
     * Scope: Oil and gas exploration and production.
     * Replaced by Campo Inchauspe (geogCRS code 4221) for topographic mapping, use for oil exploration and production
     * in Golfo San Jorge basin (44°S to 47.5°S) continues.
     */
    public const EPSG_PAMPA_DEL_CASTILLO = 4161;

    /**
     * Panama-Colon 1911
     * Extent: Panama - onshore.
     * Scope: Geodesy, topographic mapping.
     */
    public const EPSG_PANAMA_COLON_1911 = 5467;

    /**
     * Perroud 1950
     * Extent: Antarctica - Adelie Land - coastal area between 136°E and 142°E.
     * Scope: Geodesy.
     * Replaced by RGTAAF07 (CRS code 7073).
     */
    public const EPSG_PERROUD_1950 = 4637;

    /**
     * Peru96
     * Extent: Peru - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces PSAD56 (CRS code 4248) in Peru.
     */
    public const EPSG_PERU96 = 5373;

    /**
     * Petrels 1972
     * Extent: Antarctica - Adelie Land - Petrels island.
     * Scope: Geodesy.
     * Replaced by RGTAAF07 (CRS code 7073).
     */
    public const EPSG_PETRELS_1972 = 4636;

    /**
     * Phoenix Islands 1966
     * Extent: Kiribati - Phoenix Islands: Kanton, Orona, McKean Atoll, Birnie Atoll, Phoenix Seamounts.
     * Scope: Military survey.
     */
    public const EPSG_PHOENIX_ISLANDS_1966 = 4716;

    /**
     * Pitcairn 1967
     * Extent: Pitcairn - Pitcairn Island.
     * Scope: Military survey.
     * Replced by Pitcairn 2006 (CRS code 4763).
     */
    public const EPSG_PITCAIRN_1967 = 4729;

    /**
     * Pitcairn 2006
     * Extent: Pitcairn - Pitcairn Island.
     * Scope: Cadastre, topographic mapping.
     * Replaces Pitcairn 1967 (CRS code 4729). For practical purposes may be considered to be WGS 84.
     */
    public const EPSG_PITCAIRN_2006 = 4763;

    /**
     * Point 58
     * Extent: Senegal - central, Mali - southwest, Burkina Faso - central, Niger - southwest, Nigeria - north, Chad -
     * central. All in proximity to the parallel of latitude of 12°N.
     * Scope: Geodesy.
     * The 12th parallel traverse of 1966-70 is connected to the Blue Nile 1958 (Adindan) network in western Sudan
     * (geogCRS code 4201).
     */
    public const EPSG_POINT_58 = 4620;

    /**
     * Pointe Noire
     * Extent: Congo - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_POINTE_NOIRE = 4282;

    /**
     * Porto Santo
     * Extent: Portugal - Madeira, Porto Santo and Desertas islands - onshore.
     * Scope: Geodesy.
     * Replaced by 1995 system (CRS code 4663).
     */
    public const EPSG_PORTO_SANTO = 4615;

    /**
     * Porto Santo 1995
     * Extent: Portugal - Madeira, Porto Santo and Desertas islands - onshore.
     * Scope: Geodesy.
     * Replaces 1936 system (CRS code 4615). Replaced by PTRA08 (CRS code 5013).
     */
    public const EPSG_PORTO_SANTO_1995 = 4663;

    /**
     * Principe
     * Extent: Sao Tome and Principe - onshore - Principe.
     * Scope: Geodesy.
     */
    public const EPSG_PRINCIPE = 4824;

    /**
     * Puerto Rico
     * Extent: Puerto Rico, US Virgin Islands and British Virgin Islands - onshore.
     * Scope: Geodesy.
     * NAD27 (CRS code 4267) used for military purposes. Note: this CRS includes longitudes which are POSITIVE EAST.
     */
    public const EPSG_PUERTO_RICO = 4139;

    /**
     * Pulkovo 1942
     * Extent: Armenia; Azerbaijan; Belarus; Estonia - onshore; Georgia - onshore; Kazakhstan; Kyrgyzstan; Latvia -
     * onshore; Lithuania - onshore; Moldova; Russian Federation - onshore; Tajikistan; Turkmenistan; Ukraine -
     * onshore; Uzbekistan.
     * Scope: Geodesy.
     * Extended to Eastern Europe through Uniform Astro-Geodetic Network (UAGN) of 1956 - see CRS code 4179.
     */
    public const EPSG_PULKOVO_1942 = 4284;

    /**
     * Pulkovo 1942(58)
     * Extent: Onshore: Bulgaria, Czechia, Germany (former DDR), Hungary, Poland and Slovakia. Onshore and offshore:
     * Albania and Romania.
     * Scope: Geodesy.
     * Shares same origin definition as Pulkovo 1942 (CRS code 4284) and for low accuracy purposes these systems can be
     * considered consistent with each other. Locally densified during 1957 and 1958. Replaced by 1983 adjustment (CRS
     * code 4178).
     */
    public const EPSG_PULKOVO_1942_58 = 4179;

    /**
     * Pulkovo 1942(83)
     * Extent: Onshore Bulgaria, Czechia, Germany (former DDR), Hungary and Slovakia.
     * Scope: Geodesy.
     * Replaces 1956 adjustment (CRS code 4179). In Brandenburg replaced by ETRS89. In Sachsen and Thuringen replaced
     * by RD83 and PD/83 which for practical purposes may be considered to be the same as DHDN.
     */
    public const EPSG_PULKOVO_1942_83 = 4178;

    /**
     * Pulkovo 1995
     * Extent: Russian Federation - onshore and offshore.
     * Scope: Geodesy.
     * Decree #1463 of 2012-12-28 announced that S-95 to be phased out and replaced by GSK-11 (CRS code 7683) by 2017.
     */
    public const EPSG_PULKOVO_1995 = 4200;

    /**
     * QND95
     * Extent: Qatar - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_QND95 = 4614;

    /**
     * Qatar 1948
     * Extent: Qatar - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_QATAR_1948 = 4286;

    /**
     * Qatar 1974
     * Extent: Qatar - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_QATAR_1974 = 4285;

    /**
     * Qornoq 1927
     * Extent: Greenland - west coast onshore.
     * Scope: Geodesy.
     */
    public const EPSG_QORNOQ_1927 = 4194;

    /**
     * RD/83
     * Extent: Germany - Sachsen.
     * Scope: Cadastre, topographic mapping.
     * Consistent with DHDN (CRS code 4314) at the 1-metre level. For low accuracy applications RD/83 can be considered
     * the same as DHDN.
     */
    public const EPSG_RD_83 = 4745;

    /**
     * RDN2008
     * Extent: Italy - onshore and offshore; San Marino, Vatican City State.
     * Scope: Horizontal component of 3D system.
     * Replaces IGM95 (CRS code 4670) from 2011-11-10.
     */
    public const EPSG_RDN2008 = 6706;

    /**
     * REGCAN95
     * Extent: Spain - Canary Islands onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces Pico de las Nieves 1984 (PN84).
     */
    public const EPSG_REGCAN95 = 4081;

    /**
     * REGVEN
     * Extent: Venezuela - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Densification in Venezuela of SIRGAS.
     */
    public const EPSG_REGVEN = 4189;

    /**
     * RGAF09
     * Extent: French Antilles onshore and offshore - Guadeloupe (including Grande Terre, Basse Terre, Marie Galante,
     * Les Saintes, Iles de la Petite Terre, La Desirade, St Barthélemy, and northern St Martin) and Martinique.
     * Scope: Horizontal component of 3D system.
     * Replaces RRAF 1991. See CRS code 7086 for alternate system with axes reversed used by IGN for GIS purposes.
     */
    public const EPSG_RGAF09 = 5489;

    /**
     * RGAF09 (lon-lat)
     * Extent: French Antilles onshore and offshore - Guadeloupe (including Grande Terre, Basse Terre, Marie Galante,
     * Les Saintes, Iles de la Petite Terre, La Desirade, St Barthélemy, and northern St Martin) and Martinique.
     * Scope: GIS.
     * Replaces RRAF 1991. See CRS code 5489 for system with axes in sequence lat-lon to be used for air, land and sea
     * navigation and safety of life purposes.
     */
    public const EPSG_RGAF09_LON_LAT = 7086;

    /**
     * RGF93
     * Extent: France - onshore and offshore, mainland and Corsica.
     * Scope: Horizontal component of 3D system.
     * See CRS code 7084 for alternate system with axes reversed used by IGN for GIS purposes.
     */
    public const EPSG_RGF93 = 4171;

    /**
     * RGF93 (lon-lat)
     * Extent: France - onshore and offshore, mainland and Corsica.
     * Scope: GIS.
     * See CRS code 4171 for system with axes in sequence lat-lon to be used for air, land and sea navigation and
     * safety of life purposes.
     */
    public const EPSG_RGF93_LON_LAT = 7084;

    /**
     * RGFG95
     * Extent: French Guiana - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * See CRS code 7041 for alternate system with axes reversed used by IGN for GIS purposes.
     */
    public const EPSG_RGFG95 = 4624;

    /**
     * RGFG95 (lon-lat)
     * Extent: French Guiana - onshore and offshore.
     * Scope: GIS.
     * See CRS code 4624 for system with  axes in sequence lat-lon to be used for air, land and sea navigation and
     * safety of life purposes.
     */
    public const EPSG_RGFG95_LON_LAT = 7041;

    /**
     * RGM04
     * Extent: Mayotte - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces Combani 1950 (CRS code 4632) except for cadastral purposes which uses Cadastre 1997 (CRS code 4475).
     * See CRS code 7039 for alternate system with axes reversed used by IGN for GIS purposes.
     */
    public const EPSG_RGM04 = 4470;

    /**
     * RGM04 (lon-lat)
     * Extent: Mayotte - onshore and offshore.
     * Scope: GIS.
     * Replaces Combani 1950 (CRS code 4632) except for cadastral purposes which use Cadastre 1997 (CRS code 4475). See
     * CRS code 4470 for system with axes in sequence lat-lon to be used for air, land and sea navigation and safety of
     * life purposes.
     */
    public const EPSG_RGM04_LON_LAT = 7039;

    /**
     * RGNC91-93
     * Extent: New Caledonia - onshore and offshore. Isle de Pins, Loyalty Islands, Huon Islands, Belep archipelago,
     * Chesterfield Islands, and Walpole.
     * Scope: Horizontal component of 3D system.
     * Replaces older local systems IGN56 Lifou, IGN72 Grande Terre, ST87 Ouvea, IGN53 Mare, ST84 Ile des Pins, ST71
     * Belep and NEA74 Noumea (CRS codes 4633, 4641-44, 4662 and 4750).
     */
    public const EPSG_RGNC91_93 = 4749;

    /**
     * RGPF
     * Extent: French Polynesia - onshore and offshore. Includes Society archipelago, Tuamotu archipelago, Marquesas
     * Islands, Gambier Islands and Austral Islands.
     * Scope: Horizontal component of 3D system.
     * Replaces Tahaa 54 (CRS code 4629), IGN 63 Hiva Oa (4689), IGN 72 Nuku Hiva (4630), Maupiti 83 (4692), MHEFO 55
     * (4688), Moorea 87 (4691) and Tahiti 79 (4690).
     */
    public const EPSG_RGPF = 4687;

    /**
     * RGR92
     * Extent: Reunion - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces Piton des Neiges (code 4626). See CRS code 7037 for alternate system with axes reversed used by IGN for
     * GIS purposes.
     */
    public const EPSG_RGR92 = 4627;

    /**
     * RGR92 (lon-lat)
     * Extent: Reunion - onshore and offshore.
     * Scope: GIS.
     * Replaces Piton des Neiges (code 4626). See CRS code 4627 for system with axes in sequence lat-lon to be used for
     * air, land and sea navigation and safety of life purposes.
     */
    public const EPSG_RGR92_LON_LAT = 7037;

    /**
     * RGRDC 2005
     * Extent: The Democratic Republic of the Congo (Zaire) - south of a line through Bandundu, Seke and Pweto -
     * onshore and offshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_RGRDC_2005 = 4046;

    /**
     * RGSPM06
     * Extent: St Pierre and Miquelon - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces Saint Pierre et Miquelon 1950 (CRS code 4638). See CRS code 7035 for alternate system with axes
     * reversed used by IGN for GIS purposes.
     */
    public const EPSG_RGSPM06 = 4463;

    /**
     * RGSPM06 (lon-lat)
     * Extent: St Pierre and Miquelon - onshore and offshore.
     * Scope: GIS.
     * Replaces Saint Pierre et Miquelon 1950 (CRS code 4638). See CRS code 4463 for system with axes in sequence
     * lat-lon to be used for air, land and sea navigation and safety of life purposes.
     */
    public const EPSG_RGSPM06_LON_LAT = 7035;

    /**
     * RGTAAF07
     * Extent: French Southern Territories - onshore and offshore: Amsterdam and St Paul, Crozet, Europa and Kerguelen.
     * Antarctica - Adelie Land coastal area.
     * Scope: Horizontal component of 3D system.
     * Replaces various local systems on several French overseas territories. See CRS code 7133 for alternate system
     * with axes reversed used by IGN for GIS purposes.
     */
    public const EPSG_RGTAAF07 = 7073;

    /**
     * RGTAAF07 (lon-lat)
     * Extent: French Southern Territories - onshore and offshore: Amsterdam and St Paul, Crozet, Europa and Kerguelen.
     * Antarctica - Adelie Land coastal area.
     * Scope: GIS.
     * Replaces various local systems on several French overseas territories. See CRS code 7073 for alternate system
     * with axes in sequence lat-lon to be used for air, land and sea navigation purposes.
     */
    public const EPSG_RGTAAF07_LON_LAT = 7133;

    /**
     * RGWF96
     * Extent: Wallis and Futuna - onshore and offshore - Uvea, Futuna, and Alofi.
     * Scope: Horizontal component of 3D system.
     * See CRS code 8902 for alternate system with axes reversed used by IGN for GIS purposes. On Wallis island,
     * replaces MOP78 (CRS code 4639) for geodetic purposes.
     */
    public const EPSG_RGWF96 = 8900;

    /**
     * RGWF96 (lon-lat)
     * Extent: Wallis and Futuna - onshore and offshore - Uvea, Futuna, and Alofi.
     * Scope: GIS.
     * See CRS code 8900 for system with axes in sequence lat-lon to be used for air, land and sea navigation and
     * safety of life purposes. On Wallis island, replaces MOP78 (CRS code 4639) for GIS purposes.
     */
    public const EPSG_RGWF96_LON_LAT = 8902;

    /**
     * RRAF 1991
     * Extent: French Antilles onshore and offshore - Guadeloupe (including Grande Terre, Basse Terre, Marie Galante,
     * Les Saintes, Iles de la Petite Terre, La Desirade, St Barthélemy, and northern St Martin) and Martinique.
     * Scope: Horizontal component of 3D system.
     * Replaces older local systems Fort Marigot and Sainte Anne CRS (codes 4621-22) in Guadeloupe and Fort Desaix (CRS
     * code 4625) in Martinique. Replaced by RGAF09 (CRS code 5489).
     */
    public const EPSG_RRAF_1991 = 4558;

    /**
     * RSAO13
     * Extent: Angola - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_RSAO13 = 8699;

    /**
     * RSRGD2000
     * Extent: Antarctica - Ross Sea Region - nominally between 160°E and 150°W but includes buffer on eastern
     * hemisphere margin to include Transantarctic Mountains
     * Scope: Horizontal component of 3D system.
     * Replaces Camp Area Astro (CRS code 4715). The relationship to this is variable. See Land Information New Zealand
     * LINZS25001.
     */
    public const EPSG_RSRGD2000 = 4764;

    /**
     * RT38
     * Extent: Sweden - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_RT38 = 4308;

    /**
     * RT38 (Stockholm)
     * Extent: Sweden - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_RT38_STOCKHOLM = 4814;

    /**
     * RT90
     * Extent: Sweden - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_RT90 = 4124;

    /**
     * Rassadiran
     * Extent: Iran - Taheri refinery site.
     * Scope: Geodesy.
     */
    public const EPSG_RASSADIRAN = 4153;

    /**
     * Reunion 1947
     * Extent: Reunion - onshore.
     * Scope: Geodesy.
     * Replaced by RGR92 (code 4627).
     */
    public const EPSG_REUNION_1947 = 4626;

    /**
     * Reykjavik 1900
     * Extent: Iceland - onshore.
     * Scope: Geodesy.
     * See ellipsoid remarks.
     */
    public const EPSG_REYKJAVIK_1900 = 4657;

    /**
     * S-JTSK
     * Extent: Czechia; Slovakia.
     * Scope: Geodesy.
     * Greenwich-referenced equivalent to S-JTSK (CRS code 4818). Technically improved and replaced through JTSK/05 in
     * the Czech Republic and S-JTSK [JTSK03] in Slovakia, CRSs 5228 and 5229 (CZ) and 8351 (SK).
     */
    public const EPSG_S_JTSK = 4156;

    /**
     * S-JTSK (Ferro)
     * Extent: Czechia; Slovakia.
     * Scope: Geodesy.
     * Initial realization, observed and calculated in projected CRS domain (CRS code 2065). Later densification
     * introduced distortion with  inaccuracy of several decimetres. In Slovakia has been deprecated and replaced by
     * Greenwich equivalent, CRS code 4156.
     */
    public const EPSG_S_JTSK_FERRO = 4818;

    /**
     * S-JTSK [JTSK03]
     * Extent: Slovakia.
     * Scope: Geodesy.
     * Defined by transfomation from ETRS89 (ETRF2000 realization) (transformation code 8365) to improve the scale and
     * homogeneity of S-JTSK (CRS 4156) within Slovakia.
     */
    public const EPSG_S_JTSK_JTSK03 = 8351;

    /**
     * S-JTSK/05
     * Extent: Czechia.
     * Scope: Geodesy.
     * Derived through projCRS 5515 to improve the scale and homogeneity of CRS 4156 within the Czech Republic. See CRS
     * code 5229 for Ferro-referenced alternative.
     */
    public const EPSG_S_JTSK_05 = 5228;

    /**
     * S-JTSK/05 (Ferro)
     * Extent: Czechia.
     * Scope: Geodesy.
     * Derived through projCRS 5224 to improve the scale and homogeneity of CRS 4818 within the Czech Republic. See CRS
     * code 5228 for Greenwich-referenced alternative.
     */
    public const EPSG_S_JTSK_05_FERRO = 5229;

    /**
     * SAD69
     * Extent: Brazil - onshore and offshore. In rest of South America - onshore north of approximately 45°S and
     * Tierra del Fuego.
     * Scope: Geodesy.
     * Uses GRS 1967 ellipsoid with 1/f to exactly 2 decimal places. In Brazil only, replaced by SAD69(96) (CRS code
     * 5527).
     */
    public const EPSG_SAD69 = 4618;

    /**
     * SAD69(96)
     * Extent: Brazil - onshore and offshore. Includes Rocas, Fernando de Noronha archipelago, Trindade, Ihlas Martim
     * Vaz and Sao Pedro e Sao Paulo.
     * Scope: Geodesy.
     * Uses GRS 1967 ellipsoid with 1/f to exactly 2 decimal places. Replaces SAD69 original adjustment (CRS code 4618)
     * only in Brazil.
     */
    public const EPSG_SAD69_96 = 5527;

    /**
     * SHGD2015
     * Extent: St Helena, Ascension and Tristan da Cunha - St Helena Island - onshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_SHGD2015 = 7886;

    /**
     * SIGD61
     * Extent: Cayman Islands - Little Cayman and Cayman Brac.
     * Scope: Cadastre, engineering survey, topographic mapping.
     * Superseded by CIGD11 (CRS code 6135).
     */
    public const EPSG_SIGD61 = 4726;

    /**
     * SIRGAS 1995
     * Extent: South America - onshore and offshore. Ecuador (mainland and Galapagos) - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaced by SIRGAS 2000 (CRS code 4674).
     */
    public const EPSG_SIRGAS_1995 = 4170;

    /**
     * SIRGAS 2000
     * Extent: Latin America - Central America and South America - onshore and offshore. Brazil - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces SIRGAS 1995 system (CRS code 4179) for South America; expands SIRGAS to Central America.
     */
    public const EPSG_SIRGAS_2000 = 4674;

    /**
     * SIRGAS-CON DGF00P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaced by SIRGAS-CON DGF01P01 (CRS code 8973).
     */
    public const EPSG_SIRGAS_CON_DGF00P01 = 8972;

    /**
     * SIRGAS-CON DGF01P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaces SIRGAS-CON DGF00P01 (CRS code 8972). Replaced by SIRGAS-CON DGF01P02 (CRS code 8974).
     */
    public const EPSG_SIRGAS_CON_DGF01P01 = 8973;

    /**
     * SIRGAS-CON DGF01P02
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaces SIRGAS-CON DGF01P01 (CRS code 8973). Replaced by SIRGAS-CON DGF02P01 (CRS code 8975).
     */
    public const EPSG_SIRGAS_CON_DGF01P02 = 8974;

    /**
     * SIRGAS-CON DGF02P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaces SIRGAS-CON DGF01P02 (CRS code 8974). Replaced by SIRGAS-CON DGF04P01 (CRS code 8976).
     */
    public const EPSG_SIRGAS_CON_DGF02P01 = 8975;

    /**
     * SIRGAS-CON DGF04P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaces SIRGAS-CON DGF02P01 (CRS code 8975). Replaced by SIRGAS-CON DGF05P01 (CRS code 8977).
     */
    public const EPSG_SIRGAS_CON_DGF04P01 = 8976;

    /**
     * SIRGAS-CON DGF05P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaces SIRGAS-CON DGF04P01 (CRS code 8976). Replaced by SIRGAS-CON DGF06P01 (CRS code 8978).
     */
    public const EPSG_SIRGAS_CON_DGF05P01 = 8977;

    /**
     * SIRGAS-CON DGF06P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaces SIRGAS-CON DGF05P01 (CRS code 8977). Replaced by SIRGAS-CON DGF07P01 (CRS code 8979).
     */
    public const EPSG_SIRGAS_CON_DGF06P01 = 8978;

    /**
     * SIRGAS-CON DGF07P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaces SIRGAS-CON DGF06P01 (CRS code 8978). Replaced by SIRGAS-CON DGF08P01 (CRS code 8980).
     */
    public const EPSG_SIRGAS_CON_DGF07P01 = 8979;

    /**
     * SIRGAS-CON DGF08P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaces SIRGAS-CON DGF07P01 (CRS code 8979). Replaced by SIRGAS-CON SIR09P01 (CRS code 8981).
     */
    public const EPSG_SIRGAS_CON_DGF08P01 = 8980;

    /**
     * SIRGAS-CON SIR09P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaces SIRGAS-CON DGF08P01 (CRS code 8980). Replaced by SIRGAS-CON SIR10P01 (CRS code 8982).
     */
    public const EPSG_SIRGAS_CON_SIR09P01 = 8981;

    /**
     * SIRGAS-CON SIR10P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaces SIRGAS-CON SIR09P01 (CRS code 8981). Replaced by SIRGAS-CON SIR11P01 (CRS code 8983).
     */
    public const EPSG_SIRGAS_CON_SIR10P01 = 8982;

    /**
     * SIRGAS-CON SIR11P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaces SIRGAS-CON SIR10P01 (CRS code 8982). Replaced by SIRGAS-CON SIR13P01 (CRS code 8984).
     */
    public const EPSG_SIRGAS_CON_SIR11P01 = 8983;

    /**
     * SIRGAS-CON SIR13P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaces SIRGAS-CON SIR11P01 (CRS code 8983). Replaced by SIRGAS-CON SIR14P01 (CRS code 8985).
     */
    public const EPSG_SIRGAS_CON_SIR13P01 = 8984;

    /**
     * SIRGAS-CON SIR14P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaces SIRGAS-CON SIR13P01 (CRS code 8984). Replaced by SIRGAS-CON SIR15P01 (CRS code 8986).
     */
    public const EPSG_SIRGAS_CON_SIR14P01 = 8985;

    /**
     * SIRGAS-CON SIR15P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaces SIRGAS-CON SIR14P01 (CRS code 8985). Replaced by SIRGAS-CON SIR17P01 (CRS code 8987).
     */
    public const EPSG_SIRGAS_CON_SIR15P01 = 8986;

    /**
     * SIRGAS-CON SIR17P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Scope: Geodesy.
     * Replaces SIRGAS-CON SIR15P01 (CRS code 8986).
     */
    public const EPSG_SIRGAS_CON_SIR17P01 = 8987;

    /**
     * SIRGAS-Chile 2002
     * Extent: Chile - onshore and offshore. Includes Easter Island, Juan Fernandez Islands, San Felix, and Sala y
     * Gomez.
     * Scope: Horizontal component of 3D system.
     * Densification of SIRGAS 2000 within Chile. Replaces PSAD56 (CRS code 6248) in Chile, HITO XVIII (CRS code 6254)
     * in Chilean Tierra del Fuego and Easter Island 1967 (CRS code 6719) in Easter Island. Replaced by SIRGAS-Chile
     * 2010 (CRS code 8949).
     */
    public const EPSG_SIRGAS_CHILE_2002 = 5360;

    /**
     * SIRGAS-Chile 2010
     * Extent: Chile - onshore and offshore. Includes Easter Island, Juan Fernandez Islands, San Felix, and Sala y
     * Gomez.
     * Scope: Horizontal component of 3D system.
     * Densification within Chile of SIRGAS-CON at epoch 2010.00. Replaces SIRGAS-Chile 2002 (CRS code 5360) due to
     * significant tectonic deformation. Replaced by SIRGAS-Chile 2013 (CRS code 9148).
     */
    public const EPSG_SIRGAS_CHILE_2010 = 8949;

    /**
     * SIRGAS-Chile 2013
     * Extent: Chile - onshore and offshore. Includes Easter Island, Juan Fernandez Islands, San Felix, and Sala y
     * Gomez.
     * Scope: Horizontal component of 3D system.
     * Densification within Chile of SIRGAS-CON at epoch 2013.00. Replaces SIRGAS-Chile 2010 (CRS code 8949) due to
     * significant tectonic deformation. Replaced by SIRGAS-Chile 2016 (CRS code 9153).
     */
    public const EPSG_SIRGAS_CHILE_2013 = 9148;

    /**
     * SIRGAS-Chile 2016
     * Extent: Chile - onshore and offshore. Includes Easter Island, Juan Fernandez Islands, San Felix, and Sala y
     * Gomez.
     * Scope: Horizontal component of 3D system.
     * Densification within Chile of SIRGAS-CON at epoch 2016.00. Replaces SIRGAS-Chile 2013 (CRS code 9148) due to
     * significant tectonic deformation.
     */
    public const EPSG_SIRGAS_CHILE_2016 = 9153;

    /**
     * SIRGAS-ROU98
     * Extent: Uruguay - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces Yacare (CRS code 4309) in Uruguay.
     */
    public const EPSG_SIRGAS_ROU98 = 5381;

    /**
     * SIRGAS_ES2007.8
     * Extent: El Salvador - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_SIRGAS_ES2007_8 = 5393;

    /**
     * SLD99
     * Extent: Sri Lanka - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_SLD99 = 5233;

    /**
     * SRB_ETRS89
     * Extent: Serbia including Vojvodina.
     * Scope: Horizontal component of 3D system.
     * In Serbia replaces MGI 1901 and SREF98 (CRS codes 3906 and 4075).
     */
    public const EPSG_SRB_ETRS89 = 8685;

    /**
     * SREF98
     * Extent: Serbia including Vojvodina.
     * Scope: Horizontal component of 3D system.
     * Replaces MGI 1901 (CRS code 3906) in Serbia. Replaced by SRB_ETRS89 (STRS00) (CRS code 8685).
     */
    public const EPSG_SREF98 = 4075;

    /**
     * SRGI2013
     * Extent: Indonesia - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Supports horizontal component of national horizontal control network (JKHN). Adopted 2013-10-11. Replaces DGN95
     * and all older systems.
     */
    public const EPSG_SRGI2013 = 9470;

    /**
     * ST71 Belep
     * Extent: New Caledonia - Belep.
     * Scope: Geodesy.
     * Replaced by RGNC91-93 (CRS code 4749).
     */
    public const EPSG_ST71_BELEP = 4643;

    /**
     * ST84 Ile des Pins
     * Extent: New Caledonia - Ile des Pins.
     * Scope: Geodesy.
     * Replaced by RGNC91-93 (CRS code 4749).
     */
    public const EPSG_ST84_ILE_DES_PINS = 4642;

    /**
     * ST87 Ouvea
     * Extent: New Caledonia - Loyalty Islands - Ouvea.
     * Scope: Geodesy.
     * Replaced by RGNC91-93 (CRS code 4749).
     */
    public const EPSG_ST87_OUVEA = 4750;

    /**
     * SVY21
     * Extent: Singapore - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_SVY21 = 4757;

    /**
     * SWEREF99
     * Extent: Sweden - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_SWEREF99 = 4619;

    /**
     * Saint Pierre et Miquelon 1950
     * Extent: St Pierre and Miquelon - onshore.
     * Scope: Geodesy.
     * Replaced by RGSPM06 (CRS code 4463).
     */
    public const EPSG_SAINT_PIERRE_ET_MIQUELON_1950 = 4638;

    /**
     * Santo 1965
     * Extent: Vanuatu - northern islands - Aese, Ambrym, Aoba, Epi, Espiritu Santo, Maewo, Malo, Malkula, Paama,
     * Pentecost, Shepherd and Tutuba.
     * Scope: Military survey.
     */
    public const EPSG_SANTO_1965 = 4730;

    /**
     * Sao Tome
     * Extent: Sao Tome and Principe - onshore - Sao Tome.
     * Scope: Geodesy.
     */
    public const EPSG_SAO_TOME = 4823;

    /**
     * Sapper Hill 1943
     * Extent: Falkland Islands (Malvinas) - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_SAPPER_HILL_1943 = 4292;

    /**
     * Schwarzeck
     * Extent: Namibia - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_SCHWARZECK = 4293;

    /**
     * Scoresbysund 1952
     * Extent: Greenland - Scoresbysund area onshore.
     * Scope: Geodesy.
     */
    public const EPSG_SCORESBYSUND_1952 = 4195;

    /**
     * Segara
     * Extent: Indonesia - Kalimantan - onshore east coastal area including Mahakam delta coastal and offshore shelf
     * areas.
     * Scope: Geodesy.
     */
    public const EPSG_SEGARA = 4613;

    /**
     * Segara (Jakarta)
     * Extent: Indonesia - Kalimantan - onshore east coastal area including Mahakam delta coastal and offshore shelf
     * areas.
     * Scope: Geodesy.
     */
    public const EPSG_SEGARA_JAKARTA = 4820;

    /**
     * Selvagem Grande
     * Extent: Portugal - Selvagens islands (Madeira province) - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_SELVAGEM_GRANDE = 4616;

    /**
     * Serindung
     * Extent: Indonesia - west Kalimantan - onshore coastal area.
     * Scope: Geodesy.
     */
    public const EPSG_SERINDUNG = 4295;

    /**
     * Sibun Gorge 1922
     * Extent: Belize - onshore.
     * Scope: Geodesy, topographic mapping.
     */
    public const EPSG_SIBUN_GORGE_1922 = 5464;

    /**
     * Sierra Leone 1924
     * Extent: Sierra Leone - Freetown Peninsula.
     * Scope: Geodesy.
     * Ellipsoid semi-major axis (a)=20926201 exactly Gold Coast feet; 1 Gold Coast foot = 0.3047997101815 m.
     */
    public const EPSG_SIERRA_LEONE_1924 = 4174;

    /**
     * Sierra Leone 1968
     * Extent: Sierra Leone - onshore.
     * Scope: Geodesy.
     * Replaces Sierra Leone 1960. The 1968 readjustment coordinates are within 3m of the 1960 provisional adjustment.
     */
    public const EPSG_SIERRA_LEONE_1968 = 4175;

    /**
     * Slovenia 1996
     * Extent: Slovenia - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Replaces MG! alias D48 (CRS code 4312).
     */
    public const EPSG_SLOVENIA_1996 = 4765;

    /**
     * Solomon 1968
     * Extent: Solomon Islands - onshore southern Solomon Islands, primarily Guadalcanal, Malaita, San Cristobel, Santa
     * Isobel, Choiseul, Makira-Ulawa.
     * Scope: Military survey.
     */
    public const EPSG_SOLOMON_1968 = 4718;

    /**
     * South East Island 1943
     * Extent: Seychelles - Mahe, Silhouette, North, Aride Island, Praslin, La Digue and Frigate islands including
     * adjacent smaller granitic islands on the Seychelles Bank, Bird Island and Denis Island.
     * Scope: Cadastre, hydrography, topographic mapping.
     */
    public const EPSG_SOUTH_EAST_ISLAND_1943 = 6892;

    /**
     * South Georgia 1968
     * Extent: South Georgia and the South Sandwich Islands - South Georgia onshore.
     * Scope: Military survey.
     */
    public const EPSG_SOUTH_GEORGIA_1968 = 4722;

    /**
     * South Yemen
     * Extent: Yemen - South Yemen onshore mainland.
     * Scope: Geodesy.
     */
    public const EPSG_SOUTH_YEMEN = 4164;

    /**
     * St. George Island
     * Extent: United States (USA) - Alaska - Pribilof Islands - St George Island.
     * Scope: Geodesy.
     * Note: this CRS includes longitudes which are POSITIVE EAST.
     */
    public const EPSG_ST_GEORGE_ISLAND = 4138;

    /**
     * St. Helena Tritan
     * Extent: St Helena, Ascension and Tristan da Cunha - St Helena Island - onshore.
     * Scope: Horizontal component of 3D system.
     * Replaced by SHGD2015 (CRS code 7886) from 2015.
     */
    public const EPSG_ST_HELENA_TRITAN = 7881;

    /**
     * St. Kitts 1955
     * Extent: St Kitts and Nevis - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_ST_KITTS_1955 = 4605;

    /**
     * St. Lawrence Island
     * Extent: United States (USA) - Alaska - St Lawrence Island.
     * Scope: Geodesy.
     * Note: this CRS includes longitudes which are POSITIVE EAST.
     */
    public const EPSG_ST_LAWRENCE_ISLAND = 4136;

    /**
     * St. Lucia 1955
     * Extent: St Lucia - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_ST_LUCIA_1955 = 4606;

    /**
     * St. Paul Island
     * Extent: United States (USA) - Alaska - Pribilof Islands - St Paul Island.
     * Scope: Geodesy.
     * Note: this CRS includes longitudes which are POSITIVE EAST.
     */
    public const EPSG_ST_PAUL_ISLAND = 4137;

    /**
     * St. Stephen (Ferro)
     * Extent: Austria - Lower Austria. Czechia - Moravia and Czech Silesia.
     * Scope: Cadastre.
     */
    public const EPSG_ST_STEPHEN_FERRO = 8043;

    /**
     * St. Vincent 1945
     * Extent: St Vincent and the northern Grenadine Islands - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_ST_VINCENT_1945 = 4607;

    /**
     * TC(1948)
     * Extent: United Arab Emirates (UAE) - Abu Dhabi onshore and Dubai onshore.
     * Scope: Geodesy.
     */
    public const EPSG_TC_1948 = 4303;

    /**
     * TGD2005
     * Extent: Tonga - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_TGD2005 = 5886;

    /**
     * TM65
     * Extent: Ireland - onshore. United Kingdom (UK) - Northern Ireland (Ulster) - onshore.
     * Scope: Basis for topographic mapping in Republic of Ireland between 1965 and 1975; for scientific purposes only
     * in Northern Ireland.
     * Replaced by 1975 Mapping Adjustment alias TM75 (CRS code 4300). Not to be confused with the Geodetic Datum of
     * 1965 (datum code 6300) which is used by TM75.
     */
    public const EPSG_TM65 = 4299;

    /**
     * TM75
     * Extent: Ireland - onshore. United Kingdom (UK) - Northern Ireland (Ulster) - onshore.
     * Scope: Basis for topographic mapping.
     * Uses Geodetic Datum of 1965 which should not be confused with the 1965 adjustment (TM65, datum code 6299 and CRS
     * code 4299). Replaces OSNI52 (CRS code 4188) and TM65 (CRS code 4299). Replaced by IRENET95 (CRS code 4173).
     */
    public const EPSG_TM75 = 4300;

    /**
     * TPEN11-IRF
     * Extent: UK - on or related to the Trans-Pennine rail route from Liverpool via Manchester to Bradford and Leeds.
     * Scope: Engineering survey and topographic mapping for railway applications.
     * Intermediate CRS created in 2020 to assist the emulation of the ETRS89 / TPEN11 SnakeGrid projected CRS through
     * transformation ETRS89 to TPEN11-IRF (1) (code 9365) used in conjunction with the TPEN11-TM map projection (code
     * 9366).
     */
    public const EPSG_TPEN11_IRF = 9364;

    /**
     * TUREF
     * Extent: Turkey - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_TUREF = 5252;

    /**
     * TWD67
     * Extent: Taiwan, Republic of China - onshore - Taiwan Island, Penghu (Pescadores) Islands.
     * Scope: Geodesy.
     * Shares the same origin point with the earlier Hu Tzu Shan system (CRS code 4236) but away from this point
     * coordinates differ. Do not confuse!
     */
    public const EPSG_TWD67 = 3821;

    /**
     * TWD97
     * Extent: Taiwan, Republic of China - onshore and offshore - Taiwan Island, Penghu (Pescadores) Islands.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_TWD97 = 3824;

    /**
     * Tahaa 54
     * Extent: French Polynesia - Society Islands - Bora Bora, Huahine, Raiatea and Tahaa.
     * Scope: Geodesy.
     * Replaced by RGPF, CRS code 4687.
     */
    public const EPSG_TAHAA_54 = 4629;

    /**
     * Tahiti 52
     * Extent: French Polynesia - Society Islands - Moorea and Tahiti.
     * Scope: Geodesy.
     * Replaced by Tahiti 79 (CRS code 4690) in Tahiti and Moorea 87 (CRS code 4691) in Moorea.
     */
    public const EPSG_TAHITI_52 = 4628;

    /**
     * Tahiti 79
     * Extent: French Polynesia - Society Islands - Tahiti.
     * Scope: Hydrography, topographic mapping.
     * Replaces Tahiti 52 (CRS code 4628) in Tahiti. Replaced by RGPF (CRS code 4687).
     */
    public const EPSG_TAHITI_79 = 4690;

    /**
     * Tananarive
     * Extent: Madagascar - onshore and nearshore.
     * Scope: Geodesy.
     */
    public const EPSG_TANANARIVE = 4297;

    /**
     * Tananarive (Paris)
     * Extent: Madagascar - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_TANANARIVE_PARIS = 4810;

    /**
     * Tapi Aike
     * Extent: Argentina - Santa Cruz province south of approximately 50°20'S.
     * Scope: Oil and gas exploration and production.
     * Replaced by Campo Inchauspe (geogCRS code 4221) for topographic mapping, use for oil exploration and production
     * continues.
     */
    public const EPSG_TAPI_AIKE = 9248;

    /**
     * Tern Island 1961
     * Extent: United States (USA) - Hawaii - Tern Island and Sorel Atoll.
     * Scope: Military survey.
     */
    public const EPSG_TERN_ISLAND_1961 = 4707;

    /**
     * Tete
     * Extent: Mozambique - onshore.
     * Scope: Geodesy.
     */
    public const EPSG_TETE = 4127;

    /**
     * Timbalai 1948
     * Extent: Brunei - onshore and offshore; Malaysia - East Malaysia (Sabah; Sarawak) - onshore and offshore.
     * Scope: Geodesy.
     * Adopts metric conversion of 39.370147 inches per metre. Replaced by GDM2000 (CRS code 4742) in East Malaysia and
     * by GDBD2009 (CRS code 5247) in Brunei.
     */
    public const EPSG_TIMBALAI_1948 = 4298;

    /**
     * Tokyo
     * Extent: Japan - onshore; North Korea - onshore; South Korea - onshore.
     * Scope: Geodesy.
     * In Japan, replaces Tokyo 1892 (CRS code 5132) and replaced by JGD2000 (code 4612) from April 2002. In Korea used
     * only for geodetic applications before being replaced by Korean 1985 (code 4162).
     */
    public const EPSG_TOKYO = 4301;

    /**
     * Tokyo 1892
     * Extent: Japan - onshore; North Korea - onshore; South Korea - onshore.
     * Scope: Geodesy.
     * Extended from Japan to Korea in 1898. In Japan, replaced by Tokyo 1918 (CRS code 4301). In South Korea replaced
     * by Tokyo 1918 only for geodetic applications; for all other purposes replaced by Korean 1985 (code 4162).
     */
    public const EPSG_TOKYO_1892 = 5132;

    /**
     * Trinidad 1903
     * Extent: Trinidad and Tobago - Trinidad - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_TRINIDAD_1903 = 4302;

    /**
     * Tristan 1968
     * Extent: St Helena, Ascension and Tristan da Cunha - Tristan da Cunha island group including Tristan,
     * Inaccessible, Nightingale, Middle and Stoltenhoff Islands.
     * Scope: Military survey.
     */
    public const EPSG_TRISTAN_1968 = 4734;

    /**
     * UCS-2000
     * Extent: Ukraine - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     * Adopted 1st January 2007, replacing Pulkovo 1942 (CRS 4284).
     */
    public const EPSG_UCS_2000 = 5561;

    /**
     * VN-2000
     * Extent: Vietnam - onshore.
     * Scope: Geodesy.
     * Replaces Hanoi 1972 (CRS code 4147).
     */
    public const EPSG_VN_2000 = 4756;

    /**
     * Vanua Levu 1915
     * Extent: Fiji - Vanua Levu and Taveuni.
     * Scope: Geodesy.
     * For topographic mapping, replaced by Fiji 1956 (CRS code 4721). For other purposes, replaced by Fiji 1986 (CRS
     * code 4720).
     */
    public const EPSG_VANUA_LEVU_1915 = 4748;

    /**
     * Vientiane 1982
     * Extent: Laos.
     * Scope: Topographic mapping (medium and small scale).
     * Replaced by Lao 1993 and then by Lao 1997. Vientiane 1982 coordinate values are within 3m of Lao 1997 values.
     */
    public const EPSG_VIENTIANE_1982 = 4676;

    /**
     * Viti Levu 1912
     * Extent: Fiji - Viti Levu island.
     * Scope: Geodesy.
     * For topographic mapping, replaced by Fiji 1956 (CRS code 4721). For other purposes, replaced by Fiji 1986 (CRS
     * code 4720).
     */
    public const EPSG_VITI_LEVU_1912 = 4752;

    /**
     * Voirol 1875
     * Extent: Algeria - onshore north of 32°N.
     * Scope: Geodesy.
     * The appropriate usage of CRSs using the Voirol 1875 and 1879 datums is lost in antiquity. They differ by about 9
     * metres. Oil industry references to one could in reality be to either. All replaced by Nord Sahara 1959 (CRS code
     * 4307).
     */
    public const EPSG_VOIROL_1875 = 4304;

    /**
     * Voirol 1875 (Paris)
     * Extent: Algeria - onshore north of 32°N.
     * Scope: Geodesy.
     * The appropriate usage of CRSs using the Voirol 1875 and 1879 datums is lost in antiquity. They differ by about 9
     * metres. Oil industry references to one could in reality be to either. All replaced by Nord Sahara 1959 (CRS code
     * 4307).
     */
    public const EPSG_VOIROL_1875_PARIS = 4811;

    /**
     * Voirol 1879
     * Extent: Algeria - onshore north of 32°N.
     * Scope: Geodesy.
     * The appropriate usage of CRSs using the Voirol 1875 and 1879 datums is lost in antiquity. They differ by about 9
     * metres. Oil industry references to one could in reality be to either. All replaced by Nord Sahara 1959 (CRS code
     * 4307).
     */
    public const EPSG_VOIROL_1879 = 4671;

    /**
     * Voirol 1879 (Paris)
     * Extent: Algeria - onshore north of 32°N.
     * Scope: Geodesy.
     * The appropriate usage of CRSs using the Voirol 1875 and 1879 datums is lost in antiquity. They differ by about 9
     * metres. Oil industry references to one could in reality be to either. All replaced by Nord Sahara 1959 (CRS code
     * 4307).
     */
    public const EPSG_VOIROL_1879_PARIS = 4821;

    /**
     * WGS 66
     * Extent: World.
     * Scope: Horizontal component of 3D system.
     * Replaced by WGS 72.
     */
    public const EPSG_WGS_66 = 4760;

    /**
     * WGS 72
     * Extent: World.
     * Scope: Horizontal component of 3D system.
     * Replaced by WGS 84.
     */
    public const EPSG_WGS_72 = 4322;

    /**
     * WGS 72BE
     * Extent: World.
     * Scope: Horizontal component of 3D system.
     * Broadcast ephemeris. Replaced by WGS 84.
     */
    public const EPSG_WGS_72BE = 4324;

    /**
     * WGS 84
     * Extent: World.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_WGS_84 = 4326;

    /**
     * WGS 84 (G1150)
     * Extent: World.
     * Scope: Geodesy. Navigation and positioning using GPS satellite system.
     * Replaces  WGS 84 (G873) (CRS code 9054) from 2002-01-20. Replaced by WGS 84 (G1674) (CRS code 9056) from
     * 2012-02-08.
     */
    public const EPSG_WGS_84_G1150 = 9055;

    /**
     * WGS 84 (G1674)
     * Extent: World.
     * Scope: Geodesy. Navigation and positioning using GPS satellite system.
     * Replaces WGS 84 (G1150) (CRS code 9055) from 2012-02-08. Replaced by WGS 84 (G1762) (CRS code 9057) from
     * 2013-10-16.
     */
    public const EPSG_WGS_84_G1674 = 9056;

    /**
     * WGS 84 (G1762)
     * Extent: World.
     * Scope: Geodesy. Navigation and positioning using GPS satellite system.
     * Replaces WGS 84 (G1674) (CRS code 9056) from 2013-10-16.
     */
    public const EPSG_WGS_84_G1762 = 9057;

    /**
     * WGS 84 (G730)
     * Extent: World.
     * Scope: Geodesy. Navigation and positioning using GPS satellite system.
     * Replaces WGS 84 (Transit) (CRS code 8888) from 1994-06-29. Replaced by WGS84 (G873) (CRS code 9054) from
     * 1997-01-29.
     */
    public const EPSG_WGS_84_G730 = 9053;

    /**
     * WGS 84 (G873)
     * Extent: World.
     * Scope: Geodesy. Navigation and positioning using GPS satellite system.
     * Replaces WGS 84 (G730) (CRS code 9053) from 1997-01-29. Replaced by WGS 84 (G1150) (CRS code 9055) from
     * 2002-01-20.
     */
    public const EPSG_WGS_84_G873 = 9054;

    /**
     * WGS 84 (Transit)
     * Extent: World.
     * Scope: Geodesy. Navigation and positioning using GPS satellite system.
     * Replaced by WGS84 (G730) (CRS code 9053) from 1994-06-29.
     */
    public const EPSG_WGS_84_TRANSIT = 8888;

    /**
     * Wake Island 1952
     * Extent: Wake atoll - onshore.
     * Scope: Military survey.
     */
    public const EPSG_WAKE_ISLAND_1952 = 4733;

    /**
     * Xian 1980
     * Extent: China - onshore.
     * Scope: Geodesy.
     * Replaces Beijing 1954 (CRS code 4214). Replaced by CGCS2000(CRS code 4490).
     */
    public const EPSG_XIAN_1980 = 4610;

    /**
     * Yacare
     * Extent: Uruguay - onshore.
     * Scope: Geodesy.
     * Replaced by SIRGAS-ROU98 (CRS code 5381).
     */
    public const EPSG_YACARE = 4309;

    /**
     * Yemen NGN96
     * Extent: Yemen - onshore and offshore.
     * Scope: Horizontal component of 3D system.
     */
    public const EPSG_YEMEN_NGN96 = 4163;

    /**
     * Yoff
     * Extent: Senegal - onshore and offshore.
     * Scope: Geodesy.
     */
    public const EPSG_YOFF = 4310;

    /**
     * Zanderij
     * Extent: Suriname - onshore and offshore.
     * Scope: Geodesy.
     * Introduced in 1975.
     */
    public const EPSG_ZANDERIJ = 4311;

    /**
     * fk89
     * Extent: Faroe Islands - onshore.
     * Scope: Cadastre.
     * Replaces FD54 (CRS code 4741). Coordinate differences are less than 0.05 seconds (2m). The name of this system
     * is also used for the dependent projected CRS - see CRS code 3173.
     */
    public const EPSG_FK89 = 4753;

    public function __construct(
        int $epsgCode,
        CoordinateSystem $coordinateSystem,
        Datum $datum
    ) {
        $this->epsgCode = $epsgCode;
        $this->coordinateSystem = $coordinateSystem;
        $this->datum = $datum;

        assert(count($coordinateSystem->getAxes()) === 2);
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
