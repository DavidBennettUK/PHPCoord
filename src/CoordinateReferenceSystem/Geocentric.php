<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateReferenceSystem;

use function assert;
use function count;
use PHPCoord\CoordinateSystem\Cartesian;
use PHPCoord\CoordinateSystem\CoordinateSystem;
use PHPCoord\Datum\Datum;
use PHPCoord\Exception\UnknownCoordinateReferenceSystemException;

class Geocentric extends CoordinateReferenceSystem
{
    /**
     * ATRF2014
     * Extent: Australia including Lord Howe Island, Macquarie Islands, Ashmore and Cartier Islands, Christmas Island,
     * Cocos (Keeling) Islands, Norfolk Island. All onshore and offshore.
     */
    public const EPSG_ATRF2014 = 'urn:ogc:def:crs:EPSG::9307';

    /**
     * Australian Antarctic
     * Extent: Antarctica between 45°E and 136°E and between 142°E and 160°E - Australian sector.
     */
    public const EPSG_AUSTRALIAN_ANTARCTIC = 'urn:ogc:def:crs:EPSG::4930';

    /**
     * BDA2000
     * Extent: Bermuda - onshore and offshore.
     */
    public const EPSG_BDA2000 = 'urn:ogc:def:crs:EPSG::4886';

    /**
     * BGS2005
     * Extent: Bulgaria - onshore and offshore.
     * Adopted 2010-07-29.
     */
    public const EPSG_BGS2005 = 'urn:ogc:def:crs:EPSG::7796';

    /**
     * CGRS93
     * Extent: Cyprus - onshore.
     */
    public const EPSG_CGRS93 = 'urn:ogc:def:crs:EPSG::6309';

    /**
     * CHTRF95
     * Extent: Liechtenstein; Switzerland.
     * Referenced to ETRS89 at epoch 1993.0. For CRS used for topographic and cadastral purposes see CH1903+ (CRS code
     * 4150).
     */
    public const EPSG_CHTRF95 = 'urn:ogc:def:crs:EPSG::4932';

    /**
     * CIGD11
     * Extent: Cayman Islands - onshore and offshore. Includes Grand Cayman, Little Cayman and Cayman Brac.
     */
    public const EPSG_CIGD11 = 'urn:ogc:def:crs:EPSG::6133';

    /**
     * CR-SIRGAS
     * Extent: Costa Rica - onshore and offshore.
     * Replaces CR05 (CRS code 5363) from April 2018.
     */
    public const EPSG_CR_SIRGAS = 'urn:ogc:def:crs:EPSG::8905';

    /**
     * CR05
     * Extent: Costa Rica - onshore and offshore.
     * Replaced by CR-SIRGAS (CRS code 8905) from April 2018.
     */
    public const EPSG_CR05 = 'urn:ogc:def:crs:EPSG::5363';

    /**
     * Cadastre 1997
     * Extent: Mayotte - onshore.
     */
    public const EPSG_CADASTRE_1997 = 'urn:ogc:def:crs:EPSG::4473';

    /**
     * China Geodetic Coordinate System 2000
     * Extent: China - onshore and offshore.
     */
    public const EPSG_CHINA_GEODETIC_COORDINATE_SYSTEM_2000 = 'urn:ogc:def:crs:EPSG::4479';

    /**
     * DB_REF
     * Extent: Germany - onshore - states of Baden-Wurtemberg, Bayern, Berlin, Brandenburg, Bremen, Hamburg, Hessen,
     * Mecklenburg-Vorpommern, Niedersachsen, Nordrhein-Westfalen, Rheinland-Pfalz, Saarland, Sachsen, Sachsen-Anhalt,
     * Schleswig-Holstein, Thuringen.
     * Derived from ETRS89 through transformation code 5826.
     */
    public const EPSG_DB_REF = 'urn:ogc:def:crs:EPSG::5828';

    /**
     * DGN95
     * Extent: Indonesia - onshore and offshore.
     */
    public const EPSG_DGN95 = 'urn:ogc:def:crs:EPSG::4897';

    /**
     * DRUKREF 03
     * Extent: Bhutan.
     */
    public const EPSG_DRUKREF_03 = 'urn:ogc:def:crs:EPSG::5262';

    /**
     * EST97
     * Extent: Estonia - onshore and offshore.
     */
    public const EPSG_EST97 = 'urn:ogc:def:crs:EPSG::4934';

    /**
     * ETRF2000
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Replaces ETRF97 (code 7928). On the publication of ETRF2005 (code 8397),  the EUREF Technical Working Group
     * recommended that ETRF2000 be the realization of ETRS89. ETRF2014 (code 8401) is technically superior to all
     * earlier realizations of ETRS89.
     */
    public const EPSG_ETRF2000 = 'urn:ogc:def:crs:EPSG::7930';

    /**
     * ETRF2005
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * On publication in 2007 of this CRS, the EUREF Technical Working Group recommended that ETRF2000 (EPSG code 7930)
     * remained as the preferred realization of ETRS89. Replaced by ETRF2014 (code 8401).
     */
    public const EPSG_ETRF2005 = 'urn:ogc:def:crs:EPSG::8397';

    /**
     * ETRF2014
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Replaces ETRF2005 (code 8397). ETRF2014 is technically superior to ETRF2000 but ETRF2000 and other previous
     * realizations may be preferred for backward compatibility reasons. Differences between ETRF2014 and ETRF2000 can
     * reach 7cm.
     */
    public const EPSG_ETRF2014 = 'urn:ogc:def:crs:EPSG::8401';

    /**
     * ETRF89
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Replaced by ETRF90 (code 7916).
     */
    public const EPSG_ETRF89 = 'urn:ogc:def:crs:EPSG::7914';

    /**
     * ETRF90
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Replaces ETRF89 (code 7914). Replaced by ETRF91 (code 7918).
     */
    public const EPSG_ETRF90 = 'urn:ogc:def:crs:EPSG::7916';

    /**
     * ETRF91
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Replaces ETRF90 (code 7916). Replaced by ETRF92 (code 7920).
     */
    public const EPSG_ETRF91 = 'urn:ogc:def:crs:EPSG::7918';

    /**
     * ETRF92
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Replaces ETRF91 (code 7918). Replaced by ETRF93 (code 7922).
     */
    public const EPSG_ETRF92 = 'urn:ogc:def:crs:EPSG::7920';

    /**
     * ETRF93
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Replaces ETRF92 (code 7920). Replaced by ETRF94 (code 7924).
     */
    public const EPSG_ETRF93 = 'urn:ogc:def:crs:EPSG::7922';

    /**
     * ETRF94
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Replaces ETRF93 (code 7922). Replaced by ETRF96 (code 7926).
     */
    public const EPSG_ETRF94 = 'urn:ogc:def:crs:EPSG::7924';

    /**
     * ETRF96
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Replaces ETRF94 (code 7924). Replaced by ETRF97 (code 7928).
     */
    public const EPSG_ETRF96 = 'urn:ogc:def:crs:EPSG::7926';

    /**
     * ETRF97
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Replaces ETRF96 (code 7926). Replaced by ETRF2000 (code 7930).
     */
    public const EPSG_ETRF97 = 'urn:ogc:def:crs:EPSG::7928';

    /**
     * ETRS89
     * Extent: Europe - onshore and offshore: Albania; Andorra; Austria; Belgium; Bosnia and Herzegovina; Bulgaria;
     * Croatia; Cyprus; Czechia; Denmark; Estonia; Faroe Islands; Finland; France; Germany; Gibraltar; Greece; Hungary;
     * Ireland; Italy; Kosovo; Latvia; Liechtenstein; Lithuania; Luxembourg; Malta; Moldova; Monaco; Montenegro;
     * Netherlands; North Macedonia; Norway including Svalbard and Jan Mayen; Poland; Portugal; Romania; San Marino;
     * Serbia; Slovakia; Slovenia; Spain; Sweden; Switzerland; United Kingdom (UK) including Channel Islands and Isle
     * of Man; Vatican City State.
     * Has been realized through ETRF89, ETRF90, ETRF91, ETRF92, ETRF93, ETRF94, ETRF96, ETRF97, ETRF2000, ETRF2005 and
     * ETRF2014. This 'ensemble' covers any or all of these realizations without distinction.
     */
    public const EPSG_ETRS89 = 'urn:ogc:def:crs:EPSG::4936';

    /**
     * FEH2010
     * Extent: Fehmarnbelt area of Denmark and Germany.
     * Trans-national system created due to small (but unacceptable for engineering tolerance) differences between the
     * German and Danish realisations of ETRS89.
     */
    public const EPSG_FEH2010 = 'urn:ogc:def:crs:EPSG::5591';

    /**
     * GDA2020
     * Extent: Australia including Lord Howe Island, Macquarie Islands, Ashmore and Cartier Islands, Christmas Island,
     * Cocos (Keeling) Islands, Norfolk Island. All onshore and offshore.
     */
    public const EPSG_GDA2020 = 'urn:ogc:def:crs:EPSG::7842';

    /**
     * GDA94
     * Extent: Australia including Lord Howe Island, Macquarie Islands, Ashmore and Cartier Islands, Christmas Island,
     * Cocos (Keeling) Islands, Norfolk Island. All onshore and offshore.
     */
    public const EPSG_GDA94 = 'urn:ogc:def:crs:EPSG::4938';

    /**
     * GDBD2009
     * Extent: Brunei Darussalam - onshore and offshore.
     */
    public const EPSG_GDBD2009 = 'urn:ogc:def:crs:EPSG::5244';

    /**
     * GDM2000
     * Extent: Malaysia - onshore and offshore. Includes peninsular Malayasia, Sabah and Sarawak.
     */
    public const EPSG_GDM2000 = 'urn:ogc:def:crs:EPSG::4920';

    /**
     * GR96
     * Extent: Greenland - onshore and offshore.
     */
    public const EPSG_GR96 = 'urn:ogc:def:crs:EPSG::4908';

    /**
     * GSK-2011
     * Extent: Russian Federation - onshore and offshore.
     */
    public const EPSG_GSK_2011 = 'urn:ogc:def:crs:EPSG::7681';

    /**
     * HTRS96
     * Extent: Croatia - onshore and offshore.
     */
    public const EPSG_HTRS96 = 'urn:ogc:def:crs:EPSG::4888';

    /**
     * Hartebeesthoek94
     * Extent: Eswatini (Swaziland); Lesotho; South Africa - onshore and offshore.
     */
    public const EPSG_HARTEBEESTHOEK94 = 'urn:ogc:def:crs:EPSG::4940';

    /**
     * Hong Kong Geodetic CS
     * Extent: China - Hong Kong - onshore and offshore.
     * Locally sometimes referred to as ITRF96 or WGS 84, these are not strictly correct.
     */
    public const EPSG_HONG_KONG_GEODETIC_CS = 'urn:ogc:def:crs:EPSG::8425';

    /**
     * IG05 Intermediate CRS
     * Extent: Israel - onshore; Palestine Territory - onshore.
     * Intermediate system not used for spatial referencing - use IGD05 (CRS code 6978).
     */
    public const EPSG_IG05_INTERMEDIATE_CRS = 'urn:ogc:def:crs:EPSG::6981';

