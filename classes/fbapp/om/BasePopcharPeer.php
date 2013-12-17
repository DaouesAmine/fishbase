<?php


/**
 * Base static class for performing query and update operations on the 'popchar' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BasePopcharPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'popchar';

    /** the related Propel class for this table */
    const OM_CLASS = 'Popchar';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PopcharTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 23;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 23;

    /** the column name for the Autoctr field */
    const AUTOCTR = 'popchar.Autoctr';

    /** the column name for the Speccode field */
    const SPECCODE = 'popchar.Speccode';

    /** the column name for the Stockcode field */
    const STOCKCODE = 'popchar.Stockcode';

    /** the column name for the PopCharRefNo field */
    const POPCHARREFNO = 'popchar.PopCharRefNo';

    /** the column name for the Sex field */
    const SEX = 'popchar.Sex';

    /** the column name for the SourceRef field */
    const SOURCEREF = 'popchar.SourceRef';

    /** the column name for the Wmax field */
    const WMAX = 'popchar.Wmax';

    /** the column name for the TypeWeight field */
    const TYPEWEIGHT = 'popchar.TypeWeight';

    /** the column name for the Lmax field */
    const LMAX = 'popchar.Lmax';

    /** the column name for the Type field */
    const TYPE = 'popchar.Type';

    /** the column name for the tmax field */
    const TMAX = 'popchar.tmax';

    /** the column name for the Locality field */
    const LOCALITY = 'popchar.Locality';

    /** the column name for the C_Code field */
    const C_CODE = 'popchar.C_Code';

    /** the column name for the Entered field */
    const ENTERED = 'popchar.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'popchar.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'popchar.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'popchar.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'popchar.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'popchar.DateChecked';

    /** the column name for the Comments field */
    const COMMENTS = 'popchar.Comments';

    /** the column name for the SameWL field */
    const SAMEWL = 'popchar.SameWL';

    /** the column name for the SameLt field */
    const SAMELT = 'popchar.SameLt';

    /** the column name for the TS field */
    const TS = 'popchar.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Popchar objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Popchar[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PopcharPeer::$fieldNames[PopcharPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Speccode', 'Stockcode', 'Popcharrefno', 'Sex', 'Sourceref', 'Wmax', 'Typeweight', 'Lmax', 'Type', 'Tmax', 'Locality', 'CCode', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Comments', 'Samewl', 'Samelt', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'speccode', 'stockcode', 'popcharrefno', 'sex', 'sourceref', 'wmax', 'typeweight', 'lmax', 'type', 'tmax', 'locality', 'cCode', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'comments', 'samewl', 'samelt', 'ts', ),
        BasePeer::TYPE_COLNAME => array (PopcharPeer::AUTOCTR, PopcharPeer::SPECCODE, PopcharPeer::STOCKCODE, PopcharPeer::POPCHARREFNO, PopcharPeer::SEX, PopcharPeer::SOURCEREF, PopcharPeer::WMAX, PopcharPeer::TYPEWEIGHT, PopcharPeer::LMAX, PopcharPeer::TYPE, PopcharPeer::TMAX, PopcharPeer::LOCALITY, PopcharPeer::C_CODE, PopcharPeer::ENTERED, PopcharPeer::DATEENTERED, PopcharPeer::MODIFIED, PopcharPeer::DATEMODIFIED, PopcharPeer::EXPERT, PopcharPeer::DATECHECKED, PopcharPeer::COMMENTS, PopcharPeer::SAMEWL, PopcharPeer::SAMELT, PopcharPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'SPECCODE', 'STOCKCODE', 'POPCHARREFNO', 'SEX', 'SOURCEREF', 'WMAX', 'TYPEWEIGHT', 'LMAX', 'TYPE', 'TMAX', 'LOCALITY', 'C_CODE', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'COMMENTS', 'SAMEWL', 'SAMELT', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('Autoctr', 'Speccode', 'Stockcode', 'PopCharRefNo', 'Sex', 'SourceRef', 'Wmax', 'TypeWeight', 'Lmax', 'Type', 'tmax', 'Locality', 'C_Code', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Comments', 'SameWL', 'SameLt', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PopcharPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Stockcode' => 2, 'Popcharrefno' => 3, 'Sex' => 4, 'Sourceref' => 5, 'Wmax' => 6, 'Typeweight' => 7, 'Lmax' => 8, 'Type' => 9, 'Tmax' => 10, 'Locality' => 11, 'CCode' => 12, 'Entered' => 13, 'Dateentered' => 14, 'Modified' => 15, 'Datemodified' => 16, 'Expert' => 17, 'Datechecked' => 18, 'Comments' => 19, 'Samewl' => 20, 'Samelt' => 21, 'Ts' => 22, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'speccode' => 1, 'stockcode' => 2, 'popcharrefno' => 3, 'sex' => 4, 'sourceref' => 5, 'wmax' => 6, 'typeweight' => 7, 'lmax' => 8, 'type' => 9, 'tmax' => 10, 'locality' => 11, 'cCode' => 12, 'entered' => 13, 'dateentered' => 14, 'modified' => 15, 'datemodified' => 16, 'expert' => 17, 'datechecked' => 18, 'comments' => 19, 'samewl' => 20, 'samelt' => 21, 'ts' => 22, ),
        BasePeer::TYPE_COLNAME => array (PopcharPeer::AUTOCTR => 0, PopcharPeer::SPECCODE => 1, PopcharPeer::STOCKCODE => 2, PopcharPeer::POPCHARREFNO => 3, PopcharPeer::SEX => 4, PopcharPeer::SOURCEREF => 5, PopcharPeer::WMAX => 6, PopcharPeer::TYPEWEIGHT => 7, PopcharPeer::LMAX => 8, PopcharPeer::TYPE => 9, PopcharPeer::TMAX => 10, PopcharPeer::LOCALITY => 11, PopcharPeer::C_CODE => 12, PopcharPeer::ENTERED => 13, PopcharPeer::DATEENTERED => 14, PopcharPeer::MODIFIED => 15, PopcharPeer::DATEMODIFIED => 16, PopcharPeer::EXPERT => 17, PopcharPeer::DATECHECKED => 18, PopcharPeer::COMMENTS => 19, PopcharPeer::SAMEWL => 20, PopcharPeer::SAMELT => 21, PopcharPeer::TS => 22, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'SPECCODE' => 1, 'STOCKCODE' => 2, 'POPCHARREFNO' => 3, 'SEX' => 4, 'SOURCEREF' => 5, 'WMAX' => 6, 'TYPEWEIGHT' => 7, 'LMAX' => 8, 'TYPE' => 9, 'TMAX' => 10, 'LOCALITY' => 11, 'C_CODE' => 12, 'ENTERED' => 13, 'DATEENTERED' => 14, 'MODIFIED' => 15, 'DATEMODIFIED' => 16, 'EXPERT' => 17, 'DATECHECKED' => 18, 'COMMENTS' => 19, 'SAMEWL' => 20, 'SAMELT' => 21, 'TS' => 22, ),
        BasePeer::TYPE_FIELDNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Stockcode' => 2, 'PopCharRefNo' => 3, 'Sex' => 4, 'SourceRef' => 5, 'Wmax' => 6, 'TypeWeight' => 7, 'Lmax' => 8, 'Type' => 9, 'tmax' => 10, 'Locality' => 11, 'C_Code' => 12, 'Entered' => 13, 'DateEntered' => 14, 'Modified' => 15, 'DateModified' => 16, 'Expert' => 17, 'DateChecked' => 18, 'Comments' => 19, 'SameWL' => 20, 'SameLt' => 21, 'TS' => 22, ),
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
        $toNames = PopcharPeer::getFieldNames($toType);
        $key = isset(PopcharPeer::$fieldKeys[$fromType][$name]) ? PopcharPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PopcharPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PopcharPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PopcharPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PopcharPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PopcharPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PopcharPeer::AUTOCTR);
            $criteria->addSelectColumn(PopcharPeer::SPECCODE);
            $criteria->addSelectColumn(PopcharPeer::STOCKCODE);
            $criteria->addSelectColumn(PopcharPeer::POPCHARREFNO);
            $criteria->addSelectColumn(PopcharPeer::SEX);
            $criteria->addSelectColumn(PopcharPeer::SOURCEREF);
            $criteria->addSelectColumn(PopcharPeer::WMAX);
            $criteria->addSelectColumn(PopcharPeer::TYPEWEIGHT);
            $criteria->addSelectColumn(PopcharPeer::LMAX);
            $criteria->addSelectColumn(PopcharPeer::TYPE);
            $criteria->addSelectColumn(PopcharPeer::TMAX);
            $criteria->addSelectColumn(PopcharPeer::LOCALITY);
            $criteria->addSelectColumn(PopcharPeer::C_CODE);
            $criteria->addSelectColumn(PopcharPeer::ENTERED);
            $criteria->addSelectColumn(PopcharPeer::DATEENTERED);
            $criteria->addSelectColumn(PopcharPeer::MODIFIED);
            $criteria->addSelectColumn(PopcharPeer::DATEMODIFIED);
            $criteria->addSelectColumn(PopcharPeer::EXPERT);
            $criteria->addSelectColumn(PopcharPeer::DATECHECKED);
            $criteria->addSelectColumn(PopcharPeer::COMMENTS);
            $criteria->addSelectColumn(PopcharPeer::SAMEWL);
            $criteria->addSelectColumn(PopcharPeer::SAMELT);
            $criteria->addSelectColumn(PopcharPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.Autoctr');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.Stockcode');
            $criteria->addSelectColumn($alias . '.PopCharRefNo');
            $criteria->addSelectColumn($alias . '.Sex');
            $criteria->addSelectColumn($alias . '.SourceRef');
            $criteria->addSelectColumn($alias . '.Wmax');
            $criteria->addSelectColumn($alias . '.TypeWeight');
            $criteria->addSelectColumn($alias . '.Lmax');
            $criteria->addSelectColumn($alias . '.Type');
            $criteria->addSelectColumn($alias . '.tmax');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Comments');
            $criteria->addSelectColumn($alias . '.SameWL');
            $criteria->addSelectColumn($alias . '.SameLt');
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
        $criteria->setPrimaryTableName(PopcharPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PopcharPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PopcharPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PopcharPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Popchar
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PopcharPeer::doSelect($critcopy, $con);
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
        return PopcharPeer::populateObjects(PopcharPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PopcharPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PopcharPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PopcharPeer::DATABASE_NAME);

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
     * @param Popchar $obj A Popchar object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getPopcharrefno(), (string) $obj->getSex(), (string) $obj->getLocality()));
            } // if key === null
            PopcharPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Popchar object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Popchar) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getPopcharrefno(), (string) $value->getSex(), (string) $value->getLocality()));
            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Popchar object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PopcharPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Popchar Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PopcharPeer::$instances[$key])) {
                return PopcharPeer::$instances[$key];
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
        foreach (PopcharPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PopcharPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to popchar
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
        if ($row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 4] === null && $row[$startcol + 11] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 4], (string) $row[$startcol + 11]));
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

        return array((int) $row[$startcol + 2], (int) $row[$startcol + 3], (string) $row[$startcol + 4], (string) $row[$startcol + 11]);
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
        $cls = PopcharPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PopcharPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PopcharPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PopcharPeer::addInstanceToPool($obj, $key);
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
     * @return array (Popchar object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PopcharPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PopcharPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PopcharPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PopcharPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PopcharPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(PopcharPeer::DATABASE_NAME)->getTable(PopcharPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePopcharPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePopcharPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PopcharTableMap());
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
        return PopcharPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Popchar or Criteria object.
     *
     * @param      mixed $values Criteria or Popchar object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopcharPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Popchar object
        }


        // Set the correct dbName
        $criteria->setDbName(PopcharPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Popchar or Criteria object.
     *
     * @param      mixed $values Criteria or Popchar object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopcharPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PopcharPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PopcharPeer::STOCKCODE);
            $value = $criteria->remove(PopcharPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(PopcharPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PopcharPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(PopcharPeer::POPCHARREFNO);
            $value = $criteria->remove(PopcharPeer::POPCHARREFNO);
            if ($value) {
                $selectCriteria->add(PopcharPeer::POPCHARREFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PopcharPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(PopcharPeer::SEX);
            $value = $criteria->remove(PopcharPeer::SEX);
            if ($value) {
                $selectCriteria->add(PopcharPeer::SEX, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PopcharPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(PopcharPeer::LOCALITY);
            $value = $criteria->remove(PopcharPeer::LOCALITY);
            if ($value) {
                $selectCriteria->add(PopcharPeer::LOCALITY, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PopcharPeer::TABLE_NAME);
            }

        } else { // $values is Popchar object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PopcharPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the popchar table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PopcharPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PopcharPeer::TABLE_NAME, $con, PopcharPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PopcharPeer::clearInstancePool();
            PopcharPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Popchar or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Popchar object or primary key or array of primary keys
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
            $con = Propel::getConnection(PopcharPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PopcharPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Popchar) { // it's a model object
            // invalidate the cache for this single object
            PopcharPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PopcharPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(PopcharPeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(PopcharPeer::POPCHARREFNO, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(PopcharPeer::SEX, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(PopcharPeer::LOCALITY, $value[3]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                PopcharPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PopcharPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PopcharPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Popchar object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Popchar $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PopcharPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PopcharPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PopcharPeer::DATABASE_NAME, PopcharPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stockcode
     * @param   int $popcharrefno
     * @param   string $sex
     * @param   string $locality
     * @param      PropelPDO $con
     * @return Popchar
     */
    public static function retrieveByPK($stockcode, $popcharrefno, $sex, $locality, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $popcharrefno, (string) $sex, (string) $locality));
         if (null !== ($obj = PopcharPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PopcharPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(PopcharPeer::DATABASE_NAME);
        $criteria->add(PopcharPeer::STOCKCODE, $stockcode);
        $criteria->add(PopcharPeer::POPCHARREFNO, $popcharrefno);
        $criteria->add(PopcharPeer::SEX, $sex);
        $criteria->add(PopcharPeer::LOCALITY, $locality);
        $v = PopcharPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BasePopcharPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePopcharPeer::buildTableMap();

