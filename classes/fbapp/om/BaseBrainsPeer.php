<?php


/**
 * Base static class for performing query and update operations on the 'brains' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseBrainsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'brains';

    /** the related Propel class for this table */
    const OM_CLASS = 'Brains';

    /** the related TableMap class for this table */
    const TM_CLASS = 'BrainsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 18;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 18;

    /** the column name for the autoctr field */
    const AUTOCTR = 'brains.autoctr';

    /** the column name for the Name field */
    const NAME = 'brains.Name';

    /** the column name for the Genus field */
    const GENUS = 'brains.Genus';

    /** the column name for the Species field */
    const SPECIES = 'brains.Species';

    /** the column name for the SpecCode field */
    const SPECCODE = 'brains.SpecCode';

    /** the column name for the StockCode field */
    const STOCKCODE = 'brains.StockCode';

    /** the column name for the Locality field */
    const LOCALITY = 'brains.Locality';

    /** the column name for the Number field */
    const NUMBER = 'brains.Number';

    /** the column name for the Year field */
    const YEAR = 'brains.Year';

    /** the column name for the BodyWeight field */
    const BODYWEIGHT = 'brains.BodyWeight';

    /** the column name for the BrainWeight field */
    const BRAINWEIGHT = 'brains.BrainWeight';

    /** the column name for the EncCoeff field */
    const ENCCOEFF = 'brains.EncCoeff';

    /** the column name for the EncIndex field */
    const ENCINDEX = 'brains.EncIndex';

    /** the column name for the SL field */
    const SL = 'brains.SL';

    /** the column name for the TL field */
    const TL = 'brains.TL';

    /** the column name for the BRAINSRefNo field */
    const BRAINSREFNO = 'brains.BRAINSRefNo';

    /** the column name for the Remarks field */
    const REMARKS = 'brains.Remarks';

    /** the column name for the TS field */
    const TS = 'brains.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Brains objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Brains[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. BrainsPeer::$fieldNames[BrainsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Name', 'Genus', 'Species', 'Speccode', 'Stockcode', 'Locality', 'Number', 'Year', 'Bodyweight', 'Brainweight', 'Enccoeff', 'Encindex', 'Sl', 'Tl', 'Brainsrefno', 'Remarks', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'name', 'genus', 'species', 'speccode', 'stockcode', 'locality', 'number', 'year', 'bodyweight', 'brainweight', 'enccoeff', 'encindex', 'sl', 'tl', 'brainsrefno', 'remarks', 'ts', ),
        BasePeer::TYPE_COLNAME => array (BrainsPeer::AUTOCTR, BrainsPeer::NAME, BrainsPeer::GENUS, BrainsPeer::SPECIES, BrainsPeer::SPECCODE, BrainsPeer::STOCKCODE, BrainsPeer::LOCALITY, BrainsPeer::NUMBER, BrainsPeer::YEAR, BrainsPeer::BODYWEIGHT, BrainsPeer::BRAINWEIGHT, BrainsPeer::ENCCOEFF, BrainsPeer::ENCINDEX, BrainsPeer::SL, BrainsPeer::TL, BrainsPeer::BRAINSREFNO, BrainsPeer::REMARKS, BrainsPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'NAME', 'GENUS', 'SPECIES', 'SPECCODE', 'STOCKCODE', 'LOCALITY', 'NUMBER', 'YEAR', 'BODYWEIGHT', 'BRAINWEIGHT', 'ENCCOEFF', 'ENCINDEX', 'SL', 'TL', 'BRAINSREFNO', 'REMARKS', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'Name', 'Genus', 'Species', 'SpecCode', 'StockCode', 'Locality', 'Number', 'Year', 'BodyWeight', 'BrainWeight', 'EncCoeff', 'EncIndex', 'SL', 'TL', 'BRAINSRefNo', 'Remarks', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. BrainsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Name' => 1, 'Genus' => 2, 'Species' => 3, 'Speccode' => 4, 'Stockcode' => 5, 'Locality' => 6, 'Number' => 7, 'Year' => 8, 'Bodyweight' => 9, 'Brainweight' => 10, 'Enccoeff' => 11, 'Encindex' => 12, 'Sl' => 13, 'Tl' => 14, 'Brainsrefno' => 15, 'Remarks' => 16, 'Ts' => 17, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'name' => 1, 'genus' => 2, 'species' => 3, 'speccode' => 4, 'stockcode' => 5, 'locality' => 6, 'number' => 7, 'year' => 8, 'bodyweight' => 9, 'brainweight' => 10, 'enccoeff' => 11, 'encindex' => 12, 'sl' => 13, 'tl' => 14, 'brainsrefno' => 15, 'remarks' => 16, 'ts' => 17, ),
        BasePeer::TYPE_COLNAME => array (BrainsPeer::AUTOCTR => 0, BrainsPeer::NAME => 1, BrainsPeer::GENUS => 2, BrainsPeer::SPECIES => 3, BrainsPeer::SPECCODE => 4, BrainsPeer::STOCKCODE => 5, BrainsPeer::LOCALITY => 6, BrainsPeer::NUMBER => 7, BrainsPeer::YEAR => 8, BrainsPeer::BODYWEIGHT => 9, BrainsPeer::BRAINWEIGHT => 10, BrainsPeer::ENCCOEFF => 11, BrainsPeer::ENCINDEX => 12, BrainsPeer::SL => 13, BrainsPeer::TL => 14, BrainsPeer::BRAINSREFNO => 15, BrainsPeer::REMARKS => 16, BrainsPeer::TS => 17, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'NAME' => 1, 'GENUS' => 2, 'SPECIES' => 3, 'SPECCODE' => 4, 'STOCKCODE' => 5, 'LOCALITY' => 6, 'NUMBER' => 7, 'YEAR' => 8, 'BODYWEIGHT' => 9, 'BRAINWEIGHT' => 10, 'ENCCOEFF' => 11, 'ENCINDEX' => 12, 'SL' => 13, 'TL' => 14, 'BRAINSREFNO' => 15, 'REMARKS' => 16, 'TS' => 17, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'Name' => 1, 'Genus' => 2, 'Species' => 3, 'SpecCode' => 4, 'StockCode' => 5, 'Locality' => 6, 'Number' => 7, 'Year' => 8, 'BodyWeight' => 9, 'BrainWeight' => 10, 'EncCoeff' => 11, 'EncIndex' => 12, 'SL' => 13, 'TL' => 14, 'BRAINSRefNo' => 15, 'Remarks' => 16, 'TS' => 17, ),
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
        $toNames = BrainsPeer::getFieldNames($toType);
        $key = isset(BrainsPeer::$fieldKeys[$fromType][$name]) ? BrainsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(BrainsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, BrainsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return BrainsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. BrainsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(BrainsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(BrainsPeer::AUTOCTR);
            $criteria->addSelectColumn(BrainsPeer::NAME);
            $criteria->addSelectColumn(BrainsPeer::GENUS);
            $criteria->addSelectColumn(BrainsPeer::SPECIES);
            $criteria->addSelectColumn(BrainsPeer::SPECCODE);
            $criteria->addSelectColumn(BrainsPeer::STOCKCODE);
            $criteria->addSelectColumn(BrainsPeer::LOCALITY);
            $criteria->addSelectColumn(BrainsPeer::NUMBER);
            $criteria->addSelectColumn(BrainsPeer::YEAR);
            $criteria->addSelectColumn(BrainsPeer::BODYWEIGHT);
            $criteria->addSelectColumn(BrainsPeer::BRAINWEIGHT);
            $criteria->addSelectColumn(BrainsPeer::ENCCOEFF);
            $criteria->addSelectColumn(BrainsPeer::ENCINDEX);
            $criteria->addSelectColumn(BrainsPeer::SL);
            $criteria->addSelectColumn(BrainsPeer::TL);
            $criteria->addSelectColumn(BrainsPeer::BRAINSREFNO);
            $criteria->addSelectColumn(BrainsPeer::REMARKS);
            $criteria->addSelectColumn(BrainsPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.Name');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.Number');
            $criteria->addSelectColumn($alias . '.Year');
            $criteria->addSelectColumn($alias . '.BodyWeight');
            $criteria->addSelectColumn($alias . '.BrainWeight');
            $criteria->addSelectColumn($alias . '.EncCoeff');
            $criteria->addSelectColumn($alias . '.EncIndex');
            $criteria->addSelectColumn($alias . '.SL');
            $criteria->addSelectColumn($alias . '.TL');
            $criteria->addSelectColumn($alias . '.BRAINSRefNo');
            $criteria->addSelectColumn($alias . '.Remarks');
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
        $criteria->setPrimaryTableName(BrainsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            BrainsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(BrainsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(BrainsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Brains
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = BrainsPeer::doSelect($critcopy, $con);
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
        return BrainsPeer::populateObjects(BrainsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(BrainsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            BrainsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(BrainsPeer::DATABASE_NAME);

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
     * @param Brains $obj A Brains object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            BrainsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Brains object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Brains) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Brains object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(BrainsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Brains Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(BrainsPeer::$instances[$key])) {
                return BrainsPeer::$instances[$key];
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
        foreach (BrainsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        BrainsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to brains
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
        $cls = BrainsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = BrainsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = BrainsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                BrainsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Brains object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = BrainsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = BrainsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + BrainsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = BrainsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            BrainsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(BrainsPeer::DATABASE_NAME)->getTable(BrainsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseBrainsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseBrainsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \BrainsTableMap());
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
        return BrainsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Brains or Criteria object.
     *
     * @param      mixed $values Criteria or Brains object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BrainsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Brains object
        }

        if ($criteria->containsKey(BrainsPeer::AUTOCTR) && $criteria->keyContainsValue(BrainsPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.BrainsPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(BrainsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Brains or Criteria object.
     *
     * @param      mixed $values Criteria or Brains object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BrainsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(BrainsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(BrainsPeer::AUTOCTR);
            $value = $criteria->remove(BrainsPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(BrainsPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(BrainsPeer::TABLE_NAME);
            }

        } else { // $values is Brains object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(BrainsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the brains table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BrainsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(BrainsPeer::TABLE_NAME, $con, BrainsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            BrainsPeer::clearInstancePool();
            BrainsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Brains or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Brains object or primary key or array of primary keys
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
            $con = Propel::getConnection(BrainsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            BrainsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Brains) { // it's a model object
            // invalidate the cache for this single object
            BrainsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(BrainsPeer::DATABASE_NAME);
            $criteria->add(BrainsPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                BrainsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(BrainsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            BrainsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Brains object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Brains $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(BrainsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(BrainsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(BrainsPeer::DATABASE_NAME, BrainsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Brains
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = BrainsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(BrainsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(BrainsPeer::DATABASE_NAME);
        $criteria->add(BrainsPeer::AUTOCTR, $pk);

        $v = BrainsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Brains[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(BrainsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(BrainsPeer::DATABASE_NAME);
            $criteria->add(BrainsPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = BrainsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseBrainsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseBrainsPeer::buildTableMap();

