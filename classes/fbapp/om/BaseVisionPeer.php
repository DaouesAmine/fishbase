<?php


/**
 * Base static class for performing query and update operations on the 'vision' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseVisionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'vision';

    /** the related Propel class for this table */
    const OM_CLASS = 'Vision';

    /** the related TableMap class for this table */
    const TM_CLASS = 'VisionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 18;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 18;

    /** the column name for the autoctr field */
    const AUTOCTR = 'vision.autoctr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'vision.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'vision.SpecCode';

    /** the column name for the VisionRefNo field */
    const VISIONREFNO = 'vision.VisionRefNo';

    /** the column name for the Genus field */
    const GENUS = 'vision.Genus';

    /** the column name for the Species field */
    const SPECIES = 'vision.Species';

    /** the column name for the Sensit field */
    const SENSIT = 'vision.Sensit';

    /** the column name for the ConfInt field */
    const CONFINT = 'vision.ConfInt';

    /** the column name for the DataRefNo field */
    const DATAREFNO = 'vision.DataRefNo';

    /** the column name for the OtherPigment field */
    const OTHERPIGMENT = 'vision.OtherPigment';

    /** the column name for the scratch field */
    const SCRATCH = 'vision.scratch';

    /** the column name for the Entered field */
    const ENTERED = 'vision.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'vision.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'vision.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'vision.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'vision.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'vision.DateChecked';

    /** the column name for the TS field */
    const TS = 'vision.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Vision objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Vision[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. VisionPeer::$fieldNames[VisionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Visionrefno', 'Genus', 'Species', 'Sensit', 'Confint', 'Datarefno', 'Otherpigment', 'Scratch', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'visionrefno', 'genus', 'species', 'sensit', 'confint', 'datarefno', 'otherpigment', 'scratch', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (VisionPeer::AUTOCTR, VisionPeer::STOCKCODE, VisionPeer::SPECCODE, VisionPeer::VISIONREFNO, VisionPeer::GENUS, VisionPeer::SPECIES, VisionPeer::SENSIT, VisionPeer::CONFINT, VisionPeer::DATAREFNO, VisionPeer::OTHERPIGMENT, VisionPeer::SCRATCH, VisionPeer::ENTERED, VisionPeer::DATEENTERED, VisionPeer::MODIFIED, VisionPeer::DATEMODIFIED, VisionPeer::EXPERT, VisionPeer::DATECHECKED, VisionPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'VISIONREFNO', 'GENUS', 'SPECIES', 'SENSIT', 'CONFINT', 'DATAREFNO', 'OTHERPIGMENT', 'SCRATCH', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'StockCode', 'SpecCode', 'VisionRefNo', 'Genus', 'Species', 'Sensit', 'ConfInt', 'DataRefNo', 'OtherPigment', 'scratch', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. VisionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Visionrefno' => 3, 'Genus' => 4, 'Species' => 5, 'Sensit' => 6, 'Confint' => 7, 'Datarefno' => 8, 'Otherpigment' => 9, 'Scratch' => 10, 'Entered' => 11, 'Dateentered' => 12, 'Modified' => 13, 'Datemodified' => 14, 'Expert' => 15, 'Datechecked' => 16, 'Ts' => 17, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'visionrefno' => 3, 'genus' => 4, 'species' => 5, 'sensit' => 6, 'confint' => 7, 'datarefno' => 8, 'otherpigment' => 9, 'scratch' => 10, 'entered' => 11, 'dateentered' => 12, 'modified' => 13, 'datemodified' => 14, 'expert' => 15, 'datechecked' => 16, 'ts' => 17, ),
        BasePeer::TYPE_COLNAME => array (VisionPeer::AUTOCTR => 0, VisionPeer::STOCKCODE => 1, VisionPeer::SPECCODE => 2, VisionPeer::VISIONREFNO => 3, VisionPeer::GENUS => 4, VisionPeer::SPECIES => 5, VisionPeer::SENSIT => 6, VisionPeer::CONFINT => 7, VisionPeer::DATAREFNO => 8, VisionPeer::OTHERPIGMENT => 9, VisionPeer::SCRATCH => 10, VisionPeer::ENTERED => 11, VisionPeer::DATEENTERED => 12, VisionPeer::MODIFIED => 13, VisionPeer::DATEMODIFIED => 14, VisionPeer::EXPERT => 15, VisionPeer::DATECHECKED => 16, VisionPeer::TS => 17, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'VISIONREFNO' => 3, 'GENUS' => 4, 'SPECIES' => 5, 'SENSIT' => 6, 'CONFINT' => 7, 'DATAREFNO' => 8, 'OTHERPIGMENT' => 9, 'SCRATCH' => 10, 'ENTERED' => 11, 'DATEENTERED' => 12, 'MODIFIED' => 13, 'DATEMODIFIED' => 14, 'EXPERT' => 15, 'DATECHECKED' => 16, 'TS' => 17, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'VisionRefNo' => 3, 'Genus' => 4, 'Species' => 5, 'Sensit' => 6, 'ConfInt' => 7, 'DataRefNo' => 8, 'OtherPigment' => 9, 'scratch' => 10, 'Entered' => 11, 'DateEntered' => 12, 'Modified' => 13, 'DateModified' => 14, 'Expert' => 15, 'DateChecked' => 16, 'TS' => 17, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
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
        $toNames = VisionPeer::getFieldNames($toType);
        $key = isset(VisionPeer::$fieldKeys[$fromType][$name]) ? VisionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(VisionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, VisionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return VisionPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. VisionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(VisionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(VisionPeer::AUTOCTR);
            $criteria->addSelectColumn(VisionPeer::STOCKCODE);
            $criteria->addSelectColumn(VisionPeer::SPECCODE);
            $criteria->addSelectColumn(VisionPeer::VISIONREFNO);
            $criteria->addSelectColumn(VisionPeer::GENUS);
            $criteria->addSelectColumn(VisionPeer::SPECIES);
            $criteria->addSelectColumn(VisionPeer::SENSIT);
            $criteria->addSelectColumn(VisionPeer::CONFINT);
            $criteria->addSelectColumn(VisionPeer::DATAREFNO);
            $criteria->addSelectColumn(VisionPeer::OTHERPIGMENT);
            $criteria->addSelectColumn(VisionPeer::SCRATCH);
            $criteria->addSelectColumn(VisionPeer::ENTERED);
            $criteria->addSelectColumn(VisionPeer::DATEENTERED);
            $criteria->addSelectColumn(VisionPeer::MODIFIED);
            $criteria->addSelectColumn(VisionPeer::DATEMODIFIED);
            $criteria->addSelectColumn(VisionPeer::EXPERT);
            $criteria->addSelectColumn(VisionPeer::DATECHECKED);
            $criteria->addSelectColumn(VisionPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.VisionRefNo');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.Sensit');
            $criteria->addSelectColumn($alias . '.ConfInt');
            $criteria->addSelectColumn($alias . '.DataRefNo');
            $criteria->addSelectColumn($alias . '.OtherPigment');
            $criteria->addSelectColumn($alias . '.scratch');
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
        $criteria->setPrimaryTableName(VisionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VisionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(VisionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(VisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Vision
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = VisionPeer::doSelect($critcopy, $con);
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
        return VisionPeer::populateObjects(VisionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(VisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            VisionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(VisionPeer::DATABASE_NAME);

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
     * @param Vision $obj A Vision object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            VisionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Vision object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Vision) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Vision object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(VisionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Vision Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(VisionPeer::$instances[$key])) {
                return VisionPeer::$instances[$key];
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
        foreach (VisionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        VisionPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to vision
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
        $cls = VisionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = VisionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = VisionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                VisionPeer::addInstanceToPool($obj, $key);
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
     * @return array (Vision object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = VisionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = VisionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + VisionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = VisionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            VisionPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(VisionPeer::DATABASE_NAME)->getTable(VisionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseVisionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseVisionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \VisionTableMap());
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
        return VisionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Vision or Criteria object.
     *
     * @param      mixed $values Criteria or Vision object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Vision object
        }

        if ($criteria->containsKey(VisionPeer::AUTOCTR) && $criteria->keyContainsValue(VisionPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.VisionPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(VisionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Vision or Criteria object.
     *
     * @param      mixed $values Criteria or Vision object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(VisionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(VisionPeer::AUTOCTR);
            $value = $criteria->remove(VisionPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(VisionPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(VisionPeer::TABLE_NAME);
            }

        } else { // $values is Vision object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(VisionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the vision table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(VisionPeer::TABLE_NAME, $con, VisionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            VisionPeer::clearInstancePool();
            VisionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Vision or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Vision object or primary key or array of primary keys
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
            $con = Propel::getConnection(VisionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            VisionPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Vision) { // it's a model object
            // invalidate the cache for this single object
            VisionPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(VisionPeer::DATABASE_NAME);
            $criteria->add(VisionPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                VisionPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(VisionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            VisionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Vision object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Vision $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(VisionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(VisionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(VisionPeer::DATABASE_NAME, VisionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Vision
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = VisionPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(VisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(VisionPeer::DATABASE_NAME);
        $criteria->add(VisionPeer::AUTOCTR, $pk);

        $v = VisionPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Vision[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(VisionPeer::DATABASE_NAME);
            $criteria->add(VisionPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = VisionPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseVisionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseVisionPeer::buildTableMap();

