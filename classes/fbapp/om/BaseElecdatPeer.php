<?php


/**
 * Base static class for performing query and update operations on the 'elecdat' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseElecdatPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'elecdat';

    /** the related Propel class for this table */
    const OM_CLASS = 'Elecdat';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ElecdatTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the EleCode field */
    const ELECODE = 'elecdat.EleCode';

    /** the column name for the StudCode field */
    const STUDCODE = 'elecdat.StudCode';

    /** the column name for the StockCode field */
    const STOCKCODE = 'elecdat.StockCode';

    /** the column name for the MethodUsed field */
    const METHODUSED = 'elecdat.MethodUsed';

    /** the column name for the BufferSystem field */
    const BUFFERSYSTEM = 'elecdat.BufferSystem';

    /** the column name for the pH field */
    const PH = 'elecdat.pH';

    /** the column name for the Tissue field */
    const TISSUE = 'elecdat.Tissue';

    /** the column name for the Samples field */
    const SAMPLES = 'elecdat.Samples';

    /** the column name for the Enzyme field */
    const ENZYME = 'elecdat.Enzyme';

    /** the column name for the Locus field */
    const LOCUS = 'elecdat.Locus';

    /** the column name for the Entered field */
    const ENTERED = 'elecdat.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'elecdat.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'elecdat.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'elecdat.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'elecdat.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'elecdat.DateChecked';

    /** the column name for the Comment field */
    const COMMENT = 'elecdat.Comment';

    /** the column name for the ExpHeterozygosity field */
    const EXPHETEROZYGOSITY = 'elecdat.ExpHeterozygosity';

    /** the column name for the SpecCode field */
    const SPECCODE = 'elecdat.SpecCode';

    /** the column name for the TS field */
    const TS = 'elecdat.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Elecdat objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Elecdat[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ElecdatPeer::$fieldNames[ElecdatPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Elecode', 'Studcode', 'Stockcode', 'Methodused', 'Buffersystem', 'Ph', 'Tissue', 'Samples', 'Enzyme', 'Locus', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Comment', 'Expheterozygosity', 'Speccode', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('elecode', 'studcode', 'stockcode', 'methodused', 'buffersystem', 'ph', 'tissue', 'samples', 'enzyme', 'locus', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'comment', 'expheterozygosity', 'speccode', 'ts', ),
        BasePeer::TYPE_COLNAME => array (ElecdatPeer::ELECODE, ElecdatPeer::STUDCODE, ElecdatPeer::STOCKCODE, ElecdatPeer::METHODUSED, ElecdatPeer::BUFFERSYSTEM, ElecdatPeer::PH, ElecdatPeer::TISSUE, ElecdatPeer::SAMPLES, ElecdatPeer::ENZYME, ElecdatPeer::LOCUS, ElecdatPeer::ENTERED, ElecdatPeer::DATEENTERED, ElecdatPeer::MODIFIED, ElecdatPeer::DATEMODIFIED, ElecdatPeer::EXPERT, ElecdatPeer::DATECHECKED, ElecdatPeer::COMMENT, ElecdatPeer::EXPHETEROZYGOSITY, ElecdatPeer::SPECCODE, ElecdatPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ELECODE', 'STUDCODE', 'STOCKCODE', 'METHODUSED', 'BUFFERSYSTEM', 'PH', 'TISSUE', 'SAMPLES', 'ENZYME', 'LOCUS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'COMMENT', 'EXPHETEROZYGOSITY', 'SPECCODE', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('EleCode', 'StudCode', 'StockCode', 'MethodUsed', 'BufferSystem', 'pH', 'Tissue', 'Samples', 'Enzyme', 'Locus', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Comment', 'ExpHeterozygosity', 'SpecCode', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ElecdatPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Elecode' => 0, 'Studcode' => 1, 'Stockcode' => 2, 'Methodused' => 3, 'Buffersystem' => 4, 'Ph' => 5, 'Tissue' => 6, 'Samples' => 7, 'Enzyme' => 8, 'Locus' => 9, 'Entered' => 10, 'Dateentered' => 11, 'Modified' => 12, 'Datemodified' => 13, 'Expert' => 14, 'Datechecked' => 15, 'Comment' => 16, 'Expheterozygosity' => 17, 'Speccode' => 18, 'Ts' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('elecode' => 0, 'studcode' => 1, 'stockcode' => 2, 'methodused' => 3, 'buffersystem' => 4, 'ph' => 5, 'tissue' => 6, 'samples' => 7, 'enzyme' => 8, 'locus' => 9, 'entered' => 10, 'dateentered' => 11, 'modified' => 12, 'datemodified' => 13, 'expert' => 14, 'datechecked' => 15, 'comment' => 16, 'expheterozygosity' => 17, 'speccode' => 18, 'ts' => 19, ),
        BasePeer::TYPE_COLNAME => array (ElecdatPeer::ELECODE => 0, ElecdatPeer::STUDCODE => 1, ElecdatPeer::STOCKCODE => 2, ElecdatPeer::METHODUSED => 3, ElecdatPeer::BUFFERSYSTEM => 4, ElecdatPeer::PH => 5, ElecdatPeer::TISSUE => 6, ElecdatPeer::SAMPLES => 7, ElecdatPeer::ENZYME => 8, ElecdatPeer::LOCUS => 9, ElecdatPeer::ENTERED => 10, ElecdatPeer::DATEENTERED => 11, ElecdatPeer::MODIFIED => 12, ElecdatPeer::DATEMODIFIED => 13, ElecdatPeer::EXPERT => 14, ElecdatPeer::DATECHECKED => 15, ElecdatPeer::COMMENT => 16, ElecdatPeer::EXPHETEROZYGOSITY => 17, ElecdatPeer::SPECCODE => 18, ElecdatPeer::TS => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ELECODE' => 0, 'STUDCODE' => 1, 'STOCKCODE' => 2, 'METHODUSED' => 3, 'BUFFERSYSTEM' => 4, 'PH' => 5, 'TISSUE' => 6, 'SAMPLES' => 7, 'ENZYME' => 8, 'LOCUS' => 9, 'ENTERED' => 10, 'DATEENTERED' => 11, 'MODIFIED' => 12, 'DATEMODIFIED' => 13, 'EXPERT' => 14, 'DATECHECKED' => 15, 'COMMENT' => 16, 'EXPHETEROZYGOSITY' => 17, 'SPECCODE' => 18, 'TS' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('EleCode' => 0, 'StudCode' => 1, 'StockCode' => 2, 'MethodUsed' => 3, 'BufferSystem' => 4, 'pH' => 5, 'Tissue' => 6, 'Samples' => 7, 'Enzyme' => 8, 'Locus' => 9, 'Entered' => 10, 'DateEntered' => 11, 'Modified' => 12, 'DateModified' => 13, 'Expert' => 14, 'DateChecked' => 15, 'Comment' => 16, 'ExpHeterozygosity' => 17, 'SpecCode' => 18, 'TS' => 19, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
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
        $toNames = ElecdatPeer::getFieldNames($toType);
        $key = isset(ElecdatPeer::$fieldKeys[$fromType][$name]) ? ElecdatPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ElecdatPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ElecdatPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ElecdatPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ElecdatPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ElecdatPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ElecdatPeer::ELECODE);
            $criteria->addSelectColumn(ElecdatPeer::STUDCODE);
            $criteria->addSelectColumn(ElecdatPeer::STOCKCODE);
            $criteria->addSelectColumn(ElecdatPeer::METHODUSED);
            $criteria->addSelectColumn(ElecdatPeer::BUFFERSYSTEM);
            $criteria->addSelectColumn(ElecdatPeer::PH);
            $criteria->addSelectColumn(ElecdatPeer::TISSUE);
            $criteria->addSelectColumn(ElecdatPeer::SAMPLES);
            $criteria->addSelectColumn(ElecdatPeer::ENZYME);
            $criteria->addSelectColumn(ElecdatPeer::LOCUS);
            $criteria->addSelectColumn(ElecdatPeer::ENTERED);
            $criteria->addSelectColumn(ElecdatPeer::DATEENTERED);
            $criteria->addSelectColumn(ElecdatPeer::MODIFIED);
            $criteria->addSelectColumn(ElecdatPeer::DATEMODIFIED);
            $criteria->addSelectColumn(ElecdatPeer::EXPERT);
            $criteria->addSelectColumn(ElecdatPeer::DATECHECKED);
            $criteria->addSelectColumn(ElecdatPeer::COMMENT);
            $criteria->addSelectColumn(ElecdatPeer::EXPHETEROZYGOSITY);
            $criteria->addSelectColumn(ElecdatPeer::SPECCODE);
            $criteria->addSelectColumn(ElecdatPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.EleCode');
            $criteria->addSelectColumn($alias . '.StudCode');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.MethodUsed');
            $criteria->addSelectColumn($alias . '.BufferSystem');
            $criteria->addSelectColumn($alias . '.pH');
            $criteria->addSelectColumn($alias . '.Tissue');
            $criteria->addSelectColumn($alias . '.Samples');
            $criteria->addSelectColumn($alias . '.Enzyme');
            $criteria->addSelectColumn($alias . '.Locus');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.ExpHeterozygosity');
            $criteria->addSelectColumn($alias . '.SpecCode');
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
        $criteria->setPrimaryTableName(ElecdatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ElecdatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ElecdatPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ElecdatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Elecdat
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ElecdatPeer::doSelect($critcopy, $con);
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
        return ElecdatPeer::populateObjects(ElecdatPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ElecdatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ElecdatPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ElecdatPeer::DATABASE_NAME);

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
     * @param Elecdat $obj A Elecdat object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStudcode(), (string) $obj->getStockcode(), (string) $obj->getBuffersystem(), (string) $obj->getTissue(), (string) $obj->getSamples(), (string) $obj->getEnzyme(), (string) $obj->getLocus()));
            } // if key === null
            ElecdatPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Elecdat object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Elecdat) {
                $key = serialize(array((string) $value->getStudcode(), (string) $value->getStockcode(), (string) $value->getBuffersystem(), (string) $value->getTissue(), (string) $value->getSamples(), (string) $value->getEnzyme(), (string) $value->getLocus()));
            } elseif (is_array($value) && count($value) === 7) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4], (string) $value[5], (string) $value[6]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Elecdat object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ElecdatPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Elecdat Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ElecdatPeer::$instances[$key])) {
                return ElecdatPeer::$instances[$key];
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
        foreach (ElecdatPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ElecdatPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to elecdat
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
        if ($row[$startcol + 1] === null && $row[$startcol + 2] === null && $row[$startcol + 4] === null && $row[$startcol + 6] === null && $row[$startcol + 7] === null && $row[$startcol + 8] === null && $row[$startcol + 9] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 4], (string) $row[$startcol + 6], (string) $row[$startcol + 7], (string) $row[$startcol + 8], (string) $row[$startcol + 9]));
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

        return array((int) $row[$startcol + 1], (int) $row[$startcol + 2], (string) $row[$startcol + 4], (string) $row[$startcol + 6], (int) $row[$startcol + 7], (string) $row[$startcol + 8], (string) $row[$startcol + 9]);
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
        $cls = ElecdatPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ElecdatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ElecdatPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ElecdatPeer::addInstanceToPool($obj, $key);
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
     * @return array (Elecdat object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ElecdatPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ElecdatPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ElecdatPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ElecdatPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ElecdatPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(ElecdatPeer::DATABASE_NAME)->getTable(ElecdatPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseElecdatPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseElecdatPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ElecdatTableMap());
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
        return ElecdatPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Elecdat or Criteria object.
     *
     * @param      mixed $values Criteria or Elecdat object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ElecdatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Elecdat object
        }


        // Set the correct dbName
        $criteria->setDbName(ElecdatPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Elecdat or Criteria object.
     *
     * @param      mixed $values Criteria or Elecdat object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ElecdatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ElecdatPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ElecdatPeer::STUDCODE);
            $value = $criteria->remove(ElecdatPeer::STUDCODE);
            if ($value) {
                $selectCriteria->add(ElecdatPeer::STUDCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ElecdatPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ElecdatPeer::STOCKCODE);
            $value = $criteria->remove(ElecdatPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(ElecdatPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ElecdatPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ElecdatPeer::BUFFERSYSTEM);
            $value = $criteria->remove(ElecdatPeer::BUFFERSYSTEM);
            if ($value) {
                $selectCriteria->add(ElecdatPeer::BUFFERSYSTEM, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ElecdatPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ElecdatPeer::TISSUE);
            $value = $criteria->remove(ElecdatPeer::TISSUE);
            if ($value) {
                $selectCriteria->add(ElecdatPeer::TISSUE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ElecdatPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ElecdatPeer::SAMPLES);
            $value = $criteria->remove(ElecdatPeer::SAMPLES);
            if ($value) {
                $selectCriteria->add(ElecdatPeer::SAMPLES, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ElecdatPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ElecdatPeer::ENZYME);
            $value = $criteria->remove(ElecdatPeer::ENZYME);
            if ($value) {
                $selectCriteria->add(ElecdatPeer::ENZYME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ElecdatPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ElecdatPeer::LOCUS);
            $value = $criteria->remove(ElecdatPeer::LOCUS);
            if ($value) {
                $selectCriteria->add(ElecdatPeer::LOCUS, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ElecdatPeer::TABLE_NAME);
            }

        } else { // $values is Elecdat object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ElecdatPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the elecdat table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ElecdatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ElecdatPeer::TABLE_NAME, $con, ElecdatPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ElecdatPeer::clearInstancePool();
            ElecdatPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Elecdat or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Elecdat object or primary key or array of primary keys
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
            $con = Propel::getConnection(ElecdatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ElecdatPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Elecdat) { // it's a model object
            // invalidate the cache for this single object
            ElecdatPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ElecdatPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ElecdatPeer::STUDCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ElecdatPeer::STOCKCODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ElecdatPeer::BUFFERSYSTEM, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(ElecdatPeer::TISSUE, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(ElecdatPeer::SAMPLES, $value[4]));
                $criterion->addAnd($criteria->getNewCriterion(ElecdatPeer::ENZYME, $value[5]));
                $criterion->addAnd($criteria->getNewCriterion(ElecdatPeer::LOCUS, $value[6]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                ElecdatPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ElecdatPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ElecdatPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Elecdat object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Elecdat $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ElecdatPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ElecdatPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ElecdatPeer::DATABASE_NAME, ElecdatPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $studcode
     * @param   int $stockcode
     * @param   string $buffersystem
     * @param   string $tissue
     * @param   int $samples
     * @param   string $enzyme
     * @param   string $locus
     * @param      PropelPDO $con
     * @return Elecdat
     */
    public static function retrieveByPK($studcode, $stockcode, $buffersystem, $tissue, $samples, $enzyme, $locus, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $studcode, (string) $stockcode, (string) $buffersystem, (string) $tissue, (string) $samples, (string) $enzyme, (string) $locus));
         if (null !== ($obj = ElecdatPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ElecdatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(ElecdatPeer::DATABASE_NAME);
        $criteria->add(ElecdatPeer::STUDCODE, $studcode);
        $criteria->add(ElecdatPeer::STOCKCODE, $stockcode);
        $criteria->add(ElecdatPeer::BUFFERSYSTEM, $buffersystem);
        $criteria->add(ElecdatPeer::TISSUE, $tissue);
        $criteria->add(ElecdatPeer::SAMPLES, $samples);
        $criteria->add(ElecdatPeer::ENZYME, $enzyme);
        $criteria->add(ElecdatPeer::LOCUS, $locus);
        $v = ElecdatPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseElecdatPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseElecdatPeer::buildTableMap();

