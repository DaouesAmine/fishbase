<?php


/**
 * Base static class for performing query and update operations on the 'larvae' table.
 *
 *
 *
 * @package propel.generator.fbapp.om
 */
abstract class BaseLarvaePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'fbapp';

    /** the table name for this class */
    const TABLE_NAME = 'larvae';

    /** the related Propel class for this table */
    const OM_CLASS = 'Larvae';

    /** the related TableMap class for this table */
    const TM_CLASS = 'LarvaeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 214;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 214;

    /** the column name for the autoctr field */
    const AUTOCTR = 'larvae.autoctr';

    /** the column name for the StockCode field */
    const STOCKCODE = 'larvae.StockCode';

    /** the column name for the SpecCode field */
    const SPECCODE = 'larvae.SpecCode';

    /** the column name for the LarvaeRefNo field */
    const LARVAEREFNO = 'larvae.LarvaeRefNo';

    /** the column name for the OtherRef1 field */
    const OTHERREF1 = 'larvae.OtherRef1';

    /** the column name for the OtherRef2 field */
    const OTHERREF2 = 'larvae.OtherRef2';

    /** the column name for the LarvalArea field */
    const LARVALAREA = 'larvae.LarvalArea';

    /** the column name for the PlaceofDevelopment field */
    const PLACEOFDEVELOPMENT = 'larvae.PlaceofDevelopment';

    /** the column name for the LhMax field */
    const LHMAX = 'larvae.LhMax';

    /** the column name for the LBirthmaxRef field */
    const LBIRTHMAXREF = 'larvae.LBirthmaxRef';

    /** the column name for the LhMin field */
    const LHMIN = 'larvae.LhMin';

    /** the column name for the LBirthminRef field */
    const LBIRTHMINREF = 'larvae.LBirthminRef';

    /** the column name for the LhMid field */
    const LHMID = 'larvae.LhMid';

    /** the column name for the LBirthmodRef field */
    const LBIRTHMODREF = 'larvae.LBirthmodRef';

    /** the column name for the PreanalLengthMaxY field */
    const PREANALLENGTHMAXY = 'larvae.PreanalLengthMaxY';

    /** the column name for the PreAnmaxRef field */
    const PREANMAXREF = 'larvae.PreAnmaxRef';

    /** the column name for the PreanalLengthMinY field */
    const PREANALLENGTHMINY = 'larvae.PreanalLengthMinY';

    /** the column name for the PreAnminRef field */
    const PREANMINREF = 'larvae.PreAnminRef';

    /** the column name for the PreanalLengthModY field */
    const PREANALLENGTHMODY = 'larvae.PreanalLengthModY';

    /** the column name for the PreAnmodRef field */
    const PREANMODREF = 'larvae.PreAnmodRef';

    /** the column name for the FlexLengthMin field */
    const FLEXLENGTHMIN = 'larvae.FlexLengthMin';

    /** the column name for the FlexLengthMod field */
    const FLEXLENGTHMOD = 'larvae.FlexLengthMod';

    /** the column name for the FlexLengthMax field */
    const FLEXLENGTHMAX = 'larvae.FlexLengthMax';

    /** the column name for the FlexLengthType field */
    const FLEXLENGTHTYPE = 'larvae.FlexLengthType';

    /** the column name for the FlexLengthMinRef field */
    const FLEXLENGTHMINREF = 'larvae.FlexLengthMinRef';

    /** the column name for the FlexLengthModRef field */
    const FLEXLENGTHMODREF = 'larvae.FlexLengthModRef';

    /** the column name for the FlexLengthMaxRef field */
    const FLEXLENGTHMAXREF = 'larvae.FlexLengthMaxRef';

    /** the column name for the TransLengthMin field */
    const TRANSLENGTHMIN = 'larvae.TransLengthMin';

    /** the column name for the TransLengthMod field */
    const TRANSLENGTHMOD = 'larvae.TransLengthMod';

    /** the column name for the TransLengthMax field */
    const TRANSLENGTHMAX = 'larvae.TransLengthMax';

    /** the column name for the TransLengthType field */
    const TRANSLENGTHTYPE = 'larvae.TransLengthType';

    /** the column name for the TransLengthMinRef field */
    const TRANSLENGTHMINREF = 'larvae.TransLengthMinRef';

    /** the column name for the TransLengthModRef field */
    const TRANSLENGTHMODREF = 'larvae.TransLengthModRef';

    /** the column name for the TransLengthMaxRef field */
    const TRANSLENGTHMAXREF = 'larvae.TransLengthMaxRef';

    /** the column name for the LarvalDurationMin field */
    const LARVALDURATIONMIN = 'larvae.LarvalDurationMin';

    /** the column name for the LarvalDurationMinRef field */
    const LARVALDURATIONMINREF = 'larvae.LarvalDurationMinRef';

    /** the column name for the LarvalDurationMax field */
    const LARVALDURATIONMAX = 'larvae.LarvalDurationMax';

    /** the column name for the LarvalDurationMaxRef field */
    const LARVALDURATIONMAXREF = 'larvae.LarvalDurationMaxRef';

    /** the column name for the LarvalDurationMod field */
    const LARVALDURATIONMOD = 'larvae.LarvalDurationMod';

    /** the column name for the LarvalDurationModRef field */
    const LARVALDURATIONMODREF = 'larvae.LarvalDurationModRef';

    /** the column name for the Shapeofyolksac field */
    const SHAPEOFYOLKSAC = 'larvae.Shapeofyolksac';

    /** the column name for the YolksacPigm field */
    const YOLKSACPIGM = 'larvae.YolksacPigm';

    /** the column name for the YolksacSegm field */
    const YOLKSACSEGM = 'larvae.YolksacSegm';

    /** the column name for the YolkRef field */
    const YOLKREF = 'larvae.YolkRef';

    /** the column name for the OilGlobules field */
    const OILGLOBULES = 'larvae.OilGlobules';

    /** the column name for the OilGlobuleposH field */
    const OILGLOBULEPOSH = 'larvae.OilGlobuleposH';

    /** the column name for the OilGlobuleposV field */
    const OILGLOBULEPOSV = 'larvae.OilGlobuleposV';

    /** the column name for the OilGlobulePigm field */
    const OILGLOBULEPIGM = 'larvae.OilGlobulePigm';

    /** the column name for the RowsonTailY field */
    const ROWSONTAILY = 'larvae.RowsonTailY';

    /** the column name for the OtherMelOnTailY field */
    const OTHERMELONTAILY = 'larvae.OtherMelOnTailY';

    /** the column name for the MelonHeadTrunkY field */
    const MELONHEADTRUNKY = 'larvae.MelonHeadTrunkY';

    /** the column name for the LyaMax field */
    const LYAMAX = 'larvae.LyaMax';

    /** the column name for the L1FeedmaxRef field */
    const L1FEEDMAXREF = 'larvae.L1FeedmaxRef';

    /** the column name for the LyaMin field */
    const LYAMIN = 'larvae.LyaMin';

    /** the column name for the L1FeedminRef field */
    const L1FEEDMINREF = 'larvae.L1FeedminRef';

    /** the column name for the LyaMod field */
    const LYAMOD = 'larvae.LyaMod';

    /** the column name for the L1FeedmodRef field */
    const L1FEEDMODREF = 'larvae.L1FeedmodRef';

    /** the column name for the JanLarv field */
    const JANLARV = 'larvae.JanLarv';

    /** the column name for the FebLarv field */
    const FEBLARV = 'larvae.FebLarv';

    /** the column name for the MarLarv field */
    const MARLARV = 'larvae.MarLarv';

    /** the column name for the AprLarv field */
    const APRLARV = 'larvae.AprLarv';

    /** the column name for the MayLarv field */
    const MAYLARV = 'larvae.MayLarv';

    /** the column name for the JunLarv field */
    const JUNLARV = 'larvae.JunLarv';

    /** the column name for the JulLarv field */
    const JULLARV = 'larvae.JulLarv';

    /** the column name for the AugLarv field */
    const AUGLARV = 'larvae.AugLarv';

    /** the column name for the SepLarv field */
    const SEPLARV = 'larvae.SepLarv';

    /** the column name for the OctLarv field */
    const OCTLARV = 'larvae.OctLarv';

    /** the column name for the NovLarv field */
    const NOVLARV = 'larvae.NovLarv';

    /** the column name for the DecLarv field */
    const DECLARV = 'larvae.DecLarv';

    /** the column name for the PresenceRef field */
    const PRESENCEREF = 'larvae.PresenceRef';

    /** the column name for the WaterDepthMax field */
    const WATERDEPTHMAX = 'larvae.WaterDepthMax';

    /** the column name for the WaterTempMax field */
    const WATERTEMPMAX = 'larvae.WaterTempMax';

    /** the column name for the SalinityMax field */
    const SALINITYMAX = 'larvae.SalinityMax';

    /** the column name for the pH field */
    const PH = 'larvae.pH';

    /** the column name for the OxygenMax field */
    const OXYGENMAX = 'larvae.OxygenMax';

    /** the column name for the WatermaxRef field */
    const WATERMAXREF = 'larvae.WatermaxRef';

    /** the column name for the WaterDepthMin field */
    const WATERDEPTHMIN = 'larvae.WaterDepthMin';

    /** the column name for the WaterTempMin field */
    const WATERTEMPMIN = 'larvae.WaterTempMin';

    /** the column name for the SalinityMin field */
    const SALINITYMIN = 'larvae.SalinityMin';

    /** the column name for the pHMin field */
    const PHMIN = 'larvae.pHMin';

    /** the column name for the OxygenMin field */
    const OXYGENMIN = 'larvae.OxygenMin';

    /** the column name for the WaterminRef field */
    const WATERMINREF = 'larvae.WaterminRef';

    /** the column name for the WaterDepthMod field */
    const WATERDEPTHMOD = 'larvae.WaterDepthMod';

    /** the column name for the WaterTempMod field */
    const WATERTEMPMOD = 'larvae.WaterTempMod';

    /** the column name for the SalinityMod field */
    const SALINITYMOD = 'larvae.SalinityMod';

    /** the column name for the pHMod field */
    const PHMOD = 'larvae.pHMod';

    /** the column name for the OxygenMod field */
    const OXYGENMOD = 'larvae.OxygenMod';

    /** the column name for the WatermodRef field */
    const WATERMODREF = 'larvae.WatermodRef';

    /** the column name for the StrikingFeature field */
    const STRIKINGFEATURE = 'larvae.StrikingFeature';

    /** the column name for the LarvaPic field */
    const LARVAPIC = 'larvae.LarvaPic';

    /** the column name for the StrikingShapeLat field */
    const STRIKINGSHAPELAT = 'larvae.StrikingShapeLat';

    /** the column name for the StrikingShapeDors field */
    const STRIKINGSHAPEDORS = 'larvae.StrikingShapeDors';

    /** the column name for the BodyForm field */
    const BODYFORM = 'larvae.BodyForm';

    /** the column name for the ShapeofGut field */
    const SHAPEOFGUT = 'larvae.ShapeofGut';

    /** the column name for the GasBladderEarly field */
    const GASBLADDEREARLY = 'larvae.GasBladderEarly';

    /** the column name for the GasBladderLate field */
    const GASBLADDERLATE = 'larvae.GasBladderLate';

    /** the column name for the SpinalArmatureEarl field */
    const SPINALARMATUREEARL = 'larvae.SpinalArmatureEarl';

    /** the column name for the SpinalArmatureLate field */
    const SPINALARMATURELATE = 'larvae.SpinalArmatureLate';

    /** the column name for the RowsonTailE field */
    const ROWSONTAILE = 'larvae.RowsonTailE';

    /** the column name for the OtherMelonTailE field */
    const OTHERMELONTAILE = 'larvae.OtherMelonTailE';

    /** the column name for the MelonHeadTrunkE field */
    const MELONHEADTRUNKE = 'larvae.MelonHeadTrunkE';

    /** the column name for the RowsonTaill field */
    const ROWSONTAILL = 'larvae.RowsonTaill';

    /** the column name for the OtherMelonTaill field */
    const OTHERMELONTAILL = 'larvae.OtherMelonTaill';

    /** the column name for the MelonHeadTrunkl field */
    const MELONHEADTRUNKL = 'larvae.MelonHeadTrunkl';

    /** the column name for the UrostyleRegion field */
    const UROSTYLEREGION = 'larvae.UrostyleRegion';

    /** the column name for the UrostyleRegionLate field */
    const UROSTYLEREGIONLATE = 'larvae.UrostyleRegionLate';

    /** the column name for the Peritoneum field */
    const PERITONEUM = 'larvae.Peritoneum';

    /** the column name for the PectoralsI field */
    const PECTORALSI = 'larvae.PectoralsI';

    /** the column name for the PectoralsII field */
    const PECTORALSII = 'larvae.PectoralsII';

    /** the column name for the PelvicsI field */
    const PELVICSI = 'larvae.PelvicsI';

    /** the column name for the PelvicsII field */
    const PELVICSII = 'larvae.PelvicsII';

    /** the column name for the MyomeresMax field */
    const MYOMERESMAX = 'larvae.MyomeresMax';

    /** the column name for the MyomeresMin field */
    const MYOMERESMIN = 'larvae.MyomeresMin';

    /** the column name for the MyomeresMod field */
    const MYOMERESMOD = 'larvae.MyomeresMod';

    /** the column name for the MyomVert field */
    const MYOMVERT = 'larvae.MyomVert';

    /** the column name for the TotMyomRef field */
    const TOTMYOMREF = 'larvae.TotMyomRef';

    /** the column name for the MyomeresMaxPrean field */
    const MYOMERESMAXPREAN = 'larvae.MyomeresMaxPrean';

    /** the column name for the MyomeresMinPrean field */
    const MYOMERESMINPREAN = 'larvae.MyomeresMinPrean';

    /** the column name for the MyomeresModPrean field */
    const MYOMERESMODPREAN = 'larvae.MyomeresModPrean';

    /** the column name for the MyomVert2 field */
    const MYOMVERT2 = 'larvae.MyomVert2';

    /** the column name for the PreAnMyoRef field */
    const PREANMYOREF = 'larvae.PreAnMyoRef';

    /** the column name for the RLLatePre field */
    const RLLATEPRE = 'larvae.RLLatePre';

    /** the column name for the RLLateFlex field */
    const RLLATEFLEX = 'larvae.RLLateFlex';

    /** the column name for the RLLatePost field */
    const RLLATEPOST = 'larvae.RLLatePost';

    /** the column name for the RLEarlyPre field */
    const RLEARLYPRE = 'larvae.RLEarlyPre';

    /** the column name for the RLEarlyFlex field */
    const RLEARLYFLEX = 'larvae.RLEarlyFlex';

    /** the column name for the RLEarlyPost field */
    const RLEARLYPOST = 'larvae.RLEarlyPost';

    /** the column name for the RLFlexPre field */
    const RLFLEXPRE = 'larvae.RLFlexPre';

    /** the column name for the RLFlexFlex field */
    const RLFLEXFLEX = 'larvae.RLFlexFlex';

    /** the column name for the RLFlexPost field */
    const RLFLEXPOST = 'larvae.RLFlexPost';

    /** the column name for the MeasurementsPreRef field */
    const MEASUREMENTSPREREF = 'larvae.MeasurementsPreRef';

    /** the column name for the MeasurementsFlexRef field */
    const MEASUREMENTSFLEXREF = 'larvae.MeasurementsFlexRef';

    /** the column name for the MeasurementsPostRef field */
    const MEASUREMENTSPOSTREF = 'larvae.MeasurementsPostRef';

    /** the column name for the TypePre field */
    const TYPEPRE = 'larvae.TypePre';

    /** the column name for the TypeFlex field */
    const TYPEFLEX = 'larvae.TypeFlex';

    /** the column name for the TypePost field */
    const TYPEPOST = 'larvae.TypePost';

    /** the column name for the comment field */
    const COMMENT = 'larvae.comment';

    /** the column name for the PreanalLengthMaxPre field */
    const PREANALLENGTHMAXPRE = 'larvae.PreanalLengthMaxPre';

    /** the column name for the PreanalLengthMaxFlex field */
    const PREANALLENGTHMAXFLEX = 'larvae.PreanalLengthMaxFlex';

    /** the column name for the PreanalLengthMaxPost field */
    const PREANALLENGTHMAXPOST = 'larvae.PreanalLengthMaxPost';

    /** the column name for the PreanalLengthMinPre field */
    const PREANALLENGTHMINPRE = 'larvae.PreanalLengthMinPre';

    /** the column name for the PreanalLengthMinFlex field */
    const PREANALLENGTHMINFLEX = 'larvae.PreanalLengthMinFlex';

    /** the column name for the PreanalLengthMinPost field */
    const PREANALLENGTHMINPOST = 'larvae.PreanalLengthMinPost';

    /** the column name for the PreanalLengthLitPre field */
    const PREANALLENGTHLITPRE = 'larvae.PreanalLengthLitPre';

    /** the column name for the PreanalLengthLitFlex field */
    const PREANALLENGTHLITFLEX = 'larvae.PreanalLengthLitFlex';

    /** the column name for the PreanalLengthLitPost field */
    const PREANALLENGTHLITPOST = 'larvae.PreanalLengthLitPost';

    /** the column name for the PrepecLengthMaxPre field */
    const PREPECLENGTHMAXPRE = 'larvae.PrepecLengthMaxPre';

    /** the column name for the PrepecLengthMaxFlex field */
    const PREPECLENGTHMAXFLEX = 'larvae.PrepecLengthMaxFlex';

    /** the column name for the PrepecLengthMaxPost field */
    const PREPECLENGTHMAXPOST = 'larvae.PrepecLengthMaxPost';

    /** the column name for the PrepecLengthMinPre field */
    const PREPECLENGTHMINPRE = 'larvae.PrepecLengthMinPre';

    /** the column name for the PrepecLengthMinFlex field */
    const PREPECLENGTHMINFLEX = 'larvae.PrepecLengthMinFlex';

    /** the column name for the PrepecLengthMinPost field */
    const PREPECLENGTHMINPOST = 'larvae.PrepecLengthMinPost';

    /** the column name for the PrepecLengthLitPre field */
    const PREPECLENGTHLITPRE = 'larvae.PrepecLengthLitPre';

    /** the column name for the PrepecLengthLitFlex field */
    const PREPECLENGTHLITFLEX = 'larvae.PrepecLengthLitFlex';

    /** the column name for the PrepecLengthLitPost field */
    const PREPECLENGTHLITPOST = 'larvae.PrepecLengthLitPost';

    /** the column name for the PreorbitalMaxPre field */
    const PREORBITALMAXPRE = 'larvae.PreorbitalMaxPre';

    /** the column name for the PreorbitalMaxFlex field */
    const PREORBITALMAXFLEX = 'larvae.PreorbitalMaxFlex';

    /** the column name for the PreorbitalMaxPost field */
    const PREORBITALMAXPOST = 'larvae.PreorbitalMaxPost';

    /** the column name for the PreorbitalMinPre field */
    const PREORBITALMINPRE = 'larvae.PreorbitalMinPre';

    /** the column name for the PreorbitalMinFlex field */
    const PREORBITALMINFLEX = 'larvae.PreorbitalMinFlex';

    /** the column name for the PreorbitalMinPost field */
    const PREORBITALMINPOST = 'larvae.PreorbitalMinPost';

    /** the column name for the PreorbitalLitPre field */
    const PREORBITALLITPRE = 'larvae.PreorbitalLitPre';

    /** the column name for the PreorbitalLitFlex field */
    const PREORBITALLITFLEX = 'larvae.PreorbitalLitFlex';

    /** the column name for the PreorbitalLitPost field */
    const PREORBITALLITPOST = 'larvae.PreorbitalLitPost';

    /** the column name for the DiameterofEyeMaxPre field */
    const DIAMETEROFEYEMAXPRE = 'larvae.DiameterofEyeMaxPre';

    /** the column name for the DiameterofEyeMaxFlex field */
    const DIAMETEROFEYEMAXFLEX = 'larvae.DiameterofEyeMaxFlex';

    /** the column name for the DiameterofEyeMaxPost field */
    const DIAMETEROFEYEMAXPOST = 'larvae.DiameterofEyeMaxPost';

    /** the column name for the DiameterofEyeMinPre field */
    const DIAMETEROFEYEMINPRE = 'larvae.DiameterofEyeMinPre';

    /** the column name for the DiameterofEyeMinFlex field */
    const DIAMETEROFEYEMINFLEX = 'larvae.DiameterofEyeMinFlex';

    /** the column name for the DiameterofEyeMinPost field */
    const DIAMETEROFEYEMINPOST = 'larvae.DiameterofEyeMinPost';

    /** the column name for the DiameterofEyeLitPre field */
    const DIAMETEROFEYELITPRE = 'larvae.DiameterofEyeLitPre';

    /** the column name for the DiameterofEyeLitFlex field */
    const DIAMETEROFEYELITFLEX = 'larvae.DiameterofEyeLitFlex';

    /** the column name for the DiameterofEyeLitPost field */
    const DIAMETEROFEYELITPOST = 'larvae.DiameterofEyeLitPost';

    /** the column name for the DepthEyeMaxPre field */
    const DEPTHEYEMAXPRE = 'larvae.DepthEyeMaxPre';

    /** the column name for the DepthEyeMaxFlex field */
    const DEPTHEYEMAXFLEX = 'larvae.DepthEyeMaxFlex';

    /** the column name for the DepthEyeMaxPost field */
    const DEPTHEYEMAXPOST = 'larvae.DepthEyeMaxPost';

    /** the column name for the DepthEyeMinPre field */
    const DEPTHEYEMINPRE = 'larvae.DepthEyeMinPre';

    /** the column name for the DepthEyeMinFlex field */
    const DEPTHEYEMINFLEX = 'larvae.DepthEyeMinFlex';

    /** the column name for the DepthEyeMinPost field */
    const DEPTHEYEMINPOST = 'larvae.DepthEyeMinPost';

    /** the column name for the DepthEyeLitPre field */
    const DEPTHEYELITPRE = 'larvae.DepthEyeLitPre';

    /** the column name for the DepthEyeLitFlex field */
    const DEPTHEYELITFLEX = 'larvae.DepthEyeLitFlex';

    /** the column name for the DepthEyeLitPost field */
    const DEPTHEYELITPOST = 'larvae.DepthEyeLitPost';

    /** the column name for the DepthPectoralMaxPre field */
    const DEPTHPECTORALMAXPRE = 'larvae.DepthPectoralMaxPre';

    /** the column name for the DepthPectoralMaxFlex field */
    const DEPTHPECTORALMAXFLEX = 'larvae.DepthPectoralMaxFlex';

    /** the column name for the DepthPectoralMaxPost field */
    const DEPTHPECTORALMAXPOST = 'larvae.DepthPectoralMaxPost';

    /** the column name for the DepthPectoralMinPre field */
    const DEPTHPECTORALMINPRE = 'larvae.DepthPectoralMinPre';

    /** the column name for the DepthPectoralMinFlex field */
    const DEPTHPECTORALMINFLEX = 'larvae.DepthPectoralMinFlex';

    /** the column name for the DepthPectoralMinPost field */
    const DEPTHPECTORALMINPOST = 'larvae.DepthPectoralMinPost';

    /** the column name for the DepthPectoralLitPre field */
    const DEPTHPECTORALLITPRE = 'larvae.DepthPectoralLitPre';

    /** the column name for the DepthPectoralLitFlex field */
    const DEPTHPECTORALLITFLEX = 'larvae.DepthPectoralLitFlex';

    /** the column name for the DepthPectoralLitPost field */
    const DEPTHPECTORALLITPOST = 'larvae.DepthPectoralLitPost';

    /** the column name for the DepthAnusMaxPre field */
    const DEPTHANUSMAXPRE = 'larvae.DepthAnusMaxPre';

    /** the column name for the DepthAnusMaxFlex field */
    const DEPTHANUSMAXFLEX = 'larvae.DepthAnusMaxFlex';

    /** the column name for the DepthAnusMaxPost field */
    const DEPTHANUSMAXPOST = 'larvae.DepthAnusMaxPost';

    /** the column name for the DepthAnusMinPre field */
    const DEPTHANUSMINPRE = 'larvae.DepthAnusMinPre';

    /** the column name for the DepthAnusMinFlex field */
    const DEPTHANUSMINFLEX = 'larvae.DepthAnusMinFlex';

    /** the column name for the DepthAnusMinPost field */
    const DEPTHANUSMINPOST = 'larvae.DepthAnusMinPost';

    /** the column name for the DepthAnusLitPre field */
    const DEPTHANUSLITPRE = 'larvae.DepthAnusLitPre';

    /** the column name for the DepthAnusLitFlex field */
    const DEPTHANUSLITFLEX = 'larvae.DepthAnusLitFlex';

    /** the column name for the DepthAnusLitPost field */
    const DEPTHANUSLITPOST = 'larvae.DepthAnusLitPost';

    /** the column name for the AddCharYolks field */
    const ADDCHARYOLKS = 'larvae.AddCharYolks';

    /** the column name for the AddCharPosts field */
    const ADDCHARPOSTS = 'larvae.AddCharPosts';

    /** the column name for the EaseofID field */
    const EASEOFID = 'larvae.EaseofID';

    /** the column name for the SimilarSpecies1 field */
    const SIMILARSPECIES1 = 'larvae.SimilarSpecies1';

    /** the column name for the SimilarSpec1Remarks field */
    const SIMILARSPEC1REMARKS = 'larvae.SimilarSpec1Remarks';

    /** the column name for the SimilarSpecies2 field */
    const SIMILARSPECIES2 = 'larvae.SimilarSpecies2';

    /** the column name for the SimilarSpec2Remarks field */
    const SIMILARSPEC2REMARKS = 'larvae.SimilarSpec2Remarks';

    /** the column name for the Entered field */
    const ENTERED = 'larvae.Entered';

    /** the column name for the DateEntered field */
    const DATEENTERED = 'larvae.DateEntered';

    /** the column name for the Modified field */
    const MODIFIED = 'larvae.Modified';

    /** the column name for the DateModified field */
    const DATEMODIFIED = 'larvae.DateModified';

    /** the column name for the Expert field */
    const EXPERT = 'larvae.Expert';

    /** the column name for the DateChecked field */
    const DATECHECKED = 'larvae.DateChecked';

    /** the column name for the TS field */
    const TS = 'larvae.TS';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Larvae objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Larvae[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. LarvaePeer::$fieldNames[LarvaePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr', 'Stockcode', 'Speccode', 'Larvaerefno', 'Otherref1', 'Otherref2', 'Larvalarea', 'Placeofdevelopment', 'Lhmax', 'Lbirthmaxref', 'Lhmin', 'Lbirthminref', 'Lhmid', 'Lbirthmodref', 'Preanallengthmaxy', 'Preanmaxref', 'Preanallengthminy', 'Preanminref', 'Preanallengthmody', 'Preanmodref', 'Flexlengthmin', 'Flexlengthmod', 'Flexlengthmax', 'Flexlengthtype', 'Flexlengthminref', 'Flexlengthmodref', 'Flexlengthmaxref', 'Translengthmin', 'Translengthmod', 'Translengthmax', 'Translengthtype', 'Translengthminref', 'Translengthmodref', 'Translengthmaxref', 'Larvaldurationmin', 'Larvaldurationminref', 'Larvaldurationmax', 'Larvaldurationmaxref', 'Larvaldurationmod', 'Larvaldurationmodref', 'Shapeofyolksac', 'Yolksacpigm', 'Yolksacsegm', 'Yolkref', 'Oilglobules', 'Oilglobuleposh', 'Oilglobuleposv', 'Oilglobulepigm', 'Rowsontaily', 'Othermelontaily', 'Melonheadtrunky', 'Lyamax', 'L1feedmaxref', 'Lyamin', 'L1feedminref', 'Lyamod', 'L1feedmodref', 'Janlarv', 'Feblarv', 'Marlarv', 'Aprlarv', 'Maylarv', 'Junlarv', 'Jullarv', 'Auglarv', 'Seplarv', 'Octlarv', 'Novlarv', 'Declarv', 'Presenceref', 'Waterdepthmax', 'Watertempmax', 'Salinitymax', 'Ph', 'Oxygenmax', 'Watermaxref', 'Waterdepthmin', 'Watertempmin', 'Salinitymin', 'Phmin', 'Oxygenmin', 'Waterminref', 'Waterdepthmod', 'Watertempmod', 'Salinitymod', 'Phmod', 'Oxygenmod', 'Watermodref', 'Strikingfeature', 'Larvapic', 'Strikingshapelat', 'Strikingshapedors', 'Bodyform', 'Shapeofgut', 'Gasbladderearly', 'Gasbladderlate', 'Spinalarmatureearl', 'Spinalarmaturelate', 'Rowsontaile', 'Othermelontaile', 'Melonheadtrunke', 'Rowsontaill', 'Othermelontaill', 'Melonheadtrunkl', 'Urostyleregion', 'Urostyleregionlate', 'Peritoneum', 'Pectoralsi', 'Pectoralsii', 'Pelvicsi', 'Pelvicsii', 'Myomeresmax', 'Myomeresmin', 'Myomeresmod', 'Myomvert', 'Totmyomref', 'Myomeresmaxprean', 'Myomeresminprean', 'Myomeresmodprean', 'Myomvert2', 'Preanmyoref', 'Rllatepre', 'Rllateflex', 'Rllatepost', 'Rlearlypre', 'Rlearlyflex', 'Rlearlypost', 'Rlflexpre', 'Rlflexflex', 'Rlflexpost', 'Measurementspreref', 'Measurementsflexref', 'Measurementspostref', 'Typepre', 'Typeflex', 'Typepost', 'Comment', 'Preanallengthmaxpre', 'Preanallengthmaxflex', 'Preanallengthmaxpost', 'Preanallengthminpre', 'Preanallengthminflex', 'Preanallengthminpost', 'Preanallengthlitpre', 'Preanallengthlitflex', 'Preanallengthlitpost', 'Prepeclengthmaxpre', 'Prepeclengthmaxflex', 'Prepeclengthmaxpost', 'Prepeclengthminpre', 'Prepeclengthminflex', 'Prepeclengthminpost', 'Prepeclengthlitpre', 'Prepeclengthlitflex', 'Prepeclengthlitpost', 'Preorbitalmaxpre', 'Preorbitalmaxflex', 'Preorbitalmaxpost', 'Preorbitalminpre', 'Preorbitalminflex', 'Preorbitalminpost', 'Preorbitallitpre', 'Preorbitallitflex', 'Preorbitallitpost', 'Diameterofeyemaxpre', 'Diameterofeyemaxflex', 'Diameterofeyemaxpost', 'Diameterofeyeminpre', 'Diameterofeyeminflex', 'Diameterofeyeminpost', 'Diameterofeyelitpre', 'Diameterofeyelitflex', 'Diameterofeyelitpost', 'Deptheyemaxpre', 'Deptheyemaxflex', 'Deptheyemaxpost', 'Deptheyeminpre', 'Deptheyeminflex', 'Deptheyeminpost', 'Deptheyelitpre', 'Deptheyelitflex', 'Deptheyelitpost', 'Depthpectoralmaxpre', 'Depthpectoralmaxflex', 'Depthpectoralmaxpost', 'Depthpectoralminpre', 'Depthpectoralminflex', 'Depthpectoralminpost', 'Depthpectorallitpre', 'Depthpectorallitflex', 'Depthpectorallitpost', 'Depthanusmaxpre', 'Depthanusmaxflex', 'Depthanusmaxpost', 'Depthanusminpre', 'Depthanusminflex', 'Depthanusminpost', 'Depthanuslitpre', 'Depthanuslitflex', 'Depthanuslitpost', 'Addcharyolks', 'Addcharposts', 'Easeofid', 'Similarspecies1', 'Similarspec1remarks', 'Similarspecies2', 'Similarspec2remarks', 'Entered', 'Dateentered', 'Modified', 'Datemodified', 'Expert', 'Datechecked', 'Ts', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr', 'stockcode', 'speccode', 'larvaerefno', 'otherref1', 'otherref2', 'larvalarea', 'placeofdevelopment', 'lhmax', 'lbirthmaxref', 'lhmin', 'lbirthminref', 'lhmid', 'lbirthmodref', 'preanallengthmaxy', 'preanmaxref', 'preanallengthminy', 'preanminref', 'preanallengthmody', 'preanmodref', 'flexlengthmin', 'flexlengthmod', 'flexlengthmax', 'flexlengthtype', 'flexlengthminref', 'flexlengthmodref', 'flexlengthmaxref', 'translengthmin', 'translengthmod', 'translengthmax', 'translengthtype', 'translengthminref', 'translengthmodref', 'translengthmaxref', 'larvaldurationmin', 'larvaldurationminref', 'larvaldurationmax', 'larvaldurationmaxref', 'larvaldurationmod', 'larvaldurationmodref', 'shapeofyolksac', 'yolksacpigm', 'yolksacsegm', 'yolkref', 'oilglobules', 'oilglobuleposh', 'oilglobuleposv', 'oilglobulepigm', 'rowsontaily', 'othermelontaily', 'melonheadtrunky', 'lyamax', 'l1feedmaxref', 'lyamin', 'l1feedminref', 'lyamod', 'l1feedmodref', 'janlarv', 'feblarv', 'marlarv', 'aprlarv', 'maylarv', 'junlarv', 'jullarv', 'auglarv', 'seplarv', 'octlarv', 'novlarv', 'declarv', 'presenceref', 'waterdepthmax', 'watertempmax', 'salinitymax', 'ph', 'oxygenmax', 'watermaxref', 'waterdepthmin', 'watertempmin', 'salinitymin', 'phmin', 'oxygenmin', 'waterminref', 'waterdepthmod', 'watertempmod', 'salinitymod', 'phmod', 'oxygenmod', 'watermodref', 'strikingfeature', 'larvapic', 'strikingshapelat', 'strikingshapedors', 'bodyform', 'shapeofgut', 'gasbladderearly', 'gasbladderlate', 'spinalarmatureearl', 'spinalarmaturelate', 'rowsontaile', 'othermelontaile', 'melonheadtrunke', 'rowsontaill', 'othermelontaill', 'melonheadtrunkl', 'urostyleregion', 'urostyleregionlate', 'peritoneum', 'pectoralsi', 'pectoralsii', 'pelvicsi', 'pelvicsii', 'myomeresmax', 'myomeresmin', 'myomeresmod', 'myomvert', 'totmyomref', 'myomeresmaxprean', 'myomeresminprean', 'myomeresmodprean', 'myomvert2', 'preanmyoref', 'rllatepre', 'rllateflex', 'rllatepost', 'rlearlypre', 'rlearlyflex', 'rlearlypost', 'rlflexpre', 'rlflexflex', 'rlflexpost', 'measurementspreref', 'measurementsflexref', 'measurementspostref', 'typepre', 'typeflex', 'typepost', 'comment', 'preanallengthmaxpre', 'preanallengthmaxflex', 'preanallengthmaxpost', 'preanallengthminpre', 'preanallengthminflex', 'preanallengthminpost', 'preanallengthlitpre', 'preanallengthlitflex', 'preanallengthlitpost', 'prepeclengthmaxpre', 'prepeclengthmaxflex', 'prepeclengthmaxpost', 'prepeclengthminpre', 'prepeclengthminflex', 'prepeclengthminpost', 'prepeclengthlitpre', 'prepeclengthlitflex', 'prepeclengthlitpost', 'preorbitalmaxpre', 'preorbitalmaxflex', 'preorbitalmaxpost', 'preorbitalminpre', 'preorbitalminflex', 'preorbitalminpost', 'preorbitallitpre', 'preorbitallitflex', 'preorbitallitpost', 'diameterofeyemaxpre', 'diameterofeyemaxflex', 'diameterofeyemaxpost', 'diameterofeyeminpre', 'diameterofeyeminflex', 'diameterofeyeminpost', 'diameterofeyelitpre', 'diameterofeyelitflex', 'diameterofeyelitpost', 'deptheyemaxpre', 'deptheyemaxflex', 'deptheyemaxpost', 'deptheyeminpre', 'deptheyeminflex', 'deptheyeminpost', 'deptheyelitpre', 'deptheyelitflex', 'deptheyelitpost', 'depthpectoralmaxpre', 'depthpectoralmaxflex', 'depthpectoralmaxpost', 'depthpectoralminpre', 'depthpectoralminflex', 'depthpectoralminpost', 'depthpectorallitpre', 'depthpectorallitflex', 'depthpectorallitpost', 'depthanusmaxpre', 'depthanusmaxflex', 'depthanusmaxpost', 'depthanusminpre', 'depthanusminflex', 'depthanusminpost', 'depthanuslitpre', 'depthanuslitflex', 'depthanuslitpost', 'addcharyolks', 'addcharposts', 'easeofid', 'similarspecies1', 'similarspec1remarks', 'similarspecies2', 'similarspec2remarks', 'entered', 'dateentered', 'modified', 'datemodified', 'expert', 'datechecked', 'ts', ),
        BasePeer::TYPE_COLNAME => array (LarvaePeer::AUTOCTR, LarvaePeer::STOCKCODE, LarvaePeer::SPECCODE, LarvaePeer::LARVAEREFNO, LarvaePeer::OTHERREF1, LarvaePeer::OTHERREF2, LarvaePeer::LARVALAREA, LarvaePeer::PLACEOFDEVELOPMENT, LarvaePeer::LHMAX, LarvaePeer::LBIRTHMAXREF, LarvaePeer::LHMIN, LarvaePeer::LBIRTHMINREF, LarvaePeer::LHMID, LarvaePeer::LBIRTHMODREF, LarvaePeer::PREANALLENGTHMAXY, LarvaePeer::PREANMAXREF, LarvaePeer::PREANALLENGTHMINY, LarvaePeer::PREANMINREF, LarvaePeer::PREANALLENGTHMODY, LarvaePeer::PREANMODREF, LarvaePeer::FLEXLENGTHMIN, LarvaePeer::FLEXLENGTHMOD, LarvaePeer::FLEXLENGTHMAX, LarvaePeer::FLEXLENGTHTYPE, LarvaePeer::FLEXLENGTHMINREF, LarvaePeer::FLEXLENGTHMODREF, LarvaePeer::FLEXLENGTHMAXREF, LarvaePeer::TRANSLENGTHMIN, LarvaePeer::TRANSLENGTHMOD, LarvaePeer::TRANSLENGTHMAX, LarvaePeer::TRANSLENGTHTYPE, LarvaePeer::TRANSLENGTHMINREF, LarvaePeer::TRANSLENGTHMODREF, LarvaePeer::TRANSLENGTHMAXREF, LarvaePeer::LARVALDURATIONMIN, LarvaePeer::LARVALDURATIONMINREF, LarvaePeer::LARVALDURATIONMAX, LarvaePeer::LARVALDURATIONMAXREF, LarvaePeer::LARVALDURATIONMOD, LarvaePeer::LARVALDURATIONMODREF, LarvaePeer::SHAPEOFYOLKSAC, LarvaePeer::YOLKSACPIGM, LarvaePeer::YOLKSACSEGM, LarvaePeer::YOLKREF, LarvaePeer::OILGLOBULES, LarvaePeer::OILGLOBULEPOSH, LarvaePeer::OILGLOBULEPOSV, LarvaePeer::OILGLOBULEPIGM, LarvaePeer::ROWSONTAILY, LarvaePeer::OTHERMELONTAILY, LarvaePeer::MELONHEADTRUNKY, LarvaePeer::LYAMAX, LarvaePeer::L1FEEDMAXREF, LarvaePeer::LYAMIN, LarvaePeer::L1FEEDMINREF, LarvaePeer::LYAMOD, LarvaePeer::L1FEEDMODREF, LarvaePeer::JANLARV, LarvaePeer::FEBLARV, LarvaePeer::MARLARV, LarvaePeer::APRLARV, LarvaePeer::MAYLARV, LarvaePeer::JUNLARV, LarvaePeer::JULLARV, LarvaePeer::AUGLARV, LarvaePeer::SEPLARV, LarvaePeer::OCTLARV, LarvaePeer::NOVLARV, LarvaePeer::DECLARV, LarvaePeer::PRESENCEREF, LarvaePeer::WATERDEPTHMAX, LarvaePeer::WATERTEMPMAX, LarvaePeer::SALINITYMAX, LarvaePeer::PH, LarvaePeer::OXYGENMAX, LarvaePeer::WATERMAXREF, LarvaePeer::WATERDEPTHMIN, LarvaePeer::WATERTEMPMIN, LarvaePeer::SALINITYMIN, LarvaePeer::PHMIN, LarvaePeer::OXYGENMIN, LarvaePeer::WATERMINREF, LarvaePeer::WATERDEPTHMOD, LarvaePeer::WATERTEMPMOD, LarvaePeer::SALINITYMOD, LarvaePeer::PHMOD, LarvaePeer::OXYGENMOD, LarvaePeer::WATERMODREF, LarvaePeer::STRIKINGFEATURE, LarvaePeer::LARVAPIC, LarvaePeer::STRIKINGSHAPELAT, LarvaePeer::STRIKINGSHAPEDORS, LarvaePeer::BODYFORM, LarvaePeer::SHAPEOFGUT, LarvaePeer::GASBLADDEREARLY, LarvaePeer::GASBLADDERLATE, LarvaePeer::SPINALARMATUREEARL, LarvaePeer::SPINALARMATURELATE, LarvaePeer::ROWSONTAILE, LarvaePeer::OTHERMELONTAILE, LarvaePeer::MELONHEADTRUNKE, LarvaePeer::ROWSONTAILL, LarvaePeer::OTHERMELONTAILL, LarvaePeer::MELONHEADTRUNKL, LarvaePeer::UROSTYLEREGION, LarvaePeer::UROSTYLEREGIONLATE, LarvaePeer::PERITONEUM, LarvaePeer::PECTORALSI, LarvaePeer::PECTORALSII, LarvaePeer::PELVICSI, LarvaePeer::PELVICSII, LarvaePeer::MYOMERESMAX, LarvaePeer::MYOMERESMIN, LarvaePeer::MYOMERESMOD, LarvaePeer::MYOMVERT, LarvaePeer::TOTMYOMREF, LarvaePeer::MYOMERESMAXPREAN, LarvaePeer::MYOMERESMINPREAN, LarvaePeer::MYOMERESMODPREAN, LarvaePeer::MYOMVERT2, LarvaePeer::PREANMYOREF, LarvaePeer::RLLATEPRE, LarvaePeer::RLLATEFLEX, LarvaePeer::RLLATEPOST, LarvaePeer::RLEARLYPRE, LarvaePeer::RLEARLYFLEX, LarvaePeer::RLEARLYPOST, LarvaePeer::RLFLEXPRE, LarvaePeer::RLFLEXFLEX, LarvaePeer::RLFLEXPOST, LarvaePeer::MEASUREMENTSPREREF, LarvaePeer::MEASUREMENTSFLEXREF, LarvaePeer::MEASUREMENTSPOSTREF, LarvaePeer::TYPEPRE, LarvaePeer::TYPEFLEX, LarvaePeer::TYPEPOST, LarvaePeer::COMMENT, LarvaePeer::PREANALLENGTHMAXPRE, LarvaePeer::PREANALLENGTHMAXFLEX, LarvaePeer::PREANALLENGTHMAXPOST, LarvaePeer::PREANALLENGTHMINPRE, LarvaePeer::PREANALLENGTHMINFLEX, LarvaePeer::PREANALLENGTHMINPOST, LarvaePeer::PREANALLENGTHLITPRE, LarvaePeer::PREANALLENGTHLITFLEX, LarvaePeer::PREANALLENGTHLITPOST, LarvaePeer::PREPECLENGTHMAXPRE, LarvaePeer::PREPECLENGTHMAXFLEX, LarvaePeer::PREPECLENGTHMAXPOST, LarvaePeer::PREPECLENGTHMINPRE, LarvaePeer::PREPECLENGTHMINFLEX, LarvaePeer::PREPECLENGTHMINPOST, LarvaePeer::PREPECLENGTHLITPRE, LarvaePeer::PREPECLENGTHLITFLEX, LarvaePeer::PREPECLENGTHLITPOST, LarvaePeer::PREORBITALMAXPRE, LarvaePeer::PREORBITALMAXFLEX, LarvaePeer::PREORBITALMAXPOST, LarvaePeer::PREORBITALMINPRE, LarvaePeer::PREORBITALMINFLEX, LarvaePeer::PREORBITALMINPOST, LarvaePeer::PREORBITALLITPRE, LarvaePeer::PREORBITALLITFLEX, LarvaePeer::PREORBITALLITPOST, LarvaePeer::DIAMETEROFEYEMAXPRE, LarvaePeer::DIAMETEROFEYEMAXFLEX, LarvaePeer::DIAMETEROFEYEMAXPOST, LarvaePeer::DIAMETEROFEYEMINPRE, LarvaePeer::DIAMETEROFEYEMINFLEX, LarvaePeer::DIAMETEROFEYEMINPOST, LarvaePeer::DIAMETEROFEYELITPRE, LarvaePeer::DIAMETEROFEYELITFLEX, LarvaePeer::DIAMETEROFEYELITPOST, LarvaePeer::DEPTHEYEMAXPRE, LarvaePeer::DEPTHEYEMAXFLEX, LarvaePeer::DEPTHEYEMAXPOST, LarvaePeer::DEPTHEYEMINPRE, LarvaePeer::DEPTHEYEMINFLEX, LarvaePeer::DEPTHEYEMINPOST, LarvaePeer::DEPTHEYELITPRE, LarvaePeer::DEPTHEYELITFLEX, LarvaePeer::DEPTHEYELITPOST, LarvaePeer::DEPTHPECTORALMAXPRE, LarvaePeer::DEPTHPECTORALMAXFLEX, LarvaePeer::DEPTHPECTORALMAXPOST, LarvaePeer::DEPTHPECTORALMINPRE, LarvaePeer::DEPTHPECTORALMINFLEX, LarvaePeer::DEPTHPECTORALMINPOST, LarvaePeer::DEPTHPECTORALLITPRE, LarvaePeer::DEPTHPECTORALLITFLEX, LarvaePeer::DEPTHPECTORALLITPOST, LarvaePeer::DEPTHANUSMAXPRE, LarvaePeer::DEPTHANUSMAXFLEX, LarvaePeer::DEPTHANUSMAXPOST, LarvaePeer::DEPTHANUSMINPRE, LarvaePeer::DEPTHANUSMINFLEX, LarvaePeer::DEPTHANUSMINPOST, LarvaePeer::DEPTHANUSLITPRE, LarvaePeer::DEPTHANUSLITFLEX, LarvaePeer::DEPTHANUSLITPOST, LarvaePeer::ADDCHARYOLKS, LarvaePeer::ADDCHARPOSTS, LarvaePeer::EASEOFID, LarvaePeer::SIMILARSPECIES1, LarvaePeer::SIMILARSPEC1REMARKS, LarvaePeer::SIMILARSPECIES2, LarvaePeer::SIMILARSPEC2REMARKS, LarvaePeer::ENTERED, LarvaePeer::DATEENTERED, LarvaePeer::MODIFIED, LarvaePeer::DATEMODIFIED, LarvaePeer::EXPERT, LarvaePeer::DATECHECKED, LarvaePeer::TS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR', 'STOCKCODE', 'SPECCODE', 'LARVAEREFNO', 'OTHERREF1', 'OTHERREF2', 'LARVALAREA', 'PLACEOFDEVELOPMENT', 'LHMAX', 'LBIRTHMAXREF', 'LHMIN', 'LBIRTHMINREF', 'LHMID', 'LBIRTHMODREF', 'PREANALLENGTHMAXY', 'PREANMAXREF', 'PREANALLENGTHMINY', 'PREANMINREF', 'PREANALLENGTHMODY', 'PREANMODREF', 'FLEXLENGTHMIN', 'FLEXLENGTHMOD', 'FLEXLENGTHMAX', 'FLEXLENGTHTYPE', 'FLEXLENGTHMINREF', 'FLEXLENGTHMODREF', 'FLEXLENGTHMAXREF', 'TRANSLENGTHMIN', 'TRANSLENGTHMOD', 'TRANSLENGTHMAX', 'TRANSLENGTHTYPE', 'TRANSLENGTHMINREF', 'TRANSLENGTHMODREF', 'TRANSLENGTHMAXREF', 'LARVALDURATIONMIN', 'LARVALDURATIONMINREF', 'LARVALDURATIONMAX', 'LARVALDURATIONMAXREF', 'LARVALDURATIONMOD', 'LARVALDURATIONMODREF', 'SHAPEOFYOLKSAC', 'YOLKSACPIGM', 'YOLKSACSEGM', 'YOLKREF', 'OILGLOBULES', 'OILGLOBULEPOSH', 'OILGLOBULEPOSV', 'OILGLOBULEPIGM', 'ROWSONTAILY', 'OTHERMELONTAILY', 'MELONHEADTRUNKY', 'LYAMAX', 'L1FEEDMAXREF', 'LYAMIN', 'L1FEEDMINREF', 'LYAMOD', 'L1FEEDMODREF', 'JANLARV', 'FEBLARV', 'MARLARV', 'APRLARV', 'MAYLARV', 'JUNLARV', 'JULLARV', 'AUGLARV', 'SEPLARV', 'OCTLARV', 'NOVLARV', 'DECLARV', 'PRESENCEREF', 'WATERDEPTHMAX', 'WATERTEMPMAX', 'SALINITYMAX', 'PH', 'OXYGENMAX', 'WATERMAXREF', 'WATERDEPTHMIN', 'WATERTEMPMIN', 'SALINITYMIN', 'PHMIN', 'OXYGENMIN', 'WATERMINREF', 'WATERDEPTHMOD', 'WATERTEMPMOD', 'SALINITYMOD', 'PHMOD', 'OXYGENMOD', 'WATERMODREF', 'STRIKINGFEATURE', 'LARVAPIC', 'STRIKINGSHAPELAT', 'STRIKINGSHAPEDORS', 'BODYFORM', 'SHAPEOFGUT', 'GASBLADDEREARLY', 'GASBLADDERLATE', 'SPINALARMATUREEARL', 'SPINALARMATURELATE', 'ROWSONTAILE', 'OTHERMELONTAILE', 'MELONHEADTRUNKE', 'ROWSONTAILL', 'OTHERMELONTAILL', 'MELONHEADTRUNKL', 'UROSTYLEREGION', 'UROSTYLEREGIONLATE', 'PERITONEUM', 'PECTORALSI', 'PECTORALSII', 'PELVICSI', 'PELVICSII', 'MYOMERESMAX', 'MYOMERESMIN', 'MYOMERESMOD', 'MYOMVERT', 'TOTMYOMREF', 'MYOMERESMAXPREAN', 'MYOMERESMINPREAN', 'MYOMERESMODPREAN', 'MYOMVERT2', 'PREANMYOREF', 'RLLATEPRE', 'RLLATEFLEX', 'RLLATEPOST', 'RLEARLYPRE', 'RLEARLYFLEX', 'RLEARLYPOST', 'RLFLEXPRE', 'RLFLEXFLEX', 'RLFLEXPOST', 'MEASUREMENTSPREREF', 'MEASUREMENTSFLEXREF', 'MEASUREMENTSPOSTREF', 'TYPEPRE', 'TYPEFLEX', 'TYPEPOST', 'COMMENT', 'PREANALLENGTHMAXPRE', 'PREANALLENGTHMAXFLEX', 'PREANALLENGTHMAXPOST', 'PREANALLENGTHMINPRE', 'PREANALLENGTHMINFLEX', 'PREANALLENGTHMINPOST', 'PREANALLENGTHLITPRE', 'PREANALLENGTHLITFLEX', 'PREANALLENGTHLITPOST', 'PREPECLENGTHMAXPRE', 'PREPECLENGTHMAXFLEX', 'PREPECLENGTHMAXPOST', 'PREPECLENGTHMINPRE', 'PREPECLENGTHMINFLEX', 'PREPECLENGTHMINPOST', 'PREPECLENGTHLITPRE', 'PREPECLENGTHLITFLEX', 'PREPECLENGTHLITPOST', 'PREORBITALMAXPRE', 'PREORBITALMAXFLEX', 'PREORBITALMAXPOST', 'PREORBITALMINPRE', 'PREORBITALMINFLEX', 'PREORBITALMINPOST', 'PREORBITALLITPRE', 'PREORBITALLITFLEX', 'PREORBITALLITPOST', 'DIAMETEROFEYEMAXPRE', 'DIAMETEROFEYEMAXFLEX', 'DIAMETEROFEYEMAXPOST', 'DIAMETEROFEYEMINPRE', 'DIAMETEROFEYEMINFLEX', 'DIAMETEROFEYEMINPOST', 'DIAMETEROFEYELITPRE', 'DIAMETEROFEYELITFLEX', 'DIAMETEROFEYELITPOST', 'DEPTHEYEMAXPRE', 'DEPTHEYEMAXFLEX', 'DEPTHEYEMAXPOST', 'DEPTHEYEMINPRE', 'DEPTHEYEMINFLEX', 'DEPTHEYEMINPOST', 'DEPTHEYELITPRE', 'DEPTHEYELITFLEX', 'DEPTHEYELITPOST', 'DEPTHPECTORALMAXPRE', 'DEPTHPECTORALMAXFLEX', 'DEPTHPECTORALMAXPOST', 'DEPTHPECTORALMINPRE', 'DEPTHPECTORALMINFLEX', 'DEPTHPECTORALMINPOST', 'DEPTHPECTORALLITPRE', 'DEPTHPECTORALLITFLEX', 'DEPTHPECTORALLITPOST', 'DEPTHANUSMAXPRE', 'DEPTHANUSMAXFLEX', 'DEPTHANUSMAXPOST', 'DEPTHANUSMINPRE', 'DEPTHANUSMINFLEX', 'DEPTHANUSMINPOST', 'DEPTHANUSLITPRE', 'DEPTHANUSLITFLEX', 'DEPTHANUSLITPOST', 'ADDCHARYOLKS', 'ADDCHARPOSTS', 'EASEOFID', 'SIMILARSPECIES1', 'SIMILARSPEC1REMARKS', 'SIMILARSPECIES2', 'SIMILARSPEC2REMARKS', 'ENTERED', 'DATEENTERED', 'MODIFIED', 'DATEMODIFIED', 'EXPERT', 'DATECHECKED', 'TS', ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr', 'StockCode', 'SpecCode', 'LarvaeRefNo', 'OtherRef1', 'OtherRef2', 'LarvalArea', 'PlaceofDevelopment', 'LhMax', 'LBirthmaxRef', 'LhMin', 'LBirthminRef', 'LhMid', 'LBirthmodRef', 'PreanalLengthMaxY', 'PreAnmaxRef', 'PreanalLengthMinY', 'PreAnminRef', 'PreanalLengthModY', 'PreAnmodRef', 'FlexLengthMin', 'FlexLengthMod', 'FlexLengthMax', 'FlexLengthType', 'FlexLengthMinRef', 'FlexLengthModRef', 'FlexLengthMaxRef', 'TransLengthMin', 'TransLengthMod', 'TransLengthMax', 'TransLengthType', 'TransLengthMinRef', 'TransLengthModRef', 'TransLengthMaxRef', 'LarvalDurationMin', 'LarvalDurationMinRef', 'LarvalDurationMax', 'LarvalDurationMaxRef', 'LarvalDurationMod', 'LarvalDurationModRef', 'Shapeofyolksac', 'YolksacPigm', 'YolksacSegm', 'YolkRef', 'OilGlobules', 'OilGlobuleposH', 'OilGlobuleposV', 'OilGlobulePigm', 'RowsonTailY', 'OtherMelOnTailY', 'MelonHeadTrunkY', 'LyaMax', 'L1FeedmaxRef', 'LyaMin', 'L1FeedminRef', 'LyaMod', 'L1FeedmodRef', 'JanLarv', 'FebLarv', 'MarLarv', 'AprLarv', 'MayLarv', 'JunLarv', 'JulLarv', 'AugLarv', 'SepLarv', 'OctLarv', 'NovLarv', 'DecLarv', 'PresenceRef', 'WaterDepthMax', 'WaterTempMax', 'SalinityMax', 'pH', 'OxygenMax', 'WatermaxRef', 'WaterDepthMin', 'WaterTempMin', 'SalinityMin', 'pHMin', 'OxygenMin', 'WaterminRef', 'WaterDepthMod', 'WaterTempMod', 'SalinityMod', 'pHMod', 'OxygenMod', 'WatermodRef', 'StrikingFeature', 'LarvaPic', 'StrikingShapeLat', 'StrikingShapeDors', 'BodyForm', 'ShapeofGut', 'GasBladderEarly', 'GasBladderLate', 'SpinalArmatureEarl', 'SpinalArmatureLate', 'RowsonTailE', 'OtherMelonTailE', 'MelonHeadTrunkE', 'RowsonTaill', 'OtherMelonTaill', 'MelonHeadTrunkl', 'UrostyleRegion', 'UrostyleRegionLate', 'Peritoneum', 'PectoralsI', 'PectoralsII', 'PelvicsI', 'PelvicsII', 'MyomeresMax', 'MyomeresMin', 'MyomeresMod', 'MyomVert', 'TotMyomRef', 'MyomeresMaxPrean', 'MyomeresMinPrean', 'MyomeresModPrean', 'MyomVert2', 'PreAnMyoRef', 'RLLatePre', 'RLLateFlex', 'RLLatePost', 'RLEarlyPre', 'RLEarlyFlex', 'RLEarlyPost', 'RLFlexPre', 'RLFlexFlex', 'RLFlexPost', 'MeasurementsPreRef', 'MeasurementsFlexRef', 'MeasurementsPostRef', 'TypePre', 'TypeFlex', 'TypePost', 'comment', 'PreanalLengthMaxPre', 'PreanalLengthMaxFlex', 'PreanalLengthMaxPost', 'PreanalLengthMinPre', 'PreanalLengthMinFlex', 'PreanalLengthMinPost', 'PreanalLengthLitPre', 'PreanalLengthLitFlex', 'PreanalLengthLitPost', 'PrepecLengthMaxPre', 'PrepecLengthMaxFlex', 'PrepecLengthMaxPost', 'PrepecLengthMinPre', 'PrepecLengthMinFlex', 'PrepecLengthMinPost', 'PrepecLengthLitPre', 'PrepecLengthLitFlex', 'PrepecLengthLitPost', 'PreorbitalMaxPre', 'PreorbitalMaxFlex', 'PreorbitalMaxPost', 'PreorbitalMinPre', 'PreorbitalMinFlex', 'PreorbitalMinPost', 'PreorbitalLitPre', 'PreorbitalLitFlex', 'PreorbitalLitPost', 'DiameterofEyeMaxPre', 'DiameterofEyeMaxFlex', 'DiameterofEyeMaxPost', 'DiameterofEyeMinPre', 'DiameterofEyeMinFlex', 'DiameterofEyeMinPost', 'DiameterofEyeLitPre', 'DiameterofEyeLitFlex', 'DiameterofEyeLitPost', 'DepthEyeMaxPre', 'DepthEyeMaxFlex', 'DepthEyeMaxPost', 'DepthEyeMinPre', 'DepthEyeMinFlex', 'DepthEyeMinPost', 'DepthEyeLitPre', 'DepthEyeLitFlex', 'DepthEyeLitPost', 'DepthPectoralMaxPre', 'DepthPectoralMaxFlex', 'DepthPectoralMaxPost', 'DepthPectoralMinPre', 'DepthPectoralMinFlex', 'DepthPectoralMinPost', 'DepthPectoralLitPre', 'DepthPectoralLitFlex', 'DepthPectoralLitPost', 'DepthAnusMaxPre', 'DepthAnusMaxFlex', 'DepthAnusMaxPost', 'DepthAnusMinPre', 'DepthAnusMinFlex', 'DepthAnusMinPost', 'DepthAnusLitPre', 'DepthAnusLitFlex', 'DepthAnusLitPost', 'AddCharYolks', 'AddCharPosts', 'EaseofID', 'SimilarSpecies1', 'SimilarSpec1Remarks', 'SimilarSpecies2', 'SimilarSpec2Remarks', 'Entered', 'DateEntered', 'Modified', 'DateModified', 'Expert', 'DateChecked', 'TS', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. LarvaePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Autoctr' => 0, 'Stockcode' => 1, 'Speccode' => 2, 'Larvaerefno' => 3, 'Otherref1' => 4, 'Otherref2' => 5, 'Larvalarea' => 6, 'Placeofdevelopment' => 7, 'Lhmax' => 8, 'Lbirthmaxref' => 9, 'Lhmin' => 10, 'Lbirthminref' => 11, 'Lhmid' => 12, 'Lbirthmodref' => 13, 'Preanallengthmaxy' => 14, 'Preanmaxref' => 15, 'Preanallengthminy' => 16, 'Preanminref' => 17, 'Preanallengthmody' => 18, 'Preanmodref' => 19, 'Flexlengthmin' => 20, 'Flexlengthmod' => 21, 'Flexlengthmax' => 22, 'Flexlengthtype' => 23, 'Flexlengthminref' => 24, 'Flexlengthmodref' => 25, 'Flexlengthmaxref' => 26, 'Translengthmin' => 27, 'Translengthmod' => 28, 'Translengthmax' => 29, 'Translengthtype' => 30, 'Translengthminref' => 31, 'Translengthmodref' => 32, 'Translengthmaxref' => 33, 'Larvaldurationmin' => 34, 'Larvaldurationminref' => 35, 'Larvaldurationmax' => 36, 'Larvaldurationmaxref' => 37, 'Larvaldurationmod' => 38, 'Larvaldurationmodref' => 39, 'Shapeofyolksac' => 40, 'Yolksacpigm' => 41, 'Yolksacsegm' => 42, 'Yolkref' => 43, 'Oilglobules' => 44, 'Oilglobuleposh' => 45, 'Oilglobuleposv' => 46, 'Oilglobulepigm' => 47, 'Rowsontaily' => 48, 'Othermelontaily' => 49, 'Melonheadtrunky' => 50, 'Lyamax' => 51, 'L1feedmaxref' => 52, 'Lyamin' => 53, 'L1feedminref' => 54, 'Lyamod' => 55, 'L1feedmodref' => 56, 'Janlarv' => 57, 'Feblarv' => 58, 'Marlarv' => 59, 'Aprlarv' => 60, 'Maylarv' => 61, 'Junlarv' => 62, 'Jullarv' => 63, 'Auglarv' => 64, 'Seplarv' => 65, 'Octlarv' => 66, 'Novlarv' => 67, 'Declarv' => 68, 'Presenceref' => 69, 'Waterdepthmax' => 70, 'Watertempmax' => 71, 'Salinitymax' => 72, 'Ph' => 73, 'Oxygenmax' => 74, 'Watermaxref' => 75, 'Waterdepthmin' => 76, 'Watertempmin' => 77, 'Salinitymin' => 78, 'Phmin' => 79, 'Oxygenmin' => 80, 'Waterminref' => 81, 'Waterdepthmod' => 82, 'Watertempmod' => 83, 'Salinitymod' => 84, 'Phmod' => 85, 'Oxygenmod' => 86, 'Watermodref' => 87, 'Strikingfeature' => 88, 'Larvapic' => 89, 'Strikingshapelat' => 90, 'Strikingshapedors' => 91, 'Bodyform' => 92, 'Shapeofgut' => 93, 'Gasbladderearly' => 94, 'Gasbladderlate' => 95, 'Spinalarmatureearl' => 96, 'Spinalarmaturelate' => 97, 'Rowsontaile' => 98, 'Othermelontaile' => 99, 'Melonheadtrunke' => 100, 'Rowsontaill' => 101, 'Othermelontaill' => 102, 'Melonheadtrunkl' => 103, 'Urostyleregion' => 104, 'Urostyleregionlate' => 105, 'Peritoneum' => 106, 'Pectoralsi' => 107, 'Pectoralsii' => 108, 'Pelvicsi' => 109, 'Pelvicsii' => 110, 'Myomeresmax' => 111, 'Myomeresmin' => 112, 'Myomeresmod' => 113, 'Myomvert' => 114, 'Totmyomref' => 115, 'Myomeresmaxprean' => 116, 'Myomeresminprean' => 117, 'Myomeresmodprean' => 118, 'Myomvert2' => 119, 'Preanmyoref' => 120, 'Rllatepre' => 121, 'Rllateflex' => 122, 'Rllatepost' => 123, 'Rlearlypre' => 124, 'Rlearlyflex' => 125, 'Rlearlypost' => 126, 'Rlflexpre' => 127, 'Rlflexflex' => 128, 'Rlflexpost' => 129, 'Measurementspreref' => 130, 'Measurementsflexref' => 131, 'Measurementspostref' => 132, 'Typepre' => 133, 'Typeflex' => 134, 'Typepost' => 135, 'Comment' => 136, 'Preanallengthmaxpre' => 137, 'Preanallengthmaxflex' => 138, 'Preanallengthmaxpost' => 139, 'Preanallengthminpre' => 140, 'Preanallengthminflex' => 141, 'Preanallengthminpost' => 142, 'Preanallengthlitpre' => 143, 'Preanallengthlitflex' => 144, 'Preanallengthlitpost' => 145, 'Prepeclengthmaxpre' => 146, 'Prepeclengthmaxflex' => 147, 'Prepeclengthmaxpost' => 148, 'Prepeclengthminpre' => 149, 'Prepeclengthminflex' => 150, 'Prepeclengthminpost' => 151, 'Prepeclengthlitpre' => 152, 'Prepeclengthlitflex' => 153, 'Prepeclengthlitpost' => 154, 'Preorbitalmaxpre' => 155, 'Preorbitalmaxflex' => 156, 'Preorbitalmaxpost' => 157, 'Preorbitalminpre' => 158, 'Preorbitalminflex' => 159, 'Preorbitalminpost' => 160, 'Preorbitallitpre' => 161, 'Preorbitallitflex' => 162, 'Preorbitallitpost' => 163, 'Diameterofeyemaxpre' => 164, 'Diameterofeyemaxflex' => 165, 'Diameterofeyemaxpost' => 166, 'Diameterofeyeminpre' => 167, 'Diameterofeyeminflex' => 168, 'Diameterofeyeminpost' => 169, 'Diameterofeyelitpre' => 170, 'Diameterofeyelitflex' => 171, 'Diameterofeyelitpost' => 172, 'Deptheyemaxpre' => 173, 'Deptheyemaxflex' => 174, 'Deptheyemaxpost' => 175, 'Deptheyeminpre' => 176, 'Deptheyeminflex' => 177, 'Deptheyeminpost' => 178, 'Deptheyelitpre' => 179, 'Deptheyelitflex' => 180, 'Deptheyelitpost' => 181, 'Depthpectoralmaxpre' => 182, 'Depthpectoralmaxflex' => 183, 'Depthpectoralmaxpost' => 184, 'Depthpectoralminpre' => 185, 'Depthpectoralminflex' => 186, 'Depthpectoralminpost' => 187, 'Depthpectorallitpre' => 188, 'Depthpectorallitflex' => 189, 'Depthpectorallitpost' => 190, 'Depthanusmaxpre' => 191, 'Depthanusmaxflex' => 192, 'Depthanusmaxpost' => 193, 'Depthanusminpre' => 194, 'Depthanusminflex' => 195, 'Depthanusminpost' => 196, 'Depthanuslitpre' => 197, 'Depthanuslitflex' => 198, 'Depthanuslitpost' => 199, 'Addcharyolks' => 200, 'Addcharposts' => 201, 'Easeofid' => 202, 'Similarspecies1' => 203, 'Similarspec1remarks' => 204, 'Similarspecies2' => 205, 'Similarspec2remarks' => 206, 'Entered' => 207, 'Dateentered' => 208, 'Modified' => 209, 'Datemodified' => 210, 'Expert' => 211, 'Datechecked' => 212, 'Ts' => 213, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('autoctr' => 0, 'stockcode' => 1, 'speccode' => 2, 'larvaerefno' => 3, 'otherref1' => 4, 'otherref2' => 5, 'larvalarea' => 6, 'placeofdevelopment' => 7, 'lhmax' => 8, 'lbirthmaxref' => 9, 'lhmin' => 10, 'lbirthminref' => 11, 'lhmid' => 12, 'lbirthmodref' => 13, 'preanallengthmaxy' => 14, 'preanmaxref' => 15, 'preanallengthminy' => 16, 'preanminref' => 17, 'preanallengthmody' => 18, 'preanmodref' => 19, 'flexlengthmin' => 20, 'flexlengthmod' => 21, 'flexlengthmax' => 22, 'flexlengthtype' => 23, 'flexlengthminref' => 24, 'flexlengthmodref' => 25, 'flexlengthmaxref' => 26, 'translengthmin' => 27, 'translengthmod' => 28, 'translengthmax' => 29, 'translengthtype' => 30, 'translengthminref' => 31, 'translengthmodref' => 32, 'translengthmaxref' => 33, 'larvaldurationmin' => 34, 'larvaldurationminref' => 35, 'larvaldurationmax' => 36, 'larvaldurationmaxref' => 37, 'larvaldurationmod' => 38, 'larvaldurationmodref' => 39, 'shapeofyolksac' => 40, 'yolksacpigm' => 41, 'yolksacsegm' => 42, 'yolkref' => 43, 'oilglobules' => 44, 'oilglobuleposh' => 45, 'oilglobuleposv' => 46, 'oilglobulepigm' => 47, 'rowsontaily' => 48, 'othermelontaily' => 49, 'melonheadtrunky' => 50, 'lyamax' => 51, 'l1feedmaxref' => 52, 'lyamin' => 53, 'l1feedminref' => 54, 'lyamod' => 55, 'l1feedmodref' => 56, 'janlarv' => 57, 'feblarv' => 58, 'marlarv' => 59, 'aprlarv' => 60, 'maylarv' => 61, 'junlarv' => 62, 'jullarv' => 63, 'auglarv' => 64, 'seplarv' => 65, 'octlarv' => 66, 'novlarv' => 67, 'declarv' => 68, 'presenceref' => 69, 'waterdepthmax' => 70, 'watertempmax' => 71, 'salinitymax' => 72, 'ph' => 73, 'oxygenmax' => 74, 'watermaxref' => 75, 'waterdepthmin' => 76, 'watertempmin' => 77, 'salinitymin' => 78, 'phmin' => 79, 'oxygenmin' => 80, 'waterminref' => 81, 'waterdepthmod' => 82, 'watertempmod' => 83, 'salinitymod' => 84, 'phmod' => 85, 'oxygenmod' => 86, 'watermodref' => 87, 'strikingfeature' => 88, 'larvapic' => 89, 'strikingshapelat' => 90, 'strikingshapedors' => 91, 'bodyform' => 92, 'shapeofgut' => 93, 'gasbladderearly' => 94, 'gasbladderlate' => 95, 'spinalarmatureearl' => 96, 'spinalarmaturelate' => 97, 'rowsontaile' => 98, 'othermelontaile' => 99, 'melonheadtrunke' => 100, 'rowsontaill' => 101, 'othermelontaill' => 102, 'melonheadtrunkl' => 103, 'urostyleregion' => 104, 'urostyleregionlate' => 105, 'peritoneum' => 106, 'pectoralsi' => 107, 'pectoralsii' => 108, 'pelvicsi' => 109, 'pelvicsii' => 110, 'myomeresmax' => 111, 'myomeresmin' => 112, 'myomeresmod' => 113, 'myomvert' => 114, 'totmyomref' => 115, 'myomeresmaxprean' => 116, 'myomeresminprean' => 117, 'myomeresmodprean' => 118, 'myomvert2' => 119, 'preanmyoref' => 120, 'rllatepre' => 121, 'rllateflex' => 122, 'rllatepost' => 123, 'rlearlypre' => 124, 'rlearlyflex' => 125, 'rlearlypost' => 126, 'rlflexpre' => 127, 'rlflexflex' => 128, 'rlflexpost' => 129, 'measurementspreref' => 130, 'measurementsflexref' => 131, 'measurementspostref' => 132, 'typepre' => 133, 'typeflex' => 134, 'typepost' => 135, 'comment' => 136, 'preanallengthmaxpre' => 137, 'preanallengthmaxflex' => 138, 'preanallengthmaxpost' => 139, 'preanallengthminpre' => 140, 'preanallengthminflex' => 141, 'preanallengthminpost' => 142, 'preanallengthlitpre' => 143, 'preanallengthlitflex' => 144, 'preanallengthlitpost' => 145, 'prepeclengthmaxpre' => 146, 'prepeclengthmaxflex' => 147, 'prepeclengthmaxpost' => 148, 'prepeclengthminpre' => 149, 'prepeclengthminflex' => 150, 'prepeclengthminpost' => 151, 'prepeclengthlitpre' => 152, 'prepeclengthlitflex' => 153, 'prepeclengthlitpost' => 154, 'preorbitalmaxpre' => 155, 'preorbitalmaxflex' => 156, 'preorbitalmaxpost' => 157, 'preorbitalminpre' => 158, 'preorbitalminflex' => 159, 'preorbitalminpost' => 160, 'preorbitallitpre' => 161, 'preorbitallitflex' => 162, 'preorbitallitpost' => 163, 'diameterofeyemaxpre' => 164, 'diameterofeyemaxflex' => 165, 'diameterofeyemaxpost' => 166, 'diameterofeyeminpre' => 167, 'diameterofeyeminflex' => 168, 'diameterofeyeminpost' => 169, 'diameterofeyelitpre' => 170, 'diameterofeyelitflex' => 171, 'diameterofeyelitpost' => 172, 'deptheyemaxpre' => 173, 'deptheyemaxflex' => 174, 'deptheyemaxpost' => 175, 'deptheyeminpre' => 176, 'deptheyeminflex' => 177, 'deptheyeminpost' => 178, 'deptheyelitpre' => 179, 'deptheyelitflex' => 180, 'deptheyelitpost' => 181, 'depthpectoralmaxpre' => 182, 'depthpectoralmaxflex' => 183, 'depthpectoralmaxpost' => 184, 'depthpectoralminpre' => 185, 'depthpectoralminflex' => 186, 'depthpectoralminpost' => 187, 'depthpectorallitpre' => 188, 'depthpectorallitflex' => 189, 'depthpectorallitpost' => 190, 'depthanusmaxpre' => 191, 'depthanusmaxflex' => 192, 'depthanusmaxpost' => 193, 'depthanusminpre' => 194, 'depthanusminflex' => 195, 'depthanusminpost' => 196, 'depthanuslitpre' => 197, 'depthanuslitflex' => 198, 'depthanuslitpost' => 199, 'addcharyolks' => 200, 'addcharposts' => 201, 'easeofid' => 202, 'similarspecies1' => 203, 'similarspec1remarks' => 204, 'similarspecies2' => 205, 'similarspec2remarks' => 206, 'entered' => 207, 'dateentered' => 208, 'modified' => 209, 'datemodified' => 210, 'expert' => 211, 'datechecked' => 212, 'ts' => 213, ),
        BasePeer::TYPE_COLNAME => array (LarvaePeer::AUTOCTR => 0, LarvaePeer::STOCKCODE => 1, LarvaePeer::SPECCODE => 2, LarvaePeer::LARVAEREFNO => 3, LarvaePeer::OTHERREF1 => 4, LarvaePeer::OTHERREF2 => 5, LarvaePeer::LARVALAREA => 6, LarvaePeer::PLACEOFDEVELOPMENT => 7, LarvaePeer::LHMAX => 8, LarvaePeer::LBIRTHMAXREF => 9, LarvaePeer::LHMIN => 10, LarvaePeer::LBIRTHMINREF => 11, LarvaePeer::LHMID => 12, LarvaePeer::LBIRTHMODREF => 13, LarvaePeer::PREANALLENGTHMAXY => 14, LarvaePeer::PREANMAXREF => 15, LarvaePeer::PREANALLENGTHMINY => 16, LarvaePeer::PREANMINREF => 17, LarvaePeer::PREANALLENGTHMODY => 18, LarvaePeer::PREANMODREF => 19, LarvaePeer::FLEXLENGTHMIN => 20, LarvaePeer::FLEXLENGTHMOD => 21, LarvaePeer::FLEXLENGTHMAX => 22, LarvaePeer::FLEXLENGTHTYPE => 23, LarvaePeer::FLEXLENGTHMINREF => 24, LarvaePeer::FLEXLENGTHMODREF => 25, LarvaePeer::FLEXLENGTHMAXREF => 26, LarvaePeer::TRANSLENGTHMIN => 27, LarvaePeer::TRANSLENGTHMOD => 28, LarvaePeer::TRANSLENGTHMAX => 29, LarvaePeer::TRANSLENGTHTYPE => 30, LarvaePeer::TRANSLENGTHMINREF => 31, LarvaePeer::TRANSLENGTHMODREF => 32, LarvaePeer::TRANSLENGTHMAXREF => 33, LarvaePeer::LARVALDURATIONMIN => 34, LarvaePeer::LARVALDURATIONMINREF => 35, LarvaePeer::LARVALDURATIONMAX => 36, LarvaePeer::LARVALDURATIONMAXREF => 37, LarvaePeer::LARVALDURATIONMOD => 38, LarvaePeer::LARVALDURATIONMODREF => 39, LarvaePeer::SHAPEOFYOLKSAC => 40, LarvaePeer::YOLKSACPIGM => 41, LarvaePeer::YOLKSACSEGM => 42, LarvaePeer::YOLKREF => 43, LarvaePeer::OILGLOBULES => 44, LarvaePeer::OILGLOBULEPOSH => 45, LarvaePeer::OILGLOBULEPOSV => 46, LarvaePeer::OILGLOBULEPIGM => 47, LarvaePeer::ROWSONTAILY => 48, LarvaePeer::OTHERMELONTAILY => 49, LarvaePeer::MELONHEADTRUNKY => 50, LarvaePeer::LYAMAX => 51, LarvaePeer::L1FEEDMAXREF => 52, LarvaePeer::LYAMIN => 53, LarvaePeer::L1FEEDMINREF => 54, LarvaePeer::LYAMOD => 55, LarvaePeer::L1FEEDMODREF => 56, LarvaePeer::JANLARV => 57, LarvaePeer::FEBLARV => 58, LarvaePeer::MARLARV => 59, LarvaePeer::APRLARV => 60, LarvaePeer::MAYLARV => 61, LarvaePeer::JUNLARV => 62, LarvaePeer::JULLARV => 63, LarvaePeer::AUGLARV => 64, LarvaePeer::SEPLARV => 65, LarvaePeer::OCTLARV => 66, LarvaePeer::NOVLARV => 67, LarvaePeer::DECLARV => 68, LarvaePeer::PRESENCEREF => 69, LarvaePeer::WATERDEPTHMAX => 70, LarvaePeer::WATERTEMPMAX => 71, LarvaePeer::SALINITYMAX => 72, LarvaePeer::PH => 73, LarvaePeer::OXYGENMAX => 74, LarvaePeer::WATERMAXREF => 75, LarvaePeer::WATERDEPTHMIN => 76, LarvaePeer::WATERTEMPMIN => 77, LarvaePeer::SALINITYMIN => 78, LarvaePeer::PHMIN => 79, LarvaePeer::OXYGENMIN => 80, LarvaePeer::WATERMINREF => 81, LarvaePeer::WATERDEPTHMOD => 82, LarvaePeer::WATERTEMPMOD => 83, LarvaePeer::SALINITYMOD => 84, LarvaePeer::PHMOD => 85, LarvaePeer::OXYGENMOD => 86, LarvaePeer::WATERMODREF => 87, LarvaePeer::STRIKINGFEATURE => 88, LarvaePeer::LARVAPIC => 89, LarvaePeer::STRIKINGSHAPELAT => 90, LarvaePeer::STRIKINGSHAPEDORS => 91, LarvaePeer::BODYFORM => 92, LarvaePeer::SHAPEOFGUT => 93, LarvaePeer::GASBLADDEREARLY => 94, LarvaePeer::GASBLADDERLATE => 95, LarvaePeer::SPINALARMATUREEARL => 96, LarvaePeer::SPINALARMATURELATE => 97, LarvaePeer::ROWSONTAILE => 98, LarvaePeer::OTHERMELONTAILE => 99, LarvaePeer::MELONHEADTRUNKE => 100, LarvaePeer::ROWSONTAILL => 101, LarvaePeer::OTHERMELONTAILL => 102, LarvaePeer::MELONHEADTRUNKL => 103, LarvaePeer::UROSTYLEREGION => 104, LarvaePeer::UROSTYLEREGIONLATE => 105, LarvaePeer::PERITONEUM => 106, LarvaePeer::PECTORALSI => 107, LarvaePeer::PECTORALSII => 108, LarvaePeer::PELVICSI => 109, LarvaePeer::PELVICSII => 110, LarvaePeer::MYOMERESMAX => 111, LarvaePeer::MYOMERESMIN => 112, LarvaePeer::MYOMERESMOD => 113, LarvaePeer::MYOMVERT => 114, LarvaePeer::TOTMYOMREF => 115, LarvaePeer::MYOMERESMAXPREAN => 116, LarvaePeer::MYOMERESMINPREAN => 117, LarvaePeer::MYOMERESMODPREAN => 118, LarvaePeer::MYOMVERT2 => 119, LarvaePeer::PREANMYOREF => 120, LarvaePeer::RLLATEPRE => 121, LarvaePeer::RLLATEFLEX => 122, LarvaePeer::RLLATEPOST => 123, LarvaePeer::RLEARLYPRE => 124, LarvaePeer::RLEARLYFLEX => 125, LarvaePeer::RLEARLYPOST => 126, LarvaePeer::RLFLEXPRE => 127, LarvaePeer::RLFLEXFLEX => 128, LarvaePeer::RLFLEXPOST => 129, LarvaePeer::MEASUREMENTSPREREF => 130, LarvaePeer::MEASUREMENTSFLEXREF => 131, LarvaePeer::MEASUREMENTSPOSTREF => 132, LarvaePeer::TYPEPRE => 133, LarvaePeer::TYPEFLEX => 134, LarvaePeer::TYPEPOST => 135, LarvaePeer::COMMENT => 136, LarvaePeer::PREANALLENGTHMAXPRE => 137, LarvaePeer::PREANALLENGTHMAXFLEX => 138, LarvaePeer::PREANALLENGTHMAXPOST => 139, LarvaePeer::PREANALLENGTHMINPRE => 140, LarvaePeer::PREANALLENGTHMINFLEX => 141, LarvaePeer::PREANALLENGTHMINPOST => 142, LarvaePeer::PREANALLENGTHLITPRE => 143, LarvaePeer::PREANALLENGTHLITFLEX => 144, LarvaePeer::PREANALLENGTHLITPOST => 145, LarvaePeer::PREPECLENGTHMAXPRE => 146, LarvaePeer::PREPECLENGTHMAXFLEX => 147, LarvaePeer::PREPECLENGTHMAXPOST => 148, LarvaePeer::PREPECLENGTHMINPRE => 149, LarvaePeer::PREPECLENGTHMINFLEX => 150, LarvaePeer::PREPECLENGTHMINPOST => 151, LarvaePeer::PREPECLENGTHLITPRE => 152, LarvaePeer::PREPECLENGTHLITFLEX => 153, LarvaePeer::PREPECLENGTHLITPOST => 154, LarvaePeer::PREORBITALMAXPRE => 155, LarvaePeer::PREORBITALMAXFLEX => 156, LarvaePeer::PREORBITALMAXPOST => 157, LarvaePeer::PREORBITALMINPRE => 158, LarvaePeer::PREORBITALMINFLEX => 159, LarvaePeer::PREORBITALMINPOST => 160, LarvaePeer::PREORBITALLITPRE => 161, LarvaePeer::PREORBITALLITFLEX => 162, LarvaePeer::PREORBITALLITPOST => 163, LarvaePeer::DIAMETEROFEYEMAXPRE => 164, LarvaePeer::DIAMETEROFEYEMAXFLEX => 165, LarvaePeer::DIAMETEROFEYEMAXPOST => 166, LarvaePeer::DIAMETEROFEYEMINPRE => 167, LarvaePeer::DIAMETEROFEYEMINFLEX => 168, LarvaePeer::DIAMETEROFEYEMINPOST => 169, LarvaePeer::DIAMETEROFEYELITPRE => 170, LarvaePeer::DIAMETEROFEYELITFLEX => 171, LarvaePeer::DIAMETEROFEYELITPOST => 172, LarvaePeer::DEPTHEYEMAXPRE => 173, LarvaePeer::DEPTHEYEMAXFLEX => 174, LarvaePeer::DEPTHEYEMAXPOST => 175, LarvaePeer::DEPTHEYEMINPRE => 176, LarvaePeer::DEPTHEYEMINFLEX => 177, LarvaePeer::DEPTHEYEMINPOST => 178, LarvaePeer::DEPTHEYELITPRE => 179, LarvaePeer::DEPTHEYELITFLEX => 180, LarvaePeer::DEPTHEYELITPOST => 181, LarvaePeer::DEPTHPECTORALMAXPRE => 182, LarvaePeer::DEPTHPECTORALMAXFLEX => 183, LarvaePeer::DEPTHPECTORALMAXPOST => 184, LarvaePeer::DEPTHPECTORALMINPRE => 185, LarvaePeer::DEPTHPECTORALMINFLEX => 186, LarvaePeer::DEPTHPECTORALMINPOST => 187, LarvaePeer::DEPTHPECTORALLITPRE => 188, LarvaePeer::DEPTHPECTORALLITFLEX => 189, LarvaePeer::DEPTHPECTORALLITPOST => 190, LarvaePeer::DEPTHANUSMAXPRE => 191, LarvaePeer::DEPTHANUSMAXFLEX => 192, LarvaePeer::DEPTHANUSMAXPOST => 193, LarvaePeer::DEPTHANUSMINPRE => 194, LarvaePeer::DEPTHANUSMINFLEX => 195, LarvaePeer::DEPTHANUSMINPOST => 196, LarvaePeer::DEPTHANUSLITPRE => 197, LarvaePeer::DEPTHANUSLITFLEX => 198, LarvaePeer::DEPTHANUSLITPOST => 199, LarvaePeer::ADDCHARYOLKS => 200, LarvaePeer::ADDCHARPOSTS => 201, LarvaePeer::EASEOFID => 202, LarvaePeer::SIMILARSPECIES1 => 203, LarvaePeer::SIMILARSPEC1REMARKS => 204, LarvaePeer::SIMILARSPECIES2 => 205, LarvaePeer::SIMILARSPEC2REMARKS => 206, LarvaePeer::ENTERED => 207, LarvaePeer::DATEENTERED => 208, LarvaePeer::MODIFIED => 209, LarvaePeer::DATEMODIFIED => 210, LarvaePeer::EXPERT => 211, LarvaePeer::DATECHECKED => 212, LarvaePeer::TS => 213, ),
        BasePeer::TYPE_RAW_COLNAME => array ('AUTOCTR' => 0, 'STOCKCODE' => 1, 'SPECCODE' => 2, 'LARVAEREFNO' => 3, 'OTHERREF1' => 4, 'OTHERREF2' => 5, 'LARVALAREA' => 6, 'PLACEOFDEVELOPMENT' => 7, 'LHMAX' => 8, 'LBIRTHMAXREF' => 9, 'LHMIN' => 10, 'LBIRTHMINREF' => 11, 'LHMID' => 12, 'LBIRTHMODREF' => 13, 'PREANALLENGTHMAXY' => 14, 'PREANMAXREF' => 15, 'PREANALLENGTHMINY' => 16, 'PREANMINREF' => 17, 'PREANALLENGTHMODY' => 18, 'PREANMODREF' => 19, 'FLEXLENGTHMIN' => 20, 'FLEXLENGTHMOD' => 21, 'FLEXLENGTHMAX' => 22, 'FLEXLENGTHTYPE' => 23, 'FLEXLENGTHMINREF' => 24, 'FLEXLENGTHMODREF' => 25, 'FLEXLENGTHMAXREF' => 26, 'TRANSLENGTHMIN' => 27, 'TRANSLENGTHMOD' => 28, 'TRANSLENGTHMAX' => 29, 'TRANSLENGTHTYPE' => 30, 'TRANSLENGTHMINREF' => 31, 'TRANSLENGTHMODREF' => 32, 'TRANSLENGTHMAXREF' => 33, 'LARVALDURATIONMIN' => 34, 'LARVALDURATIONMINREF' => 35, 'LARVALDURATIONMAX' => 36, 'LARVALDURATIONMAXREF' => 37, 'LARVALDURATIONMOD' => 38, 'LARVALDURATIONMODREF' => 39, 'SHAPEOFYOLKSAC' => 40, 'YOLKSACPIGM' => 41, 'YOLKSACSEGM' => 42, 'YOLKREF' => 43, 'OILGLOBULES' => 44, 'OILGLOBULEPOSH' => 45, 'OILGLOBULEPOSV' => 46, 'OILGLOBULEPIGM' => 47, 'ROWSONTAILY' => 48, 'OTHERMELONTAILY' => 49, 'MELONHEADTRUNKY' => 50, 'LYAMAX' => 51, 'L1FEEDMAXREF' => 52, 'LYAMIN' => 53, 'L1FEEDMINREF' => 54, 'LYAMOD' => 55, 'L1FEEDMODREF' => 56, 'JANLARV' => 57, 'FEBLARV' => 58, 'MARLARV' => 59, 'APRLARV' => 60, 'MAYLARV' => 61, 'JUNLARV' => 62, 'JULLARV' => 63, 'AUGLARV' => 64, 'SEPLARV' => 65, 'OCTLARV' => 66, 'NOVLARV' => 67, 'DECLARV' => 68, 'PRESENCEREF' => 69, 'WATERDEPTHMAX' => 70, 'WATERTEMPMAX' => 71, 'SALINITYMAX' => 72, 'PH' => 73, 'OXYGENMAX' => 74, 'WATERMAXREF' => 75, 'WATERDEPTHMIN' => 76, 'WATERTEMPMIN' => 77, 'SALINITYMIN' => 78, 'PHMIN' => 79, 'OXYGENMIN' => 80, 'WATERMINREF' => 81, 'WATERDEPTHMOD' => 82, 'WATERTEMPMOD' => 83, 'SALINITYMOD' => 84, 'PHMOD' => 85, 'OXYGENMOD' => 86, 'WATERMODREF' => 87, 'STRIKINGFEATURE' => 88, 'LARVAPIC' => 89, 'STRIKINGSHAPELAT' => 90, 'STRIKINGSHAPEDORS' => 91, 'BODYFORM' => 92, 'SHAPEOFGUT' => 93, 'GASBLADDEREARLY' => 94, 'GASBLADDERLATE' => 95, 'SPINALARMATUREEARL' => 96, 'SPINALARMATURELATE' => 97, 'ROWSONTAILE' => 98, 'OTHERMELONTAILE' => 99, 'MELONHEADTRUNKE' => 100, 'ROWSONTAILL' => 101, 'OTHERMELONTAILL' => 102, 'MELONHEADTRUNKL' => 103, 'UROSTYLEREGION' => 104, 'UROSTYLEREGIONLATE' => 105, 'PERITONEUM' => 106, 'PECTORALSI' => 107, 'PECTORALSII' => 108, 'PELVICSI' => 109, 'PELVICSII' => 110, 'MYOMERESMAX' => 111, 'MYOMERESMIN' => 112, 'MYOMERESMOD' => 113, 'MYOMVERT' => 114, 'TOTMYOMREF' => 115, 'MYOMERESMAXPREAN' => 116, 'MYOMERESMINPREAN' => 117, 'MYOMERESMODPREAN' => 118, 'MYOMVERT2' => 119, 'PREANMYOREF' => 120, 'RLLATEPRE' => 121, 'RLLATEFLEX' => 122, 'RLLATEPOST' => 123, 'RLEARLYPRE' => 124, 'RLEARLYFLEX' => 125, 'RLEARLYPOST' => 126, 'RLFLEXPRE' => 127, 'RLFLEXFLEX' => 128, 'RLFLEXPOST' => 129, 'MEASUREMENTSPREREF' => 130, 'MEASUREMENTSFLEXREF' => 131, 'MEASUREMENTSPOSTREF' => 132, 'TYPEPRE' => 133, 'TYPEFLEX' => 134, 'TYPEPOST' => 135, 'COMMENT' => 136, 'PREANALLENGTHMAXPRE' => 137, 'PREANALLENGTHMAXFLEX' => 138, 'PREANALLENGTHMAXPOST' => 139, 'PREANALLENGTHMINPRE' => 140, 'PREANALLENGTHMINFLEX' => 141, 'PREANALLENGTHMINPOST' => 142, 'PREANALLENGTHLITPRE' => 143, 'PREANALLENGTHLITFLEX' => 144, 'PREANALLENGTHLITPOST' => 145, 'PREPECLENGTHMAXPRE' => 146, 'PREPECLENGTHMAXFLEX' => 147, 'PREPECLENGTHMAXPOST' => 148, 'PREPECLENGTHMINPRE' => 149, 'PREPECLENGTHMINFLEX' => 150, 'PREPECLENGTHMINPOST' => 151, 'PREPECLENGTHLITPRE' => 152, 'PREPECLENGTHLITFLEX' => 153, 'PREPECLENGTHLITPOST' => 154, 'PREORBITALMAXPRE' => 155, 'PREORBITALMAXFLEX' => 156, 'PREORBITALMAXPOST' => 157, 'PREORBITALMINPRE' => 158, 'PREORBITALMINFLEX' => 159, 'PREORBITALMINPOST' => 160, 'PREORBITALLITPRE' => 161, 'PREORBITALLITFLEX' => 162, 'PREORBITALLITPOST' => 163, 'DIAMETEROFEYEMAXPRE' => 164, 'DIAMETEROFEYEMAXFLEX' => 165, 'DIAMETEROFEYEMAXPOST' => 166, 'DIAMETEROFEYEMINPRE' => 167, 'DIAMETEROFEYEMINFLEX' => 168, 'DIAMETEROFEYEMINPOST' => 169, 'DIAMETEROFEYELITPRE' => 170, 'DIAMETEROFEYELITFLEX' => 171, 'DIAMETEROFEYELITPOST' => 172, 'DEPTHEYEMAXPRE' => 173, 'DEPTHEYEMAXFLEX' => 174, 'DEPTHEYEMAXPOST' => 175, 'DEPTHEYEMINPRE' => 176, 'DEPTHEYEMINFLEX' => 177, 'DEPTHEYEMINPOST' => 178, 'DEPTHEYELITPRE' => 179, 'DEPTHEYELITFLEX' => 180, 'DEPTHEYELITPOST' => 181, 'DEPTHPECTORALMAXPRE' => 182, 'DEPTHPECTORALMAXFLEX' => 183, 'DEPTHPECTORALMAXPOST' => 184, 'DEPTHPECTORALMINPRE' => 185, 'DEPTHPECTORALMINFLEX' => 186, 'DEPTHPECTORALMINPOST' => 187, 'DEPTHPECTORALLITPRE' => 188, 'DEPTHPECTORALLITFLEX' => 189, 'DEPTHPECTORALLITPOST' => 190, 'DEPTHANUSMAXPRE' => 191, 'DEPTHANUSMAXFLEX' => 192, 'DEPTHANUSMAXPOST' => 193, 'DEPTHANUSMINPRE' => 194, 'DEPTHANUSMINFLEX' => 195, 'DEPTHANUSMINPOST' => 196, 'DEPTHANUSLITPRE' => 197, 'DEPTHANUSLITFLEX' => 198, 'DEPTHANUSLITPOST' => 199, 'ADDCHARYOLKS' => 200, 'ADDCHARPOSTS' => 201, 'EASEOFID' => 202, 'SIMILARSPECIES1' => 203, 'SIMILARSPEC1REMARKS' => 204, 'SIMILARSPECIES2' => 205, 'SIMILARSPEC2REMARKS' => 206, 'ENTERED' => 207, 'DATEENTERED' => 208, 'MODIFIED' => 209, 'DATEMODIFIED' => 210, 'EXPERT' => 211, 'DATECHECKED' => 212, 'TS' => 213, ),
        BasePeer::TYPE_FIELDNAME => array ('autoctr' => 0, 'StockCode' => 1, 'SpecCode' => 2, 'LarvaeRefNo' => 3, 'OtherRef1' => 4, 'OtherRef2' => 5, 'LarvalArea' => 6, 'PlaceofDevelopment' => 7, 'LhMax' => 8, 'LBirthmaxRef' => 9, 'LhMin' => 10, 'LBirthminRef' => 11, 'LhMid' => 12, 'LBirthmodRef' => 13, 'PreanalLengthMaxY' => 14, 'PreAnmaxRef' => 15, 'PreanalLengthMinY' => 16, 'PreAnminRef' => 17, 'PreanalLengthModY' => 18, 'PreAnmodRef' => 19, 'FlexLengthMin' => 20, 'FlexLengthMod' => 21, 'FlexLengthMax' => 22, 'FlexLengthType' => 23, 'FlexLengthMinRef' => 24, 'FlexLengthModRef' => 25, 'FlexLengthMaxRef' => 26, 'TransLengthMin' => 27, 'TransLengthMod' => 28, 'TransLengthMax' => 29, 'TransLengthType' => 30, 'TransLengthMinRef' => 31, 'TransLengthModRef' => 32, 'TransLengthMaxRef' => 33, 'LarvalDurationMin' => 34, 'LarvalDurationMinRef' => 35, 'LarvalDurationMax' => 36, 'LarvalDurationMaxRef' => 37, 'LarvalDurationMod' => 38, 'LarvalDurationModRef' => 39, 'Shapeofyolksac' => 40, 'YolksacPigm' => 41, 'YolksacSegm' => 42, 'YolkRef' => 43, 'OilGlobules' => 44, 'OilGlobuleposH' => 45, 'OilGlobuleposV' => 46, 'OilGlobulePigm' => 47, 'RowsonTailY' => 48, 'OtherMelOnTailY' => 49, 'MelonHeadTrunkY' => 50, 'LyaMax' => 51, 'L1FeedmaxRef' => 52, 'LyaMin' => 53, 'L1FeedminRef' => 54, 'LyaMod' => 55, 'L1FeedmodRef' => 56, 'JanLarv' => 57, 'FebLarv' => 58, 'MarLarv' => 59, 'AprLarv' => 60, 'MayLarv' => 61, 'JunLarv' => 62, 'JulLarv' => 63, 'AugLarv' => 64, 'SepLarv' => 65, 'OctLarv' => 66, 'NovLarv' => 67, 'DecLarv' => 68, 'PresenceRef' => 69, 'WaterDepthMax' => 70, 'WaterTempMax' => 71, 'SalinityMax' => 72, 'pH' => 73, 'OxygenMax' => 74, 'WatermaxRef' => 75, 'WaterDepthMin' => 76, 'WaterTempMin' => 77, 'SalinityMin' => 78, 'pHMin' => 79, 'OxygenMin' => 80, 'WaterminRef' => 81, 'WaterDepthMod' => 82, 'WaterTempMod' => 83, 'SalinityMod' => 84, 'pHMod' => 85, 'OxygenMod' => 86, 'WatermodRef' => 87, 'StrikingFeature' => 88, 'LarvaPic' => 89, 'StrikingShapeLat' => 90, 'StrikingShapeDors' => 91, 'BodyForm' => 92, 'ShapeofGut' => 93, 'GasBladderEarly' => 94, 'GasBladderLate' => 95, 'SpinalArmatureEarl' => 96, 'SpinalArmatureLate' => 97, 'RowsonTailE' => 98, 'OtherMelonTailE' => 99, 'MelonHeadTrunkE' => 100, 'RowsonTaill' => 101, 'OtherMelonTaill' => 102, 'MelonHeadTrunkl' => 103, 'UrostyleRegion' => 104, 'UrostyleRegionLate' => 105, 'Peritoneum' => 106, 'PectoralsI' => 107, 'PectoralsII' => 108, 'PelvicsI' => 109, 'PelvicsII' => 110, 'MyomeresMax' => 111, 'MyomeresMin' => 112, 'MyomeresMod' => 113, 'MyomVert' => 114, 'TotMyomRef' => 115, 'MyomeresMaxPrean' => 116, 'MyomeresMinPrean' => 117, 'MyomeresModPrean' => 118, 'MyomVert2' => 119, 'PreAnMyoRef' => 120, 'RLLatePre' => 121, 'RLLateFlex' => 122, 'RLLatePost' => 123, 'RLEarlyPre' => 124, 'RLEarlyFlex' => 125, 'RLEarlyPost' => 126, 'RLFlexPre' => 127, 'RLFlexFlex' => 128, 'RLFlexPost' => 129, 'MeasurementsPreRef' => 130, 'MeasurementsFlexRef' => 131, 'MeasurementsPostRef' => 132, 'TypePre' => 133, 'TypeFlex' => 134, 'TypePost' => 135, 'comment' => 136, 'PreanalLengthMaxPre' => 137, 'PreanalLengthMaxFlex' => 138, 'PreanalLengthMaxPost' => 139, 'PreanalLengthMinPre' => 140, 'PreanalLengthMinFlex' => 141, 'PreanalLengthMinPost' => 142, 'PreanalLengthLitPre' => 143, 'PreanalLengthLitFlex' => 144, 'PreanalLengthLitPost' => 145, 'PrepecLengthMaxPre' => 146, 'PrepecLengthMaxFlex' => 147, 'PrepecLengthMaxPost' => 148, 'PrepecLengthMinPre' => 149, 'PrepecLengthMinFlex' => 150, 'PrepecLengthMinPost' => 151, 'PrepecLengthLitPre' => 152, 'PrepecLengthLitFlex' => 153, 'PrepecLengthLitPost' => 154, 'PreorbitalMaxPre' => 155, 'PreorbitalMaxFlex' => 156, 'PreorbitalMaxPost' => 157, 'PreorbitalMinPre' => 158, 'PreorbitalMinFlex' => 159, 'PreorbitalMinPost' => 160, 'PreorbitalLitPre' => 161, 'PreorbitalLitFlex' => 162, 'PreorbitalLitPost' => 163, 'DiameterofEyeMaxPre' => 164, 'DiameterofEyeMaxFlex' => 165, 'DiameterofEyeMaxPost' => 166, 'DiameterofEyeMinPre' => 167, 'DiameterofEyeMinFlex' => 168, 'DiameterofEyeMinPost' => 169, 'DiameterofEyeLitPre' => 170, 'DiameterofEyeLitFlex' => 171, 'DiameterofEyeLitPost' => 172, 'DepthEyeMaxPre' => 173, 'DepthEyeMaxFlex' => 174, 'DepthEyeMaxPost' => 175, 'DepthEyeMinPre' => 176, 'DepthEyeMinFlex' => 177, 'DepthEyeMinPost' => 178, 'DepthEyeLitPre' => 179, 'DepthEyeLitFlex' => 180, 'DepthEyeLitPost' => 181, 'DepthPectoralMaxPre' => 182, 'DepthPectoralMaxFlex' => 183, 'DepthPectoralMaxPost' => 184, 'DepthPectoralMinPre' => 185, 'DepthPectoralMinFlex' => 186, 'DepthPectoralMinPost' => 187, 'DepthPectoralLitPre' => 188, 'DepthPectoralLitFlex' => 189, 'DepthPectoralLitPost' => 190, 'DepthAnusMaxPre' => 191, 'DepthAnusMaxFlex' => 192, 'DepthAnusMaxPost' => 193, 'DepthAnusMinPre' => 194, 'DepthAnusMinFlex' => 195, 'DepthAnusMinPost' => 196, 'DepthAnusLitPre' => 197, 'DepthAnusLitFlex' => 198, 'DepthAnusLitPost' => 199, 'AddCharYolks' => 200, 'AddCharPosts' => 201, 'EaseofID' => 202, 'SimilarSpecies1' => 203, 'SimilarSpec1Remarks' => 204, 'SimilarSpecies2' => 205, 'SimilarSpec2Remarks' => 206, 'Entered' => 207, 'DateEntered' => 208, 'Modified' => 209, 'DateModified' => 210, 'Expert' => 211, 'DateChecked' => 212, 'TS' => 213, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, )
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
        $toNames = LarvaePeer::getFieldNames($toType);
        $key = isset(LarvaePeer::$fieldKeys[$fromType][$name]) ? LarvaePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(LarvaePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, LarvaePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return LarvaePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. LarvaePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(LarvaePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(LarvaePeer::AUTOCTR);
            $criteria->addSelectColumn(LarvaePeer::STOCKCODE);
            $criteria->addSelectColumn(LarvaePeer::SPECCODE);
            $criteria->addSelectColumn(LarvaePeer::LARVAEREFNO);
            $criteria->addSelectColumn(LarvaePeer::OTHERREF1);
            $criteria->addSelectColumn(LarvaePeer::OTHERREF2);
            $criteria->addSelectColumn(LarvaePeer::LARVALAREA);
            $criteria->addSelectColumn(LarvaePeer::PLACEOFDEVELOPMENT);
            $criteria->addSelectColumn(LarvaePeer::LHMAX);
            $criteria->addSelectColumn(LarvaePeer::LBIRTHMAXREF);
            $criteria->addSelectColumn(LarvaePeer::LHMIN);
            $criteria->addSelectColumn(LarvaePeer::LBIRTHMINREF);
            $criteria->addSelectColumn(LarvaePeer::LHMID);
            $criteria->addSelectColumn(LarvaePeer::LBIRTHMODREF);
            $criteria->addSelectColumn(LarvaePeer::PREANALLENGTHMAXY);
            $criteria->addSelectColumn(LarvaePeer::PREANMAXREF);
            $criteria->addSelectColumn(LarvaePeer::PREANALLENGTHMINY);
            $criteria->addSelectColumn(LarvaePeer::PREANMINREF);
            $criteria->addSelectColumn(LarvaePeer::PREANALLENGTHMODY);
            $criteria->addSelectColumn(LarvaePeer::PREANMODREF);
            $criteria->addSelectColumn(LarvaePeer::FLEXLENGTHMIN);
            $criteria->addSelectColumn(LarvaePeer::FLEXLENGTHMOD);
            $criteria->addSelectColumn(LarvaePeer::FLEXLENGTHMAX);
            $criteria->addSelectColumn(LarvaePeer::FLEXLENGTHTYPE);
            $criteria->addSelectColumn(LarvaePeer::FLEXLENGTHMINREF);
            $criteria->addSelectColumn(LarvaePeer::FLEXLENGTHMODREF);
            $criteria->addSelectColumn(LarvaePeer::FLEXLENGTHMAXREF);
            $criteria->addSelectColumn(LarvaePeer::TRANSLENGTHMIN);
            $criteria->addSelectColumn(LarvaePeer::TRANSLENGTHMOD);
            $criteria->addSelectColumn(LarvaePeer::TRANSLENGTHMAX);
            $criteria->addSelectColumn(LarvaePeer::TRANSLENGTHTYPE);
            $criteria->addSelectColumn(LarvaePeer::TRANSLENGTHMINREF);
            $criteria->addSelectColumn(LarvaePeer::TRANSLENGTHMODREF);
            $criteria->addSelectColumn(LarvaePeer::TRANSLENGTHMAXREF);
            $criteria->addSelectColumn(LarvaePeer::LARVALDURATIONMIN);
            $criteria->addSelectColumn(LarvaePeer::LARVALDURATIONMINREF);
            $criteria->addSelectColumn(LarvaePeer::LARVALDURATIONMAX);
            $criteria->addSelectColumn(LarvaePeer::LARVALDURATIONMAXREF);
            $criteria->addSelectColumn(LarvaePeer::LARVALDURATIONMOD);
            $criteria->addSelectColumn(LarvaePeer::LARVALDURATIONMODREF);
            $criteria->addSelectColumn(LarvaePeer::SHAPEOFYOLKSAC);
            $criteria->addSelectColumn(LarvaePeer::YOLKSACPIGM);
            $criteria->addSelectColumn(LarvaePeer::YOLKSACSEGM);
            $criteria->addSelectColumn(LarvaePeer::YOLKREF);
            $criteria->addSelectColumn(LarvaePeer::OILGLOBULES);
            $criteria->addSelectColumn(LarvaePeer::OILGLOBULEPOSH);
            $criteria->addSelectColumn(LarvaePeer::OILGLOBULEPOSV);
            $criteria->addSelectColumn(LarvaePeer::OILGLOBULEPIGM);
            $criteria->addSelectColumn(LarvaePeer::ROWSONTAILY);
            $criteria->addSelectColumn(LarvaePeer::OTHERMELONTAILY);
            $criteria->addSelectColumn(LarvaePeer::MELONHEADTRUNKY);
            $criteria->addSelectColumn(LarvaePeer::LYAMAX);
            $criteria->addSelectColumn(LarvaePeer::L1FEEDMAXREF);
            $criteria->addSelectColumn(LarvaePeer::LYAMIN);
            $criteria->addSelectColumn(LarvaePeer::L1FEEDMINREF);
            $criteria->addSelectColumn(LarvaePeer::LYAMOD);
            $criteria->addSelectColumn(LarvaePeer::L1FEEDMODREF);
            $criteria->addSelectColumn(LarvaePeer::JANLARV);
            $criteria->addSelectColumn(LarvaePeer::FEBLARV);
            $criteria->addSelectColumn(LarvaePeer::MARLARV);
            $criteria->addSelectColumn(LarvaePeer::APRLARV);
            $criteria->addSelectColumn(LarvaePeer::MAYLARV);
            $criteria->addSelectColumn(LarvaePeer::JUNLARV);
            $criteria->addSelectColumn(LarvaePeer::JULLARV);
            $criteria->addSelectColumn(LarvaePeer::AUGLARV);
            $criteria->addSelectColumn(LarvaePeer::SEPLARV);
            $criteria->addSelectColumn(LarvaePeer::OCTLARV);
            $criteria->addSelectColumn(LarvaePeer::NOVLARV);
            $criteria->addSelectColumn(LarvaePeer::DECLARV);
            $criteria->addSelectColumn(LarvaePeer::PRESENCEREF);
            $criteria->addSelectColumn(LarvaePeer::WATERDEPTHMAX);
            $criteria->addSelectColumn(LarvaePeer::WATERTEMPMAX);
            $criteria->addSelectColumn(LarvaePeer::SALINITYMAX);
            $criteria->addSelectColumn(LarvaePeer::PH);
            $criteria->addSelectColumn(LarvaePeer::OXYGENMAX);
            $criteria->addSelectColumn(LarvaePeer::WATERMAXREF);
            $criteria->addSelectColumn(LarvaePeer::WATERDEPTHMIN);
            $criteria->addSelectColumn(LarvaePeer::WATERTEMPMIN);
            $criteria->addSelectColumn(LarvaePeer::SALINITYMIN);
            $criteria->addSelectColumn(LarvaePeer::PHMIN);
            $criteria->addSelectColumn(LarvaePeer::OXYGENMIN);
            $criteria->addSelectColumn(LarvaePeer::WATERMINREF);
            $criteria->addSelectColumn(LarvaePeer::WATERDEPTHMOD);
            $criteria->addSelectColumn(LarvaePeer::WATERTEMPMOD);
            $criteria->addSelectColumn(LarvaePeer::SALINITYMOD);
            $criteria->addSelectColumn(LarvaePeer::PHMOD);
            $criteria->addSelectColumn(LarvaePeer::OXYGENMOD);
            $criteria->addSelectColumn(LarvaePeer::WATERMODREF);
            $criteria->addSelectColumn(LarvaePeer::STRIKINGFEATURE);
            $criteria->addSelectColumn(LarvaePeer::LARVAPIC);
            $criteria->addSelectColumn(LarvaePeer::STRIKINGSHAPELAT);
            $criteria->addSelectColumn(LarvaePeer::STRIKINGSHAPEDORS);
            $criteria->addSelectColumn(LarvaePeer::BODYFORM);
            $criteria->addSelectColumn(LarvaePeer::SHAPEOFGUT);
            $criteria->addSelectColumn(LarvaePeer::GASBLADDEREARLY);
            $criteria->addSelectColumn(LarvaePeer::GASBLADDERLATE);
            $criteria->addSelectColumn(LarvaePeer::SPINALARMATUREEARL);
            $criteria->addSelectColumn(LarvaePeer::SPINALARMATURELATE);
            $criteria->addSelectColumn(LarvaePeer::ROWSONTAILE);
            $criteria->addSelectColumn(LarvaePeer::OTHERMELONTAILE);
            $criteria->addSelectColumn(LarvaePeer::MELONHEADTRUNKE);
            $criteria->addSelectColumn(LarvaePeer::ROWSONTAILL);
            $criteria->addSelectColumn(LarvaePeer::OTHERMELONTAILL);
            $criteria->addSelectColumn(LarvaePeer::MELONHEADTRUNKL);
            $criteria->addSelectColumn(LarvaePeer::UROSTYLEREGION);
            $criteria->addSelectColumn(LarvaePeer::UROSTYLEREGIONLATE);
            $criteria->addSelectColumn(LarvaePeer::PERITONEUM);
            $criteria->addSelectColumn(LarvaePeer::PECTORALSI);
            $criteria->addSelectColumn(LarvaePeer::PECTORALSII);
            $criteria->addSelectColumn(LarvaePeer::PELVICSI);
            $criteria->addSelectColumn(LarvaePeer::PELVICSII);
            $criteria->addSelectColumn(LarvaePeer::MYOMERESMAX);
            $criteria->addSelectColumn(LarvaePeer::MYOMERESMIN);
            $criteria->addSelectColumn(LarvaePeer::MYOMERESMOD);
            $criteria->addSelectColumn(LarvaePeer::MYOMVERT);
            $criteria->addSelectColumn(LarvaePeer::TOTMYOMREF);
            $criteria->addSelectColumn(LarvaePeer::MYOMERESMAXPREAN);
            $criteria->addSelectColumn(LarvaePeer::MYOMERESMINPREAN);
            $criteria->addSelectColumn(LarvaePeer::MYOMERESMODPREAN);
            $criteria->addSelectColumn(LarvaePeer::MYOMVERT2);
            $criteria->addSelectColumn(LarvaePeer::PREANMYOREF);
            $criteria->addSelectColumn(LarvaePeer::RLLATEPRE);
            $criteria->addSelectColumn(LarvaePeer::RLLATEFLEX);
            $criteria->addSelectColumn(LarvaePeer::RLLATEPOST);
            $criteria->addSelectColumn(LarvaePeer::RLEARLYPRE);
            $criteria->addSelectColumn(LarvaePeer::RLEARLYFLEX);
            $criteria->addSelectColumn(LarvaePeer::RLEARLYPOST);
            $criteria->addSelectColumn(LarvaePeer::RLFLEXPRE);
            $criteria->addSelectColumn(LarvaePeer::RLFLEXFLEX);
            $criteria->addSelectColumn(LarvaePeer::RLFLEXPOST);
            $criteria->addSelectColumn(LarvaePeer::MEASUREMENTSPREREF);
            $criteria->addSelectColumn(LarvaePeer::MEASUREMENTSFLEXREF);
            $criteria->addSelectColumn(LarvaePeer::MEASUREMENTSPOSTREF);
            $criteria->addSelectColumn(LarvaePeer::TYPEPRE);
            $criteria->addSelectColumn(LarvaePeer::TYPEFLEX);
            $criteria->addSelectColumn(LarvaePeer::TYPEPOST);
            $criteria->addSelectColumn(LarvaePeer::COMMENT);
            $criteria->addSelectColumn(LarvaePeer::PREANALLENGTHMAXPRE);
            $criteria->addSelectColumn(LarvaePeer::PREANALLENGTHMAXFLEX);
            $criteria->addSelectColumn(LarvaePeer::PREANALLENGTHMAXPOST);
            $criteria->addSelectColumn(LarvaePeer::PREANALLENGTHMINPRE);
            $criteria->addSelectColumn(LarvaePeer::PREANALLENGTHMINFLEX);
            $criteria->addSelectColumn(LarvaePeer::PREANALLENGTHMINPOST);
            $criteria->addSelectColumn(LarvaePeer::PREANALLENGTHLITPRE);
            $criteria->addSelectColumn(LarvaePeer::PREANALLENGTHLITFLEX);
            $criteria->addSelectColumn(LarvaePeer::PREANALLENGTHLITPOST);
            $criteria->addSelectColumn(LarvaePeer::PREPECLENGTHMAXPRE);
            $criteria->addSelectColumn(LarvaePeer::PREPECLENGTHMAXFLEX);
            $criteria->addSelectColumn(LarvaePeer::PREPECLENGTHMAXPOST);
            $criteria->addSelectColumn(LarvaePeer::PREPECLENGTHMINPRE);
            $criteria->addSelectColumn(LarvaePeer::PREPECLENGTHMINFLEX);
            $criteria->addSelectColumn(LarvaePeer::PREPECLENGTHMINPOST);
            $criteria->addSelectColumn(LarvaePeer::PREPECLENGTHLITPRE);
            $criteria->addSelectColumn(LarvaePeer::PREPECLENGTHLITFLEX);
            $criteria->addSelectColumn(LarvaePeer::PREPECLENGTHLITPOST);
            $criteria->addSelectColumn(LarvaePeer::PREORBITALMAXPRE);
            $criteria->addSelectColumn(LarvaePeer::PREORBITALMAXFLEX);
            $criteria->addSelectColumn(LarvaePeer::PREORBITALMAXPOST);
            $criteria->addSelectColumn(LarvaePeer::PREORBITALMINPRE);
            $criteria->addSelectColumn(LarvaePeer::PREORBITALMINFLEX);
            $criteria->addSelectColumn(LarvaePeer::PREORBITALMINPOST);
            $criteria->addSelectColumn(LarvaePeer::PREORBITALLITPRE);
            $criteria->addSelectColumn(LarvaePeer::PREORBITALLITFLEX);
            $criteria->addSelectColumn(LarvaePeer::PREORBITALLITPOST);
            $criteria->addSelectColumn(LarvaePeer::DIAMETEROFEYEMAXPRE);
            $criteria->addSelectColumn(LarvaePeer::DIAMETEROFEYEMAXFLEX);
            $criteria->addSelectColumn(LarvaePeer::DIAMETEROFEYEMAXPOST);
            $criteria->addSelectColumn(LarvaePeer::DIAMETEROFEYEMINPRE);
            $criteria->addSelectColumn(LarvaePeer::DIAMETEROFEYEMINFLEX);
            $criteria->addSelectColumn(LarvaePeer::DIAMETEROFEYEMINPOST);
            $criteria->addSelectColumn(LarvaePeer::DIAMETEROFEYELITPRE);
            $criteria->addSelectColumn(LarvaePeer::DIAMETEROFEYELITFLEX);
            $criteria->addSelectColumn(LarvaePeer::DIAMETEROFEYELITPOST);
            $criteria->addSelectColumn(LarvaePeer::DEPTHEYEMAXPRE);
            $criteria->addSelectColumn(LarvaePeer::DEPTHEYEMAXFLEX);
            $criteria->addSelectColumn(LarvaePeer::DEPTHEYEMAXPOST);
            $criteria->addSelectColumn(LarvaePeer::DEPTHEYEMINPRE);
            $criteria->addSelectColumn(LarvaePeer::DEPTHEYEMINFLEX);
            $criteria->addSelectColumn(LarvaePeer::DEPTHEYEMINPOST);
            $criteria->addSelectColumn(LarvaePeer::DEPTHEYELITPRE);
            $criteria->addSelectColumn(LarvaePeer::DEPTHEYELITFLEX);
            $criteria->addSelectColumn(LarvaePeer::DEPTHEYELITPOST);
            $criteria->addSelectColumn(LarvaePeer::DEPTHPECTORALMAXPRE);
            $criteria->addSelectColumn(LarvaePeer::DEPTHPECTORALMAXFLEX);
            $criteria->addSelectColumn(LarvaePeer::DEPTHPECTORALMAXPOST);
            $criteria->addSelectColumn(LarvaePeer::DEPTHPECTORALMINPRE);
            $criteria->addSelectColumn(LarvaePeer::DEPTHPECTORALMINFLEX);
            $criteria->addSelectColumn(LarvaePeer::DEPTHPECTORALMINPOST);
            $criteria->addSelectColumn(LarvaePeer::DEPTHPECTORALLITPRE);
            $criteria->addSelectColumn(LarvaePeer::DEPTHPECTORALLITFLEX);
            $criteria->addSelectColumn(LarvaePeer::DEPTHPECTORALLITPOST);
            $criteria->addSelectColumn(LarvaePeer::DEPTHANUSMAXPRE);
            $criteria->addSelectColumn(LarvaePeer::DEPTHANUSMAXFLEX);
            $criteria->addSelectColumn(LarvaePeer::DEPTHANUSMAXPOST);
            $criteria->addSelectColumn(LarvaePeer::DEPTHANUSMINPRE);
            $criteria->addSelectColumn(LarvaePeer::DEPTHANUSMINFLEX);
            $criteria->addSelectColumn(LarvaePeer::DEPTHANUSMINPOST);
            $criteria->addSelectColumn(LarvaePeer::DEPTHANUSLITPRE);
            $criteria->addSelectColumn(LarvaePeer::DEPTHANUSLITFLEX);
            $criteria->addSelectColumn(LarvaePeer::DEPTHANUSLITPOST);
            $criteria->addSelectColumn(LarvaePeer::ADDCHARYOLKS);
            $criteria->addSelectColumn(LarvaePeer::ADDCHARPOSTS);
            $criteria->addSelectColumn(LarvaePeer::EASEOFID);
            $criteria->addSelectColumn(LarvaePeer::SIMILARSPECIES1);
            $criteria->addSelectColumn(LarvaePeer::SIMILARSPEC1REMARKS);
            $criteria->addSelectColumn(LarvaePeer::SIMILARSPECIES2);
            $criteria->addSelectColumn(LarvaePeer::SIMILARSPEC2REMARKS);
            $criteria->addSelectColumn(LarvaePeer::ENTERED);
            $criteria->addSelectColumn(LarvaePeer::DATEENTERED);
            $criteria->addSelectColumn(LarvaePeer::MODIFIED);
            $criteria->addSelectColumn(LarvaePeer::DATEMODIFIED);
            $criteria->addSelectColumn(LarvaePeer::EXPERT);
            $criteria->addSelectColumn(LarvaePeer::DATECHECKED);
            $criteria->addSelectColumn(LarvaePeer::TS);
        } else {
            $criteria->addSelectColumn($alias . '.autoctr');
            $criteria->addSelectColumn($alias . '.StockCode');
            $criteria->addSelectColumn($alias . '.SpecCode');
            $criteria->addSelectColumn($alias . '.LarvaeRefNo');
            $criteria->addSelectColumn($alias . '.OtherRef1');
            $criteria->addSelectColumn($alias . '.OtherRef2');
            $criteria->addSelectColumn($alias . '.LarvalArea');
            $criteria->addSelectColumn($alias . '.PlaceofDevelopment');
            $criteria->addSelectColumn($alias . '.LhMax');
            $criteria->addSelectColumn($alias . '.LBirthmaxRef');
            $criteria->addSelectColumn($alias . '.LhMin');
            $criteria->addSelectColumn($alias . '.LBirthminRef');
            $criteria->addSelectColumn($alias . '.LhMid');
            $criteria->addSelectColumn($alias . '.LBirthmodRef');
            $criteria->addSelectColumn($alias . '.PreanalLengthMaxY');
            $criteria->addSelectColumn($alias . '.PreAnmaxRef');
            $criteria->addSelectColumn($alias . '.PreanalLengthMinY');
            $criteria->addSelectColumn($alias . '.PreAnminRef');
            $criteria->addSelectColumn($alias . '.PreanalLengthModY');
            $criteria->addSelectColumn($alias . '.PreAnmodRef');
            $criteria->addSelectColumn($alias . '.FlexLengthMin');
            $criteria->addSelectColumn($alias . '.FlexLengthMod');
            $criteria->addSelectColumn($alias . '.FlexLengthMax');
            $criteria->addSelectColumn($alias . '.FlexLengthType');
            $criteria->addSelectColumn($alias . '.FlexLengthMinRef');
            $criteria->addSelectColumn($alias . '.FlexLengthModRef');
            $criteria->addSelectColumn($alias . '.FlexLengthMaxRef');
            $criteria->addSelectColumn($alias . '.TransLengthMin');
            $criteria->addSelectColumn($alias . '.TransLengthMod');
            $criteria->addSelectColumn($alias . '.TransLengthMax');
            $criteria->addSelectColumn($alias . '.TransLengthType');
            $criteria->addSelectColumn($alias . '.TransLengthMinRef');
            $criteria->addSelectColumn($alias . '.TransLengthModRef');
            $criteria->addSelectColumn($alias . '.TransLengthMaxRef');
            $criteria->addSelectColumn($alias . '.LarvalDurationMin');
            $criteria->addSelectColumn($alias . '.LarvalDurationMinRef');
            $criteria->addSelectColumn($alias . '.LarvalDurationMax');
            $criteria->addSelectColumn($alias . '.LarvalDurationMaxRef');
            $criteria->addSelectColumn($alias . '.LarvalDurationMod');
            $criteria->addSelectColumn($alias . '.LarvalDurationModRef');
            $criteria->addSelectColumn($alias . '.Shapeofyolksac');
            $criteria->addSelectColumn($alias . '.YolksacPigm');
            $criteria->addSelectColumn($alias . '.YolksacSegm');
            $criteria->addSelectColumn($alias . '.YolkRef');
            $criteria->addSelectColumn($alias . '.OilGlobules');
            $criteria->addSelectColumn($alias . '.OilGlobuleposH');
            $criteria->addSelectColumn($alias . '.OilGlobuleposV');
            $criteria->addSelectColumn($alias . '.OilGlobulePigm');
            $criteria->addSelectColumn($alias . '.RowsonTailY');
            $criteria->addSelectColumn($alias . '.OtherMelOnTailY');
            $criteria->addSelectColumn($alias . '.MelonHeadTrunkY');
            $criteria->addSelectColumn($alias . '.LyaMax');
            $criteria->addSelectColumn($alias . '.L1FeedmaxRef');
            $criteria->addSelectColumn($alias . '.LyaMin');
            $criteria->addSelectColumn($alias . '.L1FeedminRef');
            $criteria->addSelectColumn($alias . '.LyaMod');
            $criteria->addSelectColumn($alias . '.L1FeedmodRef');
            $criteria->addSelectColumn($alias . '.JanLarv');
            $criteria->addSelectColumn($alias . '.FebLarv');
            $criteria->addSelectColumn($alias . '.MarLarv');
            $criteria->addSelectColumn($alias . '.AprLarv');
            $criteria->addSelectColumn($alias . '.MayLarv');
            $criteria->addSelectColumn($alias . '.JunLarv');
            $criteria->addSelectColumn($alias . '.JulLarv');
            $criteria->addSelectColumn($alias . '.AugLarv');
            $criteria->addSelectColumn($alias . '.SepLarv');
            $criteria->addSelectColumn($alias . '.OctLarv');
            $criteria->addSelectColumn($alias . '.NovLarv');
            $criteria->addSelectColumn($alias . '.DecLarv');
            $criteria->addSelectColumn($alias . '.PresenceRef');
            $criteria->addSelectColumn($alias . '.WaterDepthMax');
            $criteria->addSelectColumn($alias . '.WaterTempMax');
            $criteria->addSelectColumn($alias . '.SalinityMax');
            $criteria->addSelectColumn($alias . '.pH');
            $criteria->addSelectColumn($alias . '.OxygenMax');
            $criteria->addSelectColumn($alias . '.WatermaxRef');
            $criteria->addSelectColumn($alias . '.WaterDepthMin');
            $criteria->addSelectColumn($alias . '.WaterTempMin');
            $criteria->addSelectColumn($alias . '.SalinityMin');
            $criteria->addSelectColumn($alias . '.pHMin');
            $criteria->addSelectColumn($alias . '.OxygenMin');
            $criteria->addSelectColumn($alias . '.WaterminRef');
            $criteria->addSelectColumn($alias . '.WaterDepthMod');
            $criteria->addSelectColumn($alias . '.WaterTempMod');
            $criteria->addSelectColumn($alias . '.SalinityMod');
            $criteria->addSelectColumn($alias . '.pHMod');
            $criteria->addSelectColumn($alias . '.OxygenMod');
            $criteria->addSelectColumn($alias . '.WatermodRef');
            $criteria->addSelectColumn($alias . '.StrikingFeature');
            $criteria->addSelectColumn($alias . '.LarvaPic');
            $criteria->addSelectColumn($alias . '.StrikingShapeLat');
            $criteria->addSelectColumn($alias . '.StrikingShapeDors');
            $criteria->addSelectColumn($alias . '.BodyForm');
            $criteria->addSelectColumn($alias . '.ShapeofGut');
            $criteria->addSelectColumn($alias . '.GasBladderEarly');
            $criteria->addSelectColumn($alias . '.GasBladderLate');
            $criteria->addSelectColumn($alias . '.SpinalArmatureEarl');
            $criteria->addSelectColumn($alias . '.SpinalArmatureLate');
            $criteria->addSelectColumn($alias . '.RowsonTailE');
            $criteria->addSelectColumn($alias . '.OtherMelonTailE');
            $criteria->addSelectColumn($alias . '.MelonHeadTrunkE');
            $criteria->addSelectColumn($alias . '.RowsonTaill');
            $criteria->addSelectColumn($alias . '.OtherMelonTaill');
            $criteria->addSelectColumn($alias . '.MelonHeadTrunkl');
            $criteria->addSelectColumn($alias . '.UrostyleRegion');
            $criteria->addSelectColumn($alias . '.UrostyleRegionLate');
            $criteria->addSelectColumn($alias . '.Peritoneum');
            $criteria->addSelectColumn($alias . '.PectoralsI');
            $criteria->addSelectColumn($alias . '.PectoralsII');
            $criteria->addSelectColumn($alias . '.PelvicsI');
            $criteria->addSelectColumn($alias . '.PelvicsII');
            $criteria->addSelectColumn($alias . '.MyomeresMax');
            $criteria->addSelectColumn($alias . '.MyomeresMin');
            $criteria->addSelectColumn($alias . '.MyomeresMod');
            $criteria->addSelectColumn($alias . '.MyomVert');
            $criteria->addSelectColumn($alias . '.TotMyomRef');
            $criteria->addSelectColumn($alias . '.MyomeresMaxPrean');
            $criteria->addSelectColumn($alias . '.MyomeresMinPrean');
            $criteria->addSelectColumn($alias . '.MyomeresModPrean');
            $criteria->addSelectColumn($alias . '.MyomVert2');
            $criteria->addSelectColumn($alias . '.PreAnMyoRef');
            $criteria->addSelectColumn($alias . '.RLLatePre');
            $criteria->addSelectColumn($alias . '.RLLateFlex');
            $criteria->addSelectColumn($alias . '.RLLatePost');
            $criteria->addSelectColumn($alias . '.RLEarlyPre');
            $criteria->addSelectColumn($alias . '.RLEarlyFlex');
            $criteria->addSelectColumn($alias . '.RLEarlyPost');
            $criteria->addSelectColumn($alias . '.RLFlexPre');
            $criteria->addSelectColumn($alias . '.RLFlexFlex');
            $criteria->addSelectColumn($alias . '.RLFlexPost');
            $criteria->addSelectColumn($alias . '.MeasurementsPreRef');
            $criteria->addSelectColumn($alias . '.MeasurementsFlexRef');
            $criteria->addSelectColumn($alias . '.MeasurementsPostRef');
            $criteria->addSelectColumn($alias . '.TypePre');
            $criteria->addSelectColumn($alias . '.TypeFlex');
            $criteria->addSelectColumn($alias . '.TypePost');
            $criteria->addSelectColumn($alias . '.comment');
            $criteria->addSelectColumn($alias . '.PreanalLengthMaxPre');
            $criteria->addSelectColumn($alias . '.PreanalLengthMaxFlex');
            $criteria->addSelectColumn($alias . '.PreanalLengthMaxPost');
            $criteria->addSelectColumn($alias . '.PreanalLengthMinPre');
            $criteria->addSelectColumn($alias . '.PreanalLengthMinFlex');
            $criteria->addSelectColumn($alias . '.PreanalLengthMinPost');
            $criteria->addSelectColumn($alias . '.PreanalLengthLitPre');
            $criteria->addSelectColumn($alias . '.PreanalLengthLitFlex');
            $criteria->addSelectColumn($alias . '.PreanalLengthLitPost');
            $criteria->addSelectColumn($alias . '.PrepecLengthMaxPre');
            $criteria->addSelectColumn($alias . '.PrepecLengthMaxFlex');
            $criteria->addSelectColumn($alias . '.PrepecLengthMaxPost');
            $criteria->addSelectColumn($alias . '.PrepecLengthMinPre');
            $criteria->addSelectColumn($alias . '.PrepecLengthMinFlex');
            $criteria->addSelectColumn($alias . '.PrepecLengthMinPost');
            $criteria->addSelectColumn($alias . '.PrepecLengthLitPre');
            $criteria->addSelectColumn($alias . '.PrepecLengthLitFlex');
            $criteria->addSelectColumn($alias . '.PrepecLengthLitPost');
            $criteria->addSelectColumn($alias . '.PreorbitalMaxPre');
            $criteria->addSelectColumn($alias . '.PreorbitalMaxFlex');
            $criteria->addSelectColumn($alias . '.PreorbitalMaxPost');
            $criteria->addSelectColumn($alias . '.PreorbitalMinPre');
            $criteria->addSelectColumn($alias . '.PreorbitalMinFlex');
            $criteria->addSelectColumn($alias . '.PreorbitalMinPost');
            $criteria->addSelectColumn($alias . '.PreorbitalLitPre');
            $criteria->addSelectColumn($alias . '.PreorbitalLitFlex');
            $criteria->addSelectColumn($alias . '.PreorbitalLitPost');
            $criteria->addSelectColumn($alias . '.DiameterofEyeMaxPre');
            $criteria->addSelectColumn($alias . '.DiameterofEyeMaxFlex');
            $criteria->addSelectColumn($alias . '.DiameterofEyeMaxPost');
            $criteria->addSelectColumn($alias . '.DiameterofEyeMinPre');
            $criteria->addSelectColumn($alias . '.DiameterofEyeMinFlex');
            $criteria->addSelectColumn($alias . '.DiameterofEyeMinPost');
            $criteria->addSelectColumn($alias . '.DiameterofEyeLitPre');
            $criteria->addSelectColumn($alias . '.DiameterofEyeLitFlex');
            $criteria->addSelectColumn($alias . '.DiameterofEyeLitPost');
            $criteria->addSelectColumn($alias . '.DepthEyeMaxPre');
            $criteria->addSelectColumn($alias . '.DepthEyeMaxFlex');
            $criteria->addSelectColumn($alias . '.DepthEyeMaxPost');
            $criteria->addSelectColumn($alias . '.DepthEyeMinPre');
            $criteria->addSelectColumn($alias . '.DepthEyeMinFlex');
            $criteria->addSelectColumn($alias . '.DepthEyeMinPost');
            $criteria->addSelectColumn($alias . '.DepthEyeLitPre');
            $criteria->addSelectColumn($alias . '.DepthEyeLitFlex');
            $criteria->addSelectColumn($alias . '.DepthEyeLitPost');
            $criteria->addSelectColumn($alias . '.DepthPectoralMaxPre');
            $criteria->addSelectColumn($alias . '.DepthPectoralMaxFlex');
            $criteria->addSelectColumn($alias . '.DepthPectoralMaxPost');
            $criteria->addSelectColumn($alias . '.DepthPectoralMinPre');
            $criteria->addSelectColumn($alias . '.DepthPectoralMinFlex');
            $criteria->addSelectColumn($alias . '.DepthPectoralMinPost');
            $criteria->addSelectColumn($alias . '.DepthPectoralLitPre');
            $criteria->addSelectColumn($alias . '.DepthPectoralLitFlex');
            $criteria->addSelectColumn($alias . '.DepthPectoralLitPost');
            $criteria->addSelectColumn($alias . '.DepthAnusMaxPre');
            $criteria->addSelectColumn($alias . '.DepthAnusMaxFlex');
            $criteria->addSelectColumn($alias . '.DepthAnusMaxPost');
            $criteria->addSelectColumn($alias . '.DepthAnusMinPre');
            $criteria->addSelectColumn($alias . '.DepthAnusMinFlex');
            $criteria->addSelectColumn($alias . '.DepthAnusMinPost');
            $criteria->addSelectColumn($alias . '.DepthAnusLitPre');
            $criteria->addSelectColumn($alias . '.DepthAnusLitFlex');
            $criteria->addSelectColumn($alias . '.DepthAnusLitPost');
            $criteria->addSelectColumn($alias . '.AddCharYolks');
            $criteria->addSelectColumn($alias . '.AddCharPosts');
            $criteria->addSelectColumn($alias . '.EaseofID');
            $criteria->addSelectColumn($alias . '.SimilarSpecies1');
            $criteria->addSelectColumn($alias . '.SimilarSpec1Remarks');
            $criteria->addSelectColumn($alias . '.SimilarSpecies2');
            $criteria->addSelectColumn($alias . '.SimilarSpec2Remarks');
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
        $criteria->setPrimaryTableName(LarvaePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            LarvaePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(LarvaePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(LarvaePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Larvae
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = LarvaePeer::doSelect($critcopy, $con);
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
        return LarvaePeer::populateObjects(LarvaePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(LarvaePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            LarvaePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(LarvaePeer::DATABASE_NAME);

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
     * @param Larvae $obj A Larvae object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getStockcode(), (string) $obj->getLarvalarea()));
            } // if key === null
            LarvaePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Larvae object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Larvae) {
                $key = serialize(array((string) $value->getStockcode(), (string) $value->getLarvalarea()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Larvae object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(LarvaePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Larvae Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(LarvaePeer::$instances[$key])) {
                return LarvaePeer::$instances[$key];
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
        foreach (LarvaePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        LarvaePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to larvae
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
        if ($row[$startcol + 1] === null && $row[$startcol + 6] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol + 1], (string) $row[$startcol + 6]));
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

        return array((int) $row[$startcol + 1], (string) $row[$startcol + 6]);
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
        $cls = LarvaePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = LarvaePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = LarvaePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                LarvaePeer::addInstanceToPool($obj, $key);
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
     * @return array (Larvae object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = LarvaePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = LarvaePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + LarvaePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = LarvaePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            LarvaePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(LarvaePeer::DATABASE_NAME)->getTable(LarvaePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseLarvaePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseLarvaePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \LarvaeTableMap());
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
        return LarvaePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Larvae or Criteria object.
     *
     * @param      mixed $values Criteria or Larvae object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LarvaePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Larvae object
        }


        // Set the correct dbName
        $criteria->setDbName(LarvaePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Larvae or Criteria object.
     *
     * @param      mixed $values Criteria or Larvae object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LarvaePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(LarvaePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(LarvaePeer::STOCKCODE);
            $value = $criteria->remove(LarvaePeer::STOCKCODE);
            if ($value) {
                $selectCriteria->add(LarvaePeer::STOCKCODE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(LarvaePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(LarvaePeer::LARVALAREA);
            $value = $criteria->remove(LarvaePeer::LARVALAREA);
            if ($value) {
                $selectCriteria->add(LarvaePeer::LARVALAREA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(LarvaePeer::TABLE_NAME);
            }

        } else { // $values is Larvae object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(LarvaePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the larvae table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(LarvaePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(LarvaePeer::TABLE_NAME, $con, LarvaePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            LarvaePeer::clearInstancePool();
            LarvaePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Larvae or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Larvae object or primary key or array of primary keys
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
            $con = Propel::getConnection(LarvaePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            LarvaePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Larvae) { // it's a model object
            // invalidate the cache for this single object
            LarvaePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(LarvaePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(LarvaePeer::STOCKCODE, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(LarvaePeer::LARVALAREA, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                LarvaePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(LarvaePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            LarvaePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Larvae object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Larvae $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(LarvaePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(LarvaePeer::TABLE_NAME);

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

        return BasePeer::doValidate(LarvaePeer::DATABASE_NAME, LarvaePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $stockcode
     * @param   string $larvalarea
     * @param      PropelPDO $con
     * @return Larvae
     */
    public static function retrieveByPK($stockcode, $larvalarea, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $stockcode, (string) $larvalarea));
         if (null !== ($obj = LarvaePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(LarvaePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(LarvaePeer::DATABASE_NAME);
        $criteria->add(LarvaePeer::STOCKCODE, $stockcode);
        $criteria->add(LarvaePeer::LARVALAREA, $larvalarea);
        $v = LarvaePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseLarvaePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseLarvaePeer::buildTableMap();

