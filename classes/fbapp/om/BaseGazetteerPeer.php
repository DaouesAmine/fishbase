<?php


/**
 * Base static class for performing query and update operations on the 'gazetteer' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseGazetteerPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'gazetteer';

    /** the related Propel class for this table */
    const OM_CLASS = 'Gazetteer';

    /** the related TableMap class for this table */
    const TM_CLASS = 'GazetteerTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 25;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 25;

    /** the column name for the GazetCode field */
    const GAZETCODE = 'gazetteer.GazetCode';

    /** the column name for the Gazetteer field */
    const GAZETTEER = 'gazetteer.Gazetteer';

    /** the column name for the OtherNames field */
    const OTHERNAMES = 'gazetteer.OtherNames';

    /** the column name for the LocalityType field */
    const LOCALITYTYPE = 'gazetteer.LocalityType';

    /** the column name for the SeaDrainage field */
    const SEADRAINAGE = 'gazetteer.SeaDrainage';

    /** the column name for the Province field */
    const PROVINCE = 'gazetteer.Province';

    /** the column name for the C_CODE field */
    const C_CODE = 'gazetteer.C_CODE';

    /** the column name for the ABB field */
    const ABB = 'gazetteer.ABB';

    /** the column name for the AreaCodeInland field */
    const AREACODEINLAND = 'gazetteer.AreaCodeInland';

    /** the column name for the AreaCodeMarine field */
    const AREACODEMARINE = 'gazetteer.AreaCodeMarine';

    /** the column name for the LatitudeDeg field */
    const LATITUDEDEG = 'gazetteer.LatitudeDeg';

    /** the column name for the LatitudeMin field */
    const LATITUDEMIN = 'gazetteer.LatitudeMin';

    /** the column name for the NorthSouth field */
    const NORTHSOUTH = 'gazetteer.NorthSouth';

    /** the column name for the LongitudeDeg field */
    const LONGITUDEDEG = 'gazetteer.LongitudeDeg';

    /** the column name for the LongitudeMin field */
    const LONGITUDEMIN = 'gazetteer.LongitudeMin';

    /** the column name for the EastWest field */
    const EASTWEST = 'gazetteer.EastWest';

    /** the column name for the Accuracy field */
    const ACCURACY = 'gazetteer.Accuracy';

    /** the column name for the Entered field */
    const ENTERED = 'gazetteer.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'gazetteer.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'gazetteer.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'gazetteer.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'gazetteer.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'gazetteer.DateChecked';

    /** the column name for the Remark field */
    const REMARK = 'gazetteer.Remark';

    /** the column name for the TS field */
    const TS = 'gazetteer.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Gazetteer objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Gazetteer[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GazetteerPeer::$fieldNames[GazetteerPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Gazetcode', 'Gazetteer', 'Othernames', 'Localitytype', 'Seadrainage', 'Province', 'CCode', 'Abb', 'Areacodeinland', 'Areacodemarine', 'Latitudedeg', 'Latitudemin', 'Northsouth', 'Longitudedeg', 'Longitudemin', 'Eastwest', 'Accuracy', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Remark', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('gazetcode', 'gazetteer', 'othernames', 'localitytype', 'seadrainage', 'province', 'cCode', 'abb', 'areacodeinland', 'areacodemarine', 'latitudedeg', 'latitudemin', 'northsouth', 'longitudedeg', 'longitudemin', 'eastwest', 'accuracy', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'remark', 'ts', ),
        BasePeer::TYPE_COLNAME => array (GazetteerPeer::GAZETCODE, GazetteerPeer::GAZETTEER, GazetteerPeer::OTHERNAMES, GazetteerPeer::LOCALITYTYPE, GazetteerPeer::SEADRAINAGE, GazetteerPeer::PROVINCE, GazetteerPeer::C_CODE, GazetteerPeer::ABB, GazetteerPeer::AREACODEINLAND, GazetteerPeer::AREACODEMARINE, GazetteerPeer::LATITUDEDEG, GazetteerPeer::LATITUDEMIN, GazetteerPeer::NORTHSOUTH, GazetteerPeer::LONGITUDEDEG, GazetteerPeer::LONGITUDEMIN, GazetteerPeer::EASTWEST, GazetteerPeer::ACCURACY, GazetteerPeer::ENTERED, GazetteerPeer::DATEENTERED, GazetteerPeer::MODIFIED, GazetteerPeer::DATEMODIFIED, GazetteerPeer::EXPERT, GazetteerPeer::DATECHECKED, GazetteerPeer::REMARK, GazetteerPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('GAZETCODE', 'GAZETTEER', 'OTHERNAMES', 'LOCALITYTYPE', 'SEADRAINAGE', 'PROVINCE', 'C_CODE', 'ABB', 'AREACODEINLAND', 'AREACODEMARINE', 'LATITUDEDEG', 'LATITUDEMIN', 'NORTHSOUTH', 'LONGITUDEDEG', 'LONGITUDEMIN', 'EASTWEST', 'ACCURACY', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'REMARK', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('GazetCode', 'Gazetteer', 'OtherNames', 'LocalityType', 'SeaDrainage', 'Province', 'C_CODE', 'ABB', 'AreaCodeInland', 'AreaCodeMarine', 'LatitudeDeg', 'LatitudeMin', 'NorthSouth', 'LongitudeDeg', 'LongitudeMin', 'EastWest', 'Accuracy', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Remark', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GazetteerPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Gazetcode' => 0, 'Gazetteer' => 1, 'Othernames' => 2, 'Localitytype' => 3, 'Seadrainage' => 4, 'Province' => 5, 'CCode' => 6, 'Abb' => 7, 'Areacodeinland' => 8, 'Areacodemarine' => 9, 'Latitudedeg' => 10, 'Latitudemin' => 11, 'Northsouth' => 12, 'Longitudedeg' => 13, 'Longitudemin' => 14, 'Eastwest' => 15, 'Accuracy' => 16, 'Entered' => 17, 'Dateentered' => 18, 'Modified' => 19, 'Datemodified' => 20, 'Expert' => 21, 'Datechecked' => 22, 'Remark' => 23, 'Ts' => 24, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('gazetcode' => 0, 'gazetteer' => 1, 'othernames' => 2, 'localitytype' => 3, 'seadrainage' => 4, 'province' => 5, 'cCode' => 6, 'abb' => 7, 'areacodeinland' => 8, 'areacodemarine' => 9, 'latitudedeg' => 10, 'latitudemin' => 11, 'northsouth' => 12, 'longitudedeg' => 13, 'longitudemin' => 14, 'eastwest' => 15, 'accuracy' => 16, 'entered' => 17, 'dateentered' => 18, 'modified' => 19, 'datemodified' => 20, 'expert' => 21, 'datechecked' => 22, 'remark' => 23, 'ts' => 24, ),
        BasePeer::TYPE_COLNAME => array (GazetteerPeer::GAZETCODE => 0, GazetteerPeer::GAZETTEER => 1, GazetteerPeer::OTHERNAMES => 2, GazetteerPeer::LOCALITYTYPE => 3, GazetteerPeer::SEADRAINAGE => 4, GazetteerPeer::PROVINCE => 5, GazetteerPeer::C_CODE => 6, GazetteerPeer::ABB => 7, GazetteerPeer::AREACODEINLAND => 8, GazetteerPeer::AREACODEMARINE => 9, GazetteerPeer::LATITUDEDEG => 10, GazetteerPeer::LATITUDEMIN => 11, GazetteerPeer::NORTHSOUTH => 12, GazetteerPeer::LONGITUDEDEG => 13, GazetteerPeer::LONGITUDEMIN => 14, GazetteerPeer::EASTWEST => 15, GazetteerPeer::ACCURACY => 16, GazetteerPeer::ENTERED => 17, GazetteerPeer::DATEENTERED => 18, GazetteerPeer::MODIFIED => 19, GazetteerPeer::DATEMODIFIED => 20, GazetteerPeer::EXPERT => 21, GazetteerPeer::DATECHECKED => 22, GazetteerPeer::REMARK => 23, GazetteerPeer::TS => 24, ),
        BasePeer::TYPE_RAW_COLNAME => array ('GAZETCODE' => 0, 'GAZETTEER' => 1, 'OTHERNAMES' => 2, 'LOCALITYTYPE' => 3, 'SEADRAINAGE' => 4, 'PROVINCE' => 5, 'C_CODE' => 6, 'ABB' => 7, 'AREACODEINLAND' => 8, 'AREACODEMARINE' => 9, 'LATITUDEDEG' => 10, 'LATITUDEMIN' => 11, 'NORTHSOUTH' => 12, 'LONGITUDEDEG' => 13, 'LONGITUDEMIN' => 14, 'EASTWEST' => 15, 'ACCURACY' => 16, 'ENTERED' => 17, 'DATEENTERED' => 18, 'MODIFIED' => 19, 'DATEMODIFIED' => 20, 'EXPERT' => 21, 'DATECHECKED' => 22, 'REMARK' => 23, 'TS' => 24, ),
        BasePeer::TYPE_FIELDNAME => array ('GazetCode' => 0, 'Gazetteer' => 1, 'OtherNames' => 2, 'LocalityType' => 3, 'SeaDrainage' => 4, 'Province' => 5, 'C_CODE' => 6, 'ABB' => 7, 'AreaCodeInland' => 8, 'AreaCodeMarine' => 9, 'LatitudeDeg' => 10, 'LatitudeMin' => 11, 'NorthSouth' => 12, 'LongitudeDeg' => 13, 'LongitudeMin' => 14, 'EastWest' => 15, 'Accuracy' => 16, 'Entered' => 17, 'DateEntered' => 18, 'Modified' => 19, 'DateModified' => 20, 'Expert' => 21, 'DateChecked' => 22, 'Remark' => 23, 'TS' => 24, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
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
        $toNames = GazetteerPeer::getFieldNames($toType);
        $key = isset(GazetteerPeer::$fieldKeys[$fromType][$name]) ? GazetteerPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GazetteerPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GazetteerPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GazetteerPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GazetteerPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GazetteerPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GazetteerPeer::GAZETCODE);
            $criteria->addSelectColumn(GazetteerPeer::GAZETTEER);
            $criteria->addSelectColumn(GazetteerPeer::OTHERNAMES);
            $criteria->addSelectColumn(GazetteerPeer::LOCALITYTYPE);
            $criteria->addSelectColumn(GazetteerPeer::SEADRAINAGE);
            $criteria->addSelectColumn(GazetteerPeer::PROVINCE);
            $criteria->addSelectColumn(GazetteerPeer::C_CODE);
            $criteria->addSelectColumn(GazetteerPeer::ABB);
            $criteria->addSelectColumn(GazetteerPeer::AREACODEINLAND);
            $criteria->addSelectColumn(GazetteerPeer::AREACODEMARINE);
            $criteria->addSelectColumn(GazetteerPeer::LATITUDEDEG);
            $criteria->addSelectColumn(GazetteerPeer::LATITUDEMIN);
            $criteria->addSelectColumn(GazetteerPeer::NORTHSOUTH);
            $criteria->addSelectColumn(GazetteerPeer::LONGITUDEDEG);
            $criteria->addSelectColumn(GazetteerPeer::LONGITUDEMIN);
            $criteria->addSelectColumn(GazetteerPeer::EASTWEST);
            $criteria->addSelectColumn(GazetteerPeer::ACCURACY);
            $criteria->addSelectColumn(GazetteerPeer::ENTERED);
            $criteria->addSelectColumn(GazetteerPeer::DATEENTERED);
            $criteria->addSelectColumn(GazetteerPeer::MODIFIED);
            $criteria->addSelectColumn(GazetteerPeer::DATEMODIFIED);
            $criteria->addSelectColumn(GazetteerPeer::EXPERT);
            $criteria->addSelectColumn(GazetteerPeer::DATECHECKED);
            $criteria->addSelectColumn(GazetteerPeer::REMARK);
            $criteria->addSelectColumn(GazetteerPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.GazetCode');
            $criteria->addSelectColumn($alias . '.Gazetteer');
            $criteria->addSelectColumn($alias . '.OtherNames');
            $criteria->addSelectColumn($alias . '.LocalityType');
            $criteria->addSelectColumn($alias . '.SeaDrainage');
            $criteria->addSelectColumn($alias . '.Province');
            $criteria->addSelectColumn($alias . '.C_CODE');
            $criteria->addSelectColumn($alias . '.ABB');
            $criteria->addSelectColumn($alias . '.AreaCodeInland');
            $criteria->addSelectColumn($alias . '.AreaCodeMarine');
            $criteria->addSelectColumn($alias . '.LatitudeDeg');
            $criteria->addSelectColumn($alias . '.LatitudeMin');
            $criteria->addSelectColumn($alias . '.NorthSouth');
            $criteria->addSelectColumn($alias . '.LongitudeDeg');
            $criteria->addSelectColumn($alias . '.LongitudeMin');
            $criteria->addSelectColumn($alias . '.EastWest');
            $criteria->addSelectColumn($alias . '.Accuracy');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Remark');
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
        $criteria->setPrimaryTableName(GazetteerPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GazetteerPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GazetteerPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GazetteerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Gazetteer
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GazetteerPeer::doSelect($critcopy, $con);
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
        return GazetteerPeer::populateObjects(GazetteerPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GazetteerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GazetteerPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GazetteerPeer::DATABASE_NAME);

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
     * @param Gazetteer $obj A Gazetteer object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getGazetcode();
            } // if key === null
            GazetteerPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Gazetteer object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Gazetteer) {
                $key = (string) $value->getGazetcode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Gazetteer object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GazetteerPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Gazetteer Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GazetteerPeer::$instances[$key])) {
                return GazetteerPeer::$instances[$key];
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
        foreach (GazetteerPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GazetteerPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to gazetteer
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
        $cls = GazetteerPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GazetteerPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GazetteerPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GazetteerPeer::addInstanceToPool($obj, $key);
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
     * @return array (Gazetteer object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GazetteerPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GazetteerPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GazetteerPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GazetteerPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GazetteerPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GazetteerPeer::DATABASE_NAME)->getTable(GazetteerPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGazetteerPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGazetteerPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \GazetteerTableMap());
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
        return GazetteerPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Gazetteer or Criteria object.
     *
     * @param      mixed $values Criteria or Gazetteer object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GazetteerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Gazetteer object
        }

        if ($criteria->containsKey(GazetteerPeer::GAZETCODE) && $criteria->keyContainsValue(GazetteerPeer::GAZETCODE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.GazetteerPeer::GAZETCODE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(GazetteerPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Gazetteer or Criteria object.
     *
     * @param      mixed $values Criteria or Gazetteer object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GazetteerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GazetteerPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GazetteerPeer::GAZETCODE);
            $value = $criteria->remove(GazetteerPeer::GAZETCODE);
            if ($value) {
                $selectCriteria->add(GazetteerPeer::GAZETCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GazetteerPeer::TABLE_NAME);
            }

        } else { // $values is Gazetteer object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GazetteerPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the gazetteer table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GazetteerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GazetteerPeer::TABLE_NAME, $con, GazetteerPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GazetteerPeer::clearInstancePool();
            GazetteerPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Gazetteer or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Gazetteer object or primary key or array of primary keys
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
            $con = Propel::getConnection(GazetteerPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GazetteerPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Gazetteer) { // it's a model object
            // invalidate the cache for this single object
            GazetteerPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GazetteerPeer::DATABASE_NAME);
            $criteria->add(GazetteerPeer::GAZETCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                GazetteerPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GazetteerPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GazetteerPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Gazetteer object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Gazetteer $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GazetteerPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GazetteerPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GazetteerPeer::DATABASE_NAME, GazetteerPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Gazetteer
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = GazetteerPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GazetteerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(GazetteerPeer::DATABASE_NAME);
        $criteria->add(GazetteerPeer::GAZETCODE, $pk);

        $v = GazetteerPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Gazetteer[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GazetteerPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(GazetteerPeer::DATABASE_NAME);
            $criteria->add(GazetteerPeer::GAZETCODE, $pks, Criteria::IN);
            $objs = GazetteerPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseGazetteerPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGazetteerPeer::buildTableMap();

