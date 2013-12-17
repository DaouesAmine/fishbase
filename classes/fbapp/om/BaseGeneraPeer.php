<?php


/**
 * Base static class for performing query and update operations on the 'genera' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseGeneraPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'genera';

    /** the related Propel class for this table */
    const OM_CLASS = 'Genera';

    /** the related TableMap class for this table */
    const TM_CLASS = 'GeneraTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 56;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 56;

    /** the column name for the GenCode field */
    const GENCODE = 'genera.GenCode';

    /** the column name for the GenName field */
    const GENNAME = 'genera.GenName';

    /** the column name for the GenAuthorYear field */
    const GENAUTHORYEAR = 'genera.GenAuthorYear';

    /** the column name for the GenAuthor field */
    const GENAUTHOR = 'genera.GenAuthor';

    /** the column name for the GenYear field */
    const GENYEAR = 'genera.GenYear';

    /** the column name for the GenInEx field */
    const GENINEX = 'genera.GenInEx';

    /** the column name for the GenComName field */
    const GENCOMNAME = 'genera.GenComName';

    /** the column name for the GenRefno field */
    const GENREFNO = 'genera.GenRefno';

    /** the column name for the Available field */
    const AVAILABLE = 'genera.Available';

    /** the column name for the GenStatus field */
    const GENSTATUS = 'genera.GenStatus';

    /** the column name for the GenStatusICZN field */
    const GENSTATUSICZN = 'genera.GenStatusICZN';

    /** the column name for the GenCodeValid field */
    const GENCODEVALID = 'genera.GenCodeValid';

    /** the column name for the Remark field */
    const REMARK = 'genera.Remark';

    /** the column name for the Etymology field */
    const ETYMOLOGY = 'genera.Etymology';

    /** the column name for the Gender field */
    const GENDER = 'genera.Gender';

    /** the column name for the SubgenusOf field */
    const SUBGENUSOF = 'genera.SubgenusOf';

    /** the column name for the FamCode field */
    const FAMCODE = 'genera.FamCode';

    /** the column name for the Subfamily field */
    const SUBFAMILY = 'genera.Subfamily';

    /** the column name for the Tribe field */
    const TRIBE = 'genera.Tribe';

    /** the column name for the BodyShapeI field */
    const BODYSHAPEI = 'genera.BodyShapeI';

    /** the column name for the Comment field */
    const COMMENT = 'genera.Comment';

    /** the column name for the SynCode field */
    const SYNCODE = 'genera.SynCode';

    /** the column name for the FB_SppNb field */
    const FB_SPPNB = 'genera.FB_SppNb';

    /** the column name for the CofF_SppNb field */
    const COFF_SPPNB = 'genera.CofF_SppNb';

    /** the column name for the FoW_SppNb field */
    const FOW_SPPNB = 'genera.FoW_SppNb';

    /** the column name for the GSD_GenusFk field */
    const GSD_GENUSFK = 'genera.GSD_GenusFk';

    /** the column name for the GSD_GenusRefFk field */
    const GSD_GENUSREFFK = 'genera.GSD_GenusRefFk';

    /** the column name for the Distribution field */
    const DISTRIBUTION = 'genera.Distribution';

    /** the column name for the Habitat field */
    const HABITAT = 'genera.Habitat';

    /** the column name for the WaterSalinity field */
    const WATERSALINITY = 'genera.WaterSalinity';

    /** the column name for the Marine field */
    const MARINE = 'genera.Marine';

    /** the column name for the Brackish field */
    const BRACKISH = 'genera.Brackish';

    /** the column name for the Freshwater field */
    const FRESHWATER = 'genera.Freshwater';

    /** the column name for the Diagnosis field */
    const DIAGNOSIS = 'genera.Diagnosis';

    /** the column name for the DspinesMin field */
    const DSPINESMIN = 'genera.DspinesMin';

    /** the column name for the DspinesMax field */
    const DSPINESMAX = 'genera.DspinesMax';

    /** the column name for the DsoftRaysMin field */
    const DSOFTRAYSMIN = 'genera.DsoftRaysMin';

    /** the column name for the DsoftRaysMax field */
    const DSOFTRAYSMAX = 'genera.DsoftRaysMax';

    /** the column name for the TotalDsoftRaysMin field */
    const TOTALDSOFTRAYSMIN = 'genera.TotalDsoftRaysMin';

    /** the column name for the TotalDsoftRaysMax field */
    const TOTALDSOFTRAYSMAX = 'genera.TotalDsoftRaysMax';

    /** the column name for the DsoftRaysBranchMin field */
    const DSOFTRAYSBRANCHMIN = 'genera.DsoftRaysBranchMin';

    /** the column name for the DsoftRaysBranchMax field */
    const DSOFTRAYSBRANCHMAX = 'genera.DsoftRaysBranchMax';

    /** the column name for the AspinesMin field */
    const ASPINESMIN = 'genera.AspinesMin';

    /** the column name for the AspinesMax field */
    const ASPINESMAX = 'genera.AspinesMax';

    /** the column name for the AsoftRaysMin field */
    const ASOFTRAYSMIN = 'genera.AsoftRaysMin';

    /** the column name for the AsoftRaysMax field */
    const ASOFTRAYSMAX = 'genera.AsoftRaysMax';

    /** the column name for the TotalAsoftRaysMin field */
    const TOTALASOFTRAYSMIN = 'genera.TotalAsoftRaysMin';

    /** the column name for the TotalAsoftRaysMax field */
    const TOTALASOFTRAYSMAX = 'genera.TotalAsoftRaysMax';

    /** the column name for the AsoftRaysBranchMin field */
    const ASOFTRAYSBRANCHMIN = 'genera.AsoftRaysBranchMin';

    /** the column name for the AsoftRaysBranchMax field */
    const ASOFTRAYSBRANCHMAX = 'genera.AsoftRaysBranchMax';

    /** the column name for the Entered field */
    const ENTERED = 'genera.Entered';

    /** the column name for the Dateentered field */
    const DATEENTERED = 'genera.Dateentered';

    /** the column name for the Modified field */
    const MODIFIED = 'genera.Modified';

    /** the column name for the Datemodified field */
    const DATEMODIFIED = 'genera.Datemodified';

    /** the column name for the Expert field */
    const EXPERT = 'genera.Expert';

    /** the column name for the Datechecked field */
    const DATECHECKED = 'genera.Datechecked';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Genera objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Genera[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. GeneraPeer::$fieldNames[GeneraPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Gencode', 'Genname', 'Genauthoryear', 'Genauthor', 'Genyear', 'Geninex', 'Gencomname', 'Genrefno', 'Available', 'Genstatus', 'Genstatusiczn', 'Gencodevalid', 'Remark', 'Etymology', 'Gender', 'Subgenusof', 'Famcode', 'Subfamily', 'Tribe', 'Bodyshapei', 'Comment', 'Syncode', 'FbSppnb', 'CoffSppnb', 'FowSppnb', 'GsdGenusfk', 'GsdGenusreffk', 'Distribution', 'Habitat', 'Watersalinity', 'Marine', 'Brackish', 'Freshwater', 'Diagnosis', 'Dspinesmin', 'Dspinesmax', 'Dsoftraysmin', 'Dsoftraysmax', 'Totaldsoftraysmin', 'Totaldsoftraysmax', 'Dsoftraysbranchmin', 'Dsoftraysbranchmax', 'Aspinesmin', 'Aspinesmax', 'Asoftraysmin', 'Asoftraysmax', 'Totalasoftraysmin', 'Totalasoftraysmax', 'Asoftraysbranchmin', 'Asoftraysbranchmax', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('gencode', 'genname', 'genauthoryear', 'genauthor', 'genyear', 'geninex', 'gencomname', 'genrefno', 'available', 'genstatus', 'genstatusiczn', 'gencodevalid', 'remark', 'etymology', 'gender', 'subgenusof', 'famcode', 'subfamily', 'tribe', 'bodyshapei', 'comment', 'syncode', 'fbSppnb', 'coffSppnb', 'fowSppnb', 'gsdGenusfk', 'gsdGenusreffk', 'distribution', 'habitat', 'watersalinity', 'marine', 'brackish', 'freshwater', 'diagnosis', 'dspinesmin', 'dspinesmax', 'dsoftraysmin', 'dsoftraysmax', 'totaldsoftraysmin', 'totaldsoftraysmax', 'dsoftraysbranchmin', 'dsoftraysbranchmax', 'aspinesmin', 'aspinesmax', 'asoftraysmin', 'asoftraysmax', 'totalasoftraysmin', 'totalasoftraysmax', 'asoftraysbranchmin', 'asoftraysbranchmax', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', ),
        BasePeer::TYPE_COLNAME => array (GeneraPeer::GENCODE, GeneraPeer::GENNAME, GeneraPeer::GENAUTHORYEAR, GeneraPeer::GENAUTHOR, GeneraPeer::GENYEAR, GeneraPeer::GENINEX, GeneraPeer::GENCOMNAME, GeneraPeer::GENREFNO, GeneraPeer::AVAILABLE, GeneraPeer::GENSTATUS, GeneraPeer::GENSTATUSICZN, GeneraPeer::GENCODEVALID, GeneraPeer::REMARK, GeneraPeer::ETYMOLOGY, GeneraPeer::GENDER, GeneraPeer::SUBGENUSOF, GeneraPeer::FAMCODE, GeneraPeer::SUBFAMILY, GeneraPeer::TRIBE, GeneraPeer::BODYSHAPEI, GeneraPeer::COMMENT, GeneraPeer::SYNCODE, GeneraPeer::FB_SPPNB, GeneraPeer::COFF_SPPNB, GeneraPeer::FOW_SPPNB, GeneraPeer::GSD_GENUSFK, GeneraPeer::GSD_GENUSREFFK, GeneraPeer::DISTRIBUTION, GeneraPeer::HABITAT, GeneraPeer::WATERSALINITY, GeneraPeer::MARINE, GeneraPeer::BRACKISH, GeneraPeer::FRESHWATER, GeneraPeer::DIAGNOSIS, GeneraPeer::DSPINESMIN, GeneraPeer::DSPINESMAX, GeneraPeer::DSOFTRAYSMIN, GeneraPeer::DSOFTRAYSMAX, GeneraPeer::TOTALDSOFTRAYSMIN, GeneraPeer::TOTALDSOFTRAYSMAX, GeneraPeer::DSOFTRAYSBRANCHMIN, GeneraPeer::DSOFTRAYSBRANCHMAX, GeneraPeer::ASPINESMIN, GeneraPeer::ASPINESMAX, GeneraPeer::ASOFTRAYSMIN, GeneraPeer::ASOFTRAYSMAX, GeneraPeer::TOTALASOFTRAYSMIN, GeneraPeer::TOTALASOFTRAYSMAX, GeneraPeer::ASOFTRAYSBRANCHMIN, GeneraPeer::ASOFTRAYSBRANCHMAX, GeneraPeer::ENTERED, GeneraPeer::DATEENTERED, GeneraPeer::MODIFIED, GeneraPeer::DATEMODIFIED, GeneraPeer::EXPERT, GeneraPeer::DATECHECKED, ),
        BasePeer::TYPE_RAW_COLNAME => array ('GENCODE', 'GENNAME', 'GENAUTHORYEAR', 'GENAUTHOR', 'GENYEAR', 'GENINEX', 'GENCOMNAME', 'GENREFNO', 'AVAILABLE', 'GENSTATUS', 'GENSTATUSICZN', 'GENCODEVALID', 'REMARK', 'ETYMOLOGY', 'GENDER', 'SUBGENUSOF', 'FAMCODE', 'SUBFAMILY', 'TRIBE', 'BODYSHAPEI', 'COMMENT', 'SYNCODE', 'FB_SPPNB', 'COFF_SPPNB', 'FOW_SPPNB', 'GSD_GENUSFK', 'GSD_GENUSREFFK', 'DISTRIBUTION', 'HABITAT', 'WATERSALINITY', 'MARINE', 'BRACKISH', 'FRESHWATER', 'DIAGNOSIS', 'DSPINESMIN', 'DSPINESMAX', 'DSOFTRAYSMIN', 'DSOFTRAYSMAX', 'TOTALDSOFTRAYSMIN', 'TOTALDSOFTRAYSMAX', 'DSOFTRAYSBRANCHMIN', 'DSOFTRAYSBRANCHMAX', 'ASPINESMIN', 'ASPINESMAX', 'ASOFTRAYSMIN', 'ASOFTRAYSMAX', 'TOTALASOFTRAYSMIN', 'TOTALASOFTRAYSMAX', 'ASOFTRAYSBRANCHMIN', 'ASOFTRAYSBRANCHMAX', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', ),
        BasePeer::TYPE_FIELDNAME => array ('GenCode', 'GenName', 'GenAuthorYear', 'GenAuthor', 'GenYear', 'GenInEx', 'GenComName', 'GenRefno', 'Available', 'GenStatus', 'GenStatusICZN', 'GenCodeValid', 'Remark', 'Etymology', 'Gender', 'SubgenusOf', 'FamCode', 'Subfamily', 'Tribe', 'BodyShapeI', 'Comment', 'SynCode', 'FB_SppNb', 'CofF_SppNb', 'FoW_SppNb', 'GSD_GenusFk', 'GSD_GenusRefFk', 'Distribution', 'Habitat', 'WaterSalinity', 'Marine', 'Brackish', 'Freshwater', 'Diagnosis', 'DspinesMin', 'DspinesMax', 'DsoftRaysMin', 'DsoftRaysMax', 'TotalDsoftRaysMin', 'TotalDsoftRaysMax', 'DsoftRaysBranchMin', 'DsoftRaysBranchMax', 'AspinesMin', 'AspinesMax', 'AsoftRaysMin', 'AsoftRaysMax', 'TotalAsoftRaysMin', 'TotalAsoftRaysMax', 'AsoftRaysBranchMin', 'AsoftRaysBranchMax', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. GeneraPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Gencode' => 0, 'Genname' => 1, 'Genauthoryear' => 2, 'Genauthor' => 3, 'Genyear' => 4, 'Geninex' => 5, 'Gencomname' => 6, 'Genrefno' => 7, 'Available' => 8, 'Genstatus' => 9, 'Genstatusiczn' => 10, 'Gencodevalid' => 11, 'Remark' => 12, 'Etymology' => 13, 'Gender' => 14, 'Subgenusof' => 15, 'Famcode' => 16, 'Subfamily' => 17, 'Tribe' => 18, 'Bodyshapei' => 19, 'Comment' => 20, 'Syncode' => 21, 'FbSppnb' => 22, 'CoffSppnb' => 23, 'FowSppnb' => 24, 'GsdGenusfk' => 25, 'GsdGenusreffk' => 26, 'Distribution' => 27, 'Habitat' => 28, 'Watersalinity' => 29, 'Marine' => 30, 'Brackish' => 31, 'Freshwater' => 32, 'Diagnosis' => 33, 'Dspinesmin' => 34, 'Dspinesmax' => 35, 'Dsoftraysmin' => 36, 'Dsoftraysmax' => 37, 'Totaldsoftraysmin' => 38, 'Totaldsoftraysmax' => 39, 'Dsoftraysbranchmin' => 40, 'Dsoftraysbranchmax' => 41, 'Aspinesmin' => 42, 'Aspinesmax' => 43, 'Asoftraysmin' => 44, 'Asoftraysmax' => 45, 'Totalasoftraysmin' => 46, 'Totalasoftraysmax' => 47, 'Asoftraysbranchmin' => 48, 'Asoftraysbranchmax' => 49, 'Entered' => 50, 'Dateentered' => 51, 'Modified' => 52, 'Datemodified' => 53, 'Expert' => 54, 'Datechecked' => 55, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('gencode' => 0, 'genname' => 1, 'genauthoryear' => 2, 'genauthor' => 3, 'genyear' => 4, 'geninex' => 5, 'gencomname' => 6, 'genrefno' => 7, 'available' => 8, 'genstatus' => 9, 'genstatusiczn' => 10, 'gencodevalid' => 11, 'remark' => 12, 'etymology' => 13, 'gender' => 14, 'subgenusof' => 15, 'famcode' => 16, 'subfamily' => 17, 'tribe' => 18, 'bodyshapei' => 19, 'comment' => 20, 'syncode' => 21, 'fbSppnb' => 22, 'coffSppnb' => 23, 'fowSppnb' => 24, 'gsdGenusfk' => 25, 'gsdGenusreffk' => 26, 'distribution' => 27, 'habitat' => 28, 'watersalinity' => 29, 'marine' => 30, 'brackish' => 31, 'freshwater' => 32, 'diagnosis' => 33, 'dspinesmin' => 34, 'dspinesmax' => 35, 'dsoftraysmin' => 36, 'dsoftraysmax' => 37, 'totaldsoftraysmin' => 38, 'totaldsoftraysmax' => 39, 'dsoftraysbranchmin' => 40, 'dsoftraysbranchmax' => 41, 'aspinesmin' => 42, 'aspinesmax' => 43, 'asoftraysmin' => 44, 'asoftraysmax' => 45, 'totalasoftraysmin' => 46, 'totalasoftraysmax' => 47, 'asoftraysbranchmin' => 48, 'asoftraysbranchmax' => 49, 'entered' => 50, 'dateentered' => 51, 'modified' => 52, 'datemodified' => 53, 'expert' => 54, 'datechecked' => 55, ),
        BasePeer::TYPE_COLNAME => array (GeneraPeer::GENCODE => 0, GeneraPeer::GENNAME => 1, GeneraPeer::GENAUTHORYEAR => 2, GeneraPeer::GENAUTHOR => 3, GeneraPeer::GENYEAR => 4, GeneraPeer::GENINEX => 5, GeneraPeer::GENCOMNAME => 6, GeneraPeer::GENREFNO => 7, GeneraPeer::AVAILABLE => 8, GeneraPeer::GENSTATUS => 9, GeneraPeer::GENSTATUSICZN => 10, GeneraPeer::GENCODEVALID => 11, GeneraPeer::REMARK => 12, GeneraPeer::ETYMOLOGY => 13, GeneraPeer::GENDER => 14, GeneraPeer::SUBGENUSOF => 15, GeneraPeer::FAMCODE => 16, GeneraPeer::SUBFAMILY => 17, GeneraPeer::TRIBE => 18, GeneraPeer::BODYSHAPEI => 19, GeneraPeer::COMMENT => 20, GeneraPeer::SYNCODE => 21, GeneraPeer::FB_SPPNB => 22, GeneraPeer::COFF_SPPNB => 23, GeneraPeer::FOW_SPPNB => 24, GeneraPeer::GSD_GENUSFK => 25, GeneraPeer::GSD_GENUSREFFK => 26, GeneraPeer::DISTRIBUTION => 27, GeneraPeer::HABITAT => 28, GeneraPeer::WATERSALINITY => 29, GeneraPeer::MARINE => 30, GeneraPeer::BRACKISH => 31, GeneraPeer::FRESHWATER => 32, GeneraPeer::DIAGNOSIS => 33, GeneraPeer::DSPINESMIN => 34, GeneraPeer::DSPINESMAX => 35, GeneraPeer::DSOFTRAYSMIN => 36, GeneraPeer::DSOFTRAYSMAX => 37, GeneraPeer::TOTALDSOFTRAYSMIN => 38, GeneraPeer::TOTALDSOFTRAYSMAX => 39, GeneraPeer::DSOFTRAYSBRANCHMIN => 40, GeneraPeer::DSOFTRAYSBRANCHMAX => 41, GeneraPeer::ASPINESMIN => 42, GeneraPeer::ASPINESMAX => 43, GeneraPeer::ASOFTRAYSMIN => 44, GeneraPeer::ASOFTRAYSMAX => 45, GeneraPeer::TOTALASOFTRAYSMIN => 46, GeneraPeer::TOTALASOFTRAYSMAX => 47, GeneraPeer::ASOFTRAYSBRANCHMIN => 48, GeneraPeer::ASOFTRAYSBRANCHMAX => 49, GeneraPeer::ENTERED => 50, GeneraPeer::DATEENTERED => 51, GeneraPeer::MODIFIED => 52, GeneraPeer::DATEMODIFIED => 53, GeneraPeer::EXPERT => 54, GeneraPeer::DATECHECKED => 55, ),
        BasePeer::TYPE_RAW_COLNAME => array ('GENCODE' => 0, 'GENNAME' => 1, 'GENAUTHORYEAR' => 2, 'GENAUTHOR' => 3, 'GENYEAR' => 4, 'GENINEX' => 5, 'GENCOMNAME' => 6, 'GENREFNO' => 7, 'AVAILABLE' => 8, 'GENSTATUS' => 9, 'GENSTATUSICZN' => 10, 'GENCODEVALID' => 11, 'REMARK' => 12, 'ETYMOLOGY' => 13, 'GENDER' => 14, 'SUBGENUSOF' => 15, 'FAMCODE' => 16, 'SUBFAMILY' => 17, 'TRIBE' => 18, 'BODYSHAPEI' => 19, 'COMMENT' => 20, 'SYNCODE' => 21, 'FB_SPPNB' => 22, 'COFF_SPPNB' => 23, 'FOW_SPPNB' => 24, 'GSD_GENUSFK' => 25, 'GSD_GENUSREFFK' => 26, 'DISTRIBUTION' => 27, 'HABITAT' => 28, 'WATERSALINITY' => 29, 'MARINE' => 30, 'BRACKISH' => 31, 'FRESHWATER' => 32, 'DIAGNOSIS' => 33, 'DSPINESMIN' => 34, 'DSPINESMAX' => 35, 'DSOFTRAYSMIN' => 36, 'DSOFTRAYSMAX' => 37, 'TOTALDSOFTRAYSMIN' => 38, 'TOTALDSOFTRAYSMAX' => 39, 'DSOFTRAYSBRANCHMIN' => 40, 'DSOFTRAYSBRANCHMAX' => 41, 'ASPINESMIN' => 42, 'ASPINESMAX' => 43, 'ASOFTRAYSMIN' => 44, 'ASOFTRAYSMAX' => 45, 'TOTALASOFTRAYSMIN' => 46, 'TOTALASOFTRAYSMAX' => 47, 'ASOFTRAYSBRANCHMIN' => 48, 'ASOFTRAYSBRANCHMAX' => 49, 'ENTERED' => 50, 'DATEENTERED' => 51, 'MODIFIED' => 52, 'DATEMODIFIED' => 53, 'EXPERT' => 54, 'DATECHECKED' => 55, ),
        BasePeer::TYPE_FIELDNAME => array ('GenCode' => 0, 'GenName' => 1, 'GenAuthorYear' => 2, 'GenAuthor' => 3, 'GenYear' => 4, 'GenInEx' => 5, 'GenComName' => 6, 'GenRefno' => 7, 'Available' => 8, 'GenStatus' => 9, 'GenStatusICZN' => 10, 'GenCodeValid' => 11, 'Remark' => 12, 'Etymology' => 13, 'Gender' => 14, 'SubgenusOf' => 15, 'FamCode' => 16, 'Subfamily' => 17, 'Tribe' => 18, 'BodyShapeI' => 19, 'Comment' => 20, 'SynCode' => 21, 'FB_SppNb' => 22, 'CofF_SppNb' => 23, 'FoW_SppNb' => 24, 'GSD_GenusFk' => 25, 'GSD_GenusRefFk' => 26, 'Distribution' => 27, 'Habitat' => 28, 'WaterSalinity' => 29, 'Marine' => 30, 'Brackish' => 31, 'Freshwater' => 32, 'Diagnosis' => 33, 'DspinesMin' => 34, 'DspinesMax' => 35, 'DsoftRaysMin' => 36, 'DsoftRaysMax' => 37, 'TotalDsoftRaysMin' => 38, 'TotalDsoftRaysMax' => 39, 'DsoftRaysBranchMin' => 40, 'DsoftRaysBranchMax' => 41, 'AspinesMin' => 42, 'AspinesMax' => 43, 'AsoftRaysMin' => 44, 'AsoftRaysMax' => 45, 'TotalAsoftRaysMin' => 46, 'TotalAsoftRaysMax' => 47, 'AsoftRaysBranchMin' => 48, 'AsoftRaysBranchMax' => 49, 'Entered' => 50, 'Dateentered' => 51, 'Modified' => 52, 'Datemodified' => 53, 'Expert' => 54, 'Datechecked' => 55, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, )
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
        $toNames = GeneraPeer::getFieldNames($toType);
        $key = isset(GeneraPeer::$fieldKeys[$fromType][$name]) ? GeneraPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(GeneraPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, GeneraPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return GeneraPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. GeneraPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(GeneraPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(GeneraPeer::GENCODE);
            $criteria->addSelectColumn(GeneraPeer::GENNAME);
            $criteria->addSelectColumn(GeneraPeer::GENAUTHORYEAR);
            $criteria->addSelectColumn(GeneraPeer::GENAUTHOR);
            $criteria->addSelectColumn(GeneraPeer::GENYEAR);
            $criteria->addSelectColumn(GeneraPeer::GENINEX);
            $criteria->addSelectColumn(GeneraPeer::GENCOMNAME);
            $criteria->addSelectColumn(GeneraPeer::GENREFNO);
            $criteria->addSelectColumn(GeneraPeer::AVAILABLE);
            $criteria->addSelectColumn(GeneraPeer::GENSTATUS);
            $criteria->addSelectColumn(GeneraPeer::GENSTATUSICZN);
            $criteria->addSelectColumn(GeneraPeer::GENCODEVALID);
            $criteria->addSelectColumn(GeneraPeer::REMARK);
            $criteria->addSelectColumn(GeneraPeer::ETYMOLOGY);
            $criteria->addSelectColumn(GeneraPeer::GENDER);
            $criteria->addSelectColumn(GeneraPeer::SUBGENUSOF);
            $criteria->addSelectColumn(GeneraPeer::FAMCODE);
            $criteria->addSelectColumn(GeneraPeer::SUBFAMILY);
            $criteria->addSelectColumn(GeneraPeer::TRIBE);
            $criteria->addSelectColumn(GeneraPeer::BODYSHAPEI);
            $criteria->addSelectColumn(GeneraPeer::COMMENT);
            $criteria->addSelectColumn(GeneraPeer::SYNCODE);
            $criteria->addSelectColumn(GeneraPeer::FB_SPPNB);
            $criteria->addSelectColumn(GeneraPeer::COFF_SPPNB);
            $criteria->addSelectColumn(GeneraPeer::FOW_SPPNB);
            $criteria->addSelectColumn(GeneraPeer::GSD_GENUSFK);
            $criteria->addSelectColumn(GeneraPeer::GSD_GENUSREFFK);
            $criteria->addSelectColumn(GeneraPeer::DISTRIBUTION);
            $criteria->addSelectColumn(GeneraPeer::HABITAT);
            $criteria->addSelectColumn(GeneraPeer::WATERSALINITY);
            $criteria->addSelectColumn(GeneraPeer::MARINE);
            $criteria->addSelectColumn(GeneraPeer::BRACKISH);
            $criteria->addSelectColumn(GeneraPeer::FRESHWATER);
            $criteria->addSelectColumn(GeneraPeer::DIAGNOSIS);
            $criteria->addSelectColumn(GeneraPeer::DSPINESMIN);
            $criteria->addSelectColumn(GeneraPeer::DSPINESMAX);
            $criteria->addSelectColumn(GeneraPeer::DSOFTRAYSMIN);
            $criteria->addSelectColumn(GeneraPeer::DSOFTRAYSMAX);
            $criteria->addSelectColumn(GeneraPeer::TOTALDSOFTRAYSMIN);
            $criteria->addSelectColumn(GeneraPeer::TOTALDSOFTRAYSMAX);
            $criteria->addSelectColumn(GeneraPeer::DSOFTRAYSBRANCHMIN);
            $criteria->addSelectColumn(GeneraPeer::DSOFTRAYSBRANCHMAX);
            $criteria->addSelectColumn(GeneraPeer::ASPINESMIN);
            $criteria->addSelectColumn(GeneraPeer::ASPINESMAX);
            $criteria->addSelectColumn(GeneraPeer::ASOFTRAYSMIN);
            $criteria->addSelectColumn(GeneraPeer::ASOFTRAYSMAX);
            $criteria->addSelectColumn(GeneraPeer::TOTALASOFTRAYSMIN);
            $criteria->addSelectColumn(GeneraPeer::TOTALASOFTRAYSMAX);
            $criteria->addSelectColumn(GeneraPeer::ASOFTRAYSBRANCHMIN);
            $criteria->addSelectColumn(GeneraPeer::ASOFTRAYSBRANCHMAX);
            $criteria->addSelectColumn(GeneraPeer::ENTERED);
            $criteria->addSelectColumn(GeneraPeer::DATEENTERED);
            $criteria->addSelectColumn(GeneraPeer::MODIFIED);
            $criteria->addSelectColumn(GeneraPeer::DATEMODIFIED);
            $criteria->addSelectColumn(GeneraPeer::EXPERT);
            $criteria->addSelectColumn(GeneraPeer::DATECHECKED);
        } else {
            $criteria->addSelectColumn($alias . '.GenCode');
            $criteria->addSelectColumn($alias . '.GenName');
            $criteria->addSelectColumn($alias . '.GenAuthorYear');
            $criteria->addSelectColumn($alias . '.GenAuthor');
            $criteria->addSelectColumn($alias . '.GenYear');
            $criteria->addSelectColumn($alias . '.GenInEx');
            $criteria->addSelectColumn($alias . '.GenComName');
            $criteria->addSelectColumn($alias . '.GenRefno');
            $criteria->addSelectColumn($alias . '.Available');
            $criteria->addSelectColumn($alias . '.GenStatus');
            $criteria->addSelectColumn($alias . '.GenStatusICZN');
            $criteria->addSelectColumn($alias . '.GenCodeValid');
            $criteria->addSelectColumn($alias . '.Remark');
            $criteria->addSelectColumn($alias . '.Etymology');
            $criteria->addSelectColumn($alias . '.Gender');
            $criteria->addSelectColumn($alias . '.SubgenusOf');
            $criteria->addSelectColumn($alias . '.FamCode');
            $criteria->addSelectColumn($alias . '.Subfamily');
            $criteria->addSelectColumn($alias . '.Tribe');
            $criteria->addSelectColumn($alias . '.BodyShapeI');
            $criteria->addSelectColumn($alias . '.Comment');
            $criteria->addSelectColumn($alias . '.SynCode');
            $criteria->addSelectColumn($alias . '.FB_SppNb');
            $criteria->addSelectColumn($alias . '.CofF_SppNb');
            $criteria->addSelectColumn($alias . '.FoW_SppNb');
            $criteria->addSelectColumn($alias . '.GSD_GenusFk');
            $criteria->addSelectColumn($alias . '.GSD_GenusRefFk');
            $criteria->addSelectColumn($alias . '.Distribution');
            $criteria->addSelectColumn($alias . '.Habitat');
            $criteria->addSelectColumn($alias . '.WaterSalinity');
            $criteria->addSelectColumn($alias . '.Marine');
            $criteria->addSelectColumn($alias . '.Brackish');
            $criteria->addSelectColumn($alias . '.Freshwater');
            $criteria->addSelectColumn($alias . '.Diagnosis');
            $criteria->addSelectColumn($alias . '.DspinesMin');
            $criteria->addSelectColumn($alias . '.DspinesMax');
            $criteria->addSelectColumn($alias . '.DsoftRaysMin');
            $criteria->addSelectColumn($alias . '.DsoftRaysMax');
            $criteria->addSelectColumn($alias . '.TotalDsoftRaysMin');
            $criteria->addSelectColumn($alias . '.TotalDsoftRaysMax');
            $criteria->addSelectColumn($alias . '.DsoftRaysBranchMin');
            $criteria->addSelectColumn($alias . '.DsoftRaysBranchMax');
            $criteria->addSelectColumn($alias . '.AspinesMin');
            $criteria->addSelectColumn($alias . '.AspinesMax');
            $criteria->addSelectColumn($alias . '.AsoftRaysMin');
            $criteria->addSelectColumn($alias . '.AsoftRaysMax');
            $criteria->addSelectColumn($alias . '.TotalAsoftRaysMin');
            $criteria->addSelectColumn($alias . '.TotalAsoftRaysMax');
            $criteria->addSelectColumn($alias . '.AsoftRaysBranchMin');
            $criteria->addSelectColumn($alias . '.AsoftRaysBranchMax');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.Dateentered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.Datemodified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.Datechecked');
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
        $criteria->setPrimaryTableName(GeneraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            GeneraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(GeneraPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(GeneraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Genera
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = GeneraPeer::doSelect($critcopy, $con);
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
        return GeneraPeer::populateObjects(GeneraPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(GeneraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            GeneraPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(GeneraPeer::DATABASE_NAME);

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
     * @param Genera $obj A Genera object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getGenname(), (string) $obj->getGenauthoryear(), (string) $obj->getGenstatus()));
            } // if key === null
            GeneraPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Genera object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Genera) {
                $key = serialize(array((string) $value->getGenname(), (string) $value->getGenauthoryear(), (string) $value->getGenstatus()));
            } elseif (is_array($value) && count($value) === 3) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Genera object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(GeneraPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Genera Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(GeneraPeer::$instances[$key])) {
                return GeneraPeer::$instances[$key];
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
        foreach (GeneraPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        GeneraPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to genera
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
        if ($row[$startcol + 1] === null && $row[$startcol + 2] === null && $row[$startcol + 9] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 9]));
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

        return array((string) $row[$startcol + 1], (string) $row[$startcol + 2], (string) $row[$startcol + 9]);
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
        $cls = GeneraPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = GeneraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = GeneraPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                GeneraPeer::addInstanceToPool($obj, $key);
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
     * @return array (Genera object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = GeneraPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = GeneraPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + GeneraPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = GeneraPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            GeneraPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(GeneraPeer::DATABASE_NAME)->getTable(GeneraPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseGeneraPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseGeneraPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \GeneraTableMap());
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
        return GeneraPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Genera or Criteria object.
     *
     * @param      mixed $values Criteria or Genera object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GeneraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Genera object
        }


        // Set the correct dbName
        $criteria->setDbName(GeneraPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Genera or Criteria object.
     *
     * @param      mixed $values Criteria or Genera object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GeneraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(GeneraPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(GeneraPeer::GENNAME);
            $value = $criteria->remove(GeneraPeer::GENNAME);
            if ($value) {
                $selectCriteria->add(GeneraPeer::GENNAME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GeneraPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GeneraPeer::GENAUTHORYEAR);
            $value = $criteria->remove(GeneraPeer::GENAUTHORYEAR);
            if ($value) {
                $selectCriteria->add(GeneraPeer::GENAUTHORYEAR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GeneraPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(GeneraPeer::GENSTATUS);
            $value = $criteria->remove(GeneraPeer::GENSTATUS);
            if ($value) {
                $selectCriteria->add(GeneraPeer::GENSTATUS, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(GeneraPeer::TABLE_NAME);
            }

        } else { // $values is Genera object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(GeneraPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the genera table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(GeneraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(GeneraPeer::TABLE_NAME, $con, GeneraPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            GeneraPeer::clearInstancePool();
            GeneraPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Genera or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Genera object or primary key or array of primary keys
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
            $con = Propel::getConnection(GeneraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            GeneraPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Genera) { // it's a model object
            // invalidate the cache for this single object
            GeneraPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(GeneraPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(GeneraPeer::GENNAME, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(GeneraPeer::GENAUTHORYEAR, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(GeneraPeer::GENSTATUS, $value[2]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                GeneraPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(GeneraPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            GeneraPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Genera object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Genera $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(GeneraPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(GeneraPeer::TABLE_NAME);

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

        return BasePeer::doValidate(GeneraPeer::DATABASE_NAME, GeneraPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   string $genname
     * @param   string $genauthoryear
     * @param   string $genstatus
     * @param      PropelPDO $con
     * @return Genera
     */
    public static function retrieveByPK($genname, $genauthoryear, $genstatus, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $genname, (string) $genauthoryear, (string) $genstatus));
         if (null !== ($obj = GeneraPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(GeneraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(GeneraPeer::DATABASE_NAME);
        $criteria->add(GeneraPeer::GENNAME, $genname);
        $criteria->add(GeneraPeer::GENAUTHORYEAR, $genauthoryear);
        $criteria->add(GeneraPeer::GENSTATUS, $genstatus);
        $v = GeneraPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseGeneraPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseGeneraPeer::buildTableMap();

