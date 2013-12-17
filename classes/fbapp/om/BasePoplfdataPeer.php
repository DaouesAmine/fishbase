<?php


/**
 * Base static class for performing query and update operations on the 'poplfdata' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BasePoplfdataPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'poplfdata';

    /** the related Propel class for this table */
    const OM_CLASS = 'Poplfdata';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PoplfdataTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 107;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 107;

    /** the column name for the autoctr field */
    const AUTOCTR = 'poplfdata.autoctr';

    /** the column name for the LFCode field */
    const LFCODE = 'poplfdata.LFCode';

    /** the column name for the DateSampled field */
    const DATESAMPLED = 'poplfdata.DateSampled';

    /** the column name for the YearofSampleOld field */
    const YEAROFSAMPLEOLD = 'poplfdata.YearofSampleOld';

    /** the column name for the YearofSample field */
    const YEAROFSAMPLE = 'poplfdata.YearofSample';

    /** the column name for the Individuals field */
    const INDIVIDUALS = 'poplfdata.Individuals';

    /** the column name for the Class1ML field */
    const CLASS1ML = 'poplfdata.Class1ML';

    /** the column name for the Class1FR field */
    const CLASS1FR = 'poplfdata.Class1FR';

    /** the column name for the Class2ML field */
    const CLASS2ML = 'poplfdata.Class2ML';

    /** the column name for the Class2FR field */
    const CLASS2FR = 'poplfdata.Class2FR';

    /** the column name for the Class3ML field */
    const CLASS3ML = 'poplfdata.Class3ML';

    /** the column name for the Class3FR field */
    const CLASS3FR = 'poplfdata.Class3FR';

    /** the column name for the Class4ML field */
    const CLASS4ML = 'poplfdata.Class4ML';

    /** the column name for the Class4FR field */
    const CLASS4FR = 'poplfdata.Class4FR';

    /** the column name for the Class5ML field */
    const CLASS5ML = 'poplfdata.Class5ML';

    /** the column name for the Class5FR field */
    const CLASS5FR = 'poplfdata.Class5FR';

    /** the column name for the Class6ML field */
    const CLASS6ML = 'poplfdata.Class6ML';

    /** the column name for the Class6FR field */
    const CLASS6FR = 'poplfdata.Class6FR';

    /** the column name for the Class7ML field */
    const CLASS7ML = 'poplfdata.Class7ML';

    /** the column name for the Class7FR field */
    const CLASS7FR = 'poplfdata.Class7FR';

    /** the column name for the Class8ML field */
    const CLASS8ML = 'poplfdata.Class8ML';

    /** the column name for the Class8FR field */
    const CLASS8FR = 'poplfdata.Class8FR';

    /** the column name for the Class9ML field */
    const CLASS9ML = 'poplfdata.Class9ML';

    /** the column name for the Class9FR field */
    const CLASS9FR = 'poplfdata.Class9FR';

    /** the column name for the Class10ML field */
    const CLASS10ML = 'poplfdata.Class10ML';

    /** the column name for the Class10FR field */
    const CLASS10FR = 'poplfdata.Class10FR';

    /** the column name for the Class11ML field */
    const CLASS11ML = 'poplfdata.Class11ML';

    /** the column name for the Class11FR field */
    const CLASS11FR = 'poplfdata.Class11FR';

    /** the column name for the Class12ML field */
    const CLASS12ML = 'poplfdata.Class12ML';

    /** the column name for the Class12FR field */
    const CLASS12FR = 'poplfdata.Class12FR';

    /** the column name for the Class13ML field */
    const CLASS13ML = 'poplfdata.Class13ML';

    /** the column name for the Class13FR field */
    const CLASS13FR = 'poplfdata.Class13FR';

    /** the column name for the Class14ML field */
    const CLASS14ML = 'poplfdata.Class14ML';

    /** the column name for the Class14FR field */
    const CLASS14FR = 'poplfdata.Class14FR';

    /** the column name for the Class15ML field */
    const CLASS15ML = 'poplfdata.Class15ML';

    /** the column name for the Class15FR field */
    const CLASS15FR = 'poplfdata.Class15FR';

    /** the column name for the Class16ML field */
    const CLASS16ML = 'poplfdata.Class16ML';

    /** the column name for the Class16FR field */
    const CLASS16FR = 'poplfdata.Class16FR';

    /** the column name for the Class17ML field */
    const CLASS17ML = 'poplfdata.Class17ML';

    /** the column name for the Class17FR field */
    const CLASS17FR = 'poplfdata.Class17FR';

    /** the column name for the Class18ML field */
    const CLASS18ML = 'poplfdata.Class18ML';

    /** the column name for the Class18FR field */
    const CLASS18FR = 'poplfdata.Class18FR';

    /** the column name for the Class19ML field */
    const CLASS19ML = 'poplfdata.Class19ML';

    /** the column name for the Class19FR field */
    const CLASS19FR = 'poplfdata.Class19FR';

    /** the column name for the Class20ML field */
    const CLASS20ML = 'poplfdata.Class20ML';

    /** the column name for the Class20FR field */
    const CLASS20FR = 'poplfdata.Class20FR';

    /** the column name for the Class21ML field */
    const CLASS21ML = 'poplfdata.Class21ML';

    /** the column name for the Class21FR field */
    const CLASS21FR = 'poplfdata.Class21FR';

    /** the column name for the Class22ML field */
    const CLASS22ML = 'poplfdata.Class22ML';

    /** the column name for the Class22FR field */
    const CLASS22FR = 'poplfdata.Class22FR';

    /** the column name for the Class23ML field */
    const CLASS23ML = 'poplfdata.Class23ML';

    /** the column name for the Class23FR field */
    const CLASS23FR = 'poplfdata.Class23FR';

    /** the column name for the Class24ML field */
    const CLASS24ML = 'poplfdata.Class24ML';

    /** the column name for the Class24FR field */
    const CLASS24FR = 'poplfdata.Class24FR';

    /** the column name for the Class25ML field */
    const CLASS25ML = 'poplfdata.Class25ML';

    /** the column name for the Class25FR field */
    const CLASS25FR = 'poplfdata.Class25FR';

    /** the column name for the Class26ML field */
    const CLASS26ML = 'poplfdata.Class26ML';

    /** the column name for the Class26FR field */
    const CLASS26FR = 'poplfdata.Class26FR';

    /** the column name for the Class27ML field */
    const CLASS27ML = 'poplfdata.Class27ML';

    /** the column name for the Class27FR field */
    const CLASS27FR = 'poplfdata.Class27FR';

    /** the column name for the Class28ML field */
    const CLASS28ML = 'poplfdata.Class28ML';

    /** the column name for the Class28FR field */
    const CLASS28FR = 'poplfdata.Class28FR';

    /** the column name for the Class29ML field */
    const CLASS29ML = 'poplfdata.Class29ML';

    /** the column name for the Class29FR field */
    const CLASS29FR = 'poplfdata.Class29FR';

    /** the column name for the Class30ML field */
    const CLASS30ML = 'poplfdata.Class30ML';

    /** the column name for the Class30FR field */
    const CLASS30FR = 'poplfdata.Class30FR';

    /** the column name for the Class31ML field */
    const CLASS31ML = 'poplfdata.Class31ML';

    /** the column name for the Class31FR field */
    const CLASS31FR = 'poplfdata.Class31FR';

    /** the column name for the Class32ML field */
    const CLASS32ML = 'poplfdata.Class32ML';

    /** the column name for the Class32FR field */
    const CLASS32FR = 'poplfdata.Class32FR';

    /** the column name for the Class33ML field */
    const CLASS33ML = 'poplfdata.Class33ML';

    /** the column name for the Class33FR field */
    const CLASS33FR = 'poplfdata.Class33FR';

    /** the column name for the Class34ML field */
    const CLASS34ML = 'poplfdata.Class34ML';

    /** the column name for the Class34FR field */
    const CLASS34FR = 'poplfdata.Class34FR';

    /** the column name for the Class35ML field */
    const CLASS35ML = 'poplfdata.Class35ML';

    /** the column name for the Class35FR field */
    const CLASS35FR = 'poplfdata.Class35FR';

    /** the column name for the Class36ML field */
    const CLASS36ML = 'poplfdata.Class36ML';

    /** the column name for the Class36FR field */
    const CLASS36FR = 'poplfdata.Class36FR';

    /** the column name for the Class37ML field */
    const CLASS37ML = 'poplfdata.Class37ML';

    /** the column name for the Class37FR field */
    const CLASS37FR = 'poplfdata.Class37FR';

    /** the column name for the Class38ML field */
    const CLASS38ML = 'poplfdata.Class38ML';

    /** the column name for the Class38FR field */
    const CLASS38FR = 'poplfdata.Class38FR';

    /** the column name for the Class39ML field */
    const CLASS39ML = 'poplfdata.Class39ML';

    /** the column name for the Class39FR field */
    const CLASS39FR = 'poplfdata.Class39FR';

    /** the column name for the Class40ML field */
    const CLASS40ML = 'poplfdata.Class40ML';

    /** the column name for the Class40FR field */
    const CLASS40FR = 'poplfdata.Class40FR';

    /** the column name for the Class41ML field */
    const CLASS41ML = 'poplfdata.Class41ML';

    /** the column name for the Class41FR field */
    const CLASS41FR = 'poplfdata.Class41FR';

    /** the column name for the Class42ML field */
    const CLASS42ML = 'poplfdata.Class42ML';

    /** the column name for the Class42FR field */
    const CLASS42FR = 'poplfdata.Class42FR';

    /** the column name for the Class43ML field */
    const CLASS43ML = 'poplfdata.Class43ML';

    /** the column name for the Class43FR field */
    const CLASS43FR = 'poplfdata.Class43FR';

    /** the column name for the Class44ML field */
    const CLASS44ML = 'poplfdata.Class44ML';

    /** the column name for the Class44FR field */
    const CLASS44FR = 'poplfdata.Class44FR';

    /** the column name for the Class45ML field */
    const CLASS45ML = 'poplfdata.Class45ML';

    /** the column name for the Class45FR field */
    const CLASS45FR = 'poplfdata.Class45FR';

    /** the column name for the Class46ML field */
    const CLASS46ML = 'poplfdata.Class46ML';

    /** the column name for the Class46FR field */
    const CLASS46FR = 'poplfdata.Class46FR';

    /** the column name for the Class47ML field */
    const CLASS47ML = 'poplfdata.Class47ML';

    /** the column name for the Class47FR field */
    const CLASS47FR = 'poplfdata.Class47FR';

    /** the column name for the Class48ML field */
    const CLASS48ML = 'poplfdata.Class48ML';

    /** the column name for the Class48FR field */
    const CLASS48FR = 'poplfdata.Class48FR';

    /** the column name for the Class49ML field */
    const CLASS49ML = 'poplfdata.Class49ML';

    /** the column name for the Class49FR field */
    const CLASS49FR = 'poplfdata.Class49FR';

    /** the column name for the Class50ML field */
    const CLASS50ML = 'poplfdata.Class50ML';

    /** the column name for the Class50FR field */
    const CLASS50FR = 'poplfdata.Class50FR';

    /** the column name for the TS field */
    const TS = 'poplfdata.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Poplfdata objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Poplfdata[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PoplfdataPeer::$fieldNames[PoplfdataPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Lfcode', 'Datesampled', 'Yearofsampleold', 'Yearofsample', 'Individuals', 'Class1ml', 'Class1fr', 'Class2ml', 'Class2fr', 'Class3ml', 'Class3fr', 'Class4ml', 'Class4fr', 'Class5ml', 'Class5fr', 'Class6ml', 'Class6fr', 'Class7ml', 'Class7fr', 'Class8ml', 'Class8fr', 'Class9ml', 'Class9fr', 'Class10ml', 'Class10fr', 'Class11ml', 'Class11fr', 'Class12ml', 'Class12fr', 'Class13ml', 'Class13fr', 'Class14ml', 'Class14fr', 'Class15ml', 'Class15fr', 'Class16ml', 'Class16fr', 'Class17ml', 'Class17fr', 'Class18ml', 'Class18fr', 'Class19ml', 'Class19fr', 'Class20ml', 'Class20fr', 'Class21ml', 'Class21fr', 'Class22ml', 'Class22fr', 'Class23ml', 'Class23fr', 'Class24ml', 'Class24fr', 'Class25ml', 'Class25fr', 'Class26ml', 'Class26fr', 'Class27ml', 'Class27fr', 'Class28ml', 'Class28fr', 'Class29ml', 'Class29fr', 'Class30ml', 'Class30fr', 'Class31ml', 'Class31fr', 'Class32ml', 'Class32fr', 'Class33ml', 'Class33fr', 'Class34ml', 'Class34fr', 'Class35ml', 'Class35fr', 'Class36ml', 'Class36fr', 'Class37ml', 'Class37fr', 'Class38ml', 'Class38fr', 'Class39ml', 'Class39fr', 'Class40ml', 'Class40fr', 'Class41ml', 'Class41fr', 'Class42ml', 'Class42fr', 'Class43ml', 'Class43fr', 'Class44ml', 'Class44fr', 'Class45ml', 'Class45fr', 'Class46ml', 'Class46fr', 'Class47ml', 'Class47fr', 'Class48ml', 'Class48fr', 'Class49ml', 'Class49fr', 'Class50ml', 'Class50fr', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'lfcode', 'datesampled', 'yearofsampleold', 'yearofsample', 'individuals', 'class1ml', 'class1fr', 'class2ml', 'class2fr', 'class3ml', 'class3fr', 'class4ml', 'class4fr', 'class5ml', 'class5fr', 'class6ml', 'class6fr', 'class7ml', 'class7fr', 'class8ml', 'class8fr', 'class9ml', 'class9fr', 'class10ml', 'class10fr', 'class11ml', 'class11fr', 'class12ml', 'class12fr', 'class13ml', 'class13fr', 'class14ml', 'class14fr', 'class15ml', 'class15fr', 'class16ml', 'class16fr', 'class17ml', 'class17fr', 'class18ml', 'class18fr', 'class19ml', 'class19fr', 'class20ml', 'class20fr', 'class21ml', 'class21fr', 'class22ml', 'class22fr', 'class23ml', 'class23fr', 'class24ml', 'class24fr', 'class25ml', 'class25fr', 'class26ml', 'class26fr', 'class27ml', 'class27fr', 'class28ml', 'class28fr', 'class29ml', 'class29fr', 'class30ml', 'class30fr', 'class31ml', 'class31fr', 'class32ml', 'class32fr', 'class33ml', 'class33fr', 'class34ml', 'class34fr', 'class35ml', 'class35fr', 'class36ml', 'class36fr', 'class37ml', 'class37fr', 'class38ml', 'class38fr', 'class39ml', 'class39fr', 'class40ml', 'class40fr', 'class41ml', 'class41fr', 'class42ml', 'class42fr', 'class43ml', 'class43fr', 'class44ml', 'class44fr', 'class45ml', 'class45fr', 'class46ml', 'class46fr', 'class47ml', 'class47fr', 'class48ml', 'class48fr', 'class49ml', 'class49fr', 'class50ml', 'class50fr', 'ts', ),
        BasePeer::TYPE_COLNAME => array (PoplfdataPeer::AUTOCTR, PoplfdataPeer::LFCODE, PoplfdataPeer::DATESAMPLED, PoplfdataPeer::YEAROFSAMPLEOLD, PoplfdataPeer::YEAROFSAMPLE, PoplfdataPeer::INDIVIDUALS, PoplfdataPeer::CLASS1ML, PoplfdataPeer::CLASS1FR, PoplfdataPeer::CLASS2ML, PoplfdataPeer::CLASS2FR, PoplfdataPeer::CLASS3ML, PoplfdataPeer::CLASS3FR, PoplfdataPeer::CLASS4ML, PoplfdataPeer::CLASS4FR, PoplfdataPeer::CLASS5ML, PoplfdataPeer::CLASS5FR, PoplfdataPeer::CLASS6ML, PoplfdataPeer::CLASS6FR, PoplfdataPeer::CLASS7ML, PoplfdataPeer::CLASS7FR, PoplfdataPeer::CLASS8ML, PoplfdataPeer::CLASS8FR, PoplfdataPeer::CLASS9ML, PoplfdataPeer::CLASS9FR, PoplfdataPeer::CLASS10ML, PoplfdataPeer::CLASS10FR, PoplfdataPeer::CLASS11ML, PoplfdataPeer::CLASS11FR, PoplfdataPeer::CLASS12ML, PoplfdataPeer::CLASS12FR, PoplfdataPeer::CLASS13ML, PoplfdataPeer::CLASS13FR, PoplfdataPeer::CLASS14ML, PoplfdataPeer::CLASS14FR, PoplfdataPeer::CLASS15ML, PoplfdataPeer::CLASS15FR, PoplfdataPeer::CLASS16ML, PoplfdataPeer::CLASS16FR, PoplfdataPeer::CLASS17ML, PoplfdataPeer::CLASS17FR, PoplfdataPeer::CLASS18ML, PoplfdataPeer::CLASS18FR, PoplfdataPeer::CLASS19ML, PoplfdataPeer::CLASS19FR, PoplfdataPeer::CLASS20ML, PoplfdataPeer::CLASS20FR, PoplfdataPeer::CLASS21ML, PoplfdataPeer::CLASS21FR, PoplfdataPeer::CLASS22ML, PoplfdataPeer::CLASS22FR, PoplfdataPeer::CLASS23ML, PoplfdataPeer::CLASS23FR, PoplfdataPeer::CLASS24ML, PoplfdataPeer::CLASS24FR, PoplfdataPeer::CLASS25ML, PoplfdataPeer::CLASS25FR, PoplfdataPeer::CLASS26ML, PoplfdataPeer::CLASS26FR, PoplfdataPeer::CLASS27ML, PoplfdataPeer::CLASS27FR, PoplfdataPeer::CLASS28ML, PoplfdataPeer::CLASS28FR, PoplfdataPeer::CLASS29ML, PoplfdataPeer::CLASS29FR, PoplfdataPeer::CLASS30ML, PoplfdataPeer::CLASS30FR, PoplfdataPeer::CLASS31ML, PoplfdataPeer::CLASS31FR, PoplfdataPeer::CLASS32ML, PoplfdataPeer::CLASS32FR, PoplfdataPeer::CLASS33ML, PoplfdataPeer::CLASS33FR, PoplfdataPeer::CLASS34ML, PoplfdataPeer::CLASS34FR, PoplfdataPeer::CLASS35ML, PoplfdataPeer::CLASS35FR, PoplfdataPeer::CLASS36ML, PoplfdataPeer::CLASS36FR, PoplfdataPeer::CLASS37ML, PoplfdataPeer::CLASS37FR, PoplfdataPeer::CLASS38ML, PoplfdataPeer::CLASS38FR, PoplfdataPeer::CLASS39ML, PoplfdataPeer::CLASS39FR, PoplfdataPeer::CLASS40ML, PoplfdataPeer::CLASS40FR, PoplfdataPeer::CLASS41ML, PoplfdataPeer::CLASS41FR, PoplfdataPeer::CLASS42ML, PoplfdataPeer::CLASS42FR, PoplfdataPeer::CLASS43ML, PoplfdataPeer::CLASS43FR, PoplfdataPeer::CLASS44ML, PoplfdataPeer::CLASS44FR, PoplfdataPeer::CLASS45ML, PoplfdataPeer::CLASS45FR, PoplfdataPeer::CLASS46ML, PoplfdataPeer::CLASS46FR, PoplfdataPeer::CLASS47ML, PoplfdataPeer::CLASS47FR, PoplfdataPeer::CLASS48ML, PoplfdataPeer::CLASS48FR, PoplfdataPeer::CLASS49ML, PoplfdataPeer::CLASS49FR, PoplfdataPeer::CLASS50ML, PoplfdataPeer::CLASS50FR, PoplfdataPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'LFCODE', 'DATESAMPLED', 'YEAROFSAMPLEOLD', 'YEAROFSAMPLE', 'INDIVIDUALS', 'CLASS1ML', 'CLASS1FR', 'CLASS2ML', 'CLASS2FR', 'CLASS3ML', 'CLASS3FR', 'CLASS4ML', 'CLASS4FR', 'CLASS5ML', 'CLASS5FR', 'CLASS6ML', 'CLASS6FR', 'CLASS7ML', 'CLASS7FR', 'CLASS8ML', 'CLASS8FR', 'CLASS9ML', 'CLASS9FR', 'CLASS10ML', 'CLASS10FR', 'CLASS11ML', 'CLASS11FR', 'CLASS12ML', 'CLASS12FR', 'CLASS13ML', 'CLASS13FR', 'CLASS14ML', 'CLASS14FR', 'CLASS15ML', 'CLASS15FR', 'CLASS16ML', 'CLASS16FR', 'CLASS17ML', 'CLASS17FR', 'CLASS18ML', 'CLASS18FR', 'CLASS19ML', 'CLASS19FR', 'CLASS20ML', 'CLASS20FR', 'CLASS21ML', 'CLASS21FR', 'CLASS22ML', 'CLASS22FR', 'CLASS23ML', 'CLASS23FR', 'CLASS24ML', 'CLASS24FR', 'CLASS25ML', 'CLASS25FR', 'CLASS26ML', 'CLASS26FR', 'CLASS27ML', 'CLASS27FR', 'CLASS28ML', 'CLASS28FR', 'CLASS29ML', 'CLASS29FR', 'CLASS30ML', 'CLASS30FR', 'CLASS31ML', 'CLASS31FR', 'CLASS32ML', 'CLASS32FR', 'CLASS33ML', 'CLASS33FR', 'CLASS34ML', 'CLASS34FR', 'CLASS35ML', 'CLASS35FR', 'CLASS36ML', 'CLASS36FR', 'CLASS37ML', 'CLASS37FR', 'CLASS38ML', 'CLASS38FR', 'CLASS39ML', 'CLASS39FR', 'CLASS40ML', 'CLASS40FR', 'CLASS41ML', 'CLASS41FR', 'CLASS42ML', 'CLASS42FR', 'CLASS43ML', 'CLASS43FR', 'CLASS44ML', 'CLASS44FR', 'CLASS45ML', 'CLASS45FR', 'CLASS46ML', 'CLASS46FR', 'CLASS47ML', 'CLASS47FR', 'CLASS48ML', 'CLASS48FR', 'CLASS49ML', 'CLASS49FR', 'CLASS50ML', 'CLASS50FR', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'LFCode', 'DateSampled', 'YearofSampleOld', 'YearofSample', 'Individuals', 'Class1ML', 'Class1FR', 'Class2ML', 'Class2FR', 'Class3ML', 'Class3FR', 'Class4ML', 'Class4FR', 'Class5ML', 'Class5FR', 'Class6ML', 'Class6FR', 'Class7ML', 'Class7FR', 'Class8ML', 'Class8FR', 'Class9ML', 'Class9FR', 'Class10ML', 'Class10FR', 'Class11ML', 'Class11FR', 'Class12ML', 'Class12FR', 'Class13ML', 'Class13FR', 'Class14ML', 'Class14FR', 'Class15ML', 'Class15FR', 'Class16ML', 'Class16FR', 'Class17ML', 'Class17FR', 'Class18ML', 'Class18FR', 'Class19ML', 'Class19FR', 'Class20ML', 'Class20FR', 'Class21ML', 'Class21FR', 'Class22ML', 'Class22FR', 'Class23ML', 'Class23FR', 'Class24ML', 'Class24FR', 'Class25ML', 'Class25FR', 'Class26ML', 'Class26FR', 'Class27ML', 'Class27FR', 'Class28ML', 'Class28FR', 'Class29ML', 'Class29FR', 'Class30ML', 'Class30FR', 'Class31ML', 'Class31FR', 'Class32ML', 'Class32FR', 'Class33ML', 'Class33FR', 'Class34ML', 'Class34FR', 'Class35ML', 'Class35FR', 'Class36ML', 'Class36FR', 'Class37ML', 'Class37FR', 'Class38ML', 'Class38FR', 'Class39ML', 'Class39FR', 'Class40ML', 'Class40FR', 'Class41ML', 'Class41FR', 'Class42ML', 'Class42FR', 'Class43ML', 'Class43FR', 'Class44ML', 'Class44FR', 'Class45ML', 'Class45FR', 'Class46ML', 'Class46FR', 'Class47ML', 'Class47FR', 'Class48ML', 'Class48FR', 'Class49ML', 'Class49FR', 'Class50ML', 'Class50FR', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PoplfdataPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Lfcode' => 1, 'Datesampled' => 2, 'Yearofsampleold' => 3, 'Yearofsample' => 4, 'Individuals' => 5, 'Class1ml' => 6, 'Class1fr' => 7, 'Class2ml' => 8, 'Class2fr' => 9, 'Class3ml' => 10, 'Class3fr' => 11, 'Class4ml' => 12, 'Class4fr' => 13, 'Class5ml' => 14, 'Class5fr' => 15, 'Class6ml' => 16, 'Class6fr' => 17, 'Class7ml' => 18, 'Class7fr' => 19, 'Class8ml' => 20, 'Class8fr' => 21, 'Class9ml' => 22, 'Class9fr' => 23, 'Class10ml' => 24, 'Class10fr' => 25, 'Class11ml' => 26, 'Class11fr' => 27, 'Class12ml' => 28, 'Class12fr' => 29, 'Class13ml' => 30, 'Class13fr' => 31, 'Class14ml' => 32, 'Class14fr' => 33, 'Class15ml' => 34, 'Class15fr' => 35, 'Class16ml' => 36, 'Class16fr' => 37, 'Class17ml' => 38, 'Class17fr' => 39, 'Class18ml' => 40, 'Class18fr' => 41, 'Class19ml' => 42, 'Class19fr' => 43, 'Class20ml' => 44, 'Class20fr' => 45, 'Class21ml' => 46, 'Class21fr' => 47, 'Class22ml' => 48, 'Class22fr' => 49, 'Class23ml' => 50, 'Class23fr' => 51, 'Class24ml' => 52, 'Class24fr' => 53, 'Class25ml' => 54, 'Class25fr' => 55, 'Class26ml' => 56, 'Class26fr' => 57, 'Class27ml' => 58, 'Class27fr' => 59, 'Class28ml' => 60, 'Class28fr' => 61, 'Class29ml' => 62, 'Class29fr' => 63, 'Class30ml' => 64, 'Class30fr' => 65, 'Class31ml' => 66, 'Class31fr' => 67, 'Class32ml' => 68, 'Class32fr' => 69, 'Class33ml' => 70, 'Class33fr' => 71, 'Class34ml' => 72, 'Class34fr' => 73, 'Class35ml' => 74, 'Class35fr' => 75, 'Class36ml' => 76, 'Class36fr' => 77, 'Class37ml' => 78, 'Class37fr' => 79, 'Class38ml' => 80, 'Class38fr' => 81, 'Class39ml' => 82, 'Class39fr' => 83, 'Class40ml' => 84, 'Class40fr' => 85, 'Class41ml' => 86, 'Class41fr' => 87, 'Class42ml' => 88, 'Class42fr' => 89, 'Class43ml' => 90, 'Class43fr' => 91, 'Class44ml' => 92, 'Class44fr' => 93, 'Class45ml' => 94, 'Class45fr' => 95, 'Class46ml' => 96, 'Class46fr' => 97, 'Class47ml' => 98, 'Class47fr' => 99, 'Class48ml' => 100, 'Class48fr' => 101, 'Class49ml' => 102, 'Class49fr' => 103, 'Class50ml' => 104, 'Class50fr' => 105, 'Ts' => 106, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'lfcode' => 1, 'datesampled' => 2, 'yearofsampleold' => 3, 'yearofsample' => 4, 'individuals' => 5, 'class1ml' => 6, 'class1fr' => 7, 'class2ml' => 8, 'class2fr' => 9, 'class3ml' => 10, 'class3fr' => 11, 'class4ml' => 12, 'class4fr' => 13, 'class5ml' => 14, 'class5fr' => 15, 'class6ml' => 16, 'class6fr' => 17, 'class7ml' => 18, 'class7fr' => 19, 'class8ml' => 20, 'class8fr' => 21, 'class9ml' => 22, 'class9fr' => 23, 'class10ml' => 24, 'class10fr' => 25, 'class11ml' => 26, 'class11fr' => 27, 'class12ml' => 28, 'class12fr' => 29, 'class13ml' => 30, 'class13fr' => 31, 'class14ml' => 32, 'class14fr' => 33, 'class15ml' => 34, 'class15fr' => 35, 'class16ml' => 36, 'class16fr' => 37, 'class17ml' => 38, 'class17fr' => 39, 'class18ml' => 40, 'class18fr' => 41, 'class19ml' => 42, 'class19fr' => 43, 'class20ml' => 44, 'class20fr' => 45, 'class21ml' => 46, 'class21fr' => 47, 'class22ml' => 48, 'class22fr' => 49, 'class23ml' => 50, 'class23fr' => 51, 'class24ml' => 52, 'class24fr' => 53, 'class25ml' => 54, 'class25fr' => 55, 'class26ml' => 56, 'class26fr' => 57, 'class27ml' => 58, 'class27fr' => 59, 'class28ml' => 60, 'class28fr' => 61, 'class29ml' => 62, 'class29fr' => 63, 'class30ml' => 64, 'class30fr' => 65, 'class31ml' => 66, 'class31fr' => 67, 'class32ml' => 68, 'class32fr' => 69, 'class33ml' => 70, 'class33fr' => 71, 'class34ml' => 72, 'class34fr' => 73, 'class35ml' => 74, 'class35fr' => 75, 'class36ml' => 76, 'class36fr' => 77, 'class37ml' => 78, 'class37fr' => 79, 'class38ml' => 80, 'class38fr' => 81, 'class39ml' => 82, 'class39fr' => 83, 'class40ml' => 84, 'class40fr' => 85, 'class41ml' => 86, 'class41fr' => 87, 'class42ml' => 88, 'class42fr' => 89, 'class43ml' => 90, 'class43fr' => 91, 'class44ml' => 92, 'class44fr' => 93, 'class45ml' => 94, 'class45fr' => 95, 'class46ml' => 96, 'class46fr' => 97, 'class47ml' => 98, 'class47fr' => 99, 'class48ml' => 100, 'class48fr' => 101, 'class49ml' => 102, 'class49fr' => 103, 'class50ml' => 104, 'class50fr' => 105, 'ts' => 106, ),
        BasePeer::TYPE_COLNAME => array (PoplfdataPeer::AUTOCTR => 0, PoplfdataPeer::LFCODE => 1, PoplfdataPeer::DATESAMPLED => 2, PoplfdataPeer::YEAROFSAMPLEOLD => 3, PoplfdataPeer::YEAROFSAMPLE => 4, PoplfdataPeer::INDIVIDUALS => 5, PoplfdataPeer::CLASS1ML => 6, PoplfdataPeer::CLASS1FR => 7, PoplfdataPeer::CLASS2ML => 8, PoplfdataPeer::CLASS2FR => 9, PoplfdataPeer::CLASS3ML => 10, PoplfdataPeer::CLASS3FR => 11, PoplfdataPeer::CLASS4ML => 12, PoplfdataPeer::CLASS4FR => 13, PoplfdataPeer::CLASS5ML => 14, PoplfdataPeer::CLASS5FR => 15, PoplfdataPeer::CLASS6ML => 16, PoplfdataPeer::CLASS6FR => 17, PoplfdataPeer::CLASS7ML => 18, PoplfdataPeer::CLASS7FR => 19, PoplfdataPeer::CLASS8ML => 20, PoplfdataPeer::CLASS8FR => 21, PoplfdataPeer::CLASS9ML => 22, PoplfdataPeer::CLASS9FR => 23, PoplfdataPeer::CLASS10ML => 24, PoplfdataPeer::CLASS10FR => 25, PoplfdataPeer::CLASS11ML => 26, PoplfdataPeer::CLASS11FR => 27, PoplfdataPeer::CLASS12ML => 28, PoplfdataPeer::CLASS12FR => 29, PoplfdataPeer::CLASS13ML => 30, PoplfdataPeer::CLASS13FR => 31, PoplfdataPeer::CLASS14ML => 32, PoplfdataPeer::CLASS14FR => 33, PoplfdataPeer::CLASS15ML => 34, PoplfdataPeer::CLASS15FR => 35, PoplfdataPeer::CLASS16ML => 36, PoplfdataPeer::CLASS16FR => 37, PoplfdataPeer::CLASS17ML => 38, PoplfdataPeer::CLASS17FR => 39, PoplfdataPeer::CLASS18ML => 40, PoplfdataPeer::CLASS18FR => 41, PoplfdataPeer::CLASS19ML => 42, PoplfdataPeer::CLASS19FR => 43, PoplfdataPeer::CLASS20ML => 44, PoplfdataPeer::CLASS20FR => 45, PoplfdataPeer::CLASS21ML => 46, PoplfdataPeer::CLASS21FR => 47, PoplfdataPeer::CLASS22ML => 48, PoplfdataPeer::CLASS22FR => 49, PoplfdataPeer::CLASS23ML => 50, PoplfdataPeer::CLASS23FR => 51, PoplfdataPeer::CLASS24ML => 52, PoplfdataPeer::CLASS24FR => 53, PoplfdataPeer::CLASS25ML => 54, PoplfdataPeer::CLASS25FR => 55, PoplfdataPeer::CLASS26ML => 56, PoplfdataPeer::CLASS26FR => 57, PoplfdataPeer::CLASS27ML => 58, PoplfdataPeer::CLASS27FR => 59, PoplfdataPeer::CLASS28ML => 60, PoplfdataPeer::CLASS28FR => 61, PoplfdataPeer::CLASS29ML => 62, PoplfdataPeer::CLASS29FR => 63, PoplfdataPeer::CLASS30ML => 64, PoplfdataPeer::CLASS30FR => 65, PoplfdataPeer::CLASS31ML => 66, PoplfdataPeer::CLASS31FR => 67, PoplfdataPeer::CLASS32ML => 68, PoplfdataPeer::CLASS32FR => 69, PoplfdataPeer::CLASS33ML => 70, PoplfdataPeer::CLASS33FR => 71, PoplfdataPeer::CLASS34ML => 72, PoplfdataPeer::CLASS34FR => 73, PoplfdataPeer::CLASS35ML => 74, PoplfdataPeer::CLASS35FR => 75, PoplfdataPeer::CLASS36ML => 76, PoplfdataPeer::CLASS36FR => 77, PoplfdataPeer::CLASS37ML => 78, PoplfdataPeer::CLASS37FR => 79, PoplfdataPeer::CLASS38ML => 80, PoplfdataPeer::CLASS38FR => 81, PoplfdataPeer::CLASS39ML => 82, PoplfdataPeer::CLASS39FR => 83, PoplfdataPeer::CLASS40ML => 84, PoplfdataPeer::CLASS40FR => 85, PoplfdataPeer::CLASS41ML => 86, PoplfdataPeer::CLASS41FR => 87, PoplfdataPeer::CLASS42ML => 88, PoplfdataPeer::CLASS42FR => 89, PoplfdataPeer::CLASS43ML => 90, PoplfdataPeer::CLASS43FR => 91, PoplfdataPeer::CLASS44ML => 92, PoplfdataPeer::CLASS44FR => 93, PoplfdataPeer::CLASS45ML => 94, PoplfdataPeer::CLASS45FR => 95, PoplfdataPeer::CLASS46ML => 96, PoplfdataPeer::CLASS46FR => 97, PoplfdataPeer::CLASS47ML => 98, PoplfdataPeer::CLASS47FR => 99, PoplfdataPeer::CLASS48ML => 100, PoplfdataPeer::CLASS48FR => 101, PoplfdataPeer::CLASS49ML => 102, PoplfdataPeer::CLASS49FR => 103, PoplfdataPeer::CLASS50ML => 104, PoplfdataPeer::CLASS50FR => 105, PoplfdataPeer::TS => 106, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'LFCODE' => 1, 'DATESAMPLED' => 2, 'YEAROFSAMPLEOLD' => 3, 'YEAROFSAMPLE' => 4, 'INDIVIDUALS' => 5, 'CLASS1ML' => 6, 'CLASS1FR' => 7, 'CLASS2ML' => 8, 'CLASS2FR' => 9, 'CLASS3ML' => 10, 'CLASS3FR' => 11, 'CLASS4ML' => 12, 'CLASS4FR' => 13, 'CLASS5ML' => 14, 'CLASS5FR' => 15, 'CLASS6ML' => 16, 'CLASS6FR' => 17, 'CLASS7ML' => 18, 'CLASS7FR' => 19, 'CLASS8ML' => 20, 'CLASS8FR' => 21, 'CLASS9ML' => 22, 'CLASS9FR' => 23, 'CLASS10ML' => 24, 'CLASS10FR' => 25, 'CLASS11ML' => 26, 'CLASS11FR' => 27, 'CLASS12ML' => 28, 'CLASS12FR' => 29, 'CLASS13ML' => 30, 'CLASS13FR' => 31, 'CLASS14ML' => 32, 'CLASS14FR' => 33, 'CLASS15ML' => 34, 'CLASS15FR' => 35, 'CLASS16ML' => 36, 'CLASS16FR' => 37, 'CLASS17ML' => 38, 'CLASS17FR' => 39, 'CLASS18ML' => 40, 'CLASS18FR' => 41, 'CLASS19ML' => 42, 'CLASS19FR' => 43, 'CLASS20ML' => 44, 'CLASS20FR' => 45, 'CLASS21ML' => 46, 'CLASS21FR' => 47, 'CLASS22ML' => 48, 'CLASS22FR' => 49, 'CLASS23ML' => 50, 'CLASS23FR' => 51, 'CLASS24ML' => 52, 'CLASS24FR' => 53, 'CLASS25ML' => 54, 'CLASS25FR' => 55, 'CLASS26ML' => 56, 'CLASS26FR' => 57, 'CLASS27ML' => 58, 'CLASS27FR' => 59, 'CLASS28ML' => 60, 'CLASS28FR' => 61, 'CLASS29ML' => 62, 'CLASS29FR' => 63, 'CLASS30ML' => 64, 'CLASS30FR' => 65, 'CLASS31ML' => 66, 'CLASS31FR' => 67, 'CLASS32ML' => 68, 'CLASS32FR' => 69, 'CLASS33ML' => 70, 'CLASS33FR' => 71, 'CLASS34ML' => 72, 'CLASS34FR' => 73, 'CLASS35ML' => 74, 'CLASS35FR' => 75, 'CLASS36ML' => 76, 'CLASS36FR' => 77, 'CLASS37ML' => 78, 'CLASS37FR' => 79, 'CLASS38ML' => 80, 'CLASS38FR' => 81, 'CLASS39ML' => 82, 'CLASS39FR' => 83, 'CLASS40ML' => 84, 'CLASS40FR' => 85, 'CLASS41ML' => 86, 'CLASS41FR' => 87, 'CLASS42ML' => 88, 'CLASS42FR' => 89, 'CLASS43ML' => 90, 'CLASS43FR' => 91, 'CLASS44ML' => 92, 'CLASS44FR' => 93, 'CLASS45ML' => 94, 'CLASS45FR' => 95, 'CLASS46ML' => 96, 'CLASS46FR' => 97, 'CLASS47ML' => 98, 'CLASS47FR' => 99, 'CLASS48ML' => 100, 'CLASS48FR' => 101, 'CLASS49ML' => 102, 'CLASS49FR' => 103, 'CLASS50ML' => 104, 'CLASS50FR' => 105, 'TS' => 106, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'LFCode' => 1, 'DateSampled' => 2, 'YearofSampleOld' => 3, 'YearofSample' => 4, 'Individuals' => 5, 'Class1ML' => 6, 'Class1FR' => 7, 'Class2ML' => 8, 'Class2FR' => 9, 'Class3ML' => 10, 'Class3FR' => 11, 'Class4ML' => 12, 'Class4FR' => 13, 'Class5ML' => 14, 'Class5FR' => 15, 'Class6ML' => 16, 'Class6FR' => 17, 'Class7ML' => 18, 'Class7FR' => 19, 'Class8ML' => 20, 'Class8FR' => 21, 'Class9ML' => 22, 'Class9FR' => 23, 'Class10ML' => 24, 'Class10FR' => 25, 'Class11ML' => 26, 'Class11FR' => 27, 'Class12ML' => 28, 'Class12FR' => 29, 'Class13ML' => 30, 'Class13FR' => 31, 'Class14ML' => 32, 'Class14FR' => 33, 'Class15ML' => 34, 'Class15FR' => 35, 'Class16ML' => 36, 'Class16FR' => 37, 'Class17ML' => 38, 'Class17FR' => 39, 'Class18ML' => 40, 'Class18FR' => 41, 'Class19ML' => 42, 'Class19FR' => 43, 'Class20ML' => 44, 'Class20FR' => 45, 'Class21ML' => 46, 'Class21FR' => 47, 'Class22ML' => 48, 'Class22FR' => 49, 'Class23ML' => 50, 'Class23FR' => 51, 'Class24ML' => 52, 'Class24FR' => 53, 'Class25ML' => 54, 'Class25FR' => 55, 'Class26ML' => 56, 'Class26FR' => 57, 'Class27ML' => 58, 'Class27FR' => 59, 'Class28ML' => 60, 'Class28FR' => 61, 'Class29ML' => 62, 'Class29FR' => 63, 'Class30ML' => 64, 'Class30FR' => 65, 'Class31ML' => 66, 'Class31FR' => 67, 'Class32ML' => 68, 'Class32FR' => 69, 'Class33ML' => 70, 'Class33FR' => 71, 'Class34ML' => 72, 'Class34FR' => 73, 'Class35ML' => 74, 'Class35FR' => 75, 'Class36ML' => 76, 'Class36FR' => 77, 'Class37ML' => 78, 'Class37FR' => 79, 'Class38ML' => 80, 'Class38FR' => 81, 'Class39ML' => 82, 'Class39FR' => 83, 'Class40ML' => 84, 'Class40FR' => 85, 'Class41ML' => 86, 'Class41FR' => 87, 'Class42ML' => 88, 'Class42FR' => 89, 'Class43ML' => 90, 'Class43FR' => 91, 'Class44ML' => 92, 'Class44FR' => 93, 'Class45ML' => 94, 'Class45FR' => 95, 'Class46ML' => 96, 'Class46FR' => 97, 'Class47ML' => 98, 'Class47FR' => 99, 'Class48ML' => 100, 'Class48FR' => 101, 'Class49ML' => 102, 'Class49FR' => 103, 'Class50ML' => 104, 'Class50FR' => 105, 'TS' => 106, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, )
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
        $toNames = PoplfdataPeer::getFieldNames($toType);
        $key = isset(PoplfdataPeer::$fieldKeys[$fromType][$name]) ? PoplfdataPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PoplfdataPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PoplfdataPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PoplfdataPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PoplfdataPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PoplfdataPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PoplfdataPeer::AUTOCTR);
            $criteria->addSelectColumn(PoplfdataPeer::LFCODE);
            $criteria->addSelectColumn(PoplfdataPeer::DATESAMPLED);
            $criteria->addSelectColumn(PoplfdataPeer::YEAROFSAMPLEOLD);
            $criteria->addSelectColumn(PoplfdataPeer::YEAROFSAMPLE);
            $criteria->addSelectColumn(PoplfdataPeer::INDIVIDUALS);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS1ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS1FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS2ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS2FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS3ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS3FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS4ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS4FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS5ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS5FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS6ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS6FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS7ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS7FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS8ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS8FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS9ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS9FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS10ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS10FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS11ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS11FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS12ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS12FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS13ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS13FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS14ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS14FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS15ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS15FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS16ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS16FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS17ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS17FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS18ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS18FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS19ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS19FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS20ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS20FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS21ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS21FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS22ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS22FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS23ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS23FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS24ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS24FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS25ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS25FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS26ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS26FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS27ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS27FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS28ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS28FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS29ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS29FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS30ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS30FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS31ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS31FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS32ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS32FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS33ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS33FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS34ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS34FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS35ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS35FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS36ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS36FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS37ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS37FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS38ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS38FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS39ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS39FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS40ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS40FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS41ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS41FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS42ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS42FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS43ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS43FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS44ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS44FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS45ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS45FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS46ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS46FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS47ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS47FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS48ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS48FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS49ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS49FR);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS50ML);
            $criteria->addSelectColumn(PoplfdataPeer::CLASS50FR);
            $criteria->addSelectColumn(PoplfdataPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.LFCode');
            $criteria->addSelectColumn($alias . '.DateSampled');
            $criteria->addSelectColumn($alias . '.YearofSampleOld');
            $criteria->addSelectColumn($alias . '.YearofSample');
            $criteria->addSelectColumn($alias . '.Individuals');
            $criteria->addSelectColumn($alias . '.Class1ML');
            $criteria->addSelectColumn($alias . '.Class1FR');
            $criteria->addSelectColumn($alias . '.Class2ML');
            $criteria->addSelectColumn($alias . '.Class2FR');
            $criteria->addSelectColumn($alias . '.Class3ML');
            $criteria->addSelectColumn($alias . '.Class3FR');
            $criteria->addSelectColumn($alias . '.Class4ML');
            $criteria->addSelectColumn($alias . '.Class4FR');
            $criteria->addSelectColumn($alias . '.Class5ML');
            $criteria->addSelectColumn($alias . '.Class5FR');
            $criteria->addSelectColumn($alias . '.Class6ML');
            $criteria->addSelectColumn($alias . '.Class6FR');
            $criteria->addSelectColumn($alias . '.Class7ML');
            $criteria->addSelectColumn($alias . '.Class7FR');
            $criteria->addSelectColumn($alias . '.Class8ML');
            $criteria->addSelectColumn($alias . '.Class8FR');
            $criteria->addSelectColumn($alias . '.Class9ML');
            $criteria->addSelectColumn($alias . '.Class9FR');
            $criteria->addSelectColumn($alias . '.Class10ML');
            $criteria->addSelectColumn($alias . '.Class10FR');
            $criteria->addSelectColumn($alias . '.Class11ML');
            $criteria->addSelectColumn($alias . '.Class11FR');
            $criteria->addSelectColumn($alias . '.Class12ML');
            $criteria->addSelectColumn($alias . '.Class12FR');
            $criteria->addSelectColumn($alias . '.Class13ML');
            $criteria->addSelectColumn($alias . '.Class13FR');
            $criteria->addSelectColumn($alias . '.Class14ML');
            $criteria->addSelectColumn($alias . '.Class14FR');
            $criteria->addSelectColumn($alias . '.Class15ML');
            $criteria->addSelectColumn($alias . '.Class15FR');
            $criteria->addSelectColumn($alias . '.Class16ML');
            $criteria->addSelectColumn($alias . '.Class16FR');
            $criteria->addSelectColumn($alias . '.Class17ML');
            $criteria->addSelectColumn($alias . '.Class17FR');
            $criteria->addSelectColumn($alias . '.Class18ML');
            $criteria->addSelectColumn($alias . '.Class18FR');
            $criteria->addSelectColumn($alias . '.Class19ML');
            $criteria->addSelectColumn($alias . '.Class19FR');
            $criteria->addSelectColumn($alias . '.Class20ML');
            $criteria->addSelectColumn($alias . '.Class20FR');
            $criteria->addSelectColumn($alias . '.Class21ML');
            $criteria->addSelectColumn($alias . '.Class21FR');
            $criteria->addSelectColumn($alias . '.Class22ML');
            $criteria->addSelectColumn($alias . '.Class22FR');
            $criteria->addSelectColumn($alias . '.Class23ML');
            $criteria->addSelectColumn($alias . '.Class23FR');
            $criteria->addSelectColumn($alias . '.Class24ML');
            $criteria->addSelectColumn($alias . '.Class24FR');
            $criteria->addSelectColumn($alias . '.Class25ML');
            $criteria->addSelectColumn($alias . '.Class25FR');
            $criteria->addSelectColumn($alias . '.Class26ML');
            $criteria->addSelectColumn($alias . '.Class26FR');
            $criteria->addSelectColumn($alias . '.Class27ML');
            $criteria->addSelectColumn($alias . '.Class27FR');
            $criteria->addSelectColumn($alias . '.Class28ML');
            $criteria->addSelectColumn($alias . '.Class28FR');
            $criteria->addSelectColumn($alias . '.Class29ML');
            $criteria->addSelectColumn($alias . '.Class29FR');
            $criteria->addSelectColumn($alias . '.Class30ML');
            $criteria->addSelectColumn($alias . '.Class30FR');
            $criteria->addSelectColumn($alias . '.Class31ML');
            $criteria->addSelectColumn($alias . '.Class31FR');
            $criteria->addSelectColumn($alias . '.Class32ML');
            $criteria->addSelectColumn($alias . '.Class32FR');
            $criteria->addSelectColumn($alias . '.Class33ML');
            $criteria->addSelectColumn($alias . '.Class33FR');
            $criteria->addSelectColumn($alias . '.Class34ML');
            $criteria->addSelectColumn($alias . '.Class34FR');
            $criteria->addSelectColumn($alias . '.Class35ML');
            $criteria->addSelectColumn($alias . '.Class35FR');
            $criteria->addSelectColumn($alias . '.Class36ML');
            $criteria->addSelectColumn($alias . '.Class36FR');
            $criteria->addSelectColumn($alias . '.Class37ML');
            $criteria->addSelectColumn($alias . '.Class37FR');
            $criteria->addSelectColumn($alias . '.Class38ML');
            $criteria->addSelectColumn($alias . '.Class38FR');
            $criteria->addSelectColumn($alias . '.Class39ML');
            $criteria->addSelectColumn($alias . '.Class39FR');
            $criteria->addSelectColumn($alias . '.Class40ML');
            $criteria->addSelectColumn($alias . '.Class40FR');
            $criteria->addSelectColumn($alias . '.Class41ML');
            $criteria->addSelectColumn($alias . '.Class41FR');
            $criteria->addSelectColumn($alias . '.Class42ML');
            $criteria->addSelectColumn($alias . '.Class42FR');
            $criteria->addSelectColumn($alias . '.Class43ML');
            $criteria->addSelectColumn($alias . '.Class43FR');
            $criteria->addSelectColumn($alias . '.Class44ML');
            $criteria->addSelectColumn($alias . '.Class44FR');
            $criteria->addSelectColumn($alias . '.Class45ML');
            $criteria->addSelectColumn($alias . '.Class45FR');
            $criteria->addSelectColumn($alias . '.Class46ML');
            $criteria->addSelectColumn($alias . '.Class46FR');
            $criteria->addSelectColumn($alias . '.Class47ML');
            $criteria->addSelectColumn($alias . '.Class47FR');
            $criteria->addSelectColumn($alias . '.Class48ML');
            $criteria->addSelectColumn($alias . '.Class48FR');
            $criteria->addSelectColumn($alias . '.Class49ML');
            $criteria->addSelectColumn($alias . '.Class49FR');
            $criteria->addSelectColumn($alias . '.Class50ML');
            $criteria->addSelectColumn($alias . '.Class50FR');
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
        $criteria->setPrimaryTableName(PoplfdataPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PoplfdataPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PoplfdataPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PoplfdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Poplfdata
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PoplfdataPeer::doSelect($critcopy, $con);
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
        return PoplfdataPeer::populateObjects(PoplfdataPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PoplfdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PoplfdataPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PoplfdataPeer::DATABASE_NAME);

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
     * @param Poplfdata $obj A Poplfdata object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            PoplfdataPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Poplfdata object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Poplfdata) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Poplfdata object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PoplfdataPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Poplfdata Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PoplfdataPeer::$instances[$key])) {
                return PoplfdataPeer::$instances[$key];
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
        foreach (PoplfdataPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PoplfdataPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to poplfdata
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
        $cls = PoplfdataPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PoplfdataPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PoplfdataPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PoplfdataPeer::addInstanceToPool($obj, $key);
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
     * @return array (Poplfdata object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PoplfdataPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PoplfdataPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PoplfdataPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PoplfdataPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PoplfdataPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(PoplfdataPeer::DATABASE_NAME)->getTable(PoplfdataPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePoplfdataPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePoplfdataPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PoplfdataTableMap());
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
        return PoplfdataPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Poplfdata or Criteria object.
     *
     * @param      mixed $values Criteria or Poplfdata object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PoplfdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Poplfdata object
        }

        if ($criteria->containsKey(PoplfdataPeer::AUTOCTR) && $criteria->keyContainsValue(PoplfdataPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PoplfdataPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PoplfdataPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Poplfdata or Criteria object.
     *
     * @param      mixed $values Criteria or Poplfdata object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PoplfdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PoplfdataPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PoplfdataPeer::AUTOCTR);
            $value = $criteria->remove(PoplfdataPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(PoplfdataPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PoplfdataPeer::TABLE_NAME);
            }

        } else { // $values is Poplfdata object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PoplfdataPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the poplfdata table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PoplfdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PoplfdataPeer::TABLE_NAME, $con, PoplfdataPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PoplfdataPeer::clearInstancePool();
            PoplfdataPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Poplfdata or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Poplfdata object or primary key or array of primary keys
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
            $con = Propel::getConnection(PoplfdataPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PoplfdataPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Poplfdata) { // it's a model object
            // invalidate the cache for this single object
            PoplfdataPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PoplfdataPeer::DATABASE_NAME);
            $criteria->add(PoplfdataPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PoplfdataPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PoplfdataPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PoplfdataPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Poplfdata object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Poplfdata $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PoplfdataPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PoplfdataPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PoplfdataPeer::DATABASE_NAME, PoplfdataPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Poplfdata
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PoplfdataPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PoplfdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PoplfdataPeer::DATABASE_NAME);
        $criteria->add(PoplfdataPeer::AUTOCTR, $pk);

        $v = PoplfdataPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Poplfdata[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PoplfdataPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PoplfdataPeer::DATABASE_NAME);
            $criteria->add(PoplfdataPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = PoplfdataPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePoplfdataPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePoplfdataPeer::buildTableMap();