    /**
     * IG05/12 Intermediate CRS
     * Extent: Israel - onshore; Palestine Territory - onshore.
     * Intermediate system not used for spatial referencing - use IGD05/12 (CRS code 6985).
     */
    public const EPSG_IG05_12_INTERMEDIATE_CRS = 'urn:ogc:def:crs:EPSG::6988';

    /**
     * IGD05
     * Extent: Israel - onshore and offshore.
     * Replaced by IGD05/12 (CRS code 7137).
     */
    public const EPSG_IGD05 = 'urn:ogc:def:crs:EPSG::7134';

    /**
     * IGD05/12
     * Extent: Israel - onshore and offshore.
     * Replaces IGD05 (CRS code 7134).
     */
    public const EPSG_IGD05_12 = 'urn:ogc:def:crs:EPSG::7137';

    /**
     * IGM95
     * Extent: Italy - onshore and offshore; San Marino, Vatican City State.
     * Replaced by RDN2008 (CRS code 6704) from 2011-11-10.
     */
    public const EPSG_IGM95 = 'urn:ogc:def:crs:EPSG::4982';

    /**
     * IGRS
     * Extent: Iraq - onshore and offshore.
     */
    public const EPSG_IGRS = 'urn:ogc:def:crs:EPSG::3887';

    /**
     * IGS00
     * Extent: World.
     * Adopted by the International GNSS Service (IGS) from 2001-12-02 through 2004-01-10. Replaces IGS97, replaced by
     * IGb00 (CRS codes 9001 and 9007). For all practical purposes IGS00 is equivalent to ITRF2000.
     */
    public const EPSG_IGS00 = 'urn:ogc:def:crs:EPSG::9004';

    /**
     * IGS05
     * Extent: World.
     * Adopted by the International GNSS Service (IGS) from 2006-11-05 through 2011-04-16. Replaces IGb00, replaced by
     * IGS08 (CRS codes 9007 and 6834). For all practical purposes IGS05 is equivalent to ITRF2005.
     */
    public const EPSG_IGS05 = 'urn:ogc:def:crs:EPSG::9010';

    /**
     * IGS08
     * Extent: World.
     * Used for products from International GNSS Service (IGS) analysis centres from 2011-04-17 through 2012-10-06.
     * Replaces IGS05 (code 9010). Replaced by IGb08 (code 9015). For most practical purposes IGS08 is equivalent to
     * ITRF2008.
     */
    public const EPSG_IGS08 = 'urn:ogc:def:crs:EPSG::6934';

    /**
     * IGS14
     * Extent: World.
     * Used for products from the International GNSS Service (IGS) from 2017-01-29 to 2020-05-16. Replaces IGb08 (code
     * 9015), replaced by IGb14 (code 9378). For most practical purposes IGS14 is equivalent to ITRF2014.
     */
    public const EPSG_IGS14 = 'urn:ogc:def:crs:EPSG::8227';

    /**
     * IGS97
     * Extent: World.
     * Adopted by the International GNSS Service (IGS) from 2000-06-04 through 2001-12-01. Replaced by IGS00 (CRS code
     * 9004). For all practical purposes IGS97 is equivalent to ITRF97.
     */
    public const EPSG_IGS97 = 'urn:ogc:def:crs:EPSG::9001';

    /**
     * IGb00
     * Extent: World.
     * Adopted by the International GNSS Service (IGS) from 2004-01-11 through 2006-11-04. Replaces IGS00, replaced by
     * IGS05 (CRS codes 9004 and 9010). For all practical purposes IGb00 is equivalent to ITRF2000.
     */
    public const EPSG_IGB00 = 'urn:ogc:def:crs:EPSG::9007';

    /**
     * IGb08
     * Extent: World.
     * Adopted by the International GNSS Service (IGS) from 2012-10-07 through 2017-01-28. Replaces IGS08, replaced by
     * IGS14 (CRS codes 6934 and 8227). For all practical purposes IGb08 is equivalent to ITRF2008.
     */
    public const EPSG_IGB08 = 'urn:ogc:def:crs:EPSG::9015';

    /**
     * IGb14
     * Extent: World: Afghanistan, Albania, Algeria, American Samoa, Andorra, Angola, Anguilla, Antarctica, Antigua and
     * Barbuda, Argentina, Armenia, Aruba, Australia, Austria, Azerbaijan, Bahamas, Bahrain, Bangladesh, Barbados,
     * Belgium, Belgium, Belize, Benin, Bermuda, Bhutan, Bolivia, Bonaire, Saint Eustasius and Saba, Bosnia and
     * Herzegovina, Botswana, Bouvet Island, Brazil, British Indian Ocean Territory, British Virgin Islands, Brunei
     * Darussalam, Bulgaria, Burkina Faso, Burundi, Cambodia, Cameroon, Canada, Cape Verde, Cayman Islands, Central
     * African Republic, Chad, Chile, China, Christmas Island, Cocos (Keeling) Islands, Comoros, Congo, Cook Islands,
     * Costa Rica, Côte d'Ivoire (Ivory Coast), Croatia, Cuba, Curacao, Cyprus, Czechia, Denmark, Djibouti, Dominica,
     * Dominican Republic, East Timor, Ecuador, Egypt, El Salvador, Equatorial Guinea, Eritrea, Estonia, Eswatini
     * (Swaziland), Ethiopia, Falkland Islands (Malvinas), Faroe Islands, Fiji, Finland, France, French Guiana, French
     * Polynesia, French Southern Territories, Gabon, Gambia, Georgia, Germany, Ghana, Gibraltar, Greece, Greenland,
     * Grenada, Guadeloupe, Guam, Guatemala, Guinea, Guinea-Bissau, Guyana, Haiti, Heard Island and McDonald Islands,
     * Holy See (Vatican City State), Honduras, China - Hong Kong, Hungary, Iceland, India, Indonesia, Islamic Republic
     * of Iran, Iraq, Ireland, Israel, Italy, Jamaica, Japan, Jordan, Kazakhstan, Kenya, Kiribati, Democratic People's
     * Republic of Korea (North Korea), Republic of Korea (South Korea), Kosovo, Kuwait, Kyrgyzstan, Lao People's
     * Democratic Republic (Laos), Latvia, Lebanon, Lesotho, Liberia, Libyan Arab Jamahiriya, Liechtenstein, Lithuania,
     * Luxembourg, China - Macao, Madagascar, Malawi, Malaysia, Maldives, Mali, Malta, Marshall Islands, Martinique,
     * Mauritania, Mauritius, Mayotte, Mexico, Federated States of Micronesia, Monaco, Mongolia, Montenegro,
     * Montserrat, Morocco, Mozambique, Myanmar (Burma), Namibia, Nauru, Nepal, Netherlands, New Caledonia, New
     * Zealand, Nicaragua, Niger, Nigeria, Niue, Norfolk Island, North Macedonia, Northern Mariana Islands, Norway,
     * Oman, Pakistan, Palau, Panama, Papua New Guinea (PNG), Paraguay, Peru, Philippines, Pitcairn, Poland, Portugal,
     * Puerto Rico, Qatar, Reunion, Romania, Russian Federation, Rwanda, Saint Kitts and Nevis, Saint Helena, Ascension
     * and Tristan da Cunha, Saint Lucia, Saint Pierre and Miquelon, Saint Vincent and the Grenadines, Samoa, San
     * Marino, Sao Tome and Principe, Saudi Arabia, Senegal, Serbia, Seychelles, Sierra Leone, Singapore, Slovakia
     * (Slovak Republic), Slovenia, Sint Maarten, Solomon Islands, Somalia, South Africa, South Georgia and the South
     * Sandwich Islands, South Sudan, Spain, Sri Lanka, Sudan, Suriname, Svalbard and Jan Mayen, Sweden, Switzerland,
     * Syrian Arab Republic, Taiwan, Tajikistan, United Republic of Tanzania, Thailand, The Democratic Republic of the
     * Congo (Zaire), Togo, Tokelau, Tonga, Trinidad and Tobago, Tunisia, Turkey, Turkmenistan, Turks and Caicos
     * Islands, Tuvalu, Uganda, Ukraine, United Arab Emirates (UAE), United Kingdom (UK), United States (USA), United
     * States Minor Outlying Islands, Uruguay, Uzbekistan, Vanuatu, Venezuela, Vietnam, US Virgin Islands, Wallis and
     * Futuna, Western Sahara, Yemen, Zambia, Zimbabwe.
     * Used for products from the International GNSS Service (IGS) from 2020-05-17. Replaces IGS14 (code 8227). For
     * most practical purposes IGb14 is equivalent to ITRF2014.
     */
    public const EPSG_IGB14 = 'urn:ogc:def:crs:EPSG::9378';

    /**
     * IRENET95
     * Extent: Ireland - onshore. United Kingdom (UK) - Northern Ireland (Ulster) - onshore.
     */
    public const EPSG_IRENET95 = 'urn:ogc:def:crs:EPSG::4942';

    /**
     * ISN2004
     * Extent: Iceland - onshore and offshore.
     * Replaces ISN93 (CRS code 4944).
     */
    public const EPSG_ISN2004 = 'urn:ogc:def:crs:EPSG::5322';

    /**
     * ISN2016
     * Extent: Iceland - onshore and offshore.
     * Replaces ISN2004 (CRS code 5322) from September 2017.
     */
    public const EPSG_ISN2016 = 'urn:ogc:def:crs:EPSG::8084';

    /**
     * ISN93
     * Extent: Iceland - onshore and offshore.
     * Replaced by ISN2004 (CRS code 5322).
     */
    public const EPSG_ISN93 = 'urn:ogc:def:crs:EPSG::4944';

    /**
     * ITRF2000
     * Extent: World.
     * Replaces ITRF97 (code 4918). Replaced by ITRF2005 (code 4896).
     */
    public const EPSG_ITRF2000 = 'urn:ogc:def:crs:EPSG::4919';

    /**
     * ITRF2005
     * Extent: World.
     * Replaces ITRF2000 (CRS code 4919). Replaced by ITRF2008 (CRS code 5332).
     */
    public const EPSG_ITRF2005 = 'urn:ogc:def:crs:EPSG::4896';

    /**
     * ITRF2008
     * Extent: World.
     * Replaces ITRF2005 (CRS code 4896). Replaced by ITRF2014 (CRS code 7789).
     */
    public const EPSG_ITRF2008 = 'urn:ogc:def:crs:EPSG::5332';

