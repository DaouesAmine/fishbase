<?php


/**
 * Base static class for performing query and update operations on the 'cas_bibliogen' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseCasBibliogenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'cas_bibliogen';

    /** the related Propel class for this table */
    const OM_CLASS = 'CasBibliogen';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CasBibliogenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the CAS_GEN field */
    const CAS_GEN = 'cas_bibliogen.CAS_GEN';

    /** the column name for the CAS_REF_NO field */
    const CAS_REF_NO = 'cas_bibliogen.CAS_REF_NO';

    /** the column name for the PageNo field */
    const PAGENO = 'cas_bibliogen.PageNo';

    /** the column name for the GenusCode field */
    const GENUSCODE = 'cas_bibliogen.GenusCode';

    /** the column name for the Quote field */
    const QUOTE = 'cas_bibliogen.Quote';

    /** the column name for the Entered field */
    const ENTERED = 'cas_bibliogen.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'cas_bibliogen.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'cas_bibliogen.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'cas_bibliogen.DateModified';

    /** the column name for the TS field */
    const TS = 'cas_bibliogen.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CasBibliogen objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CasBibliogen[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CasBibliogenPeer::$fieldNames[CasBibliogenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('CasGen', 'CasRefNo', 'Pageno', 'Genuscode', 'Quote', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('casGen', 'casRefNo', 'pageno', 'genuscode', 'quote', 'entered', 'dateentered', 'modified', 'datemodified', 'ts', ),
        BasePeer::TYPE_COLNAME => array (CasBibliogenPeer::CAS_GEN, CasBibliogenPeer::CAS_REF_NO, CasBibliogenPeer::PAGENO, CasBibliogenPeer::GENUSCODE, CasBibliogenPeer::QUOTE, CasBibliogenPeer::ENTERED, CasBibliogenPeer::DATEENTERED, CasBibliogenPeer::MODIFIED, CasBibliogenPeer::DATEMODIFIED, CasBibliogenPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CAS_GEN', 'CAS_REF_NO', 'PAGENO', 'GENUSCODE', 'QUOTE', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('CAS_GEN', 'CAS_REF_NO', 'PageNo', 'GenusCode', 'Quote', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CasBibliogenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('CasGen' => 0, 'CasRefNo' => 1, 'Pageno' => 2, 'Genuscode' => 3, 'Quote' => 4, 'Entered' => 5, 'Dateentered' => 6, 'Modified' => 7, 'Datemodified' => 8, 'Ts' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('casGen' => 0, 'casRefNo' => 1, 'pageno' => 2, 'genuscode' => 3, 'quote' => 4, 'entered' => 5, 'dateentered' => 6, 'modified' => 7, 'datemodified' => 8, 'ts' => 9, ),
        BasePeer::TYPE_COLNAME => array (CasBibliogenPeer::CAS_GEN => 0, CasBibliogenPeer::CAS_REF_NO => 1, CasBibliogenPeer::PAGENO => 2, CasBibliogenPeer::GENUSCODE => 3, CasBibliogenPeer::QUOTE => 4, CasBibliogenPeer::ENTERED => 5, CasBibliogenPeer::DATEENTERED => 6, CasBibliogenPeer::MODIFIED => 7, CasBibliogenPeer::DATEMODIFIED => 8, CasBibliogenPeer::TS => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CAS_GEN' => 0, 'CAS_REF_NO' => 1, 'PAGENO' => 2, 'GENUSCODE' => 3, 'QUOTE' => 4, 'ENTERED' => 5, 'DATEENTERED' => 6, 'MODIFIED' => 7, 'DATEMODIFIED' => 8, 'TS' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('CAS_GEN' => 0, 'CAS_REF_NO' => 1, 'PageNo' => 2, 'GenusCode' => 3, 'Quote' => 4, 'Entered' => 5, 'DateEntered' => 6, 'Modified' => 7, 'DateModified' => 8, 'TS' => 9, ),
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
        $toNames = CasBibliogenPeer::getFieldNames($toType);
        $key = isset(CasBibliogenPeer::$fieldKeys[$fromType][$name]) ? CasBibliogenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CasBibliogenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CasBibliogenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CasBibliogenPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CasBibliogenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CasBibliogenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CasBibliogenPeer::CAS_GEN);
            $criteria->addSelectColumn(CasBibliogenPeer::CAS_REF_NO);
            $criteria->addSelectColumn(CasBibliogenPeer::PAGENO);
            $criteria->addSelectColumn(CasBibliogenPeer::GENUSCODE);
            $criteria->addSelectColumn(CasBibliogenPeer::QUOTE);
            $criteria->addSelectColumn(CasBibliogenPeer::ENTERED);
            $criteria->addSelectColumn(CasBibliogenPeer::DATEENTERED);
            $criteria->addSelectColumn(CasBibliogenPeer::MODIFIED);
            $criteria->addSelectColumn(CasBibliogenPeer::DATEMODIFIED);
            $criteria->addSelectColumn(CasBibliogenPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.CAS_GEN');
            $criteria->addSelectColumn($alias . '.CAS_REF_NO');
            $criteria->addSelectColumn($alias . '.PageNo');
            $criteria->addSelectColumn($alias . '.GenusCode');
            $criteria->addSelectColumn($alias . '.Quote');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
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
        $criteria->setPrimaryTableName(CasBibliogenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CasBibliogenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CasBibliogenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CasBibliogenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return CasBibliogen
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CasBibliogenPeer::doSelect($critcopy, $con);
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
        return CasBibliogenPeer::populateObjects(CasBibliogenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CasBibliogenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CasBibliogenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CasBibliogenPeer::DATABASE_NAME);

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
     * @param CasBibliogen $obj A CasBibliogen object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getCasGen(), (string) $obj->getCasRefNo()));
            } // if key === null
            CasBibliogenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CasBibliogen object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CasBibliogen) {
                $key = serialize(array((string) $value->getCasGen(), (string) $value->getCasRefNo()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CasBibliogen object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CasBibliogenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return CasBibliogen Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CasBibliogenPeer::$instances[$key])) {
                return CasBibliogenPeer::$instances[$key];
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
        foreach (CasBibliogenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CasBibliogenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to cas_bibliogen
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 1]);
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
        $cls = CasBibliogenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CasBibliogenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CasBibliogenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CasBibliogenPeer::addInstanceToPool($obj, $key);
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
     * @return array (CasBibliogen object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CasBibliogenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CasBibliogenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CasBibliogenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CasBibliogenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CasBibliogenPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CasBibliogenPeer::DATABASE_NAME)->getTable(CasBibliogenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCasBibliogenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCasBibliogenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CasBibliogenTableMap());
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
        return CasBibliogenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CasBibliogen or Criteria object.
     *
     * @param      mixed $values Criteria or CasBibliogen object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CasBibliogenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CasBibliogen object
        }


        // Set the correct dbName
        $criteria->setDbName(CasBibliogenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CasBibliogen or Criteria object.
     *
     * @param      mixed $values Criteria or CasBibliogen object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CasBibliogenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CasBibliogenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CasBibliogenPeer::CAS_GEN);
            $value = $criteria->remove(CasBibliogenPeer::CAS_GEN);
            if ($value) {
                $selectCriteria->add(CasBibliogenPeer::CAS_GEN, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CasBibliogenPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CasBibliogenPeer::CAS_REF_NO);
            $value = $criteria->remove(CasBibliogenPeer::CAS_REF_NO);
            if ($value) {
                $selectCriteria->add(CasBibliogenPeer::CAS_REF_NO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CasBibliogenPeer::TABLE_NAME);
            }

        } else { // $values is CasBibliogen object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CasBibliogenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the cas_bibliogen table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CasBibliogenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CasBibliogenPeer::TABLE_NAME, $con, CasBibliogenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CasBibliogenPeer::clearInstancePool();
            CasBibliogenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CasBibliogen or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CasBibliogen object or primary key or array of primary keys
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
            $con = Propel::getConnection(CasBibliogenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CasBibliogenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CasBibliogen) { // it's a model object
            // invalidate the cache for this single object
            CasBibliogenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CasBibliogenPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CasBibliogenPeer::CAS_GEN, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CasBibliogenPeer::CAS_REF_NO, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CasBibliogenPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CasBibliogenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CasBibliogenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CasBibliogen object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param CasBibliogen $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CasBibliogenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CasBibliogenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CasBibliogenPeer::DATABASE_NAME, CasBibliogenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $cas_gen
     * @param   int $cas_ref_no
     * @param      PropelPDO $con
     * @return CasBibliogen
     */
    public static function retrieveByPK($cas_gen, $cas_ref_no, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $cas_gen, (string) $cas_ref_no));
         if (null !== ($obj = CasBibliogenPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CasBibliogenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CasBibliogenPeer::DATABASE_NAME);
        $criteria->add(CasBibliogenPeer::CAS_GEN, $cas_gen);
        $criteria->add(CasBibliogenPeer::CAS_REF_NO, $cas_ref_no);
        $v = CasBibliogenPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCasBibliogenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCasBibliogenPeer::buildTableMap();

