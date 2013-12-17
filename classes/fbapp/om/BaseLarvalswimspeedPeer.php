<?php


/**
 * Base static class for performing query and update operations on the 'larvalswimspeed' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseLarvalswimspeedPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'larvalswimspeed';

    /** the related Propel class for this table */
    const OM_CLASS = 'Larvalswimspeed';

    /** the related TableMap class for this table */
    const TM_CLASS = 'LarvalswimspeedTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 24;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 24;

    /** the column name for the autoctr field */
    const AUTOCTR = 'larvalswimspeed.autoctr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'larvalswimspeed.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'larvalswimspeed.SpecCode';

    /** the column name for the SpeedRefNo field */
    const SPEEDREFNO = 'larvalswimspeed.SpeedRefNo';

    /** the column name for the C_Code field */
    const C_CODE = 'larvalswimspeed.C_Code';

    /** the column name for the Larvallocality field */
    const LARVALLOCALITY = 'larvalswimspeed.Larvallocality';

    /** the column name for the Length field */
    const LENGTH = 'larvalswimspeed.Length';

    /** the column name for the LengthType field */
    const LENGTHTYPE = 'larvalswimspeed.LengthType';

    /** the column name for the SpeedLS field */
    const SPEEDLS = 'larvalswimspeed.SpeedLS';

    /** the column name for the LengthTypeSpeed field */
    const LENGTHTYPESPEED = 'larvalswimspeed.LengthTypeSpeed';

    /** the column name for the Speedms field */
    const SPEEDMS = 'larvalswimspeed.Speedms';

    /** the column name for the Mode field */
    const MODE = 'larvalswimspeed.Mode';

    /** the column name for the DataRef field */
    const DATAREF = 'larvalswimspeed.DataRef';

    /** the column name for the Reliable field */
    const RELIABLE = 'larvalswimspeed.Reliable';

    /** the column name for the Comment field */
    const COMMENT = 'larvalswimspeed.Comment';

    /** the column name for the Entered field */
    const ENTERED = 'larvalswimspeed.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'larvalswimspeed.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'larvalswimspeed.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'larvalswimspeed.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'larvalswimspeed.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'larvalswimspeed.DateChecked';

    /** the column name for the SLa field */
    const SLA = 'larvalswimspeed.SLa';

    /** the column name for the SLb field */
    const SLB = 'larvalswimspeed.SLb';

    /** the column name for the TS field */
    const TS = 'larvalswimspeed.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Larvalswimspeed objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Larvalswimspeed[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. LarvalswimspeedPeer::$fieldNames[LarvalswimspeedPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Speedrefno', 'CCode', 'Larvallocality', 'Length', 'Lengthtype', 'Speedls', 'Lengthtypespeed', 'Speedms', 'Mode', 'Dataref', 'Reliable', 'Comment', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Sla', 'Slb', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'speedrefno', 'cCode', 'larvallocality', 'length', 'lengthtype', 'speedls', 'lengthtypespeed', 'speedms', 'mode', 'dataref', 'reliable', 'comment', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'sla', 'slb', 'ts', ),
        BasePeer::TYPE_COLNAME => array (LarvalswimspeedPeer::AUTOCTR, LarvalswimspeedPeer::STOCKCODE, LarvalswimspeedPeer::SPECCODE, LarvalswimspeedPeer::SPEEDREFNO, LarvalswimspeedPeer::C_CODE, LarvalswimspeedPeer::LARVALLOCALITY, LarvalswimspeedPeer::LENGTH, LarvalswimspeedPeer::LENGTHTYPE, LarvalswimspeedPeer::SPEEDLS, LarvalswimspeedPeer::LENGTHTYPESPEED, LarvalswimspeedPeer::SPEEDMS, LarvalswimspeedPeer::MODE, LarvalswimspeedPeer::DATAREF, LarvalswimspeedPeer::RELIABLE, LarvalswimspeedPeer::COMMENT, LarvalswimspeedPeer::ENTERED, LarvalswimspeedPeer::DATEENTERED, LarvalswimspeedPeer::MODIFIED, LarvalswimspeedPeer::DATEMODIFIED, LarvalswimspeedPeer::EXPERT, LarvalswimspeedPeer::DATECHECKED, LarvalswimspeedPeer::SLA, LarvalswimspeedPeer::SLB, LarvalswimspeedPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'SPEEDREFNO', 'C_CODE', 'LARVALLOCALITY', 'LENGTH', 'LENGTHTYPE', 'SPEEDLS', 'LENGTHTYPESPEED', 'SPEEDMS', 'MODE', 'DATAREF', 'RELIABLE', 'COMMENT', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'SLA', 'SLB', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'StockCode', 'SpecCode', 'SpeedRefNo', 'C_Code', 'Larvallocality', 'Length', 'LengthType', 'SpeedLS', 'LengthTypeSpeed', 'Speedms', 'Mode', 'DataRef', 'Reliable', 'Comment', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'SLa', 'SLb', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. LarvalswimspeedPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Speedrefno' => 3, 'CCode' => 4, 'Larvallocality' => 5, 'Length' => 6, 'Lengthtype' => 7, 'Speedls' => 8, 'Lengthtypespeed' => 9, 'Speedms' => 10, 'Mode' => 11, 'Dataref' => 12, 'Reliable' => 13, 'Comment' => 14, 'Entered' => 15, 'Dateentered' => 16, 'Modified' => 17, 'Datemodified' => 18, 'Expert' => 19, 'Datechecked' => 20, 'Sla' => 21, 'Slb' => 22, 'Ts' => 23, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'speedrefno' => 3, 'cCode' => 4, 'larvallocality' => 5, 'length' => 6, 'lengthtype' => 7, 'speedls' => 8, 'lengthtypespeed' => 9, 'speedms' => 10, 'mode' => 11, 'dataref' => 12, 'reliable' => 13, 'comment' => 14, 'entered' => 15, 'dateentered' => 16, 'modified' => 17, 'datemodified' => 18, 'expert' => 19, 'datechecked' => 20, 'sla' => 21, 'slb' => 22, 'ts' => 23, ),
        BasePeer::TYPE_COLNAME => array (LarvalswimspeedPeer::AUTOCTR => 0, LarvalswimspeedPeer::STOCKCODE => 1, LarvalswimspeedPeer::SPECCODE => 2, LarvalswimspeedPeer::SPEEDREFNO => 3, LarvalswimspeedPeer::C_CODE => 4, LarvalswimspeedPeer::LARVALLOCALITY => 5, LarvalswimspeedPeer::LENGTH => 6, LarvalswimspeedPeer::LENGTHTYPE => 7, LarvalswimspeedPeer::SPEEDLS => 8, LarvalswimspeedPeer::LENGTHTYPESPEED => 9, LarvalswimspeedPeer::SPEEDMS => 10, LarvalswimspeedPeer::MODE => 11, LarvalswimspeedPeer::DATAREF => 12, LarvalswimspeedPeer::RELIABLE => 13, LarvalswimspeedPeer::COMMENT => 14, LarvalswimspeedPeer::ENTERED => 15, LarvalswimspeedPeer::DATEENTERED => 16, LarvalswimspeedPeer::MODIFIED => 17, LarvalswimspeedPeer::DATEMODIFIED => 18, LarvalswimspeedPeer::EXPERT => 19, LarvalswimspeedPeer::DATECHECKED => 20, LarvalswimspeedPeer::SLA => 21, LarvalswimspeedPeer::SLB => 22, LarvalswimspeedPeer::TS => 23, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'SPEEDREFNO' => 3, 'C_CODE' => 4, 'LARVALLOCALITY' => 5, 'LENGTH' => 6, 'LENGTHTYPE' => 7, 'SPEEDLS' => 8, 'LENGTHTYPESPEED' => 9, 'SPEEDMS' => 10, 'MODE' => 11, 'DATAREF' => 12, 'RELIABLE' => 13, 'COMMENT' => 14, 'ENTERED' => 15, 'DATEENTERED' => 16, 'MODIFIED' => 17, 'DATEMODIFIED' => 18, 'EXPERT' => 19, 'DATECHECKED' => 20, 'SLA' => 21, 'SLB' => 22, 'TS' => 23, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'SpeedRefNo' => 3, 'C_Code' => 4, 'Larvallocality' => 5, 'Length' => 6, 'LengthType' => 7, 'SpeedLS' => 8, 'LengthTypeSpeed' => 9, 'Speedms' => 10, 'Mode' => 11, 'DataRef' => 12, 'Reliable' => 13, 'Comment' => 14, 'Entered' => 15, 'DateEntered' => 16, 'Modified' => 17, 'DateModified' => 18, 'Expert' => 19, 'DateChecked' => 20, 'SLa' => 21, 'SLb' => 22, 'TS' => 23, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
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
        $toNames = LarvalswimspeedPeer::getFieldNames($toType);
        $key = isset(LarvalswimspeedPeer::$fieldKeys[$fromType][$name]) ? LarvalswimspeedPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(LarvalswimspeedPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, LarvalswimspeedPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return LarvalswimspeedPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. LarvalswimspeedPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(LarvalswimspeedPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(LarvalswimspeedPeer::AUTOCTR);
            $criteria->addSelectColumn(LarvalswimspeedPeer::STOCKCODE);
            $criteria->addSelectColumn(LarvalswimspeedPeer::SPECCODE);
            $criteria->addSelectColumn(LarvalswimspeedPeer::SPEEDREFNO);
            $criteria->addSelectColumn(LarvalswimspeedPeer::C_CODE);
            $criteria->addSelectColumn(LarvalswimspeedPeer::LARVALLOCALITY);
            $criteria->addSelectColumn(LarvalswimspeedPeer::LENGTH);
            $criteria->addSelectColumn(LarvalswimspeedPeer::LENGTHTYPE);
            $criteria->addSelectColumn(LarvalswimspeedPeer::SPEEDLS);
            $criteria->addSelectColumn(LarvalswimspeedPeer::LENGTHTYPESPEED);
            $criteria->addSelectColumn(LarvalswimspeedPeer::SPEEDMS);
            $criteria->addSelectColumn(LarvalswimspeedPeer::MODE);
            $criteria->addSelectColumn(LarvalswimspeedPeer::DATAREF);
            $criteria->addSelectColumn(LarvalswimspeedPeer::RELIABLE);
            $criteria->addSelectColumn(LarvalswimspeedPeer::COMMENT);
            $criteria->addSelectColumn(LarvalswimspeedPeer::ENTERED);
            $criteria->addSelectColumn(LarvalswimspeedPeer::DATEENTERED);
            $criteria->addSelectColumn(LarvalswimspeedPeer::MODIFIED);
            $criteria->addSelectColumn(LarvalswimspeedPeer::DATEMODIFIED);
            $criteria->addSelectColumn(LarvalswimspeedPeer::EXPERT);
            $criteria->addSelectColumn(LarvalswimspeedPeer::DATECHECKED);
            $criteria->addSelectColumn(LarvalswimspeedPeer::SLA);
            $criteria->addSelectColumn(LarvalswimspeedPeer::SLB);
            $criteria->addSelectColumn(LarvalswimspeedPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.SpeedRefNo');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Larvallocality');
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
        $criteria->setPrimaryTableName(LarvalswimspeedPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LarvalswimspeedPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(LarvalswimspeedPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(LarvalswimspeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Larvalswimspeed
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = LarvalswimspeedPeer::doSelect($critcopy, $con);
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
        return LarvalswimspeedPeer::populateObjects(LarvalswimspeedPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(LarvalswimspeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            LarvalswimspeedPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(LarvalswimspeedPeer::DATABASE_NAME);

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
     * @param Larvalswimspeed $obj A Larvalswimspeed object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            LarvalswimspeedPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Larvalswimspeed object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Larvalswimspeed) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Larvalswimspeed object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(LarvalswimspeedPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Larvalswimspeed Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(LarvalswimspeedPeer::$instances[$key])) {
                return LarvalswimspeedPeer::$instances[$key];
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
        foreach (LarvalswimspeedPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        LarvalswimspeedPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to larvalswimspeed
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
        $cls = LarvalswimspeedPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = LarvalswimspeedPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = LarvalswimspeedPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                LarvalswimspeedPeer::addInstanceToPool($obj, $key);
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
     * @return array (Larvalswimspeed object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = LarvalswimspeedPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = LarvalswimspeedPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + LarvalswimspeedPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = LarvalswimspeedPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            LarvalswimspeedPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(LarvalswimspeedPeer::DATABASE_NAME)->getTable(LarvalswimspeedPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseLarvalswimspeedPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseLarvalswimspeedPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \LarvalswimspeedTableMap());
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
        return LarvalswimspeedPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Larvalswimspeed or Criteria object.
     *
     * @param      mixed $values Criteria or Larvalswimspeed object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LarvalswimspeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Larvalswimspeed object
        }

        if ($criteria->containsKey(LarvalswimspeedPeer::AUTOCTR) && $criteria->keyContainsValue(LarvalswimspeedPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.LarvalswimspeedPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(LarvalswimspeedPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Larvalswimspeed or Criteria object.
     *
     * @param      mixed $values Criteria or Larvalswimspeed object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LarvalswimspeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(LarvalswimspeedPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(LarvalswimspeedPeer::AUTOCTR);
            $value = $criteria->remove(LarvalswimspeedPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(LarvalswimspeedPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(LarvalswimspeedPeer::TABLE_NAME);
            }

        } else { // $values is Larvalswimspeed object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(LarvalswimspeedPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the larvalswimspeed table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LarvalswimspeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(LarvalswimspeedPeer::TABLE_NAME, $con, LarvalswimspeedPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            LarvalswimspeedPeer::clearInstancePool();
            LarvalswimspeedPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Larvalswimspeed or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Larvalswimspeed object or primary key or array of primary keys
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
            $con = Propel::getConnection(LarvalswimspeedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            LarvalswimspeedPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Larvalswimspeed) { // it's a model object
            // invalidate the cache for this single object
            LarvalswimspeedPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(LarvalswimspeedPeer::DATABASE_NAME);
            $criteria->add(LarvalswimspeedPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                LarvalswimspeedPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(LarvalswimspeedPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            LarvalswimspeedPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Larvalswimspeed object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Larvalswimspeed $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(LarvalswimspeedPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(LarvalswimspeedPeer::TABLE_NAME);

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

        return BasePeer::doValidate(LarvalswimspeedPeer::DATABASE_NAME, LarvalswimspeedPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Larvalswimspeed
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = LarvalswimspeedPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(LarvalswimspeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(LarvalswimspeedPeer::DATABASE_NAME);
        $criteria->add(LarvalswimspeedPeer::AUTOCTR, $pk);

        $v = LarvalswimspeedPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Larvalswimspeed[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LarvalswimspeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(LarvalswimspeedPeer::DATABASE_NAME);
            $criteria->add(LarvalswimspeedPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = LarvalswimspeedPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseLarvalswimspeedPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseLarvalswimspeedPeer::buildTableMap();

