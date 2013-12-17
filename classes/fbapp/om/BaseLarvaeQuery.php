<?php


/**
 * Base class that represents a query for the 'larvae' table.
 *
 *
 *
 * @method LarvaeQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method LarvaeQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method LarvaeQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method LarvaeQuery orderByLarvaerefno($order = Criteria::ASC) Order by the LarvaeRefNo column
 * @method LarvaeQuery orderByOtherref1($order = Criteria::ASC) Order by the OtherRef1 column
 * @method LarvaeQuery orderByOtherref2($order = Criteria::ASC) Order by the OtherRef2 column
 * @method LarvaeQuery orderByLarvalarea($order = Criteria::ASC) Order by the LarvalArea column
 * @method LarvaeQuery orderByPlaceofdevelopment($order = Criteria::ASC) Order by the PlaceofDevelopment column
 * @method LarvaeQuery orderByLhmax($order = Criteria::ASC) Order by the LhMax column
 * @method LarvaeQuery orderByLbirthmaxref($order = Criteria::ASC) Order by the LBirthmaxRef column
 * @method LarvaeQuery orderByLhmin($order = Criteria::ASC) Order by the LhMin column
 * @method LarvaeQuery orderByLbirthminref($order = Criteria::ASC) Order by the LBirthminRef column
 * @method LarvaeQuery orderByLhmid($order = Criteria::ASC) Order by the LhMid column
 * @method LarvaeQuery orderByLbirthmodref($order = Criteria::ASC) Order by the LBirthmodRef column
 * @method LarvaeQuery orderByPreanallengthmaxy($order = Criteria::ASC) Order by the PreanalLengthMaxY column
 * @method LarvaeQuery orderByPreanmaxref($order = Criteria::ASC) Order by the PreAnmaxRef column
 * @method LarvaeQuery orderByPreanallengthminy($order = Criteria::ASC) Order by the PreanalLengthMinY column
 * @method LarvaeQuery orderByPreanminref($order = Criteria::ASC) Order by the PreAnminRef column
 * @method LarvaeQuery orderByPreanallengthmody($order = Criteria::ASC) Order by the PreanalLengthModY column
 * @method LarvaeQuery orderByPreanmodref($order = Criteria::ASC) Order by the PreAnmodRef column
 * @method LarvaeQuery orderByFlexlengthmin($order = Criteria::ASC) Order by the FlexLengthMin column
 * @method LarvaeQuery orderByFlexlengthmod($order = Criteria::ASC) Order by the FlexLengthMod column
 * @method LarvaeQuery orderByFlexlengthmax($order = Criteria::ASC) Order by the FlexLengthMax column
 * @method LarvaeQuery orderByFlexlengthtype($order = Criteria::ASC) Order by the FlexLengthType column
 * @method LarvaeQuery orderByFlexlengthminref($order = Criteria::ASC) Order by the FlexLengthMinRef column
 * @method LarvaeQuery orderByFlexlengthmodref($order = Criteria::ASC) Order by the FlexLengthModRef column
 * @method LarvaeQuery orderByFlexlengthmaxref($order = Criteria::ASC) Order by the FlexLengthMaxRef column
 * @method LarvaeQuery orderByTranslengthmin($order = Criteria::ASC) Order by the TransLengthMin column
 * @method LarvaeQuery orderByTranslengthmod($order = Criteria::ASC) Order by the TransLengthMod column
 * @method LarvaeQuery orderByTranslengthmax($order = Criteria::ASC) Order by the TransLengthMax column
 * @method LarvaeQuery orderByTranslengthtype($order = Criteria::ASC) Order by the TransLengthType column
 * @method LarvaeQuery orderByTranslengthminref($order = Criteria::ASC) Order by the TransLengthMinRef column
 * @method LarvaeQuery orderByTranslengthmodref($order = Criteria::ASC) Order by the TransLengthModRef column
 * @method LarvaeQuery orderByTranslengthmaxref($order = Criteria::ASC) Order by the TransLengthMaxRef column
 * @method LarvaeQuery orderByLarvaldurationmin($order = Criteria::ASC) Order by the LarvalDurationMin column
 * @method LarvaeQuery orderByLarvaldurationminref($order = Criteria::ASC) Order by the LarvalDurationMinRef column
 * @method LarvaeQuery orderByLarvaldurationmax($order = Criteria::ASC) Order by the LarvalDurationMax column
 * @method LarvaeQuery orderByLarvaldurationmaxref($order = Criteria::ASC) Order by the LarvalDurationMaxRef column
 * @method LarvaeQuery orderByLarvaldurationmod($order = Criteria::ASC) Order by the LarvalDurationMod column
 * @method LarvaeQuery orderByLarvaldurationmodref($order = Criteria::ASC) Order by the LarvalDurationModRef column
 * @method LarvaeQuery orderByShapeofyolksac($order = Criteria::ASC) Order by the Shapeofyolksac column
 * @method LarvaeQuery orderByYolksacpigm($order = Criteria::ASC) Order by the YolksacPigm column
 * @method LarvaeQuery orderByYolksacsegm($order = Criteria::ASC) Order by the YolksacSegm column
 * @method LarvaeQuery orderByYolkref($order = Criteria::ASC) Order by the YolkRef column
 * @method LarvaeQuery orderByOilglobules($order = Criteria::ASC) Order by the OilGlobules column
 * @method LarvaeQuery orderByOilglobuleposh($order = Criteria::ASC) Order by the OilGlobuleposH column
 * @method LarvaeQuery orderByOilglobuleposv($order = Criteria::ASC) Order by the OilGlobuleposV column
 * @method LarvaeQuery orderByOilglobulepigm($order = Criteria::ASC) Order by the OilGlobulePigm column
 * @method LarvaeQuery orderByRowsontaily($order = Criteria::ASC) Order by the RowsonTailY column
 * @method LarvaeQuery orderByOthermelontaily($order = Criteria::ASC) Order by the OtherMelOnTailY column
 * @method LarvaeQuery orderByMelonheadtrunky($order = Criteria::ASC) Order by the MelonHeadTrunkY column
 * @method LarvaeQuery orderByLyamax($order = Criteria::ASC) Order by the LyaMax column
 * @method LarvaeQuery orderByL1feedmaxref($order = Criteria::ASC) Order by the L1FeedmaxRef column
 * @method LarvaeQuery orderByLyamin($order = Criteria::ASC) Order by the LyaMin column
 * @method LarvaeQuery orderByL1feedminref($order = Criteria::ASC) Order by the L1FeedminRef column
 * @method LarvaeQuery orderByLyamod($order = Criteria::ASC) Order by the LyaMod column
 * @method LarvaeQuery orderByL1feedmodref($order = Criteria::ASC) Order by the L1FeedmodRef column
 * @method LarvaeQuery orderByJanlarv($order = Criteria::ASC) Order by the JanLarv column
 * @method LarvaeQuery orderByFeblarv($order = Criteria::ASC) Order by the FebLarv column
 * @method LarvaeQuery orderByMarlarv($order = Criteria::ASC) Order by the MarLarv column
 * @method LarvaeQuery orderByAprlarv($order = Criteria::ASC) Order by the AprLarv column
 * @method LarvaeQuery orderByMaylarv($order = Criteria::ASC) Order by the MayLarv column
 * @method LarvaeQuery orderByJunlarv($order = Criteria::ASC) Order by the JunLarv column
 * @method LarvaeQuery orderByJullarv($order = Criteria::ASC) Order by the JulLarv column
 * @method LarvaeQuery orderByAuglarv($order = Criteria::ASC) Order by the AugLarv column
 * @method LarvaeQuery orderBySeplarv($order = Criteria::ASC) Order by the SepLarv column
 * @method LarvaeQuery orderByOctlarv($order = Criteria::ASC) Order by the OctLarv column
 * @method LarvaeQuery orderByNovlarv($order = Criteria::ASC) Order by the NovLarv column
 * @method LarvaeQuery orderByDeclarv($order = Criteria::ASC) Order by the DecLarv column
 * @method LarvaeQuery orderByPresenceref($order = Criteria::ASC) Order by the PresenceRef column
 * @method LarvaeQuery orderByWaterdepthmax($order = Criteria::ASC) Order by the WaterDepthMax column
 * @method LarvaeQuery orderByWatertempmax($order = Criteria::ASC) Order by the WaterTempMax column
 * @method LarvaeQuery orderBySalinitymax($order = Criteria::ASC) Order by the SalinityMax column
 * @method LarvaeQuery orderByPh($order = Criteria::ASC) Order by the pH column
 * @method LarvaeQuery orderByOxygenmax($order = Criteria::ASC) Order by the OxygenMax column
 * @method LarvaeQuery orderByWatermaxref($order = Criteria::ASC) Order by the WatermaxRef column
 * @method LarvaeQuery orderByWaterdepthmin($order = Criteria::ASC) Order by the WaterDepthMin column
 * @method LarvaeQuery orderByWatertempmin($order = Criteria::ASC) Order by the WaterTempMin column
 * @method LarvaeQuery orderBySalinitymin($order = Criteria::ASC) Order by the SalinityMin column
 * @method LarvaeQuery orderByPhmin($order = Criteria::ASC) Order by the pHMin column
 * @method LarvaeQuery orderByOxygenmin($order = Criteria::ASC) Order by the OxygenMin column
 * @method LarvaeQuery orderByWaterminref($order = Criteria::ASC) Order by the WaterminRef column
 * @method LarvaeQuery orderByWaterdepthmod($order = Criteria::ASC) Order by the WaterDepthMod column
 * @method LarvaeQuery orderByWatertempmod($order = Criteria::ASC) Order by the WaterTempMod column
 * @method LarvaeQuery orderBySalinitymod($order = Criteria::ASC) Order by the SalinityMod column
 * @method LarvaeQuery orderByPhmod($order = Criteria::ASC) Order by the pHMod column
 * @method LarvaeQuery orderByOxygenmod($order = Criteria::ASC) Order by the OxygenMod column
 * @method LarvaeQuery orderByWatermodref($order = Criteria::ASC) Order by the WatermodRef column
 * @method LarvaeQuery orderByStrikingfeature($order = Criteria::ASC) Order by the StrikingFeature column
 * @method LarvaeQuery orderByLarvapic($order = Criteria::ASC) Order by the LarvaPic column
 * @method LarvaeQuery orderByStrikingshapelat($order = Criteria::ASC) Order by the StrikingShapeLat column
 * @method LarvaeQuery orderByStrikingshapedors($order = Criteria::ASC) Order by the StrikingShapeDors column
 * @method LarvaeQuery orderByBodyform($order = Criteria::ASC) Order by the BodyForm column
 * @method LarvaeQuery orderByShapeofgut($order = Criteria::ASC) Order by the ShapeofGut column
 * @method LarvaeQuery orderByGasbladderearly($order = Criteria::ASC) Order by the GasBladderEarly column
 * @method LarvaeQuery orderByGasbladderlate($order = Criteria::ASC) Order by the GasBladderLate column
 * @method LarvaeQuery orderBySpinalarmatureearl($order = Criteria::ASC) Order by the SpinalArmatureEarl column
 * @method LarvaeQuery orderBySpinalarmaturelate($order = Criteria::ASC) Order by the SpinalArmatureLate column
 * @method LarvaeQuery orderByRowsontaile($order = Criteria::ASC) Order by the RowsonTailE column
 * @method LarvaeQuery orderByOthermelontaile($order = Criteria::ASC) Order by the OtherMelonTailE column
 * @method LarvaeQuery orderByMelonheadtrunke($order = Criteria::ASC) Order by the MelonHeadTrunkE column
 * @method LarvaeQuery orderByRowsontaill($order = Criteria::ASC) Order by the RowsonTaill column
 * @method LarvaeQuery orderByOthermelontaill($order = Criteria::ASC) Order by the OtherMelonTaill column
 * @method LarvaeQuery orderByMelonheadtrunkl($order = Criteria::ASC) Order by the MelonHeadTrunkl column
 * @method LarvaeQuery orderByUrostyleregion($order = Criteria::ASC) Order by the UrostyleRegion column
 * @method LarvaeQuery orderByUrostyleregionlate($order = Criteria::ASC) Order by the UrostyleRegionLate column
 * @method LarvaeQuery orderByPeritoneum($order = Criteria::ASC) Order by the Peritoneum column
 * @method LarvaeQuery orderByPectoralsi($order = Criteria::ASC) Order by the PectoralsI column
 * @method LarvaeQuery orderByPectoralsii($order = Criteria::ASC) Order by the PectoralsII column
 * @method LarvaeQuery orderByPelvicsi($order = Criteria::ASC) Order by the PelvicsI column
 * @method LarvaeQuery orderByPelvicsii($order = Criteria::ASC) Order by the PelvicsII column
 * @method LarvaeQuery orderByMyomeresmax($order = Criteria::ASC) Order by the MyomeresMax column
 * @method LarvaeQuery orderByMyomeresmin($order = Criteria::ASC) Order by the MyomeresMin column
 * @method LarvaeQuery orderByMyomeresmod($order = Criteria::ASC) Order by the MyomeresMod column
 * @method LarvaeQuery orderByMyomvert($order = Criteria::ASC) Order by the MyomVert column
 * @method LarvaeQuery orderByTotmyomref($order = Criteria::ASC) Order by the TotMyomRef column
 * @method LarvaeQuery orderByMyomeresmaxprean($order = Criteria::ASC) Order by the MyomeresMaxPrean column
 * @method LarvaeQuery orderByMyomeresminprean($order = Criteria::ASC) Order by the MyomeresMinPrean column
 * @method LarvaeQuery orderByMyomeresmodprean($order = Criteria::ASC) Order by the MyomeresModPrean column
 * @method LarvaeQuery orderByMyomvert2($order = Criteria::ASC) Order by the MyomVert2 column
 * @method LarvaeQuery orderByPreanmyoref($order = Criteria::ASC) Order by the PreAnMyoRef column
 * @method LarvaeQuery orderByRllatepre($order = Criteria::ASC) Order by the RLLatePre column
 * @method LarvaeQuery orderByRllateflex($order = Criteria::ASC) Order by the RLLateFlex column
 * @method LarvaeQuery orderByRllatepost($order = Criteria::ASC) Order by the RLLatePost column
 * @method LarvaeQuery orderByRlearlypre($order = Criteria::ASC) Order by the RLEarlyPre column
 * @method LarvaeQuery orderByRlearlyflex($order = Criteria::ASC) Order by the RLEarlyFlex column
 * @method LarvaeQuery orderByRlearlypost($order = Criteria::ASC) Order by the RLEarlyPost column
 * @method LarvaeQuery orderByRlflexpre($order = Criteria::ASC) Order by the RLFlexPre column
 * @method LarvaeQuery orderByRlflexflex($order = Criteria::ASC) Order by the RLFlexFlex column
 * @method LarvaeQuery orderByRlflexpost($order = Criteria::ASC) Order by the RLFlexPost column
 * @method LarvaeQuery orderByMeasurementspreref($order = Criteria::ASC) Order by the MeasurementsPreRef column
 * @method LarvaeQuery orderByMeasurementsflexref($order = Criteria::ASC) Order by the MeasurementsFlexRef column
 * @method LarvaeQuery orderByMeasurementspostref($order = Criteria::ASC) Order by the MeasurementsPostRef column
 * @method LarvaeQuery orderByTypepre($order = Criteria::ASC) Order by the TypePre column
 * @method LarvaeQuery orderByTypeflex($order = Criteria::ASC) Order by the TypeFlex column
 * @method LarvaeQuery orderByTypepost($order = Criteria::ASC) Order by the TypePost column
 * @method LarvaeQuery orderByComment($order = Criteria::ASC) Order by the comment column
 * @method LarvaeQuery orderByPreanallengthmaxpre($order = Criteria::ASC) Order by the PreanalLengthMaxPre column
 * @method LarvaeQuery orderByPreanallengthmaxflex($order = Criteria::ASC) Order by the PreanalLengthMaxFlex column
 * @method LarvaeQuery orderByPreanallengthmaxpost($order = Criteria::ASC) Order by the PreanalLengthMaxPost column
 * @method LarvaeQuery orderByPreanallengthminpre($order = Criteria::ASC) Order by the PreanalLengthMinPre column
 * @method LarvaeQuery orderByPreanallengthminflex($order = Criteria::ASC) Order by the PreanalLengthMinFlex column
 * @method LarvaeQuery orderByPreanallengthminpost($order = Criteria::ASC) Order by the PreanalLengthMinPost column
 * @method LarvaeQuery orderByPreanallengthlitpre($order = Criteria::ASC) Order by the PreanalLengthLitPre column
 * @method LarvaeQuery orderByPreanallengthlitflex($order = Criteria::ASC) Order by the PreanalLengthLitFlex column
 * @method LarvaeQuery orderByPreanallengthlitpost($order = Criteria::ASC) Order by the PreanalLengthLitPost column
 * @method LarvaeQuery orderByPrepeclengthmaxpre($order = Criteria::ASC) Order by the PrepecLengthMaxPre column
 * @method LarvaeQuery orderByPrepeclengthmaxflex($order = Criteria::ASC) Order by the PrepecLengthMaxFlex column
 * @method LarvaeQuery orderByPrepeclengthmaxpost($order = Criteria::ASC) Order by the PrepecLengthMaxPost column
 * @method LarvaeQuery orderByPrepeclengthminpre($order = Criteria::ASC) Order by the PrepecLengthMinPre column
 * @method LarvaeQuery orderByPrepeclengthminflex($order = Criteria::ASC) Order by the PrepecLengthMinFlex column
 * @method LarvaeQuery orderByPrepeclengthminpost($order = Criteria::ASC) Order by the PrepecLengthMinPost column
 * @method LarvaeQuery orderByPrepeclengthlitpre($order = Criteria::ASC) Order by the PrepecLengthLitPre column
 * @method LarvaeQuery orderByPrepeclengthlitflex($order = Criteria::ASC) Order by the PrepecLengthLitFlex column
 * @method LarvaeQuery orderByPrepeclengthlitpost($order = Criteria::ASC) Order by the PrepecLengthLitPost column
 * @method LarvaeQuery orderByPreorbitalmaxpre($order = Criteria::ASC) Order by the PreorbitalMaxPre column
 * @method LarvaeQuery orderByPreorbitalmaxflex($order = Criteria::ASC) Order by the PreorbitalMaxFlex column
 * @method LarvaeQuery orderByPreorbitalmaxpost($order = Criteria::ASC) Order by the PreorbitalMaxPost column
 * @method LarvaeQuery orderByPreorbitalminpre($order = Criteria::ASC) Order by the PreorbitalMinPre column
 * @method LarvaeQuery orderByPreorbitalminflex($order = Criteria::ASC) Order by the PreorbitalMinFlex column
 * @method LarvaeQuery orderByPreorbitalminpost($order = Criteria::ASC) Order by the PreorbitalMinPost column
 * @method LarvaeQuery orderByPreorbitallitpre($order = Criteria::ASC) Order by the PreorbitalLitPre column
 * @method LarvaeQuery orderByPreorbitallitflex($order = Criteria::ASC) Order by the PreorbitalLitFlex column
 * @method LarvaeQuery orderByPreorbitallitpost($order = Criteria::ASC) Order by the PreorbitalLitPost column
 * @method LarvaeQuery orderByDiameterofeyemaxpre($order = Criteria::ASC) Order by the DiameterofEyeMaxPre column
 * @method LarvaeQuery orderByDiameterofeyemaxflex($order = Criteria::ASC) Order by the DiameterofEyeMaxFlex column
 * @method LarvaeQuery orderByDiameterofeyemaxpost($order = Criteria::ASC) Order by the DiameterofEyeMaxPost column
 * @method LarvaeQuery orderByDiameterofeyeminpre($order = Criteria::ASC) Order by the DiameterofEyeMinPre column
 * @method LarvaeQuery orderByDiameterofeyeminflex($order = Criteria::ASC) Order by the DiameterofEyeMinFlex column
 * @method LarvaeQuery orderByDiameterofeyeminpost($order = Criteria::ASC) Order by the DiameterofEyeMinPost column
 * @method LarvaeQuery orderByDiameterofeyelitpre($order = Criteria::ASC) Order by the DiameterofEyeLitPre column
 * @method LarvaeQuery orderByDiameterofeyelitflex($order = Criteria::ASC) Order by the DiameterofEyeLitFlex column
 * @method LarvaeQuery orderByDiameterofeyelitpost($order = Criteria::ASC) Order by the DiameterofEyeLitPost column
 * @method LarvaeQuery orderByDeptheyemaxpre($order = Criteria::ASC) Order by the DepthEyeMaxPre column
 * @method LarvaeQuery orderByDeptheyemaxflex($order = Criteria::ASC) Order by the DepthEyeMaxFlex column
 * @method LarvaeQuery orderByDeptheyemaxpost($order = Criteria::ASC) Order by the DepthEyeMaxPost column
 * @method LarvaeQuery orderByDeptheyeminpre($order = Criteria::ASC) Order by the DepthEyeMinPre column
 * @method LarvaeQuery orderByDeptheyeminflex($order = Criteria::ASC) Order by the DepthEyeMinFlex column
 * @method LarvaeQuery orderByDeptheyeminpost($order = Criteria::ASC) Order by the DepthEyeMinPost column
 * @method LarvaeQuery orderByDeptheyelitpre($order = Criteria::ASC) Order by the DepthEyeLitPre column
 * @method LarvaeQuery orderByDeptheyelitflex($order = Criteria::ASC) Order by the DepthEyeLitFlex column
 * @method LarvaeQuery orderByDeptheyelitpost($order = Criteria::ASC) Order by the DepthEyeLitPost column
 * @method LarvaeQuery orderByDepthpectoralmaxpre($order = Criteria::ASC) Order by the DepthPectoralMaxPre column
 * @method LarvaeQuery orderByDepthpectoralmaxflex($order = Criteria::ASC) Order by the DepthPectoralMaxFlex column
 * @method LarvaeQuery orderByDepthpectoralmaxpost($order = Criteria::ASC) Order by the DepthPectoralMaxPost column
 * @method LarvaeQuery orderByDepthpectoralminpre($order = Criteria::ASC) Order by the DepthPectoralMinPre column
 * @method LarvaeQuery orderByDepthpectoralminflex($order = Criteria::ASC) Order by the DepthPectoralMinFlex column
 * @method LarvaeQuery orderByDepthpectoralminpost($order = Criteria::ASC) Order by the DepthPectoralMinPost column
 * @method LarvaeQuery orderByDepthpectorallitpre($order = Criteria::ASC) Order by the DepthPectoralLitPre column
 * @method LarvaeQuery orderByDepthpectorallitflex($order = Criteria::ASC) Order by the DepthPectoralLitFlex column
 * @method LarvaeQuery orderByDepthpectorallitpost($order = Criteria::ASC) Order by the DepthPectoralLitPost column
 * @method LarvaeQuery orderByDepthanusmaxpre($order = Criteria::ASC) Order by the DepthAnusMaxPre column
 * @method LarvaeQuery orderByDepthanusmaxflex($order = Criteria::ASC) Order by the DepthAnusMaxFlex column
 * @method LarvaeQuery orderByDepthanusmaxpost($order = Criteria::ASC) Order by the DepthAnusMaxPost column
 * @method LarvaeQuery orderByDepthanusminpre($order = Criteria::ASC) Order by the DepthAnusMinPre column
 * @method LarvaeQuery orderByDepthanusminflex($order = Criteria::ASC) Order by the DepthAnusMinFlex column
 * @method LarvaeQuery orderByDepthanusminpost($order = Criteria::ASC) Order by the DepthAnusMinPost column
 * @method LarvaeQuery orderByDepthanuslitpre($order = Criteria::ASC) Order by the DepthAnusLitPre column
 * @method LarvaeQuery orderByDepthanuslitflex($order = Criteria::ASC) Order by the DepthAnusLitFlex column
 * @method LarvaeQuery orderByDepthanuslitpost($order = Criteria::ASC) Order by the DepthAnusLitPost column
 * @method LarvaeQuery orderByAddcharyolks($order = Criteria::ASC) Order by the AddCharYolks column
 * @method LarvaeQuery orderByAddcharposts($order = Criteria::ASC) Order by the AddCharPosts column
 * @method LarvaeQuery orderByEaseofid($order = Criteria::ASC) Order by the EaseofID column
 * @method LarvaeQuery orderBySimilarspecies1($order = Criteria::ASC) Order by the SimilarSpecies1 column
 * @method LarvaeQuery orderBySimilarspec1remarks($order = Criteria::ASC) Order by the SimilarSpec1Remarks column
 * @method LarvaeQuery orderBySimilarspecies2($order = Criteria::ASC) Order by the SimilarSpecies2 column
 * @method LarvaeQuery orderBySimilarspec2remarks($order = Criteria::ASC) Order by the SimilarSpec2Remarks column
 * @method LarvaeQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method LarvaeQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method LarvaeQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method LarvaeQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method LarvaeQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method LarvaeQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method LarvaeQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method LarvaeQuery groupByAutoctr() Group by the autoctr column
 * @method LarvaeQuery groupByStockcode() Group by the StockCode column
 * @method LarvaeQuery groupBySpeccode() Group by the SpecCode column
 * @method LarvaeQuery groupByLarvaerefno() Group by the LarvaeRefNo column
 * @method LarvaeQuery groupByOtherref1() Group by the OtherRef1 column
 * @method LarvaeQuery groupByOtherref2() Group by the OtherRef2 column
 * @method LarvaeQuery groupByLarvalarea() Group by the LarvalArea column
 * @method LarvaeQuery groupByPlaceofdevelopment() Group by the PlaceofDevelopment column
 * @method LarvaeQuery groupByLhmax() Group by the LhMax column
 * @method LarvaeQuery groupByLbirthmaxref() Group by the LBirthmaxRef column
 * @method LarvaeQuery groupByLhmin() Group by the LhMin column
 * @method LarvaeQuery groupByLbirthminref() Group by the LBirthminRef column
 * @method LarvaeQuery groupByLhmid() Group by the LhMid column
 * @method LarvaeQuery groupByLbirthmodref() Group by the LBirthmodRef column
 * @method LarvaeQuery groupByPreanallengthmaxy() Group by the PreanalLengthMaxY column
 * @method LarvaeQuery groupByPreanmaxref() Group by the PreAnmaxRef column
 * @method LarvaeQuery groupByPreanallengthminy() Group by the PreanalLengthMinY column
 * @method LarvaeQuery groupByPreanminref() Group by the PreAnminRef column
 * @method LarvaeQuery groupByPreanallengthmody() Group by the PreanalLengthModY column
 * @method LarvaeQuery groupByPreanmodref() Group by the PreAnmodRef column
 * @method LarvaeQuery groupByFlexlengthmin() Group by the FlexLengthMin column
 * @method LarvaeQuery groupByFlexlengthmod() Group by the FlexLengthMod column
 * @method LarvaeQuery groupByFlexlengthmax() Group by the FlexLengthMax column
 * @method LarvaeQuery groupByFlexlengthtype() Group by the FlexLengthType column
 * @method LarvaeQuery groupByFlexlengthminref() Group by the FlexLengthMinRef column
 * @method LarvaeQuery groupByFlexlengthmodref() Group by the FlexLengthModRef column
 * @method LarvaeQuery groupByFlexlengthmaxref() Group by the FlexLengthMaxRef column
 * @method LarvaeQuery groupByTranslengthmin() Group by the TransLengthMin column
 * @method LarvaeQuery groupByTranslengthmod() Group by the TransLengthMod column
 * @method LarvaeQuery groupByTranslengthmax() Group by the TransLengthMax column
 * @method LarvaeQuery groupByTranslengthtype() Group by the TransLengthType column
 * @method LarvaeQuery groupByTranslengthminref() Group by the TransLengthMinRef column
 * @method LarvaeQuery groupByTranslengthmodref() Group by the TransLengthModRef column
 * @method LarvaeQuery groupByTranslengthmaxref() Group by the TransLengthMaxRef column
 * @method LarvaeQuery groupByLarvaldurationmin() Group by the LarvalDurationMin column
 * @method LarvaeQuery groupByLarvaldurationminref() Group by the LarvalDurationMinRef column
 * @method LarvaeQuery groupByLarvaldurationmax() Group by the LarvalDurationMax column
 * @method LarvaeQuery groupByLarvaldurationmaxref() Group by the LarvalDurationMaxRef column
 * @method LarvaeQuery groupByLarvaldurationmod() Group by the LarvalDurationMod column
 * @method LarvaeQuery groupByLarvaldurationmodref() Group by the LarvalDurationModRef column
 * @method LarvaeQuery groupByShapeofyolksac() Group by the Shapeofyolksac column
 * @method LarvaeQuery groupByYolksacpigm() Group by the YolksacPigm column
 * @method LarvaeQuery groupByYolksacsegm() Group by the YolksacSegm column
 * @method LarvaeQuery groupByYolkref() Group by the YolkRef column
 * @method LarvaeQuery groupByOilglobules() Group by the OilGlobules column
 * @method LarvaeQuery groupByOilglobuleposh() Group by the OilGlobuleposH column
 * @method LarvaeQuery groupByOilglobuleposv() Group by the OilGlobuleposV column
 * @method LarvaeQuery groupByOilglobulepigm() Group by the OilGlobulePigm column
 * @method LarvaeQuery groupByRowsontaily() Group by the RowsonTailY column
 * @method LarvaeQuery groupByOthermelontaily() Group by the OtherMelOnTailY column
 * @method LarvaeQuery groupByMelonheadtrunky() Group by the MelonHeadTrunkY column
 * @method LarvaeQuery groupByLyamax() Group by the LyaMax column
 * @method LarvaeQuery groupByL1feedmaxref() Group by the L1FeedmaxRef column
 * @method LarvaeQuery groupByLyamin() Group by the LyaMin column
 * @method LarvaeQuery groupByL1feedminref() Group by the L1FeedminRef column
 * @method LarvaeQuery groupByLyamod() Group by the LyaMod column
 * @method LarvaeQuery groupByL1feedmodref() Group by the L1FeedmodRef column
 * @method LarvaeQuery groupByJanlarv() Group by the JanLarv column
 * @method LarvaeQuery groupByFeblarv() Group by the FebLarv column
 * @method LarvaeQuery groupByMarlarv() Group by the MarLarv column
 * @method LarvaeQuery groupByAprlarv() Group by the AprLarv column
 * @method LarvaeQuery groupByMaylarv() Group by the MayLarv column
 * @method LarvaeQuery groupByJunlarv() Group by the JunLarv column
 * @method LarvaeQuery groupByJullarv() Group by the JulLarv column
 * @method LarvaeQuery groupByAuglarv() Group by the AugLarv column
 * @method LarvaeQuery groupBySeplarv() Group by the SepLarv column
 * @method LarvaeQuery groupByOctlarv() Group by the OctLarv column
 * @method LarvaeQuery groupByNovlarv() Group by the NovLarv column
 * @method LarvaeQuery groupByDeclarv() Group by the DecLarv column
 * @method LarvaeQuery groupByPresenceref() Group by the PresenceRef column
 * @method LarvaeQuery groupByWaterdepthmax() Group by the WaterDepthMax column
 * @method LarvaeQuery groupByWatertempmax() Group by the WaterTempMax column
 * @method LarvaeQuery groupBySalinitymax() Group by the SalinityMax column
 * @method LarvaeQuery groupByPh() Group by the pH column
 * @method LarvaeQuery groupByOxygenmax() Group by the OxygenMax column
 * @method LarvaeQuery groupByWatermaxref() Group by the WatermaxRef column
 * @method LarvaeQuery groupByWaterdepthmin() Group by the WaterDepthMin column
 * @method LarvaeQuery groupByWatertempmin() Group by the WaterTempMin column
 * @method LarvaeQuery groupBySalinitymin() Group by the SalinityMin column
 * @method LarvaeQuery groupByPhmin() Group by the pHMin column
 * @method LarvaeQuery groupByOxygenmin() Group by the OxygenMin column
 * @method LarvaeQuery groupByWaterminref() Group by the WaterminRef column
 * @method LarvaeQuery groupByWaterdepthmod() Group by the WaterDepthMod column
 * @method LarvaeQuery groupByWatertempmod() Group by the WaterTempMod column
 * @method LarvaeQuery groupBySalinitymod() Group by the SalinityMod column
 * @method LarvaeQuery groupByPhmod() Group by the pHMod column
 * @method LarvaeQuery groupByOxygenmod() Group by the OxygenMod column
 * @method LarvaeQuery groupByWatermodref() Group by the WatermodRef column
 * @method LarvaeQuery groupByStrikingfeature() Group by the StrikingFeature column
 * @method LarvaeQuery groupByLarvapic() Group by the LarvaPic column
 * @method LarvaeQuery groupByStrikingshapelat() Group by the StrikingShapeLat column
 * @method LarvaeQuery groupByStrikingshapedors() Group by the StrikingShapeDors column
 * @method LarvaeQuery groupByBodyform() Group by the BodyForm column
 * @method LarvaeQuery groupByShapeofgut() Group by the ShapeofGut column
 * @method LarvaeQuery groupByGasbladderearly() Group by the GasBladderEarly column
 * @method LarvaeQuery groupByGasbladderlate() Group by the GasBladderLate column
 * @method LarvaeQuery groupBySpinalarmatureearl() Group by the SpinalArmatureEarl column
 * @method LarvaeQuery groupBySpinalarmaturelate() Group by the SpinalArmatureLate column
 * @method LarvaeQuery groupByRowsontaile() Group by the RowsonTailE column
 * @method LarvaeQuery groupByOthermelontaile() Group by the OtherMelonTailE column
 * @method LarvaeQuery groupByMelonheadtrunke() Group by the MelonHeadTrunkE column
 * @method LarvaeQuery groupByRowsontaill() Group by the RowsonTaill column
 * @method LarvaeQuery groupByOthermelontaill() Group by the OtherMelonTaill column
 * @method LarvaeQuery groupByMelonheadtrunkl() Group by the MelonHeadTrunkl column
 * @method LarvaeQuery groupByUrostyleregion() Group by the UrostyleRegion column
 * @method LarvaeQuery groupByUrostyleregionlate() Group by the UrostyleRegionLate column
 * @method LarvaeQuery groupByPeritoneum() Group by the Peritoneum column
 * @method LarvaeQuery groupByPectoralsi() Group by the PectoralsI column
 * @method LarvaeQuery groupByPectoralsii() Group by the PectoralsII column
 * @method LarvaeQuery groupByPelvicsi() Group by the PelvicsI column
 * @method LarvaeQuery groupByPelvicsii() Group by the PelvicsII column
 * @method LarvaeQuery groupByMyomeresmax() Group by the MyomeresMax column
 * @method LarvaeQuery groupByMyomeresmin() Group by the MyomeresMin column
 * @method LarvaeQuery groupByMyomeresmod() Group by the MyomeresMod column
 * @method LarvaeQuery groupByMyomvert() Group by the MyomVert column
 * @method LarvaeQuery groupByTotmyomref() Group by the TotMyomRef column
 * @method LarvaeQuery groupByMyomeresmaxprean() Group by the MyomeresMaxPrean column
 * @method LarvaeQuery groupByMyomeresminprean() Group by the MyomeresMinPrean column
 * @method LarvaeQuery groupByMyomeresmodprean() Group by the MyomeresModPrean column
 * @method LarvaeQuery groupByMyomvert2() Group by the MyomVert2 column
 * @method LarvaeQuery groupByPreanmyoref() Group by the PreAnMyoRef column
 * @method LarvaeQuery groupByRllatepre() Group by the RLLatePre column
 * @method LarvaeQuery groupByRllateflex() Group by the RLLateFlex column
 * @method LarvaeQuery groupByRllatepost() Group by the RLLatePost column
 * @method LarvaeQuery groupByRlearlypre() Group by the RLEarlyPre column
 * @method LarvaeQuery groupByRlearlyflex() Group by the RLEarlyFlex column
 * @method LarvaeQuery groupByRlearlypost() Group by the RLEarlyPost column
 * @method LarvaeQuery groupByRlflexpre() Group by the RLFlexPre column
 * @method LarvaeQuery groupByRlflexflex() Group by the RLFlexFlex column
 * @method LarvaeQuery groupByRlflexpost() Group by the RLFlexPost column
 * @method LarvaeQuery groupByMeasurementspreref() Group by the MeasurementsPreRef column
 * @method LarvaeQuery groupByMeasurementsflexref() Group by the MeasurementsFlexRef column
 * @method LarvaeQuery groupByMeasurementspostref() Group by the MeasurementsPostRef column
 * @method LarvaeQuery groupByTypepre() Group by the TypePre column
 * @method LarvaeQuery groupByTypeflex() Group by the TypeFlex column
 * @method LarvaeQuery groupByTypepost() Group by the TypePost column
 * @method LarvaeQuery groupByComment() Group by the comment column
 * @method LarvaeQuery groupByPreanallengthmaxpre() Group by the PreanalLengthMaxPre column
 * @method LarvaeQuery groupByPreanallengthmaxflex() Group by the PreanalLengthMaxFlex column
 * @method LarvaeQuery groupByPreanallengthmaxpost() Group by the PreanalLengthMaxPost column
 * @method LarvaeQuery groupByPreanallengthminpre() Group by the PreanalLengthMinPre column
 * @method LarvaeQuery groupByPreanallengthminflex() Group by the PreanalLengthMinFlex column
 * @method LarvaeQuery groupByPreanallengthminpost() Group by the PreanalLengthMinPost column
 * @method LarvaeQuery groupByPreanallengthlitpre() Group by the PreanalLengthLitPre column
 * @method LarvaeQuery groupByPreanallengthlitflex() Group by the PreanalLengthLitFlex column
 * @method LarvaeQuery groupByPreanallengthlitpost() Group by the PreanalLengthLitPost column
 * @method LarvaeQuery groupByPrepeclengthmaxpre() Group by the PrepecLengthMaxPre column
 * @method LarvaeQuery groupByPrepeclengthmaxflex() Group by the PrepecLengthMaxFlex column
 * @method LarvaeQuery groupByPrepeclengthmaxpost() Group by the PrepecLengthMaxPost column
 * @method LarvaeQuery groupByPrepeclengthminpre() Group by the PrepecLengthMinPre column
 * @method LarvaeQuery groupByPrepeclengthminflex() Group by the PrepecLengthMinFlex column
 * @method LarvaeQuery groupByPrepeclengthminpost() Group by the PrepecLengthMinPost column
 * @method LarvaeQuery groupByPrepeclengthlitpre() Group by the PrepecLengthLitPre column
 * @method LarvaeQuery groupByPrepeclengthlitflex() Group by the PrepecLengthLitFlex column
 * @method LarvaeQuery groupByPrepeclengthlitpost() Group by the PrepecLengthLitPost column
 * @method LarvaeQuery groupByPreorbitalmaxpre() Group by the PreorbitalMaxPre column
 * @method LarvaeQuery groupByPreorbitalmaxflex() Group by the PreorbitalMaxFlex column
 * @method LarvaeQuery groupByPreorbitalmaxpost() Group by the PreorbitalMaxPost column
 * @method LarvaeQuery groupByPreorbitalminpre() Group by the PreorbitalMinPre column
 * @method LarvaeQuery groupByPreorbitalminflex() Group by the PreorbitalMinFlex column
 * @method LarvaeQuery groupByPreorbitalminpost() Group by the PreorbitalMinPost column
 * @method LarvaeQuery groupByPreorbitallitpre() Group by the PreorbitalLitPre column
 * @method LarvaeQuery groupByPreorbitallitflex() Group by the PreorbitalLitFlex column
 * @method LarvaeQuery groupByPreorbitallitpost() Group by the PreorbitalLitPost column
 * @method LarvaeQuery groupByDiameterofeyemaxpre() Group by the DiameterofEyeMaxPre column
 * @method LarvaeQuery groupByDiameterofeyemaxflex() Group by the DiameterofEyeMaxFlex column
 * @method LarvaeQuery groupByDiameterofeyemaxpost() Group by the DiameterofEyeMaxPost column
 * @method LarvaeQuery groupByDiameterofeyeminpre() Group by the DiameterofEyeMinPre column
 * @method LarvaeQuery groupByDiameterofeyeminflex() Group by the DiameterofEyeMinFlex column
 * @method LarvaeQuery groupByDiameterofeyeminpost() Group by the DiameterofEyeMinPost column
 * @method LarvaeQuery groupByDiameterofeyelitpre() Group by the DiameterofEyeLitPre column
 * @method LarvaeQuery groupByDiameterofeyelitflex() Group by the DiameterofEyeLitFlex column
 * @method LarvaeQuery groupByDiameterofeyelitpost() Group by the DiameterofEyeLitPost column
 * @method LarvaeQuery groupByDeptheyemaxpre() Group by the DepthEyeMaxPre column
 * @method LarvaeQuery groupByDeptheyemaxflex() Group by the DepthEyeMaxFlex column
 * @method LarvaeQuery groupByDeptheyemaxpost() Group by the DepthEyeMaxPost column
 * @method LarvaeQuery groupByDeptheyeminpre() Group by the DepthEyeMinPre column
 * @method LarvaeQuery groupByDeptheyeminflex() Group by the DepthEyeMinFlex column
 * @method LarvaeQuery groupByDeptheyeminpost() Group by the DepthEyeMinPost column
 * @method LarvaeQuery groupByDeptheyelitpre() Group by the DepthEyeLitPre column
 * @method LarvaeQuery groupByDeptheyelitflex() Group by the DepthEyeLitFlex column
 * @method LarvaeQuery groupByDeptheyelitpost() Group by the DepthEyeLitPost column
 * @method LarvaeQuery groupByDepthpectoralmaxpre() Group by the DepthPectoralMaxPre column
 * @method LarvaeQuery groupByDepthpectoralmaxflex() Group by the DepthPectoralMaxFlex column
 * @method LarvaeQuery groupByDepthpectoralmaxpost() Group by the DepthPectoralMaxPost column
 * @method LarvaeQuery groupByDepthpectoralminpre() Group by the DepthPectoralMinPre column
 * @method LarvaeQuery groupByDepthpectoralminflex() Group by the DepthPectoralMinFlex column
 * @method LarvaeQuery groupByDepthpectoralminpost() Group by the DepthPectoralMinPost column
 * @method LarvaeQuery groupByDepthpectorallitpre() Group by the DepthPectoralLitPre column
 * @method LarvaeQuery groupByDepthpectorallitflex() Group by the DepthPectoralLitFlex column
 * @method LarvaeQuery groupByDepthpectorallitpost() Group by the DepthPectoralLitPost column
 * @method LarvaeQuery groupByDepthanusmaxpre() Group by the DepthAnusMaxPre column
 * @method LarvaeQuery groupByDepthanusmaxflex() Group by the DepthAnusMaxFlex column
 * @method LarvaeQuery groupByDepthanusmaxpost() Group by the DepthAnusMaxPost column
 * @method LarvaeQuery groupByDepthanusminpre() Group by the DepthAnusMinPre column
 * @method LarvaeQuery groupByDepthanusminflex() Group by the DepthAnusMinFlex column
 * @method LarvaeQuery groupByDepthanusminpost() Group by the DepthAnusMinPost column
 * @method LarvaeQuery groupByDepthanuslitpre() Group by the DepthAnusLitPre column
 * @method LarvaeQuery groupByDepthanuslitflex() Group by the DepthAnusLitFlex column
 * @method LarvaeQuery groupByDepthanuslitpost() Group by the DepthAnusLitPost column
 * @method LarvaeQuery groupByAddcharyolks() Group by the AddCharYolks column
 * @method LarvaeQuery groupByAddcharposts() Group by the AddCharPosts column
 * @method LarvaeQuery groupByEaseofid() Group by the EaseofID column
 * @method LarvaeQuery groupBySimilarspecies1() Group by the SimilarSpecies1 column
 * @method LarvaeQuery groupBySimilarspec1remarks() Group by the SimilarSpec1Remarks column
 * @method LarvaeQuery groupBySimilarspecies2() Group by the SimilarSpecies2 column
 * @method LarvaeQuery groupBySimilarspec2remarks() Group by the SimilarSpec2Remarks column
 * @method LarvaeQuery groupByEntered() Group by the Entered column
 * @method LarvaeQuery groupByDateentered() Group by the DateEntered column
 * @method LarvaeQuery groupByModified() Group by the Modified column
 * @method LarvaeQuery groupByDatemodified() Group by the DateModified column
 * @method LarvaeQuery groupByExpert() Group by the Expert column
 * @method LarvaeQuery groupByDatechecked() Group by the DateChecked column
 * @method LarvaeQuery groupByTs() Group by the TS column
 *
 * @method LarvaeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LarvaeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LarvaeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Larvae findOne(PropelPDO $con = null) Return the first Larvae matching the query
 * @method Larvae findOneOrCreate(PropelPDO $con = null) Return the first Larvae matching the query, or a new Larvae object populated from the query conditions when no match is found
 *
 * @method Larvae findOneByAutoctr(int $autoctr) Return the first Larvae filtered by the autoctr column
 * @method Larvae findOneByStockcode(int $StockCode) Return the first Larvae filtered by the StockCode column
 * @method Larvae findOneBySpeccode(int $SpecCode) Return the first Larvae filtered by the SpecCode column
 * @method Larvae findOneByLarvaerefno(int $LarvaeRefNo) Return the first Larvae filtered by the LarvaeRefNo column
 * @method Larvae findOneByOtherref1(int $OtherRef1) Return the first Larvae filtered by the OtherRef1 column
 * @method Larvae findOneByOtherref2(int $OtherRef2) Return the first Larvae filtered by the OtherRef2 column
 * @method Larvae findOneByLarvalarea(string $LarvalArea) Return the first Larvae filtered by the LarvalArea column
 * @method Larvae findOneByPlaceofdevelopment(string $PlaceofDevelopment) Return the first Larvae filtered by the PlaceofDevelopment column
 * @method Larvae findOneByLhmax(double $LhMax) Return the first Larvae filtered by the LhMax column
 * @method Larvae findOneByLbirthmaxref(int $LBirthmaxRef) Return the first Larvae filtered by the LBirthmaxRef column
 * @method Larvae findOneByLhmin(double $LhMin) Return the first Larvae filtered by the LhMin column
 * @method Larvae findOneByLbirthminref(int $LBirthminRef) Return the first Larvae filtered by the LBirthminRef column
 * @method Larvae findOneByLhmid(double $LhMid) Return the first Larvae filtered by the LhMid column
 * @method Larvae findOneByLbirthmodref(int $LBirthmodRef) Return the first Larvae filtered by the LBirthmodRef column
 * @method Larvae findOneByPreanallengthmaxy(double $PreanalLengthMaxY) Return the first Larvae filtered by the PreanalLengthMaxY column
 * @method Larvae findOneByPreanmaxref(int $PreAnmaxRef) Return the first Larvae filtered by the PreAnmaxRef column
 * @method Larvae findOneByPreanallengthminy(double $PreanalLengthMinY) Return the first Larvae filtered by the PreanalLengthMinY column
 * @method Larvae findOneByPreanminref(int $PreAnminRef) Return the first Larvae filtered by the PreAnminRef column
 * @method Larvae findOneByPreanallengthmody(double $PreanalLengthModY) Return the first Larvae filtered by the PreanalLengthModY column
 * @method Larvae findOneByPreanmodref(int $PreAnmodRef) Return the first Larvae filtered by the PreAnmodRef column
 * @method Larvae findOneByFlexlengthmin(double $FlexLengthMin) Return the first Larvae filtered by the FlexLengthMin column
 * @method Larvae findOneByFlexlengthmod(double $FlexLengthMod) Return the first Larvae filtered by the FlexLengthMod column
 * @method Larvae findOneByFlexlengthmax(double $FlexLengthMax) Return the first Larvae filtered by the FlexLengthMax column
 * @method Larvae findOneByFlexlengthtype(string $FlexLengthType) Return the first Larvae filtered by the FlexLengthType column
 * @method Larvae findOneByFlexlengthminref(int $FlexLengthMinRef) Return the first Larvae filtered by the FlexLengthMinRef column
 * @method Larvae findOneByFlexlengthmodref(int $FlexLengthModRef) Return the first Larvae filtered by the FlexLengthModRef column
 * @method Larvae findOneByFlexlengthmaxref(int $FlexLengthMaxRef) Return the first Larvae filtered by the FlexLengthMaxRef column
 * @method Larvae findOneByTranslengthmin(double $TransLengthMin) Return the first Larvae filtered by the TransLengthMin column
 * @method Larvae findOneByTranslengthmod(double $TransLengthMod) Return the first Larvae filtered by the TransLengthMod column
 * @method Larvae findOneByTranslengthmax(double $TransLengthMax) Return the first Larvae filtered by the TransLengthMax column
 * @method Larvae findOneByTranslengthtype(string $TransLengthType) Return the first Larvae filtered by the TransLengthType column
 * @method Larvae findOneByTranslengthminref(int $TransLengthMinRef) Return the first Larvae filtered by the TransLengthMinRef column
 * @method Larvae findOneByTranslengthmodref(int $TransLengthModRef) Return the first Larvae filtered by the TransLengthModRef column
 * @method Larvae findOneByTranslengthmaxref(int $TransLengthMaxRef) Return the first Larvae filtered by the TransLengthMaxRef column
 * @method Larvae findOneByLarvaldurationmin(double $LarvalDurationMin) Return the first Larvae filtered by the LarvalDurationMin column
 * @method Larvae findOneByLarvaldurationminref(int $LarvalDurationMinRef) Return the first Larvae filtered by the LarvalDurationMinRef column
 * @method Larvae findOneByLarvaldurationmax(double $LarvalDurationMax) Return the first Larvae filtered by the LarvalDurationMax column
 * @method Larvae findOneByLarvaldurationmaxref(int $LarvalDurationMaxRef) Return the first Larvae filtered by the LarvalDurationMaxRef column
 * @method Larvae findOneByLarvaldurationmod(double $LarvalDurationMod) Return the first Larvae filtered by the LarvalDurationMod column
 * @method Larvae findOneByLarvaldurationmodref(int $LarvalDurationModRef) Return the first Larvae filtered by the LarvalDurationModRef column
 * @method Larvae findOneByShapeofyolksac(string $Shapeofyolksac) Return the first Larvae filtered by the Shapeofyolksac column
 * @method Larvae findOneByYolksacpigm(string $YolksacPigm) Return the first Larvae filtered by the YolksacPigm column
 * @method Larvae findOneByYolksacsegm(string $YolksacSegm) Return the first Larvae filtered by the YolksacSegm column
 * @method Larvae findOneByYolkref(int $YolkRef) Return the first Larvae filtered by the YolkRef column
 * @method Larvae findOneByOilglobules(string $OilGlobules) Return the first Larvae filtered by the OilGlobules column
 * @method Larvae findOneByOilglobuleposh(string $OilGlobuleposH) Return the first Larvae filtered by the OilGlobuleposH column
 * @method Larvae findOneByOilglobuleposv(string $OilGlobuleposV) Return the first Larvae filtered by the OilGlobuleposV column
 * @method Larvae findOneByOilglobulepigm(string $OilGlobulePigm) Return the first Larvae filtered by the OilGlobulePigm column
 * @method Larvae findOneByRowsontaily(string $RowsonTailY) Return the first Larvae filtered by the RowsonTailY column
 * @method Larvae findOneByOthermelontaily(string $OtherMelOnTailY) Return the first Larvae filtered by the OtherMelOnTailY column
 * @method Larvae findOneByMelonheadtrunky(string $MelonHeadTrunkY) Return the first Larvae filtered by the MelonHeadTrunkY column
 * @method Larvae findOneByLyamax(double $LyaMax) Return the first Larvae filtered by the LyaMax column
 * @method Larvae findOneByL1feedmaxref(int $L1FeedmaxRef) Return the first Larvae filtered by the L1FeedmaxRef column
 * @method Larvae findOneByLyamin(double $LyaMin) Return the first Larvae filtered by the LyaMin column
 * @method Larvae findOneByL1feedminref(int $L1FeedminRef) Return the first Larvae filtered by the L1FeedminRef column
 * @method Larvae findOneByLyamod(double $LyaMod) Return the first Larvae filtered by the LyaMod column
 * @method Larvae findOneByL1feedmodref(int $L1FeedmodRef) Return the first Larvae filtered by the L1FeedmodRef column
 * @method Larvae findOneByJanlarv(int $JanLarv) Return the first Larvae filtered by the JanLarv column
 * @method Larvae findOneByFeblarv(int $FebLarv) Return the first Larvae filtered by the FebLarv column
 * @method Larvae findOneByMarlarv(int $MarLarv) Return the first Larvae filtered by the MarLarv column
 * @method Larvae findOneByAprlarv(int $AprLarv) Return the first Larvae filtered by the AprLarv column
 * @method Larvae findOneByMaylarv(int $MayLarv) Return the first Larvae filtered by the MayLarv column
 * @method Larvae findOneByJunlarv(int $JunLarv) Return the first Larvae filtered by the JunLarv column
 * @method Larvae findOneByJullarv(int $JulLarv) Return the first Larvae filtered by the JulLarv column
 * @method Larvae findOneByAuglarv(int $AugLarv) Return the first Larvae filtered by the AugLarv column
 * @method Larvae findOneBySeplarv(int $SepLarv) Return the first Larvae filtered by the SepLarv column
 * @method Larvae findOneByOctlarv(int $OctLarv) Return the first Larvae filtered by the OctLarv column
 * @method Larvae findOneByNovlarv(boolean $NovLarv) Return the first Larvae filtered by the NovLarv column
 * @method Larvae findOneByDeclarv(int $DecLarv) Return the first Larvae filtered by the DecLarv column
 * @method Larvae findOneByPresenceref(int $PresenceRef) Return the first Larvae filtered by the PresenceRef column
 * @method Larvae findOneByWaterdepthmax(int $WaterDepthMax) Return the first Larvae filtered by the WaterDepthMax column
 * @method Larvae findOneByWatertempmax(double $WaterTempMax) Return the first Larvae filtered by the WaterTempMax column
 * @method Larvae findOneBySalinitymax(double $SalinityMax) Return the first Larvae filtered by the SalinityMax column
 * @method Larvae findOneByPh(double $pH) Return the first Larvae filtered by the pH column
 * @method Larvae findOneByOxygenmax(double $OxygenMax) Return the first Larvae filtered by the OxygenMax column
 * @method Larvae findOneByWatermaxref(int $WatermaxRef) Return the first Larvae filtered by the WatermaxRef column
 * @method Larvae findOneByWaterdepthmin(int $WaterDepthMin) Return the first Larvae filtered by the WaterDepthMin column
 * @method Larvae findOneByWatertempmin(double $WaterTempMin) Return the first Larvae filtered by the WaterTempMin column
 * @method Larvae findOneBySalinitymin(double $SalinityMin) Return the first Larvae filtered by the SalinityMin column
 * @method Larvae findOneByPhmin(double $pHMin) Return the first Larvae filtered by the pHMin column
 * @method Larvae findOneByOxygenmin(double $OxygenMin) Return the first Larvae filtered by the OxygenMin column
 * @method Larvae findOneByWaterminref(int $WaterminRef) Return the first Larvae filtered by the WaterminRef column
 * @method Larvae findOneByWaterdepthmod(int $WaterDepthMod) Return the first Larvae filtered by the WaterDepthMod column
 * @method Larvae findOneByWatertempmod(double $WaterTempMod) Return the first Larvae filtered by the WaterTempMod column
 * @method Larvae findOneBySalinitymod(double $SalinityMod) Return the first Larvae filtered by the SalinityMod column
 * @method Larvae findOneByPhmod(double $pHMod) Return the first Larvae filtered by the pHMod column
 * @method Larvae findOneByOxygenmod(double $OxygenMod) Return the first Larvae filtered by the OxygenMod column
 * @method Larvae findOneByWatermodref(int $WatermodRef) Return the first Larvae filtered by the WatermodRef column
 * @method Larvae findOneByStrikingfeature(string $StrikingFeature) Return the first Larvae filtered by the StrikingFeature column
 * @method Larvae findOneByLarvapic(string $LarvaPic) Return the first Larvae filtered by the LarvaPic column
 * @method Larvae findOneByStrikingshapelat(string $StrikingShapeLat) Return the first Larvae filtered by the StrikingShapeLat column
 * @method Larvae findOneByStrikingshapedors(string $StrikingShapeDors) Return the first Larvae filtered by the StrikingShapeDors column
 * @method Larvae findOneByBodyform(string $BodyForm) Return the first Larvae filtered by the BodyForm column
 * @method Larvae findOneByShapeofgut(string $ShapeofGut) Return the first Larvae filtered by the ShapeofGut column
 * @method Larvae findOneByGasbladderearly(string $GasBladderEarly) Return the first Larvae filtered by the GasBladderEarly column
 * @method Larvae findOneByGasbladderlate(string $GasBladderLate) Return the first Larvae filtered by the GasBladderLate column
 * @method Larvae findOneBySpinalarmatureearl(string $SpinalArmatureEarl) Return the first Larvae filtered by the SpinalArmatureEarl column
 * @method Larvae findOneBySpinalarmaturelate(string $SpinalArmatureLate) Return the first Larvae filtered by the SpinalArmatureLate column
 * @method Larvae findOneByRowsontaile(string $RowsonTailE) Return the first Larvae filtered by the RowsonTailE column
 * @method Larvae findOneByOthermelontaile(string $OtherMelonTailE) Return the first Larvae filtered by the OtherMelonTailE column
 * @method Larvae findOneByMelonheadtrunke(string $MelonHeadTrunkE) Return the first Larvae filtered by the MelonHeadTrunkE column
 * @method Larvae findOneByRowsontaill(string $RowsonTaill) Return the first Larvae filtered by the RowsonTaill column
 * @method Larvae findOneByOthermelontaill(string $OtherMelonTaill) Return the first Larvae filtered by the OtherMelonTaill column
 * @method Larvae findOneByMelonheadtrunkl(string $MelonHeadTrunkl) Return the first Larvae filtered by the MelonHeadTrunkl column
 * @method Larvae findOneByUrostyleregion(string $UrostyleRegion) Return the first Larvae filtered by the UrostyleRegion column
 * @method Larvae findOneByUrostyleregionlate(string $UrostyleRegionLate) Return the first Larvae filtered by the UrostyleRegionLate column
 * @method Larvae findOneByPeritoneum(string $Peritoneum) Return the first Larvae filtered by the Peritoneum column
 * @method Larvae findOneByPectoralsi(string $PectoralsI) Return the first Larvae filtered by the PectoralsI column
 * @method Larvae findOneByPectoralsii(string $PectoralsII) Return the first Larvae filtered by the PectoralsII column
 * @method Larvae findOneByPelvicsi(string $PelvicsI) Return the first Larvae filtered by the PelvicsI column
 * @method Larvae findOneByPelvicsii(string $PelvicsII) Return the first Larvae filtered by the PelvicsII column
 * @method Larvae findOneByMyomeresmax(int $MyomeresMax) Return the first Larvae filtered by the MyomeresMax column
 * @method Larvae findOneByMyomeresmin(int $MyomeresMin) Return the first Larvae filtered by the MyomeresMin column
 * @method Larvae findOneByMyomeresmod(int $MyomeresMod) Return the first Larvae filtered by the MyomeresMod column
 * @method Larvae findOneByMyomvert(string $MyomVert) Return the first Larvae filtered by the MyomVert column
 * @method Larvae findOneByTotmyomref(int $TotMyomRef) Return the first Larvae filtered by the TotMyomRef column
 * @method Larvae findOneByMyomeresmaxprean(int $MyomeresMaxPrean) Return the first Larvae filtered by the MyomeresMaxPrean column
 * @method Larvae findOneByMyomeresminprean(int $MyomeresMinPrean) Return the first Larvae filtered by the MyomeresMinPrean column
 * @method Larvae findOneByMyomeresmodprean(int $MyomeresModPrean) Return the first Larvae filtered by the MyomeresModPrean column
 * @method Larvae findOneByMyomvert2(string $MyomVert2) Return the first Larvae filtered by the MyomVert2 column
 * @method Larvae findOneByPreanmyoref(int $PreAnMyoRef) Return the first Larvae filtered by the PreAnMyoRef column
 * @method Larvae findOneByRllatepre(double $RLLatePre) Return the first Larvae filtered by the RLLatePre column
 * @method Larvae findOneByRllateflex(double $RLLateFlex) Return the first Larvae filtered by the RLLateFlex column
 * @method Larvae findOneByRllatepost(double $RLLatePost) Return the first Larvae filtered by the RLLatePost column
 * @method Larvae findOneByRlearlypre(double $RLEarlyPre) Return the first Larvae filtered by the RLEarlyPre column
 * @method Larvae findOneByRlearlyflex(double $RLEarlyFlex) Return the first Larvae filtered by the RLEarlyFlex column
 * @method Larvae findOneByRlearlypost(double $RLEarlyPost) Return the first Larvae filtered by the RLEarlyPost column
 * @method Larvae findOneByRlflexpre(double $RLFlexPre) Return the first Larvae filtered by the RLFlexPre column
 * @method Larvae findOneByRlflexflex(double $RLFlexFlex) Return the first Larvae filtered by the RLFlexFlex column
 * @method Larvae findOneByRlflexpost(double $RLFlexPost) Return the first Larvae filtered by the RLFlexPost column
 * @method Larvae findOneByMeasurementspreref(int $MeasurementsPreRef) Return the first Larvae filtered by the MeasurementsPreRef column
 * @method Larvae findOneByMeasurementsflexref(int $MeasurementsFlexRef) Return the first Larvae filtered by the MeasurementsFlexRef column
 * @method Larvae findOneByMeasurementspostref(int $MeasurementsPostRef) Return the first Larvae filtered by the MeasurementsPostRef column
 * @method Larvae findOneByTypepre(string $TypePre) Return the first Larvae filtered by the TypePre column
 * @method Larvae findOneByTypeflex(string $TypeFlex) Return the first Larvae filtered by the TypeFlex column
 * @method Larvae findOneByTypepost(string $TypePost) Return the first Larvae filtered by the TypePost column
 * @method Larvae findOneByComment(string $comment) Return the first Larvae filtered by the comment column
 * @method Larvae findOneByPreanallengthmaxpre(double $PreanalLengthMaxPre) Return the first Larvae filtered by the PreanalLengthMaxPre column
 * @method Larvae findOneByPreanallengthmaxflex(double $PreanalLengthMaxFlex) Return the first Larvae filtered by the PreanalLengthMaxFlex column
 * @method Larvae findOneByPreanallengthmaxpost(double $PreanalLengthMaxPost) Return the first Larvae filtered by the PreanalLengthMaxPost column
 * @method Larvae findOneByPreanallengthminpre(double $PreanalLengthMinPre) Return the first Larvae filtered by the PreanalLengthMinPre column
 * @method Larvae findOneByPreanallengthminflex(double $PreanalLengthMinFlex) Return the first Larvae filtered by the PreanalLengthMinFlex column
 * @method Larvae findOneByPreanallengthminpost(double $PreanalLengthMinPost) Return the first Larvae filtered by the PreanalLengthMinPost column
 * @method Larvae findOneByPreanallengthlitpre(double $PreanalLengthLitPre) Return the first Larvae filtered by the PreanalLengthLitPre column
 * @method Larvae findOneByPreanallengthlitflex(double $PreanalLengthLitFlex) Return the first Larvae filtered by the PreanalLengthLitFlex column
 * @method Larvae findOneByPreanallengthlitpost(double $PreanalLengthLitPost) Return the first Larvae filtered by the PreanalLengthLitPost column
 * @method Larvae findOneByPrepeclengthmaxpre(double $PrepecLengthMaxPre) Return the first Larvae filtered by the PrepecLengthMaxPre column
 * @method Larvae findOneByPrepeclengthmaxflex(double $PrepecLengthMaxFlex) Return the first Larvae filtered by the PrepecLengthMaxFlex column
 * @method Larvae findOneByPrepeclengthmaxpost(double $PrepecLengthMaxPost) Return the first Larvae filtered by the PrepecLengthMaxPost column
 * @method Larvae findOneByPrepeclengthminpre(double $PrepecLengthMinPre) Return the first Larvae filtered by the PrepecLengthMinPre column
 * @method Larvae findOneByPrepeclengthminflex(double $PrepecLengthMinFlex) Return the first Larvae filtered by the PrepecLengthMinFlex column
 * @method Larvae findOneByPrepeclengthminpost(double $PrepecLengthMinPost) Return the first Larvae filtered by the PrepecLengthMinPost column
 * @method Larvae findOneByPrepeclengthlitpre(double $PrepecLengthLitPre) Return the first Larvae filtered by the PrepecLengthLitPre column
 * @method Larvae findOneByPrepeclengthlitflex(double $PrepecLengthLitFlex) Return the first Larvae filtered by the PrepecLengthLitFlex column
 * @method Larvae findOneByPrepeclengthlitpost(double $PrepecLengthLitPost) Return the first Larvae filtered by the PrepecLengthLitPost column
 * @method Larvae findOneByPreorbitalmaxpre(double $PreorbitalMaxPre) Return the first Larvae filtered by the PreorbitalMaxPre column
 * @method Larvae findOneByPreorbitalmaxflex(double $PreorbitalMaxFlex) Return the first Larvae filtered by the PreorbitalMaxFlex column
 * @method Larvae findOneByPreorbitalmaxpost(double $PreorbitalMaxPost) Return the first Larvae filtered by the PreorbitalMaxPost column
 * @method Larvae findOneByPreorbitalminpre(double $PreorbitalMinPre) Return the first Larvae filtered by the PreorbitalMinPre column
 * @method Larvae findOneByPreorbitalminflex(double $PreorbitalMinFlex) Return the first Larvae filtered by the PreorbitalMinFlex column
 * @method Larvae findOneByPreorbitalminpost(double $PreorbitalMinPost) Return the first Larvae filtered by the PreorbitalMinPost column
 * @method Larvae findOneByPreorbitallitpre(double $PreorbitalLitPre) Return the first Larvae filtered by the PreorbitalLitPre column
 * @method Larvae findOneByPreorbitallitflex(double $PreorbitalLitFlex) Return the first Larvae filtered by the PreorbitalLitFlex column
 * @method Larvae findOneByPreorbitallitpost(double $PreorbitalLitPost) Return the first Larvae filtered by the PreorbitalLitPost column
 * @method Larvae findOneByDiameterofeyemaxpre(double $DiameterofEyeMaxPre) Return the first Larvae filtered by the DiameterofEyeMaxPre column
 * @method Larvae findOneByDiameterofeyemaxflex(double $DiameterofEyeMaxFlex) Return the first Larvae filtered by the DiameterofEyeMaxFlex column
 * @method Larvae findOneByDiameterofeyemaxpost(double $DiameterofEyeMaxPost) Return the first Larvae filtered by the DiameterofEyeMaxPost column
 * @method Larvae findOneByDiameterofeyeminpre(double $DiameterofEyeMinPre) Return the first Larvae filtered by the DiameterofEyeMinPre column
 * @method Larvae findOneByDiameterofeyeminflex(double $DiameterofEyeMinFlex) Return the first Larvae filtered by the DiameterofEyeMinFlex column
 * @method Larvae findOneByDiameterofeyeminpost(double $DiameterofEyeMinPost) Return the first Larvae filtered by the DiameterofEyeMinPost column
 * @method Larvae findOneByDiameterofeyelitpre(double $DiameterofEyeLitPre) Return the first Larvae filtered by the DiameterofEyeLitPre column
 * @method Larvae findOneByDiameterofeyelitflex(double $DiameterofEyeLitFlex) Return the first Larvae filtered by the DiameterofEyeLitFlex column
 * @method Larvae findOneByDiameterofeyelitpost(double $DiameterofEyeLitPost) Return the first Larvae filtered by the DiameterofEyeLitPost column
 * @method Larvae findOneByDeptheyemaxpre(double $DepthEyeMaxPre) Return the first Larvae filtered by the DepthEyeMaxPre column
 * @method Larvae findOneByDeptheyemaxflex(double $DepthEyeMaxFlex) Return the first Larvae filtered by the DepthEyeMaxFlex column
 * @method Larvae findOneByDeptheyemaxpost(double $DepthEyeMaxPost) Return the first Larvae filtered by the DepthEyeMaxPost column
 * @method Larvae findOneByDeptheyeminpre(double $DepthEyeMinPre) Return the first Larvae filtered by the DepthEyeMinPre column
 * @method Larvae findOneByDeptheyeminflex(double $DepthEyeMinFlex) Return the first Larvae filtered by the DepthEyeMinFlex column
 * @method Larvae findOneByDeptheyeminpost(double $DepthEyeMinPost) Return the first Larvae filtered by the DepthEyeMinPost column
 * @method Larvae findOneByDeptheyelitpre(double $DepthEyeLitPre) Return the first Larvae filtered by the DepthEyeLitPre column
 * @method Larvae findOneByDeptheyelitflex(double $DepthEyeLitFlex) Return the first Larvae filtered by the DepthEyeLitFlex column
 * @method Larvae findOneByDeptheyelitpost(double $DepthEyeLitPost) Return the first Larvae filtered by the DepthEyeLitPost column
 * @method Larvae findOneByDepthpectoralmaxpre(double $DepthPectoralMaxPre) Return the first Larvae filtered by the DepthPectoralMaxPre column
 * @method Larvae findOneByDepthpectoralmaxflex(double $DepthPectoralMaxFlex) Return the first Larvae filtered by the DepthPectoralMaxFlex column
 * @method Larvae findOneByDepthpectoralmaxpost(double $DepthPectoralMaxPost) Return the first Larvae filtered by the DepthPectoralMaxPost column
 * @method Larvae findOneByDepthpectoralminpre(double $DepthPectoralMinPre) Return the first Larvae filtered by the DepthPectoralMinPre column
 * @method Larvae findOneByDepthpectoralminflex(double $DepthPectoralMinFlex) Return the first Larvae filtered by the DepthPectoralMinFlex column
 * @method Larvae findOneByDepthpectoralminpost(double $DepthPectoralMinPost) Return the first Larvae filtered by the DepthPectoralMinPost column
 * @method Larvae findOneByDepthpectorallitpre(double $DepthPectoralLitPre) Return the first Larvae filtered by the DepthPectoralLitPre column
 * @method Larvae findOneByDepthpectorallitflex(double $DepthPectoralLitFlex) Return the first Larvae filtered by the DepthPectoralLitFlex column
 * @method Larvae findOneByDepthpectorallitpost(double $DepthPectoralLitPost) Return the first Larvae filtered by the DepthPectoralLitPost column
 * @method Larvae findOneByDepthanusmaxpre(double $DepthAnusMaxPre) Return the first Larvae filtered by the DepthAnusMaxPre column
 * @method Larvae findOneByDepthanusmaxflex(double $DepthAnusMaxFlex) Return the first Larvae filtered by the DepthAnusMaxFlex column
 * @method Larvae findOneByDepthanusmaxpost(double $DepthAnusMaxPost) Return the first Larvae filtered by the DepthAnusMaxPost column
 * @method Larvae findOneByDepthanusminpre(double $DepthAnusMinPre) Return the first Larvae filtered by the DepthAnusMinPre column
 * @method Larvae findOneByDepthanusminflex(double $DepthAnusMinFlex) Return the first Larvae filtered by the DepthAnusMinFlex column
 * @method Larvae findOneByDepthanusminpost(double $DepthAnusMinPost) Return the first Larvae filtered by the DepthAnusMinPost column
 * @method Larvae findOneByDepthanuslitpre(double $DepthAnusLitPre) Return the first Larvae filtered by the DepthAnusLitPre column
 * @method Larvae findOneByDepthanuslitflex(double $DepthAnusLitFlex) Return the first Larvae filtered by the DepthAnusLitFlex column
 * @method Larvae findOneByDepthanuslitpost(double $DepthAnusLitPost) Return the first Larvae filtered by the DepthAnusLitPost column
 * @method Larvae findOneByAddcharyolks(string $AddCharYolks) Return the first Larvae filtered by the AddCharYolks column
 * @method Larvae findOneByAddcharposts(string $AddCharPosts) Return the first Larvae filtered by the AddCharPosts column
 * @method Larvae findOneByEaseofid(string $EaseofID) Return the first Larvae filtered by the EaseofID column
 * @method Larvae findOneBySimilarspecies1(int $SimilarSpecies1) Return the first Larvae filtered by the SimilarSpecies1 column
 * @method Larvae findOneBySimilarspec1remarks(string $SimilarSpec1Remarks) Return the first Larvae filtered by the SimilarSpec1Remarks column
 * @method Larvae findOneBySimilarspecies2(int $SimilarSpecies2) Return the first Larvae filtered by the SimilarSpecies2 column
 * @method Larvae findOneBySimilarspec2remarks(string $SimilarSpec2Remarks) Return the first Larvae filtered by the SimilarSpec2Remarks column
 * @method Larvae findOneByEntered(int $Entered) Return the first Larvae filtered by the Entered column
 * @method Larvae findOneByDateentered(string $DateEntered) Return the first Larvae filtered by the DateEntered column
 * @method Larvae findOneByModified(int $Modified) Return the first Larvae filtered by the Modified column
 * @method Larvae findOneByDatemodified(string $DateModified) Return the first Larvae filtered by the DateModified column
 * @method Larvae findOneByExpert(int $Expert) Return the first Larvae filtered by the Expert column
 * @method Larvae findOneByDatechecked(string $DateChecked) Return the first Larvae filtered by the DateChecked column
 * @method Larvae findOneByTs(string $TS) Return the first Larvae filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Larvae objects filtered by the autoctr column
 * @method array findByStockcode(int $StockCode) Return Larvae objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Larvae objects filtered by the SpecCode column
 * @method array findByLarvaerefno(int $LarvaeRefNo) Return Larvae objects filtered by the LarvaeRefNo column
 * @method array findByOtherref1(int $OtherRef1) Return Larvae objects filtered by the OtherRef1 column
 * @method array findByOtherref2(int $OtherRef2) Return Larvae objects filtered by the OtherRef2 column
 * @method array findByLarvalarea(string $LarvalArea) Return Larvae objects filtered by the LarvalArea column
 * @method array findByPlaceofdevelopment(string $PlaceofDevelopment) Return Larvae objects filtered by the PlaceofDevelopment column
 * @method array findByLhmax(double $LhMax) Return Larvae objects filtered by the LhMax column
 * @method array findByLbirthmaxref(int $LBirthmaxRef) Return Larvae objects filtered by the LBirthmaxRef column
 * @method array findByLhmin(double $LhMin) Return Larvae objects filtered by the LhMin column
 * @method array findByLbirthminref(int $LBirthminRef) Return Larvae objects filtered by the LBirthminRef column
 * @method array findByLhmid(double $LhMid) Return Larvae objects filtered by the LhMid column
 * @method array findByLbirthmodref(int $LBirthmodRef) Return Larvae objects filtered by the LBirthmodRef column
 * @method array findByPreanallengthmaxy(double $PreanalLengthMaxY) Return Larvae objects filtered by the PreanalLengthMaxY column
 * @method array findByPreanmaxref(int $PreAnmaxRef) Return Larvae objects filtered by the PreAnmaxRef column
 * @method array findByPreanallengthminy(double $PreanalLengthMinY) Return Larvae objects filtered by the PreanalLengthMinY column
 * @method array findByPreanminref(int $PreAnminRef) Return Larvae objects filtered by the PreAnminRef column
 * @method array findByPreanallengthmody(double $PreanalLengthModY) Return Larvae objects filtered by the PreanalLengthModY column
 * @method array findByPreanmodref(int $PreAnmodRef) Return Larvae objects filtered by the PreAnmodRef column
 * @method array findByFlexlengthmin(double $FlexLengthMin) Return Larvae objects filtered by the FlexLengthMin column
 * @method array findByFlexlengthmod(double $FlexLengthMod) Return Larvae objects filtered by the FlexLengthMod column
 * @method array findByFlexlengthmax(double $FlexLengthMax) Return Larvae objects filtered by the FlexLengthMax column
 * @method array findByFlexlengthtype(string $FlexLengthType) Return Larvae objects filtered by the FlexLengthType column
 * @method array findByFlexlengthminref(int $FlexLengthMinRef) Return Larvae objects filtered by the FlexLengthMinRef column
 * @method array findByFlexlengthmodref(int $FlexLengthModRef) Return Larvae objects filtered by the FlexLengthModRef column
 * @method array findByFlexlengthmaxref(int $FlexLengthMaxRef) Return Larvae objects filtered by the FlexLengthMaxRef column
 * @method array findByTranslengthmin(double $TransLengthMin) Return Larvae objects filtered by the TransLengthMin column
 * @method array findByTranslengthmod(double $TransLengthMod) Return Larvae objects filtered by the TransLengthMod column
 * @method array findByTranslengthmax(double $TransLengthMax) Return Larvae objects filtered by the TransLengthMax column
 * @method array findByTranslengthtype(string $TransLengthType) Return Larvae objects filtered by the TransLengthType column
 * @method array findByTranslengthminref(int $TransLengthMinRef) Return Larvae objects filtered by the TransLengthMinRef column
 * @method array findByTranslengthmodref(int $TransLengthModRef) Return Larvae objects filtered by the TransLengthModRef column
 * @method array findByTranslengthmaxref(int $TransLengthMaxRef) Return Larvae objects filtered by the TransLengthMaxRef column
 * @method array findByLarvaldurationmin(double $LarvalDurationMin) Return Larvae objects filtered by the LarvalDurationMin column
 * @method array findByLarvaldurationminref(int $LarvalDurationMinRef) Return Larvae objects filtered by the LarvalDurationMinRef column
 * @method array findByLarvaldurationmax(double $LarvalDurationMax) Return Larvae objects filtered by the LarvalDurationMax column
 * @method array findByLarvaldurationmaxref(int $LarvalDurationMaxRef) Return Larvae objects filtered by the LarvalDurationMaxRef column
 * @method array findByLarvaldurationmod(double $LarvalDurationMod) Return Larvae objects filtered by the LarvalDurationMod column
 * @method array findByLarvaldurationmodref(int $LarvalDurationModRef) Return Larvae objects filtered by the LarvalDurationModRef column
 * @method array findByShapeofyolksac(string $Shapeofyolksac) Return Larvae objects filtered by the Shapeofyolksac column
 * @method array findByYolksacpigm(string $YolksacPigm) Return Larvae objects filtered by the YolksacPigm column
 * @method array findByYolksacsegm(string $YolksacSegm) Return Larvae objects filtered by the YolksacSegm column
 * @method array findByYolkref(int $YolkRef) Return Larvae objects filtered by the YolkRef column
 * @method array findByOilglobules(string $OilGlobules) Return Larvae objects filtered by the OilGlobules column
 * @method array findByOilglobuleposh(string $OilGlobuleposH) Return Larvae objects filtered by the OilGlobuleposH column
 * @method array findByOilglobuleposv(string $OilGlobuleposV) Return Larvae objects filtered by the OilGlobuleposV column
 * @method array findByOilglobulepigm(string $OilGlobulePigm) Return Larvae objects filtered by the OilGlobulePigm column
 * @method array findByRowsontaily(string $RowsonTailY) Return Larvae objects filtered by the RowsonTailY column
 * @method array findByOthermelontaily(string $OtherMelOnTailY) Return Larvae objects filtered by the OtherMelOnTailY column
 * @method array findByMelonheadtrunky(string $MelonHeadTrunkY) Return Larvae objects filtered by the MelonHeadTrunkY column
 * @method array findByLyamax(double $LyaMax) Return Larvae objects filtered by the LyaMax column
 * @method array findByL1feedmaxref(int $L1FeedmaxRef) Return Larvae objects filtered by the L1FeedmaxRef column
 * @method array findByLyamin(double $LyaMin) Return Larvae objects filtered by the LyaMin column
 * @method array findByL1feedminref(int $L1FeedminRef) Return Larvae objects filtered by the L1FeedminRef column
 * @method array findByLyamod(double $LyaMod) Return Larvae objects filtered by the LyaMod column
 * @method array findByL1feedmodref(int $L1FeedmodRef) Return Larvae objects filtered by the L1FeedmodRef column
 * @method array findByJanlarv(int $JanLarv) Return Larvae objects filtered by the JanLarv column
 * @method array findByFeblarv(int $FebLarv) Return Larvae objects filtered by the FebLarv column
 * @method array findByMarlarv(int $MarLarv) Return Larvae objects filtered by the MarLarv column
 * @method array findByAprlarv(int $AprLarv) Return Larvae objects filtered by the AprLarv column
 * @method array findByMaylarv(int $MayLarv) Return Larvae objects filtered by the MayLarv column
 * @method array findByJunlarv(int $JunLarv) Return Larvae objects filtered by the JunLarv column
 * @method array findByJullarv(int $JulLarv) Return Larvae objects filtered by the JulLarv column
 * @method array findByAuglarv(int $AugLarv) Return Larvae objects filtered by the AugLarv column
 * @method array findBySeplarv(int $SepLarv) Return Larvae objects filtered by the SepLarv column
 * @method array findByOctlarv(int $OctLarv) Return Larvae objects filtered by the OctLarv column
 * @method array findByNovlarv(boolean $NovLarv) Return Larvae objects filtered by the NovLarv column
 * @method array findByDeclarv(int $DecLarv) Return Larvae objects filtered by the DecLarv column
 * @method array findByPresenceref(int $PresenceRef) Return Larvae objects filtered by the PresenceRef column
 * @method array findByWaterdepthmax(int $WaterDepthMax) Return Larvae objects filtered by the WaterDepthMax column
 * @method array findByWatertempmax(double $WaterTempMax) Return Larvae objects filtered by the WaterTempMax column
 * @method array findBySalinitymax(double $SalinityMax) Return Larvae objects filtered by the SalinityMax column
 * @method array findByPh(double $pH) Return Larvae objects filtered by the pH column
 * @method array findByOxygenmax(double $OxygenMax) Return Larvae objects filtered by the OxygenMax column
 * @method array findByWatermaxref(int $WatermaxRef) Return Larvae objects filtered by the WatermaxRef column
 * @method array findByWaterdepthmin(int $WaterDepthMin) Return Larvae objects filtered by the WaterDepthMin column
 * @method array findByWatertempmin(double $WaterTempMin) Return Larvae objects filtered by the WaterTempMin column
 * @method array findBySalinitymin(double $SalinityMin) Return Larvae objects filtered by the SalinityMin column
 * @method array findByPhmin(double $pHMin) Return Larvae objects filtered by the pHMin column
 * @method array findByOxygenmin(double $OxygenMin) Return Larvae objects filtered by the OxygenMin column
 * @method array findByWaterminref(int $WaterminRef) Return Larvae objects filtered by the WaterminRef column
 * @method array findByWaterdepthmod(int $WaterDepthMod) Return Larvae objects filtered by the WaterDepthMod column
 * @method array findByWatertempmod(double $WaterTempMod) Return Larvae objects filtered by the WaterTempMod column
 * @method array findBySalinitymod(double $SalinityMod) Return Larvae objects filtered by the SalinityMod column
 * @method array findByPhmod(double $pHMod) Return Larvae objects filtered by the pHMod column
 * @method array findByOxygenmod(double $OxygenMod) Return Larvae objects filtered by the OxygenMod column
 * @method array findByWatermodref(int $WatermodRef) Return Larvae objects filtered by the WatermodRef column
 * @method array findByStrikingfeature(string $StrikingFeature) Return Larvae objects filtered by the StrikingFeature column
 * @method array findByLarvapic(string $LarvaPic) Return Larvae objects filtered by the LarvaPic column
 * @method array findByStrikingshapelat(string $StrikingShapeLat) Return Larvae objects filtered by the StrikingShapeLat column
 * @method array findByStrikingshapedors(string $StrikingShapeDors) Return Larvae objects filtered by the StrikingShapeDors column
 * @method array findByBodyform(string $BodyForm) Return Larvae objects filtered by the BodyForm column
 * @method array findByShapeofgut(string $ShapeofGut) Return Larvae objects filtered by the ShapeofGut column
 * @method array findByGasbladderearly(string $GasBladderEarly) Return Larvae objects filtered by the GasBladderEarly column
 * @method array findByGasbladderlate(string $GasBladderLate) Return Larvae objects filtered by the GasBladderLate column
 * @method array findBySpinalarmatureearl(string $SpinalArmatureEarl) Return Larvae objects filtered by the SpinalArmatureEarl column
 * @method array findBySpinalarmaturelate(string $SpinalArmatureLate) Return Larvae objects filtered by the SpinalArmatureLate column
 * @method array findByRowsontaile(string $RowsonTailE) Return Larvae objects filtered by the RowsonTailE column
 * @method array findByOthermelontaile(string $OtherMelonTailE) Return Larvae objects filtered by the OtherMelonTailE column
 * @method array findByMelonheadtrunke(string $MelonHeadTrunkE) Return Larvae objects filtered by the MelonHeadTrunkE column
 * @method array findByRowsontaill(string $RowsonTaill) Return Larvae objects filtered by the RowsonTaill column
 * @method array findByOthermelontaill(string $OtherMelonTaill) Return Larvae objects filtered by the OtherMelonTaill column
 * @method array findByMelonheadtrunkl(string $MelonHeadTrunkl) Return Larvae objects filtered by the MelonHeadTrunkl column
 * @method array findByUrostyleregion(string $UrostyleRegion) Return Larvae objects filtered by the UrostyleRegion column
 * @method array findByUrostyleregionlate(string $UrostyleRegionLate) Return Larvae objects filtered by the UrostyleRegionLate column
 * @method array findByPeritoneum(string $Peritoneum) Return Larvae objects filtered by the Peritoneum column
 * @method array findByPectoralsi(string $PectoralsI) Return Larvae objects filtered by the PectoralsI column
 * @method array findByPectoralsii(string $PectoralsII) Return Larvae objects filtered by the PectoralsII column
 * @method array findByPelvicsi(string $PelvicsI) Return Larvae objects filtered by the PelvicsI column
 * @method array findByPelvicsii(string $PelvicsII) Return Larvae objects filtered by the PelvicsII column
 * @method array findByMyomeresmax(int $MyomeresMax) Return Larvae objects filtered by the MyomeresMax column
 * @method array findByMyomeresmin(int $MyomeresMin) Return Larvae objects filtered by the MyomeresMin column
 * @method array findByMyomeresmod(int $MyomeresMod) Return Larvae objects filtered by the MyomeresMod column
 * @method array findByMyomvert(string $MyomVert) Return Larvae objects filtered by the MyomVert column
 * @method array findByTotmyomref(int $TotMyomRef) Return Larvae objects filtered by the TotMyomRef column
 * @method array findByMyomeresmaxprean(int $MyomeresMaxPrean) Return Larvae objects filtered by the MyomeresMaxPrean column
 * @method array findByMyomeresminprean(int $MyomeresMinPrean) Return Larvae objects filtered by the MyomeresMinPrean column
 * @method array findByMyomeresmodprean(int $MyomeresModPrean) Return Larvae objects filtered by the MyomeresModPrean column
 * @method array findByMyomvert2(string $MyomVert2) Return Larvae objects filtered by the MyomVert2 column
 * @method array findByPreanmyoref(int $PreAnMyoRef) Return Larvae objects filtered by the PreAnMyoRef column
 * @method array findByRllatepre(double $RLLatePre) Return Larvae objects filtered by the RLLatePre column
 * @method array findByRllateflex(double $RLLateFlex) Return Larvae objects filtered by the RLLateFlex column
 * @method array findByRllatepost(double $RLLatePost) Return Larvae objects filtered by the RLLatePost column
 * @method array findByRlearlypre(double $RLEarlyPre) Return Larvae objects filtered by the RLEarlyPre column
 * @method array findByRlearlyflex(double $RLEarlyFlex) Return Larvae objects filtered by the RLEarlyFlex column
 * @method array findByRlearlypost(double $RLEarlyPost) Return Larvae objects filtered by the RLEarlyPost column
 * @method array findByRlflexpre(double $RLFlexPre) Return Larvae objects filtered by the RLFlexPre column
 * @method array findByRlflexflex(double $RLFlexFlex) Return Larvae objects filtered by the RLFlexFlex column
 * @method array findByRlflexpost(double $RLFlexPost) Return Larvae objects filtered by the RLFlexPost column
 * @method array findByMeasurementspreref(int $MeasurementsPreRef) Return Larvae objects filtered by the MeasurementsPreRef column
 * @method array findByMeasurementsflexref(int $MeasurementsFlexRef) Return Larvae objects filtered by the MeasurementsFlexRef column
 * @method array findByMeasurementspostref(int $MeasurementsPostRef) Return Larvae objects filtered by the MeasurementsPostRef column
 * @method array findByTypepre(string $TypePre) Return Larvae objects filtered by the TypePre column
 * @method array findByTypeflex(string $TypeFlex) Return Larvae objects filtered by the TypeFlex column
 * @method array findByTypepost(string $TypePost) Return Larvae objects filtered by the TypePost column
 * @method array findByComment(string $comment) Return Larvae objects filtered by the comment column
 * @method array findByPreanallengthmaxpre(double $PreanalLengthMaxPre) Return Larvae objects filtered by the PreanalLengthMaxPre column
 * @method array findByPreanallengthmaxflex(double $PreanalLengthMaxFlex) Return Larvae objects filtered by the PreanalLengthMaxFlex column
 * @method array findByPreanallengthmaxpost(double $PreanalLengthMaxPost) Return Larvae objects filtered by the PreanalLengthMaxPost column
 * @method array findByPreanallengthminpre(double $PreanalLengthMinPre) Return Larvae objects filtered by the PreanalLengthMinPre column
 * @method array findByPreanallengthminflex(double $PreanalLengthMinFlex) Return Larvae objects filtered by the PreanalLengthMinFlex column
 * @method array findByPreanallengthminpost(double $PreanalLengthMinPost) Return Larvae objects filtered by the PreanalLengthMinPost column
 * @method array findByPreanallengthlitpre(double $PreanalLengthLitPre) Return Larvae objects filtered by the PreanalLengthLitPre column
 * @method array findByPreanallengthlitflex(double $PreanalLengthLitFlex) Return Larvae objects filtered by the PreanalLengthLitFlex column
 * @method array findByPreanallengthlitpost(double $PreanalLengthLitPost) Return Larvae objects filtered by the PreanalLengthLitPost column
 * @method array findByPrepeclengthmaxpre(double $PrepecLengthMaxPre) Return Larvae objects filtered by the PrepecLengthMaxPre column
 * @method array findByPrepeclengthmaxflex(double $PrepecLengthMaxFlex) Return Larvae objects filtered by the PrepecLengthMaxFlex column
 * @method array findByPrepeclengthmaxpost(double $PrepecLengthMaxPost) Return Larvae objects filtered by the PrepecLengthMaxPost column
 * @method array findByPrepeclengthminpre(double $PrepecLengthMinPre) Return Larvae objects filtered by the PrepecLengthMinPre column
 * @method array findByPrepeclengthminflex(double $PrepecLengthMinFlex) Return Larvae objects filtered by the PrepecLengthMinFlex column
 * @method array findByPrepeclengthminpost(double $PrepecLengthMinPost) Return Larvae objects filtered by the PrepecLengthMinPost column
 * @method array findByPrepeclengthlitpre(double $PrepecLengthLitPre) Return Larvae objects filtered by the PrepecLengthLitPre column
 * @method array findByPrepeclengthlitflex(double $PrepecLengthLitFlex) Return Larvae objects filtered by the PrepecLengthLitFlex column
 * @method array findByPrepeclengthlitpost(double $PrepecLengthLitPost) Return Larvae objects filtered by the PrepecLengthLitPost column
 * @method array findByPreorbitalmaxpre(double $PreorbitalMaxPre) Return Larvae objects filtered by the PreorbitalMaxPre column
 * @method array findByPreorbitalmaxflex(double $PreorbitalMaxFlex) Return Larvae objects filtered by the PreorbitalMaxFlex column
 * @method array findByPreorbitalmaxpost(double $PreorbitalMaxPost) Return Larvae objects filtered by the PreorbitalMaxPost column
 * @method array findByPreorbitalminpre(double $PreorbitalMinPre) Return Larvae objects filtered by the PreorbitalMinPre column
 * @method array findByPreorbitalminflex(double $PreorbitalMinFlex) Return Larvae objects filtered by the PreorbitalMinFlex column
 * @method array findByPreorbitalminpost(double $PreorbitalMinPost) Return Larvae objects filtered by the PreorbitalMinPost column
 * @method array findByPreorbitallitpre(double $PreorbitalLitPre) Return Larvae objects filtered by the PreorbitalLitPre column
 * @method array findByPreorbitallitflex(double $PreorbitalLitFlex) Return Larvae objects filtered by the PreorbitalLitFlex column
 * @method array findByPreorbitallitpost(double $PreorbitalLitPost) Return Larvae objects filtered by the PreorbitalLitPost column
 * @method array findByDiameterofeyemaxpre(double $DiameterofEyeMaxPre) Return Larvae objects filtered by the DiameterofEyeMaxPre column
 * @method array findByDiameterofeyemaxflex(double $DiameterofEyeMaxFlex) Return Larvae objects filtered by the DiameterofEyeMaxFlex column
 * @method array findByDiameterofeyemaxpost(double $DiameterofEyeMaxPost) Return Larvae objects filtered by the DiameterofEyeMaxPost column
 * @method array findByDiameterofeyeminpre(double $DiameterofEyeMinPre) Return Larvae objects filtered by the DiameterofEyeMinPre column
 * @method array findByDiameterofeyeminflex(double $DiameterofEyeMinFlex) Return Larvae objects filtered by the DiameterofEyeMinFlex column
 * @method array findByDiameterofeyeminpost(double $DiameterofEyeMinPost) Return Larvae objects filtered by the DiameterofEyeMinPost column
 * @method array findByDiameterofeyelitpre(double $DiameterofEyeLitPre) Return Larvae objects filtered by the DiameterofEyeLitPre column
 * @method array findByDiameterofeyelitflex(double $DiameterofEyeLitFlex) Return Larvae objects filtered by the DiameterofEyeLitFlex column
 * @method array findByDiameterofeyelitpost(double $DiameterofEyeLitPost) Return Larvae objects filtered by the DiameterofEyeLitPost column
 * @method array findByDeptheyemaxpre(double $DepthEyeMaxPre) Return Larvae objects filtered by the DepthEyeMaxPre column
 * @method array findByDeptheyemaxflex(double $DepthEyeMaxFlex) Return Larvae objects filtered by the DepthEyeMaxFlex column
 * @method array findByDeptheyemaxpost(double $DepthEyeMaxPost) Return Larvae objects filtered by the DepthEyeMaxPost column
 * @method array findByDeptheyeminpre(double $DepthEyeMinPre) Return Larvae objects filtered by the DepthEyeMinPre column
 * @method array findByDeptheyeminflex(double $DepthEyeMinFlex) Return Larvae objects filtered by the DepthEyeMinFlex column
 * @method array findByDeptheyeminpost(double $DepthEyeMinPost) Return Larvae objects filtered by the DepthEyeMinPost column
 * @method array findByDeptheyelitpre(double $DepthEyeLitPre) Return Larvae objects filtered by the DepthEyeLitPre column
 * @method array findByDeptheyelitflex(double $DepthEyeLitFlex) Return Larvae objects filtered by the DepthEyeLitFlex column
 * @method array findByDeptheyelitpost(double $DepthEyeLitPost) Return Larvae objects filtered by the DepthEyeLitPost column
 * @method array findByDepthpectoralmaxpre(double $DepthPectoralMaxPre) Return Larvae objects filtered by the DepthPectoralMaxPre column
 * @method array findByDepthpectoralmaxflex(double $DepthPectoralMaxFlex) Return Larvae objects filtered by the DepthPectoralMaxFlex column
 * @method array findByDepthpectoralmaxpost(double $DepthPectoralMaxPost) Return Larvae objects filtered by the DepthPectoralMaxPost column
 * @method array findByDepthpectoralminpre(double $DepthPectoralMinPre) Return Larvae objects filtered by the DepthPectoralMinPre column
 * @method array findByDepthpectoralminflex(double $DepthPectoralMinFlex) Return Larvae objects filtered by the DepthPectoralMinFlex column
 * @method array findByDepthpectoralminpost(double $DepthPectoralMinPost) Return Larvae objects filtered by the DepthPectoralMinPost column
 * @method array findByDepthpectorallitpre(double $DepthPectoralLitPre) Return Larvae objects filtered by the DepthPectoralLitPre column
 * @method array findByDepthpectorallitflex(double $DepthPectoralLitFlex) Return Larvae objects filtered by the DepthPectoralLitFlex column
 * @method array findByDepthpectorallitpost(double $DepthPectoralLitPost) Return Larvae objects filtered by the DepthPectoralLitPost column
 * @method array findByDepthanusmaxpre(double $DepthAnusMaxPre) Return Larvae objects filtered by the DepthAnusMaxPre column
 * @method array findByDepthanusmaxflex(double $DepthAnusMaxFlex) Return Larvae objects filtered by the DepthAnusMaxFlex column
 * @method array findByDepthanusmaxpost(double $DepthAnusMaxPost) Return Larvae objects filtered by the DepthAnusMaxPost column
 * @method array findByDepthanusminpre(double $DepthAnusMinPre) Return Larvae objects filtered by the DepthAnusMinPre column
 * @method array findByDepthanusminflex(double $DepthAnusMinFlex) Return Larvae objects filtered by the DepthAnusMinFlex column
 * @method array findByDepthanusminpost(double $DepthAnusMinPost) Return Larvae objects filtered by the DepthAnusMinPost column
 * @method array findByDepthanuslitpre(double $DepthAnusLitPre) Return Larvae objects filtered by the DepthAnusLitPre column
 * @method array findByDepthanuslitflex(double $DepthAnusLitFlex) Return Larvae objects filtered by the DepthAnusLitFlex column
 * @method array findByDepthanuslitpost(double $DepthAnusLitPost) Return Larvae objects filtered by the DepthAnusLitPost column
 * @method array findByAddcharyolks(string $AddCharYolks) Return Larvae objects filtered by the AddCharYolks column
 * @method array findByAddcharposts(string $AddCharPosts) Return Larvae objects filtered by the AddCharPosts column
 * @method array findByEaseofid(string $EaseofID) Return Larvae objects filtered by the EaseofID column
 * @method array findBySimilarspecies1(int $SimilarSpecies1) Return Larvae objects filtered by the SimilarSpecies1 column
 * @method array findBySimilarspec1remarks(string $SimilarSpec1Remarks) Return Larvae objects filtered by the SimilarSpec1Remarks column
 * @method array findBySimilarspecies2(int $SimilarSpecies2) Return Larvae objects filtered by the SimilarSpecies2 column
 * @method array findBySimilarspec2remarks(string $SimilarSpec2Remarks) Return Larvae objects filtered by the SimilarSpec2Remarks column
 * @method array findByEntered(int $Entered) Return Larvae objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Larvae objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Larvae objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Larvae objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Larvae objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Larvae objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Larvae objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLarvaeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLarvaeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'fbapp';
        }
        if (null === $modelName) {
            $modelName = 'Larvae';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LarvaeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LarvaeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LarvaeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LarvaeQuery) {
            return $criteria;
        }
        $query = new LarvaeQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$StockCode, $LarvalArea]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Larvae|Larvae[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LarvaePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LarvaePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Larvae A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `StockCode`, `SpecCode`, `LarvaeRefNo`, `OtherRef1`, `OtherRef2`, `LarvalArea`, `PlaceofDevelopment`, `LhMax`, `LBirthmaxRef`, `LhMin`, `LBirthminRef`, `LhMid`, `LBirthmodRef`, `PreanalLengthMaxY`, `PreAnmaxRef`, `PreanalLengthMinY`, `PreAnminRef`, `PreanalLengthModY`, `PreAnmodRef`, `FlexLengthMin`, `FlexLengthMod`, `FlexLengthMax`, `FlexLengthType`, `FlexLengthMinRef`, `FlexLengthModRef`, `FlexLengthMaxRef`, `TransLengthMin`, `TransLengthMod`, `TransLengthMax`, `TransLengthType`, `TransLengthMinRef`, `TransLengthModRef`, `TransLengthMaxRef`, `LarvalDurationMin`, `LarvalDurationMinRef`, `LarvalDurationMax`, `LarvalDurationMaxRef`, `LarvalDurationMod`, `LarvalDurationModRef`, `Shapeofyolksac`, `YolksacPigm`, `YolksacSegm`, `YolkRef`, `OilGlobules`, `OilGlobuleposH`, `OilGlobuleposV`, `OilGlobulePigm`, `RowsonTailY`, `OtherMelOnTailY`, `MelonHeadTrunkY`, `LyaMax`, `L1FeedmaxRef`, `LyaMin`, `L1FeedminRef`, `LyaMod`, `L1FeedmodRef`, `JanLarv`, `FebLarv`, `MarLarv`, `AprLarv`, `MayLarv`, `JunLarv`, `JulLarv`, `AugLarv`, `SepLarv`, `OctLarv`, `NovLarv`, `DecLarv`, `PresenceRef`, `WaterDepthMax`, `WaterTempMax`, `SalinityMax`, `pH`, `OxygenMax`, `WatermaxRef`, `WaterDepthMin`, `WaterTempMin`, `SalinityMin`, `pHMin`, `OxygenMin`, `WaterminRef`, `WaterDepthMod`, `WaterTempMod`, `SalinityMod`, `pHMod`, `OxygenMod`, `WatermodRef`, `StrikingFeature`, `LarvaPic`, `StrikingShapeLat`, `StrikingShapeDors`, `BodyForm`, `ShapeofGut`, `GasBladderEarly`, `GasBladderLate`, `SpinalArmatureEarl`, `SpinalArmatureLate`, `RowsonTailE`, `OtherMelonTailE`, `MelonHeadTrunkE`, `RowsonTaill`, `OtherMelonTaill`, `MelonHeadTrunkl`, `UrostyleRegion`, `UrostyleRegionLate`, `Peritoneum`, `PectoralsI`, `PectoralsII`, `PelvicsI`, `PelvicsII`, `MyomeresMax`, `MyomeresMin`, `MyomeresMod`, `MyomVert`, `TotMyomRef`, `MyomeresMaxPrean`, `MyomeresMinPrean`, `MyomeresModPrean`, `MyomVert2`, `PreAnMyoRef`, `RLLatePre`, `RLLateFlex`, `RLLatePost`, `RLEarlyPre`, `RLEarlyFlex`, `RLEarlyPost`, `RLFlexPre`, `RLFlexFlex`, `RLFlexPost`, `MeasurementsPreRef`, `MeasurementsFlexRef`, `MeasurementsPostRef`, `TypePre`, `TypeFlex`, `TypePost`, `comment`, `PreanalLengthMaxPre`, `PreanalLengthMaxFlex`, `PreanalLengthMaxPost`, `PreanalLengthMinPre`, `PreanalLengthMinFlex`, `PreanalLengthMinPost`, `PreanalLengthLitPre`, `PreanalLengthLitFlex`, `PreanalLengthLitPost`, `PrepecLengthMaxPre`, `PrepecLengthMaxFlex`, `PrepecLengthMaxPost`, `PrepecLengthMinPre`, `PrepecLengthMinFlex`, `PrepecLengthMinPost`, `PrepecLengthLitPre`, `PrepecLengthLitFlex`, `PrepecLengthLitPost`, `PreorbitalMaxPre`, `PreorbitalMaxFlex`, `PreorbitalMaxPost`, `PreorbitalMinPre`, `PreorbitalMinFlex`, `PreorbitalMinPost`, `PreorbitalLitPre`, `PreorbitalLitFlex`, `PreorbitalLitPost`, `DiameterofEyeMaxPre`, `DiameterofEyeMaxFlex`, `DiameterofEyeMaxPost`, `DiameterofEyeMinPre`, `DiameterofEyeMinFlex`, `DiameterofEyeMinPost`, `DiameterofEyeLitPre`, `DiameterofEyeLitFlex`, `DiameterofEyeLitPost`, `DepthEyeMaxPre`, `DepthEyeMaxFlex`, `DepthEyeMaxPost`, `DepthEyeMinPre`, `DepthEyeMinFlex`, `DepthEyeMinPost`, `DepthEyeLitPre`, `DepthEyeLitFlex`, `DepthEyeLitPost`, `DepthPectoralMaxPre`, `DepthPectoralMaxFlex`, `DepthPectoralMaxPost`, `DepthPectoralMinPre`, `DepthPectoralMinFlex`, `DepthPectoralMinPost`, `DepthPectoralLitPre`, `DepthPectoralLitFlex`, `DepthPectoralLitPost`, `DepthAnusMaxPre`, `DepthAnusMaxFlex`, `DepthAnusMaxPost`, `DepthAnusMinPre`, `DepthAnusMinFlex`, `DepthAnusMinPost`, `DepthAnusLitPre`, `DepthAnusLitFlex`, `DepthAnusLitPost`, `AddCharYolks`, `AddCharPosts`, `EaseofID`, `SimilarSpecies1`, `SimilarSpec1Remarks`, `SimilarSpecies2`, `SimilarSpec2Remarks`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `larvae` WHERE `StockCode` = :p0 AND `LarvalArea` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Larvae();
            $obj->hydrate($row);
            LarvaePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Larvae|Larvae[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Larvae[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(LarvaePeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(LarvaePeer::LARVALAREA, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(LarvaePeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(LarvaePeer::LARVALAREA, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the autoctr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE autoctr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE autoctr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE autoctr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE autoctr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(LarvaePeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(LarvaePeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the StockCode column
     *
     * Example usage:
     * <code>
     * $query->filterByStockcode(1234); // WHERE StockCode = 1234
     * $query->filterByStockcode(array(12, 34)); // WHERE StockCode IN (12, 34)
     * $query->filterByStockcode(array('min' => 12)); // WHERE StockCode >= 12
     * $query->filterByStockcode(array('max' => 12)); // WHERE StockCode <= 12
     * </code>
     *
     * @param     mixed $stockcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(LarvaePeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(LarvaePeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the SpecCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE SpecCode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE SpecCode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE SpecCode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE SpecCode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(LarvaePeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(LarvaePeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the LarvaeRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvaerefno(1234); // WHERE LarvaeRefNo = 1234
     * $query->filterByLarvaerefno(array(12, 34)); // WHERE LarvaeRefNo IN (12, 34)
     * $query->filterByLarvaerefno(array('min' => 12)); // WHERE LarvaeRefNo >= 12
     * $query->filterByLarvaerefno(array('max' => 12)); // WHERE LarvaeRefNo <= 12
     * </code>
     *
     * @param     mixed $larvaerefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLarvaerefno($larvaerefno = null, $comparison = null)
    {
        if (is_array($larvaerefno)) {
            $useMinMax = false;
            if (isset($larvaerefno['min'])) {
                $this->addUsingAlias(LarvaePeer::LARVAEREFNO, $larvaerefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvaerefno['max'])) {
                $this->addUsingAlias(LarvaePeer::LARVAEREFNO, $larvaerefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LARVAEREFNO, $larvaerefno, $comparison);
    }

    /**
     * Filter the query on the OtherRef1 column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherref1(1234); // WHERE OtherRef1 = 1234
     * $query->filterByOtherref1(array(12, 34)); // WHERE OtherRef1 IN (12, 34)
     * $query->filterByOtherref1(array('min' => 12)); // WHERE OtherRef1 >= 12
     * $query->filterByOtherref1(array('max' => 12)); // WHERE OtherRef1 <= 12
     * </code>
     *
     * @param     mixed $otherref1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByOtherref1($otherref1 = null, $comparison = null)
    {
        if (is_array($otherref1)) {
            $useMinMax = false;
            if (isset($otherref1['min'])) {
                $this->addUsingAlias(LarvaePeer::OTHERREF1, $otherref1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otherref1['max'])) {
                $this->addUsingAlias(LarvaePeer::OTHERREF1, $otherref1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::OTHERREF1, $otherref1, $comparison);
    }

    /**
     * Filter the query on the OtherRef2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherref2(1234); // WHERE OtherRef2 = 1234
     * $query->filterByOtherref2(array(12, 34)); // WHERE OtherRef2 IN (12, 34)
     * $query->filterByOtherref2(array('min' => 12)); // WHERE OtherRef2 >= 12
     * $query->filterByOtherref2(array('max' => 12)); // WHERE OtherRef2 <= 12
     * </code>
     *
     * @param     mixed $otherref2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByOtherref2($otherref2 = null, $comparison = null)
    {
        if (is_array($otherref2)) {
            $useMinMax = false;
            if (isset($otherref2['min'])) {
                $this->addUsingAlias(LarvaePeer::OTHERREF2, $otherref2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otherref2['max'])) {
                $this->addUsingAlias(LarvaePeer::OTHERREF2, $otherref2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::OTHERREF2, $otherref2, $comparison);
    }

    /**
     * Filter the query on the LarvalArea column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvalarea('fooValue');   // WHERE LarvalArea = 'fooValue'
     * $query->filterByLarvalarea('%fooValue%'); // WHERE LarvalArea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $larvalarea The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLarvalarea($larvalarea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($larvalarea)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $larvalarea)) {
                $larvalarea = str_replace('*', '%', $larvalarea);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LARVALAREA, $larvalarea, $comparison);
    }

    /**
     * Filter the query on the PlaceofDevelopment column
     *
     * Example usage:
     * <code>
     * $query->filterByPlaceofdevelopment('fooValue');   // WHERE PlaceofDevelopment = 'fooValue'
     * $query->filterByPlaceofdevelopment('%fooValue%'); // WHERE PlaceofDevelopment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $placeofdevelopment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPlaceofdevelopment($placeofdevelopment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($placeofdevelopment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $placeofdevelopment)) {
                $placeofdevelopment = str_replace('*', '%', $placeofdevelopment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PLACEOFDEVELOPMENT, $placeofdevelopment, $comparison);
    }

    /**
     * Filter the query on the LhMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLhmax(1234); // WHERE LhMax = 1234
     * $query->filterByLhmax(array(12, 34)); // WHERE LhMax IN (12, 34)
     * $query->filterByLhmax(array('min' => 12)); // WHERE LhMax >= 12
     * $query->filterByLhmax(array('max' => 12)); // WHERE LhMax <= 12
     * </code>
     *
     * @param     mixed $lhmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLhmax($lhmax = null, $comparison = null)
    {
        if (is_array($lhmax)) {
            $useMinMax = false;
            if (isset($lhmax['min'])) {
                $this->addUsingAlias(LarvaePeer::LHMAX, $lhmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lhmax['max'])) {
                $this->addUsingAlias(LarvaePeer::LHMAX, $lhmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LHMAX, $lhmax, $comparison);
    }

    /**
     * Filter the query on the LBirthmaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByLbirthmaxref(1234); // WHERE LBirthmaxRef = 1234
     * $query->filterByLbirthmaxref(array(12, 34)); // WHERE LBirthmaxRef IN (12, 34)
     * $query->filterByLbirthmaxref(array('min' => 12)); // WHERE LBirthmaxRef >= 12
     * $query->filterByLbirthmaxref(array('max' => 12)); // WHERE LBirthmaxRef <= 12
     * </code>
     *
     * @param     mixed $lbirthmaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLbirthmaxref($lbirthmaxref = null, $comparison = null)
    {
        if (is_array($lbirthmaxref)) {
            $useMinMax = false;
            if (isset($lbirthmaxref['min'])) {
                $this->addUsingAlias(LarvaePeer::LBIRTHMAXREF, $lbirthmaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lbirthmaxref['max'])) {
                $this->addUsingAlias(LarvaePeer::LBIRTHMAXREF, $lbirthmaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LBIRTHMAXREF, $lbirthmaxref, $comparison);
    }

    /**
     * Filter the query on the LhMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLhmin(1234); // WHERE LhMin = 1234
     * $query->filterByLhmin(array(12, 34)); // WHERE LhMin IN (12, 34)
     * $query->filterByLhmin(array('min' => 12)); // WHERE LhMin >= 12
     * $query->filterByLhmin(array('max' => 12)); // WHERE LhMin <= 12
     * </code>
     *
     * @param     mixed $lhmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLhmin($lhmin = null, $comparison = null)
    {
        if (is_array($lhmin)) {
            $useMinMax = false;
            if (isset($lhmin['min'])) {
                $this->addUsingAlias(LarvaePeer::LHMIN, $lhmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lhmin['max'])) {
                $this->addUsingAlias(LarvaePeer::LHMIN, $lhmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LHMIN, $lhmin, $comparison);
    }

    /**
     * Filter the query on the LBirthminRef column
     *
     * Example usage:
     * <code>
     * $query->filterByLbirthminref(1234); // WHERE LBirthminRef = 1234
     * $query->filterByLbirthminref(array(12, 34)); // WHERE LBirthminRef IN (12, 34)
     * $query->filterByLbirthminref(array('min' => 12)); // WHERE LBirthminRef >= 12
     * $query->filterByLbirthminref(array('max' => 12)); // WHERE LBirthminRef <= 12
     * </code>
     *
     * @param     mixed $lbirthminref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLbirthminref($lbirthminref = null, $comparison = null)
    {
        if (is_array($lbirthminref)) {
            $useMinMax = false;
            if (isset($lbirthminref['min'])) {
                $this->addUsingAlias(LarvaePeer::LBIRTHMINREF, $lbirthminref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lbirthminref['max'])) {
                $this->addUsingAlias(LarvaePeer::LBIRTHMINREF, $lbirthminref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LBIRTHMINREF, $lbirthminref, $comparison);
    }

    /**
     * Filter the query on the LhMid column
     *
     * Example usage:
     * <code>
     * $query->filterByLhmid(1234); // WHERE LhMid = 1234
     * $query->filterByLhmid(array(12, 34)); // WHERE LhMid IN (12, 34)
     * $query->filterByLhmid(array('min' => 12)); // WHERE LhMid >= 12
     * $query->filterByLhmid(array('max' => 12)); // WHERE LhMid <= 12
     * </code>
     *
     * @param     mixed $lhmid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLhmid($lhmid = null, $comparison = null)
    {
        if (is_array($lhmid)) {
            $useMinMax = false;
            if (isset($lhmid['min'])) {
                $this->addUsingAlias(LarvaePeer::LHMID, $lhmid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lhmid['max'])) {
                $this->addUsingAlias(LarvaePeer::LHMID, $lhmid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LHMID, $lhmid, $comparison);
    }

    /**
     * Filter the query on the LBirthmodRef column
     *
     * Example usage:
     * <code>
     * $query->filterByLbirthmodref(1234); // WHERE LBirthmodRef = 1234
     * $query->filterByLbirthmodref(array(12, 34)); // WHERE LBirthmodRef IN (12, 34)
     * $query->filterByLbirthmodref(array('min' => 12)); // WHERE LBirthmodRef >= 12
     * $query->filterByLbirthmodref(array('max' => 12)); // WHERE LBirthmodRef <= 12
     * </code>
     *
     * @param     mixed $lbirthmodref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLbirthmodref($lbirthmodref = null, $comparison = null)
    {
        if (is_array($lbirthmodref)) {
            $useMinMax = false;
            if (isset($lbirthmodref['min'])) {
                $this->addUsingAlias(LarvaePeer::LBIRTHMODREF, $lbirthmodref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lbirthmodref['max'])) {
                $this->addUsingAlias(LarvaePeer::LBIRTHMODREF, $lbirthmodref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LBIRTHMODREF, $lbirthmodref, $comparison);
    }

    /**
     * Filter the query on the PreanalLengthMaxY column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanallengthmaxy(1234); // WHERE PreanalLengthMaxY = 1234
     * $query->filterByPreanallengthmaxy(array(12, 34)); // WHERE PreanalLengthMaxY IN (12, 34)
     * $query->filterByPreanallengthmaxy(array('min' => 12)); // WHERE PreanalLengthMaxY >= 12
     * $query->filterByPreanallengthmaxy(array('max' => 12)); // WHERE PreanalLengthMaxY <= 12
     * </code>
     *
     * @param     mixed $preanallengthmaxy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanallengthmaxy($preanallengthmaxy = null, $comparison = null)
    {
        if (is_array($preanallengthmaxy)) {
            $useMinMax = false;
            if (isset($preanallengthmaxy['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMAXY, $preanallengthmaxy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanallengthmaxy['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMAXY, $preanallengthmaxy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANALLENGTHMAXY, $preanallengthmaxy, $comparison);
    }

    /**
     * Filter the query on the PreAnmaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanmaxref(1234); // WHERE PreAnmaxRef = 1234
     * $query->filterByPreanmaxref(array(12, 34)); // WHERE PreAnmaxRef IN (12, 34)
     * $query->filterByPreanmaxref(array('min' => 12)); // WHERE PreAnmaxRef >= 12
     * $query->filterByPreanmaxref(array('max' => 12)); // WHERE PreAnmaxRef <= 12
     * </code>
     *
     * @param     mixed $preanmaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanmaxref($preanmaxref = null, $comparison = null)
    {
        if (is_array($preanmaxref)) {
            $useMinMax = false;
            if (isset($preanmaxref['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANMAXREF, $preanmaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanmaxref['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANMAXREF, $preanmaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANMAXREF, $preanmaxref, $comparison);
    }

    /**
     * Filter the query on the PreanalLengthMinY column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanallengthminy(1234); // WHERE PreanalLengthMinY = 1234
     * $query->filterByPreanallengthminy(array(12, 34)); // WHERE PreanalLengthMinY IN (12, 34)
     * $query->filterByPreanallengthminy(array('min' => 12)); // WHERE PreanalLengthMinY >= 12
     * $query->filterByPreanallengthminy(array('max' => 12)); // WHERE PreanalLengthMinY <= 12
     * </code>
     *
     * @param     mixed $preanallengthminy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanallengthminy($preanallengthminy = null, $comparison = null)
    {
        if (is_array($preanallengthminy)) {
            $useMinMax = false;
            if (isset($preanallengthminy['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMINY, $preanallengthminy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanallengthminy['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMINY, $preanallengthminy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANALLENGTHMINY, $preanallengthminy, $comparison);
    }

    /**
     * Filter the query on the PreAnminRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanminref(1234); // WHERE PreAnminRef = 1234
     * $query->filterByPreanminref(array(12, 34)); // WHERE PreAnminRef IN (12, 34)
     * $query->filterByPreanminref(array('min' => 12)); // WHERE PreAnminRef >= 12
     * $query->filterByPreanminref(array('max' => 12)); // WHERE PreAnminRef <= 12
     * </code>
     *
     * @param     mixed $preanminref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanminref($preanminref = null, $comparison = null)
    {
        if (is_array($preanminref)) {
            $useMinMax = false;
            if (isset($preanminref['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANMINREF, $preanminref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanminref['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANMINREF, $preanminref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANMINREF, $preanminref, $comparison);
    }

    /**
     * Filter the query on the PreanalLengthModY column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanallengthmody(1234); // WHERE PreanalLengthModY = 1234
     * $query->filterByPreanallengthmody(array(12, 34)); // WHERE PreanalLengthModY IN (12, 34)
     * $query->filterByPreanallengthmody(array('min' => 12)); // WHERE PreanalLengthModY >= 12
     * $query->filterByPreanallengthmody(array('max' => 12)); // WHERE PreanalLengthModY <= 12
     * </code>
     *
     * @param     mixed $preanallengthmody The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanallengthmody($preanallengthmody = null, $comparison = null)
    {
        if (is_array($preanallengthmody)) {
            $useMinMax = false;
            if (isset($preanallengthmody['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMODY, $preanallengthmody['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanallengthmody['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMODY, $preanallengthmody['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANALLENGTHMODY, $preanallengthmody, $comparison);
    }

    /**
     * Filter the query on the PreAnmodRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanmodref(1234); // WHERE PreAnmodRef = 1234
     * $query->filterByPreanmodref(array(12, 34)); // WHERE PreAnmodRef IN (12, 34)
     * $query->filterByPreanmodref(array('min' => 12)); // WHERE PreAnmodRef >= 12
     * $query->filterByPreanmodref(array('max' => 12)); // WHERE PreAnmodRef <= 12
     * </code>
     *
     * @param     mixed $preanmodref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanmodref($preanmodref = null, $comparison = null)
    {
        if (is_array($preanmodref)) {
            $useMinMax = false;
            if (isset($preanmodref['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANMODREF, $preanmodref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanmodref['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANMODREF, $preanmodref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANMODREF, $preanmodref, $comparison);
    }

    /**
     * Filter the query on the FlexLengthMin column
     *
     * Example usage:
     * <code>
     * $query->filterByFlexlengthmin(1234); // WHERE FlexLengthMin = 1234
     * $query->filterByFlexlengthmin(array(12, 34)); // WHERE FlexLengthMin IN (12, 34)
     * $query->filterByFlexlengthmin(array('min' => 12)); // WHERE FlexLengthMin >= 12
     * $query->filterByFlexlengthmin(array('max' => 12)); // WHERE FlexLengthMin <= 12
     * </code>
     *
     * @param     mixed $flexlengthmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByFlexlengthmin($flexlengthmin = null, $comparison = null)
    {
        if (is_array($flexlengthmin)) {
            $useMinMax = false;
            if (isset($flexlengthmin['min'])) {
                $this->addUsingAlias(LarvaePeer::FLEXLENGTHMIN, $flexlengthmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flexlengthmin['max'])) {
                $this->addUsingAlias(LarvaePeer::FLEXLENGTHMIN, $flexlengthmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::FLEXLENGTHMIN, $flexlengthmin, $comparison);
    }

    /**
     * Filter the query on the FlexLengthMod column
     *
     * Example usage:
     * <code>
     * $query->filterByFlexlengthmod(1234); // WHERE FlexLengthMod = 1234
     * $query->filterByFlexlengthmod(array(12, 34)); // WHERE FlexLengthMod IN (12, 34)
     * $query->filterByFlexlengthmod(array('min' => 12)); // WHERE FlexLengthMod >= 12
     * $query->filterByFlexlengthmod(array('max' => 12)); // WHERE FlexLengthMod <= 12
     * </code>
     *
     * @param     mixed $flexlengthmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByFlexlengthmod($flexlengthmod = null, $comparison = null)
    {
        if (is_array($flexlengthmod)) {
            $useMinMax = false;
            if (isset($flexlengthmod['min'])) {
                $this->addUsingAlias(LarvaePeer::FLEXLENGTHMOD, $flexlengthmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flexlengthmod['max'])) {
                $this->addUsingAlias(LarvaePeer::FLEXLENGTHMOD, $flexlengthmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::FLEXLENGTHMOD, $flexlengthmod, $comparison);
    }

    /**
     * Filter the query on the FlexLengthMax column
     *
     * Example usage:
     * <code>
     * $query->filterByFlexlengthmax(1234); // WHERE FlexLengthMax = 1234
     * $query->filterByFlexlengthmax(array(12, 34)); // WHERE FlexLengthMax IN (12, 34)
     * $query->filterByFlexlengthmax(array('min' => 12)); // WHERE FlexLengthMax >= 12
     * $query->filterByFlexlengthmax(array('max' => 12)); // WHERE FlexLengthMax <= 12
     * </code>
     *
     * @param     mixed $flexlengthmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByFlexlengthmax($flexlengthmax = null, $comparison = null)
    {
        if (is_array($flexlengthmax)) {
            $useMinMax = false;
            if (isset($flexlengthmax['min'])) {
                $this->addUsingAlias(LarvaePeer::FLEXLENGTHMAX, $flexlengthmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flexlengthmax['max'])) {
                $this->addUsingAlias(LarvaePeer::FLEXLENGTHMAX, $flexlengthmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::FLEXLENGTHMAX, $flexlengthmax, $comparison);
    }

    /**
     * Filter the query on the FlexLengthType column
     *
     * Example usage:
     * <code>
     * $query->filterByFlexlengthtype('fooValue');   // WHERE FlexLengthType = 'fooValue'
     * $query->filterByFlexlengthtype('%fooValue%'); // WHERE FlexLengthType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $flexlengthtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByFlexlengthtype($flexlengthtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($flexlengthtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $flexlengthtype)) {
                $flexlengthtype = str_replace('*', '%', $flexlengthtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::FLEXLENGTHTYPE, $flexlengthtype, $comparison);
    }

    /**
     * Filter the query on the FlexLengthMinRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFlexlengthminref(1234); // WHERE FlexLengthMinRef = 1234
     * $query->filterByFlexlengthminref(array(12, 34)); // WHERE FlexLengthMinRef IN (12, 34)
     * $query->filterByFlexlengthminref(array('min' => 12)); // WHERE FlexLengthMinRef >= 12
     * $query->filterByFlexlengthminref(array('max' => 12)); // WHERE FlexLengthMinRef <= 12
     * </code>
     *
     * @param     mixed $flexlengthminref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByFlexlengthminref($flexlengthminref = null, $comparison = null)
    {
        if (is_array($flexlengthminref)) {
            $useMinMax = false;
            if (isset($flexlengthminref['min'])) {
                $this->addUsingAlias(LarvaePeer::FLEXLENGTHMINREF, $flexlengthminref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flexlengthminref['max'])) {
                $this->addUsingAlias(LarvaePeer::FLEXLENGTHMINREF, $flexlengthminref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::FLEXLENGTHMINREF, $flexlengthminref, $comparison);
    }

    /**
     * Filter the query on the FlexLengthModRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFlexlengthmodref(1234); // WHERE FlexLengthModRef = 1234
     * $query->filterByFlexlengthmodref(array(12, 34)); // WHERE FlexLengthModRef IN (12, 34)
     * $query->filterByFlexlengthmodref(array('min' => 12)); // WHERE FlexLengthModRef >= 12
     * $query->filterByFlexlengthmodref(array('max' => 12)); // WHERE FlexLengthModRef <= 12
     * </code>
     *
     * @param     mixed $flexlengthmodref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByFlexlengthmodref($flexlengthmodref = null, $comparison = null)
    {
        if (is_array($flexlengthmodref)) {
            $useMinMax = false;
            if (isset($flexlengthmodref['min'])) {
                $this->addUsingAlias(LarvaePeer::FLEXLENGTHMODREF, $flexlengthmodref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flexlengthmodref['max'])) {
                $this->addUsingAlias(LarvaePeer::FLEXLENGTHMODREF, $flexlengthmodref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::FLEXLENGTHMODREF, $flexlengthmodref, $comparison);
    }

    /**
     * Filter the query on the FlexLengthMaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFlexlengthmaxref(1234); // WHERE FlexLengthMaxRef = 1234
     * $query->filterByFlexlengthmaxref(array(12, 34)); // WHERE FlexLengthMaxRef IN (12, 34)
     * $query->filterByFlexlengthmaxref(array('min' => 12)); // WHERE FlexLengthMaxRef >= 12
     * $query->filterByFlexlengthmaxref(array('max' => 12)); // WHERE FlexLengthMaxRef <= 12
     * </code>
     *
     * @param     mixed $flexlengthmaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByFlexlengthmaxref($flexlengthmaxref = null, $comparison = null)
    {
        if (is_array($flexlengthmaxref)) {
            $useMinMax = false;
            if (isset($flexlengthmaxref['min'])) {
                $this->addUsingAlias(LarvaePeer::FLEXLENGTHMAXREF, $flexlengthmaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flexlengthmaxref['max'])) {
                $this->addUsingAlias(LarvaePeer::FLEXLENGTHMAXREF, $flexlengthmaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::FLEXLENGTHMAXREF, $flexlengthmaxref, $comparison);
    }

    /**
     * Filter the query on the TransLengthMin column
     *
     * Example usage:
     * <code>
     * $query->filterByTranslengthmin(1234); // WHERE TransLengthMin = 1234
     * $query->filterByTranslengthmin(array(12, 34)); // WHERE TransLengthMin IN (12, 34)
     * $query->filterByTranslengthmin(array('min' => 12)); // WHERE TransLengthMin >= 12
     * $query->filterByTranslengthmin(array('max' => 12)); // WHERE TransLengthMin <= 12
     * </code>
     *
     * @param     mixed $translengthmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByTranslengthmin($translengthmin = null, $comparison = null)
    {
        if (is_array($translengthmin)) {
            $useMinMax = false;
            if (isset($translengthmin['min'])) {
                $this->addUsingAlias(LarvaePeer::TRANSLENGTHMIN, $translengthmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($translengthmin['max'])) {
                $this->addUsingAlias(LarvaePeer::TRANSLENGTHMIN, $translengthmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::TRANSLENGTHMIN, $translengthmin, $comparison);
    }

    /**
     * Filter the query on the TransLengthMod column
     *
     * Example usage:
     * <code>
     * $query->filterByTranslengthmod(1234); // WHERE TransLengthMod = 1234
     * $query->filterByTranslengthmod(array(12, 34)); // WHERE TransLengthMod IN (12, 34)
     * $query->filterByTranslengthmod(array('min' => 12)); // WHERE TransLengthMod >= 12
     * $query->filterByTranslengthmod(array('max' => 12)); // WHERE TransLengthMod <= 12
     * </code>
     *
     * @param     mixed $translengthmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByTranslengthmod($translengthmod = null, $comparison = null)
    {
        if (is_array($translengthmod)) {
            $useMinMax = false;
            if (isset($translengthmod['min'])) {
                $this->addUsingAlias(LarvaePeer::TRANSLENGTHMOD, $translengthmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($translengthmod['max'])) {
                $this->addUsingAlias(LarvaePeer::TRANSLENGTHMOD, $translengthmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::TRANSLENGTHMOD, $translengthmod, $comparison);
    }

    /**
     * Filter the query on the TransLengthMax column
     *
     * Example usage:
     * <code>
     * $query->filterByTranslengthmax(1234); // WHERE TransLengthMax = 1234
     * $query->filterByTranslengthmax(array(12, 34)); // WHERE TransLengthMax IN (12, 34)
     * $query->filterByTranslengthmax(array('min' => 12)); // WHERE TransLengthMax >= 12
     * $query->filterByTranslengthmax(array('max' => 12)); // WHERE TransLengthMax <= 12
     * </code>
     *
     * @param     mixed $translengthmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByTranslengthmax($translengthmax = null, $comparison = null)
    {
        if (is_array($translengthmax)) {
            $useMinMax = false;
            if (isset($translengthmax['min'])) {
                $this->addUsingAlias(LarvaePeer::TRANSLENGTHMAX, $translengthmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($translengthmax['max'])) {
                $this->addUsingAlias(LarvaePeer::TRANSLENGTHMAX, $translengthmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::TRANSLENGTHMAX, $translengthmax, $comparison);
    }

    /**
     * Filter the query on the TransLengthType column
     *
     * Example usage:
     * <code>
     * $query->filterByTranslengthtype('fooValue');   // WHERE TransLengthType = 'fooValue'
     * $query->filterByTranslengthtype('%fooValue%'); // WHERE TransLengthType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $translengthtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByTranslengthtype($translengthtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($translengthtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $translengthtype)) {
                $translengthtype = str_replace('*', '%', $translengthtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::TRANSLENGTHTYPE, $translengthtype, $comparison);
    }

    /**
     * Filter the query on the TransLengthMinRef column
     *
     * Example usage:
     * <code>
     * $query->filterByTranslengthminref(1234); // WHERE TransLengthMinRef = 1234
     * $query->filterByTranslengthminref(array(12, 34)); // WHERE TransLengthMinRef IN (12, 34)
     * $query->filterByTranslengthminref(array('min' => 12)); // WHERE TransLengthMinRef >= 12
     * $query->filterByTranslengthminref(array('max' => 12)); // WHERE TransLengthMinRef <= 12
     * </code>
     *
     * @param     mixed $translengthminref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByTranslengthminref($translengthminref = null, $comparison = null)
    {
        if (is_array($translengthminref)) {
            $useMinMax = false;
            if (isset($translengthminref['min'])) {
                $this->addUsingAlias(LarvaePeer::TRANSLENGTHMINREF, $translengthminref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($translengthminref['max'])) {
                $this->addUsingAlias(LarvaePeer::TRANSLENGTHMINREF, $translengthminref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::TRANSLENGTHMINREF, $translengthminref, $comparison);
    }

    /**
     * Filter the query on the TransLengthModRef column
     *
     * Example usage:
     * <code>
     * $query->filterByTranslengthmodref(1234); // WHERE TransLengthModRef = 1234
     * $query->filterByTranslengthmodref(array(12, 34)); // WHERE TransLengthModRef IN (12, 34)
     * $query->filterByTranslengthmodref(array('min' => 12)); // WHERE TransLengthModRef >= 12
     * $query->filterByTranslengthmodref(array('max' => 12)); // WHERE TransLengthModRef <= 12
     * </code>
     *
     * @param     mixed $translengthmodref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByTranslengthmodref($translengthmodref = null, $comparison = null)
    {
        if (is_array($translengthmodref)) {
            $useMinMax = false;
            if (isset($translengthmodref['min'])) {
                $this->addUsingAlias(LarvaePeer::TRANSLENGTHMODREF, $translengthmodref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($translengthmodref['max'])) {
                $this->addUsingAlias(LarvaePeer::TRANSLENGTHMODREF, $translengthmodref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::TRANSLENGTHMODREF, $translengthmodref, $comparison);
    }

    /**
     * Filter the query on the TransLengthMaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByTranslengthmaxref(1234); // WHERE TransLengthMaxRef = 1234
     * $query->filterByTranslengthmaxref(array(12, 34)); // WHERE TransLengthMaxRef IN (12, 34)
     * $query->filterByTranslengthmaxref(array('min' => 12)); // WHERE TransLengthMaxRef >= 12
     * $query->filterByTranslengthmaxref(array('max' => 12)); // WHERE TransLengthMaxRef <= 12
     * </code>
     *
     * @param     mixed $translengthmaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByTranslengthmaxref($translengthmaxref = null, $comparison = null)
    {
        if (is_array($translengthmaxref)) {
            $useMinMax = false;
            if (isset($translengthmaxref['min'])) {
                $this->addUsingAlias(LarvaePeer::TRANSLENGTHMAXREF, $translengthmaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($translengthmaxref['max'])) {
                $this->addUsingAlias(LarvaePeer::TRANSLENGTHMAXREF, $translengthmaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::TRANSLENGTHMAXREF, $translengthmaxref, $comparison);
    }

    /**
     * Filter the query on the LarvalDurationMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvaldurationmin(1234); // WHERE LarvalDurationMin = 1234
     * $query->filterByLarvaldurationmin(array(12, 34)); // WHERE LarvalDurationMin IN (12, 34)
     * $query->filterByLarvaldurationmin(array('min' => 12)); // WHERE LarvalDurationMin >= 12
     * $query->filterByLarvaldurationmin(array('max' => 12)); // WHERE LarvalDurationMin <= 12
     * </code>
     *
     * @param     mixed $larvaldurationmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLarvaldurationmin($larvaldurationmin = null, $comparison = null)
    {
        if (is_array($larvaldurationmin)) {
            $useMinMax = false;
            if (isset($larvaldurationmin['min'])) {
                $this->addUsingAlias(LarvaePeer::LARVALDURATIONMIN, $larvaldurationmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvaldurationmin['max'])) {
                $this->addUsingAlias(LarvaePeer::LARVALDURATIONMIN, $larvaldurationmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LARVALDURATIONMIN, $larvaldurationmin, $comparison);
    }

    /**
     * Filter the query on the LarvalDurationMinRef column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvaldurationminref(1234); // WHERE LarvalDurationMinRef = 1234
     * $query->filterByLarvaldurationminref(array(12, 34)); // WHERE LarvalDurationMinRef IN (12, 34)
     * $query->filterByLarvaldurationminref(array('min' => 12)); // WHERE LarvalDurationMinRef >= 12
     * $query->filterByLarvaldurationminref(array('max' => 12)); // WHERE LarvalDurationMinRef <= 12
     * </code>
     *
     * @param     mixed $larvaldurationminref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLarvaldurationminref($larvaldurationminref = null, $comparison = null)
    {
        if (is_array($larvaldurationminref)) {
            $useMinMax = false;
            if (isset($larvaldurationminref['min'])) {
                $this->addUsingAlias(LarvaePeer::LARVALDURATIONMINREF, $larvaldurationminref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvaldurationminref['max'])) {
                $this->addUsingAlias(LarvaePeer::LARVALDURATIONMINREF, $larvaldurationminref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LARVALDURATIONMINREF, $larvaldurationminref, $comparison);
    }

    /**
     * Filter the query on the LarvalDurationMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvaldurationmax(1234); // WHERE LarvalDurationMax = 1234
     * $query->filterByLarvaldurationmax(array(12, 34)); // WHERE LarvalDurationMax IN (12, 34)
     * $query->filterByLarvaldurationmax(array('min' => 12)); // WHERE LarvalDurationMax >= 12
     * $query->filterByLarvaldurationmax(array('max' => 12)); // WHERE LarvalDurationMax <= 12
     * </code>
     *
     * @param     mixed $larvaldurationmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLarvaldurationmax($larvaldurationmax = null, $comparison = null)
    {
        if (is_array($larvaldurationmax)) {
            $useMinMax = false;
            if (isset($larvaldurationmax['min'])) {
                $this->addUsingAlias(LarvaePeer::LARVALDURATIONMAX, $larvaldurationmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvaldurationmax['max'])) {
                $this->addUsingAlias(LarvaePeer::LARVALDURATIONMAX, $larvaldurationmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LARVALDURATIONMAX, $larvaldurationmax, $comparison);
    }

    /**
     * Filter the query on the LarvalDurationMaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvaldurationmaxref(1234); // WHERE LarvalDurationMaxRef = 1234
     * $query->filterByLarvaldurationmaxref(array(12, 34)); // WHERE LarvalDurationMaxRef IN (12, 34)
     * $query->filterByLarvaldurationmaxref(array('min' => 12)); // WHERE LarvalDurationMaxRef >= 12
     * $query->filterByLarvaldurationmaxref(array('max' => 12)); // WHERE LarvalDurationMaxRef <= 12
     * </code>
     *
     * @param     mixed $larvaldurationmaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLarvaldurationmaxref($larvaldurationmaxref = null, $comparison = null)
    {
        if (is_array($larvaldurationmaxref)) {
            $useMinMax = false;
            if (isset($larvaldurationmaxref['min'])) {
                $this->addUsingAlias(LarvaePeer::LARVALDURATIONMAXREF, $larvaldurationmaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvaldurationmaxref['max'])) {
                $this->addUsingAlias(LarvaePeer::LARVALDURATIONMAXREF, $larvaldurationmaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LARVALDURATIONMAXREF, $larvaldurationmaxref, $comparison);
    }

    /**
     * Filter the query on the LarvalDurationMod column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvaldurationmod(1234); // WHERE LarvalDurationMod = 1234
     * $query->filterByLarvaldurationmod(array(12, 34)); // WHERE LarvalDurationMod IN (12, 34)
     * $query->filterByLarvaldurationmod(array('min' => 12)); // WHERE LarvalDurationMod >= 12
     * $query->filterByLarvaldurationmod(array('max' => 12)); // WHERE LarvalDurationMod <= 12
     * </code>
     *
     * @param     mixed $larvaldurationmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLarvaldurationmod($larvaldurationmod = null, $comparison = null)
    {
        if (is_array($larvaldurationmod)) {
            $useMinMax = false;
            if (isset($larvaldurationmod['min'])) {
                $this->addUsingAlias(LarvaePeer::LARVALDURATIONMOD, $larvaldurationmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvaldurationmod['max'])) {
                $this->addUsingAlias(LarvaePeer::LARVALDURATIONMOD, $larvaldurationmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LARVALDURATIONMOD, $larvaldurationmod, $comparison);
    }

    /**
     * Filter the query on the LarvalDurationModRef column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvaldurationmodref(1234); // WHERE LarvalDurationModRef = 1234
     * $query->filterByLarvaldurationmodref(array(12, 34)); // WHERE LarvalDurationModRef IN (12, 34)
     * $query->filterByLarvaldurationmodref(array('min' => 12)); // WHERE LarvalDurationModRef >= 12
     * $query->filterByLarvaldurationmodref(array('max' => 12)); // WHERE LarvalDurationModRef <= 12
     * </code>
     *
     * @param     mixed $larvaldurationmodref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLarvaldurationmodref($larvaldurationmodref = null, $comparison = null)
    {
        if (is_array($larvaldurationmodref)) {
            $useMinMax = false;
            if (isset($larvaldurationmodref['min'])) {
                $this->addUsingAlias(LarvaePeer::LARVALDURATIONMODREF, $larvaldurationmodref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvaldurationmodref['max'])) {
                $this->addUsingAlias(LarvaePeer::LARVALDURATIONMODREF, $larvaldurationmodref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LARVALDURATIONMODREF, $larvaldurationmodref, $comparison);
    }

    /**
     * Filter the query on the Shapeofyolksac column
     *
     * Example usage:
     * <code>
     * $query->filterByShapeofyolksac('fooValue');   // WHERE Shapeofyolksac = 'fooValue'
     * $query->filterByShapeofyolksac('%fooValue%'); // WHERE Shapeofyolksac LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shapeofyolksac The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByShapeofyolksac($shapeofyolksac = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shapeofyolksac)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shapeofyolksac)) {
                $shapeofyolksac = str_replace('*', '%', $shapeofyolksac);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::SHAPEOFYOLKSAC, $shapeofyolksac, $comparison);
    }

    /**
     * Filter the query on the YolksacPigm column
     *
     * Example usage:
     * <code>
     * $query->filterByYolksacpigm('fooValue');   // WHERE YolksacPigm = 'fooValue'
     * $query->filterByYolksacpigm('%fooValue%'); // WHERE YolksacPigm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $yolksacpigm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByYolksacpigm($yolksacpigm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($yolksacpigm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $yolksacpigm)) {
                $yolksacpigm = str_replace('*', '%', $yolksacpigm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::YOLKSACPIGM, $yolksacpigm, $comparison);
    }

    /**
     * Filter the query on the YolksacSegm column
     *
     * Example usage:
     * <code>
     * $query->filterByYolksacsegm('fooValue');   // WHERE YolksacSegm = 'fooValue'
     * $query->filterByYolksacsegm('%fooValue%'); // WHERE YolksacSegm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $yolksacsegm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByYolksacsegm($yolksacsegm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($yolksacsegm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $yolksacsegm)) {
                $yolksacsegm = str_replace('*', '%', $yolksacsegm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::YOLKSACSEGM, $yolksacsegm, $comparison);
    }

    /**
     * Filter the query on the YolkRef column
     *
     * Example usage:
     * <code>
     * $query->filterByYolkref(1234); // WHERE YolkRef = 1234
     * $query->filterByYolkref(array(12, 34)); // WHERE YolkRef IN (12, 34)
     * $query->filterByYolkref(array('min' => 12)); // WHERE YolkRef >= 12
     * $query->filterByYolkref(array('max' => 12)); // WHERE YolkRef <= 12
     * </code>
     *
     * @param     mixed $yolkref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByYolkref($yolkref = null, $comparison = null)
    {
        if (is_array($yolkref)) {
            $useMinMax = false;
            if (isset($yolkref['min'])) {
                $this->addUsingAlias(LarvaePeer::YOLKREF, $yolkref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yolkref['max'])) {
                $this->addUsingAlias(LarvaePeer::YOLKREF, $yolkref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::YOLKREF, $yolkref, $comparison);
    }

    /**
     * Filter the query on the OilGlobules column
     *
     * Example usage:
     * <code>
     * $query->filterByOilglobules('fooValue');   // WHERE OilGlobules = 'fooValue'
     * $query->filterByOilglobules('%fooValue%'); // WHERE OilGlobules LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oilglobules The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByOilglobules($oilglobules = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oilglobules)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $oilglobules)) {
                $oilglobules = str_replace('*', '%', $oilglobules);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::OILGLOBULES, $oilglobules, $comparison);
    }

    /**
     * Filter the query on the OilGlobuleposH column
     *
     * Example usage:
     * <code>
     * $query->filterByOilglobuleposh('fooValue');   // WHERE OilGlobuleposH = 'fooValue'
     * $query->filterByOilglobuleposh('%fooValue%'); // WHERE OilGlobuleposH LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oilglobuleposh The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByOilglobuleposh($oilglobuleposh = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oilglobuleposh)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $oilglobuleposh)) {
                $oilglobuleposh = str_replace('*', '%', $oilglobuleposh);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::OILGLOBULEPOSH, $oilglobuleposh, $comparison);
    }

    /**
     * Filter the query on the OilGlobuleposV column
     *
     * Example usage:
     * <code>
     * $query->filterByOilglobuleposv('fooValue');   // WHERE OilGlobuleposV = 'fooValue'
     * $query->filterByOilglobuleposv('%fooValue%'); // WHERE OilGlobuleposV LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oilglobuleposv The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByOilglobuleposv($oilglobuleposv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oilglobuleposv)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $oilglobuleposv)) {
                $oilglobuleposv = str_replace('*', '%', $oilglobuleposv);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::OILGLOBULEPOSV, $oilglobuleposv, $comparison);
    }

    /**
     * Filter the query on the OilGlobulePigm column
     *
     * Example usage:
     * <code>
     * $query->filterByOilglobulepigm('fooValue');   // WHERE OilGlobulePigm = 'fooValue'
     * $query->filterByOilglobulepigm('%fooValue%'); // WHERE OilGlobulePigm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $oilglobulepigm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByOilglobulepigm($oilglobulepigm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($oilglobulepigm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $oilglobulepigm)) {
                $oilglobulepigm = str_replace('*', '%', $oilglobulepigm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::OILGLOBULEPIGM, $oilglobulepigm, $comparison);
    }

    /**
     * Filter the query on the RowsonTailY column
     *
     * Example usage:
     * <code>
     * $query->filterByRowsontaily('fooValue');   // WHERE RowsonTailY = 'fooValue'
     * $query->filterByRowsontaily('%fooValue%'); // WHERE RowsonTailY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rowsontaily The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByRowsontaily($rowsontaily = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rowsontaily)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rowsontaily)) {
                $rowsontaily = str_replace('*', '%', $rowsontaily);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::ROWSONTAILY, $rowsontaily, $comparison);
    }

    /**
     * Filter the query on the OtherMelOnTailY column
     *
     * Example usage:
     * <code>
     * $query->filterByOthermelontaily('fooValue');   // WHERE OtherMelOnTailY = 'fooValue'
     * $query->filterByOthermelontaily('%fooValue%'); // WHERE OtherMelOnTailY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $othermelontaily The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByOthermelontaily($othermelontaily = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($othermelontaily)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $othermelontaily)) {
                $othermelontaily = str_replace('*', '%', $othermelontaily);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::OTHERMELONTAILY, $othermelontaily, $comparison);
    }

    /**
     * Filter the query on the MelonHeadTrunkY column
     *
     * Example usage:
     * <code>
     * $query->filterByMelonheadtrunky('fooValue');   // WHERE MelonHeadTrunkY = 'fooValue'
     * $query->filterByMelonheadtrunky('%fooValue%'); // WHERE MelonHeadTrunkY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $melonheadtrunky The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMelonheadtrunky($melonheadtrunky = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($melonheadtrunky)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $melonheadtrunky)) {
                $melonheadtrunky = str_replace('*', '%', $melonheadtrunky);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MELONHEADTRUNKY, $melonheadtrunky, $comparison);
    }

    /**
     * Filter the query on the LyaMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLyamax(1234); // WHERE LyaMax = 1234
     * $query->filterByLyamax(array(12, 34)); // WHERE LyaMax IN (12, 34)
     * $query->filterByLyamax(array('min' => 12)); // WHERE LyaMax >= 12
     * $query->filterByLyamax(array('max' => 12)); // WHERE LyaMax <= 12
     * </code>
     *
     * @param     mixed $lyamax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLyamax($lyamax = null, $comparison = null)
    {
        if (is_array($lyamax)) {
            $useMinMax = false;
            if (isset($lyamax['min'])) {
                $this->addUsingAlias(LarvaePeer::LYAMAX, $lyamax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lyamax['max'])) {
                $this->addUsingAlias(LarvaePeer::LYAMAX, $lyamax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LYAMAX, $lyamax, $comparison);
    }

    /**
     * Filter the query on the L1FeedmaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByL1feedmaxref(1234); // WHERE L1FeedmaxRef = 1234
     * $query->filterByL1feedmaxref(array(12, 34)); // WHERE L1FeedmaxRef IN (12, 34)
     * $query->filterByL1feedmaxref(array('min' => 12)); // WHERE L1FeedmaxRef >= 12
     * $query->filterByL1feedmaxref(array('max' => 12)); // WHERE L1FeedmaxRef <= 12
     * </code>
     *
     * @param     mixed $l1feedmaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByL1feedmaxref($l1feedmaxref = null, $comparison = null)
    {
        if (is_array($l1feedmaxref)) {
            $useMinMax = false;
            if (isset($l1feedmaxref['min'])) {
                $this->addUsingAlias(LarvaePeer::L1FEEDMAXREF, $l1feedmaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($l1feedmaxref['max'])) {
                $this->addUsingAlias(LarvaePeer::L1FEEDMAXREF, $l1feedmaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::L1FEEDMAXREF, $l1feedmaxref, $comparison);
    }

    /**
     * Filter the query on the LyaMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLyamin(1234); // WHERE LyaMin = 1234
     * $query->filterByLyamin(array(12, 34)); // WHERE LyaMin IN (12, 34)
     * $query->filterByLyamin(array('min' => 12)); // WHERE LyaMin >= 12
     * $query->filterByLyamin(array('max' => 12)); // WHERE LyaMin <= 12
     * </code>
     *
     * @param     mixed $lyamin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLyamin($lyamin = null, $comparison = null)
    {
        if (is_array($lyamin)) {
            $useMinMax = false;
            if (isset($lyamin['min'])) {
                $this->addUsingAlias(LarvaePeer::LYAMIN, $lyamin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lyamin['max'])) {
                $this->addUsingAlias(LarvaePeer::LYAMIN, $lyamin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LYAMIN, $lyamin, $comparison);
    }

    /**
     * Filter the query on the L1FeedminRef column
     *
     * Example usage:
     * <code>
     * $query->filterByL1feedminref(1234); // WHERE L1FeedminRef = 1234
     * $query->filterByL1feedminref(array(12, 34)); // WHERE L1FeedminRef IN (12, 34)
     * $query->filterByL1feedminref(array('min' => 12)); // WHERE L1FeedminRef >= 12
     * $query->filterByL1feedminref(array('max' => 12)); // WHERE L1FeedminRef <= 12
     * </code>
     *
     * @param     mixed $l1feedminref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByL1feedminref($l1feedminref = null, $comparison = null)
    {
        if (is_array($l1feedminref)) {
            $useMinMax = false;
            if (isset($l1feedminref['min'])) {
                $this->addUsingAlias(LarvaePeer::L1FEEDMINREF, $l1feedminref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($l1feedminref['max'])) {
                $this->addUsingAlias(LarvaePeer::L1FEEDMINREF, $l1feedminref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::L1FEEDMINREF, $l1feedminref, $comparison);
    }

    /**
     * Filter the query on the LyaMod column
     *
     * Example usage:
     * <code>
     * $query->filterByLyamod(1234); // WHERE LyaMod = 1234
     * $query->filterByLyamod(array(12, 34)); // WHERE LyaMod IN (12, 34)
     * $query->filterByLyamod(array('min' => 12)); // WHERE LyaMod >= 12
     * $query->filterByLyamod(array('max' => 12)); // WHERE LyaMod <= 12
     * </code>
     *
     * @param     mixed $lyamod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLyamod($lyamod = null, $comparison = null)
    {
        if (is_array($lyamod)) {
            $useMinMax = false;
            if (isset($lyamod['min'])) {
                $this->addUsingAlias(LarvaePeer::LYAMOD, $lyamod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lyamod['max'])) {
                $this->addUsingAlias(LarvaePeer::LYAMOD, $lyamod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LYAMOD, $lyamod, $comparison);
    }

    /**
     * Filter the query on the L1FeedmodRef column
     *
     * Example usage:
     * <code>
     * $query->filterByL1feedmodref(1234); // WHERE L1FeedmodRef = 1234
     * $query->filterByL1feedmodref(array(12, 34)); // WHERE L1FeedmodRef IN (12, 34)
     * $query->filterByL1feedmodref(array('min' => 12)); // WHERE L1FeedmodRef >= 12
     * $query->filterByL1feedmodref(array('max' => 12)); // WHERE L1FeedmodRef <= 12
     * </code>
     *
     * @param     mixed $l1feedmodref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByL1feedmodref($l1feedmodref = null, $comparison = null)
    {
        if (is_array($l1feedmodref)) {
            $useMinMax = false;
            if (isset($l1feedmodref['min'])) {
                $this->addUsingAlias(LarvaePeer::L1FEEDMODREF, $l1feedmodref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($l1feedmodref['max'])) {
                $this->addUsingAlias(LarvaePeer::L1FEEDMODREF, $l1feedmodref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::L1FEEDMODREF, $l1feedmodref, $comparison);
    }

    /**
     * Filter the query on the JanLarv column
     *
     * Example usage:
     * <code>
     * $query->filterByJanlarv(1234); // WHERE JanLarv = 1234
     * $query->filterByJanlarv(array(12, 34)); // WHERE JanLarv IN (12, 34)
     * $query->filterByJanlarv(array('min' => 12)); // WHERE JanLarv >= 12
     * $query->filterByJanlarv(array('max' => 12)); // WHERE JanLarv <= 12
     * </code>
     *
     * @param     mixed $janlarv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByJanlarv($janlarv = null, $comparison = null)
    {
        if (is_array($janlarv)) {
            $useMinMax = false;
            if (isset($janlarv['min'])) {
                $this->addUsingAlias(LarvaePeer::JANLARV, $janlarv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($janlarv['max'])) {
                $this->addUsingAlias(LarvaePeer::JANLARV, $janlarv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::JANLARV, $janlarv, $comparison);
    }

    /**
     * Filter the query on the FebLarv column
     *
     * Example usage:
     * <code>
     * $query->filterByFeblarv(1234); // WHERE FebLarv = 1234
     * $query->filterByFeblarv(array(12, 34)); // WHERE FebLarv IN (12, 34)
     * $query->filterByFeblarv(array('min' => 12)); // WHERE FebLarv >= 12
     * $query->filterByFeblarv(array('max' => 12)); // WHERE FebLarv <= 12
     * </code>
     *
     * @param     mixed $feblarv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByFeblarv($feblarv = null, $comparison = null)
    {
        if (is_array($feblarv)) {
            $useMinMax = false;
            if (isset($feblarv['min'])) {
                $this->addUsingAlias(LarvaePeer::FEBLARV, $feblarv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($feblarv['max'])) {
                $this->addUsingAlias(LarvaePeer::FEBLARV, $feblarv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::FEBLARV, $feblarv, $comparison);
    }

    /**
     * Filter the query on the MarLarv column
     *
     * Example usage:
     * <code>
     * $query->filterByMarlarv(1234); // WHERE MarLarv = 1234
     * $query->filterByMarlarv(array(12, 34)); // WHERE MarLarv IN (12, 34)
     * $query->filterByMarlarv(array('min' => 12)); // WHERE MarLarv >= 12
     * $query->filterByMarlarv(array('max' => 12)); // WHERE MarLarv <= 12
     * </code>
     *
     * @param     mixed $marlarv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMarlarv($marlarv = null, $comparison = null)
    {
        if (is_array($marlarv)) {
            $useMinMax = false;
            if (isset($marlarv['min'])) {
                $this->addUsingAlias(LarvaePeer::MARLARV, $marlarv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($marlarv['max'])) {
                $this->addUsingAlias(LarvaePeer::MARLARV, $marlarv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MARLARV, $marlarv, $comparison);
    }

    /**
     * Filter the query on the AprLarv column
     *
     * Example usage:
     * <code>
     * $query->filterByAprlarv(1234); // WHERE AprLarv = 1234
     * $query->filterByAprlarv(array(12, 34)); // WHERE AprLarv IN (12, 34)
     * $query->filterByAprlarv(array('min' => 12)); // WHERE AprLarv >= 12
     * $query->filterByAprlarv(array('max' => 12)); // WHERE AprLarv <= 12
     * </code>
     *
     * @param     mixed $aprlarv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByAprlarv($aprlarv = null, $comparison = null)
    {
        if (is_array($aprlarv)) {
            $useMinMax = false;
            if (isset($aprlarv['min'])) {
                $this->addUsingAlias(LarvaePeer::APRLARV, $aprlarv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aprlarv['max'])) {
                $this->addUsingAlias(LarvaePeer::APRLARV, $aprlarv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::APRLARV, $aprlarv, $comparison);
    }

    /**
     * Filter the query on the MayLarv column
     *
     * Example usage:
     * <code>
     * $query->filterByMaylarv(1234); // WHERE MayLarv = 1234
     * $query->filterByMaylarv(array(12, 34)); // WHERE MayLarv IN (12, 34)
     * $query->filterByMaylarv(array('min' => 12)); // WHERE MayLarv >= 12
     * $query->filterByMaylarv(array('max' => 12)); // WHERE MayLarv <= 12
     * </code>
     *
     * @param     mixed $maylarv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMaylarv($maylarv = null, $comparison = null)
    {
        if (is_array($maylarv)) {
            $useMinMax = false;
            if (isset($maylarv['min'])) {
                $this->addUsingAlias(LarvaePeer::MAYLARV, $maylarv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maylarv['max'])) {
                $this->addUsingAlias(LarvaePeer::MAYLARV, $maylarv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MAYLARV, $maylarv, $comparison);
    }

    /**
     * Filter the query on the JunLarv column
     *
     * Example usage:
     * <code>
     * $query->filterByJunlarv(1234); // WHERE JunLarv = 1234
     * $query->filterByJunlarv(array(12, 34)); // WHERE JunLarv IN (12, 34)
     * $query->filterByJunlarv(array('min' => 12)); // WHERE JunLarv >= 12
     * $query->filterByJunlarv(array('max' => 12)); // WHERE JunLarv <= 12
     * </code>
     *
     * @param     mixed $junlarv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByJunlarv($junlarv = null, $comparison = null)
    {
        if (is_array($junlarv)) {
            $useMinMax = false;
            if (isset($junlarv['min'])) {
                $this->addUsingAlias(LarvaePeer::JUNLARV, $junlarv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($junlarv['max'])) {
                $this->addUsingAlias(LarvaePeer::JUNLARV, $junlarv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::JUNLARV, $junlarv, $comparison);
    }

    /**
     * Filter the query on the JulLarv column
     *
     * Example usage:
     * <code>
     * $query->filterByJullarv(1234); // WHERE JulLarv = 1234
     * $query->filterByJullarv(array(12, 34)); // WHERE JulLarv IN (12, 34)
     * $query->filterByJullarv(array('min' => 12)); // WHERE JulLarv >= 12
     * $query->filterByJullarv(array('max' => 12)); // WHERE JulLarv <= 12
     * </code>
     *
     * @param     mixed $jullarv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByJullarv($jullarv = null, $comparison = null)
    {
        if (is_array($jullarv)) {
            $useMinMax = false;
            if (isset($jullarv['min'])) {
                $this->addUsingAlias(LarvaePeer::JULLARV, $jullarv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jullarv['max'])) {
                $this->addUsingAlias(LarvaePeer::JULLARV, $jullarv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::JULLARV, $jullarv, $comparison);
    }

    /**
     * Filter the query on the AugLarv column
     *
     * Example usage:
     * <code>
     * $query->filterByAuglarv(1234); // WHERE AugLarv = 1234
     * $query->filterByAuglarv(array(12, 34)); // WHERE AugLarv IN (12, 34)
     * $query->filterByAuglarv(array('min' => 12)); // WHERE AugLarv >= 12
     * $query->filterByAuglarv(array('max' => 12)); // WHERE AugLarv <= 12
     * </code>
     *
     * @param     mixed $auglarv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByAuglarv($auglarv = null, $comparison = null)
    {
        if (is_array($auglarv)) {
            $useMinMax = false;
            if (isset($auglarv['min'])) {
                $this->addUsingAlias(LarvaePeer::AUGLARV, $auglarv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($auglarv['max'])) {
                $this->addUsingAlias(LarvaePeer::AUGLARV, $auglarv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::AUGLARV, $auglarv, $comparison);
    }

    /**
     * Filter the query on the SepLarv column
     *
     * Example usage:
     * <code>
     * $query->filterBySeplarv(1234); // WHERE SepLarv = 1234
     * $query->filterBySeplarv(array(12, 34)); // WHERE SepLarv IN (12, 34)
     * $query->filterBySeplarv(array('min' => 12)); // WHERE SepLarv >= 12
     * $query->filterBySeplarv(array('max' => 12)); // WHERE SepLarv <= 12
     * </code>
     *
     * @param     mixed $seplarv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterBySeplarv($seplarv = null, $comparison = null)
    {
        if (is_array($seplarv)) {
            $useMinMax = false;
            if (isset($seplarv['min'])) {
                $this->addUsingAlias(LarvaePeer::SEPLARV, $seplarv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($seplarv['max'])) {
                $this->addUsingAlias(LarvaePeer::SEPLARV, $seplarv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::SEPLARV, $seplarv, $comparison);
    }

    /**
     * Filter the query on the OctLarv column
     *
     * Example usage:
     * <code>
     * $query->filterByOctlarv(1234); // WHERE OctLarv = 1234
     * $query->filterByOctlarv(array(12, 34)); // WHERE OctLarv IN (12, 34)
     * $query->filterByOctlarv(array('min' => 12)); // WHERE OctLarv >= 12
     * $query->filterByOctlarv(array('max' => 12)); // WHERE OctLarv <= 12
     * </code>
     *
     * @param     mixed $octlarv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByOctlarv($octlarv = null, $comparison = null)
    {
        if (is_array($octlarv)) {
            $useMinMax = false;
            if (isset($octlarv['min'])) {
                $this->addUsingAlias(LarvaePeer::OCTLARV, $octlarv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($octlarv['max'])) {
                $this->addUsingAlias(LarvaePeer::OCTLARV, $octlarv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::OCTLARV, $octlarv, $comparison);
    }

    /**
     * Filter the query on the NovLarv column
     *
     * Example usage:
     * <code>
     * $query->filterByNovlarv(true); // WHERE NovLarv = true
     * $query->filterByNovlarv('yes'); // WHERE NovLarv = true
     * </code>
     *
     * @param     boolean|string $novlarv The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByNovlarv($novlarv = null, $comparison = null)
    {
        if (is_string($novlarv)) {
            $novlarv = in_array(strtolower($novlarv), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(LarvaePeer::NOVLARV, $novlarv, $comparison);
    }

    /**
     * Filter the query on the DecLarv column
     *
     * Example usage:
     * <code>
     * $query->filterByDeclarv(1234); // WHERE DecLarv = 1234
     * $query->filterByDeclarv(array(12, 34)); // WHERE DecLarv IN (12, 34)
     * $query->filterByDeclarv(array('min' => 12)); // WHERE DecLarv >= 12
     * $query->filterByDeclarv(array('max' => 12)); // WHERE DecLarv <= 12
     * </code>
     *
     * @param     mixed $declarv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDeclarv($declarv = null, $comparison = null)
    {
        if (is_array($declarv)) {
            $useMinMax = false;
            if (isset($declarv['min'])) {
                $this->addUsingAlias(LarvaePeer::DECLARV, $declarv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($declarv['max'])) {
                $this->addUsingAlias(LarvaePeer::DECLARV, $declarv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DECLARV, $declarv, $comparison);
    }

    /**
     * Filter the query on the PresenceRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPresenceref(1234); // WHERE PresenceRef = 1234
     * $query->filterByPresenceref(array(12, 34)); // WHERE PresenceRef IN (12, 34)
     * $query->filterByPresenceref(array('min' => 12)); // WHERE PresenceRef >= 12
     * $query->filterByPresenceref(array('max' => 12)); // WHERE PresenceRef <= 12
     * </code>
     *
     * @param     mixed $presenceref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPresenceref($presenceref = null, $comparison = null)
    {
        if (is_array($presenceref)) {
            $useMinMax = false;
            if (isset($presenceref['min'])) {
                $this->addUsingAlias(LarvaePeer::PRESENCEREF, $presenceref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($presenceref['max'])) {
                $this->addUsingAlias(LarvaePeer::PRESENCEREF, $presenceref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PRESENCEREF, $presenceref, $comparison);
    }

    /**
     * Filter the query on the WaterDepthMax column
     *
     * Example usage:
     * <code>
     * $query->filterByWaterdepthmax(1234); // WHERE WaterDepthMax = 1234
     * $query->filterByWaterdepthmax(array(12, 34)); // WHERE WaterDepthMax IN (12, 34)
     * $query->filterByWaterdepthmax(array('min' => 12)); // WHERE WaterDepthMax >= 12
     * $query->filterByWaterdepthmax(array('max' => 12)); // WHERE WaterDepthMax <= 12
     * </code>
     *
     * @param     mixed $waterdepthmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByWaterdepthmax($waterdepthmax = null, $comparison = null)
    {
        if (is_array($waterdepthmax)) {
            $useMinMax = false;
            if (isset($waterdepthmax['min'])) {
                $this->addUsingAlias(LarvaePeer::WATERDEPTHMAX, $waterdepthmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($waterdepthmax['max'])) {
                $this->addUsingAlias(LarvaePeer::WATERDEPTHMAX, $waterdepthmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::WATERDEPTHMAX, $waterdepthmax, $comparison);
    }

    /**
     * Filter the query on the WaterTempMax column
     *
     * Example usage:
     * <code>
     * $query->filterByWatertempmax(1234); // WHERE WaterTempMax = 1234
     * $query->filterByWatertempmax(array(12, 34)); // WHERE WaterTempMax IN (12, 34)
     * $query->filterByWatertempmax(array('min' => 12)); // WHERE WaterTempMax >= 12
     * $query->filterByWatertempmax(array('max' => 12)); // WHERE WaterTempMax <= 12
     * </code>
     *
     * @param     mixed $watertempmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByWatertempmax($watertempmax = null, $comparison = null)
    {
        if (is_array($watertempmax)) {
            $useMinMax = false;
            if (isset($watertempmax['min'])) {
                $this->addUsingAlias(LarvaePeer::WATERTEMPMAX, $watertempmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($watertempmax['max'])) {
                $this->addUsingAlias(LarvaePeer::WATERTEMPMAX, $watertempmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::WATERTEMPMAX, $watertempmax, $comparison);
    }

    /**
     * Filter the query on the SalinityMax column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinitymax(1234); // WHERE SalinityMax = 1234
     * $query->filterBySalinitymax(array(12, 34)); // WHERE SalinityMax IN (12, 34)
     * $query->filterBySalinitymax(array('min' => 12)); // WHERE SalinityMax >= 12
     * $query->filterBySalinitymax(array('max' => 12)); // WHERE SalinityMax <= 12
     * </code>
     *
     * @param     mixed $salinitymax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterBySalinitymax($salinitymax = null, $comparison = null)
    {
        if (is_array($salinitymax)) {
            $useMinMax = false;
            if (isset($salinitymax['min'])) {
                $this->addUsingAlias(LarvaePeer::SALINITYMAX, $salinitymax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinitymax['max'])) {
                $this->addUsingAlias(LarvaePeer::SALINITYMAX, $salinitymax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::SALINITYMAX, $salinitymax, $comparison);
    }

    /**
     * Filter the query on the pH column
     *
     * Example usage:
     * <code>
     * $query->filterByPh(1234); // WHERE pH = 1234
     * $query->filterByPh(array(12, 34)); // WHERE pH IN (12, 34)
     * $query->filterByPh(array('min' => 12)); // WHERE pH >= 12
     * $query->filterByPh(array('max' => 12)); // WHERE pH <= 12
     * </code>
     *
     * @param     mixed $ph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPh($ph = null, $comparison = null)
    {
        if (is_array($ph)) {
            $useMinMax = false;
            if (isset($ph['min'])) {
                $this->addUsingAlias(LarvaePeer::PH, $ph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ph['max'])) {
                $this->addUsingAlias(LarvaePeer::PH, $ph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PH, $ph, $comparison);
    }

    /**
     * Filter the query on the OxygenMax column
     *
     * Example usage:
     * <code>
     * $query->filterByOxygenmax(1234); // WHERE OxygenMax = 1234
     * $query->filterByOxygenmax(array(12, 34)); // WHERE OxygenMax IN (12, 34)
     * $query->filterByOxygenmax(array('min' => 12)); // WHERE OxygenMax >= 12
     * $query->filterByOxygenmax(array('max' => 12)); // WHERE OxygenMax <= 12
     * </code>
     *
     * @param     mixed $oxygenmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByOxygenmax($oxygenmax = null, $comparison = null)
    {
        if (is_array($oxygenmax)) {
            $useMinMax = false;
            if (isset($oxygenmax['min'])) {
                $this->addUsingAlias(LarvaePeer::OXYGENMAX, $oxygenmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmax['max'])) {
                $this->addUsingAlias(LarvaePeer::OXYGENMAX, $oxygenmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::OXYGENMAX, $oxygenmax, $comparison);
    }

    /**
     * Filter the query on the WatermaxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByWatermaxref(1234); // WHERE WatermaxRef = 1234
     * $query->filterByWatermaxref(array(12, 34)); // WHERE WatermaxRef IN (12, 34)
     * $query->filterByWatermaxref(array('min' => 12)); // WHERE WatermaxRef >= 12
     * $query->filterByWatermaxref(array('max' => 12)); // WHERE WatermaxRef <= 12
     * </code>
     *
     * @param     mixed $watermaxref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByWatermaxref($watermaxref = null, $comparison = null)
    {
        if (is_array($watermaxref)) {
            $useMinMax = false;
            if (isset($watermaxref['min'])) {
                $this->addUsingAlias(LarvaePeer::WATERMAXREF, $watermaxref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($watermaxref['max'])) {
                $this->addUsingAlias(LarvaePeer::WATERMAXREF, $watermaxref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::WATERMAXREF, $watermaxref, $comparison);
    }

    /**
     * Filter the query on the WaterDepthMin column
     *
     * Example usage:
     * <code>
     * $query->filterByWaterdepthmin(1234); // WHERE WaterDepthMin = 1234
     * $query->filterByWaterdepthmin(array(12, 34)); // WHERE WaterDepthMin IN (12, 34)
     * $query->filterByWaterdepthmin(array('min' => 12)); // WHERE WaterDepthMin >= 12
     * $query->filterByWaterdepthmin(array('max' => 12)); // WHERE WaterDepthMin <= 12
     * </code>
     *
     * @param     mixed $waterdepthmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByWaterdepthmin($waterdepthmin = null, $comparison = null)
    {
        if (is_array($waterdepthmin)) {
            $useMinMax = false;
            if (isset($waterdepthmin['min'])) {
                $this->addUsingAlias(LarvaePeer::WATERDEPTHMIN, $waterdepthmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($waterdepthmin['max'])) {
                $this->addUsingAlias(LarvaePeer::WATERDEPTHMIN, $waterdepthmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::WATERDEPTHMIN, $waterdepthmin, $comparison);
    }

    /**
     * Filter the query on the WaterTempMin column
     *
     * Example usage:
     * <code>
     * $query->filterByWatertempmin(1234); // WHERE WaterTempMin = 1234
     * $query->filterByWatertempmin(array(12, 34)); // WHERE WaterTempMin IN (12, 34)
     * $query->filterByWatertempmin(array('min' => 12)); // WHERE WaterTempMin >= 12
     * $query->filterByWatertempmin(array('max' => 12)); // WHERE WaterTempMin <= 12
     * </code>
     *
     * @param     mixed $watertempmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByWatertempmin($watertempmin = null, $comparison = null)
    {
        if (is_array($watertempmin)) {
            $useMinMax = false;
            if (isset($watertempmin['min'])) {
                $this->addUsingAlias(LarvaePeer::WATERTEMPMIN, $watertempmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($watertempmin['max'])) {
                $this->addUsingAlias(LarvaePeer::WATERTEMPMIN, $watertempmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::WATERTEMPMIN, $watertempmin, $comparison);
    }

    /**
     * Filter the query on the SalinityMin column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinitymin(1234); // WHERE SalinityMin = 1234
     * $query->filterBySalinitymin(array(12, 34)); // WHERE SalinityMin IN (12, 34)
     * $query->filterBySalinitymin(array('min' => 12)); // WHERE SalinityMin >= 12
     * $query->filterBySalinitymin(array('max' => 12)); // WHERE SalinityMin <= 12
     * </code>
     *
     * @param     mixed $salinitymin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterBySalinitymin($salinitymin = null, $comparison = null)
    {
        if (is_array($salinitymin)) {
            $useMinMax = false;
            if (isset($salinitymin['min'])) {
                $this->addUsingAlias(LarvaePeer::SALINITYMIN, $salinitymin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinitymin['max'])) {
                $this->addUsingAlias(LarvaePeer::SALINITYMIN, $salinitymin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::SALINITYMIN, $salinitymin, $comparison);
    }

    /**
     * Filter the query on the pHMin column
     *
     * Example usage:
     * <code>
     * $query->filterByPhmin(1234); // WHERE pHMin = 1234
     * $query->filterByPhmin(array(12, 34)); // WHERE pHMin IN (12, 34)
     * $query->filterByPhmin(array('min' => 12)); // WHERE pHMin >= 12
     * $query->filterByPhmin(array('max' => 12)); // WHERE pHMin <= 12
     * </code>
     *
     * @param     mixed $phmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPhmin($phmin = null, $comparison = null)
    {
        if (is_array($phmin)) {
            $useMinMax = false;
            if (isset($phmin['min'])) {
                $this->addUsingAlias(LarvaePeer::PHMIN, $phmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmin['max'])) {
                $this->addUsingAlias(LarvaePeer::PHMIN, $phmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PHMIN, $phmin, $comparison);
    }

    /**
     * Filter the query on the OxygenMin column
     *
     * Example usage:
     * <code>
     * $query->filterByOxygenmin(1234); // WHERE OxygenMin = 1234
     * $query->filterByOxygenmin(array(12, 34)); // WHERE OxygenMin IN (12, 34)
     * $query->filterByOxygenmin(array('min' => 12)); // WHERE OxygenMin >= 12
     * $query->filterByOxygenmin(array('max' => 12)); // WHERE OxygenMin <= 12
     * </code>
     *
     * @param     mixed $oxygenmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByOxygenmin($oxygenmin = null, $comparison = null)
    {
        if (is_array($oxygenmin)) {
            $useMinMax = false;
            if (isset($oxygenmin['min'])) {
                $this->addUsingAlias(LarvaePeer::OXYGENMIN, $oxygenmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmin['max'])) {
                $this->addUsingAlias(LarvaePeer::OXYGENMIN, $oxygenmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::OXYGENMIN, $oxygenmin, $comparison);
    }

    /**
     * Filter the query on the WaterminRef column
     *
     * Example usage:
     * <code>
     * $query->filterByWaterminref(1234); // WHERE WaterminRef = 1234
     * $query->filterByWaterminref(array(12, 34)); // WHERE WaterminRef IN (12, 34)
     * $query->filterByWaterminref(array('min' => 12)); // WHERE WaterminRef >= 12
     * $query->filterByWaterminref(array('max' => 12)); // WHERE WaterminRef <= 12
     * </code>
     *
     * @param     mixed $waterminref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByWaterminref($waterminref = null, $comparison = null)
    {
        if (is_array($waterminref)) {
            $useMinMax = false;
            if (isset($waterminref['min'])) {
                $this->addUsingAlias(LarvaePeer::WATERMINREF, $waterminref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($waterminref['max'])) {
                $this->addUsingAlias(LarvaePeer::WATERMINREF, $waterminref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::WATERMINREF, $waterminref, $comparison);
    }

    /**
     * Filter the query on the WaterDepthMod column
     *
     * Example usage:
     * <code>
     * $query->filterByWaterdepthmod(1234); // WHERE WaterDepthMod = 1234
     * $query->filterByWaterdepthmod(array(12, 34)); // WHERE WaterDepthMod IN (12, 34)
     * $query->filterByWaterdepthmod(array('min' => 12)); // WHERE WaterDepthMod >= 12
     * $query->filterByWaterdepthmod(array('max' => 12)); // WHERE WaterDepthMod <= 12
     * </code>
     *
     * @param     mixed $waterdepthmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByWaterdepthmod($waterdepthmod = null, $comparison = null)
    {
        if (is_array($waterdepthmod)) {
            $useMinMax = false;
            if (isset($waterdepthmod['min'])) {
                $this->addUsingAlias(LarvaePeer::WATERDEPTHMOD, $waterdepthmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($waterdepthmod['max'])) {
                $this->addUsingAlias(LarvaePeer::WATERDEPTHMOD, $waterdepthmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::WATERDEPTHMOD, $waterdepthmod, $comparison);
    }

    /**
     * Filter the query on the WaterTempMod column
     *
     * Example usage:
     * <code>
     * $query->filterByWatertempmod(1234); // WHERE WaterTempMod = 1234
     * $query->filterByWatertempmod(array(12, 34)); // WHERE WaterTempMod IN (12, 34)
     * $query->filterByWatertempmod(array('min' => 12)); // WHERE WaterTempMod >= 12
     * $query->filterByWatertempmod(array('max' => 12)); // WHERE WaterTempMod <= 12
     * </code>
     *
     * @param     mixed $watertempmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByWatertempmod($watertempmod = null, $comparison = null)
    {
        if (is_array($watertempmod)) {
            $useMinMax = false;
            if (isset($watertempmod['min'])) {
                $this->addUsingAlias(LarvaePeer::WATERTEMPMOD, $watertempmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($watertempmod['max'])) {
                $this->addUsingAlias(LarvaePeer::WATERTEMPMOD, $watertempmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::WATERTEMPMOD, $watertempmod, $comparison);
    }

    /**
     * Filter the query on the SalinityMod column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinitymod(1234); // WHERE SalinityMod = 1234
     * $query->filterBySalinitymod(array(12, 34)); // WHERE SalinityMod IN (12, 34)
     * $query->filterBySalinitymod(array('min' => 12)); // WHERE SalinityMod >= 12
     * $query->filterBySalinitymod(array('max' => 12)); // WHERE SalinityMod <= 12
     * </code>
     *
     * @param     mixed $salinitymod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterBySalinitymod($salinitymod = null, $comparison = null)
    {
        if (is_array($salinitymod)) {
            $useMinMax = false;
            if (isset($salinitymod['min'])) {
                $this->addUsingAlias(LarvaePeer::SALINITYMOD, $salinitymod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinitymod['max'])) {
                $this->addUsingAlias(LarvaePeer::SALINITYMOD, $salinitymod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::SALINITYMOD, $salinitymod, $comparison);
    }

    /**
     * Filter the query on the pHMod column
     *
     * Example usage:
     * <code>
     * $query->filterByPhmod(1234); // WHERE pHMod = 1234
     * $query->filterByPhmod(array(12, 34)); // WHERE pHMod IN (12, 34)
     * $query->filterByPhmod(array('min' => 12)); // WHERE pHMod >= 12
     * $query->filterByPhmod(array('max' => 12)); // WHERE pHMod <= 12
     * </code>
     *
     * @param     mixed $phmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPhmod($phmod = null, $comparison = null)
    {
        if (is_array($phmod)) {
            $useMinMax = false;
            if (isset($phmod['min'])) {
                $this->addUsingAlias(LarvaePeer::PHMOD, $phmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmod['max'])) {
                $this->addUsingAlias(LarvaePeer::PHMOD, $phmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PHMOD, $phmod, $comparison);
    }

    /**
     * Filter the query on the OxygenMod column
     *
     * Example usage:
     * <code>
     * $query->filterByOxygenmod(1234); // WHERE OxygenMod = 1234
     * $query->filterByOxygenmod(array(12, 34)); // WHERE OxygenMod IN (12, 34)
     * $query->filterByOxygenmod(array('min' => 12)); // WHERE OxygenMod >= 12
     * $query->filterByOxygenmod(array('max' => 12)); // WHERE OxygenMod <= 12
     * </code>
     *
     * @param     mixed $oxygenmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByOxygenmod($oxygenmod = null, $comparison = null)
    {
        if (is_array($oxygenmod)) {
            $useMinMax = false;
            if (isset($oxygenmod['min'])) {
                $this->addUsingAlias(LarvaePeer::OXYGENMOD, $oxygenmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmod['max'])) {
                $this->addUsingAlias(LarvaePeer::OXYGENMOD, $oxygenmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::OXYGENMOD, $oxygenmod, $comparison);
    }

    /**
     * Filter the query on the WatermodRef column
     *
     * Example usage:
     * <code>
     * $query->filterByWatermodref(1234); // WHERE WatermodRef = 1234
     * $query->filterByWatermodref(array(12, 34)); // WHERE WatermodRef IN (12, 34)
     * $query->filterByWatermodref(array('min' => 12)); // WHERE WatermodRef >= 12
     * $query->filterByWatermodref(array('max' => 12)); // WHERE WatermodRef <= 12
     * </code>
     *
     * @param     mixed $watermodref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByWatermodref($watermodref = null, $comparison = null)
    {
        if (is_array($watermodref)) {
            $useMinMax = false;
            if (isset($watermodref['min'])) {
                $this->addUsingAlias(LarvaePeer::WATERMODREF, $watermodref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($watermodref['max'])) {
                $this->addUsingAlias(LarvaePeer::WATERMODREF, $watermodref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::WATERMODREF, $watermodref, $comparison);
    }

    /**
     * Filter the query on the StrikingFeature column
     *
     * Example usage:
     * <code>
     * $query->filterByStrikingfeature('fooValue');   // WHERE StrikingFeature = 'fooValue'
     * $query->filterByStrikingfeature('%fooValue%'); // WHERE StrikingFeature LIKE '%fooValue%'
     * </code>
     *
     * @param     string $strikingfeature The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByStrikingfeature($strikingfeature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($strikingfeature)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $strikingfeature)) {
                $strikingfeature = str_replace('*', '%', $strikingfeature);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::STRIKINGFEATURE, $strikingfeature, $comparison);
    }

    /**
     * Filter the query on the LarvaPic column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvapic('fooValue');   // WHERE LarvaPic = 'fooValue'
     * $query->filterByLarvapic('%fooValue%'); // WHERE LarvaPic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $larvapic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByLarvapic($larvapic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($larvapic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $larvapic)) {
                $larvapic = str_replace('*', '%', $larvapic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::LARVAPIC, $larvapic, $comparison);
    }

    /**
     * Filter the query on the StrikingShapeLat column
     *
     * Example usage:
     * <code>
     * $query->filterByStrikingshapelat('fooValue');   // WHERE StrikingShapeLat = 'fooValue'
     * $query->filterByStrikingshapelat('%fooValue%'); // WHERE StrikingShapeLat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $strikingshapelat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByStrikingshapelat($strikingshapelat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($strikingshapelat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $strikingshapelat)) {
                $strikingshapelat = str_replace('*', '%', $strikingshapelat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::STRIKINGSHAPELAT, $strikingshapelat, $comparison);
    }

    /**
     * Filter the query on the StrikingShapeDors column
     *
     * Example usage:
     * <code>
     * $query->filterByStrikingshapedors('fooValue');   // WHERE StrikingShapeDors = 'fooValue'
     * $query->filterByStrikingshapedors('%fooValue%'); // WHERE StrikingShapeDors LIKE '%fooValue%'
     * </code>
     *
     * @param     string $strikingshapedors The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByStrikingshapedors($strikingshapedors = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($strikingshapedors)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $strikingshapedors)) {
                $strikingshapedors = str_replace('*', '%', $strikingshapedors);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::STRIKINGSHAPEDORS, $strikingshapedors, $comparison);
    }

    /**
     * Filter the query on the BodyForm column
     *
     * Example usage:
     * <code>
     * $query->filterByBodyform('fooValue');   // WHERE BodyForm = 'fooValue'
     * $query->filterByBodyform('%fooValue%'); // WHERE BodyForm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bodyform The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByBodyform($bodyform = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bodyform)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bodyform)) {
                $bodyform = str_replace('*', '%', $bodyform);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::BODYFORM, $bodyform, $comparison);
    }

    /**
     * Filter the query on the ShapeofGut column
     *
     * Example usage:
     * <code>
     * $query->filterByShapeofgut('fooValue');   // WHERE ShapeofGut = 'fooValue'
     * $query->filterByShapeofgut('%fooValue%'); // WHERE ShapeofGut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shapeofgut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByShapeofgut($shapeofgut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shapeofgut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shapeofgut)) {
                $shapeofgut = str_replace('*', '%', $shapeofgut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::SHAPEOFGUT, $shapeofgut, $comparison);
    }

    /**
     * Filter the query on the GasBladderEarly column
     *
     * Example usage:
     * <code>
     * $query->filterByGasbladderearly('fooValue');   // WHERE GasBladderEarly = 'fooValue'
     * $query->filterByGasbladderearly('%fooValue%'); // WHERE GasBladderEarly LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gasbladderearly The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByGasbladderearly($gasbladderearly = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gasbladderearly)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gasbladderearly)) {
                $gasbladderearly = str_replace('*', '%', $gasbladderearly);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::GASBLADDEREARLY, $gasbladderearly, $comparison);
    }

    /**
     * Filter the query on the GasBladderLate column
     *
     * Example usage:
     * <code>
     * $query->filterByGasbladderlate('fooValue');   // WHERE GasBladderLate = 'fooValue'
     * $query->filterByGasbladderlate('%fooValue%'); // WHERE GasBladderLate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gasbladderlate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByGasbladderlate($gasbladderlate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gasbladderlate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gasbladderlate)) {
                $gasbladderlate = str_replace('*', '%', $gasbladderlate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::GASBLADDERLATE, $gasbladderlate, $comparison);
    }

    /**
     * Filter the query on the SpinalArmatureEarl column
     *
     * Example usage:
     * <code>
     * $query->filterBySpinalarmatureearl('fooValue');   // WHERE SpinalArmatureEarl = 'fooValue'
     * $query->filterBySpinalarmatureearl('%fooValue%'); // WHERE SpinalArmatureEarl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spinalarmatureearl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterBySpinalarmatureearl($spinalarmatureearl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spinalarmatureearl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spinalarmatureearl)) {
                $spinalarmatureearl = str_replace('*', '%', $spinalarmatureearl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::SPINALARMATUREEARL, $spinalarmatureearl, $comparison);
    }

    /**
     * Filter the query on the SpinalArmatureLate column
     *
     * Example usage:
     * <code>
     * $query->filterBySpinalarmaturelate('fooValue');   // WHERE SpinalArmatureLate = 'fooValue'
     * $query->filterBySpinalarmaturelate('%fooValue%'); // WHERE SpinalArmatureLate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spinalarmaturelate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterBySpinalarmaturelate($spinalarmaturelate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spinalarmaturelate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spinalarmaturelate)) {
                $spinalarmaturelate = str_replace('*', '%', $spinalarmaturelate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::SPINALARMATURELATE, $spinalarmaturelate, $comparison);
    }

    /**
     * Filter the query on the RowsonTailE column
     *
     * Example usage:
     * <code>
     * $query->filterByRowsontaile('fooValue');   // WHERE RowsonTailE = 'fooValue'
     * $query->filterByRowsontaile('%fooValue%'); // WHERE RowsonTailE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rowsontaile The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByRowsontaile($rowsontaile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rowsontaile)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rowsontaile)) {
                $rowsontaile = str_replace('*', '%', $rowsontaile);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::ROWSONTAILE, $rowsontaile, $comparison);
    }

    /**
     * Filter the query on the OtherMelonTailE column
     *
     * Example usage:
     * <code>
     * $query->filterByOthermelontaile('fooValue');   // WHERE OtherMelonTailE = 'fooValue'
     * $query->filterByOthermelontaile('%fooValue%'); // WHERE OtherMelonTailE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $othermelontaile The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByOthermelontaile($othermelontaile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($othermelontaile)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $othermelontaile)) {
                $othermelontaile = str_replace('*', '%', $othermelontaile);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::OTHERMELONTAILE, $othermelontaile, $comparison);
    }

    /**
     * Filter the query on the MelonHeadTrunkE column
     *
     * Example usage:
     * <code>
     * $query->filterByMelonheadtrunke('fooValue');   // WHERE MelonHeadTrunkE = 'fooValue'
     * $query->filterByMelonheadtrunke('%fooValue%'); // WHERE MelonHeadTrunkE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $melonheadtrunke The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMelonheadtrunke($melonheadtrunke = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($melonheadtrunke)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $melonheadtrunke)) {
                $melonheadtrunke = str_replace('*', '%', $melonheadtrunke);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MELONHEADTRUNKE, $melonheadtrunke, $comparison);
    }

    /**
     * Filter the query on the RowsonTaill column
     *
     * Example usage:
     * <code>
     * $query->filterByRowsontaill('fooValue');   // WHERE RowsonTaill = 'fooValue'
     * $query->filterByRowsontaill('%fooValue%'); // WHERE RowsonTaill LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rowsontaill The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByRowsontaill($rowsontaill = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rowsontaill)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rowsontaill)) {
                $rowsontaill = str_replace('*', '%', $rowsontaill);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::ROWSONTAILL, $rowsontaill, $comparison);
    }

    /**
     * Filter the query on the OtherMelonTaill column
     *
     * Example usage:
     * <code>
     * $query->filterByOthermelontaill('fooValue');   // WHERE OtherMelonTaill = 'fooValue'
     * $query->filterByOthermelontaill('%fooValue%'); // WHERE OtherMelonTaill LIKE '%fooValue%'
     * </code>
     *
     * @param     string $othermelontaill The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByOthermelontaill($othermelontaill = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($othermelontaill)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $othermelontaill)) {
                $othermelontaill = str_replace('*', '%', $othermelontaill);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::OTHERMELONTAILL, $othermelontaill, $comparison);
    }

    /**
     * Filter the query on the MelonHeadTrunkl column
     *
     * Example usage:
     * <code>
     * $query->filterByMelonheadtrunkl('fooValue');   // WHERE MelonHeadTrunkl = 'fooValue'
     * $query->filterByMelonheadtrunkl('%fooValue%'); // WHERE MelonHeadTrunkl LIKE '%fooValue%'
     * </code>
     *
     * @param     string $melonheadtrunkl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMelonheadtrunkl($melonheadtrunkl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($melonheadtrunkl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $melonheadtrunkl)) {
                $melonheadtrunkl = str_replace('*', '%', $melonheadtrunkl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MELONHEADTRUNKL, $melonheadtrunkl, $comparison);
    }

    /**
     * Filter the query on the UrostyleRegion column
     *
     * Example usage:
     * <code>
     * $query->filterByUrostyleregion('fooValue');   // WHERE UrostyleRegion = 'fooValue'
     * $query->filterByUrostyleregion('%fooValue%'); // WHERE UrostyleRegion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urostyleregion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByUrostyleregion($urostyleregion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urostyleregion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urostyleregion)) {
                $urostyleregion = str_replace('*', '%', $urostyleregion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::UROSTYLEREGION, $urostyleregion, $comparison);
    }

    /**
     * Filter the query on the UrostyleRegionLate column
     *
     * Example usage:
     * <code>
     * $query->filterByUrostyleregionlate('fooValue');   // WHERE UrostyleRegionLate = 'fooValue'
     * $query->filterByUrostyleregionlate('%fooValue%'); // WHERE UrostyleRegionLate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urostyleregionlate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByUrostyleregionlate($urostyleregionlate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urostyleregionlate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urostyleregionlate)) {
                $urostyleregionlate = str_replace('*', '%', $urostyleregionlate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::UROSTYLEREGIONLATE, $urostyleregionlate, $comparison);
    }

    /**
     * Filter the query on the Peritoneum column
     *
     * Example usage:
     * <code>
     * $query->filterByPeritoneum('fooValue');   // WHERE Peritoneum = 'fooValue'
     * $query->filterByPeritoneum('%fooValue%'); // WHERE Peritoneum LIKE '%fooValue%'
     * </code>
     *
     * @param     string $peritoneum The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPeritoneum($peritoneum = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($peritoneum)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $peritoneum)) {
                $peritoneum = str_replace('*', '%', $peritoneum);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PERITONEUM, $peritoneum, $comparison);
    }

    /**
     * Filter the query on the PectoralsI column
     *
     * Example usage:
     * <code>
     * $query->filterByPectoralsi('fooValue');   // WHERE PectoralsI = 'fooValue'
     * $query->filterByPectoralsi('%fooValue%'); // WHERE PectoralsI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pectoralsi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPectoralsi($pectoralsi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pectoralsi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pectoralsi)) {
                $pectoralsi = str_replace('*', '%', $pectoralsi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PECTORALSI, $pectoralsi, $comparison);
    }

    /**
     * Filter the query on the PectoralsII column
     *
     * Example usage:
     * <code>
     * $query->filterByPectoralsii('fooValue');   // WHERE PectoralsII = 'fooValue'
     * $query->filterByPectoralsii('%fooValue%'); // WHERE PectoralsII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pectoralsii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPectoralsii($pectoralsii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pectoralsii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pectoralsii)) {
                $pectoralsii = str_replace('*', '%', $pectoralsii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PECTORALSII, $pectoralsii, $comparison);
    }

    /**
     * Filter the query on the PelvicsI column
     *
     * Example usage:
     * <code>
     * $query->filterByPelvicsi('fooValue');   // WHERE PelvicsI = 'fooValue'
     * $query->filterByPelvicsi('%fooValue%'); // WHERE PelvicsI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pelvicsi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPelvicsi($pelvicsi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pelvicsi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pelvicsi)) {
                $pelvicsi = str_replace('*', '%', $pelvicsi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PELVICSI, $pelvicsi, $comparison);
    }

    /**
     * Filter the query on the PelvicsII column
     *
     * Example usage:
     * <code>
     * $query->filterByPelvicsii('fooValue');   // WHERE PelvicsII = 'fooValue'
     * $query->filterByPelvicsii('%fooValue%'); // WHERE PelvicsII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pelvicsii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPelvicsii($pelvicsii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pelvicsii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pelvicsii)) {
                $pelvicsii = str_replace('*', '%', $pelvicsii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PELVICSII, $pelvicsii, $comparison);
    }

    /**
     * Filter the query on the MyomeresMax column
     *
     * Example usage:
     * <code>
     * $query->filterByMyomeresmax(1234); // WHERE MyomeresMax = 1234
     * $query->filterByMyomeresmax(array(12, 34)); // WHERE MyomeresMax IN (12, 34)
     * $query->filterByMyomeresmax(array('min' => 12)); // WHERE MyomeresMax >= 12
     * $query->filterByMyomeresmax(array('max' => 12)); // WHERE MyomeresMax <= 12
     * </code>
     *
     * @param     mixed $myomeresmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMyomeresmax($myomeresmax = null, $comparison = null)
    {
        if (is_array($myomeresmax)) {
            $useMinMax = false;
            if (isset($myomeresmax['min'])) {
                $this->addUsingAlias(LarvaePeer::MYOMERESMAX, $myomeresmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($myomeresmax['max'])) {
                $this->addUsingAlias(LarvaePeer::MYOMERESMAX, $myomeresmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MYOMERESMAX, $myomeresmax, $comparison);
    }

    /**
     * Filter the query on the MyomeresMin column
     *
     * Example usage:
     * <code>
     * $query->filterByMyomeresmin(1234); // WHERE MyomeresMin = 1234
     * $query->filterByMyomeresmin(array(12, 34)); // WHERE MyomeresMin IN (12, 34)
     * $query->filterByMyomeresmin(array('min' => 12)); // WHERE MyomeresMin >= 12
     * $query->filterByMyomeresmin(array('max' => 12)); // WHERE MyomeresMin <= 12
     * </code>
     *
     * @param     mixed $myomeresmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMyomeresmin($myomeresmin = null, $comparison = null)
    {
        if (is_array($myomeresmin)) {
            $useMinMax = false;
            if (isset($myomeresmin['min'])) {
                $this->addUsingAlias(LarvaePeer::MYOMERESMIN, $myomeresmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($myomeresmin['max'])) {
                $this->addUsingAlias(LarvaePeer::MYOMERESMIN, $myomeresmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MYOMERESMIN, $myomeresmin, $comparison);
    }

    /**
     * Filter the query on the MyomeresMod column
     *
     * Example usage:
     * <code>
     * $query->filterByMyomeresmod(1234); // WHERE MyomeresMod = 1234
     * $query->filterByMyomeresmod(array(12, 34)); // WHERE MyomeresMod IN (12, 34)
     * $query->filterByMyomeresmod(array('min' => 12)); // WHERE MyomeresMod >= 12
     * $query->filterByMyomeresmod(array('max' => 12)); // WHERE MyomeresMod <= 12
     * </code>
     *
     * @param     mixed $myomeresmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMyomeresmod($myomeresmod = null, $comparison = null)
    {
        if (is_array($myomeresmod)) {
            $useMinMax = false;
            if (isset($myomeresmod['min'])) {
                $this->addUsingAlias(LarvaePeer::MYOMERESMOD, $myomeresmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($myomeresmod['max'])) {
                $this->addUsingAlias(LarvaePeer::MYOMERESMOD, $myomeresmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MYOMERESMOD, $myomeresmod, $comparison);
    }

    /**
     * Filter the query on the MyomVert column
     *
     * Example usage:
     * <code>
     * $query->filterByMyomvert('fooValue');   // WHERE MyomVert = 'fooValue'
     * $query->filterByMyomvert('%fooValue%'); // WHERE MyomVert LIKE '%fooValue%'
     * </code>
     *
     * @param     string $myomvert The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMyomvert($myomvert = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($myomvert)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $myomvert)) {
                $myomvert = str_replace('*', '%', $myomvert);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MYOMVERT, $myomvert, $comparison);
    }

    /**
     * Filter the query on the TotMyomRef column
     *
     * Example usage:
     * <code>
     * $query->filterByTotmyomref(1234); // WHERE TotMyomRef = 1234
     * $query->filterByTotmyomref(array(12, 34)); // WHERE TotMyomRef IN (12, 34)
     * $query->filterByTotmyomref(array('min' => 12)); // WHERE TotMyomRef >= 12
     * $query->filterByTotmyomref(array('max' => 12)); // WHERE TotMyomRef <= 12
     * </code>
     *
     * @param     mixed $totmyomref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByTotmyomref($totmyomref = null, $comparison = null)
    {
        if (is_array($totmyomref)) {
            $useMinMax = false;
            if (isset($totmyomref['min'])) {
                $this->addUsingAlias(LarvaePeer::TOTMYOMREF, $totmyomref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totmyomref['max'])) {
                $this->addUsingAlias(LarvaePeer::TOTMYOMREF, $totmyomref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::TOTMYOMREF, $totmyomref, $comparison);
    }

    /**
     * Filter the query on the MyomeresMaxPrean column
     *
     * Example usage:
     * <code>
     * $query->filterByMyomeresmaxprean(1234); // WHERE MyomeresMaxPrean = 1234
     * $query->filterByMyomeresmaxprean(array(12, 34)); // WHERE MyomeresMaxPrean IN (12, 34)
     * $query->filterByMyomeresmaxprean(array('min' => 12)); // WHERE MyomeresMaxPrean >= 12
     * $query->filterByMyomeresmaxprean(array('max' => 12)); // WHERE MyomeresMaxPrean <= 12
     * </code>
     *
     * @param     mixed $myomeresmaxprean The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMyomeresmaxprean($myomeresmaxprean = null, $comparison = null)
    {
        if (is_array($myomeresmaxprean)) {
            $useMinMax = false;
            if (isset($myomeresmaxprean['min'])) {
                $this->addUsingAlias(LarvaePeer::MYOMERESMAXPREAN, $myomeresmaxprean['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($myomeresmaxprean['max'])) {
                $this->addUsingAlias(LarvaePeer::MYOMERESMAXPREAN, $myomeresmaxprean['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MYOMERESMAXPREAN, $myomeresmaxprean, $comparison);
    }

    /**
     * Filter the query on the MyomeresMinPrean column
     *
     * Example usage:
     * <code>
     * $query->filterByMyomeresminprean(1234); // WHERE MyomeresMinPrean = 1234
     * $query->filterByMyomeresminprean(array(12, 34)); // WHERE MyomeresMinPrean IN (12, 34)
     * $query->filterByMyomeresminprean(array('min' => 12)); // WHERE MyomeresMinPrean >= 12
     * $query->filterByMyomeresminprean(array('max' => 12)); // WHERE MyomeresMinPrean <= 12
     * </code>
     *
     * @param     mixed $myomeresminprean The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMyomeresminprean($myomeresminprean = null, $comparison = null)
    {
        if (is_array($myomeresminprean)) {
            $useMinMax = false;
            if (isset($myomeresminprean['min'])) {
                $this->addUsingAlias(LarvaePeer::MYOMERESMINPREAN, $myomeresminprean['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($myomeresminprean['max'])) {
                $this->addUsingAlias(LarvaePeer::MYOMERESMINPREAN, $myomeresminprean['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MYOMERESMINPREAN, $myomeresminprean, $comparison);
    }

    /**
     * Filter the query on the MyomeresModPrean column
     *
     * Example usage:
     * <code>
     * $query->filterByMyomeresmodprean(1234); // WHERE MyomeresModPrean = 1234
     * $query->filterByMyomeresmodprean(array(12, 34)); // WHERE MyomeresModPrean IN (12, 34)
     * $query->filterByMyomeresmodprean(array('min' => 12)); // WHERE MyomeresModPrean >= 12
     * $query->filterByMyomeresmodprean(array('max' => 12)); // WHERE MyomeresModPrean <= 12
     * </code>
     *
     * @param     mixed $myomeresmodprean The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMyomeresmodprean($myomeresmodprean = null, $comparison = null)
    {
        if (is_array($myomeresmodprean)) {
            $useMinMax = false;
            if (isset($myomeresmodprean['min'])) {
                $this->addUsingAlias(LarvaePeer::MYOMERESMODPREAN, $myomeresmodprean['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($myomeresmodprean['max'])) {
                $this->addUsingAlias(LarvaePeer::MYOMERESMODPREAN, $myomeresmodprean['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MYOMERESMODPREAN, $myomeresmodprean, $comparison);
    }

    /**
     * Filter the query on the MyomVert2 column
     *
     * Example usage:
     * <code>
     * $query->filterByMyomvert2('fooValue');   // WHERE MyomVert2 = 'fooValue'
     * $query->filterByMyomvert2('%fooValue%'); // WHERE MyomVert2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $myomvert2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMyomvert2($myomvert2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($myomvert2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $myomvert2)) {
                $myomvert2 = str_replace('*', '%', $myomvert2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MYOMVERT2, $myomvert2, $comparison);
    }

    /**
     * Filter the query on the PreAnMyoRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanmyoref(1234); // WHERE PreAnMyoRef = 1234
     * $query->filterByPreanmyoref(array(12, 34)); // WHERE PreAnMyoRef IN (12, 34)
     * $query->filterByPreanmyoref(array('min' => 12)); // WHERE PreAnMyoRef >= 12
     * $query->filterByPreanmyoref(array('max' => 12)); // WHERE PreAnMyoRef <= 12
     * </code>
     *
     * @param     mixed $preanmyoref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanmyoref($preanmyoref = null, $comparison = null)
    {
        if (is_array($preanmyoref)) {
            $useMinMax = false;
            if (isset($preanmyoref['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANMYOREF, $preanmyoref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanmyoref['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANMYOREF, $preanmyoref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANMYOREF, $preanmyoref, $comparison);
    }

    /**
     * Filter the query on the RLLatePre column
     *
     * Example usage:
     * <code>
     * $query->filterByRllatepre(1234); // WHERE RLLatePre = 1234
     * $query->filterByRllatepre(array(12, 34)); // WHERE RLLatePre IN (12, 34)
     * $query->filterByRllatepre(array('min' => 12)); // WHERE RLLatePre >= 12
     * $query->filterByRllatepre(array('max' => 12)); // WHERE RLLatePre <= 12
     * </code>
     *
     * @param     mixed $rllatepre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByRllatepre($rllatepre = null, $comparison = null)
    {
        if (is_array($rllatepre)) {
            $useMinMax = false;
            if (isset($rllatepre['min'])) {
                $this->addUsingAlias(LarvaePeer::RLLATEPRE, $rllatepre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rllatepre['max'])) {
                $this->addUsingAlias(LarvaePeer::RLLATEPRE, $rllatepre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::RLLATEPRE, $rllatepre, $comparison);
    }

    /**
     * Filter the query on the RLLateFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByRllateflex(1234); // WHERE RLLateFlex = 1234
     * $query->filterByRllateflex(array(12, 34)); // WHERE RLLateFlex IN (12, 34)
     * $query->filterByRllateflex(array('min' => 12)); // WHERE RLLateFlex >= 12
     * $query->filterByRllateflex(array('max' => 12)); // WHERE RLLateFlex <= 12
     * </code>
     *
     * @param     mixed $rllateflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByRllateflex($rllateflex = null, $comparison = null)
    {
        if (is_array($rllateflex)) {
            $useMinMax = false;
            if (isset($rllateflex['min'])) {
                $this->addUsingAlias(LarvaePeer::RLLATEFLEX, $rllateflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rllateflex['max'])) {
                $this->addUsingAlias(LarvaePeer::RLLATEFLEX, $rllateflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::RLLATEFLEX, $rllateflex, $comparison);
    }

    /**
     * Filter the query on the RLLatePost column
     *
     * Example usage:
     * <code>
     * $query->filterByRllatepost(1234); // WHERE RLLatePost = 1234
     * $query->filterByRllatepost(array(12, 34)); // WHERE RLLatePost IN (12, 34)
     * $query->filterByRllatepost(array('min' => 12)); // WHERE RLLatePost >= 12
     * $query->filterByRllatepost(array('max' => 12)); // WHERE RLLatePost <= 12
     * </code>
     *
     * @param     mixed $rllatepost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByRllatepost($rllatepost = null, $comparison = null)
    {
        if (is_array($rllatepost)) {
            $useMinMax = false;
            if (isset($rllatepost['min'])) {
                $this->addUsingAlias(LarvaePeer::RLLATEPOST, $rllatepost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rllatepost['max'])) {
                $this->addUsingAlias(LarvaePeer::RLLATEPOST, $rllatepost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::RLLATEPOST, $rllatepost, $comparison);
    }

    /**
     * Filter the query on the RLEarlyPre column
     *
     * Example usage:
     * <code>
     * $query->filterByRlearlypre(1234); // WHERE RLEarlyPre = 1234
     * $query->filterByRlearlypre(array(12, 34)); // WHERE RLEarlyPre IN (12, 34)
     * $query->filterByRlearlypre(array('min' => 12)); // WHERE RLEarlyPre >= 12
     * $query->filterByRlearlypre(array('max' => 12)); // WHERE RLEarlyPre <= 12
     * </code>
     *
     * @param     mixed $rlearlypre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByRlearlypre($rlearlypre = null, $comparison = null)
    {
        if (is_array($rlearlypre)) {
            $useMinMax = false;
            if (isset($rlearlypre['min'])) {
                $this->addUsingAlias(LarvaePeer::RLEARLYPRE, $rlearlypre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rlearlypre['max'])) {
                $this->addUsingAlias(LarvaePeer::RLEARLYPRE, $rlearlypre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::RLEARLYPRE, $rlearlypre, $comparison);
    }

    /**
     * Filter the query on the RLEarlyFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByRlearlyflex(1234); // WHERE RLEarlyFlex = 1234
     * $query->filterByRlearlyflex(array(12, 34)); // WHERE RLEarlyFlex IN (12, 34)
     * $query->filterByRlearlyflex(array('min' => 12)); // WHERE RLEarlyFlex >= 12
     * $query->filterByRlearlyflex(array('max' => 12)); // WHERE RLEarlyFlex <= 12
     * </code>
     *
     * @param     mixed $rlearlyflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByRlearlyflex($rlearlyflex = null, $comparison = null)
    {
        if (is_array($rlearlyflex)) {
            $useMinMax = false;
            if (isset($rlearlyflex['min'])) {
                $this->addUsingAlias(LarvaePeer::RLEARLYFLEX, $rlearlyflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rlearlyflex['max'])) {
                $this->addUsingAlias(LarvaePeer::RLEARLYFLEX, $rlearlyflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::RLEARLYFLEX, $rlearlyflex, $comparison);
    }

    /**
     * Filter the query on the RLEarlyPost column
     *
     * Example usage:
     * <code>
     * $query->filterByRlearlypost(1234); // WHERE RLEarlyPost = 1234
     * $query->filterByRlearlypost(array(12, 34)); // WHERE RLEarlyPost IN (12, 34)
     * $query->filterByRlearlypost(array('min' => 12)); // WHERE RLEarlyPost >= 12
     * $query->filterByRlearlypost(array('max' => 12)); // WHERE RLEarlyPost <= 12
     * </code>
     *
     * @param     mixed $rlearlypost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByRlearlypost($rlearlypost = null, $comparison = null)
    {
        if (is_array($rlearlypost)) {
            $useMinMax = false;
            if (isset($rlearlypost['min'])) {
                $this->addUsingAlias(LarvaePeer::RLEARLYPOST, $rlearlypost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rlearlypost['max'])) {
                $this->addUsingAlias(LarvaePeer::RLEARLYPOST, $rlearlypost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::RLEARLYPOST, $rlearlypost, $comparison);
    }

    /**
     * Filter the query on the RLFlexPre column
     *
     * Example usage:
     * <code>
     * $query->filterByRlflexpre(1234); // WHERE RLFlexPre = 1234
     * $query->filterByRlflexpre(array(12, 34)); // WHERE RLFlexPre IN (12, 34)
     * $query->filterByRlflexpre(array('min' => 12)); // WHERE RLFlexPre >= 12
     * $query->filterByRlflexpre(array('max' => 12)); // WHERE RLFlexPre <= 12
     * </code>
     *
     * @param     mixed $rlflexpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByRlflexpre($rlflexpre = null, $comparison = null)
    {
        if (is_array($rlflexpre)) {
            $useMinMax = false;
            if (isset($rlflexpre['min'])) {
                $this->addUsingAlias(LarvaePeer::RLFLEXPRE, $rlflexpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rlflexpre['max'])) {
                $this->addUsingAlias(LarvaePeer::RLFLEXPRE, $rlflexpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::RLFLEXPRE, $rlflexpre, $comparison);
    }

    /**
     * Filter the query on the RLFlexFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByRlflexflex(1234); // WHERE RLFlexFlex = 1234
     * $query->filterByRlflexflex(array(12, 34)); // WHERE RLFlexFlex IN (12, 34)
     * $query->filterByRlflexflex(array('min' => 12)); // WHERE RLFlexFlex >= 12
     * $query->filterByRlflexflex(array('max' => 12)); // WHERE RLFlexFlex <= 12
     * </code>
     *
     * @param     mixed $rlflexflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByRlflexflex($rlflexflex = null, $comparison = null)
    {
        if (is_array($rlflexflex)) {
            $useMinMax = false;
            if (isset($rlflexflex['min'])) {
                $this->addUsingAlias(LarvaePeer::RLFLEXFLEX, $rlflexflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rlflexflex['max'])) {
                $this->addUsingAlias(LarvaePeer::RLFLEXFLEX, $rlflexflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::RLFLEXFLEX, $rlflexflex, $comparison);
    }

    /**
     * Filter the query on the RLFlexPost column
     *
     * Example usage:
     * <code>
     * $query->filterByRlflexpost(1234); // WHERE RLFlexPost = 1234
     * $query->filterByRlflexpost(array(12, 34)); // WHERE RLFlexPost IN (12, 34)
     * $query->filterByRlflexpost(array('min' => 12)); // WHERE RLFlexPost >= 12
     * $query->filterByRlflexpost(array('max' => 12)); // WHERE RLFlexPost <= 12
     * </code>
     *
     * @param     mixed $rlflexpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByRlflexpost($rlflexpost = null, $comparison = null)
    {
        if (is_array($rlflexpost)) {
            $useMinMax = false;
            if (isset($rlflexpost['min'])) {
                $this->addUsingAlias(LarvaePeer::RLFLEXPOST, $rlflexpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rlflexpost['max'])) {
                $this->addUsingAlias(LarvaePeer::RLFLEXPOST, $rlflexpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::RLFLEXPOST, $rlflexpost, $comparison);
    }

    /**
     * Filter the query on the MeasurementsPreRef column
     *
     * Example usage:
     * <code>
     * $query->filterByMeasurementspreref(1234); // WHERE MeasurementsPreRef = 1234
     * $query->filterByMeasurementspreref(array(12, 34)); // WHERE MeasurementsPreRef IN (12, 34)
     * $query->filterByMeasurementspreref(array('min' => 12)); // WHERE MeasurementsPreRef >= 12
     * $query->filterByMeasurementspreref(array('max' => 12)); // WHERE MeasurementsPreRef <= 12
     * </code>
     *
     * @param     mixed $measurementspreref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMeasurementspreref($measurementspreref = null, $comparison = null)
    {
        if (is_array($measurementspreref)) {
            $useMinMax = false;
            if (isset($measurementspreref['min'])) {
                $this->addUsingAlias(LarvaePeer::MEASUREMENTSPREREF, $measurementspreref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($measurementspreref['max'])) {
                $this->addUsingAlias(LarvaePeer::MEASUREMENTSPREREF, $measurementspreref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MEASUREMENTSPREREF, $measurementspreref, $comparison);
    }

    /**
     * Filter the query on the MeasurementsFlexRef column
     *
     * Example usage:
     * <code>
     * $query->filterByMeasurementsflexref(1234); // WHERE MeasurementsFlexRef = 1234
     * $query->filterByMeasurementsflexref(array(12, 34)); // WHERE MeasurementsFlexRef IN (12, 34)
     * $query->filterByMeasurementsflexref(array('min' => 12)); // WHERE MeasurementsFlexRef >= 12
     * $query->filterByMeasurementsflexref(array('max' => 12)); // WHERE MeasurementsFlexRef <= 12
     * </code>
     *
     * @param     mixed $measurementsflexref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMeasurementsflexref($measurementsflexref = null, $comparison = null)
    {
        if (is_array($measurementsflexref)) {
            $useMinMax = false;
            if (isset($measurementsflexref['min'])) {
                $this->addUsingAlias(LarvaePeer::MEASUREMENTSFLEXREF, $measurementsflexref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($measurementsflexref['max'])) {
                $this->addUsingAlias(LarvaePeer::MEASUREMENTSFLEXREF, $measurementsflexref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MEASUREMENTSFLEXREF, $measurementsflexref, $comparison);
    }

    /**
     * Filter the query on the MeasurementsPostRef column
     *
     * Example usage:
     * <code>
     * $query->filterByMeasurementspostref(1234); // WHERE MeasurementsPostRef = 1234
     * $query->filterByMeasurementspostref(array(12, 34)); // WHERE MeasurementsPostRef IN (12, 34)
     * $query->filterByMeasurementspostref(array('min' => 12)); // WHERE MeasurementsPostRef >= 12
     * $query->filterByMeasurementspostref(array('max' => 12)); // WHERE MeasurementsPostRef <= 12
     * </code>
     *
     * @param     mixed $measurementspostref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByMeasurementspostref($measurementspostref = null, $comparison = null)
    {
        if (is_array($measurementspostref)) {
            $useMinMax = false;
            if (isset($measurementspostref['min'])) {
                $this->addUsingAlias(LarvaePeer::MEASUREMENTSPOSTREF, $measurementspostref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($measurementspostref['max'])) {
                $this->addUsingAlias(LarvaePeer::MEASUREMENTSPOSTREF, $measurementspostref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MEASUREMENTSPOSTREF, $measurementspostref, $comparison);
    }

    /**
     * Filter the query on the TypePre column
     *
     * Example usage:
     * <code>
     * $query->filterByTypepre('fooValue');   // WHERE TypePre = 'fooValue'
     * $query->filterByTypepre('%fooValue%'); // WHERE TypePre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typepre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByTypepre($typepre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typepre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typepre)) {
                $typepre = str_replace('*', '%', $typepre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::TYPEPRE, $typepre, $comparison);
    }

    /**
     * Filter the query on the TypeFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeflex('fooValue');   // WHERE TypeFlex = 'fooValue'
     * $query->filterByTypeflex('%fooValue%'); // WHERE TypeFlex LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeflex The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByTypeflex($typeflex = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeflex)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeflex)) {
                $typeflex = str_replace('*', '%', $typeflex);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::TYPEFLEX, $typeflex, $comparison);
    }

    /**
     * Filter the query on the TypePost column
     *
     * Example usage:
     * <code>
     * $query->filterByTypepost('fooValue');   // WHERE TypePost = 'fooValue'
     * $query->filterByTypepost('%fooValue%'); // WHERE TypePost LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typepost The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByTypepost($typepost = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typepost)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typepost)) {
                $typepost = str_replace('*', '%', $typepost);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::TYPEPOST, $typepost, $comparison);
    }

    /**
     * Filter the query on the comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE comment = 'fooValue'
     * $query->filterByComment('%fooValue%'); // WHERE comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comment)) {
                $comment = str_replace('*', '%', $comment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the PreanalLengthMaxPre column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanallengthmaxpre(1234); // WHERE PreanalLengthMaxPre = 1234
     * $query->filterByPreanallengthmaxpre(array(12, 34)); // WHERE PreanalLengthMaxPre IN (12, 34)
     * $query->filterByPreanallengthmaxpre(array('min' => 12)); // WHERE PreanalLengthMaxPre >= 12
     * $query->filterByPreanallengthmaxpre(array('max' => 12)); // WHERE PreanalLengthMaxPre <= 12
     * </code>
     *
     * @param     mixed $preanallengthmaxpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanallengthmaxpre($preanallengthmaxpre = null, $comparison = null)
    {
        if (is_array($preanallengthmaxpre)) {
            $useMinMax = false;
            if (isset($preanallengthmaxpre['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMAXPRE, $preanallengthmaxpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanallengthmaxpre['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMAXPRE, $preanallengthmaxpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANALLENGTHMAXPRE, $preanallengthmaxpre, $comparison);
    }

    /**
     * Filter the query on the PreanalLengthMaxFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanallengthmaxflex(1234); // WHERE PreanalLengthMaxFlex = 1234
     * $query->filterByPreanallengthmaxflex(array(12, 34)); // WHERE PreanalLengthMaxFlex IN (12, 34)
     * $query->filterByPreanallengthmaxflex(array('min' => 12)); // WHERE PreanalLengthMaxFlex >= 12
     * $query->filterByPreanallengthmaxflex(array('max' => 12)); // WHERE PreanalLengthMaxFlex <= 12
     * </code>
     *
     * @param     mixed $preanallengthmaxflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanallengthmaxflex($preanallengthmaxflex = null, $comparison = null)
    {
        if (is_array($preanallengthmaxflex)) {
            $useMinMax = false;
            if (isset($preanallengthmaxflex['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMAXFLEX, $preanallengthmaxflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanallengthmaxflex['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMAXFLEX, $preanallengthmaxflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANALLENGTHMAXFLEX, $preanallengthmaxflex, $comparison);
    }

    /**
     * Filter the query on the PreanalLengthMaxPost column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanallengthmaxpost(1234); // WHERE PreanalLengthMaxPost = 1234
     * $query->filterByPreanallengthmaxpost(array(12, 34)); // WHERE PreanalLengthMaxPost IN (12, 34)
     * $query->filterByPreanallengthmaxpost(array('min' => 12)); // WHERE PreanalLengthMaxPost >= 12
     * $query->filterByPreanallengthmaxpost(array('max' => 12)); // WHERE PreanalLengthMaxPost <= 12
     * </code>
     *
     * @param     mixed $preanallengthmaxpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanallengthmaxpost($preanallengthmaxpost = null, $comparison = null)
    {
        if (is_array($preanallengthmaxpost)) {
            $useMinMax = false;
            if (isset($preanallengthmaxpost['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMAXPOST, $preanallengthmaxpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanallengthmaxpost['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMAXPOST, $preanallengthmaxpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANALLENGTHMAXPOST, $preanallengthmaxpost, $comparison);
    }

    /**
     * Filter the query on the PreanalLengthMinPre column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanallengthminpre(1234); // WHERE PreanalLengthMinPre = 1234
     * $query->filterByPreanallengthminpre(array(12, 34)); // WHERE PreanalLengthMinPre IN (12, 34)
     * $query->filterByPreanallengthminpre(array('min' => 12)); // WHERE PreanalLengthMinPre >= 12
     * $query->filterByPreanallengthminpre(array('max' => 12)); // WHERE PreanalLengthMinPre <= 12
     * </code>
     *
     * @param     mixed $preanallengthminpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanallengthminpre($preanallengthminpre = null, $comparison = null)
    {
        if (is_array($preanallengthminpre)) {
            $useMinMax = false;
            if (isset($preanallengthminpre['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMINPRE, $preanallengthminpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanallengthminpre['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMINPRE, $preanallengthminpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANALLENGTHMINPRE, $preanallengthminpre, $comparison);
    }

    /**
     * Filter the query on the PreanalLengthMinFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanallengthminflex(1234); // WHERE PreanalLengthMinFlex = 1234
     * $query->filterByPreanallengthminflex(array(12, 34)); // WHERE PreanalLengthMinFlex IN (12, 34)
     * $query->filterByPreanallengthminflex(array('min' => 12)); // WHERE PreanalLengthMinFlex >= 12
     * $query->filterByPreanallengthminflex(array('max' => 12)); // WHERE PreanalLengthMinFlex <= 12
     * </code>
     *
     * @param     mixed $preanallengthminflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanallengthminflex($preanallengthminflex = null, $comparison = null)
    {
        if (is_array($preanallengthminflex)) {
            $useMinMax = false;
            if (isset($preanallengthminflex['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMINFLEX, $preanallengthminflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanallengthminflex['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMINFLEX, $preanallengthminflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANALLENGTHMINFLEX, $preanallengthminflex, $comparison);
    }

    /**
     * Filter the query on the PreanalLengthMinPost column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanallengthminpost(1234); // WHERE PreanalLengthMinPost = 1234
     * $query->filterByPreanallengthminpost(array(12, 34)); // WHERE PreanalLengthMinPost IN (12, 34)
     * $query->filterByPreanallengthminpost(array('min' => 12)); // WHERE PreanalLengthMinPost >= 12
     * $query->filterByPreanallengthminpost(array('max' => 12)); // WHERE PreanalLengthMinPost <= 12
     * </code>
     *
     * @param     mixed $preanallengthminpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanallengthminpost($preanallengthminpost = null, $comparison = null)
    {
        if (is_array($preanallengthminpost)) {
            $useMinMax = false;
            if (isset($preanallengthminpost['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMINPOST, $preanallengthminpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanallengthminpost['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHMINPOST, $preanallengthminpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANALLENGTHMINPOST, $preanallengthminpost, $comparison);
    }

    /**
     * Filter the query on the PreanalLengthLitPre column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanallengthlitpre(1234); // WHERE PreanalLengthLitPre = 1234
     * $query->filterByPreanallengthlitpre(array(12, 34)); // WHERE PreanalLengthLitPre IN (12, 34)
     * $query->filterByPreanallengthlitpre(array('min' => 12)); // WHERE PreanalLengthLitPre >= 12
     * $query->filterByPreanallengthlitpre(array('max' => 12)); // WHERE PreanalLengthLitPre <= 12
     * </code>
     *
     * @param     mixed $preanallengthlitpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanallengthlitpre($preanallengthlitpre = null, $comparison = null)
    {
        if (is_array($preanallengthlitpre)) {
            $useMinMax = false;
            if (isset($preanallengthlitpre['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHLITPRE, $preanallengthlitpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanallengthlitpre['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHLITPRE, $preanallengthlitpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANALLENGTHLITPRE, $preanallengthlitpre, $comparison);
    }

    /**
     * Filter the query on the PreanalLengthLitFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanallengthlitflex(1234); // WHERE PreanalLengthLitFlex = 1234
     * $query->filterByPreanallengthlitflex(array(12, 34)); // WHERE PreanalLengthLitFlex IN (12, 34)
     * $query->filterByPreanallengthlitflex(array('min' => 12)); // WHERE PreanalLengthLitFlex >= 12
     * $query->filterByPreanallengthlitflex(array('max' => 12)); // WHERE PreanalLengthLitFlex <= 12
     * </code>
     *
     * @param     mixed $preanallengthlitflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanallengthlitflex($preanallengthlitflex = null, $comparison = null)
    {
        if (is_array($preanallengthlitflex)) {
            $useMinMax = false;
            if (isset($preanallengthlitflex['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHLITFLEX, $preanallengthlitflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanallengthlitflex['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHLITFLEX, $preanallengthlitflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANALLENGTHLITFLEX, $preanallengthlitflex, $comparison);
    }

    /**
     * Filter the query on the PreanalLengthLitPost column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanallengthlitpost(1234); // WHERE PreanalLengthLitPost = 1234
     * $query->filterByPreanallengthlitpost(array(12, 34)); // WHERE PreanalLengthLitPost IN (12, 34)
     * $query->filterByPreanallengthlitpost(array('min' => 12)); // WHERE PreanalLengthLitPost >= 12
     * $query->filterByPreanallengthlitpost(array('max' => 12)); // WHERE PreanalLengthLitPost <= 12
     * </code>
     *
     * @param     mixed $preanallengthlitpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreanallengthlitpost($preanallengthlitpost = null, $comparison = null)
    {
        if (is_array($preanallengthlitpost)) {
            $useMinMax = false;
            if (isset($preanallengthlitpost['min'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHLITPOST, $preanallengthlitpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanallengthlitpost['max'])) {
                $this->addUsingAlias(LarvaePeer::PREANALLENGTHLITPOST, $preanallengthlitpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREANALLENGTHLITPOST, $preanallengthlitpost, $comparison);
    }

    /**
     * Filter the query on the PrepecLengthMaxPre column
     *
     * Example usage:
     * <code>
     * $query->filterByPrepeclengthmaxpre(1234); // WHERE PrepecLengthMaxPre = 1234
     * $query->filterByPrepeclengthmaxpre(array(12, 34)); // WHERE PrepecLengthMaxPre IN (12, 34)
     * $query->filterByPrepeclengthmaxpre(array('min' => 12)); // WHERE PrepecLengthMaxPre >= 12
     * $query->filterByPrepeclengthmaxpre(array('max' => 12)); // WHERE PrepecLengthMaxPre <= 12
     * </code>
     *
     * @param     mixed $prepeclengthmaxpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPrepeclengthmaxpre($prepeclengthmaxpre = null, $comparison = null)
    {
        if (is_array($prepeclengthmaxpre)) {
            $useMinMax = false;
            if (isset($prepeclengthmaxpre['min'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHMAXPRE, $prepeclengthmaxpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prepeclengthmaxpre['max'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHMAXPRE, $prepeclengthmaxpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREPECLENGTHMAXPRE, $prepeclengthmaxpre, $comparison);
    }

    /**
     * Filter the query on the PrepecLengthMaxFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByPrepeclengthmaxflex(1234); // WHERE PrepecLengthMaxFlex = 1234
     * $query->filterByPrepeclengthmaxflex(array(12, 34)); // WHERE PrepecLengthMaxFlex IN (12, 34)
     * $query->filterByPrepeclengthmaxflex(array('min' => 12)); // WHERE PrepecLengthMaxFlex >= 12
     * $query->filterByPrepeclengthmaxflex(array('max' => 12)); // WHERE PrepecLengthMaxFlex <= 12
     * </code>
     *
     * @param     mixed $prepeclengthmaxflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPrepeclengthmaxflex($prepeclengthmaxflex = null, $comparison = null)
    {
        if (is_array($prepeclengthmaxflex)) {
            $useMinMax = false;
            if (isset($prepeclengthmaxflex['min'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHMAXFLEX, $prepeclengthmaxflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prepeclengthmaxflex['max'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHMAXFLEX, $prepeclengthmaxflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREPECLENGTHMAXFLEX, $prepeclengthmaxflex, $comparison);
    }

    /**
     * Filter the query on the PrepecLengthMaxPost column
     *
     * Example usage:
     * <code>
     * $query->filterByPrepeclengthmaxpost(1234); // WHERE PrepecLengthMaxPost = 1234
     * $query->filterByPrepeclengthmaxpost(array(12, 34)); // WHERE PrepecLengthMaxPost IN (12, 34)
     * $query->filterByPrepeclengthmaxpost(array('min' => 12)); // WHERE PrepecLengthMaxPost >= 12
     * $query->filterByPrepeclengthmaxpost(array('max' => 12)); // WHERE PrepecLengthMaxPost <= 12
     * </code>
     *
     * @param     mixed $prepeclengthmaxpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPrepeclengthmaxpost($prepeclengthmaxpost = null, $comparison = null)
    {
        if (is_array($prepeclengthmaxpost)) {
            $useMinMax = false;
            if (isset($prepeclengthmaxpost['min'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHMAXPOST, $prepeclengthmaxpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prepeclengthmaxpost['max'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHMAXPOST, $prepeclengthmaxpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREPECLENGTHMAXPOST, $prepeclengthmaxpost, $comparison);
    }

    /**
     * Filter the query on the PrepecLengthMinPre column
     *
     * Example usage:
     * <code>
     * $query->filterByPrepeclengthminpre(1234); // WHERE PrepecLengthMinPre = 1234
     * $query->filterByPrepeclengthminpre(array(12, 34)); // WHERE PrepecLengthMinPre IN (12, 34)
     * $query->filterByPrepeclengthminpre(array('min' => 12)); // WHERE PrepecLengthMinPre >= 12
     * $query->filterByPrepeclengthminpre(array('max' => 12)); // WHERE PrepecLengthMinPre <= 12
     * </code>
     *
     * @param     mixed $prepeclengthminpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPrepeclengthminpre($prepeclengthminpre = null, $comparison = null)
    {
        if (is_array($prepeclengthminpre)) {
            $useMinMax = false;
            if (isset($prepeclengthminpre['min'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHMINPRE, $prepeclengthminpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prepeclengthminpre['max'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHMINPRE, $prepeclengthminpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREPECLENGTHMINPRE, $prepeclengthminpre, $comparison);
    }

    /**
     * Filter the query on the PrepecLengthMinFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByPrepeclengthminflex(1234); // WHERE PrepecLengthMinFlex = 1234
     * $query->filterByPrepeclengthminflex(array(12, 34)); // WHERE PrepecLengthMinFlex IN (12, 34)
     * $query->filterByPrepeclengthminflex(array('min' => 12)); // WHERE PrepecLengthMinFlex >= 12
     * $query->filterByPrepeclengthminflex(array('max' => 12)); // WHERE PrepecLengthMinFlex <= 12
     * </code>
     *
     * @param     mixed $prepeclengthminflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPrepeclengthminflex($prepeclengthminflex = null, $comparison = null)
    {
        if (is_array($prepeclengthminflex)) {
            $useMinMax = false;
            if (isset($prepeclengthminflex['min'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHMINFLEX, $prepeclengthminflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prepeclengthminflex['max'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHMINFLEX, $prepeclengthminflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREPECLENGTHMINFLEX, $prepeclengthminflex, $comparison);
    }

    /**
     * Filter the query on the PrepecLengthMinPost column
     *
     * Example usage:
     * <code>
     * $query->filterByPrepeclengthminpost(1234); // WHERE PrepecLengthMinPost = 1234
     * $query->filterByPrepeclengthminpost(array(12, 34)); // WHERE PrepecLengthMinPost IN (12, 34)
     * $query->filterByPrepeclengthminpost(array('min' => 12)); // WHERE PrepecLengthMinPost >= 12
     * $query->filterByPrepeclengthminpost(array('max' => 12)); // WHERE PrepecLengthMinPost <= 12
     * </code>
     *
     * @param     mixed $prepeclengthminpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPrepeclengthminpost($prepeclengthminpost = null, $comparison = null)
    {
        if (is_array($prepeclengthminpost)) {
            $useMinMax = false;
            if (isset($prepeclengthminpost['min'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHMINPOST, $prepeclengthminpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prepeclengthminpost['max'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHMINPOST, $prepeclengthminpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREPECLENGTHMINPOST, $prepeclengthminpost, $comparison);
    }

    /**
     * Filter the query on the PrepecLengthLitPre column
     *
     * Example usage:
     * <code>
     * $query->filterByPrepeclengthlitpre(1234); // WHERE PrepecLengthLitPre = 1234
     * $query->filterByPrepeclengthlitpre(array(12, 34)); // WHERE PrepecLengthLitPre IN (12, 34)
     * $query->filterByPrepeclengthlitpre(array('min' => 12)); // WHERE PrepecLengthLitPre >= 12
     * $query->filterByPrepeclengthlitpre(array('max' => 12)); // WHERE PrepecLengthLitPre <= 12
     * </code>
     *
     * @param     mixed $prepeclengthlitpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPrepeclengthlitpre($prepeclengthlitpre = null, $comparison = null)
    {
        if (is_array($prepeclengthlitpre)) {
            $useMinMax = false;
            if (isset($prepeclengthlitpre['min'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHLITPRE, $prepeclengthlitpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prepeclengthlitpre['max'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHLITPRE, $prepeclengthlitpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREPECLENGTHLITPRE, $prepeclengthlitpre, $comparison);
    }

    /**
     * Filter the query on the PrepecLengthLitFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByPrepeclengthlitflex(1234); // WHERE PrepecLengthLitFlex = 1234
     * $query->filterByPrepeclengthlitflex(array(12, 34)); // WHERE PrepecLengthLitFlex IN (12, 34)
     * $query->filterByPrepeclengthlitflex(array('min' => 12)); // WHERE PrepecLengthLitFlex >= 12
     * $query->filterByPrepeclengthlitflex(array('max' => 12)); // WHERE PrepecLengthLitFlex <= 12
     * </code>
     *
     * @param     mixed $prepeclengthlitflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPrepeclengthlitflex($prepeclengthlitflex = null, $comparison = null)
    {
        if (is_array($prepeclengthlitflex)) {
            $useMinMax = false;
            if (isset($prepeclengthlitflex['min'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHLITFLEX, $prepeclengthlitflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prepeclengthlitflex['max'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHLITFLEX, $prepeclengthlitflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREPECLENGTHLITFLEX, $prepeclengthlitflex, $comparison);
    }

    /**
     * Filter the query on the PrepecLengthLitPost column
     *
     * Example usage:
     * <code>
     * $query->filterByPrepeclengthlitpost(1234); // WHERE PrepecLengthLitPost = 1234
     * $query->filterByPrepeclengthlitpost(array(12, 34)); // WHERE PrepecLengthLitPost IN (12, 34)
     * $query->filterByPrepeclengthlitpost(array('min' => 12)); // WHERE PrepecLengthLitPost >= 12
     * $query->filterByPrepeclengthlitpost(array('max' => 12)); // WHERE PrepecLengthLitPost <= 12
     * </code>
     *
     * @param     mixed $prepeclengthlitpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPrepeclengthlitpost($prepeclengthlitpost = null, $comparison = null)
    {
        if (is_array($prepeclengthlitpost)) {
            $useMinMax = false;
            if (isset($prepeclengthlitpost['min'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHLITPOST, $prepeclengthlitpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prepeclengthlitpost['max'])) {
                $this->addUsingAlias(LarvaePeer::PREPECLENGTHLITPOST, $prepeclengthlitpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREPECLENGTHLITPOST, $prepeclengthlitpost, $comparison);
    }

    /**
     * Filter the query on the PreorbitalMaxPre column
     *
     * Example usage:
     * <code>
     * $query->filterByPreorbitalmaxpre(1234); // WHERE PreorbitalMaxPre = 1234
     * $query->filterByPreorbitalmaxpre(array(12, 34)); // WHERE PreorbitalMaxPre IN (12, 34)
     * $query->filterByPreorbitalmaxpre(array('min' => 12)); // WHERE PreorbitalMaxPre >= 12
     * $query->filterByPreorbitalmaxpre(array('max' => 12)); // WHERE PreorbitalMaxPre <= 12
     * </code>
     *
     * @param     mixed $preorbitalmaxpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreorbitalmaxpre($preorbitalmaxpre = null, $comparison = null)
    {
        if (is_array($preorbitalmaxpre)) {
            $useMinMax = false;
            if (isset($preorbitalmaxpre['min'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALMAXPRE, $preorbitalmaxpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preorbitalmaxpre['max'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALMAXPRE, $preorbitalmaxpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREORBITALMAXPRE, $preorbitalmaxpre, $comparison);
    }

    /**
     * Filter the query on the PreorbitalMaxFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByPreorbitalmaxflex(1234); // WHERE PreorbitalMaxFlex = 1234
     * $query->filterByPreorbitalmaxflex(array(12, 34)); // WHERE PreorbitalMaxFlex IN (12, 34)
     * $query->filterByPreorbitalmaxflex(array('min' => 12)); // WHERE PreorbitalMaxFlex >= 12
     * $query->filterByPreorbitalmaxflex(array('max' => 12)); // WHERE PreorbitalMaxFlex <= 12
     * </code>
     *
     * @param     mixed $preorbitalmaxflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreorbitalmaxflex($preorbitalmaxflex = null, $comparison = null)
    {
        if (is_array($preorbitalmaxflex)) {
            $useMinMax = false;
            if (isset($preorbitalmaxflex['min'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALMAXFLEX, $preorbitalmaxflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preorbitalmaxflex['max'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALMAXFLEX, $preorbitalmaxflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREORBITALMAXFLEX, $preorbitalmaxflex, $comparison);
    }

    /**
     * Filter the query on the PreorbitalMaxPost column
     *
     * Example usage:
     * <code>
     * $query->filterByPreorbitalmaxpost(1234); // WHERE PreorbitalMaxPost = 1234
     * $query->filterByPreorbitalmaxpost(array(12, 34)); // WHERE PreorbitalMaxPost IN (12, 34)
     * $query->filterByPreorbitalmaxpost(array('min' => 12)); // WHERE PreorbitalMaxPost >= 12
     * $query->filterByPreorbitalmaxpost(array('max' => 12)); // WHERE PreorbitalMaxPost <= 12
     * </code>
     *
     * @param     mixed $preorbitalmaxpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreorbitalmaxpost($preorbitalmaxpost = null, $comparison = null)
    {
        if (is_array($preorbitalmaxpost)) {
            $useMinMax = false;
            if (isset($preorbitalmaxpost['min'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALMAXPOST, $preorbitalmaxpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preorbitalmaxpost['max'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALMAXPOST, $preorbitalmaxpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREORBITALMAXPOST, $preorbitalmaxpost, $comparison);
    }

    /**
     * Filter the query on the PreorbitalMinPre column
     *
     * Example usage:
     * <code>
     * $query->filterByPreorbitalminpre(1234); // WHERE PreorbitalMinPre = 1234
     * $query->filterByPreorbitalminpre(array(12, 34)); // WHERE PreorbitalMinPre IN (12, 34)
     * $query->filterByPreorbitalminpre(array('min' => 12)); // WHERE PreorbitalMinPre >= 12
     * $query->filterByPreorbitalminpre(array('max' => 12)); // WHERE PreorbitalMinPre <= 12
     * </code>
     *
     * @param     mixed $preorbitalminpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreorbitalminpre($preorbitalminpre = null, $comparison = null)
    {
        if (is_array($preorbitalminpre)) {
            $useMinMax = false;
            if (isset($preorbitalminpre['min'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALMINPRE, $preorbitalminpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preorbitalminpre['max'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALMINPRE, $preorbitalminpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREORBITALMINPRE, $preorbitalminpre, $comparison);
    }

    /**
     * Filter the query on the PreorbitalMinFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByPreorbitalminflex(1234); // WHERE PreorbitalMinFlex = 1234
     * $query->filterByPreorbitalminflex(array(12, 34)); // WHERE PreorbitalMinFlex IN (12, 34)
     * $query->filterByPreorbitalminflex(array('min' => 12)); // WHERE PreorbitalMinFlex >= 12
     * $query->filterByPreorbitalminflex(array('max' => 12)); // WHERE PreorbitalMinFlex <= 12
     * </code>
     *
     * @param     mixed $preorbitalminflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreorbitalminflex($preorbitalminflex = null, $comparison = null)
    {
        if (is_array($preorbitalminflex)) {
            $useMinMax = false;
            if (isset($preorbitalminflex['min'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALMINFLEX, $preorbitalminflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preorbitalminflex['max'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALMINFLEX, $preorbitalminflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREORBITALMINFLEX, $preorbitalminflex, $comparison);
    }

    /**
     * Filter the query on the PreorbitalMinPost column
     *
     * Example usage:
     * <code>
     * $query->filterByPreorbitalminpost(1234); // WHERE PreorbitalMinPost = 1234
     * $query->filterByPreorbitalminpost(array(12, 34)); // WHERE PreorbitalMinPost IN (12, 34)
     * $query->filterByPreorbitalminpost(array('min' => 12)); // WHERE PreorbitalMinPost >= 12
     * $query->filterByPreorbitalminpost(array('max' => 12)); // WHERE PreorbitalMinPost <= 12
     * </code>
     *
     * @param     mixed $preorbitalminpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreorbitalminpost($preorbitalminpost = null, $comparison = null)
    {
        if (is_array($preorbitalminpost)) {
            $useMinMax = false;
            if (isset($preorbitalminpost['min'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALMINPOST, $preorbitalminpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preorbitalminpost['max'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALMINPOST, $preorbitalminpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREORBITALMINPOST, $preorbitalminpost, $comparison);
    }

    /**
     * Filter the query on the PreorbitalLitPre column
     *
     * Example usage:
     * <code>
     * $query->filterByPreorbitallitpre(1234); // WHERE PreorbitalLitPre = 1234
     * $query->filterByPreorbitallitpre(array(12, 34)); // WHERE PreorbitalLitPre IN (12, 34)
     * $query->filterByPreorbitallitpre(array('min' => 12)); // WHERE PreorbitalLitPre >= 12
     * $query->filterByPreorbitallitpre(array('max' => 12)); // WHERE PreorbitalLitPre <= 12
     * </code>
     *
     * @param     mixed $preorbitallitpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreorbitallitpre($preorbitallitpre = null, $comparison = null)
    {
        if (is_array($preorbitallitpre)) {
            $useMinMax = false;
            if (isset($preorbitallitpre['min'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALLITPRE, $preorbitallitpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preorbitallitpre['max'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALLITPRE, $preorbitallitpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREORBITALLITPRE, $preorbitallitpre, $comparison);
    }

    /**
     * Filter the query on the PreorbitalLitFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByPreorbitallitflex(1234); // WHERE PreorbitalLitFlex = 1234
     * $query->filterByPreorbitallitflex(array(12, 34)); // WHERE PreorbitalLitFlex IN (12, 34)
     * $query->filterByPreorbitallitflex(array('min' => 12)); // WHERE PreorbitalLitFlex >= 12
     * $query->filterByPreorbitallitflex(array('max' => 12)); // WHERE PreorbitalLitFlex <= 12
     * </code>
     *
     * @param     mixed $preorbitallitflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreorbitallitflex($preorbitallitflex = null, $comparison = null)
    {
        if (is_array($preorbitallitflex)) {
            $useMinMax = false;
            if (isset($preorbitallitflex['min'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALLITFLEX, $preorbitallitflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preorbitallitflex['max'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALLITFLEX, $preorbitallitflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREORBITALLITFLEX, $preorbitallitflex, $comparison);
    }

    /**
     * Filter the query on the PreorbitalLitPost column
     *
     * Example usage:
     * <code>
     * $query->filterByPreorbitallitpost(1234); // WHERE PreorbitalLitPost = 1234
     * $query->filterByPreorbitallitpost(array(12, 34)); // WHERE PreorbitalLitPost IN (12, 34)
     * $query->filterByPreorbitallitpost(array('min' => 12)); // WHERE PreorbitalLitPost >= 12
     * $query->filterByPreorbitallitpost(array('max' => 12)); // WHERE PreorbitalLitPost <= 12
     * </code>
     *
     * @param     mixed $preorbitallitpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByPreorbitallitpost($preorbitallitpost = null, $comparison = null)
    {
        if (is_array($preorbitallitpost)) {
            $useMinMax = false;
            if (isset($preorbitallitpost['min'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALLITPOST, $preorbitallitpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preorbitallitpost['max'])) {
                $this->addUsingAlias(LarvaePeer::PREORBITALLITPOST, $preorbitallitpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::PREORBITALLITPOST, $preorbitallitpost, $comparison);
    }

    /**
     * Filter the query on the DiameterofEyeMaxPre column
     *
     * Example usage:
     * <code>
     * $query->filterByDiameterofeyemaxpre(1234); // WHERE DiameterofEyeMaxPre = 1234
     * $query->filterByDiameterofeyemaxpre(array(12, 34)); // WHERE DiameterofEyeMaxPre IN (12, 34)
     * $query->filterByDiameterofeyemaxpre(array('min' => 12)); // WHERE DiameterofEyeMaxPre >= 12
     * $query->filterByDiameterofeyemaxpre(array('max' => 12)); // WHERE DiameterofEyeMaxPre <= 12
     * </code>
     *
     * @param     mixed $diameterofeyemaxpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDiameterofeyemaxpre($diameterofeyemaxpre = null, $comparison = null)
    {
        if (is_array($diameterofeyemaxpre)) {
            $useMinMax = false;
            if (isset($diameterofeyemaxpre['min'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMAXPRE, $diameterofeyemaxpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diameterofeyemaxpre['max'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMAXPRE, $diameterofeyemaxpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMAXPRE, $diameterofeyemaxpre, $comparison);
    }

    /**
     * Filter the query on the DiameterofEyeMaxFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByDiameterofeyemaxflex(1234); // WHERE DiameterofEyeMaxFlex = 1234
     * $query->filterByDiameterofeyemaxflex(array(12, 34)); // WHERE DiameterofEyeMaxFlex IN (12, 34)
     * $query->filterByDiameterofeyemaxflex(array('min' => 12)); // WHERE DiameterofEyeMaxFlex >= 12
     * $query->filterByDiameterofeyemaxflex(array('max' => 12)); // WHERE DiameterofEyeMaxFlex <= 12
     * </code>
     *
     * @param     mixed $diameterofeyemaxflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDiameterofeyemaxflex($diameterofeyemaxflex = null, $comparison = null)
    {
        if (is_array($diameterofeyemaxflex)) {
            $useMinMax = false;
            if (isset($diameterofeyemaxflex['min'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMAXFLEX, $diameterofeyemaxflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diameterofeyemaxflex['max'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMAXFLEX, $diameterofeyemaxflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMAXFLEX, $diameterofeyemaxflex, $comparison);
    }

    /**
     * Filter the query on the DiameterofEyeMaxPost column
     *
     * Example usage:
     * <code>
     * $query->filterByDiameterofeyemaxpost(1234); // WHERE DiameterofEyeMaxPost = 1234
     * $query->filterByDiameterofeyemaxpost(array(12, 34)); // WHERE DiameterofEyeMaxPost IN (12, 34)
     * $query->filterByDiameterofeyemaxpost(array('min' => 12)); // WHERE DiameterofEyeMaxPost >= 12
     * $query->filterByDiameterofeyemaxpost(array('max' => 12)); // WHERE DiameterofEyeMaxPost <= 12
     * </code>
     *
     * @param     mixed $diameterofeyemaxpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDiameterofeyemaxpost($diameterofeyemaxpost = null, $comparison = null)
    {
        if (is_array($diameterofeyemaxpost)) {
            $useMinMax = false;
            if (isset($diameterofeyemaxpost['min'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMAXPOST, $diameterofeyemaxpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diameterofeyemaxpost['max'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMAXPOST, $diameterofeyemaxpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMAXPOST, $diameterofeyemaxpost, $comparison);
    }

    /**
     * Filter the query on the DiameterofEyeMinPre column
     *
     * Example usage:
     * <code>
     * $query->filterByDiameterofeyeminpre(1234); // WHERE DiameterofEyeMinPre = 1234
     * $query->filterByDiameterofeyeminpre(array(12, 34)); // WHERE DiameterofEyeMinPre IN (12, 34)
     * $query->filterByDiameterofeyeminpre(array('min' => 12)); // WHERE DiameterofEyeMinPre >= 12
     * $query->filterByDiameterofeyeminpre(array('max' => 12)); // WHERE DiameterofEyeMinPre <= 12
     * </code>
     *
     * @param     mixed $diameterofeyeminpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDiameterofeyeminpre($diameterofeyeminpre = null, $comparison = null)
    {
        if (is_array($diameterofeyeminpre)) {
            $useMinMax = false;
            if (isset($diameterofeyeminpre['min'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMINPRE, $diameterofeyeminpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diameterofeyeminpre['max'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMINPRE, $diameterofeyeminpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMINPRE, $diameterofeyeminpre, $comparison);
    }

    /**
     * Filter the query on the DiameterofEyeMinFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByDiameterofeyeminflex(1234); // WHERE DiameterofEyeMinFlex = 1234
     * $query->filterByDiameterofeyeminflex(array(12, 34)); // WHERE DiameterofEyeMinFlex IN (12, 34)
     * $query->filterByDiameterofeyeminflex(array('min' => 12)); // WHERE DiameterofEyeMinFlex >= 12
     * $query->filterByDiameterofeyeminflex(array('max' => 12)); // WHERE DiameterofEyeMinFlex <= 12
     * </code>
     *
     * @param     mixed $diameterofeyeminflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDiameterofeyeminflex($diameterofeyeminflex = null, $comparison = null)
    {
        if (is_array($diameterofeyeminflex)) {
            $useMinMax = false;
            if (isset($diameterofeyeminflex['min'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMINFLEX, $diameterofeyeminflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diameterofeyeminflex['max'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMINFLEX, $diameterofeyeminflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMINFLEX, $diameterofeyeminflex, $comparison);
    }

    /**
     * Filter the query on the DiameterofEyeMinPost column
     *
     * Example usage:
     * <code>
     * $query->filterByDiameterofeyeminpost(1234); // WHERE DiameterofEyeMinPost = 1234
     * $query->filterByDiameterofeyeminpost(array(12, 34)); // WHERE DiameterofEyeMinPost IN (12, 34)
     * $query->filterByDiameterofeyeminpost(array('min' => 12)); // WHERE DiameterofEyeMinPost >= 12
     * $query->filterByDiameterofeyeminpost(array('max' => 12)); // WHERE DiameterofEyeMinPost <= 12
     * </code>
     *
     * @param     mixed $diameterofeyeminpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDiameterofeyeminpost($diameterofeyeminpost = null, $comparison = null)
    {
        if (is_array($diameterofeyeminpost)) {
            $useMinMax = false;
            if (isset($diameterofeyeminpost['min'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMINPOST, $diameterofeyeminpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diameterofeyeminpost['max'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMINPOST, $diameterofeyeminpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DIAMETEROFEYEMINPOST, $diameterofeyeminpost, $comparison);
    }

    /**
     * Filter the query on the DiameterofEyeLitPre column
     *
     * Example usage:
     * <code>
     * $query->filterByDiameterofeyelitpre(1234); // WHERE DiameterofEyeLitPre = 1234
     * $query->filterByDiameterofeyelitpre(array(12, 34)); // WHERE DiameterofEyeLitPre IN (12, 34)
     * $query->filterByDiameterofeyelitpre(array('min' => 12)); // WHERE DiameterofEyeLitPre >= 12
     * $query->filterByDiameterofeyelitpre(array('max' => 12)); // WHERE DiameterofEyeLitPre <= 12
     * </code>
     *
     * @param     mixed $diameterofeyelitpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDiameterofeyelitpre($diameterofeyelitpre = null, $comparison = null)
    {
        if (is_array($diameterofeyelitpre)) {
            $useMinMax = false;
            if (isset($diameterofeyelitpre['min'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYELITPRE, $diameterofeyelitpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diameterofeyelitpre['max'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYELITPRE, $diameterofeyelitpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DIAMETEROFEYELITPRE, $diameterofeyelitpre, $comparison);
    }

    /**
     * Filter the query on the DiameterofEyeLitFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByDiameterofeyelitflex(1234); // WHERE DiameterofEyeLitFlex = 1234
     * $query->filterByDiameterofeyelitflex(array(12, 34)); // WHERE DiameterofEyeLitFlex IN (12, 34)
     * $query->filterByDiameterofeyelitflex(array('min' => 12)); // WHERE DiameterofEyeLitFlex >= 12
     * $query->filterByDiameterofeyelitflex(array('max' => 12)); // WHERE DiameterofEyeLitFlex <= 12
     * </code>
     *
     * @param     mixed $diameterofeyelitflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDiameterofeyelitflex($diameterofeyelitflex = null, $comparison = null)
    {
        if (is_array($diameterofeyelitflex)) {
            $useMinMax = false;
            if (isset($diameterofeyelitflex['min'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYELITFLEX, $diameterofeyelitflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diameterofeyelitflex['max'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYELITFLEX, $diameterofeyelitflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DIAMETEROFEYELITFLEX, $diameterofeyelitflex, $comparison);
    }

    /**
     * Filter the query on the DiameterofEyeLitPost column
     *
     * Example usage:
     * <code>
     * $query->filterByDiameterofeyelitpost(1234); // WHERE DiameterofEyeLitPost = 1234
     * $query->filterByDiameterofeyelitpost(array(12, 34)); // WHERE DiameterofEyeLitPost IN (12, 34)
     * $query->filterByDiameterofeyelitpost(array('min' => 12)); // WHERE DiameterofEyeLitPost >= 12
     * $query->filterByDiameterofeyelitpost(array('max' => 12)); // WHERE DiameterofEyeLitPost <= 12
     * </code>
     *
     * @param     mixed $diameterofeyelitpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDiameterofeyelitpost($diameterofeyelitpost = null, $comparison = null)
    {
        if (is_array($diameterofeyelitpost)) {
            $useMinMax = false;
            if (isset($diameterofeyelitpost['min'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYELITPOST, $diameterofeyelitpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diameterofeyelitpost['max'])) {
                $this->addUsingAlias(LarvaePeer::DIAMETEROFEYELITPOST, $diameterofeyelitpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DIAMETEROFEYELITPOST, $diameterofeyelitpost, $comparison);
    }

    /**
     * Filter the query on the DepthEyeMaxPre column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptheyemaxpre(1234); // WHERE DepthEyeMaxPre = 1234
     * $query->filterByDeptheyemaxpre(array(12, 34)); // WHERE DepthEyeMaxPre IN (12, 34)
     * $query->filterByDeptheyemaxpre(array('min' => 12)); // WHERE DepthEyeMaxPre >= 12
     * $query->filterByDeptheyemaxpre(array('max' => 12)); // WHERE DepthEyeMaxPre <= 12
     * </code>
     *
     * @param     mixed $deptheyemaxpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDeptheyemaxpre($deptheyemaxpre = null, $comparison = null)
    {
        if (is_array($deptheyemaxpre)) {
            $useMinMax = false;
            if (isset($deptheyemaxpre['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYEMAXPRE, $deptheyemaxpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptheyemaxpre['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYEMAXPRE, $deptheyemaxpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHEYEMAXPRE, $deptheyemaxpre, $comparison);
    }

    /**
     * Filter the query on the DepthEyeMaxFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptheyemaxflex(1234); // WHERE DepthEyeMaxFlex = 1234
     * $query->filterByDeptheyemaxflex(array(12, 34)); // WHERE DepthEyeMaxFlex IN (12, 34)
     * $query->filterByDeptheyemaxflex(array('min' => 12)); // WHERE DepthEyeMaxFlex >= 12
     * $query->filterByDeptheyemaxflex(array('max' => 12)); // WHERE DepthEyeMaxFlex <= 12
     * </code>
     *
     * @param     mixed $deptheyemaxflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDeptheyemaxflex($deptheyemaxflex = null, $comparison = null)
    {
        if (is_array($deptheyemaxflex)) {
            $useMinMax = false;
            if (isset($deptheyemaxflex['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYEMAXFLEX, $deptheyemaxflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptheyemaxflex['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYEMAXFLEX, $deptheyemaxflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHEYEMAXFLEX, $deptheyemaxflex, $comparison);
    }

    /**
     * Filter the query on the DepthEyeMaxPost column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptheyemaxpost(1234); // WHERE DepthEyeMaxPost = 1234
     * $query->filterByDeptheyemaxpost(array(12, 34)); // WHERE DepthEyeMaxPost IN (12, 34)
     * $query->filterByDeptheyemaxpost(array('min' => 12)); // WHERE DepthEyeMaxPost >= 12
     * $query->filterByDeptheyemaxpost(array('max' => 12)); // WHERE DepthEyeMaxPost <= 12
     * </code>
     *
     * @param     mixed $deptheyemaxpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDeptheyemaxpost($deptheyemaxpost = null, $comparison = null)
    {
        if (is_array($deptheyemaxpost)) {
            $useMinMax = false;
            if (isset($deptheyemaxpost['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYEMAXPOST, $deptheyemaxpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptheyemaxpost['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYEMAXPOST, $deptheyemaxpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHEYEMAXPOST, $deptheyemaxpost, $comparison);
    }

    /**
     * Filter the query on the DepthEyeMinPre column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptheyeminpre(1234); // WHERE DepthEyeMinPre = 1234
     * $query->filterByDeptheyeminpre(array(12, 34)); // WHERE DepthEyeMinPre IN (12, 34)
     * $query->filterByDeptheyeminpre(array('min' => 12)); // WHERE DepthEyeMinPre >= 12
     * $query->filterByDeptheyeminpre(array('max' => 12)); // WHERE DepthEyeMinPre <= 12
     * </code>
     *
     * @param     mixed $deptheyeminpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDeptheyeminpre($deptheyeminpre = null, $comparison = null)
    {
        if (is_array($deptheyeminpre)) {
            $useMinMax = false;
            if (isset($deptheyeminpre['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYEMINPRE, $deptheyeminpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptheyeminpre['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYEMINPRE, $deptheyeminpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHEYEMINPRE, $deptheyeminpre, $comparison);
    }

    /**
     * Filter the query on the DepthEyeMinFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptheyeminflex(1234); // WHERE DepthEyeMinFlex = 1234
     * $query->filterByDeptheyeminflex(array(12, 34)); // WHERE DepthEyeMinFlex IN (12, 34)
     * $query->filterByDeptheyeminflex(array('min' => 12)); // WHERE DepthEyeMinFlex >= 12
     * $query->filterByDeptheyeminflex(array('max' => 12)); // WHERE DepthEyeMinFlex <= 12
     * </code>
     *
     * @param     mixed $deptheyeminflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDeptheyeminflex($deptheyeminflex = null, $comparison = null)
    {
        if (is_array($deptheyeminflex)) {
            $useMinMax = false;
            if (isset($deptheyeminflex['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYEMINFLEX, $deptheyeminflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptheyeminflex['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYEMINFLEX, $deptheyeminflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHEYEMINFLEX, $deptheyeminflex, $comparison);
    }

    /**
     * Filter the query on the DepthEyeMinPost column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptheyeminpost(1234); // WHERE DepthEyeMinPost = 1234
     * $query->filterByDeptheyeminpost(array(12, 34)); // WHERE DepthEyeMinPost IN (12, 34)
     * $query->filterByDeptheyeminpost(array('min' => 12)); // WHERE DepthEyeMinPost >= 12
     * $query->filterByDeptheyeminpost(array('max' => 12)); // WHERE DepthEyeMinPost <= 12
     * </code>
     *
     * @param     mixed $deptheyeminpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDeptheyeminpost($deptheyeminpost = null, $comparison = null)
    {
        if (is_array($deptheyeminpost)) {
            $useMinMax = false;
            if (isset($deptheyeminpost['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYEMINPOST, $deptheyeminpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptheyeminpost['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYEMINPOST, $deptheyeminpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHEYEMINPOST, $deptheyeminpost, $comparison);
    }

    /**
     * Filter the query on the DepthEyeLitPre column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptheyelitpre(1234); // WHERE DepthEyeLitPre = 1234
     * $query->filterByDeptheyelitpre(array(12, 34)); // WHERE DepthEyeLitPre IN (12, 34)
     * $query->filterByDeptheyelitpre(array('min' => 12)); // WHERE DepthEyeLitPre >= 12
     * $query->filterByDeptheyelitpre(array('max' => 12)); // WHERE DepthEyeLitPre <= 12
     * </code>
     *
     * @param     mixed $deptheyelitpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDeptheyelitpre($deptheyelitpre = null, $comparison = null)
    {
        if (is_array($deptheyelitpre)) {
            $useMinMax = false;
            if (isset($deptheyelitpre['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYELITPRE, $deptheyelitpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptheyelitpre['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYELITPRE, $deptheyelitpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHEYELITPRE, $deptheyelitpre, $comparison);
    }

    /**
     * Filter the query on the DepthEyeLitFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptheyelitflex(1234); // WHERE DepthEyeLitFlex = 1234
     * $query->filterByDeptheyelitflex(array(12, 34)); // WHERE DepthEyeLitFlex IN (12, 34)
     * $query->filterByDeptheyelitflex(array('min' => 12)); // WHERE DepthEyeLitFlex >= 12
     * $query->filterByDeptheyelitflex(array('max' => 12)); // WHERE DepthEyeLitFlex <= 12
     * </code>
     *
     * @param     mixed $deptheyelitflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDeptheyelitflex($deptheyelitflex = null, $comparison = null)
    {
        if (is_array($deptheyelitflex)) {
            $useMinMax = false;
            if (isset($deptheyelitflex['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYELITFLEX, $deptheyelitflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptheyelitflex['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYELITFLEX, $deptheyelitflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHEYELITFLEX, $deptheyelitflex, $comparison);
    }

    /**
     * Filter the query on the DepthEyeLitPost column
     *
     * Example usage:
     * <code>
     * $query->filterByDeptheyelitpost(1234); // WHERE DepthEyeLitPost = 1234
     * $query->filterByDeptheyelitpost(array(12, 34)); // WHERE DepthEyeLitPost IN (12, 34)
     * $query->filterByDeptheyelitpost(array('min' => 12)); // WHERE DepthEyeLitPost >= 12
     * $query->filterByDeptheyelitpost(array('max' => 12)); // WHERE DepthEyeLitPost <= 12
     * </code>
     *
     * @param     mixed $deptheyelitpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDeptheyelitpost($deptheyelitpost = null, $comparison = null)
    {
        if (is_array($deptheyelitpost)) {
            $useMinMax = false;
            if (isset($deptheyelitpost['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYELITPOST, $deptheyelitpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deptheyelitpost['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHEYELITPOST, $deptheyelitpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHEYELITPOST, $deptheyelitpost, $comparison);
    }

    /**
     * Filter the query on the DepthPectoralMaxPre column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthpectoralmaxpre(1234); // WHERE DepthPectoralMaxPre = 1234
     * $query->filterByDepthpectoralmaxpre(array(12, 34)); // WHERE DepthPectoralMaxPre IN (12, 34)
     * $query->filterByDepthpectoralmaxpre(array('min' => 12)); // WHERE DepthPectoralMaxPre >= 12
     * $query->filterByDepthpectoralmaxpre(array('max' => 12)); // WHERE DepthPectoralMaxPre <= 12
     * </code>
     *
     * @param     mixed $depthpectoralmaxpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthpectoralmaxpre($depthpectoralmaxpre = null, $comparison = null)
    {
        if (is_array($depthpectoralmaxpre)) {
            $useMinMax = false;
            if (isset($depthpectoralmaxpre['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMAXPRE, $depthpectoralmaxpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthpectoralmaxpre['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMAXPRE, $depthpectoralmaxpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMAXPRE, $depthpectoralmaxpre, $comparison);
    }

    /**
     * Filter the query on the DepthPectoralMaxFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthpectoralmaxflex(1234); // WHERE DepthPectoralMaxFlex = 1234
     * $query->filterByDepthpectoralmaxflex(array(12, 34)); // WHERE DepthPectoralMaxFlex IN (12, 34)
     * $query->filterByDepthpectoralmaxflex(array('min' => 12)); // WHERE DepthPectoralMaxFlex >= 12
     * $query->filterByDepthpectoralmaxflex(array('max' => 12)); // WHERE DepthPectoralMaxFlex <= 12
     * </code>
     *
     * @param     mixed $depthpectoralmaxflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthpectoralmaxflex($depthpectoralmaxflex = null, $comparison = null)
    {
        if (is_array($depthpectoralmaxflex)) {
            $useMinMax = false;
            if (isset($depthpectoralmaxflex['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMAXFLEX, $depthpectoralmaxflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthpectoralmaxflex['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMAXFLEX, $depthpectoralmaxflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMAXFLEX, $depthpectoralmaxflex, $comparison);
    }

    /**
     * Filter the query on the DepthPectoralMaxPost column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthpectoralmaxpost(1234); // WHERE DepthPectoralMaxPost = 1234
     * $query->filterByDepthpectoralmaxpost(array(12, 34)); // WHERE DepthPectoralMaxPost IN (12, 34)
     * $query->filterByDepthpectoralmaxpost(array('min' => 12)); // WHERE DepthPectoralMaxPost >= 12
     * $query->filterByDepthpectoralmaxpost(array('max' => 12)); // WHERE DepthPectoralMaxPost <= 12
     * </code>
     *
     * @param     mixed $depthpectoralmaxpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthpectoralmaxpost($depthpectoralmaxpost = null, $comparison = null)
    {
        if (is_array($depthpectoralmaxpost)) {
            $useMinMax = false;
            if (isset($depthpectoralmaxpost['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMAXPOST, $depthpectoralmaxpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthpectoralmaxpost['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMAXPOST, $depthpectoralmaxpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMAXPOST, $depthpectoralmaxpost, $comparison);
    }

    /**
     * Filter the query on the DepthPectoralMinPre column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthpectoralminpre(1234); // WHERE DepthPectoralMinPre = 1234
     * $query->filterByDepthpectoralminpre(array(12, 34)); // WHERE DepthPectoralMinPre IN (12, 34)
     * $query->filterByDepthpectoralminpre(array('min' => 12)); // WHERE DepthPectoralMinPre >= 12
     * $query->filterByDepthpectoralminpre(array('max' => 12)); // WHERE DepthPectoralMinPre <= 12
     * </code>
     *
     * @param     mixed $depthpectoralminpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthpectoralminpre($depthpectoralminpre = null, $comparison = null)
    {
        if (is_array($depthpectoralminpre)) {
            $useMinMax = false;
            if (isset($depthpectoralminpre['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMINPRE, $depthpectoralminpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthpectoralminpre['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMINPRE, $depthpectoralminpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMINPRE, $depthpectoralminpre, $comparison);
    }

    /**
     * Filter the query on the DepthPectoralMinFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthpectoralminflex(1234); // WHERE DepthPectoralMinFlex = 1234
     * $query->filterByDepthpectoralminflex(array(12, 34)); // WHERE DepthPectoralMinFlex IN (12, 34)
     * $query->filterByDepthpectoralminflex(array('min' => 12)); // WHERE DepthPectoralMinFlex >= 12
     * $query->filterByDepthpectoralminflex(array('max' => 12)); // WHERE DepthPectoralMinFlex <= 12
     * </code>
     *
     * @param     mixed $depthpectoralminflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthpectoralminflex($depthpectoralminflex = null, $comparison = null)
    {
        if (is_array($depthpectoralminflex)) {
            $useMinMax = false;
            if (isset($depthpectoralminflex['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMINFLEX, $depthpectoralminflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthpectoralminflex['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMINFLEX, $depthpectoralminflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMINFLEX, $depthpectoralminflex, $comparison);
    }

    /**
     * Filter the query on the DepthPectoralMinPost column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthpectoralminpost(1234); // WHERE DepthPectoralMinPost = 1234
     * $query->filterByDepthpectoralminpost(array(12, 34)); // WHERE DepthPectoralMinPost IN (12, 34)
     * $query->filterByDepthpectoralminpost(array('min' => 12)); // WHERE DepthPectoralMinPost >= 12
     * $query->filterByDepthpectoralminpost(array('max' => 12)); // WHERE DepthPectoralMinPost <= 12
     * </code>
     *
     * @param     mixed $depthpectoralminpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthpectoralminpost($depthpectoralminpost = null, $comparison = null)
    {
        if (is_array($depthpectoralminpost)) {
            $useMinMax = false;
            if (isset($depthpectoralminpost['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMINPOST, $depthpectoralminpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthpectoralminpost['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMINPOST, $depthpectoralminpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHPECTORALMINPOST, $depthpectoralminpost, $comparison);
    }

    /**
     * Filter the query on the DepthPectoralLitPre column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthpectorallitpre(1234); // WHERE DepthPectoralLitPre = 1234
     * $query->filterByDepthpectorallitpre(array(12, 34)); // WHERE DepthPectoralLitPre IN (12, 34)
     * $query->filterByDepthpectorallitpre(array('min' => 12)); // WHERE DepthPectoralLitPre >= 12
     * $query->filterByDepthpectorallitpre(array('max' => 12)); // WHERE DepthPectoralLitPre <= 12
     * </code>
     *
     * @param     mixed $depthpectorallitpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthpectorallitpre($depthpectorallitpre = null, $comparison = null)
    {
        if (is_array($depthpectorallitpre)) {
            $useMinMax = false;
            if (isset($depthpectorallitpre['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALLITPRE, $depthpectorallitpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthpectorallitpre['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALLITPRE, $depthpectorallitpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHPECTORALLITPRE, $depthpectorallitpre, $comparison);
    }

    /**
     * Filter the query on the DepthPectoralLitFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthpectorallitflex(1234); // WHERE DepthPectoralLitFlex = 1234
     * $query->filterByDepthpectorallitflex(array(12, 34)); // WHERE DepthPectoralLitFlex IN (12, 34)
     * $query->filterByDepthpectorallitflex(array('min' => 12)); // WHERE DepthPectoralLitFlex >= 12
     * $query->filterByDepthpectorallitflex(array('max' => 12)); // WHERE DepthPectoralLitFlex <= 12
     * </code>
     *
     * @param     mixed $depthpectorallitflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthpectorallitflex($depthpectorallitflex = null, $comparison = null)
    {
        if (is_array($depthpectorallitflex)) {
            $useMinMax = false;
            if (isset($depthpectorallitflex['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALLITFLEX, $depthpectorallitflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthpectorallitflex['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALLITFLEX, $depthpectorallitflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHPECTORALLITFLEX, $depthpectorallitflex, $comparison);
    }

    /**
     * Filter the query on the DepthPectoralLitPost column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthpectorallitpost(1234); // WHERE DepthPectoralLitPost = 1234
     * $query->filterByDepthpectorallitpost(array(12, 34)); // WHERE DepthPectoralLitPost IN (12, 34)
     * $query->filterByDepthpectorallitpost(array('min' => 12)); // WHERE DepthPectoralLitPost >= 12
     * $query->filterByDepthpectorallitpost(array('max' => 12)); // WHERE DepthPectoralLitPost <= 12
     * </code>
     *
     * @param     mixed $depthpectorallitpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthpectorallitpost($depthpectorallitpost = null, $comparison = null)
    {
        if (is_array($depthpectorallitpost)) {
            $useMinMax = false;
            if (isset($depthpectorallitpost['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALLITPOST, $depthpectorallitpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthpectorallitpost['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHPECTORALLITPOST, $depthpectorallitpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHPECTORALLITPOST, $depthpectorallitpost, $comparison);
    }

    /**
     * Filter the query on the DepthAnusMaxPre column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthanusmaxpre(1234); // WHERE DepthAnusMaxPre = 1234
     * $query->filterByDepthanusmaxpre(array(12, 34)); // WHERE DepthAnusMaxPre IN (12, 34)
     * $query->filterByDepthanusmaxpre(array('min' => 12)); // WHERE DepthAnusMaxPre >= 12
     * $query->filterByDepthanusmaxpre(array('max' => 12)); // WHERE DepthAnusMaxPre <= 12
     * </code>
     *
     * @param     mixed $depthanusmaxpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthanusmaxpre($depthanusmaxpre = null, $comparison = null)
    {
        if (is_array($depthanusmaxpre)) {
            $useMinMax = false;
            if (isset($depthanusmaxpre['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSMAXPRE, $depthanusmaxpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthanusmaxpre['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSMAXPRE, $depthanusmaxpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHANUSMAXPRE, $depthanusmaxpre, $comparison);
    }

    /**
     * Filter the query on the DepthAnusMaxFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthanusmaxflex(1234); // WHERE DepthAnusMaxFlex = 1234
     * $query->filterByDepthanusmaxflex(array(12, 34)); // WHERE DepthAnusMaxFlex IN (12, 34)
     * $query->filterByDepthanusmaxflex(array('min' => 12)); // WHERE DepthAnusMaxFlex >= 12
     * $query->filterByDepthanusmaxflex(array('max' => 12)); // WHERE DepthAnusMaxFlex <= 12
     * </code>
     *
     * @param     mixed $depthanusmaxflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthanusmaxflex($depthanusmaxflex = null, $comparison = null)
    {
        if (is_array($depthanusmaxflex)) {
            $useMinMax = false;
            if (isset($depthanusmaxflex['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSMAXFLEX, $depthanusmaxflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthanusmaxflex['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSMAXFLEX, $depthanusmaxflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHANUSMAXFLEX, $depthanusmaxflex, $comparison);
    }

    /**
     * Filter the query on the DepthAnusMaxPost column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthanusmaxpost(1234); // WHERE DepthAnusMaxPost = 1234
     * $query->filterByDepthanusmaxpost(array(12, 34)); // WHERE DepthAnusMaxPost IN (12, 34)
     * $query->filterByDepthanusmaxpost(array('min' => 12)); // WHERE DepthAnusMaxPost >= 12
     * $query->filterByDepthanusmaxpost(array('max' => 12)); // WHERE DepthAnusMaxPost <= 12
     * </code>
     *
     * @param     mixed $depthanusmaxpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthanusmaxpost($depthanusmaxpost = null, $comparison = null)
    {
        if (is_array($depthanusmaxpost)) {
            $useMinMax = false;
            if (isset($depthanusmaxpost['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSMAXPOST, $depthanusmaxpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthanusmaxpost['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSMAXPOST, $depthanusmaxpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHANUSMAXPOST, $depthanusmaxpost, $comparison);
    }

    /**
     * Filter the query on the DepthAnusMinPre column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthanusminpre(1234); // WHERE DepthAnusMinPre = 1234
     * $query->filterByDepthanusminpre(array(12, 34)); // WHERE DepthAnusMinPre IN (12, 34)
     * $query->filterByDepthanusminpre(array('min' => 12)); // WHERE DepthAnusMinPre >= 12
     * $query->filterByDepthanusminpre(array('max' => 12)); // WHERE DepthAnusMinPre <= 12
     * </code>
     *
     * @param     mixed $depthanusminpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthanusminpre($depthanusminpre = null, $comparison = null)
    {
        if (is_array($depthanusminpre)) {
            $useMinMax = false;
            if (isset($depthanusminpre['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSMINPRE, $depthanusminpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthanusminpre['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSMINPRE, $depthanusminpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHANUSMINPRE, $depthanusminpre, $comparison);
    }

    /**
     * Filter the query on the DepthAnusMinFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthanusminflex(1234); // WHERE DepthAnusMinFlex = 1234
     * $query->filterByDepthanusminflex(array(12, 34)); // WHERE DepthAnusMinFlex IN (12, 34)
     * $query->filterByDepthanusminflex(array('min' => 12)); // WHERE DepthAnusMinFlex >= 12
     * $query->filterByDepthanusminflex(array('max' => 12)); // WHERE DepthAnusMinFlex <= 12
     * </code>
     *
     * @param     mixed $depthanusminflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthanusminflex($depthanusminflex = null, $comparison = null)
    {
        if (is_array($depthanusminflex)) {
            $useMinMax = false;
            if (isset($depthanusminflex['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSMINFLEX, $depthanusminflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthanusminflex['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSMINFLEX, $depthanusminflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHANUSMINFLEX, $depthanusminflex, $comparison);
    }

    /**
     * Filter the query on the DepthAnusMinPost column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthanusminpost(1234); // WHERE DepthAnusMinPost = 1234
     * $query->filterByDepthanusminpost(array(12, 34)); // WHERE DepthAnusMinPost IN (12, 34)
     * $query->filterByDepthanusminpost(array('min' => 12)); // WHERE DepthAnusMinPost >= 12
     * $query->filterByDepthanusminpost(array('max' => 12)); // WHERE DepthAnusMinPost <= 12
     * </code>
     *
     * @param     mixed $depthanusminpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthanusminpost($depthanusminpost = null, $comparison = null)
    {
        if (is_array($depthanusminpost)) {
            $useMinMax = false;
            if (isset($depthanusminpost['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSMINPOST, $depthanusminpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthanusminpost['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSMINPOST, $depthanusminpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHANUSMINPOST, $depthanusminpost, $comparison);
    }

    /**
     * Filter the query on the DepthAnusLitPre column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthanuslitpre(1234); // WHERE DepthAnusLitPre = 1234
     * $query->filterByDepthanuslitpre(array(12, 34)); // WHERE DepthAnusLitPre IN (12, 34)
     * $query->filterByDepthanuslitpre(array('min' => 12)); // WHERE DepthAnusLitPre >= 12
     * $query->filterByDepthanuslitpre(array('max' => 12)); // WHERE DepthAnusLitPre <= 12
     * </code>
     *
     * @param     mixed $depthanuslitpre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthanuslitpre($depthanuslitpre = null, $comparison = null)
    {
        if (is_array($depthanuslitpre)) {
            $useMinMax = false;
            if (isset($depthanuslitpre['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSLITPRE, $depthanuslitpre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthanuslitpre['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSLITPRE, $depthanuslitpre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHANUSLITPRE, $depthanuslitpre, $comparison);
    }

    /**
     * Filter the query on the DepthAnusLitFlex column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthanuslitflex(1234); // WHERE DepthAnusLitFlex = 1234
     * $query->filterByDepthanuslitflex(array(12, 34)); // WHERE DepthAnusLitFlex IN (12, 34)
     * $query->filterByDepthanuslitflex(array('min' => 12)); // WHERE DepthAnusLitFlex >= 12
     * $query->filterByDepthanuslitflex(array('max' => 12)); // WHERE DepthAnusLitFlex <= 12
     * </code>
     *
     * @param     mixed $depthanuslitflex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthanuslitflex($depthanuslitflex = null, $comparison = null)
    {
        if (is_array($depthanuslitflex)) {
            $useMinMax = false;
            if (isset($depthanuslitflex['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSLITFLEX, $depthanuslitflex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthanuslitflex['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSLITFLEX, $depthanuslitflex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHANUSLITFLEX, $depthanuslitflex, $comparison);
    }

    /**
     * Filter the query on the DepthAnusLitPost column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthanuslitpost(1234); // WHERE DepthAnusLitPost = 1234
     * $query->filterByDepthanuslitpost(array(12, 34)); // WHERE DepthAnusLitPost IN (12, 34)
     * $query->filterByDepthanuslitpost(array('min' => 12)); // WHERE DepthAnusLitPost >= 12
     * $query->filterByDepthanuslitpost(array('max' => 12)); // WHERE DepthAnusLitPost <= 12
     * </code>
     *
     * @param     mixed $depthanuslitpost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDepthanuslitpost($depthanuslitpost = null, $comparison = null)
    {
        if (is_array($depthanuslitpost)) {
            $useMinMax = false;
            if (isset($depthanuslitpost['min'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSLITPOST, $depthanuslitpost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthanuslitpost['max'])) {
                $this->addUsingAlias(LarvaePeer::DEPTHANUSLITPOST, $depthanuslitpost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DEPTHANUSLITPOST, $depthanuslitpost, $comparison);
    }

    /**
     * Filter the query on the AddCharYolks column
     *
     * Example usage:
     * <code>
     * $query->filterByAddcharyolks('fooValue');   // WHERE AddCharYolks = 'fooValue'
     * $query->filterByAddcharyolks('%fooValue%'); // WHERE AddCharYolks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addcharyolks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByAddcharyolks($addcharyolks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addcharyolks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addcharyolks)) {
                $addcharyolks = str_replace('*', '%', $addcharyolks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::ADDCHARYOLKS, $addcharyolks, $comparison);
    }

    /**
     * Filter the query on the AddCharPosts column
     *
     * Example usage:
     * <code>
     * $query->filterByAddcharposts('fooValue');   // WHERE AddCharPosts = 'fooValue'
     * $query->filterByAddcharposts('%fooValue%'); // WHERE AddCharPosts LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addcharposts The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByAddcharposts($addcharposts = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addcharposts)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addcharposts)) {
                $addcharposts = str_replace('*', '%', $addcharposts);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::ADDCHARPOSTS, $addcharposts, $comparison);
    }

    /**
     * Filter the query on the EaseofID column
     *
     * Example usage:
     * <code>
     * $query->filterByEaseofid('fooValue');   // WHERE EaseofID = 'fooValue'
     * $query->filterByEaseofid('%fooValue%'); // WHERE EaseofID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $easeofid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByEaseofid($easeofid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($easeofid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $easeofid)) {
                $easeofid = str_replace('*', '%', $easeofid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::EASEOFID, $easeofid, $comparison);
    }

    /**
     * Filter the query on the SimilarSpecies1 column
     *
     * Example usage:
     * <code>
     * $query->filterBySimilarspecies1(1234); // WHERE SimilarSpecies1 = 1234
     * $query->filterBySimilarspecies1(array(12, 34)); // WHERE SimilarSpecies1 IN (12, 34)
     * $query->filterBySimilarspecies1(array('min' => 12)); // WHERE SimilarSpecies1 >= 12
     * $query->filterBySimilarspecies1(array('max' => 12)); // WHERE SimilarSpecies1 <= 12
     * </code>
     *
     * @param     mixed $similarspecies1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterBySimilarspecies1($similarspecies1 = null, $comparison = null)
    {
        if (is_array($similarspecies1)) {
            $useMinMax = false;
            if (isset($similarspecies1['min'])) {
                $this->addUsingAlias(LarvaePeer::SIMILARSPECIES1, $similarspecies1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($similarspecies1['max'])) {
                $this->addUsingAlias(LarvaePeer::SIMILARSPECIES1, $similarspecies1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::SIMILARSPECIES1, $similarspecies1, $comparison);
    }

    /**
     * Filter the query on the SimilarSpec1Remarks column
     *
     * Example usage:
     * <code>
     * $query->filterBySimilarspec1remarks('fooValue');   // WHERE SimilarSpec1Remarks = 'fooValue'
     * $query->filterBySimilarspec1remarks('%fooValue%'); // WHERE SimilarSpec1Remarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $similarspec1remarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterBySimilarspec1remarks($similarspec1remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($similarspec1remarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $similarspec1remarks)) {
                $similarspec1remarks = str_replace('*', '%', $similarspec1remarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::SIMILARSPEC1REMARKS, $similarspec1remarks, $comparison);
    }

    /**
     * Filter the query on the SimilarSpecies2 column
     *
     * Example usage:
     * <code>
     * $query->filterBySimilarspecies2(1234); // WHERE SimilarSpecies2 = 1234
     * $query->filterBySimilarspecies2(array(12, 34)); // WHERE SimilarSpecies2 IN (12, 34)
     * $query->filterBySimilarspecies2(array('min' => 12)); // WHERE SimilarSpecies2 >= 12
     * $query->filterBySimilarspecies2(array('max' => 12)); // WHERE SimilarSpecies2 <= 12
     * </code>
     *
     * @param     mixed $similarspecies2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterBySimilarspecies2($similarspecies2 = null, $comparison = null)
    {
        if (is_array($similarspecies2)) {
            $useMinMax = false;
            if (isset($similarspecies2['min'])) {
                $this->addUsingAlias(LarvaePeer::SIMILARSPECIES2, $similarspecies2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($similarspecies2['max'])) {
                $this->addUsingAlias(LarvaePeer::SIMILARSPECIES2, $similarspecies2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::SIMILARSPECIES2, $similarspecies2, $comparison);
    }

    /**
     * Filter the query on the SimilarSpec2Remarks column
     *
     * Example usage:
     * <code>
     * $query->filterBySimilarspec2remarks('fooValue');   // WHERE SimilarSpec2Remarks = 'fooValue'
     * $query->filterBySimilarspec2remarks('%fooValue%'); // WHERE SimilarSpec2Remarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $similarspec2remarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterBySimilarspec2remarks($similarspec2remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($similarspec2remarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $similarspec2remarks)) {
                $similarspec2remarks = str_replace('*', '%', $similarspec2remarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvaePeer::SIMILARSPEC2REMARKS, $similarspec2remarks, $comparison);
    }

    /**
     * Filter the query on the Entered column
     *
     * Example usage:
     * <code>
     * $query->filterByEntered(1234); // WHERE Entered = 1234
     * $query->filterByEntered(array(12, 34)); // WHERE Entered IN (12, 34)
     * $query->filterByEntered(array('min' => 12)); // WHERE Entered >= 12
     * $query->filterByEntered(array('max' => 12)); // WHERE Entered <= 12
     * </code>
     *
     * @param     mixed $entered The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(LarvaePeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(LarvaePeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the DateEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('2011-03-14'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered('now'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered(array('max' => 'yesterday')); // WHERE DateEntered < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateentered The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(LarvaePeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(LarvaePeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DATEENTERED, $dateentered, $comparison);
    }

    /**
     * Filter the query on the Modified column
     *
     * Example usage:
     * <code>
     * $query->filterByModified(1234); // WHERE Modified = 1234
     * $query->filterByModified(array(12, 34)); // WHERE Modified IN (12, 34)
     * $query->filterByModified(array('min' => 12)); // WHERE Modified >= 12
     * $query->filterByModified(array('max' => 12)); // WHERE Modified <= 12
     * </code>
     *
     * @param     mixed $modified The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(LarvaePeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(LarvaePeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the DateModified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('2011-03-14'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified('now'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified(array('max' => 'yesterday')); // WHERE DateModified < '2011-03-13'
     * </code>
     *
     * @param     mixed $datemodified The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(LarvaePeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(LarvaePeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the Expert column
     *
     * Example usage:
     * <code>
     * $query->filterByExpert(1234); // WHERE Expert = 1234
     * $query->filterByExpert(array(12, 34)); // WHERE Expert IN (12, 34)
     * $query->filterByExpert(array('min' => 12)); // WHERE Expert >= 12
     * $query->filterByExpert(array('max' => 12)); // WHERE Expert <= 12
     * </code>
     *
     * @param     mixed $expert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(LarvaePeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(LarvaePeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the DateChecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('2011-03-14'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked('now'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked(array('max' => 'yesterday')); // WHERE DateChecked < '2011-03-13'
     * </code>
     *
     * @param     mixed $datechecked The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(LarvaePeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(LarvaePeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the TS column
     *
     * Example usage:
     * <code>
     * $query->filterByTs('2011-03-14'); // WHERE TS = '2011-03-14'
     * $query->filterByTs('now'); // WHERE TS = '2011-03-14'
     * $query->filterByTs(array('max' => 'yesterday')); // WHERE TS < '2011-03-13'
     * </code>
     *
     * @param     mixed $ts The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(LarvaePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(LarvaePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvaePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Larvae $larvae Object to remove from the list of results
     *
     * @return LarvaeQuery The current query, for fluid interface
     */
    public function prune($larvae = null)
    {
        if ($larvae) {
            $this->addCond('pruneCond0', $this->getAliasedColName(LarvaePeer::STOCKCODE), $larvae->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(LarvaePeer::LARVALAREA), $larvae->getLarvalarea(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
