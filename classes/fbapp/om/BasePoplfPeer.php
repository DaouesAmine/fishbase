<?php


/**
 * Base static class for performing query and update operations on the 'poplf' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BasePoplfPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'poplf';

    /** the related Propel class for this table */
    const OM_CLASS = 'Poplf';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PoplfTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 64;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 64;

    /** the column name for the LFCode field */
    const LFCODE = 'poplf.LFCode';

    /** the column name for the Stockcode field */
    const STOCKCODE = 'poplf.Stockcode';

    /** the column name for the Speccode field */
    const SPECCODE = 'poplf.Speccode';

    /** the column name for the LFRefno field */
    const LFREFNO = 'poplf.LFRefno';

    /** the column name for the Sex field */
    const SEX = 'poplf.Sex';

    /** the column name for the Locality field */
    const LOCALITY = 'poplf.Locality';

    /** the column name for the C_Code field */
    const C_CODE = 'poplf.C_Code';

    /** the column name for the LatDeg field */
    const LATDEG = 'poplf.LatDeg';

    /** the column name for the LatMin field */
    const LATMIN = 'poplf.LatMin';

    /** the column name for the NorthSouth field */
    const NORTHSOUTH = 'poplf.NorthSouth';

    /** the column name for the LatDegS field */
    const LATDEGS = 'poplf.LatDegS';

    /** the column name for the LatMinS field */
    const LATMINS = 'poplf.LatMinS';

    /** the column name for the NorthSouthS field */
    const NORTHSOUTHS = 'poplf.NorthSouthS';

    /** the column name for the LongDeg field */
    const LONGDEG = 'poplf.LongDeg';

    /** the column name for the LongMin field */
    const LONGMIN = 'poplf.LongMin';

    /** the column name for the EastWest field */
    const EASTWEST = 'poplf.EastWest';

    /** the column name for the LongDegE field */
    const LONGDEGE = 'poplf.LongDegE';

    /** the column name for the LongMinE field */
    const LONGMINE = 'poplf.LongMinE';

    /** the column name for the EastWestE field */
    const EASTWESTE = 'poplf.EastWestE';

    /** the column name for the Accuracy field */
    const ACCURACY = 'poplf.Accuracy';

    /** the column name for the DepthMin field */
    const DEPTHMIN = 'poplf.DepthMin';

    /** the column name for the DepthMax field */
    const DEPTHMAX = 'poplf.DepthMax';

    /** the column name for the TempMin field */
    const TEMPMIN = 'poplf.TempMin';

    /** the column name for the TempMax field */
    const TEMPMAX = 'poplf.TempMax';

    /** the column name for the MLMin field */
    const MLMIN = 'poplf.MLMin';

    /** the column name for the MLMax field */
    const MLMAX = 'poplf.MLMax';

    /** the column name for the MeanLength field */
    const MEANLENGTH = 'poplf.MeanLength';

    /** the column name for the Lm field */
    const LM = 'poplf.Lm';

    /** the column name for the Loo field */
    const LOO = 'poplf.Loo';

    /** the column name for the Lopt field */
    const LOPT = 'poplf.Lopt';

    /** the column name for the Lc field */
    const LC = 'poplf.Lc';

    /** the column name for the SourceLinf field */
    const SOURCELINF = 'poplf.SourceLinf';

    /** the column name for the a field */
    const A = 'poplf.a';

    /** the column name for the b field */
    const B = 'poplf.b';

    /** the column name for the LWRef field */
    const LWREF = 'poplf.LWRef';

    /** the column name for the LType field */
    const LTYPE = 'poplf.LType';

    /** the column name for the F field */
    const F = 'poplf.F';

    /** the column name for the Z field */
    const Z = 'poplf.Z';

    /** the column name for the E field */
    const E = 'poplf.E';

    /** the column name for the M field */
    const M = 'poplf.M';

    /** the column name for the Unexploited field */
    const UNEXPLOITED = 'poplf.Unexploited';

    /** the column name for the DataType field */
    const DATATYPE = 'poplf.DataType';

    /** the column name for the GrowthLoo field */
    const GROWTHLOO = 'poplf.GrowthLoo';

    /** the column name for the GrowthK field */
    const GROWTHK = 'poplf.GrowthK';

    /** the column name for the GrowthRef field */
    const GROWTHREF = 'poplf.GrowthRef';

    /** the column name for the GrowthM field */
    const GROWTHM = 'poplf.GrowthM';

    /** the column name for the GrowthMRef field */
    const GROWTHMREF = 'poplf.GrowthMRef';

    /** the column name for the tm field */
    const TM = 'poplf.tm';

    /** the column name for the FrequencyType field */
    const FREQUENCYTYPE = 'poplf.FrequencyType';

    /** the column name for the ClassInterval field */
    const CLASSINTERVAL = 'poplf.ClassInterval';

    /** the column name for the Gear field */
    const GEAR = 'poplf.Gear';

    /** the column name for the GearII field */
    const GEARII = 'poplf.GearII';

    /** the column name for the YearFrom field */
    const YEARFROM = 'poplf.YearFrom';

    /** the column name for the YearTo field */
    const YEARTO = 'poplf.YearTo';

    /** the column name for the Remark field */
    const REMARK = 'poplf.Remark';

    /** the column name for the Provider field */
    const PROVIDER = 'poplf.Provider';

    /** the column name for the EMail field */
    const EMAIL = 'poplf.EMail';

    /** the column name for the Entered field */
    const ENTERED = 'poplf.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'poplf.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'poplf.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'poplf.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'poplf.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'poplf.DateChecked';

    /** the column name for the TS field */
    const TS = 'poplf.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Poplf objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Poplf[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PoplfPeer::$fieldNames[PoplfPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Lfcode', 'Stockcode', 'Speccode', 'Lfrefno', 'Sex', 'Locality', 'CCode', 'Latdeg', 'Latmin', 'Northsouth', 'Latdegs', 'Latmins', 'Northsouths', 'Longdeg', 'Longmin', 'Eastwest', 'Longdege', 'Longmine', 'Eastweste', 'Accuracy', 'Depthmin', 'Depthmax', 'Tempmin', 'Tempmax', 'Mlmin', 'Mlmax', 'Meanlength', 'Lm', 'Loo', 'Lopt', 'Lc', 'Sourcelinf', 'A', 'B', 'Lwref', 'Ltype', 'F', 'Z', 'E', 'M', 'Unexploited', 'Datatype', 'Growthloo', 'Growthk', 'Growthref', 'Growthm', 'Growthmref', 'Tm', 'Frequencytype', 'Classinterval', 'Gear', 'Gearii', 'Yearfrom', 'Yearto', 'Remark', 'Provider', 'Email', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('lfcode', 'stockcode', 'speccode', 'lfrefno', 'sex', 'locality', 'cCode', 'latdeg', 'latmin', 'northsouth', 'latdegs', 'latmins', 'northsouths', 'longdeg', 'longmin', 'eastwest', 'longdege', 'longmine', 'eastweste', 'accuracy', 'depthmin', 'depthmax', 'tempmin', 'tempmax', 'mlmin', 'mlmax', 'meanlength', 'lm', 'loo', 'lopt', 'lc', 'sourcelinf', 'a', 'b', 'lwref', 'ltype', 'f', 'z', 'e', 'm', 'unexploited', 'datatype', 'growthloo', 'growthk', 'growthref', 'growthm', 'growthmref', 'tm', 'frequencytype', 'classinterval', 'gear', 'gearii', 'yearfrom', 'yearto', 'remark', 'provider', 'email', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (PoplfPeer::LFCODE, PoplfPeer::STOCKCODE, PoplfPeer::SPECCODE, PoplfPeer::LFREFNO, PoplfPeer::SEX, PoplfPeer::LOCALITY, PoplfPeer::C_CODE, PoplfPeer::LATDEG, PoplfPeer::LATMIN, PoplfPeer::NORTHSOUTH, PoplfPeer::LATDEGS, PoplfPeer::LATMINS, PoplfPeer::NORTHSOUTHS, PoplfPeer::LONGDEG, PoplfPeer::LONGMIN, PoplfPeer::EASTWEST, PoplfPeer::LONGDEGE, PoplfPeer::LONGMINE, PoplfPeer::EASTWESTE, PoplfPeer::ACCURACY, PoplfPeer::DEPTHMIN, PoplfPeer::DEPTHMAX, PoplfPeer::TEMPMIN, PoplfPeer::TEMPMAX, PoplfPeer::MLMIN, PoplfPeer::MLMAX, PoplfPeer::MEANLENGTH, PoplfPeer::LM, PoplfPeer::LOO, PoplfPeer::LOPT, PoplfPeer::LC, PoplfPeer::SOURCELINF, PoplfPeer::A, PoplfPeer::B, PoplfPeer::LWREF, PoplfPeer::LTYPE, PoplfPeer::F, PoplfPeer::Z, PoplfPeer::E, PoplfPeer::M, PoplfPeer::UNEXPLOITED, PoplfPeer::DATATYPE, PoplfPeer::GROWTHLOO, PoplfPeer::GROWTHK, PoplfPeer::GROWTHREF, PoplfPeer::GROWTHM, PoplfPeer::GROWTHMREF, PoplfPeer::TM, PoplfPeer::FREQUENCYTYPE, PoplfPeer::CLASSINTERVAL, PoplfPeer::GEAR, PoplfPeer::GEARII, PoplfPeer::YEARFROM, PoplfPeer::YEARTO, PoplfPeer::REMARK, PoplfPeer::PROVIDER, PoplfPeer::EMAIL, PoplfPeer::ENTERED, PoplfPeer::DATEENTERED, PoplfPeer::MODIFIED, PoplfPeer::DATEMODIFIED, PoplfPeer::EXPERT, PoplfPeer::DATECHECKED, PoplfPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LFCODE', 'STOCKCODE', 'SPECCODE', 'LFREFNO', 'SEX', 'LOCALITY', 'C_CODE', 'LATDEG', 'LATMIN', 'NORTHSOUTH', 'LATDEGS', 'LATMINS', 'NORTHSOUTHS', 'LONGDEG', 'LONGMIN', 'EASTWEST', 'LONGDEGE', 'LONGMINE', 'EASTWESTE', 'ACCURACY', 'DEPTHMIN', 'DEPTHMAX', 'TEMPMIN', 'TEMPMAX', 'MLMIN', 'MLMAX', 'MEANLENGTH', 'LM', 'LOO', 'LOPT', 'LC', 'SOURCELINF', 'A', 'B', 'LWREF', 'LTYPE', 'F', 'Z', 'E', 'M', 'UNEXPLOITED', 'DATATYPE', 'GROWTHLOO', 'GROWTHK', 'GROWTHREF', 'GROWTHM', 'GROWTHMREF', 'TM', 'FREQUENCYTYPE', 'CLASSINTERVAL', 'GEAR', 'GEARII', 'YEARFROM', 'YEARTO', 'REMARK', 'PROVIDER', 'EMAIL', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('LFCode', 'Stockcode', 'Speccode', 'LFRefno', 'Sex', 'Locality', 'C_Code', 'LatDeg', 'LatMin', 'NorthSouth', 'LatDegS', 'LatMinS', 'NorthSouthS', 'LongDeg', 'LongMin', 'EastWest', 'LongDegE', 'LongMinE', 'EastWestE', 'Accuracy', 'DepthMin', 'DepthMax', 'TempMin', 'TempMax', 'MLMin', 'MLMax', 'MeanLength', 'Lm', 'Loo', 'Lopt', 'Lc', 'SourceLinf', 'a', 'b', 'LWRef', 'LType', 'F', 'Z', 'E', 'M', 'Unexploited', 'DataType', 'GrowthLoo', 'GrowthK', 'GrowthRef', 'GrowthM', 'GrowthMRef', 'tm', 'FrequencyType', 'ClassInterval', 'Gear', 'GearII', 'YearFrom', 'YearTo', 'Remark', 'Provider', 'EMail', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PoplfPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Lfcode' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Lfrefno' => 3, 'Sex' => 4, 'Locality' => 5, 'CCode' => 6, 'Latdeg' => 7, 'Latmin' => 8, 'Northsouth' => 9, 'Latdegs' => 10, 'Latmins' => 11, 'Northsouths' => 12, 'Longdeg' => 13, 'Longmin' => 14, 'Eastwest' => 15, 'Longdege' => 16, 'Longmine' => 17, 'Eastweste' => 18, 'Accuracy' => 19, 'Depthmin' => 20, 'Depthmax' => 21, 'Tempmin' => 22, 'Tempmax' => 23, 'Mlmin' => 24, 'Mlmax' => 25, 'Meanlength' => 26, 'Lm' => 27, 'Loo' => 28, 'Lopt' => 29, 'Lc' => 30, 'Sourcelinf' => 31, 'A' => 32, 'B' => 33, 'Lwref' => 34, 'Ltype' => 35, 'F' => 36, 'Z' => 37, 'E' => 38, 'M' => 39, 'Unexploited' => 40, 'Datatype' => 41, 'Growthloo' => 42, 'Growthk' => 43, 'Growthref' => 44, 'Growthm' => 45, 'Growthmref' => 46, 'Tm' => 47, 'Frequencytype' => 48, 'Classinterval' => 49, 'Gear' => 50, 'Gearii' => 51, 'Yearfrom' => 52, 'Yearto' => 53, 'Remark' => 54, 'Provider' => 55, 'Email' => 56, 'Entered' => 57, 'Dateentered' => 58, 'Modified' => 59, 'Datemodified' => 60, 'Expert' => 61, 'Datechecked' => 62, 'Ts' => 63, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('lfcode' => 0, 'stockcode' => 1, 'speccode' => 2, 'lfrefno' => 3, 'sex' => 4, 'locality' => 5, 'cCode' => 6, 'latdeg' => 7, 'latmin' => 8, 'northsouth' => 9, 'latdegs' => 10, 'latmins' => 11, 'northsouths' => 12, 'longdeg' => 13, 'longmin' => 14, 'eastwest' => 15, 'longdege' => 16, 'longmine' => 17, 'eastweste' => 18, 'accuracy' => 19, 'depthmin' => 20, 'depthmax' => 21, 'tempmin' => 22, 'tempmax' => 23, 'mlmin' => 24, 'mlmax' => 25, 'meanlength' => 26, 'lm' => 27, 'loo' => 28, 'lopt' => 29, 'lc' => 30, 'sourcelinf' => 31, 'a' => 32, 'b' => 33, 'lwref' => 34, 'ltype' => 35, 'f' => 36, 'z' => 37, 'e' => 38, 'm' => 39, 'unexploited' => 40, 'datatype' => 41, 'growthloo' => 42, 'growthk' => 43, 'growthref' => 44, 'growthm' => 45, 'growthmref' => 46, 'tm' => 47, 'frequencytype' => 48, 'classinterval' => 49, 'gear' => 50, 'gearii' => 51, 'yearfrom' => 52, 'yearto' => 53, 'remark' => 54, 'provider' => 55, 'email' => 56, 'entered' => 57, 'dateentered' => 58, 'modified' => 59, 'datemodified' => 60, 'expert' => 61, 'datechecked' => 62, 'ts' => 63, ),
        BasePeer::TYPE_COLNAME => array (PoplfPeer::LFCODE => 0, PoplfPeer::STOCKCODE => 1, PoplfPeer::SPECCODE => 2, PoplfPeer::LFREFNO => 3, PoplfPeer::SEX => 4, PoplfPeer::LOCALITY => 5, PoplfPeer::C_CODE => 6, PoplfPeer::LATDEG => 7, PoplfPeer::LATMIN => 8, PoplfPeer::NORTHSOUTH => 9, PoplfPeer::LATDEGS => 10, PoplfPeer::LATMINS => 11, PoplfPeer::NORTHSOUTHS => 12, PoplfPeer::LONGDEG => 13, PoplfPeer::LONGMIN => 14, PoplfPeer::EASTWEST => 15, PoplfPeer::LONGDEGE => 16, PoplfPeer::LONGMINE => 17, PoplfPeer::EASTWESTE => 18, PoplfPeer::ACCURACY => 19, PoplfPeer::DEPTHMIN => 20, PoplfPeer::DEPTHMAX => 21, PoplfPeer::TEMPMIN => 22, PoplfPeer::TEMPMAX => 23, PoplfPeer::MLMIN => 24, PoplfPeer::MLMAX => 25, PoplfPeer::MEANLENGTH => 26, PoplfPeer::LM => 27, PoplfPeer::LOO => 28, PoplfPeer::LOPT => 29, PoplfPeer::LC => 30, PoplfPeer::SOURCELINF => 31, PoplfPeer::A => 32, PoplfPeer::B => 33, PoplfPeer::LWREF => 34, PoplfPeer::LTYPE => 35, PoplfPeer::F => 36, PoplfPeer::Z => 37, PoplfPeer::E => 38, PoplfPeer::M => 39, PoplfPeer::UNEXPLOITED => 40, PoplfPeer::DATATYPE => 41, PoplfPeer::GROWTHLOO => 42, PoplfPeer::GROWTHK => 43, PoplfPeer::GROWTHREF => 44, PoplfPeer::GROWTHM => 45, PoplfPeer::GROWTHMREF => 46, PoplfPeer::TM => 47, PoplfPeer::FREQUENCYTYPE => 48, PoplfPeer::CLASSINTERVAL => 49, PoplfPeer::GEAR => 50, PoplfPeer::GEARII => 51, PoplfPeer::YEARFROM => 52, PoplfPeer::YEARTO => 53, PoplfPeer::REMARK => 54, PoplfPeer::PROVIDER => 55, PoplfPeer::EMAIL => 56, PoplfPeer::ENTERED => 57, PoplfPeer::DATEENTERED => 58, PoplfPeer::MODIFIED => 59, PoplfPeer::DATEMODIFIED => 60, PoplfPeer::EXPERT => 61, PoplfPeer::DATECHECKED => 62, PoplfPeer::TS => 63, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LFCODE' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'LFREFNO' => 3, 'SEX' => 4, 'LOCALITY' => 5, 'C_CODE' => 6, 'LATDEG' => 7, 'LATMIN' => 8, 'NORTHSOUTH' => 9, 'LATDEGS' => 10, 'LATMINS' => 11, 'NORTHSOUTHS' => 12, 'LONGDEG' => 13, 'LONGMIN' => 14, 'EASTWEST' => 15, 'LONGDEGE' => 16, 'LONGMINE' => 17, 'EASTWESTE' => 18, 'ACCURACY' => 19, 'DEPTHMIN' => 20, 'DEPTHMAX' => 21, 'TEMPMIN' => 22, 'TEMPMAX' => 23, 'MLMIN' => 24, 'MLMAX' => 25, 'MEANLENGTH' => 26, 'LM' => 27, 'LOO' => 28, 'LOPT' => 29, 'LC' => 30, 'SOURCELINF' => 31, 'A' => 32, 'B' => 33, 'LWREF' => 34, 'LTYPE' => 35, 'F' => 36, 'Z' => 37, 'E' => 38, 'M' => 39, 'UNEXPLOITED' => 40, 'DATATYPE' => 41, 'GROWTHLOO' => 42, 'GROWTHK' => 43, 'GROWTHREF' => 44, 'GROWTHM' => 45, 'GROWTHMREF' => 46, 'TM' => 47, 'FREQUENCYTYPE' => 48, 'CLASSINTERVAL' => 49, 'GEAR' => 50, 'GEARII' => 51, 'YEARFROM' => 52, 'YEARTO' => 53, 'REMARK' => 54, 'PROVIDER' => 55, 'EMAIL' => 56, 'ENTERED' => 57, 'DATEENTERED' => 58, 'MODIFIED' => 59, 'DATEMODIFIED' => 60, 'EXPERT' => 61, 'DATECHECKED' => 62, 'TS' => 63, ),
        BasePeer::TYPE_FIELDNAME => array ('LFCode' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'LFRefno' => 3, 'Sex' => 4, 'Locality' => 5, 'C_Code' => 6, 'LatDeg' => 7, 'LatMin' => 8, 'NorthSouth' => 9, 'LatDegS' => 10, 'LatMinS' => 11, 'NorthSouthS' => 12, 'LongDeg' => 13, 'LongMin' => 14, 'EastWest' => 15, 'LongDegE' => 16, 'LongMinE' => 17, 'EastWestE' => 18, 'Accuracy' => 19, 'DepthMin' => 20, 'DepthMax' => 21, 'TempMin' => 22, 'TempMax' => 23, 'MLMin' => 24, 'MLMax' => 25, 'MeanLength' => 26, 'Lm' => 27, 'Loo' => 28, 'Lopt' => 29, 'Lc' => 30, 'SourceLinf' => 31, 'a' => 32, 'b' => 33, 'LWRef' => 34, 'LType' => 35, 'F' => 36, 'Z' => 37, 'E' => 38, 'M' => 39, 'Unexploited' => 40, 'DataType' => 41, 'GrowthLoo' => 42, 'GrowthK' => 43, 'GrowthRef' => 44, 'GrowthM' => 45, 'GrowthMRef' => 46, 'tm' => 47, 'FrequencyType' => 48, 'ClassInterval' => 49, 'Gear' => 50, 'GearII' => 51, 'YearFrom' => 52, 'YearTo' => 53, 'Remark' => 54, 'Provider' => 55, 'EMail' => 56, 'Entered' => 57, 'DateEntered' => 58, 'Modified' => 59, 'DateModified' => 60, 'Expert' => 61, 'DateChecked' => 62, 'TS' => 63, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, )
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
        $toNames = PoplfPeer::getFieldNames($toType);
        $key = isset(PoplfPeer::$fieldKeys[$fromType][$name]) ? PoplfPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PoplfPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PoplfPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PoplfPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PoplfPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PoplfPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PoplfPeer::LFCODE);
            $criteria->addSelectColumn(PoplfPeer::STOCKCODE);
            $criteria->addSelectColumn(PoplfPeer::SPECCODE);
            $criteria->addSelectColumn(PoplfPeer::LFREFNO);
            $criteria->addSelectColumn(PoplfPeer::SEX);
            $criteria->addSelectColumn(PoplfPeer::LOCALITY);
            $criteria->addSelectColumn(PoplfPeer::C_CODE);
            $criteria->addSelectColumn(PoplfPeer::LATDEG);
            $criteria->addSelectColumn(PoplfPeer::LATMIN);
            $criteria->addSelectColumn(PoplfPeer::NORTHSOUTH);
            $criteria->addSelectColumn(PoplfPeer::LATDEGS);
            $criteria->addSelectColumn(PoplfPeer::LATMINS);
            $criteria->addSelectColumn(PoplfPeer::NORTHSOUTHS);
            $criteria->addSelectColumn(PoplfPeer::LONGDEG);
            $criteria->addSelectColumn(PoplfPeer::LONGMIN);
            $criteria->addSelectColumn(PoplfPeer::EASTWEST);
            $criteria->addSelectColumn(PoplfPeer::LONGDEGE);
            $criteria->addSelectColumn(PoplfPeer::LONGMINE);
            $criteria->addSelectColumn(PoplfPeer::EASTWESTE);
            $criteria->addSelectColumn(PoplfPeer::ACCURACY);
            $criteria->addSelectColumn(PoplfPeer::DEPTHMIN);
            $criteria->addSelectColumn(PoplfPeer::DEPTHMAX);
            $criteria->addSelectColumn(PoplfPeer::TEMPMIN);
            $criteria->addSelectColumn(PoplfPeer::TEMPMAX);
            $criteria->addSelectColumn(PoplfPeer::MLMIN);
            $criteria->addSelectColumn(PoplfPeer::MLMAX);
            $criteria->addSelectColumn(PoplfPeer::MEANLENGTH);
            $criteria->addSelectColumn(PoplfPeer::LM);
            $criteria->addSelectColumn(PoplfPeer::LOO);
            $criteria->addSelectColumn(PoplfPeer::LOPT);
            $criteria->addSelectColumn(PoplfPeer::LC);
            $criteria->addSelectColumn(PoplfPeer::SOURCELINF);
            $criteria->addSelectColumn(PoplfPeer::A);
            $criteria->addSelectColumn(PoplfPeer::B);
            $criteria->addSelectColumn(PoplfPeer::LWREF);
            $criteria->addSelectColumn(PoplfPeer::LTYPE);
            $criteria->addSelectColumn(PoplfPeer::F);
            $criteria->addSelectColumn(PoplfPeer::Z);
            $criteria->addSelectColumn(PoplfPeer::E);
            $criteria->addSelectColumn(PoplfPeer::M);
            $criteria->addSelectColumn(PoplfPeer::UNEXPLOITED);
            $criteria->addSelectColumn(PoplfPeer::DATATYPE);
            $criteria->addSelectColumn(PoplfPeer::GROWTHLOO);
            $criteria->addSelectColumn(PoplfPeer::GROWTHK);
            $criteria->addSelectColumn(PoplfPeer::GROWTHREF);
            $criteria->addSelectColumn(PoplfPeer::GROWTHM);
            $criteria->addSelectColumn(PoplfPeer::GROWTHMREF);
            $criteria->addSelectColumn(PoplfPeer::TM);
            $criteria->addSelectColumn(PoplfPeer::FREQUENCYTYPE);
            $criteria->addSelectColumn(PoplfPeer::CLASSINTERVAL);
            $criteria->addSelectColumn(PoplfPeer::GEAR);
            $criteria->addSelectColumn(PoplfPeer::GEARII);
            $criteria->addSelectColumn(PoplfPeer::YEARFROM);
            $criteria->addSelectColumn(PoplfPeer::YEARTO);
            $criteria->addSelectColumn(PoplfPeer::REMARK);
            $criteria->addSelectColumn(PoplfPeer::PROVIDER);
            $criteria->addSelectColumn(PoplfPeer::EMAIL);
            $criteria->addSelectColumn(PoplfPeer::ENTERED);
            $criteria->addSelectColumn(PoplfPeer::DATEENTERED);
            $criteria->addSelectColumn(PoplfPeer::MODIFIED);
            $criteria->addSelectColumn(PoplfPeer::DATEMODIFIED);
            $criteria->addSelectColumn(PoplfPeer::EXPERT);
            $criteria->addSelectColumn(PoplfPeer::DATECHECKED);
            $criteria->addSelectColumn(PoplfPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.LFCode');
            $criteria->addSelectColumn($alias . '.Stockcode');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.LFRefno');
            $criteria->addSelectColumn($alias . '.Sex');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.LatDeg');
            $criteria->addSelectColumn($alias . '.LatMin');
            $criteria->addSelectColumn($alias . '.NorthSouth');
            $criteria->addSelectColumn($alias . '.LatDegS');
            $criteria->addSelectColumn($alias . '.LatMinS');
            $criteria->addSelectColumn($alias . '.NorthSouthS');
            $criteria->addSelectColumn($alias . '.LongDeg');
            $criteria->addSelectColumn($alias . '.LongMin');
            $criteria->addSelectColumn($alias . '.EastWest');
            $criteria->addSelectColumn($alias . '.LongDegE');
            $criteria->addSelectColumn($alias . '.LongMinE');
            $criteria->addSelectColumn($alias . '.EastWestE');
            $criteria->addSelectColumn($alias . '.Accuracy');
            $criteria->addSelectColumn($alias . '.DepthMin');
            $criteria->addSelectColumn($alias . '.DepthMax');
            $criteria->addSelectColumn($alias . '.TempMin');
            $criteria->addSelectColumn($alias . '.TempMax');
            $criteria->addSelectColumn($alias . '.MLMin');
            $criteria->addSelectColumn($alias . '.MLMax');
            $criteria->addSelectColumn($alias . '.MeanLength');
            $criteria->addSelectColumn($alias . '.Lm');
            $criteria->addSelectColumn($alias . '.Loo');
            $criteria->addSelectColumn($alias . '.Lopt');
            $criteria->addSelectColumn($alias . '.Lc');
            $criteria->addSelectColumn($alias . '.SourceLinf');
            $criteria->addSelectColumn($alias . '.a');
            $criteria->addSelectColumn($alias . '.b');
            $criteria->addSelectColumn($alias . '.LWRef');
            $criteria->addSelectColumn($alias . '.LType');
            $criteria->addSelectColumn($alias . '.F');
            $criteria->addSelectColumn($alias . '.Z');
            $criteria->addSelectColumn($alias . '.E');
            $criteria->addSelectColumn($alias . '.M');
            $criteria->addSelectColumn($alias . '.Unexploited');
            $criteria->addSelectColumn($alias . '.DataType');
            $criteria->addSelectColumn($alias . '.GrowthLoo');
            $criteria->addSelectColumn($alias . '.GrowthK');
            $criteria->addSelectColumn($alias . '.GrowthRef');
            $criteria->addSelectColumn($alias . '.GrowthM');
            $criteria->addSelectColumn($alias . '.GrowthMRef');
            $criteria->addSelectColumn($alias . '.tm');
            $criteria->addSelectColumn($alias . '.FrequencyType');
            $criteria->addSelectColumn($alias . '.ClassInterval');
            $criteria->addSelectColumn($alias . '.Gear');
            $criteria->addSelectColumn($alias . '.GearII');
            $criteria->addSelectColumn($alias . '.YearFrom');
            $criteria->addSelectColumn($alias . '.YearTo');
            $criteria->addSelectColumn($alias . '.Remark');
            $criteria->addSelectColumn($alias . '.Provider');
            $criteria->addSelectColumn($alias . '.EMail');
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
        $criteria->setPrimaryTableName(PoplfPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PoplfPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PoplfPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PoplfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Poplf
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PoplfPeer::doSelect($critcopy, $con);
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
        return PoplfPeer::populateObjects(PoplfPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PoplfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PoplfPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PoplfPeer::DATABASE_NAME);

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
     * @param Poplf $obj A Poplf object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getLfcode(), (string) $obj->getStockcode(), (string) $obj->getSex(), (string) $obj->getLocality(), (string) $obj->getCCode(), (string) $obj->getGear()));
            } // if key === null
            PoplfPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Poplf object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Poplf) {
                $key = serialize(array((string) $value->getLfcode(), (string) $value->getStockcode(), (string) $value->getSex(), (string) $value->getLocality(), (string) $value->getCCode(), (string) $value->getGear()));
            } elseif (is_array($value) && count($value) === 6) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4], (string) $value[5]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Poplf object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PoplfPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Poplf Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PoplfPeer::$instances[$key])) {
                return PoplfPeer::$instances[$key];
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
        foreach (PoplfPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PoplfPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to poplf
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 4] === null && $row[$startcol + 5] === null && $row[$startcol + 6] === null && $row[$startcol + 50] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 4], (string) $row[$startcol + 5], (string) $row[$startcol + 6], (string) $row[$startcol + 50]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 1], (string) $row[$startcol + 4], (string) $row[$startcol + 5], (string) $row[$startcol + 6], (string) $row[$startcol + 50]);
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
        $cls = PoplfPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PoplfPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PoplfPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PoplfPeer::addInstanceToPool($obj, $key);
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
     * @return array (Poplf object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PoplfPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PoplfPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PoplfPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PoplfPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PoplfPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(PoplfPeer::DATABASE_NAME)->getTable(PoplfPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePoplfPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePoplfPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PoplfTableMap());
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
        return PoplfPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Poplf or Criteria object.
     *
     * @param      mixed $values Criteria or Poplf object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PoplfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Poplf object
        }

        if ($criteria->containsKey(PoplfPeer::LFCODE) && $criteria->keyContainsValue(PoplfPeer::LFCODE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PoplfPeer::LFCODE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PoplfPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Poplf or Criteria object.
     *
     * @param      mixed $values Criteria or Poplf object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PoplfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PoplfPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PoplfPeer::LFCODE);
            $value = $criteria->remove(PoplfPeer::LFCODE);
            if ($value) {
                $selectCriteria->add(PoplfPeer::LFCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PoplfPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(PoplfPeer::STOCKCODE);
            $value = $criteria->remove(PoplfPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(PoplfPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PoplfPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(PoplfPeer::SEX);
            $value = $criteria->remove(PoplfPeer::SEX);
            if ($value) {
                $selectCriteria->add(PoplfPeer::SEX, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PoplfPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(PoplfPeer::LOCALITY);
            $value = $criteria->remove(PoplfPeer::LOCALITY);
            if ($value) {
                $selectCriteria->add(PoplfPeer::LOCALITY, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PoplfPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(PoplfPeer::C_CODE);
            $value = $criteria->remove(PoplfPeer::C_CODE);
            if ($value) {
                $selectCriteria->add(PoplfPeer::C_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PoplfPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(PoplfPeer::GEAR);
            $value = $criteria->remove(PoplfPeer::GEAR);
            if ($value) {
                $selectCriteria->add(PoplfPeer::GEAR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PoplfPeer::TABLE_NAME);
            }

        } else { // $values is Poplf object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PoplfPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the poplf table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PoplfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PoplfPeer::TABLE_NAME, $con, PoplfPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PoplfPeer::clearInstancePool();
            PoplfPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Poplf or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Poplf object or primary key or array of primary keys
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
            $con = Propel::getConnection(PoplfPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PoplfPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Poplf) { // it's a model object
            // invalidate the cache for this single object
            PoplfPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PoplfPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(PoplfPeer::LFCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(PoplfPeer::STOCKCODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(PoplfPeer::SEX, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(PoplfPeer::LOCALITY, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(PoplfPeer::C_CODE, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(PoplfPeer::GEAR, $value[5]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                PoplfPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PoplfPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PoplfPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Poplf object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Poplf $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PoplfPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PoplfPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PoplfPeer::DATABASE_NAME, PoplfPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $lfcode
     * @param   int $stockcode
     * @param   string $sex
     * @param   string $locality
     * @param   string $c_code
     * @param   string $gear
     * @param      PropelPDO $con
     * @return Poplf
     */
    public static function retrieveByPK($lfcode, $stockcode, $sex, $locality, $c_code, $gear, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $lfcode, (string) $stockcode, (string) $sex, (string) $locality, (string) $c_code, (string) $gear));
         if (null !== ($obj = PoplfPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PoplfPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(PoplfPeer::DATABASE_NAME);
        $criteria->add(PoplfPeer::LFCODE, $lfcode);
        $criteria->add(PoplfPeer::STOCKCODE, $stockcode);
        $criteria->add(PoplfPeer::SEX, $sex);
        $criteria->add(PoplfPeer::LOCALITY, $locality);
        $criteria->add(PoplfPeer::C_CODE, $c_code);
        $criteria->add(PoplfPeer::GEAR, $gear);
        $v = PoplfPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BasePoplfPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePoplfPeer::buildTableMap();

