<?php


/**
 * Base static class for performing query and update operations on the 'morphdat' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseMorphdatPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'morphdat';

    /** the related Propel class for this table */
    const OM_CLASS = 'Morphdat';

    /** the related TableMap class for this table */
    const TM_CLASS = 'MorphdatTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 159;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 159;

    /** the column name for the autoctr field */
    const AUTOCTR = 'morphdat.autoctr';

    /** the column name for the Speccode field */
    const SPECCODE = 'morphdat.Speccode';

    /** the column name for the StockCode field */
    const STOCKCODE = 'morphdat.StockCode';

    /** the column name for the MorphDatRefNo field */
    const MORPHDATREFNO = 'morphdat.MorphDatRefNo';

    /** the column name for the Females field */
    const FEMALES = 'morphdat.Females';

    /** the column name for the Males field */
    const MALES = 'morphdat.Males';

    /** the column name for the AppearancePic field */
    const APPEARANCEPIC = 'morphdat.AppearancePic';

    /** the column name for the SexualAttributes field */
    const SEXUALATTRIBUTES = 'morphdat.SexualAttributes';

    /** the column name for the SexMorphology field */
    const SEXMORPHOLOGY = 'morphdat.SexMorphology';

    /** the column name for the SexColors field */
    const SEXCOLORS = 'morphdat.SexColors';

    /** the column name for the StrikingFeatures field */
    const STRIKINGFEATURES = 'morphdat.StrikingFeatures';

    /** the column name for the BodyShapeI field */
    const BODYSHAPEI = 'morphdat.BodyShapeI';

    /** the column name for the BodyShapeII field */
    const BODYSHAPEII = 'morphdat.BodyShapeII';

    /** the column name for the Forehead field */
    const FOREHEAD = 'morphdat.Forehead';

    /** the column name for the OperculumPresent field */
    const OPERCULUMPRESENT = 'morphdat.OperculumPresent';

    /** the column name for the TypeofEyes field */
    const TYPEOFEYES = 'morphdat.TypeofEyes';

    /** the column name for the TypeofMouth field */
    const TYPEOFMOUTH = 'morphdat.TypeofMouth';

    /** the column name for the PosofMouth field */
    const POSOFMOUTH = 'morphdat.PosofMouth';

    /** the column name for the MandibleTeeth field */
    const MANDIBLETEETH = 'morphdat.MandibleTeeth';

    /** the column name for the MandibleTeethT1 field */
    const MANDIBLETEETHT1 = 'morphdat.MandibleTeethT1';

    /** the column name for the MandibleTeethT2 field */
    const MANDIBLETEETHT2 = 'morphdat.MandibleTeethT2';

    /** the column name for the MandibleRowsMin field */
    const MANDIBLEROWSMIN = 'morphdat.MandibleRowsMin';

    /** the column name for the MandibleRowsMax field */
    const MANDIBLEROWSMAX = 'morphdat.MandibleRowsMax';

    /** the column name for the MaxillaTeeth field */
    const MAXILLATEETH = 'morphdat.MaxillaTeeth';

    /** the column name for the MaxillaTeethT1 field */
    const MAXILLATEETHT1 = 'morphdat.MaxillaTeethT1';

    /** the column name for the MaxillaTeethT2 field */
    const MAXILLATEETHT2 = 'morphdat.MaxillaTeethT2';

    /** the column name for the MaxillaRowsMin field */
    const MAXILLAROWSMIN = 'morphdat.MaxillaRowsMin';

    /** the column name for the MaxillaRowsMax field */
    const MAXILLAROWSMAX = 'morphdat.MaxillaRowsMax';

    /** the column name for the VomerineTeeth field */
    const VOMERINETEETH = 'morphdat.VomerineTeeth';

    /** the column name for the VomerineTeethT1 field */
    const VOMERINETEETHT1 = 'morphdat.VomerineTeethT1';

    /** the column name for the VomerineTeethT2 field */
    const VOMERINETEETHT2 = 'morphdat.VomerineTeethT2';

    /** the column name for the VomerineRowsMin field */
    const VOMERINEROWSMIN = 'morphdat.VomerineRowsMin';

    /** the column name for the VomerineRowsMax field */
    const VOMERINEROWSMAX = 'morphdat.VomerineRowsMax';

    /** the column name for the Palatine field */
    const PALATINE = 'morphdat.Palatine';

    /** the column name for the PalatineTeethT1 field */
    const PALATINETEETHT1 = 'morphdat.PalatineTeethT1';

    /** the column name for the PalatineTeethT2 field */
    const PALATINETEETHT2 = 'morphdat.PalatineTeethT2';

    /** the column name for the PalatineRowsMin field */
    const PALATINEROWSMIN = 'morphdat.PalatineRowsMin';

    /** the column name for the PalatineRowsMax field */
    const PALATINEROWSMAX = 'morphdat.PalatineRowsMax';

    /** the column name for the PharyngealTeeth field */
    const PHARYNGEALTEETH = 'morphdat.PharyngealTeeth';

    /** the column name for the PharyngealTeethT1 field */
    const PHARYNGEALTEETHT1 = 'morphdat.PharyngealTeethT1';

    /** the column name for the PharyngealTeethT2 field */
    const PHARYNGEALTEETHT2 = 'morphdat.PharyngealTeethT2';

    /** the column name for the PharyngealRowsMin field */
    const PHARYNGEALROWSMIN = 'morphdat.PharyngealRowsMin';

    /** the column name for the PharyngealRowsMax field */
    const PHARYNGEALROWSMAX = 'morphdat.PharyngealRowsMax';

    /** the column name for the TeethonTongue field */
    const TEETHONTONGUE = 'morphdat.TeethonTongue';

    /** the column name for the Lipsteeth field */
    const LIPSTEETH = 'morphdat.Lipsteeth';

    /** the column name for the DermalTeeth field */
    const DERMALTEETH = 'morphdat.DermalTeeth';

    /** the column name for the CommentonTeeth field */
    const COMMENTONTEETH = 'morphdat.CommentonTeeth';

    /** the column name for the TypeofScales field */
    const TYPEOFSCALES = 'morphdat.TypeofScales';

    /** the column name for the Scutes field */
    const SCUTES = 'morphdat.Scutes';

    /** the column name for the Keels field */
    const KEELS = 'morphdat.Keels';

    /** the column name for the HorStripesTTI field */
    const HORSTRIPESTTI = 'morphdat.HorStripesTTI';

    /** the column name for the HorStripesTTII field */
    const HORSTRIPESTTII = 'morphdat.HorStripesTTII';

    /** the column name for the VerStripesTTI field */
    const VERSTRIPESTTI = 'morphdat.VerStripesTTI';

    /** the column name for the VerStripesTTII field */
    const VERSTRIPESTTII = 'morphdat.VerStripesTTII';

    /** the column name for the VerStripesTTIII field */
    const VERSTRIPESTTIII = 'morphdat.VerStripesTTIII';

    /** the column name for the DiaStripesTTI field */
    const DIASTRIPESTTI = 'morphdat.DiaStripesTTI';

    /** the column name for the DiaStripesTTII field */
    const DIASTRIPESTTII = 'morphdat.DiaStripesTTII';

    /** the column name for the DiaStripesTTIII field */
    const DIASTRIPESTTIII = 'morphdat.DiaStripesTTIII';

    /** the column name for the CurStripesTTI field */
    const CURSTRIPESTTI = 'morphdat.CurStripesTTI';

    /** the column name for the CurStripesTTII field */
    const CURSTRIPESTTII = 'morphdat.CurStripesTTII';

    /** the column name for the CurStripesTTIII field */
    const CURSTRIPESTTIII = 'morphdat.CurStripesTTIII';

    /** the column name for the SpotsTTI field */
    const SPOTSTTI = 'morphdat.SpotsTTI';

    /** the column name for the SpotsTTII field */
    const SPOTSTTII = 'morphdat.SpotsTTII';

    /** the column name for the SpotsTTIII field */
    const SPOTSTTIII = 'morphdat.SpotsTTIII';

    /** the column name for the DorsalFinI field */
    const DORSALFINI = 'morphdat.DorsalFinI';

    /** the column name for the DorsalFinII field */
    const DORSALFINII = 'morphdat.DorsalFinII';

    /** the column name for the CaudalFinI field */
    const CAUDALFINI = 'morphdat.CaudalFinI';

    /** the column name for the CaudalFinII field */
    const CAUDALFINII = 'morphdat.CaudalFinII';

    /** the column name for the AnalFinI field */
    const ANALFINI = 'morphdat.AnalFinI';

    /** the column name for the AnalFinII field */
    const ANALFINII = 'morphdat.AnalFinII';

    /** the column name for the LateralLinesNo field */
    const LATERALLINESNO = 'morphdat.LateralLinesNo';

    /** the column name for the LLinterrupted field */
    const LLINTERRUPTED = 'morphdat.LLinterrupted';

    /** the column name for the ScalesLateralmin field */
    const SCALESLATERALMIN = 'morphdat.ScalesLateralmin';

    /** the column name for the ScalesLateralmax field */
    const SCALESLATERALMAX = 'morphdat.ScalesLateralmax';

    /** the column name for the PoredScalesMin field */
    const POREDSCALESMIN = 'morphdat.PoredScalesMin';

    /** the column name for the PoredScalesMax field */
    const POREDSCALESMAX = 'morphdat.PoredScalesMax';

    /** the column name for the LatSeriesMin field */
    const LATSERIESMIN = 'morphdat.LatSeriesMin';

    /** the column name for the LatSeriesMax field */
    const LATSERIESMAX = 'morphdat.LatSeriesMax';

    /** the column name for the ScaleRowsAboveMin field */
    const SCALEROWSABOVEMIN = 'morphdat.ScaleRowsAboveMin';

    /** the column name for the ScaleRowsAboveMax field */
    const SCALEROWSABOVEMAX = 'morphdat.ScaleRowsAboveMax';

    /** the column name for the ScaleRowsBelowMin field */
    const SCALEROWSBELOWMIN = 'morphdat.ScaleRowsBelowMin';

    /** the column name for the ScaleRowsBelowMax field */
    const SCALEROWSBELOWMAX = 'morphdat.ScaleRowsBelowMax';

    /** the column name for the ScalesPeduncMin field */
    const SCALESPEDUNCMIN = 'morphdat.ScalesPeduncMin';

    /** the column name for the ScalesPeduncMax field */
    const SCALESPEDUNCMAX = 'morphdat.ScalesPeduncMax';

    /** the column name for the BarbelsNo field */
    const BARBELSNO = 'morphdat.BarbelsNo';

    /** the column name for the BarbelsType field */
    const BARBELSTYPE = 'morphdat.BarbelsType';

    /** the column name for the GillCleftsNo field */
    const GILLCLEFTSNO = 'morphdat.GillCleftsNo';

    /** the column name for the Spiracle field */
    const SPIRACLE = 'morphdat.Spiracle';

    /** the column name for the GillRakersLowMin field */
    const GILLRAKERSLOWMIN = 'morphdat.GillRakersLowMin';

    /** the column name for the GillRakersLowMax field */
    const GILLRAKERSLOWMAX = 'morphdat.GillRakersLowMax';

    /** the column name for the GillRakersUpMin field */
    const GILLRAKERSUPMIN = 'morphdat.GillRakersUpMin';

    /** the column name for the GillRakersUpMax field */
    const GILLRAKERSUPMAX = 'morphdat.GillRakersUpMax';

    /** the column name for the GillRakersTotalMin field */
    const GILLRAKERSTOTALMIN = 'morphdat.GillRakersTotalMin';

    /** the column name for the GillRakersTotalMax field */
    const GILLRAKERSTOTALMAX = 'morphdat.GillRakersTotalMax';

    /** the column name for the Vertebrae field */
    const VERTEBRAE = 'morphdat.Vertebrae';

    /** the column name for the VertebraePreanMin field */
    const VERTEBRAEPREANMIN = 'morphdat.VertebraePreanMin';

    /** the column name for the VertebraePreanMax field */
    const VERTEBRAEPREANMAX = 'morphdat.VertebraePreanMax';

    /** the column name for the VertebraeTotalMin field */
    const VERTEBRAETOTALMIN = 'morphdat.VertebraeTotalMin';

    /** the column name for the VertebraeTotalMax field */
    const VERTEBRAETOTALMAX = 'morphdat.VertebraeTotalMax';

    /** the column name for the DorsalAttributes field */
    const DORSALATTRIBUTES = 'morphdat.DorsalAttributes';

    /** the column name for the Dfinno field */
    const DFINNO = 'morphdat.Dfinno';

    /** the column name for the DorsalSpinesMin field */
    const DORSALSPINESMIN = 'morphdat.DorsalSpinesMin';

    /** the column name for the DorsalSpinesMax field */
    const DORSALSPINESMAX = 'morphdat.DorsalSpinesMax';

    /** the column name for the Notched field */
    const NOTCHED = 'morphdat.Notched';

    /** the column name for the DorsalSoftRaysMin field */
    const DORSALSOFTRAYSMIN = 'morphdat.DorsalSoftRaysMin';

    /** the column name for the DorsalSoftRaysMax field */
    const DORSALSOFTRAYSMAX = 'morphdat.DorsalSoftRaysMax';

    /** the column name for the Adifin field */
    const ADIFIN = 'morphdat.Adifin';

    /** the column name for the DFinletsmin field */
    const DFINLETSMIN = 'morphdat.DFinletsmin';

    /** the column name for the DFinletsmax field */
    const DFINLETSMAX = 'morphdat.DFinletsmax';

    /** the column name for the VFinletsmin field */
    const VFINLETSMIN = 'morphdat.VFinletsmin';

    /** the column name for the VFinletsmax field */
    const VFINLETSMAX = 'morphdat.VFinletsmax';

    /** the column name for the CShape field */
    const CSHAPE = 'morphdat.CShape';

    /** the column name for the Attributes field */
    const ATTRIBUTES = 'morphdat.Attributes';

    /** the column name for the Afinno field */
    const AFINNO = 'morphdat.Afinno';

    /** the column name for the AnalFinSpinesMin field */
    const ANALFINSPINESMIN = 'morphdat.AnalFinSpinesMin';

    /** the column name for the AnalFinSpinesMax field */
    const ANALFINSPINESMAX = 'morphdat.AnalFinSpinesMax';

    /** the column name for the Araymin field */
    const ARAYMIN = 'morphdat.Araymin';

    /** the column name for the Araymax field */
    const ARAYMAX = 'morphdat.Araymax';

    /** the column name for the PectoralAttributes field */
    const PECTORALATTRIBUTES = 'morphdat.PectoralAttributes';

    /** the column name for the Pspines2 field */
    const PSPINES2 = 'morphdat.Pspines2';

    /** the column name for the Praymin field */
    const PRAYMIN = 'morphdat.Praymin';

    /** the column name for the Praymax field */
    const PRAYMAX = 'morphdat.Praymax';

    /** the column name for the PelvicsAttributes field */
    const PELVICSATTRIBUTES = 'morphdat.PelvicsAttributes';

    /** the column name for the VPosition field */
    const VPOSITION = 'morphdat.VPosition';

    /** the column name for the VPosition2 field */
    const VPOSITION2 = 'morphdat.VPosition2';

    /** the column name for the Vspines field */
    const VSPINES = 'morphdat.Vspines';

    /** the column name for the Vraymin field */
    const VRAYMIN = 'morphdat.Vraymin';

    /** the column name for the Vraymax field */
    const VRAYMAX = 'morphdat.Vraymax';

    /** the column name for the StandardLengthCm field */
    const STANDARDLENGTHCM = 'morphdat.StandardLengthCm';

    /** the column name for the Forklength field */
    const FORKLENGTH = 'morphdat.Forklength';

    /** the column name for the Totallength field */
    const TOTALLENGTH = 'morphdat.Totallength';

    /** the column name for the HeadLength field */
    const HEADLENGTH = 'morphdat.HeadLength';

    /** the column name for the PreDorsalLength field */
    const PREDORSALLENGTH = 'morphdat.PreDorsalLength';

    /** the column name for the PrePelvicsLength field */
    const PREPELVICSLENGTH = 'morphdat.PrePelvicsLength';

    /** the column name for the PreAnalLength field */
    const PREANALLENGTH = 'morphdat.PreAnalLength';

    /** the column name for the PostHeadDepth field */
    const POSTHEADDEPTH = 'morphdat.PostHeadDepth';

    /** the column name for the PostTrunkDepth field */
    const POSTTRUNKDEPTH = 'morphdat.PostTrunkDepth';

    /** the column name for the MaximumDepth field */
    const MAXIMUMDEPTH = 'morphdat.MaximumDepth';

    /** the column name for the PeduncleDepth field */
    const PEDUNCLEDEPTH = 'morphdat.PeduncleDepth';

    /** the column name for the PeduncleLength field */
    const PEDUNCLELENGTH = 'morphdat.PeduncleLength';

    /** the column name for the CaudalHeight field */
    const CAUDALHEIGHT = 'morphdat.CaudalHeight';

    /** the column name for the PreorbitalLength field */
    const PREORBITALLENGTH = 'morphdat.PreorbitalLength';

    /** the column name for the EyeLength field */
    const EYELENGTH = 'morphdat.EyeLength';

    /** the column name for the Entered field */
    const ENTERED = 'morphdat.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'morphdat.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'morphdat.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'morphdat.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'morphdat.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'morphdat.DateChecked';

    /** the column name for the RemarkSex field */
    const REMARKSEX = 'morphdat.RemarkSex';

    /** the column name for the AddChars field */
    const ADDCHARS = 'morphdat.AddChars';

    /** the column name for the SimilarSpecies1 field */
    const SIMILARSPECIES1 = 'morphdat.SimilarSpecies1';

    /** the column name for the SimilarSpec1Remarks field */
    const SIMILARSPEC1REMARKS = 'morphdat.SimilarSpec1Remarks';

    /** the column name for the SimilarSpecies2 field */
    const SIMILARSPECIES2 = 'morphdat.SimilarSpecies2';

    /** the column name for the SimilarSpec2Remarks field */
    const SIMILARSPEC2REMARKS = 'morphdat.SimilarSpec2Remarks';

    /** the column name for the EaseofID field */
    const EASEOFID = 'morphdat.EaseofID';

    /** the column name for the OtherRef1 field */
    const OTHERREF1 = 'morphdat.OtherRef1';

    /** the column name for the OtherRef2 field */
    const OTHERREF2 = 'morphdat.OtherRef2';

    /** the column name for the TS field */
    const TS = 'morphdat.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Morphdat objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Morphdat[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. MorphdatPeer::$fieldNames[MorphdatPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Speccode', 'Stockcode', 'Morphdatrefno', 'Females', 'Males', 'Appearancepic', 'Sexualattributes', 'Sexmorphology', 'Sexcolors', 'Strikingfeatures', 'Bodyshapei', 'Bodyshapeii', 'Forehead', 'Operculumpresent', 'Typeofeyes', 'Typeofmouth', 'Posofmouth', 'Mandibleteeth', 'Mandibleteetht1', 'Mandibleteetht2', 'Mandiblerowsmin', 'Mandiblerowsmax', 'Maxillateeth', 'Maxillateetht1', 'Maxillateetht2', 'Maxillarowsmin', 'Maxillarowsmax', 'Vomerineteeth', 'Vomerineteetht1', 'Vomerineteetht2', 'Vomerinerowsmin', 'Vomerinerowsmax', 'Palatine', 'Palatineteetht1', 'Palatineteetht2', 'Palatinerowsmin', 'Palatinerowsmax', 'Pharyngealteeth', 'Pharyngealteetht1', 'Pharyngealteetht2', 'Pharyngealrowsmin', 'Pharyngealrowsmax', 'Teethontongue', 'Lipsteeth', 'Dermalteeth', 'Commentonteeth', 'Typeofscales', 'Scutes', 'Keels', 'Horstripestti', 'Horstripesttii', 'Verstripestti', 'Verstripesttii', 'Verstripesttiii', 'Diastripestti', 'Diastripesttii', 'Diastripesttiii', 'Curstripestti', 'Curstripesttii', 'Curstripesttiii', 'Spotstti', 'Spotsttii', 'Spotsttiii', 'Dorsalfini', 'Dorsalfinii', 'Caudalfini', 'Caudalfinii', 'Analfini', 'Analfinii', 'Laterallinesno', 'Llinterrupted', 'Scaleslateralmin', 'Scaleslateralmax', 'Poredscalesmin', 'Poredscalesmax', 'Latseriesmin', 'Latseriesmax', 'Scalerowsabovemin', 'Scalerowsabovemax', 'Scalerowsbelowmin', 'Scalerowsbelowmax', 'Scalespeduncmin', 'Scalespeduncmax', 'Barbelsno', 'Barbelstype', 'Gillcleftsno', 'Spiracle', 'Gillrakerslowmin', 'Gillrakerslowmax', 'Gillrakersupmin', 'Gillrakersupmax', 'Gillrakerstotalmin', 'Gillrakerstotalmax', 'Vertebrae', 'Vertebraepreanmin', 'Vertebraepreanmax', 'Vertebraetotalmin', 'Vertebraetotalmax', 'Dorsalattributes', 'Dfinno', 'Dorsalspinesmin', 'Dorsalspinesmax', 'Notched', 'Dorsalsoftraysmin', 'Dorsalsoftraysmax', 'Adifin', 'Dfinletsmin', 'Dfinletsmax', 'Vfinletsmin', 'Vfinletsmax', 'Cshape', 'Attributes', 'Afinno', 'Analfinspinesmin', 'Analfinspinesmax', 'Araymin', 'Araymax', 'Pectoralattributes', 'Pspines2', 'Praymin', 'Praymax', 'Pelvicsattributes', 'Vposition', 'Vposition2', 'Vspines', 'Vraymin', 'Vraymax', 'Standardlengthcm', 'Forklength', 'Totallength', 'Headlength', 'Predorsallength', 'Prepelvicslength', 'Preanallength', 'Postheaddepth', 'Posttrunkdepth', 'Maximumdepth', 'Peduncledepth', 'Pedunclelength', 'Caudalheight', 'Preorbitallength', 'Eyelength', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Remarksex', 'Addchars', 'Similarspecies1', 'Similarspec1remarks', 'Similarspecies2', 'Similarspec2remarks', 'Easeofid', 'Otherref1', 'Otherref2', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'speccode', 'stockcode', 'morphdatrefno', 'females', 'males', 'appearancepic', 'sexualattributes', 'sexmorphology', 'sexcolors', 'strikingfeatures', 'bodyshapei', 'bodyshapeii', 'forehead', 'operculumpresent', 'typeofeyes', 'typeofmouth', 'posofmouth', 'mandibleteeth', 'mandibleteetht1', 'mandibleteetht2', 'mandiblerowsmin', 'mandiblerowsmax', 'maxillateeth', 'maxillateetht1', 'maxillateetht2', 'maxillarowsmin', 'maxillarowsmax', 'vomerineteeth', 'vomerineteetht1', 'vomerineteetht2', 'vomerinerowsmin', 'vomerinerowsmax', 'palatine', 'palatineteetht1', 'palatineteetht2', 'palatinerowsmin', 'palatinerowsmax', 'pharyngealteeth', 'pharyngealteetht1', 'pharyngealteetht2', 'pharyngealrowsmin', 'pharyngealrowsmax', 'teethontongue', 'lipsteeth', 'dermalteeth', 'commentonteeth', 'typeofscales', 'scutes', 'keels', 'horstripestti', 'horstripesttii', 'verstripestti', 'verstripesttii', 'verstripesttiii', 'diastripestti', 'diastripesttii', 'diastripesttiii', 'curstripestti', 'curstripesttii', 'curstripesttiii', 'spotstti', 'spotsttii', 'spotsttiii', 'dorsalfini', 'dorsalfinii', 'caudalfini', 'caudalfinii', 'analfini', 'analfinii', 'laterallinesno', 'llinterrupted', 'scaleslateralmin', 'scaleslateralmax', 'poredscalesmin', 'poredscalesmax', 'latseriesmin', 'latseriesmax', 'scalerowsabovemin', 'scalerowsabovemax', 'scalerowsbelowmin', 'scalerowsbelowmax', 'scalespeduncmin', 'scalespeduncmax', 'barbelsno', 'barbelstype', 'gillcleftsno', 'spiracle', 'gillrakerslowmin', 'gillrakerslowmax', 'gillrakersupmin', 'gillrakersupmax', 'gillrakerstotalmin', 'gillrakerstotalmax', 'vertebrae', 'vertebraepreanmin', 'vertebraepreanmax', 'vertebraetotalmin', 'vertebraetotalmax', 'dorsalattributes', 'dfinno', 'dorsalspinesmin', 'dorsalspinesmax', 'notched', 'dorsalsoftraysmin', 'dorsalsoftraysmax', 'adifin', 'dfinletsmin', 'dfinletsmax', 'vfinletsmin', 'vfinletsmax', 'cshape', 'attributes', 'afinno', 'analfinspinesmin', 'analfinspinesmax', 'araymin', 'araymax', 'pectoralattributes', 'pspines2', 'praymin', 'praymax', 'pelvicsattributes', 'vposition', 'vposition2', 'vspines', 'vraymin', 'vraymax', 'standardlengthcm', 'forklength', 'totallength', 'headlength', 'predorsallength', 'prepelvicslength', 'preanallength', 'postheaddepth', 'posttrunkdepth', 'maximumdepth', 'peduncledepth', 'pedunclelength', 'caudalheight', 'preorbitallength', 'eyelength', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'remarksex', 'addchars', 'similarspecies1', 'similarspec1remarks', 'similarspecies2', 'similarspec2remarks', 'easeofid', 'otherref1', 'otherref2', 'ts', ),
        BasePeer::TYPE_COLNAME => array (MorphdatPeer::AUTOCTR, MorphdatPeer::SPECCODE, MorphdatPeer::STOCKCODE, MorphdatPeer::MORPHDATREFNO, MorphdatPeer::FEMALES, MorphdatPeer::MALES, MorphdatPeer::APPEARANCEPIC, MorphdatPeer::SEXUALATTRIBUTES, MorphdatPeer::SEXMORPHOLOGY, MorphdatPeer::SEXCOLORS, MorphdatPeer::STRIKINGFEATURES, MorphdatPeer::BODYSHAPEI, MorphdatPeer::BODYSHAPEII, MorphdatPeer::FOREHEAD, MorphdatPeer::OPERCULUMPRESENT, MorphdatPeer::TYPEOFEYES, MorphdatPeer::TYPEOFMOUTH, MorphdatPeer::POSOFMOUTH, MorphdatPeer::MANDIBLETEETH, MorphdatPeer::MANDIBLETEETHT1, MorphdatPeer::MANDIBLETEETHT2, MorphdatPeer::MANDIBLEROWSMIN, MorphdatPeer::MANDIBLEROWSMAX, MorphdatPeer::MAXILLATEETH, MorphdatPeer::MAXILLATEETHT1, MorphdatPeer::MAXILLATEETHT2, MorphdatPeer::MAXILLAROWSMIN, MorphdatPeer::MAXILLAROWSMAX, MorphdatPeer::VOMERINETEETH, MorphdatPeer::VOMERINETEETHT1, MorphdatPeer::VOMERINETEETHT2, MorphdatPeer::VOMERINEROWSMIN, MorphdatPeer::VOMERINEROWSMAX, MorphdatPeer::PALATINE, MorphdatPeer::PALATINETEETHT1, MorphdatPeer::PALATINETEETHT2, MorphdatPeer::PALATINEROWSMIN, MorphdatPeer::PALATINEROWSMAX, MorphdatPeer::PHARYNGEALTEETH, MorphdatPeer::PHARYNGEALTEETHT1, MorphdatPeer::PHARYNGEALTEETHT2, MorphdatPeer::PHARYNGEALROWSMIN, MorphdatPeer::PHARYNGEALROWSMAX, MorphdatPeer::TEETHONTONGUE, MorphdatPeer::LIPSTEETH, MorphdatPeer::DERMALTEETH, MorphdatPeer::COMMENTONTEETH, MorphdatPeer::TYPEOFSCALES, MorphdatPeer::SCUTES, MorphdatPeer::KEELS, MorphdatPeer::HORSTRIPESTTI, MorphdatPeer::HORSTRIPESTTII, MorphdatPeer::VERSTRIPESTTI, MorphdatPeer::VERSTRIPESTTII, MorphdatPeer::VERSTRIPESTTIII, MorphdatPeer::DIASTRIPESTTI, MorphdatPeer::DIASTRIPESTTII, MorphdatPeer::DIASTRIPESTTIII, MorphdatPeer::CURSTRIPESTTI, MorphdatPeer::CURSTRIPESTTII, MorphdatPeer::CURSTRIPESTTIII, MorphdatPeer::SPOTSTTI, MorphdatPeer::SPOTSTTII, MorphdatPeer::SPOTSTTIII, MorphdatPeer::DORSALFINI, MorphdatPeer::DORSALFINII, MorphdatPeer::CAUDALFINI, MorphdatPeer::CAUDALFINII, MorphdatPeer::ANALFINI, MorphdatPeer::ANALFINII, MorphdatPeer::LATERALLINESNO, MorphdatPeer::LLINTERRUPTED, MorphdatPeer::SCALESLATERALMIN, MorphdatPeer::SCALESLATERALMAX, MorphdatPeer::POREDSCALESMIN, MorphdatPeer::POREDSCALESMAX, MorphdatPeer::LATSERIESMIN, MorphdatPeer::LATSERIESMAX, MorphdatPeer::SCALEROWSABOVEMIN, MorphdatPeer::SCALEROWSABOVEMAX, MorphdatPeer::SCALEROWSBELOWMIN, MorphdatPeer::SCALEROWSBELOWMAX, MorphdatPeer::SCALESPEDUNCMIN, MorphdatPeer::SCALESPEDUNCMAX, MorphdatPeer::BARBELSNO, MorphdatPeer::BARBELSTYPE, MorphdatPeer::GILLCLEFTSNO, MorphdatPeer::SPIRACLE, MorphdatPeer::GILLRAKERSLOWMIN, MorphdatPeer::GILLRAKERSLOWMAX, MorphdatPeer::GILLRAKERSUPMIN, MorphdatPeer::GILLRAKERSUPMAX, MorphdatPeer::GILLRAKERSTOTALMIN, MorphdatPeer::GILLRAKERSTOTALMAX, MorphdatPeer::VERTEBRAE, MorphdatPeer::VERTEBRAEPREANMIN, MorphdatPeer::VERTEBRAEPREANMAX, MorphdatPeer::VERTEBRAETOTALMIN, MorphdatPeer::VERTEBRAETOTALMAX, MorphdatPeer::DORSALATTRIBUTES, MorphdatPeer::DFINNO, MorphdatPeer::DORSALSPINESMIN, MorphdatPeer::DORSALSPINESMAX, MorphdatPeer::NOTCHED, MorphdatPeer::DORSALSOFTRAYSMIN, MorphdatPeer::DORSALSOFTRAYSMAX, MorphdatPeer::ADIFIN, MorphdatPeer::DFINLETSMIN, MorphdatPeer::DFINLETSMAX, MorphdatPeer::VFINLETSMIN, MorphdatPeer::VFINLETSMAX, MorphdatPeer::CSHAPE, MorphdatPeer::ATTRIBUTES, MorphdatPeer::AFINNO, MorphdatPeer::ANALFINSPINESMIN, MorphdatPeer::ANALFINSPINESMAX, MorphdatPeer::ARAYMIN, MorphdatPeer::ARAYMAX, MorphdatPeer::PECTORALATTRIBUTES, MorphdatPeer::PSPINES2, MorphdatPeer::PRAYMIN, MorphdatPeer::PRAYMAX, MorphdatPeer::PELVICSATTRIBUTES, MorphdatPeer::VPOSITION, MorphdatPeer::VPOSITION2, MorphdatPeer::VSPINES, MorphdatPeer::VRAYMIN, MorphdatPeer::VRAYMAX, MorphdatPeer::STANDARDLENGTHCM, MorphdatPeer::FORKLENGTH, MorphdatPeer::TOTALLENGTH, MorphdatPeer::HEADLENGTH, MorphdatPeer::PREDORSALLENGTH, MorphdatPeer::PREPELVICSLENGTH, MorphdatPeer::PREANALLENGTH, MorphdatPeer::POSTHEADDEPTH, MorphdatPeer::POSTTRUNKDEPTH, MorphdatPeer::MAXIMUMDEPTH, MorphdatPeer::PEDUNCLEDEPTH, MorphdatPeer::PEDUNCLELENGTH, MorphdatPeer::CAUDALHEIGHT, MorphdatPeer::PREORBITALLENGTH, MorphdatPeer::EYELENGTH, MorphdatPeer::ENTERED, MorphdatPeer::DATEENTERED, MorphdatPeer::MODIFIED, MorphdatPeer::DATEMODIFIED, MorphdatPeer::EXPERT, MorphdatPeer::DATECHECKED, MorphdatPeer::REMARKSEX, MorphdatPeer::ADDCHARS, MorphdatPeer::SIMILARSPECIES1, MorphdatPeer::SIMILARSPEC1REMARKS, MorphdatPeer::SIMILARSPECIES2, MorphdatPeer::SIMILARSPEC2REMARKS, MorphdatPeer::EASEOFID, MorphdatPeer::OTHERREF1, MorphdatPeer::OTHERREF2, MorphdatPeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'SPECCODE', 'STOCKCODE', 'MORPHDATREFNO', 'FEMALES', 'MALES', 'APPEARANCEPIC', 'SEXUALATTRIBUTES', 'SEXMORPHOLOGY', 'SEXCOLORS', 'STRIKINGFEATURES', 'BODYSHAPEI', 'BODYSHAPEII', 'FOREHEAD', 'OPERCULUMPRESENT', 'TYPEOFEYES', 'TYPEOFMOUTH', 'POSOFMOUTH', 'MANDIBLETEETH', 'MANDIBLETEETHT1', 'MANDIBLETEETHT2', 'MANDIBLEROWSMIN', 'MANDIBLEROWSMAX', 'MAXILLATEETH', 'MAXILLATEETHT1', 'MAXILLATEETHT2', 'MAXILLAROWSMIN', 'MAXILLAROWSMAX', 'VOMERINETEETH', 'VOMERINETEETHT1', 'VOMERINETEETHT2', 'VOMERINEROWSMIN', 'VOMERINEROWSMAX', 'PALATINE', 'PALATINETEETHT1', 'PALATINETEETHT2', 'PALATINEROWSMIN', 'PALATINEROWSMAX', 'PHARYNGEALTEETH', 'PHARYNGEALTEETHT1', 'PHARYNGEALTEETHT2', 'PHARYNGEALROWSMIN', 'PHARYNGEALROWSMAX', 'TEETHONTONGUE', 'LIPSTEETH', 'DERMALTEETH', 'COMMENTONTEETH', 'TYPEOFSCALES', 'SCUTES', 'KEELS', 'HORSTRIPESTTI', 'HORSTRIPESTTII', 'VERSTRIPESTTI', 'VERSTRIPESTTII', 'VERSTRIPESTTIII', 'DIASTRIPESTTI', 'DIASTRIPESTTII', 'DIASTRIPESTTIII', 'CURSTRIPESTTI', 'CURSTRIPESTTII', 'CURSTRIPESTTIII', 'SPOTSTTI', 'SPOTSTTII', 'SPOTSTTIII', 'DORSALFINI', 'DORSALFINII', 'CAUDALFINI', 'CAUDALFINII', 'ANALFINI', 'ANALFINII', 'LATERALLINESNO', 'LLINTERRUPTED', 'SCALESLATERALMIN', 'SCALESLATERALMAX', 'POREDSCALESMIN', 'POREDSCALESMAX', 'LATSERIESMIN', 'LATSERIESMAX', 'SCALEROWSABOVEMIN', 'SCALEROWSABOVEMAX', 'SCALEROWSBELOWMIN', 'SCALEROWSBELOWMAX', 'SCALESPEDUNCMIN', 'SCALESPEDUNCMAX', 'BARBELSNO', 'BARBELSTYPE', 'GILLCLEFTSNO', 'SPIRACLE', 'GILLRAKERSLOWMIN', 'GILLRAKERSLOWMAX', 'GILLRAKERSUPMIN', 'GILLRAKERSUPMAX', 'GILLRAKERSTOTALMIN', 'GILLRAKERSTOTALMAX', 'VERTEBRAE', 'VERTEBRAEPREANMIN', 'VERTEBRAEPREANMAX', 'VERTEBRAETOTALMIN', 'VERTEBRAETOTALMAX', 'DORSALATTRIBUTES', 'DFINNO', 'DORSALSPINESMIN', 'DORSALSPINESMAX', 'NOTCHED', 'DORSALSOFTRAYSMIN', 'DORSALSOFTRAYSMAX', 'ADIFIN', 'DFINLETSMIN', 'DFINLETSMAX', 'VFINLETSMIN', 'VFINLETSMAX', 'CSHAPE', 'ATTRIBUTES', 'AFINNO', 'ANALFINSPINESMIN', 'ANALFINSPINESMAX', 'ARAYMIN', 'ARAYMAX', 'PECTORALATTRIBUTES', 'PSPINES2', 'PRAYMIN', 'PRAYMAX', 'PELVICSATTRIBUTES', 'VPOSITION', 'VPOSITION2', 'VSPINES', 'VRAYMIN', 'VRAYMAX', 'STANDARDLENGTHCM', 'FORKLENGTH', 'TOTALLENGTH', 'HEADLENGTH', 'PREDORSALLENGTH', 'PREPELVICSLENGTH', 'PREANALLENGTH', 'POSTHEADDEPTH', 'POSTTRUNKDEPTH', 'MAXIMUMDEPTH', 'PEDUNCLEDEPTH', 'PEDUNCLELENGTH', 'CAUDALHEIGHT', 'PREORBITALLENGTH', 'EYELENGTH', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'REMARKSEX', 'ADDCHARS', 'SIMILARSPECIES1', 'SIMILARSPEC1REMARKS', 'SIMILARSPECIES2', 'SIMILARSPEC2REMARKS', 'EASEOFID', 'OTHERREF1', 'OTHERREF2', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'Speccode', 'StockCode', 'MorphDatRefNo', 'Females', 'Males', 'AppearancePic', 'SexualAttributes', 'SexMorphology', 'SexColors', 'StrikingFeatures', 'BodyShapeI', 'BodyShapeII', 'Forehead', 'OperculumPresent', 'TypeofEyes', 'TypeofMouth', 'PosofMouth', 'MandibleTeeth', 'MandibleTeethT1', 'MandibleTeethT2', 'MandibleRowsMin', 'MandibleRowsMax', 'MaxillaTeeth', 'MaxillaTeethT1', 'MaxillaTeethT2', 'MaxillaRowsMin', 'MaxillaRowsMax', 'VomerineTeeth', 'VomerineTeethT1', 'VomerineTeethT2', 'VomerineRowsMin', 'VomerineRowsMax', 'Palatine', 'PalatineTeethT1', 'PalatineTeethT2', 'PalatineRowsMin', 'PalatineRowsMax', 'PharyngealTeeth', 'PharyngealTeethT1', 'PharyngealTeethT2', 'PharyngealRowsMin', 'PharyngealRowsMax', 'TeethonTongue', 'Lipsteeth', 'DermalTeeth', 'CommentonTeeth', 'TypeofScales', 'Scutes', 'Keels', 'HorStripesTTI', 'HorStripesTTII', 'VerStripesTTI', 'VerStripesTTII', 'VerStripesTTIII', 'DiaStripesTTI', 'DiaStripesTTII', 'DiaStripesTTIII', 'CurStripesTTI', 'CurStripesTTII', 'CurStripesTTIII', 'SpotsTTI', 'SpotsTTII', 'SpotsTTIII', 'DorsalFinI', 'DorsalFinII', 'CaudalFinI', 'CaudalFinII', 'AnalFinI', 'AnalFinII', 'LateralLinesNo', 'LLinterrupted', 'ScalesLateralmin', 'ScalesLateralmax', 'PoredScalesMin', 'PoredScalesMax', 'LatSeriesMin', 'LatSeriesMax', 'ScaleRowsAboveMin', 'ScaleRowsAboveMax', 'ScaleRowsBelowMin', 'ScaleRowsBelowMax', 'ScalesPeduncMin', 'ScalesPeduncMax', 'BarbelsNo', 'BarbelsType', 'GillCleftsNo', 'Spiracle', 'GillRakersLowMin', 'GillRakersLowMax', 'GillRakersUpMin', 'GillRakersUpMax', 'GillRakersTotalMin', 'GillRakersTotalMax', 'Vertebrae', 'VertebraePreanMin', 'VertebraePreanMax', 'VertebraeTotalMin', 'VertebraeTotalMax', 'DorsalAttributes', 'Dfinno', 'DorsalSpinesMin', 'DorsalSpinesMax', 'Notched', 'DorsalSoftRaysMin', 'DorsalSoftRaysMax', 'Adifin', 'DFinletsmin', 'DFinletsmax', 'VFinletsmin', 'VFinletsmax', 'CShape', 'Attributes', 'Afinno', 'AnalFinSpinesMin', 'AnalFinSpinesMax', 'Araymin', 'Araymax', 'PectoralAttributes', 'Pspines2', 'Praymin', 'Praymax', 'PelvicsAttributes', 'VPosition', 'VPosition2', 'Vspines', 'Vraymin', 'Vraymax', 'StandardLengthCm', 'Forklength', 'Totallength', 'HeadLength', 'PreDorsalLength', 'PrePelvicsLength', 'PreAnalLength', 'PostHeadDepth', 'PostTrunkDepth', 'MaximumDepth', 'PeduncleDepth', 'PeduncleLength', 'CaudalHeight', 'PreorbitalLength', 'EyeLength', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'RemarkSex', 'AddChars', 'SimilarSpecies1', 'SimilarSpec1Remarks', 'SimilarSpecies2', 'SimilarSpec2Remarks', 'EaseofID', 'OtherRef1', 'OtherRef2', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. MorphdatPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Speccode' => 1, 'Stockcode' => 2, 'Morphdatrefno' => 3, 'Females' => 4, 'Males' => 5, 'Appearancepic' => 6, 'Sexualattributes' => 7, 'Sexmorphology' => 8, 'Sexcolors' => 9, 'Strikingfeatures' => 10, 'Bodyshapei' => 11, 'Bodyshapeii' => 12, 'Forehead' => 13, 'Operculumpresent' => 14, 'Typeofeyes' => 15, 'Typeofmouth' => 16, 'Posofmouth' => 17, 'Mandibleteeth' => 18, 'Mandibleteetht1' => 19, 'Mandibleteetht2' => 20, 'Mandiblerowsmin' => 21, 'Mandiblerowsmax' => 22, 'Maxillateeth' => 23, 'Maxillateetht1' => 24, 'Maxillateetht2' => 25, 'Maxillarowsmin' => 26, 'Maxillarowsmax' => 27, 'Vomerineteeth' => 28, 'Vomerineteetht1' => 29, 'Vomerineteetht2' => 30, 'Vomerinerowsmin' => 31, 'Vomerinerowsmax' => 32, 'Palatine' => 33, 'Palatineteetht1' => 34, 'Palatineteetht2' => 35, 'Palatinerowsmin' => 36, 'Palatinerowsmax' => 37, 'Pharyngealteeth' => 38, 'Pharyngealteetht1' => 39, 'Pharyngealteetht2' => 40, 'Pharyngealrowsmin' => 41, 'Pharyngealrowsmax' => 42, 'Teethontongue' => 43, 'Lipsteeth' => 44, 'Dermalteeth' => 45, 'Commentonteeth' => 46, 'Typeofscales' => 47, 'Scutes' => 48, 'Keels' => 49, 'Horstripestti' => 50, 'Horstripesttii' => 51, 'Verstripestti' => 52, 'Verstripesttii' => 53, 'Verstripesttiii' => 54, 'Diastripestti' => 55, 'Diastripesttii' => 56, 'Diastripesttiii' => 57, 'Curstripestti' => 58, 'Curstripesttii' => 59, 'Curstripesttiii' => 60, 'Spotstti' => 61, 'Spotsttii' => 62, 'Spotsttiii' => 63, 'Dorsalfini' => 64, 'Dorsalfinii' => 65, 'Caudalfini' => 66, 'Caudalfinii' => 67, 'Analfini' => 68, 'Analfinii' => 69, 'Laterallinesno' => 70, 'Llinterrupted' => 71, 'Scaleslateralmin' => 72, 'Scaleslateralmax' => 73, 'Poredscalesmin' => 74, 'Poredscalesmax' => 75, 'Latseriesmin' => 76, 'Latseriesmax' => 77, 'Scalerowsabovemin' => 78, 'Scalerowsabovemax' => 79, 'Scalerowsbelowmin' => 80, 'Scalerowsbelowmax' => 81, 'Scalespeduncmin' => 82, 'Scalespeduncmax' => 83, 'Barbelsno' => 84, 'Barbelstype' => 85, 'Gillcleftsno' => 86, 'Spiracle' => 87, 'Gillrakerslowmin' => 88, 'Gillrakerslowmax' => 89, 'Gillrakersupmin' => 90, 'Gillrakersupmax' => 91, 'Gillrakerstotalmin' => 92, 'Gillrakerstotalmax' => 93, 'Vertebrae' => 94, 'Vertebraepreanmin' => 95, 'Vertebraepreanmax' => 96, 'Vertebraetotalmin' => 97, 'Vertebraetotalmax' => 98, 'Dorsalattributes' => 99, 'Dfinno' => 100, 'Dorsalspinesmin' => 101, 'Dorsalspinesmax' => 102, 'Notched' => 103, 'Dorsalsoftraysmin' => 104, 'Dorsalsoftraysmax' => 105, 'Adifin' => 106, 'Dfinletsmin' => 107, 'Dfinletsmax' => 108, 'Vfinletsmin' => 109, 'Vfinletsmax' => 110, 'Cshape' => 111, 'Attributes' => 112, 'Afinno' => 113, 'Analfinspinesmin' => 114, 'Analfinspinesmax' => 115, 'Araymin' => 116, 'Araymax' => 117, 'Pectoralattributes' => 118, 'Pspines2' => 119, 'Praymin' => 120, 'Praymax' => 121, 'Pelvicsattributes' => 122, 'Vposition' => 123, 'Vposition2' => 124, 'Vspines' => 125, 'Vraymin' => 126, 'Vraymax' => 127, 'Standardlengthcm' => 128, 'Forklength' => 129, 'Totallength' => 130, 'Headlength' => 131, 'Predorsallength' => 132, 'Prepelvicslength' => 133, 'Preanallength' => 134, 'Postheaddepth' => 135, 'Posttrunkdepth' => 136, 'Maximumdepth' => 137, 'Peduncledepth' => 138, 'Pedunclelength' => 139, 'Caudalheight' => 140, 'Preorbitallength' => 141, 'Eyelength' => 142, 'Entered' => 143, 'Dateentered' => 144, 'Modified' => 145, 'Datemodified' => 146, 'Expert' => 147, 'Datechecked' => 148, 'Remarksex' => 149, 'Addchars' => 150, 'Similarspecies1' => 151, 'Similarspec1remarks' => 152, 'Similarspecies2' => 153, 'Similarspec2remarks' => 154, 'Easeofid' => 155, 'Otherref1' => 156, 'Otherref2' => 157, 'Ts' => 158, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'speccode' => 1, 'stockcode' => 2, 'morphdatrefno' => 3, 'females' => 4, 'males' => 5, 'appearancepic' => 6, 'sexualattributes' => 7, 'sexmorphology' => 8, 'sexcolors' => 9, 'strikingfeatures' => 10, 'bodyshapei' => 11, 'bodyshapeii' => 12, 'forehead' => 13, 'operculumpresent' => 14, 'typeofeyes' => 15, 'typeofmouth' => 16, 'posofmouth' => 17, 'mandibleteeth' => 18, 'mandibleteetht1' => 19, 'mandibleteetht2' => 20, 'mandiblerowsmin' => 21, 'mandiblerowsmax' => 22, 'maxillateeth' => 23, 'maxillateetht1' => 24, 'maxillateetht2' => 25, 'maxillarowsmin' => 26, 'maxillarowsmax' => 27, 'vomerineteeth' => 28, 'vomerineteetht1' => 29, 'vomerineteetht2' => 30, 'vomerinerowsmin' => 31, 'vomerinerowsmax' => 32, 'palatine' => 33, 'palatineteetht1' => 34, 'palatineteetht2' => 35, 'palatinerowsmin' => 36, 'palatinerowsmax' => 37, 'pharyngealteeth' => 38, 'pharyngealteetht1' => 39, 'pharyngealteetht2' => 40, 'pharyngealrowsmin' => 41, 'pharyngealrowsmax' => 42, 'teethontongue' => 43, 'lipsteeth' => 44, 'dermalteeth' => 45, 'commentonteeth' => 46, 'typeofscales' => 47, 'scutes' => 48, 'keels' => 49, 'horstripestti' => 50, 'horstripesttii' => 51, 'verstripestti' => 52, 'verstripesttii' => 53, 'verstripesttiii' => 54, 'diastripestti' => 55, 'diastripesttii' => 56, 'diastripesttiii' => 57, 'curstripestti' => 58, 'curstripesttii' => 59, 'curstripesttiii' => 60, 'spotstti' => 61, 'spotsttii' => 62, 'spotsttiii' => 63, 'dorsalfini' => 64, 'dorsalfinii' => 65, 'caudalfini' => 66, 'caudalfinii' => 67, 'analfini' => 68, 'analfinii' => 69, 'laterallinesno' => 70, 'llinterrupted' => 71, 'scaleslateralmin' => 72, 'scaleslateralmax' => 73, 'poredscalesmin' => 74, 'poredscalesmax' => 75, 'latseriesmin' => 76, 'latseriesmax' => 77, 'scalerowsabovemin' => 78, 'scalerowsabovemax' => 79, 'scalerowsbelowmin' => 80, 'scalerowsbelowmax' => 81, 'scalespeduncmin' => 82, 'scalespeduncmax' => 83, 'barbelsno' => 84, 'barbelstype' => 85, 'gillcleftsno' => 86, 'spiracle' => 87, 'gillrakerslowmin' => 88, 'gillrakerslowmax' => 89, 'gillrakersupmin' => 90, 'gillrakersupmax' => 91, 'gillrakerstotalmin' => 92, 'gillrakerstotalmax' => 93, 'vertebrae' => 94, 'vertebraepreanmin' => 95, 'vertebraepreanmax' => 96, 'vertebraetotalmin' => 97, 'vertebraetotalmax' => 98, 'dorsalattributes' => 99, 'dfinno' => 100, 'dorsalspinesmin' => 101, 'dorsalspinesmax' => 102, 'notched' => 103, 'dorsalsoftraysmin' => 104, 'dorsalsoftraysmax' => 105, 'adifin' => 106, 'dfinletsmin' => 107, 'dfinletsmax' => 108, 'vfinletsmin' => 109, 'vfinletsmax' => 110, 'cshape' => 111, 'attributes' => 112, 'afinno' => 113, 'analfinspinesmin' => 114, 'analfinspinesmax' => 115, 'araymin' => 116, 'araymax' => 117, 'pectoralattributes' => 118, 'pspines2' => 119, 'praymin' => 120, 'praymax' => 121, 'pelvicsattributes' => 122, 'vposition' => 123, 'vposition2' => 124, 'vspines' => 125, 'vraymin' => 126, 'vraymax' => 127, 'standardlengthcm' => 128, 'forklength' => 129, 'totallength' => 130, 'headlength' => 131, 'predorsallength' => 132, 'prepelvicslength' => 133, 'preanallength' => 134, 'postheaddepth' => 135, 'posttrunkdepth' => 136, 'maximumdepth' => 137, 'peduncledepth' => 138, 'pedunclelength' => 139, 'caudalheight' => 140, 'preorbitallength' => 141, 'eyelength' => 142, 'entered' => 143, 'dateentered' => 144, 'modified' => 145, 'datemodified' => 146, 'expert' => 147, 'datechecked' => 148, 'remarksex' => 149, 'addchars' => 150, 'similarspecies1' => 151, 'similarspec1remarks' => 152, 'similarspecies2' => 153, 'similarspec2remarks' => 154, 'easeofid' => 155, 'otherref1' => 156, 'otherref2' => 157, 'ts' => 158, ),
        BasePeer::TYPE_COLNAME => array (MorphdatPeer::AUTOCTR => 0, MorphdatPeer::SPECCODE => 1, MorphdatPeer::STOCKCODE => 2, MorphdatPeer::MORPHDATREFNO => 3, MorphdatPeer::FEMALES => 4, MorphdatPeer::MALES => 5, MorphdatPeer::APPEARANCEPIC => 6, MorphdatPeer::SEXUALATTRIBUTES => 7, MorphdatPeer::SEXMORPHOLOGY => 8, MorphdatPeer::SEXCOLORS => 9, MorphdatPeer::STRIKINGFEATURES => 10, MorphdatPeer::BODYSHAPEI => 11, MorphdatPeer::BODYSHAPEII => 12, MorphdatPeer::FOREHEAD => 13, MorphdatPeer::OPERCULUMPRESENT => 14, MorphdatPeer::TYPEOFEYES => 15, MorphdatPeer::TYPEOFMOUTH => 16, MorphdatPeer::POSOFMOUTH => 17, MorphdatPeer::MANDIBLETEETH => 18, MorphdatPeer::MANDIBLETEETHT1 => 19, MorphdatPeer::MANDIBLETEETHT2 => 20, MorphdatPeer::MANDIBLEROWSMIN => 21, MorphdatPeer::MANDIBLEROWSMAX => 22, MorphdatPeer::MAXILLATEETH => 23, MorphdatPeer::MAXILLATEETHT1 => 24, MorphdatPeer::MAXILLATEETHT2 => 25, MorphdatPeer::MAXILLAROWSMIN => 26, MorphdatPeer::MAXILLAROWSMAX => 27, MorphdatPeer::VOMERINETEETH => 28, MorphdatPeer::VOMERINETEETHT1 => 29, MorphdatPeer::VOMERINETEETHT2 => 30, MorphdatPeer::VOMERINEROWSMIN => 31, MorphdatPeer::VOMERINEROWSMAX => 32, MorphdatPeer::PALATINE => 33, MorphdatPeer::PALATINETEETHT1 => 34, MorphdatPeer::PALATINETEETHT2 => 35, MorphdatPeer::PALATINEROWSMIN => 36, MorphdatPeer::PALATINEROWSMAX => 37, MorphdatPeer::PHARYNGEALTEETH => 38, MorphdatPeer::PHARYNGEALTEETHT1 => 39, MorphdatPeer::PHARYNGEALTEETHT2 => 40, MorphdatPeer::PHARYNGEALROWSMIN => 41, MorphdatPeer::PHARYNGEALROWSMAX => 42, MorphdatPeer::TEETHONTONGUE => 43, MorphdatPeer::LIPSTEETH => 44, MorphdatPeer::DERMALTEETH => 45, MorphdatPeer::COMMENTONTEETH => 46, MorphdatPeer::TYPEOFSCALES => 47, MorphdatPeer::SCUTES => 48, MorphdatPeer::KEELS => 49, MorphdatPeer::HORSTRIPESTTI => 50, MorphdatPeer::HORSTRIPESTTII => 51, MorphdatPeer::VERSTRIPESTTI => 52, MorphdatPeer::VERSTRIPESTTII => 53, MorphdatPeer::VERSTRIPESTTIII => 54, MorphdatPeer::DIASTRIPESTTI => 55, MorphdatPeer::DIASTRIPESTTII => 56, MorphdatPeer::DIASTRIPESTTIII => 57, MorphdatPeer::CURSTRIPESTTI => 58, MorphdatPeer::CURSTRIPESTTII => 59, MorphdatPeer::CURSTRIPESTTIII => 60, MorphdatPeer::SPOTSTTI => 61, MorphdatPeer::SPOTSTTII => 62, MorphdatPeer::SPOTSTTIII => 63, MorphdatPeer::DORSALFINI => 64, MorphdatPeer::DORSALFINII => 65, MorphdatPeer::CAUDALFINI => 66, MorphdatPeer::CAUDALFINII => 67, MorphdatPeer::ANALFINI => 68, MorphdatPeer::ANALFINII => 69, MorphdatPeer::LATERALLINESNO => 70, MorphdatPeer::LLINTERRUPTED => 71, MorphdatPeer::SCALESLATERALMIN => 72, MorphdatPeer::SCALESLATERALMAX => 73, MorphdatPeer::POREDSCALESMIN => 74, MorphdatPeer::POREDSCALESMAX => 75, MorphdatPeer::LATSERIESMIN => 76, MorphdatPeer::LATSERIESMAX => 77, MorphdatPeer::SCALEROWSABOVEMIN => 78, MorphdatPeer::SCALEROWSABOVEMAX => 79, MorphdatPeer::SCALEROWSBELOWMIN => 80, MorphdatPeer::SCALEROWSBELOWMAX => 81, MorphdatPeer::SCALESPEDUNCMIN => 82, MorphdatPeer::SCALESPEDUNCMAX => 83, MorphdatPeer::BARBELSNO => 84, MorphdatPeer::BARBELSTYPE => 85, MorphdatPeer::GILLCLEFTSNO => 86, MorphdatPeer::SPIRACLE => 87, MorphdatPeer::GILLRAKERSLOWMIN => 88, MorphdatPeer::GILLRAKERSLOWMAX => 89, MorphdatPeer::GILLRAKERSUPMIN => 90, MorphdatPeer::GILLRAKERSUPMAX => 91, MorphdatPeer::GILLRAKERSTOTALMIN => 92, MorphdatPeer::GILLRAKERSTOTALMAX => 93, MorphdatPeer::VERTEBRAE => 94, MorphdatPeer::VERTEBRAEPREANMIN => 95, MorphdatPeer::VERTEBRAEPREANMAX => 96, MorphdatPeer::VERTEBRAETOTALMIN => 97, MorphdatPeer::VERTEBRAETOTALMAX => 98, MorphdatPeer::DORSALATTRIBUTES => 99, MorphdatPeer::DFINNO => 100, MorphdatPeer::DORSALSPINESMIN => 101, MorphdatPeer::DORSALSPINESMAX => 102, MorphdatPeer::NOTCHED => 103, MorphdatPeer::DORSALSOFTRAYSMIN => 104, MorphdatPeer::DORSALSOFTRAYSMAX => 105, MorphdatPeer::ADIFIN => 106, MorphdatPeer::DFINLETSMIN => 107, MorphdatPeer::DFINLETSMAX => 108, MorphdatPeer::VFINLETSMIN => 109, MorphdatPeer::VFINLETSMAX => 110, MorphdatPeer::CSHAPE => 111, MorphdatPeer::ATTRIBUTES => 112, MorphdatPeer::AFINNO => 113, MorphdatPeer::ANALFINSPINESMIN => 114, MorphdatPeer::ANALFINSPINESMAX => 115, MorphdatPeer::ARAYMIN => 116, MorphdatPeer::ARAYMAX => 117, MorphdatPeer::PECTORALATTRIBUTES => 118, MorphdatPeer::PSPINES2 => 119, MorphdatPeer::PRAYMIN => 120, MorphdatPeer::PRAYMAX => 121, MorphdatPeer::PELVICSATTRIBUTES => 122, MorphdatPeer::VPOSITION => 123, MorphdatPeer::VPOSITION2 => 124, MorphdatPeer::VSPINES => 125, MorphdatPeer::VRAYMIN => 126, MorphdatPeer::VRAYMAX => 127, MorphdatPeer::STANDARDLENGTHCM => 128, MorphdatPeer::FORKLENGTH => 129, MorphdatPeer::TOTALLENGTH => 130, MorphdatPeer::HEADLENGTH => 131, MorphdatPeer::PREDORSALLENGTH => 132, MorphdatPeer::PREPELVICSLENGTH => 133, MorphdatPeer::PREANALLENGTH => 134, MorphdatPeer::POSTHEADDEPTH => 135, MorphdatPeer::POSTTRUNKDEPTH => 136, MorphdatPeer::MAXIMUMDEPTH => 137, MorphdatPeer::PEDUNCLEDEPTH => 138, MorphdatPeer::PEDUNCLELENGTH => 139, MorphdatPeer::CAUDALHEIGHT => 140, MorphdatPeer::PREORBITALLENGTH => 141, MorphdatPeer::EYELENGTH => 142, MorphdatPeer::ENTERED => 143, MorphdatPeer::DATEENTERED => 144, MorphdatPeer::MODIFIED => 145, MorphdatPeer::DATEMODIFIED => 146, MorphdatPeer::EXPERT => 147, MorphdatPeer::DATECHECKED => 148, MorphdatPeer::REMARKSEX => 149, MorphdatPeer::ADDCHARS => 150, MorphdatPeer::SIMILARSPECIES1 => 151, MorphdatPeer::SIMILARSPEC1REMARKS => 152, MorphdatPeer::SIMILARSPECIES2 => 153, MorphdatPeer::SIMILARSPEC2REMARKS => 154, MorphdatPeer::EASEOFID => 155, MorphdatPeer::OTHERREF1 => 156, MorphdatPeer::OTHERREF2 => 157, MorphdatPeer::TS => 158, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'SPECCODE' => 1, 'STOCKCODE' => 2, 'MORPHDATREFNO' => 3, 'FEMALES' => 4, 'MALES' => 5, 'APPEARANCEPIC' => 6, 'SEXUALATTRIBUTES' => 7, 'SEXMORPHOLOGY' => 8, 'SEXCOLORS' => 9, 'STRIKINGFEATURES' => 10, 'BODYSHAPEI' => 11, 'BODYSHAPEII' => 12, 'FOREHEAD' => 13, 'OPERCULUMPRESENT' => 14, 'TYPEOFEYES' => 15, 'TYPEOFMOUTH' => 16, 'POSOFMOUTH' => 17, 'MANDIBLETEETH' => 18, 'MANDIBLETEETHT1' => 19, 'MANDIBLETEETHT2' => 20, 'MANDIBLEROWSMIN' => 21, 'MANDIBLEROWSMAX' => 22, 'MAXILLATEETH' => 23, 'MAXILLATEETHT1' => 24, 'MAXILLATEETHT2' => 25, 'MAXILLAROWSMIN' => 26, 'MAXILLAROWSMAX' => 27, 'VOMERINETEETH' => 28, 'VOMERINETEETHT1' => 29, 'VOMERINETEETHT2' => 30, 'VOMERINEROWSMIN' => 31, 'VOMERINEROWSMAX' => 32, 'PALATINE' => 33, 'PALATINETEETHT1' => 34, 'PALATINETEETHT2' => 35, 'PALATINEROWSMIN' => 36, 'PALATINEROWSMAX' => 37, 'PHARYNGEALTEETH' => 38, 'PHARYNGEALTEETHT1' => 39, 'PHARYNGEALTEETHT2' => 40, 'PHARYNGEALROWSMIN' => 41, 'PHARYNGEALROWSMAX' => 42, 'TEETHONTONGUE' => 43, 'LIPSTEETH' => 44, 'DERMALTEETH' => 45, 'COMMENTONTEETH' => 46, 'TYPEOFSCALES' => 47, 'SCUTES' => 48, 'KEELS' => 49, 'HORSTRIPESTTI' => 50, 'HORSTRIPESTTII' => 51, 'VERSTRIPESTTI' => 52, 'VERSTRIPESTTII' => 53, 'VERSTRIPESTTIII' => 54, 'DIASTRIPESTTI' => 55, 'DIASTRIPESTTII' => 56, 'DIASTRIPESTTIII' => 57, 'CURSTRIPESTTI' => 58, 'CURSTRIPESTTII' => 59, 'CURSTRIPESTTIII' => 60, 'SPOTSTTI' => 61, 'SPOTSTTII' => 62, 'SPOTSTTIII' => 63, 'DORSALFINI' => 64, 'DORSALFINII' => 65, 'CAUDALFINI' => 66, 'CAUDALFINII' => 67, 'ANALFINI' => 68, 'ANALFINII' => 69, 'LATERALLINESNO' => 70, 'LLINTERRUPTED' => 71, 'SCALESLATERALMIN' => 72, 'SCALESLATERALMAX' => 73, 'POREDSCALESMIN' => 74, 'POREDSCALESMAX' => 75, 'LATSERIESMIN' => 76, 'LATSERIESMAX' => 77, 'SCALEROWSABOVEMIN' => 78, 'SCALEROWSABOVEMAX' => 79, 'SCALEROWSBELOWMIN' => 80, 'SCALEROWSBELOWMAX' => 81, 'SCALESPEDUNCMIN' => 82, 'SCALESPEDUNCMAX' => 83, 'BARBELSNO' => 84, 'BARBELSTYPE' => 85, 'GILLCLEFTSNO' => 86, 'SPIRACLE' => 87, 'GILLRAKERSLOWMIN' => 88, 'GILLRAKERSLOWMAX' => 89, 'GILLRAKERSUPMIN' => 90, 'GILLRAKERSUPMAX' => 91, 'GILLRAKERSTOTALMIN' => 92, 'GILLRAKERSTOTALMAX' => 93, 'VERTEBRAE' => 94, 'VERTEBRAEPREANMIN' => 95, 'VERTEBRAEPREANMAX' => 96, 'VERTEBRAETOTALMIN' => 97, 'VERTEBRAETOTALMAX' => 98, 'DORSALATTRIBUTES' => 99, 'DFINNO' => 100, 'DORSALSPINESMIN' => 101, 'DORSALSPINESMAX' => 102, 'NOTCHED' => 103, 'DORSALSOFTRAYSMIN' => 104, 'DORSALSOFTRAYSMAX' => 105, 'ADIFIN' => 106, 'DFINLETSMIN' => 107, 'DFINLETSMAX' => 108, 'VFINLETSMIN' => 109, 'VFINLETSMAX' => 110, 'CSHAPE' => 111, 'ATTRIBUTES' => 112, 'AFINNO' => 113, 'ANALFINSPINESMIN' => 114, 'ANALFINSPINESMAX' => 115, 'ARAYMIN' => 116, 'ARAYMAX' => 117, 'PECTORALATTRIBUTES' => 118, 'PSPINES2' => 119, 'PRAYMIN' => 120, 'PRAYMAX' => 121, 'PELVICSATTRIBUTES' => 122, 'VPOSITION' => 123, 'VPOSITION2' => 124, 'VSPINES' => 125, 'VRAYMIN' => 126, 'VRAYMAX' => 127, 'STANDARDLENGTHCM' => 128, 'FORKLENGTH' => 129, 'TOTALLENGTH' => 130, 'HEADLENGTH' => 131, 'PREDORSALLENGTH' => 132, 'PREPELVICSLENGTH' => 133, 'PREANALLENGTH' => 134, 'POSTHEADDEPTH' => 135, 'POSTTRUNKDEPTH' => 136, 'MAXIMUMDEPTH' => 137, 'PEDUNCLEDEPTH' => 138, 'PEDUNCLELENGTH' => 139, 'CAUDALHEIGHT' => 140, 'PREORBITALLENGTH' => 141, 'EYELENGTH' => 142, 'ENTERED' => 143, 'DATEENTERED' => 144, 'MODIFIED' => 145, 'DATEMODIFIED' => 146, 'EXPERT' => 147, 'DATECHECKED' => 148, 'REMARKSEX' => 149, 'ADDCHARS' => 150, 'SIMILARSPECIES1' => 151, 'SIMILARSPEC1REMARKS' => 152, 'SIMILARSPECIES2' => 153, 'SIMILARSPEC2REMARKS' => 154, 'EASEOFID' => 155, 'OTHERREF1' => 156, 'OTHERREF2' => 157, 'TS' => 158, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'Speccode' => 1, 'StockCode' => 2, 'MorphDatRefNo' => 3, 'Females' => 4, 'Males' => 5, 'AppearancePic' => 6, 'SexualAttributes' => 7, 'SexMorphology' => 8, 'SexColors' => 9, 'StrikingFeatures' => 10, 'BodyShapeI' => 11, 'BodyShapeII' => 12, 'Forehead' => 13, 'OperculumPresent' => 14, 'TypeofEyes' => 15, 'TypeofMouth' => 16, 'PosofMouth' => 17, 'MandibleTeeth' => 18, 'MandibleTeethT1' => 19, 'MandibleTeethT2' => 20, 'MandibleRowsMin' => 21, 'MandibleRowsMax' => 22, 'MaxillaTeeth' => 23, 'MaxillaTeethT1' => 24, 'MaxillaTeethT2' => 25, 'MaxillaRowsMin' => 26, 'MaxillaRowsMax' => 27, 'VomerineTeeth' => 28, 'VomerineTeethT1' => 29, 'VomerineTeethT2' => 30, 'VomerineRowsMin' => 31, 'VomerineRowsMax' => 32, 'Palatine' => 33, 'PalatineTeethT1' => 34, 'PalatineTeethT2' => 35, 'PalatineRowsMin' => 36, 'PalatineRowsMax' => 37, 'PharyngealTeeth' => 38, 'PharyngealTeethT1' => 39, 'PharyngealTeethT2' => 40, 'PharyngealRowsMin' => 41, 'PharyngealRowsMax' => 42, 'TeethonTongue' => 43, 'Lipsteeth' => 44, 'DermalTeeth' => 45, 'CommentonTeeth' => 46, 'TypeofScales' => 47, 'Scutes' => 48, 'Keels' => 49, 'HorStripesTTI' => 50, 'HorStripesTTII' => 51, 'VerStripesTTI' => 52, 'VerStripesTTII' => 53, 'VerStripesTTIII' => 54, 'DiaStripesTTI' => 55, 'DiaStripesTTII' => 56, 'DiaStripesTTIII' => 57, 'CurStripesTTI' => 58, 'CurStripesTTII' => 59, 'CurStripesTTIII' => 60, 'SpotsTTI' => 61, 'SpotsTTII' => 62, 'SpotsTTIII' => 63, 'DorsalFinI' => 64, 'DorsalFinII' => 65, 'CaudalFinI' => 66, 'CaudalFinII' => 67, 'AnalFinI' => 68, 'AnalFinII' => 69, 'LateralLinesNo' => 70, 'LLinterrupted' => 71, 'ScalesLateralmin' => 72, 'ScalesLateralmax' => 73, 'PoredScalesMin' => 74, 'PoredScalesMax' => 75, 'LatSeriesMin' => 76, 'LatSeriesMax' => 77, 'ScaleRowsAboveMin' => 78, 'ScaleRowsAboveMax' => 79, 'ScaleRowsBelowMin' => 80, 'ScaleRowsBelowMax' => 81, 'ScalesPeduncMin' => 82, 'ScalesPeduncMax' => 83, 'BarbelsNo' => 84, 'BarbelsType' => 85, 'GillCleftsNo' => 86, 'Spiracle' => 87, 'GillRakersLowMin' => 88, 'GillRakersLowMax' => 89, 'GillRakersUpMin' => 90, 'GillRakersUpMax' => 91, 'GillRakersTotalMin' => 92, 'GillRakersTotalMax' => 93, 'Vertebrae' => 94, 'VertebraePreanMin' => 95, 'VertebraePreanMax' => 96, 'VertebraeTotalMin' => 97, 'VertebraeTotalMax' => 98, 'DorsalAttributes' => 99, 'Dfinno' => 100, 'DorsalSpinesMin' => 101, 'DorsalSpinesMax' => 102, 'Notched' => 103, 'DorsalSoftRaysMin' => 104, 'DorsalSoftRaysMax' => 105, 'Adifin' => 106, 'DFinletsmin' => 107, 'DFinletsmax' => 108, 'VFinletsmin' => 109, 'VFinletsmax' => 110, 'CShape' => 111, 'Attributes' => 112, 'Afinno' => 113, 'AnalFinSpinesMin' => 114, 'AnalFinSpinesMax' => 115, 'Araymin' => 116, 'Araymax' => 117, 'PectoralAttributes' => 118, 'Pspines2' => 119, 'Praymin' => 120, 'Praymax' => 121, 'PelvicsAttributes' => 122, 'VPosition' => 123, 'VPosition2' => 124, 'Vspines' => 125, 'Vraymin' => 126, 'Vraymax' => 127, 'StandardLengthCm' => 128, 'Forklength' => 129, 'Totallength' => 130, 'HeadLength' => 131, 'PreDorsalLength' => 132, 'PrePelvicsLength' => 133, 'PreAnalLength' => 134, 'PostHeadDepth' => 135, 'PostTrunkDepth' => 136, 'MaximumDepth' => 137, 'PeduncleDepth' => 138, 'PeduncleLength' => 139, 'CaudalHeight' => 140, 'PreorbitalLength' => 141, 'EyeLength' => 142, 'Entered' => 143, 'DateEntered' => 144, 'Modified' => 145, 'DateModified' => 146, 'Expert' => 147, 'DateChecked' => 148, 'RemarkSex' => 149, 'AddChars' => 150, 'SimilarSpecies1' => 151, 'SimilarSpec1Remarks' => 152, 'SimilarSpecies2' => 153, 'SimilarSpec2Remarks' => 154, 'EaseofID' => 155, 'OtherRef1' => 156, 'OtherRef2' => 157, 'TS' => 158, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, )
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
        $toNames = MorphdatPeer::getFieldNames($toType);
        $key = isset(MorphdatPeer::$fieldKeys[$fromType][$name]) ? MorphdatPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(MorphdatPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, MorphdatPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return MorphdatPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. MorphdatPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(MorphdatPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(MorphdatPeer::AUTOCTR);
            $criteria->addSelectColumn(MorphdatPeer::SPECCODE);
            $criteria->addSelectColumn(MorphdatPeer::STOCKCODE);
            $criteria->addSelectColumn(MorphdatPeer::MORPHDATREFNO);
            $criteria->addSelectColumn(MorphdatPeer::FEMALES);
            $criteria->addSelectColumn(MorphdatPeer::MALES);
            $criteria->addSelectColumn(MorphdatPeer::APPEARANCEPIC);
            $criteria->addSelectColumn(MorphdatPeer::SEXUALATTRIBUTES);
            $criteria->addSelectColumn(MorphdatPeer::SEXMORPHOLOGY);
            $criteria->addSelectColumn(MorphdatPeer::SEXCOLORS);
            $criteria->addSelectColumn(MorphdatPeer::STRIKINGFEATURES);
            $criteria->addSelectColumn(MorphdatPeer::BODYSHAPEI);
            $criteria->addSelectColumn(MorphdatPeer::BODYSHAPEII);
            $criteria->addSelectColumn(MorphdatPeer::FOREHEAD);
            $criteria->addSelectColumn(MorphdatPeer::OPERCULUMPRESENT);
            $criteria->addSelectColumn(MorphdatPeer::TYPEOFEYES);
            $criteria->addSelectColumn(MorphdatPeer::TYPEOFMOUTH);
            $criteria->addSelectColumn(MorphdatPeer::POSOFMOUTH);
            $criteria->addSelectColumn(MorphdatPeer::MANDIBLETEETH);
            $criteria->addSelectColumn(MorphdatPeer::MANDIBLETEETHT1);
            $criteria->addSelectColumn(MorphdatPeer::MANDIBLETEETHT2);
            $criteria->addSelectColumn(MorphdatPeer::MANDIBLEROWSMIN);
            $criteria->addSelectColumn(MorphdatPeer::MANDIBLEROWSMAX);
            $criteria->addSelectColumn(MorphdatPeer::MAXILLATEETH);
            $criteria->addSelectColumn(MorphdatPeer::MAXILLATEETHT1);
            $criteria->addSelectColumn(MorphdatPeer::MAXILLATEETHT2);
            $criteria->addSelectColumn(MorphdatPeer::MAXILLAROWSMIN);
            $criteria->addSelectColumn(MorphdatPeer::MAXILLAROWSMAX);
            $criteria->addSelectColumn(MorphdatPeer::VOMERINETEETH);
            $criteria->addSelectColumn(MorphdatPeer::VOMERINETEETHT1);
            $criteria->addSelectColumn(MorphdatPeer::VOMERINETEETHT2);
            $criteria->addSelectColumn(MorphdatPeer::VOMERINEROWSMIN);
            $criteria->addSelectColumn(MorphdatPeer::VOMERINEROWSMAX);
            $criteria->addSelectColumn(MorphdatPeer::PALATINE);
            $criteria->addSelectColumn(MorphdatPeer::PALATINETEETHT1);
            $criteria->addSelectColumn(MorphdatPeer::PALATINETEETHT2);
            $criteria->addSelectColumn(MorphdatPeer::PALATINEROWSMIN);
            $criteria->addSelectColumn(MorphdatPeer::PALATINEROWSMAX);
            $criteria->addSelectColumn(MorphdatPeer::PHARYNGEALTEETH);
            $criteria->addSelectColumn(MorphdatPeer::PHARYNGEALTEETHT1);
            $criteria->addSelectColumn(MorphdatPeer::PHARYNGEALTEETHT2);
            $criteria->addSelectColumn(MorphdatPeer::PHARYNGEALROWSMIN);
            $criteria->addSelectColumn(MorphdatPeer::PHARYNGEALROWSMAX);
            $criteria->addSelectColumn(MorphdatPeer::TEETHONTONGUE);
            $criteria->addSelectColumn(MorphdatPeer::LIPSTEETH);
            $criteria->addSelectColumn(MorphdatPeer::DERMALTEETH);
            $criteria->addSelectColumn(MorphdatPeer::COMMENTONTEETH);
            $criteria->addSelectColumn(MorphdatPeer::TYPEOFSCALES);
            $criteria->addSelectColumn(MorphdatPeer::SCUTES);
            $criteria->addSelectColumn(MorphdatPeer::KEELS);
            $criteria->addSelectColumn(MorphdatPeer::HORSTRIPESTTI);
            $criteria->addSelectColumn(MorphdatPeer::HORSTRIPESTTII);
            $criteria->addSelectColumn(MorphdatPeer::VERSTRIPESTTI);
            $criteria->addSelectColumn(MorphdatPeer::VERSTRIPESTTII);
            $criteria->addSelectColumn(MorphdatPeer::VERSTRIPESTTIII);
            $criteria->addSelectColumn(MorphdatPeer::DIASTRIPESTTI);
            $criteria->addSelectColumn(MorphdatPeer::DIASTRIPESTTII);
            $criteria->addSelectColumn(MorphdatPeer::DIASTRIPESTTIII);
            $criteria->addSelectColumn(MorphdatPeer::CURSTRIPESTTI);
            $criteria->addSelectColumn(MorphdatPeer::CURSTRIPESTTII);
            $criteria->addSelectColumn(MorphdatPeer::CURSTRIPESTTIII);
            $criteria->addSelectColumn(MorphdatPeer::SPOTSTTI);
            $criteria->addSelectColumn(MorphdatPeer::SPOTSTTII);
            $criteria->addSelectColumn(MorphdatPeer::SPOTSTTIII);
            $criteria->addSelectColumn(MorphdatPeer::DORSALFINI);
            $criteria->addSelectColumn(MorphdatPeer::DORSALFINII);
            $criteria->addSelectColumn(MorphdatPeer::CAUDALFINI);
            $criteria->addSelectColumn(MorphdatPeer::CAUDALFINII);
            $criteria->addSelectColumn(MorphdatPeer::ANALFINI);
            $criteria->addSelectColumn(MorphdatPeer::ANALFINII);
            $criteria->addSelectColumn(MorphdatPeer::LATERALLINESNO);
            $criteria->addSelectColumn(MorphdatPeer::LLINTERRUPTED);
            $criteria->addSelectColumn(MorphdatPeer::SCALESLATERALMIN);
            $criteria->addSelectColumn(MorphdatPeer::SCALESLATERALMAX);
            $criteria->addSelectColumn(MorphdatPeer::POREDSCALESMIN);
            $criteria->addSelectColumn(MorphdatPeer::POREDSCALESMAX);
            $criteria->addSelectColumn(MorphdatPeer::LATSERIESMIN);
            $criteria->addSelectColumn(MorphdatPeer::LATSERIESMAX);
            $criteria->addSelectColumn(MorphdatPeer::SCALEROWSABOVEMIN);
            $criteria->addSelectColumn(MorphdatPeer::SCALEROWSABOVEMAX);
            $criteria->addSelectColumn(MorphdatPeer::SCALEROWSBELOWMIN);
            $criteria->addSelectColumn(MorphdatPeer::SCALEROWSBELOWMAX);
            $criteria->addSelectColumn(MorphdatPeer::SCALESPEDUNCMIN);
            $criteria->addSelectColumn(MorphdatPeer::SCALESPEDUNCMAX);
            $criteria->addSelectColumn(MorphdatPeer::BARBELSNO);
            $criteria->addSelectColumn(MorphdatPeer::BARBELSTYPE);
            $criteria->addSelectColumn(MorphdatPeer::GILLCLEFTSNO);
            $criteria->addSelectColumn(MorphdatPeer::SPIRACLE);
            $criteria->addSelectColumn(MorphdatPeer::GILLRAKERSLOWMIN);
            $criteria->addSelectColumn(MorphdatPeer::GILLRAKERSLOWMAX);
            $criteria->addSelectColumn(MorphdatPeer::GILLRAKERSUPMIN);
            $criteria->addSelectColumn(MorphdatPeer::GILLRAKERSUPMAX);
            $criteria->addSelectColumn(MorphdatPeer::GILLRAKERSTOTALMIN);
            $criteria->addSelectColumn(MorphdatPeer::GILLRAKERSTOTALMAX);
            $criteria->addSelectColumn(MorphdatPeer::VERTEBRAE);
            $criteria->addSelectColumn(MorphdatPeer::VERTEBRAEPREANMIN);
            $criteria->addSelectColumn(MorphdatPeer::VERTEBRAEPREANMAX);
            $criteria->addSelectColumn(MorphdatPeer::VERTEBRAETOTALMIN);
            $criteria->addSelectColumn(MorphdatPeer::VERTEBRAETOTALMAX);
            $criteria->addSelectColumn(MorphdatPeer::DORSALATTRIBUTES);
            $criteria->addSelectColumn(MorphdatPeer::DFINNO);
            $criteria->addSelectColumn(MorphdatPeer::DORSALSPINESMIN);
            $criteria->addSelectColumn(MorphdatPeer::DORSALSPINESMAX);
            $criteria->addSelectColumn(MorphdatPeer::NOTCHED);
            $criteria->addSelectColumn(MorphdatPeer::DORSALSOFTRAYSMIN);
            $criteria->addSelectColumn(MorphdatPeer::DORSALSOFTRAYSMAX);
            $criteria->addSelectColumn(MorphdatPeer::ADIFIN);
            $criteria->addSelectColumn(MorphdatPeer::DFINLETSMIN);
            $criteria->addSelectColumn(MorphdatPeer::DFINLETSMAX);
            $criteria->addSelectColumn(MorphdatPeer::VFINLETSMIN);
            $criteria->addSelectColumn(MorphdatPeer::VFINLETSMAX);
            $criteria->addSelectColumn(MorphdatPeer::CSHAPE);
            $criteria->addSelectColumn(MorphdatPeer::ATTRIBUTES);
            $criteria->addSelectColumn(MorphdatPeer::AFINNO);
            $criteria->addSelectColumn(MorphdatPeer::ANALFINSPINESMIN);
            $criteria->addSelectColumn(MorphdatPeer::ANALFINSPINESMAX);
            $criteria->addSelectColumn(MorphdatPeer::ARAYMIN);
            $criteria->addSelectColumn(MorphdatPeer::ARAYMAX);
            $criteria->addSelectColumn(MorphdatPeer::PECTORALATTRIBUTES);
            $criteria->addSelectColumn(MorphdatPeer::PSPINES2);
            $criteria->addSelectColumn(MorphdatPeer::PRAYMIN);
            $criteria->addSelectColumn(MorphdatPeer::PRAYMAX);
            $criteria->addSelectColumn(MorphdatPeer::PELVICSATTRIBUTES);
            $criteria->addSelectColumn(MorphdatPeer::VPOSITION);
            $criteria->addSelectColumn(MorphdatPeer::VPOSITION2);
            $criteria->addSelectColumn(MorphdatPeer::VSPINES);
            $criteria->addSelectColumn(MorphdatPeer::VRAYMIN);
            $criteria->addSelectColumn(MorphdatPeer::VRAYMAX);
            $criteria->addSelectColumn(MorphdatPeer::STANDARDLENGTHCM);
            $criteria->addSelectColumn(MorphdatPeer::FORKLENGTH);
            $criteria->addSelectColumn(MorphdatPeer::TOTALLENGTH);
            $criteria->addSelectColumn(MorphdatPeer::HEADLENGTH);
            $criteria->addSelectColumn(MorphdatPeer::PREDORSALLENGTH);
            $criteria->addSelectColumn(MorphdatPeer::PREPELVICSLENGTH);
            $criteria->addSelectColumn(MorphdatPeer::PREANALLENGTH);
            $criteria->addSelectColumn(MorphdatPeer::POSTHEADDEPTH);
            $criteria->addSelectColumn(MorphdatPeer::POSTTRUNKDEPTH);
            $criteria->addSelectColumn(MorphdatPeer::MAXIMUMDEPTH);
            $criteria->addSelectColumn(MorphdatPeer::PEDUNCLEDEPTH);
            $criteria->addSelectColumn(MorphdatPeer::PEDUNCLELENGTH);
            $criteria->addSelectColumn(MorphdatPeer::CAUDALHEIGHT);
            $criteria->addSelectColumn(MorphdatPeer::PREORBITALLENGTH);
            $criteria->addSelectColumn(MorphdatPeer::EYELENGTH);
            $criteria->addSelectColumn(MorphdatPeer::ENTERED);
            $criteria->addSelectColumn(MorphdatPeer::DATEENTERED);
            $criteria->addSelectColumn(MorphdatPeer::MODIFIED);
            $criteria->addSelectColumn(MorphdatPeer::DATEMODIFIED);
            $criteria->addSelectColumn(MorphdatPeer::EXPERT);
            $criteria->addSelectColumn(MorphdatPeer::DATECHECKED);
            $criteria->addSelectColumn(MorphdatPeer::REMARKSEX);
            $criteria->addSelectColumn(MorphdatPeer::ADDCHARS);
            $criteria->addSelectColumn(MorphdatPeer::SIMILARSPECIES1);
            $criteria->addSelectColumn(MorphdatPeer::SIMILARSPEC1REMARKS);
            $criteria->addSelectColumn(MorphdatPeer::SIMILARSPECIES2);
            $criteria->addSelectColumn(MorphdatPeer::SIMILARSPEC2REMARKS);
            $criteria->addSelectColumn(MorphdatPeer::EASEOFID);
            $criteria->addSelectColumn(MorphdatPeer::OTHERREF1);
            $criteria->addSelectColumn(MorphdatPeer::OTHERREF2);
            $criteria->addSelectColumn(MorphdatPeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.Speccode');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.MorphDatRefNo');
            $criteria->addSelectColumn($alias . '.Females');
            $criteria->addSelectColumn($alias . '.Males');
            $criteria->addSelectColumn($alias . '.AppearancePic');
            $criteria->addSelectColumn($alias . '.SexualAttributes');
            $criteria->addSelectColumn($alias . '.SexMorphology');
            $criteria->addSelectColumn($alias . '.SexColors');
            $criteria->addSelectColumn($alias . '.StrikingFeatures');
            $criteria->addSelectColumn($alias . '.BodyShapeI');
            $criteria->addSelectColumn($alias . '.BodyShapeII');
            $criteria->addSelectColumn($alias . '.Forehead');
            $criteria->addSelectColumn($alias . '.OperculumPresent');
            $criteria->addSelectColumn($alias . '.TypeofEyes');
            $criteria->addSelectColumn($alias . '.TypeofMouth');
            $criteria->addSelectColumn($alias . '.PosofMouth');
            $criteria->addSelectColumn($alias . '.MandibleTeeth');
            $criteria->addSelectColumn($alias . '.MandibleTeethT1');
            $criteria->addSelectColumn($alias . '.MandibleTeethT2');
            $criteria->addSelectColumn($alias . '.MandibleRowsMin');
            $criteria->addSelectColumn($alias . '.MandibleRowsMax');
            $criteria->addSelectColumn($alias . '.MaxillaTeeth');
            $criteria->addSelectColumn($alias . '.MaxillaTeethT1');
            $criteria->addSelectColumn($alias . '.MaxillaTeethT2');
            $criteria->addSelectColumn($alias . '.MaxillaRowsMin');
            $criteria->addSelectColumn($alias . '.MaxillaRowsMax');
            $criteria->addSelectColumn($alias . '.VomerineTeeth');
            $criteria->addSelectColumn($alias . '.VomerineTeethT1');
            $criteria->addSelectColumn($alias . '.VomerineTeethT2');
            $criteria->addSelectColumn($alias . '.VomerineRowsMin');
            $criteria->addSelectColumn($alias . '.VomerineRowsMax');
            $criteria->addSelectColumn($alias . '.Palatine');
            $criteria->addSelectColumn($alias . '.PalatineTeethT1');
            $criteria->addSelectColumn($alias . '.PalatineTeethT2');
            $criteria->addSelectColumn($alias . '.PalatineRowsMin');
            $criteria->addSelectColumn($alias . '.PalatineRowsMax');
            $criteria->addSelectColumn($alias . '.PharyngealTeeth');
            $criteria->addSelectColumn($alias . '.PharyngealTeethT1');
            $criteria->addSelectColumn($alias . '.PharyngealTeethT2');
            $criteria->addSelectColumn($alias . '.PharyngealRowsMin');
            $criteria->addSelectColumn($alias . '.PharyngealRowsMax');
            $criteria->addSelectColumn($alias . '.TeethonTongue');
            $criteria->addSelectColumn($alias . '.Lipsteeth');
            $criteria->addSelectColumn($alias . '.DermalTeeth');
            $criteria->addSelectColumn($alias . '.CommentonTeeth');
            $criteria->addSelectColumn($alias . '.TypeofScales');
            $criteria->addSelectColumn($alias . '.Scutes');
            $criteria->addSelectColumn($alias . '.Keels');
            $criteria->addSelectColumn($alias . '.HorStripesTTI');
            $criteria->addSelectColumn($alias . '.HorStripesTTII');
            $criteria->addSelectColumn($alias . '.VerStripesTTI');
            $criteria->addSelectColumn($alias . '.VerStripesTTII');
            $criteria->addSelectColumn($alias . '.VerStripesTTIII');
            $criteria->addSelectColumn($alias . '.DiaStripesTTI');
            $criteria->addSelectColumn($alias . '.DiaStripesTTII');
            $criteria->addSelectColumn($alias . '.DiaStripesTTIII');
            $criteria->addSelectColumn($alias . '.CurStripesTTI');
            $criteria->addSelectColumn($alias . '.CurStripesTTII');
            $criteria->addSelectColumn($alias . '.CurStripesTTIII');
            $criteria->addSelectColumn($alias . '.SpotsTTI');
            $criteria->addSelectColumn($alias . '.SpotsTTII');
            $criteria->addSelectColumn($alias . '.SpotsTTIII');
            $criteria->addSelectColumn($alias . '.DorsalFinI');
            $criteria->addSelectColumn($alias . '.DorsalFinII');
            $criteria->addSelectColumn($alias . '.CaudalFinI');
            $criteria->addSelectColumn($alias . '.CaudalFinII');
            $criteria->addSelectColumn($alias . '.AnalFinI');
            $criteria->addSelectColumn($alias . '.AnalFinII');
            $criteria->addSelectColumn($alias . '.LateralLinesNo');
            $criteria->addSelectColumn($alias . '.LLinterrupted');
            $criteria->addSelectColumn($alias . '.ScalesLateralmin');
            $criteria->addSelectColumn($alias . '.ScalesLateralmax');
            $criteria->addSelectColumn($alias . '.PoredScalesMin');
            $criteria->addSelectColumn($alias . '.PoredScalesMax');
            $criteria->addSelectColumn($alias . '.LatSeriesMin');
            $criteria->addSelectColumn($alias . '.LatSeriesMax');
            $criteria->addSelectColumn($alias . '.ScaleRowsAboveMin');
            $criteria->addSelectColumn($alias . '.ScaleRowsAboveMax');
            $criteria->addSelectColumn($alias . '.ScaleRowsBelowMin');
            $criteria->addSelectColumn($alias . '.ScaleRowsBelowMax');
            $criteria->addSelectColumn($alias . '.ScalesPeduncMin');
            $criteria->addSelectColumn($alias . '.ScalesPeduncMax');
            $criteria->addSelectColumn($alias . '.BarbelsNo');
            $criteria->addSelectColumn($alias . '.BarbelsType');
            $criteria->addSelectColumn($alias . '.GillCleftsNo');
            $criteria->addSelectColumn($alias . '.Spiracle');
            $criteria->addSelectColumn($alias . '.GillRakersLowMin');
            $criteria->addSelectColumn($alias . '.GillRakersLowMax');
            $criteria->addSelectColumn($alias . '.GillRakersUpMin');
            $criteria->addSelectColumn($alias . '.GillRakersUpMax');
            $criteria->addSelectColumn($alias . '.GillRakersTotalMin');
            $criteria->addSelectColumn($alias . '.GillRakersTotalMax');
            $criteria->addSelectColumn($alias . '.Vertebrae');
            $criteria->addSelectColumn($alias . '.VertebraePreanMin');
            $criteria->addSelectColumn($alias . '.VertebraePreanMax');
            $criteria->addSelectColumn($alias . '.VertebraeTotalMin');
            $criteria->addSelectColumn($alias . '.VertebraeTotalMax');
            $criteria->addSelectColumn($alias . '.DorsalAttributes');
            $criteria->addSelectColumn($alias . '.Dfinno');
            $criteria->addSelectColumn($alias . '.DorsalSpinesMin');
            $criteria->addSelectColumn($alias . '.DorsalSpinesMax');
            $criteria->addSelectColumn($alias . '.Notched');
            $criteria->addSelectColumn($alias . '.DorsalSoftRaysMin');
            $criteria->addSelectColumn($alias . '.DorsalSoftRaysMax');
            $criteria->addSelectColumn($alias . '.Adifin');
            $criteria->addSelectColumn($alias . '.DFinletsmin');
            $criteria->addSelectColumn($alias . '.DFinletsmax');
            $criteria->addSelectColumn($alias . '.VFinletsmin');
            $criteria->addSelectColumn($alias . '.VFinletsmax');
            $criteria->addSelectColumn($alias . '.CShape');
            $criteria->addSelectColumn($alias . '.Attributes');
            $criteria->addSelectColumn($alias . '.Afinno');
            $criteria->addSelectColumn($alias . '.AnalFinSpinesMin');
            $criteria->addSelectColumn($alias . '.AnalFinSpinesMax');
            $criteria->addSelectColumn($alias . '.Araymin');
            $criteria->addSelectColumn($alias . '.Araymax');
            $criteria->addSelectColumn($alias . '.PectoralAttributes');
            $criteria->addSelectColumn($alias . '.Pspines2');
            $criteria->addSelectColumn($alias . '.Praymin');
            $criteria->addSelectColumn($alias . '.Praymax');
            $criteria->addSelectColumn($alias . '.PelvicsAttributes');
            $criteria->addSelectColumn($alias . '.VPosition');
            $criteria->addSelectColumn($alias . '.VPosition2');
            $criteria->addSelectColumn($alias . '.Vspines');
            $criteria->addSelectColumn($alias . '.Vraymin');
            $criteria->addSelectColumn($alias . '.Vraymax');
            $criteria->addSelectColumn($alias . '.StandardLengthCm');
            $criteria->addSelectColumn($alias . '.Forklength');
            $criteria->addSelectColumn($alias . '.Totallength');
            $criteria->addSelectColumn($alias . '.HeadLength');
            $criteria->addSelectColumn($alias . '.PreDorsalLength');
            $criteria->addSelectColumn($alias . '.PrePelvicsLength');
            $criteria->addSelectColumn($alias . '.PreAnalLength');
            $criteria->addSelectColumn($alias . '.PostHeadDepth');
            $criteria->addSelectColumn($alias . '.PostTrunkDepth');
            $criteria->addSelectColumn($alias . '.MaximumDepth');
            $criteria->addSelectColumn($alias . '.PeduncleDepth');
            $criteria->addSelectColumn($alias . '.PeduncleLength');
            $criteria->addSelectColumn($alias . '.CaudalHeight');
            $criteria->addSelectColumn($alias . '.PreorbitalLength');
            $criteria->addSelectColumn($alias . '.EyeLength');
            $criteria->addSelectColumn($alias . '.Entered');
            $criteria->addSelectColumn($alias . '.DateEntered');
            $criteria->addSelectColumn($alias . '.Modified');
            $criteria->addSelectColumn($alias . '.DateModified');
            $criteria->addSelectColumn($alias . '.Expert');
            $criteria->addSelectColumn($alias . '.DateChecked');
            $criteria->addSelectColumn($alias . '.RemarkSex');
            $criteria->addSelectColumn($alias . '.AddChars');
            $criteria->addSelectColumn($alias . '.SimilarSpecies1');
            $criteria->addSelectColumn($alias . '.SimilarSpec1Remarks');
            $criteria->addSelectColumn($alias . '.SimilarSpecies2');
            $criteria->addSelectColumn($alias . '.SimilarSpec2Remarks');
            $criteria->addSelectColumn($alias . '.EaseofID');
            $criteria->addSelectColumn($alias . '.OtherRef1');
            $criteria->addSelectColumn($alias . '.OtherRef2');
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
        $criteria->setPrimaryTableName(MorphdatPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MorphdatPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(MorphdatPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(MorphdatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Morphdat
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = MorphdatPeer::doSelect($critcopy, $con);
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
        return MorphdatPeer::populateObjects(MorphdatPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(MorphdatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            MorphdatPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(MorphdatPeer::DATABASE_NAME);

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
     * @param Morphdat $obj A Morphdat object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getStockcode();
            } // if key === null
            MorphdatPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Morphdat object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Morphdat) {
                $key = (string) $value->getStockcode();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Morphdat object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(MorphdatPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Morphdat Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(MorphdatPeer::$instances[$key])) {
                return MorphdatPeer::$instances[$key];
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
        foreach (MorphdatPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        MorphdatPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to morphdat
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
        $cls = MorphdatPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = MorphdatPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = MorphdatPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MorphdatPeer::addInstanceToPool($obj, $key);
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
     * @return array (Morphdat object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = MorphdatPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = MorphdatPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + MorphdatPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MorphdatPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            MorphdatPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(MorphdatPeer::DATABASE_NAME)->getTable(MorphdatPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseMorphdatPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseMorphdatPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \MorphdatTableMap());
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
        return MorphdatPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Morphdat or Criteria object.
     *
     * @param      mixed $values Criteria or Morphdat object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MorphdatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Morphdat object
        }


        // Set the correct dbName
        $criteria->setDbName(MorphdatPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Morphdat or Criteria object.
     *
     * @param      mixed $values Criteria or Morphdat object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MorphdatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(MorphdatPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(MorphdatPeer::STOCKCODE);
            $value = $criteria->remove(MorphdatPeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(MorphdatPeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MorphdatPeer::TABLE_NAME);
            }

        } else { // $values is Morphdat object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(MorphdatPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the morphdat table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MorphdatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(MorphdatPeer::TABLE_NAME, $con, MorphdatPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MorphdatPeer::clearInstancePool();
            MorphdatPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Morphdat or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Morphdat object or primary key or array of primary keys
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
            $con = Propel::getConnection(MorphdatPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            MorphdatPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Morphdat) { // it's a model object
            // invalidate the cache for this single object
            MorphdatPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MorphdatPeer::DATABASE_NAME);
            $criteria->add(MorphdatPeer::STOCKCODE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                MorphdatPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(MorphdatPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            MorphdatPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Morphdat object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Morphdat $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(MorphdatPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(MorphdatPeer::TABLE_NAME);

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

        return BasePeer::doValidate(MorphdatPeer::DATABASE_NAME, MorphdatPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Morphdat
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = MorphdatPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(MorphdatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(MorphdatPeer::DATABASE_NAME);
        $criteria->add(MorphdatPeer::STOCKCODE, $pk);

        $v = MorphdatPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Morphdat[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MorphdatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(MorphdatPeer::DATABASE_NAME);
            $criteria->add(MorphdatPeer::STOCKCODE, $pks, Criteria::IN);
            $objs = MorphdatPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseMorphdatPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMorphdatPeer::buildTableMap();

