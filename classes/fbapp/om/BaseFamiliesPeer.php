<?php


/**
 * Base static class for performing query and update operations on the 'families' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseFamiliesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'families';

    /** the related Propel class for this table */
    const OM_CLASS = 'Families';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FamiliesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 77;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 77;

    /** the column name for the FamCode field */
    const FAMCODE = 'families.FamCode';

    /** the column name for the SortID field */
    const SORTID = 'families.SortID';

    /** the column name for the Family field */
    const FAMILY = 'families.Family';

    /** the column name for the AuthorYear field */
    const AUTHORYEAR = 'families.AuthorYear';

    /** the column name for the Qualification field */
    const QUALIFICATION = 'families.Qualification';

    /** the column name for the CommonName field */
    const COMMONNAME = 'families.CommonName';

    /** the column name for the FamiliesRefNo field */
    const FAMILIESREFNO = 'families.FamiliesRefNo';

    /** the column name for the Synonym field */
    const SYNONYM = 'families.Synonym';

    /** the column name for the Order field */
    const ORDER = 'families.Order';

    /** the column name for the Ordnum field */
    const ORDNUM = 'families.Ordnum';

    /** the column name for the Class field */
    const CLAZZ = 'families.Class';

    /** the column name for the ClassNum field */
    const CLASSNUM = 'families.ClassNum';

    /** the column name for the Genera field */
    const GENERA = 'families.Genera';

    /** the column name for the Species field */
    const SPECIES = 'families.Species';

    /** the column name for the BodyShapeI field */
    const BODYSHAPEI = 'families.BodyShapeI';

    /** the column name for the SpeciesCount field */
    const SPECIESCOUNT = 'families.SpeciesCount';

    /** the column name for the Marine field */
    const MARINE = 'families.Marine';

    /** the column name for the Brackish field */
    const BRACKISH = 'families.Brackish';

    /** the column name for the Freshwater field */
    const FRESHWATER = 'families.Freshwater';

    /** the column name for the WaterSalinity field */
    const WATERSALINITY = 'families.WaterSalinity';

    /** the column name for the Aquarium field */
    const AQUARIUM = 'families.Aquarium';

    /** the column name for the ReprGuild field */
    const REPRGUILD = 'families.ReprGuild';

    /** the column name for the SwimMode field */
    const SWIMMODE = 'families.SwimMode';

    /** the column name for the Activity field */
    const ACTIVITY = 'families.Activity';

    /** the column name for the PeriodRange field */
    const PERIODRANGE = 'families.PeriodRange';

    /** the column name for the Period field */
    const PERIOD = 'families.Period';

    /** the column name for the EpochRange field */
    const EPOCHRANGE = 'families.EpochRange';

    /** the column name for the Epoch field */
    const EPOCH = 'families.Epoch';

    /** the column name for the FossilRef field */
    const FOSSILREF = 'families.FossilRef';

    /** the column name for the FamPic field */
    const FAMPIC = 'families.FamPic';

    /** the column name for the LarvPic field */
    const LARVPIC = 'families.LarvPic';

    /** the column name for the ValidGenera field */
    const VALIDGENERA = 'families.ValidGenera';

    /** the column name for the Complete field */
    const COMPLETE = 'families.Complete';

    /** the column name for the Source field */
    const SOURCE = 'families.Source';

    /** the column name for the AspinesMin field */
    const ASPINESMIN = 'families.AspinesMin';

    /** the column name for the AspinesMax field */
    const ASPINESMAX = 'families.AspinesMax';

    /** the column name for the AraysMin field */
    const ARAYSMIN = 'families.AraysMin';

    /** the column name for the AraysMax field */
    const ARAYSMAX = 'families.AraysMax';

    /** the column name for the DspinesMin field */
    const DSPINESMIN = 'families.DspinesMin';

    /** the column name for the DspinesMax field */
    const DSPINESMAX = 'families.DspinesMax';

    /** the column name for the DraysMin field */
    const DRAYSMIN = 'families.DraysMin';

    /** the column name for the DraysMax field */
    const DRAYSMAX = 'families.DraysMax';

    /** the column name for the Northernmost field */
    const NORTHERNMOST = 'families.Northernmost';

    /** the column name for the NorthSouthN field */
    const NORTHSOUTHN = 'families.NorthSouthN';

    /** the column name for the Southernmost field */
    const SOUTHERNMOST = 'families.Southernmost';

    /** the column name for the NorthSouthS field */
    const NORTHSOUTHS = 'families.NorthSouthS';

    /** the column name for the Westernmost field */
    const WESTERNMOST = 'families.Westernmost';

    /** the column name for the WestEastW field */
    const WESTEASTW = 'families.WestEastW';

    /** the column name for the Easternmost field */
    const EASTERNMOST = 'families.Easternmost';

    /** the column name for the WestEastE field */
    const WESTEASTE = 'families.WestEastE';

    /** the column name for the PhiPrime field */
    const PHIPRIME = 'families.PhiPrime';

    /** the column name for the Division field */
    const DIVISION = 'families.Division';

    /** the column name for the Experts field */
    const EXPERTS = 'families.Experts';

    /** the column name for the Entered field */
    const ENTERED = 'families.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'families.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'families.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'families.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'families.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'families.DateChecked';

    /** the column name for the Remark field */
    const REMARK = 'families.Remark';

    /** the column name for the Etymology field */
    const ETYMOLOGY = 'families.Etymology';

    /** the column name for the FamilyExpert field */
    const FAMILYEXPERT = 'families.FamilyExpert';

    /** the column name for the FBContact field */
    const FBCONTACT = 'families.FBContact';

    /** the column name for the CLOFExpert field */
    const CLOFEXPERT = 'families.CLOFExpert';

    /** the column name for the CommonName_Greek field */
    const COMMONNAME_GREEK = 'families.CommonName_Greek';

    /** the column name for the CommonName_Greek_u field */
    const COMMONNAME_GREEK_U = 'families.CommonName_Greek_u';

    /** the column name for the CommonName_Russian field */
    const COMMONNAME_RUSSIAN = 'families.CommonName_Russian';

    /** the column name for the CommonName_Russian_original field */
    const COMMONNAME_RUSSIAN_ORIGINAL = 'families.CommonName_Russian_original';

    /** the column name for the CommonName_German field */
    const COMMONNAME_GERMAN = 'families.CommonName_German';

    /** the column name for the CommonName_French field */
    const COMMONNAME_FRENCH = 'families.CommonName_French';

    /** the column name for the CommonName_Italian field */
    const COMMONNAME_ITALIAN = 'families.CommonName_Italian';

    /** the column name for the CommonName_Dutch field */
    const COMMONNAME_DUTCH = 'families.CommonName_Dutch';

    /** the column name for the CommonName_Chinese field */
    const COMMONNAME_CHINESE = 'families.CommonName_Chinese';

    /** the column name for the CommonName_Chinese_u field */
    const COMMONNAME_CHINESE_U = 'families.CommonName_Chinese_u';

    /** the column name for the CommonName_Spanish field */
    const COMMONNAME_SPANISH = 'families.CommonName_Spanish';

    /** the column name for the CommonName_Portuguese field */
    const COMMONNAME_PORTUGUESE = 'families.CommonName_Portuguese';

    /** the column name for the CommonName_Swedish field */
    const COMMONNAME_SWEDISH = 'families.CommonName_Swedish';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Families objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Families[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FamiliesPeer::$fieldNames[FamiliesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Famcode', 'Sortid', 'Family', 'Authoryear', 'Qualification', 'Commonname', 'Familiesrefno', 'Synonym', 'Order', 'Ordnum', 'Class', 'Classnum', 'Genera', 'Species', 'Bodyshapei', 'Speciescount', 'Marine', 'Brackish', 'Freshwater', 'Watersalinity', 'Aquarium', 'Reprguild', 'Swimmode', 'Activity', 'Periodrange', 'Period', 'Epochrange', 'Epoch', 'Fossilref', 'Fampic', 'Larvpic', 'Validgenera', 'Complete', 'Source', 'Aspinesmin', 'Aspinesmax', 'Araysmin', 'Araysmax', 'Dspinesmin', 'Dspinesmax', 'Draysmin', 'Draysmax', 'Northernmost', 'Northsouthn', 'Southernmost', 'Northsouths', 'Westernmost', 'Westeastw', 'Easternmost', 'Westeaste', 'Phiprime', 'Division', 'Experts', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Remark', 'Etymology', 'Familyexpert', 'Fbcontact', 'Clofexpert', 'CommonnameGreek', 'CommonnameGreekU', 'CommonnameRussian', 'CommonnameRussianOriginal', 'CommonnameGerman', 'CommonnameFrench', 'CommonnameItalian', 'CommonnameDutch', 'CommonnameChinese', 'CommonnameChineseU', 'CommonnameSpanish', 'CommonnamePortuguese', 'CommonnameSwedish', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('famcode', 'sortid', 'family', 'authoryear', 'qualification', 'commonname', 'familiesrefno', 'synonym', 'order', 'ordnum', 'class', 'classnum', 'genera', 'species', 'bodyshapei', 'speciescount', 'marine', 'brackish', 'freshwater', 'watersalinity', 'aquarium', 'reprguild', 'swimmode', 'activity', 'periodrange', 'period', 'epochrange', 'epoch', 'fossilref', 'fampic', 'larvpic', 'validgenera', 'complete', 'source', 'aspinesmin', 'aspinesmax', 'araysmin', 'araysmax', 'dspinesmin', 'dspinesmax', 'draysmin', 'draysmax', 'northernmost', 'northsouthn', 'southernmost', 'northsouths', 'westernmost', 'westeastw', 'easternmost', 'westeaste', 'phiprime', 'division', 'experts', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'remark', 'etymology', 'familyexpert', 'fbcontact', 'clofexpert', 'commonnameGreek', 'commonnameGreekU', 'commonnameRussian', 'commonnameRussianOriginal', 'commonnameGerman', 'commonnameFrench', 'commonnameItalian', 'commonnameDutch', 'commonnameChinese', 'commonnameChineseU', 'commonnameSpanish', 'commonnamePortuguese', 'commonnameSwedish', ),
        BasePeer::TYPE_COLNAME => array (FamiliesPeer::FAMCODE, FamiliesPeer::SORTID, FamiliesPeer::FAMILY, FamiliesPeer::AUTHORYEAR, FamiliesPeer::QUALIFICATION, FamiliesPeer::COMMONNAME, FamiliesPeer::FAMILIESREFNO, FamiliesPeer::SYNONYM, FamiliesPeer::ORDER, FamiliesPeer::ORDNUM, FamiliesPeer::CLAZZ, FamiliesPeer::CLASSNUM, FamiliesPeer::GENERA, FamiliesPeer::SPECIES, FamiliesPeer::BODYSHAPEI, FamiliesPeer::SPECIESCOUNT, FamiliesPeer::MARINE, FamiliesPeer::BRACKISH, FamiliesPeer::FRESHWATER, FamiliesPeer::WATERSALINITY, FamiliesPeer::AQUARIUM, FamiliesPeer::REPRGUILD, FamiliesPeer::SWIMMODE, FamiliesPeer::ACTIVITY, FamiliesPeer::PERIODRANGE, FamiliesPeer::PERIOD, FamiliesPeer::EPOCHRANGE, FamiliesPeer::EPOCH, FamiliesPeer::FOSSILREF, FamiliesPeer::FAMPIC, FamiliesPeer::LARVPIC, FamiliesPeer::VALIDGENERA, FamiliesPeer::COMPLETE, FamiliesPeer::SOURCE, FamiliesPeer::ASPINESMIN, FamiliesPeer::ASPINESMAX, FamiliesPeer::ARAYSMIN, FamiliesPeer::ARAYSMAX, FamiliesPeer::DSPINESMIN, FamiliesPeer::DSPINESMAX, FamiliesPeer::DRAYSMIN, FamiliesPeer::DRAYSMAX, FamiliesPeer::NORTHERNMOST, FamiliesPeer::NORTHSOUTHN, FamiliesPeer::SOUTHERNMOST, FamiliesPeer::NORTHSOUTHS, FamiliesPeer::WESTERNMOST, FamiliesPeer::WESTEASTW, FamiliesPeer::EASTERNMOST, FamiliesPeer::WESTEASTE, FamiliesPeer::PHIPRIME, FamiliesPeer::DIVISION, FamiliesPeer::EXPERTS, FamiliesPeer::ENTERED, FamiliesPeer::DATEENTERED, FamiliesPeer::MODIFIED, FamiliesPeer::DATEMODIFIED, FamiliesPeer::EXPERT, FamiliesPeer::DATECHECKED, FamiliesPeer::REMARK, FamiliesPeer::ETYMOLOGY, FamiliesPeer::FAMILYEXPERT, FamiliesPeer::FBCONTACT, FamiliesPeer::CLOFEXPERT, FamiliesPeer::COMMONNAME_GREEK, FamiliesPeer::COMMONNAME_GREEK_U, FamiliesPeer::COMMONNAME_RUSSIAN, FamiliesPeer::COMMONNAME_RUSSIAN_ORIGINAL, FamiliesPeer::COMMONNAME_GERMAN, FamiliesPeer::COMMONNAME_FRENCH, FamiliesPeer::COMMONNAME_ITALIAN, FamiliesPeer::COMMONNAME_DUTCH, FamiliesPeer::COMMONNAME_CHINESE, FamiliesPeer::COMMONNAME_CHINESE_U, FamiliesPeer::COMMONNAME_SPANISH, FamiliesPeer::COMMONNAME_PORTUGUESE, FamiliesPeer::COMMONNAME_SWEDISH, ),
        BasePeer::TYPE_RAW_COLNAME => array ('FAMCODE', 'SORTID', 'FAMILY', 'AUTHORYEAR', 'QUALIFICATION', 'COMMONNAME', 'FAMILIESREFNO', 'SYNONYM', 'ORDER', 'ORDNUM', 'CLAZZ', 'CLASSNUM', 'GENERA', 'SPECIES', 'BODYSHAPEI', 'SPECIESCOUNT', 'MARINE', 'BRACKISH', 'FRESHWATER', 'WATERSALINITY', 'AQUARIUM', 'REPRGUILD', 'SWIMMODE', 'ACTIVITY', 'PERIODRANGE', 'PERIOD', 'EPOCHRANGE', 'EPOCH', 'FOSSILREF', 'FAMPIC', 'LARVPIC', 'VALIDGENERA', 'COMPLETE', 'SOURCE', 'ASPINESMIN', 'ASPINESMAX', 'ARAYSMIN', 'ARAYSMAX', 'DSPINESMIN', 'DSPINESMAX', 'DRAYSMIN', 'DRAYSMAX', 'NORTHERNMOST', 'NORTHSOUTHN', 'SOUTHERNMOST', 'NORTHSOUTHS', 'WESTERNMOST', 'WESTEASTW', 'EASTERNMOST', 'WESTEASTE', 'PHIPRIME', 'DIVISION', 'EXPERTS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'REMARK', 'ETYMOLOGY', 'FAMILYEXPERT', 'FBCONTACT', 'CLOFEXPERT', 'COMMONNAME_GREEK', 'COMMONNAME_GREEK_U', 'COMMONNAME_RUSSIAN', 'COMMONNAME_RUSSIAN_ORIGINAL', 'COMMONNAME_GERMAN', 'COMMONNAME_FRENCH', 'COMMONNAME_ITALIAN', 'COMMONNAME_DUTCH', 'COMMONNAME_CHINESE', 'COMMONNAME_CHINESE_U', 'COMMONNAME_SPANISH', 'COMMONNAME_PORTUGUESE', 'COMMONNAME_SWEDISH', ),
        BasePeer::TYPE_FIELDNAME => array ('FamCode', 'SortID', 'Family', 'AuthorYear', 'Qualification', 'CommonName', 'FamiliesRefNo', 'Synonym', 'Order', 'Ordnum', 'Class', 'ClassNum', 'Genera', 'Species', 'BodyShapeI', 'SpeciesCount', 'Marine', 'Brackish', 'Freshwater', 'WaterSalinity', 'Aquarium', 'ReprGuild', 'SwimMode', 'Activity', 'PeriodRange', 'Period', 'EpochRange', 'Epoch', 'FossilRef', 'FamPic', 'LarvPic', 'ValidGenera', 'Complete', 'Source', 'AspinesMin', 'AspinesMax', 'AraysMin', 'AraysMax', 'DspinesMin', 'DspinesMax', 'DraysMin', 'DraysMax', 'Northernmost', 'NorthSouthN', 'Southernmost', 'NorthSouthS', 'Westernmost', 'WestEastW', 'Easternmost', 'WestEastE', 'PhiPrime', 'Division', 'Experts', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Remark', 'Etymology', 'FamilyExpert', 'FBContact', 'CLOFExpert', 'CommonName_Greek', 'CommonName_Greek_u', 'CommonName_Russian', 'CommonName_Russian_original', 'CommonName_German', 'CommonName_French', 'CommonName_Italian', 'CommonName_Dutch', 'CommonName_Chinese', 'CommonName_Chinese_u', 'CommonName_Spanish', 'CommonName_Portuguese', 'CommonName_Swedish', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FamiliesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Famcode' => 0, 'Sortid' => 1, 'Family' => 2, 'Authoryear' => 3, 'Qualification' => 4, 'Commonname' => 5, 'Familiesrefno' => 6, 'Synonym' => 7, 'Order' => 8, 'Ordnum' => 9, 'Class' => 10, 'Classnum' => 11, 'Genera' => 12, 'Species' => 13, 'Bodyshapei' => 14, 'Speciescount' => 15, 'Marine' => 16, 'Brackish' => 17, 'Freshwater' => 18, 'Watersalinity' => 19, 'Aquarium' => 20, 'Reprguild' => 21, 'Swimmode' => 22, 'Activity' => 23, 'Periodrange' => 24, 'Period' => 25, 'Epochrange' => 26, 'Epoch' => 27, 'Fossilref' => 28, 'Fampic' => 29, 'Larvpic' => 30, 'Validgenera' => 31, 'Complete' => 32, 'Source' => 33, 'Aspinesmin' => 34, 'Aspinesmax' => 35, 'Araysmin' => 36, 'Araysmax' => 37, 'Dspinesmin' => 38, 'Dspinesmax' => 39, 'Draysmin' => 40, 'Draysmax' => 41, 'Northernmost' => 42, 'Northsouthn' => 43, 'Southernmost' => 44, 'Northsouths' => 45, 'Westernmost' => 46, 'Westeastw' => 47, 'Easternmost' => 48, 'Westeaste' => 49, 'Phiprime' => 50, 'Division' => 51, 'Experts' => 52, 'Entered' => 53, 'Dateentered' => 54, 'Modified' => 55, 'Datemodified' => 56, 'Expert' => 57, 'Datechecked' => 58, 'Remark' => 59, 'Etymology' => 60, 'Familyexpert' => 61, 'Fbcontact' => 62, 'Clofexpert' => 63, 'CommonnameGreek' => 64, 'CommonnameGreekU' => 65, 'CommonnameRussian' => 66, 'CommonnameRussianOriginal' => 67, 'CommonnameGerman' => 68, 'CommonnameFrench' => 69, 'CommonnameItalian' => 70, 'CommonnameDutch' => 71, 'CommonnameChinese' => 72, 'CommonnameChineseU' => 73, 'CommonnameSpanish' => 74, 'CommonnamePortuguese' => 75, 'CommonnameSwedish' => 76, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('famcode' => 0, 'sortid' => 1, 'family' => 2, 'authoryear' => 3, 'qualification' => 4, 'commonname' => 5, 'familiesrefno' => 6, 'synonym' => 7, 'order' => 8, 'ordnum' => 9, 'class' => 10, 'classnum' => 11, 'genera' => 12, 'species' => 13, 'bodyshapei' => 14, 'speciescount' => 15, 'marine' => 16, 'brackish' => 17, 'freshwater' => 18, 'watersalinity' => 19, 'aquarium' => 20, 'reprguild' => 21, 'swimmode' => 22, 'activity' => 23, 'periodrange' => 24, 'period' => 25, 'epochrange' => 26, 'epoch' => 27, 'fossilref' => 28, 'fampic' => 29, 'larvpic' => 30, 'validgenera' => 31, 'complete' => 32, 'source' => 33, 'aspinesmin' => 34, 'aspinesmax' => 35, 'araysmin' => 36, 'araysmax' => 37, 'dspinesmin' => 38, 'dspinesmax' => 39, 'draysmin' => 40, 'draysmax' => 41, 'northernmost' => 42, 'northsouthn' => 43, 'southernmost' => 44, 'northsouths' => 45, 'westernmost' => 46, 'westeastw' => 47, 'easternmost' => 48, 'westeaste' => 49, 'phiprime' => 50, 'division' => 51, 'experts' => 52, 'entered' => 53, 'dateentered' => 54, 'modified' => 55, 'datemodified' => 56, 'expert' => 57, 'datechecked' => 58, 'remark' => 59, 'etymology' => 60, 'familyexpert' => 61, 'fbcontact' => 62, 'clofexpert' => 63, 'commonnameGreek' => 64, 'commonnameGreekU' => 65, 'commonnameRussian' => 66, 'commonnameRussianOriginal' => 67, 'commonnameGerman' => 68, 'commonnameFrench' => 69, 'commonnameItalian' => 70, 'commonnameDutch' => 71, 'commonnameChinese' => 72, 'commonnameChineseU' => 73, 'commonnameSpanish' => 74, 'commonnamePortuguese' => 75, 'commonnameSwedish' => 76, ),
        BasePeer::TYPE_COLNAME => array (FamiliesPeer::FAMCODE => 0, FamiliesPeer::SORTID => 1, FamiliesPeer::FAMILY => 2, FamiliesPeer::AUTHORYEAR => 3, FamiliesPeer::QUALIFICATION => 4, FamiliesPeer::COMMONNAME => 5, FamiliesPeer::FAMILIESREFNO => 6, FamiliesPeer::SYNONYM => 7, FamiliesPeer::ORDER => 8, FamiliesPeer::ORDNUM => 9, FamiliesPeer::CLAZZ => 10, FamiliesPeer::CLASSNUM => 11, FamiliesPeer::GENERA => 12, FamiliesPeer::SPECIES => 13, FamiliesPeer::BODYSHAPEI => 14, FamiliesPeer::SPECIESCOUNT => 15, FamiliesPeer::MARINE => 16, FamiliesPeer::BRACKISH => 17, FamiliesPeer::FRESHWATER => 18, FamiliesPeer::WATERSALINITY => 19, FamiliesPeer::AQUARIUM => 20, FamiliesPeer::REPRGUILD => 21, FamiliesPeer::SWIMMODE => 22, FamiliesPeer::ACTIVITY => 23, FamiliesPeer::PERIODRANGE => 24, FamiliesPeer::PERIOD => 25, FamiliesPeer::EPOCHRANGE => 26, FamiliesPeer::EPOCH => 27, FamiliesPeer::FOSSILREF => 28, FamiliesPeer::FAMPIC => 29, FamiliesPeer::LARVPIC => 30, FamiliesPeer::VALIDGENERA => 31, FamiliesPeer::COMPLETE => 32, FamiliesPeer::SOURCE => 33, FamiliesPeer::ASPINESMIN => 34, FamiliesPeer::ASPINESMAX => 35, FamiliesPeer::ARAYSMIN => 36, FamiliesPeer::ARAYSMAX => 37, FamiliesPeer::DSPINESMIN => 38, FamiliesPeer::DSPINESMAX => 39, FamiliesPeer::DRAYSMIN => 40, FamiliesPeer::DRAYSMAX => 41, FamiliesPeer::NORTHERNMOST => 42, FamiliesPeer::NORTHSOUTHN => 43, FamiliesPeer::SOUTHERNMOST => 44, FamiliesPeer::NORTHSOUTHS => 45, FamiliesPeer::WESTERNMOST => 46, FamiliesPeer::WESTEASTW => 47, FamiliesPeer::EASTERNMOST => 48, FamiliesPeer::WESTEASTE => 49, FamiliesPeer::PHIPRIME => 50, FamiliesPeer::DIVISION => 51, FamiliesPeer::EXPERTS => 52, FamiliesPeer::ENTERED => 53, FamiliesPeer::DATEENTERED => 54, FamiliesPeer::MODIFIED => 55, FamiliesPeer::DATEMODIFIED => 56, FamiliesPeer::EXPERT => 57, FamiliesPeer::DATECHECKED => 58, FamiliesPeer::REMARK => 59, FamiliesPeer::ETYMOLOGY => 60, FamiliesPeer::FAMILYEXPERT => 61, FamiliesPeer::FBCONTACT => 62, FamiliesPeer::CLOFEXPERT => 63, FamiliesPeer::COMMONNAME_GREEK => 64, FamiliesPeer::COMMONNAME_GREEK_U => 65, FamiliesPeer::COMMONNAME_RUSSIAN => 66, FamiliesPeer::COMMONNAME_RUSSIAN_ORIGINAL => 67, FamiliesPeer::COMMONNAME_GERMAN => 68, FamiliesPeer::COMMONNAME_FRENCH => 69, FamiliesPeer::COMMONNAME_ITALIAN => 70, FamiliesPeer::COMMONNAME_DUTCH => 71, FamiliesPeer::COMMONNAME_CHINESE => 72, FamiliesPeer::COMMONNAME_CHINESE_U => 73, FamiliesPeer::COMMONNAME_SPANISH => 74, FamiliesPeer::COMMONNAME_PORTUGUESE => 75, FamiliesPeer::COMMONNAME_SWEDISH => 76, ),
        BasePeer::TYPE_RAW_COLNAME => array ('FAMCODE' => 0, 'SORTID' => 1, 'FAMILY' => 2, 'AUTHORYEAR' => 3, 'QUALIFICATION' => 4, 'COMMONNAME' => 5, 'FAMILIESREFNO' => 6, 'SYNONYM' => 7, 'ORDER' => 8, 'ORDNUM' => 9, 'CLAZZ' => 10, 'CLASSNUM' => 11, 'GENERA' => 12, 'SPECIES' => 13, 'BODYSHAPEI' => 14, 'SPECIESCOUNT' => 15, 'MARINE' => 16, 'BRACKISH' => 17, 'FRESHWATER' => 18, 'WATERSALINITY' => 19, 'AQUARIUM' => 20, 'REPRGUILD' => 21, 'SWIMMODE' => 22, 'ACTIVITY' => 23, 'PERIODRANGE' => 24, 'PERIOD' => 25, 'EPOCHRANGE' => 26, 'EPOCH' => 27, 'FOSSILREF' => 28, 'FAMPIC' => 29, 'LARVPIC' => 30, 'VALIDGENERA' => 31, 'COMPLETE' => 32, 'SOURCE' => 33, 'ASPINESMIN' => 34, 'ASPINESMAX' => 35, 'ARAYSMIN' => 36, 'ARAYSMAX' => 37, 'DSPINESMIN' => 38, 'DSPINESMAX' => 39, 'DRAYSMIN' => 40, 'DRAYSMAX' => 41, 'NORTHERNMOST' => 42, 'NORTHSOUTHN' => 43, 'SOUTHERNMOST' => 44, 'NORTHSOUTHS' => 45, 'WESTERNMOST' => 46, 'WESTEASTW' => 47, 'EASTERNMOST' => 48, 'WESTEASTE' => 49, 'PHIPRIME' => 50, 'DIVISION' => 51, 'EXPERTS' => 52, 'ENTERED' => 53, 'DATEENTERED' => 54, 'MODIFIED' => 55, 'DATEMODIFIED' => 56, 'EXPERT' => 57, 'DATECHECKED' => 58, 'REMARK' => 59, 'ETYMOLOGY' => 60, 'FAMILYEXPERT' => 61, 'FBCONTACT' => 62, 'CLOFEXPERT' => 63, 'COMMONNAME_GREEK' => 64, 'COMMONNAME_GREEK_U' => 65, 'COMMONNAME_RUSSIAN' => 66, 'COMMONNAME_RUSSIAN_ORIGINAL' => 67, 'COMMONNAME_GERMAN' => 68, 'COMMONNAME_FRENCH' => 69, 'COMMONNAME_ITALIAN' => 70, 'COMMONNAME_DUTCH' => 71, 'COMMONNAME_CHINESE' => 72, 'COMMONNAME_CHINESE_U' => 73, 'COMMONNAME_SPANISH' => 74, 'COMMONNAME_PORTUGUESE' => 75, 'COMMONNAME_SWEDISH' => 76, ),
        BasePeer::TYPE_FIELDNAME => array ('FamCode' => 0, 'SortID' => 1, 'Family' => 2, 'AuthorYear' => 3, 'Qualification' => 4, 'CommonName' => 5, 'FamiliesRefNo' => 6, 'Synonym' => 7, 'Order' => 8, 'Ordnum' => 9, 'Class' => 10, 'ClassNum' => 11, 'Genera' => 12, 'Species' => 13, 'BodyShapeI' => 14, 'SpeciesCount' => 15, 'Marine' => 16, 'Brackish' => 17, 'Freshwater' => 18, 'WaterSalinity' => 19, 'Aquarium' => 20, 'ReprGuild' => 21, 'SwimMode' => 22, 'Activity' => 23, 'PeriodRange' => 24, 'Period' => 25, 'EpochRange' => 26, 'Epoch' => 27, 'FossilRef' => 28, 'FamPic' => 29, 'LarvPic' => 30, 'ValidGenera' => 31, 'Complete' => 32, 'Source' => 33, 'AspinesMin' => 34, 'AspinesMax' => 35, 'AraysMin' => 36, 'AraysMax' => 37, 'DspinesMin' => 38, 'DspinesMax' => 39, 'DraysMin' => 40, 'DraysMax' => 41, 'Northernmost' => 42, 'NorthSouthN' => 43, 'Southernmost' => 44, 'NorthSouthS' => 45, 'Westernmost' => 46, 'WestEastW' => 47, 'Easternmost' => 48, 'WestEastE' => 49, 'PhiPrime' => 50, 'Division' => 51, 'Experts' => 52, 'Entered' => 53, 'DateEntered' => 54, 'Modified' => 55, 'DateModified' => 56, 'Expert' => 57, 'DateChecked' => 58, 'Remark' => 59, 'Etymology' => 60, 'FamilyExpert' => 61, 'FBContact' => 62, 'CLOFExpert' => 63, 'CommonName_Greek' => 64, 'CommonName_Greek_u' => 65, 'CommonName_Russian' => 66, 'CommonName_Russian_original' => 67, 'CommonName_German' => 68, 'CommonName_French' => 69, 'CommonName_Italian' => 70, 'CommonName_Dutch' => 71, 'CommonName_Chinese' => 72, 'CommonName_Chinese_u' => 73, 'CommonName_Spanish' => 74, 'CommonName_Portuguese' => 75, 'CommonName_Swedish' => 76, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, )
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
        $toNames = FamiliesPeer::getFieldNames($toType);
        $key = isset(FamiliesPeer::$fieldKeys[$fromType][$name]) ? FamiliesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FamiliesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FamiliesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FamiliesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. FamiliesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FamiliesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FamiliesPeer::FAMCODE);
            $criteria->addSelectColumn(FamiliesPeer::SORTID);
            $criteria->addSelectColumn(FamiliesPeer::FAMILY);
            $criteria->addSelectColumn(FamiliesPeer::AUTHORYEAR);
            $criteria->addSelectColumn(FamiliesPeer::QUALIFICATION);
            $criteria->addSelectColumn(FamiliesPeer::COMMONNAME);
            $criteria->addSelectColumn(FamiliesPeer::FAMILIESREFNO);
            $criteria->addSelectColumn(FamiliesPeer::SYNONYM);
            $criteria->addSelectColumn(FamiliesPeer::ORDER);
            $criteria->addSelectColumn(FamiliesPeer::ORDNUM);
            $criteria->addSelectColumn(FamiliesPeer::CLAZZ);
            $criteria->addSelectColumn(FamiliesPeer::CLASSNUM);
            $criteria->addSelectColumn(FamiliesPeer::GENERA);
            $criteria->addSelectColumn(FamiliesPeer::SPECIES);
            $criteria->addSelectColumn(FamiliesPeer::BODYSHAPEI);
            $criteria->addSelectColumn(FamiliesPeer::SPECIESCOUNT);
            $criteria->addSelectColumn(FamiliesPeer::MARINE);
            $criteria->addSelectColumn(FamiliesPeer::BRACKISH);
            $criteria->addSelectColumn(FamiliesPeer::FRESHWATER);
            $criteria->addSelectColumn(FamiliesPeer::WATERSALINITY);
            $criteria->addSelectColumn(FamiliesPeer::AQUARIUM);
            $criteria->addSelectColumn(FamiliesPeer::REPRGUILD);
            $criteria->addSelectColumn(FamiliesPeer::SWIMMODE);
            $criteria->addSelectColumn(FamiliesPeer::ACTIVITY);
            $criteria->addSelectColumn(FamiliesPeer::PERIODRANGE);
            $criteria->addSelectColumn(FamiliesPeer::PERIOD);
            $criteria->addSelectColumn(FamiliesPeer::EPOCHRANGE);
            $criteria->addSelectColumn(FamiliesPeer::EPOCH);
            $criteria->addSelectColumn(FamiliesPeer::FOSSILREF);
            $criteria->addSelectColumn(FamiliesPeer::FAMPIC);
            $criteria->addSelectColumn(FamiliesPeer::LARVPIC);
            $criteria->addSelectColumn(FamiliesPeer::VALIDGENERA);
            $criteria->addSelectColumn(FamiliesPeer::COMPLETE);
            $criteria->addSelectColumn(FamiliesPeer::SOURCE);
            $criteria->addSelectColumn(FamiliesPeer::ASPINESMIN);
            $criteria->addSelectColumn(FamiliesPeer::ASPINESMAX);
            $criteria->addSelectColumn(FamiliesPeer::ARAYSMIN);
            $criteria->addSelectColumn(FamiliesPeer::ARAYSMAX);
            $criteria->addSelectColumn(FamiliesPeer::DSPINESMIN);
            $criteria->addSelectColumn(FamiliesPeer::DSPINESMAX);
            $criteria->addSelectColumn(FamiliesPeer::DRAYSMIN);
            $criteria->addSelectColumn(FamiliesPeer::DRAYSMAX);
            $criteria->addSelectColumn(FamiliesPeer::NORTHERNMOST);
            $criteria->addSelectColumn(FamiliesPeer::NORTHSOUTHN);
            $criteria->addSelectColumn(FamiliesPeer::SOUTHERNMOST);
            $criteria->addSelectColumn(FamiliesPeer::NORTHSOUTHS);
            $criteria->addSelectColumn(FamiliesPeer::WESTERNMOST);
            $criteria->addSelectColumn(FamiliesPeer::WESTEASTW);
            $criteria->addSelectColumn(FamiliesPeer::EASTERNMOST);
            $criteria->addSelectColumn(FamiliesPeer::WESTEASTE);
            $criteria->addSelectColumn(FamiliesPeer::PHIPRIME);
            $criteria->addSelectColumn(FamiliesPeer::DIVISION);
            $criteria->addSelectColumn(FamiliesPeer::EXPERTS);
            $criteria->addSelectColumn(FamiliesPeer::ENTERED);
            $criteria->addSelectColumn(FamiliesPeer::DATEENTERED);
            $criteria->addSelectColumn(FamiliesPeer::MODIFIED);
            $criteria->addSelectColumn(FamiliesPeer::DATEMODIFIED);
            $criteria->addSelectColumn(FamiliesPeer::EXPERT);
            $criteria->addSelectColumn(FamiliesPeer::DATECHECKED);
            $criteria->addSelectColumn(FamiliesPeer::REMARK);
            $criteria->addSelectColumn(FamiliesPeer::ETYMOLOGY);
            $criteria->addSelectColumn(FamiliesPeer::FAMILYEXPERT);
            $criteria->addSelectColumn(FamiliesPeer::FBCONTACT);
            $criteria->addSelectColumn(FamiliesPeer::CLOFEXPERT);
            $criteria->addSelectColumn(FamiliesPeer::COMMONNAME_GREEK);
            $criteria->addSelectColumn(FamiliesPeer::COMMONNAME_GREEK_U);
            $criteria->addSelectColumn(FamiliesPeer::COMMONNAME_RUSSIAN);
            $criteria->addSelectColumn(FamiliesPeer::COMMONNAME_RUSSIAN_ORIGINAL);
            $criteria->addSelectColumn(FamiliesPeer::COMMONNAME_GERMAN);
            $criteria->addSelectColumn(FamiliesPeer::COMMONNAME_FRENCH);
            $criteria->addSelectColumn(FamiliesPeer::COMMONNAME_ITALIAN);
            $criteria->addSelectColumn(FamiliesPeer::COMMONNAME_DUTCH);
            $criteria->addSelectColumn(FamiliesPeer::COMMONNAME_CHINESE);
            $criteria->addSelectColumn(FamiliesPeer::COMMONNAME_CHINESE_U);
            $criteria->addSelectColumn(FamiliesPeer::COMMONNAME_SPANISH);
            $criteria->addSelectColumn(FamiliesPeer::COMMONNAME_PORTUGUESE);
            $criteria->addSelectColumn(FamiliesPeer::COMMONNAME_SWEDISH);
        } else {
            $criteria->addSelectColumn($alias . '.FamCode');
            $criteria->addSelectColumn($alias . '.SortID');
            $criteria->addSelectColumn($alias . '.Family');
            $criteria->addSelectColumn($alias . '.AuthorYear');
            $criteria->addSelectColumn($alias . '.Qualification');
            $criteria->addSelectColumn($alias . '.CommonName');
            $criteria->addSelectColumn($alias . '.FamiliesRefNo');
            $criteria->addSelectColumn($alias . '.Synonym');
            $criteria->addSelectColumn($alias . '.Order');
            $criteria->addSelectColumn($alias . '.Ordnum');
            $criteria->addSelectColumn($alias . '.Class');
            $criteria->addSelectColumn($alias . '.ClassNum');
            $criteria->addSelectColumn($alias . '.Genera');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.BodyShapeI');
            $criteria->addSelectColumn($alias . '.SpeciesCount');
            $criteria->addSelectColumn($alias . '.Marine');
            $criteria->addSelectColumn($alias . '.Brackish');
            $criteria->addSelectColumn($alias . '.Freshwater');
            $criteria->addSelectColumn($alias . '.WaterSalinity');
            $criteria->addSelectColumn($alias . '.Aquarium');
            $criteria->addSelectColumn($alias . '.ReprGuild');
            $criteria->addSelectColumn($alias . '.SwimMode');
            $criteria->addSelectColumn($alias . '.Activity');
            $criteria->addSelectColumn($alias . '.PeriodRange');
            $criteria->addSelectColumn($alias . '.Period');
            $criteria->addSelectColumn($alias . '.EpochRange');
            $criteria->addSelectColumn($alias . '.Epoch');
            $criteria->addSelectColumn($alias . '.FossilRef');
            $criteria->addSelectColumn($alias . '.FamPic');
            $criteria->addSelectColumn($alias . '.LarvPic');
            $criteria->addSelectColumn($alias . '.ValidGenera');
            $criteria->addSelectColumn($alias . '.Complete');
            $criteria->addSelectColumn($alias . '.Source');
            $criteria->addSelectColumn($alias . '.AspinesMin');
            $criteria->addSelectColumn($alias . '.AspinesMax');
            $criteria->addSelectColumn($alias . '.AraysMin');
            $criteria->addSelectColumn($alias . '.AraysMax');
            $criteria->addSelectColumn($alias . '.DspinesMin');
            $criteria->addSelectColumn($alias . '.DspinesMax');
            $criteria->addSelectColumn($alias . '.DraysMin');
            $criteria->addSelectColumn($alias . '.DraysMax');
            $criteria->addSelectColumn($alias . '.Northernmost');
            $criteria->addSelectColumn($alias . '.NorthSouthN');
            $criteria->addSelectColumn($alias . '.Southernmost');
            $criteria->addSelectColumn($alias . '.NorthSouthS');
            $criteria->addSelectColumn($alias . '.Westernmost');
            $criteria->addSelectColumn($alias . '.WestEastW');
            $criteria->addSelectColumn($alias . '.Easternmost');
            $criteria->addSelectColumn($alias . '.WestEastE');
            $criteria->addSelectColumn($alias . '.PhiPrime');
            $criteria->addSelectColumn($alias . '.Division');
            $criteria->addSelectColumn($alias . '.Experts');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Remark');
            $criteria->addSelectColumn($alias . '.Etymology');
            $criteria->addSelectColumn($alias . '.FamilyExpert');
            $criteria->addSelectColumn($alias . '.FBContact');
            $criteria->addSelectColumn($alias . '.CLOFExpert');
            $criteria->addSelectColumn($alias . '.CommonName_Greek');
            $criteria->addSelectColumn($alias . '.CommonName_Greek_u');
            $criteria->addSelectColumn($alias . '.CommonName_Russian');
            $criteria->addSelectColumn($alias . '.CommonName_Russian_original');
            $criteria->addSelectColumn($alias . '.CommonName_German');
            $criteria->addSelectColumn($alias . '.CommonName_French');
            $criteria->addSelectColumn($alias . '.CommonName_Italian');
            $criteria->addSelectColumn($alias . '.CommonName_Dutch');
            $criteria->addSelectColumn($alias . '.CommonName_Chinese');
            $criteria->addSelectColumn($alias . '.CommonName_Chinese_u');
            $criteria->addSelectColumn($alias . '.CommonName_Spanish');
            $criteria->addSelectColumn($alias . '.CommonName_Portuguese');
            $criteria->addSelectColumn($alias . '.CommonName_Swedish');
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
        $criteria->setPrimaryTableName(FamiliesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FamiliesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FamiliesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FamiliesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Families
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FamiliesPeer::doSelect($critcopy, $con);
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
        return FamiliesPeer::populateObjects(FamiliesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FamiliesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FamiliesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FamiliesPeer::DATABASE_NAME);

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
     * @param Families $obj A Families object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getFamily();
            } // if key === null
            FamiliesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Families object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Families) {
                $key = (string) $value->getFamily();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Families object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FamiliesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Families Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FamiliesPeer::$instances[$key])) {
                return FamiliesPeer::$instances[$key];
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
        foreach (FamiliesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FamiliesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to families
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
        if ($row[$startcol + 2] === null) {
            return null;
        }

        return (string) $row[$startcol + 2];
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

        return (string) $row[$startcol + 2];
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
        $cls = FamiliesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FamiliesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FamiliesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FamiliesPeer::addInstanceToPool($obj, $key);
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
     * @return array (Families object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FamiliesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FamiliesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FamiliesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FamiliesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FamiliesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(FamiliesPeer::DATABASE_NAME)->getTable(FamiliesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFamiliesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFamiliesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FamiliesTableMap());
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
        return FamiliesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Families or Criteria object.
     *
     * @param      mixed $values Criteria or Families object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FamiliesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Families object
        }


        // Set the correct dbName
        $criteria->setDbName(FamiliesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Families or Criteria object.
     *
     * @param      mixed $values Criteria or Families object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FamiliesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FamiliesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FamiliesPeer::FAMILY);
            $value = $criteria->remove(FamiliesPeer::FAMILY);
            if ($value) {
                $selectCriteria->add(FamiliesPeer::FAMILY, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FamiliesPeer::TABLE_NAME);
            }

        } else { // $values is Families object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FamiliesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the families table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FamiliesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FamiliesPeer::TABLE_NAME, $con, FamiliesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FamiliesPeer::clearInstancePool();
            FamiliesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Families or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Families object or primary key or array of primary keys
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
            $con = Propel::getConnection(FamiliesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FamiliesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Families) { // it's a model object
            // invalidate the cache for this single object
            FamiliesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FamiliesPeer::DATABASE_NAME);
            $criteria->add(FamiliesPeer::FAMILY, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FamiliesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FamiliesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FamiliesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Families object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Families $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FamiliesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FamiliesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(FamiliesPeer::DATABASE_NAME, FamiliesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Families
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FamiliesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FamiliesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FamiliesPeer::DATABASE_NAME);
        $criteria->add(FamiliesPeer::FAMILY, $pk);

        $v = FamiliesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Families[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FamiliesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FamiliesPeer::DATABASE_NAME);
            $criteria->add(FamiliesPeer::FAMILY, $pks, Criteria::IN);
            $objs = FamiliesPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseFamiliesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFamiliesPeer::buildTableMap();

