<?php


/**
 * Base static class for performing query and update operations on the 'occurrence' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseOccurrencePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'occurrence';

    /** the related Propel class for this table */
    const OM_CLASS = 'Occurrence';

    /** the related TableMap class for this table */
    const TM_CLASS = 'OccurrenceTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 106;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 106;

    /** the column name for the catnum2 field */
    const CATNUM2 = 'occurrence.catnum2';

    /** the column name for the OccurrenceRefNo field */
    const OCCURRENCEREFNO = 'occurrence.OccurrenceRefNo';

    /** the column name for the SpecCode field */
    const SPECCODE = 'occurrence.SpecCode';

    /** the column name for the Syncode field */
    const SYNCODE = 'occurrence.Syncode';

    /** the column name for the Stockcode field */
    const STOCKCODE = 'occurrence.Stockcode';

    /** the column name for the GenusCol field */
    const GENUSCOL = 'occurrence.GenusCol';

    /** the column name for the SpeciesCol field */
    const SPECIESCOL = 'occurrence.SpeciesCol';

    /** the column name for the ColName field */
    const COLNAME = 'occurrence.ColName';

    /** the column name for the PicName field */
    const PICNAME = 'occurrence.PicName';

    /** the column name for the CatNum field */
    const CATNUM = 'occurrence.CatNum';

    /** the column name for the URL field */
    const URL = 'occurrence.URL';

    /** the column name for the Station field */
    const STATION = 'occurrence.Station';

    /** the column name for the Cruise field */
    const CRUISE = 'occurrence.Cruise';

    /** the column name for the Gazetteer field */
    const GAZETTEER = 'occurrence.Gazetteer';

    /** the column name for the LocalityType field */
    const LOCALITYTYPE = 'occurrence.LocalityType';

    /** the column name for the WaterDepthMin field */
    const WATERDEPTHMIN = 'occurrence.WaterDepthMin';

    /** the column name for the WaterDepthMax field */
    const WATERDEPTHMAX = 'occurrence.WaterDepthMax';

    /** the column name for the AltitudeMin field */
    const ALTITUDEMIN = 'occurrence.AltitudeMin';

    /** the column name for the AltitudeMax field */
    const ALTITUDEMAX = 'occurrence.AltitudeMax';

    /** the column name for the LatitudeDeg field */
    const LATITUDEDEG = 'occurrence.LatitudeDeg';

    /** the column name for the LatitudeMin field */
    const LATITUDEMIN = 'occurrence.LatitudeMin';

    /** the column name for the NorthSouth field */
    const NORTHSOUTH = 'occurrence.NorthSouth';

    /** the column name for the LatitudeDec field */
    const LATITUDEDEC = 'occurrence.LatitudeDec';

    /** the column name for the LongitudeDeg field */
    const LONGITUDEDEG = 'occurrence.LongitudeDeg';

    /** the column name for the LongitudeMIn field */
    const LONGITUDEMIN = 'occurrence.LongitudeMIn';

    /** the column name for the EastWest field */
    const EASTWEST = 'occurrence.EastWest';

    /** the column name for the LongitudeDec field */
    const LONGITUDEDEC = 'occurrence.LongitudeDec';

    /** the column name for the Accuracy field */
    const ACCURACY = 'occurrence.Accuracy';

    /** the column name for the Salinity field */
    const SALINITY = 'occurrence.Salinity';

    /** the column name for the LatitudeTo field */
    const LATITUDETO = 'occurrence.LatitudeTo';

    /** the column name for the LongitudeTo field */
    const LONGITUDETO = 'occurrence.LongitudeTo';

    /** the column name for the LatitudeDegTo field */
    const LATITUDEDEGTO = 'occurrence.LatitudeDegTo';

    /** the column name for the LatitudeMinTo field */
    const LATITUDEMINTO = 'occurrence.LatitudeMinTo';

    /** the column name for the NorthSouthTo field */
    const NORTHSOUTHTO = 'occurrence.NorthSouthTo';

    /** the column name for the LongitudeDegTo field */
    const LONGITUDEDEGTO = 'occurrence.LongitudeDegTo';

    /** the column name for the LongitudeMInTo field */
    const LONGITUDEMINTO = 'occurrence.LongitudeMInTo';

    /** the column name for the EastWestTo field */
    const EASTWESTTO = 'occurrence.EastWestTo';

    /** the column name for the Temp field */
    const TEMP = 'occurrence.Temp';

    /** the column name for the AreaCode field */
    const AREACODE = 'occurrence.AreaCode';

    /** the column name for the SeaDrainage field */
    const SEADRAINAGE = 'occurrence.SeaDrainage';

    /** the column name for the C_Code field */
    const C_CODE = 'occurrence.C_Code';

    /** the column name for the Province field */
    const PROVINCE = 'occurrence.Province';

    /** the column name for the Date field */
    const DATE = 'occurrence.Date';

    /** the column name for the DateTo field */
    const DATETO = 'occurrence.DateTo';

    /** the column name for the Year field */
    const YEAR = 'occurrence.Year';

    /** the column name for the DateType field */
    const DATETYPE = 'occurrence.DateType';

    /** the column name for the DayTimeStart field */
    const DAYTIMESTART = 'occurrence.DayTimeStart';

    /** the column name for the DayTimeStop field */
    const DAYTIMESTOP = 'occurrence.DayTimeStop';

    /** the column name for the Length field */
    const LENGTH = 'occurrence.Length';

    /** the column name for the LengthType field */
    const LENGTHTYPE = 'occurrence.LengthType';

    /** the column name for the Length2 field */
    const LENGTH2 = 'occurrence.Length2';

    /** the column name for the LengthType2 field */
    const LENGTHTYPE2 = 'occurrence.LengthType2';

    /** the column name for the Lengthmin field */
    const LENGTHMIN = 'occurrence.Lengthmin';

    /** the column name for the Lengthmax field */
    const LENGTHMAX = 'occurrence.Lengthmax';

    /** the column name for the Weight field */
    const WEIGHT = 'occurrence.Weight';

    /** the column name for the Number field */
    const NUMBER = 'occurrence.Number';

    /** the column name for the PercentCatch field */
    const PERCENTCATCH = 'occurrence.PercentCatch';

    /** the column name for the Abundance field */
    const ABUNDANCE = 'occurrence.Abundance';

    /** the column name for the LiveStage field */
    const LIVESTAGE = 'occurrence.LiveStage';

    /** the column name for the Sex field */
    const SEX = 'occurrence.Sex';

    /** the column name for the Bottom field */
    const BOTTOM = 'occurrence.Bottom';

    /** the column name for the Gear field */
    const GEAR = 'occurrence.Gear';

    /** the column name for the Remark_FB field */
    const REMARK_FB = 'occurrence.Remark_FB';

    /** the column name for the Remark field */
    const REMARK = 'occurrence.Remark';

    /** the column name for the Vessel field */
    const VESSEL = 'occurrence.Vessel';

    /** the column name for the Expedition field */
    const EXPEDITION = 'occurrence.Expedition';

    /** the column name for the Collector field */
    const COLLECTOR = 'occurrence.Collector';

    /** the column name for the Identifier field */
    const IDENTIFIER = 'occurrence.Identifier';

    /** the column name for the IdentifierStandard field */
    const IDENTIFIERSTANDARD = 'occurrence.IdentifierStandard';

    /** the column name for the IdentifierYR field */
    const IDENTIFIERYR = 'occurrence.IdentifierYR';

    /** the column name for the QName field */
    const QNAME = 'occurrence.QName';

    /** the column name for the QIdentifier field */
    const QIDENTIFIER = 'occurrence.QIdentifier';

    /** the column name for the QArea field */
    const QAREA = 'occurrence.QArea';

    /** the column name for the QCountry field */
    const QCOUNTRY = 'occurrence.QCountry';

    /** the column name for the QCoordinates field */
    const QCOORDINATES = 'occurrence.QCoordinates';

    /** the column name for the Type field */
    const TYPE = 'occurrence.Type';

    /** the column name for the MS field */
    const MS = 'occurrence.MS';

    /** the column name for the Storage field */
    const STORAGE = 'occurrence.Storage';

    /** the column name for the RecordType field */
    const RECORDTYPE = 'occurrence.RecordType';

    /** the column name for the BasisOfRecord field */
    const BASISOFRECORD = 'occurrence.BasisOfRecord';

    /** the column name for the CheckedCol field */
    const CHECKEDCOL = 'occurrence.CheckedCol';

    /** the column name for the Validity field */
    const VALIDITY = 'occurrence.Validity';

    /** the column name for the DateRecapture field */
    const DATERECAPTURE = 'occurrence.DateRecapture';

    /** the column name for the LatDegRel field */
    const LATDEGREL = 'occurrence.LatDegRel';

    /** the column name for the LatMinRel field */
    const LATMINREL = 'occurrence.LatMinRel';

    /** the column name for the NorthSouthRel field */
    const NORTHSOUTHREL = 'occurrence.NorthSouthRel';

    /** the column name for the LongDegRel field */
    const LONGDEGREL = 'occurrence.LongDegRel';

    /** the column name for the LongMinRel field */
    const LONGMINREL = 'occurrence.LongMinRel';

    /** the column name for the EastWestRel field */
    const EASTWESTREL = 'occurrence.EastWestRel';

    /** the column name for the LengthRel field */
    const LENGTHREL = 'occurrence.LengthRel';

    /** the column name for the LengthTypeRel field */
    const LENGTHTYPEREL = 'occurrence.LengthTypeRel';

    /** the column name for the WeightRel field */
    const WEIGHTREL = 'occurrence.WeightRel';

    /** the column name for the Entered field */
    const ENTERED = 'occurrence.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'occurrence.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'occurrence.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'occurrence.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'occurrence.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'occurrence.DateChecked';

    /** the column name for the Locality1 field */
    const LOCALITY1 = 'occurrence.Locality1';

    /** the column name for the TwoDegree30W field */
    const TWODEGREE30W = 'occurrence.TwoDegree30W';

    /** the column name for the OneDegree30W field */
    const ONEDEGREE30W = 'occurrence.OneDegree30W';

    /** the column name for the TenDegree30W field */
    const TENDEGREE30W = 'occurrence.TenDegree30W';

    /** the column name for the CSquarecode field */
    const CSQUARECODE = 'occurrence.CSquarecode';

    /** the column name for the PublishedDistance field */
    const PUBLISHEDDISTANCE = 'occurrence.PublishedDistance';

    /** the column name for the Info field */
    const INFO = 'occurrence.Info';

    /** the column name for the TS field */
    const TS = 'occurrence.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Occurrence objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Occurrence[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. OccurrencePeer::$fieldNames[OccurrencePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Catnum2', 'Occurrencerefno', 'Speccode', 'Syncode', 'Stockcode', 'Genuscol', 'Speciescol', 'Colname', 'Picname', 'Catnum', 'Url', 'Station', 'Cruise', 'Gazetteer', 'Localitytype', 'Waterdepthmin', 'Waterdepthmax', 'Altitudemin', 'Altitudemax', 'Latitudedeg', 'Latitudemin', 'Northsouth', 'Latitudedec', 'Longitudedeg', 'Longitudemin', 'Eastwest', 'Longitudedec', 'Accuracy', 'Salinity', 'Latitudeto', 'Longitudeto', 'Latitudedegto', 'Latitudeminto', 'Northsouthto', 'Longitudedegto', 'Longitudeminto', 'Eastwestto', 'Temp', 'Areacode', 'Seadrainage', 'CCode', 'Province', 'Date', 'Dateto', 'Year', 'Datetype', 'Daytimestart', 'Daytimestop', 'Length', 'Lengthtype', 'Length2', 'Lengthtype2', 'Lengthmin', 'Lengthmax', 'Weight', 'Number', 'Percentcatch', 'Abundance', 'Livestage', 'Sex', 'Bottom', 'Gear', 'RemarkFb', 'Remark', 'Vessel', 'Expedition', 'Collector', 'Identifier', 'Identifierstandard', 'Identifieryr', 'Qname', 'Qidentifier', 'Qarea', 'Qcountry', 'Qcoordinates', 'Type', 'Ms', 'Storage', 'Recordtype', 'Basisofrecord', 'Checkedcol', 'Validity', 'Daterecapture', 'Latdegrel', 'Latminrel', 'Northsouthrel', 'Longdegrel', 'Longminrel', 'Eastwestrel', 'Lengthrel', 'Lengthtyperel', 'Weightrel', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Locality1', 'Twodegree30w', 'Onedegree30w', 'Tendegree30w', 'Csquarecode', 'Publisheddistance', 'Info', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('catnum2', 'occurrencerefno', 'speccode', 'syncode', 'stockcode', 'genuscol', 'speciescol', 'colname', 'picname', 'catnum', 'url', 'station', 'cruise', 'gazetteer', 'localitytype', 'waterdepthmin', 'waterdepthmax', 'altitudemin', 'altitudemax', 'latitudedeg', 'latitudemin', 'northsouth', 'latitudedec', 'longitudedeg', 'longitudemin', 'eastwest', 'longitudedec', 'accuracy', 'salinity', 'latitudeto', 'longitudeto', 'latitudedegto', 'latitudeminto', 'northsouthto', 'longitudedegto', 'longitudeminto', 'eastwestto', 'temp', 'areacode', 'seadrainage', 'cCode', 'province', 'date', 'dateto', 'year', 'datetype', 'daytimestart', 'daytimestop', 'length', 'lengthtype', 'length2', 'lengthtype2', 'lengthmin', 'lengthmax', 'weight', 'number', 'percentcatch', 'abundance', 'livestage', 'sex', 'bottom', 'gear', 'remarkFb', 'remark', 'vessel', 'expedition', 'collector', 'identifier', 'identifierstandard', 'identifieryr', 'qname', 'qidentifier', 'qarea', 'qcountry', 'qcoordinates', 'type', 'ms', 'storage', 'recordtype', 'basisofrecord', 'checkedcol', 'validity', 'daterecapture', 'latdegrel', 'latminrel', 'northsouthrel', 'longdegrel', 'longminrel', 'eastwestrel', 'lengthrel', 'lengthtyperel', 'weightrel', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'locality1', 'twodegree30w', 'onedegree30w', 'tendegree30w', 'csquarecode', 'publisheddistance', 'info', 'ts', ),
        BasePeer::TYPE_COLNAME => array (OccurrencePeer::CATNUM2, OccurrencePeer::OCCURRENCEREFNO, OccurrencePeer::SPECCODE, OccurrencePeer::SYNCODE, OccurrencePeer::STOCKCODE, OccurrencePeer::GENUSCOL, OccurrencePeer::SPECIESCOL, OccurrencePeer::COLNAME, OccurrencePeer::PICNAME, OccurrencePeer::CATNUM, OccurrencePeer::URL, OccurrencePeer::STATION, OccurrencePeer::CRUISE, OccurrencePeer::GAZETTEER, OccurrencePeer::LOCALITYTYPE, OccurrencePeer::WATERDEPTHMIN, OccurrencePeer::WATERDEPTHMAX, OccurrencePeer::ALTITUDEMIN, OccurrencePeer::ALTITUDEMAX, OccurrencePeer::LATITUDEDEG, OccurrencePeer::LATITUDEMIN, OccurrencePeer::NORTHSOUTH, OccurrencePeer::LATITUDEDEC, OccurrencePeer::LONGITUDEDEG, OccurrencePeer::LONGITUDEMIN, OccurrencePeer::EASTWEST, OccurrencePeer::LONGITUDEDEC, OccurrencePeer::ACCURACY, OccurrencePeer::SALINITY, OccurrencePeer::LATITUDETO, OccurrencePeer::LONGITUDETO, OccurrencePeer::LATITUDEDEGTO, OccurrencePeer::LATITUDEMINTO, OccurrencePeer::NORTHSOUTHTO, OccurrencePeer::LONGITUDEDEGTO, OccurrencePeer::LONGITUDEMINTO, OccurrencePeer::EASTWESTTO, OccurrencePeer::TEMP, OccurrencePeer::AREACODE, OccurrencePeer::SEADRAINAGE, OccurrencePeer::C_CODE, OccurrencePeer::PROVINCE, OccurrencePeer::DATE, OccurrencePeer::DATETO, OccurrencePeer::YEAR, OccurrencePeer::DATETYPE, OccurrencePeer::DAYTIMESTART, OccurrencePeer::DAYTIMESTOP, OccurrencePeer::LENGTH, OccurrencePeer::LENGTHTYPE, OccurrencePeer::LENGTH2, OccurrencePeer::LENGTHTYPE2, OccurrencePeer::LENGTHMIN, OccurrencePeer::LENGTHMAX, OccurrencePeer::WEIGHT, OccurrencePeer::NUMBER, OccurrencePeer::PERCENTCATCH, OccurrencePeer::ABUNDANCE, OccurrencePeer::LIVESTAGE, OccurrencePeer::SEX, OccurrencePeer::BOTTOM, OccurrencePeer::GEAR, OccurrencePeer::REMARK_FB, OccurrencePeer::REMARK, OccurrencePeer::VESSEL, OccurrencePeer::EXPEDITION, OccurrencePeer::COLLECTOR, OccurrencePeer::IDENTIFIER, OccurrencePeer::IDENTIFIERSTANDARD, OccurrencePeer::IDENTIFIERYR, OccurrencePeer::QNAME, OccurrencePeer::QIDENTIFIER, OccurrencePeer::QAREA, OccurrencePeer::QCOUNTRY, OccurrencePeer::QCOORDINATES, OccurrencePeer::TYPE, OccurrencePeer::MS, OccurrencePeer::STORAGE, OccurrencePeer::RECORDTYPE, OccurrencePeer::BASISOFRECORD, OccurrencePeer::CHECKEDCOL, OccurrencePeer::VALIDITY, OccurrencePeer::DATERECAPTURE, OccurrencePeer::LATDEGREL, OccurrencePeer::LATMINREL, OccurrencePeer::NORTHSOUTHREL, OccurrencePeer::LONGDEGREL, OccurrencePeer::LONGMINREL, OccurrencePeer::EASTWESTREL, OccurrencePeer::LENGTHREL, OccurrencePeer::LENGTHTYPEREL, OccurrencePeer::WEIGHTREL, OccurrencePeer::ENTERED, OccurrencePeer::DATEENTERED, OccurrencePeer::MODIFIED, OccurrencePeer::DATEMODIFIED, OccurrencePeer::EXPERT, OccurrencePeer::DATECHECKED, OccurrencePeer::LOCALITY1, OccurrencePeer::TWODEGREE30W, OccurrencePeer::ONEDEGREE30W, OccurrencePeer::TENDEGREE30W, OccurrencePeer::CSQUARECODE, OccurrencePeer::PUBLISHEDDISTANCE, OccurrencePeer::INFO, OccurrencePeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CATNUM2', 'OCCURRENCEREFNO', 'SPECCODE', 'SYNCODE', 'STOCKCODE', 'GENUSCOL', 'SPECIESCOL', 'COLNAME', 'PICNAME', 'CATNUM', 'URL', 'STATION', 'CRUISE', 'GAZETTEER', 'LOCALITYTYPE', 'WATERDEPTHMIN', 'WATERDEPTHMAX', 'ALTITUDEMIN', 'ALTITUDEMAX', 'LATITUDEDEG', 'LATITUDEMIN', 'NORTHSOUTH', 'LATITUDEDEC', 'LONGITUDEDEG', 'LONGITUDEMIN', 'EASTWEST', 'LONGITUDEDEC', 'ACCURACY', 'SALINITY', 'LATITUDETO', 'LONGITUDETO', 'LATITUDEDEGTO', 'LATITUDEMINTO', 'NORTHSOUTHTO', 'LONGITUDEDEGTO', 'LONGITUDEMINTO', 'EASTWESTTO', 'TEMP', 'AREACODE', 'SEADRAINAGE', 'C_CODE', 'PROVINCE', 'DATE', 'DATETO', 'YEAR', 'DATETYPE', 'DAYTIMESTART', 'DAYTIMESTOP', 'LENGTH', 'LENGTHTYPE', 'LENGTH2', 'LENGTHTYPE2', 'LENGTHMIN', 'LENGTHMAX', 'WEIGHT', 'NUMBER', 'PERCENTCATCH', 'ABUNDANCE', 'LIVESTAGE', 'SEX', 'BOTTOM', 'GEAR', 'REMARK_FB', 'REMARK', 'VESSEL', 'EXPEDITION', 'COLLECTOR', 'IDENTIFIER', 'IDENTIFIERSTANDARD', 'IDENTIFIERYR', 'QNAME', 'QIDENTIFIER', 'QAREA', 'QCOUNTRY', 'QCOORDINATES', 'TYPE', 'MS', 'STORAGE', 'RECORDTYPE', 'BASISOFRECORD', 'CHECKEDCOL', 'VALIDITY', 'DATERECAPTURE', 'LATDEGREL', 'LATMINREL', 'NORTHSOUTHREL', 'LONGDEGREL', 'LONGMINREL', 'EASTWESTREL', 'LENGTHREL', 'LENGTHTYPEREL', 'WEIGHTREL', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'LOCALITY1', 'TWODEGREE30W', 'ONEDEGREE30W', 'TENDEGREE30W', 'CSQUARECODE', 'PUBLISHEDDISTANCE', 'INFO', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('catnum2', 'OccurrenceRefNo', 'SpecCode', 'Syncode', 'Stockcode', 'GenusCol', 'SpeciesCol', 'ColName', 'PicName', 'CatNum', 'URL', 'Station', 'Cruise', 'Gazetteer', 'LocalityType', 'WaterDepthMin', 'WaterDepthMax', 'AltitudeMin', 'AltitudeMax', 'LatitudeDeg', 'LatitudeMin', 'NorthSouth', 'LatitudeDec', 'LongitudeDeg', 'LongitudeMIn', 'EastWest', 'LongitudeDec', 'Accuracy', 'Salinity', 'LatitudeTo', 'LongitudeTo', 'LatitudeDegTo', 'LatitudeMinTo', 'NorthSouthTo', 'LongitudeDegTo', 'LongitudeMInTo', 'EastWestTo', 'Temp', 'AreaCode', 'SeaDrainage', 'C_Code', 'Province', 'Date', 'DateTo', 'Year', 'DateType', 'DayTimeStart', 'DayTimeStop', 'Length', 'LengthType', 'Length2', 'LengthType2', 'Lengthmin', 'Lengthmax', 'Weight', 'Number', 'PercentCatch', 'Abundance', 'LiveStage', 'Sex', 'Bottom', 'Gear', 'Remark_FB', 'Remark', 'Vessel', 'Expedition', 'Collector', 'Identifier', 'IdentifierStandard', 'IdentifierYR', 'QName', 'QIdentifier', 'QArea', 'QCountry', 'QCoordinates', 'Type', 'MS', 'Storage', 'RecordType', 'BasisOfRecord', 'CheckedCol', 'Validity', 'DateRecapture', 'LatDegRel', 'LatMinRel', 'NorthSouthRel', 'LongDegRel', 'LongMinRel', 'EastWestRel', 'LengthRel', 'LengthTypeRel', 'WeightRel', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Locality1', 'TwoDegree30W', 'OneDegree30W', 'TenDegree30W', 'CSquarecode', 'PublishedDistance', 'Info', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. OccurrencePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Catnum2' => 0, 'Occurrencerefno' => 1, 'Speccode' => 2, 'Syncode' => 3, 'Stockcode' => 4, 'Genuscol' => 5, 'Speciescol' => 6, 'Colname' => 7, 'Picname' => 8, 'Catnum' => 9, 'Url' => 10, 'Station' => 11, 'Cruise' => 12, 'Gazetteer' => 13, 'Localitytype' => 14, 'Waterdepthmin' => 15, 'Waterdepthmax' => 16, 'Altitudemin' => 17, 'Altitudemax' => 18, 'Latitudedeg' => 19, 'Latitudemin' => 20, 'Northsouth' => 21, 'Latitudedec' => 22, 'Longitudedeg' => 23, 'Longitudemin' => 24, 'Eastwest' => 25, 'Longitudedec' => 26, 'Accuracy' => 27, 'Salinity' => 28, 'Latitudeto' => 29, 'Longitudeto' => 30, 'Latitudedegto' => 31, 'Latitudeminto' => 32, 'Northsouthto' => 33, 'Longitudedegto' => 34, 'Longitudeminto' => 35, 'Eastwestto' => 36, 'Temp' => 37, 'Areacode' => 38, 'Seadrainage' => 39, 'CCode' => 40, 'Province' => 41, 'Date' => 42, 'Dateto' => 43, 'Year' => 44, 'Datetype' => 45, 'Daytimestart' => 46, 'Daytimestop' => 47, 'Length' => 48, 'Lengthtype' => 49, 'Length2' => 50, 'Lengthtype2' => 51, 'Lengthmin' => 52, 'Lengthmax' => 53, 'Weight' => 54, 'Number' => 55, 'Percentcatch' => 56, 'Abundance' => 57, 'Livestage' => 58, 'Sex' => 59, 'Bottom' => 60, 'Gear' => 61, 'RemarkFb' => 62, 'Remark' => 63, 'Vessel' => 64, 'Expedition' => 65, 'Collector' => 66, 'Identifier' => 67, 'Identifierstandard' => 68, 'Identifieryr' => 69, 'Qname' => 70, 'Qidentifier' => 71, 'Qarea' => 72, 'Qcountry' => 73, 'Qcoordinates' => 74, 'Type' => 75, 'Ms' => 76, 'Storage' => 77, 'Recordtype' => 78, 'Basisofrecord' => 79, 'Checkedcol' => 80, 'Validity' => 81, 'Daterecapture' => 82, 'Latdegrel' => 83, 'Latminrel' => 84, 'Northsouthrel' => 85, 'Longdegrel' => 86, 'Longminrel' => 87, 'Eastwestrel' => 88, 'Lengthrel' => 89, 'Lengthtyperel' => 90, 'Weightrel' => 91, 'Entered' => 92, 'Dateentered' => 93, 'Modified' => 94, 'Datemodified' => 95, 'Expert' => 96, 'Datechecked' => 97, 'Locality1' => 98, 'Twodegree30w' => 99, 'Onedegree30w' => 100, 'Tendegree30w' => 101, 'Csquarecode' => 102, 'Publisheddistance' => 103, 'Info' => 104, 'Ts' => 105, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('catnum2' => 0, 'occurrencerefno' => 1, 'speccode' => 2, 'syncode' => 3, 'stockcode' => 4, 'genuscol' => 5, 'speciescol' => 6, 'colname' => 7, 'picname' => 8, 'catnum' => 9, 'url' => 10, 'station' => 11, 'cruise' => 12, 'gazetteer' => 13, 'localitytype' => 14, 'waterdepthmin' => 15, 'waterdepthmax' => 16, 'altitudemin' => 17, 'altitudemax' => 18, 'latitudedeg' => 19, 'latitudemin' => 20, 'northsouth' => 21, 'latitudedec' => 22, 'longitudedeg' => 23, 'longitudemin' => 24, 'eastwest' => 25, 'longitudedec' => 26, 'accuracy' => 27, 'salinity' => 28, 'latitudeto' => 29, 'longitudeto' => 30, 'latitudedegto' => 31, 'latitudeminto' => 32, 'northsouthto' => 33, 'longitudedegto' => 34, 'longitudeminto' => 35, 'eastwestto' => 36, 'temp' => 37, 'areacode' => 38, 'seadrainage' => 39, 'cCode' => 40, 'province' => 41, 'date' => 42, 'dateto' => 43, 'year' => 44, 'datetype' => 45, 'daytimestart' => 46, 'daytimestop' => 47, 'length' => 48, 'lengthtype' => 49, 'length2' => 50, 'lengthtype2' => 51, 'lengthmin' => 52, 'lengthmax' => 53, 'weight' => 54, 'number' => 55, 'percentcatch' => 56, 'abundance' => 57, 'livestage' => 58, 'sex' => 59, 'bottom' => 60, 'gear' => 61, 'remarkFb' => 62, 'remark' => 63, 'vessel' => 64, 'expedition' => 65, 'collector' => 66, 'identifier' => 67, 'identifierstandard' => 68, 'identifieryr' => 69, 'qname' => 70, 'qidentifier' => 71, 'qarea' => 72, 'qcountry' => 73, 'qcoordinates' => 74, 'type' => 75, 'ms' => 76, 'storage' => 77, 'recordtype' => 78, 'basisofrecord' => 79, 'checkedcol' => 80, 'validity' => 81, 'daterecapture' => 82, 'latdegrel' => 83, 'latminrel' => 84, 'northsouthrel' => 85, 'longdegrel' => 86, 'longminrel' => 87, 'eastwestrel' => 88, 'lengthrel' => 89, 'lengthtyperel' => 90, 'weightrel' => 91, 'entered' => 92, 'dateentered' => 93, 'modified' => 94, 'datemodified' => 95, 'expert' => 96, 'datechecked' => 97, 'locality1' => 98, 'twodegree30w' => 99, 'onedegree30w' => 100, 'tendegree30w' => 101, 'csquarecode' => 102, 'publisheddistance' => 103, 'info' => 104, 'ts' => 105, ),
        BasePeer::TYPE_COLNAME => array (OccurrencePeer::CATNUM2 => 0, OccurrencePeer::OCCURRENCEREFNO => 1, OccurrencePeer::SPECCODE => 2, OccurrencePeer::SYNCODE => 3, OccurrencePeer::STOCKCODE => 4, OccurrencePeer::GENUSCOL => 5, OccurrencePeer::SPECIESCOL => 6, OccurrencePeer::COLNAME => 7, OccurrencePeer::PICNAME => 8, OccurrencePeer::CATNUM => 9, OccurrencePeer::URL => 10, OccurrencePeer::STATION => 11, OccurrencePeer::CRUISE => 12, OccurrencePeer::GAZETTEER => 13, OccurrencePeer::LOCALITYTYPE => 14, OccurrencePeer::WATERDEPTHMIN => 15, OccurrencePeer::WATERDEPTHMAX => 16, OccurrencePeer::ALTITUDEMIN => 17, OccurrencePeer::ALTITUDEMAX => 18, OccurrencePeer::LATITUDEDEG => 19, OccurrencePeer::LATITUDEMIN => 20, OccurrencePeer::NORTHSOUTH => 21, OccurrencePeer::LATITUDEDEC => 22, OccurrencePeer::LONGITUDEDEG => 23, OccurrencePeer::LONGITUDEMIN => 24, OccurrencePeer::EASTWEST => 25, OccurrencePeer::LONGITUDEDEC => 26, OccurrencePeer::ACCURACY => 27, OccurrencePeer::SALINITY => 28, OccurrencePeer::LATITUDETO => 29, OccurrencePeer::LONGITUDETO => 30, OccurrencePeer::LATITUDEDEGTO => 31, OccurrencePeer::LATITUDEMINTO => 32, OccurrencePeer::NORTHSOUTHTO => 33, OccurrencePeer::LONGITUDEDEGTO => 34, OccurrencePeer::LONGITUDEMINTO => 35, OccurrencePeer::EASTWESTTO => 36, OccurrencePeer::TEMP => 37, OccurrencePeer::AREACODE => 38, OccurrencePeer::SEADRAINAGE => 39, OccurrencePeer::C_CODE => 40, OccurrencePeer::PROVINCE => 41, OccurrencePeer::DATE => 42, OccurrencePeer::DATETO => 43, OccurrencePeer::YEAR => 44, OccurrencePeer::DATETYPE => 45, OccurrencePeer::DAYTIMESTART => 46, OccurrencePeer::DAYTIMESTOP => 47, OccurrencePeer::LENGTH => 48, OccurrencePeer::LENGTHTYPE => 49, OccurrencePeer::LENGTH2 => 50, OccurrencePeer::LENGTHTYPE2 => 51, OccurrencePeer::LENGTHMIN => 52, OccurrencePeer::LENGTHMAX => 53, OccurrencePeer::WEIGHT => 54, OccurrencePeer::NUMBER => 55, OccurrencePeer::PERCENTCATCH => 56, OccurrencePeer::ABUNDANCE => 57, OccurrencePeer::LIVESTAGE => 58, OccurrencePeer::SEX => 59, OccurrencePeer::BOTTOM => 60, OccurrencePeer::GEAR => 61, OccurrencePeer::REMARK_FB => 62, OccurrencePeer::REMARK => 63, OccurrencePeer::VESSEL => 64, OccurrencePeer::EXPEDITION => 65, OccurrencePeer::COLLECTOR => 66, OccurrencePeer::IDENTIFIER => 67, OccurrencePeer::IDENTIFIERSTANDARD => 68, OccurrencePeer::IDENTIFIERYR => 69, OccurrencePeer::QNAME => 70, OccurrencePeer::QIDENTIFIER => 71, OccurrencePeer::QAREA => 72, OccurrencePeer::QCOUNTRY => 73, OccurrencePeer::QCOORDINATES => 74, OccurrencePeer::TYPE => 75, OccurrencePeer::MS => 76, OccurrencePeer::STORAGE => 77, OccurrencePeer::RECORDTYPE => 78, OccurrencePeer::BASISOFRECORD => 79, OccurrencePeer::CHECKEDCOL => 80, OccurrencePeer::VALIDITY => 81, OccurrencePeer::DATERECAPTURE => 82, OccurrencePeer::LATDEGREL => 83, OccurrencePeer::LATMINREL => 84, OccurrencePeer::NORTHSOUTHREL => 85, OccurrencePeer::LONGDEGREL => 86, OccurrencePeer::LONGMINREL => 87, OccurrencePeer::EASTWESTREL => 88, OccurrencePeer::LENGTHREL => 89, OccurrencePeer::LENGTHTYPEREL => 90, OccurrencePeer::WEIGHTREL => 91, OccurrencePeer::ENTERED => 92, OccurrencePeer::DATEENTERED => 93, OccurrencePeer::MODIFIED => 94, OccurrencePeer::DATEMODIFIED => 95, OccurrencePeer::EXPERT => 96, OccurrencePeer::DATECHECKED => 97, OccurrencePeer::LOCALITY1 => 98, OccurrencePeer::TWODEGREE30W => 99, OccurrencePeer::ONEDEGREE30W => 100, OccurrencePeer::TENDEGREE30W => 101, OccurrencePeer::CSQUARECODE => 102, OccurrencePeer::PUBLISHEDDISTANCE => 103, OccurrencePeer::INFO => 104, OccurrencePeer::TS => 105, ),
        BasePeer::TYPE_RAW_COLNAME => array ('CATNUM2' => 0, 'OCCURRENCEREFNO' => 1, 'SPECCODE' => 2, 'SYNCODE' => 3, 'STOCKCODE' => 4, 'GENUSCOL' => 5, 'SPECIESCOL' => 6, 'COLNAME' => 7, 'PICNAME' => 8, 'CATNUM' => 9, 'URL' => 10, 'STATION' => 11, 'CRUISE' => 12, 'GAZETTEER' => 13, 'LOCALITYTYPE' => 14, 'WATERDEPTHMIN' => 15, 'WATERDEPTHMAX' => 16, 'ALTITUDEMIN' => 17, 'ALTITUDEMAX' => 18, 'LATITUDEDEG' => 19, 'LATITUDEMIN' => 20, 'NORTHSOUTH' => 21, 'LATITUDEDEC' => 22, 'LONGITUDEDEG' => 23, 'LONGITUDEMIN' => 24, 'EASTWEST' => 25, 'LONGITUDEDEC' => 26, 'ACCURACY' => 27, 'SALINITY' => 28, 'LATITUDETO' => 29, 'LONGITUDETO' => 30, 'LATITUDEDEGTO' => 31, 'LATITUDEMINTO' => 32, 'NORTHSOUTHTO' => 33, 'LONGITUDEDEGTO' => 34, 'LONGITUDEMINTO' => 35, 'EASTWESTTO' => 36, 'TEMP' => 37, 'AREACODE' => 38, 'SEADRAINAGE' => 39, 'C_CODE' => 40, 'PROVINCE' => 41, 'DATE' => 42, 'DATETO' => 43, 'YEAR' => 44, 'DATETYPE' => 45, 'DAYTIMESTART' => 46, 'DAYTIMESTOP' => 47, 'LENGTH' => 48, 'LENGTHTYPE' => 49, 'LENGTH2' => 50, 'LENGTHTYPE2' => 51, 'LENGTHMIN' => 52, 'LENGTHMAX' => 53, 'WEIGHT' => 54, 'NUMBER' => 55, 'PERCENTCATCH' => 56, 'ABUNDANCE' => 57, 'LIVESTAGE' => 58, 'SEX' => 59, 'BOTTOM' => 60, 'GEAR' => 61, 'REMARK_FB' => 62, 'REMARK' => 63, 'VESSEL' => 64, 'EXPEDITION' => 65, 'COLLECTOR' => 66, 'IDENTIFIER' => 67, 'IDENTIFIERSTANDARD' => 68, 'IDENTIFIERYR' => 69, 'QNAME' => 70, 'QIDENTIFIER' => 71, 'QAREA' => 72, 'QCOUNTRY' => 73, 'QCOORDINATES' => 74, 'TYPE' => 75, 'MS' => 76, 'STORAGE' => 77, 'RECORDTYPE' => 78, 'BASISOFRECORD' => 79, 'CHECKEDCOL' => 80, 'VALIDITY' => 81, 'DATERECAPTURE' => 82, 'LATDEGREL' => 83, 'LATMINREL' => 84, 'NORTHSOUTHREL' => 85, 'LONGDEGREL' => 86, 'LONGMINREL' => 87, 'EASTWESTREL' => 88, 'LENGTHREL' => 89, 'LENGTHTYPEREL' => 90, 'WEIGHTREL' => 91, 'ENTERED' => 92, 'DATEENTERED' => 93, 'MODIFIED' => 94, 'DATEMODIFIED' => 95, 'EXPERT' => 96, 'DATECHECKED' => 97, 'LOCALITY1' => 98, 'TWODEGREE30W' => 99, 'ONEDEGREE30W' => 100, 'TENDEGREE30W' => 101, 'CSQUARECODE' => 102, 'PUBLISHEDDISTANCE' => 103, 'INFO' => 104, 'TS' => 105, ),
        BasePeer::TYPE_FIELDNAME => array ('catnum2' => 0, 'OccurrenceRefNo' => 1, 'SpecCode' => 2, 'Syncode' => 3, 'Stockcode' => 4, 'GenusCol' => 5, 'SpeciesCol' => 6, 'ColName' => 7, 'PicName' => 8, 'CatNum' => 9, 'URL' => 10, 'Station' => 11, 'Cruise' => 12, 'Gazetteer' => 13, 'LocalityType' => 14, 'WaterDepthMin' => 15, 'WaterDepthMax' => 16, 'AltitudeMin' => 17, 'AltitudeMax' => 18, 'LatitudeDeg' => 19, 'LatitudeMin' => 20, 'NorthSouth' => 21, 'LatitudeDec' => 22, 'LongitudeDeg' => 23, 'LongitudeMIn' => 24, 'EastWest' => 25, 'LongitudeDec' => 26, 'Accuracy' => 27, 'Salinity' => 28, 'LatitudeTo' => 29, 'LongitudeTo' => 30, 'LatitudeDegTo' => 31, 'LatitudeMinTo' => 32, 'NorthSouthTo' => 33, 'LongitudeDegTo' => 34, 'LongitudeMInTo' => 35, 'EastWestTo' => 36, 'Temp' => 37, 'AreaCode' => 38, 'SeaDrainage' => 39, 'C_Code' => 40, 'Province' => 41, 'Date' => 42, 'DateTo' => 43, 'Year' => 44, 'DateType' => 45, 'DayTimeStart' => 46, 'DayTimeStop' => 47, 'Length' => 48, 'LengthType' => 49, 'Length2' => 50, 'LengthType2' => 51, 'Lengthmin' => 52, 'Lengthmax' => 53, 'Weight' => 54, 'Number' => 55, 'PercentCatch' => 56, 'Abundance' => 57, 'LiveStage' => 58, 'Sex' => 59, 'Bottom' => 60, 'Gear' => 61, 'Remark_FB' => 62, 'Remark' => 63, 'Vessel' => 64, 'Expedition' => 65, 'Collector' => 66, 'Identifier' => 67, 'IdentifierStandard' => 68, 'IdentifierYR' => 69, 'QName' => 70, 'QIdentifier' => 71, 'QArea' => 72, 'QCountry' => 73, 'QCoordinates' => 74, 'Type' => 75, 'MS' => 76, 'Storage' => 77, 'RecordType' => 78, 'BasisOfRecord' => 79, 'CheckedCol' => 80, 'Validity' => 81, 'DateRecapture' => 82, 'LatDegRel' => 83, 'LatMinRel' => 84, 'NorthSouthRel' => 85, 'LongDegRel' => 86, 'LongMinRel' => 87, 'EastWestRel' => 88, 'LengthRel' => 89, 'LengthTypeRel' => 90, 'WeightRel' => 91, 'Entered' => 92, 'DateEntered' => 93, 'Modified' => 94, 'DateModified' => 95, 'Expert' => 96, 'DateChecked' => 97, 'Locality1' => 98, 'TwoDegree30W' => 99, 'OneDegree30W' => 100, 'TenDegree30W' => 101, 'CSquarecode' => 102, 'PublishedDistance' => 103, 'Info' => 104, 'TS' => 105, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, )
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
        $toNames = OccurrencePeer::getFieldNames($toType);
        $key = isset(OccurrencePeer::$fieldKeys[$fromType][$name]) ? OccurrencePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(OccurrencePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, OccurrencePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return OccurrencePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. OccurrencePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(OccurrencePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(OccurrencePeer::CATNUM2);
            $criteria->addSelectColumn(OccurrencePeer::OCCURRENCEREFNO);
            $criteria->addSelectColumn(OccurrencePeer::SPECCODE);
            $criteria->addSelectColumn(OccurrencePeer::SYNCODE);
            $criteria->addSelectColumn(OccurrencePeer::STOCKCODE);
            $criteria->addSelectColumn(OccurrencePeer::GENUSCOL);
            $criteria->addSelectColumn(OccurrencePeer::SPECIESCOL);
            $criteria->addSelectColumn(OccurrencePeer::COLNAME);
            $criteria->addSelectColumn(OccurrencePeer::PICNAME);
            $criteria->addSelectColumn(OccurrencePeer::CATNUM);
            $criteria->addSelectColumn(OccurrencePeer::URL);
            $criteria->addSelectColumn(OccurrencePeer::STATION);
            $criteria->addSelectColumn(OccurrencePeer::CRUISE);
            $criteria->addSelectColumn(OccurrencePeer::GAZETTEER);
            $criteria->addSelectColumn(OccurrencePeer::LOCALITYTYPE);
            $criteria->addSelectColumn(OccurrencePeer::WATERDEPTHMIN);
            $criteria->addSelectColumn(OccurrencePeer::WATERDEPTHMAX);
            $criteria->addSelectColumn(OccurrencePeer::ALTITUDEMIN);
            $criteria->addSelectColumn(OccurrencePeer::ALTITUDEMAX);
            $criteria->addSelectColumn(OccurrencePeer::LATITUDEDEG);
            $criteria->addSelectColumn(OccurrencePeer::LATITUDEMIN);
            $criteria->addSelectColumn(OccurrencePeer::NORTHSOUTH);
            $criteria->addSelectColumn(OccurrencePeer::LATITUDEDEC);
            $criteria->addSelectColumn(OccurrencePeer::LONGITUDEDEG);
            $criteria->addSelectColumn(OccurrencePeer::LONGITUDEMIN);
            $criteria->addSelectColumn(OccurrencePeer::EASTWEST);
            $criteria->addSelectColumn(OccurrencePeer::LONGITUDEDEC);
            $criteria->addSelectColumn(OccurrencePeer::ACCURACY);
            $criteria->addSelectColumn(OccurrencePeer::SALINITY);
            $criteria->addSelectColumn(OccurrencePeer::LATITUDETO);
            $criteria->addSelectColumn(OccurrencePeer::LONGITUDETO);
            $criteria->addSelectColumn(OccurrencePeer::LATITUDEDEGTO);
            $criteria->addSelectColumn(OccurrencePeer::LATITUDEMINTO);
            $criteria->addSelectColumn(OccurrencePeer::NORTHSOUTHTO);
            $criteria->addSelectColumn(OccurrencePeer::LONGITUDEDEGTO);
            $criteria->addSelectColumn(OccurrencePeer::LONGITUDEMINTO);
            $criteria->addSelectColumn(OccurrencePeer::EASTWESTTO);
            $criteria->addSelectColumn(OccurrencePeer::TEMP);
            $criteria->addSelectColumn(OccurrencePeer::AREACODE);
            $criteria->addSelectColumn(OccurrencePeer::SEADRAINAGE);
            $criteria->addSelectColumn(OccurrencePeer::C_CODE);
            $criteria->addSelectColumn(OccurrencePeer::PROVINCE);
            $criteria->addSelectColumn(OccurrencePeer::DATE);
            $criteria->addSelectColumn(OccurrencePeer::DATETO);
            $criteria->addSelectColumn(OccurrencePeer::YEAR);
            $criteria->addSelectColumn(OccurrencePeer::DATETYPE);
            $criteria->addSelectColumn(OccurrencePeer::DAYTIMESTART);
            $criteria->addSelectColumn(OccurrencePeer::DAYTIMESTOP);
            $criteria->addSelectColumn(OccurrencePeer::LENGTH);
            $criteria->addSelectColumn(OccurrencePeer::LENGTHTYPE);
            $criteria->addSelectColumn(OccurrencePeer::LENGTH2);
            $criteria->addSelectColumn(OccurrencePeer::LENGTHTYPE2);
            $criteria->addSelectColumn(OccurrencePeer::LENGTHMIN);
            $criteria->addSelectColumn(OccurrencePeer::LENGTHMAX);
            $criteria->addSelectColumn(OccurrencePeer::WEIGHT);
            $criteria->addSelectColumn(OccurrencePeer::NUMBER);
            $criteria->addSelectColumn(OccurrencePeer::PERCENTCATCH);
            $criteria->addSelectColumn(OccurrencePeer::ABUNDANCE);
            $criteria->addSelectColumn(OccurrencePeer::LIVESTAGE);
            $criteria->addSelectColumn(OccurrencePeer::SEX);
            $criteria->addSelectColumn(OccurrencePeer::BOTTOM);
            $criteria->addSelectColumn(OccurrencePeer::GEAR);
            $criteria->addSelectColumn(OccurrencePeer::REMARK_FB);
            $criteria->addSelectColumn(OccurrencePeer::REMARK);
            $criteria->addSelectColumn(OccurrencePeer::VESSEL);
            $criteria->addSelectColumn(OccurrencePeer::EXPEDITION);
            $criteria->addSelectColumn(OccurrencePeer::COLLECTOR);
            $criteria->addSelectColumn(OccurrencePeer::IDENTIFIER);
            $criteria->addSelectColumn(OccurrencePeer::IDENTIFIERSTANDARD);
            $criteria->addSelectColumn(OccurrencePeer::IDENTIFIERYR);
            $criteria->addSelectColumn(OccurrencePeer::QNAME);
            $criteria->addSelectColumn(OccurrencePeer::QIDENTIFIER);
            $criteria->addSelectColumn(OccurrencePeer::QAREA);
            $criteria->addSelectColumn(OccurrencePeer::QCOUNTRY);
            $criteria->addSelectColumn(OccurrencePeer::QCOORDINATES);
            $criteria->addSelectColumn(OccurrencePeer::TYPE);
            $criteria->addSelectColumn(OccurrencePeer::MS);
            $criteria->addSelectColumn(OccurrencePeer::STORAGE);
            $criteria->addSelectColumn(OccurrencePeer::RECORDTYPE);
            $criteria->addSelectColumn(OccurrencePeer::BASISOFRECORD);
            $criteria->addSelectColumn(OccurrencePeer::CHECKEDCOL);
            $criteria->addSelectColumn(OccurrencePeer::VALIDITY);
            $criteria->addSelectColumn(OccurrencePeer::DATERECAPTURE);
            $criteria->addSelectColumn(OccurrencePeer::LATDEGREL);
            $criteria->addSelectColumn(OccurrencePeer::LATMINREL);
            $criteria->addSelectColumn(OccurrencePeer::NORTHSOUTHREL);
            $criteria->addSelectColumn(OccurrencePeer::LONGDEGREL);
            $criteria->addSelectColumn(OccurrencePeer::LONGMINREL);
            $criteria->addSelectColumn(OccurrencePeer::EASTWESTREL);
            $criteria->addSelectColumn(OccurrencePeer::LENGTHREL);
            $criteria->addSelectColumn(OccurrencePeer::LENGTHTYPEREL);
            $criteria->addSelectColumn(OccurrencePeer::WEIGHTREL);
            $criteria->addSelectColumn(OccurrencePeer::ENTERED);
            $criteria->addSelectColumn(OccurrencePeer::DATEENTERED);
            $criteria->addSelectColumn(OccurrencePeer::MODIFIED);
            $criteria->addSelectColumn(OccurrencePeer::DATEMODIFIED);
            $criteria->addSelectColumn(OccurrencePeer::EXPERT);
            $criteria->addSelectColumn(OccurrencePeer::DATECHECKED);
            $criteria->addSelectColumn(OccurrencePeer::LOCALITY1);
            $criteria->addSelectColumn(OccurrencePeer::TWODEGREE30W);
            $criteria->addSelectColumn(OccurrencePeer::ONEDEGREE30W);
            $criteria->addSelectColumn(OccurrencePeer::TENDEGREE30W);
            $criteria->addSelectColumn(OccurrencePeer::CSQUARECODE);
            $criteria->addSelectColumn(OccurrencePeer::PUBLISHEDDISTANCE);
            $criteria->addSelectColumn(OccurrencePeer::INFO);
            $criteria->addSelectColumn(OccurrencePeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.catnum2');
            $criteria->addSelectColumn($alias . '.OccurrenceRefNo');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Syncode');
            $criteria->addSelectColumn($alias . '.Stockcode');
            $criteria->addSelectColumn($alias . '.GenusCol');
            $criteria->addSelectColumn($alias . '.SpeciesCol');
            $criteria->addSelectColumn($alias . '.ColName');
            $criteria->addSelectColumn($alias . '.PicName');
            $criteria->addSelectColumn($alias . '.CatNum');
            $criteria->addSelectColumn($alias . '.URL');
            $criteria->addSelectColumn($alias . '.Station');
            $criteria->addSelectColumn($alias . '.Cruise');
            $criteria->addSelectColumn($alias . '.Gazetteer');
            $criteria->addSelectColumn($alias . '.LocalityType');
            $criteria->addSelectColumn($alias . '.WaterDepthMin');
            $criteria->addSelectColumn($alias . '.WaterDepthMax');
            $criteria->addSelectColumn($alias . '.AltitudeMin');
            $criteria->addSelectColumn($alias . '.AltitudeMax');
            $criteria->addSelectColumn($alias . '.LatitudeDeg');
            $criteria->addSelectColumn($alias . '.LatitudeMin');
            $criteria->addSelectColumn($alias . '.NorthSouth');
            $criteria->addSelectColumn($alias . '.LatitudeDec');
            $criteria->addSelectColumn($alias . '.LongitudeDeg');
            $criteria->addSelectColumn($alias . '.LongitudeMIn');
            $criteria->addSelectColumn($alias . '.EastWest');
            $criteria->addSelectColumn($alias . '.LongitudeDec');
            $criteria->addSelectColumn($alias . '.Accuracy');
            $criteria->addSelectColumn($alias . '.Salinity');
            $criteria->addSelectColumn($alias . '.LatitudeTo');
            $criteria->addSelectColumn($alias . '.LongitudeTo');
            $criteria->addSelectColumn($alias . '.LatitudeDegTo');
            $criteria->addSelectColumn($alias . '.LatitudeMinTo');
            $criteria->addSelectColumn($alias . '.NorthSouthTo');
            $criteria->addSelectColumn($alias . '.LongitudeDegTo');
            $criteria->addSelectColumn($alias . '.LongitudeMInTo');
            $criteria->addSelectColumn($alias . '.EastWestTo');
            $criteria->addSelectColumn($alias . '.Temp');
            $criteria->addSelectColumn($alias . '.AreaCode');
            $criteria->addSelectColumn($alias . '.SeaDrainage');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Province');
            $criteria->addSelectColumn($alias . '.Date');
            $criteria->addSelectColumn($alias . '.DateTo');
            $criteria->addSelectColumn($alias . '.Year');
            $criteria->addSelectColumn($alias . '.DateType');
            $criteria->addSelectColumn($alias . '.DayTimeStart');
            $criteria->addSelectColumn($alias . '.DayTimeStop');
            $criteria->addSelectColumn($alias . '.Length');
            $criteria->addSelectColumn($alias . '.LengthType');
            $criteria->addSelectColumn($alias . '.Length2');
            $criteria->addSelectColumn($alias . '.LengthType2');
            $criteria->addSelectColumn($alias . '.Lengthmin');
            $criteria->addSelectColumn($alias . '.Lengthmax');
            $criteria->addSelectColumn($alias . '.Weight');
            $criteria->addSelectColumn($alias . '.Number');
            $criteria->addSelectColumn($alias . '.PercentCatch');
            $criteria->addSelectColumn($alias . '.Abundance');
            $criteria->addSelectColumn($alias . '.LiveStage');
            $criteria->addSelectColumn($alias . '.Sex');
            $criteria->addSelectColumn($alias . '.Bottom');
            $criteria->addSelectColumn($alias . '.Gear');
            $criteria->addSelectColumn($alias . '.Remark_FB');
            $criteria->addSelectColumn($alias . '.Remark');
            $criteria->addSelectColumn($alias . '.Vessel');
            $criteria->addSelectColumn($alias . '.Expedition');
            $criteria->addSelectColumn($alias . '.Collector');
            $criteria->addSelectColumn($alias . '.Identifier');
            $criteria->addSelectColumn($alias . '.IdentifierStandard');
            $criteria->addSelectColumn($alias . '.IdentifierYR');
            $criteria->addSelectColumn($alias . '.QName');
            $criteria->addSelectColumn($alias . '.QIdentifier');
            $criteria->addSelectColumn($alias . '.QArea');
            $criteria->addSelectColumn($alias . '.QCountry');
            $criteria->addSelectColumn($alias . '.QCoordinates');
            $criteria->addSelectColumn($alias . '.Type');
            $criteria->addSelectColumn($alias . '.MS');
            $criteria->addSelectColumn($alias . '.Storage');
            $criteria->addSelectColumn($alias . '.RecordType');
            $criteria->addSelectColumn($alias . '.BasisOfRecord');
            $criteria->addSelectColumn($alias . '.CheckedCol');
            $criteria->addSelectColumn($alias . '.Validity');
            $criteria->addSelectColumn($alias . '.DateRecapture');
            $criteria->addSelectColumn($alias . '.LatDegRel');
            $criteria->addSelectColumn($alias . '.LatMinRel');
            $criteria->addSelectColumn($alias . '.NorthSouthRel');
            $criteria->addSelectColumn($alias . '.LongDegRel');
            $criteria->addSelectColumn($alias . '.LongMinRel');
            $criteria->addSelectColumn($alias . '.EastWestRel');
            $criteria->addSelectColumn($alias . '.LengthRel');
            $criteria->addSelectColumn($alias . '.LengthTypeRel');
            $criteria->addSelectColumn($alias . '.WeightRel');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Locality1');
            $criteria->addSelectColumn($alias . '.TwoDegree30W');
            $criteria->addSelectColumn($alias . '.OneDegree30W');
            $criteria->addSelectColumn($alias . '.TenDegree30W');
            $criteria->addSelectColumn($alias . '.CSquarecode');
            $criteria->addSelectColumn($alias . '.PublishedDistance');
            $criteria->addSelectColumn($alias . '.Info');
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
        $criteria->setPrimaryTableName(OccurrencePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OccurrencePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(OccurrencePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(OccurrencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Occurrence
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = OccurrencePeer::doSelect($critcopy, $con);
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
        return OccurrencePeer::populateObjects(OccurrencePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(OccurrencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OccurrencePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(OccurrencePeer::DATABASE_NAME);

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
     * @param Occurrence $obj A Occurrence object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getCatnum2();
            } // if key === null
            OccurrencePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Occurrence object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Occurrence) {
                $key = (string) $value->getCatnum2();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Occurrence object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(OccurrencePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Occurrence Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(OccurrencePeer::$instances[$key])) {
                return OccurrencePeer::$instances[$key];
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
        foreach (OccurrencePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        OccurrencePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to occurrence
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
        $cls = OccurrencePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = OccurrencePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = OccurrencePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OccurrencePeer::addInstanceToPool($obj, $key);
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
     * @return array (Occurrence object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = OccurrencePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = OccurrencePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + OccurrencePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OccurrencePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            OccurrencePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(OccurrencePeer::DATABASE_NAME)->getTable(OccurrencePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseOccurrencePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseOccurrencePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \OccurrenceTableMap());
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
        return OccurrencePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Occurrence or Criteria object.
     *
     * @param      mixed $values Criteria or Occurrence object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OccurrencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Occurrence object
        }

        if ($criteria->containsKey(OccurrencePeer::CATNUM2) && $criteria->keyContainsValue(OccurrencePeer::CATNUM2) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.OccurrencePeer::CATNUM2.')');
        }


        // Set the correct dbName
        $criteria->setDbName(OccurrencePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Occurrence or Criteria object.
     *
     * @param      mixed $values Criteria or Occurrence object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OccurrencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(OccurrencePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(OccurrencePeer::CATNUM2);
            $value = $criteria->remove(OccurrencePeer::CATNUM2);
            if ($value) {
                $selectCriteria->add(OccurrencePeer::CATNUM2, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OccurrencePeer::TABLE_NAME);
            }

        } else { // $values is Occurrence object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(OccurrencePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the occurrence table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OccurrencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(OccurrencePeer::TABLE_NAME, $con, OccurrencePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OccurrencePeer::clearInstancePool();
            OccurrencePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Occurrence or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Occurrence object or primary key or array of primary keys
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
            $con = Propel::getConnection(OccurrencePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            OccurrencePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Occurrence) { // it's a model object
            // invalidate the cache for this single object
            OccurrencePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OccurrencePeer::DATABASE_NAME);
            $criteria->add(OccurrencePeer::CATNUM2, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                OccurrencePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(OccurrencePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            OccurrencePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Occurrence object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Occurrence $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(OccurrencePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(OccurrencePeer::TABLE_NAME);

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

        return BasePeer::doValidate(OccurrencePeer::DATABASE_NAME, OccurrencePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Occurrence
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = OccurrencePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(OccurrencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(OccurrencePeer::DATABASE_NAME);
        $criteria->add(OccurrencePeer::CATNUM2, $pk);

        $v = OccurrencePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Occurrence[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OccurrencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(OccurrencePeer::DATABASE_NAME);
            $criteria->add(OccurrencePeer::CATNUM2, $pks, Criteria::IN);
            $objs = OccurrencePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseOccurrencePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOccurrencePeer::buildTableMap();

