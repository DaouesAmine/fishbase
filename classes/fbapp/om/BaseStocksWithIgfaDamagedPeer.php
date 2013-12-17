<?php


/**
 * Base static class for performing query and update operations on the 'stocks_with_igfa_damaged' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseStocksWithIgfaDamagedPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'stocks_with_igfa_damaged';

    /** the related Propel class for this table */
    const OM_CLASS = 'StocksWithIgfaDamaged';

    /** the related TableMap class for this table */
    const TM_CLASS = 'StocksWithIgfaDamagedTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 98;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 98;

    /** the column name for the StockCode field */
    const STOCKCODE = 'stocks_with_igfa_damaged.StockCode';

    /** the column name for the StockDefs field */
    const STOCKDEFS = 'stocks_with_igfa_damaged.StockDefs';

    /** the column name for the SpecCode field */
    const SPECCODE = 'stocks_with_igfa_damaged.SpecCode';

    /** the column name for the Level field */
    const LEVEL = 'stocks_with_igfa_damaged.Level';

    /** the column name for the LocalUnique field */
    const LOCALUNIQUE = 'stocks_with_igfa_damaged.LocalUnique';

    /** the column name for the IUCN_Code field */
    const IUCN_CODE = 'stocks_with_igfa_damaged.IUCN_Code';

    /** the column name for the IUCN_Assessment field */
    const IUCN_ASSESSMENT = 'stocks_with_igfa_damaged.IUCN_Assessment';

    /** the column name for the Protected field */
    const PROTECTEDSTOCK = 'stocks_with_igfa_damaged.Protected';

    /** the column name for the StocksRefNo field */
    const STOCKSREFNO = 'stocks_with_igfa_damaged.StocksRefNo';

    /** the column name for the Northernmost field */
    const NORTHERNMOST = 'stocks_with_igfa_damaged.Northernmost';

    /** the column name for the NorthSouthN field */
    const NORTHSOUTHN = 'stocks_with_igfa_damaged.NorthSouthN';

    /** the column name for the Southermost field */
    const SOUTHERMOST = 'stocks_with_igfa_damaged.Southermost';

    /** the column name for the NorthSouthS field */
    const NORTHSOUTHS = 'stocks_with_igfa_damaged.NorthSouthS';

    /** the column name for the Westernmost field */
    const WESTERNMOST = 'stocks_with_igfa_damaged.Westernmost';

    /** the column name for the WestEastW field */
    const WESTEASTW = 'stocks_with_igfa_damaged.WestEastW';

    /** the column name for the Easternmost field */
    const EASTERNMOST = 'stocks_with_igfa_damaged.Easternmost';

    /** the column name for the WestEastE field */
    const WESTEASTE = 'stocks_with_igfa_damaged.WestEastE';

    /** the column name for the BoundingRef field */
    const BOUNDINGREF = 'stocks_with_igfa_damaged.BoundingRef';

    /** the column name for the BoundingMethod field */
    const BOUNDINGMETHOD = 'stocks_with_igfa_damaged.BoundingMethod';

    /** the column name for the TempMin field */
    const TEMPMIN = 'stocks_with_igfa_damaged.TempMin';

    /** the column name for the TempMax field */
    const TEMPMAX = 'stocks_with_igfa_damaged.TempMax';

    /** the column name for the TempRef field */
    const TEMPREF = 'stocks_with_igfa_damaged.TempRef';

    /** the column name for the EnvTemp field */
    const ENVTEMP = 'stocks_with_igfa_damaged.EnvTemp';

    /** the column name for the Resilience field */
    const RESILIENCE = 'stocks_with_igfa_damaged.Resilience';

    /** the column name for the ResilienceRemark field */
    const RESILIENCEREMARK = 'stocks_with_igfa_damaged.ResilienceRemark';

    /** the column name for the pHMin field */
    const PHMIN = 'stocks_with_igfa_damaged.pHMin';

    /** the column name for the pHMax field */
    const PHMAX = 'stocks_with_igfa_damaged.pHMax';

    /** the column name for the pHRef field */
    const PHREF = 'stocks_with_igfa_damaged.pHRef';

    /** the column name for the dHMin field */
    const DHMIN = 'stocks_with_igfa_damaged.dHMin';

    /** the column name for the dHMax field */
    const DHMAX = 'stocks_with_igfa_damaged.dHMax';

    /** the column name for the dHRef field */
    const DHREF = 'stocks_with_igfa_damaged.dHRef';

    /** the column name for the GenBankID field */
    const GENBANKID = 'stocks_with_igfa_damaged.GenBankID';

    /** the column name for the RfeID field */
    const RFEID = 'stocks_with_igfa_damaged.RfeID';

    /** the column name for the FIGIS_ID field */
    const FIGIS_ID = 'stocks_with_igfa_damaged.FIGIS_ID';

    /** the column name for the EcotoxID field */
    const ECOTOXID = 'stocks_with_igfa_damaged.EcotoxID';

    /** the column name for the SCRFA_data field */
    const SCRFA_DATA = 'stocks_with_igfa_damaged.SCRFA_data';

    /** the column name for the GMAD_ID field */
    const GMAD_ID = 'stocks_with_igfa_damaged.GMAD_ID';

    /** the column name for the SAUP field */
    const SAUP = 'stocks_with_igfa_damaged.SAUP';

    /** the column name for the SAUP_ID field */
    const SAUP_ID = 'stocks_with_igfa_damaged.SAUP_ID';

    /** the column name for the SAUP_Group field */
    const SAUP_GROUP = 'stocks_with_igfa_damaged.SAUP_Group';

    /** the column name for the AusMuseum field */
    const AUSMUSEUM = 'stocks_with_igfa_damaged.AusMuseum';

    /** the column name for the FishTrace field */
    const FISHTRACE = 'stocks_with_igfa_damaged.FishTrace';

    /** the column name for the IUCN_ID field */
    const IUCN_ID = 'stocks_with_igfa_damaged.IUCN_ID';

    /** the column name for the IUCN_Group field */
    const IUCN_GROUP = 'stocks_with_igfa_damaged.IUCN_Group';

    /** the column name for the BOLD_ID field */
    const BOLD_ID = 'stocks_with_igfa_damaged.BOLD_ID';

    /** the column name for the IGFAName field */
    const IGFANAME = 'stocks_with_igfa_damaged.IGFAName';

    /** the column name for the EssayID field */
    const ESSAYID = 'stocks_with_igfa_damaged.EssayID';

    /** the column name for the Aquamaps field */
    const AQUAMAPS = 'stocks_with_igfa_damaged.Aquamaps';

    /** the column name for the Morphology field */
    const MORPHOLOGY = 'stocks_with_igfa_damaged.Morphology';

    /** the column name for the Occurrence field */
    const OCCURRENCE = 'stocks_with_igfa_damaged.Occurrence';

    /** the column name for the Strains field */
    const STRAINS = 'stocks_with_igfa_damaged.Strains';

    /** the column name for the Ecology field */
    const ECOLOGY = 'stocks_with_igfa_damaged.Ecology';

    /** the column name for the Diseases field */
    const DISEASES = 'stocks_with_igfa_damaged.Diseases';

    /** the column name for the Abnorm field */
    const ABNORM = 'stocks_with_igfa_damaged.Abnorm';

    /** the column name for the Metabolism field */
    const METABOLISM = 'stocks_with_igfa_damaged.Metabolism';

    /** the column name for the Predators field */
    const PREDATORS = 'stocks_with_igfa_damaged.Predators';

    /** the column name for the Spawning field */
    const SPAWNING = 'stocks_with_igfa_damaged.Spawning';

    /** the column name for the Speed field */
    const SPEED = 'stocks_with_igfa_damaged.Speed';

    /** the column name for the Diet field */
    const DIET = 'stocks_with_igfa_damaged.Diet';

    /** the column name for the Eggs field */
    const EGGS = 'stocks_with_igfa_damaged.Eggs';

    /** the column name for the EggDevelop field */
    const EGGDEVELOP = 'stocks_with_igfa_damaged.EggDevelop';

    /** the column name for the Food field */
    const FOOD = 'stocks_with_igfa_damaged.Food';

    /** the column name for the Larvae field */
    const LARVAE = 'stocks_with_igfa_damaged.Larvae';

    /** the column name for the LarvDyn field */
    const LARVDYN = 'stocks_with_igfa_damaged.LarvDyn';

    /** the column name for the LarvSpeed field */
    const LARVSPEED = 'stocks_with_igfa_damaged.LarvSpeed';

    /** the column name for the PopDyn field */
    const POPDYN = 'stocks_with_igfa_damaged.PopDyn';

    /** the column name for the LengthWeight field */
    const LENGTHWEIGHT = 'stocks_with_igfa_damaged.LengthWeight';

    /** the column name for the Gillarea field */
    const GILLAREA = 'stocks_with_igfa_damaged.Gillarea';

    /** the column name for the Maturity field */
    const MATURITY = 'stocks_with_igfa_damaged.Maturity';

    /** the column name for the MatSizes field */
    const MATSIZES = 'stocks_with_igfa_damaged.MatSizes';

    /** the column name for the Processing field */
    const PROCESSING = 'stocks_with_igfa_damaged.Processing';

    /** the column name for the Reproduction field */
    const REPRODUCTION = 'stocks_with_igfa_damaged.Reproduction';

    /** the column name for the Introductions field */
    const INTRODUCTIONS = 'stocks_with_igfa_damaged.Introductions';

    /** the column name for the Abundance field */
    const ABUNDANCE = 'stocks_with_igfa_damaged.Abundance';

    /** the column name for the Vision field */
    const VISION = 'stocks_with_igfa_damaged.Vision';

    /** the column name for the Genetics field */
    const GENETICS = 'stocks_with_igfa_damaged.Genetics';

    /** the column name for the Aquaculture field */
    const AQUACULTURE = 'stocks_with_igfa_damaged.Aquaculture';

    /** the column name for the CountryComp field */
    const COUNTRYCOMP = 'stocks_with_igfa_damaged.CountryComp';

    /** the column name for the Allele field */
    const ALLELE = 'stocks_with_igfa_damaged.Allele';

    /** the column name for the GeneticStudies field */
    const GENETICSTUDIES = 'stocks_with_igfa_damaged.GeneticStudies';

    /** the column name for the Ration field */
    const RATION = 'stocks_with_igfa_damaged.Ration';

    /** the column name for the Foods field */
    const FOODS = 'stocks_with_igfa_damaged.Foods';

    /** the column name for the Ecotoxicology field */
    const ECOTOXICOLOGY = 'stocks_with_igfa_damaged.Ecotoxicology';

    /** the column name for the Catches field */
    const CATCHES = 'stocks_with_igfa_damaged.Catches';

    /** the column name for the FAOAqua field */
    const FAOAQUA = 'stocks_with_igfa_damaged.FAOAqua';

    /** the column name for the LengthRelations field */
    const LENGTHRELATIONS = 'stocks_with_igfa_damaged.LengthRelations';

    /** the column name for the LengthFrequency field */
    const LENGTHFREQUENCY = 'stocks_with_igfa_damaged.LengthFrequency';

    /** the column name for the Sounds field */
    const SOUNDS = 'stocks_with_igfa_damaged.Sounds';

    /** the column name for the Broodstock field */
    const BROODSTOCK = 'stocks_with_igfa_damaged.Broodstock';

    /** the column name for the EggNursery field */
    const EGGNURSERY = 'stocks_with_igfa_damaged.EggNursery';

    /** the column name for the FryNursery field */
    const FRYNURSERY = 'stocks_with_igfa_damaged.FryNursery';

    /** the column name for the LarvalNursery field */
    const LARVALNURSERY = 'stocks_with_igfa_damaged.LarvalNursery';

    /** the column name for the Entered field */
    const ENTERED = 'stocks_with_igfa_damaged.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'stocks_with_igfa_damaged.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'stocks_with_igfa_damaged.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'stocks_with_igfa_damaged.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'stocks_with_igfa_damaged.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'stocks_with_igfa_damaged.DateChecked';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of StocksWithIgfaDamaged objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array StocksWithIgfaDamaged[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. StocksWithIgfaDamagedPeer::$fieldNames[StocksWithIgfaDamagedPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode', 'Stockdefs', 'Speccode', 'Level', 'Localunique', 'IucnCode', 'IucnAssessment', 'Protected', 'Stocksrefno', 'Northernmost', 'Northsouthn', 'Southermost', 'Northsouths', 'Westernmost', 'Westeastw', 'Easternmost', 'Westeaste', 'Boundingref', 'Boundingmethod', 'Tempmin', 'Tempmax', 'Tempref', 'Envtemp', 'Resilience', 'Resilienceremark', 'Phmin', 'Phmax', 'Phref', 'Dhmin', 'Dhmax', 'Dhref', 'Genbankid', 'Rfeid', 'FigisId', 'Ecotoxid', 'ScrfaData', 'GmadId', 'Saup', 'SaupId', 'SaupGroup', 'Ausmuseum', 'Fishtrace', 'IucnId', 'IucnGroup', 'BoldId', 'Igfaname', 'Essayid', 'Aquamaps', 'Morphology', 'Occurrence', 'Strains', 'Ecology', 'Diseases', 'Abnorm', 'Metabolism', 'Predators', 'Spawning', 'Speed', 'Diet', 'Eggs', 'Eggdevelop', 'Food', 'Larvae', 'Larvdyn', 'Larvspeed', 'Popdyn', 'Lengthweight', 'Gillarea', 'Maturity', 'Matsizes', 'Processing', 'Reproduction', 'Introductions', 'Abundance', 'Vision', 'Genetics', 'Aquaculture', 'Countrycomp', 'Allele', 'Geneticstudies', 'Ration', 'Foods', 'Ecotoxicology', 'Catches', 'Faoaqua', 'Lengthrelations', 'Lengthfrequency', 'Sounds', 'Broodstock', 'Eggnursery', 'Frynursery', 'Larvalnursery', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode', 'stockdefs', 'speccode', 'level', 'localunique', 'iucnCode', 'iucnAssessment', 'protected', 'stocksrefno', 'northernmost', 'northsouthn', 'southermost', 'northsouths', 'westernmost', 'westeastw', 'easternmost', 'westeaste', 'boundingref', 'boundingmethod', 'tempmin', 'tempmax', 'tempref', 'envtemp', 'resilience', 'resilienceremark', 'phmin', 'phmax', 'phref', 'dhmin', 'dhmax', 'dhref', 'genbankid', 'rfeid', 'figisId', 'ecotoxid', 'scrfaData', 'gmadId', 'saup', 'saupId', 'saupGroup', 'ausmuseum', 'fishtrace', 'iucnId', 'iucnGroup', 'boldId', 'igfaname', 'essayid', 'aquamaps', 'morphology', 'occurrence', 'strains', 'ecology', 'diseases', 'abnorm', 'metabolism', 'predators', 'spawning', 'speed', 'diet', 'eggs', 'eggdevelop', 'food', 'larvae', 'larvdyn', 'larvspeed', 'popdyn', 'lengthweight', 'gillarea', 'maturity', 'matsizes', 'processing', 'reproduction', 'introductions', 'abundance', 'vision', 'genetics', 'aquaculture', 'countrycomp', 'allele', 'geneticstudies', 'ration', 'foods', 'ecotoxicology', 'catches', 'faoaqua', 'lengthrelations', 'lengthfrequency', 'sounds', 'broodstock', 'eggnursery', 'frynursery', 'larvalnursery', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', ),
        BasePeer::TYPE_COLNAME => array (StocksWithIgfaDamagedPeer::STOCKCODE, StocksWithIgfaDamagedPeer::STOCKDEFS, StocksWithIgfaDamagedPeer::SPECCODE, StocksWithIgfaDamagedPeer::LEVEL, StocksWithIgfaDamagedPeer::LOCALUNIQUE, StocksWithIgfaDamagedPeer::IUCN_CODE, StocksWithIgfaDamagedPeer::IUCN_ASSESSMENT, StocksWithIgfaDamagedPeer::PROTECTEDSTOCK, StocksWithIgfaDamagedPeer::STOCKSREFNO, StocksWithIgfaDamagedPeer::NORTHERNMOST, StocksWithIgfaDamagedPeer::NORTHSOUTHN, StocksWithIgfaDamagedPeer::SOUTHERMOST, StocksWithIgfaDamagedPeer::NORTHSOUTHS, StocksWithIgfaDamagedPeer::WESTERNMOST, StocksWithIgfaDamagedPeer::WESTEASTW, StocksWithIgfaDamagedPeer::EASTERNMOST, StocksWithIgfaDamagedPeer::WESTEASTE, StocksWithIgfaDamagedPeer::BOUNDINGREF, StocksWithIgfaDamagedPeer::BOUNDINGMETHOD, StocksWithIgfaDamagedPeer::TEMPMIN, StocksWithIgfaDamagedPeer::TEMPMAX, StocksWithIgfaDamagedPeer::TEMPREF, StocksWithIgfaDamagedPeer::ENVTEMP, StocksWithIgfaDamagedPeer::RESILIENCE, StocksWithIgfaDamagedPeer::RESILIENCEREMARK, StocksWithIgfaDamagedPeer::PHMIN, StocksWithIgfaDamagedPeer::PHMAX, StocksWithIgfaDamagedPeer::PHREF, StocksWithIgfaDamagedPeer::DHMIN, StocksWithIgfaDamagedPeer::DHMAX, StocksWithIgfaDamagedPeer::DHREF, StocksWithIgfaDamagedPeer::GENBANKID, StocksWithIgfaDamagedPeer::RFEID, StocksWithIgfaDamagedPeer::FIGIS_ID, StocksWithIgfaDamagedPeer::ECOTOXID, StocksWithIgfaDamagedPeer::SCRFA_DATA, StocksWithIgfaDamagedPeer::GMAD_ID, StocksWithIgfaDamagedPeer::SAUP, StocksWithIgfaDamagedPeer::SAUP_ID, StocksWithIgfaDamagedPeer::SAUP_GROUP, StocksWithIgfaDamagedPeer::AUSMUSEUM, StocksWithIgfaDamagedPeer::FISHTRACE, StocksWithIgfaDamagedPeer::IUCN_ID, StocksWithIgfaDamagedPeer::IUCN_GROUP, StocksWithIgfaDamagedPeer::BOLD_ID, StocksWithIgfaDamagedPeer::IGFANAME, StocksWithIgfaDamagedPeer::ESSAYID, StocksWithIgfaDamagedPeer::AQUAMAPS, StocksWithIgfaDamagedPeer::MORPHOLOGY, StocksWithIgfaDamagedPeer::OCCURRENCE, StocksWithIgfaDamagedPeer::STRAINS, StocksWithIgfaDamagedPeer::ECOLOGY, StocksWithIgfaDamagedPeer::DISEASES, StocksWithIgfaDamagedPeer::ABNORM, StocksWithIgfaDamagedPeer::METABOLISM, StocksWithIgfaDamagedPeer::PREDATORS, StocksWithIgfaDamagedPeer::SPAWNING, StocksWithIgfaDamagedPeer::SPEED, StocksWithIgfaDamagedPeer::DIET, StocksWithIgfaDamagedPeer::EGGS, StocksWithIgfaDamagedPeer::EGGDEVELOP, StocksWithIgfaDamagedPeer::FOOD, StocksWithIgfaDamagedPeer::LARVAE, StocksWithIgfaDamagedPeer::LARVDYN, StocksWithIgfaDamagedPeer::LARVSPEED, StocksWithIgfaDamagedPeer::POPDYN, StocksWithIgfaDamagedPeer::LENGTHWEIGHT, StocksWithIgfaDamagedPeer::GILLAREA, StocksWithIgfaDamagedPeer::MATURITY, StocksWithIgfaDamagedPeer::MATSIZES, StocksWithIgfaDamagedPeer::PROCESSING, StocksWithIgfaDamagedPeer::REPRODUCTION, StocksWithIgfaDamagedPeer::INTRODUCTIONS, StocksWithIgfaDamagedPeer::ABUNDANCE, StocksWithIgfaDamagedPeer::VISION, StocksWithIgfaDamagedPeer::GENETICS, StocksWithIgfaDamagedPeer::AQUACULTURE, StocksWithIgfaDamagedPeer::COUNTRYCOMP, StocksWithIgfaDamagedPeer::ALLELE, StocksWithIgfaDamagedPeer::GENETICSTUDIES, StocksWithIgfaDamagedPeer::RATION, StocksWithIgfaDamagedPeer::FOODS, StocksWithIgfaDamagedPeer::ECOTOXICOLOGY, StocksWithIgfaDamagedPeer::CATCHES, StocksWithIgfaDamagedPeer::FAOAQUA, StocksWithIgfaDamagedPeer::LENGTHRELATIONS, StocksWithIgfaDamagedPeer::LENGTHFREQUENCY, StocksWithIgfaDamagedPeer::SOUNDS, StocksWithIgfaDamagedPeer::BROODSTOCK, StocksWithIgfaDamagedPeer::EGGNURSERY, StocksWithIgfaDamagedPeer::FRYNURSERY, StocksWithIgfaDamagedPeer::LARVALNURSERY, StocksWithIgfaDamagedPeer::ENTERED, StocksWithIgfaDamagedPeer::DATEENTERED, StocksWithIgfaDamagedPeer::MODIFIED, StocksWithIgfaDamagedPeer::DATEMODIFIED, StocksWithIgfaDamagedPeer::EXPERT, StocksWithIgfaDamagedPeer::DATECHECKED, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE', 'STOCKDEFS', 'SPECCODE', 'LEVEL', 'LOCALUNIQUE', 'IUCN_CODE', 'IUCN_ASSESSMENT', 'PROTECTEDSTOCK', 'STOCKSREFNO', 'NORTHERNMOST', 'NORTHSOUTHN', 'SOUTHERMOST', 'NORTHSOUTHS', 'WESTERNMOST', 'WESTEASTW', 'EASTERNMOST', 'WESTEASTE', 'BOUNDINGREF', 'BOUNDINGMETHOD', 'TEMPMIN', 'TEMPMAX', 'TEMPREF', 'ENVTEMP', 'RESILIENCE', 'RESILIENCEREMARK', 'PHMIN', 'PHMAX', 'PHREF', 'DHMIN', 'DHMAX', 'DHREF', 'GENBANKID', 'RFEID', 'FIGIS_ID', 'ECOTOXID', 'SCRFA_DATA', 'GMAD_ID', 'SAUP', 'SAUP_ID', 'SAUP_GROUP', 'AUSMUSEUM', 'FISHTRACE', 'IUCN_ID', 'IUCN_GROUP', 'BOLD_ID', 'IGFANAME', 'ESSAYID', 'AQUAMAPS', 'MORPHOLOGY', 'OCCURRENCE', 'STRAINS', 'ECOLOGY', 'DISEASES', 'ABNORM', 'METABOLISM', 'PREDATORS', 'SPAWNING', 'SPEED', 'DIET', 'EGGS', 'EGGDEVELOP', 'FOOD', 'LARVAE', 'LARVDYN', 'LARVSPEED', 'POPDYN', 'LENGTHWEIGHT', 'GILLAREA', 'MATURITY', 'MATSIZES', 'PROCESSING', 'REPRODUCTION', 'INTRODUCTIONS', 'ABUNDANCE', 'VISION', 'GENETICS', 'AQUACULTURE', 'COUNTRYCOMP', 'ALLELE', 'GENETICSTUDIES', 'RATION', 'FOODS', 'ECOTOXICOLOGY', 'CATCHES', 'FAOAQUA', 'LENGTHRELATIONS', 'LENGTHFREQUENCY', 'SOUNDS', 'BROODSTOCK', 'EGGNURSERY', 'FRYNURSERY', 'LARVALNURSERY', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode', 'StockDefs', 'SpecCode', 'Level', 'LocalUnique', 'IUCN_Code', 'IUCN_Assessment', 'Protected', 'StocksRefNo', 'Northernmost', 'NorthSouthN', 'Southermost', 'NorthSouthS', 'Westernmost', 'WestEastW', 'Easternmost', 'WestEastE', 'BoundingRef', 'BoundingMethod', 'TempMin', 'TempMax', 'TempRef', 'EnvTemp', 'Resilience', 'ResilienceRemark', 'pHMin', 'pHMax', 'pHRef', 'dHMin', 'dHMax', 'dHRef', 'GenBankID', 'RfeID', 'FIGIS_ID', 'EcotoxID', 'SCRFA_data', 'GMAD_ID', 'SAUP', 'SAUP_ID', 'SAUP_Group', 'AusMuseum', 'FishTrace', 'IUCN_ID', 'IUCN_Group', 'BOLD_ID', 'IGFAName', 'EssayID', 'Aquamaps', 'Morphology', 'Occurrence', 'Strains', 'Ecology', 'Diseases', 'Abnorm', 'Metabolism', 'Predators', 'Spawning', 'Speed', 'Diet', 'Eggs', 'EggDevelop', 'Food', 'Larvae', 'LarvDyn', 'LarvSpeed', 'PopDyn', 'LengthWeight', 'Gillarea', 'Maturity', 'MatSizes', 'Processing', 'Reproduction', 'Introductions', 'Abundance', 'Vision', 'Genetics', 'Aquaculture', 'CountryComp', 'Allele', 'GeneticStudies', 'Ration', 'Foods', 'Ecotoxicology', 'Catches', 'FAOAqua', 'LengthRelations', 'LengthFrequency', 'Sounds', 'Broodstock', 'EggNursery', 'FryNursery', 'LarvalNursery', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. StocksWithIgfaDamagedPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode' => 0, 'Stockdefs' => 1, 'Speccode' => 2, 'Level' => 3, 'Localunique' => 4, 'IucnCode' => 5, 'IucnAssessment' => 6, 'Protected' => 7, 'Stocksrefno' => 8, 'Northernmost' => 9, 'Northsouthn' => 10, 'Southermost' => 11, 'Northsouths' => 12, 'Westernmost' => 13, 'Westeastw' => 14, 'Easternmost' => 15, 'Westeaste' => 16, 'Boundingref' => 17, 'Boundingmethod' => 18, 'Tempmin' => 19, 'Tempmax' => 20, 'Tempref' => 21, 'Envtemp' => 22, 'Resilience' => 23, 'Resilienceremark' => 24, 'Phmin' => 25, 'Phmax' => 26, 'Phref' => 27, 'Dhmin' => 28, 'Dhmax' => 29, 'Dhref' => 30, 'Genbankid' => 31, 'Rfeid' => 32, 'FigisId' => 33, 'Ecotoxid' => 34, 'ScrfaData' => 35, 'GmadId' => 36, 'Saup' => 37, 'SaupId' => 38, 'SaupGroup' => 39, 'Ausmuseum' => 40, 'Fishtrace' => 41, 'IucnId' => 42, 'IucnGroup' => 43, 'BoldId' => 44, 'Igfaname' => 45, 'Essayid' => 46, 'Aquamaps' => 47, 'Morphology' => 48, 'Occurrence' => 49, 'Strains' => 50, 'Ecology' => 51, 'Diseases' => 52, 'Abnorm' => 53, 'Metabolism' => 54, 'Predators' => 55, 'Spawning' => 56, 'Speed' => 57, 'Diet' => 58, 'Eggs' => 59, 'Eggdevelop' => 60, 'Food' => 61, 'Larvae' => 62, 'Larvdyn' => 63, 'Larvspeed' => 64, 'Popdyn' => 65, 'Lengthweight' => 66, 'Gillarea' => 67, 'Maturity' => 68, 'Matsizes' => 69, 'Processing' => 70, 'Reproduction' => 71, 'Introductions' => 72, 'Abundance' => 73, 'Vision' => 74, 'Genetics' => 75, 'Aquaculture' => 76, 'Countrycomp' => 77, 'Allele' => 78, 'Geneticstudies' => 79, 'Ration' => 80, 'Foods' => 81, 'Ecotoxicology' => 82, 'Catches' => 83, 'Faoaqua' => 84, 'Lengthrelations' => 85, 'Lengthfrequency' => 86, 'Sounds' => 87, 'Broodstock' => 88, 'Eggnursery' => 89, 'Frynursery' => 90, 'Larvalnursery' => 91, 'Entered' => 92, 'Dateentered' => 93, 'Modified' => 94, 'Datemodified' => 95, 'Expert' => 96, 'Datechecked' => 97, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode' => 0, 'stockdefs' => 1, 'speccode' => 2, 'level' => 3, 'localunique' => 4, 'iucnCode' => 5, 'iucnAssessment' => 6, 'protected' => 7, 'stocksrefno' => 8, 'northernmost' => 9, 'northsouthn' => 10, 'southermost' => 11, 'northsouths' => 12, 'westernmost' => 13, 'westeastw' => 14, 'easternmost' => 15, 'westeaste' => 16, 'boundingref' => 17, 'boundingmethod' => 18, 'tempmin' => 19, 'tempmax' => 20, 'tempref' => 21, 'envtemp' => 22, 'resilience' => 23, 'resilienceremark' => 24, 'phmin' => 25, 'phmax' => 26, 'phref' => 27, 'dhmin' => 28, 'dhmax' => 29, 'dhref' => 30, 'genbankid' => 31, 'rfeid' => 32, 'figisId' => 33, 'ecotoxid' => 34, 'scrfaData' => 35, 'gmadId' => 36, 'saup' => 37, 'saupId' => 38, 'saupGroup' => 39, 'ausmuseum' => 40, 'fishtrace' => 41, 'iucnId' => 42, 'iucnGroup' => 43, 'boldId' => 44, 'igfaname' => 45, 'essayid' => 46, 'aquamaps' => 47, 'morphology' => 48, 'occurrence' => 49, 'strains' => 50, 'ecology' => 51, 'diseases' => 52, 'abnorm' => 53, 'metabolism' => 54, 'predators' => 55, 'spawning' => 56, 'speed' => 57, 'diet' => 58, 'eggs' => 59, 'eggdevelop' => 60, 'food' => 61, 'larvae' => 62, 'larvdyn' => 63, 'larvspeed' => 64, 'popdyn' => 65, 'lengthweight' => 66, 'gillarea' => 67, 'maturity' => 68, 'matsizes' => 69, 'processing' => 70, 'reproduction' => 71, 'introductions' => 72, 'abundance' => 73, 'vision' => 74, 'genetics' => 75, 'aquaculture' => 76, 'countrycomp' => 77, 'allele' => 78, 'geneticstudies' => 79, 'ration' => 80, 'foods' => 81, 'ecotoxicology' => 82, 'catches' => 83, 'faoaqua' => 84, 'lengthrelations' => 85, 'lengthfrequency' => 86, 'sounds' => 87, 'broodstock' => 88, 'eggnursery' => 89, 'frynursery' => 90, 'larvalnursery' => 91, 'entered' => 92, 'dateentered' => 93, 'modified' => 94, 'datemodified' => 95, 'expert' => 96, 'datechecked' => 97, ),
        BasePeer::TYPE_COLNAME => array (StocksWithIgfaDamagedPeer::STOCKCODE => 0, StocksWithIgfaDamagedPeer::STOCKDEFS => 1, StocksWithIgfaDamagedPeer::SPECCODE => 2, StocksWithIgfaDamagedPeer::LEVEL => 3, StocksWithIgfaDamagedPeer::LOCALUNIQUE => 4, StocksWithIgfaDamagedPeer::IUCN_CODE => 5, StocksWithIgfaDamagedPeer::IUCN_ASSESSMENT => 6, StocksWithIgfaDamagedPeer::PROTECTEDSTOCK => 7, StocksWithIgfaDamagedPeer::STOCKSREFNO => 8, StocksWithIgfaDamagedPeer::NORTHERNMOST => 9, StocksWithIgfaDamagedPeer::NORTHSOUTHN => 10, StocksWithIgfaDamagedPeer::SOUTHERMOST => 11, StocksWithIgfaDamagedPeer::NORTHSOUTHS => 12, StocksWithIgfaDamagedPeer::WESTERNMOST => 13, StocksWithIgfaDamagedPeer::WESTEASTW => 14, StocksWithIgfaDamagedPeer::EASTERNMOST => 15, StocksWithIgfaDamagedPeer::WESTEASTE => 16, StocksWithIgfaDamagedPeer::BOUNDINGREF => 17, StocksWithIgfaDamagedPeer::BOUNDINGMETHOD => 18, StocksWithIgfaDamagedPeer::TEMPMIN => 19, StocksWithIgfaDamagedPeer::TEMPMAX => 20, StocksWithIgfaDamagedPeer::TEMPREF => 21, StocksWithIgfaDamagedPeer::ENVTEMP => 22, StocksWithIgfaDamagedPeer::RESILIENCE => 23, StocksWithIgfaDamagedPeer::RESILIENCEREMARK => 24, StocksWithIgfaDamagedPeer::PHMIN => 25, StocksWithIgfaDamagedPeer::PHMAX => 26, StocksWithIgfaDamagedPeer::PHREF => 27, StocksWithIgfaDamagedPeer::DHMIN => 28, StocksWithIgfaDamagedPeer::DHMAX => 29, StocksWithIgfaDamagedPeer::DHREF => 30, StocksWithIgfaDamagedPeer::GENBANKID => 31, StocksWithIgfaDamagedPeer::RFEID => 32, StocksWithIgfaDamagedPeer::FIGIS_ID => 33, StocksWithIgfaDamagedPeer::ECOTOXID => 34, StocksWithIgfaDamagedPeer::SCRFA_DATA => 35, StocksWithIgfaDamagedPeer::GMAD_ID => 36, StocksWithIgfaDamagedPeer::SAUP => 37, StocksWithIgfaDamagedPeer::SAUP_ID => 38, StocksWithIgfaDamagedPeer::SAUP_GROUP => 39, StocksWithIgfaDamagedPeer::AUSMUSEUM => 40, StocksWithIgfaDamagedPeer::FISHTRACE => 41, StocksWithIgfaDamagedPeer::IUCN_ID => 42, StocksWithIgfaDamagedPeer::IUCN_GROUP => 43, StocksWithIgfaDamagedPeer::BOLD_ID => 44, StocksWithIgfaDamagedPeer::IGFANAME => 45, StocksWithIgfaDamagedPeer::ESSAYID => 46, StocksWithIgfaDamagedPeer::AQUAMAPS => 47, StocksWithIgfaDamagedPeer::MORPHOLOGY => 48, StocksWithIgfaDamagedPeer::OCCURRENCE => 49, StocksWithIgfaDamagedPeer::STRAINS => 50, StocksWithIgfaDamagedPeer::ECOLOGY => 51, StocksWithIgfaDamagedPeer::DISEASES => 52, StocksWithIgfaDamagedPeer::ABNORM => 53, StocksWithIgfaDamagedPeer::METABOLISM => 54, StocksWithIgfaDamagedPeer::PREDATORS => 55, StocksWithIgfaDamagedPeer::SPAWNING => 56, StocksWithIgfaDamagedPeer::SPEED => 57, StocksWithIgfaDamagedPeer::DIET => 58, StocksWithIgfaDamagedPeer::EGGS => 59, StocksWithIgfaDamagedPeer::EGGDEVELOP => 60, StocksWithIgfaDamagedPeer::FOOD => 61, StocksWithIgfaDamagedPeer::LARVAE => 62, StocksWithIgfaDamagedPeer::LARVDYN => 63, StocksWithIgfaDamagedPeer::LARVSPEED => 64, StocksWithIgfaDamagedPeer::POPDYN => 65, StocksWithIgfaDamagedPeer::LENGTHWEIGHT => 66, StocksWithIgfaDamagedPeer::GILLAREA => 67, StocksWithIgfaDamagedPeer::MATURITY => 68, StocksWithIgfaDamagedPeer::MATSIZES => 69, StocksWithIgfaDamagedPeer::PROCESSING => 70, StocksWithIgfaDamagedPeer::REPRODUCTION => 71, StocksWithIgfaDamagedPeer::INTRODUCTIONS => 72, StocksWithIgfaDamagedPeer::ABUNDANCE => 73, StocksWithIgfaDamagedPeer::VISION => 74, StocksWithIgfaDamagedPeer::GENETICS => 75, StocksWithIgfaDamagedPeer::AQUACULTURE => 76, StocksWithIgfaDamagedPeer::COUNTRYCOMP => 77, StocksWithIgfaDamagedPeer::ALLELE => 78, StocksWithIgfaDamagedPeer::GENETICSTUDIES => 79, StocksWithIgfaDamagedPeer::RATION => 80, StocksWithIgfaDamagedPeer::FOODS => 81, StocksWithIgfaDamagedPeer::ECOTOXICOLOGY => 82, StocksWithIgfaDamagedPeer::CATCHES => 83, StocksWithIgfaDamagedPeer::FAOAQUA => 84, StocksWithIgfaDamagedPeer::LENGTHRELATIONS => 85, StocksWithIgfaDamagedPeer::LENGTHFREQUENCY => 86, StocksWithIgfaDamagedPeer::SOUNDS => 87, StocksWithIgfaDamagedPeer::BROODSTOCK => 88, StocksWithIgfaDamagedPeer::EGGNURSERY => 89, StocksWithIgfaDamagedPeer::FRYNURSERY => 90, StocksWithIgfaDamagedPeer::LARVALNURSERY => 91, StocksWithIgfaDamagedPeer::ENTERED => 92, StocksWithIgfaDamagedPeer::DATEENTERED => 93, StocksWithIgfaDamagedPeer::MODIFIED => 94, StocksWithIgfaDamagedPeer::DATEMODIFIED => 95, StocksWithIgfaDamagedPeer::EXPERT => 96, StocksWithIgfaDamagedPeer::DATECHECKED => 97, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE' => 0, 'STOCKDEFS' => 1, 'SPECCODE' => 2, 'LEVEL' => 3, 'LOCALUNIQUE' => 4, 'IUCN_CODE' => 5, 'IUCN_ASSESSMENT' => 6, 'PROTECTEDSTOCK' => 7, 'STOCKSREFNO' => 8, 'NORTHERNMOST' => 9, 'NORTHSOUTHN' => 10, 'SOUTHERMOST' => 11, 'NORTHSOUTHS' => 12, 'WESTERNMOST' => 13, 'WESTEASTW' => 14, 'EASTERNMOST' => 15, 'WESTEASTE' => 16, 'BOUNDINGREF' => 17, 'BOUNDINGMETHOD' => 18, 'TEMPMIN' => 19, 'TEMPMAX' => 20, 'TEMPREF' => 21, 'ENVTEMP' => 22, 'RESILIENCE' => 23, 'RESILIENCEREMARK' => 24, 'PHMIN' => 25, 'PHMAX' => 26, 'PHREF' => 27, 'DHMIN' => 28, 'DHMAX' => 29, 'DHREF' => 30, 'GENBANKID' => 31, 'RFEID' => 32, 'FIGIS_ID' => 33, 'ECOTOXID' => 34, 'SCRFA_DATA' => 35, 'GMAD_ID' => 36, 'SAUP' => 37, 'SAUP_ID' => 38, 'SAUP_GROUP' => 39, 'AUSMUSEUM' => 40, 'FISHTRACE' => 41, 'IUCN_ID' => 42, 'IUCN_GROUP' => 43, 'BOLD_ID' => 44, 'IGFANAME' => 45, 'ESSAYID' => 46, 'AQUAMAPS' => 47, 'MORPHOLOGY' => 48, 'OCCURRENCE' => 49, 'STRAINS' => 50, 'ECOLOGY' => 51, 'DISEASES' => 52, 'ABNORM' => 53, 'METABOLISM' => 54, 'PREDATORS' => 55, 'SPAWNING' => 56, 'SPEED' => 57, 'DIET' => 58, 'EGGS' => 59, 'EGGDEVELOP' => 60, 'FOOD' => 61, 'LARVAE' => 62, 'LARVDYN' => 63, 'LARVSPEED' => 64, 'POPDYN' => 65, 'LENGTHWEIGHT' => 66, 'GILLAREA' => 67, 'MATURITY' => 68, 'MATSIZES' => 69, 'PROCESSING' => 70, 'REPRODUCTION' => 71, 'INTRODUCTIONS' => 72, 'ABUNDANCE' => 73, 'VISION' => 74, 'GENETICS' => 75, 'AQUACULTURE' => 76, 'COUNTRYCOMP' => 77, 'ALLELE' => 78, 'GENETICSTUDIES' => 79, 'RATION' => 80, 'FOODS' => 81, 'ECOTOXICOLOGY' => 82, 'CATCHES' => 83, 'FAOAQUA' => 84, 'LENGTHRELATIONS' => 85, 'LENGTHFREQUENCY' => 86, 'SOUNDS' => 87, 'BROODSTOCK' => 88, 'EGGNURSERY' => 89, 'FRYNURSERY' => 90, 'LARVALNURSERY' => 91, 'ENTERED' => 92, 'DATEENTERED' => 93, 'MODIFIED' => 94, 'DATEMODIFIED' => 95, 'EXPERT' => 96, 'DATECHECKED' => 97, ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode' => 0, 'StockDefs' => 1, 'SpecCode' => 2, 'Level' => 3, 'LocalUnique' => 4, 'IUCN_Code' => 5, 'IUCN_Assessment' => 6, 'Protected' => 7, 'StocksRefNo' => 8, 'Northernmost' => 9, 'NorthSouthN' => 10, 'Southermost' => 11, 'NorthSouthS' => 12, 'Westernmost' => 13, 'WestEastW' => 14, 'Easternmost' => 15, 'WestEastE' => 16, 'BoundingRef' => 17, 'BoundingMethod' => 18, 'TempMin' => 19, 'TempMax' => 20, 'TempRef' => 21, 'EnvTemp' => 22, 'Resilience' => 23, 'ResilienceRemark' => 24, 'pHMin' => 25, 'pHMax' => 26, 'pHRef' => 27, 'dHMin' => 28, 'dHMax' => 29, 'dHRef' => 30, 'GenBankID' => 31, 'RfeID' => 32, 'FIGIS_ID' => 33, 'EcotoxID' => 34, 'SCRFA_data' => 35, 'GMAD_ID' => 36, 'SAUP' => 37, 'SAUP_ID' => 38, 'SAUP_Group' => 39, 'AusMuseum' => 40, 'FishTrace' => 41, 'IUCN_ID' => 42, 'IUCN_Group' => 43, 'BOLD_ID' => 44, 'IGFAName' => 45, 'EssayID' => 46, 'Aquamaps' => 47, 'Morphology' => 48, 'Occurrence' => 49, 'Strains' => 50, 'Ecology' => 51, 'Diseases' => 52, 'Abnorm' => 53, 'Metabolism' => 54, 'Predators' => 55, 'Spawning' => 56, 'Speed' => 57, 'Diet' => 58, 'Eggs' => 59, 'EggDevelop' => 60, 'Food' => 61, 'Larvae' => 62, 'LarvDyn' => 63, 'LarvSpeed' => 64, 'PopDyn' => 65, 'LengthWeight' => 66, 'Gillarea' => 67, 'Maturity' => 68, 'MatSizes' => 69, 'Processing' => 70, 'Reproduction' => 71, 'Introductions' => 72, 'Abundance' => 73, 'Vision' => 74, 'Genetics' => 75, 'Aquaculture' => 76, 'CountryComp' => 77, 'Allele' => 78, 'GeneticStudies' => 79, 'Ration' => 80, 'Foods' => 81, 'Ecotoxicology' => 82, 'Catches' => 83, 'FAOAqua' => 84, 'LengthRelations' => 85, 'LengthFrequency' => 86, 'Sounds' => 87, 'Broodstock' => 88, 'EggNursery' => 89, 'FryNursery' => 90, 'LarvalNursery' => 91, 'Entered' => 92, 'DateEntered' => 93, 'Modified' => 94, 'DateModified' => 95, 'Expert' => 96, 'DateChecked' => 97, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, )
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
        $toNames = StocksWithIgfaDamagedPeer::getFieldNames($toType);
        $key = isset(StocksWithIgfaDamagedPeer::$fieldKeys[$fromType][$name]) ? StocksWithIgfaDamagedPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(StocksWithIgfaDamagedPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, StocksWithIgfaDamagedPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return StocksWithIgfaDamagedPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. StocksWithIgfaDamagedPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(StocksWithIgfaDamagedPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::STOCKCODE);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::STOCKDEFS);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::SPECCODE);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::LEVEL);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::LOCALUNIQUE);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::IUCN_CODE);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::IUCN_ASSESSMENT);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::PROTECTEDSTOCK);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::STOCKSREFNO);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::NORTHERNMOST);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::NORTHSOUTHN);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::SOUTHERMOST);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::NORTHSOUTHS);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::WESTERNMOST);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::WESTEASTW);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::EASTERNMOST);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::WESTEASTE);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::BOUNDINGREF);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::BOUNDINGMETHOD);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::TEMPMIN);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::TEMPMAX);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::TEMPREF);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::ENVTEMP);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::RESILIENCE);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::RESILIENCEREMARK);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::PHMIN);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::PHMAX);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::PHREF);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::DHMIN);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::DHMAX);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::DHREF);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::GENBANKID);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::RFEID);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::FIGIS_ID);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::ECOTOXID);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::SCRFA_DATA);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::GMAD_ID);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::SAUP);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::SAUP_ID);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::SAUP_GROUP);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::AUSMUSEUM);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::FISHTRACE);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::IUCN_ID);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::IUCN_GROUP);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::BOLD_ID);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::IGFANAME);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::ESSAYID);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::AQUAMAPS);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::MORPHOLOGY);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::OCCURRENCE);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::STRAINS);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::ECOLOGY);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::DISEASES);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::ABNORM);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::METABOLISM);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::PREDATORS);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::SPAWNING);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::SPEED);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::DIET);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::EGGS);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::EGGDEVELOP);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::FOOD);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::LARVAE);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::LARVDYN);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::LARVSPEED);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::POPDYN);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::LENGTHWEIGHT);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::GILLAREA);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::MATURITY);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::MATSIZES);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::PROCESSING);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::REPRODUCTION);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::INTRODUCTIONS);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::ABUNDANCE);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::VISION);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::GENETICS);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::AQUACULTURE);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::COUNTRYCOMP);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::ALLELE);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::GENETICSTUDIES);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::RATION);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::FOODS);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::ECOTOXICOLOGY);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::CATCHES);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::FAOAQUA);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::LENGTHRELATIONS);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::LENGTHFREQUENCY);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::SOUNDS);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::BROODSTOCK);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::EGGNURSERY);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::FRYNURSERY);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::LARVALNURSERY);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::ENTERED);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::DATEENTERED);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::MODIFIED);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::DATEMODIFIED);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::EXPERT);
            $criteria->addSelectColumn(StocksWithIgfaDamagedPeer::DATECHECKED);
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
        $criteria->setPrimaryTableName(StocksWithIgfaDamagedPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            StocksWithIgfaDamagedPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(StocksWithIgfaDamagedPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(StocksWithIgfaDamagedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return StocksWithIgfaDamaged
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = StocksWithIgfaDamagedPeer::doSelect($critcopy, $con);
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
        return StocksWithIgfaDamagedPeer::populateObjects(StocksWithIgfaDamagedPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(StocksWithIgfaDamagedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            StocksWithIgfaDamagedPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(StocksWithIgfaDamagedPeer::DATABASE_NAME);

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
     * @param StocksWithIgfaDamaged $obj A StocksWithIgfaDamaged object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getSpeccode(), (string) $obj->getLevel(), (string) $obj->getLocalunique()));
            } // if key === null
            StocksWithIgfaDamagedPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A StocksWithIgfaDamaged object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof StocksWithIgfaDamaged) {
                $key = serialize(array((string) $value->getSpeccode(), (string) $value->getLevel(), (string) $value->getLocalunique()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or StocksWithIgfaDamaged object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(StocksWithIgfaDamagedPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return StocksWithIgfaDamaged Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(StocksWithIgfaDamagedPeer::$instances[$key])) {
                return StocksWithIgfaDamagedPeer::$instances[$key];
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
        foreach (StocksWithIgfaDamagedPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        StocksWithIgfaDamagedPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to stocks_with_igfa_damaged
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
        $cls = StocksWithIgfaDamagedPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = StocksWithIgfaDamagedPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = StocksWithIgfaDamagedPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                StocksWithIgfaDamagedPeer::addInstanceToPool($obj, $key);
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
     * @return array (StocksWithIgfaDamaged object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = StocksWithIgfaDamagedPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = StocksWithIgfaDamagedPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + StocksWithIgfaDamagedPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = StocksWithIgfaDamagedPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            StocksWithIgfaDamagedPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(StocksWithIgfaDamagedPeer::DATABASE_NAME)->getTable(StocksWithIgfaDamagedPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseStocksWithIgfaDamagedPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseStocksWithIgfaDamagedPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \StocksWithIgfaDamagedTableMap());
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
        return StocksWithIgfaDamagedPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a StocksWithIgfaDamaged or Criteria object.
     *
     * @param      mixed $values Criteria or StocksWithIgfaDamaged object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StocksWithIgfaDamagedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from StocksWithIgfaDamaged object
        }


        // Set the correct dbName
        $criteria->setDbName(StocksWithIgfaDamagedPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a StocksWithIgfaDamaged or Criteria object.
     *
     * @param      mixed $values Criteria or StocksWithIgfaDamaged object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StocksWithIgfaDamagedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(StocksWithIgfaDamagedPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(StocksWithIgfaDamagedPeer::SPECCODE);
            $value = $criteria->remove(StocksWithIgfaDamagedPeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(StocksWithIgfaDamagedPeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(StocksWithIgfaDamagedPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(StocksWithIgfaDamagedPeer::LEVEL);
            $value = $criteria->remove(StocksWithIgfaDamagedPeer::LEVEL);
            if ($value) {
                $selectCriteria->add(StocksWithIgfaDamagedPeer::LEVEL, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(StocksWithIgfaDamagedPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(StocksWithIgfaDamagedPeer::LOCALUNIQUE);
            $value = $criteria->remove(StocksWithIgfaDamagedPeer::LOCALUNIQUE);
            if ($value) {
                $selectCriteria->add(StocksWithIgfaDamagedPeer::LOCALUNIQUE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(StocksWithIgfaDamagedPeer::TABLE_NAME);
            }

        } else { // $values is StocksWithIgfaDamaged object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(StocksWithIgfaDamagedPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the stocks_with_igfa_damaged table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StocksWithIgfaDamagedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(StocksWithIgfaDamagedPeer::TABLE_NAME, $con, StocksWithIgfaDamagedPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            StocksWithIgfaDamagedPeer::clearInstancePool();
            StocksWithIgfaDamagedPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a StocksWithIgfaDamaged or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or StocksWithIgfaDamaged object or primary key or array of primary keys
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
            $con = Propel::getConnection(StocksWithIgfaDamagedPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            StocksWithIgfaDamagedPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof StocksWithIgfaDamaged) { // it's a model object
            // invalidate the cache for this single object
            StocksWithIgfaDamagedPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(StocksWithIgfaDamagedPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(StocksWithIgfaDamagedPeer::SPECCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(StocksWithIgfaDamagedPeer::LEVEL, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(StocksWithIgfaDamagedPeer::LOCALUNIQUE, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                StocksWithIgfaDamagedPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(StocksWithIgfaDamagedPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            StocksWithIgfaDamagedPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given StocksWithIgfaDamaged object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param StocksWithIgfaDamaged $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(StocksWithIgfaDamagedPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(StocksWithIgfaDamagedPeer::TABLE_NAME);

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

        return BasePeer::doValidate(StocksWithIgfaDamagedPeer::DATABASE_NAME, StocksWithIgfaDamagedPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $speccode
     * @param   string $level
     * @param   string $localunique
     * @param      PropelPDO $con
     * @return StocksWithIgfaDamaged
     */
    public static function retrieveByPK($speccode, $level, $localunique, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $speccode, (string) $level, (string) $localunique));
         if (null !== ($obj = StocksWithIgfaDamagedPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(StocksWithIgfaDamagedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(StocksWithIgfaDamagedPeer::DATABASE_NAME);
        $criteria->add(StocksWithIgfaDamagedPeer::SPECCODE, $speccode);
        $criteria->add(StocksWithIgfaDamagedPeer::LEVEL, $level);
        $criteria->add(StocksWithIgfaDamagedPeer::LOCALUNIQUE, $localunique);
        $v = StocksWithIgfaDamagedPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseStocksWithIgfaDamagedPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseStocksWithIgfaDamagedPeer::buildTableMap();

