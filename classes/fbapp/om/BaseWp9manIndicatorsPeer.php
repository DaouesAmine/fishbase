<?php


/**
 * Base static class for performing query and update operations on the 'wp9man_indicators' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseWp9manIndicatorsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'wp9man_indicators';

    /** the related Propel class for this table */
    const OM_CLASS = 'Wp9manIndicators';

    /** the related TableMap class for this table */
    const TM_CLASS = 'Wp9manIndicatorsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 83;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 83;

    /** the column name for the id field */
    const ID = 'wp9man_indicators.id';

    /** the column name for the Name field */
    const NAME = 'wp9man_indicators.Name';

    /** the column name for the Institution field */
    const INSTITUTION = 'wp9man_indicators.Institution';

    /** the column name for the Email field */
    const EMAIL = 'wp9man_indicators.Email';

    /** the column name for the MPAName field */
    const MPANAME = 'wp9man_indicators.MPAName';

    /** the column name for the MPACountry field */
    const MPACOUNTRY = 'wp9man_indicators.MPACountry';

    /** the column name for the MPALocation field */
    const MPALOCATION = 'wp9man_indicators.MPALocation';

    /** the column name for the MPACharacter field */
    const MPACHARACTER = 'wp9man_indicators.MPACharacter';

    /** the column name for the ScubaDiving field */
    const SCUBADIVING = 'wp9man_indicators.ScubaDiving';

    /** the column name for the Snorkeling field */
    const SNORKELING = 'wp9man_indicators.Snorkeling';

    /** the column name for the Hiking field */
    const HIKING = 'wp9man_indicators.Hiking';

    /** the column name for the FFWatching field */
    const FFWATCHING = 'wp9man_indicators.FFWatching';

    /** the column name for the SeascapeWatching field */
    const SEASCAPEWATCHING = 'wp9man_indicators.SeascapeWatching';

    /** the column name for the Other1 field */
    const OTHER1 = 'wp9man_indicators.Other1';

    /** the column name for the Other2 field */
    const OTHER2 = 'wp9man_indicators.Other2';

    /** the column name for the Other3 field */
    const OTHER3 = 'wp9man_indicators.Other3';

    /** the column name for the Other4 field */
    const OTHER4 = 'wp9man_indicators.Other4';

    /** the column name for the ComName1 field */
    const COMNAME1 = 'wp9man_indicators.ComName1';

    /** the column name for the SciName1 field */
    const SCINAME1 = 'wp9man_indicators.SciName1';

    /** the column name for the DescEco1 field */
    const DESCECO1 = 'wp9man_indicators.DescEco1';

    /** the column name for the TempPres1 field */
    const TEMPPRES1 = 'wp9man_indicators.TempPres1';

    /** the column name for the ComName2 field */
    const COMNAME2 = 'wp9man_indicators.ComName2';

    /** the column name for the SciName2 field */
    const SCINAME2 = 'wp9man_indicators.SciName2';

    /** the column name for the DescEco2 field */
    const DESCECO2 = 'wp9man_indicators.DescEco2';

    /** the column name for the TempPres2 field */
    const TEMPPRES2 = 'wp9man_indicators.TempPres2';

    /** the column name for the ComName3 field */
    const COMNAME3 = 'wp9man_indicators.ComName3';

    /** the column name for the SciName3 field */
    const SCINAME3 = 'wp9man_indicators.SciName3';

    /** the column name for the DescEco3 field */
    const DESCECO3 = 'wp9man_indicators.DescEco3';

    /** the column name for the TempPres3 field */
    const TEMPPRES3 = 'wp9man_indicators.TempPres3';

    /** the column name for the ComName4 field */
    const COMNAME4 = 'wp9man_indicators.ComName4';

    /** the column name for the SciName4 field */
    const SCINAME4 = 'wp9man_indicators.SciName4';

    /** the column name for the DescEco4 field */
    const DESCECO4 = 'wp9man_indicators.DescEco4';

    /** the column name for the TempPres4 field */
    const TEMPPRES4 = 'wp9man_indicators.TempPres4';

    /** the column name for the EcoComName1 field */
    const ECOCOMNAME1 = 'wp9man_indicators.EcoComName1';

    /** the column name for the EcoDescEco1 field */
    const ECODESCECO1 = 'wp9man_indicators.EcoDescEco1';

    /** the column name for the RelDis1 field */
    const RELDIS1 = 'wp9man_indicators.RelDis1';

    /** the column name for the EcoComName2 field */
    const ECOCOMNAME2 = 'wp9man_indicators.EcoComName2';

    /** the column name for the EcoDescEco2 field */
    const ECODESCECO2 = 'wp9man_indicators.EcoDescEco2';

    /** the column name for the RelDis2 field */
    const RELDIS2 = 'wp9man_indicators.RelDis2';

    /** the column name for the EcoComName3 field */
    const ECOCOMNAME3 = 'wp9man_indicators.EcoComName3';

    /** the column name for the EcoDescEco3 field */
    const ECODESCECO3 = 'wp9man_indicators.EcoDescEco3';

    /** the column name for the RelDis3 field */
    const RELDIS3 = 'wp9man_indicators.RelDis3';

    /** the column name for the EcoComName4 field */
    const ECOCOMNAME4 = 'wp9man_indicators.EcoComName4';

    /** the column name for the EcoDescEco4 field */
    const ECODESCECO4 = 'wp9man_indicators.EcoDescEco4';

    /** the column name for the RelDis4 field */
    const RELDIS4 = 'wp9man_indicators.RelDis4';

    /** the column name for the Man_HistInfo_4 field */
    const MAN_HISTINFO_4 = 'wp9man_indicators.Man_HistInfo_4';

    /** the column name for the Man_HistInfo_3 field */
    const MAN_HISTINFO_3 = 'wp9man_indicators.Man_HistInfo_3';

    /** the column name for the Man_HistInfo_2 field */
    const MAN_HISTINFO_2 = 'wp9man_indicators.Man_HistInfo_2';

    /** the column name for the Man_HistInfo_1 field */
    const MAN_HISTINFO_1 = 'wp9man_indicators.Man_HistInfo_1';

    /** the column name for the Man_Ref_Info1 field */
    const MAN_REF_INFO1 = 'wp9man_indicators.Man_Ref_Info1';

    /** the column name for the Man_CurInfo_1 field */
    const MAN_CURINFO_1 = 'wp9man_indicators.Man_CurInfo_1';

    /** the column name for the Man_CurInfo_2 field */
    const MAN_CURINFO_2 = 'wp9man_indicators.Man_CurInfo_2';

    /** the column name for the Man_CurInfo_3 field */
    const MAN_CURINFO_3 = 'wp9man_indicators.Man_CurInfo_3';

    /** the column name for the Man_CurInfo_4 field */
    const MAN_CURINFO_4 = 'wp9man_indicators.Man_CurInfo_4';

    /** the column name for the Man_HistInfo2_4 field */
    const MAN_HISTINFO2_4 = 'wp9man_indicators.Man_HistInfo2_4';

    /** the column name for the Man_HistInfo2_3 field */
    const MAN_HISTINFO2_3 = 'wp9man_indicators.Man_HistInfo2_3';

    /** the column name for the Man_HistInfo2_2 field */
    const MAN_HISTINFO2_2 = 'wp9man_indicators.Man_HistInfo2_2';

    /** the column name for the Man_HistInfo2_1 field */
    const MAN_HISTINFO2_1 = 'wp9man_indicators.Man_HistInfo2_1';

    /** the column name for the Man_Ref_Info2 field */
    const MAN_REF_INFO2 = 'wp9man_indicators.Man_Ref_Info2';

    /** the column name for the Man_CurInfo2_1 field */
    const MAN_CURINFO2_1 = 'wp9man_indicators.Man_CurInfo2_1';

    /** the column name for the Man_CurInfo2_2 field */
    const MAN_CURINFO2_2 = 'wp9man_indicators.Man_CurInfo2_2';

    /** the column name for the Man_CurInfo2_3 field */
    const MAN_CURINFO2_3 = 'wp9man_indicators.Man_CurInfo2_3';

    /** the column name for the Man_CurInfo2_4 field */
    const MAN_CURINFO2_4 = 'wp9man_indicators.Man_CurInfo2_4';

    /** the column name for the Man_HistInfo3_4 field */
    const MAN_HISTINFO3_4 = 'wp9man_indicators.Man_HistInfo3_4';

    /** the column name for the Man_HistInfo3_3 field */
    const MAN_HISTINFO3_3 = 'wp9man_indicators.Man_HistInfo3_3';

    /** the column name for the Man_HistInfo3_2 field */
    const MAN_HISTINFO3_2 = 'wp9man_indicators.Man_HistInfo3_2';

    /** the column name for the Man_HistInfo3_1 field */
    const MAN_HISTINFO3_1 = 'wp9man_indicators.Man_HistInfo3_1';

    /** the column name for the Man_Ref_Info3 field */
    const MAN_REF_INFO3 = 'wp9man_indicators.Man_Ref_Info3';

    /** the column name for the Man_CurInfo3_1 field */
    const MAN_CURINFO3_1 = 'wp9man_indicators.Man_CurInfo3_1';

    /** the column name for the Man_CurInfo3_2 field */
    const MAN_CURINFO3_2 = 'wp9man_indicators.Man_CurInfo3_2';

    /** the column name for the Man_CurInfo3_3 field */
    const MAN_CURINFO3_3 = 'wp9man_indicators.Man_CurInfo3_3';

    /** the column name for the Man_CurInfo3_4 field */
    const MAN_CURINFO3_4 = 'wp9man_indicators.Man_CurInfo3_4';

    /** the column name for the Man_HistInfo4_4 field */
    const MAN_HISTINFO4_4 = 'wp9man_indicators.Man_HistInfo4_4';

    /** the column name for the Man_HistInfo4_3 field */
    const MAN_HISTINFO4_3 = 'wp9man_indicators.Man_HistInfo4_3';

    /** the column name for the Man_HistInfo4_2 field */
    const MAN_HISTINFO4_2 = 'wp9man_indicators.Man_HistInfo4_2';

    /** the column name for the Man_HistInfo4_1 field */
    const MAN_HISTINFO4_1 = 'wp9man_indicators.Man_HistInfo4_1';

    /** the column name for the Man_Ref_Info4 field */
    const MAN_REF_INFO4 = 'wp9man_indicators.Man_Ref_Info4';

    /** the column name for the Man_CurInfo4_1 field */
    const MAN_CURINFO4_1 = 'wp9man_indicators.Man_CurInfo4_1';

    /** the column name for the Man_CurInfo4_2 field */
    const MAN_CURINFO4_2 = 'wp9man_indicators.Man_CurInfo4_2';

    /** the column name for the Man_CurInfo4_3 field */
    const MAN_CURINFO4_3 = 'wp9man_indicators.Man_CurInfo4_3';

    /** the column name for the Man_CurInfo4_4 field */
    const MAN_CURINFO4_4 = 'wp9man_indicators.Man_CurInfo4_4';

    /** the column name for the newpassword field */
    const NEWPASSWORD = 'wp9man_indicators.newpassword';

    /** the column name for the IndDate field */
    const INDDATE = 'wp9man_indicators.IndDate';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Wp9manIndicators objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Wp9manIndicators[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. Wp9manIndicatorsPeer::$fieldNames[Wp9manIndicatorsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'Institution', 'Email', 'Mpaname', 'Mpacountry', 'Mpalocation', 'Mpacharacter', 'Scubadiving', 'Snorkeling', 'Hiking', 'Ffwatching', 'Seascapewatching', 'Other1', 'Other2', 'Other3', 'Other4', 'Comname1', 'Sciname1', 'Desceco1', 'Temppres1', 'Comname2', 'Sciname2', 'Desceco2', 'Temppres2', 'Comname3', 'Sciname3', 'Desceco3', 'Temppres3', 'Comname4', 'Sciname4', 'Desceco4', 'Temppres4', 'Ecocomname1', 'Ecodesceco1', 'Reldis1', 'Ecocomname2', 'Ecodesceco2', 'Reldis2', 'Ecocomname3', 'Ecodesceco3', 'Reldis3', 'Ecocomname4', 'Ecodesceco4', 'Reldis4', 'ManHistinfo4', 'ManHistinfo3', 'ManHistinfo2', 'ManHistinfo1', 'ManRefInfo1', 'ManCurinfo1', 'ManCurinfo2', 'ManCurinfo3', 'ManCurinfo4', 'ManHistinfo24', 'ManHistinfo23', 'ManHistinfo22', 'ManHistinfo21', 'ManRefInfo2', 'ManCurinfo21', 'ManCurinfo22', 'ManCurinfo23', 'ManCurinfo24', 'ManHistinfo34', 'ManHistinfo33', 'ManHistinfo32', 'ManHistinfo31', 'ManRefInfo3', 'ManCurinfo31', 'ManCurinfo32', 'ManCurinfo33', 'ManCurinfo34', 'ManHistinfo44', 'ManHistinfo43', 'ManHistinfo42', 'ManHistinfo41', 'ManRefInfo4', 'ManCurinfo41', 'ManCurinfo42', 'ManCurinfo43', 'ManCurinfo44', 'Newpassword', 'Inddate', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'name', 'institution', 'email', 'mpaname', 'mpacountry', 'mpalocation', 'mpacharacter', 'scubadiving', 'snorkeling', 'hiking', 'ffwatching', 'seascapewatching', 'other1', 'other2', 'other3', 'other4', 'comname1', 'sciname1', 'desceco1', 'temppres1', 'comname2', 'sciname2', 'desceco2', 'temppres2', 'comname3', 'sciname3', 'desceco3', 'temppres3', 'comname4', 'sciname4', 'desceco4', 'temppres4', 'ecocomname1', 'ecodesceco1', 'reldis1', 'ecocomname2', 'ecodesceco2', 'reldis2', 'ecocomname3', 'ecodesceco3', 'reldis3', 'ecocomname4', 'ecodesceco4', 'reldis4', 'manHistinfo4', 'manHistinfo3', 'manHistinfo2', 'manHistinfo1', 'manRefInfo1', 'manCurinfo1', 'manCurinfo2', 'manCurinfo3', 'manCurinfo4', 'manHistinfo24', 'manHistinfo23', 'manHistinfo22', 'manHistinfo21', 'manRefInfo2', 'manCurinfo21', 'manCurinfo22', 'manCurinfo23', 'manCurinfo24', 'manHistinfo34', 'manHistinfo33', 'manHistinfo32', 'manHistinfo31', 'manRefInfo3', 'manCurinfo31', 'manCurinfo32', 'manCurinfo33', 'manCurinfo34', 'manHistinfo44', 'manHistinfo43', 'manHistinfo42', 'manHistinfo41', 'manRefInfo4', 'manCurinfo41', 'manCurinfo42', 'manCurinfo43', 'manCurinfo44', 'newpassword', 'inddate', ),
        BasePeer::TYPE_COLNAME => array (Wp9manIndicatorsPeer::ID, Wp9manIndicatorsPeer::NAME, Wp9manIndicatorsPeer::INSTITUTION, Wp9manIndicatorsPeer::EMAIL, Wp9manIndicatorsPeer::MPANAME, Wp9manIndicatorsPeer::MPACOUNTRY, Wp9manIndicatorsPeer::MPALOCATION, Wp9manIndicatorsPeer::MPACHARACTER, Wp9manIndicatorsPeer::SCUBADIVING, Wp9manIndicatorsPeer::SNORKELING, Wp9manIndicatorsPeer::HIKING, Wp9manIndicatorsPeer::FFWATCHING, Wp9manIndicatorsPeer::SEASCAPEWATCHING, Wp9manIndicatorsPeer::OTHER1, Wp9manIndicatorsPeer::OTHER2, Wp9manIndicatorsPeer::OTHER3, Wp9manIndicatorsPeer::OTHER4, Wp9manIndicatorsPeer::COMNAME1, Wp9manIndicatorsPeer::SCINAME1, Wp9manIndicatorsPeer::DESCECO1, Wp9manIndicatorsPeer::TEMPPRES1, Wp9manIndicatorsPeer::COMNAME2, Wp9manIndicatorsPeer::SCINAME2, Wp9manIndicatorsPeer::DESCECO2, Wp9manIndicatorsPeer::TEMPPRES2, Wp9manIndicatorsPeer::COMNAME3, Wp9manIndicatorsPeer::SCINAME3, Wp9manIndicatorsPeer::DESCECO3, Wp9manIndicatorsPeer::TEMPPRES3, Wp9manIndicatorsPeer::COMNAME4, Wp9manIndicatorsPeer::SCINAME4, Wp9manIndicatorsPeer::DESCECO4, Wp9manIndicatorsPeer::TEMPPRES4, Wp9manIndicatorsPeer::ECOCOMNAME1, Wp9manIndicatorsPeer::ECODESCECO1, Wp9manIndicatorsPeer::RELDIS1, Wp9manIndicatorsPeer::ECOCOMNAME2, Wp9manIndicatorsPeer::ECODESCECO2, Wp9manIndicatorsPeer::RELDIS2, Wp9manIndicatorsPeer::ECOCOMNAME3, Wp9manIndicatorsPeer::ECODESCECO3, Wp9manIndicatorsPeer::RELDIS3, Wp9manIndicatorsPeer::ECOCOMNAME4, Wp9manIndicatorsPeer::ECODESCECO4, Wp9manIndicatorsPeer::RELDIS4, Wp9manIndicatorsPeer::MAN_HISTINFO_4, Wp9manIndicatorsPeer::MAN_HISTINFO_3, Wp9manIndicatorsPeer::MAN_HISTINFO_2, Wp9manIndicatorsPeer::MAN_HISTINFO_1, Wp9manIndicatorsPeer::MAN_REF_INFO1, Wp9manIndicatorsPeer::MAN_CURINFO_1, Wp9manIndicatorsPeer::MAN_CURINFO_2, Wp9manIndicatorsPeer::MAN_CURINFO_3, Wp9manIndicatorsPeer::MAN_CURINFO_4, Wp9manIndicatorsPeer::MAN_HISTINFO2_4, Wp9manIndicatorsPeer::MAN_HISTINFO2_3, Wp9manIndicatorsPeer::MAN_HISTINFO2_2, Wp9manIndicatorsPeer::MAN_HISTINFO2_1, Wp9manIndicatorsPeer::MAN_REF_INFO2, Wp9manIndicatorsPeer::MAN_CURINFO2_1, Wp9manIndicatorsPeer::MAN_CURINFO2_2, Wp9manIndicatorsPeer::MAN_CURINFO2_3, Wp9manIndicatorsPeer::MAN_CURINFO2_4, Wp9manIndicatorsPeer::MAN_HISTINFO3_4, Wp9manIndicatorsPeer::MAN_HISTINFO3_3, Wp9manIndicatorsPeer::MAN_HISTINFO3_2, Wp9manIndicatorsPeer::MAN_HISTINFO3_1, Wp9manIndicatorsPeer::MAN_REF_INFO3, Wp9manIndicatorsPeer::MAN_CURINFO3_1, Wp9manIndicatorsPeer::MAN_CURINFO3_2, Wp9manIndicatorsPeer::MAN_CURINFO3_3, Wp9manIndicatorsPeer::MAN_CURINFO3_4, Wp9manIndicatorsPeer::MAN_HISTINFO4_4, Wp9manIndicatorsPeer::MAN_HISTINFO4_3, Wp9manIndicatorsPeer::MAN_HISTINFO4_2, Wp9manIndicatorsPeer::MAN_HISTINFO4_1, Wp9manIndicatorsPeer::MAN_REF_INFO4, Wp9manIndicatorsPeer::MAN_CURINFO4_1, Wp9manIndicatorsPeer::MAN_CURINFO4_2, Wp9manIndicatorsPeer::MAN_CURINFO4_3, Wp9manIndicatorsPeer::MAN_CURINFO4_4, Wp9manIndicatorsPeer::NEWPASSWORD, Wp9manIndicatorsPeer::INDDATE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NAME', 'INSTITUTION', 'EMAIL', 'MPANAME', 'MPACOUNTRY', 'MPALOCATION', 'MPACHARACTER', 'SCUBADIVING', 'SNORKELING', 'HIKING', 'FFWATCHING', 'SEASCAPEWATCHING', 'OTHER1', 'OTHER2', 'OTHER3', 'OTHER4', 'COMNAME1', 'SCINAME1', 'DESCECO1', 'TEMPPRES1', 'COMNAME2', 'SCINAME2', 'DESCECO2', 'TEMPPRES2', 'COMNAME3', 'SCINAME3', 'DESCECO3', 'TEMPPRES3', 'COMNAME4', 'SCINAME4', 'DESCECO4', 'TEMPPRES4', 'ECOCOMNAME1', 'ECODESCECO1', 'RELDIS1', 'ECOCOMNAME2', 'ECODESCECO2', 'RELDIS2', 'ECOCOMNAME3', 'ECODESCECO3', 'RELDIS3', 'ECOCOMNAME4', 'ECODESCECO4', 'RELDIS4', 'MAN_HISTINFO_4', 'MAN_HISTINFO_3', 'MAN_HISTINFO_2', 'MAN_HISTINFO_1', 'MAN_REF_INFO1', 'MAN_CURINFO_1', 'MAN_CURINFO_2', 'MAN_CURINFO_3', 'MAN_CURINFO_4', 'MAN_HISTINFO2_4', 'MAN_HISTINFO2_3', 'MAN_HISTINFO2_2', 'MAN_HISTINFO2_1', 'MAN_REF_INFO2', 'MAN_CURINFO2_1', 'MAN_CURINFO2_2', 'MAN_CURINFO2_3', 'MAN_CURINFO2_4', 'MAN_HISTINFO3_4', 'MAN_HISTINFO3_3', 'MAN_HISTINFO3_2', 'MAN_HISTINFO3_1', 'MAN_REF_INFO3', 'MAN_CURINFO3_1', 'MAN_CURINFO3_2', 'MAN_CURINFO3_3', 'MAN_CURINFO3_4', 'MAN_HISTINFO4_4', 'MAN_HISTINFO4_3', 'MAN_HISTINFO4_2', 'MAN_HISTINFO4_1', 'MAN_REF_INFO4', 'MAN_CURINFO4_1', 'MAN_CURINFO4_2', 'MAN_CURINFO4_3', 'MAN_CURINFO4_4', 'NEWPASSWORD', 'INDDATE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'Name', 'Institution', 'Email', 'MPAName', 'MPACountry', 'MPALocation', 'MPACharacter', 'ScubaDiving', 'Snorkeling', 'Hiking', 'FFWatching', 'SeascapeWatching', 'Other1', 'Other2', 'Other3', 'Other4', 'ComName1', 'SciName1', 'DescEco1', 'TempPres1', 'ComName2', 'SciName2', 'DescEco2', 'TempPres2', 'ComName3', 'SciName3', 'DescEco3', 'TempPres3', 'ComName4', 'SciName4', 'DescEco4', 'TempPres4', 'EcoComName1', 'EcoDescEco1', 'RelDis1', 'EcoComName2', 'EcoDescEco2', 'RelDis2', 'EcoComName3', 'EcoDescEco3', 'RelDis3', 'EcoComName4', 'EcoDescEco4', 'RelDis4', 'Man_HistInfo_4', 'Man_HistInfo_3', 'Man_HistInfo_2', 'Man_HistInfo_1', 'Man_Ref_Info1', 'Man_CurInfo_1', 'Man_CurInfo_2', 'Man_CurInfo_3', 'Man_CurInfo_4', 'Man_HistInfo2_4', 'Man_HistInfo2_3', 'Man_HistInfo2_2', 'Man_HistInfo2_1', 'Man_Ref_Info2', 'Man_CurInfo2_1', 'Man_CurInfo2_2', 'Man_CurInfo2_3', 'Man_CurInfo2_4', 'Man_HistInfo3_4', 'Man_HistInfo3_3', 'Man_HistInfo3_2', 'Man_HistInfo3_1', 'Man_Ref_Info3', 'Man_CurInfo3_1', 'Man_CurInfo3_2', 'Man_CurInfo3_3', 'Man_CurInfo3_4', 'Man_HistInfo4_4', 'Man_HistInfo4_3', 'Man_HistInfo4_2', 'Man_HistInfo4_1', 'Man_Ref_Info4', 'Man_CurInfo4_1', 'Man_CurInfo4_2', 'Man_CurInfo4_3', 'Man_CurInfo4_4', 'newpassword', 'IndDate', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. Wp9manIndicatorsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'Institution' => 2, 'Email' => 3, 'Mpaname' => 4, 'Mpacountry' => 5, 'Mpalocation' => 6, 'Mpacharacter' => 7, 'Scubadiving' => 8, 'Snorkeling' => 9, 'Hiking' => 10, 'Ffwatching' => 11, 'Seascapewatching' => 12, 'Other1' => 13, 'Other2' => 14, 'Other3' => 15, 'Other4' => 16, 'Comname1' => 17, 'Sciname1' => 18, 'Desceco1' => 19, 'Temppres1' => 20, 'Comname2' => 21, 'Sciname2' => 22, 'Desceco2' => 23, 'Temppres2' => 24, 'Comname3' => 25, 'Sciname3' => 26, 'Desceco3' => 27, 'Temppres3' => 28, 'Comname4' => 29, 'Sciname4' => 30, 'Desceco4' => 31, 'Temppres4' => 32, 'Ecocomname1' => 33, 'Ecodesceco1' => 34, 'Reldis1' => 35, 'Ecocomname2' => 36, 'Ecodesceco2' => 37, 'Reldis2' => 38, 'Ecocomname3' => 39, 'Ecodesceco3' => 40, 'Reldis3' => 41, 'Ecocomname4' => 42, 'Ecodesceco4' => 43, 'Reldis4' => 44, 'ManHistinfo4' => 45, 'ManHistinfo3' => 46, 'ManHistinfo2' => 47, 'ManHistinfo1' => 48, 'ManRefInfo1' => 49, 'ManCurinfo1' => 50, 'ManCurinfo2' => 51, 'ManCurinfo3' => 52, 'ManCurinfo4' => 53, 'ManHistinfo24' => 54, 'ManHistinfo23' => 55, 'ManHistinfo22' => 56, 'ManHistinfo21' => 57, 'ManRefInfo2' => 58, 'ManCurinfo21' => 59, 'ManCurinfo22' => 60, 'ManCurinfo23' => 61, 'ManCurinfo24' => 62, 'ManHistinfo34' => 63, 'ManHistinfo33' => 64, 'ManHistinfo32' => 65, 'ManHistinfo31' => 66, 'ManRefInfo3' => 67, 'ManCurinfo31' => 68, 'ManCurinfo32' => 69, 'ManCurinfo33' => 70, 'ManCurinfo34' => 71, 'ManHistinfo44' => 72, 'ManHistinfo43' => 73, 'ManHistinfo42' => 74, 'ManHistinfo41' => 75, 'ManRefInfo4' => 76, 'ManCurinfo41' => 77, 'ManCurinfo42' => 78, 'ManCurinfo43' => 79, 'ManCurinfo44' => 80, 'Newpassword' => 81, 'Inddate' => 82, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'name' => 1, 'institution' => 2, 'email' => 3, 'mpaname' => 4, 'mpacountry' => 5, 'mpalocation' => 6, 'mpacharacter' => 7, 'scubadiving' => 8, 'snorkeling' => 9, 'hiking' => 10, 'ffwatching' => 11, 'seascapewatching' => 12, 'other1' => 13, 'other2' => 14, 'other3' => 15, 'other4' => 16, 'comname1' => 17, 'sciname1' => 18, 'desceco1' => 19, 'temppres1' => 20, 'comname2' => 21, 'sciname2' => 22, 'desceco2' => 23, 'temppres2' => 24, 'comname3' => 25, 'sciname3' => 26, 'desceco3' => 27, 'temppres3' => 28, 'comname4' => 29, 'sciname4' => 30, 'desceco4' => 31, 'temppres4' => 32, 'ecocomname1' => 33, 'ecodesceco1' => 34, 'reldis1' => 35, 'ecocomname2' => 36, 'ecodesceco2' => 37, 'reldis2' => 38, 'ecocomname3' => 39, 'ecodesceco3' => 40, 'reldis3' => 41, 'ecocomname4' => 42, 'ecodesceco4' => 43, 'reldis4' => 44, 'manHistinfo4' => 45, 'manHistinfo3' => 46, 'manHistinfo2' => 47, 'manHistinfo1' => 48, 'manRefInfo1' => 49, 'manCurinfo1' => 50, 'manCurinfo2' => 51, 'manCurinfo3' => 52, 'manCurinfo4' => 53, 'manHistinfo24' => 54, 'manHistinfo23' => 55, 'manHistinfo22' => 56, 'manHistinfo21' => 57, 'manRefInfo2' => 58, 'manCurinfo21' => 59, 'manCurinfo22' => 60, 'manCurinfo23' => 61, 'manCurinfo24' => 62, 'manHistinfo34' => 63, 'manHistinfo33' => 64, 'manHistinfo32' => 65, 'manHistinfo31' => 66, 'manRefInfo3' => 67, 'manCurinfo31' => 68, 'manCurinfo32' => 69, 'manCurinfo33' => 70, 'manCurinfo34' => 71, 'manHistinfo44' => 72, 'manHistinfo43' => 73, 'manHistinfo42' => 74, 'manHistinfo41' => 75, 'manRefInfo4' => 76, 'manCurinfo41' => 77, 'manCurinfo42' => 78, 'manCurinfo43' => 79, 'manCurinfo44' => 80, 'newpassword' => 81, 'inddate' => 82, ),
        BasePeer::TYPE_COLNAME => array (Wp9manIndicatorsPeer::ID => 0, Wp9manIndicatorsPeer::NAME => 1, Wp9manIndicatorsPeer::INSTITUTION => 2, Wp9manIndicatorsPeer::EMAIL => 3, Wp9manIndicatorsPeer::MPANAME => 4, Wp9manIndicatorsPeer::MPACOUNTRY => 5, Wp9manIndicatorsPeer::MPALOCATION => 6, Wp9manIndicatorsPeer::MPACHARACTER => 7, Wp9manIndicatorsPeer::SCUBADIVING => 8, Wp9manIndicatorsPeer::SNORKELING => 9, Wp9manIndicatorsPeer::HIKING => 10, Wp9manIndicatorsPeer::FFWATCHING => 11, Wp9manIndicatorsPeer::SEASCAPEWATCHING => 12, Wp9manIndicatorsPeer::OTHER1 => 13, Wp9manIndicatorsPeer::OTHER2 => 14, Wp9manIndicatorsPeer::OTHER3 => 15, Wp9manIndicatorsPeer::OTHER4 => 16, Wp9manIndicatorsPeer::COMNAME1 => 17, Wp9manIndicatorsPeer::SCINAME1 => 18, Wp9manIndicatorsPeer::DESCECO1 => 19, Wp9manIndicatorsPeer::TEMPPRES1 => 20, Wp9manIndicatorsPeer::COMNAME2 => 21, Wp9manIndicatorsPeer::SCINAME2 => 22, Wp9manIndicatorsPeer::DESCECO2 => 23, Wp9manIndicatorsPeer::TEMPPRES2 => 24, Wp9manIndicatorsPeer::COMNAME3 => 25, Wp9manIndicatorsPeer::SCINAME3 => 26, Wp9manIndicatorsPeer::DESCECO3 => 27, Wp9manIndicatorsPeer::TEMPPRES3 => 28, Wp9manIndicatorsPeer::COMNAME4 => 29, Wp9manIndicatorsPeer::SCINAME4 => 30, Wp9manIndicatorsPeer::DESCECO4 => 31, Wp9manIndicatorsPeer::TEMPPRES4 => 32, Wp9manIndicatorsPeer::ECOCOMNAME1 => 33, Wp9manIndicatorsPeer::ECODESCECO1 => 34, Wp9manIndicatorsPeer::RELDIS1 => 35, Wp9manIndicatorsPeer::ECOCOMNAME2 => 36, Wp9manIndicatorsPeer::ECODESCECO2 => 37, Wp9manIndicatorsPeer::RELDIS2 => 38, Wp9manIndicatorsPeer::ECOCOMNAME3 => 39, Wp9manIndicatorsPeer::ECODESCECO3 => 40, Wp9manIndicatorsPeer::RELDIS3 => 41, Wp9manIndicatorsPeer::ECOCOMNAME4 => 42, Wp9manIndicatorsPeer::ECODESCECO4 => 43, Wp9manIndicatorsPeer::RELDIS4 => 44, Wp9manIndicatorsPeer::MAN_HISTINFO_4 => 45, Wp9manIndicatorsPeer::MAN_HISTINFO_3 => 46, Wp9manIndicatorsPeer::MAN_HISTINFO_2 => 47, Wp9manIndicatorsPeer::MAN_HISTINFO_1 => 48, Wp9manIndicatorsPeer::MAN_REF_INFO1 => 49, Wp9manIndicatorsPeer::MAN_CURINFO_1 => 50, Wp9manIndicatorsPeer::MAN_CURINFO_2 => 51, Wp9manIndicatorsPeer::MAN_CURINFO_3 => 52, Wp9manIndicatorsPeer::MAN_CURINFO_4 => 53, Wp9manIndicatorsPeer::MAN_HISTINFO2_4 => 54, Wp9manIndicatorsPeer::MAN_HISTINFO2_3 => 55, Wp9manIndicatorsPeer::MAN_HISTINFO2_2 => 56, Wp9manIndicatorsPeer::MAN_HISTINFO2_1 => 57, Wp9manIndicatorsPeer::MAN_REF_INFO2 => 58, Wp9manIndicatorsPeer::MAN_CURINFO2_1 => 59, Wp9manIndicatorsPeer::MAN_CURINFO2_2 => 60, Wp9manIndicatorsPeer::MAN_CURINFO2_3 => 61, Wp9manIndicatorsPeer::MAN_CURINFO2_4 => 62, Wp9manIndicatorsPeer::MAN_HISTINFO3_4 => 63, Wp9manIndicatorsPeer::MAN_HISTINFO3_3 => 64, Wp9manIndicatorsPeer::MAN_HISTINFO3_2 => 65, Wp9manIndicatorsPeer::MAN_HISTINFO3_1 => 66, Wp9manIndicatorsPeer::MAN_REF_INFO3 => 67, Wp9manIndicatorsPeer::MAN_CURINFO3_1 => 68, Wp9manIndicatorsPeer::MAN_CURINFO3_2 => 69, Wp9manIndicatorsPeer::MAN_CURINFO3_3 => 70, Wp9manIndicatorsPeer::MAN_CURINFO3_4 => 71, Wp9manIndicatorsPeer::MAN_HISTINFO4_4 => 72, Wp9manIndicatorsPeer::MAN_HISTINFO4_3 => 73, Wp9manIndicatorsPeer::MAN_HISTINFO4_2 => 74, Wp9manIndicatorsPeer::MAN_HISTINFO4_1 => 75, Wp9manIndicatorsPeer::MAN_REF_INFO4 => 76, Wp9manIndicatorsPeer::MAN_CURINFO4_1 => 77, Wp9manIndicatorsPeer::MAN_CURINFO4_2 => 78, Wp9manIndicatorsPeer::MAN_CURINFO4_3 => 79, Wp9manIndicatorsPeer::MAN_CURINFO4_4 => 80, Wp9manIndicatorsPeer::NEWPASSWORD => 81, Wp9manIndicatorsPeer::INDDATE => 82, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NAME' => 1, 'INSTITUTION' => 2, 'EMAIL' => 3, 'MPANAME' => 4, 'MPACOUNTRY' => 5, 'MPALOCATION' => 6, 'MPACHARACTER' => 7, 'SCUBADIVING' => 8, 'SNORKELING' => 9, 'HIKING' => 10, 'FFWATCHING' => 11, 'SEASCAPEWATCHING' => 12, 'OTHER1' => 13, 'OTHER2' => 14, 'OTHER3' => 15, 'OTHER4' => 16, 'COMNAME1' => 17, 'SCINAME1' => 18, 'DESCECO1' => 19, 'TEMPPRES1' => 20, 'COMNAME2' => 21, 'SCINAME2' => 22, 'DESCECO2' => 23, 'TEMPPRES2' => 24, 'COMNAME3' => 25, 'SCINAME3' => 26, 'DESCECO3' => 27, 'TEMPPRES3' => 28, 'COMNAME4' => 29, 'SCINAME4' => 30, 'DESCECO4' => 31, 'TEMPPRES4' => 32, 'ECOCOMNAME1' => 33, 'ECODESCECO1' => 34, 'RELDIS1' => 35, 'ECOCOMNAME2' => 36, 'ECODESCECO2' => 37, 'RELDIS2' => 38, 'ECOCOMNAME3' => 39, 'ECODESCECO3' => 40, 'RELDIS3' => 41, 'ECOCOMNAME4' => 42, 'ECODESCECO4' => 43, 'RELDIS4' => 44, 'MAN_HISTINFO_4' => 45, 'MAN_HISTINFO_3' => 46, 'MAN_HISTINFO_2' => 47, 'MAN_HISTINFO_1' => 48, 'MAN_REF_INFO1' => 49, 'MAN_CURINFO_1' => 50, 'MAN_CURINFO_2' => 51, 'MAN_CURINFO_3' => 52, 'MAN_CURINFO_4' => 53, 'MAN_HISTINFO2_4' => 54, 'MAN_HISTINFO2_3' => 55, 'MAN_HISTINFO2_2' => 56, 'MAN_HISTINFO2_1' => 57, 'MAN_REF_INFO2' => 58, 'MAN_CURINFO2_1' => 59, 'MAN_CURINFO2_2' => 60, 'MAN_CURINFO2_3' => 61, 'MAN_CURINFO2_4' => 62, 'MAN_HISTINFO3_4' => 63, 'MAN_HISTINFO3_3' => 64, 'MAN_HISTINFO3_2' => 65, 'MAN_HISTINFO3_1' => 66, 'MAN_REF_INFO3' => 67, 'MAN_CURINFO3_1' => 68, 'MAN_CURINFO3_2' => 69, 'MAN_CURINFO3_3' => 70, 'MAN_CURINFO3_4' => 71, 'MAN_HISTINFO4_4' => 72, 'MAN_HISTINFO4_3' => 73, 'MAN_HISTINFO4_2' => 74, 'MAN_HISTINFO4_1' => 75, 'MAN_REF_INFO4' => 76, 'MAN_CURINFO4_1' => 77, 'MAN_CURINFO4_2' => 78, 'MAN_CURINFO4_3' => 79, 'MAN_CURINFO4_4' => 80, 'NEWPASSWORD' => 81, 'INDDATE' => 82, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'Name' => 1, 'Institution' => 2, 'Email' => 3, 'MPAName' => 4, 'MPACountry' => 5, 'MPALocation' => 6, 'MPACharacter' => 7, 'ScubaDiving' => 8, 'Snorkeling' => 9, 'Hiking' => 10, 'FFWatching' => 11, 'SeascapeWatching' => 12, 'Other1' => 13, 'Other2' => 14, 'Other3' => 15, 'Other4' => 16, 'ComName1' => 17, 'SciName1' => 18, 'DescEco1' => 19, 'TempPres1' => 20, 'ComName2' => 21, 'SciName2' => 22, 'DescEco2' => 23, 'TempPres2' => 24, 'ComName3' => 25, 'SciName3' => 26, 'DescEco3' => 27, 'TempPres3' => 28, 'ComName4' => 29, 'SciName4' => 30, 'DescEco4' => 31, 'TempPres4' => 32, 'EcoComName1' => 33, 'EcoDescEco1' => 34, 'RelDis1' => 35, 'EcoComName2' => 36, 'EcoDescEco2' => 37, 'RelDis2' => 38, 'EcoComName3' => 39, 'EcoDescEco3' => 40, 'RelDis3' => 41, 'EcoComName4' => 42, 'EcoDescEco4' => 43, 'RelDis4' => 44, 'Man_HistInfo_4' => 45, 'Man_HistInfo_3' => 46, 'Man_HistInfo_2' => 47, 'Man_HistInfo_1' => 48, 'Man_Ref_Info1' => 49, 'Man_CurInfo_1' => 50, 'Man_CurInfo_2' => 51, 'Man_CurInfo_3' => 52, 'Man_CurInfo_4' => 53, 'Man_HistInfo2_4' => 54, 'Man_HistInfo2_3' => 55, 'Man_HistInfo2_2' => 56, 'Man_HistInfo2_1' => 57, 'Man_Ref_Info2' => 58, 'Man_CurInfo2_1' => 59, 'Man_CurInfo2_2' => 60, 'Man_CurInfo2_3' => 61, 'Man_CurInfo2_4' => 62, 'Man_HistInfo3_4' => 63, 'Man_HistInfo3_3' => 64, 'Man_HistInfo3_2' => 65, 'Man_HistInfo3_1' => 66, 'Man_Ref_Info3' => 67, 'Man_CurInfo3_1' => 68, 'Man_CurInfo3_2' => 69, 'Man_CurInfo3_3' => 70, 'Man_CurInfo3_4' => 71, 'Man_HistInfo4_4' => 72, 'Man_HistInfo4_3' => 73, 'Man_HistInfo4_2' => 74, 'Man_HistInfo4_1' => 75, 'Man_Ref_Info4' => 76, 'Man_CurInfo4_1' => 77, 'Man_CurInfo4_2' => 78, 'Man_CurInfo4_3' => 79, 'Man_CurInfo4_4' => 80, 'newpassword' => 81, 'IndDate' => 82, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, )
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
        $toNames = Wp9manIndicatorsPeer::getFieldNames($toType);
        $key = isset(Wp9manIndicatorsPeer::$fieldKeys[$fromType][$name]) ? Wp9manIndicatorsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(Wp9manIndicatorsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, Wp9manIndicatorsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return Wp9manIndicatorsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. Wp9manIndicatorsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(Wp9manIndicatorsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::ID);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::NAME);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::INSTITUTION);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::EMAIL);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MPANAME);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MPACOUNTRY);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MPALOCATION);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MPACHARACTER);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::SCUBADIVING);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::SNORKELING);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::HIKING);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::FFWATCHING);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::SEASCAPEWATCHING);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::OTHER1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::OTHER2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::OTHER3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::OTHER4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::COMNAME1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::SCINAME1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::DESCECO1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::TEMPPRES1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::COMNAME2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::SCINAME2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::DESCECO2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::TEMPPRES2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::COMNAME3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::SCINAME3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::DESCECO3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::TEMPPRES3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::COMNAME4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::SCINAME4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::DESCECO4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::TEMPPRES4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::ECOCOMNAME1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::ECODESCECO1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::RELDIS1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::ECOCOMNAME2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::ECODESCECO2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::RELDIS2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::ECOCOMNAME3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::ECODESCECO3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::RELDIS3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::ECOCOMNAME4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::ECODESCECO4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::RELDIS4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO_4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO_3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO_2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO_1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_REF_INFO1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO_1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO_2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO_3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO_4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO2_4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO2_3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO2_2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO2_1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_REF_INFO2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO2_1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO2_2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO2_3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO2_4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO3_4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO3_3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO3_2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO3_1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_REF_INFO3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO3_1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO3_2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO3_3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO3_4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO4_4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO4_3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO4_2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_HISTINFO4_1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_REF_INFO4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO4_1);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO4_2);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO4_3);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::MAN_CURINFO4_4);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::NEWPASSWORD);
            $criteria->addSelectColumn(Wp9manIndicatorsPeer::INDDATE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.Name');
            $criteria->addSelectColumn($alias . '.Institution');
            $criteria->addSelectColumn($alias . '.Email');
            $criteria->addSelectColumn($alias . '.MPAName');
            $criteria->addSelectColumn($alias . '.MPACountry');
            $criteria->addSelectColumn($alias . '.MPALocation');
            $criteria->addSelectColumn($alias . '.MPACharacter');
            $criteria->addSelectColumn($alias . '.ScubaDiving');
            $criteria->addSelectColumn($alias . '.Snorkeling');
            $criteria->addSelectColumn($alias . '.Hiking');
            $criteria->addSelectColumn($alias . '.FFWatching');
            $criteria->addSelectColumn($alias . '.SeascapeWatching');
            $criteria->addSelectColumn($alias . '.Other1');
            $criteria->addSelectColumn($alias . '.Other2');
            $criteria->addSelectColumn($alias . '.Other3');
            $criteria->addSelectColumn($alias . '.Other4');
            $criteria->addSelectColumn($alias . '.ComName1');
            $criteria->addSelectColumn($alias . '.SciName1');
            $criteria->addSelectColumn($alias . '.DescEco1');
            $criteria->addSelectColumn($alias . '.TempPres1');
            $criteria->addSelectColumn($alias . '.ComName2');
            $criteria->addSelectColumn($alias . '.SciName2');
            $criteria->addSelectColumn($alias . '.DescEco2');
            $criteria->addSelectColumn($alias . '.TempPres2');
            $criteria->addSelectColumn($alias . '.ComName3');
            $criteria->addSelectColumn($alias . '.SciName3');
            $criteria->addSelectColumn($alias . '.DescEco3');
            $criteria->addSelectColumn($alias . '.TempPres3');
            $criteria->addSelectColumn($alias . '.ComName4');
            $criteria->addSelectColumn($alias . '.SciName4');
            $criteria->addSelectColumn($alias . '.DescEco4');
            $criteria->addSelectColumn($alias . '.TempPres4');
            $criteria->addSelectColumn($alias . '.EcoComName1');
            $criteria->addSelectColumn($alias . '.EcoDescEco1');
            $criteria->addSelectColumn($alias . '.RelDis1');
            $criteria->addSelectColumn($alias . '.EcoComName2');
            $criteria->addSelectColumn($alias . '.EcoDescEco2');
            $criteria->addSelectColumn($alias . '.RelDis2');
            $criteria->addSelectColumn($alias . '.EcoComName3');
            $criteria->addSelectColumn($alias . '.EcoDescEco3');
            $criteria->addSelectColumn($alias . '.RelDis3');
            $criteria->addSelectColumn($alias . '.EcoComName4');
            $criteria->addSelectColumn($alias . '.EcoDescEco4');
            $criteria->addSelectColumn($alias . '.RelDis4');
            $criteria->addSelectColumn($alias . '.Man_HistInfo_4');
            $criteria->addSelectColumn($alias . '.Man_HistInfo_3');
            $criteria->addSelectColumn($alias . '.Man_HistInfo_2');
            $criteria->addSelectColumn($alias . '.Man_HistInfo_1');
            $criteria->addSelectColumn($alias . '.Man_Ref_Info1');
            $criteria->addSelectColumn($alias . '.Man_CurInfo_1');
            $criteria->addSelectColumn($alias . '.Man_CurInfo_2');
            $criteria->addSelectColumn($alias . '.Man_CurInfo_3');
            $criteria->addSelectColumn($alias . '.Man_CurInfo_4');
            $criteria->addSelectColumn($alias . '.Man_HistInfo2_4');
            $criteria->addSelectColumn($alias . '.Man_HistInfo2_3');
            $criteria->addSelectColumn($alias . '.Man_HistInfo2_2');
            $criteria->addSelectColumn($alias . '.Man_HistInfo2_1');
            $criteria->addSelectColumn($alias . '.Man_Ref_Info2');
            $criteria->addSelectColumn($alias . '.Man_CurInfo2_1');
            $criteria->addSelectColumn($alias . '.Man_CurInfo2_2');
            $criteria->addSelectColumn($alias . '.Man_CurInfo2_3');
            $criteria->addSelectColumn($alias . '.Man_CurInfo2_4');
            $criteria->addSelectColumn($alias . '.Man_HistInfo3_4');
            $criteria->addSelectColumn($alias . '.Man_HistInfo3_3');
            $criteria->addSelectColumn($alias . '.Man_HistInfo3_2');
            $criteria->addSelectColumn($alias . '.Man_HistInfo3_1');
            $criteria->addSelectColumn($alias . '.Man_Ref_Info3');
            $criteria->addSelectColumn($alias . '.Man_CurInfo3_1');
            $criteria->addSelectColumn($alias . '.Man_CurInfo3_2');
            $criteria->addSelectColumn($alias . '.Man_CurInfo3_3');
            $criteria->addSelectColumn($alias . '.Man_CurInfo3_4');
            $criteria->addSelectColumn($alias . '.Man_HistInfo4_4');
            $criteria->addSelectColumn($alias . '.Man_HistInfo4_3');
            $criteria->addSelectColumn($alias . '.Man_HistInfo4_2');
            $criteria->addSelectColumn($alias . '.Man_HistInfo4_1');
            $criteria->addSelectColumn($alias . '.Man_Ref_Info4');
            $criteria->addSelectColumn($alias . '.Man_CurInfo4_1');
            $criteria->addSelectColumn($alias . '.Man_CurInfo4_2');
            $criteria->addSelectColumn($alias . '.Man_CurInfo4_3');
            $criteria->addSelectColumn($alias . '.Man_CurInfo4_4');
            $criteria->addSelectColumn($alias . '.newpassword');
            $criteria->addSelectColumn($alias . '.IndDate');
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
        $criteria->setPrimaryTableName(Wp9manIndicatorsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            Wp9manIndicatorsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(Wp9manIndicatorsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(Wp9manIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Wp9manIndicators
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = Wp9manIndicatorsPeer::doSelect($critcopy, $con);
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
        return Wp9manIndicatorsPeer::populateObjects(Wp9manIndicatorsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(Wp9manIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            Wp9manIndicatorsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(Wp9manIndicatorsPeer::DATABASE_NAME);

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
     * @param Wp9manIndicators $obj A Wp9manIndicators object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            Wp9manIndicatorsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Wp9manIndicators object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Wp9manIndicators) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Wp9manIndicators object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(Wp9manIndicatorsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Wp9manIndicators Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(Wp9manIndicatorsPeer::$instances[$key])) {
                return Wp9manIndicatorsPeer::$instances[$key];
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
        foreach (Wp9manIndicatorsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        Wp9manIndicatorsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to wp9man_indicators
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
        $cls = Wp9manIndicatorsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = Wp9manIndicatorsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = Wp9manIndicatorsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                Wp9manIndicatorsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Wp9manIndicators object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = Wp9manIndicatorsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = Wp9manIndicatorsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + Wp9manIndicatorsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = Wp9manIndicatorsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            Wp9manIndicatorsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(Wp9manIndicatorsPeer::DATABASE_NAME)->getTable(Wp9manIndicatorsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseWp9manIndicatorsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseWp9manIndicatorsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \Wp9manIndicatorsTableMap());
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
        return Wp9manIndicatorsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Wp9manIndicators or Criteria object.
     *
     * @param      mixed $values Criteria or Wp9manIndicators object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(Wp9manIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Wp9manIndicators object
        }

        if ($criteria->containsKey(Wp9manIndicatorsPeer::ID) && $criteria->keyContainsValue(Wp9manIndicatorsPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.Wp9manIndicatorsPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(Wp9manIndicatorsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Wp9manIndicators or Criteria object.
     *
     * @param      mixed $values Criteria or Wp9manIndicators object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(Wp9manIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(Wp9manIndicatorsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(Wp9manIndicatorsPeer::ID);
            $value = $criteria->remove(Wp9manIndicatorsPeer::ID);
            if ($value) {
                $selectCriteria->add(Wp9manIndicatorsPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(Wp9manIndicatorsPeer::TABLE_NAME);
            }

        } else { // $values is Wp9manIndicators object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(Wp9manIndicatorsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the wp9man_indicators table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(Wp9manIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(Wp9manIndicatorsPeer::TABLE_NAME, $con, Wp9manIndicatorsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            Wp9manIndicatorsPeer::clearInstancePool();
            Wp9manIndicatorsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Wp9manIndicators or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Wp9manIndicators object or primary key or array of primary keys
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
            $con = Propel::getConnection(Wp9manIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            Wp9manIndicatorsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Wp9manIndicators) { // it's a model object
            // invalidate the cache for this single object
            Wp9manIndicatorsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(Wp9manIndicatorsPeer::DATABASE_NAME);
            $criteria->add(Wp9manIndicatorsPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                Wp9manIndicatorsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(Wp9manIndicatorsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            Wp9manIndicatorsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Wp9manIndicators object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Wp9manIndicators $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(Wp9manIndicatorsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(Wp9manIndicatorsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(Wp9manIndicatorsPeer::DATABASE_NAME, Wp9manIndicatorsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Wp9manIndicators
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = Wp9manIndicatorsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(Wp9manIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(Wp9manIndicatorsPeer::DATABASE_NAME);
        $criteria->add(Wp9manIndicatorsPeer::ID, $pk);

        $v = Wp9manIndicatorsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Wp9manIndicators[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(Wp9manIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(Wp9manIndicatorsPeer::DATABASE_NAME);
            $criteria->add(Wp9manIndicatorsPeer::ID, $pks, Criteria::IN);
            $objs = Wp9manIndicatorsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseWp9manIndicatorsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseWp9manIndicatorsPeer::buildTableMap();

