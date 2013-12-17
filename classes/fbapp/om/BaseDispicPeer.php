<?php


/**
 * Base static class for performing query and update operations on the 'dispic' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseDispicPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'dispic';

    /** the related Propel class for this table */
    const OM_CLASS = 'Dispic';

    /** the related TableMap class for this table */
    const TM_CLASS = 'DispicTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 21;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 21;

    /** the column name for the PicNum field */
    const PICNUM = 'dispic.PicNum';

    /** the column name for the Remarks field */
    const REMARKS = 'dispic.Remarks';

    /** the column name for the Genus field */
    const GENUS = 'dispic.Genus';

    /** the column name for the Species field */
    const SPECIES = 'dispic.Species';

    /** the column name for the SpecCode field */
    const SPECCODE = 'dispic.SpecCode';

    /** the column name for the StockCode field */
    const STOCKCODE = 'dispic.StockCode';

    /** the column name for the DisCode field */
    const DISCODE = 'dispic.DisCode';

    /** the column name for the RefNo field */
    const REFNO = 'dispic.RefNo';

    /** the column name for the Photographer field */
    const PHOTOGRAPHER = 'dispic.Photographer';

    /** the column name for the Year field */
    const YEAR = 'dispic.Year';

    /** the column name for the Locality field */
    const LOCALITY = 'dispic.Locality';

    /** the column name for the PicFile field */
    const PICFILE = 'dispic.PicFile';

    /** the column name for the Copyright field */
    const COPYRIGHT = 'dispic.Copyright';

    /** the column name for the Entered field */
    const ENTERED = 'dispic.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'dispic.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'dispic.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'dispic.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'dispic.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'dispic.DateChecked';

    /** the column name for the Scanned field */
    const SCANNED = 'dispic.Scanned';

    /** the column name for the TS field */
    const TS = 'dispic.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Dispic objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Dispic[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. DispicPeer::$fieldNames[DispicPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Picnum', 'Remarks', 'Genus', 'Species', 'Speccode', 'Stockcode', 'Discode', 'Refno', 'Photographer', 'Year', 'Locality', 'Picfile', 'Copyright', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Scanned', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('picnum', 'remarks', 'genus', 'species', 'speccode', 'stockcode', 'discode', 'refno', 'photographer', 'year', 'locality', 'picfile', 'copyright', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'scanned', 'ts', ),
        BasePeer::TYPE_COLNAME => array (DispicPeer::PICNUM, DispicPeer::REMARKS, DispicPeer::GENUS, DispicPeer::SPECIES, DispicPeer::SPECCODE, DispicPeer::STOCKCODE, DispicPeer::DISCODE, DispicPeer::REFNO, DispicPeer::PHOTOGRAPHER, DispicPeer::YEAR, DispicPeer::LOCALITY, DispicPeer::PICFILE, DispicPeer::COPYRIGHT, DispicPeer::ENTERED, DispicPeer::DATEENTERED, DispicPeer::MODIFIED, DispicPeer::DATEMODIFIED, DispicPeer::EXPERT, DispicPeer::DATECHECKED, DispicPeer::SCANNED, DispicPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PICNUM', 'REMARKS', 'GENUS', 'SPECIES', 'SPECCODE', 'STOCKCODE', 'DISCODE', 'REFNO', 'PHOTOGRAPHER', 'YEAR', 'LOCALITY', 'PICFILE', 'COPYRIGHT', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'SCANNED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('PicNum', 'Remarks', 'Genus', 'Species', 'SpecCode', 'StockCode', 'DisCode', 'RefNo', 'Photographer', 'Year', 'Locality', 'PicFile', 'Copyright', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Scanned', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. DispicPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Picnum' => 0, 'Remarks' => 1, 'Genus' => 2, 'Species' => 3, 'Speccode' => 4, 'Stockcode' => 5, 'Discode' => 6, 'Refno' => 7, 'Photographer' => 8, 'Year' => 9, 'Locality' => 10, 'Picfile' => 11, 'Copyright' => 12, 'Entered' => 13, 'Dateentered' => 14, 'Modified' => 15, 'Datemodified' => 16, 'Expert' => 17, 'Datechecked' => 18, 'Scanned' => 19, 'Ts' => 20, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('picnum' => 0, 'remarks' => 1, 'genus' => 2, 'species' => 3, 'speccode' => 4, 'stockcode' => 5, 'discode' => 6, 'refno' => 7, 'photographer' => 8, 'year' => 9, 'locality' => 10, 'picfile' => 11, 'copyright' => 12, 'entered' => 13, 'dateentered' => 14, 'modified' => 15, 'datemodified' => 16, 'expert' => 17, 'datechecked' => 18, 'scanned' => 19, 'ts' => 20, ),
        BasePeer::TYPE_COLNAME => array (DispicPeer::PICNUM => 0, DispicPeer::REMARKS => 1, DispicPeer::GENUS => 2, DispicPeer::SPECIES => 3, DispicPeer::SPECCODE => 4, DispicPeer::STOCKCODE => 5, DispicPeer::DISCODE => 6, DispicPeer::REFNO => 7, DispicPeer::PHOTOGRAPHER => 8, DispicPeer::YEAR => 9, DispicPeer::LOCALITY => 10, DispicPeer::PICFILE => 11, DispicPeer::COPYRIGHT => 12, DispicPeer::ENTERED => 13, DispicPeer::DATEENTERED => 14, DispicPeer::MODIFIED => 15, DispicPeer::DATEMODIFIED => 16, DispicPeer::EXPERT => 17, DispicPeer::DATECHECKED => 18, DispicPeer::SCANNED => 19, DispicPeer::TS => 20, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PICNUM' => 0, 'REMARKS' => 1, 'GENUS' => 2, 'SPECIES' => 3, 'SPECCODE' => 4, 'STOCKCODE' => 5, 'DISCODE' => 6, 'REFNO' => 7, 'PHOTOGRAPHER' => 8, 'YEAR' => 9, 'LOCALITY' => 10, 'PICFILE' => 11, 'COPYRIGHT' => 12, 'ENTERED' => 13, 'DATEENTERED' => 14, 'MODIFIED' => 15, 'DATEMODIFIED' => 16, 'EXPERT' => 17, 'DATECHECKED' => 18, 'SCANNED' => 19, 'TS' => 20, ),
        BasePeer::TYPE_FIELDNAME => array ('PicNum' => 0, 'Remarks' => 1, 'Genus' => 2, 'Species' => 3, 'SpecCode' => 4, 'StockCode' => 5, 'DisCode' => 6, 'RefNo' => 7, 'Photographer' => 8, 'Year' => 9, 'Locality' => 10, 'PicFile' => 11, 'Copyright' => 12, 'Entered' => 13, 'DateEntered' => 14, 'Modified' => 15, 'DateModified' => 16, 'Expert' => 17, 'DateChecked' => 18, 'Scanned' => 19, 'TS' => 20, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
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
        $toNames = DispicPeer::getFieldNames($toType);
        $key = isset(DispicPeer::$fieldKeys[$fromType][$name]) ? DispicPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(DispicPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, DispicPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return DispicPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. DispicPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(DispicPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(DispicPeer::PICNUM);
            $criteria->addSelectColumn(DispicPeer::REMARKS);
            $criteria->addSelectColumn(DispicPeer::GENUS);
            $criteria->addSelectColumn(DispicPeer::SPECIES);
            $criteria->addSelectColumn(DispicPeer::SPECCODE);
            $criteria->addSelectColumn(DispicPeer::STOCKCODE);
            $criteria->addSelectColumn(DispicPeer::DISCODE);
            $criteria->addSelectColumn(DispicPeer::REFNO);
            $criteria->addSelectColumn(DispicPeer::PHOTOGRAPHER);
            $criteria->addSelectColumn(DispicPeer::YEAR);
            $criteria->addSelectColumn(DispicPeer::LOCALITY);
            $criteria->addSelectColumn(DispicPeer::PICFILE);
            $criteria->addSelectColumn(DispicPeer::COPYRIGHT);
            $criteria->addSelectColumn(DispicPeer::ENTERED);
            $criteria->addSelectColumn(DispicPeer::DATEENTERED);
            $criteria->addSelectColumn(DispicPeer::MODIFIED);
            $criteria->addSelectColumn(DispicPeer::DATEMODIFIED);
            $criteria->addSelectColumn(DispicPeer::EXPERT);
            $criteria->addSelectColumn(DispicPeer::DATECHECKED);
            $criteria->addSelectColumn(DispicPeer::SCANNED);
            $criteria->addSelectColumn(DispicPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.PicNum');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.DisCode');
            $criteria->addSelectColumn($alias . '.RefNo');
            $criteria->addSelectColumn($alias . '.Photographer');
            $criteria->addSelectColumn($alias . '.Year');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.PicFile');
            $criteria->addSelectColumn($alias . '.Copyright');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Scanned');
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
        $criteria->setPrimaryTableName(DispicPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DispicPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(DispicPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(DispicPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Dispic
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = DispicPeer::doSelect($critcopy, $con);
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
        return DispicPeer::populateObjects(DispicPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(DispicPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DispicPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(DispicPeer::DATABASE_NAME);

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
     * @param Dispic $obj A Dispic object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPicfile();
            } // if key === null
            DispicPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Dispic object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Dispic) {
                $key = (string) $value->getPicfile();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Dispic object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(DispicPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Dispic Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(DispicPeer::$instances[$key])) {
                return DispicPeer::$instances[$key];
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
        foreach (DispicPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        DispicPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to dispic
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
        if ($row[$startcol + 11] === null) {
            return null;
        }

        return (string) $row[$startcol + 11];
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

        return (string) $row[$startcol + 11];
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
        $cls = DispicPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = DispicPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = DispicPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DispicPeer::addInstanceToPool($obj, $key);
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
     * @return array (Dispic object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = DispicPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = DispicPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + DispicPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DispicPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            DispicPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(DispicPeer::DATABASE_NAME)->getTable(DispicPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseDispicPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseDispicPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \DispicTableMap());
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
        return DispicPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Dispic or Criteria object.
     *
     * @param      mixed $values Criteria or Dispic object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DispicPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Dispic object
        }


        // Set the correct dbName
        $criteria->setDbName(DispicPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Dispic or Criteria object.
     *
     * @param      mixed $values Criteria or Dispic object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DispicPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(DispicPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(DispicPeer::PICFILE);
            $value = $criteria->remove(DispicPeer::PICFILE);
            if ($value) {
                $selectCriteria->add(DispicPeer::PICFILE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DispicPeer::TABLE_NAME);
            }

        } else { // $values is Dispic object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(DispicPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the dispic table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DispicPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(DispicPeer::TABLE_NAME, $con, DispicPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DispicPeer::clearInstancePool();
            DispicPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Dispic or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Dispic object or primary key or array of primary keys
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
            $con = Propel::getConnection(DispicPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            DispicPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Dispic) { // it's a model object
            // invalidate the cache for this single object
            DispicPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DispicPeer::DATABASE_NAME);
            $criteria->add(DispicPeer::PICFILE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                DispicPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(DispicPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            DispicPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Dispic object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Dispic $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(DispicPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(DispicPeer::TABLE_NAME);

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

        return BasePeer::doValidate(DispicPeer::DATABASE_NAME, DispicPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Dispic
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = DispicPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(DispicPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(DispicPeer::DATABASE_NAME);
        $criteria->add(DispicPeer::PICFILE, $pk);

        $v = DispicPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Dispic[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DispicPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(DispicPeer::DATABASE_NAME);
            $criteria->add(DispicPeer::PICFILE, $pks, Criteria::IN);
            $objs = DispicPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseDispicPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDispicPeer::buildTableMap();

