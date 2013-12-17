<?php


/**
 * Base static class for performing query and update operations on the 'sounds' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseSoundsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'sounds';

    /** the related Propel class for this table */
    const OM_CLASS = 'Sounds';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SoundsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 22;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 22;

    /** the column name for the autoctr field */
    const AUTOCTR = 'sounds.autoctr';

    /** the column name for the SpecCode field */
    const SPECCODE = 'sounds.SpecCode';

    /** the column name for the Stockcode field */
    const STOCKCODE = 'sounds.Stockcode';

    /** the column name for the Genus field */
    const GENUS = 'sounds.Genus';

    /** the column name for the Species field */
    const SPECIES = 'sounds.Species';

    /** the column name for the FishbaseName field */
    const FISHBASENAME = 'sounds.FishbaseName';

    /** the column name for the SynonymUsed field */
    const SYNONYMUSED = 'sounds.SynonymUsed';

    /** the column name for the SoundRefNo field */
    const SOUNDREFNO = 'sounds.SoundRefNo';

    /** the column name for the SoundProduction field */
    const SOUNDPRODUCTION = 'sounds.SoundProduction';

    /** the column name for the Soundtypes field */
    const SOUNDTYPES = 'sounds.Soundtypes';

    /** the column name for the SoundOrgan field */
    const SOUNDORGAN = 'sounds.SoundOrgan';

    /** the column name for the SonicMechanism field */
    const SONICMECHANISM = 'sounds.SonicMechanism';

    /** the column name for the Behaviour field */
    const BEHAVIOUR = 'sounds.Behaviour';

    /** the column name for the Remarks field */
    const REMARKS = 'sounds.Remarks';

    /** the column name for the SoundFile field */
    const SOUNDFILE = 'sounds.SoundFile';

    /** the column name for the Entered field */
    const ENTERED = 'sounds.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'sounds.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'sounds.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'sounds.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'sounds.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'sounds.DateChecked';

    /** the column name for the TS field */
    const TS = 'sounds.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Sounds objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Sounds[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SoundsPeer::$fieldNames[SoundsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Speccode', 'Stockcode', 'Genus', 'Species', 'Fishbasename', 'Synonymused', 'Soundrefno', 'Soundproduction', 'Soundtypes', 'Soundorgan', 'Sonicmechanism', 'Behaviour', 'Remarks', 'Soundfile', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'speccode', 'stockcode', 'genus', 'species', 'fishbasename', 'synonymused', 'soundrefno', 'soundproduction', 'soundtypes', 'soundorgan', 'sonicmechanism', 'behaviour', 'remarks', 'soundfile', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (SoundsPeer::AUTOCTR, SoundsPeer::SPECCODE, SoundsPeer::STOCKCODE, SoundsPeer::GENUS, SoundsPeer::SPECIES, SoundsPeer::FISHBASENAME, SoundsPeer::SYNONYMUSED, SoundsPeer::SOUNDREFNO, SoundsPeer::SOUNDPRODUCTION, SoundsPeer::SOUNDTYPES, SoundsPeer::SOUNDORGAN, SoundsPeer::SONICMECHANISM, SoundsPeer::BEHAVIOUR, SoundsPeer::REMARKS, SoundsPeer::SOUNDFILE, SoundsPeer::ENTERED, SoundsPeer::DATEENTERED, SoundsPeer::MODIFIED, SoundsPeer::DATEMODIFIED, SoundsPeer::EXPERT, SoundsPeer::DATECHECKED, SoundsPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'SPECCODE', 'STOCKCODE', 'GENUS', 'SPECIES', 'FISHBASENAME', 'SYNONYMUSED', 'SOUNDREFNO', 'SOUNDPRODUCTION', 'SOUNDTYPES', 'SOUNDORGAN', 'SONICMECHANISM', 'BEHAVIOUR', 'REMARKS', 'SOUNDFILE', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'SpecCode', 'Stockcode', 'Genus', 'Species', 'FishbaseName', 'SynonymUsed', 'SoundRefNo', 'SoundProduction', 'Soundtypes', 'SoundOrgan', 'SonicMechanism', 'Behaviour', 'Remarks', 'SoundFile', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SoundsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Stockcode' => 2, 'Genus' => 3, 'Species' => 4, 'Fishbasename' => 5, 'Synonymused' => 6, 'Soundrefno' => 7, 'Soundproduction' => 8, 'Soundtypes' => 9, 'Soundorgan' => 10, 'Sonicmechanism' => 11, 'Behaviour' => 12, 'Remarks' => 13, 'Soundfile' => 14, 'Entered' => 15, 'Dateentered' => 16, 'Modified' => 17, 'Datemodified' => 18, 'Expert' => 19, 'Datechecked' => 20, 'Ts' => 21, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'speccode' => 1, 'stockcode' => 2, 'genus' => 3, 'species' => 4, 'fishbasename' => 5, 'synonymused' => 6, 'soundrefno' => 7, 'soundproduction' => 8, 'soundtypes' => 9, 'soundorgan' => 10, 'sonicmechanism' => 11, 'behaviour' => 12, 'remarks' => 13, 'soundfile' => 14, 'entered' => 15, 'dateentered' => 16, 'modified' => 17, 'datemodified' => 18, 'expert' => 19, 'datechecked' => 20, 'ts' => 21, ),
        BasePeer::TYPE_COLNAME => array (SoundsPeer::AUTOCTR => 0, SoundsPeer::SPECCODE => 1, SoundsPeer::STOCKCODE => 2, SoundsPeer::GENUS => 3, SoundsPeer::SPECIES => 4, SoundsPeer::FISHBASENAME => 5, SoundsPeer::SYNONYMUSED => 6, SoundsPeer::SOUNDREFNO => 7, SoundsPeer::SOUNDPRODUCTION => 8, SoundsPeer::SOUNDTYPES => 9, SoundsPeer::SOUNDORGAN => 10, SoundsPeer::SONICMECHANISM => 11, SoundsPeer::BEHAVIOUR => 12, SoundsPeer::REMARKS => 13, SoundsPeer::SOUNDFILE => 14, SoundsPeer::ENTERED => 15, SoundsPeer::DATEENTERED => 16, SoundsPeer::MODIFIED => 17, SoundsPeer::DATEMODIFIED => 18, SoundsPeer::EXPERT => 19, SoundsPeer::DATECHECKED => 20, SoundsPeer::TS => 21, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'SPECCODE' => 1, 'STOCKCODE' => 2, 'GENUS' => 3, 'SPECIES' => 4, 'FISHBASENAME' => 5, 'SYNONYMUSED' => 6, 'SOUNDREFNO' => 7, 'SOUNDPRODUCTION' => 8, 'SOUNDTYPES' => 9, 'SOUNDORGAN' => 10, 'SONICMECHANISM' => 11, 'BEHAVIOUR' => 12, 'REMARKS' => 13, 'SOUNDFILE' => 14, 'ENTERED' => 15, 'DATEENTERED' => 16, 'MODIFIED' => 17, 'DATEMODIFIED' => 18, 'EXPERT' => 19, 'DATECHECKED' => 20, 'TS' => 21, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'SpecCode' => 1, 'Stockcode' => 2, 'Genus' => 3, 'Species' => 4, 'FishbaseName' => 5, 'SynonymUsed' => 6, 'SoundRefNo' => 7, 'SoundProduction' => 8, 'Soundtypes' => 9, 'SoundOrgan' => 10, 'SonicMechanism' => 11, 'Behaviour' => 12, 'Remarks' => 13, 'SoundFile' => 14, 'Entered' => 15, 'DateEntered' => 16, 'Modified' => 17, 'DateModified' => 18, 'Expert' => 19, 'DateChecked' => 20, 'TS' => 21, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
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
        $toNames = SoundsPeer::getFieldNames($toType);
        $key = isset(SoundsPeer::$fieldKeys[$fromType][$name]) ? SoundsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SoundsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SoundsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SoundsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SoundsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SoundsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SoundsPeer::AUTOCTR);
            $criteria->addSelectColumn(SoundsPeer::SPECCODE);
            $criteria->addSelectColumn(SoundsPeer::STOCKCODE);
            $criteria->addSelectColumn(SoundsPeer::GENUS);
            $criteria->addSelectColumn(SoundsPeer::SPECIES);
            $criteria->addSelectColumn(SoundsPeer::FISHBASENAME);
            $criteria->addSelectColumn(SoundsPeer::SYNONYMUSED);
            $criteria->addSelectColumn(SoundsPeer::SOUNDREFNO);
            $criteria->addSelectColumn(SoundsPeer::SOUNDPRODUCTION);
            $criteria->addSelectColumn(SoundsPeer::SOUNDTYPES);
            $criteria->addSelectColumn(SoundsPeer::SOUNDORGAN);
            $criteria->addSelectColumn(SoundsPeer::SONICMECHANISM);
            $criteria->addSelectColumn(SoundsPeer::BEHAVIOUR);
            $criteria->addSelectColumn(SoundsPeer::REMARKS);
            $criteria->addSelectColumn(SoundsPeer::SOUNDFILE);
            $criteria->addSelectColumn(SoundsPeer::ENTERED);
            $criteria->addSelectColumn(SoundsPeer::DATEENTERED);
            $criteria->addSelectColumn(SoundsPeer::MODIFIED);
            $criteria->addSelectColumn(SoundsPeer::DATEMODIFIED);
            $criteria->addSelectColumn(SoundsPeer::EXPERT);
            $criteria->addSelectColumn(SoundsPeer::DATECHECKED);
            $criteria->addSelectColumn(SoundsPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Stockcode');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.FishbaseName');
            $criteria->addSelectColumn($alias . '.SynonymUsed');
            $criteria->addSelectColumn($alias . '.SoundRefNo');
            $criteria->addSelectColumn($alias . '.SoundProduction');
            $criteria->addSelectColumn($alias . '.Soundtypes');
            $criteria->addSelectColumn($alias . '.SoundOrgan');
            $criteria->addSelectColumn($alias . '.SonicMechanism');
            $criteria->addSelectColumn($alias . '.Behaviour');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.SoundFile');
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
        $criteria->setPrimaryTableName(SoundsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SoundsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SoundsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SoundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Sounds
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SoundsPeer::doSelect($critcopy, $con);
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
        return SoundsPeer::populateObjects(SoundsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SoundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SoundsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SoundsPeer::DATABASE_NAME);

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
     * @param Sounds $obj A Sounds object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getSpeccode(), (string) $obj->getSoundfile()));
            } // if key === null
            SoundsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Sounds object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Sounds) {
                $key = serialize(array((string) $value->getSpeccode(), (string) $value->getSoundfile()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Sounds object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SoundsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Sounds Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SoundsPeer::$instances[$key])) {
                return SoundsPeer::$instances[$key];
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
        foreach (SoundsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SoundsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to sounds
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
        if ($row[$startcol + 1] === null && $row[$startcol + 14] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 14]));
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

        return array((int) $row[$startcol + 1], (string) $row[$startcol + 14]);
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
        $cls = SoundsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SoundsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SoundsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SoundsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Sounds object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SoundsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SoundsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SoundsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SoundsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SoundsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(SoundsPeer::DATABASE_NAME)->getTable(SoundsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSoundsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSoundsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SoundsTableMap());
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
        return SoundsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Sounds or Criteria object.
     *
     * @param      mixed $values Criteria or Sounds object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SoundsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Sounds object
        }


        // Set the correct dbName
        $criteria->setDbName(SoundsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Sounds or Criteria object.
     *
     * @param      mixed $values Criteria or Sounds object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SoundsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SoundsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SoundsPeer::SPECCODE);
            $value = $criteria->remove(SoundsPeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(SoundsPeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SoundsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SoundsPeer::SOUNDFILE);
            $value = $criteria->remove(SoundsPeer::SOUNDFILE);
            if ($value) {
                $selectCriteria->add(SoundsPeer::SOUNDFILE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SoundsPeer::TABLE_NAME);
            }

        } else { // $values is Sounds object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SoundsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the sounds table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SoundsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SoundsPeer::TABLE_NAME, $con, SoundsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SoundsPeer::clearInstancePool();
            SoundsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Sounds or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Sounds object or primary key or array of primary keys
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
            $con = Propel::getConnection(SoundsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SoundsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Sounds) { // it's a model object
            // invalidate the cache for this single object
            SoundsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SoundsPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SoundsPeer::SPECCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SoundsPeer::SOUNDFILE, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                SoundsPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SoundsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SoundsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Sounds object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Sounds $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SoundsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SoundsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SoundsPeer::DATABASE_NAME, SoundsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $speccode
     * @param   string $soundfile
     * @param      PropelPDO $con
     * @return Sounds
     */
    public static function retrieveByPK($speccode, $soundfile, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $speccode, (string) $soundfile));
         if (null !== ($obj = SoundsPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SoundsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(SoundsPeer::DATABASE_NAME);
        $criteria->add(SoundsPeer::SPECCODE, $speccode);
        $criteria->add(SoundsPeer::SOUNDFILE, $soundfile);
        $v = SoundsPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseSoundsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSoundsPeer::buildTableMap();

