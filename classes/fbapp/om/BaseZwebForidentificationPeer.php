<?php


/**
 * Base static class for performing query and update operations on the 'zweb_foridentification' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseZwebForidentificationPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'zweb_foridentification';

    /** the related Propel class for this table */
    const OM_CLASS = 'ZwebForidentification';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ZwebForidentificationTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the FamCode field */
    const FAMCODE = 'zweb_foridentification.FamCode';

    /** the column name for the Family field */
    const FAMILY = 'zweb_foridentification.Family';

    /** the column name for the CommonName field */
    const COMMONNAME = 'zweb_foridentification.CommonName';

    /** the column name for the Ordnum field */
    const ORDNUM = 'zweb_foridentification.Ordnum';

    /** the column name for the AspinesMin field */
    const ASPINESMIN = 'zweb_foridentification.AspinesMin';

    /** the column name for the AspinesMax field */
    const ASPINESMAX = 'zweb_foridentification.AspinesMax';

    /** the column name for the DspinesMin field */
    const DSPINESMIN = 'zweb_foridentification.DspinesMin';

    /** the column name for the DspinesMax field */
    const DSPINESMAX = 'zweb_foridentification.DspinesMax';

    /** the column name for the C_Code field */
    const C_CODE = 'zweb_foridentification.C_Code';

    /** the column name for the AreaCode field */
    const AREACODE = 'zweb_foridentification.AreaCode';

    /** the column name for the FAM field */
    const FAM = 'zweb_foridentification.FAM';

    /** the column name for the e_code field */
    const E_CODE = 'zweb_foridentification.e_code';

    /** the column name for the TS field */
    const TS = 'zweb_foridentification.TS';

    /** the column name for the PKID field */
    const PKID = 'zweb_foridentification.PKID';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ZwebForidentification objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ZwebForidentification[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ZwebForidentificationPeer::$fieldNames[ZwebForidentificationPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Famcode', 'Family', 'Commonname', 'Ordnum', 'Aspinesmin', 'Aspinesmax', 'Dspinesmin', 'Dspinesmax', 'CCode', 'Areacode', 'Fam', 'ECode', 'Ts', 'Pkid', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('famcode', 'family', 'commonname', 'ordnum', 'aspinesmin', 'aspinesmax', 'dspinesmin', 'dspinesmax', 'cCode', 'areacode', 'fam', 'eCode', 'ts', 'pkid', ),
        BasePeer::TYPE_COLNAME => array (ZwebForidentificationPeer::FAMCODE, ZwebForidentificationPeer::FAMILY, ZwebForidentificationPeer::COMMONNAME, ZwebForidentificationPeer::ORDNUM, ZwebForidentificationPeer::ASPINESMIN, ZwebForidentificationPeer::ASPINESMAX, ZwebForidentificationPeer::DSPINESMIN, ZwebForidentificationPeer::DSPINESMAX, ZwebForidentificationPeer::C_CODE, ZwebForidentificationPeer::AREACODE, ZwebForidentificationPeer::FAM, ZwebForidentificationPeer::E_CODE, ZwebForidentificationPeer::TS, ZwebForidentificationPeer::PKID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('FAMCODE', 'FAMILY', 'COMMONNAME', 'ORDNUM', 'ASPINESMIN', 'ASPINESMAX', 'DSPINESMIN', 'DSPINESMAX', 'C_CODE', 'AREACODE', 'FAM', 'E_CODE', 'TS', 'PKID', ),
        BasePeer::TYPE_FIELDNAME => array ('FamCode', 'Family', 'CommonName', 'Ordnum', 'AspinesMin', 'AspinesMax', 'DspinesMin', 'DspinesMax', 'C_Code', 'AreaCode', 'FAM', 'e_code', 'TS', 'PKID', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ZwebForidentificationPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Famcode' => 0, 'Family' => 1, 'Commonname' => 2, 'Ordnum' => 3, 'Aspinesmin' => 4, 'Aspinesmax' => 5, 'Dspinesmin' => 6, 'Dspinesmax' => 7, 'CCode' => 8, 'Areacode' => 9, 'Fam' => 10, 'ECode' => 11, 'Ts' => 12, 'Pkid' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('famcode' => 0, 'family' => 1, 'commonname' => 2, 'ordnum' => 3, 'aspinesmin' => 4, 'aspinesmax' => 5, 'dspinesmin' => 6, 'dspinesmax' => 7, 'cCode' => 8, 'areacode' => 9, 'fam' => 10, 'eCode' => 11, 'ts' => 12, 'pkid' => 13, ),
        BasePeer::TYPE_COLNAME => array (ZwebForidentificationPeer::FAMCODE => 0, ZwebForidentificationPeer::FAMILY => 1, ZwebForidentificationPeer::COMMONNAME => 2, ZwebForidentificationPeer::ORDNUM => 3, ZwebForidentificationPeer::ASPINESMIN => 4, ZwebForidentificationPeer::ASPINESMAX => 5, ZwebForidentificationPeer::DSPINESMIN => 6, ZwebForidentificationPeer::DSPINESMAX => 7, ZwebForidentificationPeer::C_CODE => 8, ZwebForidentificationPeer::AREACODE => 9, ZwebForidentificationPeer::FAM => 10, ZwebForidentificationPeer::E_CODE => 11, ZwebForidentificationPeer::TS => 12, ZwebForidentificationPeer::PKID => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('FAMCODE' => 0, 'FAMILY' => 1, 'COMMONNAME' => 2, 'ORDNUM' => 3, 'ASPINESMIN' => 4, 'ASPINESMAX' => 5, 'DSPINESMIN' => 6, 'DSPINESMAX' => 7, 'C_CODE' => 8, 'AREACODE' => 9, 'FAM' => 10, 'E_CODE' => 11, 'TS' => 12, 'PKID' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('FamCode' => 0, 'Family' => 1, 'CommonName' => 2, 'Ordnum' => 3, 'AspinesMin' => 4, 'AspinesMax' => 5, 'DspinesMin' => 6, 'DspinesMax' => 7, 'C_Code' => 8, 'AreaCode' => 9, 'FAM' => 10, 'e_code' => 11, 'TS' => 12, 'PKID' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $toNames = ZwebForidentificationPeer::getFieldNames($toType);
        $key = isset(ZwebForidentificationPeer::$fieldKeys[$fromType][$name]) ? ZwebForidentificationPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ZwebForidentificationPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ZwebForidentificationPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ZwebForidentificationPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ZwebForidentificationPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ZwebForidentificationPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ZwebForidentificationPeer::FAMCODE);
            $criteria->addSelectColumn(ZwebForidentificationPeer::FAMILY);
            $criteria->addSelectColumn(ZwebForidentificationPeer::COMMONNAME);
            $criteria->addSelectColumn(ZwebForidentificationPeer::ORDNUM);
            $criteria->addSelectColumn(ZwebForidentificationPeer::ASPINESMIN);
            $criteria->addSelectColumn(ZwebForidentificationPeer::ASPINESMAX);
            $criteria->addSelectColumn(ZwebForidentificationPeer::DSPINESMIN);
            $criteria->addSelectColumn(ZwebForidentificationPeer::DSPINESMAX);
            $criteria->addSelectColumn(ZwebForidentificationPeer::C_CODE);
            $criteria->addSelectColumn(ZwebForidentificationPeer::AREACODE);
            $criteria->addSelectColumn(ZwebForidentificationPeer::FAM);
            $criteria->addSelectColumn(ZwebForidentificationPeer::E_CODE);
            $criteria->addSelectColumn(ZwebForidentificationPeer::TS);
            $criteria->addSelectColumn(ZwebForidentificationPeer::PKID);
        } else {
            $criteria->addSelectColumn($alias . '.FamCode');
            $criteria->addSelectColumn($alias . '.Family');
            $criteria->addSelectColumn($alias . '.CommonName');
            $criteria->addSelectColumn($alias . '.Ordnum');
            $criteria->addSelectColumn($alias . '.AspinesMin');
            $criteria->addSelectColumn($alias . '.AspinesMax');
            $criteria->addSelectColumn($alias . '.DspinesMin');
            $criteria->addSelectColumn($alias . '.DspinesMax');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.AreaCode');
            $criteria->addSelectColumn($alias . '.FAM');
            $criteria->addSelectColumn($alias . '.e_code');
            $criteria->addSelectColumn($alias . '.TS');
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
        $criteria->setPrimaryTableName(ZwebForidentificationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ZwebForidentificationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ZwebForidentificationPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ZwebForidentificationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return ZwebForidentification
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ZwebForidentificationPeer::doSelect($critcopy, $con);
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
        return ZwebForidentificationPeer::populateObjects(ZwebForidentificationPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ZwebForidentificationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ZwebForidentificationPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ZwebForidentificationPeer::DATABASE_NAME);

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
     * @param ZwebForidentification $obj A ZwebForidentification object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPkid();
            } // if key === null
            ZwebForidentificationPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A ZwebForidentification object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ZwebForidentification) {
                $key = (string) $value->getPkid();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ZwebForidentification object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ZwebForidentificationPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return ZwebForidentification Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ZwebForidentificationPeer::$instances[$key])) {
                return ZwebForidentificationPeer::$instances[$key];
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
        foreach (ZwebForidentificationPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ZwebForidentificationPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to zweb_foridentification
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
        if ($row[$startcol + 13] === null) {
            return null;
        }

        return (string) $row[$startcol + 13];
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

        return (string) $row[$startcol + 13];
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
        $cls = ZwebForidentificationPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ZwebForidentificationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ZwebForidentificationPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ZwebForidentificationPeer::addInstanceToPool($obj, $key);
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
     * @return array (ZwebForidentification object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ZwebForidentificationPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ZwebForidentificationPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ZwebForidentificationPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ZwebForidentificationPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ZwebForidentificationPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(ZwebForidentificationPeer::DATABASE_NAME)->getTable(ZwebForidentificationPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseZwebForidentificationPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseZwebForidentificationPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ZwebForidentificationTableMap());
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
        return ZwebForidentificationPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ZwebForidentification or Criteria object.
     *
     * @param      mixed $values Criteria or ZwebForidentification object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ZwebForidentificationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ZwebForidentification object
        }

        if ($criteria->containsKey(ZwebForidentificationPeer::PKID) && $criteria->keyContainsValue(ZwebForidentificationPeer::PKID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ZwebForidentificationPeer::PKID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ZwebForidentificationPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a ZwebForidentification or Criteria object.
     *
     * @param      mixed $values Criteria or ZwebForidentification object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ZwebForidentificationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ZwebForidentificationPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ZwebForidentificationPeer::PKID);
            $value = $criteria->remove(ZwebForidentificationPeer::PKID);
            if ($value) {
                $selectCriteria->add(ZwebForidentificationPeer::PKID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ZwebForidentificationPeer::TABLE_NAME);
            }

        } else { // $values is ZwebForidentification object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ZwebForidentificationPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the zweb_foridentification table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ZwebForidentificationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ZwebForidentificationPeer::TABLE_NAME, $con, ZwebForidentificationPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ZwebForidentificationPeer::clearInstancePool();
            ZwebForidentificationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ZwebForidentification or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ZwebForidentification object or primary key or array of primary keys
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
            $con = Propel::getConnection(ZwebForidentificationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ZwebForidentificationPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ZwebForidentification) { // it's a model object
            // invalidate the cache for this single object
            ZwebForidentificationPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ZwebForidentificationPeer::DATABASE_NAME);
            $criteria->add(ZwebForidentificationPeer::PKID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ZwebForidentificationPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ZwebForidentificationPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ZwebForidentificationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ZwebForidentification object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param ZwebForidentification $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ZwebForidentificationPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ZwebForidentificationPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ZwebForidentificationPeer::DATABASE_NAME, ZwebForidentificationPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return ZwebForidentification
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ZwebForidentificationPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ZwebForidentificationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ZwebForidentificationPeer::DATABASE_NAME);
        $criteria->add(ZwebForidentificationPeer::PKID, $pk);

        $v = ZwebForidentificationPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return ZwebForidentification[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ZwebForidentificationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ZwebForidentificationPeer::DATABASE_NAME);
            $criteria->add(ZwebForidentificationPeer::PKID, $pks, Criteria::IN);
            $objs = ZwebForidentificationPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseZwebForidentificationPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseZwebForidentificationPeer::buildTableMap();

