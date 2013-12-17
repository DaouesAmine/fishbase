<?php


/**
 * Base static class for performing query and update operations on the 'ecology' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseEcologyPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'ecology';

    /** the related Propel class for this table */
    const OM_CLASS = 'Ecology';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EcologyTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 129;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 129;

    /** the column name for the autoctr field */
    const AUTOCTR = 'ecology.autoctr';

    /** the column name for the SpecCode field */
    const SPECCODE = 'ecology.SpecCode';

    /** the column name for the StockCode field */
    const STOCKCODE = 'ecology.StockCode';

    /** the column name for the EcologyRefNo field */
    const ECOLOGYREFNO = 'ecology.EcologyRefNo';

    /** the column name for the HabitatsRef field */
    const HABITATSREF = 'ecology.HabitatsRef';

    /** the column name for the Neritic field */
    const NERITIC = 'ecology.Neritic';

    /** the column name for the SupraLittoralZone field */
    const SUPRALITTORALZONE = 'ecology.SupraLittoralZone';

    /** the column name for the Saltmarshes field */
    const SALTMARSHES = 'ecology.Saltmarshes';

    /** the column name for the LittoralZone field */
    const LITTORALZONE = 'ecology.LittoralZone';

    /** the column name for the TidePools field */
    const TIDEPOOLS = 'ecology.TidePools';

    /** the column name for the Intertidal field */
    const INTERTIDAL = 'ecology.Intertidal';

    /** the column name for the SubLittoral field */
    const SUBLITTORAL = 'ecology.SubLittoral';

    /** the column name for the Caves field */
    const CAVES = 'ecology.Caves';

    /** the column name for the Oceanic field */
    const OCEANIC = 'ecology.Oceanic';

    /** the column name for the Epipelagic field */
    const EPIPELAGIC = 'ecology.Epipelagic';

    /** the column name for the Mesopelagic field */
    const MESOPELAGIC = 'ecology.Mesopelagic';

    /** the column name for the Bathypelagic field */
    const BATHYPELAGIC = 'ecology.Bathypelagic';

    /** the column name for the Abyssopelagic field */
    const ABYSSOPELAGIC = 'ecology.Abyssopelagic';

    /** the column name for the Hadopelagic field */
    const HADOPELAGIC = 'ecology.Hadopelagic';

    /** the column name for the Estuaries field */
    const ESTUARIES = 'ecology.Estuaries';

    /** the column name for the Mangroves field */
    const MANGROVES = 'ecology.Mangroves';

    /** the column name for the MarshesSwamps field */
    const MARSHESSWAMPS = 'ecology.MarshesSwamps';

    /** the column name for the CaveAnchialine field */
    const CAVEANCHIALINE = 'ecology.CaveAnchialine';

    /** the column name for the Stream field */
    const STREAM = 'ecology.Stream';

    /** the column name for the Lakes field */
    const LAKES = 'ecology.Lakes';

    /** the column name for the Cave field */
    const CAVE = 'ecology.Cave';

    /** the column name for the Cave2 field */
    const CAVE2 = 'ecology.Cave2';

    /** the column name for the Herbivory2 field */
    const HERBIVORY2 = 'ecology.Herbivory2';

    /** the column name for the HerbivoryRef field */
    const HERBIVORYREF = 'ecology.HerbivoryRef';

    /** the column name for the FeedingType field */
    const FEEDINGTYPE = 'ecology.FeedingType';

    /** the column name for the FeedingTypeRef field */
    const FEEDINGTYPEREF = 'ecology.FeedingTypeRef';

    /** the column name for the DietTroph field */
    const DIETTROPH = 'ecology.DietTroph';

    /** the column name for the DietSeTroph field */
    const DIETSETROPH = 'ecology.DietSeTroph';

    /** the column name for the DietTLu field */
    const DIETTLU = 'ecology.DietTLu';

    /** the column name for the DietseTLu field */
    const DIETSETLU = 'ecology.DietseTLu';

    /** the column name for the DietRemark field */
    const DIETREMARK = 'ecology.DietRemark';

    /** the column name for the DietRef field */
    const DIETREF = 'ecology.DietRef';

    /** the column name for the FoodTroph field */
    const FOODTROPH = 'ecology.FoodTroph';

    /** the column name for the FoodSeTroph field */
    const FOODSETROPH = 'ecology.FoodSeTroph';

    /** the column name for the FoodRemark field */
    const FOODREMARK = 'ecology.FoodRemark';

    /** the column name for the FoodRef field */
    const FOODREF = 'ecology.FoodRef';

    /** the column name for the AddRems field */
    const ADDREMS = 'ecology.AddRems';

    /** the column name for the AssociationRef field */
    const ASSOCIATIONREF = 'ecology.AssociationRef';

    /** the column name for the Parasitism field */
    const PARASITISM = 'ecology.Parasitism';

    /** the column name for the Solitary field */
    const SOLITARY = 'ecology.Solitary';

    /** the column name for the Symbiosis field */
    const SYMBIOSIS = 'ecology.Symbiosis';

    /** the column name for the Symphorism field */
    const SYMPHORISM = 'ecology.Symphorism';

    /** the column name for the Commensalism field */
    const COMMENSALISM = 'ecology.Commensalism';

    /** the column name for the Mutualism field */
    const MUTUALISM = 'ecology.Mutualism';

    /** the column name for the Epiphytic field */
    const EPIPHYTIC = 'ecology.Epiphytic';

    /** the column name for the Schooling field */
    const SCHOOLING = 'ecology.Schooling';

    /** the column name for the SchoolingFrequency field */
    const SCHOOLINGFREQUENCY = 'ecology.SchoolingFrequency';

    /** the column name for the SchoolingLifestage field */
    const SCHOOLINGLIFESTAGE = 'ecology.SchoolingLifestage';

    /** the column name for the Shoaling field */
    const SHOALING = 'ecology.Shoaling';

    /** the column name for the ShoalingFrequency field */
    const SHOALINGFREQUENCY = 'ecology.ShoalingFrequency';

    /** the column name for the ShoalingLifestage field */
    const SHOALINGLIFESTAGE = 'ecology.ShoalingLifestage';

    /** the column name for the SchoolShoalRef field */
    const SCHOOLSHOALREF = 'ecology.SchoolShoalRef';

    /** the column name for the AssociationsWith field */
    const ASSOCIATIONSWITH = 'ecology.AssociationsWith';

    /** the column name for the AssociationsRemarks field */
    const ASSOCIATIONSREMARKS = 'ecology.AssociationsRemarks';

    /** the column name for the OutsideHost field */
    const OUTSIDEHOST = 'ecology.OutsideHost';

    /** the column name for the OHRemarks field */
    const OHREMARKS = 'ecology.OHRemarks';

    /** the column name for the InsideHost field */
    const INSIDEHOST = 'ecology.InsideHost';

    /** the column name for the IHRemarks field */
    const IHREMARKS = 'ecology.IHRemarks';

    /** the column name for the SubstrateRef field */
    const SUBSTRATEREF = 'ecology.SubstrateRef';

    /** the column name for the Benthic field */
    const BENTHIC = 'ecology.Benthic';

    /** the column name for the Sessile field */
    const SESSILE = 'ecology.Sessile';

    /** the column name for the Mobile field */
    const MOBILE = 'ecology.Mobile';

    /** the column name for the Demersal field */
    const DEMERSAL = 'ecology.Demersal';

    /** the column name for the Endofauna field */
    const ENDOFAUNA = 'ecology.Endofauna';

    /** the column name for the Pelagic field */
    const PELAGIC = 'ecology.Pelagic';

    /** the column name for the Megabenthos field */
    const MEGABENTHOS = 'ecology.Megabenthos';

    /** the column name for the Macrobenthos field */
    const MACROBENTHOS = 'ecology.Macrobenthos';

    /** the column name for the Meiobenthos field */
    const MEIOBENTHOS = 'ecology.Meiobenthos';

    /** the column name for the SoftBottom field */
    const SOFTBOTTOM = 'ecology.SoftBottom';

    /** the column name for the Sand field */
    const SAND = 'ecology.Sand';

    /** the column name for the Coarse field */
    const COARSE = 'ecology.Coarse';

    /** the column name for the Fine field */
    const FINE = 'ecology.Fine';

    /** the column name for the Level field */
    const LEVEL = 'ecology.Level';

    /** the column name for the Sloping field */
    const SLOPING = 'ecology.Sloping';

    /** the column name for the Silt field */
    const SILT = 'ecology.Silt';

    /** the column name for the Mud field */
    const MUD = 'ecology.Mud';

    /** the column name for the Ooze field */
    const OOZE = 'ecology.Ooze';

    /** the column name for the Detritus field */
    const DETRITUS = 'ecology.Detritus';

    /** the column name for the Organic field */
    const ORGANIC = 'ecology.Organic';

    /** the column name for the HardBottom field */
    const HARDBOTTOM = 'ecology.HardBottom';

    /** the column name for the Rocky field */
    const ROCKY = 'ecology.Rocky';

    /** the column name for the Rubble field */
    const RUBBLE = 'ecology.Rubble';

    /** the column name for the SpecialHabitatRef field */
    const SPECIALHABITATREF = 'ecology.SpecialHabitatRef';

    /** the column name for the Macrophyte field */
    const MACROPHYTE = 'ecology.Macrophyte';

    /** the column name for the BedsBivalve field */
    const BEDSBIVALVE = 'ecology.BedsBivalve';

    /** the column name for the BedsRock field */
    const BEDSROCK = 'ecology.BedsRock';

    /** the column name for the SeaGrassBeds field */
    const SEAGRASSBEDS = 'ecology.SeaGrassBeds';

    /** the column name for the BedsOthers field */
    const BEDSOTHERS = 'ecology.BedsOthers';

    /** the column name for the CoralReefs field */
    const CORALREEFS = 'ecology.CoralReefs';

    /** the column name for the ReefExclusive field */
    const REEFEXCLUSIVE = 'ecology.ReefExclusive';

    /** the column name for the DropOffs field */
    const DROPOFFS = 'ecology.DropOffs';

    /** the column name for the ReefFlats field */
    const REEFFLATS = 'ecology.ReefFlats';

    /** the column name for the Lagoons field */
    const LAGOONS = 'ecology.Lagoons';

    /** the column name for the Burrows field */
    const BURROWS = 'ecology.Burrows';

    /** the column name for the Tunnels field */
    const TUNNELS = 'ecology.Tunnels';

    /** the column name for the Crevices field */
    const CREVICES = 'ecology.Crevices';

    /** the column name for the Vents field */
    const VENTS = 'ecology.Vents';

    /** the column name for the Seamounts field */
    const SEAMOUNTS = 'ecology.Seamounts';

    /** the column name for the DeepWaterCorals field */
    const DEEPWATERCORALS = 'ecology.DeepWaterCorals';

    /** the column name for the Vegetation field */
    const VEGETATION = 'ecology.Vegetation';

    /** the column name for the Leaves field */
    const LEAVES = 'ecology.Leaves';

    /** the column name for the Stems field */
    const STEMS = 'ecology.Stems';

    /** the column name for the Roots field */
    const ROOTS = 'ecology.Roots';

    /** the column name for the Driftwood field */
    const DRIFTWOOD = 'ecology.Driftwood';

    /** the column name for the OInverterbrates field */
    const OINVERTERBRATES = 'ecology.OInverterbrates';

    /** the column name for the OIRemarks field */
    const OIREMARKS = 'ecology.OIRemarks';

    /** the column name for the Verterbrates field */
    const VERTERBRATES = 'ecology.Verterbrates';

    /** the column name for the VRemarks field */
    const VREMARKS = 'ecology.VRemarks';

    /** the column name for the Pilings field */
    const PILINGS = 'ecology.Pilings';

    /** the column name for the BoatHulls field */
    const BOATHULLS = 'ecology.BoatHulls';

    /** the column name for the Corals field */
    const CORALS = 'ecology.Corals';

    /** the column name for the SoftCorals field */
    const SOFTCORALS = 'ecology.SoftCorals';

    /** the column name for the OnPolyp field */
    const ONPOLYP = 'ecology.OnPolyp';

    /** the column name for the BetweenPolyps field */
    const BETWEENPOLYPS = 'ecology.BetweenPolyps';

    /** the column name for the HardCorals field */
    const HARDCORALS = 'ecology.HardCorals';

    /** the column name for the OnExoskeleton field */
    const ONEXOSKELETON = 'ecology.OnExoskeleton';

    /** the column name for the InterstitialSpaces field */
    const INTERSTITIALSPACES = 'ecology.InterstitialSpaces';

    /** the column name for the Entered field */
    const ENTERED = 'ecology.Entered';

    /** the column name for the Dateentered field */
    const DATEENTERED = 'ecology.Dateentered';

    /** the column name for the Modified field */
    const MODIFIED = 'ecology.Modified';

    /** the column name for the Datemodified field */
    const DATEMODIFIED = 'ecology.Datemodified';

    /** the column name for the Expert field */
    const EXPERT = 'ecology.Expert';

    /** the column name for the Datechecked field */
    const DATECHECKED = 'ecology.Datechecked';

    /** the column name for the TS field */
    const TS = 'ecology.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Ecology objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Ecology[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EcologyPeer::$fieldNames[EcologyPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Speccode', 'Stockcode', 'Ecologyrefno', 'Habitatsref', 'Neritic', 'Supralittoralzone', 'Saltmarshes', 'Littoralzone', 'Tidepools', 'Intertidal', 'Sublittoral', 'Caves', 'Oceanic', 'Epipelagic', 'Mesopelagic', 'Bathypelagic', 'Abyssopelagic', 'Hadopelagic', 'Estuaries', 'Mangroves', 'Marshesswamps', 'Caveanchialine', 'Stream', 'Lakes', 'Cave', 'Cave2', 'Herbivory2', 'Herbivoryref', 'Feedingtype', 'Feedingtyperef', 'Diettroph', 'Dietsetroph', 'Diettlu', 'Dietsetlu', 'Dietremark', 'Dietref', 'Foodtroph', 'Foodsetroph', 'Foodremark', 'Foodref', 'Addrems', 'Associationref', 'Parasitism', 'Solitary', 'Symbiosis', 'Symphorism', 'Commensalism', 'Mutualism', 'Epiphytic', 'Schooling', 'Schoolingfrequency', 'Schoolinglifestage', 'Shoaling', 'Shoalingfrequency', 'Shoalinglifestage', 'Schoolshoalref', 'Associationswith', 'Associationsremarks', 'Outsidehost', 'Ohremarks', 'Insidehost', 'Ihremarks', 'Substrateref', 'Benthic', 'Sessile', 'Mobile', 'Demersal', 'Endofauna', 'Pelagic', 'Megabenthos', 'Macrobenthos', 'Meiobenthos', 'Softbottom', 'Sand', 'Coarse', 'Fine', 'Level', 'Sloping', 'Silt', 'Mud', 'Ooze', 'Detritus', 'Organic', 'Hardbottom', 'Rocky', 'Rubble', 'Specialhabitatref', 'Macrophyte', 'Bedsbivalve', 'Bedsrock', 'Seagrassbeds', 'Bedsothers', 'Coralreefs', 'Reefexclusive', 'Dropoffs', 'Reefflats', 'Lagoons', 'Burrows', 'Tunnels', 'Crevices', 'Vents', 'Seamounts', 'Deepwatercorals', 'Vegetation', 'Leaves', 'Stems', 'Roots', 'Driftwood', 'Oinverterbrates', 'Oiremarks', 'Verterbrates', 'Vremarks', 'Pilings', 'Boathulls', 'Corals', 'Softcorals', 'Onpolyp', 'Betweenpolyps', 'Hardcorals', 'Onexoskeleton', 'Interstitialspaces', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'speccode', 'stockcode', 'ecologyrefno', 'habitatsref', 'neritic', 'supralittoralzone', 'saltmarshes', 'littoralzone', 'tidepools', 'intertidal', 'sublittoral', 'caves', 'oceanic', 'epipelagic', 'mesopelagic', 'bathypelagic', 'abyssopelagic', 'hadopelagic', 'estuaries', 'mangroves', 'marshesswamps', 'caveanchialine', 'stream', 'lakes', 'cave', 'cave2', 'herbivory2', 'herbivoryref', 'feedingtype', 'feedingtyperef', 'diettroph', 'dietsetroph', 'diettlu', 'dietsetlu', 'dietremark', 'dietref', 'foodtroph', 'foodsetroph', 'foodremark', 'foodref', 'addrems', 'associationref', 'parasitism', 'solitary', 'symbiosis', 'symphorism', 'commensalism', 'mutualism', 'epiphytic', 'schooling', 'schoolingfrequency', 'schoolinglifestage', 'shoaling', 'shoalingfrequency', 'shoalinglifestage', 'schoolshoalref', 'associationswith', 'associationsremarks', 'outsidehost', 'ohremarks', 'insidehost', 'ihremarks', 'substrateref', 'benthic', 'sessile', 'mobile', 'demersal', 'endofauna', 'pelagic', 'megabenthos', 'macrobenthos', 'meiobenthos', 'softbottom', 'sand', 'coarse', 'fine', 'level', 'sloping', 'silt', 'mud', 'ooze', 'detritus', 'organic', 'hardbottom', 'rocky', 'rubble', 'specialhabitatref', 'macrophyte', 'bedsbivalve', 'bedsrock', 'seagrassbeds', 'bedsothers', 'coralreefs', 'reefexclusive', 'dropoffs', 'reefflats', 'lagoons', 'burrows', 'tunnels', 'crevices', 'vents', 'seamounts', 'deepwatercorals', 'vegetation', 'leaves', 'stems', 'roots', 'driftwood', 'oinverterbrates', 'oiremarks', 'verterbrates', 'vremarks', 'pilings', 'boathulls', 'corals', 'softcorals', 'onpolyp', 'betweenpolyps', 'hardcorals', 'onexoskeleton', 'interstitialspaces', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (EcologyPeer::AUTOCTR, EcologyPeer::SPECCODE, EcologyPeer::STOCKCODE, EcologyPeer::ECOLOGYREFNO, EcologyPeer::HABITATSREF, EcologyPeer::NERITIC, EcologyPeer::SUPRALITTORALZONE, EcologyPeer::SALTMARSHES, EcologyPeer::LITTORALZONE, EcologyPeer::TIDEPOOLS, EcologyPeer::INTERTIDAL, EcologyPeer::SUBLITTORAL, EcologyPeer::CAVES, EcologyPeer::OCEANIC, EcologyPeer::EPIPELAGIC, EcologyPeer::MESOPELAGIC, EcologyPeer::BATHYPELAGIC, EcologyPeer::ABYSSOPELAGIC, EcologyPeer::HADOPELAGIC, EcologyPeer::ESTUARIES, EcologyPeer::MANGROVES, EcologyPeer::MARSHESSWAMPS, EcologyPeer::CAVEANCHIALINE, EcologyPeer::STREAM, EcologyPeer::LAKES, EcologyPeer::CAVE, EcologyPeer::CAVE2, EcologyPeer::HERBIVORY2, EcologyPeer::HERBIVORYREF, EcologyPeer::FEEDINGTYPE, EcologyPeer::FEEDINGTYPEREF, EcologyPeer::DIETTROPH, EcologyPeer::DIETSETROPH, EcologyPeer::DIETTLU, EcologyPeer::DIETSETLU, EcologyPeer::DIETREMARK, EcologyPeer::DIETREF, EcologyPeer::FOODTROPH, EcologyPeer::FOODSETROPH, EcologyPeer::FOODREMARK, EcologyPeer::FOODREF, EcologyPeer::ADDREMS, EcologyPeer::ASSOCIATIONREF, EcologyPeer::PARASITISM, EcologyPeer::SOLITARY, EcologyPeer::SYMBIOSIS, EcologyPeer::SYMPHORISM, EcologyPeer::COMMENSALISM, EcologyPeer::MUTUALISM, EcologyPeer::EPIPHYTIC, EcologyPeer::SCHOOLING, EcologyPeer::SCHOOLINGFREQUENCY, EcologyPeer::SCHOOLINGLIFESTAGE, EcologyPeer::SHOALING, EcologyPeer::SHOALINGFREQUENCY, EcologyPeer::SHOALINGLIFESTAGE, EcologyPeer::SCHOOLSHOALREF, EcologyPeer::ASSOCIATIONSWITH, EcologyPeer::ASSOCIATIONSREMARKS, EcologyPeer::OUTSIDEHOST, EcologyPeer::OHREMARKS, EcologyPeer::INSIDEHOST, EcologyPeer::IHREMARKS, EcologyPeer::SUBSTRATEREF, EcologyPeer::BENTHIC, EcologyPeer::SESSILE, EcologyPeer::MOBILE, EcologyPeer::DEMERSAL, EcologyPeer::ENDOFAUNA, EcologyPeer::PELAGIC, EcologyPeer::MEGABENTHOS, EcologyPeer::MACROBENTHOS, EcologyPeer::MEIOBENTHOS, EcologyPeer::SOFTBOTTOM, EcologyPeer::SAND, EcologyPeer::COARSE, EcologyPeer::FINE, EcologyPeer::LEVEL, EcologyPeer::SLOPING, EcologyPeer::SILT, EcologyPeer::MUD, EcologyPeer::OOZE, EcologyPeer::DETRITUS, EcologyPeer::ORGANIC, EcologyPeer::HARDBOTTOM, EcologyPeer::ROCKY, EcologyPeer::RUBBLE, EcologyPeer::SPECIALHABITATREF, EcologyPeer::MACROPHYTE, EcologyPeer::BEDSBIVALVE, EcologyPeer::BEDSROCK, EcologyPeer::SEAGRASSBEDS, EcologyPeer::BEDSOTHERS, EcologyPeer::CORALREEFS, EcologyPeer::REEFEXCLUSIVE, EcologyPeer::DROPOFFS, EcologyPeer::REEFFLATS, EcologyPeer::LAGOONS, EcologyPeer::BURROWS, EcologyPeer::TUNNELS, EcologyPeer::CREVICES, EcologyPeer::VENTS, EcologyPeer::SEAMOUNTS, EcologyPeer::DEEPWATERCORALS, EcologyPeer::VEGETATION, EcologyPeer::LEAVES, EcologyPeer::STEMS, EcologyPeer::ROOTS, EcologyPeer::DRIFTWOOD, EcologyPeer::OINVERTERBRATES, EcologyPeer::OIREMARKS, EcologyPeer::VERTERBRATES, EcologyPeer::VREMARKS, EcologyPeer::PILINGS, EcologyPeer::BOATHULLS, EcologyPeer::CORALS, EcologyPeer::SOFTCORALS, EcologyPeer::ONPOLYP, EcologyPeer::BETWEENPOLYPS, EcologyPeer::HARDCORALS, EcologyPeer::ONEXOSKELETON, EcologyPeer::INTERSTITIALSPACES, EcologyPeer::ENTERED, EcologyPeer::DATEENTERED, EcologyPeer::MODIFIED, EcologyPeer::DATEMODIFIED, EcologyPeer::EXPERT, EcologyPeer::DATECHECKED, EcologyPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'SPECCODE', 'STOCKCODE', 'ECOLOGYREFNO', 'HABITATSREF', 'NERITIC', 'SUPRALITTORALZONE', 'SALTMARSHES', 'LITTORALZONE', 'TIDEPOOLS', 'INTERTIDAL', 'SUBLITTORAL', 'CAVES', 'OCEANIC', 'EPIPELAGIC', 'MESOPELAGIC', 'BATHYPELAGIC', 'ABYSSOPELAGIC', 'HADOPELAGIC', 'ESTUARIES', 'MANGROVES', 'MARSHESSWAMPS', 'CAVEANCHIALINE', 'STREAM', 'LAKES', 'CAVE', 'CAVE2', 'HERBIVORY2', 'HERBIVORYREF', 'FEEDINGTYPE', 'FEEDINGTYPEREF', 'DIETTROPH', 'DIETSETROPH', 'DIETTLU', 'DIETSETLU', 'DIETREMARK', 'DIETREF', 'FOODTROPH', 'FOODSETROPH', 'FOODREMARK', 'FOODREF', 'ADDREMS', 'ASSOCIATIONREF', 'PARASITISM', 'SOLITARY', 'SYMBIOSIS', 'SYMPHORISM', 'COMMENSALISM', 'MUTUALISM', 'EPIPHYTIC', 'SCHOOLING', 'SCHOOLINGFREQUENCY', 'SCHOOLINGLIFESTAGE', 'SHOALING', 'SHOALINGFREQUENCY', 'SHOALINGLIFESTAGE', 'SCHOOLSHOALREF', 'ASSOCIATIONSWITH', 'ASSOCIATIONSREMARKS', 'OUTSIDEHOST', 'OHREMARKS', 'INSIDEHOST', 'IHREMARKS', 'SUBSTRATEREF', 'BENTHIC', 'SESSILE', 'MOBILE', 'DEMERSAL', 'ENDOFAUNA', 'PELAGIC', 'MEGABENTHOS', 'MACROBENTHOS', 'MEIOBENTHOS', 'SOFTBOTTOM', 'SAND', 'COARSE', 'FINE', 'LEVEL', 'SLOPING', 'SILT', 'MUD', 'OOZE', 'DETRITUS', 'ORGANIC', 'HARDBOTTOM', 'ROCKY', 'RUBBLE', 'SPECIALHABITATREF', 'MACROPHYTE', 'BEDSBIVALVE', 'BEDSROCK', 'SEAGRASSBEDS', 'BEDSOTHERS', 'CORALREEFS', 'REEFEXCLUSIVE', 'DROPOFFS', 'REEFFLATS', 'LAGOONS', 'BURROWS', 'TUNNELS', 'CREVICES', 'VENTS', 'SEAMOUNTS', 'DEEPWATERCORALS', 'VEGETATION', 'LEAVES', 'STEMS', 'ROOTS', 'DRIFTWOOD', 'OINVERTERBRATES', 'OIREMARKS', 'VERTERBRATES', 'VREMARKS', 'PILINGS', 'BOATHULLS', 'CORALS', 'SOFTCORALS', 'ONPOLYP', 'BETWEENPOLYPS', 'HARDCORALS', 'ONEXOSKELETON', 'INTERSTITIALSPACES', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'SpecCode', 'StockCode', 'EcologyRefNo', 'HabitatsRef', 'Neritic', 'SupraLittoralZone', 'Saltmarshes', 'LittoralZone', 'TidePools', 'Intertidal', 'SubLittoral', 'Caves', 'Oceanic', 'Epipelagic', 'Mesopelagic', 'Bathypelagic', 'Abyssopelagic', 'Hadopelagic', 'Estuaries', 'Mangroves', 'MarshesSwamps', 'CaveAnchialine', 'Stream', 'Lakes', 'Cave', 'Cave2', 'Herbivory2', 'HerbivoryRef', 'FeedingType', 'FeedingTypeRef', 'DietTroph', 'DietSeTroph', 'DietTLu', 'DietseTLu', 'DietRemark', 'DietRef', 'FoodTroph', 'FoodSeTroph', 'FoodRemark', 'FoodRef', 'AddRems', 'AssociationRef', 'Parasitism', 'Solitary', 'Symbiosis', 'Symphorism', 'Commensalism', 'Mutualism', 'Epiphytic', 'Schooling', 'SchoolingFrequency', 'SchoolingLifestage', 'Shoaling', 'ShoalingFrequency', 'ShoalingLifestage', 'SchoolShoalRef', 'AssociationsWith', 'AssociationsRemarks', 'OutsideHost', 'OHRemarks', 'InsideHost', 'IHRemarks', 'SubstrateRef', 'Benthic', 'Sessile', 'Mobile', 'Demersal', 'Endofauna', 'Pelagic', 'Megabenthos', 'Macrobenthos', 'Meiobenthos', 'SoftBottom', 'Sand', 'Coarse', 'Fine', 'Level', 'Sloping', 'Silt', 'Mud', 'Ooze', 'Detritus', 'Organic', 'HardBottom', 'Rocky', 'Rubble', 'SpecialHabitatRef', 'Macrophyte', 'BedsBivalve', 'BedsRock', 'SeaGrassBeds', 'BedsOthers', 'CoralReefs', 'ReefExclusive', 'DropOffs', 'ReefFlats', 'Lagoons', 'Burrows', 'Tunnels', 'Crevices', 'Vents', 'Seamounts', 'DeepWaterCorals', 'Vegetation', 'Leaves', 'Stems', 'Roots', 'Driftwood', 'OInverterbrates', 'OIRemarks', 'Verterbrates', 'VRemarks', 'Pilings', 'BoatHulls', 'Corals', 'SoftCorals', 'OnPolyp', 'BetweenPolyps', 'HardCorals', 'OnExoskeleton', 'InterstitialSpaces', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EcologyPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Stockcode' => 2, 'Ecologyrefno' => 3, 'Habitatsref' => 4, 'Neritic' => 5, 'Supralittoralzone' => 6, 'Saltmarshes' => 7, 'Littoralzone' => 8, 'Tidepools' => 9, 'Intertidal' => 10, 'Sublittoral' => 11, 'Caves' => 12, 'Oceanic' => 13, 'Epipelagic' => 14, 'Mesopelagic' => 15, 'Bathypelagic' => 16, 'Abyssopelagic' => 17, 'Hadopelagic' => 18, 'Estuaries' => 19, 'Mangroves' => 20, 'Marshesswamps' => 21, 'Caveanchialine' => 22, 'Stream' => 23, 'Lakes' => 24, 'Cave' => 25, 'Cave2' => 26, 'Herbivory2' => 27, 'Herbivoryref' => 28, 'Feedingtype' => 29, 'Feedingtyperef' => 30, 'Diettroph' => 31, 'Dietsetroph' => 32, 'Diettlu' => 33, 'Dietsetlu' => 34, 'Dietremark' => 35, 'Dietref' => 36, 'Foodtroph' => 37, 'Foodsetroph' => 38, 'Foodremark' => 39, 'Foodref' => 40, 'Addrems' => 41, 'Associationref' => 42, 'Parasitism' => 43, 'Solitary' => 44, 'Symbiosis' => 45, 'Symphorism' => 46, 'Commensalism' => 47, 'Mutualism' => 48, 'Epiphytic' => 49, 'Schooling' => 50, 'Schoolingfrequency' => 51, 'Schoolinglifestage' => 52, 'Shoaling' => 53, 'Shoalingfrequency' => 54, 'Shoalinglifestage' => 55, 'Schoolshoalref' => 56, 'Associationswith' => 57, 'Associationsremarks' => 58, 'Outsidehost' => 59, 'Ohremarks' => 60, 'Insidehost' => 61, 'Ihremarks' => 62, 'Substrateref' => 63, 'Benthic' => 64, 'Sessile' => 65, 'Mobile' => 66, 'Demersal' => 67, 'Endofauna' => 68, 'Pelagic' => 69, 'Megabenthos' => 70, 'Macrobenthos' => 71, 'Meiobenthos' => 72, 'Softbottom' => 73, 'Sand' => 74, 'Coarse' => 75, 'Fine' => 76, 'Level' => 77, 'Sloping' => 78, 'Silt' => 79, 'Mud' => 80, 'Ooze' => 81, 'Detritus' => 82, 'Organic' => 83, 'Hardbottom' => 84, 'Rocky' => 85, 'Rubble' => 86, 'Specialhabitatref' => 87, 'Macrophyte' => 88, 'Bedsbivalve' => 89, 'Bedsrock' => 90, 'Seagrassbeds' => 91, 'Bedsothers' => 92, 'Coralreefs' => 93, 'Reefexclusive' => 94, 'Dropoffs' => 95, 'Reefflats' => 96, 'Lagoons' => 97, 'Burrows' => 98, 'Tunnels' => 99, 'Crevices' => 100, 'Vents' => 101, 'Seamounts' => 102, 'Deepwatercorals' => 103, 'Vegetation' => 104, 'Leaves' => 105, 'Stems' => 106, 'Roots' => 107, 'Driftwood' => 108, 'Oinverterbrates' => 109, 'Oiremarks' => 110, 'Verterbrates' => 111, 'Vremarks' => 112, 'Pilings' => 113, 'Boathulls' => 114, 'Corals' => 115, 'Softcorals' => 116, 'Onpolyp' => 117, 'Betweenpolyps' => 118, 'Hardcorals' => 119, 'Onexoskeleton' => 120, 'Interstitialspaces' => 121, 'Entered' => 122, 'Dateentered' => 123, 'Modified' => 124, 'Datemodified' => 125, 'Expert' => 126, 'Datechecked' => 127, 'Ts' => 128, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'speccode' => 1, 'stockcode' => 2, 'ecologyrefno' => 3, 'habitatsref' => 4, 'neritic' => 5, 'supralittoralzone' => 6, 'saltmarshes' => 7, 'littoralzone' => 8, 'tidepools' => 9, 'intertidal' => 10, 'sublittoral' => 11, 'caves' => 12, 'oceanic' => 13, 'epipelagic' => 14, 'mesopelagic' => 15, 'bathypelagic' => 16, 'abyssopelagic' => 17, 'hadopelagic' => 18, 'estuaries' => 19, 'mangroves' => 20, 'marshesswamps' => 21, 'caveanchialine' => 22, 'stream' => 23, 'lakes' => 24, 'cave' => 25, 'cave2' => 26, 'herbivory2' => 27, 'herbivoryref' => 28, 'feedingtype' => 29, 'feedingtyperef' => 30, 'diettroph' => 31, 'dietsetroph' => 32, 'diettlu' => 33, 'dietsetlu' => 34, 'dietremark' => 35, 'dietref' => 36, 'foodtroph' => 37, 'foodsetroph' => 38, 'foodremark' => 39, 'foodref' => 40, 'addrems' => 41, 'associationref' => 42, 'parasitism' => 43, 'solitary' => 44, 'symbiosis' => 45, 'symphorism' => 46, 'commensalism' => 47, 'mutualism' => 48, 'epiphytic' => 49, 'schooling' => 50, 'schoolingfrequency' => 51, 'schoolinglifestage' => 52, 'shoaling' => 53, 'shoalingfrequency' => 54, 'shoalinglifestage' => 55, 'schoolshoalref' => 56, 'associationswith' => 57, 'associationsremarks' => 58, 'outsidehost' => 59, 'ohremarks' => 60, 'insidehost' => 61, 'ihremarks' => 62, 'substrateref' => 63, 'benthic' => 64, 'sessile' => 65, 'mobile' => 66, 'demersal' => 67, 'endofauna' => 68, 'pelagic' => 69, 'megabenthos' => 70, 'macrobenthos' => 71, 'meiobenthos' => 72, 'softbottom' => 73, 'sand' => 74, 'coarse' => 75, 'fine' => 76, 'level' => 77, 'sloping' => 78, 'silt' => 79, 'mud' => 80, 'ooze' => 81, 'detritus' => 82, 'organic' => 83, 'hardbottom' => 84, 'rocky' => 85, 'rubble' => 86, 'specialhabitatref' => 87, 'macrophyte' => 88, 'bedsbivalve' => 89, 'bedsrock' => 90, 'seagrassbeds' => 91, 'bedsothers' => 92, 'coralreefs' => 93, 'reefexclusive' => 94, 'dropoffs' => 95, 'reefflats' => 96, 'lagoons' => 97, 'burrows' => 98, 'tunnels' => 99, 'crevices' => 100, 'vents' => 101, 'seamounts' => 102, 'deepwatercorals' => 103, 'vegetation' => 104, 'leaves' => 105, 'stems' => 106, 'roots' => 107, 'driftwood' => 108, 'oinverterbrates' => 109, 'oiremarks' => 110, 'verterbrates' => 111, 'vremarks' => 112, 'pilings' => 113, 'boathulls' => 114, 'corals' => 115, 'softcorals' => 116, 'onpolyp' => 117, 'betweenpolyps' => 118, 'hardcorals' => 119, 'onexoskeleton' => 120, 'interstitialspaces' => 121, 'entered' => 122, 'dateentered' => 123, 'modified' => 124, 'datemodified' => 125, 'expert' => 126, 'datechecked' => 127, 'ts' => 128, ),
        BasePeer::TYPE_COLNAME => array (EcologyPeer::AUTOCTR => 0, EcologyPeer::SPECCODE => 1, EcologyPeer::STOCKCODE => 2, EcologyPeer::ECOLOGYREFNO => 3, EcologyPeer::HABITATSREF => 4, EcologyPeer::NERITIC => 5, EcologyPeer::SUPRALITTORALZONE => 6, EcologyPeer::SALTMARSHES => 7, EcologyPeer::LITTORALZONE => 8, EcologyPeer::TIDEPOOLS => 9, EcologyPeer::INTERTIDAL => 10, EcologyPeer::SUBLITTORAL => 11, EcologyPeer::CAVES => 12, EcologyPeer::OCEANIC => 13, EcologyPeer::EPIPELAGIC => 14, EcologyPeer::MESOPELAGIC => 15, EcologyPeer::BATHYPELAGIC => 16, EcologyPeer::ABYSSOPELAGIC => 17, EcologyPeer::HADOPELAGIC => 18, EcologyPeer::ESTUARIES => 19, EcologyPeer::MANGROVES => 20, EcologyPeer::MARSHESSWAMPS => 21, EcologyPeer::CAVEANCHIALINE => 22, EcologyPeer::STREAM => 23, EcologyPeer::LAKES => 24, EcologyPeer::CAVE => 25, EcologyPeer::CAVE2 => 26, EcologyPeer::HERBIVORY2 => 27, EcologyPeer::HERBIVORYREF => 28, EcologyPeer::FEEDINGTYPE => 29, EcologyPeer::FEEDINGTYPEREF => 30, EcologyPeer::DIETTROPH => 31, EcologyPeer::DIETSETROPH => 32, EcologyPeer::DIETTLU => 33, EcologyPeer::DIETSETLU => 34, EcologyPeer::DIETREMARK => 35, EcologyPeer::DIETREF => 36, EcologyPeer::FOODTROPH => 37, EcologyPeer::FOODSETROPH => 38, EcologyPeer::FOODREMARK => 39, EcologyPeer::FOODREF => 40, EcologyPeer::ADDREMS => 41, EcologyPeer::ASSOCIATIONREF => 42, EcologyPeer::PARASITISM => 43, EcologyPeer::SOLITARY => 44, EcologyPeer::SYMBIOSIS => 45, EcologyPeer::SYMPHORISM => 46, EcologyPeer::COMMENSALISM => 47, EcologyPeer::MUTUALISM => 48, EcologyPeer::EPIPHYTIC => 49, EcologyPeer::SCHOOLING => 50, EcologyPeer::SCHOOLINGFREQUENCY => 51, EcologyPeer::SCHOOLINGLIFESTAGE => 52, EcologyPeer::SHOALING => 53, EcologyPeer::SHOALINGFREQUENCY => 54, EcologyPeer::SHOALINGLIFESTAGE => 55, EcologyPeer::SCHOOLSHOALREF => 56, EcologyPeer::ASSOCIATIONSWITH => 57, EcologyPeer::ASSOCIATIONSREMARKS => 58, EcologyPeer::OUTSIDEHOST => 59, EcologyPeer::OHREMARKS => 60, EcologyPeer::INSIDEHOST => 61, EcologyPeer::IHREMARKS => 62, EcologyPeer::SUBSTRATEREF => 63, EcologyPeer::BENTHIC => 64, EcologyPeer::SESSILE => 65, EcologyPeer::MOBILE => 66, EcologyPeer::DEMERSAL => 67, EcologyPeer::ENDOFAUNA => 68, EcologyPeer::PELAGIC => 69, EcologyPeer::MEGABENTHOS => 70, EcologyPeer::MACROBENTHOS => 71, EcologyPeer::MEIOBENTHOS => 72, EcologyPeer::SOFTBOTTOM => 73, EcologyPeer::SAND => 74, EcologyPeer::COARSE => 75, EcologyPeer::FINE => 76, EcologyPeer::LEVEL => 77, EcologyPeer::SLOPING => 78, EcologyPeer::SILT => 79, EcologyPeer::MUD => 80, EcologyPeer::OOZE => 81, EcologyPeer::DETRITUS => 82, EcologyPeer::ORGANIC => 83, EcologyPeer::HARDBOTTOM => 84, EcologyPeer::ROCKY => 85, EcologyPeer::RUBBLE => 86, EcologyPeer::SPECIALHABITATREF => 87, EcologyPeer::MACROPHYTE => 88, EcologyPeer::BEDSBIVALVE => 89, EcologyPeer::BEDSROCK => 90, EcologyPeer::SEAGRASSBEDS => 91, EcologyPeer::BEDSOTHERS => 92, EcologyPeer::CORALREEFS => 93, EcologyPeer::REEFEXCLUSIVE => 94, EcologyPeer::DROPOFFS => 95, EcologyPeer::REEFFLATS => 96, EcologyPeer::LAGOONS => 97, EcologyPeer::BURROWS => 98, EcologyPeer::TUNNELS => 99, EcologyPeer::CREVICES => 100, EcologyPeer::VENTS => 101, EcologyPeer::SEAMOUNTS => 102, EcologyPeer::DEEPWATERCORALS => 103, EcologyPeer::VEGETATION => 104, EcologyPeer::LEAVES => 105, EcologyPeer::STEMS => 106, EcologyPeer::ROOTS => 107, EcologyPeer::DRIFTWOOD => 108, EcologyPeer::OINVERTERBRATES => 109, EcologyPeer::OIREMARKS => 110, EcologyPeer::VERTERBRATES => 111, EcologyPeer::VREMARKS => 112, EcologyPeer::PILINGS => 113, EcologyPeer::BOATHULLS => 114, EcologyPeer::CORALS => 115, EcologyPeer::SOFTCORALS => 116, EcologyPeer::ONPOLYP => 117, EcologyPeer::BETWEENPOLYPS => 118, EcologyPeer::HARDCORALS => 119, EcologyPeer::ONEXOSKELETON => 120, EcologyPeer::INTERSTITIALSPACES => 121, EcologyPeer::ENTERED => 122, EcologyPeer::DATEENTERED => 123, EcologyPeer::MODIFIED => 124, EcologyPeer::DATEMODIFIED => 125, EcologyPeer::EXPERT => 126, EcologyPeer::DATECHECKED => 127, EcologyPeer::TS => 128, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'SPECCODE' => 1, 'STOCKCODE' => 2, 'ECOLOGYREFNO' => 3, 'HABITATSREF' => 4, 'NERITIC' => 5, 'SUPRALITTORALZONE' => 6, 'SALTMARSHES' => 7, 'LITTORALZONE' => 8, 'TIDEPOOLS' => 9, 'INTERTIDAL' => 10, 'SUBLITTORAL' => 11, 'CAVES' => 12, 'OCEANIC' => 13, 'EPIPELAGIC' => 14, 'MESOPELAGIC' => 15, 'BATHYPELAGIC' => 16, 'ABYSSOPELAGIC' => 17, 'HADOPELAGIC' => 18, 'ESTUARIES' => 19, 'MANGROVES' => 20, 'MARSHESSWAMPS' => 21, 'CAVEANCHIALINE' => 22, 'STREAM' => 23, 'LAKES' => 24, 'CAVE' => 25, 'CAVE2' => 26, 'HERBIVORY2' => 27, 'HERBIVORYREF' => 28, 'FEEDINGTYPE' => 29, 'FEEDINGTYPEREF' => 30, 'DIETTROPH' => 31, 'DIETSETROPH' => 32, 'DIETTLU' => 33, 'DIETSETLU' => 34, 'DIETREMARK' => 35, 'DIETREF' => 36, 'FOODTROPH' => 37, 'FOODSETROPH' => 38, 'FOODREMARK' => 39, 'FOODREF' => 40, 'ADDREMS' => 41, 'ASSOCIATIONREF' => 42, 'PARASITISM' => 43, 'SOLITARY' => 44, 'SYMBIOSIS' => 45, 'SYMPHORISM' => 46, 'COMMENSALISM' => 47, 'MUTUALISM' => 48, 'EPIPHYTIC' => 49, 'SCHOOLING' => 50, 'SCHOOLINGFREQUENCY' => 51, 'SCHOOLINGLIFESTAGE' => 52, 'SHOALING' => 53, 'SHOALINGFREQUENCY' => 54, 'SHOALINGLIFESTAGE' => 55, 'SCHOOLSHOALREF' => 56, 'ASSOCIATIONSWITH' => 57, 'ASSOCIATIONSREMARKS' => 58, 'OUTSIDEHOST' => 59, 'OHREMARKS' => 60, 'INSIDEHOST' => 61, 'IHREMARKS' => 62, 'SUBSTRATEREF' => 63, 'BENTHIC' => 64, 'SESSILE' => 65, 'MOBILE' => 66, 'DEMERSAL' => 67, 'ENDOFAUNA' => 68, 'PELAGIC' => 69, 'MEGABENTHOS' => 70, 'MACROBENTHOS' => 71, 'MEIOBENTHOS' => 72, 'SOFTBOTTOM' => 73, 'SAND' => 74, 'COARSE' => 75, 'FINE' => 76, 'LEVEL' => 77, 'SLOPING' => 78, 'SILT' => 79, 'MUD' => 80, 'OOZE' => 81, 'DETRITUS' => 82, 'ORGANIC' => 83, 'HARDBOTTOM' => 84, 'ROCKY' => 85, 'RUBBLE' => 86, 'SPECIALHABITATREF' => 87, 'MACROPHYTE' => 88, 'BEDSBIVALVE' => 89, 'BEDSROCK' => 90, 'SEAGRASSBEDS' => 91, 'BEDSOTHERS' => 92, 'CORALREEFS' => 93, 'REEFEXCLUSIVE' => 94, 'DROPOFFS' => 95, 'REEFFLATS' => 96, 'LAGOONS' => 97, 'BURROWS' => 98, 'TUNNELS' => 99, 'CREVICES' => 100, 'VENTS' => 101, 'SEAMOUNTS' => 102, 'DEEPWATERCORALS' => 103, 'VEGETATION' => 104, 'LEAVES' => 105, 'STEMS' => 106, 'ROOTS' => 107, 'DRIFTWOOD' => 108, 'OINVERTERBRATES' => 109, 'OIREMARKS' => 110, 'VERTERBRATES' => 111, 'VREMARKS' => 112, 'PILINGS' => 113, 'BOATHULLS' => 114, 'CORALS' => 115, 'SOFTCORALS' => 116, 'ONPOLYP' => 117, 'BETWEENPOLYPS' => 118, 'HARDCORALS' => 119, 'ONEXOSKELETON' => 120, 'INTERSTITIALSPACES' => 121, 'ENTERED' => 122, 'DATEENTERED' => 123, 'MODIFIED' => 124, 'DATEMODIFIED' => 125, 'EXPERT' => 126, 'DATECHECKED' => 127, 'TS' => 128, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'SpecCode' => 1, 'StockCode' => 2, 'EcologyRefNo' => 3, 'HabitatsRef' => 4, 'Neritic' => 5, 'SupraLittoralZone' => 6, 'Saltmarshes' => 7, 'LittoralZone' => 8, 'TidePools' => 9, 'Intertidal' => 10, 'SubLittoral' => 11, 'Caves' => 12, 'Oceanic' => 13, 'Epipelagic' => 14, 'Mesopelagic' => 15, 'Bathypelagic' => 16, 'Abyssopelagic' => 17, 'Hadopelagic' => 18, 'Estuaries' => 19, 'Mangroves' => 20, 'MarshesSwamps' => 21, 'CaveAnchialine' => 22, 'Stream' => 23, 'Lakes' => 24, 'Cave' => 25, 'Cave2' => 26, 'Herbivory2' => 27, 'HerbivoryRef' => 28, 'FeedingType' => 29, 'FeedingTypeRef' => 30, 'DietTroph' => 31, 'DietSeTroph' => 32, 'DietTLu' => 33, 'DietseTLu' => 34, 'DietRemark' => 35, 'DietRef' => 36, 'FoodTroph' => 37, 'FoodSeTroph' => 38, 'FoodRemark' => 39, 'FoodRef' => 40, 'AddRems' => 41, 'AssociationRef' => 42, 'Parasitism' => 43, 'Solitary' => 44, 'Symbiosis' => 45, 'Symphorism' => 46, 'Commensalism' => 47, 'Mutualism' => 48, 'Epiphytic' => 49, 'Schooling' => 50, 'SchoolingFrequency' => 51, 'SchoolingLifestage' => 52, 'Shoaling' => 53, 'ShoalingFrequency' => 54, 'ShoalingLifestage' => 55, 'SchoolShoalRef' => 56, 'AssociationsWith' => 57, 'AssociationsRemarks' => 58, 'OutsideHost' => 59, 'OHRemarks' => 60, 'InsideHost' => 61, 'IHRemarks' => 62, 'SubstrateRef' => 63, 'Benthic' => 64, 'Sessile' => 65, 'Mobile' => 66, 'Demersal' => 67, 'Endofauna' => 68, 'Pelagic' => 69, 'Megabenthos' => 70, 'Macrobenthos' => 71, 'Meiobenthos' => 72, 'SoftBottom' => 73, 'Sand' => 74, 'Coarse' => 75, 'Fine' => 76, 'Level' => 77, 'Sloping' => 78, 'Silt' => 79, 'Mud' => 80, 'Ooze' => 81, 'Detritus' => 82, 'Organic' => 83, 'HardBottom' => 84, 'Rocky' => 85, 'Rubble' => 86, 'SpecialHabitatRef' => 87, 'Macrophyte' => 88, 'BedsBivalve' => 89, 'BedsRock' => 90, 'SeaGrassBeds' => 91, 'BedsOthers' => 92, 'CoralReefs' => 93, 'ReefExclusive' => 94, 'DropOffs' => 95, 'ReefFlats' => 96, 'Lagoons' => 97, 'Burrows' => 98, 'Tunnels' => 99, 'Crevices' => 100, 'Vents' => 101, 'Seamounts' => 102, 'DeepWaterCorals' => 103, 'Vegetation' => 104, 'Leaves' => 105, 'Stems' => 106, 'Roots' => 107, 'Driftwood' => 108, 'OInverterbrates' => 109, 'OIRemarks' => 110, 'Verterbrates' => 111, 'VRemarks' => 112, 'Pilings' => 113, 'BoatHulls' => 114, 'Corals' => 115, 'SoftCorals' => 116, 'OnPolyp' => 117, 'BetweenPolyps' => 118, 'HardCorals' => 119, 'OnExoskeleton' => 120, 'InterstitialSpaces' => 121, 'Entered' => 122, 'Dateentered' => 123, 'Modified' => 124, 'Datemodified' => 125, 'Expert' => 126, 'Datechecked' => 127, 'TS' => 128, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, )
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
        $toNames = EcologyPeer::getFieldNames($toType);
        $key = isset(EcologyPeer::$fieldKeys[$fromType][$name]) ? EcologyPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EcologyPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, EcologyPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EcologyPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. EcologyPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EcologyPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(EcologyPeer::AUTOCTR);
            $criteria->addSelectColumn(EcologyPeer::SPECCODE);
            $criteria->addSelectColumn(EcologyPeer::STOCKCODE);
            $criteria->addSelectColumn(EcologyPeer::ECOLOGYREFNO);
            $criteria->addSelectColumn(EcologyPeer::HABITATSREF);
            $criteria->addSelectColumn(EcologyPeer::NERITIC);
            $criteria->addSelectColumn(EcologyPeer::SUPRALITTORALZONE);
            $criteria->addSelectColumn(EcologyPeer::SALTMARSHES);
            $criteria->addSelectColumn(EcologyPeer::LITTORALZONE);
            $criteria->addSelectColumn(EcologyPeer::TIDEPOOLS);
            $criteria->addSelectColumn(EcologyPeer::INTERTIDAL);
            $criteria->addSelectColumn(EcologyPeer::SUBLITTORAL);
            $criteria->addSelectColumn(EcologyPeer::CAVES);
            $criteria->addSelectColumn(EcologyPeer::OCEANIC);
            $criteria->addSelectColumn(EcologyPeer::EPIPELAGIC);
            $criteria->addSelectColumn(EcologyPeer::MESOPELAGIC);
            $criteria->addSelectColumn(EcologyPeer::BATHYPELAGIC);
            $criteria->addSelectColumn(EcologyPeer::ABYSSOPELAGIC);
            $criteria->addSelectColumn(EcologyPeer::HADOPELAGIC);
            $criteria->addSelectColumn(EcologyPeer::ESTUARIES);
            $criteria->addSelectColumn(EcologyPeer::MANGROVES);
            $criteria->addSelectColumn(EcologyPeer::MARSHESSWAMPS);
            $criteria->addSelectColumn(EcologyPeer::CAVEANCHIALINE);
            $criteria->addSelectColumn(EcologyPeer::STREAM);
            $criteria->addSelectColumn(EcologyPeer::LAKES);
            $criteria->addSelectColumn(EcologyPeer::CAVE);
            $criteria->addSelectColumn(EcologyPeer::CAVE2);
            $criteria->addSelectColumn(EcologyPeer::HERBIVORY2);
            $criteria->addSelectColumn(EcologyPeer::HERBIVORYREF);
            $criteria->addSelectColumn(EcologyPeer::FEEDINGTYPE);
            $criteria->addSelectColumn(EcologyPeer::FEEDINGTYPEREF);
            $criteria->addSelectColumn(EcologyPeer::DIETTROPH);
            $criteria->addSelectColumn(EcologyPeer::DIETSETROPH);
            $criteria->addSelectColumn(EcologyPeer::DIETTLU);
            $criteria->addSelectColumn(EcologyPeer::DIETSETLU);
            $criteria->addSelectColumn(EcologyPeer::DIETREMARK);
            $criteria->addSelectColumn(EcologyPeer::DIETREF);
            $criteria->addSelectColumn(EcologyPeer::FOODTROPH);
            $criteria->addSelectColumn(EcologyPeer::FOODSETROPH);
            $criteria->addSelectColumn(EcologyPeer::FOODREMARK);
            $criteria->addSelectColumn(EcologyPeer::FOODREF);
            $criteria->addSelectColumn(EcologyPeer::ADDREMS);
            $criteria->addSelectColumn(EcologyPeer::ASSOCIATIONREF);
            $criteria->addSelectColumn(EcologyPeer::PARASITISM);
            $criteria->addSelectColumn(EcologyPeer::SOLITARY);
            $criteria->addSelectColumn(EcologyPeer::SYMBIOSIS);
            $criteria->addSelectColumn(EcologyPeer::SYMPHORISM);
            $criteria->addSelectColumn(EcologyPeer::COMMENSALISM);
            $criteria->addSelectColumn(EcologyPeer::MUTUALISM);
            $criteria->addSelectColumn(EcologyPeer::EPIPHYTIC);
            $criteria->addSelectColumn(EcologyPeer::SCHOOLING);
            $criteria->addSelectColumn(EcologyPeer::SCHOOLINGFREQUENCY);
            $criteria->addSelectColumn(EcologyPeer::SCHOOLINGLIFESTAGE);
            $criteria->addSelectColumn(EcologyPeer::SHOALING);
            $criteria->addSelectColumn(EcologyPeer::SHOALINGFREQUENCY);
            $criteria->addSelectColumn(EcologyPeer::SHOALINGLIFESTAGE);
            $criteria->addSelectColumn(EcologyPeer::SCHOOLSHOALREF);
            $criteria->addSelectColumn(EcologyPeer::ASSOCIATIONSWITH);
            $criteria->addSelectColumn(EcologyPeer::ASSOCIATIONSREMARKS);
            $criteria->addSelectColumn(EcologyPeer::OUTSIDEHOST);
            $criteria->addSelectColumn(EcologyPeer::OHREMARKS);
            $criteria->addSelectColumn(EcologyPeer::INSIDEHOST);
            $criteria->addSelectColumn(EcologyPeer::IHREMARKS);
            $criteria->addSelectColumn(EcologyPeer::SUBSTRATEREF);
            $criteria->addSelectColumn(EcologyPeer::BENTHIC);
            $criteria->addSelectColumn(EcologyPeer::SESSILE);
            $criteria->addSelectColumn(EcologyPeer::MOBILE);
            $criteria->addSelectColumn(EcologyPeer::DEMERSAL);
            $criteria->addSelectColumn(EcologyPeer::ENDOFAUNA);
            $criteria->addSelectColumn(EcologyPeer::PELAGIC);
            $criteria->addSelectColumn(EcologyPeer::MEGABENTHOS);
            $criteria->addSelectColumn(EcologyPeer::MACROBENTHOS);
            $criteria->addSelectColumn(EcologyPeer::MEIOBENTHOS);
            $criteria->addSelectColumn(EcologyPeer::SOFTBOTTOM);
            $criteria->addSelectColumn(EcologyPeer::SAND);
            $criteria->addSelectColumn(EcologyPeer::COARSE);
            $criteria->addSelectColumn(EcologyPeer::FINE);
            $criteria->addSelectColumn(EcologyPeer::LEVEL);
            $criteria->addSelectColumn(EcologyPeer::SLOPING);
            $criteria->addSelectColumn(EcologyPeer::SILT);
            $criteria->addSelectColumn(EcologyPeer::MUD);
            $criteria->addSelectColumn(EcologyPeer::OOZE);
            $criteria->addSelectColumn(EcologyPeer::DETRITUS);
            $criteria->addSelectColumn(EcologyPeer::ORGANIC);
            $criteria->addSelectColumn(EcologyPeer::HARDBOTTOM);
            $criteria->addSelectColumn(EcologyPeer::ROCKY);
            $criteria->addSelectColumn(EcologyPeer::RUBBLE);
            $criteria->addSelectColumn(EcologyPeer::SPECIALHABITATREF);
            $criteria->addSelectColumn(EcologyPeer::MACROPHYTE);
            $criteria->addSelectColumn(EcologyPeer::BEDSBIVALVE);
            $criteria->addSelectColumn(EcologyPeer::BEDSROCK);
            $criteria->addSelectColumn(EcologyPeer::SEAGRASSBEDS);
            $criteria->addSelectColumn(EcologyPeer::BEDSOTHERS);
            $criteria->addSelectColumn(EcologyPeer::CORALREEFS);
            $criteria->addSelectColumn(EcologyPeer::REEFEXCLUSIVE);
            $criteria->addSelectColumn(EcologyPeer::DROPOFFS);
            $criteria->addSelectColumn(EcologyPeer::REEFFLATS);
            $criteria->addSelectColumn(EcologyPeer::LAGOONS);
            $criteria->addSelectColumn(EcologyPeer::BURROWS);
            $criteria->addSelectColumn(EcologyPeer::TUNNELS);
            $criteria->addSelectColumn(EcologyPeer::CREVICES);
            $criteria->addSelectColumn(EcologyPeer::VENTS);
            $criteria->addSelectColumn(EcologyPeer::SEAMOUNTS);
            $criteria->addSelectColumn(EcologyPeer::DEEPWATERCORALS);
            $criteria->addSelectColumn(EcologyPeer::VEGETATION);
            $criteria->addSelectColumn(EcologyPeer::LEAVES);
            $criteria->addSelectColumn(EcologyPeer::STEMS);
            $criteria->addSelectColumn(EcologyPeer::ROOTS);
            $criteria->addSelectColumn(EcologyPeer::DRIFTWOOD);
            $criteria->addSelectColumn(EcologyPeer::OINVERTERBRATES);
            $criteria->addSelectColumn(EcologyPeer::OIREMARKS);
            $criteria->addSelectColumn(EcologyPeer::VERTERBRATES);
            $criteria->addSelectColumn(EcologyPeer::VREMARKS);
            $criteria->addSelectColumn(EcologyPeer::PILINGS);
            $criteria->addSelectColumn(EcologyPeer::BOATHULLS);
            $criteria->addSelectColumn(EcologyPeer::CORALS);
            $criteria->addSelectColumn(EcologyPeer::SOFTCORALS);
            $criteria->addSelectColumn(EcologyPeer::ONPOLYP);
            $criteria->addSelectColumn(EcologyPeer::BETWEENPOLYPS);
            $criteria->addSelectColumn(EcologyPeer::HARDCORALS);
            $criteria->addSelectColumn(EcologyPeer::ONEXOSKELETON);
            $criteria->addSelectColumn(EcologyPeer::INTERSTITIALSPACES);
            $criteria->addSelectColumn(EcologyPeer::ENTERED);
            $criteria->addSelectColumn(EcologyPeer::DATEENTERED);
            $criteria->addSelectColumn(EcologyPeer::MODIFIED);
            $criteria->addSelectColumn(EcologyPeer::DATEMODIFIED);
            $criteria->addSelectColumn(EcologyPeer::EXPERT);
            $criteria->addSelectColumn(EcologyPeer::DATECHECKED);
            $criteria->addSelectColumn(EcologyPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.EcologyRefNo');
            $criteria->addSelectColumn($alias . '.HabitatsRef');
            $criteria->addSelectColumn($alias . '.Neritic');
            $criteria->addSelectColumn($alias . '.SupraLittoralZone');
            $criteria->addSelectColumn($alias . '.Saltmarshes');
            $criteria->addSelectColumn($alias . '.LittoralZone');
            $criteria->addSelectColumn($alias . '.TidePools');
            $criteria->addSelectColumn($alias . '.Intertidal');
            $criteria->addSelectColumn($alias . '.SubLittoral');
            $criteria->addSelectColumn($alias . '.Caves');
            $criteria->addSelectColumn($alias . '.Oceanic');
            $criteria->addSelectColumn($alias . '.Epipelagic');
            $criteria->addSelectColumn($alias . '.Mesopelagic');
            $criteria->addSelectColumn($alias . '.Bathypelagic');
            $criteria->addSelectColumn($alias . '.Abyssopelagic');
            $criteria->addSelectColumn($alias . '.Hadopelagic');
            $criteria->addSelectColumn($alias . '.Estuaries');
            $criteria->addSelectColumn($alias . '.Mangroves');
            $criteria->addSelectColumn($alias . '.MarshesSwamps');
            $criteria->addSelectColumn($alias . '.CaveAnchialine');
            $criteria->addSelectColumn($alias . '.Stream');
            $criteria->addSelectColumn($alias . '.Lakes');
            $criteria->addSelectColumn($alias . '.Cave');
            $criteria->addSelectColumn($alias . '.Cave2');
            $criteria->addSelectColumn($alias . '.Herbivory2');
            $criteria->addSelectColumn($alias . '.HerbivoryRef');
            $criteria->addSelectColumn($alias . '.FeedingType');
            $criteria->addSelectColumn($alias . '.FeedingTypeRef');
            $criteria->addSelectColumn($alias . '.DietTroph');
            $criteria->addSelectColumn($alias . '.DietSeTroph');
            $criteria->addSelectColumn($alias . '.DietTLu');
            $criteria->addSelectColumn($alias . '.DietseTLu');
            $criteria->addSelectColumn($alias . '.DietRemark');
            $criteria->addSelectColumn($alias . '.DietRef');
            $criteria->addSelectColumn($alias . '.FoodTroph');
            $criteria->addSelectColumn($alias . '.FoodSeTroph');
            $criteria->addSelectColumn($alias . '.FoodRemark');
            $criteria->addSelectColumn($alias . '.FoodRef');
            $criteria->addSelectColumn($alias . '.AddRems');
            $criteria->addSelectColumn($alias . '.AssociationRef');
            $criteria->addSelectColumn($alias . '.Parasitism');
            $criteria->addSelectColumn($alias . '.Solitary');
            $criteria->addSelectColumn($alias . '.Symbiosis');
            $criteria->addSelectColumn($alias . '.Symphorism');
            $criteria->addSelectColumn($alias . '.Commensalism');
            $criteria->addSelectColumn($alias . '.Mutualism');
            $criteria->addSelectColumn($alias . '.Epiphytic');
            $criteria->addSelectColumn($alias . '.Schooling');
            $criteria->addSelectColumn($alias . '.SchoolingFrequency');
            $criteria->addSelectColumn($alias . '.SchoolingLifestage');
            $criteria->addSelectColumn($alias . '.Shoaling');
            $criteria->addSelectColumn($alias . '.ShoalingFrequency');
            $criteria->addSelectColumn($alias . '.ShoalingLifestage');
            $criteria->addSelectColumn($alias . '.SchoolShoalRef');
            $criteria->addSelectColumn($alias . '.AssociationsWith');
            $criteria->addSelectColumn($alias . '.AssociationsRemarks');
            $criteria->addSelectColumn($alias . '.OutsideHost');
            $criteria->addSelectColumn($alias . '.OHRemarks');
            $criteria->addSelectColumn($alias . '.InsideHost');
            $criteria->addSelectColumn($alias . '.IHRemarks');
            $criteria->addSelectColumn($alias . '.SubstrateRef');
            $criteria->addSelectColumn($alias . '.Benthic');
            $criteria->addSelectColumn($alias . '.Sessile');
            $criteria->addSelectColumn($alias . '.Mobile');
            $criteria->addSelectColumn($alias . '.Demersal');
            $criteria->addSelectColumn($alias . '.Endofauna');
            $criteria->addSelectColumn($alias . '.Pelagic');
            $criteria->addSelectColumn($alias . '.Megabenthos');
            $criteria->addSelectColumn($alias . '.Macrobenthos');
            $criteria->addSelectColumn($alias . '.Meiobenthos');
            $criteria->addSelectColumn($alias . '.SoftBottom');
            $criteria->addSelectColumn($alias . '.Sand');
            $criteria->addSelectColumn($alias . '.Coarse');
            $criteria->addSelectColumn($alias . '.Fine');
            $criteria->addSelectColumn($alias . '.Level');
            $criteria->addSelectColumn($alias . '.Sloping');
            $criteria->addSelectColumn($alias . '.Silt');
            $criteria->addSelectColumn($alias . '.Mud');
            $criteria->addSelectColumn($alias . '.Ooze');
            $criteria->addSelectColumn($alias . '.Detritus');
            $criteria->addSelectColumn($alias . '.Organic');
            $criteria->addSelectColumn($alias . '.HardBottom');
            $criteria->addSelectColumn($alias . '.Rocky');
            $criteria->addSelectColumn($alias . '.Rubble');
            $criteria->addSelectColumn($alias . '.SpecialHabitatRef');
            $criteria->addSelectColumn($alias . '.Macrophyte');
            $criteria->addSelectColumn($alias . '.BedsBivalve');
            $criteria->addSelectColumn($alias . '.BedsRock');
            $criteria->addSelectColumn($alias . '.SeaGrassBeds');
            $criteria->addSelectColumn($alias . '.BedsOthers');
            $criteria->addSelectColumn($alias . '.CoralReefs');
            $criteria->addSelectColumn($alias . '.ReefExclusive');
            $criteria->addSelectColumn($alias . '.DropOffs');
            $criteria->addSelectColumn($alias . '.ReefFlats');
            $criteria->addSelectColumn($alias . '.Lagoons');
            $criteria->addSelectColumn($alias . '.Burrows');
            $criteria->addSelectColumn($alias . '.Tunnels');
            $criteria->addSelectColumn($alias . '.Crevices');
            $criteria->addSelectColumn($alias . '.Vents');
            $criteria->addSelectColumn($alias . '.Seamounts');
            $criteria->addSelectColumn($alias . '.DeepWaterCorals');
            $criteria->addSelectColumn($alias . '.Vegetation');
            $criteria->addSelectColumn($alias . '.Leaves');
            $criteria->addSelectColumn($alias . '.Stems');
            $criteria->addSelectColumn($alias . '.Roots');
            $criteria->addSelectColumn($alias . '.Driftwood');
            $criteria->addSelectColumn($alias . '.OInverterbrates');
            $criteria->addSelectColumn($alias . '.OIRemarks');
            $criteria->addSelectColumn($alias . '.Verterbrates');
            $criteria->addSelectColumn($alias . '.VRemarks');
            $criteria->addSelectColumn($alias . '.Pilings');
            $criteria->addSelectColumn($alias . '.BoatHulls');
            $criteria->addSelectColumn($alias . '.Corals');
            $criteria->addSelectColumn($alias . '.SoftCorals');
            $criteria->addSelectColumn($alias . '.OnPolyp');
            $criteria->addSelectColumn($alias . '.BetweenPolyps');
            $criteria->addSelectColumn($alias . '.HardCorals');
            $criteria->addSelectColumn($alias . '.OnExoskeleton');
            $criteria->addSelectColumn($alias . '.InterstitialSpaces');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.Dateentered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.Datemodified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.Datechecked');
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
        $criteria->setPrimaryTableName(EcologyPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EcologyPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EcologyPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EcologyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Ecology
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EcologyPeer::doSelect($critcopy, $con);
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
        return EcologyPeer::populateObjects(EcologyPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(EcologyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EcologyPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EcologyPeer::DATABASE_NAME);

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
     * @param Ecology $obj A Ecology object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getStockcode();
            } // if key === null
            EcologyPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Ecology object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Ecology) {
                $key = (string) $value->getStockcode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Ecology object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EcologyPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Ecology Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EcologyPeer::$instances[$key])) {
                return EcologyPeer::$instances[$key];
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
        foreach (EcologyPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        EcologyPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to ecology
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
        if ($row[$startcol + 2] === null) {
            return null;
        }

        return (string) $row[$startcol + 2];
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

        return (int) $row[$startcol + 2];
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
        $cls = EcologyPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EcologyPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EcologyPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EcologyPeer::addInstanceToPool($obj, $key);
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
     * @return array (Ecology object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EcologyPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EcologyPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EcologyPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EcologyPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EcologyPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(EcologyPeer::DATABASE_NAME)->getTable(EcologyPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEcologyPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEcologyPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \EcologyTableMap());
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
        return EcologyPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Ecology or Criteria object.
     *
     * @param      mixed $values Criteria or Ecology object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EcologyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Ecology object
        }


        // Set the correct dbName
        $criteria->setDbName(EcologyPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Ecology or Criteria object.
     *
     * @param      mixed $values Criteria or Ecology object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EcologyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EcologyPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EcologyPeer::STOCKCODE);
            $value = $criteria->remove(EcologyPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(EcologyPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EcologyPeer::TABLE_NAME);
            }

        } else { // $values is Ecology object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EcologyPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ecology table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EcologyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(EcologyPeer::TABLE_NAME, $con, EcologyPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EcologyPeer::clearInstancePool();
            EcologyPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Ecology or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Ecology object or primary key or array of primary keys
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
            $con = Propel::getConnection(EcologyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            EcologyPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Ecology) { // it's a model object
            // invalidate the cache for this single object
            EcologyPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EcologyPeer::DATABASE_NAME);
            $criteria->add(EcologyPeer::STOCKCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                EcologyPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(EcologyPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            EcologyPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Ecology object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Ecology $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EcologyPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EcologyPeer::TABLE_NAME);

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

        return BasePeer::doValidate(EcologyPeer::DATABASE_NAME, EcologyPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Ecology
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = EcologyPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EcologyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(EcologyPeer::DATABASE_NAME);
        $criteria->add(EcologyPeer::STOCKCODE, $pk);

        $v = EcologyPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Ecology[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EcologyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(EcologyPeer::DATABASE_NAME);
            $criteria->add(EcologyPeer::STOCKCODE, $pks, Criteria::IN);
            $objs = EcologyPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseEcologyPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEcologyPeer::buildTableMap();