    /**
     * ITRF2014
     * Extent: World: Afghanistan, Albania, Algeria, American Samoa, Andorra, Angola, Anguilla, Antarctica, Antigua and
     * Barbuda, Argentina, Armenia, Aruba, Australia, Austria, Azerbaijan, Bahamas, Bahrain, Bangladesh, Barbados,
     * Belgium, Belgium, Belize, Benin, Bermuda, Bhutan, Bolivia, Bonaire, Saint Eustasius and Saba, Bosnia and
     * Herzegovina, Botswana, Bouvet Island, Brazil, British Indian Ocean Territory, British Virgin Islands, Brunei
     * Darussalam, Bulgaria, Burkina Faso, Burundi, Cambodia, Cameroon, Canada, Cape Verde, Cayman Islands, Central
     * African Republic, Chad, Chile, China, Christmas Island, Cocos (Keeling) Islands, Comoros, Congo, Cook Islands,
     * Costa Rica, Côte d'Ivoire (Ivory Coast), Croatia, Cuba, Curacao, Cyprus, Czechia, Denmark, Djibouti, Dominica,
     * Dominican Republic, East Timor, Ecuador, Egypt, El Salvador, Equatorial Guinea, Eritrea, Estonia, Eswatini
     * (Swaziland), Ethiopia, Falkland Islands (Malvinas), Faroe Islands, Fiji, Finland, France, French Guiana, French
     * Polynesia, French Southern Territories, Gabon, Gambia, Georgia, Germany, Ghana, Gibraltar, Greece, Greenland,
     * Grenada, Guadeloupe, Guam, Guatemala, Guinea, Guinea-Bissau, Guyana, Haiti, Heard Island and McDonald Islands,
     * Holy See (Vatican City State), Honduras, China - Hong Kong, Hungary, Iceland, India, Indonesia, Islamic Republic
     * of Iran, Iraq, Ireland, Israel, Italy, Jamaica, Japan, Jordan, Kazakhstan, Kenya, Kiribati, Democratic People's
     * Republic of Korea (North Korea), Republic of Korea (South Korea), Kosovo, Kuwait, Kyrgyzstan, Lao People's
     * Democratic Republic (Laos), Latvia, Lebanon, Lesotho, Liberia, Libyan Arab Jamahiriya, Liechtenstein, Lithuania,
     * Luxembourg, China - Macao, Madagascar, Malawi, Malaysia, Maldives, Mali, Malta, Marshall Islands, Martinique,
     * Mauritania, Mauritius, Mayotte, Mexico, Federated States of Micronesia, Monaco, Mongolia, Montenegro,
     * Montserrat, Morocco, Mozambique, Myanmar (Burma), Namibia, Nauru, Nepal, Netherlands, New Caledonia, New
     * Zealand, Nicaragua, Niger, Nigeria, Niue, Norfolk Island, North Macedonia, Northern Mariana Islands, Norway,
     * Oman, Pakistan, Palau, Panama, Papua New Guinea (PNG), Paraguay, Peru, Philippines, Pitcairn, Poland, Portugal,
     * Puerto Rico, Qatar, Reunion, Romania, Russian Federation, Rwanda, Saint Kitts and Nevis, Saint Helena, Ascension
     * and Tristan da Cunha, Saint Lucia, Saint Pierre and Miquelon, Saint Vincent and the Grenadines, Samoa, San
     * Marino, Sao Tome and Principe, Saudi Arabia, Senegal, Serbia, Seychelles, Sierra Leone, Singapore, Slovakia
     * (Slovak Republic), Slovenia, Sint Maarten, Solomon Islands, Somalia, South Africa, South Georgia and the South
     * Sandwich Islands, South Sudan, Spain, Sri Lanka, Sudan, Suriname, Svalbard and Jan Mayen, Sweden, Switzerland,
     * Syrian Arab Republic, Taiwan, Tajikistan, United Republic of Tanzania, Thailand, The Democratic Republic of the
     * Congo (Zaire), Togo, Tokelau, Tonga, Trinidad and Tobago, Tunisia, Turkey, Turkmenistan, Turks and Caicos
     * Islands, Tuvalu, Uganda, Ukraine, United Arab Emirates (UAE), United Kingdom (UK), United States (USA), United
     * States Minor Outlying Islands, Uruguay, Uzbekistan, Vanuatu, Venezuela, Vietnam, US Virgin Islands, Wallis and
     * Futuna, Western Sahara, Yemen, Zambia, Zimbabwe.
     * Replaces ITRF2008 (CRS code 5332).
     */
    public const EPSG_ITRF2014 = 'urn:ogc:def:crs:EPSG::7789';

    /**
     * ITRF88
     * Extent: World.
     * Replaced by ITRF89 (code 4911).
     */
    public const EPSG_ITRF88 = 'urn:ogc:def:crs:EPSG::4910';

    /**
     * ITRF89
     * Extent: World.
     * Replaces ITRF88 (code 4910). Replaced by ITRF90 (code 4912).
     */
    public const EPSG_ITRF89 = 'urn:ogc:def:crs:EPSG::4911';

    /**
     * ITRF90
     * Extent: World.
     * Replaces ITRF89 (code 4911). Replaced by ITRF91 (code 4913).
     */
    public const EPSG_ITRF90 = 'urn:ogc:def:crs:EPSG::4912';

    /**
     * ITRF91
     * Extent: World.
     * Replaces ITRF90 (code 4912). Replaced by ITRF92 (code 4914).
     */
    public const EPSG_ITRF91 = 'urn:ogc:def:crs:EPSG::4913';

    /**
     * ITRF92
     * Extent: World.
     * Replaces ITRF91 (code 4913). Replaced by ITRF93 (code 4915).
     */
    public const EPSG_ITRF92 = 'urn:ogc:def:crs:EPSG::4914';

    /**
     * ITRF93
     * Extent: World.
     * Replaces ITRF92 (code 4914). Replaced by ITRF94 (code 4916).
     */
    public const EPSG_ITRF93 = 'urn:ogc:def:crs:EPSG::4915';

    /**
     * ITRF94
     * Extent: World.
     * Replaces ITRF93 (code 4915). Replaced by ITRF96 (code 4917).
     */
    public const EPSG_ITRF94 = 'urn:ogc:def:crs:EPSG::4916';

    /**
     * ITRF96
     * Extent: World.
     * Replaces ITRF94 (code 4916). Replaced by ITRF97 (code 4918).
     */
    public const EPSG_ITRF96 = 'urn:ogc:def:crs:EPSG::4917';

    /**
     * ITRF97
     * Extent: World.
     * Replaces ITRF96 (code 4917). Replaced by ITRF2000 (code 4919).
     */
    public const EPSG_ITRF97 = 'urn:ogc:def:crs:EPSG::4918';

    /**
     * JAD2001
     * Extent: Jamaica - onshore and offshore. Includes Morant Cays and Pedro Cays.
     */
    public const EPSG_JAD2001 = 'urn:ogc:def:crs:EPSG::4894';

    /**
     * JGD2000
     * Extent: Japan - onshore and offshore.
     * From 21st October 2011 replaced by JGD2011 (CRS code 6666).
     */
    public const EPSG_JGD2000 = 'urn:ogc:def:crs:EPSG::4946';

    /**
     * JGD2011
     * Extent: Japan - onshore and offshore.
     * Replaces JGD2000 (CRS code 4946) with effect from 21st October 2011.
     */
    public const EPSG_JGD2011 = 'urn:ogc:def:crs:EPSG::6666';

    /**
     * KOSOVAREF01
     * Extent: Kosovo.
     */
    public const EPSG_KOSOVAREF01 = 'urn:ogc:def:crs:EPSG::9138';

    /**
     * KSA-GRF17
     * Extent: Saudi Arabia - onshore and offshore.
     */
    public const EPSG_KSA_GRF17 = 'urn:ogc:def:crs:EPSG::9331';

    /**
     * Korea 2000
     * Extent: Republic of Korea (South Korea) - onshore and offshore.
     */
    public const EPSG_KOREA_2000 = 'urn:ogc:def:crs:EPSG::4926';

    /**
     * Kyrg-06
     * Extent: Kyrgyzstan.
     */
    public const EPSG_KYRG_06 = 'urn:ogc:def:crs:EPSG::7684';

    /**
     * LGD2006
     * Extent: Libya - onshore and offshore.
     */
    public const EPSG_LGD2006 = 'urn:ogc:def:crs:EPSG::4899';

    /**
     * LKS92
     * Extent: Latvia - onshore and offshore.
     */
    public const EPSG_LKS92 = 'urn:ogc:def:crs:EPSG::4948';

    /**
     * LKS94
     * Extent: Lithuania - onshore and offshore.
     */
    public const EPSG_LKS94 = 'urn:ogc:def:crs:EPSG::4950';

    /**
     * LTF2004(G)
     * Extent: France and Italy - on or related to the rail route from Lyon to Turin.
     */
    public const EPSG_LTF2004_G = 'urn:ogc:def:crs:EPSG::9545';

    /**
     * Lao 1993
     * Extent: Laos.
     * Replaced by Lao 1997. Lao 1993 coordinate values are within 1m of Lao 1997 values.
     */
    public const EPSG_LAO_1993 = 'urn:ogc:def:crs:EPSG::4990';

    /**
     * Lao 1997
     * Extent: Laos.
     * Replaces Lao 1993. Lao 1993 coordinate values are within 1m of Lao 1997 values.
     */
    public const EPSG_LAO_1997 = 'urn:ogc:def:crs:EPSG::4992';

    /**
     * MACARIO SOLIS
     * Extent: Panama - onshore and offshore.
     * Densification of SIRGAS 2000 within Panama.
     */
    public const EPSG_MACARIO_SOLIS = 'urn:ogc:def:crs:EPSG::5368';

    /**
     * MAGNA-SIRGAS
     * Extent: Colombia - onshore and offshore. Includes San Andres y Providencia, Malpelo Islands, Roncador Bank,
     * Serrana Bank and Serranilla Bank.
     */
    public const EPSG_MAGNA_SIRGAS = 'urn:ogc:def:crs:EPSG::4996';

    /**
     * MARGEN
     * Extent: Bolivia.
     */
    public const EPSG_MARGEN = 'urn:ogc:def:crs:EPSG::5352';

    /**
     * MGI
     * Extent: Austria.
     */
    public const EPSG_MGI = 'urn:ogc:def:crs:EPSG::9266';

    /**
     * MOLDREF99
     * Extent: Moldova.
     */
    public const EPSG_MOLDREF99 = 'urn:ogc:def:crs:EPSG::4000';

    /**
     * MTRF-2000
     * Extent: Saudi Arabia - onshore and offshore.
     */
    public const EPSG_MTRF_2000 = 'urn:ogc:def:crs:EPSG::8816';

    /**
     * Macao 2008
     * Extent: China - Macao - onshore and offshore.
     * Locally sometimes referred to as ITRF2005, this is not strictly correct.
     */
    public const EPSG_MACAO_2008 = 'urn:ogc:def:crs:EPSG::8429';

    /**
     * Mauritania 1999
     * Extent: Mauritania - onshore and offshore.
     */
    public const EPSG_MAURITANIA_1999 = 'urn:ogc:def:crs:EPSG::4924';

    /**
     * Mexico ITRF2008
     * Extent: Mexico - onshore and offshore.
     * Replaces Mexico ITRF92 (CRS code 4481) from December 2010.
     */
    public const EPSG_MEXICO_ITRF2008 = 'urn:ogc:def:crs:EPSG::6363';

    /**
     * Mexico ITRF92
     * Extent: Mexico - onshore and offshore.
     * Replaced by Mexico ITRF2008 (CRS code 6363) from December 2010.
     */
    public const EPSG_MEXICO_ITRF92 = 'urn:ogc:def:crs:EPSG::4481';

    /**
     * Moznet
     * Extent: Mozambique - onshore and offshore.
     */
    public const EPSG_MOZNET = 'urn:ogc:def:crs:EPSG::4952';

