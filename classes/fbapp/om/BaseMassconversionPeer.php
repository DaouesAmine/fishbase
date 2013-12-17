<?php


/**
 * Base static class for performing query and update operations on the 'massconversion' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseMassconversionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'massconversion';

    /** the related Propel class for this table */
    const OM_CLASS = 'Massconversion';

    /** the related TableMap class for this table */
    const TM_CLASS = 'MassconversionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 55;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 55;

    /** the column name for the RecordNo field */
    const RECORDNO = 'massconversion.RecordNo';

    /** the column name for the Genus field */
    const GENUS = 'massconversion.Genus';

    /** the column name for the Species field */
    const SPECIES = 'massconversion.Species';

    /** the column name for the NameUsed field */
    const NAMEUSED = 'massconversion.NameUsed';

    /** the column name for the Speccode field */
    const SPECCODE = 'massconversion.Speccode';

    /** the column name for the StockCode field */
    const STOCKCODE = 'massconversion.StockCode';

    /** the column name for the MassConvMainRef field */
    const MASSCONVMAINREF = 'massconversion.MassConvMainRef';

    /** the column name for the MassConvRefNo field */
    const MASSCONVREFNO = 'massconversion.MassConvRefNo';

    /** the column name for the Locality field */
    const LOCALITY = 'massconversion.Locality';

    /** the column name for the Country field */
    const COUNTRY = 'massconversion.Country';

    /** the column name for the C_code field */
    const C_CODE = 'massconversion.C_code';

    /** the column name for the Sex field */
    const SEX = 'massconversion.Sex';

    /** the column name for the LifeStage field */
    const LIFESTAGE = 'massconversion.LifeStage';

    /** the column name for the DM_WM field */
    const DM_WM = 'massconversion.DM_WM';

    /** the column name for the DM_WMcalc field */
    const DM_WMCALC = 'massconversion.DM_WMcalc';

    /** the column name for the AFDM_DM field */
    const AFDM_DM = 'massconversion.AFDM_DM';

    /** the column name for the AFDM_DMcalc field */
    const AFDM_DMCALC = 'massconversion.AFDM_DMcalc';

    /** the column name for the AFDM_WM field */
    const AFDM_WM = 'massconversion.AFDM_WM';

    /** the column name for the AFDM_WMcalc field */
    const AFDM_WMCALC = 'massconversion.AFDM_WMcalc';

    /** the column name for the Protein_DM field */
    const PROTEIN_DM = 'massconversion.Protein_DM';

    /** the column name for the Protein_DMcalc field */
    const PROTEIN_DMCALC = 'massconversion.Protein_DMcalc';

    /** the column name for the Carbhydr_DM field */
    const CARBHYDR_DM = 'massconversion.Carbhydr_DM';

    /** the column name for the Carbhydr_DMcalc field */
    const CARBHYDR_DMCALC = 'massconversion.Carbhydr_DMcalc';

    /** the column name for the Lipid_DM field */
    const LIPID_DM = 'massconversion.Lipid_DM';

    /** the column name for the Lipid_DMcalc field */
    const LIPID_DMCALC = 'massconversion.Lipid_DMcalc';

    /** the column name for the C_DM field */
    const C_DM = 'massconversion.C_DM';

    /** the column name for the C_DMcalc field */
    const C_DMCALC = 'massconversion.C_DMcalc';

    /** the column name for the N_DM field */
    const N_DM = 'massconversion.N_DM';

    /** the column name for the N_DMcalc field */
    const N_DMCALC = 'massconversion.N_DMcalc';

    /** the column name for the P_DM field */
    const P_DM = 'massconversion.P_DM';

    /** the column name for the P_DMcalc field */
    const P_DMCALC = 'massconversion.P_DMcalc';

    /** the column name for the C_AFDM field */
    const C_AFDM = 'massconversion.C_AFDM';

    /** the column name for the C_AFDMcalc field */
    const C_AFDMCALC = 'massconversion.C_AFDMcalc';

    /** the column name for the N_AFDM field */
    const N_AFDM = 'massconversion.N_AFDM';

    /** the column name for the N_AFDMcalc field */
    const N_AFDMCALC = 'massconversion.N_AFDMcalc';

    /** the column name for the P_AFDM field */
    const P_AFDM = 'massconversion.P_AFDM';

    /** the column name for the P_AFDMcalc field */
    const P_AFDMCALC = 'massconversion.P_AFDMcalc';

    /** the column name for the J_mgWM field */
    const J_MGWM = 'massconversion.J_mgWM';

    /** the column name for the J_mgWMcalc field */
    const J_MGWMCALC = 'massconversion.J_mgWMcalc';

    /** the column name for the J_mgDM field */
    const J_MGDM = 'massconversion.J_mgDM';

    /** the column name for the J_mgDMcalc field */
    const J_MGDMCALC = 'massconversion.J_mgDMcalc';

    /** the column name for the J_mgAFDM field */
    const J_MGAFDM = 'massconversion.J_mgAFDM';

    /** the column name for the J_mgAFDMcalc field */
    const J_MGAFDMCALC = 'massconversion.J_mgAFDMcalc';

    /** the column name for the J_mgC field */
    const J_MGC = 'massconversion.J_mgC';

    /** the column name for the J_mgCcalc field */
    const J_MGCCALC = 'massconversion.J_mgCcalc';

    /** the column name for the C_Nmass field */
    const C_NMASS = 'massconversion.C_Nmass';

    /** the column name for the C_Pmass field */
    const C_PMASS = 'massconversion.C_Pmass';

    /** the column name for the N_Pmass field */
    const N_PMASS = 'massconversion.N_Pmass';

    /** the column name for the Comments field */
    const COMMENTS = 'massconversion.Comments';

    /** the column name for the Entered field */
    const ENTERED = 'massconversion.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'massconversion.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'massconversion.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'massconversion.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'massconversion.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'massconversion.DateChecked';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Massconversion objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Massconversion[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. MassconversionPeer::$fieldNames[MassconversionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Recordno', 'Genus', 'Species', 'Nameused', 'Speccode', 'Stockcode', 'Massconvmainref', 'Massconvrefno', 'Locality', 'Country', 'CCode', 'Sex', 'Lifestage', 'DmWm', 'DmWmcalc', 'AfdmDm', 'AfdmDmcalc', 'AfdmWm', 'AfdmWmcalc', 'ProteinDm', 'ProteinDmcalc', 'CarbhydrDm', 'CarbhydrDmcalc', 'LipidDm', 'LipidDmcalc', 'CDm', 'CDmcalc', 'NDm', 'NDmcalc', 'PDm', 'PDmcalc', 'CAfdm', 'CAfdmcalc', 'NAfdm', 'NAfdmcalc', 'PAfdm', 'PAfdmcalc', 'JMgwm', 'JMgwmcalc', 'JMgdm', 'JMgdmcalc', 'JMgafdm', 'JMgafdmcalc', 'JMgc', 'JMgccalc', 'CNmass', 'CPmass', 'NPmass', 'Comments', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('recordno', 'genus', 'species', 'nameused', 'speccode', 'stockcode', 'massconvmainref', 'massconvrefno', 'locality', 'country', 'cCode', 'sex', 'lifestage', 'dmWm', 'dmWmcalc', 'afdmDm', 'afdmDmcalc', 'afdmWm', 'afdmWmcalc', 'proteinDm', 'proteinDmcalc', 'carbhydrDm', 'carbhydrDmcalc', 'lipidDm', 'lipidDmcalc', 'cDm', 'cDmcalc', 'nDm', 'nDmcalc', 'pDm', 'pDmcalc', 'cAfdm', 'cAfdmcalc', 'nAfdm', 'nAfdmcalc', 'pAfdm', 'pAfdmcalc', 'jMgwm', 'jMgwmcalc', 'jMgdm', 'jMgdmcalc', 'jMgafdm', 'jMgafdmcalc', 'jMgc', 'jMgccalc', 'cNmass', 'cPmass', 'nPmass', 'comments', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', ),
        BasePeer::TYPE_COLNAME => array (MassconversionPeer::RECORDNO, MassconversionPeer::GENUS, MassconversionPeer::SPECIES, MassconversionPeer::NAMEUSED, MassconversionPeer::SPECCODE, MassconversionPeer::STOCKCODE, MassconversionPeer::MASSCONVMAINREF, MassconversionPeer::MASSCONVREFNO, MassconversionPeer::LOCALITY, MassconversionPeer::COUNTRY, MassconversionPeer::C_CODE, MassconversionPeer::SEX, MassconversionPeer::LIFESTAGE, MassconversionPeer::DM_WM, MassconversionPeer::DM_WMCALC, MassconversionPeer::AFDM_DM, MassconversionPeer::AFDM_DMCALC, MassconversionPeer::AFDM_WM, MassconversionPeer::AFDM_WMCALC, MassconversionPeer::PROTEIN_DM, MassconversionPeer::PROTEIN_DMCALC, MassconversionPeer::CARBHYDR_DM, MassconversionPeer::CARBHYDR_DMCALC, MassconversionPeer::LIPID_DM, MassconversionPeer::LIPID_DMCALC, MassconversionPeer::C_DM, MassconversionPeer::C_DMCALC, MassconversionPeer::N_DM, MassconversionPeer::N_DMCALC, MassconversionPeer::P_DM, MassconversionPeer::P_DMCALC, MassconversionPeer::C_AFDM, MassconversionPeer::C_AFDMCALC, MassconversionPeer::N_AFDM, MassconversionPeer::N_AFDMCALC, MassconversionPeer::P_AFDM, MassconversionPeer::P_AFDMCALC, MassconversionPeer::J_MGWM, MassconversionPeer::J_MGWMCALC, MassconversionPeer::J_MGDM, MassconversionPeer::J_MGDMCALC, MassconversionPeer::J_MGAFDM, MassconversionPeer::J_MGAFDMCALC, MassconversionPeer::J_MGC, MassconversionPeer::J_MGCCALC, MassconversionPeer::C_NMASS, MassconversionPeer::C_PMASS, MassconversionPeer::N_PMASS, MassconversionPeer::COMMENTS, MassconversionPeer::ENTERED, MassconversionPeer::DATEENTERED, MassconversionPeer::MODIFIED, MassconversionPeer::DATEMODIFIED, MassconversionPeer::EXPERT, MassconversionPeer::DATECHECKED, ),
        BasePeer::TYPE_RAW_COLNAME => array ('RECORDNO', 'GENUS', 'SPECIES', 'NAMEUSED', 'SPECCODE', 'STOCKCODE', 'MASSCONVMAINREF', 'MASSCONVREFNO', 'LOCALITY', 'COUNTRY', 'C_CODE', 'SEX', 'LIFESTAGE', 'DM_WM', 'DM_WMCALC', 'AFDM_DM', 'AFDM_DMCALC', 'AFDM_WM', 'AFDM_WMCALC', 'PROTEIN_DM', 'PROTEIN_DMCALC', 'CARBHYDR_DM', 'CARBHYDR_DMCALC', 'LIPID_DM', 'LIPID_DMCALC', 'C_DM', 'C_DMCALC', 'N_DM', 'N_DMCALC', 'P_DM', 'P_DMCALC', 'C_AFDM', 'C_AFDMCALC', 'N_AFDM', 'N_AFDMCALC', 'P_AFDM', 'P_AFDMCALC', 'J_MGWM', 'J_MGWMCALC', 'J_MGDM', 'J_MGDMCALC', 'J_MGAFDM', 'J_MGAFDMCALC', 'J_MGC', 'J_MGCCALC', 'C_NMASS', 'C_PMASS', 'N_PMASS', 'COMMENTS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', ),
        BasePeer::TYPE_FIELDNAME => array ('RecordNo', 'Genus', 'Species', 'NameUsed', 'Speccode', 'StockCode', 'MassConvMainRef', 'MassConvRefNo', 'Locality', 'Country', 'C_code', 'Sex', 'LifeStage', 'DM_WM', 'DM_WMcalc', 'AFDM_DM', 'AFDM_DMcalc', 'AFDM_WM', 'AFDM_WMcalc', 'Protein_DM', 'Protein_DMcalc', 'Carbhydr_DM', 'Carbhydr_DMcalc', 'Lipid_DM', 'Lipid_DMcalc', 'C_DM', 'C_DMcalc', 'N_DM', 'N_DMcalc', 'P_DM', 'P_DMcalc', 'C_AFDM', 'C_AFDMcalc', 'N_AFDM', 'N_AFDMcalc', 'P_AFDM', 'P_AFDMcalc', 'J_mgWM', 'J_mgWMcalc', 'J_mgDM', 'J_mgDMcalc', 'J_mgAFDM', 'J_mgAFDMcalc', 'J_mgC', 'J_mgCcalc', 'C_Nmass', 'C_Pmass', 'N_Pmass', 'Comments', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. MassconversionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Recordno' => 0, 'Genus' => 1, 'Species' => 2, 'Nameused' => 3, 'Speccode' => 4, 'Stockcode' => 5, 'Massconvmainref' => 6, 'Massconvrefno' => 7, 'Locality' => 8, 'Country' => 9, 'CCode' => 10, 'Sex' => 11, 'Lifestage' => 12, 'DmWm' => 13, 'DmWmcalc' => 14, 'AfdmDm' => 15, 'AfdmDmcalc' => 16, 'AfdmWm' => 17, 'AfdmWmcalc' => 18, 'ProteinDm' => 19, 'ProteinDmcalc' => 20, 'CarbhydrDm' => 21, 'CarbhydrDmcalc' => 22, 'LipidDm' => 23, 'LipidDmcalc' => 24, 'CDm' => 25, 'CDmcalc' => 26, 'NDm' => 27, 'NDmcalc' => 28, 'PDm' => 29, 'PDmcalc' => 30, 'CAfdm' => 31, 'CAfdmcalc' => 32, 'NAfdm' => 33, 'NAfdmcalc' => 34, 'PAfdm' => 35, 'PAfdmcalc' => 36, 'JMgwm' => 37, 'JMgwmcalc' => 38, 'JMgdm' => 39, 'JMgdmcalc' => 40, 'JMgafdm' => 41, 'JMgafdmcalc' => 42, 'JMgc' => 43, 'JMgccalc' => 44, 'CNmass' => 45, 'CPmass' => 46, 'NPmass' => 47, 'Comments' => 48, 'Entered' => 49, 'Dateentered' => 50, 'Modified' => 51, 'Datemodified' => 52, 'Expert' => 53, 'Datechecked' => 54, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('recordno' => 0, 'genus' => 1, 'species' => 2, 'nameused' => 3, 'speccode' => 4, 'stockcode' => 5, 'massconvmainref' => 6, 'massconvrefno' => 7, 'locality' => 8, 'country' => 9, 'cCode' => 10, 'sex' => 11, 'lifestage' => 12, 'dmWm' => 13, 'dmWmcalc' => 14, 'afdmDm' => 15, 'afdmDmcalc' => 16, 'afdmWm' => 17, 'afdmWmcalc' => 18, 'proteinDm' => 19, 'proteinDmcalc' => 20, 'carbhydrDm' => 21, 'carbhydrDmcalc' => 22, 'lipidDm' => 23, 'lipidDmcalc' => 24, 'cDm' => 25, 'cDmcalc' => 26, 'nDm' => 27, 'nDmcalc' => 28, 'pDm' => 29, 'pDmcalc' => 30, 'cAfdm' => 31, 'cAfdmcalc' => 32, 'nAfdm' => 33, 'nAfdmcalc' => 34, 'pAfdm' => 35, 'pAfdmcalc' => 36, 'jMgwm' => 37, 'jMgwmcalc' => 38, 'jMgdm' => 39, 'jMgdmcalc' => 40, 'jMgafdm' => 41, 'jMgafdmcalc' => 42, 'jMgc' => 43, 'jMgccalc' => 44, 'cNmass' => 45, 'cPmass' => 46, 'nPmass' => 47, 'comments' => 48, 'entered' => 49, 'dateentered' => 50, 'modified' => 51, 'datemodified' => 52, 'expert' => 53, 'datechecked' => 54, ),
        BasePeer::TYPE_COLNAME => array (MassconversionPeer::RECORDNO => 0, MassconversionPeer::GENUS => 1, MassconversionPeer::SPECIES => 2, MassconversionPeer::NAMEUSED => 3, MassconversionPeer::SPECCODE => 4, MassconversionPeer::STOCKCODE => 5, MassconversionPeer::MASSCONVMAINREF => 6, MassconversionPeer::MASSCONVREFNO => 7, MassconversionPeer::LOCALITY => 8, MassconversionPeer::COUNTRY => 9, MassconversionPeer::C_CODE => 10, MassconversionPeer::SEX => 11, MassconversionPeer::LIFESTAGE => 12, MassconversionPeer::DM_WM => 13, MassconversionPeer::DM_WMCALC => 14, MassconversionPeer::AFDM_DM => 15, MassconversionPeer::AFDM_DMCALC => 16, MassconversionPeer::AFDM_WM => 17, MassconversionPeer::AFDM_WMCALC => 18, MassconversionPeer::PROTEIN_DM => 19, MassconversionPeer::PROTEIN_DMCALC => 20, MassconversionPeer::CARBHYDR_DM => 21, MassconversionPeer::CARBHYDR_DMCALC => 22, MassconversionPeer::LIPID_DM => 23, MassconversionPeer::LIPID_DMCALC => 24, MassconversionPeer::C_DM => 25, MassconversionPeer::C_DMCALC => 26, MassconversionPeer::N_DM => 27, MassconversionPeer::N_DMCALC => 28, MassconversionPeer::P_DM => 29, MassconversionPeer::P_DMCALC => 30, MassconversionPeer::C_AFDM => 31, MassconversionPeer::C_AFDMCALC => 32, MassconversionPeer::N_AFDM => 33, MassconversionPeer::N_AFDMCALC => 34, MassconversionPeer::P_AFDM => 35, MassconversionPeer::P_AFDMCALC => 36, MassconversionPeer::J_MGWM => 37, MassconversionPeer::J_MGWMCALC => 38, MassconversionPeer::J_MGDM => 39, MassconversionPeer::J_MGDMCALC => 40, MassconversionPeer::J_MGAFDM => 41, MassconversionPeer::J_MGAFDMCALC => 42, MassconversionPeer::J_MGC => 43, MassconversionPeer::J_MGCCALC => 44, MassconversionPeer::C_NMASS => 45, MassconversionPeer::C_PMASS => 46, MassconversionPeer::N_PMASS => 47, MassconversionPeer::COMMENTS => 48, MassconversionPeer::ENTERED => 49, MassconversionPeer::DATEENTERED => 50, MassconversionPeer::MODIFIED => 51, MassconversionPeer::DATEMODIFIED => 52, MassconversionPeer::EXPERT => 53, MassconversionPeer::DATECHECKED => 54, ),
        BasePeer::TYPE_RAW_COLNAME => array ('RECORDNO' => 0, 'GENUS' => 1, 'SPECIES' => 2, 'NAMEUSED' => 3, 'SPECCODE' => 4, 'STOCKCODE' => 5, 'MASSCONVMAINREF' => 6, 'MASSCONVREFNO' => 7, 'LOCALITY' => 8, 'COUNTRY' => 9, 'C_CODE' => 10, 'SEX' => 11, 'LIFESTAGE' => 12, 'DM_WM' => 13, 'DM_WMCALC' => 14, 'AFDM_DM' => 15, 'AFDM_DMCALC' => 16, 'AFDM_WM' => 17, 'AFDM_WMCALC' => 18, 'PROTEIN_DM' => 19, 'PROTEIN_DMCALC' => 20, 'CARBHYDR_DM' => 21, 'CARBHYDR_DMCALC' => 22, 'LIPID_DM' => 23, 'LIPID_DMCALC' => 24, 'C_DM' => 25, 'C_DMCALC' => 26, 'N_DM' => 27, 'N_DMCALC' => 28, 'P_DM' => 29, 'P_DMCALC' => 30, 'C_AFDM' => 31, 'C_AFDMCALC' => 32, 'N_AFDM' => 33, 'N_AFDMCALC' => 34, 'P_AFDM' => 35, 'P_AFDMCALC' => 36, 'J_MGWM' => 37, 'J_MGWMCALC' => 38, 'J_MGDM' => 39, 'J_MGDMCALC' => 40, 'J_MGAFDM' => 41, 'J_MGAFDMCALC' => 42, 'J_MGC' => 43, 'J_MGCCALC' => 44, 'C_NMASS' => 45, 'C_PMASS' => 46, 'N_PMASS' => 47, 'COMMENTS' => 48, 'ENTERED' => 49, 'DATEENTERED' => 50, 'MODIFIED' => 51, 'DATEMODIFIED' => 52, 'EXPERT' => 53, 'DATECHECKED' => 54, ),
        BasePeer::TYPE_FIELDNAME => array ('RecordNo' => 0, 'Genus' => 1, 'Species' => 2, 'NameUsed' => 3, 'Speccode' => 4, 'StockCode' => 5, 'MassConvMainRef' => 6, 'MassConvRefNo' => 7, 'Locality' => 8, 'Country' => 9, 'C_code' => 10, 'Sex' => 11, 'LifeStage' => 12, 'DM_WM' => 13, 'DM_WMcalc' => 14, 'AFDM_DM' => 15, 'AFDM_DMcalc' => 16, 'AFDM_WM' => 17, 'AFDM_WMcalc' => 18, 'Protein_DM' => 19, 'Protein_DMcalc' => 20, 'Carbhydr_DM' => 21, 'Carbhydr_DMcalc' => 22, 'Lipid_DM' => 23, 'Lipid_DMcalc' => 24, 'C_DM' => 25, 'C_DMcalc' => 26, 'N_DM' => 27, 'N_DMcalc' => 28, 'P_DM' => 29, 'P_DMcalc' => 30, 'C_AFDM' => 31, 'C_AFDMcalc' => 32, 'N_AFDM' => 33, 'N_AFDMcalc' => 34, 'P_AFDM' => 35, 'P_AFDMcalc' => 36, 'J_mgWM' => 37, 'J_mgWMcalc' => 38, 'J_mgDM' => 39, 'J_mgDMcalc' => 40, 'J_mgAFDM' => 41, 'J_mgAFDMcalc' => 42, 'J_mgC' => 43, 'J_mgCcalc' => 44, 'C_Nmass' => 45, 'C_Pmass' => 46, 'N_Pmass' => 47, 'Comments' => 48, 'Entered' => 49, 'DateEntered' => 50, 'Modified' => 51, 'DateModified' => 52, 'Expert' => 53, 'DateChecked' => 54, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, )
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
        $toNames = MassconversionPeer::getFieldNames($toType);
        $key = isset(MassconversionPeer::$fieldKeys[$fromType][$name]) ? MassconversionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(MassconversionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, MassconversionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return MassconversionPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. MassconversionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(MassconversionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(MassconversionPeer::RECORDNO);
            $criteria->addSelectColumn(MassconversionPeer::GENUS);
            $criteria->addSelectColumn(MassconversionPeer::SPECIES);
            $criteria->addSelectColumn(MassconversionPeer::NAMEUSED);
            $criteria->addSelectColumn(MassconversionPeer::SPECCODE);
            $criteria->addSelectColumn(MassconversionPeer::STOCKCODE);
            $criteria->addSelectColumn(MassconversionPeer::MASSCONVMAINREF);
            $criteria->addSelectColumn(MassconversionPeer::MASSCONVREFNO);
            $criteria->addSelectColumn(MassconversionPeer::LOCALITY);
            $criteria->addSelectColumn(MassconversionPeer::COUNTRY);
            $criteria->addSelectColumn(MassconversionPeer::C_CODE);
            $criteria->addSelectColumn(MassconversionPeer::SEX);
            $criteria->addSelectColumn(MassconversionPeer::LIFESTAGE);
            $criteria->addSelectColumn(MassconversionPeer::DM_WM);
            $criteria->addSelectColumn(MassconversionPeer::DM_WMCALC);
            $criteria->addSelectColumn(MassconversionPeer::AFDM_DM);
            $criteria->addSelectColumn(MassconversionPeer::AFDM_DMCALC);
            $criteria->addSelectColumn(MassconversionPeer::AFDM_WM);
            $criteria->addSelectColumn(MassconversionPeer::AFDM_WMCALC);
            $criteria->addSelectColumn(MassconversionPeer::PROTEIN_DM);
            $criteria->addSelectColumn(MassconversionPeer::PROTEIN_DMCALC);
            $criteria->addSelectColumn(MassconversionPeer::CARBHYDR_DM);
            $criteria->addSelectColumn(MassconversionPeer::CARBHYDR_DMCALC);
            $criteria->addSelectColumn(MassconversionPeer::LIPID_DM);
            $criteria->addSelectColumn(MassconversionPeer::LIPID_DMCALC);
            $criteria->addSelectColumn(MassconversionPeer::C_DM);
            $criteria->addSelectColumn(MassconversionPeer::C_DMCALC);
            $criteria->addSelectColumn(MassconversionPeer::N_DM);
            $criteria->addSelectColumn(MassconversionPeer::N_DMCALC);
            $criteria->addSelectColumn(MassconversionPeer::P_DM);
            $criteria->addSelectColumn(MassconversionPeer::P_DMCALC);
            $criteria->addSelectColumn(MassconversionPeer::C_AFDM);
            $criteria->addSelectColumn(MassconversionPeer::C_AFDMCALC);
            $criteria->addSelectColumn(MassconversionPeer::N_AFDM);
            $criteria->addSelectColumn(MassconversionPeer::N_AFDMCALC);
            $criteria->addSelectColumn(MassconversionPeer::P_AFDM);
            $criteria->addSelectColumn(MassconversionPeer::P_AFDMCALC);
            $criteria->addSelectColumn(MassconversionPeer::J_MGWM);
            $criteria->addSelectColumn(MassconversionPeer::J_MGWMCALC);
            $criteria->addSelectColumn(MassconversionPeer::J_MGDM);
            $criteria->addSelectColumn(MassconversionPeer::J_MGDMCALC);
            $criteria->addSelectColumn(MassconversionPeer::J_MGAFDM);
            $criteria->addSelectColumn(MassconversionPeer::J_MGAFDMCALC);
            $criteria->addSelectColumn(MassconversionPeer::J_MGC);
            $criteria->addSelectColumn(MassconversionPeer::J_MGCCALC);
            $criteria->addSelectColumn(MassconversionPeer::C_NMASS);
            $criteria->addSelectColumn(MassconversionPeer::C_PMASS);
            $criteria->addSelectColumn(MassconversionPeer::N_PMASS);
            $criteria->addSelectColumn(MassconversionPeer::COMMENTS);
            $criteria->addSelectColumn(MassconversionPeer::ENTERED);
            $criteria->addSelectColumn(MassconversionPeer::DATEENTERED);
            $criteria->addSelectColumn(MassconversionPeer::MODIFIED);
            $criteria->addSelectColumn(MassconversionPeer::DATEMODIFIED);
            $criteria->addSelectColumn(MassconversionPeer::EXPERT);
            $criteria->addSelectColumn(MassconversionPeer::DATECHECKED);
        } else {
            $criteria->addSelectColumn($alias . '.RecordNo');
            $criteria->addSelectColumn($alias . '.Genus');
            $criteria->addSelectColumn($alias . '.Species');
            $criteria->addSelectColumn($alias . '.NameUsed');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.MassConvMainRef');
            $criteria->addSelectColumn($alias . '.MassConvRefNo');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.Country');
            $criteria->addSelectColumn($alias . '.C_code');
            $criteria->addSelectColumn($alias . '.Sex');
            $criteria->addSelectColumn($alias . '.LifeStage');
            $criteria->addSelectColumn($alias . '.DM_WM');
            $criteria->addSelectColumn($alias . '.DM_WMcalc');
            $criteria->addSelectColumn($alias . '.AFDM_DM');
            $criteria->addSelectColumn($alias . '.AFDM_DMcalc');
            $criteria->addSelectColumn($alias . '.AFDM_WM');
            $criteria->addSelectColumn($alias . '.AFDM_WMcalc');
            $criteria->addSelectColumn($alias . '.Protein_DM');
            $criteria->addSelectColumn($alias . '.Protein_DMcalc');
            $criteria->addSelectColumn($alias . '.Carbhydr_DM');
            $criteria->addSelectColumn($alias . '.Carbhydr_DMcalc');
            $criteria->addSelectColumn($alias . '.Lipid_DM');
            $criteria->addSelectColumn($alias . '.Lipid_DMcalc');
            $criteria->addSelectColumn($alias . '.C_DM');
            $criteria->addSelectColumn($alias . '.C_DMcalc');
            $criteria->addSelectColumn($alias . '.N_DM');
            $criteria->addSelectColumn($alias . '.N_DMcalc');
            $criteria->addSelectColumn($alias . '.P_DM');
            $criteria->addSelectColumn($alias . '.P_DMcalc');
            $criteria->addSelectColumn($alias . '.C_AFDM');
            $criteria->addSelectColumn($alias . '.C_AFDMcalc');
            $criteria->addSelectColumn($alias . '.N_AFDM');
            $criteria->addSelectColumn($alias . '.N_AFDMcalc');
            $criteria->addSelectColumn($alias . '.P_AFDM');
            $criteria->addSelectColumn($alias . '.P_AFDMcalc');
            $criteria->addSelectColumn($alias . '.J_mgWM');
            $criteria->addSelectColumn($alias . '.J_mgWMcalc');
            $criteria->addSelectColumn($alias . '.J_mgDM');
            $criteria->addSelectColumn($alias . '.J_mgDMcalc');
            $criteria->addSelectColumn($alias . '.J_mgAFDM');
            $criteria->addSelectColumn($alias . '.J_mgAFDMcalc');
            $criteria->addSelectColumn($alias . '.J_mgC');
            $criteria->addSelectColumn($alias . '.J_mgCcalc');
            $criteria->addSelectColumn($alias . '.C_Nmass');
            $criteria->addSelectColumn($alias . '.C_Pmass');
            $criteria->addSelectColumn($alias . '.N_Pmass');
            $criteria->addSelectColumn($alias . '.Comments');
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
        $criteria->setPrimaryTableName(MassconversionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MassconversionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(MassconversionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(MassconversionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Massconversion
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = MassconversionPeer::doSelect($critcopy, $con);
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
        return MassconversionPeer::populateObjects(MassconversionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(MassconversionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            MassconversionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(MassconversionPeer::DATABASE_NAME);

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
     * @param Massconversion $obj A Massconversion object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getRecordno();
            } // if key === null
            MassconversionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Massconversion object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Massconversion) {
                $key = (string) $value->getRecordno();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Massconversion object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(MassconversionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Massconversion Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(MassconversionPeer::$instances[$key])) {
                return MassconversionPeer::$instances[$key];
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
        foreach (MassconversionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        MassconversionPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to massconversion
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
        $cls = MassconversionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = MassconversionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = MassconversionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MassconversionPeer::addInstanceToPool($obj, $key);
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
     * @return array (Massconversion object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = MassconversionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = MassconversionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + MassconversionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MassconversionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            MassconversionPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(MassconversionPeer::DATABASE_NAME)->getTable(MassconversionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseMassconversionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseMassconversionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \MassconversionTableMap());
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
        return MassconversionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Massconversion or Criteria object.
     *
     * @param      mixed $values Criteria or Massconversion object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MassconversionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Massconversion object
        }


        // Set the correct dbName
        $criteria->setDbName(MassconversionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Massconversion or Criteria object.
     *
     * @param      mixed $values Criteria or Massconversion object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MassconversionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(MassconversionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(MassconversionPeer::RECORDNO);
            $value = $criteria->remove(MassconversionPeer::RECORDNO);
            if ($value) {
                $selectCriteria->add(MassconversionPeer::RECORDNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MassconversionPeer::TABLE_NAME);
            }

        } else { // $values is Massconversion object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(MassconversionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the massconversion table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MassconversionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(MassconversionPeer::TABLE_NAME, $con, MassconversionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MassconversionPeer::clearInstancePool();
            MassconversionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Massconversion or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Massconversion object or primary key or array of primary keys
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
            $con = Propel::getConnection(MassconversionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            MassconversionPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Massconversion) { // it's a model object
            // invalidate the cache for this single object
            MassconversionPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MassconversionPeer::DATABASE_NAME);
            $criteria->add(MassconversionPeer::RECORDNO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                MassconversionPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(MassconversionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            MassconversionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Massconversion object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Massconversion $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(MassconversionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(MassconversionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(MassconversionPeer::DATABASE_NAME, MassconversionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Massconversion
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = MassconversionPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(MassconversionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(MassconversionPeer::DATABASE_NAME);
        $criteria->add(MassconversionPeer::RECORDNO, $pk);

        $v = MassconversionPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Massconversion[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MassconversionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(MassconversionPeer::DATABASE_NAME);
            $criteria->add(MassconversionPeer::RECORDNO, $pks, Criteria::IN);
            $objs = MassconversionPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseMassconversionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMassconversionPeer::buildTableMap();

