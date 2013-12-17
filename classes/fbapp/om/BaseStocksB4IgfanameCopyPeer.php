<?php


/**
 * Base static class for performing query and update operations on the 'stocks_b4_igfaname_copy' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseStocksB4IgfanameCopyPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'stocks_b4_igfaname_copy';

    /** the related Propel class for this table */
    const OM_CLASS = 'StocksB4IgfanameCopy';

    /** the related TableMap class for this table */
    const TM_CLASS = 'StocksB4IgfanameCopyTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 98;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 98;

    /** the column name for the StockCode field */
    const STOCKCODE = 'stocks_b4_igfaname_copy.StockCode';

    /** the column name for the StockDefs field */
    const STOCKDEFS = 'stocks_b4_igfaname_copy.StockDefs';

    /** the column name for the SpecCode field */
    const SPECCODE = 'stocks_b4_igfaname_copy.SpecCode';

    /** the column name for the Level field */
    const LEVEL = 'stocks_b4_igfaname_copy.Level';

    /** the column name for the LocalUnique field */
    const LOCALUNIQUE = 'stocks_b4_igfaname_copy.LocalUnique';

    /** the column name for the IUCN_Code field */
    const IUCN_CODE = 'stocks_b4_igfaname_copy.IUCN_Code';

    /** the column name for the IUCN_Assessment field */
    const IUCN_ASSESSMENT = 'stocks_b4_igfaname_copy.IUCN_Assessment';

    /** the column name for the Protected field */
    const PROTECTEDSTOCK = 'stocks_b4_igfaname_copy.Protected';

    /** the column name for the StocksRefNo field */
    const STOCKSREFNO = 'stocks_b4_igfaname_copy.StocksRefNo';

    /** the column name for the Northernmost field */
    const NORTHERNMOST = 'stocks_b4_igfaname_copy.Northernmost';

    /** the column name for the NorthSouthN field */
    const NORTHSOUTHN = 'stocks_b4_igfaname_copy.NorthSouthN';

    /** the column name for the Southermost field */
    const SOUTHERMOST = 'stocks_b4_igfaname_copy.Southermost';

    /** the column name for the NorthSouthS field */
    const NORTHSOUTHS = 'stocks_b4_igfaname_copy.NorthSouthS';

    /** the column name for the Westernmost field */
    const WESTERNMOST = 'stocks_b4_igfaname_copy.Westernmost';

    /** the column name for the WestEastW field */
    const WESTEASTW = 'stocks_b4_igfaname_copy.WestEastW';

    /** the column name for the Easternmost field */
    const EASTERNMOST = 'stocks_b4_igfaname_copy.Easternmost';

    /** the column name for the WestEastE field */
    const WESTEASTE = 'stocks_b4_igfaname_copy.WestEastE';

    /** the column name for the BoundingRef field */
    const BOUNDINGREF = 'stocks_b4_igfaname_copy.BoundingRef';

    /** the column name for the BoundingMethod field */
    const BOUNDINGMETHOD = 'stocks_b4_igfaname_copy.BoundingMethod';

    /** the column name for the TempMin field */
    const TEMPMIN = 'stocks_b4_igfaname_copy.TempMin';

    /** the column name for the TempMax field */
    const TEMPMAX = 'stocks_b4_igfaname_copy.TempMax';

    /** the column name for the TempRef field */
    const TEMPREF = 'stocks_b4_igfaname_copy.TempRef';

    /** the column name for the EnvTemp field */
    const ENVTEMP = 'stocks_b4_igfaname_copy.EnvTemp';

    /** the column name for the Resilience field */
    const RESILIENCE = 'stocks_b4_igfaname_copy.Resilience';

    /** the column name for the ResilienceRemark field */
    const RESILIENCEREMARK = 'stocks_b4_igfaname_copy.ResilienceRemark';

    /** the column name for the pHMin field */
    const PHMIN = 'stocks_b4_igfaname_copy.pHMin';

    /** the column name for the pHMax field */
    const PHMAX = 'stocks_b4_igfaname_copy.pHMax';

    /** the column name for the pHRef field */
    const PHREF = 'stocks_b4_igfaname_copy.pHRef';

    /** the column name for the dHMin field */
    const DHMIN = 'stocks_b4_igfaname_copy.dHMin';

    /** the column name for the dHMax field */
    const DHMAX = 'stocks_b4_igfaname_copy.dHMax';

    /** the column name for the dHRef field */
    const DHREF = 'stocks_b4_igfaname_copy.dHRef';

    /** the column name for the GenBankID field */
    const GENBANKID = 'stocks_b4_igfaname_copy.GenBankID';

    /** the column name for the RfeID field */
    const RFEID = 'stocks_b4_igfaname_copy.RfeID';

    /** the column name for the FIGIS_ID field */
    const FIGIS_ID = 'stocks_b4_igfaname_copy.FIGIS_ID';

    /** the column name for the EcotoxID field */
    const ECOTOXID = 'stocks_b4_igfaname_copy.EcotoxID';

    /** the column name for the SCRFA_data field */
    const SCRFA_DATA = 'stocks_b4_igfaname_copy.SCRFA_data';

    /** the column name for the GMAD_ID field */
    const GMAD_ID = 'stocks_b4_igfaname_copy.GMAD_ID';

    /** the column name for the SAUP field */
    const SAUP = 'stocks_b4_igfaname_copy.SAUP';

    /** the column name for the SAUP_ID field */
    const SAUP_ID = 'stocks_b4_igfaname_copy.SAUP_ID';

    /** the column name for the SAUP_Group field */
    const SAUP_GROUP = 'stocks_b4_igfaname_copy.SAUP_Group';

    /** the column name for the AusMuseum field */
    const AUSMUSEUM = 'stocks_b4_igfaname_copy.AusMuseum';

    /** the column name for the FishTrace field */
    const FISHTRACE = 'stocks_b4_igfaname_copy.FishTrace';

    /** the column name for the IUCN_ID field */
    const IUCN_ID = 'stocks_b4_igfaname_copy.IUCN_ID';

    /** the column name for the IUCN_Group field */
    const IUCN_GROUP = 'stocks_b4_igfaname_copy.IUCN_Group';

    /** the column name for the BOLD_ID field */
    const BOLD_ID = 'stocks_b4_igfaname_copy.BOLD_ID';

    /** the column name for the EssayID field */
    const ESSAYID = 'stocks_b4_igfaname_copy.EssayID';

    /** the column name for the Aquamaps field */
    const AQUAMAPS = 'stocks_b4_igfaname_copy.Aquamaps';

    /** the column name for the Morphology field */
    const MORPHOLOGY = 'stocks_b4_igfaname_copy.Morphology';

    /** the column name for the Occurrence field */
    const OCCURRENCE = 'stocks_b4_igfaname_copy.Occurrence';

    /** the column name for the Strains field */
    const STRAINS = 'stocks_b4_igfaname_copy.Strains';

    /** the column name for the Ecology field */
    const ECOLOGY = 'stocks_b4_igfaname_copy.Ecology';

    /** the column name for the Diseases field */
    const DISEASES = 'stocks_b4_igfaname_copy.Diseases';

    /** the column name for the Abnorm field */
    const ABNORM = 'stocks_b4_igfaname_copy.Abnorm';

    /** the column name for the Metabolism field */
    const METABOLISM = 'stocks_b4_igfaname_copy.Metabolism';

    /** the column name for the Predators field */
    const PREDATORS = 'stocks_b4_igfaname_copy.Predators';

    /** the column name for the Spawning field */
    const SPAWNING = 'stocks_b4_igfaname_copy.Spawning';

    /** the column name for the Speed field */
    const SPEED = 'stocks_b4_igfaname_copy.Speed';

    /** the column name for the Diet field */
    const DIET = 'stocks_b4_igfaname_copy.Diet';

    /** the column name for the Eggs field */
    const EGGS = 'stocks_b4_igfaname_copy.Eggs';

    /** the column name for the EggDevelop field */
    const EGGDEVELOP = 'stocks_b4_igfaname_copy.EggDevelop';

    /** the column name for the Food field */
    const FOOD = 'stocks_b4_igfaname_copy.Food';

    /** the column name for the Larvae field */
    const LARVAE = 'stocks_b4_igfaname_copy.Larvae';

    /** the column name for the LarvDyn field */
    const LARVDYN = 'stocks_b4_igfaname_copy.LarvDyn';

    /** the column name for the LarvSpeed field */
    const LARVSPEED = 'stocks_b4_igfaname_copy.LarvSpeed';

    /** the column name for the PopDyn field */
    const POPDYN = 'stocks_b4_igfaname_copy.PopDyn';

    /** the column name for the LengthWeight field */
    const LENGTHWEIGHT = 'stocks_b4_igfaname_copy.LengthWeight';

    /** the column name for the Gillarea field */
    const GILLAREA = 'stocks_b4_igfaname_copy.Gillarea';

    /** the column name for the Maturity field */
    const MATURITY = 'stocks_b4_igfaname_copy.Maturity';

    /** the column name for the MatSizes field */
    const MATSIZES = 'stocks_b4_igfaname_copy.MatSizes';

    /** the column name for the Processing field */
    const PROCESSING = 'stocks_b4_igfaname_copy.Processing';

    /** the column name for the Reproduction field */
    const REPRODUCTION = 'stocks_b4_igfaname_copy.Reproduction';

    /** the column name for the Introductions field */
    const INTRODUCTIONS = 'stocks_b4_igfaname_copy.Introductions';

    /** the column name for the Abundance field */
    const ABUNDANCE = 'stocks_b4_igfaname_copy.Abundance';

    /** the column name for the Vision field */
    const VISION = 'stocks_b4_igfaname_copy.Vision';

    /** the column name for the Genetics field */
    const GENETICS = 'stocks_b4_igfaname_copy.Genetics';

    /** the column name for the Aquaculture field */
    const AQUACULTURE = 'stocks_b4_igfaname_copy.Aquaculture';

    /** the column name for the CountryComp field */
    const COUNTRYCOMP = 'stocks_b4_igfaname_copy.CountryComp';

    /** the column name for the Allele field */
    const ALLELE = 'stocks_b4_igfaname_copy.Allele';

    /** the column name for the GeneticStudies field */
    const GENETICSTUDIES = 'stocks_b4_igfaname_copy.GeneticStudies';

    /** the column name for the Ration field */
    const RATION = 'stocks_b4_igfaname_copy.Ration';

    /** the column name for the Foods field */
    const FOODS = 'stocks_b4_igfaname_copy.Foods';

    /** the column name for the Ecotoxicology field */
    const ECOTOXICOLOGY = 'stocks_b4_igfaname_copy.Ecotoxicology';

    /** the column name for the Catches field */
    const CATCHES = 'stocks_b4_igfaname_copy.Catches';

    /** the column name for the FAOAqua field */
    const FAOAQUA = 'stocks_b4_igfaname_copy.FAOAqua';

    /** the column name for the LengthRelations field */
    const LENGTHRELATIONS = 'stocks_b4_igfaname_copy.LengthRelations';

    /** the column name for the LengthFrequency field */
    const LENGTHFREQUENCY = 'stocks_b4_igfaname_copy.LengthFrequency';

    /** the column name for the Sounds field */
    const SOUNDS = 'stocks_b4_igfaname_copy.Sounds';

    /** the column name for the Broodstock field */
    const BROODSTOCK = 'stocks_b4_igfaname_copy.Broodstock';

    /** the column name for the EggNursery field */
    const EGGNURSERY = 'stocks_b4_igfaname_copy.EggNursery';

    /** the column name for the FryNursery field */
    const FRYNURSERY = 'stocks_b4_igfaname_copy.FryNursery';

    /** the column name for the LarvalNursery field */
    const LARVALNURSERY = 'stocks_b4_igfaname_copy.LarvalNursery';

    /** the column name for the Entered field */
    const ENTERED = 'stocks_b4_igfaname_copy.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'stocks_b4_igfaname_copy.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'stocks_b4_igfaname_copy.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'stocks_b4_igfaname_copy.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'stocks_b4_igfaname_copy.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'stocks_b4_igfaname_copy.DateChecked';

    /** the column name for the TS field */
    const TS = 'stocks_b4_igfaname_copy.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of StocksB4IgfanameCopy objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array StocksB4IgfanameCopy[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. StocksB4IgfanameCopyPeer::$fieldNames[StocksB4IgfanameCopyPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode', 'Stockdefs', 'Speccode', 'Level', 'Localunique', 'IucnCode', 'IucnAssessment', 'Protected', 'Stocksrefno', 'Northernmost', 'Northsouthn', 'Southermost', 'Northsouths', 'Westernmost', 'Westeastw', 'Easternmost', 'Westeaste', 'Boundingref', 'Boundingmethod', 'Tempmin', 'Tempmax', 'Tempref', 'Envtemp', 'Resilience', 'Resilienceremark', 'Phmin', 'Phmax', 'Phref', 'Dhmin', 'Dhmax', 'Dhref', 'Genbankid', 'Rfeid', 'FigisId', 'Ecotoxid', 'ScrfaData', 'GmadId', 'Saup', 'SaupId', 'SaupGroup', 'Ausmuseum', 'Fishtrace', 'IucnId', 'IucnGroup', 'BoldId', 'Essayid', 'Aquamaps', 'Morphology', 'Occurrence', 'Strains', 'Ecology', 'Diseases', 'Abnorm', 'Metabolism', 'Predators', 'Spawning', 'Speed', 'Diet', 'Eggs', 'Eggdevelop', 'Food', 'Larvae', 'Larvdyn', 'Larvspeed', 'Popdyn', 'Lengthweight', 'Gillarea', 'Maturity', 'Matsizes', 'Processing', 'Reproduction', 'Introductions', 'Abundance', 'Vision', 'Genetics', 'Aquaculture', 'Countrycomp', 'Allele', 'Geneticstudies', 'Ration', 'Foods', 'Ecotoxicology', 'Catches', 'Faoaqua', 'Lengthrelations', 'Lengthfrequency', 'Sounds', 'Broodstock', 'Eggnursery', 'Frynursery', 'Larvalnursery', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode', 'stockdefs', 'speccode', 'level', 'localunique', 'iucnCode', 'iucnAssessment', 'protected', 'stocksrefno', 'northernmost', 'northsouthn', 'southermost', 'northsouths', 'westernmost', 'westeastw', 'easternmost', 'westeaste', 'boundingref', 'boundingmethod', 'tempmin', 'tempmax', 'tempref', 'envtemp', 'resilience', 'resilienceremark', 'phmin', 'phmax', 'phref', 'dhmin', 'dhmax', 'dhref', 'genbankid', 'rfeid', 'figisId', 'ecotoxid', 'scrfaData', 'gmadId', 'saup', 'saupId', 'saupGroup', 'ausmuseum', 'fishtrace', 'iucnId', 'iucnGroup', 'boldId', 'essayid', 'aquamaps', 'morphology', 'occurrence', 'strains', 'ecology', 'diseases', 'abnorm', 'metabolism', 'predators', 'spawning', 'speed', 'diet', 'eggs', 'eggdevelop', 'food', 'larvae', 'larvdyn', 'larvspeed', 'popdyn', 'lengthweight', 'gillarea', 'maturity', 'matsizes', 'processing', 'reproduction', 'introductions', 'abundance', 'vision', 'genetics', 'aquaculture', 'countrycomp', 'allele', 'geneticstudies', 'ration', 'foods', 'ecotoxicology', 'catches', 'faoaqua', 'lengthrelations', 'lengthfrequency', 'sounds', 'broodstock', 'eggnursery', 'frynursery', 'larvalnursery', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (StocksB4IgfanameCopyPeer::STOCKCODE, StocksB4IgfanameCopyPeer::STOCKDEFS, StocksB4IgfanameCopyPeer::SPECCODE, StocksB4IgfanameCopyPeer::LEVEL, StocksB4IgfanameCopyPeer::LOCALUNIQUE, StocksB4IgfanameCopyPeer::IUCN_CODE, StocksB4IgfanameCopyPeer::IUCN_ASSESSMENT, StocksB4IgfanameCopyPeer::PROTECTEDSTOCK, StocksB4IgfanameCopyPeer::STOCKSREFNO, StocksB4IgfanameCopyPeer::NORTHERNMOST, StocksB4IgfanameCopyPeer::NORTHSOUTHN, StocksB4IgfanameCopyPeer::SOUTHERMOST, StocksB4IgfanameCopyPeer::NORTHSOUTHS, StocksB4IgfanameCopyPeer::WESTERNMOST, StocksB4IgfanameCopyPeer::WESTEASTW, StocksB4IgfanameCopyPeer::EASTERNMOST, StocksB4IgfanameCopyPeer::WESTEASTE, StocksB4IgfanameCopyPeer::BOUNDINGREF, StocksB4IgfanameCopyPeer::BOUNDINGMETHOD, StocksB4IgfanameCopyPeer::TEMPMIN, StocksB4IgfanameCopyPeer::TEMPMAX, StocksB4IgfanameCopyPeer::TEMPREF, StocksB4IgfanameCopyPeer::ENVTEMP, StocksB4IgfanameCopyPeer::RESILIENCE, StocksB4IgfanameCopyPeer::RESILIENCEREMARK, StocksB4IgfanameCopyPeer::PHMIN, StocksB4IgfanameCopyPeer::PHMAX, StocksB4IgfanameCopyPeer::PHREF, StocksB4IgfanameCopyPeer::DHMIN, StocksB4IgfanameCopyPeer::DHMAX, StocksB4IgfanameCopyPeer::DHREF, StocksB4IgfanameCopyPeer::GENBANKID, StocksB4IgfanameCopyPeer::RFEID, StocksB4IgfanameCopyPeer::FIGIS_ID, StocksB4IgfanameCopyPeer::ECOTOXID, StocksB4IgfanameCopyPeer::SCRFA_DATA, StocksB4IgfanameCopyPeer::GMAD_ID, StocksB4IgfanameCopyPeer::SAUP, StocksB4IgfanameCopyPeer::SAUP_ID, StocksB4IgfanameCopyPeer::SAUP_GROUP, StocksB4IgfanameCopyPeer::AUSMUSEUM, StocksB4IgfanameCopyPeer::FISHTRACE, StocksB4IgfanameCopyPeer::IUCN_ID, StocksB4IgfanameCopyPeer::IUCN_GROUP, StocksB4IgfanameCopyPeer::BOLD_ID, StocksB4IgfanameCopyPeer::ESSAYID, StocksB4IgfanameCopyPeer::AQUAMAPS, StocksB4IgfanameCopyPeer::MORPHOLOGY, StocksB4IgfanameCopyPeer::OCCURRENCE, StocksB4IgfanameCopyPeer::STRAINS, StocksB4IgfanameCopyPeer::ECOLOGY, StocksB4IgfanameCopyPeer::DISEASES, StocksB4IgfanameCopyPeer::ABNORM, StocksB4IgfanameCopyPeer::METABOLISM, StocksB4IgfanameCopyPeer::PREDATORS, StocksB4IgfanameCopyPeer::SPAWNING, StocksB4IgfanameCopyPeer::SPEED, StocksB4IgfanameCopyPeer::DIET, StocksB4IgfanameCopyPeer::EGGS, StocksB4IgfanameCopyPeer::EGGDEVELOP, StocksB4IgfanameCopyPeer::FOOD, StocksB4IgfanameCopyPeer::LARVAE, StocksB4IgfanameCopyPeer::LARVDYN, StocksB4IgfanameCopyPeer::LARVSPEED, StocksB4IgfanameCopyPeer::POPDYN, StocksB4IgfanameCopyPeer::LENGTHWEIGHT, StocksB4IgfanameCopyPeer::GILLAREA, StocksB4IgfanameCopyPeer::MATURITY, StocksB4IgfanameCopyPeer::MATSIZES, StocksB4IgfanameCopyPeer::PROCESSING, StocksB4IgfanameCopyPeer::REPRODUCTION, StocksB4IgfanameCopyPeer::INTRODUCTIONS, StocksB4IgfanameCopyPeer::ABUNDANCE, StocksB4IgfanameCopyPeer::VISION, StocksB4IgfanameCopyPeer::GENETICS, StocksB4IgfanameCopyPeer::AQUACULTURE, StocksB4IgfanameCopyPeer::COUNTRYCOMP, StocksB4IgfanameCopyPeer::ALLELE, StocksB4IgfanameCopyPeer::GENETICSTUDIES, StocksB4IgfanameCopyPeer::RATION, StocksB4IgfanameCopyPeer::FOODS, StocksB4IgfanameCopyPeer::ECOTOXICOLOGY, StocksB4IgfanameCopyPeer::CATCHES, StocksB4IgfanameCopyPeer::FAOAQUA, StocksB4IgfanameCopyPeer::LENGTHRELATIONS, StocksB4IgfanameCopyPeer::LENGTHFREQUENCY, StocksB4IgfanameCopyPeer::SOUNDS, StocksB4IgfanameCopyPeer::BROODSTOCK, StocksB4IgfanameCopyPeer::EGGNURSERY, StocksB4IgfanameCopyPeer::FRYNURSERY, StocksB4IgfanameCopyPeer::LARVALNURSERY, StocksB4IgfanameCopyPeer::ENTERED, StocksB4IgfanameCopyPeer::DATEENTERED, StocksB4IgfanameCopyPeer::MODIFIED, StocksB4IgfanameCopyPeer::DATEMODIFIED, StocksB4IgfanameCopyPeer::EXPERT, StocksB4IgfanameCopyPeer::DATECHECKED, StocksB4IgfanameCopyPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE', 'STOCKDEFS', 'SPECCODE', 'LEVEL', 'LOCALUNIQUE', 'IUCN_CODE', 'IUCN_ASSESSMENT', 'PROTECTEDSTOCK', 'STOCKSREFNO', 'NORTHERNMOST', 'NORTHSOUTHN', 'SOUTHERMOST', 'NORTHSOUTHS', 'WESTERNMOST', 'WESTEASTW', 'EASTERNMOST', 'WESTEASTE', 'BOUNDINGREF', 'BOUNDINGMETHOD', 'TEMPMIN', 'TEMPMAX', 'TEMPREF', 'ENVTEMP', 'RESILIENCE', 'RESILIENCEREMARK', 'PHMIN', 'PHMAX', 'PHREF', 'DHMIN', 'DHMAX', 'DHREF', 'GENBANKID', 'RFEID', 'FIGIS_ID', 'ECOTOXID', 'SCRFA_DATA', 'GMAD_ID', 'SAUP', 'SAUP_ID', 'SAUP_GROUP', 'AUSMUSEUM', 'FISHTRACE', 'IUCN_ID', 'IUCN_GROUP', 'BOLD_ID', 'ESSAYID', 'AQUAMAPS', 'MORPHOLOGY', 'OCCURRENCE', 'STRAINS', 'ECOLOGY', 'DISEASES', 'ABNORM', 'METABOLISM', 'PREDATORS', 'SPAWNING', 'SPEED', 'DIET', 'EGGS', 'EGGDEVELOP', 'FOOD', 'LARVAE', 'LARVDYN', 'LARVSPEED', 'POPDYN', 'LENGTHWEIGHT', 'GILLAREA', 'MATURITY', 'MATSIZES', 'PROCESSING', 'REPRODUCTION', 'INTRODUCTIONS', 'ABUNDANCE', 'VISION', 'GENETICS', 'AQUACULTURE', 'COUNTRYCOMP', 'ALLELE', 'GENETICSTUDIES', 'RATION', 'FOODS', 'ECOTOXICOLOGY', 'CATCHES', 'FAOAQUA', 'LENGTHRELATIONS', 'LENGTHFREQUENCY', 'SOUNDS', 'BROODSTOCK', 'EGGNURSERY', 'FRYNURSERY', 'LARVALNURSERY', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode', 'StockDefs', 'SpecCode', 'Level', 'LocalUnique', 'IUCN_Code', 'IUCN_Assessment', 'Protected', 'StocksRefNo', 'Northernmost', 'NorthSouthN', 'Southermost', 'NorthSouthS', 'Westernmost', 'WestEastW', 'Easternmost', 'WestEastE', 'BoundingRef', 'BoundingMethod', 'TempMin', 'TempMax', 'TempRef', 'EnvTemp', 'Resilience', 'ResilienceRemark', 'pHMin', 'pHMax', 'pHRef', 'dHMin', 'dHMax', 'dHRef', 'GenBankID', 'RfeID', 'FIGIS_ID', 'EcotoxID', 'SCRFA_data', 'GMAD_ID', 'SAUP', 'SAUP_ID', 'SAUP_Group', 'AusMuseum', 'FishTrace', 'IUCN_ID', 'IUCN_Group', 'BOLD_ID', 'EssayID', 'Aquamaps', 'Morphology', 'Occurrence', 'Strains', 'Ecology', 'Diseases', 'Abnorm', 'Metabolism', 'Predators', 'Spawning', 'Speed', 'Diet', 'Eggs', 'EggDevelop', 'Food', 'Larvae', 'LarvDyn', 'LarvSpeed', 'PopDyn', 'LengthWeight', 'Gillarea', 'Maturity', 'MatSizes', 'Processing', 'Reproduction', 'Introductions', 'Abundance', 'Vision', 'Genetics', 'Aquaculture', 'CountryComp', 'Allele', 'GeneticStudies', 'Ration', 'Foods', 'Ecotoxicology', 'Catches', 'FAOAqua', 'LengthRelations', 'LengthFrequency', 'Sounds', 'Broodstock', 'EggNursery', 'FryNursery', 'LarvalNursery', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. StocksB4IgfanameCopyPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode' => 0, 'Stockdefs' => 1, 'Speccode' => 2, 'Level' => 3, 'Localunique' => 4, 'IucnCode' => 5, 'IucnAssessment' => 6, 'Protected' => 7, 'Stocksrefno' => 8, 'Northernmost' => 9, 'Northsouthn' => 10, 'Southermost' => 11, 'Northsouths' => 12, 'Westernmost' => 13, 'Westeastw' => 14, 'Easternmost' => 15, 'Westeaste' => 16, 'Boundingref' => 17, 'Boundingmethod' => 18, 'Tempmin' => 19, 'Tempmax' => 20, 'Tempref' => 21, 'Envtemp' => 22, 'Resilience' => 23, 'Resilienceremark' => 24, 'Phmin' => 25, 'Phmax' => 26, 'Phref' => 27, 'Dhmin' => 28, 'Dhmax' => 29, 'Dhref' => 30, 'Genbankid' => 31, 'Rfeid' => 32, 'FigisId' => 33, 'Ecotoxid' => 34, 'ScrfaData' => 35, 'GmadId' => 36, 'Saup' => 37, 'SaupId' => 38, 'SaupGroup' => 39, 'Ausmuseum' => 40, 'Fishtrace' => 41, 'IucnId' => 42, 'IucnGroup' => 43, 'BoldId' => 44, 'Essayid' => 45, 'Aquamaps' => 46, 'Morphology' => 47, 'Occurrence' => 48, 'Strains' => 49, 'Ecology' => 50, 'Diseases' => 51, 'Abnorm' => 52, 'Metabolism' => 53, 'Predators' => 54, 'Spawning' => 55, 'Speed' => 56, 'Diet' => 57, 'Eggs' => 58, 'Eggdevelop' => 59, 'Food' => 60, 'Larvae' => 61, 'Larvdyn' => 62, 'Larvspeed' => 63, 'Popdyn' => 64, 'Lengthweight' => 65, 'Gillarea' => 66, 'Maturity' => 67, 'Matsizes' => 68, 'Processing' => 69, 'Reproduction' => 70, 'Introductions' => 71, 'Abundance' => 72, 'Vision' => 73, 'Genetics' => 74, 'Aquaculture' => 75, 'Countrycomp' => 76, 'Allele' => 77, 'Geneticstudies' => 78, 'Ration' => 79, 'Foods' => 80, 'Ecotoxicology' => 81, 'Catches' => 82, 'Faoaqua' => 83, 'Lengthrelations' => 84, 'Lengthfrequency' => 85, 'Sounds' => 86, 'Broodstock' => 87, 'Eggnursery' => 88, 'Frynursery' => 89, 'Larvalnursery' => 90, 'Entered' => 91, 'Dateentered' => 92, 'Modified' => 93, 'Datemodified' => 94, 'Expert' => 95, 'Datechecked' => 96, 'Ts' => 97, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode' => 0, 'stockdefs' => 1, 'speccode' => 2, 'level' => 3, 'localunique' => 4, 'iucnCode' => 5, 'iucnAssessment' => 6, 'protected' => 7, 'stocksrefno' => 8, 'northernmost' => 9, 'northsouthn' => 10, 'southermost' => 11, 'northsouths' => 12, 'westernmost' => 13, 'westeastw' => 14, 'easternmost' => 15, 'westeaste' => 16, 'boundingref' => 17, 'boundingmethod' => 18, 'tempmin' => 19, 'tempmax' => 20, 'tempref' => 21, 'envtemp' => 22, 'resilience' => 23, 'resilienceremark' => 24, 'phmin' => 25, 'phmax' => 26, 'phref' => 27, 'dhmin' => 28, 'dhmax' => 29, 'dhref' => 30, 'genbankid' => 31, 'rfeid' => 32, 'figisId' => 33, 'ecotoxid' => 34, 'scrfaData' => 35, 'gmadId' => 36, 'saup' => 37, 'saupId' => 38, 'saupGroup' => 39, 'ausmuseum' => 40, 'fishtrace' => 41, 'iucnId' => 42, 'iucnGroup' => 43, 'boldId' => 44, 'essayid' => 45, 'aquamaps' => 46, 'morphology' => 47, 'occurrence' => 48, 'strains' => 49, 'ecology' => 50, 'diseases' => 51, 'abnorm' => 52, 'metabolism' => 53, 'predators' => 54, 'spawning' => 55, 'speed' => 56, 'diet' => 57, 'eggs' => 58, 'eggdevelop' => 59, 'food' => 60, 'larvae' => 61, 'larvdyn' => 62, 'larvspeed' => 63, 'popdyn' => 64, 'lengthweight' => 65, 'gillarea' => 66, 'maturity' => 67, 'matsizes' => 68, 'processing' => 69, 'reproduction' => 70, 'introductions' => 71, 'abundance' => 72, 'vision' => 73, 'genetics' => 74, 'aquaculture' => 75, 'countrycomp' => 76, 'allele' => 77, 'geneticstudies' => 78, 'ration' => 79, 'foods' => 80, 'ecotoxicology' => 81, 'catches' => 82, 'faoaqua' => 83, 'lengthrelations' => 84, 'lengthfrequency' => 85, 'sounds' => 86, 'broodstock' => 87, 'eggnursery' => 88, 'frynursery' => 89, 'larvalnursery' => 90, 'entered' => 91, 'dateentered' => 92, 'modified' => 93, 'datemodified' => 94, 'expert' => 95, 'datechecked' => 96, 'ts' => 97, ),
        BasePeer::TYPE_COLNAME => array (StocksB4IgfanameCopyPeer::STOCKCODE => 0, StocksB4IgfanameCopyPeer::STOCKDEFS => 1, StocksB4IgfanameCopyPeer::SPECCODE => 2, StocksB4IgfanameCopyPeer::LEVEL => 3, StocksB4IgfanameCopyPeer::LOCALUNIQUE => 4, StocksB4IgfanameCopyPeer::IUCN_CODE => 5, StocksB4IgfanameCopyPeer::IUCN_ASSESSMENT => 6, StocksB4IgfanameCopyPeer::PROTECTEDSTOCK => 7, StocksB4IgfanameCopyPeer::STOCKSREFNO => 8, StocksB4IgfanameCopyPeer::NORTHERNMOST => 9, StocksB4IgfanameCopyPeer::NORTHSOUTHN => 10, StocksB4IgfanameCopyPeer::SOUTHERMOST => 11, StocksB4IgfanameCopyPeer::NORTHSOUTHS => 12, StocksB4IgfanameCopyPeer::WESTERNMOST => 13, StocksB4IgfanameCopyPeer::WESTEASTW => 14, StocksB4IgfanameCopyPeer::EASTERNMOST => 15, StocksB4IgfanameCopyPeer::WESTEASTE => 16, StocksB4IgfanameCopyPeer::BOUNDINGREF => 17, StocksB4IgfanameCopyPeer::BOUNDINGMETHOD => 18, StocksB4IgfanameCopyPeer::TEMPMIN => 19, StocksB4IgfanameCopyPeer::TEMPMAX => 20, StocksB4IgfanameCopyPeer::TEMPREF => 21, StocksB4IgfanameCopyPeer::ENVTEMP => 22, StocksB4IgfanameCopyPeer::RESILIENCE => 23, StocksB4IgfanameCopyPeer::RESILIENCEREMARK => 24, StocksB4IgfanameCopyPeer::PHMIN => 25, StocksB4IgfanameCopyPeer::PHMAX => 26, StocksB4IgfanameCopyPeer::PHREF => 27, StocksB4IgfanameCopyPeer::DHMIN => 28, StocksB4IgfanameCopyPeer::DHMAX => 29, StocksB4IgfanameCopyPeer::DHREF => 30, StocksB4IgfanameCopyPeer::GENBANKID => 31, StocksB4IgfanameCopyPeer::RFEID => 32, StocksB4IgfanameCopyPeer::FIGIS_ID => 33, StocksB4IgfanameCopyPeer::ECOTOXID => 34, StocksB4IgfanameCopyPeer::SCRFA_DATA => 35, StocksB4IgfanameCopyPeer::GMAD_ID => 36, StocksB4IgfanameCopyPeer::SAUP => 37, StocksB4IgfanameCopyPeer::SAUP_ID => 38, StocksB4IgfanameCopyPeer::SAUP_GROUP => 39, StocksB4IgfanameCopyPeer::AUSMUSEUM => 40, StocksB4IgfanameCopyPeer::FISHTRACE => 41, StocksB4IgfanameCopyPeer::IUCN_ID => 42, StocksB4IgfanameCopyPeer::IUCN_GROUP => 43, StocksB4IgfanameCopyPeer::BOLD_ID => 44, StocksB4IgfanameCopyPeer::ESSAYID => 45, StocksB4IgfanameCopyPeer::AQUAMAPS => 46, StocksB4IgfanameCopyPeer::MORPHOLOGY => 47, StocksB4IgfanameCopyPeer::OCCURRENCE => 48, StocksB4IgfanameCopyPeer::STRAINS => 49, StocksB4IgfanameCopyPeer::ECOLOGY => 50, StocksB4IgfanameCopyPeer::DISEASES => 51, StocksB4IgfanameCopyPeer::ABNORM => 52, StocksB4IgfanameCopyPeer::METABOLISM => 53, StocksB4IgfanameCopyPeer::PREDATORS => 54, StocksB4IgfanameCopyPeer::SPAWNING => 55, StocksB4IgfanameCopyPeer::SPEED => 56, StocksB4IgfanameCopyPeer::DIET => 57, StocksB4IgfanameCopyPeer::EGGS => 58, StocksB4IgfanameCopyPeer::EGGDEVELOP => 59, StocksB4IgfanameCopyPeer::FOOD => 60, StocksB4IgfanameCopyPeer::LARVAE => 61, StocksB4IgfanameCopyPeer::LARVDYN => 62, StocksB4IgfanameCopyPeer::LARVSPEED => 63, StocksB4IgfanameCopyPeer::POPDYN => 64, StocksB4IgfanameCopyPeer::LENGTHWEIGHT => 65, StocksB4IgfanameCopyPeer::GILLAREA => 66, StocksB4IgfanameCopyPeer::MATURITY => 67, StocksB4IgfanameCopyPeer::MATSIZES => 68, StocksB4IgfanameCopyPeer::PROCESSING => 69, StocksB4IgfanameCopyPeer::REPRODUCTION => 70, StocksB4IgfanameCopyPeer::INTRODUCTIONS => 71, StocksB4IgfanameCopyPeer::ABUNDANCE => 72, StocksB4IgfanameCopyPeer::VISION => 73, StocksB4IgfanameCopyPeer::GENETICS => 74, StocksB4IgfanameCopyPeer::AQUACULTURE => 75, StocksB4IgfanameCopyPeer::COUNTRYCOMP => 76, StocksB4IgfanameCopyPeer::ALLELE => 77, StocksB4IgfanameCopyPeer::GENETICSTUDIES => 78, StocksB4IgfanameCopyPeer::RATION => 79, StocksB4IgfanameCopyPeer::FOODS => 80, StocksB4IgfanameCopyPeer::ECOTOXICOLOGY => 81, StocksB4IgfanameCopyPeer::CATCHES => 82, StocksB4IgfanameCopyPeer::FAOAQUA => 83, StocksB4IgfanameCopyPeer::LENGTHRELATIONS => 84, StocksB4IgfanameCopyPeer::LENGTHFREQUENCY => 85, StocksB4IgfanameCopyPeer::SOUNDS => 86, StocksB4IgfanameCopyPeer::BROODSTOCK => 87, StocksB4IgfanameCopyPeer::EGGNURSERY => 88, StocksB4IgfanameCopyPeer::FRYNURSERY => 89, StocksB4IgfanameCopyPeer::LARVALNURSERY => 90, StocksB4IgfanameCopyPeer::ENTERED => 91, StocksB4IgfanameCopyPeer::DATEENTERED => 92, StocksB4IgfanameCopyPeer::MODIFIED => 93, StocksB4IgfanameCopyPeer::DATEMODIFIED => 94, StocksB4IgfanameCopyPeer::EXPERT => 95, StocksB4IgfanameCopyPeer::DATECHECKED => 96, StocksB4IgfanameCopyPeer::TS => 97, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE' => 0, 'STOCKDEFS' => 1, 'SPECCODE' => 2, 'LEVEL' => 3, 'LOCALUNIQUE' => 4, 'IUCN_CODE' => 5, 'IUCN_ASSESSMENT' => 6, 'PROTECTEDSTOCK' => 7, 'STOCKSREFNO' => 8, 'NORTHERNMOST' => 9, 'NORTHSOUTHN' => 10, 'SOUTHERMOST' => 11, 'NORTHSOUTHS' => 12, 'WESTERNMOST' => 13, 'WESTEASTW' => 14, 'EASTERNMOST' => 15, 'WESTEASTE' => 16, 'BOUNDINGREF' => 17, 'BOUNDINGMETHOD' => 18, 'TEMPMIN' => 19, 'TEMPMAX' => 20, 'TEMPREF' => 21, 'ENVTEMP' => 22, 'RESILIENCE' => 23, 'RESILIENCEREMARK' => 24, 'PHMIN' => 25, 'PHMAX' => 26, 'PHREF' => 27, 'DHMIN' => 28, 'DHMAX' => 29, 'DHREF' => 30, 'GENBANKID' => 31, 'RFEID' => 32, 'FIGIS_ID' => 33, 'ECOTOXID' => 34, 'SCRFA_DATA' => 35, 'GMAD_ID' => 36, 'SAUP' => 37, 'SAUP_ID' => 38, 'SAUP_GROUP' => 39, 'AUSMUSEUM' => 40, 'FISHTRACE' => 41, 'IUCN_ID' => 42, 'IUCN_GROUP' => 43, 'BOLD_ID' => 44, 'ESSAYID' => 45, 'AQUAMAPS' => 46, 'MORPHOLOGY' => 47, 'OCCURRENCE' => 48, 'STRAINS' => 49, 'ECOLOGY' => 50, 'DISEASES' => 51, 'ABNORM' => 52, 'METABOLISM' => 53, 'PREDATORS' => 54, 'SPAWNING' => 55, 'SPEED' => 56, 'DIET' => 57, 'EGGS' => 58, 'EGGDEVELOP' => 59, 'FOOD' => 60, 'LARVAE' => 61, 'LARVDYN' => 62, 'LARVSPEED' => 63, 'POPDYN' => 64, 'LENGTHWEIGHT' => 65, 'GILLAREA' => 66, 'MATURITY' => 67, 'MATSIZES' => 68, 'PROCESSING' => 69, 'REPRODUCTION' => 70, 'INTRODUCTIONS' => 71, 'ABUNDANCE' => 72, 'VISION' => 73, 'GENETICS' => 74, 'AQUACULTURE' => 75, 'COUNTRYCOMP' => 76, 'ALLELE' => 77, 'GENETICSTUDIES' => 78, 'RATION' => 79, 'FOODS' => 80, 'ECOTOXICOLOGY' => 81, 'CATCHES' => 82, 'FAOAQUA' => 83, 'LENGTHRELATIONS' => 84, 'LENGTHFREQUENCY' => 85, 'SOUNDS' => 86, 'BROODSTOCK' => 87, 'EGGNURSERY' => 88, 'FRYNURSERY' => 89, 'LARVALNURSERY' => 90, 'ENTERED' => 91, 'DATEENTERED' => 92, 'MODIFIED' => 93, 'DATEMODIFIED' => 94, 'EXPERT' => 95, 'DATECHECKED' => 96, 'TS' => 97, ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode' => 0, 'StockDefs' => 1, 'SpecCode' => 2, 'Level' => 3, 'LocalUnique' => 4, 'IUCN_Code' => 5, 'IUCN_Assessment' => 6, 'Protected' => 7, 'StocksRefNo' => 8, 'Northernmost' => 9, 'NorthSouthN' => 10, 'Southermost' => 11, 'NorthSouthS' => 12, 'Westernmost' => 13, 'WestEastW' => 14, 'Easternmost' => 15, 'WestEastE' => 16, 'BoundingRef' => 17, 'BoundingMethod' => 18, 'TempMin' => 19, 'TempMax' => 20, 'TempRef' => 21, 'EnvTemp' => 22, 'Resilience' => 23, 'ResilienceRemark' => 24, 'pHMin' => 25, 'pHMax' => 26, 'pHRef' => 27, 'dHMin' => 28, 'dHMax' => 29, 'dHRef' => 30, 'GenBankID' => 31, 'RfeID' => 32, 'FIGIS_ID' => 33, 'EcotoxID' => 34, 'SCRFA_data' => 35, 'GMAD_ID' => 36, 'SAUP' => 37, 'SAUP_ID' => 38, 'SAUP_Group' => 39, 'AusMuseum' => 40, 'FishTrace' => 41, 'IUCN_ID' => 42, 'IUCN_Group' => 43, 'BOLD_ID' => 44, 'EssayID' => 45, 'Aquamaps' => 46, 'Morphology' => 47, 'Occurrence' => 48, 'Strains' => 49, 'Ecology' => 50, 'Diseases' => 51, 'Abnorm' => 52, 'Metabolism' => 53, 'Predators' => 54, 'Spawning' => 55, 'Speed' => 56, 'Diet' => 57, 'Eggs' => 58, 'EggDevelop' => 59, 'Food' => 60, 'Larvae' => 61, 'LarvDyn' => 62, 'LarvSpeed' => 63, 'PopDyn' => 64, 'LengthWeight' => 65, 'Gillarea' => 66, 'Maturity' => 67, 'MatSizes' => 68, 'Processing' => 69, 'Reproduction' => 70, 'Introductions' => 71, 'Abundance' => 72, 'Vision' => 73, 'Genetics' => 74, 'Aquaculture' => 75, 'CountryComp' => 76, 'Allele' => 77, 'GeneticStudies' => 78, 'Ration' => 79, 'Foods' => 80, 'Ecotoxicology' => 81, 'Catches' => 82, 'FAOAqua' => 83, 'LengthRelations' => 84, 'LengthFrequency' => 85, 'Sounds' => 86, 'Broodstock' => 87, 'EggNursery' => 88, 'FryNursery' => 89, 'LarvalNursery' => 90, 'Entered' => 91, 'DateEntered' => 92, 'Modified' => 93, 'DateModified' => 94, 'Expert' => 95, 'DateChecked' => 96, 'TS' => 97, ),
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
        $toNames = StocksB4IgfanameCopyPeer::getFieldNames($toType);
        $key = isset(StocksB4IgfanameCopyPeer::$fieldKeys[$fromType][$name]) ? StocksB4IgfanameCopyPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(StocksB4IgfanameCopyPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, StocksB4IgfanameCopyPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return StocksB4IgfanameCopyPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. StocksB4IgfanameCopyPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(StocksB4IgfanameCopyPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::STOCKCODE);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::STOCKDEFS);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::SPECCODE);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::LEVEL);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::LOCALUNIQUE);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::IUCN_CODE);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::IUCN_ASSESSMENT);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::PROTECTEDSTOCK);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::STOCKSREFNO);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::NORTHERNMOST);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::NORTHSOUTHN);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::SOUTHERMOST);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::NORTHSOUTHS);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::WESTERNMOST);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::WESTEASTW);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::EASTERNMOST);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::WESTEASTE);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::BOUNDINGREF);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::BOUNDINGMETHOD);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::TEMPMIN);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::TEMPMAX);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::TEMPREF);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::ENVTEMP);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::RESILIENCE);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::RESILIENCEREMARK);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::PHMIN);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::PHMAX);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::PHREF);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::DHMIN);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::DHMAX);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::DHREF);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::GENBANKID);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::RFEID);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::FIGIS_ID);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::ECOTOXID);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::SCRFA_DATA);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::GMAD_ID);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::SAUP);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::SAUP_ID);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::SAUP_GROUP);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::AUSMUSEUM);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::FISHTRACE);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::IUCN_ID);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::IUCN_GROUP);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::BOLD_ID);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::ESSAYID);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::AQUAMAPS);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::MORPHOLOGY);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::OCCURRENCE);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::STRAINS);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::ECOLOGY);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::DISEASES);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::ABNORM);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::METABOLISM);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::PREDATORS);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::SPAWNING);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::SPEED);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::DIET);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::EGGS);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::EGGDEVELOP);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::FOOD);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::LARVAE);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::LARVDYN);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::LARVSPEED);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::POPDYN);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::LENGTHWEIGHT);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::GILLAREA);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::MATURITY);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::MATSIZES);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::PROCESSING);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::REPRODUCTION);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::INTRODUCTIONS);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::ABUNDANCE);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::VISION);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::GENETICS);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::AQUACULTURE);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::COUNTRYCOMP);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::ALLELE);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::GENETICSTUDIES);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::RATION);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::FOODS);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::ECOTOXICOLOGY);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::CATCHES);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::FAOAQUA);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::LENGTHRELATIONS);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::LENGTHFREQUENCY);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::SOUNDS);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::BROODSTOCK);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::EGGNURSERY);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::FRYNURSERY);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::LARVALNURSERY);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::ENTERED);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::DATEENTERED);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::MODIFIED);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::DATEMODIFIED);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::EXPERT);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::DATECHECKED);
            $criteria->addSelectColumn(StocksB4IgfanameCopyPeer::TS);
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
        $criteria->setPrimaryTableName(StocksB4IgfanameCopyPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            StocksB4IgfanameCopyPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(StocksB4IgfanameCopyPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(StocksB4IgfanameCopyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return StocksB4IgfanameCopy
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = StocksB4IgfanameCopyPeer::doSelect($critcopy, $con);
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
        return StocksB4IgfanameCopyPeer::populateObjects(StocksB4IgfanameCopyPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(StocksB4IgfanameCopyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            StocksB4IgfanameCopyPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(StocksB4IgfanameCopyPeer::DATABASE_NAME);

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
     * @param StocksB4IgfanameCopy $obj A StocksB4IgfanameCopy object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getSpeccode(), (string) $obj->getLevel(), (string) $obj->getLocalunique()));
            } // if key === null
            StocksB4IgfanameCopyPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A StocksB4IgfanameCopy object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof StocksB4IgfanameCopy) {
                $key = serialize(array((string) $value->getSpeccode(), (string) $value->getLevel(), (string) $value->getLocalunique()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or StocksB4IgfanameCopy object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(StocksB4IgfanameCopyPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return StocksB4IgfanameCopy Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(StocksB4IgfanameCopyPeer::$instances[$key])) {
                return StocksB4IgfanameCopyPeer::$instances[$key];
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
        foreach (StocksB4IgfanameCopyPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        StocksB4IgfanameCopyPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to stocks_b4_igfaname_copy
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
        $cls = StocksB4IgfanameCopyPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = StocksB4IgfanameCopyPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = StocksB4IgfanameCopyPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                StocksB4IgfanameCopyPeer::addInstanceToPool($obj, $key);
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
     * @return array (StocksB4IgfanameCopy object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = StocksB4IgfanameCopyPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = StocksB4IgfanameCopyPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + StocksB4IgfanameCopyPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = StocksB4IgfanameCopyPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            StocksB4IgfanameCopyPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(StocksB4IgfanameCopyPeer::DATABASE_NAME)->getTable(StocksB4IgfanameCopyPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseStocksB4IgfanameCopyPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseStocksB4IgfanameCopyPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \StocksB4IgfanameCopyTableMap());
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
        return StocksB4IgfanameCopyPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a StocksB4IgfanameCopy or Criteria object.
     *
     * @param      mixed $values Criteria or StocksB4IgfanameCopy object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StocksB4IgfanameCopyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from StocksB4IgfanameCopy object
        }


        // Set the correct dbName
        $criteria->setDbName(StocksB4IgfanameCopyPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a StocksB4IgfanameCopy or Criteria object.
     *
     * @param      mixed $values Criteria or StocksB4IgfanameCopy object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StocksB4IgfanameCopyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(StocksB4IgfanameCopyPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(StocksB4IgfanameCopyPeer::SPECCODE);
            $value = $criteria->remove(StocksB4IgfanameCopyPeer::SPECCODE);
            if ($value) {
                $selectCriteria->add(StocksB4IgfanameCopyPeer::SPECCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(StocksB4IgfanameCopyPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(StocksB4IgfanameCopyPeer::LEVEL);
            $value = $criteria->remove(StocksB4IgfanameCopyPeer::LEVEL);
            if ($value) {
                $selectCriteria->add(StocksB4IgfanameCopyPeer::LEVEL, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(StocksB4IgfanameCopyPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(StocksB4IgfanameCopyPeer::LOCALUNIQUE);
            $value = $criteria->remove(StocksB4IgfanameCopyPeer::LOCALUNIQUE);
            if ($value) {
                $selectCriteria->add(StocksB4IgfanameCopyPeer::LOCALUNIQUE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(StocksB4IgfanameCopyPeer::TABLE_NAME);
            }

        } else { // $values is StocksB4IgfanameCopy object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(StocksB4IgfanameCopyPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the stocks_b4_igfaname_copy table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StocksB4IgfanameCopyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(StocksB4IgfanameCopyPeer::TABLE_NAME, $con, StocksB4IgfanameCopyPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            StocksB4IgfanameCopyPeer::clearInstancePool();
            StocksB4IgfanameCopyPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a StocksB4IgfanameCopy or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or StocksB4IgfanameCopy object or primary key or array of primary keys
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
            $con = Propel::getConnection(StocksB4IgfanameCopyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            StocksB4IgfanameCopyPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof StocksB4IgfanameCopy) { // it's a model object
            // invalidate the cache for this single object
            StocksB4IgfanameCopyPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(StocksB4IgfanameCopyPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(StocksB4IgfanameCopyPeer::SPECCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(StocksB4IgfanameCopyPeer::LEVEL, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(StocksB4IgfanameCopyPeer::LOCALUNIQUE, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                StocksB4IgfanameCopyPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(StocksB4IgfanameCopyPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            StocksB4IgfanameCopyPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given StocksB4IgfanameCopy object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param StocksB4IgfanameCopy $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(StocksB4IgfanameCopyPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(StocksB4IgfanameCopyPeer::TABLE_NAME);

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

        return BasePeer::doValidate(StocksB4IgfanameCopyPeer::DATABASE_NAME, StocksB4IgfanameCopyPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $speccode
     * @param   string $level
     * @param   string $localunique
     * @param      PropelPDO $con
     * @return StocksB4IgfanameCopy
     */
    public static function retrieveByPK($speccode, $level, $localunique, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $speccode, (string) $level, (string) $localunique));
         if (null !== ($obj = StocksB4IgfanameCopyPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(StocksB4IgfanameCopyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(StocksB4IgfanameCopyPeer::DATABASE_NAME);
        $criteria->add(StocksB4IgfanameCopyPeer::SPECCODE, $speccode);
        $criteria->add(StocksB4IgfanameCopyPeer::LEVEL, $level);
        $criteria->add(StocksB4IgfanameCopyPeer::LOCALUNIQUE, $localunique);
        $v = StocksB4IgfanameCopyPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseStocksB4IgfanameCopyPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseStocksB4IgfanameCopyPeer::buildTableMap();

