<?php


/**
 * Base static class for performing query and update operations on the 'slb_species' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseSlbSpeciesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'slb_species';

    /** the related Propel class for this table */
    const OM_CLASS = 'SlbSpecies';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SlbSpeciesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 98;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 98;

    /** the column name for the SpecCode field */
    const SPECCODE = 'slb_species.SpecCode';

    /** the column name for the Genus field */
    const GENUS = 'slb_species.Genus';

    /** the column name for the Species field */
    const SPECIES = 'slb_species.Species';

    /** the column name for the SpeciesRefNo field */
    const SPECIESREFNO = 'slb_species.SpeciesRefNo';

    /** the column name for the Author field */
    const AUTHOR = 'slb_species.Author';

    /** the column name for the AuthorRef field */
    const AUTHORREF = 'slb_species.AuthorRef';

    /** the column name for the FBname field */
    const FBNAME = 'slb_species.FBname';

    /** the column name for the FamCode field */
    const FAMCODE = 'slb_species.FamCode';

    /** the column name for the Subfamily field */
    const SUBFAMILY = 'slb_species.Subfamily';

    /** the column name for the Fossil field */
    const FOSSIL = 'slb_species.Fossil';

    /** the column name for the PeriodRange field */
    const PERIODRANGE = 'slb_species.PeriodRange';

    /** the column name for the Period field */
    const PERIOD = 'slb_species.Period';

    /** the column name for the Source field */
    const SOURCE = 'slb_species.Source';

    /** the column name for the Remark field */
    const REMARK = 'slb_species.Remark';

    /** the column name for the Fresh field */
    const FRESH = 'slb_species.Fresh';

    /** the column name for the Brack field */
    const BRACK = 'slb_species.Brack';

    /** the column name for the Saltwater field */
    const SALTWATER = 'slb_species.Saltwater';

    /** the column name for the Land field */
    const LAND = 'slb_species.Land';

    /** the column name for the DemersPelag field */
    const DEMERSPELAG = 'slb_species.DemersPelag';

    /** the column name for the AnaCat field */
    const ANACAT = 'slb_species.AnaCat';

    /** the column name for the MigratRef field */
    const MIGRATREF = 'slb_species.MigratRef';

    /** the column name for the DepthRangeShallow field */
    const DEPTHRANGESHALLOW = 'slb_species.DepthRangeShallow';

    /** the column name for the DepthRangeDeep field */
    const DEPTHRANGEDEEP = 'slb_species.DepthRangeDeep';

    /** the column name for the DepthRangeRef field */
    const DEPTHRANGEREF = 'slb_species.DepthRangeRef';

    /** the column name for the DepthRangeComShallow field */
    const DEPTHRANGECOMSHALLOW = 'slb_species.DepthRangeComShallow';

    /** the column name for the DepthRangeComDeep field */
    const DEPTHRANGECOMDEEP = 'slb_species.DepthRangeComDeep';

    /** the column name for the DepthComRef field */
    const DEPTHCOMREF = 'slb_species.DepthComRef';

    /** the column name for the LongevityWild field */
    const LONGEVITYWILD = 'slb_species.LongevityWild';

    /** the column name for the LongevityWildRef field */
    const LONGEVITYWILDREF = 'slb_species.LongevityWildRef';

    /** the column name for the LongevityCaptive field */
    const LONGEVITYCAPTIVE = 'slb_species.LongevityCaptive';

    /** the column name for the LongevityCapRef field */
    const LONGEVITYCAPREF = 'slb_species.LongevityCapRef';

    /** the column name for the Length field */
    const LENGTH = 'slb_species.Length';

    /** the column name for the LTypeMaxM field */
    const LTYPEMAXM = 'slb_species.LTypeMaxM';

    /** the column name for the LengthFemale field */
    const LENGTHFEMALE = 'slb_species.LengthFemale';

    /** the column name for the LTypeMaxF field */
    const LTYPEMAXF = 'slb_species.LTypeMaxF';

    /** the column name for the MaxLengthRef field */
    const MAXLENGTHREF = 'slb_species.MaxLengthRef';

    /** the column name for the CommonLength field */
    const COMMONLENGTH = 'slb_species.CommonLength';

    /** the column name for the LTypeComM field */
    const LTYPECOMM = 'slb_species.LTypeComM';

    /** the column name for the CommonLengthF field */
    const COMMONLENGTHF = 'slb_species.CommonLengthF';

    /** the column name for the LTypeComF field */
    const LTYPECOMF = 'slb_species.LTypeComF';

    /** the column name for the CommonLengthRef field */
    const COMMONLENGTHREF = 'slb_species.CommonLengthRef';

    /** the column name for the Weight field */
    const WEIGHT = 'slb_species.Weight';

    /** the column name for the WeightFemale field */
    const WEIGHTFEMALE = 'slb_species.WeightFemale';

    /** the column name for the MaxWeightRef field */
    const MAXWEIGHTREF = 'slb_species.MaxWeightRef';

    /** the column name for the Pic field */
    const PIC = 'slb_species.Pic';

    /** the column name for the PictureFemale field */
    const PICTUREFEMALE = 'slb_species.PictureFemale';

    /** the column name for the LarvaPic field */
    const LARVAPIC = 'slb_species.LarvaPic';

    /** the column name for the EggPic field */
    const EGGPIC = 'slb_species.EggPic';

    /** the column name for the ImportanceRef field */
    const IMPORTANCEREF = 'slb_species.ImportanceRef';

    /** the column name for the Importance field */
    const IMPORTANCE = 'slb_species.Importance';

    /** the column name for the Remarks7 field */
    const REMARKS7 = 'slb_species.Remarks7';

    /** the column name for the PriceCateg field */
    const PRICECATEG = 'slb_species.PriceCateg';

    /** the column name for the PriceReliability field */
    const PRICERELIABILITY = 'slb_species.PriceReliability';

    /** the column name for the LandingStatistics field */
    const LANDINGSTATISTICS = 'slb_species.LandingStatistics';

    /** the column name for the Landings field */
    const LANDINGS = 'slb_species.Landings';

    /** the column name for the MainCatchingMethod field */
    const MAINCATCHINGMETHOD = 'slb_species.MainCatchingMethod';

    /** the column name for the II field */
    const II = 'slb_species.II';

    /** the column name for the MSeines field */
    const MSEINES = 'slb_species.MSeines';

    /** the column name for the MGillnets field */
    const MGILLNETS = 'slb_species.MGillnets';

    /** the column name for the MCastnets field */
    const MCASTNETS = 'slb_species.MCastnets';

    /** the column name for the MTraps field */
    const MTRAPS = 'slb_species.MTraps';

    /** the column name for the MSpears field */
    const MSPEARS = 'slb_species.MSpears';

    /** the column name for the MTrawls field */
    const MTRAWLS = 'slb_species.MTrawls';

    /** the column name for the MDredges field */
    const MDREDGES = 'slb_species.MDredges';

    /** the column name for the MLiftnets field */
    const MLIFTNETS = 'slb_species.MLiftnets';

    /** the column name for the MHooksLines field */
    const MHOOKSLINES = 'slb_species.MHooksLines';

    /** the column name for the MOther field */
    const MOTHER = 'slb_species.MOther';

    /** the column name for the UsedforAquaculture field */
    const USEDFORAQUACULTURE = 'slb_species.UsedforAquaculture';

    /** the column name for the LifeCycle field */
    const LIFECYCLE = 'slb_species.LifeCycle';

    /** the column name for the AquacultureRef field */
    const AQUACULTUREREF = 'slb_species.AquacultureRef';

    /** the column name for the UsedasBait field */
    const USEDASBAIT = 'slb_species.UsedasBait';

    /** the column name for the BaitRef field */
    const BAITREF = 'slb_species.BaitRef';

    /** the column name for the Aquarium field */
    const AQUARIUM = 'slb_species.Aquarium';

    /** the column name for the AquariumFishII field */
    const AQUARIUMFISHII = 'slb_species.AquariumFishII';

    /** the column name for the AquariumRef field */
    const AQUARIUMREF = 'slb_species.AquariumRef';

    /** the column name for the GameFish field */
    const GAMEFISH = 'slb_species.GameFish';

    /** the column name for the GameRef field */
    const GAMEREF = 'slb_species.GameRef';

    /** the column name for the Dangerous field */
    const DANGEROUS = 'slb_species.Dangerous';

    /** the column name for the DangerousRef field */
    const DANGEROUSREF = 'slb_species.DangerousRef';

    /** the column name for the Electrogenic field */
    const ELECTROGENIC = 'slb_species.Electrogenic';

    /** the column name for the ElectroRef field */
    const ELECTROREF = 'slb_species.ElectroRef';

    /** the column name for the Complete field */
    const COMPLETE = 'slb_species.Complete';

    /** the column name for the ASFA field */
    const ASFA = 'slb_species.ASFA';

    /** the column name for the Entered field */
    const ENTERED = 'slb_species.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'slb_species.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'slb_species.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'slb_species.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'slb_species.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'slb_species.DateChecked';

    /** the column name for the Synopsis field */
    const SYNOPSIS = 'slb_species.Synopsis';

    /** the column name for the DateSynopsis field */
    const DATESYNOPSIS = 'slb_species.DateSynopsis';

    /** the column name for the Flag field */
    const FLAG = 'slb_species.Flag';

    /** the column name for the Comments field */
    const COMMENTS = 'slb_species.Comments';

    /** the column name for the VancouverAquarium field */
    const VANCOUVERAQUARIUM = 'slb_species.VancouverAquarium';

    /** the column name for the Profile field */
    const PROFILE = 'slb_species.Profile';

    /** the column name for the Sp2000_NameCode field */
    const SP2000_NAMECODE = 'slb_species.Sp2000_NameCode';

    /** the column name for the Sp2000_HierarchyCode field */
    const SP2000_HIERARCHYCODE = 'slb_species.Sp2000_HierarchyCode';

    /** the column name for the Sp2000_AuthorRefNumber field */
    const SP2000_AUTHORREFNUMBER = 'slb_species.Sp2000_AuthorRefNumber';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of SlbSpecies objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array SlbSpecies[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SlbSpeciesPeer::$fieldNames[SlbSpeciesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode', 'Genus', 'Species', 'Speciesrefno', 'Author', 'Authorref', 'Fbname', 'Famcode', 'Subfamily', 'Fossil', 'Periodrange', 'Period', 'Source', 'Remark', 'Fresh', 'Brack', 'Saltwater', 'Land', 'Demerspelag', 'Anacat', 'Migratref', 'Depthrangeshallow', 'Depthrangedeep', 'Depthrangeref', 'Depthrangecomshallow', 'Depthrangecomdeep', 'Depthcomref', 'Longevitywild', 'Longevitywildref', 'Longevitycaptive', 'Longevitycapref', 'Length', 'Ltypemaxm', 'Lengthfemale', 'Ltypemaxf', 'Maxlengthref', 'Commonlength', 'Ltypecomm', 'Commonlengthf', 'Ltypecomf', 'Commonlengthref', 'Weight', 'Weightfemale', 'Maxweightref', 'Pic', 'Picturefemale', 'Larvapic', 'Eggpic', 'Importanceref', 'Importance', 'Remarks7', 'Pricecateg', 'Pricereliability', 'Landingstatistics', 'Landings', 'Maincatchingmethod', 'Ii', 'Mseines', 'Mgillnets', 'Mcastnets', 'Mtraps', 'Mspears', 'Mtrawls', 'Mdredges', 'Mliftnets', 'Mhookslines', 'Mother', 'Usedforaquaculture', 'Lifecycle', 'Aquacultureref', 'Usedasbait', 'Baitref', 'Aquarium', 'Aquariumfishii', 'Aquariumref', 'Gamefish', 'Gameref', 'Dangerous', 'Dangerousref', 'Electrogenic', 'Electroref', 'Complete', 'Asfa', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Synopsis', 'Datesynopsis', 'Flag', 'Comments', 'Vancouveraquarium', 'Profile', 'Sp2000Namecode', 'Sp2000Hierarchycode', 'Sp2000Authorrefnumber', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode', 'genus', 'species', 'speciesrefno', 'author', 'authorref', 'fbname', 'famcode', 'subfamily', 'fossil', 'periodrange', 'period', 'source', 'remark', 'fresh', 'brack', 'saltwater', 'land', 'demerspelag', 'anacat', 'migratref', 'depthrangeshallow', 'depthrangedeep', 'depthrangeref', 'depthrangecomshallow', 'depthrangecomdeep', 'depthcomref', 'longevitywild', 'longevitywildref', 'longevitycaptive', 'longevitycapref', 'length', 'ltypemaxm', 'lengthfemale', 'ltypemaxf', 'maxlengthref', 'commonlength', 'ltypecomm', 'commonlengthf', 'ltypecomf', 'commonlengthref', 'weight', 'weightfemale', 'maxweightref', 'pic', 'picturefemale', 'larvapic', 'eggpic', 'importanceref', 'importance', 'remarks7', 'pricecateg', 'pricereliability', 'landingstatistics', 'landings', 'maincatchingmethod', 'ii', 'mseines', 'mgillnets', 'mcastnets', 'mtraps', 'mspears', 'mtrawls', 'mdredges', 'mliftnets', 'mhookslines', 'mother', 'usedforaquaculture', 'lifecycle', 'aquacultureref', 'usedasbait', 'baitref', 'aquarium', 'aquariumfishii', 'aquariumref', 'gamefish', 'gameref', 'dangerous', 'dangerousref', 'electrogenic', 'electroref', 'complete', 'asfa', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'synopsis', 'datesynopsis', 'flag', 'comments', 'vancouveraquarium', 'profile', 'sp2000Namecode', 'sp2000Hierarchycode', 'sp2000Authorrefnumber', ),
        BasePeer::TYPE_COLNAME => array (SlbSpeciesPeer::SPECCODE, SlbSpeciesPeer::GENUS, SlbSpeciesPeer::SPECIES, SlbSpeciesPeer::SPECIESREFNO, SlbSpeciesPeer::AUTHOR, SlbSpeciesPeer::AUTHORREF, SlbSpeciesPeer::FBNAME, SlbSpeciesPeer::FAMCODE, SlbSpeciesPeer::SUBFAMILY, SlbSpeciesPeer::FOSSIL, SlbSpeciesPeer::PERIODRANGE, SlbSpeciesPeer::PERIOD, SlbSpeciesPeer::SOURCE, SlbSpeciesPeer::REMARK, SlbSpeciesPeer::FRESH, SlbSpeciesPeer::BRACK, SlbSpeciesPeer::SALTWATER, SlbSpeciesPeer::LAND, SlbSpeciesPeer::DEMERSPELAG, SlbSpeciesPeer::ANACAT, SlbSpeciesPeer::MIGRATREF, SlbSpeciesPeer::DEPTHRANGESHALLOW, SlbSpeciesPeer::DEPTHRANGEDEEP, SlbSpeciesPeer::DEPTHRANGEREF, SlbSpeciesPeer::DEPTHRANGECOMSHALLOW, SlbSpeciesPeer::DEPTHRANGECOMDEEP, SlbSpeciesPeer::DEPTHCOMREF, SlbSpeciesPeer::LONGEVITYWILD, SlbSpeciesPeer::LONGEVITYWILDREF, SlbSpeciesPeer::LONGEVITYCAPTIVE, SlbSpeciesPeer::LONGEVITYCAPREF, SlbSpeciesPeer::LENGTH, SlbSpeciesPeer::LTYPEMAXM, SlbSpeciesPeer::LENGTHFEMALE, SlbSpeciesPeer::LTYPEMAXF, SlbSpeciesPeer::MAXLENGTHREF, SlbSpeciesPeer::COMMONLENGTH, SlbSpeciesPeer::LTYPECOMM, SlbSpeciesPeer::COMMONLENGTHF, SlbSpeciesPeer::LTYPECOMF, SlbSpeciesPeer::COMMONLENGTHREF, SlbSpeciesPeer::WEIGHT, SlbSpeciesPeer::WEIGHTFEMALE, SlbSpeciesPeer::MAXWEIGHTREF, SlbSpeciesPeer::PIC, SlbSpeciesPeer::PICTUREFEMALE, SlbSpeciesPeer::LARVAPIC, SlbSpeciesPeer::EGGPIC, SlbSpeciesPeer::IMPORTANCEREF, SlbSpeciesPeer::IMPORTANCE, SlbSpeciesPeer::REMARKS7, SlbSpeciesPeer::PRICECATEG, SlbSpeciesPeer::PRICERELIABILITY, SlbSpeciesPeer::LANDINGSTATISTICS, SlbSpeciesPeer::LANDINGS, SlbSpeciesPeer::MAINCATCHINGMETHOD, SlbSpeciesPeer::II, SlbSpeciesPeer::MSEINES, SlbSpeciesPeer::MGILLNETS, SlbSpeciesPeer::MCASTNETS, SlbSpeciesPeer::MTRAPS, SlbSpeciesPeer::MSPEARS, SlbSpeciesPeer::MTRAWLS, SlbSpeciesPeer::MDREDGES, SlbSpeciesPeer::MLIFTNETS, SlbSpeciesPeer::MHOOKSLINES, SlbSpeciesPeer::MOTHER, SlbSpeciesPeer::USEDFORAQUACULTURE, SlbSpeciesPeer::LIFECYCLE, SlbSpeciesPeer::AQUACULTUREREF, SlbSpeciesPeer::USEDASBAIT, SlbSpeciesPeer::BAITREF, SlbSpeciesPeer::AQUARIUM, SlbSpeciesPeer::AQUARIUMFISHII, SlbSpeciesPeer::AQUARIUMREF, SlbSpeciesPeer::GAMEFISH, SlbSpeciesPeer::GAMEREF, SlbSpeciesPeer::DANGEROUS, SlbSpeciesPeer::DANGEROUSREF, SlbSpeciesPeer::ELECTROGENIC, SlbSpeciesPeer::ELECTROREF, SlbSpeciesPeer::COMPLETE, SlbSpeciesPeer::ASFA, SlbSpeciesPeer::ENTERED, SlbSpeciesPeer::DATEENTERED, SlbSpeciesPeer::MODIFIED, SlbSpeciesPeer::DATEMODIFIED, SlbSpeciesPeer::EXPERT, SlbSpeciesPeer::DATECHECKED, SlbSpeciesPeer::SYNOPSIS, SlbSpeciesPeer::DATESYNOPSIS, SlbSpeciesPeer::FLAG, SlbSpeciesPeer::COMMENTS, SlbSpeciesPeer::VANCOUVERAQUARIUM, SlbSpeciesPeer::PROFILE, SlbSpeciesPeer::SP2000_NAMECODE, SlbSpeciesPeer::SP2000_HIERARCHYCODE, SlbSpeciesPeer::SP2000_AUTHORREFNUMBER, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE', 'GENUS', 'SPECIES', 'SPECIESREFNO', 'AUTHOR', 'AUTHORREF', 'FBNAME', 'FAMCODE', 'SUBFAMILY', 'FOSSIL', 'PERIODRANGE', 'PERIOD', 'SOURCE', 'REMARK', 'FRESH', 'BRACK', 'SALTWATER', 'LAND', 'DEMERSPELAG', 'ANACAT', 'MIGRATREF', 'DEPTHRANGESHALLOW', 'DEPTHRANGEDEEP', 'DEPTHRANGEREF', 'DEPTHRANGECOMSHALLOW', 'DEPTHRANGECOMDEEP', 'DEPTHCOMREF', 'LONGEVITYWILD', 'LONGEVITYWILDREF', 'LONGEVITYCAPTIVE', 'LONGEVITYCAPREF', 'LENGTH', 'LTYPEMAXM', 'LENGTHFEMALE', 'LTYPEMAXF', 'MAXLENGTHREF', 'COMMONLENGTH', 'LTYPECOMM', 'COMMONLENGTHF', 'LTYPECOMF', 'COMMONLENGTHREF', 'WEIGHT', 'WEIGHTFEMALE', 'MAXWEIGHTREF', 'PIC', 'PICTUREFEMALE', 'LARVAPIC', 'EGGPIC', 'IMPORTANCEREF', 'IMPORTANCE', 'REMARKS7', 'PRICECATEG', 'PRICERELIABILITY', 'LANDINGSTATISTICS', 'LANDINGS', 'MAINCATCHINGMETHOD', 'II', 'MSEINES', 'MGILLNETS', 'MCASTNETS', 'MTRAPS', 'MSPEARS', 'MTRAWLS', 'MDREDGES', 'MLIFTNETS', 'MHOOKSLINES', 'MOTHER', 'USEDFORAQUACULTURE', 'LIFECYCLE', 'AQUACULTUREREF', 'USEDASBAIT', 'BAITREF', 'AQUARIUM', 'AQUARIUMFISHII', 'AQUARIUMREF', 'GAMEFISH', 'GAMEREF', 'DANGEROUS', 'DANGEROUSREF', 'ELECTROGENIC', 'ELECTROREF', 'COMPLETE', 'ASFA', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'SYNOPSIS', 'DATESYNOPSIS', 'FLAG', 'COMMENTS', 'VANCOUVERAQUARIUM', 'PROFILE', 'SP2000_NAMECODE', 'SP2000_HIERARCHYCODE', 'SP2000_AUTHORREFNUMBER', ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode', 'Genus', 'Species', 'SpeciesRefNo', 'Author', 'AuthorRef', 'FBname', 'FamCode', 'Subfamily', 'Fossil', 'PeriodRange', 'Period', 'Source', 'Remark', 'Fresh', 'Brack', 'Saltwater', 'Land', 'DemersPelag', 'AnaCat', 'MigratRef', 'DepthRangeShallow', 'DepthRangeDeep', 'DepthRangeRef', 'DepthRangeComShallow', 'DepthRangeComDeep', 'DepthComRef', 'LongevityWild', 'LongevityWildRef', 'LongevityCaptive', 'LongevityCapRef', 'Length', 'LTypeMaxM', 'LengthFemale', 'LTypeMaxF', 'MaxLengthRef', 'CommonLength', 'LTypeComM', 'CommonLengthF', 'LTypeComF', 'CommonLengthRef', 'Weight', 'WeightFemale', 'MaxWeightRef', 'Pic', 'PictureFemale', 'LarvaPic', 'EggPic', 'ImportanceRef', 'Importance', 'Remarks7', 'PriceCateg', 'PriceReliability', 'LandingStatistics', 'Landings', 'MainCatchingMethod', 'II', 'MSeines', 'MGillnets', 'MCastnets', 'MTraps', 'MSpears', 'MTrawls', 'MDredges', 'MLiftnets', 'MHooksLines', 'MOther', 'UsedforAquaculture', 'LifeCycle', 'AquacultureRef', 'UsedasBait', 'BaitRef', 'Aquarium', 'AquariumFishII', 'AquariumRef', 'GameFish', 'GameRef', 'Dangerous', 'DangerousRef', 'Electrogenic', 'ElectroRef', 'Complete', 'ASFA', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Synopsis', 'DateSynopsis', 'Flag', 'Comments', 'VancouverAquarium', 'Profile', 'Sp2000_NameCode', 'Sp2000_HierarchyCode', 'Sp2000_AuthorRefNumber', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SlbSpeciesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode' => 0, 'Genus' => 1, 'Species' => 2, 'Speciesrefno' => 3, 'Author' => 4, 'Authorref' => 5, 'Fbname' => 6, 'Famcode' => 7, 'Subfamily' => 8, 'Fossil' => 9, 'Periodrange' => 10, 'Period' => 11, 'Source' => 12, 'Remark' => 13, 'Fresh' => 14, 'Brack' => 15, 'Saltwater' => 16, 'Land' => 17, 'Demerspelag' => 18, 'Anacat' => 19, 'Migratref' => 20, 'Depthrangeshallow' => 21, 'Depthrangedeep' => 22, 'Depthrangeref' => 23, 'Depthrangecomshallow' => 24, 'Depthrangecomdeep' => 25, 'Depthcomref' => 26, 'Longevitywild' => 27, 'Longevitywildref' => 28, 'Longevitycaptive' => 29, 'Longevitycapref' => 30, 'Length' => 31, 'Ltypemaxm' => 32, 'Lengthfemale' => 33, 'Ltypemaxf' => 34, 'Maxlengthref' => 35, 'Commonlength' => 36, 'Ltypecomm' => 37, 'Commonlengthf' => 38, 'Ltypecomf' => 39, 'Commonlengthref' => 40, 'Weight' => 41, 'Weightfemale' => 42, 'Maxweightref' => 43, 'Pic' => 44, 'Picturefemale' => 45, 'Larvapic' => 46, 'Eggpic' => 47, 'Importanceref' => 48, 'Importance' => 49, 'Remarks7' => 50, 'Pricecateg' => 51, 'Pricereliability' => 52, 'Landingstatistics' => 53, 'Landings' => 54, 'Maincatchingmethod' => 55, 'Ii' => 56, 'Mseines' => 57, 'Mgillnets' => 58, 'Mcastnets' => 59, 'Mtraps' => 60, 'Mspears' => 61, 'Mtrawls' => 62, 'Mdredges' => 63, 'Mliftnets' => 64, 'Mhookslines' => 65, 'Mother' => 66, 'Usedforaquaculture' => 67, 'Lifecycle' => 68, 'Aquacultureref' => 69, 'Usedasbait' => 70, 'Baitref' => 71, 'Aquarium' => 72, 'Aquariumfishii' => 73, 'Aquariumref' => 74, 'Gamefish' => 75, 'Gameref' => 76, 'Dangerous' => 77, 'Dangerousref' => 78, 'Electrogenic' => 79, 'Electroref' => 80, 'Complete' => 81, 'Asfa' => 82, 'Entered' => 83, 'Dateentered' => 84, 'Modified' => 85, 'Datemodified' => 86, 'Expert' => 87, 'Datechecked' => 88, 'Synopsis' => 89, 'Datesynopsis' => 90, 'Flag' => 91, 'Comments' => 92, 'Vancouveraquarium' => 93, 'Profile' => 94, 'Sp2000Namecode' => 95, 'Sp2000Hierarchycode' => 96, 'Sp2000Authorrefnumber' => 97, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode' => 0, 'genus' => 1, 'species' => 2, 'speciesrefno' => 3, 'author' => 4, 'authorref' => 5, 'fbname' => 6, 'famcode' => 7, 'subfamily' => 8, 'fossil' => 9, 'periodrange' => 10, 'period' => 11, 'source' => 12, 'remark' => 13, 'fresh' => 14, 'brack' => 15, 'saltwater' => 16, 'land' => 17, 'demerspelag' => 18, 'anacat' => 19, 'migratref' => 20, 'depthrangeshallow' => 21, 'depthrangedeep' => 22, 'depthrangeref' => 23, 'depthrangecomshallow' => 24, 'depthrangecomdeep' => 25, 'depthcomref' => 26, 'longevitywild' => 27, 'longevitywildref' => 28, 'longevitycaptive' => 29, 'longevitycapref' => 30, 'length' => 31, 'ltypemaxm' => 32, 'lengthfemale' => 33, 'ltypemaxf' => 34, 'maxlengthref' => 35, 'commonlength' => 36, 'ltypecomm' => 37, 'commonlengthf' => 38, 'ltypecomf' => 39, 'commonlengthref' => 40, 'weight' => 41, 'weightfemale' => 42, 'maxweightref' => 43, 'pic' => 44, 'picturefemale' => 45, 'larvapic' => 46, 'eggpic' => 47, 'importanceref' => 48, 'importance' => 49, 'remarks7' => 50, 'pricecateg' => 51, 'pricereliability' => 52, 'landingstatistics' => 53, 'landings' => 54, 'maincatchingmethod' => 55, 'ii' => 56, 'mseines' => 57, 'mgillnets' => 58, 'mcastnets' => 59, 'mtraps' => 60, 'mspears' => 61, 'mtrawls' => 62, 'mdredges' => 63, 'mliftnets' => 64, 'mhookslines' => 65, 'mother' => 66, 'usedforaquaculture' => 67, 'lifecycle' => 68, 'aquacultureref' => 69, 'usedasbait' => 70, 'baitref' => 71, 'aquarium' => 72, 'aquariumfishii' => 73, 'aquariumref' => 74, 'gamefish' => 75, 'gameref' => 76, 'dangerous' => 77, 'dangerousref' => 78, 'electrogenic' => 79, 'electroref' => 80, 'complete' => 81, 'asfa' => 82, 'entered' => 83, 'dateentered' => 84, 'modified' => 85, 'datemodified' => 86, 'expert' => 87, 'datechecked' => 88, 'synopsis' => 89, 'datesynopsis' => 90, 'flag' => 91, 'comments' => 92, 'vancouveraquarium' => 93, 'profile' => 94, 'sp2000Namecode' => 95, 'sp2000Hierarchycode' => 96, 'sp2000Authorrefnumber' => 97, ),
        BasePeer::TYPE_COLNAME => array (SlbSpeciesPeer::SPECCODE => 0, SlbSpeciesPeer::GENUS => 1, SlbSpeciesPeer::SPECIES => 2, SlbSpeciesPeer::SPECIESREFNO => 3, SlbSpeciesPeer::AUTHOR => 4, SlbSpeciesPeer::AUTHORREF => 5, SlbSpeciesPeer::FBNAME => 6, SlbSpeciesPeer::FAMCODE => 7, SlbSpeciesPeer::SUBFAMILY => 8, SlbSpeciesPeer::FOSSIL => 9, SlbSpeciesPeer::PERIODRANGE => 10, SlbSpeciesPeer::PERIOD => 11, SlbSpeciesPeer::SOURCE => 12, SlbSpeciesPeer::REMARK => 13, SlbSpeciesPeer::FRESH => 14, SlbSpeciesPeer::BRACK => 15, SlbSpeciesPeer::SALTWATER => 16, SlbSpeciesPeer::LAND => 17, SlbSpeciesPeer::DEMERSPELAG => 18, SlbSpeciesPeer::ANACAT => 19, SlbSpeciesPeer::MIGRATREF => 20, SlbSpeciesPeer::DEPTHRANGESHALLOW => 21, SlbSpeciesPeer::DEPTHRANGEDEEP => 22, SlbSpeciesPeer::DEPTHRANGEREF => 23, SlbSpeciesPeer::DEPTHRANGECOMSHALLOW => 24, SlbSpeciesPeer::DEPTHRANGECOMDEEP => 25, SlbSpeciesPeer::DEPTHCOMREF => 26, SlbSpeciesPeer::LONGEVITYWILD => 27, SlbSpeciesPeer::LONGEVITYWILDREF => 28, SlbSpeciesPeer::LONGEVITYCAPTIVE => 29, SlbSpeciesPeer::LONGEVITYCAPREF => 30, SlbSpeciesPeer::LENGTH => 31, SlbSpeciesPeer::LTYPEMAXM => 32, SlbSpeciesPeer::LENGTHFEMALE => 33, SlbSpeciesPeer::LTYPEMAXF => 34, SlbSpeciesPeer::MAXLENGTHREF => 35, SlbSpeciesPeer::COMMONLENGTH => 36, SlbSpeciesPeer::LTYPECOMM => 37, SlbSpeciesPeer::COMMONLENGTHF => 38, SlbSpeciesPeer::LTYPECOMF => 39, SlbSpeciesPeer::COMMONLENGTHREF => 40, SlbSpeciesPeer::WEIGHT => 41, SlbSpeciesPeer::WEIGHTFEMALE => 42, SlbSpeciesPeer::MAXWEIGHTREF => 43, SlbSpeciesPeer::PIC => 44, SlbSpeciesPeer::PICTUREFEMALE => 45, SlbSpeciesPeer::LARVAPIC => 46, SlbSpeciesPeer::EGGPIC => 47, SlbSpeciesPeer::IMPORTANCEREF => 48, SlbSpeciesPeer::IMPORTANCE => 49, SlbSpeciesPeer::REMARKS7 => 50, SlbSpeciesPeer::PRICECATEG => 51, SlbSpeciesPeer::PRICERELIABILITY => 52, SlbSpeciesPeer::LANDINGSTATISTICS => 53, SlbSpeciesPeer::LANDINGS => 54, SlbSpeciesPeer::MAINCATCHINGMETHOD => 55, SlbSpeciesPeer::II => 56, SlbSpeciesPeer::MSEINES => 57, SlbSpeciesPeer::MGILLNETS => 58, SlbSpeciesPeer::MCASTNETS => 59, SlbSpeciesPeer::MTRAPS => 60, SlbSpeciesPeer::MSPEARS => 61, SlbSpeciesPeer::MTRAWLS => 62, SlbSpeciesPeer::MDREDGES => 63, SlbSpeciesPeer::MLIFTNETS => 64, SlbSpeciesPeer::MHOOKSLINES => 65, SlbSpeciesPeer::MOTHER => 66, SlbSpeciesPeer::USEDFORAQUACULTURE => 67, SlbSpeciesPeer::LIFECYCLE => 68, SlbSpeciesPeer::AQUACULTUREREF => 69, SlbSpeciesPeer::USEDASBAIT => 70, SlbSpeciesPeer::BAITREF => 71, SlbSpeciesPeer::AQUARIUM => 72, SlbSpeciesPeer::AQUARIUMFISHII => 73, SlbSpeciesPeer::AQUARIUMREF => 74, SlbSpeciesPeer::GAMEFISH => 75, SlbSpeciesPeer::GAMEREF => 76, SlbSpeciesPeer::DANGEROUS => 77, SlbSpeciesPeer::DANGEROUSREF => 78, SlbSpeciesPeer::ELECTROGENIC => 79, SlbSpeciesPeer::ELECTROREF => 80, SlbSpeciesPeer::COMPLETE => 81, SlbSpeciesPeer::ASFA => 82, SlbSpeciesPeer::ENTERED => 83, SlbSpeciesPeer::DATEENTERED => 84, SlbSpeciesPeer::MODIFIED => 85, SlbSpeciesPeer::DATEMODIFIED => 86, SlbSpeciesPeer::EXPERT => 87, SlbSpeciesPeer::DATECHECKED => 88, SlbSpeciesPeer::SYNOPSIS => 89, SlbSpeciesPeer::DATESYNOPSIS => 90, SlbSpeciesPeer::FLAG => 91, SlbSpeciesPeer::COMMENTS => 92, SlbSpeciesPeer::VANCOUVERAQUARIUM => 93, SlbSpeciesPeer::PROFILE => 94, SlbSpeciesPeer::SP2000_NAMECODE => 95, SlbSpeciesPeer::SP2000_HIERARCHYCODE => 96, SlbSpeciesPeer::SP2000_AUTHORREFNUMBER => 97, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE' => 0, 'GENUS' => 1, 'SPECIES' => 2, 'SPECIESREFNO' => 3, 'AUTHOR' => 4, 'AUTHORREF' => 5, 'FBNAME' => 6, 'FAMCODE' => 7, 'SUBFAMILY' => 8, 'FOSSIL' => 9, 'PERIODRANGE' => 10, 'PERIOD' => 11, 'SOURCE' => 12, 'REMARK' => 13, 'FRESH' => 14, 'BRACK' => 15, 'SALTWATER' => 16, 'LAND' => 17, 'DEMERSPELAG' => 18, 'ANACAT' => 19, 'MIGRATREF' => 20, 'DEPTHRANGESHALLOW' => 21, 'DEPTHRANGEDEEP' => 22, 'DEPTHRANGEREF' => 23, 'DEPTHRANGECOMSHALLOW' => 24, 'DEPTHRANGECOMDEEP' => 25, 'DEPTHCOMREF' => 26, 'LONGEVITYWILD' => 27, 'LONGEVITYWILDREF' => 28, 'LONGEVITYCAPTIVE' => 29, 'LONGEVITYCAPREF' => 30, 'LENGTH' => 31, 'LTYPEMAXM' => 32, 'LENGTHFEMALE' => 33, 'LTYPEMAXF' => 34, 'MAXLENGTHREF' => 35, 'COMMONLENGTH' => 36, 'LTYPECOMM' => 37, 'COMMONLENGTHF' => 38, 'LTYPECOMF' => 39, 'COMMONLENGTHREF' => 40, 'WEIGHT' => 41, 'WEIGHTFEMALE' => 42, 'MAXWEIGHTREF' => 43, 'PIC' => 44, 'PICTUREFEMALE' => 45, 'LARVAPIC' => 46, 'EGGPIC' => 47, 'IMPORTANCEREF' => 48, 'IMPORTANCE' => 49, 'REMARKS7' => 50, 'PRICECATEG' => 51, 'PRICERELIABILITY' => 52, 'LANDINGSTATISTICS' => 53, 'LANDINGS' => 54, 'MAINCATCHINGMETHOD' => 55, 'II' => 56, 'MSEINES' => 57, 'MGILLNETS' => 58, 'MCASTNETS' => 59, 'MTRAPS' => 60, 'MSPEARS' => 61, 'MTRAWLS' => 62, 'MDREDGES' => 63, 'MLIFTNETS' => 64, 'MHOOKSLINES' => 65, 'MOTHER' => 66, 'USEDFORAQUACULTURE' => 67, 'LIFECYCLE' => 68, 'AQUACULTUREREF' => 69, 'USEDASBAIT' => 70, 'BAITREF' => 71, 'AQUARIUM' => 72, 'AQUARIUMFISHII' => 73, 'AQUARIUMREF' => 74, 'GAMEFISH' => 75, 'GAMEREF' => 76, 'DANGEROUS' => 77, 'DANGEROUSREF' => 78, 'ELECTROGENIC' => 79, 'ELECTROREF' => 80, 'COMPLETE' => 81, 'ASFA' => 82, 'ENTERED' => 83, 'DATEENTERED' => 84, 'MODIFIED' => 85, 'DATEMODIFIED' => 86, 'EXPERT' => 87, 'DATECHECKED' => 88, 'SYNOPSIS' => 89, 'DATESYNOPSIS' => 90, 'FLAG' => 91, 'COMMENTS' => 92, 'VANCOUVERAQUARIUM' => 93, 'PROFILE' => 94, 'SP2000_NAMECODE' => 95, 'SP2000_HIERARCHYCODE' => 96, 'SP2000_AUTHORREFNUMBER' => 97, ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode' => 0, 'Genus' => 1, 'Species' => 2, 'SpeciesRefNo' => 3, 'Author' => 4, 'AuthorRef' => 5, 'FBname' => 6, 'FamCode' => 7, 'Subfamily' => 8, 'Fossil' => 9, 'PeriodRange' => 10, 'Period' => 11, 'Source' => 12, 'Remark' => 13, 'Fresh' => 14, 'Brack' => 15, 'Saltwater' => 16, 'Land' => 17, 'DemersPelag' => 18, 'AnaCat' => 19, 'MigratRef' => 20, 'DepthRangeShallow' => 21, 'DepthRangeDeep' => 22, 'DepthRangeRef' => 23, 'DepthRangeComShallow' => 24, 'DepthRangeComDeep' => 25, 'DepthComRef' => 26, 'LongevityWild' => 27, 'LongevityWildRef' => 28, 'LongevityCaptive' => 29, 'LongevityCapRef' => 30, 'Length' => 31, 'LTypeMaxM' => 32, 'LengthFemale' => 33, 'LTypeMaxF' => 34, 'MaxLengthRef' => 35, 'CommonLength' => 36, 'LTypeComM' => 37, 'CommonLengthF' => 38, 'LTypeComF' => 39, 'CommonLengthRef' => 40, 'Weight' => 41, 'WeightFemale' => 42, 'MaxWeightRef' => 43, 'Pic' => 44, 'PictureFemale' => 45, 'LarvaPic' => 46, 'EggPic' => 47, 'ImportanceRef' => 48, 'Importance' => 49, 'Remarks7' => 50, 'PriceCateg' => 51, 'PriceReliability' => 52, 'LandingStatistics' => 53, 'Landings' => 54, 'MainCatchingMethod' => 55, 'II' => 56, 'MSeines' => 57, 'MGillnets' => 58, 'MCastnets' => 59, 'MTraps' => 60, 'MSpears' => 61, 'MTrawls' => 62, 'MDredges' => 63, 'MLiftnets' => 64, 'MHooksLines' => 65, 'MOther' => 66, 'UsedforAquaculture' => 67, 'LifeCycle' => 68, 'AquacultureRef' => 69, 'UsedasBait' => 70, 'BaitRef' => 71, 'Aquarium' => 72, 'AquariumFishII' => 73, 'AquariumRef' => 74, 'GameFish' => 75, 'GameRef' => 76, 'Dangerous' => 77, 'DangerousRef' => 78, 'Electrogenic' => 79, 'ElectroRef' => 80, 'Complete' => 81, 'ASFA' => 82, 'Entered' => 83, 'DateEntered' => 84, 'Modified' => 85, 'DateModified' => 86, 'Expert' => 87, 'DateChecked' => 88, 'Synopsis' => 89, 'DateSynopsis' => 90, 'Flag' => 91, 'Comments' => 92, 'VancouverAquarium' => 93, 'Profile' => 94, 'Sp2000_NameCode' => 95, 'Sp2000_HierarchyCode' => 96, 'Sp2000_AuthorRefNumber' => 97, ),
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
        $toNames = SlbSpeciesPeer::getFieldNames($toType);
        $key = isset(SlbSpeciesPeer::$fieldKeys[$fromType][$name]) ? SlbSpeciesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SlbSpeciesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SlbSpeciesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SlbSpeciesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SlbSpeciesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SlbSpeciesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SlbSpeciesPeer::SPECCODE);
            $criteria->addSelectColumn(SlbSpeciesPeer::GENUS);
            $criteria->addSelectColumn(SlbSpeciesPeer::SPECIES);
            $criteria->addSelectColumn(SlbSpeciesPeer::SPECIESREFNO);
            $criteria->addSelectColumn(SlbSpeciesPeer::AUTHOR);
            $criteria->addSelectColumn(SlbSpeciesPeer::AUTHORREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::FBNAME);
            $criteria->addSelectColumn(SlbSpeciesPeer::FAMCODE);
            $criteria->addSelectColumn(SlbSpeciesPeer::SUBFAMILY);
            $criteria->addSelectColumn(SlbSpeciesPeer::FOSSIL);
            $criteria->addSelectColumn(SlbSpeciesPeer::PERIODRANGE);
            $criteria->addSelectColumn(SlbSpeciesPeer::PERIOD);
            $criteria->addSelectColumn(SlbSpeciesPeer::SOURCE);
            $criteria->addSelectColumn(SlbSpeciesPeer::REMARK);
            $criteria->addSelectColumn(SlbSpeciesPeer::FRESH);
            $criteria->addSelectColumn(SlbSpeciesPeer::BRACK);
            $criteria->addSelectColumn(SlbSpeciesPeer::SALTWATER);
            $criteria->addSelectColumn(SlbSpeciesPeer::LAND);
            $criteria->addSelectColumn(SlbSpeciesPeer::DEMERSPELAG);
            $criteria->addSelectColumn(SlbSpeciesPeer::ANACAT);
            $criteria->addSelectColumn(SlbSpeciesPeer::MIGRATREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::DEPTHRANGESHALLOW);
            $criteria->addSelectColumn(SlbSpeciesPeer::DEPTHRANGEDEEP);
            $criteria->addSelectColumn(SlbSpeciesPeer::DEPTHRANGEREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::DEPTHRANGECOMSHALLOW);
            $criteria->addSelectColumn(SlbSpeciesPeer::DEPTHRANGECOMDEEP);
            $criteria->addSelectColumn(SlbSpeciesPeer::DEPTHCOMREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::LONGEVITYWILD);
            $criteria->addSelectColumn(SlbSpeciesPeer::LONGEVITYWILDREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::LONGEVITYCAPTIVE);
            $criteria->addSelectColumn(SlbSpeciesPeer::LONGEVITYCAPREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::LENGTH);
            $criteria->addSelectColumn(SlbSpeciesPeer::LTYPEMAXM);
            $criteria->addSelectColumn(SlbSpeciesPeer::LENGTHFEMALE);
            $criteria->addSelectColumn(SlbSpeciesPeer::LTYPEMAXF);
            $criteria->addSelectColumn(SlbSpeciesPeer::MAXLENGTHREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::COMMONLENGTH);
            $criteria->addSelectColumn(SlbSpeciesPeer::LTYPECOMM);
            $criteria->addSelectColumn(SlbSpeciesPeer::COMMONLENGTHF);
            $criteria->addSelectColumn(SlbSpeciesPeer::LTYPECOMF);
            $criteria->addSelectColumn(SlbSpeciesPeer::COMMONLENGTHREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::WEIGHT);
            $criteria->addSelectColumn(SlbSpeciesPeer::WEIGHTFEMALE);
            $criteria->addSelectColumn(SlbSpeciesPeer::MAXWEIGHTREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::PIC);
            $criteria->addSelectColumn(SlbSpeciesPeer::PICTUREFEMALE);
            $criteria->addSelectColumn(SlbSpeciesPeer::LARVAPIC);
            $criteria->addSelectColumn(SlbSpeciesPeer::EGGPIC);
            $criteria->addSelectColumn(SlbSpeciesPeer::IMPORTANCEREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::IMPORTANCE);
            $criteria->addSelectColumn(SlbSpeciesPeer::REMARKS7);
            $criteria->addSelectColumn(SlbSpeciesPeer::PRICECATEG);
            $criteria->addSelectColumn(SlbSpeciesPeer::PRICERELIABILITY);
            $criteria->addSelectColumn(SlbSpeciesPeer::LANDINGSTATISTICS);
            $criteria->addSelectColumn(SlbSpeciesPeer::LANDINGS);
            $criteria->addSelectColumn(SlbSpeciesPeer::MAINCATCHINGMETHOD);
            $criteria->addSelectColumn(SlbSpeciesPeer::II);
            $criteria->addSelectColumn(SlbSpeciesPeer::MSEINES);
            $criteria->addSelectColumn(SlbSpeciesPeer::MGILLNETS);
            $criteria->addSelectColumn(SlbSpeciesPeer::MCASTNETS);
            $criteria->addSelectColumn(SlbSpeciesPeer::MTRAPS);
            $criteria->addSelectColumn(SlbSpeciesPeer::MSPEARS);
            $criteria->addSelectColumn(SlbSpeciesPeer::MTRAWLS);
            $criteria->addSelectColumn(SlbSpeciesPeer::MDREDGES);
            $criteria->addSelectColumn(SlbSpeciesPeer::MLIFTNETS);
            $criteria->addSelectColumn(SlbSpeciesPeer::MHOOKSLINES);
            $criteria->addSelectColumn(SlbSpeciesPeer::MOTHER);
            $criteria->addSelectColumn(SlbSpeciesPeer::USEDFORAQUACULTURE);
            $criteria->addSelectColumn(SlbSpeciesPeer::LIFECYCLE);
            $criteria->addSelectColumn(SlbSpeciesPeer::AQUACULTUREREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::USEDASBAIT);
            $criteria->addSelectColumn(SlbSpeciesPeer::BAITREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::AQUARIUM);
            $criteria->addSelectColumn(SlbSpeciesPeer::AQUARIUMFISHII);
            $criteria->addSelectColumn(SlbSpeciesPeer::AQUARIUMREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::GAMEFISH);
            $criteria->addSelectColumn(SlbSpeciesPeer::GAMEREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::DANGEROUS);
            $criteria->addSelectColumn(SlbSpeciesPeer::DANGEROUSREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::ELECTROGENIC);
            $criteria->addSelectColumn(SlbSpeciesPeer::ELECTROREF);
            $criteria->addSelectColumn(SlbSpeciesPeer::COMPLETE);
            $criteria->addSelectColumn(SlbSpeciesPeer::ASFA);
            $criteria->addSelectColumn(SlbSpeciesPeer::ENTERED);
            $criteria->addSelectColumn(SlbSpeciesPeer::DATEENTERED);
            $criteria->addSelectColumn(SlbSpeciesPeer::MODIFIED);
            $criteria->addSelectColumn(SlbSpeciesPeer::DATEMODIFIED);
            $criteria->addSelectColumn(SlbSpeciesPeer::EXPERT);
            $criteria->addSelectColumn(SlbSpeciesPeer::DATECHECKED);
            $criteria->addSelectColumn(SlbSpeciesPeer::SYNOPSIS);
            $criteria->addSelectColumn(SlbSpeciesPeer::DATESYNOPSIS);
            $criteria->addSelectColumn(SlbSpeciesPeer::FLAG);
            $criteria->addSelectColumn(SlbSpeciesPeer::COMMENTS);
            $criteria->addSelectColumn(SlbSpeciesPeer::VANCOUVERAQUARIUM);
            $criteria->addSelectColumn(SlbSpeciesPeer::PROFILE);
            $criteria->addSelectColumn(SlbSpeciesPeer::SP2000_NAMECODE);
            $criteria->addSelectColumn(SlbSpeciesPeer::SP2000_HIERARCHYCODE);
            $criteria->addSelectColumn(SlbSpeciesPeer::SP2000_AUTHORREFNUMBER);
        } else {
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.SpeciesRefNo');
            $criteria->addSelectColumn($alias . '.Author');
            $criteria->addSelectColumn($alias . '.AuthorRef');
            $criteria->addSelectColumn($alias . '.FBname');
            $criteria->addSelectColumn($alias . '.FamCode');
            $criteria->addSelectColumn($alias . '.Subfamily');
            $criteria->addSelectColumn($alias . '.Fossil');
            $criteria->addSelectColumn($alias . '.PeriodRange');
            $criteria->addSelectColumn($alias . '.Period');
            $criteria->addSelectColumn($alias . '.Source');
            $criteria->addSelectColumn($alias . '.Remark');
            $criteria->addSelectColumn($alias . '.Fresh');
            $criteria->addSelectColumn($alias . '.Brack');
            $criteria->addSelectColumn($alias . '.Saltwater');
            $criteria->addSelectColumn($alias . '.Land');
            $criteria->addSelectColumn($alias . '.DemersPelag');
            $criteria->addSelectColumn($alias . '.AnaCat');
            $criteria->addSelectColumn($alias . '.MigratRef');
            $criteria->addSelectColumn($alias . '.DepthRangeShallow');
            $criteria->addSelectColumn($alias . '.DepthRangeDeep');
            $criteria->addSelectColumn($alias . '.DepthRangeRef');
            $criteria->addSelectColumn($alias . '.DepthRangeComShallow');
            $criteria->addSelectColumn($alias . '.DepthRangeComDeep');
            $criteria->addSelectColumn($alias . '.DepthComRef');
            $criteria->addSelectColumn($alias . '.LongevityWild');
            $criteria->addSelectColumn($alias . '.LongevityWildRef');
            $criteria->addSelectColumn($alias . '.LongevityCaptive');
            $criteria->addSelectColumn($alias . '.LongevityCapRef');
            $criteria->addSelectColumn($alias . '.Length');
            $criteria->addSelectColumn($alias . '.LTypeMaxM');
            $criteria->addSelectColumn($alias . '.LengthFemale');
            $criteria->addSelectColumn($alias . '.LTypeMaxF');
            $criteria->addSelectColumn($alias . '.MaxLengthRef');
            $criteria->addSelectColumn($alias . '.CommonLength');
            $criteria->addSelectColumn($alias . '.LTypeComM');
            $criteria->addSelectColumn($alias . '.CommonLengthF');
            $criteria->addSelectColumn($alias . '.LTypeComF');
            $criteria->addSelectColumn($alias . '.CommonLengthRef');
            $criteria->addSelectColumn($alias . '.Weight');
            $criteria->addSelectColumn($alias . '.WeightFemale');
            $criteria->addSelectColumn($alias . '.MaxWeightRef');
            $criteria->addSelectColumn($alias . '.Pic');
            $criteria->addSelectColumn($alias . '.PictureFemale');
            $criteria->addSelectColumn($alias . '.LarvaPic');
            $criteria->addSelectColumn($alias . '.EggPic');
            $criteria->addSelectColumn($alias . '.ImportanceRef');
            $criteria->addSelectColumn($alias . '.Importance');
            $criteria->addSelectColumn($alias . '.Remarks7');
            $criteria->addSelectColumn($alias . '.PriceCateg');
            $criteria->addSelectColumn($alias . '.PriceReliability');
            $criteria->addSelectColumn($alias . '.LandingStatistics');
            $criteria->addSelectColumn($alias . '.Landings');
            $criteria->addSelectColumn($alias . '.MainCatchingMethod');
            $criteria->addSelectColumn($alias . '.II');
            $criteria->addSelectColumn($alias . '.MSeines');
            $criteria->addSelectColumn($alias . '.MGillnets');
            $criteria->addSelectColumn($alias . '.MCastnets');
            $criteria->addSelectColumn($alias . '.MTraps');
            $criteria->addSelectColumn($alias . '.MSpears');
            $criteria->addSelectColumn($alias . '.MTrawls');
            $criteria->addSelectColumn($alias . '.MDredges');
            $criteria->addSelectColumn($alias . '.MLiftnets');
            $criteria->addSelectColumn($alias . '.MHooksLines');
            $criteria->addSelectColumn($alias . '.MOther');
            $criteria->addSelectColumn($alias . '.UsedforAquaculture');
            $criteria->addSelectColumn($alias . '.LifeCycle');
            $criteria->addSelectColumn($alias . '.AquacultureRef');
            $criteria->addSelectColumn($alias . '.UsedasBait');
            $criteria->addSelectColumn($alias . '.BaitRef');
            $criteria->addSelectColumn($alias . '.Aquarium');
            $criteria->addSelectColumn($alias . '.AquariumFishII');
            $criteria->addSelectColumn($alias . '.AquariumRef');
            $criteria->addSelectColumn($alias . '.GameFish');
            $criteria->addSelectColumn($alias . '.GameRef');
            $criteria->addSelectColumn($alias . '.Dangerous');
            $criteria->addSelectColumn($alias . '.DangerousRef');
            $criteria->addSelectColumn($alias . '.Electrogenic');
            $criteria->addSelectColumn($alias . '.ElectroRef');
            $criteria->addSelectColumn($alias . '.Complete');
            $criteria->addSelectColumn($alias . '.ASFA');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Synopsis');
            $criteria->addSelectColumn($alias . '.DateSynopsis');
            $criteria->addSelectColumn($alias . '.Flag');
            $criteria->addSelectColumn($alias . '.Comments');
            $criteria->addSelectColumn($alias . '.VancouverAquarium');
            $criteria->addSelectColumn($alias . '.Profile');
            $criteria->addSelectColumn($alias . '.Sp2000_NameCode');
            $criteria->addSelectColumn($alias . '.Sp2000_HierarchyCode');
            $criteria->addSelectColumn($alias . '.Sp2000_AuthorRefNumber');
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
        $criteria->setPrimaryTableName(SlbSpeciesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SlbSpeciesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SlbSpeciesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SlbSpeciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return SlbSpecies
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SlbSpeciesPeer::doSelect($critcopy, $con);
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
        return SlbSpeciesPeer::populateObjects(SlbSpeciesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SlbSpeciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SlbSpeciesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SlbSpeciesPeer::DATABASE_NAME);

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
     * @param SlbSpecies $obj A SlbSpecies object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getGenus(), (string) $obj->getSpecies()));
            } // if key === null
            SlbSpeciesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A SlbSpecies object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof SlbSpecies) {
                $key = serialize(array((string) $value->getGenus(), (string) $value->getSpecies()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or SlbSpecies object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SlbSpeciesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return SlbSpecies Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SlbSpeciesPeer::$instances[$key])) {
                return SlbSpeciesPeer::$instances[$key];
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
        foreach (SlbSpeciesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SlbSpeciesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to slb_species
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
        if ($row[$startcol + 1] === null && $row[$startcol + 2] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 2]));
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

        return array((string) $row[$startcol + 1], (string) $row[$startcol + 2]);
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
        $cls = SlbSpeciesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SlbSpeciesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SlbSpeciesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SlbSpeciesPeer::addInstanceToPool($obj, $key);
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
     * @return array (SlbSpecies object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SlbSpeciesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SlbSpeciesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SlbSpeciesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SlbSpeciesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SlbSpeciesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(SlbSpeciesPeer::DATABASE_NAME)->getTable(SlbSpeciesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSlbSpeciesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSlbSpeciesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SlbSpeciesTableMap());
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
        return SlbSpeciesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a SlbSpecies or Criteria object.
     *
     * @param      mixed $values Criteria or SlbSpecies object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SlbSpeciesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from SlbSpecies object
        }


        // Set the correct dbName
        $criteria->setDbName(SlbSpeciesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a SlbSpecies or Criteria object.
     *
     * @param      mixed $values Criteria or SlbSpecies object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SlbSpeciesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SlbSpeciesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SlbSpeciesPeer::GENUS);
            $value = $criteria->remove(SlbSpeciesPeer::GENUS);
            if ($value) {
                $selectCriteria->add(SlbSpeciesPeer::GENUS, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SlbSpeciesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SlbSpeciesPeer::SPECIES);
            $value = $criteria->remove(SlbSpeciesPeer::SPECIES);
            if ($value) {
                $selectCriteria->add(SlbSpeciesPeer::SPECIES, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SlbSpeciesPeer::TABLE_NAME);
            }

        } else { // $values is SlbSpecies object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SlbSpeciesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the slb_species table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SlbSpeciesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SlbSpeciesPeer::TABLE_NAME, $con, SlbSpeciesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SlbSpeciesPeer::clearInstancePool();
            SlbSpeciesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a SlbSpecies or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or SlbSpecies object or primary key or array of primary keys
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
            $con = Propel::getConnection(SlbSpeciesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SlbSpeciesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof SlbSpecies) { // it's a model object
            // invalidate the cache for this single object
            SlbSpeciesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SlbSpeciesPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SlbSpeciesPeer::GENUS, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SlbSpeciesPeer::SPECIES, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                SlbSpeciesPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SlbSpeciesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SlbSpeciesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given SlbSpecies object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param SlbSpecies $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SlbSpeciesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SlbSpeciesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SlbSpeciesPeer::DATABASE_NAME, SlbSpeciesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $genus
     * @param   string $species
     * @param      PropelPDO $con
     * @return SlbSpecies
     */
    public static function retrieveByPK($genus, $species, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $genus, (string) $species));
         if (null !== ($obj = SlbSpeciesPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SlbSpeciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(SlbSpeciesPeer::DATABASE_NAME);
        $criteria->add(SlbSpeciesPeer::GENUS, $genus);
        $criteria->add(SlbSpeciesPeer::SPECIES, $species);
        $v = SlbSpeciesPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseSlbSpeciesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSlbSpeciesPeer::buildTableMap();

