<?php


/**
 * Base static class for performing query and update operations on the 'spawning' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseSpawningPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'spawning';

    /** the related Propel class for this table */
    const OM_CLASS = 'Spawning';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SpawningTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 74;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 74;

    /** the column name for the autoctr field */
    const AUTOCTR = 'spawning.autoctr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'spawning.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'spawning.SpecCode';

    /** the column name for the SpawningRefNo field */
    const SPAWNINGREFNO = 'spawning.SpawningRefNo';

    /** the column name for the SourceRef field */
    const SOURCEREF = 'spawning.SourceRef';

    /** the column name for the C_Code field */
    const C_CODE = 'spawning.C_Code';

    /** the column name for the E_CODE field */
    const E_CODE = 'spawning.E_CODE';

    /** the column name for the SpawningGround field */
    const SPAWNINGGROUND = 'spawning.SpawningGround';

    /** the column name for the Spawningarea field */
    const SPAWNINGAREA = 'spawning.Spawningarea';

    /** the column name for the Jan field */
    const JAN = 'spawning.Jan';

    /** the column name for the Feb field */
    const FEB = 'spawning.Feb';

    /** the column name for the Mar field */
    const MAR = 'spawning.Mar';

    /** the column name for the Apr field */
    const APR = 'spawning.Apr';

    /** the column name for the May field */
    const MAY = 'spawning.May';

    /** the column name for the Jun field */
    const JUN = 'spawning.Jun';

    /** the column name for the Jul field */
    const JUL = 'spawning.Jul';

    /** the column name for the Aug field */
    const AUG = 'spawning.Aug';

    /** the column name for the Sep field */
    const SEP = 'spawning.Sep';

    /** the column name for the Oct field */
    const OCT = 'spawning.Oct';

    /** the column name for the Nov field */
    const NOV = 'spawning.Nov';

    /** the column name for the Dec field */
    const DEC = 'spawning.Dec';

    /** the column name for the GSI field */
    const GSI = 'spawning.GSI';

    /** the column name for the PercentFemales field */
    const PERCENTFEMALES = 'spawning.PercentFemales';

    /** the column name for the TempLow field */
    const TEMPLOW = 'spawning.TempLow';

    /** the column name for the TempHigh field */
    const TEMPHIGH = 'spawning.TempHigh';

    /** the column name for the SexRatiomid field */
    const SEXRATIOMID = 'spawning.SexRatiomid';

    /** the column name for the SexRmodRef field */
    const SEXRMODREF = 'spawning.SexRmodRef';

    /** the column name for the FecundityMin field */
    const FECUNDITYMIN = 'spawning.FecundityMin';

    /** the column name for the WeightMin field */
    const WEIGHTMIN = 'spawning.WeightMin';

    /** the column name for the LengthFecunMin field */
    const LENGTHFECUNMIN = 'spawning.LengthFecunMin';

    /** the column name for the LengthTypeFecMin field */
    const LENGTHTYPEFECMIN = 'spawning.LengthTypeFecMin';

    /** the column name for the FecundityRef field */
    const FECUNDITYREF = 'spawning.FecundityRef';

    /** the column name for the FecundityMax field */
    const FECUNDITYMAX = 'spawning.FecundityMax';

    /** the column name for the WeightMax field */
    const WEIGHTMAX = 'spawning.WeightMax';

    /** the column name for the LengthFecunMax field */
    const LENGTHFECUNMAX = 'spawning.LengthFecunMax';

    /** the column name for the LengthTypeFecMax field */
    const LENGTHTYPEFECMAX = 'spawning.LengthTypeFecMax';

    /** the column name for the FecComment field */
    const FECCOMMENT = 'spawning.FecComment';

    /** the column name for the SpawningCycles field */
    const SPAWNINGCYCLES = 'spawning.SpawningCycles';

    /** the column name for the SpCycleRef field */
    const SPCYCLEREF = 'spawning.SpCycleRef';

    /** the column name for the GestationMin field */
    const GESTATIONMIN = 'spawning.GestationMin';

    /** the column name for the GestationMinRef field */
    const GESTATIONMINREF = 'spawning.GestationMinRef';

    /** the column name for the GestationMax field */
    const GESTATIONMAX = 'spawning.GestationMax';

    /** the column name for the GestationMaxRef field */
    const GESTATIONMAXREF = 'spawning.GestationMaxRef';

    /** the column name for the LengthOffspringMin field */
    const LENGTHOFFSPRINGMIN = 'spawning.LengthOffspringMin';

    /** the column name for the LengthOffMinRef field */
    const LENGTHOFFMINREF = 'spawning.LengthOffMinRef';

    /** the column name for the LengthOffspringMax field */
    const LENGTHOFFSPRINGMAX = 'spawning.LengthOffspringMax';

    /** the column name for the LengthOffMaxRef field */
    const LENGTHOFFMAXREF = 'spawning.LengthOffMaxRef';

    /** the column name for the RelFecundityMin field */
    const RELFECUNDITYMIN = 'spawning.RelFecundityMin';

    /** the column name for the FecunMinRef field */
    const FECUNMINREF = 'spawning.FecunMinRef';

    /** the column name for the RelFecundityMean field */
    const RELFECUNDITYMEAN = 'spawning.RelFecundityMean';

    /** the column name for the FecunMeanRef field */
    const FECUNMEANREF = 'spawning.FecunMeanRef';

    /** the column name for the RelFecundityMax field */
    const RELFECUNDITYMAX = 'spawning.RelFecundityMax';

    /** the column name for the FecunMaxRef field */
    const FECUNMAXREF = 'spawning.FecunMaxRef';

    /** the column name for the LengthMin field */
    const LENGTHMIN = 'spawning.LengthMin';

    /** the column name for the LengthMax field */
    const LENGTHMAX = 'spawning.LengthMax';

    /** the column name for the LengthType field */
    const LENGTHTYPE = 'spawning.LengthType';

    /** the column name for the Number field */
    const NUMBER = 'spawning.Number';

    /** the column name for the a field */
    const A = 'spawning.a';

    /** the column name for the b field */
    const B = 'spawning.b';

    /** the column name for the CorrCoeff field */
    const CORRCOEFF = 'spawning.CorrCoeff';

    /** the column name for the Dailyspawnmin field */
    const DAILYSPAWNMIN = 'spawning.Dailyspawnmin';

    /** the column name for the SpawnMinRef field */
    const SPAWNMINREF = 'spawning.SpawnMinRef';

    /** the column name for the Dailyspawnmean field */
    const DAILYSPAWNMEAN = 'spawning.Dailyspawnmean';

    /** the column name for the SpawnMeanRef field */
    const SPAWNMEANREF = 'spawning.SpawnMeanRef';

    /** the column name for the Dailyspawnmax field */
    const DAILYSPAWNMAX = 'spawning.Dailyspawnmax';

    /** the column name for the SpawnMaxRef field */
    const SPAWNMAXREF = 'spawning.SpawnMaxRef';

    /** the column name for the Entered field */
    const ENTERED = 'spawning.Entered';

    /** the column name for the Dateentered field */
    const DATEENTERED = 'spawning.Dateentered';

    /** the column name for the Modified field */
    const MODIFIED = 'spawning.Modified';

    /** the column name for the Datemodified field */
    const DATEMODIFIED = 'spawning.Datemodified';

    /** the column name for the Expert field */
    const EXPERT = 'spawning.Expert';

    /** the column name for the Datechecked field */
    const DATECHECKED = 'spawning.Datechecked';

    /** the column name for the AddInfos field */
    const ADDINFOS = 'spawning.AddInfos';

    /** the column name for the TS field */
    const TS = 'spawning.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Spawning objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Spawning[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SpawningPeer::$fieldNames[SpawningPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Spawningrefno', 'Sourceref', 'CCode', 'ECode', 'Spawningground', 'Spawningarea', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Gsi', 'Percentfemales', 'Templow', 'Temphigh', 'Sexratiomid', 'Sexrmodref', 'Fecunditymin', 'Weightmin', 'Lengthfecunmin', 'Lengthtypefecmin', 'Fecundityref', 'Fecunditymax', 'Weightmax', 'Lengthfecunmax', 'Lengthtypefecmax', 'Feccomment', 'Spawningcycles', 'Spcycleref', 'Gestationmin', 'Gestationminref', 'Gestationmax', 'Gestationmaxref', 'Lengthoffspringmin', 'Lengthoffminref', 'Lengthoffspringmax', 'Lengthoffmaxref', 'Relfecunditymin', 'Fecunminref', 'Relfecunditymean', 'Fecunmeanref', 'Relfecunditymax', 'Fecunmaxref', 'Lengthmin', 'Lengthmax', 'Lengthtype', 'Number', 'A', 'B', 'Corrcoeff', 'Dailyspawnmin', 'Spawnminref', 'Dailyspawnmean', 'Spawnmeanref', 'Dailyspawnmax', 'Spawnmaxref', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Addinfos', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'spawningrefno', 'sourceref', 'cCode', 'eCode', 'spawningground', 'spawningarea', 'jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec', 'gsi', 'percentfemales', 'templow', 'temphigh', 'sexratiomid', 'sexrmodref', 'fecunditymin', 'weightmin', 'lengthfecunmin', 'lengthtypefecmin', 'fecundityref', 'fecunditymax', 'weightmax', 'lengthfecunmax', 'lengthtypefecmax', 'feccomment', 'spawningcycles', 'spcycleref', 'gestationmin', 'gestationminref', 'gestationmax', 'gestationmaxref', 'lengthoffspringmin', 'lengthoffminref', 'lengthoffspringmax', 'lengthoffmaxref', 'relfecunditymin', 'fecunminref', 'relfecunditymean', 'fecunmeanref', 'relfecunditymax', 'fecunmaxref', 'lengthmin', 'lengthmax', 'lengthtype', 'number', 'a', 'b', 'corrcoeff', 'dailyspawnmin', 'spawnminref', 'dailyspawnmean', 'spawnmeanref', 'dailyspawnmax', 'spawnmaxref', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'addinfos', 'ts', ),
        BasePeer::TYPE_COLNAME => array (SpawningPeer::AUTOCTR, SpawningPeer::STOCKCODE, SpawningPeer::SPECCODE, SpawningPeer::SPAWNINGREFNO, SpawningPeer::SOURCEREF, SpawningPeer::C_CODE, SpawningPeer::E_CODE, SpawningPeer::SPAWNINGGROUND, SpawningPeer::SPAWNINGAREA, SpawningPeer::JAN, SpawningPeer::FEB, SpawningPeer::MAR, SpawningPeer::APR, SpawningPeer::MAY, SpawningPeer::JUN, SpawningPeer::JUL, SpawningPeer::AUG, SpawningPeer::SEP, SpawningPeer::OCT, SpawningPeer::NOV, SpawningPeer::DEC, SpawningPeer::GSI, SpawningPeer::PERCENTFEMALES, SpawningPeer::TEMPLOW, SpawningPeer::TEMPHIGH, SpawningPeer::SEXRATIOMID, SpawningPeer::SEXRMODREF, SpawningPeer::FECUNDITYMIN, SpawningPeer::WEIGHTMIN, SpawningPeer::LENGTHFECUNMIN, SpawningPeer::LENGTHTYPEFECMIN, SpawningPeer::FECUNDITYREF, SpawningPeer::FECUNDITYMAX, SpawningPeer::WEIGHTMAX, SpawningPeer::LENGTHFECUNMAX, SpawningPeer::LENGTHTYPEFECMAX, SpawningPeer::FECCOMMENT, SpawningPeer::SPAWNINGCYCLES, SpawningPeer::SPCYCLEREF, SpawningPeer::GESTATIONMIN, SpawningPeer::GESTATIONMINREF, SpawningPeer::GESTATIONMAX, SpawningPeer::GESTATIONMAXREF, SpawningPeer::LENGTHOFFSPRINGMIN, SpawningPeer::LENGTHOFFMINREF, SpawningPeer::LENGTHOFFSPRINGMAX, SpawningPeer::LENGTHOFFMAXREF, SpawningPeer::RELFECUNDITYMIN, SpawningPeer::FECUNMINREF, SpawningPeer::RELFECUNDITYMEAN, SpawningPeer::FECUNMEANREF, SpawningPeer::RELFECUNDITYMAX, SpawningPeer::FECUNMAXREF, SpawningPeer::LENGTHMIN, SpawningPeer::LENGTHMAX, SpawningPeer::LENGTHTYPE, SpawningPeer::NUMBER, SpawningPeer::A, SpawningPeer::B, SpawningPeer::CORRCOEFF, SpawningPeer::DAILYSPAWNMIN, SpawningPeer::SPAWNMINREF, SpawningPeer::DAILYSPAWNMEAN, SpawningPeer::SPAWNMEANREF, SpawningPeer::DAILYSPAWNMAX, SpawningPeer::SPAWNMAXREF, SpawningPeer::ENTERED, SpawningPeer::DATEENTERED, SpawningPeer::MODIFIED, SpawningPeer::DATEMODIFIED, SpawningPeer::EXPERT, SpawningPeer::DATECHECKED, SpawningPeer::ADDINFOS, SpawningPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'SPAWNINGREFNO', 'SOURCEREF', 'C_CODE', 'E_CODE', 'SPAWNINGGROUND', 'SPAWNINGAREA', 'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC', 'GSI', 'PERCENTFEMALES', 'TEMPLOW', 'TEMPHIGH', 'SEXRATIOMID', 'SEXRMODREF', 'FECUNDITYMIN', 'WEIGHTMIN', 'LENGTHFECUNMIN', 'LENGTHTYPEFECMIN', 'FECUNDITYREF', 'FECUNDITYMAX', 'WEIGHTMAX', 'LENGTHFECUNMAX', 'LENGTHTYPEFECMAX', 'FECCOMMENT', 'SPAWNINGCYCLES', 'SPCYCLEREF', 'GESTATIONMIN', 'GESTATIONMINREF', 'GESTATIONMAX', 'GESTATIONMAXREF', 'LENGTHOFFSPRINGMIN', 'LENGTHOFFMINREF', 'LENGTHOFFSPRINGMAX', 'LENGTHOFFMAXREF', 'RELFECUNDITYMIN', 'FECUNMINREF', 'RELFECUNDITYMEAN', 'FECUNMEANREF', 'RELFECUNDITYMAX', 'FECUNMAXREF', 'LENGTHMIN', 'LENGTHMAX', 'LENGTHTYPE', 'NUMBER', 'A', 'B', 'CORRCOEFF', 'DAILYSPAWNMIN', 'SPAWNMINREF', 'DAILYSPAWNMEAN', 'SPAWNMEANREF', 'DAILYSPAWNMAX', 'SPAWNMAXREF', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'ADDINFOS', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'StockCode', 'SpecCode', 'SpawningRefNo', 'SourceRef', 'C_Code', 'E_CODE', 'SpawningGround', 'Spawningarea', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'GSI', 'PercentFemales', 'TempLow', 'TempHigh', 'SexRatiomid', 'SexRmodRef', 'FecundityMin', 'WeightMin', 'LengthFecunMin', 'LengthTypeFecMin', 'FecundityRef', 'FecundityMax', 'WeightMax', 'LengthFecunMax', 'LengthTypeFecMax', 'FecComment', 'SpawningCycles', 'SpCycleRef', 'GestationMin', 'GestationMinRef', 'GestationMax', 'GestationMaxRef', 'LengthOffspringMin', 'LengthOffMinRef', 'LengthOffspringMax', 'LengthOffMaxRef', 'RelFecundityMin', 'FecunMinRef', 'RelFecundityMean', 'FecunMeanRef', 'RelFecundityMax', 'FecunMaxRef', 'LengthMin', 'LengthMax', 'LengthType', 'Number', 'a', 'b', 'CorrCoeff', 'Dailyspawnmin', 'SpawnMinRef', 'Dailyspawnmean', 'SpawnMeanRef', 'Dailyspawnmax', 'SpawnMaxRef', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'AddInfos', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SpawningPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Spawningrefno' => 3, 'Sourceref' => 4, 'CCode' => 5, 'ECode' => 6, 'Spawningground' => 7, 'Spawningarea' => 8, 'Jan' => 9, 'Feb' => 10, 'Mar' => 11, 'Apr' => 12, 'May' => 13, 'Jun' => 14, 'Jul' => 15, 'Aug' => 16, 'Sep' => 17, 'Oct' => 18, 'Nov' => 19, 'Dec' => 20, 'Gsi' => 21, 'Percentfemales' => 22, 'Templow' => 23, 'Temphigh' => 24, 'Sexratiomid' => 25, 'Sexrmodref' => 26, 'Fecunditymin' => 27, 'Weightmin' => 28, 'Lengthfecunmin' => 29, 'Lengthtypefecmin' => 30, 'Fecundityref' => 31, 'Fecunditymax' => 32, 'Weightmax' => 33, 'Lengthfecunmax' => 34, 'Lengthtypefecmax' => 35, 'Feccomment' => 36, 'Spawningcycles' => 37, 'Spcycleref' => 38, 'Gestationmin' => 39, 'Gestationminref' => 40, 'Gestationmax' => 41, 'Gestationmaxref' => 42, 'Lengthoffspringmin' => 43, 'Lengthoffminref' => 44, 'Lengthoffspringmax' => 45, 'Lengthoffmaxref' => 46, 'Relfecunditymin' => 47, 'Fecunminref' => 48, 'Relfecunditymean' => 49, 'Fecunmeanref' => 50, 'Relfecunditymax' => 51, 'Fecunmaxref' => 52, 'Lengthmin' => 53, 'Lengthmax' => 54, 'Lengthtype' => 55, 'Number' => 56, 'A' => 57, 'B' => 58, 'Corrcoeff' => 59, 'Dailyspawnmin' => 60, 'Spawnminref' => 61, 'Dailyspawnmean' => 62, 'Spawnmeanref' => 63, 'Dailyspawnmax' => 64, 'Spawnmaxref' => 65, 'Entered' => 66, 'Dateentered' => 67, 'Modified' => 68, 'Datemodified' => 69, 'Expert' => 70, 'Datechecked' => 71, 'Addinfos' => 72, 'Ts' => 73, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'spawningrefno' => 3, 'sourceref' => 4, 'cCode' => 5, 'eCode' => 6, 'spawningground' => 7, 'spawningarea' => 8, 'jan' => 9, 'feb' => 10, 'mar' => 11, 'apr' => 12, 'may' => 13, 'jun' => 14, 'jul' => 15, 'aug' => 16, 'sep' => 17, 'oct' => 18, 'nov' => 19, 'dec' => 20, 'gsi' => 21, 'percentfemales' => 22, 'templow' => 23, 'temphigh' => 24, 'sexratiomid' => 25, 'sexrmodref' => 26, 'fecunditymin' => 27, 'weightmin' => 28, 'lengthfecunmin' => 29, 'lengthtypefecmin' => 30, 'fecundityref' => 31, 'fecunditymax' => 32, 'weightmax' => 33, 'lengthfecunmax' => 34, 'lengthtypefecmax' => 35, 'feccomment' => 36, 'spawningcycles' => 37, 'spcycleref' => 38, 'gestationmin' => 39, 'gestationminref' => 40, 'gestationmax' => 41, 'gestationmaxref' => 42, 'lengthoffspringmin' => 43, 'lengthoffminref' => 44, 'lengthoffspringmax' => 45, 'lengthoffmaxref' => 46, 'relfecunditymin' => 47, 'fecunminref' => 48, 'relfecunditymean' => 49, 'fecunmeanref' => 50, 'relfecunditymax' => 51, 'fecunmaxref' => 52, 'lengthmin' => 53, 'lengthmax' => 54, 'lengthtype' => 55, 'number' => 56, 'a' => 57, 'b' => 58, 'corrcoeff' => 59, 'dailyspawnmin' => 60, 'spawnminref' => 61, 'dailyspawnmean' => 62, 'spawnmeanref' => 63, 'dailyspawnmax' => 64, 'spawnmaxref' => 65, 'entered' => 66, 'dateentered' => 67, 'modified' => 68, 'datemodified' => 69, 'expert' => 70, 'datechecked' => 71, 'addinfos' => 72, 'ts' => 73, ),
        BasePeer::TYPE_COLNAME => array (SpawningPeer::AUTOCTR => 0, SpawningPeer::STOCKCODE => 1, SpawningPeer::SPECCODE => 2, SpawningPeer::SPAWNINGREFNO => 3, SpawningPeer::SOURCEREF => 4, SpawningPeer::C_CODE => 5, SpawningPeer::E_CODE => 6, SpawningPeer::SPAWNINGGROUND => 7, SpawningPeer::SPAWNINGAREA => 8, SpawningPeer::JAN => 9, SpawningPeer::FEB => 10, SpawningPeer::MAR => 11, SpawningPeer::APR => 12, SpawningPeer::MAY => 13, SpawningPeer::JUN => 14, SpawningPeer::JUL => 15, SpawningPeer::AUG => 16, SpawningPeer::SEP => 17, SpawningPeer::OCT => 18, SpawningPeer::NOV => 19, SpawningPeer::DEC => 20, SpawningPeer::GSI => 21, SpawningPeer::PERCENTFEMALES => 22, SpawningPeer::TEMPLOW => 23, SpawningPeer::TEMPHIGH => 24, SpawningPeer::SEXRATIOMID => 25, SpawningPeer::SEXRMODREF => 26, SpawningPeer::FECUNDITYMIN => 27, SpawningPeer::WEIGHTMIN => 28, SpawningPeer::LENGTHFECUNMIN => 29, SpawningPeer::LENGTHTYPEFECMIN => 30, SpawningPeer::FECUNDITYREF => 31, SpawningPeer::FECUNDITYMAX => 32, SpawningPeer::WEIGHTMAX => 33, SpawningPeer::LENGTHFECUNMAX => 34, SpawningPeer::LENGTHTYPEFECMAX => 35, SpawningPeer::FECCOMMENT => 36, SpawningPeer::SPAWNINGCYCLES => 37, SpawningPeer::SPCYCLEREF => 38, SpawningPeer::GESTATIONMIN => 39, SpawningPeer::GESTATIONMINREF => 40, SpawningPeer::GESTATIONMAX => 41, SpawningPeer::GESTATIONMAXREF => 42, SpawningPeer::LENGTHOFFSPRINGMIN => 43, SpawningPeer::LENGTHOFFMINREF => 44, SpawningPeer::LENGTHOFFSPRINGMAX => 45, SpawningPeer::LENGTHOFFMAXREF => 46, SpawningPeer::RELFECUNDITYMIN => 47, SpawningPeer::FECUNMINREF => 48, SpawningPeer::RELFECUNDITYMEAN => 49, SpawningPeer::FECUNMEANREF => 50, SpawningPeer::RELFECUNDITYMAX => 51, SpawningPeer::FECUNMAXREF => 52, SpawningPeer::LENGTHMIN => 53, SpawningPeer::LENGTHMAX => 54, SpawningPeer::LENGTHTYPE => 55, SpawningPeer::NUMBER => 56, SpawningPeer::A => 57, SpawningPeer::B => 58, SpawningPeer::CORRCOEFF => 59, SpawningPeer::DAILYSPAWNMIN => 60, SpawningPeer::SPAWNMINREF => 61, SpawningPeer::DAILYSPAWNMEAN => 62, SpawningPeer::SPAWNMEANREF => 63, SpawningPeer::DAILYSPAWNMAX => 64, SpawningPeer::SPAWNMAXREF => 65, SpawningPeer::ENTERED => 66, SpawningPeer::DATEENTERED => 67, SpawningPeer::MODIFIED => 68, SpawningPeer::DATEMODIFIED => 69, SpawningPeer::EXPERT => 70, SpawningPeer::DATECHECKED => 71, SpawningPeer::ADDINFOS => 72, SpawningPeer::TS => 73, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'SPAWNINGREFNO' => 3, 'SOURCEREF' => 4, 'C_CODE' => 5, 'E_CODE' => 6, 'SPAWNINGGROUND' => 7, 'SPAWNINGAREA' => 8, 'JAN' => 9, 'FEB' => 10, 'MAR' => 11, 'APR' => 12, 'MAY' => 13, 'JUN' => 14, 'JUL' => 15, 'AUG' => 16, 'SEP' => 17, 'OCT' => 18, 'NOV' => 19, 'DEC' => 20, 'GSI' => 21, 'PERCENTFEMALES' => 22, 'TEMPLOW' => 23, 'TEMPHIGH' => 24, 'SEXRATIOMID' => 25, 'SEXRMODREF' => 26, 'FECUNDITYMIN' => 27, 'WEIGHTMIN' => 28, 'LENGTHFECUNMIN' => 29, 'LENGTHTYPEFECMIN' => 30, 'FECUNDITYREF' => 31, 'FECUNDITYMAX' => 32, 'WEIGHTMAX' => 33, 'LENGTHFECUNMAX' => 34, 'LENGTHTYPEFECMAX' => 35, 'FECCOMMENT' => 36, 'SPAWNINGCYCLES' => 37, 'SPCYCLEREF' => 38, 'GESTATIONMIN' => 39, 'GESTATIONMINREF' => 40, 'GESTATIONMAX' => 41, 'GESTATIONMAXREF' => 42, 'LENGTHOFFSPRINGMIN' => 43, 'LENGTHOFFMINREF' => 44, 'LENGTHOFFSPRINGMAX' => 45, 'LENGTHOFFMAXREF' => 46, 'RELFECUNDITYMIN' => 47, 'FECUNMINREF' => 48, 'RELFECUNDITYMEAN' => 49, 'FECUNMEANREF' => 50, 'RELFECUNDITYMAX' => 51, 'FECUNMAXREF' => 52, 'LENGTHMIN' => 53, 'LENGTHMAX' => 54, 'LENGTHTYPE' => 55, 'NUMBER' => 56, 'A' => 57, 'B' => 58, 'CORRCOEFF' => 59, 'DAILYSPAWNMIN' => 60, 'SPAWNMINREF' => 61, 'DAILYSPAWNMEAN' => 62, 'SPAWNMEANREF' => 63, 'DAILYSPAWNMAX' => 64, 'SPAWNMAXREF' => 65, 'ENTERED' => 66, 'DATEENTERED' => 67, 'MODIFIED' => 68, 'DATEMODIFIED' => 69, 'EXPERT' => 70, 'DATECHECKED' => 71, 'ADDINFOS' => 72, 'TS' => 73, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'SpawningRefNo' => 3, 'SourceRef' => 4, 'C_Code' => 5, 'E_CODE' => 6, 'SpawningGround' => 7, 'Spawningarea' => 8, 'Jan' => 9, 'Feb' => 10, 'Mar' => 11, 'Apr' => 12, 'May' => 13, 'Jun' => 14, 'Jul' => 15, 'Aug' => 16, 'Sep' => 17, 'Oct' => 18, 'Nov' => 19, 'Dec' => 20, 'GSI' => 21, 'PercentFemales' => 22, 'TempLow' => 23, 'TempHigh' => 24, 'SexRatiomid' => 25, 'SexRmodRef' => 26, 'FecundityMin' => 27, 'WeightMin' => 28, 'LengthFecunMin' => 29, 'LengthTypeFecMin' => 30, 'FecundityRef' => 31, 'FecundityMax' => 32, 'WeightMax' => 33, 'LengthFecunMax' => 34, 'LengthTypeFecMax' => 35, 'FecComment' => 36, 'SpawningCycles' => 37, 'SpCycleRef' => 38, 'GestationMin' => 39, 'GestationMinRef' => 40, 'GestationMax' => 41, 'GestationMaxRef' => 42, 'LengthOffspringMin' => 43, 'LengthOffMinRef' => 44, 'LengthOffspringMax' => 45, 'LengthOffMaxRef' => 46, 'RelFecundityMin' => 47, 'FecunMinRef' => 48, 'RelFecundityMean' => 49, 'FecunMeanRef' => 50, 'RelFecundityMax' => 51, 'FecunMaxRef' => 52, 'LengthMin' => 53, 'LengthMax' => 54, 'LengthType' => 55, 'Number' => 56, 'a' => 57, 'b' => 58, 'CorrCoeff' => 59, 'Dailyspawnmin' => 60, 'SpawnMinRef' => 61, 'Dailyspawnmean' => 62, 'SpawnMeanRef' => 63, 'Dailyspawnmax' => 64, 'SpawnMaxRef' => 65, 'Entered' => 66, 'Dateentered' => 67, 'Modified' => 68, 'Datemodified' => 69, 'Expert' => 70, 'Datechecked' => 71, 'AddInfos' => 72, 'TS' => 73, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, )
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
        $toNames = SpawningPeer::getFieldNames($toType);
        $key = isset(SpawningPeer::$fieldKeys[$fromType][$name]) ? SpawningPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SpawningPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SpawningPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SpawningPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SpawningPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SpawningPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SpawningPeer::AUTOCTR);
            $criteria->addSelectColumn(SpawningPeer::STOCKCODE);
            $criteria->addSelectColumn(SpawningPeer::SPECCODE);
            $criteria->addSelectColumn(SpawningPeer::SPAWNINGREFNO);
            $criteria->addSelectColumn(SpawningPeer::SOURCEREF);
            $criteria->addSelectColumn(SpawningPeer::C_CODE);
            $criteria->addSelectColumn(SpawningPeer::E_CODE);
            $criteria->addSelectColumn(SpawningPeer::SPAWNINGGROUND);
            $criteria->addSelectColumn(SpawningPeer::SPAWNINGAREA);
            $criteria->addSelectColumn(SpawningPeer::JAN);
            $criteria->addSelectColumn(SpawningPeer::FEB);
            $criteria->addSelectColumn(SpawningPeer::MAR);
            $criteria->addSelectColumn(SpawningPeer::APR);
            $criteria->addSelectColumn(SpawningPeer::MAY);
            $criteria->addSelectColumn(SpawningPeer::JUN);
            $criteria->addSelectColumn(SpawningPeer::JUL);
            $criteria->addSelectColumn(SpawningPeer::AUG);
            $criteria->addSelectColumn(SpawningPeer::SEP);
            $criteria->addSelectColumn(SpawningPeer::OCT);
            $criteria->addSelectColumn(SpawningPeer::NOV);
            $criteria->addSelectColumn(SpawningPeer::DEC);
            $criteria->addSelectColumn(SpawningPeer::GSI);
            $criteria->addSelectColumn(SpawningPeer::PERCENTFEMALES);
            $criteria->addSelectColumn(SpawningPeer::TEMPLOW);
            $criteria->addSelectColumn(SpawningPeer::TEMPHIGH);
            $criteria->addSelectColumn(SpawningPeer::SEXRATIOMID);
            $criteria->addSelectColumn(SpawningPeer::SEXRMODREF);
            $criteria->addSelectColumn(SpawningPeer::FECUNDITYMIN);
            $criteria->addSelectColumn(SpawningPeer::WEIGHTMIN);
            $criteria->addSelectColumn(SpawningPeer::LENGTHFECUNMIN);
            $criteria->addSelectColumn(SpawningPeer::LENGTHTYPEFECMIN);
            $criteria->addSelectColumn(SpawningPeer::FECUNDITYREF);
            $criteria->addSelectColumn(SpawningPeer::FECUNDITYMAX);
            $criteria->addSelectColumn(SpawningPeer::WEIGHTMAX);
            $criteria->addSelectColumn(SpawningPeer::LENGTHFECUNMAX);
            $criteria->addSelectColumn(SpawningPeer::LENGTHTYPEFECMAX);
            $criteria->addSelectColumn(SpawningPeer::FECCOMMENT);
            $criteria->addSelectColumn(SpawningPeer::SPAWNINGCYCLES);
            $criteria->addSelectColumn(SpawningPeer::SPCYCLEREF);
            $criteria->addSelectColumn(SpawningPeer::GESTATIONMIN);
            $criteria->addSelectColumn(SpawningPeer::GESTATIONMINREF);
            $criteria->addSelectColumn(SpawningPeer::GESTATIONMAX);
            $criteria->addSelectColumn(SpawningPeer::GESTATIONMAXREF);
            $criteria->addSelectColumn(SpawningPeer::LENGTHOFFSPRINGMIN);
            $criteria->addSelectColumn(SpawningPeer::LENGTHOFFMINREF);
            $criteria->addSelectColumn(SpawningPeer::LENGTHOFFSPRINGMAX);
            $criteria->addSelectColumn(SpawningPeer::LENGTHOFFMAXREF);
            $criteria->addSelectColumn(SpawningPeer::RELFECUNDITYMIN);
            $criteria->addSelectColumn(SpawningPeer::FECUNMINREF);
            $criteria->addSelectColumn(SpawningPeer::RELFECUNDITYMEAN);
            $criteria->addSelectColumn(SpawningPeer::FECUNMEANREF);
            $criteria->addSelectColumn(SpawningPeer::RELFECUNDITYMAX);
            $criteria->addSelectColumn(SpawningPeer::FECUNMAXREF);
            $criteria->addSelectColumn(SpawningPeer::LENGTHMIN);
            $criteria->addSelectColumn(SpawningPeer::LENGTHMAX);
            $criteria->addSelectColumn(SpawningPeer::LENGTHTYPE);
            $criteria->addSelectColumn(SpawningPeer::NUMBER);
            $criteria->addSelectColumn(SpawningPeer::A);
            $criteria->addSelectColumn(SpawningPeer::B);
            $criteria->addSelectColumn(SpawningPeer::CORRCOEFF);
            $criteria->addSelectColumn(SpawningPeer::DAILYSPAWNMIN);
            $criteria->addSelectColumn(SpawningPeer::SPAWNMINREF);
            $criteria->addSelectColumn(SpawningPeer::DAILYSPAWNMEAN);
            $criteria->addSelectColumn(SpawningPeer::SPAWNMEANREF);
            $criteria->addSelectColumn(SpawningPeer::DAILYSPAWNMAX);
            $criteria->addSelectColumn(SpawningPeer::SPAWNMAXREF);
            $criteria->addSelectColumn(SpawningPeer::ENTERED);
            $criteria->addSelectColumn(SpawningPeer::DATEENTERED);
            $criteria->addSelectColumn(SpawningPeer::MODIFIED);
            $criteria->addSelectColumn(SpawningPeer::DATEMODIFIED);
            $criteria->addSelectColumn(SpawningPeer::EXPERT);
            $criteria->addSelectColumn(SpawningPeer::DATECHECKED);
            $criteria->addSelectColumn(SpawningPeer::ADDINFOS);
            $criteria->addSelectColumn(SpawningPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.SpawningRefNo');
            $criteria->addSelectColumn($alias . '.SourceRef');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.E_CODE');
            $criteria->addSelectColumn($alias . '.SpawningGround');
            $criteria->addSelectColumn($alias . '.Spawningarea');
            $criteria->addSelectColumn($alias . '.Jan');
            $criteria->addSelectColumn($alias . '.Feb');
            $criteria->addSelectColumn($alias . '.Mar');
            $criteria->addSelectColumn($alias . '.Apr');
            $criteria->addSelectColumn($alias . '.May');
            $criteria->addSelectColumn($alias . '.Jun');
            $criteria->addSelectColumn($alias . '.Jul');
            $criteria->addSelectColumn($alias . '.Aug');
            $criteria->addSelectColumn($alias . '.Sep');
            $criteria->addSelectColumn($alias . '.Oct');
            $criteria->addSelectColumn($alias . '.Nov');
            $criteria->addSelectColumn($alias . '.Dec');
            $criteria->addSelectColumn($alias . '.GSI');
            $criteria->addSelectColumn($alias . '.PercentFemales');
            $criteria->addSelectColumn($alias . '.TempLow');
            $criteria->addSelectColumn($alias . '.TempHigh');
            $criteria->addSelectColumn($alias . '.SexRatiomid');
            $criteria->addSelectColumn($alias . '.SexRmodRef');
            $criteria->addSelectColumn($alias . '.FecundityMin');
            $criteria->addSelectColumn($alias . '.WeightMin');
            $criteria->addSelectColumn($alias . '.LengthFecunMin');
            $criteria->addSelectColumn($alias . '.LengthTypeFecMin');
            $criteria->addSelectColumn($alias . '.FecundityRef');
            $criteria->addSelectColumn($alias . '.FecundityMax');
            $criteria->addSelectColumn($alias . '.WeightMax');
            $criteria->addSelectColumn($alias . '.LengthFecunMax');
            $criteria->addSelectColumn($alias . '.LengthTypeFecMax');
            $criteria->addSelectColumn($alias . '.FecComment');
            $criteria->addSelectColumn($alias . '.SpawningCycles');
            $criteria->addSelectColumn($alias . '.SpCycleRef');
            $criteria->addSelectColumn($alias . '.GestationMin');
            $criteria->addSelectColumn($alias . '.GestationMinRef');
            $criteria->addSelectColumn($alias . '.GestationMax');
            $criteria->addSelectColumn($alias . '.GestationMaxRef');
            $criteria->addSelectColumn($alias . '.LengthOffspringMin');
            $criteria->addSelectColumn($alias . '.LengthOffMinRef');
            $criteria->addSelectColumn($alias . '.LengthOffspringMax');
            $criteria->addSelectColumn($alias . '.LengthOffMaxRef');
            $criteria->addSelectColumn($alias . '.RelFecundityMin');
            $criteria->addSelectColumn($alias . '.FecunMinRef');
            $criteria->addSelectColumn($alias . '.RelFecundityMean');
            $criteria->addSelectColumn($alias . '.FecunMeanRef');
            $criteria->addSelectColumn($alias . '.RelFecundityMax');
            $criteria->addSelectColumn($alias . '.FecunMaxRef');
            $criteria->addSelectColumn($alias . '.LengthMin');
            $criteria->addSelectColumn($alias . '.LengthMax');
            $criteria->addSelectColumn($alias . '.LengthType');
            $criteria->addSelectColumn($alias . '.Number');
            $criteria->addSelectColumn($alias . '.a');
            $criteria->addSelectColumn($alias . '.b');
            $criteria->addSelectColumn($alias . '.CorrCoeff');
            $criteria->addSelectColumn($alias . '.Dailyspawnmin');
            $criteria->addSelectColumn($alias . '.SpawnMinRef');
            $criteria->addSelectColumn($alias . '.Dailyspawnmean');
            $criteria->addSelectColumn($alias . '.SpawnMeanRef');
            $criteria->addSelectColumn($alias . '.Dailyspawnmax');
            $criteria->addSelectColumn($alias . '.SpawnMaxRef');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.Dateentered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.Datemodified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.Datechecked');
            $criteria->addSelectColumn($alias . '.AddInfos');
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
        $criteria->setPrimaryTableName(SpawningPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SpawningPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SpawningPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SpawningPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Spawning
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SpawningPeer::doSelect($critcopy, $con);
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
        return SpawningPeer::populateObjects(SpawningPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SpawningPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SpawningPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SpawningPeer::DATABASE_NAME);

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
     * @param Spawning $obj A Spawning object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getSpawningrefno(), (string) $obj->getSpawningarea()));
            } // if key === null
            SpawningPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Spawning object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Spawning) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getSpawningrefno(), (string) $value->getSpawningarea()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Spawning object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SpawningPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Spawning Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SpawningPeer::$instances[$key])) {
                return SpawningPeer::$instances[$key];
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
        foreach (SpawningPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SpawningPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to spawning
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
        if ($row[$startcol + 1] === null && $row[$startcol + 3] === null && $row[$startcol + 8] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 3], (string) $row[$startcol + 8]));
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

        return array((int) $row[$startcol + 1], (int) $row[$startcol + 3], (string) $row[$startcol + 8]);
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
        $cls = SpawningPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SpawningPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SpawningPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpawningPeer::addInstanceToPool($obj, $key);
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
     * @return array (Spawning object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SpawningPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SpawningPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SpawningPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpawningPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SpawningPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(SpawningPeer::DATABASE_NAME)->getTable(SpawningPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSpawningPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSpawningPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SpawningTableMap());
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
        return SpawningPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Spawning or Criteria object.
     *
     * @param      mixed $values Criteria or Spawning object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SpawningPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Spawning object
        }


        // Set the correct dbName
        $criteria->setDbName(SpawningPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Spawning or Criteria object.
     *
     * @param      mixed $values Criteria or Spawning object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SpawningPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SpawningPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SpawningPeer::STOCKCODE);
            $value = $criteria->remove(SpawningPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(SpawningPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SpawningPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SpawningPeer::SPAWNINGREFNO);
            $value = $criteria->remove(SpawningPeer::SPAWNINGREFNO);
            if ($value) {
                $selectCriteria->add(SpawningPeer::SPAWNINGREFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SpawningPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SpawningPeer::SPAWNINGAREA);
            $value = $criteria->remove(SpawningPeer::SPAWNINGAREA);
            if ($value) {
                $selectCriteria->add(SpawningPeer::SPAWNINGAREA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SpawningPeer::TABLE_NAME);
            }

        } else { // $values is Spawning object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SpawningPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the spawning table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SpawningPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SpawningPeer::TABLE_NAME, $con, SpawningPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpawningPeer::clearInstancePool();
            SpawningPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Spawning or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Spawning object or primary key or array of primary keys
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
            $con = Propel::getConnection(SpawningPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SpawningPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Spawning) { // it's a model object
            // invalidate the cache for this single object
            SpawningPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpawningPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SpawningPeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SpawningPeer::SPAWNINGREFNO, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(SpawningPeer::SPAWNINGAREA, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                SpawningPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SpawningPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SpawningPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Spawning object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Spawning $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SpawningPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SpawningPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SpawningPeer::DATABASE_NAME, SpawningPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stockcode
     * @param   int $spawningrefno
     * @param   string $spawningarea
     * @param      PropelPDO $con
     * @return Spawning
     */
    public static function retrieveByPK($stockcode, $spawningrefno, $spawningarea, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $spawningrefno, (string) $spawningarea));
         if (null !== ($obj = SpawningPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SpawningPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(SpawningPeer::DATABASE_NAME);
        $criteria->add(SpawningPeer::STOCKCODE, $stockcode);
        $criteria->add(SpawningPeer::SPAWNINGREFNO, $spawningrefno);
        $criteria->add(SpawningPeer::SPAWNINGAREA, $spawningarea);
        $v = SpawningPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseSpawningPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSpawningPeer::buildTableMap();

