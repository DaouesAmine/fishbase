<?php


/**
 * Base static class for performing query and update operations on the 'abnorm' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseAbnormPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'abnorm';

    /** the related Propel class for this table */
    const OM_CLASS = 'Abnorm';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AbnormTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 25;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 25;

    /** the column name for the AutoCtr field */
    const AUTOCTR = 'abnorm.AutoCtr';

    /** the column name for the Family field */
    const FAMILY = 'abnorm.Family';

    /** the column name for the Genus field */
    const GENUS = 'abnorm.Genus';

    /** the column name for the Species field */
    const SPECIES = 'abnorm.Species';

    /** the column name for the CommonName field */
    const COMMONNAME = 'abnorm.CommonName';

    /** the column name for the SpecCode field */
    const SPECCODE = 'abnorm.SpecCode';

    /** the column name for the StockCode field */
    const STOCKCODE = 'abnorm.StockCode';

    /** the column name for the LifeStage field */
    const LIFESTAGE = 'abnorm.LifeStage';

    /** the column name for the Location field */
    const LOCATION = 'abnorm.Location';

    /** the column name for the Season field */
    const SEASON = 'abnorm.Season';

    /** the column name for the AbnormalityDisease field */
    const ABNORMALITYDISEASE = 'abnorm.AbnormalityDisease';

    /** the column name for the Prevalence field */
    const PREVALENCE = 'abnorm.Prevalence';

    /** the column name for the Stressor field */
    const STRESSOR = 'abnorm.Stressor';

    /** the column name for the LabField field */
    const LABFIELD = 'abnorm.LabField';

    /** the column name for the Concentration field */
    const CONCENTRATION = 'abnorm.Concentration';

    /** the column name for the ABNORMRefNo field */
    const ABNORMREFNO = 'abnorm.ABNORMRefNo';

    /** the column name for the SecondRefNo field */
    const SECONDREFNO = 'abnorm.SecondRefNo';

    /** the column name for the Notes field */
    const NOTES = 'abnorm.Notes';

    /** the column name for the Entered field */
    const ENTERED = 'abnorm.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'abnorm.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'abnorm.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'abnorm.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'abnorm.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'abnorm.DateChecked';

    /** the column name for the TS field */
    const TS = 'abnorm.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Abnorm objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Abnorm[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. AbnormPeer::$fieldNames[AbnormPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Family', 'Genus', 'Species', 'Commonname', 'Speccode', 'Stockcode', 'Lifestage', 'Location', 'Season', 'Abnormalitydisease', 'Prevalence', 'Stressor', 'Labfield', 'Concentration', 'Abnormrefno', 'Secondrefno', 'Notes', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'family', 'genus', 'species', 'commonname', 'speccode', 'stockcode', 'lifestage', 'location', 'season', 'abnormalitydisease', 'prevalence', 'stressor', 'labfield', 'concentration', 'abnormrefno', 'secondrefno', 'notes', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (AbnormPeer::AUTOCTR, AbnormPeer::FAMILY, AbnormPeer::GENUS, AbnormPeer::SPECIES, AbnormPeer::COMMONNAME, AbnormPeer::SPECCODE, AbnormPeer::STOCKCODE, AbnormPeer::LIFESTAGE, AbnormPeer::LOCATION, AbnormPeer::SEASON, AbnormPeer::ABNORMALITYDISEASE, AbnormPeer::PREVALENCE, AbnormPeer::STRESSOR, AbnormPeer::LABFIELD, AbnormPeer::CONCENTRATION, AbnormPeer::ABNORMREFNO, AbnormPeer::SECONDREFNO, AbnormPeer::NOTES, AbnormPeer::ENTERED, AbnormPeer::DATEENTERED, AbnormPeer::MODIFIED, AbnormPeer::DATEMODIFIED, AbnormPeer::EXPERT, AbnormPeer::DATECHECKED, AbnormPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'FAMILY', 'GENUS', 'SPECIES', 'COMMONNAME', 'SPECCODE', 'STOCKCODE', 'LIFESTAGE', 'LOCATION', 'SEASON', 'ABNORMALITYDISEASE', 'PREVALENCE', 'STRESSOR', 'LABFIELD', 'CONCENTRATION', 'ABNORMREFNO', 'SECONDREFNO', 'NOTES', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr', 'Family', 'Genus', 'Species', 'CommonName', 'SpecCode', 'StockCode', 'LifeStage', 'Location', 'Season', 'AbnormalityDisease', 'Prevalence', 'Stressor', 'LabField', 'Concentration', 'ABNORMRefNo', 'SecondRefNo', 'Notes', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. AbnormPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Family' => 1, 'Genus' => 2, 'Species' => 3, 'Commonname' => 4, 'Speccode' => 5, 'Stockcode' => 6, 'Lifestage' => 7, 'Location' => 8, 'Season' => 9, 'Abnormalitydisease' => 10, 'Prevalence' => 11, 'Stressor' => 12, 'Labfield' => 13, 'Concentration' => 14, 'Abnormrefno' => 15, 'Secondrefno' => 16, 'Notes' => 17, 'Entered' => 18, 'Dateentered' => 19, 'Modified' => 20, 'Datemodified' => 21, 'Expert' => 22, 'Datechecked' => 23, 'Ts' => 24, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'family' => 1, 'genus' => 2, 'species' => 3, 'commonname' => 4, 'speccode' => 5, 'stockcode' => 6, 'lifestage' => 7, 'location' => 8, 'season' => 9, 'abnormalitydisease' => 10, 'prevalence' => 11, 'stressor' => 12, 'labfield' => 13, 'concentration' => 14, 'abnormrefno' => 15, 'secondrefno' => 16, 'notes' => 17, 'entered' => 18, 'dateentered' => 19, 'modified' => 20, 'datemodified' => 21, 'expert' => 22, 'datechecked' => 23, 'ts' => 24, ),
        BasePeer::TYPE_COLNAME => array (AbnormPeer::AUTOCTR => 0, AbnormPeer::FAMILY => 1, AbnormPeer::GENUS => 2, AbnormPeer::SPECIES => 3, AbnormPeer::COMMONNAME => 4, AbnormPeer::SPECCODE => 5, AbnormPeer::STOCKCODE => 6, AbnormPeer::LIFESTAGE => 7, AbnormPeer::LOCATION => 8, AbnormPeer::SEASON => 9, AbnormPeer::ABNORMALITYDISEASE => 10, AbnormPeer::PREVALENCE => 11, AbnormPeer::STRESSOR => 12, AbnormPeer::LABFIELD => 13, AbnormPeer::CONCENTRATION => 14, AbnormPeer::ABNORMREFNO => 15, AbnormPeer::SECONDREFNO => 16, AbnormPeer::NOTES => 17, AbnormPeer::ENTERED => 18, AbnormPeer::DATEENTERED => 19, AbnormPeer::MODIFIED => 20, AbnormPeer::DATEMODIFIED => 21, AbnormPeer::EXPERT => 22, AbnormPeer::DATECHECKED => 23, AbnormPeer::TS => 24, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'FAMILY' => 1, 'GENUS' => 2, 'SPECIES' => 3, 'COMMONNAME' => 4, 'SPECCODE' => 5, 'STOCKCODE' => 6, 'LIFESTAGE' => 7, 'LOCATION' => 8, 'SEASON' => 9, 'ABNORMALITYDISEASE' => 10, 'PREVALENCE' => 11, 'STRESSOR' => 12, 'LABFIELD' => 13, 'CONCENTRATION' => 14, 'ABNORMREFNO' => 15, 'SECONDREFNO' => 16, 'NOTES' => 17, 'ENTERED' => 18, 'DATEENTERED' => 19, 'MODIFIED' => 20, 'DATEMODIFIED' => 21, 'EXPERT' => 22, 'DATECHECKED' => 23, 'TS' => 24, ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr' => 0, 'Family' => 1, 'Genus' => 2, 'Species' => 3, 'CommonName' => 4, 'SpecCode' => 5, 'StockCode' => 6, 'LifeStage' => 7, 'Location' => 8, 'Season' => 9, 'AbnormalityDisease' => 10, 'Prevalence' => 11, 'Stressor' => 12, 'LabField' => 13, 'Concentration' => 14, 'ABNORMRefNo' => 15, 'SecondRefNo' => 16, 'Notes' => 17, 'Entered' => 18, 'DateEntered' => 19, 'Modified' => 20, 'DateModified' => 21, 'Expert' => 22, 'DateChecked' => 23, 'TS' => 24, ),
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
        $toNames = AbnormPeer::getFieldNames($toType);
        $key = isset(AbnormPeer::$fieldKeys[$fromType][$name]) ? AbnormPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(AbnormPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, AbnormPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return AbnormPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. AbnormPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AbnormPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AbnormPeer::AUTOCTR);
            $criteria->addSelectColumn(AbnormPeer::FAMILY);
            $criteria->addSelectColumn(AbnormPeer::GENUS);
            $criteria->addSelectColumn(AbnormPeer::SPECIES);
            $criteria->addSelectColumn(AbnormPeer::COMMONNAME);
            $criteria->addSelectColumn(AbnormPeer::SPECCODE);
            $criteria->addSelectColumn(AbnormPeer::STOCKCODE);
            $criteria->addSelectColumn(AbnormPeer::LIFESTAGE);
            $criteria->addSelectColumn(AbnormPeer::LOCATION);
            $criteria->addSelectColumn(AbnormPeer::SEASON);
            $criteria->addSelectColumn(AbnormPeer::ABNORMALITYDISEASE);
            $criteria->addSelectColumn(AbnormPeer::PREVALENCE);
            $criteria->addSelectColumn(AbnormPeer::STRESSOR);
            $criteria->addSelectColumn(AbnormPeer::LABFIELD);
            $criteria->addSelectColumn(AbnormPeer::CONCENTRATION);
            $criteria->addSelectColumn(AbnormPeer::ABNORMREFNO);
            $criteria->addSelectColumn(AbnormPeer::SECONDREFNO);
            $criteria->addSelectColumn(AbnormPeer::NOTES);
            $criteria->addSelectColumn(AbnormPeer::ENTERED);
            $criteria->addSelectColumn(AbnormPeer::DATEENTERED);
            $criteria->addSelectColumn(AbnormPeer::MODIFIED);
            $criteria->addSelectColumn(AbnormPeer::DATEMODIFIED);
            $criteria->addSelectColumn(AbnormPeer::EXPERT);
            $criteria->addSelectColumn(AbnormPeer::DATECHECKED);
            $criteria->addSelectColumn(AbnormPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.AutoCtr');
            $criteria->addSelectColumn($alias . '.Family');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.CommonName');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.LifeStage');
            $criteria->addSelectColumn($alias . '.Location');
            $criteria->addSelectColumn($alias . '.Season');
            $criteria->addSelectColumn($alias . '.AbnormalityDisease');
            $criteria->addSelectColumn($alias . '.Prevalence');
            $criteria->addSelectColumn($alias . '.Stressor');
            $criteria->addSelectColumn($alias . '.LabField');
            $criteria->addSelectColumn($alias . '.Concentration');
            $criteria->addSelectColumn($alias . '.ABNORMRefNo');
            $criteria->addSelectColumn($alias . '.SecondRefNo');
            $criteria->addSelectColumn($alias . '.Notes');
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
        $criteria->setPrimaryTableName(AbnormPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AbnormPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(AbnormPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AbnormPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Abnorm
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AbnormPeer::doSelect($critcopy, $con);
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
        return AbnormPeer::populateObjects(AbnormPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AbnormPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AbnormPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(AbnormPeer::DATABASE_NAME);

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
     * @param Abnorm $obj A Abnorm object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            AbnormPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Abnorm object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Abnorm) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Abnorm object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(AbnormPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Abnorm Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(AbnormPeer::$instances[$key])) {
                return AbnormPeer::$instances[$key];
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
        foreach (AbnormPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        AbnormPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to abnorm
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
        $cls = AbnormPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AbnormPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AbnormPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AbnormPeer::addInstanceToPool($obj, $key);
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
     * @return array (Abnorm object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AbnormPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AbnormPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AbnormPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AbnormPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AbnormPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(AbnormPeer::DATABASE_NAME)->getTable(AbnormPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseAbnormPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseAbnormPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \AbnormTableMap());
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
        return AbnormPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Abnorm or Criteria object.
     *
     * @param      mixed $values Criteria or Abnorm object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AbnormPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Abnorm object
        }

        if ($criteria->containsKey(AbnormPeer::AUTOCTR) && $criteria->keyContainsValue(AbnormPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.AbnormPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(AbnormPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Abnorm or Criteria object.
     *
     * @param      mixed $values Criteria or Abnorm object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AbnormPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(AbnormPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AbnormPeer::AUTOCTR);
            $value = $criteria->remove(AbnormPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(AbnormPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AbnormPeer::TABLE_NAME);
            }

        } else { // $values is Abnorm object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(AbnormPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the abnorm table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AbnormPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(AbnormPeer::TABLE_NAME, $con, AbnormPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AbnormPeer::clearInstancePool();
            AbnormPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Abnorm or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Abnorm object or primary key or array of primary keys
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
            $con = Propel::getConnection(AbnormPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            AbnormPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Abnorm) { // it's a model object
            // invalidate the cache for this single object
            AbnormPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(AbnormPeer::DATABASE_NAME);
            $criteria->add(AbnormPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                AbnormPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(AbnormPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            AbnormPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Abnorm object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Abnorm $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AbnormPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AbnormPeer::TABLE_NAME);

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

        return BasePeer::doValidate(AbnormPeer::DATABASE_NAME, AbnormPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Abnorm
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = AbnormPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AbnormPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(AbnormPeer::DATABASE_NAME);
        $criteria->add(AbnormPeer::AUTOCTR, $pk);

        $v = AbnormPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Abnorm[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AbnormPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(AbnormPeer::DATABASE_NAME);
            $criteria->add(AbnormPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = AbnormPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseAbnormPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAbnormPeer::buildTableMap();

