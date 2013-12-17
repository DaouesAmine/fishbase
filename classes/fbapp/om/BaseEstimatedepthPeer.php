<?php


/**
 * Base static class for performing query and update operations on the 'estimatedepth' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseEstimatedepthPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'estimatedepth';

    /** the related Propel class for this table */
    const OM_CLASS = 'Estimatedepth';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EstimatedepthTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the Speccode field */
    const SPECCODE = 'estimatedepth.Speccode';

    /** the column name for the HabitatZone field */
    const HABITATZONE = 'estimatedepth.HabitatZone';

    /** the column name for the DepthMin field */
    const DEPTHMIN = 'estimatedepth.DepthMin';

    /** the column name for the DepthMax field */
    const DEPTHMAX = 'estimatedepth.DepthMax';

    /** the column name for the Entered field */
    const ENTERED = 'estimatedepth.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'estimatedepth.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'estimatedepth.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'estimatedepth.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'estimatedepth.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'estimatedepth.DateChecked';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Estimatedepth objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Estimatedepth[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EstimatedepthPeer::$fieldNames[EstimatedepthPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode', 'Habitatzone', 'Depthmin', 'Depthmax', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode', 'habitatzone', 'depthmin', 'depthmax', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', ),
        BasePeer::TYPE_COLNAME => array (EstimatedepthPeer::SPECCODE, EstimatedepthPeer::HABITATZONE, EstimatedepthPeer::DEPTHMIN, EstimatedepthPeer::DEPTHMAX, EstimatedepthPeer::ENTERED, EstimatedepthPeer::DATEENTERED, EstimatedepthPeer::MODIFIED, EstimatedepthPeer::DATEMODIFIED, EstimatedepthPeer::EXPERT, EstimatedepthPeer::DATECHECKED, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE', 'HABITATZONE', 'DEPTHMIN', 'DEPTHMAX', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', ),
        BasePeer::TYPE_FIELDNAME => array ('Speccode', 'HabitatZone', 'DepthMin', 'DepthMax', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EstimatedepthPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode' => 0, 'Habitatzone' => 1, 'Depthmin' => 2, 'Depthmax' => 3, 'Entered' => 4, 'Dateentered' => 5, 'Modified' => 6, 'Datemodified' => 7, 'Expert' => 8, 'Datechecked' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode' => 0, 'habitatzone' => 1, 'depthmin' => 2, 'depthmax' => 3, 'entered' => 4, 'dateentered' => 5, 'modified' => 6, 'datemodified' => 7, 'expert' => 8, 'datechecked' => 9, ),
        BasePeer::TYPE_COLNAME => array (EstimatedepthPeer::SPECCODE => 0, EstimatedepthPeer::HABITATZONE => 1, EstimatedepthPeer::DEPTHMIN => 2, EstimatedepthPeer::DEPTHMAX => 3, EstimatedepthPeer::ENTERED => 4, EstimatedepthPeer::DATEENTERED => 5, EstimatedepthPeer::MODIFIED => 6, EstimatedepthPeer::DATEMODIFIED => 7, EstimatedepthPeer::EXPERT => 8, EstimatedepthPeer::DATECHECKED => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE' => 0, 'HABITATZONE' => 1, 'DEPTHMIN' => 2, 'DEPTHMAX' => 3, 'ENTERED' => 4, 'DATEENTERED' => 5, 'MODIFIED' => 6, 'DATEMODIFIED' => 7, 'EXPERT' => 8, 'DATECHECKED' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('Speccode' => 0, 'HabitatZone' => 1, 'DepthMin' => 2, 'DepthMax' => 3, 'Entered' => 4, 'DateEntered' => 5, 'Modified' => 6, 'DateModified' => 7, 'Expert' => 8, 'DateChecked' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
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
        $toNames = EstimatedepthPeer::getFieldNames($toType);
        $key = isset(EstimatedepthPeer::$fieldKeys[$fromType][$name]) ? EstimatedepthPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EstimatedepthPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, EstimatedepthPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EstimatedepthPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. EstimatedepthPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EstimatedepthPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(EstimatedepthPeer::SPECCODE);
            $criteria->addSelectColumn(EstimatedepthPeer::HABITATZONE);
            $criteria->addSelectColumn(EstimatedepthPeer::DEPTHMIN);
            $criteria->addSelectColumn(EstimatedepthPeer::DEPTHMAX);
            $criteria->addSelectColumn(EstimatedepthPeer::ENTERED);
            $criteria->addSelectColumn(EstimatedepthPeer::DATEENTERED);
            $criteria->addSelectColumn(EstimatedepthPeer::MODIFIED);
            $criteria->addSelectColumn(EstimatedepthPeer::DATEMODIFIED);
            $criteria->addSelectColumn(EstimatedepthPeer::EXPERT);
            $criteria->addSelectColumn(EstimatedepthPeer::DATECHECKED);
        } else {
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.HabitatZone');
            $criteria->addSelectColumn($alias . '.DepthMin');
            $criteria->addSelectColumn($alias . '.DepthMax');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
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
        $criteria->setPrimaryTableName(EstimatedepthPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EstimatedepthPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EstimatedepthPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EstimatedepthPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Estimatedepth
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EstimatedepthPeer::doSelect($critcopy, $con);
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
        return EstimatedepthPeer::populateObjects(EstimatedepthPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(EstimatedepthPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EstimatedepthPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EstimatedepthPeer::DATABASE_NAME);

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
     * @param Estimatedepth $obj A Estimatedepth object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getSpeccode();
            } // if key === null
            EstimatedepthPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Estimatedepth object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Estimatedepth) {
                $key = (string) $value->getSpeccode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Estimatedepth object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EstimatedepthPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Estimatedepth Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EstimatedepthPeer::$instances[$key])) {
                return EstimatedepthPeer::$instances[$key];
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
        foreach (EstimatedepthPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        EstimatedepthPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to estimatedepth
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
        $cls = EstimatedepthPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EstimatedepthPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EstimatedepthPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EstimatedepthPeer::addInstanceToPool($obj, $key);
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
     * @return array (Estimatedepth object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EstimatedepthPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EstimatedepthPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EstimatedepthPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EstimatedepthPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EstimatedepthPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(EstimatedepthPeer::DATABASE_NAME)->getTable(EstimatedepthPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEstimatedepthPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEstimatedepthPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \EstimatedepthTableMap());
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
        return EstimatedepthPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Estimatedepth or Criteria object.
     *
     * @param      mixed $values Criteria or Estimatedepth object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EstimatedepthPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Estimatedepth object
        }


        // Set the correct dbName
        $criteria->setDbName(EstimatedepthPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Estimatedepth or Criteria object.
     *
     * @param      mixed $values Criteria or Estimatedepth object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EstimatedepthPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EstimatedepthPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EstimatedepthPeer::SPECCODE);
            $value = $criteria->remove(EstimatedepthPeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(EstimatedepthPeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EstimatedepthPeer::TABLE_NAME);
            }

        } else { // $values is Estimatedepth object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EstimatedepthPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the estimatedepth table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EstimatedepthPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(EstimatedepthPeer::TABLE_NAME, $con, EstimatedepthPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EstimatedepthPeer::clearInstancePool();
            EstimatedepthPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Estimatedepth or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Estimatedepth object or primary key or array of primary keys
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
            $con = Propel::getConnection(EstimatedepthPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            EstimatedepthPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Estimatedepth) { // it's a model object
            // invalidate the cache for this single object
            EstimatedepthPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EstimatedepthPeer::DATABASE_NAME);
            $criteria->add(EstimatedepthPeer::SPECCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                EstimatedepthPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(EstimatedepthPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            EstimatedepthPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Estimatedepth object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Estimatedepth $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EstimatedepthPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EstimatedepthPeer::TABLE_NAME);

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

        return BasePeer::doValidate(EstimatedepthPeer::DATABASE_NAME, EstimatedepthPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Estimatedepth
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = EstimatedepthPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EstimatedepthPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(EstimatedepthPeer::DATABASE_NAME);
        $criteria->add(EstimatedepthPeer::SPECCODE, $pk);

        $v = EstimatedepthPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Estimatedepth[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EstimatedepthPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(EstimatedepthPeer::DATABASE_NAME);
            $criteria->add(EstimatedepthPeer::SPECCODE, $pks, Criteria::IN);
            $objs = EstimatedepthPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseEstimatedepthPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEstimatedepthPeer::buildTableMap();

