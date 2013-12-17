<?php


/**
 * Base static class for performing query and update operations on the 'latgraphs' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseLatgraphsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'latgraphs';

    /** the related Propel class for this table */
    const OM_CLASS = 'Latgraphs';

    /** the related TableMap class for this table */
    const TM_CLASS = 'LatgraphsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the SpecCode field */
    const SPECCODE = 'latgraphs.SpecCode';

    /** the column name for the Northernmost field */
    const NORTHERNMOST = 'latgraphs.Northernmost';

    /** the column name for the NorthSouthS field */
    const NORTHSOUTHS = 'latgraphs.NorthSouthS';

    /** the column name for the Southermost field */
    const SOUTHERMOST = 'latgraphs.Southermost';

    /** the column name for the NorthSouthN field */
    const NORTHSOUTHN = 'latgraphs.NorthSouthN';

    /** the column name for the LatBeg field */
    const LATBEG = 'latgraphs.LatBeg';

    /** the column name for the LatEnd field */
    const LATEND = 'latgraphs.LatEnd';

    /** the column name for the LoClass field */
    const LOCLASS = 'latgraphs.LoClass';

    /** the column name for the HiClass field */
    const HICLASS = 'latgraphs.HiClass';

    /** the column name for the TotClass field */
    const TOTCLASS = 'latgraphs.TotClass';

    /** the column name for the TS field */
    const TS = 'latgraphs.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Latgraphs objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Latgraphs[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. LatgraphsPeer::$fieldNames[LatgraphsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode', 'Northernmost', 'Northsouths', 'Southermost', 'Northsouthn', 'Latbeg', 'Latend', 'Loclass', 'Hiclass', 'Totclass', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode', 'northernmost', 'northsouths', 'southermost', 'northsouthn', 'latbeg', 'latend', 'loclass', 'hiclass', 'totclass', 'ts', ),
        BasePeer::TYPE_COLNAME => array (LatgraphsPeer::SPECCODE, LatgraphsPeer::NORTHERNMOST, LatgraphsPeer::NORTHSOUTHS, LatgraphsPeer::SOUTHERMOST, LatgraphsPeer::NORTHSOUTHN, LatgraphsPeer::LATBEG, LatgraphsPeer::LATEND, LatgraphsPeer::LOCLASS, LatgraphsPeer::HICLASS, LatgraphsPeer::TOTCLASS, LatgraphsPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE', 'NORTHERNMOST', 'NORTHSOUTHS', 'SOUTHERMOST', 'NORTHSOUTHN', 'LATBEG', 'LATEND', 'LOCLASS', 'HICLASS', 'TOTCLASS', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode', 'Northernmost', 'NorthSouthS', 'Southermost', 'NorthSouthN', 'LatBeg', 'LatEnd', 'LoClass', 'HiClass', 'TotClass', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. LatgraphsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode' => 0, 'Northernmost' => 1, 'Northsouths' => 2, 'Southermost' => 3, 'Northsouthn' => 4, 'Latbeg' => 5, 'Latend' => 6, 'Loclass' => 7, 'Hiclass' => 8, 'Totclass' => 9, 'Ts' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode' => 0, 'northernmost' => 1, 'northsouths' => 2, 'southermost' => 3, 'northsouthn' => 4, 'latbeg' => 5, 'latend' => 6, 'loclass' => 7, 'hiclass' => 8, 'totclass' => 9, 'ts' => 10, ),
        BasePeer::TYPE_COLNAME => array (LatgraphsPeer::SPECCODE => 0, LatgraphsPeer::NORTHERNMOST => 1, LatgraphsPeer::NORTHSOUTHS => 2, LatgraphsPeer::SOUTHERMOST => 3, LatgraphsPeer::NORTHSOUTHN => 4, LatgraphsPeer::LATBEG => 5, LatgraphsPeer::LATEND => 6, LatgraphsPeer::LOCLASS => 7, LatgraphsPeer::HICLASS => 8, LatgraphsPeer::TOTCLASS => 9, LatgraphsPeer::TS => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE' => 0, 'NORTHERNMOST' => 1, 'NORTHSOUTHS' => 2, 'SOUTHERMOST' => 3, 'NORTHSOUTHN' => 4, 'LATBEG' => 5, 'LATEND' => 6, 'LOCLASS' => 7, 'HICLASS' => 8, 'TOTCLASS' => 9, 'TS' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode' => 0, 'Northernmost' => 1, 'NorthSouthS' => 2, 'Southermost' => 3, 'NorthSouthN' => 4, 'LatBeg' => 5, 'LatEnd' => 6, 'LoClass' => 7, 'HiClass' => 8, 'TotClass' => 9, 'TS' => 10, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $toNames = LatgraphsPeer::getFieldNames($toType);
        $key = isset(LatgraphsPeer::$fieldKeys[$fromType][$name]) ? LatgraphsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(LatgraphsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, LatgraphsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return LatgraphsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. LatgraphsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(LatgraphsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(LatgraphsPeer::SPECCODE);
            $criteria->addSelectColumn(LatgraphsPeer::NORTHERNMOST);
            $criteria->addSelectColumn(LatgraphsPeer::NORTHSOUTHS);
            $criteria->addSelectColumn(LatgraphsPeer::SOUTHERMOST);
            $criteria->addSelectColumn(LatgraphsPeer::NORTHSOUTHN);
            $criteria->addSelectColumn(LatgraphsPeer::LATBEG);
            $criteria->addSelectColumn(LatgraphsPeer::LATEND);
            $criteria->addSelectColumn(LatgraphsPeer::LOCLASS);
            $criteria->addSelectColumn(LatgraphsPeer::HICLASS);
            $criteria->addSelectColumn(LatgraphsPeer::TOTCLASS);
            $criteria->addSelectColumn(LatgraphsPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Northernmost');
            $criteria->addSelectColumn($alias . '.NorthSouthS');
            $criteria->addSelectColumn($alias . '.Southermost');
            $criteria->addSelectColumn($alias . '.NorthSouthN');
            $criteria->addSelectColumn($alias . '.LatBeg');
            $criteria->addSelectColumn($alias . '.LatEnd');
            $criteria->addSelectColumn($alias . '.LoClass');
            $criteria->addSelectColumn($alias . '.HiClass');
            $criteria->addSelectColumn($alias . '.TotClass');
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
        $criteria->setPrimaryTableName(LatgraphsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LatgraphsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(LatgraphsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(LatgraphsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Latgraphs
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = LatgraphsPeer::doSelect($critcopy, $con);
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
        return LatgraphsPeer::populateObjects(LatgraphsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(LatgraphsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            LatgraphsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(LatgraphsPeer::DATABASE_NAME);

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
     * @param Latgraphs $obj A Latgraphs object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getSpeccode();
            } // if key === null
            LatgraphsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Latgraphs object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Latgraphs) {
                $key = (string) $value->getSpeccode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Latgraphs object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(LatgraphsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Latgraphs Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(LatgraphsPeer::$instances[$key])) {
                return LatgraphsPeer::$instances[$key];
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
        foreach (LatgraphsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        LatgraphsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to latgraphs
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
        $cls = LatgraphsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = LatgraphsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = LatgraphsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                LatgraphsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Latgraphs object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = LatgraphsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = LatgraphsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + LatgraphsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = LatgraphsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            LatgraphsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(LatgraphsPeer::DATABASE_NAME)->getTable(LatgraphsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseLatgraphsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseLatgraphsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \LatgraphsTableMap());
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
        return LatgraphsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Latgraphs or Criteria object.
     *
     * @param      mixed $values Criteria or Latgraphs object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LatgraphsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Latgraphs object
        }


        // Set the correct dbName
        $criteria->setDbName(LatgraphsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Latgraphs or Criteria object.
     *
     * @param      mixed $values Criteria or Latgraphs object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LatgraphsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(LatgraphsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(LatgraphsPeer::SPECCODE);
            $value = $criteria->remove(LatgraphsPeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(LatgraphsPeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(LatgraphsPeer::TABLE_NAME);
            }

        } else { // $values is Latgraphs object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(LatgraphsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the latgraphs table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LatgraphsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(LatgraphsPeer::TABLE_NAME, $con, LatgraphsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            LatgraphsPeer::clearInstancePool();
            LatgraphsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Latgraphs or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Latgraphs object or primary key or array of primary keys
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
            $con = Propel::getConnection(LatgraphsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            LatgraphsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Latgraphs) { // it's a model object
            // invalidate the cache for this single object
            LatgraphsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(LatgraphsPeer::DATABASE_NAME);
            $criteria->add(LatgraphsPeer::SPECCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                LatgraphsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(LatgraphsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            LatgraphsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Latgraphs object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Latgraphs $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(LatgraphsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(LatgraphsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(LatgraphsPeer::DATABASE_NAME, LatgraphsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Latgraphs
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = LatgraphsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(LatgraphsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(LatgraphsPeer::DATABASE_NAME);
        $criteria->add(LatgraphsPeer::SPECCODE, $pk);

        $v = LatgraphsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Latgraphs[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LatgraphsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(LatgraphsPeer::DATABASE_NAME);
            $criteria->add(LatgraphsPeer::SPECCODE, $pks, Criteria::IN);
            $objs = LatgraphsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseLatgraphsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseLatgraphsPeer::buildTableMap();

