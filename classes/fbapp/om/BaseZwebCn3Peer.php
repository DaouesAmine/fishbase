<?php


/**
 * Base static class for performing query and update operations on the 'zweb_cn3' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseZwebCn3Peer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'zweb_cn3';

    /** the related Propel class for this table */
    const OM_CLASS = 'ZwebCn3';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ZwebCn3TableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the SpecCode field */
    const SPECCODE = 'zweb_cn3.SpecCode';

    /** the column name for the ComName field */
    const COMNAME = 'zweb_cn3.ComName';

    /** the column name for the NameType field */
    const NAMETYPE = 'zweb_cn3.NameType';

    /** the column name for the NT field */
    const NT = 'zweb_cn3.NT';

    /** the column name for the Rank1 field */
    const RANK1 = 'zweb_cn3.Rank1';

    /** the column name for the Eng field */
    const ENG = 'zweb_cn3.Eng';

    /** the column name for the Fre field */
    const FRE = 'zweb_cn3.Fre';

    /** the column name for the Spa field */
    const SPA = 'zweb_cn3.Spa';

    /** the column name for the autoctr field */
    const AUTOCTR = 'zweb_cn3.autoctr';

    /** the column name for the UnicodeText field */
    const UNICODETEXT = 'zweb_cn3.UnicodeText';

    /** the column name for the Script field */
    const SCRIPT = 'zweb_cn3.Script';

    /** the column name for the PKID field */
    const PKID = 'zweb_cn3.PKID';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ZwebCn3 objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ZwebCn3[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ZwebCn3Peer::$fieldNames[ZwebCn3Peer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode', 'Comname', 'Nametype', 'Nt', 'Rank1', 'Eng', 'Fre', 'Spa', 'Autoctr', 'Unicodetext', 'Script', 'Pkid', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode', 'comname', 'nametype', 'nt', 'rank1', 'eng', 'fre', 'spa', 'autoctr', 'unicodetext', 'script', 'pkid', ),
        BasePeer::TYPE_COLNAME => array (ZwebCn3Peer::SPECCODE, ZwebCn3Peer::COMNAME, ZwebCn3Peer::NAMETYPE, ZwebCn3Peer::NT, ZwebCn3Peer::RANK1, ZwebCn3Peer::ENG, ZwebCn3Peer::FRE, ZwebCn3Peer::SPA, ZwebCn3Peer::AUTOCTR, ZwebCn3Peer::UNICODETEXT, ZwebCn3Peer::SCRIPT, ZwebCn3Peer::PKID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE', 'COMNAME', 'NAMETYPE', 'NT', 'RANK1', 'ENG', 'FRE', 'SPA', 'AUTOCTR', 'UNICODETEXT', 'SCRIPT', 'PKID', ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode', 'ComName', 'NameType', 'NT', 'Rank1', 'Eng', 'Fre', 'Spa', 'autoctr', 'UnicodeText', 'Script', 'PKID', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ZwebCn3Peer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode' => 0, 'Comname' => 1, 'Nametype' => 2, 'Nt' => 3, 'Rank1' => 4, 'Eng' => 5, 'Fre' => 6, 'Spa' => 7, 'Autoctr' => 8, 'Unicodetext' => 9, 'Script' => 10, 'Pkid' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode' => 0, 'comname' => 1, 'nametype' => 2, 'nt' => 3, 'rank1' => 4, 'eng' => 5, 'fre' => 6, 'spa' => 7, 'autoctr' => 8, 'unicodetext' => 9, 'script' => 10, 'pkid' => 11, ),
        BasePeer::TYPE_COLNAME => array (ZwebCn3Peer::SPECCODE => 0, ZwebCn3Peer::COMNAME => 1, ZwebCn3Peer::NAMETYPE => 2, ZwebCn3Peer::NT => 3, ZwebCn3Peer::RANK1 => 4, ZwebCn3Peer::ENG => 5, ZwebCn3Peer::FRE => 6, ZwebCn3Peer::SPA => 7, ZwebCn3Peer::AUTOCTR => 8, ZwebCn3Peer::UNICODETEXT => 9, ZwebCn3Peer::SCRIPT => 10, ZwebCn3Peer::PKID => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE' => 0, 'COMNAME' => 1, 'NAMETYPE' => 2, 'NT' => 3, 'RANK1' => 4, 'ENG' => 5, 'FRE' => 6, 'SPA' => 7, 'AUTOCTR' => 8, 'UNICODETEXT' => 9, 'SCRIPT' => 10, 'PKID' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode' => 0, 'ComName' => 1, 'NameType' => 2, 'NT' => 3, 'Rank1' => 4, 'Eng' => 5, 'Fre' => 6, 'Spa' => 7, 'autoctr' => 8, 'UnicodeText' => 9, 'Script' => 10, 'PKID' => 11, ),
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
        $toNames = ZwebCn3Peer::getFieldNames($toType);
        $key = isset(ZwebCn3Peer::$fieldKeys[$fromType][$name]) ? ZwebCn3Peer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ZwebCn3Peer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ZwebCn3Peer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ZwebCn3Peer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ZwebCn3Peer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ZwebCn3Peer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ZwebCn3Peer::SPECCODE);
            $criteria->addSelectColumn(ZwebCn3Peer::COMNAME);
            $criteria->addSelectColumn(ZwebCn3Peer::NAMETYPE);
            $criteria->addSelectColumn(ZwebCn3Peer::NT);
            $criteria->addSelectColumn(ZwebCn3Peer::RANK1);
            $criteria->addSelectColumn(ZwebCn3Peer::ENG);
            $criteria->addSelectColumn(ZwebCn3Peer::FRE);
            $criteria->addSelectColumn(ZwebCn3Peer::SPA);
            $criteria->addSelectColumn(ZwebCn3Peer::AUTOCTR);
            $criteria->addSelectColumn(ZwebCn3Peer::UNICODETEXT);
            $criteria->addSelectColumn(ZwebCn3Peer::SCRIPT);
            $criteria->addSelectColumn(ZwebCn3Peer::PKID);
        } else {
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.ComName');
            $criteria->addSelectColumn($alias . '.NameType');
            $criteria->addSelectColumn($alias . '.NT');
            $criteria->addSelectColumn($alias . '.Rank1');
            $criteria->addSelectColumn($alias . '.Eng');
            $criteria->addSelectColumn($alias . '.Fre');
            $criteria->addSelectColumn($alias . '.Spa');
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.UnicodeText');
            $criteria->addSelectColumn($alias . '.Script');
            $criteria->addSelectColumn($alias . '.PKID');
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
        $criteria->setPrimaryTableName(ZwebCn3Peer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ZwebCn3Peer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ZwebCn3Peer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ZwebCn3Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return ZwebCn3
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ZwebCn3Peer::doSelect($critcopy, $con);
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
        return ZwebCn3Peer::populateObjects(ZwebCn3Peer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ZwebCn3Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ZwebCn3Peer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ZwebCn3Peer::DATABASE_NAME);

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
     * @param ZwebCn3 $obj A ZwebCn3 object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPkid();
            } // if key === null
            ZwebCn3Peer::$instances[$key] = $obj;
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
     * @param      mixed $value A ZwebCn3 object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ZwebCn3) {
                $key = (string) $value->getPkid();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ZwebCn3 object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ZwebCn3Peer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return ZwebCn3 Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ZwebCn3Peer::$instances[$key])) {
                return ZwebCn3Peer::$instances[$key];
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
        foreach (ZwebCn3Peer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ZwebCn3Peer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to zweb_cn3
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
        if ($row[$startcol + 11] === null) {
            return null;
        }

        return (string) $row[$startcol + 11];
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

        return (string) $row[$startcol + 11];
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
        $cls = ZwebCn3Peer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ZwebCn3Peer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ZwebCn3Peer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ZwebCn3Peer::addInstanceToPool($obj, $key);
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
     * @return array (ZwebCn3 object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ZwebCn3Peer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ZwebCn3Peer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ZwebCn3Peer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ZwebCn3Peer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ZwebCn3Peer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(ZwebCn3Peer::DATABASE_NAME)->getTable(ZwebCn3Peer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseZwebCn3Peer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseZwebCn3Peer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ZwebCn3TableMap());
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
        return ZwebCn3Peer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ZwebCn3 or Criteria object.
     *
     * @param      mixed $values Criteria or ZwebCn3 object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ZwebCn3Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ZwebCn3 object
        }

        if ($criteria->containsKey(ZwebCn3Peer::PKID) && $criteria->keyContainsValue(ZwebCn3Peer::PKID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ZwebCn3Peer::PKID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ZwebCn3Peer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a ZwebCn3 or Criteria object.
     *
     * @param      mixed $values Criteria or ZwebCn3 object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ZwebCn3Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ZwebCn3Peer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ZwebCn3Peer::PKID);
            $value = $criteria->remove(ZwebCn3Peer::PKID);
            if ($value) {
                $selectCriteria->add(ZwebCn3Peer::PKID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ZwebCn3Peer::TABLE_NAME);
            }

        } else { // $values is ZwebCn3 object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ZwebCn3Peer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the zweb_cn3 table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ZwebCn3Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ZwebCn3Peer::TABLE_NAME, $con, ZwebCn3Peer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ZwebCn3Peer::clearInstancePool();
            ZwebCn3Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ZwebCn3 or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ZwebCn3 object or primary key or array of primary keys
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
            $con = Propel::getConnection(ZwebCn3Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ZwebCn3Peer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ZwebCn3) { // it's a model object
            // invalidate the cache for this single object
            ZwebCn3Peer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ZwebCn3Peer::DATABASE_NAME);
            $criteria->add(ZwebCn3Peer::PKID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ZwebCn3Peer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ZwebCn3Peer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ZwebCn3Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ZwebCn3 object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param ZwebCn3 $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ZwebCn3Peer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ZwebCn3Peer::TABLE_NAME);

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

        return BasePeer::doValidate(ZwebCn3Peer::DATABASE_NAME, ZwebCn3Peer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ZwebCn3
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ZwebCn3Peer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ZwebCn3Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ZwebCn3Peer::DATABASE_NAME);
        $criteria->add(ZwebCn3Peer::PKID, $pk);

        $v = ZwebCn3Peer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ZwebCn3[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ZwebCn3Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ZwebCn3Peer::DATABASE_NAME);
            $criteria->add(ZwebCn3Peer::PKID, $pks, Criteria::IN);
            $objs = ZwebCn3Peer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseZwebCn3Peer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseZwebCn3Peer::buildTableMap();

