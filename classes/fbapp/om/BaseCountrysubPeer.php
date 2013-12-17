<?php


/**
 * Base static class for performing query and update operations on the 'countrysub' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseCountrysubPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'countrysub';

    /** the related Propel class for this table */
    const OM_CLASS = 'Countrysub';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CountrysubTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the SpecCode field */
    const SPECCODE = 'countrysub.SpecCode';

    /** the column name for the Stockcode field */
    const STOCKCODE = 'countrysub.Stockcode';

    /** the column name for the C_Code field */
    const C_CODE = 'countrysub.C_Code';

    /** the column name for the CSub_Code field */
    const CSUB_CODE = 'countrysub.CSub_Code';

    /** the column name for the CSubRefNo field */
    const CSUBREFNO = 'countrysub.CSubRefNo';

    /** the column name for the Status field */
    const STATUS = 'countrysub.Status';

    /** the column name for the Abundance field */
    const ABUNDANCE = 'countrysub.Abundance';

    /** the column name for the RefAbundance field */
    const REFABUNDANCE = 'countrysub.RefAbundance';

    /** the column name for the Comments field */
    const COMMENTS = 'countrysub.Comments';

    /** the column name for the Entered field */
    const ENTERED = 'countrysub.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'countrysub.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'countrysub.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'countrysub.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'countrysub.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'countrysub.DateChecked';

    /** the column name for the autoctr field */
    const AUTOCTR = 'countrysub.autoctr';

    /** the column name for the TS field */
    const TS = 'countrysub.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Countrysub objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Countrysub[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CountrysubPeer::$fieldNames[CountrysubPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode', 'Stockcode', 'CCode', 'CsubCode', 'Csubrefno', 'Status', 'Abundance', 'Refabundance', 'Comments', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Autoctr', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode', 'stockcode', 'cCode', 'csubCode', 'csubrefno', 'status', 'abundance', 'refabundance', 'comments', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'autoctr', 'ts', ),
        BasePeer::TYPE_COLNAME => array (CountrysubPeer::SPECCODE, CountrysubPeer::STOCKCODE, CountrysubPeer::C_CODE, CountrysubPeer::CSUB_CODE, CountrysubPeer::CSUBREFNO, CountrysubPeer::STATUS, CountrysubPeer::ABUNDANCE, CountrysubPeer::REFABUNDANCE, CountrysubPeer::COMMENTS, CountrysubPeer::ENTERED, CountrysubPeer::DATEENTERED, CountrysubPeer::MODIFIED, CountrysubPeer::DATEMODIFIED, CountrysubPeer::EXPERT, CountrysubPeer::DATECHECKED, CountrysubPeer::AUTOCTR, CountrysubPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE', 'STOCKCODE', 'C_CODE', 'CSUB_CODE', 'CSUBREFNO', 'STATUS', 'ABUNDANCE', 'REFABUNDANCE', 'COMMENTS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'AUTOCTR', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode', 'Stockcode', 'C_Code', 'CSub_Code', 'CSubRefNo', 'Status', 'Abundance', 'RefAbundance', 'Comments', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'autoctr', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CountrysubPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode' => 0, 'Stockcode' => 1, 'CCode' => 2, 'CsubCode' => 3, 'Csubrefno' => 4, 'Status' => 5, 'Abundance' => 6, 'Refabundance' => 7, 'Comments' => 8, 'Entered' => 9, 'Dateentered' => 10, 'Modified' => 11, 'Datemodified' => 12, 'Expert' => 13, 'Datechecked' => 14, 'Autoctr' => 15, 'Ts' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode' => 0, 'stockcode' => 1, 'cCode' => 2, 'csubCode' => 3, 'csubrefno' => 4, 'status' => 5, 'abundance' => 6, 'refabundance' => 7, 'comments' => 8, 'entered' => 9, 'dateentered' => 10, 'modified' => 11, 'datemodified' => 12, 'expert' => 13, 'datechecked' => 14, 'autoctr' => 15, 'ts' => 16, ),
        BasePeer::TYPE_COLNAME => array (CountrysubPeer::SPECCODE => 0, CountrysubPeer::STOCKCODE => 1, CountrysubPeer::C_CODE => 2, CountrysubPeer::CSUB_CODE => 3, CountrysubPeer::CSUBREFNO => 4, CountrysubPeer::STATUS => 5, CountrysubPeer::ABUNDANCE => 6, CountrysubPeer::REFABUNDANCE => 7, CountrysubPeer::COMMENTS => 8, CountrysubPeer::ENTERED => 9, CountrysubPeer::DATEENTERED => 10, CountrysubPeer::MODIFIED => 11, CountrysubPeer::DATEMODIFIED => 12, CountrysubPeer::EXPERT => 13, CountrysubPeer::DATECHECKED => 14, CountrysubPeer::AUTOCTR => 15, CountrysubPeer::TS => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE' => 0, 'STOCKCODE' => 1, 'C_CODE' => 2, 'CSUB_CODE' => 3, 'CSUBREFNO' => 4, 'STATUS' => 5, 'ABUNDANCE' => 6, 'REFABUNDANCE' => 7, 'COMMENTS' => 8, 'ENTERED' => 9, 'DATEENTERED' => 10, 'MODIFIED' => 11, 'DATEMODIFIED' => 12, 'EXPERT' => 13, 'DATECHECKED' => 14, 'AUTOCTR' => 15, 'TS' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode' => 0, 'Stockcode' => 1, 'C_Code' => 2, 'CSub_Code' => 3, 'CSubRefNo' => 4, 'Status' => 5, 'Abundance' => 6, 'RefAbundance' => 7, 'Comments' => 8, 'Entered' => 9, 'DateEntered' => 10, 'Modified' => 11, 'DateModified' => 12, 'Expert' => 13, 'DateChecked' => 14, 'autoctr' => 15, 'TS' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $toNames = CountrysubPeer::getFieldNames($toType);
        $key = isset(CountrysubPeer::$fieldKeys[$fromType][$name]) ? CountrysubPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CountrysubPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CountrysubPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CountrysubPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CountrysubPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CountrysubPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CountrysubPeer::SPECCODE);
            $criteria->addSelectColumn(CountrysubPeer::STOCKCODE);
            $criteria->addSelectColumn(CountrysubPeer::C_CODE);
            $criteria->addSelectColumn(CountrysubPeer::CSUB_CODE);
            $criteria->addSelectColumn(CountrysubPeer::CSUBREFNO);
            $criteria->addSelectColumn(CountrysubPeer::STATUS);
            $criteria->addSelectColumn(CountrysubPeer::ABUNDANCE);
            $criteria->addSelectColumn(CountrysubPeer::REFABUNDANCE);
            $criteria->addSelectColumn(CountrysubPeer::COMMENTS);
            $criteria->addSelectColumn(CountrysubPeer::ENTERED);
            $criteria->addSelectColumn(CountrysubPeer::DATEENTERED);
            $criteria->addSelectColumn(CountrysubPeer::MODIFIED);
            $criteria->addSelectColumn(CountrysubPeer::DATEMODIFIED);
            $criteria->addSelectColumn(CountrysubPeer::EXPERT);
            $criteria->addSelectColumn(CountrysubPeer::DATECHECKED);
            $criteria->addSelectColumn(CountrysubPeer::AUTOCTR);
            $criteria->addSelectColumn(CountrysubPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Stockcode');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.CSub_Code');
            $criteria->addSelectColumn($alias . '.CSubRefNo');
            $criteria->addSelectColumn($alias . '.Status');
            $criteria->addSelectColumn($alias . '.Abundance');
            $criteria->addSelectColumn($alias . '.RefAbundance');
            $criteria->addSelectColumn($alias . '.Comments');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.autoctr');
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
        $criteria->setPrimaryTableName(CountrysubPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CountrysubPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CountrysubPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CountrysubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Countrysub
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CountrysubPeer::doSelect($critcopy, $con);
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
        return CountrysubPeer::populateObjects(CountrysubPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CountrysubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CountrysubPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CountrysubPeer::DATABASE_NAME);

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
     * @param Countrysub $obj A Countrysub object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getCCode(), (string) $obj->getCsubCode()));
            } // if key === null
            CountrysubPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Countrysub object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Countrysub) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getCCode(), (string) $value->getCsubCode()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Countrysub object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CountrysubPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Countrysub Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CountrysubPeer::$instances[$key])) {
                return CountrysubPeer::$instances[$key];
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
        foreach (CountrysubPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CountrysubPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to countrysub
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
        if ($row[$startcol + 1] === null && $row[$startcol + 2] === null && $row[$startcol + 3] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 3]));
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

        return array((int) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 3]);
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
        $cls = CountrysubPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CountrysubPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CountrysubPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CountrysubPeer::addInstanceToPool($obj, $key);
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
     * @return array (Countrysub object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CountrysubPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CountrysubPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CountrysubPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CountrysubPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CountrysubPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CountrysubPeer::DATABASE_NAME)->getTable(CountrysubPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCountrysubPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCountrysubPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CountrysubTableMap());
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
        return CountrysubPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Countrysub or Criteria object.
     *
     * @param      mixed $values Criteria or Countrysub object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CountrysubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Countrysub object
        }


        // Set the correct dbName
        $criteria->setDbName(CountrysubPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Countrysub or Criteria object.
     *
     * @param      mixed $values Criteria or Countrysub object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CountrysubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CountrysubPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CountrysubPeer::STOCKCODE);
            $value = $criteria->remove(CountrysubPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(CountrysubPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CountrysubPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CountrysubPeer::C_CODE);
            $value = $criteria->remove(CountrysubPeer::C_CODE);
            if ($value) {
                $selectCriteria->add(CountrysubPeer::C_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CountrysubPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CountrysubPeer::CSUB_CODE);
            $value = $criteria->remove(CountrysubPeer::CSUB_CODE);
            if ($value) {
                $selectCriteria->add(CountrysubPeer::CSUB_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CountrysubPeer::TABLE_NAME);
            }

        } else { // $values is Countrysub object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CountrysubPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the countrysub table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CountrysubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CountrysubPeer::TABLE_NAME, $con, CountrysubPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CountrysubPeer::clearInstancePool();
            CountrysubPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Countrysub or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Countrysub object or primary key or array of primary keys
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
            $con = Propel::getConnection(CountrysubPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CountrysubPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Countrysub) { // it's a model object
            // invalidate the cache for this single object
            CountrysubPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CountrysubPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CountrysubPeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CountrysubPeer::C_CODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CountrysubPeer::CSUB_CODE, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CountrysubPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CountrysubPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CountrysubPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Countrysub object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Countrysub $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CountrysubPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CountrysubPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CountrysubPeer::DATABASE_NAME, CountrysubPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stockcode
     * @param   string $c_code
     * @param   string $csub_code
     * @param      PropelPDO $con
     * @return Countrysub
     */
    public static function retrieveByPK($stockcode, $c_code, $csub_code, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $c_code, (string) $csub_code));
         if (null !== ($obj = CountrysubPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CountrysubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CountrysubPeer::DATABASE_NAME);
        $criteria->add(CountrysubPeer::STOCKCODE, $stockcode);
        $criteria->add(CountrysubPeer::C_CODE, $c_code);
        $criteria->add(CountrysubPeer::CSUB_CODE, $csub_code);
        $v = CountrysubPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCountrysubPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCountrysubPeer::buildTableMap();

