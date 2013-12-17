<?php


/**
 * Base static class for performing query and update operations on the 'synonyms' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseSynonymsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'synonyms';

    /** the related Propel class for this table */
    const OM_CLASS = 'Synonyms';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SynonymsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 44;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 44;

    /** the column name for the SynCode field */
    const SYNCODE = 'synonyms.SynCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'synonyms.SpecCode';

    /** the column name for the SynGenus field */
    const SYNGENUS = 'synonyms.SynGenus';

    /** the column name for the SynSpecies field */
    const SYNSPECIES = 'synonyms.SynSpecies';

    /** the column name for the Author field */
    const AUTHOR = 'synonyms.Author';

    /** the column name for the Year field */
    const YEAR = 'synonyms.Year';

    /** the column name for the SynonymsRef field */
    const SYNONYMSREF = 'synonyms.SynonymsRef';

    /** the column name for the TaxonLevel field */
    const TAXONLEVEL = 'synonyms.TaxonLevel';

    /** the column name for the SyncodeValid field */
    const SYNCODEVALID = 'synonyms.SyncodeValid';

    /** the column name for the LastEpithet field */
    const LASTEPITHET = 'synonyms.LastEpithet';

    /** the column name for the Comment field */
    const COMMENT = 'synonyms.Comment';

    /** the column name for the Etymology field */
    const ETYMOLOGY = 'synonyms.Etymology';

    /** the column name for the Status field */
    const STATUS = 'synonyms.Status';

    /** the column name for the Valid field */
    const VALID = 'synonyms.Valid';

    /** the column name for the ValidTax field */
    const VALIDTAX = 'synonyms.ValidTax';

    /** the column name for the Synonymy field */
    const SYNONYMY = 'synonyms.Synonymy';

    /** the column name for the SynonymyDetail field */
    const SYNONYMYDETAIL = 'synonyms.SynonymyDetail';

    /** the column name for the Combination field */
    const COMBINATION = 'synonyms.Combination';

    /** the column name for the OriginalPub field */
    const ORIGINALPUB = 'synonyms.OriginalPub';

    /** the column name for the Misspelling field */
    const MISSPELLING = 'synonyms.Misspelling';

    /** the column name for the MisspellingDetail field */
    const MISSPELLINGDETAIL = 'synonyms.MisspellingDetail';

    /** the column name for the NounApposition field */
    const NOUNAPPOSITION = 'synonyms.NounApposition';

    /** the column name for the StatusOrder field */
    const STATUSORDER = 'synonyms.StatusOrder';

    /** the column name for the RankSearch field */
    const RANKSEARCH = 'synonyms.RankSearch';

    /** the column name for the CommentTax field */
    const COMMENTTAX = 'synonyms.CommentTax';

    /** the column name for the GSDOriginal field */
    const GSDORIGINAL = 'synonyms.GSDOriginal';

    /** the column name for the GSDStatus field */
    const GSDSTATUS = 'synonyms.GSDStatus';

    /** the column name for the GSDVersionDate field */
    const GSDVERSIONDATE = 'synonyms.GSDVersionDate';

    /** the column name for the GSDExpert field */
    const GSDEXPERT = 'synonyms.GSDExpert';

    /** the column name for the CAS_REF_NO field */
    const CAS_REF_NO = 'synonyms.CAS_REF_NO';

    /** the column name for the CAS_SPC field */
    const CAS_SPC = 'synonyms.CAS_SPC';

    /** the column name for the CoL field */
    const COL = 'synonyms.CoL';

    /** the column name for the CoL_ID field */
    const COL_ID = 'synonyms.CoL_ID';

    /** the column name for the ZooBank_ID field */
    const ZOOBANK_ID = 'synonyms.ZooBank_ID';

    /** the column name for the ION_ID field */
    const ION_ID = 'synonyms.ION_ID';

    /** the column name for the TSN field */
    const TSN = 'synonyms.TSN';

    /** the column name for the WoRMS_ID field */
    const WORMS_ID = 'synonyms.WoRMS_ID';

    /** the column name for the Entered field */
    const ENTERED = 'synonyms.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'synonyms.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'synonyms.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'synonyms.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'synonyms.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'synonyms.DateChecked';

    /** the column name for the TS field */
    const TS = 'synonyms.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Synonyms objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Synonyms[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SynonymsPeer::$fieldNames[SynonymsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Syncode', 'Speccode', 'Syngenus', 'Synspecies', 'Author', 'Year', 'Synonymsref', 'Taxonlevel', 'Syncodevalid', 'Lastepithet', 'Comment', 'Etymology', 'Status', 'Valid', 'Validtax', 'Synonymy', 'Synonymydetail', 'Combination', 'Originalpub', 'Misspelling', 'Misspellingdetail', 'Nounapposition', 'Statusorder', 'Ranksearch', 'Commenttax', 'Gsdoriginal', 'Gsdstatus', 'Gsdversiondate', 'Gsdexpert', 'CasRefNo', 'CasSpc', 'Col', 'ColId', 'ZoobankId', 'IonId', 'Tsn', 'WormsId', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('syncode', 'speccode', 'syngenus', 'synspecies', 'author', 'year', 'synonymsref', 'taxonlevel', 'syncodevalid', 'lastepithet', 'comment', 'etymology', 'status', 'valid', 'validtax', 'synonymy', 'synonymydetail', 'combination', 'originalpub', 'misspelling', 'misspellingdetail', 'nounapposition', 'statusorder', 'ranksearch', 'commenttax', 'gsdoriginal', 'gsdstatus', 'gsdversiondate', 'gsdexpert', 'casRefNo', 'casSpc', 'col', 'colId', 'zoobankId', 'ionId', 'tsn', 'wormsId', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (SynonymsPeer::SYNCODE, SynonymsPeer::SPECCODE, SynonymsPeer::SYNGENUS, SynonymsPeer::SYNSPECIES, SynonymsPeer::AUTHOR, SynonymsPeer::YEAR, SynonymsPeer::SYNONYMSREF, SynonymsPeer::TAXONLEVEL, SynonymsPeer::SYNCODEVALID, SynonymsPeer::LASTEPITHET, SynonymsPeer::COMMENT, SynonymsPeer::ETYMOLOGY, SynonymsPeer::STATUS, SynonymsPeer::VALID, SynonymsPeer::VALIDTAX, SynonymsPeer::SYNONYMY, SynonymsPeer::SYNONYMYDETAIL, SynonymsPeer::COMBINATION, SynonymsPeer::ORIGINALPUB, SynonymsPeer::MISSPELLING, SynonymsPeer::MISSPELLINGDETAIL, SynonymsPeer::NOUNAPPOSITION, SynonymsPeer::STATUSORDER, SynonymsPeer::RANKSEARCH, SynonymsPeer::COMMENTTAX, SynonymsPeer::GSDORIGINAL, SynonymsPeer::GSDSTATUS, SynonymsPeer::GSDVERSIONDATE, SynonymsPeer::GSDEXPERT, SynonymsPeer::CAS_REF_NO, SynonymsPeer::CAS_SPC, SynonymsPeer::COL, SynonymsPeer::COL_ID, SynonymsPeer::ZOOBANK_ID, SynonymsPeer::ION_ID, SynonymsPeer::TSN, SynonymsPeer::WORMS_ID, SynonymsPeer::ENTERED, SynonymsPeer::DATEENTERED, SynonymsPeer::MODIFIED, SynonymsPeer::DATEMODIFIED, SynonymsPeer::EXPERT, SynonymsPeer::DATECHECKED, SynonymsPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SYNCODE', 'SPECCODE', 'SYNGENUS', 'SYNSPECIES', 'AUTHOR', 'YEAR', 'SYNONYMSREF', 'TAXONLEVEL', 'SYNCODEVALID', 'LASTEPITHET', 'COMMENT', 'ETYMOLOGY', 'STATUS', 'VALID', 'VALIDTAX', 'SYNONYMY', 'SYNONYMYDETAIL', 'COMBINATION', 'ORIGINALPUB', 'MISSPELLING', 'MISSPELLINGDETAIL', 'NOUNAPPOSITION', 'STATUSORDER', 'RANKSEARCH', 'COMMENTTAX', 'GSDORIGINAL', 'GSDSTATUS', 'GSDVERSIONDATE', 'GSDEXPERT', 'CAS_REF_NO', 'CAS_SPC', 'COL', 'COL_ID', 'ZOOBANK_ID', 'ION_ID', 'TSN', 'WORMS_ID', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('SynCode', 'SpecCode', 'SynGenus', 'SynSpecies', 'Author', 'Year', 'SynonymsRef', 'TaxonLevel', 'SyncodeValid', 'LastEpithet', 'Comment', 'Etymology', 'Status', 'Valid', 'ValidTax', 'Synonymy', 'SynonymyDetail', 'Combination', 'OriginalPub', 'Misspelling', 'MisspellingDetail', 'NounApposition', 'StatusOrder', 'RankSearch', 'CommentTax', 'GSDOriginal', 'GSDStatus', 'GSDVersionDate', 'GSDExpert', 'CAS_REF_NO', 'CAS_SPC', 'CoL', 'CoL_ID', 'ZooBank_ID', 'ION_ID', 'TSN', 'WoRMS_ID', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SynonymsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Syncode' => 0, 'Speccode' => 1, 'Syngenus' => 2, 'Synspecies' => 3, 'Author' => 4, 'Year' => 5, 'Synonymsref' => 6, 'Taxonlevel' => 7, 'Syncodevalid' => 8, 'Lastepithet' => 9, 'Comment' => 10, 'Etymology' => 11, 'Status' => 12, 'Valid' => 13, 'Validtax' => 14, 'Synonymy' => 15, 'Synonymydetail' => 16, 'Combination' => 17, 'Originalpub' => 18, 'Misspelling' => 19, 'Misspellingdetail' => 20, 'Nounapposition' => 21, 'Statusorder' => 22, 'Ranksearch' => 23, 'Commenttax' => 24, 'Gsdoriginal' => 25, 'Gsdstatus' => 26, 'Gsdversiondate' => 27, 'Gsdexpert' => 28, 'CasRefNo' => 29, 'CasSpc' => 30, 'Col' => 31, 'ColId' => 32, 'ZoobankId' => 33, 'IonId' => 34, 'Tsn' => 35, 'WormsId' => 36, 'Entered' => 37, 'Dateentered' => 38, 'Modified' => 39, 'Datemodified' => 40, 'Expert' => 41, 'Datechecked' => 42, 'Ts' => 43, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('syncode' => 0, 'speccode' => 1, 'syngenus' => 2, 'synspecies' => 3, 'author' => 4, 'year' => 5, 'synonymsref' => 6, 'taxonlevel' => 7, 'syncodevalid' => 8, 'lastepithet' => 9, 'comment' => 10, 'etymology' => 11, 'status' => 12, 'valid' => 13, 'validtax' => 14, 'synonymy' => 15, 'synonymydetail' => 16, 'combination' => 17, 'originalpub' => 18, 'misspelling' => 19, 'misspellingdetail' => 20, 'nounapposition' => 21, 'statusorder' => 22, 'ranksearch' => 23, 'commenttax' => 24, 'gsdoriginal' => 25, 'gsdstatus' => 26, 'gsdversiondate' => 27, 'gsdexpert' => 28, 'casRefNo' => 29, 'casSpc' => 30, 'col' => 31, 'colId' => 32, 'zoobankId' => 33, 'ionId' => 34, 'tsn' => 35, 'wormsId' => 36, 'entered' => 37, 'dateentered' => 38, 'modified' => 39, 'datemodified' => 40, 'expert' => 41, 'datechecked' => 42, 'ts' => 43, ),
        BasePeer::TYPE_COLNAME => array (SynonymsPeer::SYNCODE => 0, SynonymsPeer::SPECCODE => 1, SynonymsPeer::SYNGENUS => 2, SynonymsPeer::SYNSPECIES => 3, SynonymsPeer::AUTHOR => 4, SynonymsPeer::YEAR => 5, SynonymsPeer::SYNONYMSREF => 6, SynonymsPeer::TAXONLEVEL => 7, SynonymsPeer::SYNCODEVALID => 8, SynonymsPeer::LASTEPITHET => 9, SynonymsPeer::COMMENT => 10, SynonymsPeer::ETYMOLOGY => 11, SynonymsPeer::STATUS => 12, SynonymsPeer::VALID => 13, SynonymsPeer::VALIDTAX => 14, SynonymsPeer::SYNONYMY => 15, SynonymsPeer::SYNONYMYDETAIL => 16, SynonymsPeer::COMBINATION => 17, SynonymsPeer::ORIGINALPUB => 18, SynonymsPeer::MISSPELLING => 19, SynonymsPeer::MISSPELLINGDETAIL => 20, SynonymsPeer::NOUNAPPOSITION => 21, SynonymsPeer::STATUSORDER => 22, SynonymsPeer::RANKSEARCH => 23, SynonymsPeer::COMMENTTAX => 24, SynonymsPeer::GSDORIGINAL => 25, SynonymsPeer::GSDSTATUS => 26, SynonymsPeer::GSDVERSIONDATE => 27, SynonymsPeer::GSDEXPERT => 28, SynonymsPeer::CAS_REF_NO => 29, SynonymsPeer::CAS_SPC => 30, SynonymsPeer::COL => 31, SynonymsPeer::COL_ID => 32, SynonymsPeer::ZOOBANK_ID => 33, SynonymsPeer::ION_ID => 34, SynonymsPeer::TSN => 35, SynonymsPeer::WORMS_ID => 36, SynonymsPeer::ENTERED => 37, SynonymsPeer::DATEENTERED => 38, SynonymsPeer::MODIFIED => 39, SynonymsPeer::DATEMODIFIED => 40, SynonymsPeer::EXPERT => 41, SynonymsPeer::DATECHECKED => 42, SynonymsPeer::TS => 43, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SYNCODE' => 0, 'SPECCODE' => 1, 'SYNGENUS' => 2, 'SYNSPECIES' => 3, 'AUTHOR' => 4, 'YEAR' => 5, 'SYNONYMSREF' => 6, 'TAXONLEVEL' => 7, 'SYNCODEVALID' => 8, 'LASTEPITHET' => 9, 'COMMENT' => 10, 'ETYMOLOGY' => 11, 'STATUS' => 12, 'VALID' => 13, 'VALIDTAX' => 14, 'SYNONYMY' => 15, 'SYNONYMYDETAIL' => 16, 'COMBINATION' => 17, 'ORIGINALPUB' => 18, 'MISSPELLING' => 19, 'MISSPELLINGDETAIL' => 20, 'NOUNAPPOSITION' => 21, 'STATUSORDER' => 22, 'RANKSEARCH' => 23, 'COMMENTTAX' => 24, 'GSDORIGINAL' => 25, 'GSDSTATUS' => 26, 'GSDVERSIONDATE' => 27, 'GSDEXPERT' => 28, 'CAS_REF_NO' => 29, 'CAS_SPC' => 30, 'COL' => 31, 'COL_ID' => 32, 'ZOOBANK_ID' => 33, 'ION_ID' => 34, 'TSN' => 35, 'WORMS_ID' => 36, 'ENTERED' => 37, 'DATEENTERED' => 38, 'MODIFIED' => 39, 'DATEMODIFIED' => 40, 'EXPERT' => 41, 'DATECHECKED' => 42, 'TS' => 43, ),
        BasePeer::TYPE_FIELDNAME => array ('SynCode' => 0, 'SpecCode' => 1, 'SynGenus' => 2, 'SynSpecies' => 3, 'Author' => 4, 'Year' => 5, 'SynonymsRef' => 6, 'TaxonLevel' => 7, 'SyncodeValid' => 8, 'LastEpithet' => 9, 'Comment' => 10, 'Etymology' => 11, 'Status' => 12, 'Valid' => 13, 'ValidTax' => 14, 'Synonymy' => 15, 'SynonymyDetail' => 16, 'Combination' => 17, 'OriginalPub' => 18, 'Misspelling' => 19, 'MisspellingDetail' => 20, 'NounApposition' => 21, 'StatusOrder' => 22, 'RankSearch' => 23, 'CommentTax' => 24, 'GSDOriginal' => 25, 'GSDStatus' => 26, 'GSDVersionDate' => 27, 'GSDExpert' => 28, 'CAS_REF_NO' => 29, 'CAS_SPC' => 30, 'CoL' => 31, 'CoL_ID' => 32, 'ZooBank_ID' => 33, 'ION_ID' => 34, 'TSN' => 35, 'WoRMS_ID' => 36, 'Entered' => 37, 'DateEntered' => 38, 'Modified' => 39, 'DateModified' => 40, 'Expert' => 41, 'DateChecked' => 42, 'TS' => 43, ),
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
        $toNames = SynonymsPeer::getFieldNames($toType);
        $key = isset(SynonymsPeer::$fieldKeys[$fromType][$name]) ? SynonymsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SynonymsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SynonymsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SynonymsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SynonymsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SynonymsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SynonymsPeer::SYNCODE);
            $criteria->addSelectColumn(SynonymsPeer::SPECCODE);
            $criteria->addSelectColumn(SynonymsPeer::SYNGENUS);
            $criteria->addSelectColumn(SynonymsPeer::SYNSPECIES);
            $criteria->addSelectColumn(SynonymsPeer::AUTHOR);
            $criteria->addSelectColumn(SynonymsPeer::YEAR);
            $criteria->addSelectColumn(SynonymsPeer::SYNONYMSREF);
            $criteria->addSelectColumn(SynonymsPeer::TAXONLEVEL);
            $criteria->addSelectColumn(SynonymsPeer::SYNCODEVALID);
            $criteria->addSelectColumn(SynonymsPeer::LASTEPITHET);
            $criteria->addSelectColumn(SynonymsPeer::COMMENT);
            $criteria->addSelectColumn(SynonymsPeer::ETYMOLOGY);
            $criteria->addSelectColumn(SynonymsPeer::STATUS);
            $criteria->addSelectColumn(SynonymsPeer::VALID);
            $criteria->addSelectColumn(SynonymsPeer::VALIDTAX);
            $criteria->addSelectColumn(SynonymsPeer::SYNONYMY);
            $criteria->addSelectColumn(SynonymsPeer::SYNONYMYDETAIL);
            $criteria->addSelectColumn(SynonymsPeer::COMBINATION);
            $criteria->addSelectColumn(SynonymsPeer::ORIGINALPUB);
            $criteria->addSelectColumn(SynonymsPeer::MISSPELLING);
            $criteria->addSelectColumn(SynonymsPeer::MISSPELLINGDETAIL);
            $criteria->addSelectColumn(SynonymsPeer::NOUNAPPOSITION);
            $criteria->addSelectColumn(SynonymsPeer::STATUSORDER);
            $criteria->addSelectColumn(SynonymsPeer::RANKSEARCH);
            $criteria->addSelectColumn(SynonymsPeer::COMMENTTAX);
            $criteria->addSelectColumn(SynonymsPeer::GSDORIGINAL);
            $criteria->addSelectColumn(SynonymsPeer::GSDSTATUS);
            $criteria->addSelectColumn(SynonymsPeer::GSDVERSIONDATE);
            $criteria->addSelectColumn(SynonymsPeer::GSDEXPERT);
            $criteria->addSelectColumn(SynonymsPeer::CAS_REF_NO);
            $criteria->addSelectColumn(SynonymsPeer::CAS_SPC);
            $criteria->addSelectColumn(SynonymsPeer::COL);
            $criteria->addSelectColumn(SynonymsPeer::COL_ID);
            $criteria->addSelectColumn(SynonymsPeer::ZOOBANK_ID);
            $criteria->addSelectColumn(SynonymsPeer::ION_ID);
            $criteria->addSelectColumn(SynonymsPeer::TSN);
            $criteria->addSelectColumn(SynonymsPeer::WORMS_ID);
            $criteria->addSelectColumn(SynonymsPeer::ENTERED);
            $criteria->addSelectColumn(SynonymsPeer::DATEENTERED);
            $criteria->addSelectColumn(SynonymsPeer::MODIFIED);
            $criteria->addSelectColumn(SynonymsPeer::DATEMODIFIED);
            $criteria->addSelectColumn(SynonymsPeer::EXPERT);
            $criteria->addSelectColumn(SynonymsPeer::DATECHECKED);
            $criteria->addSelectColumn(SynonymsPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.SynCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.SynGenus');
            $criteria->addSelectColumn($alias . '.SynSpecies');
            $criteria->addSelectColumn($alias . '.Author');
            $criteria->addSelectColumn($alias . '.Year');
            $criteria->addSelectColumn($alias . '.SynonymsRef');
            $criteria->addSelectColumn($alias . '.TaxonLevel');
            $criteria->addSelectColumn($alias . '.SyncodeValid');
            $criteria->addSelectColumn($alias . '.LastEpithet');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.Etymology');
            $criteria->addSelectColumn($alias . '.Status');
            $criteria->addSelectColumn($alias . '.Valid');
            $criteria->addSelectColumn($alias . '.ValidTax');
            $criteria->addSelectColumn($alias . '.Synonymy');
            $criteria->addSelectColumn($alias . '.SynonymyDetail');
            $criteria->addSelectColumn($alias . '.Combination');
            $criteria->addSelectColumn($alias . '.OriginalPub');
            $criteria->addSelectColumn($alias . '.Misspelling');
            $criteria->addSelectColumn($alias . '.MisspellingDetail');
            $criteria->addSelectColumn($alias . '.NounApposition');
            $criteria->addSelectColumn($alias . '.StatusOrder');
            $criteria->addSelectColumn($alias . '.RankSearch');
            $criteria->addSelectColumn($alias . '.CommentTax');
            $criteria->addSelectColumn($alias . '.GSDOriginal');
            $criteria->addSelectColumn($alias . '.GSDStatus');
            $criteria->addSelectColumn($alias . '.GSDVersionDate');
            $criteria->addSelectColumn($alias . '.GSDExpert');
            $criteria->addSelectColumn($alias . '.CAS_REF_NO');
            $criteria->addSelectColumn($alias . '.CAS_SPC');
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
        $criteria->setPrimaryTableName(SynonymsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SynonymsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SynonymsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SynonymsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Synonyms
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SynonymsPeer::doSelect($critcopy, $con);
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
        return SynonymsPeer::populateObjects(SynonymsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SynonymsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SynonymsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SynonymsPeer::DATABASE_NAME);

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
     * @param Synonyms $obj A Synonyms object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getSyncode(), (string) $obj->getSpeccode(), (string) $obj->getSyngenus(), (string) $obj->getSynspecies(), (string) $obj->getAuthor(), (string) $obj->getSynonymy(), (string) $obj->getCombination(), (string) $obj->getMisspelling()));
            } // if key === null
            SynonymsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Synonyms object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Synonyms) {
                $key = serialize(array((string) $value->getSyncode(), (string) $value->getSpeccode(), (string) $value->getSyngenus(), (string) $value->getSynspecies(), (string) $value->getAuthor(), (string) $value->getSynonymy(), (string) $value->getCombination(), (string) $value->getMisspelling()));
            } elseif (is_array($value) && count($value) === 8) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4], (string) $value[5], (string) $value[6], (string) $value[7]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Synonyms object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SynonymsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Synonyms Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SynonymsPeer::$instances[$key])) {
                return SynonymsPeer::$instances[$key];
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
        foreach (SynonymsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SynonymsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to synonyms
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 4] === null && $row[$startcol + 15] === null && $row[$startcol + 17] === null && $row[$startcol + 19] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 4], (string) $row[$startcol + 15], (string) $row[$startcol + 17], (string) $row[$startcol + 19]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 4], (string) $row[$startcol + 15], (string) $row[$startcol + 17], (int) $row[$startcol + 19]);
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
        $cls = SynonymsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SynonymsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SynonymsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SynonymsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Synonyms object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SynonymsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SynonymsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SynonymsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SynonymsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SynonymsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(SynonymsPeer::DATABASE_NAME)->getTable(SynonymsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSynonymsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSynonymsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SynonymsTableMap());
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
        return SynonymsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Synonyms or Criteria object.
     *
     * @param      mixed $values Criteria or Synonyms object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SynonymsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Synonyms object
        }

        if ($criteria->containsKey(SynonymsPeer::SYNCODE) && $criteria->keyContainsValue(SynonymsPeer::SYNCODE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SynonymsPeer::SYNCODE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(SynonymsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Synonyms or Criteria object.
     *
     * @param      mixed $values Criteria or Synonyms object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SynonymsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SynonymsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SynonymsPeer::SYNCODE);
            $value = $criteria->remove(SynonymsPeer::SYNCODE);
            if ($value) {
                $selectCriteria->add(SynonymsPeer::SYNCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SynonymsPeer::SPECCODE);
            $value = $criteria->remove(SynonymsPeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(SynonymsPeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SynonymsPeer::SYNGENUS);
            $value = $criteria->remove(SynonymsPeer::SYNGENUS);
            if ($value) {
                $selectCriteria->add(SynonymsPeer::SYNGENUS, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SynonymsPeer::SYNSPECIES);
            $value = $criteria->remove(SynonymsPeer::SYNSPECIES);
            if ($value) {
                $selectCriteria->add(SynonymsPeer::SYNSPECIES, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SynonymsPeer::AUTHOR);
            $value = $criteria->remove(SynonymsPeer::AUTHOR);
            if ($value) {
                $selectCriteria->add(SynonymsPeer::AUTHOR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SynonymsPeer::SYNONYMY);
            $value = $criteria->remove(SynonymsPeer::SYNONYMY);
            if ($value) {
                $selectCriteria->add(SynonymsPeer::SYNONYMY, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SynonymsPeer::COMBINATION);
            $value = $criteria->remove(SynonymsPeer::COMBINATION);
            if ($value) {
                $selectCriteria->add(SynonymsPeer::COMBINATION, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SynonymsPeer::MISSPELLING);
            $value = $criteria->remove(SynonymsPeer::MISSPELLING);
            if ($value) {
                $selectCriteria->add(SynonymsPeer::MISSPELLING, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SynonymsPeer::TABLE_NAME);
            }

        } else { // $values is Synonyms object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SynonymsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the synonyms table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SynonymsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SynonymsPeer::TABLE_NAME, $con, SynonymsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SynonymsPeer::clearInstancePool();
            SynonymsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Synonyms or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Synonyms object or primary key or array of primary keys
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
            $con = Propel::getConnection(SynonymsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SynonymsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Synonyms) { // it's a model object
            // invalidate the cache for this single object
            SynonymsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SynonymsPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SynonymsPeer::SYNCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SynonymsPeer::SPECCODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(SynonymsPeer::SYNGENUS, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(SynonymsPeer::SYNSPECIES, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(SynonymsPeer::AUTHOR, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(SynonymsPeer::SYNONYMY, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(SynonymsPeer::COMBINATION, $value[6]));
                $criterion->addAnd($criteria->getNewCriterion(SynonymsPeer::MISSPELLING, $value[7]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                SynonymsPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SynonymsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SynonymsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Synonyms object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Synonyms $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SynonymsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SynonymsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SynonymsPeer::DATABASE_NAME, SynonymsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $syncode
     * @param   int $speccode
     * @param   string $syngenus
     * @param   string $synspecies
     * @param   string $author
     * @param   string $synonymy
     * @param   string $combination
     * @param   int $misspelling
     * @param      PropelPDO $con
     * @return Synonyms
     */
    public static function retrieveByPK($syncode, $speccode, $syngenus, $synspecies, $author, $synonymy, $combination, $misspelling, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $syncode, (string) $speccode, (string) $syngenus, (string) $synspecies, (string) $author, (string) $synonymy, (string) $combination, (string) $misspelling));
         if (null !== ($obj = SynonymsPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SynonymsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(SynonymsPeer::DATABASE_NAME);
        $criteria->add(SynonymsPeer::SYNCODE, $syncode);
        $criteria->add(SynonymsPeer::SPECCODE, $speccode);
        $criteria->add(SynonymsPeer::SYNGENUS, $syngenus);
        $criteria->add(SynonymsPeer::SYNSPECIES, $synspecies);
        $criteria->add(SynonymsPeer::AUTHOR, $author);
        $criteria->add(SynonymsPeer::SYNONYMY, $synonymy);
        $criteria->add(SynonymsPeer::COMBINATION, $combination);
        $criteria->add(SynonymsPeer::MISSPELLING, $misspelling);
        $v = SynonymsPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseSynonymsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSynonymsPeer::buildTableMap();

