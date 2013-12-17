<?php


/**
 * Base static class for performing query and update operations on the 'oxygen' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseOxygenPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'oxygen';

    /** the related Propel class for this table */
    const OM_CLASS = 'Oxygen';

    /** the related TableMap class for this table */
    const TM_CLASS = 'OxygenTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 27;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 27;

    /** the column name for the autoctr field */
    const AUTOCTR = 'oxygen.autoctr';

    /** the column name for the SpecCode field */
    const SPECCODE = 'oxygen.SpecCode';

    /** the column name for the StockCode field */
    const STOCKCODE = 'oxygen.StockCode';

    /** the column name for the OxygenRefNo field */
    const OXYGENREFNO = 'oxygen.OxygenRefNo';

    /** the column name for the TestCode field */
    const TESTCODE = 'oxygen.TestCode';

    /** the column name for the FamilyOxRef field */
    const FAMILYOXREF = 'oxygen.FamilyOxRef';

    /** the column name for the SpeciesOxRef field */
    const SPECIESOXREF = 'oxygen.SpeciesOxRef';

    /** the column name for the Weight field */
    const WEIGHT = 'oxygen.Weight';

    /** the column name for the Number field */
    const NUMBER = 'oxygen.Number';

    /** the column name for the Sex field */
    const SEX = 'oxygen.Sex';

    /** the column name for the Temp field */
    const TEMP = 'oxygen.Temp';

    /** the column name for the Salinity field */
    const SALINITY = 'oxygen.Salinity';

    /** the column name for the Oxygen field */
    const OXYGEN = 'oxygen.Oxygen';

    /** the column name for the Oxygenmgl field */
    const OXYGENMGL = 'oxygen.Oxygenmgl';

    /** the column name for the OxygenCons field */
    const OXYGENCONS = 'oxygen.OxygenCons';

    /** the column name for the MetabolicLevel field */
    const METABOLICLEVEL = 'oxygen.MetabolicLevel';

    /** the column name for the AppliedStress field */
    const APPLIEDSTRESS = 'oxygen.AppliedStress';

    /** the column name for the DataRef field */
    const DATAREF = 'oxygen.DataRef';

    /** the column name for the SwimmingSpeed field */
    const SWIMMINGSPEED = 'oxygen.SwimmingSpeed';

    /** the column name for the Comment field */
    const COMMENT = 'oxygen.Comment';

    /** the column name for the Entered field */
    const ENTERED = 'oxygen.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'oxygen.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'oxygen.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'oxygen.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'oxygen.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'oxygen.DateChecked';

    /** the column name for the TS field */
    const TS = 'oxygen.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Oxygen objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Oxygen[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. OxygenPeer::$fieldNames[OxygenPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Speccode', 'Stockcode', 'Oxygenrefno', 'Testcode', 'Familyoxref', 'Speciesoxref', 'Weight', 'Number', 'Sex', 'Temp', 'Salinity', 'Oxygen', 'Oxygenmgl', 'Oxygencons', 'Metaboliclevel', 'Appliedstress', 'Dataref', 'Swimmingspeed', 'Comment', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'speccode', 'stockcode', 'oxygenrefno', 'testcode', 'familyoxref', 'speciesoxref', 'weight', 'number', 'sex', 'temp', 'salinity', 'oxygen', 'oxygenmgl', 'oxygencons', 'metaboliclevel', 'appliedstress', 'dataref', 'swimmingspeed', 'comment', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (OxygenPeer::AUTOCTR, OxygenPeer::SPECCODE, OxygenPeer::STOCKCODE, OxygenPeer::OXYGENREFNO, OxygenPeer::TESTCODE, OxygenPeer::FAMILYOXREF, OxygenPeer::SPECIESOXREF, OxygenPeer::WEIGHT, OxygenPeer::NUMBER, OxygenPeer::SEX, OxygenPeer::TEMP, OxygenPeer::SALINITY, OxygenPeer::OXYGEN, OxygenPeer::OXYGENMGL, OxygenPeer::OXYGENCONS, OxygenPeer::METABOLICLEVEL, OxygenPeer::APPLIEDSTRESS, OxygenPeer::DATAREF, OxygenPeer::SWIMMINGSPEED, OxygenPeer::COMMENT, OxygenPeer::ENTERED, OxygenPeer::DATEENTERED, OxygenPeer::MODIFIED, OxygenPeer::DATEMODIFIED, OxygenPeer::EXPERT, OxygenPeer::DATECHECKED, OxygenPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'SPECCODE', 'STOCKCODE', 'OXYGENREFNO', 'TESTCODE', 'FAMILYOXREF', 'SPECIESOXREF', 'WEIGHT', 'NUMBER', 'SEX', 'TEMP', 'SALINITY', 'OXYGEN', 'OXYGENMGL', 'OXYGENCONS', 'METABOLICLEVEL', 'APPLIEDSTRESS', 'DATAREF', 'SWIMMINGSPEED', 'COMMENT', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'SpecCode', 'StockCode', 'OxygenRefNo', 'TestCode', 'FamilyOxRef', 'SpeciesOxRef', 'Weight', 'Number', 'Sex', 'Temp', 'Salinity', 'Oxygen', 'Oxygenmgl', 'OxygenCons', 'MetabolicLevel', 'AppliedStress', 'DataRef', 'SwimmingSpeed', 'Comment', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. OxygenPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Stockcode' => 2, 'Oxygenrefno' => 3, 'Testcode' => 4, 'Familyoxref' => 5, 'Speciesoxref' => 6, 'Weight' => 7, 'Number' => 8, 'Sex' => 9, 'Temp' => 10, 'Salinity' => 11, 'Oxygen' => 12, 'Oxygenmgl' => 13, 'Oxygencons' => 14, 'Metaboliclevel' => 15, 'Appliedstress' => 16, 'Dataref' => 17, 'Swimmingspeed' => 18, 'Comment' => 19, 'Entered' => 20, 'Dateentered' => 21, 'Modified' => 22, 'Datemodified' => 23, 'Expert' => 24, 'Datechecked' => 25, 'Ts' => 26, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'speccode' => 1, 'stockcode' => 2, 'oxygenrefno' => 3, 'testcode' => 4, 'familyoxref' => 5, 'speciesoxref' => 6, 'weight' => 7, 'number' => 8, 'sex' => 9, 'temp' => 10, 'salinity' => 11, 'oxygen' => 12, 'oxygenmgl' => 13, 'oxygencons' => 14, 'metaboliclevel' => 15, 'appliedstress' => 16, 'dataref' => 17, 'swimmingspeed' => 18, 'comment' => 19, 'entered' => 20, 'dateentered' => 21, 'modified' => 22, 'datemodified' => 23, 'expert' => 24, 'datechecked' => 25, 'ts' => 26, ),
        BasePeer::TYPE_COLNAME => array (OxygenPeer::AUTOCTR => 0, OxygenPeer::SPECCODE => 1, OxygenPeer::STOCKCODE => 2, OxygenPeer::OXYGENREFNO => 3, OxygenPeer::TESTCODE => 4, OxygenPeer::FAMILYOXREF => 5, OxygenPeer::SPECIESOXREF => 6, OxygenPeer::WEIGHT => 7, OxygenPeer::NUMBER => 8, OxygenPeer::SEX => 9, OxygenPeer::TEMP => 10, OxygenPeer::SALINITY => 11, OxygenPeer::OXYGEN => 12, OxygenPeer::OXYGENMGL => 13, OxygenPeer::OXYGENCONS => 14, OxygenPeer::METABOLICLEVEL => 15, OxygenPeer::APPLIEDSTRESS => 16, OxygenPeer::DATAREF => 17, OxygenPeer::SWIMMINGSPEED => 18, OxygenPeer::COMMENT => 19, OxygenPeer::ENTERED => 20, OxygenPeer::DATEENTERED => 21, OxygenPeer::MODIFIED => 22, OxygenPeer::DATEMODIFIED => 23, OxygenPeer::EXPERT => 24, OxygenPeer::DATECHECKED => 25, OxygenPeer::TS => 26, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'SPECCODE' => 1, 'STOCKCODE' => 2, 'OXYGENREFNO' => 3, 'TESTCODE' => 4, 'FAMILYOXREF' => 5, 'SPECIESOXREF' => 6, 'WEIGHT' => 7, 'NUMBER' => 8, 'SEX' => 9, 'TEMP' => 10, 'SALINITY' => 11, 'OXYGEN' => 12, 'OXYGENMGL' => 13, 'OXYGENCONS' => 14, 'METABOLICLEVEL' => 15, 'APPLIEDSTRESS' => 16, 'DATAREF' => 17, 'SWIMMINGSPEED' => 18, 'COMMENT' => 19, 'ENTERED' => 20, 'DATEENTERED' => 21, 'MODIFIED' => 22, 'DATEMODIFIED' => 23, 'EXPERT' => 24, 'DATECHECKED' => 25, 'TS' => 26, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'SpecCode' => 1, 'StockCode' => 2, 'OxygenRefNo' => 3, 'TestCode' => 4, 'FamilyOxRef' => 5, 'SpeciesOxRef' => 6, 'Weight' => 7, 'Number' => 8, 'Sex' => 9, 'Temp' => 10, 'Salinity' => 11, 'Oxygen' => 12, 'Oxygenmgl' => 13, 'OxygenCons' => 14, 'MetabolicLevel' => 15, 'AppliedStress' => 16, 'DataRef' => 17, 'SwimmingSpeed' => 18, 'Comment' => 19, 'Entered' => 20, 'DateEntered' => 21, 'Modified' => 22, 'DateModified' => 23, 'Expert' => 24, 'DateChecked' => 25, 'TS' => 26, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, )
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
        $toNames = OxygenPeer::getFieldNames($toType);
        $key = isset(OxygenPeer::$fieldKeys[$fromType][$name]) ? OxygenPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(OxygenPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, OxygenPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return OxygenPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. OxygenPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(OxygenPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(OxygenPeer::AUTOCTR);
            $criteria->addSelectColumn(OxygenPeer::SPECCODE);
            $criteria->addSelectColumn(OxygenPeer::STOCKCODE);
            $criteria->addSelectColumn(OxygenPeer::OXYGENREFNO);
            $criteria->addSelectColumn(OxygenPeer::TESTCODE);
            $criteria->addSelectColumn(OxygenPeer::FAMILYOXREF);
            $criteria->addSelectColumn(OxygenPeer::SPECIESOXREF);
            $criteria->addSelectColumn(OxygenPeer::WEIGHT);
            $criteria->addSelectColumn(OxygenPeer::NUMBER);
            $criteria->addSelectColumn(OxygenPeer::SEX);
            $criteria->addSelectColumn(OxygenPeer::TEMP);
            $criteria->addSelectColumn(OxygenPeer::SALINITY);
            $criteria->addSelectColumn(OxygenPeer::OXYGEN);
            $criteria->addSelectColumn(OxygenPeer::OXYGENMGL);
            $criteria->addSelectColumn(OxygenPeer::OXYGENCONS);
            $criteria->addSelectColumn(OxygenPeer::METABOLICLEVEL);
            $criteria->addSelectColumn(OxygenPeer::APPLIEDSTRESS);
            $criteria->addSelectColumn(OxygenPeer::DATAREF);
            $criteria->addSelectColumn(OxygenPeer::SWIMMINGSPEED);
            $criteria->addSelectColumn(OxygenPeer::COMMENT);
            $criteria->addSelectColumn(OxygenPeer::ENTERED);
            $criteria->addSelectColumn(OxygenPeer::DATEENTERED);
            $criteria->addSelectColumn(OxygenPeer::MODIFIED);
            $criteria->addSelectColumn(OxygenPeer::DATEMODIFIED);
            $criteria->addSelectColumn(OxygenPeer::EXPERT);
            $criteria->addSelectColumn(OxygenPeer::DATECHECKED);
            $criteria->addSelectColumn(OxygenPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.OxygenRefNo');
            $criteria->addSelectColumn($alias . '.TestCode');
            $criteria->addSelectColumn($alias . '.FamilyOxRef');
            $criteria->addSelectColumn($alias . '.SpeciesOxRef');
            $criteria->addSelectColumn($alias . '.Weight');
            $criteria->addSelectColumn($alias . '.Number');
            $criteria->addSelectColumn($alias . '.Sex');
            $criteria->addSelectColumn($alias . '.Temp');
            $criteria->addSelectColumn($alias . '.Salinity');
            $criteria->addSelectColumn($alias . '.Oxygen');
            $criteria->addSelectColumn($alias . '.Oxygenmgl');
            $criteria->addSelectColumn($alias . '.OxygenCons');
            $criteria->addSelectColumn($alias . '.MetabolicLevel');
            $criteria->addSelectColumn($alias . '.AppliedStress');
            $criteria->addSelectColumn($alias . '.DataRef');
            $criteria->addSelectColumn($alias . '.SwimmingSpeed');
            $criteria->addSelectColumn($alias . '.Comment');
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
        $criteria->setPrimaryTableName(OxygenPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OxygenPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(OxygenPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(OxygenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Oxygen
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = OxygenPeer::doSelect($critcopy, $con);
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
        return OxygenPeer::populateObjects(OxygenPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(OxygenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OxygenPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(OxygenPeer::DATABASE_NAME);

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
     * @param Oxygen $obj A Oxygen object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            OxygenPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Oxygen object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Oxygen) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Oxygen object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(OxygenPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Oxygen Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(OxygenPeer::$instances[$key])) {
                return OxygenPeer::$instances[$key];
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
        foreach (OxygenPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        OxygenPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to oxygen
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
        $cls = OxygenPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = OxygenPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = OxygenPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OxygenPeer::addInstanceToPool($obj, $key);
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
     * @return array (Oxygen object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = OxygenPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = OxygenPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + OxygenPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OxygenPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            OxygenPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(OxygenPeer::DATABASE_NAME)->getTable(OxygenPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseOxygenPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseOxygenPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \OxygenTableMap());
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
        return OxygenPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Oxygen or Criteria object.
     *
     * @param      mixed $values Criteria or Oxygen object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OxygenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Oxygen object
        }

        if ($criteria->containsKey(OxygenPeer::AUTOCTR) && $criteria->keyContainsValue(OxygenPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.OxygenPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(OxygenPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Oxygen or Criteria object.
     *
     * @param      mixed $values Criteria or Oxygen object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OxygenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(OxygenPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(OxygenPeer::AUTOCTR);
            $value = $criteria->remove(OxygenPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(OxygenPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OxygenPeer::TABLE_NAME);
            }

        } else { // $values is Oxygen object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(OxygenPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the oxygen table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OxygenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(OxygenPeer::TABLE_NAME, $con, OxygenPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OxygenPeer::clearInstancePool();
            OxygenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Oxygen or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Oxygen object or primary key or array of primary keys
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
            $con = Propel::getConnection(OxygenPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            OxygenPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Oxygen) { // it's a model object
            // invalidate the cache for this single object
            OxygenPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OxygenPeer::DATABASE_NAME);
            $criteria->add(OxygenPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                OxygenPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(OxygenPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            OxygenPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Oxygen object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Oxygen $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(OxygenPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(OxygenPeer::TABLE_NAME);

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

        return BasePeer::doValidate(OxygenPeer::DATABASE_NAME, OxygenPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Oxygen
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = OxygenPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(OxygenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(OxygenPeer::DATABASE_NAME);
        $criteria->add(OxygenPeer::AUTOCTR, $pk);

        $v = OxygenPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Oxygen[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OxygenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(OxygenPeer::DATABASE_NAME);
            $criteria->add(OxygenPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = OxygenPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseOxygenPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOxygenPeer::buildTableMap();

