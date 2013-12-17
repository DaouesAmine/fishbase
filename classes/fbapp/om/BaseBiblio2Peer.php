<?php


/**
 * Base static class for performing query and update operations on the 'biblio2' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseBiblio2Peer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'biblio2';

    /** the related Propel class for this table */
    const OM_CLASS = 'Biblio2';

    /** the related TableMap class for this table */
    const TM_CLASS = 'Biblio2TableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the autoctr field */
    const AUTOCTR = 'biblio2.autoctr';

    /** the column name for the RefNo field */
    const REFNO = 'biblio2.RefNo';

    /** the column name for the SynCodePrimary field */
    const SYNCODEPRIMARY = 'biblio2.SynCodePrimary';

    /** the column name for the SynCode field */
    const SYNCODE = 'biblio2.SynCode';

    /** the column name for the RefPage field */
    const REFPAGE = 'biblio2.RefPage';

    /** the column name for the PageFirst field */
    const PAGEFIRST = 'biblio2.PageFirst';

    /** the column name for the PageInSort field */
    const PAGEINSORT = 'biblio2.PageInSort';

    /** the column name for the Locality field */
    const LOCALITY = 'biblio2.Locality';

    /** the column name for the Comment field */
    const COMMENT = 'biblio2.Comment';

    /** the column name for the Quote field */
    const QUOTE = 'biblio2.Quote';

    /** the column name for the Entered field */
    const ENTERED = 'biblio2.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'biblio2.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'biblio2.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'biblio2.DateModified';

    /** the column name for the TS field */
    const TS = 'biblio2.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Biblio2 objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Biblio2[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. Biblio2Peer::$fieldNames[Biblio2Peer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Refno', 'Syncodeprimary', 'Syncode', 'Refpage', 'Pagefirst', 'Pageinsort', 'Locality', 'Comment', 'Quote', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'refno', 'syncodeprimary', 'syncode', 'refpage', 'pagefirst', 'pageinsort', 'locality', 'comment', 'quote', 'entered', 'dateentered', 'modified', 'datemodified', 'ts', ),
        BasePeer::TYPE_COLNAME => array (Biblio2Peer::AUTOCTR, Biblio2Peer::REFNO, Biblio2Peer::SYNCODEPRIMARY, Biblio2Peer::SYNCODE, Biblio2Peer::REFPAGE, Biblio2Peer::PAGEFIRST, Biblio2Peer::PAGEINSORT, Biblio2Peer::LOCALITY, Biblio2Peer::COMMENT, Biblio2Peer::QUOTE, Biblio2Peer::ENTERED, Biblio2Peer::DATEENTERED, Biblio2Peer::MODIFIED, Biblio2Peer::DATEMODIFIED, Biblio2Peer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'REFNO', 'SYNCODEPRIMARY', 'SYNCODE', 'REFPAGE', 'PAGEFIRST', 'PAGEINSORT', 'LOCALITY', 'COMMENT', 'QUOTE', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'RefNo', 'SynCodePrimary', 'SynCode', 'RefPage', 'PageFirst', 'PageInSort', 'Locality', 'Comment', 'Quote', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. Biblio2Peer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Refno' => 1, 'Syncodeprimary' => 2, 'Syncode' => 3, 'Refpage' => 4, 'Pagefirst' => 5, 'Pageinsort' => 6, 'Locality' => 7, 'Comment' => 8, 'Quote' => 9, 'Entered' => 10, 'Dateentered' => 11, 'Modified' => 12, 'Datemodified' => 13, 'Ts' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'refno' => 1, 'syncodeprimary' => 2, 'syncode' => 3, 'refpage' => 4, 'pagefirst' => 5, 'pageinsort' => 6, 'locality' => 7, 'comment' => 8, 'quote' => 9, 'entered' => 10, 'dateentered' => 11, 'modified' => 12, 'datemodified' => 13, 'ts' => 14, ),
        BasePeer::TYPE_COLNAME => array (Biblio2Peer::AUTOCTR => 0, Biblio2Peer::REFNO => 1, Biblio2Peer::SYNCODEPRIMARY => 2, Biblio2Peer::SYNCODE => 3, Biblio2Peer::REFPAGE => 4, Biblio2Peer::PAGEFIRST => 5, Biblio2Peer::PAGEINSORT => 6, Biblio2Peer::LOCALITY => 7, Biblio2Peer::COMMENT => 8, Biblio2Peer::QUOTE => 9, Biblio2Peer::ENTERED => 10, Biblio2Peer::DATEENTERED => 11, Biblio2Peer::MODIFIED => 12, Biblio2Peer::DATEMODIFIED => 13, Biblio2Peer::TS => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'REFNO' => 1, 'SYNCODEPRIMARY' => 2, 'SYNCODE' => 3, 'REFPAGE' => 4, 'PAGEFIRST' => 5, 'PAGEINSORT' => 6, 'LOCALITY' => 7, 'COMMENT' => 8, 'QUOTE' => 9, 'ENTERED' => 10, 'DATEENTERED' => 11, 'MODIFIED' => 12, 'DATEMODIFIED' => 13, 'TS' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'RefNo' => 1, 'SynCodePrimary' => 2, 'SynCode' => 3, 'RefPage' => 4, 'PageFirst' => 5, 'PageInSort' => 6, 'Locality' => 7, 'Comment' => 8, 'Quote' => 9, 'Entered' => 10, 'DateEntered' => 11, 'Modified' => 12, 'DateModified' => 13, 'TS' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
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
        $toNames = Biblio2Peer::getFieldNames($toType);
        $key = isset(Biblio2Peer::$fieldKeys[$fromType][$name]) ? Biblio2Peer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(Biblio2Peer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, Biblio2Peer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return Biblio2Peer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. Biblio2Peer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(Biblio2Peer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(Biblio2Peer::AUTOCTR);
            $criteria->addSelectColumn(Biblio2Peer::REFNO);
            $criteria->addSelectColumn(Biblio2Peer::SYNCODEPRIMARY);
            $criteria->addSelectColumn(Biblio2Peer::SYNCODE);
            $criteria->addSelectColumn(Biblio2Peer::REFPAGE);
            $criteria->addSelectColumn(Biblio2Peer::PAGEFIRST);
            $criteria->addSelectColumn(Biblio2Peer::PAGEINSORT);
            $criteria->addSelectColumn(Biblio2Peer::LOCALITY);
            $criteria->addSelectColumn(Biblio2Peer::COMMENT);
            $criteria->addSelectColumn(Biblio2Peer::QUOTE);
            $criteria->addSelectColumn(Biblio2Peer::ENTERED);
            $criteria->addSelectColumn(Biblio2Peer::DATEENTERED);
            $criteria->addSelectColumn(Biblio2Peer::MODIFIED);
            $criteria->addSelectColumn(Biblio2Peer::DATEMODIFIED);
            $criteria->addSelectColumn(Biblio2Peer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.RefNo');
            $criteria->addSelectColumn($alias . '.SynCodePrimary');
            $criteria->addSelectColumn($alias . '.SynCode');
            $criteria->addSelectColumn($alias . '.RefPage');
            $criteria->addSelectColumn($alias . '.PageFirst');
            $criteria->addSelectColumn($alias . '.PageInSort');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.Quote');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
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
        $criteria->setPrimaryTableName(Biblio2Peer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            Biblio2Peer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(Biblio2Peer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(Biblio2Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Biblio2
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = Biblio2Peer::doSelect($critcopy, $con);
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
        return Biblio2Peer::populateObjects(Biblio2Peer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(Biblio2Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            Biblio2Peer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(Biblio2Peer::DATABASE_NAME);

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
     * @param Biblio2 $obj A Biblio2 object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getRefno(), (string) $obj->getSyncodeprimary(), (string) $obj->getSyncode()));
            } // if key === null
            Biblio2Peer::$instances[$key] = $obj;
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
     * @param      mixed $value A Biblio2 object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Biblio2) {
                $key = serialize(array((string) $value->getRefno(), (string) $value->getSyncodeprimary(), (string) $value->getSyncode()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Biblio2 object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(Biblio2Peer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Biblio2 Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(Biblio2Peer::$instances[$key])) {
                return Biblio2Peer::$instances[$key];
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
        foreach (Biblio2Peer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        Biblio2Peer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to biblio2
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
        if ($row[$startcol + 1] === null && $row[$startcol + 2] === null && $row[$startcol + 3] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 3]));
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

        return array((int) $row[$startcol + 1], (int) $row[$startcol + 2], (int) $row[$startcol + 3]);
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
        $cls = Biblio2Peer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = Biblio2Peer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = Biblio2Peer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                Biblio2Peer::addInstanceToPool($obj, $key);
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
     * @return array (Biblio2 object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = Biblio2Peer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = Biblio2Peer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + Biblio2Peer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = Biblio2Peer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            Biblio2Peer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(Biblio2Peer::DATABASE_NAME)->getTable(Biblio2Peer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseBiblio2Peer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseBiblio2Peer::TABLE_NAME)) {
        $dbMap->addTableObject(new \Biblio2TableMap());
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
        return Biblio2Peer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Biblio2 or Criteria object.
     *
     * @param      mixed $values Criteria or Biblio2 object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(Biblio2Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Biblio2 object
        }


        // Set the correct dbName
        $criteria->setDbName(Biblio2Peer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Biblio2 or Criteria object.
     *
     * @param      mixed $values Criteria or Biblio2 object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(Biblio2Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(Biblio2Peer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(Biblio2Peer::REFNO);
            $value = $criteria->remove(Biblio2Peer::REFNO);
            if ($value) {
                $selectCriteria->add(Biblio2Peer::REFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(Biblio2Peer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(Biblio2Peer::SYNCODEPRIMARY);
            $value = $criteria->remove(Biblio2Peer::SYNCODEPRIMARY);
            if ($value) {
                $selectCriteria->add(Biblio2Peer::SYNCODEPRIMARY, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(Biblio2Peer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(Biblio2Peer::SYNCODE);
            $value = $criteria->remove(Biblio2Peer::SYNCODE);
            if ($value) {
                $selectCriteria->add(Biblio2Peer::SYNCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(Biblio2Peer::TABLE_NAME);
            }

        } else { // $values is Biblio2 object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(Biblio2Peer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the biblio2 table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(Biblio2Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(Biblio2Peer::TABLE_NAME, $con, Biblio2Peer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            Biblio2Peer::clearInstancePool();
            Biblio2Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Biblio2 or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Biblio2 object or primary key or array of primary keys
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
            $con = Propel::getConnection(Biblio2Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            Biblio2Peer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Biblio2) { // it's a model object
            // invalidate the cache for this single object
            Biblio2Peer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(Biblio2Peer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(Biblio2Peer::REFNO, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(Biblio2Peer::SYNCODEPRIMARY, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(Biblio2Peer::SYNCODE, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                Biblio2Peer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(Biblio2Peer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            Biblio2Peer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Biblio2 object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Biblio2 $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(Biblio2Peer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(Biblio2Peer::TABLE_NAME);

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

        return BasePeer::doValidate(Biblio2Peer::DATABASE_NAME, Biblio2Peer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $refno
     * @param   int $syncodeprimary
     * @param   int $syncode
     * @param      PropelPDO $con
     * @return Biblio2
     */
    public static function retrieveByPK($refno, $syncodeprimary, $syncode, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $refno, (string) $syncodeprimary, (string) $syncode));
         if (null !== ($obj = Biblio2Peer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(Biblio2Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(Biblio2Peer::DATABASE_NAME);
        $criteria->add(Biblio2Peer::REFNO, $refno);
        $criteria->add(Biblio2Peer::SYNCODEPRIMARY, $syncodeprimary);
        $criteria->add(Biblio2Peer::SYNCODE, $syncode);
        $v = Biblio2Peer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseBiblio2Peer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseBiblio2Peer::buildTableMap();

