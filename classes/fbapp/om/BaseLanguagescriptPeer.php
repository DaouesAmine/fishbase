<?php


/**
 * Base static class for performing query and update operations on the 'languagescript' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseLanguagescriptPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'languagescript';

    /** the related Propel class for this table */
    const OM_CLASS = 'Languagescript';

    /** the related TableMap class for this table */
    const TM_CLASS = 'LanguagescriptTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the ScriptCode field */
    const SCRIPTCODE = 'languagescript.ScriptCode';

    /** the column name for the ScriptName field */
    const SCRIPTNAME = 'languagescript.ScriptName';

    /** the column name for the ActualScript field */
    const ACTUALSCRIPT = 'languagescript.ActualScript';

    /** the column name for the UnicodeText field */
    const UNICODETEXT = 'languagescript.UnicodeText';

    /** the column name for the LangCode field */
    const LANGCODE = 'languagescript.LangCode';

    /** the column name for the C_Code field */
    const C_CODE = 'languagescript.C_Code';

    /** the column name for the ScriptRef field */
    const SCRIPTREF = 'languagescript.ScriptRef';

    /** the column name for the Remarks field */
    const REMARKS = 'languagescript.Remarks';

    /** the column name for the Used field */
    const USED = 'languagescript.Used';

    /** the column name for the Entered field */
    const ENTERED = 'languagescript.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'languagescript.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'languagescript.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'languagescript.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'languagescript.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'languagescript.DateChecked';

    /** the column name for the TS field */
    const TS = 'languagescript.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Languagescript objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Languagescript[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. LanguagescriptPeer::$fieldNames[LanguagescriptPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Scriptcode', 'Scriptname', 'Actualscript', 'Unicodetext', 'Langcode', 'CCode', 'Scriptref', 'Remarks', 'Used', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('scriptcode', 'scriptname', 'actualscript', 'unicodetext', 'langcode', 'cCode', 'scriptref', 'remarks', 'used', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (LanguagescriptPeer::SCRIPTCODE, LanguagescriptPeer::SCRIPTNAME, LanguagescriptPeer::ACTUALSCRIPT, LanguagescriptPeer::UNICODETEXT, LanguagescriptPeer::LANGCODE, LanguagescriptPeer::C_CODE, LanguagescriptPeer::SCRIPTREF, LanguagescriptPeer::REMARKS, LanguagescriptPeer::USED, LanguagescriptPeer::ENTERED, LanguagescriptPeer::DATEENTERED, LanguagescriptPeer::MODIFIED, LanguagescriptPeer::DATEMODIFIED, LanguagescriptPeer::EXPERT, LanguagescriptPeer::DATECHECKED, LanguagescriptPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SCRIPTCODE', 'SCRIPTNAME', 'ACTUALSCRIPT', 'UNICODETEXT', 'LANGCODE', 'C_CODE', 'SCRIPTREF', 'REMARKS', 'USED', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('ScriptCode', 'ScriptName', 'ActualScript', 'UnicodeText', 'LangCode', 'C_Code', 'ScriptRef', 'Remarks', 'Used', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. LanguagescriptPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Scriptcode' => 0, 'Scriptname' => 1, 'Actualscript' => 2, 'Unicodetext' => 3, 'Langcode' => 4, 'CCode' => 5, 'Scriptref' => 6, 'Remarks' => 7, 'Used' => 8, 'Entered' => 9, 'Dateentered' => 10, 'Modified' => 11, 'Datemodified' => 12, 'Expert' => 13, 'Datechecked' => 14, 'Ts' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('scriptcode' => 0, 'scriptname' => 1, 'actualscript' => 2, 'unicodetext' => 3, 'langcode' => 4, 'cCode' => 5, 'scriptref' => 6, 'remarks' => 7, 'used' => 8, 'entered' => 9, 'dateentered' => 10, 'modified' => 11, 'datemodified' => 12, 'expert' => 13, 'datechecked' => 14, 'ts' => 15, ),
        BasePeer::TYPE_COLNAME => array (LanguagescriptPeer::SCRIPTCODE => 0, LanguagescriptPeer::SCRIPTNAME => 1, LanguagescriptPeer::ACTUALSCRIPT => 2, LanguagescriptPeer::UNICODETEXT => 3, LanguagescriptPeer::LANGCODE => 4, LanguagescriptPeer::C_CODE => 5, LanguagescriptPeer::SCRIPTREF => 6, LanguagescriptPeer::REMARKS => 7, LanguagescriptPeer::USED => 8, LanguagescriptPeer::ENTERED => 9, LanguagescriptPeer::DATEENTERED => 10, LanguagescriptPeer::MODIFIED => 11, LanguagescriptPeer::DATEMODIFIED => 12, LanguagescriptPeer::EXPERT => 13, LanguagescriptPeer::DATECHECKED => 14, LanguagescriptPeer::TS => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SCRIPTCODE' => 0, 'SCRIPTNAME' => 1, 'ACTUALSCRIPT' => 2, 'UNICODETEXT' => 3, 'LANGCODE' => 4, 'C_CODE' => 5, 'SCRIPTREF' => 6, 'REMARKS' => 7, 'USED' => 8, 'ENTERED' => 9, 'DATEENTERED' => 10, 'MODIFIED' => 11, 'DATEMODIFIED' => 12, 'EXPERT' => 13, 'DATECHECKED' => 14, 'TS' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('ScriptCode' => 0, 'ScriptName' => 1, 'ActualScript' => 2, 'UnicodeText' => 3, 'LangCode' => 4, 'C_Code' => 5, 'ScriptRef' => 6, 'Remarks' => 7, 'Used' => 8, 'Entered' => 9, 'DateEntered' => 10, 'Modified' => 11, 'DateModified' => 12, 'Expert' => 13, 'DateChecked' => 14, 'TS' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $toNames = LanguagescriptPeer::getFieldNames($toType);
        $key = isset(LanguagescriptPeer::$fieldKeys[$fromType][$name]) ? LanguagescriptPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(LanguagescriptPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, LanguagescriptPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return LanguagescriptPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. LanguagescriptPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(LanguagescriptPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(LanguagescriptPeer::SCRIPTCODE);
            $criteria->addSelectColumn(LanguagescriptPeer::SCRIPTNAME);
            $criteria->addSelectColumn(LanguagescriptPeer::ACTUALSCRIPT);
            $criteria->addSelectColumn(LanguagescriptPeer::UNICODETEXT);
            $criteria->addSelectColumn(LanguagescriptPeer::LANGCODE);
            $criteria->addSelectColumn(LanguagescriptPeer::C_CODE);
            $criteria->addSelectColumn(LanguagescriptPeer::SCRIPTREF);
            $criteria->addSelectColumn(LanguagescriptPeer::REMARKS);
            $criteria->addSelectColumn(LanguagescriptPeer::USED);
            $criteria->addSelectColumn(LanguagescriptPeer::ENTERED);
            $criteria->addSelectColumn(LanguagescriptPeer::DATEENTERED);
            $criteria->addSelectColumn(LanguagescriptPeer::MODIFIED);
            $criteria->addSelectColumn(LanguagescriptPeer::DATEMODIFIED);
            $criteria->addSelectColumn(LanguagescriptPeer::EXPERT);
            $criteria->addSelectColumn(LanguagescriptPeer::DATECHECKED);
            $criteria->addSelectColumn(LanguagescriptPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.ScriptCode');
            $criteria->addSelectColumn($alias . '.ScriptName');
            $criteria->addSelectColumn($alias . '.ActualScript');
            $criteria->addSelectColumn($alias . '.UnicodeText');
            $criteria->addSelectColumn($alias . '.LangCode');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.ScriptRef');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.Used');
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
        $criteria->setPrimaryTableName(LanguagescriptPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LanguagescriptPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(LanguagescriptPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(LanguagescriptPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Languagescript
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = LanguagescriptPeer::doSelect($critcopy, $con);
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
        return LanguagescriptPeer::populateObjects(LanguagescriptPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(LanguagescriptPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            LanguagescriptPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(LanguagescriptPeer::DATABASE_NAME);

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
     * @param Languagescript $obj A Languagescript object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getScriptname();
            } // if key === null
            LanguagescriptPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Languagescript object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Languagescript) {
                $key = (string) $value->getScriptname();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Languagescript object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(LanguagescriptPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Languagescript Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(LanguagescriptPeer::$instances[$key])) {
                return LanguagescriptPeer::$instances[$key];
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
        foreach (LanguagescriptPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        LanguagescriptPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to languagescript
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
        if ($row[$startcol + 1] === null) {
            return null;
        }

        return (string) $row[$startcol + 1];
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

        return (string) $row[$startcol + 1];
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
        $cls = LanguagescriptPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = LanguagescriptPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = LanguagescriptPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                LanguagescriptPeer::addInstanceToPool($obj, $key);
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
     * @return array (Languagescript object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = LanguagescriptPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = LanguagescriptPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + LanguagescriptPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = LanguagescriptPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            LanguagescriptPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(LanguagescriptPeer::DATABASE_NAME)->getTable(LanguagescriptPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseLanguagescriptPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseLanguagescriptPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \LanguagescriptTableMap());
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
        return LanguagescriptPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Languagescript or Criteria object.
     *
     * @param      mixed $values Criteria or Languagescript object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LanguagescriptPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Languagescript object
        }


        // Set the correct dbName
        $criteria->setDbName(LanguagescriptPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Languagescript or Criteria object.
     *
     * @param      mixed $values Criteria or Languagescript object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LanguagescriptPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(LanguagescriptPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(LanguagescriptPeer::SCRIPTNAME);
            $value = $criteria->remove(LanguagescriptPeer::SCRIPTNAME);
            if ($value) {
                $selectCriteria->add(LanguagescriptPeer::SCRIPTNAME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(LanguagescriptPeer::TABLE_NAME);
            }

        } else { // $values is Languagescript object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(LanguagescriptPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the languagescript table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LanguagescriptPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(LanguagescriptPeer::TABLE_NAME, $con, LanguagescriptPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            LanguagescriptPeer::clearInstancePool();
            LanguagescriptPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Languagescript or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Languagescript object or primary key or array of primary keys
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
            $con = Propel::getConnection(LanguagescriptPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            LanguagescriptPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Languagescript) { // it's a model object
            // invalidate the cache for this single object
            LanguagescriptPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(LanguagescriptPeer::DATABASE_NAME);
            $criteria->add(LanguagescriptPeer::SCRIPTNAME, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                LanguagescriptPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(LanguagescriptPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            LanguagescriptPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Languagescript object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Languagescript $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(LanguagescriptPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(LanguagescriptPeer::TABLE_NAME);

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

        return BasePeer::doValidate(LanguagescriptPeer::DATABASE_NAME, LanguagescriptPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Languagescript
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = LanguagescriptPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(LanguagescriptPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(LanguagescriptPeer::DATABASE_NAME);
        $criteria->add(LanguagescriptPeer::SCRIPTNAME, $pk);

        $v = LanguagescriptPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Languagescript[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LanguagescriptPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(LanguagescriptPeer::DATABASE_NAME);
            $criteria->add(LanguagescriptPeer::SCRIPTNAME, $pks, Criteria::IN);
            $objs = LanguagescriptPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseLanguagescriptPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseLanguagescriptPeer::buildTableMap();

