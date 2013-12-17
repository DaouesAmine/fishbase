<?php


/**
 * Base static class for performing query and update operations on the 'keys' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseKeysPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'keys';

    /** the related Propel class for this table */
    const OM_CLASS = 'Keys';

    /** the related TableMap class for this table */
    const TM_CLASS = 'KeysTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 30;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 30;

    /** the column name for the KeyCode field */
    const KEYCODE = 'keys.KeyCode';

    /** the column name for the Description field */
    const DESCRIPTION = 'keys.Description';

    /** the column name for the RefNo field */
    const REFNO = 'keys.RefNo';

    /** the column name for the Comments field */
    const COMMENTS = 'keys.Comments';

    /** the column name for the Remarks field */
    const REMARKS = 'keys.Remarks';

    /** the column name for the OrdNum field */
    const ORDNUM = 'keys.OrdNum';

    /** the column name for the FamCode field */
    const FAMCODE = 'keys.FamCode';

    /** the column name for the Genus field */
    const GENUS = 'keys.Genus';

    /** the column name for the AreaCode field */
    const AREACODE = 'keys.AreaCode';

    /** the column name for the C_code field */
    const C_CODE = 'keys.C_code';

    /** the column name for the E_code field */
    const E_CODE = 'keys.E_code';

    /** the column name for the Pic1 field */
    const PIC1 = 'keys.Pic1';

    /** the column name for the Pic2 field */
    const PIC2 = 'keys.Pic2';

    /** the column name for the Pic3 field */
    const PIC3 = 'keys.Pic3';

    /** the column name for the Pic4 field */
    const PIC4 = 'keys.Pic4';

    /** the column name for the Pic5 field */
    const PIC5 = 'keys.Pic5';

    /** the column name for the Pic6 field */
    const PIC6 = 'keys.Pic6';

    /** the column name for the Pic7 field */
    const PIC7 = 'keys.Pic7';

    /** the column name for the Pic8 field */
    const PIC8 = 'keys.Pic8';

    /** the column name for the Pic9 field */
    const PIC9 = 'keys.Pic9';

    /** the column name for the Pic10 field */
    const PIC10 = 'keys.Pic10';

    /** the column name for the LarvalBase field */
    const LARVALBASE = 'keys.LarvalBase';

    /** the column name for the Entered field */
    const ENTERED = 'keys.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'keys.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'keys.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'keys.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'keys.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'keys.DateChecked';

    /** the column name for the Lucid field */
    const LUCID = 'keys.Lucid';

    /** the column name for the TS field */
    const TS = 'keys.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Keys objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Keys[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. KeysPeer::$fieldNames[KeysPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Keycode', 'Description', 'Refno', 'Comments', 'Remarks', 'Ordnum', 'Famcode', 'Genus', 'Areacode', 'CCode', 'ECode', 'Pic1', 'Pic2', 'Pic3', 'Pic4', 'Pic5', 'Pic6', 'Pic7', 'Pic8', 'Pic9', 'Pic10', 'Larvalbase', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Lucid', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('keycode', 'description', 'refno', 'comments', 'remarks', 'ordnum', 'famcode', 'genus', 'areacode', 'cCode', 'eCode', 'pic1', 'pic2', 'pic3', 'pic4', 'pic5', 'pic6', 'pic7', 'pic8', 'pic9', 'pic10', 'larvalbase', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'lucid', 'ts', ),
        BasePeer::TYPE_COLNAME => array (KeysPeer::KEYCODE, KeysPeer::DESCRIPTION, KeysPeer::REFNO, KeysPeer::COMMENTS, KeysPeer::REMARKS, KeysPeer::ORDNUM, KeysPeer::FAMCODE, KeysPeer::GENUS, KeysPeer::AREACODE, KeysPeer::C_CODE, KeysPeer::E_CODE, KeysPeer::PIC1, KeysPeer::PIC2, KeysPeer::PIC3, KeysPeer::PIC4, KeysPeer::PIC5, KeysPeer::PIC6, KeysPeer::PIC7, KeysPeer::PIC8, KeysPeer::PIC9, KeysPeer::PIC10, KeysPeer::LARVALBASE, KeysPeer::ENTERED, KeysPeer::DATEENTERED, KeysPeer::MODIFIED, KeysPeer::DATEMODIFIED, KeysPeer::EXPERT, KeysPeer::DATECHECKED, KeysPeer::LUCID, KeysPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('KEYCODE', 'DESCRIPTION', 'REFNO', 'COMMENTS', 'REMARKS', 'ORDNUM', 'FAMCODE', 'GENUS', 'AREACODE', 'C_CODE', 'E_CODE', 'PIC1', 'PIC2', 'PIC3', 'PIC4', 'PIC5', 'PIC6', 'PIC7', 'PIC8', 'PIC9', 'PIC10', 'LARVALBASE', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'LUCID', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('KeyCode', 'Description', 'RefNo', 'Comments', 'Remarks', 'OrdNum', 'FamCode', 'Genus', 'AreaCode', 'C_code', 'E_code', 'Pic1', 'Pic2', 'Pic3', 'Pic4', 'Pic5', 'Pic6', 'Pic7', 'Pic8', 'Pic9', 'Pic10', 'LarvalBase', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Lucid', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. KeysPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Keycode' => 0, 'Description' => 1, 'Refno' => 2, 'Comments' => 3, 'Remarks' => 4, 'Ordnum' => 5, 'Famcode' => 6, 'Genus' => 7, 'Areacode' => 8, 'CCode' => 9, 'ECode' => 10, 'Pic1' => 11, 'Pic2' => 12, 'Pic3' => 13, 'Pic4' => 14, 'Pic5' => 15, 'Pic6' => 16, 'Pic7' => 17, 'Pic8' => 18, 'Pic9' => 19, 'Pic10' => 20, 'Larvalbase' => 21, 'Entered' => 22, 'Dateentered' => 23, 'Modified' => 24, 'Datemodified' => 25, 'Expert' => 26, 'Datechecked' => 27, 'Lucid' => 28, 'Ts' => 29, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('keycode' => 0, 'description' => 1, 'refno' => 2, 'comments' => 3, 'remarks' => 4, 'ordnum' => 5, 'famcode' => 6, 'genus' => 7, 'areacode' => 8, 'cCode' => 9, 'eCode' => 10, 'pic1' => 11, 'pic2' => 12, 'pic3' => 13, 'pic4' => 14, 'pic5' => 15, 'pic6' => 16, 'pic7' => 17, 'pic8' => 18, 'pic9' => 19, 'pic10' => 20, 'larvalbase' => 21, 'entered' => 22, 'dateentered' => 23, 'modified' => 24, 'datemodified' => 25, 'expert' => 26, 'datechecked' => 27, 'lucid' => 28, 'ts' => 29, ),
        BasePeer::TYPE_COLNAME => array (KeysPeer::KEYCODE => 0, KeysPeer::DESCRIPTION => 1, KeysPeer::REFNO => 2, KeysPeer::COMMENTS => 3, KeysPeer::REMARKS => 4, KeysPeer::ORDNUM => 5, KeysPeer::FAMCODE => 6, KeysPeer::GENUS => 7, KeysPeer::AREACODE => 8, KeysPeer::C_CODE => 9, KeysPeer::E_CODE => 10, KeysPeer::PIC1 => 11, KeysPeer::PIC2 => 12, KeysPeer::PIC3 => 13, KeysPeer::PIC4 => 14, KeysPeer::PIC5 => 15, KeysPeer::PIC6 => 16, KeysPeer::PIC7 => 17, KeysPeer::PIC8 => 18, KeysPeer::PIC9 => 19, KeysPeer::PIC10 => 20, KeysPeer::LARVALBASE => 21, KeysPeer::ENTERED => 22, KeysPeer::DATEENTERED => 23, KeysPeer::MODIFIED => 24, KeysPeer::DATEMODIFIED => 25, KeysPeer::EXPERT => 26, KeysPeer::DATECHECKED => 27, KeysPeer::LUCID => 28, KeysPeer::TS => 29, ),
        BasePeer::TYPE_RAW_COLNAME => array ('KEYCODE' => 0, 'DESCRIPTION' => 1, 'REFNO' => 2, 'COMMENTS' => 3, 'REMARKS' => 4, 'ORDNUM' => 5, 'FAMCODE' => 6, 'GENUS' => 7, 'AREACODE' => 8, 'C_CODE' => 9, 'E_CODE' => 10, 'PIC1' => 11, 'PIC2' => 12, 'PIC3' => 13, 'PIC4' => 14, 'PIC5' => 15, 'PIC6' => 16, 'PIC7' => 17, 'PIC8' => 18, 'PIC9' => 19, 'PIC10' => 20, 'LARVALBASE' => 21, 'ENTERED' => 22, 'DATEENTERED' => 23, 'MODIFIED' => 24, 'DATEMODIFIED' => 25, 'EXPERT' => 26, 'DATECHECKED' => 27, 'LUCID' => 28, 'TS' => 29, ),
        BasePeer::TYPE_FIELDNAME => array ('KeyCode' => 0, 'Description' => 1, 'RefNo' => 2, 'Comments' => 3, 'Remarks' => 4, 'OrdNum' => 5, 'FamCode' => 6, 'Genus' => 7, 'AreaCode' => 8, 'C_code' => 9, 'E_code' => 10, 'Pic1' => 11, 'Pic2' => 12, 'Pic3' => 13, 'Pic4' => 14, 'Pic5' => 15, 'Pic6' => 16, 'Pic7' => 17, 'Pic8' => 18, 'Pic9' => 19, 'Pic10' => 20, 'LarvalBase' => 21, 'Entered' => 22, 'DateEntered' => 23, 'Modified' => 24, 'DateModified' => 25, 'Expert' => 26, 'DateChecked' => 27, 'Lucid' => 28, 'TS' => 29, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, )
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
        $toNames = KeysPeer::getFieldNames($toType);
        $key = isset(KeysPeer::$fieldKeys[$fromType][$name]) ? KeysPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(KeysPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, KeysPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return KeysPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. KeysPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(KeysPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(KeysPeer::KEYCODE);
            $criteria->addSelectColumn(KeysPeer::DESCRIPTION);
            $criteria->addSelectColumn(KeysPeer::REFNO);
            $criteria->addSelectColumn(KeysPeer::COMMENTS);
            $criteria->addSelectColumn(KeysPeer::REMARKS);
            $criteria->addSelectColumn(KeysPeer::ORDNUM);
            $criteria->addSelectColumn(KeysPeer::FAMCODE);
            $criteria->addSelectColumn(KeysPeer::GENUS);
            $criteria->addSelectColumn(KeysPeer::AREACODE);
            $criteria->addSelectColumn(KeysPeer::C_CODE);
            $criteria->addSelectColumn(KeysPeer::E_CODE);
            $criteria->addSelectColumn(KeysPeer::PIC1);
            $criteria->addSelectColumn(KeysPeer::PIC2);
            $criteria->addSelectColumn(KeysPeer::PIC3);
            $criteria->addSelectColumn(KeysPeer::PIC4);
            $criteria->addSelectColumn(KeysPeer::PIC5);
            $criteria->addSelectColumn(KeysPeer::PIC6);
            $criteria->addSelectColumn(KeysPeer::PIC7);
            $criteria->addSelectColumn(KeysPeer::PIC8);
            $criteria->addSelectColumn(KeysPeer::PIC9);
            $criteria->addSelectColumn(KeysPeer::PIC10);
            $criteria->addSelectColumn(KeysPeer::LARVALBASE);
            $criteria->addSelectColumn(KeysPeer::ENTERED);
            $criteria->addSelectColumn(KeysPeer::DATEENTERED);
            $criteria->addSelectColumn(KeysPeer::MODIFIED);
            $criteria->addSelectColumn(KeysPeer::DATEMODIFIED);
            $criteria->addSelectColumn(KeysPeer::EXPERT);
            $criteria->addSelectColumn(KeysPeer::DATECHECKED);
            $criteria->addSelectColumn(KeysPeer::LUCID);
            $criteria->addSelectColumn(KeysPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.KeyCode');
            $criteria->addSelectColumn($alias . '.Description');
            $criteria->addSelectColumn($alias . '.RefNo');
            $criteria->addSelectColumn($alias . '.Comments');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.OrdNum');
            $criteria->addSelectColumn($alias . '.FamCode');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.AreaCode');
            $criteria->addSelectColumn($alias . '.C_code');
            $criteria->addSelectColumn($alias . '.E_code');
            $criteria->addSelectColumn($alias . '.Pic1');
            $criteria->addSelectColumn($alias . '.Pic2');
            $criteria->addSelectColumn($alias . '.Pic3');
            $criteria->addSelectColumn($alias . '.Pic4');
            $criteria->addSelectColumn($alias . '.Pic5');
            $criteria->addSelectColumn($alias . '.Pic6');
            $criteria->addSelectColumn($alias . '.Pic7');
            $criteria->addSelectColumn($alias . '.Pic8');
            $criteria->addSelectColumn($alias . '.Pic9');
            $criteria->addSelectColumn($alias . '.Pic10');
            $criteria->addSelectColumn($alias . '.LarvalBase');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Lucid');
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
        $criteria->setPrimaryTableName(KeysPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            KeysPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(KeysPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(KeysPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Keys
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = KeysPeer::doSelect($critcopy, $con);
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
        return KeysPeer::populateObjects(KeysPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(KeysPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            KeysPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(KeysPeer::DATABASE_NAME);

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
     * @param Keys $obj A Keys object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getKeycode();
            } // if key === null
            KeysPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Keys object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Keys) {
                $key = (string) $value->getKeycode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Keys object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(KeysPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Keys Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(KeysPeer::$instances[$key])) {
                return KeysPeer::$instances[$key];
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
        foreach (KeysPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        KeysPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to keys
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
        $cls = KeysPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = KeysPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = KeysPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                KeysPeer::addInstanceToPool($obj, $key);
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
     * @return array (Keys object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = KeysPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = KeysPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + KeysPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = KeysPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            KeysPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(KeysPeer::DATABASE_NAME)->getTable(KeysPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseKeysPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseKeysPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \KeysTableMap());
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
        return KeysPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Keys or Criteria object.
     *
     * @param      mixed $values Criteria or Keys object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(KeysPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Keys object
        }


        // Set the correct dbName
        $criteria->setDbName(KeysPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Keys or Criteria object.
     *
     * @param      mixed $values Criteria or Keys object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(KeysPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(KeysPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(KeysPeer::KEYCODE);
            $value = $criteria->remove(KeysPeer::KEYCODE);
            if ($value) {
                $selectCriteria->add(KeysPeer::KEYCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(KeysPeer::TABLE_NAME);
            }

        } else { // $values is Keys object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(KeysPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the keys table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(KeysPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(KeysPeer::TABLE_NAME, $con, KeysPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            KeysPeer::clearInstancePool();
            KeysPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Keys or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Keys object or primary key or array of primary keys
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
            $con = Propel::getConnection(KeysPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            KeysPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Keys) { // it's a model object
            // invalidate the cache for this single object
            KeysPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(KeysPeer::DATABASE_NAME);
            $criteria->add(KeysPeer::KEYCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                KeysPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(KeysPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            KeysPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Keys object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Keys $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(KeysPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(KeysPeer::TABLE_NAME);

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

        return BasePeer::doValidate(KeysPeer::DATABASE_NAME, KeysPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Keys
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = KeysPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(KeysPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(KeysPeer::DATABASE_NAME);
        $criteria->add(KeysPeer::KEYCODE, $pk);

        $v = KeysPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Keys[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(KeysPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(KeysPeer::DATABASE_NAME);
            $criteria->add(KeysPeer::KEYCODE, $pks, Criteria::IN);
            $objs = KeysPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseKeysPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseKeysPeer::buildTableMap();

