<?php


/**
 * Base static class for performing query and update operations on the 'synonyms_back' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseSynonymsBackPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'synonyms_back';

    /** the related Propel class for this table */
    const OM_CLASS = 'SynonymsBack';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SynonymsBackTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 43;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 43;

    /** the column name for the SynCode field */
    const SYNCODE = 'synonyms_back.SynCode';

    /** the column name for the SynGenus field */
    const SYNGENUS = 'synonyms_back.SynGenus';

    /** the column name for the SynSpecies field */
    const SYNSPECIES = 'synonyms_back.SynSpecies';

    /** the column name for the SpecCode field */
    const SPECCODE = 'synonyms_back.SpecCode';

    /** the column name for the Valid field */
    const VALID = 'synonyms_back.Valid';

    /** the column name for the Author field */
    const AUTHOR = 'synonyms_back.Author';

    /** the column name for the Year field */
    const YEAR = 'synonyms_back.Year';

    /** the column name for the CAS_REF_NO field */
    const CAS_REF_NO = 'synonyms_back.CAS_REF_NO';

    /** the column name for the CAS_SPC field */
    const CAS_SPC = 'synonyms_back.CAS_SPC';

    /** the column name for the TaxonLevel field */
    const TAXONLEVEL = 'synonyms_back.TaxonLevel';

    /** the column name for the SyncodeValid field */
    const SYNCODEVALID = 'synonyms_back.SyncodeValid';

    /** the column name for the LastEpithet field */
    const LASTEPITHET = 'synonyms_back.LastEpithet';

    /** the column name for the Status field */
    const STATUS = 'synonyms_back.Status';

    /** the column name for the SynonymsRef field */
    const SYNONYMSREF = 'synonyms_back.SynonymsRef';

    /** the column name for the Synonymy field */
    const SYNONYMY = 'synonyms_back.Synonymy';

    /** the column name for the SynonymyDetail field */
    const SYNONYMYDETAIL = 'synonyms_back.SynonymyDetail';

    /** the column name for the Combination field */
    const COMBINATION = 'synonyms_back.Combination';

    /** the column name for the Misspelling field */
    const MISSPELLING = 'synonyms_back.Misspelling';

    /** the column name for the MisspellingDetail field */
    const MISSPELLINGDETAIL = 'synonyms_back.MisspellingDetail';

    /** the column name for the ValidTax field */
    const VALIDTAX = 'synonyms_back.ValidTax';

    /** the column name for the CommentTax field */
    const COMMENTTAX = 'synonyms_back.CommentTax';

    /** the column name for the OriginalPub field */
    const ORIGINALPUB = 'synonyms_back.OriginalPub';

    /** the column name for the StatusOrder field */
    const STATUSORDER = 'synonyms_back.StatusOrder';

    /** the column name for the RankSearch field */
    const RANKSEARCH = 'synonyms_back.RankSearch';

    /** the column name for the GSDOriginal field */
    const GSDORIGINAL = 'synonyms_back.GSDOriginal';

    /** the column name for the GSDStatus field */
    const GSDSTATUS = 'synonyms_back.GSDStatus';

    /** the column name for the GSDVersionDate field */
    const GSDVERSIONDATE = 'synonyms_back.GSDVersionDate';

    /** the column name for the GSDExpert field */
    const GSDEXPERT = 'synonyms_back.GSDExpert';

    /** the column name for the Comment field */
    const COMMENT = 'synonyms_back.Comment';

    /** the column name for the Etymology field */
    const ETYMOLOGY = 'synonyms_back.Etymology';

    /** the column name for the CoL field */
    const COL = 'synonyms_back.CoL';

    /** the column name for the CoL_ID field */
    const COL_ID = 'synonyms_back.CoL_ID';

    /** the column name for the ZooBank_ID field */
    const ZOOBANK_ID = 'synonyms_back.ZooBank_ID';

    /** the column name for the ION_ID field */
    const ION_ID = 'synonyms_back.ION_ID';

    /** the column name for the TSN field */
    const TSN = 'synonyms_back.TSN';

    /** the column name for the WoRMS_ID field */
    const WORMS_ID = 'synonyms_back.WoRMS_ID';

    /** the column name for the Entered field */
    const ENTERED = 'synonyms_back.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'synonyms_back.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'synonyms_back.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'synonyms_back.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'synonyms_back.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'synonyms_back.DateChecked';

    /** the column name for the TS field */
    const TS = 'synonyms_back.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of SynonymsBack objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array SynonymsBack[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SynonymsBackPeer::$fieldNames[SynonymsBackPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Syncode', 'Syngenus', 'Synspecies', 'Speccode', 'Valid', 'Author', 'Year', 'CasRefNo', 'CasSpc', 'Taxonlevel', 'Syncodevalid', 'Lastepithet', 'Status', 'Synonymsref', 'Synonymy', 'Synonymydetail', 'Combination', 'Misspelling', 'Misspellingdetail', 'Validtax', 'Commenttax', 'Originalpub', 'Statusorder', 'Ranksearch', 'Gsdoriginal', 'Gsdstatus', 'Gsdversiondate', 'Gsdexpert', 'Comment', 'Etymology', 'Col', 'ColId', 'ZoobankId', 'IonId', 'Tsn', 'WormsId', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('syncode', 'syngenus', 'synspecies', 'speccode', 'valid', 'author', 'year', 'casRefNo', 'casSpc', 'taxonlevel', 'syncodevalid', 'lastepithet', 'status', 'synonymsref', 'synonymy', 'synonymydetail', 'combination', 'misspelling', 'misspellingdetail', 'validtax', 'commenttax', 'originalpub', 'statusorder', 'ranksearch', 'gsdoriginal', 'gsdstatus', 'gsdversiondate', 'gsdexpert', 'comment', 'etymology', 'col', 'colId', 'zoobankId', 'ionId', 'tsn', 'wormsId', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (SynonymsBackPeer::SYNCODE, SynonymsBackPeer::SYNGENUS, SynonymsBackPeer::SYNSPECIES, SynonymsBackPeer::SPECCODE, SynonymsBackPeer::VALID, SynonymsBackPeer::AUTHOR, SynonymsBackPeer::YEAR, SynonymsBackPeer::CAS_REF_NO, SynonymsBackPeer::CAS_SPC, SynonymsBackPeer::TAXONLEVEL, SynonymsBackPeer::SYNCODEVALID, SynonymsBackPeer::LASTEPITHET, SynonymsBackPeer::STATUS, SynonymsBackPeer::SYNONYMSREF, SynonymsBackPeer::SYNONYMY, SynonymsBackPeer::SYNONYMYDETAIL, SynonymsBackPeer::COMBINATION, SynonymsBackPeer::MISSPELLING, SynonymsBackPeer::MISSPELLINGDETAIL, SynonymsBackPeer::VALIDTAX, SynonymsBackPeer::COMMENTTAX, SynonymsBackPeer::ORIGINALPUB, SynonymsBackPeer::STATUSORDER, SynonymsBackPeer::RANKSEARCH, SynonymsBackPeer::GSDORIGINAL, SynonymsBackPeer::GSDSTATUS, SynonymsBackPeer::GSDVERSIONDATE, SynonymsBackPeer::GSDEXPERT, SynonymsBackPeer::COMMENT, SynonymsBackPeer::ETYMOLOGY, SynonymsBackPeer::COL, SynonymsBackPeer::COL_ID, SynonymsBackPeer::ZOOBANK_ID, SynonymsBackPeer::ION_ID, SynonymsBackPeer::TSN, SynonymsBackPeer::WORMS_ID, SynonymsBackPeer::ENTERED, SynonymsBackPeer::DATEENTERED, SynonymsBackPeer::MODIFIED, SynonymsBackPeer::DATEMODIFIED, SynonymsBackPeer::EXPERT, SynonymsBackPeer::DATECHECKED, SynonymsBackPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SYNCODE', 'SYNGENUS', 'SYNSPECIES', 'SPECCODE', 'VALID', 'AUTHOR', 'YEAR', 'CAS_REF_NO', 'CAS_SPC', 'TAXONLEVEL', 'SYNCODEVALID', 'LASTEPITHET', 'STATUS', 'SYNONYMSREF', 'SYNONYMY', 'SYNONYMYDETAIL', 'COMBINATION', 'MISSPELLING', 'MISSPELLINGDETAIL', 'VALIDTAX', 'COMMENTTAX', 'ORIGINALPUB', 'STATUSORDER', 'RANKSEARCH', 'GSDORIGINAL', 'GSDSTATUS', 'GSDVERSIONDATE', 'GSDEXPERT', 'COMMENT', 'ETYMOLOGY', 'COL', 'COL_ID', 'ZOOBANK_ID', 'ION_ID', 'TSN', 'WORMS_ID', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('SynCode', 'SynGenus', 'SynSpecies', 'SpecCode', 'Valid', 'Author', 'Year', 'CAS_REF_NO', 'CAS_SPC', 'TaxonLevel', 'SyncodeValid', 'LastEpithet', 'Status', 'SynonymsRef', 'Synonymy', 'SynonymyDetail', 'Combination', 'Misspelling', 'MisspellingDetail', 'ValidTax', 'CommentTax', 'OriginalPub', 'StatusOrder', 'RankSearch', 'GSDOriginal', 'GSDStatus', 'GSDVersionDate', 'GSDExpert', 'Comment', 'Etymology', 'CoL', 'CoL_ID', 'ZooBank_ID', 'ION_ID', 'TSN', 'WoRMS_ID', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SynonymsBackPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Syncode' => 0, 'Syngenus' => 1, 'Synspecies' => 2, 'Speccode' => 3, 'Valid' => 4, 'Author' => 5, 'Year' => 6, 'CasRefNo' => 7, 'CasSpc' => 8, 'Taxonlevel' => 9, 'Syncodevalid' => 10, 'Lastepithet' => 11, 'Status' => 12, 'Synonymsref' => 13, 'Synonymy' => 14, 'Synonymydetail' => 15, 'Combination' => 16, 'Misspelling' => 17, 'Misspellingdetail' => 18, 'Validtax' => 19, 'Commenttax' => 20, 'Originalpub' => 21, 'Statusorder' => 22, 'Ranksearch' => 23, 'Gsdoriginal' => 24, 'Gsdstatus' => 25, 'Gsdversiondate' => 26, 'Gsdexpert' => 27, 'Comment' => 28, 'Etymology' => 29, 'Col' => 30, 'ColId' => 31, 'ZoobankId' => 32, 'IonId' => 33, 'Tsn' => 34, 'WormsId' => 35, 'Entered' => 36, 'Dateentered' => 37, 'Modified' => 38, 'Datemodified' => 39, 'Expert' => 40, 'Datechecked' => 41, 'Ts' => 42, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('syncode' => 0, 'syngenus' => 1, 'synspecies' => 2, 'speccode' => 3, 'valid' => 4, 'author' => 5, 'year' => 6, 'casRefNo' => 7, 'casSpc' => 8, 'taxonlevel' => 9, 'syncodevalid' => 10, 'lastepithet' => 11, 'status' => 12, 'synonymsref' => 13, 'synonymy' => 14, 'synonymydetail' => 15, 'combination' => 16, 'misspelling' => 17, 'misspellingdetail' => 18, 'validtax' => 19, 'commenttax' => 20, 'originalpub' => 21, 'statusorder' => 22, 'ranksearch' => 23, 'gsdoriginal' => 24, 'gsdstatus' => 25, 'gsdversiondate' => 26, 'gsdexpert' => 27, 'comment' => 28, 'etymology' => 29, 'col' => 30, 'colId' => 31, 'zoobankId' => 32, 'ionId' => 33, 'tsn' => 34, 'wormsId' => 35, 'entered' => 36, 'dateentered' => 37, 'modified' => 38, 'datemodified' => 39, 'expert' => 40, 'datechecked' => 41, 'ts' => 42, ),
        BasePeer::TYPE_COLNAME => array (SynonymsBackPeer::SYNCODE => 0, SynonymsBackPeer::SYNGENUS => 1, SynonymsBackPeer::SYNSPECIES => 2, SynonymsBackPeer::SPECCODE => 3, SynonymsBackPeer::VALID => 4, SynonymsBackPeer::AUTHOR => 5, SynonymsBackPeer::YEAR => 6, SynonymsBackPeer::CAS_REF_NO => 7, SynonymsBackPeer::CAS_SPC => 8, SynonymsBackPeer::TAXONLEVEL => 9, SynonymsBackPeer::SYNCODEVALID => 10, SynonymsBackPeer::LASTEPITHET => 11, SynonymsBackPeer::STATUS => 12, SynonymsBackPeer::SYNONYMSREF => 13, SynonymsBackPeer::SYNONYMY => 14, SynonymsBackPeer::SYNONYMYDETAIL => 15, SynonymsBackPeer::COMBINATION => 16, SynonymsBackPeer::MISSPELLING => 17, SynonymsBackPeer::MISSPELLINGDETAIL => 18, SynonymsBackPeer::VALIDTAX => 19, SynonymsBackPeer::COMMENTTAX => 20, SynonymsBackPeer::ORIGINALPUB => 21, SynonymsBackPeer::STATUSORDER => 22, SynonymsBackPeer::RANKSEARCH => 23, SynonymsBackPeer::GSDORIGINAL => 24, SynonymsBackPeer::GSDSTATUS => 25, SynonymsBackPeer::GSDVERSIONDATE => 26, SynonymsBackPeer::GSDEXPERT => 27, SynonymsBackPeer::COMMENT => 28, SynonymsBackPeer::ETYMOLOGY => 29, SynonymsBackPeer::COL => 30, SynonymsBackPeer::COL_ID => 31, SynonymsBackPeer::ZOOBANK_ID => 32, SynonymsBackPeer::ION_ID => 33, SynonymsBackPeer::TSN => 34, SynonymsBackPeer::WORMS_ID => 35, SynonymsBackPeer::ENTERED => 36, SynonymsBackPeer::DATEENTERED => 37, SynonymsBackPeer::MODIFIED => 38, SynonymsBackPeer::DATEMODIFIED => 39, SynonymsBackPeer::EXPERT => 40, SynonymsBackPeer::DATECHECKED => 41, SynonymsBackPeer::TS => 42, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SYNCODE' => 0, 'SYNGENUS' => 1, 'SYNSPECIES' => 2, 'SPECCODE' => 3, 'VALID' => 4, 'AUTHOR' => 5, 'YEAR' => 6, 'CAS_REF_NO' => 7, 'CAS_SPC' => 8, 'TAXONLEVEL' => 9, 'SYNCODEVALID' => 10, 'LASTEPITHET' => 11, 'STATUS' => 12, 'SYNONYMSREF' => 13, 'SYNONYMY' => 14, 'SYNONYMYDETAIL' => 15, 'COMBINATION' => 16, 'MISSPELLING' => 17, 'MISSPELLINGDETAIL' => 18, 'VALIDTAX' => 19, 'COMMENTTAX' => 20, 'ORIGINALPUB' => 21, 'STATUSORDER' => 22, 'RANKSEARCH' => 23, 'GSDORIGINAL' => 24, 'GSDSTATUS' => 25, 'GSDVERSIONDATE' => 26, 'GSDEXPERT' => 27, 'COMMENT' => 28, 'ETYMOLOGY' => 29, 'COL' => 30, 'COL_ID' => 31, 'ZOOBANK_ID' => 32, 'ION_ID' => 33, 'TSN' => 34, 'WORMS_ID' => 35, 'ENTERED' => 36, 'DATEENTERED' => 37, 'MODIFIED' => 38, 'DATEMODIFIED' => 39, 'EXPERT' => 40, 'DATECHECKED' => 41, 'TS' => 42, ),
        BasePeer::TYPE_FIELDNAME => array ('SynCode' => 0, 'SynGenus' => 1, 'SynSpecies' => 2, 'SpecCode' => 3, 'Valid' => 4, 'Author' => 5, 'Year' => 6, 'CAS_REF_NO' => 7, 'CAS_SPC' => 8, 'TaxonLevel' => 9, 'SyncodeValid' => 10, 'LastEpithet' => 11, 'Status' => 12, 'SynonymsRef' => 13, 'Synonymy' => 14, 'SynonymyDetail' => 15, 'Combination' => 16, 'Misspelling' => 17, 'MisspellingDetail' => 18, 'ValidTax' => 19, 'CommentTax' => 20, 'OriginalPub' => 21, 'StatusOrder' => 22, 'RankSearch' => 23, 'GSDOriginal' => 24, 'GSDStatus' => 25, 'GSDVersionDate' => 26, 'GSDExpert' => 27, 'Comment' => 28, 'Etymology' => 29, 'CoL' => 30, 'CoL_ID' => 31, 'ZooBank_ID' => 32, 'ION_ID' => 33, 'TSN' => 34, 'WoRMS_ID' => 35, 'Entered' => 36, 'DateEntered' => 37, 'Modified' => 38, 'DateModified' => 39, 'Expert' => 40, 'DateChecked' => 41, 'TS' => 42, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
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
        $toNames = SynonymsBackPeer::getFieldNames($toType);
        $key = isset(SynonymsBackPeer::$fieldKeys[$fromType][$name]) ? SynonymsBackPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SynonymsBackPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SynonymsBackPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SynonymsBackPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SynonymsBackPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SynonymsBackPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SynonymsBackPeer::SYNCODE);
            $criteria->addSelectColumn(SynonymsBackPeer::SYNGENUS);
            $criteria->addSelectColumn(SynonymsBackPeer::SYNSPECIES);
            $criteria->addSelectColumn(SynonymsBackPeer::SPECCODE);
            $criteria->addSelectColumn(SynonymsBackPeer::VALID);
            $criteria->addSelectColumn(SynonymsBackPeer::AUTHOR);
            $criteria->addSelectColumn(SynonymsBackPeer::YEAR);
            $criteria->addSelectColumn(SynonymsBackPeer::CAS_REF_NO);
            $criteria->addSelectColumn(SynonymsBackPeer::CAS_SPC);
            $criteria->addSelectColumn(SynonymsBackPeer::TAXONLEVEL);
            $criteria->addSelectColumn(SynonymsBackPeer::SYNCODEVALID);
            $criteria->addSelectColumn(SynonymsBackPeer::LASTEPITHET);
            $criteria->addSelectColumn(SynonymsBackPeer::STATUS);
            $criteria->addSelectColumn(SynonymsBackPeer::SYNONYMSREF);
            $criteria->addSelectColumn(SynonymsBackPeer::SYNONYMY);
            $criteria->addSelectColumn(SynonymsBackPeer::SYNONYMYDETAIL);
            $criteria->addSelectColumn(SynonymsBackPeer::COMBINATION);
            $criteria->addSelectColumn(SynonymsBackPeer::MISSPELLING);
            $criteria->addSelectColumn(SynonymsBackPeer::MISSPELLINGDETAIL);
            $criteria->addSelectColumn(SynonymsBackPeer::VALIDTAX);
            $criteria->addSelectColumn(SynonymsBackPeer::COMMENTTAX);
            $criteria->addSelectColumn(SynonymsBackPeer::ORIGINALPUB);
            $criteria->addSelectColumn(SynonymsBackPeer::STATUSORDER);
            $criteria->addSelectColumn(SynonymsBackPeer::RANKSEARCH);
            $criteria->addSelectColumn(SynonymsBackPeer::GSDORIGINAL);
            $criteria->addSelectColumn(SynonymsBackPeer::GSDSTATUS);
            $criteria->addSelectColumn(SynonymsBackPeer::GSDVERSIONDATE);
            $criteria->addSelectColumn(SynonymsBackPeer::GSDEXPERT);
            $criteria->addSelectColumn(SynonymsBackPeer::COMMENT);
            $criteria->addSelectColumn(SynonymsBackPeer::ETYMOLOGY);
            $criteria->addSelectColumn(SynonymsBackPeer::COL);
            $criteria->addSelectColumn(SynonymsBackPeer::COL_ID);
            $criteria->addSelectColumn(SynonymsBackPeer::ZOOBANK_ID);
            $criteria->addSelectColumn(SynonymsBackPeer::ION_ID);
            $criteria->addSelectColumn(SynonymsBackPeer::TSN);
            $criteria->addSelectColumn(SynonymsBackPeer::WORMS_ID);
            $criteria->addSelectColumn(SynonymsBackPeer::ENTERED);
            $criteria->addSelectColumn(SynonymsBackPeer::DATEENTERED);
            $criteria->addSelectColumn(SynonymsBackPeer::MODIFIED);
            $criteria->addSelectColumn(SynonymsBackPeer::DATEMODIFIED);
            $criteria->addSelectColumn(SynonymsBackPeer::EXPERT);
            $criteria->addSelectColumn(SynonymsBackPeer::DATECHECKED);
            $criteria->addSelectColumn(SynonymsBackPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.SynCode');
            $criteria->addSelectColumn($alias . '.SynGenus');
            $criteria->addSelectColumn($alias . '.SynSpecies');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Valid');
            $criteria->addSelectColumn($alias . '.Author');
            $criteria->addSelectColumn($alias . '.Year');
            $criteria->addSelectColumn($alias . '.CAS_REF_NO');
            $criteria->addSelectColumn($alias . '.CAS_SPC');
            $criteria->addSelectColumn($alias . '.TaxonLevel');
            $criteria->addSelectColumn($alias . '.SyncodeValid');
            $criteria->addSelectColumn($alias . '.LastEpithet');
            $criteria->addSelectColumn($alias . '.Status');
            $criteria->addSelectColumn($alias . '.SynonymsRef');
            $criteria->addSelectColumn($alias . '.Synonymy');
            $criteria->addSelectColumn($alias . '.SynonymyDetail');
            $criteria->addSelectColumn($alias . '.Combination');
            $criteria->addSelectColumn($alias . '.Misspelling');
            $criteria->addSelectColumn($alias . '.MisspellingDetail');
            $criteria->addSelectColumn($alias . '.ValidTax');
            $criteria->addSelectColumn($alias . '.CommentTax');
            $criteria->addSelectColumn($alias . '.OriginalPub');
            $criteria->addSelectColumn($alias . '.StatusOrder');
            $criteria->addSelectColumn($alias . '.RankSearch');
            $criteria->addSelectColumn($alias . '.GSDOriginal');
            $criteria->addSelectColumn($alias . '.GSDStatus');
            $criteria->addSelectColumn($alias . '.GSDVersionDate');
            $criteria->addSelectColumn($alias . '.GSDExpert');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.Etymology');
            $criteria->addSelectColumn($alias . '.CoL');
            $criteria->addSelectColumn($alias . '.CoL_ID');
            $criteria->addSelectColumn($alias . '.ZooBank_ID');
            $criteria->addSelectColumn($alias . '.ION_ID');
            $criteria->addSelectColumn($alias . '.TSN');
            $criteria->addSelectColumn($alias . '.WoRMS_ID');
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
        $criteria->setPrimaryTableName(SynonymsBackPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SynonymsBackPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SynonymsBackPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SynonymsBackPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return SynonymsBack
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SynonymsBackPeer::doSelect($critcopy, $con);
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
        return SynonymsBackPeer::populateObjects(SynonymsBackPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SynonymsBackPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SynonymsBackPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SynonymsBackPeer::DATABASE_NAME);

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
     * @param SynonymsBack $obj A SynonymsBack object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getSyncode(), (string) $obj->getSyngenus(), (string) $obj->getSynspecies(), (string) $obj->getSpeccode(), (string) $obj->getAuthor(), (string) $obj->getSynonymy(), (string) $obj->getCombination(), (string) $obj->getMisspelling()));
            } // if key === null
            SynonymsBackPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A SynonymsBack object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof SynonymsBack) {
                $key = serialize(array((string) $value->getSyncode(), (string) $value->getSyngenus(), (string) $value->getSynspecies(), (string) $value->getSpeccode(), (string) $value->getAuthor(), (string) $value->getSynonymy(), (string) $value->getCombination(), (string) $value->getMisspelling()));
            } elseif (is_array($value) && count($value) === 8) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4], (string) $value[5], (string) $value[6], (string) $value[7]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or SynonymsBack object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SynonymsBackPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return SynonymsBack Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SynonymsBackPeer::$instances[$key])) {
                return SynonymsBackPeer::$instances[$key];
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
        foreach (SynonymsBackPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SynonymsBackPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to synonyms_back
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 5] === null && $row[$startcol + 14] === null && $row[$startcol + 16] === null && $row[$startcol + 17] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 5], (string) $row[$startcol + 14], (string) $row[$startcol + 16], (string) $row[$startcol + 17]));
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

        return array((int) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2], (int) $row[$startcol + 3], (string) $row[$startcol + 5], (string) $row[$startcol + 14], (string) $row[$startcol + 16], (int) $row[$startcol + 17]);
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
        $cls = SynonymsBackPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SynonymsBackPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SynonymsBackPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SynonymsBackPeer::addInstanceToPool($obj, $key);
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
     * @return array (SynonymsBack object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SynonymsBackPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SynonymsBackPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SynonymsBackPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SynonymsBackPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SynonymsBackPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(SynonymsBackPeer::DATABASE_NAME)->getTable(SynonymsBackPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSynonymsBackPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSynonymsBackPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SynonymsBackTableMap());
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
        return SynonymsBackPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a SynonymsBack or Criteria object.
     *
     * @param      mixed $values Criteria or SynonymsBack object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SynonymsBackPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from SynonymsBack object
        }

        if ($criteria->containsKey(SynonymsBackPeer::SYNCODE) && $criteria->keyContainsValue(SynonymsBackPeer::SYNCODE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SynonymsBackPeer::SYNCODE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(SynonymsBackPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a SynonymsBack or Criteria object.
     *
     * @param      mixed $values Criteria or SynonymsBack object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SynonymsBackPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SynonymsBackPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SynonymsBackPeer::SYNCODE);
            $value = $criteria->remove(SynonymsBackPeer::SYNCODE);
            if ($value) {
                $selectCriteria->add(SynonymsBackPeer::SYNCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsBackPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SynonymsBackPeer::SYNGENUS);
            $value = $criteria->remove(SynonymsBackPeer::SYNGENUS);
            if ($value) {
                $selectCriteria->add(SynonymsBackPeer::SYNGENUS, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsBackPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SynonymsBackPeer::SYNSPECIES);
            $value = $criteria->remove(SynonymsBackPeer::SYNSPECIES);
            if ($value) {
                $selectCriteria->add(SynonymsBackPeer::SYNSPECIES, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsBackPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SynonymsBackPeer::SPECCODE);
            $value = $criteria->remove(SynonymsBackPeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(SynonymsBackPeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsBackPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SynonymsBackPeer::AUTHOR);
            $value = $criteria->remove(SynonymsBackPeer::AUTHOR);
            if ($value) {
                $selectCriteria->add(SynonymsBackPeer::AUTHOR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsBackPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SynonymsBackPeer::SYNONYMY);
            $value = $criteria->remove(SynonymsBackPeer::SYNONYMY);
            if ($value) {
                $selectCriteria->add(SynonymsBackPeer::SYNONYMY, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsBackPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SynonymsBackPeer::COMBINATION);
            $value = $criteria->remove(SynonymsBackPeer::COMBINATION);
            if ($value) {
                $selectCriteria->add(SynonymsBackPeer::COMBINATION, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsBackPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SynonymsBackPeer::MISSPELLING);
            $value = $criteria->remove(SynonymsBackPeer::MISSPELLING);
            if ($value) {
                $selectCriteria->add(SynonymsBackPeer::MISSPELLING, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsBackPeer::TABLE_NAME);
            }

        } else { // $values is SynonymsBack object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SynonymsBackPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the synonyms_back table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SynonymsBackPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SynonymsBackPeer::TABLE_NAME, $con, SynonymsBackPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SynonymsBackPeer::clearInstancePool();
            SynonymsBackPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a SynonymsBack or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or SynonymsBack object or primary key or array of primary keys
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
            $con = Propel::getConnection(SynonymsBackPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SynonymsBackPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof SynonymsBack) { // it's a model object
            // invalidate the cache for this single object
            SynonymsBackPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SynonymsBackPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SynonymsBackPeer::SYNCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SynonymsBackPeer::SYNGENUS, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(SynonymsBackPeer::SYNSPECIES, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(SynonymsBackPeer::SPECCODE, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(SynonymsBackPeer::AUTHOR, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(SynonymsBackPeer::SYNONYMY, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(SynonymsBackPeer::COMBINATION, $value[6]));
                $criterion->addAnd($criteria->getNewCriterion(SynonymsBackPeer::MISSPELLING, $value[7]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                SynonymsBackPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SynonymsBackPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SynonymsBackPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given SynonymsBack object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param SynonymsBack $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SynonymsBackPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SynonymsBackPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SynonymsBackPeer::DATABASE_NAME, SynonymsBackPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $syncode
     * @param   string $syngenus
     * @param   string $synspecies
     * @param   int $speccode
     * @param   string $author
     * @param   string $synonymy
     * @param   string $combination
     * @param   int $misspelling
     * @param      PropelPDO $con
     * @return SynonymsBack
     */
    public static function retrieveByPK($syncode, $syngenus, $synspecies, $speccode, $author, $synonymy, $combination, $misspelling, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $syncode, (string) $syngenus, (string) $synspecies, (string) $speccode, (string) $author, (string) $synonymy, (string) $combination, (string) $misspelling));
         if (null !== ($obj = SynonymsBackPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SynonymsBackPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(SynonymsBackPeer::DATABASE_NAME);
        $criteria->add(SynonymsBackPeer::SYNCODE, $syncode);
        $criteria->add(SynonymsBackPeer::SYNGENUS, $syngenus);
        $criteria->add(SynonymsBackPeer::SYNSPECIES, $synspecies);
        $criteria->add(SynonymsBackPeer::SPECCODE, $speccode);
        $criteria->add(SynonymsBackPeer::AUTHOR, $author);
        $criteria->add(SynonymsBackPeer::SYNONYMY, $synonymy);
        $criteria->add(SynonymsBackPeer::COMBINATION, $combination);
        $criteria->add(SynonymsBackPeer::MISSPELLING, $misspelling);
        $v = SynonymsBackPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseSynonymsBackPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSynonymsBackPeer::buildTableMap();