    /**
     * NAD83(2011)
     * Extent: Puerto Rico - onshore and offshore. United States (USA) onshore and offshore - Alabama; Alaska; Arizona;
     * Arkansas; California; Colorado; Connecticut; Delaware; Florida; Georgia; Idaho; Illinois; Indiana; Iowa; Kansas;
     * Kentucky; Louisiana; Maine; Maryland; Massachusetts; Michigan; Minnesota; Mississippi; Missouri; Montana;
     * Nebraska; Nevada; New Hampshire; New Jersey; New Mexico; New York; North Carolina; North Dakota; Ohio; Oklahoma;
     * Oregon; Pennsylvania; Rhode Island; South Carolina; South Dakota; Tennessee; Texas; Utah; Vermont; Virginia;
     * Washington; West Virginia; Wisconsin; Wyoming. US Virgin Islands - onshore and offshore.
     * Replaces NAD83(CORS96) and NAD83(NSRS2007) (CRS codes 6781 and 4892).
     */
    public const EPSG_NAD83_2011 = 'urn:ogc:def:crs:EPSG::6317';

    /**
     * NAD83(CORS96)
     * Extent: Puerto Rico - onshore and offshore. United States (USA) onshore and offshore - Alabama; Alaska; Arizona;
     * Arkansas; California; Colorado; Connecticut; Delaware; Florida; Georgia; Idaho; Illinois; Indiana; Iowa; Kansas;
     * Kentucky; Louisiana; Maine; Maryland; Massachusetts; Michigan; Minnesota; Mississippi; Missouri; Montana;
     * Nebraska; Nevada; New Hampshire; New Jersey; New Mexico; New York; North Carolina; North Dakota; Ohio; Oklahoma;
     * Oregon; Pennsylvania; Rhode Island; South Carolina; South Dakota; Tennessee; Texas; Utah; Vermont; Virginia;
     * Washington; West Virginia; Wisconsin; Wyoming. US Virgin Islands - onshore and offshore.
     * Replaced by NAD83(2011) (CRS code 6317) from 2011-09-06.
     */
    public const EPSG_NAD83_CORS96 = 'urn:ogc:def:crs:EPSG::6781';

    /**
     * NAD83(CSRS)
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Includes all versions of NAD83(CSRS) from v2 [CSRS98] onwards without specific identification. As such it has an
     * accuracy of approximately 1m.
     */
    public const EPSG_NAD83_CSRS = 'urn:ogc:def:crs:EPSG::4954';

    /**
     * NAD83(CSRS)v2
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Adopted by the Canadian federal government from 1998-01-01 and by the provincial governments of British
     * Columbia, New Brunswick, Prince Edward Island and Quebec. Replaces NAD83(CSRS96). Replaced by NAD83(CSRS)v3 (CRS
     * code 8238).
     */
    public const EPSG_NAD83_CSRS_V2 = 'urn:ogc:def:crs:EPSG::8233';

    /**
     * NAD83(CSRS)v3
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Adopted by the Canadian federal government from 1999-01-01 and by the provincial governments of Alberta, British
     * Columbia, Manitoba, Newfoundland and Labrador, Nova Scotia, Ontario and Saskatchewan. Replaces NAD83(CSRS)v2.
     * Replaced by NAD83(CSRS)v4.
     */
    public const EPSG_NAD83_CSRS_V3 = 'urn:ogc:def:crs:EPSG::8238';

    /**
     * NAD83(CSRS)v4
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Adopted by the Canadian federal government from 2002-01-01 and by the provincial governments of Alberta and
     * British Columbia. Replaces NAD83(CSRS)v3. Replaced by NAD83(CSRS)v5 (CRS code 8247).
     */
    public const EPSG_NAD83_CSRS_V4 = 'urn:ogc:def:crs:EPSG::8242';

    /**
     * NAD83(CSRS)v5
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Adopted by the Canadian federal government from 2006-01-01. Replaces NAD83(CSRS)v4. Replaced by NAD83(CSRS)v6
     * (CRS code 8250).
     */
    public const EPSG_NAD83_CSRS_V5 = 'urn:ogc:def:crs:EPSG::8247';

    /**
     * NAD83(CSRS)v6
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Adopted by the Canadian federal government from 2010-01-01 and the provincial governments of Alberta, British
     * Columbia, Manitoba, Newfoundland and Labrador, Nova Scotia, Ontario and Prince Edward Island. Replaces
     * NAD83(CSRS)v5. Replaced by NAD83(CSRS)v7.
     */
    public const EPSG_NAD83_CSRS_V6 = 'urn:ogc:def:crs:EPSG::8250';

    /**
     * NAD83(CSRS)v7
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Adopted by the Canadian federal government from 2017-05-01. Replaces NAD83(CSRS)v6.
     */
    public const EPSG_NAD83_CSRS_V7 = 'urn:ogc:def:crs:EPSG::8253';

    /**
     * NAD83(CSRS96)
     * Extent: Canada - onshore and offshore - Alberta; British Columbia; Manitoba; New Brunswick; Newfoundland and
     * Labrador; Northwest Territories; Nova Scotia; Nunavut; Ontario; Prince Edward Island; Quebec; Saskatchewan;
     * Yukon.
     * Adopted by the Canadian federal government from 1996-01-01. Replaced by NAD83(CSRS)v2 (CRS code 8233).
     */
    public const EPSG_NAD83_CSRS96 = 'urn:ogc:def:crs:EPSG::8230';

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
     * In Continental US, American Samoa, Guam/NMI and PRVI, replaces NAD83(HARN). In Continental US, Puerto Rico and
     * US Virgin Islands replaced by NAD83(NSRS2007). In American Samoa and Hawaii replaced by NAD83(PA11). In Guam/NMI
     * replaced by NAD83(MA11).
     */
    public const EPSG_NAD83_FBN = 'urn:ogc:def:crs:EPSG::8541';

    /**
     * NAD83(HARN Corrected)
     * Extent: Puerto Rico and US Virgin Islands - onshore.
     * In PRVI replaces NAD83(HARN) = NAD83(1993 PRVI) to correct errors. Replaced by NAD83(FBN) = NAD83(2002 PRVI).
     */
    public const EPSG_NAD83_HARN_CORRECTED = 'urn:ogc:def:crs:EPSG::8543';

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
     * In CONUS and Hawaii replaces NAD83 for applications with an accuracy of better than 1m. Replaced by NAD83(FBN)
     * in CONUS, American Samoa and Guam/NMI, by NAD83(NSRS2007) in Alaska, by NAD83(PA11) in Hawaii and by NAD83(HARN
     * Corrected) in PRVI.
     */
    public const EPSG_NAD83_HARN = 'urn:ogc:def:crs:EPSG::4956';

    /**
     * NAD83(MA11)
     * Extent: Guam, Northern Mariana Islands and Palau; onshore and offshore.
     * Replaces NAD83(HARN) (GGN93) and NAD83(FBN) in Guam.
     */
    public const EPSG_NAD83_MA11 = 'urn:ogc:def:crs:EPSG::6323';

    /**
     * NAD83(MARP00)
     * Extent: Guam, Northern Mariana Islands and Palau; onshore and offshore.
     * Replaces NAD83(HARN) (GGN93) and NAD83(FBN) in Guam. Replaced by NAD83(MA11).
     */
    public const EPSG_NAD83_MARP00 = 'urn:ogc:def:crs:EPSG::9070';

    /**
     * NAD83(NSRS2007)
     * Extent: Puerto Rico - onshore and offshore. United States (USA) onshore and offshore - Alabama; Alaska; Arizona;
     * Arkansas; California; Colorado; Connecticut; Delaware; Florida; Georgia; Idaho; Illinois; Indiana; Iowa; Kansas;
     * Kentucky; Louisiana; Maine; Maryland; Massachusetts; Michigan; Minnesota; Mississippi; Missouri; Montana;
     * Nebraska; Nevada; New Hampshire; New Jersey; New Mexico; New York; North Carolina; North Dakota; Ohio; Oklahoma;
     * Oregon; Pennsylvania; Rhode Island; South Carolina; South Dakota; Tennessee; Texas; Utah; Vermont; Virginia;
     * Washington; West Virginia; Wisconsin; Wyoming. US Virgin Islands - onshore and offshore.
     * Replaces NAD83(HARN) and NAD83(FBN). Replaced by NAD83(2011).
     */
    public const EPSG_NAD83_NSRS2007 = 'urn:ogc:def:crs:EPSG::4892';

    /**
     * NAD83(PA11)
     * Extent: American Samoa, Marshall Islands, United States (USA) - Hawaii, United States minor outlying islands;
     * onshore and offshore.
     * Replaces NAD83(HARN) and NAD83(FBN) in Hawaii and American Samoa.
     */
    public const EPSG_NAD83_PA11 = 'urn:ogc:def:crs:EPSG::6320';

    /**
     * NAD83(PACP00)
     * Extent: American Samoa, Marshall Islands, United States (USA) - Hawaii, United States minor outlying islands;
     * onshore and offshore.
     * Replaces NAD83(HARN) and NAD83(FBN) in Hawaii and American Samoa. Replaced by NAD83(PA11).
     */
    public const EPSG_NAD83_PACP00 = 'urn:ogc:def:crs:EPSG::9073';

    /**
     * NZGD2000
     * Extent: New Zealand - onshore and offshore. Includes Antipodes Islands, Auckland Islands, Bounty Islands,
     * Chatham Islands, Cambell Island, Kermadec Islands, Raoul Island and Snares Islands.
     */
    public const EPSG_NZGD2000 = 'urn:ogc:def:crs:EPSG::4958';

    /**
     * ONGD14
     * Extent: Oman - onshore and offshore.
     * In Oman replaces usage of WGS 84 (G873) from 2014. Replaced by ONGD17 (CRS code 9292) from March 2019.
     */
    public const EPSG_ONGD14 = 'urn:ogc:def:crs:EPSG::7371';

    /**
     * ONGD17
     * Extent: Oman - onshore and offshore.
     * Replaces ONGD14 (CRS code 7371) from March 2019.
     */
    public const EPSG_ONGD17 = 'urn:ogc:def:crs:EPSG::9292';

    /**
     * PNG94
     * Extent: Papua New Guinea - onshore and offshore. Includes Bismark archipelago, Louisade archipelago, Admiralty
     * Islands, d'Entrecasteaux Islands, northern Solomon Islands, Trobriand Islands, New Britain, New Ireland,
     * Woodlark, and associated islands.
     */
    public const EPSG_PNG94 = 'urn:ogc:def:crs:EPSG::5544';

    /**
     * POSGAR 2007
     * Extent: Argentina - onshore and offshore.
     * Adopted as official replacement of POSGAR 94 in May 2009.   Also replaces de facto use of POSGAR 98 as of same
     * date.
     */
    public const EPSG_POSGAR_2007 = 'urn:ogc:def:crs:EPSG::5341';

    /**
     * POSGAR 94
     * Extent: Argentina - onshore and offshore.
     * Legally adopted in May 1997. Replaced by POSGAR 98 for scientific and many practical purposes until May 2009.
     * Officially replaced by POSGAR 2007 in May 2009.
     */
    public const EPSG_POSGAR_94 = 'urn:ogc:def:crs:EPSG::4928';

