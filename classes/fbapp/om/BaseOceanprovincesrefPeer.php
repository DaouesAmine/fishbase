<?php


/**
 * Base static class for performing query and update operations on the 'oceanprovincesref' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseOceanprovincesrefPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'oceanprovincesref';

    /** the related Propel class for this table */
    const OM_CLASS = 'Oceanprovincesref';

    /** the related TableMap class for this table */
    const TM_CLASS = 'OceanprovincesrefTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the AutoCtr field */
    const AUTOCTR = 'oceanprovincesref.AutoCtr';

    /** the column name for the RegionNo field */
    const REGIONNO = 'oceanprovincesref.RegionNo';

    /** the column name for the RegionCode field */
    const REGIONCODE = 'oceanprovincesref.RegionCode';

    /** the column name for the DomainNo field */
    const DOMAINNO = 'oceanprovincesref.DomainNo';

    /** the column name for the Domain field */
    const DOMAIN = 'oceanprovincesref.Domain';

    /** the column name for the Region field */
    const REGION = 'oceanprovincesref.Region';

    /** the column name for the Area field */
    const AREA = 'oceanprovincesref.Area';

    /** the column name for the PrimProd1 field */
    const PRIMPROD1 = 'oceanprovincesref.PrimProd1';

    /** the column name for the PrimProd2 field */
    const PRIMPROD2 = 'oceanprovincesref.PrimProd2';

    /** the column name for the PrimProd3 field */
    const PRIMPROD3 = 'oceanprovincesref.PrimProd3';

    /** the column name for the RegionDescription field */
    const REGIONDESCRIPTION = 'oceanprovincesref.RegionDescription';

    /** the column name for the Comment field */
    const COMMENT = 'oceanprovincesref.Comment';

    /** the column name for the Modified field */
    const MODIFIED = 'oceanprovincesref.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'oceanprovincesref.DateModified';

    /** the column name for the TS field */
    const TS = 'oceanprovincesref.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Oceanprovincesref objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Oceanprovincesref[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. OceanprovincesrefPeer::$fieldNames[OceanprovincesrefPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Regionno', 'Regioncode', 'Domainno', 'Domain', 'Region', 'Area', 'Primprod1', 'Primprod2', 'Primprod3', 'Regiondescription', 'Comment', 'Modified', 'Datemodified', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'regionno', 'regioncode', 'domainno', 'domain', 'region', 'area', 'primprod1', 'primprod2', 'primprod3', 'regiondescription', 'comment', 'modified', 'datemodified', 'ts', ),
        BasePeer::TYPE_COLNAME => array (OceanprovincesrefPeer::AUTOCTR, OceanprovincesrefPeer::REGIONNO, OceanprovincesrefPeer::REGIONCODE, OceanprovincesrefPeer::DOMAINNO, OceanprovincesrefPeer::DOMAIN, OceanprovincesrefPeer::REGION, OceanprovincesrefPeer::AREA, OceanprovincesrefPeer::PRIMPROD1, OceanprovincesrefPeer::PRIMPROD2, OceanprovincesrefPeer::PRIMPROD3, OceanprovincesrefPeer::REGIONDESCRIPTION, OceanprovincesrefPeer::COMMENT, OceanprovincesrefPeer::MODIFIED, OceanprovincesrefPeer::DATEMODIFIED, OceanprovincesrefPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'REGIONNO', 'REGIONCODE', 'DOMAINNO', 'DOMAIN', 'REGION', 'AREA', 'PRIMPROD1', 'PRIMPROD2', 'PRIMPROD3', 'REGIONDESCRIPTION', 'COMMENT', 'MODIFIED', 'DATEMODIFIED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr', 'RegionNo', 'RegionCode', 'DomainNo', 'Domain', 'Region', 'Area', 'PrimProd1', 'PrimProd2', 'PrimProd3', 'RegionDescription', 'Comment', 'Modified', 'DateModified', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. OceanprovincesrefPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Regionno' => 1, 'Regioncode' => 2, 'Domainno' => 3, 'Domain' => 4, 'Region' => 5, 'Area' => 6, 'Primprod1' => 7, 'Primprod2' => 8, 'Primprod3' => 9, 'Regiondescription' => 10, 'Comment' => 11, 'Modified' => 12, 'Datemodified' => 13, 'Ts' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'regionno' => 1, 'regioncode' => 2, 'domainno' => 3, 'domain' => 4, 'region' => 5, 'area' => 6, 'primprod1' => 7, 'primprod2' => 8, 'primprod3' => 9, 'regiondescription' => 10, 'comment' => 11, 'modified' => 12, 'datemodified' => 13, 'ts' => 14, ),
        BasePeer::TYPE_COLNAME => array (OceanprovincesrefPeer::AUTOCTR => 0, OceanprovincesrefPeer::REGIONNO => 1, OceanprovincesrefPeer::REGIONCODE => 2, OceanprovincesrefPeer::DOMAINNO => 3, OceanprovincesrefPeer::DOMAIN => 4, OceanprovincesrefPeer::REGION => 5, OceanprovincesrefPeer::AREA => 6, OceanprovincesrefPeer::PRIMPROD1 => 7, OceanprovincesrefPeer::PRIMPROD2 => 8, OceanprovincesrefPeer::PRIMPROD3 => 9, OceanprovincesrefPeer::REGIONDESCRIPTION => 10, OceanprovincesrefPeer::COMMENT => 11, OceanprovincesrefPeer::MODIFIED => 12, OceanprovincesrefPeer::DATEMODIFIED => 13, OceanprovincesrefPeer::TS => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'REGIONNO' => 1, 'REGIONCODE' => 2, 'DOMAINNO' => 3, 'DOMAIN' => 4, 'REGION' => 5, 'AREA' => 6, 'PRIMPROD1' => 7, 'PRIMPROD2' => 8, 'PRIMPROD3' => 9, 'REGIONDESCRIPTION' => 10, 'COMMENT' => 11, 'MODIFIED' => 12, 'DATEMODIFIED' => 13, 'TS' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr' => 0, 'RegionNo' => 1, 'RegionCode' => 2, 'DomainNo' => 3, 'Domain' => 4, 'Region' => 5, 'Area' => 6, 'PrimProd1' => 7, 'PrimProd2' => 8, 'PrimProd3' => 9, 'RegionDescription' => 10, 'Comment' => 11, 'Modified' => 12, 'DateModified' => 13, 'TS' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $toNames = OceanprovincesrefPeer::getFieldNames($toType);
        $key = isset(OceanprovincesrefPeer::$fieldKeys[$fromType][$name]) ? OceanprovincesrefPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(OceanprovincesrefPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, OceanprovincesrefPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return OceanprovincesrefPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. OceanprovincesrefPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(OceanprovincesrefPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(OceanprovincesrefPeer::AUTOCTR);
            $criteria->addSelectColumn(OceanprovincesrefPeer::REGIONNO);
            $criteria->addSelectColumn(OceanprovincesrefPeer::REGIONCODE);
            $criteria->addSelectColumn(OceanprovincesrefPeer::DOMAINNO);
            $criteria->addSelectColumn(OceanprovincesrefPeer::DOMAIN);
            $criteria->addSelectColumn(OceanprovincesrefPeer::REGION);
            $criteria->addSelectColumn(OceanprovincesrefPeer::AREA);
            $criteria->addSelectColumn(OceanprovincesrefPeer::PRIMPROD1);
            $criteria->addSelectColumn(OceanprovincesrefPeer::PRIMPROD2);
            $criteria->addSelectColumn(OceanprovincesrefPeer::PRIMPROD3);
            $criteria->addSelectColumn(OceanprovincesrefPeer::REGIONDESCRIPTION);
            $criteria->addSelectColumn(OceanprovincesrefPeer::COMMENT);
            $criteria->addSelectColumn(OceanprovincesrefPeer::MODIFIED);
            $criteria->addSelectColumn(OceanprovincesrefPeer::DATEMODIFIED);
            $criteria->addSelectColumn(OceanprovincesrefPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.AutoCtr');
            $criteria->addSelectColumn($alias . '.RegionNo');
            $criteria->addSelectColumn($alias . '.RegionCode');
            $criteria->addSelectColumn($alias . '.DomainNo');
            $criteria->addSelectColumn($alias . '.Domain');
            $criteria->addSelectColumn($alias . '.Region');
            $criteria->addSelectColumn($alias . '.Area');
            $criteria->addSelectColumn($alias . '.PrimProd1');
            $criteria->addSelectColumn($alias . '.PrimProd2');
            $criteria->addSelectColumn($alias . '.PrimProd3');
            $criteria->addSelectColumn($alias . '.RegionDescription');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
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
        $criteria->setPrimaryTableName(OceanprovincesrefPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OceanprovincesrefPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(OceanprovincesrefPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(OceanprovincesrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Oceanprovincesref
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = OceanprovincesrefPeer::doSelect($critcopy, $con);
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
        return OceanprovincesrefPeer::populateObjects(OceanprovincesrefPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(OceanprovincesrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OceanprovincesrefPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(OceanprovincesrefPeer::DATABASE_NAME);

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
     * @param Oceanprovincesref $obj A Oceanprovincesref object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            OceanprovincesrefPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Oceanprovincesref object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Oceanprovincesref) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oceanprovincesref object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(OceanprovincesrefPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Oceanprovincesref Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(OceanprovincesrefPeer::$instances[$key])) {
                return OceanprovincesrefPeer::$instances[$key];
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
        foreach (OceanprovincesrefPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        OceanprovincesrefPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to oceanprovincesref
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
        $cls = OceanprovincesrefPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = OceanprovincesrefPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = OceanprovincesrefPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OceanprovincesrefPeer::addInstanceToPool($obj, $key);
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
     * @return array (Oceanprovincesref object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = OceanprovincesrefPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = OceanprovincesrefPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + OceanprovincesrefPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OceanprovincesrefPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            OceanprovincesrefPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(OceanprovincesrefPeer::DATABASE_NAME)->getTable(OceanprovincesrefPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseOceanprovincesrefPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseOceanprovincesrefPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \OceanprovincesrefTableMap());
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
        return OceanprovincesrefPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Oceanprovincesref or Criteria object.
     *
     * @param      mixed $values Criteria or Oceanprovincesref object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OceanprovincesrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Oceanprovincesref object
        }

        if ($criteria->containsKey(OceanprovincesrefPeer::AUTOCTR) && $criteria->keyContainsValue(OceanprovincesrefPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.OceanprovincesrefPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(OceanprovincesrefPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Oceanprovincesref or Criteria object.
     *
     * @param      mixed $values Criteria or Oceanprovincesref object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OceanprovincesrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(OceanprovincesrefPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(OceanprovincesrefPeer::AUTOCTR);
            $value = $criteria->remove(OceanprovincesrefPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(OceanprovincesrefPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OceanprovincesrefPeer::TABLE_NAME);
            }

        } else { // $values is Oceanprovincesref object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(OceanprovincesrefPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the oceanprovincesref table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OceanprovincesrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(OceanprovincesrefPeer::TABLE_NAME, $con, OceanprovincesrefPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OceanprovincesrefPeer::clearInstancePool();
            OceanprovincesrefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Oceanprovincesref or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Oceanprovincesref object or primary key or array of primary keys
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
            $con = Propel::getConnection(OceanprovincesrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            OceanprovincesrefPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Oceanprovincesref) { // it's a model object
            // invalidate the cache for this single object
            OceanprovincesrefPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OceanprovincesrefPeer::DATABASE_NAME);
            $criteria->add(OceanprovincesrefPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                OceanprovincesrefPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(OceanprovincesrefPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            OceanprovincesrefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Oceanprovincesref object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Oceanprovincesref $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(OceanprovincesrefPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(OceanprovincesrefPeer::TABLE_NAME);

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

        return BasePeer::doValidate(OceanprovincesrefPeer::DATABASE_NAME, OceanprovincesrefPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Oceanprovincesref
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = OceanprovincesrefPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(OceanprovincesrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(OceanprovincesrefPeer::DATABASE_NAME);
        $criteria->add(OceanprovincesrefPeer::AUTOCTR, $pk);

        $v = OceanprovincesrefPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Oceanprovincesref[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OceanprovincesrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(OceanprovincesrefPeer::DATABASE_NAME);
            $criteria->add(OceanprovincesrefPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = OceanprovincesrefPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseOceanprovincesrefPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOceanprovincesrefPeer::buildTableMap();

