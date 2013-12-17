<?php


/**
 * Base static class for performing query and update operations on the 'gicim_photos_aug12' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseGicimPhotosAug12Peer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'gicim_photos_aug12';

    /** the related Propel class for this table */
    const OM_CLASS = 'GicimPhotosAug12';

    /** the related TableMap class for this table */
    const TM_CLASS = 'GicimPhotosAug12TableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 23;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 23;

    /** the column name for the URL_Data field */
    const URL_DATA = 'gicim_photos_aug12.URL_Data';

    /** the column name for the IMAGEPK field */
    const IMAGEPK = 'gicim_photos_aug12.IMAGEPK';

    /** the column name for the Status field */
    const STATUS = 'gicim_photos_aug12.Status';

    /** the column name for the Type_status field */
    const TYPE_STATUS = 'gicim_photos_aug12.Type_status';

    /** the column name for the URLIMAGE field */
    const URLIMAGE = 'gicim_photos_aug12.URLIMAGE';

    /** the column name for the ETATDOC field */
    const ETATDOC = 'gicim_photos_aug12.ETATDOC';

    /** the column name for the GICIMimageID field */
    const GICIMIMAGEID = 'gicim_photos_aug12.GICIMimageID';

    /** the column name for the GicimPoissonsID field */
    const GICIMPOISSONSID = 'gicim_photos_aug12.GicimPoissonsID';

    /** the column name for the FBSYNCODE field */
    const FBSYNCODE = 'gicim_photos_aug12.FBSYNCODE';

    /** the column name for the FAMILLE field */
    const FAMILLE = 'gicim_photos_aug12.FAMILLE';

    /** the column name for the Name field */
    const NAME = 'gicim_photos_aug12.Name';

    /** the column name for the Author field */
    const AUTHOR = 'gicim_photos_aug12.Author';

    /** the column name for the Catalog_no field */
    const CATALOG_NO = 'gicim_photos_aug12.Catalog_no';

    /** the column name for the Country field */
    const COUNTRY = 'gicim_photos_aug12.Country';

    /** the column name for the REGION field */
    const REGION = 'gicim_photos_aug12.REGION';

    /** the column name for the Locality field */
    const LOCALITY = 'gicim_photos_aug12.Locality';

    /** the column name for the Collector field */
    const COLLECTOR = 'gicim_photos_aug12.Collector';

    /** the column name for the Datecollected field */
    const DATECOLLECTED = 'gicim_photos_aug12.Datecollected';

    /** the column name for the Yearcollected field */
    const YEARCOLLECTED = 'gicim_photos_aug12.Yearcollected';

    /** the column name for the OBSERVATIONS field */
    const OBSERVATIONS = 'gicim_photos_aug12.OBSERVATIONS';

    /** the column name for the Medium field */
    const MEDIUM = 'gicim_photos_aug12.Medium';

    /** the column name for the PAYSADMIN field */
    const PAYSADMIN = 'gicim_photos_aug12.PAYSADMIN';

    /** the column name for the PKID field */
    const PKID = 'gicim_photos_aug12.PKID';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GicimPhotosAug12 objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GicimPhotosAug12[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GicimPhotosAug12Peer::$fieldNames[GicimPhotosAug12Peer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('UrlData', 'Imagepk', 'Status', 'TypeStatus', 'Urlimage', 'Etatdoc', 'Gicimimageid', 'Gicimpoissonsid', 'Fbsyncode', 'Famille', 'Name', 'Author', 'CatalogNo', 'Country', 'Region', 'Locality', 'Collector', 'Datecollected', 'Yearcollected', 'Observations', 'Medium', 'Paysadmin', 'Pkid', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('urlData', 'imagepk', 'status', 'typeStatus', 'urlimage', 'etatdoc', 'gicimimageid', 'gicimpoissonsid', 'fbsyncode', 'famille', 'name', 'author', 'catalogNo', 'country', 'region', 'locality', 'collector', 'datecollected', 'yearcollected', 'observations', 'medium', 'paysadmin', 'pkid', ),
        BasePeer::TYPE_COLNAME => array (GicimPhotosAug12Peer::URL_DATA, GicimPhotosAug12Peer::IMAGEPK, GicimPhotosAug12Peer::STATUS, GicimPhotosAug12Peer::TYPE_STATUS, GicimPhotosAug12Peer::URLIMAGE, GicimPhotosAug12Peer::ETATDOC, GicimPhotosAug12Peer::GICIMIMAGEID, GicimPhotosAug12Peer::GICIMPOISSONSID, GicimPhotosAug12Peer::FBSYNCODE, GicimPhotosAug12Peer::FAMILLE, GicimPhotosAug12Peer::NAME, GicimPhotosAug12Peer::AUTHOR, GicimPhotosAug12Peer::CATALOG_NO, GicimPhotosAug12Peer::COUNTRY, GicimPhotosAug12Peer::REGION, GicimPhotosAug12Peer::LOCALITY, GicimPhotosAug12Peer::COLLECTOR, GicimPhotosAug12Peer::DATECOLLECTED, GicimPhotosAug12Peer::YEARCOLLECTED, GicimPhotosAug12Peer::OBSERVATIONS, GicimPhotosAug12Peer::MEDIUM, GicimPhotosAug12Peer::PAYSADMIN, GicimPhotosAug12Peer::PKID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('URL_DATA', 'IMAGEPK', 'STATUS', 'TYPE_STATUS', 'URLIMAGE', 'ETATDOC', 'GICIMIMAGEID', 'GICIMPOISSONSID', 'FBSYNCODE', 'FAMILLE', 'NAME', 'AUTHOR', 'CATALOG_NO', 'COUNTRY', 'REGION', 'LOCALITY', 'COLLECTOR', 'DATECOLLECTED', 'YEARCOLLECTED', 'OBSERVATIONS', 'MEDIUM', 'PAYSADMIN', 'PKID', ),
        BasePeer::TYPE_FIELDNAME => array ('URL_Data', 'IMAGEPK', 'Status', 'Type_status', 'URLIMAGE', 'ETATDOC', 'GICIMimageID', 'GicimPoissonsID', 'FBSYNCODE', 'FAMILLE', 'Name', 'Author', 'Catalog_no', 'Country', 'REGION', 'Locality', 'Collector', 'Datecollected', 'Yearcollected', 'OBSERVATIONS', 'Medium', 'PAYSADMIN', 'PKID', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GicimPhotosAug12Peer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('UrlData' => 0, 'Imagepk' => 1, 'Status' => 2, 'TypeStatus' => 3, 'Urlimage' => 4, 'Etatdoc' => 5, 'Gicimimageid' => 6, 'Gicimpoissonsid' => 7, 'Fbsyncode' => 8, 'Famille' => 9, 'Name' => 10, 'Author' => 11, 'CatalogNo' => 12, 'Country' => 13, 'Region' => 14, 'Locality' => 15, 'Collector' => 16, 'Datecollected' => 17, 'Yearcollected' => 18, 'Observations' => 19, 'Medium' => 20, 'Paysadmin' => 21, 'Pkid' => 22, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('urlData' => 0, 'imagepk' => 1, 'status' => 2, 'typeStatus' => 3, 'urlimage' => 4, 'etatdoc' => 5, 'gicimimageid' => 6, 'gicimpoissonsid' => 7, 'fbsyncode' => 8, 'famille' => 9, 'name' => 10, 'author' => 11, 'catalogNo' => 12, 'country' => 13, 'region' => 14, 'locality' => 15, 'collector' => 16, 'datecollected' => 17, 'yearcollected' => 18, 'observations' => 19, 'medium' => 20, 'paysadmin' => 21, 'pkid' => 22, ),
        BasePeer::TYPE_COLNAME => array (GicimPhotosAug12Peer::URL_DATA => 0, GicimPhotosAug12Peer::IMAGEPK => 1, GicimPhotosAug12Peer::STATUS => 2, GicimPhotosAug12Peer::TYPE_STATUS => 3, GicimPhotosAug12Peer::URLIMAGE => 4, GicimPhotosAug12Peer::ETATDOC => 5, GicimPhotosAug12Peer::GICIMIMAGEID => 6, GicimPhotosAug12Peer::GICIMPOISSONSID => 7, GicimPhotosAug12Peer::FBSYNCODE => 8, GicimPhotosAug12Peer::FAMILLE => 9, GicimPhotosAug12Peer::NAME => 10, GicimPhotosAug12Peer::AUTHOR => 11, GicimPhotosAug12Peer::CATALOG_NO => 12, GicimPhotosAug12Peer::COUNTRY => 13, GicimPhotosAug12Peer::REGION => 14, GicimPhotosAug12Peer::LOCALITY => 15, GicimPhotosAug12Peer::COLLECTOR => 16, GicimPhotosAug12Peer::DATECOLLECTED => 17, GicimPhotosAug12Peer::YEARCOLLECTED => 18, GicimPhotosAug12Peer::OBSERVATIONS => 19, GicimPhotosAug12Peer::MEDIUM => 20, GicimPhotosAug12Peer::PAYSADMIN => 21, GicimPhotosAug12Peer::PKID => 22, ),
        BasePeer::TYPE_RAW_COLNAME => array ('URL_DATA' => 0, 'IMAGEPK' => 1, 'STATUS' => 2, 'TYPE_STATUS' => 3, 'URLIMAGE' => 4, 'ETATDOC' => 5, 'GICIMIMAGEID' => 6, 'GICIMPOISSONSID' => 7, 'FBSYNCODE' => 8, 'FAMILLE' => 9, 'NAME' => 10, 'AUTHOR' => 11, 'CATALOG_NO' => 12, 'COUNTRY' => 13, 'REGION' => 14, 'LOCALITY' => 15, 'COLLECTOR' => 16, 'DATECOLLECTED' => 17, 'YEARCOLLECTED' => 18, 'OBSERVATIONS' => 19, 'MEDIUM' => 20, 'PAYSADMIN' => 21, 'PKID' => 22, ),
        BasePeer::TYPE_FIELDNAME => array ('URL_Data' => 0, 'IMAGEPK' => 1, 'Status' => 2, 'Type_status' => 3, 'URLIMAGE' => 4, 'ETATDOC' => 5, 'GICIMimageID' => 6, 'GicimPoissonsID' => 7, 'FBSYNCODE' => 8, 'FAMILLE' => 9, 'Name' => 10, 'Author' => 11, 'Catalog_no' => 12, 'Country' => 13, 'REGION' => 14, 'Locality' => 15, 'Collector' => 16, 'Datecollected' => 17, 'Yearcollected' => 18, 'OBSERVATIONS' => 19, 'Medium' => 20, 'PAYSADMIN' => 21, 'PKID' => 22, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
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
        $toNames = GicimPhotosAug12Peer::getFieldNames($toType);
        $key = isset(GicimPhotosAug12Peer::$fieldKeys[$fromType][$name]) ? GicimPhotosAug12Peer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GicimPhotosAug12Peer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GicimPhotosAug12Peer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GicimPhotosAug12Peer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GicimPhotosAug12Peer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GicimPhotosAug12Peer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GicimPhotosAug12Peer::URL_DATA);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::IMAGEPK);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::STATUS);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::TYPE_STATUS);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::URLIMAGE);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::ETATDOC);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::GICIMIMAGEID);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::GICIMPOISSONSID);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::FBSYNCODE);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::FAMILLE);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::NAME);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::AUTHOR);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::CATALOG_NO);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::COUNTRY);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::REGION);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::LOCALITY);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::COLLECTOR);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::DATECOLLECTED);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::YEARCOLLECTED);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::OBSERVATIONS);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::MEDIUM);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::PAYSADMIN);
            $criteria->addSelectColumn(GicimPhotosAug12Peer::PKID);
        } else {
            $criteria->addSelectColumn($alias . '.URL_Data');
            $criteria->addSelectColumn($alias . '.IMAGEPK');
            $criteria->addSelectColumn($alias . '.Status');
            $criteria->addSelectColumn($alias . '.Type_status');
            $criteria->addSelectColumn($alias . '.URLIMAGE');
            $criteria->addSelectColumn($alias . '.ETATDOC');
            $criteria->addSelectColumn($alias . '.GICIMimageID');
            $criteria->addSelectColumn($alias . '.GicimPoissonsID');
            $criteria->addSelectColumn($alias . '.FBSYNCODE');
            $criteria->addSelectColumn($alias . '.FAMILLE');
            $criteria->addSelectColumn($alias . '.Name');
            $criteria->addSelectColumn($alias . '.Author');
            $criteria->addSelectColumn($alias . '.Catalog_no');
            $criteria->addSelectColumn($alias . '.Country');
            $criteria->addSelectColumn($alias . '.REGION');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.Collector');
            $criteria->addSelectColumn($alias . '.Datecollected');
            $criteria->addSelectColumn($alias . '.Yearcollected');
            $criteria->addSelectColumn($alias . '.OBSERVATIONS');
            $criteria->addSelectColumn($alias . '.Medium');
            $criteria->addSelectColumn($alias . '.PAYSADMIN');
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
        $criteria->setPrimaryTableName(GicimPhotosAug12Peer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GicimPhotosAug12Peer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GicimPhotosAug12Peer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GicimPhotosAug12Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GicimPhotosAug12
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GicimPhotosAug12Peer::doSelect($critcopy, $con);
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
        return GicimPhotosAug12Peer::populateObjects(GicimPhotosAug12Peer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GicimPhotosAug12Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GicimPhotosAug12Peer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GicimPhotosAug12Peer::DATABASE_NAME);

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
     * @param GicimPhotosAug12 $obj A GicimPhotosAug12 object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPkid();
            } // if key === null
            GicimPhotosAug12Peer::$instances[$key] = $obj;
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
     * @param      mixed $value A GicimPhotosAug12 object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GicimPhotosAug12) {
                $key = (string) $value->getPkid();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GicimPhotosAug12 object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GicimPhotosAug12Peer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GicimPhotosAug12 Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GicimPhotosAug12Peer::$instances[$key])) {
                return GicimPhotosAug12Peer::$instances[$key];
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
        foreach (GicimPhotosAug12Peer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GicimPhotosAug12Peer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gicim_photos_aug12
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
        if ($row[$startcol + 22] === null) {
            return null;
        }

        return (string) $row[$startcol + 22];
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

        return (string) $row[$startcol + 22];
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
        $cls = GicimPhotosAug12Peer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GicimPhotosAug12Peer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GicimPhotosAug12Peer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GicimPhotosAug12Peer::addInstanceToPool($obj, $key);
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
     * @return array (GicimPhotosAug12 object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GicimPhotosAug12Peer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GicimPhotosAug12Peer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GicimPhotosAug12Peer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GicimPhotosAug12Peer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GicimPhotosAug12Peer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GicimPhotosAug12Peer::DATABASE_NAME)->getTable(GicimPhotosAug12Peer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGicimPhotosAug12Peer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGicimPhotosAug12Peer::TABLE_NAME)) {
        $dbMap->addTableObject(new \GicimPhotosAug12TableMap());
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
        return GicimPhotosAug12Peer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GicimPhotosAug12 or Criteria object.
     *
     * @param      mixed $values Criteria or GicimPhotosAug12 object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GicimPhotosAug12Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GicimPhotosAug12 object
        }

        if ($criteria->containsKey(GicimPhotosAug12Peer::PKID) && $criteria->keyContainsValue(GicimPhotosAug12Peer::PKID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.GicimPhotosAug12Peer::PKID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(GicimPhotosAug12Peer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GicimPhotosAug12 or Criteria object.
     *
     * @param      mixed $values Criteria or GicimPhotosAug12 object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GicimPhotosAug12Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GicimPhotosAug12Peer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GicimPhotosAug12Peer::PKID);
            $value = $criteria->remove(GicimPhotosAug12Peer::PKID);
            if ($value) {
                $selectCriteria->add(GicimPhotosAug12Peer::PKID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GicimPhotosAug12Peer::TABLE_NAME);
            }

        } else { // $values is GicimPhotosAug12 object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GicimPhotosAug12Peer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gicim_photos_aug12 table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GicimPhotosAug12Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GicimPhotosAug12Peer::TABLE_NAME, $con, GicimPhotosAug12Peer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GicimPhotosAug12Peer::clearInstancePool();
            GicimPhotosAug12Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GicimPhotosAug12 or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GicimPhotosAug12 object or primary key or array of primary keys
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
            $con = Propel::getConnection(GicimPhotosAug12Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GicimPhotosAug12Peer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GicimPhotosAug12) { // it's a model object
            // invalidate the cache for this single object
            GicimPhotosAug12Peer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GicimPhotosAug12Peer::DATABASE_NAME);
            $criteria->add(GicimPhotosAug12Peer::PKID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GicimPhotosAug12Peer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GicimPhotosAug12Peer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GicimPhotosAug12Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GicimPhotosAug12 object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GicimPhotosAug12 $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GicimPhotosAug12Peer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GicimPhotosAug12Peer::TABLE_NAME);

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

        return BasePeer::doValidate(GicimPhotosAug12Peer::DATABASE_NAME, GicimPhotosAug12Peer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GicimPhotosAug12
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GicimPhotosAug12Peer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GicimPhotosAug12Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GicimPhotosAug12Peer::DATABASE_NAME);
        $criteria->add(GicimPhotosAug12Peer::PKID, $pk);

        $v = GicimPhotosAug12Peer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GicimPhotosAug12[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GicimPhotosAug12Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GicimPhotosAug12Peer::DATABASE_NAME);
            $criteria->add(GicimPhotosAug12Peer::PKID, $pks, Criteria::IN);
            $objs = GicimPhotosAug12Peer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGicimPhotosAug12Peer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGicimPhotosAug12Peer::buildTableMap();

