<?php


/**
 * Base static class for performing query and update operations on the 'proxims' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseProximsPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'proxims';

    /** the related Propel class for this table */
    const OM_CLASS = 'Proxims';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ProximsTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 92;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 92;

    /** the column name for the StockCode field */
    const STOCKCODE = 'proxims.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'proxims.SpecCode';

    /** the column name for the ChemicsRefNo field */
    const CHEMICSREFNO = 'proxims.ChemicsRefNo';

    /** the column name for the C_Code field */
    const C_CODE = 'proxims.C_Code';

    /** the column name for the Locality field */
    const LOCALITY = 'proxims.Locality';

    /** the column name for the Length field */
    const LENGTH = 'proxims.Length';

    /** the column name for the LengthUpper field */
    const LENGTHUPPER = 'proxims.LengthUpper';

    /** the column name for the LengthType field */
    const LENGTHTYPE = 'proxims.LengthType';

    /** the column name for the WeightLower field */
    const WEIGHTLOWER = 'proxims.WeightLower';

    /** the column name for the WeightUpper field */
    const WEIGHTUPPER = 'proxims.WeightUpper';

    /** the column name for the HeadLower field */
    const HEADLOWER = 'proxims.HeadLower';

    /** the column name for the HeadUpper field */
    const HEADUPPER = 'proxims.HeadUpper';

    /** the column name for the VisceraLower22 field */
    const VISCERALOWER22 = 'proxims.VisceraLower22';

    /** the column name for the VisceraUpper22 field */
    const VISCERAUPPER22 = 'proxims.VisceraUpper22';

    /** the column name for the TrunkLower field */
    const TRUNKLOWER = 'proxims.TrunkLower';

    /** the column name for the TrunkUpper field */
    const TRUNKUPPER = 'proxims.TrunkUpper';

    /** the column name for the RoeLower field */
    const ROELOWER = 'proxims.RoeLower';

    /** the column name for the RoeUpper field */
    const ROEUPPER = 'proxims.RoeUpper';

    /** the column name for the SkinLower field */
    const SKINLOWER = 'proxims.SkinLower';

    /** the column name for the SkinUpper field */
    const SKINUPPER = 'proxims.SkinUpper';

    /** the column name for the TestesLower field */
    const TESTESLOWER = 'proxims.TestesLower';

    /** the column name for the TestesUpper field */
    const TESTESUPPER = 'proxims.TestesUpper';

    /** the column name for the FinsLower field */
    const FINSLOWER = 'proxims.FinsLower';

    /** the column name for the FinsUpper field */
    const FINSUPPER = 'proxims.FinsUpper';

    /** the column name for the LiverLower field */
    const LIVERLOWER = 'proxims.LiverLower';

    /** the column name for the LiverUpper field */
    const LIVERUPPER = 'proxims.LiverUpper';

    /** the column name for the BonesLower field */
    const BONESLOWER = 'proxims.BonesLower';

    /** the column name for the BonesUpper field */
    const BONESUPPER = 'proxims.BonesUpper';

    /** the column name for the MeatLower field */
    const MEATLOWER = 'proxims.MeatLower';

    /** the column name for the MeatUpper field */
    const MEATUPPER = 'proxims.MeatUpper';

    /** the column name for the FilletLower field */
    const FILLETLOWER = 'proxims.FilletLower';

    /** the column name for the FilletUpper field */
    const FILLETUPPER = 'proxims.FilletUpper';

    /** the column name for the SteakLower field */
    const STEAKLOWER = 'proxims.SteakLower';

    /** the column name for the SteakUpper field */
    const STEAKUPPER = 'proxims.SteakUpper';

    /** the column name for the Comment field */
    const COMMENT = 'proxims.Comment';

    /** the column name for the MeatMoistMin field */
    const MEATMOISTMIN = 'proxims.MeatMoistMin';

    /** the column name for the MeatMoistMax field */
    const MEATMOISTMAX = 'proxims.MeatMoistMax';

    /** the column name for the MeatProtMin field */
    const MEATPROTMIN = 'proxims.MeatProtMin';

    /** the column name for the MeatProtMax field */
    const MEATPROTMAX = 'proxims.MeatProtMax';

    /** the column name for the MeatFatMin field */
    const MEATFATMIN = 'proxims.MeatFatMin';

    /** the column name for the MeatFatMax field */
    const MEATFATMAX = 'proxims.MeatFatMax';

    /** the column name for the MeatAshMin field */
    const MEATASHMIN = 'proxims.MeatAshMin';

    /** the column name for the MeatAshMax field */
    const MEATASHMAX = 'proxims.MeatAshMax';

    /** the column name for the LiverMoistMin field */
    const LIVERMOISTMIN = 'proxims.LiverMoistMin';

    /** the column name for the LiverMoistMax field */
    const LIVERMOISTMAX = 'proxims.LiverMoistMax';

    /** the column name for the LiverProtMin field */
    const LIVERPROTMIN = 'proxims.LiverProtMin';

    /** the column name for the LiverProtMax field */
    const LIVERPROTMAX = 'proxims.LiverProtMax';

    /** the column name for the LiverFatMin field */
    const LIVERFATMIN = 'proxims.LiverFatMin';

    /** the column name for the LiverFatMax field */
    const LIVERFATMAX = 'proxims.LiverFatMax';

    /** the column name for the LiverAshMin field */
    const LIVERASHMIN = 'proxims.LiverAshMin';

    /** the column name for the LiverAshMax field */
    const LIVERASHMAX = 'proxims.LiverAshMax';

    /** the column name for the RoeMoistMin field */
    const ROEMOISTMIN = 'proxims.RoeMoistMin';

    /** the column name for the RoeMoistMax field */
    const ROEMOISTMAX = 'proxims.RoeMoistMax';

    /** the column name for the RoeProtMin field */
    const ROEPROTMIN = 'proxims.RoeProtMin';

    /** the column name for the RoeProtMax field */
    const ROEPROTMAX = 'proxims.RoeProtMax';

    /** the column name for the RoeFatMin field */
    const ROEFATMIN = 'proxims.RoeFatMin';

    /** the column name for the RoeFatMax field */
    const ROEFATMAX = 'proxims.RoeFatMax';

    /** the column name for the RoeAshMin field */
    const ROEASHMIN = 'proxims.RoeAshMin';

    /** the column name for the RoeAshMax field */
    const ROEASHMAX = 'proxims.RoeAshMax';

    /** the column name for the VisceraMoistMin field */
    const VISCERAMOISTMIN = 'proxims.VisceraMoistMin';

    /** the column name for the VisceraMoistMax field */
    const VISCERAMOISTMAX = 'proxims.VisceraMoistMax';

    /** the column name for the VisceraProtMin field */
    const VISCERAPROTMIN = 'proxims.VisceraProtMin';

    /** the column name for the VisceraProtMax field */
    const VISCERAPROTMAX = 'proxims.VisceraProtMax';

    /** the column name for the VisceraFatMin field */
    const VISCERAFATMIN = 'proxims.VisceraFatMin';

    /** the column name for the VisceraFatMax field */
    const VISCERAFATMAX = 'proxims.VisceraFatMax';

    /** the column name for the VisceraAshMin field */
    const VISCERAASHMIN = 'proxims.VisceraAshMin';

    /** the column name for the VisceraAshMax field */
    const VISCERAASHMAX = 'proxims.VisceraAshMax';

    /** the column name for the HeadMoistMin field */
    const HEADMOISTMIN = 'proxims.HeadMoistMin';

    /** the column name for the HeadMoistMax field */
    const HEADMOISTMAX = 'proxims.HeadMoistMax';

    /** the column name for the HeadProtMin field */
    const HEADPROTMIN = 'proxims.HeadProtMin';

    /** the column name for the HeadProtMax field */
    const HEADPROTMAX = 'proxims.HeadProtMax';

    /** the column name for the HeadFatMin field */
    const HEADFATMIN = 'proxims.HeadFatMin';

    /** the column name for the HeadFatMax field */
    const HEADFATMAX = 'proxims.HeadFatMax';

    /** the column name for the HeadAshMin field */
    const HEADASHMIN = 'proxims.HeadAshMin';

    /** the column name for the HeadAshMax field */
    const HEADASHMAX = 'proxims.HeadAshMax';

    /** the column name for the WasteMoistMin field */
    const WASTEMOISTMIN = 'proxims.WasteMoistMin';

    /** the column name for the WasteMoistMax field */
    const WASTEMOISTMAX = 'proxims.WasteMoistMax';

    /** the column name for the WasteProtMin field */
    const WASTEPROTMIN = 'proxims.WasteProtMin';

    /** the column name for the WasteProtMax field */
    const WASTEPROTMAX = 'proxims.WasteProtMax';

    /** the column name for the WasteFatMin field */
    const WASTEFATMIN = 'proxims.WasteFatMin';

    /** the column name for the WasteFatMax field */
    const WASTEFATMAX = 'proxims.WasteFatMax';

    /** the column name for the WasteAshMin field */
    const WASTEASHMIN = 'proxims.WasteAshMin';

    /** the column name for the WasteAshMax field */
    const WASTEASHMAX = 'proxims.WasteAshMax';

    /** the column name for the CommentChemics field */
    const COMMENTCHEMICS = 'proxims.CommentChemics';

    /** the column name for the Entered field */
    const ENTERED = 'proxims.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'proxims.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'proxims.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'proxims.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'proxims.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'proxims.DateChecked';

    /** the column name for the Remark field */
    const REMARK = 'proxims.Remark';

    /** the column name for the TS field */
    const TS = 'proxims.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Proxims objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Proxims[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ProximsPeer::$fieldNames[ProximsPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode', 'Speccode', 'Chemicsrefno', 'CCode', 'Locality', 'Length', 'Lengthupper', 'Lengthtype', 'Weightlower', 'Weightupper', 'Headlower', 'Headupper', 'Visceralower22', 'Visceraupper22', 'Trunklower', 'Trunkupper', 'Roelower', 'Roeupper', 'Skinlower', 'Skinupper', 'Testeslower', 'Testesupper', 'Finslower', 'Finsupper', 'Liverlower', 'Liverupper', 'Boneslower', 'Bonesupper', 'Meatlower', 'Meatupper', 'Filletlower', 'Filletupper', 'Steaklower', 'Steakupper', 'Comment', 'Meatmoistmin', 'Meatmoistmax', 'Meatprotmin', 'Meatprotmax', 'Meatfatmin', 'Meatfatmax', 'Meatashmin', 'Meatashmax', 'Livermoistmin', 'Livermoistmax', 'Liverprotmin', 'Liverprotmax', 'Liverfatmin', 'Liverfatmax', 'Liverashmin', 'Liverashmax', 'Roemoistmin', 'Roemoistmax', 'Roeprotmin', 'Roeprotmax', 'Roefatmin', 'Roefatmax', 'Roeashmin', 'Roeashmax', 'Visceramoistmin', 'Visceramoistmax', 'Visceraprotmin', 'Visceraprotmax', 'Viscerafatmin', 'Viscerafatmax', 'Visceraashmin', 'Visceraashmax', 'Headmoistmin', 'Headmoistmax', 'Headprotmin', 'Headprotmax', 'Headfatmin', 'Headfatmax', 'Headashmin', 'Headashmax', 'Wastemoistmin', 'Wastemoistmax', 'Wasteprotmin', 'Wasteprotmax', 'Wastefatmin', 'Wastefatmax', 'Wasteashmin', 'Wasteashmax', 'Commentchemics', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Remark', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode', 'speccode', 'chemicsrefno', 'cCode', 'locality', 'length', 'lengthupper', 'lengthtype', 'weightlower', 'weightupper', 'headlower', 'headupper', 'visceralower22', 'visceraupper22', 'trunklower', 'trunkupper', 'roelower', 'roeupper', 'skinlower', 'skinupper', 'testeslower', 'testesupper', 'finslower', 'finsupper', 'liverlower', 'liverupper', 'boneslower', 'bonesupper', 'meatlower', 'meatupper', 'filletlower', 'filletupper', 'steaklower', 'steakupper', 'comment', 'meatmoistmin', 'meatmoistmax', 'meatprotmin', 'meatprotmax', 'meatfatmin', 'meatfatmax', 'meatashmin', 'meatashmax', 'livermoistmin', 'livermoistmax', 'liverprotmin', 'liverprotmax', 'liverfatmin', 'liverfatmax', 'liverashmin', 'liverashmax', 'roemoistmin', 'roemoistmax', 'roeprotmin', 'roeprotmax', 'roefatmin', 'roefatmax', 'roeashmin', 'roeashmax', 'visceramoistmin', 'visceramoistmax', 'visceraprotmin', 'visceraprotmax', 'viscerafatmin', 'viscerafatmax', 'visceraashmin', 'visceraashmax', 'headmoistmin', 'headmoistmax', 'headprotmin', 'headprotmax', 'headfatmin', 'headfatmax', 'headashmin', 'headashmax', 'wastemoistmin', 'wastemoistmax', 'wasteprotmin', 'wasteprotmax', 'wastefatmin', 'wastefatmax', 'wasteashmin', 'wasteashmax', 'commentchemics', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'remark', 'ts', ),
        BasePeer::TYPE_COLNAME => array (ProximsPeer::STOCKCODE, ProximsPeer::SPECCODE, ProximsPeer::CHEMICSREFNO, ProximsPeer::C_CODE, ProximsPeer::LOCALITY, ProximsPeer::LENGTH, ProximsPeer::LENGTHUPPER, ProximsPeer::LENGTHTYPE, ProximsPeer::WEIGHTLOWER, ProximsPeer::WEIGHTUPPER, ProximsPeer::HEADLOWER, ProximsPeer::HEADUPPER, ProximsPeer::VISCERALOWER22, ProximsPeer::VISCERAUPPER22, ProximsPeer::TRUNKLOWER, ProximsPeer::TRUNKUPPER, ProximsPeer::ROELOWER, ProximsPeer::ROEUPPER, ProximsPeer::SKINLOWER, ProximsPeer::SKINUPPER, ProximsPeer::TESTESLOWER, ProximsPeer::TESTESUPPER, ProximsPeer::FINSLOWER, ProximsPeer::FINSUPPER, ProximsPeer::LIVERLOWER, ProximsPeer::LIVERUPPER, ProximsPeer::BONESLOWER, ProximsPeer::BONESUPPER, ProximsPeer::MEATLOWER, ProximsPeer::MEATUPPER, ProximsPeer::FILLETLOWER, ProximsPeer::FILLETUPPER, ProximsPeer::STEAKLOWER, ProximsPeer::STEAKUPPER, ProximsPeer::COMMENT, ProximsPeer::MEATMOISTMIN, ProximsPeer::MEATMOISTMAX, ProximsPeer::MEATPROTMIN, ProximsPeer::MEATPROTMAX, ProximsPeer::MEATFATMIN, ProximsPeer::MEATFATMAX, ProximsPeer::MEATASHMIN, ProximsPeer::MEATASHMAX, ProximsPeer::LIVERMOISTMIN, ProximsPeer::LIVERMOISTMAX, ProximsPeer::LIVERPROTMIN, ProximsPeer::LIVERPROTMAX, ProximsPeer::LIVERFATMIN, ProximsPeer::LIVERFATMAX, ProximsPeer::LIVERASHMIN, ProximsPeer::LIVERASHMAX, ProximsPeer::ROEMOISTMIN, ProximsPeer::ROEMOISTMAX, ProximsPeer::ROEPROTMIN, ProximsPeer::ROEPROTMAX, ProximsPeer::ROEFATMIN, ProximsPeer::ROEFATMAX, ProximsPeer::ROEASHMIN, ProximsPeer::ROEASHMAX, ProximsPeer::VISCERAMOISTMIN, ProximsPeer::VISCERAMOISTMAX, ProximsPeer::VISCERAPROTMIN, ProximsPeer::VISCERAPROTMAX, ProximsPeer::VISCERAFATMIN, ProximsPeer::VISCERAFATMAX, ProximsPeer::VISCERAASHMIN, ProximsPeer::VISCERAASHMAX, ProximsPeer::HEADMOISTMIN, ProximsPeer::HEADMOISTMAX, ProximsPeer::HEADPROTMIN, ProximsPeer::HEADPROTMAX, ProximsPeer::HEADFATMIN, ProximsPeer::HEADFATMAX, ProximsPeer::HEADASHMIN, ProximsPeer::HEADASHMAX, ProximsPeer::WASTEMOISTMIN, ProximsPeer::WASTEMOISTMAX, ProximsPeer::WASTEPROTMIN, ProximsPeer::WASTEPROTMAX, ProximsPeer::WASTEFATMIN, ProximsPeer::WASTEFATMAX, ProximsPeer::WASTEASHMIN, ProximsPeer::WASTEASHMAX, ProximsPeer::COMMENTCHEMICS, ProximsPeer::ENTERED, ProximsPeer::DATEENTERED, ProximsPeer::MODIFIED, ProximsPeer::DATEMODIFIED, ProximsPeer::EXPERT, ProximsPeer::DATECHECKED, ProximsPeer::REMARK, ProximsPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE', 'SPECCODE', 'CHEMICSREFNO', 'C_CODE', 'LOCALITY', 'LENGTH', 'LENGTHUPPER', 'LENGTHTYPE', 'WEIGHTLOWER', 'WEIGHTUPPER', 'HEADLOWER', 'HEADUPPER', 'VISCERALOWER22', 'VISCERAUPPER22', 'TRUNKLOWER', 'TRUNKUPPER', 'ROELOWER', 'ROEUPPER', 'SKINLOWER', 'SKINUPPER', 'TESTESLOWER', 'TESTESUPPER', 'FINSLOWER', 'FINSUPPER', 'LIVERLOWER', 'LIVERUPPER', 'BONESLOWER', 'BONESUPPER', 'MEATLOWER', 'MEATUPPER', 'FILLETLOWER', 'FILLETUPPER', 'STEAKLOWER', 'STEAKUPPER', 'COMMENT', 'MEATMOISTMIN', 'MEATMOISTMAX', 'MEATPROTMIN', 'MEATPROTMAX', 'MEATFATMIN', 'MEATFATMAX', 'MEATASHMIN', 'MEATASHMAX', 'LIVERMOISTMIN', 'LIVERMOISTMAX', 'LIVERPROTMIN', 'LIVERPROTMAX', 'LIVERFATMIN', 'LIVERFATMAX', 'LIVERASHMIN', 'LIVERASHMAX', 'ROEMOISTMIN', 'ROEMOISTMAX', 'ROEPROTMIN', 'ROEPROTMAX', 'ROEFATMIN', 'ROEFATMAX', 'ROEASHMIN', 'ROEASHMAX', 'VISCERAMOISTMIN', 'VISCERAMOISTMAX', 'VISCERAPROTMIN', 'VISCERAPROTMAX', 'VISCERAFATMIN', 'VISCERAFATMAX', 'VISCERAASHMIN', 'VISCERAASHMAX', 'HEADMOISTMIN', 'HEADMOISTMAX', 'HEADPROTMIN', 'HEADPROTMAX', 'HEADFATMIN', 'HEADFATMAX', 'HEADASHMIN', 'HEADASHMAX', 'WASTEMOISTMIN', 'WASTEMOISTMAX', 'WASTEPROTMIN', 'WASTEPROTMAX', 'WASTEFATMIN', 'WASTEFATMAX', 'WASTEASHMIN', 'WASTEASHMAX', 'COMMENTCHEMICS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'REMARK', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode', 'SpecCode', 'ChemicsRefNo', 'C_Code', 'Locality', 'Length', 'LengthUpper', 'LengthType', 'WeightLower', 'WeightUpper', 'HeadLower', 'HeadUpper', 'VisceraLower22', 'VisceraUpper22', 'TrunkLower', 'TrunkUpper', 'RoeLower', 'RoeUpper', 'SkinLower', 'SkinUpper', 'TestesLower', 'TestesUpper', 'FinsLower', 'FinsUpper', 'LiverLower', 'LiverUpper', 'BonesLower', 'BonesUpper', 'MeatLower', 'MeatUpper', 'FilletLower', 'FilletUpper', 'SteakLower', 'SteakUpper', 'Comment', 'MeatMoistMin', 'MeatMoistMax', 'MeatProtMin', 'MeatProtMax', 'MeatFatMin', 'MeatFatMax', 'MeatAshMin', 'MeatAshMax', 'LiverMoistMin', 'LiverMoistMax', 'LiverProtMin', 'LiverProtMax', 'LiverFatMin', 'LiverFatMax', 'LiverAshMin', 'LiverAshMax', 'RoeMoistMin', 'RoeMoistMax', 'RoeProtMin', 'RoeProtMax', 'RoeFatMin', 'RoeFatMax', 'RoeAshMin', 'RoeAshMax', 'VisceraMoistMin', 'VisceraMoistMax', 'VisceraProtMin', 'VisceraProtMax', 'VisceraFatMin', 'VisceraFatMax', 'VisceraAshMin', 'VisceraAshMax', 'HeadMoistMin', 'HeadMoistMax', 'HeadProtMin', 'HeadProtMax', 'HeadFatMin', 'HeadFatMax', 'HeadAshMin', 'HeadAshMax', 'WasteMoistMin', 'WasteMoistMax', 'WasteProtMin', 'WasteProtMax', 'WasteFatMin', 'WasteFatMax', 'WasteAshMin', 'WasteAshMax', 'CommentChemics', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'Remark', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ProximsPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Stockcode' => 0, 'Speccode' => 1, 'Chemicsrefno' => 2, 'CCode' => 3, 'Locality' => 4, 'Length' => 5, 'Lengthupper' => 6, 'Lengthtype' => 7, 'Weightlower' => 8, 'Weightupper' => 9, 'Headlower' => 10, 'Headupper' => 11, 'Visceralower22' => 12, 'Visceraupper22' => 13, 'Trunklower' => 14, 'Trunkupper' => 15, 'Roelower' => 16, 'Roeupper' => 17, 'Skinlower' => 18, 'Skinupper' => 19, 'Testeslower' => 20, 'Testesupper' => 21, 'Finslower' => 22, 'Finsupper' => 23, 'Liverlower' => 24, 'Liverupper' => 25, 'Boneslower' => 26, 'Bonesupper' => 27, 'Meatlower' => 28, 'Meatupper' => 29, 'Filletlower' => 30, 'Filletupper' => 31, 'Steaklower' => 32, 'Steakupper' => 33, 'Comment' => 34, 'Meatmoistmin' => 35, 'Meatmoistmax' => 36, 'Meatprotmin' => 37, 'Meatprotmax' => 38, 'Meatfatmin' => 39, 'Meatfatmax' => 40, 'Meatashmin' => 41, 'Meatashmax' => 42, 'Livermoistmin' => 43, 'Livermoistmax' => 44, 'Liverprotmin' => 45, 'Liverprotmax' => 46, 'Liverfatmin' => 47, 'Liverfatmax' => 48, 'Liverashmin' => 49, 'Liverashmax' => 50, 'Roemoistmin' => 51, 'Roemoistmax' => 52, 'Roeprotmin' => 53, 'Roeprotmax' => 54, 'Roefatmin' => 55, 'Roefatmax' => 56, 'Roeashmin' => 57, 'Roeashmax' => 58, 'Visceramoistmin' => 59, 'Visceramoistmax' => 60, 'Visceraprotmin' => 61, 'Visceraprotmax' => 62, 'Viscerafatmin' => 63, 'Viscerafatmax' => 64, 'Visceraashmin' => 65, 'Visceraashmax' => 66, 'Headmoistmin' => 67, 'Headmoistmax' => 68, 'Headprotmin' => 69, 'Headprotmax' => 70, 'Headfatmin' => 71, 'Headfatmax' => 72, 'Headashmin' => 73, 'Headashmax' => 74, 'Wastemoistmin' => 75, 'Wastemoistmax' => 76, 'Wasteprotmin' => 77, 'Wasteprotmax' => 78, 'Wastefatmin' => 79, 'Wastefatmax' => 80, 'Wasteashmin' => 81, 'Wasteashmax' => 82, 'Commentchemics' => 83, 'Entered' => 84, 'Dateentered' => 85, 'Modified' => 86, 'Datemodified' => 87, 'Expert' => 88, 'Datechecked' => 89, 'Remark' => 90, 'Ts' => 91, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('stockcode' => 0, 'speccode' => 1, 'chemicsrefno' => 2, 'cCode' => 3, 'locality' => 4, 'length' => 5, 'lengthupper' => 6, 'lengthtype' => 7, 'weightlower' => 8, 'weightupper' => 9, 'headlower' => 10, 'headupper' => 11, 'visceralower22' => 12, 'visceraupper22' => 13, 'trunklower' => 14, 'trunkupper' => 15, 'roelower' => 16, 'roeupper' => 17, 'skinlower' => 18, 'skinupper' => 19, 'testeslower' => 20, 'testesupper' => 21, 'finslower' => 22, 'finsupper' => 23, 'liverlower' => 24, 'liverupper' => 25, 'boneslower' => 26, 'bonesupper' => 27, 'meatlower' => 28, 'meatupper' => 29, 'filletlower' => 30, 'filletupper' => 31, 'steaklower' => 32, 'steakupper' => 33, 'comment' => 34, 'meatmoistmin' => 35, 'meatmoistmax' => 36, 'meatprotmin' => 37, 'meatprotmax' => 38, 'meatfatmin' => 39, 'meatfatmax' => 40, 'meatashmin' => 41, 'meatashmax' => 42, 'livermoistmin' => 43, 'livermoistmax' => 44, 'liverprotmin' => 45, 'liverprotmax' => 46, 'liverfatmin' => 47, 'liverfatmax' => 48, 'liverashmin' => 49, 'liverashmax' => 50, 'roemoistmin' => 51, 'roemoistmax' => 52, 'roeprotmin' => 53, 'roeprotmax' => 54, 'roefatmin' => 55, 'roefatmax' => 56, 'roeashmin' => 57, 'roeashmax' => 58, 'visceramoistmin' => 59, 'visceramoistmax' => 60, 'visceraprotmin' => 61, 'visceraprotmax' => 62, 'viscerafatmin' => 63, 'viscerafatmax' => 64, 'visceraashmin' => 65, 'visceraashmax' => 66, 'headmoistmin' => 67, 'headmoistmax' => 68, 'headprotmin' => 69, 'headprotmax' => 70, 'headfatmin' => 71, 'headfatmax' => 72, 'headashmin' => 73, 'headashmax' => 74, 'wastemoistmin' => 75, 'wastemoistmax' => 76, 'wasteprotmin' => 77, 'wasteprotmax' => 78, 'wastefatmin' => 79, 'wastefatmax' => 80, 'wasteashmin' => 81, 'wasteashmax' => 82, 'commentchemics' => 83, 'entered' => 84, 'dateentered' => 85, 'modified' => 86, 'datemodified' => 87, 'expert' => 88, 'datechecked' => 89, 'remark' => 90, 'ts' => 91, ),
        BasePeer::TYPE_COLNAME => array (ProximsPeer::STOCKCODE => 0, ProximsPeer::SPECCODE => 1, ProximsPeer::CHEMICSREFNO => 2, ProximsPeer::C_CODE => 3, ProximsPeer::LOCALITY => 4, ProximsPeer::LENGTH => 5, ProximsPeer::LENGTHUPPER => 6, ProximsPeer::LENGTHTYPE => 7, ProximsPeer::WEIGHTLOWER => 8, ProximsPeer::WEIGHTUPPER => 9, ProximsPeer::HEADLOWER => 10, ProximsPeer::HEADUPPER => 11, ProximsPeer::VISCERALOWER22 => 12, ProximsPeer::VISCERAUPPER22 => 13, ProximsPeer::TRUNKLOWER => 14, ProximsPeer::TRUNKUPPER => 15, ProximsPeer::ROELOWER => 16, ProximsPeer::ROEUPPER => 17, ProximsPeer::SKINLOWER => 18, ProximsPeer::SKINUPPER => 19, ProximsPeer::TESTESLOWER => 20, ProximsPeer::TESTESUPPER => 21, ProximsPeer::FINSLOWER => 22, ProximsPeer::FINSUPPER => 23, ProximsPeer::LIVERLOWER => 24, ProximsPeer::LIVERUPPER => 25, ProximsPeer::BONESLOWER => 26, ProximsPeer::BONESUPPER => 27, ProximsPeer::MEATLOWER => 28, ProximsPeer::MEATUPPER => 29, ProximsPeer::FILLETLOWER => 30, ProximsPeer::FILLETUPPER => 31, ProximsPeer::STEAKLOWER => 32, ProximsPeer::STEAKUPPER => 33, ProximsPeer::COMMENT => 34, ProximsPeer::MEATMOISTMIN => 35, ProximsPeer::MEATMOISTMAX => 36, ProximsPeer::MEATPROTMIN => 37, ProximsPeer::MEATPROTMAX => 38, ProximsPeer::MEATFATMIN => 39, ProximsPeer::MEATFATMAX => 40, ProximsPeer::MEATASHMIN => 41, ProximsPeer::MEATASHMAX => 42, ProximsPeer::LIVERMOISTMIN => 43, ProximsPeer::LIVERMOISTMAX => 44, ProximsPeer::LIVERPROTMIN => 45, ProximsPeer::LIVERPROTMAX => 46, ProximsPeer::LIVERFATMIN => 47, ProximsPeer::LIVERFATMAX => 48, ProximsPeer::LIVERASHMIN => 49, ProximsPeer::LIVERASHMAX => 50, ProximsPeer::ROEMOISTMIN => 51, ProximsPeer::ROEMOISTMAX => 52, ProximsPeer::ROEPROTMIN => 53, ProximsPeer::ROEPROTMAX => 54, ProximsPeer::ROEFATMIN => 55, ProximsPeer::ROEFATMAX => 56, ProximsPeer::ROEASHMIN => 57, ProximsPeer::ROEASHMAX => 58, ProximsPeer::VISCERAMOISTMIN => 59, ProximsPeer::VISCERAMOISTMAX => 60, ProximsPeer::VISCERAPROTMIN => 61, ProximsPeer::VISCERAPROTMAX => 62, ProximsPeer::VISCERAFATMIN => 63, ProximsPeer::VISCERAFATMAX => 64, ProximsPeer::VISCERAASHMIN => 65, ProximsPeer::VISCERAASHMAX => 66, ProximsPeer::HEADMOISTMIN => 67, ProximsPeer::HEADMOISTMAX => 68, ProximsPeer::HEADPROTMIN => 69, ProximsPeer::HEADPROTMAX => 70, ProximsPeer::HEADFATMIN => 71, ProximsPeer::HEADFATMAX => 72, ProximsPeer::HEADASHMIN => 73, ProximsPeer::HEADASHMAX => 74, ProximsPeer::WASTEMOISTMIN => 75, ProximsPeer::WASTEMOISTMAX => 76, ProximsPeer::WASTEPROTMIN => 77, ProximsPeer::WASTEPROTMAX => 78, ProximsPeer::WASTEFATMIN => 79, ProximsPeer::WASTEFATMAX => 80, ProximsPeer::WASTEASHMIN => 81, ProximsPeer::WASTEASHMAX => 82, ProximsPeer::COMMENTCHEMICS => 83, ProximsPeer::ENTERED => 84, ProximsPeer::DATEENTERED => 85, ProximsPeer::MODIFIED => 86, ProximsPeer::DATEMODIFIED => 87, ProximsPeer::EXPERT => 88, ProximsPeer::DATECHECKED => 89, ProximsPeer::REMARK => 90, ProximsPeer::TS => 91, ),
        BasePeer::TYPE_RAW_COLNAME => array ('STOCKCODE' => 0, 'SPECCODE' => 1, 'CHEMICSREFNO' => 2, 'C_CODE' => 3, 'LOCALITY' => 4, 'LENGTH' => 5, 'LENGTHUPPER' => 6, 'LENGTHTYPE' => 7, 'WEIGHTLOWER' => 8, 'WEIGHTUPPER' => 9, 'HEADLOWER' => 10, 'HEADUPPER' => 11, 'VISCERALOWER22' => 12, 'VISCERAUPPER22' => 13, 'TRUNKLOWER' => 14, 'TRUNKUPPER' => 15, 'ROELOWER' => 16, 'ROEUPPER' => 17, 'SKINLOWER' => 18, 'SKINUPPER' => 19, 'TESTESLOWER' => 20, 'TESTESUPPER' => 21, 'FINSLOWER' => 22, 'FINSUPPER' => 23, 'LIVERLOWER' => 24, 'LIVERUPPER' => 25, 'BONESLOWER' => 26, 'BONESUPPER' => 27, 'MEATLOWER' => 28, 'MEATUPPER' => 29, 'FILLETLOWER' => 30, 'FILLETUPPER' => 31, 'STEAKLOWER' => 32, 'STEAKUPPER' => 33, 'COMMENT' => 34, 'MEATMOISTMIN' => 35, 'MEATMOISTMAX' => 36, 'MEATPROTMIN' => 37, 'MEATPROTMAX' => 38, 'MEATFATMIN' => 39, 'MEATFATMAX' => 40, 'MEATASHMIN' => 41, 'MEATASHMAX' => 42, 'LIVERMOISTMIN' => 43, 'LIVERMOISTMAX' => 44, 'LIVERPROTMIN' => 45, 'LIVERPROTMAX' => 46, 'LIVERFATMIN' => 47, 'LIVERFATMAX' => 48, 'LIVERASHMIN' => 49, 'LIVERASHMAX' => 50, 'ROEMOISTMIN' => 51, 'ROEMOISTMAX' => 52, 'ROEPROTMIN' => 53, 'ROEPROTMAX' => 54, 'ROEFATMIN' => 55, 'ROEFATMAX' => 56, 'ROEASHMIN' => 57, 'ROEASHMAX' => 58, 'VISCERAMOISTMIN' => 59, 'VISCERAMOISTMAX' => 60, 'VISCERAPROTMIN' => 61, 'VISCERAPROTMAX' => 62, 'VISCERAFATMIN' => 63, 'VISCERAFATMAX' => 64, 'VISCERAASHMIN' => 65, 'VISCERAASHMAX' => 66, 'HEADMOISTMIN' => 67, 'HEADMOISTMAX' => 68, 'HEADPROTMIN' => 69, 'HEADPROTMAX' => 70, 'HEADFATMIN' => 71, 'HEADFATMAX' => 72, 'HEADASHMIN' => 73, 'HEADASHMAX' => 74, 'WASTEMOISTMIN' => 75, 'WASTEMOISTMAX' => 76, 'WASTEPROTMIN' => 77, 'WASTEPROTMAX' => 78, 'WASTEFATMIN' => 79, 'WASTEFATMAX' => 80, 'WASTEASHMIN' => 81, 'WASTEASHMAX' => 82, 'COMMENTCHEMICS' => 83, 'ENTERED' => 84, 'DATEENTERED' => 85, 'MODIFIED' => 86, 'DATEMODIFIED' => 87, 'EXPERT' => 88, 'DATECHECKED' => 89, 'REMARK' => 90, 'TS' => 91, ),
        BasePeer::TYPE_FIELDNAME => array ('StockCode' => 0, 'SpecCode' => 1, 'ChemicsRefNo' => 2, 'C_Code' => 3, 'Locality' => 4, 'Length' => 5, 'LengthUpper' => 6, 'LengthType' => 7, 'WeightLower' => 8, 'WeightUpper' => 9, 'HeadLower' => 10, 'HeadUpper' => 11, 'VisceraLower22' => 12, 'VisceraUpper22' => 13, 'TrunkLower' => 14, 'TrunkUpper' => 15, 'RoeLower' => 16, 'RoeUpper' => 17, 'SkinLower' => 18, 'SkinUpper' => 19, 'TestesLower' => 20, 'TestesUpper' => 21, 'FinsLower' => 22, 'FinsUpper' => 23, 'LiverLower' => 24, 'LiverUpper' => 25, 'BonesLower' => 26, 'BonesUpper' => 27, 'MeatLower' => 28, 'MeatUpper' => 29, 'FilletLower' => 30, 'FilletUpper' => 31, 'SteakLower' => 32, 'SteakUpper' => 33, 'Comment' => 34, 'MeatMoistMin' => 35, 'MeatMoistMax' => 36, 'MeatProtMin' => 37, 'MeatProtMax' => 38, 'MeatFatMin' => 39, 'MeatFatMax' => 40, 'MeatAshMin' => 41, 'MeatAshMax' => 42, 'LiverMoistMin' => 43, 'LiverMoistMax' => 44, 'LiverProtMin' => 45, 'LiverProtMax' => 46, 'LiverFatMin' => 47, 'LiverFatMax' => 48, 'LiverAshMin' => 49, 'LiverAshMax' => 50, 'RoeMoistMin' => 51, 'RoeMoistMax' => 52, 'RoeProtMin' => 53, 'RoeProtMax' => 54, 'RoeFatMin' => 55, 'RoeFatMax' => 56, 'RoeAshMin' => 57, 'RoeAshMax' => 58, 'VisceraMoistMin' => 59, 'VisceraMoistMax' => 60, 'VisceraProtMin' => 61, 'VisceraProtMax' => 62, 'VisceraFatMin' => 63, 'VisceraFatMax' => 64, 'VisceraAshMin' => 65, 'VisceraAshMax' => 66, 'HeadMoistMin' => 67, 'HeadMoistMax' => 68, 'HeadProtMin' => 69, 'HeadProtMax' => 70, 'HeadFatMin' => 71, 'HeadFatMax' => 72, 'HeadAshMin' => 73, 'HeadAshMax' => 74, 'WasteMoistMin' => 75, 'WasteMoistMax' => 76, 'WasteProtMin' => 77, 'WasteProtMax' => 78, 'WasteFatMin' => 79, 'WasteFatMax' => 80, 'WasteAshMin' => 81, 'WasteAshMax' => 82, 'CommentChemics' => 83, 'Entered' => 84, 'DateEntered' => 85, 'Modified' => 86, 'DateModified' => 87, 'Expert' => 88, 'DateChecked' => 89, 'Remark' => 90, 'TS' => 91, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, )
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
        $toNames = ProximsPeer::getFieldNames($toType);
        $key = isset(ProximsPeer::$fieldKeys[$fromType][$name]) ? ProximsPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ProximsPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ProximsPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ProximsPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ProximsPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ProximsPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ProximsPeer::STOCKCODE);
            $criteria->addSelectColumn(ProximsPeer::SPECCODE);
            $criteria->addSelectColumn(ProximsPeer::CHEMICSREFNO);
            $criteria->addSelectColumn(ProximsPeer::C_CODE);
            $criteria->addSelectColumn(ProximsPeer::LOCALITY);
            $criteria->addSelectColumn(ProximsPeer::LENGTH);
            $criteria->addSelectColumn(ProximsPeer::LENGTHUPPER);
            $criteria->addSelectColumn(ProximsPeer::LENGTHTYPE);
            $criteria->addSelectColumn(ProximsPeer::WEIGHTLOWER);
            $criteria->addSelectColumn(ProximsPeer::WEIGHTUPPER);
            $criteria->addSelectColumn(ProximsPeer::HEADLOWER);
            $criteria->addSelectColumn(ProximsPeer::HEADUPPER);
            $criteria->addSelectColumn(ProximsPeer::VISCERALOWER22);
            $criteria->addSelectColumn(ProximsPeer::VISCERAUPPER22);
            $criteria->addSelectColumn(ProximsPeer::TRUNKLOWER);
            $criteria->addSelectColumn(ProximsPeer::TRUNKUPPER);
            $criteria->addSelectColumn(ProximsPeer::ROELOWER);
            $criteria->addSelectColumn(ProximsPeer::ROEUPPER);
            $criteria->addSelectColumn(ProximsPeer::SKINLOWER);
            $criteria->addSelectColumn(ProximsPeer::SKINUPPER);
            $criteria->addSelectColumn(ProximsPeer::TESTESLOWER);
            $criteria->addSelectColumn(ProximsPeer::TESTESUPPER);
            $criteria->addSelectColumn(ProximsPeer::FINSLOWER);
            $criteria->addSelectColumn(ProximsPeer::FINSUPPER);
            $criteria->addSelectColumn(ProximsPeer::LIVERLOWER);
            $criteria->addSelectColumn(ProximsPeer::LIVERUPPER);
            $criteria->addSelectColumn(ProximsPeer::BONESLOWER);
            $criteria->addSelectColumn(ProximsPeer::BONESUPPER);
            $criteria->addSelectColumn(ProximsPeer::MEATLOWER);
            $criteria->addSelectColumn(ProximsPeer::MEATUPPER);
            $criteria->addSelectColumn(ProximsPeer::FILLETLOWER);
            $criteria->addSelectColumn(ProximsPeer::FILLETUPPER);
            $criteria->addSelectColumn(ProximsPeer::STEAKLOWER);
            $criteria->addSelectColumn(ProximsPeer::STEAKUPPER);
            $criteria->addSelectColumn(ProximsPeer::COMMENT);
            $criteria->addSelectColumn(ProximsPeer::MEATMOISTMIN);
            $criteria->addSelectColumn(ProximsPeer::MEATMOISTMAX);
            $criteria->addSelectColumn(ProximsPeer::MEATPROTMIN);
            $criteria->addSelectColumn(ProximsPeer::MEATPROTMAX);
            $criteria->addSelectColumn(ProximsPeer::MEATFATMIN);
            $criteria->addSelectColumn(ProximsPeer::MEATFATMAX);
            $criteria->addSelectColumn(ProximsPeer::MEATASHMIN);
            $criteria->addSelectColumn(ProximsPeer::MEATASHMAX);
            $criteria->addSelectColumn(ProximsPeer::LIVERMOISTMIN);
            $criteria->addSelectColumn(ProximsPeer::LIVERMOISTMAX);
            $criteria->addSelectColumn(ProximsPeer::LIVERPROTMIN);
            $criteria->addSelectColumn(ProximsPeer::LIVERPROTMAX);
            $criteria->addSelectColumn(ProximsPeer::LIVERFATMIN);
            $criteria->addSelectColumn(ProximsPeer::LIVERFATMAX);
            $criteria->addSelectColumn(ProximsPeer::LIVERASHMIN);
            $criteria->addSelectColumn(ProximsPeer::LIVERASHMAX);
            $criteria->addSelectColumn(ProximsPeer::ROEMOISTMIN);
            $criteria->addSelectColumn(ProximsPeer::ROEMOISTMAX);
            $criteria->addSelectColumn(ProximsPeer::ROEPROTMIN);
            $criteria->addSelectColumn(ProximsPeer::ROEPROTMAX);
            $criteria->addSelectColumn(ProximsPeer::ROEFATMIN);
            $criteria->addSelectColumn(ProximsPeer::ROEFATMAX);
            $criteria->addSelectColumn(ProximsPeer::ROEASHMIN);
            $criteria->addSelectColumn(ProximsPeer::ROEASHMAX);
            $criteria->addSelectColumn(ProximsPeer::VISCERAMOISTMIN);
            $criteria->addSelectColumn(ProximsPeer::VISCERAMOISTMAX);
            $criteria->addSelectColumn(ProximsPeer::VISCERAPROTMIN);
            $criteria->addSelectColumn(ProximsPeer::VISCERAPROTMAX);
            $criteria->addSelectColumn(ProximsPeer::VISCERAFATMIN);
            $criteria->addSelectColumn(ProximsPeer::VISCERAFATMAX);
            $criteria->addSelectColumn(ProximsPeer::VISCERAASHMIN);
            $criteria->addSelectColumn(ProximsPeer::VISCERAASHMAX);
            $criteria->addSelectColumn(ProximsPeer::HEADMOISTMIN);
            $criteria->addSelectColumn(ProximsPeer::HEADMOISTMAX);
            $criteria->addSelectColumn(ProximsPeer::HEADPROTMIN);
            $criteria->addSelectColumn(ProximsPeer::HEADPROTMAX);
            $criteria->addSelectColumn(ProximsPeer::HEADFATMIN);
            $criteria->addSelectColumn(ProximsPeer::HEADFATMAX);
            $criteria->addSelectColumn(ProximsPeer::HEADASHMIN);
            $criteria->addSelectColumn(ProximsPeer::HEADASHMAX);
            $criteria->addSelectColumn(ProximsPeer::WASTEMOISTMIN);
            $criteria->addSelectColumn(ProximsPeer::WASTEMOISTMAX);
            $criteria->addSelectColumn(ProximsPeer::WASTEPROTMIN);
            $criteria->addSelectColumn(ProximsPeer::WASTEPROTMAX);
            $criteria->addSelectColumn(ProximsPeer::WASTEFATMIN);
            $criteria->addSelectColumn(ProximsPeer::WASTEFATMAX);
            $criteria->addSelectColumn(ProximsPeer::WASTEASHMIN);
            $criteria->addSelectColumn(ProximsPeer::WASTEASHMAX);
            $criteria->addSelectColumn(ProximsPeer::COMMENTCHEMICS);
            $criteria->addSelectColumn(ProximsPeer::ENTERED);
            $criteria->addSelectColumn(ProximsPeer::DATEENTERED);
            $criteria->addSelectColumn(ProximsPeer::MODIFIED);
            $criteria->addSelectColumn(ProximsPeer::DATEMODIFIED);
            $criteria->addSelectColumn(ProximsPeer::EXPERT);
            $criteria->addSelectColumn(ProximsPeer::DATECHECKED);
            $criteria->addSelectColumn(ProximsPeer::REMARK);
            $criteria->addSelectColumn(ProximsPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.ChemicsRefNo');
            $criteria->addSelectColumn($alias . '.C_Code');
            $criteria->addSelectColumn($alias . '.Locality');
            $criteria->addSelectColumn($alias . '.Length');
            $criteria->addSelectColumn($alias . '.LengthUpper');
            $criteria->addSelectColumn($alias . '.LengthType');
            $criteria->addSelectColumn($alias . '.WeightLower');
            $criteria->addSelectColumn($alias . '.WeightUpper');
            $criteria->addSelectColumn($alias . '.HeadLower');
            $criteria->addSelectColumn($alias . '.HeadUpper');
            $criteria->addSelectColumn($alias . '.VisceraLower22');
            $criteria->addSelectColumn($alias . '.VisceraUpper22');
            $criteria->addSelectColumn($alias . '.TrunkLower');
            $criteria->addSelectColumn($alias . '.TrunkUpper');
            $criteria->addSelectColumn($alias . '.RoeLower');
            $criteria->addSelectColumn($alias . '.RoeUpper');
            $criteria->addSelectColumn($alias . '.SkinLower');
            $criteria->addSelectColumn($alias . '.SkinUpper');
            $criteria->addSelectColumn($alias . '.TestesLower');
            $criteria->addSelectColumn($alias . '.TestesUpper');
            $criteria->addSelectColumn($alias . '.FinsLower');
            $criteria->addSelectColumn($alias . '.FinsUpper');
            $criteria->addSelectColumn($alias . '.LiverLower');
            $criteria->addSelectColumn($alias . '.LiverUpper');
            $criteria->addSelectColumn($alias . '.BonesLower');
            $criteria->addSelectColumn($alias . '.BonesUpper');
            $criteria->addSelectColumn($alias . '.MeatLower');
            $criteria->addSelectColumn($alias . '.MeatUpper');
            $criteria->addSelectColumn($alias . '.FilletLower');
            $criteria->addSelectColumn($alias . '.FilletUpper');
            $criteria->addSelectColumn($alias . '.SteakLower');
            $criteria->addSelectColumn($alias . '.SteakUpper');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.MeatMoistMin');
            $criteria->addSelectColumn($alias . '.MeatMoistMax');
            $criteria->addSelectColumn($alias . '.MeatProtMin');
            $criteria->addSelectColumn($alias . '.MeatProtMax');
            $criteria->addSelectColumn($alias . '.MeatFatMin');
            $criteria->addSelectColumn($alias . '.MeatFatMax');
            $criteria->addSelectColumn($alias . '.MeatAshMin');
            $criteria->addSelectColumn($alias . '.MeatAshMax');
            $criteria->addSelectColumn($alias . '.LiverMoistMin');
            $criteria->addSelectColumn($alias . '.LiverMoistMax');
            $criteria->addSelectColumn($alias . '.LiverProtMin');
            $criteria->addSelectColumn($alias . '.LiverProtMax');
            $criteria->addSelectColumn($alias . '.LiverFatMin');
            $criteria->addSelectColumn($alias . '.LiverFatMax');
            $criteria->addSelectColumn($alias . '.LiverAshMin');
            $criteria->addSelectColumn($alias . '.LiverAshMax');
            $criteria->addSelectColumn($alias . '.RoeMoistMin');
            $criteria->addSelectColumn($alias . '.RoeMoistMax');
            $criteria->addSelectColumn($alias . '.RoeProtMin');
            $criteria->addSelectColumn($alias . '.RoeProtMax');
            $criteria->addSelectColumn($alias . '.RoeFatMin');
            $criteria->addSelectColumn($alias . '.RoeFatMax');
            $criteria->addSelectColumn($alias . '.RoeAshMin');
            $criteria->addSelectColumn($alias . '.RoeAshMax');
            $criteria->addSelectColumn($alias . '.VisceraMoistMin');
            $criteria->addSelectColumn($alias . '.VisceraMoistMax');
            $criteria->addSelectColumn($alias . '.VisceraProtMin');
            $criteria->addSelectColumn($alias . '.VisceraProtMax');
            $criteria->addSelectColumn($alias . '.VisceraFatMin');
            $criteria->addSelectColumn($alias . '.VisceraFatMax');
            $criteria->addSelectColumn($alias . '.VisceraAshMin');
            $criteria->addSelectColumn($alias . '.VisceraAshMax');
            $criteria->addSelectColumn($alias . '.HeadMoistMin');
            $criteria->addSelectColumn($alias . '.HeadMoistMax');
            $criteria->addSelectColumn($alias . '.HeadProtMin');
            $criteria->addSelectColumn($alias . '.HeadProtMax');
            $criteria->addSelectColumn($alias . '.HeadFatMin');
            $criteria->addSelectColumn($alias . '.HeadFatMax');
            $criteria->addSelectColumn($alias . '.HeadAshMin');
            $criteria->addSelectColumn($alias . '.HeadAshMax');
            $criteria->addSelectColumn($alias . '.WasteMoistMin');
            $criteria->addSelectColumn($alias . '.WasteMoistMax');
            $criteria->addSelectColumn($alias . '.WasteProtMin');
            $criteria->addSelectColumn($alias . '.WasteProtMax');
            $criteria->addSelectColumn($alias . '.WasteFatMin');
            $criteria->addSelectColumn($alias . '.WasteFatMax');
            $criteria->addSelectColumn($alias . '.WasteAshMin');
            $criteria->addSelectColumn($alias . '.WasteAshMax');
            $criteria->addSelectColumn($alias . '.CommentChemics');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.Remark');
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
        $criteria->setPrimaryTableName(ProximsPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProximsPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ProximsPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ProximsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Proxims
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ProximsPeer::doSelect($critcopy, $con);
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
        return ProximsPeer::populateObjects(ProximsPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ProximsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ProximsPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ProximsPeer::DATABASE_NAME);

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
     * @param Proxims $obj A Proxims object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getChemicsrefno(), (string) $obj->getLocality()));
            } // if key === null
            ProximsPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Proxims object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Proxims) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getChemicsrefno(), (string) $value->getLocality()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Proxims object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ProximsPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Proxims Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ProximsPeer::$instances[$key])) {
                return ProximsPeer::$instances[$key];
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
        foreach (ProximsPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ProximsPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to proxims
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
        if ($row[$startcol] === null && $row[$startcol + 2] === null && $row[$startcol + 4] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 2], (string) $row[$startcol + 4]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 2], (string) $row[$startcol + 4]);
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
        $cls = ProximsPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ProximsPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ProximsPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProximsPeer::addInstanceToPool($obj, $key);
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
     * @return array (Proxims object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ProximsPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ProximsPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ProximsPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ProximsPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ProximsPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(ProximsPeer::DATABASE_NAME)->getTable(ProximsPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseProximsPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseProximsPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ProximsTableMap());
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
        return ProximsPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Proxims or Criteria object.
     *
     * @param      mixed $values Criteria or Proxims object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProximsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Proxims object
        }


        // Set the correct dbName
        $criteria->setDbName(ProximsPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Proxims or Criteria object.
     *
     * @param      mixed $values Criteria or Proxims object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProximsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ProximsPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ProximsPeer::STOCKCODE);
            $value = $criteria->remove(ProximsPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(ProximsPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ProximsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ProximsPeer::CHEMICSREFNO);
            $value = $criteria->remove(ProximsPeer::CHEMICSREFNO);
            if ($value) {
                $selectCriteria->add(ProximsPeer::CHEMICSREFNO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ProximsPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(ProximsPeer::LOCALITY);
            $value = $criteria->remove(ProximsPeer::LOCALITY);
            if ($value) {
                $selectCriteria->add(ProximsPeer::LOCALITY, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ProximsPeer::TABLE_NAME);
            }

        } else { // $values is Proxims object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ProximsPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the proxims table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProximsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(ProximsPeer::TABLE_NAME, $con, ProximsPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProximsPeer::clearInstancePool();
            ProximsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Proxims or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Proxims object or primary key or array of primary keys
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
            $con = Propel::getConnection(ProximsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            ProximsPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Proxims) { // it's a model object
            // invalidate the cache for this single object
            ProximsPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProximsPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(ProximsPeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(ProximsPeer::CHEMICSREFNO, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(ProximsPeer::LOCALITY, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                ProximsPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(ProximsPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ProximsPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Proxims object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Proxims $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ProximsPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ProximsPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ProximsPeer::DATABASE_NAME, ProximsPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stockcode
     * @param   int $chemicsrefno
     * @param   string $locality
     * @param      PropelPDO $con
     * @return Proxims
     */
    public static function retrieveByPK($stockcode, $chemicsrefno, $locality, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $chemicsrefno, (string) $locality));
         if (null !== ($obj = ProximsPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ProximsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(ProximsPeer::DATABASE_NAME);
        $criteria->add(ProximsPeer::STOCKCODE, $stockcode);
        $criteria->add(ProximsPeer::CHEMICSREFNO, $chemicsrefno);
        $criteria->add(ProximsPeer::LOCALITY, $locality);
        $v = ProximsPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseProximsPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseProximsPeer::buildTableMap();

