<?php


/**
 * Base static class for performing query and update operations on the 'myersrecruitmentdatabase' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseMyersrecruitmentdatabasePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'myersrecruitmentdatabase';

    /** the related Propel class for this table */
    const OM_CLASS = 'Myersrecruitmentdatabase';

    /** the related TableMap class for this table */
    const TM_CLASS = 'MyersrecruitmentdatabaseTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 91;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 91;

    /** the column name for the ID field */
    const ID = 'myersrecruitmentdatabase.ID';

    /** the column name for the Reclag field */
    const RECLAG = 'myersrecruitmentdatabase.Reclag';

    /** the column name for the sp field */
    const SP = 'myersrecruitmentdatabase.sp';

    /** the column name for the genusUsed field */
    const GENUSUSED = 'myersrecruitmentdatabase.genusUsed';

    /** the column name for the speciesUsed field */
    const SPECIESUSED = 'myersrecruitmentdatabase.speciesUsed';

    /** the column name for the speccode field */
    const SPECCODE = 'myersrecruitmentdatabase.speccode';

    /** the column name for the stockcode field */
    const STOCKCODE = 'myersrecruitmentdatabase.stockcode';

    /** the column name for the family field */
    const FAMILY = 'myersrecruitmentdatabase.family';

    /** the column name for the cfamily field */
    const CFAMILY = 'myersrecruitmentdatabase.cfamily';

    /** the column name for the order field */
    const ORDER = 'myersrecruitmentdatabase.order';

    /** the column name for the stockOrig field */
    const STOCKORIG = 'myersrecruitmentdatabase.stockOrig';

    /** the column name for the stock field */
    const STOCK = 'myersrecruitmentdatabase.stock';

    /** the column name for the C_Code field */
    const C_CODE = 'myersrecruitmentdatabase.C_Code';

    /** the column name for the AreaCode field */
    const AREACODE = 'myersrecruitmentdatabase.AreaCode';

    /** the column name for the Area field */
    const AREA = 'myersrecruitmentdatabase.Area';

    /** the column name for the Unit field */
    const UNIT = 'myersrecruitmentdatabase.Unit';

    /** the column name for the Latitude2 field */
    const LATITUDE2 = 'myersrecruitmentdatabase.Latitude2';

    /** the column name for the ns field */
    const NS = 'myersrecruitmentdatabase.ns';

    /** the column name for the longitude2 field */
    const LONGITUDE2 = 'myersrecruitmentdatabase.longitude2';

    /** the column name for the we field */
    const WE = 'myersrecruitmentdatabase.we';

    /** the column name for the source field */
    const SOURCE = 'myersrecruitmentdatabase.source';

    /** the column name for the MainRef field */
    const MAINREF = 'myersrecruitmentdatabase.MainRef';

    /** the column name for the DataRef field */
    const DATAREF = 'myersrecruitmentdatabase.DataRef';

    /** the column name for the CVRec field */
    const CVREC = 'myersrecruitmentdatabase.CVRec';

    /** the column name for the comments field */
    const COMMENTS = 'myersrecruitmentdatabase.comments';

    /** the column name for the comments2 field */
    const COMMENTS2 = 'myersrecruitmentdatabase.comments2';

    /** the column name for the commentsN field */
    const COMMENTSN = 'myersrecruitmentdatabase.commentsN';

    /** the column name for the AreaTxt field */
    const AREATXT = 'myersrecruitmentdatabase.AreaTxt';

    /** the column name for the fage field */
    const FAGE = 'myersrecruitmentdatabase.fage';

    /** the column name for the method field */
    const METHOD = 'myersrecruitmentdatabase.method';

    /** the column name for the method2 field */
    const METHOD2 = 'myersrecruitmentdatabase.method2';

    /** the column name for the unitssb field */
    const UNITSSB = 'myersrecruitmentdatabase.unitssb';

    /** the column name for the unitrec field */
    const UNITREC = 'myersrecruitmentdatabase.unitrec';

    /** the column name for the unitland field */
    const UNITLAND = 'myersrecruitmentdatabase.unitland';

    /** the column name for the agerecdat field */
    const AGERECDAT = 'myersrecruitmentdatabase.agerecdat';

    /** the column name for the eggdiam field */
    const EGGDIAM = 'myersrecruitmentdatabase.eggdiam';

    /** the column name for the lhatch field */
    const LHATCH = 'myersrecruitmentdatabase.lhatch';

    /** the column name for the lmeta field */
    const LMETA = 'myersrecruitmentdatabase.lmeta';

    /** the column name for the deltal field */
    const DELTAL = 'myersrecruitmentdatabase.deltal';

    /** the column name for the deltan field */
    const DELTAN = 'myersrecruitmentdatabase.deltan';

    /** the column name for the monthspa field */
    const MONTHSPA = 'myersrecruitmentdatabase.monthspa';

    /** the column name for the spawnmnth field */
    const SPAWNMNTH = 'myersrecruitmentdatabase.spawnmnth';

    /** the column name for the natmort field */
    const NATMORT = 'myersrecruitmentdatabase.natmort';

    /** the column name for the f01 field */
    const F01 = 'myersrecruitmentdatabase.f01';

    /** the column name for the fmax field */
    const FMAX = 'myersrecruitmentdatabase.fmax';

    /** the column name for the fmed field */
    const FMED = 'myersrecruitmentdatabase.fmed';

    /** the column name for the kgprecf0 field */
    const KGPRECF0 = 'myersrecruitmentdatabase.kgprecf0';

    /** the column name for the spawnloc field */
    const SPAWNLOC = 'myersrecruitmentdatabase.spawnloc';

    /** the column name for the eggtype field */
    const EGGTYPE = 'myersrecruitmentdatabase.eggtype';

    /** the column name for the Feedtype field */
    const FEEDTYPE = 'myersrecruitmentdatabase.Feedtype';

    /** the column name for the sourcemat field */
    const SOURCEMAT = 'myersrecruitmentdatabase.sourcemat';

    /** the column name for the lenmat field */
    const LENMAT = 'myersrecruitmentdatabase.lenmat';

    /** the column name for the lenmatm field */
    const LENMATM = 'myersrecruitmentdatabase.lenmatm';

    /** the column name for the lenmatf field */
    const LENMATF = 'myersrecruitmentdatabase.lenmatf';

    /** the column name for the tm field */
    const TM = 'myersrecruitmentdatabase.tm';

    /** the column name for the tmRef field */
    const TMREF = 'myersrecruitmentdatabase.tmRef';

    /** the column name for the agemat field */
    const AGEMAT = 'myersrecruitmentdatabase.agemat';

    /** the column name for the agematm field */
    const AGEMATM = 'myersrecruitmentdatabase.agematm';

    /** the column name for the agematf field */
    const AGEMATF = 'myersrecruitmentdatabase.agematf';

    /** the column name for the lenrec field */
    const LENREC = 'myersrecruitmentdatabase.lenrec';

    /** the column name for the agerec field */
    const AGEREC = 'myersrecruitmentdatabase.agerec';

    /** the column name for the agerecm field */
    const AGERECM = 'myersrecruitmentdatabase.agerecm';

    /** the column name for the agerecf field */
    const AGERECF = 'myersrecruitmentdatabase.agerecf';

    /** the column name for the Loo field */
    const LOO = 'myersrecruitmentdatabase.Loo';

    /** the column name for the K field */
    const K = 'myersrecruitmentdatabase.K';

    /** the column name for the LengthType field */
    const LENGTHTYPE = 'myersrecruitmentdatabase.LengthType';

    /** the column name for the GrowthRef field */
    const GROWTHREF = 'myersrecruitmentdatabase.GrowthRef';

    /** the column name for the sourcegro field */
    const SOURCEGRO = 'myersrecruitmentdatabase.sourcegro';

    /** the column name for the linfin field */
    const LINFIN = 'myersrecruitmentdatabase.linfin';

    /** the column name for the kram field */
    const KRAM = 'myersrecruitmentdatabase.kram';

    /** the column name for the to field */
    const TO = 'myersrecruitmentdatabase.to';

    /** the column name for the linfinm field */
    const LINFINM = 'myersrecruitmentdatabase.linfinm';

    /** the column name for the kM field */
    const KM = 'myersrecruitmentdatabase.kM';

    /** the column name for the toM field */
    const TOM = 'myersrecruitmentdatabase.toM';

    /** the column name for the linfinf field */
    const LINFINF = 'myersrecruitmentdatabase.linfinf';

    /** the column name for the kF field */
    const KF = 'myersrecruitmentdatabase.kF';

    /** the column name for the toF field */
    const TOF = 'myersrecruitmentdatabase.toF';

    /** the column name for the sourceab field */
    const SOURCEAB = 'myersrecruitmentdatabase.sourceab';

    /** the column name for the altwtpar field */
    const ALTWTPAR = 'myersrecruitmentdatabase.altwtpar';

    /** the column name for the bltwtpar field */
    const BLTWTPAR = 'myersrecruitmentdatabase.bltwtpar';

    /** the column name for the altwtparm field */
    const ALTWTPARM = 'myersrecruitmentdatabase.altwtparm';

    /** the column name for the bltwtparm field */
    const BLTWTPARM = 'myersrecruitmentdatabase.bltwtparm';

    /** the column name for the altwtparf field */
    const ALTWTPARF = 'myersrecruitmentdatabase.altwtparf';

    /** the column name for the bltwtparf field */
    const BLTWTPARF = 'myersrecruitmentdatabase.bltwtparf';

    /** the column name for the entered field */
    const ENTERED = 'myersrecruitmentdatabase.entered';

    /** the column name for the dateentered field */
    const DATEENTERED = 'myersrecruitmentdatabase.dateentered';

    /** the column name for the modified field */
    const MODIFIED = 'myersrecruitmentdatabase.modified';

    /** the column name for the datemodified field */
    const DATEMODIFIED = 'myersrecruitmentdatabase.datemodified';

    /** the column name for the expert field */
    const EXPERT = 'myersrecruitmentdatabase.expert';

    /** the column name for the datechecked field */
    const DATECHECKED = 'myersrecruitmentdatabase.datechecked';

    /** the column name for the TS field */
    const TS = 'myersrecruitmentdatabase.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Myersrecruitmentdatabase objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Myersrecruitmentdatabase[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. MyersrecruitmentdatabasePeer::$fieldNames[MyersrecruitmentdatabasePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Reclag', 'Sp', 'Genusused', 'Speciesused', 'Speccode', 'Stockcode', 'Family', 'Cfamily', 'Order', 'Stockorig', 'Stock', 'CCode', 'Areacode', 'Area', 'Unit', 'Latitude2', 'Ns', 'Longitude2', 'We', 'Source', 'Mainref', 'Dataref', 'Cvrec', 'Comments', 'Comments2', 'Commentsn', 'Areatxt', 'Fage', 'Method', 'Method2', 'Unitssb', 'Unitrec', 'Unitland', 'Agerecdat', 'Eggdiam', 'Lhatch', 'Lmeta', 'Deltal', 'Deltan', 'Monthspa', 'Spawnmnth', 'Natmort', 'F01', 'Fmax', 'Fmed', 'Kgprecf0', 'Spawnloc', 'Eggtype', 'Feedtype', 'Sourcemat', 'Lenmat', 'Lenmatm', 'Lenmatf', 'Tm', 'Tmref', 'Agemat', 'Agematm', 'Agematf', 'Lenrec', 'Agerec', 'Agerecm', 'Agerecf', 'Loo', 'K', 'Lengthtype', 'Growthref', 'Sourcegro', 'Linfin', 'Kram', 'To', 'Linfinm', 'Km', 'Tom', 'Linfinf', 'Kf', 'Tof', 'Sourceab', 'Altwtpar', 'Bltwtpar', 'Altwtparm', 'Bltwtparm', 'Altwtparf', 'Bltwtparf', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'reclag', 'sp', 'genusused', 'speciesused', 'speccode', 'stockcode', 'family', 'cfamily', 'order', 'stockorig', 'stock', 'cCode', 'areacode', 'area', 'unit', 'latitude2', 'ns', 'longitude2', 'we', 'source', 'mainref', 'dataref', 'cvrec', 'comments', 'comments2', 'commentsn', 'areatxt', 'fage', 'method', 'method2', 'unitssb', 'unitrec', 'unitland', 'agerecdat', 'eggdiam', 'lhatch', 'lmeta', 'deltal', 'deltan', 'monthspa', 'spawnmnth', 'natmort', 'f01', 'fmax', 'fmed', 'kgprecf0', 'spawnloc', 'eggtype', 'feedtype', 'sourcemat', 'lenmat', 'lenmatm', 'lenmatf', 'tm', 'tmref', 'agemat', 'agematm', 'agematf', 'lenrec', 'agerec', 'agerecm', 'agerecf', 'loo', 'k', 'lengthtype', 'growthref', 'sourcegro', 'linfin', 'kram', 'to', 'linfinm', 'km', 'tom', 'linfinf', 'kf', 'tof', 'sourceab', 'altwtpar', 'bltwtpar', 'altwtparm', 'bltwtparm', 'altwtparf', 'bltwtparf', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (MyersrecruitmentdatabasePeer::ID, MyersrecruitmentdatabasePeer::RECLAG, MyersrecruitmentdatabasePeer::SP, MyersrecruitmentdatabasePeer::GENUSUSED, MyersrecruitmentdatabasePeer::SPECIESUSED, MyersrecruitmentdatabasePeer::SPECCODE, MyersrecruitmentdatabasePeer::STOCKCODE, MyersrecruitmentdatabasePeer::FAMILY, MyersrecruitmentdatabasePeer::CFAMILY, MyersrecruitmentdatabasePeer::ORDER, MyersrecruitmentdatabasePeer::STOCKORIG, MyersrecruitmentdatabasePeer::STOCK, MyersrecruitmentdatabasePeer::C_CODE, MyersrecruitmentdatabasePeer::AREACODE, MyersrecruitmentdatabasePeer::AREA, MyersrecruitmentdatabasePeer::UNIT, MyersrecruitmentdatabasePeer::LATITUDE2, MyersrecruitmentdatabasePeer::NS, MyersrecruitmentdatabasePeer::LONGITUDE2, MyersrecruitmentdatabasePeer::WE, MyersrecruitmentdatabasePeer::SOURCE, MyersrecruitmentdatabasePeer::MAINREF, MyersrecruitmentdatabasePeer::DATAREF, MyersrecruitmentdatabasePeer::CVREC, MyersrecruitmentdatabasePeer::COMMENTS, MyersrecruitmentdatabasePeer::COMMENTS2, MyersrecruitmentdatabasePeer::COMMENTSN, MyersrecruitmentdatabasePeer::AREATXT, MyersrecruitmentdatabasePeer::FAGE, MyersrecruitmentdatabasePeer::METHOD, MyersrecruitmentdatabasePeer::METHOD2, MyersrecruitmentdatabasePeer::UNITSSB, MyersrecruitmentdatabasePeer::UNITREC, MyersrecruitmentdatabasePeer::UNITLAND, MyersrecruitmentdatabasePeer::AGERECDAT, MyersrecruitmentdatabasePeer::EGGDIAM, MyersrecruitmentdatabasePeer::LHATCH, MyersrecruitmentdatabasePeer::LMETA, MyersrecruitmentdatabasePeer::DELTAL, MyersrecruitmentdatabasePeer::DELTAN, MyersrecruitmentdatabasePeer::MONTHSPA, MyersrecruitmentdatabasePeer::SPAWNMNTH, MyersrecruitmentdatabasePeer::NATMORT, MyersrecruitmentdatabasePeer::F01, MyersrecruitmentdatabasePeer::FMAX, MyersrecruitmentdatabasePeer::FMED, MyersrecruitmentdatabasePeer::KGPRECF0, MyersrecruitmentdatabasePeer::SPAWNLOC, MyersrecruitmentdatabasePeer::EGGTYPE, MyersrecruitmentdatabasePeer::FEEDTYPE, MyersrecruitmentdatabasePeer::SOURCEMAT, MyersrecruitmentdatabasePeer::LENMAT, MyersrecruitmentdatabasePeer::LENMATM, MyersrecruitmentdatabasePeer::LENMATF, MyersrecruitmentdatabasePeer::TM, MyersrecruitmentdatabasePeer::TMREF, MyersrecruitmentdatabasePeer::AGEMAT, MyersrecruitmentdatabasePeer::AGEMATM, MyersrecruitmentdatabasePeer::AGEMATF, MyersrecruitmentdatabasePeer::LENREC, MyersrecruitmentdatabasePeer::AGEREC, MyersrecruitmentdatabasePeer::AGERECM, MyersrecruitmentdatabasePeer::AGERECF, MyersrecruitmentdatabasePeer::LOO, MyersrecruitmentdatabasePeer::K, MyersrecruitmentdatabasePeer::LENGTHTYPE, MyersrecruitmentdatabasePeer::GROWTHREF, MyersrecruitmentdatabasePeer::SOURCEGRO, MyersrecruitmentdatabasePeer::LINFIN, MyersrecruitmentdatabasePeer::KRAM, MyersrecruitmentdatabasePeer::TO, MyersrecruitmentdatabasePeer::LINFINM, MyersrecruitmentdatabasePeer::KM, MyersrecruitmentdatabasePeer::TOM, MyersrecruitmentdatabasePeer::LINFINF, MyersrecruitmentdatabasePeer::KF, MyersrecruitmentdatabasePeer::TOF, MyersrecruitmentdatabasePeer::SOURCEAB, MyersrecruitmentdatabasePeer::ALTWTPAR, MyersrecruitmentdatabasePeer::BLTWTPAR, MyersrecruitmentdatabasePeer::ALTWTPARM, MyersrecruitmentdatabasePeer::BLTWTPARM, MyersrecruitmentdatabasePeer::ALTWTPARF, MyersrecruitmentdatabasePeer::BLTWTPARF, MyersrecruitmentdatabasePeer::ENTERED, MyersrecruitmentdatabasePeer::DATEENTERED, MyersrecruitmentdatabasePeer::MODIFIED, MyersrecruitmentdatabasePeer::DATEMODIFIED, MyersrecruitmentdatabasePeer::EXPERT, MyersrecruitmentdatabasePeer::DATECHECKED, MyersrecruitmentdatabasePeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'RECLAG', 'SP', 'GENUSUSED', 'SPECIESUSED', 'SPECCODE', 'STOCKCODE', 'FAMILY', 'CFAMILY', 'ORDER', 'STOCKORIG', 'STOCK', 'C_CODE', 'AREACODE', 'AREA', 'UNIT', 'LATITUDE2', 'NS', 'LONGITUDE2', 'WE', 'SOURCE', 'MAINREF', 'DATAREF', 'CVREC', 'COMMENTS', 'COMMENTS2', 'COMMENTSN', 'AREATXT', 'FAGE', 'METHOD', 'METHOD2', 'UNITSSB', 'UNITREC', 'UNITLAND', 'AGERECDAT', 'EGGDIAM', 'LHATCH', 'LMETA', 'DELTAL', 'DELTAN', 'MONTHSPA', 'SPAWNMNTH', 'NATMORT', 'F01', 'FMAX', 'FMED', 'KGPRECF0', 'SPAWNLOC', 'EGGTYPE', 'FEEDTYPE', 'SOURCEMAT', 'LENMAT', 'LENMATM', 'LENMATF', 'TM', 'TMREF', 'AGEMAT', 'AGEMATM', 'AGEMATF', 'LENREC', 'AGEREC', 'AGERECM', 'AGERECF', 'LOO', 'K', 'LENGTHTYPE', 'GROWTHREF', 'SOURCEGRO', 'LINFIN', 'KRAM', 'TO', 'LINFINM', 'KM', 'TOM', 'LINFINF', 'KF', 'TOF', 'SOURCEAB', 'ALTWTPAR', 'BLTWTPAR', 'ALTWTPARM', 'BLTWTPARM', 'ALTWTPARF', 'BLTWTPARF', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'Reclag', 'sp', 'genusUsed', 'speciesUsed', 'speccode', 'stockcode', 'family', 'cfamily', 'order', 'stockOrig', 'stock', 'C_Code', 'AreaCode', 'Area', 'Unit', 'Latitude2', 'ns', 'longitude2', 'we', 'source', 'MainRef', 'DataRef', 'CVRec', 'comments', 'comments2', 'commentsN', 'AreaTxt', 'fage', 'method', 'method2', 'unitssb', 'unitrec', 'unitland', 'agerecdat', 'eggdiam', 'lhatch', 'lmeta', 'deltal', 'deltan', 'monthspa', 'spawnmnth', 'natmort', 'f01', 'fmax', 'fmed', 'kgprecf0', 'spawnloc', 'eggtype', 'Feedtype', 'sourcemat', 'lenmat', 'lenmatm', 'lenmatf', 'tm', 'tmRef', 'agemat', 'agematm', 'agematf', 'lenrec', 'agerec', 'agerecm', 'agerecf', 'Loo', 'K', 'LengthType', 'GrowthRef', 'sourcegro', 'linfin', 'kram', 'to', 'linfinm', 'kM', 'toM', 'linfinf', 'kF', 'toF', 'sourceab', 'altwtpar', 'bltwtpar', 'altwtparm', 'bltwtparm', 'altwtparf', 'bltwtparf', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. MyersrecruitmentdatabasePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Reclag' => 1, 'Sp' => 2, 'Genusused' => 3, 'Speciesused' => 4, 'Speccode' => 5, 'Stockcode' => 6, 'Family' => 7, 'Cfamily' => 8, 'Order' => 9, 'Stockorig' => 10, 'Stock' => 11, 'CCode' => 12, 'Areacode' => 13, 'Area' => 14, 'Unit' => 15, 'Latitude2' => 16, 'Ns' => 17, 'Longitude2' => 18, 'We' => 19, 'Source' => 20, 'Mainref' => 21, 'Dataref' => 22, 'Cvrec' => 23, 'Comments' => 24, 'Comments2' => 25, 'Commentsn' => 26, 'Areatxt' => 27, 'Fage' => 28, 'Method' => 29, 'Method2' => 30, 'Unitssb' => 31, 'Unitrec' => 32, 'Unitland' => 33, 'Agerecdat' => 34, 'Eggdiam' => 35, 'Lhatch' => 36, 'Lmeta' => 37, 'Deltal' => 38, 'Deltan' => 39, 'Monthspa' => 40, 'Spawnmnth' => 41, 'Natmort' => 42, 'F01' => 43, 'Fmax' => 44, 'Fmed' => 45, 'Kgprecf0' => 46, 'Spawnloc' => 47, 'Eggtype' => 48, 'Feedtype' => 49, 'Sourcemat' => 50, 'Lenmat' => 51, 'Lenmatm' => 52, 'Lenmatf' => 53, 'Tm' => 54, 'Tmref' => 55, 'Agemat' => 56, 'Agematm' => 57, 'Agematf' => 58, 'Lenrec' => 59, 'Agerec' => 60, 'Agerecm' => 61, 'Agerecf' => 62, 'Loo' => 63, 'K' => 64, 'Lengthtype' => 65, 'Growthref' => 66, 'Sourcegro' => 67, 'Linfin' => 68, 'Kram' => 69, 'To' => 70, 'Linfinm' => 71, 'Km' => 72, 'Tom' => 73, 'Linfinf' => 74, 'Kf' => 75, 'Tof' => 76, 'Sourceab' => 77, 'Altwtpar' => 78, 'Bltwtpar' => 79, 'Altwtparm' => 80, 'Bltwtparm' => 81, 'Altwtparf' => 82, 'Bltwtparf' => 83, 'Entered' => 84, 'Dateentered' => 85, 'Modified' => 86, 'Datemodified' => 87, 'Expert' => 88, 'Datechecked' => 89, 'Ts' => 90, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'reclag' => 1, 'sp' => 2, 'genusused' => 3, 'speciesused' => 4, 'speccode' => 5, 'stockcode' => 6, 'family' => 7, 'cfamily' => 8, 'order' => 9, 'stockorig' => 10, 'stock' => 11, 'cCode' => 12, 'areacode' => 13, 'area' => 14, 'unit' => 15, 'latitude2' => 16, 'ns' => 17, 'longitude2' => 18, 'we' => 19, 'source' => 20, 'mainref' => 21, 'dataref' => 22, 'cvrec' => 23, 'comments' => 24, 'comments2' => 25, 'commentsn' => 26, 'areatxt' => 27, 'fage' => 28, 'method' => 29, 'method2' => 30, 'unitssb' => 31, 'unitrec' => 32, 'unitland' => 33, 'agerecdat' => 34, 'eggdiam' => 35, 'lhatch' => 36, 'lmeta' => 37, 'deltal' => 38, 'deltan' => 39, 'monthspa' => 40, 'spawnmnth' => 41, 'natmort' => 42, 'f01' => 43, 'fmax' => 44, 'fmed' => 45, 'kgprecf0' => 46, 'spawnloc' => 47, 'eggtype' => 48, 'feedtype' => 49, 'sourcemat' => 50, 'lenmat' => 51, 'lenmatm' => 52, 'lenmatf' => 53, 'tm' => 54, 'tmref' => 55, 'agemat' => 56, 'agematm' => 57, 'agematf' => 58, 'lenrec' => 59, 'agerec' => 60, 'agerecm' => 61, 'agerecf' => 62, 'loo' => 63, 'k' => 64, 'lengthtype' => 65, 'growthref' => 66, 'sourcegro' => 67, 'linfin' => 68, 'kram' => 69, 'to' => 70, 'linfinm' => 71, 'km' => 72, 'tom' => 73, 'linfinf' => 74, 'kf' => 75, 'tof' => 76, 'sourceab' => 77, 'altwtpar' => 78, 'bltwtpar' => 79, 'altwtparm' => 80, 'bltwtparm' => 81, 'altwtparf' => 82, 'bltwtparf' => 83, 'entered' => 84, 'dateentered' => 85, 'modified' => 86, 'datemodified' => 87, 'expert' => 88, 'datechecked' => 89, 'ts' => 90, ),
        BasePeer::TYPE_COLNAME => array (MyersrecruitmentdatabasePeer::ID => 0, MyersrecruitmentdatabasePeer::RECLAG => 1, MyersrecruitmentdatabasePeer::SP => 2, MyersrecruitmentdatabasePeer::GENUSUSED => 3, MyersrecruitmentdatabasePeer::SPECIESUSED => 4, MyersrecruitmentdatabasePeer::SPECCODE => 5, MyersrecruitmentdatabasePeer::STOCKCODE => 6, MyersrecruitmentdatabasePeer::FAMILY => 7, MyersrecruitmentdatabasePeer::CFAMILY => 8, MyersrecruitmentdatabasePeer::ORDER => 9, MyersrecruitmentdatabasePeer::STOCKORIG => 10, MyersrecruitmentdatabasePeer::STOCK => 11, MyersrecruitmentdatabasePeer::C_CODE => 12, MyersrecruitmentdatabasePeer::AREACODE => 13, MyersrecruitmentdatabasePeer::AREA => 14, MyersrecruitmentdatabasePeer::UNIT => 15, MyersrecruitmentdatabasePeer::LATITUDE2 => 16, MyersrecruitmentdatabasePeer::NS => 17, MyersrecruitmentdatabasePeer::LONGITUDE2 => 18, MyersrecruitmentdatabasePeer::WE => 19, MyersrecruitmentdatabasePeer::SOURCE => 20, MyersrecruitmentdatabasePeer::MAINREF => 21, MyersrecruitmentdatabasePeer::DATAREF => 22, MyersrecruitmentdatabasePeer::CVREC => 23, MyersrecruitmentdatabasePeer::COMMENTS => 24, MyersrecruitmentdatabasePeer::COMMENTS2 => 25, MyersrecruitmentdatabasePeer::COMMENTSN => 26, MyersrecruitmentdatabasePeer::AREATXT => 27, MyersrecruitmentdatabasePeer::FAGE => 28, MyersrecruitmentdatabasePeer::METHOD => 29, MyersrecruitmentdatabasePeer::METHOD2 => 30, MyersrecruitmentdatabasePeer::UNITSSB => 31, MyersrecruitmentdatabasePeer::UNITREC => 32, MyersrecruitmentdatabasePeer::UNITLAND => 33, MyersrecruitmentdatabasePeer::AGERECDAT => 34, MyersrecruitmentdatabasePeer::EGGDIAM => 35, MyersrecruitmentdatabasePeer::LHATCH => 36, MyersrecruitmentdatabasePeer::LMETA => 37, MyersrecruitmentdatabasePeer::DELTAL => 38, MyersrecruitmentdatabasePeer::DELTAN => 39, MyersrecruitmentdatabasePeer::MONTHSPA => 40, MyersrecruitmentdatabasePeer::SPAWNMNTH => 41, MyersrecruitmentdatabasePeer::NATMORT => 42, MyersrecruitmentdatabasePeer::F01 => 43, MyersrecruitmentdatabasePeer::FMAX => 44, MyersrecruitmentdatabasePeer::FMED => 45, MyersrecruitmentdatabasePeer::KGPRECF0 => 46, MyersrecruitmentdatabasePeer::SPAWNLOC => 47, MyersrecruitmentdatabasePeer::EGGTYPE => 48, MyersrecruitmentdatabasePeer::FEEDTYPE => 49, MyersrecruitmentdatabasePeer::SOURCEMAT => 50, MyersrecruitmentdatabasePeer::LENMAT => 51, MyersrecruitmentdatabasePeer::LENMATM => 52, MyersrecruitmentdatabasePeer::LENMATF => 53, MyersrecruitmentdatabasePeer::TM => 54, MyersrecruitmentdatabasePeer::TMREF => 55, MyersrecruitmentdatabasePeer::AGEMAT => 56, MyersrecruitmentdatabasePeer::AGEMATM => 57, MyersrecruitmentdatabasePeer::AGEMATF => 58, MyersrecruitmentdatabasePeer::LENREC => 59, MyersrecruitmentdatabasePeer::AGEREC => 60, MyersrecruitmentdatabasePeer::AGERECM => 61, MyersrecruitmentdatabasePeer::AGERECF => 62, MyersrecruitmentdatabasePeer::LOO => 63, MyersrecruitmentdatabasePeer::K => 64, MyersrecruitmentdatabasePeer::LENGTHTYPE => 65, MyersrecruitmentdatabasePeer::GROWTHREF => 66, MyersrecruitmentdatabasePeer::SOURCEGRO => 67, MyersrecruitmentdatabasePeer::LINFIN => 68, MyersrecruitmentdatabasePeer::KRAM => 69, MyersrecruitmentdatabasePeer::TO => 70, MyersrecruitmentdatabasePeer::LINFINM => 71, MyersrecruitmentdatabasePeer::KM => 72, MyersrecruitmentdatabasePeer::TOM => 73, MyersrecruitmentdatabasePeer::LINFINF => 74, MyersrecruitmentdatabasePeer::KF => 75, MyersrecruitmentdatabasePeer::TOF => 76, MyersrecruitmentdatabasePeer::SOURCEAB => 77, MyersrecruitmentdatabasePeer::ALTWTPAR => 78, MyersrecruitmentdatabasePeer::BLTWTPAR => 79, MyersrecruitmentdatabasePeer::ALTWTPARM => 80, MyersrecruitmentdatabasePeer::BLTWTPARM => 81, MyersrecruitmentdatabasePeer::ALTWTPARF => 82, MyersrecruitmentdatabasePeer::BLTWTPARF => 83, MyersrecruitmentdatabasePeer::ENTERED => 84, MyersrecruitmentdatabasePeer::DATEENTERED => 85, MyersrecruitmentdatabasePeer::MODIFIED => 86, MyersrecruitmentdatabasePeer::DATEMODIFIED => 87, MyersrecruitmentdatabasePeer::EXPERT => 88, MyersrecruitmentdatabasePeer::DATECHECKED => 89, MyersrecruitmentdatabasePeer::TS => 90, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'RECLAG' => 1, 'SP' => 2, 'GENUSUSED' => 3, 'SPECIESUSED' => 4, 'SPECCODE' => 5, 'STOCKCODE' => 6, 'FAMILY' => 7, 'CFAMILY' => 8, 'ORDER' => 9, 'STOCKORIG' => 10, 'STOCK' => 11, 'C_CODE' => 12, 'AREACODE' => 13, 'AREA' => 14, 'UNIT' => 15, 'LATITUDE2' => 16, 'NS' => 17, 'LONGITUDE2' => 18, 'WE' => 19, 'SOURCE' => 20, 'MAINREF' => 21, 'DATAREF' => 22, 'CVREC' => 23, 'COMMENTS' => 24, 'COMMENTS2' => 25, 'COMMENTSN' => 26, 'AREATXT' => 27, 'FAGE' => 28, 'METHOD' => 29, 'METHOD2' => 30, 'UNITSSB' => 31, 'UNITREC' => 32, 'UNITLAND' => 33, 'AGERECDAT' => 34, 'EGGDIAM' => 35, 'LHATCH' => 36, 'LMETA' => 37, 'DELTAL' => 38, 'DELTAN' => 39, 'MONTHSPA' => 40, 'SPAWNMNTH' => 41, 'NATMORT' => 42, 'F01' => 43, 'FMAX' => 44, 'FMED' => 45, 'KGPRECF0' => 46, 'SPAWNLOC' => 47, 'EGGTYPE' => 48, 'FEEDTYPE' => 49, 'SOURCEMAT' => 50, 'LENMAT' => 51, 'LENMATM' => 52, 'LENMATF' => 53, 'TM' => 54, 'TMREF' => 55, 'AGEMAT' => 56, 'AGEMATM' => 57, 'AGEMATF' => 58, 'LENREC' => 59, 'AGEREC' => 60, 'AGERECM' => 61, 'AGERECF' => 62, 'LOO' => 63, 'K' => 64, 'LENGTHTYPE' => 65, 'GROWTHREF' => 66, 'SOURCEGRO' => 67, 'LINFIN' => 68, 'KRAM' => 69, 'TO' => 70, 'LINFINM' => 71, 'KM' => 72, 'TOM' => 73, 'LINFINF' => 74, 'KF' => 75, 'TOF' => 76, 'SOURCEAB' => 77, 'ALTWTPAR' => 78, 'BLTWTPAR' => 79, 'ALTWTPARM' => 80, 'BLTWTPARM' => 81, 'ALTWTPARF' => 82, 'BLTWTPARF' => 83, 'ENTERED' => 84, 'DATEENTERED' => 85, 'MODIFIED' => 86, 'DATEMODIFIED' => 87, 'EXPERT' => 88, 'DATECHECKED' => 89, 'TS' => 90, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'Reclag' => 1, 'sp' => 2, 'genusUsed' => 3, 'speciesUsed' => 4, 'speccode' => 5, 'stockcode' => 6, 'family' => 7, 'cfamily' => 8, 'order' => 9, 'stockOrig' => 10, 'stock' => 11, 'C_Code' => 12, 'AreaCode' => 13, 'Area' => 14, 'Unit' => 15, 'Latitude2' => 16, 'ns' => 17, 'longitude2' => 18, 'we' => 19, 'source' => 20, 'MainRef' => 21, 'DataRef' => 22, 'CVRec' => 23, 'comments' => 24, 'comments2' => 25, 'commentsN' => 26, 'AreaTxt' => 27, 'fage' => 28, 'method' => 29, 'method2' => 30, 'unitssb' => 31, 'unitrec' => 32, 'unitland' => 33, 'agerecdat' => 34, 'eggdiam' => 35, 'lhatch' => 36, 'lmeta' => 37, 'deltal' => 38, 'deltan' => 39, 'monthspa' => 40, 'spawnmnth' => 41, 'natmort' => 42, 'f01' => 43, 'fmax' => 44, 'fmed' => 45, 'kgprecf0' => 46, 'spawnloc' => 47, 'eggtype' => 48, 'Feedtype' => 49, 'sourcemat' => 50, 'lenmat' => 51, 'lenmatm' => 52, 'lenmatf' => 53, 'tm' => 54, 'tmRef' => 55, 'agemat' => 56, 'agematm' => 57, 'agematf' => 58, 'lenrec' => 59, 'agerec' => 60, 'agerecm' => 61, 'agerecf' => 62, 'Loo' => 63, 'K' => 64, 'LengthType' => 65, 'GrowthRef' => 66, 'sourcegro' => 67, 'linfin' => 68, 'kram' => 69, 'to' => 70, 'linfinm' => 71, 'kM' => 72, 'toM' => 73, 'linfinf' => 74, 'kF' => 75, 'toF' => 76, 'sourceab' => 77, 'altwtpar' => 78, 'bltwtpar' => 79, 'altwtparm' => 80, 'bltwtparm' => 81, 'altwtparf' => 82, 'bltwtparf' => 83, 'entered' => 84, 'dateentered' => 85, 'modified' => 86, 'datemodified' => 87, 'expert' => 88, 'datechecked' => 89, 'TS' => 90, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, )
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
        $toNames = MyersrecruitmentdatabasePeer::getFieldNames($toType);
        $key = isset(MyersrecruitmentdatabasePeer::$fieldKeys[$fromType][$name]) ? MyersrecruitmentdatabasePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(MyersrecruitmentdatabasePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, MyersrecruitmentdatabasePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return MyersrecruitmentdatabasePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. MyersrecruitmentdatabasePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(MyersrecruitmentdatabasePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::ID);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::RECLAG);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::SP);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::GENUSUSED);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::SPECIESUSED);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::SPECCODE);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::STOCKCODE);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::FAMILY);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::CFAMILY);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::ORDER);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::STOCKORIG);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::STOCK);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::C_CODE);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::AREACODE);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::AREA);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::UNIT);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::LATITUDE2);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::NS);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::LONGITUDE2);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::WE);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::SOURCE);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::MAINREF);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::DATAREF);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::CVREC);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::COMMENTS);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::COMMENTS2);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::COMMENTSN);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::AREATXT);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::FAGE);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::METHOD);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::METHOD2);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::UNITSSB);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::UNITREC);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::UNITLAND);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::AGERECDAT);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::EGGDIAM);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::LHATCH);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::LMETA);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::DELTAL);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::DELTAN);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::MONTHSPA);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::SPAWNMNTH);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::NATMORT);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::F01);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::FMAX);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::FMED);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::KGPRECF0);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::SPAWNLOC);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::EGGTYPE);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::FEEDTYPE);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::SOURCEMAT);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::LENMAT);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::LENMATM);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::LENMATF);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::TM);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::TMREF);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::AGEMAT);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::AGEMATM);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::AGEMATF);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::LENREC);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::AGEREC);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::AGERECM);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::AGERECF);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::LOO);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::K);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::LENGTHTYPE);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::GROWTHREF);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::SOURCEGRO);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::LINFIN);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::KRAM);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::TO);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::LINFINM);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::KM);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::TOM);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::LINFINF);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::KF);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::TOF);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::SOURCEAB);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::ALTWTPAR);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::BLTWTPAR);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::ALTWTPARM);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::BLTWTPARM);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::ALTWTPARF);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::BLTWTPARF);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::ENTERED);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::DATEENTERED);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::MODIFIED);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::DATEMODIFIED);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::EXPERT);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::DATECHECKED);
            $criteria->addSelectColumn(MyersrecruitmentdatabasePeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.Reclag');
            $criteria->addSelectColumn($alias . '.sp');
            $criteria->addSelectColumn($alias . '.genusUsed');
            $criteria->addSelectColumn($alias . '.speciesUsed');
            $criteria->addSelectColumn($alias . '.speccode');
            $criteria->addSelectColumn($alias . '.stockcode');
            $criteria->addSelectColumn($alias . '.family');
            $criteria->addSelectColumn($alias . '.cfamily');
            $criteria->addSelectColumn($alias . '.order');
            $criteria->addSelectColumn($alias . '.stockOrig');
            $criteria->addSelectColumn($alias . '.stock');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.AreaCode');
            $criteria->addSelectColumn($alias . '.Area');
            $criteria->addSelectColumn($alias . '.Unit');
            $criteria->addSelectColumn($alias . '.Latitude2');
            $criteria->addSelectColumn($alias . '.ns');
            $criteria->addSelectColumn($alias . '.longitude2');
            $criteria->addSelectColumn($alias . '.we');
            $criteria->addSelectColumn($alias . '.source');
            $criteria->addSelectColumn($alias . '.MainRef');
            $criteria->addSelectColumn($alias . '.DataRef');
            $criteria->addSelectColumn($alias . '.CVRec');
            $criteria->addSelectColumn($alias . '.comments');
            $criteria->addSelectColumn($alias . '.comments2');
            $criteria->addSelectColumn($alias . '.commentsN');
            $criteria->addSelectColumn($alias . '.AreaTxt');
            $criteria->addSelectColumn($alias . '.fage');
            $criteria->addSelectColumn($alias . '.method');
            $criteria->addSelectColumn($alias . '.method2');
            $criteria->addSelectColumn($alias . '.unitssb');
            $criteria->addSelectColumn($alias . '.unitrec');
            $criteria->addSelectColumn($alias . '.unitland');
            $criteria->addSelectColumn($alias . '.agerecdat');
            $criteria->addSelectColumn($alias . '.eggdiam');
            $criteria->addSelectColumn($alias . '.lhatch');
            $criteria->addSelectColumn($alias . '.lmeta');
            $criteria->addSelectColumn($alias . '.deltal');
            $criteria->addSelectColumn($alias . '.deltan');
            $criteria->addSelectColumn($alias . '.monthspa');
            $criteria->addSelectColumn($alias . '.spawnmnth');
            $criteria->addSelectColumn($alias . '.natmort');
            $criteria->addSelectColumn($alias . '.f01');
            $criteria->addSelectColumn($alias . '.fmax');
            $criteria->addSelectColumn($alias . '.fmed');
            $criteria->addSelectColumn($alias . '.kgprecf0');
            $criteria->addSelectColumn($alias . '.spawnloc');
            $criteria->addSelectColumn($alias . '.eggtype');
            $criteria->addSelectColumn($alias . '.Feedtype');
            $criteria->addSelectColumn($alias . '.sourcemat');
            $criteria->addSelectColumn($alias . '.lenmat');
            $criteria->addSelectColumn($alias . '.lenmatm');
            $criteria->addSelectColumn($alias . '.lenmatf');
            $criteria->addSelectColumn($alias . '.tm');
            $criteria->addSelectColumn($alias . '.tmRef');
            $criteria->addSelectColumn($alias . '.agemat');
            $criteria->addSelectColumn($alias . '.agematm');
            $criteria->addSelectColumn($alias . '.agematf');
            $criteria->addSelectColumn($alias . '.lenrec');
            $criteria->addSelectColumn($alias . '.agerec');
            $criteria->addSelectColumn($alias . '.agerecm');
            $criteria->addSelectColumn($alias . '.agerecf');
            $criteria->addSelectColumn($alias . '.Loo');
            $criteria->addSelectColumn($alias . '.K');
            $criteria->addSelectColumn($alias . '.LengthType');
            $criteria->addSelectColumn($alias . '.GrowthRef');
            $criteria->addSelectColumn($alias . '.sourcegro');
            $criteria->addSelectColumn($alias . '.linfin');
            $criteria->addSelectColumn($alias . '.kram');
            $criteria->addSelectColumn($alias . '.to');
            $criteria->addSelectColumn($alias . '.linfinm');
            $criteria->addSelectColumn($alias . '.kM');
            $criteria->addSelectColumn($alias . '.toM');
            $criteria->addSelectColumn($alias . '.linfinf');
            $criteria->addSelectColumn($alias . '.kF');
            $criteria->addSelectColumn($alias . '.toF');
            $criteria->addSelectColumn($alias . '.sourceab');
            $criteria->addSelectColumn($alias . '.altwtpar');
            $criteria->addSelectColumn($alias . '.bltwtpar');
            $criteria->addSelectColumn($alias . '.altwtparm');
            $criteria->addSelectColumn($alias . '.bltwtparm');
            $criteria->addSelectColumn($alias . '.altwtparf');
            $criteria->addSelectColumn($alias . '.bltwtparf');
            $criteria->addSelectColumn($alias . '.entered');
            $criteria->addSelectColumn($alias . '.dateentered');
            $criteria->addSelectColumn($alias . '.modified');
            $criteria->addSelectColumn($alias . '.datemodified');
            $criteria->addSelectColumn($alias . '.expert');
            $criteria->addSelectColumn($alias . '.datechecked');
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
        $criteria->setPrimaryTableName(MyersrecruitmentdatabasePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MyersrecruitmentdatabasePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(MyersrecruitmentdatabasePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(MyersrecruitmentdatabasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Myersrecruitmentdatabase
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = MyersrecruitmentdatabasePeer::doSelect($critcopy, $con);
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
        return MyersrecruitmentdatabasePeer::populateObjects(MyersrecruitmentdatabasePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(MyersrecruitmentdatabasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            MyersrecruitmentdatabasePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(MyersrecruitmentdatabasePeer::DATABASE_NAME);

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
     * @param Myersrecruitmentdatabase $obj A Myersrecruitmentdatabase object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            MyersrecruitmentdatabasePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Myersrecruitmentdatabase object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Myersrecruitmentdatabase) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Myersrecruitmentdatabase object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(MyersrecruitmentdatabasePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Myersrecruitmentdatabase Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(MyersrecruitmentdatabasePeer::$instances[$key])) {
                return MyersrecruitmentdatabasePeer::$instances[$key];
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
        foreach (MyersrecruitmentdatabasePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        MyersrecruitmentdatabasePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to myersrecruitmentdatabase
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
        $cls = MyersrecruitmentdatabasePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = MyersrecruitmentdatabasePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = MyersrecruitmentdatabasePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MyersrecruitmentdatabasePeer::addInstanceToPool($obj, $key);
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
     * @return array (Myersrecruitmentdatabase object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = MyersrecruitmentdatabasePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = MyersrecruitmentdatabasePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + MyersrecruitmentdatabasePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MyersrecruitmentdatabasePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            MyersrecruitmentdatabasePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(MyersrecruitmentdatabasePeer::DATABASE_NAME)->getTable(MyersrecruitmentdatabasePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseMyersrecruitmentdatabasePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseMyersrecruitmentdatabasePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \MyersrecruitmentdatabaseTableMap());
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
        return MyersrecruitmentdatabasePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Myersrecruitmentdatabase or Criteria object.
     *
     * @param      mixed $values Criteria or Myersrecruitmentdatabase object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MyersrecruitmentdatabasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Myersrecruitmentdatabase object
        }


        // Set the correct dbName
        $criteria->setDbName(MyersrecruitmentdatabasePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Myersrecruitmentdatabase or Criteria object.
     *
     * @param      mixed $values Criteria or Myersrecruitmentdatabase object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MyersrecruitmentdatabasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(MyersrecruitmentdatabasePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(MyersrecruitmentdatabasePeer::ID);
            $value = $criteria->remove(MyersrecruitmentdatabasePeer::ID);
            if ($value) {
                $selectCriteria->add(MyersrecruitmentdatabasePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MyersrecruitmentdatabasePeer::TABLE_NAME);
            }

        } else { // $values is Myersrecruitmentdatabase object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(MyersrecruitmentdatabasePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the myersrecruitmentdatabase table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MyersrecruitmentdatabasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(MyersrecruitmentdatabasePeer::TABLE_NAME, $con, MyersrecruitmentdatabasePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MyersrecruitmentdatabasePeer::clearInstancePool();
            MyersrecruitmentdatabasePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Myersrecruitmentdatabase or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Myersrecruitmentdatabase object or primary key or array of primary keys
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
            $con = Propel::getConnection(MyersrecruitmentdatabasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            MyersrecruitmentdatabasePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Myersrecruitmentdatabase) { // it's a model object
            // invalidate the cache for this single object
            MyersrecruitmentdatabasePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MyersrecruitmentdatabasePeer::DATABASE_NAME);
            $criteria->add(MyersrecruitmentdatabasePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                MyersrecruitmentdatabasePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(MyersrecruitmentdatabasePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            MyersrecruitmentdatabasePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Myersrecruitmentdatabase object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Myersrecruitmentdatabase $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(MyersrecruitmentdatabasePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(MyersrecruitmentdatabasePeer::TABLE_NAME);

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

        return BasePeer::doValidate(MyersrecruitmentdatabasePeer::DATABASE_NAME, MyersrecruitmentdatabasePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Myersrecruitmentdatabase
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = MyersrecruitmentdatabasePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(MyersrecruitmentdatabasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(MyersrecruitmentdatabasePeer::DATABASE_NAME);
        $criteria->add(MyersrecruitmentdatabasePeer::ID, $pk);

        $v = MyersrecruitmentdatabasePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Myersrecruitmentdatabase[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MyersrecruitmentdatabasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(MyersrecruitmentdatabasePeer::DATABASE_NAME);
            $criteria->add(MyersrecruitmentdatabasePeer::ID, $pks, Criteria::IN);
            $objs = MyersrecruitmentdatabasePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseMyersrecruitmentdatabasePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMyersrecruitmentdatabasePeer::buildTableMap();

