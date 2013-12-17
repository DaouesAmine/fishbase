<?php


/**
 * Base static class for performing query and update operations on the 'swimming' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseSwimmingPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'swimming';

    /** the related Propel class for this table */
    const OM_CLASS = 'Swimming';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SwimmingTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the SpecCode field */
    const SPECCODE = 'swimming.SpecCode';

    /** the column name for the SwimRefMain field */
    const SWIMREFMAIN = 'swimming.SwimRefMain';

    /** the column name for the AdultType field */
    const ADULTTYPE = 'swimming.AdultType';

    /** the column name for the AdultMode field */
    const ADULTMODE = 'swimming.AdultMode';

    /** the column name for the AdultRef field */
    const ADULTREF = 'swimming.AdultRef';

    /** the column name for the Comment field */
    const COMMENT = 'swimming.Comment';

    /** the column name for the Entered field */
    const ENTERED = 'swimming.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'swimming.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'swimming.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'swimming.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'swimming.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'swimming.DateChecked';

    /** the column name for the AspectRatio field */
    const ASPECTRATIO = 'swimming.AspectRatio';

    /** the column name for the AspectRef field */
    const ASPECTREF = 'swimming.AspectRef';

    /** the column name for the TS field */
    const TS = 'swimming.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Swimming objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Swimming[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SwimmingPeer::$fieldNames[SwimmingPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode', 'Swimrefmain', 'Adulttype', 'Adultmode', 'Adultref', 'Comment', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Aspectratio', 'Aspectref', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode', 'swimrefmain', 'adulttype', 'adultmode', 'adultref', 'comment', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'aspectratio', 'aspectref', 'ts', ),
        BasePeer::TYPE_COLNAME => array (SwimmingPeer::SPECCODE, SwimmingPeer::SWIMREFMAIN, SwimmingPeer::ADULTTYPE, SwimmingPeer::ADULTMODE, SwimmingPeer::ADULTREF, SwimmingPeer::COMMENT, SwimmingPeer::ENTERED, SwimmingPeer::DATEENTERED, SwimmingPeer::MODIFIED, SwimmingPeer::DATEMODIFIED, SwimmingPeer::EXPERT, SwimmingPeer::DATECHECKED, SwimmingPeer::ASPECTRATIO, SwimmingPeer::ASPECTREF, SwimmingPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE', 'SWIMREFMAIN', 'ADULTTYPE', 'ADULTMODE', 'ADULTREF', 'COMMENT', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'ASPECTRATIO', 'ASPECTREF', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode', 'SwimRefMain', 'AdultType', 'AdultMode', 'AdultRef', 'Comment', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'AspectRatio', 'AspectRef', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SwimmingPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode' => 0, 'Swimrefmain' => 1, 'Adulttype' => 2, 'Adultmode' => 3, 'Adultref' => 4, 'Comment' => 5, 'Entered' => 6, 'Dateentered' => 7, 'Modified' => 8, 'Datemodified' => 9, 'Expert' => 10, 'Datechecked' => 11, 'Aspectratio' => 12, 'Aspectref' => 13, 'Ts' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode' => 0, 'swimrefmain' => 1, 'adulttype' => 2, 'adultmode' => 3, 'adultref' => 4, 'comment' => 5, 'entered' => 6, 'dateentered' => 7, 'modified' => 8, 'datemodified' => 9, 'expert' => 10, 'datechecked' => 11, 'aspectratio' => 12, 'aspectref' => 13, 'ts' => 14, ),
        BasePeer::TYPE_COLNAME => array (SwimmingPeer::SPECCODE => 0, SwimmingPeer::SWIMREFMAIN => 1, SwimmingPeer::ADULTTYPE => 2, SwimmingPeer::ADULTMODE => 3, SwimmingPeer::ADULTREF => 4, SwimmingPeer::COMMENT => 5, SwimmingPeer::ENTERED => 6, SwimmingPeer::DATEENTERED => 7, SwimmingPeer::MODIFIED => 8, SwimmingPeer::DATEMODIFIED => 9, SwimmingPeer::EXPERT => 10, SwimmingPeer::DATECHECKED => 11, SwimmingPeer::ASPECTRATIO => 12, SwimmingPeer::ASPECTREF => 13, SwimmingPeer::TS => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE' => 0, 'SWIMREFMAIN' => 1, 'ADULTTYPE' => 2, 'ADULTMODE' => 3, 'ADULTREF' => 4, 'COMMENT' => 5, 'ENTERED' => 6, 'DATEENTERED' => 7, 'MODIFIED' => 8, 'DATEMODIFIED' => 9, 'EXPERT' => 10, 'DATECHECKED' => 11, 'ASPECTRATIO' => 12, 'ASPECTREF' => 13, 'TS' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode' => 0, 'SwimRefMain' => 1, 'AdultType' => 2, 'AdultMode' => 3, 'AdultRef' => 4, 'Comment' => 5, 'Entered' => 6, 'DateEntered' => 7, 'Modified' => 8, 'DateModified' => 9, 'Expert' => 10, 'DateChecked' => 11, 'AspectRatio' => 12, 'AspectRef' => 13, 'TS' => 14, ),
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
        $toNames = SwimmingPeer::getFieldNames($toType);
        $key = isset(SwimmingPeer::$fieldKeys[$fromType][$name]) ? SwimmingPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SwimmingPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SwimmingPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SwimmingPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SwimmingPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SwimmingPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SwimmingPeer::SPECCODE);
            $criteria->addSelectColumn(SwimmingPeer::SWIMREFMAIN);
            $criteria->addSelectColumn(SwimmingPeer::ADULTTYPE);
            $criteria->addSelectColumn(SwimmingPeer::ADULTMODE);
            $criteria->addSelectColumn(SwimmingPeer::ADULTREF);
            $criteria->addSelectColumn(SwimmingPeer::COMMENT);
            $criteria->addSelectColumn(SwimmingPeer::ENTERED);
            $criteria->addSelectColumn(SwimmingPeer::DATEENTERED);
            $criteria->addSelectColumn(SwimmingPeer::MODIFIED);
            $criteria->addSelectColumn(SwimmingPeer::DATEMODIFIED);
            $criteria->addSelectColumn(SwimmingPeer::EXPERT);
            $criteria->addSelectColumn(SwimmingPeer::DATECHECKED);
            $criteria->addSelectColumn(SwimmingPeer::ASPECTRATIO);
            $criteria->addSelectColumn(SwimmingPeer::ASPECTREF);
            $criteria->addSelectColumn(SwimmingPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.SwimRefMain');
            $criteria->addSelectColumn($alias . '.AdultType');
            $criteria->addSelectColumn($alias . '.AdultMode');
            $criteria->addSelectColumn($alias . '.AdultRef');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.AspectRatio');
            $criteria->addSelectColumn($alias . '.AspectRef');
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
        $criteria->setPrimaryTableName(SwimmingPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SwimmingPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SwimmingPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SwimmingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Swimming
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SwimmingPeer::doSelect($critcopy, $con);
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
        return SwimmingPeer::populateObjects(SwimmingPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SwimmingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SwimmingPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SwimmingPeer::DATABASE_NAME);

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
     * @param Swimming $obj A Swimming object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getSpeccode();
            } // if key === null
            SwimmingPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Swimming object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Swimming) {
                $key = (string) $value->getSpeccode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Swimming object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SwimmingPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Swimming Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SwimmingPeer::$instances[$key])) {
                return SwimmingPeer::$instances[$key];
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
        foreach (SwimmingPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SwimmingPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to swimming
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
        $cls = SwimmingPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SwimmingPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SwimmingPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SwimmingPeer::addInstanceToPool($obj, $key);
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
     * @return array (Swimming object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SwimmingPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SwimmingPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SwimmingPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SwimmingPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SwimmingPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(SwimmingPeer::DATABASE_NAME)->getTable(SwimmingPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSwimmingPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSwimmingPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SwimmingTableMap());
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
        return SwimmingPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Swimming or Criteria object.
     *
     * @param      mixed $values Criteria or Swimming object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SwimmingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Swimming object
        }


        // Set the correct dbName
        $criteria->setDbName(SwimmingPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Swimming or Criteria object.
     *
     * @param      mixed $values Criteria or Swimming object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SwimmingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SwimmingPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SwimmingPeer::SPECCODE);
            $value = $criteria->remove(SwimmingPeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(SwimmingPeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SwimmingPeer::TABLE_NAME);
            }

        } else { // $values is Swimming object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SwimmingPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the swimming table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SwimmingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SwimmingPeer::TABLE_NAME, $con, SwimmingPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SwimmingPeer::clearInstancePool();
            SwimmingPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Swimming or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Swimming object or primary key or array of primary keys
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
            $con = Propel::getConnection(SwimmingPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SwimmingPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Swimming) { // it's a model object
            // invalidate the cache for this single object
            SwimmingPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SwimmingPeer::DATABASE_NAME);
            $criteria->add(SwimmingPeer::SPECCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                SwimmingPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SwimmingPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SwimmingPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Swimming object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Swimming $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SwimmingPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SwimmingPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SwimmingPeer::DATABASE_NAME, SwimmingPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Swimming
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = SwimmingPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SwimmingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(SwimmingPeer::DATABASE_NAME);
        $criteria->add(SwimmingPeer::SPECCODE, $pk);

        $v = SwimmingPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Swimming[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SwimmingPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(SwimmingPeer::DATABASE_NAME);
            $criteria->add(SwimmingPeer::SPECCODE, $pks, Criteria::IN);
            $objs = SwimmingPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseSwimmingPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSwimmingPeer::buildTableMap();

