<?php


/**
 * Base static class for performing query and update operations on the 'zweb_factsheetmaint_aquaculture' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseZwebFactsheetmaintAquaculturePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'zweb_factsheetmaint_aquaculture';

    /** the related Propel class for this table */
    const OM_CLASS = 'ZwebFactsheetmaintAquaculture';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ZwebFactsheetmaintAquacultureTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the autoctr field */
    const AUTOCTR = 'zweb_factsheetmaint_aquaculture.autoctr';

    /** the column name for the SpecCode field */
    const SPECCODE = 'zweb_factsheetmaint_aquaculture.SpecCode';

    /** the column name for the SiteURL field */
    const SITEURL = 'zweb_factsheetmaint_aquaculture.SiteURL';

    /** the column name for the SiteName field */
    const SITENAME = 'zweb_factsheetmaint_aquaculture.SiteName';

    /** the column name for the Comment field */
    const COMMENT = 'zweb_factsheetmaint_aquaculture.Comment';

    /** the column name for the entered field */
    const ENTERED = 'zweb_factsheetmaint_aquaculture.entered';

    /** the column name for the dateentered field */
    const DATEENTERED = 'zweb_factsheetmaint_aquaculture.dateentered';

    /** the column name for the modified field */
    const MODIFIED = 'zweb_factsheetmaint_aquaculture.modified';

    /** the column name for the datemodified field */
    const DATEMODIFIED = 'zweb_factsheetmaint_aquaculture.datemodified';

    /** the column name for the expert field */
    const EXPERT = 'zweb_factsheetmaint_aquaculture.expert';

    /** the column name for the datechecked field */
    const DATECHECKED = 'zweb_factsheetmaint_aquaculture.datechecked';

    /** the column name for the TS field */
    const TS = 'zweb_factsheetmaint_aquaculture.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of ZwebFactsheetmaintAquaculture objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array ZwebFactsheetmaintAquaculture[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ZwebFactsheetmaintAquaculturePeer::$fieldNames[ZwebFactsheetmaintAquaculturePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Speccode', 'Siteurl', 'Sitename', 'Comment', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'speccode', 'siteurl', 'sitename', 'comment', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (ZwebFactsheetmaintAquaculturePeer::AUTOCTR, ZwebFactsheetmaintAquaculturePeer::SPECCODE, ZwebFactsheetmaintAquaculturePeer::SITEURL, ZwebFactsheetmaintAquaculturePeer::SITENAME, ZwebFactsheetmaintAquaculturePeer::COMMENT, ZwebFactsheetmaintAquaculturePeer::ENTERED, ZwebFactsheetmaintAquaculturePeer::DATEENTERED, ZwebFactsheetmaintAquaculturePeer::MODIFIED, ZwebFactsheetmaintAquaculturePeer::DATEMODIFIED, ZwebFactsheetmaintAquaculturePeer::EXPERT, ZwebFactsheetmaintAquaculturePeer::DATECHECKED, ZwebFactsheetmaintAquaculturePeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'SPECCODE', 'SITEURL', 'SITENAME', 'COMMENT', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'SpecCode', 'SiteURL', 'SiteName', 'Comment', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ZwebFactsheetmaintAquaculturePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Siteurl' => 2, 'Sitename' => 3, 'Comment' => 4, 'Entered' => 5, 'Dateentered' => 6, 'Modified' => 7, 'Datemodified' => 8, 'Expert' => 9, 'Datechecked' => 10, 'Ts' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'speccode' => 1, 'siteurl' => 2, 'sitename' => 3, 'comment' => 4, 'entered' => 5, 'dateentered' => 6, 'modified' => 7, 'datemodified' => 8, 'expert' => 9, 'datechecked' => 10, 'ts' => 11, ),
        BasePeer::TYPE_COLNAME => array (ZwebFactsheetmaintAquaculturePeer::AUTOCTR => 0, ZwebFactsheetmaintAquaculturePeer::SPECCODE => 1, ZwebFactsheetmaintAquaculturePeer::SITEURL => 2, ZwebFactsheetmaintAquaculturePeer::SITENAME => 3, ZwebFactsheetmaintAquaculturePeer::COMMENT => 4, ZwebFactsheetmaintAquaculturePeer::ENTERED => 5, ZwebFactsheetmaintAquaculturePeer::DATEENTERED => 6, ZwebFactsheetmaintAquaculturePeer::MODIFIED => 7, ZwebFactsheetmaintAquaculturePeer::DATEMODIFIED => 8, ZwebFactsheetmaintAquaculturePeer::EXPERT => 9, ZwebFactsheetmaintAquaculturePeer::DATECHECKED => 10, ZwebFactsheetmaintAquaculturePeer::TS => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'SPECCODE' => 1, 'SITEURL' => 2, 'SITENAME' => 3, 'COMMENT' => 4, 'ENTERED' => 5, 'DATEENTERED' => 6, 'MODIFIED' => 7, 'DATEMODIFIED' => 8, 'EXPERT' => 9, 'DATECHECKED' => 10, 'TS' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'SpecCode' => 1, 'SiteURL' => 2, 'SiteName' => 3, 'Comment' => 4, 'entered' => 5, 'dateentered' => 6, 'modified' => 7, 'datemodified' => 8, 'expert' => 9, 'datechecked' => 10, 'TS' => 11, ),
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
        $toNames = ZwebFactsheetmaintAquaculturePeer::getFieldNames($toType);
        $key = isset(ZwebFactsheetmaintAquaculturePeer::$fieldKeys[$fromType][$name]) ? ZwebFactsheetmaintAquaculturePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ZwebFactsheetmaintAquaculturePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ZwebFactsheetmaintAquaculturePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ZwebFactsheetmaintAquaculturePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ZwebFactsheetmaintAquaculturePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ZwebFactsheetmaintAquaculturePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ZwebFactsheetmaintAquaculturePeer::AUTOCTR);
            $criteria->addSelectColumn(ZwebFactsheetmaintAquaculturePeer::SPECCODE);
            $criteria->addSelectColumn(ZwebFactsheetmaintAquaculturePeer::SITEURL);
            $criteria->addSelectColumn(ZwebFactsheetmaintAquaculturePeer::SITENAME);
            $criteria->addSelectColumn(ZwebFactsheetmaintAquaculturePeer::COMMENT);
            $criteria->addSelectColumn(ZwebFactsheetmaintAquaculturePeer::ENTERED);
            $criteria->addSelectColumn(ZwebFactsheetmaintAquaculturePeer::DATEENTERED);
            $criteria->addSelectColumn(ZwebFactsheetmaintAquaculturePeer::MODIFIED);
            $criteria->addSelectColumn(ZwebFactsheetmaintAquaculturePeer::DATEMODIFIED);
            $criteria->addSelectColumn(ZwebFactsheetmaintAquaculturePeer::EXPERT);
            $criteria->addSelectColumn(ZwebFactsheetmaintAquaculturePeer::DATECHECKED);
            $criteria->addSelectColumn(ZwebFactsheetmaintAquaculturePeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.SiteURL');
            $criteria->addSelectColumn($alias . '.SiteName');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.entered');
            $criteria->addSelectColumn($alias . '.dateentered');
            $criteria->addSelectColumn($alias . '.modified');
            $criteria->addSelectColumn($alias . '.datemodified');
            $criteria->addSelectColumn($alias . '.expert');
            $criteria->addSelectColumn($alias . '.datechecked');
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
        $criteria->setPrimaryTableName(ZwebFactsheetmaintAquaculturePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ZwebFactsheetmaintAquaculturePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return ZwebFactsheetmaintAquaculture
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ZwebFactsheetmaintAquaculturePeer::doSelect($critcopy, $con);
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
        return ZwebFactsheetmaintAquaculturePeer::populateObjects(ZwebFactsheetmaintAquaculturePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ZwebFactsheetmaintAquaculturePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME);

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
     * @param ZwebFactsheetmaintAquaculture $obj A ZwebFactsheetmaintAquaculture object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getSpeccode(), (string) $obj->getSiteurl()));
            } // if key === null
            ZwebFactsheetmaintAquaculturePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A ZwebFactsheetmaintAquaculture object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof ZwebFactsheetmaintAquaculture) {
                $key = serialize(array((string) $value->getSpeccode(), (string) $value->getSiteurl()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or ZwebFactsheetmaintAquaculture object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ZwebFactsheetmaintAquaculturePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return ZwebFactsheetmaintAquaculture Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ZwebFactsheetmaintAquaculturePeer::$instances[$key])) {
                return ZwebFactsheetmaintAquaculturePeer::$instances[$key];
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
        foreach (ZwebFactsheetmaintAquaculturePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ZwebFactsheetmaintAquaculturePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to zweb_factsheetmaint_aquaculture
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
        if ($row[$startcol + 1] === null && $row[$startcol + 2] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 2]));
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

        return array((int) $row[$startcol + 1], (string) $row[$startcol + 2]);
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
        $cls = ZwebFactsheetmaintAquaculturePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ZwebFactsheetmaintAquaculturePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ZwebFactsheetmaintAquaculturePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ZwebFactsheetmaintAquaculturePeer::addInstanceToPool($obj, $key);
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
     * @return array (ZwebFactsheetmaintAquaculture object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ZwebFactsheetmaintAquaculturePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ZwebFactsheetmaintAquaculturePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ZwebFactsheetmaintAquaculturePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ZwebFactsheetmaintAquaculturePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ZwebFactsheetmaintAquaculturePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME)->getTable(ZwebFactsheetmaintAquaculturePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseZwebFactsheetmaintAquaculturePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseZwebFactsheetmaintAquaculturePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ZwebFactsheetmaintAquacultureTableMap());
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
        return ZwebFactsheetmaintAquaculturePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a ZwebFactsheetmaintAquaculture or Criteria object.
     *
     * @param      mixed $values Criteria or ZwebFactsheetmaintAquaculture object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from ZwebFactsheetmaintAquaculture object
        }


        // Set the correct dbName
        $criteria->setDbName(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a ZwebFactsheetmaintAquaculture or Criteria object.
     *
     * @param      mixed $values Criteria or ZwebFactsheetmaintAquaculture object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ZwebFactsheetmaintAquaculturePeer::SPECCODE);
            $value = $criteria->remove(ZwebFactsheetmaintAquaculturePeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(ZwebFactsheetmaintAquaculturePeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ZwebFactsheetmaintAquaculturePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ZwebFactsheetmaintAquaculturePeer::SITEURL);
            $value = $criteria->remove(ZwebFactsheetmaintAquaculturePeer::SITEURL);
            if ($value) {
                $selectCriteria->add(ZwebFactsheetmaintAquaculturePeer::SITEURL, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ZwebFactsheetmaintAquaculturePeer::TABLE_NAME);
            }

        } else { // $values is ZwebFactsheetmaintAquaculture object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the zweb_factsheetmaint_aquaculture table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ZwebFactsheetmaintAquaculturePeer::TABLE_NAME, $con, ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ZwebFactsheetmaintAquaculturePeer::clearInstancePool();
            ZwebFactsheetmaintAquaculturePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a ZwebFactsheetmaintAquaculture or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or ZwebFactsheetmaintAquaculture object or primary key or array of primary keys
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
            $con = Propel::getConnection(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ZwebFactsheetmaintAquaculturePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof ZwebFactsheetmaintAquaculture) { // it's a model object
            // invalidate the cache for this single object
            ZwebFactsheetmaintAquaculturePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ZwebFactsheetmaintAquaculturePeer::SPECCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ZwebFactsheetmaintAquaculturePeer::SITEURL, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                ZwebFactsheetmaintAquaculturePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ZwebFactsheetmaintAquaculturePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given ZwebFactsheetmaintAquaculture object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param ZwebFactsheetmaintAquaculture $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ZwebFactsheetmaintAquaculturePeer::TABLE_NAME);

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

        return BasePeer::doValidate(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME, ZwebFactsheetmaintAquaculturePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $speccode
     * @param   string $siteurl
     * @param      PropelPDO $con
     * @return ZwebFactsheetmaintAquaculture
     */
    public static function retrieveByPK($speccode, $siteurl, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $speccode, (string) $siteurl));
         if (null !== ($obj = ZwebFactsheetmaintAquaculturePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(ZwebFactsheetmaintAquaculturePeer::DATABASE_NAME);
        $criteria->add(ZwebFactsheetmaintAquaculturePeer::SPECCODE, $speccode);
        $criteria->add(ZwebFactsheetmaintAquaculturePeer::SITEURL, $siteurl);
        $v = ZwebFactsheetmaintAquaculturePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseZwebFactsheetmaintAquaculturePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseZwebFactsheetmaintAquaculturePeer::buildTableMap();

