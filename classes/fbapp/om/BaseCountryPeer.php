<?php


/**
 * Base static class for performing query and update operations on the 'country' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseCountryPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'country';

    /** the related Propel class for this table */
    const OM_CLASS = 'Country';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CountryTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 35;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 35;

    /** the column name for the autoctr field */
    const AUTOCTR = 'country.autoctr';

    /** the column name for the Stockcode field */
    const STOCKCODE = 'country.Stockcode';

    /** the column name for the C_Code field */
    const C_CODE = 'country.C_Code';

    /** the column name for the SpecCode field */
    const SPECCODE = 'country.SpecCode';

    /** the column name for the CountryRefNo field */
    const COUNTRYREFNO = 'country.CountryRefNo';

    /** the column name for the AlsoRef field */
    const ALSOREF = 'country.AlsoRef';

    /** the column name for the Status field */
    const STATUS = 'country.Status';

    /** the column name for the CurrentPresence field */
    const CURRENTPRESENCE = 'country.CurrentPresence';

    /** the column name for the Freshwater field */
    const FRESHWATER = 'country.Freshwater';

    /** the column name for the Brackish field */
    const BRACKISH = 'country.Brackish';

    /** the column name for the Saltwater field */
    const SALTWATER = 'country.Saltwater';

    /** the column name for the Comments field */
    const COMMENTS = 'country.Comments';

    /** the column name for the Abundance field */
    const ABUNDANCE = 'country.Abundance';

    /** the column name for the RefAbundance field */
    const REFABUNDANCE = 'country.RefAbundance';

    /** the column name for the Importance field */
    const IMPORTANCE = 'country.Importance';

    /** the column name for the RefImportance field */
    const REFIMPORTANCE = 'country.RefImportance';

    /** the column name for the ExVesselPrice field */
    const EXVESSELPRICE = 'country.ExVesselPrice';

    /** the column name for the Aquaculture field */
    const AQUACULTURE = 'country.Aquaculture';

    /** the column name for the RefAquaculture field */
    const REFAQUACULTURE = 'country.RefAquaculture';

    /** the column name for the LiveExportOrg field */
    const LIVEEXPORTORG = 'country.LiveExportOrg';

    /** the column name for the LiveExport field */
    const LIVEEXPORT = 'country.LiveExport';

    /** the column name for the RefLiveExport field */
    const REFLIVEEXPORT = 'country.RefLiveExport';

    /** the column name for the Game field */
    const GAME = 'country.Game';

    /** the column name for the Bait field */
    const BAIT = 'country.Bait';

    /** the column name for the Regulations field */
    const REGULATIONS = 'country.Regulations';

    /** the column name for the RefRegulations field */
    const REFREGULATIONS = 'country.RefRegulations';

    /** the column name for the Threatened field */
    const THREATENED = 'country.Threatened';

    /** the column name for the CountrySubComp field */
    const COUNTRYSUBCOMP = 'country.CountrySubComp';

    /** the column name for the Entered field */
    const ENTERED = 'country.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'country.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'country.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'country.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'country.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'country.DateChecked';

    /** the column name for the TS field */
    const TS = 'country.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Country objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Country[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CountryPeer::$fieldNames[CountryPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'CCode', 'Speccode', 'Countryrefno', 'Alsoref', 'Status', 'Currentpresence', 'Freshwater', 'Brackish', 'Saltwater', 'Comments', 'Abundance', 'Refabundance', 'Importance', 'Refimportance', 'Exvesselprice', 'Aquaculture', 'Refaquaculture', 'Liveexportorg', 'Liveexport', 'Refliveexport', 'Game', 'Bait', 'Regulations', 'Refregulations', 'Threatened', 'Countrysubcomp', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'cCode', 'speccode', 'countryrefno', 'alsoref', 'status', 'currentpresence', 'freshwater', 'brackish', 'saltwater', 'comments', 'abundance', 'refabundance', 'importance', 'refimportance', 'exvesselprice', 'aquaculture', 'refaquaculture', 'liveexportorg', 'liveexport', 'refliveexport', 'game', 'bait', 'regulations', 'refregulations', 'threatened', 'countrysubcomp', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (CountryPeer::AUTOCTR, CountryPeer::STOCKCODE, CountryPeer::C_CODE, CountryPeer::SPECCODE, CountryPeer::COUNTRYREFNO, CountryPeer::ALSOREF, CountryPeer::STATUS, CountryPeer::CURRENTPRESENCE, CountryPeer::FRESHWATER, CountryPeer::BRACKISH, CountryPeer::SALTWATER, CountryPeer::COMMENTS, CountryPeer::ABUNDANCE, CountryPeer::REFABUNDANCE, CountryPeer::IMPORTANCE, CountryPeer::REFIMPORTANCE, CountryPeer::EXVESSELPRICE, CountryPeer::AQUACULTURE, CountryPeer::REFAQUACULTURE, CountryPeer::LIVEEXPORTORG, CountryPeer::LIVEEXPORT, CountryPeer::REFLIVEEXPORT, CountryPeer::GAME, CountryPeer::BAIT, CountryPeer::REGULATIONS, CountryPeer::REFREGULATIONS, CountryPeer::THREATENED, CountryPeer::COUNTRYSUBCOMP, CountryPeer::ENTERED, CountryPeer::DATEENTERED, CountryPeer::MODIFIED, CountryPeer::DATEMODIFIED, CountryPeer::EXPERT, CountryPeer::DATECHECKED, CountryPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'C_CODE', 'SPECCODE', 'COUNTRYREFNO', 'ALSOREF', 'STATUS', 'CURRENTPRESENCE', 'FRESHWATER', 'BRACKISH', 'SALTWATER', 'COMMENTS', 'ABUNDANCE', 'REFABUNDANCE', 'IMPORTANCE', 'REFIMPORTANCE', 'EXVESSELPRICE', 'AQUACULTURE', 'REFAQUACULTURE', 'LIVEEXPORTORG', 'LIVEEXPORT', 'REFLIVEEXPORT', 'GAME', 'BAIT', 'REGULATIONS', 'REFREGULATIONS', 'THREATENED', 'COUNTRYSUBCOMP', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'Stockcode', 'C_Code', 'SpecCode', 'CountryRefNo', 'AlsoRef', 'Status', 'CurrentPresence', 'Freshwater', 'Brackish', 'Saltwater', 'Comments', 'Abundance', 'RefAbundance', 'Importance', 'RefImportance', 'ExVesselPrice', 'Aquaculture', 'RefAquaculture', 'LiveExportOrg', 'LiveExport', 'RefLiveExport', 'Game', 'Bait', 'Regulations', 'RefRegulations', 'Threatened', 'CountrySubComp', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CountryPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'CCode' => 2, 'Speccode' => 3, 'Countryrefno' => 4, 'Alsoref' => 5, 'Status' => 6, 'Currentpresence' => 7, 'Freshwater' => 8, 'Brackish' => 9, 'Saltwater' => 10, 'Comments' => 11, 'Abundance' => 12, 'Refabundance' => 13, 'Importance' => 14, 'Refimportance' => 15, 'Exvesselprice' => 16, 'Aquaculture' => 17, 'Refaquaculture' => 18, 'Liveexportorg' => 19, 'Liveexport' => 20, 'Refliveexport' => 21, 'Game' => 22, 'Bait' => 23, 'Regulations' => 24, 'Refregulations' => 25, 'Threatened' => 26, 'Countrysubcomp' => 27, 'Entered' => 28, 'Dateentered' => 29, 'Modified' => 30, 'Datemodified' => 31, 'Expert' => 32, 'Datechecked' => 33, 'Ts' => 34, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'cCode' => 2, 'speccode' => 3, 'countryrefno' => 4, 'alsoref' => 5, 'status' => 6, 'currentpresence' => 7, 'freshwater' => 8, 'brackish' => 9, 'saltwater' => 10, 'comments' => 11, 'abundance' => 12, 'refabundance' => 13, 'importance' => 14, 'refimportance' => 15, 'exvesselprice' => 16, 'aquaculture' => 17, 'refaquaculture' => 18, 'liveexportorg' => 19, 'liveexport' => 20, 'refliveexport' => 21, 'game' => 22, 'bait' => 23, 'regulations' => 24, 'refregulations' => 25, 'threatened' => 26, 'countrysubcomp' => 27, 'entered' => 28, 'dateentered' => 29, 'modified' => 30, 'datemodified' => 31, 'expert' => 32, 'datechecked' => 33, 'ts' => 34, ),
        BasePeer::TYPE_COLNAME => array (CountryPeer::AUTOCTR => 0, CountryPeer::STOCKCODE => 1, CountryPeer::C_CODE => 2, CountryPeer::SPECCODE => 3, CountryPeer::COUNTRYREFNO => 4, CountryPeer::ALSOREF => 5, CountryPeer::STATUS => 6, CountryPeer::CURRENTPRESENCE => 7, CountryPeer::FRESHWATER => 8, CountryPeer::BRACKISH => 9, CountryPeer::SALTWATER => 10, CountryPeer::COMMENTS => 11, CountryPeer::ABUNDANCE => 12, CountryPeer::REFABUNDANCE => 13, CountryPeer::IMPORTANCE => 14, CountryPeer::REFIMPORTANCE => 15, CountryPeer::EXVESSELPRICE => 16, CountryPeer::AQUACULTURE => 17, CountryPeer::REFAQUACULTURE => 18, CountryPeer::LIVEEXPORTORG => 19, CountryPeer::LIVEEXPORT => 20, CountryPeer::REFLIVEEXPORT => 21, CountryPeer::GAME => 22, CountryPeer::BAIT => 23, CountryPeer::REGULATIONS => 24, CountryPeer::REFREGULATIONS => 25, CountryPeer::THREATENED => 26, CountryPeer::COUNTRYSUBCOMP => 27, CountryPeer::ENTERED => 28, CountryPeer::DATEENTERED => 29, CountryPeer::MODIFIED => 30, CountryPeer::DATEMODIFIED => 31, CountryPeer::EXPERT => 32, CountryPeer::DATECHECKED => 33, CountryPeer::TS => 34, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'C_CODE' => 2, 'SPECCODE' => 3, 'COUNTRYREFNO' => 4, 'ALSOREF' => 5, 'STATUS' => 6, 'CURRENTPRESENCE' => 7, 'FRESHWATER' => 8, 'BRACKISH' => 9, 'SALTWATER' => 10, 'COMMENTS' => 11, 'ABUNDANCE' => 12, 'REFABUNDANCE' => 13, 'IMPORTANCE' => 14, 'REFIMPORTANCE' => 15, 'EXVESSELPRICE' => 16, 'AQUACULTURE' => 17, 'REFAQUACULTURE' => 18, 'LIVEEXPORTORG' => 19, 'LIVEEXPORT' => 20, 'REFLIVEEXPORT' => 21, 'GAME' => 22, 'BAIT' => 23, 'REGULATIONS' => 24, 'REFREGULATIONS' => 25, 'THREATENED' => 26, 'COUNTRYSUBCOMP' => 27, 'ENTERED' => 28, 'DATEENTERED' => 29, 'MODIFIED' => 30, 'DATEMODIFIED' => 31, 'EXPERT' => 32, 'DATECHECKED' => 33, 'TS' => 34, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'Stockcode' => 1, 'C_Code' => 2, 'SpecCode' => 3, 'CountryRefNo' => 4, 'AlsoRef' => 5, 'Status' => 6, 'CurrentPresence' => 7, 'Freshwater' => 8, 'Brackish' => 9, 'Saltwater' => 10, 'Comments' => 11, 'Abundance' => 12, 'RefAbundance' => 13, 'Importance' => 14, 'RefImportance' => 15, 'ExVesselPrice' => 16, 'Aquaculture' => 17, 'RefAquaculture' => 18, 'LiveExportOrg' => 19, 'LiveExport' => 20, 'RefLiveExport' => 21, 'Game' => 22, 'Bait' => 23, 'Regulations' => 24, 'RefRegulations' => 25, 'Threatened' => 26, 'CountrySubComp' => 27, 'Entered' => 28, 'DateEntered' => 29, 'Modified' => 30, 'DateModified' => 31, 'Expert' => 32, 'DateChecked' => 33, 'TS' => 34, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
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
        $toNames = CountryPeer::getFieldNames($toType);
        $key = isset(CountryPeer::$fieldKeys[$fromType][$name]) ? CountryPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CountryPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CountryPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CountryPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CountryPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CountryPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CountryPeer::AUTOCTR);
            $criteria->addSelectColumn(CountryPeer::STOCKCODE);
            $criteria->addSelectColumn(CountryPeer::C_CODE);
            $criteria->addSelectColumn(CountryPeer::SPECCODE);
            $criteria->addSelectColumn(CountryPeer::COUNTRYREFNO);
            $criteria->addSelectColumn(CountryPeer::ALSOREF);
            $criteria->addSelectColumn(CountryPeer::STATUS);
            $criteria->addSelectColumn(CountryPeer::CURRENTPRESENCE);
            $criteria->addSelectColumn(CountryPeer::FRESHWATER);
            $criteria->addSelectColumn(CountryPeer::BRACKISH);
            $criteria->addSelectColumn(CountryPeer::SALTWATER);
            $criteria->addSelectColumn(CountryPeer::COMMENTS);
            $criteria->addSelectColumn(CountryPeer::ABUNDANCE);
            $criteria->addSelectColumn(CountryPeer::REFABUNDANCE);
            $criteria->addSelectColumn(CountryPeer::IMPORTANCE);
            $criteria->addSelectColumn(CountryPeer::REFIMPORTANCE);
            $criteria->addSelectColumn(CountryPeer::EXVESSELPRICE);
            $criteria->addSelectColumn(CountryPeer::AQUACULTURE);
            $criteria->addSelectColumn(CountryPeer::REFAQUACULTURE);
            $criteria->addSelectColumn(CountryPeer::LIVEEXPORTORG);
            $criteria->addSelectColumn(CountryPeer::LIVEEXPORT);
            $criteria->addSelectColumn(CountryPeer::REFLIVEEXPORT);
            $criteria->addSelectColumn(CountryPeer::GAME);
            $criteria->addSelectColumn(CountryPeer::BAIT);
            $criteria->addSelectColumn(CountryPeer::REGULATIONS);
            $criteria->addSelectColumn(CountryPeer::REFREGULATIONS);
            $criteria->addSelectColumn(CountryPeer::THREATENED);
            $criteria->addSelectColumn(CountryPeer::COUNTRYSUBCOMP);
            $criteria->addSelectColumn(CountryPeer::ENTERED);
            $criteria->addSelectColumn(CountryPeer::DATEENTERED);
            $criteria->addSelectColumn(CountryPeer::MODIFIED);
            $criteria->addSelectColumn(CountryPeer::DATEMODIFIED);
            $criteria->addSelectColumn(CountryPeer::EXPERT);
            $criteria->addSelectColumn(CountryPeer::DATECHECKED);
            $criteria->addSelectColumn(CountryPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.Stockcode');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.CountryRefNo');
            $criteria->addSelectColumn($alias . '.AlsoRef');
            $criteria->addSelectColumn($alias . '.Status');
            $criteria->addSelectColumn($alias . '.CurrentPresence');
            $criteria->addSelectColumn($alias . '.Freshwater');
            $criteria->addSelectColumn($alias . '.Brackish');
            $criteria->addSelectColumn($alias . '.Saltwater');
            $criteria->addSelectColumn($alias . '.Comments');
            $criteria->addSelectColumn($alias . '.Abundance');
            $criteria->addSelectColumn($alias . '.RefAbundance');
            $criteria->addSelectColumn($alias . '.Importance');
            $criteria->addSelectColumn($alias . '.RefImportance');
            $criteria->addSelectColumn($alias . '.ExVesselPrice');
            $criteria->addSelectColumn($alias . '.Aquaculture');
            $criteria->addSelectColumn($alias . '.RefAquaculture');
            $criteria->addSelectColumn($alias . '.LiveExportOrg');
            $criteria->addSelectColumn($alias . '.LiveExport');
            $criteria->addSelectColumn($alias . '.RefLiveExport');
            $criteria->addSelectColumn($alias . '.Game');
            $criteria->addSelectColumn($alias . '.Bait');
            $criteria->addSelectColumn($alias . '.Regulations');
            $criteria->addSelectColumn($alias . '.RefRegulations');
            $criteria->addSelectColumn($alias . '.Threatened');
            $criteria->addSelectColumn($alias . '.CountrySubComp');
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
        $criteria->setPrimaryTableName(CountryPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CountryPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CountryPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CountryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Country
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CountryPeer::doSelect($critcopy, $con);
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
        return CountryPeer::populateObjects(CountryPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CountryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CountryPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CountryPeer::DATABASE_NAME);

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
     * @param Country $obj A Country object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getCCode()));
            } // if key === null
            CountryPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Country object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Country) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getCCode()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Country object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CountryPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Country Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CountryPeer::$instances[$key])) {
                return CountryPeer::$instances[$key];
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
        foreach (CountryPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CountryPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to country
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
        if ($row[$startcol + 1] === null && $row[$startcol + 2] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 2]));
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

        return array((int) $row[$startcol + 1], (string) $row[$startcol + 2]);
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
        $cls = CountryPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CountryPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CountryPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CountryPeer::addInstanceToPool($obj, $key);
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
     * @return array (Country object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CountryPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CountryPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CountryPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CountryPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CountryPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CountryPeer::DATABASE_NAME)->getTable(CountryPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCountryPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCountryPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CountryTableMap());
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
        return CountryPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Country or Criteria object.
     *
     * @param      mixed $values Criteria or Country object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CountryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Country object
        }


        // Set the correct dbName
        $criteria->setDbName(CountryPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Country or Criteria object.
     *
     * @param      mixed $values Criteria or Country object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CountryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CountryPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CountryPeer::STOCKCODE);
            $value = $criteria->remove(CountryPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(CountryPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CountryPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CountryPeer::C_CODE);
            $value = $criteria->remove(CountryPeer::C_CODE);
            if ($value) {
                $selectCriteria->add(CountryPeer::C_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CountryPeer::TABLE_NAME);
            }

        } else { // $values is Country object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CountryPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the country table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CountryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CountryPeer::TABLE_NAME, $con, CountryPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CountryPeer::clearInstancePool();
            CountryPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Country or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Country object or primary key or array of primary keys
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
            $con = Propel::getConnection(CountryPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CountryPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Country) { // it's a model object
            // invalidate the cache for this single object
            CountryPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CountryPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CountryPeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CountryPeer::C_CODE, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CountryPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CountryPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CountryPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Country object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Country $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CountryPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CountryPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CountryPeer::DATABASE_NAME, CountryPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stockcode
     * @param   string $c_code
     * @param      PropelPDO $con
     * @return Country
     */
    public static function retrieveByPK($stockcode, $c_code, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $c_code));
         if (null !== ($obj = CountryPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CountryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CountryPeer::DATABASE_NAME);
        $criteria->add(CountryPeer::STOCKCODE, $stockcode);
        $criteria->add(CountryPeer::C_CODE, $c_code);
        $v = CountryPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCountryPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCountryPeer::buildTableMap();

