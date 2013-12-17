<?php


/**
 * Base static class for performing query and update operations on the 'comnames' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseComnamesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'comnames';

    /** the related Propel class for this table */
    const OM_CLASS = 'Comnames';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ComnamesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 34;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 34;

    /** the column name for the autoctr field */
    const AUTOCTR = 'comnames.autoctr';

    /** the column name for the ComName field */
    const COMNAME = 'comnames.ComName';

    /** the column name for the Transliteration field */
    const TRANSLITERATION = 'comnames.Transliteration';

    /** the column name for the StockCode field */
    const STOCKCODE = 'comnames.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'comnames.SpecCode';

    /** the column name for the C_Code field */
    const C_CODE = 'comnames.C_Code';

    /** the column name for the Language field */
    const LANGUAGE = 'comnames.Language';

    /** the column name for the Script field */
    const SCRIPT = 'comnames.Script';

    /** the column name for the UnicodeText field */
    const UNICODETEXT = 'comnames.UnicodeText';

    /** the column name for the NameType field */
    const NAMETYPE = 'comnames.NameType';

    /** the column name for the PreferredName field */
    const PREFERREDNAME = 'comnames.PreferredName';

    /** the column name for the TradeName field */
    const TRADENAME = 'comnames.TradeName';

    /** the column name for the TradeNameRef field */
    const TRADENAMEREF = 'comnames.TradeNameRef';

    /** the column name for the ComNamesRefNo field */
    const COMNAMESREFNO = 'comnames.ComNamesRefNo';

    /** the column name for the Misspelling field */
    const MISSPELLING = 'comnames.Misspelling';

    /** the column name for the Size field */
    const SIZE = 'comnames.Size';

    /** the column name for the Sex field */
    const SEX = 'comnames.Sex';

    /** the column name for the Language2 field */
    const LANGUAGE2 = 'comnames.Language2';

    /** the column name for the Locality2 field */
    const LOCALITY2 = 'comnames.Locality2';

    /** the column name for the Rank field */
    const RANK = 'comnames.Rank';

    /** the column name for the Remarks field */
    const REMARKS = 'comnames.Remarks';

    /** the column name for the SecondWord field */
    const SECONDWORD = 'comnames.SecondWord';

    /** the column name for the ThirdWord field */
    const THIRDWORD = 'comnames.ThirdWord';

    /** the column name for the FourthWord field */
    const FOURTHWORD = 'comnames.FourthWord';

    /** the column name for the Entered field */
    const ENTERED = 'comnames.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'comnames.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'comnames.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'comnames.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'comnames.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'comnames.DateChecked';

    /** the column name for the Core field */
    const CORE = 'comnames.Core';

    /** the column name for the modifier1 field */
    const MODIFIER1 = 'comnames.modifier1';

    /** the column name for the modifier2 field */
    const MODIFIER2 = 'comnames.modifier2';

    /** the column name for the CLOFFSCA field */
    const CLOFFSCA = 'comnames.CLOFFSCA';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Comnames objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Comnames[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ComnamesPeer::$fieldNames[ComnamesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Comname', 'Transliteration', 'Stockcode', 'Speccode', 'CCode', 'Language', 'Script', 'Unicodetext', 'Nametype', 'Preferredname', 'Tradename', 'Tradenameref', 'Comnamesrefno', 'Misspelling', 'Size', 'Sex', 'Language2', 'Locality2', 'Rank', 'Remarks', 'Secondword', 'Thirdword', 'Fourthword', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Core', 'Modifier1', 'Modifier2', 'Cloffsca', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'comname', 'transliteration', 'stockcode', 'speccode', 'cCode', 'language', 'script', 'unicodetext', 'nametype', 'preferredname', 'tradename', 'tradenameref', 'comnamesrefno', 'misspelling', 'size', 'sex', 'language2', 'locality2', 'rank', 'remarks', 'secondword', 'thirdword', 'fourthword', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'core', 'modifier1', 'modifier2', 'cloffsca', ),
        BasePeer::TYPE_COLNAME => array (ComnamesPeer::AUTOCTR, ComnamesPeer::COMNAME, ComnamesPeer::TRANSLITERATION, ComnamesPeer::STOCKCODE, ComnamesPeer::SPECCODE, ComnamesPeer::C_CODE, ComnamesPeer::LANGUAGE, ComnamesPeer::SCRIPT, ComnamesPeer::UNICODETEXT, ComnamesPeer::NAMETYPE, ComnamesPeer::PREFERREDNAME, ComnamesPeer::TRADENAME, ComnamesPeer::TRADENAMEREF, ComnamesPeer::COMNAMESREFNO, ComnamesPeer::MISSPELLING, ComnamesPeer::SIZE, ComnamesPeer::SEX, ComnamesPeer::LANGUAGE2, ComnamesPeer::LOCALITY2, ComnamesPeer::RANK, ComnamesPeer::REMARKS, ComnamesPeer::SECONDWORD, ComnamesPeer::THIRDWORD, ComnamesPeer::FOURTHWORD, ComnamesPeer::ENTERED, ComnamesPeer::DATEENTERED, ComnamesPeer::MODIFIED, ComnamesPeer::DATEMODIFIED, ComnamesPeer::EXPERT, ComnamesPeer::DATECHECKED, ComnamesPeer::CORE, ComnamesPeer::MODIFIER1, ComnamesPeer::MODIFIER2, ComnamesPeer::CLOFFSCA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'COMNAME', 'TRANSLITERATION', 'STOCKCODE', 'SPECCODE', 'C_CODE', 'LANGUAGE', 'SCRIPT', 'UNICODETEXT', 'NAMETYPE', 'PREFERREDNAME', 'TRADENAME', 'TRADENAMEREF', 'COMNAMESREFNO', 'MISSPELLING', 'SIZE', 'SEX', 'LANGUAGE2', 'LOCALITY2', 'RANK', 'REMARKS', 'SECONDWORD', 'THIRDWORD', 'FOURTHWORD', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'CORE', 'MODIFIER1', 'MODIFIER2', 'CLOFFSCA', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'ComName', 'Transliteration', 'StockCode', 'SpecCode', 'C_Code', 'Language', 'Script', 'UnicodeText', 'NameType', 'PreferredName', 'TradeName', 'TradeNameRef', 'ComNamesRefNo', 'Misspelling', 'Size', 'Sex', 'Language2', 'Locality2', 'Rank', 'Remarks', 'SecondWord', 'ThirdWord', 'FourthWord', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Core', 'modifier1', 'modifier2', 'CLOFFSCA', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ComnamesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Comname' => 1, 'Transliteration' => 2, 'Stockcode' => 3, 'Speccode' => 4, 'CCode' => 5, 'Language' => 6, 'Script' => 7, 'Unicodetext' => 8, 'Nametype' => 9, 'Preferredname' => 10, 'Tradename' => 11, 'Tradenameref' => 12, 'Comnamesrefno' => 13, 'Misspelling' => 14, 'Size' => 15, 'Sex' => 16, 'Language2' => 17, 'Locality2' => 18, 'Rank' => 19, 'Remarks' => 20, 'Secondword' => 21, 'Thirdword' => 22, 'Fourthword' => 23, 'Entered' => 24, 'Dateentered' => 25, 'Modified' => 26, 'Datemodified' => 27, 'Expert' => 28, 'Datechecked' => 29, 'Core' => 30, 'Modifier1' => 31, 'Modifier2' => 32, 'Cloffsca' => 33, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'comname' => 1, 'transliteration' => 2, 'stockcode' => 3, 'speccode' => 4, 'cCode' => 5, 'language' => 6, 'script' => 7, 'unicodetext' => 8, 'nametype' => 9, 'preferredname' => 10, 'tradename' => 11, 'tradenameref' => 12, 'comnamesrefno' => 13, 'misspelling' => 14, 'size' => 15, 'sex' => 16, 'language2' => 17, 'locality2' => 18, 'rank' => 19, 'remarks' => 20, 'secondword' => 21, 'thirdword' => 22, 'fourthword' => 23, 'entered' => 24, 'dateentered' => 25, 'modified' => 26, 'datemodified' => 27, 'expert' => 28, 'datechecked' => 29, 'core' => 30, 'modifier1' => 31, 'modifier2' => 32, 'cloffsca' => 33, ),
        BasePeer::TYPE_COLNAME => array (ComnamesPeer::AUTOCTR => 0, ComnamesPeer::COMNAME => 1, ComnamesPeer::TRANSLITERATION => 2, ComnamesPeer::STOCKCODE => 3, ComnamesPeer::SPECCODE => 4, ComnamesPeer::C_CODE => 5, ComnamesPeer::LANGUAGE => 6, ComnamesPeer::SCRIPT => 7, ComnamesPeer::UNICODETEXT => 8, ComnamesPeer::NAMETYPE => 9, ComnamesPeer::PREFERREDNAME => 10, ComnamesPeer::TRADENAME => 11, ComnamesPeer::TRADENAMEREF => 12, ComnamesPeer::COMNAMESREFNO => 13, ComnamesPeer::MISSPELLING => 14, ComnamesPeer::SIZE => 15, ComnamesPeer::SEX => 16, ComnamesPeer::LANGUAGE2 => 17, ComnamesPeer::LOCALITY2 => 18, ComnamesPeer::RANK => 19, ComnamesPeer::REMARKS => 20, ComnamesPeer::SECONDWORD => 21, ComnamesPeer::THIRDWORD => 22, ComnamesPeer::FOURTHWORD => 23, ComnamesPeer::ENTERED => 24, ComnamesPeer::DATEENTERED => 25, ComnamesPeer::MODIFIED => 26, ComnamesPeer::DATEMODIFIED => 27, ComnamesPeer::EXPERT => 28, ComnamesPeer::DATECHECKED => 29, ComnamesPeer::CORE => 30, ComnamesPeer::MODIFIER1 => 31, ComnamesPeer::MODIFIER2 => 32, ComnamesPeer::CLOFFSCA => 33, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'COMNAME' => 1, 'TRANSLITERATION' => 2, 'STOCKCODE' => 3, 'SPECCODE' => 4, 'C_CODE' => 5, 'LANGUAGE' => 6, 'SCRIPT' => 7, 'UNICODETEXT' => 8, 'NAMETYPE' => 9, 'PREFERREDNAME' => 10, 'TRADENAME' => 11, 'TRADENAMEREF' => 12, 'COMNAMESREFNO' => 13, 'MISSPELLING' => 14, 'SIZE' => 15, 'SEX' => 16, 'LANGUAGE2' => 17, 'LOCALITY2' => 18, 'RANK' => 19, 'REMARKS' => 20, 'SECONDWORD' => 21, 'THIRDWORD' => 22, 'FOURTHWORD' => 23, 'ENTERED' => 24, 'DATEENTERED' => 25, 'MODIFIED' => 26, 'DATEMODIFIED' => 27, 'EXPERT' => 28, 'DATECHECKED' => 29, 'CORE' => 30, 'MODIFIER1' => 31, 'MODIFIER2' => 32, 'CLOFFSCA' => 33, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'ComName' => 1, 'Transliteration' => 2, 'StockCode' => 3, 'SpecCode' => 4, 'C_Code' => 5, 'Language' => 6, 'Script' => 7, 'UnicodeText' => 8, 'NameType' => 9, 'PreferredName' => 10, 'TradeName' => 11, 'TradeNameRef' => 12, 'ComNamesRefNo' => 13, 'Misspelling' => 14, 'Size' => 15, 'Sex' => 16, 'Language2' => 17, 'Locality2' => 18, 'Rank' => 19, 'Remarks' => 20, 'SecondWord' => 21, 'ThirdWord' => 22, 'FourthWord' => 23, 'Entered' => 24, 'DateEntered' => 25, 'Modified' => 26, 'DateModified' => 27, 'Expert' => 28, 'DateChecked' => 29, 'Core' => 30, 'modifier1' => 31, 'modifier2' => 32, 'CLOFFSCA' => 33, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
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
        $toNames = ComnamesPeer::getFieldNames($toType);
        $key = isset(ComnamesPeer::$fieldKeys[$fromType][$name]) ? ComnamesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ComnamesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ComnamesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ComnamesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ComnamesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ComnamesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ComnamesPeer::AUTOCTR);
            $criteria->addSelectColumn(ComnamesPeer::COMNAME);
            $criteria->addSelectColumn(ComnamesPeer::TRANSLITERATION);
            $criteria->addSelectColumn(ComnamesPeer::STOCKCODE);
            $criteria->addSelectColumn(ComnamesPeer::SPECCODE);
            $criteria->addSelectColumn(ComnamesPeer::C_CODE);
            $criteria->addSelectColumn(ComnamesPeer::LANGUAGE);
            $criteria->addSelectColumn(ComnamesPeer::SCRIPT);
            $criteria->addSelectColumn(ComnamesPeer::UNICODETEXT);
            $criteria->addSelectColumn(ComnamesPeer::NAMETYPE);
            $criteria->addSelectColumn(ComnamesPeer::PREFERREDNAME);
            $criteria->addSelectColumn(ComnamesPeer::TRADENAME);
            $criteria->addSelectColumn(ComnamesPeer::TRADENAMEREF);
            $criteria->addSelectColumn(ComnamesPeer::COMNAMESREFNO);
            $criteria->addSelectColumn(ComnamesPeer::MISSPELLING);
            $criteria->addSelectColumn(ComnamesPeer::SIZE);
            $criteria->addSelectColumn(ComnamesPeer::SEX);
            $criteria->addSelectColumn(ComnamesPeer::LANGUAGE2);
            $criteria->addSelectColumn(ComnamesPeer::LOCALITY2);
            $criteria->addSelectColumn(ComnamesPeer::RANK);
            $criteria->addSelectColumn(ComnamesPeer::REMARKS);
            $criteria->addSelectColumn(ComnamesPeer::SECONDWORD);
            $criteria->addSelectColumn(ComnamesPeer::THIRDWORD);
            $criteria->addSelectColumn(ComnamesPeer::FOURTHWORD);
            $criteria->addSelectColumn(ComnamesPeer::ENTERED);
            $criteria->addSelectColumn(ComnamesPeer::DATEENTERED);
            $criteria->addSelectColumn(ComnamesPeer::MODIFIED);
            $criteria->addSelectColumn(ComnamesPeer::DATEMODIFIED);
            $criteria->addSelectColumn(ComnamesPeer::EXPERT);
            $criteria->addSelectColumn(ComnamesPeer::DATECHECKED);
            $criteria->addSelectColumn(ComnamesPeer::CORE);
            $criteria->addSelectColumn(ComnamesPeer::MODIFIER1);
            $criteria->addSelectColumn(ComnamesPeer::MODIFIER2);
            $criteria->addSelectColumn(ComnamesPeer::CLOFFSCA);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.ComName');
            $criteria->addSelectColumn($alias . '.Transliteration');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Language');
            $criteria->addSelectColumn($alias . '.Script');
            $criteria->addSelectColumn($alias . '.UnicodeText');
            $criteria->addSelectColumn($alias . '.NameType');
            $criteria->addSelectColumn($alias . '.PreferredName');
            $criteria->addSelectColumn($alias . '.TradeName');
            $criteria->addSelectColumn($alias . '.TradeNameRef');
            $criteria->addSelectColumn($alias . '.ComNamesRefNo');
            $criteria->addSelectColumn($alias . '.Misspelling');
            $criteria->addSelectColumn($alias . '.Size');
            $criteria->addSelectColumn($alias . '.Sex');
            $criteria->addSelectColumn($alias . '.Language2');
            $criteria->addSelectColumn($alias . '.Locality2');
            $criteria->addSelectColumn($alias . '.Rank');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.SecondWord');
            $criteria->addSelectColumn($alias . '.ThirdWord');
            $criteria->addSelectColumn($alias . '.FourthWord');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Core');
            $criteria->addSelectColumn($alias . '.modifier1');
            $criteria->addSelectColumn($alias . '.modifier2');
            $criteria->addSelectColumn($alias . '.CLOFFSCA');
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
        $criteria->setPrimaryTableName(ComnamesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ComnamesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ComnamesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ComnamesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Comnames
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ComnamesPeer::doSelect($critcopy, $con);
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
        return ComnamesPeer::populateObjects(ComnamesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ComnamesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ComnamesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ComnamesPeer::DATABASE_NAME);

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
     * @param Comnames $obj A Comnames object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getAutoctr(), (string) $obj->getComname(), (string) $obj->getStockcode(), (string) $obj->getCCode(), (string) $obj->getLanguage(), (string) $obj->getNametype()));
            } // if key === null
            ComnamesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Comnames object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Comnames) {
                $key = serialize(array((string) $value->getAutoctr(), (string) $value->getComname(), (string) $value->getStockcode(), (string) $value->getCCode(), (string) $value->getLanguage(), (string) $value->getNametype()));
            } elseif (is_array($value) && count($value) === 6) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4], (string) $value[5]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Comnames object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ComnamesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Comnames Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ComnamesPeer::$instances[$key])) {
                return ComnamesPeer::$instances[$key];
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
        foreach (ComnamesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ComnamesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to comnames
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 3] === null && $row[$startcol + 5] === null && $row[$startcol + 6] === null && $row[$startcol + 9] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 3], (string) $row[$startcol + 5], (string) $row[$startcol + 6], (string) $row[$startcol + 9]));
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

        return array((int) $row[$startcol], (string) $row[$startcol + 1], (int) $row[$startcol + 3], (string) $row[$startcol + 5], (string) $row[$startcol + 6], (string) $row[$startcol + 9]);
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
        $cls = ComnamesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ComnamesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ComnamesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ComnamesPeer::addInstanceToPool($obj, $key);
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
     * @return array (Comnames object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ComnamesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ComnamesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ComnamesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ComnamesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ComnamesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(ComnamesPeer::DATABASE_NAME)->getTable(ComnamesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseComnamesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseComnamesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ComnamesTableMap());
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
        return ComnamesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Comnames or Criteria object.
     *
     * @param      mixed $values Criteria or Comnames object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ComnamesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Comnames object
        }


        // Set the correct dbName
        $criteria->setDbName(ComnamesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Comnames or Criteria object.
     *
     * @param      mixed $values Criteria or Comnames object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ComnamesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ComnamesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ComnamesPeer::AUTOCTR);
            $value = $criteria->remove(ComnamesPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(ComnamesPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ComnamesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ComnamesPeer::COMNAME);
            $value = $criteria->remove(ComnamesPeer::COMNAME);
            if ($value) {
                $selectCriteria->add(ComnamesPeer::COMNAME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ComnamesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ComnamesPeer::STOCKCODE);
            $value = $criteria->remove(ComnamesPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(ComnamesPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ComnamesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ComnamesPeer::C_CODE);
            $value = $criteria->remove(ComnamesPeer::C_CODE);
            if ($value) {
                $selectCriteria->add(ComnamesPeer::C_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ComnamesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ComnamesPeer::LANGUAGE);
            $value = $criteria->remove(ComnamesPeer::LANGUAGE);
            if ($value) {
                $selectCriteria->add(ComnamesPeer::LANGUAGE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ComnamesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ComnamesPeer::NAMETYPE);
            $value = $criteria->remove(ComnamesPeer::NAMETYPE);
            if ($value) {
                $selectCriteria->add(ComnamesPeer::NAMETYPE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ComnamesPeer::TABLE_NAME);
            }

        } else { // $values is Comnames object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ComnamesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the comnames table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ComnamesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ComnamesPeer::TABLE_NAME, $con, ComnamesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ComnamesPeer::clearInstancePool();
            ComnamesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Comnames or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Comnames object or primary key or array of primary keys
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
            $con = Propel::getConnection(ComnamesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ComnamesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Comnames) { // it's a model object
            // invalidate the cache for this single object
            ComnamesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ComnamesPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ComnamesPeer::AUTOCTR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ComnamesPeer::COMNAME, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ComnamesPeer::STOCKCODE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(ComnamesPeer::C_CODE, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(ComnamesPeer::LANGUAGE, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(ComnamesPeer::NAMETYPE, $value[5]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                ComnamesPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ComnamesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ComnamesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Comnames object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Comnames $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ComnamesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ComnamesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ComnamesPeer::DATABASE_NAME, ComnamesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $autoctr
     * @param   string $comname
     * @param   int $stockcode
     * @param   string $c_code
     * @param   string $language
     * @param   string $nametype
     * @param      PropelPDO $con
     * @return Comnames
     */
    public static function retrieveByPK($autoctr, $comname, $stockcode, $c_code, $language, $nametype, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $autoctr, (string) $comname, (string) $stockcode, (string) $c_code, (string) $language, (string) $nametype));
         if (null !== ($obj = ComnamesPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ComnamesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(ComnamesPeer::DATABASE_NAME);
        $criteria->add(ComnamesPeer::AUTOCTR, $autoctr);
        $criteria->add(ComnamesPeer::COMNAME, $comname);
        $criteria->add(ComnamesPeer::STOCKCODE, $stockcode);
        $criteria->add(ComnamesPeer::C_CODE, $c_code);
        $criteria->add(ComnamesPeer::LANGUAGE, $language);
        $criteria->add(ComnamesPeer::NAMETYPE, $nametype);
        $v = ComnamesPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseComnamesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseComnamesPeer::buildTableMap();

