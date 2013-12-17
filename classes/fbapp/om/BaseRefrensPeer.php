<?php


/**
 * Base static class for performing query and update operations on the 'refrens' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseRefrensPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'refrens';

    /** the related Propel class for this table */
    const OM_CLASS = 'Refrens';

    /** the related TableMap class for this table */
    const TM_CLASS = 'RefrensTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 99;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 99;

    /** the column name for the autoctr field */
    const AUTOCTR = 'refrens.autoctr';

    /** the column name for the RefNo field */
    const REFNO = 'refrens.RefNo';

    /** the column name for the RMSNo field */
    const RMSNO = 'refrens.RMSNo';

    /** the column name for the Author field */
    const AUTHOR = 'refrens.Author';

    /** the column name for the Year field */
    const YEAR = 'refrens.Year';

    /** the column name for the Title field */
    const TITLE = 'refrens.Title';

    /** the column name for the Source field */
    const SOURCE = 'refrens.Source';

    /** the column name for the SourceUnique field */
    const SOURCEUNIQUE = 'refrens.SourceUnique';

    /** the column name for the FirstAuthor field */
    const FIRSTAUTHOR = 'refrens.FirstAuthor';

    /** the column name for the Language field */
    const LANGUAGE = 'refrens.Language';

    /** the column name for the Complete field */
    const COMPLETE = 'refrens.Complete';

    /** the column name for the RefType field */
    const REFTYPE = 'refrens.RefType';

    /** the column name for the Keywords field */
    const KEYWORDS = 'refrens.Keywords';

    /** the column name for the Remarks field */
    const REMARKS = 'refrens.Remarks';

    /** the column name for the CrossRef1 field */
    const CROSSREF1 = 'refrens.CrossRef1';

    /** the column name for the CrossRef2 field */
    const CROSSREF2 = 'refrens.CrossRef2';

    /** the column name for the CrossRef3 field */
    const CROSSREF3 = 'refrens.CrossRef3';

    /** the column name for the CrossRef4 field */
    const CROSSREF4 = 'refrens.CrossRef4';

    /** the column name for the CrossRef5 field */
    const CROSSREF5 = 'refrens.CrossRef5';

    /** the column name for the CAS_REF_NO field */
    const CAS_REF_NO = 'refrens.CAS_REF_NO';

    /** the column name for the Ecology field */
    const ECOLOGY = 'refrens.Ecology';

    /** the column name for the Ecotoxicology field */
    const ECOTOXICOLOGY = 'refrens.Ecotoxicology';

    /** the column name for the PopDynamics field */
    const POPDYNAMICS = 'refrens.PopDynamics';

    /** the column name for the Aquaculture field */
    const AQUACULTURE = 'refrens.Aquaculture';

    /** the column name for the Brains field */
    const BRAINS = 'refrens.Brains';

    /** the column name for the Reproduction field */
    const REPRODUCTION = 'refrens.Reproduction';

    /** the column name for the Migration field */
    const MIGRATION = 'refrens.Migration';

    /** the column name for the Growth field */
    const GROWTH = 'refrens.Growth';

    /** the column name for the Recruitment field */
    const RECRUITMENT = 'refrens.Recruitment';

    /** the column name for the Vision field */
    const VISION = 'refrens.Vision';

    /** the column name for the Ciguatera field */
    const CIGUATERA = 'refrens.Ciguatera';

    /** the column name for the FryNursery field */
    const FRYNURSERY = 'refrens.FryNursery';

    /** the column name for the Maturity field */
    const MATURITY = 'refrens.Maturity';

    /** the column name for the Distribution field */
    const DISTRIBUTION = 'refrens.Distribution';

    /** the column name for the Mortality field */
    const MORTALITY = 'refrens.Mortality';

    /** the column name for the FarmingSystem field */
    const FARMINGSYSTEM = 'refrens.FarmingSystem';

    /** the column name for the Eggs field */
    const EGGS = 'refrens.Eggs';

    /** the column name for the Habitats field */
    const HABITATS = 'refrens.Habitats';

    /** the column name for the LengthWeight field */
    const LENGTHWEIGHT = 'refrens.LengthWeight';

    /** the column name for the LengthFreq field */
    const LENGTHFREQ = 'refrens.LengthFreq';

    /** the column name for the Strains field */
    const STRAINS = 'refrens.Strains';

    /** the column name for the Larvae field */
    const LARVAE = 'refrens.Larvae';

    /** the column name for the Environment field */
    const ENVIRONMENT = 'refrens.Environment';

    /** the column name for the Stocks field */
    const STOCKS = 'refrens.Stocks';

    /** the column name for the Genetics field */
    const GENETICS = 'refrens.Genetics';

    /** the column name for the Spawning field */
    const SPAWNING = 'refrens.Spawning';

    /** the column name for the Abundance field */
    const ABUNDANCE = 'refrens.Abundance';

    /** the column name for the Catches field */
    const CATCHES = 'refrens.Catches';

    /** the column name for the Electrophoresis field */
    const ELECTROPHORESIS = 'refrens.Electrophoresis';

    /** the column name for the SexRatio field */
    const SEXRATIO = 'refrens.SexRatio';

    /** the column name for the Activity field */
    const ACTIVITY = 'refrens.Activity';

    /** the column name for the Effort field */
    const EFFORT = 'refrens.Effort';

    /** the column name for the Diseases field */
    const DISEASES = 'refrens.Diseases';

    /** the column name for the Predators field */
    const PREDATORS = 'refrens.Predators';

    /** the column name for the Behavior field */
    const BEHAVIOR = 'refrens.Behavior';

    /** the column name for the Management field */
    const MANAGEMENT = 'refrens.Management';

    /** the column name for the Introduction field */
    const INTRODUCTION = 'refrens.Introduction';

    /** the column name for the Competitors field */
    const COMPETITORS = 'refrens.Competitors';

    /** the column name for the Food field */
    const FOOD = 'refrens.Food';

    /** the column name for the Nomenclature field */
    const NOMENCLATURE = 'refrens.Nomenclature';

    /** the column name for the Revision field */
    const REVISION = 'refrens.Revision';

    /** the column name for the Physiology field */
    const PHYSIOLOGY = 'refrens.Physiology';

    /** the column name for the Morphology field */
    const MORPHOLOGY = 'refrens.Morphology';

    /** the column name for the Otolith field */
    const OTOLITH = 'refrens.Otolith';

    /** the column name for the FoodConsum field */
    const FOODCONSUM = 'refrens.FoodConsum';

    /** the column name for the OrigDescr field */
    const ORIGDESCR = 'refrens.OrigDescr';

    /** the column name for the Oxygen field */
    const OXYGEN = 'refrens.Oxygen';

    /** the column name for the MaxLength field */
    const MAXLENGTH = 'refrens.MaxLength';

    /** the column name for the Diet field */
    const DIET = 'refrens.Diet';

    /** the column name for the RawData field */
    const RAWDATA = 'refrens.RawData';

    /** the column name for the Speeds field */
    const SPEEDS = 'refrens.Speeds';

    /** the column name for the MaxWeight field */
    const MAXWEIGHT = 'refrens.MaxWeight';

    /** the column name for the Longevity field */
    const LONGEVITY = 'refrens.Longevity';

    /** the column name for the Keys field */
    const KEYS = 'refrens.Keys';

    /** the column name for the Broodstock field */
    const BROODSTOCK = 'refrens.Broodstock';

    /** the column name for the EggNursery field */
    const EGGNURSERY = 'refrens.EggNursery';

    /** the column name for the LarvalNursery field */
    const LARVALNURSERY = 'refrens.LarvalNursery';

    /** the column name for the Citation field */
    const CITATION = 'refrens.Citation';

    /** the column name for the Team field */
    const TEAM = 'refrens.Team';

    /** the column name for the Aquarium field */
    const AQUARIUM = 'refrens.Aquarium';

    /** the column name for the Processing field */
    const PROCESSING = 'refrens.Processing';

    /** the column name for the Comname field */
    const COMNAME = 'refrens.Comname';

    /** the column name for the Pictures field */
    const PICTURES = 'refrens.Pictures';

    /** the column name for the Tagrecapture field */
    const TAGRECAPTURE = 'refrens.Tagrecapture';

    /** the column name for the Conservation field */
    const CONSERVATION = 'refrens.Conservation';

    /** the column name for the Checklist field */
    const CHECKLIST = 'refrens.Checklist';

    /** the column name for the ISBN field */
    const ISBN = 'refrens.ISBN';

    /** the column name for the DOI field */
    const DOI = 'refrens.DOI';

    /** the column name for the AuthorEmail field */
    const AUTHOREMAIL = 'refrens.AuthorEmail';

    /** the column name for the AuthorAdress field */
    const AUTHORADRESS = 'refrens.AuthorAdress';

    /** the column name for the PaperURL field */
    const PAPERURL = 'refrens.PaperURL';

    /** the column name for the Used field */
    const USED = 'refrens.Used';

    /** the column name for the Entered field */
    const ENTERED = 'refrens.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'refrens.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'refrens.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'refrens.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'refrens.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'refrens.DateChecked';

    /** the column name for the TS field */
    const TS = 'refrens.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Refrens objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Refrens[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. RefrensPeer::$fieldNames[RefrensPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Refno', 'Rmsno', 'Author', 'Year', 'Title', 'Source', 'Sourceunique', 'Firstauthor', 'Language', 'Complete', 'Reftype', 'Keywords', 'Remarks', 'Crossref1', 'Crossref2', 'Crossref3', 'Crossref4', 'Crossref5', 'CasRefNo', 'Ecology', 'Ecotoxicology', 'Popdynamics', 'Aquaculture', 'Brains', 'Reproduction', 'Migration', 'Growth', 'Recruitment', 'Vision', 'Ciguatera', 'Frynursery', 'Maturity', 'Distribution', 'Mortality', 'Farmingsystem', 'Eggs', 'Habitats', 'Lengthweight', 'Lengthfreq', 'Strains', 'Larvae', 'Environment', 'Stocks', 'Genetics', 'Spawning', 'Abundance', 'Catches', 'Electrophoresis', 'Sexratio', 'Activity', 'Effort', 'Diseases', 'Predators', 'Behavior', 'Management', 'Introduction', 'Competitors', 'Food', 'Nomenclature', 'Revision', 'Physiology', 'Morphology', 'Otolith', 'Foodconsum', 'Origdescr', 'Oxygen', 'Maxlength', 'Diet', 'Rawdata', 'Speeds', 'Maxweight', 'Longevity', 'Keys', 'Broodstock', 'Eggnursery', 'Larvalnursery', 'Citation', 'Team', 'Aquarium', 'Processing', 'Comname', 'Pictures', 'Tagrecapture', 'Conservation', 'Checklist', 'Isbn', 'Doi', 'Authoremail', 'Authoradress', 'Paperurl', 'Used', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'refno', 'rmsno', 'author', 'year', 'title', 'source', 'sourceunique', 'firstauthor', 'language', 'complete', 'reftype', 'keywords', 'remarks', 'crossref1', 'crossref2', 'crossref3', 'crossref4', 'crossref5', 'casRefNo', 'ecology', 'ecotoxicology', 'popdynamics', 'aquaculture', 'brains', 'reproduction', 'migration', 'growth', 'recruitment', 'vision', 'ciguatera', 'frynursery', 'maturity', 'distribution', 'mortality', 'farmingsystem', 'eggs', 'habitats', 'lengthweight', 'lengthfreq', 'strains', 'larvae', 'environment', 'stocks', 'genetics', 'spawning', 'abundance', 'catches', 'electrophoresis', 'sexratio', 'activity', 'effort', 'diseases', 'predators', 'behavior', 'management', 'introduction', 'competitors', 'food', 'nomenclature', 'revision', 'physiology', 'morphology', 'otolith', 'foodconsum', 'origdescr', 'oxygen', 'maxlength', 'diet', 'rawdata', 'speeds', 'maxweight', 'longevity', 'keys', 'broodstock', 'eggnursery', 'larvalnursery', 'citation', 'team', 'aquarium', 'processing', 'comname', 'pictures', 'tagrecapture', 'conservation', 'checklist', 'isbn', 'doi', 'authoremail', 'authoradress', 'paperurl', 'used', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (RefrensPeer::AUTOCTR, RefrensPeer::REFNO, RefrensPeer::RMSNO, RefrensPeer::AUTHOR, RefrensPeer::YEAR, RefrensPeer::TITLE, RefrensPeer::SOURCE, RefrensPeer::SOURCEUNIQUE, RefrensPeer::FIRSTAUTHOR, RefrensPeer::LANGUAGE, RefrensPeer::COMPLETE, RefrensPeer::REFTYPE, RefrensPeer::KEYWORDS, RefrensPeer::REMARKS, RefrensPeer::CROSSREF1, RefrensPeer::CROSSREF2, RefrensPeer::CROSSREF3, RefrensPeer::CROSSREF4, RefrensPeer::CROSSREF5, RefrensPeer::CAS_REF_NO, RefrensPeer::ECOLOGY, RefrensPeer::ECOTOXICOLOGY, RefrensPeer::POPDYNAMICS, RefrensPeer::AQUACULTURE, RefrensPeer::BRAINS, RefrensPeer::REPRODUCTION, RefrensPeer::MIGRATION, RefrensPeer::GROWTH, RefrensPeer::RECRUITMENT, RefrensPeer::VISION, RefrensPeer::CIGUATERA, RefrensPeer::FRYNURSERY, RefrensPeer::MATURITY, RefrensPeer::DISTRIBUTION, RefrensPeer::MORTALITY, RefrensPeer::FARMINGSYSTEM, RefrensPeer::EGGS, RefrensPeer::HABITATS, RefrensPeer::LENGTHWEIGHT, RefrensPeer::LENGTHFREQ, RefrensPeer::STRAINS, RefrensPeer::LARVAE, RefrensPeer::ENVIRONMENT, RefrensPeer::STOCKS, RefrensPeer::GENETICS, RefrensPeer::SPAWNING, RefrensPeer::ABUNDANCE, RefrensPeer::CATCHES, RefrensPeer::ELECTROPHORESIS, RefrensPeer::SEXRATIO, RefrensPeer::ACTIVITY, RefrensPeer::EFFORT, RefrensPeer::DISEASES, RefrensPeer::PREDATORS, RefrensPeer::BEHAVIOR, RefrensPeer::MANAGEMENT, RefrensPeer::INTRODUCTION, RefrensPeer::COMPETITORS, RefrensPeer::FOOD, RefrensPeer::NOMENCLATURE, RefrensPeer::REVISION, RefrensPeer::PHYSIOLOGY, RefrensPeer::MORPHOLOGY, RefrensPeer::OTOLITH, RefrensPeer::FOODCONSUM, RefrensPeer::ORIGDESCR, RefrensPeer::OXYGEN, RefrensPeer::MAXLENGTH, RefrensPeer::DIET, RefrensPeer::RAWDATA, RefrensPeer::SPEEDS, RefrensPeer::MAXWEIGHT, RefrensPeer::LONGEVITY, RefrensPeer::KEYS, RefrensPeer::BROODSTOCK, RefrensPeer::EGGNURSERY, RefrensPeer::LARVALNURSERY, RefrensPeer::CITATION, RefrensPeer::TEAM, RefrensPeer::AQUARIUM, RefrensPeer::PROCESSING, RefrensPeer::COMNAME, RefrensPeer::PICTURES, RefrensPeer::TAGRECAPTURE, RefrensPeer::CONSERVATION, RefrensPeer::CHECKLIST, RefrensPeer::ISBN, RefrensPeer::DOI, RefrensPeer::AUTHOREMAIL, RefrensPeer::AUTHORADRESS, RefrensPeer::PAPERURL, RefrensPeer::USED, RefrensPeer::ENTERED, RefrensPeer::DATEENTERED, RefrensPeer::MODIFIED, RefrensPeer::DATEMODIFIED, RefrensPeer::EXPERT, RefrensPeer::DATECHECKED, RefrensPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'REFNO', 'RMSNO', 'AUTHOR', 'YEAR', 'TITLE', 'SOURCE', 'SOURCEUNIQUE', 'FIRSTAUTHOR', 'LANGUAGE', 'COMPLETE', 'REFTYPE', 'KEYWORDS', 'REMARKS', 'CROSSREF1', 'CROSSREF2', 'CROSSREF3', 'CROSSREF4', 'CROSSREF5', 'CAS_REF_NO', 'ECOLOGY', 'ECOTOXICOLOGY', 'POPDYNAMICS', 'AQUACULTURE', 'BRAINS', 'REPRODUCTION', 'MIGRATION', 'GROWTH', 'RECRUITMENT', 'VISION', 'CIGUATERA', 'FRYNURSERY', 'MATURITY', 'DISTRIBUTION', 'MORTALITY', 'FARMINGSYSTEM', 'EGGS', 'HABITATS', 'LENGTHWEIGHT', 'LENGTHFREQ', 'STRAINS', 'LARVAE', 'ENVIRONMENT', 'STOCKS', 'GENETICS', 'SPAWNING', 'ABUNDANCE', 'CATCHES', 'ELECTROPHORESIS', 'SEXRATIO', 'ACTIVITY', 'EFFORT', 'DISEASES', 'PREDATORS', 'BEHAVIOR', 'MANAGEMENT', 'INTRODUCTION', 'COMPETITORS', 'FOOD', 'NOMENCLATURE', 'REVISION', 'PHYSIOLOGY', 'MORPHOLOGY', 'OTOLITH', 'FOODCONSUM', 'ORIGDESCR', 'OXYGEN', 'MAXLENGTH', 'DIET', 'RAWDATA', 'SPEEDS', 'MAXWEIGHT', 'LONGEVITY', 'KEYS', 'BROODSTOCK', 'EGGNURSERY', 'LARVALNURSERY', 'CITATION', 'TEAM', 'AQUARIUM', 'PROCESSING', 'COMNAME', 'PICTURES', 'TAGRECAPTURE', 'CONSERVATION', 'CHECKLIST', 'ISBN', 'DOI', 'AUTHOREMAIL', 'AUTHORADRESS', 'PAPERURL', 'USED', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'RefNo', 'RMSNo', 'Author', 'Year', 'Title', 'Source', 'SourceUnique', 'FirstAuthor', 'Language', 'Complete', 'RefType', 'Keywords', 'Remarks', 'CrossRef1', 'CrossRef2', 'CrossRef3', 'CrossRef4', 'CrossRef5', 'CAS_REF_NO', 'Ecology', 'Ecotoxicology', 'PopDynamics', 'Aquaculture', 'Brains', 'Reproduction', 'Migration', 'Growth', 'Recruitment', 'Vision', 'Ciguatera', 'FryNursery', 'Maturity', 'Distribution', 'Mortality', 'FarmingSystem', 'Eggs', 'Habitats', 'LengthWeight', 'LengthFreq', 'Strains', 'Larvae', 'Environment', 'Stocks', 'Genetics', 'Spawning', 'Abundance', 'Catches', 'Electrophoresis', 'SexRatio', 'Activity', 'Effort', 'Diseases', 'Predators', 'Behavior', 'Management', 'Introduction', 'Competitors', 'Food', 'Nomenclature', 'Revision', 'Physiology', 'Morphology', 'Otolith', 'FoodConsum', 'OrigDescr', 'Oxygen', 'MaxLength', 'Diet', 'RawData', 'Speeds', 'MaxWeight', 'Longevity', 'Keys', 'Broodstock', 'EggNursery', 'LarvalNursery', 'Citation', 'Team', 'Aquarium', 'Processing', 'Comname', 'Pictures', 'Tagrecapture', 'Conservation', 'Checklist', 'ISBN', 'DOI', 'AuthorEmail', 'AuthorAdress', 'PaperURL', 'Used', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. RefrensPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Refno' => 1, 'Rmsno' => 2, 'Author' => 3, 'Year' => 4, 'Title' => 5, 'Source' => 6, 'Sourceunique' => 7, 'Firstauthor' => 8, 'Language' => 9, 'Complete' => 10, 'Reftype' => 11, 'Keywords' => 12, 'Remarks' => 13, 'Crossref1' => 14, 'Crossref2' => 15, 'Crossref3' => 16, 'Crossref4' => 17, 'Crossref5' => 18, 'CasRefNo' => 19, 'Ecology' => 20, 'Ecotoxicology' => 21, 'Popdynamics' => 22, 'Aquaculture' => 23, 'Brains' => 24, 'Reproduction' => 25, 'Migration' => 26, 'Growth' => 27, 'Recruitment' => 28, 'Vision' => 29, 'Ciguatera' => 30, 'Frynursery' => 31, 'Maturity' => 32, 'Distribution' => 33, 'Mortality' => 34, 'Farmingsystem' => 35, 'Eggs' => 36, 'Habitats' => 37, 'Lengthweight' => 38, 'Lengthfreq' => 39, 'Strains' => 40, 'Larvae' => 41, 'Environment' => 42, 'Stocks' => 43, 'Genetics' => 44, 'Spawning' => 45, 'Abundance' => 46, 'Catches' => 47, 'Electrophoresis' => 48, 'Sexratio' => 49, 'Activity' => 50, 'Effort' => 51, 'Diseases' => 52, 'Predators' => 53, 'Behavior' => 54, 'Management' => 55, 'Introduction' => 56, 'Competitors' => 57, 'Food' => 58, 'Nomenclature' => 59, 'Revision' => 60, 'Physiology' => 61, 'Morphology' => 62, 'Otolith' => 63, 'Foodconsum' => 64, 'Origdescr' => 65, 'Oxygen' => 66, 'Maxlength' => 67, 'Diet' => 68, 'Rawdata' => 69, 'Speeds' => 70, 'Maxweight' => 71, 'Longevity' => 72, 'Keys' => 73, 'Broodstock' => 74, 'Eggnursery' => 75, 'Larvalnursery' => 76, 'Citation' => 77, 'Team' => 78, 'Aquarium' => 79, 'Processing' => 80, 'Comname' => 81, 'Pictures' => 82, 'Tagrecapture' => 83, 'Conservation' => 84, 'Checklist' => 85, 'Isbn' => 86, 'Doi' => 87, 'Authoremail' => 88, 'Authoradress' => 89, 'Paperurl' => 90, 'Used' => 91, 'Entered' => 92, 'Dateentered' => 93, 'Modified' => 94, 'Datemodified' => 95, 'Expert' => 96, 'Datechecked' => 97, 'Ts' => 98, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'refno' => 1, 'rmsno' => 2, 'author' => 3, 'year' => 4, 'title' => 5, 'source' => 6, 'sourceunique' => 7, 'firstauthor' => 8, 'language' => 9, 'complete' => 10, 'reftype' => 11, 'keywords' => 12, 'remarks' => 13, 'crossref1' => 14, 'crossref2' => 15, 'crossref3' => 16, 'crossref4' => 17, 'crossref5' => 18, 'casRefNo' => 19, 'ecology' => 20, 'ecotoxicology' => 21, 'popdynamics' => 22, 'aquaculture' => 23, 'brains' => 24, 'reproduction' => 25, 'migration' => 26, 'growth' => 27, 'recruitment' => 28, 'vision' => 29, 'ciguatera' => 30, 'frynursery' => 31, 'maturity' => 32, 'distribution' => 33, 'mortality' => 34, 'farmingsystem' => 35, 'eggs' => 36, 'habitats' => 37, 'lengthweight' => 38, 'lengthfreq' => 39, 'strains' => 40, 'larvae' => 41, 'environment' => 42, 'stocks' => 43, 'genetics' => 44, 'spawning' => 45, 'abundance' => 46, 'catches' => 47, 'electrophoresis' => 48, 'sexratio' => 49, 'activity' => 50, 'effort' => 51, 'diseases' => 52, 'predators' => 53, 'behavior' => 54, 'management' => 55, 'introduction' => 56, 'competitors' => 57, 'food' => 58, 'nomenclature' => 59, 'revision' => 60, 'physiology' => 61, 'morphology' => 62, 'otolith' => 63, 'foodconsum' => 64, 'origdescr' => 65, 'oxygen' => 66, 'maxlength' => 67, 'diet' => 68, 'rawdata' => 69, 'speeds' => 70, 'maxweight' => 71, 'longevity' => 72, 'keys' => 73, 'broodstock' => 74, 'eggnursery' => 75, 'larvalnursery' => 76, 'citation' => 77, 'team' => 78, 'aquarium' => 79, 'processing' => 80, 'comname' => 81, 'pictures' => 82, 'tagrecapture' => 83, 'conservation' => 84, 'checklist' => 85, 'isbn' => 86, 'doi' => 87, 'authoremail' => 88, 'authoradress' => 89, 'paperurl' => 90, 'used' => 91, 'entered' => 92, 'dateentered' => 93, 'modified' => 94, 'datemodified' => 95, 'expert' => 96, 'datechecked' => 97, 'ts' => 98, ),
        BasePeer::TYPE_COLNAME => array (RefrensPeer::AUTOCTR => 0, RefrensPeer::REFNO => 1, RefrensPeer::RMSNO => 2, RefrensPeer::AUTHOR => 3, RefrensPeer::YEAR => 4, RefrensPeer::TITLE => 5, RefrensPeer::SOURCE => 6, RefrensPeer::SOURCEUNIQUE => 7, RefrensPeer::FIRSTAUTHOR => 8, RefrensPeer::LANGUAGE => 9, RefrensPeer::COMPLETE => 10, RefrensPeer::REFTYPE => 11, RefrensPeer::KEYWORDS => 12, RefrensPeer::REMARKS => 13, RefrensPeer::CROSSREF1 => 14, RefrensPeer::CROSSREF2 => 15, RefrensPeer::CROSSREF3 => 16, RefrensPeer::CROSSREF4 => 17, RefrensPeer::CROSSREF5 => 18, RefrensPeer::CAS_REF_NO => 19, RefrensPeer::ECOLOGY => 20, RefrensPeer::ECOTOXICOLOGY => 21, RefrensPeer::POPDYNAMICS => 22, RefrensPeer::AQUACULTURE => 23, RefrensPeer::BRAINS => 24, RefrensPeer::REPRODUCTION => 25, RefrensPeer::MIGRATION => 26, RefrensPeer::GROWTH => 27, RefrensPeer::RECRUITMENT => 28, RefrensPeer::VISION => 29, RefrensPeer::CIGUATERA => 30, RefrensPeer::FRYNURSERY => 31, RefrensPeer::MATURITY => 32, RefrensPeer::DISTRIBUTION => 33, RefrensPeer::MORTALITY => 34, RefrensPeer::FARMINGSYSTEM => 35, RefrensPeer::EGGS => 36, RefrensPeer::HABITATS => 37, RefrensPeer::LENGTHWEIGHT => 38, RefrensPeer::LENGTHFREQ => 39, RefrensPeer::STRAINS => 40, RefrensPeer::LARVAE => 41, RefrensPeer::ENVIRONMENT => 42, RefrensPeer::STOCKS => 43, RefrensPeer::GENETICS => 44, RefrensPeer::SPAWNING => 45, RefrensPeer::ABUNDANCE => 46, RefrensPeer::CATCHES => 47, RefrensPeer::ELECTROPHORESIS => 48, RefrensPeer::SEXRATIO => 49, RefrensPeer::ACTIVITY => 50, RefrensPeer::EFFORT => 51, RefrensPeer::DISEASES => 52, RefrensPeer::PREDATORS => 53, RefrensPeer::BEHAVIOR => 54, RefrensPeer::MANAGEMENT => 55, RefrensPeer::INTRODUCTION => 56, RefrensPeer::COMPETITORS => 57, RefrensPeer::FOOD => 58, RefrensPeer::NOMENCLATURE => 59, RefrensPeer::REVISION => 60, RefrensPeer::PHYSIOLOGY => 61, RefrensPeer::MORPHOLOGY => 62, RefrensPeer::OTOLITH => 63, RefrensPeer::FOODCONSUM => 64, RefrensPeer::ORIGDESCR => 65, RefrensPeer::OXYGEN => 66, RefrensPeer::MAXLENGTH => 67, RefrensPeer::DIET => 68, RefrensPeer::RAWDATA => 69, RefrensPeer::SPEEDS => 70, RefrensPeer::MAXWEIGHT => 71, RefrensPeer::LONGEVITY => 72, RefrensPeer::KEYS => 73, RefrensPeer::BROODSTOCK => 74, RefrensPeer::EGGNURSERY => 75, RefrensPeer::LARVALNURSERY => 76, RefrensPeer::CITATION => 77, RefrensPeer::TEAM => 78, RefrensPeer::AQUARIUM => 79, RefrensPeer::PROCESSING => 80, RefrensPeer::COMNAME => 81, RefrensPeer::PICTURES => 82, RefrensPeer::TAGRECAPTURE => 83, RefrensPeer::CONSERVATION => 84, RefrensPeer::CHECKLIST => 85, RefrensPeer::ISBN => 86, RefrensPeer::DOI => 87, RefrensPeer::AUTHOREMAIL => 88, RefrensPeer::AUTHORADRESS => 89, RefrensPeer::PAPERURL => 90, RefrensPeer::USED => 91, RefrensPeer::ENTERED => 92, RefrensPeer::DATEENTERED => 93, RefrensPeer::MODIFIED => 94, RefrensPeer::DATEMODIFIED => 95, RefrensPeer::EXPERT => 96, RefrensPeer::DATECHECKED => 97, RefrensPeer::TS => 98, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'REFNO' => 1, 'RMSNO' => 2, 'AUTHOR' => 3, 'YEAR' => 4, 'TITLE' => 5, 'SOURCE' => 6, 'SOURCEUNIQUE' => 7, 'FIRSTAUTHOR' => 8, 'LANGUAGE' => 9, 'COMPLETE' => 10, 'REFTYPE' => 11, 'KEYWORDS' => 12, 'REMARKS' => 13, 'CROSSREF1' => 14, 'CROSSREF2' => 15, 'CROSSREF3' => 16, 'CROSSREF4' => 17, 'CROSSREF5' => 18, 'CAS_REF_NO' => 19, 'ECOLOGY' => 20, 'ECOTOXICOLOGY' => 21, 'POPDYNAMICS' => 22, 'AQUACULTURE' => 23, 'BRAINS' => 24, 'REPRODUCTION' => 25, 'MIGRATION' => 26, 'GROWTH' => 27, 'RECRUITMENT' => 28, 'VISION' => 29, 'CIGUATERA' => 30, 'FRYNURSERY' => 31, 'MATURITY' => 32, 'DISTRIBUTION' => 33, 'MORTALITY' => 34, 'FARMINGSYSTEM' => 35, 'EGGS' => 36, 'HABITATS' => 37, 'LENGTHWEIGHT' => 38, 'LENGTHFREQ' => 39, 'STRAINS' => 40, 'LARVAE' => 41, 'ENVIRONMENT' => 42, 'STOCKS' => 43, 'GENETICS' => 44, 'SPAWNING' => 45, 'ABUNDANCE' => 46, 'CATCHES' => 47, 'ELECTROPHORESIS' => 48, 'SEXRATIO' => 49, 'ACTIVITY' => 50, 'EFFORT' => 51, 'DISEASES' => 52, 'PREDATORS' => 53, 'BEHAVIOR' => 54, 'MANAGEMENT' => 55, 'INTRODUCTION' => 56, 'COMPETITORS' => 57, 'FOOD' => 58, 'NOMENCLATURE' => 59, 'REVISION' => 60, 'PHYSIOLOGY' => 61, 'MORPHOLOGY' => 62, 'OTOLITH' => 63, 'FOODCONSUM' => 64, 'ORIGDESCR' => 65, 'OXYGEN' => 66, 'MAXLENGTH' => 67, 'DIET' => 68, 'RAWDATA' => 69, 'SPEEDS' => 70, 'MAXWEIGHT' => 71, 'LONGEVITY' => 72, 'KEYS' => 73, 'BROODSTOCK' => 74, 'EGGNURSERY' => 75, 'LARVALNURSERY' => 76, 'CITATION' => 77, 'TEAM' => 78, 'AQUARIUM' => 79, 'PROCESSING' => 80, 'COMNAME' => 81, 'PICTURES' => 82, 'TAGRECAPTURE' => 83, 'CONSERVATION' => 84, 'CHECKLIST' => 85, 'ISBN' => 86, 'DOI' => 87, 'AUTHOREMAIL' => 88, 'AUTHORADRESS' => 89, 'PAPERURL' => 90, 'USED' => 91, 'ENTERED' => 92, 'DATEENTERED' => 93, 'MODIFIED' => 94, 'DATEMODIFIED' => 95, 'EXPERT' => 96, 'DATECHECKED' => 97, 'TS' => 98, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'RefNo' => 1, 'RMSNo' => 2, 'Author' => 3, 'Year' => 4, 'Title' => 5, 'Source' => 6, 'SourceUnique' => 7, 'FirstAuthor' => 8, 'Language' => 9, 'Complete' => 10, 'RefType' => 11, 'Keywords' => 12, 'Remarks' => 13, 'CrossRef1' => 14, 'CrossRef2' => 15, 'CrossRef3' => 16, 'CrossRef4' => 17, 'CrossRef5' => 18, 'CAS_REF_NO' => 19, 'Ecology' => 20, 'Ecotoxicology' => 21, 'PopDynamics' => 22, 'Aquaculture' => 23, 'Brains' => 24, 'Reproduction' => 25, 'Migration' => 26, 'Growth' => 27, 'Recruitment' => 28, 'Vision' => 29, 'Ciguatera' => 30, 'FryNursery' => 31, 'Maturity' => 32, 'Distribution' => 33, 'Mortality' => 34, 'FarmingSystem' => 35, 'Eggs' => 36, 'Habitats' => 37, 'LengthWeight' => 38, 'LengthFreq' => 39, 'Strains' => 40, 'Larvae' => 41, 'Environment' => 42, 'Stocks' => 43, 'Genetics' => 44, 'Spawning' => 45, 'Abundance' => 46, 'Catches' => 47, 'Electrophoresis' => 48, 'SexRatio' => 49, 'Activity' => 50, 'Effort' => 51, 'Diseases' => 52, 'Predators' => 53, 'Behavior' => 54, 'Management' => 55, 'Introduction' => 56, 'Competitors' => 57, 'Food' => 58, 'Nomenclature' => 59, 'Revision' => 60, 'Physiology' => 61, 'Morphology' => 62, 'Otolith' => 63, 'FoodConsum' => 64, 'OrigDescr' => 65, 'Oxygen' => 66, 'MaxLength' => 67, 'Diet' => 68, 'RawData' => 69, 'Speeds' => 70, 'MaxWeight' => 71, 'Longevity' => 72, 'Keys' => 73, 'Broodstock' => 74, 'EggNursery' => 75, 'LarvalNursery' => 76, 'Citation' => 77, 'Team' => 78, 'Aquarium' => 79, 'Processing' => 80, 'Comname' => 81, 'Pictures' => 82, 'Tagrecapture' => 83, 'Conservation' => 84, 'Checklist' => 85, 'ISBN' => 86, 'DOI' => 87, 'AuthorEmail' => 88, 'AuthorAdress' => 89, 'PaperURL' => 90, 'Used' => 91, 'Entered' => 92, 'DateEntered' => 93, 'Modified' => 94, 'DateModified' => 95, 'Expert' => 96, 'DateChecked' => 97, 'TS' => 98, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, )
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
        $toNames = RefrensPeer::getFieldNames($toType);
        $key = isset(RefrensPeer::$fieldKeys[$fromType][$name]) ? RefrensPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(RefrensPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, RefrensPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return RefrensPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. RefrensPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(RefrensPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(RefrensPeer::AUTOCTR);
            $criteria->addSelectColumn(RefrensPeer::REFNO);
            $criteria->addSelectColumn(RefrensPeer::RMSNO);
            $criteria->addSelectColumn(RefrensPeer::AUTHOR);
            $criteria->addSelectColumn(RefrensPeer::YEAR);
            $criteria->addSelectColumn(RefrensPeer::TITLE);
            $criteria->addSelectColumn(RefrensPeer::SOURCE);
            $criteria->addSelectColumn(RefrensPeer::SOURCEUNIQUE);
            $criteria->addSelectColumn(RefrensPeer::FIRSTAUTHOR);
            $criteria->addSelectColumn(RefrensPeer::LANGUAGE);
            $criteria->addSelectColumn(RefrensPeer::COMPLETE);
            $criteria->addSelectColumn(RefrensPeer::REFTYPE);
            $criteria->addSelectColumn(RefrensPeer::KEYWORDS);
            $criteria->addSelectColumn(RefrensPeer::REMARKS);
            $criteria->addSelectColumn(RefrensPeer::CROSSREF1);
            $criteria->addSelectColumn(RefrensPeer::CROSSREF2);
            $criteria->addSelectColumn(RefrensPeer::CROSSREF3);
            $criteria->addSelectColumn(RefrensPeer::CROSSREF4);
            $criteria->addSelectColumn(RefrensPeer::CROSSREF5);
            $criteria->addSelectColumn(RefrensPeer::CAS_REF_NO);
            $criteria->addSelectColumn(RefrensPeer::ECOLOGY);
            $criteria->addSelectColumn(RefrensPeer::ECOTOXICOLOGY);
            $criteria->addSelectColumn(RefrensPeer::POPDYNAMICS);
            $criteria->addSelectColumn(RefrensPeer::AQUACULTURE);
            $criteria->addSelectColumn(RefrensPeer::BRAINS);
            $criteria->addSelectColumn(RefrensPeer::REPRODUCTION);
            $criteria->addSelectColumn(RefrensPeer::MIGRATION);
            $criteria->addSelectColumn(RefrensPeer::GROWTH);
            $criteria->addSelectColumn(RefrensPeer::RECRUITMENT);
            $criteria->addSelectColumn(RefrensPeer::VISION);
            $criteria->addSelectColumn(RefrensPeer::CIGUATERA);
            $criteria->addSelectColumn(RefrensPeer::FRYNURSERY);
            $criteria->addSelectColumn(RefrensPeer::MATURITY);
            $criteria->addSelectColumn(RefrensPeer::DISTRIBUTION);
            $criteria->addSelectColumn(RefrensPeer::MORTALITY);
            $criteria->addSelectColumn(RefrensPeer::FARMINGSYSTEM);
            $criteria->addSelectColumn(RefrensPeer::EGGS);
            $criteria->addSelectColumn(RefrensPeer::HABITATS);
            $criteria->addSelectColumn(RefrensPeer::LENGTHWEIGHT);
            $criteria->addSelectColumn(RefrensPeer::LENGTHFREQ);
            $criteria->addSelectColumn(RefrensPeer::STRAINS);
            $criteria->addSelectColumn(RefrensPeer::LARVAE);
            $criteria->addSelectColumn(RefrensPeer::ENVIRONMENT);
            $criteria->addSelectColumn(RefrensPeer::STOCKS);
            $criteria->addSelectColumn(RefrensPeer::GENETICS);
            $criteria->addSelectColumn(RefrensPeer::SPAWNING);
            $criteria->addSelectColumn(RefrensPeer::ABUNDANCE);
            $criteria->addSelectColumn(RefrensPeer::CATCHES);
            $criteria->addSelectColumn(RefrensPeer::ELECTROPHORESIS);
            $criteria->addSelectColumn(RefrensPeer::SEXRATIO);
            $criteria->addSelectColumn(RefrensPeer::ACTIVITY);
            $criteria->addSelectColumn(RefrensPeer::EFFORT);
            $criteria->addSelectColumn(RefrensPeer::DISEASES);
            $criteria->addSelectColumn(RefrensPeer::PREDATORS);
            $criteria->addSelectColumn(RefrensPeer::BEHAVIOR);
            $criteria->addSelectColumn(RefrensPeer::MANAGEMENT);
            $criteria->addSelectColumn(RefrensPeer::INTRODUCTION);
            $criteria->addSelectColumn(RefrensPeer::COMPETITORS);
            $criteria->addSelectColumn(RefrensPeer::FOOD);
            $criteria->addSelectColumn(RefrensPeer::NOMENCLATURE);
            $criteria->addSelectColumn(RefrensPeer::REVISION);
            $criteria->addSelectColumn(RefrensPeer::PHYSIOLOGY);
            $criteria->addSelectColumn(RefrensPeer::MORPHOLOGY);
            $criteria->addSelectColumn(RefrensPeer::OTOLITH);
            $criteria->addSelectColumn(RefrensPeer::FOODCONSUM);
            $criteria->addSelectColumn(RefrensPeer::ORIGDESCR);
            $criteria->addSelectColumn(RefrensPeer::OXYGEN);
            $criteria->addSelectColumn(RefrensPeer::MAXLENGTH);
            $criteria->addSelectColumn(RefrensPeer::DIET);
            $criteria->addSelectColumn(RefrensPeer::RAWDATA);
            $criteria->addSelectColumn(RefrensPeer::SPEEDS);
            $criteria->addSelectColumn(RefrensPeer::MAXWEIGHT);
            $criteria->addSelectColumn(RefrensPeer::LONGEVITY);
            $criteria->addSelectColumn(RefrensPeer::KEYS);
            $criteria->addSelectColumn(RefrensPeer::BROODSTOCK);
            $criteria->addSelectColumn(RefrensPeer::EGGNURSERY);
            $criteria->addSelectColumn(RefrensPeer::LARVALNURSERY);
            $criteria->addSelectColumn(RefrensPeer::CITATION);
            $criteria->addSelectColumn(RefrensPeer::TEAM);
            $criteria->addSelectColumn(RefrensPeer::AQUARIUM);
            $criteria->addSelectColumn(RefrensPeer::PROCESSING);
            $criteria->addSelectColumn(RefrensPeer::COMNAME);
            $criteria->addSelectColumn(RefrensPeer::PICTURES);
            $criteria->addSelectColumn(RefrensPeer::TAGRECAPTURE);
            $criteria->addSelectColumn(RefrensPeer::CONSERVATION);
            $criteria->addSelectColumn(RefrensPeer::CHECKLIST);
            $criteria->addSelectColumn(RefrensPeer::ISBN);
            $criteria->addSelectColumn(RefrensPeer::DOI);
            $criteria->addSelectColumn(RefrensPeer::AUTHOREMAIL);
            $criteria->addSelectColumn(RefrensPeer::AUTHORADRESS);
            $criteria->addSelectColumn(RefrensPeer::PAPERURL);
            $criteria->addSelectColumn(RefrensPeer::USED);
            $criteria->addSelectColumn(RefrensPeer::ENTERED);
            $criteria->addSelectColumn(RefrensPeer::DATEENTERED);
            $criteria->addSelectColumn(RefrensPeer::MODIFIED);
            $criteria->addSelectColumn(RefrensPeer::DATEMODIFIED);
            $criteria->addSelectColumn(RefrensPeer::EXPERT);
            $criteria->addSelectColumn(RefrensPeer::DATECHECKED);
            $criteria->addSelectColumn(RefrensPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.RefNo');
            $criteria->addSelectColumn($alias . '.RMSNo');
            $criteria->addSelectColumn($alias . '.Author');
            $criteria->addSelectColumn($alias . '.Year');
            $criteria->addSelectColumn($alias . '.Title');
            $criteria->addSelectColumn($alias . '.Source');
            $criteria->addSelectColumn($alias . '.SourceUnique');
            $criteria->addSelectColumn($alias . '.FirstAuthor');
            $criteria->addSelectColumn($alias . '.Language');
            $criteria->addSelectColumn($alias . '.Complete');
            $criteria->addSelectColumn($alias . '.RefType');
            $criteria->addSelectColumn($alias . '.Keywords');
            $criteria->addSelectColumn($alias . '.Remarks');
            $criteria->addSelectColumn($alias . '.CrossRef1');
            $criteria->addSelectColumn($alias . '.CrossRef2');
            $criteria->addSelectColumn($alias . '.CrossRef3');
            $criteria->addSelectColumn($alias . '.CrossRef4');
            $criteria->addSelectColumn($alias . '.CrossRef5');
            $criteria->addSelectColumn($alias . '.CAS_REF_NO');
            $criteria->addSelectColumn($alias . '.Ecology');
            $criteria->addSelectColumn($alias . '.Ecotoxicology');
            $criteria->addSelectColumn($alias . '.PopDynamics');
            $criteria->addSelectColumn($alias . '.Aquaculture');
            $criteria->addSelectColumn($alias . '.Brains');
            $criteria->addSelectColumn($alias . '.Reproduction');
            $criteria->addSelectColumn($alias . '.Migration');
            $criteria->addSelectColumn($alias . '.Growth');
            $criteria->addSelectColumn($alias . '.Recruitment');
            $criteria->addSelectColumn($alias . '.Vision');
            $criteria->addSelectColumn($alias . '.Ciguatera');
            $criteria->addSelectColumn($alias . '.FryNursery');
            $criteria->addSelectColumn($alias . '.Maturity');
            $criteria->addSelectColumn($alias . '.Distribution');
            $criteria->addSelectColumn($alias . '.Mortality');
            $criteria->addSelectColumn($alias . '.FarmingSystem');
            $criteria->addSelectColumn($alias . '.Eggs');
            $criteria->addSelectColumn($alias . '.Habitats');
            $criteria->addSelectColumn($alias . '.LengthWeight');
            $criteria->addSelectColumn($alias . '.LengthFreq');
            $criteria->addSelectColumn($alias . '.Strains');
            $criteria->addSelectColumn($alias . '.Larvae');
            $criteria->addSelectColumn($alias . '.Environment');
            $criteria->addSelectColumn($alias . '.Stocks');
            $criteria->addSelectColumn($alias . '.Genetics');
            $criteria->addSelectColumn($alias . '.Spawning');
            $criteria->addSelectColumn($alias . '.Abundance');
            $criteria->addSelectColumn($alias . '.Catches');
            $criteria->addSelectColumn($alias . '.Electrophoresis');
            $criteria->addSelectColumn($alias . '.SexRatio');
            $criteria->addSelectColumn($alias . '.Activity');
            $criteria->addSelectColumn($alias . '.Effort');
            $criteria->addSelectColumn($alias . '.Diseases');
            $criteria->addSelectColumn($alias . '.Predators');
            $criteria->addSelectColumn($alias . '.Behavior');
            $criteria->addSelectColumn($alias . '.Management');
            $criteria->addSelectColumn($alias . '.Introduction');
            $criteria->addSelectColumn($alias . '.Competitors');
            $criteria->addSelectColumn($alias . '.Food');
            $criteria->addSelectColumn($alias . '.Nomenclature');
            $criteria->addSelectColumn($alias . '.Revision');
            $criteria->addSelectColumn($alias . '.Physiology');
            $criteria->addSelectColumn($alias . '.Morphology');
            $criteria->addSelectColumn($alias . '.Otolith');
            $criteria->addSelectColumn($alias . '.FoodConsum');
            $criteria->addSelectColumn($alias . '.OrigDescr');
            $criteria->addSelectColumn($alias . '.Oxygen');
            $criteria->addSelectColumn($alias . '.MaxLength');
            $criteria->addSelectColumn($alias . '.Diet');
            $criteria->addSelectColumn($alias . '.RawData');
            $criteria->addSelectColumn($alias . '.Speeds');
            $criteria->addSelectColumn($alias . '.MaxWeight');
            $criteria->addSelectColumn($alias . '.Longevity');
            $criteria->addSelectColumn($alias . '.Keys');
            $criteria->addSelectColumn($alias . '.Broodstock');
            $criteria->addSelectColumn($alias . '.EggNursery');
            $criteria->addSelectColumn($alias . '.LarvalNursery');
            $criteria->addSelectColumn($alias . '.Citation');
            $criteria->addSelectColumn($alias . '.Team');
            $criteria->addSelectColumn($alias . '.Aquarium');
            $criteria->addSelectColumn($alias . '.Processing');
            $criteria->addSelectColumn($alias . '.Comname');
            $criteria->addSelectColumn($alias . '.Pictures');
            $criteria->addSelectColumn($alias . '.Tagrecapture');
            $criteria->addSelectColumn($alias . '.Conservation');
            $criteria->addSelectColumn($alias . '.Checklist');
            $criteria->addSelectColumn($alias . '.ISBN');
            $criteria->addSelectColumn($alias . '.DOI');
            $criteria->addSelectColumn($alias . '.AuthorEmail');
            $criteria->addSelectColumn($alias . '.AuthorAdress');
            $criteria->addSelectColumn($alias . '.PaperURL');
            $criteria->addSelectColumn($alias . '.Used');
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
        $criteria->setPrimaryTableName(RefrensPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RefrensPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(RefrensPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(RefrensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Refrens
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = RefrensPeer::doSelect($critcopy, $con);
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
        return RefrensPeer::populateObjects(RefrensPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(RefrensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            RefrensPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(RefrensPeer::DATABASE_NAME);

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
     * @param Refrens $obj A Refrens object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getAutoctr();
            } // if key === null
            RefrensPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Refrens object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Refrens) {
                $key = (string) $value->getAutoctr();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Refrens object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(RefrensPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Refrens Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(RefrensPeer::$instances[$key])) {
                return RefrensPeer::$instances[$key];
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
        foreach (RefrensPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        RefrensPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to refrens
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
        $cls = RefrensPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = RefrensPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = RefrensPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RefrensPeer::addInstanceToPool($obj, $key);
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
     * @return array (Refrens object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = RefrensPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = RefrensPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + RefrensPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RefrensPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            RefrensPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(RefrensPeer::DATABASE_NAME)->getTable(RefrensPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseRefrensPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseRefrensPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \RefrensTableMap());
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
        return RefrensPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Refrens or Criteria object.
     *
     * @param      mixed $values Criteria or Refrens object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RefrensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Refrens object
        }

        if ($criteria->containsKey(RefrensPeer::AUTOCTR) && $criteria->keyContainsValue(RefrensPeer::AUTOCTR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.RefrensPeer::AUTOCTR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(RefrensPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Refrens or Criteria object.
     *
     * @param      mixed $values Criteria or Refrens object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RefrensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(RefrensPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(RefrensPeer::AUTOCTR);
            $value = $criteria->remove(RefrensPeer::AUTOCTR);
            if ($value) {
                $selectCriteria->add(RefrensPeer::AUTOCTR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(RefrensPeer::TABLE_NAME);
            }

        } else { // $values is Refrens object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(RefrensPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the refrens table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RefrensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(RefrensPeer::TABLE_NAME, $con, RefrensPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RefrensPeer::clearInstancePool();
            RefrensPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Refrens or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Refrens object or primary key or array of primary keys
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
            $con = Propel::getConnection(RefrensPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            RefrensPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Refrens) { // it's a model object
            // invalidate the cache for this single object
            RefrensPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RefrensPeer::DATABASE_NAME);
            $criteria->add(RefrensPeer::AUTOCTR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                RefrensPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(RefrensPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            RefrensPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Refrens object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Refrens $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(RefrensPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(RefrensPeer::TABLE_NAME);

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

        return BasePeer::doValidate(RefrensPeer::DATABASE_NAME, RefrensPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Refrens
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = RefrensPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(RefrensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(RefrensPeer::DATABASE_NAME);
        $criteria->add(RefrensPeer::AUTOCTR, $pk);

        $v = RefrensPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Refrens[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RefrensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(RefrensPeer::DATABASE_NAME);
            $criteria->add(RefrensPeer::AUTOCTR, $pks, Criteria::IN);
            $objs = RefrensPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseRefrensPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseRefrensPeer::buildTableMap();

