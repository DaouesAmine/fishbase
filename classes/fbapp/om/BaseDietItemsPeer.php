<?php


/**
 * Base static class for performing query and update operations on the 'diet_items' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseDietItemsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'diet_items';

    /** the related Propel class for this table */
    const OM_CLASS = 'DietItems';

    /** the related TableMap class for this table */
    const TM_CLASS = 'DietItemsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the autoctr field */
    const AUTOCTR = 'diet_items.autoctr';

    /** the column name for the DietCode field */
    const DIETCODE = 'diet_items.DietCode';

    /** the column name for the FoodI field */
    const FOODI = 'diet_items.FoodI';

    /** the column name for the FoodII field */
    const FOODII = 'diet_items.FoodII';

    /** the column name for the FoodIII field */
    const FOODIII = 'diet_items.FoodIII';

    /** the column name for the Stage field */
    const STAGE = 'diet_items.Stage';

    /** the column name for the DietPercent field */
    const DIETPERCENT = 'diet_items.DietPercent';

    /** the column name for the ItemName field */
    const ITEMNAME = 'diet_items.ItemName';

    /** the column name for the Comment field */
    const COMMENT = 'diet_items.Comment';

    /** the column name for the DietSpeccode field */
    const DIETSPECCODE = 'diet_items.DietSpeccode';

    /** the column name for the DietSpeccodeSLB field */
    const DIETSPECCODESLB = 'diet_items.DietSpeccodeSLB';

    /** the column name for the AlphaCode field */
    const ALPHACODE = 'diet_items.AlphaCode';

    /** the column name for the PreyTroph field */
    const PREYTROPH = 'diet_items.PreyTroph';

    /** the column name for the PreySeTroph field */
    const PREYSETROPH = 'diet_items.PreySeTroph';

    /** the column name for the PreyRemark field */
    const PREYREMARK = 'diet_items.PreyRemark';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of DietItems objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array DietItems[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. DietItemsPeer::$fieldNames[DietItemsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Dietcode', 'Foodi', 'Foodii', 'Foodiii', 'Stage', 'Dietpercent', 'Itemname', 'Comment', 'Dietspeccode', 'Dietspeccodeslb', 'Alphacode', 'Preytroph', 'Preysetroph', 'Preyremark', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'dietcode', 'foodi', 'foodii', 'foodiii', 'stage', 'dietpercent', 'itemname', 'comment', 'dietspeccode', 'dietspeccodeslb', 'alphacode', 'preytroph', 'preysetroph', 'preyremark', ),
        BasePeer::TYPE_COLNAME => array (DietItemsPeer::AUTOCTR, DietItemsPeer::DIETCODE, DietItemsPeer::FOODI, DietItemsPeer::FOODII, DietItemsPeer::FOODIII, DietItemsPeer::STAGE, DietItemsPeer::DIETPERCENT, DietItemsPeer::ITEMNAME, DietItemsPeer::COMMENT, DietItemsPeer::DIETSPECCODE, DietItemsPeer::DIETSPECCODESLB, DietItemsPeer::ALPHACODE, DietItemsPeer::PREYTROPH, DietItemsPeer::PREYSETROPH, DietItemsPeer::PREYREMARK, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'DIETCODE', 'FOODI', 'FOODII', 'FOODIII', 'STAGE', 'DIETPERCENT', 'ITEMNAME', 'COMMENT', 'DIETSPECCODE', 'DIETSPECCODESLB', 'ALPHACODE', 'PREYTROPH', 'PREYSETROPH', 'PREYREMARK', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'DietCode', 'FoodI', 'FoodII', 'FoodIII', 'Stage', 'DietPercent', 'ItemName', 'Comment', 'DietSpeccode', 'DietSpeccodeSLB', 'AlphaCode', 'PreyTroph', 'PreySeTroph', 'PreyRemark', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. DietItemsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Dietcode' => 1, 'Foodi' => 2, 'Foodii' => 3, 'Foodiii' => 4, 'Stage' => 5, 'Dietpercent' => 6, 'Itemname' => 7, 'Comment' => 8, 'Dietspeccode' => 9, 'Dietspeccodeslb' => 10, 'Alphacode' => 11, 'Preytroph' => 12, 'Preysetroph' => 13, 'Preyremark' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'dietcode' => 1, 'foodi' => 2, 'foodii' => 3, 'foodiii' => 4, 'stage' => 5, 'dietpercent' => 6, 'itemname' => 7, 'comment' => 8, 'dietspeccode' => 9, 'dietspeccodeslb' => 10, 'alphacode' => 11, 'preytroph' => 12, 'preysetroph' => 13, 'preyremark' => 14, ),
        BasePeer::TYPE_COLNAME => array (DietItemsPeer::AUTOCTR => 0, DietItemsPeer::DIETCODE => 1, DietItemsPeer::FOODI => 2, DietItemsPeer::FOODII => 3, DietItemsPeer::FOODIII => 4, DietItemsPeer::STAGE => 5, DietItemsPeer::DIETPERCENT => 6, DietItemsPeer::ITEMNAME => 7, DietItemsPeer::COMMENT => 8, DietItemsPeer::DIETSPECCODE => 9, DietItemsPeer::DIETSPECCODESLB => 10, DietItemsPeer::ALPHACODE => 11, DietItemsPeer::PREYTROPH => 12, DietItemsPeer::PREYSETROPH => 13, DietItemsPeer::PREYREMARK => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'DIETCODE' => 1, 'FOODI' => 2, 'FOODII' => 3, 'FOODIII' => 4, 'STAGE' => 5, 'DIETPERCENT' => 6, 'ITEMNAME' => 7, 'COMMENT' => 8, 'DIETSPECCODE' => 9, 'DIETSPECCODESLB' => 10, 'ALPHACODE' => 11, 'PREYTROPH' => 12, 'PREYSETROPH' => 13, 'PREYREMARK' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'DietCode' => 1, 'FoodI' => 2, 'FoodII' => 3, 'FoodIII' => 4, 'Stage' => 5, 'DietPercent' => 6, 'ItemName' => 7, 'Comment' => 8, 'DietSpeccode' => 9, 'DietSpeccodeSLB' => 10, 'AlphaCode' => 11, 'PreyTroph' => 12, 'PreySeTroph' => 13, 'PreyRemark' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $toNames = DietItemsPeer::getFieldNames($toType);
        $key = isset(DietItemsPeer::$fieldKeys[$fromType][$name]) ? DietItemsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(DietItemsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, DietItemsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return DietItemsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. DietItemsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(DietItemsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(DietItemsPeer::AUTOCTR);
            $criteria->addSelectColumn(DietItemsPeer::DIETCODE);
            $criteria->addSelectColumn(DietItemsPeer::FOODI);
            $criteria->addSelectColumn(DietItemsPeer::FOODII);
            $criteria->addSelectColumn(DietItemsPeer::FOODIII);
            $criteria->addSelectColumn(DietItemsPeer::STAGE);
            $criteria->addSelectColumn(DietItemsPeer::DIETPERCENT);
            $criteria->addSelectColumn(DietItemsPeer::ITEMNAME);
            $criteria->addSelectColumn(DietItemsPeer::COMMENT);
            $criteria->addSelectColumn(DietItemsPeer::DIETSPECCODE);
            $criteria->addSelectColumn(DietItemsPeer::DIETSPECCODESLB);
            $criteria->addSelectColumn(DietItemsPeer::ALPHACODE);
            $criteria->addSelectColumn(DietItemsPeer::PREYTROPH);
            $criteria->addSelectColumn(DietItemsPeer::PREYSETROPH);
            $criteria->addSelectColumn(DietItemsPeer::PREYREMARK);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.DietCode');
            $criteria->addSelectColumn($alias . '.FoodI');
            $criteria->addSelectColumn($alias . '.FoodII');
            $criteria->addSelectColumn($alias . '.FoodIII');
            $criteria->addSelectColumn($alias . '.Stage');
            $criteria->addSelectColumn($alias . '.DietPercent');
            $criteria->addSelectColumn($alias . '.ItemName');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.DietSpeccode');
            $criteria->addSelectColumn($alias . '.DietSpeccodeSLB');
            $criteria->addSelectColumn($alias . '.AlphaCode');
            $criteria->addSelectColumn($alias . '.PreyTroph');
            $criteria->addSelectColumn($alias . '.PreySeTroph');
            $criteria->addSelectColumn($alias . '.PreyRemark');
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
        $criteria->setPrimaryTableName(DietItemsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DietItemsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(DietItemsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(DietItemsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return DietItems
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = DietItemsPeer::doSelect($critcopy, $con);
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
        return DietItemsPeer::populateObjects(DietItemsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(DietItemsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DietItemsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(DietItemsPeer::DATABASE_NAME);

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
     * @param DietItems $obj A DietItems object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getDietcode(), (string) $obj->getFoodiii(), (string) $obj->getStage(), (string) $obj->getDietpercent(), (string) $obj->getItemname()));
            } // if key === null
            DietItemsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A DietItems object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof DietItems) {
                $key = serialize(array((string) $value->getDietcode(), (string) $value->getFoodiii(), (string) $value->getStage(), (string) $value->getDietpercent(), (string) $value->getItemname()));
            } elseif (is_array($value) && count($value) === 5) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or DietItems object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(DietItemsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return DietItems Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(DietItemsPeer::$instances[$key])) {
                return DietItemsPeer::$instances[$key];
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
        foreach (DietItemsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        DietItemsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to diet_items
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
        if ($row[$startcol + 1] === null && $row[$startcol + 4] === null && $row[$startcol + 5] === null && $row[$startcol + 6] === null && $row[$startcol + 7] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 4], (string) $row[$startcol + 5], (string) $row[$startcol + 6], (string) $row[$startcol + 7]));
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

        return array((int) $row[$startcol + 1], (string) $row[$startcol + 4], (string) $row[$startcol + 5], (double) $row[$startcol + 6], (string) $row[$startcol + 7]);
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
        $cls = DietItemsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = DietItemsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = DietItemsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DietItemsPeer::addInstanceToPool($obj, $key);
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
     * @return array (DietItems object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = DietItemsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = DietItemsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + DietItemsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DietItemsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            DietItemsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(DietItemsPeer::DATABASE_NAME)->getTable(DietItemsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseDietItemsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseDietItemsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \DietItemsTableMap());
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
        return DietItemsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a DietItems or Criteria object.
     *
     * @param      mixed $values Criteria or DietItems object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DietItemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from DietItems object
        }


        // Set the correct dbName
        $criteria->setDbName(DietItemsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a DietItems or Criteria object.
     *
     * @param      mixed $values Criteria or DietItems object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DietItemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(DietItemsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(DietItemsPeer::DIETCODE);
            $value = $criteria->remove(DietItemsPeer::DIETCODE);
            if ($value) {
                $selectCriteria->add(DietItemsPeer::DIETCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DietItemsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(DietItemsPeer::FOODIII);
            $value = $criteria->remove(DietItemsPeer::FOODIII);
            if ($value) {
                $selectCriteria->add(DietItemsPeer::FOODIII, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DietItemsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(DietItemsPeer::STAGE);
            $value = $criteria->remove(DietItemsPeer::STAGE);
            if ($value) {
                $selectCriteria->add(DietItemsPeer::STAGE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DietItemsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(DietItemsPeer::DIETPERCENT);
            $value = $criteria->remove(DietItemsPeer::DIETPERCENT);
            if ($value) {
                $selectCriteria->add(DietItemsPeer::DIETPERCENT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DietItemsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(DietItemsPeer::ITEMNAME);
            $value = $criteria->remove(DietItemsPeer::ITEMNAME);
            if ($value) {
                $selectCriteria->add(DietItemsPeer::ITEMNAME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DietItemsPeer::TABLE_NAME);
            }

        } else { // $values is DietItems object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(DietItemsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the diet_items table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DietItemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(DietItemsPeer::TABLE_NAME, $con, DietItemsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DietItemsPeer::clearInstancePool();
            DietItemsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a DietItems or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or DietItems object or primary key or array of primary keys
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
            $con = Propel::getConnection(DietItemsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            DietItemsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof DietItems) { // it's a model object
            // invalidate the cache for this single object
            DietItemsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DietItemsPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(DietItemsPeer::DIETCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(DietItemsPeer::FOODIII, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(DietItemsPeer::STAGE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(DietItemsPeer::DIETPERCENT, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(DietItemsPeer::ITEMNAME, $value[4]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                DietItemsPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(DietItemsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            DietItemsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given DietItems object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param DietItems $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(DietItemsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(DietItemsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(DietItemsPeer::DATABASE_NAME, DietItemsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $dietcode
     * @param   string $foodiii
     * @param   string $stage
     * @param   double $dietpercent
     * @param   string $itemname
     * @param      PropelPDO $con
     * @return DietItems
     */
    public static function retrieveByPK($dietcode, $foodiii, $stage, $dietpercent, $itemname, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $dietcode, (string) $foodiii, (string) $stage, (string) $dietpercent, (string) $itemname));
         if (null !== ($obj = DietItemsPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(DietItemsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(DietItemsPeer::DATABASE_NAME);
        $criteria->add(DietItemsPeer::DIETCODE, $dietcode);
        $criteria->add(DietItemsPeer::FOODIII, $foodiii);
        $criteria->add(DietItemsPeer::STAGE, $stage);
        $criteria->add(DietItemsPeer::DIETPERCENT, $dietpercent);
        $criteria->add(DietItemsPeer::ITEMNAME, $itemname);
        $v = DietItemsPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseDietItemsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDietItemsPeer::buildTableMap();

