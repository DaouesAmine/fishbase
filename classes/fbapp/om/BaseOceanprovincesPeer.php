<?php


/**
 * Base static class for performing query and update operations on the 'oceanprovinces' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseOceanprovincesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'oceanprovinces';

    /** the related Propel class for this table */
    const OM_CLASS = 'Oceanprovinces';

    /** the related TableMap class for this table */
    const TM_CLASS = 'OceanprovincesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the StockCode field */
    const STOCKCODE = 'oceanprovinces.StockCode';

    /** the column name for the RegionNo field */
    const REGIONNO = 'oceanprovinces.RegionNo';

    /** the column name for the SpecCode field */
    const SPECCODE = 'oceanprovinces.SpecCode';

    /** the column name for the Status field */
    const STATUS = 'oceanprovinces.Status';

    /** the column name for the ProvinceRef field */
    const PROVINCEREF = 'oceanprovinces.ProvinceRef';

    /** the column name for the Entered field */
    const ENTERED = 'oceanprovinces.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'oceanprovinces.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'oceanprovinces.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'oceanprovinces.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'oceanprovinces.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'oceanprovinces.DateChecked';

    /** the column name for the TS field */
    const TS = 'oceanprovinces.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Oceanprovinces objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Oceanprovinces[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. OceanprovincesPeer::$fieldNames[OceanprovincesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode', 'Regionno', 'Speccode', 'Status', 'Provinceref', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode', 'regionno', 'speccode', 'status', 'provinceref', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (OceanprovincesPeer::STOCKCODE, OceanprovincesPeer::REGIONNO, OceanprovincesPeer::SPECCODE, OceanprovincesPeer::STATUS, OceanprovincesPeer::PROVINCEREF, OceanprovincesPeer::ENTERED, OceanprovincesPeer::DATEENTERED, OceanprovincesPeer::MODIFIED, OceanprovincesPeer::DATEMODIFIED, OceanprovincesPeer::EXPERT, OceanprovincesPeer::DATECHECKED, OceanprovincesPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE', 'REGIONNO', 'SPECCODE', 'STATUS', 'PROVINCEREF', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode', 'RegionNo', 'SpecCode', 'Status', 'ProvinceRef', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. OceanprovincesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode' => 0, 'Regionno' => 1, 'Speccode' => 2, 'Status' => 3, 'Provinceref' => 4, 'Entered' => 5, 'Dateentered' => 6, 'Modified' => 7, 'Datemodified' => 8, 'Expert' => 9, 'Datechecked' => 10, 'Ts' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode' => 0, 'regionno' => 1, 'speccode' => 2, 'status' => 3, 'provinceref' => 4, 'entered' => 5, 'dateentered' => 6, 'modified' => 7, 'datemodified' => 8, 'expert' => 9, 'datechecked' => 10, 'ts' => 11, ),
        BasePeer::TYPE_COLNAME => array (OceanprovincesPeer::STOCKCODE => 0, OceanprovincesPeer::REGIONNO => 1, OceanprovincesPeer::SPECCODE => 2, OceanprovincesPeer::STATUS => 3, OceanprovincesPeer::PROVINCEREF => 4, OceanprovincesPeer::ENTERED => 5, OceanprovincesPeer::DATEENTERED => 6, OceanprovincesPeer::MODIFIED => 7, OceanprovincesPeer::DATEMODIFIED => 8, OceanprovincesPeer::EXPERT => 9, OceanprovincesPeer::DATECHECKED => 10, OceanprovincesPeer::TS => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE' => 0, 'REGIONNO' => 1, 'SPECCODE' => 2, 'STATUS' => 3, 'PROVINCEREF' => 4, 'ENTERED' => 5, 'DATEENTERED' => 6, 'MODIFIED' => 7, 'DATEMODIFIED' => 8, 'EXPERT' => 9, 'DATECHECKED' => 10, 'TS' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode' => 0, 'RegionNo' => 1, 'SpecCode' => 2, 'Status' => 3, 'ProvinceRef' => 4, 'Entered' => 5, 'DateEntered' => 6, 'Modified' => 7, 'DateModified' => 8, 'Expert' => 9, 'DateChecked' => 10, 'TS' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $toNames = OceanprovincesPeer::getFieldNames($toType);
        $key = isset(OceanprovincesPeer::$fieldKeys[$fromType][$name]) ? OceanprovincesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(OceanprovincesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, OceanprovincesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return OceanprovincesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. OceanprovincesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(OceanprovincesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(OceanprovincesPeer::STOCKCODE);
            $criteria->addSelectColumn(OceanprovincesPeer::REGIONNO);
            $criteria->addSelectColumn(OceanprovincesPeer::SPECCODE);
            $criteria->addSelectColumn(OceanprovincesPeer::STATUS);
            $criteria->addSelectColumn(OceanprovincesPeer::PROVINCEREF);
            $criteria->addSelectColumn(OceanprovincesPeer::ENTERED);
            $criteria->addSelectColumn(OceanprovincesPeer::DATEENTERED);
            $criteria->addSelectColumn(OceanprovincesPeer::MODIFIED);
            $criteria->addSelectColumn(OceanprovincesPeer::DATEMODIFIED);
            $criteria->addSelectColumn(OceanprovincesPeer::EXPERT);
            $criteria->addSelectColumn(OceanprovincesPeer::DATECHECKED);
            $criteria->addSelectColumn(OceanprovincesPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.RegionNo');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Status');
            $criteria->addSelectColumn($alias . '.ProvinceRef');
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
        $criteria->setPrimaryTableName(OceanprovincesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OceanprovincesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(OceanprovincesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(OceanprovincesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Oceanprovinces
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = OceanprovincesPeer::doSelect($critcopy, $con);
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
        return OceanprovincesPeer::populateObjects(OceanprovincesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(OceanprovincesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OceanprovincesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(OceanprovincesPeer::DATABASE_NAME);

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
     * @param Oceanprovinces $obj A Oceanprovinces object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getRegionno()));
            } // if key === null
            OceanprovincesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Oceanprovinces object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Oceanprovinces) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getRegionno()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oceanprovinces object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(OceanprovincesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Oceanprovinces Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(OceanprovincesPeer::$instances[$key])) {
                return OceanprovincesPeer::$instances[$key];
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
        foreach (OceanprovincesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        OceanprovincesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to oceanprovinces
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

        return array((double) $row[$startcol], (int) $row[$startcol + 1]);
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
        $cls = OceanprovincesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = OceanprovincesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = OceanprovincesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OceanprovincesPeer::addInstanceToPool($obj, $key);
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
     * @return array (Oceanprovinces object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = OceanprovincesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = OceanprovincesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + OceanprovincesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OceanprovincesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            OceanprovincesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(OceanprovincesPeer::DATABASE_NAME)->getTable(OceanprovincesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseOceanprovincesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseOceanprovincesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \OceanprovincesTableMap());
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
        return OceanprovincesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Oceanprovinces or Criteria object.
     *
     * @param      mixed $values Criteria or Oceanprovinces object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OceanprovincesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Oceanprovinces object
        }


        // Set the correct dbName
        $criteria->setDbName(OceanprovincesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Oceanprovinces or Criteria object.
     *
     * @param      mixed $values Criteria or Oceanprovinces object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OceanprovincesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(OceanprovincesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(OceanprovincesPeer::STOCKCODE);
            $value = $criteria->remove(OceanprovincesPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(OceanprovincesPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OceanprovincesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(OceanprovincesPeer::REGIONNO);
            $value = $criteria->remove(OceanprovincesPeer::REGIONNO);
            if ($value) {
                $selectCriteria->add(OceanprovincesPeer::REGIONNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OceanprovincesPeer::TABLE_NAME);
            }

        } else { // $values is Oceanprovinces object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(OceanprovincesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the oceanprovinces table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OceanprovincesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(OceanprovincesPeer::TABLE_NAME, $con, OceanprovincesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OceanprovincesPeer::clearInstancePool();
            OceanprovincesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Oceanprovinces or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Oceanprovinces object or primary key or array of primary keys
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
            $con = Propel::getConnection(OceanprovincesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            OceanprovincesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Oceanprovinces) { // it's a model object
            // invalidate the cache for this single object
            OceanprovincesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OceanprovincesPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(OceanprovincesPeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(OceanprovincesPeer::REGIONNO, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                OceanprovincesPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(OceanprovincesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            OceanprovincesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Oceanprovinces object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Oceanprovinces $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(OceanprovincesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(OceanprovincesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(OceanprovincesPeer::DATABASE_NAME, OceanprovincesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   double $stockcode
     * @param   int $regionno
     * @param      PropelPDO $con
     * @return Oceanprovinces
     */
    public static function retrieveByPK($stockcode, $regionno, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $regionno));
         if (null !== ($obj = OceanprovincesPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(OceanprovincesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(OceanprovincesPeer::DATABASE_NAME);
        $criteria->add(OceanprovincesPeer::STOCKCODE, $stockcode);
        $criteria->add(OceanprovincesPeer::REGIONNO, $regionno);
        $v = OceanprovincesPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseOceanprovincesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOceanprovincesPeer::buildTableMap();

