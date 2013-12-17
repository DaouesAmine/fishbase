<?php


/**
 * Base static class for performing query and update operations on the 'elecstudies' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseElecstudiesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'elecstudies';

    /** the related Propel class for this table */
    const OM_CLASS = 'Elecstudies';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ElecstudiesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 19;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 19;

    /** the column name for the StudCode field */
    const STUDCODE = 'elecstudies.StudCode';

    /** the column name for the StockCode field */
    const STOCKCODE = 'elecstudies.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'elecstudies.SpecCode';

    /** the column name for the ElecDatRefNo field */
    const ELECDATREFNO = 'elecstudies.ElecDatRefNo';

    /** the column name for the Locality field */
    const LOCALITY = 'elecstudies.Locality';

    /** the column name for the C_Code field */
    const C_CODE = 'elecstudies.C_Code';

    /** the column name for the TotalLoci field */
    const TOTALLOCI = 'elecstudies.TotalLoci';

    /** the column name for the ExpHeterozygosity field */
    const EXPHETEROZYGOSITY = 'elecstudies.ExpHeterozygosity';

    /** the column name for the Heterozygosity field */
    const HETEROZYGOSITY = 'elecstudies.Heterozygosity';

    /** the column name for the PolymorphicLoci field */
    const POLYMORPHICLOCI = 'elecstudies.PolymorphicLoci';

    /** the column name for the Comments field */
    const COMMENTS = 'elecstudies.Comments';

    /** the column name for the Entered field */
    const ENTERED = 'elecstudies.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'elecstudies.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'elecstudies.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'elecstudies.DateModified';

    /** the column name for the Checked field */
    const CHECKED = 'elecstudies.Checked';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'elecstudies.DateChecked';

    /** the column name for the Source field */
    const SOURCE = 'elecstudies.Source';

    /** the column name for the TS field */
    const TS = 'elecstudies.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Elecstudies objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Elecstudies[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ElecstudiesPeer::$fieldNames[ElecstudiesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Studcode', 'Stockcode', 'Speccode', 'Elecdatrefno', 'Locality', 'CCode', 'Totalloci', 'Expheterozygosity', 'Heterozygosity', 'Polymorphicloci', 'Comments', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Checked', 'Datechecked', 'Source', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('studcode', 'stockcode', 'speccode', 'elecdatrefno', 'locality', 'cCode', 'totalloci', 'expheterozygosity', 'heterozygosity', 'polymorphicloci', 'comments', 'entered', 'dateentered', 'modified', 'datemodified', 'checked', 'datechecked', 'source', 'ts', ),
        BasePeer::TYPE_COLNAME => array (ElecstudiesPeer::STUDCODE, ElecstudiesPeer::STOCKCODE, ElecstudiesPeer::SPECCODE, ElecstudiesPeer::ELECDATREFNO, ElecstudiesPeer::LOCALITY, ElecstudiesPeer::C_CODE, ElecstudiesPeer::TOTALLOCI, ElecstudiesPeer::EXPHETEROZYGOSITY, ElecstudiesPeer::HETEROZYGOSITY, ElecstudiesPeer::POLYMORPHICLOCI, ElecstudiesPeer::COMMENTS, ElecstudiesPeer::ENTERED, ElecstudiesPeer::DATEENTERED, ElecstudiesPeer::MODIFIED, ElecstudiesPeer::DATEMODIFIED, ElecstudiesPeer::CHECKED, ElecstudiesPeer::DATECHECKED, ElecstudiesPeer::SOURCE, ElecstudiesPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STUDCODE', 'STOCKCODE', 'SPECCODE', 'ELECDATREFNO', 'LOCALITY', 'C_CODE', 'TOTALLOCI', 'EXPHETEROZYGOSITY', 'HETEROZYGOSITY', 'POLYMORPHICLOCI', 'COMMENTS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'CHECKED', 'DATECHECKED', 'SOURCE', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('StudCode', 'StockCode', 'SpecCode', 'ElecDatRefNo', 'Locality', 'C_Code', 'TotalLoci', 'ExpHeterozygosity', 'Heterozygosity', 'PolymorphicLoci', 'Comments', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Checked', 'DateChecked', 'Source', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ElecstudiesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Studcode' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Elecdatrefno' => 3, 'Locality' => 4, 'CCode' => 5, 'Totalloci' => 6, 'Expheterozygosity' => 7, 'Heterozygosity' => 8, 'Polymorphicloci' => 9, 'Comments' => 10, 'Entered' => 11, 'Dateentered' => 12, 'Modified' => 13, 'Datemodified' => 14, 'Checked' => 15, 'Datechecked' => 16, 'Source' => 17, 'Ts' => 18, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('studcode' => 0, 'stockcode' => 1, 'speccode' => 2, 'elecdatrefno' => 3, 'locality' => 4, 'cCode' => 5, 'totalloci' => 6, 'expheterozygosity' => 7, 'heterozygosity' => 8, 'polymorphicloci' => 9, 'comments' => 10, 'entered' => 11, 'dateentered' => 12, 'modified' => 13, 'datemodified' => 14, 'checked' => 15, 'datechecked' => 16, 'source' => 17, 'ts' => 18, ),
        BasePeer::TYPE_COLNAME => array (ElecstudiesPeer::STUDCODE => 0, ElecstudiesPeer::STOCKCODE => 1, ElecstudiesPeer::SPECCODE => 2, ElecstudiesPeer::ELECDATREFNO => 3, ElecstudiesPeer::LOCALITY => 4, ElecstudiesPeer::C_CODE => 5, ElecstudiesPeer::TOTALLOCI => 6, ElecstudiesPeer::EXPHETEROZYGOSITY => 7, ElecstudiesPeer::HETEROZYGOSITY => 8, ElecstudiesPeer::POLYMORPHICLOCI => 9, ElecstudiesPeer::COMMENTS => 10, ElecstudiesPeer::ENTERED => 11, ElecstudiesPeer::DATEENTERED => 12, ElecstudiesPeer::MODIFIED => 13, ElecstudiesPeer::DATEMODIFIED => 14, ElecstudiesPeer::CHECKED => 15, ElecstudiesPeer::DATECHECKED => 16, ElecstudiesPeer::SOURCE => 17, ElecstudiesPeer::TS => 18, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STUDCODE' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'ELECDATREFNO' => 3, 'LOCALITY' => 4, 'C_CODE' => 5, 'TOTALLOCI' => 6, 'EXPHETEROZYGOSITY' => 7, 'HETEROZYGOSITY' => 8, 'POLYMORPHICLOCI' => 9, 'COMMENTS' => 10, 'ENTERED' => 11, 'DATEENTERED' => 12, 'MODIFIED' => 13, 'DATEMODIFIED' => 14, 'CHECKED' => 15, 'DATECHECKED' => 16, 'SOURCE' => 17, 'TS' => 18, ),
        BasePeer::TYPE_FIELDNAME => array ('StudCode' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'ElecDatRefNo' => 3, 'Locality' => 4, 'C_Code' => 5, 'TotalLoci' => 6, 'ExpHeterozygosity' => 7, 'Heterozygosity' => 8, 'PolymorphicLoci' => 9, 'Comments' => 10, 'Entered' => 11, 'DateEntered' => 12, 'Modified' => 13, 'DateModified' => 14, 'Checked' => 15, 'DateChecked' => 16, 'Source' => 17, 'TS' => 18, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
        $toNames = ElecstudiesPeer::getFieldNames($toType);
        $key = isset(ElecstudiesPeer::$fieldKeys[$fromType][$name]) ? ElecstudiesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ElecstudiesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ElecstudiesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ElecstudiesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ElecstudiesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ElecstudiesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ElecstudiesPeer::STUDCODE);
            $criteria->addSelectColumn(ElecstudiesPeer::STOCKCODE);
            $criteria->addSelectColumn(ElecstudiesPeer::SPECCODE);
            $criteria->addSelectColumn(ElecstudiesPeer::ELECDATREFNO);
            $criteria->addSelectColumn(ElecstudiesPeer::LOCALITY);
            $criteria->addSelectColumn(ElecstudiesPeer::C_CODE);
            $criteria->addSelectColumn(ElecstudiesPeer::TOTALLOCI);
            $criteria->addSelectColumn(ElecstudiesPeer::EXPHETEROZYGOSITY);
            $criteria->addSelectColumn(ElecstudiesPeer::HETEROZYGOSITY);
            $criteria->addSelectColumn(ElecstudiesPeer::POLYMORPHICLOCI);
            $criteria->addSelectColumn(ElecstudiesPeer::COMMENTS);
            $criteria->addSelectColumn(ElecstudiesPeer::ENTERED);
            $criteria->addSelectColumn(ElecstudiesPeer::DATEENTERED);
            $criteria->addSelectColumn(ElecstudiesPeer::MODIFIED);
            $criteria->addSelectColumn(ElecstudiesPeer::DATEMODIFIED);
            $criteria->addSelectColumn(ElecstudiesPeer::CHECKED);
            $criteria->addSelectColumn(ElecstudiesPeer::DATECHECKED);
            $criteria->addSelectColumn(ElecstudiesPeer::SOURCE);
            $criteria->addSelectColumn(ElecstudiesPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.StudCode');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.ElecDatRefNo');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.TotalLoci');
            $criteria->addSelectColumn($alias . '.ExpHeterozygosity');
            $criteria->addSelectColumn($alias . '.Heterozygosity');
            $criteria->addSelectColumn($alias . '.PolymorphicLoci');
            $criteria->addSelectColumn($alias . '.Comments');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Checked');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Source');
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
        $criteria->setPrimaryTableName(ElecstudiesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ElecstudiesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ElecstudiesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ElecstudiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Elecstudies
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ElecstudiesPeer::doSelect($critcopy, $con);
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
        return ElecstudiesPeer::populateObjects(ElecstudiesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ElecstudiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ElecstudiesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ElecstudiesPeer::DATABASE_NAME);

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
     * @param Elecstudies $obj A Elecstudies object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getStudcode();
            } // if key === null
            ElecstudiesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Elecstudies object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Elecstudies) {
                $key = (string) $value->getStudcode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Elecstudies object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ElecstudiesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Elecstudies Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ElecstudiesPeer::$instances[$key])) {
                return ElecstudiesPeer::$instances[$key];
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
        foreach (ElecstudiesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ElecstudiesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to elecstudies
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
        $cls = ElecstudiesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ElecstudiesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ElecstudiesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ElecstudiesPeer::addInstanceToPool($obj, $key);
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
     * @return array (Elecstudies object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ElecstudiesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ElecstudiesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ElecstudiesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ElecstudiesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ElecstudiesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(ElecstudiesPeer::DATABASE_NAME)->getTable(ElecstudiesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseElecstudiesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseElecstudiesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ElecstudiesTableMap());
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
        return ElecstudiesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Elecstudies or Criteria object.
     *
     * @param      mixed $values Criteria or Elecstudies object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ElecstudiesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Elecstudies object
        }

        if ($criteria->containsKey(ElecstudiesPeer::STUDCODE) && $criteria->keyContainsValue(ElecstudiesPeer::STUDCODE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ElecstudiesPeer::STUDCODE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ElecstudiesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Elecstudies or Criteria object.
     *
     * @param      mixed $values Criteria or Elecstudies object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ElecstudiesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ElecstudiesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ElecstudiesPeer::STUDCODE);
            $value = $criteria->remove(ElecstudiesPeer::STUDCODE);
            if ($value) {
                $selectCriteria->add(ElecstudiesPeer::STUDCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ElecstudiesPeer::TABLE_NAME);
            }

        } else { // $values is Elecstudies object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ElecstudiesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the elecstudies table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ElecstudiesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ElecstudiesPeer::TABLE_NAME, $con, ElecstudiesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ElecstudiesPeer::clearInstancePool();
            ElecstudiesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Elecstudies or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Elecstudies object or primary key or array of primary keys
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
            $con = Propel::getConnection(ElecstudiesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ElecstudiesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Elecstudies) { // it's a model object
            // invalidate the cache for this single object
            ElecstudiesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ElecstudiesPeer::DATABASE_NAME);
            $criteria->add(ElecstudiesPeer::STUDCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                ElecstudiesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ElecstudiesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ElecstudiesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Elecstudies object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Elecstudies $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ElecstudiesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ElecstudiesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ElecstudiesPeer::DATABASE_NAME, ElecstudiesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Elecstudies
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ElecstudiesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ElecstudiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ElecstudiesPeer::DATABASE_NAME);
        $criteria->add(ElecstudiesPeer::STUDCODE, $pk);

        $v = ElecstudiesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Elecstudies[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ElecstudiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ElecstudiesPeer::DATABASE_NAME);
            $criteria->add(ElecstudiesPeer::STUDCODE, $pks, Criteria::IN);
            $objs = ElecstudiesPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseElecstudiesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseElecstudiesPeer::buildTableMap();

