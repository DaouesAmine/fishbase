<?php


/**
 * Base static class for performing query and update operations on the 'stocks' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseStocksPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'stocks';

    /** the related Propel class for this table */
    const OM_CLASS = 'Stocks';

    /** the related TableMap class for this table */
    const TM_CLASS = 'StocksTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 107;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 107;

    /** the column name for the StockCode field */
    const STOCKCODE = 'stocks.StockCode';

    /** the column name for the StockDefs field */
    const STOCKDEFS = 'stocks.StockDefs';

    /** the column name for the SpecCode field */
    const SPECCODE = 'stocks.SpecCode';

    /** the column name for the Level field */
    const LEVEL = 'stocks.Level';

    /** the column name for the LocalUnique field */
    const LOCALUNIQUE = 'stocks.LocalUnique';

    /** the column name for the IUCN_Code field */
    const IUCN_CODE = 'stocks.IUCN_Code';

    /** the column name for the IUCN_Assessment field */
    const IUCN_ASSESSMENT = 'stocks.IUCN_Assessment';

    /** the column name for the Protected field */
    const PROTECTEDSTOCK = 'stocks.Protected';

    /** the column name for the StocksRefNo field */
    const STOCKSREFNO = 'stocks.StocksRefNo';

    /** the column name for the CITES_Code field */
    const CITES_CODE = 'stocks.CITES_Code';

    /** the column name for the CITES_Date field */
    const CITES_DATE = 'stocks.CITES_Date';

    /** the column name for the CITES_Ref field */
    const CITES_REF = 'stocks.CITES_Ref';

    /** the column name for the CITES_Remarks field */
    const CITES_REMARKS = 'stocks.CITES_Remarks';

    /** the column name for the Northernmost field */
    const NORTHERNMOST = 'stocks.Northernmost';

    /** the column name for the NorthSouthN field */
    const NORTHSOUTHN = 'stocks.NorthSouthN';

    /** the column name for the Southermost field */
    const SOUTHERMOST = 'stocks.Southermost';

    /** the column name for the NorthSouthS field */
    const NORTHSOUTHS = 'stocks.NorthSouthS';

    /** the column name for the Westernmost field */
    const WESTERNMOST = 'stocks.Westernmost';

    /** the column name for the WestEastW field */
    const WESTEASTW = 'stocks.WestEastW';

    /** the column name for the Easternmost field */
    const EASTERNMOST = 'stocks.Easternmost';

    /** the column name for the WestEastE field */
    const WESTEASTE = 'stocks.WestEastE';

    /** the column name for the BoundingRef field */
    const BOUNDINGREF = 'stocks.BoundingRef';

    /** the column name for the BoundingMethod field */
    const BOUNDINGMETHOD = 'stocks.BoundingMethod';

    /** the column name for the TempMin field */
    const TEMPMIN = 'stocks.TempMin';

    /** the column name for the TempMax field */
    const TEMPMAX = 'stocks.TempMax';

    /** the column name for the TempRef field */
    const TEMPREF = 'stocks.TempRef';

    /** the column name for the EnvTemp field */
    const ENVTEMP = 'stocks.EnvTemp';

    /** the column name for the Resilience field */
    const RESILIENCE = 'stocks.Resilience';

    /** the column name for the ResilienceRemark field */
    const RESILIENCEREMARK = 'stocks.ResilienceRemark';

    /** the column name for the pHMin field */
    const PHMIN = 'stocks.pHMin';

    /** the column name for the pHMax field */
    const PHMAX = 'stocks.pHMax';

    /** the column name for the pHRef field */
    const PHREF = 'stocks.pHRef';

    /** the column name for the dHMin field */
    const DHMIN = 'stocks.dHMin';

    /** the column name for the dHMax field */
    const DHMAX = 'stocks.dHMax';

    /** the column name for the dHRef field */
    const DHREF = 'stocks.dHRef';

    /** the column name for the GenBankID field */
    const GENBANKID = 'stocks.GenBankID';

    /** the column name for the RfeID field */
    const RFEID = 'stocks.RfeID';

    /** the column name for the FIGIS_ID field */
    const FIGIS_ID = 'stocks.FIGIS_ID';

    /** the column name for the EcotoxID field */
    const ECOTOXID = 'stocks.EcotoxID';

    /** the column name for the SCRFA_data field */
    const SCRFA_DATA = 'stocks.SCRFA_data';

    /** the column name for the GMAD_ID field */
    const GMAD_ID = 'stocks.GMAD_ID';

    /** the column name for the SAUP field */
    const SAUP = 'stocks.SAUP';

    /** the column name for the SAUP_ID field */
    const SAUP_ID = 'stocks.SAUP_ID';

    /** the column name for the SAUP_Group field */
    const SAUP_GROUP = 'stocks.SAUP_Group';

    /** the column name for the AusMuseum field */
    const AUSMUSEUM = 'stocks.AusMuseum';

    /** the column name for the FishTrace field */
    const FISHTRACE = 'stocks.FishTrace';

    /** the column name for the IUCN_ID field */
    const IUCN_ID = 'stocks.IUCN_ID';

    /** the column name for the IUCN_Group field */
    const IUCN_GROUP = 'stocks.IUCN_Group';

    /** the column name for the BOLD_ID field */
    const BOLD_ID = 'stocks.BOLD_ID';

    /** the column name for the IGFAName field */
    const IGFANAME = 'stocks.IGFAName';

    /** the column name for the EssayID field */
    const ESSAYID = 'stocks.EssayID';

    /** the column name for the ICESStockID field */
    const ICESSTOCKID = 'stocks.ICESStockID';

    /** the column name for the OsteoBaseID field */
    const OSTEOBASEID = 'stocks.OsteoBaseID';

    /** the column name for the DORIS_ID field */
    const DORIS_ID = 'stocks.DORIS_ID';

    /** the column name for the Aquamaps field */
    const AQUAMAPS = 'stocks.Aquamaps';

    /** the column name for the Morphology field */
    const MORPHOLOGY = 'stocks.Morphology';

    /** the column name for the Occurrence field */
    const OCCURRENCE = 'stocks.Occurrence';

    /** the column name for the Strains field */
    const STRAINS = 'stocks.Strains';

    /** the column name for the Ecology field */
    const ECOLOGY = 'stocks.Ecology';

    /** the column name for the Diseases field */
    const DISEASES = 'stocks.Diseases';

    /** the column name for the Abnorm field */
    const ABNORM = 'stocks.Abnorm';

    /** the column name for the Metabolism field */
    const METABOLISM = 'stocks.Metabolism';

    /** the column name for the Predators field */
    const PREDATORS = 'stocks.Predators';

    /** the column name for the Spawning field */
    const SPAWNING = 'stocks.Spawning';

    /** the column name for the Fecundity field */
    const FECUNDITY = 'stocks.Fecundity';

    /** the column name for the Speed field */
    const SPEED = 'stocks.Speed';

    /** the column name for the Diet field */
    const DIET = 'stocks.Diet';

    /** the column name for the Eggs field */
    const EGGS = 'stocks.Eggs';

    /** the column name for the EggDevelop field */
    const EGGDEVELOP = 'stocks.EggDevelop';

    /** the column name for the Food field */
    const FOOD = 'stocks.Food';

    /** the column name for the Larvae field */
    const LARVAE = 'stocks.Larvae';

    /** the column name for the LarvDyn field */
    const LARVDYN = 'stocks.LarvDyn';

    /** the column name for the LarvSpeed field */
    const LARVSPEED = 'stocks.LarvSpeed';

    /** the column name for the PopDyn field */
    const POPDYN = 'stocks.PopDyn';

    /** the column name for the LengthWeight field */
    const LENGTHWEIGHT = 'stocks.LengthWeight';

    /** the column name for the Gillarea field */
    const GILLAREA = 'stocks.Gillarea';

    /** the column name for the Maturity field */
    const MATURITY = 'stocks.Maturity';

    /** the column name for the MatSizes field */
    const MATSIZES = 'stocks.MatSizes';

    /** the column name for the Processing field */
    const PROCESSING = 'stocks.Processing';

    /** the column name for the Reproduction field */
    const REPRODUCTION = 'stocks.Reproduction';

    /** the column name for the Introductions field */
    const INTRODUCTIONS = 'stocks.Introductions';

    /** the column name for the Abundance field */
    const ABUNDANCE = 'stocks.Abundance';

    /** the column name for the Vision field */
    const VISION = 'stocks.Vision';

    /** the column name for the Genetics field */
    const GENETICS = 'stocks.Genetics';

    /** the column name for the Aquaculture field */
    const AQUACULTURE = 'stocks.Aquaculture';

    /** the column name for the CountryComp field */
    const COUNTRYCOMP = 'stocks.CountryComp';

    /** the column name for the Allele field */
    const ALLELE = 'stocks.Allele';

    /** the column name for the GeneticStudies field */
    const GENETICSTUDIES = 'stocks.GeneticStudies';

    /** the column name for the Ration field */
    const RATION = 'stocks.Ration';

    /** the column name for the Foods field */
    const FOODS = 'stocks.Foods';

    /** the column name for the Ecotoxicology field */
    const ECOTOXICOLOGY = 'stocks.Ecotoxicology';

    /** the column name for the Catches field */
    const CATCHES = 'stocks.Catches';

    /** the column name for the FAOAqua field */
    const FAOAQUA = 'stocks.FAOAqua';

    /** the column name for the LengthRelations field */
    const LENGTHRELATIONS = 'stocks.LengthRelations';

    /** the column name for the LengthFrequency field */
    const LENGTHFREQUENCY = 'stocks.LengthFrequency';

    /** the column name for the Sounds field */
    const SOUNDS = 'stocks.Sounds';

    /** the column name for the Broodstock field */
    const BROODSTOCK = 'stocks.Broodstock';

    /** the column name for the EggNursery field */
    const EGGNURSERY = 'stocks.EggNursery';

    /** the column name for the FryNursery field */
    const FRYNURSERY = 'stocks.FryNursery';

    /** the column name for the LarvalNursery field */
    const LARVALNURSERY = 'stocks.LarvalNursery';

    /** the column name for the Entered field */
    const ENTERED = 'stocks.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'stocks.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'stocks.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'stocks.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'stocks.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'stocks.DateChecked';

    /** the column name for the TS field */
    const TS = 'stocks.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Stocks objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Stocks[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. StocksPeer::$fieldNames[StocksPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode', 'Stockdefs', 'Speccode', 'Level', 'Localunique', 'IucnCode', 'IucnAssessment', 'Protected', 'Stocksrefno', 'CitesCode', 'CitesDate', 'CitesRef', 'CitesRemarks', 'Northernmost', 'Northsouthn', 'Southermost', 'Northsouths', 'Westernmost', 'Westeastw', 'Easternmost', 'Westeaste', 'Boundingref', 'Boundingmethod', 'Tempmin', 'Tempmax', 'Tempref', 'Envtemp', 'Resilience', 'Resilienceremark', 'Phmin', 'Phmax', 'Phref', 'Dhmin', 'Dhmax', 'Dhref', 'Genbankid', 'Rfeid', 'FigisId', 'Ecotoxid', 'ScrfaData', 'GmadId', 'Saup', 'SaupId', 'SaupGroup', 'Ausmuseum', 'Fishtrace', 'IucnId', 'IucnGroup', 'BoldId', 'Igfaname', 'Essayid', 'Icesstockid', 'Osteobaseid', 'DorisId', 'Aquamaps', 'Morphology', 'Occurrence', 'Strains', 'Ecology', 'Diseases', 'Abnorm', 'Metabolism', 'Predators', 'Spawning', 'Fecundity', 'Speed', 'Diet', 'Eggs', 'Eggdevelop', 'Food', 'Larvae', 'Larvdyn', 'Larvspeed', 'Popdyn', 'Lengthweight', 'Gillarea', 'Maturity', 'Matsizes', 'Processing', 'Reproduction', 'Introductions', 'Abundance', 'Vision', 'Genetics', 'Aquaculture', 'Countrycomp', 'Allele', 'Geneticstudies', 'Ration', 'Foods', 'Ecotoxicology', 'Catches', 'Faoaqua', 'Lengthrelations', 'Lengthfrequency', 'Sounds', 'Broodstock', 'Eggnursery', 'Frynursery', 'Larvalnursery', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode', 'stockdefs', 'speccode', 'level', 'localunique', 'iucnCode', 'iucnAssessment', 'protected', 'stocksrefno', 'citesCode', 'citesDate', 'citesRef', 'citesRemarks', 'northernmost', 'northsouthn', 'southermost', 'northsouths', 'westernmost', 'westeastw', 'easternmost', 'westeaste', 'boundingref', 'boundingmethod', 'tempmin', 'tempmax', 'tempref', 'envtemp', 'resilience', 'resilienceremark', 'phmin', 'phmax', 'phref', 'dhmin', 'dhmax', 'dhref', 'genbankid', 'rfeid', 'figisId', 'ecotoxid', 'scrfaData', 'gmadId', 'saup', 'saupId', 'saupGroup', 'ausmuseum', 'fishtrace', 'iucnId', 'iucnGroup', 'boldId', 'igfaname', 'essayid', 'icesstockid', 'osteobaseid', 'dorisId', 'aquamaps', 'morphology', 'occurrence', 'strains', 'ecology', 'diseases', 'abnorm', 'metabolism', 'predators', 'spawning', 'fecundity', 'speed', 'diet', 'eggs', 'eggdevelop', 'food', 'larvae', 'larvdyn', 'larvspeed', 'popdyn', 'lengthweight', 'gillarea', 'maturity', 'matsizes', 'processing', 'reproduction', 'introductions', 'abundance', 'vision', 'genetics', 'aquaculture', 'countrycomp', 'allele', 'geneticstudies', 'ration', 'foods', 'ecotoxicology', 'catches', 'faoaqua', 'lengthrelations', 'lengthfrequency', 'sounds', 'broodstock', 'eggnursery', 'frynursery', 'larvalnursery', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (StocksPeer::STOCKCODE, StocksPeer::STOCKDEFS, StocksPeer::SPECCODE, StocksPeer::LEVEL, StocksPeer::LOCALUNIQUE, StocksPeer::IUCN_CODE, StocksPeer::IUCN_ASSESSMENT, StocksPeer::PROTECTEDSTOCK, StocksPeer::STOCKSREFNO, StocksPeer::CITES_CODE, StocksPeer::CITES_DATE, StocksPeer::CITES_REF, StocksPeer::CITES_REMARKS, StocksPeer::NORTHERNMOST, StocksPeer::NORTHSOUTHN, StocksPeer::SOUTHERMOST, StocksPeer::NORTHSOUTHS, StocksPeer::WESTERNMOST, StocksPeer::WESTEASTW, StocksPeer::EASTERNMOST, StocksPeer::WESTEASTE, StocksPeer::BOUNDINGREF, StocksPeer::BOUNDINGMETHOD, StocksPeer::TEMPMIN, StocksPeer::TEMPMAX, StocksPeer::TEMPREF, StocksPeer::ENVTEMP, StocksPeer::RESILIENCE, StocksPeer::RESILIENCEREMARK, StocksPeer::PHMIN, StocksPeer::PHMAX, StocksPeer::PHREF, StocksPeer::DHMIN, StocksPeer::DHMAX, StocksPeer::DHREF, StocksPeer::GENBANKID, StocksPeer::RFEID, StocksPeer::FIGIS_ID, StocksPeer::ECOTOXID, StocksPeer::SCRFA_DATA, StocksPeer::GMAD_ID, StocksPeer::SAUP, StocksPeer::SAUP_ID, StocksPeer::SAUP_GROUP, StocksPeer::AUSMUSEUM, StocksPeer::FISHTRACE, StocksPeer::IUCN_ID, StocksPeer::IUCN_GROUP, StocksPeer::BOLD_ID, StocksPeer::IGFANAME, StocksPeer::ESSAYID, StocksPeer::ICESSTOCKID, StocksPeer::OSTEOBASEID, StocksPeer::DORIS_ID, StocksPeer::AQUAMAPS, StocksPeer::MORPHOLOGY, StocksPeer::OCCURRENCE, StocksPeer::STRAINS, StocksPeer::ECOLOGY, StocksPeer::DISEASES, StocksPeer::ABNORM, StocksPeer::METABOLISM, StocksPeer::PREDATORS, StocksPeer::SPAWNING, StocksPeer::FECUNDITY, StocksPeer::SPEED, StocksPeer::DIET, StocksPeer::EGGS, StocksPeer::EGGDEVELOP, StocksPeer::FOOD, StocksPeer::LARVAE, StocksPeer::LARVDYN, StocksPeer::LARVSPEED, StocksPeer::POPDYN, StocksPeer::LENGTHWEIGHT, StocksPeer::GILLAREA, StocksPeer::MATURITY, StocksPeer::MATSIZES, StocksPeer::PROCESSING, StocksPeer::REPRODUCTION, StocksPeer::INTRODUCTIONS, StocksPeer::ABUNDANCE, StocksPeer::VISION, StocksPeer::GENETICS, StocksPeer::AQUACULTURE, StocksPeer::COUNTRYCOMP, StocksPeer::ALLELE, StocksPeer::GENETICSTUDIES, StocksPeer::RATION, StocksPeer::FOODS, StocksPeer::ECOTOXICOLOGY, StocksPeer::CATCHES, StocksPeer::FAOAQUA, StocksPeer::LENGTHRELATIONS, StocksPeer::LENGTHFREQUENCY, StocksPeer::SOUNDS, StocksPeer::BROODSTOCK, StocksPeer::EGGNURSERY, StocksPeer::FRYNURSERY, StocksPeer::LARVALNURSERY, StocksPeer::ENTERED, StocksPeer::DATEENTERED, StocksPeer::MODIFIED, StocksPeer::DATEMODIFIED, StocksPeer::EXPERT, StocksPeer::DATECHECKED, StocksPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE', 'STOCKDEFS', 'SPECCODE', 'LEVEL', 'LOCALUNIQUE', 'IUCN_CODE', 'IUCN_ASSESSMENT', 'PROTECTEDSTOCK', 'STOCKSREFNO', 'CITES_CODE', 'CITES_DATE', 'CITES_REF', 'CITES_REMARKS', 'NORTHERNMOST', 'NORTHSOUTHN', 'SOUTHERMOST', 'NORTHSOUTHS', 'WESTERNMOST', 'WESTEASTW', 'EASTERNMOST', 'WESTEASTE', 'BOUNDINGREF', 'BOUNDINGMETHOD', 'TEMPMIN', 'TEMPMAX', 'TEMPREF', 'ENVTEMP', 'RESILIENCE', 'RESILIENCEREMARK', 'PHMIN', 'PHMAX', 'PHREF', 'DHMIN', 'DHMAX', 'DHREF', 'GENBANKID', 'RFEID', 'FIGIS_ID', 'ECOTOXID', 'SCRFA_DATA', 'GMAD_ID', 'SAUP', 'SAUP_ID', 'SAUP_GROUP', 'AUSMUSEUM', 'FISHTRACE', 'IUCN_ID', 'IUCN_GROUP', 'BOLD_ID', 'IGFANAME', 'ESSAYID', 'ICESSTOCKID', 'OSTEOBASEID', 'DORIS_ID', 'AQUAMAPS', 'MORPHOLOGY', 'OCCURRENCE', 'STRAINS', 'ECOLOGY', 'DISEASES', 'ABNORM', 'METABOLISM', 'PREDATORS', 'SPAWNING', 'FECUNDITY', 'SPEED', 'DIET', 'EGGS', 'EGGDEVELOP', 'FOOD', 'LARVAE', 'LARVDYN', 'LARVSPEED', 'POPDYN', 'LENGTHWEIGHT', 'GILLAREA', 'MATURITY', 'MATSIZES', 'PROCESSING', 'REPRODUCTION', 'INTRODUCTIONS', 'ABUNDANCE', 'VISION', 'GENETICS', 'AQUACULTURE', 'COUNTRYCOMP', 'ALLELE', 'GENETICSTUDIES', 'RATION', 'FOODS', 'ECOTOXICOLOGY', 'CATCHES', 'FAOAQUA', 'LENGTHRELATIONS', 'LENGTHFREQUENCY', 'SOUNDS', 'BROODSTOCK', 'EGGNURSERY', 'FRYNURSERY', 'LARVALNURSERY', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode', 'StockDefs', 'SpecCode', 'Level', 'LocalUnique', 'IUCN_Code', 'IUCN_Assessment', 'Protected', 'StocksRefNo', 'CITES_Code', 'CITES_Date', 'CITES_Ref', 'CITES_Remarks', 'Northernmost', 'NorthSouthN', 'Southermost', 'NorthSouthS', 'Westernmost', 'WestEastW', 'Easternmost', 'WestEastE', 'BoundingRef', 'BoundingMethod', 'TempMin', 'TempMax', 'TempRef', 'EnvTemp', 'Resilience', 'ResilienceRemark', 'pHMin', 'pHMax', 'pHRef', 'dHMin', 'dHMax', 'dHRef', 'GenBankID', 'RfeID', 'FIGIS_ID', 'EcotoxID', 'SCRFA_data', 'GMAD_ID', 'SAUP', 'SAUP_ID', 'SAUP_Group', 'AusMuseum', 'FishTrace', 'IUCN_ID', 'IUCN_Group', 'BOLD_ID', 'IGFAName', 'EssayID', 'ICESStockID', 'OsteoBaseID', 'DORIS_ID', 'Aquamaps', 'Morphology', 'Occurrence', 'Strains', 'Ecology', 'Diseases', 'Abnorm', 'Metabolism', 'Predators', 'Spawning', 'Fecundity', 'Speed', 'Diet', 'Eggs', 'EggDevelop', 'Food', 'Larvae', 'LarvDyn', 'LarvSpeed', 'PopDyn', 'LengthWeight', 'Gillarea', 'Maturity', 'MatSizes', 'Processing', 'Reproduction', 'Introductions', 'Abundance', 'Vision', 'Genetics', 'Aquaculture', 'CountryComp', 'Allele', 'GeneticStudies', 'Ration', 'Foods', 'Ecotoxicology', 'Catches', 'FAOAqua', 'LengthRelations', 'LengthFrequency', 'Sounds', 'Broodstock', 'EggNursery', 'FryNursery', 'LarvalNursery', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. StocksPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode' => 0, 'Stockdefs' => 1, 'Speccode' => 2, 'Level' => 3, 'Localunique' => 4, 'IucnCode' => 5, 'IucnAssessment' => 6, 'Protected' => 7, 'Stocksrefno' => 8, 'CitesCode' => 9, 'CitesDate' => 10, 'CitesRef' => 11, 'CitesRemarks' => 12, 'Northernmost' => 13, 'Northsouthn' => 14, 'Southermost' => 15, 'Northsouths' => 16, 'Westernmost' => 17, 'Westeastw' => 18, 'Easternmost' => 19, 'Westeaste' => 20, 'Boundingref' => 21, 'Boundingmethod' => 22, 'Tempmin' => 23, 'Tempmax' => 24, 'Tempref' => 25, 'Envtemp' => 26, 'Resilience' => 27, 'Resilienceremark' => 28, 'Phmin' => 29, 'Phmax' => 30, 'Phref' => 31, 'Dhmin' => 32, 'Dhmax' => 33, 'Dhref' => 34, 'Genbankid' => 35, 'Rfeid' => 36, 'FigisId' => 37, 'Ecotoxid' => 38, 'ScrfaData' => 39, 'GmadId' => 40, 'Saup' => 41, 'SaupId' => 42, 'SaupGroup' => 43, 'Ausmuseum' => 44, 'Fishtrace' => 45, 'IucnId' => 46, 'IucnGroup' => 47, 'BoldId' => 48, 'Igfaname' => 49, 'Essayid' => 50, 'Icesstockid' => 51, 'Osteobaseid' => 52, 'DorisId' => 53, 'Aquamaps' => 54, 'Morphology' => 55, 'Occurrence' => 56, 'Strains' => 57, 'Ecology' => 58, 'Diseases' => 59, 'Abnorm' => 60, 'Metabolism' => 61, 'Predators' => 62, 'Spawning' => 63, 'Fecundity' => 64, 'Speed' => 65, 'Diet' => 66, 'Eggs' => 67, 'Eggdevelop' => 68, 'Food' => 69, 'Larvae' => 70, 'Larvdyn' => 71, 'Larvspeed' => 72, 'Popdyn' => 73, 'Lengthweight' => 74, 'Gillarea' => 75, 'Maturity' => 76, 'Matsizes' => 77, 'Processing' => 78, 'Reproduction' => 79, 'Introductions' => 80, 'Abundance' => 81, 'Vision' => 82, 'Genetics' => 83, 'Aquaculture' => 84, 'Countrycomp' => 85, 'Allele' => 86, 'Geneticstudies' => 87, 'Ration' => 88, 'Foods' => 89, 'Ecotoxicology' => 90, 'Catches' => 91, 'Faoaqua' => 92, 'Lengthrelations' => 93, 'Lengthfrequency' => 94, 'Sounds' => 95, 'Broodstock' => 96, 'Eggnursery' => 97, 'Frynursery' => 98, 'Larvalnursery' => 99, 'Entered' => 100, 'Dateentered' => 101, 'Modified' => 102, 'Datemodified' => 103, 'Expert' => 104, 'Datechecked' => 105, 'Ts' => 106, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode' => 0, 'stockdefs' => 1, 'speccode' => 2, 'level' => 3, 'localunique' => 4, 'iucnCode' => 5, 'iucnAssessment' => 6, 'protected' => 7, 'stocksrefno' => 8, 'citesCode' => 9, 'citesDate' => 10, 'citesRef' => 11, 'citesRemarks' => 12, 'northernmost' => 13, 'northsouthn' => 14, 'southermost' => 15, 'northsouths' => 16, 'westernmost' => 17, 'westeastw' => 18, 'easternmost' => 19, 'westeaste' => 20, 'boundingref' => 21, 'boundingmethod' => 22, 'tempmin' => 23, 'tempmax' => 24, 'tempref' => 25, 'envtemp' => 26, 'resilience' => 27, 'resilienceremark' => 28, 'phmin' => 29, 'phmax' => 30, 'phref' => 31, 'dhmin' => 32, 'dhmax' => 33, 'dhref' => 34, 'genbankid' => 35, 'rfeid' => 36, 'figisId' => 37, 'ecotoxid' => 38, 'scrfaData' => 39, 'gmadId' => 40, 'saup' => 41, 'saupId' => 42, 'saupGroup' => 43, 'ausmuseum' => 44, 'fishtrace' => 45, 'iucnId' => 46, 'iucnGroup' => 47, 'boldId' => 48, 'igfaname' => 49, 'essayid' => 50, 'icesstockid' => 51, 'osteobaseid' => 52, 'dorisId' => 53, 'aquamaps' => 54, 'morphology' => 55, 'occurrence' => 56, 'strains' => 57, 'ecology' => 58, 'diseases' => 59, 'abnorm' => 60, 'metabolism' => 61, 'predators' => 62, 'spawning' => 63, 'fecundity' => 64, 'speed' => 65, 'diet' => 66, 'eggs' => 67, 'eggdevelop' => 68, 'food' => 69, 'larvae' => 70, 'larvdyn' => 71, 'larvspeed' => 72, 'popdyn' => 73, 'lengthweight' => 74, 'gillarea' => 75, 'maturity' => 76, 'matsizes' => 77, 'processing' => 78, 'reproduction' => 79, 'introductions' => 80, 'abundance' => 81, 'vision' => 82, 'genetics' => 83, 'aquaculture' => 84, 'countrycomp' => 85, 'allele' => 86, 'geneticstudies' => 87, 'ration' => 88, 'foods' => 89, 'ecotoxicology' => 90, 'catches' => 91, 'faoaqua' => 92, 'lengthrelations' => 93, 'lengthfrequency' => 94, 'sounds' => 95, 'broodstock' => 96, 'eggnursery' => 97, 'frynursery' => 98, 'larvalnursery' => 99, 'entered' => 100, 'dateentered' => 101, 'modified' => 102, 'datemodified' => 103, 'expert' => 104, 'datechecked' => 105, 'ts' => 106, ),
        BasePeer::TYPE_COLNAME => array (StocksPeer::STOCKCODE => 0, StocksPeer::STOCKDEFS => 1, StocksPeer::SPECCODE => 2, StocksPeer::LEVEL => 3, StocksPeer::LOCALUNIQUE => 4, StocksPeer::IUCN_CODE => 5, StocksPeer::IUCN_ASSESSMENT => 6, StocksPeer::PROTECTEDSTOCK => 7, StocksPeer::STOCKSREFNO => 8, StocksPeer::CITES_CODE => 9, StocksPeer::CITES_DATE => 10, StocksPeer::CITES_REF => 11, StocksPeer::CITES_REMARKS => 12, StocksPeer::NORTHERNMOST => 13, StocksPeer::NORTHSOUTHN => 14, StocksPeer::SOUTHERMOST => 15, StocksPeer::NORTHSOUTHS => 16, StocksPeer::WESTERNMOST => 17, StocksPeer::WESTEASTW => 18, StocksPeer::EASTERNMOST => 19, StocksPeer::WESTEASTE => 20, StocksPeer::BOUNDINGREF => 21, StocksPeer::BOUNDINGMETHOD => 22, StocksPeer::TEMPMIN => 23, StocksPeer::TEMPMAX => 24, StocksPeer::TEMPREF => 25, StocksPeer::ENVTEMP => 26, StocksPeer::RESILIENCE => 27, StocksPeer::RESILIENCEREMARK => 28, StocksPeer::PHMIN => 29, StocksPeer::PHMAX => 30, StocksPeer::PHREF => 31, StocksPeer::DHMIN => 32, StocksPeer::DHMAX => 33, StocksPeer::DHREF => 34, StocksPeer::GENBANKID => 35, StocksPeer::RFEID => 36, StocksPeer::FIGIS_ID => 37, StocksPeer::ECOTOXID => 38, StocksPeer::SCRFA_DATA => 39, StocksPeer::GMAD_ID => 40, StocksPeer::SAUP => 41, StocksPeer::SAUP_ID => 42, StocksPeer::SAUP_GROUP => 43, StocksPeer::AUSMUSEUM => 44, StocksPeer::FISHTRACE => 45, StocksPeer::IUCN_ID => 46, StocksPeer::IUCN_GROUP => 47, StocksPeer::BOLD_ID => 48, StocksPeer::IGFANAME => 49, StocksPeer::ESSAYID => 50, StocksPeer::ICESSTOCKID => 51, StocksPeer::OSTEOBASEID => 52, StocksPeer::DORIS_ID => 53, StocksPeer::AQUAMAPS => 54, StocksPeer::MORPHOLOGY => 55, StocksPeer::OCCURRENCE => 56, StocksPeer::STRAINS => 57, StocksPeer::ECOLOGY => 58, StocksPeer::DISEASES => 59, StocksPeer::ABNORM => 60, StocksPeer::METABOLISM => 61, StocksPeer::PREDATORS => 62, StocksPeer::SPAWNING => 63, StocksPeer::FECUNDITY => 64, StocksPeer::SPEED => 65, StocksPeer::DIET => 66, StocksPeer::EGGS => 67, StocksPeer::EGGDEVELOP => 68, StocksPeer::FOOD => 69, StocksPeer::LARVAE => 70, StocksPeer::LARVDYN => 71, StocksPeer::LARVSPEED => 72, StocksPeer::POPDYN => 73, StocksPeer::LENGTHWEIGHT => 74, StocksPeer::GILLAREA => 75, StocksPeer::MATURITY => 76, StocksPeer::MATSIZES => 77, StocksPeer::PROCESSING => 78, StocksPeer::REPRODUCTION => 79, StocksPeer::INTRODUCTIONS => 80, StocksPeer::ABUNDANCE => 81, StocksPeer::VISION => 82, StocksPeer::GENETICS => 83, StocksPeer::AQUACULTURE => 84, StocksPeer::COUNTRYCOMP => 85, StocksPeer::ALLELE => 86, StocksPeer::GENETICSTUDIES => 87, StocksPeer::RATION => 88, StocksPeer::FOODS => 89, StocksPeer::ECOTOXICOLOGY => 90, StocksPeer::CATCHES => 91, StocksPeer::FAOAQUA => 92, StocksPeer::LENGTHRELATIONS => 93, StocksPeer::LENGTHFREQUENCY => 94, StocksPeer::SOUNDS => 95, StocksPeer::BROODSTOCK => 96, StocksPeer::EGGNURSERY => 97, StocksPeer::FRYNURSERY => 98, StocksPeer::LARVALNURSERY => 99, StocksPeer::ENTERED => 100, StocksPeer::DATEENTERED => 101, StocksPeer::MODIFIED => 102, StocksPeer::DATEMODIFIED => 103, StocksPeer::EXPERT => 104, StocksPeer::DATECHECKED => 105, StocksPeer::TS => 106, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE' => 0, 'STOCKDEFS' => 1, 'SPECCODE' => 2, 'LEVEL' => 3, 'LOCALUNIQUE' => 4, 'IUCN_CODE' => 5, 'IUCN_ASSESSMENT' => 6, 'PROTECTEDSTOCK' => 7, 'STOCKSREFNO' => 8, 'CITES_CODE' => 9, 'CITES_DATE' => 10, 'CITES_REF' => 11, 'CITES_REMARKS' => 12, 'NORTHERNMOST' => 13, 'NORTHSOUTHN' => 14, 'SOUTHERMOST' => 15, 'NORTHSOUTHS' => 16, 'WESTERNMOST' => 17, 'WESTEASTW' => 18, 'EASTERNMOST' => 19, 'WESTEASTE' => 20, 'BOUNDINGREF' => 21, 'BOUNDINGMETHOD' => 22, 'TEMPMIN' => 23, 'TEMPMAX' => 24, 'TEMPREF' => 25, 'ENVTEMP' => 26, 'RESILIENCE' => 27, 'RESILIENCEREMARK' => 28, 'PHMIN' => 29, 'PHMAX' => 30, 'PHREF' => 31, 'DHMIN' => 32, 'DHMAX' => 33, 'DHREF' => 34, 'GENBANKID' => 35, 'RFEID' => 36, 'FIGIS_ID' => 37, 'ECOTOXID' => 38, 'SCRFA_DATA' => 39, 'GMAD_ID' => 40, 'SAUP' => 41, 'SAUP_ID' => 42, 'SAUP_GROUP' => 43, 'AUSMUSEUM' => 44, 'FISHTRACE' => 45, 'IUCN_ID' => 46, 'IUCN_GROUP' => 47, 'BOLD_ID' => 48, 'IGFANAME' => 49, 'ESSAYID' => 50, 'ICESSTOCKID' => 51, 'OSTEOBASEID' => 52, 'DORIS_ID' => 53, 'AQUAMAPS' => 54, 'MORPHOLOGY' => 55, 'OCCURRENCE' => 56, 'STRAINS' => 57, 'ECOLOGY' => 58, 'DISEASES' => 59, 'ABNORM' => 60, 'METABOLISM' => 61, 'PREDATORS' => 62, 'SPAWNING' => 63, 'FECUNDITY' => 64, 'SPEED' => 65, 'DIET' => 66, 'EGGS' => 67, 'EGGDEVELOP' => 68, 'FOOD' => 69, 'LARVAE' => 70, 'LARVDYN' => 71, 'LARVSPEED' => 72, 'POPDYN' => 73, 'LENGTHWEIGHT' => 74, 'GILLAREA' => 75, 'MATURITY' => 76, 'MATSIZES' => 77, 'PROCESSING' => 78, 'REPRODUCTION' => 79, 'INTRODUCTIONS' => 80, 'ABUNDANCE' => 81, 'VISION' => 82, 'GENETICS' => 83, 'AQUACULTURE' => 84, 'COUNTRYCOMP' => 85, 'ALLELE' => 86, 'GENETICSTUDIES' => 87, 'RATION' => 88, 'FOODS' => 89, 'ECOTOXICOLOGY' => 90, 'CATCHES' => 91, 'FAOAQUA' => 92, 'LENGTHRELATIONS' => 93, 'LENGTHFREQUENCY' => 94, 'SOUNDS' => 95, 'BROODSTOCK' => 96, 'EGGNURSERY' => 97, 'FRYNURSERY' => 98, 'LARVALNURSERY' => 99, 'ENTERED' => 100, 'DATEENTERED' => 101, 'MODIFIED' => 102, 'DATEMODIFIED' => 103, 'EXPERT' => 104, 'DATECHECKED' => 105, 'TS' => 106, ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode' => 0, 'StockDefs' => 1, 'SpecCode' => 2, 'Level' => 3, 'LocalUnique' => 4, 'IUCN_Code' => 5, 'IUCN_Assessment' => 6, 'Protected' => 7, 'StocksRefNo' => 8, 'CITES_Code' => 9, 'CITES_Date' => 10, 'CITES_Ref' => 11, 'CITES_Remarks' => 12, 'Northernmost' => 13, 'NorthSouthN' => 14, 'Southermost' => 15, 'NorthSouthS' => 16, 'Westernmost' => 17, 'WestEastW' => 18, 'Easternmost' => 19, 'WestEastE' => 20, 'BoundingRef' => 21, 'BoundingMethod' => 22, 'TempMin' => 23, 'TempMax' => 24, 'TempRef' => 25, 'EnvTemp' => 26, 'Resilience' => 27, 'ResilienceRemark' => 28, 'pHMin' => 29, 'pHMax' => 30, 'pHRef' => 31, 'dHMin' => 32, 'dHMax' => 33, 'dHRef' => 34, 'GenBankID' => 35, 'RfeID' => 36, 'FIGIS_ID' => 37, 'EcotoxID' => 38, 'SCRFA_data' => 39, 'GMAD_ID' => 40, 'SAUP' => 41, 'SAUP_ID' => 42, 'SAUP_Group' => 43, 'AusMuseum' => 44, 'FishTrace' => 45, 'IUCN_ID' => 46, 'IUCN_Group' => 47, 'BOLD_ID' => 48, 'IGFAName' => 49, 'EssayID' => 50, 'ICESStockID' => 51, 'OsteoBaseID' => 52, 'DORIS_ID' => 53, 'Aquamaps' => 54, 'Morphology' => 55, 'Occurrence' => 56, 'Strains' => 57, 'Ecology' => 58, 'Diseases' => 59, 'Abnorm' => 60, 'Metabolism' => 61, 'Predators' => 62, 'Spawning' => 63, 'Fecundity' => 64, 'Speed' => 65, 'Diet' => 66, 'Eggs' => 67, 'EggDevelop' => 68, 'Food' => 69, 'Larvae' => 70, 'LarvDyn' => 71, 'LarvSpeed' => 72, 'PopDyn' => 73, 'LengthWeight' => 74, 'Gillarea' => 75, 'Maturity' => 76, 'MatSizes' => 77, 'Processing' => 78, 'Reproduction' => 79, 'Introductions' => 80, 'Abundance' => 81, 'Vision' => 82, 'Genetics' => 83, 'Aquaculture' => 84, 'CountryComp' => 85, 'Allele' => 86, 'GeneticStudies' => 87, 'Ration' => 88, 'Foods' => 89, 'Ecotoxicology' => 90, 'Catches' => 91, 'FAOAqua' => 92, 'LengthRelations' => 93, 'LengthFrequency' => 94, 'Sounds' => 95, 'Broodstock' => 96, 'EggNursery' => 97, 'FryNursery' => 98, 'LarvalNursery' => 99, 'Entered' => 100, 'DateEntered' => 101, 'Modified' => 102, 'DateModified' => 103, 'Expert' => 104, 'DateChecked' => 105, 'TS' => 106, ),
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
        $toNames = StocksPeer::getFieldNames($toType);
        $key = isset(StocksPeer::$fieldKeys[$fromType][$name]) ? StocksPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(StocksPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, StocksPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return StocksPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. StocksPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(StocksPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(StocksPeer::STOCKCODE);
            $criteria->addSelectColumn(StocksPeer::STOCKDEFS);
            $criteria->addSelectColumn(StocksPeer::SPECCODE);
            $criteria->addSelectColumn(StocksPeer::LEVEL);
            $criteria->addSelectColumn(StocksPeer::LOCALUNIQUE);
            $criteria->addSelectColumn(StocksPeer::IUCN_CODE);
            $criteria->addSelectColumn(StocksPeer::IUCN_ASSESSMENT);
            $criteria->addSelectColumn(StocksPeer::PROTECTEDSTOCK);
            $criteria->addSelectColumn(StocksPeer::STOCKSREFNO);
            $criteria->addSelectColumn(StocksPeer::CITES_CODE);
            $criteria->addSelectColumn(StocksPeer::CITES_DATE);
            $criteria->addSelectColumn(StocksPeer::CITES_REF);
            $criteria->addSelectColumn(StocksPeer::CITES_REMARKS);
            $criteria->addSelectColumn(StocksPeer::NORTHERNMOST);
            $criteria->addSelectColumn(StocksPeer::NORTHSOUTHN);
            $criteria->addSelectColumn(StocksPeer::SOUTHERMOST);
            $criteria->addSelectColumn(StocksPeer::NORTHSOUTHS);
            $criteria->addSelectColumn(StocksPeer::WESTERNMOST);
            $criteria->addSelectColumn(StocksPeer::WESTEASTW);
            $criteria->addSelectColumn(StocksPeer::EASTERNMOST);
            $criteria->addSelectColumn(StocksPeer::WESTEASTE);
            $criteria->addSelectColumn(StocksPeer::BOUNDINGREF);
            $criteria->addSelectColumn(StocksPeer::BOUNDINGMETHOD);
            $criteria->addSelectColumn(StocksPeer::TEMPMIN);
            $criteria->addSelectColumn(StocksPeer::TEMPMAX);
            $criteria->addSelectColumn(StocksPeer::TEMPREF);
            $criteria->addSelectColumn(StocksPeer::ENVTEMP);
            $criteria->addSelectColumn(StocksPeer::RESILIENCE);
            $criteria->addSelectColumn(StocksPeer::RESILIENCEREMARK);
            $criteria->addSelectColumn(StocksPeer::PHMIN);
            $criteria->addSelectColumn(StocksPeer::PHMAX);
            $criteria->addSelectColumn(StocksPeer::PHREF);
            $criteria->addSelectColumn(StocksPeer::DHMIN);
            $criteria->addSelectColumn(StocksPeer::DHMAX);
            $criteria->addSelectColumn(StocksPeer::DHREF);
            $criteria->addSelectColumn(StocksPeer::GENBANKID);
            $criteria->addSelectColumn(StocksPeer::RFEID);
            $criteria->addSelectColumn(StocksPeer::FIGIS_ID);
            $criteria->addSelectColumn(StocksPeer::ECOTOXID);
            $criteria->addSelectColumn(StocksPeer::SCRFA_DATA);
            $criteria->addSelectColumn(StocksPeer::GMAD_ID);
            $criteria->addSelectColumn(StocksPeer::SAUP);
            $criteria->addSelectColumn(StocksPeer::SAUP_ID);
            $criteria->addSelectColumn(StocksPeer::SAUP_GROUP);
            $criteria->addSelectColumn(StocksPeer::AUSMUSEUM);
            $criteria->addSelectColumn(StocksPeer::FISHTRACE);
            $criteria->addSelectColumn(StocksPeer::IUCN_ID);
            $criteria->addSelectColumn(StocksPeer::IUCN_GROUP);
            $criteria->addSelectColumn(StocksPeer::BOLD_ID);
            $criteria->addSelectColumn(StocksPeer::IGFANAME);
            $criteria->addSelectColumn(StocksPeer::ESSAYID);
            $criteria->addSelectColumn(StocksPeer::ICESSTOCKID);
            $criteria->addSelectColumn(StocksPeer::OSTEOBASEID);
            $criteria->addSelectColumn(StocksPeer::DORIS_ID);
            $criteria->addSelectColumn(StocksPeer::AQUAMAPS);
            $criteria->addSelectColumn(StocksPeer::MORPHOLOGY);
            $criteria->addSelectColumn(StocksPeer::OCCURRENCE);
            $criteria->addSelectColumn(StocksPeer::STRAINS);
            $criteria->addSelectColumn(StocksPeer::ECOLOGY);
            $criteria->addSelectColumn(StocksPeer::DISEASES);
            $criteria->addSelectColumn(StocksPeer::ABNORM);
            $criteria->addSelectColumn(StocksPeer::METABOLISM);
            $criteria->addSelectColumn(StocksPeer::PREDATORS);
            $criteria->addSelectColumn(StocksPeer::SPAWNING);
            $criteria->addSelectColumn(StocksPeer::FECUNDITY);
            $criteria->addSelectColumn(StocksPeer::SPEED);
            $criteria->addSelectColumn(StocksPeer::DIET);
            $criteria->addSelectColumn(StocksPeer::EGGS);
            $criteria->addSelectColumn(StocksPeer::EGGDEVELOP);
            $criteria->addSelectColumn(StocksPeer::FOOD);
            $criteria->addSelectColumn(StocksPeer::LARVAE);
            $criteria->addSelectColumn(StocksPeer::LARVDYN);
            $criteria->addSelectColumn(StocksPeer::LARVSPEED);
            $criteria->addSelectColumn(StocksPeer::POPDYN);
            $criteria->addSelectColumn(StocksPeer::LENGTHWEIGHT);
            $criteria->addSelectColumn(StocksPeer::GILLAREA);
            $criteria->addSelectColumn(StocksPeer::MATURITY);
            $criteria->addSelectColumn(StocksPeer::MATSIZES);
            $criteria->addSelectColumn(StocksPeer::PROCESSING);
            $criteria->addSelectColumn(StocksPeer::REPRODUCTION);
            $criteria->addSelectColumn(StocksPeer::INTRODUCTIONS);
            $criteria->addSelectColumn(StocksPeer::ABUNDANCE);
            $criteria->addSelectColumn(StocksPeer::VISION);
            $criteria->addSelectColumn(StocksPeer::GENETICS);
            $criteria->addSelectColumn(StocksPeer::AQUACULTURE);
            $criteria->addSelectColumn(StocksPeer::COUNTRYCOMP);
            $criteria->addSelectColumn(StocksPeer::ALLELE);
            $criteria->addSelectColumn(StocksPeer::GENETICSTUDIES);
            $criteria->addSelectColumn(StocksPeer::RATION);
            $criteria->addSelectColumn(StocksPeer::FOODS);
            $criteria->addSelectColumn(StocksPeer::ECOTOXICOLOGY);
            $criteria->addSelectColumn(StocksPeer::CATCHES);
            $criteria->addSelectColumn(StocksPeer::FAOAQUA);
            $criteria->addSelectColumn(StocksPeer::LENGTHRELATIONS);
            $criteria->addSelectColumn(StocksPeer::LENGTHFREQUENCY);
            $criteria->addSelectColumn(StocksPeer::SOUNDS);
            $criteria->addSelectColumn(StocksPeer::BROODSTOCK);
            $criteria->addSelectColumn(StocksPeer::EGGNURSERY);
            $criteria->addSelectColumn(StocksPeer::FRYNURSERY);
            $criteria->addSelectColumn(StocksPeer::LARVALNURSERY);
            $criteria->addSelectColumn(StocksPeer::ENTERED);
            $criteria->addSelectColumn(StocksPeer::DATEENTERED);
            $criteria->addSelectColumn(StocksPeer::MODIFIED);
            $criteria->addSelectColumn(StocksPeer::DATEMODIFIED);
            $criteria->addSelectColumn(StocksPeer::EXPERT);
            $criteria->addSelectColumn(StocksPeer::DATECHECKED);
            $criteria->addSelectColumn(StocksPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.StockDefs');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Level');
            $criteria->addSelectColumn($alias . '.LocalUnique');
            $criteria->addSelectColumn($alias . '.IUCN_Code');
            $criteria->addSelectColumn($alias . '.IUCN_Assessment');
            $criteria->addSelectColumn($alias . '.Protected');
            $criteria->addSelectColumn($alias . '.StocksRefNo');
            $criteria->addSelectColumn($alias . '.CITES_Code');
            $criteria->addSelectColumn($alias . '.CITES_Date');
            $criteria->addSelectColumn($alias . '.CITES_Ref');
            $criteria->addSelectColumn($alias . '.CITES_Remarks');
            $criteria->addSelectColumn($alias . '.Northernmost');
            $criteria->addSelectColumn($alias . '.NorthSouthN');
            $criteria->addSelectColumn($alias . '.Southermost');
            $criteria->addSelectColumn($alias . '.NorthSouthS');
            $criteria->addSelectColumn($alias . '.Westernmost');
            $criteria->addSelectColumn($alias . '.WestEastW');
            $criteria->addSelectColumn($alias . '.Easternmost');
            $criteria->addSelectColumn($alias . '.WestEastE');
            $criteria->addSelectColumn($alias . '.BoundingRef');
            $criteria->addSelectColumn($alias . '.BoundingMethod');
            $criteria->addSelectColumn($alias . '.TempMin');
            $criteria->addSelectColumn($alias . '.TempMax');
            $criteria->addSelectColumn($alias . '.TempRef');
            $criteria->addSelectColumn($alias . '.EnvTemp');
            $criteria->addSelectColumn($alias . '.Resilience');
            $criteria->addSelectColumn($alias . '.ResilienceRemark');
            $criteria->addSelectColumn($alias . '.pHMin');
            $criteria->addSelectColumn($alias . '.pHMax');
            $criteria->addSelectColumn($alias . '.pHRef');
            $criteria->addSelectColumn($alias . '.dHMin');
            $criteria->addSelectColumn($alias . '.dHMax');
            $criteria->addSelectColumn($alias . '.dHRef');
            $criteria->addSelectColumn($alias . '.GenBankID');
            $criteria->addSelectColumn($alias . '.RfeID');
            $criteria->addSelectColumn($alias . '.FIGIS_ID');
            $criteria->addSelectColumn($alias . '.EcotoxID');
            $criteria->addSelectColumn($alias . '.SCRFA_data');
            $criteria->addSelectColumn($alias . '.GMAD_ID');
            $criteria->addSelectColumn($alias . '.SAUP');
            $criteria->addSelectColumn($alias . '.SAUP_ID');
            $criteria->addSelectColumn($alias . '.SAUP_Group');
            $criteria->addSelectColumn($alias . '.AusMuseum');
            $criteria->addSelectColumn($alias . '.FishTrace');
            $criteria->addSelectColumn($alias . '.IUCN_ID');
            $criteria->addSelectColumn($alias . '.IUCN_Group');
            $criteria->addSelectColumn($alias . '.BOLD_ID');
            $criteria->addSelectColumn($alias . '.IGFAName');
            $criteria->addSelectColumn($alias . '.EssayID');
            $criteria->addSelectColumn($alias . '.ICESStockID');
            $criteria->addSelectColumn($alias . '.OsteoBaseID');
            $criteria->addSelectColumn($alias . '.DORIS_ID');
            $criteria->addSelectColumn($alias . '.Aquamaps');
            $criteria->addSelectColumn($alias . '.Morphology');
            $criteria->addSelectColumn($alias . '.Occurrence');
            $criteria->addSelectColumn($alias . '.Strains');
            $criteria->addSelectColumn($alias . '.Ecology');
            $criteria->addSelectColumn($alias . '.Diseases');
            $criteria->addSelectColumn($alias . '.Abnorm');
            $criteria->addSelectColumn($alias . '.Metabolism');
            $criteria->addSelectColumn($alias . '.Predators');
            $criteria->addSelectColumn($alias . '.Spawning');
            $criteria->addSelectColumn($alias . '.Fecundity');
            $criteria->addSelectColumn($alias . '.Speed');
            $criteria->addSelectColumn($alias . '.Diet');
            $criteria->addSelectColumn($alias . '.Eggs');
            $criteria->addSelectColumn($alias . '.EggDevelop');
            $criteria->addSelectColumn($alias . '.Food');
            $criteria->addSelectColumn($alias . '.Larvae');
            $criteria->addSelectColumn($alias . '.LarvDyn');
            $criteria->addSelectColumn($alias . '.LarvSpeed');
            $criteria->addSelectColumn($alias . '.PopDyn');
            $criteria->addSelectColumn($alias . '.LengthWeight');
            $criteria->addSelectColumn($alias . '.Gillarea');
            $criteria->addSelectColumn($alias . '.Maturity');
            $criteria->addSelectColumn($alias . '.MatSizes');
            $criteria->addSelectColumn($alias . '.Processing');
            $criteria->addSelectColumn($alias . '.Reproduction');
            $criteria->addSelectColumn($alias . '.Introductions');
            $criteria->addSelectColumn($alias . '.Abundance');
            $criteria->addSelectColumn($alias . '.Vision');
            $criteria->addSelectColumn($alias . '.Genetics');
            $criteria->addSelectColumn($alias . '.Aquaculture');
            $criteria->addSelectColumn($alias . '.CountryComp');
            $criteria->addSelectColumn($alias . '.Allele');
            $criteria->addSelectColumn($alias . '.GeneticStudies');
            $criteria->addSelectColumn($alias . '.Ration');
            $criteria->addSelectColumn($alias . '.Foods');
            $criteria->addSelectColumn($alias . '.Ecotoxicology');
            $criteria->addSelectColumn($alias . '.Catches');
            $criteria->addSelectColumn($alias . '.FAOAqua');
            $criteria->addSelectColumn($alias . '.LengthRelations');
            $criteria->addSelectColumn($alias . '.LengthFrequency');
            $criteria->addSelectColumn($alias . '.Sounds');
            $criteria->addSelectColumn($alias . '.Broodstock');
            $criteria->addSelectColumn($alias . '.EggNursery');
            $criteria->addSelectColumn($alias . '.FryNursery');
            $criteria->addSelectColumn($alias . '.LarvalNursery');
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
        $criteria->setPrimaryTableName(StocksPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            StocksPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(StocksPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(StocksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Stocks
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = StocksPeer::doSelect($critcopy, $con);
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
        return StocksPeer::populateObjects(StocksPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(StocksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            StocksPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(StocksPeer::DATABASE_NAME);

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
     * @param Stocks $obj A Stocks object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getSpeccode(), (string) $obj->getLevel(), (string) $obj->getLocalunique()));
            } // if key === null
            StocksPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Stocks object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Stocks) {
                $key = serialize(array((string) $value->getSpeccode(), (string) $value->getLevel(), (string) $value->getLocalunique()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Stocks object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(StocksPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Stocks Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(StocksPeer::$instances[$key])) {
                return StocksPeer::$instances[$key];
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
        foreach (StocksPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        StocksPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to stocks
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
        if ($row[$startcol + 2] === null && $row[$startcol + 3] === null && $row[$startcol + 4] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 4]));
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

        return array((int) $row[$startcol + 2], (string) $row[$startcol + 3], (string) $row[$startcol + 4]);
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
        $cls = StocksPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = StocksPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = StocksPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                StocksPeer::addInstanceToPool($obj, $key);
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
     * @return array (Stocks object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = StocksPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = StocksPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + StocksPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = StocksPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            StocksPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(StocksPeer::DATABASE_NAME)->getTable(StocksPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseStocksPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseStocksPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \StocksTableMap());
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
        return StocksPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Stocks or Criteria object.
     *
     * @param      mixed $values Criteria or Stocks object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StocksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Stocks object
        }


        // Set the correct dbName
        $criteria->setDbName(StocksPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Stocks or Criteria object.
     *
     * @param      mixed $values Criteria or Stocks object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StocksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(StocksPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(StocksPeer::SPECCODE);
            $value = $criteria->remove(StocksPeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(StocksPeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(StocksPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(StocksPeer::LEVEL);
            $value = $criteria->remove(StocksPeer::LEVEL);
            if ($value) {
                $selectCriteria->add(StocksPeer::LEVEL, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(StocksPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(StocksPeer::LOCALUNIQUE);
            $value = $criteria->remove(StocksPeer::LOCALUNIQUE);
            if ($value) {
                $selectCriteria->add(StocksPeer::LOCALUNIQUE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(StocksPeer::TABLE_NAME);
            }

        } else { // $values is Stocks object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(StocksPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the stocks table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StocksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(StocksPeer::TABLE_NAME, $con, StocksPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            StocksPeer::clearInstancePool();
            StocksPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Stocks or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Stocks object or primary key or array of primary keys
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
            $con = Propel::getConnection(StocksPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            StocksPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Stocks) { // it's a model object
            // invalidate the cache for this single object
            StocksPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(StocksPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(StocksPeer::SPECCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(StocksPeer::LEVEL, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(StocksPeer::LOCALUNIQUE, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                StocksPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(StocksPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            StocksPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Stocks object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Stocks $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(StocksPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(StocksPeer::TABLE_NAME);

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

        return BasePeer::doValidate(StocksPeer::DATABASE_NAME, StocksPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $speccode
     * @param   string $level
     * @param   string $localunique
     * @param      PropelPDO $con
     * @return Stocks
     */
    public static function retrieveByPK($speccode, $level, $localunique, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $speccode, (string) $level, (string) $localunique));
         if (null !== ($obj = StocksPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(StocksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(StocksPeer::DATABASE_NAME);
        $criteria->add(StocksPeer::SPECCODE, $speccode);
        $criteria->add(StocksPeer::LEVEL, $level);
        $criteria->add(StocksPeer::LOCALUNIQUE, $localunique);
        $v = StocksPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseStocksPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseStocksPeer::buildTableMap();

