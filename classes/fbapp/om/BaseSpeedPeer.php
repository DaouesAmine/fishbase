<?php


/**
 * Base static class for performing query and update operations on the 'speed' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseSpeedPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'speed';

    /** the related Propel class for this table */
    const OM_CLASS = 'Speed';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SpeedTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 22;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 22;

    /** the column name for the autoctr field */
    const AUTOCTR = 'speed.autoctr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'speed.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'speed.SpecCode';

    /** the column name for the SpeedRefNo field */
    const SPEEDREFNO = 'speed.SpeedRefNo';

    /** the column name for the Length field */
    const LENGTH = 'speed.Length';

    /** the column name for the LengthType field */
    const LENGTHTYPE = 'speed.LengthType';

    /** the column name for the SpeedLS field */
    const SPEEDLS = 'speed.SpeedLS';

    /** the column name for the LengthTypeSpeed field */
    const LENGTHTYPESPEED = 'speed.LengthTypeSpeed';

    /** the column name for the Speedms field */
    const SPEEDMS = 'speed.Speedms';

    /** the column name for the Mode field */
    const MODE = 'speed.Mode';

    /** the column name for the DataRef field */
    const DATAREF = 'speed.DataRef';

    /** the column name for the Reliable field */
    const RELIABLE = 'speed.Reliable';

    /** the column name for the Comment field */
    const COMMENT = 'speed.Comment';

    /** the column name for the Entered field */
    const ENTERED = 'speed.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'speed.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'speed.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'speed.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'speed.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'speed.DateChecked';

    /** the column name for the SLa field */
    const SLA = 'speed.SLa';

    /** the column name for the SLb field */
    const SLB = 'speed.SLb';

    /** the column name for the TS field */
    const TS = 'speed.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Speed objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Speed[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SpeedPeer::$fieldNames[SpeedPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Speedrefno', 'Length', 'Lengthtype', 'Speedls', 'Lengthtypespeed', 'Speedms', 'Mode', 'Dataref', 'Reliable', 'Comment', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Sla', 'Slb', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'speedrefno', 'length', 'lengthtype', 'speedls', 'lengthtypespeed', 'speedms', 'mode', 'dataref', 'reliable', 'comment', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'sla', 'slb', 'ts', ),
        BasePeer::TYPE_COLNAME => array (SpeedPeer::AUTOCTR, SpeedPeer::STOCKCODE, SpeedPeer::SPECCODE, SpeedPeer::SPEEDREFNO, SpeedPeer::LENGTH, SpeedPeer::LENGTHTYPE, SpeedPeer::SPEEDLS, SpeedPeer::LENGTHTYPESPEED, SpeedPeer::SPEEDMS, SpeedPeer::MODE, SpeedPeer::DATAREF, SpeedPeer::RELIABLE, SpeedPeer::COMMENT, SpeedPeer::ENTERED, SpeedPeer::DATEENTERED, SpeedPeer::MODIFIED, SpeedPeer::DATEMODIFIED, SpeedPeer::EXPERT, SpeedPeer::DATECHECKED, SpeedPeer::SLA, SpeedPeer::SLB, SpeedPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'SPEEDREFNO', 'LENGTH', 'LENGTHTYPE', 'SPEEDLS', 'LENGTHTYPESPEED', 'SPEEDMS', 'MODE', 'DATAREF', 'RELIABLE', 'COMMENT', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'SLA', 'SLB', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'StockCode', 'SpecCode', 'SpeedRefNo', 'Length', 'LengthType', 'SpeedLS', 'LengthTypeSpeed', 'Speedms', 'Mode', 'DataRef', 'Reliable', 'Comment', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'SLa', 'SLb', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SpeedPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Speedrefno' => 3, 'Length' => 4, 'Lengthtype' => 5, 'Speedls' => 6, 'Lengthtypespeed' => 7, 'Speedms' => 8, 'Mode' => 9, 'Dataref' => 10, 'Reliable' => 11, 'Comment' => 12, 'Entered' => 13, 'Dateentered' => 14, 'Modified' => 15, 'Datemodified' => 16, 'Expert' => 17, 'Datechecked' => 18, 'Sla' => 19, 'Slb' => 20, 'Ts' => 21, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'speedrefno' => 3, 'length' => 4, 'lengthtype' => 5, 'speedls' => 6, 'lengthtypespeed' => 7, 'speedms' => 8, 'mode' => 9, 'dataref' => 10, 'reliable' => 11, 'comment' => 12, 'entered' => 13, 'dateentered' => 14, 'modified' => 15, 'datemodified' => 16, 'expert' => 17, 'datechecked' => 18, 'sla' => 19, 'slb' => 20, 'ts' => 21, ),
        BasePeer::TYPE_COLNAME => array (SpeedPeer::AUTOCTR => 0, SpeedPeer::STOCKCODE => 1, SpeedPeer::SPECCODE => 2, SpeedPeer::SPEEDREFNO => 3, SpeedPeer::LENGTH => 4, SpeedPeer::LENGTHTYPE => 5, SpeedPeer::SPEEDLS => 6, SpeedPeer::LENGTHTYPESPEED => 7, SpeedPeer::SPEEDMS => 8, SpeedPeer::MODE => 9, SpeedPeer::DATAREF => 10, SpeedPeer::RELIABLE => 11, SpeedPeer::COMMENT => 12, SpeedPeer::ENTERED => 13, SpeedPeer::DATEENTERED => 14, SpeedPeer::MODIFIED => 15, SpeedPeer::DATEMODIFIED => 16, SpeedPeer::EXPERT => 17, SpeedPeer::DATECHECKED => 18, SpeedPeer::SLA => 19, SpeedPeer::SLB => 20, SpeedPeer::TS => 21, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'SPEEDREFNO' => 3, 'LENGTH' => 4, 'LENGTHTYPE' => 5, 'SPEEDLS' => 6, 'LENGTHTYPESPEED' => 7, 'SPEEDMS' => 8, 'MODE' => 9, 'DATAREF' => 10, 'RELIABLE' => 11, 'COMMENT' => 12, 'ENTERED' => 13, 'DATEENTERED' => 14, 'MODIFIED' => 15, 'DATEMODIFIED' => 16, 'EXPERT' => 17, 'DATECHECKED' => 18, 'SLA' => 19, 'SLB' => 20, 'TS' => 21, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'SpeedRefNo' => 3, 'Length' => 4, 'LengthType' => 5, 'SpeedLS' => 6, 'LengthTypeSpeed' => 7, 'Speedms' => 8, 'Mode' => 9, 'DataRef' => 10, 'Reliable' => 11, 'Comment' => 12, 'Entered' => 13, 'DateEntered' => 14, 'Modified' => 15, 'DateModified' => 16, 'Expert' => 17, 'DateChecked' => 18, 'SLa' => 19, 'SLb' => 20, 'TS' => 21, ),
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
        $toNames = SpeedPeer::getFieldNames($toType);
        $key = isset(SpeedPeer::$fieldKeys[$fromType][$name]) ? SpeedPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SpeedPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SpeedPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SpeedPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SpeedPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SpeedPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SpeedPeer::AUTOCTR);
            $criteria->addSelectColumn(SpeedPeer::STOCKCODE);
            $criteria->addSelectColumn(SpeedPeer::SPECCODE);
            $criteria->addSelectColumn(SpeedPeer::SPEEDREFNO);
            $criteria->addSelectColumn(SpeedPeer::LENGTH);
            $criteria->addSelectColumn(SpeedPeer::LENGTHTYPE);
            $criteria->addSelectColumn(SpeedPeer::SPEEDLS);
            $criteria->addSelectColumn(SpeedPeer::LENGTHTYPESPEED);
            $criteria->addSelectColumn(SpeedPeer::SPEEDMS);
            $criteria->addSelectColumn(SpeedPeer::MODE);
            $criteria->addSelectColumn(SpeedPeer::DATAREF);
            $criteria->addSelectColumn(SpeedPeer::RELIABLE);
            $criteria->addSelectColumn(SpeedPeer::COMMENT);
            $criteria->addSelectColumn(SpeedPeer::ENTERED);
            $criteria->addSelectColumn(SpeedPeer::DATEENTERED);
            $criteria->addSelectColumn(SpeedPeer::MODIFIED);
            $criteria->addSelectColumn(SpeedPeer::DATEMODIFIED);
            $criteria->addSelectColumn(SpeedPeer::EXPERT);
            $criteria->addSelectColumn(SpeedPeer::DATECHECKED);
            $criteria->addSelectColumn(SpeedPeer::SLA);
            $criteria->addSelectColumn(SpeedPeer::SLB);
            $criteria->addSelectColumn(SpeedPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.SpeedRefNo');
            $criteria->addSelectColumn($alias . '.Length');
            $criteria->addSelectColumn($alias . '.LengthType');
            $criteria->addSelectColumn($alias . '.SpeedLS');
            $criteria->addSelectColumn($alias . '.LengthTypeSpeed');
            $criteria->addSelectColumn($alias . '.Speedms');
            $criteria->addSelectColumn($alias . '.Mode');
            $criteria->addSelectColumn($alias . '.DataRef');
            $criteria->addSelectColumn($alias . '.Reliable');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.SLa');
            $criteria->addSelectColumn($alias . '.SLb');
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
        $criteria->setPrimaryTableName(SpeedPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SpeedPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SpeedPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SpeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Speed
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SpeedPeer::doSelect($critcopy, $con);
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
        return SpeedPeer::populateObjects(SpeedPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SpeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SpeedPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SpeedPeer::DATABASE_NAME);

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
     * @param Speed $obj A Speed object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            SpeedPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Speed object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Speed) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Speed object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SpeedPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Speed Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SpeedPeer::$instances[$key])) {
                return SpeedPeer::$instances[$key];
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
        foreach (SpeedPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SpeedPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to speed
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
        $cls = SpeedPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SpeedPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SpeedPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpeedPeer::addInstanceToPool($obj, $key);
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
     * @return array (Speed object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SpeedPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SpeedPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SpeedPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpeedPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SpeedPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(SpeedPeer::DATABASE_NAME)->getTable(SpeedPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSpeedPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSpeedPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SpeedTableMap());
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
        return SpeedPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Speed or Criteria object.
     *
     * @param      mixed $values Criteria or Speed object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SpeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Speed object
        }

        if ($criteria->containsKey(SpeedPeer::AUTOCTR) && $criteria->keyContainsValue(SpeedPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpeedPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(SpeedPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Speed or Criteria object.
     *
     * @param      mixed $values Criteria or Speed object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SpeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SpeedPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SpeedPeer::AUTOCTR);
            $value = $criteria->remove(SpeedPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(SpeedPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SpeedPeer::TABLE_NAME);
            }

        } else { // $values is Speed object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SpeedPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the speed table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SpeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SpeedPeer::TABLE_NAME, $con, SpeedPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpeedPeer::clearInstancePool();
            SpeedPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Speed or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Speed object or primary key or array of primary keys
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
            $con = Propel::getConnection(SpeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SpeedPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Speed) { // it's a model object
            // invalidate the cache for this single object
            SpeedPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpeedPeer::DATABASE_NAME);
            $criteria->add(SpeedPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                SpeedPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SpeedPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SpeedPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Speed object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Speed $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SpeedPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SpeedPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SpeedPeer::DATABASE_NAME, SpeedPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Speed
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = SpeedPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SpeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(SpeedPeer::DATABASE_NAME);
        $criteria->add(SpeedPeer::AUTOCTR, $pk);

        $v = SpeedPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Speed[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SpeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(SpeedPeer::DATABASE_NAME);
            $criteria->add(SpeedPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = SpeedPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseSpeedPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSpeedPeer::buildTableMap();

