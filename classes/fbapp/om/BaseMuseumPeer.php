<?php


/**
 * Base static class for performing query and update operations on the 'museum' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseMuseumPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'museum';

    /** the related Propel class for this table */
    const OM_CLASS = 'Museum';

    /** the related TableMap class for this table */
    const TM_CLASS = 'MuseumTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 48;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 48;

    /** the column name for the OccurrenceRefNo field */
    const OCCURRENCEREFNO = 'museum.OccurrenceRefNo';

    /** the column name for the Museum field */
    const MUSEUM = 'museum.Museum';

    /** the column name for the Acronym field */
    const ACRONYM = 'museum.Acronym';

    /** the column name for the Address field */
    const ADDRESS = 'museum.Address';

    /** the column name for the City field */
    const CITY = 'museum.City';

    /** the column name for the C_code field */
    const C_CODE = 'museum.C_code';

    /** the column name for the LogoURL field */
    const LOGOURL = 'museum.LogoURL';

    /** the column name for the Online field */
    const ONLINE = 'museum.Online';

    /** the column name for the Remarks field */
    const REMARKS = 'museum.Remarks';

    /** the column name for the HomePageURL field */
    const HOMEPAGEURL = 'museum.HomePageURL';

    /** the column name for the OnlineDatabase field */
    const ONLINEDATABASE = 'museum.OnlineDatabase';

    /** the column name for the CatalogueNumPrefix1 field */
    const CATALOGUENUMPREFIX1 = 'museum.CatalogueNumPrefix1';

    /** the column name for the CatalogueNumberPrefix2 field */
    const CATALOGUENUMBERPREFIX2 = 'museum.CatalogueNumberPrefix2';

    /** the column name for the CatalogueNumberPrefix3 field */
    const CATALOGUENUMBERPREFIX3 = 'museum.CatalogueNumberPrefix3';

    /** the column name for the ContactPerson1 field */
    const CONTACTPERSON1 = 'museum.ContactPerson1';

    /** the column name for the ContactPerson1Email field */
    const CONTACTPERSON1EMAIL = 'museum.ContactPerson1Email';

    /** the column name for the ContactPerson2 field */
    const CONTACTPERSON2 = 'museum.ContactPerson2';

    /** the column name for the ContactPerson2Email field */
    const CONTACTPERSON2EMAIL = 'museum.ContactPerson2Email';

    /** the column name for the FirstVersionDate field */
    const FIRSTVERSIONDATE = 'museum.FirstVersionDate';

    /** the column name for the VersionDate field */
    const VERSIONDATE = 'museum.VersionDate';

    /** the column name for the Validity field */
    const VALIDITY = 'museum.Validity';

    /** the column name for the LastUpdateDate field */
    const LASTUPDATEDATE = 'museum.LastUpdateDate';

    /** the column name for the DatabaseFormat field */
    const DATABASEFORMAT = 'museum.DatabaseFormat';

    /** the column name for the Accessions field */
    const ACCESSIONS = 'museum.Accessions';

    /** the column name for the Species field */
    const SPECIES = 'museum.Species';

    /** the column name for the Families field */
    const FAMILIES = 'museum.Families';

    /** the column name for the Countries field */
    const COUNTRIES = 'museum.Countries';

    /** the column name for the TopCountry field */
    const TOPCOUNTRY = 'museum.TopCountry';

    /** the column name for the TopCountryRecords field */
    const TOPCOUNTRYRECORDS = 'museum.TopCountryRecords';

    /** the column name for the Coordinates field */
    const COORDINATES = 'museum.Coordinates';

    /** the column name for the PercentCoordinates field */
    const PERCENTCOORDINATES = 'museum.PercentCoordinates';

    /** the column name for the DateOldestRecord field */
    const DATEOLDESTRECORD = 'museum.DateOldestRecord';

    /** the column name for the DateMostRecentRecord field */
    const DATEMOSTRECENTRECORD = 'museum.DateMostRecentRecord';

    /** the column name for the YearOldestRecord field */
    const YEAROLDESTRECORD = 'museum.YearOldestRecord';

    /** the column name for the YearMostRecentRecord field */
    const YEARMOSTRECENTRECORD = 'museum.YearMostRecentRecord';

    /** the column name for the Entered field */
    const ENTERED = 'museum.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'museum.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'museum.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'museum.DateModified';

    /** the column name for the validnames field */
    const VALIDNAMES = 'museum.validnames';

    /** the column name for the PercentValid field */
    const PERCENTVALID = 'museum.PercentValid';

    /** the column name for the synonyms field */
    const SYNONYMS = 'museum.synonyms';

    /** the column name for the PercentSynonym field */
    const PERCENTSYNONYM = 'museum.PercentSynonym';

    /** the column name for the non-matching field */
    const NON-MATCHING = 'museum.non-matching';

    /** the column name for the PercentNon-matching field */
    const PERCENTNON-MATCHING = 'museum.PercentNon-matching';

    /** the column name for the AmbiguousName field */
    const AMBIGUOUSNAME = 'museum.AmbiguousName';

    /** the column name for the PercentAmbiguous field */
    const PERCENTAMBIGUOUS = 'museum.PercentAmbiguous';

    /** the column name for the TS field */
    const TS = 'museum.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Museum objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Museum[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. MuseumPeer::$fieldNames[MuseumPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Occurrencerefno', 'Museum', 'Acronym', 'Address', 'City', 'CCode', 'Logourl', 'Online', 'Remarks', 'Homepageurl', 'Onlinedatabase', 'Cataloguenumprefix1', 'Cataloguenumberprefix2', 'Cataloguenumberprefix3', 'Contactperson1', 'Contactperson1email', 'Contactperson2', 'Contactperson2email', 'Firstversiondate', 'Versiondate', 'Validity', 'Lastupdatedate', 'Databaseformat', 'Accessions', 'Species', 'Families', 'Countries', 'Topcountry', 'Topcountryrecords', 'Coordinates', 'Percentcoordinates', 'Dateoldestrecord', 'Datemostrecentrecord', 'Yearoldestrecord', 'Yearmostrecentrecord', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Validnames', 'Percentvalid', 'Synonyms', 'Percentsynonym', 'Nonmatching', 'Percentnonmatching', 'Ambiguousname', 'Percentambiguous', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('occurrencerefno', 'museum', 'acronym', 'address', 'city', 'cCode', 'logourl', 'online', 'remarks', 'homepageurl', 'onlinedatabase', 'cataloguenumprefix1', 'cataloguenumberprefix2', 'cataloguenumberprefix3', 'contactperson1', 'contactperson1email', 'contactperson2', 'contactperson2email', 'firstversiondate', 'versiondate', 'validity', 'lastupdatedate', 'databaseformat', 'accessions', 'species', 'families', 'countries', 'topcountry', 'topcountryrecords', 'coordinates', 'percentcoordinates', 'dateoldestrecord', 'datemostrecentrecord', 'yearoldestrecord', 'yearmostrecentrecord', 'entered', 'dateentered', 'modified', 'datemodified', 'validnames', 'percentvalid', 'synonyms', 'percentsynonym', 'nonmatching', 'percentnonmatching', 'ambiguousname', 'percentambiguous', 'ts', ),
        BasePeer::TYPE_COLNAME => array (MuseumPeer::OCCURRENCEREFNO, MuseumPeer::MUSEUM, MuseumPeer::ACRONYM, MuseumPeer::ADDRESS, MuseumPeer::CITY, MuseumPeer::C_CODE, MuseumPeer::LOGOURL, MuseumPeer::ONLINE, MuseumPeer::REMARKS, MuseumPeer::HOMEPAGEURL, MuseumPeer::ONLINEDATABASE, MuseumPeer::CATALOGUENUMPREFIX1, MuseumPeer::CATALOGUENUMBERPREFIX2, MuseumPeer::CATALOGUENUMBERPREFIX3, MuseumPeer::CONTACTPERSON1, MuseumPeer::CONTACTPERSON1EMAIL, MuseumPeer::CONTACTPERSON2, MuseumPeer::CONTACTPERSON2EMAIL, MuseumPeer::FIRSTVERSIONDATE, MuseumPeer::VERSIONDATE, MuseumPeer::VALIDITY, MuseumPeer::LASTUPDATEDATE, MuseumPeer::DATABASEFORMAT, MuseumPeer::ACCESSIONS, MuseumPeer::SPECIES, MuseumPeer::FAMILIES, MuseumPeer::COUNTRIES, MuseumPeer::TOPCOUNTRY, MuseumPeer::TOPCOUNTRYRECORDS, MuseumPeer::COORDINATES, MuseumPeer::PERCENTCOORDINATES, MuseumPeer::DATEOLDESTRECORD, MuseumPeer::DATEMOSTRECENTRECORD, MuseumPeer::YEAROLDESTRECORD, MuseumPeer::YEARMOSTRECENTRECORD, MuseumPeer::ENTERED, MuseumPeer::DATEENTERED, MuseumPeer::MODIFIED, MuseumPeer::DATEMODIFIED, MuseumPeer::VALIDNAMES, MuseumPeer::PERCENTVALID, MuseumPeer::SYNONYMS, MuseumPeer::PERCENTSYNONYM, MuseumPeer::NON-MATCHING, MuseumPeer::PERCENTNON-MATCHING, MuseumPeer::AMBIGUOUSNAME, MuseumPeer::PERCENTAMBIGUOUS, MuseumPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OCCURRENCEREFNO', 'MUSEUM', 'ACRONYM', 'ADDRESS', 'CITY', 'C_CODE', 'LOGOURL', 'ONLINE', 'REMARKS', 'HOMEPAGEURL', 'ONLINEDATABASE', 'CATALOGUENUMPREFIX1', 'CATALOGUENUMBERPREFIX2', 'CATALOGUENUMBERPREFIX3', 'CONTACTPERSON1', 'CONTACTPERSON1EMAIL', 'CONTACTPERSON2', 'CONTACTPERSON2EMAIL', 'FIRSTVERSIONDATE', 'VERSIONDATE', 'VALIDITY', 'LASTUPDATEDATE', 'DATABASEFORMAT', 'ACCESSIONS', 'SPECIES', 'FAMILIES', 'COUNTRIES', 'TOPCOUNTRY', 'TOPCOUNTRYRECORDS', 'COORDINATES', 'PERCENTCOORDINATES', 'DATEOLDESTRECORD', 'DATEMOSTRECENTRECORD', 'YEAROLDESTRECORD', 'YEARMOSTRECENTRECORD', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'VALIDNAMES', 'PERCENTVALID', 'SYNONYMS', 'PERCENTSYNONYM', 'NON-MATCHING', 'PERCENTNON-MATCHING', 'AMBIGUOUSNAME', 'PERCENTAMBIGUOUS', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('OccurrenceRefNo', 'Museum', 'Acronym', 'Address', 'City', 'C_code', 'LogoURL', 'Online', 'Remarks', 'HomePageURL', 'OnlineDatabase', 'CatalogueNumPrefix1', 'CatalogueNumberPrefix2', 'CatalogueNumberPrefix3', 'ContactPerson1', 'ContactPerson1Email', 'ContactPerson2', 'ContactPerson2Email', 'FirstVersionDate', 'VersionDate', 'Validity', 'LastUpdateDate', 'DatabaseFormat', 'Accessions', 'Species', 'Families', 'Countries', 'TopCountry', 'TopCountryRecords', 'Coordinates', 'PercentCoordinates', 'DateOldestRecord', 'DateMostRecentRecord', 'YearOldestRecord', 'YearMostRecentRecord', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'validnames', 'PercentValid', 'synonyms', 'PercentSynonym', 'non-matching', 'PercentNon-matching', 'AmbiguousName', 'PercentAmbiguous', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. MuseumPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Occurrencerefno' => 0, 'Museum' => 1, 'Acronym' => 2, 'Address' => 3, 'City' => 4, 'CCode' => 5, 'Logourl' => 6, 'Online' => 7, 'Remarks' => 8, 'Homepageurl' => 9, 'Onlinedatabase' => 10, 'Cataloguenumprefix1' => 11, 'Cataloguenumberprefix2' => 12, 'Cataloguenumberprefix3' => 13, 'Contactperson1' => 14, 'Contactperson1email' => 15, 'Contactperson2' => 16, 'Contactperson2email' => 17, 'Firstversiondate' => 18, 'Versiondate' => 19, 'Validity' => 20, 'Lastupdatedate' => 21, 'Databaseformat' => 22, 'Accessions' => 23, 'Species' => 24, 'Families' => 25, 'Countries' => 26, 'Topcountry' => 27, 'Topcountryrecords' => 28, 'Coordinates' => 29, 'Percentcoordinates' => 30, 'Dateoldestrecord' => 31, 'Datemostrecentrecord' => 32, 'Yearoldestrecord' => 33, 'Yearmostrecentrecord' => 34, 'Entered' => 35, 'Dateentered' => 36, 'Modified' => 37, 'Datemodified' => 38, 'Validnames' => 39, 'Percentvalid' => 40, 'Synonyms' => 41, 'Percentsynonym' => 42, 'Nonmatching' => 43, 'Percentnonmatching' => 44, 'Ambiguousname' => 45, 'Percentambiguous' => 46, 'Ts' => 47, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('occurrencerefno' => 0, 'museum' => 1, 'acronym' => 2, 'address' => 3, 'city' => 4, 'cCode' => 5, 'logourl' => 6, 'online' => 7, 'remarks' => 8, 'homepageurl' => 9, 'onlinedatabase' => 10, 'cataloguenumprefix1' => 11, 'cataloguenumberprefix2' => 12, 'cataloguenumberprefix3' => 13, 'contactperson1' => 14, 'contactperson1email' => 15, 'contactperson2' => 16, 'contactperson2email' => 17, 'firstversiondate' => 18, 'versiondate' => 19, 'validity' => 20, 'lastupdatedate' => 21, 'databaseformat' => 22, 'accessions' => 23, 'species' => 24, 'families' => 25, 'countries' => 26, 'topcountry' => 27, 'topcountryrecords' => 28, 'coordinates' => 29, 'percentcoordinates' => 30, 'dateoldestrecord' => 31, 'datemostrecentrecord' => 32, 'yearoldestrecord' => 33, 'yearmostrecentrecord' => 34, 'entered' => 35, 'dateentered' => 36, 'modified' => 37, 'datemodified' => 38, 'validnames' => 39, 'percentvalid' => 40, 'synonyms' => 41, 'percentsynonym' => 42, 'nonmatching' => 43, 'percentnonmatching' => 44, 'ambiguousname' => 45, 'percentambiguous' => 46, 'ts' => 47, ),
        BasePeer::TYPE_COLNAME => array (MuseumPeer::OCCURRENCEREFNO => 0, MuseumPeer::MUSEUM => 1, MuseumPeer::ACRONYM => 2, MuseumPeer::ADDRESS => 3, MuseumPeer::CITY => 4, MuseumPeer::C_CODE => 5, MuseumPeer::LOGOURL => 6, MuseumPeer::ONLINE => 7, MuseumPeer::REMARKS => 8, MuseumPeer::HOMEPAGEURL => 9, MuseumPeer::ONLINEDATABASE => 10, MuseumPeer::CATALOGUENUMPREFIX1 => 11, MuseumPeer::CATALOGUENUMBERPREFIX2 => 12, MuseumPeer::CATALOGUENUMBERPREFIX3 => 13, MuseumPeer::CONTACTPERSON1 => 14, MuseumPeer::CONTACTPERSON1EMAIL => 15, MuseumPeer::CONTACTPERSON2 => 16, MuseumPeer::CONTACTPERSON2EMAIL => 17, MuseumPeer::FIRSTVERSIONDATE => 18, MuseumPeer::VERSIONDATE => 19, MuseumPeer::VALIDITY => 20, MuseumPeer::LASTUPDATEDATE => 21, MuseumPeer::DATABASEFORMAT => 22, MuseumPeer::ACCESSIONS => 23, MuseumPeer::SPECIES => 24, MuseumPeer::FAMILIES => 25, MuseumPeer::COUNTRIES => 26, MuseumPeer::TOPCOUNTRY => 27, MuseumPeer::TOPCOUNTRYRECORDS => 28, MuseumPeer::COORDINATES => 29, MuseumPeer::PERCENTCOORDINATES => 30, MuseumPeer::DATEOLDESTRECORD => 31, MuseumPeer::DATEMOSTRECENTRECORD => 32, MuseumPeer::YEAROLDESTRECORD => 33, MuseumPeer::YEARMOSTRECENTRECORD => 34, MuseumPeer::ENTERED => 35, MuseumPeer::DATEENTERED => 36, MuseumPeer::MODIFIED => 37, MuseumPeer::DATEMODIFIED => 38, MuseumPeer::VALIDNAMES => 39, MuseumPeer::PERCENTVALID => 40, MuseumPeer::SYNONYMS => 41, MuseumPeer::PERCENTSYNONYM => 42, MuseumPeer::NON-MATCHING => 43, MuseumPeer::PERCENTNON-MATCHING => 44, MuseumPeer::AMBIGUOUSNAME => 45, MuseumPeer::PERCENTAMBIGUOUS => 46, MuseumPeer::TS => 47, ),
        BasePeer::TYPE_RAW_COLNAME => array ('OCCURRENCEREFNO' => 0, 'MUSEUM' => 1, 'ACRONYM' => 2, 'ADDRESS' => 3, 'CITY' => 4, 'C_CODE' => 5, 'LOGOURL' => 6, 'ONLINE' => 7, 'REMARKS' => 8, 'HOMEPAGEURL' => 9, 'ONLINEDATABASE' => 10, 'CATALOGUENUMPREFIX1' => 11, 'CATALOGUENUMBERPREFIX2' => 12, 'CATALOGUENUMBERPREFIX3' => 13, 'CONTACTPERSON1' => 14, 'CONTACTPERSON1EMAIL' => 15, 'CONTACTPERSON2' => 16, 'CONTACTPERSON2EMAIL' => 17, 'FIRSTVERSIONDATE' => 18, 'VERSIONDATE' => 19, 'VALIDITY' => 20, 'LASTUPDATEDATE' => 21, 'DATABASEFORMAT' => 22, 'ACCESSIONS' => 23, 'SPECIES' => 24, 'FAMILIES' => 25, 'COUNTRIES' => 26, 'TOPCOUNTRY' => 27, 'TOPCOUNTRYRECORDS' => 28, 'COORDINATES' => 29, 'PERCENTCOORDINATES' => 30, 'DATEOLDESTRECORD' => 31, 'DATEMOSTRECENTRECORD' => 32, 'YEAROLDESTRECORD' => 33, 'YEARMOSTRECENTRECORD' => 34, 'ENTERED' => 35, 'DATEENTERED' => 36, 'MODIFIED' => 37, 'DATEMODIFIED' => 38, 'VALIDNAMES' => 39, 'PERCENTVALID' => 40, 'SYNONYMS' => 41, 'PERCENTSYNONYM' => 42, 'NON-MATCHING' => 43, 'PERCENTNON-MATCHING' => 44, 'AMBIGUOUSNAME' => 45, 'PERCENTAMBIGUOUS' => 46, 'TS' => 47, ),
        BasePeer::TYPE_FIELDNAME => array ('OccurrenceRefNo' => 0, 'Museum' => 1, 'Acronym' => 2, 'Address' => 3, 'City' => 4, 'C_code' => 5, 'LogoURL' => 6, 'Online' => 7, 'Remarks' => 8, 'HomePageURL' => 9, 'OnlineDatabase' => 10, 'CatalogueNumPrefix1' => 11, 'CatalogueNumberPrefix2' => 12, 'CatalogueNumberPrefix3' => 13, 'ContactPerson1' => 14, 'ContactPerson1Email' => 15, 'ContactPerson2' => 16, 'ContactPerson2Email' => 17, 'FirstVersionDate' => 18, 'VersionDate' => 19, 'Validity' => 20, 'LastUpdateDate' => 21, 'DatabaseFormat' => 22, 'Accessions' => 23, 'Species' => 24, 'Families' => 25, 'Countries' => 26, 'TopCountry' => 27, 'TopCountryRecords' => 28, 'Coordinates' => 29, 'PercentCoordinates' => 30, 'DateOldestRecord' => 31, 'DateMostRecentRecord' => 32, 'YearOldestRecord' => 33, 'YearMostRecentRecord' => 34, 'Entered' => 35, 'DateEntered' => 36, 'Modified' => 37, 'DateModified' => 38, 'validnames' => 39, 'PercentValid' => 40, 'synonyms' => 41, 'PercentSynonym' => 42, 'non-matching' => 43, 'PercentNon-matching' => 44, 'AmbiguousName' => 45, 'PercentAmbiguous' => 46, 'TS' => 47, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, )
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
        $toNames = MuseumPeer::getFieldNames($toType);
        $key = isset(MuseumPeer::$fieldKeys[$fromType][$name]) ? MuseumPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(MuseumPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, MuseumPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return MuseumPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. MuseumPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(MuseumPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(MuseumPeer::OCCURRENCEREFNO);
            $criteria->addSelectColumn(MuseumPeer::MUSEUM);
            $criteria->addSelectColumn(MuseumPeer::ACRONYM);
            $criteria->addSelectColumn(MuseumPeer::ADDRESS);
            $criteria->addSelectColumn(MuseumPeer::CITY);
            $criteria->addSelectColumn(MuseumPeer::C_CODE);
            $criteria->addSelectColumn(MuseumPeer::LOGOURL);
            $criteria->addSelectColumn(MuseumPeer::ONLINE);
            $criteria->addSelectColumn(MuseumPeer::REMARKS);
            $criteria->addSelectColumn(MuseumPeer::HOMEPAGEURL);
            $criteria->addSelectColumn(MuseumPeer::ONLINEDATABASE);
            $criteria->addSelectColumn(MuseumPeer::CATALOGUENUMPREFIX1);
            $criteria->addSelectColumn(MuseumPeer::CATALOGUENUMBERPREFIX2);
            $criteria->addSelectColumn(MuseumPeer::CATALOGUENUMBERPREFIX3);
            $criteria->addSelectColumn(MuseumPeer::CONTACTPERSON1);
            $criteria->addSelectColumn(MuseumPeer::CONTACTPERSON1EMAIL);
            $criteria->addSelectColumn(MuseumPeer::CONTACTPERSON2);
            $criteria->addSelectColumn(MuseumPeer::CONTACTPERSON2EMAIL);
            $criteria->addSelectColumn(MuseumPeer::FIRSTVERSIONDATE);
            $criteria->addSelectColumn(MuseumPeer::VERSIONDATE);
            $criteria->addSelectColumn(MuseumPeer::VALIDITY);
            $criteria->addSelectColumn(MuseumPeer::LASTUPDATEDATE);
            $criteria->addSelectColumn(MuseumPeer::DATABASEFORMAT);
            $criteria->addSelectColumn(MuseumPeer::ACCESSIONS);
            $criteria->addSelectColumn(MuseumPeer::SPECIES);
            $criteria->addSelectColumn(MuseumPeer::FAMILIES);
            $criteria->addSelectColumn(MuseumPeer::COUNTRIES);
            $criteria->addSelectColumn(MuseumPeer::TOPCOUNTRY);
            $criteria->addSelectColumn(MuseumPeer::TOPCOUNTRYRECORDS);
            $criteria->addSelectColumn(MuseumPeer::COORDINATES);
            $criteria->addSelectColumn(MuseumPeer::PERCENTCOORDINATES);
            $criteria->addSelectColumn(MuseumPeer::DATEOLDESTRECORD);
            $criteria->addSelectColumn(MuseumPeer::DATEMOSTRECENTRECORD);
            $criteria->addSelectColumn(MuseumPeer::YEAROLDESTRECORD);
            $criteria->addSelectColumn(MuseumPeer::YEARMOSTRECENTRECORD);
            $criteria->addSelectColumn(MuseumPeer::ENTERED);
            $criteria->addSelectColumn(MuseumPeer::DATEENTERED);
            $criteria->addSelectColumn(MuseumPeer::MODIFIED);
            $criteria->addSelectColumn(MuseumPeer::DATEMODIFIED);
            $criteria->addSelectColumn(MuseumPeer::VALIDNAMES);
            $criteria->addSelectColumn(MuseumPeer::PERCENTVALID);
            $criteria->addSelectColumn(MuseumPeer::SYNONYMS);
            $criteria->addSelectColumn(MuseumPeer::PERCENTSYNONYM);
            $criteria->addSelectColumn(MuseumPeer::NON-MATCHING);
            $criteria->addSelectColumn(MuseumPeer::PERCENTNON-MATCHING);
            $criteria->addSelectColumn(MuseumPeer::AMBIGUOUSNAME);
            $criteria->addSelectColumn(MuseumPeer::PERCENTAMBIGUOUS);
            $criteria->addSelectColumn(MuseumPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.OccurrenceRefNo');
            $criteria->addSelectColumn($alias . '.Museum');
            $criteria->addSelectColumn($alias . '.Acronym');
            $criteria->addSelectColumn($alias . '.Address');
            $criteria->addSelectColumn($alias . '.City');
            $criteria->addSelectColumn($alias . '.C_code');
            $criteria->addSelectColumn($alias . '.LogoURL');
            $criteria->addSelectColumn($alias . '.Online');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.HomePageURL');
            $criteria->addSelectColumn($alias . '.OnlineDatabase');
            $criteria->addSelectColumn($alias . '.CatalogueNumPrefix1');
            $criteria->addSelectColumn($alias . '.CatalogueNumberPrefix2');
            $criteria->addSelectColumn($alias . '.CatalogueNumberPrefix3');
            $criteria->addSelectColumn($alias . '.ContactPerson1');
            $criteria->addSelectColumn($alias . '.ContactPerson1Email');
            $criteria->addSelectColumn($alias . '.ContactPerson2');
            $criteria->addSelectColumn($alias . '.ContactPerson2Email');
            $criteria->addSelectColumn($alias . '.FirstVersionDate');
            $criteria->addSelectColumn($alias . '.VersionDate');
            $criteria->addSelectColumn($alias . '.Validity');
            $criteria->addSelectColumn($alias . '.LastUpdateDate');
            $criteria->addSelectColumn($alias . '.DatabaseFormat');
            $criteria->addSelectColumn($alias . '.Accessions');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.Families');
            $criteria->addSelectColumn($alias . '.Countries');
            $criteria->addSelectColumn($alias . '.TopCountry');
            $criteria->addSelectColumn($alias . '.TopCountryRecords');
            $criteria->addSelectColumn($alias . '.Coordinates');
            $criteria->addSelectColumn($alias . '.PercentCoordinates');
            $criteria->addSelectColumn($alias . '.DateOldestRecord');
            $criteria->addSelectColumn($alias . '.DateMostRecentRecord');
            $criteria->addSelectColumn($alias . '.YearOldestRecord');
            $criteria->addSelectColumn($alias . '.YearMostRecentRecord');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.validnames');
            $criteria->addSelectColumn($alias . '.PercentValid');
            $criteria->addSelectColumn($alias . '.synonyms');
            $criteria->addSelectColumn($alias . '.PercentSynonym');
            $criteria->addSelectColumn($alias . '.non-matching');
            $criteria->addSelectColumn($alias . '.PercentNon-matching');
            $criteria->addSelectColumn($alias . '.AmbiguousName');
            $criteria->addSelectColumn($alias . '.PercentAmbiguous');
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
        $criteria->setPrimaryTableName(MuseumPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MuseumPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(MuseumPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(MuseumPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Museum
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = MuseumPeer::doSelect($critcopy, $con);
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
        return MuseumPeer::populateObjects(MuseumPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(MuseumPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            MuseumPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(MuseumPeer::DATABASE_NAME);

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
     * @param Museum $obj A Museum object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getOccurrencerefno();
            } // if key === null
            MuseumPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Museum object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Museum) {
                $key = (string) $value->getOccurrencerefno();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Museum object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(MuseumPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Museum Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(MuseumPeer::$instances[$key])) {
                return MuseumPeer::$instances[$key];
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
        foreach (MuseumPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        MuseumPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to museum
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
        $cls = MuseumPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = MuseumPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = MuseumPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MuseumPeer::addInstanceToPool($obj, $key);
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
     * @return array (Museum object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = MuseumPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = MuseumPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + MuseumPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MuseumPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            MuseumPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(MuseumPeer::DATABASE_NAME)->getTable(MuseumPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseMuseumPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseMuseumPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \MuseumTableMap());
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
        return MuseumPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Museum or Criteria object.
     *
     * @param      mixed $values Criteria or Museum object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MuseumPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Museum object
        }


        // Set the correct dbName
        $criteria->setDbName(MuseumPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Museum or Criteria object.
     *
     * @param      mixed $values Criteria or Museum object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MuseumPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(MuseumPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(MuseumPeer::OCCURRENCEREFNO);
            $value = $criteria->remove(MuseumPeer::OCCURRENCEREFNO);
            if ($value) {
                $selectCriteria->add(MuseumPeer::OCCURRENCEREFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MuseumPeer::TABLE_NAME);
            }

        } else { // $values is Museum object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(MuseumPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the museum table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MuseumPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(MuseumPeer::TABLE_NAME, $con, MuseumPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MuseumPeer::clearInstancePool();
            MuseumPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Museum or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Museum object or primary key or array of primary keys
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
            $con = Propel::getConnection(MuseumPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            MuseumPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Museum) { // it's a model object
            // invalidate the cache for this single object
            MuseumPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MuseumPeer::DATABASE_NAME);
            $criteria->add(MuseumPeer::OCCURRENCEREFNO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                MuseumPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(MuseumPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            MuseumPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Museum object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Museum $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(MuseumPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(MuseumPeer::TABLE_NAME);

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

        return BasePeer::doValidate(MuseumPeer::DATABASE_NAME, MuseumPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Museum
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = MuseumPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(MuseumPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(MuseumPeer::DATABASE_NAME);
        $criteria->add(MuseumPeer::OCCURRENCEREFNO, $pk);

        $v = MuseumPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Museum[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MuseumPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(MuseumPeer::DATABASE_NAME);
            $criteria->add(MuseumPeer::OCCURRENCEREFNO, $pks, Criteria::IN);
            $objs = MuseumPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseMuseumPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMuseumPeer::buildTableMap();

