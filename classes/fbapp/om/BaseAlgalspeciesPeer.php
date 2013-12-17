<?php


/**
 * Base static class for performing query and update operations on the 'algalspecies' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseAlgalspeciesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'algalspecies';

    /** the related Propel class for this table */
    const OM_CLASS = 'Algalspecies';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AlgalspeciesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the Genus field */
    const GENUS = 'algalspecies.Genus';

    /** the column name for the Species field */
    const SPECIES = 'algalspecies.Species';

    /** the column name for the ScientificName field */
    const SCIENTIFICNAME = 'algalspecies.ScientificName';

    /** the column name for the GenusID field */
    const GENUSID = 'algalspecies.GenusID';

    /** the column name for the SpeciesID field */
    const SPECIESID = 'algalspecies.SpeciesID';

    /** the column name for the GenusDetailLink field */
    const GENUSDETAILLINK = 'algalspecies.GenusDetailLink';

    /** the column name for the SpeciesDetailLink field */
    const SPECIESDETAILLINK = 'algalspecies.SpeciesDetailLink';

    /** the column name for the PKID field */
    const PKID = 'algalspecies.PKID';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Algalspecies objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Algalspecies[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. AlgalspeciesPeer::$fieldNames[AlgalspeciesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Genus', 'Species', 'Scientificname', 'Genusid', 'Speciesid', 'Genusdetaillink', 'Speciesdetaillink', 'Pkid', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('genus', 'species', 'scientificname', 'genusid', 'speciesid', 'genusdetaillink', 'speciesdetaillink', 'pkid', ),
        BasePeer::TYPE_COLNAME => array (AlgalspeciesPeer::GENUS, AlgalspeciesPeer::SPECIES, AlgalspeciesPeer::SCIENTIFICNAME, AlgalspeciesPeer::GENUSID, AlgalspeciesPeer::SPECIESID, AlgalspeciesPeer::GENUSDETAILLINK, AlgalspeciesPeer::SPECIESDETAILLINK, AlgalspeciesPeer::PKID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('GENUS', 'SPECIES', 'SCIENTIFICNAME', 'GENUSID', 'SPECIESID', 'GENUSDETAILLINK', 'SPECIESDETAILLINK', 'PKID', ),
        BasePeer::TYPE_FIELDNAME => array ('Genus', 'Species', 'ScientificName', 'GenusID', 'SpeciesID', 'GenusDetailLink', 'SpeciesDetailLink', 'PKID', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. AlgalspeciesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Genus' => 0, 'Species' => 1, 'Scientificname' => 2, 'Genusid' => 3, 'Speciesid' => 4, 'Genusdetaillink' => 5, 'Speciesdetaillink' => 6, 'Pkid' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('genus' => 0, 'species' => 1, 'scientificname' => 2, 'genusid' => 3, 'speciesid' => 4, 'genusdetaillink' => 5, 'speciesdetaillink' => 6, 'pkid' => 7, ),
        BasePeer::TYPE_COLNAME => array (AlgalspeciesPeer::GENUS => 0, AlgalspeciesPeer::SPECIES => 1, AlgalspeciesPeer::SCIENTIFICNAME => 2, AlgalspeciesPeer::GENUSID => 3, AlgalspeciesPeer::SPECIESID => 4, AlgalspeciesPeer::GENUSDETAILLINK => 5, AlgalspeciesPeer::SPECIESDETAILLINK => 6, AlgalspeciesPeer::PKID => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('GENUS' => 0, 'SPECIES' => 1, 'SCIENTIFICNAME' => 2, 'GENUSID' => 3, 'SPECIESID' => 4, 'GENUSDETAILLINK' => 5, 'SPECIESDETAILLINK' => 6, 'PKID' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('Genus' => 0, 'Species' => 1, 'ScientificName' => 2, 'GenusID' => 3, 'SpeciesID' => 4, 'GenusDetailLink' => 5, 'SpeciesDetailLink' => 6, 'PKID' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
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
        $toNames = AlgalspeciesPeer::getFieldNames($toType);
        $key = isset(AlgalspeciesPeer::$fieldKeys[$fromType][$name]) ? AlgalspeciesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(AlgalspeciesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, AlgalspeciesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return AlgalspeciesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. AlgalspeciesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AlgalspeciesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AlgalspeciesPeer::GENUS);
            $criteria->addSelectColumn(AlgalspeciesPeer::SPECIES);
            $criteria->addSelectColumn(AlgalspeciesPeer::SCIENTIFICNAME);
            $criteria->addSelectColumn(AlgalspeciesPeer::GENUSID);
            $criteria->addSelectColumn(AlgalspeciesPeer::SPECIESID);
            $criteria->addSelectColumn(AlgalspeciesPeer::GENUSDETAILLINK);
            $criteria->addSelectColumn(AlgalspeciesPeer::SPECIESDETAILLINK);
            $criteria->addSelectColumn(AlgalspeciesPeer::PKID);
        } else {
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.ScientificName');
            $criteria->addSelectColumn($alias . '.GenusID');
            $criteria->addSelectColumn($alias . '.SpeciesID');
            $criteria->addSelectColumn($alias . '.GenusDetailLink');
            $criteria->addSelectColumn($alias . '.SpeciesDetailLink');
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
        $criteria->setPrimaryTableName(AlgalspeciesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AlgalspeciesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(AlgalspeciesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AlgalspeciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Algalspecies
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AlgalspeciesPeer::doSelect($critcopy, $con);
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
        return AlgalspeciesPeer::populateObjects(AlgalspeciesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AlgalspeciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AlgalspeciesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(AlgalspeciesPeer::DATABASE_NAME);

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
     * @param Algalspecies $obj A Algalspecies object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPkid();
            } // if key === null
            AlgalspeciesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Algalspecies object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Algalspecies) {
                $key = (string) $value->getPkid();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Algalspecies object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(AlgalspeciesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Algalspecies Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(AlgalspeciesPeer::$instances[$key])) {
                return AlgalspeciesPeer::$instances[$key];
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
        foreach (AlgalspeciesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        AlgalspeciesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to algalspecies
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
        if ($row[$startcol + 7] === null) {
            return null;
        }

        return (string) $row[$startcol + 7];
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

        return (string) $row[$startcol + 7];
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
        $cls = AlgalspeciesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AlgalspeciesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AlgalspeciesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AlgalspeciesPeer::addInstanceToPool($obj, $key);
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
     * @return array (Algalspecies object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AlgalspeciesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AlgalspeciesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AlgalspeciesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AlgalspeciesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AlgalspeciesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(AlgalspeciesPeer::DATABASE_NAME)->getTable(AlgalspeciesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseAlgalspeciesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseAlgalspeciesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \AlgalspeciesTableMap());
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
        return AlgalspeciesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Algalspecies or Criteria object.
     *
     * @param      mixed $values Criteria or Algalspecies object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AlgalspeciesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Algalspecies object
        }

        if ($criteria->containsKey(AlgalspeciesPeer::PKID) && $criteria->keyContainsValue(AlgalspeciesPeer::PKID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.AlgalspeciesPeer::PKID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(AlgalspeciesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Algalspecies or Criteria object.
     *
     * @param      mixed $values Criteria or Algalspecies object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AlgalspeciesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(AlgalspeciesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AlgalspeciesPeer::PKID);
            $value = $criteria->remove(AlgalspeciesPeer::PKID);
            if ($value) {
                $selectCriteria->add(AlgalspeciesPeer::PKID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AlgalspeciesPeer::TABLE_NAME);
            }

        } else { // $values is Algalspecies object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(AlgalspeciesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the algalspecies table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AlgalspeciesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(AlgalspeciesPeer::TABLE_NAME, $con, AlgalspeciesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AlgalspeciesPeer::clearInstancePool();
            AlgalspeciesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Algalspecies or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Algalspecies object or primary key or array of primary keys
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
            $con = Propel::getConnection(AlgalspeciesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            AlgalspeciesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Algalspecies) { // it's a model object
            // invalidate the cache for this single object
            AlgalspeciesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(AlgalspeciesPeer::DATABASE_NAME);
            $criteria->add(AlgalspeciesPeer::PKID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                AlgalspeciesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(AlgalspeciesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            AlgalspeciesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Algalspecies object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Algalspecies $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AlgalspeciesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AlgalspeciesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(AlgalspeciesPeer::DATABASE_NAME, AlgalspeciesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Algalspecies
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = AlgalspeciesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AlgalspeciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(AlgalspeciesPeer::DATABASE_NAME);
        $criteria->add(AlgalspeciesPeer::PKID, $pk);

        $v = AlgalspeciesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Algalspecies[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AlgalspeciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(AlgalspeciesPeer::DATABASE_NAME);
            $criteria->add(AlgalspeciesPeer::PKID, $pks, Criteria::IN);
            $objs = AlgalspeciesPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseAlgalspeciesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAlgalspeciesPeer::buildTableMap();

