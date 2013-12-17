<?php


/**
 * Base static class for performing query and update operations on the 'fooditems' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseFooditemsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'fooditems';

    /** the related Propel class for this table */
    const OM_CLASS = 'Fooditems';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FooditemsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 29;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 29;

    /** the column name for the autoctr field */
    const AUTOCTR = 'fooditems.autoctr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'fooditems.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'fooditems.SpecCode';

    /** the column name for the Locality field */
    const LOCALITY = 'fooditems.Locality';

    /** the column name for the C_Code field */
    const C_CODE = 'fooditems.C_Code';

    /** the column name for the FoodsRefNo field */
    const FOODSREFNO = 'fooditems.FoodsRefNo';

    /** the column name for the FoodI field */
    const FOODI = 'fooditems.FoodI';

    /** the column name for the PreyStage field */
    const PREYSTAGE = 'fooditems.PreyStage';

    /** the column name for the FoodII field */
    const FOODII = 'fooditems.FoodII';

    /** the column name for the FoodIII field */
    const FOODIII = 'fooditems.FoodIII';

    /** the column name for the Commoness field */
    const COMMONESS = 'fooditems.Commoness';

    /** the column name for the CommonessII field */
    const COMMONESSII = 'fooditems.CommonessII';

    /** the column name for the Foodgroup field */
    const FOODGROUP = 'fooditems.Foodgroup';

    /** the column name for the Foodname field */
    const FOODNAME = 'fooditems.Foodname';

    /** the column name for the PreySpecCode field */
    const PREYSPECCODE = 'fooditems.PreySpecCode';

    /** the column name for the PreySpecCodeSLB field */
    const PREYSPECCODESLB = 'fooditems.PreySpecCodeSLB';

    /** the column name for the AlphaCode field */
    const ALPHACODE = 'fooditems.AlphaCode';

    /** the column name for the PreyTroph field */
    const PREYTROPH = 'fooditems.PreyTroph';

    /** the column name for the PreySeTroph field */
    const PREYSETROPH = 'fooditems.PreySeTroph';

    /** the column name for the TrophRefNo field */
    const TROPHREFNO = 'fooditems.TrophRefNo';

    /** the column name for the PredatorStage field */
    const PREDATORSTAGE = 'fooditems.PredatorStage';

    /** the column name for the Locality2 field */
    const LOCALITY2 = 'fooditems.Locality2';

    /** the column name for the Entered field */
    const ENTERED = 'fooditems.Entered';

    /** the column name for the Dateentered field */
    const DATEENTERED = 'fooditems.Dateentered';

    /** the column name for the Modified field */
    const MODIFIED = 'fooditems.Modified';

    /** the column name for the Datemodified field */
    const DATEMODIFIED = 'fooditems.Datemodified';

    /** the column name for the Expert field */
    const EXPERT = 'fooditems.Expert';

    /** the column name for the Datechecked field */
    const DATECHECKED = 'fooditems.Datechecked';

    /** the column name for the TS field */
    const TS = 'fooditems.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Fooditems objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Fooditems[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FooditemsPeer::$fieldNames[FooditemsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Locality', 'CCode', 'Foodsrefno', 'Foodi', 'Preystage', 'Foodii', 'Foodiii', 'Commoness', 'Commonessii', 'Foodgroup', 'Foodname', 'Preyspeccode', 'Preyspeccodeslb', 'Alphacode', 'Preytroph', 'Preysetroph', 'Trophrefno', 'Predatorstage', 'Locality2', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'locality', 'cCode', 'foodsrefno', 'foodi', 'preystage', 'foodii', 'foodiii', 'commoness', 'commonessii', 'foodgroup', 'foodname', 'preyspeccode', 'preyspeccodeslb', 'alphacode', 'preytroph', 'preysetroph', 'trophrefno', 'predatorstage', 'locality2', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (FooditemsPeer::AUTOCTR, FooditemsPeer::STOCKCODE, FooditemsPeer::SPECCODE, FooditemsPeer::LOCALITY, FooditemsPeer::C_CODE, FooditemsPeer::FOODSREFNO, FooditemsPeer::FOODI, FooditemsPeer::PREYSTAGE, FooditemsPeer::FOODII, FooditemsPeer::FOODIII, FooditemsPeer::COMMONESS, FooditemsPeer::COMMONESSII, FooditemsPeer::FOODGROUP, FooditemsPeer::FOODNAME, FooditemsPeer::PREYSPECCODE, FooditemsPeer::PREYSPECCODESLB, FooditemsPeer::ALPHACODE, FooditemsPeer::PREYTROPH, FooditemsPeer::PREYSETROPH, FooditemsPeer::TROPHREFNO, FooditemsPeer::PREDATORSTAGE, FooditemsPeer::LOCALITY2, FooditemsPeer::ENTERED, FooditemsPeer::DATEENTERED, FooditemsPeer::MODIFIED, FooditemsPeer::DATEMODIFIED, FooditemsPeer::EXPERT, FooditemsPeer::DATECHECKED, FooditemsPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'LOCALITY', 'C_CODE', 'FOODSREFNO', 'FOODI', 'PREYSTAGE', 'FOODII', 'FOODIII', 'COMMONESS', 'COMMONESSII', 'FOODGROUP', 'FOODNAME', 'PREYSPECCODE', 'PREYSPECCODESLB', 'ALPHACODE', 'PREYTROPH', 'PREYSETROPH', 'TROPHREFNO', 'PREDATORSTAGE', 'LOCALITY2', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'StockCode', 'SpecCode', 'Locality', 'C_Code', 'FoodsRefNo', 'FoodI', 'PreyStage', 'FoodII', 'FoodIII', 'Commoness', 'CommonessII', 'Foodgroup', 'Foodname', 'PreySpecCode', 'PreySpecCodeSLB', 'AlphaCode', 'PreyTroph', 'PreySeTroph', 'TrophRefNo', 'PredatorStage', 'Locality2', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FooditemsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Locality' => 3, 'CCode' => 4, 'Foodsrefno' => 5, 'Foodi' => 6, 'Preystage' => 7, 'Foodii' => 8, 'Foodiii' => 9, 'Commoness' => 10, 'Commonessii' => 11, 'Foodgroup' => 12, 'Foodname' => 13, 'Preyspeccode' => 14, 'Preyspeccodeslb' => 15, 'Alphacode' => 16, 'Preytroph' => 17, 'Preysetroph' => 18, 'Trophrefno' => 19, 'Predatorstage' => 20, 'Locality2' => 21, 'Entered' => 22, 'Dateentered' => 23, 'Modified' => 24, 'Datemodified' => 25, 'Expert' => 26, 'Datechecked' => 27, 'Ts' => 28, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'locality' => 3, 'cCode' => 4, 'foodsrefno' => 5, 'foodi' => 6, 'preystage' => 7, 'foodii' => 8, 'foodiii' => 9, 'commoness' => 10, 'commonessii' => 11, 'foodgroup' => 12, 'foodname' => 13, 'preyspeccode' => 14, 'preyspeccodeslb' => 15, 'alphacode' => 16, 'preytroph' => 17, 'preysetroph' => 18, 'trophrefno' => 19, 'predatorstage' => 20, 'locality2' => 21, 'entered' => 22, 'dateentered' => 23, 'modified' => 24, 'datemodified' => 25, 'expert' => 26, 'datechecked' => 27, 'ts' => 28, ),
        BasePeer::TYPE_COLNAME => array (FooditemsPeer::AUTOCTR => 0, FooditemsPeer::STOCKCODE => 1, FooditemsPeer::SPECCODE => 2, FooditemsPeer::LOCALITY => 3, FooditemsPeer::C_CODE => 4, FooditemsPeer::FOODSREFNO => 5, FooditemsPeer::FOODI => 6, FooditemsPeer::PREYSTAGE => 7, FooditemsPeer::FOODII => 8, FooditemsPeer::FOODIII => 9, FooditemsPeer::COMMONESS => 10, FooditemsPeer::COMMONESSII => 11, FooditemsPeer::FOODGROUP => 12, FooditemsPeer::FOODNAME => 13, FooditemsPeer::PREYSPECCODE => 14, FooditemsPeer::PREYSPECCODESLB => 15, FooditemsPeer::ALPHACODE => 16, FooditemsPeer::PREYTROPH => 17, FooditemsPeer::PREYSETROPH => 18, FooditemsPeer::TROPHREFNO => 19, FooditemsPeer::PREDATORSTAGE => 20, FooditemsPeer::LOCALITY2 => 21, FooditemsPeer::ENTERED => 22, FooditemsPeer::DATEENTERED => 23, FooditemsPeer::MODIFIED => 24, FooditemsPeer::DATEMODIFIED => 25, FooditemsPeer::EXPERT => 26, FooditemsPeer::DATECHECKED => 27, FooditemsPeer::TS => 28, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'LOCALITY' => 3, 'C_CODE' => 4, 'FOODSREFNO' => 5, 'FOODI' => 6, 'PREYSTAGE' => 7, 'FOODII' => 8, 'FOODIII' => 9, 'COMMONESS' => 10, 'COMMONESSII' => 11, 'FOODGROUP' => 12, 'FOODNAME' => 13, 'PREYSPECCODE' => 14, 'PREYSPECCODESLB' => 15, 'ALPHACODE' => 16, 'PREYTROPH' => 17, 'PREYSETROPH' => 18, 'TROPHREFNO' => 19, 'PREDATORSTAGE' => 20, 'LOCALITY2' => 21, 'ENTERED' => 22, 'DATEENTERED' => 23, 'MODIFIED' => 24, 'DATEMODIFIED' => 25, 'EXPERT' => 26, 'DATECHECKED' => 27, 'TS' => 28, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'Locality' => 3, 'C_Code' => 4, 'FoodsRefNo' => 5, 'FoodI' => 6, 'PreyStage' => 7, 'FoodII' => 8, 'FoodIII' => 9, 'Commoness' => 10, 'CommonessII' => 11, 'Foodgroup' => 12, 'Foodname' => 13, 'PreySpecCode' => 14, 'PreySpecCodeSLB' => 15, 'AlphaCode' => 16, 'PreyTroph' => 17, 'PreySeTroph' => 18, 'TrophRefNo' => 19, 'PredatorStage' => 20, 'Locality2' => 21, 'Entered' => 22, 'Dateentered' => 23, 'Modified' => 24, 'Datemodified' => 25, 'Expert' => 26, 'Datechecked' => 27, 'TS' => 28, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
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
        $toNames = FooditemsPeer::getFieldNames($toType);
        $key = isset(FooditemsPeer::$fieldKeys[$fromType][$name]) ? FooditemsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FooditemsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FooditemsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FooditemsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. FooditemsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FooditemsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FooditemsPeer::AUTOCTR);
            $criteria->addSelectColumn(FooditemsPeer::STOCKCODE);
            $criteria->addSelectColumn(FooditemsPeer::SPECCODE);
            $criteria->addSelectColumn(FooditemsPeer::LOCALITY);
            $criteria->addSelectColumn(FooditemsPeer::C_CODE);
            $criteria->addSelectColumn(FooditemsPeer::FOODSREFNO);
            $criteria->addSelectColumn(FooditemsPeer::FOODI);
            $criteria->addSelectColumn(FooditemsPeer::PREYSTAGE);
            $criteria->addSelectColumn(FooditemsPeer::FOODII);
            $criteria->addSelectColumn(FooditemsPeer::FOODIII);
            $criteria->addSelectColumn(FooditemsPeer::COMMONESS);
            $criteria->addSelectColumn(FooditemsPeer::COMMONESSII);
            $criteria->addSelectColumn(FooditemsPeer::FOODGROUP);
            $criteria->addSelectColumn(FooditemsPeer::FOODNAME);
            $criteria->addSelectColumn(FooditemsPeer::PREYSPECCODE);
            $criteria->addSelectColumn(FooditemsPeer::PREYSPECCODESLB);
            $criteria->addSelectColumn(FooditemsPeer::ALPHACODE);
            $criteria->addSelectColumn(FooditemsPeer::PREYTROPH);
            $criteria->addSelectColumn(FooditemsPeer::PREYSETROPH);
            $criteria->addSelectColumn(FooditemsPeer::TROPHREFNO);
            $criteria->addSelectColumn(FooditemsPeer::PREDATORSTAGE);
            $criteria->addSelectColumn(FooditemsPeer::LOCALITY2);
            $criteria->addSelectColumn(FooditemsPeer::ENTERED);
            $criteria->addSelectColumn(FooditemsPeer::DATEENTERED);
            $criteria->addSelectColumn(FooditemsPeer::MODIFIED);
            $criteria->addSelectColumn(FooditemsPeer::DATEMODIFIED);
            $criteria->addSelectColumn(FooditemsPeer::EXPERT);
            $criteria->addSelectColumn(FooditemsPeer::DATECHECKED);
            $criteria->addSelectColumn(FooditemsPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.FoodsRefNo');
            $criteria->addSelectColumn($alias . '.FoodI');
            $criteria->addSelectColumn($alias . '.PreyStage');
            $criteria->addSelectColumn($alias . '.FoodII');
            $criteria->addSelectColumn($alias . '.FoodIII');
            $criteria->addSelectColumn($alias . '.Commoness');
            $criteria->addSelectColumn($alias . '.CommonessII');
            $criteria->addSelectColumn($alias . '.Foodgroup');
            $criteria->addSelectColumn($alias . '.Foodname');
            $criteria->addSelectColumn($alias . '.PreySpecCode');
            $criteria->addSelectColumn($alias . '.PreySpecCodeSLB');
            $criteria->addSelectColumn($alias . '.AlphaCode');
            $criteria->addSelectColumn($alias . '.PreyTroph');
            $criteria->addSelectColumn($alias . '.PreySeTroph');
            $criteria->addSelectColumn($alias . '.TrophRefNo');
            $criteria->addSelectColumn($alias . '.PredatorStage');
            $criteria->addSelectColumn($alias . '.Locality2');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.Dateentered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.Datemodified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.Datechecked');
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
        $criteria->setPrimaryTableName(FooditemsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FooditemsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FooditemsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FooditemsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Fooditems
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FooditemsPeer::doSelect($critcopy, $con);
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
        return FooditemsPeer::populateObjects(FooditemsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FooditemsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FooditemsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FooditemsPeer::DATABASE_NAME);

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
     * @param Fooditems $obj A Fooditems object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getFoodi(), (string) $obj->getPreystage(), (string) $obj->getFoodii(), (string) $obj->getFoodiii(), (string) $obj->getFoodgroup(), (string) $obj->getFoodname(), (string) $obj->getPredatorstage()));
            } // if key === null
            FooditemsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Fooditems object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Fooditems) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getFoodi(), (string) $value->getPreystage(), (string) $value->getFoodii(), (string) $value->getFoodiii(), (string) $value->getFoodgroup(), (string) $value->getFoodname(), (string) $value->getPredatorstage()));
            } elseif (is_array($value) && count($value) === 8) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4], (string) $value[5], (string) $value[6], (string) $value[7]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Fooditems object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FooditemsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Fooditems Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FooditemsPeer::$instances[$key])) {
                return FooditemsPeer::$instances[$key];
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
        foreach (FooditemsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FooditemsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to fooditems
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
        if ($row[$startcol + 1] === null && $row[$startcol + 6] === null && $row[$startcol + 7] === null && $row[$startcol + 8] === null && $row[$startcol + 9] === null && $row[$startcol + 12] === null && $row[$startcol + 13] === null && $row[$startcol + 20] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 6], (string) $row[$startcol + 7], (string) $row[$startcol + 8], (string) $row[$startcol + 9], (string) $row[$startcol + 12], (string) $row[$startcol + 13], (string) $row[$startcol + 20]));
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

        return array((int) $row[$startcol + 1], (string) $row[$startcol + 6], (string) $row[$startcol + 7], (string) $row[$startcol + 8], (string) $row[$startcol + 9], (string) $row[$startcol + 12], (string) $row[$startcol + 13], (string) $row[$startcol + 20]);
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
        $cls = FooditemsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FooditemsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FooditemsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FooditemsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Fooditems object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FooditemsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FooditemsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FooditemsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FooditemsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FooditemsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(FooditemsPeer::DATABASE_NAME)->getTable(FooditemsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFooditemsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFooditemsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FooditemsTableMap());
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
        return FooditemsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Fooditems or Criteria object.
     *
     * @param      mixed $values Criteria or Fooditems object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FooditemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Fooditems object
        }


        // Set the correct dbName
        $criteria->setDbName(FooditemsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Fooditems or Criteria object.
     *
     * @param      mixed $values Criteria or Fooditems object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FooditemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FooditemsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FooditemsPeer::STOCKCODE);
            $value = $criteria->remove(FooditemsPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(FooditemsPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FooditemsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(FooditemsPeer::FOODI);
            $value = $criteria->remove(FooditemsPeer::FOODI);
            if ($value) {
                $selectCriteria->add(FooditemsPeer::FOODI, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FooditemsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(FooditemsPeer::PREYSTAGE);
            $value = $criteria->remove(FooditemsPeer::PREYSTAGE);
            if ($value) {
                $selectCriteria->add(FooditemsPeer::PREYSTAGE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FooditemsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(FooditemsPeer::FOODII);
            $value = $criteria->remove(FooditemsPeer::FOODII);
            if ($value) {
                $selectCriteria->add(FooditemsPeer::FOODII, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FooditemsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(FooditemsPeer::FOODIII);
            $value = $criteria->remove(FooditemsPeer::FOODIII);
            if ($value) {
                $selectCriteria->add(FooditemsPeer::FOODIII, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FooditemsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(FooditemsPeer::FOODGROUP);
            $value = $criteria->remove(FooditemsPeer::FOODGROUP);
            if ($value) {
                $selectCriteria->add(FooditemsPeer::FOODGROUP, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FooditemsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(FooditemsPeer::FOODNAME);
            $value = $criteria->remove(FooditemsPeer::FOODNAME);
            if ($value) {
                $selectCriteria->add(FooditemsPeer::FOODNAME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FooditemsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(FooditemsPeer::PREDATORSTAGE);
            $value = $criteria->remove(FooditemsPeer::PREDATORSTAGE);
            if ($value) {
                $selectCriteria->add(FooditemsPeer::PREDATORSTAGE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FooditemsPeer::TABLE_NAME);
            }

        } else { // $values is Fooditems object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FooditemsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the fooditems table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FooditemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FooditemsPeer::TABLE_NAME, $con, FooditemsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FooditemsPeer::clearInstancePool();
            FooditemsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Fooditems or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Fooditems object or primary key or array of primary keys
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
            $con = Propel::getConnection(FooditemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FooditemsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Fooditems) { // it's a model object
            // invalidate the cache for this single object
            FooditemsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FooditemsPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(FooditemsPeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(FooditemsPeer::FOODI, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(FooditemsPeer::PREYSTAGE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(FooditemsPeer::FOODII, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(FooditemsPeer::FOODIII, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(FooditemsPeer::FOODGROUP, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(FooditemsPeer::FOODNAME, $value[6]));
                $criterion->addAnd($criteria->getNewCriterion(FooditemsPeer::PREDATORSTAGE, $value[7]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                FooditemsPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FooditemsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FooditemsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Fooditems object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Fooditems $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FooditemsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FooditemsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(FooditemsPeer::DATABASE_NAME, FooditemsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stockcode
     * @param   string $foodi
     * @param   string $preystage
     * @param   string $foodii
     * @param   string $foodiii
     * @param   string $foodgroup
     * @param   string $foodname
     * @param   string $predatorstage
     * @param      PropelPDO $con
     * @return Fooditems
     */
    public static function retrieveByPK($stockcode, $foodi, $preystage, $foodii, $foodiii, $foodgroup, $foodname, $predatorstage, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $foodi, (string) $preystage, (string) $foodii, (string) $foodiii, (string) $foodgroup, (string) $foodname, (string) $predatorstage));
         if (null !== ($obj = FooditemsPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FooditemsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(FooditemsPeer::DATABASE_NAME);
        $criteria->add(FooditemsPeer::STOCKCODE, $stockcode);
        $criteria->add(FooditemsPeer::FOODI, $foodi);
        $criteria->add(FooditemsPeer::PREYSTAGE, $preystage);
        $criteria->add(FooditemsPeer::FOODII, $foodii);
        $criteria->add(FooditemsPeer::FOODIII, $foodiii);
        $criteria->add(FooditemsPeer::FOODGROUP, $foodgroup);
        $criteria->add(FooditemsPeer::FOODNAME, $foodname);
        $criteria->add(FooditemsPeer::PREDATORSTAGE, $predatorstage);
        $v = FooditemsPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseFooditemsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFooditemsPeer::buildTableMap();

