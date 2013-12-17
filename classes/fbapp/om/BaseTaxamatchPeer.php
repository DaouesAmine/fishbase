<?php


/**
 * Base static class for performing query and update operations on the 'taxamatch' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseTaxamatchPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'taxamatch';

    /** the related Propel class for this table */
    const OM_CLASS = 'Taxamatch';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TaxamatchTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the SpecCode field */
    const SPECCODE = 'taxamatch.SpecCode';

    /** the column name for the SynCode field */
    const SYNCODE = 'taxamatch.SynCode';

    /** the column name for the SynGenus field */
    const SYNGENUS = 'taxamatch.SynGenus';

    /** the column name for the SynSpecies field */
    const SYNSPECIES = 'taxamatch.SynSpecies';

    /** the column name for the Status field */
    const STATUS = 'taxamatch.Status';

    /** the column name for the LastEpithet field */
    const LASTEPITHET = 'taxamatch.LastEpithet';

    /** the column name for the NormalizeGenus field */
    const NORMALIZEGENUS = 'taxamatch.NormalizeGenus';

    /** the column name for the NormalizeSpecies field */
    const NORMALIZESPECIES = 'taxamatch.NormalizeSpecies';

    /** the column name for the NormalizeLastEpithet field */
    const NORMALIZELASTEPITHET = 'taxamatch.NormalizeLastEpithet';

    /** the column name for the SoundexGenus field */
    const SOUNDEXGENUS = 'taxamatch.SoundexGenus';

    /** the column name for the SoundexSpecies field */
    const SOUNDEXSPECIES = 'taxamatch.SoundexSpecies';

    /** the column name for the SoundexLastEpithet field */
    const SOUNDEXLASTEPITHET = 'taxamatch.SoundexLastEpithet';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Taxamatch objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Taxamatch[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TaxamatchPeer::$fieldNames[TaxamatchPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode', 'Syncode', 'Syngenus', 'Synspecies', 'Status', 'Lastepithet', 'Normalizegenus', 'Normalizespecies', 'Normalizelastepithet', 'Soundexgenus', 'Soundexspecies', 'Soundexlastepithet', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode', 'syncode', 'syngenus', 'synspecies', 'status', 'lastepithet', 'normalizegenus', 'normalizespecies', 'normalizelastepithet', 'soundexgenus', 'soundexspecies', 'soundexlastepithet', ),
        BasePeer::TYPE_COLNAME => array (TaxamatchPeer::SPECCODE, TaxamatchPeer::SYNCODE, TaxamatchPeer::SYNGENUS, TaxamatchPeer::SYNSPECIES, TaxamatchPeer::STATUS, TaxamatchPeer::LASTEPITHET, TaxamatchPeer::NORMALIZEGENUS, TaxamatchPeer::NORMALIZESPECIES, TaxamatchPeer::NORMALIZELASTEPITHET, TaxamatchPeer::SOUNDEXGENUS, TaxamatchPeer::SOUNDEXSPECIES, TaxamatchPeer::SOUNDEXLASTEPITHET, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE', 'SYNCODE', 'SYNGENUS', 'SYNSPECIES', 'STATUS', 'LASTEPITHET', 'NORMALIZEGENUS', 'NORMALIZESPECIES', 'NORMALIZELASTEPITHET', 'SOUNDEXGENUS', 'SOUNDEXSPECIES', 'SOUNDEXLASTEPITHET', ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode', 'SynCode', 'SynGenus', 'SynSpecies', 'Status', 'LastEpithet', 'NormalizeGenus', 'NormalizeSpecies', 'NormalizeLastEpithet', 'SoundexGenus', 'SoundexSpecies', 'SoundexLastEpithet', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TaxamatchPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode' => 0, 'Syncode' => 1, 'Syngenus' => 2, 'Synspecies' => 3, 'Status' => 4, 'Lastepithet' => 5, 'Normalizegenus' => 6, 'Normalizespecies' => 7, 'Normalizelastepithet' => 8, 'Soundexgenus' => 9, 'Soundexspecies' => 10, 'Soundexlastepithet' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode' => 0, 'syncode' => 1, 'syngenus' => 2, 'synspecies' => 3, 'status' => 4, 'lastepithet' => 5, 'normalizegenus' => 6, 'normalizespecies' => 7, 'normalizelastepithet' => 8, 'soundexgenus' => 9, 'soundexspecies' => 10, 'soundexlastepithet' => 11, ),
        BasePeer::TYPE_COLNAME => array (TaxamatchPeer::SPECCODE => 0, TaxamatchPeer::SYNCODE => 1, TaxamatchPeer::SYNGENUS => 2, TaxamatchPeer::SYNSPECIES => 3, TaxamatchPeer::STATUS => 4, TaxamatchPeer::LASTEPITHET => 5, TaxamatchPeer::NORMALIZEGENUS => 6, TaxamatchPeer::NORMALIZESPECIES => 7, TaxamatchPeer::NORMALIZELASTEPITHET => 8, TaxamatchPeer::SOUNDEXGENUS => 9, TaxamatchPeer::SOUNDEXSPECIES => 10, TaxamatchPeer::SOUNDEXLASTEPITHET => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE' => 0, 'SYNCODE' => 1, 'SYNGENUS' => 2, 'SYNSPECIES' => 3, 'STATUS' => 4, 'LASTEPITHET' => 5, 'NORMALIZEGENUS' => 6, 'NORMALIZESPECIES' => 7, 'NORMALIZELASTEPITHET' => 8, 'SOUNDEXGENUS' => 9, 'SOUNDEXSPECIES' => 10, 'SOUNDEXLASTEPITHET' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode' => 0, 'SynCode' => 1, 'SynGenus' => 2, 'SynSpecies' => 3, 'Status' => 4, 'LastEpithet' => 5, 'NormalizeGenus' => 6, 'NormalizeSpecies' => 7, 'NormalizeLastEpithet' => 8, 'SoundexGenus' => 9, 'SoundexSpecies' => 10, 'SoundexLastEpithet' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $toNames = TaxamatchPeer::getFieldNames($toType);
        $key = isset(TaxamatchPeer::$fieldKeys[$fromType][$name]) ? TaxamatchPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TaxamatchPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TaxamatchPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TaxamatchPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. TaxamatchPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TaxamatchPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TaxamatchPeer::SPECCODE);
            $criteria->addSelectColumn(TaxamatchPeer::SYNCODE);
            $criteria->addSelectColumn(TaxamatchPeer::SYNGENUS);
            $criteria->addSelectColumn(TaxamatchPeer::SYNSPECIES);
            $criteria->addSelectColumn(TaxamatchPeer::STATUS);
            $criteria->addSelectColumn(TaxamatchPeer::LASTEPITHET);
            $criteria->addSelectColumn(TaxamatchPeer::NORMALIZEGENUS);
            $criteria->addSelectColumn(TaxamatchPeer::NORMALIZESPECIES);
            $criteria->addSelectColumn(TaxamatchPeer::NORMALIZELASTEPITHET);
            $criteria->addSelectColumn(TaxamatchPeer::SOUNDEXGENUS);
            $criteria->addSelectColumn(TaxamatchPeer::SOUNDEXSPECIES);
            $criteria->addSelectColumn(TaxamatchPeer::SOUNDEXLASTEPITHET);
        } else {
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.SynCode');
            $criteria->addSelectColumn($alias . '.SynGenus');
            $criteria->addSelectColumn($alias . '.SynSpecies');
            $criteria->addSelectColumn($alias . '.Status');
            $criteria->addSelectColumn($alias . '.LastEpithet');
            $criteria->addSelectColumn($alias . '.NormalizeGenus');
            $criteria->addSelectColumn($alias . '.NormalizeSpecies');
            $criteria->addSelectColumn($alias . '.NormalizeLastEpithet');
            $criteria->addSelectColumn($alias . '.SoundexGenus');
            $criteria->addSelectColumn($alias . '.SoundexSpecies');
            $criteria->addSelectColumn($alias . '.SoundexLastEpithet');
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
        $criteria->setPrimaryTableName(TaxamatchPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TaxamatchPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TaxamatchPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TaxamatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Taxamatch
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TaxamatchPeer::doSelect($critcopy, $con);
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
        return TaxamatchPeer::populateObjects(TaxamatchPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TaxamatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TaxamatchPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TaxamatchPeer::DATABASE_NAME);

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
     * @param Taxamatch $obj A Taxamatch object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getSpeccode(), (string) $obj->getSyncode()));
            } // if key === null
            TaxamatchPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Taxamatch object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Taxamatch) {
                $key = serialize(array((string) $value->getSpeccode(), (string) $value->getSyncode()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Taxamatch object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TaxamatchPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Taxamatch Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TaxamatchPeer::$instances[$key])) {
                return TaxamatchPeer::$instances[$key];
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
        foreach (TaxamatchPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TaxamatchPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to taxamatch
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 1]);
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
        $cls = TaxamatchPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TaxamatchPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TaxamatchPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TaxamatchPeer::addInstanceToPool($obj, $key);
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
     * @return array (Taxamatch object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TaxamatchPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TaxamatchPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TaxamatchPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TaxamatchPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TaxamatchPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(TaxamatchPeer::DATABASE_NAME)->getTable(TaxamatchPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTaxamatchPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTaxamatchPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \TaxamatchTableMap());
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
        return TaxamatchPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Taxamatch or Criteria object.
     *
     * @param      mixed $values Criteria or Taxamatch object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TaxamatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Taxamatch object
        }


        // Set the correct dbName
        $criteria->setDbName(TaxamatchPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Taxamatch or Criteria object.
     *
     * @param      mixed $values Criteria or Taxamatch object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TaxamatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TaxamatchPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TaxamatchPeer::SPECCODE);
            $value = $criteria->remove(TaxamatchPeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(TaxamatchPeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TaxamatchPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(TaxamatchPeer::SYNCODE);
            $value = $criteria->remove(TaxamatchPeer::SYNCODE);
            if ($value) {
                $selectCriteria->add(TaxamatchPeer::SYNCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TaxamatchPeer::TABLE_NAME);
            }

        } else { // $values is Taxamatch object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TaxamatchPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the taxamatch table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TaxamatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TaxamatchPeer::TABLE_NAME, $con, TaxamatchPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TaxamatchPeer::clearInstancePool();
            TaxamatchPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Taxamatch or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Taxamatch object or primary key or array of primary keys
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
            $con = Propel::getConnection(TaxamatchPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TaxamatchPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Taxamatch) { // it's a model object
            // invalidate the cache for this single object
            TaxamatchPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TaxamatchPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(TaxamatchPeer::SPECCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(TaxamatchPeer::SYNCODE, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                TaxamatchPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TaxamatchPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TaxamatchPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Taxamatch object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Taxamatch $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TaxamatchPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TaxamatchPeer::TABLE_NAME);

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

        return BasePeer::doValidate(TaxamatchPeer::DATABASE_NAME, TaxamatchPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $speccode
     * @param   int $syncode
     * @param      PropelPDO $con
     * @return Taxamatch
     */
    public static function retrieveByPK($speccode, $syncode, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $speccode, (string) $syncode));
         if (null !== ($obj = TaxamatchPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TaxamatchPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(TaxamatchPeer::DATABASE_NAME);
        $criteria->add(TaxamatchPeer::SPECCODE, $speccode);
        $criteria->add(TaxamatchPeer::SYNCODE, $syncode);
        $v = TaxamatchPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseTaxamatchPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTaxamatchPeer::buildTableMap();

