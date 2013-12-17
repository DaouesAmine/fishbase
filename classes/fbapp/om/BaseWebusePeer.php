<?php


/**
 * Base static class for performing query and update operations on the 'webuse' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseWebusePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'webuse';

    /** the related Propel class for this table */
    const OM_CLASS = 'Webuse';

    /** the related TableMap class for this table */
    const TM_CLASS = 'WebuseTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 63;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 63;

    /** the column name for the autoctr field */
    const AUTOCTR = 'webuse.autoctr';

    /** the column name for the period field */
    const PERIOD = 'webuse.period';

    /** the column name for the Year field */
    const YEAR = 'webuse.Year';

    /** the column name for the Month field */
    const MONTH = 'webuse.Month';

    /** the column name for the Hits field */
    const HITS = 'webuse.Hits';

    /** the column name for the HitsNotViewed field */
    const HITSNOTVIEWED = 'webuse.HitsNotViewed';

    /** the column name for the Sessions field */
    const SESSIONS = 'webuse.Sessions';

    /** the column name for the UniqueUsers field */
    const UNIQUEUSERS = 'webuse.UniqueUsers';

    /** the column name for the VisitsVisitors field */
    const VISITSVISITORS = 'webuse.VisitsVisitors';

    /** the column name for the Pages field */
    const PAGES = 'webuse.Pages';

    /** the column name for the PagesVisit field */
    const PAGESVISIT = 'webuse.PagesVisit';

    /** the column name for the ReturnUsers field */
    const RETURNUSERS = 'webuse.ReturnUsers';

    /** the column name for the PowerUsers field */
    const POWERUSERS = 'webuse.PowerUsers';

    /** the column name for the BookMarkSessions field */
    const BOOKMARKSESSIONS = 'webuse.BookMarkSessions';

    /** the column name for the BookMark field */
    const BOOKMARK = 'webuse.BookMark';

    /** the column name for the Duration field */
    const DURATION = 'webuse.Duration';

    /** the column name for the Bandwidth_old field */
    const BANDWIDTH_OLD = 'webuse.Bandwidth_old';

    /** the column name for the Bandwidth field */
    const BANDWIDTH = 'webuse.Bandwidth';

    /** the column name for the BWNotViewed field */
    const BWNOTVIEWED = 'webuse.BWNotViewed';

    /** the column name for the USA field */
    const USA = 'webuse.USA';

    /** the column name for the International field */
    const INTERNATIONAL = 'webuse.International';

    /** the column name for the Unknown field */
    const UNKNOWN = 'webuse.Unknown';

    /** the column name for the Countries field */
    const COUNTRIES = 'webuse.Countries';

    /** the column name for the DevCountries field */
    const DEVCOUNTRIES = 'webuse.DevCountries';

    /** the column name for the DevCountSess field */
    const DEVCOUNTSESS = 'webuse.DevCountSess';

    /** the column name for the ACPCountries field */
    const ACPCOUNTRIES = 'webuse.ACPCountries';

    /** the column name for the ACPCountSess field */
    const ACPCOUNTSESS = 'webuse.ACPCountSess';

    /** the column name for the OtherOS field */
    const OTHEROS = 'webuse.OtherOS';

    /** the column name for the TopDay field */
    const TOPDAY = 'webuse.TopDay';

    /** the column name for the TopDayDate field */
    const TOPDAYDATE = 'webuse.TopDayDate';

    /** the column name for the Downloads field */
    const DOWNLOADS = 'webuse.Downloads';

    /** the column name for the SummaryDir field */
    const SUMMARYDIR = 'webuse.SummaryDir';

    /** the column name for the NomenclatureDir field */
    const NOMENCLATUREDIR = 'webuse.NomenclatureDir';

    /** the column name for the ComNamesDir field */
    const COMNAMESDIR = 'webuse.ComNamesDir';

    /** the column name for the ReferencesDir field */
    const REFERENCESDIR = 'webuse.ReferencesDir';

    /** the column name for the PhotosDir field */
    const PHOTOSDIR = 'webuse.PhotosDir';

    /** the column name for the ForumDir field */
    const FORUMDIR = 'webuse.ForumDir';

    /** the column name for the TourDir field */
    const TOURDIR = 'webuse.TourDir';

    /** the column name for the ChatDir field */
    const CHATDIR = 'webuse.ChatDir';

    /** the column name for the PopdynDir field */
    const POPDYNDIR = 'webuse.PopdynDir';

    /** the column name for the ReproductionDir field */
    const REPRODUCTIONDIR = 'webuse.ReproductionDir';

    /** the column name for the TrophicDir field */
    const TROPHICDIR = 'webuse.TrophicDir';

    /** the column name for the CountryDir field */
    const COUNTRYDIR = 'webuse.CountryDir';

    /** the column name for the EschmeyerDir field */
    const ESCHMEYERDIR = 'webuse.EschmeyerDir';

    /** the column name for the FBBookDir field */
    const FBBOOKDIR = 'webuse.FBBookDir';

    /** the column name for the FishQuizDir field */
    const FISHQUIZDIR = 'webuse.FishQuizDir';

    /** the column name for the MuseumDir field */
    const MUSEUMDIR = 'webuse.MuseumDir';

    /** the column name for the GlossaryDir field */
    const GLOSSARYDIR = 'webuse.GlossaryDir';

    /** the column name for the MapDir field */
    const MAPDIR = 'webuse.MapDir';

    /** the column name for the Identification field */
    const IDENTIFICATION = 'webuse.Identification';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'webuse.DateEntered';

    /** the column name for the LarvalBaseDir field */
    const LARVALBASEDIR = 'webuse.LarvalBaseDir';

    /** the column name for the DiseaseDir field */
    const DISEASEDIR = 'webuse.DiseaseDir';

    /** the column name for the ToolsDir field */
    const TOOLSDIR = 'webuse.ToolsDir';

    /** the column name for the IdentificationDir field */
    const IDENTIFICATIONDIR = 'webuse.IdentificationDir';

    /** the column name for the KeysDir field */
    const KEYSDIR = 'webuse.KeysDir';

    /** the column name for the FieldGuidesDir field */
    const FIELDGUIDESDIR = 'webuse.FieldGuidesDir';

    /** the column name for the FishOnLineDir field */
    const FISHONLINEDIR = 'webuse.FishOnLineDir';

    /** the column name for the DownloadDir field */
    const DOWNLOADDIR = 'webuse.DownloadDir';

    /** the column name for the EcologyDir field */
    const ECOLOGYDIR = 'webuse.EcologyDir';

    /** the column name for the PhysiologyDir field */
    const PHYSIOLOGYDIR = 'webuse.PhysiologyDir';

    /** the column name for the GeneticsDir field */
    const GENETICSDIR = 'webuse.GeneticsDir';

    /** the column name for the TS field */
    const TS = 'webuse.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Webuse objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Webuse[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. WebusePeer::$fieldNames[WebusePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Period', 'Year', 'Month', 'Hits', 'Hitsnotviewed', 'Sessions', 'Uniqueusers', 'Visitsvisitors', 'Pages', 'Pagesvisit', 'Returnusers', 'Powerusers', 'Bookmarksessions', 'Bookmark', 'Duration', 'BandwidthOld', 'Bandwidth', 'Bwnotviewed', 'Usa', 'International', 'Unknown', 'Countries', 'Devcountries', 'Devcountsess', 'Acpcountries', 'Acpcountsess', 'Otheros', 'Topday', 'Topdaydate', 'Downloads', 'Summarydir', 'Nomenclaturedir', 'Comnamesdir', 'Referencesdir', 'Photosdir', 'Forumdir', 'Tourdir', 'Chatdir', 'Popdyndir', 'Reproductiondir', 'Trophicdir', 'Countrydir', 'Eschmeyerdir', 'Fbbookdir', 'Fishquizdir', 'Museumdir', 'Glossarydir', 'Mapdir', 'Identification', 'Dateentered', 'Larvalbasedir', 'Diseasedir', 'Toolsdir', 'Identificationdir', 'Keysdir', 'Fieldguidesdir', 'Fishonlinedir', 'Downloaddir', 'Ecologydir', 'Physiologydir', 'Geneticsdir', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'period', 'year', 'month', 'hits', 'hitsnotviewed', 'sessions', 'uniqueusers', 'visitsvisitors', 'pages', 'pagesvisit', 'returnusers', 'powerusers', 'bookmarksessions', 'bookmark', 'duration', 'bandwidthOld', 'bandwidth', 'bwnotviewed', 'usa', 'international', 'unknown', 'countries', 'devcountries', 'devcountsess', 'acpcountries', 'acpcountsess', 'otheros', 'topday', 'topdaydate', 'downloads', 'summarydir', 'nomenclaturedir', 'comnamesdir', 'referencesdir', 'photosdir', 'forumdir', 'tourdir', 'chatdir', 'popdyndir', 'reproductiondir', 'trophicdir', 'countrydir', 'eschmeyerdir', 'fbbookdir', 'fishquizdir', 'museumdir', 'glossarydir', 'mapdir', 'identification', 'dateentered', 'larvalbasedir', 'diseasedir', 'toolsdir', 'identificationdir', 'keysdir', 'fieldguidesdir', 'fishonlinedir', 'downloaddir', 'ecologydir', 'physiologydir', 'geneticsdir', 'ts', ),
        BasePeer::TYPE_COLNAME => array (WebusePeer::AUTOCTR, WebusePeer::PERIOD, WebusePeer::YEAR, WebusePeer::MONTH, WebusePeer::HITS, WebusePeer::HITSNOTVIEWED, WebusePeer::SESSIONS, WebusePeer::UNIQUEUSERS, WebusePeer::VISITSVISITORS, WebusePeer::PAGES, WebusePeer::PAGESVISIT, WebusePeer::RETURNUSERS, WebusePeer::POWERUSERS, WebusePeer::BOOKMARKSESSIONS, WebusePeer::BOOKMARK, WebusePeer::DURATION, WebusePeer::BANDWIDTH_OLD, WebusePeer::BANDWIDTH, WebusePeer::BWNOTVIEWED, WebusePeer::USA, WebusePeer::INTERNATIONAL, WebusePeer::UNKNOWN, WebusePeer::COUNTRIES, WebusePeer::DEVCOUNTRIES, WebusePeer::DEVCOUNTSESS, WebusePeer::ACPCOUNTRIES, WebusePeer::ACPCOUNTSESS, WebusePeer::OTHEROS, WebusePeer::TOPDAY, WebusePeer::TOPDAYDATE, WebusePeer::DOWNLOADS, WebusePeer::SUMMARYDIR, WebusePeer::NOMENCLATUREDIR, WebusePeer::COMNAMESDIR, WebusePeer::REFERENCESDIR, WebusePeer::PHOTOSDIR, WebusePeer::FORUMDIR, WebusePeer::TOURDIR, WebusePeer::CHATDIR, WebusePeer::POPDYNDIR, WebusePeer::REPRODUCTIONDIR, WebusePeer::TROPHICDIR, WebusePeer::COUNTRYDIR, WebusePeer::ESCHMEYERDIR, WebusePeer::FBBOOKDIR, WebusePeer::FISHQUIZDIR, WebusePeer::MUSEUMDIR, WebusePeer::GLOSSARYDIR, WebusePeer::MAPDIR, WebusePeer::IDENTIFICATION, WebusePeer::DATEENTERED, WebusePeer::LARVALBASEDIR, WebusePeer::DISEASEDIR, WebusePeer::TOOLSDIR, WebusePeer::IDENTIFICATIONDIR, WebusePeer::KEYSDIR, WebusePeer::FIELDGUIDESDIR, WebusePeer::FISHONLINEDIR, WebusePeer::DOWNLOADDIR, WebusePeer::ECOLOGYDIR, WebusePeer::PHYSIOLOGYDIR, WebusePeer::GENETICSDIR, WebusePeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'PERIOD', 'YEAR', 'MONTH', 'HITS', 'HITSNOTVIEWED', 'SESSIONS', 'UNIQUEUSERS', 'VISITSVISITORS', 'PAGES', 'PAGESVISIT', 'RETURNUSERS', 'POWERUSERS', 'BOOKMARKSESSIONS', 'BOOKMARK', 'DURATION', 'BANDWIDTH_OLD', 'BANDWIDTH', 'BWNOTVIEWED', 'USA', 'INTERNATIONAL', 'UNKNOWN', 'COUNTRIES', 'DEVCOUNTRIES', 'DEVCOUNTSESS', 'ACPCOUNTRIES', 'ACPCOUNTSESS', 'OTHEROS', 'TOPDAY', 'TOPDAYDATE', 'DOWNLOADS', 'SUMMARYDIR', 'NOMENCLATUREDIR', 'COMNAMESDIR', 'REFERENCESDIR', 'PHOTOSDIR', 'FORUMDIR', 'TOURDIR', 'CHATDIR', 'POPDYNDIR', 'REPRODUCTIONDIR', 'TROPHICDIR', 'COUNTRYDIR', 'ESCHMEYERDIR', 'FBBOOKDIR', 'FISHQUIZDIR', 'MUSEUMDIR', 'GLOSSARYDIR', 'MAPDIR', 'IDENTIFICATION', 'DATEENTERED', 'LARVALBASEDIR', 'DISEASEDIR', 'TOOLSDIR', 'IDENTIFICATIONDIR', 'KEYSDIR', 'FIELDGUIDESDIR', 'FISHONLINEDIR', 'DOWNLOADDIR', 'ECOLOGYDIR', 'PHYSIOLOGYDIR', 'GENETICSDIR', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'period', 'Year', 'Month', 'Hits', 'HitsNotViewed', 'Sessions', 'UniqueUsers', 'VisitsVisitors', 'Pages', 'PagesVisit', 'ReturnUsers', 'PowerUsers', 'BookMarkSessions', 'BookMark', 'Duration', 'Bandwidth_old', 'Bandwidth', 'BWNotViewed', 'USA', 'International', 'Unknown', 'Countries', 'DevCountries', 'DevCountSess', 'ACPCountries', 'ACPCountSess', 'OtherOS', 'TopDay', 'TopDayDate', 'Downloads', 'SummaryDir', 'NomenclatureDir', 'ComNamesDir', 'ReferencesDir', 'PhotosDir', 'ForumDir', 'TourDir', 'ChatDir', 'PopdynDir', 'ReproductionDir', 'TrophicDir', 'CountryDir', 'EschmeyerDir', 'FBBookDir', 'FishQuizDir', 'MuseumDir', 'GlossaryDir', 'MapDir', 'Identification', 'DateEntered', 'LarvalBaseDir', 'DiseaseDir', 'ToolsDir', 'IdentificationDir', 'KeysDir', 'FieldGuidesDir', 'FishOnLineDir', 'DownloadDir', 'EcologyDir', 'PhysiologyDir', 'GeneticsDir', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. WebusePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Period' => 1, 'Year' => 2, 'Month' => 3, 'Hits' => 4, 'Hitsnotviewed' => 5, 'Sessions' => 6, 'Uniqueusers' => 7, 'Visitsvisitors' => 8, 'Pages' => 9, 'Pagesvisit' => 10, 'Returnusers' => 11, 'Powerusers' => 12, 'Bookmarksessions' => 13, 'Bookmark' => 14, 'Duration' => 15, 'BandwidthOld' => 16, 'Bandwidth' => 17, 'Bwnotviewed' => 18, 'Usa' => 19, 'International' => 20, 'Unknown' => 21, 'Countries' => 22, 'Devcountries' => 23, 'Devcountsess' => 24, 'Acpcountries' => 25, 'Acpcountsess' => 26, 'Otheros' => 27, 'Topday' => 28, 'Topdaydate' => 29, 'Downloads' => 30, 'Summarydir' => 31, 'Nomenclaturedir' => 32, 'Comnamesdir' => 33, 'Referencesdir' => 34, 'Photosdir' => 35, 'Forumdir' => 36, 'Tourdir' => 37, 'Chatdir' => 38, 'Popdyndir' => 39, 'Reproductiondir' => 40, 'Trophicdir' => 41, 'Countrydir' => 42, 'Eschmeyerdir' => 43, 'Fbbookdir' => 44, 'Fishquizdir' => 45, 'Museumdir' => 46, 'Glossarydir' => 47, 'Mapdir' => 48, 'Identification' => 49, 'Dateentered' => 50, 'Larvalbasedir' => 51, 'Diseasedir' => 52, 'Toolsdir' => 53, 'Identificationdir' => 54, 'Keysdir' => 55, 'Fieldguidesdir' => 56, 'Fishonlinedir' => 57, 'Downloaddir' => 58, 'Ecologydir' => 59, 'Physiologydir' => 60, 'Geneticsdir' => 61, 'Ts' => 62, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'period' => 1, 'year' => 2, 'month' => 3, 'hits' => 4, 'hitsnotviewed' => 5, 'sessions' => 6, 'uniqueusers' => 7, 'visitsvisitors' => 8, 'pages' => 9, 'pagesvisit' => 10, 'returnusers' => 11, 'powerusers' => 12, 'bookmarksessions' => 13, 'bookmark' => 14, 'duration' => 15, 'bandwidthOld' => 16, 'bandwidth' => 17, 'bwnotviewed' => 18, 'usa' => 19, 'international' => 20, 'unknown' => 21, 'countries' => 22, 'devcountries' => 23, 'devcountsess' => 24, 'acpcountries' => 25, 'acpcountsess' => 26, 'otheros' => 27, 'topday' => 28, 'topdaydate' => 29, 'downloads' => 30, 'summarydir' => 31, 'nomenclaturedir' => 32, 'comnamesdir' => 33, 'referencesdir' => 34, 'photosdir' => 35, 'forumdir' => 36, 'tourdir' => 37, 'chatdir' => 38, 'popdyndir' => 39, 'reproductiondir' => 40, 'trophicdir' => 41, 'countrydir' => 42, 'eschmeyerdir' => 43, 'fbbookdir' => 44, 'fishquizdir' => 45, 'museumdir' => 46, 'glossarydir' => 47, 'mapdir' => 48, 'identification' => 49, 'dateentered' => 50, 'larvalbasedir' => 51, 'diseasedir' => 52, 'toolsdir' => 53, 'identificationdir' => 54, 'keysdir' => 55, 'fieldguidesdir' => 56, 'fishonlinedir' => 57, 'downloaddir' => 58, 'ecologydir' => 59, 'physiologydir' => 60, 'geneticsdir' => 61, 'ts' => 62, ),
        BasePeer::TYPE_COLNAME => array (WebusePeer::AUTOCTR => 0, WebusePeer::PERIOD => 1, WebusePeer::YEAR => 2, WebusePeer::MONTH => 3, WebusePeer::HITS => 4, WebusePeer::HITSNOTVIEWED => 5, WebusePeer::SESSIONS => 6, WebusePeer::UNIQUEUSERS => 7, WebusePeer::VISITSVISITORS => 8, WebusePeer::PAGES => 9, WebusePeer::PAGESVISIT => 10, WebusePeer::RETURNUSERS => 11, WebusePeer::POWERUSERS => 12, WebusePeer::BOOKMARKSESSIONS => 13, WebusePeer::BOOKMARK => 14, WebusePeer::DURATION => 15, WebusePeer::BANDWIDTH_OLD => 16, WebusePeer::BANDWIDTH => 17, WebusePeer::BWNOTVIEWED => 18, WebusePeer::USA => 19, WebusePeer::INTERNATIONAL => 20, WebusePeer::UNKNOWN => 21, WebusePeer::COUNTRIES => 22, WebusePeer::DEVCOUNTRIES => 23, WebusePeer::DEVCOUNTSESS => 24, WebusePeer::ACPCOUNTRIES => 25, WebusePeer::ACPCOUNTSESS => 26, WebusePeer::OTHEROS => 27, WebusePeer::TOPDAY => 28, WebusePeer::TOPDAYDATE => 29, WebusePeer::DOWNLOADS => 30, WebusePeer::SUMMARYDIR => 31, WebusePeer::NOMENCLATUREDIR => 32, WebusePeer::COMNAMESDIR => 33, WebusePeer::REFERENCESDIR => 34, WebusePeer::PHOTOSDIR => 35, WebusePeer::FORUMDIR => 36, WebusePeer::TOURDIR => 37, WebusePeer::CHATDIR => 38, WebusePeer::POPDYNDIR => 39, WebusePeer::REPRODUCTIONDIR => 40, WebusePeer::TROPHICDIR => 41, WebusePeer::COUNTRYDIR => 42, WebusePeer::ESCHMEYERDIR => 43, WebusePeer::FBBOOKDIR => 44, WebusePeer::FISHQUIZDIR => 45, WebusePeer::MUSEUMDIR => 46, WebusePeer::GLOSSARYDIR => 47, WebusePeer::MAPDIR => 48, WebusePeer::IDENTIFICATION => 49, WebusePeer::DATEENTERED => 50, WebusePeer::LARVALBASEDIR => 51, WebusePeer::DISEASEDIR => 52, WebusePeer::TOOLSDIR => 53, WebusePeer::IDENTIFICATIONDIR => 54, WebusePeer::KEYSDIR => 55, WebusePeer::FIELDGUIDESDIR => 56, WebusePeer::FISHONLINEDIR => 57, WebusePeer::DOWNLOADDIR => 58, WebusePeer::ECOLOGYDIR => 59, WebusePeer::PHYSIOLOGYDIR => 60, WebusePeer::GENETICSDIR => 61, WebusePeer::TS => 62, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'PERIOD' => 1, 'YEAR' => 2, 'MONTH' => 3, 'HITS' => 4, 'HITSNOTVIEWED' => 5, 'SESSIONS' => 6, 'UNIQUEUSERS' => 7, 'VISITSVISITORS' => 8, 'PAGES' => 9, 'PAGESVISIT' => 10, 'RETURNUSERS' => 11, 'POWERUSERS' => 12, 'BOOKMARKSESSIONS' => 13, 'BOOKMARK' => 14, 'DURATION' => 15, 'BANDWIDTH_OLD' => 16, 'BANDWIDTH' => 17, 'BWNOTVIEWED' => 18, 'USA' => 19, 'INTERNATIONAL' => 20, 'UNKNOWN' => 21, 'COUNTRIES' => 22, 'DEVCOUNTRIES' => 23, 'DEVCOUNTSESS' => 24, 'ACPCOUNTRIES' => 25, 'ACPCOUNTSESS' => 26, 'OTHEROS' => 27, 'TOPDAY' => 28, 'TOPDAYDATE' => 29, 'DOWNLOADS' => 30, 'SUMMARYDIR' => 31, 'NOMENCLATUREDIR' => 32, 'COMNAMESDIR' => 33, 'REFERENCESDIR' => 34, 'PHOTOSDIR' => 35, 'FORUMDIR' => 36, 'TOURDIR' => 37, 'CHATDIR' => 38, 'POPDYNDIR' => 39, 'REPRODUCTIONDIR' => 40, 'TROPHICDIR' => 41, 'COUNTRYDIR' => 42, 'ESCHMEYERDIR' => 43, 'FBBOOKDIR' => 44, 'FISHQUIZDIR' => 45, 'MUSEUMDIR' => 46, 'GLOSSARYDIR' => 47, 'MAPDIR' => 48, 'IDENTIFICATION' => 49, 'DATEENTERED' => 50, 'LARVALBASEDIR' => 51, 'DISEASEDIR' => 52, 'TOOLSDIR' => 53, 'IDENTIFICATIONDIR' => 54, 'KEYSDIR' => 55, 'FIELDGUIDESDIR' => 56, 'FISHONLINEDIR' => 57, 'DOWNLOADDIR' => 58, 'ECOLOGYDIR' => 59, 'PHYSIOLOGYDIR' => 60, 'GENETICSDIR' => 61, 'TS' => 62, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'period' => 1, 'Year' => 2, 'Month' => 3, 'Hits' => 4, 'HitsNotViewed' => 5, 'Sessions' => 6, 'UniqueUsers' => 7, 'VisitsVisitors' => 8, 'Pages' => 9, 'PagesVisit' => 10, 'ReturnUsers' => 11, 'PowerUsers' => 12, 'BookMarkSessions' => 13, 'BookMark' => 14, 'Duration' => 15, 'Bandwidth_old' => 16, 'Bandwidth' => 17, 'BWNotViewed' => 18, 'USA' => 19, 'International' => 20, 'Unknown' => 21, 'Countries' => 22, 'DevCountries' => 23, 'DevCountSess' => 24, 'ACPCountries' => 25, 'ACPCountSess' => 26, 'OtherOS' => 27, 'TopDay' => 28, 'TopDayDate' => 29, 'Downloads' => 30, 'SummaryDir' => 31, 'NomenclatureDir' => 32, 'ComNamesDir' => 33, 'ReferencesDir' => 34, 'PhotosDir' => 35, 'ForumDir' => 36, 'TourDir' => 37, 'ChatDir' => 38, 'PopdynDir' => 39, 'ReproductionDir' => 40, 'TrophicDir' => 41, 'CountryDir' => 42, 'EschmeyerDir' => 43, 'FBBookDir' => 44, 'FishQuizDir' => 45, 'MuseumDir' => 46, 'GlossaryDir' => 47, 'MapDir' => 48, 'Identification' => 49, 'DateEntered' => 50, 'LarvalBaseDir' => 51, 'DiseaseDir' => 52, 'ToolsDir' => 53, 'IdentificationDir' => 54, 'KeysDir' => 55, 'FieldGuidesDir' => 56, 'FishOnLineDir' => 57, 'DownloadDir' => 58, 'EcologyDir' => 59, 'PhysiologyDir' => 60, 'GeneticsDir' => 61, 'TS' => 62, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, )
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
        $toNames = WebusePeer::getFieldNames($toType);
        $key = isset(WebusePeer::$fieldKeys[$fromType][$name]) ? WebusePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(WebusePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, WebusePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return WebusePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. WebusePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(WebusePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(WebusePeer::AUTOCTR);
            $criteria->addSelectColumn(WebusePeer::PERIOD);
            $criteria->addSelectColumn(WebusePeer::YEAR);
            $criteria->addSelectColumn(WebusePeer::MONTH);
            $criteria->addSelectColumn(WebusePeer::HITS);
            $criteria->addSelectColumn(WebusePeer::HITSNOTVIEWED);
            $criteria->addSelectColumn(WebusePeer::SESSIONS);
            $criteria->addSelectColumn(WebusePeer::UNIQUEUSERS);
            $criteria->addSelectColumn(WebusePeer::VISITSVISITORS);
            $criteria->addSelectColumn(WebusePeer::PAGES);
            $criteria->addSelectColumn(WebusePeer::PAGESVISIT);
            $criteria->addSelectColumn(WebusePeer::RETURNUSERS);
            $criteria->addSelectColumn(WebusePeer::POWERUSERS);
            $criteria->addSelectColumn(WebusePeer::BOOKMARKSESSIONS);
            $criteria->addSelectColumn(WebusePeer::BOOKMARK);
            $criteria->addSelectColumn(WebusePeer::DURATION);
            $criteria->addSelectColumn(WebusePeer::BANDWIDTH_OLD);
            $criteria->addSelectColumn(WebusePeer::BANDWIDTH);
            $criteria->addSelectColumn(WebusePeer::BWNOTVIEWED);
            $criteria->addSelectColumn(WebusePeer::USA);
            $criteria->addSelectColumn(WebusePeer::INTERNATIONAL);
            $criteria->addSelectColumn(WebusePeer::UNKNOWN);
            $criteria->addSelectColumn(WebusePeer::COUNTRIES);
            $criteria->addSelectColumn(WebusePeer::DEVCOUNTRIES);
            $criteria->addSelectColumn(WebusePeer::DEVCOUNTSESS);
            $criteria->addSelectColumn(WebusePeer::ACPCOUNTRIES);
            $criteria->addSelectColumn(WebusePeer::ACPCOUNTSESS);
            $criteria->addSelectColumn(WebusePeer::OTHEROS);
            $criteria->addSelectColumn(WebusePeer::TOPDAY);
            $criteria->addSelectColumn(WebusePeer::TOPDAYDATE);
            $criteria->addSelectColumn(WebusePeer::DOWNLOADS);
            $criteria->addSelectColumn(WebusePeer::SUMMARYDIR);
            $criteria->addSelectColumn(WebusePeer::NOMENCLATUREDIR);
            $criteria->addSelectColumn(WebusePeer::COMNAMESDIR);
            $criteria->addSelectColumn(WebusePeer::REFERENCESDIR);
            $criteria->addSelectColumn(WebusePeer::PHOTOSDIR);
            $criteria->addSelectColumn(WebusePeer::FORUMDIR);
            $criteria->addSelectColumn(WebusePeer::TOURDIR);
            $criteria->addSelectColumn(WebusePeer::CHATDIR);
            $criteria->addSelectColumn(WebusePeer::POPDYNDIR);
            $criteria->addSelectColumn(WebusePeer::REPRODUCTIONDIR);
            $criteria->addSelectColumn(WebusePeer::TROPHICDIR);
            $criteria->addSelectColumn(WebusePeer::COUNTRYDIR);
            $criteria->addSelectColumn(WebusePeer::ESCHMEYERDIR);
            $criteria->addSelectColumn(WebusePeer::FBBOOKDIR);
            $criteria->addSelectColumn(WebusePeer::FISHQUIZDIR);
            $criteria->addSelectColumn(WebusePeer::MUSEUMDIR);
            $criteria->addSelectColumn(WebusePeer::GLOSSARYDIR);
            $criteria->addSelectColumn(WebusePeer::MAPDIR);
            $criteria->addSelectColumn(WebusePeer::IDENTIFICATION);
            $criteria->addSelectColumn(WebusePeer::DATEENTERED);
            $criteria->addSelectColumn(WebusePeer::LARVALBASEDIR);
            $criteria->addSelectColumn(WebusePeer::DISEASEDIR);
            $criteria->addSelectColumn(WebusePeer::TOOLSDIR);
            $criteria->addSelectColumn(WebusePeer::IDENTIFICATIONDIR);
            $criteria->addSelectColumn(WebusePeer::KEYSDIR);
            $criteria->addSelectColumn(WebusePeer::FIELDGUIDESDIR);
            $criteria->addSelectColumn(WebusePeer::FISHONLINEDIR);
            $criteria->addSelectColumn(WebusePeer::DOWNLOADDIR);
            $criteria->addSelectColumn(WebusePeer::ECOLOGYDIR);
            $criteria->addSelectColumn(WebusePeer::PHYSIOLOGYDIR);
            $criteria->addSelectColumn(WebusePeer::GENETICSDIR);
            $criteria->addSelectColumn(WebusePeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.period');
            $criteria->addSelectColumn($alias . '.Year');
            $criteria->addSelectColumn($alias . '.Month');
            $criteria->addSelectColumn($alias . '.Hits');
            $criteria->addSelectColumn($alias . '.HitsNotViewed');
            $criteria->addSelectColumn($alias . '.Sessions');
            $criteria->addSelectColumn($alias . '.UniqueUsers');
            $criteria->addSelectColumn($alias . '.VisitsVisitors');
            $criteria->addSelectColumn($alias . '.Pages');
            $criteria->addSelectColumn($alias . '.PagesVisit');
            $criteria->addSelectColumn($alias . '.ReturnUsers');
            $criteria->addSelectColumn($alias . '.PowerUsers');
            $criteria->addSelectColumn($alias . '.BookMarkSessions');
            $criteria->addSelectColumn($alias . '.BookMark');
            $criteria->addSelectColumn($alias . '.Duration');
            $criteria->addSelectColumn($alias . '.Bandwidth_old');
            $criteria->addSelectColumn($alias . '.Bandwidth');
            $criteria->addSelectColumn($alias . '.BWNotViewed');
            $criteria->addSelectColumn($alias . '.USA');
            $criteria->addSelectColumn($alias . '.International');
            $criteria->addSelectColumn($alias . '.Unknown');
            $criteria->addSelectColumn($alias . '.Countries');
            $criteria->addSelectColumn($alias . '.DevCountries');
            $criteria->addSelectColumn($alias . '.DevCountSess');
            $criteria->addSelectColumn($alias . '.ACPCountries');
            $criteria->addSelectColumn($alias . '.ACPCountSess');
            $criteria->addSelectColumn($alias . '.OtherOS');
            $criteria->addSelectColumn($alias . '.TopDay');
            $criteria->addSelectColumn($alias . '.TopDayDate');
            $criteria->addSelectColumn($alias . '.Downloads');
            $criteria->addSelectColumn($alias . '.SummaryDir');
            $criteria->addSelectColumn($alias . '.NomenclatureDir');
            $criteria->addSelectColumn($alias . '.ComNamesDir');
            $criteria->addSelectColumn($alias . '.ReferencesDir');
            $criteria->addSelectColumn($alias . '.PhotosDir');
            $criteria->addSelectColumn($alias . '.ForumDir');
            $criteria->addSelectColumn($alias . '.TourDir');
            $criteria->addSelectColumn($alias . '.ChatDir');
            $criteria->addSelectColumn($alias . '.PopdynDir');
            $criteria->addSelectColumn($alias . '.ReproductionDir');
            $criteria->addSelectColumn($alias . '.TrophicDir');
            $criteria->addSelectColumn($alias . '.CountryDir');
            $criteria->addSelectColumn($alias . '.EschmeyerDir');
            $criteria->addSelectColumn($alias . '.FBBookDir');
            $criteria->addSelectColumn($alias . '.FishQuizDir');
            $criteria->addSelectColumn($alias . '.MuseumDir');
            $criteria->addSelectColumn($alias . '.GlossaryDir');
            $criteria->addSelectColumn($alias . '.MapDir');
            $criteria->addSelectColumn($alias . '.Identification');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.LarvalBaseDir');
            $criteria->addSelectColumn($alias . '.DiseaseDir');
            $criteria->addSelectColumn($alias . '.ToolsDir');
            $criteria->addSelectColumn($alias . '.IdentificationDir');
            $criteria->addSelectColumn($alias . '.KeysDir');
            $criteria->addSelectColumn($alias . '.FieldGuidesDir');
            $criteria->addSelectColumn($alias . '.FishOnLineDir');
            $criteria->addSelectColumn($alias . '.DownloadDir');
            $criteria->addSelectColumn($alias . '.EcologyDir');
            $criteria->addSelectColumn($alias . '.PhysiologyDir');
            $criteria->addSelectColumn($alias . '.GeneticsDir');
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
        $criteria->setPrimaryTableName(WebusePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            WebusePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(WebusePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(WebusePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Webuse
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = WebusePeer::doSelect($critcopy, $con);
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
        return WebusePeer::populateObjects(WebusePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(WebusePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            WebusePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(WebusePeer::DATABASE_NAME);

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
     * @param Webuse $obj A Webuse object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            WebusePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Webuse object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Webuse) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Webuse object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(WebusePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Webuse Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(WebusePeer::$instances[$key])) {
                return WebusePeer::$instances[$key];
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
        foreach (WebusePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        WebusePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to webuse
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
        $cls = WebusePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = WebusePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = WebusePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                WebusePeer::addInstanceToPool($obj, $key);
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
     * @return array (Webuse object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = WebusePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = WebusePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + WebusePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = WebusePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            WebusePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(WebusePeer::DATABASE_NAME)->getTable(WebusePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseWebusePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseWebusePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \WebuseTableMap());
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
        return WebusePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Webuse or Criteria object.
     *
     * @param      mixed $values Criteria or Webuse object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WebusePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Webuse object
        }

        if ($criteria->containsKey(WebusePeer::AUTOCTR) && $criteria->keyContainsValue(WebusePeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.WebusePeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(WebusePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Webuse or Criteria object.
     *
     * @param      mixed $values Criteria or Webuse object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WebusePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(WebusePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(WebusePeer::AUTOCTR);
            $value = $criteria->remove(WebusePeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(WebusePeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(WebusePeer::TABLE_NAME);
            }

        } else { // $values is Webuse object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(WebusePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the webuse table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WebusePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(WebusePeer::TABLE_NAME, $con, WebusePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WebusePeer::clearInstancePool();
            WebusePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Webuse or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Webuse object or primary key or array of primary keys
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
            $con = Propel::getConnection(WebusePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            WebusePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Webuse) { // it's a model object
            // invalidate the cache for this single object
            WebusePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(WebusePeer::DATABASE_NAME);
            $criteria->add(WebusePeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                WebusePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(WebusePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            WebusePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Webuse object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Webuse $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(WebusePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(WebusePeer::TABLE_NAME);

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

        return BasePeer::doValidate(WebusePeer::DATABASE_NAME, WebusePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Webuse
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = WebusePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(WebusePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(WebusePeer::DATABASE_NAME);
        $criteria->add(WebusePeer::AUTOCTR, $pk);

        $v = WebusePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Webuse[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(WebusePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(WebusePeer::DATABASE_NAME);
            $criteria->add(WebusePeer::AUTOCTR, $pks, Criteria::IN);
            $objs = WebusePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseWebusePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseWebusePeer::buildTableMap();

