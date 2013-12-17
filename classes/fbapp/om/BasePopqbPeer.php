<?php


/**
 * Base static class for performing query and update operations on the 'popqb' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BasePopqbPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'popqb';

    /** the related Propel class for this table */
    const OM_CLASS = 'Popqb';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PopqbTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 24;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 24;

    /** the column name for the AutoCtr field */
    const AUTOCTR = 'popqb.AutoCtr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'popqb.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'popqb.SpecCode';

    /** the column name for the PopQBRefNo field */
    const POPQBREFNO = 'popqb.PopQBRefNo';

    /** the column name for the PopQB field */
    const POPQB = 'popqb.PopQB';

    /** the column name for the MaintQB field */
    const MAINTQB = 'popqb.MaintQB';

    /** the column name for the Winf field */
    const WINF = 'popqb.Winf';

    /** the column name for the FoodType field */
    const FOODTYPE = 'popqb.FoodType';

    /** the column name for the K field */
    const K = 'popqb.K';

    /** the column name for the Salinity field */
    const SALINITY = 'popqb.Salinity';

    /** the column name for the t0 field */
    const T0 = 'popqb.t0';

    /** the column name for the Temperature field */
    const TEMPERATURE = 'popqb.Temperature';

    /** the column name for the Mortality field */
    const MORTALITY = 'popqb.Mortality';

    /** the column name for the Locality field */
    const LOCALITY = 'popqb.Locality';

    /** the column name for the b field */
    const B = 'popqb.b';

    /** the column name for the C_Code field */
    const C_CODE = 'popqb.C_Code';

    /** the column name for the QBRemarks field */
    const QBREMARKS = 'popqb.QBRemarks';

    /** the column name for the Entered field */
    const ENTERED = 'popqb.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'popqb.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'popqb.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'popqb.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'popqb.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'popqb.DateChecked';

    /** the column name for the TS field */
    const TS = 'popqb.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Popqb objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Popqb[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PopqbPeer::$fieldNames[PopqbPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Popqbrefno', 'Popqb', 'Maintqb', 'Winf', 'Foodtype', 'K', 'Salinity', 'T0', 'Temperature', 'Mortality', 'Locality', 'B', 'CCode', 'Qbremarks', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'popqbrefno', 'popqb', 'maintqb', 'winf', 'foodtype', 'k', 'salinity', 't0', 'temperature', 'mortality', 'locality', 'b', 'cCode', 'qbremarks', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (PopqbPeer::AUTOCTR, PopqbPeer::STOCKCODE, PopqbPeer::SPECCODE, PopqbPeer::POPQBREFNO, PopqbPeer::POPQB, PopqbPeer::MAINTQB, PopqbPeer::WINF, PopqbPeer::FOODTYPE, PopqbPeer::K, PopqbPeer::SALINITY, PopqbPeer::T0, PopqbPeer::TEMPERATURE, PopqbPeer::MORTALITY, PopqbPeer::LOCALITY, PopqbPeer::B, PopqbPeer::C_CODE, PopqbPeer::QBREMARKS, PopqbPeer::ENTERED, PopqbPeer::DATEENTERED, PopqbPeer::MODIFIED, PopqbPeer::DATEMODIFIED, PopqbPeer::EXPERT, PopqbPeer::DATECHECKED, PopqbPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'POPQBREFNO', 'POPQB', 'MAINTQB', 'WINF', 'FOODTYPE', 'K', 'SALINITY', 'T0', 'TEMPERATURE', 'MORTALITY', 'LOCALITY', 'B', 'C_CODE', 'QBREMARKS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr', 'StockCode', 'SpecCode', 'PopQBRefNo', 'PopQB', 'MaintQB', 'Winf', 'FoodType', 'K', 'Salinity', 't0', 'Temperature', 'Mortality', 'Locality', 'b', 'C_Code', 'QBRemarks', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PopqbPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Popqbrefno' => 3, 'Popqb' => 4, 'Maintqb' => 5, 'Winf' => 6, 'Foodtype' => 7, 'K' => 8, 'Salinity' => 9, 'T0' => 10, 'Temperature' => 11, 'Mortality' => 12, 'Locality' => 13, 'B' => 14, 'CCode' => 15, 'Qbremarks' => 16, 'Entered' => 17, 'Dateentered' => 18, 'Modified' => 19, 'Datemodified' => 20, 'Expert' => 21, 'Datechecked' => 22, 'Ts' => 23, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'popqbrefno' => 3, 'popqb' => 4, 'maintqb' => 5, 'winf' => 6, 'foodtype' => 7, 'k' => 8, 'salinity' => 9, 't0' => 10, 'temperature' => 11, 'mortality' => 12, 'locality' => 13, 'b' => 14, 'cCode' => 15, 'qbremarks' => 16, 'entered' => 17, 'dateentered' => 18, 'modified' => 19, 'datemodified' => 20, 'expert' => 21, 'datechecked' => 22, 'ts' => 23, ),
        BasePeer::TYPE_COLNAME => array (PopqbPeer::AUTOCTR => 0, PopqbPeer::STOCKCODE => 1, PopqbPeer::SPECCODE => 2, PopqbPeer::POPQBREFNO => 3, PopqbPeer::POPQB => 4, PopqbPeer::MAINTQB => 5, PopqbPeer::WINF => 6, PopqbPeer::FOODTYPE => 7, PopqbPeer::K => 8, PopqbPeer::SALINITY => 9, PopqbPeer::T0 => 10, PopqbPeer::TEMPERATURE => 11, PopqbPeer::MORTALITY => 12, PopqbPeer::LOCALITY => 13, PopqbPeer::B => 14, PopqbPeer::C_CODE => 15, PopqbPeer::QBREMARKS => 16, PopqbPeer::ENTERED => 17, PopqbPeer::DATEENTERED => 18, PopqbPeer::MODIFIED => 19, PopqbPeer::DATEMODIFIED => 20, PopqbPeer::EXPERT => 21, PopqbPeer::DATECHECKED => 22, PopqbPeer::TS => 23, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'POPQBREFNO' => 3, 'POPQB' => 4, 'MAINTQB' => 5, 'WINF' => 6, 'FOODTYPE' => 7, 'K' => 8, 'SALINITY' => 9, 'T0' => 10, 'TEMPERATURE' => 11, 'MORTALITY' => 12, 'LOCALITY' => 13, 'B' => 14, 'C_CODE' => 15, 'QBREMARKS' => 16, 'ENTERED' => 17, 'DATEENTERED' => 18, 'MODIFIED' => 19, 'DATEMODIFIED' => 20, 'EXPERT' => 21, 'DATECHECKED' => 22, 'TS' => 23, ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'PopQBRefNo' => 3, 'PopQB' => 4, 'MaintQB' => 5, 'Winf' => 6, 'FoodType' => 7, 'K' => 8, 'Salinity' => 9, 't0' => 10, 'Temperature' => 11, 'Mortality' => 12, 'Locality' => 13, 'b' => 14, 'C_Code' => 15, 'QBRemarks' => 16, 'Entered' => 17, 'DateEntered' => 18, 'Modified' => 19, 'DateModified' => 20, 'Expert' => 21, 'DateChecked' => 22, 'TS' => 23, ),
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
        $toNames = PopqbPeer::getFieldNames($toType);
        $key = isset(PopqbPeer::$fieldKeys[$fromType][$name]) ? PopqbPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PopqbPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PopqbPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PopqbPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PopqbPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PopqbPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PopqbPeer::AUTOCTR);
            $criteria->addSelectColumn(PopqbPeer::STOCKCODE);
            $criteria->addSelectColumn(PopqbPeer::SPECCODE);
            $criteria->addSelectColumn(PopqbPeer::POPQBREFNO);
            $criteria->addSelectColumn(PopqbPeer::POPQB);
            $criteria->addSelectColumn(PopqbPeer::MAINTQB);
            $criteria->addSelectColumn(PopqbPeer::WINF);
            $criteria->addSelectColumn(PopqbPeer::FOODTYPE);
            $criteria->addSelectColumn(PopqbPeer::K);
            $criteria->addSelectColumn(PopqbPeer::SALINITY);
            $criteria->addSelectColumn(PopqbPeer::T0);
            $criteria->addSelectColumn(PopqbPeer::TEMPERATURE);
            $criteria->addSelectColumn(PopqbPeer::MORTALITY);
            $criteria->addSelectColumn(PopqbPeer::LOCALITY);
            $criteria->addSelectColumn(PopqbPeer::B);
            $criteria->addSelectColumn(PopqbPeer::C_CODE);
            $criteria->addSelectColumn(PopqbPeer::QBREMARKS);
            $criteria->addSelectColumn(PopqbPeer::ENTERED);
            $criteria->addSelectColumn(PopqbPeer::DATEENTERED);
            $criteria->addSelectColumn(PopqbPeer::MODIFIED);
            $criteria->addSelectColumn(PopqbPeer::DATEMODIFIED);
            $criteria->addSelectColumn(PopqbPeer::EXPERT);
            $criteria->addSelectColumn(PopqbPeer::DATECHECKED);
            $criteria->addSelectColumn(PopqbPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.AutoCtr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.PopQBRefNo');
            $criteria->addSelectColumn($alias . '.PopQB');
            $criteria->addSelectColumn($alias . '.MaintQB');
            $criteria->addSelectColumn($alias . '.Winf');
            $criteria->addSelectColumn($alias . '.FoodType');
            $criteria->addSelectColumn($alias . '.K');
            $criteria->addSelectColumn($alias . '.Salinity');
            $criteria->addSelectColumn($alias . '.t0');
            $criteria->addSelectColumn($alias . '.Temperature');
            $criteria->addSelectColumn($alias . '.Mortality');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.b');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.QBRemarks');
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
        $criteria->setPrimaryTableName(PopqbPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PopqbPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PopqbPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PopqbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Popqb
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PopqbPeer::doSelect($critcopy, $con);
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
        return PopqbPeer::populateObjects(PopqbPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PopqbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PopqbPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PopqbPeer::DATABASE_NAME);

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
     * @param Popqb $obj A Popqb object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            PopqbPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Popqb object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Popqb) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Popqb object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PopqbPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Popqb Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PopqbPeer::$instances[$key])) {
                return PopqbPeer::$instances[$key];
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
        foreach (PopqbPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PopqbPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to popqb
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
        $cls = PopqbPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PopqbPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PopqbPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PopqbPeer::addInstanceToPool($obj, $key);
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
     * @return array (Popqb object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PopqbPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PopqbPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PopqbPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PopqbPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PopqbPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(PopqbPeer::DATABASE_NAME)->getTable(PopqbPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePopqbPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePopqbPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PopqbTableMap());
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
        return PopqbPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Popqb or Criteria object.
     *
     * @param      mixed $values Criteria or Popqb object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopqbPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Popqb object
        }

        if ($criteria->containsKey(PopqbPeer::AUTOCTR) && $criteria->keyContainsValue(PopqbPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PopqbPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PopqbPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Popqb or Criteria object.
     *
     * @param      mixed $values Criteria or Popqb object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopqbPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PopqbPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PopqbPeer::AUTOCTR);
            $value = $criteria->remove(PopqbPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(PopqbPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PopqbPeer::TABLE_NAME);
            }

        } else { // $values is Popqb object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PopqbPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the popqb table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopqbPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PopqbPeer::TABLE_NAME, $con, PopqbPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PopqbPeer::clearInstancePool();
            PopqbPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Popqb or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Popqb object or primary key or array of primary keys
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
            $con = Propel::getConnection(PopqbPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PopqbPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Popqb) { // it's a model object
            // invalidate the cache for this single object
            PopqbPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PopqbPeer::DATABASE_NAME);
            $criteria->add(PopqbPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PopqbPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PopqbPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PopqbPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Popqb object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Popqb $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PopqbPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PopqbPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PopqbPeer::DATABASE_NAME, PopqbPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Popqb
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PopqbPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PopqbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PopqbPeer::DATABASE_NAME);
        $criteria->add(PopqbPeer::AUTOCTR, $pk);

        $v = PopqbPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Popqb[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopqbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PopqbPeer::DATABASE_NAME);
            $criteria->add(PopqbPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = PopqbPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePopqbPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePopqbPeer::buildTableMap();

