<?php


/**
 * Base static class for performing query and update operations on the 'fubh' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseFubhPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'fubh';

    /** the related Propel class for this table */
    const OM_CLASS = 'Fubh';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FubhTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 74;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 74;

    /** the column name for the print_date_bySkit field */
    const PRINT_DATE_BYSKIT = 'fubh.print_date_bySkit';

    /** the column name for the active field */
    const ACTIVE = 'fubh.active';

    /** the column name for the Period field */
    const PERIOD = 'fubh.Period';

    /** the column name for the extant_finfish_1 field */
    const EXTANT_FINFISH_1 = 'fubh.extant_finfish_1';

    /** the column name for the extant_finfish_2 field */
    const EXTANT_FINFISH_2 = 'fubh.extant_finfish_2';

    /** the column name for the extant_finfish_3 field */
    const EXTANT_FINFISH_3 = 'fubh.extant_finfish_3';

    /** the column name for the extant_finfish_4 field */
    const EXTANT_FINFISH_4 = 'fubh.extant_finfish_4';

    /** the column name for the extant_finfish_5 field */
    const EXTANT_FINFISH_5 = 'fubh.extant_finfish_5';

    /** the column name for the used_fisheries_1 field */
    const USED_FISHERIES_1 = 'fubh.used_fisheries_1';

    /** the column name for the used_fisheries_2 field */
    const USED_FISHERIES_2 = 'fubh.used_fisheries_2';

    /** the column name for the used_fisheries_3 field */
    const USED_FISHERIES_3 = 'fubh.used_fisheries_3';

    /** the column name for the used_fisheries_4 field */
    const USED_FISHERIES_4 = 'fubh.used_fisheries_4';

    /** the column name for the used_fisheries_5 field */
    const USED_FISHERIES_5 = 'fubh.used_fisheries_5';

    /** the column name for the used_aquac_1 field */
    const USED_AQUAC_1 = 'fubh.used_aquac_1';

    /** the column name for the used_aquac_2 field */
    const USED_AQUAC_2 = 'fubh.used_aquac_2';

    /** the column name for the used_aquac_3 field */
    const USED_AQUAC_3 = 'fubh.used_aquac_3';

    /** the column name for the used_aquac_4 field */
    const USED_AQUAC_4 = 'fubh.used_aquac_4';

    /** the column name for the used_aquac_5 field */
    const USED_AQUAC_5 = 'fubh.used_aquac_5';

    /** the column name for the used_bait_1 field */
    const USED_BAIT_1 = 'fubh.used_bait_1';

    /** the column name for the used_bait_2 field */
    const USED_BAIT_2 = 'fubh.used_bait_2';

    /** the column name for the used_bait_3 field */
    const USED_BAIT_3 = 'fubh.used_bait_3';

    /** the column name for the used_bait_4 field */
    const USED_BAIT_4 = 'fubh.used_bait_4';

    /** the column name for the used_bait_5 field */
    const USED_BAIT_5 = 'fubh.used_bait_5';

    /** the column name for the used_trade_1 field */
    const USED_TRADE_1 = 'fubh.used_trade_1';

    /** the column name for the used_trade_2 field */
    const USED_TRADE_2 = 'fubh.used_trade_2';

    /** the column name for the used_trade_3 field */
    const USED_TRADE_3 = 'fubh.used_trade_3';

    /** the column name for the used_trade_4 field */
    const USED_TRADE_4 = 'fubh.used_trade_4';

    /** the column name for the used_trade_5 field */
    const USED_TRADE_5 = 'fubh.used_trade_5';

    /** the column name for the trade_marine_1 field */
    const TRADE_MARINE_1 = 'fubh.trade_marine_1';

    /** the column name for the trade_marine_2 field */
    const TRADE_MARINE_2 = 'fubh.trade_marine_2';

    /** the column name for the trade_marine_3 field */
    const TRADE_MARINE_3 = 'fubh.trade_marine_3';

    /** the column name for the trade_marine_4 field */
    const TRADE_MARINE_4 = 'fubh.trade_marine_4';

    /** the column name for the trade_marine_5 field */
    const TRADE_MARINE_5 = 'fubh.trade_marine_5';

    /** the column name for the trade_fresh_1 field */
    const TRADE_FRESH_1 = 'fubh.trade_fresh_1';

    /** the column name for the trade_fresh_2 field */
    const TRADE_FRESH_2 = 'fubh.trade_fresh_2';

    /** the column name for the trade_fresh_3 field */
    const TRADE_FRESH_3 = 'fubh.trade_fresh_3';

    /** the column name for the trade_fresh_4 field */
    const TRADE_FRESH_4 = 'fubh.trade_fresh_4';

    /** the column name for the trade_fresh_5 field */
    const TRADE_FRESH_5 = 'fubh.trade_fresh_5';

    /** the column name for the trade_bred_1 field */
    const TRADE_BRED_1 = 'fubh.trade_bred_1';

    /** the column name for the trade_bred_2 field */
    const TRADE_BRED_2 = 'fubh.trade_bred_2';

    /** the column name for the trade_bred_3 field */
    const TRADE_BRED_3 = 'fubh.trade_bred_3';

    /** the column name for the trade_bred_4 field */
    const TRADE_BRED_4 = 'fubh.trade_bred_4';

    /** the column name for the trade_bred_5 field */
    const TRADE_BRED_5 = 'fubh.trade_bred_5';

    /** the column name for the used_sport_1 field */
    const USED_SPORT_1 = 'fubh.used_sport_1';

    /** the column name for the used_sport_2 field */
    const USED_SPORT_2 = 'fubh.used_sport_2';

    /** the column name for the used_sport_3 field */
    const USED_SPORT_3 = 'fubh.used_sport_3';

    /** the column name for the used_sport_4 field */
    const USED_SPORT_4 = 'fubh.used_sport_4';

    /** the column name for the used_sport_5 field */
    const USED_SPORT_5 = 'fubh.used_sport_5';

    /** the column name for the tot_used_1 field */
    const TOT_USED_1 = 'fubh.tot_used_1';

    /** the column name for the tot_used_2 field */
    const TOT_USED_2 = 'fubh.tot_used_2';

    /** the column name for the tot_used_3 field */
    const TOT_USED_3 = 'fubh.tot_used_3';

    /** the column name for the tot_used_4 field */
    const TOT_USED_4 = 'fubh.tot_used_4';

    /** the column name for the tot_used_5 field */
    const TOT_USED_5 = 'fubh.tot_used_5';

    /** the column name for the threat_1 field */
    const THREAT_1 = 'fubh.threat_1';

    /** the column name for the threat_2 field */
    const THREAT_2 = 'fubh.threat_2';

    /** the column name for the threat_3 field */
    const THREAT_3 = 'fubh.threat_3';

    /** the column name for the threat_4 field */
    const THREAT_4 = 'fubh.threat_4';

    /** the column name for the threat_5 field */
    const THREAT_5 = 'fubh.threat_5';

    /** the column name for the intro_1 field */
    const INTRO_1 = 'fubh.intro_1';

    /** the column name for the intro_2 field */
    const INTRO_2 = 'fubh.intro_2';

    /** the column name for the intro_3 field */
    const INTRO_3 = 'fubh.intro_3';

    /** the column name for the intro_4 field */
    const INTRO_4 = 'fubh.intro_4';

    /** the column name for the intro_5 field */
    const INTRO_5 = 'fubh.intro_5';

    /** the column name for the danger_1 field */
    const DANGER_1 = 'fubh.danger_1';

    /** the column name for the danger_2 field */
    const DANGER_2 = 'fubh.danger_2';

    /** the column name for the danger_3 field */
    const DANGER_3 = 'fubh.danger_3';

    /** the column name for the danger_4 field */
    const DANGER_4 = 'fubh.danger_4';

    /** the column name for the danger_5 field */
    const DANGER_5 = 'fubh.danger_5';

    /** the column name for the note field */
    const NOTE = 'fubh.note';

    /** the column name for the no_species field */
    const NO_SPECIES = 'fubh.no_species';

    /** the column name for the no_fresh field */
    const NO_FRESH = 'fubh.no_fresh';

    /** the column name for the no_marine field */
    const NO_MARINE = 'fubh.no_marine';

    /** the column name for the no_brackish field */
    const NO_BRACKISH = 'fubh.no_brackish';

    /** the column name for the TS field */
    const TS = 'fubh.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Fubh objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Fubh[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FubhPeer::$fieldNames[FubhPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('PrintDateByskit', 'Active', 'Period', 'ExtantFinfish1', 'ExtantFinfish2', 'ExtantFinfish3', 'ExtantFinfish4', 'ExtantFinfish5', 'UsedFisheries1', 'UsedFisheries2', 'UsedFisheries3', 'UsedFisheries4', 'UsedFisheries5', 'UsedAquac1', 'UsedAquac2', 'UsedAquac3', 'UsedAquac4', 'UsedAquac5', 'UsedBait1', 'UsedBait2', 'UsedBait3', 'UsedBait4', 'UsedBait5', 'UsedTrade1', 'UsedTrade2', 'UsedTrade3', 'UsedTrade4', 'UsedTrade5', 'TradeMarine1', 'TradeMarine2', 'TradeMarine3', 'TradeMarine4', 'TradeMarine5', 'TradeFresh1', 'TradeFresh2', 'TradeFresh3', 'TradeFresh4', 'TradeFresh5', 'TradeBred1', 'TradeBred2', 'TradeBred3', 'TradeBred4', 'TradeBred5', 'UsedSport1', 'UsedSport2', 'UsedSport3', 'UsedSport4', 'UsedSport5', 'TotUsed1', 'TotUsed2', 'TotUsed3', 'TotUsed4', 'TotUsed5', 'Threat1', 'Threat2', 'Threat3', 'Threat4', 'Threat5', 'Intro1', 'Intro2', 'Intro3', 'Intro4', 'Intro5', 'Danger1', 'Danger2', 'Danger3', 'Danger4', 'Danger5', 'Note', 'NoSpecies', 'NoFresh', 'NoMarine', 'NoBrackish', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('printDateByskit', 'active', 'period', 'extantFinfish1', 'extantFinfish2', 'extantFinfish3', 'extantFinfish4', 'extantFinfish5', 'usedFisheries1', 'usedFisheries2', 'usedFisheries3', 'usedFisheries4', 'usedFisheries5', 'usedAquac1', 'usedAquac2', 'usedAquac3', 'usedAquac4', 'usedAquac5', 'usedBait1', 'usedBait2', 'usedBait3', 'usedBait4', 'usedBait5', 'usedTrade1', 'usedTrade2', 'usedTrade3', 'usedTrade4', 'usedTrade5', 'tradeMarine1', 'tradeMarine2', 'tradeMarine3', 'tradeMarine4', 'tradeMarine5', 'tradeFresh1', 'tradeFresh2', 'tradeFresh3', 'tradeFresh4', 'tradeFresh5', 'tradeBred1', 'tradeBred2', 'tradeBred3', 'tradeBred4', 'tradeBred5', 'usedSport1', 'usedSport2', 'usedSport3', 'usedSport4', 'usedSport5', 'totUsed1', 'totUsed2', 'totUsed3', 'totUsed4', 'totUsed5', 'threat1', 'threat2', 'threat3', 'threat4', 'threat5', 'intro1', 'intro2', 'intro3', 'intro4', 'intro5', 'danger1', 'danger2', 'danger3', 'danger4', 'danger5', 'note', 'noSpecies', 'noFresh', 'noMarine', 'noBrackish', 'ts', ),
        BasePeer::TYPE_COLNAME => array (FubhPeer::PRINT_DATE_BYSKIT, FubhPeer::ACTIVE, FubhPeer::PERIOD, FubhPeer::EXTANT_FINFISH_1, FubhPeer::EXTANT_FINFISH_2, FubhPeer::EXTANT_FINFISH_3, FubhPeer::EXTANT_FINFISH_4, FubhPeer::EXTANT_FINFISH_5, FubhPeer::USED_FISHERIES_1, FubhPeer::USED_FISHERIES_2, FubhPeer::USED_FISHERIES_3, FubhPeer::USED_FISHERIES_4, FubhPeer::USED_FISHERIES_5, FubhPeer::USED_AQUAC_1, FubhPeer::USED_AQUAC_2, FubhPeer::USED_AQUAC_3, FubhPeer::USED_AQUAC_4, FubhPeer::USED_AQUAC_5, FubhPeer::USED_BAIT_1, FubhPeer::USED_BAIT_2, FubhPeer::USED_BAIT_3, FubhPeer::USED_BAIT_4, FubhPeer::USED_BAIT_5, FubhPeer::USED_TRADE_1, FubhPeer::USED_TRADE_2, FubhPeer::USED_TRADE_3, FubhPeer::USED_TRADE_4, FubhPeer::USED_TRADE_5, FubhPeer::TRADE_MARINE_1, FubhPeer::TRADE_MARINE_2, FubhPeer::TRADE_MARINE_3, FubhPeer::TRADE_MARINE_4, FubhPeer::TRADE_MARINE_5, FubhPeer::TRADE_FRESH_1, FubhPeer::TRADE_FRESH_2, FubhPeer::TRADE_FRESH_3, FubhPeer::TRADE_FRESH_4, FubhPeer::TRADE_FRESH_5, FubhPeer::TRADE_BRED_1, FubhPeer::TRADE_BRED_2, FubhPeer::TRADE_BRED_3, FubhPeer::TRADE_BRED_4, FubhPeer::TRADE_BRED_5, FubhPeer::USED_SPORT_1, FubhPeer::USED_SPORT_2, FubhPeer::USED_SPORT_3, FubhPeer::USED_SPORT_4, FubhPeer::USED_SPORT_5, FubhPeer::TOT_USED_1, FubhPeer::TOT_USED_2, FubhPeer::TOT_USED_3, FubhPeer::TOT_USED_4, FubhPeer::TOT_USED_5, FubhPeer::THREAT_1, FubhPeer::THREAT_2, FubhPeer::THREAT_3, FubhPeer::THREAT_4, FubhPeer::THREAT_5, FubhPeer::INTRO_1, FubhPeer::INTRO_2, FubhPeer::INTRO_3, FubhPeer::INTRO_4, FubhPeer::INTRO_5, FubhPeer::DANGER_1, FubhPeer::DANGER_2, FubhPeer::DANGER_3, FubhPeer::DANGER_4, FubhPeer::DANGER_5, FubhPeer::NOTE, FubhPeer::NO_SPECIES, FubhPeer::NO_FRESH, FubhPeer::NO_MARINE, FubhPeer::NO_BRACKISH, FubhPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PRINT_DATE_BYSKIT', 'ACTIVE', 'PERIOD', 'EXTANT_FINFISH_1', 'EXTANT_FINFISH_2', 'EXTANT_FINFISH_3', 'EXTANT_FINFISH_4', 'EXTANT_FINFISH_5', 'USED_FISHERIES_1', 'USED_FISHERIES_2', 'USED_FISHERIES_3', 'USED_FISHERIES_4', 'USED_FISHERIES_5', 'USED_AQUAC_1', 'USED_AQUAC_2', 'USED_AQUAC_3', 'USED_AQUAC_4', 'USED_AQUAC_5', 'USED_BAIT_1', 'USED_BAIT_2', 'USED_BAIT_3', 'USED_BAIT_4', 'USED_BAIT_5', 'USED_TRADE_1', 'USED_TRADE_2', 'USED_TRADE_3', 'USED_TRADE_4', 'USED_TRADE_5', 'TRADE_MARINE_1', 'TRADE_MARINE_2', 'TRADE_MARINE_3', 'TRADE_MARINE_4', 'TRADE_MARINE_5', 'TRADE_FRESH_1', 'TRADE_FRESH_2', 'TRADE_FRESH_3', 'TRADE_FRESH_4', 'TRADE_FRESH_5', 'TRADE_BRED_1', 'TRADE_BRED_2', 'TRADE_BRED_3', 'TRADE_BRED_4', 'TRADE_BRED_5', 'USED_SPORT_1', 'USED_SPORT_2', 'USED_SPORT_3', 'USED_SPORT_4', 'USED_SPORT_5', 'TOT_USED_1', 'TOT_USED_2', 'TOT_USED_3', 'TOT_USED_4', 'TOT_USED_5', 'THREAT_1', 'THREAT_2', 'THREAT_3', 'THREAT_4', 'THREAT_5', 'INTRO_1', 'INTRO_2', 'INTRO_3', 'INTRO_4', 'INTRO_5', 'DANGER_1', 'DANGER_2', 'DANGER_3', 'DANGER_4', 'DANGER_5', 'NOTE', 'NO_SPECIES', 'NO_FRESH', 'NO_MARINE', 'NO_BRACKISH', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('print_date_bySkit', 'active', 'Period', 'extant_finfish_1', 'extant_finfish_2', 'extant_finfish_3', 'extant_finfish_4', 'extant_finfish_5', 'used_fisheries_1', 'used_fisheries_2', 'used_fisheries_3', 'used_fisheries_4', 'used_fisheries_5', 'used_aquac_1', 'used_aquac_2', 'used_aquac_3', 'used_aquac_4', 'used_aquac_5', 'used_bait_1', 'used_bait_2', 'used_bait_3', 'used_bait_4', 'used_bait_5', 'used_trade_1', 'used_trade_2', 'used_trade_3', 'used_trade_4', 'used_trade_5', 'trade_marine_1', 'trade_marine_2', 'trade_marine_3', 'trade_marine_4', 'trade_marine_5', 'trade_fresh_1', 'trade_fresh_2', 'trade_fresh_3', 'trade_fresh_4', 'trade_fresh_5', 'trade_bred_1', 'trade_bred_2', 'trade_bred_3', 'trade_bred_4', 'trade_bred_5', 'used_sport_1', 'used_sport_2', 'used_sport_3', 'used_sport_4', 'used_sport_5', 'tot_used_1', 'tot_used_2', 'tot_used_3', 'tot_used_4', 'tot_used_5', 'threat_1', 'threat_2', 'threat_3', 'threat_4', 'threat_5', 'intro_1', 'intro_2', 'intro_3', 'intro_4', 'intro_5', 'danger_1', 'danger_2', 'danger_3', 'danger_4', 'danger_5', 'note', 'no_species', 'no_fresh', 'no_marine', 'no_brackish', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FubhPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('PrintDateByskit' => 0, 'Active' => 1, 'Period' => 2, 'ExtantFinfish1' => 3, 'ExtantFinfish2' => 4, 'ExtantFinfish3' => 5, 'ExtantFinfish4' => 6, 'ExtantFinfish5' => 7, 'UsedFisheries1' => 8, 'UsedFisheries2' => 9, 'UsedFisheries3' => 10, 'UsedFisheries4' => 11, 'UsedFisheries5' => 12, 'UsedAquac1' => 13, 'UsedAquac2' => 14, 'UsedAquac3' => 15, 'UsedAquac4' => 16, 'UsedAquac5' => 17, 'UsedBait1' => 18, 'UsedBait2' => 19, 'UsedBait3' => 20, 'UsedBait4' => 21, 'UsedBait5' => 22, 'UsedTrade1' => 23, 'UsedTrade2' => 24, 'UsedTrade3' => 25, 'UsedTrade4' => 26, 'UsedTrade5' => 27, 'TradeMarine1' => 28, 'TradeMarine2' => 29, 'TradeMarine3' => 30, 'TradeMarine4' => 31, 'TradeMarine5' => 32, 'TradeFresh1' => 33, 'TradeFresh2' => 34, 'TradeFresh3' => 35, 'TradeFresh4' => 36, 'TradeFresh5' => 37, 'TradeBred1' => 38, 'TradeBred2' => 39, 'TradeBred3' => 40, 'TradeBred4' => 41, 'TradeBred5' => 42, 'UsedSport1' => 43, 'UsedSport2' => 44, 'UsedSport3' => 45, 'UsedSport4' => 46, 'UsedSport5' => 47, 'TotUsed1' => 48, 'TotUsed2' => 49, 'TotUsed3' => 50, 'TotUsed4' => 51, 'TotUsed5' => 52, 'Threat1' => 53, 'Threat2' => 54, 'Threat3' => 55, 'Threat4' => 56, 'Threat5' => 57, 'Intro1' => 58, 'Intro2' => 59, 'Intro3' => 60, 'Intro4' => 61, 'Intro5' => 62, 'Danger1' => 63, 'Danger2' => 64, 'Danger3' => 65, 'Danger4' => 66, 'Danger5' => 67, 'Note' => 68, 'NoSpecies' => 69, 'NoFresh' => 70, 'NoMarine' => 71, 'NoBrackish' => 72, 'Ts' => 73, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('printDateByskit' => 0, 'active' => 1, 'period' => 2, 'extantFinfish1' => 3, 'extantFinfish2' => 4, 'extantFinfish3' => 5, 'extantFinfish4' => 6, 'extantFinfish5' => 7, 'usedFisheries1' => 8, 'usedFisheries2' => 9, 'usedFisheries3' => 10, 'usedFisheries4' => 11, 'usedFisheries5' => 12, 'usedAquac1' => 13, 'usedAquac2' => 14, 'usedAquac3' => 15, 'usedAquac4' => 16, 'usedAquac5' => 17, 'usedBait1' => 18, 'usedBait2' => 19, 'usedBait3' => 20, 'usedBait4' => 21, 'usedBait5' => 22, 'usedTrade1' => 23, 'usedTrade2' => 24, 'usedTrade3' => 25, 'usedTrade4' => 26, 'usedTrade5' => 27, 'tradeMarine1' => 28, 'tradeMarine2' => 29, 'tradeMarine3' => 30, 'tradeMarine4' => 31, 'tradeMarine5' => 32, 'tradeFresh1' => 33, 'tradeFresh2' => 34, 'tradeFresh3' => 35, 'tradeFresh4' => 36, 'tradeFresh5' => 37, 'tradeBred1' => 38, 'tradeBred2' => 39, 'tradeBred3' => 40, 'tradeBred4' => 41, 'tradeBred5' => 42, 'usedSport1' => 43, 'usedSport2' => 44, 'usedSport3' => 45, 'usedSport4' => 46, 'usedSport5' => 47, 'totUsed1' => 48, 'totUsed2' => 49, 'totUsed3' => 50, 'totUsed4' => 51, 'totUsed5' => 52, 'threat1' => 53, 'threat2' => 54, 'threat3' => 55, 'threat4' => 56, 'threat5' => 57, 'intro1' => 58, 'intro2' => 59, 'intro3' => 60, 'intro4' => 61, 'intro5' => 62, 'danger1' => 63, 'danger2' => 64, 'danger3' => 65, 'danger4' => 66, 'danger5' => 67, 'note' => 68, 'noSpecies' => 69, 'noFresh' => 70, 'noMarine' => 71, 'noBrackish' => 72, 'ts' => 73, ),
        BasePeer::TYPE_COLNAME => array (FubhPeer::PRINT_DATE_BYSKIT => 0, FubhPeer::ACTIVE => 1, FubhPeer::PERIOD => 2, FubhPeer::EXTANT_FINFISH_1 => 3, FubhPeer::EXTANT_FINFISH_2 => 4, FubhPeer::EXTANT_FINFISH_3 => 5, FubhPeer::EXTANT_FINFISH_4 => 6, FubhPeer::EXTANT_FINFISH_5 => 7, FubhPeer::USED_FISHERIES_1 => 8, FubhPeer::USED_FISHERIES_2 => 9, FubhPeer::USED_FISHERIES_3 => 10, FubhPeer::USED_FISHERIES_4 => 11, FubhPeer::USED_FISHERIES_5 => 12, FubhPeer::USED_AQUAC_1 => 13, FubhPeer::USED_AQUAC_2 => 14, FubhPeer::USED_AQUAC_3 => 15, FubhPeer::USED_AQUAC_4 => 16, FubhPeer::USED_AQUAC_5 => 17, FubhPeer::USED_BAIT_1 => 18, FubhPeer::USED_BAIT_2 => 19, FubhPeer::USED_BAIT_3 => 20, FubhPeer::USED_BAIT_4 => 21, FubhPeer::USED_BAIT_5 => 22, FubhPeer::USED_TRADE_1 => 23, FubhPeer::USED_TRADE_2 => 24, FubhPeer::USED_TRADE_3 => 25, FubhPeer::USED_TRADE_4 => 26, FubhPeer::USED_TRADE_5 => 27, FubhPeer::TRADE_MARINE_1 => 28, FubhPeer::TRADE_MARINE_2 => 29, FubhPeer::TRADE_MARINE_3 => 30, FubhPeer::TRADE_MARINE_4 => 31, FubhPeer::TRADE_MARINE_5 => 32, FubhPeer::TRADE_FRESH_1 => 33, FubhPeer::TRADE_FRESH_2 => 34, FubhPeer::TRADE_FRESH_3 => 35, FubhPeer::TRADE_FRESH_4 => 36, FubhPeer::TRADE_FRESH_5 => 37, FubhPeer::TRADE_BRED_1 => 38, FubhPeer::TRADE_BRED_2 => 39, FubhPeer::TRADE_BRED_3 => 40, FubhPeer::TRADE_BRED_4 => 41, FubhPeer::TRADE_BRED_5 => 42, FubhPeer::USED_SPORT_1 => 43, FubhPeer::USED_SPORT_2 => 44, FubhPeer::USED_SPORT_3 => 45, FubhPeer::USED_SPORT_4 => 46, FubhPeer::USED_SPORT_5 => 47, FubhPeer::TOT_USED_1 => 48, FubhPeer::TOT_USED_2 => 49, FubhPeer::TOT_USED_3 => 50, FubhPeer::TOT_USED_4 => 51, FubhPeer::TOT_USED_5 => 52, FubhPeer::THREAT_1 => 53, FubhPeer::THREAT_2 => 54, FubhPeer::THREAT_3 => 55, FubhPeer::THREAT_4 => 56, FubhPeer::THREAT_5 => 57, FubhPeer::INTRO_1 => 58, FubhPeer::INTRO_2 => 59, FubhPeer::INTRO_3 => 60, FubhPeer::INTRO_4 => 61, FubhPeer::INTRO_5 => 62, FubhPeer::DANGER_1 => 63, FubhPeer::DANGER_2 => 64, FubhPeer::DANGER_3 => 65, FubhPeer::DANGER_4 => 66, FubhPeer::DANGER_5 => 67, FubhPeer::NOTE => 68, FubhPeer::NO_SPECIES => 69, FubhPeer::NO_FRESH => 70, FubhPeer::NO_MARINE => 71, FubhPeer::NO_BRACKISH => 72, FubhPeer::TS => 73, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PRINT_DATE_BYSKIT' => 0, 'ACTIVE' => 1, 'PERIOD' => 2, 'EXTANT_FINFISH_1' => 3, 'EXTANT_FINFISH_2' => 4, 'EXTANT_FINFISH_3' => 5, 'EXTANT_FINFISH_4' => 6, 'EXTANT_FINFISH_5' => 7, 'USED_FISHERIES_1' => 8, 'USED_FISHERIES_2' => 9, 'USED_FISHERIES_3' => 10, 'USED_FISHERIES_4' => 11, 'USED_FISHERIES_5' => 12, 'USED_AQUAC_1' => 13, 'USED_AQUAC_2' => 14, 'USED_AQUAC_3' => 15, 'USED_AQUAC_4' => 16, 'USED_AQUAC_5' => 17, 'USED_BAIT_1' => 18, 'USED_BAIT_2' => 19, 'USED_BAIT_3' => 20, 'USED_BAIT_4' => 21, 'USED_BAIT_5' => 22, 'USED_TRADE_1' => 23, 'USED_TRADE_2' => 24, 'USED_TRADE_3' => 25, 'USED_TRADE_4' => 26, 'USED_TRADE_5' => 27, 'TRADE_MARINE_1' => 28, 'TRADE_MARINE_2' => 29, 'TRADE_MARINE_3' => 30, 'TRADE_MARINE_4' => 31, 'TRADE_MARINE_5' => 32, 'TRADE_FRESH_1' => 33, 'TRADE_FRESH_2' => 34, 'TRADE_FRESH_3' => 35, 'TRADE_FRESH_4' => 36, 'TRADE_FRESH_5' => 37, 'TRADE_BRED_1' => 38, 'TRADE_BRED_2' => 39, 'TRADE_BRED_3' => 40, 'TRADE_BRED_4' => 41, 'TRADE_BRED_5' => 42, 'USED_SPORT_1' => 43, 'USED_SPORT_2' => 44, 'USED_SPORT_3' => 45, 'USED_SPORT_4' => 46, 'USED_SPORT_5' => 47, 'TOT_USED_1' => 48, 'TOT_USED_2' => 49, 'TOT_USED_3' => 50, 'TOT_USED_4' => 51, 'TOT_USED_5' => 52, 'THREAT_1' => 53, 'THREAT_2' => 54, 'THREAT_3' => 55, 'THREAT_4' => 56, 'THREAT_5' => 57, 'INTRO_1' => 58, 'INTRO_2' => 59, 'INTRO_3' => 60, 'INTRO_4' => 61, 'INTRO_5' => 62, 'DANGER_1' => 63, 'DANGER_2' => 64, 'DANGER_3' => 65, 'DANGER_4' => 66, 'DANGER_5' => 67, 'NOTE' => 68, 'NO_SPECIES' => 69, 'NO_FRESH' => 70, 'NO_MARINE' => 71, 'NO_BRACKISH' => 72, 'TS' => 73, ),
        BasePeer::TYPE_FIELDNAME => array ('print_date_bySkit' => 0, 'active' => 1, 'Period' => 2, 'extant_finfish_1' => 3, 'extant_finfish_2' => 4, 'extant_finfish_3' => 5, 'extant_finfish_4' => 6, 'extant_finfish_5' => 7, 'used_fisheries_1' => 8, 'used_fisheries_2' => 9, 'used_fisheries_3' => 10, 'used_fisheries_4' => 11, 'used_fisheries_5' => 12, 'used_aquac_1' => 13, 'used_aquac_2' => 14, 'used_aquac_3' => 15, 'used_aquac_4' => 16, 'used_aquac_5' => 17, 'used_bait_1' => 18, 'used_bait_2' => 19, 'used_bait_3' => 20, 'used_bait_4' => 21, 'used_bait_5' => 22, 'used_trade_1' => 23, 'used_trade_2' => 24, 'used_trade_3' => 25, 'used_trade_4' => 26, 'used_trade_5' => 27, 'trade_marine_1' => 28, 'trade_marine_2' => 29, 'trade_marine_3' => 30, 'trade_marine_4' => 31, 'trade_marine_5' => 32, 'trade_fresh_1' => 33, 'trade_fresh_2' => 34, 'trade_fresh_3' => 35, 'trade_fresh_4' => 36, 'trade_fresh_5' => 37, 'trade_bred_1' => 38, 'trade_bred_2' => 39, 'trade_bred_3' => 40, 'trade_bred_4' => 41, 'trade_bred_5' => 42, 'used_sport_1' => 43, 'used_sport_2' => 44, 'used_sport_3' => 45, 'used_sport_4' => 46, 'used_sport_5' => 47, 'tot_used_1' => 48, 'tot_used_2' => 49, 'tot_used_3' => 50, 'tot_used_4' => 51, 'tot_used_5' => 52, 'threat_1' => 53, 'threat_2' => 54, 'threat_3' => 55, 'threat_4' => 56, 'threat_5' => 57, 'intro_1' => 58, 'intro_2' => 59, 'intro_3' => 60, 'intro_4' => 61, 'intro_5' => 62, 'danger_1' => 63, 'danger_2' => 64, 'danger_3' => 65, 'danger_4' => 66, 'danger_5' => 67, 'note' => 68, 'no_species' => 69, 'no_fresh' => 70, 'no_marine' => 71, 'no_brackish' => 72, 'TS' => 73, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, )
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
        $toNames = FubhPeer::getFieldNames($toType);
        $key = isset(FubhPeer::$fieldKeys[$fromType][$name]) ? FubhPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FubhPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, FubhPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FubhPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. FubhPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FubhPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(FubhPeer::PRINT_DATE_BYSKIT);
            $criteria->addSelectColumn(FubhPeer::ACTIVE);
            $criteria->addSelectColumn(FubhPeer::PERIOD);
            $criteria->addSelectColumn(FubhPeer::EXTANT_FINFISH_1);
            $criteria->addSelectColumn(FubhPeer::EXTANT_FINFISH_2);
            $criteria->addSelectColumn(FubhPeer::EXTANT_FINFISH_3);
            $criteria->addSelectColumn(FubhPeer::EXTANT_FINFISH_4);
            $criteria->addSelectColumn(FubhPeer::EXTANT_FINFISH_5);
            $criteria->addSelectColumn(FubhPeer::USED_FISHERIES_1);
            $criteria->addSelectColumn(FubhPeer::USED_FISHERIES_2);
            $criteria->addSelectColumn(FubhPeer::USED_FISHERIES_3);
            $criteria->addSelectColumn(FubhPeer::USED_FISHERIES_4);
            $criteria->addSelectColumn(FubhPeer::USED_FISHERIES_5);
            $criteria->addSelectColumn(FubhPeer::USED_AQUAC_1);
            $criteria->addSelectColumn(FubhPeer::USED_AQUAC_2);
            $criteria->addSelectColumn(FubhPeer::USED_AQUAC_3);
            $criteria->addSelectColumn(FubhPeer::USED_AQUAC_4);
            $criteria->addSelectColumn(FubhPeer::USED_AQUAC_5);
            $criteria->addSelectColumn(FubhPeer::USED_BAIT_1);
            $criteria->addSelectColumn(FubhPeer::USED_BAIT_2);
            $criteria->addSelectColumn(FubhPeer::USED_BAIT_3);
            $criteria->addSelectColumn(FubhPeer::USED_BAIT_4);
            $criteria->addSelectColumn(FubhPeer::USED_BAIT_5);
            $criteria->addSelectColumn(FubhPeer::USED_TRADE_1);
            $criteria->addSelectColumn(FubhPeer::USED_TRADE_2);
            $criteria->addSelectColumn(FubhPeer::USED_TRADE_3);
            $criteria->addSelectColumn(FubhPeer::USED_TRADE_4);
            $criteria->addSelectColumn(FubhPeer::USED_TRADE_5);
            $criteria->addSelectColumn(FubhPeer::TRADE_MARINE_1);
            $criteria->addSelectColumn(FubhPeer::TRADE_MARINE_2);
            $criteria->addSelectColumn(FubhPeer::TRADE_MARINE_3);
            $criteria->addSelectColumn(FubhPeer::TRADE_MARINE_4);
            $criteria->addSelectColumn(FubhPeer::TRADE_MARINE_5);
            $criteria->addSelectColumn(FubhPeer::TRADE_FRESH_1);
            $criteria->addSelectColumn(FubhPeer::TRADE_FRESH_2);
            $criteria->addSelectColumn(FubhPeer::TRADE_FRESH_3);
            $criteria->addSelectColumn(FubhPeer::TRADE_FRESH_4);
            $criteria->addSelectColumn(FubhPeer::TRADE_FRESH_5);
            $criteria->addSelectColumn(FubhPeer::TRADE_BRED_1);
            $criteria->addSelectColumn(FubhPeer::TRADE_BRED_2);
            $criteria->addSelectColumn(FubhPeer::TRADE_BRED_3);
            $criteria->addSelectColumn(FubhPeer::TRADE_BRED_4);
            $criteria->addSelectColumn(FubhPeer::TRADE_BRED_5);
            $criteria->addSelectColumn(FubhPeer::USED_SPORT_1);
            $criteria->addSelectColumn(FubhPeer::USED_SPORT_2);
            $criteria->addSelectColumn(FubhPeer::USED_SPORT_3);
            $criteria->addSelectColumn(FubhPeer::USED_SPORT_4);
            $criteria->addSelectColumn(FubhPeer::USED_SPORT_5);
            $criteria->addSelectColumn(FubhPeer::TOT_USED_1);
            $criteria->addSelectColumn(FubhPeer::TOT_USED_2);
            $criteria->addSelectColumn(FubhPeer::TOT_USED_3);
            $criteria->addSelectColumn(FubhPeer::TOT_USED_4);
            $criteria->addSelectColumn(FubhPeer::TOT_USED_5);
            $criteria->addSelectColumn(FubhPeer::THREAT_1);
            $criteria->addSelectColumn(FubhPeer::THREAT_2);
            $criteria->addSelectColumn(FubhPeer::THREAT_3);
            $criteria->addSelectColumn(FubhPeer::THREAT_4);
            $criteria->addSelectColumn(FubhPeer::THREAT_5);
            $criteria->addSelectColumn(FubhPeer::INTRO_1);
            $criteria->addSelectColumn(FubhPeer::INTRO_2);
            $criteria->addSelectColumn(FubhPeer::INTRO_3);
            $criteria->addSelectColumn(FubhPeer::INTRO_4);
            $criteria->addSelectColumn(FubhPeer::INTRO_5);
            $criteria->addSelectColumn(FubhPeer::DANGER_1);
            $criteria->addSelectColumn(FubhPeer::DANGER_2);
            $criteria->addSelectColumn(FubhPeer::DANGER_3);
            $criteria->addSelectColumn(FubhPeer::DANGER_4);
            $criteria->addSelectColumn(FubhPeer::DANGER_5);
            $criteria->addSelectColumn(FubhPeer::NOTE);
            $criteria->addSelectColumn(FubhPeer::NO_SPECIES);
            $criteria->addSelectColumn(FubhPeer::NO_FRESH);
            $criteria->addSelectColumn(FubhPeer::NO_MARINE);
            $criteria->addSelectColumn(FubhPeer::NO_BRACKISH);
            $criteria->addSelectColumn(FubhPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.print_date_bySkit');
            $criteria->addSelectColumn($alias . '.active');
            $criteria->addSelectColumn($alias . '.Period');
            $criteria->addSelectColumn($alias . '.extant_finfish_1');
            $criteria->addSelectColumn($alias . '.extant_finfish_2');
            $criteria->addSelectColumn($alias . '.extant_finfish_3');
            $criteria->addSelectColumn($alias . '.extant_finfish_4');
            $criteria->addSelectColumn($alias . '.extant_finfish_5');
            $criteria->addSelectColumn($alias . '.used_fisheries_1');
            $criteria->addSelectColumn($alias . '.used_fisheries_2');
            $criteria->addSelectColumn($alias . '.used_fisheries_3');
            $criteria->addSelectColumn($alias . '.used_fisheries_4');
            $criteria->addSelectColumn($alias . '.used_fisheries_5');
            $criteria->addSelectColumn($alias . '.used_aquac_1');
            $criteria->addSelectColumn($alias . '.used_aquac_2');
            $criteria->addSelectColumn($alias . '.used_aquac_3');
            $criteria->addSelectColumn($alias . '.used_aquac_4');
            $criteria->addSelectColumn($alias . '.used_aquac_5');
            $criteria->addSelectColumn($alias . '.used_bait_1');
            $criteria->addSelectColumn($alias . '.used_bait_2');
            $criteria->addSelectColumn($alias . '.used_bait_3');
            $criteria->addSelectColumn($alias . '.used_bait_4');
            $criteria->addSelectColumn($alias . '.used_bait_5');
            $criteria->addSelectColumn($alias . '.used_trade_1');
            $criteria->addSelectColumn($alias . '.used_trade_2');
            $criteria->addSelectColumn($alias . '.used_trade_3');
            $criteria->addSelectColumn($alias . '.used_trade_4');
            $criteria->addSelectColumn($alias . '.used_trade_5');
            $criteria->addSelectColumn($alias . '.trade_marine_1');
            $criteria->addSelectColumn($alias . '.trade_marine_2');
            $criteria->addSelectColumn($alias . '.trade_marine_3');
            $criteria->addSelectColumn($alias . '.trade_marine_4');
            $criteria->addSelectColumn($alias . '.trade_marine_5');
            $criteria->addSelectColumn($alias . '.trade_fresh_1');
            $criteria->addSelectColumn($alias . '.trade_fresh_2');
            $criteria->addSelectColumn($alias . '.trade_fresh_3');
            $criteria->addSelectColumn($alias . '.trade_fresh_4');
            $criteria->addSelectColumn($alias . '.trade_fresh_5');
            $criteria->addSelectColumn($alias . '.trade_bred_1');
            $criteria->addSelectColumn($alias . '.trade_bred_2');
            $criteria->addSelectColumn($alias . '.trade_bred_3');
            $criteria->addSelectColumn($alias . '.trade_bred_4');
            $criteria->addSelectColumn($alias . '.trade_bred_5');
            $criteria->addSelectColumn($alias . '.used_sport_1');
            $criteria->addSelectColumn($alias . '.used_sport_2');
            $criteria->addSelectColumn($alias . '.used_sport_3');
            $criteria->addSelectColumn($alias . '.used_sport_4');
            $criteria->addSelectColumn($alias . '.used_sport_5');
            $criteria->addSelectColumn($alias . '.tot_used_1');
            $criteria->addSelectColumn($alias . '.tot_used_2');
            $criteria->addSelectColumn($alias . '.tot_used_3');
            $criteria->addSelectColumn($alias . '.tot_used_4');
            $criteria->addSelectColumn($alias . '.tot_used_5');
            $criteria->addSelectColumn($alias . '.threat_1');
            $criteria->addSelectColumn($alias . '.threat_2');
            $criteria->addSelectColumn($alias . '.threat_3');
            $criteria->addSelectColumn($alias . '.threat_4');
            $criteria->addSelectColumn($alias . '.threat_5');
            $criteria->addSelectColumn($alias . '.intro_1');
            $criteria->addSelectColumn($alias . '.intro_2');
            $criteria->addSelectColumn($alias . '.intro_3');
            $criteria->addSelectColumn($alias . '.intro_4');
            $criteria->addSelectColumn($alias . '.intro_5');
            $criteria->addSelectColumn($alias . '.danger_1');
            $criteria->addSelectColumn($alias . '.danger_2');
            $criteria->addSelectColumn($alias . '.danger_3');
            $criteria->addSelectColumn($alias . '.danger_4');
            $criteria->addSelectColumn($alias . '.danger_5');
            $criteria->addSelectColumn($alias . '.note');
            $criteria->addSelectColumn($alias . '.no_species');
            $criteria->addSelectColumn($alias . '.no_fresh');
            $criteria->addSelectColumn($alias . '.no_marine');
            $criteria->addSelectColumn($alias . '.no_brackish');
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
        $criteria->setPrimaryTableName(FubhPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FubhPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FubhPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FubhPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Fubh
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FubhPeer::doSelect($critcopy, $con);
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
        return FubhPeer::populateObjects(FubhPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(FubhPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FubhPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FubhPeer::DATABASE_NAME);

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
     * @param Fubh $obj A Fubh object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPeriod('U');
            } // if key === null
            FubhPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Fubh object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Fubh) {
                $key = (string) $value->getPeriod();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Fubh object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FubhPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Fubh Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FubhPeer::$instances[$key])) {
                return FubhPeer::$instances[$key];
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
        foreach (FubhPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FubhPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to fubh
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

        return (string) $row[$startcol + 2];
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
        $cls = FubhPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FubhPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FubhPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FubhPeer::addInstanceToPool($obj, $key);
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
     * @return array (Fubh object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FubhPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FubhPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FubhPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FubhPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FubhPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(FubhPeer::DATABASE_NAME)->getTable(FubhPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFubhPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFubhPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FubhTableMap());
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
        return FubhPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Fubh or Criteria object.
     *
     * @param      mixed $values Criteria or Fubh object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FubhPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Fubh object
        }


        // Set the correct dbName
        $criteria->setDbName(FubhPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Fubh or Criteria object.
     *
     * @param      mixed $values Criteria or Fubh object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FubhPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FubhPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FubhPeer::PERIOD);
            $value = $criteria->remove(FubhPeer::PERIOD);
            if ($value) {
                $selectCriteria->add(FubhPeer::PERIOD, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FubhPeer::TABLE_NAME);
            }

        } else { // $values is Fubh object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FubhPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the fubh table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FubhPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FubhPeer::TABLE_NAME, $con, FubhPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FubhPeer::clearInstancePool();
            FubhPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Fubh or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Fubh object or primary key or array of primary keys
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
            $con = Propel::getConnection(FubhPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FubhPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Fubh) { // it's a model object
            // invalidate the cache for this single object
            FubhPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FubhPeer::DATABASE_NAME);
            $criteria->add(FubhPeer::PERIOD, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FubhPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FubhPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FubhPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Fubh object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Fubh $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FubhPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FubhPeer::TABLE_NAME);

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

        return BasePeer::doValidate(FubhPeer::DATABASE_NAME, FubhPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Fubh
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FubhPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FubhPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FubhPeer::DATABASE_NAME);
        $criteria->add(FubhPeer::PERIOD, $pk);

        $v = FubhPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Fubh[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FubhPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FubhPeer::DATABASE_NAME);
            $criteria->add(FubhPeer::PERIOD, $pks, Criteria::IN);
            $objs = FubhPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseFubhPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFubhPeer::buildTableMap();

