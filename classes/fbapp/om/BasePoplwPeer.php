<?php


/**
 * Base static class for performing query and update operations on the 'poplw' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BasePoplwPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'poplw';

    /** the related Propel class for this table */
    const OM_CLASS = 'Poplw';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PoplwTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 36;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 36;

    /** the column name for the AutoCtr field */
    const AUTOCTR = 'poplw.AutoCtr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'poplw.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'poplw.SpecCode';

    /** the column name for the FamCode field */
    const FAMCODE = 'poplw.FamCode';

    /** the column name for the PopLWRef field */
    const POPLWREF = 'poplw.PopLWRef';

    /** the column name for the LengthMin field */
    const LENGTHMIN = 'poplw.LengthMin';

    /** the column name for the LengthMax field */
    const LENGTHMAX = 'poplw.LengthMax';

    /** the column name for the Type field */
    const TYPE = 'poplw.Type';

    /** the column name for the LmaxCompare field */
    const LMAXCOMPARE = 'poplw.LmaxCompare';

    /** the column name for the EsQ field */
    const ESQ = 'poplw.EsQ';

    /** the column name for the Number field */
    const NUMBER = 'poplw.Number';

    /** the column name for the Sex field */
    const SEX = 'poplw.Sex';

    /** the column name for the a field */
    const A = 'poplw.a';

    /** the column name for the aTL field */
    const ATL = 'poplw.aTL';

    /** the column name for the b field */
    const B = 'poplw.b';

    /** the column name for the CoeffDetermination field */
    const COEFFDETERMINATION = 'poplw.CoeffDetermination';

    /** the column name for the SEa field */
    const SEA = 'poplw.SEa';

    /** the column name for the SEb field */
    const SEB = 'poplw.SEb';

    /** the column name for the SDa field */
    const SDA = 'poplw.SDa';

    /** the column name for the SDb field */
    const SDB = 'poplw.SDb';

    /** the column name for the LCLa field */
    const LCLA = 'poplw.LCLa';

    /** the column name for the UCLa field */
    const UCLA = 'poplw.UCLa';

    /** the column name for the LCLb field */
    const LCLB = 'poplw.LCLb';

    /** the column name for the UCLb field */
    const UCLB = 'poplw.UCLb';

    /** the column name for the Method field */
    const METHOD = 'poplw.Method';

    /** the column name for the Locality field */
    const LOCALITY = 'poplw.Locality';

    /** the column name for the DataRef field */
    const DATAREF = 'poplw.DataRef';

    /** the column name for the C_Code field */
    const C_CODE = 'poplw.C_Code';

    /** the column name for the Comment field */
    const COMMENT = 'poplw.Comment';

    /** the column name for the Entered field */
    const ENTERED = 'poplw.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'poplw.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'poplw.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'poplw.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'poplw.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'poplw.DateChecked';

    /** the column name for the TS field */
    const TS = 'poplw.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Poplw objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Poplw[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PoplwPeer::$fieldNames[PoplwPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Famcode', 'Poplwref', 'Lengthmin', 'Lengthmax', 'Type', 'Lmaxcompare', 'Esq', 'Number', 'Sex', 'A', 'Atl', 'B', 'Coeffdetermination', 'Sea', 'Seb', 'Sda', 'Sdb', 'Lcla', 'Ucla', 'Lclb', 'Uclb', 'Method', 'Locality', 'Dataref', 'CCode', 'Comment', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'famcode', 'poplwref', 'lengthmin', 'lengthmax', 'type', 'lmaxcompare', 'esq', 'number', 'sex', 'a', 'atl', 'b', 'coeffdetermination', 'sea', 'seb', 'sda', 'sdb', 'lcla', 'ucla', 'lclb', 'uclb', 'method', 'locality', 'dataref', 'cCode', 'comment', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (PoplwPeer::AUTOCTR, PoplwPeer::STOCKCODE, PoplwPeer::SPECCODE, PoplwPeer::FAMCODE, PoplwPeer::POPLWREF, PoplwPeer::LENGTHMIN, PoplwPeer::LENGTHMAX, PoplwPeer::TYPE, PoplwPeer::LMAXCOMPARE, PoplwPeer::ESQ, PoplwPeer::NUMBER, PoplwPeer::SEX, PoplwPeer::A, PoplwPeer::ATL, PoplwPeer::B, PoplwPeer::COEFFDETERMINATION, PoplwPeer::SEA, PoplwPeer::SEB, PoplwPeer::SDA, PoplwPeer::SDB, PoplwPeer::LCLA, PoplwPeer::UCLA, PoplwPeer::LCLB, PoplwPeer::UCLB, PoplwPeer::METHOD, PoplwPeer::LOCALITY, PoplwPeer::DATAREF, PoplwPeer::C_CODE, PoplwPeer::COMMENT, PoplwPeer::ENTERED, PoplwPeer::DATEENTERED, PoplwPeer::MODIFIED, PoplwPeer::DATEMODIFIED, PoplwPeer::EXPERT, PoplwPeer::DATECHECKED, PoplwPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'FAMCODE', 'POPLWREF', 'LENGTHMIN', 'LENGTHMAX', 'TYPE', 'LMAXCOMPARE', 'ESQ', 'NUMBER', 'SEX', 'A', 'ATL', 'B', 'COEFFDETERMINATION', 'SEA', 'SEB', 'SDA', 'SDB', 'LCLA', 'UCLA', 'LCLB', 'UCLB', 'METHOD', 'LOCALITY', 'DATAREF', 'C_CODE', 'COMMENT', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr', 'StockCode', 'SpecCode', 'FamCode', 'PopLWRef', 'LengthMin', 'LengthMax', 'Type', 'LmaxCompare', 'EsQ', 'Number', 'Sex', 'a', 'aTL', 'b', 'CoeffDetermination', 'SEa', 'SEb', 'SDa', 'SDb', 'LCLa', 'UCLa', 'LCLb', 'UCLb', 'Method', 'Locality', 'DataRef', 'C_Code', 'Comment', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PoplwPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Famcode' => 3, 'Poplwref' => 4, 'Lengthmin' => 5, 'Lengthmax' => 6, 'Type' => 7, 'Lmaxcompare' => 8, 'Esq' => 9, 'Number' => 10, 'Sex' => 11, 'A' => 12, 'Atl' => 13, 'B' => 14, 'Coeffdetermination' => 15, 'Sea' => 16, 'Seb' => 17, 'Sda' => 18, 'Sdb' => 19, 'Lcla' => 20, 'Ucla' => 21, 'Lclb' => 22, 'Uclb' => 23, 'Method' => 24, 'Locality' => 25, 'Dataref' => 26, 'CCode' => 27, 'Comment' => 28, 'Entered' => 29, 'Dateentered' => 30, 'Modified' => 31, 'Datemodified' => 32, 'Expert' => 33, 'Datechecked' => 34, 'Ts' => 35, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'famcode' => 3, 'poplwref' => 4, 'lengthmin' => 5, 'lengthmax' => 6, 'type' => 7, 'lmaxcompare' => 8, 'esq' => 9, 'number' => 10, 'sex' => 11, 'a' => 12, 'atl' => 13, 'b' => 14, 'coeffdetermination' => 15, 'sea' => 16, 'seb' => 17, 'sda' => 18, 'sdb' => 19, 'lcla' => 20, 'ucla' => 21, 'lclb' => 22, 'uclb' => 23, 'method' => 24, 'locality' => 25, 'dataref' => 26, 'cCode' => 27, 'comment' => 28, 'entered' => 29, 'dateentered' => 30, 'modified' => 31, 'datemodified' => 32, 'expert' => 33, 'datechecked' => 34, 'ts' => 35, ),
        BasePeer::TYPE_COLNAME => array (PoplwPeer::AUTOCTR => 0, PoplwPeer::STOCKCODE => 1, PoplwPeer::SPECCODE => 2, PoplwPeer::FAMCODE => 3, PoplwPeer::POPLWREF => 4, PoplwPeer::LENGTHMIN => 5, PoplwPeer::LENGTHMAX => 6, PoplwPeer::TYPE => 7, PoplwPeer::LMAXCOMPARE => 8, PoplwPeer::ESQ => 9, PoplwPeer::NUMBER => 10, PoplwPeer::SEX => 11, PoplwPeer::A => 12, PoplwPeer::ATL => 13, PoplwPeer::B => 14, PoplwPeer::COEFFDETERMINATION => 15, PoplwPeer::SEA => 16, PoplwPeer::SEB => 17, PoplwPeer::SDA => 18, PoplwPeer::SDB => 19, PoplwPeer::LCLA => 20, PoplwPeer::UCLA => 21, PoplwPeer::LCLB => 22, PoplwPeer::UCLB => 23, PoplwPeer::METHOD => 24, PoplwPeer::LOCALITY => 25, PoplwPeer::DATAREF => 26, PoplwPeer::C_CODE => 27, PoplwPeer::COMMENT => 28, PoplwPeer::ENTERED => 29, PoplwPeer::DATEENTERED => 30, PoplwPeer::MODIFIED => 31, PoplwPeer::DATEMODIFIED => 32, PoplwPeer::EXPERT => 33, PoplwPeer::DATECHECKED => 34, PoplwPeer::TS => 35, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'FAMCODE' => 3, 'POPLWREF' => 4, 'LENGTHMIN' => 5, 'LENGTHMAX' => 6, 'TYPE' => 7, 'LMAXCOMPARE' => 8, 'ESQ' => 9, 'NUMBER' => 10, 'SEX' => 11, 'A' => 12, 'ATL' => 13, 'B' => 14, 'COEFFDETERMINATION' => 15, 'SEA' => 16, 'SEB' => 17, 'SDA' => 18, 'SDB' => 19, 'LCLA' => 20, 'UCLA' => 21, 'LCLB' => 22, 'UCLB' => 23, 'METHOD' => 24, 'LOCALITY' => 25, 'DATAREF' => 26, 'C_CODE' => 27, 'COMMENT' => 28, 'ENTERED' => 29, 'DATEENTERED' => 30, 'MODIFIED' => 31, 'DATEMODIFIED' => 32, 'EXPERT' => 33, 'DATECHECKED' => 34, 'TS' => 35, ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'FamCode' => 3, 'PopLWRef' => 4, 'LengthMin' => 5, 'LengthMax' => 6, 'Type' => 7, 'LmaxCompare' => 8, 'EsQ' => 9, 'Number' => 10, 'Sex' => 11, 'a' => 12, 'aTL' => 13, 'b' => 14, 'CoeffDetermination' => 15, 'SEa' => 16, 'SEb' => 17, 'SDa' => 18, 'SDb' => 19, 'LCLa' => 20, 'UCLa' => 21, 'LCLb' => 22, 'UCLb' => 23, 'Method' => 24, 'Locality' => 25, 'DataRef' => 26, 'C_Code' => 27, 'Comment' => 28, 'Entered' => 29, 'DateEntered' => 30, 'Modified' => 31, 'DateModified' => 32, 'Expert' => 33, 'DateChecked' => 34, 'TS' => 35, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
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
        $toNames = PoplwPeer::getFieldNames($toType);
        $key = isset(PoplwPeer::$fieldKeys[$fromType][$name]) ? PoplwPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PoplwPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PoplwPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PoplwPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PoplwPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PoplwPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PoplwPeer::AUTOCTR);
            $criteria->addSelectColumn(PoplwPeer::STOCKCODE);
            $criteria->addSelectColumn(PoplwPeer::SPECCODE);
            $criteria->addSelectColumn(PoplwPeer::FAMCODE);
            $criteria->addSelectColumn(PoplwPeer::POPLWREF);
            $criteria->addSelectColumn(PoplwPeer::LENGTHMIN);
            $criteria->addSelectColumn(PoplwPeer::LENGTHMAX);
            $criteria->addSelectColumn(PoplwPeer::TYPE);
            $criteria->addSelectColumn(PoplwPeer::LMAXCOMPARE);
            $criteria->addSelectColumn(PoplwPeer::ESQ);
            $criteria->addSelectColumn(PoplwPeer::NUMBER);
            $criteria->addSelectColumn(PoplwPeer::SEX);
            $criteria->addSelectColumn(PoplwPeer::A);
            $criteria->addSelectColumn(PoplwPeer::ATL);
            $criteria->addSelectColumn(PoplwPeer::B);
            $criteria->addSelectColumn(PoplwPeer::COEFFDETERMINATION);
            $criteria->addSelectColumn(PoplwPeer::SEA);
            $criteria->addSelectColumn(PoplwPeer::SEB);
            $criteria->addSelectColumn(PoplwPeer::SDA);
            $criteria->addSelectColumn(PoplwPeer::SDB);
            $criteria->addSelectColumn(PoplwPeer::LCLA);
            $criteria->addSelectColumn(PoplwPeer::UCLA);
            $criteria->addSelectColumn(PoplwPeer::LCLB);
            $criteria->addSelectColumn(PoplwPeer::UCLB);
            $criteria->addSelectColumn(PoplwPeer::METHOD);
            $criteria->addSelectColumn(PoplwPeer::LOCALITY);
            $criteria->addSelectColumn(PoplwPeer::DATAREF);
            $criteria->addSelectColumn(PoplwPeer::C_CODE);
            $criteria->addSelectColumn(PoplwPeer::COMMENT);
            $criteria->addSelectColumn(PoplwPeer::ENTERED);
            $criteria->addSelectColumn(PoplwPeer::DATEENTERED);
            $criteria->addSelectColumn(PoplwPeer::MODIFIED);
            $criteria->addSelectColumn(PoplwPeer::DATEMODIFIED);
            $criteria->addSelectColumn(PoplwPeer::EXPERT);
            $criteria->addSelectColumn(PoplwPeer::DATECHECKED);
            $criteria->addSelectColumn(PoplwPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.AutoCtr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.FamCode');
            $criteria->addSelectColumn($alias . '.PopLWRef');
            $criteria->addSelectColumn($alias . '.LengthMin');
            $criteria->addSelectColumn($alias . '.LengthMax');
            $criteria->addSelectColumn($alias . '.Type');
            $criteria->addSelectColumn($alias . '.LmaxCompare');
            $criteria->addSelectColumn($alias . '.EsQ');
            $criteria->addSelectColumn($alias . '.Number');
            $criteria->addSelectColumn($alias . '.Sex');
            $criteria->addSelectColumn($alias . '.a');
            $criteria->addSelectColumn($alias . '.aTL');
            $criteria->addSelectColumn($alias . '.b');
            $criteria->addSelectColumn($alias . '.CoeffDetermination');
            $criteria->addSelectColumn($alias . '.SEa');
            $criteria->addSelectColumn($alias . '.SEb');
            $criteria->addSelectColumn($alias . '.SDa');
            $criteria->addSelectColumn($alias . '.SDb');
            $criteria->addSelectColumn($alias . '.LCLa');
            $criteria->addSelectColumn($alias . '.UCLa');
            $criteria->addSelectColumn($alias . '.LCLb');
            $criteria->addSelectColumn($alias . '.UCLb');
            $criteria->addSelectColumn($alias . '.Method');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.DataRef');
            $criteria->addSelectColumn($alias . '.C_Code');
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
        $criteria->setPrimaryTableName(PoplwPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PoplwPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PoplwPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PoplwPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Poplw
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PoplwPeer::doSelect($critcopy, $con);
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
        return PoplwPeer::populateObjects(PoplwPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PoplwPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PoplwPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PoplwPeer::DATABASE_NAME);

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
     * @param Poplw $obj A Poplw object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            PoplwPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Poplw object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Poplw) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Poplw object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PoplwPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Poplw Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PoplwPeer::$instances[$key])) {
                return PoplwPeer::$instances[$key];
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
        foreach (PoplwPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PoplwPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to poplw
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
        $cls = PoplwPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PoplwPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PoplwPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PoplwPeer::addInstanceToPool($obj, $key);
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
     * @return array (Poplw object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PoplwPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PoplwPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PoplwPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PoplwPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PoplwPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(PoplwPeer::DATABASE_NAME)->getTable(PoplwPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePoplwPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePoplwPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PoplwTableMap());
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
        return PoplwPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Poplw or Criteria object.
     *
     * @param      mixed $values Criteria or Poplw object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PoplwPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Poplw object
        }

        if ($criteria->containsKey(PoplwPeer::AUTOCTR) && $criteria->keyContainsValue(PoplwPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PoplwPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PoplwPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Poplw or Criteria object.
     *
     * @param      mixed $values Criteria or Poplw object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PoplwPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PoplwPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PoplwPeer::AUTOCTR);
            $value = $criteria->remove(PoplwPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(PoplwPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PoplwPeer::TABLE_NAME);
            }

        } else { // $values is Poplw object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PoplwPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the poplw table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PoplwPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PoplwPeer::TABLE_NAME, $con, PoplwPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PoplwPeer::clearInstancePool();
            PoplwPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Poplw or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Poplw object or primary key or array of primary keys
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
            $con = Propel::getConnection(PoplwPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PoplwPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Poplw) { // it's a model object
            // invalidate the cache for this single object
            PoplwPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PoplwPeer::DATABASE_NAME);
            $criteria->add(PoplwPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PoplwPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PoplwPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PoplwPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Poplw object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Poplw $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PoplwPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PoplwPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PoplwPeer::DATABASE_NAME, PoplwPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Poplw
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PoplwPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PoplwPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PoplwPeer::DATABASE_NAME);
        $criteria->add(PoplwPeer::AUTOCTR, $pk);

        $v = PoplwPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Poplw[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PoplwPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PoplwPeer::DATABASE_NAME);
            $criteria->add(PoplwPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = PoplwPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePoplwPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePoplwPeer::buildTableMap();

