<?php


/**
 * Base static class for performing query and update operations on the 'frynurserysystem' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseFrynurserysystemPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'frynurserysystem';

    /** the related Propel class for this table */
    const OM_CLASS = 'Frynurserysystem';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FrynurserysystemTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 53;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 53;

    /** the column name for the autoctr field */
    const AUTOCTR = 'frynurserysystem.autoctr';

    /** the column name for the Speccode field */
    const SPECCODE = 'frynurserysystem.Speccode';

    /** the column name for the Stockcode field */
    const STOCKCODE = 'frynurserysystem.Stockcode';

    /** the column name for the CommonName field */
    const COMMONNAME = 'frynurserysystem.CommonName';

    /** the column name for the Species field */
    const SPECIES = 'frynurserysystem.Species';

    /** the column name for the MainRef field */
    const MAINREF = 'frynurserysystem.MainRef';

    /** the column name for the C_Code field */
    const C_CODE = 'frynurserysystem.C_Code';

    /** the column name for the Locality field */
    const LOCALITY = 'frynurserysystem.Locality';

    /** the column name for the DataRef field */
    const DATAREF = 'frynurserysystem.DataRef';

    /** the column name for the NumberofFry field */
    const NUMBEROFFRY = 'frynurserysystem.NumberofFry';

    /** the column name for the NurserySystemI field */
    const NURSERYSYSTEMI = 'frynurserysystem.NurserySystemI';

    /** the column name for the NurserySystemII field */
    const NURSERYSYSTEMII = 'frynurserysystem.NurserySystemII';

    /** the column name for the CultureSystem field */
    const CULTURESYSTEM = 'frynurserysystem.CultureSystem';

    /** the column name for the MainWaterSource field */
    const MAINWATERSOURCE = 'frynurserysystem.MainWaterSource';

    /** the column name for the SupplWaterSource field */
    const SUPPLWATERSOURCE = 'frynurserysystem.SupplWaterSource';

    /** the column name for the TempMin field */
    const TEMPMIN = 'frynurserysystem.TempMin';

    /** the column name for the TempMax field */
    const TEMPMAX = 'frynurserysystem.TempMax';

    /** the column name for the SalinMin field */
    const SALINMIN = 'frynurserysystem.SalinMin';

    /** the column name for the SalinMax field */
    const SALINMAX = 'frynurserysystem.SalinMax';

    /** the column name for the pHMin field */
    const PHMIN = 'frynurserysystem.pHMin';

    /** the column name for the pHMax field */
    const PHMAX = 'frynurserysystem.pHMax';

    /** the column name for the OxygenMin field */
    const OXYGENMIN = 'frynurserysystem.OxygenMin';

    /** the column name for the OxygenMax field */
    const OXYGENMAX = 'frynurserysystem.OxygenMax';

    /** the column name for the IlluminationMin field */
    const ILLUMINATIONMIN = 'frynurserysystem.IlluminationMin';

    /** the column name for the IlluminationMax field */
    const ILLUMINATIONMAX = 'frynurserysystem.IlluminationMax';

    /** the column name for the StockingDensityOrg field */
    const STOCKINGDENSITYORG = 'frynurserysystem.StockingDensityOrg';

    /** the column name for the StockingDensity field */
    const STOCKINGDENSITY = 'frynurserysystem.StockingDensity';

    /** the column name for the Unit field */
    const UNIT = 'frynurserysystem.Unit';

    /** the column name for the FoodI field */
    const FOODI = 'frynurserysystem.FoodI';

    /** the column name for the FoodII field */
    const FOODII = 'frynurserysystem.FoodII';

    /** the column name for the ProductionPeriode field */
    const PRODUCTIONPERIODE = 'frynurserysystem.ProductionPeriode';

    /** the column name for the TimetoAlevinsDaysMin field */
    const TIMETOALEVINSDAYSMIN = 'frynurserysystem.TimetoAlevinsDaysMin';

    /** the column name for the TimetoAlevinsDaysMax field */
    const TIMETOALEVINSDAYSMAX = 'frynurserysystem.TimetoAlevinsDaysMax';

    /** the column name for the TimetoAlevinsDaysDegMin field */
    const TIMETOALEVINSDAYSDEGMIN = 'frynurserysystem.TimetoAlevinsDaysDegMin';

    /** the column name for the TimetoAlevinsDaysDegMax field */
    const TIMETOALEVINSDAYSDEGMAX = 'frynurserysystem.TimetoAlevinsDaysDegMax';

    /** the column name for the MortalityrateOrg field */
    const MORTALITYRATEORG = 'frynurserysystem.MortalityrateOrg';

    /** the column name for the MortalityRateMin field */
    const MORTALITYRATEMIN = 'frynurserysystem.MortalityRateMin';

    /** the column name for the MortalityRateMax field */
    const MORTALITYRATEMAX = 'frynurserysystem.MortalityRateMax';

    /** the column name for the GrowthRate field */
    const GROWTHRATE = 'frynurserysystem.GrowthRate';

    /** the column name for the FCR field */
    const FCR = 'frynurserysystem.FCR';

    /** the column name for the ProductionCycle field */
    const PRODUCTIONCYCLE = 'frynurserysystem.ProductionCycle';

    /** the column name for the UnitCycle field */
    const UNITCYCLE = 'frynurserysystem.UnitCycle';

    /** the column name for the ProductionYearOrg field */
    const PRODUCTIONYEARORG = 'frynurserysystem.ProductionYearOrg';

    /** the column name for the ProductionYear field */
    const PRODUCTIONYEAR = 'frynurserysystem.ProductionYear';

    /** the column name for the UnitYear field */
    const UNITYEAR = 'frynurserysystem.UnitYear';

    /** the column name for the Comment field */
    const COMMENT = 'frynurserysystem.Comment';

    /** the column name for the Entered field */
    const ENTERED = 'frynurserysystem.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'frynurserysystem.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'frynurserysystem.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'frynurserysystem.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'frynurserysystem.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'frynurserysystem.DateChecked';

    /** the column name for the TS field */
    const TS = 'frynurserysystem.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Frynurserysystem objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Frynurserysystem[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FrynurserysystemPeer::$fieldNames[FrynurserysystemPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Speccode', 'Stockcode', 'Commonname', 'Species', 'Mainref', 'CCode', 'Locality', 'Dataref', 'Numberoffry', 'Nurserysystemi', 'Nurserysystemii', 'Culturesystem', 'Mainwatersource', 'Supplwatersource', 'Tempmin', 'Tempmax', 'Salinmin', 'Salinmax', 'Phmin', 'Phmax', 'Oxygenmin', 'Oxygenmax', 'Illuminationmin', 'Illuminationmax', 'Stockingdensityorg', 'Stockingdensity', 'Unit', 'Foodi', 'Foodii', 'Productionperiode', 'Timetoalevinsdaysmin', 'Timetoalevinsdaysmax', 'Timetoalevinsdaysdegmin', 'Timetoalevinsdaysdegmax', 'Mortalityrateorg', 'Mortalityratemin', 'Mortalityratemax', 'Growthrate', 'Fcr', 'Productioncycle', 'Unitcycle', 'Productionyearorg', 'Productionyear', 'Unityear', 'Comment', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'speccode', 'stockcode', 'commonname', 'species', 'mainref', 'cCode', 'locality', 'dataref', 'numberoffry', 'nurserysystemi', 'nurserysystemii', 'culturesystem', 'mainwatersource', 'supplwatersource', 'tempmin', 'tempmax', 'salinmin', 'salinmax', 'phmin', 'phmax', 'oxygenmin', 'oxygenmax', 'illuminationmin', 'illuminationmax', 'stockingdensityorg', 'stockingdensity', 'unit', 'foodi', 'foodii', 'productionperiode', 'timetoalevinsdaysmin', 'timetoalevinsdaysmax', 'timetoalevinsdaysdegmin', 'timetoalevinsdaysdegmax', 'mortalityrateorg', 'mortalityratemin', 'mortalityratemax', 'growthrate', 'fcr', 'productioncycle', 'unitcycle', 'productionyearorg', 'productionyear', 'unityear', 'comment', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (FrynurserysystemPeer::AUTOCTR, FrynurserysystemPeer::SPECCODE, FrynurserysystemPeer::STOCKCODE, FrynurserysystemPeer::COMMONNAME, FrynurserysystemPeer::SPECIES, FrynurserysystemPeer::MAINREF, FrynurserysystemPeer::C_CODE, FrynurserysystemPeer::LOCALITY, FrynurserysystemPeer::DATAREF, FrynurserysystemPeer::NUMBEROFFRY, FrynurserysystemPeer::NURSERYSYSTEMI, FrynurserysystemPeer::NURSERYSYSTEMII, FrynurserysystemPeer::CULTURESYSTEM, FrynurserysystemPeer::MAINWATERSOURCE, FrynurserysystemPeer::SUPPLWATERSOURCE, FrynurserysystemPeer::TEMPMIN, FrynurserysystemPeer::TEMPMAX, FrynurserysystemPeer::SALINMIN, FrynurserysystemPeer::SALINMAX, FrynurserysystemPeer::PHMIN, FrynurserysystemPeer::PHMAX, FrynurserysystemPeer::OXYGENMIN, FrynurserysystemPeer::OXYGENMAX, FrynurserysystemPeer::ILLUMINATIONMIN, FrynurserysystemPeer::ILLUMINATIONMAX, FrynurserysystemPeer::STOCKINGDENSITYORG, FrynurserysystemPeer::STOCKINGDENSITY, FrynurserysystemPeer::UNIT, FrynurserysystemPeer::FOODI, FrynurserysystemPeer::FOODII, FrynurserysystemPeer::PRODUCTIONPERIODE, FrynurserysystemPeer::TIMETOALEVINSDAYSMIN, FrynurserysystemPeer::TIMETOALEVINSDAYSMAX, FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMIN, FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMAX, FrynurserysystemPeer::MORTALITYRATEORG, FrynurserysystemPeer::MORTALITYRATEMIN, FrynurserysystemPeer::MORTALITYRATEMAX, FrynurserysystemPeer::GROWTHRATE, FrynurserysystemPeer::FCR, FrynurserysystemPeer::PRODUCTIONCYCLE, FrynurserysystemPeer::UNITCYCLE, FrynurserysystemPeer::PRODUCTIONYEARORG, FrynurserysystemPeer::PRODUCTIONYEAR, FrynurserysystemPeer::UNITYEAR, FrynurserysystemPeer::COMMENT, FrynurserysystemPeer::ENTERED, FrynurserysystemPeer::DATEENTERED, FrynurserysystemPeer::MODIFIED, FrynurserysystemPeer::DATEMODIFIED, FrynurserysystemPeer::EXPERT, FrynurserysystemPeer::DATECHECKED, FrynurserysystemPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'SPECCODE', 'STOCKCODE', 'COMMONNAME', 'SPECIES', 'MAINREF', 'C_CODE', 'LOCALITY', 'DATAREF', 'NUMBEROFFRY', 'NURSERYSYSTEMI', 'NURSERYSYSTEMII', 'CULTURESYSTEM', 'MAINWATERSOURCE', 'SUPPLWATERSOURCE', 'TEMPMIN', 'TEMPMAX', 'SALINMIN', 'SALINMAX', 'PHMIN', 'PHMAX', 'OXYGENMIN', 'OXYGENMAX', 'ILLUMINATIONMIN', 'ILLUMINATIONMAX', 'STOCKINGDENSITYORG', 'STOCKINGDENSITY', 'UNIT', 'FOODI', 'FOODII', 'PRODUCTIONPERIODE', 'TIMETOALEVINSDAYSMIN', 'TIMETOALEVINSDAYSMAX', 'TIMETOALEVINSDAYSDEGMIN', 'TIMETOALEVINSDAYSDEGMAX', 'MORTALITYRATEORG', 'MORTALITYRATEMIN', 'MORTALITYRATEMAX', 'GROWTHRATE', 'FCR', 'PRODUCTIONCYCLE', 'UNITCYCLE', 'PRODUCTIONYEARORG', 'PRODUCTIONYEAR', 'UNITYEAR', 'COMMENT', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'Speccode', 'Stockcode', 'CommonName', 'Species', 'MainRef', 'C_Code', 'Locality', 'DataRef', 'NumberofFry', 'NurserySystemI', 'NurserySystemII', 'CultureSystem', 'MainWaterSource', 'SupplWaterSource', 'TempMin', 'TempMax', 'SalinMin', 'SalinMax', 'pHMin', 'pHMax', 'OxygenMin', 'OxygenMax', 'IlluminationMin', 'IlluminationMax', 'StockingDensityOrg', 'StockingDensity', 'Unit', 'FoodI', 'FoodII', 'ProductionPeriode', 'TimetoAlevinsDaysMin', 'TimetoAlevinsDaysMax', 'TimetoAlevinsDaysDegMin', 'TimetoAlevinsDaysDegMax', 'MortalityrateOrg', 'MortalityRateMin', 'MortalityRateMax', 'GrowthRate', 'FCR', 'ProductionCycle', 'UnitCycle', 'ProductionYearOrg', 'ProductionYear', 'UnitYear', 'Comment', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FrynurserysystemPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Stockcode' => 2, 'Commonname' => 3, 'Species' => 4, 'Mainref' => 5, 'CCode' => 6, 'Locality' => 7, 'Dataref' => 8, 'Numberoffry' => 9, 'Nurserysystemi' => 10, 'Nurserysystemii' => 11, 'Culturesystem' => 12, 'Mainwatersource' => 13, 'Supplwatersource' => 14, 'Tempmin' => 15, 'Tempmax' => 16, 'Salinmin' => 17, 'Salinmax' => 18, 'Phmin' => 19, 'Phmax' => 20, 'Oxygenmin' => 21, 'Oxygenmax' => 22, 'Illuminationmin' => 23, 'Illuminationmax' => 24, 'Stockingdensityorg' => 25, 'Stockingdensity' => 26, 'Unit' => 27, 'Foodi' => 28, 'Foodii' => 29, 'Productionperiode' => 30, 'Timetoalevinsdaysmin' => 31, 'Timetoalevinsdaysmax' => 32, 'Timetoalevinsdaysdegmin' => 33, 'Timetoalevinsdaysdegmax' => 34, 'Mortalityrateorg' => 35, 'Mortalityratemin' => 36, 'Mortalityratemax' => 37, 'Growthrate' => 38, 'Fcr' => 39, 'Productioncycle' => 40, 'Unitcycle' => 41, 'Productionyearorg' => 42, 'Productionyear' => 43, 'Unityear' => 44, 'Comment' => 45, 'Entered' => 46, 'Dateentered' => 47, 'Modified' => 48, 'Datemodified' => 49, 'Expert' => 50, 'Datechecked' => 51, 'Ts' => 52, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'speccode' => 1, 'stockcode' => 2, 'commonname' => 3, 'species' => 4, 'mainref' => 5, 'cCode' => 6, 'locality' => 7, 'dataref' => 8, 'numberoffry' => 9, 'nurserysystemi' => 10, 'nurserysystemii' => 11, 'culturesystem' => 12, 'mainwatersource' => 13, 'supplwatersource' => 14, 'tempmin' => 15, 'tempmax' => 16, 'salinmin' => 17, 'salinmax' => 18, 'phmin' => 19, 'phmax' => 20, 'oxygenmin' => 21, 'oxygenmax' => 22, 'illuminationmin' => 23, 'illuminationmax' => 24, 'stockingdensityorg' => 25, 'stockingdensity' => 26, 'unit' => 27, 'foodi' => 28, 'foodii' => 29, 'productionperiode' => 30, 'timetoalevinsdaysmin' => 31, 'timetoalevinsdaysmax' => 32, 'timetoalevinsdaysdegmin' => 33, 'timetoalevinsdaysdegmax' => 34, 'mortalityrateorg' => 35, 'mortalityratemin' => 36, 'mortalityratemax' => 37, 'growthrate' => 38, 'fcr' => 39, 'productioncycle' => 40, 'unitcycle' => 41, 'productionyearorg' => 42, 'productionyear' => 43, 'unityear' => 44, 'comment' => 45, 'entered' => 46, 'dateentered' => 47, 'modified' => 48, 'datemodified' => 49, 'expert' => 50, 'datechecked' => 51, 'ts' => 52, ),
        BasePeer::TYPE_COLNAME => array (FrynurserysystemPeer::AUTOCTR => 0, FrynurserysystemPeer::SPECCODE => 1, FrynurserysystemPeer::STOCKCODE => 2, FrynurserysystemPeer::COMMONNAME => 3, FrynurserysystemPeer::SPECIES => 4, FrynurserysystemPeer::MAINREF => 5, FrynurserysystemPeer::C_CODE => 6, FrynurserysystemPeer::LOCALITY => 7, FrynurserysystemPeer::DATAREF => 8, FrynurserysystemPeer::NUMBEROFFRY => 9, FrynurserysystemPeer::NURSERYSYSTEMI => 10, FrynurserysystemPeer::NURSERYSYSTEMII => 11, FrynurserysystemPeer::CULTURESYSTEM => 12, FrynurserysystemPeer::MAINWATERSOURCE => 13, FrynurserysystemPeer::SUPPLWATERSOURCE => 14, FrynurserysystemPeer::TEMPMIN => 15, FrynurserysystemPeer::TEMPMAX => 16, FrynurserysystemPeer::SALINMIN => 17, FrynurserysystemPeer::SALINMAX => 18, FrynurserysystemPeer::PHMIN => 19, FrynurserysystemPeer::PHMAX => 20, FrynurserysystemPeer::OXYGENMIN => 21, FrynurserysystemPeer::OXYGENMAX => 22, FrynurserysystemPeer::ILLUMINATIONMIN => 23, FrynurserysystemPeer::ILLUMINATIONMAX => 24, FrynurserysystemPeer::STOCKINGDENSITYORG => 25, FrynurserysystemPeer::STOCKINGDENSITY => 26, FrynurserysystemPeer::UNIT => 27, FrynurserysystemPeer::FOODI => 28, FrynurserysystemPeer::FOODII => 29, FrynurserysystemPeer::PRODUCTIONPERIODE => 30, FrynurserysystemPeer::TIMETOALEVINSDAYSMIN => 31, FrynurserysystemPeer::TIMETOALEVINSDAYSMAX => 32, FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMIN => 33, FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMAX => 34, FrynurserysystemPeer::MORTALITYRATEORG => 35, FrynurserysystemPeer::MORTALITYRATEMIN => 36, FrynurserysystemPeer::MORTALITYRATEMAX => 37, FrynurserysystemPeer::GROWTHRATE => 38, FrynurserysystemPeer::FCR => 39, FrynurserysystemPeer::PRODUCTIONCYCLE => 40, FrynurserysystemPeer::UNITCYCLE => 41, FrynurserysystemPeer::PRODUCTIONYEARORG => 42, FrynurserysystemPeer::PRODUCTIONYEAR => 43, FrynurserysystemPeer::UNITYEAR => 44, FrynurserysystemPeer::COMMENT => 45, FrynurserysystemPeer::ENTERED => 46, FrynurserysystemPeer::DATEENTERED => 47, FrynurserysystemPeer::MODIFIED => 48, FrynurserysystemPeer::DATEMODIFIED => 49, FrynurserysystemPeer::EXPERT => 50, FrynurserysystemPeer::DATECHECKED => 51, FrynurserysystemPeer::TS => 52, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'SPECCODE' => 1, 'STOCKCODE' => 2, 'COMMONNAME' => 3, 'SPECIES' => 4, 'MAINREF' => 5, 'C_CODE' => 6, 'LOCALITY' => 7, 'DATAREF' => 8, 'NUMBEROFFRY' => 9, 'NURSERYSYSTEMI' => 10, 'NURSERYSYSTEMII' => 11, 'CULTURESYSTEM' => 12, 'MAINWATERSOURCE' => 13, 'SUPPLWATERSOURCE' => 14, 'TEMPMIN' => 15, 'TEMPMAX' => 16, 'SALINMIN' => 17, 'SALINMAX' => 18, 'PHMIN' => 19, 'PHMAX' => 20, 'OXYGENMIN' => 21, 'OXYGENMAX' => 22, 'ILLUMINATIONMIN' => 23, 'ILLUMINATIONMAX' => 24, 'STOCKINGDENSITYORG' => 25, 'STOCKINGDENSITY' => 26, 'UNIT' => 27, 'FOODI' => 28, 'FOODII' => 29, 'PRODUCTIONPERIODE' => 30, 'TIMETOALEVINSDAYSMIN' => 31, 'TIMETOALEVINSDAYSMAX' => 32, 'TIMETOALEVINSDAYSDEGMIN' => 33, 'TIMETOALEVINSDAYSDEGMAX' => 34, 'MORTALITYRATEORG' => 35, 'MORTALITYRATEMIN' => 36, 'MORTALITYRATEMAX' => 37, 'GROWTHRATE' => 38, 'FCR' => 39, 'PRODUCTIONCYCLE' => 40, 'UNITCYCLE' => 41, 'PRODUCTIONYEARORG' => 42, 'PRODUCTIONYEAR' => 43, 'UNITYEAR' => 44, 'COMMENT' => 45, 'ENTERED' => 46, 'DATEENTERED' => 47, 'MODIFIED' => 48, 'DATEMODIFIED' => 49, 'EXPERT' => 50, 'DATECHECKED' => 51, 'TS' => 52, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'Speccode' => 1, 'Stockcode' => 2, 'CommonName' => 3, 'Species' => 4, 'MainRef' => 5, 'C_Code' => 6, 'Locality' => 7, 'DataRef' => 8, 'NumberofFry' => 9, 'NurserySystemI' => 10, 'NurserySystemII' => 11, 'CultureSystem' => 12, 'MainWaterSource' => 13, 'SupplWaterSource' => 14, 'TempMin' => 15, 'TempMax' => 16, 'SalinMin' => 17, 'SalinMax' => 18, 'pHMin' => 19, 'pHMax' => 20, 'OxygenMin' => 21, 'OxygenMax' => 22, 'IlluminationMin' => 23, 'IlluminationMax' => 24, 'StockingDensityOrg' => 25, 'StockingDensity' => 26, 'Unit' => 27, 'FoodI' => 28, 'FoodII' => 29, 'ProductionPeriode' => 30, 'TimetoAlevinsDaysMin' => 31, 'TimetoAlevinsDaysMax' => 32, 'TimetoAlevinsDaysDegMin' => 33, 'TimetoAlevinsDaysDegMax' => 34, 'MortalityrateOrg' => 35, 'MortalityRateMin' => 36, 'MortalityRateMax' => 37, 'GrowthRate' => 38, 'FCR' => 39, 'ProductionCycle' => 40, 'UnitCycle' => 41, 'ProductionYearOrg' => 42, 'ProductionYear' => 43, 'UnitYear' => 44, 'Comment' => 45, 'Entered' => 46, 'DateEntered' => 47, 'Modified' => 48, 'DateModified' => 49, 'Expert' => 50, 'DateChecked' => 51, 'TS' => 52, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, )
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
        $toNames = FrynurserysystemPeer::getFieldNames($toType);
        $key = isset(FrynurserysystemPeer::$fieldKeys[$fromType][$name]) ? FrynurserysystemPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FrynurserysystemPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FrynurserysystemPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FrynurserysystemPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. FrynurserysystemPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FrynurserysystemPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FrynurserysystemPeer::AUTOCTR);
            $criteria->addSelectColumn(FrynurserysystemPeer::SPECCODE);
            $criteria->addSelectColumn(FrynurserysystemPeer::STOCKCODE);
            $criteria->addSelectColumn(FrynurserysystemPeer::COMMONNAME);
            $criteria->addSelectColumn(FrynurserysystemPeer::SPECIES);
            $criteria->addSelectColumn(FrynurserysystemPeer::MAINREF);
            $criteria->addSelectColumn(FrynurserysystemPeer::C_CODE);
            $criteria->addSelectColumn(FrynurserysystemPeer::LOCALITY);
            $criteria->addSelectColumn(FrynurserysystemPeer::DATAREF);
            $criteria->addSelectColumn(FrynurserysystemPeer::NUMBEROFFRY);
            $criteria->addSelectColumn(FrynurserysystemPeer::NURSERYSYSTEMI);
            $criteria->addSelectColumn(FrynurserysystemPeer::NURSERYSYSTEMII);
            $criteria->addSelectColumn(FrynurserysystemPeer::CULTURESYSTEM);
            $criteria->addSelectColumn(FrynurserysystemPeer::MAINWATERSOURCE);
            $criteria->addSelectColumn(FrynurserysystemPeer::SUPPLWATERSOURCE);
            $criteria->addSelectColumn(FrynurserysystemPeer::TEMPMIN);
            $criteria->addSelectColumn(FrynurserysystemPeer::TEMPMAX);
            $criteria->addSelectColumn(FrynurserysystemPeer::SALINMIN);
            $criteria->addSelectColumn(FrynurserysystemPeer::SALINMAX);
            $criteria->addSelectColumn(FrynurserysystemPeer::PHMIN);
            $criteria->addSelectColumn(FrynurserysystemPeer::PHMAX);
            $criteria->addSelectColumn(FrynurserysystemPeer::OXYGENMIN);
            $criteria->addSelectColumn(FrynurserysystemPeer::OXYGENMAX);
            $criteria->addSelectColumn(FrynurserysystemPeer::ILLUMINATIONMIN);
            $criteria->addSelectColumn(FrynurserysystemPeer::ILLUMINATIONMAX);
            $criteria->addSelectColumn(FrynurserysystemPeer::STOCKINGDENSITYORG);
            $criteria->addSelectColumn(FrynurserysystemPeer::STOCKINGDENSITY);
            $criteria->addSelectColumn(FrynurserysystemPeer::UNIT);
            $criteria->addSelectColumn(FrynurserysystemPeer::FOODI);
            $criteria->addSelectColumn(FrynurserysystemPeer::FOODII);
            $criteria->addSelectColumn(FrynurserysystemPeer::PRODUCTIONPERIODE);
            $criteria->addSelectColumn(FrynurserysystemPeer::TIMETOALEVINSDAYSMIN);
            $criteria->addSelectColumn(FrynurserysystemPeer::TIMETOALEVINSDAYSMAX);
            $criteria->addSelectColumn(FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMIN);
            $criteria->addSelectColumn(FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMAX);
            $criteria->addSelectColumn(FrynurserysystemPeer::MORTALITYRATEORG);
            $criteria->addSelectColumn(FrynurserysystemPeer::MORTALITYRATEMIN);
            $criteria->addSelectColumn(FrynurserysystemPeer::MORTALITYRATEMAX);
            $criteria->addSelectColumn(FrynurserysystemPeer::GROWTHRATE);
            $criteria->addSelectColumn(FrynurserysystemPeer::FCR);
            $criteria->addSelectColumn(FrynurserysystemPeer::PRODUCTIONCYCLE);
            $criteria->addSelectColumn(FrynurserysystemPeer::UNITCYCLE);
            $criteria->addSelectColumn(FrynurserysystemPeer::PRODUCTIONYEARORG);
            $criteria->addSelectColumn(FrynurserysystemPeer::PRODUCTIONYEAR);
            $criteria->addSelectColumn(FrynurserysystemPeer::UNITYEAR);
            $criteria->addSelectColumn(FrynurserysystemPeer::COMMENT);
            $criteria->addSelectColumn(FrynurserysystemPeer::ENTERED);
            $criteria->addSelectColumn(FrynurserysystemPeer::DATEENTERED);
            $criteria->addSelectColumn(FrynurserysystemPeer::MODIFIED);
            $criteria->addSelectColumn(FrynurserysystemPeer::DATEMODIFIED);
            $criteria->addSelectColumn(FrynurserysystemPeer::EXPERT);
            $criteria->addSelectColumn(FrynurserysystemPeer::DATECHECKED);
            $criteria->addSelectColumn(FrynurserysystemPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.Stockcode');
            $criteria->addSelectColumn($alias . '.CommonName');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.MainRef');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.DataRef');
            $criteria->addSelectColumn($alias . '.NumberofFry');
            $criteria->addSelectColumn($alias . '.NurserySystemI');
            $criteria->addSelectColumn($alias . '.NurserySystemII');
            $criteria->addSelectColumn($alias . '.CultureSystem');
            $criteria->addSelectColumn($alias . '.MainWaterSource');
            $criteria->addSelectColumn($alias . '.SupplWaterSource');
            $criteria->addSelectColumn($alias . '.TempMin');
            $criteria->addSelectColumn($alias . '.TempMax');
            $criteria->addSelectColumn($alias . '.SalinMin');
            $criteria->addSelectColumn($alias . '.SalinMax');
            $criteria->addSelectColumn($alias . '.pHMin');
            $criteria->addSelectColumn($alias . '.pHMax');
            $criteria->addSelectColumn($alias . '.OxygenMin');
            $criteria->addSelectColumn($alias . '.OxygenMax');
            $criteria->addSelectColumn($alias . '.IlluminationMin');
            $criteria->addSelectColumn($alias . '.IlluminationMax');
            $criteria->addSelectColumn($alias . '.StockingDensityOrg');
            $criteria->addSelectColumn($alias . '.StockingDensity');
            $criteria->addSelectColumn($alias . '.Unit');
            $criteria->addSelectColumn($alias . '.FoodI');
            $criteria->addSelectColumn($alias . '.FoodII');
            $criteria->addSelectColumn($alias . '.ProductionPeriode');
            $criteria->addSelectColumn($alias . '.TimetoAlevinsDaysMin');
            $criteria->addSelectColumn($alias . '.TimetoAlevinsDaysMax');
            $criteria->addSelectColumn($alias . '.TimetoAlevinsDaysDegMin');
            $criteria->addSelectColumn($alias . '.TimetoAlevinsDaysDegMax');
            $criteria->addSelectColumn($alias . '.MortalityrateOrg');
            $criteria->addSelectColumn($alias . '.MortalityRateMin');
            $criteria->addSelectColumn($alias . '.MortalityRateMax');
            $criteria->addSelectColumn($alias . '.GrowthRate');
            $criteria->addSelectColumn($alias . '.FCR');
            $criteria->addSelectColumn($alias . '.ProductionCycle');
            $criteria->addSelectColumn($alias . '.UnitCycle');
            $criteria->addSelectColumn($alias . '.ProductionYearOrg');
            $criteria->addSelectColumn($alias . '.ProductionYear');
            $criteria->addSelectColumn($alias . '.UnitYear');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
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
        $criteria->setPrimaryTableName(FrynurserysystemPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FrynurserysystemPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FrynurserysystemPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FrynurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Frynurserysystem
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FrynurserysystemPeer::doSelect($critcopy, $con);
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
        return FrynurserysystemPeer::populateObjects(FrynurserysystemPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FrynurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FrynurserysystemPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FrynurserysystemPeer::DATABASE_NAME);

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
     * @param Frynurserysystem $obj A Frynurserysystem object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getAutoctr(), (string) $obj->getStockcode(), (string) $obj->getMainref()));
            } // if key === null
            FrynurserysystemPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Frynurserysystem object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Frynurserysystem) {
                $key = serialize(array((string) $value->getAutoctr(), (string) $value->getStockcode(), (string) $value->getMainref()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Frynurserysystem object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FrynurserysystemPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Frynurserysystem Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FrynurserysystemPeer::$instances[$key])) {
                return FrynurserysystemPeer::$instances[$key];
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
        foreach (FrynurserysystemPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FrynurserysystemPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to frynurserysystem
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
        if ($row[$startcol] === null && $row[$startcol + 2] === null && $row[$startcol + 5] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 2], (string) $row[$startcol + 5]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 2], (int) $row[$startcol + 5]);
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
        $cls = FrynurserysystemPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FrynurserysystemPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FrynurserysystemPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FrynurserysystemPeer::addInstanceToPool($obj, $key);
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
     * @return array (Frynurserysystem object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FrynurserysystemPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FrynurserysystemPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FrynurserysystemPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FrynurserysystemPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FrynurserysystemPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(FrynurserysystemPeer::DATABASE_NAME)->getTable(FrynurserysystemPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFrynurserysystemPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFrynurserysystemPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FrynurserysystemTableMap());
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
        return FrynurserysystemPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Frynurserysystem or Criteria object.
     *
     * @param      mixed $values Criteria or Frynurserysystem object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FrynurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Frynurserysystem object
        }

        if ($criteria->containsKey(FrynurserysystemPeer::AUTOCTR) && $criteria->keyContainsValue(FrynurserysystemPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.FrynurserysystemPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(FrynurserysystemPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Frynurserysystem or Criteria object.
     *
     * @param      mixed $values Criteria or Frynurserysystem object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FrynurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FrynurserysystemPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FrynurserysystemPeer::AUTOCTR);
            $value = $criteria->remove(FrynurserysystemPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(FrynurserysystemPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FrynurserysystemPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(FrynurserysystemPeer::STOCKCODE);
            $value = $criteria->remove(FrynurserysystemPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(FrynurserysystemPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FrynurserysystemPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(FrynurserysystemPeer::MAINREF);
            $value = $criteria->remove(FrynurserysystemPeer::MAINREF);
            if ($value) {
                $selectCriteria->add(FrynurserysystemPeer::MAINREF, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FrynurserysystemPeer::TABLE_NAME);
            }

        } else { // $values is Frynurserysystem object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FrynurserysystemPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the frynurserysystem table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FrynurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FrynurserysystemPeer::TABLE_NAME, $con, FrynurserysystemPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FrynurserysystemPeer::clearInstancePool();
            FrynurserysystemPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Frynurserysystem or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Frynurserysystem object or primary key or array of primary keys
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
            $con = Propel::getConnection(FrynurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FrynurserysystemPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Frynurserysystem) { // it's a model object
            // invalidate the cache for this single object
            FrynurserysystemPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FrynurserysystemPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(FrynurserysystemPeer::AUTOCTR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(FrynurserysystemPeer::STOCKCODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(FrynurserysystemPeer::MAINREF, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                FrynurserysystemPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FrynurserysystemPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FrynurserysystemPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Frynurserysystem object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Frynurserysystem $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FrynurserysystemPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FrynurserysystemPeer::TABLE_NAME);

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

        return BasePeer::doValidate(FrynurserysystemPeer::DATABASE_NAME, FrynurserysystemPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $autoctr
     * @param   int $stockcode
     * @param   int $mainref
     * @param      PropelPDO $con
     * @return Frynurserysystem
     */
    public static function retrieveByPK($autoctr, $stockcode, $mainref, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $autoctr, (string) $stockcode, (string) $mainref));
         if (null !== ($obj = FrynurserysystemPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FrynurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(FrynurserysystemPeer::DATABASE_NAME);
        $criteria->add(FrynurserysystemPeer::AUTOCTR, $autoctr);
        $criteria->add(FrynurserysystemPeer::STOCKCODE, $stockcode);
        $criteria->add(FrynurserysystemPeer::MAINREF, $mainref);
        $v = FrynurserysystemPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseFrynurserysystemPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFrynurserysystemPeer::buildTableMap();

