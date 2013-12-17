<?php


/**
 * Base static class for performing query and update operations on the 'food' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseFoodPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'food';

    /** the related Propel class for this table */
    const OM_CLASS = 'Food';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FoodTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 22;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 22;

    /** the column name for the AutoCtr field */
    const AUTOCTR = 'food.AutoCtr';

    /** the column name for the FOODI field */
    const FOODI = 'food.FOODI';

    /** the column name for the FOODII field */
    const FOODII = 'food.FOODII';

    /** the column name for the FOODIII field */
    const FOODIII = 'food.FOODIII';

    /** the column name for the GenFood field */
    const GENFOOD = 'food.GenFood';

    /** the column name for the SpecFood field */
    const SPECFOOD = 'food.SpecFood';

    /** the column name for the ComName field */
    const COMNAME = 'food.ComName';

    /** the column name for the Stage field */
    const STAGE = 'food.Stage';

    /** the column name for the Rank field */
    const RANK = 'food.Rank';

    /** the column name for the FoodIRank field */
    const FOODIRANK = 'food.FoodIRank';

    /** the column name for the FoodIIRank field */
    const FOODIIRANK = 'food.FoodIIRank';

    /** the column name for the FoodIIIRank field */
    const FOODIIIRANK = 'food.FoodIIIRank';

    /** the column name for the Troph field */
    const TROPH = 'food.Troph';

    /** the column name for the TrophSe field */
    const TROPHSE = 'food.TrophSe';

    /** the column name for the Refno field */
    const REFNO = 'food.Refno';

    /** the column name for the Remark field */
    const REMARK = 'food.Remark';

    /** the column name for the MaxLength field */
    const MAXLENGTH = 'food.MaxLength';

    /** the column name for the MinLength field */
    const MINLENGTH = 'food.MinLength';

    /** the column name for the FoodFlag field */
    const FOODFLAG = 'food.FoodFlag';

    /** the column name for the PredFlag field */
    const PREDFLAG = 'food.PredFlag';

    /** the column name for the NewTroph field */
    const NEWTROPH = 'food.NewTroph';

    /** the column name for the TS field */
    const TS = 'food.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Food objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Food[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FoodPeer::$fieldNames[FoodPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Foodi', 'Foodii', 'Foodiii', 'Genfood', 'Specfood', 'Comname', 'Stage', 'Rank', 'Foodirank', 'Foodiirank', 'Foodiiirank', 'Troph', 'Trophse', 'Refno', 'Remark', 'Maxlength', 'Minlength', 'Foodflag', 'Predflag', 'Newtroph', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'foodi', 'foodii', 'foodiii', 'genfood', 'specfood', 'comname', 'stage', 'rank', 'foodirank', 'foodiirank', 'foodiiirank', 'troph', 'trophse', 'refno', 'remark', 'maxlength', 'minlength', 'foodflag', 'predflag', 'newtroph', 'ts', ),
        BasePeer::TYPE_COLNAME => array (FoodPeer::AUTOCTR, FoodPeer::FOODI, FoodPeer::FOODII, FoodPeer::FOODIII, FoodPeer::GENFOOD, FoodPeer::SPECFOOD, FoodPeer::COMNAME, FoodPeer::STAGE, FoodPeer::RANK, FoodPeer::FOODIRANK, FoodPeer::FOODIIRANK, FoodPeer::FOODIIIRANK, FoodPeer::TROPH, FoodPeer::TROPHSE, FoodPeer::REFNO, FoodPeer::REMARK, FoodPeer::MAXLENGTH, FoodPeer::MINLENGTH, FoodPeer::FOODFLAG, FoodPeer::PREDFLAG, FoodPeer::NEWTROPH, FoodPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'FOODI', 'FOODII', 'FOODIII', 'GENFOOD', 'SPECFOOD', 'COMNAME', 'STAGE', 'RANK', 'FOODIRANK', 'FOODIIRANK', 'FOODIIIRANK', 'TROPH', 'TROPHSE', 'REFNO', 'REMARK', 'MAXLENGTH', 'MINLENGTH', 'FOODFLAG', 'PREDFLAG', 'NEWTROPH', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr', 'FOODI', 'FOODII', 'FOODIII', 'GenFood', 'SpecFood', 'ComName', 'Stage', 'Rank', 'FoodIRank', 'FoodIIRank', 'FoodIIIRank', 'Troph', 'TrophSe', 'Refno', 'Remark', 'MaxLength', 'MinLength', 'FoodFlag', 'PredFlag', 'NewTroph', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FoodPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Foodi' => 1, 'Foodii' => 2, 'Foodiii' => 3, 'Genfood' => 4, 'Specfood' => 5, 'Comname' => 6, 'Stage' => 7, 'Rank' => 8, 'Foodirank' => 9, 'Foodiirank' => 10, 'Foodiiirank' => 11, 'Troph' => 12, 'Trophse' => 13, 'Refno' => 14, 'Remark' => 15, 'Maxlength' => 16, 'Minlength' => 17, 'Foodflag' => 18, 'Predflag' => 19, 'Newtroph' => 20, 'Ts' => 21, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'foodi' => 1, 'foodii' => 2, 'foodiii' => 3, 'genfood' => 4, 'specfood' => 5, 'comname' => 6, 'stage' => 7, 'rank' => 8, 'foodirank' => 9, 'foodiirank' => 10, 'foodiiirank' => 11, 'troph' => 12, 'trophse' => 13, 'refno' => 14, 'remark' => 15, 'maxlength' => 16, 'minlength' => 17, 'foodflag' => 18, 'predflag' => 19, 'newtroph' => 20, 'ts' => 21, ),
        BasePeer::TYPE_COLNAME => array (FoodPeer::AUTOCTR => 0, FoodPeer::FOODI => 1, FoodPeer::FOODII => 2, FoodPeer::FOODIII => 3, FoodPeer::GENFOOD => 4, FoodPeer::SPECFOOD => 5, FoodPeer::COMNAME => 6, FoodPeer::STAGE => 7, FoodPeer::RANK => 8, FoodPeer::FOODIRANK => 9, FoodPeer::FOODIIRANK => 10, FoodPeer::FOODIIIRANK => 11, FoodPeer::TROPH => 12, FoodPeer::TROPHSE => 13, FoodPeer::REFNO => 14, FoodPeer::REMARK => 15, FoodPeer::MAXLENGTH => 16, FoodPeer::MINLENGTH => 17, FoodPeer::FOODFLAG => 18, FoodPeer::PREDFLAG => 19, FoodPeer::NEWTROPH => 20, FoodPeer::TS => 21, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'FOODI' => 1, 'FOODII' => 2, 'FOODIII' => 3, 'GENFOOD' => 4, 'SPECFOOD' => 5, 'COMNAME' => 6, 'STAGE' => 7, 'RANK' => 8, 'FOODIRANK' => 9, 'FOODIIRANK' => 10, 'FOODIIIRANK' => 11, 'TROPH' => 12, 'TROPHSE' => 13, 'REFNO' => 14, 'REMARK' => 15, 'MAXLENGTH' => 16, 'MINLENGTH' => 17, 'FOODFLAG' => 18, 'PREDFLAG' => 19, 'NEWTROPH' => 20, 'TS' => 21, ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr' => 0, 'FOODI' => 1, 'FOODII' => 2, 'FOODIII' => 3, 'GenFood' => 4, 'SpecFood' => 5, 'ComName' => 6, 'Stage' => 7, 'Rank' => 8, 'FoodIRank' => 9, 'FoodIIRank' => 10, 'FoodIIIRank' => 11, 'Troph' => 12, 'TrophSe' => 13, 'Refno' => 14, 'Remark' => 15, 'MaxLength' => 16, 'MinLength' => 17, 'FoodFlag' => 18, 'PredFlag' => 19, 'NewTroph' => 20, 'TS' => 21, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
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
        $toNames = FoodPeer::getFieldNames($toType);
        $key = isset(FoodPeer::$fieldKeys[$fromType][$name]) ? FoodPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FoodPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FoodPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FoodPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. FoodPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FoodPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FoodPeer::AUTOCTR);
            $criteria->addSelectColumn(FoodPeer::FOODI);
            $criteria->addSelectColumn(FoodPeer::FOODII);
            $criteria->addSelectColumn(FoodPeer::FOODIII);
            $criteria->addSelectColumn(FoodPeer::GENFOOD);
            $criteria->addSelectColumn(FoodPeer::SPECFOOD);
            $criteria->addSelectColumn(FoodPeer::COMNAME);
            $criteria->addSelectColumn(FoodPeer::STAGE);
            $criteria->addSelectColumn(FoodPeer::RANK);
            $criteria->addSelectColumn(FoodPeer::FOODIRANK);
            $criteria->addSelectColumn(FoodPeer::FOODIIRANK);
            $criteria->addSelectColumn(FoodPeer::FOODIIIRANK);
            $criteria->addSelectColumn(FoodPeer::TROPH);
            $criteria->addSelectColumn(FoodPeer::TROPHSE);
            $criteria->addSelectColumn(FoodPeer::REFNO);
            $criteria->addSelectColumn(FoodPeer::REMARK);
            $criteria->addSelectColumn(FoodPeer::MAXLENGTH);
            $criteria->addSelectColumn(FoodPeer::MINLENGTH);
            $criteria->addSelectColumn(FoodPeer::FOODFLAG);
            $criteria->addSelectColumn(FoodPeer::PREDFLAG);
            $criteria->addSelectColumn(FoodPeer::NEWTROPH);
            $criteria->addSelectColumn(FoodPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.AutoCtr');
            $criteria->addSelectColumn($alias . '.FOODI');
            $criteria->addSelectColumn($alias . '.FOODII');
            $criteria->addSelectColumn($alias . '.FOODIII');
            $criteria->addSelectColumn($alias . '.GenFood');
            $criteria->addSelectColumn($alias . '.SpecFood');
            $criteria->addSelectColumn($alias . '.ComName');
            $criteria->addSelectColumn($alias . '.Stage');
            $criteria->addSelectColumn($alias . '.Rank');
            $criteria->addSelectColumn($alias . '.FoodIRank');
            $criteria->addSelectColumn($alias . '.FoodIIRank');
            $criteria->addSelectColumn($alias . '.FoodIIIRank');
            $criteria->addSelectColumn($alias . '.Troph');
            $criteria->addSelectColumn($alias . '.TrophSe');
            $criteria->addSelectColumn($alias . '.Refno');
            $criteria->addSelectColumn($alias . '.Remark');
            $criteria->addSelectColumn($alias . '.MaxLength');
            $criteria->addSelectColumn($alias . '.MinLength');
            $criteria->addSelectColumn($alias . '.FoodFlag');
            $criteria->addSelectColumn($alias . '.PredFlag');
            $criteria->addSelectColumn($alias . '.NewTroph');
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
        $criteria->setPrimaryTableName(FoodPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FoodPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FoodPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FoodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Food
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FoodPeer::doSelect($critcopy, $con);
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
        return FoodPeer::populateObjects(FoodPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FoodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FoodPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FoodPeer::DATABASE_NAME);

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
     * @param Food $obj A Food object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            FoodPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Food object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Food) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Food object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FoodPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Food Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FoodPeer::$instances[$key])) {
                return FoodPeer::$instances[$key];
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
        foreach (FoodPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FoodPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to food
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
        $cls = FoodPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FoodPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FoodPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FoodPeer::addInstanceToPool($obj, $key);
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
     * @return array (Food object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FoodPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FoodPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FoodPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FoodPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FoodPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(FoodPeer::DATABASE_NAME)->getTable(FoodPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFoodPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFoodPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FoodTableMap());
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
        return FoodPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Food or Criteria object.
     *
     * @param      mixed $values Criteria or Food object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FoodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Food object
        }

        if ($criteria->containsKey(FoodPeer::AUTOCTR) && $criteria->keyContainsValue(FoodPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.FoodPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(FoodPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Food or Criteria object.
     *
     * @param      mixed $values Criteria or Food object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FoodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FoodPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FoodPeer::AUTOCTR);
            $value = $criteria->remove(FoodPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(FoodPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FoodPeer::TABLE_NAME);
            }

        } else { // $values is Food object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FoodPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the food table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FoodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FoodPeer::TABLE_NAME, $con, FoodPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FoodPeer::clearInstancePool();
            FoodPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Food or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Food object or primary key or array of primary keys
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
            $con = Propel::getConnection(FoodPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FoodPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Food) { // it's a model object
            // invalidate the cache for this single object
            FoodPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FoodPeer::DATABASE_NAME);
            $criteria->add(FoodPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FoodPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FoodPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FoodPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Food object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Food $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FoodPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FoodPeer::TABLE_NAME);

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

        return BasePeer::doValidate(FoodPeer::DATABASE_NAME, FoodPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Food
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FoodPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FoodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FoodPeer::DATABASE_NAME);
        $criteria->add(FoodPeer::AUTOCTR, $pk);

        $v = FoodPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Food[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FoodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FoodPeer::DATABASE_NAME);
            $criteria->add(FoodPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = FoodPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseFoodPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFoodPeer::buildTableMap();

