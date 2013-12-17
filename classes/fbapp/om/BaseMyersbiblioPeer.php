<?php


/**
 * Base static class for performing query and update operations on the 'myersbiblio' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseMyersbiblioPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'myersbiblio';

    /** the related Propel class for this table */
    const OM_CLASS = 'Myersbiblio';

    /** the related TableMap class for this table */
    const TM_CLASS = 'MyersbiblioTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the SpecCode field */
    const SPECCODE = 'myersbiblio.SpecCode';

    /** the column name for the ID field */
    const ID = 'myersbiblio.ID';

    /** the column name for the RefNo field */
    const REFNO = 'myersbiblio.RefNo';

    /** the column name for the Genus field */
    const GENUS = 'myersbiblio.Genus';

    /** the column name for the Species field */
    const SPECIES = 'myersbiblio.Species';

    /** the column name for the RefPage field */
    const REFPAGE = 'myersbiblio.RefPage';

    /** the column name for the Locality field */
    const LOCALITY = 'myersbiblio.Locality';

    /** the column name for the Comment field */
    const COMMENT = 'myersbiblio.Comment';

    /** the column name for the TS field */
    const TS = 'myersbiblio.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Myersbiblio objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Myersbiblio[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. MyersbiblioPeer::$fieldNames[MyersbiblioPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode', 'Id', 'Refno', 'Genus', 'Species', 'Refpage', 'Locality', 'Comment', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode', 'id', 'refno', 'genus', 'species', 'refpage', 'locality', 'comment', 'ts', ),
        BasePeer::TYPE_COLNAME => array (MyersbiblioPeer::SPECCODE, MyersbiblioPeer::ID, MyersbiblioPeer::REFNO, MyersbiblioPeer::GENUS, MyersbiblioPeer::SPECIES, MyersbiblioPeer::REFPAGE, MyersbiblioPeer::LOCALITY, MyersbiblioPeer::COMMENT, MyersbiblioPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE', 'ID', 'REFNO', 'GENUS', 'SPECIES', 'REFPAGE', 'LOCALITY', 'COMMENT', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode', 'ID', 'RefNo', 'Genus', 'Species', 'RefPage', 'Locality', 'Comment', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. MyersbiblioPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode' => 0, 'Id' => 1, 'Refno' => 2, 'Genus' => 3, 'Species' => 4, 'Refpage' => 5, 'Locality' => 6, 'Comment' => 7, 'Ts' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode' => 0, 'id' => 1, 'refno' => 2, 'genus' => 3, 'species' => 4, 'refpage' => 5, 'locality' => 6, 'comment' => 7, 'ts' => 8, ),
        BasePeer::TYPE_COLNAME => array (MyersbiblioPeer::SPECCODE => 0, MyersbiblioPeer::ID => 1, MyersbiblioPeer::REFNO => 2, MyersbiblioPeer::GENUS => 3, MyersbiblioPeer::SPECIES => 4, MyersbiblioPeer::REFPAGE => 5, MyersbiblioPeer::LOCALITY => 6, MyersbiblioPeer::COMMENT => 7, MyersbiblioPeer::TS => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE' => 0, 'ID' => 1, 'REFNO' => 2, 'GENUS' => 3, 'SPECIES' => 4, 'REFPAGE' => 5, 'LOCALITY' => 6, 'COMMENT' => 7, 'TS' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode' => 0, 'ID' => 1, 'RefNo' => 2, 'Genus' => 3, 'Species' => 4, 'RefPage' => 5, 'Locality' => 6, 'Comment' => 7, 'TS' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $toNames = MyersbiblioPeer::getFieldNames($toType);
        $key = isset(MyersbiblioPeer::$fieldKeys[$fromType][$name]) ? MyersbiblioPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(MyersbiblioPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, MyersbiblioPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return MyersbiblioPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. MyersbiblioPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(MyersbiblioPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(MyersbiblioPeer::SPECCODE);
            $criteria->addSelectColumn(MyersbiblioPeer::ID);
            $criteria->addSelectColumn(MyersbiblioPeer::REFNO);
            $criteria->addSelectColumn(MyersbiblioPeer::GENUS);
            $criteria->addSelectColumn(MyersbiblioPeer::SPECIES);
            $criteria->addSelectColumn(MyersbiblioPeer::REFPAGE);
            $criteria->addSelectColumn(MyersbiblioPeer::LOCALITY);
            $criteria->addSelectColumn(MyersbiblioPeer::COMMENT);
            $criteria->addSelectColumn(MyersbiblioPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.RefNo');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.RefPage');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.Comment');
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
        $criteria->setPrimaryTableName(MyersbiblioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MyersbiblioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(MyersbiblioPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(MyersbiblioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Myersbiblio
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = MyersbiblioPeer::doSelect($critcopy, $con);
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
        return MyersbiblioPeer::populateObjects(MyersbiblioPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(MyersbiblioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            MyersbiblioPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(MyersbiblioPeer::DATABASE_NAME);

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
     * @param Myersbiblio $obj A Myersbiblio object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getSpeccode(), (string) $obj->getId(), (string) $obj->getRefno()));
            } // if key === null
            MyersbiblioPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Myersbiblio object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Myersbiblio) {
                $key = serialize(array((string) $value->getSpeccode(), (string) $value->getId(), (string) $value->getRefno()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Myersbiblio object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(MyersbiblioPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Myersbiblio Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(MyersbiblioPeer::$instances[$key])) {
                return MyersbiblioPeer::$instances[$key];
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
        foreach (MyersbiblioPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        MyersbiblioPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to myersbiblio
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 2] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 2]));
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

        return array((int) $row[$startcol], (string) $row[$startcol + 1], (int) $row[$startcol + 2]);
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
        $cls = MyersbiblioPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = MyersbiblioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = MyersbiblioPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MyersbiblioPeer::addInstanceToPool($obj, $key);
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
     * @return array (Myersbiblio object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = MyersbiblioPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = MyersbiblioPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + MyersbiblioPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MyersbiblioPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            MyersbiblioPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(MyersbiblioPeer::DATABASE_NAME)->getTable(MyersbiblioPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseMyersbiblioPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseMyersbiblioPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \MyersbiblioTableMap());
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
        return MyersbiblioPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Myersbiblio or Criteria object.
     *
     * @param      mixed $values Criteria or Myersbiblio object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MyersbiblioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Myersbiblio object
        }


        // Set the correct dbName
        $criteria->setDbName(MyersbiblioPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Myersbiblio or Criteria object.
     *
     * @param      mixed $values Criteria or Myersbiblio object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MyersbiblioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(MyersbiblioPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(MyersbiblioPeer::SPECCODE);
            $value = $criteria->remove(MyersbiblioPeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(MyersbiblioPeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MyersbiblioPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(MyersbiblioPeer::ID);
            $value = $criteria->remove(MyersbiblioPeer::ID);
            if ($value) {
                $selectCriteria->add(MyersbiblioPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MyersbiblioPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(MyersbiblioPeer::REFNO);
            $value = $criteria->remove(MyersbiblioPeer::REFNO);
            if ($value) {
                $selectCriteria->add(MyersbiblioPeer::REFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MyersbiblioPeer::TABLE_NAME);
            }

        } else { // $values is Myersbiblio object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(MyersbiblioPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the myersbiblio table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MyersbiblioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(MyersbiblioPeer::TABLE_NAME, $con, MyersbiblioPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MyersbiblioPeer::clearInstancePool();
            MyersbiblioPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Myersbiblio or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Myersbiblio object or primary key or array of primary keys
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
            $con = Propel::getConnection(MyersbiblioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            MyersbiblioPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Myersbiblio) { // it's a model object
            // invalidate the cache for this single object
            MyersbiblioPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MyersbiblioPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(MyersbiblioPeer::SPECCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(MyersbiblioPeer::ID, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(MyersbiblioPeer::REFNO, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                MyersbiblioPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(MyersbiblioPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            MyersbiblioPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Myersbiblio object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Myersbiblio $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(MyersbiblioPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(MyersbiblioPeer::TABLE_NAME);

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

        return BasePeer::doValidate(MyersbiblioPeer::DATABASE_NAME, MyersbiblioPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $speccode
     * @param   string $id
     * @param   int $refno
     * @param      PropelPDO $con
     * @return Myersbiblio
     */
    public static function retrieveByPK($speccode, $id, $refno, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $speccode, (string) $id, (string) $refno));
         if (null !== ($obj = MyersbiblioPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(MyersbiblioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(MyersbiblioPeer::DATABASE_NAME);
        $criteria->add(MyersbiblioPeer::SPECCODE, $speccode);
        $criteria->add(MyersbiblioPeer::ID, $id);
        $criteria->add(MyersbiblioPeer::REFNO, $refno);
        $v = MyersbiblioPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseMyersbiblioPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMyersbiblioPeer::buildTableMap();

