<?php


/**
 * Base static class for performing query and update operations on the 'larvalnurserysystem' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseLarvalnurserysystemPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'larvalnurserysystem';

    /** the related Propel class for this table */
    const OM_CLASS = 'Larvalnurserysystem';

    /** the related TableMap class for this table */
    const TM_CLASS = 'LarvalnurserysystemTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 57;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 57;

    /** the column name for the autoctr field */
    const AUTOCTR = 'larvalnurserysystem.autoctr';

    /** the column name for the Speccode field */
    const SPECCODE = 'larvalnurserysystem.Speccode';

    /** the column name for the Stockcode field */
    const STOCKCODE = 'larvalnurserysystem.Stockcode';

    /** the column name for the Species field */
    const SPECIES = 'larvalnurserysystem.Species';

    /** the column name for the CommonName field */
    const COMMONNAME = 'larvalnurserysystem.CommonName';

    /** the column name for the MainRef field */
    const MAINREF = 'larvalnurserysystem.MainRef';

    /** the column name for the C_Code field */
    const C_CODE = 'larvalnurserysystem.C_Code';

    /** the column name for the Locality field */
    const LOCALITY = 'larvalnurserysystem.Locality';

    /** the column name for the DataRef field */
    const DATAREF = 'larvalnurserysystem.DataRef';

    /** the column name for the NumberofLarvaeOrg field */
    const NUMBEROFLARVAEORG = 'larvalnurserysystem.NumberofLarvaeOrg';

    /** the column name for the NumberofLarvae field */
    const NUMBEROFLARVAE = 'larvalnurserysystem.NumberofLarvae';

    /** the column name for the NurserySystemI field */
    const NURSERYSYSTEMI = 'larvalnurserysystem.NurserySystemI';

    /** the column name for the NurserySystemII field */
    const NURSERYSYSTEMII = 'larvalnurserysystem.NurserySystemII';

    /** the column name for the CultureSystem field */
    const CULTURESYSTEM = 'larvalnurserysystem.CultureSystem';

    /** the column name for the MainWaterSource field */
    const MAINWATERSOURCE = 'larvalnurserysystem.MainWaterSource';

    /** the column name for the SupplWaterSource field */
    const SUPPLWATERSOURCE = 'larvalnurserysystem.SupplWaterSource';

    /** the column name for the TempMin field */
    const TEMPMIN = 'larvalnurserysystem.TempMin';

    /** the column name for the TempMax field */
    const TEMPMAX = 'larvalnurserysystem.TempMax';

    /** the column name for the SalinMin field */
    const SALINMIN = 'larvalnurserysystem.SalinMin';

    /** the column name for the SalinMax field */
    const SALINMAX = 'larvalnurserysystem.SalinMax';

    /** the column name for the pHMin field */
    const PHMIN = 'larvalnurserysystem.pHMin';

    /** the column name for the pHMax field */
    const PHMAX = 'larvalnurserysystem.pHMax';

    /** the column name for the OxygenMin field */
    const OXYGENMIN = 'larvalnurserysystem.OxygenMin';

    /** the column name for the OxygenMax field */
    const OXYGENMAX = 'larvalnurserysystem.OxygenMax';

    /** the column name for the IlluminationMin field */
    const ILLUMINATIONMIN = 'larvalnurserysystem.IlluminationMin';

    /** the column name for the IlluminationMax field */
    const ILLUMINATIONMAX = 'larvalnurserysystem.IlluminationMax';

    /** the column name for the StockingDensityOrg field */
    const STOCKINGDENSITYORG = 'larvalnurserysystem.StockingDensityOrg';

    /** the column name for the StockingDensity field */
    const STOCKINGDENSITY = 'larvalnurserysystem.StockingDensity';

    /** the column name for the FirstFeedDaysMin field */
    const FIRSTFEEDDAYSMIN = 'larvalnurserysystem.FirstFeedDaysMin';

    /** the column name for the FirstFeedDaysMax field */
    const FIRSTFEEDDAYSMAX = 'larvalnurserysystem.FirstFeedDaysMax';

    /** the column name for the FirstFeedDaysDegMin field */
    const FIRSTFEEDDAYSDEGMIN = 'larvalnurserysystem.FirstFeedDaysDegMin';

    /** the column name for the FirstFeedDaysDegMax field */
    const FIRSTFEEDDAYSDEGMAX = 'larvalnurserysystem.FirstFeedDaysDegMax';

    /** the column name for the Unit field */
    const UNIT = 'larvalnurserysystem.Unit';

    /** the column name for the FoodI field */
    const FOODI = 'larvalnurserysystem.FoodI';

    /** the column name for the FoodII field */
    const FOODII = 'larvalnurserysystem.FoodII';

    /** the column name for the ProductionPeriode field */
    const PRODUCTIONPERIODE = 'larvalnurserysystem.ProductionPeriode';

    /** the column name for the HatchingtoFryDaysMin field */
    const HATCHINGTOFRYDAYSMIN = 'larvalnurserysystem.HatchingtoFryDaysMin';

    /** the column name for the HatchingtoFryDaysMax field */
    const HATCHINGTOFRYDAYSMAX = 'larvalnurserysystem.HatchingtoFryDaysMax';

    /** the column name for the HatchingtoFryDaysDegMin field */
    const HATCHINGTOFRYDAYSDEGMIN = 'larvalnurserysystem.HatchingtoFryDaysDegMin';

    /** the column name for the HatchingtoFryDaysDegMax field */
    const HATCHINGTOFRYDAYSDEGMAX = 'larvalnurserysystem.HatchingtoFryDaysDegMax';

    /** the column name for the MortalityRate field */
    const MORTALITYRATE = 'larvalnurserysystem.MortalityRate';

    /** the column name for the MortalityRateMin field */
    const MORTALITYRATEMIN = 'larvalnurserysystem.MortalityRateMin';

    /** the column name for the MortalityRateMax field */
    const MORTALITYRATEMAX = 'larvalnurserysystem.MortalityRateMax';

    /** the column name for the GrowthRate field */
    const GROWTHRATE = 'larvalnurserysystem.GrowthRate';

    /** the column name for the FCR field */
    const FCR = 'larvalnurserysystem.FCR';

    /** the column name for the ProductionCycle field */
    const PRODUCTIONCYCLE = 'larvalnurserysystem.ProductionCycle';

    /** the column name for the UnitCycle field */
    const UNITCYCLE = 'larvalnurserysystem.UnitCycle';

    /** the column name for the ProductionYear field */
    const PRODUCTIONYEAR = 'larvalnurserysystem.ProductionYear';

    /** the column name for the UnitYear field */
    const UNITYEAR = 'larvalnurserysystem.UnitYear';

    /** the column name for the Comment field */
    const COMMENT = 'larvalnurserysystem.Comment';

    /** the column name for the Entered field */
    const ENTERED = 'larvalnurserysystem.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'larvalnurserysystem.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'larvalnurserysystem.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'larvalnurserysystem.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'larvalnurserysystem.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'larvalnurserysystem.DateChecked';

    /** the column name for the TS field */
    const TS = 'larvalnurserysystem.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Larvalnurserysystem objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Larvalnurserysystem[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. LarvalnurserysystemPeer::$fieldNames[LarvalnurserysystemPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Speccode', 'Stockcode', 'Species', 'Commonname', 'Mainref', 'CCode', 'Locality', 'Dataref', 'Numberoflarvaeorg', 'Numberoflarvae', 'Nurserysystemi', 'Nurserysystemii', 'Culturesystem', 'Mainwatersource', 'Supplwatersource', 'Tempmin', 'Tempmax', 'Salinmin', 'Salinmax', 'Phmin', 'Phmax', 'Oxygenmin', 'Oxygenmax', 'Illuminationmin', 'Illuminationmax', 'Stockingdensityorg', 'Stockingdensity', 'Firstfeeddaysmin', 'Firstfeeddaysmax', 'Firstfeeddaysdegmin', 'Firstfeeddaysdegmax', 'Unit', 'Foodi', 'Foodii', 'Productionperiode', 'Hatchingtofrydaysmin', 'Hatchingtofrydaysmax', 'Hatchingtofrydaysdegmin', 'Hatchingtofrydaysdegmax', 'Mortalityrate', 'Mortalityratemin', 'Mortalityratemax', 'Growthrate', 'Fcr', 'Productioncycle', 'Unitcycle', 'Productionyear', 'Unityear', 'Comment', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'speccode', 'stockcode', 'species', 'commonname', 'mainref', 'cCode', 'locality', 'dataref', 'numberoflarvaeorg', 'numberoflarvae', 'nurserysystemi', 'nurserysystemii', 'culturesystem', 'mainwatersource', 'supplwatersource', 'tempmin', 'tempmax', 'salinmin', 'salinmax', 'phmin', 'phmax', 'oxygenmin', 'oxygenmax', 'illuminationmin', 'illuminationmax', 'stockingdensityorg', 'stockingdensity', 'firstfeeddaysmin', 'firstfeeddaysmax', 'firstfeeddaysdegmin', 'firstfeeddaysdegmax', 'unit', 'foodi', 'foodii', 'productionperiode', 'hatchingtofrydaysmin', 'hatchingtofrydaysmax', 'hatchingtofrydaysdegmin', 'hatchingtofrydaysdegmax', 'mortalityrate', 'mortalityratemin', 'mortalityratemax', 'growthrate', 'fcr', 'productioncycle', 'unitcycle', 'productionyear', 'unityear', 'comment', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (LarvalnurserysystemPeer::AUTOCTR, LarvalnurserysystemPeer::SPECCODE, LarvalnurserysystemPeer::STOCKCODE, LarvalnurserysystemPeer::SPECIES, LarvalnurserysystemPeer::COMMONNAME, LarvalnurserysystemPeer::MAINREF, LarvalnurserysystemPeer::C_CODE, LarvalnurserysystemPeer::LOCALITY, LarvalnurserysystemPeer::DATAREF, LarvalnurserysystemPeer::NUMBEROFLARVAEORG, LarvalnurserysystemPeer::NUMBEROFLARVAE, LarvalnurserysystemPeer::NURSERYSYSTEMI, LarvalnurserysystemPeer::NURSERYSYSTEMII, LarvalnurserysystemPeer::CULTURESYSTEM, LarvalnurserysystemPeer::MAINWATERSOURCE, LarvalnurserysystemPeer::SUPPLWATERSOURCE, LarvalnurserysystemPeer::TEMPMIN, LarvalnurserysystemPeer::TEMPMAX, LarvalnurserysystemPeer::SALINMIN, LarvalnurserysystemPeer::SALINMAX, LarvalnurserysystemPeer::PHMIN, LarvalnurserysystemPeer::PHMAX, LarvalnurserysystemPeer::OXYGENMIN, LarvalnurserysystemPeer::OXYGENMAX, LarvalnurserysystemPeer::ILLUMINATIONMIN, LarvalnurserysystemPeer::ILLUMINATIONMAX, LarvalnurserysystemPeer::STOCKINGDENSITYORG, LarvalnurserysystemPeer::STOCKINGDENSITY, LarvalnurserysystemPeer::FIRSTFEEDDAYSMIN, LarvalnurserysystemPeer::FIRSTFEEDDAYSMAX, LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMIN, LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMAX, LarvalnurserysystemPeer::UNIT, LarvalnurserysystemPeer::FOODI, LarvalnurserysystemPeer::FOODII, LarvalnurserysystemPeer::PRODUCTIONPERIODE, LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMIN, LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMAX, LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMIN, LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMAX, LarvalnurserysystemPeer::MORTALITYRATE, LarvalnurserysystemPeer::MORTALITYRATEMIN, LarvalnurserysystemPeer::MORTALITYRATEMAX, LarvalnurserysystemPeer::GROWTHRATE, LarvalnurserysystemPeer::FCR, LarvalnurserysystemPeer::PRODUCTIONCYCLE, LarvalnurserysystemPeer::UNITCYCLE, LarvalnurserysystemPeer::PRODUCTIONYEAR, LarvalnurserysystemPeer::UNITYEAR, LarvalnurserysystemPeer::COMMENT, LarvalnurserysystemPeer::ENTERED, LarvalnurserysystemPeer::DATEENTERED, LarvalnurserysystemPeer::MODIFIED, LarvalnurserysystemPeer::DATEMODIFIED, LarvalnurserysystemPeer::EXPERT, LarvalnurserysystemPeer::DATECHECKED, LarvalnurserysystemPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'SPECCODE', 'STOCKCODE', 'SPECIES', 'COMMONNAME', 'MAINREF', 'C_CODE', 'LOCALITY', 'DATAREF', 'NUMBEROFLARVAEORG', 'NUMBEROFLARVAE', 'NURSERYSYSTEMI', 'NURSERYSYSTEMII', 'CULTURESYSTEM', 'MAINWATERSOURCE', 'SUPPLWATERSOURCE', 'TEMPMIN', 'TEMPMAX', 'SALINMIN', 'SALINMAX', 'PHMIN', 'PHMAX', 'OXYGENMIN', 'OXYGENMAX', 'ILLUMINATIONMIN', 'ILLUMINATIONMAX', 'STOCKINGDENSITYORG', 'STOCKINGDENSITY', 'FIRSTFEEDDAYSMIN', 'FIRSTFEEDDAYSMAX', 'FIRSTFEEDDAYSDEGMIN', 'FIRSTFEEDDAYSDEGMAX', 'UNIT', 'FOODI', 'FOODII', 'PRODUCTIONPERIODE', 'HATCHINGTOFRYDAYSMIN', 'HATCHINGTOFRYDAYSMAX', 'HATCHINGTOFRYDAYSDEGMIN', 'HATCHINGTOFRYDAYSDEGMAX', 'MORTALITYRATE', 'MORTALITYRATEMIN', 'MORTALITYRATEMAX', 'GROWTHRATE', 'FCR', 'PRODUCTIONCYCLE', 'UNITCYCLE', 'PRODUCTIONYEAR', 'UNITYEAR', 'COMMENT', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'Speccode', 'Stockcode', 'Species', 'CommonName', 'MainRef', 'C_Code', 'Locality', 'DataRef', 'NumberofLarvaeOrg', 'NumberofLarvae', 'NurserySystemI', 'NurserySystemII', 'CultureSystem', 'MainWaterSource', 'SupplWaterSource', 'TempMin', 'TempMax', 'SalinMin', 'SalinMax', 'pHMin', 'pHMax', 'OxygenMin', 'OxygenMax', 'IlluminationMin', 'IlluminationMax', 'StockingDensityOrg', 'StockingDensity', 'FirstFeedDaysMin', 'FirstFeedDaysMax', 'FirstFeedDaysDegMin', 'FirstFeedDaysDegMax', 'Unit', 'FoodI', 'FoodII', 'ProductionPeriode', 'HatchingtoFryDaysMin', 'HatchingtoFryDaysMax', 'HatchingtoFryDaysDegMin', 'HatchingtoFryDaysDegMax', 'MortalityRate', 'MortalityRateMin', 'MortalityRateMax', 'GrowthRate', 'FCR', 'ProductionCycle', 'UnitCycle', 'ProductionYear', 'UnitYear', 'Comment', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. LarvalnurserysystemPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Stockcode' => 2, 'Species' => 3, 'Commonname' => 4, 'Mainref' => 5, 'CCode' => 6, 'Locality' => 7, 'Dataref' => 8, 'Numberoflarvaeorg' => 9, 'Numberoflarvae' => 10, 'Nurserysystemi' => 11, 'Nurserysystemii' => 12, 'Culturesystem' => 13, 'Mainwatersource' => 14, 'Supplwatersource' => 15, 'Tempmin' => 16, 'Tempmax' => 17, 'Salinmin' => 18, 'Salinmax' => 19, 'Phmin' => 20, 'Phmax' => 21, 'Oxygenmin' => 22, 'Oxygenmax' => 23, 'Illuminationmin' => 24, 'Illuminationmax' => 25, 'Stockingdensityorg' => 26, 'Stockingdensity' => 27, 'Firstfeeddaysmin' => 28, 'Firstfeeddaysmax' => 29, 'Firstfeeddaysdegmin' => 30, 'Firstfeeddaysdegmax' => 31, 'Unit' => 32, 'Foodi' => 33, 'Foodii' => 34, 'Productionperiode' => 35, 'Hatchingtofrydaysmin' => 36, 'Hatchingtofrydaysmax' => 37, 'Hatchingtofrydaysdegmin' => 38, 'Hatchingtofrydaysdegmax' => 39, 'Mortalityrate' => 40, 'Mortalityratemin' => 41, 'Mortalityratemax' => 42, 'Growthrate' => 43, 'Fcr' => 44, 'Productioncycle' => 45, 'Unitcycle' => 46, 'Productionyear' => 47, 'Unityear' => 48, 'Comment' => 49, 'Entered' => 50, 'Dateentered' => 51, 'Modified' => 52, 'Datemodified' => 53, 'Expert' => 54, 'Datechecked' => 55, 'Ts' => 56, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'speccode' => 1, 'stockcode' => 2, 'species' => 3, 'commonname' => 4, 'mainref' => 5, 'cCode' => 6, 'locality' => 7, 'dataref' => 8, 'numberoflarvaeorg' => 9, 'numberoflarvae' => 10, 'nurserysystemi' => 11, 'nurserysystemii' => 12, 'culturesystem' => 13, 'mainwatersource' => 14, 'supplwatersource' => 15, 'tempmin' => 16, 'tempmax' => 17, 'salinmin' => 18, 'salinmax' => 19, 'phmin' => 20, 'phmax' => 21, 'oxygenmin' => 22, 'oxygenmax' => 23, 'illuminationmin' => 24, 'illuminationmax' => 25, 'stockingdensityorg' => 26, 'stockingdensity' => 27, 'firstfeeddaysmin' => 28, 'firstfeeddaysmax' => 29, 'firstfeeddaysdegmin' => 30, 'firstfeeddaysdegmax' => 31, 'unit' => 32, 'foodi' => 33, 'foodii' => 34, 'productionperiode' => 35, 'hatchingtofrydaysmin' => 36, 'hatchingtofrydaysmax' => 37, 'hatchingtofrydaysdegmin' => 38, 'hatchingtofrydaysdegmax' => 39, 'mortalityrate' => 40, 'mortalityratemin' => 41, 'mortalityratemax' => 42, 'growthrate' => 43, 'fcr' => 44, 'productioncycle' => 45, 'unitcycle' => 46, 'productionyear' => 47, 'unityear' => 48, 'comment' => 49, 'entered' => 50, 'dateentered' => 51, 'modified' => 52, 'datemodified' => 53, 'expert' => 54, 'datechecked' => 55, 'ts' => 56, ),
        BasePeer::TYPE_COLNAME => array (LarvalnurserysystemPeer::AUTOCTR => 0, LarvalnurserysystemPeer::SPECCODE => 1, LarvalnurserysystemPeer::STOCKCODE => 2, LarvalnurserysystemPeer::SPECIES => 3, LarvalnurserysystemPeer::COMMONNAME => 4, LarvalnurserysystemPeer::MAINREF => 5, LarvalnurserysystemPeer::C_CODE => 6, LarvalnurserysystemPeer::LOCALITY => 7, LarvalnurserysystemPeer::DATAREF => 8, LarvalnurserysystemPeer::NUMBEROFLARVAEORG => 9, LarvalnurserysystemPeer::NUMBEROFLARVAE => 10, LarvalnurserysystemPeer::NURSERYSYSTEMI => 11, LarvalnurserysystemPeer::NURSERYSYSTEMII => 12, LarvalnurserysystemPeer::CULTURESYSTEM => 13, LarvalnurserysystemPeer::MAINWATERSOURCE => 14, LarvalnurserysystemPeer::SUPPLWATERSOURCE => 15, LarvalnurserysystemPeer::TEMPMIN => 16, LarvalnurserysystemPeer::TEMPMAX => 17, LarvalnurserysystemPeer::SALINMIN => 18, LarvalnurserysystemPeer::SALINMAX => 19, LarvalnurserysystemPeer::PHMIN => 20, LarvalnurserysystemPeer::PHMAX => 21, LarvalnurserysystemPeer::OXYGENMIN => 22, LarvalnurserysystemPeer::OXYGENMAX => 23, LarvalnurserysystemPeer::ILLUMINATIONMIN => 24, LarvalnurserysystemPeer::ILLUMINATIONMAX => 25, LarvalnurserysystemPeer::STOCKINGDENSITYORG => 26, LarvalnurserysystemPeer::STOCKINGDENSITY => 27, LarvalnurserysystemPeer::FIRSTFEEDDAYSMIN => 28, LarvalnurserysystemPeer::FIRSTFEEDDAYSMAX => 29, LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMIN => 30, LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMAX => 31, LarvalnurserysystemPeer::UNIT => 32, LarvalnurserysystemPeer::FOODI => 33, LarvalnurserysystemPeer::FOODII => 34, LarvalnurserysystemPeer::PRODUCTIONPERIODE => 35, LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMIN => 36, LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMAX => 37, LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMIN => 38, LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMAX => 39, LarvalnurserysystemPeer::MORTALITYRATE => 40, LarvalnurserysystemPeer::MORTALITYRATEMIN => 41, LarvalnurserysystemPeer::MORTALITYRATEMAX => 42, LarvalnurserysystemPeer::GROWTHRATE => 43, LarvalnurserysystemPeer::FCR => 44, LarvalnurserysystemPeer::PRODUCTIONCYCLE => 45, LarvalnurserysystemPeer::UNITCYCLE => 46, LarvalnurserysystemPeer::PRODUCTIONYEAR => 47, LarvalnurserysystemPeer::UNITYEAR => 48, LarvalnurserysystemPeer::COMMENT => 49, LarvalnurserysystemPeer::ENTERED => 50, LarvalnurserysystemPeer::DATEENTERED => 51, LarvalnurserysystemPeer::MODIFIED => 52, LarvalnurserysystemPeer::DATEMODIFIED => 53, LarvalnurserysystemPeer::EXPERT => 54, LarvalnurserysystemPeer::DATECHECKED => 55, LarvalnurserysystemPeer::TS => 56, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'SPECCODE' => 1, 'STOCKCODE' => 2, 'SPECIES' => 3, 'COMMONNAME' => 4, 'MAINREF' => 5, 'C_CODE' => 6, 'LOCALITY' => 7, 'DATAREF' => 8, 'NUMBEROFLARVAEORG' => 9, 'NUMBEROFLARVAE' => 10, 'NURSERYSYSTEMI' => 11, 'NURSERYSYSTEMII' => 12, 'CULTURESYSTEM' => 13, 'MAINWATERSOURCE' => 14, 'SUPPLWATERSOURCE' => 15, 'TEMPMIN' => 16, 'TEMPMAX' => 17, 'SALINMIN' => 18, 'SALINMAX' => 19, 'PHMIN' => 20, 'PHMAX' => 21, 'OXYGENMIN' => 22, 'OXYGENMAX' => 23, 'ILLUMINATIONMIN' => 24, 'ILLUMINATIONMAX' => 25, 'STOCKINGDENSITYORG' => 26, 'STOCKINGDENSITY' => 27, 'FIRSTFEEDDAYSMIN' => 28, 'FIRSTFEEDDAYSMAX' => 29, 'FIRSTFEEDDAYSDEGMIN' => 30, 'FIRSTFEEDDAYSDEGMAX' => 31, 'UNIT' => 32, 'FOODI' => 33, 'FOODII' => 34, 'PRODUCTIONPERIODE' => 35, 'HATCHINGTOFRYDAYSMIN' => 36, 'HATCHINGTOFRYDAYSMAX' => 37, 'HATCHINGTOFRYDAYSDEGMIN' => 38, 'HATCHINGTOFRYDAYSDEGMAX' => 39, 'MORTALITYRATE' => 40, 'MORTALITYRATEMIN' => 41, 'MORTALITYRATEMAX' => 42, 'GROWTHRATE' => 43, 'FCR' => 44, 'PRODUCTIONCYCLE' => 45, 'UNITCYCLE' => 46, 'PRODUCTIONYEAR' => 47, 'UNITYEAR' => 48, 'COMMENT' => 49, 'ENTERED' => 50, 'DATEENTERED' => 51, 'MODIFIED' => 52, 'DATEMODIFIED' => 53, 'EXPERT' => 54, 'DATECHECKED' => 55, 'TS' => 56, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'Speccode' => 1, 'Stockcode' => 2, 'Species' => 3, 'CommonName' => 4, 'MainRef' => 5, 'C_Code' => 6, 'Locality' => 7, 'DataRef' => 8, 'NumberofLarvaeOrg' => 9, 'NumberofLarvae' => 10, 'NurserySystemI' => 11, 'NurserySystemII' => 12, 'CultureSystem' => 13, 'MainWaterSource' => 14, 'SupplWaterSource' => 15, 'TempMin' => 16, 'TempMax' => 17, 'SalinMin' => 18, 'SalinMax' => 19, 'pHMin' => 20, 'pHMax' => 21, 'OxygenMin' => 22, 'OxygenMax' => 23, 'IlluminationMin' => 24, 'IlluminationMax' => 25, 'StockingDensityOrg' => 26, 'StockingDensity' => 27, 'FirstFeedDaysMin' => 28, 'FirstFeedDaysMax' => 29, 'FirstFeedDaysDegMin' => 30, 'FirstFeedDaysDegMax' => 31, 'Unit' => 32, 'FoodI' => 33, 'FoodII' => 34, 'ProductionPeriode' => 35, 'HatchingtoFryDaysMin' => 36, 'HatchingtoFryDaysMax' => 37, 'HatchingtoFryDaysDegMin' => 38, 'HatchingtoFryDaysDegMax' => 39, 'MortalityRate' => 40, 'MortalityRateMin' => 41, 'MortalityRateMax' => 42, 'GrowthRate' => 43, 'FCR' => 44, 'ProductionCycle' => 45, 'UnitCycle' => 46, 'ProductionYear' => 47, 'UnitYear' => 48, 'Comment' => 49, 'Entered' => 50, 'DateEntered' => 51, 'Modified' => 52, 'DateModified' => 53, 'Expert' => 54, 'DateChecked' => 55, 'TS' => 56, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, )
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
        $toNames = LarvalnurserysystemPeer::getFieldNames($toType);
        $key = isset(LarvalnurserysystemPeer::$fieldKeys[$fromType][$name]) ? LarvalnurserysystemPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(LarvalnurserysystemPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, LarvalnurserysystemPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return LarvalnurserysystemPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. LarvalnurserysystemPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(LarvalnurserysystemPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(LarvalnurserysystemPeer::AUTOCTR);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::SPECCODE);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::STOCKCODE);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::SPECIES);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::COMMONNAME);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::MAINREF);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::C_CODE);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::LOCALITY);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::DATAREF);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::NUMBEROFLARVAEORG);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::NUMBEROFLARVAE);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::NURSERYSYSTEMI);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::NURSERYSYSTEMII);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::CULTURESYSTEM);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::MAINWATERSOURCE);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::SUPPLWATERSOURCE);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::TEMPMIN);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::TEMPMAX);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::SALINMIN);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::SALINMAX);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::PHMIN);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::PHMAX);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::OXYGENMIN);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::OXYGENMAX);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::ILLUMINATIONMIN);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::ILLUMINATIONMAX);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::STOCKINGDENSITYORG);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::STOCKINGDENSITY);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::FIRSTFEEDDAYSMIN);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::FIRSTFEEDDAYSMAX);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMIN);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMAX);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::UNIT);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::FOODI);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::FOODII);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::PRODUCTIONPERIODE);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMIN);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMAX);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMIN);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMAX);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::MORTALITYRATE);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::MORTALITYRATEMIN);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::MORTALITYRATEMAX);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::GROWTHRATE);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::FCR);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::PRODUCTIONCYCLE);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::UNITCYCLE);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::PRODUCTIONYEAR);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::UNITYEAR);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::COMMENT);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::ENTERED);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::DATEENTERED);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::MODIFIED);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::DATEMODIFIED);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::EXPERT);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::DATECHECKED);
            $criteria->addSelectColumn(LarvalnurserysystemPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.Stockcode');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.CommonName');
            $criteria->addSelectColumn($alias . '.MainRef');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.DataRef');
            $criteria->addSelectColumn($alias . '.NumberofLarvaeOrg');
            $criteria->addSelectColumn($alias . '.NumberofLarvae');
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
            $criteria->addSelectColumn($alias . '.FirstFeedDaysMin');
            $criteria->addSelectColumn($alias . '.FirstFeedDaysMax');
            $criteria->addSelectColumn($alias . '.FirstFeedDaysDegMin');
            $criteria->addSelectColumn($alias . '.FirstFeedDaysDegMax');
            $criteria->addSelectColumn($alias . '.Unit');
            $criteria->addSelectColumn($alias . '.FoodI');
            $criteria->addSelectColumn($alias . '.FoodII');
            $criteria->addSelectColumn($alias . '.ProductionPeriode');
            $criteria->addSelectColumn($alias . '.HatchingtoFryDaysMin');
            $criteria->addSelectColumn($alias . '.HatchingtoFryDaysMax');
            $criteria->addSelectColumn($alias . '.HatchingtoFryDaysDegMin');
            $criteria->addSelectColumn($alias . '.HatchingtoFryDaysDegMax');
            $criteria->addSelectColumn($alias . '.MortalityRate');
            $criteria->addSelectColumn($alias . '.MortalityRateMin');
            $criteria->addSelectColumn($alias . '.MortalityRateMax');
            $criteria->addSelectColumn($alias . '.GrowthRate');
            $criteria->addSelectColumn($alias . '.FCR');
            $criteria->addSelectColumn($alias . '.ProductionCycle');
            $criteria->addSelectColumn($alias . '.UnitCycle');
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
        $criteria->setPrimaryTableName(LarvalnurserysystemPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LarvalnurserysystemPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(LarvalnurserysystemPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(LarvalnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Larvalnurserysystem
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = LarvalnurserysystemPeer::doSelect($critcopy, $con);
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
        return LarvalnurserysystemPeer::populateObjects(LarvalnurserysystemPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(LarvalnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            LarvalnurserysystemPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(LarvalnurserysystemPeer::DATABASE_NAME);

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
     * @param Larvalnurserysystem $obj A Larvalnurserysystem object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getAutoctr(), (string) $obj->getStockcode(), (string) $obj->getMainref()));
            } // if key === null
            LarvalnurserysystemPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Larvalnurserysystem object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Larvalnurserysystem) {
                $key = serialize(array((string) $value->getAutoctr(), (string) $value->getStockcode(), (string) $value->getMainref()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Larvalnurserysystem object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(LarvalnurserysystemPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Larvalnurserysystem Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(LarvalnurserysystemPeer::$instances[$key])) {
                return LarvalnurserysystemPeer::$instances[$key];
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
        foreach (LarvalnurserysystemPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        LarvalnurserysystemPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to larvalnurserysystem
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
        $cls = LarvalnurserysystemPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = LarvalnurserysystemPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = LarvalnurserysystemPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                LarvalnurserysystemPeer::addInstanceToPool($obj, $key);
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
     * @return array (Larvalnurserysystem object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = LarvalnurserysystemPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = LarvalnurserysystemPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + LarvalnurserysystemPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = LarvalnurserysystemPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            LarvalnurserysystemPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(LarvalnurserysystemPeer::DATABASE_NAME)->getTable(LarvalnurserysystemPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseLarvalnurserysystemPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseLarvalnurserysystemPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \LarvalnurserysystemTableMap());
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
        return LarvalnurserysystemPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Larvalnurserysystem or Criteria object.
     *
     * @param      mixed $values Criteria or Larvalnurserysystem object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LarvalnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Larvalnurserysystem object
        }

        if ($criteria->containsKey(LarvalnurserysystemPeer::AUTOCTR) && $criteria->keyContainsValue(LarvalnurserysystemPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.LarvalnurserysystemPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(LarvalnurserysystemPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Larvalnurserysystem or Criteria object.
     *
     * @param      mixed $values Criteria or Larvalnurserysystem object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LarvalnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(LarvalnurserysystemPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(LarvalnurserysystemPeer::AUTOCTR);
            $value = $criteria->remove(LarvalnurserysystemPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(LarvalnurserysystemPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(LarvalnurserysystemPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(LarvalnurserysystemPeer::STOCKCODE);
            $value = $criteria->remove(LarvalnurserysystemPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(LarvalnurserysystemPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(LarvalnurserysystemPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(LarvalnurserysystemPeer::MAINREF);
            $value = $criteria->remove(LarvalnurserysystemPeer::MAINREF);
            if ($value) {
                $selectCriteria->add(LarvalnurserysystemPeer::MAINREF, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(LarvalnurserysystemPeer::TABLE_NAME);
            }

        } else { // $values is Larvalnurserysystem object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(LarvalnurserysystemPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the larvalnurserysystem table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LarvalnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(LarvalnurserysystemPeer::TABLE_NAME, $con, LarvalnurserysystemPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            LarvalnurserysystemPeer::clearInstancePool();
            LarvalnurserysystemPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Larvalnurserysystem or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Larvalnurserysystem object or primary key or array of primary keys
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
            $con = Propel::getConnection(LarvalnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            LarvalnurserysystemPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Larvalnurserysystem) { // it's a model object
            // invalidate the cache for this single object
            LarvalnurserysystemPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(LarvalnurserysystemPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(LarvalnurserysystemPeer::AUTOCTR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(LarvalnurserysystemPeer::STOCKCODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(LarvalnurserysystemPeer::MAINREF, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                LarvalnurserysystemPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(LarvalnurserysystemPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            LarvalnurserysystemPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Larvalnurserysystem object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Larvalnurserysystem $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(LarvalnurserysystemPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(LarvalnurserysystemPeer::TABLE_NAME);

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

        return BasePeer::doValidate(LarvalnurserysystemPeer::DATABASE_NAME, LarvalnurserysystemPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $autoctr
     * @param   int $stockcode
     * @param   int $mainref
     * @param      PropelPDO $con
     * @return Larvalnurserysystem
     */
    public static function retrieveByPK($autoctr, $stockcode, $mainref, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $autoctr, (string) $stockcode, (string) $mainref));
         if (null !== ($obj = LarvalnurserysystemPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(LarvalnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(LarvalnurserysystemPeer::DATABASE_NAME);
        $criteria->add(LarvalnurserysystemPeer::AUTOCTR, $autoctr);
        $criteria->add(LarvalnurserysystemPeer::STOCKCODE, $stockcode);
        $criteria->add(LarvalnurserysystemPeer::MAINREF, $mainref);
        $v = LarvalnurserysystemPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseLarvalnurserysystemPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseLarvalnurserysystemPeer::buildTableMap();

