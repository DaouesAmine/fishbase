<?php


/**
 * Base static class for performing query and update operations on the 'morphmet' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseMorphmetPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'morphmet';

    /** the related Propel class for this table */
    const OM_CLASS = 'Morphmet';

    /** the related TableMap class for this table */
    const TM_CLASS = 'MorphmetTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 56;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 56;

    /** the column name for the autoctr field */
    const AUTOCTR = 'morphmet.autoctr';

    /** the column name for the PicName field */
    const PICNAME = 'morphmet.PicName';

    /** the column name for the Speccode field */
    const SPECCODE = 'morphmet.Speccode';

    /** the column name for the TL field */
    const TL = 'morphmet.TL';

    /** the column name for the SL field */
    const SL = 'morphmet.SL';

    /** the column name for the FL field */
    const FL = 'morphmet.FL';

    /** the column name for the HL field */
    const HL = 'morphmet.HL';

    /** the column name for the PAL field */
    const PAL = 'morphmet.PAL';

    /** the column name for the PDL field */
    const PDL = 'morphmet.PDL';

    /** the column name for the PPL field */
    const PPL = 'morphmet.PPL';

    /** the column name for the PPEL field */
    const PPEL = 'morphmet.PPEL';

    /** the column name for the ED field */
    const ED = 'morphmet.ED';

    /** the column name for the POL field */
    const POL = 'morphmet.POL';

    /** the column name for the BD field */
    const BD = 'morphmet.BD';

    /** the column name for the CH field */
    const CH = 'morphmet.CH';

    /** the column name for the CA field */
    const CA = 'morphmet.CA';

    /** the column name for the SnoutTipX field */
    const SNOUTTIPX = 'morphmet.SnoutTipX';

    /** the column name for the SnoutTipY field */
    const SNOUTTIPY = 'morphmet.SnoutTipY';

    /** the column name for the CaudalOriginX field */
    const CAUDALORIGINX = 'morphmet.CaudalOriginX';

    /** the column name for the CaudalOriginY field */
    const CAUDALORIGINY = 'morphmet.CaudalOriginY';

    /** the column name for the TLEndX field */
    const TLENDX = 'morphmet.TLEndX';

    /** the column name for the TLEndY field */
    const TLENDY = 'morphmet.TLEndY';

    /** the column name for the DorsalOriginX field */
    const DORSALORIGINX = 'morphmet.DorsalOriginX';

    /** the column name for the DorsalOriginY field */
    const DORSALORIGINY = 'morphmet.DorsalOriginY';

    /** the column name for the AnalOriginX field */
    const ANALORIGINX = 'morphmet.AnalOriginX';

    /** the column name for the AnalOriginY field */
    const ANALORIGINY = 'morphmet.AnalOriginY';

    /** the column name for the EyeFrontX field */
    const EYEFRONTX = 'morphmet.EyeFrontX';

    /** the column name for the EyeFrontY field */
    const EYEFRONTY = 'morphmet.EyeFrontY';

    /** the column name for the EyeEndX field */
    const EYEENDX = 'morphmet.EyeEndX';

    /** the column name for the EyeEndY field */
    const EYEENDY = 'morphmet.EyeEndY';

    /** the column name for the OpercleEndX field */
    const OPERCLEENDX = 'morphmet.OpercleEndX';

    /** the column name for the OpercleEndY field */
    const OPERCLEENDY = 'morphmet.OpercleEndY';

    /** the column name for the MaxDepthDorsalX field */
    const MAXDEPTHDORSALX = 'morphmet.MaxDepthDorsalX';

    /** the column name for the MaxDepthDorsalY field */
    const MAXDEPTHDORSALY = 'morphmet.MaxDepthDorsalY';

    /** the column name for the MaxDepthVentralX field */
    const MAXDEPTHVENTRALX = 'morphmet.MaxDepthVentralX';

    /** the column name for the MaxDepthVentralY field */
    const MAXDEPTHVENTRALY = 'morphmet.MaxDepthVentralY';

    /** the column name for the PectoralOriginX field */
    const PECTORALORIGINX = 'morphmet.PectoralOriginX';

    /** the column name for the PectoralOriginY field */
    const PECTORALORIGINY = 'morphmet.PectoralOriginY';

    /** the column name for the PelvicOriginX field */
    const PELVICORIGINX = 'morphmet.PelvicOriginX';

    /** the column name for the PelvicOriginY field */
    const PELVICORIGINY = 'morphmet.PelvicOriginY';

    /** the column name for the FLEndX field */
    const FLENDX = 'morphmet.FLEndX';

    /** the column name for the FLEndY field */
    const FLENDY = 'morphmet.FLEndY';

    /** the column name for the CaudalUpperX field */
    const CAUDALUPPERX = 'morphmet.CaudalUpperX';

    /** the column name for the CaudalUpperY field */
    const CAUDALUPPERY = 'morphmet.CaudalUpperY';

    /** the column name for the CaudalLowerX field */
    const CAUDALLOWERX = 'morphmet.CaudalLowerX';

    /** the column name for the CaudalLowerY field */
    const CAUDALLOWERY = 'morphmet.CaudalLowerY';

    /** the column name for the AspectRatio field */
    const ASPECTRATIO = 'morphmet.AspectRatio';

    /** the column name for the Doubtful field */
    const DOUBTFUL = 'morphmet.Doubtful';

    /** the column name for the Remarks field */
    const REMARKS = 'morphmet.Remarks';

    /** the column name for the Entered field */
    const ENTERED = 'morphmet.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'morphmet.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'morphmet.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'morphmet.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'morphmet.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'morphmet.DateChecked';

    /** the column name for the TS field */
    const TS = 'morphmet.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Morphmet objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Morphmet[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. MorphmetPeer::$fieldNames[MorphmetPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Picname', 'Speccode', 'Tl', 'Sl', 'Fl', 'Hl', 'Pal', 'Pdl', 'Ppl', 'Ppel', 'Ed', 'Pol', 'Bd', 'Ch', 'Ca', 'Snouttipx', 'Snouttipy', 'Caudaloriginx', 'Caudaloriginy', 'Tlendx', 'Tlendy', 'Dorsaloriginx', 'Dorsaloriginy', 'Analoriginx', 'Analoriginy', 'Eyefrontx', 'Eyefronty', 'Eyeendx', 'Eyeendy', 'Opercleendx', 'Opercleendy', 'Maxdepthdorsalx', 'Maxdepthdorsaly', 'Maxdepthventralx', 'Maxdepthventraly', 'Pectoraloriginx', 'Pectoraloriginy', 'Pelvicoriginx', 'Pelvicoriginy', 'Flendx', 'Flendy', 'Caudalupperx', 'Caudaluppery', 'Caudallowerx', 'Caudallowery', 'Aspectratio', 'Doubtful', 'Remarks', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'picname', 'speccode', 'tl', 'sl', 'fl', 'hl', 'pal', 'pdl', 'ppl', 'ppel', 'ed', 'pol', 'bd', 'ch', 'ca', 'snouttipx', 'snouttipy', 'caudaloriginx', 'caudaloriginy', 'tlendx', 'tlendy', 'dorsaloriginx', 'dorsaloriginy', 'analoriginx', 'analoriginy', 'eyefrontx', 'eyefronty', 'eyeendx', 'eyeendy', 'opercleendx', 'opercleendy', 'maxdepthdorsalx', 'maxdepthdorsaly', 'maxdepthventralx', 'maxdepthventraly', 'pectoraloriginx', 'pectoraloriginy', 'pelvicoriginx', 'pelvicoriginy', 'flendx', 'flendy', 'caudalupperx', 'caudaluppery', 'caudallowerx', 'caudallowery', 'aspectratio', 'doubtful', 'remarks', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (MorphmetPeer::AUTOCTR, MorphmetPeer::PICNAME, MorphmetPeer::SPECCODE, MorphmetPeer::TL, MorphmetPeer::SL, MorphmetPeer::FL, MorphmetPeer::HL, MorphmetPeer::PAL, MorphmetPeer::PDL, MorphmetPeer::PPL, MorphmetPeer::PPEL, MorphmetPeer::ED, MorphmetPeer::POL, MorphmetPeer::BD, MorphmetPeer::CH, MorphmetPeer::CA, MorphmetPeer::SNOUTTIPX, MorphmetPeer::SNOUTTIPY, MorphmetPeer::CAUDALORIGINX, MorphmetPeer::CAUDALORIGINY, MorphmetPeer::TLENDX, MorphmetPeer::TLENDY, MorphmetPeer::DORSALORIGINX, MorphmetPeer::DORSALORIGINY, MorphmetPeer::ANALORIGINX, MorphmetPeer::ANALORIGINY, MorphmetPeer::EYEFRONTX, MorphmetPeer::EYEFRONTY, MorphmetPeer::EYEENDX, MorphmetPeer::EYEENDY, MorphmetPeer::OPERCLEENDX, MorphmetPeer::OPERCLEENDY, MorphmetPeer::MAXDEPTHDORSALX, MorphmetPeer::MAXDEPTHDORSALY, MorphmetPeer::MAXDEPTHVENTRALX, MorphmetPeer::MAXDEPTHVENTRALY, MorphmetPeer::PECTORALORIGINX, MorphmetPeer::PECTORALORIGINY, MorphmetPeer::PELVICORIGINX, MorphmetPeer::PELVICORIGINY, MorphmetPeer::FLENDX, MorphmetPeer::FLENDY, MorphmetPeer::CAUDALUPPERX, MorphmetPeer::CAUDALUPPERY, MorphmetPeer::CAUDALLOWERX, MorphmetPeer::CAUDALLOWERY, MorphmetPeer::ASPECTRATIO, MorphmetPeer::DOUBTFUL, MorphmetPeer::REMARKS, MorphmetPeer::ENTERED, MorphmetPeer::DATEENTERED, MorphmetPeer::MODIFIED, MorphmetPeer::DATEMODIFIED, MorphmetPeer::EXPERT, MorphmetPeer::DATECHECKED, MorphmetPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'PICNAME', 'SPECCODE', 'TL', 'SL', 'FL', 'HL', 'PAL', 'PDL', 'PPL', 'PPEL', 'ED', 'POL', 'BD', 'CH', 'CA', 'SNOUTTIPX', 'SNOUTTIPY', 'CAUDALORIGINX', 'CAUDALORIGINY', 'TLENDX', 'TLENDY', 'DORSALORIGINX', 'DORSALORIGINY', 'ANALORIGINX', 'ANALORIGINY', 'EYEFRONTX', 'EYEFRONTY', 'EYEENDX', 'EYEENDY', 'OPERCLEENDX', 'OPERCLEENDY', 'MAXDEPTHDORSALX', 'MAXDEPTHDORSALY', 'MAXDEPTHVENTRALX', 'MAXDEPTHVENTRALY', 'PECTORALORIGINX', 'PECTORALORIGINY', 'PELVICORIGINX', 'PELVICORIGINY', 'FLENDX', 'FLENDY', 'CAUDALUPPERX', 'CAUDALUPPERY', 'CAUDALLOWERX', 'CAUDALLOWERY', 'ASPECTRATIO', 'DOUBTFUL', 'REMARKS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'PicName', 'Speccode', 'TL', 'SL', 'FL', 'HL', 'PAL', 'PDL', 'PPL', 'PPEL', 'ED', 'POL', 'BD', 'CH', 'CA', 'SnoutTipX', 'SnoutTipY', 'CaudalOriginX', 'CaudalOriginY', 'TLEndX', 'TLEndY', 'DorsalOriginX', 'DorsalOriginY', 'AnalOriginX', 'AnalOriginY', 'EyeFrontX', 'EyeFrontY', 'EyeEndX', 'EyeEndY', 'OpercleEndX', 'OpercleEndY', 'MaxDepthDorsalX', 'MaxDepthDorsalY', 'MaxDepthVentralX', 'MaxDepthVentralY', 'PectoralOriginX', 'PectoralOriginY', 'PelvicOriginX', 'PelvicOriginY', 'FLEndX', 'FLEndY', 'CaudalUpperX', 'CaudalUpperY', 'CaudalLowerX', 'CaudalLowerY', 'AspectRatio', 'Doubtful', 'Remarks', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. MorphmetPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Picname' => 1, 'Speccode' => 2, 'Tl' => 3, 'Sl' => 4, 'Fl' => 5, 'Hl' => 6, 'Pal' => 7, 'Pdl' => 8, 'Ppl' => 9, 'Ppel' => 10, 'Ed' => 11, 'Pol' => 12, 'Bd' => 13, 'Ch' => 14, 'Ca' => 15, 'Snouttipx' => 16, 'Snouttipy' => 17, 'Caudaloriginx' => 18, 'Caudaloriginy' => 19, 'Tlendx' => 20, 'Tlendy' => 21, 'Dorsaloriginx' => 22, 'Dorsaloriginy' => 23, 'Analoriginx' => 24, 'Analoriginy' => 25, 'Eyefrontx' => 26, 'Eyefronty' => 27, 'Eyeendx' => 28, 'Eyeendy' => 29, 'Opercleendx' => 30, 'Opercleendy' => 31, 'Maxdepthdorsalx' => 32, 'Maxdepthdorsaly' => 33, 'Maxdepthventralx' => 34, 'Maxdepthventraly' => 35, 'Pectoraloriginx' => 36, 'Pectoraloriginy' => 37, 'Pelvicoriginx' => 38, 'Pelvicoriginy' => 39, 'Flendx' => 40, 'Flendy' => 41, 'Caudalupperx' => 42, 'Caudaluppery' => 43, 'Caudallowerx' => 44, 'Caudallowery' => 45, 'Aspectratio' => 46, 'Doubtful' => 47, 'Remarks' => 48, 'Entered' => 49, 'Dateentered' => 50, 'Modified' => 51, 'Datemodified' => 52, 'Expert' => 53, 'Datechecked' => 54, 'Ts' => 55, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'picname' => 1, 'speccode' => 2, 'tl' => 3, 'sl' => 4, 'fl' => 5, 'hl' => 6, 'pal' => 7, 'pdl' => 8, 'ppl' => 9, 'ppel' => 10, 'ed' => 11, 'pol' => 12, 'bd' => 13, 'ch' => 14, 'ca' => 15, 'snouttipx' => 16, 'snouttipy' => 17, 'caudaloriginx' => 18, 'caudaloriginy' => 19, 'tlendx' => 20, 'tlendy' => 21, 'dorsaloriginx' => 22, 'dorsaloriginy' => 23, 'analoriginx' => 24, 'analoriginy' => 25, 'eyefrontx' => 26, 'eyefronty' => 27, 'eyeendx' => 28, 'eyeendy' => 29, 'opercleendx' => 30, 'opercleendy' => 31, 'maxdepthdorsalx' => 32, 'maxdepthdorsaly' => 33, 'maxdepthventralx' => 34, 'maxdepthventraly' => 35, 'pectoraloriginx' => 36, 'pectoraloriginy' => 37, 'pelvicoriginx' => 38, 'pelvicoriginy' => 39, 'flendx' => 40, 'flendy' => 41, 'caudalupperx' => 42, 'caudaluppery' => 43, 'caudallowerx' => 44, 'caudallowery' => 45, 'aspectratio' => 46, 'doubtful' => 47, 'remarks' => 48, 'entered' => 49, 'dateentered' => 50, 'modified' => 51, 'datemodified' => 52, 'expert' => 53, 'datechecked' => 54, 'ts' => 55, ),
        BasePeer::TYPE_COLNAME => array (MorphmetPeer::AUTOCTR => 0, MorphmetPeer::PICNAME => 1, MorphmetPeer::SPECCODE => 2, MorphmetPeer::TL => 3, MorphmetPeer::SL => 4, MorphmetPeer::FL => 5, MorphmetPeer::HL => 6, MorphmetPeer::PAL => 7, MorphmetPeer::PDL => 8, MorphmetPeer::PPL => 9, MorphmetPeer::PPEL => 10, MorphmetPeer::ED => 11, MorphmetPeer::POL => 12, MorphmetPeer::BD => 13, MorphmetPeer::CH => 14, MorphmetPeer::CA => 15, MorphmetPeer::SNOUTTIPX => 16, MorphmetPeer::SNOUTTIPY => 17, MorphmetPeer::CAUDALORIGINX => 18, MorphmetPeer::CAUDALORIGINY => 19, MorphmetPeer::TLENDX => 20, MorphmetPeer::TLENDY => 21, MorphmetPeer::DORSALORIGINX => 22, MorphmetPeer::DORSALORIGINY => 23, MorphmetPeer::ANALORIGINX => 24, MorphmetPeer::ANALORIGINY => 25, MorphmetPeer::EYEFRONTX => 26, MorphmetPeer::EYEFRONTY => 27, MorphmetPeer::EYEENDX => 28, MorphmetPeer::EYEENDY => 29, MorphmetPeer::OPERCLEENDX => 30, MorphmetPeer::OPERCLEENDY => 31, MorphmetPeer::MAXDEPTHDORSALX => 32, MorphmetPeer::MAXDEPTHDORSALY => 33, MorphmetPeer::MAXDEPTHVENTRALX => 34, MorphmetPeer::MAXDEPTHVENTRALY => 35, MorphmetPeer::PECTORALORIGINX => 36, MorphmetPeer::PECTORALORIGINY => 37, MorphmetPeer::PELVICORIGINX => 38, MorphmetPeer::PELVICORIGINY => 39, MorphmetPeer::FLENDX => 40, MorphmetPeer::FLENDY => 41, MorphmetPeer::CAUDALUPPERX => 42, MorphmetPeer::CAUDALUPPERY => 43, MorphmetPeer::CAUDALLOWERX => 44, MorphmetPeer::CAUDALLOWERY => 45, MorphmetPeer::ASPECTRATIO => 46, MorphmetPeer::DOUBTFUL => 47, MorphmetPeer::REMARKS => 48, MorphmetPeer::ENTERED => 49, MorphmetPeer::DATEENTERED => 50, MorphmetPeer::MODIFIED => 51, MorphmetPeer::DATEMODIFIED => 52, MorphmetPeer::EXPERT => 53, MorphmetPeer::DATECHECKED => 54, MorphmetPeer::TS => 55, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'PICNAME' => 1, 'SPECCODE' => 2, 'TL' => 3, 'SL' => 4, 'FL' => 5, 'HL' => 6, 'PAL' => 7, 'PDL' => 8, 'PPL' => 9, 'PPEL' => 10, 'ED' => 11, 'POL' => 12, 'BD' => 13, 'CH' => 14, 'CA' => 15, 'SNOUTTIPX' => 16, 'SNOUTTIPY' => 17, 'CAUDALORIGINX' => 18, 'CAUDALORIGINY' => 19, 'TLENDX' => 20, 'TLENDY' => 21, 'DORSALORIGINX' => 22, 'DORSALORIGINY' => 23, 'ANALORIGINX' => 24, 'ANALORIGINY' => 25, 'EYEFRONTX' => 26, 'EYEFRONTY' => 27, 'EYEENDX' => 28, 'EYEENDY' => 29, 'OPERCLEENDX' => 30, 'OPERCLEENDY' => 31, 'MAXDEPTHDORSALX' => 32, 'MAXDEPTHDORSALY' => 33, 'MAXDEPTHVENTRALX' => 34, 'MAXDEPTHVENTRALY' => 35, 'PECTORALORIGINX' => 36, 'PECTORALORIGINY' => 37, 'PELVICORIGINX' => 38, 'PELVICORIGINY' => 39, 'FLENDX' => 40, 'FLENDY' => 41, 'CAUDALUPPERX' => 42, 'CAUDALUPPERY' => 43, 'CAUDALLOWERX' => 44, 'CAUDALLOWERY' => 45, 'ASPECTRATIO' => 46, 'DOUBTFUL' => 47, 'REMARKS' => 48, 'ENTERED' => 49, 'DATEENTERED' => 50, 'MODIFIED' => 51, 'DATEMODIFIED' => 52, 'EXPERT' => 53, 'DATECHECKED' => 54, 'TS' => 55, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'PicName' => 1, 'Speccode' => 2, 'TL' => 3, 'SL' => 4, 'FL' => 5, 'HL' => 6, 'PAL' => 7, 'PDL' => 8, 'PPL' => 9, 'PPEL' => 10, 'ED' => 11, 'POL' => 12, 'BD' => 13, 'CH' => 14, 'CA' => 15, 'SnoutTipX' => 16, 'SnoutTipY' => 17, 'CaudalOriginX' => 18, 'CaudalOriginY' => 19, 'TLEndX' => 20, 'TLEndY' => 21, 'DorsalOriginX' => 22, 'DorsalOriginY' => 23, 'AnalOriginX' => 24, 'AnalOriginY' => 25, 'EyeFrontX' => 26, 'EyeFrontY' => 27, 'EyeEndX' => 28, 'EyeEndY' => 29, 'OpercleEndX' => 30, 'OpercleEndY' => 31, 'MaxDepthDorsalX' => 32, 'MaxDepthDorsalY' => 33, 'MaxDepthVentralX' => 34, 'MaxDepthVentralY' => 35, 'PectoralOriginX' => 36, 'PectoralOriginY' => 37, 'PelvicOriginX' => 38, 'PelvicOriginY' => 39, 'FLEndX' => 40, 'FLEndY' => 41, 'CaudalUpperX' => 42, 'CaudalUpperY' => 43, 'CaudalLowerX' => 44, 'CaudalLowerY' => 45, 'AspectRatio' => 46, 'Doubtful' => 47, 'Remarks' => 48, 'Entered' => 49, 'DateEntered' => 50, 'Modified' => 51, 'DateModified' => 52, 'Expert' => 53, 'DateChecked' => 54, 'TS' => 55, ),
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
        $toNames = MorphmetPeer::getFieldNames($toType);
        $key = isset(MorphmetPeer::$fieldKeys[$fromType][$name]) ? MorphmetPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(MorphmetPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, MorphmetPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return MorphmetPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. MorphmetPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(MorphmetPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(MorphmetPeer::AUTOCTR);
            $criteria->addSelectColumn(MorphmetPeer::PICNAME);
            $criteria->addSelectColumn(MorphmetPeer::SPECCODE);
            $criteria->addSelectColumn(MorphmetPeer::TL);
            $criteria->addSelectColumn(MorphmetPeer::SL);
            $criteria->addSelectColumn(MorphmetPeer::FL);
            $criteria->addSelectColumn(MorphmetPeer::HL);
            $criteria->addSelectColumn(MorphmetPeer::PAL);
            $criteria->addSelectColumn(MorphmetPeer::PDL);
            $criteria->addSelectColumn(MorphmetPeer::PPL);
            $criteria->addSelectColumn(MorphmetPeer::PPEL);
            $criteria->addSelectColumn(MorphmetPeer::ED);
            $criteria->addSelectColumn(MorphmetPeer::POL);
            $criteria->addSelectColumn(MorphmetPeer::BD);
            $criteria->addSelectColumn(MorphmetPeer::CH);
            $criteria->addSelectColumn(MorphmetPeer::CA);
            $criteria->addSelectColumn(MorphmetPeer::SNOUTTIPX);
            $criteria->addSelectColumn(MorphmetPeer::SNOUTTIPY);
            $criteria->addSelectColumn(MorphmetPeer::CAUDALORIGINX);
            $criteria->addSelectColumn(MorphmetPeer::CAUDALORIGINY);
            $criteria->addSelectColumn(MorphmetPeer::TLENDX);
            $criteria->addSelectColumn(MorphmetPeer::TLENDY);
            $criteria->addSelectColumn(MorphmetPeer::DORSALORIGINX);
            $criteria->addSelectColumn(MorphmetPeer::DORSALORIGINY);
            $criteria->addSelectColumn(MorphmetPeer::ANALORIGINX);
            $criteria->addSelectColumn(MorphmetPeer::ANALORIGINY);
            $criteria->addSelectColumn(MorphmetPeer::EYEFRONTX);
            $criteria->addSelectColumn(MorphmetPeer::EYEFRONTY);
            $criteria->addSelectColumn(MorphmetPeer::EYEENDX);
            $criteria->addSelectColumn(MorphmetPeer::EYEENDY);
            $criteria->addSelectColumn(MorphmetPeer::OPERCLEENDX);
            $criteria->addSelectColumn(MorphmetPeer::OPERCLEENDY);
            $criteria->addSelectColumn(MorphmetPeer::MAXDEPTHDORSALX);
            $criteria->addSelectColumn(MorphmetPeer::MAXDEPTHDORSALY);
            $criteria->addSelectColumn(MorphmetPeer::MAXDEPTHVENTRALX);
            $criteria->addSelectColumn(MorphmetPeer::MAXDEPTHVENTRALY);
            $criteria->addSelectColumn(MorphmetPeer::PECTORALORIGINX);
            $criteria->addSelectColumn(MorphmetPeer::PECTORALORIGINY);
            $criteria->addSelectColumn(MorphmetPeer::PELVICORIGINX);
            $criteria->addSelectColumn(MorphmetPeer::PELVICORIGINY);
            $criteria->addSelectColumn(MorphmetPeer::FLENDX);
            $criteria->addSelectColumn(MorphmetPeer::FLENDY);
            $criteria->addSelectColumn(MorphmetPeer::CAUDALUPPERX);
            $criteria->addSelectColumn(MorphmetPeer::CAUDALUPPERY);
            $criteria->addSelectColumn(MorphmetPeer::CAUDALLOWERX);
            $criteria->addSelectColumn(MorphmetPeer::CAUDALLOWERY);
            $criteria->addSelectColumn(MorphmetPeer::ASPECTRATIO);
            $criteria->addSelectColumn(MorphmetPeer::DOUBTFUL);
            $criteria->addSelectColumn(MorphmetPeer::REMARKS);
            $criteria->addSelectColumn(MorphmetPeer::ENTERED);
            $criteria->addSelectColumn(MorphmetPeer::DATEENTERED);
            $criteria->addSelectColumn(MorphmetPeer::MODIFIED);
            $criteria->addSelectColumn(MorphmetPeer::DATEMODIFIED);
            $criteria->addSelectColumn(MorphmetPeer::EXPERT);
            $criteria->addSelectColumn(MorphmetPeer::DATECHECKED);
            $criteria->addSelectColumn(MorphmetPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.PicName');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.TL');
            $criteria->addSelectColumn($alias . '.SL');
            $criteria->addSelectColumn($alias . '.FL');
            $criteria->addSelectColumn($alias . '.HL');
            $criteria->addSelectColumn($alias . '.PAL');
            $criteria->addSelectColumn($alias . '.PDL');
            $criteria->addSelectColumn($alias . '.PPL');
            $criteria->addSelectColumn($alias . '.PPEL');
            $criteria->addSelectColumn($alias . '.ED');
            $criteria->addSelectColumn($alias . '.POL');
            $criteria->addSelectColumn($alias . '.BD');
            $criteria->addSelectColumn($alias . '.CH');
            $criteria->addSelectColumn($alias . '.CA');
            $criteria->addSelectColumn($alias . '.SnoutTipX');
            $criteria->addSelectColumn($alias . '.SnoutTipY');
            $criteria->addSelectColumn($alias . '.CaudalOriginX');
            $criteria->addSelectColumn($alias . '.CaudalOriginY');
            $criteria->addSelectColumn($alias . '.TLEndX');
            $criteria->addSelectColumn($alias . '.TLEndY');
            $criteria->addSelectColumn($alias . '.DorsalOriginX');
            $criteria->addSelectColumn($alias . '.DorsalOriginY');
            $criteria->addSelectColumn($alias . '.AnalOriginX');
            $criteria->addSelectColumn($alias . '.AnalOriginY');
            $criteria->addSelectColumn($alias . '.EyeFrontX');
            $criteria->addSelectColumn($alias . '.EyeFrontY');
            $criteria->addSelectColumn($alias . '.EyeEndX');
            $criteria->addSelectColumn($alias . '.EyeEndY');
            $criteria->addSelectColumn($alias . '.OpercleEndX');
            $criteria->addSelectColumn($alias . '.OpercleEndY');
            $criteria->addSelectColumn($alias . '.MaxDepthDorsalX');
            $criteria->addSelectColumn($alias . '.MaxDepthDorsalY');
            $criteria->addSelectColumn($alias . '.MaxDepthVentralX');
            $criteria->addSelectColumn($alias . '.MaxDepthVentralY');
            $criteria->addSelectColumn($alias . '.PectoralOriginX');
            $criteria->addSelectColumn($alias . '.PectoralOriginY');
            $criteria->addSelectColumn($alias . '.PelvicOriginX');
            $criteria->addSelectColumn($alias . '.PelvicOriginY');
            $criteria->addSelectColumn($alias . '.FLEndX');
            $criteria->addSelectColumn($alias . '.FLEndY');
            $criteria->addSelectColumn($alias . '.CaudalUpperX');
            $criteria->addSelectColumn($alias . '.CaudalUpperY');
            $criteria->addSelectColumn($alias . '.CaudalLowerX');
            $criteria->addSelectColumn($alias . '.CaudalLowerY');
            $criteria->addSelectColumn($alias . '.AspectRatio');
            $criteria->addSelectColumn($alias . '.Doubtful');
            $criteria->addSelectColumn($alias . '.Remarks');
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
        $criteria->setPrimaryTableName(MorphmetPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MorphmetPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(MorphmetPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(MorphmetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Morphmet
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = MorphmetPeer::doSelect($critcopy, $con);
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
        return MorphmetPeer::populateObjects(MorphmetPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(MorphmetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            MorphmetPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(MorphmetPeer::DATABASE_NAME);

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
     * @param Morphmet $obj A Morphmet object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getPicname();
            } // if key === null
            MorphmetPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Morphmet object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Morphmet) {
                $key = (string) $value->getPicname();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Morphmet object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(MorphmetPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Morphmet Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(MorphmetPeer::$instances[$key])) {
                return MorphmetPeer::$instances[$key];
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
        foreach (MorphmetPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        MorphmetPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to morphmet
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
        if ($row[$startcol + 1] === null) {
            return null;
        }

        return (string) $row[$startcol + 1];
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

        return (string) $row[$startcol + 1];
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
        $cls = MorphmetPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = MorphmetPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = MorphmetPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MorphmetPeer::addInstanceToPool($obj, $key);
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
     * @return array (Morphmet object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = MorphmetPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = MorphmetPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + MorphmetPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MorphmetPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            MorphmetPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(MorphmetPeer::DATABASE_NAME)->getTable(MorphmetPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseMorphmetPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseMorphmetPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \MorphmetTableMap());
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
        return MorphmetPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Morphmet or Criteria object.
     *
     * @param      mixed $values Criteria or Morphmet object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MorphmetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Morphmet object
        }


        // Set the correct dbName
        $criteria->setDbName(MorphmetPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Morphmet or Criteria object.
     *
     * @param      mixed $values Criteria or Morphmet object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MorphmetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(MorphmetPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(MorphmetPeer::PICNAME);
            $value = $criteria->remove(MorphmetPeer::PICNAME);
            if ($value) {
                $selectCriteria->add(MorphmetPeer::PICNAME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MorphmetPeer::TABLE_NAME);
            }

        } else { // $values is Morphmet object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(MorphmetPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the morphmet table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MorphmetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(MorphmetPeer::TABLE_NAME, $con, MorphmetPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MorphmetPeer::clearInstancePool();
            MorphmetPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Morphmet or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Morphmet object or primary key or array of primary keys
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
            $con = Propel::getConnection(MorphmetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            MorphmetPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Morphmet) { // it's a model object
            // invalidate the cache for this single object
            MorphmetPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MorphmetPeer::DATABASE_NAME);
            $criteria->add(MorphmetPeer::PICNAME, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                MorphmetPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(MorphmetPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            MorphmetPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Morphmet object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Morphmet $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(MorphmetPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(MorphmetPeer::TABLE_NAME);

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

        return BasePeer::doValidate(MorphmetPeer::DATABASE_NAME, MorphmetPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Morphmet
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = MorphmetPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(MorphmetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(MorphmetPeer::DATABASE_NAME);
        $criteria->add(MorphmetPeer::PICNAME, $pk);

        $v = MorphmetPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Morphmet[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MorphmetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(MorphmetPeer::DATABASE_NAME);
            $criteria->add(MorphmetPeer::PICNAME, $pks, Criteria::IN);
            $objs = MorphmetPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseMorphmetPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMorphmetPeer::buildTableMap();

