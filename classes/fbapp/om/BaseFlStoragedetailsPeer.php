<?php


/**
 * Base static class for performing query and update operations on the 'fl_storagedetails' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseFlStoragedetailsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'fl_storagedetails';

    /** the related Propel class for this table */
    const OM_CLASS = 'FlStoragedetails';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FlStoragedetailsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the LossCode field */
    const LOSSCODE = 'fl_storagedetails.LossCode';

    /** the column name for the DistributionStage field */
    const DISTRIBUTIONSTAGE = 'fl_storagedetails.DistributionStage';

    /** the column name for the OtherDistributionStage field */
    const OTHERDISTRIBUTIONSTAGE = 'fl_storagedetails.OtherDistributionStage';

    /** the column name for the DurationOfStorageMin field */
    const DURATIONOFSTORAGEMIN = 'fl_storagedetails.DurationOfStorageMin';

    /** the column name for the DurationOfStorageMax field */
    const DURATIONOFSTORAGEMAX = 'fl_storagedetails.DurationOfStorageMax';

    /** the column name for the StorageMethod field */
    const STORAGEMETHOD = 'fl_storagedetails.StorageMethod';

    /** the column name for the StorageTemperatureMin field */
    const STORAGETEMPERATUREMIN = 'fl_storagedetails.StorageTemperatureMin';

    /** the column name for the StorageTemperatureMax field */
    const STORAGETEMPERATUREMAX = 'fl_storagedetails.StorageTemperatureMax';

    /** the column name for the StorageContainers field */
    const STORAGECONTAINERS = 'fl_storagedetails.StorageContainers';

    /** the column name for the StorageTreatments field */
    const STORAGETREATMENTS = 'fl_storagedetails.StorageTreatments';

    /** the column name for the SaltContent field */
    const SALTCONTENT = 'fl_storagedetails.SaltContent';

    /** the column name for the Editable field */
    const EDITABLE = 'fl_storagedetails.Editable';

    /** the column name for the TS field */
    const TS = 'fl_storagedetails.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of FlStoragedetails objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array FlStoragedetails[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FlStoragedetailsPeer::$fieldNames[FlStoragedetailsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Losscode', 'Distributionstage', 'Otherdistributionstage', 'Durationofstoragemin', 'Durationofstoragemax', 'Storagemethod', 'Storagetemperaturemin', 'Storagetemperaturemax', 'Storagecontainers', 'Storagetreatments', 'Saltcontent', 'Editable', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('losscode', 'distributionstage', 'otherdistributionstage', 'durationofstoragemin', 'durationofstoragemax', 'storagemethod', 'storagetemperaturemin', 'storagetemperaturemax', 'storagecontainers', 'storagetreatments', 'saltcontent', 'editable', 'ts', ),
        BasePeer::TYPE_COLNAME => array (FlStoragedetailsPeer::LOSSCODE, FlStoragedetailsPeer::DISTRIBUTIONSTAGE, FlStoragedetailsPeer::OTHERDISTRIBUTIONSTAGE, FlStoragedetailsPeer::DURATIONOFSTORAGEMIN, FlStoragedetailsPeer::DURATIONOFSTORAGEMAX, FlStoragedetailsPeer::STORAGEMETHOD, FlStoragedetailsPeer::STORAGETEMPERATUREMIN, FlStoragedetailsPeer::STORAGETEMPERATUREMAX, FlStoragedetailsPeer::STORAGECONTAINERS, FlStoragedetailsPeer::STORAGETREATMENTS, FlStoragedetailsPeer::SALTCONTENT, FlStoragedetailsPeer::EDITABLE, FlStoragedetailsPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LOSSCODE', 'DISTRIBUTIONSTAGE', 'OTHERDISTRIBUTIONSTAGE', 'DURATIONOFSTORAGEMIN', 'DURATIONOFSTORAGEMAX', 'STORAGEMETHOD', 'STORAGETEMPERATUREMIN', 'STORAGETEMPERATUREMAX', 'STORAGECONTAINERS', 'STORAGETREATMENTS', 'SALTCONTENT', 'EDITABLE', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('LossCode', 'DistributionStage', 'OtherDistributionStage', 'DurationOfStorageMin', 'DurationOfStorageMax', 'StorageMethod', 'StorageTemperatureMin', 'StorageTemperatureMax', 'StorageContainers', 'StorageTreatments', 'SaltContent', 'Editable', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FlStoragedetailsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Losscode' => 0, 'Distributionstage' => 1, 'Otherdistributionstage' => 2, 'Durationofstoragemin' => 3, 'Durationofstoragemax' => 4, 'Storagemethod' => 5, 'Storagetemperaturemin' => 6, 'Storagetemperaturemax' => 7, 'Storagecontainers' => 8, 'Storagetreatments' => 9, 'Saltcontent' => 10, 'Editable' => 11, 'Ts' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('losscode' => 0, 'distributionstage' => 1, 'otherdistributionstage' => 2, 'durationofstoragemin' => 3, 'durationofstoragemax' => 4, 'storagemethod' => 5, 'storagetemperaturemin' => 6, 'storagetemperaturemax' => 7, 'storagecontainers' => 8, 'storagetreatments' => 9, 'saltcontent' => 10, 'editable' => 11, 'ts' => 12, ),
        BasePeer::TYPE_COLNAME => array (FlStoragedetailsPeer::LOSSCODE => 0, FlStoragedetailsPeer::DISTRIBUTIONSTAGE => 1, FlStoragedetailsPeer::OTHERDISTRIBUTIONSTAGE => 2, FlStoragedetailsPeer::DURATIONOFSTORAGEMIN => 3, FlStoragedetailsPeer::DURATIONOFSTORAGEMAX => 4, FlStoragedetailsPeer::STORAGEMETHOD => 5, FlStoragedetailsPeer::STORAGETEMPERATUREMIN => 6, FlStoragedetailsPeer::STORAGETEMPERATUREMAX => 7, FlStoragedetailsPeer::STORAGECONTAINERS => 8, FlStoragedetailsPeer::STORAGETREATMENTS => 9, FlStoragedetailsPeer::SALTCONTENT => 10, FlStoragedetailsPeer::EDITABLE => 11, FlStoragedetailsPeer::TS => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('LOSSCODE' => 0, 'DISTRIBUTIONSTAGE' => 1, 'OTHERDISTRIBUTIONSTAGE' => 2, 'DURATIONOFSTORAGEMIN' => 3, 'DURATIONOFSTORAGEMAX' => 4, 'STORAGEMETHOD' => 5, 'STORAGETEMPERATUREMIN' => 6, 'STORAGETEMPERATUREMAX' => 7, 'STORAGECONTAINERS' => 8, 'STORAGETREATMENTS' => 9, 'SALTCONTENT' => 10, 'EDITABLE' => 11, 'TS' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('LossCode' => 0, 'DistributionStage' => 1, 'OtherDistributionStage' => 2, 'DurationOfStorageMin' => 3, 'DurationOfStorageMax' => 4, 'StorageMethod' => 5, 'StorageTemperatureMin' => 6, 'StorageTemperatureMax' => 7, 'StorageContainers' => 8, 'StorageTreatments' => 9, 'SaltContent' => 10, 'Editable' => 11, 'TS' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $toNames = FlStoragedetailsPeer::getFieldNames($toType);
        $key = isset(FlStoragedetailsPeer::$fieldKeys[$fromType][$name]) ? FlStoragedetailsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FlStoragedetailsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FlStoragedetailsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FlStoragedetailsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. FlStoragedetailsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FlStoragedetailsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FlStoragedetailsPeer::LOSSCODE);
            $criteria->addSelectColumn(FlStoragedetailsPeer::DISTRIBUTIONSTAGE);
            $criteria->addSelectColumn(FlStoragedetailsPeer::OTHERDISTRIBUTIONSTAGE);
            $criteria->addSelectColumn(FlStoragedetailsPeer::DURATIONOFSTORAGEMIN);
            $criteria->addSelectColumn(FlStoragedetailsPeer::DURATIONOFSTORAGEMAX);
            $criteria->addSelectColumn(FlStoragedetailsPeer::STORAGEMETHOD);
            $criteria->addSelectColumn(FlStoragedetailsPeer::STORAGETEMPERATUREMIN);
            $criteria->addSelectColumn(FlStoragedetailsPeer::STORAGETEMPERATUREMAX);
            $criteria->addSelectColumn(FlStoragedetailsPeer::STORAGECONTAINERS);
            $criteria->addSelectColumn(FlStoragedetailsPeer::STORAGETREATMENTS);
            $criteria->addSelectColumn(FlStoragedetailsPeer::SALTCONTENT);
            $criteria->addSelectColumn(FlStoragedetailsPeer::EDITABLE);
            $criteria->addSelectColumn(FlStoragedetailsPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.LossCode');
            $criteria->addSelectColumn($alias . '.DistributionStage');
            $criteria->addSelectColumn($alias . '.OtherDistributionStage');
            $criteria->addSelectColumn($alias . '.DurationOfStorageMin');
            $criteria->addSelectColumn($alias . '.DurationOfStorageMax');
            $criteria->addSelectColumn($alias . '.StorageMethod');
            $criteria->addSelectColumn($alias . '.StorageTemperatureMin');
            $criteria->addSelectColumn($alias . '.StorageTemperatureMax');
            $criteria->addSelectColumn($alias . '.StorageContainers');
            $criteria->addSelectColumn($alias . '.StorageTreatments');
            $criteria->addSelectColumn($alias . '.SaltContent');
            $criteria->addSelectColumn($alias . '.Editable');
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
        $criteria->setPrimaryTableName(FlStoragedetailsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlStoragedetailsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FlStoragedetailsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FlStoragedetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return FlStoragedetails
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FlStoragedetailsPeer::doSelect($critcopy, $con);
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
        return FlStoragedetailsPeer::populateObjects(FlStoragedetailsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FlStoragedetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FlStoragedetailsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FlStoragedetailsPeer::DATABASE_NAME);

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
     * @param FlStoragedetails $obj A FlStoragedetails object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getLosscode();
            } // if key === null
            FlStoragedetailsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A FlStoragedetails object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof FlStoragedetails) {
                $key = (string) $value->getLosscode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or FlStoragedetails object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FlStoragedetailsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return FlStoragedetails Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FlStoragedetailsPeer::$instances[$key])) {
                return FlStoragedetailsPeer::$instances[$key];
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
        foreach (FlStoragedetailsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FlStoragedetailsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to fl_storagedetails
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
        $cls = FlStoragedetailsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FlStoragedetailsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FlStoragedetailsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FlStoragedetailsPeer::addInstanceToPool($obj, $key);
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
     * @return array (FlStoragedetails object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FlStoragedetailsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FlStoragedetailsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FlStoragedetailsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FlStoragedetailsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FlStoragedetailsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(FlStoragedetailsPeer::DATABASE_NAME)->getTable(FlStoragedetailsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFlStoragedetailsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFlStoragedetailsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FlStoragedetailsTableMap());
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
        return FlStoragedetailsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a FlStoragedetails or Criteria object.
     *
     * @param      mixed $values Criteria or FlStoragedetails object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlStoragedetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from FlStoragedetails object
        }


        // Set the correct dbName
        $criteria->setDbName(FlStoragedetailsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a FlStoragedetails or Criteria object.
     *
     * @param      mixed $values Criteria or FlStoragedetails object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlStoragedetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FlStoragedetailsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FlStoragedetailsPeer::LOSSCODE);
            $value = $criteria->remove(FlStoragedetailsPeer::LOSSCODE);
            if ($value) {
                $selectCriteria->add(FlStoragedetailsPeer::LOSSCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FlStoragedetailsPeer::TABLE_NAME);
            }

        } else { // $values is FlStoragedetails object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FlStoragedetailsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the fl_storagedetails table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlStoragedetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FlStoragedetailsPeer::TABLE_NAME, $con, FlStoragedetailsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FlStoragedetailsPeer::clearInstancePool();
            FlStoragedetailsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a FlStoragedetails or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or FlStoragedetails object or primary key or array of primary keys
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
            $con = Propel::getConnection(FlStoragedetailsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FlStoragedetailsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof FlStoragedetails) { // it's a model object
            // invalidate the cache for this single object
            FlStoragedetailsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FlStoragedetailsPeer::DATABASE_NAME);
            $criteria->add(FlStoragedetailsPeer::LOSSCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FlStoragedetailsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FlStoragedetailsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FlStoragedetailsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given FlStoragedetails object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param FlStoragedetails $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FlStoragedetailsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FlStoragedetailsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(FlStoragedetailsPeer::DATABASE_NAME, FlStoragedetailsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return FlStoragedetails
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FlStoragedetailsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FlStoragedetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FlStoragedetailsPeer::DATABASE_NAME);
        $criteria->add(FlStoragedetailsPeer::LOSSCODE, $pk);

        $v = FlStoragedetailsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return FlStoragedetails[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlStoragedetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FlStoragedetailsPeer::DATABASE_NAME);
            $criteria->add(FlStoragedetailsPeer::LOSSCODE, $pks, Criteria::IN);
            $objs = FlStoragedetailsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseFlStoragedetailsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFlStoragedetailsPeer::buildTableMap();

