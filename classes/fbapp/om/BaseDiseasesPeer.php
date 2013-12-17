<?php


/**
 * Base static class for performing query and update operations on the 'diseases' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseDiseasesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'diseases';

    /** the related Propel class for this table */
    const OM_CLASS = 'Diseases';

    /** the related TableMap class for this table */
    const TM_CLASS = 'DiseasesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 28;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 28;

    /** the column name for the StockCode field */
    const STOCKCODE = 'diseases.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'diseases.SpecCode';

    /** the column name for the DiseasesRefNo field */
    const DISEASESREFNO = 'diseases.DiseasesRefNo';

    /** the column name for the DisCode field */
    const DISCODE = 'diseases.DisCode';

    /** the column name for the C_Code field */
    const C_CODE = 'diseases.C_Code';

    /** the column name for the Year field */
    const YEAR = 'diseases.Year';

    /** the column name for the Locality field */
    const LOCALITY = 'diseases.Locality';

    /** the column name for the Eggs field */
    const EGGS = 'diseases.Eggs';

    /** the column name for the Larvae field */
    const LARVAE = 'diseases.Larvae';

    /** the column name for the Fry field */
    const FRY = 'diseases.Fry';

    /** the column name for the Juveniles field */
    const JUVENILES = 'diseases.Juveniles';

    /** the column name for the Females field */
    const FEMALES = 'diseases.Females';

    /** the column name for the Males field */
    const MALES = 'diseases.Males';

    /** the column name for the Wild field */
    const WILD = 'diseases.Wild';

    /** the column name for the Culture field */
    const CULTURE = 'diseases.Culture';

    /** the column name for the Prevalence field */
    const PREVALENCE = 'diseases.Prevalence';

    /** the column name for the Intensity field */
    const INTENSITY = 'diseases.Intensity';

    /** the column name for the Mortality field */
    const MORTALITY = 'diseases.Mortality';

    /** the column name for the TypeofCulture field */
    const TYPEOFCULTURE = 'diseases.TypeofCulture';

    /** the column name for the WaterTemp field */
    const WATERTEMP = 'diseases.WaterTemp';

    /** the column name for the Entered field */
    const ENTERED = 'diseases.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'diseases.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'diseases.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'diseases.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'diseases.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'diseases.DateChecked';

    /** the column name for the Remark field */
    const REMARK = 'diseases.Remark';

    /** the column name for the TS field */
    const TS = 'diseases.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Diseases objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Diseases[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. DiseasesPeer::$fieldNames[DiseasesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode', 'Speccode', 'Diseasesrefno', 'Discode', 'CCode', 'Year', 'Locality', 'Eggs', 'Larvae', 'Fry', 'Juveniles', 'Females', 'Males', 'Wild', 'Culture', 'Prevalence', 'Intensity', 'Mortality', 'Typeofculture', 'Watertemp', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Remark', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode', 'speccode', 'diseasesrefno', 'discode', 'cCode', 'year', 'locality', 'eggs', 'larvae', 'fry', 'juveniles', 'females', 'males', 'wild', 'culture', 'prevalence', 'intensity', 'mortality', 'typeofculture', 'watertemp', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'remark', 'ts', ),
        BasePeer::TYPE_COLNAME => array (DiseasesPeer::STOCKCODE, DiseasesPeer::SPECCODE, DiseasesPeer::DISEASESREFNO, DiseasesPeer::DISCODE, DiseasesPeer::C_CODE, DiseasesPeer::YEAR, DiseasesPeer::LOCALITY, DiseasesPeer::EGGS, DiseasesPeer::LARVAE, DiseasesPeer::FRY, DiseasesPeer::JUVENILES, DiseasesPeer::FEMALES, DiseasesPeer::MALES, DiseasesPeer::WILD, DiseasesPeer::CULTURE, DiseasesPeer::PREVALENCE, DiseasesPeer::INTENSITY, DiseasesPeer::MORTALITY, DiseasesPeer::TYPEOFCULTURE, DiseasesPeer::WATERTEMP, DiseasesPeer::ENTERED, DiseasesPeer::DATEENTERED, DiseasesPeer::MODIFIED, DiseasesPeer::DATEMODIFIED, DiseasesPeer::EXPERT, DiseasesPeer::DATECHECKED, DiseasesPeer::REMARK, DiseasesPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE', 'SPECCODE', 'DISEASESREFNO', 'DISCODE', 'C_CODE', 'YEAR', 'LOCALITY', 'EGGS', 'LARVAE', 'FRY', 'JUVENILES', 'FEMALES', 'MALES', 'WILD', 'CULTURE', 'PREVALENCE', 'INTENSITY', 'MORTALITY', 'TYPEOFCULTURE', 'WATERTEMP', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'REMARK', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode', 'SpecCode', 'DiseasesRefNo', 'DisCode', 'C_Code', 'Year', 'Locality', 'Eggs', 'Larvae', 'Fry', 'Juveniles', 'Females', 'Males', 'Wild', 'Culture', 'Prevalence', 'Intensity', 'Mortality', 'TypeofCulture', 'WaterTemp', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Remark', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. DiseasesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode' => 0, 'Speccode' => 1, 'Diseasesrefno' => 2, 'Discode' => 3, 'CCode' => 4, 'Year' => 5, 'Locality' => 6, 'Eggs' => 7, 'Larvae' => 8, 'Fry' => 9, 'Juveniles' => 10, 'Females' => 11, 'Males' => 12, 'Wild' => 13, 'Culture' => 14, 'Prevalence' => 15, 'Intensity' => 16, 'Mortality' => 17, 'Typeofculture' => 18, 'Watertemp' => 19, 'Entered' => 20, 'Dateentered' => 21, 'Modified' => 22, 'Datemodified' => 23, 'Expert' => 24, 'Datechecked' => 25, 'Remark' => 26, 'Ts' => 27, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode' => 0, 'speccode' => 1, 'diseasesrefno' => 2, 'discode' => 3, 'cCode' => 4, 'year' => 5, 'locality' => 6, 'eggs' => 7, 'larvae' => 8, 'fry' => 9, 'juveniles' => 10, 'females' => 11, 'males' => 12, 'wild' => 13, 'culture' => 14, 'prevalence' => 15, 'intensity' => 16, 'mortality' => 17, 'typeofculture' => 18, 'watertemp' => 19, 'entered' => 20, 'dateentered' => 21, 'modified' => 22, 'datemodified' => 23, 'expert' => 24, 'datechecked' => 25, 'remark' => 26, 'ts' => 27, ),
        BasePeer::TYPE_COLNAME => array (DiseasesPeer::STOCKCODE => 0, DiseasesPeer::SPECCODE => 1, DiseasesPeer::DISEASESREFNO => 2, DiseasesPeer::DISCODE => 3, DiseasesPeer::C_CODE => 4, DiseasesPeer::YEAR => 5, DiseasesPeer::LOCALITY => 6, DiseasesPeer::EGGS => 7, DiseasesPeer::LARVAE => 8, DiseasesPeer::FRY => 9, DiseasesPeer::JUVENILES => 10, DiseasesPeer::FEMALES => 11, DiseasesPeer::MALES => 12, DiseasesPeer::WILD => 13, DiseasesPeer::CULTURE => 14, DiseasesPeer::PREVALENCE => 15, DiseasesPeer::INTENSITY => 16, DiseasesPeer::MORTALITY => 17, DiseasesPeer::TYPEOFCULTURE => 18, DiseasesPeer::WATERTEMP => 19, DiseasesPeer::ENTERED => 20, DiseasesPeer::DATEENTERED => 21, DiseasesPeer::MODIFIED => 22, DiseasesPeer::DATEMODIFIED => 23, DiseasesPeer::EXPERT => 24, DiseasesPeer::DATECHECKED => 25, DiseasesPeer::REMARK => 26, DiseasesPeer::TS => 27, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE' => 0, 'SPECCODE' => 1, 'DISEASESREFNO' => 2, 'DISCODE' => 3, 'C_CODE' => 4, 'YEAR' => 5, 'LOCALITY' => 6, 'EGGS' => 7, 'LARVAE' => 8, 'FRY' => 9, 'JUVENILES' => 10, 'FEMALES' => 11, 'MALES' => 12, 'WILD' => 13, 'CULTURE' => 14, 'PREVALENCE' => 15, 'INTENSITY' => 16, 'MORTALITY' => 17, 'TYPEOFCULTURE' => 18, 'WATERTEMP' => 19, 'ENTERED' => 20, 'DATEENTERED' => 21, 'MODIFIED' => 22, 'DATEMODIFIED' => 23, 'EXPERT' => 24, 'DATECHECKED' => 25, 'REMARK' => 26, 'TS' => 27, ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode' => 0, 'SpecCode' => 1, 'DiseasesRefNo' => 2, 'DisCode' => 3, 'C_Code' => 4, 'Year' => 5, 'Locality' => 6, 'Eggs' => 7, 'Larvae' => 8, 'Fry' => 9, 'Juveniles' => 10, 'Females' => 11, 'Males' => 12, 'Wild' => 13, 'Culture' => 14, 'Prevalence' => 15, 'Intensity' => 16, 'Mortality' => 17, 'TypeofCulture' => 18, 'WaterTemp' => 19, 'Entered' => 20, 'DateEntered' => 21, 'Modified' => 22, 'DateModified' => 23, 'Expert' => 24, 'DateChecked' => 25, 'Remark' => 26, 'TS' => 27, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, )
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
        $toNames = DiseasesPeer::getFieldNames($toType);
        $key = isset(DiseasesPeer::$fieldKeys[$fromType][$name]) ? DiseasesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(DiseasesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, DiseasesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return DiseasesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. DiseasesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(DiseasesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(DiseasesPeer::STOCKCODE);
            $criteria->addSelectColumn(DiseasesPeer::SPECCODE);
            $criteria->addSelectColumn(DiseasesPeer::DISEASESREFNO);
            $criteria->addSelectColumn(DiseasesPeer::DISCODE);
            $criteria->addSelectColumn(DiseasesPeer::C_CODE);
            $criteria->addSelectColumn(DiseasesPeer::YEAR);
            $criteria->addSelectColumn(DiseasesPeer::LOCALITY);
            $criteria->addSelectColumn(DiseasesPeer::EGGS);
            $criteria->addSelectColumn(DiseasesPeer::LARVAE);
            $criteria->addSelectColumn(DiseasesPeer::FRY);
            $criteria->addSelectColumn(DiseasesPeer::JUVENILES);
            $criteria->addSelectColumn(DiseasesPeer::FEMALES);
            $criteria->addSelectColumn(DiseasesPeer::MALES);
            $criteria->addSelectColumn(DiseasesPeer::WILD);
            $criteria->addSelectColumn(DiseasesPeer::CULTURE);
            $criteria->addSelectColumn(DiseasesPeer::PREVALENCE);
            $criteria->addSelectColumn(DiseasesPeer::INTENSITY);
            $criteria->addSelectColumn(DiseasesPeer::MORTALITY);
            $criteria->addSelectColumn(DiseasesPeer::TYPEOFCULTURE);
            $criteria->addSelectColumn(DiseasesPeer::WATERTEMP);
            $criteria->addSelectColumn(DiseasesPeer::ENTERED);
            $criteria->addSelectColumn(DiseasesPeer::DATEENTERED);
            $criteria->addSelectColumn(DiseasesPeer::MODIFIED);
            $criteria->addSelectColumn(DiseasesPeer::DATEMODIFIED);
            $criteria->addSelectColumn(DiseasesPeer::EXPERT);
            $criteria->addSelectColumn(DiseasesPeer::DATECHECKED);
            $criteria->addSelectColumn(DiseasesPeer::REMARK);
            $criteria->addSelectColumn(DiseasesPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.DiseasesRefNo');
            $criteria->addSelectColumn($alias . '.DisCode');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Year');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.Eggs');
            $criteria->addSelectColumn($alias . '.Larvae');
            $criteria->addSelectColumn($alias . '.Fry');
            $criteria->addSelectColumn($alias . '.Juveniles');
            $criteria->addSelectColumn($alias . '.Females');
            $criteria->addSelectColumn($alias . '.Males');
            $criteria->addSelectColumn($alias . '.Wild');
            $criteria->addSelectColumn($alias . '.Culture');
            $criteria->addSelectColumn($alias . '.Prevalence');
            $criteria->addSelectColumn($alias . '.Intensity');
            $criteria->addSelectColumn($alias . '.Mortality');
            $criteria->addSelectColumn($alias . '.TypeofCulture');
            $criteria->addSelectColumn($alias . '.WaterTemp');
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
        $criteria->setPrimaryTableName(DiseasesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DiseasesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(DiseasesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(DiseasesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Diseases
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = DiseasesPeer::doSelect($critcopy, $con);
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
        return DiseasesPeer::populateObjects(DiseasesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(DiseasesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DiseasesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(DiseasesPeer::DATABASE_NAME);

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
     * @param Diseases $obj A Diseases object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getDiseasesrefno(), (string) $obj->getDiscode(), (string) $obj->getLocality()));
            } // if key === null
            DiseasesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Diseases object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Diseases) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getDiseasesrefno(), (string) $value->getDiscode(), (string) $value->getLocality()));
            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Diseases object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(DiseasesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Diseases Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(DiseasesPeer::$instances[$key])) {
                return DiseasesPeer::$instances[$key];
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
        foreach (DiseasesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        DiseasesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to diseases
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
        if ($row[$startcol] === null && $row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 6] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 6]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 2], (int) $row[$startcol + 3], (string) $row[$startcol + 6]);
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
        $cls = DiseasesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = DiseasesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = DiseasesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DiseasesPeer::addInstanceToPool($obj, $key);
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
     * @return array (Diseases object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = DiseasesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = DiseasesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + DiseasesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DiseasesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            DiseasesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(DiseasesPeer::DATABASE_NAME)->getTable(DiseasesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseDiseasesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseDiseasesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \DiseasesTableMap());
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
        return DiseasesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Diseases or Criteria object.
     *
     * @param      mixed $values Criteria or Diseases object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DiseasesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Diseases object
        }


        // Set the correct dbName
        $criteria->setDbName(DiseasesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Diseases or Criteria object.
     *
     * @param      mixed $values Criteria or Diseases object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DiseasesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(DiseasesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(DiseasesPeer::STOCKCODE);
            $value = $criteria->remove(DiseasesPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(DiseasesPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DiseasesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(DiseasesPeer::DISEASESREFNO);
            $value = $criteria->remove(DiseasesPeer::DISEASESREFNO);
            if ($value) {
                $selectCriteria->add(DiseasesPeer::DISEASESREFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DiseasesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(DiseasesPeer::DISCODE);
            $value = $criteria->remove(DiseasesPeer::DISCODE);
            if ($value) {
                $selectCriteria->add(DiseasesPeer::DISCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DiseasesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(DiseasesPeer::LOCALITY);
            $value = $criteria->remove(DiseasesPeer::LOCALITY);
            if ($value) {
                $selectCriteria->add(DiseasesPeer::LOCALITY, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DiseasesPeer::TABLE_NAME);
            }

        } else { // $values is Diseases object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(DiseasesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the diseases table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DiseasesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(DiseasesPeer::TABLE_NAME, $con, DiseasesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DiseasesPeer::clearInstancePool();
            DiseasesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Diseases or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Diseases object or primary key or array of primary keys
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
            $con = Propel::getConnection(DiseasesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            DiseasesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Diseases) { // it's a model object
            // invalidate the cache for this single object
            DiseasesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DiseasesPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(DiseasesPeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(DiseasesPeer::DISEASESREFNO, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(DiseasesPeer::DISCODE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(DiseasesPeer::LOCALITY, $value[3]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                DiseasesPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(DiseasesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            DiseasesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Diseases object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Diseases $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(DiseasesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(DiseasesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(DiseasesPeer::DATABASE_NAME, DiseasesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stockcode
     * @param   int $diseasesrefno
     * @param   int $discode
     * @param   string $locality
     * @param      PropelPDO $con
     * @return Diseases
     */
    public static function retrieveByPK($stockcode, $diseasesrefno, $discode, $locality, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $diseasesrefno, (string) $discode, (string) $locality));
         if (null !== ($obj = DiseasesPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(DiseasesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(DiseasesPeer::DATABASE_NAME);
        $criteria->add(DiseasesPeer::STOCKCODE, $stockcode);
        $criteria->add(DiseasesPeer::DISEASESREFNO, $diseasesrefno);
        $criteria->add(DiseasesPeer::DISCODE, $discode);
        $criteria->add(DiseasesPeer::LOCALITY, $locality);
        $v = DiseasesPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseDiseasesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDiseasesPeer::buildTableMap();

