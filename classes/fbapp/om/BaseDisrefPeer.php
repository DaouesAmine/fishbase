<?php


/**
 * Base static class for performing query and update operations on the 'disref' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseDisrefPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'disref';

    /** the related Propel class for this table */
    const OM_CLASS = 'Disref';

    /** the related TableMap class for this table */
    const TM_CLASS = 'DisrefTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 192;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 192;

    /** the column name for the DisCode field */
    const DISCODE = 'disref.DisCode';

    /** the column name for the DiseasesRefNo field */
    const DISEASESREFNO = 'disref.DiseasesRefNo';

    /** the column name for the DiseaseI field */
    const DISEASEI = 'disref.DiseaseI';

    /** the column name for the DiseaseII field */
    const DISEASEII = 'disref.DiseaseII';

    /** the column name for the Pic field */
    const PIC = 'disref.Pic';

    /** the column name for the Othernames field */
    const OTHERNAMES = 'disref.Othernames';

    /** the column name for the GermGenus field */
    const GERMGENUS = 'disref.GermGenus';

    /** the column name for the GermSpecies field */
    const GERMSPECIES = 'disref.GermSpecies';

    /** the column name for the Group field */
    const GROUP = 'disref.Group';

    /** the column name for the SkinFinsAfflicted field */
    const SKINFINSAFFLICTED = 'disref.SkinFinsAfflicted';

    /** the column name for the BellyAfflicted field */
    const BELLYAFFLICTED = 'disref.BellyAfflicted';

    /** the column name for the AberrantBehavior field */
    const ABERRANTBEHAVIOR = 'disref.AberrantBehavior';

    /** the column name for the GillsAfflicted field */
    const GILLSAFFLICTED = 'disref.GillsAfflicted';

    /** the column name for the AnusAfflicted field */
    const ANUSAFFLICTED = 'disref.AnusAfflicted';

    /** the column name for the OtherBehavior field */
    const OTHERBEHAVIOR = 'disref.OtherBehavior';

    /** the column name for the EyesAfflicted field */
    const EYESAFFLICTED = 'disref.EyesAfflicted';

    /** the column name for the VisceraAfflicted field */
    const VISCERAAFFLICTED = 'disref.VisceraAfflicted';

    /** the column name for the OtherSymptoms field */
    const OTHERSYMPTOMS = 'disref.OtherSymptoms';

    /** the column name for the AberrantColor field */
    const ABERRANTCOLOR = 'disref.AberrantColor';

    /** the column name for the AberrantCoat field */
    const ABERRANTCOAT = 'disref.AberrantCoat';

    /** the column name for the AberrantMuscusProd field */
    const ABERRANTMUSCUSPROD = 'disref.AberrantMuscusProd';

    /** the column name for the Spots field */
    const SPOTS = 'disref.Spots';

    /** the column name for the SpotsColor field */
    const SPOTSCOLOR = 'disref.SpotsColor';

    /** the column name for the SpotsonHead field */
    const SPOTSONHEAD = 'disref.SpotsonHead';

    /** the column name for the DorsalSpots field */
    const DORSALSPOTS = 'disref.DorsalSpots';

    /** the column name for the SpotsonDorsalFin field */
    const SPOTSONDORSALFIN = 'disref.SpotsonDorsalFin';

    /** the column name for the SpotsonCaudalFin field */
    const SPOTSONCAUDALFIN = 'disref.SpotsonCaudalFin';

    /** the column name for the SpotsonTrunk field */
    const SPOTSONTRUNK = 'disref.SpotsonTrunk';

    /** the column name for the VentralSpots field */
    const VENTRALSPOTS = 'disref.VentralSpots';

    /** the column name for the SpotsonAnalFin field */
    const SPOTSONANALFIN = 'disref.SpotsonAnalFin';

    /** the column name for the SpotsonUnpairedF field */
    const SPOTSONUNPAIREDF = 'disref.SpotsonUnpairedF';

    /** the column name for the SpotsonTail field */
    const SPOTSONTAIL = 'disref.SpotsonTail';

    /** the column name for the Areas field */
    const AREAS = 'disref.Areas';

    /** the column name for the AreaColorI field */
    const AREACOLORI = 'disref.AreaColorI';

    /** the column name for the AreasonHead field */
    const AREASONHEAD = 'disref.AreasonHead';

    /** the column name for the DorsalAreas field */
    const DORSALAREAS = 'disref.DorsalAreas';

    /** the column name for the AreaonDorsalFin field */
    const AREAONDORSALFIN = 'disref.AreaonDorsalFin';

    /** the column name for the AreaonCaudalFin field */
    const AREAONCAUDALFIN = 'disref.AreaonCaudalFin';

    /** the column name for the AreasonTrunk field */
    const AREASONTRUNK = 'disref.AreasonTrunk';

    /** the column name for the VentralAreas field */
    const VENTRALAREAS = 'disref.VentralAreas';

    /** the column name for the AreaonAnalFin field */
    const AREAONANALFIN = 'disref.AreaonAnalFin';

    /** the column name for the AreaonUnpairedF field */
    const AREAONUNPAIREDF = 'disref.AreaonUnpairedF';

    /** the column name for the AreasonTail field */
    const AREASONTAIL = 'disref.AreasonTail';

    /** the column name for the Boils field */
    const BOILS = 'disref.Boils';

    /** the column name for the BoilsColor field */
    const BOILSCOLOR = 'disref.BoilsColor';

    /** the column name for the BoilsonHead field */
    const BOILSONHEAD = 'disref.BoilsonHead';

    /** the column name for the Dorsalboils field */
    const DORSALBOILS = 'disref.Dorsalboils';

    /** the column name for the BoilsonDorsalFin field */
    const BOILSONDORSALFIN = 'disref.BoilsonDorsalFin';

    /** the column name for the BoilsonCaudalFin field */
    const BOILSONCAUDALFIN = 'disref.BoilsonCaudalFin';

    /** the column name for the BoilsonTrunk field */
    const BOILSONTRUNK = 'disref.BoilsonTrunk';

    /** the column name for the VentralBoils field */
    const VENTRALBOILS = 'disref.VentralBoils';

    /** the column name for the BoilsonAnalFin field */
    const BOILSONANALFIN = 'disref.BoilsonAnalFin';

    /** the column name for the BoilsonUnpairedF field */
    const BOILSONUNPAIREDF = 'disref.BoilsonUnpairedF';

    /** the column name for the BoilsonTail field */
    const BOILSONTAIL = 'disref.BoilsonTail';

    /** the column name for the Ulcer field */
    const ULCER = 'disref.Ulcer';

    /** the column name for the UlcerColor field */
    const ULCERCOLOR = 'disref.UlcerColor';

    /** the column name for the UlceronHead field */
    const ULCERONHEAD = 'disref.UlceronHead';

    /** the column name for the DorsalUlcer field */
    const DORSALULCER = 'disref.DorsalUlcer';

    /** the column name for the UlceronDorsalFin field */
    const ULCERONDORSALFIN = 'disref.UlceronDorsalFin';

    /** the column name for the UlceronCaudalFin field */
    const ULCERONCAUDALFIN = 'disref.UlceronCaudalFin';

    /** the column name for the UlceronTrunk field */
    const ULCERONTRUNK = 'disref.UlceronTrunk';

    /** the column name for the VentralUlcer field */
    const VENTRALULCER = 'disref.VentralUlcer';

    /** the column name for the UlceronAnalFin field */
    const ULCERONANALFIN = 'disref.UlceronAnalFin';

    /** the column name for the UlceronUnpairedF field */
    const ULCERONUNPAIREDF = 'disref.UlceronUnpairedF';

    /** the column name for the UlceronTail field */
    const ULCERONTAIL = 'disref.UlceronTail';

    /** the column name for the AttachmentsSkin2 field */
    const ATTACHMENTSSKIN2 = 'disref.AttachmentsSkin2';

    /** the column name for the AttachmentonHead field */
    const ATTACHMENTONHEAD = 'disref.AttachmentonHead';

    /** the column name for the DorsalAttachments field */
    const DORSALATTACHMENTS = 'disref.DorsalAttachments';

    /** the column name for the AttonDorsalFin field */
    const ATTONDORSALFIN = 'disref.AttonDorsalFin';

    /** the column name for the AttonCaudalFin field */
    const ATTONCAUDALFIN = 'disref.AttonCaudalFin';

    /** the column name for the AttachmentonTrunk field */
    const ATTACHMENTONTRUNK = 'disref.AttachmentonTrunk';

    /** the column name for the VentralAttachments field */
    const VENTRALATTACHMENTS = 'disref.VentralAttachments';

    /** the column name for the AttonAnalFin field */
    const ATTONANALFIN = 'disref.AttonAnalFin';

    /** the column name for the AttonUnpairedF field */
    const ATTONUNPAIREDF = 'disref.AttonUnpairedF';

    /** the column name for the AttachmentonTail field */
    const ATTACHMENTONTAIL = 'disref.AttachmentonTail';

    /** the column name for the Fins1 field */
    const FINS1 = 'disref.Fins1';

    /** the column name for the DorsalFin field */
    const DORSALFIN = 'disref.DorsalFin';

    /** the column name for the CaudalFin field */
    const CAUDALFIN = 'disref.CaudalFin';

    /** the column name for the AnalFin field */
    const ANALFIN = 'disref.AnalFin';

    /** the column name for the UnpairedFins field */
    const UNPAIREDFINS = 'disref.UnpairedFins';

    /** the column name for the AberrantColorGills field */
    const ABERRANTCOLORGILLS = 'disref.AberrantColorGills';

    /** the column name for the AberColorGill field */
    const ABERCOLORGILL = 'disref.AberColorGill';

    /** the column name for the EyeColor field */
    const EYECOLOR = 'disref.EyeColor';

    /** the column name for the AberrantSpotsGill field */
    const ABERRANTSPOTSGILL = 'disref.AberrantSpotsGill';

    /** the column name for the AberrantSpotsColor field */
    const ABERRANTSPOTSCOLOR = 'disref.AberrantSpotsColor';

    /** the column name for the EyeSpots field */
    const EYESPOTS = 'disref.EyeSpots';

    /** the column name for the KnotsonGills field */
    const KNOTSONGILLS = 'disref.KnotsonGills';

    /** the column name for the KnotsColor field */
    const KNOTSCOLOR = 'disref.KnotsColor';

    /** the column name for the EyesCondition field */
    const EYESCONDITION = 'disref.EyesCondition';

    /** the column name for the AreasonGills field */
    const AREASONGILLS = 'disref.AreasonGills';

    /** the column name for the AreasColor field */
    const AREASCOLOR = 'disref.AreasColor';

    /** the column name for the MucusProdGills field */
    const MUCUSPRODGILLS = 'disref.MucusProdGills';

    /** the column name for the ConditionGills field */
    const CONDITIONGILLS = 'disref.ConditionGills';

    /** the column name for the ObjectGills field */
    const OBJECTGILLS = 'disref.ObjectGills';

    /** the column name for the AttachmentGills field */
    const ATTACHMENTGILLS = 'disref.AttachmentGills';

    /** the column name for the BellyCondition field */
    const BELLYCONDITION = 'disref.BellyCondition';

    /** the column name for the AnusCondition field */
    const ANUSCONDITION = 'disref.AnusCondition';

    /** the column name for the BellyLumen field */
    const BELLYLUMEN = 'disref.BellyLumen';

    /** the column name for the AnusColor field */
    const ANUSCOLOR = 'disref.AnusColor';

    /** the column name for the BellyWorms field */
    const BELLYWORMS = 'disref.BellyWorms';

    /** the column name for the AnusObject field */
    const ANUSOBJECT = 'disref.AnusObject';

    /** the column name for the AnusAttachments field */
    const ANUSATTACHMENTS = 'disref.AnusAttachments';

    /** the column name for the AnusExudates field */
    const ANUSEXUDATES = 'disref.AnusExudates';

    /** the column name for the LiverAffl field */
    const LIVERAFFL = 'disref.LiverAffl';

    /** the column name for the LiverSize field */
    const LIVERSIZE = 'disref.LiverSize';

    /** the column name for the LiverApp field */
    const LIVERAPP = 'disref.LiverApp';

    /** the column name for the LiverBlot field */
    const LIVERBLOT = 'disref.LiverBlot';

    /** the column name for the LiverBlC field */
    const LIVERBLC = 'disref.LiverBlC';

    /** the column name for the LiverKnots field */
    const LIVERKNOTS = 'disref.LiverKnots';

    /** the column name for the LiverKnC field */
    const LIVERKNC = 'disref.LiverKnC';

    /** the column name for the SpleenAffl field */
    const SPLEENAFFL = 'disref.SpleenAffl';

    /** the column name for the SpleenSize field */
    const SPLEENSIZE = 'disref.SpleenSize';

    /** the column name for the SpleenApp field */
    const SPLEENAPP = 'disref.SpleenApp';

    /** the column name for the SpleenBlot field */
    const SPLEENBLOT = 'disref.SpleenBlot';

    /** the column name for the SpleenBlC field */
    const SPLEENBLC = 'disref.SpleenBlC';

    /** the column name for the SpleenKnots field */
    const SPLEENKNOTS = 'disref.SpleenKnots';

    /** the column name for the SpleenKnC field */
    const SPLEENKNC = 'disref.SpleenKnC';

    /** the column name for the KidneyAffl field */
    const KIDNEYAFFL = 'disref.KidneyAffl';

    /** the column name for the KidneySize field */
    const KIDNEYSIZE = 'disref.KidneySize';

    /** the column name for the KidneyApp field */
    const KIDNEYAPP = 'disref.KidneyApp';

    /** the column name for the KidneyBlot field */
    const KIDNEYBLOT = 'disref.KidneyBlot';

    /** the column name for the KidneyBlC field */
    const KIDNEYBLC = 'disref.KidneyBlC';

    /** the column name for the KidneyKnots field */
    const KIDNEYKNOTS = 'disref.KidneyKnots';

    /** the column name for the KidneyKnC field */
    const KIDNEYKNC = 'disref.KidneyKnC';

    /** the column name for the SwimBladderAffl field */
    const SWIMBLADDERAFFL = 'disref.SwimBladderAffl';

    /** the column name for the SwimBladderSize field */
    const SWIMBLADDERSIZE = 'disref.SwimBladderSize';

    /** the column name for the SwimBladderApp field */
    const SWIMBLADDERAPP = 'disref.SwimBladderApp';

    /** the column name for the SwimBladderBlot field */
    const SWIMBLADDERBLOT = 'disref.SwimBladderBlot';

    /** the column name for the SwimBladderBlC field */
    const SWIMBLADDERBLC = 'disref.SwimBladderBlC';

    /** the column name for the SwimBladderKnots field */
    const SWIMBLADDERKNOTS = 'disref.SwimBladderKnots';

    /** the column name for the SwimBladderKnC field */
    const SWIMBLADDERKNC = 'disref.SwimBladderKnC';

    /** the column name for the IntestineAffl field */
    const INTESTINEAFFL = 'disref.IntestineAffl';

    /** the column name for the IntestineSize field */
    const INTESTINESIZE = 'disref.IntestineSize';

    /** the column name for the IntestineApp field */
    const INTESTINEAPP = 'disref.IntestineApp';

    /** the column name for the IntestineBlot field */
    const INTESTINEBLOT = 'disref.IntestineBlot';

    /** the column name for the IntestineBlC field */
    const INTESTINEBLC = 'disref.IntestineBlC';

    /** the column name for the IntestineKnots field */
    const INTESTINEKNOTS = 'disref.IntestineKnots';

    /** the column name for the IntestineKnC field */
    const INTESTINEKNC = 'disref.IntestineKnC';

    /** the column name for the OtherOrgans field */
    const OTHERORGANS = 'disref.OtherOrgans';

    /** the column name for the OtherOrgansSize field */
    const OTHERORGANSSIZE = 'disref.OtherOrgansSize';

    /** the column name for the OtherOrgansBlot field */
    const OTHERORGANSBLOT = 'disref.OtherOrgansBlot';

    /** the column name for the OtherOrgansBlC field */
    const OTHERORGANSBLC = 'disref.OtherOrgansBlC';

    /** the column name for the OtherOrgansKnots field */
    const OTHERORGANSKNOTS = 'disref.OtherOrgansKnots';

    /** the column name for the OtherOrgansKnC field */
    const OTHERORGANSKNC = 'disref.OtherOrgansKnC';

    /** the column name for the AllOrgans field */
    const ALLORGANS = 'disref.AllOrgans';

    /** the column name for the AllOrgansApp field */
    const ALLORGANSAPP = 'disref.AllOrgansApp';

    /** the column name for the Bristeling field */
    const BRISTELING = 'disref.Bristeling';

    /** the column name for the Mortality field */
    const MORTALITY = 'disref.Mortality';

    /** the column name for the Loss field */
    const LOSS = 'disref.Loss';

    /** the column name for the SkeletonDeformation field */
    const SKELETONDEFORMATION = 'disref.SkeletonDeformation';

    /** the column name for the Spring field */
    const SPRING = 'disref.Spring';

    /** the column name for the Summer field */
    const SUMMER = 'disref.Summer';

    /** the column name for the GrowthRate field */
    const GROWTHRATE = 'disref.GrowthRate';

    /** the column name for the Autumn field */
    const AUTUMN = 'disref.Autumn';

    /** the column name for the Winter field */
    const WINTER = 'disref.Winter';

    /** the column name for the Condition field */
    const CONDITION = 'disref.Condition';

    /** the column name for the AberrantActivity field */
    const ABERRANTACTIVITY = 'disref.AberrantActivity';

    /** the column name for the Activity field */
    const ACTIVITY = 'disref.Activity';

    /** the column name for the AberrantBalance field */
    const ABERRANTBALANCE = 'disref.AberrantBalance';

    /** the column name for the AberrantSwMotions field */
    const ABERRANTSWMOTIONS = 'disref.AberrantSwMotions';

    /** the column name for the SwimmingMotions field */
    const SWIMMINGMOTIONS = 'disref.SwimmingMotions';

    /** the column name for the AberrantBodyDirec field */
    const ABERRANTBODYDIREC = 'disref.AberrantBodyDirec';

    /** the column name for the Scraping field */
    const SCRAPING = 'disref.Scraping';

    /** the column name for the Jumping field */
    const JUMPING = 'disref.Jumping';

    /** the column name for the AberrantFins field */
    const ABERRANTFINS = 'disref.AberrantFins';

    /** the column name for the Fins field */
    const FINS = 'disref.Fins';

    /** the column name for the AberrantLocation field */
    const ABERRANTLOCATION = 'disref.AberrantLocation';

    /** the column name for the FishNearSurface field */
    const FISHNEARSURFACE = 'disref.FishNearSurface';

    /** the column name for the InfloworOutflow field */
    const INFLOWOROUTFLOW = 'disref.InfloworOutflow';

    /** the column name for the AberrantAppetite field */
    const ABERRANTAPPETITE = 'disref.AberrantAppetite';

    /** the column name for the Operculum field */
    const OPERCULUM = 'disref.Operculum';

    /** the column name for the AberrantVentilation field */
    const ABERRANTVENTILATION = 'disref.AberrantVentilation';

    /** the column name for the Fast field */
    const FAST = 'disref.Fast';

    /** the column name for the Slow field */
    const SLOW = 'disref.Slow';

    /** the column name for the Flat field */
    const FLAT = 'disref.Flat';

    /** the column name for the heavy field */
    const HEAVY = 'disref.heavy';

    /** the column name for the GaspingAir field */
    const GASPINGAIR = 'disref.GaspingAir';

    /** the column name for the FishAfflicted field */
    const FISHAFFLICTED = 'disref.FishAfflicted';

    /** the column name for the FishAfflicted2 field */
    const FISHAFFLICTED2 = 'disref.FishAfflicted2';

    /** the column name for the FishAfflicted3 field */
    const FISHAFFLICTED3 = 'disref.FishAfflicted3';

    /** the column name for the Entered field */
    const ENTERED = 'disref.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'disref.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'disref.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'disref.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'disref.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'disref.DateChecked';

    /** the column name for the Fishafflict field */
    const FISHAFFLICT = 'disref.Fishafflict';

    /** the column name for the Symptom field */
    const SYMPTOM = 'disref.Symptom';

    /** the column name for the Treatments field */
    const TREATMENTS = 'disref.Treatments';

    /** the column name for the Prophylaxes field */
    const PROPHYLAXES = 'disref.Prophylaxes';

    /** the column name for the AddRems field */
    const ADDREMS = 'disref.AddRems';

    /** the column name for the TS field */
    const TS = 'disref.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Disref objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Disref[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. DisrefPeer::$fieldNames[DisrefPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Discode', 'Diseasesrefno', 'Diseasei', 'Diseaseii', 'Pic', 'Othernames', 'Germgenus', 'Germspecies', 'Group', 'Skinfinsafflicted', 'Bellyafflicted', 'Aberrantbehavior', 'Gillsafflicted', 'Anusafflicted', 'Otherbehavior', 'Eyesafflicted', 'Visceraafflicted', 'Othersymptoms', 'Aberrantcolor', 'Aberrantcoat', 'Aberrantmuscusprod', 'Spots', 'Spotscolor', 'Spotsonhead', 'Dorsalspots', 'Spotsondorsalfin', 'Spotsoncaudalfin', 'Spotsontrunk', 'Ventralspots', 'Spotsonanalfin', 'Spotsonunpairedf', 'Spotsontail', 'Areas', 'Areacolori', 'Areasonhead', 'Dorsalareas', 'Areaondorsalfin', 'Areaoncaudalfin', 'Areasontrunk', 'Ventralareas', 'Areaonanalfin', 'Areaonunpairedf', 'Areasontail', 'Boils', 'Boilscolor', 'Boilsonhead', 'Dorsalboils', 'Boilsondorsalfin', 'Boilsoncaudalfin', 'Boilsontrunk', 'Ventralboils', 'Boilsonanalfin', 'Boilsonunpairedf', 'Boilsontail', 'Ulcer', 'Ulcercolor', 'Ulceronhead', 'Dorsalulcer', 'Ulcerondorsalfin', 'Ulceroncaudalfin', 'Ulcerontrunk', 'Ventralulcer', 'Ulceronanalfin', 'Ulceronunpairedf', 'Ulcerontail', 'Attachmentsskin2', 'Attachmentonhead', 'Dorsalattachments', 'Attondorsalfin', 'Attoncaudalfin', 'Attachmentontrunk', 'Ventralattachments', 'Attonanalfin', 'Attonunpairedf', 'Attachmentontail', 'Fins1', 'Dorsalfin', 'Caudalfin', 'Analfin', 'Unpairedfins', 'Aberrantcolorgills', 'Abercolorgill', 'Eyecolor', 'Aberrantspotsgill', 'Aberrantspotscolor', 'Eyespots', 'Knotsongills', 'Knotscolor', 'Eyescondition', 'Areasongills', 'Areascolor', 'Mucusprodgills', 'Conditiongills', 'Objectgills', 'Attachmentgills', 'Bellycondition', 'Anuscondition', 'Bellylumen', 'Anuscolor', 'Bellyworms', 'Anusobject', 'Anusattachments', 'Anusexudates', 'Liveraffl', 'Liversize', 'Liverapp', 'Liverblot', 'Liverblc', 'Liverknots', 'Liverknc', 'Spleenaffl', 'Spleensize', 'Spleenapp', 'Spleenblot', 'Spleenblc', 'Spleenknots', 'Spleenknc', 'Kidneyaffl', 'Kidneysize', 'Kidneyapp', 'Kidneyblot', 'Kidneyblc', 'Kidneyknots', 'Kidneyknc', 'Swimbladderaffl', 'Swimbladdersize', 'Swimbladderapp', 'Swimbladderblot', 'Swimbladderblc', 'Swimbladderknots', 'Swimbladderknc', 'Intestineaffl', 'Intestinesize', 'Intestineapp', 'Intestineblot', 'Intestineblc', 'Intestineknots', 'Intestineknc', 'Otherorgans', 'Otherorganssize', 'Otherorgansblot', 'Otherorgansblc', 'Otherorgansknots', 'Otherorgansknc', 'Allorgans', 'Allorgansapp', 'Bristeling', 'Mortality', 'Loss', 'Skeletondeformation', 'Spring', 'Summer', 'Growthrate', 'Autumn', 'Winter', 'Condition', 'Aberrantactivity', 'Activity', 'Aberrantbalance', 'Aberrantswmotions', 'Swimmingmotions', 'Aberrantbodydirec', 'Scraping', 'Jumping', 'Aberrantfins', 'Fins', 'Aberrantlocation', 'Fishnearsurface', 'Infloworoutflow', 'Aberrantappetite', 'Operculum', 'Aberrantventilation', 'Fast', 'Slow', 'Flat', 'Heavy', 'Gaspingair', 'Fishafflicted', 'Fishafflicted2', 'Fishafflicted3', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Fishafflict', 'Symptom', 'Treatments', 'Prophylaxes', 'Addrems', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('discode', 'diseasesrefno', 'diseasei', 'diseaseii', 'pic', 'othernames', 'germgenus', 'germspecies', 'group', 'skinfinsafflicted', 'bellyafflicted', 'aberrantbehavior', 'gillsafflicted', 'anusafflicted', 'otherbehavior', 'eyesafflicted', 'visceraafflicted', 'othersymptoms', 'aberrantcolor', 'aberrantcoat', 'aberrantmuscusprod', 'spots', 'spotscolor', 'spotsonhead', 'dorsalspots', 'spotsondorsalfin', 'spotsoncaudalfin', 'spotsontrunk', 'ventralspots', 'spotsonanalfin', 'spotsonunpairedf', 'spotsontail', 'areas', 'areacolori', 'areasonhead', 'dorsalareas', 'areaondorsalfin', 'areaoncaudalfin', 'areasontrunk', 'ventralareas', 'areaonanalfin', 'areaonunpairedf', 'areasontail', 'boils', 'boilscolor', 'boilsonhead', 'dorsalboils', 'boilsondorsalfin', 'boilsoncaudalfin', 'boilsontrunk', 'ventralboils', 'boilsonanalfin', 'boilsonunpairedf', 'boilsontail', 'ulcer', 'ulcercolor', 'ulceronhead', 'dorsalulcer', 'ulcerondorsalfin', 'ulceroncaudalfin', 'ulcerontrunk', 'ventralulcer', 'ulceronanalfin', 'ulceronunpairedf', 'ulcerontail', 'attachmentsskin2', 'attachmentonhead', 'dorsalattachments', 'attondorsalfin', 'attoncaudalfin', 'attachmentontrunk', 'ventralattachments', 'attonanalfin', 'attonunpairedf', 'attachmentontail', 'fins1', 'dorsalfin', 'caudalfin', 'analfin', 'unpairedfins', 'aberrantcolorgills', 'abercolorgill', 'eyecolor', 'aberrantspotsgill', 'aberrantspotscolor', 'eyespots', 'knotsongills', 'knotscolor', 'eyescondition', 'areasongills', 'areascolor', 'mucusprodgills', 'conditiongills', 'objectgills', 'attachmentgills', 'bellycondition', 'anuscondition', 'bellylumen', 'anuscolor', 'bellyworms', 'anusobject', 'anusattachments', 'anusexudates', 'liveraffl', 'liversize', 'liverapp', 'liverblot', 'liverblc', 'liverknots', 'liverknc', 'spleenaffl', 'spleensize', 'spleenapp', 'spleenblot', 'spleenblc', 'spleenknots', 'spleenknc', 'kidneyaffl', 'kidneysize', 'kidneyapp', 'kidneyblot', 'kidneyblc', 'kidneyknots', 'kidneyknc', 'swimbladderaffl', 'swimbladdersize', 'swimbladderapp', 'swimbladderblot', 'swimbladderblc', 'swimbladderknots', 'swimbladderknc', 'intestineaffl', 'intestinesize', 'intestineapp', 'intestineblot', 'intestineblc', 'intestineknots', 'intestineknc', 'otherorgans', 'otherorganssize', 'otherorgansblot', 'otherorgansblc', 'otherorgansknots', 'otherorgansknc', 'allorgans', 'allorgansapp', 'bristeling', 'mortality', 'loss', 'skeletondeformation', 'spring', 'summer', 'growthrate', 'autumn', 'winter', 'condition', 'aberrantactivity', 'activity', 'aberrantbalance', 'aberrantswmotions', 'swimmingmotions', 'aberrantbodydirec', 'scraping', 'jumping', 'aberrantfins', 'fins', 'aberrantlocation', 'fishnearsurface', 'infloworoutflow', 'aberrantappetite', 'operculum', 'aberrantventilation', 'fast', 'slow', 'flat', 'heavy', 'gaspingair', 'fishafflicted', 'fishafflicted2', 'fishafflicted3', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'fishafflict', 'symptom', 'treatments', 'prophylaxes', 'addrems', 'ts', ),
        BasePeer::TYPE_COLNAME => array (DisrefPeer::DISCODE, DisrefPeer::DISEASESREFNO, DisrefPeer::DISEASEI, DisrefPeer::DISEASEII, DisrefPeer::PIC, DisrefPeer::OTHERNAMES, DisrefPeer::GERMGENUS, DisrefPeer::GERMSPECIES, DisrefPeer::GROUP, DisrefPeer::SKINFINSAFFLICTED, DisrefPeer::BELLYAFFLICTED, DisrefPeer::ABERRANTBEHAVIOR, DisrefPeer::GILLSAFFLICTED, DisrefPeer::ANUSAFFLICTED, DisrefPeer::OTHERBEHAVIOR, DisrefPeer::EYESAFFLICTED, DisrefPeer::VISCERAAFFLICTED, DisrefPeer::OTHERSYMPTOMS, DisrefPeer::ABERRANTCOLOR, DisrefPeer::ABERRANTCOAT, DisrefPeer::ABERRANTMUSCUSPROD, DisrefPeer::SPOTS, DisrefPeer::SPOTSCOLOR, DisrefPeer::SPOTSONHEAD, DisrefPeer::DORSALSPOTS, DisrefPeer::SPOTSONDORSALFIN, DisrefPeer::SPOTSONCAUDALFIN, DisrefPeer::SPOTSONTRUNK, DisrefPeer::VENTRALSPOTS, DisrefPeer::SPOTSONANALFIN, DisrefPeer::SPOTSONUNPAIREDF, DisrefPeer::SPOTSONTAIL, DisrefPeer::AREAS, DisrefPeer::AREACOLORI, DisrefPeer::AREASONHEAD, DisrefPeer::DORSALAREAS, DisrefPeer::AREAONDORSALFIN, DisrefPeer::AREAONCAUDALFIN, DisrefPeer::AREASONTRUNK, DisrefPeer::VENTRALAREAS, DisrefPeer::AREAONANALFIN, DisrefPeer::AREAONUNPAIREDF, DisrefPeer::AREASONTAIL, DisrefPeer::BOILS, DisrefPeer::BOILSCOLOR, DisrefPeer::BOILSONHEAD, DisrefPeer::DORSALBOILS, DisrefPeer::BOILSONDORSALFIN, DisrefPeer::BOILSONCAUDALFIN, DisrefPeer::BOILSONTRUNK, DisrefPeer::VENTRALBOILS, DisrefPeer::BOILSONANALFIN, DisrefPeer::BOILSONUNPAIREDF, DisrefPeer::BOILSONTAIL, DisrefPeer::ULCER, DisrefPeer::ULCERCOLOR, DisrefPeer::ULCERONHEAD, DisrefPeer::DORSALULCER, DisrefPeer::ULCERONDORSALFIN, DisrefPeer::ULCERONCAUDALFIN, DisrefPeer::ULCERONTRUNK, DisrefPeer::VENTRALULCER, DisrefPeer::ULCERONANALFIN, DisrefPeer::ULCERONUNPAIREDF, DisrefPeer::ULCERONTAIL, DisrefPeer::ATTACHMENTSSKIN2, DisrefPeer::ATTACHMENTONHEAD, DisrefPeer::DORSALATTACHMENTS, DisrefPeer::ATTONDORSALFIN, DisrefPeer::ATTONCAUDALFIN, DisrefPeer::ATTACHMENTONTRUNK, DisrefPeer::VENTRALATTACHMENTS, DisrefPeer::ATTONANALFIN, DisrefPeer::ATTONUNPAIREDF, DisrefPeer::ATTACHMENTONTAIL, DisrefPeer::FINS1, DisrefPeer::DORSALFIN, DisrefPeer::CAUDALFIN, DisrefPeer::ANALFIN, DisrefPeer::UNPAIREDFINS, DisrefPeer::ABERRANTCOLORGILLS, DisrefPeer::ABERCOLORGILL, DisrefPeer::EYECOLOR, DisrefPeer::ABERRANTSPOTSGILL, DisrefPeer::ABERRANTSPOTSCOLOR, DisrefPeer::EYESPOTS, DisrefPeer::KNOTSONGILLS, DisrefPeer::KNOTSCOLOR, DisrefPeer::EYESCONDITION, DisrefPeer::AREASONGILLS, DisrefPeer::AREASCOLOR, DisrefPeer::MUCUSPRODGILLS, DisrefPeer::CONDITIONGILLS, DisrefPeer::OBJECTGILLS, DisrefPeer::ATTACHMENTGILLS, DisrefPeer::BELLYCONDITION, DisrefPeer::ANUSCONDITION, DisrefPeer::BELLYLUMEN, DisrefPeer::ANUSCOLOR, DisrefPeer::BELLYWORMS, DisrefPeer::ANUSOBJECT, DisrefPeer::ANUSATTACHMENTS, DisrefPeer::ANUSEXUDATES, DisrefPeer::LIVERAFFL, DisrefPeer::LIVERSIZE, DisrefPeer::LIVERAPP, DisrefPeer::LIVERBLOT, DisrefPeer::LIVERBLC, DisrefPeer::LIVERKNOTS, DisrefPeer::LIVERKNC, DisrefPeer::SPLEENAFFL, DisrefPeer::SPLEENSIZE, DisrefPeer::SPLEENAPP, DisrefPeer::SPLEENBLOT, DisrefPeer::SPLEENBLC, DisrefPeer::SPLEENKNOTS, DisrefPeer::SPLEENKNC, DisrefPeer::KIDNEYAFFL, DisrefPeer::KIDNEYSIZE, DisrefPeer::KIDNEYAPP, DisrefPeer::KIDNEYBLOT, DisrefPeer::KIDNEYBLC, DisrefPeer::KIDNEYKNOTS, DisrefPeer::KIDNEYKNC, DisrefPeer::SWIMBLADDERAFFL, DisrefPeer::SWIMBLADDERSIZE, DisrefPeer::SWIMBLADDERAPP, DisrefPeer::SWIMBLADDERBLOT, DisrefPeer::SWIMBLADDERBLC, DisrefPeer::SWIMBLADDERKNOTS, DisrefPeer::SWIMBLADDERKNC, DisrefPeer::INTESTINEAFFL, DisrefPeer::INTESTINESIZE, DisrefPeer::INTESTINEAPP, DisrefPeer::INTESTINEBLOT, DisrefPeer::INTESTINEBLC, DisrefPeer::INTESTINEKNOTS, DisrefPeer::INTESTINEKNC, DisrefPeer::OTHERORGANS, DisrefPeer::OTHERORGANSSIZE, DisrefPeer::OTHERORGANSBLOT, DisrefPeer::OTHERORGANSBLC, DisrefPeer::OTHERORGANSKNOTS, DisrefPeer::OTHERORGANSKNC, DisrefPeer::ALLORGANS, DisrefPeer::ALLORGANSAPP, DisrefPeer::BRISTELING, DisrefPeer::MORTALITY, DisrefPeer::LOSS, DisrefPeer::SKELETONDEFORMATION, DisrefPeer::SPRING, DisrefPeer::SUMMER, DisrefPeer::GROWTHRATE, DisrefPeer::AUTUMN, DisrefPeer::WINTER, DisrefPeer::CONDITION, DisrefPeer::ABERRANTACTIVITY, DisrefPeer::ACTIVITY, DisrefPeer::ABERRANTBALANCE, DisrefPeer::ABERRANTSWMOTIONS, DisrefPeer::SWIMMINGMOTIONS, DisrefPeer::ABERRANTBODYDIREC, DisrefPeer::SCRAPING, DisrefPeer::JUMPING, DisrefPeer::ABERRANTFINS, DisrefPeer::FINS, DisrefPeer::ABERRANTLOCATION, DisrefPeer::FISHNEARSURFACE, DisrefPeer::INFLOWOROUTFLOW, DisrefPeer::ABERRANTAPPETITE, DisrefPeer::OPERCULUM, DisrefPeer::ABERRANTVENTILATION, DisrefPeer::FAST, DisrefPeer::SLOW, DisrefPeer::FLAT, DisrefPeer::HEAVY, DisrefPeer::GASPINGAIR, DisrefPeer::FISHAFFLICTED, DisrefPeer::FISHAFFLICTED2, DisrefPeer::FISHAFFLICTED3, DisrefPeer::ENTERED, DisrefPeer::DATEENTERED, DisrefPeer::MODIFIED, DisrefPeer::DATEMODIFIED, DisrefPeer::EXPERT, DisrefPeer::DATECHECKED, DisrefPeer::FISHAFFLICT, DisrefPeer::SYMPTOM, DisrefPeer::TREATMENTS, DisrefPeer::PROPHYLAXES, DisrefPeer::ADDREMS, DisrefPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('DISCODE', 'DISEASESREFNO', 'DISEASEI', 'DISEASEII', 'PIC', 'OTHERNAMES', 'GERMGENUS', 'GERMSPECIES', 'GROUP', 'SKINFINSAFFLICTED', 'BELLYAFFLICTED', 'ABERRANTBEHAVIOR', 'GILLSAFFLICTED', 'ANUSAFFLICTED', 'OTHERBEHAVIOR', 'EYESAFFLICTED', 'VISCERAAFFLICTED', 'OTHERSYMPTOMS', 'ABERRANTCOLOR', 'ABERRANTCOAT', 'ABERRANTMUSCUSPROD', 'SPOTS', 'SPOTSCOLOR', 'SPOTSONHEAD', 'DORSALSPOTS', 'SPOTSONDORSALFIN', 'SPOTSONCAUDALFIN', 'SPOTSONTRUNK', 'VENTRALSPOTS', 'SPOTSONANALFIN', 'SPOTSONUNPAIREDF', 'SPOTSONTAIL', 'AREAS', 'AREACOLORI', 'AREASONHEAD', 'DORSALAREAS', 'AREAONDORSALFIN', 'AREAONCAUDALFIN', 'AREASONTRUNK', 'VENTRALAREAS', 'AREAONANALFIN', 'AREAONUNPAIREDF', 'AREASONTAIL', 'BOILS', 'BOILSCOLOR', 'BOILSONHEAD', 'DORSALBOILS', 'BOILSONDORSALFIN', 'BOILSONCAUDALFIN', 'BOILSONTRUNK', 'VENTRALBOILS', 'BOILSONANALFIN', 'BOILSONUNPAIREDF', 'BOILSONTAIL', 'ULCER', 'ULCERCOLOR', 'ULCERONHEAD', 'DORSALULCER', 'ULCERONDORSALFIN', 'ULCERONCAUDALFIN', 'ULCERONTRUNK', 'VENTRALULCER', 'ULCERONANALFIN', 'ULCERONUNPAIREDF', 'ULCERONTAIL', 'ATTACHMENTSSKIN2', 'ATTACHMENTONHEAD', 'DORSALATTACHMENTS', 'ATTONDORSALFIN', 'ATTONCAUDALFIN', 'ATTACHMENTONTRUNK', 'VENTRALATTACHMENTS', 'ATTONANALFIN', 'ATTONUNPAIREDF', 'ATTACHMENTONTAIL', 'FINS1', 'DORSALFIN', 'CAUDALFIN', 'ANALFIN', 'UNPAIREDFINS', 'ABERRANTCOLORGILLS', 'ABERCOLORGILL', 'EYECOLOR', 'ABERRANTSPOTSGILL', 'ABERRANTSPOTSCOLOR', 'EYESPOTS', 'KNOTSONGILLS', 'KNOTSCOLOR', 'EYESCONDITION', 'AREASONGILLS', 'AREASCOLOR', 'MUCUSPRODGILLS', 'CONDITIONGILLS', 'OBJECTGILLS', 'ATTACHMENTGILLS', 'BELLYCONDITION', 'ANUSCONDITION', 'BELLYLUMEN', 'ANUSCOLOR', 'BELLYWORMS', 'ANUSOBJECT', 'ANUSATTACHMENTS', 'ANUSEXUDATES', 'LIVERAFFL', 'LIVERSIZE', 'LIVERAPP', 'LIVERBLOT', 'LIVERBLC', 'LIVERKNOTS', 'LIVERKNC', 'SPLEENAFFL', 'SPLEENSIZE', 'SPLEENAPP', 'SPLEENBLOT', 'SPLEENBLC', 'SPLEENKNOTS', 'SPLEENKNC', 'KIDNEYAFFL', 'KIDNEYSIZE', 'KIDNEYAPP', 'KIDNEYBLOT', 'KIDNEYBLC', 'KIDNEYKNOTS', 'KIDNEYKNC', 'SWIMBLADDERAFFL', 'SWIMBLADDERSIZE', 'SWIMBLADDERAPP', 'SWIMBLADDERBLOT', 'SWIMBLADDERBLC', 'SWIMBLADDERKNOTS', 'SWIMBLADDERKNC', 'INTESTINEAFFL', 'INTESTINESIZE', 'INTESTINEAPP', 'INTESTINEBLOT', 'INTESTINEBLC', 'INTESTINEKNOTS', 'INTESTINEKNC', 'OTHERORGANS', 'OTHERORGANSSIZE', 'OTHERORGANSBLOT', 'OTHERORGANSBLC', 'OTHERORGANSKNOTS', 'OTHERORGANSKNC', 'ALLORGANS', 'ALLORGANSAPP', 'BRISTELING', 'MORTALITY', 'LOSS', 'SKELETONDEFORMATION', 'SPRING', 'SUMMER', 'GROWTHRATE', 'AUTUMN', 'WINTER', 'CONDITION', 'ABERRANTACTIVITY', 'ACTIVITY', 'ABERRANTBALANCE', 'ABERRANTSWMOTIONS', 'SWIMMINGMOTIONS', 'ABERRANTBODYDIREC', 'SCRAPING', 'JUMPING', 'ABERRANTFINS', 'FINS', 'ABERRANTLOCATION', 'FISHNEARSURFACE', 'INFLOWOROUTFLOW', 'ABERRANTAPPETITE', 'OPERCULUM', 'ABERRANTVENTILATION', 'FAST', 'SLOW', 'FLAT', 'HEAVY', 'GASPINGAIR', 'FISHAFFLICTED', 'FISHAFFLICTED2', 'FISHAFFLICTED3', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'FISHAFFLICT', 'SYMPTOM', 'TREATMENTS', 'PROPHYLAXES', 'ADDREMS', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('DisCode', 'DiseasesRefNo', 'DiseaseI', 'DiseaseII', 'Pic', 'Othernames', 'GermGenus', 'GermSpecies', 'Group', 'SkinFinsAfflicted', 'BellyAfflicted', 'AberrantBehavior', 'GillsAfflicted', 'AnusAfflicted', 'OtherBehavior', 'EyesAfflicted', 'VisceraAfflicted', 'OtherSymptoms', 'AberrantColor', 'AberrantCoat', 'AberrantMuscusProd', 'Spots', 'SpotsColor', 'SpotsonHead', 'DorsalSpots', 'SpotsonDorsalFin', 'SpotsonCaudalFin', 'SpotsonTrunk', 'VentralSpots', 'SpotsonAnalFin', 'SpotsonUnpairedF', 'SpotsonTail', 'Areas', 'AreaColorI', 'AreasonHead', 'DorsalAreas', 'AreaonDorsalFin', 'AreaonCaudalFin', 'AreasonTrunk', 'VentralAreas', 'AreaonAnalFin', 'AreaonUnpairedF', 'AreasonTail', 'Boils', 'BoilsColor', 'BoilsonHead', 'Dorsalboils', 'BoilsonDorsalFin', 'BoilsonCaudalFin', 'BoilsonTrunk', 'VentralBoils', 'BoilsonAnalFin', 'BoilsonUnpairedF', 'BoilsonTail', 'Ulcer', 'UlcerColor', 'UlceronHead', 'DorsalUlcer', 'UlceronDorsalFin', 'UlceronCaudalFin', 'UlceronTrunk', 'VentralUlcer', 'UlceronAnalFin', 'UlceronUnpairedF', 'UlceronTail', 'AttachmentsSkin2', 'AttachmentonHead', 'DorsalAttachments', 'AttonDorsalFin', 'AttonCaudalFin', 'AttachmentonTrunk', 'VentralAttachments', 'AttonAnalFin', 'AttonUnpairedF', 'AttachmentonTail', 'Fins1', 'DorsalFin', 'CaudalFin', 'AnalFin', 'UnpairedFins', 'AberrantColorGills', 'AberColorGill', 'EyeColor', 'AberrantSpotsGill', 'AberrantSpotsColor', 'EyeSpots', 'KnotsonGills', 'KnotsColor', 'EyesCondition', 'AreasonGills', 'AreasColor', 'MucusProdGills', 'ConditionGills', 'ObjectGills', 'AttachmentGills', 'BellyCondition', 'AnusCondition', 'BellyLumen', 'AnusColor', 'BellyWorms', 'AnusObject', 'AnusAttachments', 'AnusExudates', 'LiverAffl', 'LiverSize', 'LiverApp', 'LiverBlot', 'LiverBlC', 'LiverKnots', 'LiverKnC', 'SpleenAffl', 'SpleenSize', 'SpleenApp', 'SpleenBlot', 'SpleenBlC', 'SpleenKnots', 'SpleenKnC', 'KidneyAffl', 'KidneySize', 'KidneyApp', 'KidneyBlot', 'KidneyBlC', 'KidneyKnots', 'KidneyKnC', 'SwimBladderAffl', 'SwimBladderSize', 'SwimBladderApp', 'SwimBladderBlot', 'SwimBladderBlC', 'SwimBladderKnots', 'SwimBladderKnC', 'IntestineAffl', 'IntestineSize', 'IntestineApp', 'IntestineBlot', 'IntestineBlC', 'IntestineKnots', 'IntestineKnC', 'OtherOrgans', 'OtherOrgansSize', 'OtherOrgansBlot', 'OtherOrgansBlC', 'OtherOrgansKnots', 'OtherOrgansKnC', 'AllOrgans', 'AllOrgansApp', 'Bristeling', 'Mortality', 'Loss', 'SkeletonDeformation', 'Spring', 'Summer', 'GrowthRate', 'Autumn', 'Winter', 'Condition', 'AberrantActivity', 'Activity', 'AberrantBalance', 'AberrantSwMotions', 'SwimmingMotions', 'AberrantBodyDirec', 'Scraping', 'Jumping', 'AberrantFins', 'Fins', 'AberrantLocation', 'FishNearSurface', 'InfloworOutflow', 'AberrantAppetite', 'Operculum', 'AberrantVentilation', 'Fast', 'Slow', 'Flat', 'heavy', 'GaspingAir', 'FishAfflicted', 'FishAfflicted2', 'FishAfflicted3', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Fishafflict', 'Symptom', 'Treatments', 'Prophylaxes', 'AddRems', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. DisrefPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Discode' => 0, 'Diseasesrefno' => 1, 'Diseasei' => 2, 'Diseaseii' => 3, 'Pic' => 4, 'Othernames' => 5, 'Germgenus' => 6, 'Germspecies' => 7, 'Group' => 8, 'Skinfinsafflicted' => 9, 'Bellyafflicted' => 10, 'Aberrantbehavior' => 11, 'Gillsafflicted' => 12, 'Anusafflicted' => 13, 'Otherbehavior' => 14, 'Eyesafflicted' => 15, 'Visceraafflicted' => 16, 'Othersymptoms' => 17, 'Aberrantcolor' => 18, 'Aberrantcoat' => 19, 'Aberrantmuscusprod' => 20, 'Spots' => 21, 'Spotscolor' => 22, 'Spotsonhead' => 23, 'Dorsalspots' => 24, 'Spotsondorsalfin' => 25, 'Spotsoncaudalfin' => 26, 'Spotsontrunk' => 27, 'Ventralspots' => 28, 'Spotsonanalfin' => 29, 'Spotsonunpairedf' => 30, 'Spotsontail' => 31, 'Areas' => 32, 'Areacolori' => 33, 'Areasonhead' => 34, 'Dorsalareas' => 35, 'Areaondorsalfin' => 36, 'Areaoncaudalfin' => 37, 'Areasontrunk' => 38, 'Ventralareas' => 39, 'Areaonanalfin' => 40, 'Areaonunpairedf' => 41, 'Areasontail' => 42, 'Boils' => 43, 'Boilscolor' => 44, 'Boilsonhead' => 45, 'Dorsalboils' => 46, 'Boilsondorsalfin' => 47, 'Boilsoncaudalfin' => 48, 'Boilsontrunk' => 49, 'Ventralboils' => 50, 'Boilsonanalfin' => 51, 'Boilsonunpairedf' => 52, 'Boilsontail' => 53, 'Ulcer' => 54, 'Ulcercolor' => 55, 'Ulceronhead' => 56, 'Dorsalulcer' => 57, 'Ulcerondorsalfin' => 58, 'Ulceroncaudalfin' => 59, 'Ulcerontrunk' => 60, 'Ventralulcer' => 61, 'Ulceronanalfin' => 62, 'Ulceronunpairedf' => 63, 'Ulcerontail' => 64, 'Attachmentsskin2' => 65, 'Attachmentonhead' => 66, 'Dorsalattachments' => 67, 'Attondorsalfin' => 68, 'Attoncaudalfin' => 69, 'Attachmentontrunk' => 70, 'Ventralattachments' => 71, 'Attonanalfin' => 72, 'Attonunpairedf' => 73, 'Attachmentontail' => 74, 'Fins1' => 75, 'Dorsalfin' => 76, 'Caudalfin' => 77, 'Analfin' => 78, 'Unpairedfins' => 79, 'Aberrantcolorgills' => 80, 'Abercolorgill' => 81, 'Eyecolor' => 82, 'Aberrantspotsgill' => 83, 'Aberrantspotscolor' => 84, 'Eyespots' => 85, 'Knotsongills' => 86, 'Knotscolor' => 87, 'Eyescondition' => 88, 'Areasongills' => 89, 'Areascolor' => 90, 'Mucusprodgills' => 91, 'Conditiongills' => 92, 'Objectgills' => 93, 'Attachmentgills' => 94, 'Bellycondition' => 95, 'Anuscondition' => 96, 'Bellylumen' => 97, 'Anuscolor' => 98, 'Bellyworms' => 99, 'Anusobject' => 100, 'Anusattachments' => 101, 'Anusexudates' => 102, 'Liveraffl' => 103, 'Liversize' => 104, 'Liverapp' => 105, 'Liverblot' => 106, 'Liverblc' => 107, 'Liverknots' => 108, 'Liverknc' => 109, 'Spleenaffl' => 110, 'Spleensize' => 111, 'Spleenapp' => 112, 'Spleenblot' => 113, 'Spleenblc' => 114, 'Spleenknots' => 115, 'Spleenknc' => 116, 'Kidneyaffl' => 117, 'Kidneysize' => 118, 'Kidneyapp' => 119, 'Kidneyblot' => 120, 'Kidneyblc' => 121, 'Kidneyknots' => 122, 'Kidneyknc' => 123, 'Swimbladderaffl' => 124, 'Swimbladdersize' => 125, 'Swimbladderapp' => 126, 'Swimbladderblot' => 127, 'Swimbladderblc' => 128, 'Swimbladderknots' => 129, 'Swimbladderknc' => 130, 'Intestineaffl' => 131, 'Intestinesize' => 132, 'Intestineapp' => 133, 'Intestineblot' => 134, 'Intestineblc' => 135, 'Intestineknots' => 136, 'Intestineknc' => 137, 'Otherorgans' => 138, 'Otherorganssize' => 139, 'Otherorgansblot' => 140, 'Otherorgansblc' => 141, 'Otherorgansknots' => 142, 'Otherorgansknc' => 143, 'Allorgans' => 144, 'Allorgansapp' => 145, 'Bristeling' => 146, 'Mortality' => 147, 'Loss' => 148, 'Skeletondeformation' => 149, 'Spring' => 150, 'Summer' => 151, 'Growthrate' => 152, 'Autumn' => 153, 'Winter' => 154, 'Condition' => 155, 'Aberrantactivity' => 156, 'Activity' => 157, 'Aberrantbalance' => 158, 'Aberrantswmotions' => 159, 'Swimmingmotions' => 160, 'Aberrantbodydirec' => 161, 'Scraping' => 162, 'Jumping' => 163, 'Aberrantfins' => 164, 'Fins' => 165, 'Aberrantlocation' => 166, 'Fishnearsurface' => 167, 'Infloworoutflow' => 168, 'Aberrantappetite' => 169, 'Operculum' => 170, 'Aberrantventilation' => 171, 'Fast' => 172, 'Slow' => 173, 'Flat' => 174, 'Heavy' => 175, 'Gaspingair' => 176, 'Fishafflicted' => 177, 'Fishafflicted2' => 178, 'Fishafflicted3' => 179, 'Entered' => 180, 'Dateentered' => 181, 'Modified' => 182, 'Datemodified' => 183, 'Expert' => 184, 'Datechecked' => 185, 'Fishafflict' => 186, 'Symptom' => 187, 'Treatments' => 188, 'Prophylaxes' => 189, 'Addrems' => 190, 'Ts' => 191, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('discode' => 0, 'diseasesrefno' => 1, 'diseasei' => 2, 'diseaseii' => 3, 'pic' => 4, 'othernames' => 5, 'germgenus' => 6, 'germspecies' => 7, 'group' => 8, 'skinfinsafflicted' => 9, 'bellyafflicted' => 10, 'aberrantbehavior' => 11, 'gillsafflicted' => 12, 'anusafflicted' => 13, 'otherbehavior' => 14, 'eyesafflicted' => 15, 'visceraafflicted' => 16, 'othersymptoms' => 17, 'aberrantcolor' => 18, 'aberrantcoat' => 19, 'aberrantmuscusprod' => 20, 'spots' => 21, 'spotscolor' => 22, 'spotsonhead' => 23, 'dorsalspots' => 24, 'spotsondorsalfin' => 25, 'spotsoncaudalfin' => 26, 'spotsontrunk' => 27, 'ventralspots' => 28, 'spotsonanalfin' => 29, 'spotsonunpairedf' => 30, 'spotsontail' => 31, 'areas' => 32, 'areacolori' => 33, 'areasonhead' => 34, 'dorsalareas' => 35, 'areaondorsalfin' => 36, 'areaoncaudalfin' => 37, 'areasontrunk' => 38, 'ventralareas' => 39, 'areaonanalfin' => 40, 'areaonunpairedf' => 41, 'areasontail' => 42, 'boils' => 43, 'boilscolor' => 44, 'boilsonhead' => 45, 'dorsalboils' => 46, 'boilsondorsalfin' => 47, 'boilsoncaudalfin' => 48, 'boilsontrunk' => 49, 'ventralboils' => 50, 'boilsonanalfin' => 51, 'boilsonunpairedf' => 52, 'boilsontail' => 53, 'ulcer' => 54, 'ulcercolor' => 55, 'ulceronhead' => 56, 'dorsalulcer' => 57, 'ulcerondorsalfin' => 58, 'ulceroncaudalfin' => 59, 'ulcerontrunk' => 60, 'ventralulcer' => 61, 'ulceronanalfin' => 62, 'ulceronunpairedf' => 63, 'ulcerontail' => 64, 'attachmentsskin2' => 65, 'attachmentonhead' => 66, 'dorsalattachments' => 67, 'attondorsalfin' => 68, 'attoncaudalfin' => 69, 'attachmentontrunk' => 70, 'ventralattachments' => 71, 'attonanalfin' => 72, 'attonunpairedf' => 73, 'attachmentontail' => 74, 'fins1' => 75, 'dorsalfin' => 76, 'caudalfin' => 77, 'analfin' => 78, 'unpairedfins' => 79, 'aberrantcolorgills' => 80, 'abercolorgill' => 81, 'eyecolor' => 82, 'aberrantspotsgill' => 83, 'aberrantspotscolor' => 84, 'eyespots' => 85, 'knotsongills' => 86, 'knotscolor' => 87, 'eyescondition' => 88, 'areasongills' => 89, 'areascolor' => 90, 'mucusprodgills' => 91, 'conditiongills' => 92, 'objectgills' => 93, 'attachmentgills' => 94, 'bellycondition' => 95, 'anuscondition' => 96, 'bellylumen' => 97, 'anuscolor' => 98, 'bellyworms' => 99, 'anusobject' => 100, 'anusattachments' => 101, 'anusexudates' => 102, 'liveraffl' => 103, 'liversize' => 104, 'liverapp' => 105, 'liverblot' => 106, 'liverblc' => 107, 'liverknots' => 108, 'liverknc' => 109, 'spleenaffl' => 110, 'spleensize' => 111, 'spleenapp' => 112, 'spleenblot' => 113, 'spleenblc' => 114, 'spleenknots' => 115, 'spleenknc' => 116, 'kidneyaffl' => 117, 'kidneysize' => 118, 'kidneyapp' => 119, 'kidneyblot' => 120, 'kidneyblc' => 121, 'kidneyknots' => 122, 'kidneyknc' => 123, 'swimbladderaffl' => 124, 'swimbladdersize' => 125, 'swimbladderapp' => 126, 'swimbladderblot' => 127, 'swimbladderblc' => 128, 'swimbladderknots' => 129, 'swimbladderknc' => 130, 'intestineaffl' => 131, 'intestinesize' => 132, 'intestineapp' => 133, 'intestineblot' => 134, 'intestineblc' => 135, 'intestineknots' => 136, 'intestineknc' => 137, 'otherorgans' => 138, 'otherorganssize' => 139, 'otherorgansblot' => 140, 'otherorgansblc' => 141, 'otherorgansknots' => 142, 'otherorgansknc' => 143, 'allorgans' => 144, 'allorgansapp' => 145, 'bristeling' => 146, 'mortality' => 147, 'loss' => 148, 'skeletondeformation' => 149, 'spring' => 150, 'summer' => 151, 'growthrate' => 152, 'autumn' => 153, 'winter' => 154, 'condition' => 155, 'aberrantactivity' => 156, 'activity' => 157, 'aberrantbalance' => 158, 'aberrantswmotions' => 159, 'swimmingmotions' => 160, 'aberrantbodydirec' => 161, 'scraping' => 162, 'jumping' => 163, 'aberrantfins' => 164, 'fins' => 165, 'aberrantlocation' => 166, 'fishnearsurface' => 167, 'infloworoutflow' => 168, 'aberrantappetite' => 169, 'operculum' => 170, 'aberrantventilation' => 171, 'fast' => 172, 'slow' => 173, 'flat' => 174, 'heavy' => 175, 'gaspingair' => 176, 'fishafflicted' => 177, 'fishafflicted2' => 178, 'fishafflicted3' => 179, 'entered' => 180, 'dateentered' => 181, 'modified' => 182, 'datemodified' => 183, 'expert' => 184, 'datechecked' => 185, 'fishafflict' => 186, 'symptom' => 187, 'treatments' => 188, 'prophylaxes' => 189, 'addrems' => 190, 'ts' => 191, ),
        BasePeer::TYPE_COLNAME => array (DisrefPeer::DISCODE => 0, DisrefPeer::DISEASESREFNO => 1, DisrefPeer::DISEASEI => 2, DisrefPeer::DISEASEII => 3, DisrefPeer::PIC => 4, DisrefPeer::OTHERNAMES => 5, DisrefPeer::GERMGENUS => 6, DisrefPeer::GERMSPECIES => 7, DisrefPeer::GROUP => 8, DisrefPeer::SKINFINSAFFLICTED => 9, DisrefPeer::BELLYAFFLICTED => 10, DisrefPeer::ABERRANTBEHAVIOR => 11, DisrefPeer::GILLSAFFLICTED => 12, DisrefPeer::ANUSAFFLICTED => 13, DisrefPeer::OTHERBEHAVIOR => 14, DisrefPeer::EYESAFFLICTED => 15, DisrefPeer::VISCERAAFFLICTED => 16, DisrefPeer::OTHERSYMPTOMS => 17, DisrefPeer::ABERRANTCOLOR => 18, DisrefPeer::ABERRANTCOAT => 19, DisrefPeer::ABERRANTMUSCUSPROD => 20, DisrefPeer::SPOTS => 21, DisrefPeer::SPOTSCOLOR => 22, DisrefPeer::SPOTSONHEAD => 23, DisrefPeer::DORSALSPOTS => 24, DisrefPeer::SPOTSONDORSALFIN => 25, DisrefPeer::SPOTSONCAUDALFIN => 26, DisrefPeer::SPOTSONTRUNK => 27, DisrefPeer::VENTRALSPOTS => 28, DisrefPeer::SPOTSONANALFIN => 29, DisrefPeer::SPOTSONUNPAIREDF => 30, DisrefPeer::SPOTSONTAIL => 31, DisrefPeer::AREAS => 32, DisrefPeer::AREACOLORI => 33, DisrefPeer::AREASONHEAD => 34, DisrefPeer::DORSALAREAS => 35, DisrefPeer::AREAONDORSALFIN => 36, DisrefPeer::AREAONCAUDALFIN => 37, DisrefPeer::AREASONTRUNK => 38, DisrefPeer::VENTRALAREAS => 39, DisrefPeer::AREAONANALFIN => 40, DisrefPeer::AREAONUNPAIREDF => 41, DisrefPeer::AREASONTAIL => 42, DisrefPeer::BOILS => 43, DisrefPeer::BOILSCOLOR => 44, DisrefPeer::BOILSONHEAD => 45, DisrefPeer::DORSALBOILS => 46, DisrefPeer::BOILSONDORSALFIN => 47, DisrefPeer::BOILSONCAUDALFIN => 48, DisrefPeer::BOILSONTRUNK => 49, DisrefPeer::VENTRALBOILS => 50, DisrefPeer::BOILSONANALFIN => 51, DisrefPeer::BOILSONUNPAIREDF => 52, DisrefPeer::BOILSONTAIL => 53, DisrefPeer::ULCER => 54, DisrefPeer::ULCERCOLOR => 55, DisrefPeer::ULCERONHEAD => 56, DisrefPeer::DORSALULCER => 57, DisrefPeer::ULCERONDORSALFIN => 58, DisrefPeer::ULCERONCAUDALFIN => 59, DisrefPeer::ULCERONTRUNK => 60, DisrefPeer::VENTRALULCER => 61, DisrefPeer::ULCERONANALFIN => 62, DisrefPeer::ULCERONUNPAIREDF => 63, DisrefPeer::ULCERONTAIL => 64, DisrefPeer::ATTACHMENTSSKIN2 => 65, DisrefPeer::ATTACHMENTONHEAD => 66, DisrefPeer::DORSALATTACHMENTS => 67, DisrefPeer::ATTONDORSALFIN => 68, DisrefPeer::ATTONCAUDALFIN => 69, DisrefPeer::ATTACHMENTONTRUNK => 70, DisrefPeer::VENTRALATTACHMENTS => 71, DisrefPeer::ATTONANALFIN => 72, DisrefPeer::ATTONUNPAIREDF => 73, DisrefPeer::ATTACHMENTONTAIL => 74, DisrefPeer::FINS1 => 75, DisrefPeer::DORSALFIN => 76, DisrefPeer::CAUDALFIN => 77, DisrefPeer::ANALFIN => 78, DisrefPeer::UNPAIREDFINS => 79, DisrefPeer::ABERRANTCOLORGILLS => 80, DisrefPeer::ABERCOLORGILL => 81, DisrefPeer::EYECOLOR => 82, DisrefPeer::ABERRANTSPOTSGILL => 83, DisrefPeer::ABERRANTSPOTSCOLOR => 84, DisrefPeer::EYESPOTS => 85, DisrefPeer::KNOTSONGILLS => 86, DisrefPeer::KNOTSCOLOR => 87, DisrefPeer::EYESCONDITION => 88, DisrefPeer::AREASONGILLS => 89, DisrefPeer::AREASCOLOR => 90, DisrefPeer::MUCUSPRODGILLS => 91, DisrefPeer::CONDITIONGILLS => 92, DisrefPeer::OBJECTGILLS => 93, DisrefPeer::ATTACHMENTGILLS => 94, DisrefPeer::BELLYCONDITION => 95, DisrefPeer::ANUSCONDITION => 96, DisrefPeer::BELLYLUMEN => 97, DisrefPeer::ANUSCOLOR => 98, DisrefPeer::BELLYWORMS => 99, DisrefPeer::ANUSOBJECT => 100, DisrefPeer::ANUSATTACHMENTS => 101, DisrefPeer::ANUSEXUDATES => 102, DisrefPeer::LIVERAFFL => 103, DisrefPeer::LIVERSIZE => 104, DisrefPeer::LIVERAPP => 105, DisrefPeer::LIVERBLOT => 106, DisrefPeer::LIVERBLC => 107, DisrefPeer::LIVERKNOTS => 108, DisrefPeer::LIVERKNC => 109, DisrefPeer::SPLEENAFFL => 110, DisrefPeer::SPLEENSIZE => 111, DisrefPeer::SPLEENAPP => 112, DisrefPeer::SPLEENBLOT => 113, DisrefPeer::SPLEENBLC => 114, DisrefPeer::SPLEENKNOTS => 115, DisrefPeer::SPLEENKNC => 116, DisrefPeer::KIDNEYAFFL => 117, DisrefPeer::KIDNEYSIZE => 118, DisrefPeer::KIDNEYAPP => 119, DisrefPeer::KIDNEYBLOT => 120, DisrefPeer::KIDNEYBLC => 121, DisrefPeer::KIDNEYKNOTS => 122, DisrefPeer::KIDNEYKNC => 123, DisrefPeer::SWIMBLADDERAFFL => 124, DisrefPeer::SWIMBLADDERSIZE => 125, DisrefPeer::SWIMBLADDERAPP => 126, DisrefPeer::SWIMBLADDERBLOT => 127, DisrefPeer::SWIMBLADDERBLC => 128, DisrefPeer::SWIMBLADDERKNOTS => 129, DisrefPeer::SWIMBLADDERKNC => 130, DisrefPeer::INTESTINEAFFL => 131, DisrefPeer::INTESTINESIZE => 132, DisrefPeer::INTESTINEAPP => 133, DisrefPeer::INTESTINEBLOT => 134, DisrefPeer::INTESTINEBLC => 135, DisrefPeer::INTESTINEKNOTS => 136, DisrefPeer::INTESTINEKNC => 137, DisrefPeer::OTHERORGANS => 138, DisrefPeer::OTHERORGANSSIZE => 139, DisrefPeer::OTHERORGANSBLOT => 140, DisrefPeer::OTHERORGANSBLC => 141, DisrefPeer::OTHERORGANSKNOTS => 142, DisrefPeer::OTHERORGANSKNC => 143, DisrefPeer::ALLORGANS => 144, DisrefPeer::ALLORGANSAPP => 145, DisrefPeer::BRISTELING => 146, DisrefPeer::MORTALITY => 147, DisrefPeer::LOSS => 148, DisrefPeer::SKELETONDEFORMATION => 149, DisrefPeer::SPRING => 150, DisrefPeer::SUMMER => 151, DisrefPeer::GROWTHRATE => 152, DisrefPeer::AUTUMN => 153, DisrefPeer::WINTER => 154, DisrefPeer::CONDITION => 155, DisrefPeer::ABERRANTACTIVITY => 156, DisrefPeer::ACTIVITY => 157, DisrefPeer::ABERRANTBALANCE => 158, DisrefPeer::ABERRANTSWMOTIONS => 159, DisrefPeer::SWIMMINGMOTIONS => 160, DisrefPeer::ABERRANTBODYDIREC => 161, DisrefPeer::SCRAPING => 162, DisrefPeer::JUMPING => 163, DisrefPeer::ABERRANTFINS => 164, DisrefPeer::FINS => 165, DisrefPeer::ABERRANTLOCATION => 166, DisrefPeer::FISHNEARSURFACE => 167, DisrefPeer::INFLOWOROUTFLOW => 168, DisrefPeer::ABERRANTAPPETITE => 169, DisrefPeer::OPERCULUM => 170, DisrefPeer::ABERRANTVENTILATION => 171, DisrefPeer::FAST => 172, DisrefPeer::SLOW => 173, DisrefPeer::FLAT => 174, DisrefPeer::HEAVY => 175, DisrefPeer::GASPINGAIR => 176, DisrefPeer::FISHAFFLICTED => 177, DisrefPeer::FISHAFFLICTED2 => 178, DisrefPeer::FISHAFFLICTED3 => 179, DisrefPeer::ENTERED => 180, DisrefPeer::DATEENTERED => 181, DisrefPeer::MODIFIED => 182, DisrefPeer::DATEMODIFIED => 183, DisrefPeer::EXPERT => 184, DisrefPeer::DATECHECKED => 185, DisrefPeer::FISHAFFLICT => 186, DisrefPeer::SYMPTOM => 187, DisrefPeer::TREATMENTS => 188, DisrefPeer::PROPHYLAXES => 189, DisrefPeer::ADDREMS => 190, DisrefPeer::TS => 191, ),
        BasePeer::TYPE_RAW_COLNAME => array ('DISCODE' => 0, 'DISEASESREFNO' => 1, 'DISEASEI' => 2, 'DISEASEII' => 3, 'PIC' => 4, 'OTHERNAMES' => 5, 'GERMGENUS' => 6, 'GERMSPECIES' => 7, 'GROUP' => 8, 'SKINFINSAFFLICTED' => 9, 'BELLYAFFLICTED' => 10, 'ABERRANTBEHAVIOR' => 11, 'GILLSAFFLICTED' => 12, 'ANUSAFFLICTED' => 13, 'OTHERBEHAVIOR' => 14, 'EYESAFFLICTED' => 15, 'VISCERAAFFLICTED' => 16, 'OTHERSYMPTOMS' => 17, 'ABERRANTCOLOR' => 18, 'ABERRANTCOAT' => 19, 'ABERRANTMUSCUSPROD' => 20, 'SPOTS' => 21, 'SPOTSCOLOR' => 22, 'SPOTSONHEAD' => 23, 'DORSALSPOTS' => 24, 'SPOTSONDORSALFIN' => 25, 'SPOTSONCAUDALFIN' => 26, 'SPOTSONTRUNK' => 27, 'VENTRALSPOTS' => 28, 'SPOTSONANALFIN' => 29, 'SPOTSONUNPAIREDF' => 30, 'SPOTSONTAIL' => 31, 'AREAS' => 32, 'AREACOLORI' => 33, 'AREASONHEAD' => 34, 'DORSALAREAS' => 35, 'AREAONDORSALFIN' => 36, 'AREAONCAUDALFIN' => 37, 'AREASONTRUNK' => 38, 'VENTRALAREAS' => 39, 'AREAONANALFIN' => 40, 'AREAONUNPAIREDF' => 41, 'AREASONTAIL' => 42, 'BOILS' => 43, 'BOILSCOLOR' => 44, 'BOILSONHEAD' => 45, 'DORSALBOILS' => 46, 'BOILSONDORSALFIN' => 47, 'BOILSONCAUDALFIN' => 48, 'BOILSONTRUNK' => 49, 'VENTRALBOILS' => 50, 'BOILSONANALFIN' => 51, 'BOILSONUNPAIREDF' => 52, 'BOILSONTAIL' => 53, 'ULCER' => 54, 'ULCERCOLOR' => 55, 'ULCERONHEAD' => 56, 'DORSALULCER' => 57, 'ULCERONDORSALFIN' => 58, 'ULCERONCAUDALFIN' => 59, 'ULCERONTRUNK' => 60, 'VENTRALULCER' => 61, 'ULCERONANALFIN' => 62, 'ULCERONUNPAIREDF' => 63, 'ULCERONTAIL' => 64, 'ATTACHMENTSSKIN2' => 65, 'ATTACHMENTONHEAD' => 66, 'DORSALATTACHMENTS' => 67, 'ATTONDORSALFIN' => 68, 'ATTONCAUDALFIN' => 69, 'ATTACHMENTONTRUNK' => 70, 'VENTRALATTACHMENTS' => 71, 'ATTONANALFIN' => 72, 'ATTONUNPAIREDF' => 73, 'ATTACHMENTONTAIL' => 74, 'FINS1' => 75, 'DORSALFIN' => 76, 'CAUDALFIN' => 77, 'ANALFIN' => 78, 'UNPAIREDFINS' => 79, 'ABERRANTCOLORGILLS' => 80, 'ABERCOLORGILL' => 81, 'EYECOLOR' => 82, 'ABERRANTSPOTSGILL' => 83, 'ABERRANTSPOTSCOLOR' => 84, 'EYESPOTS' => 85, 'KNOTSONGILLS' => 86, 'KNOTSCOLOR' => 87, 'EYESCONDITION' => 88, 'AREASONGILLS' => 89, 'AREASCOLOR' => 90, 'MUCUSPRODGILLS' => 91, 'CONDITIONGILLS' => 92, 'OBJECTGILLS' => 93, 'ATTACHMENTGILLS' => 94, 'BELLYCONDITION' => 95, 'ANUSCONDITION' => 96, 'BELLYLUMEN' => 97, 'ANUSCOLOR' => 98, 'BELLYWORMS' => 99, 'ANUSOBJECT' => 100, 'ANUSATTACHMENTS' => 101, 'ANUSEXUDATES' => 102, 'LIVERAFFL' => 103, 'LIVERSIZE' => 104, 'LIVERAPP' => 105, 'LIVERBLOT' => 106, 'LIVERBLC' => 107, 'LIVERKNOTS' => 108, 'LIVERKNC' => 109, 'SPLEENAFFL' => 110, 'SPLEENSIZE' => 111, 'SPLEENAPP' => 112, 'SPLEENBLOT' => 113, 'SPLEENBLC' => 114, 'SPLEENKNOTS' => 115, 'SPLEENKNC' => 116, 'KIDNEYAFFL' => 117, 'KIDNEYSIZE' => 118, 'KIDNEYAPP' => 119, 'KIDNEYBLOT' => 120, 'KIDNEYBLC' => 121, 'KIDNEYKNOTS' => 122, 'KIDNEYKNC' => 123, 'SWIMBLADDERAFFL' => 124, 'SWIMBLADDERSIZE' => 125, 'SWIMBLADDERAPP' => 126, 'SWIMBLADDERBLOT' => 127, 'SWIMBLADDERBLC' => 128, 'SWIMBLADDERKNOTS' => 129, 'SWIMBLADDERKNC' => 130, 'INTESTINEAFFL' => 131, 'INTESTINESIZE' => 132, 'INTESTINEAPP' => 133, 'INTESTINEBLOT' => 134, 'INTESTINEBLC' => 135, 'INTESTINEKNOTS' => 136, 'INTESTINEKNC' => 137, 'OTHERORGANS' => 138, 'OTHERORGANSSIZE' => 139, 'OTHERORGANSBLOT' => 140, 'OTHERORGANSBLC' => 141, 'OTHERORGANSKNOTS' => 142, 'OTHERORGANSKNC' => 143, 'ALLORGANS' => 144, 'ALLORGANSAPP' => 145, 'BRISTELING' => 146, 'MORTALITY' => 147, 'LOSS' => 148, 'SKELETONDEFORMATION' => 149, 'SPRING' => 150, 'SUMMER' => 151, 'GROWTHRATE' => 152, 'AUTUMN' => 153, 'WINTER' => 154, 'CONDITION' => 155, 'ABERRANTACTIVITY' => 156, 'ACTIVITY' => 157, 'ABERRANTBALANCE' => 158, 'ABERRANTSWMOTIONS' => 159, 'SWIMMINGMOTIONS' => 160, 'ABERRANTBODYDIREC' => 161, 'SCRAPING' => 162, 'JUMPING' => 163, 'ABERRANTFINS' => 164, 'FINS' => 165, 'ABERRANTLOCATION' => 166, 'FISHNEARSURFACE' => 167, 'INFLOWOROUTFLOW' => 168, 'ABERRANTAPPETITE' => 169, 'OPERCULUM' => 170, 'ABERRANTVENTILATION' => 171, 'FAST' => 172, 'SLOW' => 173, 'FLAT' => 174, 'HEAVY' => 175, 'GASPINGAIR' => 176, 'FISHAFFLICTED' => 177, 'FISHAFFLICTED2' => 178, 'FISHAFFLICTED3' => 179, 'ENTERED' => 180, 'DATEENTERED' => 181, 'MODIFIED' => 182, 'DATEMODIFIED' => 183, 'EXPERT' => 184, 'DATECHECKED' => 185, 'FISHAFFLICT' => 186, 'SYMPTOM' => 187, 'TREATMENTS' => 188, 'PROPHYLAXES' => 189, 'ADDREMS' => 190, 'TS' => 191, ),
        BasePeer::TYPE_FIELDNAME => array ('DisCode' => 0, 'DiseasesRefNo' => 1, 'DiseaseI' => 2, 'DiseaseII' => 3, 'Pic' => 4, 'Othernames' => 5, 'GermGenus' => 6, 'GermSpecies' => 7, 'Group' => 8, 'SkinFinsAfflicted' => 9, 'BellyAfflicted' => 10, 'AberrantBehavior' => 11, 'GillsAfflicted' => 12, 'AnusAfflicted' => 13, 'OtherBehavior' => 14, 'EyesAfflicted' => 15, 'VisceraAfflicted' => 16, 'OtherSymptoms' => 17, 'AberrantColor' => 18, 'AberrantCoat' => 19, 'AberrantMuscusProd' => 20, 'Spots' => 21, 'SpotsColor' => 22, 'SpotsonHead' => 23, 'DorsalSpots' => 24, 'SpotsonDorsalFin' => 25, 'SpotsonCaudalFin' => 26, 'SpotsonTrunk' => 27, 'VentralSpots' => 28, 'SpotsonAnalFin' => 29, 'SpotsonUnpairedF' => 30, 'SpotsonTail' => 31, 'Areas' => 32, 'AreaColorI' => 33, 'AreasonHead' => 34, 'DorsalAreas' => 35, 'AreaonDorsalFin' => 36, 'AreaonCaudalFin' => 37, 'AreasonTrunk' => 38, 'VentralAreas' => 39, 'AreaonAnalFin' => 40, 'AreaonUnpairedF' => 41, 'AreasonTail' => 42, 'Boils' => 43, 'BoilsColor' => 44, 'BoilsonHead' => 45, 'Dorsalboils' => 46, 'BoilsonDorsalFin' => 47, 'BoilsonCaudalFin' => 48, 'BoilsonTrunk' => 49, 'VentralBoils' => 50, 'BoilsonAnalFin' => 51, 'BoilsonUnpairedF' => 52, 'BoilsonTail' => 53, 'Ulcer' => 54, 'UlcerColor' => 55, 'UlceronHead' => 56, 'DorsalUlcer' => 57, 'UlceronDorsalFin' => 58, 'UlceronCaudalFin' => 59, 'UlceronTrunk' => 60, 'VentralUlcer' => 61, 'UlceronAnalFin' => 62, 'UlceronUnpairedF' => 63, 'UlceronTail' => 64, 'AttachmentsSkin2' => 65, 'AttachmentonHead' => 66, 'DorsalAttachments' => 67, 'AttonDorsalFin' => 68, 'AttonCaudalFin' => 69, 'AttachmentonTrunk' => 70, 'VentralAttachments' => 71, 'AttonAnalFin' => 72, 'AttonUnpairedF' => 73, 'AttachmentonTail' => 74, 'Fins1' => 75, 'DorsalFin' => 76, 'CaudalFin' => 77, 'AnalFin' => 78, 'UnpairedFins' => 79, 'AberrantColorGills' => 80, 'AberColorGill' => 81, 'EyeColor' => 82, 'AberrantSpotsGill' => 83, 'AberrantSpotsColor' => 84, 'EyeSpots' => 85, 'KnotsonGills' => 86, 'KnotsColor' => 87, 'EyesCondition' => 88, 'AreasonGills' => 89, 'AreasColor' => 90, 'MucusProdGills' => 91, 'ConditionGills' => 92, 'ObjectGills' => 93, 'AttachmentGills' => 94, 'BellyCondition' => 95, 'AnusCondition' => 96, 'BellyLumen' => 97, 'AnusColor' => 98, 'BellyWorms' => 99, 'AnusObject' => 100, 'AnusAttachments' => 101, 'AnusExudates' => 102, 'LiverAffl' => 103, 'LiverSize' => 104, 'LiverApp' => 105, 'LiverBlot' => 106, 'LiverBlC' => 107, 'LiverKnots' => 108, 'LiverKnC' => 109, 'SpleenAffl' => 110, 'SpleenSize' => 111, 'SpleenApp' => 112, 'SpleenBlot' => 113, 'SpleenBlC' => 114, 'SpleenKnots' => 115, 'SpleenKnC' => 116, 'KidneyAffl' => 117, 'KidneySize' => 118, 'KidneyApp' => 119, 'KidneyBlot' => 120, 'KidneyBlC' => 121, 'KidneyKnots' => 122, 'KidneyKnC' => 123, 'SwimBladderAffl' => 124, 'SwimBladderSize' => 125, 'SwimBladderApp' => 126, 'SwimBladderBlot' => 127, 'SwimBladderBlC' => 128, 'SwimBladderKnots' => 129, 'SwimBladderKnC' => 130, 'IntestineAffl' => 131, 'IntestineSize' => 132, 'IntestineApp' => 133, 'IntestineBlot' => 134, 'IntestineBlC' => 135, 'IntestineKnots' => 136, 'IntestineKnC' => 137, 'OtherOrgans' => 138, 'OtherOrgansSize' => 139, 'OtherOrgansBlot' => 140, 'OtherOrgansBlC' => 141, 'OtherOrgansKnots' => 142, 'OtherOrgansKnC' => 143, 'AllOrgans' => 144, 'AllOrgansApp' => 145, 'Bristeling' => 146, 'Mortality' => 147, 'Loss' => 148, 'SkeletonDeformation' => 149, 'Spring' => 150, 'Summer' => 151, 'GrowthRate' => 152, 'Autumn' => 153, 'Winter' => 154, 'Condition' => 155, 'AberrantActivity' => 156, 'Activity' => 157, 'AberrantBalance' => 158, 'AberrantSwMotions' => 159, 'SwimmingMotions' => 160, 'AberrantBodyDirec' => 161, 'Scraping' => 162, 'Jumping' => 163, 'AberrantFins' => 164, 'Fins' => 165, 'AberrantLocation' => 166, 'FishNearSurface' => 167, 'InfloworOutflow' => 168, 'AberrantAppetite' => 169, 'Operculum' => 170, 'AberrantVentilation' => 171, 'Fast' => 172, 'Slow' => 173, 'Flat' => 174, 'heavy' => 175, 'GaspingAir' => 176, 'FishAfflicted' => 177, 'FishAfflicted2' => 178, 'FishAfflicted3' => 179, 'Entered' => 180, 'DateEntered' => 181, 'Modified' => 182, 'DateModified' => 183, 'Expert' => 184, 'DateChecked' => 185, 'Fishafflict' => 186, 'Symptom' => 187, 'Treatments' => 188, 'Prophylaxes' => 189, 'AddRems' => 190, 'TS' => 191, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, )
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
        $toNames = DisrefPeer::getFieldNames($toType);
        $key = isset(DisrefPeer::$fieldKeys[$fromType][$name]) ? DisrefPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(DisrefPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, DisrefPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return DisrefPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. DisrefPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(DisrefPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(DisrefPeer::DISCODE);
            $criteria->addSelectColumn(DisrefPeer::DISEASESREFNO);
            $criteria->addSelectColumn(DisrefPeer::DISEASEI);
            $criteria->addSelectColumn(DisrefPeer::DISEASEII);
            $criteria->addSelectColumn(DisrefPeer::PIC);
            $criteria->addSelectColumn(DisrefPeer::OTHERNAMES);
            $criteria->addSelectColumn(DisrefPeer::GERMGENUS);
            $criteria->addSelectColumn(DisrefPeer::GERMSPECIES);
            $criteria->addSelectColumn(DisrefPeer::GROUP);
            $criteria->addSelectColumn(DisrefPeer::SKINFINSAFFLICTED);
            $criteria->addSelectColumn(DisrefPeer::BELLYAFFLICTED);
            $criteria->addSelectColumn(DisrefPeer::ABERRANTBEHAVIOR);
            $criteria->addSelectColumn(DisrefPeer::GILLSAFFLICTED);
            $criteria->addSelectColumn(DisrefPeer::ANUSAFFLICTED);
            $criteria->addSelectColumn(DisrefPeer::OTHERBEHAVIOR);
            $criteria->addSelectColumn(DisrefPeer::EYESAFFLICTED);
            $criteria->addSelectColumn(DisrefPeer::VISCERAAFFLICTED);
            $criteria->addSelectColumn(DisrefPeer::OTHERSYMPTOMS);
            $criteria->addSelectColumn(DisrefPeer::ABERRANTCOLOR);
            $criteria->addSelectColumn(DisrefPeer::ABERRANTCOAT);
            $criteria->addSelectColumn(DisrefPeer::ABERRANTMUSCUSPROD);
            $criteria->addSelectColumn(DisrefPeer::SPOTS);
            $criteria->addSelectColumn(DisrefPeer::SPOTSCOLOR);
            $criteria->addSelectColumn(DisrefPeer::SPOTSONHEAD);
            $criteria->addSelectColumn(DisrefPeer::DORSALSPOTS);
            $criteria->addSelectColumn(DisrefPeer::SPOTSONDORSALFIN);
            $criteria->addSelectColumn(DisrefPeer::SPOTSONCAUDALFIN);
            $criteria->addSelectColumn(DisrefPeer::SPOTSONTRUNK);
            $criteria->addSelectColumn(DisrefPeer::VENTRALSPOTS);
            $criteria->addSelectColumn(DisrefPeer::SPOTSONANALFIN);
            $criteria->addSelectColumn(DisrefPeer::SPOTSONUNPAIREDF);
            $criteria->addSelectColumn(DisrefPeer::SPOTSONTAIL);
            $criteria->addSelectColumn(DisrefPeer::AREAS);
            $criteria->addSelectColumn(DisrefPeer::AREACOLORI);
            $criteria->addSelectColumn(DisrefPeer::AREASONHEAD);
            $criteria->addSelectColumn(DisrefPeer::DORSALAREAS);
            $criteria->addSelectColumn(DisrefPeer::AREAONDORSALFIN);
            $criteria->addSelectColumn(DisrefPeer::AREAONCAUDALFIN);
            $criteria->addSelectColumn(DisrefPeer::AREASONTRUNK);
            $criteria->addSelectColumn(DisrefPeer::VENTRALAREAS);
            $criteria->addSelectColumn(DisrefPeer::AREAONANALFIN);
            $criteria->addSelectColumn(DisrefPeer::AREAONUNPAIREDF);
            $criteria->addSelectColumn(DisrefPeer::AREASONTAIL);
            $criteria->addSelectColumn(DisrefPeer::BOILS);
            $criteria->addSelectColumn(DisrefPeer::BOILSCOLOR);
            $criteria->addSelectColumn(DisrefPeer::BOILSONHEAD);
            $criteria->addSelectColumn(DisrefPeer::DORSALBOILS);
            $criteria->addSelectColumn(DisrefPeer::BOILSONDORSALFIN);
            $criteria->addSelectColumn(DisrefPeer::BOILSONCAUDALFIN);
            $criteria->addSelectColumn(DisrefPeer::BOILSONTRUNK);
            $criteria->addSelectColumn(DisrefPeer::VENTRALBOILS);
            $criteria->addSelectColumn(DisrefPeer::BOILSONANALFIN);
            $criteria->addSelectColumn(DisrefPeer::BOILSONUNPAIREDF);
            $criteria->addSelectColumn(DisrefPeer::BOILSONTAIL);
            $criteria->addSelectColumn(DisrefPeer::ULCER);
            $criteria->addSelectColumn(DisrefPeer::ULCERCOLOR);
            $criteria->addSelectColumn(DisrefPeer::ULCERONHEAD);
            $criteria->addSelectColumn(DisrefPeer::DORSALULCER);
            $criteria->addSelectColumn(DisrefPeer::ULCERONDORSALFIN);
            $criteria->addSelectColumn(DisrefPeer::ULCERONCAUDALFIN);
            $criteria->addSelectColumn(DisrefPeer::ULCERONTRUNK);
            $criteria->addSelectColumn(DisrefPeer::VENTRALULCER);
            $criteria->addSelectColumn(DisrefPeer::ULCERONANALFIN);
            $criteria->addSelectColumn(DisrefPeer::ULCERONUNPAIREDF);
            $criteria->addSelectColumn(DisrefPeer::ULCERONTAIL);
            $criteria->addSelectColumn(DisrefPeer::ATTACHMENTSSKIN2);
            $criteria->addSelectColumn(DisrefPeer::ATTACHMENTONHEAD);
            $criteria->addSelectColumn(DisrefPeer::DORSALATTACHMENTS);
            $criteria->addSelectColumn(DisrefPeer::ATTONDORSALFIN);
            $criteria->addSelectColumn(DisrefPeer::ATTONCAUDALFIN);
            $criteria->addSelectColumn(DisrefPeer::ATTACHMENTONTRUNK);
            $criteria->addSelectColumn(DisrefPeer::VENTRALATTACHMENTS);
            $criteria->addSelectColumn(DisrefPeer::ATTONANALFIN);
            $criteria->addSelectColumn(DisrefPeer::ATTONUNPAIREDF);
            $criteria->addSelectColumn(DisrefPeer::ATTACHMENTONTAIL);
            $criteria->addSelectColumn(DisrefPeer::FINS1);
            $criteria->addSelectColumn(DisrefPeer::DORSALFIN);
            $criteria->addSelectColumn(DisrefPeer::CAUDALFIN);
            $criteria->addSelectColumn(DisrefPeer::ANALFIN);
            $criteria->addSelectColumn(DisrefPeer::UNPAIREDFINS);
            $criteria->addSelectColumn(DisrefPeer::ABERRANTCOLORGILLS);
            $criteria->addSelectColumn(DisrefPeer::ABERCOLORGILL);
            $criteria->addSelectColumn(DisrefPeer::EYECOLOR);
            $criteria->addSelectColumn(DisrefPeer::ABERRANTSPOTSGILL);
            $criteria->addSelectColumn(DisrefPeer::ABERRANTSPOTSCOLOR);
            $criteria->addSelectColumn(DisrefPeer::EYESPOTS);
            $criteria->addSelectColumn(DisrefPeer::KNOTSONGILLS);
            $criteria->addSelectColumn(DisrefPeer::KNOTSCOLOR);
            $criteria->addSelectColumn(DisrefPeer::EYESCONDITION);
            $criteria->addSelectColumn(DisrefPeer::AREASONGILLS);
            $criteria->addSelectColumn(DisrefPeer::AREASCOLOR);
            $criteria->addSelectColumn(DisrefPeer::MUCUSPRODGILLS);
            $criteria->addSelectColumn(DisrefPeer::CONDITIONGILLS);
            $criteria->addSelectColumn(DisrefPeer::OBJECTGILLS);
            $criteria->addSelectColumn(DisrefPeer::ATTACHMENTGILLS);
            $criteria->addSelectColumn(DisrefPeer::BELLYCONDITION);
            $criteria->addSelectColumn(DisrefPeer::ANUSCONDITION);
            $criteria->addSelectColumn(DisrefPeer::BELLYLUMEN);
            $criteria->addSelectColumn(DisrefPeer::ANUSCOLOR);
            $criteria->addSelectColumn(DisrefPeer::BELLYWORMS);
            $criteria->addSelectColumn(DisrefPeer::ANUSOBJECT);
            $criteria->addSelectColumn(DisrefPeer::ANUSATTACHMENTS);
            $criteria->addSelectColumn(DisrefPeer::ANUSEXUDATES);
            $criteria->addSelectColumn(DisrefPeer::LIVERAFFL);
            $criteria->addSelectColumn(DisrefPeer::LIVERSIZE);
            $criteria->addSelectColumn(DisrefPeer::LIVERAPP);
            $criteria->addSelectColumn(DisrefPeer::LIVERBLOT);
            $criteria->addSelectColumn(DisrefPeer::LIVERBLC);
            $criteria->addSelectColumn(DisrefPeer::LIVERKNOTS);
            $criteria->addSelectColumn(DisrefPeer::LIVERKNC);
            $criteria->addSelectColumn(DisrefPeer::SPLEENAFFL);
            $criteria->addSelectColumn(DisrefPeer::SPLEENSIZE);
            $criteria->addSelectColumn(DisrefPeer::SPLEENAPP);
            $criteria->addSelectColumn(DisrefPeer::SPLEENBLOT);
            $criteria->addSelectColumn(DisrefPeer::SPLEENBLC);
            $criteria->addSelectColumn(DisrefPeer::SPLEENKNOTS);
            $criteria->addSelectColumn(DisrefPeer::SPLEENKNC);
            $criteria->addSelectColumn(DisrefPeer::KIDNEYAFFL);
            $criteria->addSelectColumn(DisrefPeer::KIDNEYSIZE);
            $criteria->addSelectColumn(DisrefPeer::KIDNEYAPP);
            $criteria->addSelectColumn(DisrefPeer::KIDNEYBLOT);
            $criteria->addSelectColumn(DisrefPeer::KIDNEYBLC);
            $criteria->addSelectColumn(DisrefPeer::KIDNEYKNOTS);
            $criteria->addSelectColumn(DisrefPeer::KIDNEYKNC);
            $criteria->addSelectColumn(DisrefPeer::SWIMBLADDERAFFL);
            $criteria->addSelectColumn(DisrefPeer::SWIMBLADDERSIZE);
            $criteria->addSelectColumn(DisrefPeer::SWIMBLADDERAPP);
            $criteria->addSelectColumn(DisrefPeer::SWIMBLADDERBLOT);
            $criteria->addSelectColumn(DisrefPeer::SWIMBLADDERBLC);
            $criteria->addSelectColumn(DisrefPeer::SWIMBLADDERKNOTS);
            $criteria->addSelectColumn(DisrefPeer::SWIMBLADDERKNC);
            $criteria->addSelectColumn(DisrefPeer::INTESTINEAFFL);
            $criteria->addSelectColumn(DisrefPeer::INTESTINESIZE);
            $criteria->addSelectColumn(DisrefPeer::INTESTINEAPP);
            $criteria->addSelectColumn(DisrefPeer::INTESTINEBLOT);
            $criteria->addSelectColumn(DisrefPeer::INTESTINEBLC);
            $criteria->addSelectColumn(DisrefPeer::INTESTINEKNOTS);
            $criteria->addSelectColumn(DisrefPeer::INTESTINEKNC);
            $criteria->addSelectColumn(DisrefPeer::OTHERORGANS);
            $criteria->addSelectColumn(DisrefPeer::OTHERORGANSSIZE);
            $criteria->addSelectColumn(DisrefPeer::OTHERORGANSBLOT);
            $criteria->addSelectColumn(DisrefPeer::OTHERORGANSBLC);
            $criteria->addSelectColumn(DisrefPeer::OTHERORGANSKNOTS);
            $criteria->addSelectColumn(DisrefPeer::OTHERORGANSKNC);
            $criteria->addSelectColumn(DisrefPeer::ALLORGANS);
            $criteria->addSelectColumn(DisrefPeer::ALLORGANSAPP);
            $criteria->addSelectColumn(DisrefPeer::BRISTELING);
            $criteria->addSelectColumn(DisrefPeer::MORTALITY);
            $criteria->addSelectColumn(DisrefPeer::LOSS);
            $criteria->addSelectColumn(DisrefPeer::SKELETONDEFORMATION);
            $criteria->addSelectColumn(DisrefPeer::SPRING);
            $criteria->addSelectColumn(DisrefPeer::SUMMER);
            $criteria->addSelectColumn(DisrefPeer::GROWTHRATE);
            $criteria->addSelectColumn(DisrefPeer::AUTUMN);
            $criteria->addSelectColumn(DisrefPeer::WINTER);
            $criteria->addSelectColumn(DisrefPeer::CONDITION);
            $criteria->addSelectColumn(DisrefPeer::ABERRANTACTIVITY);
            $criteria->addSelectColumn(DisrefPeer::ACTIVITY);
            $criteria->addSelectColumn(DisrefPeer::ABERRANTBALANCE);
            $criteria->addSelectColumn(DisrefPeer::ABERRANTSWMOTIONS);
            $criteria->addSelectColumn(DisrefPeer::SWIMMINGMOTIONS);
            $criteria->addSelectColumn(DisrefPeer::ABERRANTBODYDIREC);
            $criteria->addSelectColumn(DisrefPeer::SCRAPING);
            $criteria->addSelectColumn(DisrefPeer::JUMPING);
            $criteria->addSelectColumn(DisrefPeer::ABERRANTFINS);
            $criteria->addSelectColumn(DisrefPeer::FINS);
            $criteria->addSelectColumn(DisrefPeer::ABERRANTLOCATION);
            $criteria->addSelectColumn(DisrefPeer::FISHNEARSURFACE);
            $criteria->addSelectColumn(DisrefPeer::INFLOWOROUTFLOW);
            $criteria->addSelectColumn(DisrefPeer::ABERRANTAPPETITE);
            $criteria->addSelectColumn(DisrefPeer::OPERCULUM);
            $criteria->addSelectColumn(DisrefPeer::ABERRANTVENTILATION);
            $criteria->addSelectColumn(DisrefPeer::FAST);
            $criteria->addSelectColumn(DisrefPeer::SLOW);
            $criteria->addSelectColumn(DisrefPeer::FLAT);
            $criteria->addSelectColumn(DisrefPeer::HEAVY);
            $criteria->addSelectColumn(DisrefPeer::GASPINGAIR);
            $criteria->addSelectColumn(DisrefPeer::FISHAFFLICTED);
            $criteria->addSelectColumn(DisrefPeer::FISHAFFLICTED2);
            $criteria->addSelectColumn(DisrefPeer::FISHAFFLICTED3);
            $criteria->addSelectColumn(DisrefPeer::ENTERED);
            $criteria->addSelectColumn(DisrefPeer::DATEENTERED);
            $criteria->addSelectColumn(DisrefPeer::MODIFIED);
            $criteria->addSelectColumn(DisrefPeer::DATEMODIFIED);
            $criteria->addSelectColumn(DisrefPeer::EXPERT);
            $criteria->addSelectColumn(DisrefPeer::DATECHECKED);
            $criteria->addSelectColumn(DisrefPeer::FISHAFFLICT);
            $criteria->addSelectColumn(DisrefPeer::SYMPTOM);
            $criteria->addSelectColumn(DisrefPeer::TREATMENTS);
            $criteria->addSelectColumn(DisrefPeer::PROPHYLAXES);
            $criteria->addSelectColumn(DisrefPeer::ADDREMS);
            $criteria->addSelectColumn(DisrefPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.DisCode');
            $criteria->addSelectColumn($alias . '.DiseasesRefNo');
            $criteria->addSelectColumn($alias . '.DiseaseI');
            $criteria->addSelectColumn($alias . '.DiseaseII');
            $criteria->addSelectColumn($alias . '.Pic');
            $criteria->addSelectColumn($alias . '.Othernames');
            $criteria->addSelectColumn($alias . '.GermGenus');
            $criteria->addSelectColumn($alias . '.GermSpecies');
            $criteria->addSelectColumn($alias . '.Group');
            $criteria->addSelectColumn($alias . '.SkinFinsAfflicted');
            $criteria->addSelectColumn($alias . '.BellyAfflicted');
            $criteria->addSelectColumn($alias . '.AberrantBehavior');
            $criteria->addSelectColumn($alias . '.GillsAfflicted');
            $criteria->addSelectColumn($alias . '.AnusAfflicted');
            $criteria->addSelectColumn($alias . '.OtherBehavior');
            $criteria->addSelectColumn($alias . '.EyesAfflicted');
            $criteria->addSelectColumn($alias . '.VisceraAfflicted');
            $criteria->addSelectColumn($alias . '.OtherSymptoms');
            $criteria->addSelectColumn($alias . '.AberrantColor');
            $criteria->addSelectColumn($alias . '.AberrantCoat');
            $criteria->addSelectColumn($alias . '.AberrantMuscusProd');
            $criteria->addSelectColumn($alias . '.Spots');
            $criteria->addSelectColumn($alias . '.SpotsColor');
            $criteria->addSelectColumn($alias . '.SpotsonHead');
            $criteria->addSelectColumn($alias . '.DorsalSpots');
            $criteria->addSelectColumn($alias . '.SpotsonDorsalFin');
            $criteria->addSelectColumn($alias . '.SpotsonCaudalFin');
            $criteria->addSelectColumn($alias . '.SpotsonTrunk');
            $criteria->addSelectColumn($alias . '.VentralSpots');
            $criteria->addSelectColumn($alias . '.SpotsonAnalFin');
            $criteria->addSelectColumn($alias . '.SpotsonUnpairedF');
            $criteria->addSelectColumn($alias . '.SpotsonTail');
            $criteria->addSelectColumn($alias . '.Areas');
            $criteria->addSelectColumn($alias . '.AreaColorI');
            $criteria->addSelectColumn($alias . '.AreasonHead');
            $criteria->addSelectColumn($alias . '.DorsalAreas');
            $criteria->addSelectColumn($alias . '.AreaonDorsalFin');
            $criteria->addSelectColumn($alias . '.AreaonCaudalFin');
            $criteria->addSelectColumn($alias . '.AreasonTrunk');
            $criteria->addSelectColumn($alias . '.VentralAreas');
            $criteria->addSelectColumn($alias . '.AreaonAnalFin');
            $criteria->addSelectColumn($alias . '.AreaonUnpairedF');
            $criteria->addSelectColumn($alias . '.AreasonTail');
            $criteria->addSelectColumn($alias . '.Boils');
            $criteria->addSelectColumn($alias . '.BoilsColor');
            $criteria->addSelectColumn($alias . '.BoilsonHead');
            $criteria->addSelectColumn($alias . '.Dorsalboils');
            $criteria->addSelectColumn($alias . '.BoilsonDorsalFin');
            $criteria->addSelectColumn($alias . '.BoilsonCaudalFin');
            $criteria->addSelectColumn($alias . '.BoilsonTrunk');
            $criteria->addSelectColumn($alias . '.VentralBoils');
            $criteria->addSelectColumn($alias . '.BoilsonAnalFin');
            $criteria->addSelectColumn($alias . '.BoilsonUnpairedF');
            $criteria->addSelectColumn($alias . '.BoilsonTail');
            $criteria->addSelectColumn($alias . '.Ulcer');
            $criteria->addSelectColumn($alias . '.UlcerColor');
            $criteria->addSelectColumn($alias . '.UlceronHead');
            $criteria->addSelectColumn($alias . '.DorsalUlcer');
            $criteria->addSelectColumn($alias . '.UlceronDorsalFin');
            $criteria->addSelectColumn($alias . '.UlceronCaudalFin');
            $criteria->addSelectColumn($alias . '.UlceronTrunk');
            $criteria->addSelectColumn($alias . '.VentralUlcer');
            $criteria->addSelectColumn($alias . '.UlceronAnalFin');
            $criteria->addSelectColumn($alias . '.UlceronUnpairedF');
            $criteria->addSelectColumn($alias . '.UlceronTail');
            $criteria->addSelectColumn($alias . '.AttachmentsSkin2');
            $criteria->addSelectColumn($alias . '.AttachmentonHead');
            $criteria->addSelectColumn($alias . '.DorsalAttachments');
            $criteria->addSelectColumn($alias . '.AttonDorsalFin');
            $criteria->addSelectColumn($alias . '.AttonCaudalFin');
            $criteria->addSelectColumn($alias . '.AttachmentonTrunk');
            $criteria->addSelectColumn($alias . '.VentralAttachments');
            $criteria->addSelectColumn($alias . '.AttonAnalFin');
            $criteria->addSelectColumn($alias . '.AttonUnpairedF');
            $criteria->addSelectColumn($alias . '.AttachmentonTail');
            $criteria->addSelectColumn($alias . '.Fins1');
            $criteria->addSelectColumn($alias . '.DorsalFin');
            $criteria->addSelectColumn($alias . '.CaudalFin');
            $criteria->addSelectColumn($alias . '.AnalFin');
            $criteria->addSelectColumn($alias . '.UnpairedFins');
            $criteria->addSelectColumn($alias . '.AberrantColorGills');
            $criteria->addSelectColumn($alias . '.AberColorGill');
            $criteria->addSelectColumn($alias . '.EyeColor');
            $criteria->addSelectColumn($alias . '.AberrantSpotsGill');
            $criteria->addSelectColumn($alias . '.AberrantSpotsColor');
            $criteria->addSelectColumn($alias . '.EyeSpots');
            $criteria->addSelectColumn($alias . '.KnotsonGills');
            $criteria->addSelectColumn($alias . '.KnotsColor');
            $criteria->addSelectColumn($alias . '.EyesCondition');
            $criteria->addSelectColumn($alias . '.AreasonGills');
            $criteria->addSelectColumn($alias . '.AreasColor');
            $criteria->addSelectColumn($alias . '.MucusProdGills');
            $criteria->addSelectColumn($alias . '.ConditionGills');
            $criteria->addSelectColumn($alias . '.ObjectGills');
            $criteria->addSelectColumn($alias . '.AttachmentGills');
            $criteria->addSelectColumn($alias . '.BellyCondition');
            $criteria->addSelectColumn($alias . '.AnusCondition');
            $criteria->addSelectColumn($alias . '.BellyLumen');
            $criteria->addSelectColumn($alias . '.AnusColor');
            $criteria->addSelectColumn($alias . '.BellyWorms');
            $criteria->addSelectColumn($alias . '.AnusObject');
            $criteria->addSelectColumn($alias . '.AnusAttachments');
            $criteria->addSelectColumn($alias . '.AnusExudates');
            $criteria->addSelectColumn($alias . '.LiverAffl');
            $criteria->addSelectColumn($alias . '.LiverSize');
            $criteria->addSelectColumn($alias . '.LiverApp');
            $criteria->addSelectColumn($alias . '.LiverBlot');
            $criteria->addSelectColumn($alias . '.LiverBlC');
            $criteria->addSelectColumn($alias . '.LiverKnots');
            $criteria->addSelectColumn($alias . '.LiverKnC');
            $criteria->addSelectColumn($alias . '.SpleenAffl');
            $criteria->addSelectColumn($alias . '.SpleenSize');
            $criteria->addSelectColumn($alias . '.SpleenApp');
            $criteria->addSelectColumn($alias . '.SpleenBlot');
            $criteria->addSelectColumn($alias . '.SpleenBlC');
            $criteria->addSelectColumn($alias . '.SpleenKnots');
            $criteria->addSelectColumn($alias . '.SpleenKnC');
            $criteria->addSelectColumn($alias . '.KidneyAffl');
            $criteria->addSelectColumn($alias . '.KidneySize');
            $criteria->addSelectColumn($alias . '.KidneyApp');
            $criteria->addSelectColumn($alias . '.KidneyBlot');
            $criteria->addSelectColumn($alias . '.KidneyBlC');
            $criteria->addSelectColumn($alias . '.KidneyKnots');
            $criteria->addSelectColumn($alias . '.KidneyKnC');
            $criteria->addSelectColumn($alias . '.SwimBladderAffl');
            $criteria->addSelectColumn($alias . '.SwimBladderSize');
            $criteria->addSelectColumn($alias . '.SwimBladderApp');
            $criteria->addSelectColumn($alias . '.SwimBladderBlot');
            $criteria->addSelectColumn($alias . '.SwimBladderBlC');
            $criteria->addSelectColumn($alias . '.SwimBladderKnots');
            $criteria->addSelectColumn($alias . '.SwimBladderKnC');
            $criteria->addSelectColumn($alias . '.IntestineAffl');
            $criteria->addSelectColumn($alias . '.IntestineSize');
            $criteria->addSelectColumn($alias . '.IntestineApp');
            $criteria->addSelectColumn($alias . '.IntestineBlot');
            $criteria->addSelectColumn($alias . '.IntestineBlC');
            $criteria->addSelectColumn($alias . '.IntestineKnots');
            $criteria->addSelectColumn($alias . '.IntestineKnC');
            $criteria->addSelectColumn($alias . '.OtherOrgans');
            $criteria->addSelectColumn($alias . '.OtherOrgansSize');
            $criteria->addSelectColumn($alias . '.OtherOrgansBlot');
            $criteria->addSelectColumn($alias . '.OtherOrgansBlC');
            $criteria->addSelectColumn($alias . '.OtherOrgansKnots');
            $criteria->addSelectColumn($alias . '.OtherOrgansKnC');
            $criteria->addSelectColumn($alias . '.AllOrgans');
            $criteria->addSelectColumn($alias . '.AllOrgansApp');
            $criteria->addSelectColumn($alias . '.Bristeling');
            $criteria->addSelectColumn($alias . '.Mortality');
            $criteria->addSelectColumn($alias . '.Loss');
            $criteria->addSelectColumn($alias . '.SkeletonDeformation');
            $criteria->addSelectColumn($alias . '.Spring');
            $criteria->addSelectColumn($alias . '.Summer');
            $criteria->addSelectColumn($alias . '.GrowthRate');
            $criteria->addSelectColumn($alias . '.Autumn');
            $criteria->addSelectColumn($alias . '.Winter');
            $criteria->addSelectColumn($alias . '.Condition');
            $criteria->addSelectColumn($alias . '.AberrantActivity');
            $criteria->addSelectColumn($alias . '.Activity');
            $criteria->addSelectColumn($alias . '.AberrantBalance');
            $criteria->addSelectColumn($alias . '.AberrantSwMotions');
            $criteria->addSelectColumn($alias . '.SwimmingMotions');
            $criteria->addSelectColumn($alias . '.AberrantBodyDirec');
            $criteria->addSelectColumn($alias . '.Scraping');
            $criteria->addSelectColumn($alias . '.Jumping');
            $criteria->addSelectColumn($alias . '.AberrantFins');
            $criteria->addSelectColumn($alias . '.Fins');
            $criteria->addSelectColumn($alias . '.AberrantLocation');
            $criteria->addSelectColumn($alias . '.FishNearSurface');
            $criteria->addSelectColumn($alias . '.InfloworOutflow');
            $criteria->addSelectColumn($alias . '.AberrantAppetite');
            $criteria->addSelectColumn($alias . '.Operculum');
            $criteria->addSelectColumn($alias . '.AberrantVentilation');
            $criteria->addSelectColumn($alias . '.Fast');
            $criteria->addSelectColumn($alias . '.Slow');
            $criteria->addSelectColumn($alias . '.Flat');
            $criteria->addSelectColumn($alias . '.heavy');
            $criteria->addSelectColumn($alias . '.GaspingAir');
            $criteria->addSelectColumn($alias . '.FishAfflicted');
            $criteria->addSelectColumn($alias . '.FishAfflicted2');
            $criteria->addSelectColumn($alias . '.FishAfflicted3');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Fishafflict');
            $criteria->addSelectColumn($alias . '.Symptom');
            $criteria->addSelectColumn($alias . '.Treatments');
            $criteria->addSelectColumn($alias . '.Prophylaxes');
            $criteria->addSelectColumn($alias . '.AddRems');
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
        $criteria->setPrimaryTableName(DisrefPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DisrefPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(DisrefPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(DisrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Disref
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = DisrefPeer::doSelect($critcopy, $con);
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
        return DisrefPeer::populateObjects(DisrefPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(DisrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DisrefPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(DisrefPeer::DATABASE_NAME);

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
     * @param Disref $obj A Disref object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getDiseasesrefno(), (string) $obj->getDiseaseii(), (string) $obj->getGermgenus()));
            } // if key === null
            DisrefPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Disref object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Disref) {
                $key = serialize(array((string) $value->getDiseasesrefno(), (string) $value->getDiseaseii(), (string) $value->getGermgenus()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Disref object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(DisrefPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Disref Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(DisrefPeer::$instances[$key])) {
                return DisrefPeer::$instances[$key];
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
        foreach (DisrefPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        DisrefPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to disref
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
        if ($row[$startcol + 1] === null && $row[$startcol + 3] === null && $row[$startcol + 6] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 3], (string) $row[$startcol + 6]));
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

        return array((int) $row[$startcol + 1], (string) $row[$startcol + 3], (string) $row[$startcol + 6]);
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
        $cls = DisrefPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = DisrefPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = DisrefPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DisrefPeer::addInstanceToPool($obj, $key);
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
     * @return array (Disref object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = DisrefPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = DisrefPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + DisrefPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DisrefPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            DisrefPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(DisrefPeer::DATABASE_NAME)->getTable(DisrefPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseDisrefPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseDisrefPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \DisrefTableMap());
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
        return DisrefPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Disref or Criteria object.
     *
     * @param      mixed $values Criteria or Disref object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DisrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Disref object
        }


        // Set the correct dbName
        $criteria->setDbName(DisrefPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Disref or Criteria object.
     *
     * @param      mixed $values Criteria or Disref object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DisrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(DisrefPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(DisrefPeer::DISEASESREFNO);
            $value = $criteria->remove(DisrefPeer::DISEASESREFNO);
            if ($value) {
                $selectCriteria->add(DisrefPeer::DISEASESREFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DisrefPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(DisrefPeer::DISEASEII);
            $value = $criteria->remove(DisrefPeer::DISEASEII);
            if ($value) {
                $selectCriteria->add(DisrefPeer::DISEASEII, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DisrefPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(DisrefPeer::GERMGENUS);
            $value = $criteria->remove(DisrefPeer::GERMGENUS);
            if ($value) {
                $selectCriteria->add(DisrefPeer::GERMGENUS, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DisrefPeer::TABLE_NAME);
            }

        } else { // $values is Disref object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(DisrefPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the disref table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DisrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(DisrefPeer::TABLE_NAME, $con, DisrefPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DisrefPeer::clearInstancePool();
            DisrefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Disref or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Disref object or primary key or array of primary keys
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
            $con = Propel::getConnection(DisrefPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            DisrefPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Disref) { // it's a model object
            // invalidate the cache for this single object
            DisrefPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DisrefPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(DisrefPeer::DISEASESREFNO, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(DisrefPeer::DISEASEII, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(DisrefPeer::GERMGENUS, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                DisrefPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(DisrefPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            DisrefPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Disref object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Disref $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(DisrefPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(DisrefPeer::TABLE_NAME);

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

        return BasePeer::doValidate(DisrefPeer::DATABASE_NAME, DisrefPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $diseasesrefno
     * @param   string $diseaseii
     * @param   string $germgenus
     * @param      PropelPDO $con
     * @return Disref
     */
    public static function retrieveByPK($diseasesrefno, $diseaseii, $germgenus, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $diseasesrefno, (string) $diseaseii, (string) $germgenus));
         if (null !== ($obj = DisrefPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(DisrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(DisrefPeer::DATABASE_NAME);
        $criteria->add(DisrefPeer::DISEASESREFNO, $diseasesrefno);
        $criteria->add(DisrefPeer::DISEASEII, $diseaseii);
        $criteria->add(DisrefPeer::GERMGENUS, $germgenus);
        $v = DisrefPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseDisrefPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDisrefPeer::buildTableMap();

