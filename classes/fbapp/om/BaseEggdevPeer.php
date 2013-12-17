<?php


/**
 * Base static class for performing query and update operations on the 'eggdev' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseEggdevPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'eggdev';

    /** the related Propel class for this table */
    const OM_CLASS = 'Eggdev';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EggdevTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 21;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 21;

    /** the column name for the AutoCtr field */
    const AUTOCTR = 'eggdev.AutoCtr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'eggdev.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'eggdev.SpecCode';

    /** the column name for the EggDevRefNo field */
    const EGGDEVREFNO = 'eggdev.EggDevRefNo';

    /** the column name for the Locality field */
    const LOCALITY = 'eggdev.Locality';

    /** the column name for the C_Code field */
    const C_CODE = 'eggdev.C_Code';

    /** the column name for the Temperature field */
    const TEMPERATURE = 'eggdev.Temperature';

    /** the column name for the Salinity field */
    const SALINITY = 'eggdev.Salinity';

    /** the column name for the Salinity2 field */
    const SALINITY2 = 'eggdev.Salinity2';

    /** the column name for the EggDiameter field */
    const EGGDIAMETER = 'eggdev.EggDiameter';

    /** the column name for the EggDevTime field */
    const EGGDEVTIME = 'eggdev.EggDevTime';

    /** the column name for the DataRef field */
    const DATAREF = 'eggdev.DataRef';

    /** the column name for the DataType field */
    const DATATYPE = 'eggdev.DataType';

    /** the column name for the Remarks field */
    const REMARKS = 'eggdev.Remarks';

    /** the column name for the Entered field */
    const ENTERED = 'eggdev.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'eggdev.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'eggdev.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'eggdev.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'eggdev.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'eggdev.DateChecked';

    /** the column name for the TS field */
    const TS = 'eggdev.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Eggdev objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Eggdev[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EggdevPeer::$fieldNames[EggdevPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Eggdevrefno', 'Locality', 'CCode', 'Temperature', 'Salinity', 'Salinity2', 'Eggdiameter', 'Eggdevtime', 'Dataref', 'Datatype', 'Remarks', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'eggdevrefno', 'locality', 'cCode', 'temperature', 'salinity', 'salinity2', 'eggdiameter', 'eggdevtime', 'dataref', 'datatype', 'remarks', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (EggdevPeer::AUTOCTR, EggdevPeer::STOCKCODE, EggdevPeer::SPECCODE, EggdevPeer::EGGDEVREFNO, EggdevPeer::LOCALITY, EggdevPeer::C_CODE, EggdevPeer::TEMPERATURE, EggdevPeer::SALINITY, EggdevPeer::SALINITY2, EggdevPeer::EGGDIAMETER, EggdevPeer::EGGDEVTIME, EggdevPeer::DATAREF, EggdevPeer::DATATYPE, EggdevPeer::REMARKS, EggdevPeer::ENTERED, EggdevPeer::DATEENTERED, EggdevPeer::MODIFIED, EggdevPeer::DATEMODIFIED, EggdevPeer::EXPERT, EggdevPeer::DATECHECKED, EggdevPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'EGGDEVREFNO', 'LOCALITY', 'C_CODE', 'TEMPERATURE', 'SALINITY', 'SALINITY2', 'EGGDIAMETER', 'EGGDEVTIME', 'DATAREF', 'DATATYPE', 'REMARKS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr', 'StockCode', 'SpecCode', 'EggDevRefNo', 'Locality', 'C_Code', 'Temperature', 'Salinity', 'Salinity2', 'EggDiameter', 'EggDevTime', 'DataRef', 'DataType', 'Remarks', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EggdevPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Eggdevrefno' => 3, 'Locality' => 4, 'CCode' => 5, 'Temperature' => 6, 'Salinity' => 7, 'Salinity2' => 8, 'Eggdiameter' => 9, 'Eggdevtime' => 10, 'Dataref' => 11, 'Datatype' => 12, 'Remarks' => 13, 'Entered' => 14, 'Dateentered' => 15, 'Modified' => 16, 'Datemodified' => 17, 'Expert' => 18, 'Datechecked' => 19, 'Ts' => 20, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'eggdevrefno' => 3, 'locality' => 4, 'cCode' => 5, 'temperature' => 6, 'salinity' => 7, 'salinity2' => 8, 'eggdiameter' => 9, 'eggdevtime' => 10, 'dataref' => 11, 'datatype' => 12, 'remarks' => 13, 'entered' => 14, 'dateentered' => 15, 'modified' => 16, 'datemodified' => 17, 'expert' => 18, 'datechecked' => 19, 'ts' => 20, ),
        BasePeer::TYPE_COLNAME => array (EggdevPeer::AUTOCTR => 0, EggdevPeer::STOCKCODE => 1, EggdevPeer::SPECCODE => 2, EggdevPeer::EGGDEVREFNO => 3, EggdevPeer::LOCALITY => 4, EggdevPeer::C_CODE => 5, EggdevPeer::TEMPERATURE => 6, EggdevPeer::SALINITY => 7, EggdevPeer::SALINITY2 => 8, EggdevPeer::EGGDIAMETER => 9, EggdevPeer::EGGDEVTIME => 10, EggdevPeer::DATAREF => 11, EggdevPeer::DATATYPE => 12, EggdevPeer::REMARKS => 13, EggdevPeer::ENTERED => 14, EggdevPeer::DATEENTERED => 15, EggdevPeer::MODIFIED => 16, EggdevPeer::DATEMODIFIED => 17, EggdevPeer::EXPERT => 18, EggdevPeer::DATECHECKED => 19, EggdevPeer::TS => 20, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'EGGDEVREFNO' => 3, 'LOCALITY' => 4, 'C_CODE' => 5, 'TEMPERATURE' => 6, 'SALINITY' => 7, 'SALINITY2' => 8, 'EGGDIAMETER' => 9, 'EGGDEVTIME' => 10, 'DATAREF' => 11, 'DATATYPE' => 12, 'REMARKS' => 13, 'ENTERED' => 14, 'DATEENTERED' => 15, 'MODIFIED' => 16, 'DATEMODIFIED' => 17, 'EXPERT' => 18, 'DATECHECKED' => 19, 'TS' => 20, ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'EggDevRefNo' => 3, 'Locality' => 4, 'C_Code' => 5, 'Temperature' => 6, 'Salinity' => 7, 'Salinity2' => 8, 'EggDiameter' => 9, 'EggDevTime' => 10, 'DataRef' => 11, 'DataType' => 12, 'Remarks' => 13, 'Entered' => 14, 'DateEntered' => 15, 'Modified' => 16, 'DateModified' => 17, 'Expert' => 18, 'DateChecked' => 19, 'TS' => 20, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
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
        $toNames = EggdevPeer::getFieldNames($toType);
        $key = isset(EggdevPeer::$fieldKeys[$fromType][$name]) ? EggdevPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EggdevPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, EggdevPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EggdevPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. EggdevPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EggdevPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(EggdevPeer::AUTOCTR);
            $criteria->addSelectColumn(EggdevPeer::STOCKCODE);
            $criteria->addSelectColumn(EggdevPeer::SPECCODE);
            $criteria->addSelectColumn(EggdevPeer::EGGDEVREFNO);
            $criteria->addSelectColumn(EggdevPeer::LOCALITY);
            $criteria->addSelectColumn(EggdevPeer::C_CODE);
            $criteria->addSelectColumn(EggdevPeer::TEMPERATURE);
            $criteria->addSelectColumn(EggdevPeer::SALINITY);
            $criteria->addSelectColumn(EggdevPeer::SALINITY2);
            $criteria->addSelectColumn(EggdevPeer::EGGDIAMETER);
            $criteria->addSelectColumn(EggdevPeer::EGGDEVTIME);
            $criteria->addSelectColumn(EggdevPeer::DATAREF);
            $criteria->addSelectColumn(EggdevPeer::DATATYPE);
            $criteria->addSelectColumn(EggdevPeer::REMARKS);
            $criteria->addSelectColumn(EggdevPeer::ENTERED);
            $criteria->addSelectColumn(EggdevPeer::DATEENTERED);
            $criteria->addSelectColumn(EggdevPeer::MODIFIED);
            $criteria->addSelectColumn(EggdevPeer::DATEMODIFIED);
            $criteria->addSelectColumn(EggdevPeer::EXPERT);
            $criteria->addSelectColumn(EggdevPeer::DATECHECKED);
            $criteria->addSelectColumn(EggdevPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.AutoCtr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.EggDevRefNo');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Temperature');
            $criteria->addSelectColumn($alias . '.Salinity');
            $criteria->addSelectColumn($alias . '.Salinity2');
            $criteria->addSelectColumn($alias . '.EggDiameter');
            $criteria->addSelectColumn($alias . '.EggDevTime');
            $criteria->addSelectColumn($alias . '.DataRef');
            $criteria->addSelectColumn($alias . '.DataType');
            $criteria->addSelectColumn($alias . '.Remarks');
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
        $criteria->setPrimaryTableName(EggdevPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EggdevPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EggdevPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EggdevPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Eggdev
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EggdevPeer::doSelect($critcopy, $con);
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
        return EggdevPeer::populateObjects(EggdevPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(EggdevPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EggdevPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EggdevPeer::DATABASE_NAME);

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
     * @param Eggdev $obj A Eggdev object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            EggdevPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Eggdev object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Eggdev) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Eggdev object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EggdevPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Eggdev Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EggdevPeer::$instances[$key])) {
                return EggdevPeer::$instances[$key];
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
        foreach (EggdevPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        EggdevPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to eggdev
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
        $cls = EggdevPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EggdevPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EggdevPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EggdevPeer::addInstanceToPool($obj, $key);
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
     * @return array (Eggdev object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EggdevPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EggdevPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EggdevPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EggdevPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EggdevPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(EggdevPeer::DATABASE_NAME)->getTable(EggdevPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEggdevPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEggdevPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \EggdevTableMap());
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
        return EggdevPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Eggdev or Criteria object.
     *
     * @param      mixed $values Criteria or Eggdev object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EggdevPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Eggdev object
        }

        if ($criteria->containsKey(EggdevPeer::AUTOCTR) && $criteria->keyContainsValue(EggdevPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.EggdevPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(EggdevPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Eggdev or Criteria object.
     *
     * @param      mixed $values Criteria or Eggdev object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EggdevPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EggdevPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EggdevPeer::AUTOCTR);
            $value = $criteria->remove(EggdevPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(EggdevPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EggdevPeer::TABLE_NAME);
            }

        } else { // $values is Eggdev object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EggdevPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the eggdev table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EggdevPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(EggdevPeer::TABLE_NAME, $con, EggdevPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EggdevPeer::clearInstancePool();
            EggdevPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Eggdev or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Eggdev object or primary key or array of primary keys
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
            $con = Propel::getConnection(EggdevPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            EggdevPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Eggdev) { // it's a model object
            // invalidate the cache for this single object
            EggdevPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EggdevPeer::DATABASE_NAME);
            $criteria->add(EggdevPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                EggdevPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(EggdevPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            EggdevPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Eggdev object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Eggdev $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EggdevPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EggdevPeer::TABLE_NAME);

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

        return BasePeer::doValidate(EggdevPeer::DATABASE_NAME, EggdevPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Eggdev
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = EggdevPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EggdevPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(EggdevPeer::DATABASE_NAME);
        $criteria->add(EggdevPeer::AUTOCTR, $pk);

        $v = EggdevPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Eggdev[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EggdevPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(EggdevPeer::DATABASE_NAME);
            $criteria->add(EggdevPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = EggdevPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseEggdevPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEggdevPeer::buildTableMap();

