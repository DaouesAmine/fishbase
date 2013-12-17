<?php


/**
 * Base static class for performing query and update operations on the 'ecosystemcountry' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseEcosystemcountryPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'ecosystemcountry';

    /** the related Propel class for this table */
    const OM_CLASS = 'Ecosystemcountry';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EcosystemcountryTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the autoctr field */
    const AUTOCTR = 'ecosystemcountry.autoctr';

    /** the column name for the E_CODE field */
    const E_CODE = 'ecosystemcountry.E_CODE';

    /** the column name for the EcosystemRefNo field */
    const ECOSYSTEMREFNO = 'ecosystemcountry.EcosystemRefNo';

    /** the column name for the C_Code field */
    const C_CODE = 'ecosystemcountry.C_Code';

    /** the column name for the Speccode field */
    const SPECCODE = 'ecosystemcountry.Speccode';

    /** the column name for the Stockcode field */
    const STOCKCODE = 'ecosystemcountry.Stockcode';

    /** the column name for the Status field */
    const STATUS = 'ecosystemcountry.Status';

    /** the column name for the Abundance field */
    const ABUNDANCE = 'ecosystemcountry.Abundance';

    /** the column name for the Remarks field */
    const REMARKS = 'ecosystemcountry.Remarks';

    /** the column name for the Entered field */
    const ENTERED = 'ecosystemcountry.Entered';

    /** the column name for the Dateentered field */
    const DATEENTERED = 'ecosystemcountry.Dateentered';

    /** the column name for the Modified field */
    const MODIFIED = 'ecosystemcountry.Modified';

    /** the column name for the Datemodified field */
    const DATEMODIFIED = 'ecosystemcountry.Datemodified';

    /** the column name for the Expert field */
    const EXPERT = 'ecosystemcountry.Expert';

    /** the column name for the Datechecked field */
    const DATECHECKED = 'ecosystemcountry.Datechecked';

    /** the column name for the TS field */
    const TS = 'ecosystemcountry.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Ecosystemcountry objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Ecosystemcountry[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EcosystemcountryPeer::$fieldNames[EcosystemcountryPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'ECode', 'Ecosystemrefno', 'CCode', 'Speccode', 'Stockcode', 'Status', 'Abundance', 'Remarks', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'eCode', 'ecosystemrefno', 'cCode', 'speccode', 'stockcode', 'status', 'abundance', 'remarks', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (EcosystemcountryPeer::AUTOCTR, EcosystemcountryPeer::E_CODE, EcosystemcountryPeer::ECOSYSTEMREFNO, EcosystemcountryPeer::C_CODE, EcosystemcountryPeer::SPECCODE, EcosystemcountryPeer::STOCKCODE, EcosystemcountryPeer::STATUS, EcosystemcountryPeer::ABUNDANCE, EcosystemcountryPeer::REMARKS, EcosystemcountryPeer::ENTERED, EcosystemcountryPeer::DATEENTERED, EcosystemcountryPeer::MODIFIED, EcosystemcountryPeer::DATEMODIFIED, EcosystemcountryPeer::EXPERT, EcosystemcountryPeer::DATECHECKED, EcosystemcountryPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'E_CODE', 'ECOSYSTEMREFNO', 'C_CODE', 'SPECCODE', 'STOCKCODE', 'STATUS', 'ABUNDANCE', 'REMARKS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'E_CODE', 'EcosystemRefNo', 'C_Code', 'Speccode', 'Stockcode', 'Status', 'Abundance', 'Remarks', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EcosystemcountryPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'ECode' => 1, 'Ecosystemrefno' => 2, 'CCode' => 3, 'Speccode' => 4, 'Stockcode' => 5, 'Status' => 6, 'Abundance' => 7, 'Remarks' => 8, 'Entered' => 9, 'Dateentered' => 10, 'Modified' => 11, 'Datemodified' => 12, 'Expert' => 13, 'Datechecked' => 14, 'Ts' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'eCode' => 1, 'ecosystemrefno' => 2, 'cCode' => 3, 'speccode' => 4, 'stockcode' => 5, 'status' => 6, 'abundance' => 7, 'remarks' => 8, 'entered' => 9, 'dateentered' => 10, 'modified' => 11, 'datemodified' => 12, 'expert' => 13, 'datechecked' => 14, 'ts' => 15, ),
        BasePeer::TYPE_COLNAME => array (EcosystemcountryPeer::AUTOCTR => 0, EcosystemcountryPeer::E_CODE => 1, EcosystemcountryPeer::ECOSYSTEMREFNO => 2, EcosystemcountryPeer::C_CODE => 3, EcosystemcountryPeer::SPECCODE => 4, EcosystemcountryPeer::STOCKCODE => 5, EcosystemcountryPeer::STATUS => 6, EcosystemcountryPeer::ABUNDANCE => 7, EcosystemcountryPeer::REMARKS => 8, EcosystemcountryPeer::ENTERED => 9, EcosystemcountryPeer::DATEENTERED => 10, EcosystemcountryPeer::MODIFIED => 11, EcosystemcountryPeer::DATEMODIFIED => 12, EcosystemcountryPeer::EXPERT => 13, EcosystemcountryPeer::DATECHECKED => 14, EcosystemcountryPeer::TS => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'E_CODE' => 1, 'ECOSYSTEMREFNO' => 2, 'C_CODE' => 3, 'SPECCODE' => 4, 'STOCKCODE' => 5, 'STATUS' => 6, 'ABUNDANCE' => 7, 'REMARKS' => 8, 'ENTERED' => 9, 'DATEENTERED' => 10, 'MODIFIED' => 11, 'DATEMODIFIED' => 12, 'EXPERT' => 13, 'DATECHECKED' => 14, 'TS' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'E_CODE' => 1, 'EcosystemRefNo' => 2, 'C_Code' => 3, 'Speccode' => 4, 'Stockcode' => 5, 'Status' => 6, 'Abundance' => 7, 'Remarks' => 8, 'Entered' => 9, 'Dateentered' => 10, 'Modified' => 11, 'Datemodified' => 12, 'Expert' => 13, 'Datechecked' => 14, 'TS' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $toNames = EcosystemcountryPeer::getFieldNames($toType);
        $key = isset(EcosystemcountryPeer::$fieldKeys[$fromType][$name]) ? EcosystemcountryPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EcosystemcountryPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, EcosystemcountryPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EcosystemcountryPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. EcosystemcountryPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EcosystemcountryPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(EcosystemcountryPeer::AUTOCTR);
            $criteria->addSelectColumn(EcosystemcountryPeer::E_CODE);
            $criteria->addSelectColumn(EcosystemcountryPeer::ECOSYSTEMREFNO);
            $criteria->addSelectColumn(EcosystemcountryPeer::C_CODE);
            $criteria->addSelectColumn(EcosystemcountryPeer::SPECCODE);
            $criteria->addSelectColumn(EcosystemcountryPeer::STOCKCODE);
            $criteria->addSelectColumn(EcosystemcountryPeer::STATUS);
            $criteria->addSelectColumn(EcosystemcountryPeer::ABUNDANCE);
            $criteria->addSelectColumn(EcosystemcountryPeer::REMARKS);
            $criteria->addSelectColumn(EcosystemcountryPeer::ENTERED);
            $criteria->addSelectColumn(EcosystemcountryPeer::DATEENTERED);
            $criteria->addSelectColumn(EcosystemcountryPeer::MODIFIED);
            $criteria->addSelectColumn(EcosystemcountryPeer::DATEMODIFIED);
            $criteria->addSelectColumn(EcosystemcountryPeer::EXPERT);
            $criteria->addSelectColumn(EcosystemcountryPeer::DATECHECKED);
            $criteria->addSelectColumn(EcosystemcountryPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.E_CODE');
            $criteria->addSelectColumn($alias . '.EcosystemRefNo');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.Stockcode');
            $criteria->addSelectColumn($alias . '.Status');
            $criteria->addSelectColumn($alias . '.Abundance');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.Dateentered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.Datemodified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.Datechecked');
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
        $criteria->setPrimaryTableName(EcosystemcountryPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EcosystemcountryPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EcosystemcountryPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EcosystemcountryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Ecosystemcountry
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EcosystemcountryPeer::doSelect($critcopy, $con);
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
        return EcosystemcountryPeer::populateObjects(EcosystemcountryPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(EcosystemcountryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EcosystemcountryPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EcosystemcountryPeer::DATABASE_NAME);

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
     * @param Ecosystemcountry $obj A Ecosystemcountry object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getECode(), (string) $obj->getCCode(), (string) $obj->getStockcode()));
            } // if key === null
            EcosystemcountryPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Ecosystemcountry object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Ecosystemcountry) {
                $key = serialize(array((string) $value->getECode(), (string) $value->getCCode(), (string) $value->getStockcode()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Ecosystemcountry object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EcosystemcountryPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Ecosystemcountry Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EcosystemcountryPeer::$instances[$key])) {
                return EcosystemcountryPeer::$instances[$key];
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
        foreach (EcosystemcountryPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        EcosystemcountryPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to ecosystemcountry
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
        if ($row[$startcol + 1] === null && $row[$startcol + 3] === null && $row[$startcol + 5] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 3], (string) $row[$startcol + 5]));
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

        return array((int) $row[$startcol + 1], (string) $row[$startcol + 3], (int) $row[$startcol + 5]);
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
        $cls = EcosystemcountryPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EcosystemcountryPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EcosystemcountryPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EcosystemcountryPeer::addInstanceToPool($obj, $key);
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
     * @return array (Ecosystemcountry object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EcosystemcountryPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EcosystemcountryPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EcosystemcountryPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EcosystemcountryPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EcosystemcountryPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(EcosystemcountryPeer::DATABASE_NAME)->getTable(EcosystemcountryPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEcosystemcountryPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEcosystemcountryPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \EcosystemcountryTableMap());
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
        return EcosystemcountryPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Ecosystemcountry or Criteria object.
     *
     * @param      mixed $values Criteria or Ecosystemcountry object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EcosystemcountryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Ecosystemcountry object
        }


        // Set the correct dbName
        $criteria->setDbName(EcosystemcountryPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Ecosystemcountry or Criteria object.
     *
     * @param      mixed $values Criteria or Ecosystemcountry object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EcosystemcountryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EcosystemcountryPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EcosystemcountryPeer::E_CODE);
            $value = $criteria->remove(EcosystemcountryPeer::E_CODE);
            if ($value) {
                $selectCriteria->add(EcosystemcountryPeer::E_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EcosystemcountryPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(EcosystemcountryPeer::C_CODE);
            $value = $criteria->remove(EcosystemcountryPeer::C_CODE);
            if ($value) {
                $selectCriteria->add(EcosystemcountryPeer::C_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EcosystemcountryPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(EcosystemcountryPeer::STOCKCODE);
            $value = $criteria->remove(EcosystemcountryPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(EcosystemcountryPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EcosystemcountryPeer::TABLE_NAME);
            }

        } else { // $values is Ecosystemcountry object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EcosystemcountryPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ecosystemcountry table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EcosystemcountryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(EcosystemcountryPeer::TABLE_NAME, $con, EcosystemcountryPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EcosystemcountryPeer::clearInstancePool();
            EcosystemcountryPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Ecosystemcountry or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Ecosystemcountry object or primary key or array of primary keys
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
            $con = Propel::getConnection(EcosystemcountryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            EcosystemcountryPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Ecosystemcountry) { // it's a model object
            // invalidate the cache for this single object
            EcosystemcountryPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EcosystemcountryPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(EcosystemcountryPeer::E_CODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(EcosystemcountryPeer::C_CODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(EcosystemcountryPeer::STOCKCODE, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                EcosystemcountryPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(EcosystemcountryPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            EcosystemcountryPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Ecosystemcountry object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Ecosystemcountry $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EcosystemcountryPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EcosystemcountryPeer::TABLE_NAME);

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

        return BasePeer::doValidate(EcosystemcountryPeer::DATABASE_NAME, EcosystemcountryPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $e_code
     * @param   string $c_code
     * @param   int $stockcode
     * @param      PropelPDO $con
     * @return Ecosystemcountry
     */
    public static function retrieveByPK($e_code, $c_code, $stockcode, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $e_code, (string) $c_code, (string) $stockcode));
         if (null !== ($obj = EcosystemcountryPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EcosystemcountryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(EcosystemcountryPeer::DATABASE_NAME);
        $criteria->add(EcosystemcountryPeer::E_CODE, $e_code);
        $criteria->add(EcosystemcountryPeer::C_CODE, $c_code);
        $criteria->add(EcosystemcountryPeer::STOCKCODE, $stockcode);
        $v = EcosystemcountryPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseEcosystemcountryPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEcosystemcountryPeer::buildTableMap();