    /**
     * POSGAR 98
     * Extent: Argentina - onshore and offshore.
     * Densification in Argentina of SIRGAS 1995. Until May 2009 replaced POSGAR 94 for many practical purposes (but
     * not as the legal system).  POSGAR 94 was officially replaced by POSGAR 2007 in May 2009.
     */
    public const EPSG_POSGAR_98 = 'urn:ogc:def:crs:EPSG::4960';

    /**
     * PRS92
     * Extent: Philippines - onshore and offshore.
     */
    public const EPSG_PRS92 = 'urn:ogc:def:crs:EPSG::4994';

    /**
     * PTRA08
     * Extent: Portugal - Azores and Madeira island groups and surrounding EEZ - Flores, Corvo; Graciosa, Terceira, Sao
     * Jorge, Pico, Faial; Sao Miguel, Santa Maria; Madeira, Porto Santo, Desertas; Selvagens.
     */
    public const EPSG_PTRA08 = 'urn:ogc:def:crs:EPSG::5011';

    /**
     * PZ-90
     * Extent: World.
     * Replaced by PZ-90.02 from 2007-09-20.
     */
    public const EPSG_PZ_90 = 'urn:ogc:def:crs:EPSG::4922';

    /**
     * PZ-90.02
     * Extent: World.
     * Replaces PZ-90 (CRS code 4922) from 2007-09-20. Replaced by PZ-90.11 (CRS code 7679) from 2014-01-15.
     */
    public const EPSG_PZ_90_02 = 'urn:ogc:def:crs:EPSG::7677';

    /**
     * PZ-90.11
     * Extent: World.
     * Replaces PZ-90.02 (CRS code 7677) from 2014-01-15.
     */
    public const EPSG_PZ_90_11 = 'urn:ogc:def:crs:EPSG::7679';

    /**
     * Peru96
     * Extent: Peru - onshore and offshore.
     * Densification of SIRGAS95 in Peru.
     */
    public const EPSG_PERU96 = 'urn:ogc:def:crs:EPSG::5369';

    /**
     * RDN2008
     * Extent: Italy - onshore and offshore; San Marino, Vatican City State.
     * Replaces IGM95 (CRS code 4982) from 2011-11-10.
     */
    public const EPSG_RDN2008 = 'urn:ogc:def:crs:EPSG::6704';

    /**
     * REDGEOMIN
     * Extent: Chile - onshore and offshore. Includes Easter Island, Juan Fernandez Islands, San Felix, and Sala y
     * Gomez.
     */
    public const EPSG_REDGEOMIN = 'urn:ogc:def:crs:EPSG::9694';

    /**
     * REGCAN95
     * Extent: Spain - Canary Islands onshore and offshore.
     */
    public const EPSG_REGCAN95 = 'urn:ogc:def:crs:EPSG::4079';

    /**
     * REGVEN
     * Extent: Venezuela - onshore and offshore.
     * Densification in Venezuela of SIRGAS.
     */
    public const EPSG_REGVEN = 'urn:ogc:def:crs:EPSG::4962';

    /**
     * RGAF09
     * Extent: French Antilles onshore and offshore - Guadeloupe (including Grande Terre, Basse Terre, Marie Galante,
     * Les Saintes, Iles de la Petite Terre, La Desirade, St Barthélemy, and northern St Martin) and Martinique.
     * Replaces RRAF 1991 (CRS code 4556).
     */
    public const EPSG_RGAF09 = 'urn:ogc:def:crs:EPSG::5487';

    /**
     * RGF93
     * Extent: France - onshore and offshore, mainland and Corsica.
     */
    public const EPSG_RGF93 = 'urn:ogc:def:crs:EPSG::4964';

    /**
     * RGFG95
     * Extent: French Guiana - onshore and offshore.
     */
    public const EPSG_RGFG95 = 'urn:ogc:def:crs:EPSG::4966';

    /**
     * RGM04
     * Extent: Mayotte - onshore and offshore.
     */
    public const EPSG_RGM04 = 'urn:ogc:def:crs:EPSG::4468';

    /**
     * RGNC91-93
     * Extent: New Caledonia - onshore and offshore. Isle de Pins, Loyalty Islands, Huon Islands, Belep archipelago,
     * Chesterfield Islands, and Walpole.
     * Replaces older local geographic 2D systems IGN56 Lifou, IGN72 Grande Terre, ST87 Ouvea, IGN53 Mare, ST84 Ile des
     * Pins, ST71 Belep and NEA74 Noumea (CRS codes 4633, 4641-44, 4662 and 4750).
     */
    public const EPSG_RGNC91_93 = 'urn:ogc:def:crs:EPSG::4906';

    /**
     * RGPF
     * Extent: French Polynesia - onshore and offshore. Includes Society archipelago, Tuamotu archipelago, Marquesas
     * Islands, Gambier Islands and Austral Islands.
     */
    public const EPSG_RGPF = 'urn:ogc:def:crs:EPSG::4998';

    /**
     * RGR92
     * Extent: Reunion - onshore and offshore.
     */
    public const EPSG_RGR92 = 'urn:ogc:def:crs:EPSG::4970';

    /**
     * RGRDC 2005
     * Extent: The Democratic Republic of the Congo (Zaire) - south of a line through Bandundu, Seke and Pweto -
     * onshore and offshore.
     */
    public const EPSG_RGRDC_2005 = 'urn:ogc:def:crs:EPSG::4039';

    /**
     * RGSPM06
     * Extent: St Pierre and Miquelon - onshore and offshore.
     */
    public const EPSG_RGSPM06 = 'urn:ogc:def:crs:EPSG::4465';

    /**
     * RGTAAF07
     * Extent: French Southern Territories - onshore and offshore: Amsterdam and St Paul, Crozet, Europa and Kerguelen.
     * Antarctica - Adelie Land coastal area.
     */
    public const EPSG_RGTAAF07 = 'urn:ogc:def:crs:EPSG::7071';

    /**
     * RGWF96
     * Extent: Wallis and Futuna - onshore and offshore - Uvea, Futuna, and Alofi.
     */
    public const EPSG_RGWF96 = 'urn:ogc:def:crs:EPSG::8898';

    /**
     * RRAF 1991
     * Extent: French Antilles onshore and offshore - Guadeloupe (including Grande Terre, Basse Terre, Marie Galante,
     * Les Saintes, Iles de la Petite Terre, La Desirade, St Barthélemy, and northern St Martin) and Martinique.
     * Replaces older local geographic 2D systems Fort Marigot and Sainte Anne CRS (codes 4621-22) in Guadeloupe and
     * Fort Desaix (CRS code 4625) in Martinique. Replaced by RGAF09 (CRS code 5487).
     */
    public const EPSG_RRAF_1991 = 'urn:ogc:def:crs:EPSG::4556';

    /**
     * RSAO13
     * Extent: Angola - onshore and offshore.
     */
    public const EPSG_RSAO13 = 'urn:ogc:def:crs:EPSG::8697';

    /**
     * RSRGD2000
     * Extent: Antarctica - Ross Sea Region - nominally between 160°E and 150°W but includes buffer on eastern
     * hemisphere margin to include Transantarctic Mountains.
     */
    public const EPSG_RSRGD2000 = 'urn:ogc:def:crs:EPSG::4884';

    /**
     * SHGD2015
     * Extent: St Helena, Ascension and Tristan da Cunha - St Helena Island - onshore.
     */
    public const EPSG_SHGD2015 = 'urn:ogc:def:crs:EPSG::7884';

    /**
     * SIRGAS 1995
     * Extent: South America - onshore and offshore. Ecuador (mainland and Galapagos) - onshore and offshore.
     * Replaced by SIRGAS 2000 (CRS code 4988).
     */
    public const EPSG_SIRGAS_1995 = 'urn:ogc:def:crs:EPSG::4974';

    /**
     * SIRGAS 2000
     * Extent: Latin America - Central America and South America - onshore and offshore. Brazil - onshore and offshore.
     * Replaces SIRGAS 1995 system (CRS code 4974) for South America; expands SIRGAS to Central America.
     */
    public const EPSG_SIRGAS_2000 = 'urn:ogc:def:crs:EPSG::4988';

    /**
     * SIRGAS-CON DGF00P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaced by SIRGAS-CON DGF01P01 (CRS code 8917).
     */
    public const EPSG_SIRGAS_CON_DGF00P01 = 'urn:ogc:def:crs:EPSG::8915';

    /**
     * SIRGAS-CON DGF01P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaces SIRGAS-CON DGF00P01 (CRS code 8915). Replaced by SIRGAS-CON DGF01P02 (CRS code 8919).
     */
    public const EPSG_SIRGAS_CON_DGF01P01 = 'urn:ogc:def:crs:EPSG::8917';

    /**
     * SIRGAS-CON DGF01P02
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaces SIRGAS-CON DGF01P01 (CRS code 8917). Replaced by SIRGAS-CON DGF02P01 (CRS code 8921).
     */
    public const EPSG_SIRGAS_CON_DGF01P02 = 'urn:ogc:def:crs:EPSG::8919';

    /**
     * SIRGAS-CON DGF02P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaces SIRGAS-CON DGF01P02 (CRS code 8919). Replaced by SIRGAS-CON DGF04P01 (CRS code 8923).
     */
    public const EPSG_SIRGAS_CON_DGF02P01 = 'urn:ogc:def:crs:EPSG::8921';

    /**
     * SIRGAS-CON DGF04P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaces SIRGAS-CON DGF02P01 (CRS code 8921). Replaced by SIRGAS-CON DGF05P01 (CRS code 8925).
     */
    public const EPSG_SIRGAS_CON_DGF04P01 = 'urn:ogc:def:crs:EPSG::8923';

    /**
     * SIRGAS-CON DGF05P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaces SIRGAS-CON DGF04P01 (CRS code 8923). Replaced by SIRGAS-CON DGF06P01 (CRS code 8927).
     */
    public const EPSG_SIRGAS_CON_DGF05P01 = 'urn:ogc:def:crs:EPSG::8925';

    /**
     * SIRGAS-CON DGF06P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaces SIRGAS-CON DGF05P01 (CRS code 8925). Replaced by SIRGAS-CON DGF07P01 (CRS code 8929).
     */
    public const EPSG_SIRGAS_CON_DGF06P01 = 'urn:ogc:def:crs:EPSG::8927';

    /**
     * SIRGAS-CON DGF07P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaces SIRGAS-CON DGF06P01 (CRS code 8927). Replaced by SIRGAS-CON DGF08P01 (CRS code 8931).
     */
    public const EPSG_SIRGAS_CON_DGF07P01 = 'urn:ogc:def:crs:EPSG::8929';

    /**
     * SIRGAS-CON DGF08P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaces SIRGAS-CON DGF07P01 (CRS code 8929). Replaced by SIRGAS-CON SIR09P01 (CRS code 8933).
     */
    public const EPSG_SIRGAS_CON_DGF08P01 = 'urn:ogc:def:crs:EPSG::8931';

    /**
     * SIRGAS-CON SIR09P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaces SIRGAS-CON DGF08P01 (CRS code 8931). Replaced by SIRGAS-CON SIR10P01 (CRS code 8935).
     */
    public const EPSG_SIRGAS_CON_SIR09P01 = 'urn:ogc:def:crs:EPSG::8933';

