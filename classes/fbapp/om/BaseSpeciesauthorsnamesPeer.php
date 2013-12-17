<?php


/**
 * Base static class for performing query and update operations on the 'speciesauthorsnames' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseSpeciesauthorsnamesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'speciesauthorsnames';

    /** the related Propel class for this table */
    const OM_CLASS = 'Speciesauthorsnames';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SpeciesauthorsnamesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the SpecCode field */
    const SPECCODE = 'speciesauthorsnames.SpecCode';

    /** the column name for the SynCode field */
    const SYNCODE = 'speciesauthorsnames.SynCode';

    /** the column name for the Valid field */
    const VALID = 'speciesauthorsnames.Valid';

    /** the column name for the c7SpeciesId field */
    const C7SPECIESID = 'speciesauthorsnames.c7SpeciesId';

    /** the column name for the SeqNo field */
    const SEQNO = 'speciesauthorsnames.SeqNo';

    /** the column name for the SynGenus field */
    const SYNGENUS = 'speciesauthorsnames.SynGenus';

    /** the column name for the SynSpecies field */
    const SYNSPECIES = 'speciesauthorsnames.SynSpecies';

    /** the column name for the Author field */
    const AUTHOR = 'speciesauthorsnames.Author';

    /** the column name for the URL field */
    const URL = 'speciesauthorsnames.URL';

    /** the column name for the AutNameInit field */
    const AUTNAMEINIT = 'speciesauthorsnames.AutNameInit';

    /** the column name for the AutName field */
    const AUTNAME = 'speciesauthorsnames.AutName';

    /** the column name for the c7fAuthorYearOC field */
    const C7FAUTHORYEAROC = 'speciesauthorsnames.c7fAuthorYearOC';

    /** the column name for the PKID field */
    const PKID = 'speciesauthorsnames.PKID';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Speciesauthorsnames objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Speciesauthorsnames[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SpeciesauthorsnamesPeer::$fieldNames[SpeciesauthorsnamesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode', 'Syncode', 'Valid', 'C7speciesid', 'Seqno', 'Syngenus', 'Synspecies', 'Author', 'Url', 'Autnameinit', 'Autname', 'C7fauthoryearoc', 'Pkid', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode', 'syncode', 'valid', 'c7speciesid', 'seqno', 'syngenus', 'synspecies', 'author', 'url', 'autnameinit', 'autname', 'c7fauthoryearoc', 'pkid', ),
        BasePeer::TYPE_COLNAME => array (SpeciesauthorsnamesPeer::SPECCODE, SpeciesauthorsnamesPeer::SYNCODE, SpeciesauthorsnamesPeer::VALID, SpeciesauthorsnamesPeer::C7SPECIESID, SpeciesauthorsnamesPeer::SEQNO, SpeciesauthorsnamesPeer::SYNGENUS, SpeciesauthorsnamesPeer::SYNSPECIES, SpeciesauthorsnamesPeer::AUTHOR, SpeciesauthorsnamesPeer::URL, SpeciesauthorsnamesPeer::AUTNAMEINIT, SpeciesauthorsnamesPeer::AUTNAME, SpeciesauthorsnamesPeer::C7FAUTHORYEAROC, SpeciesauthorsnamesPeer::PKID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE', 'SYNCODE', 'VALID', 'C7SPECIESID', 'SEQNO', 'SYNGENUS', 'SYNSPECIES', 'AUTHOR', 'URL', 'AUTNAMEINIT', 'AUTNAME', 'C7FAUTHORYEAROC', 'PKID', ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode', 'SynCode', 'Valid', 'c7SpeciesId', 'SeqNo', 'SynGenus', 'SynSpecies', 'Author', 'URL', 'AutNameInit', 'AutName', 'c7fAuthorYearOC', 'PKID', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SpeciesauthorsnamesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode' => 0, 'Syncode' => 1, 'Valid' => 2, 'C7speciesid' => 3, 'Seqno' => 4, 'Syngenus' => 5, 'Synspecies' => 6, 'Author' => 7, 'Url' => 8, 'Autnameinit' => 9, 'Autname' => 10, 'C7fauthoryearoc' => 11, 'Pkid' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode' => 0, 'syncode' => 1, 'valid' => 2, 'c7speciesid' => 3, 'seqno' => 4, 'syngenus' => 5, 'synspecies' => 6, 'author' => 7, 'url' => 8, 'autnameinit' => 9, 'autname' => 10, 'c7fauthoryearoc' => 11, 'pkid' => 12, ),
        BasePeer::TYPE_COLNAME => array (SpeciesauthorsnamesPeer::SPECCODE => 0, SpeciesauthorsnamesPeer::SYNCODE => 1, SpeciesauthorsnamesPeer::VALID => 2, SpeciesauthorsnamesPeer::C7SPECIESID => 3, SpeciesauthorsnamesPeer::SEQNO => 4, SpeciesauthorsnamesPeer::SYNGENUS => 5, SpeciesauthorsnamesPeer::SYNSPECIES => 6, SpeciesauthorsnamesPeer::AUTHOR => 7, SpeciesauthorsnamesPeer::URL => 8, SpeciesauthorsnamesPeer::AUTNAMEINIT => 9, SpeciesauthorsnamesPeer::AUTNAME => 10, SpeciesauthorsnamesPeer::C7FAUTHORYEAROC => 11, SpeciesauthorsnamesPeer::PKID => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE' => 0, 'SYNCODE' => 1, 'VALID' => 2, 'C7SPECIESID' => 3, 'SEQNO' => 4, 'SYNGENUS' => 5, 'SYNSPECIES' => 6, 'AUTHOR' => 7, 'URL' => 8, 'AUTNAMEINIT' => 9, 'AUTNAME' => 10, 'C7FAUTHORYEAROC' => 11, 'PKID' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode' => 0, 'SynCode' => 1, 'Valid' => 2, 'c7SpeciesId' => 3, 'SeqNo' => 4, 'SynGenus' => 5, 'SynSpecies' => 6, 'Author' => 7, 'URL' => 8, 'AutNameInit' => 9, 'AutName' => 10, 'c7fAuthorYearOC' => 11, 'PKID' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $toNames = SpeciesauthorsnamesPeer::getFieldNames($toType);
        $key = isset(SpeciesauthorsnamesPeer::$fieldKeys[$fromType][$name]) ? SpeciesauthorsnamesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SpeciesauthorsnamesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SpeciesauthorsnamesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SpeciesauthorsnamesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SpeciesauthorsnamesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SpeciesauthorsnamesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SpeciesauthorsnamesPeer::SPECCODE);
            $criteria->addSelectColumn(SpeciesauthorsnamesPeer::SYNCODE);
            $criteria->addSelectColumn(SpeciesauthorsnamesPeer::VALID);
            $criteria->addSelectColumn(SpeciesauthorsnamesPeer::C7SPECIESID);
            $criteria->addSelectColumn(SpeciesauthorsnamesPeer::SEQNO);
            $criteria->addSelectColumn(SpeciesauthorsnamesPeer::SYNGENUS);
            $criteria->addSelectColumn(SpeciesauthorsnamesPeer::SYNSPECIES);
            $criteria->addSelectColumn(SpeciesauthorsnamesPeer::AUTHOR);
            $criteria->addSelectColumn(SpeciesauthorsnamesPeer::URL);
            $criteria->addSelectColumn(SpeciesauthorsnamesPeer::AUTNAMEINIT);
            $criteria->addSelectColumn(SpeciesauthorsnamesPeer::AUTNAME);
            $criteria->addSelectColumn(SpeciesauthorsnamesPeer::C7FAUTHORYEAROC);
            $criteria->addSelectColumn(SpeciesauthorsnamesPeer::PKID);
        } else {
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.SynCode');
            $criteria->addSelectColumn($alias . '.Valid');
            $criteria->addSelectColumn($alias . '.c7SpeciesId');
            $criteria->addSelectColumn($alias . '.SeqNo');
            $criteria->addSelectColumn($alias . '.SynGenus');
            $criteria->addSelectColumn($alias . '.SynSpecies');
            $criteria->addSelectColumn($alias . '.Author');
            $criteria->addSelectColumn($alias . '.URL');
            $criteria->addSelectColumn($alias . '.AutNameInit');
            $criteria->addSelectColumn($alias . '.AutName');
            $criteria->addSelectColumn($alias . '.c7fAuthorYearOC');
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
        $criteria->setPrimaryTableName(SpeciesauthorsnamesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SpeciesauthorsnamesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SpeciesauthorsnamesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SpeciesauthorsnamesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Speciesauthorsnames
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SpeciesauthorsnamesPeer::doSelect($critcopy, $con);
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
        return SpeciesauthorsnamesPeer::populateObjects(SpeciesauthorsnamesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SpeciesauthorsnamesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SpeciesauthorsnamesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SpeciesauthorsnamesPeer::DATABASE_NAME);

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
     * @param Speciesauthorsnames $obj A Speciesauthorsnames object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPkid();
            } // if key === null
            SpeciesauthorsnamesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Speciesauthorsnames object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Speciesauthorsnames) {
                $key = (string) $value->getPkid();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Speciesauthorsnames object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SpeciesauthorsnamesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Speciesauthorsnames Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SpeciesauthorsnamesPeer::$instances[$key])) {
                return SpeciesauthorsnamesPeer::$instances[$key];
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
        foreach (SpeciesauthorsnamesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SpeciesauthorsnamesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to speciesauthorsnames
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
        if ($row[$startcol + 12] === null) {
            return null;
        }

        return (string) $row[$startcol + 12];
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

        return (string) $row[$startcol + 12];
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
        $cls = SpeciesauthorsnamesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SpeciesauthorsnamesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SpeciesauthorsnamesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpeciesauthorsnamesPeer::addInstanceToPool($obj, $key);
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
     * @return array (Speciesauthorsnames object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SpeciesauthorsnamesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SpeciesauthorsnamesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SpeciesauthorsnamesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpeciesauthorsnamesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SpeciesauthorsnamesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(SpeciesauthorsnamesPeer::DATABASE_NAME)->getTable(SpeciesauthorsnamesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSpeciesauthorsnamesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSpeciesauthorsnamesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SpeciesauthorsnamesTableMap());
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
        return SpeciesauthorsnamesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Speciesauthorsnames or Criteria object.
     *
     * @param      mixed $values Criteria or Speciesauthorsnames object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SpeciesauthorsnamesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Speciesauthorsnames object
        }

        if ($criteria->containsKey(SpeciesauthorsnamesPeer::PKID) && $criteria->keyContainsValue(SpeciesauthorsnamesPeer::PKID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpeciesauthorsnamesPeer::PKID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(SpeciesauthorsnamesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Speciesauthorsnames or Criteria object.
     *
     * @param      mixed $values Criteria or Speciesauthorsnames object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SpeciesauthorsnamesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SpeciesauthorsnamesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SpeciesauthorsnamesPeer::PKID);
            $value = $criteria->remove(SpeciesauthorsnamesPeer::PKID);
            if ($value) {
                $selectCriteria->add(SpeciesauthorsnamesPeer::PKID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SpeciesauthorsnamesPeer::TABLE_NAME);
            }

        } else { // $values is Speciesauthorsnames object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SpeciesauthorsnamesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the speciesauthorsnames table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SpeciesauthorsnamesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SpeciesauthorsnamesPeer::TABLE_NAME, $con, SpeciesauthorsnamesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpeciesauthorsnamesPeer::clearInstancePool();
            SpeciesauthorsnamesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Speciesauthorsnames or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Speciesauthorsnames object or primary key or array of primary keys
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
            $con = Propel::getConnection(SpeciesauthorsnamesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SpeciesauthorsnamesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Speciesauthorsnames) { // it's a model object
            // invalidate the cache for this single object
            SpeciesauthorsnamesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpeciesauthorsnamesPeer::DATABASE_NAME);
            $criteria->add(SpeciesauthorsnamesPeer::PKID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                SpeciesauthorsnamesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SpeciesauthorsnamesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SpeciesauthorsnamesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Speciesauthorsnames object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Speciesauthorsnames $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SpeciesauthorsnamesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SpeciesauthorsnamesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SpeciesauthorsnamesPeer::DATABASE_NAME, SpeciesauthorsnamesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Speciesauthorsnames
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = SpeciesauthorsnamesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SpeciesauthorsnamesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(SpeciesauthorsnamesPeer::DATABASE_NAME);
        $criteria->add(SpeciesauthorsnamesPeer::PKID, $pk);

        $v = SpeciesauthorsnamesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Speciesauthorsnames[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SpeciesauthorsnamesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(SpeciesauthorsnamesPeer::DATABASE_NAME);
            $criteria->add(SpeciesauthorsnamesPeer::PKID, $pks, Criteria::IN);
            $objs = SpeciesauthorsnamesPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseSpeciesauthorsnamesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSpeciesauthorsnamesPeer::buildTableMap();

