<?php


/**
 * Base static class for performing query and update operations on the 'ration' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseRationPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'ration';

    /** the related Propel class for this table */
    const OM_CLASS = 'Ration';

    /** the related TableMap class for this table */
    const TM_CLASS = 'RationTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 33;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 33;

    /** the column name for the AutoCtr field */
    const AUTOCTR = 'ration.AutoCtr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'ration.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'ration.SpecCode';

    /** the column name for the RDRefNo field */
    const RDREFNO = 'ration.RDRefNo';

    /** the column name for the DataRef1 field */
    const DATAREF1 = 'ration.DataRef1';

    /** the column name for the EvacRate1 field */
    const EVACRATE1 = 'ration.EvacRate1';

    /** the column name for the FoodI field */
    const FOODI = 'ration.FoodI';

    /** the column name for the Rd1 field */
    const RD1 = 'ration.Rd1';

    /** the column name for the FoodII field */
    const FOODII = 'ration.FoodII';

    /** the column name for the GCE field */
    const GCE = 'ration.GCE';

    /** the column name for the FoodName field */
    const FOODNAME = 'ration.FoodName';

    /** the column name for the TBW field */
    const TBW = 'ration.TBW';

    /** the column name for the Water field */
    const WATER = 'ration.Water';

    /** the column name for the Locality field */
    const LOCALITY = 'ration.Locality';

    /** the column name for the Salinity field */
    const SALINITY = 'ration.Salinity';

    /** the column name for the C_Code field */
    const C_CODE = 'ration.C_Code';

    /** the column name for the ComRDK1 field */
    const COMRDK1 = 'ration.ComRDK1';

    /** the column name for the MethRDEvacRef field */
    const METHRDEVACREF = 'ration.MethRDEvacRef';

    /** the column name for the EvacRate2 field */
    const EVACRATE2 = 'ration.EvacRate2';

    /** the column name for the FeedBegin1 field */
    const FEEDBEGIN1 = 'ration.FeedBegin1';

    /** the column name for the FeedBegin2 field */
    const FEEDBEGIN2 = 'ration.FeedBegin2';

    /** the column name for the RD2 field */
    const RD2 = 'ration.RD2';

    /** the column name for the FeedStop1 field */
    const FEEDSTOP1 = 'ration.FeedStop1';

    /** the column name for the FeedStop2 field */
    const FEEDSTOP2 = 'ration.FeedStop2';

    /** the column name for the DailyFeedingCycle field */
    const DAILYFEEDINGCYCLE = 'ration.DailyFeedingCycle';

    /** the column name for the Comment field */
    const COMMENT = 'ration.Comment';

    /** the column name for the Entered field */
    const ENTERED = 'ration.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'ration.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'ration.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'ration.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'ration.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'ration.DateChecked';

    /** the column name for the TS field */
    const TS = 'ration.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Ration objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Ration[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. RationPeer::$fieldNames[RationPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Rdrefno', 'Dataref1', 'Evacrate1', 'Foodi', 'Rd1', 'Foodii', 'Gce', 'Foodname', 'Tbw', 'Water', 'Locality', 'Salinity', 'CCode', 'Comrdk1', 'Methrdevacref', 'Evacrate2', 'Feedbegin1', 'Feedbegin2', 'Rd2', 'Feedstop1', 'Feedstop2', 'Dailyfeedingcycle', 'Comment', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'rdrefno', 'dataref1', 'evacrate1', 'foodi', 'rd1', 'foodii', 'gce', 'foodname', 'tbw', 'water', 'locality', 'salinity', 'cCode', 'comrdk1', 'methrdevacref', 'evacrate2', 'feedbegin1', 'feedbegin2', 'rd2', 'feedstop1', 'feedstop2', 'dailyfeedingcycle', 'comment', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (RationPeer::AUTOCTR, RationPeer::STOCKCODE, RationPeer::SPECCODE, RationPeer::RDREFNO, RationPeer::DATAREF1, RationPeer::EVACRATE1, RationPeer::FOODI, RationPeer::RD1, RationPeer::FOODII, RationPeer::GCE, RationPeer::FOODNAME, RationPeer::TBW, RationPeer::WATER, RationPeer::LOCALITY, RationPeer::SALINITY, RationPeer::C_CODE, RationPeer::COMRDK1, RationPeer::METHRDEVACREF, RationPeer::EVACRATE2, RationPeer::FEEDBEGIN1, RationPeer::FEEDBEGIN2, RationPeer::RD2, RationPeer::FEEDSTOP1, RationPeer::FEEDSTOP2, RationPeer::DAILYFEEDINGCYCLE, RationPeer::COMMENT, RationPeer::ENTERED, RationPeer::DATEENTERED, RationPeer::MODIFIED, RationPeer::DATEMODIFIED, RationPeer::EXPERT, RationPeer::DATECHECKED, RationPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'RDREFNO', 'DATAREF1', 'EVACRATE1', 'FOODI', 'RD1', 'FOODII', 'GCE', 'FOODNAME', 'TBW', 'WATER', 'LOCALITY', 'SALINITY', 'C_CODE', 'COMRDK1', 'METHRDEVACREF', 'EVACRATE2', 'FEEDBEGIN1', 'FEEDBEGIN2', 'RD2', 'FEEDSTOP1', 'FEEDSTOP2', 'DAILYFEEDINGCYCLE', 'COMMENT', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr', 'StockCode', 'SpecCode', 'RDRefNo', 'DataRef1', 'EvacRate1', 'FoodI', 'Rd1', 'FoodII', 'GCE', 'FoodName', 'TBW', 'Water', 'Locality', 'Salinity', 'C_Code', 'ComRDK1', 'MethRDEvacRef', 'EvacRate2', 'FeedBegin1', 'FeedBegin2', 'RD2', 'FeedStop1', 'FeedStop2', 'DailyFeedingCycle', 'Comment', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. RationPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Rdrefno' => 3, 'Dataref1' => 4, 'Evacrate1' => 5, 'Foodi' => 6, 'Rd1' => 7, 'Foodii' => 8, 'Gce' => 9, 'Foodname' => 10, 'Tbw' => 11, 'Water' => 12, 'Locality' => 13, 'Salinity' => 14, 'CCode' => 15, 'Comrdk1' => 16, 'Methrdevacref' => 17, 'Evacrate2' => 18, 'Feedbegin1' => 19, 'Feedbegin2' => 20, 'Rd2' => 21, 'Feedstop1' => 22, 'Feedstop2' => 23, 'Dailyfeedingcycle' => 24, 'Comment' => 25, 'Entered' => 26, 'Dateentered' => 27, 'Modified' => 28, 'Datemodified' => 29, 'Expert' => 30, 'Datechecked' => 31, 'Ts' => 32, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'rdrefno' => 3, 'dataref1' => 4, 'evacrate1' => 5, 'foodi' => 6, 'rd1' => 7, 'foodii' => 8, 'gce' => 9, 'foodname' => 10, 'tbw' => 11, 'water' => 12, 'locality' => 13, 'salinity' => 14, 'cCode' => 15, 'comrdk1' => 16, 'methrdevacref' => 17, 'evacrate2' => 18, 'feedbegin1' => 19, 'feedbegin2' => 20, 'rd2' => 21, 'feedstop1' => 22, 'feedstop2' => 23, 'dailyfeedingcycle' => 24, 'comment' => 25, 'entered' => 26, 'dateentered' => 27, 'modified' => 28, 'datemodified' => 29, 'expert' => 30, 'datechecked' => 31, 'ts' => 32, ),
        BasePeer::TYPE_COLNAME => array (RationPeer::AUTOCTR => 0, RationPeer::STOCKCODE => 1, RationPeer::SPECCODE => 2, RationPeer::RDREFNO => 3, RationPeer::DATAREF1 => 4, RationPeer::EVACRATE1 => 5, RationPeer::FOODI => 6, RationPeer::RD1 => 7, RationPeer::FOODII => 8, RationPeer::GCE => 9, RationPeer::FOODNAME => 10, RationPeer::TBW => 11, RationPeer::WATER => 12, RationPeer::LOCALITY => 13, RationPeer::SALINITY => 14, RationPeer::C_CODE => 15, RationPeer::COMRDK1 => 16, RationPeer::METHRDEVACREF => 17, RationPeer::EVACRATE2 => 18, RationPeer::FEEDBEGIN1 => 19, RationPeer::FEEDBEGIN2 => 20, RationPeer::RD2 => 21, RationPeer::FEEDSTOP1 => 22, RationPeer::FEEDSTOP2 => 23, RationPeer::DAILYFEEDINGCYCLE => 24, RationPeer::COMMENT => 25, RationPeer::ENTERED => 26, RationPeer::DATEENTERED => 27, RationPeer::MODIFIED => 28, RationPeer::DATEMODIFIED => 29, RationPeer::EXPERT => 30, RationPeer::DATECHECKED => 31, RationPeer::TS => 32, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'RDREFNO' => 3, 'DATAREF1' => 4, 'EVACRATE1' => 5, 'FOODI' => 6, 'RD1' => 7, 'FOODII' => 8, 'GCE' => 9, 'FOODNAME' => 10, 'TBW' => 11, 'WATER' => 12, 'LOCALITY' => 13, 'SALINITY' => 14, 'C_CODE' => 15, 'COMRDK1' => 16, 'METHRDEVACREF' => 17, 'EVACRATE2' => 18, 'FEEDBEGIN1' => 19, 'FEEDBEGIN2' => 20, 'RD2' => 21, 'FEEDSTOP1' => 22, 'FEEDSTOP2' => 23, 'DAILYFEEDINGCYCLE' => 24, 'COMMENT' => 25, 'ENTERED' => 26, 'DATEENTERED' => 27, 'MODIFIED' => 28, 'DATEMODIFIED' => 29, 'EXPERT' => 30, 'DATECHECKED' => 31, 'TS' => 32, ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'RDRefNo' => 3, 'DataRef1' => 4, 'EvacRate1' => 5, 'FoodI' => 6, 'Rd1' => 7, 'FoodII' => 8, 'GCE' => 9, 'FoodName' => 10, 'TBW' => 11, 'Water' => 12, 'Locality' => 13, 'Salinity' => 14, 'C_Code' => 15, 'ComRDK1' => 16, 'MethRDEvacRef' => 17, 'EvacRate2' => 18, 'FeedBegin1' => 19, 'FeedBegin2' => 20, 'RD2' => 21, 'FeedStop1' => 22, 'FeedStop2' => 23, 'DailyFeedingCycle' => 24, 'Comment' => 25, 'Entered' => 26, 'DateEntered' => 27, 'Modified' => 28, 'DateModified' => 29, 'Expert' => 30, 'DateChecked' => 31, 'TS' => 32, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, )
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
        $toNames = RationPeer::getFieldNames($toType);
        $key = isset(RationPeer::$fieldKeys[$fromType][$name]) ? RationPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(RationPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, RationPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return RationPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. RationPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(RationPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(RationPeer::AUTOCTR);
            $criteria->addSelectColumn(RationPeer::STOCKCODE);
            $criteria->addSelectColumn(RationPeer::SPECCODE);
            $criteria->addSelectColumn(RationPeer::RDREFNO);
            $criteria->addSelectColumn(RationPeer::DATAREF1);
            $criteria->addSelectColumn(RationPeer::EVACRATE1);
            $criteria->addSelectColumn(RationPeer::FOODI);
            $criteria->addSelectColumn(RationPeer::RD1);
            $criteria->addSelectColumn(RationPeer::FOODII);
            $criteria->addSelectColumn(RationPeer::GCE);
            $criteria->addSelectColumn(RationPeer::FOODNAME);
            $criteria->addSelectColumn(RationPeer::TBW);
            $criteria->addSelectColumn(RationPeer::WATER);
            $criteria->addSelectColumn(RationPeer::LOCALITY);
            $criteria->addSelectColumn(RationPeer::SALINITY);
            $criteria->addSelectColumn(RationPeer::C_CODE);
            $criteria->addSelectColumn(RationPeer::COMRDK1);
            $criteria->addSelectColumn(RationPeer::METHRDEVACREF);
            $criteria->addSelectColumn(RationPeer::EVACRATE2);
            $criteria->addSelectColumn(RationPeer::FEEDBEGIN1);
            $criteria->addSelectColumn(RationPeer::FEEDBEGIN2);
            $criteria->addSelectColumn(RationPeer::RD2);
            $criteria->addSelectColumn(RationPeer::FEEDSTOP1);
            $criteria->addSelectColumn(RationPeer::FEEDSTOP2);
            $criteria->addSelectColumn(RationPeer::DAILYFEEDINGCYCLE);
            $criteria->addSelectColumn(RationPeer::COMMENT);
            $criteria->addSelectColumn(RationPeer::ENTERED);
            $criteria->addSelectColumn(RationPeer::DATEENTERED);
            $criteria->addSelectColumn(RationPeer::MODIFIED);
            $criteria->addSelectColumn(RationPeer::DATEMODIFIED);
            $criteria->addSelectColumn(RationPeer::EXPERT);
            $criteria->addSelectColumn(RationPeer::DATECHECKED);
            $criteria->addSelectColumn(RationPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.AutoCtr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.RDRefNo');
            $criteria->addSelectColumn($alias . '.DataRef1');
            $criteria->addSelectColumn($alias . '.EvacRate1');
            $criteria->addSelectColumn($alias . '.FoodI');
            $criteria->addSelectColumn($alias . '.Rd1');
            $criteria->addSelectColumn($alias . '.FoodII');
            $criteria->addSelectColumn($alias . '.GCE');
            $criteria->addSelectColumn($alias . '.FoodName');
            $criteria->addSelectColumn($alias . '.TBW');
            $criteria->addSelectColumn($alias . '.Water');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.Salinity');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.ComRDK1');
            $criteria->addSelectColumn($alias . '.MethRDEvacRef');
            $criteria->addSelectColumn($alias . '.EvacRate2');
            $criteria->addSelectColumn($alias . '.FeedBegin1');
            $criteria->addSelectColumn($alias . '.FeedBegin2');
            $criteria->addSelectColumn($alias . '.RD2');
            $criteria->addSelectColumn($alias . '.FeedStop1');
            $criteria->addSelectColumn($alias . '.FeedStop2');
            $criteria->addSelectColumn($alias . '.DailyFeedingCycle');
            $criteria->addSelectColumn($alias . '.Comment');
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
        $criteria->setPrimaryTableName(RationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(RationPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(RationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Ration
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = RationPeer::doSelect($critcopy, $con);
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
        return RationPeer::populateObjects(RationPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(RationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            RationPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(RationPeer::DATABASE_NAME);

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
     * @param Ration $obj A Ration object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            RationPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Ration object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Ration) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Ration object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(RationPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Ration Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(RationPeer::$instances[$key])) {
                return RationPeer::$instances[$key];
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
        foreach (RationPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        RationPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to ration
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
        $cls = RationPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = RationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = RationPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RationPeer::addInstanceToPool($obj, $key);
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
     * @return array (Ration object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = RationPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = RationPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + RationPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RationPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            RationPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(RationPeer::DATABASE_NAME)->getTable(RationPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseRationPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseRationPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \RationTableMap());
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
        return RationPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Ration or Criteria object.
     *
     * @param      mixed $values Criteria or Ration object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Ration object
        }

        if ($criteria->containsKey(RationPeer::AUTOCTR) && $criteria->keyContainsValue(RationPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.RationPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(RationPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Ration or Criteria object.
     *
     * @param      mixed $values Criteria or Ration object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(RationPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(RationPeer::AUTOCTR);
            $value = $criteria->remove(RationPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(RationPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(RationPeer::TABLE_NAME);
            }

        } else { // $values is Ration object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(RationPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ration table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(RationPeer::TABLE_NAME, $con, RationPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RationPeer::clearInstancePool();
            RationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Ration or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Ration object or primary key or array of primary keys
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
            $con = Propel::getConnection(RationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            RationPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Ration) { // it's a model object
            // invalidate the cache for this single object
            RationPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RationPeer::DATABASE_NAME);
            $criteria->add(RationPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                RationPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(RationPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            RationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Ration object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Ration $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(RationPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(RationPeer::TABLE_NAME);

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

        return BasePeer::doValidate(RationPeer::DATABASE_NAME, RationPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Ration
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = RationPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(RationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(RationPeer::DATABASE_NAME);
        $criteria->add(RationPeer::AUTOCTR, $pk);

        $v = RationPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Ration[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(RationPeer::DATABASE_NAME);
            $criteria->add(RationPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = RationPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseRationPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseRationPeer::buildTableMap();