    /**
     * SIRGAS-CON SIR10P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaces SIRGAS-CON SIR09P01 (CRS code 8933). Replaced by SIRGAS-CON SIR11P01 (CRS code 8937).
     */
    public const EPSG_SIRGAS_CON_SIR10P01 = 'urn:ogc:def:crs:EPSG::8935';

    /**
     * SIRGAS-CON SIR11P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaces SIRGAS-CON SIR10P01 (CRS code 8935). Replaced by SIRGAS-CON SIR13P01 (CRS code 8939).
     */
    public const EPSG_SIRGAS_CON_SIR11P01 = 'urn:ogc:def:crs:EPSG::8937';

    /**
     * SIRGAS-CON SIR13P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaces SIRGAS-CON SIR11P01 (CRS code 8937). Replaced by SIRGAS-CON SIR14P01 (CRS code 8941).
     */
    public const EPSG_SIRGAS_CON_SIR13P01 = 'urn:ogc:def:crs:EPSG::8939';

    /**
     * SIRGAS-CON SIR14P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaces SIRGAS-CON SIR13P01 (CRS code 8939). Replaced by SIRGAS-CON SIR15P01 (CRS code 8943).
     */
    public const EPSG_SIRGAS_CON_SIR14P01 = 'urn:ogc:def:crs:EPSG::8941';

    /**
     * SIRGAS-CON SIR15P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaces SIRGAS-CON SIR14P01 (CRS code 8941). Replaced by SIRGAS-CON SIR17P01 (CRS code 8945).
     */
    public const EPSG_SIRGAS_CON_SIR15P01 = 'urn:ogc:def:crs:EPSG::8943';

    /**
     * SIRGAS-CON SIR17P01
     * Extent: Latin America - Central America and South America, onshore and offshore.
     * Replaces SIRGAS-CON SIR15P01 (CRS code 8943).
     */
    public const EPSG_SIRGAS_CON_SIR17P01 = 'urn:ogc:def:crs:EPSG::8945';

    /**
     * SIRGAS-Chile 2002
     * Extent: Chile - onshore and offshore. Includes Easter Island, Juan Fernandez Islands, San Felix, and Sala y
     * Gomez.
     * Densification of SIRGAS 2000 within Chile. Replaced by SIRGAS-Chile 2010 (CRS code 8947).
     */
    public const EPSG_SIRGAS_CHILE_2002 = 'urn:ogc:def:crs:EPSG::5358';

    /**
     * SIRGAS-Chile 2010
     * Extent: Chile - onshore and offshore. Includes Easter Island, Juan Fernandez Islands, San Felix, and Sala y
     * Gomez.
     * Densification of SIRGAS-CON within Chile at epoch 2010.00. Replaces SIRGAS-Chile 2002 (CRS code 5358), replaced
     * by SIRGAS-Chile 2013 (CRS code 9146) due to significant tectonic deformation.
     */
    public const EPSG_SIRGAS_CHILE_2010 = 'urn:ogc:def:crs:EPSG::8947';

    /**
     * SIRGAS-Chile 2013
     * Extent: Chile - onshore and offshore. Includes Easter Island, Juan Fernandez Islands, San Felix, and Sala y
     * Gomez.
     * Densification of SIRGAS-CON within Chile at epoch 2013.00. Replaces SIRGAS-Chile 2010 (CRS code 8947), replaced
     * by SIRGAS-Chile 2016 (CRS code 9151) due to significant tectonic deformation.
     */
    public const EPSG_SIRGAS_CHILE_2013 = 'urn:ogc:def:crs:EPSG::9146';

    /**
     * SIRGAS-Chile 2016
     * Extent: Chile - onshore and offshore. Includes Easter Island, Juan Fernandez Islands, San Felix, and Sala y
     * Gomez.
     * Densification of SIRGAS-CON within Chile at epoch 2016.00. Replaces SIRGAS-Chile 2013 (CRS code 9146) due to
     * significant tectonic deformation.
     */
    public const EPSG_SIRGAS_CHILE_2016 = 'urn:ogc:def:crs:EPSG::9151';

    /**
     * SIRGAS-ROU98
     * Extent: Uruguay - onshore and offshore.
     */
    public const EPSG_SIRGAS_ROU98 = 'urn:ogc:def:crs:EPSG::5379';

    /**
     * SIRGAS_ES2007.8
     * Extent: El Salvador - onshore and offshore.
     * Densification of SIRGAS 2000 within El Salvador.
     */
    public const EPSG_SIRGAS_ES2007_8 = 'urn:ogc:def:crs:EPSG::5391';

    /**
     * SRB_ETRS89
     * Extent: Serbia including Vojvodina.
     * Replaces SREF98 (CRS code 4073).
     */
    public const EPSG_SRB_ETRS89 = 'urn:ogc:def:crs:EPSG::8683';

    /**
     * SREF98
     * Extent: Serbia including Vojvodina.
     * Replaced by SRB_ETRS89 (STRS00) (CRS code 8683).
     */
    public const EPSG_SREF98 = 'urn:ogc:def:crs:EPSG::4073';

    /**
     * SRGI2013
     * Extent: Indonesia - onshore and offshore.
     * Supports horizontal component of national horizontal control network (JKHN). Adopted 2013-10-11. Replaces DGN95
     * and all older systems.
     */
    public const EPSG_SRGI2013 = 'urn:ogc:def:crs:EPSG::9468';

    /**
     * SWEREF99
     * Extent: Sweden - onshore and offshore.
     */
    public const EPSG_SWEREF99 = 'urn:ogc:def:crs:EPSG::4976';

    /**
     * Slovenia 1996
     * Extent: Slovenia - onshore and offshore.
     */
    public const EPSG_SLOVENIA_1996 = 'urn:ogc:def:crs:EPSG::4882';

    /**
     * St. Helena Tritan
     * Extent: St Helena, Ascension and Tristan da Cunha - St Helena Island - onshore.
     * Replaced by SHGD2015 (CRS code 7884) from 2015.
     */
    public const EPSG_ST_HELENA_TRITAN = 'urn:ogc:def:crs:EPSG::7879';

    /**
     * TGD2005
     * Extent: Tonga - onshore and offshore.
     */
    public const EPSG_TGD2005 = 'urn:ogc:def:crs:EPSG::5884';

    /**
     * TUREF
     * Extent: Turkey - onshore and offshore.
     */
    public const EPSG_TUREF = 'urn:ogc:def:crs:EPSG::5250';

    /**
     * TWD97
     * Extent: Taiwan, Republic of China - onshore and offshore - Taiwan Island, Penghu (Pescadores) Islands.
     */
    public const EPSG_TWD97 = 'urn:ogc:def:crs:EPSG::3822';

    /**
     * UCS-2000
     * Extent: Ukraine - onshore and offshore.
     * Adopted 1st January 2007. Defined through transformation code 7817 at epoch 2005.0.
     */
    public const EPSG_UCS_2000 = 'urn:ogc:def:crs:EPSG::5558';

    /**
     * WGS 66
     * Extent: World.
     * Replaced by WGS 72.
     */
    public const EPSG_WGS_66 = 'urn:ogc:def:crs:EPSG::4890';

    /**
     * WGS 72
     * Extent: World.
     * Replaced by WGS 84.
     */
    public const EPSG_WGS_72 = 'urn:ogc:def:crs:EPSG::4984';

    /**
     * WGS 72BE
     * Extent: World.
     * Broadcast ephemeris. Replaced by WGS 84.
     */
    public const EPSG_WGS_72BE = 'urn:ogc:def:crs:EPSG::4986';

    /**
     * WGS 84
     * Extent: World.
     */
    public const EPSG_WGS_84 = 'urn:ogc:def:crs:EPSG::4978';

    /**
     * WGS 84 (G1150)
     * Extent: World.
     * Replaces  WGS 84 (G873) (CRS code 7658) from 2002-01-20. Replaced by WGS 84 (G1674) (CRS code 7662) from
     * 2012-02-08.
     */
    public const EPSG_WGS_84_G1150 = 'urn:ogc:def:crs:EPSG::7660';

    /**
     * WGS 84 (G1674)
     * Extent: World.
     * Replaces WGS 84 (G1150) (CRS code 7660) from 2012-02-08. Replaced by WGS 84 (G1762) (CRS code 7664) from
     * 2013-10-16.
     */
    public const EPSG_WGS_84_G1674 = 'urn:ogc:def:crs:EPSG::7662';

    /**
     * WGS 84 (G1762)
     * Extent: World.
     * Replaces WGS 84 (G1674) (CRS code 7662) from 2013-10-16.
     */
    public const EPSG_WGS_84_G1762 = 'urn:ogc:def:crs:EPSG::7664';

    /**
     * WGS 84 (G730)
     * Extent: World.
     * Replaces WGS 84 (Transit) (CRS code 7815) from 1994-06-29. Replaced by WGS84 (G873) (CRS code 7658) from
     * 1997-01-29.
     */
    public const EPSG_WGS_84_G730 = 'urn:ogc:def:crs:EPSG::7656';

    /**
     * WGS 84 (G873)
     * Extent: World.
     * Replaces WGS 84 (G730) (CRS code 7656) from 1997-01-29. Replaced by WGS 84 (G1150) (CRS code 7660) from
     * 2002-01-20.
     */
    public const EPSG_WGS_84_G873 = 'urn:ogc:def:crs:EPSG::7658';

    /**
     * WGS 84 (Transit)
     * Extent: World.
     * Replaced by WGS84 (G730) (CRS code 7656) from 1994-06-29.
     */
    public const EPSG_WGS_84_TRANSIT = 'urn:ogc:def:crs:EPSG::7815';

    /**
     * Yemen NGN96
     * Extent: Yemen - onshore and offshore.
     */
    public const EPSG_YEMEN_NGN96 = 'urn:ogc:def:crs:EPSG::4980';

