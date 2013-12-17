<?php


/**
 * Base class that represents a query for the 'disref' table.
 *
 *
 *
 * @method DisrefQuery orderByDiscode($order = Criteria::ASC) Order by the DisCode column
 * @method DisrefQuery orderByDiseasesrefno($order = Criteria::ASC) Order by the DiseasesRefNo column
 * @method DisrefQuery orderByDiseasei($order = Criteria::ASC) Order by the DiseaseI column
 * @method DisrefQuery orderByDiseaseii($order = Criteria::ASC) Order by the DiseaseII column
 * @method DisrefQuery orderByPic($order = Criteria::ASC) Order by the Pic column
 * @method DisrefQuery orderByOthernames($order = Criteria::ASC) Order by the Othernames column
 * @method DisrefQuery orderByGermgenus($order = Criteria::ASC) Order by the GermGenus column
 * @method DisrefQuery orderByGermspecies($order = Criteria::ASC) Order by the GermSpecies column
 * @method DisrefQuery orderByGroup($order = Criteria::ASC) Order by the Group column
 * @method DisrefQuery orderBySkinfinsafflicted($order = Criteria::ASC) Order by the SkinFinsAfflicted column
 * @method DisrefQuery orderByBellyafflicted($order = Criteria::ASC) Order by the BellyAfflicted column
 * @method DisrefQuery orderByAberrantbehavior($order = Criteria::ASC) Order by the AberrantBehavior column
 * @method DisrefQuery orderByGillsafflicted($order = Criteria::ASC) Order by the GillsAfflicted column
 * @method DisrefQuery orderByAnusafflicted($order = Criteria::ASC) Order by the AnusAfflicted column
 * @method DisrefQuery orderByOtherbehavior($order = Criteria::ASC) Order by the OtherBehavior column
 * @method DisrefQuery orderByEyesafflicted($order = Criteria::ASC) Order by the EyesAfflicted column
 * @method DisrefQuery orderByVisceraafflicted($order = Criteria::ASC) Order by the VisceraAfflicted column
 * @method DisrefQuery orderByOthersymptoms($order = Criteria::ASC) Order by the OtherSymptoms column
 * @method DisrefQuery orderByAberrantcolor($order = Criteria::ASC) Order by the AberrantColor column
 * @method DisrefQuery orderByAberrantcoat($order = Criteria::ASC) Order by the AberrantCoat column
 * @method DisrefQuery orderByAberrantmuscusprod($order = Criteria::ASC) Order by the AberrantMuscusProd column
 * @method DisrefQuery orderBySpots($order = Criteria::ASC) Order by the Spots column
 * @method DisrefQuery orderBySpotscolor($order = Criteria::ASC) Order by the SpotsColor column
 * @method DisrefQuery orderBySpotsonhead($order = Criteria::ASC) Order by the SpotsonHead column
 * @method DisrefQuery orderByDorsalspots($order = Criteria::ASC) Order by the DorsalSpots column
 * @method DisrefQuery orderBySpotsondorsalfin($order = Criteria::ASC) Order by the SpotsonDorsalFin column
 * @method DisrefQuery orderBySpotsoncaudalfin($order = Criteria::ASC) Order by the SpotsonCaudalFin column
 * @method DisrefQuery orderBySpotsontrunk($order = Criteria::ASC) Order by the SpotsonTrunk column
 * @method DisrefQuery orderByVentralspots($order = Criteria::ASC) Order by the VentralSpots column
 * @method DisrefQuery orderBySpotsonanalfin($order = Criteria::ASC) Order by the SpotsonAnalFin column
 * @method DisrefQuery orderBySpotsonunpairedf($order = Criteria::ASC) Order by the SpotsonUnpairedF column
 * @method DisrefQuery orderBySpotsontail($order = Criteria::ASC) Order by the SpotsonTail column
 * @method DisrefQuery orderByAreas($order = Criteria::ASC) Order by the Areas column
 * @method DisrefQuery orderByAreacolori($order = Criteria::ASC) Order by the AreaColorI column
 * @method DisrefQuery orderByAreasonhead($order = Criteria::ASC) Order by the AreasonHead column
 * @method DisrefQuery orderByDorsalareas($order = Criteria::ASC) Order by the DorsalAreas column
 * @method DisrefQuery orderByAreaondorsalfin($order = Criteria::ASC) Order by the AreaonDorsalFin column
 * @method DisrefQuery orderByAreaoncaudalfin($order = Criteria::ASC) Order by the AreaonCaudalFin column
 * @method DisrefQuery orderByAreasontrunk($order = Criteria::ASC) Order by the AreasonTrunk column
 * @method DisrefQuery orderByVentralareas($order = Criteria::ASC) Order by the VentralAreas column
 * @method DisrefQuery orderByAreaonanalfin($order = Criteria::ASC) Order by the AreaonAnalFin column
 * @method DisrefQuery orderByAreaonunpairedf($order = Criteria::ASC) Order by the AreaonUnpairedF column
 * @method DisrefQuery orderByAreasontail($order = Criteria::ASC) Order by the AreasonTail column
 * @method DisrefQuery orderByBoils($order = Criteria::ASC) Order by the Boils column
 * @method DisrefQuery orderByBoilscolor($order = Criteria::ASC) Order by the BoilsColor column
 * @method DisrefQuery orderByBoilsonhead($order = Criteria::ASC) Order by the BoilsonHead column
 * @method DisrefQuery orderByDorsalboils($order = Criteria::ASC) Order by the Dorsalboils column
 * @method DisrefQuery orderByBoilsondorsalfin($order = Criteria::ASC) Order by the BoilsonDorsalFin column
 * @method DisrefQuery orderByBoilsoncaudalfin($order = Criteria::ASC) Order by the BoilsonCaudalFin column
 * @method DisrefQuery orderByBoilsontrunk($order = Criteria::ASC) Order by the BoilsonTrunk column
 * @method DisrefQuery orderByVentralboils($order = Criteria::ASC) Order by the VentralBoils column
 * @method DisrefQuery orderByBoilsonanalfin($order = Criteria::ASC) Order by the BoilsonAnalFin column
 * @method DisrefQuery orderByBoilsonunpairedf($order = Criteria::ASC) Order by the BoilsonUnpairedF column
 * @method DisrefQuery orderByBoilsontail($order = Criteria::ASC) Order by the BoilsonTail column
 * @method DisrefQuery orderByUlcer($order = Criteria::ASC) Order by the Ulcer column
 * @method DisrefQuery orderByUlcercolor($order = Criteria::ASC) Order by the UlcerColor column
 * @method DisrefQuery orderByUlceronhead($order = Criteria::ASC) Order by the UlceronHead column
 * @method DisrefQuery orderByDorsalulcer($order = Criteria::ASC) Order by the DorsalUlcer column
 * @method DisrefQuery orderByUlcerondorsalfin($order = Criteria::ASC) Order by the UlceronDorsalFin column
 * @method DisrefQuery orderByUlceroncaudalfin($order = Criteria::ASC) Order by the UlceronCaudalFin column
 * @method DisrefQuery orderByUlcerontrunk($order = Criteria::ASC) Order by the UlceronTrunk column
 * @method DisrefQuery orderByVentralulcer($order = Criteria::ASC) Order by the VentralUlcer column
 * @method DisrefQuery orderByUlceronanalfin($order = Criteria::ASC) Order by the UlceronAnalFin column
 * @method DisrefQuery orderByUlceronunpairedf($order = Criteria::ASC) Order by the UlceronUnpairedF column
 * @method DisrefQuery orderByUlcerontail($order = Criteria::ASC) Order by the UlceronTail column
 * @method DisrefQuery orderByAttachmentsskin2($order = Criteria::ASC) Order by the AttachmentsSkin2 column
 * @method DisrefQuery orderByAttachmentonhead($order = Criteria::ASC) Order by the AttachmentonHead column
 * @method DisrefQuery orderByDorsalattachments($order = Criteria::ASC) Order by the DorsalAttachments column
 * @method DisrefQuery orderByAttondorsalfin($order = Criteria::ASC) Order by the AttonDorsalFin column
 * @method DisrefQuery orderByAttoncaudalfin($order = Criteria::ASC) Order by the AttonCaudalFin column
 * @method DisrefQuery orderByAttachmentontrunk($order = Criteria::ASC) Order by the AttachmentonTrunk column
 * @method DisrefQuery orderByVentralattachments($order = Criteria::ASC) Order by the VentralAttachments column
 * @method DisrefQuery orderByAttonanalfin($order = Criteria::ASC) Order by the AttonAnalFin column
 * @method DisrefQuery orderByAttonunpairedf($order = Criteria::ASC) Order by the AttonUnpairedF column
 * @method DisrefQuery orderByAttachmentontail($order = Criteria::ASC) Order by the AttachmentonTail column
 * @method DisrefQuery orderByFins1($order = Criteria::ASC) Order by the Fins1 column
 * @method DisrefQuery orderByDorsalfin($order = Criteria::ASC) Order by the DorsalFin column
 * @method DisrefQuery orderByCaudalfin($order = Criteria::ASC) Order by the CaudalFin column
 * @method DisrefQuery orderByAnalfin($order = Criteria::ASC) Order by the AnalFin column
 * @method DisrefQuery orderByUnpairedfins($order = Criteria::ASC) Order by the UnpairedFins column
 * @method DisrefQuery orderByAberrantcolorgills($order = Criteria::ASC) Order by the AberrantColorGills column
 * @method DisrefQuery orderByAbercolorgill($order = Criteria::ASC) Order by the AberColorGill column
 * @method DisrefQuery orderByEyecolor($order = Criteria::ASC) Order by the EyeColor column
 * @method DisrefQuery orderByAberrantspotsgill($order = Criteria::ASC) Order by the AberrantSpotsGill column
 * @method DisrefQuery orderByAberrantspotscolor($order = Criteria::ASC) Order by the AberrantSpotsColor column
 * @method DisrefQuery orderByEyespots($order = Criteria::ASC) Order by the EyeSpots column
 * @method DisrefQuery orderByKnotsongills($order = Criteria::ASC) Order by the KnotsonGills column
 * @method DisrefQuery orderByKnotscolor($order = Criteria::ASC) Order by the KnotsColor column
 * @method DisrefQuery orderByEyescondition($order = Criteria::ASC) Order by the EyesCondition column
 * @method DisrefQuery orderByAreasongills($order = Criteria::ASC) Order by the AreasonGills column
 * @method DisrefQuery orderByAreascolor($order = Criteria::ASC) Order by the AreasColor column
 * @method DisrefQuery orderByMucusprodgills($order = Criteria::ASC) Order by the MucusProdGills column
 * @method DisrefQuery orderByConditiongills($order = Criteria::ASC) Order by the ConditionGills column
 * @method DisrefQuery orderByObjectgills($order = Criteria::ASC) Order by the ObjectGills column
 * @method DisrefQuery orderByAttachmentgills($order = Criteria::ASC) Order by the AttachmentGills column
 * @method DisrefQuery orderByBellycondition($order = Criteria::ASC) Order by the BellyCondition column
 * @method DisrefQuery orderByAnuscondition($order = Criteria::ASC) Order by the AnusCondition column
 * @method DisrefQuery orderByBellylumen($order = Criteria::ASC) Order by the BellyLumen column
 * @method DisrefQuery orderByAnuscolor($order = Criteria::ASC) Order by the AnusColor column
 * @method DisrefQuery orderByBellyworms($order = Criteria::ASC) Order by the BellyWorms column
 * @method DisrefQuery orderByAnusobject($order = Criteria::ASC) Order by the AnusObject column
 * @method DisrefQuery orderByAnusattachments($order = Criteria::ASC) Order by the AnusAttachments column
 * @method DisrefQuery orderByAnusexudates($order = Criteria::ASC) Order by the AnusExudates column
 * @method DisrefQuery orderByLiveraffl($order = Criteria::ASC) Order by the LiverAffl column
 * @method DisrefQuery orderByLiversize($order = Criteria::ASC) Order by the LiverSize column
 * @method DisrefQuery orderByLiverapp($order = Criteria::ASC) Order by the LiverApp column
 * @method DisrefQuery orderByLiverblot($order = Criteria::ASC) Order by the LiverBlot column
 * @method DisrefQuery orderByLiverblc($order = Criteria::ASC) Order by the LiverBlC column
 * @method DisrefQuery orderByLiverknots($order = Criteria::ASC) Order by the LiverKnots column
 * @method DisrefQuery orderByLiverknc($order = Criteria::ASC) Order by the LiverKnC column
 * @method DisrefQuery orderBySpleenaffl($order = Criteria::ASC) Order by the SpleenAffl column
 * @method DisrefQuery orderBySpleensize($order = Criteria::ASC) Order by the SpleenSize column
 * @method DisrefQuery orderBySpleenapp($order = Criteria::ASC) Order by the SpleenApp column
 * @method DisrefQuery orderBySpleenblot($order = Criteria::ASC) Order by the SpleenBlot column
 * @method DisrefQuery orderBySpleenblc($order = Criteria::ASC) Order by the SpleenBlC column
 * @method DisrefQuery orderBySpleenknots($order = Criteria::ASC) Order by the SpleenKnots column
 * @method DisrefQuery orderBySpleenknc($order = Criteria::ASC) Order by the SpleenKnC column
 * @method DisrefQuery orderByKidneyaffl($order = Criteria::ASC) Order by the KidneyAffl column
 * @method DisrefQuery orderByKidneysize($order = Criteria::ASC) Order by the KidneySize column
 * @method DisrefQuery orderByKidneyapp($order = Criteria::ASC) Order by the KidneyApp column
 * @method DisrefQuery orderByKidneyblot($order = Criteria::ASC) Order by the KidneyBlot column
 * @method DisrefQuery orderByKidneyblc($order = Criteria::ASC) Order by the KidneyBlC column
 * @method DisrefQuery orderByKidneyknots($order = Criteria::ASC) Order by the KidneyKnots column
 * @method DisrefQuery orderByKidneyknc($order = Criteria::ASC) Order by the KidneyKnC column
 * @method DisrefQuery orderBySwimbladderaffl($order = Criteria::ASC) Order by the SwimBladderAffl column
 * @method DisrefQuery orderBySwimbladdersize($order = Criteria::ASC) Order by the SwimBladderSize column
 * @method DisrefQuery orderBySwimbladderapp($order = Criteria::ASC) Order by the SwimBladderApp column
 * @method DisrefQuery orderBySwimbladderblot($order = Criteria::ASC) Order by the SwimBladderBlot column
 * @method DisrefQuery orderBySwimbladderblc($order = Criteria::ASC) Order by the SwimBladderBlC column
 * @method DisrefQuery orderBySwimbladderknots($order = Criteria::ASC) Order by the SwimBladderKnots column
 * @method DisrefQuery orderBySwimbladderknc($order = Criteria::ASC) Order by the SwimBladderKnC column
 * @method DisrefQuery orderByIntestineaffl($order = Criteria::ASC) Order by the IntestineAffl column
 * @method DisrefQuery orderByIntestinesize($order = Criteria::ASC) Order by the IntestineSize column
 * @method DisrefQuery orderByIntestineapp($order = Criteria::ASC) Order by the IntestineApp column
 * @method DisrefQuery orderByIntestineblot($order = Criteria::ASC) Order by the IntestineBlot column
 * @method DisrefQuery orderByIntestineblc($order = Criteria::ASC) Order by the IntestineBlC column
 * @method DisrefQuery orderByIntestineknots($order = Criteria::ASC) Order by the IntestineKnots column
 * @method DisrefQuery orderByIntestineknc($order = Criteria::ASC) Order by the IntestineKnC column
 * @method DisrefQuery orderByOtherorgans($order = Criteria::ASC) Order by the OtherOrgans column
 * @method DisrefQuery orderByOtherorganssize($order = Criteria::ASC) Order by the OtherOrgansSize column
 * @method DisrefQuery orderByOtherorgansblot($order = Criteria::ASC) Order by the OtherOrgansBlot column
 * @method DisrefQuery orderByOtherorgansblc($order = Criteria::ASC) Order by the OtherOrgansBlC column
 * @method DisrefQuery orderByOtherorgansknots($order = Criteria::ASC) Order by the OtherOrgansKnots column
 * @method DisrefQuery orderByOtherorgansknc($order = Criteria::ASC) Order by the OtherOrgansKnC column
 * @method DisrefQuery orderByAllorgans($order = Criteria::ASC) Order by the AllOrgans column
 * @method DisrefQuery orderByAllorgansapp($order = Criteria::ASC) Order by the AllOrgansApp column
 * @method DisrefQuery orderByBristeling($order = Criteria::ASC) Order by the Bristeling column
 * @method DisrefQuery orderByMortality($order = Criteria::ASC) Order by the Mortality column
 * @method DisrefQuery orderByLoss($order = Criteria::ASC) Order by the Loss column
 * @method DisrefQuery orderBySkeletondeformation($order = Criteria::ASC) Order by the SkeletonDeformation column
 * @method DisrefQuery orderBySpring($order = Criteria::ASC) Order by the Spring column
 * @method DisrefQuery orderBySummer($order = Criteria::ASC) Order by the Summer column
 * @method DisrefQuery orderByGrowthrate($order = Criteria::ASC) Order by the GrowthRate column
 * @method DisrefQuery orderByAutumn($order = Criteria::ASC) Order by the Autumn column
 * @method DisrefQuery orderByWinter($order = Criteria::ASC) Order by the Winter column
 * @method DisrefQuery orderByCondition($order = Criteria::ASC) Order by the Condition column
 * @method DisrefQuery orderByAberrantactivity($order = Criteria::ASC) Order by the AberrantActivity column
 * @method DisrefQuery orderByActivity($order = Criteria::ASC) Order by the Activity column
 * @method DisrefQuery orderByAberrantbalance($order = Criteria::ASC) Order by the AberrantBalance column
 * @method DisrefQuery orderByAberrantswmotions($order = Criteria::ASC) Order by the AberrantSwMotions column
 * @method DisrefQuery orderBySwimmingmotions($order = Criteria::ASC) Order by the SwimmingMotions column
 * @method DisrefQuery orderByAberrantbodydirec($order = Criteria::ASC) Order by the AberrantBodyDirec column
 * @method DisrefQuery orderByScraping($order = Criteria::ASC) Order by the Scraping column
 * @method DisrefQuery orderByJumping($order = Criteria::ASC) Order by the Jumping column
 * @method DisrefQuery orderByAberrantfins($order = Criteria::ASC) Order by the AberrantFins column
 * @method DisrefQuery orderByFins($order = Criteria::ASC) Order by the Fins column
 * @method DisrefQuery orderByAberrantlocation($order = Criteria::ASC) Order by the AberrantLocation column
 * @method DisrefQuery orderByFishnearsurface($order = Criteria::ASC) Order by the FishNearSurface column
 * @method DisrefQuery orderByInfloworoutflow($order = Criteria::ASC) Order by the InfloworOutflow column
 * @method DisrefQuery orderByAberrantappetite($order = Criteria::ASC) Order by the AberrantAppetite column
 * @method DisrefQuery orderByOperculum($order = Criteria::ASC) Order by the Operculum column
 * @method DisrefQuery orderByAberrantventilation($order = Criteria::ASC) Order by the AberrantVentilation column
 * @method DisrefQuery orderByFast($order = Criteria::ASC) Order by the Fast column
 * @method DisrefQuery orderBySlow($order = Criteria::ASC) Order by the Slow column
 * @method DisrefQuery orderByFlat($order = Criteria::ASC) Order by the Flat column
 * @method DisrefQuery orderByHeavy($order = Criteria::ASC) Order by the heavy column
 * @method DisrefQuery orderByGaspingair($order = Criteria::ASC) Order by the GaspingAir column
 * @method DisrefQuery orderByFishafflicted($order = Criteria::ASC) Order by the FishAfflicted column
 * @method DisrefQuery orderByFishafflicted2($order = Criteria::ASC) Order by the FishAfflicted2 column
 * @method DisrefQuery orderByFishafflicted3($order = Criteria::ASC) Order by the FishAfflicted3 column
 * @method DisrefQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method DisrefQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method DisrefQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method DisrefQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method DisrefQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method DisrefQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method DisrefQuery orderByFishafflict($order = Criteria::ASC) Order by the Fishafflict column
 * @method DisrefQuery orderBySymptom($order = Criteria::ASC) Order by the Symptom column
 * @method DisrefQuery orderByTreatments($order = Criteria::ASC) Order by the Treatments column
 * @method DisrefQuery orderByProphylaxes($order = Criteria::ASC) Order by the Prophylaxes column
 * @method DisrefQuery orderByAddrems($order = Criteria::ASC) Order by the AddRems column
 * @method DisrefQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method DisrefQuery groupByDiscode() Group by the DisCode column
 * @method DisrefQuery groupByDiseasesrefno() Group by the DiseasesRefNo column
 * @method DisrefQuery groupByDiseasei() Group by the DiseaseI column
 * @method DisrefQuery groupByDiseaseii() Group by the DiseaseII column
 * @method DisrefQuery groupByPic() Group by the Pic column
 * @method DisrefQuery groupByOthernames() Group by the Othernames column
 * @method DisrefQuery groupByGermgenus() Group by the GermGenus column
 * @method DisrefQuery groupByGermspecies() Group by the GermSpecies column
 * @method DisrefQuery groupByGroup() Group by the Group column
 * @method DisrefQuery groupBySkinfinsafflicted() Group by the SkinFinsAfflicted column
 * @method DisrefQuery groupByBellyafflicted() Group by the BellyAfflicted column
 * @method DisrefQuery groupByAberrantbehavior() Group by the AberrantBehavior column
 * @method DisrefQuery groupByGillsafflicted() Group by the GillsAfflicted column
 * @method DisrefQuery groupByAnusafflicted() Group by the AnusAfflicted column
 * @method DisrefQuery groupByOtherbehavior() Group by the OtherBehavior column
 * @method DisrefQuery groupByEyesafflicted() Group by the EyesAfflicted column
 * @method DisrefQuery groupByVisceraafflicted() Group by the VisceraAfflicted column
 * @method DisrefQuery groupByOthersymptoms() Group by the OtherSymptoms column
 * @method DisrefQuery groupByAberrantcolor() Group by the AberrantColor column
 * @method DisrefQuery groupByAberrantcoat() Group by the AberrantCoat column
 * @method DisrefQuery groupByAberrantmuscusprod() Group by the AberrantMuscusProd column
 * @method DisrefQuery groupBySpots() Group by the Spots column
 * @method DisrefQuery groupBySpotscolor() Group by the SpotsColor column
 * @method DisrefQuery groupBySpotsonhead() Group by the SpotsonHead column
 * @method DisrefQuery groupByDorsalspots() Group by the DorsalSpots column
 * @method DisrefQuery groupBySpotsondorsalfin() Group by the SpotsonDorsalFin column
 * @method DisrefQuery groupBySpotsoncaudalfin() Group by the SpotsonCaudalFin column
 * @method DisrefQuery groupBySpotsontrunk() Group by the SpotsonTrunk column
 * @method DisrefQuery groupByVentralspots() Group by the VentralSpots column
 * @method DisrefQuery groupBySpotsonanalfin() Group by the SpotsonAnalFin column
 * @method DisrefQuery groupBySpotsonunpairedf() Group by the SpotsonUnpairedF column
 * @method DisrefQuery groupBySpotsontail() Group by the SpotsonTail column
 * @method DisrefQuery groupByAreas() Group by the Areas column
 * @method DisrefQuery groupByAreacolori() Group by the AreaColorI column
 * @method DisrefQuery groupByAreasonhead() Group by the AreasonHead column
 * @method DisrefQuery groupByDorsalareas() Group by the DorsalAreas column
 * @method DisrefQuery groupByAreaondorsalfin() Group by the AreaonDorsalFin column
 * @method DisrefQuery groupByAreaoncaudalfin() Group by the AreaonCaudalFin column
 * @method DisrefQuery groupByAreasontrunk() Group by the AreasonTrunk column
 * @method DisrefQuery groupByVentralareas() Group by the VentralAreas column
 * @method DisrefQuery groupByAreaonanalfin() Group by the AreaonAnalFin column
 * @method DisrefQuery groupByAreaonunpairedf() Group by the AreaonUnpairedF column
 * @method DisrefQuery groupByAreasontail() Group by the AreasonTail column
 * @method DisrefQuery groupByBoils() Group by the Boils column
 * @method DisrefQuery groupByBoilscolor() Group by the BoilsColor column
 * @method DisrefQuery groupByBoilsonhead() Group by the BoilsonHead column
 * @method DisrefQuery groupByDorsalboils() Group by the Dorsalboils column
 * @method DisrefQuery groupByBoilsondorsalfin() Group by the BoilsonDorsalFin column
 * @method DisrefQuery groupByBoilsoncaudalfin() Group by the BoilsonCaudalFin column
 * @method DisrefQuery groupByBoilsontrunk() Group by the BoilsonTrunk column
 * @method DisrefQuery groupByVentralboils() Group by the VentralBoils column
 * @method DisrefQuery groupByBoilsonanalfin() Group by the BoilsonAnalFin column
 * @method DisrefQuery groupByBoilsonunpairedf() Group by the BoilsonUnpairedF column
 * @method DisrefQuery groupByBoilsontail() Group by the BoilsonTail column
 * @method DisrefQuery groupByUlcer() Group by the Ulcer column
 * @method DisrefQuery groupByUlcercolor() Group by the UlcerColor column
 * @method DisrefQuery groupByUlceronhead() Group by the UlceronHead column
 * @method DisrefQuery groupByDorsalulcer() Group by the DorsalUlcer column
 * @method DisrefQuery groupByUlcerondorsalfin() Group by the UlceronDorsalFin column
 * @method DisrefQuery groupByUlceroncaudalfin() Group by the UlceronCaudalFin column
 * @method DisrefQuery groupByUlcerontrunk() Group by the UlceronTrunk column
 * @method DisrefQuery groupByVentralulcer() Group by the VentralUlcer column
 * @method DisrefQuery groupByUlceronanalfin() Group by the UlceronAnalFin column
 * @method DisrefQuery groupByUlceronunpairedf() Group by the UlceronUnpairedF column
 * @method DisrefQuery groupByUlcerontail() Group by the UlceronTail column
 * @method DisrefQuery groupByAttachmentsskin2() Group by the AttachmentsSkin2 column
 * @method DisrefQuery groupByAttachmentonhead() Group by the AttachmentonHead column
 * @method DisrefQuery groupByDorsalattachments() Group by the DorsalAttachments column
 * @method DisrefQuery groupByAttondorsalfin() Group by the AttonDorsalFin column
 * @method DisrefQuery groupByAttoncaudalfin() Group by the AttonCaudalFin column
 * @method DisrefQuery groupByAttachmentontrunk() Group by the AttachmentonTrunk column
 * @method DisrefQuery groupByVentralattachments() Group by the VentralAttachments column
 * @method DisrefQuery groupByAttonanalfin() Group by the AttonAnalFin column
 * @method DisrefQuery groupByAttonunpairedf() Group by the AttonUnpairedF column
 * @method DisrefQuery groupByAttachmentontail() Group by the AttachmentonTail column
 * @method DisrefQuery groupByFins1() Group by the Fins1 column
 * @method DisrefQuery groupByDorsalfin() Group by the DorsalFin column
 * @method DisrefQuery groupByCaudalfin() Group by the CaudalFin column
 * @method DisrefQuery groupByAnalfin() Group by the AnalFin column
 * @method DisrefQuery groupByUnpairedfins() Group by the UnpairedFins column
 * @method DisrefQuery groupByAberrantcolorgills() Group by the AberrantColorGills column
 * @method DisrefQuery groupByAbercolorgill() Group by the AberColorGill column
 * @method DisrefQuery groupByEyecolor() Group by the EyeColor column
 * @method DisrefQuery groupByAberrantspotsgill() Group by the AberrantSpotsGill column
 * @method DisrefQuery groupByAberrantspotscolor() Group by the AberrantSpotsColor column
 * @method DisrefQuery groupByEyespots() Group by the EyeSpots column
 * @method DisrefQuery groupByKnotsongills() Group by the KnotsonGills column
 * @method DisrefQuery groupByKnotscolor() Group by the KnotsColor column
 * @method DisrefQuery groupByEyescondition() Group by the EyesCondition column
 * @method DisrefQuery groupByAreasongills() Group by the AreasonGills column
 * @method DisrefQuery groupByAreascolor() Group by the AreasColor column
 * @method DisrefQuery groupByMucusprodgills() Group by the MucusProdGills column
 * @method DisrefQuery groupByConditiongills() Group by the ConditionGills column
 * @method DisrefQuery groupByObjectgills() Group by the ObjectGills column
 * @method DisrefQuery groupByAttachmentgills() Group by the AttachmentGills column
 * @method DisrefQuery groupByBellycondition() Group by the BellyCondition column
 * @method DisrefQuery groupByAnuscondition() Group by the AnusCondition column
 * @method DisrefQuery groupByBellylumen() Group by the BellyLumen column
 * @method DisrefQuery groupByAnuscolor() Group by the AnusColor column
 * @method DisrefQuery groupByBellyworms() Group by the BellyWorms column
 * @method DisrefQuery groupByAnusobject() Group by the AnusObject column
 * @method DisrefQuery groupByAnusattachments() Group by the AnusAttachments column
 * @method DisrefQuery groupByAnusexudates() Group by the AnusExudates column
 * @method DisrefQuery groupByLiveraffl() Group by the LiverAffl column
 * @method DisrefQuery groupByLiversize() Group by the LiverSize column
 * @method DisrefQuery groupByLiverapp() Group by the LiverApp column
 * @method DisrefQuery groupByLiverblot() Group by the LiverBlot column
 * @method DisrefQuery groupByLiverblc() Group by the LiverBlC column
 * @method DisrefQuery groupByLiverknots() Group by the LiverKnots column
 * @method DisrefQuery groupByLiverknc() Group by the LiverKnC column
 * @method DisrefQuery groupBySpleenaffl() Group by the SpleenAffl column
 * @method DisrefQuery groupBySpleensize() Group by the SpleenSize column
 * @method DisrefQuery groupBySpleenapp() Group by the SpleenApp column
 * @method DisrefQuery groupBySpleenblot() Group by the SpleenBlot column
 * @method DisrefQuery groupBySpleenblc() Group by the SpleenBlC column
 * @method DisrefQuery groupBySpleenknots() Group by the SpleenKnots column
 * @method DisrefQuery groupBySpleenknc() Group by the SpleenKnC column
 * @method DisrefQuery groupByKidneyaffl() Group by the KidneyAffl column
 * @method DisrefQuery groupByKidneysize() Group by the KidneySize column
 * @method DisrefQuery groupByKidneyapp() Group by the KidneyApp column
 * @method DisrefQuery groupByKidneyblot() Group by the KidneyBlot column
 * @method DisrefQuery groupByKidneyblc() Group by the KidneyBlC column
 * @method DisrefQuery groupByKidneyknots() Group by the KidneyKnots column
 * @method DisrefQuery groupByKidneyknc() Group by the KidneyKnC column
 * @method DisrefQuery groupBySwimbladderaffl() Group by the SwimBladderAffl column
 * @method DisrefQuery groupBySwimbladdersize() Group by the SwimBladderSize column
 * @method DisrefQuery groupBySwimbladderapp() Group by the SwimBladderApp column
 * @method DisrefQuery groupBySwimbladderblot() Group by the SwimBladderBlot column
 * @method DisrefQuery groupBySwimbladderblc() Group by the SwimBladderBlC column
 * @method DisrefQuery groupBySwimbladderknots() Group by the SwimBladderKnots column
 * @method DisrefQuery groupBySwimbladderknc() Group by the SwimBladderKnC column
 * @method DisrefQuery groupByIntestineaffl() Group by the IntestineAffl column
 * @method DisrefQuery groupByIntestinesize() Group by the IntestineSize column
 * @method DisrefQuery groupByIntestineapp() Group by the IntestineApp column
 * @method DisrefQuery groupByIntestineblot() Group by the IntestineBlot column
 * @method DisrefQuery groupByIntestineblc() Group by the IntestineBlC column
 * @method DisrefQuery groupByIntestineknots() Group by the IntestineKnots column
 * @method DisrefQuery groupByIntestineknc() Group by the IntestineKnC column
 * @method DisrefQuery groupByOtherorgans() Group by the OtherOrgans column
 * @method DisrefQuery groupByOtherorganssize() Group by the OtherOrgansSize column
 * @method DisrefQuery groupByOtherorgansblot() Group by the OtherOrgansBlot column
 * @method DisrefQuery groupByOtherorgansblc() Group by the OtherOrgansBlC column
 * @method DisrefQuery groupByOtherorgansknots() Group by the OtherOrgansKnots column
 * @method DisrefQuery groupByOtherorgansknc() Group by the OtherOrgansKnC column
 * @method DisrefQuery groupByAllorgans() Group by the AllOrgans column
 * @method DisrefQuery groupByAllorgansapp() Group by the AllOrgansApp column
 * @method DisrefQuery groupByBristeling() Group by the Bristeling column
 * @method DisrefQuery groupByMortality() Group by the Mortality column
 * @method DisrefQuery groupByLoss() Group by the Loss column
 * @method DisrefQuery groupBySkeletondeformation() Group by the SkeletonDeformation column
 * @method DisrefQuery groupBySpring() Group by the Spring column
 * @method DisrefQuery groupBySummer() Group by the Summer column
 * @method DisrefQuery groupByGrowthrate() Group by the GrowthRate column
 * @method DisrefQuery groupByAutumn() Group by the Autumn column
 * @method DisrefQuery groupByWinter() Group by the Winter column
 * @method DisrefQuery groupByCondition() Group by the Condition column
 * @method DisrefQuery groupByAberrantactivity() Group by the AberrantActivity column
 * @method DisrefQuery groupByActivity() Group by the Activity column
 * @method DisrefQuery groupByAberrantbalance() Group by the AberrantBalance column
 * @method DisrefQuery groupByAberrantswmotions() Group by the AberrantSwMotions column
 * @method DisrefQuery groupBySwimmingmotions() Group by the SwimmingMotions column
 * @method DisrefQuery groupByAberrantbodydirec() Group by the AberrantBodyDirec column
 * @method DisrefQuery groupByScraping() Group by the Scraping column
 * @method DisrefQuery groupByJumping() Group by the Jumping column
 * @method DisrefQuery groupByAberrantfins() Group by the AberrantFins column
 * @method DisrefQuery groupByFins() Group by the Fins column
 * @method DisrefQuery groupByAberrantlocation() Group by the AberrantLocation column
 * @method DisrefQuery groupByFishnearsurface() Group by the FishNearSurface column
 * @method DisrefQuery groupByInfloworoutflow() Group by the InfloworOutflow column
 * @method DisrefQuery groupByAberrantappetite() Group by the AberrantAppetite column
 * @method DisrefQuery groupByOperculum() Group by the Operculum column
 * @method DisrefQuery groupByAberrantventilation() Group by the AberrantVentilation column
 * @method DisrefQuery groupByFast() Group by the Fast column
 * @method DisrefQuery groupBySlow() Group by the Slow column
 * @method DisrefQuery groupByFlat() Group by the Flat column
 * @method DisrefQuery groupByHeavy() Group by the heavy column
 * @method DisrefQuery groupByGaspingair() Group by the GaspingAir column
 * @method DisrefQuery groupByFishafflicted() Group by the FishAfflicted column
 * @method DisrefQuery groupByFishafflicted2() Group by the FishAfflicted2 column
 * @method DisrefQuery groupByFishafflicted3() Group by the FishAfflicted3 column
 * @method DisrefQuery groupByEntered() Group by the Entered column
 * @method DisrefQuery groupByDateentered() Group by the DateEntered column
 * @method DisrefQuery groupByModified() Group by the Modified column
 * @method DisrefQuery groupByDatemodified() Group by the DateModified column
 * @method DisrefQuery groupByExpert() Group by the Expert column
 * @method DisrefQuery groupByDatechecked() Group by the DateChecked column
 * @method DisrefQuery groupByFishafflict() Group by the Fishafflict column
 * @method DisrefQuery groupBySymptom() Group by the Symptom column
 * @method DisrefQuery groupByTreatments() Group by the Treatments column
 * @method DisrefQuery groupByProphylaxes() Group by the Prophylaxes column
 * @method DisrefQuery groupByAddrems() Group by the AddRems column
 * @method DisrefQuery groupByTs() Group by the TS column
 *
 * @method DisrefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DisrefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DisrefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Disref findOne(PropelPDO $con = null) Return the first Disref matching the query
 * @method Disref findOneOrCreate(PropelPDO $con = null) Return the first Disref matching the query, or a new Disref object populated from the query conditions when no match is found
 *
 * @method Disref findOneByDiscode(int $DisCode) Return the first Disref filtered by the DisCode column
 * @method Disref findOneByDiseasesrefno(int $DiseasesRefNo) Return the first Disref filtered by the DiseasesRefNo column
 * @method Disref findOneByDiseasei(string $DiseaseI) Return the first Disref filtered by the DiseaseI column
 * @method Disref findOneByDiseaseii(string $DiseaseII) Return the first Disref filtered by the DiseaseII column
 * @method Disref findOneByPic(string $Pic) Return the first Disref filtered by the Pic column
 * @method Disref findOneByOthernames(string $Othernames) Return the first Disref filtered by the Othernames column
 * @method Disref findOneByGermgenus(string $GermGenus) Return the first Disref filtered by the GermGenus column
 * @method Disref findOneByGermspecies(string $GermSpecies) Return the first Disref filtered by the GermSpecies column
 * @method Disref findOneByGroup(string $Group) Return the first Disref filtered by the Group column
 * @method Disref findOneBySkinfinsafflicted(int $SkinFinsAfflicted) Return the first Disref filtered by the SkinFinsAfflicted column
 * @method Disref findOneByBellyafflicted(int $BellyAfflicted) Return the first Disref filtered by the BellyAfflicted column
 * @method Disref findOneByAberrantbehavior(int $AberrantBehavior) Return the first Disref filtered by the AberrantBehavior column
 * @method Disref findOneByGillsafflicted(int $GillsAfflicted) Return the first Disref filtered by the GillsAfflicted column
 * @method Disref findOneByAnusafflicted(int $AnusAfflicted) Return the first Disref filtered by the AnusAfflicted column
 * @method Disref findOneByOtherbehavior(int $OtherBehavior) Return the first Disref filtered by the OtherBehavior column
 * @method Disref findOneByEyesafflicted(int $EyesAfflicted) Return the first Disref filtered by the EyesAfflicted column
 * @method Disref findOneByVisceraafflicted(int $VisceraAfflicted) Return the first Disref filtered by the VisceraAfflicted column
 * @method Disref findOneByOthersymptoms(int $OtherSymptoms) Return the first Disref filtered by the OtherSymptoms column
 * @method Disref findOneByAberrantcolor(int $AberrantColor) Return the first Disref filtered by the AberrantColor column
 * @method Disref findOneByAberrantcoat(int $AberrantCoat) Return the first Disref filtered by the AberrantCoat column
 * @method Disref findOneByAberrantmuscusprod(int $AberrantMuscusProd) Return the first Disref filtered by the AberrantMuscusProd column
 * @method Disref findOneBySpots(int $Spots) Return the first Disref filtered by the Spots column
 * @method Disref findOneBySpotscolor(string $SpotsColor) Return the first Disref filtered by the SpotsColor column
 * @method Disref findOneBySpotsonhead(int $SpotsonHead) Return the first Disref filtered by the SpotsonHead column
 * @method Disref findOneByDorsalspots(int $DorsalSpots) Return the first Disref filtered by the DorsalSpots column
 * @method Disref findOneBySpotsondorsalfin(int $SpotsonDorsalFin) Return the first Disref filtered by the SpotsonDorsalFin column
 * @method Disref findOneBySpotsoncaudalfin(int $SpotsonCaudalFin) Return the first Disref filtered by the SpotsonCaudalFin column
 * @method Disref findOneBySpotsontrunk(int $SpotsonTrunk) Return the first Disref filtered by the SpotsonTrunk column
 * @method Disref findOneByVentralspots(int $VentralSpots) Return the first Disref filtered by the VentralSpots column
 * @method Disref findOneBySpotsonanalfin(int $SpotsonAnalFin) Return the first Disref filtered by the SpotsonAnalFin column
 * @method Disref findOneBySpotsonunpairedf(int $SpotsonUnpairedF) Return the first Disref filtered by the SpotsonUnpairedF column
 * @method Disref findOneBySpotsontail(int $SpotsonTail) Return the first Disref filtered by the SpotsonTail column
 * @method Disref findOneByAreas(int $Areas) Return the first Disref filtered by the Areas column
 * @method Disref findOneByAreacolori(string $AreaColorI) Return the first Disref filtered by the AreaColorI column
 * @method Disref findOneByAreasonhead(int $AreasonHead) Return the first Disref filtered by the AreasonHead column
 * @method Disref findOneByDorsalareas(int $DorsalAreas) Return the first Disref filtered by the DorsalAreas column
 * @method Disref findOneByAreaondorsalfin(int $AreaonDorsalFin) Return the first Disref filtered by the AreaonDorsalFin column
 * @method Disref findOneByAreaoncaudalfin(int $AreaonCaudalFin) Return the first Disref filtered by the AreaonCaudalFin column
 * @method Disref findOneByAreasontrunk(int $AreasonTrunk) Return the first Disref filtered by the AreasonTrunk column
 * @method Disref findOneByVentralareas(int $VentralAreas) Return the first Disref filtered by the VentralAreas column
 * @method Disref findOneByAreaonanalfin(int $AreaonAnalFin) Return the first Disref filtered by the AreaonAnalFin column
 * @method Disref findOneByAreaonunpairedf(int $AreaonUnpairedF) Return the first Disref filtered by the AreaonUnpairedF column
 * @method Disref findOneByAreasontail(int $AreasonTail) Return the first Disref filtered by the AreasonTail column
 * @method Disref findOneByBoils(int $Boils) Return the first Disref filtered by the Boils column
 * @method Disref findOneByBoilscolor(string $BoilsColor) Return the first Disref filtered by the BoilsColor column
 * @method Disref findOneByBoilsonhead(int $BoilsonHead) Return the first Disref filtered by the BoilsonHead column
 * @method Disref findOneByDorsalboils(int $Dorsalboils) Return the first Disref filtered by the Dorsalboils column
 * @method Disref findOneByBoilsondorsalfin(int $BoilsonDorsalFin) Return the first Disref filtered by the BoilsonDorsalFin column
 * @method Disref findOneByBoilsoncaudalfin(int $BoilsonCaudalFin) Return the first Disref filtered by the BoilsonCaudalFin column
 * @method Disref findOneByBoilsontrunk(int $BoilsonTrunk) Return the first Disref filtered by the BoilsonTrunk column
 * @method Disref findOneByVentralboils(int $VentralBoils) Return the first Disref filtered by the VentralBoils column
 * @method Disref findOneByBoilsonanalfin(int $BoilsonAnalFin) Return the first Disref filtered by the BoilsonAnalFin column
 * @method Disref findOneByBoilsonunpairedf(int $BoilsonUnpairedF) Return the first Disref filtered by the BoilsonUnpairedF column
 * @method Disref findOneByBoilsontail(int $BoilsonTail) Return the first Disref filtered by the BoilsonTail column
 * @method Disref findOneByUlcer(int $Ulcer) Return the first Disref filtered by the Ulcer column
 * @method Disref findOneByUlcercolor(string $UlcerColor) Return the first Disref filtered by the UlcerColor column
 * @method Disref findOneByUlceronhead(int $UlceronHead) Return the first Disref filtered by the UlceronHead column
 * @method Disref findOneByDorsalulcer(int $DorsalUlcer) Return the first Disref filtered by the DorsalUlcer column
 * @method Disref findOneByUlcerondorsalfin(int $UlceronDorsalFin) Return the first Disref filtered by the UlceronDorsalFin column
 * @method Disref findOneByUlceroncaudalfin(int $UlceronCaudalFin) Return the first Disref filtered by the UlceronCaudalFin column
 * @method Disref findOneByUlcerontrunk(int $UlceronTrunk) Return the first Disref filtered by the UlceronTrunk column
 * @method Disref findOneByVentralulcer(int $VentralUlcer) Return the first Disref filtered by the VentralUlcer column
 * @method Disref findOneByUlceronanalfin(int $UlceronAnalFin) Return the first Disref filtered by the UlceronAnalFin column
 * @method Disref findOneByUlceronunpairedf(int $UlceronUnpairedF) Return the first Disref filtered by the UlceronUnpairedF column
 * @method Disref findOneByUlcerontail(int $UlceronTail) Return the first Disref filtered by the UlceronTail column
 * @method Disref findOneByAttachmentsskin2(string $AttachmentsSkin2) Return the first Disref filtered by the AttachmentsSkin2 column
 * @method Disref findOneByAttachmentonhead(int $AttachmentonHead) Return the first Disref filtered by the AttachmentonHead column
 * @method Disref findOneByDorsalattachments(int $DorsalAttachments) Return the first Disref filtered by the DorsalAttachments column
 * @method Disref findOneByAttondorsalfin(int $AttonDorsalFin) Return the first Disref filtered by the AttonDorsalFin column
 * @method Disref findOneByAttoncaudalfin(int $AttonCaudalFin) Return the first Disref filtered by the AttonCaudalFin column
 * @method Disref findOneByAttachmentontrunk(int $AttachmentonTrunk) Return the first Disref filtered by the AttachmentonTrunk column
 * @method Disref findOneByVentralattachments(int $VentralAttachments) Return the first Disref filtered by the VentralAttachments column
 * @method Disref findOneByAttonanalfin(int $AttonAnalFin) Return the first Disref filtered by the AttonAnalFin column
 * @method Disref findOneByAttonunpairedf(int $AttonUnpairedF) Return the first Disref filtered by the AttonUnpairedF column
 * @method Disref findOneByAttachmentontail(int $AttachmentonTail) Return the first Disref filtered by the AttachmentonTail column
 * @method Disref findOneByFins1(string $Fins1) Return the first Disref filtered by the Fins1 column
 * @method Disref findOneByDorsalfin(int $DorsalFin) Return the first Disref filtered by the DorsalFin column
 * @method Disref findOneByCaudalfin(int $CaudalFin) Return the first Disref filtered by the CaudalFin column
 * @method Disref findOneByAnalfin(int $AnalFin) Return the first Disref filtered by the AnalFin column
 * @method Disref findOneByUnpairedfins(int $UnpairedFins) Return the first Disref filtered by the UnpairedFins column
 * @method Disref findOneByAberrantcolorgills(int $AberrantColorGills) Return the first Disref filtered by the AberrantColorGills column
 * @method Disref findOneByAbercolorgill(string $AberColorGill) Return the first Disref filtered by the AberColorGill column
 * @method Disref findOneByEyecolor(int $EyeColor) Return the first Disref filtered by the EyeColor column
 * @method Disref findOneByAberrantspotsgill(int $AberrantSpotsGill) Return the first Disref filtered by the AberrantSpotsGill column
 * @method Disref findOneByAberrantspotscolor(string $AberrantSpotsColor) Return the first Disref filtered by the AberrantSpotsColor column
 * @method Disref findOneByEyespots(string $EyeSpots) Return the first Disref filtered by the EyeSpots column
 * @method Disref findOneByKnotsongills(int $KnotsonGills) Return the first Disref filtered by the KnotsonGills column
 * @method Disref findOneByKnotscolor(string $KnotsColor) Return the first Disref filtered by the KnotsColor column
 * @method Disref findOneByEyescondition(string $EyesCondition) Return the first Disref filtered by the EyesCondition column
 * @method Disref findOneByAreasongills(int $AreasonGills) Return the first Disref filtered by the AreasonGills column
 * @method Disref findOneByAreascolor(string $AreasColor) Return the first Disref filtered by the AreasColor column
 * @method Disref findOneByMucusprodgills(int $MucusProdGills) Return the first Disref filtered by the MucusProdGills column
 * @method Disref findOneByConditiongills(int $ConditionGills) Return the first Disref filtered by the ConditionGills column
 * @method Disref findOneByObjectgills(int $ObjectGills) Return the first Disref filtered by the ObjectGills column
 * @method Disref findOneByAttachmentgills(string $AttachmentGills) Return the first Disref filtered by the AttachmentGills column
 * @method Disref findOneByBellycondition(string $BellyCondition) Return the first Disref filtered by the BellyCondition column
 * @method Disref findOneByAnuscondition(int $AnusCondition) Return the first Disref filtered by the AnusCondition column
 * @method Disref findOneByBellylumen(int $BellyLumen) Return the first Disref filtered by the BellyLumen column
 * @method Disref findOneByAnuscolor(int $AnusColor) Return the first Disref filtered by the AnusColor column
 * @method Disref findOneByBellyworms(string $BellyWorms) Return the first Disref filtered by the BellyWorms column
 * @method Disref findOneByAnusobject(int $AnusObject) Return the first Disref filtered by the AnusObject column
 * @method Disref findOneByAnusattachments(string $AnusAttachments) Return the first Disref filtered by the AnusAttachments column
 * @method Disref findOneByAnusexudates(int $AnusExudates) Return the first Disref filtered by the AnusExudates column
 * @method Disref findOneByLiveraffl(int $LiverAffl) Return the first Disref filtered by the LiverAffl column
 * @method Disref findOneByLiversize(string $LiverSize) Return the first Disref filtered by the LiverSize column
 * @method Disref findOneByLiverapp(string $LiverApp) Return the first Disref filtered by the LiverApp column
 * @method Disref findOneByLiverblot(int $LiverBlot) Return the first Disref filtered by the LiverBlot column
 * @method Disref findOneByLiverblc(string $LiverBlC) Return the first Disref filtered by the LiverBlC column
 * @method Disref findOneByLiverknots(int $LiverKnots) Return the first Disref filtered by the LiverKnots column
 * @method Disref findOneByLiverknc(string $LiverKnC) Return the first Disref filtered by the LiverKnC column
 * @method Disref findOneBySpleenaffl(int $SpleenAffl) Return the first Disref filtered by the SpleenAffl column
 * @method Disref findOneBySpleensize(string $SpleenSize) Return the first Disref filtered by the SpleenSize column
 * @method Disref findOneBySpleenapp(string $SpleenApp) Return the first Disref filtered by the SpleenApp column
 * @method Disref findOneBySpleenblot(int $SpleenBlot) Return the first Disref filtered by the SpleenBlot column
 * @method Disref findOneBySpleenblc(string $SpleenBlC) Return the first Disref filtered by the SpleenBlC column
 * @method Disref findOneBySpleenknots(int $SpleenKnots) Return the first Disref filtered by the SpleenKnots column
 * @method Disref findOneBySpleenknc(string $SpleenKnC) Return the first Disref filtered by the SpleenKnC column
 * @method Disref findOneByKidneyaffl(int $KidneyAffl) Return the first Disref filtered by the KidneyAffl column
 * @method Disref findOneByKidneysize(string $KidneySize) Return the first Disref filtered by the KidneySize column
 * @method Disref findOneByKidneyapp(string $KidneyApp) Return the first Disref filtered by the KidneyApp column
 * @method Disref findOneByKidneyblot(int $KidneyBlot) Return the first Disref filtered by the KidneyBlot column
 * @method Disref findOneByKidneyblc(string $KidneyBlC) Return the first Disref filtered by the KidneyBlC column
 * @method Disref findOneByKidneyknots(int $KidneyKnots) Return the first Disref filtered by the KidneyKnots column
 * @method Disref findOneByKidneyknc(string $KidneyKnC) Return the first Disref filtered by the KidneyKnC column
 * @method Disref findOneBySwimbladderaffl(int $SwimBladderAffl) Return the first Disref filtered by the SwimBladderAffl column
 * @method Disref findOneBySwimbladdersize(string $SwimBladderSize) Return the first Disref filtered by the SwimBladderSize column
 * @method Disref findOneBySwimbladderapp(string $SwimBladderApp) Return the first Disref filtered by the SwimBladderApp column
 * @method Disref findOneBySwimbladderblot(int $SwimBladderBlot) Return the first Disref filtered by the SwimBladderBlot column
 * @method Disref findOneBySwimbladderblc(string $SwimBladderBlC) Return the first Disref filtered by the SwimBladderBlC column
 * @method Disref findOneBySwimbladderknots(int $SwimBladderKnots) Return the first Disref filtered by the SwimBladderKnots column
 * @method Disref findOneBySwimbladderknc(string $SwimBladderKnC) Return the first Disref filtered by the SwimBladderKnC column
 * @method Disref findOneByIntestineaffl(int $IntestineAffl) Return the first Disref filtered by the IntestineAffl column
 * @method Disref findOneByIntestinesize(string $IntestineSize) Return the first Disref filtered by the IntestineSize column
 * @method Disref findOneByIntestineapp(string $IntestineApp) Return the first Disref filtered by the IntestineApp column
 * @method Disref findOneByIntestineblot(int $IntestineBlot) Return the first Disref filtered by the IntestineBlot column
 * @method Disref findOneByIntestineblc(string $IntestineBlC) Return the first Disref filtered by the IntestineBlC column
 * @method Disref findOneByIntestineknots(int $IntestineKnots) Return the first Disref filtered by the IntestineKnots column
 * @method Disref findOneByIntestineknc(string $IntestineKnC) Return the first Disref filtered by the IntestineKnC column
 * @method Disref findOneByOtherorgans(int $OtherOrgans) Return the first Disref filtered by the OtherOrgans column
 * @method Disref findOneByOtherorganssize(string $OtherOrgansSize) Return the first Disref filtered by the OtherOrgansSize column
 * @method Disref findOneByOtherorgansblot(int $OtherOrgansBlot) Return the first Disref filtered by the OtherOrgansBlot column
 * @method Disref findOneByOtherorgansblc(string $OtherOrgansBlC) Return the first Disref filtered by the OtherOrgansBlC column
 * @method Disref findOneByOtherorgansknots(int $OtherOrgansKnots) Return the first Disref filtered by the OtherOrgansKnots column
 * @method Disref findOneByOtherorgansknc(string $OtherOrgansKnC) Return the first Disref filtered by the OtherOrgansKnC column
 * @method Disref findOneByAllorgans(int $AllOrgans) Return the first Disref filtered by the AllOrgans column
 * @method Disref findOneByAllorgansapp(string $AllOrgansApp) Return the first Disref filtered by the AllOrgansApp column
 * @method Disref findOneByBristeling(int $Bristeling) Return the first Disref filtered by the Bristeling column
 * @method Disref findOneByMortality(string $Mortality) Return the first Disref filtered by the Mortality column
 * @method Disref findOneByLoss(int $Loss) Return the first Disref filtered by the Loss column
 * @method Disref findOneBySkeletondeformation(int $SkeletonDeformation) Return the first Disref filtered by the SkeletonDeformation column
 * @method Disref findOneBySpring(int $Spring) Return the first Disref filtered by the Spring column
 * @method Disref findOneBySummer(int $Summer) Return the first Disref filtered by the Summer column
 * @method Disref findOneByGrowthrate(int $GrowthRate) Return the first Disref filtered by the GrowthRate column
 * @method Disref findOneByAutumn(int $Autumn) Return the first Disref filtered by the Autumn column
 * @method Disref findOneByWinter(int $Winter) Return the first Disref filtered by the Winter column
 * @method Disref findOneByCondition(int $Condition) Return the first Disref filtered by the Condition column
 * @method Disref findOneByAberrantactivity(int $AberrantActivity) Return the first Disref filtered by the AberrantActivity column
 * @method Disref findOneByActivity(string $Activity) Return the first Disref filtered by the Activity column
 * @method Disref findOneByAberrantbalance(int $AberrantBalance) Return the first Disref filtered by the AberrantBalance column
 * @method Disref findOneByAberrantswmotions(int $AberrantSwMotions) Return the first Disref filtered by the AberrantSwMotions column
 * @method Disref findOneBySwimmingmotions(string $SwimmingMotions) Return the first Disref filtered by the SwimmingMotions column
 * @method Disref findOneByAberrantbodydirec(int $AberrantBodyDirec) Return the first Disref filtered by the AberrantBodyDirec column
 * @method Disref findOneByScraping(int $Scraping) Return the first Disref filtered by the Scraping column
 * @method Disref findOneByJumping(int $Jumping) Return the first Disref filtered by the Jumping column
 * @method Disref findOneByAberrantfins(int $AberrantFins) Return the first Disref filtered by the AberrantFins column
 * @method Disref findOneByFins(string $Fins) Return the first Disref filtered by the Fins column
 * @method Disref findOneByAberrantlocation(int $AberrantLocation) Return the first Disref filtered by the AberrantLocation column
 * @method Disref findOneByFishnearsurface(int $FishNearSurface) Return the first Disref filtered by the FishNearSurface column
 * @method Disref findOneByInfloworoutflow(int $InfloworOutflow) Return the first Disref filtered by the InfloworOutflow column
 * @method Disref findOneByAberrantappetite(int $AberrantAppetite) Return the first Disref filtered by the AberrantAppetite column
 * @method Disref findOneByOperculum(int $Operculum) Return the first Disref filtered by the Operculum column
 * @method Disref findOneByAberrantventilation(int $AberrantVentilation) Return the first Disref filtered by the AberrantVentilation column
 * @method Disref findOneByFast(int $Fast) Return the first Disref filtered by the Fast column
 * @method Disref findOneBySlow(int $Slow) Return the first Disref filtered by the Slow column
 * @method Disref findOneByFlat(int $Flat) Return the first Disref filtered by the Flat column
 * @method Disref findOneByHeavy(int $heavy) Return the first Disref filtered by the heavy column
 * @method Disref findOneByGaspingair(int $GaspingAir) Return the first Disref filtered by the GaspingAir column
 * @method Disref findOneByFishafflicted(string $FishAfflicted) Return the first Disref filtered by the FishAfflicted column
 * @method Disref findOneByFishafflicted2(string $FishAfflicted2) Return the first Disref filtered by the FishAfflicted2 column
 * @method Disref findOneByFishafflicted3(string $FishAfflicted3) Return the first Disref filtered by the FishAfflicted3 column
 * @method Disref findOneByEntered(int $Entered) Return the first Disref filtered by the Entered column
 * @method Disref findOneByDateentered(string $DateEntered) Return the first Disref filtered by the DateEntered column
 * @method Disref findOneByModified(int $Modified) Return the first Disref filtered by the Modified column
 * @method Disref findOneByDatemodified(string $DateModified) Return the first Disref filtered by the DateModified column
 * @method Disref findOneByExpert(int $Expert) Return the first Disref filtered by the Expert column
 * @method Disref findOneByDatechecked(string $DateChecked) Return the first Disref filtered by the DateChecked column
 * @method Disref findOneByFishafflict(string $Fishafflict) Return the first Disref filtered by the Fishafflict column
 * @method Disref findOneBySymptom(string $Symptom) Return the first Disref filtered by the Symptom column
 * @method Disref findOneByTreatments(string $Treatments) Return the first Disref filtered by the Treatments column
 * @method Disref findOneByProphylaxes(string $Prophylaxes) Return the first Disref filtered by the Prophylaxes column
 * @method Disref findOneByAddrems(string $AddRems) Return the first Disref filtered by the AddRems column
 * @method Disref findOneByTs(string $TS) Return the first Disref filtered by the TS column
 *
 * @method array findByDiscode(int $DisCode) Return Disref objects filtered by the DisCode column
 * @method array findByDiseasesrefno(int $DiseasesRefNo) Return Disref objects filtered by the DiseasesRefNo column
 * @method array findByDiseasei(string $DiseaseI) Return Disref objects filtered by the DiseaseI column
 * @method array findByDiseaseii(string $DiseaseII) Return Disref objects filtered by the DiseaseII column
 * @method array findByPic(string $Pic) Return Disref objects filtered by the Pic column
 * @method array findByOthernames(string $Othernames) Return Disref objects filtered by the Othernames column
 * @method array findByGermgenus(string $GermGenus) Return Disref objects filtered by the GermGenus column
 * @method array findByGermspecies(string $GermSpecies) Return Disref objects filtered by the GermSpecies column
 * @method array findByGroup(string $Group) Return Disref objects filtered by the Group column
 * @method array findBySkinfinsafflicted(int $SkinFinsAfflicted) Return Disref objects filtered by the SkinFinsAfflicted column
 * @method array findByBellyafflicted(int $BellyAfflicted) Return Disref objects filtered by the BellyAfflicted column
 * @method array findByAberrantbehavior(int $AberrantBehavior) Return Disref objects filtered by the AberrantBehavior column
 * @method array findByGillsafflicted(int $GillsAfflicted) Return Disref objects filtered by the GillsAfflicted column
 * @method array findByAnusafflicted(int $AnusAfflicted) Return Disref objects filtered by the AnusAfflicted column
 * @method array findByOtherbehavior(int $OtherBehavior) Return Disref objects filtered by the OtherBehavior column
 * @method array findByEyesafflicted(int $EyesAfflicted) Return Disref objects filtered by the EyesAfflicted column
 * @method array findByVisceraafflicted(int $VisceraAfflicted) Return Disref objects filtered by the VisceraAfflicted column
 * @method array findByOthersymptoms(int $OtherSymptoms) Return Disref objects filtered by the OtherSymptoms column
 * @method array findByAberrantcolor(int $AberrantColor) Return Disref objects filtered by the AberrantColor column
 * @method array findByAberrantcoat(int $AberrantCoat) Return Disref objects filtered by the AberrantCoat column
 * @method array findByAberrantmuscusprod(int $AberrantMuscusProd) Return Disref objects filtered by the AberrantMuscusProd column
 * @method array findBySpots(int $Spots) Return Disref objects filtered by the Spots column
 * @method array findBySpotscolor(string $SpotsColor) Return Disref objects filtered by the SpotsColor column
 * @method array findBySpotsonhead(int $SpotsonHead) Return Disref objects filtered by the SpotsonHead column
 * @method array findByDorsalspots(int $DorsalSpots) Return Disref objects filtered by the DorsalSpots column
 * @method array findBySpotsondorsalfin(int $SpotsonDorsalFin) Return Disref objects filtered by the SpotsonDorsalFin column
 * @method array findBySpotsoncaudalfin(int $SpotsonCaudalFin) Return Disref objects filtered by the SpotsonCaudalFin column
 * @method array findBySpotsontrunk(int $SpotsonTrunk) Return Disref objects filtered by the SpotsonTrunk column
 * @method array findByVentralspots(int $VentralSpots) Return Disref objects filtered by the VentralSpots column
 * @method array findBySpotsonanalfin(int $SpotsonAnalFin) Return Disref objects filtered by the SpotsonAnalFin column
 * @method array findBySpotsonunpairedf(int $SpotsonUnpairedF) Return Disref objects filtered by the SpotsonUnpairedF column
 * @method array findBySpotsontail(int $SpotsonTail) Return Disref objects filtered by the SpotsonTail column
 * @method array findByAreas(int $Areas) Return Disref objects filtered by the Areas column
 * @method array findByAreacolori(string $AreaColorI) Return Disref objects filtered by the AreaColorI column
 * @method array findByAreasonhead(int $AreasonHead) Return Disref objects filtered by the AreasonHead column
 * @method array findByDorsalareas(int $DorsalAreas) Return Disref objects filtered by the DorsalAreas column
 * @method array findByAreaondorsalfin(int $AreaonDorsalFin) Return Disref objects filtered by the AreaonDorsalFin column
 * @method array findByAreaoncaudalfin(int $AreaonCaudalFin) Return Disref objects filtered by the AreaonCaudalFin column
 * @method array findByAreasontrunk(int $AreasonTrunk) Return Disref objects filtered by the AreasonTrunk column
 * @method array findByVentralareas(int $VentralAreas) Return Disref objects filtered by the VentralAreas column
 * @method array findByAreaonanalfin(int $AreaonAnalFin) Return Disref objects filtered by the AreaonAnalFin column
 * @method array findByAreaonunpairedf(int $AreaonUnpairedF) Return Disref objects filtered by the AreaonUnpairedF column
 * @method array findByAreasontail(int $AreasonTail) Return Disref objects filtered by the AreasonTail column
 * @method array findByBoils(int $Boils) Return Disref objects filtered by the Boils column
 * @method array findByBoilscolor(string $BoilsColor) Return Disref objects filtered by the BoilsColor column
 * @method array findByBoilsonhead(int $BoilsonHead) Return Disref objects filtered by the BoilsonHead column
 * @method array findByDorsalboils(int $Dorsalboils) Return Disref objects filtered by the Dorsalboils column
 * @method array findByBoilsondorsalfin(int $BoilsonDorsalFin) Return Disref objects filtered by the BoilsonDorsalFin column
 * @method array findByBoilsoncaudalfin(int $BoilsonCaudalFin) Return Disref objects filtered by the BoilsonCaudalFin column
 * @method array findByBoilsontrunk(int $BoilsonTrunk) Return Disref objects filtered by the BoilsonTrunk column
 * @method array findByVentralboils(int $VentralBoils) Return Disref objects filtered by the VentralBoils column
 * @method array findByBoilsonanalfin(int $BoilsonAnalFin) Return Disref objects filtered by the BoilsonAnalFin column
 * @method array findByBoilsonunpairedf(int $BoilsonUnpairedF) Return Disref objects filtered by the BoilsonUnpairedF column
 * @method array findByBoilsontail(int $BoilsonTail) Return Disref objects filtered by the BoilsonTail column
 * @method array findByUlcer(int $Ulcer) Return Disref objects filtered by the Ulcer column
 * @method array findByUlcercolor(string $UlcerColor) Return Disref objects filtered by the UlcerColor column
 * @method array findByUlceronhead(int $UlceronHead) Return Disref objects filtered by the UlceronHead column
 * @method array findByDorsalulcer(int $DorsalUlcer) Return Disref objects filtered by the DorsalUlcer column
 * @method array findByUlcerondorsalfin(int $UlceronDorsalFin) Return Disref objects filtered by the UlceronDorsalFin column
 * @method array findByUlceroncaudalfin(int $UlceronCaudalFin) Return Disref objects filtered by the UlceronCaudalFin column
 * @method array findByUlcerontrunk(int $UlceronTrunk) Return Disref objects filtered by the UlceronTrunk column
 * @method array findByVentralulcer(int $VentralUlcer) Return Disref objects filtered by the VentralUlcer column
 * @method array findByUlceronanalfin(int $UlceronAnalFin) Return Disref objects filtered by the UlceronAnalFin column
 * @method array findByUlceronunpairedf(int $UlceronUnpairedF) Return Disref objects filtered by the UlceronUnpairedF column
 * @method array findByUlcerontail(int $UlceronTail) Return Disref objects filtered by the UlceronTail column
 * @method array findByAttachmentsskin2(string $AttachmentsSkin2) Return Disref objects filtered by the AttachmentsSkin2 column
 * @method array findByAttachmentonhead(int $AttachmentonHead) Return Disref objects filtered by the AttachmentonHead column
 * @method array findByDorsalattachments(int $DorsalAttachments) Return Disref objects filtered by the DorsalAttachments column
 * @method array findByAttondorsalfin(int $AttonDorsalFin) Return Disref objects filtered by the AttonDorsalFin column
 * @method array findByAttoncaudalfin(int $AttonCaudalFin) Return Disref objects filtered by the AttonCaudalFin column
 * @method array findByAttachmentontrunk(int $AttachmentonTrunk) Return Disref objects filtered by the AttachmentonTrunk column
 * @method array findByVentralattachments(int $VentralAttachments) Return Disref objects filtered by the VentralAttachments column
 * @method array findByAttonanalfin(int $AttonAnalFin) Return Disref objects filtered by the AttonAnalFin column
 * @method array findByAttonunpairedf(int $AttonUnpairedF) Return Disref objects filtered by the AttonUnpairedF column
 * @method array findByAttachmentontail(int $AttachmentonTail) Return Disref objects filtered by the AttachmentonTail column
 * @method array findByFins1(string $Fins1) Return Disref objects filtered by the Fins1 column
 * @method array findByDorsalfin(int $DorsalFin) Return Disref objects filtered by the DorsalFin column
 * @method array findByCaudalfin(int $CaudalFin) Return Disref objects filtered by the CaudalFin column
 * @method array findByAnalfin(int $AnalFin) Return Disref objects filtered by the AnalFin column
 * @method array findByUnpairedfins(int $UnpairedFins) Return Disref objects filtered by the UnpairedFins column
 * @method array findByAberrantcolorgills(int $AberrantColorGills) Return Disref objects filtered by the AberrantColorGills column
 * @method array findByAbercolorgill(string $AberColorGill) Return Disref objects filtered by the AberColorGill column
 * @method array findByEyecolor(int $EyeColor) Return Disref objects filtered by the EyeColor column
 * @method array findByAberrantspotsgill(int $AberrantSpotsGill) Return Disref objects filtered by the AberrantSpotsGill column
 * @method array findByAberrantspotscolor(string $AberrantSpotsColor) Return Disref objects filtered by the AberrantSpotsColor column
 * @method array findByEyespots(string $EyeSpots) Return Disref objects filtered by the EyeSpots column
 * @method array findByKnotsongills(int $KnotsonGills) Return Disref objects filtered by the KnotsonGills column
 * @method array findByKnotscolor(string $KnotsColor) Return Disref objects filtered by the KnotsColor column
 * @method array findByEyescondition(string $EyesCondition) Return Disref objects filtered by the EyesCondition column
 * @method array findByAreasongills(int $AreasonGills) Return Disref objects filtered by the AreasonGills column
 * @method array findByAreascolor(string $AreasColor) Return Disref objects filtered by the AreasColor column
 * @method array findByMucusprodgills(int $MucusProdGills) Return Disref objects filtered by the MucusProdGills column
 * @method array findByConditiongills(int $ConditionGills) Return Disref objects filtered by the ConditionGills column
 * @method array findByObjectgills(int $ObjectGills) Return Disref objects filtered by the ObjectGills column
 * @method array findByAttachmentgills(string $AttachmentGills) Return Disref objects filtered by the AttachmentGills column
 * @method array findByBellycondition(string $BellyCondition) Return Disref objects filtered by the BellyCondition column
 * @method array findByAnuscondition(int $AnusCondition) Return Disref objects filtered by the AnusCondition column
 * @method array findByBellylumen(int $BellyLumen) Return Disref objects filtered by the BellyLumen column
 * @method array findByAnuscolor(int $AnusColor) Return Disref objects filtered by the AnusColor column
 * @method array findByBellyworms(string $BellyWorms) Return Disref objects filtered by the BellyWorms column
 * @method array findByAnusobject(int $AnusObject) Return Disref objects filtered by the AnusObject column
 * @method array findByAnusattachments(string $AnusAttachments) Return Disref objects filtered by the AnusAttachments column
 * @method array findByAnusexudates(int $AnusExudates) Return Disref objects filtered by the AnusExudates column
 * @method array findByLiveraffl(int $LiverAffl) Return Disref objects filtered by the LiverAffl column
 * @method array findByLiversize(string $LiverSize) Return Disref objects filtered by the LiverSize column
 * @method array findByLiverapp(string $LiverApp) Return Disref objects filtered by the LiverApp column
 * @method array findByLiverblot(int $LiverBlot) Return Disref objects filtered by the LiverBlot column
 * @method array findByLiverblc(string $LiverBlC) Return Disref objects filtered by the LiverBlC column
 * @method array findByLiverknots(int $LiverKnots) Return Disref objects filtered by the LiverKnots column
 * @method array findByLiverknc(string $LiverKnC) Return Disref objects filtered by the LiverKnC column
 * @method array findBySpleenaffl(int $SpleenAffl) Return Disref objects filtered by the SpleenAffl column
 * @method array findBySpleensize(string $SpleenSize) Return Disref objects filtered by the SpleenSize column
 * @method array findBySpleenapp(string $SpleenApp) Return Disref objects filtered by the SpleenApp column
 * @method array findBySpleenblot(int $SpleenBlot) Return Disref objects filtered by the SpleenBlot column
 * @method array findBySpleenblc(string $SpleenBlC) Return Disref objects filtered by the SpleenBlC column
 * @method array findBySpleenknots(int $SpleenKnots) Return Disref objects filtered by the SpleenKnots column
 * @method array findBySpleenknc(string $SpleenKnC) Return Disref objects filtered by the SpleenKnC column
 * @method array findByKidneyaffl(int $KidneyAffl) Return Disref objects filtered by the KidneyAffl column
 * @method array findByKidneysize(string $KidneySize) Return Disref objects filtered by the KidneySize column
 * @method array findByKidneyapp(string $KidneyApp) Return Disref objects filtered by the KidneyApp column
 * @method array findByKidneyblot(int $KidneyBlot) Return Disref objects filtered by the KidneyBlot column
 * @method array findByKidneyblc(string $KidneyBlC) Return Disref objects filtered by the KidneyBlC column
 * @method array findByKidneyknots(int $KidneyKnots) Return Disref objects filtered by the KidneyKnots column
 * @method array findByKidneyknc(string $KidneyKnC) Return Disref objects filtered by the KidneyKnC column
 * @method array findBySwimbladderaffl(int $SwimBladderAffl) Return Disref objects filtered by the SwimBladderAffl column
 * @method array findBySwimbladdersize(string $SwimBladderSize) Return Disref objects filtered by the SwimBladderSize column
 * @method array findBySwimbladderapp(string $SwimBladderApp) Return Disref objects filtered by the SwimBladderApp column
 * @method array findBySwimbladderblot(int $SwimBladderBlot) Return Disref objects filtered by the SwimBladderBlot column
 * @method array findBySwimbladderblc(string $SwimBladderBlC) Return Disref objects filtered by the SwimBladderBlC column
 * @method array findBySwimbladderknots(int $SwimBladderKnots) Return Disref objects filtered by the SwimBladderKnots column
 * @method array findBySwimbladderknc(string $SwimBladderKnC) Return Disref objects filtered by the SwimBladderKnC column
 * @method array findByIntestineaffl(int $IntestineAffl) Return Disref objects filtered by the IntestineAffl column
 * @method array findByIntestinesize(string $IntestineSize) Return Disref objects filtered by the IntestineSize column
 * @method array findByIntestineapp(string $IntestineApp) Return Disref objects filtered by the IntestineApp column
 * @method array findByIntestineblot(int $IntestineBlot) Return Disref objects filtered by the IntestineBlot column
 * @method array findByIntestineblc(string $IntestineBlC) Return Disref objects filtered by the IntestineBlC column
 * @method array findByIntestineknots(int $IntestineKnots) Return Disref objects filtered by the IntestineKnots column
 * @method array findByIntestineknc(string $IntestineKnC) Return Disref objects filtered by the IntestineKnC column
 * @method array findByOtherorgans(int $OtherOrgans) Return Disref objects filtered by the OtherOrgans column
 * @method array findByOtherorganssize(string $OtherOrgansSize) Return Disref objects filtered by the OtherOrgansSize column
 * @method array findByOtherorgansblot(int $OtherOrgansBlot) Return Disref objects filtered by the OtherOrgansBlot column
 * @method array findByOtherorgansblc(string $OtherOrgansBlC) Return Disref objects filtered by the OtherOrgansBlC column
 * @method array findByOtherorgansknots(int $OtherOrgansKnots) Return Disref objects filtered by the OtherOrgansKnots column
 * @method array findByOtherorgansknc(string $OtherOrgansKnC) Return Disref objects filtered by the OtherOrgansKnC column
 * @method array findByAllorgans(int $AllOrgans) Return Disref objects filtered by the AllOrgans column
 * @method array findByAllorgansapp(string $AllOrgansApp) Return Disref objects filtered by the AllOrgansApp column
 * @method array findByBristeling(int $Bristeling) Return Disref objects filtered by the Bristeling column
 * @method array findByMortality(string $Mortality) Return Disref objects filtered by the Mortality column
 * @method array findByLoss(int $Loss) Return Disref objects filtered by the Loss column
 * @method array findBySkeletondeformation(int $SkeletonDeformation) Return Disref objects filtered by the SkeletonDeformation column
 * @method array findBySpring(int $Spring) Return Disref objects filtered by the Spring column
 * @method array findBySummer(int $Summer) Return Disref objects filtered by the Summer column
 * @method array findByGrowthrate(int $GrowthRate) Return Disref objects filtered by the GrowthRate column
 * @method array findByAutumn(int $Autumn) Return Disref objects filtered by the Autumn column
 * @method array findByWinter(int $Winter) Return Disref objects filtered by the Winter column
 * @method array findByCondition(int $Condition) Return Disref objects filtered by the Condition column
 * @method array findByAberrantactivity(int $AberrantActivity) Return Disref objects filtered by the AberrantActivity column
 * @method array findByActivity(string $Activity) Return Disref objects filtered by the Activity column
 * @method array findByAberrantbalance(int $AberrantBalance) Return Disref objects filtered by the AberrantBalance column
 * @method array findByAberrantswmotions(int $AberrantSwMotions) Return Disref objects filtered by the AberrantSwMotions column
 * @method array findBySwimmingmotions(string $SwimmingMotions) Return Disref objects filtered by the SwimmingMotions column
 * @method array findByAberrantbodydirec(int $AberrantBodyDirec) Return Disref objects filtered by the AberrantBodyDirec column
 * @method array findByScraping(int $Scraping) Return Disref objects filtered by the Scraping column
 * @method array findByJumping(int $Jumping) Return Disref objects filtered by the Jumping column
 * @method array findByAberrantfins(int $AberrantFins) Return Disref objects filtered by the AberrantFins column
 * @method array findByFins(string $Fins) Return Disref objects filtered by the Fins column
 * @method array findByAberrantlocation(int $AberrantLocation) Return Disref objects filtered by the AberrantLocation column
 * @method array findByFishnearsurface(int $FishNearSurface) Return Disref objects filtered by the FishNearSurface column
 * @method array findByInfloworoutflow(int $InfloworOutflow) Return Disref objects filtered by the InfloworOutflow column
 * @method array findByAberrantappetite(int $AberrantAppetite) Return Disref objects filtered by the AberrantAppetite column
 * @method array findByOperculum(int $Operculum) Return Disref objects filtered by the Operculum column
 * @method array findByAberrantventilation(int $AberrantVentilation) Return Disref objects filtered by the AberrantVentilation column
 * @method array findByFast(int $Fast) Return Disref objects filtered by the Fast column
 * @method array findBySlow(int $Slow) Return Disref objects filtered by the Slow column
 * @method array findByFlat(int $Flat) Return Disref objects filtered by the Flat column
 * @method array findByHeavy(int $heavy) Return Disref objects filtered by the heavy column
 * @method array findByGaspingair(int $GaspingAir) Return Disref objects filtered by the GaspingAir column
 * @method array findByFishafflicted(string $FishAfflicted) Return Disref objects filtered by the FishAfflicted column
 * @method array findByFishafflicted2(string $FishAfflicted2) Return Disref objects filtered by the FishAfflicted2 column
 * @method array findByFishafflicted3(string $FishAfflicted3) Return Disref objects filtered by the FishAfflicted3 column
 * @method array findByEntered(int $Entered) Return Disref objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Disref objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Disref objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Disref objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Disref objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Disref objects filtered by the DateChecked column
 * @method array findByFishafflict(string $Fishafflict) Return Disref objects filtered by the Fishafflict column
 * @method array findBySymptom(string $Symptom) Return Disref objects filtered by the Symptom column
 * @method array findByTreatments(string $Treatments) Return Disref objects filtered by the Treatments column
 * @method array findByProphylaxes(string $Prophylaxes) Return Disref objects filtered by the Prophylaxes column
 * @method array findByAddrems(string $AddRems) Return Disref objects filtered by the AddRems column
 * @method array findByTs(string $TS) Return Disref objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseDisrefQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDisrefQuery object.
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
            $modelName = 'Disref';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DisrefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DisrefQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DisrefQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DisrefQuery) {
            return $criteria;
        }
        $query = new DisrefQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$DiseasesRefNo, $DiseaseII, $GermGenus]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Disref|Disref[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DisrefPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DisrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Disref A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `DisCode`, `DiseasesRefNo`, `DiseaseI`, `DiseaseII`, `Pic`, `Othernames`, `GermGenus`, `GermSpecies`, `Group`, `SkinFinsAfflicted`, `BellyAfflicted`, `AberrantBehavior`, `GillsAfflicted`, `AnusAfflicted`, `OtherBehavior`, `EyesAfflicted`, `VisceraAfflicted`, `OtherSymptoms`, `AberrantColor`, `AberrantCoat`, `AberrantMuscusProd`, `Spots`, `SpotsColor`, `SpotsonHead`, `DorsalSpots`, `SpotsonDorsalFin`, `SpotsonCaudalFin`, `SpotsonTrunk`, `VentralSpots`, `SpotsonAnalFin`, `SpotsonUnpairedF`, `SpotsonTail`, `Areas`, `AreaColorI`, `AreasonHead`, `DorsalAreas`, `AreaonDorsalFin`, `AreaonCaudalFin`, `AreasonTrunk`, `VentralAreas`, `AreaonAnalFin`, `AreaonUnpairedF`, `AreasonTail`, `Boils`, `BoilsColor`, `BoilsonHead`, `Dorsalboils`, `BoilsonDorsalFin`, `BoilsonCaudalFin`, `BoilsonTrunk`, `VentralBoils`, `BoilsonAnalFin`, `BoilsonUnpairedF`, `BoilsonTail`, `Ulcer`, `UlcerColor`, `UlceronHead`, `DorsalUlcer`, `UlceronDorsalFin`, `UlceronCaudalFin`, `UlceronTrunk`, `VentralUlcer`, `UlceronAnalFin`, `UlceronUnpairedF`, `UlceronTail`, `AttachmentsSkin2`, `AttachmentonHead`, `DorsalAttachments`, `AttonDorsalFin`, `AttonCaudalFin`, `AttachmentonTrunk`, `VentralAttachments`, `AttonAnalFin`, `AttonUnpairedF`, `AttachmentonTail`, `Fins1`, `DorsalFin`, `CaudalFin`, `AnalFin`, `UnpairedFins`, `AberrantColorGills`, `AberColorGill`, `EyeColor`, `AberrantSpotsGill`, `AberrantSpotsColor`, `EyeSpots`, `KnotsonGills`, `KnotsColor`, `EyesCondition`, `AreasonGills`, `AreasColor`, `MucusProdGills`, `ConditionGills`, `ObjectGills`, `AttachmentGills`, `BellyCondition`, `AnusCondition`, `BellyLumen`, `AnusColor`, `BellyWorms`, `AnusObject`, `AnusAttachments`, `AnusExudates`, `LiverAffl`, `LiverSize`, `LiverApp`, `LiverBlot`, `LiverBlC`, `LiverKnots`, `LiverKnC`, `SpleenAffl`, `SpleenSize`, `SpleenApp`, `SpleenBlot`, `SpleenBlC`, `SpleenKnots`, `SpleenKnC`, `KidneyAffl`, `KidneySize`, `KidneyApp`, `KidneyBlot`, `KidneyBlC`, `KidneyKnots`, `KidneyKnC`, `SwimBladderAffl`, `SwimBladderSize`, `SwimBladderApp`, `SwimBladderBlot`, `SwimBladderBlC`, `SwimBladderKnots`, `SwimBladderKnC`, `IntestineAffl`, `IntestineSize`, `IntestineApp`, `IntestineBlot`, `IntestineBlC`, `IntestineKnots`, `IntestineKnC`, `OtherOrgans`, `OtherOrgansSize`, `OtherOrgansBlot`, `OtherOrgansBlC`, `OtherOrgansKnots`, `OtherOrgansKnC`, `AllOrgans`, `AllOrgansApp`, `Bristeling`, `Mortality`, `Loss`, `SkeletonDeformation`, `Spring`, `Summer`, `GrowthRate`, `Autumn`, `Winter`, `Condition`, `AberrantActivity`, `Activity`, `AberrantBalance`, `AberrantSwMotions`, `SwimmingMotions`, `AberrantBodyDirec`, `Scraping`, `Jumping`, `AberrantFins`, `Fins`, `AberrantLocation`, `FishNearSurface`, `InfloworOutflow`, `AberrantAppetite`, `Operculum`, `AberrantVentilation`, `Fast`, `Slow`, `Flat`, `heavy`, `GaspingAir`, `FishAfflicted`, `FishAfflicted2`, `FishAfflicted3`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Fishafflict`, `Symptom`, `Treatments`, `Prophylaxes`, `AddRems`, `TS` FROM `disref` WHERE `DiseasesRefNo` = :p0 AND `DiseaseII` = :p1 AND `GermGenus` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Disref();
            $obj->hydrate($row);
            DisrefPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Disref|Disref[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Disref[]|mixed the list of results, formatted by the current formatter
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
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(DisrefPeer::DISEASESREFNO, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(DisrefPeer::DISEASEII, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(DisrefPeer::GERMGENUS, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(DisrefPeer::DISEASESREFNO, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(DisrefPeer::DISEASEII, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(DisrefPeer::GERMGENUS, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the DisCode column
     *
     * Example usage:
     * <code>
     * $query->filterByDiscode(1234); // WHERE DisCode = 1234
     * $query->filterByDiscode(array(12, 34)); // WHERE DisCode IN (12, 34)
     * $query->filterByDiscode(array('min' => 12)); // WHERE DisCode >= 12
     * $query->filterByDiscode(array('max' => 12)); // WHERE DisCode <= 12
     * </code>
     *
     * @param     mixed $discode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByDiscode($discode = null, $comparison = null)
    {
        if (is_array($discode)) {
            $useMinMax = false;
            if (isset($discode['min'])) {
                $this->addUsingAlias(DisrefPeer::DISCODE, $discode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($discode['max'])) {
                $this->addUsingAlias(DisrefPeer::DISCODE, $discode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::DISCODE, $discode, $comparison);
    }

    /**
     * Filter the query on the DiseasesRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByDiseasesrefno(1234); // WHERE DiseasesRefNo = 1234
     * $query->filterByDiseasesrefno(array(12, 34)); // WHERE DiseasesRefNo IN (12, 34)
     * $query->filterByDiseasesrefno(array('min' => 12)); // WHERE DiseasesRefNo >= 12
     * $query->filterByDiseasesrefno(array('max' => 12)); // WHERE DiseasesRefNo <= 12
     * </code>
     *
     * @param     mixed $diseasesrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByDiseasesrefno($diseasesrefno = null, $comparison = null)
    {
        if (is_array($diseasesrefno)) {
            $useMinMax = false;
            if (isset($diseasesrefno['min'])) {
                $this->addUsingAlias(DisrefPeer::DISEASESREFNO, $diseasesrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diseasesrefno['max'])) {
                $this->addUsingAlias(DisrefPeer::DISEASESREFNO, $diseasesrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::DISEASESREFNO, $diseasesrefno, $comparison);
    }

    /**
     * Filter the query on the DiseaseI column
     *
     * Example usage:
     * <code>
     * $query->filterByDiseasei('fooValue');   // WHERE DiseaseI = 'fooValue'
     * $query->filterByDiseasei('%fooValue%'); // WHERE DiseaseI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diseasei The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByDiseasei($diseasei = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diseasei)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $diseasei)) {
                $diseasei = str_replace('*', '%', $diseasei);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::DISEASEI, $diseasei, $comparison);
    }

    /**
     * Filter the query on the DiseaseII column
     *
     * Example usage:
     * <code>
     * $query->filterByDiseaseii('fooValue');   // WHERE DiseaseII = 'fooValue'
     * $query->filterByDiseaseii('%fooValue%'); // WHERE DiseaseII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diseaseii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByDiseaseii($diseaseii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diseaseii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $diseaseii)) {
                $diseaseii = str_replace('*', '%', $diseaseii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::DISEASEII, $diseaseii, $comparison);
    }

    /**
     * Filter the query on the Pic column
     *
     * Example usage:
     * <code>
     * $query->filterByPic('fooValue');   // WHERE Pic = 'fooValue'
     * $query->filterByPic('%fooValue%'); // WHERE Pic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByPic($pic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pic)) {
                $pic = str_replace('*', '%', $pic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::PIC, $pic, $comparison);
    }

    /**
     * Filter the query on the Othernames column
     *
     * Example usage:
     * <code>
     * $query->filterByOthernames('fooValue');   // WHERE Othernames = 'fooValue'
     * $query->filterByOthernames('%fooValue%'); // WHERE Othernames LIKE '%fooValue%'
     * </code>
     *
     * @param     string $othernames The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByOthernames($othernames = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($othernames)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $othernames)) {
                $othernames = str_replace('*', '%', $othernames);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::OTHERNAMES, $othernames, $comparison);
    }

    /**
     * Filter the query on the GermGenus column
     *
     * Example usage:
     * <code>
     * $query->filterByGermgenus('fooValue');   // WHERE GermGenus = 'fooValue'
     * $query->filterByGermgenus('%fooValue%'); // WHERE GermGenus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $germgenus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByGermgenus($germgenus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($germgenus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $germgenus)) {
                $germgenus = str_replace('*', '%', $germgenus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::GERMGENUS, $germgenus, $comparison);
    }

    /**
     * Filter the query on the GermSpecies column
     *
     * Example usage:
     * <code>
     * $query->filterByGermspecies('fooValue');   // WHERE GermSpecies = 'fooValue'
     * $query->filterByGermspecies('%fooValue%'); // WHERE GermSpecies LIKE '%fooValue%'
     * </code>
     *
     * @param     string $germspecies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByGermspecies($germspecies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($germspecies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $germspecies)) {
                $germspecies = str_replace('*', '%', $germspecies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::GERMSPECIES, $germspecies, $comparison);
    }

    /**
     * Filter the query on the Group column
     *
     * Example usage:
     * <code>
     * $query->filterByGroup('fooValue');   // WHERE Group = 'fooValue'
     * $query->filterByGroup('%fooValue%'); // WHERE Group LIKE '%fooValue%'
     * </code>
     *
     * @param     string $group The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByGroup($group = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($group)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $group)) {
                $group = str_replace('*', '%', $group);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::GROUP, $group, $comparison);
    }

    /**
     * Filter the query on the SkinFinsAfflicted column
     *
     * Example usage:
     * <code>
     * $query->filterBySkinfinsafflicted(1234); // WHERE SkinFinsAfflicted = 1234
     * $query->filterBySkinfinsafflicted(array(12, 34)); // WHERE SkinFinsAfflicted IN (12, 34)
     * $query->filterBySkinfinsafflicted(array('min' => 12)); // WHERE SkinFinsAfflicted >= 12
     * $query->filterBySkinfinsafflicted(array('max' => 12)); // WHERE SkinFinsAfflicted <= 12
     * </code>
     *
     * @param     mixed $skinfinsafflicted The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySkinfinsafflicted($skinfinsafflicted = null, $comparison = null)
    {
        if (is_array($skinfinsafflicted)) {
            $useMinMax = false;
            if (isset($skinfinsafflicted['min'])) {
                $this->addUsingAlias(DisrefPeer::SKINFINSAFFLICTED, $skinfinsafflicted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($skinfinsafflicted['max'])) {
                $this->addUsingAlias(DisrefPeer::SKINFINSAFFLICTED, $skinfinsafflicted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SKINFINSAFFLICTED, $skinfinsafflicted, $comparison);
    }

    /**
     * Filter the query on the BellyAfflicted column
     *
     * Example usage:
     * <code>
     * $query->filterByBellyafflicted(1234); // WHERE BellyAfflicted = 1234
     * $query->filterByBellyafflicted(array(12, 34)); // WHERE BellyAfflicted IN (12, 34)
     * $query->filterByBellyafflicted(array('min' => 12)); // WHERE BellyAfflicted >= 12
     * $query->filterByBellyafflicted(array('max' => 12)); // WHERE BellyAfflicted <= 12
     * </code>
     *
     * @param     mixed $bellyafflicted The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByBellyafflicted($bellyafflicted = null, $comparison = null)
    {
        if (is_array($bellyafflicted)) {
            $useMinMax = false;
            if (isset($bellyafflicted['min'])) {
                $this->addUsingAlias(DisrefPeer::BELLYAFFLICTED, $bellyafflicted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bellyafflicted['max'])) {
                $this->addUsingAlias(DisrefPeer::BELLYAFFLICTED, $bellyafflicted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::BELLYAFFLICTED, $bellyafflicted, $comparison);
    }

    /**
     * Filter the query on the AberrantBehavior column
     *
     * Example usage:
     * <code>
     * $query->filterByAberrantbehavior(1234); // WHERE AberrantBehavior = 1234
     * $query->filterByAberrantbehavior(array(12, 34)); // WHERE AberrantBehavior IN (12, 34)
     * $query->filterByAberrantbehavior(array('min' => 12)); // WHERE AberrantBehavior >= 12
     * $query->filterByAberrantbehavior(array('max' => 12)); // WHERE AberrantBehavior <= 12
     * </code>
     *
     * @param     mixed $aberrantbehavior The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAberrantbehavior($aberrantbehavior = null, $comparison = null)
    {
        if (is_array($aberrantbehavior)) {
            $useMinMax = false;
            if (isset($aberrantbehavior['min'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTBEHAVIOR, $aberrantbehavior['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aberrantbehavior['max'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTBEHAVIOR, $aberrantbehavior['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERRANTBEHAVIOR, $aberrantbehavior, $comparison);
    }

    /**
     * Filter the query on the GillsAfflicted column
     *
     * Example usage:
     * <code>
     * $query->filterByGillsafflicted(1234); // WHERE GillsAfflicted = 1234
     * $query->filterByGillsafflicted(array(12, 34)); // WHERE GillsAfflicted IN (12, 34)
     * $query->filterByGillsafflicted(array('min' => 12)); // WHERE GillsAfflicted >= 12
     * $query->filterByGillsafflicted(array('max' => 12)); // WHERE GillsAfflicted <= 12
     * </code>
     *
     * @param     mixed $gillsafflicted The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByGillsafflicted($gillsafflicted = null, $comparison = null)
    {
        if (is_array($gillsafflicted)) {
            $useMinMax = false;
            if (isset($gillsafflicted['min'])) {
                $this->addUsingAlias(DisrefPeer::GILLSAFFLICTED, $gillsafflicted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gillsafflicted['max'])) {
                $this->addUsingAlias(DisrefPeer::GILLSAFFLICTED, $gillsafflicted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::GILLSAFFLICTED, $gillsafflicted, $comparison);
    }

    /**
     * Filter the query on the AnusAfflicted column
     *
     * Example usage:
     * <code>
     * $query->filterByAnusafflicted(1234); // WHERE AnusAfflicted = 1234
     * $query->filterByAnusafflicted(array(12, 34)); // WHERE AnusAfflicted IN (12, 34)
     * $query->filterByAnusafflicted(array('min' => 12)); // WHERE AnusAfflicted >= 12
     * $query->filterByAnusafflicted(array('max' => 12)); // WHERE AnusAfflicted <= 12
     * </code>
     *
     * @param     mixed $anusafflicted The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAnusafflicted($anusafflicted = null, $comparison = null)
    {
        if (is_array($anusafflicted)) {
            $useMinMax = false;
            if (isset($anusafflicted['min'])) {
                $this->addUsingAlias(DisrefPeer::ANUSAFFLICTED, $anusafflicted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($anusafflicted['max'])) {
                $this->addUsingAlias(DisrefPeer::ANUSAFFLICTED, $anusafflicted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ANUSAFFLICTED, $anusafflicted, $comparison);
    }

    /**
     * Filter the query on the OtherBehavior column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherbehavior(1234); // WHERE OtherBehavior = 1234
     * $query->filterByOtherbehavior(array(12, 34)); // WHERE OtherBehavior IN (12, 34)
     * $query->filterByOtherbehavior(array('min' => 12)); // WHERE OtherBehavior >= 12
     * $query->filterByOtherbehavior(array('max' => 12)); // WHERE OtherBehavior <= 12
     * </code>
     *
     * @param     mixed $otherbehavior The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByOtherbehavior($otherbehavior = null, $comparison = null)
    {
        if (is_array($otherbehavior)) {
            $useMinMax = false;
            if (isset($otherbehavior['min'])) {
                $this->addUsingAlias(DisrefPeer::OTHERBEHAVIOR, $otherbehavior['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otherbehavior['max'])) {
                $this->addUsingAlias(DisrefPeer::OTHERBEHAVIOR, $otherbehavior['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::OTHERBEHAVIOR, $otherbehavior, $comparison);
    }

    /**
     * Filter the query on the EyesAfflicted column
     *
     * Example usage:
     * <code>
     * $query->filterByEyesafflicted(1234); // WHERE EyesAfflicted = 1234
     * $query->filterByEyesafflicted(array(12, 34)); // WHERE EyesAfflicted IN (12, 34)
     * $query->filterByEyesafflicted(array('min' => 12)); // WHERE EyesAfflicted >= 12
     * $query->filterByEyesafflicted(array('max' => 12)); // WHERE EyesAfflicted <= 12
     * </code>
     *
     * @param     mixed $eyesafflicted The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByEyesafflicted($eyesafflicted = null, $comparison = null)
    {
        if (is_array($eyesafflicted)) {
            $useMinMax = false;
            if (isset($eyesafflicted['min'])) {
                $this->addUsingAlias(DisrefPeer::EYESAFFLICTED, $eyesafflicted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eyesafflicted['max'])) {
                $this->addUsingAlias(DisrefPeer::EYESAFFLICTED, $eyesafflicted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::EYESAFFLICTED, $eyesafflicted, $comparison);
    }

    /**
     * Filter the query on the VisceraAfflicted column
     *
     * Example usage:
     * <code>
     * $query->filterByVisceraafflicted(1234); // WHERE VisceraAfflicted = 1234
     * $query->filterByVisceraafflicted(array(12, 34)); // WHERE VisceraAfflicted IN (12, 34)
     * $query->filterByVisceraafflicted(array('min' => 12)); // WHERE VisceraAfflicted >= 12
     * $query->filterByVisceraafflicted(array('max' => 12)); // WHERE VisceraAfflicted <= 12
     * </code>
     *
     * @param     mixed $visceraafflicted The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByVisceraafflicted($visceraafflicted = null, $comparison = null)
    {
        if (is_array($visceraafflicted)) {
            $useMinMax = false;
            if (isset($visceraafflicted['min'])) {
                $this->addUsingAlias(DisrefPeer::VISCERAAFFLICTED, $visceraafflicted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visceraafflicted['max'])) {
                $this->addUsingAlias(DisrefPeer::VISCERAAFFLICTED, $visceraafflicted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::VISCERAAFFLICTED, $visceraafflicted, $comparison);
    }

    /**
     * Filter the query on the OtherSymptoms column
     *
     * Example usage:
     * <code>
     * $query->filterByOthersymptoms(1234); // WHERE OtherSymptoms = 1234
     * $query->filterByOthersymptoms(array(12, 34)); // WHERE OtherSymptoms IN (12, 34)
     * $query->filterByOthersymptoms(array('min' => 12)); // WHERE OtherSymptoms >= 12
     * $query->filterByOthersymptoms(array('max' => 12)); // WHERE OtherSymptoms <= 12
     * </code>
     *
     * @param     mixed $othersymptoms The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByOthersymptoms($othersymptoms = null, $comparison = null)
    {
        if (is_array($othersymptoms)) {
            $useMinMax = false;
            if (isset($othersymptoms['min'])) {
                $this->addUsingAlias(DisrefPeer::OTHERSYMPTOMS, $othersymptoms['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($othersymptoms['max'])) {
                $this->addUsingAlias(DisrefPeer::OTHERSYMPTOMS, $othersymptoms['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::OTHERSYMPTOMS, $othersymptoms, $comparison);
    }

    /**
     * Filter the query on the AberrantColor column
     *
     * Example usage:
     * <code>
     * $query->filterByAberrantcolor(1234); // WHERE AberrantColor = 1234
     * $query->filterByAberrantcolor(array(12, 34)); // WHERE AberrantColor IN (12, 34)
     * $query->filterByAberrantcolor(array('min' => 12)); // WHERE AberrantColor >= 12
     * $query->filterByAberrantcolor(array('max' => 12)); // WHERE AberrantColor <= 12
     * </code>
     *
     * @param     mixed $aberrantcolor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAberrantcolor($aberrantcolor = null, $comparison = null)
    {
        if (is_array($aberrantcolor)) {
            $useMinMax = false;
            if (isset($aberrantcolor['min'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTCOLOR, $aberrantcolor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aberrantcolor['max'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTCOLOR, $aberrantcolor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERRANTCOLOR, $aberrantcolor, $comparison);
    }

    /**
     * Filter the query on the AberrantCoat column
     *
     * Example usage:
     * <code>
     * $query->filterByAberrantcoat(1234); // WHERE AberrantCoat = 1234
     * $query->filterByAberrantcoat(array(12, 34)); // WHERE AberrantCoat IN (12, 34)
     * $query->filterByAberrantcoat(array('min' => 12)); // WHERE AberrantCoat >= 12
     * $query->filterByAberrantcoat(array('max' => 12)); // WHERE AberrantCoat <= 12
     * </code>
     *
     * @param     mixed $aberrantcoat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAberrantcoat($aberrantcoat = null, $comparison = null)
    {
        if (is_array($aberrantcoat)) {
            $useMinMax = false;
            if (isset($aberrantcoat['min'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTCOAT, $aberrantcoat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aberrantcoat['max'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTCOAT, $aberrantcoat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERRANTCOAT, $aberrantcoat, $comparison);
    }

    /**
     * Filter the query on the AberrantMuscusProd column
     *
     * Example usage:
     * <code>
     * $query->filterByAberrantmuscusprod(1234); // WHERE AberrantMuscusProd = 1234
     * $query->filterByAberrantmuscusprod(array(12, 34)); // WHERE AberrantMuscusProd IN (12, 34)
     * $query->filterByAberrantmuscusprod(array('min' => 12)); // WHERE AberrantMuscusProd >= 12
     * $query->filterByAberrantmuscusprod(array('max' => 12)); // WHERE AberrantMuscusProd <= 12
     * </code>
     *
     * @param     mixed $aberrantmuscusprod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAberrantmuscusprod($aberrantmuscusprod = null, $comparison = null)
    {
        if (is_array($aberrantmuscusprod)) {
            $useMinMax = false;
            if (isset($aberrantmuscusprod['min'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTMUSCUSPROD, $aberrantmuscusprod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aberrantmuscusprod['max'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTMUSCUSPROD, $aberrantmuscusprod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERRANTMUSCUSPROD, $aberrantmuscusprod, $comparison);
    }

    /**
     * Filter the query on the Spots column
     *
     * Example usage:
     * <code>
     * $query->filterBySpots(1234); // WHERE Spots = 1234
     * $query->filterBySpots(array(12, 34)); // WHERE Spots IN (12, 34)
     * $query->filterBySpots(array('min' => 12)); // WHERE Spots >= 12
     * $query->filterBySpots(array('max' => 12)); // WHERE Spots <= 12
     * </code>
     *
     * @param     mixed $spots The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpots($spots = null, $comparison = null)
    {
        if (is_array($spots)) {
            $useMinMax = false;
            if (isset($spots['min'])) {
                $this->addUsingAlias(DisrefPeer::SPOTS, $spots['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spots['max'])) {
                $this->addUsingAlias(DisrefPeer::SPOTS, $spots['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPOTS, $spots, $comparison);
    }

    /**
     * Filter the query on the SpotsColor column
     *
     * Example usage:
     * <code>
     * $query->filterBySpotscolor('fooValue');   // WHERE SpotsColor = 'fooValue'
     * $query->filterBySpotscolor('%fooValue%'); // WHERE SpotsColor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spotscolor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpotscolor($spotscolor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spotscolor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spotscolor)) {
                $spotscolor = str_replace('*', '%', $spotscolor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPOTSCOLOR, $spotscolor, $comparison);
    }

    /**
     * Filter the query on the SpotsonHead column
     *
     * Example usage:
     * <code>
     * $query->filterBySpotsonhead(1234); // WHERE SpotsonHead = 1234
     * $query->filterBySpotsonhead(array(12, 34)); // WHERE SpotsonHead IN (12, 34)
     * $query->filterBySpotsonhead(array('min' => 12)); // WHERE SpotsonHead >= 12
     * $query->filterBySpotsonhead(array('max' => 12)); // WHERE SpotsonHead <= 12
     * </code>
     *
     * @param     mixed $spotsonhead The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpotsonhead($spotsonhead = null, $comparison = null)
    {
        if (is_array($spotsonhead)) {
            $useMinMax = false;
            if (isset($spotsonhead['min'])) {
                $this->addUsingAlias(DisrefPeer::SPOTSONHEAD, $spotsonhead['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spotsonhead['max'])) {
                $this->addUsingAlias(DisrefPeer::SPOTSONHEAD, $spotsonhead['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPOTSONHEAD, $spotsonhead, $comparison);
    }

    /**
     * Filter the query on the DorsalSpots column
     *
     * Example usage:
     * <code>
     * $query->filterByDorsalspots(1234); // WHERE DorsalSpots = 1234
     * $query->filterByDorsalspots(array(12, 34)); // WHERE DorsalSpots IN (12, 34)
     * $query->filterByDorsalspots(array('min' => 12)); // WHERE DorsalSpots >= 12
     * $query->filterByDorsalspots(array('max' => 12)); // WHERE DorsalSpots <= 12
     * </code>
     *
     * @param     mixed $dorsalspots The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByDorsalspots($dorsalspots = null, $comparison = null)
    {
        if (is_array($dorsalspots)) {
            $useMinMax = false;
            if (isset($dorsalspots['min'])) {
                $this->addUsingAlias(DisrefPeer::DORSALSPOTS, $dorsalspots['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dorsalspots['max'])) {
                $this->addUsingAlias(DisrefPeer::DORSALSPOTS, $dorsalspots['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::DORSALSPOTS, $dorsalspots, $comparison);
    }

    /**
     * Filter the query on the SpotsonDorsalFin column
     *
     * Example usage:
     * <code>
     * $query->filterBySpotsondorsalfin(1234); // WHERE SpotsonDorsalFin = 1234
     * $query->filterBySpotsondorsalfin(array(12, 34)); // WHERE SpotsonDorsalFin IN (12, 34)
     * $query->filterBySpotsondorsalfin(array('min' => 12)); // WHERE SpotsonDorsalFin >= 12
     * $query->filterBySpotsondorsalfin(array('max' => 12)); // WHERE SpotsonDorsalFin <= 12
     * </code>
     *
     * @param     mixed $spotsondorsalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpotsondorsalfin($spotsondorsalfin = null, $comparison = null)
    {
        if (is_array($spotsondorsalfin)) {
            $useMinMax = false;
            if (isset($spotsondorsalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::SPOTSONDORSALFIN, $spotsondorsalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spotsondorsalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::SPOTSONDORSALFIN, $spotsondorsalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPOTSONDORSALFIN, $spotsondorsalfin, $comparison);
    }

    /**
     * Filter the query on the SpotsonCaudalFin column
     *
     * Example usage:
     * <code>
     * $query->filterBySpotsoncaudalfin(1234); // WHERE SpotsonCaudalFin = 1234
     * $query->filterBySpotsoncaudalfin(array(12, 34)); // WHERE SpotsonCaudalFin IN (12, 34)
     * $query->filterBySpotsoncaudalfin(array('min' => 12)); // WHERE SpotsonCaudalFin >= 12
     * $query->filterBySpotsoncaudalfin(array('max' => 12)); // WHERE SpotsonCaudalFin <= 12
     * </code>
     *
     * @param     mixed $spotsoncaudalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpotsoncaudalfin($spotsoncaudalfin = null, $comparison = null)
    {
        if (is_array($spotsoncaudalfin)) {
            $useMinMax = false;
            if (isset($spotsoncaudalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::SPOTSONCAUDALFIN, $spotsoncaudalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spotsoncaudalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::SPOTSONCAUDALFIN, $spotsoncaudalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPOTSONCAUDALFIN, $spotsoncaudalfin, $comparison);
    }

    /**
     * Filter the query on the SpotsonTrunk column
     *
     * Example usage:
     * <code>
     * $query->filterBySpotsontrunk(1234); // WHERE SpotsonTrunk = 1234
     * $query->filterBySpotsontrunk(array(12, 34)); // WHERE SpotsonTrunk IN (12, 34)
     * $query->filterBySpotsontrunk(array('min' => 12)); // WHERE SpotsonTrunk >= 12
     * $query->filterBySpotsontrunk(array('max' => 12)); // WHERE SpotsonTrunk <= 12
     * </code>
     *
     * @param     mixed $spotsontrunk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpotsontrunk($spotsontrunk = null, $comparison = null)
    {
        if (is_array($spotsontrunk)) {
            $useMinMax = false;
            if (isset($spotsontrunk['min'])) {
                $this->addUsingAlias(DisrefPeer::SPOTSONTRUNK, $spotsontrunk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spotsontrunk['max'])) {
                $this->addUsingAlias(DisrefPeer::SPOTSONTRUNK, $spotsontrunk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPOTSONTRUNK, $spotsontrunk, $comparison);
    }

    /**
     * Filter the query on the VentralSpots column
     *
     * Example usage:
     * <code>
     * $query->filterByVentralspots(1234); // WHERE VentralSpots = 1234
     * $query->filterByVentralspots(array(12, 34)); // WHERE VentralSpots IN (12, 34)
     * $query->filterByVentralspots(array('min' => 12)); // WHERE VentralSpots >= 12
     * $query->filterByVentralspots(array('max' => 12)); // WHERE VentralSpots <= 12
     * </code>
     *
     * @param     mixed $ventralspots The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByVentralspots($ventralspots = null, $comparison = null)
    {
        if (is_array($ventralspots)) {
            $useMinMax = false;
            if (isset($ventralspots['min'])) {
                $this->addUsingAlias(DisrefPeer::VENTRALSPOTS, $ventralspots['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventralspots['max'])) {
                $this->addUsingAlias(DisrefPeer::VENTRALSPOTS, $ventralspots['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::VENTRALSPOTS, $ventralspots, $comparison);
    }

    /**
     * Filter the query on the SpotsonAnalFin column
     *
     * Example usage:
     * <code>
     * $query->filterBySpotsonanalfin(1234); // WHERE SpotsonAnalFin = 1234
     * $query->filterBySpotsonanalfin(array(12, 34)); // WHERE SpotsonAnalFin IN (12, 34)
     * $query->filterBySpotsonanalfin(array('min' => 12)); // WHERE SpotsonAnalFin >= 12
     * $query->filterBySpotsonanalfin(array('max' => 12)); // WHERE SpotsonAnalFin <= 12
     * </code>
     *
     * @param     mixed $spotsonanalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpotsonanalfin($spotsonanalfin = null, $comparison = null)
    {
        if (is_array($spotsonanalfin)) {
            $useMinMax = false;
            if (isset($spotsonanalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::SPOTSONANALFIN, $spotsonanalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spotsonanalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::SPOTSONANALFIN, $spotsonanalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPOTSONANALFIN, $spotsonanalfin, $comparison);
    }

    /**
     * Filter the query on the SpotsonUnpairedF column
     *
     * Example usage:
     * <code>
     * $query->filterBySpotsonunpairedf(1234); // WHERE SpotsonUnpairedF = 1234
     * $query->filterBySpotsonunpairedf(array(12, 34)); // WHERE SpotsonUnpairedF IN (12, 34)
     * $query->filterBySpotsonunpairedf(array('min' => 12)); // WHERE SpotsonUnpairedF >= 12
     * $query->filterBySpotsonunpairedf(array('max' => 12)); // WHERE SpotsonUnpairedF <= 12
     * </code>
     *
     * @param     mixed $spotsonunpairedf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpotsonunpairedf($spotsonunpairedf = null, $comparison = null)
    {
        if (is_array($spotsonunpairedf)) {
            $useMinMax = false;
            if (isset($spotsonunpairedf['min'])) {
                $this->addUsingAlias(DisrefPeer::SPOTSONUNPAIREDF, $spotsonunpairedf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spotsonunpairedf['max'])) {
                $this->addUsingAlias(DisrefPeer::SPOTSONUNPAIREDF, $spotsonunpairedf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPOTSONUNPAIREDF, $spotsonunpairedf, $comparison);
    }

    /**
     * Filter the query on the SpotsonTail column
     *
     * Example usage:
     * <code>
     * $query->filterBySpotsontail(1234); // WHERE SpotsonTail = 1234
     * $query->filterBySpotsontail(array(12, 34)); // WHERE SpotsonTail IN (12, 34)
     * $query->filterBySpotsontail(array('min' => 12)); // WHERE SpotsonTail >= 12
     * $query->filterBySpotsontail(array('max' => 12)); // WHERE SpotsonTail <= 12
     * </code>
     *
     * @param     mixed $spotsontail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpotsontail($spotsontail = null, $comparison = null)
    {
        if (is_array($spotsontail)) {
            $useMinMax = false;
            if (isset($spotsontail['min'])) {
                $this->addUsingAlias(DisrefPeer::SPOTSONTAIL, $spotsontail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spotsontail['max'])) {
                $this->addUsingAlias(DisrefPeer::SPOTSONTAIL, $spotsontail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPOTSONTAIL, $spotsontail, $comparison);
    }

    /**
     * Filter the query on the Areas column
     *
     * Example usage:
     * <code>
     * $query->filterByAreas(1234); // WHERE Areas = 1234
     * $query->filterByAreas(array(12, 34)); // WHERE Areas IN (12, 34)
     * $query->filterByAreas(array('min' => 12)); // WHERE Areas >= 12
     * $query->filterByAreas(array('max' => 12)); // WHERE Areas <= 12
     * </code>
     *
     * @param     mixed $areas The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAreas($areas = null, $comparison = null)
    {
        if (is_array($areas)) {
            $useMinMax = false;
            if (isset($areas['min'])) {
                $this->addUsingAlias(DisrefPeer::AREAS, $areas['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areas['max'])) {
                $this->addUsingAlias(DisrefPeer::AREAS, $areas['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::AREAS, $areas, $comparison);
    }

    /**
     * Filter the query on the AreaColorI column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacolori('fooValue');   // WHERE AreaColorI = 'fooValue'
     * $query->filterByAreacolori('%fooValue%'); // WHERE AreaColorI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $areacolori The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAreacolori($areacolori = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($areacolori)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $areacolori)) {
                $areacolori = str_replace('*', '%', $areacolori);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::AREACOLORI, $areacolori, $comparison);
    }

    /**
     * Filter the query on the AreasonHead column
     *
     * Example usage:
     * <code>
     * $query->filterByAreasonhead(1234); // WHERE AreasonHead = 1234
     * $query->filterByAreasonhead(array(12, 34)); // WHERE AreasonHead IN (12, 34)
     * $query->filterByAreasonhead(array('min' => 12)); // WHERE AreasonHead >= 12
     * $query->filterByAreasonhead(array('max' => 12)); // WHERE AreasonHead <= 12
     * </code>
     *
     * @param     mixed $areasonhead The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAreasonhead($areasonhead = null, $comparison = null)
    {
        if (is_array($areasonhead)) {
            $useMinMax = false;
            if (isset($areasonhead['min'])) {
                $this->addUsingAlias(DisrefPeer::AREASONHEAD, $areasonhead['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areasonhead['max'])) {
                $this->addUsingAlias(DisrefPeer::AREASONHEAD, $areasonhead['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::AREASONHEAD, $areasonhead, $comparison);
    }

    /**
     * Filter the query on the DorsalAreas column
     *
     * Example usage:
     * <code>
     * $query->filterByDorsalareas(1234); // WHERE DorsalAreas = 1234
     * $query->filterByDorsalareas(array(12, 34)); // WHERE DorsalAreas IN (12, 34)
     * $query->filterByDorsalareas(array('min' => 12)); // WHERE DorsalAreas >= 12
     * $query->filterByDorsalareas(array('max' => 12)); // WHERE DorsalAreas <= 12
     * </code>
     *
     * @param     mixed $dorsalareas The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByDorsalareas($dorsalareas = null, $comparison = null)
    {
        if (is_array($dorsalareas)) {
            $useMinMax = false;
            if (isset($dorsalareas['min'])) {
                $this->addUsingAlias(DisrefPeer::DORSALAREAS, $dorsalareas['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dorsalareas['max'])) {
                $this->addUsingAlias(DisrefPeer::DORSALAREAS, $dorsalareas['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::DORSALAREAS, $dorsalareas, $comparison);
    }

    /**
     * Filter the query on the AreaonDorsalFin column
     *
     * Example usage:
     * <code>
     * $query->filterByAreaondorsalfin(1234); // WHERE AreaonDorsalFin = 1234
     * $query->filterByAreaondorsalfin(array(12, 34)); // WHERE AreaonDorsalFin IN (12, 34)
     * $query->filterByAreaondorsalfin(array('min' => 12)); // WHERE AreaonDorsalFin >= 12
     * $query->filterByAreaondorsalfin(array('max' => 12)); // WHERE AreaonDorsalFin <= 12
     * </code>
     *
     * @param     mixed $areaondorsalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAreaondorsalfin($areaondorsalfin = null, $comparison = null)
    {
        if (is_array($areaondorsalfin)) {
            $useMinMax = false;
            if (isset($areaondorsalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::AREAONDORSALFIN, $areaondorsalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areaondorsalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::AREAONDORSALFIN, $areaondorsalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::AREAONDORSALFIN, $areaondorsalfin, $comparison);
    }

    /**
     * Filter the query on the AreaonCaudalFin column
     *
     * Example usage:
     * <code>
     * $query->filterByAreaoncaudalfin(1234); // WHERE AreaonCaudalFin = 1234
     * $query->filterByAreaoncaudalfin(array(12, 34)); // WHERE AreaonCaudalFin IN (12, 34)
     * $query->filterByAreaoncaudalfin(array('min' => 12)); // WHERE AreaonCaudalFin >= 12
     * $query->filterByAreaoncaudalfin(array('max' => 12)); // WHERE AreaonCaudalFin <= 12
     * </code>
     *
     * @param     mixed $areaoncaudalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAreaoncaudalfin($areaoncaudalfin = null, $comparison = null)
    {
        if (is_array($areaoncaudalfin)) {
            $useMinMax = false;
            if (isset($areaoncaudalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::AREAONCAUDALFIN, $areaoncaudalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areaoncaudalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::AREAONCAUDALFIN, $areaoncaudalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::AREAONCAUDALFIN, $areaoncaudalfin, $comparison);
    }

    /**
     * Filter the query on the AreasonTrunk column
     *
     * Example usage:
     * <code>
     * $query->filterByAreasontrunk(1234); // WHERE AreasonTrunk = 1234
     * $query->filterByAreasontrunk(array(12, 34)); // WHERE AreasonTrunk IN (12, 34)
     * $query->filterByAreasontrunk(array('min' => 12)); // WHERE AreasonTrunk >= 12
     * $query->filterByAreasontrunk(array('max' => 12)); // WHERE AreasonTrunk <= 12
     * </code>
     *
     * @param     mixed $areasontrunk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAreasontrunk($areasontrunk = null, $comparison = null)
    {
        if (is_array($areasontrunk)) {
            $useMinMax = false;
            if (isset($areasontrunk['min'])) {
                $this->addUsingAlias(DisrefPeer::AREASONTRUNK, $areasontrunk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areasontrunk['max'])) {
                $this->addUsingAlias(DisrefPeer::AREASONTRUNK, $areasontrunk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::AREASONTRUNK, $areasontrunk, $comparison);
    }

    /**
     * Filter the query on the VentralAreas column
     *
     * Example usage:
     * <code>
     * $query->filterByVentralareas(1234); // WHERE VentralAreas = 1234
     * $query->filterByVentralareas(array(12, 34)); // WHERE VentralAreas IN (12, 34)
     * $query->filterByVentralareas(array('min' => 12)); // WHERE VentralAreas >= 12
     * $query->filterByVentralareas(array('max' => 12)); // WHERE VentralAreas <= 12
     * </code>
     *
     * @param     mixed $ventralareas The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByVentralareas($ventralareas = null, $comparison = null)
    {
        if (is_array($ventralareas)) {
            $useMinMax = false;
            if (isset($ventralareas['min'])) {
                $this->addUsingAlias(DisrefPeer::VENTRALAREAS, $ventralareas['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventralareas['max'])) {
                $this->addUsingAlias(DisrefPeer::VENTRALAREAS, $ventralareas['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::VENTRALAREAS, $ventralareas, $comparison);
    }

    /**
     * Filter the query on the AreaonAnalFin column
     *
     * Example usage:
     * <code>
     * $query->filterByAreaonanalfin(1234); // WHERE AreaonAnalFin = 1234
     * $query->filterByAreaonanalfin(array(12, 34)); // WHERE AreaonAnalFin IN (12, 34)
     * $query->filterByAreaonanalfin(array('min' => 12)); // WHERE AreaonAnalFin >= 12
     * $query->filterByAreaonanalfin(array('max' => 12)); // WHERE AreaonAnalFin <= 12
     * </code>
     *
     * @param     mixed $areaonanalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAreaonanalfin($areaonanalfin = null, $comparison = null)
    {
        if (is_array($areaonanalfin)) {
            $useMinMax = false;
            if (isset($areaonanalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::AREAONANALFIN, $areaonanalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areaonanalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::AREAONANALFIN, $areaonanalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::AREAONANALFIN, $areaonanalfin, $comparison);
    }

    /**
     * Filter the query on the AreaonUnpairedF column
     *
     * Example usage:
     * <code>
     * $query->filterByAreaonunpairedf(1234); // WHERE AreaonUnpairedF = 1234
     * $query->filterByAreaonunpairedf(array(12, 34)); // WHERE AreaonUnpairedF IN (12, 34)
     * $query->filterByAreaonunpairedf(array('min' => 12)); // WHERE AreaonUnpairedF >= 12
     * $query->filterByAreaonunpairedf(array('max' => 12)); // WHERE AreaonUnpairedF <= 12
     * </code>
     *
     * @param     mixed $areaonunpairedf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAreaonunpairedf($areaonunpairedf = null, $comparison = null)
    {
        if (is_array($areaonunpairedf)) {
            $useMinMax = false;
            if (isset($areaonunpairedf['min'])) {
                $this->addUsingAlias(DisrefPeer::AREAONUNPAIREDF, $areaonunpairedf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areaonunpairedf['max'])) {
                $this->addUsingAlias(DisrefPeer::AREAONUNPAIREDF, $areaonunpairedf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::AREAONUNPAIREDF, $areaonunpairedf, $comparison);
    }

    /**
     * Filter the query on the AreasonTail column
     *
     * Example usage:
     * <code>
     * $query->filterByAreasontail(1234); // WHERE AreasonTail = 1234
     * $query->filterByAreasontail(array(12, 34)); // WHERE AreasonTail IN (12, 34)
     * $query->filterByAreasontail(array('min' => 12)); // WHERE AreasonTail >= 12
     * $query->filterByAreasontail(array('max' => 12)); // WHERE AreasonTail <= 12
     * </code>
     *
     * @param     mixed $areasontail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAreasontail($areasontail = null, $comparison = null)
    {
        if (is_array($areasontail)) {
            $useMinMax = false;
            if (isset($areasontail['min'])) {
                $this->addUsingAlias(DisrefPeer::AREASONTAIL, $areasontail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areasontail['max'])) {
                $this->addUsingAlias(DisrefPeer::AREASONTAIL, $areasontail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::AREASONTAIL, $areasontail, $comparison);
    }

    /**
     * Filter the query on the Boils column
     *
     * Example usage:
     * <code>
     * $query->filterByBoils(1234); // WHERE Boils = 1234
     * $query->filterByBoils(array(12, 34)); // WHERE Boils IN (12, 34)
     * $query->filterByBoils(array('min' => 12)); // WHERE Boils >= 12
     * $query->filterByBoils(array('max' => 12)); // WHERE Boils <= 12
     * </code>
     *
     * @param     mixed $boils The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByBoils($boils = null, $comparison = null)
    {
        if (is_array($boils)) {
            $useMinMax = false;
            if (isset($boils['min'])) {
                $this->addUsingAlias(DisrefPeer::BOILS, $boils['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boils['max'])) {
                $this->addUsingAlias(DisrefPeer::BOILS, $boils['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::BOILS, $boils, $comparison);
    }

    /**
     * Filter the query on the BoilsColor column
     *
     * Example usage:
     * <code>
     * $query->filterByBoilscolor('fooValue');   // WHERE BoilsColor = 'fooValue'
     * $query->filterByBoilscolor('%fooValue%'); // WHERE BoilsColor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $boilscolor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByBoilscolor($boilscolor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($boilscolor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $boilscolor)) {
                $boilscolor = str_replace('*', '%', $boilscolor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::BOILSCOLOR, $boilscolor, $comparison);
    }

    /**
     * Filter the query on the BoilsonHead column
     *
     * Example usage:
     * <code>
     * $query->filterByBoilsonhead(1234); // WHERE BoilsonHead = 1234
     * $query->filterByBoilsonhead(array(12, 34)); // WHERE BoilsonHead IN (12, 34)
     * $query->filterByBoilsonhead(array('min' => 12)); // WHERE BoilsonHead >= 12
     * $query->filterByBoilsonhead(array('max' => 12)); // WHERE BoilsonHead <= 12
     * </code>
     *
     * @param     mixed $boilsonhead The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByBoilsonhead($boilsonhead = null, $comparison = null)
    {
        if (is_array($boilsonhead)) {
            $useMinMax = false;
            if (isset($boilsonhead['min'])) {
                $this->addUsingAlias(DisrefPeer::BOILSONHEAD, $boilsonhead['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boilsonhead['max'])) {
                $this->addUsingAlias(DisrefPeer::BOILSONHEAD, $boilsonhead['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::BOILSONHEAD, $boilsonhead, $comparison);
    }

    /**
     * Filter the query on the Dorsalboils column
     *
     * Example usage:
     * <code>
     * $query->filterByDorsalboils(1234); // WHERE Dorsalboils = 1234
     * $query->filterByDorsalboils(array(12, 34)); // WHERE Dorsalboils IN (12, 34)
     * $query->filterByDorsalboils(array('min' => 12)); // WHERE Dorsalboils >= 12
     * $query->filterByDorsalboils(array('max' => 12)); // WHERE Dorsalboils <= 12
     * </code>
     *
     * @param     mixed $dorsalboils The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByDorsalboils($dorsalboils = null, $comparison = null)
    {
        if (is_array($dorsalboils)) {
            $useMinMax = false;
            if (isset($dorsalboils['min'])) {
                $this->addUsingAlias(DisrefPeer::DORSALBOILS, $dorsalboils['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dorsalboils['max'])) {
                $this->addUsingAlias(DisrefPeer::DORSALBOILS, $dorsalboils['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::DORSALBOILS, $dorsalboils, $comparison);
    }

    /**
     * Filter the query on the BoilsonDorsalFin column
     *
     * Example usage:
     * <code>
     * $query->filterByBoilsondorsalfin(1234); // WHERE BoilsonDorsalFin = 1234
     * $query->filterByBoilsondorsalfin(array(12, 34)); // WHERE BoilsonDorsalFin IN (12, 34)
     * $query->filterByBoilsondorsalfin(array('min' => 12)); // WHERE BoilsonDorsalFin >= 12
     * $query->filterByBoilsondorsalfin(array('max' => 12)); // WHERE BoilsonDorsalFin <= 12
     * </code>
     *
     * @param     mixed $boilsondorsalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByBoilsondorsalfin($boilsondorsalfin = null, $comparison = null)
    {
        if (is_array($boilsondorsalfin)) {
            $useMinMax = false;
            if (isset($boilsondorsalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::BOILSONDORSALFIN, $boilsondorsalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boilsondorsalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::BOILSONDORSALFIN, $boilsondorsalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::BOILSONDORSALFIN, $boilsondorsalfin, $comparison);
    }

    /**
     * Filter the query on the BoilsonCaudalFin column
     *
     * Example usage:
     * <code>
     * $query->filterByBoilsoncaudalfin(1234); // WHERE BoilsonCaudalFin = 1234
     * $query->filterByBoilsoncaudalfin(array(12, 34)); // WHERE BoilsonCaudalFin IN (12, 34)
     * $query->filterByBoilsoncaudalfin(array('min' => 12)); // WHERE BoilsonCaudalFin >= 12
     * $query->filterByBoilsoncaudalfin(array('max' => 12)); // WHERE BoilsonCaudalFin <= 12
     * </code>
     *
     * @param     mixed $boilsoncaudalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByBoilsoncaudalfin($boilsoncaudalfin = null, $comparison = null)
    {
        if (is_array($boilsoncaudalfin)) {
            $useMinMax = false;
            if (isset($boilsoncaudalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::BOILSONCAUDALFIN, $boilsoncaudalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boilsoncaudalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::BOILSONCAUDALFIN, $boilsoncaudalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::BOILSONCAUDALFIN, $boilsoncaudalfin, $comparison);
    }

    /**
     * Filter the query on the BoilsonTrunk column
     *
     * Example usage:
     * <code>
     * $query->filterByBoilsontrunk(1234); // WHERE BoilsonTrunk = 1234
     * $query->filterByBoilsontrunk(array(12, 34)); // WHERE BoilsonTrunk IN (12, 34)
     * $query->filterByBoilsontrunk(array('min' => 12)); // WHERE BoilsonTrunk >= 12
     * $query->filterByBoilsontrunk(array('max' => 12)); // WHERE BoilsonTrunk <= 12
     * </code>
     *
     * @param     mixed $boilsontrunk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByBoilsontrunk($boilsontrunk = null, $comparison = null)
    {
        if (is_array($boilsontrunk)) {
            $useMinMax = false;
            if (isset($boilsontrunk['min'])) {
                $this->addUsingAlias(DisrefPeer::BOILSONTRUNK, $boilsontrunk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boilsontrunk['max'])) {
                $this->addUsingAlias(DisrefPeer::BOILSONTRUNK, $boilsontrunk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::BOILSONTRUNK, $boilsontrunk, $comparison);
    }

    /**
     * Filter the query on the VentralBoils column
     *
     * Example usage:
     * <code>
     * $query->filterByVentralboils(1234); // WHERE VentralBoils = 1234
     * $query->filterByVentralboils(array(12, 34)); // WHERE VentralBoils IN (12, 34)
     * $query->filterByVentralboils(array('min' => 12)); // WHERE VentralBoils >= 12
     * $query->filterByVentralboils(array('max' => 12)); // WHERE VentralBoils <= 12
     * </code>
     *
     * @param     mixed $ventralboils The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByVentralboils($ventralboils = null, $comparison = null)
    {
        if (is_array($ventralboils)) {
            $useMinMax = false;
            if (isset($ventralboils['min'])) {
                $this->addUsingAlias(DisrefPeer::VENTRALBOILS, $ventralboils['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventralboils['max'])) {
                $this->addUsingAlias(DisrefPeer::VENTRALBOILS, $ventralboils['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::VENTRALBOILS, $ventralboils, $comparison);
    }

    /**
     * Filter the query on the BoilsonAnalFin column
     *
     * Example usage:
     * <code>
     * $query->filterByBoilsonanalfin(1234); // WHERE BoilsonAnalFin = 1234
     * $query->filterByBoilsonanalfin(array(12, 34)); // WHERE BoilsonAnalFin IN (12, 34)
     * $query->filterByBoilsonanalfin(array('min' => 12)); // WHERE BoilsonAnalFin >= 12
     * $query->filterByBoilsonanalfin(array('max' => 12)); // WHERE BoilsonAnalFin <= 12
     * </code>
     *
     * @param     mixed $boilsonanalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByBoilsonanalfin($boilsonanalfin = null, $comparison = null)
    {
        if (is_array($boilsonanalfin)) {
            $useMinMax = false;
            if (isset($boilsonanalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::BOILSONANALFIN, $boilsonanalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boilsonanalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::BOILSONANALFIN, $boilsonanalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::BOILSONANALFIN, $boilsonanalfin, $comparison);
    }

    /**
     * Filter the query on the BoilsonUnpairedF column
     *
     * Example usage:
     * <code>
     * $query->filterByBoilsonunpairedf(1234); // WHERE BoilsonUnpairedF = 1234
     * $query->filterByBoilsonunpairedf(array(12, 34)); // WHERE BoilsonUnpairedF IN (12, 34)
     * $query->filterByBoilsonunpairedf(array('min' => 12)); // WHERE BoilsonUnpairedF >= 12
     * $query->filterByBoilsonunpairedf(array('max' => 12)); // WHERE BoilsonUnpairedF <= 12
     * </code>
     *
     * @param     mixed $boilsonunpairedf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByBoilsonunpairedf($boilsonunpairedf = null, $comparison = null)
    {
        if (is_array($boilsonunpairedf)) {
            $useMinMax = false;
            if (isset($boilsonunpairedf['min'])) {
                $this->addUsingAlias(DisrefPeer::BOILSONUNPAIREDF, $boilsonunpairedf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boilsonunpairedf['max'])) {
                $this->addUsingAlias(DisrefPeer::BOILSONUNPAIREDF, $boilsonunpairedf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::BOILSONUNPAIREDF, $boilsonunpairedf, $comparison);
    }

    /**
     * Filter the query on the BoilsonTail column
     *
     * Example usage:
     * <code>
     * $query->filterByBoilsontail(1234); // WHERE BoilsonTail = 1234
     * $query->filterByBoilsontail(array(12, 34)); // WHERE BoilsonTail IN (12, 34)
     * $query->filterByBoilsontail(array('min' => 12)); // WHERE BoilsonTail >= 12
     * $query->filterByBoilsontail(array('max' => 12)); // WHERE BoilsonTail <= 12
     * </code>
     *
     * @param     mixed $boilsontail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByBoilsontail($boilsontail = null, $comparison = null)
    {
        if (is_array($boilsontail)) {
            $useMinMax = false;
            if (isset($boilsontail['min'])) {
                $this->addUsingAlias(DisrefPeer::BOILSONTAIL, $boilsontail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boilsontail['max'])) {
                $this->addUsingAlias(DisrefPeer::BOILSONTAIL, $boilsontail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::BOILSONTAIL, $boilsontail, $comparison);
    }

    /**
     * Filter the query on the Ulcer column
     *
     * Example usage:
     * <code>
     * $query->filterByUlcer(1234); // WHERE Ulcer = 1234
     * $query->filterByUlcer(array(12, 34)); // WHERE Ulcer IN (12, 34)
     * $query->filterByUlcer(array('min' => 12)); // WHERE Ulcer >= 12
     * $query->filterByUlcer(array('max' => 12)); // WHERE Ulcer <= 12
     * </code>
     *
     * @param     mixed $ulcer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByUlcer($ulcer = null, $comparison = null)
    {
        if (is_array($ulcer)) {
            $useMinMax = false;
            if (isset($ulcer['min'])) {
                $this->addUsingAlias(DisrefPeer::ULCER, $ulcer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ulcer['max'])) {
                $this->addUsingAlias(DisrefPeer::ULCER, $ulcer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ULCER, $ulcer, $comparison);
    }

    /**
     * Filter the query on the UlcerColor column
     *
     * Example usage:
     * <code>
     * $query->filterByUlcercolor('fooValue');   // WHERE UlcerColor = 'fooValue'
     * $query->filterByUlcercolor('%fooValue%'); // WHERE UlcerColor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ulcercolor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByUlcercolor($ulcercolor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ulcercolor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ulcercolor)) {
                $ulcercolor = str_replace('*', '%', $ulcercolor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ULCERCOLOR, $ulcercolor, $comparison);
    }

    /**
     * Filter the query on the UlceronHead column
     *
     * Example usage:
     * <code>
     * $query->filterByUlceronhead(1234); // WHERE UlceronHead = 1234
     * $query->filterByUlceronhead(array(12, 34)); // WHERE UlceronHead IN (12, 34)
     * $query->filterByUlceronhead(array('min' => 12)); // WHERE UlceronHead >= 12
     * $query->filterByUlceronhead(array('max' => 12)); // WHERE UlceronHead <= 12
     * </code>
     *
     * @param     mixed $ulceronhead The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByUlceronhead($ulceronhead = null, $comparison = null)
    {
        if (is_array($ulceronhead)) {
            $useMinMax = false;
            if (isset($ulceronhead['min'])) {
                $this->addUsingAlias(DisrefPeer::ULCERONHEAD, $ulceronhead['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ulceronhead['max'])) {
                $this->addUsingAlias(DisrefPeer::ULCERONHEAD, $ulceronhead['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ULCERONHEAD, $ulceronhead, $comparison);
    }

    /**
     * Filter the query on the DorsalUlcer column
     *
     * Example usage:
     * <code>
     * $query->filterByDorsalulcer(1234); // WHERE DorsalUlcer = 1234
     * $query->filterByDorsalulcer(array(12, 34)); // WHERE DorsalUlcer IN (12, 34)
     * $query->filterByDorsalulcer(array('min' => 12)); // WHERE DorsalUlcer >= 12
     * $query->filterByDorsalulcer(array('max' => 12)); // WHERE DorsalUlcer <= 12
     * </code>
     *
     * @param     mixed $dorsalulcer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByDorsalulcer($dorsalulcer = null, $comparison = null)
    {
        if (is_array($dorsalulcer)) {
            $useMinMax = false;
            if (isset($dorsalulcer['min'])) {
                $this->addUsingAlias(DisrefPeer::DORSALULCER, $dorsalulcer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dorsalulcer['max'])) {
                $this->addUsingAlias(DisrefPeer::DORSALULCER, $dorsalulcer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::DORSALULCER, $dorsalulcer, $comparison);
    }

    /**
     * Filter the query on the UlceronDorsalFin column
     *
     * Example usage:
     * <code>
     * $query->filterByUlcerondorsalfin(1234); // WHERE UlceronDorsalFin = 1234
     * $query->filterByUlcerondorsalfin(array(12, 34)); // WHERE UlceronDorsalFin IN (12, 34)
     * $query->filterByUlcerondorsalfin(array('min' => 12)); // WHERE UlceronDorsalFin >= 12
     * $query->filterByUlcerondorsalfin(array('max' => 12)); // WHERE UlceronDorsalFin <= 12
     * </code>
     *
     * @param     mixed $ulcerondorsalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByUlcerondorsalfin($ulcerondorsalfin = null, $comparison = null)
    {
        if (is_array($ulcerondorsalfin)) {
            $useMinMax = false;
            if (isset($ulcerondorsalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::ULCERONDORSALFIN, $ulcerondorsalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ulcerondorsalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::ULCERONDORSALFIN, $ulcerondorsalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ULCERONDORSALFIN, $ulcerondorsalfin, $comparison);
    }

    /**
     * Filter the query on the UlceronCaudalFin column
     *
     * Example usage:
     * <code>
     * $query->filterByUlceroncaudalfin(1234); // WHERE UlceronCaudalFin = 1234
     * $query->filterByUlceroncaudalfin(array(12, 34)); // WHERE UlceronCaudalFin IN (12, 34)
     * $query->filterByUlceroncaudalfin(array('min' => 12)); // WHERE UlceronCaudalFin >= 12
     * $query->filterByUlceroncaudalfin(array('max' => 12)); // WHERE UlceronCaudalFin <= 12
     * </code>
     *
     * @param     mixed $ulceroncaudalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByUlceroncaudalfin($ulceroncaudalfin = null, $comparison = null)
    {
        if (is_array($ulceroncaudalfin)) {
            $useMinMax = false;
            if (isset($ulceroncaudalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::ULCERONCAUDALFIN, $ulceroncaudalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ulceroncaudalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::ULCERONCAUDALFIN, $ulceroncaudalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ULCERONCAUDALFIN, $ulceroncaudalfin, $comparison);
    }

    /**
     * Filter the query on the UlceronTrunk column
     *
     * Example usage:
     * <code>
     * $query->filterByUlcerontrunk(1234); // WHERE UlceronTrunk = 1234
     * $query->filterByUlcerontrunk(array(12, 34)); // WHERE UlceronTrunk IN (12, 34)
     * $query->filterByUlcerontrunk(array('min' => 12)); // WHERE UlceronTrunk >= 12
     * $query->filterByUlcerontrunk(array('max' => 12)); // WHERE UlceronTrunk <= 12
     * </code>
     *
     * @param     mixed $ulcerontrunk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByUlcerontrunk($ulcerontrunk = null, $comparison = null)
    {
        if (is_array($ulcerontrunk)) {
            $useMinMax = false;
            if (isset($ulcerontrunk['min'])) {
                $this->addUsingAlias(DisrefPeer::ULCERONTRUNK, $ulcerontrunk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ulcerontrunk['max'])) {
                $this->addUsingAlias(DisrefPeer::ULCERONTRUNK, $ulcerontrunk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ULCERONTRUNK, $ulcerontrunk, $comparison);
    }

    /**
     * Filter the query on the VentralUlcer column
     *
     * Example usage:
     * <code>
     * $query->filterByVentralulcer(1234); // WHERE VentralUlcer = 1234
     * $query->filterByVentralulcer(array(12, 34)); // WHERE VentralUlcer IN (12, 34)
     * $query->filterByVentralulcer(array('min' => 12)); // WHERE VentralUlcer >= 12
     * $query->filterByVentralulcer(array('max' => 12)); // WHERE VentralUlcer <= 12
     * </code>
     *
     * @param     mixed $ventralulcer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByVentralulcer($ventralulcer = null, $comparison = null)
    {
        if (is_array($ventralulcer)) {
            $useMinMax = false;
            if (isset($ventralulcer['min'])) {
                $this->addUsingAlias(DisrefPeer::VENTRALULCER, $ventralulcer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventralulcer['max'])) {
                $this->addUsingAlias(DisrefPeer::VENTRALULCER, $ventralulcer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::VENTRALULCER, $ventralulcer, $comparison);
    }

    /**
     * Filter the query on the UlceronAnalFin column
     *
     * Example usage:
     * <code>
     * $query->filterByUlceronanalfin(1234); // WHERE UlceronAnalFin = 1234
     * $query->filterByUlceronanalfin(array(12, 34)); // WHERE UlceronAnalFin IN (12, 34)
     * $query->filterByUlceronanalfin(array('min' => 12)); // WHERE UlceronAnalFin >= 12
     * $query->filterByUlceronanalfin(array('max' => 12)); // WHERE UlceronAnalFin <= 12
     * </code>
     *
     * @param     mixed $ulceronanalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByUlceronanalfin($ulceronanalfin = null, $comparison = null)
    {
        if (is_array($ulceronanalfin)) {
            $useMinMax = false;
            if (isset($ulceronanalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::ULCERONANALFIN, $ulceronanalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ulceronanalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::ULCERONANALFIN, $ulceronanalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ULCERONANALFIN, $ulceronanalfin, $comparison);
    }

    /**
     * Filter the query on the UlceronUnpairedF column
     *
     * Example usage:
     * <code>
     * $query->filterByUlceronunpairedf(1234); // WHERE UlceronUnpairedF = 1234
     * $query->filterByUlceronunpairedf(array(12, 34)); // WHERE UlceronUnpairedF IN (12, 34)
     * $query->filterByUlceronunpairedf(array('min' => 12)); // WHERE UlceronUnpairedF >= 12
     * $query->filterByUlceronunpairedf(array('max' => 12)); // WHERE UlceronUnpairedF <= 12
     * </code>
     *
     * @param     mixed $ulceronunpairedf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByUlceronunpairedf($ulceronunpairedf = null, $comparison = null)
    {
        if (is_array($ulceronunpairedf)) {
            $useMinMax = false;
            if (isset($ulceronunpairedf['min'])) {
                $this->addUsingAlias(DisrefPeer::ULCERONUNPAIREDF, $ulceronunpairedf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ulceronunpairedf['max'])) {
                $this->addUsingAlias(DisrefPeer::ULCERONUNPAIREDF, $ulceronunpairedf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ULCERONUNPAIREDF, $ulceronunpairedf, $comparison);
    }

    /**
     * Filter the query on the UlceronTail column
     *
     * Example usage:
     * <code>
     * $query->filterByUlcerontail(1234); // WHERE UlceronTail = 1234
     * $query->filterByUlcerontail(array(12, 34)); // WHERE UlceronTail IN (12, 34)
     * $query->filterByUlcerontail(array('min' => 12)); // WHERE UlceronTail >= 12
     * $query->filterByUlcerontail(array('max' => 12)); // WHERE UlceronTail <= 12
     * </code>
     *
     * @param     mixed $ulcerontail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByUlcerontail($ulcerontail = null, $comparison = null)
    {
        if (is_array($ulcerontail)) {
            $useMinMax = false;
            if (isset($ulcerontail['min'])) {
                $this->addUsingAlias(DisrefPeer::ULCERONTAIL, $ulcerontail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ulcerontail['max'])) {
                $this->addUsingAlias(DisrefPeer::ULCERONTAIL, $ulcerontail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ULCERONTAIL, $ulcerontail, $comparison);
    }

    /**
     * Filter the query on the AttachmentsSkin2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAttachmentsskin2('fooValue');   // WHERE AttachmentsSkin2 = 'fooValue'
     * $query->filterByAttachmentsskin2('%fooValue%'); // WHERE AttachmentsSkin2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $attachmentsskin2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAttachmentsskin2($attachmentsskin2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($attachmentsskin2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $attachmentsskin2)) {
                $attachmentsskin2 = str_replace('*', '%', $attachmentsskin2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ATTACHMENTSSKIN2, $attachmentsskin2, $comparison);
    }

    /**
     * Filter the query on the AttachmentonHead column
     *
     * Example usage:
     * <code>
     * $query->filterByAttachmentonhead(1234); // WHERE AttachmentonHead = 1234
     * $query->filterByAttachmentonhead(array(12, 34)); // WHERE AttachmentonHead IN (12, 34)
     * $query->filterByAttachmentonhead(array('min' => 12)); // WHERE AttachmentonHead >= 12
     * $query->filterByAttachmentonhead(array('max' => 12)); // WHERE AttachmentonHead <= 12
     * </code>
     *
     * @param     mixed $attachmentonhead The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAttachmentonhead($attachmentonhead = null, $comparison = null)
    {
        if (is_array($attachmentonhead)) {
            $useMinMax = false;
            if (isset($attachmentonhead['min'])) {
                $this->addUsingAlias(DisrefPeer::ATTACHMENTONHEAD, $attachmentonhead['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attachmentonhead['max'])) {
                $this->addUsingAlias(DisrefPeer::ATTACHMENTONHEAD, $attachmentonhead['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ATTACHMENTONHEAD, $attachmentonhead, $comparison);
    }

    /**
     * Filter the query on the DorsalAttachments column
     *
     * Example usage:
     * <code>
     * $query->filterByDorsalattachments(1234); // WHERE DorsalAttachments = 1234
     * $query->filterByDorsalattachments(array(12, 34)); // WHERE DorsalAttachments IN (12, 34)
     * $query->filterByDorsalattachments(array('min' => 12)); // WHERE DorsalAttachments >= 12
     * $query->filterByDorsalattachments(array('max' => 12)); // WHERE DorsalAttachments <= 12
     * </code>
     *
     * @param     mixed $dorsalattachments The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByDorsalattachments($dorsalattachments = null, $comparison = null)
    {
        if (is_array($dorsalattachments)) {
            $useMinMax = false;
            if (isset($dorsalattachments['min'])) {
                $this->addUsingAlias(DisrefPeer::DORSALATTACHMENTS, $dorsalattachments['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dorsalattachments['max'])) {
                $this->addUsingAlias(DisrefPeer::DORSALATTACHMENTS, $dorsalattachments['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::DORSALATTACHMENTS, $dorsalattachments, $comparison);
    }

    /**
     * Filter the query on the AttonDorsalFin column
     *
     * Example usage:
     * <code>
     * $query->filterByAttondorsalfin(1234); // WHERE AttonDorsalFin = 1234
     * $query->filterByAttondorsalfin(array(12, 34)); // WHERE AttonDorsalFin IN (12, 34)
     * $query->filterByAttondorsalfin(array('min' => 12)); // WHERE AttonDorsalFin >= 12
     * $query->filterByAttondorsalfin(array('max' => 12)); // WHERE AttonDorsalFin <= 12
     * </code>
     *
     * @param     mixed $attondorsalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAttondorsalfin($attondorsalfin = null, $comparison = null)
    {
        if (is_array($attondorsalfin)) {
            $useMinMax = false;
            if (isset($attondorsalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::ATTONDORSALFIN, $attondorsalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attondorsalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::ATTONDORSALFIN, $attondorsalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ATTONDORSALFIN, $attondorsalfin, $comparison);
    }

    /**
     * Filter the query on the AttonCaudalFin column
     *
     * Example usage:
     * <code>
     * $query->filterByAttoncaudalfin(1234); // WHERE AttonCaudalFin = 1234
     * $query->filterByAttoncaudalfin(array(12, 34)); // WHERE AttonCaudalFin IN (12, 34)
     * $query->filterByAttoncaudalfin(array('min' => 12)); // WHERE AttonCaudalFin >= 12
     * $query->filterByAttoncaudalfin(array('max' => 12)); // WHERE AttonCaudalFin <= 12
     * </code>
     *
     * @param     mixed $attoncaudalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAttoncaudalfin($attoncaudalfin = null, $comparison = null)
    {
        if (is_array($attoncaudalfin)) {
            $useMinMax = false;
            if (isset($attoncaudalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::ATTONCAUDALFIN, $attoncaudalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attoncaudalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::ATTONCAUDALFIN, $attoncaudalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ATTONCAUDALFIN, $attoncaudalfin, $comparison);
    }

    /**
     * Filter the query on the AttachmentonTrunk column
     *
     * Example usage:
     * <code>
     * $query->filterByAttachmentontrunk(1234); // WHERE AttachmentonTrunk = 1234
     * $query->filterByAttachmentontrunk(array(12, 34)); // WHERE AttachmentonTrunk IN (12, 34)
     * $query->filterByAttachmentontrunk(array('min' => 12)); // WHERE AttachmentonTrunk >= 12
     * $query->filterByAttachmentontrunk(array('max' => 12)); // WHERE AttachmentonTrunk <= 12
     * </code>
     *
     * @param     mixed $attachmentontrunk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAttachmentontrunk($attachmentontrunk = null, $comparison = null)
    {
        if (is_array($attachmentontrunk)) {
            $useMinMax = false;
            if (isset($attachmentontrunk['min'])) {
                $this->addUsingAlias(DisrefPeer::ATTACHMENTONTRUNK, $attachmentontrunk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attachmentontrunk['max'])) {
                $this->addUsingAlias(DisrefPeer::ATTACHMENTONTRUNK, $attachmentontrunk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ATTACHMENTONTRUNK, $attachmentontrunk, $comparison);
    }

    /**
     * Filter the query on the VentralAttachments column
     *
     * Example usage:
     * <code>
     * $query->filterByVentralattachments(1234); // WHERE VentralAttachments = 1234
     * $query->filterByVentralattachments(array(12, 34)); // WHERE VentralAttachments IN (12, 34)
     * $query->filterByVentralattachments(array('min' => 12)); // WHERE VentralAttachments >= 12
     * $query->filterByVentralattachments(array('max' => 12)); // WHERE VentralAttachments <= 12
     * </code>
     *
     * @param     mixed $ventralattachments The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByVentralattachments($ventralattachments = null, $comparison = null)
    {
        if (is_array($ventralattachments)) {
            $useMinMax = false;
            if (isset($ventralattachments['min'])) {
                $this->addUsingAlias(DisrefPeer::VENTRALATTACHMENTS, $ventralattachments['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventralattachments['max'])) {
                $this->addUsingAlias(DisrefPeer::VENTRALATTACHMENTS, $ventralattachments['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::VENTRALATTACHMENTS, $ventralattachments, $comparison);
    }

    /**
     * Filter the query on the AttonAnalFin column
     *
     * Example usage:
     * <code>
     * $query->filterByAttonanalfin(1234); // WHERE AttonAnalFin = 1234
     * $query->filterByAttonanalfin(array(12, 34)); // WHERE AttonAnalFin IN (12, 34)
     * $query->filterByAttonanalfin(array('min' => 12)); // WHERE AttonAnalFin >= 12
     * $query->filterByAttonanalfin(array('max' => 12)); // WHERE AttonAnalFin <= 12
     * </code>
     *
     * @param     mixed $attonanalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAttonanalfin($attonanalfin = null, $comparison = null)
    {
        if (is_array($attonanalfin)) {
            $useMinMax = false;
            if (isset($attonanalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::ATTONANALFIN, $attonanalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attonanalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::ATTONANALFIN, $attonanalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ATTONANALFIN, $attonanalfin, $comparison);
    }

    /**
     * Filter the query on the AttonUnpairedF column
     *
     * Example usage:
     * <code>
     * $query->filterByAttonunpairedf(1234); // WHERE AttonUnpairedF = 1234
     * $query->filterByAttonunpairedf(array(12, 34)); // WHERE AttonUnpairedF IN (12, 34)
     * $query->filterByAttonunpairedf(array('min' => 12)); // WHERE AttonUnpairedF >= 12
     * $query->filterByAttonunpairedf(array('max' => 12)); // WHERE AttonUnpairedF <= 12
     * </code>
     *
     * @param     mixed $attonunpairedf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAttonunpairedf($attonunpairedf = null, $comparison = null)
    {
        if (is_array($attonunpairedf)) {
            $useMinMax = false;
            if (isset($attonunpairedf['min'])) {
                $this->addUsingAlias(DisrefPeer::ATTONUNPAIREDF, $attonunpairedf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attonunpairedf['max'])) {
                $this->addUsingAlias(DisrefPeer::ATTONUNPAIREDF, $attonunpairedf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ATTONUNPAIREDF, $attonunpairedf, $comparison);
    }

    /**
     * Filter the query on the AttachmentonTail column
     *
     * Example usage:
     * <code>
     * $query->filterByAttachmentontail(1234); // WHERE AttachmentonTail = 1234
     * $query->filterByAttachmentontail(array(12, 34)); // WHERE AttachmentonTail IN (12, 34)
     * $query->filterByAttachmentontail(array('min' => 12)); // WHERE AttachmentonTail >= 12
     * $query->filterByAttachmentontail(array('max' => 12)); // WHERE AttachmentonTail <= 12
     * </code>
     *
     * @param     mixed $attachmentontail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAttachmentontail($attachmentontail = null, $comparison = null)
    {
        if (is_array($attachmentontail)) {
            $useMinMax = false;
            if (isset($attachmentontail['min'])) {
                $this->addUsingAlias(DisrefPeer::ATTACHMENTONTAIL, $attachmentontail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($attachmentontail['max'])) {
                $this->addUsingAlias(DisrefPeer::ATTACHMENTONTAIL, $attachmentontail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ATTACHMENTONTAIL, $attachmentontail, $comparison);
    }

    /**
     * Filter the query on the Fins1 column
     *
     * Example usage:
     * <code>
     * $query->filterByFins1('fooValue');   // WHERE Fins1 = 'fooValue'
     * $query->filterByFins1('%fooValue%'); // WHERE Fins1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fins1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByFins1($fins1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fins1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fins1)) {
                $fins1 = str_replace('*', '%', $fins1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::FINS1, $fins1, $comparison);
    }

    /**
     * Filter the query on the DorsalFin column
     *
     * Example usage:
     * <code>
     * $query->filterByDorsalfin(1234); // WHERE DorsalFin = 1234
     * $query->filterByDorsalfin(array(12, 34)); // WHERE DorsalFin IN (12, 34)
     * $query->filterByDorsalfin(array('min' => 12)); // WHERE DorsalFin >= 12
     * $query->filterByDorsalfin(array('max' => 12)); // WHERE DorsalFin <= 12
     * </code>
     *
     * @param     mixed $dorsalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByDorsalfin($dorsalfin = null, $comparison = null)
    {
        if (is_array($dorsalfin)) {
            $useMinMax = false;
            if (isset($dorsalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::DORSALFIN, $dorsalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dorsalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::DORSALFIN, $dorsalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::DORSALFIN, $dorsalfin, $comparison);
    }

    /**
     * Filter the query on the CaudalFin column
     *
     * Example usage:
     * <code>
     * $query->filterByCaudalfin(1234); // WHERE CaudalFin = 1234
     * $query->filterByCaudalfin(array(12, 34)); // WHERE CaudalFin IN (12, 34)
     * $query->filterByCaudalfin(array('min' => 12)); // WHERE CaudalFin >= 12
     * $query->filterByCaudalfin(array('max' => 12)); // WHERE CaudalFin <= 12
     * </code>
     *
     * @param     mixed $caudalfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByCaudalfin($caudalfin = null, $comparison = null)
    {
        if (is_array($caudalfin)) {
            $useMinMax = false;
            if (isset($caudalfin['min'])) {
                $this->addUsingAlias(DisrefPeer::CAUDALFIN, $caudalfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($caudalfin['max'])) {
                $this->addUsingAlias(DisrefPeer::CAUDALFIN, $caudalfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::CAUDALFIN, $caudalfin, $comparison);
    }

    /**
     * Filter the query on the AnalFin column
     *
     * Example usage:
     * <code>
     * $query->filterByAnalfin(1234); // WHERE AnalFin = 1234
     * $query->filterByAnalfin(array(12, 34)); // WHERE AnalFin IN (12, 34)
     * $query->filterByAnalfin(array('min' => 12)); // WHERE AnalFin >= 12
     * $query->filterByAnalfin(array('max' => 12)); // WHERE AnalFin <= 12
     * </code>
     *
     * @param     mixed $analfin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAnalfin($analfin = null, $comparison = null)
    {
        if (is_array($analfin)) {
            $useMinMax = false;
            if (isset($analfin['min'])) {
                $this->addUsingAlias(DisrefPeer::ANALFIN, $analfin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($analfin['max'])) {
                $this->addUsingAlias(DisrefPeer::ANALFIN, $analfin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ANALFIN, $analfin, $comparison);
    }

    /**
     * Filter the query on the UnpairedFins column
     *
     * Example usage:
     * <code>
     * $query->filterByUnpairedfins(1234); // WHERE UnpairedFins = 1234
     * $query->filterByUnpairedfins(array(12, 34)); // WHERE UnpairedFins IN (12, 34)
     * $query->filterByUnpairedfins(array('min' => 12)); // WHERE UnpairedFins >= 12
     * $query->filterByUnpairedfins(array('max' => 12)); // WHERE UnpairedFins <= 12
     * </code>
     *
     * @param     mixed $unpairedfins The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByUnpairedfins($unpairedfins = null, $comparison = null)
    {
        if (is_array($unpairedfins)) {
            $useMinMax = false;
            if (isset($unpairedfins['min'])) {
                $this->addUsingAlias(DisrefPeer::UNPAIREDFINS, $unpairedfins['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unpairedfins['max'])) {
                $this->addUsingAlias(DisrefPeer::UNPAIREDFINS, $unpairedfins['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::UNPAIREDFINS, $unpairedfins, $comparison);
    }

    /**
     * Filter the query on the AberrantColorGills column
     *
     * Example usage:
     * <code>
     * $query->filterByAberrantcolorgills(1234); // WHERE AberrantColorGills = 1234
     * $query->filterByAberrantcolorgills(array(12, 34)); // WHERE AberrantColorGills IN (12, 34)
     * $query->filterByAberrantcolorgills(array('min' => 12)); // WHERE AberrantColorGills >= 12
     * $query->filterByAberrantcolorgills(array('max' => 12)); // WHERE AberrantColorGills <= 12
     * </code>
     *
     * @param     mixed $aberrantcolorgills The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAberrantcolorgills($aberrantcolorgills = null, $comparison = null)
    {
        if (is_array($aberrantcolorgills)) {
            $useMinMax = false;
            if (isset($aberrantcolorgills['min'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTCOLORGILLS, $aberrantcolorgills['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aberrantcolorgills['max'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTCOLORGILLS, $aberrantcolorgills['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERRANTCOLORGILLS, $aberrantcolorgills, $comparison);
    }

    /**
     * Filter the query on the AberColorGill column
     *
     * Example usage:
     * <code>
     * $query->filterByAbercolorgill('fooValue');   // WHERE AberColorGill = 'fooValue'
     * $query->filterByAbercolorgill('%fooValue%'); // WHERE AberColorGill LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abercolorgill The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAbercolorgill($abercolorgill = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abercolorgill)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abercolorgill)) {
                $abercolorgill = str_replace('*', '%', $abercolorgill);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERCOLORGILL, $abercolorgill, $comparison);
    }

    /**
     * Filter the query on the EyeColor column
     *
     * Example usage:
     * <code>
     * $query->filterByEyecolor(1234); // WHERE EyeColor = 1234
     * $query->filterByEyecolor(array(12, 34)); // WHERE EyeColor IN (12, 34)
     * $query->filterByEyecolor(array('min' => 12)); // WHERE EyeColor >= 12
     * $query->filterByEyecolor(array('max' => 12)); // WHERE EyeColor <= 12
     * </code>
     *
     * @param     mixed $eyecolor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByEyecolor($eyecolor = null, $comparison = null)
    {
        if (is_array($eyecolor)) {
            $useMinMax = false;
            if (isset($eyecolor['min'])) {
                $this->addUsingAlias(DisrefPeer::EYECOLOR, $eyecolor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eyecolor['max'])) {
                $this->addUsingAlias(DisrefPeer::EYECOLOR, $eyecolor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::EYECOLOR, $eyecolor, $comparison);
    }

    /**
     * Filter the query on the AberrantSpotsGill column
     *
     * Example usage:
     * <code>
     * $query->filterByAberrantspotsgill(1234); // WHERE AberrantSpotsGill = 1234
     * $query->filterByAberrantspotsgill(array(12, 34)); // WHERE AberrantSpotsGill IN (12, 34)
     * $query->filterByAberrantspotsgill(array('min' => 12)); // WHERE AberrantSpotsGill >= 12
     * $query->filterByAberrantspotsgill(array('max' => 12)); // WHERE AberrantSpotsGill <= 12
     * </code>
     *
     * @param     mixed $aberrantspotsgill The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAberrantspotsgill($aberrantspotsgill = null, $comparison = null)
    {
        if (is_array($aberrantspotsgill)) {
            $useMinMax = false;
            if (isset($aberrantspotsgill['min'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTSPOTSGILL, $aberrantspotsgill['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aberrantspotsgill['max'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTSPOTSGILL, $aberrantspotsgill['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERRANTSPOTSGILL, $aberrantspotsgill, $comparison);
    }

    /**
     * Filter the query on the AberrantSpotsColor column
     *
     * Example usage:
     * <code>
     * $query->filterByAberrantspotscolor('fooValue');   // WHERE AberrantSpotsColor = 'fooValue'
     * $query->filterByAberrantspotscolor('%fooValue%'); // WHERE AberrantSpotsColor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aberrantspotscolor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAberrantspotscolor($aberrantspotscolor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aberrantspotscolor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aberrantspotscolor)) {
                $aberrantspotscolor = str_replace('*', '%', $aberrantspotscolor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERRANTSPOTSCOLOR, $aberrantspotscolor, $comparison);
    }

    /**
     * Filter the query on the EyeSpots column
     *
     * Example usage:
     * <code>
     * $query->filterByEyespots('fooValue');   // WHERE EyeSpots = 'fooValue'
     * $query->filterByEyespots('%fooValue%'); // WHERE EyeSpots LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eyespots The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByEyespots($eyespots = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eyespots)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eyespots)) {
                $eyespots = str_replace('*', '%', $eyespots);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::EYESPOTS, $eyespots, $comparison);
    }

    /**
     * Filter the query on the KnotsonGills column
     *
     * Example usage:
     * <code>
     * $query->filterByKnotsongills(1234); // WHERE KnotsonGills = 1234
     * $query->filterByKnotsongills(array(12, 34)); // WHERE KnotsonGills IN (12, 34)
     * $query->filterByKnotsongills(array('min' => 12)); // WHERE KnotsonGills >= 12
     * $query->filterByKnotsongills(array('max' => 12)); // WHERE KnotsonGills <= 12
     * </code>
     *
     * @param     mixed $knotsongills The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByKnotsongills($knotsongills = null, $comparison = null)
    {
        if (is_array($knotsongills)) {
            $useMinMax = false;
            if (isset($knotsongills['min'])) {
                $this->addUsingAlias(DisrefPeer::KNOTSONGILLS, $knotsongills['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($knotsongills['max'])) {
                $this->addUsingAlias(DisrefPeer::KNOTSONGILLS, $knotsongills['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::KNOTSONGILLS, $knotsongills, $comparison);
    }

    /**
     * Filter the query on the KnotsColor column
     *
     * Example usage:
     * <code>
     * $query->filterByKnotscolor('fooValue');   // WHERE KnotsColor = 'fooValue'
     * $query->filterByKnotscolor('%fooValue%'); // WHERE KnotsColor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $knotscolor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByKnotscolor($knotscolor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($knotscolor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $knotscolor)) {
                $knotscolor = str_replace('*', '%', $knotscolor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::KNOTSCOLOR, $knotscolor, $comparison);
    }

    /**
     * Filter the query on the EyesCondition column
     *
     * Example usage:
     * <code>
     * $query->filterByEyescondition('fooValue');   // WHERE EyesCondition = 'fooValue'
     * $query->filterByEyescondition('%fooValue%'); // WHERE EyesCondition LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eyescondition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByEyescondition($eyescondition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eyescondition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eyescondition)) {
                $eyescondition = str_replace('*', '%', $eyescondition);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::EYESCONDITION, $eyescondition, $comparison);
    }

    /**
     * Filter the query on the AreasonGills column
     *
     * Example usage:
     * <code>
     * $query->filterByAreasongills(1234); // WHERE AreasonGills = 1234
     * $query->filterByAreasongills(array(12, 34)); // WHERE AreasonGills IN (12, 34)
     * $query->filterByAreasongills(array('min' => 12)); // WHERE AreasonGills >= 12
     * $query->filterByAreasongills(array('max' => 12)); // WHERE AreasonGills <= 12
     * </code>
     *
     * @param     mixed $areasongills The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAreasongills($areasongills = null, $comparison = null)
    {
        if (is_array($areasongills)) {
            $useMinMax = false;
            if (isset($areasongills['min'])) {
                $this->addUsingAlias(DisrefPeer::AREASONGILLS, $areasongills['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areasongills['max'])) {
                $this->addUsingAlias(DisrefPeer::AREASONGILLS, $areasongills['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::AREASONGILLS, $areasongills, $comparison);
    }

    /**
     * Filter the query on the AreasColor column
     *
     * Example usage:
     * <code>
     * $query->filterByAreascolor('fooValue');   // WHERE AreasColor = 'fooValue'
     * $query->filterByAreascolor('%fooValue%'); // WHERE AreasColor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $areascolor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAreascolor($areascolor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($areascolor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $areascolor)) {
                $areascolor = str_replace('*', '%', $areascolor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::AREASCOLOR, $areascolor, $comparison);
    }

    /**
     * Filter the query on the MucusProdGills column
     *
     * Example usage:
     * <code>
     * $query->filterByMucusprodgills(1234); // WHERE MucusProdGills = 1234
     * $query->filterByMucusprodgills(array(12, 34)); // WHERE MucusProdGills IN (12, 34)
     * $query->filterByMucusprodgills(array('min' => 12)); // WHERE MucusProdGills >= 12
     * $query->filterByMucusprodgills(array('max' => 12)); // WHERE MucusProdGills <= 12
     * </code>
     *
     * @param     mixed $mucusprodgills The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByMucusprodgills($mucusprodgills = null, $comparison = null)
    {
        if (is_array($mucusprodgills)) {
            $useMinMax = false;
            if (isset($mucusprodgills['min'])) {
                $this->addUsingAlias(DisrefPeer::MUCUSPRODGILLS, $mucusprodgills['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mucusprodgills['max'])) {
                $this->addUsingAlias(DisrefPeer::MUCUSPRODGILLS, $mucusprodgills['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::MUCUSPRODGILLS, $mucusprodgills, $comparison);
    }

    /**
     * Filter the query on the ConditionGills column
     *
     * Example usage:
     * <code>
     * $query->filterByConditiongills(1234); // WHERE ConditionGills = 1234
     * $query->filterByConditiongills(array(12, 34)); // WHERE ConditionGills IN (12, 34)
     * $query->filterByConditiongills(array('min' => 12)); // WHERE ConditionGills >= 12
     * $query->filterByConditiongills(array('max' => 12)); // WHERE ConditionGills <= 12
     * </code>
     *
     * @param     mixed $conditiongills The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByConditiongills($conditiongills = null, $comparison = null)
    {
        if (is_array($conditiongills)) {
            $useMinMax = false;
            if (isset($conditiongills['min'])) {
                $this->addUsingAlias(DisrefPeer::CONDITIONGILLS, $conditiongills['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($conditiongills['max'])) {
                $this->addUsingAlias(DisrefPeer::CONDITIONGILLS, $conditiongills['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::CONDITIONGILLS, $conditiongills, $comparison);
    }

    /**
     * Filter the query on the ObjectGills column
     *
     * Example usage:
     * <code>
     * $query->filterByObjectgills(1234); // WHERE ObjectGills = 1234
     * $query->filterByObjectgills(array(12, 34)); // WHERE ObjectGills IN (12, 34)
     * $query->filterByObjectgills(array('min' => 12)); // WHERE ObjectGills >= 12
     * $query->filterByObjectgills(array('max' => 12)); // WHERE ObjectGills <= 12
     * </code>
     *
     * @param     mixed $objectgills The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByObjectgills($objectgills = null, $comparison = null)
    {
        if (is_array($objectgills)) {
            $useMinMax = false;
            if (isset($objectgills['min'])) {
                $this->addUsingAlias(DisrefPeer::OBJECTGILLS, $objectgills['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($objectgills['max'])) {
                $this->addUsingAlias(DisrefPeer::OBJECTGILLS, $objectgills['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::OBJECTGILLS, $objectgills, $comparison);
    }

    /**
     * Filter the query on the AttachmentGills column
     *
     * Example usage:
     * <code>
     * $query->filterByAttachmentgills('fooValue');   // WHERE AttachmentGills = 'fooValue'
     * $query->filterByAttachmentgills('%fooValue%'); // WHERE AttachmentGills LIKE '%fooValue%'
     * </code>
     *
     * @param     string $attachmentgills The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAttachmentgills($attachmentgills = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($attachmentgills)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $attachmentgills)) {
                $attachmentgills = str_replace('*', '%', $attachmentgills);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ATTACHMENTGILLS, $attachmentgills, $comparison);
    }

    /**
     * Filter the query on the BellyCondition column
     *
     * Example usage:
     * <code>
     * $query->filterByBellycondition('fooValue');   // WHERE BellyCondition = 'fooValue'
     * $query->filterByBellycondition('%fooValue%'); // WHERE BellyCondition LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bellycondition The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByBellycondition($bellycondition = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bellycondition)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bellycondition)) {
                $bellycondition = str_replace('*', '%', $bellycondition);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::BELLYCONDITION, $bellycondition, $comparison);
    }

    /**
     * Filter the query on the AnusCondition column
     *
     * Example usage:
     * <code>
     * $query->filterByAnuscondition(1234); // WHERE AnusCondition = 1234
     * $query->filterByAnuscondition(array(12, 34)); // WHERE AnusCondition IN (12, 34)
     * $query->filterByAnuscondition(array('min' => 12)); // WHERE AnusCondition >= 12
     * $query->filterByAnuscondition(array('max' => 12)); // WHERE AnusCondition <= 12
     * </code>
     *
     * @param     mixed $anuscondition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAnuscondition($anuscondition = null, $comparison = null)
    {
        if (is_array($anuscondition)) {
            $useMinMax = false;
            if (isset($anuscondition['min'])) {
                $this->addUsingAlias(DisrefPeer::ANUSCONDITION, $anuscondition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($anuscondition['max'])) {
                $this->addUsingAlias(DisrefPeer::ANUSCONDITION, $anuscondition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ANUSCONDITION, $anuscondition, $comparison);
    }

    /**
     * Filter the query on the BellyLumen column
     *
     * Example usage:
     * <code>
     * $query->filterByBellylumen(1234); // WHERE BellyLumen = 1234
     * $query->filterByBellylumen(array(12, 34)); // WHERE BellyLumen IN (12, 34)
     * $query->filterByBellylumen(array('min' => 12)); // WHERE BellyLumen >= 12
     * $query->filterByBellylumen(array('max' => 12)); // WHERE BellyLumen <= 12
     * </code>
     *
     * @param     mixed $bellylumen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByBellylumen($bellylumen = null, $comparison = null)
    {
        if (is_array($bellylumen)) {
            $useMinMax = false;
            if (isset($bellylumen['min'])) {
                $this->addUsingAlias(DisrefPeer::BELLYLUMEN, $bellylumen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bellylumen['max'])) {
                $this->addUsingAlias(DisrefPeer::BELLYLUMEN, $bellylumen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::BELLYLUMEN, $bellylumen, $comparison);
    }

    /**
     * Filter the query on the AnusColor column
     *
     * Example usage:
     * <code>
     * $query->filterByAnuscolor(1234); // WHERE AnusColor = 1234
     * $query->filterByAnuscolor(array(12, 34)); // WHERE AnusColor IN (12, 34)
     * $query->filterByAnuscolor(array('min' => 12)); // WHERE AnusColor >= 12
     * $query->filterByAnuscolor(array('max' => 12)); // WHERE AnusColor <= 12
     * </code>
     *
     * @param     mixed $anuscolor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAnuscolor($anuscolor = null, $comparison = null)
    {
        if (is_array($anuscolor)) {
            $useMinMax = false;
            if (isset($anuscolor['min'])) {
                $this->addUsingAlias(DisrefPeer::ANUSCOLOR, $anuscolor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($anuscolor['max'])) {
                $this->addUsingAlias(DisrefPeer::ANUSCOLOR, $anuscolor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ANUSCOLOR, $anuscolor, $comparison);
    }

    /**
     * Filter the query on the BellyWorms column
     *
     * Example usage:
     * <code>
     * $query->filterByBellyworms('fooValue');   // WHERE BellyWorms = 'fooValue'
     * $query->filterByBellyworms('%fooValue%'); // WHERE BellyWorms LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bellyworms The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByBellyworms($bellyworms = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bellyworms)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bellyworms)) {
                $bellyworms = str_replace('*', '%', $bellyworms);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::BELLYWORMS, $bellyworms, $comparison);
    }

    /**
     * Filter the query on the AnusObject column
     *
     * Example usage:
     * <code>
     * $query->filterByAnusobject(1234); // WHERE AnusObject = 1234
     * $query->filterByAnusobject(array(12, 34)); // WHERE AnusObject IN (12, 34)
     * $query->filterByAnusobject(array('min' => 12)); // WHERE AnusObject >= 12
     * $query->filterByAnusobject(array('max' => 12)); // WHERE AnusObject <= 12
     * </code>
     *
     * @param     mixed $anusobject The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAnusobject($anusobject = null, $comparison = null)
    {
        if (is_array($anusobject)) {
            $useMinMax = false;
            if (isset($anusobject['min'])) {
                $this->addUsingAlias(DisrefPeer::ANUSOBJECT, $anusobject['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($anusobject['max'])) {
                $this->addUsingAlias(DisrefPeer::ANUSOBJECT, $anusobject['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ANUSOBJECT, $anusobject, $comparison);
    }

    /**
     * Filter the query on the AnusAttachments column
     *
     * Example usage:
     * <code>
     * $query->filterByAnusattachments('fooValue');   // WHERE AnusAttachments = 'fooValue'
     * $query->filterByAnusattachments('%fooValue%'); // WHERE AnusAttachments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $anusattachments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAnusattachments($anusattachments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($anusattachments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $anusattachments)) {
                $anusattachments = str_replace('*', '%', $anusattachments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ANUSATTACHMENTS, $anusattachments, $comparison);
    }

    /**
     * Filter the query on the AnusExudates column
     *
     * Example usage:
     * <code>
     * $query->filterByAnusexudates(1234); // WHERE AnusExudates = 1234
     * $query->filterByAnusexudates(array(12, 34)); // WHERE AnusExudates IN (12, 34)
     * $query->filterByAnusexudates(array('min' => 12)); // WHERE AnusExudates >= 12
     * $query->filterByAnusexudates(array('max' => 12)); // WHERE AnusExudates <= 12
     * </code>
     *
     * @param     mixed $anusexudates The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAnusexudates($anusexudates = null, $comparison = null)
    {
        if (is_array($anusexudates)) {
            $useMinMax = false;
            if (isset($anusexudates['min'])) {
                $this->addUsingAlias(DisrefPeer::ANUSEXUDATES, $anusexudates['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($anusexudates['max'])) {
                $this->addUsingAlias(DisrefPeer::ANUSEXUDATES, $anusexudates['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ANUSEXUDATES, $anusexudates, $comparison);
    }

    /**
     * Filter the query on the LiverAffl column
     *
     * Example usage:
     * <code>
     * $query->filterByLiveraffl(1234); // WHERE LiverAffl = 1234
     * $query->filterByLiveraffl(array(12, 34)); // WHERE LiverAffl IN (12, 34)
     * $query->filterByLiveraffl(array('min' => 12)); // WHERE LiverAffl >= 12
     * $query->filterByLiveraffl(array('max' => 12)); // WHERE LiverAffl <= 12
     * </code>
     *
     * @param     mixed $liveraffl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByLiveraffl($liveraffl = null, $comparison = null)
    {
        if (is_array($liveraffl)) {
            $useMinMax = false;
            if (isset($liveraffl['min'])) {
                $this->addUsingAlias(DisrefPeer::LIVERAFFL, $liveraffl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($liveraffl['max'])) {
                $this->addUsingAlias(DisrefPeer::LIVERAFFL, $liveraffl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::LIVERAFFL, $liveraffl, $comparison);
    }

    /**
     * Filter the query on the LiverSize column
     *
     * Example usage:
     * <code>
     * $query->filterByLiversize('fooValue');   // WHERE LiverSize = 'fooValue'
     * $query->filterByLiversize('%fooValue%'); // WHERE LiverSize LIKE '%fooValue%'
     * </code>
     *
     * @param     string $liversize The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByLiversize($liversize = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($liversize)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $liversize)) {
                $liversize = str_replace('*', '%', $liversize);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::LIVERSIZE, $liversize, $comparison);
    }

    /**
     * Filter the query on the LiverApp column
     *
     * Example usage:
     * <code>
     * $query->filterByLiverapp('fooValue');   // WHERE LiverApp = 'fooValue'
     * $query->filterByLiverapp('%fooValue%'); // WHERE LiverApp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $liverapp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByLiverapp($liverapp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($liverapp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $liverapp)) {
                $liverapp = str_replace('*', '%', $liverapp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::LIVERAPP, $liverapp, $comparison);
    }

    /**
     * Filter the query on the LiverBlot column
     *
     * Example usage:
     * <code>
     * $query->filterByLiverblot(1234); // WHERE LiverBlot = 1234
     * $query->filterByLiverblot(array(12, 34)); // WHERE LiverBlot IN (12, 34)
     * $query->filterByLiverblot(array('min' => 12)); // WHERE LiverBlot >= 12
     * $query->filterByLiverblot(array('max' => 12)); // WHERE LiverBlot <= 12
     * </code>
     *
     * @param     mixed $liverblot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByLiverblot($liverblot = null, $comparison = null)
    {
        if (is_array($liverblot)) {
            $useMinMax = false;
            if (isset($liverblot['min'])) {
                $this->addUsingAlias(DisrefPeer::LIVERBLOT, $liverblot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($liverblot['max'])) {
                $this->addUsingAlias(DisrefPeer::LIVERBLOT, $liverblot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::LIVERBLOT, $liverblot, $comparison);
    }

    /**
     * Filter the query on the LiverBlC column
     *
     * Example usage:
     * <code>
     * $query->filterByLiverblc('fooValue');   // WHERE LiverBlC = 'fooValue'
     * $query->filterByLiverblc('%fooValue%'); // WHERE LiverBlC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $liverblc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByLiverblc($liverblc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($liverblc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $liverblc)) {
                $liverblc = str_replace('*', '%', $liverblc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::LIVERBLC, $liverblc, $comparison);
    }

    /**
     * Filter the query on the LiverKnots column
     *
     * Example usage:
     * <code>
     * $query->filterByLiverknots(1234); // WHERE LiverKnots = 1234
     * $query->filterByLiverknots(array(12, 34)); // WHERE LiverKnots IN (12, 34)
     * $query->filterByLiverknots(array('min' => 12)); // WHERE LiverKnots >= 12
     * $query->filterByLiverknots(array('max' => 12)); // WHERE LiverKnots <= 12
     * </code>
     *
     * @param     mixed $liverknots The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByLiverknots($liverknots = null, $comparison = null)
    {
        if (is_array($liverknots)) {
            $useMinMax = false;
            if (isset($liverknots['min'])) {
                $this->addUsingAlias(DisrefPeer::LIVERKNOTS, $liverknots['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($liverknots['max'])) {
                $this->addUsingAlias(DisrefPeer::LIVERKNOTS, $liverknots['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::LIVERKNOTS, $liverknots, $comparison);
    }

    /**
     * Filter the query on the LiverKnC column
     *
     * Example usage:
     * <code>
     * $query->filterByLiverknc('fooValue');   // WHERE LiverKnC = 'fooValue'
     * $query->filterByLiverknc('%fooValue%'); // WHERE LiverKnC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $liverknc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByLiverknc($liverknc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($liverknc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $liverknc)) {
                $liverknc = str_replace('*', '%', $liverknc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::LIVERKNC, $liverknc, $comparison);
    }

    /**
     * Filter the query on the SpleenAffl column
     *
     * Example usage:
     * <code>
     * $query->filterBySpleenaffl(1234); // WHERE SpleenAffl = 1234
     * $query->filterBySpleenaffl(array(12, 34)); // WHERE SpleenAffl IN (12, 34)
     * $query->filterBySpleenaffl(array('min' => 12)); // WHERE SpleenAffl >= 12
     * $query->filterBySpleenaffl(array('max' => 12)); // WHERE SpleenAffl <= 12
     * </code>
     *
     * @param     mixed $spleenaffl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpleenaffl($spleenaffl = null, $comparison = null)
    {
        if (is_array($spleenaffl)) {
            $useMinMax = false;
            if (isset($spleenaffl['min'])) {
                $this->addUsingAlias(DisrefPeer::SPLEENAFFL, $spleenaffl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spleenaffl['max'])) {
                $this->addUsingAlias(DisrefPeer::SPLEENAFFL, $spleenaffl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPLEENAFFL, $spleenaffl, $comparison);
    }

    /**
     * Filter the query on the SpleenSize column
     *
     * Example usage:
     * <code>
     * $query->filterBySpleensize('fooValue');   // WHERE SpleenSize = 'fooValue'
     * $query->filterBySpleensize('%fooValue%'); // WHERE SpleenSize LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spleensize The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpleensize($spleensize = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spleensize)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spleensize)) {
                $spleensize = str_replace('*', '%', $spleensize);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPLEENSIZE, $spleensize, $comparison);
    }

    /**
     * Filter the query on the SpleenApp column
     *
     * Example usage:
     * <code>
     * $query->filterBySpleenapp('fooValue');   // WHERE SpleenApp = 'fooValue'
     * $query->filterBySpleenapp('%fooValue%'); // WHERE SpleenApp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spleenapp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpleenapp($spleenapp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spleenapp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spleenapp)) {
                $spleenapp = str_replace('*', '%', $spleenapp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPLEENAPP, $spleenapp, $comparison);
    }

    /**
     * Filter the query on the SpleenBlot column
     *
     * Example usage:
     * <code>
     * $query->filterBySpleenblot(1234); // WHERE SpleenBlot = 1234
     * $query->filterBySpleenblot(array(12, 34)); // WHERE SpleenBlot IN (12, 34)
     * $query->filterBySpleenblot(array('min' => 12)); // WHERE SpleenBlot >= 12
     * $query->filterBySpleenblot(array('max' => 12)); // WHERE SpleenBlot <= 12
     * </code>
     *
     * @param     mixed $spleenblot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpleenblot($spleenblot = null, $comparison = null)
    {
        if (is_array($spleenblot)) {
            $useMinMax = false;
            if (isset($spleenblot['min'])) {
                $this->addUsingAlias(DisrefPeer::SPLEENBLOT, $spleenblot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spleenblot['max'])) {
                $this->addUsingAlias(DisrefPeer::SPLEENBLOT, $spleenblot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPLEENBLOT, $spleenblot, $comparison);
    }

    /**
     * Filter the query on the SpleenBlC column
     *
     * Example usage:
     * <code>
     * $query->filterBySpleenblc('fooValue');   // WHERE SpleenBlC = 'fooValue'
     * $query->filterBySpleenblc('%fooValue%'); // WHERE SpleenBlC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spleenblc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpleenblc($spleenblc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spleenblc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spleenblc)) {
                $spleenblc = str_replace('*', '%', $spleenblc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPLEENBLC, $spleenblc, $comparison);
    }

    /**
     * Filter the query on the SpleenKnots column
     *
     * Example usage:
     * <code>
     * $query->filterBySpleenknots(1234); // WHERE SpleenKnots = 1234
     * $query->filterBySpleenknots(array(12, 34)); // WHERE SpleenKnots IN (12, 34)
     * $query->filterBySpleenknots(array('min' => 12)); // WHERE SpleenKnots >= 12
     * $query->filterBySpleenknots(array('max' => 12)); // WHERE SpleenKnots <= 12
     * </code>
     *
     * @param     mixed $spleenknots The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpleenknots($spleenknots = null, $comparison = null)
    {
        if (is_array($spleenknots)) {
            $useMinMax = false;
            if (isset($spleenknots['min'])) {
                $this->addUsingAlias(DisrefPeer::SPLEENKNOTS, $spleenknots['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spleenknots['max'])) {
                $this->addUsingAlias(DisrefPeer::SPLEENKNOTS, $spleenknots['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPLEENKNOTS, $spleenknots, $comparison);
    }

    /**
     * Filter the query on the SpleenKnC column
     *
     * Example usage:
     * <code>
     * $query->filterBySpleenknc('fooValue');   // WHERE SpleenKnC = 'fooValue'
     * $query->filterBySpleenknc('%fooValue%'); // WHERE SpleenKnC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spleenknc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpleenknc($spleenknc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spleenknc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spleenknc)) {
                $spleenknc = str_replace('*', '%', $spleenknc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPLEENKNC, $spleenknc, $comparison);
    }

    /**
     * Filter the query on the KidneyAffl column
     *
     * Example usage:
     * <code>
     * $query->filterByKidneyaffl(1234); // WHERE KidneyAffl = 1234
     * $query->filterByKidneyaffl(array(12, 34)); // WHERE KidneyAffl IN (12, 34)
     * $query->filterByKidneyaffl(array('min' => 12)); // WHERE KidneyAffl >= 12
     * $query->filterByKidneyaffl(array('max' => 12)); // WHERE KidneyAffl <= 12
     * </code>
     *
     * @param     mixed $kidneyaffl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByKidneyaffl($kidneyaffl = null, $comparison = null)
    {
        if (is_array($kidneyaffl)) {
            $useMinMax = false;
            if (isset($kidneyaffl['min'])) {
                $this->addUsingAlias(DisrefPeer::KIDNEYAFFL, $kidneyaffl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kidneyaffl['max'])) {
                $this->addUsingAlias(DisrefPeer::KIDNEYAFFL, $kidneyaffl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::KIDNEYAFFL, $kidneyaffl, $comparison);
    }

    /**
     * Filter the query on the KidneySize column
     *
     * Example usage:
     * <code>
     * $query->filterByKidneysize('fooValue');   // WHERE KidneySize = 'fooValue'
     * $query->filterByKidneysize('%fooValue%'); // WHERE KidneySize LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kidneysize The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByKidneysize($kidneysize = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kidneysize)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kidneysize)) {
                $kidneysize = str_replace('*', '%', $kidneysize);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::KIDNEYSIZE, $kidneysize, $comparison);
    }

    /**
     * Filter the query on the KidneyApp column
     *
     * Example usage:
     * <code>
     * $query->filterByKidneyapp('fooValue');   // WHERE KidneyApp = 'fooValue'
     * $query->filterByKidneyapp('%fooValue%'); // WHERE KidneyApp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kidneyapp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByKidneyapp($kidneyapp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kidneyapp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kidneyapp)) {
                $kidneyapp = str_replace('*', '%', $kidneyapp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::KIDNEYAPP, $kidneyapp, $comparison);
    }

    /**
     * Filter the query on the KidneyBlot column
     *
     * Example usage:
     * <code>
     * $query->filterByKidneyblot(1234); // WHERE KidneyBlot = 1234
     * $query->filterByKidneyblot(array(12, 34)); // WHERE KidneyBlot IN (12, 34)
     * $query->filterByKidneyblot(array('min' => 12)); // WHERE KidneyBlot >= 12
     * $query->filterByKidneyblot(array('max' => 12)); // WHERE KidneyBlot <= 12
     * </code>
     *
     * @param     mixed $kidneyblot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByKidneyblot($kidneyblot = null, $comparison = null)
    {
        if (is_array($kidneyblot)) {
            $useMinMax = false;
            if (isset($kidneyblot['min'])) {
                $this->addUsingAlias(DisrefPeer::KIDNEYBLOT, $kidneyblot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kidneyblot['max'])) {
                $this->addUsingAlias(DisrefPeer::KIDNEYBLOT, $kidneyblot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::KIDNEYBLOT, $kidneyblot, $comparison);
    }

    /**
     * Filter the query on the KidneyBlC column
     *
     * Example usage:
     * <code>
     * $query->filterByKidneyblc('fooValue');   // WHERE KidneyBlC = 'fooValue'
     * $query->filterByKidneyblc('%fooValue%'); // WHERE KidneyBlC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kidneyblc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByKidneyblc($kidneyblc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kidneyblc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kidneyblc)) {
                $kidneyblc = str_replace('*', '%', $kidneyblc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::KIDNEYBLC, $kidneyblc, $comparison);
    }

    /**
     * Filter the query on the KidneyKnots column
     *
     * Example usage:
     * <code>
     * $query->filterByKidneyknots(1234); // WHERE KidneyKnots = 1234
     * $query->filterByKidneyknots(array(12, 34)); // WHERE KidneyKnots IN (12, 34)
     * $query->filterByKidneyknots(array('min' => 12)); // WHERE KidneyKnots >= 12
     * $query->filterByKidneyknots(array('max' => 12)); // WHERE KidneyKnots <= 12
     * </code>
     *
     * @param     mixed $kidneyknots The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByKidneyknots($kidneyknots = null, $comparison = null)
    {
        if (is_array($kidneyknots)) {
            $useMinMax = false;
            if (isset($kidneyknots['min'])) {
                $this->addUsingAlias(DisrefPeer::KIDNEYKNOTS, $kidneyknots['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kidneyknots['max'])) {
                $this->addUsingAlias(DisrefPeer::KIDNEYKNOTS, $kidneyknots['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::KIDNEYKNOTS, $kidneyknots, $comparison);
    }

    /**
     * Filter the query on the KidneyKnC column
     *
     * Example usage:
     * <code>
     * $query->filterByKidneyknc('fooValue');   // WHERE KidneyKnC = 'fooValue'
     * $query->filterByKidneyknc('%fooValue%'); // WHERE KidneyKnC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kidneyknc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByKidneyknc($kidneyknc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kidneyknc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kidneyknc)) {
                $kidneyknc = str_replace('*', '%', $kidneyknc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::KIDNEYKNC, $kidneyknc, $comparison);
    }

    /**
     * Filter the query on the SwimBladderAffl column
     *
     * Example usage:
     * <code>
     * $query->filterBySwimbladderaffl(1234); // WHERE SwimBladderAffl = 1234
     * $query->filterBySwimbladderaffl(array(12, 34)); // WHERE SwimBladderAffl IN (12, 34)
     * $query->filterBySwimbladderaffl(array('min' => 12)); // WHERE SwimBladderAffl >= 12
     * $query->filterBySwimbladderaffl(array('max' => 12)); // WHERE SwimBladderAffl <= 12
     * </code>
     *
     * @param     mixed $swimbladderaffl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySwimbladderaffl($swimbladderaffl = null, $comparison = null)
    {
        if (is_array($swimbladderaffl)) {
            $useMinMax = false;
            if (isset($swimbladderaffl['min'])) {
                $this->addUsingAlias(DisrefPeer::SWIMBLADDERAFFL, $swimbladderaffl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($swimbladderaffl['max'])) {
                $this->addUsingAlias(DisrefPeer::SWIMBLADDERAFFL, $swimbladderaffl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SWIMBLADDERAFFL, $swimbladderaffl, $comparison);
    }

    /**
     * Filter the query on the SwimBladderSize column
     *
     * Example usage:
     * <code>
     * $query->filterBySwimbladdersize('fooValue');   // WHERE SwimBladderSize = 'fooValue'
     * $query->filterBySwimbladdersize('%fooValue%'); // WHERE SwimBladderSize LIKE '%fooValue%'
     * </code>
     *
     * @param     string $swimbladdersize The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySwimbladdersize($swimbladdersize = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($swimbladdersize)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $swimbladdersize)) {
                $swimbladdersize = str_replace('*', '%', $swimbladdersize);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SWIMBLADDERSIZE, $swimbladdersize, $comparison);
    }

    /**
     * Filter the query on the SwimBladderApp column
     *
     * Example usage:
     * <code>
     * $query->filterBySwimbladderapp('fooValue');   // WHERE SwimBladderApp = 'fooValue'
     * $query->filterBySwimbladderapp('%fooValue%'); // WHERE SwimBladderApp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $swimbladderapp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySwimbladderapp($swimbladderapp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($swimbladderapp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $swimbladderapp)) {
                $swimbladderapp = str_replace('*', '%', $swimbladderapp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SWIMBLADDERAPP, $swimbladderapp, $comparison);
    }

    /**
     * Filter the query on the SwimBladderBlot column
     *
     * Example usage:
     * <code>
     * $query->filterBySwimbladderblot(1234); // WHERE SwimBladderBlot = 1234
     * $query->filterBySwimbladderblot(array(12, 34)); // WHERE SwimBladderBlot IN (12, 34)
     * $query->filterBySwimbladderblot(array('min' => 12)); // WHERE SwimBladderBlot >= 12
     * $query->filterBySwimbladderblot(array('max' => 12)); // WHERE SwimBladderBlot <= 12
     * </code>
     *
     * @param     mixed $swimbladderblot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySwimbladderblot($swimbladderblot = null, $comparison = null)
    {
        if (is_array($swimbladderblot)) {
            $useMinMax = false;
            if (isset($swimbladderblot['min'])) {
                $this->addUsingAlias(DisrefPeer::SWIMBLADDERBLOT, $swimbladderblot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($swimbladderblot['max'])) {
                $this->addUsingAlias(DisrefPeer::SWIMBLADDERBLOT, $swimbladderblot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SWIMBLADDERBLOT, $swimbladderblot, $comparison);
    }

    /**
     * Filter the query on the SwimBladderBlC column
     *
     * Example usage:
     * <code>
     * $query->filterBySwimbladderblc('fooValue');   // WHERE SwimBladderBlC = 'fooValue'
     * $query->filterBySwimbladderblc('%fooValue%'); // WHERE SwimBladderBlC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $swimbladderblc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySwimbladderblc($swimbladderblc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($swimbladderblc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $swimbladderblc)) {
                $swimbladderblc = str_replace('*', '%', $swimbladderblc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SWIMBLADDERBLC, $swimbladderblc, $comparison);
    }

    /**
     * Filter the query on the SwimBladderKnots column
     *
     * Example usage:
     * <code>
     * $query->filterBySwimbladderknots(1234); // WHERE SwimBladderKnots = 1234
     * $query->filterBySwimbladderknots(array(12, 34)); // WHERE SwimBladderKnots IN (12, 34)
     * $query->filterBySwimbladderknots(array('min' => 12)); // WHERE SwimBladderKnots >= 12
     * $query->filterBySwimbladderknots(array('max' => 12)); // WHERE SwimBladderKnots <= 12
     * </code>
     *
     * @param     mixed $swimbladderknots The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySwimbladderknots($swimbladderknots = null, $comparison = null)
    {
        if (is_array($swimbladderknots)) {
            $useMinMax = false;
            if (isset($swimbladderknots['min'])) {
                $this->addUsingAlias(DisrefPeer::SWIMBLADDERKNOTS, $swimbladderknots['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($swimbladderknots['max'])) {
                $this->addUsingAlias(DisrefPeer::SWIMBLADDERKNOTS, $swimbladderknots['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SWIMBLADDERKNOTS, $swimbladderknots, $comparison);
    }

    /**
     * Filter the query on the SwimBladderKnC column
     *
     * Example usage:
     * <code>
     * $query->filterBySwimbladderknc('fooValue');   // WHERE SwimBladderKnC = 'fooValue'
     * $query->filterBySwimbladderknc('%fooValue%'); // WHERE SwimBladderKnC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $swimbladderknc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySwimbladderknc($swimbladderknc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($swimbladderknc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $swimbladderknc)) {
                $swimbladderknc = str_replace('*', '%', $swimbladderknc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SWIMBLADDERKNC, $swimbladderknc, $comparison);
    }

    /**
     * Filter the query on the IntestineAffl column
     *
     * Example usage:
     * <code>
     * $query->filterByIntestineaffl(1234); // WHERE IntestineAffl = 1234
     * $query->filterByIntestineaffl(array(12, 34)); // WHERE IntestineAffl IN (12, 34)
     * $query->filterByIntestineaffl(array('min' => 12)); // WHERE IntestineAffl >= 12
     * $query->filterByIntestineaffl(array('max' => 12)); // WHERE IntestineAffl <= 12
     * </code>
     *
     * @param     mixed $intestineaffl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByIntestineaffl($intestineaffl = null, $comparison = null)
    {
        if (is_array($intestineaffl)) {
            $useMinMax = false;
            if (isset($intestineaffl['min'])) {
                $this->addUsingAlias(DisrefPeer::INTESTINEAFFL, $intestineaffl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intestineaffl['max'])) {
                $this->addUsingAlias(DisrefPeer::INTESTINEAFFL, $intestineaffl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::INTESTINEAFFL, $intestineaffl, $comparison);
    }

    /**
     * Filter the query on the IntestineSize column
     *
     * Example usage:
     * <code>
     * $query->filterByIntestinesize('fooValue');   // WHERE IntestineSize = 'fooValue'
     * $query->filterByIntestinesize('%fooValue%'); // WHERE IntestineSize LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intestinesize The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByIntestinesize($intestinesize = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intestinesize)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intestinesize)) {
                $intestinesize = str_replace('*', '%', $intestinesize);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::INTESTINESIZE, $intestinesize, $comparison);
    }

    /**
     * Filter the query on the IntestineApp column
     *
     * Example usage:
     * <code>
     * $query->filterByIntestineapp('fooValue');   // WHERE IntestineApp = 'fooValue'
     * $query->filterByIntestineapp('%fooValue%'); // WHERE IntestineApp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intestineapp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByIntestineapp($intestineapp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intestineapp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intestineapp)) {
                $intestineapp = str_replace('*', '%', $intestineapp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::INTESTINEAPP, $intestineapp, $comparison);
    }

    /**
     * Filter the query on the IntestineBlot column
     *
     * Example usage:
     * <code>
     * $query->filterByIntestineblot(1234); // WHERE IntestineBlot = 1234
     * $query->filterByIntestineblot(array(12, 34)); // WHERE IntestineBlot IN (12, 34)
     * $query->filterByIntestineblot(array('min' => 12)); // WHERE IntestineBlot >= 12
     * $query->filterByIntestineblot(array('max' => 12)); // WHERE IntestineBlot <= 12
     * </code>
     *
     * @param     mixed $intestineblot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByIntestineblot($intestineblot = null, $comparison = null)
    {
        if (is_array($intestineblot)) {
            $useMinMax = false;
            if (isset($intestineblot['min'])) {
                $this->addUsingAlias(DisrefPeer::INTESTINEBLOT, $intestineblot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intestineblot['max'])) {
                $this->addUsingAlias(DisrefPeer::INTESTINEBLOT, $intestineblot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::INTESTINEBLOT, $intestineblot, $comparison);
    }

    /**
     * Filter the query on the IntestineBlC column
     *
     * Example usage:
     * <code>
     * $query->filterByIntestineblc('fooValue');   // WHERE IntestineBlC = 'fooValue'
     * $query->filterByIntestineblc('%fooValue%'); // WHERE IntestineBlC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intestineblc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByIntestineblc($intestineblc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intestineblc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intestineblc)) {
                $intestineblc = str_replace('*', '%', $intestineblc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::INTESTINEBLC, $intestineblc, $comparison);
    }

    /**
     * Filter the query on the IntestineKnots column
     *
     * Example usage:
     * <code>
     * $query->filterByIntestineknots(1234); // WHERE IntestineKnots = 1234
     * $query->filterByIntestineknots(array(12, 34)); // WHERE IntestineKnots IN (12, 34)
     * $query->filterByIntestineknots(array('min' => 12)); // WHERE IntestineKnots >= 12
     * $query->filterByIntestineknots(array('max' => 12)); // WHERE IntestineKnots <= 12
     * </code>
     *
     * @param     mixed $intestineknots The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByIntestineknots($intestineknots = null, $comparison = null)
    {
        if (is_array($intestineknots)) {
            $useMinMax = false;
            if (isset($intestineknots['min'])) {
                $this->addUsingAlias(DisrefPeer::INTESTINEKNOTS, $intestineknots['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intestineknots['max'])) {
                $this->addUsingAlias(DisrefPeer::INTESTINEKNOTS, $intestineknots['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::INTESTINEKNOTS, $intestineknots, $comparison);
    }

    /**
     * Filter the query on the IntestineKnC column
     *
     * Example usage:
     * <code>
     * $query->filterByIntestineknc('fooValue');   // WHERE IntestineKnC = 'fooValue'
     * $query->filterByIntestineknc('%fooValue%'); // WHERE IntestineKnC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intestineknc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByIntestineknc($intestineknc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intestineknc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intestineknc)) {
                $intestineknc = str_replace('*', '%', $intestineknc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::INTESTINEKNC, $intestineknc, $comparison);
    }

    /**
     * Filter the query on the OtherOrgans column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherorgans(1234); // WHERE OtherOrgans = 1234
     * $query->filterByOtherorgans(array(12, 34)); // WHERE OtherOrgans IN (12, 34)
     * $query->filterByOtherorgans(array('min' => 12)); // WHERE OtherOrgans >= 12
     * $query->filterByOtherorgans(array('max' => 12)); // WHERE OtherOrgans <= 12
     * </code>
     *
     * @param     mixed $otherorgans The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByOtherorgans($otherorgans = null, $comparison = null)
    {
        if (is_array($otherorgans)) {
            $useMinMax = false;
            if (isset($otherorgans['min'])) {
                $this->addUsingAlias(DisrefPeer::OTHERORGANS, $otherorgans['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otherorgans['max'])) {
                $this->addUsingAlias(DisrefPeer::OTHERORGANS, $otherorgans['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::OTHERORGANS, $otherorgans, $comparison);
    }

    /**
     * Filter the query on the OtherOrgansSize column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherorganssize('fooValue');   // WHERE OtherOrgansSize = 'fooValue'
     * $query->filterByOtherorganssize('%fooValue%'); // WHERE OtherOrgansSize LIKE '%fooValue%'
     * </code>
     *
     * @param     string $otherorganssize The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByOtherorganssize($otherorganssize = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($otherorganssize)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $otherorganssize)) {
                $otherorganssize = str_replace('*', '%', $otherorganssize);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::OTHERORGANSSIZE, $otherorganssize, $comparison);
    }

    /**
     * Filter the query on the OtherOrgansBlot column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherorgansblot(1234); // WHERE OtherOrgansBlot = 1234
     * $query->filterByOtherorgansblot(array(12, 34)); // WHERE OtherOrgansBlot IN (12, 34)
     * $query->filterByOtherorgansblot(array('min' => 12)); // WHERE OtherOrgansBlot >= 12
     * $query->filterByOtherorgansblot(array('max' => 12)); // WHERE OtherOrgansBlot <= 12
     * </code>
     *
     * @param     mixed $otherorgansblot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByOtherorgansblot($otherorgansblot = null, $comparison = null)
    {
        if (is_array($otherorgansblot)) {
            $useMinMax = false;
            if (isset($otherorgansblot['min'])) {
                $this->addUsingAlias(DisrefPeer::OTHERORGANSBLOT, $otherorgansblot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otherorgansblot['max'])) {
                $this->addUsingAlias(DisrefPeer::OTHERORGANSBLOT, $otherorgansblot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::OTHERORGANSBLOT, $otherorgansblot, $comparison);
    }

    /**
     * Filter the query on the OtherOrgansBlC column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherorgansblc('fooValue');   // WHERE OtherOrgansBlC = 'fooValue'
     * $query->filterByOtherorgansblc('%fooValue%'); // WHERE OtherOrgansBlC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $otherorgansblc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByOtherorgansblc($otherorgansblc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($otherorgansblc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $otherorgansblc)) {
                $otherorgansblc = str_replace('*', '%', $otherorgansblc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::OTHERORGANSBLC, $otherorgansblc, $comparison);
    }

    /**
     * Filter the query on the OtherOrgansKnots column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherorgansknots(1234); // WHERE OtherOrgansKnots = 1234
     * $query->filterByOtherorgansknots(array(12, 34)); // WHERE OtherOrgansKnots IN (12, 34)
     * $query->filterByOtherorgansknots(array('min' => 12)); // WHERE OtherOrgansKnots >= 12
     * $query->filterByOtherorgansknots(array('max' => 12)); // WHERE OtherOrgansKnots <= 12
     * </code>
     *
     * @param     mixed $otherorgansknots The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByOtherorgansknots($otherorgansknots = null, $comparison = null)
    {
        if (is_array($otherorgansknots)) {
            $useMinMax = false;
            if (isset($otherorgansknots['min'])) {
                $this->addUsingAlias(DisrefPeer::OTHERORGANSKNOTS, $otherorgansknots['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otherorgansknots['max'])) {
                $this->addUsingAlias(DisrefPeer::OTHERORGANSKNOTS, $otherorgansknots['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::OTHERORGANSKNOTS, $otherorgansknots, $comparison);
    }

    /**
     * Filter the query on the OtherOrgansKnC column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherorgansknc('fooValue');   // WHERE OtherOrgansKnC = 'fooValue'
     * $query->filterByOtherorgansknc('%fooValue%'); // WHERE OtherOrgansKnC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $otherorgansknc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByOtherorgansknc($otherorgansknc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($otherorgansknc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $otherorgansknc)) {
                $otherorgansknc = str_replace('*', '%', $otherorgansknc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::OTHERORGANSKNC, $otherorgansknc, $comparison);
    }

    /**
     * Filter the query on the AllOrgans column
     *
     * Example usage:
     * <code>
     * $query->filterByAllorgans(1234); // WHERE AllOrgans = 1234
     * $query->filterByAllorgans(array(12, 34)); // WHERE AllOrgans IN (12, 34)
     * $query->filterByAllorgans(array('min' => 12)); // WHERE AllOrgans >= 12
     * $query->filterByAllorgans(array('max' => 12)); // WHERE AllOrgans <= 12
     * </code>
     *
     * @param     mixed $allorgans The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAllorgans($allorgans = null, $comparison = null)
    {
        if (is_array($allorgans)) {
            $useMinMax = false;
            if (isset($allorgans['min'])) {
                $this->addUsingAlias(DisrefPeer::ALLORGANS, $allorgans['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($allorgans['max'])) {
                $this->addUsingAlias(DisrefPeer::ALLORGANS, $allorgans['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ALLORGANS, $allorgans, $comparison);
    }

    /**
     * Filter the query on the AllOrgansApp column
     *
     * Example usage:
     * <code>
     * $query->filterByAllorgansapp('fooValue');   // WHERE AllOrgansApp = 'fooValue'
     * $query->filterByAllorgansapp('%fooValue%'); // WHERE AllOrgansApp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $allorgansapp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAllorgansapp($allorgansapp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($allorgansapp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $allorgansapp)) {
                $allorgansapp = str_replace('*', '%', $allorgansapp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ALLORGANSAPP, $allorgansapp, $comparison);
    }

    /**
     * Filter the query on the Bristeling column
     *
     * Example usage:
     * <code>
     * $query->filterByBristeling(1234); // WHERE Bristeling = 1234
     * $query->filterByBristeling(array(12, 34)); // WHERE Bristeling IN (12, 34)
     * $query->filterByBristeling(array('min' => 12)); // WHERE Bristeling >= 12
     * $query->filterByBristeling(array('max' => 12)); // WHERE Bristeling <= 12
     * </code>
     *
     * @param     mixed $bristeling The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByBristeling($bristeling = null, $comparison = null)
    {
        if (is_array($bristeling)) {
            $useMinMax = false;
            if (isset($bristeling['min'])) {
                $this->addUsingAlias(DisrefPeer::BRISTELING, $bristeling['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bristeling['max'])) {
                $this->addUsingAlias(DisrefPeer::BRISTELING, $bristeling['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::BRISTELING, $bristeling, $comparison);
    }

    /**
     * Filter the query on the Mortality column
     *
     * Example usage:
     * <code>
     * $query->filterByMortality('fooValue');   // WHERE Mortality = 'fooValue'
     * $query->filterByMortality('%fooValue%'); // WHERE Mortality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mortality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByMortality($mortality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mortality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mortality)) {
                $mortality = str_replace('*', '%', $mortality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::MORTALITY, $mortality, $comparison);
    }

    /**
     * Filter the query on the Loss column
     *
     * Example usage:
     * <code>
     * $query->filterByLoss(1234); // WHERE Loss = 1234
     * $query->filterByLoss(array(12, 34)); // WHERE Loss IN (12, 34)
     * $query->filterByLoss(array('min' => 12)); // WHERE Loss >= 12
     * $query->filterByLoss(array('max' => 12)); // WHERE Loss <= 12
     * </code>
     *
     * @param     mixed $loss The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByLoss($loss = null, $comparison = null)
    {
        if (is_array($loss)) {
            $useMinMax = false;
            if (isset($loss['min'])) {
                $this->addUsingAlias(DisrefPeer::LOSS, $loss['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($loss['max'])) {
                $this->addUsingAlias(DisrefPeer::LOSS, $loss['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::LOSS, $loss, $comparison);
    }

    /**
     * Filter the query on the SkeletonDeformation column
     *
     * Example usage:
     * <code>
     * $query->filterBySkeletondeformation(1234); // WHERE SkeletonDeformation = 1234
     * $query->filterBySkeletondeformation(array(12, 34)); // WHERE SkeletonDeformation IN (12, 34)
     * $query->filterBySkeletondeformation(array('min' => 12)); // WHERE SkeletonDeformation >= 12
     * $query->filterBySkeletondeformation(array('max' => 12)); // WHERE SkeletonDeformation <= 12
     * </code>
     *
     * @param     mixed $skeletondeformation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySkeletondeformation($skeletondeformation = null, $comparison = null)
    {
        if (is_array($skeletondeformation)) {
            $useMinMax = false;
            if (isset($skeletondeformation['min'])) {
                $this->addUsingAlias(DisrefPeer::SKELETONDEFORMATION, $skeletondeformation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($skeletondeformation['max'])) {
                $this->addUsingAlias(DisrefPeer::SKELETONDEFORMATION, $skeletondeformation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SKELETONDEFORMATION, $skeletondeformation, $comparison);
    }

    /**
     * Filter the query on the Spring column
     *
     * Example usage:
     * <code>
     * $query->filterBySpring(1234); // WHERE Spring = 1234
     * $query->filterBySpring(array(12, 34)); // WHERE Spring IN (12, 34)
     * $query->filterBySpring(array('min' => 12)); // WHERE Spring >= 12
     * $query->filterBySpring(array('max' => 12)); // WHERE Spring <= 12
     * </code>
     *
     * @param     mixed $spring The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySpring($spring = null, $comparison = null)
    {
        if (is_array($spring)) {
            $useMinMax = false;
            if (isset($spring['min'])) {
                $this->addUsingAlias(DisrefPeer::SPRING, $spring['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spring['max'])) {
                $this->addUsingAlias(DisrefPeer::SPRING, $spring['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SPRING, $spring, $comparison);
    }

    /**
     * Filter the query on the Summer column
     *
     * Example usage:
     * <code>
     * $query->filterBySummer(1234); // WHERE Summer = 1234
     * $query->filterBySummer(array(12, 34)); // WHERE Summer IN (12, 34)
     * $query->filterBySummer(array('min' => 12)); // WHERE Summer >= 12
     * $query->filterBySummer(array('max' => 12)); // WHERE Summer <= 12
     * </code>
     *
     * @param     mixed $summer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySummer($summer = null, $comparison = null)
    {
        if (is_array($summer)) {
            $useMinMax = false;
            if (isset($summer['min'])) {
                $this->addUsingAlias(DisrefPeer::SUMMER, $summer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($summer['max'])) {
                $this->addUsingAlias(DisrefPeer::SUMMER, $summer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SUMMER, $summer, $comparison);
    }

    /**
     * Filter the query on the GrowthRate column
     *
     * Example usage:
     * <code>
     * $query->filterByGrowthrate(1234); // WHERE GrowthRate = 1234
     * $query->filterByGrowthrate(array(12, 34)); // WHERE GrowthRate IN (12, 34)
     * $query->filterByGrowthrate(array('min' => 12)); // WHERE GrowthRate >= 12
     * $query->filterByGrowthrate(array('max' => 12)); // WHERE GrowthRate <= 12
     * </code>
     *
     * @param     mixed $growthrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByGrowthrate($growthrate = null, $comparison = null)
    {
        if (is_array($growthrate)) {
            $useMinMax = false;
            if (isset($growthrate['min'])) {
                $this->addUsingAlias(DisrefPeer::GROWTHRATE, $growthrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($growthrate['max'])) {
                $this->addUsingAlias(DisrefPeer::GROWTHRATE, $growthrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::GROWTHRATE, $growthrate, $comparison);
    }

    /**
     * Filter the query on the Autumn column
     *
     * Example usage:
     * <code>
     * $query->filterByAutumn(1234); // WHERE Autumn = 1234
     * $query->filterByAutumn(array(12, 34)); // WHERE Autumn IN (12, 34)
     * $query->filterByAutumn(array('min' => 12)); // WHERE Autumn >= 12
     * $query->filterByAutumn(array('max' => 12)); // WHERE Autumn <= 12
     * </code>
     *
     * @param     mixed $autumn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAutumn($autumn = null, $comparison = null)
    {
        if (is_array($autumn)) {
            $useMinMax = false;
            if (isset($autumn['min'])) {
                $this->addUsingAlias(DisrefPeer::AUTUMN, $autumn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autumn['max'])) {
                $this->addUsingAlias(DisrefPeer::AUTUMN, $autumn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::AUTUMN, $autumn, $comparison);
    }

    /**
     * Filter the query on the Winter column
     *
     * Example usage:
     * <code>
     * $query->filterByWinter(1234); // WHERE Winter = 1234
     * $query->filterByWinter(array(12, 34)); // WHERE Winter IN (12, 34)
     * $query->filterByWinter(array('min' => 12)); // WHERE Winter >= 12
     * $query->filterByWinter(array('max' => 12)); // WHERE Winter <= 12
     * </code>
     *
     * @param     mixed $winter The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByWinter($winter = null, $comparison = null)
    {
        if (is_array($winter)) {
            $useMinMax = false;
            if (isset($winter['min'])) {
                $this->addUsingAlias(DisrefPeer::WINTER, $winter['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($winter['max'])) {
                $this->addUsingAlias(DisrefPeer::WINTER, $winter['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::WINTER, $winter, $comparison);
    }

    /**
     * Filter the query on the Condition column
     *
     * Example usage:
     * <code>
     * $query->filterByCondition(1234); // WHERE Condition = 1234
     * $query->filterByCondition(array(12, 34)); // WHERE Condition IN (12, 34)
     * $query->filterByCondition(array('min' => 12)); // WHERE Condition >= 12
     * $query->filterByCondition(array('max' => 12)); // WHERE Condition <= 12
     * </code>
     *
     * @param     mixed $condition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByCondition($condition = null, $comparison = null)
    {
        if (is_array($condition)) {
            $useMinMax = false;
            if (isset($condition['min'])) {
                $this->addUsingAlias(DisrefPeer::CONDITION, $condition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($condition['max'])) {
                $this->addUsingAlias(DisrefPeer::CONDITION, $condition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::CONDITION, $condition, $comparison);
    }

    /**
     * Filter the query on the AberrantActivity column
     *
     * Example usage:
     * <code>
     * $query->filterByAberrantactivity(1234); // WHERE AberrantActivity = 1234
     * $query->filterByAberrantactivity(array(12, 34)); // WHERE AberrantActivity IN (12, 34)
     * $query->filterByAberrantactivity(array('min' => 12)); // WHERE AberrantActivity >= 12
     * $query->filterByAberrantactivity(array('max' => 12)); // WHERE AberrantActivity <= 12
     * </code>
     *
     * @param     mixed $aberrantactivity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAberrantactivity($aberrantactivity = null, $comparison = null)
    {
        if (is_array($aberrantactivity)) {
            $useMinMax = false;
            if (isset($aberrantactivity['min'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTACTIVITY, $aberrantactivity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aberrantactivity['max'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTACTIVITY, $aberrantactivity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERRANTACTIVITY, $aberrantactivity, $comparison);
    }

    /**
     * Filter the query on the Activity column
     *
     * Example usage:
     * <code>
     * $query->filterByActivity('fooValue');   // WHERE Activity = 'fooValue'
     * $query->filterByActivity('%fooValue%'); // WHERE Activity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $activity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByActivity($activity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($activity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $activity)) {
                $activity = str_replace('*', '%', $activity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ACTIVITY, $activity, $comparison);
    }

    /**
     * Filter the query on the AberrantBalance column
     *
     * Example usage:
     * <code>
     * $query->filterByAberrantbalance(1234); // WHERE AberrantBalance = 1234
     * $query->filterByAberrantbalance(array(12, 34)); // WHERE AberrantBalance IN (12, 34)
     * $query->filterByAberrantbalance(array('min' => 12)); // WHERE AberrantBalance >= 12
     * $query->filterByAberrantbalance(array('max' => 12)); // WHERE AberrantBalance <= 12
     * </code>
     *
     * @param     mixed $aberrantbalance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAberrantbalance($aberrantbalance = null, $comparison = null)
    {
        if (is_array($aberrantbalance)) {
            $useMinMax = false;
            if (isset($aberrantbalance['min'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTBALANCE, $aberrantbalance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aberrantbalance['max'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTBALANCE, $aberrantbalance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERRANTBALANCE, $aberrantbalance, $comparison);
    }

    /**
     * Filter the query on the AberrantSwMotions column
     *
     * Example usage:
     * <code>
     * $query->filterByAberrantswmotions(1234); // WHERE AberrantSwMotions = 1234
     * $query->filterByAberrantswmotions(array(12, 34)); // WHERE AberrantSwMotions IN (12, 34)
     * $query->filterByAberrantswmotions(array('min' => 12)); // WHERE AberrantSwMotions >= 12
     * $query->filterByAberrantswmotions(array('max' => 12)); // WHERE AberrantSwMotions <= 12
     * </code>
     *
     * @param     mixed $aberrantswmotions The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAberrantswmotions($aberrantswmotions = null, $comparison = null)
    {
        if (is_array($aberrantswmotions)) {
            $useMinMax = false;
            if (isset($aberrantswmotions['min'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTSWMOTIONS, $aberrantswmotions['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aberrantswmotions['max'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTSWMOTIONS, $aberrantswmotions['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERRANTSWMOTIONS, $aberrantswmotions, $comparison);
    }

    /**
     * Filter the query on the SwimmingMotions column
     *
     * Example usage:
     * <code>
     * $query->filterBySwimmingmotions('fooValue');   // WHERE SwimmingMotions = 'fooValue'
     * $query->filterBySwimmingmotions('%fooValue%'); // WHERE SwimmingMotions LIKE '%fooValue%'
     * </code>
     *
     * @param     string $swimmingmotions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySwimmingmotions($swimmingmotions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($swimmingmotions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $swimmingmotions)) {
                $swimmingmotions = str_replace('*', '%', $swimmingmotions);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SWIMMINGMOTIONS, $swimmingmotions, $comparison);
    }

    /**
     * Filter the query on the AberrantBodyDirec column
     *
     * Example usage:
     * <code>
     * $query->filterByAberrantbodydirec(1234); // WHERE AberrantBodyDirec = 1234
     * $query->filterByAberrantbodydirec(array(12, 34)); // WHERE AberrantBodyDirec IN (12, 34)
     * $query->filterByAberrantbodydirec(array('min' => 12)); // WHERE AberrantBodyDirec >= 12
     * $query->filterByAberrantbodydirec(array('max' => 12)); // WHERE AberrantBodyDirec <= 12
     * </code>
     *
     * @param     mixed $aberrantbodydirec The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAberrantbodydirec($aberrantbodydirec = null, $comparison = null)
    {
        if (is_array($aberrantbodydirec)) {
            $useMinMax = false;
            if (isset($aberrantbodydirec['min'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTBODYDIREC, $aberrantbodydirec['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aberrantbodydirec['max'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTBODYDIREC, $aberrantbodydirec['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERRANTBODYDIREC, $aberrantbodydirec, $comparison);
    }

    /**
     * Filter the query on the Scraping column
     *
     * Example usage:
     * <code>
     * $query->filterByScraping(1234); // WHERE Scraping = 1234
     * $query->filterByScraping(array(12, 34)); // WHERE Scraping IN (12, 34)
     * $query->filterByScraping(array('min' => 12)); // WHERE Scraping >= 12
     * $query->filterByScraping(array('max' => 12)); // WHERE Scraping <= 12
     * </code>
     *
     * @param     mixed $scraping The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByScraping($scraping = null, $comparison = null)
    {
        if (is_array($scraping)) {
            $useMinMax = false;
            if (isset($scraping['min'])) {
                $this->addUsingAlias(DisrefPeer::SCRAPING, $scraping['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scraping['max'])) {
                $this->addUsingAlias(DisrefPeer::SCRAPING, $scraping['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SCRAPING, $scraping, $comparison);
    }

    /**
     * Filter the query on the Jumping column
     *
     * Example usage:
     * <code>
     * $query->filterByJumping(1234); // WHERE Jumping = 1234
     * $query->filterByJumping(array(12, 34)); // WHERE Jumping IN (12, 34)
     * $query->filterByJumping(array('min' => 12)); // WHERE Jumping >= 12
     * $query->filterByJumping(array('max' => 12)); // WHERE Jumping <= 12
     * </code>
     *
     * @param     mixed $jumping The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByJumping($jumping = null, $comparison = null)
    {
        if (is_array($jumping)) {
            $useMinMax = false;
            if (isset($jumping['min'])) {
                $this->addUsingAlias(DisrefPeer::JUMPING, $jumping['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jumping['max'])) {
                $this->addUsingAlias(DisrefPeer::JUMPING, $jumping['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::JUMPING, $jumping, $comparison);
    }

    /**
     * Filter the query on the AberrantFins column
     *
     * Example usage:
     * <code>
     * $query->filterByAberrantfins(1234); // WHERE AberrantFins = 1234
     * $query->filterByAberrantfins(array(12, 34)); // WHERE AberrantFins IN (12, 34)
     * $query->filterByAberrantfins(array('min' => 12)); // WHERE AberrantFins >= 12
     * $query->filterByAberrantfins(array('max' => 12)); // WHERE AberrantFins <= 12
     * </code>
     *
     * @param     mixed $aberrantfins The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAberrantfins($aberrantfins = null, $comparison = null)
    {
        if (is_array($aberrantfins)) {
            $useMinMax = false;
            if (isset($aberrantfins['min'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTFINS, $aberrantfins['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aberrantfins['max'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTFINS, $aberrantfins['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERRANTFINS, $aberrantfins, $comparison);
    }

    /**
     * Filter the query on the Fins column
     *
     * Example usage:
     * <code>
     * $query->filterByFins('fooValue');   // WHERE Fins = 'fooValue'
     * $query->filterByFins('%fooValue%'); // WHERE Fins LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fins The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByFins($fins = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fins)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fins)) {
                $fins = str_replace('*', '%', $fins);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::FINS, $fins, $comparison);
    }

    /**
     * Filter the query on the AberrantLocation column
     *
     * Example usage:
     * <code>
     * $query->filterByAberrantlocation(1234); // WHERE AberrantLocation = 1234
     * $query->filterByAberrantlocation(array(12, 34)); // WHERE AberrantLocation IN (12, 34)
     * $query->filterByAberrantlocation(array('min' => 12)); // WHERE AberrantLocation >= 12
     * $query->filterByAberrantlocation(array('max' => 12)); // WHERE AberrantLocation <= 12
     * </code>
     *
     * @param     mixed $aberrantlocation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAberrantlocation($aberrantlocation = null, $comparison = null)
    {
        if (is_array($aberrantlocation)) {
            $useMinMax = false;
            if (isset($aberrantlocation['min'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTLOCATION, $aberrantlocation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aberrantlocation['max'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTLOCATION, $aberrantlocation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERRANTLOCATION, $aberrantlocation, $comparison);
    }

    /**
     * Filter the query on the FishNearSurface column
     *
     * Example usage:
     * <code>
     * $query->filterByFishnearsurface(1234); // WHERE FishNearSurface = 1234
     * $query->filterByFishnearsurface(array(12, 34)); // WHERE FishNearSurface IN (12, 34)
     * $query->filterByFishnearsurface(array('min' => 12)); // WHERE FishNearSurface >= 12
     * $query->filterByFishnearsurface(array('max' => 12)); // WHERE FishNearSurface <= 12
     * </code>
     *
     * @param     mixed $fishnearsurface The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByFishnearsurface($fishnearsurface = null, $comparison = null)
    {
        if (is_array($fishnearsurface)) {
            $useMinMax = false;
            if (isset($fishnearsurface['min'])) {
                $this->addUsingAlias(DisrefPeer::FISHNEARSURFACE, $fishnearsurface['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fishnearsurface['max'])) {
                $this->addUsingAlias(DisrefPeer::FISHNEARSURFACE, $fishnearsurface['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::FISHNEARSURFACE, $fishnearsurface, $comparison);
    }

    /**
     * Filter the query on the InfloworOutflow column
     *
     * Example usage:
     * <code>
     * $query->filterByInfloworoutflow(1234); // WHERE InfloworOutflow = 1234
     * $query->filterByInfloworoutflow(array(12, 34)); // WHERE InfloworOutflow IN (12, 34)
     * $query->filterByInfloworoutflow(array('min' => 12)); // WHERE InfloworOutflow >= 12
     * $query->filterByInfloworoutflow(array('max' => 12)); // WHERE InfloworOutflow <= 12
     * </code>
     *
     * @param     mixed $infloworoutflow The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByInfloworoutflow($infloworoutflow = null, $comparison = null)
    {
        if (is_array($infloworoutflow)) {
            $useMinMax = false;
            if (isset($infloworoutflow['min'])) {
                $this->addUsingAlias(DisrefPeer::INFLOWOROUTFLOW, $infloworoutflow['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($infloworoutflow['max'])) {
                $this->addUsingAlias(DisrefPeer::INFLOWOROUTFLOW, $infloworoutflow['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::INFLOWOROUTFLOW, $infloworoutflow, $comparison);
    }

    /**
     * Filter the query on the AberrantAppetite column
     *
     * Example usage:
     * <code>
     * $query->filterByAberrantappetite(1234); // WHERE AberrantAppetite = 1234
     * $query->filterByAberrantappetite(array(12, 34)); // WHERE AberrantAppetite IN (12, 34)
     * $query->filterByAberrantappetite(array('min' => 12)); // WHERE AberrantAppetite >= 12
     * $query->filterByAberrantappetite(array('max' => 12)); // WHERE AberrantAppetite <= 12
     * </code>
     *
     * @param     mixed $aberrantappetite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAberrantappetite($aberrantappetite = null, $comparison = null)
    {
        if (is_array($aberrantappetite)) {
            $useMinMax = false;
            if (isset($aberrantappetite['min'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTAPPETITE, $aberrantappetite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aberrantappetite['max'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTAPPETITE, $aberrantappetite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERRANTAPPETITE, $aberrantappetite, $comparison);
    }

    /**
     * Filter the query on the Operculum column
     *
     * Example usage:
     * <code>
     * $query->filterByOperculum(1234); // WHERE Operculum = 1234
     * $query->filterByOperculum(array(12, 34)); // WHERE Operculum IN (12, 34)
     * $query->filterByOperculum(array('min' => 12)); // WHERE Operculum >= 12
     * $query->filterByOperculum(array('max' => 12)); // WHERE Operculum <= 12
     * </code>
     *
     * @param     mixed $operculum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByOperculum($operculum = null, $comparison = null)
    {
        if (is_array($operculum)) {
            $useMinMax = false;
            if (isset($operculum['min'])) {
                $this->addUsingAlias(DisrefPeer::OPERCULUM, $operculum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($operculum['max'])) {
                $this->addUsingAlias(DisrefPeer::OPERCULUM, $operculum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::OPERCULUM, $operculum, $comparison);
    }

    /**
     * Filter the query on the AberrantVentilation column
     *
     * Example usage:
     * <code>
     * $query->filterByAberrantventilation(1234); // WHERE AberrantVentilation = 1234
     * $query->filterByAberrantventilation(array(12, 34)); // WHERE AberrantVentilation IN (12, 34)
     * $query->filterByAberrantventilation(array('min' => 12)); // WHERE AberrantVentilation >= 12
     * $query->filterByAberrantventilation(array('max' => 12)); // WHERE AberrantVentilation <= 12
     * </code>
     *
     * @param     mixed $aberrantventilation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAberrantventilation($aberrantventilation = null, $comparison = null)
    {
        if (is_array($aberrantventilation)) {
            $useMinMax = false;
            if (isset($aberrantventilation['min'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTVENTILATION, $aberrantventilation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aberrantventilation['max'])) {
                $this->addUsingAlias(DisrefPeer::ABERRANTVENTILATION, $aberrantventilation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ABERRANTVENTILATION, $aberrantventilation, $comparison);
    }

    /**
     * Filter the query on the Fast column
     *
     * Example usage:
     * <code>
     * $query->filterByFast(1234); // WHERE Fast = 1234
     * $query->filterByFast(array(12, 34)); // WHERE Fast IN (12, 34)
     * $query->filterByFast(array('min' => 12)); // WHERE Fast >= 12
     * $query->filterByFast(array('max' => 12)); // WHERE Fast <= 12
     * </code>
     *
     * @param     mixed $fast The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByFast($fast = null, $comparison = null)
    {
        if (is_array($fast)) {
            $useMinMax = false;
            if (isset($fast['min'])) {
                $this->addUsingAlias(DisrefPeer::FAST, $fast['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fast['max'])) {
                $this->addUsingAlias(DisrefPeer::FAST, $fast['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::FAST, $fast, $comparison);
    }

    /**
     * Filter the query on the Slow column
     *
     * Example usage:
     * <code>
     * $query->filterBySlow(1234); // WHERE Slow = 1234
     * $query->filterBySlow(array(12, 34)); // WHERE Slow IN (12, 34)
     * $query->filterBySlow(array('min' => 12)); // WHERE Slow >= 12
     * $query->filterBySlow(array('max' => 12)); // WHERE Slow <= 12
     * </code>
     *
     * @param     mixed $slow The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySlow($slow = null, $comparison = null)
    {
        if (is_array($slow)) {
            $useMinMax = false;
            if (isset($slow['min'])) {
                $this->addUsingAlias(DisrefPeer::SLOW, $slow['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($slow['max'])) {
                $this->addUsingAlias(DisrefPeer::SLOW, $slow['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SLOW, $slow, $comparison);
    }

    /**
     * Filter the query on the Flat column
     *
     * Example usage:
     * <code>
     * $query->filterByFlat(1234); // WHERE Flat = 1234
     * $query->filterByFlat(array(12, 34)); // WHERE Flat IN (12, 34)
     * $query->filterByFlat(array('min' => 12)); // WHERE Flat >= 12
     * $query->filterByFlat(array('max' => 12)); // WHERE Flat <= 12
     * </code>
     *
     * @param     mixed $flat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByFlat($flat = null, $comparison = null)
    {
        if (is_array($flat)) {
            $useMinMax = false;
            if (isset($flat['min'])) {
                $this->addUsingAlias(DisrefPeer::FLAT, $flat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($flat['max'])) {
                $this->addUsingAlias(DisrefPeer::FLAT, $flat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::FLAT, $flat, $comparison);
    }

    /**
     * Filter the query on the heavy column
     *
     * Example usage:
     * <code>
     * $query->filterByHeavy(1234); // WHERE heavy = 1234
     * $query->filterByHeavy(array(12, 34)); // WHERE heavy IN (12, 34)
     * $query->filterByHeavy(array('min' => 12)); // WHERE heavy >= 12
     * $query->filterByHeavy(array('max' => 12)); // WHERE heavy <= 12
     * </code>
     *
     * @param     mixed $heavy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByHeavy($heavy = null, $comparison = null)
    {
        if (is_array($heavy)) {
            $useMinMax = false;
            if (isset($heavy['min'])) {
                $this->addUsingAlias(DisrefPeer::HEAVY, $heavy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($heavy['max'])) {
                $this->addUsingAlias(DisrefPeer::HEAVY, $heavy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::HEAVY, $heavy, $comparison);
    }

    /**
     * Filter the query on the GaspingAir column
     *
     * Example usage:
     * <code>
     * $query->filterByGaspingair(1234); // WHERE GaspingAir = 1234
     * $query->filterByGaspingair(array(12, 34)); // WHERE GaspingAir IN (12, 34)
     * $query->filterByGaspingair(array('min' => 12)); // WHERE GaspingAir >= 12
     * $query->filterByGaspingair(array('max' => 12)); // WHERE GaspingAir <= 12
     * </code>
     *
     * @param     mixed $gaspingair The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByGaspingair($gaspingair = null, $comparison = null)
    {
        if (is_array($gaspingair)) {
            $useMinMax = false;
            if (isset($gaspingair['min'])) {
                $this->addUsingAlias(DisrefPeer::GASPINGAIR, $gaspingair['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gaspingair['max'])) {
                $this->addUsingAlias(DisrefPeer::GASPINGAIR, $gaspingair['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::GASPINGAIR, $gaspingair, $comparison);
    }

    /**
     * Filter the query on the FishAfflicted column
     *
     * Example usage:
     * <code>
     * $query->filterByFishafflicted('fooValue');   // WHERE FishAfflicted = 'fooValue'
     * $query->filterByFishafflicted('%fooValue%'); // WHERE FishAfflicted LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fishafflicted The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByFishafflicted($fishafflicted = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fishafflicted)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fishafflicted)) {
                $fishafflicted = str_replace('*', '%', $fishafflicted);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::FISHAFFLICTED, $fishafflicted, $comparison);
    }

    /**
     * Filter the query on the FishAfflicted2 column
     *
     * Example usage:
     * <code>
     * $query->filterByFishafflicted2('fooValue');   // WHERE FishAfflicted2 = 'fooValue'
     * $query->filterByFishafflicted2('%fooValue%'); // WHERE FishAfflicted2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fishafflicted2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByFishafflicted2($fishafflicted2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fishafflicted2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fishafflicted2)) {
                $fishafflicted2 = str_replace('*', '%', $fishafflicted2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::FISHAFFLICTED2, $fishafflicted2, $comparison);
    }

    /**
     * Filter the query on the FishAfflicted3 column
     *
     * Example usage:
     * <code>
     * $query->filterByFishafflicted3('fooValue');   // WHERE FishAfflicted3 = 'fooValue'
     * $query->filterByFishafflicted3('%fooValue%'); // WHERE FishAfflicted3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fishafflicted3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByFishafflicted3($fishafflicted3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fishafflicted3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fishafflicted3)) {
                $fishafflicted3 = str_replace('*', '%', $fishafflicted3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::FISHAFFLICTED3, $fishafflicted3, $comparison);
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
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(DisrefPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(DisrefPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ENTERED, $entered, $comparison);
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
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(DisrefPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(DisrefPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(DisrefPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(DisrefPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::MODIFIED, $modified, $comparison);
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
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(DisrefPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(DisrefPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(DisrefPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(DisrefPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::EXPERT, $expert, $comparison);
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
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(DisrefPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(DisrefPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the Fishafflict column
     *
     * Example usage:
     * <code>
     * $query->filterByFishafflict('fooValue');   // WHERE Fishafflict = 'fooValue'
     * $query->filterByFishafflict('%fooValue%'); // WHERE Fishafflict LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fishafflict The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByFishafflict($fishafflict = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fishafflict)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fishafflict)) {
                $fishafflict = str_replace('*', '%', $fishafflict);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::FISHAFFLICT, $fishafflict, $comparison);
    }

    /**
     * Filter the query on the Symptom column
     *
     * Example usage:
     * <code>
     * $query->filterBySymptom('fooValue');   // WHERE Symptom = 'fooValue'
     * $query->filterBySymptom('%fooValue%'); // WHERE Symptom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $symptom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterBySymptom($symptom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($symptom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $symptom)) {
                $symptom = str_replace('*', '%', $symptom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::SYMPTOM, $symptom, $comparison);
    }

    /**
     * Filter the query on the Treatments column
     *
     * Example usage:
     * <code>
     * $query->filterByTreatments('fooValue');   // WHERE Treatments = 'fooValue'
     * $query->filterByTreatments('%fooValue%'); // WHERE Treatments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $treatments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByTreatments($treatments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($treatments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $treatments)) {
                $treatments = str_replace('*', '%', $treatments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::TREATMENTS, $treatments, $comparison);
    }

    /**
     * Filter the query on the Prophylaxes column
     *
     * Example usage:
     * <code>
     * $query->filterByProphylaxes('fooValue');   // WHERE Prophylaxes = 'fooValue'
     * $query->filterByProphylaxes('%fooValue%'); // WHERE Prophylaxes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prophylaxes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByProphylaxes($prophylaxes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prophylaxes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prophylaxes)) {
                $prophylaxes = str_replace('*', '%', $prophylaxes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::PROPHYLAXES, $prophylaxes, $comparison);
    }

    /**
     * Filter the query on the AddRems column
     *
     * Example usage:
     * <code>
     * $query->filterByAddrems('fooValue');   // WHERE AddRems = 'fooValue'
     * $query->filterByAddrems('%fooValue%'); // WHERE AddRems LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addrems The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByAddrems($addrems = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addrems)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addrems)) {
                $addrems = str_replace('*', '%', $addrems);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DisrefPeer::ADDREMS, $addrems, $comparison);
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
     * @return DisrefQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(DisrefPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(DisrefPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DisrefPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Disref $disref Object to remove from the list of results
     *
     * @return DisrefQuery The current query, for fluid interface
     */
    public function prune($disref = null)
    {
        if ($disref) {
            $this->addCond('pruneCond0', $this->getAliasedColName(DisrefPeer::DISEASESREFNO), $disref->getDiseasesrefno(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(DisrefPeer::DISEASEII), $disref->getDiseaseii(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(DisrefPeer::GERMGENUS), $disref->getGermgenus(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
