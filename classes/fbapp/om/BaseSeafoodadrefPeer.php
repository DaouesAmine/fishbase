<?php


/**
 * Base static class for performing query and update operations on the 'seafoodadref' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseSeafoodadrefPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'seafoodadref';

    /** the related Propel class for this table */
    const OM_CLASS = 'Seafoodadref';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SeafoodadrefTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the GuideID field */
    const GUIDEID = 'seafoodadref.GuideID';

    /** the column name for the GuideName field */
    const GUIDENAME = 'seafoodadref.GuideName';

    /** the column name for the GuideURL field */
    const GUIDEURL = 'seafoodadref.GuideURL';

    /** the column name for the c_code_web field */
    const C_CODE_WEB = 'seafoodadref.c_code_web';

    /** the column name for the Entered field */
    const ENTERED = 'seafoodadref.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'seafoodadref.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'seafoodadref.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'seafoodadref.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'seafoodadref.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'seafoodadref.DateChecked';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Seafoodadref objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Seafoodadref[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SeafoodadrefPeer::$fieldNames[SeafoodadrefPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Guideid', 'Guidename', 'Guideurl', 'CCodeWeb', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('guideid', 'guidename', 'guideurl', 'cCodeWeb', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', ),
        BasePeer::TYPE_COLNAME => array (SeafoodadrefPeer::GUIDEID, SeafoodadrefPeer::GUIDENAME, SeafoodadrefPeer::GUIDEURL, SeafoodadrefPeer::C_CODE_WEB, SeafoodadrefPeer::ENTERED, SeafoodadrefPeer::DATEENTERED, SeafoodadrefPeer::MODIFIED, SeafoodadrefPeer::DATEMODIFIED, SeafoodadrefPeer::EXPERT, SeafoodadrefPeer::DATECHECKED, ),
        BasePeer::TYPE_RAW_COLNAME => array ('GUIDEID', 'GUIDENAME', 'GUIDEURL', 'C_CODE_WEB', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', ),
        BasePeer::TYPE_FIELDNAME => array ('GuideID', 'GuideName', 'GuideURL', 'c_code_web', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SeafoodadrefPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Guideid' => 0, 'Guidename' => 1, 'Guideurl' => 2, 'CCodeWeb' => 3, 'Entered' => 4, 'Dateentered' => 5, 'Modified' => 6, 'Datemodified' => 7, 'Expert' => 8, 'Datechecked' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('guideid' => 0, 'guidename' => 1, 'guideurl' => 2, 'cCodeWeb' => 3, 'entered' => 4, 'dateentered' => 5, 'modified' => 6, 'datemodified' => 7, 'expert' => 8, 'datechecked' => 9, ),
        BasePeer::TYPE_COLNAME => array (SeafoodadrefPeer::GUIDEID => 0, SeafoodadrefPeer::GUIDENAME => 1, SeafoodadrefPeer::GUIDEURL => 2, SeafoodadrefPeer::C_CODE_WEB => 3, SeafoodadrefPeer::ENTERED => 4, SeafoodadrefPeer::DATEENTERED => 5, SeafoodadrefPeer::MODIFIED => 6, SeafoodadrefPeer::DATEMODIFIED => 7, SeafoodadrefPeer::EXPERT => 8, SeafoodadrefPeer::DATECHECKED => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('GUIDEID' => 0, 'GUIDENAME' => 1, 'GUIDEURL' => 2, 'C_CODE_WEB' => 3, 'ENTERED' => 4, 'DATEENTERED' => 5, 'MODIFIED' => 6, 'DATEMODIFIED' => 7, 'EXPERT' => 8, 'DATECHECKED' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('GuideID' => 0, 'GuideName' => 1, 'GuideURL' => 2, 'c_code_web' => 3, 'Entered' => 4, 'DateEntered' => 5, 'Modified' => 6, 'DateModified' => 7, 'Expert' => 8, 'DateChecked' => 9, ),
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
        $toNames = SeafoodadrefPeer::getFieldNames($toType);
        $key = isset(SeafoodadrefPeer::$fieldKeys[$fromType][$name]) ? SeafoodadrefPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SeafoodadrefPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SeafoodadrefPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SeafoodadrefPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SeafoodadrefPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SeafoodadrefPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SeafoodadrefPeer::GUIDEID);
            $criteria->addSelectColumn(SeafoodadrefPeer::GUIDENAME);
            $criteria->addSelectColumn(SeafoodadrefPeer::GUIDEURL);
            $criteria->addSelectColumn(SeafoodadrefPeer::C_CODE_WEB);
            $criteria->addSelectColumn(SeafoodadrefPeer::ENTERED);
            $criteria->addSelectColumn(SeafoodadrefPeer::DATEENTERED);
            $criteria->addSelectColumn(SeafoodadrefPeer::MODIFIED);
            $criteria->addSelectColumn(SeafoodadrefPeer::DATEMODIFIED);
            $criteria->addSelectColumn(SeafoodadrefPeer::EXPERT);
            $criteria->addSelectColumn(SeafoodadrefPeer::DATECHECKED);
        } else {
            $criteria->addSelectColumn($alias . '.GuideID');
            $criteria->addSelectColumn($alias . '.GuideName');
            $criteria->addSelectColumn($alias . '.GuideURL');
            $criteria->addSelectColumn($alias . '.c_code_web');
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
        $criteria->setPrimaryTableName(SeafoodadrefPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SeafoodadrefPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SeafoodadrefPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SeafoodadrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Seafoodadref
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SeafoodadrefPeer::doSelect($critcopy, $con);
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
        return SeafoodadrefPeer::populateObjects(SeafoodadrefPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SeafoodadrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SeafoodadrefPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SeafoodadrefPeer::DATABASE_NAME);

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
     * @param Seafoodadref $obj A Seafoodadref object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getGuidename();
            } // if key === null
            SeafoodadrefPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Seafoodadref object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Seafoodadref) {
                $key = (string) $value->getGuidename();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Seafoodadref object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SeafoodadrefPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Seafoodadref Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SeafoodadrefPeer::$instances[$key])) {
                return SeafoodadrefPeer::$instances[$key];
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
        foreach (SeafoodadrefPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SeafoodadrefPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to seafoodadref
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
        if ($row[$startcol + 1] === null) {
            return null;
        }

        return (string) $row[$startcol + 1];
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

        return (string) $row[$startcol + 1];
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
        $cls = SeafoodadrefPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SeafoodadrefPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SeafoodadrefPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SeafoodadrefPeer::addInstanceToPool($obj, $key);
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
     * @return array (Seafoodadref object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SeafoodadrefPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SeafoodadrefPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SeafoodadrefPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SeafoodadrefPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SeafoodadrefPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(SeafoodadrefPeer::DATABASE_NAME)->getTable(SeafoodadrefPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSeafoodadrefPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSeafoodadrefPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SeafoodadrefTableMap());
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
        return SeafoodadrefPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Seafoodadref or Criteria object.
     *
     * @param      mixed $values Criteria or Seafoodadref object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SeafoodadrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Seafoodadref object
        }


        // Set the correct dbName
        $criteria->setDbName(SeafoodadrefPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Seafoodadref or Criteria object.
     *
     * @param      mixed $values Criteria or Seafoodadref object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SeafoodadrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SeafoodadrefPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SeafoodadrefPeer::GUIDENAME);
            $value = $criteria->remove(SeafoodadrefPeer::GUIDENAME);
            if ($value) {
                $selectCriteria->add(SeafoodadrefPeer::GUIDENAME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SeafoodadrefPeer::TABLE_NAME);
            }

        } else { // $values is Seafoodadref object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SeafoodadrefPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the seafoodadref table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SeafoodadrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SeafoodadrefPeer::TABLE_NAME, $con, SeafoodadrefPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SeafoodadrefPeer::clearInstancePool();
            SeafoodadrefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Seafoodadref or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Seafoodadref object or primary key or array of primary keys
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
            $con = Propel::getConnection(SeafoodadrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SeafoodadrefPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Seafoodadref) { // it's a model object
            // invalidate the cache for this single object
            SeafoodadrefPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SeafoodadrefPeer::DATABASE_NAME);
            $criteria->add(SeafoodadrefPeer::GUIDENAME, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                SeafoodadrefPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SeafoodadrefPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SeafoodadrefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Seafoodadref object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Seafoodadref $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SeafoodadrefPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SeafoodadrefPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SeafoodadrefPeer::DATABASE_NAME, SeafoodadrefPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Seafoodadref
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = SeafoodadrefPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SeafoodadrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(SeafoodadrefPeer::DATABASE_NAME);
        $criteria->add(SeafoodadrefPeer::GUIDENAME, $pk);

        $v = SeafoodadrefPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Seafoodadref[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SeafoodadrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(SeafoodadrefPeer::DATABASE_NAME);
            $criteria->add(SeafoodadrefPeer::GUIDENAME, $pks, Criteria::IN);
            $objs = SeafoodadrefPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseSeafoodadrefPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSeafoodadrefPeer::buildTableMap();

