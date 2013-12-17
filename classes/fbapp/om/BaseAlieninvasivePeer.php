<?php


/**
 * Base static class for performing query and update operations on the 'alieninvasive' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseAlieninvasivePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'alieninvasive';

    /** the related Propel class for this table */
    const OM_CLASS = 'Alieninvasive';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AlieninvasiveTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the Autoctr field */
    const AUTOCTR = 'alieninvasive.Autoctr';

    /** the column name for the Speccode field */
    const SPECCODE = 'alieninvasive.Speccode';

    /** the column name for the Genus field */
    const GENUS = 'alieninvasive.Genus';

    /** the column name for the Species field */
    const SPECIES = 'alieninvasive.Species';

    /** the column name for the NameofDatabase field */
    const NAMEOFDATABASE = 'alieninvasive.NameofDatabase';

    /** the column name for the Description field */
    const DESCRIPTION = 'alieninvasive.Description';

    /** the column name for the URL field */
    const URL = 'alieninvasive.URL';

    /** the column name for the Entered field */
    const ENTERED = 'alieninvasive.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'alieninvasive.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'alieninvasive.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'alieninvasive.DateModified';

    /** the column name for the Checked field */
    const CHECKED = 'alieninvasive.Checked';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'alieninvasive.DateChecked';

    /** the column name for the TS field */
    const TS = 'alieninvasive.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Alieninvasive objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Alieninvasive[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. AlieninvasivePeer::$fieldNames[AlieninvasivePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Speccode', 'Genus', 'Species', 'Nameofdatabase', 'Description', 'Url', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Checked', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'speccode', 'genus', 'species', 'nameofdatabase', 'description', 'url', 'entered', 'dateentered', 'modified', 'datemodified', 'checked', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (AlieninvasivePeer::AUTOCTR, AlieninvasivePeer::SPECCODE, AlieninvasivePeer::GENUS, AlieninvasivePeer::SPECIES, AlieninvasivePeer::NAMEOFDATABASE, AlieninvasivePeer::DESCRIPTION, AlieninvasivePeer::URL, AlieninvasivePeer::ENTERED, AlieninvasivePeer::DATEENTERED, AlieninvasivePeer::MODIFIED, AlieninvasivePeer::DATEMODIFIED, AlieninvasivePeer::CHECKED, AlieninvasivePeer::DATECHECKED, AlieninvasivePeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'SPECCODE', 'GENUS', 'SPECIES', 'NAMEOFDATABASE', 'DESCRIPTION', 'URL', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'CHECKED', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('Autoctr', 'Speccode', 'Genus', 'Species', 'NameofDatabase', 'Description', 'URL', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Checked', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. AlieninvasivePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Genus' => 2, 'Species' => 3, 'Nameofdatabase' => 4, 'Description' => 5, 'Url' => 6, 'Entered' => 7, 'Dateentered' => 8, 'Modified' => 9, 'Datemodified' => 10, 'Checked' => 11, 'Datechecked' => 12, 'Ts' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'speccode' => 1, 'genus' => 2, 'species' => 3, 'nameofdatabase' => 4, 'description' => 5, 'url' => 6, 'entered' => 7, 'dateentered' => 8, 'modified' => 9, 'datemodified' => 10, 'checked' => 11, 'datechecked' => 12, 'ts' => 13, ),
        BasePeer::TYPE_COLNAME => array (AlieninvasivePeer::AUTOCTR => 0, AlieninvasivePeer::SPECCODE => 1, AlieninvasivePeer::GENUS => 2, AlieninvasivePeer::SPECIES => 3, AlieninvasivePeer::NAMEOFDATABASE => 4, AlieninvasivePeer::DESCRIPTION => 5, AlieninvasivePeer::URL => 6, AlieninvasivePeer::ENTERED => 7, AlieninvasivePeer::DATEENTERED => 8, AlieninvasivePeer::MODIFIED => 9, AlieninvasivePeer::DATEMODIFIED => 10, AlieninvasivePeer::CHECKED => 11, AlieninvasivePeer::DATECHECKED => 12, AlieninvasivePeer::TS => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'SPECCODE' => 1, 'GENUS' => 2, 'SPECIES' => 3, 'NAMEOFDATABASE' => 4, 'DESCRIPTION' => 5, 'URL' => 6, 'ENTERED' => 7, 'DATEENTERED' => 8, 'MODIFIED' => 9, 'DATEMODIFIED' => 10, 'CHECKED' => 11, 'DATECHECKED' => 12, 'TS' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Genus' => 2, 'Species' => 3, 'NameofDatabase' => 4, 'Description' => 5, 'URL' => 6, 'Entered' => 7, 'DateEntered' => 8, 'Modified' => 9, 'DateModified' => 10, 'Checked' => 11, 'DateChecked' => 12, 'TS' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $toNames = AlieninvasivePeer::getFieldNames($toType);
        $key = isset(AlieninvasivePeer::$fieldKeys[$fromType][$name]) ? AlieninvasivePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(AlieninvasivePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, AlieninvasivePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return AlieninvasivePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. AlieninvasivePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AlieninvasivePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AlieninvasivePeer::AUTOCTR);
            $criteria->addSelectColumn(AlieninvasivePeer::SPECCODE);
            $criteria->addSelectColumn(AlieninvasivePeer::GENUS);
            $criteria->addSelectColumn(AlieninvasivePeer::SPECIES);
            $criteria->addSelectColumn(AlieninvasivePeer::NAMEOFDATABASE);
            $criteria->addSelectColumn(AlieninvasivePeer::DESCRIPTION);
            $criteria->addSelectColumn(AlieninvasivePeer::URL);
            $criteria->addSelectColumn(AlieninvasivePeer::ENTERED);
            $criteria->addSelectColumn(AlieninvasivePeer::DATEENTERED);
            $criteria->addSelectColumn(AlieninvasivePeer::MODIFIED);
            $criteria->addSelectColumn(AlieninvasivePeer::DATEMODIFIED);
            $criteria->addSelectColumn(AlieninvasivePeer::CHECKED);
            $criteria->addSelectColumn(AlieninvasivePeer::DATECHECKED);
            $criteria->addSelectColumn(AlieninvasivePeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.Autoctr');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.NameofDatabase');
            $criteria->addSelectColumn($alias . '.Description');
            $criteria->addSelectColumn($alias . '.URL');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Checked');
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
        $criteria->setPrimaryTableName(AlieninvasivePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AlieninvasivePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(AlieninvasivePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AlieninvasivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Alieninvasive
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AlieninvasivePeer::doSelect($critcopy, $con);
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
        return AlieninvasivePeer::populateObjects(AlieninvasivePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AlieninvasivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AlieninvasivePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(AlieninvasivePeer::DATABASE_NAME);

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
     * @param Alieninvasive $obj A Alieninvasive object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getAutoctr(), (string) $obj->getSpeccode(), (string) $obj->getNameofdatabase()));
            } // if key === null
            AlieninvasivePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Alieninvasive object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Alieninvasive) {
                $key = serialize(array((string) $value->getAutoctr(), (string) $value->getSpeccode(), (string) $value->getNameofdatabase()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Alieninvasive object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(AlieninvasivePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Alieninvasive Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(AlieninvasivePeer::$instances[$key])) {
                return AlieninvasivePeer::$instances[$key];
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
        foreach (AlieninvasivePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        AlieninvasivePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to alieninvasive
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null && $row[$startcol + 4] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1], (string) $row[$startcol + 4]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 1], (string) $row[$startcol + 4]);
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
        $cls = AlieninvasivePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AlieninvasivePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AlieninvasivePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AlieninvasivePeer::addInstanceToPool($obj, $key);
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
     * @return array (Alieninvasive object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AlieninvasivePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AlieninvasivePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AlieninvasivePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AlieninvasivePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AlieninvasivePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(AlieninvasivePeer::DATABASE_NAME)->getTable(AlieninvasivePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseAlieninvasivePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseAlieninvasivePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \AlieninvasiveTableMap());
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
        return AlieninvasivePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Alieninvasive or Criteria object.
     *
     * @param      mixed $values Criteria or Alieninvasive object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AlieninvasivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Alieninvasive object
        }

        if ($criteria->containsKey(AlieninvasivePeer::AUTOCTR) && $criteria->keyContainsValue(AlieninvasivePeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.AlieninvasivePeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(AlieninvasivePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Alieninvasive or Criteria object.
     *
     * @param      mixed $values Criteria or Alieninvasive object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AlieninvasivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(AlieninvasivePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AlieninvasivePeer::AUTOCTR);
            $value = $criteria->remove(AlieninvasivePeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(AlieninvasivePeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AlieninvasivePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(AlieninvasivePeer::SPECCODE);
            $value = $criteria->remove(AlieninvasivePeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(AlieninvasivePeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AlieninvasivePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(AlieninvasivePeer::NAMEOFDATABASE);
            $value = $criteria->remove(AlieninvasivePeer::NAMEOFDATABASE);
            if ($value) {
                $selectCriteria->add(AlieninvasivePeer::NAMEOFDATABASE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AlieninvasivePeer::TABLE_NAME);
            }

        } else { // $values is Alieninvasive object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(AlieninvasivePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the alieninvasive table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AlieninvasivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(AlieninvasivePeer::TABLE_NAME, $con, AlieninvasivePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AlieninvasivePeer::clearInstancePool();
            AlieninvasivePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Alieninvasive or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Alieninvasive object or primary key or array of primary keys
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
            $con = Propel::getConnection(AlieninvasivePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            AlieninvasivePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Alieninvasive) { // it's a model object
            // invalidate the cache for this single object
            AlieninvasivePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(AlieninvasivePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(AlieninvasivePeer::AUTOCTR, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(AlieninvasivePeer::SPECCODE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(AlieninvasivePeer::NAMEOFDATABASE, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                AlieninvasivePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(AlieninvasivePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            AlieninvasivePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Alieninvasive object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Alieninvasive $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AlieninvasivePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AlieninvasivePeer::TABLE_NAME);

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

        return BasePeer::doValidate(AlieninvasivePeer::DATABASE_NAME, AlieninvasivePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $autoctr
     * @param   int $speccode
     * @param   string $nameofdatabase
     * @param      PropelPDO $con
     * @return Alieninvasive
     */
    public static function retrieveByPK($autoctr, $speccode, $nameofdatabase, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $autoctr, (string) $speccode, (string) $nameofdatabase));
         if (null !== ($obj = AlieninvasivePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AlieninvasivePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(AlieninvasivePeer::DATABASE_NAME);
        $criteria->add(AlieninvasivePeer::AUTOCTR, $autoctr);
        $criteria->add(AlieninvasivePeer::SPECCODE, $speccode);
        $criteria->add(AlieninvasivePeer::NAMEOFDATABASE, $nameofdatabase);
        $v = AlieninvasivePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseAlieninvasivePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAlieninvasivePeer::buildTableMap();

