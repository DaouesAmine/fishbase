<?php


/**
 * Base static class for performing query and update operations on the 'popll' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BasePopllPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'popll';

    /** the related Propel class for this table */
    const OM_CLASS = 'Popll';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PopllTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 22;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 22;

    /** the column name for the autoctr field */
    const AUTOCTR = 'popll.autoctr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'popll.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'popll.SpecCode';

    /** the column name for the Length1 field */
    const LENGTH1 = 'popll.Length1';

    /** the column name for the Length2 field */
    const LENGTH2 = 'popll.Length2';

    /** the column name for the a field */
    const A = 'popll.a';

    /** the column name for the b field */
    const B = 'popll.b';

    /** the column name for the LengthMin field */
    const LENGTHMIN = 'popll.LengthMin';

    /** the column name for the LengthMax field */
    const LENGTHMAX = 'popll.LengthMax';

    /** the column name for the Type field */
    const TYPE = 'popll.Type';

    /** the column name for the Number field */
    const NUMBER = 'popll.Number';

    /** the column name for the r field */
    const R = 'popll.r';

    /** the column name for the Sex field */
    const SEX = 'popll.Sex';

    /** the column name for the Comment field */
    const COMMENT = 'popll.Comment';

    /** the column name for the DataRef field */
    const DATAREF = 'popll.DataRef';

    /** the column name for the Entered field */
    const ENTERED = 'popll.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'popll.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'popll.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'popll.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'popll.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'popll.DateChecked';

    /** the column name for the TS field */
    const TS = 'popll.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Popll objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Popll[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PopllPeer::$fieldNames[PopllPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Length1', 'Length2', 'A', 'B', 'Lengthmin', 'Lengthmax', 'Type', 'Number', 'R', 'Sex', 'Comment', 'Dataref', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'length1', 'length2', 'a', 'b', 'lengthmin', 'lengthmax', 'type', 'number', 'r', 'sex', 'comment', 'dataref', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (PopllPeer::AUTOCTR, PopllPeer::STOCKCODE, PopllPeer::SPECCODE, PopllPeer::LENGTH1, PopllPeer::LENGTH2, PopllPeer::A, PopllPeer::B, PopllPeer::LENGTHMIN, PopllPeer::LENGTHMAX, PopllPeer::TYPE, PopllPeer::NUMBER, PopllPeer::R, PopllPeer::SEX, PopllPeer::COMMENT, PopllPeer::DATAREF, PopllPeer::ENTERED, PopllPeer::DATEENTERED, PopllPeer::MODIFIED, PopllPeer::DATEMODIFIED, PopllPeer::EXPERT, PopllPeer::DATECHECKED, PopllPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'LENGTH1', 'LENGTH2', 'A', 'B', 'LENGTHMIN', 'LENGTHMAX', 'TYPE', 'NUMBER', 'R', 'SEX', 'COMMENT', 'DATAREF', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'StockCode', 'SpecCode', 'Length1', 'Length2', 'a', 'b', 'LengthMin', 'LengthMax', 'Type', 'Number', 'r', 'Sex', 'Comment', 'DataRef', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PopllPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Length1' => 3, 'Length2' => 4, 'A' => 5, 'B' => 6, 'Lengthmin' => 7, 'Lengthmax' => 8, 'Type' => 9, 'Number' => 10, 'R' => 11, 'Sex' => 12, 'Comment' => 13, 'Dataref' => 14, 'Entered' => 15, 'Dateentered' => 16, 'Modified' => 17, 'Datemodified' => 18, 'Expert' => 19, 'Datechecked' => 20, 'Ts' => 21, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'length1' => 3, 'length2' => 4, 'a' => 5, 'b' => 6, 'lengthmin' => 7, 'lengthmax' => 8, 'type' => 9, 'number' => 10, 'r' => 11, 'sex' => 12, 'comment' => 13, 'dataref' => 14, 'entered' => 15, 'dateentered' => 16, 'modified' => 17, 'datemodified' => 18, 'expert' => 19, 'datechecked' => 20, 'ts' => 21, ),
        BasePeer::TYPE_COLNAME => array (PopllPeer::AUTOCTR => 0, PopllPeer::STOCKCODE => 1, PopllPeer::SPECCODE => 2, PopllPeer::LENGTH1 => 3, PopllPeer::LENGTH2 => 4, PopllPeer::A => 5, PopllPeer::B => 6, PopllPeer::LENGTHMIN => 7, PopllPeer::LENGTHMAX => 8, PopllPeer::TYPE => 9, PopllPeer::NUMBER => 10, PopllPeer::R => 11, PopllPeer::SEX => 12, PopllPeer::COMMENT => 13, PopllPeer::DATAREF => 14, PopllPeer::ENTERED => 15, PopllPeer::DATEENTERED => 16, PopllPeer::MODIFIED => 17, PopllPeer::DATEMODIFIED => 18, PopllPeer::EXPERT => 19, PopllPeer::DATECHECKED => 20, PopllPeer::TS => 21, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'LENGTH1' => 3, 'LENGTH2' => 4, 'A' => 5, 'B' => 6, 'LENGTHMIN' => 7, 'LENGTHMAX' => 8, 'TYPE' => 9, 'NUMBER' => 10, 'R' => 11, 'SEX' => 12, 'COMMENT' => 13, 'DATAREF' => 14, 'ENTERED' => 15, 'DATEENTERED' => 16, 'MODIFIED' => 17, 'DATEMODIFIED' => 18, 'EXPERT' => 19, 'DATECHECKED' => 20, 'TS' => 21, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'Length1' => 3, 'Length2' => 4, 'a' => 5, 'b' => 6, 'LengthMin' => 7, 'LengthMax' => 8, 'Type' => 9, 'Number' => 10, 'r' => 11, 'Sex' => 12, 'Comment' => 13, 'DataRef' => 14, 'Entered' => 15, 'DateEntered' => 16, 'Modified' => 17, 'DateModified' => 18, 'Expert' => 19, 'DateChecked' => 20, 'TS' => 21, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
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
        $toNames = PopllPeer::getFieldNames($toType);
        $key = isset(PopllPeer::$fieldKeys[$fromType][$name]) ? PopllPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PopllPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PopllPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PopllPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PopllPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PopllPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PopllPeer::AUTOCTR);
            $criteria->addSelectColumn(PopllPeer::STOCKCODE);
            $criteria->addSelectColumn(PopllPeer::SPECCODE);
            $criteria->addSelectColumn(PopllPeer::LENGTH1);
            $criteria->addSelectColumn(PopllPeer::LENGTH2);
            $criteria->addSelectColumn(PopllPeer::A);
            $criteria->addSelectColumn(PopllPeer::B);
            $criteria->addSelectColumn(PopllPeer::LENGTHMIN);
            $criteria->addSelectColumn(PopllPeer::LENGTHMAX);
            $criteria->addSelectColumn(PopllPeer::TYPE);
            $criteria->addSelectColumn(PopllPeer::NUMBER);
            $criteria->addSelectColumn(PopllPeer::R);
            $criteria->addSelectColumn(PopllPeer::SEX);
            $criteria->addSelectColumn(PopllPeer::COMMENT);
            $criteria->addSelectColumn(PopllPeer::DATAREF);
            $criteria->addSelectColumn(PopllPeer::ENTERED);
            $criteria->addSelectColumn(PopllPeer::DATEENTERED);
            $criteria->addSelectColumn(PopllPeer::MODIFIED);
            $criteria->addSelectColumn(PopllPeer::DATEMODIFIED);
            $criteria->addSelectColumn(PopllPeer::EXPERT);
            $criteria->addSelectColumn(PopllPeer::DATECHECKED);
            $criteria->addSelectColumn(PopllPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Length1');
            $criteria->addSelectColumn($alias . '.Length2');
            $criteria->addSelectColumn($alias . '.a');
            $criteria->addSelectColumn($alias . '.b');
            $criteria->addSelectColumn($alias . '.LengthMin');
            $criteria->addSelectColumn($alias . '.LengthMax');
            $criteria->addSelectColumn($alias . '.Type');
            $criteria->addSelectColumn($alias . '.Number');
            $criteria->addSelectColumn($alias . '.r');
            $criteria->addSelectColumn($alias . '.Sex');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.DataRef');
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
        $criteria->setPrimaryTableName(PopllPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PopllPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PopllPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PopllPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Popll
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PopllPeer::doSelect($critcopy, $con);
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
        return PopllPeer::populateObjects(PopllPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PopllPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PopllPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PopllPeer::DATABASE_NAME);

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
     * @param Popll $obj A Popll object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            PopllPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Popll object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Popll) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Popll object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PopllPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Popll Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PopllPeer::$instances[$key])) {
                return PopllPeer::$instances[$key];
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
        foreach (PopllPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PopllPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to popll
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
        $cls = PopllPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PopllPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PopllPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PopllPeer::addInstanceToPool($obj, $key);
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
     * @return array (Popll object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PopllPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PopllPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PopllPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PopllPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PopllPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(PopllPeer::DATABASE_NAME)->getTable(PopllPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePopllPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePopllPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PopllTableMap());
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
        return PopllPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Popll or Criteria object.
     *
     * @param      mixed $values Criteria or Popll object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopllPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Popll object
        }

        if ($criteria->containsKey(PopllPeer::AUTOCTR) && $criteria->keyContainsValue(PopllPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PopllPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PopllPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Popll or Criteria object.
     *
     * @param      mixed $values Criteria or Popll object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopllPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PopllPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PopllPeer::AUTOCTR);
            $value = $criteria->remove(PopllPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(PopllPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PopllPeer::TABLE_NAME);
            }

        } else { // $values is Popll object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PopllPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the popll table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopllPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PopllPeer::TABLE_NAME, $con, PopllPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PopllPeer::clearInstancePool();
            PopllPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Popll or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Popll object or primary key or array of primary keys
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
            $con = Propel::getConnection(PopllPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PopllPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Popll) { // it's a model object
            // invalidate the cache for this single object
            PopllPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PopllPeer::DATABASE_NAME);
            $criteria->add(PopllPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PopllPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PopllPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PopllPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Popll object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Popll $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PopllPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PopllPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PopllPeer::DATABASE_NAME, PopllPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Popll
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PopllPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PopllPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PopllPeer::DATABASE_NAME);
        $criteria->add(PopllPeer::AUTOCTR, $pk);

        $v = PopllPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Popll[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopllPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PopllPeer::DATABASE_NAME);
            $criteria->add(PopllPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = PopllPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePopllPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePopllPeer::buildTableMap();

