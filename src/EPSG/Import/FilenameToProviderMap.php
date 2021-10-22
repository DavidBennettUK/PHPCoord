<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

use PHPCoord\CoordinateOperation;

return [
    'OSTN15_OSGM15_GB.txt' => CoordinateOperation\OSTN15OSGM15Provider::class,
    'OSGM15_Belfast.gri' => CoordinateOperation\OSGM15BelfastProvider::class,
    'OSGM15_Malin.gri' => CoordinateOperation\OSGM15MalinProvider::class,
    'nadcon5.as62.nad83_1993.as.lat.trn.20160901.b' => CoordinateOperation\NADCON5AS62NAD831993ASLatitudeProvider::class,
    'nadcon5.as62.nad83_1993.as.lon.trn.20160901.b' => CoordinateOperation\NADCON5AS62NAD831993ASLongitudeProvider::class,
    'nadcon5.gu63.nad83_1993.guamcnmi.lat.trn.20160901.b' => CoordinateOperation\NADCON5GU63NAD831993GuamCnMILatitudeProvider::class,
    'nadcon5.gu63.nad83_1993.guamcnmi.lon.trn.20160901.b' => CoordinateOperation\NADCON5GU63NAD831993GuamCnMILongitudeProvider::class,
    'nadcon5.nad27.nad83_1986.alaska.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD27NAD831986AlaskaLatitudeProvider::class,
    'nadcon5.nad27.nad83_1986.alaska.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD27NAD831986AlaskaLongitudeProvider::class,
    'nadcon5.nad27.nad83_1986.conus.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD27NAD831986CONUSLatitudeProvider::class,
    'nadcon5.nad27.nad83_1986.conus.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD27NAD831986CONUSLongitudeProvider::class,
    'nadcon5.nad83_1986.nad83_1992.alaska.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD831986NAD831992AlaskaLatitudeProvider::class,
    'nadcon5.nad83_1986.nad83_1992.alaska.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD831986NAD831992AlaskaLongitudeProvider::class,
    'nadcon5.nad83_1986.nad83_1993.hawaii.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD831986NAD831993HawaiiLatitudeProvider::class,
    'nadcon5.nad83_1986.nad83_1993.hawaii.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD831986NAD831993HawaiiLongitudeProvider::class,
    'nadcon5.nad83_1986.nad83_1993.prvi.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD831986NAD831993PRVILatitudeProvider::class,
    'nadcon5.nad83_1986.nad83_1993.prvi.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD831986NAD831993PRVILongitudeProvider::class,
    'nadcon5.nad83_1986.nad83_harn.conus.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD831986NAD83HARNCONUSLatitudeProvider::class,
    'nadcon5.nad83_1986.nad83_harn.conus.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD831986NAD83HARNCONUSLongitudeProvider::class,
    'nadcon5.nad83_1992.nad83_2007.alaska.eht.trn.20160901.b' => CoordinateOperation\NADCON5NAD831992NAD832007AlaskaHeightProvider::class,
    'nadcon5.nad83_1992.nad83_2007.alaska.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD831992NAD832007AlaskaLatitudeProvider::class,
    'nadcon5.nad83_1992.nad83_2007.alaska.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD831992NAD832007AlaskaLongitudeProvider::class,
    'nadcon5.nad83_1993.nad83_1997.prvi.eht.trn.20160901.b' => CoordinateOperation\NADCON5NAD831993NAD831997PRVIHeightProvider::class,
    'nadcon5.nad83_1993.nad83_1997.prvi.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD831993NAD831997PRVILatitudeProvider::class,
    'nadcon5.nad83_1993.nad83_1997.prvi.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD831993NAD831997PRVILongitudeProvider::class,
    'nadcon5.nad83_1993.nad83_2002.as.eht.trn.20160901.b' => CoordinateOperation\NADCON5NAD831993NAD832002ASHeightProvider::class,
    'nadcon5.nad83_1993.nad83_2002.as.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD831993NAD832002ASLatitudeProvider::class,
    'nadcon5.nad83_1993.nad83_2002.as.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD831993NAD832002ASLongitudeProvider::class,
    'nadcon5.nad83_1993.nad83_2002.guamcnmi.eht.trn.20160901.b' => CoordinateOperation\NADCON5NAD831993NAD832002GuamCnMIHeightProvider::class,
    'nadcon5.nad83_1993.nad83_2002.guamcnmi.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD831993NAD832002GuamCnMILatitudeProvider::class,
    'nadcon5.nad83_1993.nad83_2002.guamcnmi.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD831993NAD832002GuamCnMILongitudeProvider::class,
    'nadcon5.nad83_1993.nad83_pa11.hawaii.eht.trn.20160901.b' => CoordinateOperation\NADCON5NAD831993NAD83PA11HawaiiHeightProvider::class,
    'nadcon5.nad83_1993.nad83_pa11.hawaii.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD831993NAD83PA11HawaiiLatitudeProvider::class,
    'nadcon5.nad83_1993.nad83_pa11.hawaii.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD831993NAD83PA11HawaiiLongitudeProvider::class,
    'nadcon5.nad83_1997.nad83_2002.prvi.eht.trn.20160901.b' => CoordinateOperation\NADCON5NAD831997NAD832002PRVIHeightProvider::class,
    'nadcon5.nad83_1997.nad83_2002.prvi.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD831997NAD832002PRVILatitudeProvider::class,
    'nadcon5.nad83_1997.nad83_2002.prvi.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD831997NAD832002PRVILongitudeProvider::class,
    'nadcon5.nad83_2002.nad83_2007.prvi.eht.trn.20160901.b' => CoordinateOperation\NADCON5NAD832002NAD832007PRVIHeightProvider::class,
    'nadcon5.nad83_2002.nad83_2007.prvi.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD832002NAD832007PRVILatitudeProvider::class,
    'nadcon5.nad83_2002.nad83_2007.prvi.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD832002NAD832007PRVILongitudeProvider::class,
    'nadcon5.nad83_2002.nad83_ma11.guamcnmi.eht.trn.20160901.b' => CoordinateOperation\NADCON5NAD832002NAD83MA11GuamCnMIHeightProvider::class,
    'nadcon5.nad83_2002.nad83_ma11.guamcnmi.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD832002NAD83MA11GuamCnMILatitudeProvider::class,
    'nadcon5.nad83_2002.nad83_ma11.guamcnmi.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD832002NAD83MA11GuamCnMILongitudeProvider::class,
    'nadcon5.nad83_2002.nad83_pa11.as.eht.trn.20160901.b' => CoordinateOperation\NADCON5NAD832002NAD83PA11ASHeightProvider::class,
    'nadcon5.nad83_2002.nad83_pa11.as.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD832002NAD83PA11ASLatitudeProvider::class,
    'nadcon5.nad83_2002.nad83_pa11.as.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD832002NAD83PA11ASLongitudeProvider::class,
    'nadcon5.nad83_2007.nad83_2011.alaska.eht.trn.20160901.b' => CoordinateOperation\NADCON5NAD832007NAD832011AlaskaHeightProvider::class,
    'nadcon5.nad83_2007.nad83_2011.alaska.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD832007NAD832011AlaskaLatitudeProvider::class,
    'nadcon5.nad83_2007.nad83_2011.alaska.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD832007NAD832011AlaskaLongitudeProvider::class,
    'nadcon5.nad83_2007.nad83_2011.conus.eht.trn.20160901.b' => CoordinateOperation\NADCON5NAD832007NAD832011CONUSHeightProvider::class,
    'nadcon5.nad83_2007.nad83_2011.conus.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD832007NAD832011CONUSLatitudeProvider::class,
    'nadcon5.nad83_2007.nad83_2011.conus.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD832007NAD832011CONUSLongitudeProvider::class,
    'nadcon5.nad83_2007.nad83_2011.prvi.eht.trn.20160901.b' => CoordinateOperation\NADCON5NAD832007NAD832011PRVIHeightProvider::class,
    'nadcon5.nad83_2007.nad83_2011.prvi.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD832007NAD832011PRVILatitudeProvider::class,
    'nadcon5.nad83_2007.nad83_2011.prvi.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD832007NAD832011PRVILongitudeProvider::class,
    'nadcon5.nad83_fbn.nad83_2007.conus.eht.trn.20160901.b' => CoordinateOperation\NADCON5NAD83FBNNAD832007CONUSHeightProvider::class,
    'nadcon5.nad83_fbn.nad83_2007.conus.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD83FBNNAD832007CONUSLatitudeProvider::class,
    'nadcon5.nad83_fbn.nad83_2007.conus.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD83FBNNAD832007CONUSLongitudeProvider::class,
    'nadcon5.nad83_harn.nad83_fbn.conus.eht.trn.20160901.b' => CoordinateOperation\NADCON5NAD83HARNNAD83FBNCONUSHeightProvider::class,
    'nadcon5.nad83_harn.nad83_fbn.conus.lat.trn.20160901.b' => CoordinateOperation\NADCON5NAD83HARNNAD83FBNCONUSLatitudeProvider::class,
    'nadcon5.nad83_harn.nad83_fbn.conus.lon.trn.20160901.b' => CoordinateOperation\NADCON5NAD83HARNNAD83FBNCONUSLongitudeProvider::class,
    'nadcon5.ohd.nad83_1986.hawaii.lat.trn.20160901.b' => CoordinateOperation\NADCON5OHDNAD831986HawaiiLatitudeProvider::class,
    'nadcon5.ohd.nad83_1986.hawaii.lon.trn.20160901.b' => CoordinateOperation\NADCON5OHDNAD831986HawaiiLongitudeProvider::class,
    'nadcon5.pr40.nad83_1986.prvi.lat.trn.20160901.b' => CoordinateOperation\NADCON5PR40NAD831986PRVILatitudeProvider::class,
    'nadcon5.pr40.nad83_1986.prvi.lon.trn.20160901.b' => CoordinateOperation\NADCON5PR40NAD831986PRVILongitudeProvider::class,
    'nadcon5.sg1897.sg1952.stgeorge.lat.trn.20160901.b' => CoordinateOperation\NADCON5SG1897SG1952StGeorgeLatitudeProvider::class,
    'nadcon5.sg1897.sg1952.stgeorge.lon.trn.20160901.b' => CoordinateOperation\NADCON5SG1897SG1952StGeorgeLongitudeProvider::class,
    'nadcon5.sg1952.nad83_1986.stgeorge.lat.trn.20160901.b' => CoordinateOperation\NADCON5SG1952NAD831986StGeorgeLatitudeProvider::class,
    'nadcon5.sg1952.nad83_1986.stgeorge.lon.trn.20160901.b' => CoordinateOperation\NADCON5SG1952NAD831986StGeorgeLongitudeProvider::class,
    'nadcon5.sl1952.nad83_1986.stlawrence.lat.trn.20160901.b' => CoordinateOperation\NADCON5SL1952NAD831986StLawrenceLatitudeProvider::class,
    'nadcon5.sl1952.nad83_1986.stlawrence.lon.trn.20160901.b' => CoordinateOperation\NADCON5SL1952NAD831986StLawrenceLongitudeProvider::class,
    'nadcon5.sp1897.sp1952.stpaul.lat.trn.20160901.b' => CoordinateOperation\NADCON5SP1897SP1952StPaulLatitudeProvider::class,
    'nadcon5.sp1897.sp1952.stpaul.lon.trn.20160901.b' => CoordinateOperation\NADCON5SP1897SP1952StPaulLongitudeProvider::class,
    'nadcon5.sp1952.nad83_1986.stpaul.lat.trn.20160901.b' => CoordinateOperation\NADCON5SP1952NAD831986StPaulLatitudeProvider::class,
    'nadcon5.sp1952.nad83_1986.stpaul.lon.trn.20160901.b' => CoordinateOperation\NADCON5SP1952NAD831986StPaulLongitudeProvider::class,
    'nadcon5.ussd.nad27.conus.lat.trn.20160901.b' => CoordinateOperation\NADCON5USSDNAD27CONUSLatitudeProvider::class,
    'nadcon5.ussd.nad27.conus.lon.trn.20160901.b' => CoordinateOperation\NADCON5USSDNAD27CONUSLongitudeProvider::class,
    'NTv2_0.gsb' => CoordinateOperation\NTv2NAD27NAD83CanadaProvider::class,
    'AB_CSRS.DAC' => CoordinateOperation\NTv2NAD831986NAD83CSRS2002AlbertaProvider::class,
    'ABCSRSV7.GSB' => CoordinateOperation\NTv2NAD831986NAD83CSRS2010AlbertaProvider::class,
    'BC_27_05.GSB' => CoordinateOperation\NTv2NAD27NAD83CSRS2002BritishColumbiaCRDProvider::class,
    'BC_93_05.GSB' => CoordinateOperation\NTv2NAD831986NAD83CSRS2002BritishColumbiaCRDProvider::class,
    'CQ77NA83.GSB' => CoordinateOperation\NTv2NAD27CGQ77NAD831986QuebecProvider::class,
    'CQ77SCRS.GSB' => CoordinateOperation\NTv2NAD27CGQ77NAD83CSRS1997QuebecProvider::class,
    'CGQ77-98.gsb' => CoordinateOperation\NTv2NAD27CGQ77NAD83CSRS1997QuebecProvider::class,
    'CRD27_00.GSB' => CoordinateOperation\NTv2NAD27NAD83CSRS1997BritishColumbiaCRDProvider::class,
    'CRD93_00.GSB' => CoordinateOperation\NTv2NAD831986NAD83CSRS1997BritishColumbiaCRDProvider::class,
    'GS7783.GSB' => CoordinateOperation\NTv2ATS77NAD831986NovaScotiaProvider::class,
    'May76v20.gsb' => CoordinateOperation\NTv2NAD27MAY76NAD831986OntarioProvider::class,
    'NA27NA83.GSB' => CoordinateOperation\NTv2NAD27NAD831986QuebecProvider::class,
    'NA27SCRS.GSB' => CoordinateOperation\NTv2NAD27NAD83CSRS1997QuebecProvider::class,
    'QUE27-98.gsb' => CoordinateOperation\NTv2NAD27NAD83CSRS1997QuebecProvider::class,
    'NA83SCRS.GSB' => CoordinateOperation\NTv2NAD831986NAD83CSRS1997QuebecProvider::class,
    'NAD83-98.gsb' => CoordinateOperation\NTv2NAD831986NAD83CSRS1997QuebecProvider::class,
    'NB2783v2.gsb' => CoordinateOperation\NTv2NAD27NAD83CSRS1997NewBrunswickProvider::class,
    'NB7783v2.gsb' => CoordinateOperation\NTv2ATS77NAD83CSRS1997NewBrunswickProvider::class,
    'NLCSRSV4A.GSB' => CoordinateOperation\NTv2NAD831986NAD83CSRS2010NewfoundlandProvider::class,
    'NS778302.gsb' => CoordinateOperation\NTv2ATS77NAD83CSRS2010NovaScotiaProvider::class,
    'NVI93_05.GSB' => CoordinateOperation\NTv2NAD831986NAD83CSRS1997BritishColumbiaVancouverIslandProvider::class,
    'ON27CSv1.GSB' => CoordinateOperation\NTv2NAD27NAD83CSRS1997OntarioProvider::class,
    'ON76CSv1.GSB' => CoordinateOperation\NTv2NAD27MAY76NAD83CSRS1997OntarioProvider::class,
    'ON83CSv1.GSB' => CoordinateOperation\NTv2NAD831986NAD83CSRS1997OntarioProvider::class,
    'PE7783V2.gsb' => CoordinateOperation\NTv2ATS777NAD83CSRS1997PrinceEdwardProvider::class,
    'SK27-83.gsb' => CoordinateOperation\NTv2NAD27NAD831986SaskatchewanProvider::class,
    'SK27-98.gsb' => CoordinateOperation\NTv2NAD27NAD83CSRS1997SaskatchewanProvider::class,
    'SK83-98.gsb' => CoordinateOperation\NTv2NAD831986NAD83CSRS1997SaskatchewanProvider::class,
    'TOR27CSv1.GSB' => CoordinateOperation\NTv2NAD27NAD83CSRS1997OTorontoProvider::class,
    'A66 National (13.09.01).gsb' => CoordinateOperation\NTv2AGD66GDA94AustraliaProvider::class,
    'GDA94_GDA2020_conformal_and_distortion.gsb' => CoordinateOperation\NTv2GDA94GDA2020AustraliaProvider::class,
    'National 84 (02.07.01).gsb' => CoordinateOperation\NTv2AGD84GDA94AustraliaProvider::class,
    'nzgd2kgrid0005.gsb' => CoordinateOperation\NTv2NZGD1949NZGD2000NewZealandProvider::class,
    'BETA2007.gsb' => CoordinateOperation\NTv2DHDNETRS89GermanyProvider::class,
    'BALR2009.gsb' => CoordinateOperation\NTv2ED50ETRS89BalearicIslandsProvider::class,
    'PENR2009.gsb' => CoordinateOperation\NTv2ED50ETRS89SpainProvider::class,
    'CHENyx06a.gsb' => CoordinateOperation\NTv2LV03LV95SwitzerlandProvider::class,
    'CHENyx06_ETRS.gsb' => CoordinateOperation\NTv2LV03ETRS89SwitzerlandProvider::class,
    'CA61_003.gsb' => CoordinateOperation\NTv2CA61SIRGAS2000BrazilProvider::class,
    'CA7072_003.gsb' => CoordinateOperation\NTv2CA7072SIRGAS2000BrazilProvider::class,
    'SAD69_003.gsb' => CoordinateOperation\NTv2SAD69SIRGAS2000BrazilProvider::class,
    'SAD96_003.gsb' => CoordinateOperation\NTv2SAD6996SIRGAS2000BrazilProvider::class,
    '100800401.gsb' => CoordinateOperation\NTv2ED50ETRS89CataloniaProvider::class,
    'AT_GIS_GRID.gsb' => CoordinateOperation\NTv2MGIETRS89AustriaProvider::class,
    'D73_ETRS89_geo.gsb' => CoordinateOperation\NTv273ETRS89PortugalProvider::class,
    'DLx_ETRS89_geo.gsb' => CoordinateOperation\NTv2LisbonETRS89PortugalProvider::class,
    'NTv2_SN.gsb' => CoordinateOperation\NTv2RD83ETRS89SaxonyProvider::class,
    'bd72lb72_etrs89lb08.gsb' => CoordinateOperation\NTv2BD79ETRS89BelgiumProvider::class,
    'ISN93_ISN2016.gsb' => CoordinateOperation\NTv2ISN93ISN2016IcelandProvider::class,
    'ISN2004_ISN2016.gsb' => CoordinateOperation\NTv2ISN2004ISN2016IcelandProvider::class,
    'rdtrans2018.gsb' => CoordinateOperation\NTv2RDETRS89NetherlandsProvider::class,
    'SeTa2016.gsb' => CoordinateOperation\NTv2DHDNETRS89SaarlandProvider::class,
    'tky2jgd.gsb' => CoordinateOperation\NTv2TokyoJGD2000JapanProvider::class,
    'touhokutaiheiyouoki2011.gsb' => CoordinateOperation\NTv2JGD2000JGD2011JapanProvider::class,
    'gr3df97a.txt' => CoordinateOperation\IGNFGeocentricTranslationNTFRGF93Provider::class,
    'nzgeoid2009.gtx' => CoordinateOperation\GTXNZGeoid2009Provider::class,
    'nzgeoid2016.gtx' => CoordinateOperation\GTXNZGeoid2016Provider::class,
    'auckht1946-nzvd2016.gtx' => CoordinateOperation\GTXAuckland1946NZVD2016Provider::class,
    'blufht1955-nzvd2016.gtx' => CoordinateOperation\GTXBluff1955NZVD2016Provider::class,
    'dublht1960-nzvd2016.gtx' => CoordinateOperation\GTXDunedinBluff1960NZVD2016Provider::class,
    'duneht1958-nzvd2016.gtx' => CoordinateOperation\GTXDunedin1958NZVD2016Provider::class,
    'gisbht1926-nzvd2016.gtx' => CoordinateOperation\GTXGisborne1926NZVD2016Provider::class,
    'lyttht1937-nzvd2016.gtx' => CoordinateOperation\GTXLyttelton1937NZVD2016Provider::class,
    'motuht1953-nzvd2016.gtx' => CoordinateOperation\GTXMoturiki1953NZVD2016Provider::class,
    'napiht1962-nzvd2016.gtx' => CoordinateOperation\GTXNapier1962NZVD2016Provider::class,
    'nelsht1955-nzvd2016.gtx' => CoordinateOperation\GTXNelson1955NZVD2016Provider::class,
    'ontpht1964-nzvd2016.gtx' => CoordinateOperation\GTXOneTreePoint1964NZVD2016Provider::class,
    'stisht1977-nzvd2016.gtx' => CoordinateOperation\GTXStewartIsland1977NZVD2016Provider::class,
    'taraht1970-nzvd2016.gtx' => CoordinateOperation\GTXTaranaki1970NZVD2016Provider::class,
    'wellht1953-nzvd2016.gtx' => CoordinateOperation\GTXWellington1953NZVD2016Provider::class,
    'g2018u0.bin' => CoordinateOperation\GTXGEOID18CONUSProvider::class,
    'g2018p0.bin' => CoordinateOperation\GTXGEOID18PRVIProvider::class,
    'g2012ba0.bin' => CoordinateOperation\GTXGEOID12BAlaskaProvider::class,
    'g2012bh0.bin' => CoordinateOperation\GTXGEOID12BHawaiiProvider::class,
    'g2012bg0.bin' => CoordinateOperation\GTXGEOID12BGuamMIProvider::class,
    'g2012bs0.bin' => CoordinateOperation\GTXGEOID12BAmericaSamoaProvider::class,
    'href2008a.gtx' => CoordinateOperation\GTXETRS89NN1954Provider::class,
    'HREF2018B_NN2000_EUREF89.gtx' => CoordinateOperation\GTXETRS89NN2000Provider::class,
    'Slovakia_ETRS89h_to_EVRF2007.gtx' => CoordinateOperation\GTXETRS89EVRF2007SlovakiaProvider::class,
    'Slovakia_ETRS89h_to_Baltic1957.gtx' => CoordinateOperation\GTXETRS89Baltic1957SlovakiaProvider::class,
    'nlgeo2018.gtx' => CoordinateOperation\GTXETRS89NAPProvider::class,
    'AUSGeoid09_V1.01.gtx' => CoordinateOperation\GTXGDA94AHDProvider::class,
    'AUSGeoid09_GDA94_V1.01_DOV_windows.gtx' => CoordinateOperation\GTXGDA94AHDProvider::class,
    'AUSGeoid2020_20180201.gtx' => CoordinateOperation\GTXGDA2020AHDProvider::class,
    'AGQG_20201120.gtx' => CoordinateOperation\GTXGDA2020AVWSProvider::class,
    'gr3dnc01b.mnt' => CoordinateOperation\IGNFGeocentricTranslationIGN72GrandeTerreRGNC9193Provider::class,
    'gr3dnc02b.mnt' => CoordinateOperation\IGNFGeocentricTranslationIGN72GrandeTerreRGNC9193NoumeaProvider::class,
    'gr3dnc03a.mnt' => CoordinateOperation\IGNFGeocentricTranslationNEA74NoumeaRGNC9193Provider::class,
    'RAF20.tac' => CoordinateOperation\IGNFHeightRGF93v2bNGFIGN69FranceProvider::class,
    'RAC09.mnt' => CoordinateOperation\IGNFHeightRGF93v2NGFIGN78CorsicaProvider::class,
    'RALD2016.mnt' => CoordinateOperation\IGNFHeightRGAF09IGN2008LaDesiradeProvider::class,
    'RALDW842016.mnt' => CoordinateOperation\IGNFHeightWGS84IGN2008LaDesiradeProvider::class,
    'RAGTBT2016.mnt' => CoordinateOperation\IGNFHeightRGAF09Guadeloupe1988Provider::class,
    'RALS2016.mnt' => CoordinateOperation\IGNFHeightRGAF09IGN1988LesSaintesProvider::class,
    'RAMG2016.mnt' => CoordinateOperation\IGNFHeightRGAF09IGN1988MarieGalanteProvider::class,
    'RAMART2016.mnt' => CoordinateOperation\IGNFHeightRGAF09Martinique1987Provider::class,
    'RASPM2018.mnt' => CoordinateOperation\IGNFHeightRGSPM06Danger1950Provider::class,
    'gg10_sbv2.mnt' => CoordinateOperation\IGNFHeightRGAF09IGN1988SaintBarthelemyProvider::class,
    'gg10_smv2.mnt' => CoordinateOperation\IGNFHeightRGAF09IGN1988SaintMartinProvider::class,
    'Ranc08_Circe.mnt' => CoordinateOperation\IGNFHeightRGNC9193NGNC08NewCaledoniaProvider::class,
];
