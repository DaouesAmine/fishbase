<?php


/**
 * Base static class for performing query and update operations on the 'fecundity' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseFecundityPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'fecundity';

    /** the related Propel class for this table */
    const OM_CLASS = 'Fecundity';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FecundityTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 49;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 49;

    /** the column name for the autoctr field */
    const AUTOCTR = 'fecundity.autoctr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'fecundity.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'fecundity.SpecCode';

    /** the column name for the MainRefNo field */
    const MAINREFNO = 'fecundity.MainRefNo';

    /** the column name for the SourceRef field */
    const SOURCEREF = 'fecundity.SourceRef';

    /** the column name for the C_Code field */
    const C_CODE = 'fecundity.C_Code';

    /** the column name for the E_CODE field */
    const E_CODE = 'fecundity.E_CODE';

    /** the column name for the Locality field */
    const LOCALITY = 'fecundity.Locality';

    /** the column name for the FecundityMin field */
    const FECUNDITYMIN = 'fecundity.FecundityMin';

    /** the column name for the WeightMin field */
    const WEIGHTMIN = 'fecundity.WeightMin';

    /** the column name for the LengthFecunMin field */
    const LENGTHFECUNMIN = 'fecundity.LengthFecunMin';

    /** the column name for the LengthTypeFecMin field */
    const LENGTHTYPEFECMIN = 'fecundity.LengthTypeFecMin';

    /** the column name for the FecundityMax field */
    const FECUNDITYMAX = 'fecundity.FecundityMax';

    /** the column name for the WeightMax field */
    const WEIGHTMAX = 'fecundity.WeightMax';

    /** the column name for the LengthFecunMax field */
    const LENGTHFECUNMAX = 'fecundity.LengthFecunMax';

    /** the column name for the LengthTypeFecMax field */
    const LENGTHTYPEFECMAX = 'fecundity.LengthTypeFecMax';

    /** the column name for the FecComment field */
    const FECCOMMENT = 'fecundity.FecComment';

    /** the column name for the FecundityRef field */
    const FECUNDITYREF = 'fecundity.FecundityRef';

    /** the column name for the RelFecundityMin field */
    const RELFECUNDITYMIN = 'fecundity.RelFecundityMin';

    /** the column name for the FecunMinRef field */
    const FECUNMINREF = 'fecundity.FecunMinRef';

    /** the column name for the RelFecundityMean field */
    const RELFECUNDITYMEAN = 'fecundity.RelFecundityMean';

    /** the column name for the FecunMeanRef field */
    const FECUNMEANREF = 'fecundity.FecunMeanRef';

    /** the column name for the RelFecundityMax field */
    const RELFECUNDITYMAX = 'fecundity.RelFecundityMax';

    /** the column name for the FecunMaxRef field */
    const FECUNMAXREF = 'fecundity.FecunMaxRef';

    /** the column name for the LengthMin field */
    const LENGTHMIN = 'fecundity.LengthMin';

    /** the column name for the LengthMax field */
    const LENGTHMAX = 'fecundity.LengthMax';

    /** the column name for the LengthType field */
    const LENGTHTYPE = 'fecundity.LengthType';

    /** the column name for the Number field */
    const NUMBER = 'fecundity.Number';

    /** the column name for the a field */
    const A = 'fecundity.a';

    /** the column name for the b field */
    const B = 'fecundity.b';

    /** the column name for the r2 field */
    const R2 = 'fecundity.r2';

    /** the column name for the SEa field */
    const SEA = 'fecundity.SEa';

    /** the column name for the SEb field */
    const SEB = 'fecundity.SEb';

    /** the column name for the SDa field */
    const SDA = 'fecundity.SDa';

    /** the column name for the SDb field */
    const SDB = 'fecundity.SDb';

    /** the column name for the LCLa field */
    const LCLA = 'fecundity.LCLa';

    /** the column name for the UCLa field */
    const UCLA = 'fecundity.UCLa';

    /** the column name for the LCLb field */
    const LCLB = 'fecundity.LCLb';

    /** the column name for the UCLb field */
    const UCLB = 'fecundity.UCLb';

    /** the column name for the SpawningCycles field */
    const SPAWNINGCYCLES = 'fecundity.SpawningCycles';

    /** the column name for the SpCycleRef field */
    const SPCYCLEREF = 'fecundity.SpCycleRef';

    /** the column name for the AddInfos field */
    const ADDINFOS = 'fecundity.AddInfos';

    /** the column name for the Entered field */
    const ENTERED = 'fecundity.Entered';

    /** the column name for the Dateentered field */
    const DATEENTERED = 'fecundity.Dateentered';

    /** the column name for the Modified field */
    const MODIFIED = 'fecundity.Modified';

    /** the column name for the Datemodified field */
    const DATEMODIFIED = 'fecundity.Datemodified';

    /** the column name for the Expert field */
    const EXPERT = 'fecundity.Expert';

    /** the column name for the Datechecked field */
    const DATECHECKED = 'fecundity.Datechecked';

    /** the column name for the autoctr_spawn field */
    const AUTOCTR_SPAWN = 'fecundity.autoctr_spawn';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Fecundity objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Fecundity[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FecundityPeer::$fieldNames[FecundityPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Mainrefno', 'Sourceref', 'CCode', 'ECode', 'Locality', 'Fecunditymin', 'Weightmin', 'Lengthfecunmin', 'Lengthtypefecmin', 'Fecunditymax', 'Weightmax', 'Lengthfecunmax', 'Lengthtypefecmax', 'Feccomment', 'Fecundityref', 'Relfecunditymin', 'Fecunminref', 'Relfecunditymean', 'Fecunmeanref', 'Relfecunditymax', 'Fecunmaxref', 'Lengthmin', 'Lengthmax', 'Lengthtype', 'Number', 'A', 'B', 'R2', 'Sea', 'Seb', 'Sda', 'Sdb', 'Lcla', 'Ucla', 'Lclb', 'Uclb', 'Spawningcycles', 'Spcycleref', 'Addinfos', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'AutoctrSpawn', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'mainrefno', 'sourceref', 'cCode', 'eCode', 'locality', 'fecunditymin', 'weightmin', 'lengthfecunmin', 'lengthtypefecmin', 'fecunditymax', 'weightmax', 'lengthfecunmax', 'lengthtypefecmax', 'feccomment', 'fecundityref', 'relfecunditymin', 'fecunminref', 'relfecunditymean', 'fecunmeanref', 'relfecunditymax', 'fecunmaxref', 'lengthmin', 'lengthmax', 'lengthtype', 'number', 'a', 'b', 'r2', 'sea', 'seb', 'sda', 'sdb', 'lcla', 'ucla', 'lclb', 'uclb', 'spawningcycles', 'spcycleref', 'addinfos', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'autoctrSpawn', ),
        BasePeer::TYPE_COLNAME => array (FecundityPeer::AUTOCTR, FecundityPeer::STOCKCODE, FecundityPeer::SPECCODE, FecundityPeer::MAINREFNO, FecundityPeer::SOURCEREF, FecundityPeer::C_CODE, FecundityPeer::E_CODE, FecundityPeer::LOCALITY, FecundityPeer::FECUNDITYMIN, FecundityPeer::WEIGHTMIN, FecundityPeer::LENGTHFECUNMIN, FecundityPeer::LENGTHTYPEFECMIN, FecundityPeer::FECUNDITYMAX, FecundityPeer::WEIGHTMAX, FecundityPeer::LENGTHFECUNMAX, FecundityPeer::LENGTHTYPEFECMAX, FecundityPeer::FECCOMMENT, FecundityPeer::FECUNDITYREF, FecundityPeer::RELFECUNDITYMIN, FecundityPeer::FECUNMINREF, FecundityPeer::RELFECUNDITYMEAN, FecundityPeer::FECUNMEANREF, FecundityPeer::RELFECUNDITYMAX, FecundityPeer::FECUNMAXREF, FecundityPeer::LENGTHMIN, FecundityPeer::LENGTHMAX, FecundityPeer::LENGTHTYPE, FecundityPeer::NUMBER, FecundityPeer::A, FecundityPeer::B, FecundityPeer::R2, FecundityPeer::SEA, FecundityPeer::SEB, FecundityPeer::SDA, FecundityPeer::SDB, FecundityPeer::LCLA, FecundityPeer::UCLA, FecundityPeer::LCLB, FecundityPeer::UCLB, FecundityPeer::SPAWNINGCYCLES, FecundityPeer::SPCYCLEREF, FecundityPeer::ADDINFOS, FecundityPeer::ENTERED, FecundityPeer::DATEENTERED, FecundityPeer::MODIFIED, FecundityPeer::DATEMODIFIED, FecundityPeer::EXPERT, FecundityPeer::DATECHECKED, FecundityPeer::AUTOCTR_SPAWN, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'MAINREFNO', 'SOURCEREF', 'C_CODE', 'E_CODE', 'LOCALITY', 'FECUNDITYMIN', 'WEIGHTMIN', 'LENGTHFECUNMIN', 'LENGTHTYPEFECMIN', 'FECUNDITYMAX', 'WEIGHTMAX', 'LENGTHFECUNMAX', 'LENGTHTYPEFECMAX', 'FECCOMMENT', 'FECUNDITYREF', 'RELFECUNDITYMIN', 'FECUNMINREF', 'RELFECUNDITYMEAN', 'FECUNMEANREF', 'RELFECUNDITYMAX', 'FECUNMAXREF', 'LENGTHMIN', 'LENGTHMAX', 'LENGTHTYPE', 'NUMBER', 'A', 'B', 'R2', 'SEA', 'SEB', 'SDA', 'SDB', 'LCLA', 'UCLA', 'LCLB', 'UCLB', 'SPAWNINGCYCLES', 'SPCYCLEREF', 'ADDINFOS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'AUTOCTR_SPAWN', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'StockCode', 'SpecCode', 'MainRefNo', 'SourceRef', 'C_Code', 'E_CODE', 'Locality', 'FecundityMin', 'WeightMin', 'LengthFecunMin', 'LengthTypeFecMin', 'FecundityMax', 'WeightMax', 'LengthFecunMax', 'LengthTypeFecMax', 'FecComment', 'FecundityRef', 'RelFecundityMin', 'FecunMinRef', 'RelFecundityMean', 'FecunMeanRef', 'RelFecundityMax', 'FecunMaxRef', 'LengthMin', 'LengthMax', 'LengthType', 'Number', 'a', 'b', 'r2', 'SEa', 'SEb', 'SDa', 'SDb', 'LCLa', 'UCLa', 'LCLb', 'UCLb', 'SpawningCycles', 'SpCycleRef', 'AddInfos', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'autoctr_spawn', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FecundityPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Mainrefno' => 3, 'Sourceref' => 4, 'CCode' => 5, 'ECode' => 6, 'Locality' => 7, 'Fecunditymin' => 8, 'Weightmin' => 9, 'Lengthfecunmin' => 10, 'Lengthtypefecmin' => 11, 'Fecunditymax' => 12, 'Weightmax' => 13, 'Lengthfecunmax' => 14, 'Lengthtypefecmax' => 15, 'Feccomment' => 16, 'Fecundityref' => 17, 'Relfecunditymin' => 18, 'Fecunminref' => 19, 'Relfecunditymean' => 20, 'Fecunmeanref' => 21, 'Relfecunditymax' => 22, 'Fecunmaxref' => 23, 'Lengthmin' => 24, 'Lengthmax' => 25, 'Lengthtype' => 26, 'Number' => 27, 'A' => 28, 'B' => 29, 'R2' => 30, 'Sea' => 31, 'Seb' => 32, 'Sda' => 33, 'Sdb' => 34, 'Lcla' => 35, 'Ucla' => 36, 'Lclb' => 37, 'Uclb' => 38, 'Spawningcycles' => 39, 'Spcycleref' => 40, 'Addinfos' => 41, 'Entered' => 42, 'Dateentered' => 43, 'Modified' => 44, 'Datemodified' => 45, 'Expert' => 46, 'Datechecked' => 47, 'AutoctrSpawn' => 48, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'mainrefno' => 3, 'sourceref' => 4, 'cCode' => 5, 'eCode' => 6, 'locality' => 7, 'fecunditymin' => 8, 'weightmin' => 9, 'lengthfecunmin' => 10, 'lengthtypefecmin' => 11, 'fecunditymax' => 12, 'weightmax' => 13, 'lengthfecunmax' => 14, 'lengthtypefecmax' => 15, 'feccomment' => 16, 'fecundityref' => 17, 'relfecunditymin' => 18, 'fecunminref' => 19, 'relfecunditymean' => 20, 'fecunmeanref' => 21, 'relfecunditymax' => 22, 'fecunmaxref' => 23, 'lengthmin' => 24, 'lengthmax' => 25, 'lengthtype' => 26, 'number' => 27, 'a' => 28, 'b' => 29, 'r2' => 30, 'sea' => 31, 'seb' => 32, 'sda' => 33, 'sdb' => 34, 'lcla' => 35, 'ucla' => 36, 'lclb' => 37, 'uclb' => 38, 'spawningcycles' => 39, 'spcycleref' => 40, 'addinfos' => 41, 'entered' => 42, 'dateentered' => 43, 'modified' => 44, 'datemodified' => 45, 'expert' => 46, 'datechecked' => 47, 'autoctrSpawn' => 48, ),
        BasePeer::TYPE_COLNAME => array (FecundityPeer::AUTOCTR => 0, FecundityPeer::STOCKCODE => 1, FecundityPeer::SPECCODE => 2, FecundityPeer::MAINREFNO => 3, FecundityPeer::SOURCEREF => 4, FecundityPeer::C_CODE => 5, FecundityPeer::E_CODE => 6, FecundityPeer::LOCALITY => 7, FecundityPeer::FECUNDITYMIN => 8, FecundityPeer::WEIGHTMIN => 9, FecundityPeer::LENGTHFECUNMIN => 10, FecundityPeer::LENGTHTYPEFECMIN => 11, FecundityPeer::FECUNDITYMAX => 12, FecundityPeer::WEIGHTMAX => 13, FecundityPeer::LENGTHFECUNMAX => 14, FecundityPeer::LENGTHTYPEFECMAX => 15, FecundityPeer::FECCOMMENT => 16, FecundityPeer::FECUNDITYREF => 17, FecundityPeer::RELFECUNDITYMIN => 18, FecundityPeer::FECUNMINREF => 19, FecundityPeer::RELFECUNDITYMEAN => 20, FecundityPeer::FECUNMEANREF => 21, FecundityPeer::RELFECUNDITYMAX => 22, FecundityPeer::FECUNMAXREF => 23, FecundityPeer::LENGTHMIN => 24, FecundityPeer::LENGTHMAX => 25, FecundityPeer::LENGTHTYPE => 26, FecundityPeer::NUMBER => 27, FecundityPeer::A => 28, FecundityPeer::B => 29, FecundityPeer::R2 => 30, FecundityPeer::SEA => 31, FecundityPeer::SEB => 32, FecundityPeer::SDA => 33, FecundityPeer::SDB => 34, FecundityPeer::LCLA => 35, FecundityPeer::UCLA => 36, FecundityPeer::LCLB => 37, FecundityPeer::UCLB => 38, FecundityPeer::SPAWNINGCYCLES => 39, FecundityPeer::SPCYCLEREF => 40, FecundityPeer::ADDINFOS => 41, FecundityPeer::ENTERED => 42, FecundityPeer::DATEENTERED => 43, FecundityPeer::MODIFIED => 44, FecundityPeer::DATEMODIFIED => 45, FecundityPeer::EXPERT => 46, FecundityPeer::DATECHECKED => 47, FecundityPeer::AUTOCTR_SPAWN => 48, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'MAINREFNO' => 3, 'SOURCEREF' => 4, 'C_CODE' => 5, 'E_CODE' => 6, 'LOCALITY' => 7, 'FECUNDITYMIN' => 8, 'WEIGHTMIN' => 9, 'LENGTHFECUNMIN' => 10, 'LENGTHTYPEFECMIN' => 11, 'FECUNDITYMAX' => 12, 'WEIGHTMAX' => 13, 'LENGTHFECUNMAX' => 14, 'LENGTHTYPEFECMAX' => 15, 'FECCOMMENT' => 16, 'FECUNDITYREF' => 17, 'RELFECUNDITYMIN' => 18, 'FECUNMINREF' => 19, 'RELFECUNDITYMEAN' => 20, 'FECUNMEANREF' => 21, 'RELFECUNDITYMAX' => 22, 'FECUNMAXREF' => 23, 'LENGTHMIN' => 24, 'LENGTHMAX' => 25, 'LENGTHTYPE' => 26, 'NUMBER' => 27, 'A' => 28, 'B' => 29, 'R2' => 30, 'SEA' => 31, 'SEB' => 32, 'SDA' => 33, 'SDB' => 34, 'LCLA' => 35, 'UCLA' => 36, 'LCLB' => 37, 'UCLB' => 38, 'SPAWNINGCYCLES' => 39, 'SPCYCLEREF' => 40, 'ADDINFOS' => 41, 'ENTERED' => 42, 'DATEENTERED' => 43, 'MODIFIED' => 44, 'DATEMODIFIED' => 45, 'EXPERT' => 46, 'DATECHECKED' => 47, 'AUTOCTR_SPAWN' => 48, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'MainRefNo' => 3, 'SourceRef' => 4, 'C_Code' => 5, 'E_CODE' => 6, 'Locality' => 7, 'FecundityMin' => 8, 'WeightMin' => 9, 'LengthFecunMin' => 10, 'LengthTypeFecMin' => 11, 'FecundityMax' => 12, 'WeightMax' => 13, 'LengthFecunMax' => 14, 'LengthTypeFecMax' => 15, 'FecComment' => 16, 'FecundityRef' => 17, 'RelFecundityMin' => 18, 'FecunMinRef' => 19, 'RelFecundityMean' => 20, 'FecunMeanRef' => 21, 'RelFecundityMax' => 22, 'FecunMaxRef' => 23, 'LengthMin' => 24, 'LengthMax' => 25, 'LengthType' => 26, 'Number' => 27, 'a' => 28, 'b' => 29, 'r2' => 30, 'SEa' => 31, 'SEb' => 32, 'SDa' => 33, 'SDb' => 34, 'LCLa' => 35, 'UCLa' => 36, 'LCLb' => 37, 'UCLb' => 38, 'SpawningCycles' => 39, 'SpCycleRef' => 40, 'AddInfos' => 41, 'Entered' => 42, 'Dateentered' => 43, 'Modified' => 44, 'Datemodified' => 45, 'Expert' => 46, 'Datechecked' => 47, 'autoctr_spawn' => 48, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, )
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
        $toNames = FecundityPeer::getFieldNames($toType);
        $key = isset(FecundityPeer::$fieldKeys[$fromType][$name]) ? FecundityPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FecundityPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FecundityPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FecundityPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. FecundityPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FecundityPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FecundityPeer::AUTOCTR);
            $criteria->addSelectColumn(FecundityPeer::STOCKCODE);
            $criteria->addSelectColumn(FecundityPeer::SPECCODE);
            $criteria->addSelectColumn(FecundityPeer::MAINREFNO);
            $criteria->addSelectColumn(FecundityPeer::SOURCEREF);
            $criteria->addSelectColumn(FecundityPeer::C_CODE);
            $criteria->addSelectColumn(FecundityPeer::E_CODE);
            $criteria->addSelectColumn(FecundityPeer::LOCALITY);
            $criteria->addSelectColumn(FecundityPeer::FECUNDITYMIN);
            $criteria->addSelectColumn(FecundityPeer::WEIGHTMIN);
            $criteria->addSelectColumn(FecundityPeer::LENGTHFECUNMIN);
            $criteria->addSelectColumn(FecundityPeer::LENGTHTYPEFECMIN);
            $criteria->addSelectColumn(FecundityPeer::FECUNDITYMAX);
            $criteria->addSelectColumn(FecundityPeer::WEIGHTMAX);
            $criteria->addSelectColumn(FecundityPeer::LENGTHFECUNMAX);
            $criteria->addSelectColumn(FecundityPeer::LENGTHTYPEFECMAX);
            $criteria->addSelectColumn(FecundityPeer::FECCOMMENT);
            $criteria->addSelectColumn(FecundityPeer::FECUNDITYREF);
            $criteria->addSelectColumn(FecundityPeer::RELFECUNDITYMIN);
            $criteria->addSelectColumn(FecundityPeer::FECUNMINREF);
            $criteria->addSelectColumn(FecundityPeer::RELFECUNDITYMEAN);
            $criteria->addSelectColumn(FecundityPeer::FECUNMEANREF);
            $criteria->addSelectColumn(FecundityPeer::RELFECUNDITYMAX);
            $criteria->addSelectColumn(FecundityPeer::FECUNMAXREF);
            $criteria->addSelectColumn(FecundityPeer::LENGTHMIN);
            $criteria->addSelectColumn(FecundityPeer::LENGTHMAX);
            $criteria->addSelectColumn(FecundityPeer::LENGTHTYPE);
            $criteria->addSelectColumn(FecundityPeer::NUMBER);
            $criteria->addSelectColumn(FecundityPeer::A);
            $criteria->addSelectColumn(FecundityPeer::B);
            $criteria->addSelectColumn(FecundityPeer::R2);
            $criteria->addSelectColumn(FecundityPeer::SEA);
            $criteria->addSelectColumn(FecundityPeer::SEB);
            $criteria->addSelectColumn(FecundityPeer::SDA);
            $criteria->addSelectColumn(FecundityPeer::SDB);
            $criteria->addSelectColumn(FecundityPeer::LCLA);
            $criteria->addSelectColumn(FecundityPeer::UCLA);
            $criteria->addSelectColumn(FecundityPeer::LCLB);
            $criteria->addSelectColumn(FecundityPeer::UCLB);
            $criteria->addSelectColumn(FecundityPeer::SPAWNINGCYCLES);
            $criteria->addSelectColumn(FecundityPeer::SPCYCLEREF);
            $criteria->addSelectColumn(FecundityPeer::ADDINFOS);
            $criteria->addSelectColumn(FecundityPeer::ENTERED);
            $criteria->addSelectColumn(FecundityPeer::DATEENTERED);
            $criteria->addSelectColumn(FecundityPeer::MODIFIED);
            $criteria->addSelectColumn(FecundityPeer::DATEMODIFIED);
            $criteria->addSelectColumn(FecundityPeer::EXPERT);
            $criteria->addSelectColumn(FecundityPeer::DATECHECKED);
            $criteria->addSelectColumn(FecundityPeer::AUTOCTR_SPAWN);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.MainRefNo');
            $criteria->addSelectColumn($alias . '.SourceRef');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.E_CODE');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.FecundityMin');
            $criteria->addSelectColumn($alias . '.WeightMin');
            $criteria->addSelectColumn($alias . '.LengthFecunMin');
            $criteria->addSelectColumn($alias . '.LengthTypeFecMin');
            $criteria->addSelectColumn($alias . '.FecundityMax');
            $criteria->addSelectColumn($alias . '.WeightMax');
            $criteria->addSelectColumn($alias . '.LengthFecunMax');
            $criteria->addSelectColumn($alias . '.LengthTypeFecMax');
            $criteria->addSelectColumn($alias . '.FecComment');
            $criteria->addSelectColumn($alias . '.FecundityRef');
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
            $criteria->addSelectColumn($alias . '.r2');
            $criteria->addSelectColumn($alias . '.SEa');
            $criteria->addSelectColumn($alias . '.SEb');
            $criteria->addSelectColumn($alias . '.SDa');
            $criteria->addSelectColumn($alias . '.SDb');
            $criteria->addSelectColumn($alias . '.LCLa');
            $criteria->addSelectColumn($alias . '.UCLa');
            $criteria->addSelectColumn($alias . '.LCLb');
            $criteria->addSelectColumn($alias . '.UCLb');
            $criteria->addSelectColumn($alias . '.SpawningCycles');
            $criteria->addSelectColumn($alias . '.SpCycleRef');
            $criteria->addSelectColumn($alias . '.AddInfos');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.Dateentered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.Datemodified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.Datechecked');
            $criteria->addSelectColumn($alias . '.autoctr_spawn');
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
        $criteria->setPrimaryTableName(FecundityPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FecundityPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FecundityPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FecundityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Fecundity
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FecundityPeer::doSelect($critcopy, $con);
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
        return FecundityPeer::populateObjects(FecundityPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FecundityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FecundityPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FecundityPeer::DATABASE_NAME);

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
     * @param Fecundity $obj A Fecundity object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            FecundityPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Fecundity object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Fecundity) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Fecundity object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FecundityPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Fecundity Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FecundityPeer::$instances[$key])) {
                return FecundityPeer::$instances[$key];
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
        foreach (FecundityPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FecundityPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to fecundity
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
        $cls = FecundityPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FecundityPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FecundityPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FecundityPeer::addInstanceToPool($obj, $key);
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
     * @return array (Fecundity object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FecundityPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FecundityPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FecundityPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FecundityPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FecundityPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(FecundityPeer::DATABASE_NAME)->getTable(FecundityPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFecundityPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFecundityPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FecundityTableMap());
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
        return FecundityPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Fecundity or Criteria object.
     *
     * @param      mixed $values Criteria or Fecundity object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FecundityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Fecundity object
        }

        if ($criteria->containsKey(FecundityPeer::AUTOCTR) && $criteria->keyContainsValue(FecundityPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.FecundityPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(FecundityPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Fecundity or Criteria object.
     *
     * @param      mixed $values Criteria or Fecundity object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FecundityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FecundityPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FecundityPeer::AUTOCTR);
            $value = $criteria->remove(FecundityPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(FecundityPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FecundityPeer::TABLE_NAME);
            }

        } else { // $values is Fecundity object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FecundityPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the fecundity table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FecundityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FecundityPeer::TABLE_NAME, $con, FecundityPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FecundityPeer::clearInstancePool();
            FecundityPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Fecundity or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Fecundity object or primary key or array of primary keys
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
            $con = Propel::getConnection(FecundityPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FecundityPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Fecundity) { // it's a model object
            // invalidate the cache for this single object
            FecundityPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FecundityPeer::DATABASE_NAME);
            $criteria->add(FecundityPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FecundityPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FecundityPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FecundityPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Fecundity object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Fecundity $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FecundityPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FecundityPeer::TABLE_NAME);

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

        return BasePeer::doValidate(FecundityPeer::DATABASE_NAME, FecundityPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Fecundity
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FecundityPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FecundityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FecundityPeer::DATABASE_NAME);
        $criteria->add(FecundityPeer::AUTOCTR, $pk);

        $v = FecundityPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Fecundity[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FecundityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FecundityPeer::DATABASE_NAME);
            $criteria->add(FecundityPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = FecundityPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseFecundityPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFecundityPeer::buildTableMap();

