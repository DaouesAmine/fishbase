<?php


/**
 * Base static class for performing query and update operations on the 'larvdyn' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseLarvdynPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'larvdyn';

    /** the related Propel class for this table */
    const OM_CLASS = 'Larvdyn';

    /** the related TableMap class for this table */
    const TM_CLASS = 'LarvdynTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 24;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 24;

    /** the column name for the autoctr field */
    const AUTOCTR = 'larvdyn.autoctr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'larvdyn.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'larvdyn.SpecCode';

    /** the column name for the Genus field */
    const GENUS = 'larvdyn.Genus';

    /** the column name for the Species field */
    const SPECIES = 'larvdyn.Species';

    /** the column name for the LarvDynRefNo field */
    const LARVDYNREFNO = 'larvdyn.LarvDynRefNo';

    /** the column name for the Ecosystem field */
    const ECOSYSTEM = 'larvdyn.Ecosystem';

    /** the column name for the Temperature field */
    const TEMPERATURE = 'larvdyn.Temperature';

    /** the column name for the Duration field */
    const DURATION = 'larvdyn.Duration';

    /** the column name for the WHatch field */
    const WHATCH = 'larvdyn.WHatch';

    /** the column name for the WMeta field */
    const WMETA = 'larvdyn.WMeta';

    /** the column name for the Growth field */
    const GROWTH = 'larvdyn.Growth';

    /** the column name for the Mortality field */
    const MORTALITY = 'larvdyn.Mortality';

    /** the column name for the OxygenCons field */
    const OXYGENCONS = 'larvdyn.OxygenCons';

    /** the column name for the Ingestion field */
    const INGESTION = 'larvdyn.Ingestion';

    /** the column name for the Remark field */
    const REMARK = 'larvdyn.Remark';

    /** the column name for the Refs field */
    const REFS = 'larvdyn.Refs';

    /** the column name for the Entered field */
    const ENTERED = 'larvdyn.Entered';

    /** the column name for the Dateentered field */
    const DATEENTERED = 'larvdyn.Dateentered';

    /** the column name for the Modified field */
    const MODIFIED = 'larvdyn.Modified';

    /** the column name for the Datemodified field */
    const DATEMODIFIED = 'larvdyn.Datemodified';

    /** the column name for the Expert field */
    const EXPERT = 'larvdyn.Expert';

    /** the column name for the Datechecked field */
    const DATECHECKED = 'larvdyn.Datechecked';

    /** the column name for the TS field */
    const TS = 'larvdyn.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Larvdyn objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Larvdyn[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. LarvdynPeer::$fieldNames[LarvdynPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Genus', 'Species', 'Larvdynrefno', 'Ecosystem', 'Temperature', 'Duration', 'Whatch', 'Wmeta', 'Growth', 'Mortality', 'Oxygencons', 'Ingestion', 'Remark', 'Refs', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'genus', 'species', 'larvdynrefno', 'ecosystem', 'temperature', 'duration', 'whatch', 'wmeta', 'growth', 'mortality', 'oxygencons', 'ingestion', 'remark', 'refs', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (LarvdynPeer::AUTOCTR, LarvdynPeer::STOCKCODE, LarvdynPeer::SPECCODE, LarvdynPeer::GENUS, LarvdynPeer::SPECIES, LarvdynPeer::LARVDYNREFNO, LarvdynPeer::ECOSYSTEM, LarvdynPeer::TEMPERATURE, LarvdynPeer::DURATION, LarvdynPeer::WHATCH, LarvdynPeer::WMETA, LarvdynPeer::GROWTH, LarvdynPeer::MORTALITY, LarvdynPeer::OXYGENCONS, LarvdynPeer::INGESTION, LarvdynPeer::REMARK, LarvdynPeer::REFS, LarvdynPeer::ENTERED, LarvdynPeer::DATEENTERED, LarvdynPeer::MODIFIED, LarvdynPeer::DATEMODIFIED, LarvdynPeer::EXPERT, LarvdynPeer::DATECHECKED, LarvdynPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'GENUS', 'SPECIES', 'LARVDYNREFNO', 'ECOSYSTEM', 'TEMPERATURE', 'DURATION', 'WHATCH', 'WMETA', 'GROWTH', 'MORTALITY', 'OXYGENCONS', 'INGESTION', 'REMARK', 'REFS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'StockCode', 'SpecCode', 'Genus', 'Species', 'LarvDynRefNo', 'Ecosystem', 'Temperature', 'Duration', 'WHatch', 'WMeta', 'Growth', 'Mortality', 'OxygenCons', 'Ingestion', 'Remark', 'Refs', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. LarvdynPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Genus' => 3, 'Species' => 4, 'Larvdynrefno' => 5, 'Ecosystem' => 6, 'Temperature' => 7, 'Duration' => 8, 'Whatch' => 9, 'Wmeta' => 10, 'Growth' => 11, 'Mortality' => 12, 'Oxygencons' => 13, 'Ingestion' => 14, 'Remark' => 15, 'Refs' => 16, 'Entered' => 17, 'Dateentered' => 18, 'Modified' => 19, 'Datemodified' => 20, 'Expert' => 21, 'Datechecked' => 22, 'Ts' => 23, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'genus' => 3, 'species' => 4, 'larvdynrefno' => 5, 'ecosystem' => 6, 'temperature' => 7, 'duration' => 8, 'whatch' => 9, 'wmeta' => 10, 'growth' => 11, 'mortality' => 12, 'oxygencons' => 13, 'ingestion' => 14, 'remark' => 15, 'refs' => 16, 'entered' => 17, 'dateentered' => 18, 'modified' => 19, 'datemodified' => 20, 'expert' => 21, 'datechecked' => 22, 'ts' => 23, ),
        BasePeer::TYPE_COLNAME => array (LarvdynPeer::AUTOCTR => 0, LarvdynPeer::STOCKCODE => 1, LarvdynPeer::SPECCODE => 2, LarvdynPeer::GENUS => 3, LarvdynPeer::SPECIES => 4, LarvdynPeer::LARVDYNREFNO => 5, LarvdynPeer::ECOSYSTEM => 6, LarvdynPeer::TEMPERATURE => 7, LarvdynPeer::DURATION => 8, LarvdynPeer::WHATCH => 9, LarvdynPeer::WMETA => 10, LarvdynPeer::GROWTH => 11, LarvdynPeer::MORTALITY => 12, LarvdynPeer::OXYGENCONS => 13, LarvdynPeer::INGESTION => 14, LarvdynPeer::REMARK => 15, LarvdynPeer::REFS => 16, LarvdynPeer::ENTERED => 17, LarvdynPeer::DATEENTERED => 18, LarvdynPeer::MODIFIED => 19, LarvdynPeer::DATEMODIFIED => 20, LarvdynPeer::EXPERT => 21, LarvdynPeer::DATECHECKED => 22, LarvdynPeer::TS => 23, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'GENUS' => 3, 'SPECIES' => 4, 'LARVDYNREFNO' => 5, 'ECOSYSTEM' => 6, 'TEMPERATURE' => 7, 'DURATION' => 8, 'WHATCH' => 9, 'WMETA' => 10, 'GROWTH' => 11, 'MORTALITY' => 12, 'OXYGENCONS' => 13, 'INGESTION' => 14, 'REMARK' => 15, 'REFS' => 16, 'ENTERED' => 17, 'DATEENTERED' => 18, 'MODIFIED' => 19, 'DATEMODIFIED' => 20, 'EXPERT' => 21, 'DATECHECKED' => 22, 'TS' => 23, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'Genus' => 3, 'Species' => 4, 'LarvDynRefNo' => 5, 'Ecosystem' => 6, 'Temperature' => 7, 'Duration' => 8, 'WHatch' => 9, 'WMeta' => 10, 'Growth' => 11, 'Mortality' => 12, 'OxygenCons' => 13, 'Ingestion' => 14, 'Remark' => 15, 'Refs' => 16, 'Entered' => 17, 'Dateentered' => 18, 'Modified' => 19, 'Datemodified' => 20, 'Expert' => 21, 'Datechecked' => 22, 'TS' => 23, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
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
        $toNames = LarvdynPeer::getFieldNames($toType);
        $key = isset(LarvdynPeer::$fieldKeys[$fromType][$name]) ? LarvdynPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(LarvdynPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, LarvdynPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return LarvdynPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. LarvdynPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(LarvdynPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(LarvdynPeer::AUTOCTR);
            $criteria->addSelectColumn(LarvdynPeer::STOCKCODE);
            $criteria->addSelectColumn(LarvdynPeer::SPECCODE);
            $criteria->addSelectColumn(LarvdynPeer::GENUS);
            $criteria->addSelectColumn(LarvdynPeer::SPECIES);
            $criteria->addSelectColumn(LarvdynPeer::LARVDYNREFNO);
            $criteria->addSelectColumn(LarvdynPeer::ECOSYSTEM);
            $criteria->addSelectColumn(LarvdynPeer::TEMPERATURE);
            $criteria->addSelectColumn(LarvdynPeer::DURATION);
            $criteria->addSelectColumn(LarvdynPeer::WHATCH);
            $criteria->addSelectColumn(LarvdynPeer::WMETA);
            $criteria->addSelectColumn(LarvdynPeer::GROWTH);
            $criteria->addSelectColumn(LarvdynPeer::MORTALITY);
            $criteria->addSelectColumn(LarvdynPeer::OXYGENCONS);
            $criteria->addSelectColumn(LarvdynPeer::INGESTION);
            $criteria->addSelectColumn(LarvdynPeer::REMARK);
            $criteria->addSelectColumn(LarvdynPeer::REFS);
            $criteria->addSelectColumn(LarvdynPeer::ENTERED);
            $criteria->addSelectColumn(LarvdynPeer::DATEENTERED);
            $criteria->addSelectColumn(LarvdynPeer::MODIFIED);
            $criteria->addSelectColumn(LarvdynPeer::DATEMODIFIED);
            $criteria->addSelectColumn(LarvdynPeer::EXPERT);
            $criteria->addSelectColumn(LarvdynPeer::DATECHECKED);
            $criteria->addSelectColumn(LarvdynPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.LarvDynRefNo');
            $criteria->addSelectColumn($alias . '.Ecosystem');
            $criteria->addSelectColumn($alias . '.Temperature');
            $criteria->addSelectColumn($alias . '.Duration');
            $criteria->addSelectColumn($alias . '.WHatch');
            $criteria->addSelectColumn($alias . '.WMeta');
            $criteria->addSelectColumn($alias . '.Growth');
            $criteria->addSelectColumn($alias . '.Mortality');
            $criteria->addSelectColumn($alias . '.OxygenCons');
            $criteria->addSelectColumn($alias . '.Ingestion');
            $criteria->addSelectColumn($alias . '.Remark');
            $criteria->addSelectColumn($alias . '.Refs');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.Dateentered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.Datemodified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.Datechecked');
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
        $criteria->setPrimaryTableName(LarvdynPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LarvdynPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(LarvdynPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(LarvdynPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Larvdyn
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = LarvdynPeer::doSelect($critcopy, $con);
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
        return LarvdynPeer::populateObjects(LarvdynPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(LarvdynPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            LarvdynPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(LarvdynPeer::DATABASE_NAME);

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
     * @param Larvdyn $obj A Larvdyn object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            LarvdynPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Larvdyn object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Larvdyn) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Larvdyn object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(LarvdynPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Larvdyn Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(LarvdynPeer::$instances[$key])) {
                return LarvdynPeer::$instances[$key];
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
        foreach (LarvdynPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        LarvdynPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to larvdyn
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
        $cls = LarvdynPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = LarvdynPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = LarvdynPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                LarvdynPeer::addInstanceToPool($obj, $key);
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
     * @return array (Larvdyn object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = LarvdynPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = LarvdynPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + LarvdynPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = LarvdynPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            LarvdynPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(LarvdynPeer::DATABASE_NAME)->getTable(LarvdynPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseLarvdynPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseLarvdynPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \LarvdynTableMap());
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
        return LarvdynPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Larvdyn or Criteria object.
     *
     * @param      mixed $values Criteria or Larvdyn object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LarvdynPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Larvdyn object
        }

        if ($criteria->containsKey(LarvdynPeer::AUTOCTR) && $criteria->keyContainsValue(LarvdynPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.LarvdynPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(LarvdynPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Larvdyn or Criteria object.
     *
     * @param      mixed $values Criteria or Larvdyn object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LarvdynPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(LarvdynPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(LarvdynPeer::AUTOCTR);
            $value = $criteria->remove(LarvdynPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(LarvdynPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(LarvdynPeer::TABLE_NAME);
            }

        } else { // $values is Larvdyn object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(LarvdynPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the larvdyn table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LarvdynPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(LarvdynPeer::TABLE_NAME, $con, LarvdynPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            LarvdynPeer::clearInstancePool();
            LarvdynPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Larvdyn or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Larvdyn object or primary key or array of primary keys
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
            $con = Propel::getConnection(LarvdynPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            LarvdynPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Larvdyn) { // it's a model object
            // invalidate the cache for this single object
            LarvdynPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(LarvdynPeer::DATABASE_NAME);
            $criteria->add(LarvdynPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                LarvdynPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(LarvdynPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            LarvdynPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Larvdyn object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Larvdyn $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(LarvdynPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(LarvdynPeer::TABLE_NAME);

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

        return BasePeer::doValidate(LarvdynPeer::DATABASE_NAME, LarvdynPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Larvdyn
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = LarvdynPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(LarvdynPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(LarvdynPeer::DATABASE_NAME);
        $criteria->add(LarvdynPeer::AUTOCTR, $pk);

        $v = LarvdynPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Larvdyn[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LarvdynPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(LarvdynPeer::DATABASE_NAME);
            $criteria->add(LarvdynPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = LarvdynPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseLarvdynPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseLarvdynPeer::buildTableMap();

