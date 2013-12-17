<?php


/**
 * Base static class for performing query and update operations on the 'popgrowth' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BasePopgrowthPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'popgrowth';

    /** the related Propel class for this table */
    const OM_CLASS = 'Popgrowth';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PopgrowthTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 79;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 79;

    /** the column name for the AutoCtr field */
    const AUTOCTR = 'popgrowth.AutoCtr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'popgrowth.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'popgrowth.SpecCode';

    /** the column name for the E_CODE field */
    const E_CODE = 'popgrowth.E_CODE';

    /** the column name for the PopGrowthRef field */
    const POPGROWTHREF = 'popgrowth.PopGrowthRef';

    /** the column name for the Sex field */
    const SEX = 'popgrowth.Sex';

    /** the column name for the Data field */
    const DATA = 'popgrowth.Data';

    /** the column name for the DataSourceRef field */
    const DATASOURCEREF = 'popgrowth.DataSourceRef';

    /** the column name for the Loo field */
    const LOO = 'popgrowth.Loo';

    /** the column name for the Number field */
    const NUMBER = 'popgrowth.Number';

    /** the column name for the r2 field */
    const R2 = 'popgrowth.r2';

    /** the column name for the SE_Loo field */
    const SE_LOO = 'popgrowth.SE_Loo';

    /** the column name for the SD_Loo field */
    const SD_LOO = 'popgrowth.SD_Loo';

    /** the column name for the LCL_Loo field */
    const LCL_LOO = 'popgrowth.LCL_Loo';

    /** the column name for the UCL_Loo field */
    const UCL_LOO = 'popgrowth.UCL_Loo';

    /** the column name for the AssumedDistLoo field */
    const ASSUMEDDISTLOO = 'popgrowth.AssumedDistLoo';

    /** the column name for the TLinfinity field */
    const TLINFINITY = 'popgrowth.TLinfinity';

    /** the column name for the K field */
    const K = 'popgrowth.K';

    /** the column name for the SE_K field */
    const SE_K = 'popgrowth.SE_K';

    /** the column name for the SD_K field */
    const SD_K = 'popgrowth.SD_K';

    /** the column name for the LCL_K field */
    const LCL_K = 'popgrowth.LCL_K';

    /** the column name for the UCL_K field */
    const UCL_K = 'popgrowth.UCL_K';

    /** the column name for the AssumedDistK field */
    const ASSUMEDDISTK = 'popgrowth.AssumedDistK';

    /** the column name for the to field */
    const TO = 'popgrowth.to';

    /** the column name for the SE_to field */
    const SE_TO = 'popgrowth.SE_to';

    /** the column name for the SD_to field */
    const SD_TO = 'popgrowth.SD_to';

    /** the column name for the LCL_to field */
    const LCL_TO = 'popgrowth.LCL_to';

    /** the column name for the UCL_to field */
    const UCL_TO = 'popgrowth.UCL_to';

    /** the column name for the Type field */
    const TYPE = 'popgrowth.Type';

    /** the column name for the MethodGrowth field */
    const METHODGROWTH = 'popgrowth.MethodGrowth';

    /** the column name for the Winfinity field */
    const WINFINITY = 'popgrowth.Winfinity';

    /** the column name for the LinfLmax field */
    const LINFLMAX = 'popgrowth.LinfLmax';

    /** the column name for the Auxim field */
    const AUXIM = 'popgrowth.Auxim';

    /** the column name for the LogKLogLoo field */
    const LOGKLOGLOO = 'popgrowth.LogKLogLoo';

    /** the column name for the SourceWinfinity field */
    const SOURCEWINFINITY = 'popgrowth.SourceWinfinity';

    /** the column name for the b field */
    const B = 'popgrowth.b';

    /** the column name for the C field */
    const C = 'popgrowth.C';

    /** the column name for the tmax field */
    const TMAX = 'popgrowth.tmax';

    /** the column name for the tmaxRef field */
    const TMAXREF = 'popgrowth.tmaxRef';

    /** the column name for the tm field */
    const TM = 'popgrowth.tm';

    /** the column name for the M field */
    const M = 'popgrowth.M';

    /** the column name for the MethodM field */
    const METHODM = 'popgrowth.MethodM';

    /** the column name for the Mquality field */
    const MQUALITY = 'popgrowth.Mquality';

    /** the column name for the MRef field */
    const MREF = 'popgrowth.MRef';

    /** the column name for the Number_M field */
    const NUMBER_M = 'popgrowth.Number_M';

    /** the column name for the r2_M field */
    const R2_M = 'popgrowth.r2_M';

    /** the column name for the SE_M field */
    const SE_M = 'popgrowth.SE_M';

    /** the column name for the SD_M field */
    const SD_M = 'popgrowth.SD_M';

    /** the column name for the LCL_M field */
    const LCL_M = 'popgrowth.LCL_M';

    /** the column name for the UCL_M field */
    const UCL_M = 'popgrowth.UCL_M';

    /** the column name for the AssumedDistM field */
    const ASSUMEDDISTM = 'popgrowth.AssumedDistM';

    /** the column name for the Lm field */
    const LM = 'popgrowth.Lm';

    /** the column name for the LmLoo field */
    const LMLOO = 'popgrowth.LmLoo';

    /** the column name for the LmSex field */
    const LMSEX = 'popgrowth.LmSex';

    /** the column name for the TypeLm field */
    const TYPELM = 'popgrowth.TypeLm';

    /** the column name for the unsexedRef field */
    const UNSEXEDREF = 'popgrowth.unsexedRef';

    /** the column name for the LmMale field */
    const LMMALE = 'popgrowth.LmMale';

    /** the column name for the LmLooMale field */
    const LMLOOMALE = 'popgrowth.LmLooMale';

    /** the column name for the LmFemale field */
    const LMFEMALE = 'popgrowth.LmFemale';

    /** the column name for the LmLooFemale field */
    const LMLOOFEMALE = 'popgrowth.LmLooFemale';

    /** the column name for the Locality field */
    const LOCALITY = 'popgrowth.Locality';

    /** the column name for the YearStart field */
    const YEARSTART = 'popgrowth.YearStart';

    /** the column name for the YearEnd field */
    const YEAREND = 'popgrowth.YearEnd';

    /** the column name for the YearRemark field */
    const YEARREMARK = 'popgrowth.YearRemark';

    /** the column name for the C_Code field */
    const C_CODE = 'popgrowth.C_Code';

    /** the column name for the GrowthEnviron field */
    const GROWTHENVIRON = 'popgrowth.GrowthEnviron';

    /** the column name for the Temperature field */
    const TEMPERATURE = 'popgrowth.Temperature';

    /** the column name for the DeltaT field */
    const DELTAT = 'popgrowth.DeltaT';

    /** the column name for the TempRef field */
    const TEMPREF = 'popgrowth.TempRef';

    /** the column name for the Rm field */
    const RM = 'popgrowth.Rm';

    /** the column name for the Comment field */
    const COMMENT = 'popgrowth.Comment';

    /** the column name for the Comment2 field */
    const COMMENT2 = 'popgrowth.Comment2';

    /** the column name for the Entered field */
    const ENTERED = 'popgrowth.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'popgrowth.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'popgrowth.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'popgrowth.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'popgrowth.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'popgrowth.DateChecked';

    /** the column name for the TS field */
    const TS = 'popgrowth.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Popgrowth objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Popgrowth[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PopgrowthPeer::$fieldNames[PopgrowthPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'ECode', 'Popgrowthref', 'Sex', 'Data', 'Datasourceref', 'Loo', 'Number', 'R2', 'SeLoo', 'SdLoo', 'LclLoo', 'UclLoo', 'Assumeddistloo', 'Tlinfinity', 'K', 'SeK', 'SdK', 'LclK', 'UclK', 'Assumeddistk', 'To', 'SeTo', 'SdTo', 'LclTo', 'UclTo', 'Type', 'Methodgrowth', 'Winfinity', 'Linflmax', 'Auxim', 'Logklogloo', 'Sourcewinfinity', 'B', 'C', 'Tmax', 'Tmaxref', 'Tm', 'M', 'Methodm', 'Mquality', 'Mref', 'NumberM', 'R2M', 'SeM', 'SdM', 'LclM', 'UclM', 'Assumeddistm', 'Lm', 'Lmloo', 'Lmsex', 'Typelm', 'Unsexedref', 'Lmmale', 'Lmloomale', 'Lmfemale', 'Lmloofemale', 'Locality', 'Yearstart', 'Yearend', 'Yearremark', 'CCode', 'Growthenviron', 'Temperature', 'Deltat', 'Tempref', 'Rm', 'Comment', 'Comment2', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'eCode', 'popgrowthref', 'sex', 'data', 'datasourceref', 'loo', 'number', 'r2', 'seLoo', 'sdLoo', 'lclLoo', 'uclLoo', 'assumeddistloo', 'tlinfinity', 'k', 'seK', 'sdK', 'lclK', 'uclK', 'assumeddistk', 'to', 'seTo', 'sdTo', 'lclTo', 'uclTo', 'type', 'methodgrowth', 'winfinity', 'linflmax', 'auxim', 'logklogloo', 'sourcewinfinity', 'b', 'c', 'tmax', 'tmaxref', 'tm', 'm', 'methodm', 'mquality', 'mref', 'numberM', 'r2M', 'seM', 'sdM', 'lclM', 'uclM', 'assumeddistm', 'lm', 'lmloo', 'lmsex', 'typelm', 'unsexedref', 'lmmale', 'lmloomale', 'lmfemale', 'lmloofemale', 'locality', 'yearstart', 'yearend', 'yearremark', 'cCode', 'growthenviron', 'temperature', 'deltat', 'tempref', 'rm', 'comment', 'comment2', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (PopgrowthPeer::AUTOCTR, PopgrowthPeer::STOCKCODE, PopgrowthPeer::SPECCODE, PopgrowthPeer::E_CODE, PopgrowthPeer::POPGROWTHREF, PopgrowthPeer::SEX, PopgrowthPeer::DATA, PopgrowthPeer::DATASOURCEREF, PopgrowthPeer::LOO, PopgrowthPeer::NUMBER, PopgrowthPeer::R2, PopgrowthPeer::SE_LOO, PopgrowthPeer::SD_LOO, PopgrowthPeer::LCL_LOO, PopgrowthPeer::UCL_LOO, PopgrowthPeer::ASSUMEDDISTLOO, PopgrowthPeer::TLINFINITY, PopgrowthPeer::K, PopgrowthPeer::SE_K, PopgrowthPeer::SD_K, PopgrowthPeer::LCL_K, PopgrowthPeer::UCL_K, PopgrowthPeer::ASSUMEDDISTK, PopgrowthPeer::TO, PopgrowthPeer::SE_TO, PopgrowthPeer::SD_TO, PopgrowthPeer::LCL_TO, PopgrowthPeer::UCL_TO, PopgrowthPeer::TYPE, PopgrowthPeer::METHODGROWTH, PopgrowthPeer::WINFINITY, PopgrowthPeer::LINFLMAX, PopgrowthPeer::AUXIM, PopgrowthPeer::LOGKLOGLOO, PopgrowthPeer::SOURCEWINFINITY, PopgrowthPeer::B, PopgrowthPeer::C, PopgrowthPeer::TMAX, PopgrowthPeer::TMAXREF, PopgrowthPeer::TM, PopgrowthPeer::M, PopgrowthPeer::METHODM, PopgrowthPeer::MQUALITY, PopgrowthPeer::MREF, PopgrowthPeer::NUMBER_M, PopgrowthPeer::R2_M, PopgrowthPeer::SE_M, PopgrowthPeer::SD_M, PopgrowthPeer::LCL_M, PopgrowthPeer::UCL_M, PopgrowthPeer::ASSUMEDDISTM, PopgrowthPeer::LM, PopgrowthPeer::LMLOO, PopgrowthPeer::LMSEX, PopgrowthPeer::TYPELM, PopgrowthPeer::UNSEXEDREF, PopgrowthPeer::LMMALE, PopgrowthPeer::LMLOOMALE, PopgrowthPeer::LMFEMALE, PopgrowthPeer::LMLOOFEMALE, PopgrowthPeer::LOCALITY, PopgrowthPeer::YEARSTART, PopgrowthPeer::YEAREND, PopgrowthPeer::YEARREMARK, PopgrowthPeer::C_CODE, PopgrowthPeer::GROWTHENVIRON, PopgrowthPeer::TEMPERATURE, PopgrowthPeer::DELTAT, PopgrowthPeer::TEMPREF, PopgrowthPeer::RM, PopgrowthPeer::COMMENT, PopgrowthPeer::COMMENT2, PopgrowthPeer::ENTERED, PopgrowthPeer::DATEENTERED, PopgrowthPeer::MODIFIED, PopgrowthPeer::DATEMODIFIED, PopgrowthPeer::EXPERT, PopgrowthPeer::DATECHECKED, PopgrowthPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'E_CODE', 'POPGROWTHREF', 'SEX', 'DATA', 'DATASOURCEREF', 'LOO', 'NUMBER', 'R2', 'SE_LOO', 'SD_LOO', 'LCL_LOO', 'UCL_LOO', 'ASSUMEDDISTLOO', 'TLINFINITY', 'K', 'SE_K', 'SD_K', 'LCL_K', 'UCL_K', 'ASSUMEDDISTK', 'TO', 'SE_TO', 'SD_TO', 'LCL_TO', 'UCL_TO', 'TYPE', 'METHODGROWTH', 'WINFINITY', 'LINFLMAX', 'AUXIM', 'LOGKLOGLOO', 'SOURCEWINFINITY', 'B', 'C', 'TMAX', 'TMAXREF', 'TM', 'M', 'METHODM', 'MQUALITY', 'MREF', 'NUMBER_M', 'R2_M', 'SE_M', 'SD_M', 'LCL_M', 'UCL_M', 'ASSUMEDDISTM', 'LM', 'LMLOO', 'LMSEX', 'TYPELM', 'UNSEXEDREF', 'LMMALE', 'LMLOOMALE', 'LMFEMALE', 'LMLOOFEMALE', 'LOCALITY', 'YEARSTART', 'YEAREND', 'YEARREMARK', 'C_CODE', 'GROWTHENVIRON', 'TEMPERATURE', 'DELTAT', 'TEMPREF', 'RM', 'COMMENT', 'COMMENT2', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr', 'StockCode', 'SpecCode', 'E_CODE', 'PopGrowthRef', 'Sex', 'Data', 'DataSourceRef', 'Loo', 'Number', 'r2', 'SE_Loo', 'SD_Loo', 'LCL_Loo', 'UCL_Loo', 'AssumedDistLoo', 'TLinfinity', 'K', 'SE_K', 'SD_K', 'LCL_K', 'UCL_K', 'AssumedDistK', 'to', 'SE_to', 'SD_to', 'LCL_to', 'UCL_to', 'Type', 'MethodGrowth', 'Winfinity', 'LinfLmax', 'Auxim', 'LogKLogLoo', 'SourceWinfinity', 'b', 'C', 'tmax', 'tmaxRef', 'tm', 'M', 'MethodM', 'Mquality', 'MRef', 'Number_M', 'r2_M', 'SE_M', 'SD_M', 'LCL_M', 'UCL_M', 'AssumedDistM', 'Lm', 'LmLoo', 'LmSex', 'TypeLm', 'unsexedRef', 'LmMale', 'LmLooMale', 'LmFemale', 'LmLooFemale', 'Locality', 'YearStart', 'YearEnd', 'YearRemark', 'C_Code', 'GrowthEnviron', 'Temperature', 'DeltaT', 'TempRef', 'Rm', 'Comment', 'Comment2', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PopgrowthPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'ECode' => 3, 'Popgrowthref' => 4, 'Sex' => 5, 'Data' => 6, 'Datasourceref' => 7, 'Loo' => 8, 'Number' => 9, 'R2' => 10, 'SeLoo' => 11, 'SdLoo' => 12, 'LclLoo' => 13, 'UclLoo' => 14, 'Assumeddistloo' => 15, 'Tlinfinity' => 16, 'K' => 17, 'SeK' => 18, 'SdK' => 19, 'LclK' => 20, 'UclK' => 21, 'Assumeddistk' => 22, 'To' => 23, 'SeTo' => 24, 'SdTo' => 25, 'LclTo' => 26, 'UclTo' => 27, 'Type' => 28, 'Methodgrowth' => 29, 'Winfinity' => 30, 'Linflmax' => 31, 'Auxim' => 32, 'Logklogloo' => 33, 'Sourcewinfinity' => 34, 'B' => 35, 'C' => 36, 'Tmax' => 37, 'Tmaxref' => 38, 'Tm' => 39, 'M' => 40, 'Methodm' => 41, 'Mquality' => 42, 'Mref' => 43, 'NumberM' => 44, 'R2M' => 45, 'SeM' => 46, 'SdM' => 47, 'LclM' => 48, 'UclM' => 49, 'Assumeddistm' => 50, 'Lm' => 51, 'Lmloo' => 52, 'Lmsex' => 53, 'Typelm' => 54, 'Unsexedref' => 55, 'Lmmale' => 56, 'Lmloomale' => 57, 'Lmfemale' => 58, 'Lmloofemale' => 59, 'Locality' => 60, 'Yearstart' => 61, 'Yearend' => 62, 'Yearremark' => 63, 'CCode' => 64, 'Growthenviron' => 65, 'Temperature' => 66, 'Deltat' => 67, 'Tempref' => 68, 'Rm' => 69, 'Comment' => 70, 'Comment2' => 71, 'Entered' => 72, 'Dateentered' => 73, 'Modified' => 74, 'Datemodified' => 75, 'Expert' => 76, 'Datechecked' => 77, 'Ts' => 78, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'eCode' => 3, 'popgrowthref' => 4, 'sex' => 5, 'data' => 6, 'datasourceref' => 7, 'loo' => 8, 'number' => 9, 'r2' => 10, 'seLoo' => 11, 'sdLoo' => 12, 'lclLoo' => 13, 'uclLoo' => 14, 'assumeddistloo' => 15, 'tlinfinity' => 16, 'k' => 17, 'seK' => 18, 'sdK' => 19, 'lclK' => 20, 'uclK' => 21, 'assumeddistk' => 22, 'to' => 23, 'seTo' => 24, 'sdTo' => 25, 'lclTo' => 26, 'uclTo' => 27, 'type' => 28, 'methodgrowth' => 29, 'winfinity' => 30, 'linflmax' => 31, 'auxim' => 32, 'logklogloo' => 33, 'sourcewinfinity' => 34, 'b' => 35, 'c' => 36, 'tmax' => 37, 'tmaxref' => 38, 'tm' => 39, 'm' => 40, 'methodm' => 41, 'mquality' => 42, 'mref' => 43, 'numberM' => 44, 'r2M' => 45, 'seM' => 46, 'sdM' => 47, 'lclM' => 48, 'uclM' => 49, 'assumeddistm' => 50, 'lm' => 51, 'lmloo' => 52, 'lmsex' => 53, 'typelm' => 54, 'unsexedref' => 55, 'lmmale' => 56, 'lmloomale' => 57, 'lmfemale' => 58, 'lmloofemale' => 59, 'locality' => 60, 'yearstart' => 61, 'yearend' => 62, 'yearremark' => 63, 'cCode' => 64, 'growthenviron' => 65, 'temperature' => 66, 'deltat' => 67, 'tempref' => 68, 'rm' => 69, 'comment' => 70, 'comment2' => 71, 'entered' => 72, 'dateentered' => 73, 'modified' => 74, 'datemodified' => 75, 'expert' => 76, 'datechecked' => 77, 'ts' => 78, ),
        BasePeer::TYPE_COLNAME => array (PopgrowthPeer::AUTOCTR => 0, PopgrowthPeer::STOCKCODE => 1, PopgrowthPeer::SPECCODE => 2, PopgrowthPeer::E_CODE => 3, PopgrowthPeer::POPGROWTHREF => 4, PopgrowthPeer::SEX => 5, PopgrowthPeer::DATA => 6, PopgrowthPeer::DATASOURCEREF => 7, PopgrowthPeer::LOO => 8, PopgrowthPeer::NUMBER => 9, PopgrowthPeer::R2 => 10, PopgrowthPeer::SE_LOO => 11, PopgrowthPeer::SD_LOO => 12, PopgrowthPeer::LCL_LOO => 13, PopgrowthPeer::UCL_LOO => 14, PopgrowthPeer::ASSUMEDDISTLOO => 15, PopgrowthPeer::TLINFINITY => 16, PopgrowthPeer::K => 17, PopgrowthPeer::SE_K => 18, PopgrowthPeer::SD_K => 19, PopgrowthPeer::LCL_K => 20, PopgrowthPeer::UCL_K => 21, PopgrowthPeer::ASSUMEDDISTK => 22, PopgrowthPeer::TO => 23, PopgrowthPeer::SE_TO => 24, PopgrowthPeer::SD_TO => 25, PopgrowthPeer::LCL_TO => 26, PopgrowthPeer::UCL_TO => 27, PopgrowthPeer::TYPE => 28, PopgrowthPeer::METHODGROWTH => 29, PopgrowthPeer::WINFINITY => 30, PopgrowthPeer::LINFLMAX => 31, PopgrowthPeer::AUXIM => 32, PopgrowthPeer::LOGKLOGLOO => 33, PopgrowthPeer::SOURCEWINFINITY => 34, PopgrowthPeer::B => 35, PopgrowthPeer::C => 36, PopgrowthPeer::TMAX => 37, PopgrowthPeer::TMAXREF => 38, PopgrowthPeer::TM => 39, PopgrowthPeer::M => 40, PopgrowthPeer::METHODM => 41, PopgrowthPeer::MQUALITY => 42, PopgrowthPeer::MREF => 43, PopgrowthPeer::NUMBER_M => 44, PopgrowthPeer::R2_M => 45, PopgrowthPeer::SE_M => 46, PopgrowthPeer::SD_M => 47, PopgrowthPeer::LCL_M => 48, PopgrowthPeer::UCL_M => 49, PopgrowthPeer::ASSUMEDDISTM => 50, PopgrowthPeer::LM => 51, PopgrowthPeer::LMLOO => 52, PopgrowthPeer::LMSEX => 53, PopgrowthPeer::TYPELM => 54, PopgrowthPeer::UNSEXEDREF => 55, PopgrowthPeer::LMMALE => 56, PopgrowthPeer::LMLOOMALE => 57, PopgrowthPeer::LMFEMALE => 58, PopgrowthPeer::LMLOOFEMALE => 59, PopgrowthPeer::LOCALITY => 60, PopgrowthPeer::YEARSTART => 61, PopgrowthPeer::YEAREND => 62, PopgrowthPeer::YEARREMARK => 63, PopgrowthPeer::C_CODE => 64, PopgrowthPeer::GROWTHENVIRON => 65, PopgrowthPeer::TEMPERATURE => 66, PopgrowthPeer::DELTAT => 67, PopgrowthPeer::TEMPREF => 68, PopgrowthPeer::RM => 69, PopgrowthPeer::COMMENT => 70, PopgrowthPeer::COMMENT2 => 71, PopgrowthPeer::ENTERED => 72, PopgrowthPeer::DATEENTERED => 73, PopgrowthPeer::MODIFIED => 74, PopgrowthPeer::DATEMODIFIED => 75, PopgrowthPeer::EXPERT => 76, PopgrowthPeer::DATECHECKED => 77, PopgrowthPeer::TS => 78, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'E_CODE' => 3, 'POPGROWTHREF' => 4, 'SEX' => 5, 'DATA' => 6, 'DATASOURCEREF' => 7, 'LOO' => 8, 'NUMBER' => 9, 'R2' => 10, 'SE_LOO' => 11, 'SD_LOO' => 12, 'LCL_LOO' => 13, 'UCL_LOO' => 14, 'ASSUMEDDISTLOO' => 15, 'TLINFINITY' => 16, 'K' => 17, 'SE_K' => 18, 'SD_K' => 19, 'LCL_K' => 20, 'UCL_K' => 21, 'ASSUMEDDISTK' => 22, 'TO' => 23, 'SE_TO' => 24, 'SD_TO' => 25, 'LCL_TO' => 26, 'UCL_TO' => 27, 'TYPE' => 28, 'METHODGROWTH' => 29, 'WINFINITY' => 30, 'LINFLMAX' => 31, 'AUXIM' => 32, 'LOGKLOGLOO' => 33, 'SOURCEWINFINITY' => 34, 'B' => 35, 'C' => 36, 'TMAX' => 37, 'TMAXREF' => 38, 'TM' => 39, 'M' => 40, 'METHODM' => 41, 'MQUALITY' => 42, 'MREF' => 43, 'NUMBER_M' => 44, 'R2_M' => 45, 'SE_M' => 46, 'SD_M' => 47, 'LCL_M' => 48, 'UCL_M' => 49, 'ASSUMEDDISTM' => 50, 'LM' => 51, 'LMLOO' => 52, 'LMSEX' => 53, 'TYPELM' => 54, 'UNSEXEDREF' => 55, 'LMMALE' => 56, 'LMLOOMALE' => 57, 'LMFEMALE' => 58, 'LMLOOFEMALE' => 59, 'LOCALITY' => 60, 'YEARSTART' => 61, 'YEAREND' => 62, 'YEARREMARK' => 63, 'C_CODE' => 64, 'GROWTHENVIRON' => 65, 'TEMPERATURE' => 66, 'DELTAT' => 67, 'TEMPREF' => 68, 'RM' => 69, 'COMMENT' => 70, 'COMMENT2' => 71, 'ENTERED' => 72, 'DATEENTERED' => 73, 'MODIFIED' => 74, 'DATEMODIFIED' => 75, 'EXPERT' => 76, 'DATECHECKED' => 77, 'TS' => 78, ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'E_CODE' => 3, 'PopGrowthRef' => 4, 'Sex' => 5, 'Data' => 6, 'DataSourceRef' => 7, 'Loo' => 8, 'Number' => 9, 'r2' => 10, 'SE_Loo' => 11, 'SD_Loo' => 12, 'LCL_Loo' => 13, 'UCL_Loo' => 14, 'AssumedDistLoo' => 15, 'TLinfinity' => 16, 'K' => 17, 'SE_K' => 18, 'SD_K' => 19, 'LCL_K' => 20, 'UCL_K' => 21, 'AssumedDistK' => 22, 'to' => 23, 'SE_to' => 24, 'SD_to' => 25, 'LCL_to' => 26, 'UCL_to' => 27, 'Type' => 28, 'MethodGrowth' => 29, 'Winfinity' => 30, 'LinfLmax' => 31, 'Auxim' => 32, 'LogKLogLoo' => 33, 'SourceWinfinity' => 34, 'b' => 35, 'C' => 36, 'tmax' => 37, 'tmaxRef' => 38, 'tm' => 39, 'M' => 40, 'MethodM' => 41, 'Mquality' => 42, 'MRef' => 43, 'Number_M' => 44, 'r2_M' => 45, 'SE_M' => 46, 'SD_M' => 47, 'LCL_M' => 48, 'UCL_M' => 49, 'AssumedDistM' => 50, 'Lm' => 51, 'LmLoo' => 52, 'LmSex' => 53, 'TypeLm' => 54, 'unsexedRef' => 55, 'LmMale' => 56, 'LmLooMale' => 57, 'LmFemale' => 58, 'LmLooFemale' => 59, 'Locality' => 60, 'YearStart' => 61, 'YearEnd' => 62, 'YearRemark' => 63, 'C_Code' => 64, 'GrowthEnviron' => 65, 'Temperature' => 66, 'DeltaT' => 67, 'TempRef' => 68, 'Rm' => 69, 'Comment' => 70, 'Comment2' => 71, 'Entered' => 72, 'DateEntered' => 73, 'Modified' => 74, 'DateModified' => 75, 'Expert' => 76, 'DateChecked' => 77, 'TS' => 78, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, )
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
        $toNames = PopgrowthPeer::getFieldNames($toType);
        $key = isset(PopgrowthPeer::$fieldKeys[$fromType][$name]) ? PopgrowthPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PopgrowthPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PopgrowthPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PopgrowthPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PopgrowthPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PopgrowthPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PopgrowthPeer::AUTOCTR);
            $criteria->addSelectColumn(PopgrowthPeer::STOCKCODE);
            $criteria->addSelectColumn(PopgrowthPeer::SPECCODE);
            $criteria->addSelectColumn(PopgrowthPeer::E_CODE);
            $criteria->addSelectColumn(PopgrowthPeer::POPGROWTHREF);
            $criteria->addSelectColumn(PopgrowthPeer::SEX);
            $criteria->addSelectColumn(PopgrowthPeer::DATA);
            $criteria->addSelectColumn(PopgrowthPeer::DATASOURCEREF);
            $criteria->addSelectColumn(PopgrowthPeer::LOO);
            $criteria->addSelectColumn(PopgrowthPeer::NUMBER);
            $criteria->addSelectColumn(PopgrowthPeer::R2);
            $criteria->addSelectColumn(PopgrowthPeer::SE_LOO);
            $criteria->addSelectColumn(PopgrowthPeer::SD_LOO);
            $criteria->addSelectColumn(PopgrowthPeer::LCL_LOO);
            $criteria->addSelectColumn(PopgrowthPeer::UCL_LOO);
            $criteria->addSelectColumn(PopgrowthPeer::ASSUMEDDISTLOO);
            $criteria->addSelectColumn(PopgrowthPeer::TLINFINITY);
            $criteria->addSelectColumn(PopgrowthPeer::K);
            $criteria->addSelectColumn(PopgrowthPeer::SE_K);
            $criteria->addSelectColumn(PopgrowthPeer::SD_K);
            $criteria->addSelectColumn(PopgrowthPeer::LCL_K);
            $criteria->addSelectColumn(PopgrowthPeer::UCL_K);
            $criteria->addSelectColumn(PopgrowthPeer::ASSUMEDDISTK);
            $criteria->addSelectColumn(PopgrowthPeer::TO);
            $criteria->addSelectColumn(PopgrowthPeer::SE_TO);
            $criteria->addSelectColumn(PopgrowthPeer::SD_TO);
            $criteria->addSelectColumn(PopgrowthPeer::LCL_TO);
            $criteria->addSelectColumn(PopgrowthPeer::UCL_TO);
            $criteria->addSelectColumn(PopgrowthPeer::TYPE);
            $criteria->addSelectColumn(PopgrowthPeer::METHODGROWTH);
            $criteria->addSelectColumn(PopgrowthPeer::WINFINITY);
            $criteria->addSelectColumn(PopgrowthPeer::LINFLMAX);
            $criteria->addSelectColumn(PopgrowthPeer::AUXIM);
            $criteria->addSelectColumn(PopgrowthPeer::LOGKLOGLOO);
            $criteria->addSelectColumn(PopgrowthPeer::SOURCEWINFINITY);
            $criteria->addSelectColumn(PopgrowthPeer::B);
            $criteria->addSelectColumn(PopgrowthPeer::C);
            $criteria->addSelectColumn(PopgrowthPeer::TMAX);
            $criteria->addSelectColumn(PopgrowthPeer::TMAXREF);
            $criteria->addSelectColumn(PopgrowthPeer::TM);
            $criteria->addSelectColumn(PopgrowthPeer::M);
            $criteria->addSelectColumn(PopgrowthPeer::METHODM);
            $criteria->addSelectColumn(PopgrowthPeer::MQUALITY);
            $criteria->addSelectColumn(PopgrowthPeer::MREF);
            $criteria->addSelectColumn(PopgrowthPeer::NUMBER_M);
            $criteria->addSelectColumn(PopgrowthPeer::R2_M);
            $criteria->addSelectColumn(PopgrowthPeer::SE_M);
            $criteria->addSelectColumn(PopgrowthPeer::SD_M);
            $criteria->addSelectColumn(PopgrowthPeer::LCL_M);
            $criteria->addSelectColumn(PopgrowthPeer::UCL_M);
            $criteria->addSelectColumn(PopgrowthPeer::ASSUMEDDISTM);
            $criteria->addSelectColumn(PopgrowthPeer::LM);
            $criteria->addSelectColumn(PopgrowthPeer::LMLOO);
            $criteria->addSelectColumn(PopgrowthPeer::LMSEX);
            $criteria->addSelectColumn(PopgrowthPeer::TYPELM);
            $criteria->addSelectColumn(PopgrowthPeer::UNSEXEDREF);
            $criteria->addSelectColumn(PopgrowthPeer::LMMALE);
            $criteria->addSelectColumn(PopgrowthPeer::LMLOOMALE);
            $criteria->addSelectColumn(PopgrowthPeer::LMFEMALE);
            $criteria->addSelectColumn(PopgrowthPeer::LMLOOFEMALE);
            $criteria->addSelectColumn(PopgrowthPeer::LOCALITY);
            $criteria->addSelectColumn(PopgrowthPeer::YEARSTART);
            $criteria->addSelectColumn(PopgrowthPeer::YEAREND);
            $criteria->addSelectColumn(PopgrowthPeer::YEARREMARK);
            $criteria->addSelectColumn(PopgrowthPeer::C_CODE);
            $criteria->addSelectColumn(PopgrowthPeer::GROWTHENVIRON);
            $criteria->addSelectColumn(PopgrowthPeer::TEMPERATURE);
            $criteria->addSelectColumn(PopgrowthPeer::DELTAT);
            $criteria->addSelectColumn(PopgrowthPeer::TEMPREF);
            $criteria->addSelectColumn(PopgrowthPeer::RM);
            $criteria->addSelectColumn(PopgrowthPeer::COMMENT);
            $criteria->addSelectColumn(PopgrowthPeer::COMMENT2);
            $criteria->addSelectColumn(PopgrowthPeer::ENTERED);
            $criteria->addSelectColumn(PopgrowthPeer::DATEENTERED);
            $criteria->addSelectColumn(PopgrowthPeer::MODIFIED);
            $criteria->addSelectColumn(PopgrowthPeer::DATEMODIFIED);
            $criteria->addSelectColumn(PopgrowthPeer::EXPERT);
            $criteria->addSelectColumn(PopgrowthPeer::DATECHECKED);
            $criteria->addSelectColumn(PopgrowthPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.AutoCtr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.E_CODE');
            $criteria->addSelectColumn($alias . '.PopGrowthRef');
            $criteria->addSelectColumn($alias . '.Sex');
            $criteria->addSelectColumn($alias . '.Data');
            $criteria->addSelectColumn($alias . '.DataSourceRef');
            $criteria->addSelectColumn($alias . '.Loo');
            $criteria->addSelectColumn($alias . '.Number');
            $criteria->addSelectColumn($alias . '.r2');
            $criteria->addSelectColumn($alias . '.SE_Loo');
            $criteria->addSelectColumn($alias . '.SD_Loo');
            $criteria->addSelectColumn($alias . '.LCL_Loo');
            $criteria->addSelectColumn($alias . '.UCL_Loo');
            $criteria->addSelectColumn($alias . '.AssumedDistLoo');
            $criteria->addSelectColumn($alias . '.TLinfinity');
            $criteria->addSelectColumn($alias . '.K');
            $criteria->addSelectColumn($alias . '.SE_K');
            $criteria->addSelectColumn($alias . '.SD_K');
            $criteria->addSelectColumn($alias . '.LCL_K');
            $criteria->addSelectColumn($alias . '.UCL_K');
            $criteria->addSelectColumn($alias . '.AssumedDistK');
            $criteria->addSelectColumn($alias . '.to');
            $criteria->addSelectColumn($alias . '.SE_to');
            $criteria->addSelectColumn($alias . '.SD_to');
            $criteria->addSelectColumn($alias . '.LCL_to');
            $criteria->addSelectColumn($alias . '.UCL_to');
            $criteria->addSelectColumn($alias . '.Type');
            $criteria->addSelectColumn($alias . '.MethodGrowth');
            $criteria->addSelectColumn($alias . '.Winfinity');
            $criteria->addSelectColumn($alias . '.LinfLmax');
            $criteria->addSelectColumn($alias . '.Auxim');
            $criteria->addSelectColumn($alias . '.LogKLogLoo');
            $criteria->addSelectColumn($alias . '.SourceWinfinity');
            $criteria->addSelectColumn($alias . '.b');
            $criteria->addSelectColumn($alias . '.C');
            $criteria->addSelectColumn($alias . '.tmax');
            $criteria->addSelectColumn($alias . '.tmaxRef');
            $criteria->addSelectColumn($alias . '.tm');
            $criteria->addSelectColumn($alias . '.M');
            $criteria->addSelectColumn($alias . '.MethodM');
            $criteria->addSelectColumn($alias . '.Mquality');
            $criteria->addSelectColumn($alias . '.MRef');
            $criteria->addSelectColumn($alias . '.Number_M');
            $criteria->addSelectColumn($alias . '.r2_M');
            $criteria->addSelectColumn($alias . '.SE_M');
            $criteria->addSelectColumn($alias . '.SD_M');
            $criteria->addSelectColumn($alias . '.LCL_M');
            $criteria->addSelectColumn($alias . '.UCL_M');
            $criteria->addSelectColumn($alias . '.AssumedDistM');
            $criteria->addSelectColumn($alias . '.Lm');
            $criteria->addSelectColumn($alias . '.LmLoo');
            $criteria->addSelectColumn($alias . '.LmSex');
            $criteria->addSelectColumn($alias . '.TypeLm');
            $criteria->addSelectColumn($alias . '.unsexedRef');
            $criteria->addSelectColumn($alias . '.LmMale');
            $criteria->addSelectColumn($alias . '.LmLooMale');
            $criteria->addSelectColumn($alias . '.LmFemale');
            $criteria->addSelectColumn($alias . '.LmLooFemale');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.YearStart');
            $criteria->addSelectColumn($alias . '.YearEnd');
            $criteria->addSelectColumn($alias . '.YearRemark');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.GrowthEnviron');
            $criteria->addSelectColumn($alias . '.Temperature');
            $criteria->addSelectColumn($alias . '.DeltaT');
            $criteria->addSelectColumn($alias . '.TempRef');
            $criteria->addSelectColumn($alias . '.Rm');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.Comment2');
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
        $criteria->setPrimaryTableName(PopgrowthPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PopgrowthPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PopgrowthPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PopgrowthPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Popgrowth
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PopgrowthPeer::doSelect($critcopy, $con);
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
        return PopgrowthPeer::populateObjects(PopgrowthPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PopgrowthPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PopgrowthPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PopgrowthPeer::DATABASE_NAME);

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
     * @param Popgrowth $obj A Popgrowth object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            PopgrowthPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Popgrowth object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Popgrowth) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Popgrowth object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PopgrowthPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Popgrowth Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PopgrowthPeer::$instances[$key])) {
                return PopgrowthPeer::$instances[$key];
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
        foreach (PopgrowthPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PopgrowthPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to popgrowth
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
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
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

        return (int) $row[$startcol];
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
        $cls = PopgrowthPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PopgrowthPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PopgrowthPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PopgrowthPeer::addInstanceToPool($obj, $key);
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
     * @return array (Popgrowth object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PopgrowthPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PopgrowthPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PopgrowthPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PopgrowthPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PopgrowthPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(PopgrowthPeer::DATABASE_NAME)->getTable(PopgrowthPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePopgrowthPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePopgrowthPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PopgrowthTableMap());
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
        return PopgrowthPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Popgrowth or Criteria object.
     *
     * @param      mixed $values Criteria or Popgrowth object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopgrowthPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Popgrowth object
        }

        if ($criteria->containsKey(PopgrowthPeer::AUTOCTR) && $criteria->keyContainsValue(PopgrowthPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PopgrowthPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PopgrowthPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Popgrowth or Criteria object.
     *
     * @param      mixed $values Criteria or Popgrowth object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopgrowthPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PopgrowthPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PopgrowthPeer::AUTOCTR);
            $value = $criteria->remove(PopgrowthPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(PopgrowthPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PopgrowthPeer::TABLE_NAME);
            }

        } else { // $values is Popgrowth object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PopgrowthPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the popgrowth table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopgrowthPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PopgrowthPeer::TABLE_NAME, $con, PopgrowthPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PopgrowthPeer::clearInstancePool();
            PopgrowthPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Popgrowth or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Popgrowth object or primary key or array of primary keys
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
            $con = Propel::getConnection(PopgrowthPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PopgrowthPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Popgrowth) { // it's a model object
            // invalidate the cache for this single object
            PopgrowthPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PopgrowthPeer::DATABASE_NAME);
            $criteria->add(PopgrowthPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PopgrowthPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PopgrowthPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PopgrowthPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Popgrowth object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Popgrowth $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PopgrowthPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PopgrowthPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PopgrowthPeer::DATABASE_NAME, PopgrowthPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Popgrowth
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PopgrowthPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PopgrowthPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PopgrowthPeer::DATABASE_NAME);
        $criteria->add(PopgrowthPeer::AUTOCTR, $pk);

        $v = PopgrowthPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Popgrowth[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopgrowthPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PopgrowthPeer::DATABASE_NAME);
            $criteria->add(PopgrowthPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = PopgrowthPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePopgrowthPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePopgrowthPeer::buildTableMap();

