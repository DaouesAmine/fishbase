<?php


/**
 * Base static class for performing query and update operations on the 'countref' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseCountrefPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'countref';

    /** the related Propel class for this table */
    const OM_CLASS = 'Countref';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CountrefTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 201;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 201;

    /** the column name for the PAESE field */
    const PAESE = 'countref.PAESE';

    /** the column name for the Note field */
    const NOTE = 'countref.Note';

    /** the column name for the C_Code field */
    const C_CODE = 'countref.C_Code';

    /** the column name for the ABB field */
    const ABB = 'countref.ABB';

    /** the column name for the ISO_Code field */
    const ISO_CODE = 'countref.ISO_Code';

    /** the column name for the ISO3Alpha field */
    const ISO3ALPHA = 'countref.ISO3Alpha';

    /** the column name for the ISO2Alpha field */
    const ISO2ALPHA = 'countref.ISO2Alpha';

    /** the column name for the SAUP_Code field */
    const SAUP_CODE = 'countref.SAUP_Code';

    /** the column name for the Used field */
    const USED = 'countref.Used';

    /** the column name for the Capital field */
    const CAPITAL = 'countref.Capital';

    /** the column name for the LatDeg field */
    const LATDEG = 'countref.LatDeg';

    /** the column name for the LatMin field */
    const LATMIN = 'countref.LatMin';

    /** the column name for the NorthSouth field */
    const NORTHSOUTH = 'countref.NorthSouth';

    /** the column name for the LongDeg field */
    const LONGDEG = 'countref.LongDeg';

    /** the column name for the LongMin field */
    const LONGMIN = 'countref.LongMin';

    /** the column name for the EastWest field */
    const EASTWEST = 'countref.EastWest';

    /** the column name for the Remark field */
    const REMARK = 'countref.Remark';

    /** the column name for the PolarBoreal field */
    const POLARBOREAL = 'countref.PolarBoreal';

    /** the column name for the Temperate field */
    const TEMPERATE = 'countref.Temperate';

    /** the column name for the Subtropical field */
    const SUBTROPICAL = 'countref.Subtropical';

    /** the column name for the Tropical field */
    const TROPICAL = 'countref.Tropical';

    /** the column name for the Landlocked field */
    const LANDLOCKED = 'countref.Landlocked';

    /** the column name for the GeographicArea field */
    const GEOGRAPHICAREA = 'countref.GeographicArea';

    /** the column name for the Region field */
    const REGION = 'countref.Region';

    /** the column name for the Continent field */
    const CONTINENT = 'countref.Continent';

    /** the column name for the AreaCodeInland field */
    const AREACODEINLAND = 'countref.AreaCodeInland';

    /** the column name for the FAOAreaInland field */
    const FAOAREAINLAND = 'countref.FAOAreaInland';

    /** the column name for the AreaCodeMarineI field */
    const AREACODEMARINEI = 'countref.AreaCodeMarineI';

    /** the column name for the FAOAreaMarineI field */
    const FAOAREAMARINEI = 'countref.FAOAreaMarineI';

    /** the column name for the AreaCodeMarineII field */
    const AREACODEMARINEII = 'countref.AreaCodeMarineII';

    /** the column name for the FAOAreaMarineII field */
    const FAOAREAMARINEII = 'countref.FAOAreaMarineII';

    /** the column name for the AreaCodeMarineIII field */
    const AREACODEMARINEIII = 'countref.AreaCodeMarineIII';

    /** the column name for the FAOAreaMarineIII field */
    const FAOAREAMARINEIII = 'countref.FAOAreaMarineIII';

    /** the column name for the AreaCodeMarineIV field */
    const AREACODEMARINEIV = 'countref.AreaCodeMarineIV';

    /** the column name for the FAOAreaMarineIV field */
    const FAOAREAMARINEIV = 'countref.FAOAreaMarineIV';

    /** the column name for the AreaCodeMarineV field */
    const AREACODEMARINEV = 'countref.AreaCodeMarineV';

    /** the column name for the FAOAreaMarineV field */
    const FAOAREAMARINEV = 'countref.FAOAreaMarineV';

    /** the column name for the Population field */
    const POPULATION = 'countref.Population';

    /** the column name for the PopulationYear field */
    const POPULATIONYEAR = 'countref.PopulationYear';

    /** the column name for the PopulationRate field */
    const POPULATIONRATE = 'countref.PopulationRate';

    /** the column name for the PopulationRef field */
    const POPULATIONREF = 'countref.PopulationRef';

    /** the column name for the CoastalPopulation field */
    const COASTALPOPULATION = 'countref.CoastalPopulation';

    /** the column name for the CoastPopRef field */
    const COASTPOPREF = 'countref.CoastPopRef';

    /** the column name for the Area field */
    const AREA = 'countref.Area';

    /** the column name for the Coastline field */
    const COASTLINE = 'countref.Coastline';

    /** the column name for the CoastlineRef field */
    const COASTLINEREF = 'countref.CoastlineRef';

    /** the column name for the ShelfArea field */
    const SHELFAREA = 'countref.ShelfArea';

    /** the column name for the ShelfRef field */
    const SHELFREF = 'countref.ShelfRef';

    /** the column name for the EECarea field */
    const EECAREA = 'countref.EECarea';

    /** the column name for the EEZRef field */
    const EEZREF = 'countref.EEZRef';

    /** the column name for the Language field */
    const LANGUAGE = 'countref.Language';

    /** the column name for the Currency field */
    const CURRENCY = 'countref.Currency';

    /** the column name for the MarineCount field */
    const MARINECOUNT = 'countref.MarineCount';

    /** the column name for the MarineFamCount field */
    const MARINEFAMCOUNT = 'countref.MarineFamCount';

    /** the column name for the CompleteMarine field */
    const COMPLETEMARINE = 'countref.CompleteMarine';

    /** the column name for the MarineLit field */
    const MARINELIT = 'countref.MarineLit';

    /** the column name for the MarineFamLit field */
    const MARINEFAMLIT = 'countref.MarineFamLit';

    /** the column name for the CheckMarineRef field */
    const CHECKMARINEREF = 'countref.CheckMarineRef';

    /** the column name for the MarineFlag field */
    const MARINEFLAG = 'countref.MarineFlag';

    /** the column name for the FreshwaterCount field */
    const FRESHWATERCOUNT = 'countref.FreshwaterCount';

    /** the column name for the FreshFamCount field */
    const FRESHFAMCOUNT = 'countref.FreshFamCount';

    /** the column name for the CompleteFresh field */
    const COMPLETEFRESH = 'countref.CompleteFresh';

    /** the column name for the FreshwaterLit field */
    const FRESHWATERLIT = 'countref.FreshwaterLit';

    /** the column name for the FreshFamLit field */
    const FRESHFAMLIT = 'countref.FreshFamLit';

    /** the column name for the CheckFreshRef field */
    const CHECKFRESHREF = 'countref.CheckFreshRef';

    /** the column name for the FreshFlag field */
    const FRESHFLAG = 'countref.FreshFlag';

    /** the column name for the TotalCount field */
    const TOTALCOUNT = 'countref.TotalCount';

    /** the column name for the TotalFamCount field */
    const TOTALFAMCOUNT = 'countref.TotalFamCount';

    /** the column name for the TotalComplete field */
    const TOTALCOMPLETE = 'countref.TotalComplete';

    /** the column name for the TotalLit field */
    const TOTALLIT = 'countref.TotalLit';

    /** the column name for the TotalFamLit field */
    const TOTALFAMLIT = 'countref.TotalFamLit';

    /** the column name for the TotalRef field */
    const TOTALREF = 'countref.TotalRef';

    /** the column name for the LastUpdate field */
    const LASTUPDATE = 'countref.LastUpdate';

    /** the column name for the MorphCountFresh field */
    const MORPHCOUNTFRESH = 'countref.MorphCountFresh';

    /** the column name for the OccurCountFresh field */
    const OCCURCOUNTFRESH = 'countref.OccurCountFresh';

    /** the column name for the PicCountFresh field */
    const PICCOUNTFRESH = 'countref.PicCountFresh';

    /** the column name for the GrowthCountFresh field */
    const GROWTHCOUNTFRESH = 'countref.GrowthCountFresh';

    /** the column name for the FoodCountFresh field */
    const FOODCOUNTFRESH = 'countref.FoodCountFresh';

    /** the column name for the DietCountFresh field */
    const DIETCOUNTFRESH = 'countref.DietCountFresh';

    /** the column name for the ReproductionCountFresh field */
    const REPRODUCTIONCOUNTFRESH = 'countref.ReproductionCountFresh';

    /** the column name for the SpawningCountFresh field */
    const SPAWNINGCOUNTFRESH = 'countref.SpawningCountFresh';

    /** the column name for the MorphCountMarine field */
    const MORPHCOUNTMARINE = 'countref.MorphCountMarine';

    /** the column name for the OccurCountMarine field */
    const OCCURCOUNTMARINE = 'countref.OccurCountMarine';

    /** the column name for the PicCountMarine field */
    const PICCOUNTMARINE = 'countref.PicCountMarine';

    /** the column name for the GrowthCountMarine field */
    const GROWTHCOUNTMARINE = 'countref.GrowthCountMarine';

    /** the column name for the FoodCountMarine field */
    const FOODCOUNTMARINE = 'countref.FoodCountMarine';

    /** the column name for the DietCountMarine field */
    const DIETCOUNTMARINE = 'countref.DietCountMarine';

    /** the column name for the ReproductionCountMarine field */
    const REPRODUCTIONCOUNTMARINE = 'countref.ReproductionCountMarine';

    /** the column name for the SpawningCountMarine field */
    const SPAWNINGCOUNTMARINE = 'countref.SpawningCountMarine';

    /** the column name for the LatDegFill field */
    const LATDEGFILL = 'countref.LatDegFill';

    /** the column name for the LatMinFill field */
    const LATMINFILL = 'countref.LatMinFill';

    /** the column name for the NorthSouthFill field */
    const NORTHSOUTHFILL = 'countref.NorthSouthFill';

    /** the column name for the LongDegFill field */
    const LONGDEGFILL = 'countref.LongDegFill';

    /** the column name for the LongMinFill field */
    const LONGMINFILL = 'countref.LongMinFill';

    /** the column name for the EastWestFill field */
    const EASTWESTFILL = 'countref.EastWestFill';

    /** the column name for the MLatDegFill field */
    const MLATDEGFILL = 'countref.MLatDegFill';

    /** the column name for the MLatMinFill field */
    const MLATMINFILL = 'countref.MLatMinFill';

    /** the column name for the MNorthSouthFill field */
    const MNORTHSOUTHFILL = 'countref.MNorthSouthFill';

    /** the column name for the MLongDegFill field */
    const MLONGDEGFILL = 'countref.MLongDegFill';

    /** the column name for the MLongMinFill field */
    const MLONGMINFILL = 'countref.MLongMinFill';

    /** the column name for the MEastWestFill field */
    const MEASTWESTFILL = 'countref.MEastWestFill';

    /** the column name for the MLatDegFill2 field */
    const MLATDEGFILL2 = 'countref.MLatDegFill2';

    /** the column name for the MLatMinFill2 field */
    const MLATMINFILL2 = 'countref.MLatMinFill2';

    /** the column name for the MNorthSouthFill2 field */
    const MNORTHSOUTHFILL2 = 'countref.MNorthSouthFill2';

    /** the column name for the MLongDegFill2 field */
    const MLONGDEGFILL2 = 'countref.MLongDegFill2';

    /** the column name for the MLongMinFill2 field */
    const MLONGMINFILL2 = 'countref.MLongMinFill2';

    /** the column name for the MEastWestFill2 field */
    const MEASTWESTFILL2 = 'countref.MEastWestFill2';

    /** the column name for the MLatDegFill3 field */
    const MLATDEGFILL3 = 'countref.MLatDegFill3';

    /** the column name for the MLatMinFill3 field */
    const MLATMINFILL3 = 'countref.MLatMinFill3';

    /** the column name for the MNorthSouthFill3 field */
    const MNORTHSOUTHFILL3 = 'countref.MNorthSouthFill3';

    /** the column name for the MLongDegFill3 field */
    const MLONGDEGFILL3 = 'countref.MLongDegFill3';

    /** the column name for the MLongMinFill3 field */
    const MLONGMINFILL3 = 'countref.MLongMinFill3';

    /** the column name for the MEastWestFill3 field */
    const MEASTWESTFILL3 = 'countref.MEastWestFill3';

    /** the column name for the MLatDegFill4 field */
    const MLATDEGFILL4 = 'countref.MLatDegFill4';

    /** the column name for the MLatMinFill4 field */
    const MLATMINFILL4 = 'countref.MLatMinFill4';

    /** the column name for the MNorthSouthFill4 field */
    const MNORTHSOUTHFILL4 = 'countref.MNorthSouthFill4';

    /** the column name for the MLongDegFill4 field */
    const MLONGDEGFILL4 = 'countref.MLongDegFill4';

    /** the column name for the MLongMinFill4 field */
    const MLONGMINFILL4 = 'countref.MLongMinFill4';

    /** the column name for the MEastWestFill4 field */
    const MEASTWESTFILL4 = 'countref.MEastWestFill4';

    /** the column name for the MLatDegFill5 field */
    const MLATDEGFILL5 = 'countref.MLatDegFill5';

    /** the column name for the MLatMinFill5 field */
    const MLATMINFILL5 = 'countref.MLatMinFill5';

    /** the column name for the MNorthSouthFill5 field */
    const MNORTHSOUTHFILL5 = 'countref.MNorthSouthFill5';

    /** the column name for the MLongDegFill5 field */
    const MLONGDEGFILL5 = 'countref.MLongDegFill5';

    /** the column name for the MLongMinFill5 field */
    const MLONGMINFILL5 = 'countref.MLongMinFill5';

    /** the column name for the MEastWestFill5 field */
    const MEASTWESTFILL5 = 'countref.MEastWestFill5';

    /** the column name for the NorthernLatitude field */
    const NORTHERNLATITUDE = 'countref.NorthernLatitude';

    /** the column name for the NorthernLatitudeNS field */
    const NORTHERNLATITUDENS = 'countref.NorthernLatitudeNS';

    /** the column name for the SouthernLatitude field */
    const SOUTHERNLATITUDE = 'countref.SouthernLatitude';

    /** the column name for the SouthernLatitudeNS field */
    const SOUTHERNLATITUDENS = 'countref.SouthernLatitudeNS';

    /** the column name for the WesternLongitude field */
    const WESTERNLONGITUDE = 'countref.WesternLongitude';

    /** the column name for the WesternLongitudeEW field */
    const WESTERNLONGITUDEEW = 'countref.WesternLongitudeEW';

    /** the column name for the EasternLongitude field */
    const EASTERNLONGITUDE = 'countref.EasternLongitude';

    /** the column name for the EasternLongitudeEW field */
    const EASTERNLONGITUDEEW = 'countref.EasternLongitudeEW';

    /** the column name for the CenterLat field */
    const CENTERLAT = 'countref.CenterLat';

    /** the column name for the CenterLong field */
    const CENTERLONG = 'countref.CenterLong';

    /** the column name for the OtherLanguage field */
    const OTHERLANGUAGE = 'countref.OtherLanguage';

    /** the column name for the Geography field */
    const GEOGRAPHY = 'countref.Geography';

    /** the column name for the GeographyRef field */
    const GEOGRAPHYREF = 'countref.GeographyRef';

    /** the column name for the Hydrography field */
    const HYDROGRAPHY = 'countref.Hydrography';

    /** the column name for the HydrographyRef field */
    const HYDROGRAPHYREF = 'countref.HydrographyRef';

    /** the column name for the CommentFresh field */
    const COMMENTFRESH = 'countref.CommentFresh';

    /** the column name for the RefFresh1 field */
    const REFFRESH1 = 'countref.RefFresh1';

    /** the column name for the RefFresh2 field */
    const REFFRESH2 = 'countref.RefFresh2';

    /** the column name for the RefFresh3 field */
    const REFFRESH3 = 'countref.RefFresh3';

    /** the column name for the FreshPrimary field */
    const FRESHPRIMARY = 'countref.FreshPrimary';

    /** the column name for the FreshSecondary field */
    const FRESHSECONDARY = 'countref.FreshSecondary';

    /** the column name for the FreshInto field */
    const FRESHINTO = 'countref.FreshInto';

    /** the column name for the InFisheriesReported field */
    const INFISHERIESREPORTED = 'countref.InFisheriesReported';

    /** the column name for the InFisheriesPotential field */
    const INFISHERIESPOTENTIAL = 'countref.InFisheriesPotential';

    /** the column name for the InAquaReported field */
    const INAQUAREPORTED = 'countref.InAquaReported';

    /** the column name for the InAquaPotential field */
    const INAQUAPOTENTIAL = 'countref.InAquaPotential';

    /** the column name for the ExportReported field */
    const EXPORTREPORTED = 'countref.ExportReported';

    /** the column name for the ExportPotential field */
    const EXPORTPOTENTIAL = 'countref.ExportPotential';

    /** the column name for the SportReported field */
    const SPORTREPORTED = 'countref.SportReported';

    /** the column name for the SportPotential field */
    const SPORTPOTENTIAL = 'countref.SportPotential';

    /** the column name for the EndemicReported field */
    const ENDEMICREPORTED = 'countref.EndemicReported';

    /** the column name for the EndemicPotential field */
    const ENDEMICPOTENTIAL = 'countref.EndemicPotential';

    /** the column name for the Threatened field */
    const THREATENED = 'countref.Threatened';

    /** the column name for the ProtectedReported field */
    const PROTECTEDREPORTED = 'countref.ProtectedReported';

    /** the column name for the ProtectedPotential field */
    const PROTECTEDPOTENTIAL = 'countref.ProtectedPotential';

    /** the column name for the ACP field */
    const ACP = 'countref.ACP';

    /** the column name for the Developed field */
    const DEVELOPED = 'countref.Developed';

    /** the column name for the Marine field */
    const MARINE = 'countref.Marine';

    /** the column name for the Brackish field */
    const BRACKISH = 'countref.Brackish';

    /** the column name for the MarineInto field */
    const MARINEINTO = 'countref.MarineInto';

    /** the column name for the MarineInFisheriesReported field */
    const MARINEINFISHERIESREPORTED = 'countref.MarineInFisheriesReported';

    /** the column name for the MarineInFisheriesPotential field */
    const MARINEINFISHERIESPOTENTIAL = 'countref.MarineInFisheriesPotential';

    /** the column name for the MarineInAquaReported field */
    const MARINEINAQUAREPORTED = 'countref.MarineInAquaReported';

    /** the column name for the MarineInAquaPotential field */
    const MARINEINAQUAPOTENTIAL = 'countref.MarineInAquaPotential';

    /** the column name for the MarineExportReported field */
    const MARINEEXPORTREPORTED = 'countref.MarineExportReported';

    /** the column name for the MarineExportPotential field */
    const MARINEEXPORTPOTENTIAL = 'countref.MarineExportPotential';

    /** the column name for the MarineSportReported field */
    const MARINESPORTREPORTED = 'countref.MarineSportReported';

    /** the column name for the MarineSportPotential field */
    const MARINESPORTPOTENTIAL = 'countref.MarineSportPotential';

    /** the column name for the MarineEndemicReported field */
    const MARINEENDEMICREPORTED = 'countref.MarineEndemicReported';

    /** the column name for the MarineEndemicPotential field */
    const MARINEENDEMICPOTENTIAL = 'countref.MarineEndemicPotential';

    /** the column name for the MarineThreatened field */
    const MARINETHREATENED = 'countref.MarineThreatened';

    /** the column name for the MarineProtectedReported field */
    const MARINEPROTECTEDREPORTED = 'countref.MarineProtectedReported';

    /** the column name for the MarineProtectedPotential field */
    const MARINEPROTECTEDPOTENTIAL = 'countref.MarineProtectedPotential';

    /** the column name for the NatFishDB field */
    const NATFISHDB = 'countref.NatFishDB';

    /** the column name for the NatFishDB2 field */
    const NATFISHDB2 = 'countref.NatFishDB2';

    /** the column name for the Factbook field */
    const FACTBOOK = 'countref.Factbook';

    /** the column name for the NatFishAut field */
    const NATFISHAUT = 'countref.NatFishAut';

    /** the column name for the TradeNames field */
    const TRADENAMES = 'countref.TradeNames';

    /** the column name for the Entered field */
    const ENTERED = 'countref.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'countref.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'countref.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'countref.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'countref.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'countref.DateChecked';

    /** the column name for the Greek_original field */
    const GREEK_ORIGINAL = 'countref.Greek_original';

    /** the column name for the Greek field */
    const GREEK = 'countref.Greek';

    /** the column name for the RUSSIAN_original field */
    const RUSSIAN_ORIGINAL = 'countref.RUSSIAN_original';

    /** the column name for the RUSSIAN field */
    const RUSSIAN = 'countref.RUSSIAN';

    /** the column name for the FRENCH field */
    const FRENCH = 'countref.FRENCH';

    /** the column name for the SPANISH field */
    const SPANISH = 'countref.SPANISH';

    /** the column name for the GERMAN field */
    const GERMAN = 'countref.GERMAN';

    /** the column name for the DUTCH field */
    const DUTCH = 'countref.DUTCH';

    /** the column name for the PORTUGUESE field */
    const PORTUGUESE = 'countref.PORTUGUESE';

    /** the column name for the ITALIAN field */
    const ITALIAN = 'countref.ITALIAN';

    /** the column name for the SWEDISH field */
    const SWEDISH = 'countref.SWEDISH';

    /** the column name for the TS field */
    const TS = 'countref.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Countref objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Countref[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CountrefPeer::$fieldNames[CountrefPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Paese', 'Note', 'CCode', 'Abb', 'IsoCode', 'Iso3alpha', 'Iso2alpha', 'SaupCode', 'Used', 'Capital', 'Latdeg', 'Latmin', 'Northsouth', 'Longdeg', 'Longmin', 'Eastwest', 'Remark', 'Polarboreal', 'Temperate', 'Subtropical', 'Tropical', 'Landlocked', 'Geographicarea', 'Region', 'Continent', 'Areacodeinland', 'Faoareainland', 'Areacodemarinei', 'Faoareamarinei', 'Areacodemarineii', 'Faoareamarineii', 'Areacodemarineiii', 'Faoareamarineiii', 'Areacodemarineiv', 'Faoareamarineiv', 'Areacodemarinev', 'Faoareamarinev', 'Population', 'Populationyear', 'Populationrate', 'Populationref', 'Coastalpopulation', 'Coastpopref', 'Area', 'Coastline', 'Coastlineref', 'Shelfarea', 'Shelfref', 'Eecarea', 'Eezref', 'Language', 'Currency', 'Marinecount', 'Marinefamcount', 'Completemarine', 'Marinelit', 'Marinefamlit', 'Checkmarineref', 'Marineflag', 'Freshwatercount', 'Freshfamcount', 'Completefresh', 'Freshwaterlit', 'Freshfamlit', 'Checkfreshref', 'Freshflag', 'Totalcount', 'Totalfamcount', 'Totalcomplete', 'Totallit', 'Totalfamlit', 'Totalref', 'Lastupdate', 'Morphcountfresh', 'Occurcountfresh', 'Piccountfresh', 'Growthcountfresh', 'Foodcountfresh', 'Dietcountfresh', 'Reproductioncountfresh', 'Spawningcountfresh', 'Morphcountmarine', 'Occurcountmarine', 'Piccountmarine', 'Growthcountmarine', 'Foodcountmarine', 'Dietcountmarine', 'Reproductioncountmarine', 'Spawningcountmarine', 'Latdegfill', 'Latminfill', 'Northsouthfill', 'Longdegfill', 'Longminfill', 'Eastwestfill', 'Mlatdegfill', 'Mlatminfill', 'Mnorthsouthfill', 'Mlongdegfill', 'Mlongminfill', 'Meastwestfill', 'Mlatdegfill2', 'Mlatminfill2', 'Mnorthsouthfill2', 'Mlongdegfill2', 'Mlongminfill2', 'Meastwestfill2', 'Mlatdegfill3', 'Mlatminfill3', 'Mnorthsouthfill3', 'Mlongdegfill3', 'Mlongminfill3', 'Meastwestfill3', 'Mlatdegfill4', 'Mlatminfill4', 'Mnorthsouthfill4', 'Mlongdegfill4', 'Mlongminfill4', 'Meastwestfill4', 'Mlatdegfill5', 'Mlatminfill5', 'Mnorthsouthfill5', 'Mlongdegfill5', 'Mlongminfill5', 'Meastwestfill5', 'Northernlatitude', 'Northernlatitudens', 'Southernlatitude', 'Southernlatitudens', 'Westernlongitude', 'Westernlongitudeew', 'Easternlongitude', 'Easternlongitudeew', 'Centerlat', 'Centerlong', 'Otherlanguage', 'Geography', 'Geographyref', 'Hydrography', 'Hydrographyref', 'Commentfresh', 'Reffresh1', 'Reffresh2', 'Reffresh3', 'Freshprimary', 'Freshsecondary', 'Freshinto', 'Infisheriesreported', 'Infisheriespotential', 'Inaquareported', 'Inaquapotential', 'Exportreported', 'Exportpotential', 'Sportreported', 'Sportpotential', 'Endemicreported', 'Endemicpotential', 'Threatened', 'Protectedreported', 'Protectedpotential', 'Acp', 'Developed', 'Marine', 'Brackish', 'Marineinto', 'Marineinfisheriesreported', 'Marineinfisheriespotential', 'Marineinaquareported', 'Marineinaquapotential', 'Marineexportreported', 'Marineexportpotential', 'Marinesportreported', 'Marinesportpotential', 'Marineendemicreported', 'Marineendemicpotential', 'Marinethreatened', 'Marineprotectedreported', 'Marineprotectedpotential', 'Natfishdb', 'Natfishdb2', 'Factbook', 'Natfishaut', 'Tradenames', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'GreekOriginal', 'Greek', 'RussianOriginal', 'Russian', 'French', 'Spanish', 'German', 'Dutch', 'Portuguese', 'Italian', 'Swedish', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('paese', 'note', 'cCode', 'abb', 'isoCode', 'iso3alpha', 'iso2alpha', 'saupCode', 'used', 'capital', 'latdeg', 'latmin', 'northsouth', 'longdeg', 'longmin', 'eastwest', 'remark', 'polarboreal', 'temperate', 'subtropical', 'tropical', 'landlocked', 'geographicarea', 'region', 'continent', 'areacodeinland', 'faoareainland', 'areacodemarinei', 'faoareamarinei', 'areacodemarineii', 'faoareamarineii', 'areacodemarineiii', 'faoareamarineiii', 'areacodemarineiv', 'faoareamarineiv', 'areacodemarinev', 'faoareamarinev', 'population', 'populationyear', 'populationrate', 'populationref', 'coastalpopulation', 'coastpopref', 'area', 'coastline', 'coastlineref', 'shelfarea', 'shelfref', 'eecarea', 'eezref', 'language', 'currency', 'marinecount', 'marinefamcount', 'completemarine', 'marinelit', 'marinefamlit', 'checkmarineref', 'marineflag', 'freshwatercount', 'freshfamcount', 'completefresh', 'freshwaterlit', 'freshfamlit', 'checkfreshref', 'freshflag', 'totalcount', 'totalfamcount', 'totalcomplete', 'totallit', 'totalfamlit', 'totalref', 'lastupdate', 'morphcountfresh', 'occurcountfresh', 'piccountfresh', 'growthcountfresh', 'foodcountfresh', 'dietcountfresh', 'reproductioncountfresh', 'spawningcountfresh', 'morphcountmarine', 'occurcountmarine', 'piccountmarine', 'growthcountmarine', 'foodcountmarine', 'dietcountmarine', 'reproductioncountmarine', 'spawningcountmarine', 'latdegfill', 'latminfill', 'northsouthfill', 'longdegfill', 'longminfill', 'eastwestfill', 'mlatdegfill', 'mlatminfill', 'mnorthsouthfill', 'mlongdegfill', 'mlongminfill', 'meastwestfill', 'mlatdegfill2', 'mlatminfill2', 'mnorthsouthfill2', 'mlongdegfill2', 'mlongminfill2', 'meastwestfill2', 'mlatdegfill3', 'mlatminfill3', 'mnorthsouthfill3', 'mlongdegfill3', 'mlongminfill3', 'meastwestfill3', 'mlatdegfill4', 'mlatminfill4', 'mnorthsouthfill4', 'mlongdegfill4', 'mlongminfill4', 'meastwestfill4', 'mlatdegfill5', 'mlatminfill5', 'mnorthsouthfill5', 'mlongdegfill5', 'mlongminfill5', 'meastwestfill5', 'northernlatitude', 'northernlatitudens', 'southernlatitude', 'southernlatitudens', 'westernlongitude', 'westernlongitudeew', 'easternlongitude', 'easternlongitudeew', 'centerlat', 'centerlong', 'otherlanguage', 'geography', 'geographyref', 'hydrography', 'hydrographyref', 'commentfresh', 'reffresh1', 'reffresh2', 'reffresh3', 'freshprimary', 'freshsecondary', 'freshinto', 'infisheriesreported', 'infisheriespotential', 'inaquareported', 'inaquapotential', 'exportreported', 'exportpotential', 'sportreported', 'sportpotential', 'endemicreported', 'endemicpotential', 'threatened', 'protectedreported', 'protectedpotential', 'acp', 'developed', 'marine', 'brackish', 'marineinto', 'marineinfisheriesreported', 'marineinfisheriespotential', 'marineinaquareported', 'marineinaquapotential', 'marineexportreported', 'marineexportpotential', 'marinesportreported', 'marinesportpotential', 'marineendemicreported', 'marineendemicpotential', 'marinethreatened', 'marineprotectedreported', 'marineprotectedpotential', 'natfishdb', 'natfishdb2', 'factbook', 'natfishaut', 'tradenames', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'greekOriginal', 'greek', 'russianOriginal', 'russian', 'french', 'spanish', 'german', 'dutch', 'portuguese', 'italian', 'swedish', 'ts', ),
        BasePeer::TYPE_COLNAME => array (CountrefPeer::PAESE, CountrefPeer::NOTE, CountrefPeer::C_CODE, CountrefPeer::ABB, CountrefPeer::ISO_CODE, CountrefPeer::ISO3ALPHA, CountrefPeer::ISO2ALPHA, CountrefPeer::SAUP_CODE, CountrefPeer::USED, CountrefPeer::CAPITAL, CountrefPeer::LATDEG, CountrefPeer::LATMIN, CountrefPeer::NORTHSOUTH, CountrefPeer::LONGDEG, CountrefPeer::LONGMIN, CountrefPeer::EASTWEST, CountrefPeer::REMARK, CountrefPeer::POLARBOREAL, CountrefPeer::TEMPERATE, CountrefPeer::SUBTROPICAL, CountrefPeer::TROPICAL, CountrefPeer::LANDLOCKED, CountrefPeer::GEOGRAPHICAREA, CountrefPeer::REGION, CountrefPeer::CONTINENT, CountrefPeer::AREACODEINLAND, CountrefPeer::FAOAREAINLAND, CountrefPeer::AREACODEMARINEI, CountrefPeer::FAOAREAMARINEI, CountrefPeer::AREACODEMARINEII, CountrefPeer::FAOAREAMARINEII, CountrefPeer::AREACODEMARINEIII, CountrefPeer::FAOAREAMARINEIII, CountrefPeer::AREACODEMARINEIV, CountrefPeer::FAOAREAMARINEIV, CountrefPeer::AREACODEMARINEV, CountrefPeer::FAOAREAMARINEV, CountrefPeer::POPULATION, CountrefPeer::POPULATIONYEAR, CountrefPeer::POPULATIONRATE, CountrefPeer::POPULATIONREF, CountrefPeer::COASTALPOPULATION, CountrefPeer::COASTPOPREF, CountrefPeer::AREA, CountrefPeer::COASTLINE, CountrefPeer::COASTLINEREF, CountrefPeer::SHELFAREA, CountrefPeer::SHELFREF, CountrefPeer::EECAREA, CountrefPeer::EEZREF, CountrefPeer::LANGUAGE, CountrefPeer::CURRENCY, CountrefPeer::MARINECOUNT, CountrefPeer::MARINEFAMCOUNT, CountrefPeer::COMPLETEMARINE, CountrefPeer::MARINELIT, CountrefPeer::MARINEFAMLIT, CountrefPeer::CHECKMARINEREF, CountrefPeer::MARINEFLAG, CountrefPeer::FRESHWATERCOUNT, CountrefPeer::FRESHFAMCOUNT, CountrefPeer::COMPLETEFRESH, CountrefPeer::FRESHWATERLIT, CountrefPeer::FRESHFAMLIT, CountrefPeer::CHECKFRESHREF, CountrefPeer::FRESHFLAG, CountrefPeer::TOTALCOUNT, CountrefPeer::TOTALFAMCOUNT, CountrefPeer::TOTALCOMPLETE, CountrefPeer::TOTALLIT, CountrefPeer::TOTALFAMLIT, CountrefPeer::TOTALREF, CountrefPeer::LASTUPDATE, CountrefPeer::MORPHCOUNTFRESH, CountrefPeer::OCCURCOUNTFRESH, CountrefPeer::PICCOUNTFRESH, CountrefPeer::GROWTHCOUNTFRESH, CountrefPeer::FOODCOUNTFRESH, CountrefPeer::DIETCOUNTFRESH, CountrefPeer::REPRODUCTIONCOUNTFRESH, CountrefPeer::SPAWNINGCOUNTFRESH, CountrefPeer::MORPHCOUNTMARINE, CountrefPeer::OCCURCOUNTMARINE, CountrefPeer::PICCOUNTMARINE, CountrefPeer::GROWTHCOUNTMARINE, CountrefPeer::FOODCOUNTMARINE, CountrefPeer::DIETCOUNTMARINE, CountrefPeer::REPRODUCTIONCOUNTMARINE, CountrefPeer::SPAWNINGCOUNTMARINE, CountrefPeer::LATDEGFILL, CountrefPeer::LATMINFILL, CountrefPeer::NORTHSOUTHFILL, CountrefPeer::LONGDEGFILL, CountrefPeer::LONGMINFILL, CountrefPeer::EASTWESTFILL, CountrefPeer::MLATDEGFILL, CountrefPeer::MLATMINFILL, CountrefPeer::MNORTHSOUTHFILL, CountrefPeer::MLONGDEGFILL, CountrefPeer::MLONGMINFILL, CountrefPeer::MEASTWESTFILL, CountrefPeer::MLATDEGFILL2, CountrefPeer::MLATMINFILL2, CountrefPeer::MNORTHSOUTHFILL2, CountrefPeer::MLONGDEGFILL2, CountrefPeer::MLONGMINFILL2, CountrefPeer::MEASTWESTFILL2, CountrefPeer::MLATDEGFILL3, CountrefPeer::MLATMINFILL3, CountrefPeer::MNORTHSOUTHFILL3, CountrefPeer::MLONGDEGFILL3, CountrefPeer::MLONGMINFILL3, CountrefPeer::MEASTWESTFILL3, CountrefPeer::MLATDEGFILL4, CountrefPeer::MLATMINFILL4, CountrefPeer::MNORTHSOUTHFILL4, CountrefPeer::MLONGDEGFILL4, CountrefPeer::MLONGMINFILL4, CountrefPeer::MEASTWESTFILL4, CountrefPeer::MLATDEGFILL5, CountrefPeer::MLATMINFILL5, CountrefPeer::MNORTHSOUTHFILL5, CountrefPeer::MLONGDEGFILL5, CountrefPeer::MLONGMINFILL5, CountrefPeer::MEASTWESTFILL5, CountrefPeer::NORTHERNLATITUDE, CountrefPeer::NORTHERNLATITUDENS, CountrefPeer::SOUTHERNLATITUDE, CountrefPeer::SOUTHERNLATITUDENS, CountrefPeer::WESTERNLONGITUDE, CountrefPeer::WESTERNLONGITUDEEW, CountrefPeer::EASTERNLONGITUDE, CountrefPeer::EASTERNLONGITUDEEW, CountrefPeer::CENTERLAT, CountrefPeer::CENTERLONG, CountrefPeer::OTHERLANGUAGE, CountrefPeer::GEOGRAPHY, CountrefPeer::GEOGRAPHYREF, CountrefPeer::HYDROGRAPHY, CountrefPeer::HYDROGRAPHYREF, CountrefPeer::COMMENTFRESH, CountrefPeer::REFFRESH1, CountrefPeer::REFFRESH2, CountrefPeer::REFFRESH3, CountrefPeer::FRESHPRIMARY, CountrefPeer::FRESHSECONDARY, CountrefPeer::FRESHINTO, CountrefPeer::INFISHERIESREPORTED, CountrefPeer::INFISHERIESPOTENTIAL, CountrefPeer::INAQUAREPORTED, CountrefPeer::INAQUAPOTENTIAL, CountrefPeer::EXPORTREPORTED, CountrefPeer::EXPORTPOTENTIAL, CountrefPeer::SPORTREPORTED, CountrefPeer::SPORTPOTENTIAL, CountrefPeer::ENDEMICREPORTED, CountrefPeer::ENDEMICPOTENTIAL, CountrefPeer::THREATENED, CountrefPeer::PROTECTEDREPORTED, CountrefPeer::PROTECTEDPOTENTIAL, CountrefPeer::ACP, CountrefPeer::DEVELOPED, CountrefPeer::MARINE, CountrefPeer::BRACKISH, CountrefPeer::MARINEINTO, CountrefPeer::MARINEINFISHERIESREPORTED, CountrefPeer::MARINEINFISHERIESPOTENTIAL, CountrefPeer::MARINEINAQUAREPORTED, CountrefPeer::MARINEINAQUAPOTENTIAL, CountrefPeer::MARINEEXPORTREPORTED, CountrefPeer::MARINEEXPORTPOTENTIAL, CountrefPeer::MARINESPORTREPORTED, CountrefPeer::MARINESPORTPOTENTIAL, CountrefPeer::MARINEENDEMICREPORTED, CountrefPeer::MARINEENDEMICPOTENTIAL, CountrefPeer::MARINETHREATENED, CountrefPeer::MARINEPROTECTEDREPORTED, CountrefPeer::MARINEPROTECTEDPOTENTIAL, CountrefPeer::NATFISHDB, CountrefPeer::NATFISHDB2, CountrefPeer::FACTBOOK, CountrefPeer::NATFISHAUT, CountrefPeer::TRADENAMES, CountrefPeer::ENTERED, CountrefPeer::DATEENTERED, CountrefPeer::MODIFIED, CountrefPeer::DATEMODIFIED, CountrefPeer::EXPERT, CountrefPeer::DATECHECKED, CountrefPeer::GREEK_ORIGINAL, CountrefPeer::GREEK, CountrefPeer::RUSSIAN_ORIGINAL, CountrefPeer::RUSSIAN, CountrefPeer::FRENCH, CountrefPeer::SPANISH, CountrefPeer::GERMAN, CountrefPeer::DUTCH, CountrefPeer::PORTUGUESE, CountrefPeer::ITALIAN, CountrefPeer::SWEDISH, CountrefPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PAESE', 'NOTE', 'C_CODE', 'ABB', 'ISO_CODE', 'ISO3ALPHA', 'ISO2ALPHA', 'SAUP_CODE', 'USED', 'CAPITAL', 'LATDEG', 'LATMIN', 'NORTHSOUTH', 'LONGDEG', 'LONGMIN', 'EASTWEST', 'REMARK', 'POLARBOREAL', 'TEMPERATE', 'SUBTROPICAL', 'TROPICAL', 'LANDLOCKED', 'GEOGRAPHICAREA', 'REGION', 'CONTINENT', 'AREACODEINLAND', 'FAOAREAINLAND', 'AREACODEMARINEI', 'FAOAREAMARINEI', 'AREACODEMARINEII', 'FAOAREAMARINEII', 'AREACODEMARINEIII', 'FAOAREAMARINEIII', 'AREACODEMARINEIV', 'FAOAREAMARINEIV', 'AREACODEMARINEV', 'FAOAREAMARINEV', 'POPULATION', 'POPULATIONYEAR', 'POPULATIONRATE', 'POPULATIONREF', 'COASTALPOPULATION', 'COASTPOPREF', 'AREA', 'COASTLINE', 'COASTLINEREF', 'SHELFAREA', 'SHELFREF', 'EECAREA', 'EEZREF', 'LANGUAGE', 'CURRENCY', 'MARINECOUNT', 'MARINEFAMCOUNT', 'COMPLETEMARINE', 'MARINELIT', 'MARINEFAMLIT', 'CHECKMARINEREF', 'MARINEFLAG', 'FRESHWATERCOUNT', 'FRESHFAMCOUNT', 'COMPLETEFRESH', 'FRESHWATERLIT', 'FRESHFAMLIT', 'CHECKFRESHREF', 'FRESHFLAG', 'TOTALCOUNT', 'TOTALFAMCOUNT', 'TOTALCOMPLETE', 'TOTALLIT', 'TOTALFAMLIT', 'TOTALREF', 'LASTUPDATE', 'MORPHCOUNTFRESH', 'OCCURCOUNTFRESH', 'PICCOUNTFRESH', 'GROWTHCOUNTFRESH', 'FOODCOUNTFRESH', 'DIETCOUNTFRESH', 'REPRODUCTIONCOUNTFRESH', 'SPAWNINGCOUNTFRESH', 'MORPHCOUNTMARINE', 'OCCURCOUNTMARINE', 'PICCOUNTMARINE', 'GROWTHCOUNTMARINE', 'FOODCOUNTMARINE', 'DIETCOUNTMARINE', 'REPRODUCTIONCOUNTMARINE', 'SPAWNINGCOUNTMARINE', 'LATDEGFILL', 'LATMINFILL', 'NORTHSOUTHFILL', 'LONGDEGFILL', 'LONGMINFILL', 'EASTWESTFILL', 'MLATDEGFILL', 'MLATMINFILL', 'MNORTHSOUTHFILL', 'MLONGDEGFILL', 'MLONGMINFILL', 'MEASTWESTFILL', 'MLATDEGFILL2', 'MLATMINFILL2', 'MNORTHSOUTHFILL2', 'MLONGDEGFILL2', 'MLONGMINFILL2', 'MEASTWESTFILL2', 'MLATDEGFILL3', 'MLATMINFILL3', 'MNORTHSOUTHFILL3', 'MLONGDEGFILL3', 'MLONGMINFILL3', 'MEASTWESTFILL3', 'MLATDEGFILL4', 'MLATMINFILL4', 'MNORTHSOUTHFILL4', 'MLONGDEGFILL4', 'MLONGMINFILL4', 'MEASTWESTFILL4', 'MLATDEGFILL5', 'MLATMINFILL5', 'MNORTHSOUTHFILL5', 'MLONGDEGFILL5', 'MLONGMINFILL5', 'MEASTWESTFILL5', 'NORTHERNLATITUDE', 'NORTHERNLATITUDENS', 'SOUTHERNLATITUDE', 'SOUTHERNLATITUDENS', 'WESTERNLONGITUDE', 'WESTERNLONGITUDEEW', 'EASTERNLONGITUDE', 'EASTERNLONGITUDEEW', 'CENTERLAT', 'CENTERLONG', 'OTHERLANGUAGE', 'GEOGRAPHY', 'GEOGRAPHYREF', 'HYDROGRAPHY', 'HYDROGRAPHYREF', 'COMMENTFRESH', 'REFFRESH1', 'REFFRESH2', 'REFFRESH3', 'FRESHPRIMARY', 'FRESHSECONDARY', 'FRESHINTO', 'INFISHERIESREPORTED', 'INFISHERIESPOTENTIAL', 'INAQUAREPORTED', 'INAQUAPOTENTIAL', 'EXPORTREPORTED', 'EXPORTPOTENTIAL', 'SPORTREPORTED', 'SPORTPOTENTIAL', 'ENDEMICREPORTED', 'ENDEMICPOTENTIAL', 'THREATENED', 'PROTECTEDREPORTED', 'PROTECTEDPOTENTIAL', 'ACP', 'DEVELOPED', 'MARINE', 'BRACKISH', 'MARINEINTO', 'MARINEINFISHERIESREPORTED', 'MARINEINFISHERIESPOTENTIAL', 'MARINEINAQUAREPORTED', 'MARINEINAQUAPOTENTIAL', 'MARINEEXPORTREPORTED', 'MARINEEXPORTPOTENTIAL', 'MARINESPORTREPORTED', 'MARINESPORTPOTENTIAL', 'MARINEENDEMICREPORTED', 'MARINEENDEMICPOTENTIAL', 'MARINETHREATENED', 'MARINEPROTECTEDREPORTED', 'MARINEPROTECTEDPOTENTIAL', 'NATFISHDB', 'NATFISHDB2', 'FACTBOOK', 'NATFISHAUT', 'TRADENAMES', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'GREEK_ORIGINAL', 'GREEK', 'RUSSIAN_ORIGINAL', 'RUSSIAN', 'FRENCH', 'SPANISH', 'GERMAN', 'DUTCH', 'PORTUGUESE', 'ITALIAN', 'SWEDISH', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('PAESE', 'Note', 'C_Code', 'ABB', 'ISO_Code', 'ISO3Alpha', 'ISO2Alpha', 'SAUP_Code', 'Used', 'Capital', 'LatDeg', 'LatMin', 'NorthSouth', 'LongDeg', 'LongMin', 'EastWest', 'Remark', 'PolarBoreal', 'Temperate', 'Subtropical', 'Tropical', 'Landlocked', 'GeographicArea', 'Region', 'Continent', 'AreaCodeInland', 'FAOAreaInland', 'AreaCodeMarineI', 'FAOAreaMarineI', 'AreaCodeMarineII', 'FAOAreaMarineII', 'AreaCodeMarineIII', 'FAOAreaMarineIII', 'AreaCodeMarineIV', 'FAOAreaMarineIV', 'AreaCodeMarineV', 'FAOAreaMarineV', 'Population', 'PopulationYear', 'PopulationRate', 'PopulationRef', 'CoastalPopulation', 'CoastPopRef', 'Area', 'Coastline', 'CoastlineRef', 'ShelfArea', 'ShelfRef', 'EECarea', 'EEZRef', 'Language', 'Currency', 'MarineCount', 'MarineFamCount', 'CompleteMarine', 'MarineLit', 'MarineFamLit', 'CheckMarineRef', 'MarineFlag', 'FreshwaterCount', 'FreshFamCount', 'CompleteFresh', 'FreshwaterLit', 'FreshFamLit', 'CheckFreshRef', 'FreshFlag', 'TotalCount', 'TotalFamCount', 'TotalComplete', 'TotalLit', 'TotalFamLit', 'TotalRef', 'LastUpdate', 'MorphCountFresh', 'OccurCountFresh', 'PicCountFresh', 'GrowthCountFresh', 'FoodCountFresh', 'DietCountFresh', 'ReproductionCountFresh', 'SpawningCountFresh', 'MorphCountMarine', 'OccurCountMarine', 'PicCountMarine', 'GrowthCountMarine', 'FoodCountMarine', 'DietCountMarine', 'ReproductionCountMarine', 'SpawningCountMarine', 'LatDegFill', 'LatMinFill', 'NorthSouthFill', 'LongDegFill', 'LongMinFill', 'EastWestFill', 'MLatDegFill', 'MLatMinFill', 'MNorthSouthFill', 'MLongDegFill', 'MLongMinFill', 'MEastWestFill', 'MLatDegFill2', 'MLatMinFill2', 'MNorthSouthFill2', 'MLongDegFill2', 'MLongMinFill2', 'MEastWestFill2', 'MLatDegFill3', 'MLatMinFill3', 'MNorthSouthFill3', 'MLongDegFill3', 'MLongMinFill3', 'MEastWestFill3', 'MLatDegFill4', 'MLatMinFill4', 'MNorthSouthFill4', 'MLongDegFill4', 'MLongMinFill4', 'MEastWestFill4', 'MLatDegFill5', 'MLatMinFill5', 'MNorthSouthFill5', 'MLongDegFill5', 'MLongMinFill5', 'MEastWestFill5', 'NorthernLatitude', 'NorthernLatitudeNS', 'SouthernLatitude', 'SouthernLatitudeNS', 'WesternLongitude', 'WesternLongitudeEW', 'EasternLongitude', 'EasternLongitudeEW', 'CenterLat', 'CenterLong', 'OtherLanguage', 'Geography', 'GeographyRef', 'Hydrography', 'HydrographyRef', 'CommentFresh', 'RefFresh1', 'RefFresh2', 'RefFresh3', 'FreshPrimary', 'FreshSecondary', 'FreshInto', 'InFisheriesReported', 'InFisheriesPotential', 'InAquaReported', 'InAquaPotential', 'ExportReported', 'ExportPotential', 'SportReported', 'SportPotential', 'EndemicReported', 'EndemicPotential', 'Threatened', 'ProtectedReported', 'ProtectedPotential', 'ACP', 'Developed', 'Marine', 'Brackish', 'MarineInto', 'MarineInFisheriesReported', 'MarineInFisheriesPotential', 'MarineInAquaReported', 'MarineInAquaPotential', 'MarineExportReported', 'MarineExportPotential', 'MarineSportReported', 'MarineSportPotential', 'MarineEndemicReported', 'MarineEndemicPotential', 'MarineThreatened', 'MarineProtectedReported', 'MarineProtectedPotential', 'NatFishDB', 'NatFishDB2', 'Factbook', 'NatFishAut', 'TradeNames', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Greek_original', 'Greek', 'RUSSIAN_original', 'RUSSIAN', 'FRENCH', 'SPANISH', 'GERMAN', 'DUTCH', 'PORTUGUESE', 'ITALIAN', 'SWEDISH', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CountrefPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Paese' => 0, 'Note' => 1, 'CCode' => 2, 'Abb' => 3, 'IsoCode' => 4, 'Iso3alpha' => 5, 'Iso2alpha' => 6, 'SaupCode' => 7, 'Used' => 8, 'Capital' => 9, 'Latdeg' => 10, 'Latmin' => 11, 'Northsouth' => 12, 'Longdeg' => 13, 'Longmin' => 14, 'Eastwest' => 15, 'Remark' => 16, 'Polarboreal' => 17, 'Temperate' => 18, 'Subtropical' => 19, 'Tropical' => 20, 'Landlocked' => 21, 'Geographicarea' => 22, 'Region' => 23, 'Continent' => 24, 'Areacodeinland' => 25, 'Faoareainland' => 26, 'Areacodemarinei' => 27, 'Faoareamarinei' => 28, 'Areacodemarineii' => 29, 'Faoareamarineii' => 30, 'Areacodemarineiii' => 31, 'Faoareamarineiii' => 32, 'Areacodemarineiv' => 33, 'Faoareamarineiv' => 34, 'Areacodemarinev' => 35, 'Faoareamarinev' => 36, 'Population' => 37, 'Populationyear' => 38, 'Populationrate' => 39, 'Populationref' => 40, 'Coastalpopulation' => 41, 'Coastpopref' => 42, 'Area' => 43, 'Coastline' => 44, 'Coastlineref' => 45, 'Shelfarea' => 46, 'Shelfref' => 47, 'Eecarea' => 48, 'Eezref' => 49, 'Language' => 50, 'Currency' => 51, 'Marinecount' => 52, 'Marinefamcount' => 53, 'Completemarine' => 54, 'Marinelit' => 55, 'Marinefamlit' => 56, 'Checkmarineref' => 57, 'Marineflag' => 58, 'Freshwatercount' => 59, 'Freshfamcount' => 60, 'Completefresh' => 61, 'Freshwaterlit' => 62, 'Freshfamlit' => 63, 'Checkfreshref' => 64, 'Freshflag' => 65, 'Totalcount' => 66, 'Totalfamcount' => 67, 'Totalcomplete' => 68, 'Totallit' => 69, 'Totalfamlit' => 70, 'Totalref' => 71, 'Lastupdate' => 72, 'Morphcountfresh' => 73, 'Occurcountfresh' => 74, 'Piccountfresh' => 75, 'Growthcountfresh' => 76, 'Foodcountfresh' => 77, 'Dietcountfresh' => 78, 'Reproductioncountfresh' => 79, 'Spawningcountfresh' => 80, 'Morphcountmarine' => 81, 'Occurcountmarine' => 82, 'Piccountmarine' => 83, 'Growthcountmarine' => 84, 'Foodcountmarine' => 85, 'Dietcountmarine' => 86, 'Reproductioncountmarine' => 87, 'Spawningcountmarine' => 88, 'Latdegfill' => 89, 'Latminfill' => 90, 'Northsouthfill' => 91, 'Longdegfill' => 92, 'Longminfill' => 93, 'Eastwestfill' => 94, 'Mlatdegfill' => 95, 'Mlatminfill' => 96, 'Mnorthsouthfill' => 97, 'Mlongdegfill' => 98, 'Mlongminfill' => 99, 'Meastwestfill' => 100, 'Mlatdegfill2' => 101, 'Mlatminfill2' => 102, 'Mnorthsouthfill2' => 103, 'Mlongdegfill2' => 104, 'Mlongminfill2' => 105, 'Meastwestfill2' => 106, 'Mlatdegfill3' => 107, 'Mlatminfill3' => 108, 'Mnorthsouthfill3' => 109, 'Mlongdegfill3' => 110, 'Mlongminfill3' => 111, 'Meastwestfill3' => 112, 'Mlatdegfill4' => 113, 'Mlatminfill4' => 114, 'Mnorthsouthfill4' => 115, 'Mlongdegfill4' => 116, 'Mlongminfill4' => 117, 'Meastwestfill4' => 118, 'Mlatdegfill5' => 119, 'Mlatminfill5' => 120, 'Mnorthsouthfill5' => 121, 'Mlongdegfill5' => 122, 'Mlongminfill5' => 123, 'Meastwestfill5' => 124, 'Northernlatitude' => 125, 'Northernlatitudens' => 126, 'Southernlatitude' => 127, 'Southernlatitudens' => 128, 'Westernlongitude' => 129, 'Westernlongitudeew' => 130, 'Easternlongitude' => 131, 'Easternlongitudeew' => 132, 'Centerlat' => 133, 'Centerlong' => 134, 'Otherlanguage' => 135, 'Geography' => 136, 'Geographyref' => 137, 'Hydrography' => 138, 'Hydrographyref' => 139, 'Commentfresh' => 140, 'Reffresh1' => 141, 'Reffresh2' => 142, 'Reffresh3' => 143, 'Freshprimary' => 144, 'Freshsecondary' => 145, 'Freshinto' => 146, 'Infisheriesreported' => 147, 'Infisheriespotential' => 148, 'Inaquareported' => 149, 'Inaquapotential' => 150, 'Exportreported' => 151, 'Exportpotential' => 152, 'Sportreported' => 153, 'Sportpotential' => 154, 'Endemicreported' => 155, 'Endemicpotential' => 156, 'Threatened' => 157, 'Protectedreported' => 158, 'Protectedpotential' => 159, 'Acp' => 160, 'Developed' => 161, 'Marine' => 162, 'Brackish' => 163, 'Marineinto' => 164, 'Marineinfisheriesreported' => 165, 'Marineinfisheriespotential' => 166, 'Marineinaquareported' => 167, 'Marineinaquapotential' => 168, 'Marineexportreported' => 169, 'Marineexportpotential' => 170, 'Marinesportreported' => 171, 'Marinesportpotential' => 172, 'Marineendemicreported' => 173, 'Marineendemicpotential' => 174, 'Marinethreatened' => 175, 'Marineprotectedreported' => 176, 'Marineprotectedpotential' => 177, 'Natfishdb' => 178, 'Natfishdb2' => 179, 'Factbook' => 180, 'Natfishaut' => 181, 'Tradenames' => 182, 'Entered' => 183, 'Dateentered' => 184, 'Modified' => 185, 'Datemodified' => 186, 'Expert' => 187, 'Datechecked' => 188, 'GreekOriginal' => 189, 'Greek' => 190, 'RussianOriginal' => 191, 'Russian' => 192, 'French' => 193, 'Spanish' => 194, 'German' => 195, 'Dutch' => 196, 'Portuguese' => 197, 'Italian' => 198, 'Swedish' => 199, 'Ts' => 200, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('paese' => 0, 'note' => 1, 'cCode' => 2, 'abb' => 3, 'isoCode' => 4, 'iso3alpha' => 5, 'iso2alpha' => 6, 'saupCode' => 7, 'used' => 8, 'capital' => 9, 'latdeg' => 10, 'latmin' => 11, 'northsouth' => 12, 'longdeg' => 13, 'longmin' => 14, 'eastwest' => 15, 'remark' => 16, 'polarboreal' => 17, 'temperate' => 18, 'subtropical' => 19, 'tropical' => 20, 'landlocked' => 21, 'geographicarea' => 22, 'region' => 23, 'continent' => 24, 'areacodeinland' => 25, 'faoareainland' => 26, 'areacodemarinei' => 27, 'faoareamarinei' => 28, 'areacodemarineii' => 29, 'faoareamarineii' => 30, 'areacodemarineiii' => 31, 'faoareamarineiii' => 32, 'areacodemarineiv' => 33, 'faoareamarineiv' => 34, 'areacodemarinev' => 35, 'faoareamarinev' => 36, 'population' => 37, 'populationyear' => 38, 'populationrate' => 39, 'populationref' => 40, 'coastalpopulation' => 41, 'coastpopref' => 42, 'area' => 43, 'coastline' => 44, 'coastlineref' => 45, 'shelfarea' => 46, 'shelfref' => 47, 'eecarea' => 48, 'eezref' => 49, 'language' => 50, 'currency' => 51, 'marinecount' => 52, 'marinefamcount' => 53, 'completemarine' => 54, 'marinelit' => 55, 'marinefamlit' => 56, 'checkmarineref' => 57, 'marineflag' => 58, 'freshwatercount' => 59, 'freshfamcount' => 60, 'completefresh' => 61, 'freshwaterlit' => 62, 'freshfamlit' => 63, 'checkfreshref' => 64, 'freshflag' => 65, 'totalcount' => 66, 'totalfamcount' => 67, 'totalcomplete' => 68, 'totallit' => 69, 'totalfamlit' => 70, 'totalref' => 71, 'lastupdate' => 72, 'morphcountfresh' => 73, 'occurcountfresh' => 74, 'piccountfresh' => 75, 'growthcountfresh' => 76, 'foodcountfresh' => 77, 'dietcountfresh' => 78, 'reproductioncountfresh' => 79, 'spawningcountfresh' => 80, 'morphcountmarine' => 81, 'occurcountmarine' => 82, 'piccountmarine' => 83, 'growthcountmarine' => 84, 'foodcountmarine' => 85, 'dietcountmarine' => 86, 'reproductioncountmarine' => 87, 'spawningcountmarine' => 88, 'latdegfill' => 89, 'latminfill' => 90, 'northsouthfill' => 91, 'longdegfill' => 92, 'longminfill' => 93, 'eastwestfill' => 94, 'mlatdegfill' => 95, 'mlatminfill' => 96, 'mnorthsouthfill' => 97, 'mlongdegfill' => 98, 'mlongminfill' => 99, 'meastwestfill' => 100, 'mlatdegfill2' => 101, 'mlatminfill2' => 102, 'mnorthsouthfill2' => 103, 'mlongdegfill2' => 104, 'mlongminfill2' => 105, 'meastwestfill2' => 106, 'mlatdegfill3' => 107, 'mlatminfill3' => 108, 'mnorthsouthfill3' => 109, 'mlongdegfill3' => 110, 'mlongminfill3' => 111, 'meastwestfill3' => 112, 'mlatdegfill4' => 113, 'mlatminfill4' => 114, 'mnorthsouthfill4' => 115, 'mlongdegfill4' => 116, 'mlongminfill4' => 117, 'meastwestfill4' => 118, 'mlatdegfill5' => 119, 'mlatminfill5' => 120, 'mnorthsouthfill5' => 121, 'mlongdegfill5' => 122, 'mlongminfill5' => 123, 'meastwestfill5' => 124, 'northernlatitude' => 125, 'northernlatitudens' => 126, 'southernlatitude' => 127, 'southernlatitudens' => 128, 'westernlongitude' => 129, 'westernlongitudeew' => 130, 'easternlongitude' => 131, 'easternlongitudeew' => 132, 'centerlat' => 133, 'centerlong' => 134, 'otherlanguage' => 135, 'geography' => 136, 'geographyref' => 137, 'hydrography' => 138, 'hydrographyref' => 139, 'commentfresh' => 140, 'reffresh1' => 141, 'reffresh2' => 142, 'reffresh3' => 143, 'freshprimary' => 144, 'freshsecondary' => 145, 'freshinto' => 146, 'infisheriesreported' => 147, 'infisheriespotential' => 148, 'inaquareported' => 149, 'inaquapotential' => 150, 'exportreported' => 151, 'exportpotential' => 152, 'sportreported' => 153, 'sportpotential' => 154, 'endemicreported' => 155, 'endemicpotential' => 156, 'threatened' => 157, 'protectedreported' => 158, 'protectedpotential' => 159, 'acp' => 160, 'developed' => 161, 'marine' => 162, 'brackish' => 163, 'marineinto' => 164, 'marineinfisheriesreported' => 165, 'marineinfisheriespotential' => 166, 'marineinaquareported' => 167, 'marineinaquapotential' => 168, 'marineexportreported' => 169, 'marineexportpotential' => 170, 'marinesportreported' => 171, 'marinesportpotential' => 172, 'marineendemicreported' => 173, 'marineendemicpotential' => 174, 'marinethreatened' => 175, 'marineprotectedreported' => 176, 'marineprotectedpotential' => 177, 'natfishdb' => 178, 'natfishdb2' => 179, 'factbook' => 180, 'natfishaut' => 181, 'tradenames' => 182, 'entered' => 183, 'dateentered' => 184, 'modified' => 185, 'datemodified' => 186, 'expert' => 187, 'datechecked' => 188, 'greekOriginal' => 189, 'greek' => 190, 'russianOriginal' => 191, 'russian' => 192, 'french' => 193, 'spanish' => 194, 'german' => 195, 'dutch' => 196, 'portuguese' => 197, 'italian' => 198, 'swedish' => 199, 'ts' => 200, ),
        BasePeer::TYPE_COLNAME => array (CountrefPeer::PAESE => 0, CountrefPeer::NOTE => 1, CountrefPeer::C_CODE => 2, CountrefPeer::ABB => 3, CountrefPeer::ISO_CODE => 4, CountrefPeer::ISO3ALPHA => 5, CountrefPeer::ISO2ALPHA => 6, CountrefPeer::SAUP_CODE => 7, CountrefPeer::USED => 8, CountrefPeer::CAPITAL => 9, CountrefPeer::LATDEG => 10, CountrefPeer::LATMIN => 11, CountrefPeer::NORTHSOUTH => 12, CountrefPeer::LONGDEG => 13, CountrefPeer::LONGMIN => 14, CountrefPeer::EASTWEST => 15, CountrefPeer::REMARK => 16, CountrefPeer::POLARBOREAL => 17, CountrefPeer::TEMPERATE => 18, CountrefPeer::SUBTROPICAL => 19, CountrefPeer::TROPICAL => 20, CountrefPeer::LANDLOCKED => 21, CountrefPeer::GEOGRAPHICAREA => 22, CountrefPeer::REGION => 23, CountrefPeer::CONTINENT => 24, CountrefPeer::AREACODEINLAND => 25, CountrefPeer::FAOAREAINLAND => 26, CountrefPeer::AREACODEMARINEI => 27, CountrefPeer::FAOAREAMARINEI => 28, CountrefPeer::AREACODEMARINEII => 29, CountrefPeer::FAOAREAMARINEII => 30, CountrefPeer::AREACODEMARINEIII => 31, CountrefPeer::FAOAREAMARINEIII => 32, CountrefPeer::AREACODEMARINEIV => 33, CountrefPeer::FAOAREAMARINEIV => 34, CountrefPeer::AREACODEMARINEV => 35, CountrefPeer::FAOAREAMARINEV => 36, CountrefPeer::POPULATION => 37, CountrefPeer::POPULATIONYEAR => 38, CountrefPeer::POPULATIONRATE => 39, CountrefPeer::POPULATIONREF => 40, CountrefPeer::COASTALPOPULATION => 41, CountrefPeer::COASTPOPREF => 42, CountrefPeer::AREA => 43, CountrefPeer::COASTLINE => 44, CountrefPeer::COASTLINEREF => 45, CountrefPeer::SHELFAREA => 46, CountrefPeer::SHELFREF => 47, CountrefPeer::EECAREA => 48, CountrefPeer::EEZREF => 49, CountrefPeer::LANGUAGE => 50, CountrefPeer::CURRENCY => 51, CountrefPeer::MARINECOUNT => 52, CountrefPeer::MARINEFAMCOUNT => 53, CountrefPeer::COMPLETEMARINE => 54, CountrefPeer::MARINELIT => 55, CountrefPeer::MARINEFAMLIT => 56, CountrefPeer::CHECKMARINEREF => 57, CountrefPeer::MARINEFLAG => 58, CountrefPeer::FRESHWATERCOUNT => 59, CountrefPeer::FRESHFAMCOUNT => 60, CountrefPeer::COMPLETEFRESH => 61, CountrefPeer::FRESHWATERLIT => 62, CountrefPeer::FRESHFAMLIT => 63, CountrefPeer::CHECKFRESHREF => 64, CountrefPeer::FRESHFLAG => 65, CountrefPeer::TOTALCOUNT => 66, CountrefPeer::TOTALFAMCOUNT => 67, CountrefPeer::TOTALCOMPLETE => 68, CountrefPeer::TOTALLIT => 69, CountrefPeer::TOTALFAMLIT => 70, CountrefPeer::TOTALREF => 71, CountrefPeer::LASTUPDATE => 72, CountrefPeer::MORPHCOUNTFRESH => 73, CountrefPeer::OCCURCOUNTFRESH => 74, CountrefPeer::PICCOUNTFRESH => 75, CountrefPeer::GROWTHCOUNTFRESH => 76, CountrefPeer::FOODCOUNTFRESH => 77, CountrefPeer::DIETCOUNTFRESH => 78, CountrefPeer::REPRODUCTIONCOUNTFRESH => 79, CountrefPeer::SPAWNINGCOUNTFRESH => 80, CountrefPeer::MORPHCOUNTMARINE => 81, CountrefPeer::OCCURCOUNTMARINE => 82, CountrefPeer::PICCOUNTMARINE => 83, CountrefPeer::GROWTHCOUNTMARINE => 84, CountrefPeer::FOODCOUNTMARINE => 85, CountrefPeer::DIETCOUNTMARINE => 86, CountrefPeer::REPRODUCTIONCOUNTMARINE => 87, CountrefPeer::SPAWNINGCOUNTMARINE => 88, CountrefPeer::LATDEGFILL => 89, CountrefPeer::LATMINFILL => 90, CountrefPeer::NORTHSOUTHFILL => 91, CountrefPeer::LONGDEGFILL => 92, CountrefPeer::LONGMINFILL => 93, CountrefPeer::EASTWESTFILL => 94, CountrefPeer::MLATDEGFILL => 95, CountrefPeer::MLATMINFILL => 96, CountrefPeer::MNORTHSOUTHFILL => 97, CountrefPeer::MLONGDEGFILL => 98, CountrefPeer::MLONGMINFILL => 99, CountrefPeer::MEASTWESTFILL => 100, CountrefPeer::MLATDEGFILL2 => 101, CountrefPeer::MLATMINFILL2 => 102, CountrefPeer::MNORTHSOUTHFILL2 => 103, CountrefPeer::MLONGDEGFILL2 => 104, CountrefPeer::MLONGMINFILL2 => 105, CountrefPeer::MEASTWESTFILL2 => 106, CountrefPeer::MLATDEGFILL3 => 107, CountrefPeer::MLATMINFILL3 => 108, CountrefPeer::MNORTHSOUTHFILL3 => 109, CountrefPeer::MLONGDEGFILL3 => 110, CountrefPeer::MLONGMINFILL3 => 111, CountrefPeer::MEASTWESTFILL3 => 112, CountrefPeer::MLATDEGFILL4 => 113, CountrefPeer::MLATMINFILL4 => 114, CountrefPeer::MNORTHSOUTHFILL4 => 115, CountrefPeer::MLONGDEGFILL4 => 116, CountrefPeer::MLONGMINFILL4 => 117, CountrefPeer::MEASTWESTFILL4 => 118, CountrefPeer::MLATDEGFILL5 => 119, CountrefPeer::MLATMINFILL5 => 120, CountrefPeer::MNORTHSOUTHFILL5 => 121, CountrefPeer::MLONGDEGFILL5 => 122, CountrefPeer::MLONGMINFILL5 => 123, CountrefPeer::MEASTWESTFILL5 => 124, CountrefPeer::NORTHERNLATITUDE => 125, CountrefPeer::NORTHERNLATITUDENS => 126, CountrefPeer::SOUTHERNLATITUDE => 127, CountrefPeer::SOUTHERNLATITUDENS => 128, CountrefPeer::WESTERNLONGITUDE => 129, CountrefPeer::WESTERNLONGITUDEEW => 130, CountrefPeer::EASTERNLONGITUDE => 131, CountrefPeer::EASTERNLONGITUDEEW => 132, CountrefPeer::CENTERLAT => 133, CountrefPeer::CENTERLONG => 134, CountrefPeer::OTHERLANGUAGE => 135, CountrefPeer::GEOGRAPHY => 136, CountrefPeer::GEOGRAPHYREF => 137, CountrefPeer::HYDROGRAPHY => 138, CountrefPeer::HYDROGRAPHYREF => 139, CountrefPeer::COMMENTFRESH => 140, CountrefPeer::REFFRESH1 => 141, CountrefPeer::REFFRESH2 => 142, CountrefPeer::REFFRESH3 => 143, CountrefPeer::FRESHPRIMARY => 144, CountrefPeer::FRESHSECONDARY => 145, CountrefPeer::FRESHINTO => 146, CountrefPeer::INFISHERIESREPORTED => 147, CountrefPeer::INFISHERIESPOTENTIAL => 148, CountrefPeer::INAQUAREPORTED => 149, CountrefPeer::INAQUAPOTENTIAL => 150, CountrefPeer::EXPORTREPORTED => 151, CountrefPeer::EXPORTPOTENTIAL => 152, CountrefPeer::SPORTREPORTED => 153, CountrefPeer::SPORTPOTENTIAL => 154, CountrefPeer::ENDEMICREPORTED => 155, CountrefPeer::ENDEMICPOTENTIAL => 156, CountrefPeer::THREATENED => 157, CountrefPeer::PROTECTEDREPORTED => 158, CountrefPeer::PROTECTEDPOTENTIAL => 159, CountrefPeer::ACP => 160, CountrefPeer::DEVELOPED => 161, CountrefPeer::MARINE => 162, CountrefPeer::BRACKISH => 163, CountrefPeer::MARINEINTO => 164, CountrefPeer::MARINEINFISHERIESREPORTED => 165, CountrefPeer::MARINEINFISHERIESPOTENTIAL => 166, CountrefPeer::MARINEINAQUAREPORTED => 167, CountrefPeer::MARINEINAQUAPOTENTIAL => 168, CountrefPeer::MARINEEXPORTREPORTED => 169, CountrefPeer::MARINEEXPORTPOTENTIAL => 170, CountrefPeer::MARINESPORTREPORTED => 171, CountrefPeer::MARINESPORTPOTENTIAL => 172, CountrefPeer::MARINEENDEMICREPORTED => 173, CountrefPeer::MARINEENDEMICPOTENTIAL => 174, CountrefPeer::MARINETHREATENED => 175, CountrefPeer::MARINEPROTECTEDREPORTED => 176, CountrefPeer::MARINEPROTECTEDPOTENTIAL => 177, CountrefPeer::NATFISHDB => 178, CountrefPeer::NATFISHDB2 => 179, CountrefPeer::FACTBOOK => 180, CountrefPeer::NATFISHAUT => 181, CountrefPeer::TRADENAMES => 182, CountrefPeer::ENTERED => 183, CountrefPeer::DATEENTERED => 184, CountrefPeer::MODIFIED => 185, CountrefPeer::DATEMODIFIED => 186, CountrefPeer::EXPERT => 187, CountrefPeer::DATECHECKED => 188, CountrefPeer::GREEK_ORIGINAL => 189, CountrefPeer::GREEK => 190, CountrefPeer::RUSSIAN_ORIGINAL => 191, CountrefPeer::RUSSIAN => 192, CountrefPeer::FRENCH => 193, CountrefPeer::SPANISH => 194, CountrefPeer::GERMAN => 195, CountrefPeer::DUTCH => 196, CountrefPeer::PORTUGUESE => 197, CountrefPeer::ITALIAN => 198, CountrefPeer::SWEDISH => 199, CountrefPeer::TS => 200, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PAESE' => 0, 'NOTE' => 1, 'C_CODE' => 2, 'ABB' => 3, 'ISO_CODE' => 4, 'ISO3ALPHA' => 5, 'ISO2ALPHA' => 6, 'SAUP_CODE' => 7, 'USED' => 8, 'CAPITAL' => 9, 'LATDEG' => 10, 'LATMIN' => 11, 'NORTHSOUTH' => 12, 'LONGDEG' => 13, 'LONGMIN' => 14, 'EASTWEST' => 15, 'REMARK' => 16, 'POLARBOREAL' => 17, 'TEMPERATE' => 18, 'SUBTROPICAL' => 19, 'TROPICAL' => 20, 'LANDLOCKED' => 21, 'GEOGRAPHICAREA' => 22, 'REGION' => 23, 'CONTINENT' => 24, 'AREACODEINLAND' => 25, 'FAOAREAINLAND' => 26, 'AREACODEMARINEI' => 27, 'FAOAREAMARINEI' => 28, 'AREACODEMARINEII' => 29, 'FAOAREAMARINEII' => 30, 'AREACODEMARINEIII' => 31, 'FAOAREAMARINEIII' => 32, 'AREACODEMARINEIV' => 33, 'FAOAREAMARINEIV' => 34, 'AREACODEMARINEV' => 35, 'FAOAREAMARINEV' => 36, 'POPULATION' => 37, 'POPULATIONYEAR' => 38, 'POPULATIONRATE' => 39, 'POPULATIONREF' => 40, 'COASTALPOPULATION' => 41, 'COASTPOPREF' => 42, 'AREA' => 43, 'COASTLINE' => 44, 'COASTLINEREF' => 45, 'SHELFAREA' => 46, 'SHELFREF' => 47, 'EECAREA' => 48, 'EEZREF' => 49, 'LANGUAGE' => 50, 'CURRENCY' => 51, 'MARINECOUNT' => 52, 'MARINEFAMCOUNT' => 53, 'COMPLETEMARINE' => 54, 'MARINELIT' => 55, 'MARINEFAMLIT' => 56, 'CHECKMARINEREF' => 57, 'MARINEFLAG' => 58, 'FRESHWATERCOUNT' => 59, 'FRESHFAMCOUNT' => 60, 'COMPLETEFRESH' => 61, 'FRESHWATERLIT' => 62, 'FRESHFAMLIT' => 63, 'CHECKFRESHREF' => 64, 'FRESHFLAG' => 65, 'TOTALCOUNT' => 66, 'TOTALFAMCOUNT' => 67, 'TOTALCOMPLETE' => 68, 'TOTALLIT' => 69, 'TOTALFAMLIT' => 70, 'TOTALREF' => 71, 'LASTUPDATE' => 72, 'MORPHCOUNTFRESH' => 73, 'OCCURCOUNTFRESH' => 74, 'PICCOUNTFRESH' => 75, 'GROWTHCOUNTFRESH' => 76, 'FOODCOUNTFRESH' => 77, 'DIETCOUNTFRESH' => 78, 'REPRODUCTIONCOUNTFRESH' => 79, 'SPAWNINGCOUNTFRESH' => 80, 'MORPHCOUNTMARINE' => 81, 'OCCURCOUNTMARINE' => 82, 'PICCOUNTMARINE' => 83, 'GROWTHCOUNTMARINE' => 84, 'FOODCOUNTMARINE' => 85, 'DIETCOUNTMARINE' => 86, 'REPRODUCTIONCOUNTMARINE' => 87, 'SPAWNINGCOUNTMARINE' => 88, 'LATDEGFILL' => 89, 'LATMINFILL' => 90, 'NORTHSOUTHFILL' => 91, 'LONGDEGFILL' => 92, 'LONGMINFILL' => 93, 'EASTWESTFILL' => 94, 'MLATDEGFILL' => 95, 'MLATMINFILL' => 96, 'MNORTHSOUTHFILL' => 97, 'MLONGDEGFILL' => 98, 'MLONGMINFILL' => 99, 'MEASTWESTFILL' => 100, 'MLATDEGFILL2' => 101, 'MLATMINFILL2' => 102, 'MNORTHSOUTHFILL2' => 103, 'MLONGDEGFILL2' => 104, 'MLONGMINFILL2' => 105, 'MEASTWESTFILL2' => 106, 'MLATDEGFILL3' => 107, 'MLATMINFILL3' => 108, 'MNORTHSOUTHFILL3' => 109, 'MLONGDEGFILL3' => 110, 'MLONGMINFILL3' => 111, 'MEASTWESTFILL3' => 112, 'MLATDEGFILL4' => 113, 'MLATMINFILL4' => 114, 'MNORTHSOUTHFILL4' => 115, 'MLONGDEGFILL4' => 116, 'MLONGMINFILL4' => 117, 'MEASTWESTFILL4' => 118, 'MLATDEGFILL5' => 119, 'MLATMINFILL5' => 120, 'MNORTHSOUTHFILL5' => 121, 'MLONGDEGFILL5' => 122, 'MLONGMINFILL5' => 123, 'MEASTWESTFILL5' => 124, 'NORTHERNLATITUDE' => 125, 'NORTHERNLATITUDENS' => 126, 'SOUTHERNLATITUDE' => 127, 'SOUTHERNLATITUDENS' => 128, 'WESTERNLONGITUDE' => 129, 'WESTERNLONGITUDEEW' => 130, 'EASTERNLONGITUDE' => 131, 'EASTERNLONGITUDEEW' => 132, 'CENTERLAT' => 133, 'CENTERLONG' => 134, 'OTHERLANGUAGE' => 135, 'GEOGRAPHY' => 136, 'GEOGRAPHYREF' => 137, 'HYDROGRAPHY' => 138, 'HYDROGRAPHYREF' => 139, 'COMMENTFRESH' => 140, 'REFFRESH1' => 141, 'REFFRESH2' => 142, 'REFFRESH3' => 143, 'FRESHPRIMARY' => 144, 'FRESHSECONDARY' => 145, 'FRESHINTO' => 146, 'INFISHERIESREPORTED' => 147, 'INFISHERIESPOTENTIAL' => 148, 'INAQUAREPORTED' => 149, 'INAQUAPOTENTIAL' => 150, 'EXPORTREPORTED' => 151, 'EXPORTPOTENTIAL' => 152, 'SPORTREPORTED' => 153, 'SPORTPOTENTIAL' => 154, 'ENDEMICREPORTED' => 155, 'ENDEMICPOTENTIAL' => 156, 'THREATENED' => 157, 'PROTECTEDREPORTED' => 158, 'PROTECTEDPOTENTIAL' => 159, 'ACP' => 160, 'DEVELOPED' => 161, 'MARINE' => 162, 'BRACKISH' => 163, 'MARINEINTO' => 164, 'MARINEINFISHERIESREPORTED' => 165, 'MARINEINFISHERIESPOTENTIAL' => 166, 'MARINEINAQUAREPORTED' => 167, 'MARINEINAQUAPOTENTIAL' => 168, 'MARINEEXPORTREPORTED' => 169, 'MARINEEXPORTPOTENTIAL' => 170, 'MARINESPORTREPORTED' => 171, 'MARINESPORTPOTENTIAL' => 172, 'MARINEENDEMICREPORTED' => 173, 'MARINEENDEMICPOTENTIAL' => 174, 'MARINETHREATENED' => 175, 'MARINEPROTECTEDREPORTED' => 176, 'MARINEPROTECTEDPOTENTIAL' => 177, 'NATFISHDB' => 178, 'NATFISHDB2' => 179, 'FACTBOOK' => 180, 'NATFISHAUT' => 181, 'TRADENAMES' => 182, 'ENTERED' => 183, 'DATEENTERED' => 184, 'MODIFIED' => 185, 'DATEMODIFIED' => 186, 'EXPERT' => 187, 'DATECHECKED' => 188, 'GREEK_ORIGINAL' => 189, 'GREEK' => 190, 'RUSSIAN_ORIGINAL' => 191, 'RUSSIAN' => 192, 'FRENCH' => 193, 'SPANISH' => 194, 'GERMAN' => 195, 'DUTCH' => 196, 'PORTUGUESE' => 197, 'ITALIAN' => 198, 'SWEDISH' => 199, 'TS' => 200, ),
        BasePeer::TYPE_FIELDNAME => array ('PAESE' => 0, 'Note' => 1, 'C_Code' => 2, 'ABB' => 3, 'ISO_Code' => 4, 'ISO3Alpha' => 5, 'ISO2Alpha' => 6, 'SAUP_Code' => 7, 'Used' => 8, 'Capital' => 9, 'LatDeg' => 10, 'LatMin' => 11, 'NorthSouth' => 12, 'LongDeg' => 13, 'LongMin' => 14, 'EastWest' => 15, 'Remark' => 16, 'PolarBoreal' => 17, 'Temperate' => 18, 'Subtropical' => 19, 'Tropical' => 20, 'Landlocked' => 21, 'GeographicArea' => 22, 'Region' => 23, 'Continent' => 24, 'AreaCodeInland' => 25, 'FAOAreaInland' => 26, 'AreaCodeMarineI' => 27, 'FAOAreaMarineI' => 28, 'AreaCodeMarineII' => 29, 'FAOAreaMarineII' => 30, 'AreaCodeMarineIII' => 31, 'FAOAreaMarineIII' => 32, 'AreaCodeMarineIV' => 33, 'FAOAreaMarineIV' => 34, 'AreaCodeMarineV' => 35, 'FAOAreaMarineV' => 36, 'Population' => 37, 'PopulationYear' => 38, 'PopulationRate' => 39, 'PopulationRef' => 40, 'CoastalPopulation' => 41, 'CoastPopRef' => 42, 'Area' => 43, 'Coastline' => 44, 'CoastlineRef' => 45, 'ShelfArea' => 46, 'ShelfRef' => 47, 'EECarea' => 48, 'EEZRef' => 49, 'Language' => 50, 'Currency' => 51, 'MarineCount' => 52, 'MarineFamCount' => 53, 'CompleteMarine' => 54, 'MarineLit' => 55, 'MarineFamLit' => 56, 'CheckMarineRef' => 57, 'MarineFlag' => 58, 'FreshwaterCount' => 59, 'FreshFamCount' => 60, 'CompleteFresh' => 61, 'FreshwaterLit' => 62, 'FreshFamLit' => 63, 'CheckFreshRef' => 64, 'FreshFlag' => 65, 'TotalCount' => 66, 'TotalFamCount' => 67, 'TotalComplete' => 68, 'TotalLit' => 69, 'TotalFamLit' => 70, 'TotalRef' => 71, 'LastUpdate' => 72, 'MorphCountFresh' => 73, 'OccurCountFresh' => 74, 'PicCountFresh' => 75, 'GrowthCountFresh' => 76, 'FoodCountFresh' => 77, 'DietCountFresh' => 78, 'ReproductionCountFresh' => 79, 'SpawningCountFresh' => 80, 'MorphCountMarine' => 81, 'OccurCountMarine' => 82, 'PicCountMarine' => 83, 'GrowthCountMarine' => 84, 'FoodCountMarine' => 85, 'DietCountMarine' => 86, 'ReproductionCountMarine' => 87, 'SpawningCountMarine' => 88, 'LatDegFill' => 89, 'LatMinFill' => 90, 'NorthSouthFill' => 91, 'LongDegFill' => 92, 'LongMinFill' => 93, 'EastWestFill' => 94, 'MLatDegFill' => 95, 'MLatMinFill' => 96, 'MNorthSouthFill' => 97, 'MLongDegFill' => 98, 'MLongMinFill' => 99, 'MEastWestFill' => 100, 'MLatDegFill2' => 101, 'MLatMinFill2' => 102, 'MNorthSouthFill2' => 103, 'MLongDegFill2' => 104, 'MLongMinFill2' => 105, 'MEastWestFill2' => 106, 'MLatDegFill3' => 107, 'MLatMinFill3' => 108, 'MNorthSouthFill3' => 109, 'MLongDegFill3' => 110, 'MLongMinFill3' => 111, 'MEastWestFill3' => 112, 'MLatDegFill4' => 113, 'MLatMinFill4' => 114, 'MNorthSouthFill4' => 115, 'MLongDegFill4' => 116, 'MLongMinFill4' => 117, 'MEastWestFill4' => 118, 'MLatDegFill5' => 119, 'MLatMinFill5' => 120, 'MNorthSouthFill5' => 121, 'MLongDegFill5' => 122, 'MLongMinFill5' => 123, 'MEastWestFill5' => 124, 'NorthernLatitude' => 125, 'NorthernLatitudeNS' => 126, 'SouthernLatitude' => 127, 'SouthernLatitudeNS' => 128, 'WesternLongitude' => 129, 'WesternLongitudeEW' => 130, 'EasternLongitude' => 131, 'EasternLongitudeEW' => 132, 'CenterLat' => 133, 'CenterLong' => 134, 'OtherLanguage' => 135, 'Geography' => 136, 'GeographyRef' => 137, 'Hydrography' => 138, 'HydrographyRef' => 139, 'CommentFresh' => 140, 'RefFresh1' => 141, 'RefFresh2' => 142, 'RefFresh3' => 143, 'FreshPrimary' => 144, 'FreshSecondary' => 145, 'FreshInto' => 146, 'InFisheriesReported' => 147, 'InFisheriesPotential' => 148, 'InAquaReported' => 149, 'InAquaPotential' => 150, 'ExportReported' => 151, 'ExportPotential' => 152, 'SportReported' => 153, 'SportPotential' => 154, 'EndemicReported' => 155, 'EndemicPotential' => 156, 'Threatened' => 157, 'ProtectedReported' => 158, 'ProtectedPotential' => 159, 'ACP' => 160, 'Developed' => 161, 'Marine' => 162, 'Brackish' => 163, 'MarineInto' => 164, 'MarineInFisheriesReported' => 165, 'MarineInFisheriesPotential' => 166, 'MarineInAquaReported' => 167, 'MarineInAquaPotential' => 168, 'MarineExportReported' => 169, 'MarineExportPotential' => 170, 'MarineSportReported' => 171, 'MarineSportPotential' => 172, 'MarineEndemicReported' => 173, 'MarineEndemicPotential' => 174, 'MarineThreatened' => 175, 'MarineProtectedReported' => 176, 'MarineProtectedPotential' => 177, 'NatFishDB' => 178, 'NatFishDB2' => 179, 'Factbook' => 180, 'NatFishAut' => 181, 'TradeNames' => 182, 'Entered' => 183, 'DateEntered' => 184, 'Modified' => 185, 'DateModified' => 186, 'Expert' => 187, 'DateChecked' => 188, 'Greek_original' => 189, 'Greek' => 190, 'RUSSIAN_original' => 191, 'RUSSIAN' => 192, 'FRENCH' => 193, 'SPANISH' => 194, 'GERMAN' => 195, 'DUTCH' => 196, 'PORTUGUESE' => 197, 'ITALIAN' => 198, 'SWEDISH' => 199, 'TS' => 200, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = CountrefPeer::getFieldNames($toType);
        $key = isset(CountrefPeer::$fieldKeys[$fromType][$name]) ? CountrefPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CountrefPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, CountrefPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CountrefPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. CountrefPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CountrefPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CountrefPeer::PAESE);
            $criteria->addSelectColumn(CountrefPeer::NOTE);
            $criteria->addSelectColumn(CountrefPeer::C_CODE);
            $criteria->addSelectColumn(CountrefPeer::ABB);
            $criteria->addSelectColumn(CountrefPeer::ISO_CODE);
            $criteria->addSelectColumn(CountrefPeer::ISO3ALPHA);
            $criteria->addSelectColumn(CountrefPeer::ISO2ALPHA);
            $criteria->addSelectColumn(CountrefPeer::SAUP_CODE);
            $criteria->addSelectColumn(CountrefPeer::USED);
            $criteria->addSelectColumn(CountrefPeer::CAPITAL);
            $criteria->addSelectColumn(CountrefPeer::LATDEG);
            $criteria->addSelectColumn(CountrefPeer::LATMIN);
            $criteria->addSelectColumn(CountrefPeer::NORTHSOUTH);
            $criteria->addSelectColumn(CountrefPeer::LONGDEG);
            $criteria->addSelectColumn(CountrefPeer::LONGMIN);
            $criteria->addSelectColumn(CountrefPeer::EASTWEST);
            $criteria->addSelectColumn(CountrefPeer::REMARK);
            $criteria->addSelectColumn(CountrefPeer::POLARBOREAL);
            $criteria->addSelectColumn(CountrefPeer::TEMPERATE);
            $criteria->addSelectColumn(CountrefPeer::SUBTROPICAL);
            $criteria->addSelectColumn(CountrefPeer::TROPICAL);
            $criteria->addSelectColumn(CountrefPeer::LANDLOCKED);
            $criteria->addSelectColumn(CountrefPeer::GEOGRAPHICAREA);
            $criteria->addSelectColumn(CountrefPeer::REGION);
            $criteria->addSelectColumn(CountrefPeer::CONTINENT);
            $criteria->addSelectColumn(CountrefPeer::AREACODEINLAND);
            $criteria->addSelectColumn(CountrefPeer::FAOAREAINLAND);
            $criteria->addSelectColumn(CountrefPeer::AREACODEMARINEI);
            $criteria->addSelectColumn(CountrefPeer::FAOAREAMARINEI);
            $criteria->addSelectColumn(CountrefPeer::AREACODEMARINEII);
            $criteria->addSelectColumn(CountrefPeer::FAOAREAMARINEII);
            $criteria->addSelectColumn(CountrefPeer::AREACODEMARINEIII);
            $criteria->addSelectColumn(CountrefPeer::FAOAREAMARINEIII);
            $criteria->addSelectColumn(CountrefPeer::AREACODEMARINEIV);
            $criteria->addSelectColumn(CountrefPeer::FAOAREAMARINEIV);
            $criteria->addSelectColumn(CountrefPeer::AREACODEMARINEV);
            $criteria->addSelectColumn(CountrefPeer::FAOAREAMARINEV);
            $criteria->addSelectColumn(CountrefPeer::POPULATION);
            $criteria->addSelectColumn(CountrefPeer::POPULATIONYEAR);
            $criteria->addSelectColumn(CountrefPeer::POPULATIONRATE);
            $criteria->addSelectColumn(CountrefPeer::POPULATIONREF);
            $criteria->addSelectColumn(CountrefPeer::COASTALPOPULATION);
            $criteria->addSelectColumn(CountrefPeer::COASTPOPREF);
            $criteria->addSelectColumn(CountrefPeer::AREA);
            $criteria->addSelectColumn(CountrefPeer::COASTLINE);
            $criteria->addSelectColumn(CountrefPeer::COASTLINEREF);
            $criteria->addSelectColumn(CountrefPeer::SHELFAREA);
            $criteria->addSelectColumn(CountrefPeer::SHELFREF);
            $criteria->addSelectColumn(CountrefPeer::EECAREA);
            $criteria->addSelectColumn(CountrefPeer::EEZREF);
            $criteria->addSelectColumn(CountrefPeer::LANGUAGE);
            $criteria->addSelectColumn(CountrefPeer::CURRENCY);
            $criteria->addSelectColumn(CountrefPeer::MARINECOUNT);
            $criteria->addSelectColumn(CountrefPeer::MARINEFAMCOUNT);
            $criteria->addSelectColumn(CountrefPeer::COMPLETEMARINE);
            $criteria->addSelectColumn(CountrefPeer::MARINELIT);
            $criteria->addSelectColumn(CountrefPeer::MARINEFAMLIT);
            $criteria->addSelectColumn(CountrefPeer::CHECKMARINEREF);
            $criteria->addSelectColumn(CountrefPeer::MARINEFLAG);
            $criteria->addSelectColumn(CountrefPeer::FRESHWATERCOUNT);
            $criteria->addSelectColumn(CountrefPeer::FRESHFAMCOUNT);
            $criteria->addSelectColumn(CountrefPeer::COMPLETEFRESH);
            $criteria->addSelectColumn(CountrefPeer::FRESHWATERLIT);
            $criteria->addSelectColumn(CountrefPeer::FRESHFAMLIT);
            $criteria->addSelectColumn(CountrefPeer::CHECKFRESHREF);
            $criteria->addSelectColumn(CountrefPeer::FRESHFLAG);
            $criteria->addSelectColumn(CountrefPeer::TOTALCOUNT);
            $criteria->addSelectColumn(CountrefPeer::TOTALFAMCOUNT);
            $criteria->addSelectColumn(CountrefPeer::TOTALCOMPLETE);
            $criteria->addSelectColumn(CountrefPeer::TOTALLIT);
            $criteria->addSelectColumn(CountrefPeer::TOTALFAMLIT);
            $criteria->addSelectColumn(CountrefPeer::TOTALREF);
            $criteria->addSelectColumn(CountrefPeer::LASTUPDATE);
            $criteria->addSelectColumn(CountrefPeer::MORPHCOUNTFRESH);
            $criteria->addSelectColumn(CountrefPeer::OCCURCOUNTFRESH);
            $criteria->addSelectColumn(CountrefPeer::PICCOUNTFRESH);
            $criteria->addSelectColumn(CountrefPeer::GROWTHCOUNTFRESH);
            $criteria->addSelectColumn(CountrefPeer::FOODCOUNTFRESH);
            $criteria->addSelectColumn(CountrefPeer::DIETCOUNTFRESH);
            $criteria->addSelectColumn(CountrefPeer::REPRODUCTIONCOUNTFRESH);
            $criteria->addSelectColumn(CountrefPeer::SPAWNINGCOUNTFRESH);
            $criteria->addSelectColumn(CountrefPeer::MORPHCOUNTMARINE);
            $criteria->addSelectColumn(CountrefPeer::OCCURCOUNTMARINE);
            $criteria->addSelectColumn(CountrefPeer::PICCOUNTMARINE);
            $criteria->addSelectColumn(CountrefPeer::GROWTHCOUNTMARINE);
            $criteria->addSelectColumn(CountrefPeer::FOODCOUNTMARINE);
            $criteria->addSelectColumn(CountrefPeer::DIETCOUNTMARINE);
            $criteria->addSelectColumn(CountrefPeer::REPRODUCTIONCOUNTMARINE);
            $criteria->addSelectColumn(CountrefPeer::SPAWNINGCOUNTMARINE);
            $criteria->addSelectColumn(CountrefPeer::LATDEGFILL);
            $criteria->addSelectColumn(CountrefPeer::LATMINFILL);
            $criteria->addSelectColumn(CountrefPeer::NORTHSOUTHFILL);
            $criteria->addSelectColumn(CountrefPeer::LONGDEGFILL);
            $criteria->addSelectColumn(CountrefPeer::LONGMINFILL);
            $criteria->addSelectColumn(CountrefPeer::EASTWESTFILL);
            $criteria->addSelectColumn(CountrefPeer::MLATDEGFILL);
            $criteria->addSelectColumn(CountrefPeer::MLATMINFILL);
            $criteria->addSelectColumn(CountrefPeer::MNORTHSOUTHFILL);
            $criteria->addSelectColumn(CountrefPeer::MLONGDEGFILL);
            $criteria->addSelectColumn(CountrefPeer::MLONGMINFILL);
            $criteria->addSelectColumn(CountrefPeer::MEASTWESTFILL);
            $criteria->addSelectColumn(CountrefPeer::MLATDEGFILL2);
            $criteria->addSelectColumn(CountrefPeer::MLATMINFILL2);
            $criteria->addSelectColumn(CountrefPeer::MNORTHSOUTHFILL2);
            $criteria->addSelectColumn(CountrefPeer::MLONGDEGFILL2);
            $criteria->addSelectColumn(CountrefPeer::MLONGMINFILL2);
            $criteria->addSelectColumn(CountrefPeer::MEASTWESTFILL2);
            $criteria->addSelectColumn(CountrefPeer::MLATDEGFILL3);
            $criteria->addSelectColumn(CountrefPeer::MLATMINFILL3);
            $criteria->addSelectColumn(CountrefPeer::MNORTHSOUTHFILL3);
            $criteria->addSelectColumn(CountrefPeer::MLONGDEGFILL3);
            $criteria->addSelectColumn(CountrefPeer::MLONGMINFILL3);
            $criteria->addSelectColumn(CountrefPeer::MEASTWESTFILL3);
            $criteria->addSelectColumn(CountrefPeer::MLATDEGFILL4);
            $criteria->addSelectColumn(CountrefPeer::MLATMINFILL4);
            $criteria->addSelectColumn(CountrefPeer::MNORTHSOUTHFILL4);
            $criteria->addSelectColumn(CountrefPeer::MLONGDEGFILL4);
            $criteria->addSelectColumn(CountrefPeer::MLONGMINFILL4);
            $criteria->addSelectColumn(CountrefPeer::MEASTWESTFILL4);
            $criteria->addSelectColumn(CountrefPeer::MLATDEGFILL5);
            $criteria->addSelectColumn(CountrefPeer::MLATMINFILL5);
            $criteria->addSelectColumn(CountrefPeer::MNORTHSOUTHFILL5);
            $criteria->addSelectColumn(CountrefPeer::MLONGDEGFILL5);
            $criteria->addSelectColumn(CountrefPeer::MLONGMINFILL5);
            $criteria->addSelectColumn(CountrefPeer::MEASTWESTFILL5);
            $criteria->addSelectColumn(CountrefPeer::NORTHERNLATITUDE);
            $criteria->addSelectColumn(CountrefPeer::NORTHERNLATITUDENS);
            $criteria->addSelectColumn(CountrefPeer::SOUTHERNLATITUDE);
            $criteria->addSelectColumn(CountrefPeer::SOUTHERNLATITUDENS);
            $criteria->addSelectColumn(CountrefPeer::WESTERNLONGITUDE);
            $criteria->addSelectColumn(CountrefPeer::WESTERNLONGITUDEEW);
            $criteria->addSelectColumn(CountrefPeer::EASTERNLONGITUDE);
            $criteria->addSelectColumn(CountrefPeer::EASTERNLONGITUDEEW);
            $criteria->addSelectColumn(CountrefPeer::CENTERLAT);
            $criteria->addSelectColumn(CountrefPeer::CENTERLONG);
            $criteria->addSelectColumn(CountrefPeer::OTHERLANGUAGE);
            $criteria->addSelectColumn(CountrefPeer::GEOGRAPHY);
            $criteria->addSelectColumn(CountrefPeer::GEOGRAPHYREF);
            $criteria->addSelectColumn(CountrefPeer::HYDROGRAPHY);
            $criteria->addSelectColumn(CountrefPeer::HYDROGRAPHYREF);
            $criteria->addSelectColumn(CountrefPeer::COMMENTFRESH);
            $criteria->addSelectColumn(CountrefPeer::REFFRESH1);
            $criteria->addSelectColumn(CountrefPeer::REFFRESH2);
            $criteria->addSelectColumn(CountrefPeer::REFFRESH3);
            $criteria->addSelectColumn(CountrefPeer::FRESHPRIMARY);
            $criteria->addSelectColumn(CountrefPeer::FRESHSECONDARY);
            $criteria->addSelectColumn(CountrefPeer::FRESHINTO);
            $criteria->addSelectColumn(CountrefPeer::INFISHERIESREPORTED);
            $criteria->addSelectColumn(CountrefPeer::INFISHERIESPOTENTIAL);
            $criteria->addSelectColumn(CountrefPeer::INAQUAREPORTED);
            $criteria->addSelectColumn(CountrefPeer::INAQUAPOTENTIAL);
            $criteria->addSelectColumn(CountrefPeer::EXPORTREPORTED);
            $criteria->addSelectColumn(CountrefPeer::EXPORTPOTENTIAL);
            $criteria->addSelectColumn(CountrefPeer::SPORTREPORTED);
            $criteria->addSelectColumn(CountrefPeer::SPORTPOTENTIAL);
            $criteria->addSelectColumn(CountrefPeer::ENDEMICREPORTED);
            $criteria->addSelectColumn(CountrefPeer::ENDEMICPOTENTIAL);
            $criteria->addSelectColumn(CountrefPeer::THREATENED);
            $criteria->addSelectColumn(CountrefPeer::PROTECTEDREPORTED);
            $criteria->addSelectColumn(CountrefPeer::PROTECTEDPOTENTIAL);
            $criteria->addSelectColumn(CountrefPeer::ACP);
            $criteria->addSelectColumn(CountrefPeer::DEVELOPED);
            $criteria->addSelectColumn(CountrefPeer::MARINE);
            $criteria->addSelectColumn(CountrefPeer::BRACKISH);
            $criteria->addSelectColumn(CountrefPeer::MARINEINTO);
            $criteria->addSelectColumn(CountrefPeer::MARINEINFISHERIESREPORTED);
            $criteria->addSelectColumn(CountrefPeer::MARINEINFISHERIESPOTENTIAL);
            $criteria->addSelectColumn(CountrefPeer::MARINEINAQUAREPORTED);
            $criteria->addSelectColumn(CountrefPeer::MARINEINAQUAPOTENTIAL);
            $criteria->addSelectColumn(CountrefPeer::MARINEEXPORTREPORTED);
            $criteria->addSelectColumn(CountrefPeer::MARINEEXPORTPOTENTIAL);
            $criteria->addSelectColumn(CountrefPeer::MARINESPORTREPORTED);
            $criteria->addSelectColumn(CountrefPeer::MARINESPORTPOTENTIAL);
            $criteria->addSelectColumn(CountrefPeer::MARINEENDEMICREPORTED);
            $criteria->addSelectColumn(CountrefPeer::MARINEENDEMICPOTENTIAL);
            $criteria->addSelectColumn(CountrefPeer::MARINETHREATENED);
            $criteria->addSelectColumn(CountrefPeer::MARINEPROTECTEDREPORTED);
            $criteria->addSelectColumn(CountrefPeer::MARINEPROTECTEDPOTENTIAL);
            $criteria->addSelectColumn(CountrefPeer::NATFISHDB);
            $criteria->addSelectColumn(CountrefPeer::NATFISHDB2);
            $criteria->addSelectColumn(CountrefPeer::FACTBOOK);
            $criteria->addSelectColumn(CountrefPeer::NATFISHAUT);
            $criteria->addSelectColumn(CountrefPeer::TRADENAMES);
            $criteria->addSelectColumn(CountrefPeer::ENTERED);
            $criteria->addSelectColumn(CountrefPeer::DATEENTERED);
            $criteria->addSelectColumn(CountrefPeer::MODIFIED);
            $criteria->addSelectColumn(CountrefPeer::DATEMODIFIED);
            $criteria->addSelectColumn(CountrefPeer::EXPERT);
            $criteria->addSelectColumn(CountrefPeer::DATECHECKED);
            $criteria->addSelectColumn(CountrefPeer::GREEK_ORIGINAL);
            $criteria->addSelectColumn(CountrefPeer::GREEK);
            $criteria->addSelectColumn(CountrefPeer::RUSSIAN_ORIGINAL);
            $criteria->addSelectColumn(CountrefPeer::RUSSIAN);
            $criteria->addSelectColumn(CountrefPeer::FRENCH);
            $criteria->addSelectColumn(CountrefPeer::SPANISH);
            $criteria->addSelectColumn(CountrefPeer::GERMAN);
            $criteria->addSelectColumn(CountrefPeer::DUTCH);
            $criteria->addSelectColumn(CountrefPeer::PORTUGUESE);
            $criteria->addSelectColumn(CountrefPeer::ITALIAN);
            $criteria->addSelectColumn(CountrefPeer::SWEDISH);
            $criteria->addSelectColumn(CountrefPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.PAESE');
            $criteria->addSelectColumn($alias . '.Note');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.ABB');
            $criteria->addSelectColumn($alias . '.ISO_Code');
            $criteria->addSelectColumn($alias . '.ISO3Alpha');
            $criteria->addSelectColumn($alias . '.ISO2Alpha');
            $criteria->addSelectColumn($alias . '.SAUP_Code');
            $criteria->addSelectColumn($alias . '.Used');
            $criteria->addSelectColumn($alias . '.Capital');
            $criteria->addSelectColumn($alias . '.LatDeg');
            $criteria->addSelectColumn($alias . '.LatMin');
            $criteria->addSelectColumn($alias . '.NorthSouth');
            $criteria->addSelectColumn($alias . '.LongDeg');
            $criteria->addSelectColumn($alias . '.LongMin');
            $criteria->addSelectColumn($alias . '.EastWest');
            $criteria->addSelectColumn($alias . '.Remark');
            $criteria->addSelectColumn($alias . '.PolarBoreal');
            $criteria->addSelectColumn($alias . '.Temperate');
            $criteria->addSelectColumn($alias . '.Subtropical');
            $criteria->addSelectColumn($alias . '.Tropical');
            $criteria->addSelectColumn($alias . '.Landlocked');
            $criteria->addSelectColumn($alias . '.GeographicArea');
            $criteria->addSelectColumn($alias . '.Region');
            $criteria->addSelectColumn($alias . '.Continent');
            $criteria->addSelectColumn($alias . '.AreaCodeInland');
            $criteria->addSelectColumn($alias . '.FAOAreaInland');
            $criteria->addSelectColumn($alias . '.AreaCodeMarineI');
            $criteria->addSelectColumn($alias . '.FAOAreaMarineI');
            $criteria->addSelectColumn($alias . '.AreaCodeMarineII');
            $criteria->addSelectColumn($alias . '.FAOAreaMarineII');
            $criteria->addSelectColumn($alias . '.AreaCodeMarineIII');
            $criteria->addSelectColumn($alias . '.FAOAreaMarineIII');
            $criteria->addSelectColumn($alias . '.AreaCodeMarineIV');
            $criteria->addSelectColumn($alias . '.FAOAreaMarineIV');
            $criteria->addSelectColumn($alias . '.AreaCodeMarineV');
            $criteria->addSelectColumn($alias . '.FAOAreaMarineV');
            $criteria->addSelectColumn($alias . '.Population');
            $criteria->addSelectColumn($alias . '.PopulationYear');
            $criteria->addSelectColumn($alias . '.PopulationRate');
            $criteria->addSelectColumn($alias . '.PopulationRef');
            $criteria->addSelectColumn($alias . '.CoastalPopulation');
            $criteria->addSelectColumn($alias . '.CoastPopRef');
            $criteria->addSelectColumn($alias . '.Area');
            $criteria->addSelectColumn($alias . '.Coastline');
            $criteria->addSelectColumn($alias . '.CoastlineRef');
            $criteria->addSelectColumn($alias . '.ShelfArea');
            $criteria->addSelectColumn($alias . '.ShelfRef');
            $criteria->addSelectColumn($alias . '.EECarea');
            $criteria->addSelectColumn($alias . '.EEZRef');
            $criteria->addSelectColumn($alias . '.Language');
            $criteria->addSelectColumn($alias . '.Currency');
            $criteria->addSelectColumn($alias . '.MarineCount');
            $criteria->addSelectColumn($alias . '.MarineFamCount');
            $criteria->addSelectColumn($alias . '.CompleteMarine');
            $criteria->addSelectColumn($alias . '.MarineLit');
            $criteria->addSelectColumn($alias . '.MarineFamLit');
            $criteria->addSelectColumn($alias . '.CheckMarineRef');
            $criteria->addSelectColumn($alias . '.MarineFlag');
            $criteria->addSelectColumn($alias . '.FreshwaterCount');
            $criteria->addSelectColumn($alias . '.FreshFamCount');
            $criteria->addSelectColumn($alias . '.CompleteFresh');
            $criteria->addSelectColumn($alias . '.FreshwaterLit');
            $criteria->addSelectColumn($alias . '.FreshFamLit');
            $criteria->addSelectColumn($alias . '.CheckFreshRef');
            $criteria->addSelectColumn($alias . '.FreshFlag');
            $criteria->addSelectColumn($alias . '.TotalCount');
            $criteria->addSelectColumn($alias . '.TotalFamCount');
            $criteria->addSelectColumn($alias . '.TotalComplete');
            $criteria->addSelectColumn($alias . '.TotalLit');
            $criteria->addSelectColumn($alias . '.TotalFamLit');
            $criteria->addSelectColumn($alias . '.TotalRef');
            $criteria->addSelectColumn($alias . '.LastUpdate');
            $criteria->addSelectColumn($alias . '.MorphCountFresh');
            $criteria->addSelectColumn($alias . '.OccurCountFresh');
            $criteria->addSelectColumn($alias . '.PicCountFresh');
            $criteria->addSelectColumn($alias . '.GrowthCountFresh');
            $criteria->addSelectColumn($alias . '.FoodCountFresh');
            $criteria->addSelectColumn($alias . '.DietCountFresh');
            $criteria->addSelectColumn($alias . '.ReproductionCountFresh');
            $criteria->addSelectColumn($alias . '.SpawningCountFresh');
            $criteria->addSelectColumn($alias . '.MorphCountMarine');
            $criteria->addSelectColumn($alias . '.OccurCountMarine');
            $criteria->addSelectColumn($alias . '.PicCountMarine');
            $criteria->addSelectColumn($alias . '.GrowthCountMarine');
            $criteria->addSelectColumn($alias . '.FoodCountMarine');
            $criteria->addSelectColumn($alias . '.DietCountMarine');
            $criteria->addSelectColumn($alias . '.ReproductionCountMarine');
            $criteria->addSelectColumn($alias . '.SpawningCountMarine');
            $criteria->addSelectColumn($alias . '.LatDegFill');
            $criteria->addSelectColumn($alias . '.LatMinFill');
            $criteria->addSelectColumn($alias . '.NorthSouthFill');
            $criteria->addSelectColumn($alias . '.LongDegFill');
            $criteria->addSelectColumn($alias . '.LongMinFill');
            $criteria->addSelectColumn($alias . '.EastWestFill');
            $criteria->addSelectColumn($alias . '.MLatDegFill');
            $criteria->addSelectColumn($alias . '.MLatMinFill');
            $criteria->addSelectColumn($alias . '.MNorthSouthFill');
            $criteria->addSelectColumn($alias . '.MLongDegFill');
            $criteria->addSelectColumn($alias . '.MLongMinFill');
            $criteria->addSelectColumn($alias . '.MEastWestFill');
            $criteria->addSelectColumn($alias . '.MLatDegFill2');
            $criteria->addSelectColumn($alias . '.MLatMinFill2');
            $criteria->addSelectColumn($alias . '.MNorthSouthFill2');
            $criteria->addSelectColumn($alias . '.MLongDegFill2');
            $criteria->addSelectColumn($alias . '.MLongMinFill2');
            $criteria->addSelectColumn($alias . '.MEastWestFill2');
            $criteria->addSelectColumn($alias . '.MLatDegFill3');
            $criteria->addSelectColumn($alias . '.MLatMinFill3');
            $criteria->addSelectColumn($alias . '.MNorthSouthFill3');
            $criteria->addSelectColumn($alias . '.MLongDegFill3');
            $criteria->addSelectColumn($alias . '.MLongMinFill3');
            $criteria->addSelectColumn($alias . '.MEastWestFill3');
            $criteria->addSelectColumn($alias . '.MLatDegFill4');
            $criteria->addSelectColumn($alias . '.MLatMinFill4');
            $criteria->addSelectColumn($alias . '.MNorthSouthFill4');
            $criteria->addSelectColumn($alias . '.MLongDegFill4');
            $criteria->addSelectColumn($alias . '.MLongMinFill4');
            $criteria->addSelectColumn($alias . '.MEastWestFill4');
            $criteria->addSelectColumn($alias . '.MLatDegFill5');
            $criteria->addSelectColumn($alias . '.MLatMinFill5');
            $criteria->addSelectColumn($alias . '.MNorthSouthFill5');
            $criteria->addSelectColumn($alias . '.MLongDegFill5');
            $criteria->addSelectColumn($alias . '.MLongMinFill5');
            $criteria->addSelectColumn($alias . '.MEastWestFill5');
            $criteria->addSelectColumn($alias . '.NorthernLatitude');
            $criteria->addSelectColumn($alias . '.NorthernLatitudeNS');
            $criteria->addSelectColumn($alias . '.SouthernLatitude');
            $criteria->addSelectColumn($alias . '.SouthernLatitudeNS');
            $criteria->addSelectColumn($alias . '.WesternLongitude');
            $criteria->addSelectColumn($alias . '.WesternLongitudeEW');
            $criteria->addSelectColumn($alias . '.EasternLongitude');
            $criteria->addSelectColumn($alias . '.EasternLongitudeEW');
            $criteria->addSelectColumn($alias . '.CenterLat');
            $criteria->addSelectColumn($alias . '.CenterLong');
            $criteria->addSelectColumn($alias . '.OtherLanguage');
            $criteria->addSelectColumn($alias . '.Geography');
            $criteria->addSelectColumn($alias . '.GeographyRef');
            $criteria->addSelectColumn($alias . '.Hydrography');
            $criteria->addSelectColumn($alias . '.HydrographyRef');
            $criteria->addSelectColumn($alias . '.CommentFresh');
            $criteria->addSelectColumn($alias . '.RefFresh1');
            $criteria->addSelectColumn($alias . '.RefFresh2');
            $criteria->addSelectColumn($alias . '.RefFresh3');
            $criteria->addSelectColumn($alias . '.FreshPrimary');
            $criteria->addSelectColumn($alias . '.FreshSecondary');
            $criteria->addSelectColumn($alias . '.FreshInto');
            $criteria->addSelectColumn($alias . '.InFisheriesReported');
            $criteria->addSelectColumn($alias . '.InFisheriesPotential');
            $criteria->addSelectColumn($alias . '.InAquaReported');
            $criteria->addSelectColumn($alias . '.InAquaPotential');
            $criteria->addSelectColumn($alias . '.ExportReported');
            $criteria->addSelectColumn($alias . '.ExportPotential');
            $criteria->addSelectColumn($alias . '.SportReported');
            $criteria->addSelectColumn($alias . '.SportPotential');
            $criteria->addSelectColumn($alias . '.EndemicReported');
            $criteria->addSelectColumn($alias . '.EndemicPotential');
            $criteria->addSelectColumn($alias . '.Threatened');
            $criteria->addSelectColumn($alias . '.ProtectedReported');
            $criteria->addSelectColumn($alias . '.ProtectedPotential');
            $criteria->addSelectColumn($alias . '.ACP');
            $criteria->addSelectColumn($alias . '.Developed');
            $criteria->addSelectColumn($alias . '.Marine');
            $criteria->addSelectColumn($alias . '.Brackish');
            $criteria->addSelectColumn($alias . '.MarineInto');
            $criteria->addSelectColumn($alias . '.MarineInFisheriesReported');
            $criteria->addSelectColumn($alias . '.MarineInFisheriesPotential');
            $criteria->addSelectColumn($alias . '.MarineInAquaReported');
            $criteria->addSelectColumn($alias . '.MarineInAquaPotential');
            $criteria->addSelectColumn($alias . '.MarineExportReported');
            $criteria->addSelectColumn($alias . '.MarineExportPotential');
            $criteria->addSelectColumn($alias . '.MarineSportReported');
            $criteria->addSelectColumn($alias . '.MarineSportPotential');
            $criteria->addSelectColumn($alias . '.MarineEndemicReported');
            $criteria->addSelectColumn($alias . '.MarineEndemicPotential');
            $criteria->addSelectColumn($alias . '.MarineThreatened');
            $criteria->addSelectColumn($alias . '.MarineProtectedReported');
            $criteria->addSelectColumn($alias . '.MarineProtectedPotential');
            $criteria->addSelectColumn($alias . '.NatFishDB');
            $criteria->addSelectColumn($alias . '.NatFishDB2');
            $criteria->addSelectColumn($alias . '.Factbook');
            $criteria->addSelectColumn($alias . '.NatFishAut');
            $criteria->addSelectColumn($alias . '.TradeNames');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Greek_original');
            $criteria->addSelectColumn($alias . '.Greek');
            $criteria->addSelectColumn($alias . '.RUSSIAN_original');
            $criteria->addSelectColumn($alias . '.RUSSIAN');
            $criteria->addSelectColumn($alias . '.FRENCH');
            $criteria->addSelectColumn($alias . '.SPANISH');
            $criteria->addSelectColumn($alias . '.GERMAN');
            $criteria->addSelectColumn($alias . '.DUTCH');
            $criteria->addSelectColumn($alias . '.PORTUGUESE');
            $criteria->addSelectColumn($alias . '.ITALIAN');
            $criteria->addSelectColumn($alias . '.SWEDISH');
            $criteria->addSelectColumn($alias . '.TS');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CountrefPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CountrefPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CountrefPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CountrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Countref
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CountrefPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return CountrefPeer::populateObjects(CountrefPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CountrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CountrefPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CountrefPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Countref $obj A Countref object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getCCode();
            } // if key === null
            CountrefPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Countref object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Countref) {
                $key = (string) $value->getCCode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Countref object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CountrefPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Countref Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CountrefPeer::$instances[$key])) {
                return CountrefPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (CountrefPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CountrefPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to countref
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol + 2] === null) {
            return null;
        }

        return (string) $row[$startcol + 2];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (string) $row[$startcol + 2];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = CountrefPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CountrefPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CountrefPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CountrefPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Countref object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CountrefPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CountrefPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CountrefPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CountrefPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CountrefPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(CountrefPeer::DATABASE_NAME)->getTable(CountrefPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCountrefPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCountrefPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CountrefTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return CountrefPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Countref or Criteria object.
     *
     * @param      mixed $values Criteria or Countref object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CountrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Countref object
        }


        // Set the correct dbName
        $criteria->setDbName(CountrefPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Countref or Criteria object.
     *
     * @param      mixed $values Criteria or Countref object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CountrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CountrefPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CountrefPeer::C_CODE);
            $value = $criteria->remove(CountrefPeer::C_CODE);
            if ($value) {
                $selectCriteria->add(CountrefPeer::C_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CountrefPeer::TABLE_NAME);
            }

        } else { // $values is Countref object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CountrefPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the countref table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CountrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CountrefPeer::TABLE_NAME, $con, CountrefPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CountrefPeer::clearInstancePool();
            CountrefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Countref or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Countref object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(CountrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CountrefPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Countref) { // it's a model object
            // invalidate the cache for this single object
            CountrefPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CountrefPeer::DATABASE_NAME);
            $criteria->add(CountrefPeer::C_CODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CountrefPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CountrefPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CountrefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Countref object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Countref $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CountrefPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CountrefPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(CountrefPeer::DATABASE_NAME, CountrefPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Countref
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CountrefPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CountrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CountrefPeer::DATABASE_NAME);
        $criteria->add(CountrefPeer::C_CODE, $pk);

        $v = CountrefPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Countref[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CountrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CountrefPeer::DATABASE_NAME);
            $criteria->add(CountrefPeer::C_CODE, $pks, Criteria::IN);
            $objs = CountrefPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCountrefPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCountrefPeer::buildTableMap();

