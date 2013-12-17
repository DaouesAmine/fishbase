<?php


/**
 * Base static class for performing query and update operations on the 'morphmettlratios' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseMorphmettlratiosPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'morphmettlratios';

    /** the related Propel class for this table */
    const OM_CLASS = 'Morphmettlratios';

    /** the related TableMap class for this table */
    const TM_CLASS = 'MorphmettlratiosTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 44;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 44;

    /** the column name for the PicName field */
    const PICNAME = 'morphmettlratios.PicName';

    /** the column name for the Speccode field */
    const SPECCODE = 'morphmettlratios.Speccode';

    /** the column name for the FamCode field */
    const FAMCODE = 'morphmettlratios.FamCode';

    /** the column name for the Family field */
    const FAMILY = 'morphmettlratios.Family';

    /** the column name for the CommonName field */
    const COMMONNAME = 'morphmettlratios.CommonName';

    /** the column name for the ClassNum field */
    const CLASSNUM = 'morphmettlratios.ClassNum';

    /** the column name for the Class field */
    const CLAZZ = 'morphmettlratios.Class';

    /** the column name for the Remarks field */
    const REMARKS = 'morphmettlratios.Remarks';

    /** the column name for the Perc field */
    const PERC = 'morphmettlratios.Perc';

    /** the column name for the MaxLengthTL field */
    const MAXLENGTHTL = 'morphmettlratios.MaxLengthTL';

    /** the column name for the SLTL field */
    const SLTL = 'morphmettlratios.SLTL';

    /** the column name for the SLTL_LOWER field */
    const SLTL_LOWER = 'morphmettlratios.SLTL_LOWER';

    /** the column name for the SLTL_UPPER field */
    const SLTL_UPPER = 'morphmettlratios.SLTL_UPPER';

    /** the column name for the FLTL field */
    const FLTL = 'morphmettlratios.FLTL';

    /** the column name for the FLTL_LOWER field */
    const FLTL_LOWER = 'morphmettlratios.FLTL_LOWER';

    /** the column name for the FLTL_UPPER field */
    const FLTL_UPPER = 'morphmettlratios.FLTL_UPPER';

    /** the column name for the HLTL field */
    const HLTL = 'morphmettlratios.HLTL';

    /** the column name for the HLTL_LOWER field */
    const HLTL_LOWER = 'morphmettlratios.HLTL_LOWER';

    /** the column name for the HLTL_UPPER field */
    const HLTL_UPPER = 'morphmettlratios.HLTL_UPPER';

    /** the column name for the PALTL field */
    const PALTL = 'morphmettlratios.PALTL';

    /** the column name for the PALTL_LOWER field */
    const PALTL_LOWER = 'morphmettlratios.PALTL_LOWER';

    /** the column name for the PALTL_UPPER field */
    const PALTL_UPPER = 'morphmettlratios.PALTL_UPPER';

    /** the column name for the PDLTL field */
    const PDLTL = 'morphmettlratios.PDLTL';

    /** the column name for the PDLTL_LOWER field */
    const PDLTL_LOWER = 'morphmettlratios.PDLTL_LOWER';

    /** the column name for the PDLTL_UPPER field */
    const PDLTL_UPPER = 'morphmettlratios.PDLTL_UPPER';

    /** the column name for the PPLTL field */
    const PPLTL = 'morphmettlratios.PPLTL';

    /** the column name for the PPLTL_LOWER field */
    const PPLTL_LOWER = 'morphmettlratios.PPLTL_LOWER';

    /** the column name for the PPLTL_UPPER field */
    const PPLTL_UPPER = 'morphmettlratios.PPLTL_UPPER';

    /** the column name for the PPELTL field */
    const PPELTL = 'morphmettlratios.PPELTL';

    /** the column name for the PPELTL_LOWER field */
    const PPELTL_LOWER = 'morphmettlratios.PPELTL_LOWER';

    /** the column name for the PPELTL_UPPER field */
    const PPELTL_UPPER = 'morphmettlratios.PPELTL_UPPER';

    /** the column name for the EDTL field */
    const EDTL = 'morphmettlratios.EDTL';

    /** the column name for the EDTL_LOWER field */
    const EDTL_LOWER = 'morphmettlratios.EDTL_LOWER';

    /** the column name for the EDTL_UPPER field */
    const EDTL_UPPER = 'morphmettlratios.EDTL_UPPER';

    /** the column name for the POLTL field */
    const POLTL = 'morphmettlratios.POLTL';

    /** the column name for the POLTL_LOWER field */
    const POLTL_LOWER = 'morphmettlratios.POLTL_LOWER';

    /** the column name for the POLTL_UPPER field */
    const POLTL_UPPER = 'morphmettlratios.POLTL_UPPER';

    /** the column name for the BDTL field */
    const BDTL = 'morphmettlratios.BDTL';

    /** the column name for the BDTL_LOWER field */
    const BDTL_LOWER = 'morphmettlratios.BDTL_LOWER';

    /** the column name for the BDTL_UPPER field */
    const BDTL_UPPER = 'morphmettlratios.BDTL_UPPER';

    /** the column name for the CHTL field */
    const CHTL = 'morphmettlratios.CHTL';

    /** the column name for the CHTL_LOWER field */
    const CHTL_LOWER = 'morphmettlratios.CHTL_LOWER';

    /** the column name for the CHTL_UPPER field */
    const CHTL_UPPER = 'morphmettlratios.CHTL_UPPER';

    /** the column name for the PKID field */
    const PKID = 'morphmettlratios.PKID';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Morphmettlratios objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Morphmettlratios[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. MorphmettlratiosPeer::$fieldNames[MorphmettlratiosPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Picname', 'Speccode', 'Famcode', 'Family', 'Commonname', 'Classnum', 'Class', 'Remarks', 'Perc', 'Maxlengthtl', 'Sltl', 'SltlLower', 'SltlUpper', 'Fltl', 'FltlLower', 'FltlUpper', 'Hltl', 'HltlLower', 'HltlUpper', 'Paltl', 'PaltlLower', 'PaltlUpper', 'Pdltl', 'PdltlLower', 'PdltlUpper', 'Ppltl', 'PpltlLower', 'PpltlUpper', 'Ppeltl', 'PpeltlLower', 'PpeltlUpper', 'Edtl', 'EdtlLower', 'EdtlUpper', 'Poltl', 'PoltlLower', 'PoltlUpper', 'Bdtl', 'BdtlLower', 'BdtlUpper', 'Chtl', 'ChtlLower', 'ChtlUpper', 'Pkid', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('picname', 'speccode', 'famcode', 'family', 'commonname', 'classnum', 'class', 'remarks', 'perc', 'maxlengthtl', 'sltl', 'sltlLower', 'sltlUpper', 'fltl', 'fltlLower', 'fltlUpper', 'hltl', 'hltlLower', 'hltlUpper', 'paltl', 'paltlLower', 'paltlUpper', 'pdltl', 'pdltlLower', 'pdltlUpper', 'ppltl', 'ppltlLower', 'ppltlUpper', 'ppeltl', 'ppeltlLower', 'ppeltlUpper', 'edtl', 'edtlLower', 'edtlUpper', 'poltl', 'poltlLower', 'poltlUpper', 'bdtl', 'bdtlLower', 'bdtlUpper', 'chtl', 'chtlLower', 'chtlUpper', 'pkid', ),
        BasePeer::TYPE_COLNAME => array (MorphmettlratiosPeer::PICNAME, MorphmettlratiosPeer::SPECCODE, MorphmettlratiosPeer::FAMCODE, MorphmettlratiosPeer::FAMILY, MorphmettlratiosPeer::COMMONNAME, MorphmettlratiosPeer::CLASSNUM, MorphmettlratiosPeer::CLAZZ, MorphmettlratiosPeer::REMARKS, MorphmettlratiosPeer::PERC, MorphmettlratiosPeer::MAXLENGTHTL, MorphmettlratiosPeer::SLTL, MorphmettlratiosPeer::SLTL_LOWER, MorphmettlratiosPeer::SLTL_UPPER, MorphmettlratiosPeer::FLTL, MorphmettlratiosPeer::FLTL_LOWER, MorphmettlratiosPeer::FLTL_UPPER, MorphmettlratiosPeer::HLTL, MorphmettlratiosPeer::HLTL_LOWER, MorphmettlratiosPeer::HLTL_UPPER, MorphmettlratiosPeer::PALTL, MorphmettlratiosPeer::PALTL_LOWER, MorphmettlratiosPeer::PALTL_UPPER, MorphmettlratiosPeer::PDLTL, MorphmettlratiosPeer::PDLTL_LOWER, MorphmettlratiosPeer::PDLTL_UPPER, MorphmettlratiosPeer::PPLTL, MorphmettlratiosPeer::PPLTL_LOWER, MorphmettlratiosPeer::PPLTL_UPPER, MorphmettlratiosPeer::PPELTL, MorphmettlratiosPeer::PPELTL_LOWER, MorphmettlratiosPeer::PPELTL_UPPER, MorphmettlratiosPeer::EDTL, MorphmettlratiosPeer::EDTL_LOWER, MorphmettlratiosPeer::EDTL_UPPER, MorphmettlratiosPeer::POLTL, MorphmettlratiosPeer::POLTL_LOWER, MorphmettlratiosPeer::POLTL_UPPER, MorphmettlratiosPeer::BDTL, MorphmettlratiosPeer::BDTL_LOWER, MorphmettlratiosPeer::BDTL_UPPER, MorphmettlratiosPeer::CHTL, MorphmettlratiosPeer::CHTL_LOWER, MorphmettlratiosPeer::CHTL_UPPER, MorphmettlratiosPeer::PKID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PICNAME', 'SPECCODE', 'FAMCODE', 'FAMILY', 'COMMONNAME', 'CLASSNUM', 'CLAZZ', 'REMARKS', 'PERC', 'MAXLENGTHTL', 'SLTL', 'SLTL_LOWER', 'SLTL_UPPER', 'FLTL', 'FLTL_LOWER', 'FLTL_UPPER', 'HLTL', 'HLTL_LOWER', 'HLTL_UPPER', 'PALTL', 'PALTL_LOWER', 'PALTL_UPPER', 'PDLTL', 'PDLTL_LOWER', 'PDLTL_UPPER', 'PPLTL', 'PPLTL_LOWER', 'PPLTL_UPPER', 'PPELTL', 'PPELTL_LOWER', 'PPELTL_UPPER', 'EDTL', 'EDTL_LOWER', 'EDTL_UPPER', 'POLTL', 'POLTL_LOWER', 'POLTL_UPPER', 'BDTL', 'BDTL_LOWER', 'BDTL_UPPER', 'CHTL', 'CHTL_LOWER', 'CHTL_UPPER', 'PKID', ),
        BasePeer::TYPE_FIELDNAME => array ('PicName', 'Speccode', 'FamCode', 'Family', 'CommonName', 'ClassNum', 'Class', 'Remarks', 'Perc', 'MaxLengthTL', 'SLTL', 'SLTL_LOWER', 'SLTL_UPPER', 'FLTL', 'FLTL_LOWER', 'FLTL_UPPER', 'HLTL', 'HLTL_LOWER', 'HLTL_UPPER', 'PALTL', 'PALTL_LOWER', 'PALTL_UPPER', 'PDLTL', 'PDLTL_LOWER', 'PDLTL_UPPER', 'PPLTL', 'PPLTL_LOWER', 'PPLTL_UPPER', 'PPELTL', 'PPELTL_LOWER', 'PPELTL_UPPER', 'EDTL', 'EDTL_LOWER', 'EDTL_UPPER', 'POLTL', 'POLTL_LOWER', 'POLTL_UPPER', 'BDTL', 'BDTL_LOWER', 'BDTL_UPPER', 'CHTL', 'CHTL_LOWER', 'CHTL_UPPER', 'PKID', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. MorphmettlratiosPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Picname' => 0, 'Speccode' => 1, 'Famcode' => 2, 'Family' => 3, 'Commonname' => 4, 'Classnum' => 5, 'Class' => 6, 'Remarks' => 7, 'Perc' => 8, 'Maxlengthtl' => 9, 'Sltl' => 10, 'SltlLower' => 11, 'SltlUpper' => 12, 'Fltl' => 13, 'FltlLower' => 14, 'FltlUpper' => 15, 'Hltl' => 16, 'HltlLower' => 17, 'HltlUpper' => 18, 'Paltl' => 19, 'PaltlLower' => 20, 'PaltlUpper' => 21, 'Pdltl' => 22, 'PdltlLower' => 23, 'PdltlUpper' => 24, 'Ppltl' => 25, 'PpltlLower' => 26, 'PpltlUpper' => 27, 'Ppeltl' => 28, 'PpeltlLower' => 29, 'PpeltlUpper' => 30, 'Edtl' => 31, 'EdtlLower' => 32, 'EdtlUpper' => 33, 'Poltl' => 34, 'PoltlLower' => 35, 'PoltlUpper' => 36, 'Bdtl' => 37, 'BdtlLower' => 38, 'BdtlUpper' => 39, 'Chtl' => 40, 'ChtlLower' => 41, 'ChtlUpper' => 42, 'Pkid' => 43, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('picname' => 0, 'speccode' => 1, 'famcode' => 2, 'family' => 3, 'commonname' => 4, 'classnum' => 5, 'class' => 6, 'remarks' => 7, 'perc' => 8, 'maxlengthtl' => 9, 'sltl' => 10, 'sltlLower' => 11, 'sltlUpper' => 12, 'fltl' => 13, 'fltlLower' => 14, 'fltlUpper' => 15, 'hltl' => 16, 'hltlLower' => 17, 'hltlUpper' => 18, 'paltl' => 19, 'paltlLower' => 20, 'paltlUpper' => 21, 'pdltl' => 22, 'pdltlLower' => 23, 'pdltlUpper' => 24, 'ppltl' => 25, 'ppltlLower' => 26, 'ppltlUpper' => 27, 'ppeltl' => 28, 'ppeltlLower' => 29, 'ppeltlUpper' => 30, 'edtl' => 31, 'edtlLower' => 32, 'edtlUpper' => 33, 'poltl' => 34, 'poltlLower' => 35, 'poltlUpper' => 36, 'bdtl' => 37, 'bdtlLower' => 38, 'bdtlUpper' => 39, 'chtl' => 40, 'chtlLower' => 41, 'chtlUpper' => 42, 'pkid' => 43, ),
        BasePeer::TYPE_COLNAME => array (MorphmettlratiosPeer::PICNAME => 0, MorphmettlratiosPeer::SPECCODE => 1, MorphmettlratiosPeer::FAMCODE => 2, MorphmettlratiosPeer::FAMILY => 3, MorphmettlratiosPeer::COMMONNAME => 4, MorphmettlratiosPeer::CLASSNUM => 5, MorphmettlratiosPeer::CLAZZ => 6, MorphmettlratiosPeer::REMARKS => 7, MorphmettlratiosPeer::PERC => 8, MorphmettlratiosPeer::MAXLENGTHTL => 9, MorphmettlratiosPeer::SLTL => 10, MorphmettlratiosPeer::SLTL_LOWER => 11, MorphmettlratiosPeer::SLTL_UPPER => 12, MorphmettlratiosPeer::FLTL => 13, MorphmettlratiosPeer::FLTL_LOWER => 14, MorphmettlratiosPeer::FLTL_UPPER => 15, MorphmettlratiosPeer::HLTL => 16, MorphmettlratiosPeer::HLTL_LOWER => 17, MorphmettlratiosPeer::HLTL_UPPER => 18, MorphmettlratiosPeer::PALTL => 19, MorphmettlratiosPeer::PALTL_LOWER => 20, MorphmettlratiosPeer::PALTL_UPPER => 21, MorphmettlratiosPeer::PDLTL => 22, MorphmettlratiosPeer::PDLTL_LOWER => 23, MorphmettlratiosPeer::PDLTL_UPPER => 24, MorphmettlratiosPeer::PPLTL => 25, MorphmettlratiosPeer::PPLTL_LOWER => 26, MorphmettlratiosPeer::PPLTL_UPPER => 27, MorphmettlratiosPeer::PPELTL => 28, MorphmettlratiosPeer::PPELTL_LOWER => 29, MorphmettlratiosPeer::PPELTL_UPPER => 30, MorphmettlratiosPeer::EDTL => 31, MorphmettlratiosPeer::EDTL_LOWER => 32, MorphmettlratiosPeer::EDTL_UPPER => 33, MorphmettlratiosPeer::POLTL => 34, MorphmettlratiosPeer::POLTL_LOWER => 35, MorphmettlratiosPeer::POLTL_UPPER => 36, MorphmettlratiosPeer::BDTL => 37, MorphmettlratiosPeer::BDTL_LOWER => 38, MorphmettlratiosPeer::BDTL_UPPER => 39, MorphmettlratiosPeer::CHTL => 40, MorphmettlratiosPeer::CHTL_LOWER => 41, MorphmettlratiosPeer::CHTL_UPPER => 42, MorphmettlratiosPeer::PKID => 43, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PICNAME' => 0, 'SPECCODE' => 1, 'FAMCODE' => 2, 'FAMILY' => 3, 'COMMONNAME' => 4, 'CLASSNUM' => 5, 'CLAZZ' => 6, 'REMARKS' => 7, 'PERC' => 8, 'MAXLENGTHTL' => 9, 'SLTL' => 10, 'SLTL_LOWER' => 11, 'SLTL_UPPER' => 12, 'FLTL' => 13, 'FLTL_LOWER' => 14, 'FLTL_UPPER' => 15, 'HLTL' => 16, 'HLTL_LOWER' => 17, 'HLTL_UPPER' => 18, 'PALTL' => 19, 'PALTL_LOWER' => 20, 'PALTL_UPPER' => 21, 'PDLTL' => 22, 'PDLTL_LOWER' => 23, 'PDLTL_UPPER' => 24, 'PPLTL' => 25, 'PPLTL_LOWER' => 26, 'PPLTL_UPPER' => 27, 'PPELTL' => 28, 'PPELTL_LOWER' => 29, 'PPELTL_UPPER' => 30, 'EDTL' => 31, 'EDTL_LOWER' => 32, 'EDTL_UPPER' => 33, 'POLTL' => 34, 'POLTL_LOWER' => 35, 'POLTL_UPPER' => 36, 'BDTL' => 37, 'BDTL_LOWER' => 38, 'BDTL_UPPER' => 39, 'CHTL' => 40, 'CHTL_LOWER' => 41, 'CHTL_UPPER' => 42, 'PKID' => 43, ),
        BasePeer::TYPE_FIELDNAME => array ('PicName' => 0, 'Speccode' => 1, 'FamCode' => 2, 'Family' => 3, 'CommonName' => 4, 'ClassNum' => 5, 'Class' => 6, 'Remarks' => 7, 'Perc' => 8, 'MaxLengthTL' => 9, 'SLTL' => 10, 'SLTL_LOWER' => 11, 'SLTL_UPPER' => 12, 'FLTL' => 13, 'FLTL_LOWER' => 14, 'FLTL_UPPER' => 15, 'HLTL' => 16, 'HLTL_LOWER' => 17, 'HLTL_UPPER' => 18, 'PALTL' => 19, 'PALTL_LOWER' => 20, 'PALTL_UPPER' => 21, 'PDLTL' => 22, 'PDLTL_LOWER' => 23, 'PDLTL_UPPER' => 24, 'PPLTL' => 25, 'PPLTL_LOWER' => 26, 'PPLTL_UPPER' => 27, 'PPELTL' => 28, 'PPELTL_LOWER' => 29, 'PPELTL_UPPER' => 30, 'EDTL' => 31, 'EDTL_LOWER' => 32, 'EDTL_UPPER' => 33, 'POLTL' => 34, 'POLTL_LOWER' => 35, 'POLTL_UPPER' => 36, 'BDTL' => 37, 'BDTL_LOWER' => 38, 'BDTL_UPPER' => 39, 'CHTL' => 40, 'CHTL_LOWER' => 41, 'CHTL_UPPER' => 42, 'PKID' => 43, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, )
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
        $toNames = MorphmettlratiosPeer::getFieldNames($toType);
        $key = isset(MorphmettlratiosPeer::$fieldKeys[$fromType][$name]) ? MorphmettlratiosPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(MorphmettlratiosPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, MorphmettlratiosPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return MorphmettlratiosPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. MorphmettlratiosPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(MorphmettlratiosPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(MorphmettlratiosPeer::PICNAME);
            $criteria->addSelectColumn(MorphmettlratiosPeer::SPECCODE);
            $criteria->addSelectColumn(MorphmettlratiosPeer::FAMCODE);
            $criteria->addSelectColumn(MorphmettlratiosPeer::FAMILY);
            $criteria->addSelectColumn(MorphmettlratiosPeer::COMMONNAME);
            $criteria->addSelectColumn(MorphmettlratiosPeer::CLASSNUM);
            $criteria->addSelectColumn(MorphmettlratiosPeer::CLAZZ);
            $criteria->addSelectColumn(MorphmettlratiosPeer::REMARKS);
            $criteria->addSelectColumn(MorphmettlratiosPeer::PERC);
            $criteria->addSelectColumn(MorphmettlratiosPeer::MAXLENGTHTL);
            $criteria->addSelectColumn(MorphmettlratiosPeer::SLTL);
            $criteria->addSelectColumn(MorphmettlratiosPeer::SLTL_LOWER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::SLTL_UPPER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::FLTL);
            $criteria->addSelectColumn(MorphmettlratiosPeer::FLTL_LOWER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::FLTL_UPPER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::HLTL);
            $criteria->addSelectColumn(MorphmettlratiosPeer::HLTL_LOWER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::HLTL_UPPER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::PALTL);
            $criteria->addSelectColumn(MorphmettlratiosPeer::PALTL_LOWER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::PALTL_UPPER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::PDLTL);
            $criteria->addSelectColumn(MorphmettlratiosPeer::PDLTL_LOWER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::PDLTL_UPPER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::PPLTL);
            $criteria->addSelectColumn(MorphmettlratiosPeer::PPLTL_LOWER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::PPLTL_UPPER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::PPELTL);
            $criteria->addSelectColumn(MorphmettlratiosPeer::PPELTL_LOWER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::PPELTL_UPPER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::EDTL);
            $criteria->addSelectColumn(MorphmettlratiosPeer::EDTL_LOWER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::EDTL_UPPER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::POLTL);
            $criteria->addSelectColumn(MorphmettlratiosPeer::POLTL_LOWER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::POLTL_UPPER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::BDTL);
            $criteria->addSelectColumn(MorphmettlratiosPeer::BDTL_LOWER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::BDTL_UPPER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::CHTL);
            $criteria->addSelectColumn(MorphmettlratiosPeer::CHTL_LOWER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::CHTL_UPPER);
            $criteria->addSelectColumn(MorphmettlratiosPeer::PKID);
        } else {
            $criteria->addSelectColumn($alias . '.PicName');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.FamCode');
            $criteria->addSelectColumn($alias . '.Family');
            $criteria->addSelectColumn($alias . '.CommonName');
            $criteria->addSelectColumn($alias . '.ClassNum');
            $criteria->addSelectColumn($alias . '.Class');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.Perc');
            $criteria->addSelectColumn($alias . '.MaxLengthTL');
            $criteria->addSelectColumn($alias . '.SLTL');
            $criteria->addSelectColumn($alias . '.SLTL_LOWER');
            $criteria->addSelectColumn($alias . '.SLTL_UPPER');
            $criteria->addSelectColumn($alias . '.FLTL');
            $criteria->addSelectColumn($alias . '.FLTL_LOWER');
            $criteria->addSelectColumn($alias . '.FLTL_UPPER');
            $criteria->addSelectColumn($alias . '.HLTL');
            $criteria->addSelectColumn($alias . '.HLTL_LOWER');
            $criteria->addSelectColumn($alias . '.HLTL_UPPER');
            $criteria->addSelectColumn($alias . '.PALTL');
            $criteria->addSelectColumn($alias . '.PALTL_LOWER');
            $criteria->addSelectColumn($alias . '.PALTL_UPPER');
            $criteria->addSelectColumn($alias . '.PDLTL');
            $criteria->addSelectColumn($alias . '.PDLTL_LOWER');
            $criteria->addSelectColumn($alias . '.PDLTL_UPPER');
            $criteria->addSelectColumn($alias . '.PPLTL');
            $criteria->addSelectColumn($alias . '.PPLTL_LOWER');
            $criteria->addSelectColumn($alias . '.PPLTL_UPPER');
            $criteria->addSelectColumn($alias . '.PPELTL');
            $criteria->addSelectColumn($alias . '.PPELTL_LOWER');
            $criteria->addSelectColumn($alias . '.PPELTL_UPPER');
            $criteria->addSelectColumn($alias . '.EDTL');
            $criteria->addSelectColumn($alias . '.EDTL_LOWER');
            $criteria->addSelectColumn($alias . '.EDTL_UPPER');
            $criteria->addSelectColumn($alias . '.POLTL');
            $criteria->addSelectColumn($alias . '.POLTL_LOWER');
            $criteria->addSelectColumn($alias . '.POLTL_UPPER');
            $criteria->addSelectColumn($alias . '.BDTL');
            $criteria->addSelectColumn($alias . '.BDTL_LOWER');
            $criteria->addSelectColumn($alias . '.BDTL_UPPER');
            $criteria->addSelectColumn($alias . '.CHTL');
            $criteria->addSelectColumn($alias . '.CHTL_LOWER');
            $criteria->addSelectColumn($alias . '.CHTL_UPPER');
            $criteria->addSelectColumn($alias . '.PKID');
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
        $criteria->setPrimaryTableName(MorphmettlratiosPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MorphmettlratiosPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(MorphmettlratiosPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(MorphmettlratiosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Morphmettlratios
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = MorphmettlratiosPeer::doSelect($critcopy, $con);
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
        return MorphmettlratiosPeer::populateObjects(MorphmettlratiosPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(MorphmettlratiosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            MorphmettlratiosPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(MorphmettlratiosPeer::DATABASE_NAME);

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
     * @param Morphmettlratios $obj A Morphmettlratios object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPkid();
            } // if key === null
            MorphmettlratiosPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Morphmettlratios object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Morphmettlratios) {
                $key = (string) $value->getPkid();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Morphmettlratios object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(MorphmettlratiosPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Morphmettlratios Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(MorphmettlratiosPeer::$instances[$key])) {
                return MorphmettlratiosPeer::$instances[$key];
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
        foreach (MorphmettlratiosPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        MorphmettlratiosPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to morphmettlratios
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
        if ($row[$startcol + 43] === null) {
            return null;
        }

        return (string) $row[$startcol + 43];
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

        return (string) $row[$startcol + 43];
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
        $cls = MorphmettlratiosPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = MorphmettlratiosPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = MorphmettlratiosPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MorphmettlratiosPeer::addInstanceToPool($obj, $key);
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
     * @return array (Morphmettlratios object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = MorphmettlratiosPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = MorphmettlratiosPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + MorphmettlratiosPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MorphmettlratiosPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            MorphmettlratiosPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(MorphmettlratiosPeer::DATABASE_NAME)->getTable(MorphmettlratiosPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseMorphmettlratiosPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseMorphmettlratiosPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \MorphmettlratiosTableMap());
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
        return MorphmettlratiosPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Morphmettlratios or Criteria object.
     *
     * @param      mixed $values Criteria or Morphmettlratios object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MorphmettlratiosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Morphmettlratios object
        }

        if ($criteria->containsKey(MorphmettlratiosPeer::PKID) && $criteria->keyContainsValue(MorphmettlratiosPeer::PKID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.MorphmettlratiosPeer::PKID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(MorphmettlratiosPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Morphmettlratios or Criteria object.
     *
     * @param      mixed $values Criteria or Morphmettlratios object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MorphmettlratiosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(MorphmettlratiosPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(MorphmettlratiosPeer::PKID);
            $value = $criteria->remove(MorphmettlratiosPeer::PKID);
            if ($value) {
                $selectCriteria->add(MorphmettlratiosPeer::PKID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MorphmettlratiosPeer::TABLE_NAME);
            }

        } else { // $values is Morphmettlratios object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(MorphmettlratiosPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the morphmettlratios table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MorphmettlratiosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(MorphmettlratiosPeer::TABLE_NAME, $con, MorphmettlratiosPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MorphmettlratiosPeer::clearInstancePool();
            MorphmettlratiosPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Morphmettlratios or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Morphmettlratios object or primary key or array of primary keys
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
            $con = Propel::getConnection(MorphmettlratiosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            MorphmettlratiosPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Morphmettlratios) { // it's a model object
            // invalidate the cache for this single object
            MorphmettlratiosPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MorphmettlratiosPeer::DATABASE_NAME);
            $criteria->add(MorphmettlratiosPeer::PKID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                MorphmettlratiosPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(MorphmettlratiosPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            MorphmettlratiosPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Morphmettlratios object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Morphmettlratios $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(MorphmettlratiosPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(MorphmettlratiosPeer::TABLE_NAME);

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

        return BasePeer::doValidate(MorphmettlratiosPeer::DATABASE_NAME, MorphmettlratiosPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Morphmettlratios
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = MorphmettlratiosPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(MorphmettlratiosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(MorphmettlratiosPeer::DATABASE_NAME);
        $criteria->add(MorphmettlratiosPeer::PKID, $pk);

        $v = MorphmettlratiosPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Morphmettlratios[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MorphmettlratiosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(MorphmettlratiosPeer::DATABASE_NAME);
            $criteria->add(MorphmettlratiosPeer::PKID, $pks, Criteria::IN);
            $objs = MorphmettlratiosPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseMorphmettlratiosPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMorphmettlratiosPeer::buildTableMap();

