<?php


/**
 * Base static class for performing query and update operations on the 'wp9socio_indicators' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseWp9socioIndicatorsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'wp9socio_indicators';

    /** the related Propel class for this table */
    const OM_CLASS = 'Wp9socioIndicators';

    /** the related TableMap class for this table */
    const TM_CLASS = 'Wp9socioIndicatorsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 65;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 65;

    /** the column name for the id field */
    const ID = 'wp9socio_indicators.id';

    /** the column name for the Name field */
    const NAME = 'wp9socio_indicators.Name';

    /** the column name for the Institution field */
    const INSTITUTION = 'wp9socio_indicators.Institution';

    /** the column name for the Email field */
    const EMAIL = 'wp9socio_indicators.Email';

    /** the column name for the MPAName field */
    const MPANAME = 'wp9socio_indicators.MPAName';

    /** the column name for the MPACountry field */
    const MPACOUNTRY = 'wp9socio_indicators.MPACountry';

    /** the column name for the MPALocation field */
    const MPALOCATION = 'wp9socio_indicators.MPALocation';

    /** the column name for the MPACharacter field */
    const MPACHARACTER = 'wp9socio_indicators.MPACharacter';

    /** the column name for the ScubaDiving field */
    const SCUBADIVING = 'wp9socio_indicators.ScubaDiving';

    /** the column name for the Snorkeling field */
    const SNORKELING = 'wp9socio_indicators.Snorkeling';

    /** the column name for the Hiking field */
    const HIKING = 'wp9socio_indicators.Hiking';

    /** the column name for the FFWatching field */
    const FFWATCHING = 'wp9socio_indicators.FFWatching';

    /** the column name for the SeascapeWatching field */
    const SEASCAPEWATCHING = 'wp9socio_indicators.SeascapeWatching';

    /** the column name for the Other1 field */
    const OTHER1 = 'wp9socio_indicators.Other1';

    /** the column name for the Other2 field */
    const OTHER2 = 'wp9socio_indicators.Other2';

    /** the column name for the Other3 field */
    const OTHER3 = 'wp9socio_indicators.Other3';

    /** the column name for the Other4 field */
    const OTHER4 = 'wp9socio_indicators.Other4';

    /** the column name for the ComName1 field */
    const COMNAME1 = 'wp9socio_indicators.ComName1';

    /** the column name for the SciName1 field */
    const SCINAME1 = 'wp9socio_indicators.SciName1';

    /** the column name for the DescEco1 field */
    const DESCECO1 = 'wp9socio_indicators.DescEco1';

    /** the column name for the TempPres1 field */
    const TEMPPRES1 = 'wp9socio_indicators.TempPres1';

    /** the column name for the ComName2 field */
    const COMNAME2 = 'wp9socio_indicators.ComName2';

    /** the column name for the SciName2 field */
    const SCINAME2 = 'wp9socio_indicators.SciName2';

    /** the column name for the DescEco2 field */
    const DESCECO2 = 'wp9socio_indicators.DescEco2';

    /** the column name for the TempPres2 field */
    const TEMPPRES2 = 'wp9socio_indicators.TempPres2';

    /** the column name for the ComName3 field */
    const COMNAME3 = 'wp9socio_indicators.ComName3';

    /** the column name for the SciName3 field */
    const SCINAME3 = 'wp9socio_indicators.SciName3';

    /** the column name for the DescEco3 field */
    const DESCECO3 = 'wp9socio_indicators.DescEco3';

    /** the column name for the TempPres3 field */
    const TEMPPRES3 = 'wp9socio_indicators.TempPres3';

    /** the column name for the ComName4 field */
    const COMNAME4 = 'wp9socio_indicators.ComName4';

    /** the column name for the SciName4 field */
    const SCINAME4 = 'wp9socio_indicators.SciName4';

    /** the column name for the DescEco4 field */
    const DESCECO4 = 'wp9socio_indicators.DescEco4';

    /** the column name for the TempPres4 field */
    const TEMPPRES4 = 'wp9socio_indicators.TempPres4';

    /** the column name for the EcoComName1 field */
    const ECOCOMNAME1 = 'wp9socio_indicators.EcoComName1';

    /** the column name for the EcoDescEco1 field */
    const ECODESCECO1 = 'wp9socio_indicators.EcoDescEco1';

    /** the column name for the RelDis1 field */
    const RELDIS1 = 'wp9socio_indicators.RelDis1';

    /** the column name for the EcoComName2 field */
    const ECOCOMNAME2 = 'wp9socio_indicators.EcoComName2';

    /** the column name for the EcoDescEco2 field */
    const ECODESCECO2 = 'wp9socio_indicators.EcoDescEco2';

    /** the column name for the RelDis2 field */
    const RELDIS2 = 'wp9socio_indicators.RelDis2';

    /** the column name for the EcoComName3 field */
    const ECOCOMNAME3 = 'wp9socio_indicators.EcoComName3';

    /** the column name for the EcoDescEco3 field */
    const ECODESCECO3 = 'wp9socio_indicators.EcoDescEco3';

    /** the column name for the RelDis3 field */
    const RELDIS3 = 'wp9socio_indicators.RelDis3';

    /** the column name for the EcoComName4 field */
    const ECOCOMNAME4 = 'wp9socio_indicators.EcoComName4';

    /** the column name for the EcoDescEco4 field */
    const ECODESCECO4 = 'wp9socio_indicators.EcoDescEco4';

    /** the column name for the RelDis4 field */
    const RELDIS4 = 'wp9socio_indicators.RelDis4';

    /** the column name for the Socio_HistInfo_4 field */
    const SOCIO_HISTINFO_4 = 'wp9socio_indicators.Socio_HistInfo_4';

    /** the column name for the Socio_HistInfo_3 field */
    const SOCIO_HISTINFO_3 = 'wp9socio_indicators.Socio_HistInfo_3';

    /** the column name for the Socio_HistInfo_2 field */
    const SOCIO_HISTINFO_2 = 'wp9socio_indicators.Socio_HistInfo_2';

    /** the column name for the Socio_HistInfo_1 field */
    const SOCIO_HISTINFO_1 = 'wp9socio_indicators.Socio_HistInfo_1';

    /** the column name for the Socio_Ref_Info1 field */
    const SOCIO_REF_INFO1 = 'wp9socio_indicators.Socio_Ref_Info1';

    /** the column name for the Socio_CurInfo_1 field */
    const SOCIO_CURINFO_1 = 'wp9socio_indicators.Socio_CurInfo_1';

    /** the column name for the Socio_CurInfo_2 field */
    const SOCIO_CURINFO_2 = 'wp9socio_indicators.Socio_CurInfo_2';

    /** the column name for the Socio_CurInfo_3 field */
    const SOCIO_CURINFO_3 = 'wp9socio_indicators.Socio_CurInfo_3';

    /** the column name for the Socio_CurInfo_4 field */
    const SOCIO_CURINFO_4 = 'wp9socio_indicators.Socio_CurInfo_4';

    /** the column name for the Socio_HistInfo2_4 field */
    const SOCIO_HISTINFO2_4 = 'wp9socio_indicators.Socio_HistInfo2_4';

    /** the column name for the Socio_HistInfo2_3 field */
    const SOCIO_HISTINFO2_3 = 'wp9socio_indicators.Socio_HistInfo2_3';

    /** the column name for the Socio_HistInfo2_2 field */
    const SOCIO_HISTINFO2_2 = 'wp9socio_indicators.Socio_HistInfo2_2';

    /** the column name for the Socio_HistInfo2_1 field */
    const SOCIO_HISTINFO2_1 = 'wp9socio_indicators.Socio_HistInfo2_1';

    /** the column name for the Socio_Ref_Info2 field */
    const SOCIO_REF_INFO2 = 'wp9socio_indicators.Socio_Ref_Info2';

    /** the column name for the Socio_CurInfo2_1 field */
    const SOCIO_CURINFO2_1 = 'wp9socio_indicators.Socio_CurInfo2_1';

    /** the column name for the Socio_CurInfo2_2 field */
    const SOCIO_CURINFO2_2 = 'wp9socio_indicators.Socio_CurInfo2_2';

    /** the column name for the Socio_CurInfo2_3 field */
    const SOCIO_CURINFO2_3 = 'wp9socio_indicators.Socio_CurInfo2_3';

    /** the column name for the Socio_CurInfo2_4 field */
    const SOCIO_CURINFO2_4 = 'wp9socio_indicators.Socio_CurInfo2_4';

    /** the column name for the newpassword field */
    const NEWPASSWORD = 'wp9socio_indicators.newpassword';

    /** the column name for the IndDate field */
    const INDDATE = 'wp9socio_indicators.IndDate';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Wp9socioIndicators objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Wp9socioIndicators[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. Wp9socioIndicatorsPeer::$fieldNames[Wp9socioIndicatorsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'Institution', 'Email', 'Mpaname', 'Mpacountry', 'Mpalocation', 'Mpacharacter', 'Scubadiving', 'Snorkeling', 'Hiking', 'Ffwatching', 'Seascapewatching', 'Other1', 'Other2', 'Other3', 'Other4', 'Comname1', 'Sciname1', 'Desceco1', 'Temppres1', 'Comname2', 'Sciname2', 'Desceco2', 'Temppres2', 'Comname3', 'Sciname3', 'Desceco3', 'Temppres3', 'Comname4', 'Sciname4', 'Desceco4', 'Temppres4', 'Ecocomname1', 'Ecodesceco1', 'Reldis1', 'Ecocomname2', 'Ecodesceco2', 'Reldis2', 'Ecocomname3', 'Ecodesceco3', 'Reldis3', 'Ecocomname4', 'Ecodesceco4', 'Reldis4', 'SocioHistinfo4', 'SocioHistinfo3', 'SocioHistinfo2', 'SocioHistinfo1', 'SocioRefInfo1', 'SocioCurinfo1', 'SocioCurinfo2', 'SocioCurinfo3', 'SocioCurinfo4', 'SocioHistinfo24', 'SocioHistinfo23', 'SocioHistinfo22', 'SocioHistinfo21', 'SocioRefInfo2', 'SocioCurinfo21', 'SocioCurinfo22', 'SocioCurinfo23', 'SocioCurinfo24', 'Newpassword', 'Inddate', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'name', 'institution', 'email', 'mpaname', 'mpacountry', 'mpalocation', 'mpacharacter', 'scubadiving', 'snorkeling', 'hiking', 'ffwatching', 'seascapewatching', 'other1', 'other2', 'other3', 'other4', 'comname1', 'sciname1', 'desceco1', 'temppres1', 'comname2', 'sciname2', 'desceco2', 'temppres2', 'comname3', 'sciname3', 'desceco3', 'temppres3', 'comname4', 'sciname4', 'desceco4', 'temppres4', 'ecocomname1', 'ecodesceco1', 'reldis1', 'ecocomname2', 'ecodesceco2', 'reldis2', 'ecocomname3', 'ecodesceco3', 'reldis3', 'ecocomname4', 'ecodesceco4', 'reldis4', 'socioHistinfo4', 'socioHistinfo3', 'socioHistinfo2', 'socioHistinfo1', 'socioRefInfo1', 'socioCurinfo1', 'socioCurinfo2', 'socioCurinfo3', 'socioCurinfo4', 'socioHistinfo24', 'socioHistinfo23', 'socioHistinfo22', 'socioHistinfo21', 'socioRefInfo2', 'socioCurinfo21', 'socioCurinfo22', 'socioCurinfo23', 'socioCurinfo24', 'newpassword', 'inddate', ),
        BasePeer::TYPE_COLNAME => array (Wp9socioIndicatorsPeer::ID, Wp9socioIndicatorsPeer::NAME, Wp9socioIndicatorsPeer::INSTITUTION, Wp9socioIndicatorsPeer::EMAIL, Wp9socioIndicatorsPeer::MPANAME, Wp9socioIndicatorsPeer::MPACOUNTRY, Wp9socioIndicatorsPeer::MPALOCATION, Wp9socioIndicatorsPeer::MPACHARACTER, Wp9socioIndicatorsPeer::SCUBADIVING, Wp9socioIndicatorsPeer::SNORKELING, Wp9socioIndicatorsPeer::HIKING, Wp9socioIndicatorsPeer::FFWATCHING, Wp9socioIndicatorsPeer::SEASCAPEWATCHING, Wp9socioIndicatorsPeer::OTHER1, Wp9socioIndicatorsPeer::OTHER2, Wp9socioIndicatorsPeer::OTHER3, Wp9socioIndicatorsPeer::OTHER4, Wp9socioIndicatorsPeer::COMNAME1, Wp9socioIndicatorsPeer::SCINAME1, Wp9socioIndicatorsPeer::DESCECO1, Wp9socioIndicatorsPeer::TEMPPRES1, Wp9socioIndicatorsPeer::COMNAME2, Wp9socioIndicatorsPeer::SCINAME2, Wp9socioIndicatorsPeer::DESCECO2, Wp9socioIndicatorsPeer::TEMPPRES2, Wp9socioIndicatorsPeer::COMNAME3, Wp9socioIndicatorsPeer::SCINAME3, Wp9socioIndicatorsPeer::DESCECO3, Wp9socioIndicatorsPeer::TEMPPRES3, Wp9socioIndicatorsPeer::COMNAME4, Wp9socioIndicatorsPeer::SCINAME4, Wp9socioIndicatorsPeer::DESCECO4, Wp9socioIndicatorsPeer::TEMPPRES4, Wp9socioIndicatorsPeer::ECOCOMNAME1, Wp9socioIndicatorsPeer::ECODESCECO1, Wp9socioIndicatorsPeer::RELDIS1, Wp9socioIndicatorsPeer::ECOCOMNAME2, Wp9socioIndicatorsPeer::ECODESCECO2, Wp9socioIndicatorsPeer::RELDIS2, Wp9socioIndicatorsPeer::ECOCOMNAME3, Wp9socioIndicatorsPeer::ECODESCECO3, Wp9socioIndicatorsPeer::RELDIS3, Wp9socioIndicatorsPeer::ECOCOMNAME4, Wp9socioIndicatorsPeer::ECODESCECO4, Wp9socioIndicatorsPeer::RELDIS4, Wp9socioIndicatorsPeer::SOCIO_HISTINFO_4, Wp9socioIndicatorsPeer::SOCIO_HISTINFO_3, Wp9socioIndicatorsPeer::SOCIO_HISTINFO_2, Wp9socioIndicatorsPeer::SOCIO_HISTINFO_1, Wp9socioIndicatorsPeer::SOCIO_REF_INFO1, Wp9socioIndicatorsPeer::SOCIO_CURINFO_1, Wp9socioIndicatorsPeer::SOCIO_CURINFO_2, Wp9socioIndicatorsPeer::SOCIO_CURINFO_3, Wp9socioIndicatorsPeer::SOCIO_CURINFO_4, Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_4, Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_3, Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_2, Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_1, Wp9socioIndicatorsPeer::SOCIO_REF_INFO2, Wp9socioIndicatorsPeer::SOCIO_CURINFO2_1, Wp9socioIndicatorsPeer::SOCIO_CURINFO2_2, Wp9socioIndicatorsPeer::SOCIO_CURINFO2_3, Wp9socioIndicatorsPeer::SOCIO_CURINFO2_4, Wp9socioIndicatorsPeer::NEWPASSWORD, Wp9socioIndicatorsPeer::INDDATE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NAME', 'INSTITUTION', 'EMAIL', 'MPANAME', 'MPACOUNTRY', 'MPALOCATION', 'MPACHARACTER', 'SCUBADIVING', 'SNORKELING', 'HIKING', 'FFWATCHING', 'SEASCAPEWATCHING', 'OTHER1', 'OTHER2', 'OTHER3', 'OTHER4', 'COMNAME1', 'SCINAME1', 'DESCECO1', 'TEMPPRES1', 'COMNAME2', 'SCINAME2', 'DESCECO2', 'TEMPPRES2', 'COMNAME3', 'SCINAME3', 'DESCECO3', 'TEMPPRES3', 'COMNAME4', 'SCINAME4', 'DESCECO4', 'TEMPPRES4', 'ECOCOMNAME1', 'ECODESCECO1', 'RELDIS1', 'ECOCOMNAME2', 'ECODESCECO2', 'RELDIS2', 'ECOCOMNAME3', 'ECODESCECO3', 'RELDIS3', 'ECOCOMNAME4', 'ECODESCECO4', 'RELDIS4', 'SOCIO_HISTINFO_4', 'SOCIO_HISTINFO_3', 'SOCIO_HISTINFO_2', 'SOCIO_HISTINFO_1', 'SOCIO_REF_INFO1', 'SOCIO_CURINFO_1', 'SOCIO_CURINFO_2', 'SOCIO_CURINFO_3', 'SOCIO_CURINFO_4', 'SOCIO_HISTINFO2_4', 'SOCIO_HISTINFO2_3', 'SOCIO_HISTINFO2_2', 'SOCIO_HISTINFO2_1', 'SOCIO_REF_INFO2', 'SOCIO_CURINFO2_1', 'SOCIO_CURINFO2_2', 'SOCIO_CURINFO2_3', 'SOCIO_CURINFO2_4', 'NEWPASSWORD', 'INDDATE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'Name', 'Institution', 'Email', 'MPAName', 'MPACountry', 'MPALocation', 'MPACharacter', 'ScubaDiving', 'Snorkeling', 'Hiking', 'FFWatching', 'SeascapeWatching', 'Other1', 'Other2', 'Other3', 'Other4', 'ComName1', 'SciName1', 'DescEco1', 'TempPres1', 'ComName2', 'SciName2', 'DescEco2', 'TempPres2', 'ComName3', 'SciName3', 'DescEco3', 'TempPres3', 'ComName4', 'SciName4', 'DescEco4', 'TempPres4', 'EcoComName1', 'EcoDescEco1', 'RelDis1', 'EcoComName2', 'EcoDescEco2', 'RelDis2', 'EcoComName3', 'EcoDescEco3', 'RelDis3', 'EcoComName4', 'EcoDescEco4', 'RelDis4', 'Socio_HistInfo_4', 'Socio_HistInfo_3', 'Socio_HistInfo_2', 'Socio_HistInfo_1', 'Socio_Ref_Info1', 'Socio_CurInfo_1', 'Socio_CurInfo_2', 'Socio_CurInfo_3', 'Socio_CurInfo_4', 'Socio_HistInfo2_4', 'Socio_HistInfo2_3', 'Socio_HistInfo2_2', 'Socio_HistInfo2_1', 'Socio_Ref_Info2', 'Socio_CurInfo2_1', 'Socio_CurInfo2_2', 'Socio_CurInfo2_3', 'Socio_CurInfo2_4', 'newpassword', 'IndDate', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. Wp9socioIndicatorsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'Institution' => 2, 'Email' => 3, 'Mpaname' => 4, 'Mpacountry' => 5, 'Mpalocation' => 6, 'Mpacharacter' => 7, 'Scubadiving' => 8, 'Snorkeling' => 9, 'Hiking' => 10, 'Ffwatching' => 11, 'Seascapewatching' => 12, 'Other1' => 13, 'Other2' => 14, 'Other3' => 15, 'Other4' => 16, 'Comname1' => 17, 'Sciname1' => 18, 'Desceco1' => 19, 'Temppres1' => 20, 'Comname2' => 21, 'Sciname2' => 22, 'Desceco2' => 23, 'Temppres2' => 24, 'Comname3' => 25, 'Sciname3' => 26, 'Desceco3' => 27, 'Temppres3' => 28, 'Comname4' => 29, 'Sciname4' => 30, 'Desceco4' => 31, 'Temppres4' => 32, 'Ecocomname1' => 33, 'Ecodesceco1' => 34, 'Reldis1' => 35, 'Ecocomname2' => 36, 'Ecodesceco2' => 37, 'Reldis2' => 38, 'Ecocomname3' => 39, 'Ecodesceco3' => 40, 'Reldis3' => 41, 'Ecocomname4' => 42, 'Ecodesceco4' => 43, 'Reldis4' => 44, 'SocioHistinfo4' => 45, 'SocioHistinfo3' => 46, 'SocioHistinfo2' => 47, 'SocioHistinfo1' => 48, 'SocioRefInfo1' => 49, 'SocioCurinfo1' => 50, 'SocioCurinfo2' => 51, 'SocioCurinfo3' => 52, 'SocioCurinfo4' => 53, 'SocioHistinfo24' => 54, 'SocioHistinfo23' => 55, 'SocioHistinfo22' => 56, 'SocioHistinfo21' => 57, 'SocioRefInfo2' => 58, 'SocioCurinfo21' => 59, 'SocioCurinfo22' => 60, 'SocioCurinfo23' => 61, 'SocioCurinfo24' => 62, 'Newpassword' => 63, 'Inddate' => 64, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'name' => 1, 'institution' => 2, 'email' => 3, 'mpaname' => 4, 'mpacountry' => 5, 'mpalocation' => 6, 'mpacharacter' => 7, 'scubadiving' => 8, 'snorkeling' => 9, 'hiking' => 10, 'ffwatching' => 11, 'seascapewatching' => 12, 'other1' => 13, 'other2' => 14, 'other3' => 15, 'other4' => 16, 'comname1' => 17, 'sciname1' => 18, 'desceco1' => 19, 'temppres1' => 20, 'comname2' => 21, 'sciname2' => 22, 'desceco2' => 23, 'temppres2' => 24, 'comname3' => 25, 'sciname3' => 26, 'desceco3' => 27, 'temppres3' => 28, 'comname4' => 29, 'sciname4' => 30, 'desceco4' => 31, 'temppres4' => 32, 'ecocomname1' => 33, 'ecodesceco1' => 34, 'reldis1' => 35, 'ecocomname2' => 36, 'ecodesceco2' => 37, 'reldis2' => 38, 'ecocomname3' => 39, 'ecodesceco3' => 40, 'reldis3' => 41, 'ecocomname4' => 42, 'ecodesceco4' => 43, 'reldis4' => 44, 'socioHistinfo4' => 45, 'socioHistinfo3' => 46, 'socioHistinfo2' => 47, 'socioHistinfo1' => 48, 'socioRefInfo1' => 49, 'socioCurinfo1' => 50, 'socioCurinfo2' => 51, 'socioCurinfo3' => 52, 'socioCurinfo4' => 53, 'socioHistinfo24' => 54, 'socioHistinfo23' => 55, 'socioHistinfo22' => 56, 'socioHistinfo21' => 57, 'socioRefInfo2' => 58, 'socioCurinfo21' => 59, 'socioCurinfo22' => 60, 'socioCurinfo23' => 61, 'socioCurinfo24' => 62, 'newpassword' => 63, 'inddate' => 64, ),
        BasePeer::TYPE_COLNAME => array (Wp9socioIndicatorsPeer::ID => 0, Wp9socioIndicatorsPeer::NAME => 1, Wp9socioIndicatorsPeer::INSTITUTION => 2, Wp9socioIndicatorsPeer::EMAIL => 3, Wp9socioIndicatorsPeer::MPANAME => 4, Wp9socioIndicatorsPeer::MPACOUNTRY => 5, Wp9socioIndicatorsPeer::MPALOCATION => 6, Wp9socioIndicatorsPeer::MPACHARACTER => 7, Wp9socioIndicatorsPeer::SCUBADIVING => 8, Wp9socioIndicatorsPeer::SNORKELING => 9, Wp9socioIndicatorsPeer::HIKING => 10, Wp9socioIndicatorsPeer::FFWATCHING => 11, Wp9socioIndicatorsPeer::SEASCAPEWATCHING => 12, Wp9socioIndicatorsPeer::OTHER1 => 13, Wp9socioIndicatorsPeer::OTHER2 => 14, Wp9socioIndicatorsPeer::OTHER3 => 15, Wp9socioIndicatorsPeer::OTHER4 => 16, Wp9socioIndicatorsPeer::COMNAME1 => 17, Wp9socioIndicatorsPeer::SCINAME1 => 18, Wp9socioIndicatorsPeer::DESCECO1 => 19, Wp9socioIndicatorsPeer::TEMPPRES1 => 20, Wp9socioIndicatorsPeer::COMNAME2 => 21, Wp9socioIndicatorsPeer::SCINAME2 => 22, Wp9socioIndicatorsPeer::DESCECO2 => 23, Wp9socioIndicatorsPeer::TEMPPRES2 => 24, Wp9socioIndicatorsPeer::COMNAME3 => 25, Wp9socioIndicatorsPeer::SCINAME3 => 26, Wp9socioIndicatorsPeer::DESCECO3 => 27, Wp9socioIndicatorsPeer::TEMPPRES3 => 28, Wp9socioIndicatorsPeer::COMNAME4 => 29, Wp9socioIndicatorsPeer::SCINAME4 => 30, Wp9socioIndicatorsPeer::DESCECO4 => 31, Wp9socioIndicatorsPeer::TEMPPRES4 => 32, Wp9socioIndicatorsPeer::ECOCOMNAME1 => 33, Wp9socioIndicatorsPeer::ECODESCECO1 => 34, Wp9socioIndicatorsPeer::RELDIS1 => 35, Wp9socioIndicatorsPeer::ECOCOMNAME2 => 36, Wp9socioIndicatorsPeer::ECODESCECO2 => 37, Wp9socioIndicatorsPeer::RELDIS2 => 38, Wp9socioIndicatorsPeer::ECOCOMNAME3 => 39, Wp9socioIndicatorsPeer::ECODESCECO3 => 40, Wp9socioIndicatorsPeer::RELDIS3 => 41, Wp9socioIndicatorsPeer::ECOCOMNAME4 => 42, Wp9socioIndicatorsPeer::ECODESCECO4 => 43, Wp9socioIndicatorsPeer::RELDIS4 => 44, Wp9socioIndicatorsPeer::SOCIO_HISTINFO_4 => 45, Wp9socioIndicatorsPeer::SOCIO_HISTINFO_3 => 46, Wp9socioIndicatorsPeer::SOCIO_HISTINFO_2 => 47, Wp9socioIndicatorsPeer::SOCIO_HISTINFO_1 => 48, Wp9socioIndicatorsPeer::SOCIO_REF_INFO1 => 49, Wp9socioIndicatorsPeer::SOCIO_CURINFO_1 => 50, Wp9socioIndicatorsPeer::SOCIO_CURINFO_2 => 51, Wp9socioIndicatorsPeer::SOCIO_CURINFO_3 => 52, Wp9socioIndicatorsPeer::SOCIO_CURINFO_4 => 53, Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_4 => 54, Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_3 => 55, Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_2 => 56, Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_1 => 57, Wp9socioIndicatorsPeer::SOCIO_REF_INFO2 => 58, Wp9socioIndicatorsPeer::SOCIO_CURINFO2_1 => 59, Wp9socioIndicatorsPeer::SOCIO_CURINFO2_2 => 60, Wp9socioIndicatorsPeer::SOCIO_CURINFO2_3 => 61, Wp9socioIndicatorsPeer::SOCIO_CURINFO2_4 => 62, Wp9socioIndicatorsPeer::NEWPASSWORD => 63, Wp9socioIndicatorsPeer::INDDATE => 64, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NAME' => 1, 'INSTITUTION' => 2, 'EMAIL' => 3, 'MPANAME' => 4, 'MPACOUNTRY' => 5, 'MPALOCATION' => 6, 'MPACHARACTER' => 7, 'SCUBADIVING' => 8, 'SNORKELING' => 9, 'HIKING' => 10, 'FFWATCHING' => 11, 'SEASCAPEWATCHING' => 12, 'OTHER1' => 13, 'OTHER2' => 14, 'OTHER3' => 15, 'OTHER4' => 16, 'COMNAME1' => 17, 'SCINAME1' => 18, 'DESCECO1' => 19, 'TEMPPRES1' => 20, 'COMNAME2' => 21, 'SCINAME2' => 22, 'DESCECO2' => 23, 'TEMPPRES2' => 24, 'COMNAME3' => 25, 'SCINAME3' => 26, 'DESCECO3' => 27, 'TEMPPRES3' => 28, 'COMNAME4' => 29, 'SCINAME4' => 30, 'DESCECO4' => 31, 'TEMPPRES4' => 32, 'ECOCOMNAME1' => 33, 'ECODESCECO1' => 34, 'RELDIS1' => 35, 'ECOCOMNAME2' => 36, 'ECODESCECO2' => 37, 'RELDIS2' => 38, 'ECOCOMNAME3' => 39, 'ECODESCECO3' => 40, 'RELDIS3' => 41, 'ECOCOMNAME4' => 42, 'ECODESCECO4' => 43, 'RELDIS4' => 44, 'SOCIO_HISTINFO_4' => 45, 'SOCIO_HISTINFO_3' => 46, 'SOCIO_HISTINFO_2' => 47, 'SOCIO_HISTINFO_1' => 48, 'SOCIO_REF_INFO1' => 49, 'SOCIO_CURINFO_1' => 50, 'SOCIO_CURINFO_2' => 51, 'SOCIO_CURINFO_3' => 52, 'SOCIO_CURINFO_4' => 53, 'SOCIO_HISTINFO2_4' => 54, 'SOCIO_HISTINFO2_3' => 55, 'SOCIO_HISTINFO2_2' => 56, 'SOCIO_HISTINFO2_1' => 57, 'SOCIO_REF_INFO2' => 58, 'SOCIO_CURINFO2_1' => 59, 'SOCIO_CURINFO2_2' => 60, 'SOCIO_CURINFO2_3' => 61, 'SOCIO_CURINFO2_4' => 62, 'NEWPASSWORD' => 63, 'INDDATE' => 64, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'Name' => 1, 'Institution' => 2, 'Email' => 3, 'MPAName' => 4, 'MPACountry' => 5, 'MPALocation' => 6, 'MPACharacter' => 7, 'ScubaDiving' => 8, 'Snorkeling' => 9, 'Hiking' => 10, 'FFWatching' => 11, 'SeascapeWatching' => 12, 'Other1' => 13, 'Other2' => 14, 'Other3' => 15, 'Other4' => 16, 'ComName1' => 17, 'SciName1' => 18, 'DescEco1' => 19, 'TempPres1' => 20, 'ComName2' => 21, 'SciName2' => 22, 'DescEco2' => 23, 'TempPres2' => 24, 'ComName3' => 25, 'SciName3' => 26, 'DescEco3' => 27, 'TempPres3' => 28, 'ComName4' => 29, 'SciName4' => 30, 'DescEco4' => 31, 'TempPres4' => 32, 'EcoComName1' => 33, 'EcoDescEco1' => 34, 'RelDis1' => 35, 'EcoComName2' => 36, 'EcoDescEco2' => 37, 'RelDis2' => 38, 'EcoComName3' => 39, 'EcoDescEco3' => 40, 'RelDis3' => 41, 'EcoComName4' => 42, 'EcoDescEco4' => 43, 'RelDis4' => 44, 'Socio_HistInfo_4' => 45, 'Socio_HistInfo_3' => 46, 'Socio_HistInfo_2' => 47, 'Socio_HistInfo_1' => 48, 'Socio_Ref_Info1' => 49, 'Socio_CurInfo_1' => 50, 'Socio_CurInfo_2' => 51, 'Socio_CurInfo_3' => 52, 'Socio_CurInfo_4' => 53, 'Socio_HistInfo2_4' => 54, 'Socio_HistInfo2_3' => 55, 'Socio_HistInfo2_2' => 56, 'Socio_HistInfo2_1' => 57, 'Socio_Ref_Info2' => 58, 'Socio_CurInfo2_1' => 59, 'Socio_CurInfo2_2' => 60, 'Socio_CurInfo2_3' => 61, 'Socio_CurInfo2_4' => 62, 'newpassword' => 63, 'IndDate' => 64, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, )
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
        $toNames = Wp9socioIndicatorsPeer::getFieldNames($toType);
        $key = isset(Wp9socioIndicatorsPeer::$fieldKeys[$fromType][$name]) ? Wp9socioIndicatorsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(Wp9socioIndicatorsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, Wp9socioIndicatorsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return Wp9socioIndicatorsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. Wp9socioIndicatorsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(Wp9socioIndicatorsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::ID);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::NAME);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::INSTITUTION);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::EMAIL);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::MPANAME);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::MPACOUNTRY);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::MPALOCATION);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::MPACHARACTER);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SCUBADIVING);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SNORKELING);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::HIKING);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::FFWATCHING);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SEASCAPEWATCHING);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::OTHER1);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::OTHER2);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::OTHER3);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::OTHER4);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::COMNAME1);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SCINAME1);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::DESCECO1);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::TEMPPRES1);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::COMNAME2);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SCINAME2);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::DESCECO2);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::TEMPPRES2);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::COMNAME3);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SCINAME3);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::DESCECO3);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::TEMPPRES3);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::COMNAME4);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SCINAME4);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::DESCECO4);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::TEMPPRES4);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::ECOCOMNAME1);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::ECODESCECO1);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::RELDIS1);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::ECOCOMNAME2);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::ECODESCECO2);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::RELDIS2);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::ECOCOMNAME3);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::ECODESCECO3);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::RELDIS3);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::ECOCOMNAME4);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::ECODESCECO4);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::RELDIS4);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_4);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_3);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_2);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_HISTINFO_1);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_REF_INFO1);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_CURINFO_1);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_CURINFO_2);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_CURINFO_3);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_CURINFO_4);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_4);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_3);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_2);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_HISTINFO2_1);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_REF_INFO2);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_1);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_2);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_3);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::SOCIO_CURINFO2_4);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::NEWPASSWORD);
            $criteria->addSelectColumn(Wp9socioIndicatorsPeer::INDDATE);
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
            $criteria->addSelectColumn($alias . '.Socio_HistInfo_4');
            $criteria->addSelectColumn($alias . '.Socio_HistInfo_3');
            $criteria->addSelectColumn($alias . '.Socio_HistInfo_2');
            $criteria->addSelectColumn($alias . '.Socio_HistInfo_1');
            $criteria->addSelectColumn($alias . '.Socio_Ref_Info1');
            $criteria->addSelectColumn($alias . '.Socio_CurInfo_1');
            $criteria->addSelectColumn($alias . '.Socio_CurInfo_2');
            $criteria->addSelectColumn($alias . '.Socio_CurInfo_3');
            $criteria->addSelectColumn($alias . '.Socio_CurInfo_4');
            $criteria->addSelectColumn($alias . '.Socio_HistInfo2_4');
            $criteria->addSelectColumn($alias . '.Socio_HistInfo2_3');
            $criteria->addSelectColumn($alias . '.Socio_HistInfo2_2');
            $criteria->addSelectColumn($alias . '.Socio_HistInfo2_1');
            $criteria->addSelectColumn($alias . '.Socio_Ref_Info2');
            $criteria->addSelectColumn($alias . '.Socio_CurInfo2_1');
            $criteria->addSelectColumn($alias . '.Socio_CurInfo2_2');
            $criteria->addSelectColumn($alias . '.Socio_CurInfo2_3');
            $criteria->addSelectColumn($alias . '.Socio_CurInfo2_4');
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
        $criteria->setPrimaryTableName(Wp9socioIndicatorsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            Wp9socioIndicatorsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(Wp9socioIndicatorsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(Wp9socioIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Wp9socioIndicators
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = Wp9socioIndicatorsPeer::doSelect($critcopy, $con);
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
        return Wp9socioIndicatorsPeer::populateObjects(Wp9socioIndicatorsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(Wp9socioIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            Wp9socioIndicatorsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(Wp9socioIndicatorsPeer::DATABASE_NAME);

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
     * @param Wp9socioIndicators $obj A Wp9socioIndicators object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            Wp9socioIndicatorsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Wp9socioIndicators object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Wp9socioIndicators) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Wp9socioIndicators object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(Wp9socioIndicatorsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Wp9socioIndicators Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(Wp9socioIndicatorsPeer::$instances[$key])) {
                return Wp9socioIndicatorsPeer::$instances[$key];
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
        foreach (Wp9socioIndicatorsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        Wp9socioIndicatorsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to wp9socio_indicators
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
        $cls = Wp9socioIndicatorsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = Wp9socioIndicatorsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = Wp9socioIndicatorsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                Wp9socioIndicatorsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Wp9socioIndicators object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = Wp9socioIndicatorsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = Wp9socioIndicatorsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + Wp9socioIndicatorsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = Wp9socioIndicatorsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            Wp9socioIndicatorsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(Wp9socioIndicatorsPeer::DATABASE_NAME)->getTable(Wp9socioIndicatorsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseWp9socioIndicatorsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseWp9socioIndicatorsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \Wp9socioIndicatorsTableMap());
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
        return Wp9socioIndicatorsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Wp9socioIndicators or Criteria object.
     *
     * @param      mixed $values Criteria or Wp9socioIndicators object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(Wp9socioIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Wp9socioIndicators object
        }

        if ($criteria->containsKey(Wp9socioIndicatorsPeer::ID) && $criteria->keyContainsValue(Wp9socioIndicatorsPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.Wp9socioIndicatorsPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(Wp9socioIndicatorsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Wp9socioIndicators or Criteria object.
     *
     * @param      mixed $values Criteria or Wp9socioIndicators object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(Wp9socioIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(Wp9socioIndicatorsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(Wp9socioIndicatorsPeer::ID);
            $value = $criteria->remove(Wp9socioIndicatorsPeer::ID);
            if ($value) {
                $selectCriteria->add(Wp9socioIndicatorsPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(Wp9socioIndicatorsPeer::TABLE_NAME);
            }

        } else { // $values is Wp9socioIndicators object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(Wp9socioIndicatorsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the wp9socio_indicators table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(Wp9socioIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(Wp9socioIndicatorsPeer::TABLE_NAME, $con, Wp9socioIndicatorsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            Wp9socioIndicatorsPeer::clearInstancePool();
            Wp9socioIndicatorsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Wp9socioIndicators or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Wp9socioIndicators object or primary key or array of primary keys
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
            $con = Propel::getConnection(Wp9socioIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            Wp9socioIndicatorsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Wp9socioIndicators) { // it's a model object
            // invalidate the cache for this single object
            Wp9socioIndicatorsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(Wp9socioIndicatorsPeer::DATABASE_NAME);
            $criteria->add(Wp9socioIndicatorsPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                Wp9socioIndicatorsPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(Wp9socioIndicatorsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            Wp9socioIndicatorsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Wp9socioIndicators object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Wp9socioIndicators $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(Wp9socioIndicatorsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(Wp9socioIndicatorsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(Wp9socioIndicatorsPeer::DATABASE_NAME, Wp9socioIndicatorsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Wp9socioIndicators
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = Wp9socioIndicatorsPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(Wp9socioIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(Wp9socioIndicatorsPeer::DATABASE_NAME);
        $criteria->add(Wp9socioIndicatorsPeer::ID, $pk);

        $v = Wp9socioIndicatorsPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Wp9socioIndicators[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(Wp9socioIndicatorsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(Wp9socioIndicatorsPeer::DATABASE_NAME);
            $criteria->add(Wp9socioIndicatorsPeer::ID, $pks, Criteria::IN);
            $objs = Wp9socioIndicatorsPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseWp9socioIndicatorsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseWp9socioIndicatorsPeer::buildTableMap();