    protected static array $sridData = [
        'urn:ogc:def:crs:EPSG::3822' => [
            'name' => 'TWD97',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1026',
        ],
        'urn:ogc:def:crs:EPSG::3887' => [
            'name' => 'IGRS',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1029',
        ],
        'urn:ogc:def:crs:EPSG::4000' => [
            'name' => 'MOLDREF99',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1032',
        ],
        'urn:ogc:def:crs:EPSG::4039' => [
            'name' => 'RGRDC 2005',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1033',
        ],
        'urn:ogc:def:crs:EPSG::4073' => [
            'name' => 'SREF98',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1034',
        ],
        'urn:ogc:def:crs:EPSG::4079' => [
            'name' => 'REGCAN95',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1035',
        ],
        'urn:ogc:def:crs:EPSG::4465' => [
            'name' => 'RGSPM06',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1038',
        ],
        'urn:ogc:def:crs:EPSG::4468' => [
            'name' => 'RGM04',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1036',
        ],
        'urn:ogc:def:crs:EPSG::4473' => [
            'name' => 'Cadastre 1997',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1037',
        ],
        'urn:ogc:def:crs:EPSG::4479' => [
            'name' => 'China Geodetic Coordinate System 2000',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1043',
        ],
        'urn:ogc:def:crs:EPSG::4481' => [
            'name' => 'Mexico ITRF92',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1042',
        ],
        'urn:ogc:def:crs:EPSG::4556' => [
            'name' => 'RRAF 1991',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1047',
        ],
        'urn:ogc:def:crs:EPSG::4882' => [
            'name' => 'Slovenia 1996',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6765',
        ],
        'urn:ogc:def:crs:EPSG::4884' => [
            'name' => 'RSRGD2000',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6764',
        ],
        'urn:ogc:def:crs:EPSG::4886' => [
            'name' => 'BDA2000',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6762',
        ],
        'urn:ogc:def:crs:EPSG::4888' => [
            'name' => 'HTRS96',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6761',
        ],
        'urn:ogc:def:crs:EPSG::4890' => [
            'name' => 'WGS 66',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6760',
        ],
        'urn:ogc:def:crs:EPSG::4892' => [
            'name' => 'NAD83(NSRS2007)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6759',
        ],
        'urn:ogc:def:crs:EPSG::4894' => [
            'name' => 'JAD2001',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6758',
        ],
        'urn:ogc:def:crs:EPSG::4896' => [
            'name' => 'ITRF2005',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6896',
        ],
        'urn:ogc:def:crs:EPSG::4897' => [
            'name' => 'DGN95',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6755',
        ],
        'urn:ogc:def:crs:EPSG::4899' => [
            'name' => 'LGD2006',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6754',
        ],
        'urn:ogc:def:crs:EPSG::4906' => [
            'name' => 'RGNC91-93',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6749',
        ],
        'urn:ogc:def:crs:EPSG::4908' => [
            'name' => 'GR96',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6747',
        ],
        'urn:ogc:def:crs:EPSG::4910' => [
            'name' => 'ITRF88',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6647',
        ],
        'urn:ogc:def:crs:EPSG::4911' => [
            'name' => 'ITRF89',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6648',
        ],
        'urn:ogc:def:crs:EPSG::4912' => [
            'name' => 'ITRF90',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6649',
        ],
        'urn:ogc:def:crs:EPSG::4913' => [
            'name' => 'ITRF91',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6650',
        ],
        'urn:ogc:def:crs:EPSG::4914' => [
            'name' => 'ITRF92',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6651',
        ],
        'urn:ogc:def:crs:EPSG::4915' => [
            'name' => 'ITRF93',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6652',
        ],
        'urn:ogc:def:crs:EPSG::4916' => [
            'name' => 'ITRF94',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6653',
        ],
        'urn:ogc:def:crs:EPSG::4917' => [
            'name' => 'ITRF96',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6654',
        ],
        'urn:ogc:def:crs:EPSG::4918' => [
            'name' => 'ITRF97',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6655',
        ],
        'urn:ogc:def:crs:EPSG::4919' => [
            'name' => 'ITRF2000',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6656',
        ],
        'urn:ogc:def:crs:EPSG::4920' => [
            'name' => 'GDM2000',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6742',
        ],
        'urn:ogc:def:crs:EPSG::4922' => [
            'name' => 'PZ-90',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6740',
        ],
        'urn:ogc:def:crs:EPSG::4924' => [
            'name' => 'Mauritania 1999',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6702',
        ],
        'urn:ogc:def:crs:EPSG::4926' => [
            'name' => 'Korea 2000',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6737',
        ],
        'urn:ogc:def:crs:EPSG::4928' => [
            'name' => 'POSGAR 94',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6694',
        ],
        'urn:ogc:def:crs:EPSG::4930' => [
            'name' => 'Australian Antarctic',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6176',
        ],
        'urn:ogc:def:crs:EPSG::4932' => [
            'name' => 'CHTRF95',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6151',
        ],
        'urn:ogc:def:crs:EPSG::4934' => [
            'name' => 'EST97',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6180',
        ],
        'urn:ogc:def:crs:EPSG::4936' => [
            'name' => 'ETRS89',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6258',
        ],
        'urn:ogc:def:crs:EPSG::4938' => [
            'name' => 'GDA94',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6283',
        ],
        'urn:ogc:def:crs:EPSG::4940' => [
            'name' => 'Hartebeesthoek94',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6148',
        ],
        'urn:ogc:def:crs:EPSG::4942' => [
            'name' => 'IRENET95',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6173',
        ],
        'urn:ogc:def:crs:EPSG::4944' => [
            'name' => 'ISN93',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6659',
        ],
        'urn:ogc:def:crs:EPSG::4946' => [
            'name' => 'JGD2000',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6612',
        ],
        'urn:ogc:def:crs:EPSG::4948' => [
            'name' => 'LKS92',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6661',
        ],
        'urn:ogc:def:crs:EPSG::4950' => [
            'name' => 'LKS94',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6126',
        ],
        'urn:ogc:def:crs:EPSG::4952' => [
            'name' => 'Moznet',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6130',
        ],
        'urn:ogc:def:crs:EPSG::4954' => [
            'name' => 'NAD83(CSRS)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6140',
        ],
        'urn:ogc:def:crs:EPSG::4956' => [
            'name' => 'NAD83(HARN)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6152',
        ],
        'urn:ogc:def:crs:EPSG::4958' => [
            'name' => 'NZGD2000',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6167',
        ],
        'urn:ogc:def:crs:EPSG::4960' => [
            'name' => 'POSGAR 98',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6190',
        ],
        'urn:ogc:def:crs:EPSG::4962' => [
            'name' => 'REGVEN',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6189',
        ],
        'urn:ogc:def:crs:EPSG::4964' => [
            'name' => 'RGF93',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6171',
        ],
        'urn:ogc:def:crs:EPSG::4966' => [
            'name' => 'RGFG95',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6624',
        ],
        'urn:ogc:def:crs:EPSG::4970' => [
            'name' => 'RGR92',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6627',
        ],
        'urn:ogc:def:crs:EPSG::4974' => [
            'name' => 'SIRGAS 1995',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6170',
        ],
        'urn:ogc:def:crs:EPSG::4976' => [
            'name' => 'SWEREF99',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6619',
        ],
        'urn:ogc:def:crs:EPSG::4978' => [
            'name' => 'WGS 84',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6326',
        ],
        'urn:ogc:def:crs:EPSG::4980' => [
            'name' => 'Yemen NGN96',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6163',
        ],
        'urn:ogc:def:crs:EPSG::4982' => [
            'name' => 'IGM95',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6670',
        ],
        'urn:ogc:def:crs:EPSG::4984' => [
            'name' => 'WGS 72',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6322',
        ],
        'urn:ogc:def:crs:EPSG::4986' => [
            'name' => 'WGS 72BE',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6324',
        ],
        'urn:ogc:def:crs:EPSG::4988' => [
            'name' => 'SIRGAS 2000',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6674',
        ],
        'urn:ogc:def:crs:EPSG::4990' => [
            'name' => 'Lao 1993',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6677',
        ],
        'urn:ogc:def:crs:EPSG::4992' => [
            'name' => 'Lao 1997',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6678',
        ],
        'urn:ogc:def:crs:EPSG::4994' => [
            'name' => 'PRS92',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6683',
        ],
        'urn:ogc:def:crs:EPSG::4996' => [
            'name' => 'MAGNA-SIRGAS',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6686',
        ],
        'urn:ogc:def:crs:EPSG::4998' => [
            'name' => 'RGPF',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6687',
        ],
        'urn:ogc:def:crs:EPSG::5011' => [
            'name' => 'PTRA08',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1041',
        ],
        'urn:ogc:def:crs:EPSG::5244' => [
            'name' => 'GDBD2009',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1056',
        ],
        'urn:ogc:def:crs:EPSG::5250' => [
            'name' => 'TUREF',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1057',
        ],
        'urn:ogc:def:crs:EPSG::5262' => [
            'name' => 'DRUKREF 03',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1058',
        ],
        'urn:ogc:def:crs:EPSG::5322' => [
            'name' => 'ISN2004',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1060',
        ],
        'urn:ogc:def:crs:EPSG::5332' => [
            'name' => 'ITRF2008',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1061',
        ],
        'urn:ogc:def:crs:EPSG::5341' => [
            'name' => 'POSGAR 2007',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1062',
        ],
        'urn:ogc:def:crs:EPSG::5352' => [
            'name' => 'MARGEN',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1063',
        ],
        'urn:ogc:def:crs:EPSG::5358' => [
            'name' => 'SIRGAS-Chile 2002',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1064',
        ],
        'urn:ogc:def:crs:EPSG::5363' => [
            'name' => 'CR05',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1065',
        ],
        'urn:ogc:def:crs:EPSG::5368' => [
            'name' => 'MACARIO SOLIS',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1066',
        ],
        'urn:ogc:def:crs:EPSG::5369' => [
            'name' => 'Peru96',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1067',
        ],
        'urn:ogc:def:crs:EPSG::5379' => [
            'name' => 'SIRGAS-ROU98',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1068',
        ],
        'urn:ogc:def:crs:EPSG::5391' => [
            'name' => 'SIRGAS_ES2007.8',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1069',
        ],
        'urn:ogc:def:crs:EPSG::5487' => [
            'name' => 'RGAF09',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1073',
        ],
        'urn:ogc:def:crs:EPSG::5544' => [
            'name' => 'PNG94',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1076',
        ],
        'urn:ogc:def:crs:EPSG::5558' => [
            'name' => 'UCS-2000',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1077',
        ],
        'urn:ogc:def:crs:EPSG::5591' => [
            'name' => 'FEH2010',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1078',
        ],
        'urn:ogc:def:crs:EPSG::5828' => [
            'name' => 'DB_REF',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1081',
        ],
        'urn:ogc:def:crs:EPSG::5884' => [
            'name' => 'TGD2005',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1095',
        ],
        'urn:ogc:def:crs:EPSG::6133' => [
            'name' => 'CIGD11',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1100',
        ],
        'urn:ogc:def:crs:EPSG::6309' => [
            'name' => 'CGRS93',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1112',
        ],
        'urn:ogc:def:crs:EPSG::6317' => [
            'name' => 'NAD83(2011)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1116',
        ],
        'urn:ogc:def:crs:EPSG::6320' => [
            'name' => 'NAD83(PA11)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1117',
        ],
        'urn:ogc:def:crs:EPSG::6323' => [
            'name' => 'NAD83(MA11)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1118',
        ],
        'urn:ogc:def:crs:EPSG::6363' => [
            'name' => 'Mexico ITRF2008',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1120',
        ],
        'urn:ogc:def:crs:EPSG::6666' => [
            'name' => 'JGD2011',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1128',
        ],
        'urn:ogc:def:crs:EPSG::6704' => [
            'name' => 'RDN2008',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1132',
        ],
        'urn:ogc:def:crs:EPSG::6781' => [
            'name' => 'NAD83(CORS96)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1133',
        ],
        'urn:ogc:def:crs:EPSG::6934' => [
            'name' => 'IGS08',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1141',
        ],
        'urn:ogc:def:crs:EPSG::6981' => [
            'name' => 'IG05 Intermediate CRS',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1142',
        ],
        'urn:ogc:def:crs:EPSG::6988' => [
            'name' => 'IG05/12 Intermediate CRS',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1144',
        ],
        'urn:ogc:def:crs:EPSG::7071' => [
            'name' => 'RGTAAF07',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1113',
        ],
        'urn:ogc:def:crs:EPSG::7134' => [
            'name' => 'IGD05',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1114',
        ],
        'urn:ogc:def:crs:EPSG::7137' => [
            'name' => 'IGD05/12',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1115',
        ],
        'urn:ogc:def:crs:EPSG::7371' => [
            'name' => 'ONGD14',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1147',
        ],
        'urn:ogc:def:crs:EPSG::7656' => [
            'name' => 'WGS 84 (G730)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1152',
        ],
        'urn:ogc:def:crs:EPSG::7658' => [
            'name' => 'WGS 84 (G873)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1153',
        ],
        'urn:ogc:def:crs:EPSG::7660' => [
            'name' => 'WGS 84 (G1150)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1154',
        ],
        'urn:ogc:def:crs:EPSG::7662' => [
            'name' => 'WGS 84 (G1674)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1155',
        ],
        'urn:ogc:def:crs:EPSG::7664' => [
            'name' => 'WGS 84 (G1762)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1156',
        ],
        'urn:ogc:def:crs:EPSG::7677' => [
            'name' => 'PZ-90.02',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1157',
        ],
        'urn:ogc:def:crs:EPSG::7679' => [
            'name' => 'PZ-90.11',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1158',
        ],
        'urn:ogc:def:crs:EPSG::7681' => [
            'name' => 'GSK-2011',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1159',
        ],
        'urn:ogc:def:crs:EPSG::7684' => [
            'name' => 'Kyrg-06',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1160',
        ],
        'urn:ogc:def:crs:EPSG::7789' => [
            'name' => 'ITRF2014',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1165',
        ],
        'urn:ogc:def:crs:EPSG::7796' => [
            'name' => 'BGS2005',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1167',
        ],
        'urn:ogc:def:crs:EPSG::7815' => [
            'name' => 'WGS 84 (Transit)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1166',
        ],
        'urn:ogc:def:crs:EPSG::7842' => [
            'name' => 'GDA2020',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1168',
        ],
        'urn:ogc:def:crs:EPSG::7879' => [
            'name' => 'St. Helena Tritan',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1173',
        ],
        'urn:ogc:def:crs:EPSG::7884' => [
            'name' => 'SHGD2015',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1174',
        ],
        'urn:ogc:def:crs:EPSG::7914' => [
            'name' => 'ETRF89',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1178',
        ],
        'urn:ogc:def:crs:EPSG::7916' => [
            'name' => 'ETRF90',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1179',
        ],
        'urn:ogc:def:crs:EPSG::7918' => [
            'name' => 'ETRF91',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1180',
        ],
        'urn:ogc:def:crs:EPSG::7920' => [
            'name' => 'ETRF92',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1181',
        ],
        'urn:ogc:def:crs:EPSG::7922' => [
            'name' => 'ETRF93',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1182',
        ],
        'urn:ogc:def:crs:EPSG::7924' => [
            'name' => 'ETRF94',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1183',
        ],
        'urn:ogc:def:crs:EPSG::7926' => [
            'name' => 'ETRF96',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1184',
        ],
        'urn:ogc:def:crs:EPSG::7928' => [
            'name' => 'ETRF97',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1185',
        ],
        'urn:ogc:def:crs:EPSG::7930' => [
            'name' => 'ETRF2000',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1186',
        ],
        'urn:ogc:def:crs:EPSG::8084' => [
            'name' => 'ISN2016',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1187',
        ],
        'urn:ogc:def:crs:EPSG::8227' => [
            'name' => 'IGS14',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1191',
        ],
        'urn:ogc:def:crs:EPSG::8230' => [
            'name' => 'NAD83(CSRS96)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1192',
        ],
        'urn:ogc:def:crs:EPSG::8233' => [
            'name' => 'NAD83(CSRS)v2',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1193',
        ],
        'urn:ogc:def:crs:EPSG::8238' => [
            'name' => 'NAD83(CSRS)v3',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1194',
        ],
        'urn:ogc:def:crs:EPSG::8242' => [
            'name' => 'NAD83(CSRS)v4',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1195',
        ],
        'urn:ogc:def:crs:EPSG::8247' => [
            'name' => 'NAD83(CSRS)v5',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1196',
        ],
        'urn:ogc:def:crs:EPSG::8250' => [
            'name' => 'NAD83(CSRS)v6',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1197',
        ],
        'urn:ogc:def:crs:EPSG::8253' => [
            'name' => 'NAD83(CSRS)v7',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1198',
        ],
        'urn:ogc:def:crs:EPSG::8397' => [
            'name' => 'ETRF2005',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1204',
        ],
        'urn:ogc:def:crs:EPSG::8401' => [
            'name' => 'ETRF2014',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1206',
        ],
        'urn:ogc:def:crs:EPSG::8425' => [
            'name' => 'Hong Kong Geodetic CS',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1209',
        ],
        'urn:ogc:def:crs:EPSG::8429' => [
            'name' => 'Macao 2008',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1208',
        ],
        'urn:ogc:def:crs:EPSG::8541' => [
            'name' => 'NAD83(FBN)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1211',
        ],
        'urn:ogc:def:crs:EPSG::8543' => [
            'name' => 'NAD83(HARN Corrected)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1212',
        ],
        'urn:ogc:def:crs:EPSG::8683' => [
            'name' => 'SRB_ETRS89',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1214',
        ],
        'urn:ogc:def:crs:EPSG::8697' => [
            'name' => 'RSAO13',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1220',
        ],
        'urn:ogc:def:crs:EPSG::8816' => [
            'name' => 'MTRF-2000',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1218',
        ],
        'urn:ogc:def:crs:EPSG::8898' => [
            'name' => 'RGWF96',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1223',
        ],
        'urn:ogc:def:crs:EPSG::8905' => [
            'name' => 'CR-SIRGAS',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1225',
        ],
        'urn:ogc:def:crs:EPSG::8915' => [
            'name' => 'SIRGAS-CON DGF00P01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1227',
        ],
        'urn:ogc:def:crs:EPSG::8917' => [
            'name' => 'SIRGAS-CON DGF01P01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1228',
        ],
        'urn:ogc:def:crs:EPSG::8919' => [
            'name' => 'SIRGAS-CON DGF01P02',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1229',
        ],
        'urn:ogc:def:crs:EPSG::8921' => [
            'name' => 'SIRGAS-CON DGF02P01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1230',
        ],
        'urn:ogc:def:crs:EPSG::8923' => [
            'name' => 'SIRGAS-CON DGF04P01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1231',
        ],
        'urn:ogc:def:crs:EPSG::8925' => [
            'name' => 'SIRGAS-CON DGF05P01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1232',
        ],
        'urn:ogc:def:crs:EPSG::8927' => [
            'name' => 'SIRGAS-CON DGF06P01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1233',
        ],
        'urn:ogc:def:crs:EPSG::8929' => [
            'name' => 'SIRGAS-CON DGF07P01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1234',
        ],
        'urn:ogc:def:crs:EPSG::8931' => [
            'name' => 'SIRGAS-CON DGF08P01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1235',
        ],
        'urn:ogc:def:crs:EPSG::8933' => [
            'name' => 'SIRGAS-CON SIR09P01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1236',
        ],
        'urn:ogc:def:crs:EPSG::8935' => [
            'name' => 'SIRGAS-CON SIR10P01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1237',
        ],
        'urn:ogc:def:crs:EPSG::8937' => [
            'name' => 'SIRGAS-CON SIR11P01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1238',
        ],
        'urn:ogc:def:crs:EPSG::8939' => [
            'name' => 'SIRGAS-CON SIR13P01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1239',
        ],
        'urn:ogc:def:crs:EPSG::8941' => [
            'name' => 'SIRGAS-CON SIR14P01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1240',
        ],
        'urn:ogc:def:crs:EPSG::8943' => [
            'name' => 'SIRGAS-CON SIR15P01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1241',
        ],
        'urn:ogc:def:crs:EPSG::8945' => [
            'name' => 'SIRGAS-CON SIR17P01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1242',
        ],
        'urn:ogc:def:crs:EPSG::8947' => [
            'name' => 'SIRGAS-Chile 2010',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1243',
        ],
        'urn:ogc:def:crs:EPSG::9001' => [
            'name' => 'IGS97',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1244',
        ],
        'urn:ogc:def:crs:EPSG::9004' => [
            'name' => 'IGS00',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1245',
        ],
        'urn:ogc:def:crs:EPSG::9007' => [
            'name' => 'IGb00',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1246',
        ],
        'urn:ogc:def:crs:EPSG::9010' => [
            'name' => 'IGS05',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1247',
        ],
        'urn:ogc:def:crs:EPSG::9015' => [
            'name' => 'IGb08',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1248',
        ],
        'urn:ogc:def:crs:EPSG::9070' => [
            'name' => 'NAD83(MARP00)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1221',
        ],
        'urn:ogc:def:crs:EPSG::9073' => [
            'name' => 'NAD83(PACP00)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1249',
        ],
        'urn:ogc:def:crs:EPSG::9138' => [
            'name' => 'KOSOVAREF01',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1251',
        ],
        'urn:ogc:def:crs:EPSG::9146' => [
            'name' => 'SIRGAS-Chile 2013',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1252',
        ],
        'urn:ogc:def:crs:EPSG::9151' => [
            'name' => 'SIRGAS-Chile 2016',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1253',
        ],
        'urn:ogc:def:crs:EPSG::9266' => [
            'name' => 'MGI',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::6312',
        ],
        'urn:ogc:def:crs:EPSG::9292' => [
            'name' => 'ONGD17',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1263',
        ],
        'urn:ogc:def:crs:EPSG::9307' => [
            'name' => 'ATRF2014',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1291',
        ],
        'urn:ogc:def:crs:EPSG::9331' => [
            'name' => 'KSA-GRF17',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1268',
        ],
        'urn:ogc:def:crs:EPSG::9378' => [
            'name' => 'IGb14',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1272',
        ],
        'urn:ogc:def:crs:EPSG::9468' => [
            'name' => 'SRGI2013',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1293',
        ],
        'urn:ogc:def:crs:EPSG::9545' => [
            'name' => 'LTF2004(G)',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1295',
        ],
        'urn:ogc:def:crs:EPSG::9694' => [
            'name' => 'REDGEOMIN',
            'coordinate_system' => 'urn:ogc:def:cs:EPSG::6500',
            'datum' => 'urn:ogc:def:datum:EPSG::1304',
        ],
    ];

    public function __construct(
        string $srid,
        CoordinateSystem $coordinateSystem,
        Datum $datum
    ) {
        $this->srid = $srid;
        $this->coordinateSystem = $coordinateSystem;
        $this->datum = $datum;

        assert(count($coordinateSystem->getAxes()) === 3);
    }

    public static function fromSRID(string $srid): self
    {
        if (!isset(static::$sridData[$srid])) {
            throw new UnknownCoordinateReferenceSystemException($srid);
        }

        $data = static::$sridData[$srid];

        return new self(
            $srid,
            Cartesian::fromSRID($data['coordinate_system']),
            Datum::fromSRID($data['datum'])
        );
    }

    public static function getSupportedSRIDs(): array
    {
        $supported = [];
        foreach (static::$sridData as $srid => $data) {
            $supported[$srid] = $data['name'];
        }

        return $supported;
    }
}
