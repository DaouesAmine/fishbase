<?php


/**
 * Base static class for performing query and update operations on the 'cultsys' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseCultsysPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'cultsys';

    /** the related Propel class for this table */
    const OM_CLASS = 'Cultsys';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CultsysTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 62;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 62;

    /** the column name for the CultCode field */
    const CULTCODE = 'cultsys.CultCode';

    /** the column name for the StockCode field */
    const STOCKCODE = 'cultsys.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'cultsys.SpecCode';

    /** the column name for the CultSysRefNo field */
    const CULTSYSREFNO = 'cultsys.CultSysRefNo';

    /** the column name for the C_Code field */
    const C_CODE = 'cultsys.C_Code';

    /** the column name for the NameofFarm field */
    const NAMEOFFARM = 'cultsys.NameofFarm';

    /** the column name for the Year field */
    const YEAR = 'cultsys.Year';

    /** the column name for the Latitude field */
    const LATITUDE = 'cultsys.Latitude';

    /** the column name for the NS field */
    const NS = 'cultsys.NS';

    /** the column name for the Longitude field */
    const LONGITUDE = 'cultsys.Longitude';

    /** the column name for the EW field */
    const EW = 'cultsys.EW';

    /** the column name for the Altitude field */
    const ALTITUDE = 'cultsys.Altitude';

    /** the column name for the Environment field */
    const ENVIRONMENT = 'cultsys.Environment';

    /** the column name for the TypeofCulture field */
    const TYPEOFCULTURE = 'cultsys.TypeofCulture';

    /** the column name for the SexofFish field */
    const SEXOFFISH = 'cultsys.SexofFish';

    /** the column name for the CultureI field */
    const CULTUREI = 'cultsys.CultureI';

    /** the column name for the CultureII field */
    const CULTUREII = 'cultsys.CultureII';

    /** the column name for the UnitCycle field */
    const UNITCYCLE = 'cultsys.UnitCycle';

    /** the column name for the ProductionUnits field */
    const PRODUCTIONUNITS = 'cultsys.ProductionUnits';

    /** the column name for the Area field */
    const AREA = 'cultsys.Area';

    /** the column name for the AverageDepth field */
    const AVERAGEDEPTH = 'cultsys.AverageDepth';

    /** the column name for the Volume field */
    const VOLUME = 'cultsys.Volume';

    /** the column name for the MainWaterSource field */
    const MAINWATERSOURCE = 'cultsys.MainWaterSource';

    /** the column name for the SuppWaterSource field */
    const SUPPWATERSOURCE = 'cultsys.SuppWaterSource';

    /** the column name for the TempMax field */
    const TEMPMAX = 'cultsys.TempMax';

    /** the column name for the SalinMax field */
    const SALINMAX = 'cultsys.SalinMax';

    /** the column name for the pHMax field */
    const PHMAX = 'cultsys.pHMax';

    /** the column name for the OxygenMax field */
    const OXYGENMAX = 'cultsys.OxygenMax';

    /** the column name for the SaturationMax field */
    const SATURATIONMAX = 'cultsys.SaturationMax';

    /** the column name for the AlcalinityMax field */
    const ALCALINITYMAX = 'cultsys.AlcalinityMax';

    /** the column name for the TempMin field */
    const TEMPMIN = 'cultsys.TempMin';

    /** the column name for the SalinMin field */
    const SALINMIN = 'cultsys.SalinMin';

    /** the column name for the pHMin field */
    const PHMIN = 'cultsys.pHMin';

    /** the column name for the OxygenMin field */
    const OXYGENMIN = 'cultsys.OxygenMin';

    /** the column name for the SaturationMin field */
    const SATURATIONMIN = 'cultsys.SaturationMin';

    /** the column name for the AlcalinityMin field */
    const ALCALINITYMIN = 'cultsys.AlcalinityMin';

    /** the column name for the TempMod field */
    const TEMPMOD = 'cultsys.TempMod';

    /** the column name for the SalinMod field */
    const SALINMOD = 'cultsys.SalinMod';

    /** the column name for the pHMod field */
    const PHMOD = 'cultsys.pHMod';

    /** the column name for the OxygenMod field */
    const OXYGENMOD = 'cultsys.OxygenMod';

    /** the column name for the SaturationMod field */
    const SATURATIONMOD = 'cultsys.SaturationMod';

    /** the column name for the AlcalinityMod field */
    const ALCALINITYMOD = 'cultsys.AlcalinityMod';

    /** the column name for the FoodI field */
    const FOODI = 'cultsys.FoodI';

    /** the column name for the FeedQuality field */
    const FEEDQUALITY = 'cultsys.FeedQuality';

    /** the column name for the FeedTotal field */
    const FEEDTOTAL = 'cultsys.FeedTotal';

    /** the column name for the FeedType field */
    const FEEDTYPE = 'cultsys.FeedType';

    /** the column name for the FeedQuanity field */
    const FEEDQUANITY = 'cultsys.FeedQuanity';

    /** the column name for the N field */
    const N = 'cultsys.N';

    /** the column name for the NUnit field */
    const NUNIT = 'cultsys.NUnit';

    /** the column name for the P field */
    const P = 'cultsys.P';

    /** the column name for the PUnit field */
    const PUNIT = 'cultsys.PUnit';

    /** the column name for the ProductionPeriod field */
    const PRODUCTIONPERIOD = 'cultsys.ProductionPeriod';

    /** the column name for the Entered field */
    const ENTERED = 'cultsys.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'cultsys.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'cultsys.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'cultsys.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'cultsys.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'cultsys.DateChecked';

    /** the column name for the DescribeCult field */
    const DESCRIBECULT = 'cultsys.DescribeCult';

    /** the column name for the DescribeFood field */
    const DESCRIBEFOOD = 'cultsys.DescribeFood';

    /** the column name for the Comments field */
    const COMMENTS = 'cultsys.Comments';

    /** the column name for the TS field */
    const TS = 'cultsys.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Cultsys objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Cultsys[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CultsysPeer::$fieldNames[CultsysPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Cultcode', 'Stockcode', 'Speccode', 'Cultsysrefno', 'CCode', 'Nameoffarm', 'Year', 'Latitude', 'Ns', 'Longitude', 'Ew', 'Altitude', 'Environment', 'Typeofculture', 'Sexoffish', 'Culturei', 'Cultureii', 'Unitcycle', 'Productionunits', 'Area', 'Averagedepth', 'Volume', 'Mainwatersource', 'Suppwatersource', 'Tempmax', 'Salinmax', 'Phmax', 'Oxygenmax', 'Saturationmax', 'Alcalinitymax', 'Tempmin', 'Salinmin', 'Phmin', 'Oxygenmin', 'Saturationmin', 'Alcalinitymin', 'Tempmod', 'Salinmod', 'Phmod', 'Oxygenmod', 'Saturationmod', 'Alcalinitymod', 'Foodi', 'Feedquality', 'Feedtotal', 'Feedtype', 'Feedquanity', 'N', 'Nunit', 'P', 'Punit', 'Productionperiod', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Describecult', 'Describefood', 'Comments', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('cultcode', 'stockcode', 'speccode', 'cultsysrefno', 'cCode', 'nameoffarm', 'year', 'latitude', 'ns', 'longitude', 'ew', 'altitude', 'environment', 'typeofculture', 'sexoffish', 'culturei', 'cultureii', 'unitcycle', 'productionunits', 'area', 'averagedepth', 'volume', 'mainwatersource', 'suppwatersource', 'tempmax', 'salinmax', 'phmax', 'oxygenmax', 'saturationmax', 'alcalinitymax', 'tempmin', 'salinmin', 'phmin', 'oxygenmin', 'saturationmin', 'alcalinitymin', 'tempmod', 'salinmod', 'phmod', 'oxygenmod', 'saturationmod', 'alcalinitymod', 'foodi', 'feedquality', 'feedtotal', 'feedtype', 'feedquanity', 'n', 'nunit', 'p', 'punit', 'productionperiod', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'describecult', 'describefood', 'comments', 'ts', ),
        BasePeer::TYPE_COLNAME => array (CultsysPeer::CULTCODE, CultsysPeer::STOCKCODE, CultsysPeer::SPECCODE, CultsysPeer::CULTSYSREFNO, CultsysPeer::C_CODE, CultsysPeer::NAMEOFFARM, CultsysPeer::YEAR, CultsysPeer::LATITUDE, CultsysPeer::NS, CultsysPeer::LONGITUDE, CultsysPeer::EW, CultsysPeer::ALTITUDE, CultsysPeer::ENVIRONMENT, CultsysPeer::TYPEOFCULTURE, CultsysPeer::SEXOFFISH, CultsysPeer::CULTUREI, CultsysPeer::CULTUREII, CultsysPeer::UNITCYCLE, CultsysPeer::PRODUCTIONUNITS, CultsysPeer::AREA, CultsysPeer::AVERAGEDEPTH, CultsysPeer::VOLUME, CultsysPeer::MAINWATERSOURCE, CultsysPeer::SUPPWATERSOURCE, CultsysPeer::TEMPMAX, CultsysPeer::SALINMAX, CultsysPeer::PHMAX, CultsysPeer::OXYGENMAX, CultsysPeer::SATURATIONMAX, CultsysPeer::ALCALINITYMAX, CultsysPeer::TEMPMIN, CultsysPeer::SALINMIN, CultsysPeer::PHMIN, CultsysPeer::OXYGENMIN, CultsysPeer::SATURATIONMIN, CultsysPeer::ALCALINITYMIN, CultsysPeer::TEMPMOD, CultsysPeer::SALINMOD, CultsysPeer::PHMOD, CultsysPeer::OXYGENMOD, CultsysPeer::SATURATIONMOD, CultsysPeer::ALCALINITYMOD, CultsysPeer::FOODI, CultsysPeer::FEEDQUALITY, CultsysPeer::FEEDTOTAL, CultsysPeer::FEEDTYPE, CultsysPeer::FEEDQUANITY, CultsysPeer::N, CultsysPeer::NUNIT, CultsysPeer::P, CultsysPeer::PUNIT, CultsysPeer::PRODUCTIONPERIOD, CultsysPeer::ENTERED, CultsysPeer::DATEENTERED, CultsysPeer::MODIFIED, CultsysPeer::DATEMODIFIED, CultsysPeer::EXPERT, CultsysPeer::DATECHECKED, CultsysPeer::DESCRIBECULT, CultsysPeer::DESCRIBEFOOD, CultsysPeer::COMMENTS, CultsysPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CULTCODE', 'STOCKCODE', 'SPECCODE', 'CULTSYSREFNO', 'C_CODE', 'NAMEOFFARM', 'YEAR', 'LATITUDE', 'NS', 'LONGITUDE', 'EW', 'ALTITUDE', 'ENVIRONMENT', 'TYPEOFCULTURE', 'SEXOFFISH', 'CULTUREI', 'CULTUREII', 'UNITCYCLE', 'PRODUCTIONUNITS', 'AREA', 'AVERAGEDEPTH', 'VOLUME', 'MAINWATERSOURCE', 'SUPPWATERSOURCE', 'TEMPMAX', 'SALINMAX', 'PHMAX', 'OXYGENMAX', 'SATURATIONMAX', 'ALCALINITYMAX', 'TEMPMIN', 'SALINMIN', 'PHMIN', 'OXYGENMIN', 'SATURATIONMIN', 'ALCALINITYMIN', 'TEMPMOD', 'SALINMOD', 'PHMOD', 'OXYGENMOD', 'SATURATIONMOD', 'ALCALINITYMOD', 'FOODI', 'FEEDQUALITY', 'FEEDTOTAL', 'FEEDTYPE', 'FEEDQUANITY', 'N', 'NUNIT', 'P', 'PUNIT', 'PRODUCTIONPERIOD', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'DESCRIBECULT', 'DESCRIBEFOOD', 'COMMENTS', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('CultCode', 'StockCode', 'SpecCode', 'CultSysRefNo', 'C_Code', 'NameofFarm', 'Year', 'Latitude', 'NS', 'Longitude', 'EW', 'Altitude', 'Environment', 'TypeofCulture', 'SexofFish', 'CultureI', 'CultureII', 'UnitCycle', 'ProductionUnits', 'Area', 'AverageDepth', 'Volume', 'MainWaterSource', 'SuppWaterSource', 'TempMax', 'SalinMax', 'pHMax', 'OxygenMax', 'SaturationMax', 'AlcalinityMax', 'TempMin', 'SalinMin', 'pHMin', 'OxygenMin', 'SaturationMin', 'AlcalinityMin', 'TempMod', 'SalinMod', 'pHMod', 'OxygenMod', 'SaturationMod', 'AlcalinityMod', 'FoodI', 'FeedQuality', 'FeedTotal', 'FeedType', 'FeedQuanity', 'N', 'NUnit', 'P', 'PUnit', 'ProductionPeriod', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'DescribeCult', 'DescribeFood', 'Comments', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CultsysPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Cultcode' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Cultsysrefno' => 3, 'CCode' => 4, 'Nameoffarm' => 5, 'Year' => 6, 'Latitude' => 7, 'Ns' => 8, 'Longitude' => 9, 'Ew' => 10, 'Altitude' => 11, 'Environment' => 12, 'Typeofculture' => 13, 'Sexoffish' => 14, 'Culturei' => 15, 'Cultureii' => 16, 'Unitcycle' => 17, 'Productionunits' => 18, 'Area' => 19, 'Averagedepth' => 20, 'Volume' => 21, 'Mainwatersource' => 22, 'Suppwatersource' => 23, 'Tempmax' => 24, 'Salinmax' => 25, 'Phmax' => 26, 'Oxygenmax' => 27, 'Saturationmax' => 28, 'Alcalinitymax' => 29, 'Tempmin' => 30, 'Salinmin' => 31, 'Phmin' => 32, 'Oxygenmin' => 33, 'Saturationmin' => 34, 'Alcalinitymin' => 35, 'Tempmod' => 36, 'Salinmod' => 37, 'Phmod' => 38, 'Oxygenmod' => 39, 'Saturationmod' => 40, 'Alcalinitymod' => 41, 'Foodi' => 42, 'Feedquality' => 43, 'Feedtotal' => 44, 'Feedtype' => 45, 'Feedquanity' => 46, 'N' => 47, 'Nunit' => 48, 'P' => 49, 'Punit' => 50, 'Productionperiod' => 51, 'Entered' => 52, 'Dateentered' => 53, 'Modified' => 54, 'Datemodified' => 55, 'Expert' => 56, 'Datechecked' => 57, 'Describecult' => 58, 'Describefood' => 59, 'Comments' => 60, 'Ts' => 61, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('cultcode' => 0, 'stockcode' => 1, 'speccode' => 2, 'cultsysrefno' => 3, 'cCode' => 4, 'nameoffarm' => 5, 'year' => 6, 'latitude' => 7, 'ns' => 8, 'longitude' => 9, 'ew' => 10, 'altitude' => 11, 'environment' => 12, 'typeofculture' => 13, 'sexoffish' => 14, 'culturei' => 15, 'cultureii' => 16, 'unitcycle' => 17, 'productionunits' => 18, 'area' => 19, 'averagedepth' => 20, 'volume' => 21, 'mainwatersource' => 22, 'suppwatersource' => 23, 'tempmax' => 24, 'salinmax' => 25, 'phmax' => 26, 'oxygenmax' => 27, 'saturationmax' => 28, 'alcalinitymax' => 29, 'tempmin' => 30, 'salinmin' => 31, 'phmin' => 32, 'oxygenmin' => 33, 'saturationmin' => 34, 'alcalinitymin' => 35, 'tempmod' => 36, 'salinmod' => 37, 'phmod' => 38, 'oxygenmod' => 39, 'saturationmod' => 40, 'alcalinitymod' => 41, 'foodi' => 42, 'feedquality' => 43, 'feedtotal' => 44, 'feedtype' => 45, 'feedquanity' => 46, 'n' => 47, 'nunit' => 48, 'p' => 49, 'punit' => 50, 'productionperiod' => 51, 'entered' => 52, 'dateentered' => 53, 'modified' => 54, 'datemodified' => 55, 'expert' => 56, 'datechecked' => 57, 'describecult' => 58, 'describefood' => 59, 'comments' => 60, 'ts' => 61, ),
        BasePeer::TYPE_COLNAME => array (CultsysPeer::CULTCODE => 0, CultsysPeer::STOCKCODE => 1, CultsysPeer::SPECCODE => 2, CultsysPeer::CULTSYSREFNO => 3, CultsysPeer::C_CODE => 4, CultsysPeer::NAMEOFFARM => 5, CultsysPeer::YEAR => 6, CultsysPeer::LATITUDE => 7, CultsysPeer::NS => 8, CultsysPeer::LONGITUDE => 9, CultsysPeer::EW => 10, CultsysPeer::ALTITUDE => 11, CultsysPeer::ENVIRONMENT => 12, CultsysPeer::TYPEOFCULTURE => 13, CultsysPeer::SEXOFFISH => 14, CultsysPeer::CULTUREI => 15, CultsysPeer::CULTUREII => 16, CultsysPeer::UNITCYCLE => 17, CultsysPeer::PRODUCTIONUNITS => 18, CultsysPeer::AREA => 19, CultsysPeer::AVERAGEDEPTH => 20, CultsysPeer::VOLUME => 21, CultsysPeer::MAINWATERSOURCE => 22, CultsysPeer::SUPPWATERSOURCE => 23, CultsysPeer::TEMPMAX => 24, CultsysPeer::SALINMAX => 25, CultsysPeer::PHMAX => 26, CultsysPeer::OXYGENMAX => 27, CultsysPeer::SATURATIONMAX => 28, CultsysPeer::ALCALINITYMAX => 29, CultsysPeer::TEMPMIN => 30, CultsysPeer::SALINMIN => 31, CultsysPeer::PHMIN => 32, CultsysPeer::OXYGENMIN => 33, CultsysPeer::SATURATIONMIN => 34, CultsysPeer::ALCALINITYMIN => 35, CultsysPeer::TEMPMOD => 36, CultsysPeer::SALINMOD => 37, CultsysPeer::PHMOD => 38, CultsysPeer::OXYGENMOD => 39, CultsysPeer::SATURATIONMOD => 40, CultsysPeer::ALCALINITYMOD => 41, CultsysPeer::FOODI => 42, CultsysPeer::FEEDQUALITY => 43, CultsysPeer::FEEDTOTAL => 44, CultsysPeer::FEEDTYPE => 45, CultsysPeer::FEEDQUANITY => 46, CultsysPeer::N => 47, CultsysPeer::NUNIT => 48, CultsysPeer::P => 49, CultsysPeer::PUNIT => 50, CultsysPeer::PRODUCTIONPERIOD => 51, CultsysPeer::ENTERED => 52, CultsysPeer::DATEENTERED => 53, CultsysPeer::MODIFIED => 54, CultsysPeer::DATEMODIFIED => 55, CultsysPeer::EXPERT => 56, CultsysPeer::DATECHECKED => 57, CultsysPeer::DESCRIBECULT => 58, CultsysPeer::DESCRIBEFOOD => 59, CultsysPeer::COMMENTS => 60, CultsysPeer::TS => 61, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CULTCODE' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'CULTSYSREFNO' => 3, 'C_CODE' => 4, 'NAMEOFFARM' => 5, 'YEAR' => 6, 'LATITUDE' => 7, 'NS' => 8, 'LONGITUDE' => 9, 'EW' => 10, 'ALTITUDE' => 11, 'ENVIRONMENT' => 12, 'TYPEOFCULTURE' => 13, 'SEXOFFISH' => 14, 'CULTUREI' => 15, 'CULTUREII' => 16, 'UNITCYCLE' => 17, 'PRODUCTIONUNITS' => 18, 'AREA' => 19, 'AVERAGEDEPTH' => 20, 'VOLUME' => 21, 'MAINWATERSOURCE' => 22, 'SUPPWATERSOURCE' => 23, 'TEMPMAX' => 24, 'SALINMAX' => 25, 'PHMAX' => 26, 'OXYGENMAX' => 27, 'SATURATIONMAX' => 28, 'ALCALINITYMAX' => 29, 'TEMPMIN' => 30, 'SALINMIN' => 31, 'PHMIN' => 32, 'OXYGENMIN' => 33, 'SATURATIONMIN' => 34, 'ALCALINITYMIN' => 35, 'TEMPMOD' => 36, 'SALINMOD' => 37, 'PHMOD' => 38, 'OXYGENMOD' => 39, 'SATURATIONMOD' => 40, 'ALCALINITYMOD' => 41, 'FOODI' => 42, 'FEEDQUALITY' => 43, 'FEEDTOTAL' => 44, 'FEEDTYPE' => 45, 'FEEDQUANITY' => 46, 'N' => 47, 'NUNIT' => 48, 'P' => 49, 'PUNIT' => 50, 'PRODUCTIONPERIOD' => 51, 'ENTERED' => 52, 'DATEENTERED' => 53, 'MODIFIED' => 54, 'DATEMODIFIED' => 55, 'EXPERT' => 56, 'DATECHECKED' => 57, 'DESCRIBECULT' => 58, 'DESCRIBEFOOD' => 59, 'COMMENTS' => 60, 'TS' => 61, ),
        BasePeer::TYPE_FIELDNAME => array ('CultCode' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'CultSysRefNo' => 3, 'C_Code' => 4, 'NameofFarm' => 5, 'Year' => 6, 'Latitude' => 7, 'NS' => 8, 'Longitude' => 9, 'EW' => 10, 'Altitude' => 11, 'Environment' => 12, 'TypeofCulture' => 13, 'SexofFish' => 14, 'CultureI' => 15, 'CultureII' => 16, 'UnitCycle' => 17, 'ProductionUnits' => 18, 'Area' => 19, 'AverageDepth' => 20, 'Volume' => 21, 'MainWaterSource' => 22, 'SuppWaterSource' => 23, 'TempMax' => 24, 'SalinMax' => 25, 'pHMax' => 26, 'OxygenMax' => 27, 'SaturationMax' => 28, 'AlcalinityMax' => 29, 'TempMin' => 30, 'SalinMin' => 31, 'pHMin' => 32, 'OxygenMin' => 33, 'SaturationMin' => 34, 'AlcalinityMin' => 35, 'TempMod' => 36, 'SalinMod' => 37, 'pHMod' => 38, 'OxygenMod' => 39, 'SaturationMod' => 40, 'AlcalinityMod' => 41, 'FoodI' => 42, 'FeedQuality' => 43, 'FeedTotal' => 44, 'FeedType' => 45, 'FeedQuanity' => 46, 'N' => 47, 'NUnit' => 48, 'P' => 49, 'PUnit' => 50, 'ProductionPeriod' => 51, 'Entered' => 52, 'DateEntered' => 53, 'Modified' => 54, 'DateModified' => 55, 'Expert' => 56, 'DateChecked' => 57, 'DescribeCult' => 58, 'DescribeFood' => 59, 'Comments' => 60, 'TS' => 61, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, )
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
        $toNames = CultsysPeer::getFieldNames($toType);
        $key = isset(CultsysPeer::$fieldKeys[$fromType][$name]) ? CultsysPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CultsysPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CultsysPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CultsysPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CultsysPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CultsysPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CultsysPeer::CULTCODE);
            $criteria->addSelectColumn(CultsysPeer::STOCKCODE);
            $criteria->addSelectColumn(CultsysPeer::SPECCODE);
            $criteria->addSelectColumn(CultsysPeer::CULTSYSREFNO);
            $criteria->addSelectColumn(CultsysPeer::C_CODE);
            $criteria->addSelectColumn(CultsysPeer::NAMEOFFARM);
            $criteria->addSelectColumn(CultsysPeer::YEAR);
            $criteria->addSelectColumn(CultsysPeer::LATITUDE);
            $criteria->addSelectColumn(CultsysPeer::NS);
            $criteria->addSelectColumn(CultsysPeer::LONGITUDE);
            $criteria->addSelectColumn(CultsysPeer::EW);
            $criteria->addSelectColumn(CultsysPeer::ALTITUDE);
            $criteria->addSelectColumn(CultsysPeer::ENVIRONMENT);
            $criteria->addSelectColumn(CultsysPeer::TYPEOFCULTURE);
            $criteria->addSelectColumn(CultsysPeer::SEXOFFISH);
            $criteria->addSelectColumn(CultsysPeer::CULTUREI);
            $criteria->addSelectColumn(CultsysPeer::CULTUREII);
            $criteria->addSelectColumn(CultsysPeer::UNITCYCLE);
            $criteria->addSelectColumn(CultsysPeer::PRODUCTIONUNITS);
            $criteria->addSelectColumn(CultsysPeer::AREA);
            $criteria->addSelectColumn(CultsysPeer::AVERAGEDEPTH);
            $criteria->addSelectColumn(CultsysPeer::VOLUME);
            $criteria->addSelectColumn(CultsysPeer::MAINWATERSOURCE);
            $criteria->addSelectColumn(CultsysPeer::SUPPWATERSOURCE);
            $criteria->addSelectColumn(CultsysPeer::TEMPMAX);
            $criteria->addSelectColumn(CultsysPeer::SALINMAX);
            $criteria->addSelectColumn(CultsysPeer::PHMAX);
            $criteria->addSelectColumn(CultsysPeer::OXYGENMAX);
            $criteria->addSelectColumn(CultsysPeer::SATURATIONMAX);
            $criteria->addSelectColumn(CultsysPeer::ALCALINITYMAX);
            $criteria->addSelectColumn(CultsysPeer::TEMPMIN);
            $criteria->addSelectColumn(CultsysPeer::SALINMIN);
            $criteria->addSelectColumn(CultsysPeer::PHMIN);
            $criteria->addSelectColumn(CultsysPeer::OXYGENMIN);
            $criteria->addSelectColumn(CultsysPeer::SATURATIONMIN);
            $criteria->addSelectColumn(CultsysPeer::ALCALINITYMIN);
            $criteria->addSelectColumn(CultsysPeer::TEMPMOD);
            $criteria->addSelectColumn(CultsysPeer::SALINMOD);
            $criteria->addSelectColumn(CultsysPeer::PHMOD);
            $criteria->addSelectColumn(CultsysPeer::OXYGENMOD);
            $criteria->addSelectColumn(CultsysPeer::SATURATIONMOD);
            $criteria->addSelectColumn(CultsysPeer::ALCALINITYMOD);
            $criteria->addSelectColumn(CultsysPeer::FOODI);
            $criteria->addSelectColumn(CultsysPeer::FEEDQUALITY);
            $criteria->addSelectColumn(CultsysPeer::FEEDTOTAL);
            $criteria->addSelectColumn(CultsysPeer::FEEDTYPE);
            $criteria->addSelectColumn(CultsysPeer::FEEDQUANITY);
            $criteria->addSelectColumn(CultsysPeer::N);
            $criteria->addSelectColumn(CultsysPeer::NUNIT);
            $criteria->addSelectColumn(CultsysPeer::P);
            $criteria->addSelectColumn(CultsysPeer::PUNIT);
            $criteria->addSelectColumn(CultsysPeer::PRODUCTIONPERIOD);
            $criteria->addSelectColumn(CultsysPeer::ENTERED);
            $criteria->addSelectColumn(CultsysPeer::DATEENTERED);
            $criteria->addSelectColumn(CultsysPeer::MODIFIED);
            $criteria->addSelectColumn(CultsysPeer::DATEMODIFIED);
            $criteria->addSelectColumn(CultsysPeer::EXPERT);
            $criteria->addSelectColumn(CultsysPeer::DATECHECKED);
            $criteria->addSelectColumn(CultsysPeer::DESCRIBECULT);
            $criteria->addSelectColumn(CultsysPeer::DESCRIBEFOOD);
            $criteria->addSelectColumn(CultsysPeer::COMMENTS);
            $criteria->addSelectColumn(CultsysPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.CultCode');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.CultSysRefNo');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.NameofFarm');
            $criteria->addSelectColumn($alias . '.Year');
            $criteria->addSelectColumn($alias . '.Latitude');
            $criteria->addSelectColumn($alias . '.NS');
            $criteria->addSelectColumn($alias . '.Longitude');
            $criteria->addSelectColumn($alias . '.EW');
            $criteria->addSelectColumn($alias . '.Altitude');
            $criteria->addSelectColumn($alias . '.Environment');
            $criteria->addSelectColumn($alias . '.TypeofCulture');
            $criteria->addSelectColumn($alias . '.SexofFish');
            $criteria->addSelectColumn($alias . '.CultureI');
            $criteria->addSelectColumn($alias . '.CultureII');
            $criteria->addSelectColumn($alias . '.UnitCycle');
            $criteria->addSelectColumn($alias . '.ProductionUnits');
            $criteria->addSelectColumn($alias . '.Area');
            $criteria->addSelectColumn($alias . '.AverageDepth');
            $criteria->addSelectColumn($alias . '.Volume');
            $criteria->addSelectColumn($alias . '.MainWaterSource');
            $criteria->addSelectColumn($alias . '.SuppWaterSource');
            $criteria->addSelectColumn($alias . '.TempMax');
            $criteria->addSelectColumn($alias . '.SalinMax');
            $criteria->addSelectColumn($alias . '.pHMax');
            $criteria->addSelectColumn($alias . '.OxygenMax');
            $criteria->addSelectColumn($alias . '.SaturationMax');
            $criteria->addSelectColumn($alias . '.AlcalinityMax');
            $criteria->addSelectColumn($alias . '.TempMin');
            $criteria->addSelectColumn($alias . '.SalinMin');
            $criteria->addSelectColumn($alias . '.pHMin');
            $criteria->addSelectColumn($alias . '.OxygenMin');
            $criteria->addSelectColumn($alias . '.SaturationMin');
            $criteria->addSelectColumn($alias . '.AlcalinityMin');
            $criteria->addSelectColumn($alias . '.TempMod');
            $criteria->addSelectColumn($alias . '.SalinMod');
            $criteria->addSelectColumn($alias . '.pHMod');
            $criteria->addSelectColumn($alias . '.OxygenMod');
            $criteria->addSelectColumn($alias . '.SaturationMod');
            $criteria->addSelectColumn($alias . '.AlcalinityMod');
            $criteria->addSelectColumn($alias . '.FoodI');
            $criteria->addSelectColumn($alias . '.FeedQuality');
            $criteria->addSelectColumn($alias . '.FeedTotal');
            $criteria->addSelectColumn($alias . '.FeedType');
            $criteria->addSelectColumn($alias . '.FeedQuanity');
            $criteria->addSelectColumn($alias . '.N');
            $criteria->addSelectColumn($alias . '.NUnit');
            $criteria->addSelectColumn($alias . '.P');
            $criteria->addSelectColumn($alias . '.PUnit');
            $criteria->addSelectColumn($alias . '.ProductionPeriod');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.DescribeCult');
            $criteria->addSelectColumn($alias . '.DescribeFood');
            $criteria->addSelectColumn($alias . '.Comments');
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
        $criteria->setPrimaryTableName(CultsysPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CultsysPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CultsysPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CultsysPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Cultsys
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CultsysPeer::doSelect($critcopy, $con);
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
        return CultsysPeer::populateObjects(CultsysPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CultsysPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CultsysPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CultsysPeer::DATABASE_NAME);

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
     * @param Cultsys $obj A Cultsys object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getCultsysrefno(), (string) $obj->getEnvironment()));
            } // if key === null
            CultsysPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Cultsys object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Cultsys) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getCultsysrefno(), (string) $value->getEnvironment()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Cultsys object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CultsysPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Cultsys Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CultsysPeer::$instances[$key])) {
                return CultsysPeer::$instances[$key];
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
        foreach (CultsysPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CultsysPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to cultsys
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
        if ($row[$startcol + 1] === null && $row[$startcol + 3] === null && $row[$startcol + 12] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 3], (string) $row[$startcol + 12]));
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

        return array((int) $row[$startcol + 1], (int) $row[$startcol + 3], (string) $row[$startcol + 12]);
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
        $cls = CultsysPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CultsysPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CultsysPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CultsysPeer::addInstanceToPool($obj, $key);
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
     * @return array (Cultsys object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CultsysPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CultsysPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CultsysPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CultsysPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CultsysPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CultsysPeer::DATABASE_NAME)->getTable(CultsysPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCultsysPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCultsysPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CultsysTableMap());
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
        return CultsysPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Cultsys or Criteria object.
     *
     * @param      mixed $values Criteria or Cultsys object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CultsysPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Cultsys object
        }


        // Set the correct dbName
        $criteria->setDbName(CultsysPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Cultsys or Criteria object.
     *
     * @param      mixed $values Criteria or Cultsys object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CultsysPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CultsysPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CultsysPeer::STOCKCODE);
            $value = $criteria->remove(CultsysPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(CultsysPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CultsysPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CultsysPeer::CULTSYSREFNO);
            $value = $criteria->remove(CultsysPeer::CULTSYSREFNO);
            if ($value) {
                $selectCriteria->add(CultsysPeer::CULTSYSREFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CultsysPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CultsysPeer::ENVIRONMENT);
            $value = $criteria->remove(CultsysPeer::ENVIRONMENT);
            if ($value) {
                $selectCriteria->add(CultsysPeer::ENVIRONMENT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CultsysPeer::TABLE_NAME);
            }

        } else { // $values is Cultsys object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CultsysPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the cultsys table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CultsysPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CultsysPeer::TABLE_NAME, $con, CultsysPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CultsysPeer::clearInstancePool();
            CultsysPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Cultsys or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Cultsys object or primary key or array of primary keys
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
            $con = Propel::getConnection(CultsysPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CultsysPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Cultsys) { // it's a model object
            // invalidate the cache for this single object
            CultsysPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CultsysPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CultsysPeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CultsysPeer::CULTSYSREFNO, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CultsysPeer::ENVIRONMENT, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CultsysPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CultsysPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CultsysPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Cultsys object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Cultsys $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CultsysPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CultsysPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CultsysPeer::DATABASE_NAME, CultsysPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stockcode
     * @param   int $cultsysrefno
     * @param   string $environment
     * @param      PropelPDO $con
     * @return Cultsys
     */
    public static function retrieveByPK($stockcode, $cultsysrefno, $environment, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $cultsysrefno, (string) $environment));
         if (null !== ($obj = CultsysPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CultsysPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CultsysPeer::DATABASE_NAME);
        $criteria->add(CultsysPeer::STOCKCODE, $stockcode);
        $criteria->add(CultsysPeer::CULTSYSREFNO, $cultsysrefno);
        $criteria->add(CultsysPeer::ENVIRONMENT, $environment);
        $v = CultsysPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCultsysPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCultsysPeer::buildTableMap();

