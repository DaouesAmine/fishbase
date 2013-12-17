<?php


/**
 * Base static class for performing query and update operations on the 'cigua' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseCiguaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'cigua';

    /** the related Propel class for this table */
    const OM_CLASS = 'Cigua';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CiguaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 89;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 89;

    /** the column name for the AutoCtr field */
    const AUTOCTR = 'cigua.AutoCtr';

    /** the column name for the RECORD_NO field */
    const RECORD_NO = 'cigua.RECORD_NO';

    /** the column name for the C_Code field */
    const C_CODE = 'cigua.C_Code';

    /** the column name for the COUNTRY field */
    const COUNTRY = 'cigua.COUNTRY';

    /** the column name for the LOCATION field */
    const LOCATION = 'cigua.LOCATION';

    /** the column name for the LatitudeDeg field */
    const LATITUDEDEG = 'cigua.LatitudeDeg';

    /** the column name for the LatitudeMin field */
    const LATITUDEMIN = 'cigua.LatitudeMin';

    /** the column name for the NorthSouth field */
    const NORTHSOUTH = 'cigua.NorthSouth';

    /** the column name for the LongitudeDeg field */
    const LONGITUDEDEG = 'cigua.LongitudeDeg';

    /** the column name for the LongitudeMin field */
    const LONGITUDEMIN = 'cigua.LongitudeMin';

    /** the column name for the EastWest field */
    const EASTWEST = 'cigua.EastWest';

    /** the column name for the DATEREC field */
    const DATEREC = 'cigua.DATEREC';

    /** the column name for the FISH_Y_N field */
    const FISH_Y_N = 'cigua.FISH_Y_N';

    /** the column name for the CRAB field */
    const CRAB = 'cigua.CRAB';

    /** the column name for the LOBST field */
    const LOBST = 'cigua.LOBST';

    /** the column name for the OTHCRUST field */
    const OTHCRUST = 'cigua.OTHCRUST';

    /** the column name for the GASTR field */
    const GASTR = 'cigua.GASTR';

    /** the column name for the BIVALVE field */
    const BIVALVE = 'cigua.BIVALVE';

    /** the column name for the OTHER_MOLL field */
    const OTHER_MOLL = 'cigua.OTHER_MOLL';

    /** the column name for the BEACH field */
    const BEACH = 'cigua.BEACH';

    /** the column name for the REEF_PATCH field */
    const REEF_PATCH = 'cigua.REEF_PATCH';

    /** the column name for the LAGOON field */
    const LAGOON = 'cigua.LAGOON';

    /** the column name for the RIVER field */
    const RIVER = 'cigua.RIVER';

    /** the column name for the MANGROVE field */
    const MANGROVE = 'cigua.MANGROVE';

    /** the column name for the OUTER_REEF field */
    const OUTER_REEF = 'cigua.OUTER_REEF';

    /** the column name for the OPEN_SEA field */
    const OPEN_SEA = 'cigua.OPEN_SEA';

    /** the column name for the FRESHNOICE field */
    const FRESHNOICE = 'cigua.FRESHNOICE';

    /** the column name for the FRESH_CE field */
    const FRESH_CE = 'cigua.FRESH_CE';

    /** the column name for the FROZEN field */
    const FROZEN = 'cigua.FROZEN';

    /** the column name for the SALTED field */
    const SALTED = 'cigua.SALTED';

    /** the column name for the DRIED field */
    const DRIED = 'cigua.DRIED';

    /** the column name for the SMOKED field */
    const SMOKED = 'cigua.SMOKED';

    /** the column name for the PICKLED field */
    const PICKLED = 'cigua.PICKLED';

    /** the column name for the HEAD field */
    const HEAD = 'cigua.HEAD';

    /** the column name for the FLESH field */
    const FLESH = 'cigua.FLESH';

    /** the column name for the SKIN field */
    const SKIN = 'cigua.SKIN';

    /** the column name for the LIVER field */
    const LIVER = 'cigua.LIVER';

    /** the column name for the ROE field */
    const ROE = 'cigua.ROE';

    /** the column name for the OTHER_ORGA field */
    const OTHER_ORGA = 'cigua.OTHER_ORGA';

    /** the column name for the UNPREPARED field */
    const UNPREPARED = 'cigua.UNPREPARED';

    /** the column name for the MARINATED field */
    const MARINATED = 'cigua.MARINATED';

    /** the column name for the COOKED field */
    const COOKED = 'cigua.COOKED';

    /** the column name for the ATE_THIS_M field */
    const ATE_THIS_M = 'cigua.ATE_THIS_M';

    /** the column name for the FELT_SICK field */
    const FELT_SICK = 'cigua.FELT_SICK';

    /** the column name for the WERE_ADMIT field */
    const WERE_ADMIT = 'cigua.WERE_ADMIT';

    /** the column name for the LOCAL_NAME field */
    const LOCAL_NAME = 'cigua.LOCAL_NAME';

    /** the column name for the ENGLISH_NA field */
    const ENGLISH_NA = 'cigua.ENGLISH_NA';

    /** the column name for the SCIENTIFIC field */
    const SCIENTIFIC = 'cigua.SCIENTIFIC';

    /** the column name for the VENDOR field */
    const VENDOR = 'cigua.VENDOR';

    /** the column name for the AREACAUGHT field */
    const AREACAUGHT = 'cigua.AREACAUGHT';

    /** the column name for the DATE_EATEN field */
    const DATE_EATEN = 'cigua.DATE_EATEN';

    /** the column name for the TIME_EATEN field */
    const TIME_EATEN = 'cigua.TIME_EATEN';

    /** the column name for the DATE_SICK field */
    const DATE_SICK = 'cigua.DATE_SICK';

    /** the column name for the TIME_SICK field */
    const TIME_SICK = 'cigua.TIME_SICK';

    /** the column name for the BURNING_PA field */
    const BURNING_PA = 'cigua.BURNING_PA';

    /** the column name for the TINGLING_N field */
    const TINGLING_N = 'cigua.TINGLING_N';

    /** the column name for the URINATE_DI field */
    const URINATE_DI = 'cigua.URINATE_DI';

    /** the column name for the DIFFICULTW field */
    const DIFFICULTW = 'cigua.DIFFICULTW';

    /** the column name for the DIFFICULTT field */
    const DIFFICULTT = 'cigua.DIFFICULTT';

    /** the column name for the DIFFICULTY field */
    const DIFFICULTY = 'cigua.DIFFICULTY';

    /** the column name for the EYE_IRRITA field */
    const EYE_IRRITA = 'cigua.EYE_IRRITA';

    /** the column name for the PIN_PRICKI field */
    const PIN_PRICKI = 'cigua.PIN_PRICKI';

    /** the column name for the STRANGE_TA field */
    const STRANGE_TA = 'cigua.STRANGE_TA';

    /** the column name for the SKIN_ITCHI field */
    const SKIN_ITCHI = 'cigua.SKIN_ITCHI';

    /** the column name for the EXCESS_SAL field */
    const EXCESS_SAL = 'cigua.EXCESS_SAL';

    /** the column name for the EXCESS_SWT field */
    const EXCESS_SWT = 'cigua.EXCESS_SWT';

    /** the column name for the DIARRHOEA field */
    const DIARRHOEA = 'cigua.DIARRHOEA';

    /** the column name for the VOMITING field */
    const VOMITING = 'cigua.VOMITING';

    /** the column name for the FEVER_CHIL field */
    const FEVER_CHIL = 'cigua.FEVER_CHIL';

    /** the column name for the HEADACHE field */
    const HEADACHE = 'cigua.HEADACHE';

    /** the column name for the JOINT_ACHE field */
    const JOINT_ACHE = 'cigua.JOINT_ACHE';

    /** the column name for the MUSCLE_CRA field */
    const MUSCLE_CRA = 'cigua.MUSCLE_CRA';

    /** the column name for the PULSE field */
    const PULSE = 'cigua.PULSE';

    /** the column name for the SYSTOLIC field */
    const SYSTOLIC = 'cigua.SYSTOLIC';

    /** the column name for the DIASTOLIC field */
    const DIASTOLIC = 'cigua.DIASTOLIC';

    /** the column name for the PUPILS field */
    const PUPILS = 'cigua.PUPILS';

    /** the column name for the DEATH field */
    const DEATH = 'cigua.DEATH';

    /** the column name for the COMMENTS field */
    const COMMENTS = 'cigua.COMMENTS';

    /** the column name for the FamCode field */
    const FAMCODE = 'cigua.FamCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'cigua.SpecCode';

    /** the column name for the Genus field */
    const GENUS = 'cigua.Genus';

    /** the column name for the Species field */
    const SPECIES = 'cigua.Species';

    /** the column name for the Entered field */
    const ENTERED = 'cigua.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'cigua.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'cigua.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'cigua.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'cigua.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'cigua.DateChecked';

    /** the column name for the TS field */
    const TS = 'cigua.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Cigua objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Cigua[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CiguaPeer::$fieldNames[CiguaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'RecordNo', 'CCode', 'Country', 'Location', 'Latitudedeg', 'Latitudemin', 'Northsouth', 'Longitudedeg', 'Longitudemin', 'Eastwest', 'Daterec', 'FishYN', 'Crab', 'Lobst', 'Othcrust', 'Gastr', 'Bivalve', 'OtherMoll', 'Beach', 'ReefPatch', 'Lagoon', 'River', 'Mangrove', 'OuterReef', 'OpenSea', 'Freshnoice', 'FreshCe', 'Frozen', 'Salted', 'Dried', 'Smoked', 'Pickled', 'Head', 'Flesh', 'Skin', 'Liver', 'Roe', 'OtherOrga', 'Unprepared', 'Marinated', 'Cooked', 'AteThisM', 'FeltSick', 'WereAdmit', 'LocalName', 'EnglishNa', 'Scientific', 'Vendor', 'Areacaught', 'DateEaten', 'TimeEaten', 'DateSick', 'TimeSick', 'BurningPa', 'TinglingN', 'UrinateDi', 'Difficultw', 'Difficultt', 'Difficulty', 'EyeIrrita', 'PinPricki', 'StrangeTa', 'SkinItchi', 'ExcessSal', 'ExcessSwt', 'Diarrhoea', 'Vomiting', 'FeverChil', 'Headache', 'JointAche', 'MuscleCra', 'Pulse', 'Systolic', 'Diastolic', 'Pupils', 'Death', 'Comments', 'Famcode', 'Speccode', 'Genus', 'Species', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'recordNo', 'cCode', 'country', 'location', 'latitudedeg', 'latitudemin', 'northsouth', 'longitudedeg', 'longitudemin', 'eastwest', 'daterec', 'fishYN', 'crab', 'lobst', 'othcrust', 'gastr', 'bivalve', 'otherMoll', 'beach', 'reefPatch', 'lagoon', 'river', 'mangrove', 'outerReef', 'openSea', 'freshnoice', 'freshCe', 'frozen', 'salted', 'dried', 'smoked', 'pickled', 'head', 'flesh', 'skin', 'liver', 'roe', 'otherOrga', 'unprepared', 'marinated', 'cooked', 'ateThisM', 'feltSick', 'wereAdmit', 'localName', 'englishNa', 'scientific', 'vendor', 'areacaught', 'dateEaten', 'timeEaten', 'dateSick', 'timeSick', 'burningPa', 'tinglingN', 'urinateDi', 'difficultw', 'difficultt', 'difficulty', 'eyeIrrita', 'pinPricki', 'strangeTa', 'skinItchi', 'excessSal', 'excessSwt', 'diarrhoea', 'vomiting', 'feverChil', 'headache', 'jointAche', 'muscleCra', 'pulse', 'systolic', 'diastolic', 'pupils', 'death', 'comments', 'famcode', 'speccode', 'genus', 'species', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (CiguaPeer::AUTOCTR, CiguaPeer::RECORD_NO, CiguaPeer::C_CODE, CiguaPeer::COUNTRY, CiguaPeer::LOCATION, CiguaPeer::LATITUDEDEG, CiguaPeer::LATITUDEMIN, CiguaPeer::NORTHSOUTH, CiguaPeer::LONGITUDEDEG, CiguaPeer::LONGITUDEMIN, CiguaPeer::EASTWEST, CiguaPeer::DATEREC, CiguaPeer::FISH_Y_N, CiguaPeer::CRAB, CiguaPeer::LOBST, CiguaPeer::OTHCRUST, CiguaPeer::GASTR, CiguaPeer::BIVALVE, CiguaPeer::OTHER_MOLL, CiguaPeer::BEACH, CiguaPeer::REEF_PATCH, CiguaPeer::LAGOON, CiguaPeer::RIVER, CiguaPeer::MANGROVE, CiguaPeer::OUTER_REEF, CiguaPeer::OPEN_SEA, CiguaPeer::FRESHNOICE, CiguaPeer::FRESH_CE, CiguaPeer::FROZEN, CiguaPeer::SALTED, CiguaPeer::DRIED, CiguaPeer::SMOKED, CiguaPeer::PICKLED, CiguaPeer::HEAD, CiguaPeer::FLESH, CiguaPeer::SKIN, CiguaPeer::LIVER, CiguaPeer::ROE, CiguaPeer::OTHER_ORGA, CiguaPeer::UNPREPARED, CiguaPeer::MARINATED, CiguaPeer::COOKED, CiguaPeer::ATE_THIS_M, CiguaPeer::FELT_SICK, CiguaPeer::WERE_ADMIT, CiguaPeer::LOCAL_NAME, CiguaPeer::ENGLISH_NA, CiguaPeer::SCIENTIFIC, CiguaPeer::VENDOR, CiguaPeer::AREACAUGHT, CiguaPeer::DATE_EATEN, CiguaPeer::TIME_EATEN, CiguaPeer::DATE_SICK, CiguaPeer::TIME_SICK, CiguaPeer::BURNING_PA, CiguaPeer::TINGLING_N, CiguaPeer::URINATE_DI, CiguaPeer::DIFFICULTW, CiguaPeer::DIFFICULTT, CiguaPeer::DIFFICULTY, CiguaPeer::EYE_IRRITA, CiguaPeer::PIN_PRICKI, CiguaPeer::STRANGE_TA, CiguaPeer::SKIN_ITCHI, CiguaPeer::EXCESS_SAL, CiguaPeer::EXCESS_SWT, CiguaPeer::DIARRHOEA, CiguaPeer::VOMITING, CiguaPeer::FEVER_CHIL, CiguaPeer::HEADACHE, CiguaPeer::JOINT_ACHE, CiguaPeer::MUSCLE_CRA, CiguaPeer::PULSE, CiguaPeer::SYSTOLIC, CiguaPeer::DIASTOLIC, CiguaPeer::PUPILS, CiguaPeer::DEATH, CiguaPeer::COMMENTS, CiguaPeer::FAMCODE, CiguaPeer::SPECCODE, CiguaPeer::GENUS, CiguaPeer::SPECIES, CiguaPeer::ENTERED, CiguaPeer::DATEENTERED, CiguaPeer::MODIFIED, CiguaPeer::DATEMODIFIED, CiguaPeer::EXPERT, CiguaPeer::DATECHECKED, CiguaPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'RECORD_NO', 'C_CODE', 'COUNTRY', 'LOCATION', 'LATITUDEDEG', 'LATITUDEMIN', 'NORTHSOUTH', 'LONGITUDEDEG', 'LONGITUDEMIN', 'EASTWEST', 'DATEREC', 'FISH_Y_N', 'CRAB', 'LOBST', 'OTHCRUST', 'GASTR', 'BIVALVE', 'OTHER_MOLL', 'BEACH', 'REEF_PATCH', 'LAGOON', 'RIVER', 'MANGROVE', 'OUTER_REEF', 'OPEN_SEA', 'FRESHNOICE', 'FRESH_CE', 'FROZEN', 'SALTED', 'DRIED', 'SMOKED', 'PICKLED', 'HEAD', 'FLESH', 'SKIN', 'LIVER', 'ROE', 'OTHER_ORGA', 'UNPREPARED', 'MARINATED', 'COOKED', 'ATE_THIS_M', 'FELT_SICK', 'WERE_ADMIT', 'LOCAL_NAME', 'ENGLISH_NA', 'SCIENTIFIC', 'VENDOR', 'AREACAUGHT', 'DATE_EATEN', 'TIME_EATEN', 'DATE_SICK', 'TIME_SICK', 'BURNING_PA', 'TINGLING_N', 'URINATE_DI', 'DIFFICULTW', 'DIFFICULTT', 'DIFFICULTY', 'EYE_IRRITA', 'PIN_PRICKI', 'STRANGE_TA', 'SKIN_ITCHI', 'EXCESS_SAL', 'EXCESS_SWT', 'DIARRHOEA', 'VOMITING', 'FEVER_CHIL', 'HEADACHE', 'JOINT_ACHE', 'MUSCLE_CRA', 'PULSE', 'SYSTOLIC', 'DIASTOLIC', 'PUPILS', 'DEATH', 'COMMENTS', 'FAMCODE', 'SPECCODE', 'GENUS', 'SPECIES', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr', 'RECORD_NO', 'C_Code', 'COUNTRY', 'LOCATION', 'LatitudeDeg', 'LatitudeMin', 'NorthSouth', 'LongitudeDeg', 'LongitudeMin', 'EastWest', 'DATEREC', 'FISH_Y_N', 'CRAB', 'LOBST', 'OTHCRUST', 'GASTR', 'BIVALVE', 'OTHER_MOLL', 'BEACH', 'REEF_PATCH', 'LAGOON', 'RIVER', 'MANGROVE', 'OUTER_REEF', 'OPEN_SEA', 'FRESHNOICE', 'FRESH_CE', 'FROZEN', 'SALTED', 'DRIED', 'SMOKED', 'PICKLED', 'HEAD', 'FLESH', 'SKIN', 'LIVER', 'ROE', 'OTHER_ORGA', 'UNPREPARED', 'MARINATED', 'COOKED', 'ATE_THIS_M', 'FELT_SICK', 'WERE_ADMIT', 'LOCAL_NAME', 'ENGLISH_NA', 'SCIENTIFIC', 'VENDOR', 'AREACAUGHT', 'DATE_EATEN', 'TIME_EATEN', 'DATE_SICK', 'TIME_SICK', 'BURNING_PA', 'TINGLING_N', 'URINATE_DI', 'DIFFICULTW', 'DIFFICULTT', 'DIFFICULTY', 'EYE_IRRITA', 'PIN_PRICKI', 'STRANGE_TA', 'SKIN_ITCHI', 'EXCESS_SAL', 'EXCESS_SWT', 'DIARRHOEA', 'VOMITING', 'FEVER_CHIL', 'HEADACHE', 'JOINT_ACHE', 'MUSCLE_CRA', 'PULSE', 'SYSTOLIC', 'DIASTOLIC', 'PUPILS', 'DEATH', 'COMMENTS', 'FamCode', 'SpecCode', 'Genus', 'Species', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CiguaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'RecordNo' => 1, 'CCode' => 2, 'Country' => 3, 'Location' => 4, 'Latitudedeg' => 5, 'Latitudemin' => 6, 'Northsouth' => 7, 'Longitudedeg' => 8, 'Longitudemin' => 9, 'Eastwest' => 10, 'Daterec' => 11, 'FishYN' => 12, 'Crab' => 13, 'Lobst' => 14, 'Othcrust' => 15, 'Gastr' => 16, 'Bivalve' => 17, 'OtherMoll' => 18, 'Beach' => 19, 'ReefPatch' => 20, 'Lagoon' => 21, 'River' => 22, 'Mangrove' => 23, 'OuterReef' => 24, 'OpenSea' => 25, 'Freshnoice' => 26, 'FreshCe' => 27, 'Frozen' => 28, 'Salted' => 29, 'Dried' => 30, 'Smoked' => 31, 'Pickled' => 32, 'Head' => 33, 'Flesh' => 34, 'Skin' => 35, 'Liver' => 36, 'Roe' => 37, 'OtherOrga' => 38, 'Unprepared' => 39, 'Marinated' => 40, 'Cooked' => 41, 'AteThisM' => 42, 'FeltSick' => 43, 'WereAdmit' => 44, 'LocalName' => 45, 'EnglishNa' => 46, 'Scientific' => 47, 'Vendor' => 48, 'Areacaught' => 49, 'DateEaten' => 50, 'TimeEaten' => 51, 'DateSick' => 52, 'TimeSick' => 53, 'BurningPa' => 54, 'TinglingN' => 55, 'UrinateDi' => 56, 'Difficultw' => 57, 'Difficultt' => 58, 'Difficulty' => 59, 'EyeIrrita' => 60, 'PinPricki' => 61, 'StrangeTa' => 62, 'SkinItchi' => 63, 'ExcessSal' => 64, 'ExcessSwt' => 65, 'Diarrhoea' => 66, 'Vomiting' => 67, 'FeverChil' => 68, 'Headache' => 69, 'JointAche' => 70, 'MuscleCra' => 71, 'Pulse' => 72, 'Systolic' => 73, 'Diastolic' => 74, 'Pupils' => 75, 'Death' => 76, 'Comments' => 77, 'Famcode' => 78, 'Speccode' => 79, 'Genus' => 80, 'Species' => 81, 'Entered' => 82, 'Dateentered' => 83, 'Modified' => 84, 'Datemodified' => 85, 'Expert' => 86, 'Datechecked' => 87, 'Ts' => 88, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'recordNo' => 1, 'cCode' => 2, 'country' => 3, 'location' => 4, 'latitudedeg' => 5, 'latitudemin' => 6, 'northsouth' => 7, 'longitudedeg' => 8, 'longitudemin' => 9, 'eastwest' => 10, 'daterec' => 11, 'fishYN' => 12, 'crab' => 13, 'lobst' => 14, 'othcrust' => 15, 'gastr' => 16, 'bivalve' => 17, 'otherMoll' => 18, 'beach' => 19, 'reefPatch' => 20, 'lagoon' => 21, 'river' => 22, 'mangrove' => 23, 'outerReef' => 24, 'openSea' => 25, 'freshnoice' => 26, 'freshCe' => 27, 'frozen' => 28, 'salted' => 29, 'dried' => 30, 'smoked' => 31, 'pickled' => 32, 'head' => 33, 'flesh' => 34, 'skin' => 35, 'liver' => 36, 'roe' => 37, 'otherOrga' => 38, 'unprepared' => 39, 'marinated' => 40, 'cooked' => 41, 'ateThisM' => 42, 'feltSick' => 43, 'wereAdmit' => 44, 'localName' => 45, 'englishNa' => 46, 'scientific' => 47, 'vendor' => 48, 'areacaught' => 49, 'dateEaten' => 50, 'timeEaten' => 51, 'dateSick' => 52, 'timeSick' => 53, 'burningPa' => 54, 'tinglingN' => 55, 'urinateDi' => 56, 'difficultw' => 57, 'difficultt' => 58, 'difficulty' => 59, 'eyeIrrita' => 60, 'pinPricki' => 61, 'strangeTa' => 62, 'skinItchi' => 63, 'excessSal' => 64, 'excessSwt' => 65, 'diarrhoea' => 66, 'vomiting' => 67, 'feverChil' => 68, 'headache' => 69, 'jointAche' => 70, 'muscleCra' => 71, 'pulse' => 72, 'systolic' => 73, 'diastolic' => 74, 'pupils' => 75, 'death' => 76, 'comments' => 77, 'famcode' => 78, 'speccode' => 79, 'genus' => 80, 'species' => 81, 'entered' => 82, 'dateentered' => 83, 'modified' => 84, 'datemodified' => 85, 'expert' => 86, 'datechecked' => 87, 'ts' => 88, ),
        BasePeer::TYPE_COLNAME => array (CiguaPeer::AUTOCTR => 0, CiguaPeer::RECORD_NO => 1, CiguaPeer::C_CODE => 2, CiguaPeer::COUNTRY => 3, CiguaPeer::LOCATION => 4, CiguaPeer::LATITUDEDEG => 5, CiguaPeer::LATITUDEMIN => 6, CiguaPeer::NORTHSOUTH => 7, CiguaPeer::LONGITUDEDEG => 8, CiguaPeer::LONGITUDEMIN => 9, CiguaPeer::EASTWEST => 10, CiguaPeer::DATEREC => 11, CiguaPeer::FISH_Y_N => 12, CiguaPeer::CRAB => 13, CiguaPeer::LOBST => 14, CiguaPeer::OTHCRUST => 15, CiguaPeer::GASTR => 16, CiguaPeer::BIVALVE => 17, CiguaPeer::OTHER_MOLL => 18, CiguaPeer::BEACH => 19, CiguaPeer::REEF_PATCH => 20, CiguaPeer::LAGOON => 21, CiguaPeer::RIVER => 22, CiguaPeer::MANGROVE => 23, CiguaPeer::OUTER_REEF => 24, CiguaPeer::OPEN_SEA => 25, CiguaPeer::FRESHNOICE => 26, CiguaPeer::FRESH_CE => 27, CiguaPeer::FROZEN => 28, CiguaPeer::SALTED => 29, CiguaPeer::DRIED => 30, CiguaPeer::SMOKED => 31, CiguaPeer::PICKLED => 32, CiguaPeer::HEAD => 33, CiguaPeer::FLESH => 34, CiguaPeer::SKIN => 35, CiguaPeer::LIVER => 36, CiguaPeer::ROE => 37, CiguaPeer::OTHER_ORGA => 38, CiguaPeer::UNPREPARED => 39, CiguaPeer::MARINATED => 40, CiguaPeer::COOKED => 41, CiguaPeer::ATE_THIS_M => 42, CiguaPeer::FELT_SICK => 43, CiguaPeer::WERE_ADMIT => 44, CiguaPeer::LOCAL_NAME => 45, CiguaPeer::ENGLISH_NA => 46, CiguaPeer::SCIENTIFIC => 47, CiguaPeer::VENDOR => 48, CiguaPeer::AREACAUGHT => 49, CiguaPeer::DATE_EATEN => 50, CiguaPeer::TIME_EATEN => 51, CiguaPeer::DATE_SICK => 52, CiguaPeer::TIME_SICK => 53, CiguaPeer::BURNING_PA => 54, CiguaPeer::TINGLING_N => 55, CiguaPeer::URINATE_DI => 56, CiguaPeer::DIFFICULTW => 57, CiguaPeer::DIFFICULTT => 58, CiguaPeer::DIFFICULTY => 59, CiguaPeer::EYE_IRRITA => 60, CiguaPeer::PIN_PRICKI => 61, CiguaPeer::STRANGE_TA => 62, CiguaPeer::SKIN_ITCHI => 63, CiguaPeer::EXCESS_SAL => 64, CiguaPeer::EXCESS_SWT => 65, CiguaPeer::DIARRHOEA => 66, CiguaPeer::VOMITING => 67, CiguaPeer::FEVER_CHIL => 68, CiguaPeer::HEADACHE => 69, CiguaPeer::JOINT_ACHE => 70, CiguaPeer::MUSCLE_CRA => 71, CiguaPeer::PULSE => 72, CiguaPeer::SYSTOLIC => 73, CiguaPeer::DIASTOLIC => 74, CiguaPeer::PUPILS => 75, CiguaPeer::DEATH => 76, CiguaPeer::COMMENTS => 77, CiguaPeer::FAMCODE => 78, CiguaPeer::SPECCODE => 79, CiguaPeer::GENUS => 80, CiguaPeer::SPECIES => 81, CiguaPeer::ENTERED => 82, CiguaPeer::DATEENTERED => 83, CiguaPeer::MODIFIED => 84, CiguaPeer::DATEMODIFIED => 85, CiguaPeer::EXPERT => 86, CiguaPeer::DATECHECKED => 87, CiguaPeer::TS => 88, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'RECORD_NO' => 1, 'C_CODE' => 2, 'COUNTRY' => 3, 'LOCATION' => 4, 'LATITUDEDEG' => 5, 'LATITUDEMIN' => 6, 'NORTHSOUTH' => 7, 'LONGITUDEDEG' => 8, 'LONGITUDEMIN' => 9, 'EASTWEST' => 10, 'DATEREC' => 11, 'FISH_Y_N' => 12, 'CRAB' => 13, 'LOBST' => 14, 'OTHCRUST' => 15, 'GASTR' => 16, 'BIVALVE' => 17, 'OTHER_MOLL' => 18, 'BEACH' => 19, 'REEF_PATCH' => 20, 'LAGOON' => 21, 'RIVER' => 22, 'MANGROVE' => 23, 'OUTER_REEF' => 24, 'OPEN_SEA' => 25, 'FRESHNOICE' => 26, 'FRESH_CE' => 27, 'FROZEN' => 28, 'SALTED' => 29, 'DRIED' => 30, 'SMOKED' => 31, 'PICKLED' => 32, 'HEAD' => 33, 'FLESH' => 34, 'SKIN' => 35, 'LIVER' => 36, 'ROE' => 37, 'OTHER_ORGA' => 38, 'UNPREPARED' => 39, 'MARINATED' => 40, 'COOKED' => 41, 'ATE_THIS_M' => 42, 'FELT_SICK' => 43, 'WERE_ADMIT' => 44, 'LOCAL_NAME' => 45, 'ENGLISH_NA' => 46, 'SCIENTIFIC' => 47, 'VENDOR' => 48, 'AREACAUGHT' => 49, 'DATE_EATEN' => 50, 'TIME_EATEN' => 51, 'DATE_SICK' => 52, 'TIME_SICK' => 53, 'BURNING_PA' => 54, 'TINGLING_N' => 55, 'URINATE_DI' => 56, 'DIFFICULTW' => 57, 'DIFFICULTT' => 58, 'DIFFICULTY' => 59, 'EYE_IRRITA' => 60, 'PIN_PRICKI' => 61, 'STRANGE_TA' => 62, 'SKIN_ITCHI' => 63, 'EXCESS_SAL' => 64, 'EXCESS_SWT' => 65, 'DIARRHOEA' => 66, 'VOMITING' => 67, 'FEVER_CHIL' => 68, 'HEADACHE' => 69, 'JOINT_ACHE' => 70, 'MUSCLE_CRA' => 71, 'PULSE' => 72, 'SYSTOLIC' => 73, 'DIASTOLIC' => 74, 'PUPILS' => 75, 'DEATH' => 76, 'COMMENTS' => 77, 'FAMCODE' => 78, 'SPECCODE' => 79, 'GENUS' => 80, 'SPECIES' => 81, 'ENTERED' => 82, 'DATEENTERED' => 83, 'MODIFIED' => 84, 'DATEMODIFIED' => 85, 'EXPERT' => 86, 'DATECHECKED' => 87, 'TS' => 88, ),
        BasePeer::TYPE_FIELDNAME => array ('AutoCtr' => 0, 'RECORD_NO' => 1, 'C_Code' => 2, 'COUNTRY' => 3, 'LOCATION' => 4, 'LatitudeDeg' => 5, 'LatitudeMin' => 6, 'NorthSouth' => 7, 'LongitudeDeg' => 8, 'LongitudeMin' => 9, 'EastWest' => 10, 'DATEREC' => 11, 'FISH_Y_N' => 12, 'CRAB' => 13, 'LOBST' => 14, 'OTHCRUST' => 15, 'GASTR' => 16, 'BIVALVE' => 17, 'OTHER_MOLL' => 18, 'BEACH' => 19, 'REEF_PATCH' => 20, 'LAGOON' => 21, 'RIVER' => 22, 'MANGROVE' => 23, 'OUTER_REEF' => 24, 'OPEN_SEA' => 25, 'FRESHNOICE' => 26, 'FRESH_CE' => 27, 'FROZEN' => 28, 'SALTED' => 29, 'DRIED' => 30, 'SMOKED' => 31, 'PICKLED' => 32, 'HEAD' => 33, 'FLESH' => 34, 'SKIN' => 35, 'LIVER' => 36, 'ROE' => 37, 'OTHER_ORGA' => 38, 'UNPREPARED' => 39, 'MARINATED' => 40, 'COOKED' => 41, 'ATE_THIS_M' => 42, 'FELT_SICK' => 43, 'WERE_ADMIT' => 44, 'LOCAL_NAME' => 45, 'ENGLISH_NA' => 46, 'SCIENTIFIC' => 47, 'VENDOR' => 48, 'AREACAUGHT' => 49, 'DATE_EATEN' => 50, 'TIME_EATEN' => 51, 'DATE_SICK' => 52, 'TIME_SICK' => 53, 'BURNING_PA' => 54, 'TINGLING_N' => 55, 'URINATE_DI' => 56, 'DIFFICULTW' => 57, 'DIFFICULTT' => 58, 'DIFFICULTY' => 59, 'EYE_IRRITA' => 60, 'PIN_PRICKI' => 61, 'STRANGE_TA' => 62, 'SKIN_ITCHI' => 63, 'EXCESS_SAL' => 64, 'EXCESS_SWT' => 65, 'DIARRHOEA' => 66, 'VOMITING' => 67, 'FEVER_CHIL' => 68, 'HEADACHE' => 69, 'JOINT_ACHE' => 70, 'MUSCLE_CRA' => 71, 'PULSE' => 72, 'SYSTOLIC' => 73, 'DIASTOLIC' => 74, 'PUPILS' => 75, 'DEATH' => 76, 'COMMENTS' => 77, 'FamCode' => 78, 'SpecCode' => 79, 'Genus' => 80, 'Species' => 81, 'Entered' => 82, 'DateEntered' => 83, 'Modified' => 84, 'DateModified' => 85, 'Expert' => 86, 'DateChecked' => 87, 'TS' => 88, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, )
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
        $toNames = CiguaPeer::getFieldNames($toType);
        $key = isset(CiguaPeer::$fieldKeys[$fromType][$name]) ? CiguaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CiguaPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CiguaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CiguaPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CiguaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CiguaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CiguaPeer::AUTOCTR);
            $criteria->addSelectColumn(CiguaPeer::RECORD_NO);
            $criteria->addSelectColumn(CiguaPeer::C_CODE);
            $criteria->addSelectColumn(CiguaPeer::COUNTRY);
            $criteria->addSelectColumn(CiguaPeer::LOCATION);
            $criteria->addSelectColumn(CiguaPeer::LATITUDEDEG);
            $criteria->addSelectColumn(CiguaPeer::LATITUDEMIN);
            $criteria->addSelectColumn(CiguaPeer::NORTHSOUTH);
            $criteria->addSelectColumn(CiguaPeer::LONGITUDEDEG);
            $criteria->addSelectColumn(CiguaPeer::LONGITUDEMIN);
            $criteria->addSelectColumn(CiguaPeer::EASTWEST);
            $criteria->addSelectColumn(CiguaPeer::DATEREC);
            $criteria->addSelectColumn(CiguaPeer::FISH_Y_N);
            $criteria->addSelectColumn(CiguaPeer::CRAB);
            $criteria->addSelectColumn(CiguaPeer::LOBST);
            $criteria->addSelectColumn(CiguaPeer::OTHCRUST);
            $criteria->addSelectColumn(CiguaPeer::GASTR);
            $criteria->addSelectColumn(CiguaPeer::BIVALVE);
            $criteria->addSelectColumn(CiguaPeer::OTHER_MOLL);
            $criteria->addSelectColumn(CiguaPeer::BEACH);
            $criteria->addSelectColumn(CiguaPeer::REEF_PATCH);
            $criteria->addSelectColumn(CiguaPeer::LAGOON);
            $criteria->addSelectColumn(CiguaPeer::RIVER);
            $criteria->addSelectColumn(CiguaPeer::MANGROVE);
            $criteria->addSelectColumn(CiguaPeer::OUTER_REEF);
            $criteria->addSelectColumn(CiguaPeer::OPEN_SEA);
            $criteria->addSelectColumn(CiguaPeer::FRESHNOICE);
            $criteria->addSelectColumn(CiguaPeer::FRESH_CE);
            $criteria->addSelectColumn(CiguaPeer::FROZEN);
            $criteria->addSelectColumn(CiguaPeer::SALTED);
            $criteria->addSelectColumn(CiguaPeer::DRIED);
            $criteria->addSelectColumn(CiguaPeer::SMOKED);
            $criteria->addSelectColumn(CiguaPeer::PICKLED);
            $criteria->addSelectColumn(CiguaPeer::HEAD);
            $criteria->addSelectColumn(CiguaPeer::FLESH);
            $criteria->addSelectColumn(CiguaPeer::SKIN);
            $criteria->addSelectColumn(CiguaPeer::LIVER);
            $criteria->addSelectColumn(CiguaPeer::ROE);
            $criteria->addSelectColumn(CiguaPeer::OTHER_ORGA);
            $criteria->addSelectColumn(CiguaPeer::UNPREPARED);
            $criteria->addSelectColumn(CiguaPeer::MARINATED);
            $criteria->addSelectColumn(CiguaPeer::COOKED);
            $criteria->addSelectColumn(CiguaPeer::ATE_THIS_M);
            $criteria->addSelectColumn(CiguaPeer::FELT_SICK);
            $criteria->addSelectColumn(CiguaPeer::WERE_ADMIT);
            $criteria->addSelectColumn(CiguaPeer::LOCAL_NAME);
            $criteria->addSelectColumn(CiguaPeer::ENGLISH_NA);
            $criteria->addSelectColumn(CiguaPeer::SCIENTIFIC);
            $criteria->addSelectColumn(CiguaPeer::VENDOR);
            $criteria->addSelectColumn(CiguaPeer::AREACAUGHT);
            $criteria->addSelectColumn(CiguaPeer::DATE_EATEN);
            $criteria->addSelectColumn(CiguaPeer::TIME_EATEN);
            $criteria->addSelectColumn(CiguaPeer::DATE_SICK);
            $criteria->addSelectColumn(CiguaPeer::TIME_SICK);
            $criteria->addSelectColumn(CiguaPeer::BURNING_PA);
            $criteria->addSelectColumn(CiguaPeer::TINGLING_N);
            $criteria->addSelectColumn(CiguaPeer::URINATE_DI);
            $criteria->addSelectColumn(CiguaPeer::DIFFICULTW);
            $criteria->addSelectColumn(CiguaPeer::DIFFICULTT);
            $criteria->addSelectColumn(CiguaPeer::DIFFICULTY);
            $criteria->addSelectColumn(CiguaPeer::EYE_IRRITA);
            $criteria->addSelectColumn(CiguaPeer::PIN_PRICKI);
            $criteria->addSelectColumn(CiguaPeer::STRANGE_TA);
            $criteria->addSelectColumn(CiguaPeer::SKIN_ITCHI);
            $criteria->addSelectColumn(CiguaPeer::EXCESS_SAL);
            $criteria->addSelectColumn(CiguaPeer::EXCESS_SWT);
            $criteria->addSelectColumn(CiguaPeer::DIARRHOEA);
            $criteria->addSelectColumn(CiguaPeer::VOMITING);
            $criteria->addSelectColumn(CiguaPeer::FEVER_CHIL);
            $criteria->addSelectColumn(CiguaPeer::HEADACHE);
            $criteria->addSelectColumn(CiguaPeer::JOINT_ACHE);
            $criteria->addSelectColumn(CiguaPeer::MUSCLE_CRA);
            $criteria->addSelectColumn(CiguaPeer::PULSE);
            $criteria->addSelectColumn(CiguaPeer::SYSTOLIC);
            $criteria->addSelectColumn(CiguaPeer::DIASTOLIC);
            $criteria->addSelectColumn(CiguaPeer::PUPILS);
            $criteria->addSelectColumn(CiguaPeer::DEATH);
            $criteria->addSelectColumn(CiguaPeer::COMMENTS);
            $criteria->addSelectColumn(CiguaPeer::FAMCODE);
            $criteria->addSelectColumn(CiguaPeer::SPECCODE);
            $criteria->addSelectColumn(CiguaPeer::GENUS);
            $criteria->addSelectColumn(CiguaPeer::SPECIES);
            $criteria->addSelectColumn(CiguaPeer::ENTERED);
            $criteria->addSelectColumn(CiguaPeer::DATEENTERED);
            $criteria->addSelectColumn(CiguaPeer::MODIFIED);
            $criteria->addSelectColumn(CiguaPeer::DATEMODIFIED);
            $criteria->addSelectColumn(CiguaPeer::EXPERT);
            $criteria->addSelectColumn(CiguaPeer::DATECHECKED);
            $criteria->addSelectColumn(CiguaPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.AutoCtr');
            $criteria->addSelectColumn($alias . '.RECORD_NO');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.COUNTRY');
            $criteria->addSelectColumn($alias . '.LOCATION');
            $criteria->addSelectColumn($alias . '.LatitudeDeg');
            $criteria->addSelectColumn($alias . '.LatitudeMin');
            $criteria->addSelectColumn($alias . '.NorthSouth');
            $criteria->addSelectColumn($alias . '.LongitudeDeg');
            $criteria->addSelectColumn($alias . '.LongitudeMin');
            $criteria->addSelectColumn($alias . '.EastWest');
            $criteria->addSelectColumn($alias . '.DATEREC');
            $criteria->addSelectColumn($alias . '.FISH_Y_N');
            $criteria->addSelectColumn($alias . '.CRAB');
            $criteria->addSelectColumn($alias . '.LOBST');
            $criteria->addSelectColumn($alias . '.OTHCRUST');
            $criteria->addSelectColumn($alias . '.GASTR');
            $criteria->addSelectColumn($alias . '.BIVALVE');
            $criteria->addSelectColumn($alias . '.OTHER_MOLL');
            $criteria->addSelectColumn($alias . '.BEACH');
            $criteria->addSelectColumn($alias . '.REEF_PATCH');
            $criteria->addSelectColumn($alias . '.LAGOON');
            $criteria->addSelectColumn($alias . '.RIVER');
            $criteria->addSelectColumn($alias . '.MANGROVE');
            $criteria->addSelectColumn($alias . '.OUTER_REEF');
            $criteria->addSelectColumn($alias . '.OPEN_SEA');
            $criteria->addSelectColumn($alias . '.FRESHNOICE');
            $criteria->addSelectColumn($alias . '.FRESH_CE');
            $criteria->addSelectColumn($alias . '.FROZEN');
            $criteria->addSelectColumn($alias . '.SALTED');
            $criteria->addSelectColumn($alias . '.DRIED');
            $criteria->addSelectColumn($alias . '.SMOKED');
            $criteria->addSelectColumn($alias . '.PICKLED');
            $criteria->addSelectColumn($alias . '.HEAD');
            $criteria->addSelectColumn($alias . '.FLESH');
            $criteria->addSelectColumn($alias . '.SKIN');
            $criteria->addSelectColumn($alias . '.LIVER');
            $criteria->addSelectColumn($alias . '.ROE');
            $criteria->addSelectColumn($alias . '.OTHER_ORGA');
            $criteria->addSelectColumn($alias . '.UNPREPARED');
            $criteria->addSelectColumn($alias . '.MARINATED');
            $criteria->addSelectColumn($alias . '.COOKED');
            $criteria->addSelectColumn($alias . '.ATE_THIS_M');
            $criteria->addSelectColumn($alias . '.FELT_SICK');
            $criteria->addSelectColumn($alias . '.WERE_ADMIT');
            $criteria->addSelectColumn($alias . '.LOCAL_NAME');
            $criteria->addSelectColumn($alias . '.ENGLISH_NA');
            $criteria->addSelectColumn($alias . '.SCIENTIFIC');
            $criteria->addSelectColumn($alias . '.VENDOR');
            $criteria->addSelectColumn($alias . '.AREACAUGHT');
            $criteria->addSelectColumn($alias . '.DATE_EATEN');
            $criteria->addSelectColumn($alias . '.TIME_EATEN');
            $criteria->addSelectColumn($alias . '.DATE_SICK');
            $criteria->addSelectColumn($alias . '.TIME_SICK');
            $criteria->addSelectColumn($alias . '.BURNING_PA');
            $criteria->addSelectColumn($alias . '.TINGLING_N');
            $criteria->addSelectColumn($alias . '.URINATE_DI');
            $criteria->addSelectColumn($alias . '.DIFFICULTW');
            $criteria->addSelectColumn($alias . '.DIFFICULTT');
            $criteria->addSelectColumn($alias . '.DIFFICULTY');
            $criteria->addSelectColumn($alias . '.EYE_IRRITA');
            $criteria->addSelectColumn($alias . '.PIN_PRICKI');
            $criteria->addSelectColumn($alias . '.STRANGE_TA');
            $criteria->addSelectColumn($alias . '.SKIN_ITCHI');
            $criteria->addSelectColumn($alias . '.EXCESS_SAL');
            $criteria->addSelectColumn($alias . '.EXCESS_SWT');
            $criteria->addSelectColumn($alias . '.DIARRHOEA');
            $criteria->addSelectColumn($alias . '.VOMITING');
            $criteria->addSelectColumn($alias . '.FEVER_CHIL');
            $criteria->addSelectColumn($alias . '.HEADACHE');
            $criteria->addSelectColumn($alias . '.JOINT_ACHE');
            $criteria->addSelectColumn($alias . '.MUSCLE_CRA');
            $criteria->addSelectColumn($alias . '.PULSE');
            $criteria->addSelectColumn($alias . '.SYSTOLIC');
            $criteria->addSelectColumn($alias . '.DIASTOLIC');
            $criteria->addSelectColumn($alias . '.PUPILS');
            $criteria->addSelectColumn($alias . '.DEATH');
            $criteria->addSelectColumn($alias . '.COMMENTS');
            $criteria->addSelectColumn($alias . '.FamCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Species');
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
        $criteria->setPrimaryTableName(CiguaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CiguaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CiguaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CiguaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Cigua
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CiguaPeer::doSelect($critcopy, $con);
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
        return CiguaPeer::populateObjects(CiguaPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CiguaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CiguaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CiguaPeer::DATABASE_NAME);

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
     * @param Cigua $obj A Cigua object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            CiguaPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Cigua object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Cigua) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Cigua object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CiguaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Cigua Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CiguaPeer::$instances[$key])) {
                return CiguaPeer::$instances[$key];
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
        foreach (CiguaPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CiguaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to cigua
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
        $cls = CiguaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CiguaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CiguaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CiguaPeer::addInstanceToPool($obj, $key);
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
     * @return array (Cigua object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CiguaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CiguaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CiguaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CiguaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CiguaPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CiguaPeer::DATABASE_NAME)->getTable(CiguaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCiguaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCiguaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CiguaTableMap());
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
        return CiguaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Cigua or Criteria object.
     *
     * @param      mixed $values Criteria or Cigua object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CiguaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Cigua object
        }

        if ($criteria->containsKey(CiguaPeer::AUTOCTR) && $criteria->keyContainsValue(CiguaPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CiguaPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CiguaPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Cigua or Criteria object.
     *
     * @param      mixed $values Criteria or Cigua object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CiguaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CiguaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CiguaPeer::AUTOCTR);
            $value = $criteria->remove(CiguaPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(CiguaPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CiguaPeer::TABLE_NAME);
            }

        } else { // $values is Cigua object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CiguaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the cigua table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CiguaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CiguaPeer::TABLE_NAME, $con, CiguaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CiguaPeer::clearInstancePool();
            CiguaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Cigua or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Cigua object or primary key or array of primary keys
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
            $con = Propel::getConnection(CiguaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CiguaPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Cigua) { // it's a model object
            // invalidate the cache for this single object
            CiguaPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CiguaPeer::DATABASE_NAME);
            $criteria->add(CiguaPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CiguaPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CiguaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CiguaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Cigua object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Cigua $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CiguaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CiguaPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CiguaPeer::DATABASE_NAME, CiguaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Cigua
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CiguaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CiguaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CiguaPeer::DATABASE_NAME);
        $criteria->add(CiguaPeer::AUTOCTR, $pk);

        $v = CiguaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Cigua[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CiguaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CiguaPeer::DATABASE_NAME);
            $criteria->add(CiguaPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = CiguaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCiguaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCiguaPeer::buildTableMap();

