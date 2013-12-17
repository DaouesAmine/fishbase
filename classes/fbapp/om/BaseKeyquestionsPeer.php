<?php


/**
 * Base static class for performing query and update operations on the 'keyquestions' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseKeyquestionsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'keyquestions';

    /** the related Propel class for this table */
    const OM_CLASS = 'Keyquestions';

    /** the related TableMap class for this table */
    const TM_CLASS = 'KeyquestionsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the autoctr field */
    const AUTOCTR = 'keyquestions.autoctr';

    /** the column name for the KeyCode field */
    const KEYCODE = 'keyquestions.KeyCode';

    /** the column name for the CoupleNum field */
    const COUPLENUM = 'keyquestions.CoupleNum';

    /** the column name for the CouplePart field */
    const COUPLEPART = 'keyquestions.CouplePart';

    /** the column name for the Question field */
    const QUESTION = 'keyquestions.Question';

    /** the column name for the NextCouple field */
    const NEXTCOUPLE = 'keyquestions.NextCouple';

    /** the column name for the PrevCouple field */
    const PREVCOUPLE = 'keyquestions.PrevCouple';

    /** the column name for the OrdNum field */
    const ORDNUM = 'keyquestions.OrdNum';

    /** the column name for the FamCode field */
    const FAMCODE = 'keyquestions.FamCode';

    /** the column name for the Genus field */
    const GENUS = 'keyquestions.Genus';

    /** the column name for the Gencode field */
    const GENCODE = 'keyquestions.Gencode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'keyquestions.SpecCode';

    /** the column name for the Syncode field */
    const SYNCODE = 'keyquestions.Syncode';

    /** the column name for the PicName field */
    const PICNAME = 'keyquestions.PicName';

    /** the column name for the NextKey field */
    const NEXTKEY = 'keyquestions.NextKey';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'keyquestions.DateEntered';

    /** the column name for the TS field */
    const TS = 'keyquestions.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Keyquestions objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Keyquestions[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. KeyquestionsPeer::$fieldNames[KeyquestionsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Keycode', 'Couplenum', 'Couplepart', 'Question', 'Nextcouple', 'Prevcouple', 'Ordnum', 'Famcode', 'Genus', 'Gencode', 'Speccode', 'Syncode', 'Picname', 'Nextkey', 'Dateentered', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'keycode', 'couplenum', 'couplepart', 'question', 'nextcouple', 'prevcouple', 'ordnum', 'famcode', 'genus', 'gencode', 'speccode', 'syncode', 'picname', 'nextkey', 'dateentered', 'ts', ),
        BasePeer::TYPE_COLNAME => array (KeyquestionsPeer::AUTOCTR, KeyquestionsPeer::KEYCODE, KeyquestionsPeer::COUPLENUM, KeyquestionsPeer::COUPLEPART, KeyquestionsPeer::QUESTION, KeyquestionsPeer::NEXTCOUPLE, KeyquestionsPeer::PREVCOUPLE, KeyquestionsPeer::ORDNUM, KeyquestionsPeer::FAMCODE, KeyquestionsPeer::GENUS, KeyquestionsPeer::GENCODE, KeyquestionsPeer::SPECCODE, KeyquestionsPeer::SYNCODE, KeyquestionsPeer::PICNAME, KeyquestionsPeer::NEXTKEY, KeyquestionsPeer::DATEENTERED, KeyquestionsPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'KEYCODE', 'COUPLENUM', 'COUPLEPART', 'QUESTION', 'NEXTCOUPLE', 'PREVCOUPLE', 'ORDNUM', 'FAMCODE', 'GENUS', 'GENCODE', 'SPECCODE', 'SYNCODE', 'PICNAME', 'NEXTKEY', 'DATEENTERED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'KeyCode', 'CoupleNum', 'CouplePart', 'Question', 'NextCouple', 'PrevCouple', 'OrdNum', 'FamCode', 'Genus', 'Gencode', 'SpecCode', 'Syncode', 'PicName', 'NextKey', 'DateEntered', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. KeyquestionsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Keycode' => 1, 'Couplenum' => 2, 'Couplepart' => 3, 'Question' => 4, 'Nextcouple' => 5, 'Prevcouple' => 6, 'Ordnum' => 7, 'Famcode' => 8, 'Genus' => 9, 'Gencode' => 10, 'Speccode' => 11, 'Syncode' => 12, 'Picname' => 13, 'Nextkey' => 14, 'Dateentered' => 15, 'Ts' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'keycode' => 1, 'couplenum' => 2, 'couplepart' => 3, 'question' => 4, 'nextcouple' => 5, 'prevcouple' => 6, 'ordnum' => 7, 'famcode' => 8, 'genus' => 9, 'gencode' => 10, 'speccode' => 11, 'syncode' => 12, 'picname' => 13, 'nextkey' => 14, 'dateentered' => 15, 'ts' => 16, ),
        BasePeer::TYPE_COLNAME => array (KeyquestionsPeer::AUTOCTR => 0, KeyquestionsPeer::KEYCODE => 1, KeyquestionsPeer::COUPLENUM => 2, KeyquestionsPeer::COUPLEPART => 3, KeyquestionsPeer::QUESTION => 4, KeyquestionsPeer::NEXTCOUPLE => 5, KeyquestionsPeer::PREVCOUPLE => 6, KeyquestionsPeer::ORDNUM => 7, KeyquestionsPeer::FAMCODE => 8, KeyquestionsPeer::GENUS => 9, KeyquestionsPeer::GENCODE => 10, KeyquestionsPeer::SPECCODE => 11, KeyquestionsPeer::SYNCODE => 12, KeyquestionsPeer::PICNAME => 13, KeyquestionsPeer::NEXTKEY => 14, KeyquestionsPeer::DATEENTERED => 15, KeyquestionsPeer::TS => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'KEYCODE' => 1, 'COUPLENUM' => 2, 'COUPLEPART' => 3, 'QUESTION' => 4, 'NEXTCOUPLE' => 5, 'PREVCOUPLE' => 6, 'ORDNUM' => 7, 'FAMCODE' => 8, 'GENUS' => 9, 'GENCODE' => 10, 'SPECCODE' => 11, 'SYNCODE' => 12, 'PICNAME' => 13, 'NEXTKEY' => 14, 'DATEENTERED' => 15, 'TS' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'KeyCode' => 1, 'CoupleNum' => 2, 'CouplePart' => 3, 'Question' => 4, 'NextCouple' => 5, 'PrevCouple' => 6, 'OrdNum' => 7, 'FamCode' => 8, 'Genus' => 9, 'Gencode' => 10, 'SpecCode' => 11, 'Syncode' => 12, 'PicName' => 13, 'NextKey' => 14, 'DateEntered' => 15, 'TS' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $toNames = KeyquestionsPeer::getFieldNames($toType);
        $key = isset(KeyquestionsPeer::$fieldKeys[$fromType][$name]) ? KeyquestionsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(KeyquestionsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, KeyquestionsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return KeyquestionsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. KeyquestionsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(KeyquestionsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(KeyquestionsPeer::AUTOCTR);
            $criteria->addSelectColumn(KeyquestionsPeer::KEYCODE);
            $criteria->addSelectColumn(KeyquestionsPeer::COUPLENUM);
            $criteria->addSelectColumn(KeyquestionsPeer::COUPLEPART);
            $criteria->addSelectColumn(KeyquestionsPeer::QUESTION);
            $criteria->addSelectColumn(KeyquestionsPeer::NEXTCOUPLE);
            $criteria->addSelectColumn(KeyquestionsPeer::PREVCOUPLE);
            $criteria->addSelectColumn(KeyquestionsPeer::ORDNUM);
            $criteria->addSelectColumn(KeyquestionsPeer::FAMCODE);
            $criteria->addSelectColumn(KeyquestionsPeer::GENUS);
            $criteria->addSelectColumn(KeyquestionsPeer::GENCODE);
            $criteria->addSelectColumn(KeyquestionsPeer::SPECCODE);
            $criteria->addSelectColumn(KeyquestionsPeer::SYNCODE);
            $criteria->addSelectColumn(KeyquestionsPeer::PICNAME);
            $criteria->addSelectColumn(KeyquestionsPeer::NEXTKEY);
            $criteria->addSelectColumn(KeyquestionsPeer::DATEENTERED);
            $criteria->addSelectColumn(KeyquestionsPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.KeyCode');
            $criteria->addSelectColumn($alias . '.CoupleNum');
            $criteria->addSelectColumn($alias . '.CouplePart');
            $criteria->addSelectColumn($alias . '.Question');
            $criteria->addSelectColumn($alias . '.NextCouple');
            $criteria->addSelectColumn($alias . '.PrevCouple');
            $criteria->addSelectColumn($alias . '.OrdNum');
            $criteria->addSelectColumn($alias . '.FamCode');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Gencode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Syncode');
            $criteria->addSelectColumn($alias . '.PicName');
            $criteria->addSelectColumn($alias . '.NextKey');
            $criteria->addSelectColumn($alias . '.DateEntered');
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
        $criteria->setPrimaryTableName(KeyquestionsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            KeyquestionsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(KeyquestionsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(KeyquestionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Keyquestions
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = KeyquestionsPeer::doSelect($critcopy, $con);
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
        return KeyquestionsPeer::populateObjects(KeyquestionsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(KeyquestionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            KeyquestionsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(KeyquestionsPeer::DATABASE_NAME);

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
     * @param Keyquestions $obj A Keyquestions object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getKeycode(), (string) $obj->getCouplenum(), (string) $obj->getCouplepart()));
            } // if key === null
            KeyquestionsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Keyquestions object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Keyquestions) {
                $key = serialize(array((string) $value->getKeycode(), (string) $value->getCouplenum(), (string) $value->getCouplepart()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Keyquestions object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(KeyquestionsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Keyquestions Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(KeyquestionsPeer::$instances[$key])) {
                return KeyquestionsPeer::$instances[$key];
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
        foreach (KeyquestionsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        KeyquestionsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to keyquestions
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

        return array((int) $row[$startcol + 1], (int) $row[$startcol + 2], (string) $row[$startcol + 3]);
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
        $cls = KeyquestionsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = KeyquestionsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = KeyquestionsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                KeyquestionsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Keyquestions object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = KeyquestionsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = KeyquestionsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + KeyquestionsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = KeyquestionsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            KeyquestionsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(KeyquestionsPeer::DATABASE_NAME)->getTable(KeyquestionsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseKeyquestionsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseKeyquestionsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \KeyquestionsTableMap());
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
        return KeyquestionsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Keyquestions or Criteria object.
     *
     * @param      mixed $values Criteria or Keyquestions object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(KeyquestionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Keyquestions object
        }


        // Set the correct dbName
        $criteria->setDbName(KeyquestionsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Keyquestions or Criteria object.
     *
     * @param      mixed $values Criteria or Keyquestions object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(KeyquestionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(KeyquestionsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(KeyquestionsPeer::KEYCODE);
            $value = $criteria->remove(KeyquestionsPeer::KEYCODE);
            if ($value) {
                $selectCriteria->add(KeyquestionsPeer::KEYCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(KeyquestionsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(KeyquestionsPeer::COUPLENUM);
            $value = $criteria->remove(KeyquestionsPeer::COUPLENUM);
            if ($value) {
                $selectCriteria->add(KeyquestionsPeer::COUPLENUM, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(KeyquestionsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(KeyquestionsPeer::COUPLEPART);
            $value = $criteria->remove(KeyquestionsPeer::COUPLEPART);
            if ($value) {
                $selectCriteria->add(KeyquestionsPeer::COUPLEPART, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(KeyquestionsPeer::TABLE_NAME);
            }

        } else { // $values is Keyquestions object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(KeyquestionsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the keyquestions table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(KeyquestionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(KeyquestionsPeer::TABLE_NAME, $con, KeyquestionsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            KeyquestionsPeer::clearInstancePool();
            KeyquestionsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Keyquestions or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Keyquestions object or primary key or array of primary keys
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
            $con = Propel::getConnection(KeyquestionsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            KeyquestionsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Keyquestions) { // it's a model object
            // invalidate the cache for this single object
            KeyquestionsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(KeyquestionsPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(KeyquestionsPeer::KEYCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(KeyquestionsPeer::COUPLENUM, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(KeyquestionsPeer::COUPLEPART, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                KeyquestionsPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(KeyquestionsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            KeyquestionsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Keyquestions object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Keyquestions $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(KeyquestionsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(KeyquestionsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(KeyquestionsPeer::DATABASE_NAME, KeyquestionsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $keycode
     * @param   int $couplenum
     * @param   string $couplepart
     * @param      PropelPDO $con
     * @return Keyquestions
     */
    public static function retrieveByPK($keycode, $couplenum, $couplepart, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $keycode, (string) $couplenum, (string) $couplepart));
         if (null !== ($obj = KeyquestionsPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(KeyquestionsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(KeyquestionsPeer::DATABASE_NAME);
        $criteria->add(KeyquestionsPeer::KEYCODE, $keycode);
        $criteria->add(KeyquestionsPeer::COUPLENUM, $couplenum);
        $criteria->add(KeyquestionsPeer::COUPLEPART, $couplepart);
        $v = KeyquestionsPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseKeyquestionsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseKeyquestionsPeer::buildTableMap();

