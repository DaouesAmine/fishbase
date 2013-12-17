<?php


/**
 * Base static class for performing query and update operations on the 'predats' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BasePredatsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'predats';

    /** the related Propel class for this table */
    const OM_CLASS = 'Predats';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PredatsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 29;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 29;

    /** the column name for the autoctr field */
    const AUTOCTR = 'predats.autoctr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'predats.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'predats.SpecCode';

    /** the column name for the PredatsRefNo field */
    const PREDATSREFNO = 'predats.PredatsRefNo';

    /** the column name for the Locality field */
    const LOCALITY = 'predats.Locality';

    /** the column name for the C_Code field */
    const C_CODE = 'predats.C_Code';

    /** the column name for the Predatstage field */
    const PREDATSTAGE = 'predats.Predatstage';

    /** the column name for the PredatorI field */
    const PREDATORI = 'predats.PredatorI';

    /** the column name for the PredatorII field */
    const PREDATORII = 'predats.PredatorII';

    /** the column name for the PreyStage field */
    const PREYSTAGE = 'predats.PreyStage';

    /** the column name for the PredatorGroup field */
    const PREDATORGROUP = 'predats.PredatorGroup';

    /** the column name for the DietP field */
    const DIETP = 'predats.DietP';

    /** the column name for the StomachContent field */
    const STOMACHCONTENT = 'predats.StomachContent';

    /** the column name for the PredatorName field */
    const PREDATORNAME = 'predats.PredatorName';

    /** the column name for the Predatcode field */
    const PREDATCODE = 'predats.Predatcode';

    /** the column name for the AlphaCode field */
    const ALPHACODE = 'predats.AlphaCode';

    /** the column name for the MaxLength field */
    const MAXLENGTH = 'predats.MaxLength';

    /** the column name for the MaxLengthType field */
    const MAXLENGTHTYPE = 'predats.MaxLengthType';

    /** the column name for the PredatTroph field */
    const PREDATTROPH = 'predats.PredatTroph';

    /** the column name for the PredatseTroph field */
    const PREDATSETROPH = 'predats.PredatseTroph';

    /** the column name for the PredatRef field */
    const PREDATREF = 'predats.PredatRef';

    /** the column name for the Remarks field */
    const REMARKS = 'predats.Remarks';

    /** the column name for the Entered field */
    const ENTERED = 'predats.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'predats.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'predats.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'predats.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'predats.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'predats.DateChecked';

    /** the column name for the TS field */
    const TS = 'predats.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Predats objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Predats[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PredatsPeer::$fieldNames[PredatsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Predatsrefno', 'Locality', 'CCode', 'Predatstage', 'Predatori', 'Predatorii', 'Preystage', 'Predatorgroup', 'Dietp', 'Stomachcontent', 'Predatorname', 'Predatcode', 'Alphacode', 'Maxlength', 'Maxlengthtype', 'Predattroph', 'Predatsetroph', 'Predatref', 'Remarks', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'predatsrefno', 'locality', 'cCode', 'predatstage', 'predatori', 'predatorii', 'preystage', 'predatorgroup', 'dietp', 'stomachcontent', 'predatorname', 'predatcode', 'alphacode', 'maxlength', 'maxlengthtype', 'predattroph', 'predatsetroph', 'predatref', 'remarks', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (PredatsPeer::AUTOCTR, PredatsPeer::STOCKCODE, PredatsPeer::SPECCODE, PredatsPeer::PREDATSREFNO, PredatsPeer::LOCALITY, PredatsPeer::C_CODE, PredatsPeer::PREDATSTAGE, PredatsPeer::PREDATORI, PredatsPeer::PREDATORII, PredatsPeer::PREYSTAGE, PredatsPeer::PREDATORGROUP, PredatsPeer::DIETP, PredatsPeer::STOMACHCONTENT, PredatsPeer::PREDATORNAME, PredatsPeer::PREDATCODE, PredatsPeer::ALPHACODE, PredatsPeer::MAXLENGTH, PredatsPeer::MAXLENGTHTYPE, PredatsPeer::PREDATTROPH, PredatsPeer::PREDATSETROPH, PredatsPeer::PREDATREF, PredatsPeer::REMARKS, PredatsPeer::ENTERED, PredatsPeer::DATEENTERED, PredatsPeer::MODIFIED, PredatsPeer::DATEMODIFIED, PredatsPeer::EXPERT, PredatsPeer::DATECHECKED, PredatsPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'PREDATSREFNO', 'LOCALITY', 'C_CODE', 'PREDATSTAGE', 'PREDATORI', 'PREDATORII', 'PREYSTAGE', 'PREDATORGROUP', 'DIETP', 'STOMACHCONTENT', 'PREDATORNAME', 'PREDATCODE', 'ALPHACODE', 'MAXLENGTH', 'MAXLENGTHTYPE', 'PREDATTROPH', 'PREDATSETROPH', 'PREDATREF', 'REMARKS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'StockCode', 'SpecCode', 'PredatsRefNo', 'Locality', 'C_Code', 'Predatstage', 'PredatorI', 'PredatorII', 'PreyStage', 'PredatorGroup', 'DietP', 'StomachContent', 'PredatorName', 'Predatcode', 'AlphaCode', 'MaxLength', 'MaxLengthType', 'PredatTroph', 'PredatseTroph', 'PredatRef', 'Remarks', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PredatsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Predatsrefno' => 3, 'Locality' => 4, 'CCode' => 5, 'Predatstage' => 6, 'Predatori' => 7, 'Predatorii' => 8, 'Preystage' => 9, 'Predatorgroup' => 10, 'Dietp' => 11, 'Stomachcontent' => 12, 'Predatorname' => 13, 'Predatcode' => 14, 'Alphacode' => 15, 'Maxlength' => 16, 'Maxlengthtype' => 17, 'Predattroph' => 18, 'Predatsetroph' => 19, 'Predatref' => 20, 'Remarks' => 21, 'Entered' => 22, 'Dateentered' => 23, 'Modified' => 24, 'Datemodified' => 25, 'Expert' => 26, 'Datechecked' => 27, 'Ts' => 28, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'predatsrefno' => 3, 'locality' => 4, 'cCode' => 5, 'predatstage' => 6, 'predatori' => 7, 'predatorii' => 8, 'preystage' => 9, 'predatorgroup' => 10, 'dietp' => 11, 'stomachcontent' => 12, 'predatorname' => 13, 'predatcode' => 14, 'alphacode' => 15, 'maxlength' => 16, 'maxlengthtype' => 17, 'predattroph' => 18, 'predatsetroph' => 19, 'predatref' => 20, 'remarks' => 21, 'entered' => 22, 'dateentered' => 23, 'modified' => 24, 'datemodified' => 25, 'expert' => 26, 'datechecked' => 27, 'ts' => 28, ),
        BasePeer::TYPE_COLNAME => array (PredatsPeer::AUTOCTR => 0, PredatsPeer::STOCKCODE => 1, PredatsPeer::SPECCODE => 2, PredatsPeer::PREDATSREFNO => 3, PredatsPeer::LOCALITY => 4, PredatsPeer::C_CODE => 5, PredatsPeer::PREDATSTAGE => 6, PredatsPeer::PREDATORI => 7, PredatsPeer::PREDATORII => 8, PredatsPeer::PREYSTAGE => 9, PredatsPeer::PREDATORGROUP => 10, PredatsPeer::DIETP => 11, PredatsPeer::STOMACHCONTENT => 12, PredatsPeer::PREDATORNAME => 13, PredatsPeer::PREDATCODE => 14, PredatsPeer::ALPHACODE => 15, PredatsPeer::MAXLENGTH => 16, PredatsPeer::MAXLENGTHTYPE => 17, PredatsPeer::PREDATTROPH => 18, PredatsPeer::PREDATSETROPH => 19, PredatsPeer::PREDATREF => 20, PredatsPeer::REMARKS => 21, PredatsPeer::ENTERED => 22, PredatsPeer::DATEENTERED => 23, PredatsPeer::MODIFIED => 24, PredatsPeer::DATEMODIFIED => 25, PredatsPeer::EXPERT => 26, PredatsPeer::DATECHECKED => 27, PredatsPeer::TS => 28, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'PREDATSREFNO' => 3, 'LOCALITY' => 4, 'C_CODE' => 5, 'PREDATSTAGE' => 6, 'PREDATORI' => 7, 'PREDATORII' => 8, 'PREYSTAGE' => 9, 'PREDATORGROUP' => 10, 'DIETP' => 11, 'STOMACHCONTENT' => 12, 'PREDATORNAME' => 13, 'PREDATCODE' => 14, 'ALPHACODE' => 15, 'MAXLENGTH' => 16, 'MAXLENGTHTYPE' => 17, 'PREDATTROPH' => 18, 'PREDATSETROPH' => 19, 'PREDATREF' => 20, 'REMARKS' => 21, 'ENTERED' => 22, 'DATEENTERED' => 23, 'MODIFIED' => 24, 'DATEMODIFIED' => 25, 'EXPERT' => 26, 'DATECHECKED' => 27, 'TS' => 28, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'PredatsRefNo' => 3, 'Locality' => 4, 'C_Code' => 5, 'Predatstage' => 6, 'PredatorI' => 7, 'PredatorII' => 8, 'PreyStage' => 9, 'PredatorGroup' => 10, 'DietP' => 11, 'StomachContent' => 12, 'PredatorName' => 13, 'Predatcode' => 14, 'AlphaCode' => 15, 'MaxLength' => 16, 'MaxLengthType' => 17, 'PredatTroph' => 18, 'PredatseTroph' => 19, 'PredatRef' => 20, 'Remarks' => 21, 'Entered' => 22, 'DateEntered' => 23, 'Modified' => 24, 'DateModified' => 25, 'Expert' => 26, 'DateChecked' => 27, 'TS' => 28, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
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
        $toNames = PredatsPeer::getFieldNames($toType);
        $key = isset(PredatsPeer::$fieldKeys[$fromType][$name]) ? PredatsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PredatsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PredatsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PredatsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PredatsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PredatsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PredatsPeer::AUTOCTR);
            $criteria->addSelectColumn(PredatsPeer::STOCKCODE);
            $criteria->addSelectColumn(PredatsPeer::SPECCODE);
            $criteria->addSelectColumn(PredatsPeer::PREDATSREFNO);
            $criteria->addSelectColumn(PredatsPeer::LOCALITY);
            $criteria->addSelectColumn(PredatsPeer::C_CODE);
            $criteria->addSelectColumn(PredatsPeer::PREDATSTAGE);
            $criteria->addSelectColumn(PredatsPeer::PREDATORI);
            $criteria->addSelectColumn(PredatsPeer::PREDATORII);
            $criteria->addSelectColumn(PredatsPeer::PREYSTAGE);
            $criteria->addSelectColumn(PredatsPeer::PREDATORGROUP);
            $criteria->addSelectColumn(PredatsPeer::DIETP);
            $criteria->addSelectColumn(PredatsPeer::STOMACHCONTENT);
            $criteria->addSelectColumn(PredatsPeer::PREDATORNAME);
            $criteria->addSelectColumn(PredatsPeer::PREDATCODE);
            $criteria->addSelectColumn(PredatsPeer::ALPHACODE);
            $criteria->addSelectColumn(PredatsPeer::MAXLENGTH);
            $criteria->addSelectColumn(PredatsPeer::MAXLENGTHTYPE);
            $criteria->addSelectColumn(PredatsPeer::PREDATTROPH);
            $criteria->addSelectColumn(PredatsPeer::PREDATSETROPH);
            $criteria->addSelectColumn(PredatsPeer::PREDATREF);
            $criteria->addSelectColumn(PredatsPeer::REMARKS);
            $criteria->addSelectColumn(PredatsPeer::ENTERED);
            $criteria->addSelectColumn(PredatsPeer::DATEENTERED);
            $criteria->addSelectColumn(PredatsPeer::MODIFIED);
            $criteria->addSelectColumn(PredatsPeer::DATEMODIFIED);
            $criteria->addSelectColumn(PredatsPeer::EXPERT);
            $criteria->addSelectColumn(PredatsPeer::DATECHECKED);
            $criteria->addSelectColumn(PredatsPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.PredatsRefNo');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Predatstage');
            $criteria->addSelectColumn($alias . '.PredatorI');
            $criteria->addSelectColumn($alias . '.PredatorII');
            $criteria->addSelectColumn($alias . '.PreyStage');
            $criteria->addSelectColumn($alias . '.PredatorGroup');
            $criteria->addSelectColumn($alias . '.DietP');
            $criteria->addSelectColumn($alias . '.StomachContent');
            $criteria->addSelectColumn($alias . '.PredatorName');
            $criteria->addSelectColumn($alias . '.Predatcode');
            $criteria->addSelectColumn($alias . '.AlphaCode');
            $criteria->addSelectColumn($alias . '.MaxLength');
            $criteria->addSelectColumn($alias . '.MaxLengthType');
            $criteria->addSelectColumn($alias . '.PredatTroph');
            $criteria->addSelectColumn($alias . '.PredatseTroph');
            $criteria->addSelectColumn($alias . '.PredatRef');
            $criteria->addSelectColumn($alias . '.Remarks');
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
        $criteria->setPrimaryTableName(PredatsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PredatsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PredatsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PredatsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Predats
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PredatsPeer::doSelect($critcopy, $con);
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
        return PredatsPeer::populateObjects(PredatsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PredatsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PredatsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PredatsPeer::DATABASE_NAME);

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
     * @param Predats $obj A Predats object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getPredatstage(), (string) $obj->getPreystage(), (string) $obj->getPredatorgroup(), (string) $obj->getPredatorname()));
            } // if key === null
            PredatsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Predats object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Predats) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getPredatstage(), (string) $value->getPreystage(), (string) $value->getPredatorgroup(), (string) $value->getPredatorname()));
            } elseif (is_array($value) && count($value) === 5) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3], (string) $value[4]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Predats object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PredatsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Predats Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PredatsPeer::$instances[$key])) {
                return PredatsPeer::$instances[$key];
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
        foreach (PredatsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PredatsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to predats
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
        if ($row[$startcol + 1] === null && $row[$startcol + 6] === null && $row[$startcol + 9] === null && $row[$startcol + 10] === null && $row[$startcol + 13] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 6], (string) $row[$startcol + 9], (string) $row[$startcol + 10], (string) $row[$startcol + 13]));
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

        return array((int) $row[$startcol + 1], (string) $row[$startcol + 6], (string) $row[$startcol + 9], (string) $row[$startcol + 10], (string) $row[$startcol + 13]);
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
        $cls = PredatsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PredatsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PredatsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PredatsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Predats object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PredatsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PredatsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PredatsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PredatsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PredatsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(PredatsPeer::DATABASE_NAME)->getTable(PredatsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePredatsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePredatsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PredatsTableMap());
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
        return PredatsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Predats or Criteria object.
     *
     * @param      mixed $values Criteria or Predats object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PredatsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Predats object
        }


        // Set the correct dbName
        $criteria->setDbName(PredatsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Predats or Criteria object.
     *
     * @param      mixed $values Criteria or Predats object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PredatsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PredatsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PredatsPeer::STOCKCODE);
            $value = $criteria->remove(PredatsPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(PredatsPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PredatsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(PredatsPeer::PREDATSTAGE);
            $value = $criteria->remove(PredatsPeer::PREDATSTAGE);
            if ($value) {
                $selectCriteria->add(PredatsPeer::PREDATSTAGE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PredatsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(PredatsPeer::PREYSTAGE);
            $value = $criteria->remove(PredatsPeer::PREYSTAGE);
            if ($value) {
                $selectCriteria->add(PredatsPeer::PREYSTAGE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PredatsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(PredatsPeer::PREDATORGROUP);
            $value = $criteria->remove(PredatsPeer::PREDATORGROUP);
            if ($value) {
                $selectCriteria->add(PredatsPeer::PREDATORGROUP, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PredatsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(PredatsPeer::PREDATORNAME);
            $value = $criteria->remove(PredatsPeer::PREDATORNAME);
            if ($value) {
                $selectCriteria->add(PredatsPeer::PREDATORNAME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PredatsPeer::TABLE_NAME);
            }

        } else { // $values is Predats object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PredatsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the predats table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PredatsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PredatsPeer::TABLE_NAME, $con, PredatsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PredatsPeer::clearInstancePool();
            PredatsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Predats or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Predats object or primary key or array of primary keys
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
            $con = Propel::getConnection(PredatsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PredatsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Predats) { // it's a model object
            // invalidate the cache for this single object
            PredatsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PredatsPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(PredatsPeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(PredatsPeer::PREDATSTAGE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(PredatsPeer::PREYSTAGE, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(PredatsPeer::PREDATORGROUP, $value[3]));
                $criterion->addAnd($criteria->getNewCriterion(PredatsPeer::PREDATORNAME, $value[4]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                PredatsPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PredatsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PredatsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Predats object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Predats $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PredatsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PredatsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PredatsPeer::DATABASE_NAME, PredatsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stockcode
     * @param   string $predatstage
     * @param   string $preystage
     * @param   string $predatorgroup
     * @param   string $predatorname
     * @param      PropelPDO $con
     * @return Predats
     */
    public static function retrieveByPK($stockcode, $predatstage, $preystage, $predatorgroup, $predatorname, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $predatstage, (string) $preystage, (string) $predatorgroup, (string) $predatorname));
         if (null !== ($obj = PredatsPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PredatsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(PredatsPeer::DATABASE_NAME);
        $criteria->add(PredatsPeer::STOCKCODE, $stockcode);
        $criteria->add(PredatsPeer::PREDATSTAGE, $predatstage);
        $criteria->add(PredatsPeer::PREYSTAGE, $preystage);
        $criteria->add(PredatsPeer::PREDATORGROUP, $predatorgroup);
        $criteria->add(PredatsPeer::PREDATORNAME, $predatorname);
        $v = PredatsPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BasePredatsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePredatsPeer::buildTableMap();

