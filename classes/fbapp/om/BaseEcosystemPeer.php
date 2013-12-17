<?php


/**
 * Base static class for performing query and update operations on the 'ecosystem' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseEcosystemPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'ecosystem';

    /** the related Propel class for this table */
    const OM_CLASS = 'Ecosystem';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EcosystemTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the autoctr field */
    const AUTOCTR = 'ecosystem.autoctr';

    /** the column name for the E_CODE field */
    const E_CODE = 'ecosystem.E_CODE';

    /** the column name for the EcosystemRefno field */
    const ECOSYSTEMREFNO = 'ecosystem.EcosystemRefno';

    /** the column name for the Speccode field */
    const SPECCODE = 'ecosystem.Speccode';

    /** the column name for the Stockcode field */
    const STOCKCODE = 'ecosystem.Stockcode';

    /** the column name for the Status field */
    const STATUS = 'ecosystem.Status';

    /** the column name for the Abundance field */
    const ABUNDANCE = 'ecosystem.Abundance';

    /** the column name for the LifeStage field */
    const LIFESTAGE = 'ecosystem.LifeStage';

    /** the column name for the Remarks field */
    const REMARKS = 'ecosystem.Remarks';

    /** the column name for the Entered field */
    const ENTERED = 'ecosystem.Entered';

    /** the column name for the Dateentered field */
    const DATEENTERED = 'ecosystem.Dateentered';

    /** the column name for the Modified field */
    const MODIFIED = 'ecosystem.Modified';

    /** the column name for the Datemodified field */
    const DATEMODIFIED = 'ecosystem.Datemodified';

    /** the column name for the Expert field */
    const EXPERT = 'ecosystem.Expert';

    /** the column name for the Datechecked field */
    const DATECHECKED = 'ecosystem.Datechecked';

    /** the column name for the WebURL field */
    const WEBURL = 'ecosystem.WebURL';

    /** the column name for the TS field */
    const TS = 'ecosystem.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Ecosystem objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Ecosystem[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EcosystemPeer::$fieldNames[EcosystemPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'ECode', 'Ecosystemrefno', 'Speccode', 'Stockcode', 'Status', 'Abundance', 'Lifestage', 'Remarks', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Weburl', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'eCode', 'ecosystemrefno', 'speccode', 'stockcode', 'status', 'abundance', 'lifestage', 'remarks', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'weburl', 'ts', ),
        BasePeer::TYPE_COLNAME => array (EcosystemPeer::AUTOCTR, EcosystemPeer::E_CODE, EcosystemPeer::ECOSYSTEMREFNO, EcosystemPeer::SPECCODE, EcosystemPeer::STOCKCODE, EcosystemPeer::STATUS, EcosystemPeer::ABUNDANCE, EcosystemPeer::LIFESTAGE, EcosystemPeer::REMARKS, EcosystemPeer::ENTERED, EcosystemPeer::DATEENTERED, EcosystemPeer::MODIFIED, EcosystemPeer::DATEMODIFIED, EcosystemPeer::EXPERT, EcosystemPeer::DATECHECKED, EcosystemPeer::WEBURL, EcosystemPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'E_CODE', 'ECOSYSTEMREFNO', 'SPECCODE', 'STOCKCODE', 'STATUS', 'ABUNDANCE', 'LIFESTAGE', 'REMARKS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'WEBURL', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'E_CODE', 'EcosystemRefno', 'Speccode', 'Stockcode', 'Status', 'Abundance', 'LifeStage', 'Remarks', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'WebURL', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EcosystemPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'ECode' => 1, 'Ecosystemrefno' => 2, 'Speccode' => 3, 'Stockcode' => 4, 'Status' => 5, 'Abundance' => 6, 'Lifestage' => 7, 'Remarks' => 8, 'Entered' => 9, 'Dateentered' => 10, 'Modified' => 11, 'Datemodified' => 12, 'Expert' => 13, 'Datechecked' => 14, 'Weburl' => 15, 'Ts' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'eCode' => 1, 'ecosystemrefno' => 2, 'speccode' => 3, 'stockcode' => 4, 'status' => 5, 'abundance' => 6, 'lifestage' => 7, 'remarks' => 8, 'entered' => 9, 'dateentered' => 10, 'modified' => 11, 'datemodified' => 12, 'expert' => 13, 'datechecked' => 14, 'weburl' => 15, 'ts' => 16, ),
        BasePeer::TYPE_COLNAME => array (EcosystemPeer::AUTOCTR => 0, EcosystemPeer::E_CODE => 1, EcosystemPeer::ECOSYSTEMREFNO => 2, EcosystemPeer::SPECCODE => 3, EcosystemPeer::STOCKCODE => 4, EcosystemPeer::STATUS => 5, EcosystemPeer::ABUNDANCE => 6, EcosystemPeer::LIFESTAGE => 7, EcosystemPeer::REMARKS => 8, EcosystemPeer::ENTERED => 9, EcosystemPeer::DATEENTERED => 10, EcosystemPeer::MODIFIED => 11, EcosystemPeer::DATEMODIFIED => 12, EcosystemPeer::EXPERT => 13, EcosystemPeer::DATECHECKED => 14, EcosystemPeer::WEBURL => 15, EcosystemPeer::TS => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'E_CODE' => 1, 'ECOSYSTEMREFNO' => 2, 'SPECCODE' => 3, 'STOCKCODE' => 4, 'STATUS' => 5, 'ABUNDANCE' => 6, 'LIFESTAGE' => 7, 'REMARKS' => 8, 'ENTERED' => 9, 'DATEENTERED' => 10, 'MODIFIED' => 11, 'DATEMODIFIED' => 12, 'EXPERT' => 13, 'DATECHECKED' => 14, 'WEBURL' => 15, 'TS' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'E_CODE' => 1, 'EcosystemRefno' => 2, 'Speccode' => 3, 'Stockcode' => 4, 'Status' => 5, 'Abundance' => 6, 'LifeStage' => 7, 'Remarks' => 8, 'Entered' => 9, 'Dateentered' => 10, 'Modified' => 11, 'Datemodified' => 12, 'Expert' => 13, 'Datechecked' => 14, 'WebURL' => 15, 'TS' => 16, ),
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
        $toNames = EcosystemPeer::getFieldNames($toType);
        $key = isset(EcosystemPeer::$fieldKeys[$fromType][$name]) ? EcosystemPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EcosystemPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, EcosystemPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EcosystemPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. EcosystemPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EcosystemPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(EcosystemPeer::AUTOCTR);
            $criteria->addSelectColumn(EcosystemPeer::E_CODE);
            $criteria->addSelectColumn(EcosystemPeer::ECOSYSTEMREFNO);
            $criteria->addSelectColumn(EcosystemPeer::SPECCODE);
            $criteria->addSelectColumn(EcosystemPeer::STOCKCODE);
            $criteria->addSelectColumn(EcosystemPeer::STATUS);
            $criteria->addSelectColumn(EcosystemPeer::ABUNDANCE);
            $criteria->addSelectColumn(EcosystemPeer::LIFESTAGE);
            $criteria->addSelectColumn(EcosystemPeer::REMARKS);
            $criteria->addSelectColumn(EcosystemPeer::ENTERED);
            $criteria->addSelectColumn(EcosystemPeer::DATEENTERED);
            $criteria->addSelectColumn(EcosystemPeer::MODIFIED);
            $criteria->addSelectColumn(EcosystemPeer::DATEMODIFIED);
            $criteria->addSelectColumn(EcosystemPeer::EXPERT);
            $criteria->addSelectColumn(EcosystemPeer::DATECHECKED);
            $criteria->addSelectColumn(EcosystemPeer::WEBURL);
            $criteria->addSelectColumn(EcosystemPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.E_CODE');
            $criteria->addSelectColumn($alias . '.EcosystemRefno');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.Stockcode');
            $criteria->addSelectColumn($alias . '.Status');
            $criteria->addSelectColumn($alias . '.Abundance');
            $criteria->addSelectColumn($alias . '.LifeStage');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.Dateentered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.Datemodified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.Datechecked');
            $criteria->addSelectColumn($alias . '.WebURL');
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
        $criteria->setPrimaryTableName(EcosystemPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EcosystemPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EcosystemPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EcosystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Ecosystem
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EcosystemPeer::doSelect($critcopy, $con);
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
        return EcosystemPeer::populateObjects(EcosystemPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(EcosystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EcosystemPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EcosystemPeer::DATABASE_NAME);

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
     * @param Ecosystem $obj A Ecosystem object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getECode(), (string) $obj->getStockcode(), (string) $obj->getLifestage()));
            } // if key === null
            EcosystemPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Ecosystem object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Ecosystem) {
                $key = serialize(array((string) $value->getECode(), (string) $value->getStockcode(), (string) $value->getLifestage()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Ecosystem object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EcosystemPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Ecosystem Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EcosystemPeer::$instances[$key])) {
                return EcosystemPeer::$instances[$key];
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
        foreach (EcosystemPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        EcosystemPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to ecosystem
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
        if ($row[$startcol + 1] === null && $row[$startcol + 4] === null && $row[$startcol + 7] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 4], (string) $row[$startcol + 7]));
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

        return array((int) $row[$startcol + 1], (int) $row[$startcol + 4], (string) $row[$startcol + 7]);
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
        $cls = EcosystemPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EcosystemPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EcosystemPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EcosystemPeer::addInstanceToPool($obj, $key);
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
     * @return array (Ecosystem object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EcosystemPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EcosystemPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EcosystemPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EcosystemPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EcosystemPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(EcosystemPeer::DATABASE_NAME)->getTable(EcosystemPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEcosystemPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEcosystemPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \EcosystemTableMap());
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
        return EcosystemPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Ecosystem or Criteria object.
     *
     * @param      mixed $values Criteria or Ecosystem object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EcosystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Ecosystem object
        }


        // Set the correct dbName
        $criteria->setDbName(EcosystemPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Ecosystem or Criteria object.
     *
     * @param      mixed $values Criteria or Ecosystem object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EcosystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EcosystemPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EcosystemPeer::E_CODE);
            $value = $criteria->remove(EcosystemPeer::E_CODE);
            if ($value) {
                $selectCriteria->add(EcosystemPeer::E_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EcosystemPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(EcosystemPeer::STOCKCODE);
            $value = $criteria->remove(EcosystemPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(EcosystemPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EcosystemPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(EcosystemPeer::LIFESTAGE);
            $value = $criteria->remove(EcosystemPeer::LIFESTAGE);
            if ($value) {
                $selectCriteria->add(EcosystemPeer::LIFESTAGE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EcosystemPeer::TABLE_NAME);
            }

        } else { // $values is Ecosystem object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EcosystemPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ecosystem table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EcosystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(EcosystemPeer::TABLE_NAME, $con, EcosystemPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EcosystemPeer::clearInstancePool();
            EcosystemPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Ecosystem or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Ecosystem object or primary key or array of primary keys
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
            $con = Propel::getConnection(EcosystemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            EcosystemPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Ecosystem) { // it's a model object
            // invalidate the cache for this single object
            EcosystemPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EcosystemPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(EcosystemPeer::E_CODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(EcosystemPeer::STOCKCODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(EcosystemPeer::LIFESTAGE, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                EcosystemPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(EcosystemPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            EcosystemPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Ecosystem object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Ecosystem $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EcosystemPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EcosystemPeer::TABLE_NAME);

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

        return BasePeer::doValidate(EcosystemPeer::DATABASE_NAME, EcosystemPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $e_code
     * @param   int $stockcode
     * @param   string $lifestage
     * @param      PropelPDO $con
     * @return Ecosystem
     */
    public static function retrieveByPK($e_code, $stockcode, $lifestage, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $e_code, (string) $stockcode, (string) $lifestage));
         if (null !== ($obj = EcosystemPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EcosystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(EcosystemPeer::DATABASE_NAME);
        $criteria->add(EcosystemPeer::E_CODE, $e_code);
        $criteria->add(EcosystemPeer::STOCKCODE, $stockcode);
        $criteria->add(EcosystemPeer::LIFESTAGE, $lifestage);
        $v = EcosystemPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseEcosystemPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEcosystemPeer::buildTableMap();

