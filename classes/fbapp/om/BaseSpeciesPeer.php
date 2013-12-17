<?php


/**
 * Base static class for performing query and update operations on the 'species' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseSpeciesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'species';

    /** the related Propel class for this table */
    const OM_CLASS = 'Species';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SpeciesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 97;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 97;

    /** the column name for the SpecCode field */
    const SPECCODE = 'species.SpecCode';

    /** the column name for the Genus field */
    const GENUS = 'species.Genus';

    /** the column name for the Species field */
    const SPECIES = 'species.Species';

    /** the column name for the SpeciesRefNo field */
    const SPECIESREFNO = 'species.SpeciesRefNo';

    /** the column name for the Author field */
    const AUTHOR = 'species.Author';

    /** the column name for the FBname field */
    const FBNAME = 'species.FBname';

    /** the column name for the PicPreferredName field */
    const PICPREFERREDNAME = 'species.PicPreferredName';

    /** the column name for the PicPreferredNameM field */
    const PICPREFERREDNAMEM = 'species.PicPreferredNameM';

    /** the column name for the PicPreferredNameF field */
    const PICPREFERREDNAMEF = 'species.PicPreferredNameF';

    /** the column name for the PicPreferredNameJ field */
    const PICPREFERREDNAMEJ = 'species.PicPreferredNameJ';

    /** the column name for the FamCode field */
    const FAMCODE = 'species.FamCode';

    /** the column name for the Subfamily field */
    const SUBFAMILY = 'species.Subfamily';

    /** the column name for the GenCode field */
    const GENCODE = 'species.GenCode';

    /** the column name for the SubGenCode field */
    const SUBGENCODE = 'species.SubGenCode';

    /** the column name for the BodyShapeI field */
    const BODYSHAPEI = 'species.BodyShapeI';

    /** the column name for the Source field */
    const SOURCE = 'species.Source';

    /** the column name for the Remark field */
    const REMARK = 'species.Remark';

    /** the column name for the TaxIssue field */
    const TAXISSUE = 'species.TaxIssue';

    /** the column name for the Fresh field */
    const FRESH = 'species.Fresh';

    /** the column name for the Brack field */
    const BRACK = 'species.Brack';

    /** the column name for the Saltwater field */
    const SALTWATER = 'species.Saltwater';

    /** the column name for the DemersPelag field */
    const DEMERSPELAG = 'species.DemersPelag';

    /** the column name for the AnaCat field */
    const ANACAT = 'species.AnaCat';

    /** the column name for the MigratRef field */
    const MIGRATREF = 'species.MigratRef';

    /** the column name for the DepthRangeShallow field */
    const DEPTHRANGESHALLOW = 'species.DepthRangeShallow';

    /** the column name for the DepthRangeDeep field */
    const DEPTHRANGEDEEP = 'species.DepthRangeDeep';

    /** the column name for the DepthRangeRef field */
    const DEPTHRANGEREF = 'species.DepthRangeRef';

    /** the column name for the DepthRangeComShallow field */
    const DEPTHRANGECOMSHALLOW = 'species.DepthRangeComShallow';

    /** the column name for the DepthRangeComDeep field */
    const DEPTHRANGECOMDEEP = 'species.DepthRangeComDeep';

    /** the column name for the DepthComRef field */
    const DEPTHCOMREF = 'species.DepthComRef';

    /** the column name for the LongevityWild field */
    const LONGEVITYWILD = 'species.LongevityWild';

    /** the column name for the LongevityWildRef field */
    const LONGEVITYWILDREF = 'species.LongevityWildRef';

    /** the column name for the LongevityCaptive field */
    const LONGEVITYCAPTIVE = 'species.LongevityCaptive';

    /** the column name for the LongevityCapRef field */
    const LONGEVITYCAPREF = 'species.LongevityCapRef';

    /** the column name for the Vulnerability field */
    const VULNERABILITY = 'species.Vulnerability';

    /** the column name for the Length field */
    const LENGTH = 'species.Length';

    /** the column name for the LTypeMaxM field */
    const LTYPEMAXM = 'species.LTypeMaxM';

    /** the column name for the LengthFemale field */
    const LENGTHFEMALE = 'species.LengthFemale';

    /** the column name for the LTypeMaxF field */
    const LTYPEMAXF = 'species.LTypeMaxF';

    /** the column name for the MaxLengthRef field */
    const MAXLENGTHREF = 'species.MaxLengthRef';

    /** the column name for the CommonLength field */
    const COMMONLENGTH = 'species.CommonLength';

    /** the column name for the LTypeComM field */
    const LTYPECOMM = 'species.LTypeComM';

    /** the column name for the CommonLengthF field */
    const COMMONLENGTHF = 'species.CommonLengthF';

    /** the column name for the LTypeComF field */
    const LTYPECOMF = 'species.LTypeComF';

    /** the column name for the CommonLengthRef field */
    const COMMONLENGTHREF = 'species.CommonLengthRef';

    /** the column name for the Weight field */
    const WEIGHT = 'species.Weight';

    /** the column name for the WeightFemale field */
    const WEIGHTFEMALE = 'species.WeightFemale';

    /** the column name for the MaxWeightRef field */
    const MAXWEIGHTREF = 'species.MaxWeightRef';

    /** the column name for the Pic field */
    const PIC = 'species.Pic';

    /** the column name for the PictureFemale field */
    const PICTUREFEMALE = 'species.PictureFemale';

    /** the column name for the LarvaPic field */
    const LARVAPIC = 'species.LarvaPic';

    /** the column name for the EggPic field */
    const EGGPIC = 'species.EggPic';

    /** the column name for the ImportanceRef field */
    const IMPORTANCEREF = 'species.ImportanceRef';

    /** the column name for the Importance field */
    const IMPORTANCE = 'species.Importance';

    /** the column name for the PriceCateg field */
    const PRICECATEG = 'species.PriceCateg';

    /** the column name for the PriceReliability field */
    const PRICERELIABILITY = 'species.PriceReliability';

    /** the column name for the Remarks7 field */
    const REMARKS7 = 'species.Remarks7';

    /** the column name for the LandingStatistics field */
    const LANDINGSTATISTICS = 'species.LandingStatistics';

    /** the column name for the Landings field */
    const LANDINGS = 'species.Landings';

    /** the column name for the MainCatchingMethod field */
    const MAINCATCHINGMETHOD = 'species.MainCatchingMethod';

    /** the column name for the II field */
    const II = 'species.II';

    /** the column name for the MSeines field */
    const MSEINES = 'species.MSeines';

    /** the column name for the MGillnets field */
    const MGILLNETS = 'species.MGillnets';

    /** the column name for the MCastnets field */
    const MCASTNETS = 'species.MCastnets';

    /** the column name for the MTraps field */
    const MTRAPS = 'species.MTraps';

    /** the column name for the MSpears field */
    const MSPEARS = 'species.MSpears';

    /** the column name for the MTrawls field */
    const MTRAWLS = 'species.MTrawls';

    /** the column name for the MDredges field */
    const MDREDGES = 'species.MDredges';

    /** the column name for the MLiftnets field */
    const MLIFTNETS = 'species.MLiftnets';

    /** the column name for the MHooksLines field */
    const MHOOKSLINES = 'species.MHooksLines';

    /** the column name for the MOther field */
    const MOTHER = 'species.MOther';

    /** the column name for the UsedforAquaculture field */
    const USEDFORAQUACULTURE = 'species.UsedforAquaculture';

    /** the column name for the LifeCycle field */
    const LIFECYCLE = 'species.LifeCycle';

    /** the column name for the AquacultureRef field */
    const AQUACULTUREREF = 'species.AquacultureRef';

    /** the column name for the UsedasBait field */
    const USEDASBAIT = 'species.UsedasBait';

    /** the column name for the BaitRef field */
    const BAITREF = 'species.BaitRef';

    /** the column name for the Aquarium field */
    const AQUARIUM = 'species.Aquarium';

    /** the column name for the AquariumFishII field */
    const AQUARIUMFISHII = 'species.AquariumFishII';

    /** the column name for the AquariumRef field */
    const AQUARIUMREF = 'species.AquariumRef';

    /** the column name for the GameFish field */
    const GAMEFISH = 'species.GameFish';

    /** the column name for the GameRef field */
    const GAMEREF = 'species.GameRef';

    /** the column name for the Dangerous field */
    const DANGEROUS = 'species.Dangerous';

    /** the column name for the DangerousRef field */
    const DANGEROUSREF = 'species.DangerousRef';

    /** the column name for the Electrogenic field */
    const ELECTROGENIC = 'species.Electrogenic';

    /** the column name for the ElectroRef field */
    const ELECTROREF = 'species.ElectroRef';

    /** the column name for the Complete field */
    const COMPLETE = 'species.Complete';

    /** the column name for the GoogleImage field */
    const GOOGLEIMAGE = 'species.GoogleImage';

    /** the column name for the Comments field */
    const COMMENTS = 'species.Comments';

    /** the column name for the Profile field */
    const PROFILE = 'species.Profile';

    /** the column name for the PD50 field */
    const PD50 = 'species.PD50';

    /** the column name for the Entered field */
    const ENTERED = 'species.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'species.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'species.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'species.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'species.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'species.DateChecked';

    /** the column name for the TS field */
    const TS = 'species.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Species objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Species[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SpeciesPeer::$fieldNames[SpeciesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode', 'Genus', 'Species', 'Speciesrefno', 'Author', 'Fbname', 'Picpreferredname', 'Picpreferrednamem', 'Picpreferrednamef', 'Picpreferrednamej', 'Famcode', 'Subfamily', 'Gencode', 'Subgencode', 'Bodyshapei', 'Source', 'Remark', 'Taxissue', 'Fresh', 'Brack', 'Saltwater', 'Demerspelag', 'Anacat', 'Migratref', 'Depthrangeshallow', 'Depthrangedeep', 'Depthrangeref', 'Depthrangecomshallow', 'Depthrangecomdeep', 'Depthcomref', 'Longevitywild', 'Longevitywildref', 'Longevitycaptive', 'Longevitycapref', 'Vulnerability', 'Length', 'Ltypemaxm', 'Lengthfemale', 'Ltypemaxf', 'Maxlengthref', 'Commonlength', 'Ltypecomm', 'Commonlengthf', 'Ltypecomf', 'Commonlengthref', 'Weight', 'Weightfemale', 'Maxweightref', 'Pic', 'Picturefemale', 'Larvapic', 'Eggpic', 'Importanceref', 'Importance', 'Pricecateg', 'Pricereliability', 'Remarks7', 'Landingstatistics', 'Landings', 'Maincatchingmethod', 'Ii', 'Mseines', 'Mgillnets', 'Mcastnets', 'Mtraps', 'Mspears', 'Mtrawls', 'Mdredges', 'Mliftnets', 'Mhookslines', 'Mother', 'Usedforaquaculture', 'Lifecycle', 'Aquacultureref', 'Usedasbait', 'Baitref', 'Aquarium', 'Aquariumfishii', 'Aquariumref', 'Gamefish', 'Gameref', 'Dangerous', 'Dangerousref', 'Electrogenic', 'Electroref', 'Complete', 'Googleimage', 'Comments', 'Profile', 'Pd50', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode', 'genus', 'species', 'speciesrefno', 'author', 'fbname', 'picpreferredname', 'picpreferrednamem', 'picpreferrednamef', 'picpreferrednamej', 'famcode', 'subfamily', 'gencode', 'subgencode', 'bodyshapei', 'source', 'remark', 'taxissue', 'fresh', 'brack', 'saltwater', 'demerspelag', 'anacat', 'migratref', 'depthrangeshallow', 'depthrangedeep', 'depthrangeref', 'depthrangecomshallow', 'depthrangecomdeep', 'depthcomref', 'longevitywild', 'longevitywildref', 'longevitycaptive', 'longevitycapref', 'vulnerability', 'length', 'ltypemaxm', 'lengthfemale', 'ltypemaxf', 'maxlengthref', 'commonlength', 'ltypecomm', 'commonlengthf', 'ltypecomf', 'commonlengthref', 'weight', 'weightfemale', 'maxweightref', 'pic', 'picturefemale', 'larvapic', 'eggpic', 'importanceref', 'importance', 'pricecateg', 'pricereliability', 'remarks7', 'landingstatistics', 'landings', 'maincatchingmethod', 'ii', 'mseines', 'mgillnets', 'mcastnets', 'mtraps', 'mspears', 'mtrawls', 'mdredges', 'mliftnets', 'mhookslines', 'mother', 'usedforaquaculture', 'lifecycle', 'aquacultureref', 'usedasbait', 'baitref', 'aquarium', 'aquariumfishii', 'aquariumref', 'gamefish', 'gameref', 'dangerous', 'dangerousref', 'electrogenic', 'electroref', 'complete', 'googleimage', 'comments', 'profile', 'pd50', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (SpeciesPeer::SPECCODE, SpeciesPeer::GENUS, SpeciesPeer::SPECIES, SpeciesPeer::SPECIESREFNO, SpeciesPeer::AUTHOR, SpeciesPeer::FBNAME, SpeciesPeer::PICPREFERREDNAME, SpeciesPeer::PICPREFERREDNAMEM, SpeciesPeer::PICPREFERREDNAMEF, SpeciesPeer::PICPREFERREDNAMEJ, SpeciesPeer::FAMCODE, SpeciesPeer::SUBFAMILY, SpeciesPeer::GENCODE, SpeciesPeer::SUBGENCODE, SpeciesPeer::BODYSHAPEI, SpeciesPeer::SOURCE, SpeciesPeer::REMARK, SpeciesPeer::TAXISSUE, SpeciesPeer::FRESH, SpeciesPeer::BRACK, SpeciesPeer::SALTWATER, SpeciesPeer::DEMERSPELAG, SpeciesPeer::ANACAT, SpeciesPeer::MIGRATREF, SpeciesPeer::DEPTHRANGESHALLOW, SpeciesPeer::DEPTHRANGEDEEP, SpeciesPeer::DEPTHRANGEREF, SpeciesPeer::DEPTHRANGECOMSHALLOW, SpeciesPeer::DEPTHRANGECOMDEEP, SpeciesPeer::DEPTHCOMREF, SpeciesPeer::LONGEVITYWILD, SpeciesPeer::LONGEVITYWILDREF, SpeciesPeer::LONGEVITYCAPTIVE, SpeciesPeer::LONGEVITYCAPREF, SpeciesPeer::VULNERABILITY, SpeciesPeer::LENGTH, SpeciesPeer::LTYPEMAXM, SpeciesPeer::LENGTHFEMALE, SpeciesPeer::LTYPEMAXF, SpeciesPeer::MAXLENGTHREF, SpeciesPeer::COMMONLENGTH, SpeciesPeer::LTYPECOMM, SpeciesPeer::COMMONLENGTHF, SpeciesPeer::LTYPECOMF, SpeciesPeer::COMMONLENGTHREF, SpeciesPeer::WEIGHT, SpeciesPeer::WEIGHTFEMALE, SpeciesPeer::MAXWEIGHTREF, SpeciesPeer::PIC, SpeciesPeer::PICTUREFEMALE, SpeciesPeer::LARVAPIC, SpeciesPeer::EGGPIC, SpeciesPeer::IMPORTANCEREF, SpeciesPeer::IMPORTANCE, SpeciesPeer::PRICECATEG, SpeciesPeer::PRICERELIABILITY, SpeciesPeer::REMARKS7, SpeciesPeer::LANDINGSTATISTICS, SpeciesPeer::LANDINGS, SpeciesPeer::MAINCATCHINGMETHOD, SpeciesPeer::II, SpeciesPeer::MSEINES, SpeciesPeer::MGILLNETS, SpeciesPeer::MCASTNETS, SpeciesPeer::MTRAPS, SpeciesPeer::MSPEARS, SpeciesPeer::MTRAWLS, SpeciesPeer::MDREDGES, SpeciesPeer::MLIFTNETS, SpeciesPeer::MHOOKSLINES, SpeciesPeer::MOTHER, SpeciesPeer::USEDFORAQUACULTURE, SpeciesPeer::LIFECYCLE, SpeciesPeer::AQUACULTUREREF, SpeciesPeer::USEDASBAIT, SpeciesPeer::BAITREF, SpeciesPeer::AQUARIUM, SpeciesPeer::AQUARIUMFISHII, SpeciesPeer::AQUARIUMREF, SpeciesPeer::GAMEFISH, SpeciesPeer::GAMEREF, SpeciesPeer::DANGEROUS, SpeciesPeer::DANGEROUSREF, SpeciesPeer::ELECTROGENIC, SpeciesPeer::ELECTROREF, SpeciesPeer::COMPLETE, SpeciesPeer::GOOGLEIMAGE, SpeciesPeer::COMMENTS, SpeciesPeer::PROFILE, SpeciesPeer::PD50, SpeciesPeer::ENTERED, SpeciesPeer::DATEENTERED, SpeciesPeer::MODIFIED, SpeciesPeer::DATEMODIFIED, SpeciesPeer::EXPERT, SpeciesPeer::DATECHECKED, SpeciesPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE', 'GENUS', 'SPECIES', 'SPECIESREFNO', 'AUTHOR', 'FBNAME', 'PICPREFERREDNAME', 'PICPREFERREDNAMEM', 'PICPREFERREDNAMEF', 'PICPREFERREDNAMEJ', 'FAMCODE', 'SUBFAMILY', 'GENCODE', 'SUBGENCODE', 'BODYSHAPEI', 'SOURCE', 'REMARK', 'TAXISSUE', 'FRESH', 'BRACK', 'SALTWATER', 'DEMERSPELAG', 'ANACAT', 'MIGRATREF', 'DEPTHRANGESHALLOW', 'DEPTHRANGEDEEP', 'DEPTHRANGEREF', 'DEPTHRANGECOMSHALLOW', 'DEPTHRANGECOMDEEP', 'DEPTHCOMREF', 'LONGEVITYWILD', 'LONGEVITYWILDREF', 'LONGEVITYCAPTIVE', 'LONGEVITYCAPREF', 'VULNERABILITY', 'LENGTH', 'LTYPEMAXM', 'LENGTHFEMALE', 'LTYPEMAXF', 'MAXLENGTHREF', 'COMMONLENGTH', 'LTYPECOMM', 'COMMONLENGTHF', 'LTYPECOMF', 'COMMONLENGTHREF', 'WEIGHT', 'WEIGHTFEMALE', 'MAXWEIGHTREF', 'PIC', 'PICTUREFEMALE', 'LARVAPIC', 'EGGPIC', 'IMPORTANCEREF', 'IMPORTANCE', 'PRICECATEG', 'PRICERELIABILITY', 'REMARKS7', 'LANDINGSTATISTICS', 'LANDINGS', 'MAINCATCHINGMETHOD', 'II', 'MSEINES', 'MGILLNETS', 'MCASTNETS', 'MTRAPS', 'MSPEARS', 'MTRAWLS', 'MDREDGES', 'MLIFTNETS', 'MHOOKSLINES', 'MOTHER', 'USEDFORAQUACULTURE', 'LIFECYCLE', 'AQUACULTUREREF', 'USEDASBAIT', 'BAITREF', 'AQUARIUM', 'AQUARIUMFISHII', 'AQUARIUMREF', 'GAMEFISH', 'GAMEREF', 'DANGEROUS', 'DANGEROUSREF', 'ELECTROGENIC', 'ELECTROREF', 'COMPLETE', 'GOOGLEIMAGE', 'COMMENTS', 'PROFILE', 'PD50', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode', 'Genus', 'Species', 'SpeciesRefNo', 'Author', 'FBname', 'PicPreferredName', 'PicPreferredNameM', 'PicPreferredNameF', 'PicPreferredNameJ', 'FamCode', 'Subfamily', 'GenCode', 'SubGenCode', 'BodyShapeI', 'Source', 'Remark', 'TaxIssue', 'Fresh', 'Brack', 'Saltwater', 'DemersPelag', 'AnaCat', 'MigratRef', 'DepthRangeShallow', 'DepthRangeDeep', 'DepthRangeRef', 'DepthRangeComShallow', 'DepthRangeComDeep', 'DepthComRef', 'LongevityWild', 'LongevityWildRef', 'LongevityCaptive', 'LongevityCapRef', 'Vulnerability', 'Length', 'LTypeMaxM', 'LengthFemale', 'LTypeMaxF', 'MaxLengthRef', 'CommonLength', 'LTypeComM', 'CommonLengthF', 'LTypeComF', 'CommonLengthRef', 'Weight', 'WeightFemale', 'MaxWeightRef', 'Pic', 'PictureFemale', 'LarvaPic', 'EggPic', 'ImportanceRef', 'Importance', 'PriceCateg', 'PriceReliability', 'Remarks7', 'LandingStatistics', 'Landings', 'MainCatchingMethod', 'II', 'MSeines', 'MGillnets', 'MCastnets', 'MTraps', 'MSpears', 'MTrawls', 'MDredges', 'MLiftnets', 'MHooksLines', 'MOther', 'UsedforAquaculture', 'LifeCycle', 'AquacultureRef', 'UsedasBait', 'BaitRef', 'Aquarium', 'AquariumFishII', 'AquariumRef', 'GameFish', 'GameRef', 'Dangerous', 'DangerousRef', 'Electrogenic', 'ElectroRef', 'Complete', 'GoogleImage', 'Comments', 'Profile', 'PD50', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SpeciesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Speccode' => 0, 'Genus' => 1, 'Species' => 2, 'Speciesrefno' => 3, 'Author' => 4, 'Fbname' => 5, 'Picpreferredname' => 6, 'Picpreferrednamem' => 7, 'Picpreferrednamef' => 8, 'Picpreferrednamej' => 9, 'Famcode' => 10, 'Subfamily' => 11, 'Gencode' => 12, 'Subgencode' => 13, 'Bodyshapei' => 14, 'Source' => 15, 'Remark' => 16, 'Taxissue' => 17, 'Fresh' => 18, 'Brack' => 19, 'Saltwater' => 20, 'Demerspelag' => 21, 'Anacat' => 22, 'Migratref' => 23, 'Depthrangeshallow' => 24, 'Depthrangedeep' => 25, 'Depthrangeref' => 26, 'Depthrangecomshallow' => 27, 'Depthrangecomdeep' => 28, 'Depthcomref' => 29, 'Longevitywild' => 30, 'Longevitywildref' => 31, 'Longevitycaptive' => 32, 'Longevitycapref' => 33, 'Vulnerability' => 34, 'Length' => 35, 'Ltypemaxm' => 36, 'Lengthfemale' => 37, 'Ltypemaxf' => 38, 'Maxlengthref' => 39, 'Commonlength' => 40, 'Ltypecomm' => 41, 'Commonlengthf' => 42, 'Ltypecomf' => 43, 'Commonlengthref' => 44, 'Weight' => 45, 'Weightfemale' => 46, 'Maxweightref' => 47, 'Pic' => 48, 'Picturefemale' => 49, 'Larvapic' => 50, 'Eggpic' => 51, 'Importanceref' => 52, 'Importance' => 53, 'Pricecateg' => 54, 'Pricereliability' => 55, 'Remarks7' => 56, 'Landingstatistics' => 57, 'Landings' => 58, 'Maincatchingmethod' => 59, 'Ii' => 60, 'Mseines' => 61, 'Mgillnets' => 62, 'Mcastnets' => 63, 'Mtraps' => 64, 'Mspears' => 65, 'Mtrawls' => 66, 'Mdredges' => 67, 'Mliftnets' => 68, 'Mhookslines' => 69, 'Mother' => 70, 'Usedforaquaculture' => 71, 'Lifecycle' => 72, 'Aquacultureref' => 73, 'Usedasbait' => 74, 'Baitref' => 75, 'Aquarium' => 76, 'Aquariumfishii' => 77, 'Aquariumref' => 78, 'Gamefish' => 79, 'Gameref' => 80, 'Dangerous' => 81, 'Dangerousref' => 82, 'Electrogenic' => 83, 'Electroref' => 84, 'Complete' => 85, 'Googleimage' => 86, 'Comments' => 87, 'Profile' => 88, 'Pd50' => 89, 'Entered' => 90, 'Dateentered' => 91, 'Modified' => 92, 'Datemodified' => 93, 'Expert' => 94, 'Datechecked' => 95, 'Ts' => 96, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('speccode' => 0, 'genus' => 1, 'species' => 2, 'speciesrefno' => 3, 'author' => 4, 'fbname' => 5, 'picpreferredname' => 6, 'picpreferrednamem' => 7, 'picpreferrednamef' => 8, 'picpreferrednamej' => 9, 'famcode' => 10, 'subfamily' => 11, 'gencode' => 12, 'subgencode' => 13, 'bodyshapei' => 14, 'source' => 15, 'remark' => 16, 'taxissue' => 17, 'fresh' => 18, 'brack' => 19, 'saltwater' => 20, 'demerspelag' => 21, 'anacat' => 22, 'migratref' => 23, 'depthrangeshallow' => 24, 'depthrangedeep' => 25, 'depthrangeref' => 26, 'depthrangecomshallow' => 27, 'depthrangecomdeep' => 28, 'depthcomref' => 29, 'longevitywild' => 30, 'longevitywildref' => 31, 'longevitycaptive' => 32, 'longevitycapref' => 33, 'vulnerability' => 34, 'length' => 35, 'ltypemaxm' => 36, 'lengthfemale' => 37, 'ltypemaxf' => 38, 'maxlengthref' => 39, 'commonlength' => 40, 'ltypecomm' => 41, 'commonlengthf' => 42, 'ltypecomf' => 43, 'commonlengthref' => 44, 'weight' => 45, 'weightfemale' => 46, 'maxweightref' => 47, 'pic' => 48, 'picturefemale' => 49, 'larvapic' => 50, 'eggpic' => 51, 'importanceref' => 52, 'importance' => 53, 'pricecateg' => 54, 'pricereliability' => 55, 'remarks7' => 56, 'landingstatistics' => 57, 'landings' => 58, 'maincatchingmethod' => 59, 'ii' => 60, 'mseines' => 61, 'mgillnets' => 62, 'mcastnets' => 63, 'mtraps' => 64, 'mspears' => 65, 'mtrawls' => 66, 'mdredges' => 67, 'mliftnets' => 68, 'mhookslines' => 69, 'mother' => 70, 'usedforaquaculture' => 71, 'lifecycle' => 72, 'aquacultureref' => 73, 'usedasbait' => 74, 'baitref' => 75, 'aquarium' => 76, 'aquariumfishii' => 77, 'aquariumref' => 78, 'gamefish' => 79, 'gameref' => 80, 'dangerous' => 81, 'dangerousref' => 82, 'electrogenic' => 83, 'electroref' => 84, 'complete' => 85, 'googleimage' => 86, 'comments' => 87, 'profile' => 88, 'pd50' => 89, 'entered' => 90, 'dateentered' => 91, 'modified' => 92, 'datemodified' => 93, 'expert' => 94, 'datechecked' => 95, 'ts' => 96, ),
        BasePeer::TYPE_COLNAME => array (SpeciesPeer::SPECCODE => 0, SpeciesPeer::GENUS => 1, SpeciesPeer::SPECIES => 2, SpeciesPeer::SPECIESREFNO => 3, SpeciesPeer::AUTHOR => 4, SpeciesPeer::FBNAME => 5, SpeciesPeer::PICPREFERREDNAME => 6, SpeciesPeer::PICPREFERREDNAMEM => 7, SpeciesPeer::PICPREFERREDNAMEF => 8, SpeciesPeer::PICPREFERREDNAMEJ => 9, SpeciesPeer::FAMCODE => 10, SpeciesPeer::SUBFAMILY => 11, SpeciesPeer::GENCODE => 12, SpeciesPeer::SUBGENCODE => 13, SpeciesPeer::BODYSHAPEI => 14, SpeciesPeer::SOURCE => 15, SpeciesPeer::REMARK => 16, SpeciesPeer::TAXISSUE => 17, SpeciesPeer::FRESH => 18, SpeciesPeer::BRACK => 19, SpeciesPeer::SALTWATER => 20, SpeciesPeer::DEMERSPELAG => 21, SpeciesPeer::ANACAT => 22, SpeciesPeer::MIGRATREF => 23, SpeciesPeer::DEPTHRANGESHALLOW => 24, SpeciesPeer::DEPTHRANGEDEEP => 25, SpeciesPeer::DEPTHRANGEREF => 26, SpeciesPeer::DEPTHRANGECOMSHALLOW => 27, SpeciesPeer::DEPTHRANGECOMDEEP => 28, SpeciesPeer::DEPTHCOMREF => 29, SpeciesPeer::LONGEVITYWILD => 30, SpeciesPeer::LONGEVITYWILDREF => 31, SpeciesPeer::LONGEVITYCAPTIVE => 32, SpeciesPeer::LONGEVITYCAPREF => 33, SpeciesPeer::VULNERABILITY => 34, SpeciesPeer::LENGTH => 35, SpeciesPeer::LTYPEMAXM => 36, SpeciesPeer::LENGTHFEMALE => 37, SpeciesPeer::LTYPEMAXF => 38, SpeciesPeer::MAXLENGTHREF => 39, SpeciesPeer::COMMONLENGTH => 40, SpeciesPeer::LTYPECOMM => 41, SpeciesPeer::COMMONLENGTHF => 42, SpeciesPeer::LTYPECOMF => 43, SpeciesPeer::COMMONLENGTHREF => 44, SpeciesPeer::WEIGHT => 45, SpeciesPeer::WEIGHTFEMALE => 46, SpeciesPeer::MAXWEIGHTREF => 47, SpeciesPeer::PIC => 48, SpeciesPeer::PICTUREFEMALE => 49, SpeciesPeer::LARVAPIC => 50, SpeciesPeer::EGGPIC => 51, SpeciesPeer::IMPORTANCEREF => 52, SpeciesPeer::IMPORTANCE => 53, SpeciesPeer::PRICECATEG => 54, SpeciesPeer::PRICERELIABILITY => 55, SpeciesPeer::REMARKS7 => 56, SpeciesPeer::LANDINGSTATISTICS => 57, SpeciesPeer::LANDINGS => 58, SpeciesPeer::MAINCATCHINGMETHOD => 59, SpeciesPeer::II => 60, SpeciesPeer::MSEINES => 61, SpeciesPeer::MGILLNETS => 62, SpeciesPeer::MCASTNETS => 63, SpeciesPeer::MTRAPS => 64, SpeciesPeer::MSPEARS => 65, SpeciesPeer::MTRAWLS => 66, SpeciesPeer::MDREDGES => 67, SpeciesPeer::MLIFTNETS => 68, SpeciesPeer::MHOOKSLINES => 69, SpeciesPeer::MOTHER => 70, SpeciesPeer::USEDFORAQUACULTURE => 71, SpeciesPeer::LIFECYCLE => 72, SpeciesPeer::AQUACULTUREREF => 73, SpeciesPeer::USEDASBAIT => 74, SpeciesPeer::BAITREF => 75, SpeciesPeer::AQUARIUM => 76, SpeciesPeer::AQUARIUMFISHII => 77, SpeciesPeer::AQUARIUMREF => 78, SpeciesPeer::GAMEFISH => 79, SpeciesPeer::GAMEREF => 80, SpeciesPeer::DANGEROUS => 81, SpeciesPeer::DANGEROUSREF => 82, SpeciesPeer::ELECTROGENIC => 83, SpeciesPeer::ELECTROREF => 84, SpeciesPeer::COMPLETE => 85, SpeciesPeer::GOOGLEIMAGE => 86, SpeciesPeer::COMMENTS => 87, SpeciesPeer::PROFILE => 88, SpeciesPeer::PD50 => 89, SpeciesPeer::ENTERED => 90, SpeciesPeer::DATEENTERED => 91, SpeciesPeer::MODIFIED => 92, SpeciesPeer::DATEMODIFIED => 93, SpeciesPeer::EXPERT => 94, SpeciesPeer::DATECHECKED => 95, SpeciesPeer::TS => 96, ),
        BasePeer::TYPE_RAW_COLNAME => array ('SPECCODE' => 0, 'GENUS' => 1, 'SPECIES' => 2, 'SPECIESREFNO' => 3, 'AUTHOR' => 4, 'FBNAME' => 5, 'PICPREFERREDNAME' => 6, 'PICPREFERREDNAMEM' => 7, 'PICPREFERREDNAMEF' => 8, 'PICPREFERREDNAMEJ' => 9, 'FAMCODE' => 10, 'SUBFAMILY' => 11, 'GENCODE' => 12, 'SUBGENCODE' => 13, 'BODYSHAPEI' => 14, 'SOURCE' => 15, 'REMARK' => 16, 'TAXISSUE' => 17, 'FRESH' => 18, 'BRACK' => 19, 'SALTWATER' => 20, 'DEMERSPELAG' => 21, 'ANACAT' => 22, 'MIGRATREF' => 23, 'DEPTHRANGESHALLOW' => 24, 'DEPTHRANGEDEEP' => 25, 'DEPTHRANGEREF' => 26, 'DEPTHRANGECOMSHALLOW' => 27, 'DEPTHRANGECOMDEEP' => 28, 'DEPTHCOMREF' => 29, 'LONGEVITYWILD' => 30, 'LONGEVITYWILDREF' => 31, 'LONGEVITYCAPTIVE' => 32, 'LONGEVITYCAPREF' => 33, 'VULNERABILITY' => 34, 'LENGTH' => 35, 'LTYPEMAXM' => 36, 'LENGTHFEMALE' => 37, 'LTYPEMAXF' => 38, 'MAXLENGTHREF' => 39, 'COMMONLENGTH' => 40, 'LTYPECOMM' => 41, 'COMMONLENGTHF' => 42, 'LTYPECOMF' => 43, 'COMMONLENGTHREF' => 44, 'WEIGHT' => 45, 'WEIGHTFEMALE' => 46, 'MAXWEIGHTREF' => 47, 'PIC' => 48, 'PICTUREFEMALE' => 49, 'LARVAPIC' => 50, 'EGGPIC' => 51, 'IMPORTANCEREF' => 52, 'IMPORTANCE' => 53, 'PRICECATEG' => 54, 'PRICERELIABILITY' => 55, 'REMARKS7' => 56, 'LANDINGSTATISTICS' => 57, 'LANDINGS' => 58, 'MAINCATCHINGMETHOD' => 59, 'II' => 60, 'MSEINES' => 61, 'MGILLNETS' => 62, 'MCASTNETS' => 63, 'MTRAPS' => 64, 'MSPEARS' => 65, 'MTRAWLS' => 66, 'MDREDGES' => 67, 'MLIFTNETS' => 68, 'MHOOKSLINES' => 69, 'MOTHER' => 70, 'USEDFORAQUACULTURE' => 71, 'LIFECYCLE' => 72, 'AQUACULTUREREF' => 73, 'USEDASBAIT' => 74, 'BAITREF' => 75, 'AQUARIUM' => 76, 'AQUARIUMFISHII' => 77, 'AQUARIUMREF' => 78, 'GAMEFISH' => 79, 'GAMEREF' => 80, 'DANGEROUS' => 81, 'DANGEROUSREF' => 82, 'ELECTROGENIC' => 83, 'ELECTROREF' => 84, 'COMPLETE' => 85, 'GOOGLEIMAGE' => 86, 'COMMENTS' => 87, 'PROFILE' => 88, 'PD50' => 89, 'ENTERED' => 90, 'DATEENTERED' => 91, 'MODIFIED' => 92, 'DATEMODIFIED' => 93, 'EXPERT' => 94, 'DATECHECKED' => 95, 'TS' => 96, ),
        BasePeer::TYPE_FIELDNAME => array ('SpecCode' => 0, 'Genus' => 1, 'Species' => 2, 'SpeciesRefNo' => 3, 'Author' => 4, 'FBname' => 5, 'PicPreferredName' => 6, 'PicPreferredNameM' => 7, 'PicPreferredNameF' => 8, 'PicPreferredNameJ' => 9, 'FamCode' => 10, 'Subfamily' => 11, 'GenCode' => 12, 'SubGenCode' => 13, 'BodyShapeI' => 14, 'Source' => 15, 'Remark' => 16, 'TaxIssue' => 17, 'Fresh' => 18, 'Brack' => 19, 'Saltwater' => 20, 'DemersPelag' => 21, 'AnaCat' => 22, 'MigratRef' => 23, 'DepthRangeShallow' => 24, 'DepthRangeDeep' => 25, 'DepthRangeRef' => 26, 'DepthRangeComShallow' => 27, 'DepthRangeComDeep' => 28, 'DepthComRef' => 29, 'LongevityWild' => 30, 'LongevityWildRef' => 31, 'LongevityCaptive' => 32, 'LongevityCapRef' => 33, 'Vulnerability' => 34, 'Length' => 35, 'LTypeMaxM' => 36, 'LengthFemale' => 37, 'LTypeMaxF' => 38, 'MaxLengthRef' => 39, 'CommonLength' => 40, 'LTypeComM' => 41, 'CommonLengthF' => 42, 'LTypeComF' => 43, 'CommonLengthRef' => 44, 'Weight' => 45, 'WeightFemale' => 46, 'MaxWeightRef' => 47, 'Pic' => 48, 'PictureFemale' => 49, 'LarvaPic' => 50, 'EggPic' => 51, 'ImportanceRef' => 52, 'Importance' => 53, 'PriceCateg' => 54, 'PriceReliability' => 55, 'Remarks7' => 56, 'LandingStatistics' => 57, 'Landings' => 58, 'MainCatchingMethod' => 59, 'II' => 60, 'MSeines' => 61, 'MGillnets' => 62, 'MCastnets' => 63, 'MTraps' => 64, 'MSpears' => 65, 'MTrawls' => 66, 'MDredges' => 67, 'MLiftnets' => 68, 'MHooksLines' => 69, 'MOther' => 70, 'UsedforAquaculture' => 71, 'LifeCycle' => 72, 'AquacultureRef' => 73, 'UsedasBait' => 74, 'BaitRef' => 75, 'Aquarium' => 76, 'AquariumFishII' => 77, 'AquariumRef' => 78, 'GameFish' => 79, 'GameRef' => 80, 'Dangerous' => 81, 'DangerousRef' => 82, 'Electrogenic' => 83, 'ElectroRef' => 84, 'Complete' => 85, 'GoogleImage' => 86, 'Comments' => 87, 'Profile' => 88, 'PD50' => 89, 'Entered' => 90, 'DateEntered' => 91, 'Modified' => 92, 'DateModified' => 93, 'Expert' => 94, 'DateChecked' => 95, 'TS' => 96, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, )
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
        $toNames = SpeciesPeer::getFieldNames($toType);
        $key = isset(SpeciesPeer::$fieldKeys[$fromType][$name]) ? SpeciesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SpeciesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SpeciesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SpeciesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SpeciesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SpeciesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SpeciesPeer::SPECCODE);
            $criteria->addSelectColumn(SpeciesPeer::GENUS);
            $criteria->addSelectColumn(SpeciesPeer::SPECIES);
            $criteria->addSelectColumn(SpeciesPeer::SPECIESREFNO);
            $criteria->addSelectColumn(SpeciesPeer::AUTHOR);
            $criteria->addSelectColumn(SpeciesPeer::FBNAME);
            $criteria->addSelectColumn(SpeciesPeer::PICPREFERREDNAME);
            $criteria->addSelectColumn(SpeciesPeer::PICPREFERREDNAMEM);
            $criteria->addSelectColumn(SpeciesPeer::PICPREFERREDNAMEF);
            $criteria->addSelectColumn(SpeciesPeer::PICPREFERREDNAMEJ);
            $criteria->addSelectColumn(SpeciesPeer::FAMCODE);
            $criteria->addSelectColumn(SpeciesPeer::SUBFAMILY);
            $criteria->addSelectColumn(SpeciesPeer::GENCODE);
            $criteria->addSelectColumn(SpeciesPeer::SUBGENCODE);
            $criteria->addSelectColumn(SpeciesPeer::BODYSHAPEI);
            $criteria->addSelectColumn(SpeciesPeer::SOURCE);
            $criteria->addSelectColumn(SpeciesPeer::REMARK);
            $criteria->addSelectColumn(SpeciesPeer::TAXISSUE);
            $criteria->addSelectColumn(SpeciesPeer::FRESH);
            $criteria->addSelectColumn(SpeciesPeer::BRACK);
            $criteria->addSelectColumn(SpeciesPeer::SALTWATER);
            $criteria->addSelectColumn(SpeciesPeer::DEMERSPELAG);
            $criteria->addSelectColumn(SpeciesPeer::ANACAT);
            $criteria->addSelectColumn(SpeciesPeer::MIGRATREF);
            $criteria->addSelectColumn(SpeciesPeer::DEPTHRANGESHALLOW);
            $criteria->addSelectColumn(SpeciesPeer::DEPTHRANGEDEEP);
            $criteria->addSelectColumn(SpeciesPeer::DEPTHRANGEREF);
            $criteria->addSelectColumn(SpeciesPeer::DEPTHRANGECOMSHALLOW);
            $criteria->addSelectColumn(SpeciesPeer::DEPTHRANGECOMDEEP);
            $criteria->addSelectColumn(SpeciesPeer::DEPTHCOMREF);
            $criteria->addSelectColumn(SpeciesPeer::LONGEVITYWILD);
            $criteria->addSelectColumn(SpeciesPeer::LONGEVITYWILDREF);
            $criteria->addSelectColumn(SpeciesPeer::LONGEVITYCAPTIVE);
            $criteria->addSelectColumn(SpeciesPeer::LONGEVITYCAPREF);
            $criteria->addSelectColumn(SpeciesPeer::VULNERABILITY);
            $criteria->addSelectColumn(SpeciesPeer::LENGTH);
            $criteria->addSelectColumn(SpeciesPeer::LTYPEMAXM);
            $criteria->addSelectColumn(SpeciesPeer::LENGTHFEMALE);
            $criteria->addSelectColumn(SpeciesPeer::LTYPEMAXF);
            $criteria->addSelectColumn(SpeciesPeer::MAXLENGTHREF);
            $criteria->addSelectColumn(SpeciesPeer::COMMONLENGTH);
            $criteria->addSelectColumn(SpeciesPeer::LTYPECOMM);
            $criteria->addSelectColumn(SpeciesPeer::COMMONLENGTHF);
            $criteria->addSelectColumn(SpeciesPeer::LTYPECOMF);
            $criteria->addSelectColumn(SpeciesPeer::COMMONLENGTHREF);
            $criteria->addSelectColumn(SpeciesPeer::WEIGHT);
            $criteria->addSelectColumn(SpeciesPeer::WEIGHTFEMALE);
            $criteria->addSelectColumn(SpeciesPeer::MAXWEIGHTREF);
            $criteria->addSelectColumn(SpeciesPeer::PIC);
            $criteria->addSelectColumn(SpeciesPeer::PICTUREFEMALE);
            $criteria->addSelectColumn(SpeciesPeer::LARVAPIC);
            $criteria->addSelectColumn(SpeciesPeer::EGGPIC);
            $criteria->addSelectColumn(SpeciesPeer::IMPORTANCEREF);
            $criteria->addSelectColumn(SpeciesPeer::IMPORTANCE);
            $criteria->addSelectColumn(SpeciesPeer::PRICECATEG);
            $criteria->addSelectColumn(SpeciesPeer::PRICERELIABILITY);
            $criteria->addSelectColumn(SpeciesPeer::REMARKS7);
            $criteria->addSelectColumn(SpeciesPeer::LANDINGSTATISTICS);
            $criteria->addSelectColumn(SpeciesPeer::LANDINGS);
            $criteria->addSelectColumn(SpeciesPeer::MAINCATCHINGMETHOD);
            $criteria->addSelectColumn(SpeciesPeer::II);
            $criteria->addSelectColumn(SpeciesPeer::MSEINES);
            $criteria->addSelectColumn(SpeciesPeer::MGILLNETS);
            $criteria->addSelectColumn(SpeciesPeer::MCASTNETS);
            $criteria->addSelectColumn(SpeciesPeer::MTRAPS);
            $criteria->addSelectColumn(SpeciesPeer::MSPEARS);
            $criteria->addSelectColumn(SpeciesPeer::MTRAWLS);
            $criteria->addSelectColumn(SpeciesPeer::MDREDGES);
            $criteria->addSelectColumn(SpeciesPeer::MLIFTNETS);
            $criteria->addSelectColumn(SpeciesPeer::MHOOKSLINES);
            $criteria->addSelectColumn(SpeciesPeer::MOTHER);
            $criteria->addSelectColumn(SpeciesPeer::USEDFORAQUACULTURE);
            $criteria->addSelectColumn(SpeciesPeer::LIFECYCLE);
            $criteria->addSelectColumn(SpeciesPeer::AQUACULTUREREF);
            $criteria->addSelectColumn(SpeciesPeer::USEDASBAIT);
            $criteria->addSelectColumn(SpeciesPeer::BAITREF);
            $criteria->addSelectColumn(SpeciesPeer::AQUARIUM);
            $criteria->addSelectColumn(SpeciesPeer::AQUARIUMFISHII);
            $criteria->addSelectColumn(SpeciesPeer::AQUARIUMREF);
            $criteria->addSelectColumn(SpeciesPeer::GAMEFISH);
            $criteria->addSelectColumn(SpeciesPeer::GAMEREF);
            $criteria->addSelectColumn(SpeciesPeer::DANGEROUS);
            $criteria->addSelectColumn(SpeciesPeer::DANGEROUSREF);
            $criteria->addSelectColumn(SpeciesPeer::ELECTROGENIC);
            $criteria->addSelectColumn(SpeciesPeer::ELECTROREF);
            $criteria->addSelectColumn(SpeciesPeer::COMPLETE);
            $criteria->addSelectColumn(SpeciesPeer::GOOGLEIMAGE);
            $criteria->addSelectColumn(SpeciesPeer::COMMENTS);
            $criteria->addSelectColumn(SpeciesPeer::PROFILE);
            $criteria->addSelectColumn(SpeciesPeer::PD50);
            $criteria->addSelectColumn(SpeciesPeer::ENTERED);
            $criteria->addSelectColumn(SpeciesPeer::DATEENTERED);
            $criteria->addSelectColumn(SpeciesPeer::MODIFIED);
            $criteria->addSelectColumn(SpeciesPeer::DATEMODIFIED);
            $criteria->addSelectColumn(SpeciesPeer::EXPERT);
            $criteria->addSelectColumn(SpeciesPeer::DATECHECKED);
            $criteria->addSelectColumn(SpeciesPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.SpeciesRefNo');
            $criteria->addSelectColumn($alias . '.Author');
            $criteria->addSelectColumn($alias . '.FBname');
            $criteria->addSelectColumn($alias . '.PicPreferredName');
            $criteria->addSelectColumn($alias . '.PicPreferredNameM');
            $criteria->addSelectColumn($alias . '.PicPreferredNameF');
            $criteria->addSelectColumn($alias . '.PicPreferredNameJ');
            $criteria->addSelectColumn($alias . '.FamCode');
            $criteria->addSelectColumn($alias . '.Subfamily');
            $criteria->addSelectColumn($alias . '.GenCode');
            $criteria->addSelectColumn($alias . '.SubGenCode');
            $criteria->addSelectColumn($alias . '.BodyShapeI');
            $criteria->addSelectColumn($alias . '.Source');
            $criteria->addSelectColumn($alias . '.Remark');
            $criteria->addSelectColumn($alias . '.TaxIssue');
            $criteria->addSelectColumn($alias . '.Fresh');
            $criteria->addSelectColumn($alias . '.Brack');
            $criteria->addSelectColumn($alias . '.Saltwater');
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
            $criteria->addSelectColumn($alias . '.Vulnerability');
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
            $criteria->addSelectColumn($alias . '.PriceCateg');
            $criteria->addSelectColumn($alias . '.PriceReliability');
            $criteria->addSelectColumn($alias . '.Remarks7');
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
            $criteria->addSelectColumn($alias . '.GoogleImage');
            $criteria->addSelectColumn($alias . '.Comments');
            $criteria->addSelectColumn($alias . '.Profile');
            $criteria->addSelectColumn($alias . '.PD50');
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
        $criteria->setPrimaryTableName(SpeciesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SpeciesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SpeciesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SpeciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Species
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SpeciesPeer::doSelect($critcopy, $con);
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
        return SpeciesPeer::populateObjects(SpeciesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SpeciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SpeciesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SpeciesPeer::DATABASE_NAME);

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
     * @param Species $obj A Species object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getGenus(), (string) $obj->getSpecies()));
            } // if key === null
            SpeciesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Species object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Species) {
                $key = serialize(array((string) $value->getGenus(), (string) $value->getSpecies()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Species object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SpeciesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Species Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SpeciesPeer::$instances[$key])) {
                return SpeciesPeer::$instances[$key];
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
        foreach (SpeciesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SpeciesPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to species
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
        $cls = SpeciesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SpeciesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SpeciesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpeciesPeer::addInstanceToPool($obj, $key);
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
     * @return array (Species object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SpeciesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SpeciesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SpeciesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpeciesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SpeciesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(SpeciesPeer::DATABASE_NAME)->getTable(SpeciesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSpeciesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSpeciesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SpeciesTableMap());
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
        return SpeciesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Species or Criteria object.
     *
     * @param      mixed $values Criteria or Species object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SpeciesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Species object
        }


        // Set the correct dbName
        $criteria->setDbName(SpeciesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Species or Criteria object.
     *
     * @param      mixed $values Criteria or Species object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SpeciesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SpeciesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SpeciesPeer::GENUS);
            $value = $criteria->remove(SpeciesPeer::GENUS);
            if ($value) {
                $selectCriteria->add(SpeciesPeer::GENUS, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SpeciesPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(SpeciesPeer::SPECIES);
            $value = $criteria->remove(SpeciesPeer::SPECIES);
            if ($value) {
                $selectCriteria->add(SpeciesPeer::SPECIES, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SpeciesPeer::TABLE_NAME);
            }

        } else { // $values is Species object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SpeciesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the species table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SpeciesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SpeciesPeer::TABLE_NAME, $con, SpeciesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpeciesPeer::clearInstancePool();
            SpeciesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Species or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Species object or primary key or array of primary keys
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
            $con = Propel::getConnection(SpeciesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SpeciesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Species) { // it's a model object
            // invalidate the cache for this single object
            SpeciesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpeciesPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SpeciesPeer::GENUS, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SpeciesPeer::SPECIES, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                SpeciesPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SpeciesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SpeciesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Species object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Species $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SpeciesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SpeciesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SpeciesPeer::DATABASE_NAME, SpeciesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $genus
     * @param   string $species
     * @param      PropelPDO $con
     * @return Species
     */
    public static function retrieveByPK($genus, $species, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $genus, (string) $species));
         if (null !== ($obj = SpeciesPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SpeciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(SpeciesPeer::DATABASE_NAME);
        $criteria->add(SpeciesPeer::GENUS, $genus);
        $criteria->add(SpeciesPeer::SPECIES, $species);
        $v = SpeciesPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseSpeciesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSpeciesPeer::buildTableMap();

