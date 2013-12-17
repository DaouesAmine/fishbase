<?php


/**
 * Base static class for performing query and update operations on the 'gicim_photos' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseGicimPhotosPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'gicim_photos';

    /** the related Propel class for this table */
    const OM_CLASS = 'GicimPhotos';

    /** the related TableMap class for this table */
    const TM_CLASS = 'GicimPhotosTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 23;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 23;

    /** the column name for the URL_Data field */
    const URL_DATA = 'gicim_photos.URL_Data';

    /** the column name for the IMAGEPK field */
    const IMAGEPK = 'gicim_photos.IMAGEPK';

    /** the column name for the Status field */
    const STATUS = 'gicim_photos.Status';

    /** the column name for the Type_status field */
    const TYPE_STATUS = 'gicim_photos.Type_status';

    /** the column name for the URLIMAGE field */
    const URLIMAGE = 'gicim_photos.URLIMAGE';

    /** the column name for the ETATDOC field */
    const ETATDOC = 'gicim_photos.ETATDOC';

    /** the column name for the GICIMimageID field */
    const GICIMIMAGEID = 'gicim_photos.GICIMimageID';

    /** the column name for the GicimPoissonsID field */
    const GICIMPOISSONSID = 'gicim_photos.GicimPoissonsID';

    /** the column name for the FBSYNCODE field */
    const FBSYNCODE = 'gicim_photos.FBSYNCODE';

    /** the column name for the FAMILLE field */
    const FAMILLE = 'gicim_photos.FAMILLE';

    /** the column name for the Name field */
    const NAME = 'gicim_photos.Name';

    /** the column name for the Author field */
    const AUTHOR = 'gicim_photos.Author';

    /** the column name for the Catalog_no field */
    const CATALOG_NO = 'gicim_photos.Catalog_no';

    /** the column name for the Country field */
    const COUNTRY = 'gicim_photos.Country';

    /** the column name for the REGION field */
    const REGION = 'gicim_photos.REGION';

    /** the column name for the Locality field */
    const LOCALITY = 'gicim_photos.Locality';

    /** the column name for the Collector field */
    const COLLECTOR = 'gicim_photos.Collector';

    /** the column name for the Datecollected field */
    const DATECOLLECTED = 'gicim_photos.Datecollected';

    /** the column name for the Yearcollected field */
    const YEARCOLLECTED = 'gicim_photos.Yearcollected';

    /** the column name for the OBSERVATIONS field */
    const OBSERVATIONS = 'gicim_photos.OBSERVATIONS';

    /** the column name for the Medium field */
    const MEDIUM = 'gicim_photos.Medium';

    /** the column name for the PAYSADMIN field */
    const PAYSADMIN = 'gicim_photos.PAYSADMIN';

    /** the column name for the PKID field */
    const PKID = 'gicim_photos.PKID';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of GicimPhotos objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array GicimPhotos[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GicimPhotosPeer::$fieldNames[GicimPhotosPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('UrlData', 'Imagepk', 'Status', 'TypeStatus', 'Urlimage', 'Etatdoc', 'Gicimimageid', 'Gicimpoissonsid', 'Fbsyncode', 'Famille', 'Name', 'Author', 'CatalogNo', 'Country', 'Region', 'Locality', 'Collector', 'Datecollected', 'Yearcollected', 'Observations', 'Medium', 'Paysadmin', 'Pkid', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('urlData', 'imagepk', 'status', 'typeStatus', 'urlimage', 'etatdoc', 'gicimimageid', 'gicimpoissonsid', 'fbsyncode', 'famille', 'name', 'author', 'catalogNo', 'country', 'region', 'locality', 'collector', 'datecollected', 'yearcollected', 'observations', 'medium', 'paysadmin', 'pkid', ),
        BasePeer::TYPE_COLNAME => array (GicimPhotosPeer::URL_DATA, GicimPhotosPeer::IMAGEPK, GicimPhotosPeer::STATUS, GicimPhotosPeer::TYPE_STATUS, GicimPhotosPeer::URLIMAGE, GicimPhotosPeer::ETATDOC, GicimPhotosPeer::GICIMIMAGEID, GicimPhotosPeer::GICIMPOISSONSID, GicimPhotosPeer::FBSYNCODE, GicimPhotosPeer::FAMILLE, GicimPhotosPeer::NAME, GicimPhotosPeer::AUTHOR, GicimPhotosPeer::CATALOG_NO, GicimPhotosPeer::COUNTRY, GicimPhotosPeer::REGION, GicimPhotosPeer::LOCALITY, GicimPhotosPeer::COLLECTOR, GicimPhotosPeer::DATECOLLECTED, GicimPhotosPeer::YEARCOLLECTED, GicimPhotosPeer::OBSERVATIONS, GicimPhotosPeer::MEDIUM, GicimPhotosPeer::PAYSADMIN, GicimPhotosPeer::PKID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('URL_DATA', 'IMAGEPK', 'STATUS', 'TYPE_STATUS', 'URLIMAGE', 'ETATDOC', 'GICIMIMAGEID', 'GICIMPOISSONSID', 'FBSYNCODE', 'FAMILLE', 'NAME', 'AUTHOR', 'CATALOG_NO', 'COUNTRY', 'REGION', 'LOCALITY', 'COLLECTOR', 'DATECOLLECTED', 'YEARCOLLECTED', 'OBSERVATIONS', 'MEDIUM', 'PAYSADMIN', 'PKID', ),
        BasePeer::TYPE_FIELDNAME => array ('URL_Data', 'IMAGEPK', 'Status', 'Type_status', 'URLIMAGE', 'ETATDOC', 'GICIMimageID', 'GicimPoissonsID', 'FBSYNCODE', 'FAMILLE', 'Name', 'Author', 'Catalog_no', 'Country', 'REGION', 'Locality', 'Collector', 'Datecollected', 'Yearcollected', 'OBSERVATIONS', 'Medium', 'PAYSADMIN', 'PKID', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GicimPhotosPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('UrlData' => 0, 'Imagepk' => 1, 'Status' => 2, 'TypeStatus' => 3, 'Urlimage' => 4, 'Etatdoc' => 5, 'Gicimimageid' => 6, 'Gicimpoissonsid' => 7, 'Fbsyncode' => 8, 'Famille' => 9, 'Name' => 10, 'Author' => 11, 'CatalogNo' => 12, 'Country' => 13, 'Region' => 14, 'Locality' => 15, 'Collector' => 16, 'Datecollected' => 17, 'Yearcollected' => 18, 'Observations' => 19, 'Medium' => 20, 'Paysadmin' => 21, 'Pkid' => 22, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('urlData' => 0, 'imagepk' => 1, 'status' => 2, 'typeStatus' => 3, 'urlimage' => 4, 'etatdoc' => 5, 'gicimimageid' => 6, 'gicimpoissonsid' => 7, 'fbsyncode' => 8, 'famille' => 9, 'name' => 10, 'author' => 11, 'catalogNo' => 12, 'country' => 13, 'region' => 14, 'locality' => 15, 'collector' => 16, 'datecollected' => 17, 'yearcollected' => 18, 'observations' => 19, 'medium' => 20, 'paysadmin' => 21, 'pkid' => 22, ),
        BasePeer::TYPE_COLNAME => array (GicimPhotosPeer::URL_DATA => 0, GicimPhotosPeer::IMAGEPK => 1, GicimPhotosPeer::STATUS => 2, GicimPhotosPeer::TYPE_STATUS => 3, GicimPhotosPeer::URLIMAGE => 4, GicimPhotosPeer::ETATDOC => 5, GicimPhotosPeer::GICIMIMAGEID => 6, GicimPhotosPeer::GICIMPOISSONSID => 7, GicimPhotosPeer::FBSYNCODE => 8, GicimPhotosPeer::FAMILLE => 9, GicimPhotosPeer::NAME => 10, GicimPhotosPeer::AUTHOR => 11, GicimPhotosPeer::CATALOG_NO => 12, GicimPhotosPeer::COUNTRY => 13, GicimPhotosPeer::REGION => 14, GicimPhotosPeer::LOCALITY => 15, GicimPhotosPeer::COLLECTOR => 16, GicimPhotosPeer::DATECOLLECTED => 17, GicimPhotosPeer::YEARCOLLECTED => 18, GicimPhotosPeer::OBSERVATIONS => 19, GicimPhotosPeer::MEDIUM => 20, GicimPhotosPeer::PAYSADMIN => 21, GicimPhotosPeer::PKID => 22, ),
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
        $toNames = GicimPhotosPeer::getFieldNames($toType);
        $key = isset(GicimPhotosPeer::$fieldKeys[$fromType][$name]) ? GicimPhotosPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GicimPhotosPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GicimPhotosPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GicimPhotosPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GicimPhotosPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GicimPhotosPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GicimPhotosPeer::URL_DATA);
            $criteria->addSelectColumn(GicimPhotosPeer::IMAGEPK);
            $criteria->addSelectColumn(GicimPhotosPeer::STATUS);
            $criteria->addSelectColumn(GicimPhotosPeer::TYPE_STATUS);
            $criteria->addSelectColumn(GicimPhotosPeer::URLIMAGE);
            $criteria->addSelectColumn(GicimPhotosPeer::ETATDOC);
            $criteria->addSelectColumn(GicimPhotosPeer::GICIMIMAGEID);
            $criteria->addSelectColumn(GicimPhotosPeer::GICIMPOISSONSID);
            $criteria->addSelectColumn(GicimPhotosPeer::FBSYNCODE);
            $criteria->addSelectColumn(GicimPhotosPeer::FAMILLE);
            $criteria->addSelectColumn(GicimPhotosPeer::NAME);
            $criteria->addSelectColumn(GicimPhotosPeer::AUTHOR);
            $criteria->addSelectColumn(GicimPhotosPeer::CATALOG_NO);
            $criteria->addSelectColumn(GicimPhotosPeer::COUNTRY);
            $criteria->addSelectColumn(GicimPhotosPeer::REGION);
            $criteria->addSelectColumn(GicimPhotosPeer::LOCALITY);
            $criteria->addSelectColumn(GicimPhotosPeer::COLLECTOR);
            $criteria->addSelectColumn(GicimPhotosPeer::DATECOLLECTED);
            $criteria->addSelectColumn(GicimPhotosPeer::YEARCOLLECTED);
            $criteria->addSelectColumn(GicimPhotosPeer::OBSERVATIONS);
            $criteria->addSelectColumn(GicimPhotosPeer::MEDIUM);
            $criteria->addSelectColumn(GicimPhotosPeer::PAYSADMIN);
            $criteria->addSelectColumn(GicimPhotosPeer::PKID);
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
        $criteria->setPrimaryTableName(GicimPhotosPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GicimPhotosPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GicimPhotosPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GicimPhotosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return GicimPhotos
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GicimPhotosPeer::doSelect($critcopy, $con);
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
        return GicimPhotosPeer::populateObjects(GicimPhotosPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GicimPhotosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GicimPhotosPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GicimPhotosPeer::DATABASE_NAME);

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
     * @param GicimPhotos $obj A GicimPhotos object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPkid();
            } // if key === null
            GicimPhotosPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A GicimPhotos object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof GicimPhotos) {
                $key = (string) $value->getPkid();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or GicimPhotos object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GicimPhotosPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return GicimPhotos Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GicimPhotosPeer::$instances[$key])) {
                return GicimPhotosPeer::$instances[$key];
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
        foreach (GicimPhotosPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GicimPhotosPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gicim_photos
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
        $cls = GicimPhotosPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GicimPhotosPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GicimPhotosPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GicimPhotosPeer::addInstanceToPool($obj, $key);
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
     * @return array (GicimPhotos object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GicimPhotosPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GicimPhotosPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GicimPhotosPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GicimPhotosPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GicimPhotosPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GicimPhotosPeer::DATABASE_NAME)->getTable(GicimPhotosPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGicimPhotosPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGicimPhotosPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \GicimPhotosTableMap());
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
        return GicimPhotosPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a GicimPhotos or Criteria object.
     *
     * @param      mixed $values Criteria or GicimPhotos object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GicimPhotosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from GicimPhotos object
        }

        if ($criteria->containsKey(GicimPhotosPeer::PKID) && $criteria->keyContainsValue(GicimPhotosPeer::PKID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.GicimPhotosPeer::PKID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(GicimPhotosPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a GicimPhotos or Criteria object.
     *
     * @param      mixed $values Criteria or GicimPhotos object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GicimPhotosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GicimPhotosPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GicimPhotosPeer::PKID);
            $value = $criteria->remove(GicimPhotosPeer::PKID);
            if ($value) {
                $selectCriteria->add(GicimPhotosPeer::PKID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GicimPhotosPeer::TABLE_NAME);
            }

        } else { // $values is GicimPhotos object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GicimPhotosPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gicim_photos table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GicimPhotosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GicimPhotosPeer::TABLE_NAME, $con, GicimPhotosPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GicimPhotosPeer::clearInstancePool();
            GicimPhotosPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a GicimPhotos or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or GicimPhotos object or primary key or array of primary keys
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
            $con = Propel::getConnection(GicimPhotosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GicimPhotosPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof GicimPhotos) { // it's a model object
            // invalidate the cache for this single object
            GicimPhotosPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GicimPhotosPeer::DATABASE_NAME);
            $criteria->add(GicimPhotosPeer::PKID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GicimPhotosPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GicimPhotosPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GicimPhotosPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given GicimPhotos object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param GicimPhotos $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GicimPhotosPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GicimPhotosPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GicimPhotosPeer::DATABASE_NAME, GicimPhotosPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return GicimPhotos
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GicimPhotosPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GicimPhotosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GicimPhotosPeer::DATABASE_NAME);
        $criteria->add(GicimPhotosPeer::PKID, $pk);

        $v = GicimPhotosPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return GicimPhotos[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GicimPhotosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GicimPhotosPeer::DATABASE_NAME);
            $criteria->add(GicimPhotosPeer::PKID, $pks, Criteria::IN);
            $objs = GicimPhotosPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGicimPhotosPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGicimPhotosPeer::buildTableMap();

