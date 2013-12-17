<?php


/**
 * Base static class for performing query and update operations on the 'countrysubref' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseCountrysubrefPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'countrysubref';

    /** the related Propel class for this table */
    const OM_CLASS = 'Countrysubref';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CountrysubrefTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 34;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 34;

    /** the column name for the CSub_Code field */
    const CSUB_CODE = 'countrysubref.CSub_Code';

    /** the column name for the C_Code field */
    const C_CODE = 'countrysubref.C_Code';

    /** the column name for the CountrySub field */
    const COUNTRYSUB = 'countrysubref.CountrySub';

    /** the column name for the OtherName field */
    const OTHERNAME = 'countrysubref.OtherName';

    /** the column name for the CountrySubType field */
    const COUNTRYSUBTYPE = 'countrysubref.CountrySubType';

    /** the column name for the CountrySubRank field */
    const COUNTRYSUBRANK = 'countrysubref.CountrySubRank';

    /** the column name for the Comments field */
    const COMMENTS = 'countrysubref.Comments';

    /** the column name for the NorthernLatitude field */
    const NORTHERNLATITUDE = 'countrysubref.NorthernLatitude';

    /** the column name for the NorthernLatitudeNS field */
    const NORTHERNLATITUDENS = 'countrysubref.NorthernLatitudeNS';

    /** the column name for the SouthernLatitude field */
    const SOUTHERNLATITUDE = 'countrysubref.SouthernLatitude';

    /** the column name for the SouthernLatitudeNS field */
    const SOUTHERNLATITUDENS = 'countrysubref.SouthernLatitudeNS';

    /** the column name for the EasternLongitude field */
    const EASTERNLONGITUDE = 'countrysubref.EasternLongitude';

    /** the column name for the EasternLongitudeEW field */
    const EASTERNLONGITUDEEW = 'countrysubref.EasternLongitudeEW';

    /** the column name for the WesternLongitude field */
    const WESTERNLONGITUDE = 'countrysubref.WesternLongitude';

    /** the column name for the WesternLongitudeEW field */
    const WESTERNLONGITUDEEW = 'countrysubref.WesternLongitudeEW';

    /** the column name for the Capital field */
    const CAPITAL = 'countrysubref.Capital';

    /** the column name for the LatDec field */
    const LATDEC = 'countrysubref.LatDec';

    /** the column name for the NorthSouth field */
    const NORTHSOUTH = 'countrysubref.NorthSouth';

    /** the column name for the LongDec field */
    const LONGDEC = 'countrysubref.LongDec';

    /** the column name for the EastWest field */
    const EASTWEST = 'countrysubref.EastWest';

    /** the column name for the PolarBoreal field */
    const POLARBOREAL = 'countrysubref.PolarBoreal';

    /** the column name for the Temperate field */
    const TEMPERATE = 'countrysubref.Temperate';

    /** the column name for the Subtropical field */
    const SUBTROPICAL = 'countrysubref.Subtropical';

    /** the column name for the Tropical field */
    const TROPICAL = 'countrysubref.Tropical';

    /** the column name for the AreaCodeInland field */
    const AREACODEINLAND = 'countrysubref.AreaCodeInland';

    /** the column name for the AreaCodeMarineI field */
    const AREACODEMARINEI = 'countrysubref.AreaCodeMarineI';

    /** the column name for the AreaCodeMarineII field */
    const AREACODEMARINEII = 'countrysubref.AreaCodeMarineII';

    /** the column name for the Entered field */
    const ENTERED = 'countrysubref.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'countrysubref.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'countrysubref.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'countrysubref.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'countrysubref.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'countrysubref.DateChecked';

    /** the column name for the TS field */
    const TS = 'countrysubref.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Countrysubref objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Countrysubref[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CountrysubrefPeer::$fieldNames[CountrysubrefPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('CsubCode', 'CCode', 'Countrysub', 'Othername', 'Countrysubtype', 'Countrysubrank', 'Comments', 'Northernlatitude', 'Northernlatitudens', 'Southernlatitude', 'Southernlatitudens', 'Easternlongitude', 'Easternlongitudeew', 'Westernlongitude', 'Westernlongitudeew', 'Capital', 'Latdec', 'Northsouth', 'Longdec', 'Eastwest', 'Polarboreal', 'Temperate', 'Subtropical', 'Tropical', 'Areacodeinland', 'Areacodemarinei', 'Areacodemarineii', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('csubCode', 'cCode', 'countrysub', 'othername', 'countrysubtype', 'countrysubrank', 'comments', 'northernlatitude', 'northernlatitudens', 'southernlatitude', 'southernlatitudens', 'easternlongitude', 'easternlongitudeew', 'westernlongitude', 'westernlongitudeew', 'capital', 'latdec', 'northsouth', 'longdec', 'eastwest', 'polarboreal', 'temperate', 'subtropical', 'tropical', 'areacodeinland', 'areacodemarinei', 'areacodemarineii', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (CountrysubrefPeer::CSUB_CODE, CountrysubrefPeer::C_CODE, CountrysubrefPeer::COUNTRYSUB, CountrysubrefPeer::OTHERNAME, CountrysubrefPeer::COUNTRYSUBTYPE, CountrysubrefPeer::COUNTRYSUBRANK, CountrysubrefPeer::COMMENTS, CountrysubrefPeer::NORTHERNLATITUDE, CountrysubrefPeer::NORTHERNLATITUDENS, CountrysubrefPeer::SOUTHERNLATITUDE, CountrysubrefPeer::SOUTHERNLATITUDENS, CountrysubrefPeer::EASTERNLONGITUDE, CountrysubrefPeer::EASTERNLONGITUDEEW, CountrysubrefPeer::WESTERNLONGITUDE, CountrysubrefPeer::WESTERNLONGITUDEEW, CountrysubrefPeer::CAPITAL, CountrysubrefPeer::LATDEC, CountrysubrefPeer::NORTHSOUTH, CountrysubrefPeer::LONGDEC, CountrysubrefPeer::EASTWEST, CountrysubrefPeer::POLARBOREAL, CountrysubrefPeer::TEMPERATE, CountrysubrefPeer::SUBTROPICAL, CountrysubrefPeer::TROPICAL, CountrysubrefPeer::AREACODEINLAND, CountrysubrefPeer::AREACODEMARINEI, CountrysubrefPeer::AREACODEMARINEII, CountrysubrefPeer::ENTERED, CountrysubrefPeer::DATEENTERED, CountrysubrefPeer::MODIFIED, CountrysubrefPeer::DATEMODIFIED, CountrysubrefPeer::EXPERT, CountrysubrefPeer::DATECHECKED, CountrysubrefPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CSUB_CODE', 'C_CODE', 'COUNTRYSUB', 'OTHERNAME', 'COUNTRYSUBTYPE', 'COUNTRYSUBRANK', 'COMMENTS', 'NORTHERNLATITUDE', 'NORTHERNLATITUDENS', 'SOUTHERNLATITUDE', 'SOUTHERNLATITUDENS', 'EASTERNLONGITUDE', 'EASTERNLONGITUDEEW', 'WESTERNLONGITUDE', 'WESTERNLONGITUDEEW', 'CAPITAL', 'LATDEC', 'NORTHSOUTH', 'LONGDEC', 'EASTWEST', 'POLARBOREAL', 'TEMPERATE', 'SUBTROPICAL', 'TROPICAL', 'AREACODEINLAND', 'AREACODEMARINEI', 'AREACODEMARINEII', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('CSub_Code', 'C_Code', 'CountrySub', 'OtherName', 'CountrySubType', 'CountrySubRank', 'Comments', 'NorthernLatitude', 'NorthernLatitudeNS', 'SouthernLatitude', 'SouthernLatitudeNS', 'EasternLongitude', 'EasternLongitudeEW', 'WesternLongitude', 'WesternLongitudeEW', 'Capital', 'LatDec', 'NorthSouth', 'LongDec', 'EastWest', 'PolarBoreal', 'Temperate', 'Subtropical', 'Tropical', 'AreaCodeInland', 'AreaCodeMarineI', 'AreaCodeMarineII', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CountrysubrefPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('CsubCode' => 0, 'CCode' => 1, 'Countrysub' => 2, 'Othername' => 3, 'Countrysubtype' => 4, 'Countrysubrank' => 5, 'Comments' => 6, 'Northernlatitude' => 7, 'Northernlatitudens' => 8, 'Southernlatitude' => 9, 'Southernlatitudens' => 10, 'Easternlongitude' => 11, 'Easternlongitudeew' => 12, 'Westernlongitude' => 13, 'Westernlongitudeew' => 14, 'Capital' => 15, 'Latdec' => 16, 'Northsouth' => 17, 'Longdec' => 18, 'Eastwest' => 19, 'Polarboreal' => 20, 'Temperate' => 21, 'Subtropical' => 22, 'Tropical' => 23, 'Areacodeinland' => 24, 'Areacodemarinei' => 25, 'Areacodemarineii' => 26, 'Entered' => 27, 'Dateentered' => 28, 'Modified' => 29, 'Datemodified' => 30, 'Expert' => 31, 'Datechecked' => 32, 'Ts' => 33, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('csubCode' => 0, 'cCode' => 1, 'countrysub' => 2, 'othername' => 3, 'countrysubtype' => 4, 'countrysubrank' => 5, 'comments' => 6, 'northernlatitude' => 7, 'northernlatitudens' => 8, 'southernlatitude' => 9, 'southernlatitudens' => 10, 'easternlongitude' => 11, 'easternlongitudeew' => 12, 'westernlongitude' => 13, 'westernlongitudeew' => 14, 'capital' => 15, 'latdec' => 16, 'northsouth' => 17, 'longdec' => 18, 'eastwest' => 19, 'polarboreal' => 20, 'temperate' => 21, 'subtropical' => 22, 'tropical' => 23, 'areacodeinland' => 24, 'areacodemarinei' => 25, 'areacodemarineii' => 26, 'entered' => 27, 'dateentered' => 28, 'modified' => 29, 'datemodified' => 30, 'expert' => 31, 'datechecked' => 32, 'ts' => 33, ),
        BasePeer::TYPE_COLNAME => array (CountrysubrefPeer::CSUB_CODE => 0, CountrysubrefPeer::C_CODE => 1, CountrysubrefPeer::COUNTRYSUB => 2, CountrysubrefPeer::OTHERNAME => 3, CountrysubrefPeer::COUNTRYSUBTYPE => 4, CountrysubrefPeer::COUNTRYSUBRANK => 5, CountrysubrefPeer::COMMENTS => 6, CountrysubrefPeer::NORTHERNLATITUDE => 7, CountrysubrefPeer::NORTHERNLATITUDENS => 8, CountrysubrefPeer::SOUTHERNLATITUDE => 9, CountrysubrefPeer::SOUTHERNLATITUDENS => 10, CountrysubrefPeer::EASTERNLONGITUDE => 11, CountrysubrefPeer::EASTERNLONGITUDEEW => 12, CountrysubrefPeer::WESTERNLONGITUDE => 13, CountrysubrefPeer::WESTERNLONGITUDEEW => 14, CountrysubrefPeer::CAPITAL => 15, CountrysubrefPeer::LATDEC => 16, CountrysubrefPeer::NORTHSOUTH => 17, CountrysubrefPeer::LONGDEC => 18, CountrysubrefPeer::EASTWEST => 19, CountrysubrefPeer::POLARBOREAL => 20, CountrysubrefPeer::TEMPERATE => 21, CountrysubrefPeer::SUBTROPICAL => 22, CountrysubrefPeer::TROPICAL => 23, CountrysubrefPeer::AREACODEINLAND => 24, CountrysubrefPeer::AREACODEMARINEI => 25, CountrysubrefPeer::AREACODEMARINEII => 26, CountrysubrefPeer::ENTERED => 27, CountrysubrefPeer::DATEENTERED => 28, CountrysubrefPeer::MODIFIED => 29, CountrysubrefPeer::DATEMODIFIED => 30, CountrysubrefPeer::EXPERT => 31, CountrysubrefPeer::DATECHECKED => 32, CountrysubrefPeer::TS => 33, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CSUB_CODE' => 0, 'C_CODE' => 1, 'COUNTRYSUB' => 2, 'OTHERNAME' => 3, 'COUNTRYSUBTYPE' => 4, 'COUNTRYSUBRANK' => 5, 'COMMENTS' => 6, 'NORTHERNLATITUDE' => 7, 'NORTHERNLATITUDENS' => 8, 'SOUTHERNLATITUDE' => 9, 'SOUTHERNLATITUDENS' => 10, 'EASTERNLONGITUDE' => 11, 'EASTERNLONGITUDEEW' => 12, 'WESTERNLONGITUDE' => 13, 'WESTERNLONGITUDEEW' => 14, 'CAPITAL' => 15, 'LATDEC' => 16, 'NORTHSOUTH' => 17, 'LONGDEC' => 18, 'EASTWEST' => 19, 'POLARBOREAL' => 20, 'TEMPERATE' => 21, 'SUBTROPICAL' => 22, 'TROPICAL' => 23, 'AREACODEINLAND' => 24, 'AREACODEMARINEI' => 25, 'AREACODEMARINEII' => 26, 'ENTERED' => 27, 'DATEENTERED' => 28, 'MODIFIED' => 29, 'DATEMODIFIED' => 30, 'EXPERT' => 31, 'DATECHECKED' => 32, 'TS' => 33, ),
        BasePeer::TYPE_FIELDNAME => array ('CSub_Code' => 0, 'C_Code' => 1, 'CountrySub' => 2, 'OtherName' => 3, 'CountrySubType' => 4, 'CountrySubRank' => 5, 'Comments' => 6, 'NorthernLatitude' => 7, 'NorthernLatitudeNS' => 8, 'SouthernLatitude' => 9, 'SouthernLatitudeNS' => 10, 'EasternLongitude' => 11, 'EasternLongitudeEW' => 12, 'WesternLongitude' => 13, 'WesternLongitudeEW' => 14, 'Capital' => 15, 'LatDec' => 16, 'NorthSouth' => 17, 'LongDec' => 18, 'EastWest' => 19, 'PolarBoreal' => 20, 'Temperate' => 21, 'Subtropical' => 22, 'Tropical' => 23, 'AreaCodeInland' => 24, 'AreaCodeMarineI' => 25, 'AreaCodeMarineII' => 26, 'Entered' => 27, 'DateEntered' => 28, 'Modified' => 29, 'DateModified' => 30, 'Expert' => 31, 'DateChecked' => 32, 'TS' => 33, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, )
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
        $toNames = CountrysubrefPeer::getFieldNames($toType);
        $key = isset(CountrysubrefPeer::$fieldKeys[$fromType][$name]) ? CountrysubrefPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CountrysubrefPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CountrysubrefPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CountrysubrefPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CountrysubrefPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CountrysubrefPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CountrysubrefPeer::CSUB_CODE);
            $criteria->addSelectColumn(CountrysubrefPeer::C_CODE);
            $criteria->addSelectColumn(CountrysubrefPeer::COUNTRYSUB);
            $criteria->addSelectColumn(CountrysubrefPeer::OTHERNAME);
            $criteria->addSelectColumn(CountrysubrefPeer::COUNTRYSUBTYPE);
            $criteria->addSelectColumn(CountrysubrefPeer::COUNTRYSUBRANK);
            $criteria->addSelectColumn(CountrysubrefPeer::COMMENTS);
            $criteria->addSelectColumn(CountrysubrefPeer::NORTHERNLATITUDE);
            $criteria->addSelectColumn(CountrysubrefPeer::NORTHERNLATITUDENS);
            $criteria->addSelectColumn(CountrysubrefPeer::SOUTHERNLATITUDE);
            $criteria->addSelectColumn(CountrysubrefPeer::SOUTHERNLATITUDENS);
            $criteria->addSelectColumn(CountrysubrefPeer::EASTERNLONGITUDE);
            $criteria->addSelectColumn(CountrysubrefPeer::EASTERNLONGITUDEEW);
            $criteria->addSelectColumn(CountrysubrefPeer::WESTERNLONGITUDE);
            $criteria->addSelectColumn(CountrysubrefPeer::WESTERNLONGITUDEEW);
            $criteria->addSelectColumn(CountrysubrefPeer::CAPITAL);
            $criteria->addSelectColumn(CountrysubrefPeer::LATDEC);
            $criteria->addSelectColumn(CountrysubrefPeer::NORTHSOUTH);
            $criteria->addSelectColumn(CountrysubrefPeer::LONGDEC);
            $criteria->addSelectColumn(CountrysubrefPeer::EASTWEST);
            $criteria->addSelectColumn(CountrysubrefPeer::POLARBOREAL);
            $criteria->addSelectColumn(CountrysubrefPeer::TEMPERATE);
            $criteria->addSelectColumn(CountrysubrefPeer::SUBTROPICAL);
            $criteria->addSelectColumn(CountrysubrefPeer::TROPICAL);
            $criteria->addSelectColumn(CountrysubrefPeer::AREACODEINLAND);
            $criteria->addSelectColumn(CountrysubrefPeer::AREACODEMARINEI);
            $criteria->addSelectColumn(CountrysubrefPeer::AREACODEMARINEII);
            $criteria->addSelectColumn(CountrysubrefPeer::ENTERED);
            $criteria->addSelectColumn(CountrysubrefPeer::DATEENTERED);
            $criteria->addSelectColumn(CountrysubrefPeer::MODIFIED);
            $criteria->addSelectColumn(CountrysubrefPeer::DATEMODIFIED);
            $criteria->addSelectColumn(CountrysubrefPeer::EXPERT);
            $criteria->addSelectColumn(CountrysubrefPeer::DATECHECKED);
            $criteria->addSelectColumn(CountrysubrefPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.CSub_Code');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.CountrySub');
            $criteria->addSelectColumn($alias . '.OtherName');
            $criteria->addSelectColumn($alias . '.CountrySubType');
            $criteria->addSelectColumn($alias . '.CountrySubRank');
            $criteria->addSelectColumn($alias . '.Comments');
            $criteria->addSelectColumn($alias . '.NorthernLatitude');
            $criteria->addSelectColumn($alias . '.NorthernLatitudeNS');
            $criteria->addSelectColumn($alias . '.SouthernLatitude');
            $criteria->addSelectColumn($alias . '.SouthernLatitudeNS');
            $criteria->addSelectColumn($alias . '.EasternLongitude');
            $criteria->addSelectColumn($alias . '.EasternLongitudeEW');
            $criteria->addSelectColumn($alias . '.WesternLongitude');
            $criteria->addSelectColumn($alias . '.WesternLongitudeEW');
            $criteria->addSelectColumn($alias . '.Capital');
            $criteria->addSelectColumn($alias . '.LatDec');
            $criteria->addSelectColumn($alias . '.NorthSouth');
            $criteria->addSelectColumn($alias . '.LongDec');
            $criteria->addSelectColumn($alias . '.EastWest');
            $criteria->addSelectColumn($alias . '.PolarBoreal');
            $criteria->addSelectColumn($alias . '.Temperate');
            $criteria->addSelectColumn($alias . '.Subtropical');
            $criteria->addSelectColumn($alias . '.Tropical');
            $criteria->addSelectColumn($alias . '.AreaCodeInland');
            $criteria->addSelectColumn($alias . '.AreaCodeMarineI');
            $criteria->addSelectColumn($alias . '.AreaCodeMarineII');
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
        $criteria->setPrimaryTableName(CountrysubrefPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CountrysubrefPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CountrysubrefPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CountrysubrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Countrysubref
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CountrysubrefPeer::doSelect($critcopy, $con);
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
        return CountrysubrefPeer::populateObjects(CountrysubrefPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CountrysubrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CountrysubrefPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CountrysubrefPeer::DATABASE_NAME);

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
     * @param Countrysubref $obj A Countrysubref object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getCsubCode();
            } // if key === null
            CountrysubrefPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Countrysubref object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Countrysubref) {
                $key = (string) $value->getCsubCode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Countrysubref object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CountrysubrefPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Countrysubref Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CountrysubrefPeer::$instances[$key])) {
                return CountrysubrefPeer::$instances[$key];
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
        foreach (CountrysubrefPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CountrysubrefPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to countrysubref
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

        return (string) $row[$startcol];
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
        $cls = CountrysubrefPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CountrysubrefPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CountrysubrefPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CountrysubrefPeer::addInstanceToPool($obj, $key);
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
     * @return array (Countrysubref object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CountrysubrefPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CountrysubrefPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CountrysubrefPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CountrysubrefPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CountrysubrefPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CountrysubrefPeer::DATABASE_NAME)->getTable(CountrysubrefPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCountrysubrefPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCountrysubrefPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CountrysubrefTableMap());
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
        return CountrysubrefPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Countrysubref or Criteria object.
     *
     * @param      mixed $values Criteria or Countrysubref object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CountrysubrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Countrysubref object
        }


        // Set the correct dbName
        $criteria->setDbName(CountrysubrefPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Countrysubref or Criteria object.
     *
     * @param      mixed $values Criteria or Countrysubref object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CountrysubrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CountrysubrefPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CountrysubrefPeer::CSUB_CODE);
            $value = $criteria->remove(CountrysubrefPeer::CSUB_CODE);
            if ($value) {
                $selectCriteria->add(CountrysubrefPeer::CSUB_CODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CountrysubrefPeer::TABLE_NAME);
            }

        } else { // $values is Countrysubref object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CountrysubrefPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the countrysubref table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CountrysubrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CountrysubrefPeer::TABLE_NAME, $con, CountrysubrefPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CountrysubrefPeer::clearInstancePool();
            CountrysubrefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Countrysubref or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Countrysubref object or primary key or array of primary keys
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
            $con = Propel::getConnection(CountrysubrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CountrysubrefPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Countrysubref) { // it's a model object
            // invalidate the cache for this single object
            CountrysubrefPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CountrysubrefPeer::DATABASE_NAME);
            $criteria->add(CountrysubrefPeer::CSUB_CODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CountrysubrefPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CountrysubrefPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CountrysubrefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Countrysubref object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Countrysubref $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CountrysubrefPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CountrysubrefPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CountrysubrefPeer::DATABASE_NAME, CountrysubrefPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Countrysubref
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CountrysubrefPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CountrysubrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CountrysubrefPeer::DATABASE_NAME);
        $criteria->add(CountrysubrefPeer::CSUB_CODE, $pk);

        $v = CountrysubrefPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Countrysubref[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CountrysubrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CountrysubrefPeer::DATABASE_NAME);
            $criteria->add(CountrysubrefPeer::CSUB_CODE, $pks, Criteria::IN);
            $objs = CountrysubrefPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCountrysubrefPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCountrysubrefPeer::buildTableMap();

