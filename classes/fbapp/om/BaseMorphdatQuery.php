<?php


/**
 * Base class that represents a query for the 'morphdat' table.
 *
 *
 *
 * @method MorphdatQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method MorphdatQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method MorphdatQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method MorphdatQuery orderByMorphdatrefno($order = Criteria::ASC) Order by the MorphDatRefNo column
 * @method MorphdatQuery orderByFemales($order = Criteria::ASC) Order by the Females column
 * @method MorphdatQuery orderByMales($order = Criteria::ASC) Order by the Males column
 * @method MorphdatQuery orderByAppearancepic($order = Criteria::ASC) Order by the AppearancePic column
 * @method MorphdatQuery orderBySexualattributes($order = Criteria::ASC) Order by the SexualAttributes column
 * @method MorphdatQuery orderBySexmorphology($order = Criteria::ASC) Order by the SexMorphology column
 * @method MorphdatQuery orderBySexcolors($order = Criteria::ASC) Order by the SexColors column
 * @method MorphdatQuery orderByStrikingfeatures($order = Criteria::ASC) Order by the StrikingFeatures column
 * @method MorphdatQuery orderByBodyshapei($order = Criteria::ASC) Order by the BodyShapeI column
 * @method MorphdatQuery orderByBodyshapeii($order = Criteria::ASC) Order by the BodyShapeII column
 * @method MorphdatQuery orderByForehead($order = Criteria::ASC) Order by the Forehead column
 * @method MorphdatQuery orderByOperculumpresent($order = Criteria::ASC) Order by the OperculumPresent column
 * @method MorphdatQuery orderByTypeofeyes($order = Criteria::ASC) Order by the TypeofEyes column
 * @method MorphdatQuery orderByTypeofmouth($order = Criteria::ASC) Order by the TypeofMouth column
 * @method MorphdatQuery orderByPosofmouth($order = Criteria::ASC) Order by the PosofMouth column
 * @method MorphdatQuery orderByMandibleteeth($order = Criteria::ASC) Order by the MandibleTeeth column
 * @method MorphdatQuery orderByMandibleteetht1($order = Criteria::ASC) Order by the MandibleTeethT1 column
 * @method MorphdatQuery orderByMandibleteetht2($order = Criteria::ASC) Order by the MandibleTeethT2 column
 * @method MorphdatQuery orderByMandiblerowsmin($order = Criteria::ASC) Order by the MandibleRowsMin column
 * @method MorphdatQuery orderByMandiblerowsmax($order = Criteria::ASC) Order by the MandibleRowsMax column
 * @method MorphdatQuery orderByMaxillateeth($order = Criteria::ASC) Order by the MaxillaTeeth column
 * @method MorphdatQuery orderByMaxillateetht1($order = Criteria::ASC) Order by the MaxillaTeethT1 column
 * @method MorphdatQuery orderByMaxillateetht2($order = Criteria::ASC) Order by the MaxillaTeethT2 column
 * @method MorphdatQuery orderByMaxillarowsmin($order = Criteria::ASC) Order by the MaxillaRowsMin column
 * @method MorphdatQuery orderByMaxillarowsmax($order = Criteria::ASC) Order by the MaxillaRowsMax column
 * @method MorphdatQuery orderByVomerineteeth($order = Criteria::ASC) Order by the VomerineTeeth column
 * @method MorphdatQuery orderByVomerineteetht1($order = Criteria::ASC) Order by the VomerineTeethT1 column
 * @method MorphdatQuery orderByVomerineteetht2($order = Criteria::ASC) Order by the VomerineTeethT2 column
 * @method MorphdatQuery orderByVomerinerowsmin($order = Criteria::ASC) Order by the VomerineRowsMin column
 * @method MorphdatQuery orderByVomerinerowsmax($order = Criteria::ASC) Order by the VomerineRowsMax column
 * @method MorphdatQuery orderByPalatine($order = Criteria::ASC) Order by the Palatine column
 * @method MorphdatQuery orderByPalatineteetht1($order = Criteria::ASC) Order by the PalatineTeethT1 column
 * @method MorphdatQuery orderByPalatineteetht2($order = Criteria::ASC) Order by the PalatineTeethT2 column
 * @method MorphdatQuery orderByPalatinerowsmin($order = Criteria::ASC) Order by the PalatineRowsMin column
 * @method MorphdatQuery orderByPalatinerowsmax($order = Criteria::ASC) Order by the PalatineRowsMax column
 * @method MorphdatQuery orderByPharyngealteeth($order = Criteria::ASC) Order by the PharyngealTeeth column
 * @method MorphdatQuery orderByPharyngealteetht1($order = Criteria::ASC) Order by the PharyngealTeethT1 column
 * @method MorphdatQuery orderByPharyngealteetht2($order = Criteria::ASC) Order by the PharyngealTeethT2 column
 * @method MorphdatQuery orderByPharyngealrowsmin($order = Criteria::ASC) Order by the PharyngealRowsMin column
 * @method MorphdatQuery orderByPharyngealrowsmax($order = Criteria::ASC) Order by the PharyngealRowsMax column
 * @method MorphdatQuery orderByTeethontongue($order = Criteria::ASC) Order by the TeethonTongue column
 * @method MorphdatQuery orderByLipsteeth($order = Criteria::ASC) Order by the Lipsteeth column
 * @method MorphdatQuery orderByDermalteeth($order = Criteria::ASC) Order by the DermalTeeth column
 * @method MorphdatQuery orderByCommentonteeth($order = Criteria::ASC) Order by the CommentonTeeth column
 * @method MorphdatQuery orderByTypeofscales($order = Criteria::ASC) Order by the TypeofScales column
 * @method MorphdatQuery orderByScutes($order = Criteria::ASC) Order by the Scutes column
 * @method MorphdatQuery orderByKeels($order = Criteria::ASC) Order by the Keels column
 * @method MorphdatQuery orderByHorstripestti($order = Criteria::ASC) Order by the HorStripesTTI column
 * @method MorphdatQuery orderByHorstripesttii($order = Criteria::ASC) Order by the HorStripesTTII column
 * @method MorphdatQuery orderByVerstripestti($order = Criteria::ASC) Order by the VerStripesTTI column
 * @method MorphdatQuery orderByVerstripesttii($order = Criteria::ASC) Order by the VerStripesTTII column
 * @method MorphdatQuery orderByVerstripesttiii($order = Criteria::ASC) Order by the VerStripesTTIII column
 * @method MorphdatQuery orderByDiastripestti($order = Criteria::ASC) Order by the DiaStripesTTI column
 * @method MorphdatQuery orderByDiastripesttii($order = Criteria::ASC) Order by the DiaStripesTTII column
 * @method MorphdatQuery orderByDiastripesttiii($order = Criteria::ASC) Order by the DiaStripesTTIII column
 * @method MorphdatQuery orderByCurstripestti($order = Criteria::ASC) Order by the CurStripesTTI column
 * @method MorphdatQuery orderByCurstripesttii($order = Criteria::ASC) Order by the CurStripesTTII column
 * @method MorphdatQuery orderByCurstripesttiii($order = Criteria::ASC) Order by the CurStripesTTIII column
 * @method MorphdatQuery orderBySpotstti($order = Criteria::ASC) Order by the SpotsTTI column
 * @method MorphdatQuery orderBySpotsttii($order = Criteria::ASC) Order by the SpotsTTII column
 * @method MorphdatQuery orderBySpotsttiii($order = Criteria::ASC) Order by the SpotsTTIII column
 * @method MorphdatQuery orderByDorsalfini($order = Criteria::ASC) Order by the DorsalFinI column
 * @method MorphdatQuery orderByDorsalfinii($order = Criteria::ASC) Order by the DorsalFinII column
 * @method MorphdatQuery orderByCaudalfini($order = Criteria::ASC) Order by the CaudalFinI column
 * @method MorphdatQuery orderByCaudalfinii($order = Criteria::ASC) Order by the CaudalFinII column
 * @method MorphdatQuery orderByAnalfini($order = Criteria::ASC) Order by the AnalFinI column
 * @method MorphdatQuery orderByAnalfinii($order = Criteria::ASC) Order by the AnalFinII column
 * @method MorphdatQuery orderByLaterallinesno($order = Criteria::ASC) Order by the LateralLinesNo column
 * @method MorphdatQuery orderByLlinterrupted($order = Criteria::ASC) Order by the LLinterrupted column
 * @method MorphdatQuery orderByScaleslateralmin($order = Criteria::ASC) Order by the ScalesLateralmin column
 * @method MorphdatQuery orderByScaleslateralmax($order = Criteria::ASC) Order by the ScalesLateralmax column
 * @method MorphdatQuery orderByPoredscalesmin($order = Criteria::ASC) Order by the PoredScalesMin column
 * @method MorphdatQuery orderByPoredscalesmax($order = Criteria::ASC) Order by the PoredScalesMax column
 * @method MorphdatQuery orderByLatseriesmin($order = Criteria::ASC) Order by the LatSeriesMin column
 * @method MorphdatQuery orderByLatseriesmax($order = Criteria::ASC) Order by the LatSeriesMax column
 * @method MorphdatQuery orderByScalerowsabovemin($order = Criteria::ASC) Order by the ScaleRowsAboveMin column
 * @method MorphdatQuery orderByScalerowsabovemax($order = Criteria::ASC) Order by the ScaleRowsAboveMax column
 * @method MorphdatQuery orderByScalerowsbelowmin($order = Criteria::ASC) Order by the ScaleRowsBelowMin column
 * @method MorphdatQuery orderByScalerowsbelowmax($order = Criteria::ASC) Order by the ScaleRowsBelowMax column
 * @method MorphdatQuery orderByScalespeduncmin($order = Criteria::ASC) Order by the ScalesPeduncMin column
 * @method MorphdatQuery orderByScalespeduncmax($order = Criteria::ASC) Order by the ScalesPeduncMax column
 * @method MorphdatQuery orderByBarbelsno($order = Criteria::ASC) Order by the BarbelsNo column
 * @method MorphdatQuery orderByBarbelstype($order = Criteria::ASC) Order by the BarbelsType column
 * @method MorphdatQuery orderByGillcleftsno($order = Criteria::ASC) Order by the GillCleftsNo column
 * @method MorphdatQuery orderBySpiracle($order = Criteria::ASC) Order by the Spiracle column
 * @method MorphdatQuery orderByGillrakerslowmin($order = Criteria::ASC) Order by the GillRakersLowMin column
 * @method MorphdatQuery orderByGillrakerslowmax($order = Criteria::ASC) Order by the GillRakersLowMax column
 * @method MorphdatQuery orderByGillrakersupmin($order = Criteria::ASC) Order by the GillRakersUpMin column
 * @method MorphdatQuery orderByGillrakersupmax($order = Criteria::ASC) Order by the GillRakersUpMax column
 * @method MorphdatQuery orderByGillrakerstotalmin($order = Criteria::ASC) Order by the GillRakersTotalMin column
 * @method MorphdatQuery orderByGillrakerstotalmax($order = Criteria::ASC) Order by the GillRakersTotalMax column
 * @method MorphdatQuery orderByVertebrae($order = Criteria::ASC) Order by the Vertebrae column
 * @method MorphdatQuery orderByVertebraepreanmin($order = Criteria::ASC) Order by the VertebraePreanMin column
 * @method MorphdatQuery orderByVertebraepreanmax($order = Criteria::ASC) Order by the VertebraePreanMax column
 * @method MorphdatQuery orderByVertebraetotalmin($order = Criteria::ASC) Order by the VertebraeTotalMin column
 * @method MorphdatQuery orderByVertebraetotalmax($order = Criteria::ASC) Order by the VertebraeTotalMax column
 * @method MorphdatQuery orderByDorsalattributes($order = Criteria::ASC) Order by the DorsalAttributes column
 * @method MorphdatQuery orderByDfinno($order = Criteria::ASC) Order by the Dfinno column
 * @method MorphdatQuery orderByDorsalspinesmin($order = Criteria::ASC) Order by the DorsalSpinesMin column
 * @method MorphdatQuery orderByDorsalspinesmax($order = Criteria::ASC) Order by the DorsalSpinesMax column
 * @method MorphdatQuery orderByNotched($order = Criteria::ASC) Order by the Notched column
 * @method MorphdatQuery orderByDorsalsoftraysmin($order = Criteria::ASC) Order by the DorsalSoftRaysMin column
 * @method MorphdatQuery orderByDorsalsoftraysmax($order = Criteria::ASC) Order by the DorsalSoftRaysMax column
 * @method MorphdatQuery orderByAdifin($order = Criteria::ASC) Order by the Adifin column
 * @method MorphdatQuery orderByDfinletsmin($order = Criteria::ASC) Order by the DFinletsmin column
 * @method MorphdatQuery orderByDfinletsmax($order = Criteria::ASC) Order by the DFinletsmax column
 * @method MorphdatQuery orderByVfinletsmin($order = Criteria::ASC) Order by the VFinletsmin column
 * @method MorphdatQuery orderByVfinletsmax($order = Criteria::ASC) Order by the VFinletsmax column
 * @method MorphdatQuery orderByCshape($order = Criteria::ASC) Order by the CShape column
 * @method MorphdatQuery orderByAttributes($order = Criteria::ASC) Order by the Attributes column
 * @method MorphdatQuery orderByAfinno($order = Criteria::ASC) Order by the Afinno column
 * @method MorphdatQuery orderByAnalfinspinesmin($order = Criteria::ASC) Order by the AnalFinSpinesMin column
 * @method MorphdatQuery orderByAnalfinspinesmax($order = Criteria::ASC) Order by the AnalFinSpinesMax column
 * @method MorphdatQuery orderByAraymin($order = Criteria::ASC) Order by the Araymin column
 * @method MorphdatQuery orderByAraymax($order = Criteria::ASC) Order by the Araymax column
 * @method MorphdatQuery orderByPectoralattributes($order = Criteria::ASC) Order by the PectoralAttributes column
 * @method MorphdatQuery orderByPspines2($order = Criteria::ASC) Order by the Pspines2 column
 * @method MorphdatQuery orderByPraymin($order = Criteria::ASC) Order by the Praymin column
 * @method MorphdatQuery orderByPraymax($order = Criteria::ASC) Order by the Praymax column
 * @method MorphdatQuery orderByPelvicsattributes($order = Criteria::ASC) Order by the PelvicsAttributes column
 * @method MorphdatQuery orderByVposition($order = Criteria::ASC) Order by the VPosition column
 * @method MorphdatQuery orderByVposition2($order = Criteria::ASC) Order by the VPosition2 column
 * @method MorphdatQuery orderByVspines($order = Criteria::ASC) Order by the Vspines column
 * @method MorphdatQuery orderByVraymin($order = Criteria::ASC) Order by the Vraymin column
 * @method MorphdatQuery orderByVraymax($order = Criteria::ASC) Order by the Vraymax column
 * @method MorphdatQuery orderByStandardlengthcm($order = Criteria::ASC) Order by the StandardLengthCm column
 * @method MorphdatQuery orderByForklength($order = Criteria::ASC) Order by the Forklength column
 * @method MorphdatQuery orderByTotallength($order = Criteria::ASC) Order by the Totallength column
 * @method MorphdatQuery orderByHeadlength($order = Criteria::ASC) Order by the HeadLength column
 * @method MorphdatQuery orderByPredorsallength($order = Criteria::ASC) Order by the PreDorsalLength column
 * @method MorphdatQuery orderByPrepelvicslength($order = Criteria::ASC) Order by the PrePelvicsLength column
 * @method MorphdatQuery orderByPreanallength($order = Criteria::ASC) Order by the PreAnalLength column
 * @method MorphdatQuery orderByPostheaddepth($order = Criteria::ASC) Order by the PostHeadDepth column
 * @method MorphdatQuery orderByPosttrunkdepth($order = Criteria::ASC) Order by the PostTrunkDepth column
 * @method MorphdatQuery orderByMaximumdepth($order = Criteria::ASC) Order by the MaximumDepth column
 * @method MorphdatQuery orderByPeduncledepth($order = Criteria::ASC) Order by the PeduncleDepth column
 * @method MorphdatQuery orderByPedunclelength($order = Criteria::ASC) Order by the PeduncleLength column
 * @method MorphdatQuery orderByCaudalheight($order = Criteria::ASC) Order by the CaudalHeight column
 * @method MorphdatQuery orderByPreorbitallength($order = Criteria::ASC) Order by the PreorbitalLength column
 * @method MorphdatQuery orderByEyelength($order = Criteria::ASC) Order by the EyeLength column
 * @method MorphdatQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method MorphdatQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method MorphdatQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method MorphdatQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method MorphdatQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method MorphdatQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method MorphdatQuery orderByRemarksex($order = Criteria::ASC) Order by the RemarkSex column
 * @method MorphdatQuery orderByAddchars($order = Criteria::ASC) Order by the AddChars column
 * @method MorphdatQuery orderBySimilarspecies1($order = Criteria::ASC) Order by the SimilarSpecies1 column
 * @method MorphdatQuery orderBySimilarspec1remarks($order = Criteria::ASC) Order by the SimilarSpec1Remarks column
 * @method MorphdatQuery orderBySimilarspecies2($order = Criteria::ASC) Order by the SimilarSpecies2 column
 * @method MorphdatQuery orderBySimilarspec2remarks($order = Criteria::ASC) Order by the SimilarSpec2Remarks column
 * @method MorphdatQuery orderByEaseofid($order = Criteria::ASC) Order by the EaseofID column
 * @method MorphdatQuery orderByOtherref1($order = Criteria::ASC) Order by the OtherRef1 column
 * @method MorphdatQuery orderByOtherref2($order = Criteria::ASC) Order by the OtherRef2 column
 * @method MorphdatQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method MorphdatQuery groupByAutoctr() Group by the autoctr column
 * @method MorphdatQuery groupBySpeccode() Group by the Speccode column
 * @method MorphdatQuery groupByStockcode() Group by the StockCode column
 * @method MorphdatQuery groupByMorphdatrefno() Group by the MorphDatRefNo column
 * @method MorphdatQuery groupByFemales() Group by the Females column
 * @method MorphdatQuery groupByMales() Group by the Males column
 * @method MorphdatQuery groupByAppearancepic() Group by the AppearancePic column
 * @method MorphdatQuery groupBySexualattributes() Group by the SexualAttributes column
 * @method MorphdatQuery groupBySexmorphology() Group by the SexMorphology column
 * @method MorphdatQuery groupBySexcolors() Group by the SexColors column
 * @method MorphdatQuery groupByStrikingfeatures() Group by the StrikingFeatures column
 * @method MorphdatQuery groupByBodyshapei() Group by the BodyShapeI column
 * @method MorphdatQuery groupByBodyshapeii() Group by the BodyShapeII column
 * @method MorphdatQuery groupByForehead() Group by the Forehead column
 * @method MorphdatQuery groupByOperculumpresent() Group by the OperculumPresent column
 * @method MorphdatQuery groupByTypeofeyes() Group by the TypeofEyes column
 * @method MorphdatQuery groupByTypeofmouth() Group by the TypeofMouth column
 * @method MorphdatQuery groupByPosofmouth() Group by the PosofMouth column
 * @method MorphdatQuery groupByMandibleteeth() Group by the MandibleTeeth column
 * @method MorphdatQuery groupByMandibleteetht1() Group by the MandibleTeethT1 column
 * @method MorphdatQuery groupByMandibleteetht2() Group by the MandibleTeethT2 column
 * @method MorphdatQuery groupByMandiblerowsmin() Group by the MandibleRowsMin column
 * @method MorphdatQuery groupByMandiblerowsmax() Group by the MandibleRowsMax column
 * @method MorphdatQuery groupByMaxillateeth() Group by the MaxillaTeeth column
 * @method MorphdatQuery groupByMaxillateetht1() Group by the MaxillaTeethT1 column
 * @method MorphdatQuery groupByMaxillateetht2() Group by the MaxillaTeethT2 column
 * @method MorphdatQuery groupByMaxillarowsmin() Group by the MaxillaRowsMin column
 * @method MorphdatQuery groupByMaxillarowsmax() Group by the MaxillaRowsMax column
 * @method MorphdatQuery groupByVomerineteeth() Group by the VomerineTeeth column
 * @method MorphdatQuery groupByVomerineteetht1() Group by the VomerineTeethT1 column
 * @method MorphdatQuery groupByVomerineteetht2() Group by the VomerineTeethT2 column
 * @method MorphdatQuery groupByVomerinerowsmin() Group by the VomerineRowsMin column
 * @method MorphdatQuery groupByVomerinerowsmax() Group by the VomerineRowsMax column
 * @method MorphdatQuery groupByPalatine() Group by the Palatine column
 * @method MorphdatQuery groupByPalatineteetht1() Group by the PalatineTeethT1 column
 * @method MorphdatQuery groupByPalatineteetht2() Group by the PalatineTeethT2 column
 * @method MorphdatQuery groupByPalatinerowsmin() Group by the PalatineRowsMin column
 * @method MorphdatQuery groupByPalatinerowsmax() Group by the PalatineRowsMax column
 * @method MorphdatQuery groupByPharyngealteeth() Group by the PharyngealTeeth column
 * @method MorphdatQuery groupByPharyngealteetht1() Group by the PharyngealTeethT1 column
 * @method MorphdatQuery groupByPharyngealteetht2() Group by the PharyngealTeethT2 column
 * @method MorphdatQuery groupByPharyngealrowsmin() Group by the PharyngealRowsMin column
 * @method MorphdatQuery groupByPharyngealrowsmax() Group by the PharyngealRowsMax column
 * @method MorphdatQuery groupByTeethontongue() Group by the TeethonTongue column
 * @method MorphdatQuery groupByLipsteeth() Group by the Lipsteeth column
 * @method MorphdatQuery groupByDermalteeth() Group by the DermalTeeth column
 * @method MorphdatQuery groupByCommentonteeth() Group by the CommentonTeeth column
 * @method MorphdatQuery groupByTypeofscales() Group by the TypeofScales column
 * @method MorphdatQuery groupByScutes() Group by the Scutes column
 * @method MorphdatQuery groupByKeels() Group by the Keels column
 * @method MorphdatQuery groupByHorstripestti() Group by the HorStripesTTI column
 * @method MorphdatQuery groupByHorstripesttii() Group by the HorStripesTTII column
 * @method MorphdatQuery groupByVerstripestti() Group by the VerStripesTTI column
 * @method MorphdatQuery groupByVerstripesttii() Group by the VerStripesTTII column
 * @method MorphdatQuery groupByVerstripesttiii() Group by the VerStripesTTIII column
 * @method MorphdatQuery groupByDiastripestti() Group by the DiaStripesTTI column
 * @method MorphdatQuery groupByDiastripesttii() Group by the DiaStripesTTII column
 * @method MorphdatQuery groupByDiastripesttiii() Group by the DiaStripesTTIII column
 * @method MorphdatQuery groupByCurstripestti() Group by the CurStripesTTI column
 * @method MorphdatQuery groupByCurstripesttii() Group by the CurStripesTTII column
 * @method MorphdatQuery groupByCurstripesttiii() Group by the CurStripesTTIII column
 * @method MorphdatQuery groupBySpotstti() Group by the SpotsTTI column
 * @method MorphdatQuery groupBySpotsttii() Group by the SpotsTTII column
 * @method MorphdatQuery groupBySpotsttiii() Group by the SpotsTTIII column
 * @method MorphdatQuery groupByDorsalfini() Group by the DorsalFinI column
 * @method MorphdatQuery groupByDorsalfinii() Group by the DorsalFinII column
 * @method MorphdatQuery groupByCaudalfini() Group by the CaudalFinI column
 * @method MorphdatQuery groupByCaudalfinii() Group by the CaudalFinII column
 * @method MorphdatQuery groupByAnalfini() Group by the AnalFinI column
 * @method MorphdatQuery groupByAnalfinii() Group by the AnalFinII column
 * @method MorphdatQuery groupByLaterallinesno() Group by the LateralLinesNo column
 * @method MorphdatQuery groupByLlinterrupted() Group by the LLinterrupted column
 * @method MorphdatQuery groupByScaleslateralmin() Group by the ScalesLateralmin column
 * @method MorphdatQuery groupByScaleslateralmax() Group by the ScalesLateralmax column
 * @method MorphdatQuery groupByPoredscalesmin() Group by the PoredScalesMin column
 * @method MorphdatQuery groupByPoredscalesmax() Group by the PoredScalesMax column
 * @method MorphdatQuery groupByLatseriesmin() Group by the LatSeriesMin column
 * @method MorphdatQuery groupByLatseriesmax() Group by the LatSeriesMax column
 * @method MorphdatQuery groupByScalerowsabovemin() Group by the ScaleRowsAboveMin column
 * @method MorphdatQuery groupByScalerowsabovemax() Group by the ScaleRowsAboveMax column
 * @method MorphdatQuery groupByScalerowsbelowmin() Group by the ScaleRowsBelowMin column
 * @method MorphdatQuery groupByScalerowsbelowmax() Group by the ScaleRowsBelowMax column
 * @method MorphdatQuery groupByScalespeduncmin() Group by the ScalesPeduncMin column
 * @method MorphdatQuery groupByScalespeduncmax() Group by the ScalesPeduncMax column
 * @method MorphdatQuery groupByBarbelsno() Group by the BarbelsNo column
 * @method MorphdatQuery groupByBarbelstype() Group by the BarbelsType column
 * @method MorphdatQuery groupByGillcleftsno() Group by the GillCleftsNo column
 * @method MorphdatQuery groupBySpiracle() Group by the Spiracle column
 * @method MorphdatQuery groupByGillrakerslowmin() Group by the GillRakersLowMin column
 * @method MorphdatQuery groupByGillrakerslowmax() Group by the GillRakersLowMax column
 * @method MorphdatQuery groupByGillrakersupmin() Group by the GillRakersUpMin column
 * @method MorphdatQuery groupByGillrakersupmax() Group by the GillRakersUpMax column
 * @method MorphdatQuery groupByGillrakerstotalmin() Group by the GillRakersTotalMin column
 * @method MorphdatQuery groupByGillrakerstotalmax() Group by the GillRakersTotalMax column
 * @method MorphdatQuery groupByVertebrae() Group by the Vertebrae column
 * @method MorphdatQuery groupByVertebraepreanmin() Group by the VertebraePreanMin column
 * @method MorphdatQuery groupByVertebraepreanmax() Group by the VertebraePreanMax column
 * @method MorphdatQuery groupByVertebraetotalmin() Group by the VertebraeTotalMin column
 * @method MorphdatQuery groupByVertebraetotalmax() Group by the VertebraeTotalMax column
 * @method MorphdatQuery groupByDorsalattributes() Group by the DorsalAttributes column
 * @method MorphdatQuery groupByDfinno() Group by the Dfinno column
 * @method MorphdatQuery groupByDorsalspinesmin() Group by the DorsalSpinesMin column
 * @method MorphdatQuery groupByDorsalspinesmax() Group by the DorsalSpinesMax column
 * @method MorphdatQuery groupByNotched() Group by the Notched column
 * @method MorphdatQuery groupByDorsalsoftraysmin() Group by the DorsalSoftRaysMin column
 * @method MorphdatQuery groupByDorsalsoftraysmax() Group by the DorsalSoftRaysMax column
 * @method MorphdatQuery groupByAdifin() Group by the Adifin column
 * @method MorphdatQuery groupByDfinletsmin() Group by the DFinletsmin column
 * @method MorphdatQuery groupByDfinletsmax() Group by the DFinletsmax column
 * @method MorphdatQuery groupByVfinletsmin() Group by the VFinletsmin column
 * @method MorphdatQuery groupByVfinletsmax() Group by the VFinletsmax column
 * @method MorphdatQuery groupByCshape() Group by the CShape column
 * @method MorphdatQuery groupByAttributes() Group by the Attributes column
 * @method MorphdatQuery groupByAfinno() Group by the Afinno column
 * @method MorphdatQuery groupByAnalfinspinesmin() Group by the AnalFinSpinesMin column
 * @method MorphdatQuery groupByAnalfinspinesmax() Group by the AnalFinSpinesMax column
 * @method MorphdatQuery groupByAraymin() Group by the Araymin column
 * @method MorphdatQuery groupByAraymax() Group by the Araymax column
 * @method MorphdatQuery groupByPectoralattributes() Group by the PectoralAttributes column
 * @method MorphdatQuery groupByPspines2() Group by the Pspines2 column
 * @method MorphdatQuery groupByPraymin() Group by the Praymin column
 * @method MorphdatQuery groupByPraymax() Group by the Praymax column
 * @method MorphdatQuery groupByPelvicsattributes() Group by the PelvicsAttributes column
 * @method MorphdatQuery groupByVposition() Group by the VPosition column
 * @method MorphdatQuery groupByVposition2() Group by the VPosition2 column
 * @method MorphdatQuery groupByVspines() Group by the Vspines column
 * @method MorphdatQuery groupByVraymin() Group by the Vraymin column
 * @method MorphdatQuery groupByVraymax() Group by the Vraymax column
 * @method MorphdatQuery groupByStandardlengthcm() Group by the StandardLengthCm column
 * @method MorphdatQuery groupByForklength() Group by the Forklength column
 * @method MorphdatQuery groupByTotallength() Group by the Totallength column
 * @method MorphdatQuery groupByHeadlength() Group by the HeadLength column
 * @method MorphdatQuery groupByPredorsallength() Group by the PreDorsalLength column
 * @method MorphdatQuery groupByPrepelvicslength() Group by the PrePelvicsLength column
 * @method MorphdatQuery groupByPreanallength() Group by the PreAnalLength column
 * @method MorphdatQuery groupByPostheaddepth() Group by the PostHeadDepth column
 * @method MorphdatQuery groupByPosttrunkdepth() Group by the PostTrunkDepth column
 * @method MorphdatQuery groupByMaximumdepth() Group by the MaximumDepth column
 * @method MorphdatQuery groupByPeduncledepth() Group by the PeduncleDepth column
 * @method MorphdatQuery groupByPedunclelength() Group by the PeduncleLength column
 * @method MorphdatQuery groupByCaudalheight() Group by the CaudalHeight column
 * @method MorphdatQuery groupByPreorbitallength() Group by the PreorbitalLength column
 * @method MorphdatQuery groupByEyelength() Group by the EyeLength column
 * @method MorphdatQuery groupByEntered() Group by the Entered column
 * @method MorphdatQuery groupByDateentered() Group by the DateEntered column
 * @method MorphdatQuery groupByModified() Group by the Modified column
 * @method MorphdatQuery groupByDatemodified() Group by the DateModified column
 * @method MorphdatQuery groupByExpert() Group by the Expert column
 * @method MorphdatQuery groupByDatechecked() Group by the DateChecked column
 * @method MorphdatQuery groupByRemarksex() Group by the RemarkSex column
 * @method MorphdatQuery groupByAddchars() Group by the AddChars column
 * @method MorphdatQuery groupBySimilarspecies1() Group by the SimilarSpecies1 column
 * @method MorphdatQuery groupBySimilarspec1remarks() Group by the SimilarSpec1Remarks column
 * @method MorphdatQuery groupBySimilarspecies2() Group by the SimilarSpecies2 column
 * @method MorphdatQuery groupBySimilarspec2remarks() Group by the SimilarSpec2Remarks column
 * @method MorphdatQuery groupByEaseofid() Group by the EaseofID column
 * @method MorphdatQuery groupByOtherref1() Group by the OtherRef1 column
 * @method MorphdatQuery groupByOtherref2() Group by the OtherRef2 column
 * @method MorphdatQuery groupByTs() Group by the TS column
 *
 * @method MorphdatQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MorphdatQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MorphdatQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Morphdat findOne(PropelPDO $con = null) Return the first Morphdat matching the query
 * @method Morphdat findOneOrCreate(PropelPDO $con = null) Return the first Morphdat matching the query, or a new Morphdat object populated from the query conditions when no match is found
 *
 * @method Morphdat findOneByAutoctr(int $autoctr) Return the first Morphdat filtered by the autoctr column
 * @method Morphdat findOneBySpeccode(int $Speccode) Return the first Morphdat filtered by the Speccode column
 * @method Morphdat findOneByMorphdatrefno(int $MorphDatRefNo) Return the first Morphdat filtered by the MorphDatRefNo column
 * @method Morphdat findOneByFemales(int $Females) Return the first Morphdat filtered by the Females column
 * @method Morphdat findOneByMales(int $Males) Return the first Morphdat filtered by the Males column
 * @method Morphdat findOneByAppearancepic(string $AppearancePic) Return the first Morphdat filtered by the AppearancePic column
 * @method Morphdat findOneBySexualattributes(string $SexualAttributes) Return the first Morphdat filtered by the SexualAttributes column
 * @method Morphdat findOneBySexmorphology(string $SexMorphology) Return the first Morphdat filtered by the SexMorphology column
 * @method Morphdat findOneBySexcolors(string $SexColors) Return the first Morphdat filtered by the SexColors column
 * @method Morphdat findOneByStrikingfeatures(string $StrikingFeatures) Return the first Morphdat filtered by the StrikingFeatures column
 * @method Morphdat findOneByBodyshapei(string $BodyShapeI) Return the first Morphdat filtered by the BodyShapeI column
 * @method Morphdat findOneByBodyshapeii(string $BodyShapeII) Return the first Morphdat filtered by the BodyShapeII column
 * @method Morphdat findOneByForehead(string $Forehead) Return the first Morphdat filtered by the Forehead column
 * @method Morphdat findOneByOperculumpresent(int $OperculumPresent) Return the first Morphdat filtered by the OperculumPresent column
 * @method Morphdat findOneByTypeofeyes(string $TypeofEyes) Return the first Morphdat filtered by the TypeofEyes column
 * @method Morphdat findOneByTypeofmouth(string $TypeofMouth) Return the first Morphdat filtered by the TypeofMouth column
 * @method Morphdat findOneByPosofmouth(string $PosofMouth) Return the first Morphdat filtered by the PosofMouth column
 * @method Morphdat findOneByMandibleteeth(string $MandibleTeeth) Return the first Morphdat filtered by the MandibleTeeth column
 * @method Morphdat findOneByMandibleteetht1(string $MandibleTeethT1) Return the first Morphdat filtered by the MandibleTeethT1 column
 * @method Morphdat findOneByMandibleteetht2(string $MandibleTeethT2) Return the first Morphdat filtered by the MandibleTeethT2 column
 * @method Morphdat findOneByMandiblerowsmin(int $MandibleRowsMin) Return the first Morphdat filtered by the MandibleRowsMin column
 * @method Morphdat findOneByMandiblerowsmax(int $MandibleRowsMax) Return the first Morphdat filtered by the MandibleRowsMax column
 * @method Morphdat findOneByMaxillateeth(string $MaxillaTeeth) Return the first Morphdat filtered by the MaxillaTeeth column
 * @method Morphdat findOneByMaxillateetht1(string $MaxillaTeethT1) Return the first Morphdat filtered by the MaxillaTeethT1 column
 * @method Morphdat findOneByMaxillateetht2(string $MaxillaTeethT2) Return the first Morphdat filtered by the MaxillaTeethT2 column
 * @method Morphdat findOneByMaxillarowsmin(int $MaxillaRowsMin) Return the first Morphdat filtered by the MaxillaRowsMin column
 * @method Morphdat findOneByMaxillarowsmax(int $MaxillaRowsMax) Return the first Morphdat filtered by the MaxillaRowsMax column
 * @method Morphdat findOneByVomerineteeth(string $VomerineTeeth) Return the first Morphdat filtered by the VomerineTeeth column
 * @method Morphdat findOneByVomerineteetht1(string $VomerineTeethT1) Return the first Morphdat filtered by the VomerineTeethT1 column
 * @method Morphdat findOneByVomerineteetht2(string $VomerineTeethT2) Return the first Morphdat filtered by the VomerineTeethT2 column
 * @method Morphdat findOneByVomerinerowsmin(int $VomerineRowsMin) Return the first Morphdat filtered by the VomerineRowsMin column
 * @method Morphdat findOneByVomerinerowsmax(int $VomerineRowsMax) Return the first Morphdat filtered by the VomerineRowsMax column
 * @method Morphdat findOneByPalatine(string $Palatine) Return the first Morphdat filtered by the Palatine column
 * @method Morphdat findOneByPalatineteetht1(string $PalatineTeethT1) Return the first Morphdat filtered by the PalatineTeethT1 column
 * @method Morphdat findOneByPalatineteetht2(string $PalatineTeethT2) Return the first Morphdat filtered by the PalatineTeethT2 column
 * @method Morphdat findOneByPalatinerowsmin(int $PalatineRowsMin) Return the first Morphdat filtered by the PalatineRowsMin column
 * @method Morphdat findOneByPalatinerowsmax(int $PalatineRowsMax) Return the first Morphdat filtered by the PalatineRowsMax column
 * @method Morphdat findOneByPharyngealteeth(string $PharyngealTeeth) Return the first Morphdat filtered by the PharyngealTeeth column
 * @method Morphdat findOneByPharyngealteetht1(string $PharyngealTeethT1) Return the first Morphdat filtered by the PharyngealTeethT1 column
 * @method Morphdat findOneByPharyngealteetht2(string $PharyngealTeethT2) Return the first Morphdat filtered by the PharyngealTeethT2 column
 * @method Morphdat findOneByPharyngealrowsmin(int $PharyngealRowsMin) Return the first Morphdat filtered by the PharyngealRowsMin column
 * @method Morphdat findOneByPharyngealrowsmax(int $PharyngealRowsMax) Return the first Morphdat filtered by the PharyngealRowsMax column
 * @method Morphdat findOneByTeethontongue(string $TeethonTongue) Return the first Morphdat filtered by the TeethonTongue column
 * @method Morphdat findOneByLipsteeth(string $Lipsteeth) Return the first Morphdat filtered by the Lipsteeth column
 * @method Morphdat findOneByDermalteeth(string $DermalTeeth) Return the first Morphdat filtered by the DermalTeeth column
 * @method Morphdat findOneByCommentonteeth(string $CommentonTeeth) Return the first Morphdat filtered by the CommentonTeeth column
 * @method Morphdat findOneByTypeofscales(string $TypeofScales) Return the first Morphdat filtered by the TypeofScales column
 * @method Morphdat findOneByScutes(string $Scutes) Return the first Morphdat filtered by the Scutes column
 * @method Morphdat findOneByKeels(int $Keels) Return the first Morphdat filtered by the Keels column
 * @method Morphdat findOneByHorstripestti(string $HorStripesTTI) Return the first Morphdat filtered by the HorStripesTTI column
 * @method Morphdat findOneByHorstripesttii(string $HorStripesTTII) Return the first Morphdat filtered by the HorStripesTTII column
 * @method Morphdat findOneByVerstripestti(string $VerStripesTTI) Return the first Morphdat filtered by the VerStripesTTI column
 * @method Morphdat findOneByVerstripesttii(string $VerStripesTTII) Return the first Morphdat filtered by the VerStripesTTII column
 * @method Morphdat findOneByVerstripesttiii(string $VerStripesTTIII) Return the first Morphdat filtered by the VerStripesTTIII column
 * @method Morphdat findOneByDiastripestti(string $DiaStripesTTI) Return the first Morphdat filtered by the DiaStripesTTI column
 * @method Morphdat findOneByDiastripesttii(string $DiaStripesTTII) Return the first Morphdat filtered by the DiaStripesTTII column
 * @method Morphdat findOneByDiastripesttiii(string $DiaStripesTTIII) Return the first Morphdat filtered by the DiaStripesTTIII column
 * @method Morphdat findOneByCurstripestti(string $CurStripesTTI) Return the first Morphdat filtered by the CurStripesTTI column
 * @method Morphdat findOneByCurstripesttii(string $CurStripesTTII) Return the first Morphdat filtered by the CurStripesTTII column
 * @method Morphdat findOneByCurstripesttiii(string $CurStripesTTIII) Return the first Morphdat filtered by the CurStripesTTIII column
 * @method Morphdat findOneBySpotstti(string $SpotsTTI) Return the first Morphdat filtered by the SpotsTTI column
 * @method Morphdat findOneBySpotsttii(string $SpotsTTII) Return the first Morphdat filtered by the SpotsTTII column
 * @method Morphdat findOneBySpotsttiii(string $SpotsTTIII) Return the first Morphdat filtered by the SpotsTTIII column
 * @method Morphdat findOneByDorsalfini(string $DorsalFinI) Return the first Morphdat filtered by the DorsalFinI column
 * @method Morphdat findOneByDorsalfinii(string $DorsalFinII) Return the first Morphdat filtered by the DorsalFinII column
 * @method Morphdat findOneByCaudalfini(string $CaudalFinI) Return the first Morphdat filtered by the CaudalFinI column
 * @method Morphdat findOneByCaudalfinii(string $CaudalFinII) Return the first Morphdat filtered by the CaudalFinII column
 * @method Morphdat findOneByAnalfini(string $AnalFinI) Return the first Morphdat filtered by the AnalFinI column
 * @method Morphdat findOneByAnalfinii(string $AnalFinII) Return the first Morphdat filtered by the AnalFinII column
 * @method Morphdat findOneByLaterallinesno(int $LateralLinesNo) Return the first Morphdat filtered by the LateralLinesNo column
 * @method Morphdat findOneByLlinterrupted(boolean $LLinterrupted) Return the first Morphdat filtered by the LLinterrupted column
 * @method Morphdat findOneByScaleslateralmin(int $ScalesLateralmin) Return the first Morphdat filtered by the ScalesLateralmin column
 * @method Morphdat findOneByScaleslateralmax(int $ScalesLateralmax) Return the first Morphdat filtered by the ScalesLateralmax column
 * @method Morphdat findOneByPoredscalesmin(int $PoredScalesMin) Return the first Morphdat filtered by the PoredScalesMin column
 * @method Morphdat findOneByPoredscalesmax(int $PoredScalesMax) Return the first Morphdat filtered by the PoredScalesMax column
 * @method Morphdat findOneByLatseriesmin(int $LatSeriesMin) Return the first Morphdat filtered by the LatSeriesMin column
 * @method Morphdat findOneByLatseriesmax(int $LatSeriesMax) Return the first Morphdat filtered by the LatSeriesMax column
 * @method Morphdat findOneByScalerowsabovemin(double $ScaleRowsAboveMin) Return the first Morphdat filtered by the ScaleRowsAboveMin column
 * @method Morphdat findOneByScalerowsabovemax(double $ScaleRowsAboveMax) Return the first Morphdat filtered by the ScaleRowsAboveMax column
 * @method Morphdat findOneByScalerowsbelowmin(double $ScaleRowsBelowMin) Return the first Morphdat filtered by the ScaleRowsBelowMin column
 * @method Morphdat findOneByScalerowsbelowmax(double $ScaleRowsBelowMax) Return the first Morphdat filtered by the ScaleRowsBelowMax column
 * @method Morphdat findOneByScalespeduncmin(int $ScalesPeduncMin) Return the first Morphdat filtered by the ScalesPeduncMin column
 * @method Morphdat findOneByScalespeduncmax(int $ScalesPeduncMax) Return the first Morphdat filtered by the ScalesPeduncMax column
 * @method Morphdat findOneByBarbelsno(int $BarbelsNo) Return the first Morphdat filtered by the BarbelsNo column
 * @method Morphdat findOneByBarbelstype(string $BarbelsType) Return the first Morphdat filtered by the BarbelsType column
 * @method Morphdat findOneByGillcleftsno(int $GillCleftsNo) Return the first Morphdat filtered by the GillCleftsNo column
 * @method Morphdat findOneBySpiracle(string $Spiracle) Return the first Morphdat filtered by the Spiracle column
 * @method Morphdat findOneByGillrakerslowmin(int $GillRakersLowMin) Return the first Morphdat filtered by the GillRakersLowMin column
 * @method Morphdat findOneByGillrakerslowmax(int $GillRakersLowMax) Return the first Morphdat filtered by the GillRakersLowMax column
 * @method Morphdat findOneByGillrakersupmin(int $GillRakersUpMin) Return the first Morphdat filtered by the GillRakersUpMin column
 * @method Morphdat findOneByGillrakersupmax(int $GillRakersUpMax) Return the first Morphdat filtered by the GillRakersUpMax column
 * @method Morphdat findOneByGillrakerstotalmin(int $GillRakersTotalMin) Return the first Morphdat filtered by the GillRakersTotalMin column
 * @method Morphdat findOneByGillrakerstotalmax(int $GillRakersTotalMax) Return the first Morphdat filtered by the GillRakersTotalMax column
 * @method Morphdat findOneByVertebrae(string $Vertebrae) Return the first Morphdat filtered by the Vertebrae column
 * @method Morphdat findOneByVertebraepreanmin(int $VertebraePreanMin) Return the first Morphdat filtered by the VertebraePreanMin column
 * @method Morphdat findOneByVertebraepreanmax(int $VertebraePreanMax) Return the first Morphdat filtered by the VertebraePreanMax column
 * @method Morphdat findOneByVertebraetotalmin(int $VertebraeTotalMin) Return the first Morphdat filtered by the VertebraeTotalMin column
 * @method Morphdat findOneByVertebraetotalmax(int $VertebraeTotalMax) Return the first Morphdat filtered by the VertebraeTotalMax column
 * @method Morphdat findOneByDorsalattributes(string $DorsalAttributes) Return the first Morphdat filtered by the DorsalAttributes column
 * @method Morphdat findOneByDfinno(int $Dfinno) Return the first Morphdat filtered by the Dfinno column
 * @method Morphdat findOneByDorsalspinesmin(int $DorsalSpinesMin) Return the first Morphdat filtered by the DorsalSpinesMin column
 * @method Morphdat findOneByDorsalspinesmax(int $DorsalSpinesMax) Return the first Morphdat filtered by the DorsalSpinesMax column
 * @method Morphdat findOneByNotched(int $Notched) Return the first Morphdat filtered by the Notched column
 * @method Morphdat findOneByDorsalsoftraysmin(int $DorsalSoftRaysMin) Return the first Morphdat filtered by the DorsalSoftRaysMin column
 * @method Morphdat findOneByDorsalsoftraysmax(int $DorsalSoftRaysMax) Return the first Morphdat filtered by the DorsalSoftRaysMax column
 * @method Morphdat findOneByAdifin(string $Adifin) Return the first Morphdat filtered by the Adifin column
 * @method Morphdat findOneByDfinletsmin(int $DFinletsmin) Return the first Morphdat filtered by the DFinletsmin column
 * @method Morphdat findOneByDfinletsmax(int $DFinletsmax) Return the first Morphdat filtered by the DFinletsmax column
 * @method Morphdat findOneByVfinletsmin(int $VFinletsmin) Return the first Morphdat filtered by the VFinletsmin column
 * @method Morphdat findOneByVfinletsmax(int $VFinletsmax) Return the first Morphdat filtered by the VFinletsmax column
 * @method Morphdat findOneByCshape(string $CShape) Return the first Morphdat filtered by the CShape column
 * @method Morphdat findOneByAttributes(string $Attributes) Return the first Morphdat filtered by the Attributes column
 * @method Morphdat findOneByAfinno(int $Afinno) Return the first Morphdat filtered by the Afinno column
 * @method Morphdat findOneByAnalfinspinesmin(int $AnalFinSpinesMin) Return the first Morphdat filtered by the AnalFinSpinesMin column
 * @method Morphdat findOneByAnalfinspinesmax(int $AnalFinSpinesMax) Return the first Morphdat filtered by the AnalFinSpinesMax column
 * @method Morphdat findOneByAraymin(int $Araymin) Return the first Morphdat filtered by the Araymin column
 * @method Morphdat findOneByAraymax(int $Araymax) Return the first Morphdat filtered by the Araymax column
 * @method Morphdat findOneByPectoralattributes(string $PectoralAttributes) Return the first Morphdat filtered by the PectoralAttributes column
 * @method Morphdat findOneByPspines2(int $Pspines2) Return the first Morphdat filtered by the Pspines2 column
 * @method Morphdat findOneByPraymin(int $Praymin) Return the first Morphdat filtered by the Praymin column
 * @method Morphdat findOneByPraymax(int $Praymax) Return the first Morphdat filtered by the Praymax column
 * @method Morphdat findOneByPelvicsattributes(string $PelvicsAttributes) Return the first Morphdat filtered by the PelvicsAttributes column
 * @method Morphdat findOneByVposition(string $VPosition) Return the first Morphdat filtered by the VPosition column
 * @method Morphdat findOneByVposition2(string $VPosition2) Return the first Morphdat filtered by the VPosition2 column
 * @method Morphdat findOneByVspines(int $Vspines) Return the first Morphdat filtered by the Vspines column
 * @method Morphdat findOneByVraymin(int $Vraymin) Return the first Morphdat filtered by the Vraymin column
 * @method Morphdat findOneByVraymax(int $Vraymax) Return the first Morphdat filtered by the Vraymax column
 * @method Morphdat findOneByStandardlengthcm(double $StandardLengthCm) Return the first Morphdat filtered by the StandardLengthCm column
 * @method Morphdat findOneByForklength(double $Forklength) Return the first Morphdat filtered by the Forklength column
 * @method Morphdat findOneByTotallength(double $Totallength) Return the first Morphdat filtered by the Totallength column
 * @method Morphdat findOneByHeadlength(double $HeadLength) Return the first Morphdat filtered by the HeadLength column
 * @method Morphdat findOneByPredorsallength(double $PreDorsalLength) Return the first Morphdat filtered by the PreDorsalLength column
 * @method Morphdat findOneByPrepelvicslength(double $PrePelvicsLength) Return the first Morphdat filtered by the PrePelvicsLength column
 * @method Morphdat findOneByPreanallength(double $PreAnalLength) Return the first Morphdat filtered by the PreAnalLength column
 * @method Morphdat findOneByPostheaddepth(double $PostHeadDepth) Return the first Morphdat filtered by the PostHeadDepth column
 * @method Morphdat findOneByPosttrunkdepth(double $PostTrunkDepth) Return the first Morphdat filtered by the PostTrunkDepth column
 * @method Morphdat findOneByMaximumdepth(double $MaximumDepth) Return the first Morphdat filtered by the MaximumDepth column
 * @method Morphdat findOneByPeduncledepth(double $PeduncleDepth) Return the first Morphdat filtered by the PeduncleDepth column
 * @method Morphdat findOneByPedunclelength(double $PeduncleLength) Return the first Morphdat filtered by the PeduncleLength column
 * @method Morphdat findOneByCaudalheight(double $CaudalHeight) Return the first Morphdat filtered by the CaudalHeight column
 * @method Morphdat findOneByPreorbitallength(double $PreorbitalLength) Return the first Morphdat filtered by the PreorbitalLength column
 * @method Morphdat findOneByEyelength(double $EyeLength) Return the first Morphdat filtered by the EyeLength column
 * @method Morphdat findOneByEntered(int $Entered) Return the first Morphdat filtered by the Entered column
 * @method Morphdat findOneByDateentered(string $DateEntered) Return the first Morphdat filtered by the DateEntered column
 * @method Morphdat findOneByModified(int $Modified) Return the first Morphdat filtered by the Modified column
 * @method Morphdat findOneByDatemodified(string $DateModified) Return the first Morphdat filtered by the DateModified column
 * @method Morphdat findOneByExpert(int $Expert) Return the first Morphdat filtered by the Expert column
 * @method Morphdat findOneByDatechecked(string $DateChecked) Return the first Morphdat filtered by the DateChecked column
 * @method Morphdat findOneByRemarksex(string $RemarkSex) Return the first Morphdat filtered by the RemarkSex column
 * @method Morphdat findOneByAddchars(string $AddChars) Return the first Morphdat filtered by the AddChars column
 * @method Morphdat findOneBySimilarspecies1(int $SimilarSpecies1) Return the first Morphdat filtered by the SimilarSpecies1 column
 * @method Morphdat findOneBySimilarspec1remarks(string $SimilarSpec1Remarks) Return the first Morphdat filtered by the SimilarSpec1Remarks column
 * @method Morphdat findOneBySimilarspecies2(int $SimilarSpecies2) Return the first Morphdat filtered by the SimilarSpecies2 column
 * @method Morphdat findOneBySimilarspec2remarks(string $SimilarSpec2Remarks) Return the first Morphdat filtered by the SimilarSpec2Remarks column
 * @method Morphdat findOneByEaseofid(string $EaseofID) Return the first Morphdat filtered by the EaseofID column
 * @method Morphdat findOneByOtherref1(int $OtherRef1) Return the first Morphdat filtered by the OtherRef1 column
 * @method Morphdat findOneByOtherref2(int $OtherRef2) Return the first Morphdat filtered by the OtherRef2 column
 * @method Morphdat findOneByTs(string $TS) Return the first Morphdat filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Morphdat objects filtered by the autoctr column
 * @method array findBySpeccode(int $Speccode) Return Morphdat objects filtered by the Speccode column
 * @method array findByStockcode(int $StockCode) Return Morphdat objects filtered by the StockCode column
 * @method array findByMorphdatrefno(int $MorphDatRefNo) Return Morphdat objects filtered by the MorphDatRefNo column
 * @method array findByFemales(int $Females) Return Morphdat objects filtered by the Females column
 * @method array findByMales(int $Males) Return Morphdat objects filtered by the Males column
 * @method array findByAppearancepic(string $AppearancePic) Return Morphdat objects filtered by the AppearancePic column
 * @method array findBySexualattributes(string $SexualAttributes) Return Morphdat objects filtered by the SexualAttributes column
 * @method array findBySexmorphology(string $SexMorphology) Return Morphdat objects filtered by the SexMorphology column
 * @method array findBySexcolors(string $SexColors) Return Morphdat objects filtered by the SexColors column
 * @method array findByStrikingfeatures(string $StrikingFeatures) Return Morphdat objects filtered by the StrikingFeatures column
 * @method array findByBodyshapei(string $BodyShapeI) Return Morphdat objects filtered by the BodyShapeI column
 * @method array findByBodyshapeii(string $BodyShapeII) Return Morphdat objects filtered by the BodyShapeII column
 * @method array findByForehead(string $Forehead) Return Morphdat objects filtered by the Forehead column
 * @method array findByOperculumpresent(int $OperculumPresent) Return Morphdat objects filtered by the OperculumPresent column
 * @method array findByTypeofeyes(string $TypeofEyes) Return Morphdat objects filtered by the TypeofEyes column
 * @method array findByTypeofmouth(string $TypeofMouth) Return Morphdat objects filtered by the TypeofMouth column
 * @method array findByPosofmouth(string $PosofMouth) Return Morphdat objects filtered by the PosofMouth column
 * @method array findByMandibleteeth(string $MandibleTeeth) Return Morphdat objects filtered by the MandibleTeeth column
 * @method array findByMandibleteetht1(string $MandibleTeethT1) Return Morphdat objects filtered by the MandibleTeethT1 column
 * @method array findByMandibleteetht2(string $MandibleTeethT2) Return Morphdat objects filtered by the MandibleTeethT2 column
 * @method array findByMandiblerowsmin(int $MandibleRowsMin) Return Morphdat objects filtered by the MandibleRowsMin column
 * @method array findByMandiblerowsmax(int $MandibleRowsMax) Return Morphdat objects filtered by the MandibleRowsMax column
 * @method array findByMaxillateeth(string $MaxillaTeeth) Return Morphdat objects filtered by the MaxillaTeeth column
 * @method array findByMaxillateetht1(string $MaxillaTeethT1) Return Morphdat objects filtered by the MaxillaTeethT1 column
 * @method array findByMaxillateetht2(string $MaxillaTeethT2) Return Morphdat objects filtered by the MaxillaTeethT2 column
 * @method array findByMaxillarowsmin(int $MaxillaRowsMin) Return Morphdat objects filtered by the MaxillaRowsMin column
 * @method array findByMaxillarowsmax(int $MaxillaRowsMax) Return Morphdat objects filtered by the MaxillaRowsMax column
 * @method array findByVomerineteeth(string $VomerineTeeth) Return Morphdat objects filtered by the VomerineTeeth column
 * @method array findByVomerineteetht1(string $VomerineTeethT1) Return Morphdat objects filtered by the VomerineTeethT1 column
 * @method array findByVomerineteetht2(string $VomerineTeethT2) Return Morphdat objects filtered by the VomerineTeethT2 column
 * @method array findByVomerinerowsmin(int $VomerineRowsMin) Return Morphdat objects filtered by the VomerineRowsMin column
 * @method array findByVomerinerowsmax(int $VomerineRowsMax) Return Morphdat objects filtered by the VomerineRowsMax column
 * @method array findByPalatine(string $Palatine) Return Morphdat objects filtered by the Palatine column
 * @method array findByPalatineteetht1(string $PalatineTeethT1) Return Morphdat objects filtered by the PalatineTeethT1 column
 * @method array findByPalatineteetht2(string $PalatineTeethT2) Return Morphdat objects filtered by the PalatineTeethT2 column
 * @method array findByPalatinerowsmin(int $PalatineRowsMin) Return Morphdat objects filtered by the PalatineRowsMin column
 * @method array findByPalatinerowsmax(int $PalatineRowsMax) Return Morphdat objects filtered by the PalatineRowsMax column
 * @method array findByPharyngealteeth(string $PharyngealTeeth) Return Morphdat objects filtered by the PharyngealTeeth column
 * @method array findByPharyngealteetht1(string $PharyngealTeethT1) Return Morphdat objects filtered by the PharyngealTeethT1 column
 * @method array findByPharyngealteetht2(string $PharyngealTeethT2) Return Morphdat objects filtered by the PharyngealTeethT2 column
 * @method array findByPharyngealrowsmin(int $PharyngealRowsMin) Return Morphdat objects filtered by the PharyngealRowsMin column
 * @method array findByPharyngealrowsmax(int $PharyngealRowsMax) Return Morphdat objects filtered by the PharyngealRowsMax column
 * @method array findByTeethontongue(string $TeethonTongue) Return Morphdat objects filtered by the TeethonTongue column
 * @method array findByLipsteeth(string $Lipsteeth) Return Morphdat objects filtered by the Lipsteeth column
 * @method array findByDermalteeth(string $DermalTeeth) Return Morphdat objects filtered by the DermalTeeth column
 * @method array findByCommentonteeth(string $CommentonTeeth) Return Morphdat objects filtered by the CommentonTeeth column
 * @method array findByTypeofscales(string $TypeofScales) Return Morphdat objects filtered by the TypeofScales column
 * @method array findByScutes(string $Scutes) Return Morphdat objects filtered by the Scutes column
 * @method array findByKeels(int $Keels) Return Morphdat objects filtered by the Keels column
 * @method array findByHorstripestti(string $HorStripesTTI) Return Morphdat objects filtered by the HorStripesTTI column
 * @method array findByHorstripesttii(string $HorStripesTTII) Return Morphdat objects filtered by the HorStripesTTII column
 * @method array findByVerstripestti(string $VerStripesTTI) Return Morphdat objects filtered by the VerStripesTTI column
 * @method array findByVerstripesttii(string $VerStripesTTII) Return Morphdat objects filtered by the VerStripesTTII column
 * @method array findByVerstripesttiii(string $VerStripesTTIII) Return Morphdat objects filtered by the VerStripesTTIII column
 * @method array findByDiastripestti(string $DiaStripesTTI) Return Morphdat objects filtered by the DiaStripesTTI column
 * @method array findByDiastripesttii(string $DiaStripesTTII) Return Morphdat objects filtered by the DiaStripesTTII column
 * @method array findByDiastripesttiii(string $DiaStripesTTIII) Return Morphdat objects filtered by the DiaStripesTTIII column
 * @method array findByCurstripestti(string $CurStripesTTI) Return Morphdat objects filtered by the CurStripesTTI column
 * @method array findByCurstripesttii(string $CurStripesTTII) Return Morphdat objects filtered by the CurStripesTTII column
 * @method array findByCurstripesttiii(string $CurStripesTTIII) Return Morphdat objects filtered by the CurStripesTTIII column
 * @method array findBySpotstti(string $SpotsTTI) Return Morphdat objects filtered by the SpotsTTI column
 * @method array findBySpotsttii(string $SpotsTTII) Return Morphdat objects filtered by the SpotsTTII column
 * @method array findBySpotsttiii(string $SpotsTTIII) Return Morphdat objects filtered by the SpotsTTIII column
 * @method array findByDorsalfini(string $DorsalFinI) Return Morphdat objects filtered by the DorsalFinI column
 * @method array findByDorsalfinii(string $DorsalFinII) Return Morphdat objects filtered by the DorsalFinII column
 * @method array findByCaudalfini(string $CaudalFinI) Return Morphdat objects filtered by the CaudalFinI column
 * @method array findByCaudalfinii(string $CaudalFinII) Return Morphdat objects filtered by the CaudalFinII column
 * @method array findByAnalfini(string $AnalFinI) Return Morphdat objects filtered by the AnalFinI column
 * @method array findByAnalfinii(string $AnalFinII) Return Morphdat objects filtered by the AnalFinII column
 * @method array findByLaterallinesno(int $LateralLinesNo) Return Morphdat objects filtered by the LateralLinesNo column
 * @method array findByLlinterrupted(boolean $LLinterrupted) Return Morphdat objects filtered by the LLinterrupted column
 * @method array findByScaleslateralmin(int $ScalesLateralmin) Return Morphdat objects filtered by the ScalesLateralmin column
 * @method array findByScaleslateralmax(int $ScalesLateralmax) Return Morphdat objects filtered by the ScalesLateralmax column
 * @method array findByPoredscalesmin(int $PoredScalesMin) Return Morphdat objects filtered by the PoredScalesMin column
 * @method array findByPoredscalesmax(int $PoredScalesMax) Return Morphdat objects filtered by the PoredScalesMax column
 * @method array findByLatseriesmin(int $LatSeriesMin) Return Morphdat objects filtered by the LatSeriesMin column
 * @method array findByLatseriesmax(int $LatSeriesMax) Return Morphdat objects filtered by the LatSeriesMax column
 * @method array findByScalerowsabovemin(double $ScaleRowsAboveMin) Return Morphdat objects filtered by the ScaleRowsAboveMin column
 * @method array findByScalerowsabovemax(double $ScaleRowsAboveMax) Return Morphdat objects filtered by the ScaleRowsAboveMax column
 * @method array findByScalerowsbelowmin(double $ScaleRowsBelowMin) Return Morphdat objects filtered by the ScaleRowsBelowMin column
 * @method array findByScalerowsbelowmax(double $ScaleRowsBelowMax) Return Morphdat objects filtered by the ScaleRowsBelowMax column
 * @method array findByScalespeduncmin(int $ScalesPeduncMin) Return Morphdat objects filtered by the ScalesPeduncMin column
 * @method array findByScalespeduncmax(int $ScalesPeduncMax) Return Morphdat objects filtered by the ScalesPeduncMax column
 * @method array findByBarbelsno(int $BarbelsNo) Return Morphdat objects filtered by the BarbelsNo column
 * @method array findByBarbelstype(string $BarbelsType) Return Morphdat objects filtered by the BarbelsType column
 * @method array findByGillcleftsno(int $GillCleftsNo) Return Morphdat objects filtered by the GillCleftsNo column
 * @method array findBySpiracle(string $Spiracle) Return Morphdat objects filtered by the Spiracle column
 * @method array findByGillrakerslowmin(int $GillRakersLowMin) Return Morphdat objects filtered by the GillRakersLowMin column
 * @method array findByGillrakerslowmax(int $GillRakersLowMax) Return Morphdat objects filtered by the GillRakersLowMax column
 * @method array findByGillrakersupmin(int $GillRakersUpMin) Return Morphdat objects filtered by the GillRakersUpMin column
 * @method array findByGillrakersupmax(int $GillRakersUpMax) Return Morphdat objects filtered by the GillRakersUpMax column
 * @method array findByGillrakerstotalmin(int $GillRakersTotalMin) Return Morphdat objects filtered by the GillRakersTotalMin column
 * @method array findByGillrakerstotalmax(int $GillRakersTotalMax) Return Morphdat objects filtered by the GillRakersTotalMax column
 * @method array findByVertebrae(string $Vertebrae) Return Morphdat objects filtered by the Vertebrae column
 * @method array findByVertebraepreanmin(int $VertebraePreanMin) Return Morphdat objects filtered by the VertebraePreanMin column
 * @method array findByVertebraepreanmax(int $VertebraePreanMax) Return Morphdat objects filtered by the VertebraePreanMax column
 * @method array findByVertebraetotalmin(int $VertebraeTotalMin) Return Morphdat objects filtered by the VertebraeTotalMin column
 * @method array findByVertebraetotalmax(int $VertebraeTotalMax) Return Morphdat objects filtered by the VertebraeTotalMax column
 * @method array findByDorsalattributes(string $DorsalAttributes) Return Morphdat objects filtered by the DorsalAttributes column
 * @method array findByDfinno(int $Dfinno) Return Morphdat objects filtered by the Dfinno column
 * @method array findByDorsalspinesmin(int $DorsalSpinesMin) Return Morphdat objects filtered by the DorsalSpinesMin column
 * @method array findByDorsalspinesmax(int $DorsalSpinesMax) Return Morphdat objects filtered by the DorsalSpinesMax column
 * @method array findByNotched(int $Notched) Return Morphdat objects filtered by the Notched column
 * @method array findByDorsalsoftraysmin(int $DorsalSoftRaysMin) Return Morphdat objects filtered by the DorsalSoftRaysMin column
 * @method array findByDorsalsoftraysmax(int $DorsalSoftRaysMax) Return Morphdat objects filtered by the DorsalSoftRaysMax column
 * @method array findByAdifin(string $Adifin) Return Morphdat objects filtered by the Adifin column
 * @method array findByDfinletsmin(int $DFinletsmin) Return Morphdat objects filtered by the DFinletsmin column
 * @method array findByDfinletsmax(int $DFinletsmax) Return Morphdat objects filtered by the DFinletsmax column
 * @method array findByVfinletsmin(int $VFinletsmin) Return Morphdat objects filtered by the VFinletsmin column
 * @method array findByVfinletsmax(int $VFinletsmax) Return Morphdat objects filtered by the VFinletsmax column
 * @method array findByCshape(string $CShape) Return Morphdat objects filtered by the CShape column
 * @method array findByAttributes(string $Attributes) Return Morphdat objects filtered by the Attributes column
 * @method array findByAfinno(int $Afinno) Return Morphdat objects filtered by the Afinno column
 * @method array findByAnalfinspinesmin(int $AnalFinSpinesMin) Return Morphdat objects filtered by the AnalFinSpinesMin column
 * @method array findByAnalfinspinesmax(int $AnalFinSpinesMax) Return Morphdat objects filtered by the AnalFinSpinesMax column
 * @method array findByAraymin(int $Araymin) Return Morphdat objects filtered by the Araymin column
 * @method array findByAraymax(int $Araymax) Return Morphdat objects filtered by the Araymax column
 * @method array findByPectoralattributes(string $PectoralAttributes) Return Morphdat objects filtered by the PectoralAttributes column
 * @method array findByPspines2(int $Pspines2) Return Morphdat objects filtered by the Pspines2 column
 * @method array findByPraymin(int $Praymin) Return Morphdat objects filtered by the Praymin column
 * @method array findByPraymax(int $Praymax) Return Morphdat objects filtered by the Praymax column
 * @method array findByPelvicsattributes(string $PelvicsAttributes) Return Morphdat objects filtered by the PelvicsAttributes column
 * @method array findByVposition(string $VPosition) Return Morphdat objects filtered by the VPosition column
 * @method array findByVposition2(string $VPosition2) Return Morphdat objects filtered by the VPosition2 column
 * @method array findByVspines(int $Vspines) Return Morphdat objects filtered by the Vspines column
 * @method array findByVraymin(int $Vraymin) Return Morphdat objects filtered by the Vraymin column
 * @method array findByVraymax(int $Vraymax) Return Morphdat objects filtered by the Vraymax column
 * @method array findByStandardlengthcm(double $StandardLengthCm) Return Morphdat objects filtered by the StandardLengthCm column
 * @method array findByForklength(double $Forklength) Return Morphdat objects filtered by the Forklength column
 * @method array findByTotallength(double $Totallength) Return Morphdat objects filtered by the Totallength column
 * @method array findByHeadlength(double $HeadLength) Return Morphdat objects filtered by the HeadLength column
 * @method array findByPredorsallength(double $PreDorsalLength) Return Morphdat objects filtered by the PreDorsalLength column
 * @method array findByPrepelvicslength(double $PrePelvicsLength) Return Morphdat objects filtered by the PrePelvicsLength column
 * @method array findByPreanallength(double $PreAnalLength) Return Morphdat objects filtered by the PreAnalLength column
 * @method array findByPostheaddepth(double $PostHeadDepth) Return Morphdat objects filtered by the PostHeadDepth column
 * @method array findByPosttrunkdepth(double $PostTrunkDepth) Return Morphdat objects filtered by the PostTrunkDepth column
 * @method array findByMaximumdepth(double $MaximumDepth) Return Morphdat objects filtered by the MaximumDepth column
 * @method array findByPeduncledepth(double $PeduncleDepth) Return Morphdat objects filtered by the PeduncleDepth column
 * @method array findByPedunclelength(double $PeduncleLength) Return Morphdat objects filtered by the PeduncleLength column
 * @method array findByCaudalheight(double $CaudalHeight) Return Morphdat objects filtered by the CaudalHeight column
 * @method array findByPreorbitallength(double $PreorbitalLength) Return Morphdat objects filtered by the PreorbitalLength column
 * @method array findByEyelength(double $EyeLength) Return Morphdat objects filtered by the EyeLength column
 * @method array findByEntered(int $Entered) Return Morphdat objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Morphdat objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Morphdat objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Morphdat objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Morphdat objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Morphdat objects filtered by the DateChecked column
 * @method array findByRemarksex(string $RemarkSex) Return Morphdat objects filtered by the RemarkSex column
 * @method array findByAddchars(string $AddChars) Return Morphdat objects filtered by the AddChars column
 * @method array findBySimilarspecies1(int $SimilarSpecies1) Return Morphdat objects filtered by the SimilarSpecies1 column
 * @method array findBySimilarspec1remarks(string $SimilarSpec1Remarks) Return Morphdat objects filtered by the SimilarSpec1Remarks column
 * @method array findBySimilarspecies2(int $SimilarSpecies2) Return Morphdat objects filtered by the SimilarSpecies2 column
 * @method array findBySimilarspec2remarks(string $SimilarSpec2Remarks) Return Morphdat objects filtered by the SimilarSpec2Remarks column
 * @method array findByEaseofid(string $EaseofID) Return Morphdat objects filtered by the EaseofID column
 * @method array findByOtherref1(int $OtherRef1) Return Morphdat objects filtered by the OtherRef1 column
 * @method array findByOtherref2(int $OtherRef2) Return Morphdat objects filtered by the OtherRef2 column
 * @method array findByTs(string $TS) Return Morphdat objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMorphdatQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMorphdatQuery object.
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
            $modelName = 'Morphdat';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MorphdatQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MorphdatQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MorphdatQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MorphdatQuery) {
            return $criteria;
        }
        $query = new MorphdatQuery(null, null, $modelAlias);

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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Morphdat|Morphdat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MorphdatPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MorphdatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Morphdat A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByStockcode($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Morphdat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `Speccode`, `StockCode`, `MorphDatRefNo`, `Females`, `Males`, `AppearancePic`, `SexualAttributes`, `SexMorphology`, `SexColors`, `StrikingFeatures`, `BodyShapeI`, `BodyShapeII`, `Forehead`, `OperculumPresent`, `TypeofEyes`, `TypeofMouth`, `PosofMouth`, `MandibleTeeth`, `MandibleTeethT1`, `MandibleTeethT2`, `MandibleRowsMin`, `MandibleRowsMax`, `MaxillaTeeth`, `MaxillaTeethT1`, `MaxillaTeethT2`, `MaxillaRowsMin`, `MaxillaRowsMax`, `VomerineTeeth`, `VomerineTeethT1`, `VomerineTeethT2`, `VomerineRowsMin`, `VomerineRowsMax`, `Palatine`, `PalatineTeethT1`, `PalatineTeethT2`, `PalatineRowsMin`, `PalatineRowsMax`, `PharyngealTeeth`, `PharyngealTeethT1`, `PharyngealTeethT2`, `PharyngealRowsMin`, `PharyngealRowsMax`, `TeethonTongue`, `Lipsteeth`, `DermalTeeth`, `CommentonTeeth`, `TypeofScales`, `Scutes`, `Keels`, `HorStripesTTI`, `HorStripesTTII`, `VerStripesTTI`, `VerStripesTTII`, `VerStripesTTIII`, `DiaStripesTTI`, `DiaStripesTTII`, `DiaStripesTTIII`, `CurStripesTTI`, `CurStripesTTII`, `CurStripesTTIII`, `SpotsTTI`, `SpotsTTII`, `SpotsTTIII`, `DorsalFinI`, `DorsalFinII`, `CaudalFinI`, `CaudalFinII`, `AnalFinI`, `AnalFinII`, `LateralLinesNo`, `LLinterrupted`, `ScalesLateralmin`, `ScalesLateralmax`, `PoredScalesMin`, `PoredScalesMax`, `LatSeriesMin`, `LatSeriesMax`, `ScaleRowsAboveMin`, `ScaleRowsAboveMax`, `ScaleRowsBelowMin`, `ScaleRowsBelowMax`, `ScalesPeduncMin`, `ScalesPeduncMax`, `BarbelsNo`, `BarbelsType`, `GillCleftsNo`, `Spiracle`, `GillRakersLowMin`, `GillRakersLowMax`, `GillRakersUpMin`, `GillRakersUpMax`, `GillRakersTotalMin`, `GillRakersTotalMax`, `Vertebrae`, `VertebraePreanMin`, `VertebraePreanMax`, `VertebraeTotalMin`, `VertebraeTotalMax`, `DorsalAttributes`, `Dfinno`, `DorsalSpinesMin`, `DorsalSpinesMax`, `Notched`, `DorsalSoftRaysMin`, `DorsalSoftRaysMax`, `Adifin`, `DFinletsmin`, `DFinletsmax`, `VFinletsmin`, `VFinletsmax`, `CShape`, `Attributes`, `Afinno`, `AnalFinSpinesMin`, `AnalFinSpinesMax`, `Araymin`, `Araymax`, `PectoralAttributes`, `Pspines2`, `Praymin`, `Praymax`, `PelvicsAttributes`, `VPosition`, `VPosition2`, `Vspines`, `Vraymin`, `Vraymax`, `StandardLengthCm`, `Forklength`, `Totallength`, `HeadLength`, `PreDorsalLength`, `PrePelvicsLength`, `PreAnalLength`, `PostHeadDepth`, `PostTrunkDepth`, `MaximumDepth`, `PeduncleDepth`, `PeduncleLength`, `CaudalHeight`, `PreorbitalLength`, `EyeLength`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `RemarkSex`, `AddChars`, `SimilarSpecies1`, `SimilarSpec1Remarks`, `SimilarSpecies2`, `SimilarSpec2Remarks`, `EaseofID`, `OtherRef1`, `OtherRef2`, `TS` FROM `morphdat` WHERE `StockCode` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Morphdat();
            $obj->hydrate($row);
            MorphdatPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Morphdat|Morphdat[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Morphdat[]|mixed the list of results, formatted by the current formatter
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
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MorphdatPeer::STOCKCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MorphdatPeer::STOCKCODE, $keys, Criteria::IN);
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
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(MorphdatPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(MorphdatPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the Speccode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE Speccode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE Speccode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE Speccode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE Speccode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(MorphdatPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(MorphdatPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SPECCODE, $speccode, $comparison);
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
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(MorphdatPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(MorphdatPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the MorphDatRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByMorphdatrefno(1234); // WHERE MorphDatRefNo = 1234
     * $query->filterByMorphdatrefno(array(12, 34)); // WHERE MorphDatRefNo IN (12, 34)
     * $query->filterByMorphdatrefno(array('min' => 12)); // WHERE MorphDatRefNo >= 12
     * $query->filterByMorphdatrefno(array('max' => 12)); // WHERE MorphDatRefNo <= 12
     * </code>
     *
     * @param     mixed $morphdatrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByMorphdatrefno($morphdatrefno = null, $comparison = null)
    {
        if (is_array($morphdatrefno)) {
            $useMinMax = false;
            if (isset($morphdatrefno['min'])) {
                $this->addUsingAlias(MorphdatPeer::MORPHDATREFNO, $morphdatrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($morphdatrefno['max'])) {
                $this->addUsingAlias(MorphdatPeer::MORPHDATREFNO, $morphdatrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::MORPHDATREFNO, $morphdatrefno, $comparison);
    }

    /**
     * Filter the query on the Females column
     *
     * Example usage:
     * <code>
     * $query->filterByFemales(1234); // WHERE Females = 1234
     * $query->filterByFemales(array(12, 34)); // WHERE Females IN (12, 34)
     * $query->filterByFemales(array('min' => 12)); // WHERE Females >= 12
     * $query->filterByFemales(array('max' => 12)); // WHERE Females <= 12
     * </code>
     *
     * @param     mixed $females The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByFemales($females = null, $comparison = null)
    {
        if (is_array($females)) {
            $useMinMax = false;
            if (isset($females['min'])) {
                $this->addUsingAlias(MorphdatPeer::FEMALES, $females['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($females['max'])) {
                $this->addUsingAlias(MorphdatPeer::FEMALES, $females['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::FEMALES, $females, $comparison);
    }

    /**
     * Filter the query on the Males column
     *
     * Example usage:
     * <code>
     * $query->filterByMales(1234); // WHERE Males = 1234
     * $query->filterByMales(array(12, 34)); // WHERE Males IN (12, 34)
     * $query->filterByMales(array('min' => 12)); // WHERE Males >= 12
     * $query->filterByMales(array('max' => 12)); // WHERE Males <= 12
     * </code>
     *
     * @param     mixed $males The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByMales($males = null, $comparison = null)
    {
        if (is_array($males)) {
            $useMinMax = false;
            if (isset($males['min'])) {
                $this->addUsingAlias(MorphdatPeer::MALES, $males['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($males['max'])) {
                $this->addUsingAlias(MorphdatPeer::MALES, $males['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::MALES, $males, $comparison);
    }

    /**
     * Filter the query on the AppearancePic column
     *
     * Example usage:
     * <code>
     * $query->filterByAppearancepic('fooValue');   // WHERE AppearancePic = 'fooValue'
     * $query->filterByAppearancepic('%fooValue%'); // WHERE AppearancePic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appearancepic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByAppearancepic($appearancepic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appearancepic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appearancepic)) {
                $appearancepic = str_replace('*', '%', $appearancepic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::APPEARANCEPIC, $appearancepic, $comparison);
    }

    /**
     * Filter the query on the SexualAttributes column
     *
     * Example usage:
     * <code>
     * $query->filterBySexualattributes('fooValue');   // WHERE SexualAttributes = 'fooValue'
     * $query->filterBySexualattributes('%fooValue%'); // WHERE SexualAttributes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sexualattributes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterBySexualattributes($sexualattributes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sexualattributes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sexualattributes)) {
                $sexualattributes = str_replace('*', '%', $sexualattributes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SEXUALATTRIBUTES, $sexualattributes, $comparison);
    }

    /**
     * Filter the query on the SexMorphology column
     *
     * Example usage:
     * <code>
     * $query->filterBySexmorphology('fooValue');   // WHERE SexMorphology = 'fooValue'
     * $query->filterBySexmorphology('%fooValue%'); // WHERE SexMorphology LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sexmorphology The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterBySexmorphology($sexmorphology = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sexmorphology)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sexmorphology)) {
                $sexmorphology = str_replace('*', '%', $sexmorphology);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SEXMORPHOLOGY, $sexmorphology, $comparison);
    }

    /**
     * Filter the query on the SexColors column
     *
     * Example usage:
     * <code>
     * $query->filterBySexcolors('fooValue');   // WHERE SexColors = 'fooValue'
     * $query->filterBySexcolors('%fooValue%'); // WHERE SexColors LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sexcolors The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterBySexcolors($sexcolors = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sexcolors)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sexcolors)) {
                $sexcolors = str_replace('*', '%', $sexcolors);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SEXCOLORS, $sexcolors, $comparison);
    }

    /**
     * Filter the query on the StrikingFeatures column
     *
     * Example usage:
     * <code>
     * $query->filterByStrikingfeatures('fooValue');   // WHERE StrikingFeatures = 'fooValue'
     * $query->filterByStrikingfeatures('%fooValue%'); // WHERE StrikingFeatures LIKE '%fooValue%'
     * </code>
     *
     * @param     string $strikingfeatures The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByStrikingfeatures($strikingfeatures = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($strikingfeatures)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $strikingfeatures)) {
                $strikingfeatures = str_replace('*', '%', $strikingfeatures);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::STRIKINGFEATURES, $strikingfeatures, $comparison);
    }

    /**
     * Filter the query on the BodyShapeI column
     *
     * Example usage:
     * <code>
     * $query->filterByBodyshapei('fooValue');   // WHERE BodyShapeI = 'fooValue'
     * $query->filterByBodyshapei('%fooValue%'); // WHERE BodyShapeI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bodyshapei The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByBodyshapei($bodyshapei = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bodyshapei)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bodyshapei)) {
                $bodyshapei = str_replace('*', '%', $bodyshapei);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::BODYSHAPEI, $bodyshapei, $comparison);
    }

    /**
     * Filter the query on the BodyShapeII column
     *
     * Example usage:
     * <code>
     * $query->filterByBodyshapeii('fooValue');   // WHERE BodyShapeII = 'fooValue'
     * $query->filterByBodyshapeii('%fooValue%'); // WHERE BodyShapeII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bodyshapeii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByBodyshapeii($bodyshapeii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bodyshapeii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bodyshapeii)) {
                $bodyshapeii = str_replace('*', '%', $bodyshapeii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::BODYSHAPEII, $bodyshapeii, $comparison);
    }

    /**
     * Filter the query on the Forehead column
     *
     * Example usage:
     * <code>
     * $query->filterByForehead('fooValue');   // WHERE Forehead = 'fooValue'
     * $query->filterByForehead('%fooValue%'); // WHERE Forehead LIKE '%fooValue%'
     * </code>
     *
     * @param     string $forehead The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByForehead($forehead = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($forehead)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $forehead)) {
                $forehead = str_replace('*', '%', $forehead);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::FOREHEAD, $forehead, $comparison);
    }

    /**
     * Filter the query on the OperculumPresent column
     *
     * Example usage:
     * <code>
     * $query->filterByOperculumpresent(1234); // WHERE OperculumPresent = 1234
     * $query->filterByOperculumpresent(array(12, 34)); // WHERE OperculumPresent IN (12, 34)
     * $query->filterByOperculumpresent(array('min' => 12)); // WHERE OperculumPresent >= 12
     * $query->filterByOperculumpresent(array('max' => 12)); // WHERE OperculumPresent <= 12
     * </code>
     *
     * @param     mixed $operculumpresent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByOperculumpresent($operculumpresent = null, $comparison = null)
    {
        if (is_array($operculumpresent)) {
            $useMinMax = false;
            if (isset($operculumpresent['min'])) {
                $this->addUsingAlias(MorphdatPeer::OPERCULUMPRESENT, $operculumpresent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($operculumpresent['max'])) {
                $this->addUsingAlias(MorphdatPeer::OPERCULUMPRESENT, $operculumpresent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::OPERCULUMPRESENT, $operculumpresent, $comparison);
    }

    /**
     * Filter the query on the TypeofEyes column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeofeyes('fooValue');   // WHERE TypeofEyes = 'fooValue'
     * $query->filterByTypeofeyes('%fooValue%'); // WHERE TypeofEyes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeofeyes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByTypeofeyes($typeofeyes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeofeyes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeofeyes)) {
                $typeofeyes = str_replace('*', '%', $typeofeyes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::TYPEOFEYES, $typeofeyes, $comparison);
    }

    /**
     * Filter the query on the TypeofMouth column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeofmouth('fooValue');   // WHERE TypeofMouth = 'fooValue'
     * $query->filterByTypeofmouth('%fooValue%'); // WHERE TypeofMouth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeofmouth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByTypeofmouth($typeofmouth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeofmouth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeofmouth)) {
                $typeofmouth = str_replace('*', '%', $typeofmouth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::TYPEOFMOUTH, $typeofmouth, $comparison);
    }

    /**
     * Filter the query on the PosofMouth column
     *
     * Example usage:
     * <code>
     * $query->filterByPosofmouth('fooValue');   // WHERE PosofMouth = 'fooValue'
     * $query->filterByPosofmouth('%fooValue%'); // WHERE PosofMouth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $posofmouth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPosofmouth($posofmouth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($posofmouth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $posofmouth)) {
                $posofmouth = str_replace('*', '%', $posofmouth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::POSOFMOUTH, $posofmouth, $comparison);
    }

    /**
     * Filter the query on the MandibleTeeth column
     *
     * Example usage:
     * <code>
     * $query->filterByMandibleteeth('fooValue');   // WHERE MandibleTeeth = 'fooValue'
     * $query->filterByMandibleteeth('%fooValue%'); // WHERE MandibleTeeth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mandibleteeth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByMandibleteeth($mandibleteeth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mandibleteeth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mandibleteeth)) {
                $mandibleteeth = str_replace('*', '%', $mandibleteeth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::MANDIBLETEETH, $mandibleteeth, $comparison);
    }

    /**
     * Filter the query on the MandibleTeethT1 column
     *
     * Example usage:
     * <code>
     * $query->filterByMandibleteetht1('fooValue');   // WHERE MandibleTeethT1 = 'fooValue'
     * $query->filterByMandibleteetht1('%fooValue%'); // WHERE MandibleTeethT1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mandibleteetht1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByMandibleteetht1($mandibleteetht1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mandibleteetht1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mandibleteetht1)) {
                $mandibleteetht1 = str_replace('*', '%', $mandibleteetht1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::MANDIBLETEETHT1, $mandibleteetht1, $comparison);
    }

    /**
     * Filter the query on the MandibleTeethT2 column
     *
     * Example usage:
     * <code>
     * $query->filterByMandibleteetht2('fooValue');   // WHERE MandibleTeethT2 = 'fooValue'
     * $query->filterByMandibleteetht2('%fooValue%'); // WHERE MandibleTeethT2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mandibleteetht2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByMandibleteetht2($mandibleteetht2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mandibleteetht2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mandibleteetht2)) {
                $mandibleteetht2 = str_replace('*', '%', $mandibleteetht2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::MANDIBLETEETHT2, $mandibleteetht2, $comparison);
    }

    /**
     * Filter the query on the MandibleRowsMin column
     *
     * Example usage:
     * <code>
     * $query->filterByMandiblerowsmin(1234); // WHERE MandibleRowsMin = 1234
     * $query->filterByMandiblerowsmin(array(12, 34)); // WHERE MandibleRowsMin IN (12, 34)
     * $query->filterByMandiblerowsmin(array('min' => 12)); // WHERE MandibleRowsMin >= 12
     * $query->filterByMandiblerowsmin(array('max' => 12)); // WHERE MandibleRowsMin <= 12
     * </code>
     *
     * @param     mixed $mandiblerowsmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByMandiblerowsmin($mandiblerowsmin = null, $comparison = null)
    {
        if (is_array($mandiblerowsmin)) {
            $useMinMax = false;
            if (isset($mandiblerowsmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::MANDIBLEROWSMIN, $mandiblerowsmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mandiblerowsmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::MANDIBLEROWSMIN, $mandiblerowsmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::MANDIBLEROWSMIN, $mandiblerowsmin, $comparison);
    }

    /**
     * Filter the query on the MandibleRowsMax column
     *
     * Example usage:
     * <code>
     * $query->filterByMandiblerowsmax(1234); // WHERE MandibleRowsMax = 1234
     * $query->filterByMandiblerowsmax(array(12, 34)); // WHERE MandibleRowsMax IN (12, 34)
     * $query->filterByMandiblerowsmax(array('min' => 12)); // WHERE MandibleRowsMax >= 12
     * $query->filterByMandiblerowsmax(array('max' => 12)); // WHERE MandibleRowsMax <= 12
     * </code>
     *
     * @param     mixed $mandiblerowsmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByMandiblerowsmax($mandiblerowsmax = null, $comparison = null)
    {
        if (is_array($mandiblerowsmax)) {
            $useMinMax = false;
            if (isset($mandiblerowsmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::MANDIBLEROWSMAX, $mandiblerowsmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mandiblerowsmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::MANDIBLEROWSMAX, $mandiblerowsmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::MANDIBLEROWSMAX, $mandiblerowsmax, $comparison);
    }

    /**
     * Filter the query on the MaxillaTeeth column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxillateeth('fooValue');   // WHERE MaxillaTeeth = 'fooValue'
     * $query->filterByMaxillateeth('%fooValue%'); // WHERE MaxillaTeeth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maxillateeth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByMaxillateeth($maxillateeth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maxillateeth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $maxillateeth)) {
                $maxillateeth = str_replace('*', '%', $maxillateeth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::MAXILLATEETH, $maxillateeth, $comparison);
    }

    /**
     * Filter the query on the MaxillaTeethT1 column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxillateetht1('fooValue');   // WHERE MaxillaTeethT1 = 'fooValue'
     * $query->filterByMaxillateetht1('%fooValue%'); // WHERE MaxillaTeethT1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maxillateetht1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByMaxillateetht1($maxillateetht1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maxillateetht1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $maxillateetht1)) {
                $maxillateetht1 = str_replace('*', '%', $maxillateetht1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::MAXILLATEETHT1, $maxillateetht1, $comparison);
    }

    /**
     * Filter the query on the MaxillaTeethT2 column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxillateetht2('fooValue');   // WHERE MaxillaTeethT2 = 'fooValue'
     * $query->filterByMaxillateetht2('%fooValue%'); // WHERE MaxillaTeethT2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maxillateetht2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByMaxillateetht2($maxillateetht2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maxillateetht2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $maxillateetht2)) {
                $maxillateetht2 = str_replace('*', '%', $maxillateetht2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::MAXILLATEETHT2, $maxillateetht2, $comparison);
    }

    /**
     * Filter the query on the MaxillaRowsMin column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxillarowsmin(1234); // WHERE MaxillaRowsMin = 1234
     * $query->filterByMaxillarowsmin(array(12, 34)); // WHERE MaxillaRowsMin IN (12, 34)
     * $query->filterByMaxillarowsmin(array('min' => 12)); // WHERE MaxillaRowsMin >= 12
     * $query->filterByMaxillarowsmin(array('max' => 12)); // WHERE MaxillaRowsMin <= 12
     * </code>
     *
     * @param     mixed $maxillarowsmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByMaxillarowsmin($maxillarowsmin = null, $comparison = null)
    {
        if (is_array($maxillarowsmin)) {
            $useMinMax = false;
            if (isset($maxillarowsmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::MAXILLAROWSMIN, $maxillarowsmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxillarowsmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::MAXILLAROWSMIN, $maxillarowsmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::MAXILLAROWSMIN, $maxillarowsmin, $comparison);
    }

    /**
     * Filter the query on the MaxillaRowsMax column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxillarowsmax(1234); // WHERE MaxillaRowsMax = 1234
     * $query->filterByMaxillarowsmax(array(12, 34)); // WHERE MaxillaRowsMax IN (12, 34)
     * $query->filterByMaxillarowsmax(array('min' => 12)); // WHERE MaxillaRowsMax >= 12
     * $query->filterByMaxillarowsmax(array('max' => 12)); // WHERE MaxillaRowsMax <= 12
     * </code>
     *
     * @param     mixed $maxillarowsmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByMaxillarowsmax($maxillarowsmax = null, $comparison = null)
    {
        if (is_array($maxillarowsmax)) {
            $useMinMax = false;
            if (isset($maxillarowsmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::MAXILLAROWSMAX, $maxillarowsmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxillarowsmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::MAXILLAROWSMAX, $maxillarowsmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::MAXILLAROWSMAX, $maxillarowsmax, $comparison);
    }

    /**
     * Filter the query on the VomerineTeeth column
     *
     * Example usage:
     * <code>
     * $query->filterByVomerineteeth('fooValue');   // WHERE VomerineTeeth = 'fooValue'
     * $query->filterByVomerineteeth('%fooValue%'); // WHERE VomerineTeeth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vomerineteeth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVomerineteeth($vomerineteeth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vomerineteeth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vomerineteeth)) {
                $vomerineteeth = str_replace('*', '%', $vomerineteeth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VOMERINETEETH, $vomerineteeth, $comparison);
    }

    /**
     * Filter the query on the VomerineTeethT1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVomerineteetht1('fooValue');   // WHERE VomerineTeethT1 = 'fooValue'
     * $query->filterByVomerineteetht1('%fooValue%'); // WHERE VomerineTeethT1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vomerineteetht1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVomerineteetht1($vomerineteetht1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vomerineteetht1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vomerineteetht1)) {
                $vomerineteetht1 = str_replace('*', '%', $vomerineteetht1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VOMERINETEETHT1, $vomerineteetht1, $comparison);
    }

    /**
     * Filter the query on the VomerineTeethT2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVomerineteetht2('fooValue');   // WHERE VomerineTeethT2 = 'fooValue'
     * $query->filterByVomerineteetht2('%fooValue%'); // WHERE VomerineTeethT2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vomerineteetht2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVomerineteetht2($vomerineteetht2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vomerineteetht2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vomerineteetht2)) {
                $vomerineteetht2 = str_replace('*', '%', $vomerineteetht2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VOMERINETEETHT2, $vomerineteetht2, $comparison);
    }

    /**
     * Filter the query on the VomerineRowsMin column
     *
     * Example usage:
     * <code>
     * $query->filterByVomerinerowsmin(1234); // WHERE VomerineRowsMin = 1234
     * $query->filterByVomerinerowsmin(array(12, 34)); // WHERE VomerineRowsMin IN (12, 34)
     * $query->filterByVomerinerowsmin(array('min' => 12)); // WHERE VomerineRowsMin >= 12
     * $query->filterByVomerinerowsmin(array('max' => 12)); // WHERE VomerineRowsMin <= 12
     * </code>
     *
     * @param     mixed $vomerinerowsmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVomerinerowsmin($vomerinerowsmin = null, $comparison = null)
    {
        if (is_array($vomerinerowsmin)) {
            $useMinMax = false;
            if (isset($vomerinerowsmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::VOMERINEROWSMIN, $vomerinerowsmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vomerinerowsmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::VOMERINEROWSMIN, $vomerinerowsmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VOMERINEROWSMIN, $vomerinerowsmin, $comparison);
    }

    /**
     * Filter the query on the VomerineRowsMax column
     *
     * Example usage:
     * <code>
     * $query->filterByVomerinerowsmax(1234); // WHERE VomerineRowsMax = 1234
     * $query->filterByVomerinerowsmax(array(12, 34)); // WHERE VomerineRowsMax IN (12, 34)
     * $query->filterByVomerinerowsmax(array('min' => 12)); // WHERE VomerineRowsMax >= 12
     * $query->filterByVomerinerowsmax(array('max' => 12)); // WHERE VomerineRowsMax <= 12
     * </code>
     *
     * @param     mixed $vomerinerowsmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVomerinerowsmax($vomerinerowsmax = null, $comparison = null)
    {
        if (is_array($vomerinerowsmax)) {
            $useMinMax = false;
            if (isset($vomerinerowsmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::VOMERINEROWSMAX, $vomerinerowsmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vomerinerowsmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::VOMERINEROWSMAX, $vomerinerowsmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VOMERINEROWSMAX, $vomerinerowsmax, $comparison);
    }

    /**
     * Filter the query on the Palatine column
     *
     * Example usage:
     * <code>
     * $query->filterByPalatine('fooValue');   // WHERE Palatine = 'fooValue'
     * $query->filterByPalatine('%fooValue%'); // WHERE Palatine LIKE '%fooValue%'
     * </code>
     *
     * @param     string $palatine The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPalatine($palatine = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($palatine)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $palatine)) {
                $palatine = str_replace('*', '%', $palatine);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PALATINE, $palatine, $comparison);
    }

    /**
     * Filter the query on the PalatineTeethT1 column
     *
     * Example usage:
     * <code>
     * $query->filterByPalatineteetht1('fooValue');   // WHERE PalatineTeethT1 = 'fooValue'
     * $query->filterByPalatineteetht1('%fooValue%'); // WHERE PalatineTeethT1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $palatineteetht1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPalatineteetht1($palatineteetht1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($palatineteetht1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $palatineteetht1)) {
                $palatineteetht1 = str_replace('*', '%', $palatineteetht1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PALATINETEETHT1, $palatineteetht1, $comparison);
    }

    /**
     * Filter the query on the PalatineTeethT2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPalatineteetht2('fooValue');   // WHERE PalatineTeethT2 = 'fooValue'
     * $query->filterByPalatineteetht2('%fooValue%'); // WHERE PalatineTeethT2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $palatineteetht2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPalatineteetht2($palatineteetht2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($palatineteetht2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $palatineteetht2)) {
                $palatineteetht2 = str_replace('*', '%', $palatineteetht2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PALATINETEETHT2, $palatineteetht2, $comparison);
    }

    /**
     * Filter the query on the PalatineRowsMin column
     *
     * Example usage:
     * <code>
     * $query->filterByPalatinerowsmin(1234); // WHERE PalatineRowsMin = 1234
     * $query->filterByPalatinerowsmin(array(12, 34)); // WHERE PalatineRowsMin IN (12, 34)
     * $query->filterByPalatinerowsmin(array('min' => 12)); // WHERE PalatineRowsMin >= 12
     * $query->filterByPalatinerowsmin(array('max' => 12)); // WHERE PalatineRowsMin <= 12
     * </code>
     *
     * @param     mixed $palatinerowsmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPalatinerowsmin($palatinerowsmin = null, $comparison = null)
    {
        if (is_array($palatinerowsmin)) {
            $useMinMax = false;
            if (isset($palatinerowsmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::PALATINEROWSMIN, $palatinerowsmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($palatinerowsmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::PALATINEROWSMIN, $palatinerowsmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PALATINEROWSMIN, $palatinerowsmin, $comparison);
    }

    /**
     * Filter the query on the PalatineRowsMax column
     *
     * Example usage:
     * <code>
     * $query->filterByPalatinerowsmax(1234); // WHERE PalatineRowsMax = 1234
     * $query->filterByPalatinerowsmax(array(12, 34)); // WHERE PalatineRowsMax IN (12, 34)
     * $query->filterByPalatinerowsmax(array('min' => 12)); // WHERE PalatineRowsMax >= 12
     * $query->filterByPalatinerowsmax(array('max' => 12)); // WHERE PalatineRowsMax <= 12
     * </code>
     *
     * @param     mixed $palatinerowsmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPalatinerowsmax($palatinerowsmax = null, $comparison = null)
    {
        if (is_array($palatinerowsmax)) {
            $useMinMax = false;
            if (isset($palatinerowsmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::PALATINEROWSMAX, $palatinerowsmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($palatinerowsmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::PALATINEROWSMAX, $palatinerowsmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PALATINEROWSMAX, $palatinerowsmax, $comparison);
    }

    /**
     * Filter the query on the PharyngealTeeth column
     *
     * Example usage:
     * <code>
     * $query->filterByPharyngealteeth('fooValue');   // WHERE PharyngealTeeth = 'fooValue'
     * $query->filterByPharyngealteeth('%fooValue%'); // WHERE PharyngealTeeth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pharyngealteeth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPharyngealteeth($pharyngealteeth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pharyngealteeth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pharyngealteeth)) {
                $pharyngealteeth = str_replace('*', '%', $pharyngealteeth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PHARYNGEALTEETH, $pharyngealteeth, $comparison);
    }

    /**
     * Filter the query on the PharyngealTeethT1 column
     *
     * Example usage:
     * <code>
     * $query->filterByPharyngealteetht1('fooValue');   // WHERE PharyngealTeethT1 = 'fooValue'
     * $query->filterByPharyngealteetht1('%fooValue%'); // WHERE PharyngealTeethT1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pharyngealteetht1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPharyngealteetht1($pharyngealteetht1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pharyngealteetht1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pharyngealteetht1)) {
                $pharyngealteetht1 = str_replace('*', '%', $pharyngealteetht1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PHARYNGEALTEETHT1, $pharyngealteetht1, $comparison);
    }

    /**
     * Filter the query on the PharyngealTeethT2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPharyngealteetht2('fooValue');   // WHERE PharyngealTeethT2 = 'fooValue'
     * $query->filterByPharyngealteetht2('%fooValue%'); // WHERE PharyngealTeethT2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pharyngealteetht2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPharyngealteetht2($pharyngealteetht2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pharyngealteetht2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pharyngealteetht2)) {
                $pharyngealteetht2 = str_replace('*', '%', $pharyngealteetht2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PHARYNGEALTEETHT2, $pharyngealteetht2, $comparison);
    }

    /**
     * Filter the query on the PharyngealRowsMin column
     *
     * Example usage:
     * <code>
     * $query->filterByPharyngealrowsmin(1234); // WHERE PharyngealRowsMin = 1234
     * $query->filterByPharyngealrowsmin(array(12, 34)); // WHERE PharyngealRowsMin IN (12, 34)
     * $query->filterByPharyngealrowsmin(array('min' => 12)); // WHERE PharyngealRowsMin >= 12
     * $query->filterByPharyngealrowsmin(array('max' => 12)); // WHERE PharyngealRowsMin <= 12
     * </code>
     *
     * @param     mixed $pharyngealrowsmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPharyngealrowsmin($pharyngealrowsmin = null, $comparison = null)
    {
        if (is_array($pharyngealrowsmin)) {
            $useMinMax = false;
            if (isset($pharyngealrowsmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::PHARYNGEALROWSMIN, $pharyngealrowsmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pharyngealrowsmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::PHARYNGEALROWSMIN, $pharyngealrowsmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PHARYNGEALROWSMIN, $pharyngealrowsmin, $comparison);
    }

    /**
     * Filter the query on the PharyngealRowsMax column
     *
     * Example usage:
     * <code>
     * $query->filterByPharyngealrowsmax(1234); // WHERE PharyngealRowsMax = 1234
     * $query->filterByPharyngealrowsmax(array(12, 34)); // WHERE PharyngealRowsMax IN (12, 34)
     * $query->filterByPharyngealrowsmax(array('min' => 12)); // WHERE PharyngealRowsMax >= 12
     * $query->filterByPharyngealrowsmax(array('max' => 12)); // WHERE PharyngealRowsMax <= 12
     * </code>
     *
     * @param     mixed $pharyngealrowsmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPharyngealrowsmax($pharyngealrowsmax = null, $comparison = null)
    {
        if (is_array($pharyngealrowsmax)) {
            $useMinMax = false;
            if (isset($pharyngealrowsmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::PHARYNGEALROWSMAX, $pharyngealrowsmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pharyngealrowsmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::PHARYNGEALROWSMAX, $pharyngealrowsmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PHARYNGEALROWSMAX, $pharyngealrowsmax, $comparison);
    }

    /**
     * Filter the query on the TeethonTongue column
     *
     * Example usage:
     * <code>
     * $query->filterByTeethontongue('fooValue');   // WHERE TeethonTongue = 'fooValue'
     * $query->filterByTeethontongue('%fooValue%'); // WHERE TeethonTongue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $teethontongue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByTeethontongue($teethontongue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($teethontongue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $teethontongue)) {
                $teethontongue = str_replace('*', '%', $teethontongue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::TEETHONTONGUE, $teethontongue, $comparison);
    }

    /**
     * Filter the query on the Lipsteeth column
     *
     * Example usage:
     * <code>
     * $query->filterByLipsteeth('fooValue');   // WHERE Lipsteeth = 'fooValue'
     * $query->filterByLipsteeth('%fooValue%'); // WHERE Lipsteeth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lipsteeth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByLipsteeth($lipsteeth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lipsteeth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lipsteeth)) {
                $lipsteeth = str_replace('*', '%', $lipsteeth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::LIPSTEETH, $lipsteeth, $comparison);
    }

    /**
     * Filter the query on the DermalTeeth column
     *
     * Example usage:
     * <code>
     * $query->filterByDermalteeth('fooValue');   // WHERE DermalTeeth = 'fooValue'
     * $query->filterByDermalteeth('%fooValue%'); // WHERE DermalTeeth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dermalteeth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDermalteeth($dermalteeth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dermalteeth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dermalteeth)) {
                $dermalteeth = str_replace('*', '%', $dermalteeth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DERMALTEETH, $dermalteeth, $comparison);
    }

    /**
     * Filter the query on the CommentonTeeth column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentonteeth('fooValue');   // WHERE CommentonTeeth = 'fooValue'
     * $query->filterByCommentonteeth('%fooValue%'); // WHERE CommentonTeeth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentonteeth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByCommentonteeth($commentonteeth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentonteeth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentonteeth)) {
                $commentonteeth = str_replace('*', '%', $commentonteeth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::COMMENTONTEETH, $commentonteeth, $comparison);
    }

    /**
     * Filter the query on the TypeofScales column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeofscales('fooValue');   // WHERE TypeofScales = 'fooValue'
     * $query->filterByTypeofscales('%fooValue%'); // WHERE TypeofScales LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeofscales The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByTypeofscales($typeofscales = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeofscales)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeofscales)) {
                $typeofscales = str_replace('*', '%', $typeofscales);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::TYPEOFSCALES, $typeofscales, $comparison);
    }

    /**
     * Filter the query on the Scutes column
     *
     * Example usage:
     * <code>
     * $query->filterByScutes('fooValue');   // WHERE Scutes = 'fooValue'
     * $query->filterByScutes('%fooValue%'); // WHERE Scutes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scutes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByScutes($scutes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scutes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $scutes)) {
                $scutes = str_replace('*', '%', $scutes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SCUTES, $scutes, $comparison);
    }

    /**
     * Filter the query on the Keels column
     *
     * Example usage:
     * <code>
     * $query->filterByKeels(1234); // WHERE Keels = 1234
     * $query->filterByKeels(array(12, 34)); // WHERE Keels IN (12, 34)
     * $query->filterByKeels(array('min' => 12)); // WHERE Keels >= 12
     * $query->filterByKeels(array('max' => 12)); // WHERE Keels <= 12
     * </code>
     *
     * @param     mixed $keels The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByKeels($keels = null, $comparison = null)
    {
        if (is_array($keels)) {
            $useMinMax = false;
            if (isset($keels['min'])) {
                $this->addUsingAlias(MorphdatPeer::KEELS, $keels['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($keels['max'])) {
                $this->addUsingAlias(MorphdatPeer::KEELS, $keels['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::KEELS, $keels, $comparison);
    }

    /**
     * Filter the query on the HorStripesTTI column
     *
     * Example usage:
     * <code>
     * $query->filterByHorstripestti('fooValue');   // WHERE HorStripesTTI = 'fooValue'
     * $query->filterByHorstripestti('%fooValue%'); // WHERE HorStripesTTI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $horstripestti The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByHorstripestti($horstripestti = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($horstripestti)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $horstripestti)) {
                $horstripestti = str_replace('*', '%', $horstripestti);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::HORSTRIPESTTI, $horstripestti, $comparison);
    }

    /**
     * Filter the query on the HorStripesTTII column
     *
     * Example usage:
     * <code>
     * $query->filterByHorstripesttii('fooValue');   // WHERE HorStripesTTII = 'fooValue'
     * $query->filterByHorstripesttii('%fooValue%'); // WHERE HorStripesTTII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $horstripesttii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByHorstripesttii($horstripesttii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($horstripesttii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $horstripesttii)) {
                $horstripesttii = str_replace('*', '%', $horstripesttii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::HORSTRIPESTTII, $horstripesttii, $comparison);
    }

    /**
     * Filter the query on the VerStripesTTI column
     *
     * Example usage:
     * <code>
     * $query->filterByVerstripestti('fooValue');   // WHERE VerStripesTTI = 'fooValue'
     * $query->filterByVerstripestti('%fooValue%'); // WHERE VerStripesTTI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verstripestti The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVerstripestti($verstripestti = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verstripestti)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verstripestti)) {
                $verstripestti = str_replace('*', '%', $verstripestti);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VERSTRIPESTTI, $verstripestti, $comparison);
    }

    /**
     * Filter the query on the VerStripesTTII column
     *
     * Example usage:
     * <code>
     * $query->filterByVerstripesttii('fooValue');   // WHERE VerStripesTTII = 'fooValue'
     * $query->filterByVerstripesttii('%fooValue%'); // WHERE VerStripesTTII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verstripesttii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVerstripesttii($verstripesttii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verstripesttii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verstripesttii)) {
                $verstripesttii = str_replace('*', '%', $verstripesttii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VERSTRIPESTTII, $verstripesttii, $comparison);
    }

    /**
     * Filter the query on the VerStripesTTIII column
     *
     * Example usage:
     * <code>
     * $query->filterByVerstripesttiii('fooValue');   // WHERE VerStripesTTIII = 'fooValue'
     * $query->filterByVerstripesttiii('%fooValue%'); // WHERE VerStripesTTIII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verstripesttiii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVerstripesttiii($verstripesttiii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verstripesttiii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verstripesttiii)) {
                $verstripesttiii = str_replace('*', '%', $verstripesttiii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VERSTRIPESTTIII, $verstripesttiii, $comparison);
    }

    /**
     * Filter the query on the DiaStripesTTI column
     *
     * Example usage:
     * <code>
     * $query->filterByDiastripestti('fooValue');   // WHERE DiaStripesTTI = 'fooValue'
     * $query->filterByDiastripestti('%fooValue%'); // WHERE DiaStripesTTI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diastripestti The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDiastripestti($diastripestti = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diastripestti)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $diastripestti)) {
                $diastripestti = str_replace('*', '%', $diastripestti);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DIASTRIPESTTI, $diastripestti, $comparison);
    }

    /**
     * Filter the query on the DiaStripesTTII column
     *
     * Example usage:
     * <code>
     * $query->filterByDiastripesttii('fooValue');   // WHERE DiaStripesTTII = 'fooValue'
     * $query->filterByDiastripesttii('%fooValue%'); // WHERE DiaStripesTTII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diastripesttii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDiastripesttii($diastripesttii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diastripesttii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $diastripesttii)) {
                $diastripesttii = str_replace('*', '%', $diastripesttii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DIASTRIPESTTII, $diastripesttii, $comparison);
    }

    /**
     * Filter the query on the DiaStripesTTIII column
     *
     * Example usage:
     * <code>
     * $query->filterByDiastripesttiii('fooValue');   // WHERE DiaStripesTTIII = 'fooValue'
     * $query->filterByDiastripesttiii('%fooValue%'); // WHERE DiaStripesTTIII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diastripesttiii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDiastripesttiii($diastripesttiii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diastripesttiii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $diastripesttiii)) {
                $diastripesttiii = str_replace('*', '%', $diastripesttiii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DIASTRIPESTTIII, $diastripesttiii, $comparison);
    }

    /**
     * Filter the query on the CurStripesTTI column
     *
     * Example usage:
     * <code>
     * $query->filterByCurstripestti('fooValue');   // WHERE CurStripesTTI = 'fooValue'
     * $query->filterByCurstripestti('%fooValue%'); // WHERE CurStripesTTI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $curstripestti The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByCurstripestti($curstripestti = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($curstripestti)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $curstripestti)) {
                $curstripestti = str_replace('*', '%', $curstripestti);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::CURSTRIPESTTI, $curstripestti, $comparison);
    }

    /**
     * Filter the query on the CurStripesTTII column
     *
     * Example usage:
     * <code>
     * $query->filterByCurstripesttii('fooValue');   // WHERE CurStripesTTII = 'fooValue'
     * $query->filterByCurstripesttii('%fooValue%'); // WHERE CurStripesTTII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $curstripesttii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByCurstripesttii($curstripesttii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($curstripesttii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $curstripesttii)) {
                $curstripesttii = str_replace('*', '%', $curstripesttii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::CURSTRIPESTTII, $curstripesttii, $comparison);
    }

    /**
     * Filter the query on the CurStripesTTIII column
     *
     * Example usage:
     * <code>
     * $query->filterByCurstripesttiii('fooValue');   // WHERE CurStripesTTIII = 'fooValue'
     * $query->filterByCurstripesttiii('%fooValue%'); // WHERE CurStripesTTIII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $curstripesttiii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByCurstripesttiii($curstripesttiii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($curstripesttiii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $curstripesttiii)) {
                $curstripesttiii = str_replace('*', '%', $curstripesttiii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::CURSTRIPESTTIII, $curstripesttiii, $comparison);
    }

    /**
     * Filter the query on the SpotsTTI column
     *
     * Example usage:
     * <code>
     * $query->filterBySpotstti('fooValue');   // WHERE SpotsTTI = 'fooValue'
     * $query->filterBySpotstti('%fooValue%'); // WHERE SpotsTTI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spotstti The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterBySpotstti($spotstti = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spotstti)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spotstti)) {
                $spotstti = str_replace('*', '%', $spotstti);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SPOTSTTI, $spotstti, $comparison);
    }

    /**
     * Filter the query on the SpotsTTII column
     *
     * Example usage:
     * <code>
     * $query->filterBySpotsttii('fooValue');   // WHERE SpotsTTII = 'fooValue'
     * $query->filterBySpotsttii('%fooValue%'); // WHERE SpotsTTII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spotsttii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterBySpotsttii($spotsttii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spotsttii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spotsttii)) {
                $spotsttii = str_replace('*', '%', $spotsttii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SPOTSTTII, $spotsttii, $comparison);
    }

    /**
     * Filter the query on the SpotsTTIII column
     *
     * Example usage:
     * <code>
     * $query->filterBySpotsttiii('fooValue');   // WHERE SpotsTTIII = 'fooValue'
     * $query->filterBySpotsttiii('%fooValue%'); // WHERE SpotsTTIII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spotsttiii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterBySpotsttiii($spotsttiii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spotsttiii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spotsttiii)) {
                $spotsttiii = str_replace('*', '%', $spotsttiii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SPOTSTTIII, $spotsttiii, $comparison);
    }

    /**
     * Filter the query on the DorsalFinI column
     *
     * Example usage:
     * <code>
     * $query->filterByDorsalfini('fooValue');   // WHERE DorsalFinI = 'fooValue'
     * $query->filterByDorsalfini('%fooValue%'); // WHERE DorsalFinI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dorsalfini The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDorsalfini($dorsalfini = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dorsalfini)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dorsalfini)) {
                $dorsalfini = str_replace('*', '%', $dorsalfini);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DORSALFINI, $dorsalfini, $comparison);
    }

    /**
     * Filter the query on the DorsalFinII column
     *
     * Example usage:
     * <code>
     * $query->filterByDorsalfinii('fooValue');   // WHERE DorsalFinII = 'fooValue'
     * $query->filterByDorsalfinii('%fooValue%'); // WHERE DorsalFinII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dorsalfinii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDorsalfinii($dorsalfinii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dorsalfinii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dorsalfinii)) {
                $dorsalfinii = str_replace('*', '%', $dorsalfinii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DORSALFINII, $dorsalfinii, $comparison);
    }

    /**
     * Filter the query on the CaudalFinI column
     *
     * Example usage:
     * <code>
     * $query->filterByCaudalfini('fooValue');   // WHERE CaudalFinI = 'fooValue'
     * $query->filterByCaudalfini('%fooValue%'); // WHERE CaudalFinI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $caudalfini The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByCaudalfini($caudalfini = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($caudalfini)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $caudalfini)) {
                $caudalfini = str_replace('*', '%', $caudalfini);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::CAUDALFINI, $caudalfini, $comparison);
    }

    /**
     * Filter the query on the CaudalFinII column
     *
     * Example usage:
     * <code>
     * $query->filterByCaudalfinii('fooValue');   // WHERE CaudalFinII = 'fooValue'
     * $query->filterByCaudalfinii('%fooValue%'); // WHERE CaudalFinII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $caudalfinii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByCaudalfinii($caudalfinii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($caudalfinii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $caudalfinii)) {
                $caudalfinii = str_replace('*', '%', $caudalfinii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::CAUDALFINII, $caudalfinii, $comparison);
    }

    /**
     * Filter the query on the AnalFinI column
     *
     * Example usage:
     * <code>
     * $query->filterByAnalfini('fooValue');   // WHERE AnalFinI = 'fooValue'
     * $query->filterByAnalfini('%fooValue%'); // WHERE AnalFinI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $analfini The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByAnalfini($analfini = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($analfini)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $analfini)) {
                $analfini = str_replace('*', '%', $analfini);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::ANALFINI, $analfini, $comparison);
    }

    /**
     * Filter the query on the AnalFinII column
     *
     * Example usage:
     * <code>
     * $query->filterByAnalfinii('fooValue');   // WHERE AnalFinII = 'fooValue'
     * $query->filterByAnalfinii('%fooValue%'); // WHERE AnalFinII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $analfinii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByAnalfinii($analfinii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($analfinii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $analfinii)) {
                $analfinii = str_replace('*', '%', $analfinii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::ANALFINII, $analfinii, $comparison);
    }

    /**
     * Filter the query on the LateralLinesNo column
     *
     * Example usage:
     * <code>
     * $query->filterByLaterallinesno(1234); // WHERE LateralLinesNo = 1234
     * $query->filterByLaterallinesno(array(12, 34)); // WHERE LateralLinesNo IN (12, 34)
     * $query->filterByLaterallinesno(array('min' => 12)); // WHERE LateralLinesNo >= 12
     * $query->filterByLaterallinesno(array('max' => 12)); // WHERE LateralLinesNo <= 12
     * </code>
     *
     * @param     mixed $laterallinesno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByLaterallinesno($laterallinesno = null, $comparison = null)
    {
        if (is_array($laterallinesno)) {
            $useMinMax = false;
            if (isset($laterallinesno['min'])) {
                $this->addUsingAlias(MorphdatPeer::LATERALLINESNO, $laterallinesno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($laterallinesno['max'])) {
                $this->addUsingAlias(MorphdatPeer::LATERALLINESNO, $laterallinesno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::LATERALLINESNO, $laterallinesno, $comparison);
    }

    /**
     * Filter the query on the LLinterrupted column
     *
     * Example usage:
     * <code>
     * $query->filterByLlinterrupted(true); // WHERE LLinterrupted = true
     * $query->filterByLlinterrupted('yes'); // WHERE LLinterrupted = true
     * </code>
     *
     * @param     boolean|string $llinterrupted The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByLlinterrupted($llinterrupted = null, $comparison = null)
    {
        if (is_string($llinterrupted)) {
            $llinterrupted = in_array(strtolower($llinterrupted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(MorphdatPeer::LLINTERRUPTED, $llinterrupted, $comparison);
    }

    /**
     * Filter the query on the ScalesLateralmin column
     *
     * Example usage:
     * <code>
     * $query->filterByScaleslateralmin(1234); // WHERE ScalesLateralmin = 1234
     * $query->filterByScaleslateralmin(array(12, 34)); // WHERE ScalesLateralmin IN (12, 34)
     * $query->filterByScaleslateralmin(array('min' => 12)); // WHERE ScalesLateralmin >= 12
     * $query->filterByScaleslateralmin(array('max' => 12)); // WHERE ScalesLateralmin <= 12
     * </code>
     *
     * @param     mixed $scaleslateralmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByScaleslateralmin($scaleslateralmin = null, $comparison = null)
    {
        if (is_array($scaleslateralmin)) {
            $useMinMax = false;
            if (isset($scaleslateralmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::SCALESLATERALMIN, $scaleslateralmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scaleslateralmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::SCALESLATERALMIN, $scaleslateralmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SCALESLATERALMIN, $scaleslateralmin, $comparison);
    }

    /**
     * Filter the query on the ScalesLateralmax column
     *
     * Example usage:
     * <code>
     * $query->filterByScaleslateralmax(1234); // WHERE ScalesLateralmax = 1234
     * $query->filterByScaleslateralmax(array(12, 34)); // WHERE ScalesLateralmax IN (12, 34)
     * $query->filterByScaleslateralmax(array('min' => 12)); // WHERE ScalesLateralmax >= 12
     * $query->filterByScaleslateralmax(array('max' => 12)); // WHERE ScalesLateralmax <= 12
     * </code>
     *
     * @param     mixed $scaleslateralmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByScaleslateralmax($scaleslateralmax = null, $comparison = null)
    {
        if (is_array($scaleslateralmax)) {
            $useMinMax = false;
            if (isset($scaleslateralmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::SCALESLATERALMAX, $scaleslateralmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scaleslateralmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::SCALESLATERALMAX, $scaleslateralmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SCALESLATERALMAX, $scaleslateralmax, $comparison);
    }

    /**
     * Filter the query on the PoredScalesMin column
     *
     * Example usage:
     * <code>
     * $query->filterByPoredscalesmin(1234); // WHERE PoredScalesMin = 1234
     * $query->filterByPoredscalesmin(array(12, 34)); // WHERE PoredScalesMin IN (12, 34)
     * $query->filterByPoredscalesmin(array('min' => 12)); // WHERE PoredScalesMin >= 12
     * $query->filterByPoredscalesmin(array('max' => 12)); // WHERE PoredScalesMin <= 12
     * </code>
     *
     * @param     mixed $poredscalesmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPoredscalesmin($poredscalesmin = null, $comparison = null)
    {
        if (is_array($poredscalesmin)) {
            $useMinMax = false;
            if (isset($poredscalesmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::POREDSCALESMIN, $poredscalesmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($poredscalesmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::POREDSCALESMIN, $poredscalesmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::POREDSCALESMIN, $poredscalesmin, $comparison);
    }

    /**
     * Filter the query on the PoredScalesMax column
     *
     * Example usage:
     * <code>
     * $query->filterByPoredscalesmax(1234); // WHERE PoredScalesMax = 1234
     * $query->filterByPoredscalesmax(array(12, 34)); // WHERE PoredScalesMax IN (12, 34)
     * $query->filterByPoredscalesmax(array('min' => 12)); // WHERE PoredScalesMax >= 12
     * $query->filterByPoredscalesmax(array('max' => 12)); // WHERE PoredScalesMax <= 12
     * </code>
     *
     * @param     mixed $poredscalesmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPoredscalesmax($poredscalesmax = null, $comparison = null)
    {
        if (is_array($poredscalesmax)) {
            $useMinMax = false;
            if (isset($poredscalesmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::POREDSCALESMAX, $poredscalesmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($poredscalesmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::POREDSCALESMAX, $poredscalesmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::POREDSCALESMAX, $poredscalesmax, $comparison);
    }

    /**
     * Filter the query on the LatSeriesMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLatseriesmin(1234); // WHERE LatSeriesMin = 1234
     * $query->filterByLatseriesmin(array(12, 34)); // WHERE LatSeriesMin IN (12, 34)
     * $query->filterByLatseriesmin(array('min' => 12)); // WHERE LatSeriesMin >= 12
     * $query->filterByLatseriesmin(array('max' => 12)); // WHERE LatSeriesMin <= 12
     * </code>
     *
     * @param     mixed $latseriesmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByLatseriesmin($latseriesmin = null, $comparison = null)
    {
        if (is_array($latseriesmin)) {
            $useMinMax = false;
            if (isset($latseriesmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::LATSERIESMIN, $latseriesmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latseriesmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::LATSERIESMIN, $latseriesmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::LATSERIESMIN, $latseriesmin, $comparison);
    }

    /**
     * Filter the query on the LatSeriesMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLatseriesmax(1234); // WHERE LatSeriesMax = 1234
     * $query->filterByLatseriesmax(array(12, 34)); // WHERE LatSeriesMax IN (12, 34)
     * $query->filterByLatseriesmax(array('min' => 12)); // WHERE LatSeriesMax >= 12
     * $query->filterByLatseriesmax(array('max' => 12)); // WHERE LatSeriesMax <= 12
     * </code>
     *
     * @param     mixed $latseriesmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByLatseriesmax($latseriesmax = null, $comparison = null)
    {
        if (is_array($latseriesmax)) {
            $useMinMax = false;
            if (isset($latseriesmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::LATSERIESMAX, $latseriesmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latseriesmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::LATSERIESMAX, $latseriesmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::LATSERIESMAX, $latseriesmax, $comparison);
    }

    /**
     * Filter the query on the ScaleRowsAboveMin column
     *
     * Example usage:
     * <code>
     * $query->filterByScalerowsabovemin(1234); // WHERE ScaleRowsAboveMin = 1234
     * $query->filterByScalerowsabovemin(array(12, 34)); // WHERE ScaleRowsAboveMin IN (12, 34)
     * $query->filterByScalerowsabovemin(array('min' => 12)); // WHERE ScaleRowsAboveMin >= 12
     * $query->filterByScalerowsabovemin(array('max' => 12)); // WHERE ScaleRowsAboveMin <= 12
     * </code>
     *
     * @param     mixed $scalerowsabovemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByScalerowsabovemin($scalerowsabovemin = null, $comparison = null)
    {
        if (is_array($scalerowsabovemin)) {
            $useMinMax = false;
            if (isset($scalerowsabovemin['min'])) {
                $this->addUsingAlias(MorphdatPeer::SCALEROWSABOVEMIN, $scalerowsabovemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scalerowsabovemin['max'])) {
                $this->addUsingAlias(MorphdatPeer::SCALEROWSABOVEMIN, $scalerowsabovemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SCALEROWSABOVEMIN, $scalerowsabovemin, $comparison);
    }

    /**
     * Filter the query on the ScaleRowsAboveMax column
     *
     * Example usage:
     * <code>
     * $query->filterByScalerowsabovemax(1234); // WHERE ScaleRowsAboveMax = 1234
     * $query->filterByScalerowsabovemax(array(12, 34)); // WHERE ScaleRowsAboveMax IN (12, 34)
     * $query->filterByScalerowsabovemax(array('min' => 12)); // WHERE ScaleRowsAboveMax >= 12
     * $query->filterByScalerowsabovemax(array('max' => 12)); // WHERE ScaleRowsAboveMax <= 12
     * </code>
     *
     * @param     mixed $scalerowsabovemax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByScalerowsabovemax($scalerowsabovemax = null, $comparison = null)
    {
        if (is_array($scalerowsabovemax)) {
            $useMinMax = false;
            if (isset($scalerowsabovemax['min'])) {
                $this->addUsingAlias(MorphdatPeer::SCALEROWSABOVEMAX, $scalerowsabovemax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scalerowsabovemax['max'])) {
                $this->addUsingAlias(MorphdatPeer::SCALEROWSABOVEMAX, $scalerowsabovemax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SCALEROWSABOVEMAX, $scalerowsabovemax, $comparison);
    }

    /**
     * Filter the query on the ScaleRowsBelowMin column
     *
     * Example usage:
     * <code>
     * $query->filterByScalerowsbelowmin(1234); // WHERE ScaleRowsBelowMin = 1234
     * $query->filterByScalerowsbelowmin(array(12, 34)); // WHERE ScaleRowsBelowMin IN (12, 34)
     * $query->filterByScalerowsbelowmin(array('min' => 12)); // WHERE ScaleRowsBelowMin >= 12
     * $query->filterByScalerowsbelowmin(array('max' => 12)); // WHERE ScaleRowsBelowMin <= 12
     * </code>
     *
     * @param     mixed $scalerowsbelowmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByScalerowsbelowmin($scalerowsbelowmin = null, $comparison = null)
    {
        if (is_array($scalerowsbelowmin)) {
            $useMinMax = false;
            if (isset($scalerowsbelowmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::SCALEROWSBELOWMIN, $scalerowsbelowmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scalerowsbelowmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::SCALEROWSBELOWMIN, $scalerowsbelowmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SCALEROWSBELOWMIN, $scalerowsbelowmin, $comparison);
    }

    /**
     * Filter the query on the ScaleRowsBelowMax column
     *
     * Example usage:
     * <code>
     * $query->filterByScalerowsbelowmax(1234); // WHERE ScaleRowsBelowMax = 1234
     * $query->filterByScalerowsbelowmax(array(12, 34)); // WHERE ScaleRowsBelowMax IN (12, 34)
     * $query->filterByScalerowsbelowmax(array('min' => 12)); // WHERE ScaleRowsBelowMax >= 12
     * $query->filterByScalerowsbelowmax(array('max' => 12)); // WHERE ScaleRowsBelowMax <= 12
     * </code>
     *
     * @param     mixed $scalerowsbelowmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByScalerowsbelowmax($scalerowsbelowmax = null, $comparison = null)
    {
        if (is_array($scalerowsbelowmax)) {
            $useMinMax = false;
            if (isset($scalerowsbelowmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::SCALEROWSBELOWMAX, $scalerowsbelowmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scalerowsbelowmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::SCALEROWSBELOWMAX, $scalerowsbelowmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SCALEROWSBELOWMAX, $scalerowsbelowmax, $comparison);
    }

    /**
     * Filter the query on the ScalesPeduncMin column
     *
     * Example usage:
     * <code>
     * $query->filterByScalespeduncmin(1234); // WHERE ScalesPeduncMin = 1234
     * $query->filterByScalespeduncmin(array(12, 34)); // WHERE ScalesPeduncMin IN (12, 34)
     * $query->filterByScalespeduncmin(array('min' => 12)); // WHERE ScalesPeduncMin >= 12
     * $query->filterByScalespeduncmin(array('max' => 12)); // WHERE ScalesPeduncMin <= 12
     * </code>
     *
     * @param     mixed $scalespeduncmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByScalespeduncmin($scalespeduncmin = null, $comparison = null)
    {
        if (is_array($scalespeduncmin)) {
            $useMinMax = false;
            if (isset($scalespeduncmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::SCALESPEDUNCMIN, $scalespeduncmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scalespeduncmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::SCALESPEDUNCMIN, $scalespeduncmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SCALESPEDUNCMIN, $scalespeduncmin, $comparison);
    }

    /**
     * Filter the query on the ScalesPeduncMax column
     *
     * Example usage:
     * <code>
     * $query->filterByScalespeduncmax(1234); // WHERE ScalesPeduncMax = 1234
     * $query->filterByScalespeduncmax(array(12, 34)); // WHERE ScalesPeduncMax IN (12, 34)
     * $query->filterByScalespeduncmax(array('min' => 12)); // WHERE ScalesPeduncMax >= 12
     * $query->filterByScalespeduncmax(array('max' => 12)); // WHERE ScalesPeduncMax <= 12
     * </code>
     *
     * @param     mixed $scalespeduncmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByScalespeduncmax($scalespeduncmax = null, $comparison = null)
    {
        if (is_array($scalespeduncmax)) {
            $useMinMax = false;
            if (isset($scalespeduncmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::SCALESPEDUNCMAX, $scalespeduncmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scalespeduncmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::SCALESPEDUNCMAX, $scalespeduncmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SCALESPEDUNCMAX, $scalespeduncmax, $comparison);
    }

    /**
     * Filter the query on the BarbelsNo column
     *
     * Example usage:
     * <code>
     * $query->filterByBarbelsno(1234); // WHERE BarbelsNo = 1234
     * $query->filterByBarbelsno(array(12, 34)); // WHERE BarbelsNo IN (12, 34)
     * $query->filterByBarbelsno(array('min' => 12)); // WHERE BarbelsNo >= 12
     * $query->filterByBarbelsno(array('max' => 12)); // WHERE BarbelsNo <= 12
     * </code>
     *
     * @param     mixed $barbelsno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByBarbelsno($barbelsno = null, $comparison = null)
    {
        if (is_array($barbelsno)) {
            $useMinMax = false;
            if (isset($barbelsno['min'])) {
                $this->addUsingAlias(MorphdatPeer::BARBELSNO, $barbelsno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($barbelsno['max'])) {
                $this->addUsingAlias(MorphdatPeer::BARBELSNO, $barbelsno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::BARBELSNO, $barbelsno, $comparison);
    }

    /**
     * Filter the query on the BarbelsType column
     *
     * Example usage:
     * <code>
     * $query->filterByBarbelstype('fooValue');   // WHERE BarbelsType = 'fooValue'
     * $query->filterByBarbelstype('%fooValue%'); // WHERE BarbelsType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $barbelstype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByBarbelstype($barbelstype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($barbelstype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $barbelstype)) {
                $barbelstype = str_replace('*', '%', $barbelstype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::BARBELSTYPE, $barbelstype, $comparison);
    }

    /**
     * Filter the query on the GillCleftsNo column
     *
     * Example usage:
     * <code>
     * $query->filterByGillcleftsno(1234); // WHERE GillCleftsNo = 1234
     * $query->filterByGillcleftsno(array(12, 34)); // WHERE GillCleftsNo IN (12, 34)
     * $query->filterByGillcleftsno(array('min' => 12)); // WHERE GillCleftsNo >= 12
     * $query->filterByGillcleftsno(array('max' => 12)); // WHERE GillCleftsNo <= 12
     * </code>
     *
     * @param     mixed $gillcleftsno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByGillcleftsno($gillcleftsno = null, $comparison = null)
    {
        if (is_array($gillcleftsno)) {
            $useMinMax = false;
            if (isset($gillcleftsno['min'])) {
                $this->addUsingAlias(MorphdatPeer::GILLCLEFTSNO, $gillcleftsno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gillcleftsno['max'])) {
                $this->addUsingAlias(MorphdatPeer::GILLCLEFTSNO, $gillcleftsno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::GILLCLEFTSNO, $gillcleftsno, $comparison);
    }

    /**
     * Filter the query on the Spiracle column
     *
     * Example usage:
     * <code>
     * $query->filterBySpiracle('fooValue');   // WHERE Spiracle = 'fooValue'
     * $query->filterBySpiracle('%fooValue%'); // WHERE Spiracle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spiracle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterBySpiracle($spiracle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spiracle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spiracle)) {
                $spiracle = str_replace('*', '%', $spiracle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SPIRACLE, $spiracle, $comparison);
    }

    /**
     * Filter the query on the GillRakersLowMin column
     *
     * Example usage:
     * <code>
     * $query->filterByGillrakerslowmin(1234); // WHERE GillRakersLowMin = 1234
     * $query->filterByGillrakerslowmin(array(12, 34)); // WHERE GillRakersLowMin IN (12, 34)
     * $query->filterByGillrakerslowmin(array('min' => 12)); // WHERE GillRakersLowMin >= 12
     * $query->filterByGillrakerslowmin(array('max' => 12)); // WHERE GillRakersLowMin <= 12
     * </code>
     *
     * @param     mixed $gillrakerslowmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByGillrakerslowmin($gillrakerslowmin = null, $comparison = null)
    {
        if (is_array($gillrakerslowmin)) {
            $useMinMax = false;
            if (isset($gillrakerslowmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::GILLRAKERSLOWMIN, $gillrakerslowmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gillrakerslowmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::GILLRAKERSLOWMIN, $gillrakerslowmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::GILLRAKERSLOWMIN, $gillrakerslowmin, $comparison);
    }

    /**
     * Filter the query on the GillRakersLowMax column
     *
     * Example usage:
     * <code>
     * $query->filterByGillrakerslowmax(1234); // WHERE GillRakersLowMax = 1234
     * $query->filterByGillrakerslowmax(array(12, 34)); // WHERE GillRakersLowMax IN (12, 34)
     * $query->filterByGillrakerslowmax(array('min' => 12)); // WHERE GillRakersLowMax >= 12
     * $query->filterByGillrakerslowmax(array('max' => 12)); // WHERE GillRakersLowMax <= 12
     * </code>
     *
     * @param     mixed $gillrakerslowmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByGillrakerslowmax($gillrakerslowmax = null, $comparison = null)
    {
        if (is_array($gillrakerslowmax)) {
            $useMinMax = false;
            if (isset($gillrakerslowmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::GILLRAKERSLOWMAX, $gillrakerslowmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gillrakerslowmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::GILLRAKERSLOWMAX, $gillrakerslowmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::GILLRAKERSLOWMAX, $gillrakerslowmax, $comparison);
    }

    /**
     * Filter the query on the GillRakersUpMin column
     *
     * Example usage:
     * <code>
     * $query->filterByGillrakersupmin(1234); // WHERE GillRakersUpMin = 1234
     * $query->filterByGillrakersupmin(array(12, 34)); // WHERE GillRakersUpMin IN (12, 34)
     * $query->filterByGillrakersupmin(array('min' => 12)); // WHERE GillRakersUpMin >= 12
     * $query->filterByGillrakersupmin(array('max' => 12)); // WHERE GillRakersUpMin <= 12
     * </code>
     *
     * @param     mixed $gillrakersupmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByGillrakersupmin($gillrakersupmin = null, $comparison = null)
    {
        if (is_array($gillrakersupmin)) {
            $useMinMax = false;
            if (isset($gillrakersupmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::GILLRAKERSUPMIN, $gillrakersupmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gillrakersupmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::GILLRAKERSUPMIN, $gillrakersupmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::GILLRAKERSUPMIN, $gillrakersupmin, $comparison);
    }

    /**
     * Filter the query on the GillRakersUpMax column
     *
     * Example usage:
     * <code>
     * $query->filterByGillrakersupmax(1234); // WHERE GillRakersUpMax = 1234
     * $query->filterByGillrakersupmax(array(12, 34)); // WHERE GillRakersUpMax IN (12, 34)
     * $query->filterByGillrakersupmax(array('min' => 12)); // WHERE GillRakersUpMax >= 12
     * $query->filterByGillrakersupmax(array('max' => 12)); // WHERE GillRakersUpMax <= 12
     * </code>
     *
     * @param     mixed $gillrakersupmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByGillrakersupmax($gillrakersupmax = null, $comparison = null)
    {
        if (is_array($gillrakersupmax)) {
            $useMinMax = false;
            if (isset($gillrakersupmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::GILLRAKERSUPMAX, $gillrakersupmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gillrakersupmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::GILLRAKERSUPMAX, $gillrakersupmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::GILLRAKERSUPMAX, $gillrakersupmax, $comparison);
    }

    /**
     * Filter the query on the GillRakersTotalMin column
     *
     * Example usage:
     * <code>
     * $query->filterByGillrakerstotalmin(1234); // WHERE GillRakersTotalMin = 1234
     * $query->filterByGillrakerstotalmin(array(12, 34)); // WHERE GillRakersTotalMin IN (12, 34)
     * $query->filterByGillrakerstotalmin(array('min' => 12)); // WHERE GillRakersTotalMin >= 12
     * $query->filterByGillrakerstotalmin(array('max' => 12)); // WHERE GillRakersTotalMin <= 12
     * </code>
     *
     * @param     mixed $gillrakerstotalmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByGillrakerstotalmin($gillrakerstotalmin = null, $comparison = null)
    {
        if (is_array($gillrakerstotalmin)) {
            $useMinMax = false;
            if (isset($gillrakerstotalmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::GILLRAKERSTOTALMIN, $gillrakerstotalmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gillrakerstotalmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::GILLRAKERSTOTALMIN, $gillrakerstotalmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::GILLRAKERSTOTALMIN, $gillrakerstotalmin, $comparison);
    }

    /**
     * Filter the query on the GillRakersTotalMax column
     *
     * Example usage:
     * <code>
     * $query->filterByGillrakerstotalmax(1234); // WHERE GillRakersTotalMax = 1234
     * $query->filterByGillrakerstotalmax(array(12, 34)); // WHERE GillRakersTotalMax IN (12, 34)
     * $query->filterByGillrakerstotalmax(array('min' => 12)); // WHERE GillRakersTotalMax >= 12
     * $query->filterByGillrakerstotalmax(array('max' => 12)); // WHERE GillRakersTotalMax <= 12
     * </code>
     *
     * @param     mixed $gillrakerstotalmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByGillrakerstotalmax($gillrakerstotalmax = null, $comparison = null)
    {
        if (is_array($gillrakerstotalmax)) {
            $useMinMax = false;
            if (isset($gillrakerstotalmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::GILLRAKERSTOTALMAX, $gillrakerstotalmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gillrakerstotalmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::GILLRAKERSTOTALMAX, $gillrakerstotalmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::GILLRAKERSTOTALMAX, $gillrakerstotalmax, $comparison);
    }

    /**
     * Filter the query on the Vertebrae column
     *
     * Example usage:
     * <code>
     * $query->filterByVertebrae('fooValue');   // WHERE Vertebrae = 'fooValue'
     * $query->filterByVertebrae('%fooValue%'); // WHERE Vertebrae LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vertebrae The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVertebrae($vertebrae = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vertebrae)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vertebrae)) {
                $vertebrae = str_replace('*', '%', $vertebrae);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VERTEBRAE, $vertebrae, $comparison);
    }

    /**
     * Filter the query on the VertebraePreanMin column
     *
     * Example usage:
     * <code>
     * $query->filterByVertebraepreanmin(1234); // WHERE VertebraePreanMin = 1234
     * $query->filterByVertebraepreanmin(array(12, 34)); // WHERE VertebraePreanMin IN (12, 34)
     * $query->filterByVertebraepreanmin(array('min' => 12)); // WHERE VertebraePreanMin >= 12
     * $query->filterByVertebraepreanmin(array('max' => 12)); // WHERE VertebraePreanMin <= 12
     * </code>
     *
     * @param     mixed $vertebraepreanmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVertebraepreanmin($vertebraepreanmin = null, $comparison = null)
    {
        if (is_array($vertebraepreanmin)) {
            $useMinMax = false;
            if (isset($vertebraepreanmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::VERTEBRAEPREANMIN, $vertebraepreanmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vertebraepreanmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::VERTEBRAEPREANMIN, $vertebraepreanmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VERTEBRAEPREANMIN, $vertebraepreanmin, $comparison);
    }

    /**
     * Filter the query on the VertebraePreanMax column
     *
     * Example usage:
     * <code>
     * $query->filterByVertebraepreanmax(1234); // WHERE VertebraePreanMax = 1234
     * $query->filterByVertebraepreanmax(array(12, 34)); // WHERE VertebraePreanMax IN (12, 34)
     * $query->filterByVertebraepreanmax(array('min' => 12)); // WHERE VertebraePreanMax >= 12
     * $query->filterByVertebraepreanmax(array('max' => 12)); // WHERE VertebraePreanMax <= 12
     * </code>
     *
     * @param     mixed $vertebraepreanmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVertebraepreanmax($vertebraepreanmax = null, $comparison = null)
    {
        if (is_array($vertebraepreanmax)) {
            $useMinMax = false;
            if (isset($vertebraepreanmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::VERTEBRAEPREANMAX, $vertebraepreanmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vertebraepreanmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::VERTEBRAEPREANMAX, $vertebraepreanmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VERTEBRAEPREANMAX, $vertebraepreanmax, $comparison);
    }

    /**
     * Filter the query on the VertebraeTotalMin column
     *
     * Example usage:
     * <code>
     * $query->filterByVertebraetotalmin(1234); // WHERE VertebraeTotalMin = 1234
     * $query->filterByVertebraetotalmin(array(12, 34)); // WHERE VertebraeTotalMin IN (12, 34)
     * $query->filterByVertebraetotalmin(array('min' => 12)); // WHERE VertebraeTotalMin >= 12
     * $query->filterByVertebraetotalmin(array('max' => 12)); // WHERE VertebraeTotalMin <= 12
     * </code>
     *
     * @param     mixed $vertebraetotalmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVertebraetotalmin($vertebraetotalmin = null, $comparison = null)
    {
        if (is_array($vertebraetotalmin)) {
            $useMinMax = false;
            if (isset($vertebraetotalmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::VERTEBRAETOTALMIN, $vertebraetotalmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vertebraetotalmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::VERTEBRAETOTALMIN, $vertebraetotalmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VERTEBRAETOTALMIN, $vertebraetotalmin, $comparison);
    }

    /**
     * Filter the query on the VertebraeTotalMax column
     *
     * Example usage:
     * <code>
     * $query->filterByVertebraetotalmax(1234); // WHERE VertebraeTotalMax = 1234
     * $query->filterByVertebraetotalmax(array(12, 34)); // WHERE VertebraeTotalMax IN (12, 34)
     * $query->filterByVertebraetotalmax(array('min' => 12)); // WHERE VertebraeTotalMax >= 12
     * $query->filterByVertebraetotalmax(array('max' => 12)); // WHERE VertebraeTotalMax <= 12
     * </code>
     *
     * @param     mixed $vertebraetotalmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVertebraetotalmax($vertebraetotalmax = null, $comparison = null)
    {
        if (is_array($vertebraetotalmax)) {
            $useMinMax = false;
            if (isset($vertebraetotalmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::VERTEBRAETOTALMAX, $vertebraetotalmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vertebraetotalmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::VERTEBRAETOTALMAX, $vertebraetotalmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VERTEBRAETOTALMAX, $vertebraetotalmax, $comparison);
    }

    /**
     * Filter the query on the DorsalAttributes column
     *
     * Example usage:
     * <code>
     * $query->filterByDorsalattributes('fooValue');   // WHERE DorsalAttributes = 'fooValue'
     * $query->filterByDorsalattributes('%fooValue%'); // WHERE DorsalAttributes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dorsalattributes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDorsalattributes($dorsalattributes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dorsalattributes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dorsalattributes)) {
                $dorsalattributes = str_replace('*', '%', $dorsalattributes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DORSALATTRIBUTES, $dorsalattributes, $comparison);
    }

    /**
     * Filter the query on the Dfinno column
     *
     * Example usage:
     * <code>
     * $query->filterByDfinno(1234); // WHERE Dfinno = 1234
     * $query->filterByDfinno(array(12, 34)); // WHERE Dfinno IN (12, 34)
     * $query->filterByDfinno(array('min' => 12)); // WHERE Dfinno >= 12
     * $query->filterByDfinno(array('max' => 12)); // WHERE Dfinno <= 12
     * </code>
     *
     * @param     mixed $dfinno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDfinno($dfinno = null, $comparison = null)
    {
        if (is_array($dfinno)) {
            $useMinMax = false;
            if (isset($dfinno['min'])) {
                $this->addUsingAlias(MorphdatPeer::DFINNO, $dfinno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dfinno['max'])) {
                $this->addUsingAlias(MorphdatPeer::DFINNO, $dfinno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DFINNO, $dfinno, $comparison);
    }

    /**
     * Filter the query on the DorsalSpinesMin column
     *
     * Example usage:
     * <code>
     * $query->filterByDorsalspinesmin(1234); // WHERE DorsalSpinesMin = 1234
     * $query->filterByDorsalspinesmin(array(12, 34)); // WHERE DorsalSpinesMin IN (12, 34)
     * $query->filterByDorsalspinesmin(array('min' => 12)); // WHERE DorsalSpinesMin >= 12
     * $query->filterByDorsalspinesmin(array('max' => 12)); // WHERE DorsalSpinesMin <= 12
     * </code>
     *
     * @param     mixed $dorsalspinesmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDorsalspinesmin($dorsalspinesmin = null, $comparison = null)
    {
        if (is_array($dorsalspinesmin)) {
            $useMinMax = false;
            if (isset($dorsalspinesmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::DORSALSPINESMIN, $dorsalspinesmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dorsalspinesmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::DORSALSPINESMIN, $dorsalspinesmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DORSALSPINESMIN, $dorsalspinesmin, $comparison);
    }

    /**
     * Filter the query on the DorsalSpinesMax column
     *
     * Example usage:
     * <code>
     * $query->filterByDorsalspinesmax(1234); // WHERE DorsalSpinesMax = 1234
     * $query->filterByDorsalspinesmax(array(12, 34)); // WHERE DorsalSpinesMax IN (12, 34)
     * $query->filterByDorsalspinesmax(array('min' => 12)); // WHERE DorsalSpinesMax >= 12
     * $query->filterByDorsalspinesmax(array('max' => 12)); // WHERE DorsalSpinesMax <= 12
     * </code>
     *
     * @param     mixed $dorsalspinesmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDorsalspinesmax($dorsalspinesmax = null, $comparison = null)
    {
        if (is_array($dorsalspinesmax)) {
            $useMinMax = false;
            if (isset($dorsalspinesmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::DORSALSPINESMAX, $dorsalspinesmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dorsalspinesmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::DORSALSPINESMAX, $dorsalspinesmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DORSALSPINESMAX, $dorsalspinesmax, $comparison);
    }

    /**
     * Filter the query on the Notched column
     *
     * Example usage:
     * <code>
     * $query->filterByNotched(1234); // WHERE Notched = 1234
     * $query->filterByNotched(array(12, 34)); // WHERE Notched IN (12, 34)
     * $query->filterByNotched(array('min' => 12)); // WHERE Notched >= 12
     * $query->filterByNotched(array('max' => 12)); // WHERE Notched <= 12
     * </code>
     *
     * @param     mixed $notched The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByNotched($notched = null, $comparison = null)
    {
        if (is_array($notched)) {
            $useMinMax = false;
            if (isset($notched['min'])) {
                $this->addUsingAlias(MorphdatPeer::NOTCHED, $notched['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($notched['max'])) {
                $this->addUsingAlias(MorphdatPeer::NOTCHED, $notched['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::NOTCHED, $notched, $comparison);
    }

    /**
     * Filter the query on the DorsalSoftRaysMin column
     *
     * Example usage:
     * <code>
     * $query->filterByDorsalsoftraysmin(1234); // WHERE DorsalSoftRaysMin = 1234
     * $query->filterByDorsalsoftraysmin(array(12, 34)); // WHERE DorsalSoftRaysMin IN (12, 34)
     * $query->filterByDorsalsoftraysmin(array('min' => 12)); // WHERE DorsalSoftRaysMin >= 12
     * $query->filterByDorsalsoftraysmin(array('max' => 12)); // WHERE DorsalSoftRaysMin <= 12
     * </code>
     *
     * @param     mixed $dorsalsoftraysmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDorsalsoftraysmin($dorsalsoftraysmin = null, $comparison = null)
    {
        if (is_array($dorsalsoftraysmin)) {
            $useMinMax = false;
            if (isset($dorsalsoftraysmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::DORSALSOFTRAYSMIN, $dorsalsoftraysmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dorsalsoftraysmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::DORSALSOFTRAYSMIN, $dorsalsoftraysmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DORSALSOFTRAYSMIN, $dorsalsoftraysmin, $comparison);
    }

    /**
     * Filter the query on the DorsalSoftRaysMax column
     *
     * Example usage:
     * <code>
     * $query->filterByDorsalsoftraysmax(1234); // WHERE DorsalSoftRaysMax = 1234
     * $query->filterByDorsalsoftraysmax(array(12, 34)); // WHERE DorsalSoftRaysMax IN (12, 34)
     * $query->filterByDorsalsoftraysmax(array('min' => 12)); // WHERE DorsalSoftRaysMax >= 12
     * $query->filterByDorsalsoftraysmax(array('max' => 12)); // WHERE DorsalSoftRaysMax <= 12
     * </code>
     *
     * @param     mixed $dorsalsoftraysmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDorsalsoftraysmax($dorsalsoftraysmax = null, $comparison = null)
    {
        if (is_array($dorsalsoftraysmax)) {
            $useMinMax = false;
            if (isset($dorsalsoftraysmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::DORSALSOFTRAYSMAX, $dorsalsoftraysmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dorsalsoftraysmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::DORSALSOFTRAYSMAX, $dorsalsoftraysmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DORSALSOFTRAYSMAX, $dorsalsoftraysmax, $comparison);
    }

    /**
     * Filter the query on the Adifin column
     *
     * Example usage:
     * <code>
     * $query->filterByAdifin('fooValue');   // WHERE Adifin = 'fooValue'
     * $query->filterByAdifin('%fooValue%'); // WHERE Adifin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adifin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByAdifin($adifin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adifin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adifin)) {
                $adifin = str_replace('*', '%', $adifin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::ADIFIN, $adifin, $comparison);
    }

    /**
     * Filter the query on the DFinletsmin column
     *
     * Example usage:
     * <code>
     * $query->filterByDfinletsmin(1234); // WHERE DFinletsmin = 1234
     * $query->filterByDfinletsmin(array(12, 34)); // WHERE DFinletsmin IN (12, 34)
     * $query->filterByDfinletsmin(array('min' => 12)); // WHERE DFinletsmin >= 12
     * $query->filterByDfinletsmin(array('max' => 12)); // WHERE DFinletsmin <= 12
     * </code>
     *
     * @param     mixed $dfinletsmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDfinletsmin($dfinletsmin = null, $comparison = null)
    {
        if (is_array($dfinletsmin)) {
            $useMinMax = false;
            if (isset($dfinletsmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::DFINLETSMIN, $dfinletsmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dfinletsmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::DFINLETSMIN, $dfinletsmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DFINLETSMIN, $dfinletsmin, $comparison);
    }

    /**
     * Filter the query on the DFinletsmax column
     *
     * Example usage:
     * <code>
     * $query->filterByDfinletsmax(1234); // WHERE DFinletsmax = 1234
     * $query->filterByDfinletsmax(array(12, 34)); // WHERE DFinletsmax IN (12, 34)
     * $query->filterByDfinletsmax(array('min' => 12)); // WHERE DFinletsmax >= 12
     * $query->filterByDfinletsmax(array('max' => 12)); // WHERE DFinletsmax <= 12
     * </code>
     *
     * @param     mixed $dfinletsmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDfinletsmax($dfinletsmax = null, $comparison = null)
    {
        if (is_array($dfinletsmax)) {
            $useMinMax = false;
            if (isset($dfinletsmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::DFINLETSMAX, $dfinletsmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dfinletsmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::DFINLETSMAX, $dfinletsmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DFINLETSMAX, $dfinletsmax, $comparison);
    }

    /**
     * Filter the query on the VFinletsmin column
     *
     * Example usage:
     * <code>
     * $query->filterByVfinletsmin(1234); // WHERE VFinletsmin = 1234
     * $query->filterByVfinletsmin(array(12, 34)); // WHERE VFinletsmin IN (12, 34)
     * $query->filterByVfinletsmin(array('min' => 12)); // WHERE VFinletsmin >= 12
     * $query->filterByVfinletsmin(array('max' => 12)); // WHERE VFinletsmin <= 12
     * </code>
     *
     * @param     mixed $vfinletsmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVfinletsmin($vfinletsmin = null, $comparison = null)
    {
        if (is_array($vfinletsmin)) {
            $useMinMax = false;
            if (isset($vfinletsmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::VFINLETSMIN, $vfinletsmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vfinletsmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::VFINLETSMIN, $vfinletsmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VFINLETSMIN, $vfinletsmin, $comparison);
    }

    /**
     * Filter the query on the VFinletsmax column
     *
     * Example usage:
     * <code>
     * $query->filterByVfinletsmax(1234); // WHERE VFinletsmax = 1234
     * $query->filterByVfinletsmax(array(12, 34)); // WHERE VFinletsmax IN (12, 34)
     * $query->filterByVfinletsmax(array('min' => 12)); // WHERE VFinletsmax >= 12
     * $query->filterByVfinletsmax(array('max' => 12)); // WHERE VFinletsmax <= 12
     * </code>
     *
     * @param     mixed $vfinletsmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVfinletsmax($vfinletsmax = null, $comparison = null)
    {
        if (is_array($vfinletsmax)) {
            $useMinMax = false;
            if (isset($vfinletsmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::VFINLETSMAX, $vfinletsmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vfinletsmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::VFINLETSMAX, $vfinletsmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VFINLETSMAX, $vfinletsmax, $comparison);
    }

    /**
     * Filter the query on the CShape column
     *
     * Example usage:
     * <code>
     * $query->filterByCshape('fooValue');   // WHERE CShape = 'fooValue'
     * $query->filterByCshape('%fooValue%'); // WHERE CShape LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cshape The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByCshape($cshape = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cshape)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cshape)) {
                $cshape = str_replace('*', '%', $cshape);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::CSHAPE, $cshape, $comparison);
    }

    /**
     * Filter the query on the Attributes column
     *
     * Example usage:
     * <code>
     * $query->filterByAttributes('fooValue');   // WHERE Attributes = 'fooValue'
     * $query->filterByAttributes('%fooValue%'); // WHERE Attributes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $attributes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByAttributes($attributes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($attributes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $attributes)) {
                $attributes = str_replace('*', '%', $attributes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::ATTRIBUTES, $attributes, $comparison);
    }

    /**
     * Filter the query on the Afinno column
     *
     * Example usage:
     * <code>
     * $query->filterByAfinno(1234); // WHERE Afinno = 1234
     * $query->filterByAfinno(array(12, 34)); // WHERE Afinno IN (12, 34)
     * $query->filterByAfinno(array('min' => 12)); // WHERE Afinno >= 12
     * $query->filterByAfinno(array('max' => 12)); // WHERE Afinno <= 12
     * </code>
     *
     * @param     mixed $afinno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByAfinno($afinno = null, $comparison = null)
    {
        if (is_array($afinno)) {
            $useMinMax = false;
            if (isset($afinno['min'])) {
                $this->addUsingAlias(MorphdatPeer::AFINNO, $afinno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($afinno['max'])) {
                $this->addUsingAlias(MorphdatPeer::AFINNO, $afinno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::AFINNO, $afinno, $comparison);
    }

    /**
     * Filter the query on the AnalFinSpinesMin column
     *
     * Example usage:
     * <code>
     * $query->filterByAnalfinspinesmin(1234); // WHERE AnalFinSpinesMin = 1234
     * $query->filterByAnalfinspinesmin(array(12, 34)); // WHERE AnalFinSpinesMin IN (12, 34)
     * $query->filterByAnalfinspinesmin(array('min' => 12)); // WHERE AnalFinSpinesMin >= 12
     * $query->filterByAnalfinspinesmin(array('max' => 12)); // WHERE AnalFinSpinesMin <= 12
     * </code>
     *
     * @param     mixed $analfinspinesmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByAnalfinspinesmin($analfinspinesmin = null, $comparison = null)
    {
        if (is_array($analfinspinesmin)) {
            $useMinMax = false;
            if (isset($analfinspinesmin['min'])) {
                $this->addUsingAlias(MorphdatPeer::ANALFINSPINESMIN, $analfinspinesmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($analfinspinesmin['max'])) {
                $this->addUsingAlias(MorphdatPeer::ANALFINSPINESMIN, $analfinspinesmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::ANALFINSPINESMIN, $analfinspinesmin, $comparison);
    }

    /**
     * Filter the query on the AnalFinSpinesMax column
     *
     * Example usage:
     * <code>
     * $query->filterByAnalfinspinesmax(1234); // WHERE AnalFinSpinesMax = 1234
     * $query->filterByAnalfinspinesmax(array(12, 34)); // WHERE AnalFinSpinesMax IN (12, 34)
     * $query->filterByAnalfinspinesmax(array('min' => 12)); // WHERE AnalFinSpinesMax >= 12
     * $query->filterByAnalfinspinesmax(array('max' => 12)); // WHERE AnalFinSpinesMax <= 12
     * </code>
     *
     * @param     mixed $analfinspinesmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByAnalfinspinesmax($analfinspinesmax = null, $comparison = null)
    {
        if (is_array($analfinspinesmax)) {
            $useMinMax = false;
            if (isset($analfinspinesmax['min'])) {
                $this->addUsingAlias(MorphdatPeer::ANALFINSPINESMAX, $analfinspinesmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($analfinspinesmax['max'])) {
                $this->addUsingAlias(MorphdatPeer::ANALFINSPINESMAX, $analfinspinesmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::ANALFINSPINESMAX, $analfinspinesmax, $comparison);
    }

    /**
     * Filter the query on the Araymin column
     *
     * Example usage:
     * <code>
     * $query->filterByAraymin(1234); // WHERE Araymin = 1234
     * $query->filterByAraymin(array(12, 34)); // WHERE Araymin IN (12, 34)
     * $query->filterByAraymin(array('min' => 12)); // WHERE Araymin >= 12
     * $query->filterByAraymin(array('max' => 12)); // WHERE Araymin <= 12
     * </code>
     *
     * @param     mixed $araymin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByAraymin($araymin = null, $comparison = null)
    {
        if (is_array($araymin)) {
            $useMinMax = false;
            if (isset($araymin['min'])) {
                $this->addUsingAlias(MorphdatPeer::ARAYMIN, $araymin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($araymin['max'])) {
                $this->addUsingAlias(MorphdatPeer::ARAYMIN, $araymin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::ARAYMIN, $araymin, $comparison);
    }

    /**
     * Filter the query on the Araymax column
     *
     * Example usage:
     * <code>
     * $query->filterByAraymax(1234); // WHERE Araymax = 1234
     * $query->filterByAraymax(array(12, 34)); // WHERE Araymax IN (12, 34)
     * $query->filterByAraymax(array('min' => 12)); // WHERE Araymax >= 12
     * $query->filterByAraymax(array('max' => 12)); // WHERE Araymax <= 12
     * </code>
     *
     * @param     mixed $araymax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByAraymax($araymax = null, $comparison = null)
    {
        if (is_array($araymax)) {
            $useMinMax = false;
            if (isset($araymax['min'])) {
                $this->addUsingAlias(MorphdatPeer::ARAYMAX, $araymax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($araymax['max'])) {
                $this->addUsingAlias(MorphdatPeer::ARAYMAX, $araymax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::ARAYMAX, $araymax, $comparison);
    }

    /**
     * Filter the query on the PectoralAttributes column
     *
     * Example usage:
     * <code>
     * $query->filterByPectoralattributes('fooValue');   // WHERE PectoralAttributes = 'fooValue'
     * $query->filterByPectoralattributes('%fooValue%'); // WHERE PectoralAttributes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pectoralattributes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPectoralattributes($pectoralattributes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pectoralattributes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pectoralattributes)) {
                $pectoralattributes = str_replace('*', '%', $pectoralattributes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PECTORALATTRIBUTES, $pectoralattributes, $comparison);
    }

    /**
     * Filter the query on the Pspines2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPspines2(1234); // WHERE Pspines2 = 1234
     * $query->filterByPspines2(array(12, 34)); // WHERE Pspines2 IN (12, 34)
     * $query->filterByPspines2(array('min' => 12)); // WHERE Pspines2 >= 12
     * $query->filterByPspines2(array('max' => 12)); // WHERE Pspines2 <= 12
     * </code>
     *
     * @param     mixed $pspines2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPspines2($pspines2 = null, $comparison = null)
    {
        if (is_array($pspines2)) {
            $useMinMax = false;
            if (isset($pspines2['min'])) {
                $this->addUsingAlias(MorphdatPeer::PSPINES2, $pspines2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pspines2['max'])) {
                $this->addUsingAlias(MorphdatPeer::PSPINES2, $pspines2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PSPINES2, $pspines2, $comparison);
    }

    /**
     * Filter the query on the Praymin column
     *
     * Example usage:
     * <code>
     * $query->filterByPraymin(1234); // WHERE Praymin = 1234
     * $query->filterByPraymin(array(12, 34)); // WHERE Praymin IN (12, 34)
     * $query->filterByPraymin(array('min' => 12)); // WHERE Praymin >= 12
     * $query->filterByPraymin(array('max' => 12)); // WHERE Praymin <= 12
     * </code>
     *
     * @param     mixed $praymin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPraymin($praymin = null, $comparison = null)
    {
        if (is_array($praymin)) {
            $useMinMax = false;
            if (isset($praymin['min'])) {
                $this->addUsingAlias(MorphdatPeer::PRAYMIN, $praymin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($praymin['max'])) {
                $this->addUsingAlias(MorphdatPeer::PRAYMIN, $praymin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PRAYMIN, $praymin, $comparison);
    }

    /**
     * Filter the query on the Praymax column
     *
     * Example usage:
     * <code>
     * $query->filterByPraymax(1234); // WHERE Praymax = 1234
     * $query->filterByPraymax(array(12, 34)); // WHERE Praymax IN (12, 34)
     * $query->filterByPraymax(array('min' => 12)); // WHERE Praymax >= 12
     * $query->filterByPraymax(array('max' => 12)); // WHERE Praymax <= 12
     * </code>
     *
     * @param     mixed $praymax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPraymax($praymax = null, $comparison = null)
    {
        if (is_array($praymax)) {
            $useMinMax = false;
            if (isset($praymax['min'])) {
                $this->addUsingAlias(MorphdatPeer::PRAYMAX, $praymax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($praymax['max'])) {
                $this->addUsingAlias(MorphdatPeer::PRAYMAX, $praymax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PRAYMAX, $praymax, $comparison);
    }

    /**
     * Filter the query on the PelvicsAttributes column
     *
     * Example usage:
     * <code>
     * $query->filterByPelvicsattributes('fooValue');   // WHERE PelvicsAttributes = 'fooValue'
     * $query->filterByPelvicsattributes('%fooValue%'); // WHERE PelvicsAttributes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pelvicsattributes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPelvicsattributes($pelvicsattributes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pelvicsattributes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pelvicsattributes)) {
                $pelvicsattributes = str_replace('*', '%', $pelvicsattributes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PELVICSATTRIBUTES, $pelvicsattributes, $comparison);
    }

    /**
     * Filter the query on the VPosition column
     *
     * Example usage:
     * <code>
     * $query->filterByVposition('fooValue');   // WHERE VPosition = 'fooValue'
     * $query->filterByVposition('%fooValue%'); // WHERE VPosition LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vposition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVposition($vposition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vposition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vposition)) {
                $vposition = str_replace('*', '%', $vposition);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VPOSITION, $vposition, $comparison);
    }

    /**
     * Filter the query on the VPosition2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVposition2('fooValue');   // WHERE VPosition2 = 'fooValue'
     * $query->filterByVposition2('%fooValue%'); // WHERE VPosition2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vposition2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVposition2($vposition2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vposition2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vposition2)) {
                $vposition2 = str_replace('*', '%', $vposition2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VPOSITION2, $vposition2, $comparison);
    }

    /**
     * Filter the query on the Vspines column
     *
     * Example usage:
     * <code>
     * $query->filterByVspines(1234); // WHERE Vspines = 1234
     * $query->filterByVspines(array(12, 34)); // WHERE Vspines IN (12, 34)
     * $query->filterByVspines(array('min' => 12)); // WHERE Vspines >= 12
     * $query->filterByVspines(array('max' => 12)); // WHERE Vspines <= 12
     * </code>
     *
     * @param     mixed $vspines The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVspines($vspines = null, $comparison = null)
    {
        if (is_array($vspines)) {
            $useMinMax = false;
            if (isset($vspines['min'])) {
                $this->addUsingAlias(MorphdatPeer::VSPINES, $vspines['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vspines['max'])) {
                $this->addUsingAlias(MorphdatPeer::VSPINES, $vspines['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VSPINES, $vspines, $comparison);
    }

    /**
     * Filter the query on the Vraymin column
     *
     * Example usage:
     * <code>
     * $query->filterByVraymin(1234); // WHERE Vraymin = 1234
     * $query->filterByVraymin(array(12, 34)); // WHERE Vraymin IN (12, 34)
     * $query->filterByVraymin(array('min' => 12)); // WHERE Vraymin >= 12
     * $query->filterByVraymin(array('max' => 12)); // WHERE Vraymin <= 12
     * </code>
     *
     * @param     mixed $vraymin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVraymin($vraymin = null, $comparison = null)
    {
        if (is_array($vraymin)) {
            $useMinMax = false;
            if (isset($vraymin['min'])) {
                $this->addUsingAlias(MorphdatPeer::VRAYMIN, $vraymin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vraymin['max'])) {
                $this->addUsingAlias(MorphdatPeer::VRAYMIN, $vraymin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VRAYMIN, $vraymin, $comparison);
    }

    /**
     * Filter the query on the Vraymax column
     *
     * Example usage:
     * <code>
     * $query->filterByVraymax(1234); // WHERE Vraymax = 1234
     * $query->filterByVraymax(array(12, 34)); // WHERE Vraymax IN (12, 34)
     * $query->filterByVraymax(array('min' => 12)); // WHERE Vraymax >= 12
     * $query->filterByVraymax(array('max' => 12)); // WHERE Vraymax <= 12
     * </code>
     *
     * @param     mixed $vraymax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByVraymax($vraymax = null, $comparison = null)
    {
        if (is_array($vraymax)) {
            $useMinMax = false;
            if (isset($vraymax['min'])) {
                $this->addUsingAlias(MorphdatPeer::VRAYMAX, $vraymax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vraymax['max'])) {
                $this->addUsingAlias(MorphdatPeer::VRAYMAX, $vraymax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::VRAYMAX, $vraymax, $comparison);
    }

    /**
     * Filter the query on the StandardLengthCm column
     *
     * Example usage:
     * <code>
     * $query->filterByStandardlengthcm(1234); // WHERE StandardLengthCm = 1234
     * $query->filterByStandardlengthcm(array(12, 34)); // WHERE StandardLengthCm IN (12, 34)
     * $query->filterByStandardlengthcm(array('min' => 12)); // WHERE StandardLengthCm >= 12
     * $query->filterByStandardlengthcm(array('max' => 12)); // WHERE StandardLengthCm <= 12
     * </code>
     *
     * @param     mixed $standardlengthcm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByStandardlengthcm($standardlengthcm = null, $comparison = null)
    {
        if (is_array($standardlengthcm)) {
            $useMinMax = false;
            if (isset($standardlengthcm['min'])) {
                $this->addUsingAlias(MorphdatPeer::STANDARDLENGTHCM, $standardlengthcm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($standardlengthcm['max'])) {
                $this->addUsingAlias(MorphdatPeer::STANDARDLENGTHCM, $standardlengthcm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::STANDARDLENGTHCM, $standardlengthcm, $comparison);
    }

    /**
     * Filter the query on the Forklength column
     *
     * Example usage:
     * <code>
     * $query->filterByForklength(1234); // WHERE Forklength = 1234
     * $query->filterByForklength(array(12, 34)); // WHERE Forklength IN (12, 34)
     * $query->filterByForklength(array('min' => 12)); // WHERE Forklength >= 12
     * $query->filterByForklength(array('max' => 12)); // WHERE Forklength <= 12
     * </code>
     *
     * @param     mixed $forklength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByForklength($forklength = null, $comparison = null)
    {
        if (is_array($forklength)) {
            $useMinMax = false;
            if (isset($forklength['min'])) {
                $this->addUsingAlias(MorphdatPeer::FORKLENGTH, $forklength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($forklength['max'])) {
                $this->addUsingAlias(MorphdatPeer::FORKLENGTH, $forklength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::FORKLENGTH, $forklength, $comparison);
    }

    /**
     * Filter the query on the Totallength column
     *
     * Example usage:
     * <code>
     * $query->filterByTotallength(1234); // WHERE Totallength = 1234
     * $query->filterByTotallength(array(12, 34)); // WHERE Totallength IN (12, 34)
     * $query->filterByTotallength(array('min' => 12)); // WHERE Totallength >= 12
     * $query->filterByTotallength(array('max' => 12)); // WHERE Totallength <= 12
     * </code>
     *
     * @param     mixed $totallength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByTotallength($totallength = null, $comparison = null)
    {
        if (is_array($totallength)) {
            $useMinMax = false;
            if (isset($totallength['min'])) {
                $this->addUsingAlias(MorphdatPeer::TOTALLENGTH, $totallength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totallength['max'])) {
                $this->addUsingAlias(MorphdatPeer::TOTALLENGTH, $totallength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::TOTALLENGTH, $totallength, $comparison);
    }

    /**
     * Filter the query on the HeadLength column
     *
     * Example usage:
     * <code>
     * $query->filterByHeadlength(1234); // WHERE HeadLength = 1234
     * $query->filterByHeadlength(array(12, 34)); // WHERE HeadLength IN (12, 34)
     * $query->filterByHeadlength(array('min' => 12)); // WHERE HeadLength >= 12
     * $query->filterByHeadlength(array('max' => 12)); // WHERE HeadLength <= 12
     * </code>
     *
     * @param     mixed $headlength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByHeadlength($headlength = null, $comparison = null)
    {
        if (is_array($headlength)) {
            $useMinMax = false;
            if (isset($headlength['min'])) {
                $this->addUsingAlias(MorphdatPeer::HEADLENGTH, $headlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($headlength['max'])) {
                $this->addUsingAlias(MorphdatPeer::HEADLENGTH, $headlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::HEADLENGTH, $headlength, $comparison);
    }

    /**
     * Filter the query on the PreDorsalLength column
     *
     * Example usage:
     * <code>
     * $query->filterByPredorsallength(1234); // WHERE PreDorsalLength = 1234
     * $query->filterByPredorsallength(array(12, 34)); // WHERE PreDorsalLength IN (12, 34)
     * $query->filterByPredorsallength(array('min' => 12)); // WHERE PreDorsalLength >= 12
     * $query->filterByPredorsallength(array('max' => 12)); // WHERE PreDorsalLength <= 12
     * </code>
     *
     * @param     mixed $predorsallength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPredorsallength($predorsallength = null, $comparison = null)
    {
        if (is_array($predorsallength)) {
            $useMinMax = false;
            if (isset($predorsallength['min'])) {
                $this->addUsingAlias(MorphdatPeer::PREDORSALLENGTH, $predorsallength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($predorsallength['max'])) {
                $this->addUsingAlias(MorphdatPeer::PREDORSALLENGTH, $predorsallength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PREDORSALLENGTH, $predorsallength, $comparison);
    }

    /**
     * Filter the query on the PrePelvicsLength column
     *
     * Example usage:
     * <code>
     * $query->filterByPrepelvicslength(1234); // WHERE PrePelvicsLength = 1234
     * $query->filterByPrepelvicslength(array(12, 34)); // WHERE PrePelvicsLength IN (12, 34)
     * $query->filterByPrepelvicslength(array('min' => 12)); // WHERE PrePelvicsLength >= 12
     * $query->filterByPrepelvicslength(array('max' => 12)); // WHERE PrePelvicsLength <= 12
     * </code>
     *
     * @param     mixed $prepelvicslength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPrepelvicslength($prepelvicslength = null, $comparison = null)
    {
        if (is_array($prepelvicslength)) {
            $useMinMax = false;
            if (isset($prepelvicslength['min'])) {
                $this->addUsingAlias(MorphdatPeer::PREPELVICSLENGTH, $prepelvicslength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prepelvicslength['max'])) {
                $this->addUsingAlias(MorphdatPeer::PREPELVICSLENGTH, $prepelvicslength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PREPELVICSLENGTH, $prepelvicslength, $comparison);
    }

    /**
     * Filter the query on the PreAnalLength column
     *
     * Example usage:
     * <code>
     * $query->filterByPreanallength(1234); // WHERE PreAnalLength = 1234
     * $query->filterByPreanallength(array(12, 34)); // WHERE PreAnalLength IN (12, 34)
     * $query->filterByPreanallength(array('min' => 12)); // WHERE PreAnalLength >= 12
     * $query->filterByPreanallength(array('max' => 12)); // WHERE PreAnalLength <= 12
     * </code>
     *
     * @param     mixed $preanallength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPreanallength($preanallength = null, $comparison = null)
    {
        if (is_array($preanallength)) {
            $useMinMax = false;
            if (isset($preanallength['min'])) {
                $this->addUsingAlias(MorphdatPeer::PREANALLENGTH, $preanallength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preanallength['max'])) {
                $this->addUsingAlias(MorphdatPeer::PREANALLENGTH, $preanallength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PREANALLENGTH, $preanallength, $comparison);
    }

    /**
     * Filter the query on the PostHeadDepth column
     *
     * Example usage:
     * <code>
     * $query->filterByPostheaddepth(1234); // WHERE PostHeadDepth = 1234
     * $query->filterByPostheaddepth(array(12, 34)); // WHERE PostHeadDepth IN (12, 34)
     * $query->filterByPostheaddepth(array('min' => 12)); // WHERE PostHeadDepth >= 12
     * $query->filterByPostheaddepth(array('max' => 12)); // WHERE PostHeadDepth <= 12
     * </code>
     *
     * @param     mixed $postheaddepth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPostheaddepth($postheaddepth = null, $comparison = null)
    {
        if (is_array($postheaddepth)) {
            $useMinMax = false;
            if (isset($postheaddepth['min'])) {
                $this->addUsingAlias(MorphdatPeer::POSTHEADDEPTH, $postheaddepth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($postheaddepth['max'])) {
                $this->addUsingAlias(MorphdatPeer::POSTHEADDEPTH, $postheaddepth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::POSTHEADDEPTH, $postheaddepth, $comparison);
    }

    /**
     * Filter the query on the PostTrunkDepth column
     *
     * Example usage:
     * <code>
     * $query->filterByPosttrunkdepth(1234); // WHERE PostTrunkDepth = 1234
     * $query->filterByPosttrunkdepth(array(12, 34)); // WHERE PostTrunkDepth IN (12, 34)
     * $query->filterByPosttrunkdepth(array('min' => 12)); // WHERE PostTrunkDepth >= 12
     * $query->filterByPosttrunkdepth(array('max' => 12)); // WHERE PostTrunkDepth <= 12
     * </code>
     *
     * @param     mixed $posttrunkdepth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPosttrunkdepth($posttrunkdepth = null, $comparison = null)
    {
        if (is_array($posttrunkdepth)) {
            $useMinMax = false;
            if (isset($posttrunkdepth['min'])) {
                $this->addUsingAlias(MorphdatPeer::POSTTRUNKDEPTH, $posttrunkdepth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($posttrunkdepth['max'])) {
                $this->addUsingAlias(MorphdatPeer::POSTTRUNKDEPTH, $posttrunkdepth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::POSTTRUNKDEPTH, $posttrunkdepth, $comparison);
    }

    /**
     * Filter the query on the MaximumDepth column
     *
     * Example usage:
     * <code>
     * $query->filterByMaximumdepth(1234); // WHERE MaximumDepth = 1234
     * $query->filterByMaximumdepth(array(12, 34)); // WHERE MaximumDepth IN (12, 34)
     * $query->filterByMaximumdepth(array('min' => 12)); // WHERE MaximumDepth >= 12
     * $query->filterByMaximumdepth(array('max' => 12)); // WHERE MaximumDepth <= 12
     * </code>
     *
     * @param     mixed $maximumdepth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByMaximumdepth($maximumdepth = null, $comparison = null)
    {
        if (is_array($maximumdepth)) {
            $useMinMax = false;
            if (isset($maximumdepth['min'])) {
                $this->addUsingAlias(MorphdatPeer::MAXIMUMDEPTH, $maximumdepth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maximumdepth['max'])) {
                $this->addUsingAlias(MorphdatPeer::MAXIMUMDEPTH, $maximumdepth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::MAXIMUMDEPTH, $maximumdepth, $comparison);
    }

    /**
     * Filter the query on the PeduncleDepth column
     *
     * Example usage:
     * <code>
     * $query->filterByPeduncledepth(1234); // WHERE PeduncleDepth = 1234
     * $query->filterByPeduncledepth(array(12, 34)); // WHERE PeduncleDepth IN (12, 34)
     * $query->filterByPeduncledepth(array('min' => 12)); // WHERE PeduncleDepth >= 12
     * $query->filterByPeduncledepth(array('max' => 12)); // WHERE PeduncleDepth <= 12
     * </code>
     *
     * @param     mixed $peduncledepth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPeduncledepth($peduncledepth = null, $comparison = null)
    {
        if (is_array($peduncledepth)) {
            $useMinMax = false;
            if (isset($peduncledepth['min'])) {
                $this->addUsingAlias(MorphdatPeer::PEDUNCLEDEPTH, $peduncledepth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($peduncledepth['max'])) {
                $this->addUsingAlias(MorphdatPeer::PEDUNCLEDEPTH, $peduncledepth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PEDUNCLEDEPTH, $peduncledepth, $comparison);
    }

    /**
     * Filter the query on the PeduncleLength column
     *
     * Example usage:
     * <code>
     * $query->filterByPedunclelength(1234); // WHERE PeduncleLength = 1234
     * $query->filterByPedunclelength(array(12, 34)); // WHERE PeduncleLength IN (12, 34)
     * $query->filterByPedunclelength(array('min' => 12)); // WHERE PeduncleLength >= 12
     * $query->filterByPedunclelength(array('max' => 12)); // WHERE PeduncleLength <= 12
     * </code>
     *
     * @param     mixed $pedunclelength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPedunclelength($pedunclelength = null, $comparison = null)
    {
        if (is_array($pedunclelength)) {
            $useMinMax = false;
            if (isset($pedunclelength['min'])) {
                $this->addUsingAlias(MorphdatPeer::PEDUNCLELENGTH, $pedunclelength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pedunclelength['max'])) {
                $this->addUsingAlias(MorphdatPeer::PEDUNCLELENGTH, $pedunclelength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PEDUNCLELENGTH, $pedunclelength, $comparison);
    }

    /**
     * Filter the query on the CaudalHeight column
     *
     * Example usage:
     * <code>
     * $query->filterByCaudalheight(1234); // WHERE CaudalHeight = 1234
     * $query->filterByCaudalheight(array(12, 34)); // WHERE CaudalHeight IN (12, 34)
     * $query->filterByCaudalheight(array('min' => 12)); // WHERE CaudalHeight >= 12
     * $query->filterByCaudalheight(array('max' => 12)); // WHERE CaudalHeight <= 12
     * </code>
     *
     * @param     mixed $caudalheight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByCaudalheight($caudalheight = null, $comparison = null)
    {
        if (is_array($caudalheight)) {
            $useMinMax = false;
            if (isset($caudalheight['min'])) {
                $this->addUsingAlias(MorphdatPeer::CAUDALHEIGHT, $caudalheight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($caudalheight['max'])) {
                $this->addUsingAlias(MorphdatPeer::CAUDALHEIGHT, $caudalheight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::CAUDALHEIGHT, $caudalheight, $comparison);
    }

    /**
     * Filter the query on the PreorbitalLength column
     *
     * Example usage:
     * <code>
     * $query->filterByPreorbitallength(1234); // WHERE PreorbitalLength = 1234
     * $query->filterByPreorbitallength(array(12, 34)); // WHERE PreorbitalLength IN (12, 34)
     * $query->filterByPreorbitallength(array('min' => 12)); // WHERE PreorbitalLength >= 12
     * $query->filterByPreorbitallength(array('max' => 12)); // WHERE PreorbitalLength <= 12
     * </code>
     *
     * @param     mixed $preorbitallength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByPreorbitallength($preorbitallength = null, $comparison = null)
    {
        if (is_array($preorbitallength)) {
            $useMinMax = false;
            if (isset($preorbitallength['min'])) {
                $this->addUsingAlias(MorphdatPeer::PREORBITALLENGTH, $preorbitallength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preorbitallength['max'])) {
                $this->addUsingAlias(MorphdatPeer::PREORBITALLENGTH, $preorbitallength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::PREORBITALLENGTH, $preorbitallength, $comparison);
    }

    /**
     * Filter the query on the EyeLength column
     *
     * Example usage:
     * <code>
     * $query->filterByEyelength(1234); // WHERE EyeLength = 1234
     * $query->filterByEyelength(array(12, 34)); // WHERE EyeLength IN (12, 34)
     * $query->filterByEyelength(array('min' => 12)); // WHERE EyeLength >= 12
     * $query->filterByEyelength(array('max' => 12)); // WHERE EyeLength <= 12
     * </code>
     *
     * @param     mixed $eyelength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByEyelength($eyelength = null, $comparison = null)
    {
        if (is_array($eyelength)) {
            $useMinMax = false;
            if (isset($eyelength['min'])) {
                $this->addUsingAlias(MorphdatPeer::EYELENGTH, $eyelength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eyelength['max'])) {
                $this->addUsingAlias(MorphdatPeer::EYELENGTH, $eyelength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::EYELENGTH, $eyelength, $comparison);
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
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(MorphdatPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(MorphdatPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::ENTERED, $entered, $comparison);
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
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(MorphdatPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(MorphdatPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(MorphdatPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(MorphdatPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::MODIFIED, $modified, $comparison);
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
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(MorphdatPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(MorphdatPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(MorphdatPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(MorphdatPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::EXPERT, $expert, $comparison);
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
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(MorphdatPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(MorphdatPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the RemarkSex column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarksex('fooValue');   // WHERE RemarkSex = 'fooValue'
     * $query->filterByRemarksex('%fooValue%'); // WHERE RemarkSex LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarksex The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByRemarksex($remarksex = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarksex)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarksex)) {
                $remarksex = str_replace('*', '%', $remarksex);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::REMARKSEX, $remarksex, $comparison);
    }

    /**
     * Filter the query on the AddChars column
     *
     * Example usage:
     * <code>
     * $query->filterByAddchars('fooValue');   // WHERE AddChars = 'fooValue'
     * $query->filterByAddchars('%fooValue%'); // WHERE AddChars LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addchars The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByAddchars($addchars = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addchars)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addchars)) {
                $addchars = str_replace('*', '%', $addchars);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::ADDCHARS, $addchars, $comparison);
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
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterBySimilarspecies1($similarspecies1 = null, $comparison = null)
    {
        if (is_array($similarspecies1)) {
            $useMinMax = false;
            if (isset($similarspecies1['min'])) {
                $this->addUsingAlias(MorphdatPeer::SIMILARSPECIES1, $similarspecies1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($similarspecies1['max'])) {
                $this->addUsingAlias(MorphdatPeer::SIMILARSPECIES1, $similarspecies1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SIMILARSPECIES1, $similarspecies1, $comparison);
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
     * @return MorphdatQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MorphdatPeer::SIMILARSPEC1REMARKS, $similarspec1remarks, $comparison);
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
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterBySimilarspecies2($similarspecies2 = null, $comparison = null)
    {
        if (is_array($similarspecies2)) {
            $useMinMax = false;
            if (isset($similarspecies2['min'])) {
                $this->addUsingAlias(MorphdatPeer::SIMILARSPECIES2, $similarspecies2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($similarspecies2['max'])) {
                $this->addUsingAlias(MorphdatPeer::SIMILARSPECIES2, $similarspecies2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::SIMILARSPECIES2, $similarspecies2, $comparison);
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
     * @return MorphdatQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MorphdatPeer::SIMILARSPEC2REMARKS, $similarspec2remarks, $comparison);
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
     * @return MorphdatQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MorphdatPeer::EASEOFID, $easeofid, $comparison);
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
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByOtherref1($otherref1 = null, $comparison = null)
    {
        if (is_array($otherref1)) {
            $useMinMax = false;
            if (isset($otherref1['min'])) {
                $this->addUsingAlias(MorphdatPeer::OTHERREF1, $otherref1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otherref1['max'])) {
                $this->addUsingAlias(MorphdatPeer::OTHERREF1, $otherref1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::OTHERREF1, $otherref1, $comparison);
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
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByOtherref2($otherref2 = null, $comparison = null)
    {
        if (is_array($otherref2)) {
            $useMinMax = false;
            if (isset($otherref2['min'])) {
                $this->addUsingAlias(MorphdatPeer::OTHERREF2, $otherref2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otherref2['max'])) {
                $this->addUsingAlias(MorphdatPeer::OTHERREF2, $otherref2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::OTHERREF2, $otherref2, $comparison);
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
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(MorphdatPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(MorphdatPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MorphdatPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Morphdat $morphdat Object to remove from the list of results
     *
     * @return MorphdatQuery The current query, for fluid interface
     */
    public function prune($morphdat = null)
    {
        if ($morphdat) {
            $this->addUsingAlias(MorphdatPeer::STOCKCODE, $morphdat->getStockcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
