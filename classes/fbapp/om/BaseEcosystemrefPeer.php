<?php


/**
 * Base static class for performing query and update operations on the 'ecosystemref' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseEcosystemrefPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'ecosystemref';

    /** the related Propel class for this table */
    const OM_CLASS = 'Ecosystemref';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EcosystemrefTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 75;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 75;

    /** the column name for the E_CODE field */
    const E_CODE = 'ecosystemref.E_CODE';

    /** the column name for the EcosystemName field */
    const ECOSYSTEMNAME = 'ecosystemref.EcosystemName';

    /** the column name for the EcosystemType field */
    const ECOSYSTEMTYPE = 'ecosystemref.EcosystemType';

    /** the column name for the E_CODE_Large field */
    const E_CODE_LARGE = 'ecosystemref.E_CODE_Large';

    /** the column name for the E_CODE_Larger field */
    const E_CODE_LARGER = 'ecosystemref.E_CODE_Larger';

    /** the column name for the Ready field */
    const READY = 'ecosystemref.Ready';

    /** the column name for the OtherNames field */
    const OTHERNAMES = 'ecosystemref.OtherNames';

    /** the column name for the Location field */
    const LOCATION = 'ecosystemref.Location';

    /** the column name for the LocationMap field */
    const LOCATIONMAP = 'ecosystemref.LocationMap';

    /** the column name for the Salinity field */
    const SALINITY = 'ecosystemref.Salinity';

    /** the column name for the RiverLength field */
    const RIVERLENGTH = 'ecosystemref.RiverLength';

    /** the column name for the Area field */
    const AREA = 'ecosystemref.Area';

    /** the column name for the SizeRef field */
    const SIZEREF = 'ecosystemref.SizeRef';

    /** the column name for the DrainageArea field */
    const DRAINAGEAREA = 'ecosystemref.DrainageArea';

    /** the column name for the NorthernLat field */
    const NORTHERNLAT = 'ecosystemref.NorthernLat';

    /** the column name for the NrangeNS field */
    const NRANGENS = 'ecosystemref.NrangeNS';

    /** the column name for the SouthernLat field */
    const SOUTHERNLAT = 'ecosystemref.SouthernLat';

    /** the column name for the SrangeNS field */
    const SRANGENS = 'ecosystemref.SrangeNS';

    /** the column name for the WesternLat field */
    const WESTERNLAT = 'ecosystemref.WesternLat';

    /** the column name for the WrangeEW field */
    const WRANGEEW = 'ecosystemref.WrangeEW';

    /** the column name for the EasternLat field */
    const EASTERNLAT = 'ecosystemref.EasternLat';

    /** the column name for the ErangeEW field */
    const ERANGEEW = 'ecosystemref.ErangeEW';

    /** the column name for the Climate field */
    const CLIMATE = 'ecosystemref.Climate';

    /** the column name for the Polar field */
    const POLAR = 'ecosystemref.Polar';

    /** the column name for the Boreal field */
    const BOREAL = 'ecosystemref.Boreal';

    /** the column name for the Temperate field */
    const TEMPERATE = 'ecosystemref.Temperate';

    /** the column name for the Subtropical field */
    const SUBTROPICAL = 'ecosystemref.Subtropical';

    /** the column name for the Tropical field */
    const TROPICAL = 'ecosystemref.Tropical';

    /** the column name for the AverageDepth field */
    const AVERAGEDEPTH = 'ecosystemref.AverageDepth';

    /** the column name for the MaxDepth field */
    const MAXDEPTH = 'ecosystemref.MaxDepth';

    /** the column name for the DepthRef field */
    const DEPTHREF = 'ecosystemref.DepthRef';

    /** the column name for the TempSurface field */
    const TEMPSURFACE = 'ecosystemref.TempSurface';

    /** the column name for the TempSurfaceMap field */
    const TEMPSURFACEMAP = 'ecosystemref.TempSurfaceMap';

    /** the column name for the TempDepth field */
    const TEMPDEPTH = 'ecosystemref.TempDepth';

    /** the column name for the TempDepthMap field */
    const TEMPDEPTHMAP = 'ecosystemref.TempDepthMap';

    /** the column name for the Description field */
    const DESCRIPTION = 'ecosystemref.Description';

    /** the column name for the TotalCount field */
    const TOTALCOUNT = 'ecosystemref.TotalCount';

    /** the column name for the TotalFamCount field */
    const TOTALFAMCOUNT = 'ecosystemref.TotalFamCount';

    /** the column name for the TotalComplete field */
    const TOTALCOMPLETE = 'ecosystemref.TotalComplete';

    /** the column name for the TotalLit field */
    const TOTALLIT = 'ecosystemref.TotalLit';

    /** the column name for the TotalFamLit field */
    const TOTALFAMLIT = 'ecosystemref.TotalFamLit';

    /** the column name for the TotalRef field */
    const TOTALREF = 'ecosystemref.TotalRef';

    /** the column name for the UseFlag field */
    const USEFLAG = 'ecosystemref.UseFlag';

    /** the column name for the Comments field */
    const COMMENTS = 'ecosystemref.Comments';

    /** the column name for the Remarks field */
    const REMARKS = 'ecosystemref.Remarks';

    /** the column name for the LastUpdate field */
    const LASTUPDATE = 'ecosystemref.LastUpdate';

    /** the column name for the LatDegFill field */
    const LATDEGFILL = 'ecosystemref.LatDegFill';

    /** the column name for the LatMinFill field */
    const LATMINFILL = 'ecosystemref.LatMinFill';

    /** the column name for the NorthSouthFill field */
    const NORTHSOUTHFILL = 'ecosystemref.NorthSouthFill';

    /** the column name for the LongDegFill field */
    const LONGDEGFILL = 'ecosystemref.LongDegFill';

    /** the column name for the LongMinFill field */
    const LONGMINFILL = 'ecosystemref.LongMinFill';

    /** the column name for the EastWestFill field */
    const EASTWESTFILL = 'ecosystemref.EastWestFill';

    /** the column name for the EcosystemURL1 field */
    const ECOSYSTEMURL1 = 'ecosystemref.EcosystemURL1';

    /** the column name for the EcosystemURL2 field */
    const ECOSYSTEMURL2 = 'ecosystemref.EcosystemURL2';

    /** the column name for the EcosystemURL3 field */
    const ECOSYSTEMURL3 = 'ecosystemref.EcosystemURL3';

    /** the column name for the Entered field */
    const ENTERED = 'ecosystemref.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'ecosystemref.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'ecosystemref.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'ecosystemref.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'ecosystemref.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'ecosystemref.DateChecked';

    /** the column name for the EcosystemName_German field */
    const ECOSYSTEMNAME_GERMAN = 'ecosystemref.EcosystemName_German';

    /** the column name for the EcosystemName_Russian_original field */
    const ECOSYSTEMNAME_RUSSIAN_ORIGINAL = 'ecosystemref.EcosystemName_Russian_original';

    /** the column name for the EcosystemName_Russian field */
    const ECOSYSTEMNAME_RUSSIAN = 'ecosystemref.EcosystemName_Russian';

    /** the column name for the EcosystemName_French field */
    const ECOSYSTEMNAME_FRENCH = 'ecosystemref.EcosystemName_French';

    /** the column name for the EcosystemName_Chinese field */
    const ECOSYSTEMNAME_CHINESE = 'ecosystemref.EcosystemName_Chinese';

    /** the column name for the EcosystemName_Dutch field */
    const ECOSYSTEMNAME_DUTCH = 'ecosystemref.EcosystemName_Dutch';

    /** the column name for the EcosystemName_Italian field */
    const ECOSYSTEMNAME_ITALIAN = 'ecosystemref.EcosystemName_Italian';

    /** the column name for the EcosystemName_Swedish field */
    const ECOSYSTEMNAME_SWEDISH = 'ecosystemref.EcosystemName_Swedish';

    /** the column name for the EcosystemName_Greek_original field */
    const ECOSYSTEMNAME_GREEK_ORIGINAL = 'ecosystemref.EcosystemName_Greek_original';

    /** the column name for the EcosystemName_Greek field */
    const ECOSYSTEMNAME_GREEK = 'ecosystemref.EcosystemName_Greek';

    /** the column name for the EcosystemName_Portuguese field */
    const ECOSYSTEMNAME_PORTUGUESE = 'ecosystemref.EcosystemName_Portuguese';

    /** the column name for the EcosystemName_Spanish field */
    const ECOSYSTEMNAME_SPANISH = 'ecosystemref.EcosystemName_Spanish';

    /** the column name for the EcosystemName_Chinese_u field */
    const ECOSYSTEMNAME_CHINESE_U = 'ecosystemref.EcosystemName_Chinese_u';

    /** the column name for the TS field */
    const TS = 'ecosystemref.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Ecosystemref objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Ecosystemref[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EcosystemrefPeer::$fieldNames[EcosystemrefPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ECode', 'Ecosystemname', 'Ecosystemtype', 'ECodeLarge', 'ECodeLarger', 'Ready', 'Othernames', 'Location', 'Locationmap', 'Salinity', 'Riverlength', 'Area', 'Sizeref', 'Drainagearea', 'Northernlat', 'Nrangens', 'Southernlat', 'Srangens', 'Westernlat', 'Wrangeew', 'Easternlat', 'Erangeew', 'Climate', 'Polar', 'Boreal', 'Temperate', 'Subtropical', 'Tropical', 'Averagedepth', 'Maxdepth', 'Depthref', 'Tempsurface', 'Tempsurfacemap', 'Tempdepth', 'Tempdepthmap', 'Description', 'Totalcount', 'Totalfamcount', 'Totalcomplete', 'Totallit', 'Totalfamlit', 'Totalref', 'Useflag', 'Comments', 'Remarks', 'Lastupdate', 'Latdegfill', 'Latminfill', 'Northsouthfill', 'Longdegfill', 'Longminfill', 'Eastwestfill', 'Ecosystemurl1', 'Ecosystemurl2', 'Ecosystemurl3', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'EcosystemnameGerman', 'EcosystemnameRussianOriginal', 'EcosystemnameRussian', 'EcosystemnameFrench', 'EcosystemnameChinese', 'EcosystemnameDutch', 'EcosystemnameItalian', 'EcosystemnameSwedish', 'EcosystemnameGreekOriginal', 'EcosystemnameGreek', 'EcosystemnamePortuguese', 'EcosystemnameSpanish', 'EcosystemnameChineseU', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('eCode', 'ecosystemname', 'ecosystemtype', 'eCodeLarge', 'eCodeLarger', 'ready', 'othernames', 'location', 'locationmap', 'salinity', 'riverlength', 'area', 'sizeref', 'drainagearea', 'northernlat', 'nrangens', 'southernlat', 'srangens', 'westernlat', 'wrangeew', 'easternlat', 'erangeew', 'climate', 'polar', 'boreal', 'temperate', 'subtropical', 'tropical', 'averagedepth', 'maxdepth', 'depthref', 'tempsurface', 'tempsurfacemap', 'tempdepth', 'tempdepthmap', 'description', 'totalcount', 'totalfamcount', 'totalcomplete', 'totallit', 'totalfamlit', 'totalref', 'useflag', 'comments', 'remarks', 'lastupdate', 'latdegfill', 'latminfill', 'northsouthfill', 'longdegfill', 'longminfill', 'eastwestfill', 'ecosystemurl1', 'ecosystemurl2', 'ecosystemurl3', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ecosystemnameGerman', 'ecosystemnameRussianOriginal', 'ecosystemnameRussian', 'ecosystemnameFrench', 'ecosystemnameChinese', 'ecosystemnameDutch', 'ecosystemnameItalian', 'ecosystemnameSwedish', 'ecosystemnameGreekOriginal', 'ecosystemnameGreek', 'ecosystemnamePortuguese', 'ecosystemnameSpanish', 'ecosystemnameChineseU', 'ts', ),
        BasePeer::TYPE_COLNAME => array (EcosystemrefPeer::E_CODE, EcosystemrefPeer::ECOSYSTEMNAME, EcosystemrefPeer::ECOSYSTEMTYPE, EcosystemrefPeer::E_CODE_LARGE, EcosystemrefPeer::E_CODE_LARGER, EcosystemrefPeer::READY, EcosystemrefPeer::OTHERNAMES, EcosystemrefPeer::LOCATION, EcosystemrefPeer::LOCATIONMAP, EcosystemrefPeer::SALINITY, EcosystemrefPeer::RIVERLENGTH, EcosystemrefPeer::AREA, EcosystemrefPeer::SIZEREF, EcosystemrefPeer::DRAINAGEAREA, EcosystemrefPeer::NORTHERNLAT, EcosystemrefPeer::NRANGENS, EcosystemrefPeer::SOUTHERNLAT, EcosystemrefPeer::SRANGENS, EcosystemrefPeer::WESTERNLAT, EcosystemrefPeer::WRANGEEW, EcosystemrefPeer::EASTERNLAT, EcosystemrefPeer::ERANGEEW, EcosystemrefPeer::CLIMATE, EcosystemrefPeer::POLAR, EcosystemrefPeer::BOREAL, EcosystemrefPeer::TEMPERATE, EcosystemrefPeer::SUBTROPICAL, EcosystemrefPeer::TROPICAL, EcosystemrefPeer::AVERAGEDEPTH, EcosystemrefPeer::MAXDEPTH, EcosystemrefPeer::DEPTHREF, EcosystemrefPeer::TEMPSURFACE, EcosystemrefPeer::TEMPSURFACEMAP, EcosystemrefPeer::TEMPDEPTH, EcosystemrefPeer::TEMPDEPTHMAP, EcosystemrefPeer::DESCRIPTION, EcosystemrefPeer::TOTALCOUNT, EcosystemrefPeer::TOTALFAMCOUNT, EcosystemrefPeer::TOTALCOMPLETE, EcosystemrefPeer::TOTALLIT, EcosystemrefPeer::TOTALFAMLIT, EcosystemrefPeer::TOTALREF, EcosystemrefPeer::USEFLAG, EcosystemrefPeer::COMMENTS, EcosystemrefPeer::REMARKS, EcosystemrefPeer::LASTUPDATE, EcosystemrefPeer::LATDEGFILL, EcosystemrefPeer::LATMINFILL, EcosystemrefPeer::NORTHSOUTHFILL, EcosystemrefPeer::LONGDEGFILL, EcosystemrefPeer::LONGMINFILL, EcosystemrefPeer::EASTWESTFILL, EcosystemrefPeer::ECOSYSTEMURL1, EcosystemrefPeer::ECOSYSTEMURL2, EcosystemrefPeer::ECOSYSTEMURL3, EcosystemrefPeer::ENTERED, EcosystemrefPeer::DATEENTERED, EcosystemrefPeer::MODIFIED, EcosystemrefPeer::DATEMODIFIED, EcosystemrefPeer::EXPERT, EcosystemrefPeer::DATECHECKED, EcosystemrefPeer::ECOSYSTEMNAME_GERMAN, EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN_ORIGINAL, EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN, EcosystemrefPeer::ECOSYSTEMNAME_FRENCH, EcosystemrefPeer::ECOSYSTEMNAME_CHINESE, EcosystemrefPeer::ECOSYSTEMNAME_DUTCH, EcosystemrefPeer::ECOSYSTEMNAME_ITALIAN, EcosystemrefPeer::ECOSYSTEMNAME_SWEDISH, EcosystemrefPeer::ECOSYSTEMNAME_GREEK_ORIGINAL, EcosystemrefPeer::ECOSYSTEMNAME_GREEK, EcosystemrefPeer::ECOSYSTEMNAME_PORTUGUESE, EcosystemrefPeer::ECOSYSTEMNAME_SPANISH, EcosystemrefPeer::ECOSYSTEMNAME_CHINESE_U, EcosystemrefPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('E_CODE', 'ECOSYSTEMNAME', 'ECOSYSTEMTYPE', 'E_CODE_LARGE', 'E_CODE_LARGER', 'READY', 'OTHERNAMES', 'LOCATION', 'LOCATIONMAP', 'SALINITY', 'RIVERLENGTH', 'AREA', 'SIZEREF', 'DRAINAGEAREA', 'NORTHERNLAT', 'NRANGENS', 'SOUTHERNLAT', 'SRANGENS', 'WESTERNLAT', 'WRANGEEW', 'EASTERNLAT', 'ERANGEEW', 'CLIMATE', 'POLAR', 'BOREAL', 'TEMPERATE', 'SUBTROPICAL', 'TROPICAL', 'AVERAGEDEPTH', 'MAXDEPTH', 'DEPTHREF', 'TEMPSURFACE', 'TEMPSURFACEMAP', 'TEMPDEPTH', 'TEMPDEPTHMAP', 'DESCRIPTION', 'TOTALCOUNT', 'TOTALFAMCOUNT', 'TOTALCOMPLETE', 'TOTALLIT', 'TOTALFAMLIT', 'TOTALREF', 'USEFLAG', 'COMMENTS', 'REMARKS', 'LASTUPDATE', 'LATDEGFILL', 'LATMINFILL', 'NORTHSOUTHFILL', 'LONGDEGFILL', 'LONGMINFILL', 'EASTWESTFILL', 'ECOSYSTEMURL1', 'ECOSYSTEMURL2', 'ECOSYSTEMURL3', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'ECOSYSTEMNAME_GERMAN', 'ECOSYSTEMNAME_RUSSIAN_ORIGINAL', 'ECOSYSTEMNAME_RUSSIAN', 'ECOSYSTEMNAME_FRENCH', 'ECOSYSTEMNAME_CHINESE', 'ECOSYSTEMNAME_DUTCH', 'ECOSYSTEMNAME_ITALIAN', 'ECOSYSTEMNAME_SWEDISH', 'ECOSYSTEMNAME_GREEK_ORIGINAL', 'ECOSYSTEMNAME_GREEK', 'ECOSYSTEMNAME_PORTUGUESE', 'ECOSYSTEMNAME_SPANISH', 'ECOSYSTEMNAME_CHINESE_U', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('E_CODE', 'EcosystemName', 'EcosystemType', 'E_CODE_Large', 'E_CODE_Larger', 'Ready', 'OtherNames', 'Location', 'LocationMap', 'Salinity', 'RiverLength', 'Area', 'SizeRef', 'DrainageArea', 'NorthernLat', 'NrangeNS', 'SouthernLat', 'SrangeNS', 'WesternLat', 'WrangeEW', 'EasternLat', 'ErangeEW', 'Climate', 'Polar', 'Boreal', 'Temperate', 'Subtropical', 'Tropical', 'AverageDepth', 'MaxDepth', 'DepthRef', 'TempSurface', 'TempSurfaceMap', 'TempDepth', 'TempDepthMap', 'Description', 'TotalCount', 'TotalFamCount', 'TotalComplete', 'TotalLit', 'TotalFamLit', 'TotalRef', 'UseFlag', 'Comments', 'Remarks', 'LastUpdate', 'LatDegFill', 'LatMinFill', 'NorthSouthFill', 'LongDegFill', 'LongMinFill', 'EastWestFill', 'EcosystemURL1', 'EcosystemURL2', 'EcosystemURL3', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'EcosystemName_German', 'EcosystemName_Russian_original', 'EcosystemName_Russian', 'EcosystemName_French', 'EcosystemName_Chinese', 'EcosystemName_Dutch', 'EcosystemName_Italian', 'EcosystemName_Swedish', 'EcosystemName_Greek_original', 'EcosystemName_Greek', 'EcosystemName_Portuguese', 'EcosystemName_Spanish', 'EcosystemName_Chinese_u', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EcosystemrefPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ECode' => 0, 'Ecosystemname' => 1, 'Ecosystemtype' => 2, 'ECodeLarge' => 3, 'ECodeLarger' => 4, 'Ready' => 5, 'Othernames' => 6, 'Location' => 7, 'Locationmap' => 8, 'Salinity' => 9, 'Riverlength' => 10, 'Area' => 11, 'Sizeref' => 12, 'Drainagearea' => 13, 'Northernlat' => 14, 'Nrangens' => 15, 'Southernlat' => 16, 'Srangens' => 17, 'Westernlat' => 18, 'Wrangeew' => 19, 'Easternlat' => 20, 'Erangeew' => 21, 'Climate' => 22, 'Polar' => 23, 'Boreal' => 24, 'Temperate' => 25, 'Subtropical' => 26, 'Tropical' => 27, 'Averagedepth' => 28, 'Maxdepth' => 29, 'Depthref' => 30, 'Tempsurface' => 31, 'Tempsurfacemap' => 32, 'Tempdepth' => 33, 'Tempdepthmap' => 34, 'Description' => 35, 'Totalcount' => 36, 'Totalfamcount' => 37, 'Totalcomplete' => 38, 'Totallit' => 39, 'Totalfamlit' => 40, 'Totalref' => 41, 'Useflag' => 42, 'Comments' => 43, 'Remarks' => 44, 'Lastupdate' => 45, 'Latdegfill' => 46, 'Latminfill' => 47, 'Northsouthfill' => 48, 'Longdegfill' => 49, 'Longminfill' => 50, 'Eastwestfill' => 51, 'Ecosystemurl1' => 52, 'Ecosystemurl2' => 53, 'Ecosystemurl3' => 54, 'Entered' => 55, 'Dateentered' => 56, 'Modified' => 57, 'Datemodified' => 58, 'Expert' => 59, 'Datechecked' => 60, 'EcosystemnameGerman' => 61, 'EcosystemnameRussianOriginal' => 62, 'EcosystemnameRussian' => 63, 'EcosystemnameFrench' => 64, 'EcosystemnameChinese' => 65, 'EcosystemnameDutch' => 66, 'EcosystemnameItalian' => 67, 'EcosystemnameSwedish' => 68, 'EcosystemnameGreekOriginal' => 69, 'EcosystemnameGreek' => 70, 'EcosystemnamePortuguese' => 71, 'EcosystemnameSpanish' => 72, 'EcosystemnameChineseU' => 73, 'Ts' => 74, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('eCode' => 0, 'ecosystemname' => 1, 'ecosystemtype' => 2, 'eCodeLarge' => 3, 'eCodeLarger' => 4, 'ready' => 5, 'othernames' => 6, 'location' => 7, 'locationmap' => 8, 'salinity' => 9, 'riverlength' => 10, 'area' => 11, 'sizeref' => 12, 'drainagearea' => 13, 'northernlat' => 14, 'nrangens' => 15, 'southernlat' => 16, 'srangens' => 17, 'westernlat' => 18, 'wrangeew' => 19, 'easternlat' => 20, 'erangeew' => 21, 'climate' => 22, 'polar' => 23, 'boreal' => 24, 'temperate' => 25, 'subtropical' => 26, 'tropical' => 27, 'averagedepth' => 28, 'maxdepth' => 29, 'depthref' => 30, 'tempsurface' => 31, 'tempsurfacemap' => 32, 'tempdepth' => 33, 'tempdepthmap' => 34, 'description' => 35, 'totalcount' => 36, 'totalfamcount' => 37, 'totalcomplete' => 38, 'totallit' => 39, 'totalfamlit' => 40, 'totalref' => 41, 'useflag' => 42, 'comments' => 43, 'remarks' => 44, 'lastupdate' => 45, 'latdegfill' => 46, 'latminfill' => 47, 'northsouthfill' => 48, 'longdegfill' => 49, 'longminfill' => 50, 'eastwestfill' => 51, 'ecosystemurl1' => 52, 'ecosystemurl2' => 53, 'ecosystemurl3' => 54, 'entered' => 55, 'dateentered' => 56, 'modified' => 57, 'datemodified' => 58, 'expert' => 59, 'datechecked' => 60, 'ecosystemnameGerman' => 61, 'ecosystemnameRussianOriginal' => 62, 'ecosystemnameRussian' => 63, 'ecosystemnameFrench' => 64, 'ecosystemnameChinese' => 65, 'ecosystemnameDutch' => 66, 'ecosystemnameItalian' => 67, 'ecosystemnameSwedish' => 68, 'ecosystemnameGreekOriginal' => 69, 'ecosystemnameGreek' => 70, 'ecosystemnamePortuguese' => 71, 'ecosystemnameSpanish' => 72, 'ecosystemnameChineseU' => 73, 'ts' => 74, ),
        BasePeer::TYPE_COLNAME => array (EcosystemrefPeer::E_CODE => 0, EcosystemrefPeer::ECOSYSTEMNAME => 1, EcosystemrefPeer::ECOSYSTEMTYPE => 2, EcosystemrefPeer::E_CODE_LARGE => 3, EcosystemrefPeer::E_CODE_LARGER => 4, EcosystemrefPeer::READY => 5, EcosystemrefPeer::OTHERNAMES => 6, EcosystemrefPeer::LOCATION => 7, EcosystemrefPeer::LOCATIONMAP => 8, EcosystemrefPeer::SALINITY => 9, EcosystemrefPeer::RIVERLENGTH => 10, EcosystemrefPeer::AREA => 11, EcosystemrefPeer::SIZEREF => 12, EcosystemrefPeer::DRAINAGEAREA => 13, EcosystemrefPeer::NORTHERNLAT => 14, EcosystemrefPeer::NRANGENS => 15, EcosystemrefPeer::SOUTHERNLAT => 16, EcosystemrefPeer::SRANGENS => 17, EcosystemrefPeer::WESTERNLAT => 18, EcosystemrefPeer::WRANGEEW => 19, EcosystemrefPeer::EASTERNLAT => 20, EcosystemrefPeer::ERANGEEW => 21, EcosystemrefPeer::CLIMATE => 22, EcosystemrefPeer::POLAR => 23, EcosystemrefPeer::BOREAL => 24, EcosystemrefPeer::TEMPERATE => 25, EcosystemrefPeer::SUBTROPICAL => 26, EcosystemrefPeer::TROPICAL => 27, EcosystemrefPeer::AVERAGEDEPTH => 28, EcosystemrefPeer::MAXDEPTH => 29, EcosystemrefPeer::DEPTHREF => 30, EcosystemrefPeer::TEMPSURFACE => 31, EcosystemrefPeer::TEMPSURFACEMAP => 32, EcosystemrefPeer::TEMPDEPTH => 33, EcosystemrefPeer::TEMPDEPTHMAP => 34, EcosystemrefPeer::DESCRIPTION => 35, EcosystemrefPeer::TOTALCOUNT => 36, EcosystemrefPeer::TOTALFAMCOUNT => 37, EcosystemrefPeer::TOTALCOMPLETE => 38, EcosystemrefPeer::TOTALLIT => 39, EcosystemrefPeer::TOTALFAMLIT => 40, EcosystemrefPeer::TOTALREF => 41, EcosystemrefPeer::USEFLAG => 42, EcosystemrefPeer::COMMENTS => 43, EcosystemrefPeer::REMARKS => 44, EcosystemrefPeer::LASTUPDATE => 45, EcosystemrefPeer::LATDEGFILL => 46, EcosystemrefPeer::LATMINFILL => 47, EcosystemrefPeer::NORTHSOUTHFILL => 48, EcosystemrefPeer::LONGDEGFILL => 49, EcosystemrefPeer::LONGMINFILL => 50, EcosystemrefPeer::EASTWESTFILL => 51, EcosystemrefPeer::ECOSYSTEMURL1 => 52, EcosystemrefPeer::ECOSYSTEMURL2 => 53, EcosystemrefPeer::ECOSYSTEMURL3 => 54, EcosystemrefPeer::ENTERED => 55, EcosystemrefPeer::DATEENTERED => 56, EcosystemrefPeer::MODIFIED => 57, EcosystemrefPeer::DATEMODIFIED => 58, EcosystemrefPeer::EXPERT => 59, EcosystemrefPeer::DATECHECKED => 60, EcosystemrefPeer::ECOSYSTEMNAME_GERMAN => 61, EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN_ORIGINAL => 62, EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN => 63, EcosystemrefPeer::ECOSYSTEMNAME_FRENCH => 64, EcosystemrefPeer::ECOSYSTEMNAME_CHINESE => 65, EcosystemrefPeer::ECOSYSTEMNAME_DUTCH => 66, EcosystemrefPeer::ECOSYSTEMNAME_ITALIAN => 67, EcosystemrefPeer::ECOSYSTEMNAME_SWEDISH => 68, EcosystemrefPeer::ECOSYSTEMNAME_GREEK_ORIGINAL => 69, EcosystemrefPeer::ECOSYSTEMNAME_GREEK => 70, EcosystemrefPeer::ECOSYSTEMNAME_PORTUGUESE => 71, EcosystemrefPeer::ECOSYSTEMNAME_SPANISH => 72, EcosystemrefPeer::ECOSYSTEMNAME_CHINESE_U => 73, EcosystemrefPeer::TS => 74, ),
        BasePeer::TYPE_RAW_COLNAME => array ('E_CODE' => 0, 'ECOSYSTEMNAME' => 1, 'ECOSYSTEMTYPE' => 2, 'E_CODE_LARGE' => 3, 'E_CODE_LARGER' => 4, 'READY' => 5, 'OTHERNAMES' => 6, 'LOCATION' => 7, 'LOCATIONMAP' => 8, 'SALINITY' => 9, 'RIVERLENGTH' => 10, 'AREA' => 11, 'SIZEREF' => 12, 'DRAINAGEAREA' => 13, 'NORTHERNLAT' => 14, 'NRANGENS' => 15, 'SOUTHERNLAT' => 16, 'SRANGENS' => 17, 'WESTERNLAT' => 18, 'WRANGEEW' => 19, 'EASTERNLAT' => 20, 'ERANGEEW' => 21, 'CLIMATE' => 22, 'POLAR' => 23, 'BOREAL' => 24, 'TEMPERATE' => 25, 'SUBTROPICAL' => 26, 'TROPICAL' => 27, 'AVERAGEDEPTH' => 28, 'MAXDEPTH' => 29, 'DEPTHREF' => 30, 'TEMPSURFACE' => 31, 'TEMPSURFACEMAP' => 32, 'TEMPDEPTH' => 33, 'TEMPDEPTHMAP' => 34, 'DESCRIPTION' => 35, 'TOTALCOUNT' => 36, 'TOTALFAMCOUNT' => 37, 'TOTALCOMPLETE' => 38, 'TOTALLIT' => 39, 'TOTALFAMLIT' => 40, 'TOTALREF' => 41, 'USEFLAG' => 42, 'COMMENTS' => 43, 'REMARKS' => 44, 'LASTUPDATE' => 45, 'LATDEGFILL' => 46, 'LATMINFILL' => 47, 'NORTHSOUTHFILL' => 48, 'LONGDEGFILL' => 49, 'LONGMINFILL' => 50, 'EASTWESTFILL' => 51, 'ECOSYSTEMURL1' => 52, 'ECOSYSTEMURL2' => 53, 'ECOSYSTEMURL3' => 54, 'ENTERED' => 55, 'DATEENTERED' => 56, 'MODIFIED' => 57, 'DATEMODIFIED' => 58, 'EXPERT' => 59, 'DATECHECKED' => 60, 'ECOSYSTEMNAME_GERMAN' => 61, 'ECOSYSTEMNAME_RUSSIAN_ORIGINAL' => 62, 'ECOSYSTEMNAME_RUSSIAN' => 63, 'ECOSYSTEMNAME_FRENCH' => 64, 'ECOSYSTEMNAME_CHINESE' => 65, 'ECOSYSTEMNAME_DUTCH' => 66, 'ECOSYSTEMNAME_ITALIAN' => 67, 'ECOSYSTEMNAME_SWEDISH' => 68, 'ECOSYSTEMNAME_GREEK_ORIGINAL' => 69, 'ECOSYSTEMNAME_GREEK' => 70, 'ECOSYSTEMNAME_PORTUGUESE' => 71, 'ECOSYSTEMNAME_SPANISH' => 72, 'ECOSYSTEMNAME_CHINESE_U' => 73, 'TS' => 74, ),
        BasePeer::TYPE_FIELDNAME => array ('E_CODE' => 0, 'EcosystemName' => 1, 'EcosystemType' => 2, 'E_CODE_Large' => 3, 'E_CODE_Larger' => 4, 'Ready' => 5, 'OtherNames' => 6, 'Location' => 7, 'LocationMap' => 8, 'Salinity' => 9, 'RiverLength' => 10, 'Area' => 11, 'SizeRef' => 12, 'DrainageArea' => 13, 'NorthernLat' => 14, 'NrangeNS' => 15, 'SouthernLat' => 16, 'SrangeNS' => 17, 'WesternLat' => 18, 'WrangeEW' => 19, 'EasternLat' => 20, 'ErangeEW' => 21, 'Climate' => 22, 'Polar' => 23, 'Boreal' => 24, 'Temperate' => 25, 'Subtropical' => 26, 'Tropical' => 27, 'AverageDepth' => 28, 'MaxDepth' => 29, 'DepthRef' => 30, 'TempSurface' => 31, 'TempSurfaceMap' => 32, 'TempDepth' => 33, 'TempDepthMap' => 34, 'Description' => 35, 'TotalCount' => 36, 'TotalFamCount' => 37, 'TotalComplete' => 38, 'TotalLit' => 39, 'TotalFamLit' => 40, 'TotalRef' => 41, 'UseFlag' => 42, 'Comments' => 43, 'Remarks' => 44, 'LastUpdate' => 45, 'LatDegFill' => 46, 'LatMinFill' => 47, 'NorthSouthFill' => 48, 'LongDegFill' => 49, 'LongMinFill' => 50, 'EastWestFill' => 51, 'EcosystemURL1' => 52, 'EcosystemURL2' => 53, 'EcosystemURL3' => 54, 'Entered' => 55, 'DateEntered' => 56, 'Modified' => 57, 'DateModified' => 58, 'Expert' => 59, 'DateChecked' => 60, 'EcosystemName_German' => 61, 'EcosystemName_Russian_original' => 62, 'EcosystemName_Russian' => 63, 'EcosystemName_French' => 64, 'EcosystemName_Chinese' => 65, 'EcosystemName_Dutch' => 66, 'EcosystemName_Italian' => 67, 'EcosystemName_Swedish' => 68, 'EcosystemName_Greek_original' => 69, 'EcosystemName_Greek' => 70, 'EcosystemName_Portuguese' => 71, 'EcosystemName_Spanish' => 72, 'EcosystemName_Chinese_u' => 73, 'TS' => 74, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, )
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
        $toNames = EcosystemrefPeer::getFieldNames($toType);
        $key = isset(EcosystemrefPeer::$fieldKeys[$fromType][$name]) ? EcosystemrefPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EcosystemrefPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, EcosystemrefPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EcosystemrefPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. EcosystemrefPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EcosystemrefPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(EcosystemrefPeer::E_CODE);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMNAME);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMTYPE);
            $criteria->addSelectColumn(EcosystemrefPeer::E_CODE_LARGE);
            $criteria->addSelectColumn(EcosystemrefPeer::E_CODE_LARGER);
            $criteria->addSelectColumn(EcosystemrefPeer::READY);
            $criteria->addSelectColumn(EcosystemrefPeer::OTHERNAMES);
            $criteria->addSelectColumn(EcosystemrefPeer::LOCATION);
            $criteria->addSelectColumn(EcosystemrefPeer::LOCATIONMAP);
            $criteria->addSelectColumn(EcosystemrefPeer::SALINITY);
            $criteria->addSelectColumn(EcosystemrefPeer::RIVERLENGTH);
            $criteria->addSelectColumn(EcosystemrefPeer::AREA);
            $criteria->addSelectColumn(EcosystemrefPeer::SIZEREF);
            $criteria->addSelectColumn(EcosystemrefPeer::DRAINAGEAREA);
            $criteria->addSelectColumn(EcosystemrefPeer::NORTHERNLAT);
            $criteria->addSelectColumn(EcosystemrefPeer::NRANGENS);
            $criteria->addSelectColumn(EcosystemrefPeer::SOUTHERNLAT);
            $criteria->addSelectColumn(EcosystemrefPeer::SRANGENS);
            $criteria->addSelectColumn(EcosystemrefPeer::WESTERNLAT);
            $criteria->addSelectColumn(EcosystemrefPeer::WRANGEEW);
            $criteria->addSelectColumn(EcosystemrefPeer::EASTERNLAT);
            $criteria->addSelectColumn(EcosystemrefPeer::ERANGEEW);
            $criteria->addSelectColumn(EcosystemrefPeer::CLIMATE);
            $criteria->addSelectColumn(EcosystemrefPeer::POLAR);
            $criteria->addSelectColumn(EcosystemrefPeer::BOREAL);
            $criteria->addSelectColumn(EcosystemrefPeer::TEMPERATE);
            $criteria->addSelectColumn(EcosystemrefPeer::SUBTROPICAL);
            $criteria->addSelectColumn(EcosystemrefPeer::TROPICAL);
            $criteria->addSelectColumn(EcosystemrefPeer::AVERAGEDEPTH);
            $criteria->addSelectColumn(EcosystemrefPeer::MAXDEPTH);
            $criteria->addSelectColumn(EcosystemrefPeer::DEPTHREF);
            $criteria->addSelectColumn(EcosystemrefPeer::TEMPSURFACE);
            $criteria->addSelectColumn(EcosystemrefPeer::TEMPSURFACEMAP);
            $criteria->addSelectColumn(EcosystemrefPeer::TEMPDEPTH);
            $criteria->addSelectColumn(EcosystemrefPeer::TEMPDEPTHMAP);
            $criteria->addSelectColumn(EcosystemrefPeer::DESCRIPTION);
            $criteria->addSelectColumn(EcosystemrefPeer::TOTALCOUNT);
            $criteria->addSelectColumn(EcosystemrefPeer::TOTALFAMCOUNT);
            $criteria->addSelectColumn(EcosystemrefPeer::TOTALCOMPLETE);
            $criteria->addSelectColumn(EcosystemrefPeer::TOTALLIT);
            $criteria->addSelectColumn(EcosystemrefPeer::TOTALFAMLIT);
            $criteria->addSelectColumn(EcosystemrefPeer::TOTALREF);
            $criteria->addSelectColumn(EcosystemrefPeer::USEFLAG);
            $criteria->addSelectColumn(EcosystemrefPeer::COMMENTS);
            $criteria->addSelectColumn(EcosystemrefPeer::REMARKS);
            $criteria->addSelectColumn(EcosystemrefPeer::LASTUPDATE);
            $criteria->addSelectColumn(EcosystemrefPeer::LATDEGFILL);
            $criteria->addSelectColumn(EcosystemrefPeer::LATMINFILL);
            $criteria->addSelectColumn(EcosystemrefPeer::NORTHSOUTHFILL);
            $criteria->addSelectColumn(EcosystemrefPeer::LONGDEGFILL);
            $criteria->addSelectColumn(EcosystemrefPeer::LONGMINFILL);
            $criteria->addSelectColumn(EcosystemrefPeer::EASTWESTFILL);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMURL1);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMURL2);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMURL3);
            $criteria->addSelectColumn(EcosystemrefPeer::ENTERED);
            $criteria->addSelectColumn(EcosystemrefPeer::DATEENTERED);
            $criteria->addSelectColumn(EcosystemrefPeer::MODIFIED);
            $criteria->addSelectColumn(EcosystemrefPeer::DATEMODIFIED);
            $criteria->addSelectColumn(EcosystemrefPeer::EXPERT);
            $criteria->addSelectColumn(EcosystemrefPeer::DATECHECKED);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMNAME_GERMAN);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN_ORIGINAL);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMNAME_RUSSIAN);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMNAME_FRENCH);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMNAME_CHINESE);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMNAME_DUTCH);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMNAME_ITALIAN);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMNAME_SWEDISH);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMNAME_GREEK_ORIGINAL);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMNAME_GREEK);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMNAME_PORTUGUESE);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMNAME_SPANISH);
            $criteria->addSelectColumn(EcosystemrefPeer::ECOSYSTEMNAME_CHINESE_U);
            $criteria->addSelectColumn(EcosystemrefPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.E_CODE');
            $criteria->addSelectColumn($alias . '.EcosystemName');
            $criteria->addSelectColumn($alias . '.EcosystemType');
            $criteria->addSelectColumn($alias . '.E_CODE_Large');
            $criteria->addSelectColumn($alias . '.E_CODE_Larger');
            $criteria->addSelectColumn($alias . '.Ready');
            $criteria->addSelectColumn($alias . '.OtherNames');
            $criteria->addSelectColumn($alias . '.Location');
            $criteria->addSelectColumn($alias . '.LocationMap');
            $criteria->addSelectColumn($alias . '.Salinity');
            $criteria->addSelectColumn($alias . '.RiverLength');
            $criteria->addSelectColumn($alias . '.Area');
            $criteria->addSelectColumn($alias . '.SizeRef');
            $criteria->addSelectColumn($alias . '.DrainageArea');
            $criteria->addSelectColumn($alias . '.NorthernLat');
            $criteria->addSelectColumn($alias . '.NrangeNS');
            $criteria->addSelectColumn($alias . '.SouthernLat');
            $criteria->addSelectColumn($alias . '.SrangeNS');
            $criteria->addSelectColumn($alias . '.WesternLat');
            $criteria->addSelectColumn($alias . '.WrangeEW');
            $criteria->addSelectColumn($alias . '.EasternLat');
            $criteria->addSelectColumn($alias . '.ErangeEW');
            $criteria->addSelectColumn($alias . '.Climate');
            $criteria->addSelectColumn($alias . '.Polar');
            $criteria->addSelectColumn($alias . '.Boreal');
            $criteria->addSelectColumn($alias . '.Temperate');
            $criteria->addSelectColumn($alias . '.Subtropical');
            $criteria->addSelectColumn($alias . '.Tropical');
            $criteria->addSelectColumn($alias . '.AverageDepth');
            $criteria->addSelectColumn($alias . '.MaxDepth');
            $criteria->addSelectColumn($alias . '.DepthRef');
            $criteria->addSelectColumn($alias . '.TempSurface');
            $criteria->addSelectColumn($alias . '.TempSurfaceMap');
            $criteria->addSelectColumn($alias . '.TempDepth');
            $criteria->addSelectColumn($alias . '.TempDepthMap');
            $criteria->addSelectColumn($alias . '.Description');
            $criteria->addSelectColumn($alias . '.TotalCount');
            $criteria->addSelectColumn($alias . '.TotalFamCount');
            $criteria->addSelectColumn($alias . '.TotalComplete');
            $criteria->addSelectColumn($alias . '.TotalLit');
            $criteria->addSelectColumn($alias . '.TotalFamLit');
            $criteria->addSelectColumn($alias . '.TotalRef');
            $criteria->addSelectColumn($alias . '.UseFlag');
            $criteria->addSelectColumn($alias . '.Comments');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.LastUpdate');
            $criteria->addSelectColumn($alias . '.LatDegFill');
            $criteria->addSelectColumn($alias . '.LatMinFill');
            $criteria->addSelectColumn($alias . '.NorthSouthFill');
            $criteria->addSelectColumn($alias . '.LongDegFill');
            $criteria->addSelectColumn($alias . '.LongMinFill');
            $criteria->addSelectColumn($alias . '.EastWestFill');
            $criteria->addSelectColumn($alias . '.EcosystemURL1');
            $criteria->addSelectColumn($alias . '.EcosystemURL2');
            $criteria->addSelectColumn($alias . '.EcosystemURL3');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.EcosystemName_German');
            $criteria->addSelectColumn($alias . '.EcosystemName_Russian_original');
            $criteria->addSelectColumn($alias . '.EcosystemName_Russian');
            $criteria->addSelectColumn($alias . '.EcosystemName_French');
            $criteria->addSelectColumn($alias . '.EcosystemName_Chinese');
            $criteria->addSelectColumn($alias . '.EcosystemName_Dutch');
            $criteria->addSelectColumn($alias . '.EcosystemName_Italian');
            $criteria->addSelectColumn($alias . '.EcosystemName_Swedish');
            $criteria->addSelectColumn($alias . '.EcosystemName_Greek_original');
            $criteria->addSelectColumn($alias . '.EcosystemName_Greek');
            $criteria->addSelectColumn($alias . '.EcosystemName_Portuguese');
            $criteria->addSelectColumn($alias . '.EcosystemName_Spanish');
            $criteria->addSelectColumn($alias . '.EcosystemName_Chinese_u');
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
        $criteria->setPrimaryTableName(EcosystemrefPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EcosystemrefPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EcosystemrefPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EcosystemrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Ecosystemref
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EcosystemrefPeer::doSelect($critcopy, $con);
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
        return EcosystemrefPeer::populateObjects(EcosystemrefPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(EcosystemrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EcosystemrefPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EcosystemrefPeer::DATABASE_NAME);

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
     * @param Ecosystemref $obj A Ecosystemref object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getEcosystemname();
            } // if key === null
            EcosystemrefPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Ecosystemref object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Ecosystemref) {
                $key = (string) $value->getEcosystemname();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Ecosystemref object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EcosystemrefPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Ecosystemref Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EcosystemrefPeer::$instances[$key])) {
                return EcosystemrefPeer::$instances[$key];
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
        foreach (EcosystemrefPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        EcosystemrefPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to ecosystemref
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
        $cls = EcosystemrefPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EcosystemrefPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EcosystemrefPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EcosystemrefPeer::addInstanceToPool($obj, $key);
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
     * @return array (Ecosystemref object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EcosystemrefPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EcosystemrefPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EcosystemrefPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EcosystemrefPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EcosystemrefPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(EcosystemrefPeer::DATABASE_NAME)->getTable(EcosystemrefPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEcosystemrefPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEcosystemrefPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \EcosystemrefTableMap());
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
        return EcosystemrefPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Ecosystemref or Criteria object.
     *
     * @param      mixed $values Criteria or Ecosystemref object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EcosystemrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Ecosystemref object
        }


        // Set the correct dbName
        $criteria->setDbName(EcosystemrefPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Ecosystemref or Criteria object.
     *
     * @param      mixed $values Criteria or Ecosystemref object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EcosystemrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EcosystemrefPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EcosystemrefPeer::ECOSYSTEMNAME);
            $value = $criteria->remove(EcosystemrefPeer::ECOSYSTEMNAME);
            if ($value) {
                $selectCriteria->add(EcosystemrefPeer::ECOSYSTEMNAME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EcosystemrefPeer::TABLE_NAME);
            }

        } else { // $values is Ecosystemref object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EcosystemrefPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ecosystemref table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EcosystemrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(EcosystemrefPeer::TABLE_NAME, $con, EcosystemrefPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EcosystemrefPeer::clearInstancePool();
            EcosystemrefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Ecosystemref or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Ecosystemref object or primary key or array of primary keys
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
            $con = Propel::getConnection(EcosystemrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            EcosystemrefPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Ecosystemref) { // it's a model object
            // invalidate the cache for this single object
            EcosystemrefPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EcosystemrefPeer::DATABASE_NAME);
            $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                EcosystemrefPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(EcosystemrefPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            EcosystemrefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Ecosystemref object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Ecosystemref $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EcosystemrefPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EcosystemrefPeer::TABLE_NAME);

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

        return BasePeer::doValidate(EcosystemrefPeer::DATABASE_NAME, EcosystemrefPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Ecosystemref
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = EcosystemrefPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EcosystemrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(EcosystemrefPeer::DATABASE_NAME);
        $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME, $pk);

        $v = EcosystemrefPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Ecosystemref[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EcosystemrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(EcosystemrefPeer::DATABASE_NAME);
            $criteria->add(EcosystemrefPeer::ECOSYSTEMNAME, $pks, Criteria::IN);
            $objs = EcosystemrefPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseEcosystemrefPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEcosystemrefPeer::buildTableMap();

