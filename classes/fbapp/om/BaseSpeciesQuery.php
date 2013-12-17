<?php


/**
 * Base class that represents a query for the 'species' table.
 *
 *
 *
 * @method SpeciesQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method SpeciesQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method SpeciesQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method SpeciesQuery orderBySpeciesrefno($order = Criteria::ASC) Order by the SpeciesRefNo column
 * @method SpeciesQuery orderByAuthor($order = Criteria::ASC) Order by the Author column
 * @method SpeciesQuery orderByFbname($order = Criteria::ASC) Order by the FBname column
 * @method SpeciesQuery orderByPicpreferredname($order = Criteria::ASC) Order by the PicPreferredName column
 * @method SpeciesQuery orderByPicpreferrednamem($order = Criteria::ASC) Order by the PicPreferredNameM column
 * @method SpeciesQuery orderByPicpreferrednamef($order = Criteria::ASC) Order by the PicPreferredNameF column
 * @method SpeciesQuery orderByPicpreferrednamej($order = Criteria::ASC) Order by the PicPreferredNameJ column
 * @method SpeciesQuery orderByFamcode($order = Criteria::ASC) Order by the FamCode column
 * @method SpeciesQuery orderBySubfamily($order = Criteria::ASC) Order by the Subfamily column
 * @method SpeciesQuery orderByGencode($order = Criteria::ASC) Order by the GenCode column
 * @method SpeciesQuery orderBySubgencode($order = Criteria::ASC) Order by the SubGenCode column
 * @method SpeciesQuery orderByBodyshapei($order = Criteria::ASC) Order by the BodyShapeI column
 * @method SpeciesQuery orderBySource($order = Criteria::ASC) Order by the Source column
 * @method SpeciesQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method SpeciesQuery orderByTaxissue($order = Criteria::ASC) Order by the TaxIssue column
 * @method SpeciesQuery orderByFresh($order = Criteria::ASC) Order by the Fresh column
 * @method SpeciesQuery orderByBrack($order = Criteria::ASC) Order by the Brack column
 * @method SpeciesQuery orderBySaltwater($order = Criteria::ASC) Order by the Saltwater column
 * @method SpeciesQuery orderByDemerspelag($order = Criteria::ASC) Order by the DemersPelag column
 * @method SpeciesQuery orderByAnacat($order = Criteria::ASC) Order by the AnaCat column
 * @method SpeciesQuery orderByMigratref($order = Criteria::ASC) Order by the MigratRef column
 * @method SpeciesQuery orderByDepthrangeshallow($order = Criteria::ASC) Order by the DepthRangeShallow column
 * @method SpeciesQuery orderByDepthrangedeep($order = Criteria::ASC) Order by the DepthRangeDeep column
 * @method SpeciesQuery orderByDepthrangeref($order = Criteria::ASC) Order by the DepthRangeRef column
 * @method SpeciesQuery orderByDepthrangecomshallow($order = Criteria::ASC) Order by the DepthRangeComShallow column
 * @method SpeciesQuery orderByDepthrangecomdeep($order = Criteria::ASC) Order by the DepthRangeComDeep column
 * @method SpeciesQuery orderByDepthcomref($order = Criteria::ASC) Order by the DepthComRef column
 * @method SpeciesQuery orderByLongevitywild($order = Criteria::ASC) Order by the LongevityWild column
 * @method SpeciesQuery orderByLongevitywildref($order = Criteria::ASC) Order by the LongevityWildRef column
 * @method SpeciesQuery orderByLongevitycaptive($order = Criteria::ASC) Order by the LongevityCaptive column
 * @method SpeciesQuery orderByLongevitycapref($order = Criteria::ASC) Order by the LongevityCapRef column
 * @method SpeciesQuery orderByVulnerability($order = Criteria::ASC) Order by the Vulnerability column
 * @method SpeciesQuery orderByLength($order = Criteria::ASC) Order by the Length column
 * @method SpeciesQuery orderByLtypemaxm($order = Criteria::ASC) Order by the LTypeMaxM column
 * @method SpeciesQuery orderByLengthfemale($order = Criteria::ASC) Order by the LengthFemale column
 * @method SpeciesQuery orderByLtypemaxf($order = Criteria::ASC) Order by the LTypeMaxF column
 * @method SpeciesQuery orderByMaxlengthref($order = Criteria::ASC) Order by the MaxLengthRef column
 * @method SpeciesQuery orderByCommonlength($order = Criteria::ASC) Order by the CommonLength column
 * @method SpeciesQuery orderByLtypecomm($order = Criteria::ASC) Order by the LTypeComM column
 * @method SpeciesQuery orderByCommonlengthf($order = Criteria::ASC) Order by the CommonLengthF column
 * @method SpeciesQuery orderByLtypecomf($order = Criteria::ASC) Order by the LTypeComF column
 * @method SpeciesQuery orderByCommonlengthref($order = Criteria::ASC) Order by the CommonLengthRef column
 * @method SpeciesQuery orderByWeight($order = Criteria::ASC) Order by the Weight column
 * @method SpeciesQuery orderByWeightfemale($order = Criteria::ASC) Order by the WeightFemale column
 * @method SpeciesQuery orderByMaxweightref($order = Criteria::ASC) Order by the MaxWeightRef column
 * @method SpeciesQuery orderByPic($order = Criteria::ASC) Order by the Pic column
 * @method SpeciesQuery orderByPicturefemale($order = Criteria::ASC) Order by the PictureFemale column
 * @method SpeciesQuery orderByLarvapic($order = Criteria::ASC) Order by the LarvaPic column
 * @method SpeciesQuery orderByEggpic($order = Criteria::ASC) Order by the EggPic column
 * @method SpeciesQuery orderByImportanceref($order = Criteria::ASC) Order by the ImportanceRef column
 * @method SpeciesQuery orderByImportance($order = Criteria::ASC) Order by the Importance column
 * @method SpeciesQuery orderByPricecateg($order = Criteria::ASC) Order by the PriceCateg column
 * @method SpeciesQuery orderByPricereliability($order = Criteria::ASC) Order by the PriceReliability column
 * @method SpeciesQuery orderByRemarks7($order = Criteria::ASC) Order by the Remarks7 column
 * @method SpeciesQuery orderByLandingstatistics($order = Criteria::ASC) Order by the LandingStatistics column
 * @method SpeciesQuery orderByLandings($order = Criteria::ASC) Order by the Landings column
 * @method SpeciesQuery orderByMaincatchingmethod($order = Criteria::ASC) Order by the MainCatchingMethod column
 * @method SpeciesQuery orderByIi($order = Criteria::ASC) Order by the II column
 * @method SpeciesQuery orderByMseines($order = Criteria::ASC) Order by the MSeines column
 * @method SpeciesQuery orderByMgillnets($order = Criteria::ASC) Order by the MGillnets column
 * @method SpeciesQuery orderByMcastnets($order = Criteria::ASC) Order by the MCastnets column
 * @method SpeciesQuery orderByMtraps($order = Criteria::ASC) Order by the MTraps column
 * @method SpeciesQuery orderByMspears($order = Criteria::ASC) Order by the MSpears column
 * @method SpeciesQuery orderByMtrawls($order = Criteria::ASC) Order by the MTrawls column
 * @method SpeciesQuery orderByMdredges($order = Criteria::ASC) Order by the MDredges column
 * @method SpeciesQuery orderByMliftnets($order = Criteria::ASC) Order by the MLiftnets column
 * @method SpeciesQuery orderByMhookslines($order = Criteria::ASC) Order by the MHooksLines column
 * @method SpeciesQuery orderByMother($order = Criteria::ASC) Order by the MOther column
 * @method SpeciesQuery orderByUsedforaquaculture($order = Criteria::ASC) Order by the UsedforAquaculture column
 * @method SpeciesQuery orderByLifecycle($order = Criteria::ASC) Order by the LifeCycle column
 * @method SpeciesQuery orderByAquacultureref($order = Criteria::ASC) Order by the AquacultureRef column
 * @method SpeciesQuery orderByUsedasbait($order = Criteria::ASC) Order by the UsedasBait column
 * @method SpeciesQuery orderByBaitref($order = Criteria::ASC) Order by the BaitRef column
 * @method SpeciesQuery orderByAquarium($order = Criteria::ASC) Order by the Aquarium column
 * @method SpeciesQuery orderByAquariumfishii($order = Criteria::ASC) Order by the AquariumFishII column
 * @method SpeciesQuery orderByAquariumref($order = Criteria::ASC) Order by the AquariumRef column
 * @method SpeciesQuery orderByGamefish($order = Criteria::ASC) Order by the GameFish column
 * @method SpeciesQuery orderByGameref($order = Criteria::ASC) Order by the GameRef column
 * @method SpeciesQuery orderByDangerous($order = Criteria::ASC) Order by the Dangerous column
 * @method SpeciesQuery orderByDangerousref($order = Criteria::ASC) Order by the DangerousRef column
 * @method SpeciesQuery orderByElectrogenic($order = Criteria::ASC) Order by the Electrogenic column
 * @method SpeciesQuery orderByElectroref($order = Criteria::ASC) Order by the ElectroRef column
 * @method SpeciesQuery orderByComplete($order = Criteria::ASC) Order by the Complete column
 * @method SpeciesQuery orderByGoogleimage($order = Criteria::ASC) Order by the GoogleImage column
 * @method SpeciesQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method SpeciesQuery orderByProfile($order = Criteria::ASC) Order by the Profile column
 * @method SpeciesQuery orderByPd50($order = Criteria::ASC) Order by the PD50 column
 * @method SpeciesQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method SpeciesQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method SpeciesQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method SpeciesQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method SpeciesQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method SpeciesQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method SpeciesQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method SpeciesQuery groupBySpeccode() Group by the SpecCode column
 * @method SpeciesQuery groupByGenus() Group by the Genus column
 * @method SpeciesQuery groupBySpecies() Group by the Species column
 * @method SpeciesQuery groupBySpeciesrefno() Group by the SpeciesRefNo column
 * @method SpeciesQuery groupByAuthor() Group by the Author column
 * @method SpeciesQuery groupByFbname() Group by the FBname column
 * @method SpeciesQuery groupByPicpreferredname() Group by the PicPreferredName column
 * @method SpeciesQuery groupByPicpreferrednamem() Group by the PicPreferredNameM column
 * @method SpeciesQuery groupByPicpreferrednamef() Group by the PicPreferredNameF column
 * @method SpeciesQuery groupByPicpreferrednamej() Group by the PicPreferredNameJ column
 * @method SpeciesQuery groupByFamcode() Group by the FamCode column
 * @method SpeciesQuery groupBySubfamily() Group by the Subfamily column
 * @method SpeciesQuery groupByGencode() Group by the GenCode column
 * @method SpeciesQuery groupBySubgencode() Group by the SubGenCode column
 * @method SpeciesQuery groupByBodyshapei() Group by the BodyShapeI column
 * @method SpeciesQuery groupBySource() Group by the Source column
 * @method SpeciesQuery groupByRemark() Group by the Remark column
 * @method SpeciesQuery groupByTaxissue() Group by the TaxIssue column
 * @method SpeciesQuery groupByFresh() Group by the Fresh column
 * @method SpeciesQuery groupByBrack() Group by the Brack column
 * @method SpeciesQuery groupBySaltwater() Group by the Saltwater column
 * @method SpeciesQuery groupByDemerspelag() Group by the DemersPelag column
 * @method SpeciesQuery groupByAnacat() Group by the AnaCat column
 * @method SpeciesQuery groupByMigratref() Group by the MigratRef column
 * @method SpeciesQuery groupByDepthrangeshallow() Group by the DepthRangeShallow column
 * @method SpeciesQuery groupByDepthrangedeep() Group by the DepthRangeDeep column
 * @method SpeciesQuery groupByDepthrangeref() Group by the DepthRangeRef column
 * @method SpeciesQuery groupByDepthrangecomshallow() Group by the DepthRangeComShallow column
 * @method SpeciesQuery groupByDepthrangecomdeep() Group by the DepthRangeComDeep column
 * @method SpeciesQuery groupByDepthcomref() Group by the DepthComRef column
 * @method SpeciesQuery groupByLongevitywild() Group by the LongevityWild column
 * @method SpeciesQuery groupByLongevitywildref() Group by the LongevityWildRef column
 * @method SpeciesQuery groupByLongevitycaptive() Group by the LongevityCaptive column
 * @method SpeciesQuery groupByLongevitycapref() Group by the LongevityCapRef column
 * @method SpeciesQuery groupByVulnerability() Group by the Vulnerability column
 * @method SpeciesQuery groupByLength() Group by the Length column
 * @method SpeciesQuery groupByLtypemaxm() Group by the LTypeMaxM column
 * @method SpeciesQuery groupByLengthfemale() Group by the LengthFemale column
 * @method SpeciesQuery groupByLtypemaxf() Group by the LTypeMaxF column
 * @method SpeciesQuery groupByMaxlengthref() Group by the MaxLengthRef column
 * @method SpeciesQuery groupByCommonlength() Group by the CommonLength column
 * @method SpeciesQuery groupByLtypecomm() Group by the LTypeComM column
 * @method SpeciesQuery groupByCommonlengthf() Group by the CommonLengthF column
 * @method SpeciesQuery groupByLtypecomf() Group by the LTypeComF column
 * @method SpeciesQuery groupByCommonlengthref() Group by the CommonLengthRef column
 * @method SpeciesQuery groupByWeight() Group by the Weight column
 * @method SpeciesQuery groupByWeightfemale() Group by the WeightFemale column
 * @method SpeciesQuery groupByMaxweightref() Group by the MaxWeightRef column
 * @method SpeciesQuery groupByPic() Group by the Pic column
 * @method SpeciesQuery groupByPicturefemale() Group by the PictureFemale column
 * @method SpeciesQuery groupByLarvapic() Group by the LarvaPic column
 * @method SpeciesQuery groupByEggpic() Group by the EggPic column
 * @method SpeciesQuery groupByImportanceref() Group by the ImportanceRef column
 * @method SpeciesQuery groupByImportance() Group by the Importance column
 * @method SpeciesQuery groupByPricecateg() Group by the PriceCateg column
 * @method SpeciesQuery groupByPricereliability() Group by the PriceReliability column
 * @method SpeciesQuery groupByRemarks7() Group by the Remarks7 column
 * @method SpeciesQuery groupByLandingstatistics() Group by the LandingStatistics column
 * @method SpeciesQuery groupByLandings() Group by the Landings column
 * @method SpeciesQuery groupByMaincatchingmethod() Group by the MainCatchingMethod column
 * @method SpeciesQuery groupByIi() Group by the II column
 * @method SpeciesQuery groupByMseines() Group by the MSeines column
 * @method SpeciesQuery groupByMgillnets() Group by the MGillnets column
 * @method SpeciesQuery groupByMcastnets() Group by the MCastnets column
 * @method SpeciesQuery groupByMtraps() Group by the MTraps column
 * @method SpeciesQuery groupByMspears() Group by the MSpears column
 * @method SpeciesQuery groupByMtrawls() Group by the MTrawls column
 * @method SpeciesQuery groupByMdredges() Group by the MDredges column
 * @method SpeciesQuery groupByMliftnets() Group by the MLiftnets column
 * @method SpeciesQuery groupByMhookslines() Group by the MHooksLines column
 * @method SpeciesQuery groupByMother() Group by the MOther column
 * @method SpeciesQuery groupByUsedforaquaculture() Group by the UsedforAquaculture column
 * @method SpeciesQuery groupByLifecycle() Group by the LifeCycle column
 * @method SpeciesQuery groupByAquacultureref() Group by the AquacultureRef column
 * @method SpeciesQuery groupByUsedasbait() Group by the UsedasBait column
 * @method SpeciesQuery groupByBaitref() Group by the BaitRef column
 * @method SpeciesQuery groupByAquarium() Group by the Aquarium column
 * @method SpeciesQuery groupByAquariumfishii() Group by the AquariumFishII column
 * @method SpeciesQuery groupByAquariumref() Group by the AquariumRef column
 * @method SpeciesQuery groupByGamefish() Group by the GameFish column
 * @method SpeciesQuery groupByGameref() Group by the GameRef column
 * @method SpeciesQuery groupByDangerous() Group by the Dangerous column
 * @method SpeciesQuery groupByDangerousref() Group by the DangerousRef column
 * @method SpeciesQuery groupByElectrogenic() Group by the Electrogenic column
 * @method SpeciesQuery groupByElectroref() Group by the ElectroRef column
 * @method SpeciesQuery groupByComplete() Group by the Complete column
 * @method SpeciesQuery groupByGoogleimage() Group by the GoogleImage column
 * @method SpeciesQuery groupByComments() Group by the Comments column
 * @method SpeciesQuery groupByProfile() Group by the Profile column
 * @method SpeciesQuery groupByPd50() Group by the PD50 column
 * @method SpeciesQuery groupByEntered() Group by the Entered column
 * @method SpeciesQuery groupByDateentered() Group by the DateEntered column
 * @method SpeciesQuery groupByModified() Group by the Modified column
 * @method SpeciesQuery groupByDatemodified() Group by the DateModified column
 * @method SpeciesQuery groupByExpert() Group by the Expert column
 * @method SpeciesQuery groupByDatechecked() Group by the DateChecked column
 * @method SpeciesQuery groupByTs() Group by the TS column
 *
 * @method SpeciesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SpeciesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SpeciesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Species findOne(PropelPDO $con = null) Return the first Species matching the query
 * @method Species findOneOrCreate(PropelPDO $con = null) Return the first Species matching the query, or a new Species object populated from the query conditions when no match is found
 *
 * @method Species findOneBySpeccode(int $SpecCode) Return the first Species filtered by the SpecCode column
 * @method Species findOneByGenus(string $Genus) Return the first Species filtered by the Genus column
 * @method Species findOneBySpecies(string $Species) Return the first Species filtered by the Species column
 * @method Species findOneBySpeciesrefno(int $SpeciesRefNo) Return the first Species filtered by the SpeciesRefNo column
 * @method Species findOneByAuthor(string $Author) Return the first Species filtered by the Author column
 * @method Species findOneByFbname(string $FBname) Return the first Species filtered by the FBname column
 * @method Species findOneByPicpreferredname(string $PicPreferredName) Return the first Species filtered by the PicPreferredName column
 * @method Species findOneByPicpreferrednamem(string $PicPreferredNameM) Return the first Species filtered by the PicPreferredNameM column
 * @method Species findOneByPicpreferrednamef(string $PicPreferredNameF) Return the first Species filtered by the PicPreferredNameF column
 * @method Species findOneByPicpreferrednamej(string $PicPreferredNameJ) Return the first Species filtered by the PicPreferredNameJ column
 * @method Species findOneByFamcode(int $FamCode) Return the first Species filtered by the FamCode column
 * @method Species findOneBySubfamily(string $Subfamily) Return the first Species filtered by the Subfamily column
 * @method Species findOneByGencode(int $GenCode) Return the first Species filtered by the GenCode column
 * @method Species findOneBySubgencode(int $SubGenCode) Return the first Species filtered by the SubGenCode column
 * @method Species findOneByBodyshapei(string $BodyShapeI) Return the first Species filtered by the BodyShapeI column
 * @method Species findOneBySource(string $Source) Return the first Species filtered by the Source column
 * @method Species findOneByRemark(string $Remark) Return the first Species filtered by the Remark column
 * @method Species findOneByTaxissue(int $TaxIssue) Return the first Species filtered by the TaxIssue column
 * @method Species findOneByFresh(int $Fresh) Return the first Species filtered by the Fresh column
 * @method Species findOneByBrack(int $Brack) Return the first Species filtered by the Brack column
 * @method Species findOneBySaltwater(int $Saltwater) Return the first Species filtered by the Saltwater column
 * @method Species findOneByDemerspelag(string $DemersPelag) Return the first Species filtered by the DemersPelag column
 * @method Species findOneByAnacat(string $AnaCat) Return the first Species filtered by the AnaCat column
 * @method Species findOneByMigratref(int $MigratRef) Return the first Species filtered by the MigratRef column
 * @method Species findOneByDepthrangeshallow(int $DepthRangeShallow) Return the first Species filtered by the DepthRangeShallow column
 * @method Species findOneByDepthrangedeep(int $DepthRangeDeep) Return the first Species filtered by the DepthRangeDeep column
 * @method Species findOneByDepthrangeref(int $DepthRangeRef) Return the first Species filtered by the DepthRangeRef column
 * @method Species findOneByDepthrangecomshallow(int $DepthRangeComShallow) Return the first Species filtered by the DepthRangeComShallow column
 * @method Species findOneByDepthrangecomdeep(int $DepthRangeComDeep) Return the first Species filtered by the DepthRangeComDeep column
 * @method Species findOneByDepthcomref(int $DepthComRef) Return the first Species filtered by the DepthComRef column
 * @method Species findOneByLongevitywild(double $LongevityWild) Return the first Species filtered by the LongevityWild column
 * @method Species findOneByLongevitywildref(int $LongevityWildRef) Return the first Species filtered by the LongevityWildRef column
 * @method Species findOneByLongevitycaptive(double $LongevityCaptive) Return the first Species filtered by the LongevityCaptive column
 * @method Species findOneByLongevitycapref(int $LongevityCapRef) Return the first Species filtered by the LongevityCapRef column
 * @method Species findOneByVulnerability(double $Vulnerability) Return the first Species filtered by the Vulnerability column
 * @method Species findOneByLength(double $Length) Return the first Species filtered by the Length column
 * @method Species findOneByLtypemaxm(string $LTypeMaxM) Return the first Species filtered by the LTypeMaxM column
 * @method Species findOneByLengthfemale(double $LengthFemale) Return the first Species filtered by the LengthFemale column
 * @method Species findOneByLtypemaxf(string $LTypeMaxF) Return the first Species filtered by the LTypeMaxF column
 * @method Species findOneByMaxlengthref(int $MaxLengthRef) Return the first Species filtered by the MaxLengthRef column
 * @method Species findOneByCommonlength(double $CommonLength) Return the first Species filtered by the CommonLength column
 * @method Species findOneByLtypecomm(string $LTypeComM) Return the first Species filtered by the LTypeComM column
 * @method Species findOneByCommonlengthf(double $CommonLengthF) Return the first Species filtered by the CommonLengthF column
 * @method Species findOneByLtypecomf(string $LTypeComF) Return the first Species filtered by the LTypeComF column
 * @method Species findOneByCommonlengthref(int $CommonLengthRef) Return the first Species filtered by the CommonLengthRef column
 * @method Species findOneByWeight(double $Weight) Return the first Species filtered by the Weight column
 * @method Species findOneByWeightfemale(double $WeightFemale) Return the first Species filtered by the WeightFemale column
 * @method Species findOneByMaxweightref(int $MaxWeightRef) Return the first Species filtered by the MaxWeightRef column
 * @method Species findOneByPic(string $Pic) Return the first Species filtered by the Pic column
 * @method Species findOneByPicturefemale(string $PictureFemale) Return the first Species filtered by the PictureFemale column
 * @method Species findOneByLarvapic(string $LarvaPic) Return the first Species filtered by the LarvaPic column
 * @method Species findOneByEggpic(string $EggPic) Return the first Species filtered by the EggPic column
 * @method Species findOneByImportanceref(int $ImportanceRef) Return the first Species filtered by the ImportanceRef column
 * @method Species findOneByImportance(string $Importance) Return the first Species filtered by the Importance column
 * @method Species findOneByPricecateg(string $PriceCateg) Return the first Species filtered by the PriceCateg column
 * @method Species findOneByPricereliability(string $PriceReliability) Return the first Species filtered by the PriceReliability column
 * @method Species findOneByRemarks7(string $Remarks7) Return the first Species filtered by the Remarks7 column
 * @method Species findOneByLandingstatistics(string $LandingStatistics) Return the first Species filtered by the LandingStatistics column
 * @method Species findOneByLandings(string $Landings) Return the first Species filtered by the Landings column
 * @method Species findOneByMaincatchingmethod(string $MainCatchingMethod) Return the first Species filtered by the MainCatchingMethod column
 * @method Species findOneByIi(string $II) Return the first Species filtered by the II column
 * @method Species findOneByMseines(int $MSeines) Return the first Species filtered by the MSeines column
 * @method Species findOneByMgillnets(int $MGillnets) Return the first Species filtered by the MGillnets column
 * @method Species findOneByMcastnets(int $MCastnets) Return the first Species filtered by the MCastnets column
 * @method Species findOneByMtraps(int $MTraps) Return the first Species filtered by the MTraps column
 * @method Species findOneByMspears(int $MSpears) Return the first Species filtered by the MSpears column
 * @method Species findOneByMtrawls(int $MTrawls) Return the first Species filtered by the MTrawls column
 * @method Species findOneByMdredges(int $MDredges) Return the first Species filtered by the MDredges column
 * @method Species findOneByMliftnets(int $MLiftnets) Return the first Species filtered by the MLiftnets column
 * @method Species findOneByMhookslines(int $MHooksLines) Return the first Species filtered by the MHooksLines column
 * @method Species findOneByMother(int $MOther) Return the first Species filtered by the MOther column
 * @method Species findOneByUsedforaquaculture(string $UsedforAquaculture) Return the first Species filtered by the UsedforAquaculture column
 * @method Species findOneByLifecycle(string $LifeCycle) Return the first Species filtered by the LifeCycle column
 * @method Species findOneByAquacultureref(int $AquacultureRef) Return the first Species filtered by the AquacultureRef column
 * @method Species findOneByUsedasbait(string $UsedasBait) Return the first Species filtered by the UsedasBait column
 * @method Species findOneByBaitref(int $BaitRef) Return the first Species filtered by the BaitRef column
 * @method Species findOneByAquarium(string $Aquarium) Return the first Species filtered by the Aquarium column
 * @method Species findOneByAquariumfishii(string $AquariumFishII) Return the first Species filtered by the AquariumFishII column
 * @method Species findOneByAquariumref(int $AquariumRef) Return the first Species filtered by the AquariumRef column
 * @method Species findOneByGamefish(int $GameFish) Return the first Species filtered by the GameFish column
 * @method Species findOneByGameref(int $GameRef) Return the first Species filtered by the GameRef column
 * @method Species findOneByDangerous(string $Dangerous) Return the first Species filtered by the Dangerous column
 * @method Species findOneByDangerousref(int $DangerousRef) Return the first Species filtered by the DangerousRef column
 * @method Species findOneByElectrogenic(string $Electrogenic) Return the first Species filtered by the Electrogenic column
 * @method Species findOneByElectroref(int $ElectroRef) Return the first Species filtered by the ElectroRef column
 * @method Species findOneByComplete(string $Complete) Return the first Species filtered by the Complete column
 * @method Species findOneByGoogleimage(int $GoogleImage) Return the first Species filtered by the GoogleImage column
 * @method Species findOneByComments(string $Comments) Return the first Species filtered by the Comments column
 * @method Species findOneByProfile(string $Profile) Return the first Species filtered by the Profile column
 * @method Species findOneByPd50(double $PD50) Return the first Species filtered by the PD50 column
 * @method Species findOneByEntered(int $Entered) Return the first Species filtered by the Entered column
 * @method Species findOneByDateentered(string $DateEntered) Return the first Species filtered by the DateEntered column
 * @method Species findOneByModified(int $Modified) Return the first Species filtered by the Modified column
 * @method Species findOneByDatemodified(string $DateModified) Return the first Species filtered by the DateModified column
 * @method Species findOneByExpert(int $Expert) Return the first Species filtered by the Expert column
 * @method Species findOneByDatechecked(string $DateChecked) Return the first Species filtered by the DateChecked column
 * @method Species findOneByTs(string $TS) Return the first Species filtered by the TS column
 *
 * @method array findBySpeccode(int $SpecCode) Return Species objects filtered by the SpecCode column
 * @method array findByGenus(string $Genus) Return Species objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Species objects filtered by the Species column
 * @method array findBySpeciesrefno(int $SpeciesRefNo) Return Species objects filtered by the SpeciesRefNo column
 * @method array findByAuthor(string $Author) Return Species objects filtered by the Author column
 * @method array findByFbname(string $FBname) Return Species objects filtered by the FBname column
 * @method array findByPicpreferredname(string $PicPreferredName) Return Species objects filtered by the PicPreferredName column
 * @method array findByPicpreferrednamem(string $PicPreferredNameM) Return Species objects filtered by the PicPreferredNameM column
 * @method array findByPicpreferrednamef(string $PicPreferredNameF) Return Species objects filtered by the PicPreferredNameF column
 * @method array findByPicpreferrednamej(string $PicPreferredNameJ) Return Species objects filtered by the PicPreferredNameJ column
 * @method array findByFamcode(int $FamCode) Return Species objects filtered by the FamCode column
 * @method array findBySubfamily(string $Subfamily) Return Species objects filtered by the Subfamily column
 * @method array findByGencode(int $GenCode) Return Species objects filtered by the GenCode column
 * @method array findBySubgencode(int $SubGenCode) Return Species objects filtered by the SubGenCode column
 * @method array findByBodyshapei(string $BodyShapeI) Return Species objects filtered by the BodyShapeI column
 * @method array findBySource(string $Source) Return Species objects filtered by the Source column
 * @method array findByRemark(string $Remark) Return Species objects filtered by the Remark column
 * @method array findByTaxissue(int $TaxIssue) Return Species objects filtered by the TaxIssue column
 * @method array findByFresh(int $Fresh) Return Species objects filtered by the Fresh column
 * @method array findByBrack(int $Brack) Return Species objects filtered by the Brack column
 * @method array findBySaltwater(int $Saltwater) Return Species objects filtered by the Saltwater column
 * @method array findByDemerspelag(string $DemersPelag) Return Species objects filtered by the DemersPelag column
 * @method array findByAnacat(string $AnaCat) Return Species objects filtered by the AnaCat column
 * @method array findByMigratref(int $MigratRef) Return Species objects filtered by the MigratRef column
 * @method array findByDepthrangeshallow(int $DepthRangeShallow) Return Species objects filtered by the DepthRangeShallow column
 * @method array findByDepthrangedeep(int $DepthRangeDeep) Return Species objects filtered by the DepthRangeDeep column
 * @method array findByDepthrangeref(int $DepthRangeRef) Return Species objects filtered by the DepthRangeRef column
 * @method array findByDepthrangecomshallow(int $DepthRangeComShallow) Return Species objects filtered by the DepthRangeComShallow column
 * @method array findByDepthrangecomdeep(int $DepthRangeComDeep) Return Species objects filtered by the DepthRangeComDeep column
 * @method array findByDepthcomref(int $DepthComRef) Return Species objects filtered by the DepthComRef column
 * @method array findByLongevitywild(double $LongevityWild) Return Species objects filtered by the LongevityWild column
 * @method array findByLongevitywildref(int $LongevityWildRef) Return Species objects filtered by the LongevityWildRef column
 * @method array findByLongevitycaptive(double $LongevityCaptive) Return Species objects filtered by the LongevityCaptive column
 * @method array findByLongevitycapref(int $LongevityCapRef) Return Species objects filtered by the LongevityCapRef column
 * @method array findByVulnerability(double $Vulnerability) Return Species objects filtered by the Vulnerability column
 * @method array findByLength(double $Length) Return Species objects filtered by the Length column
 * @method array findByLtypemaxm(string $LTypeMaxM) Return Species objects filtered by the LTypeMaxM column
 * @method array findByLengthfemale(double $LengthFemale) Return Species objects filtered by the LengthFemale column
 * @method array findByLtypemaxf(string $LTypeMaxF) Return Species objects filtered by the LTypeMaxF column
 * @method array findByMaxlengthref(int $MaxLengthRef) Return Species objects filtered by the MaxLengthRef column
 * @method array findByCommonlength(double $CommonLength) Return Species objects filtered by the CommonLength column
 * @method array findByLtypecomm(string $LTypeComM) Return Species objects filtered by the LTypeComM column
 * @method array findByCommonlengthf(double $CommonLengthF) Return Species objects filtered by the CommonLengthF column
 * @method array findByLtypecomf(string $LTypeComF) Return Species objects filtered by the LTypeComF column
 * @method array findByCommonlengthref(int $CommonLengthRef) Return Species objects filtered by the CommonLengthRef column
 * @method array findByWeight(double $Weight) Return Species objects filtered by the Weight column
 * @method array findByWeightfemale(double $WeightFemale) Return Species objects filtered by the WeightFemale column
 * @method array findByMaxweightref(int $MaxWeightRef) Return Species objects filtered by the MaxWeightRef column
 * @method array findByPic(string $Pic) Return Species objects filtered by the Pic column
 * @method array findByPicturefemale(string $PictureFemale) Return Species objects filtered by the PictureFemale column
 * @method array findByLarvapic(string $LarvaPic) Return Species objects filtered by the LarvaPic column
 * @method array findByEggpic(string $EggPic) Return Species objects filtered by the EggPic column
 * @method array findByImportanceref(int $ImportanceRef) Return Species objects filtered by the ImportanceRef column
 * @method array findByImportance(string $Importance) Return Species objects filtered by the Importance column
 * @method array findByPricecateg(string $PriceCateg) Return Species objects filtered by the PriceCateg column
 * @method array findByPricereliability(string $PriceReliability) Return Species objects filtered by the PriceReliability column
 * @method array findByRemarks7(string $Remarks7) Return Species objects filtered by the Remarks7 column
 * @method array findByLandingstatistics(string $LandingStatistics) Return Species objects filtered by the LandingStatistics column
 * @method array findByLandings(string $Landings) Return Species objects filtered by the Landings column
 * @method array findByMaincatchingmethod(string $MainCatchingMethod) Return Species objects filtered by the MainCatchingMethod column
 * @method array findByIi(string $II) Return Species objects filtered by the II column
 * @method array findByMseines(int $MSeines) Return Species objects filtered by the MSeines column
 * @method array findByMgillnets(int $MGillnets) Return Species objects filtered by the MGillnets column
 * @method array findByMcastnets(int $MCastnets) Return Species objects filtered by the MCastnets column
 * @method array findByMtraps(int $MTraps) Return Species objects filtered by the MTraps column
 * @method array findByMspears(int $MSpears) Return Species objects filtered by the MSpears column
 * @method array findByMtrawls(int $MTrawls) Return Species objects filtered by the MTrawls column
 * @method array findByMdredges(int $MDredges) Return Species objects filtered by the MDredges column
 * @method array findByMliftnets(int $MLiftnets) Return Species objects filtered by the MLiftnets column
 * @method array findByMhookslines(int $MHooksLines) Return Species objects filtered by the MHooksLines column
 * @method array findByMother(int $MOther) Return Species objects filtered by the MOther column
 * @method array findByUsedforaquaculture(string $UsedforAquaculture) Return Species objects filtered by the UsedforAquaculture column
 * @method array findByLifecycle(string $LifeCycle) Return Species objects filtered by the LifeCycle column
 * @method array findByAquacultureref(int $AquacultureRef) Return Species objects filtered by the AquacultureRef column
 * @method array findByUsedasbait(string $UsedasBait) Return Species objects filtered by the UsedasBait column
 * @method array findByBaitref(int $BaitRef) Return Species objects filtered by the BaitRef column
 * @method array findByAquarium(string $Aquarium) Return Species objects filtered by the Aquarium column
 * @method array findByAquariumfishii(string $AquariumFishII) Return Species objects filtered by the AquariumFishII column
 * @method array findByAquariumref(int $AquariumRef) Return Species objects filtered by the AquariumRef column
 * @method array findByGamefish(int $GameFish) Return Species objects filtered by the GameFish column
 * @method array findByGameref(int $GameRef) Return Species objects filtered by the GameRef column
 * @method array findByDangerous(string $Dangerous) Return Species objects filtered by the Dangerous column
 * @method array findByDangerousref(int $DangerousRef) Return Species objects filtered by the DangerousRef column
 * @method array findByElectrogenic(string $Electrogenic) Return Species objects filtered by the Electrogenic column
 * @method array findByElectroref(int $ElectroRef) Return Species objects filtered by the ElectroRef column
 * @method array findByComplete(string $Complete) Return Species objects filtered by the Complete column
 * @method array findByGoogleimage(int $GoogleImage) Return Species objects filtered by the GoogleImage column
 * @method array findByComments(string $Comments) Return Species objects filtered by the Comments column
 * @method array findByProfile(string $Profile) Return Species objects filtered by the Profile column
 * @method array findByPd50(double $PD50) Return Species objects filtered by the PD50 column
 * @method array findByEntered(int $Entered) Return Species objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Species objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Species objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Species objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Species objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Species objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Species objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSpeciesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSpeciesQuery object.
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
            $modelName = 'Species';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SpeciesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SpeciesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SpeciesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SpeciesQuery) {
            return $criteria;
        }
        $query = new SpeciesQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$Genus, $Species]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Species|Species[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SpeciesPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SpeciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Species A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SpecCode`, `Genus`, `Species`, `SpeciesRefNo`, `Author`, `FBname`, `PicPreferredName`, `PicPreferredNameM`, `PicPreferredNameF`, `PicPreferredNameJ`, `FamCode`, `Subfamily`, `GenCode`, `SubGenCode`, `BodyShapeI`, `Source`, `Remark`, `TaxIssue`, `Fresh`, `Brack`, `Saltwater`, `DemersPelag`, `AnaCat`, `MigratRef`, `DepthRangeShallow`, `DepthRangeDeep`, `DepthRangeRef`, `DepthRangeComShallow`, `DepthRangeComDeep`, `DepthComRef`, `LongevityWild`, `LongevityWildRef`, `LongevityCaptive`, `LongevityCapRef`, `Vulnerability`, `Length`, `LTypeMaxM`, `LengthFemale`, `LTypeMaxF`, `MaxLengthRef`, `CommonLength`, `LTypeComM`, `CommonLengthF`, `LTypeComF`, `CommonLengthRef`, `Weight`, `WeightFemale`, `MaxWeightRef`, `Pic`, `PictureFemale`, `LarvaPic`, `EggPic`, `ImportanceRef`, `Importance`, `PriceCateg`, `PriceReliability`, `Remarks7`, `LandingStatistics`, `Landings`, `MainCatchingMethod`, `II`, `MSeines`, `MGillnets`, `MCastnets`, `MTraps`, `MSpears`, `MTrawls`, `MDredges`, `MLiftnets`, `MHooksLines`, `MOther`, `UsedforAquaculture`, `LifeCycle`, `AquacultureRef`, `UsedasBait`, `BaitRef`, `Aquarium`, `AquariumFishII`, `AquariumRef`, `GameFish`, `GameRef`, `Dangerous`, `DangerousRef`, `Electrogenic`, `ElectroRef`, `Complete`, `GoogleImage`, `Comments`, `Profile`, `PD50`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `species` WHERE `Genus` = :p0 AND `Species` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Species();
            $obj->hydrate($row);
            SpeciesPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Species|Species[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Species[]|mixed the list of results, formatted by the current formatter
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
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SpeciesPeer::GENUS, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SpeciesPeer::SPECIES, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SpeciesPeer::GENUS, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SpeciesPeer::SPECIES, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(SpeciesPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(SpeciesPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the Genus column
     *
     * Example usage:
     * <code>
     * $query->filterByGenus('fooValue');   // WHERE Genus = 'fooValue'
     * $query->filterByGenus('%fooValue%'); // WHERE Genus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByGenus($genus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genus)) {
                $genus = str_replace('*', '%', $genus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::GENUS, $genus, $comparison);
    }

    /**
     * Filter the query on the Species column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecies('fooValue');   // WHERE Species = 'fooValue'
     * $query->filterBySpecies('%fooValue%'); // WHERE Species LIKE '%fooValue%'
     * </code>
     *
     * @param     string $species The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterBySpecies($species = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($species)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $species)) {
                $species = str_replace('*', '%', $species);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the SpeciesRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciesrefno(1234); // WHERE SpeciesRefNo = 1234
     * $query->filterBySpeciesrefno(array(12, 34)); // WHERE SpeciesRefNo IN (12, 34)
     * $query->filterBySpeciesrefno(array('min' => 12)); // WHERE SpeciesRefNo >= 12
     * $query->filterBySpeciesrefno(array('max' => 12)); // WHERE SpeciesRefNo <= 12
     * </code>
     *
     * @param     mixed $speciesrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterBySpeciesrefno($speciesrefno = null, $comparison = null)
    {
        if (is_array($speciesrefno)) {
            $useMinMax = false;
            if (isset($speciesrefno['min'])) {
                $this->addUsingAlias(SpeciesPeer::SPECIESREFNO, $speciesrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speciesrefno['max'])) {
                $this->addUsingAlias(SpeciesPeer::SPECIESREFNO, $speciesrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::SPECIESREFNO, $speciesrefno, $comparison);
    }

    /**
     * Filter the query on the Author column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthor('fooValue');   // WHERE Author = 'fooValue'
     * $query->filterByAuthor('%fooValue%'); // WHERE Author LIKE '%fooValue%'
     * </code>
     *
     * @param     string $author The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByAuthor($author = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($author)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $author)) {
                $author = str_replace('*', '%', $author);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::AUTHOR, $author, $comparison);
    }

    /**
     * Filter the query on the FBname column
     *
     * Example usage:
     * <code>
     * $query->filterByFbname('fooValue');   // WHERE FBname = 'fooValue'
     * $query->filterByFbname('%fooValue%'); // WHERE FBname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fbname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByFbname($fbname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fbname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fbname)) {
                $fbname = str_replace('*', '%', $fbname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::FBNAME, $fbname, $comparison);
    }

    /**
     * Filter the query on the PicPreferredName column
     *
     * Example usage:
     * <code>
     * $query->filterByPicpreferredname('fooValue');   // WHERE PicPreferredName = 'fooValue'
     * $query->filterByPicpreferredname('%fooValue%'); // WHERE PicPreferredName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picpreferredname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByPicpreferredname($picpreferredname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picpreferredname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picpreferredname)) {
                $picpreferredname = str_replace('*', '%', $picpreferredname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::PICPREFERREDNAME, $picpreferredname, $comparison);
    }

    /**
     * Filter the query on the PicPreferredNameM column
     *
     * Example usage:
     * <code>
     * $query->filterByPicpreferrednamem('fooValue');   // WHERE PicPreferredNameM = 'fooValue'
     * $query->filterByPicpreferrednamem('%fooValue%'); // WHERE PicPreferredNameM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picpreferrednamem The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByPicpreferrednamem($picpreferrednamem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picpreferrednamem)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picpreferrednamem)) {
                $picpreferrednamem = str_replace('*', '%', $picpreferrednamem);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::PICPREFERREDNAMEM, $picpreferrednamem, $comparison);
    }

    /**
     * Filter the query on the PicPreferredNameF column
     *
     * Example usage:
     * <code>
     * $query->filterByPicpreferrednamef('fooValue');   // WHERE PicPreferredNameF = 'fooValue'
     * $query->filterByPicpreferrednamef('%fooValue%'); // WHERE PicPreferredNameF LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picpreferrednamef The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByPicpreferrednamef($picpreferrednamef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picpreferrednamef)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picpreferrednamef)) {
                $picpreferrednamef = str_replace('*', '%', $picpreferrednamef);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::PICPREFERREDNAMEF, $picpreferrednamef, $comparison);
    }

    /**
     * Filter the query on the PicPreferredNameJ column
     *
     * Example usage:
     * <code>
     * $query->filterByPicpreferrednamej('fooValue');   // WHERE PicPreferredNameJ = 'fooValue'
     * $query->filterByPicpreferrednamej('%fooValue%'); // WHERE PicPreferredNameJ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picpreferrednamej The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByPicpreferrednamej($picpreferrednamej = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picpreferrednamej)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picpreferrednamej)) {
                $picpreferrednamej = str_replace('*', '%', $picpreferrednamej);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::PICPREFERREDNAMEJ, $picpreferrednamej, $comparison);
    }

    /**
     * Filter the query on the FamCode column
     *
     * Example usage:
     * <code>
     * $query->filterByFamcode(1234); // WHERE FamCode = 1234
     * $query->filterByFamcode(array(12, 34)); // WHERE FamCode IN (12, 34)
     * $query->filterByFamcode(array('min' => 12)); // WHERE FamCode >= 12
     * $query->filterByFamcode(array('max' => 12)); // WHERE FamCode <= 12
     * </code>
     *
     * @param     mixed $famcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(SpeciesPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(SpeciesPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::FAMCODE, $famcode, $comparison);
    }

    /**
     * Filter the query on the Subfamily column
     *
     * Example usage:
     * <code>
     * $query->filterBySubfamily('fooValue');   // WHERE Subfamily = 'fooValue'
     * $query->filterBySubfamily('%fooValue%'); // WHERE Subfamily LIKE '%fooValue%'
     * </code>
     *
     * @param     string $subfamily The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterBySubfamily($subfamily = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($subfamily)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $subfamily)) {
                $subfamily = str_replace('*', '%', $subfamily);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::SUBFAMILY, $subfamily, $comparison);
    }

    /**
     * Filter the query on the GenCode column
     *
     * Example usage:
     * <code>
     * $query->filterByGencode(1234); // WHERE GenCode = 1234
     * $query->filterByGencode(array(12, 34)); // WHERE GenCode IN (12, 34)
     * $query->filterByGencode(array('min' => 12)); // WHERE GenCode >= 12
     * $query->filterByGencode(array('max' => 12)); // WHERE GenCode <= 12
     * </code>
     *
     * @param     mixed $gencode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByGencode($gencode = null, $comparison = null)
    {
        if (is_array($gencode)) {
            $useMinMax = false;
            if (isset($gencode['min'])) {
                $this->addUsingAlias(SpeciesPeer::GENCODE, $gencode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gencode['max'])) {
                $this->addUsingAlias(SpeciesPeer::GENCODE, $gencode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::GENCODE, $gencode, $comparison);
    }

    /**
     * Filter the query on the SubGenCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySubgencode(1234); // WHERE SubGenCode = 1234
     * $query->filterBySubgencode(array(12, 34)); // WHERE SubGenCode IN (12, 34)
     * $query->filterBySubgencode(array('min' => 12)); // WHERE SubGenCode >= 12
     * $query->filterBySubgencode(array('max' => 12)); // WHERE SubGenCode <= 12
     * </code>
     *
     * @param     mixed $subgencode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterBySubgencode($subgencode = null, $comparison = null)
    {
        if (is_array($subgencode)) {
            $useMinMax = false;
            if (isset($subgencode['min'])) {
                $this->addUsingAlias(SpeciesPeer::SUBGENCODE, $subgencode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subgencode['max'])) {
                $this->addUsingAlias(SpeciesPeer::SUBGENCODE, $subgencode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::SUBGENCODE, $subgencode, $comparison);
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
     * @return SpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SpeciesPeer::BODYSHAPEI, $bodyshapei, $comparison);
    }

    /**
     * Filter the query on the Source column
     *
     * Example usage:
     * <code>
     * $query->filterBySource('fooValue');   // WHERE Source = 'fooValue'
     * $query->filterBySource('%fooValue%'); // WHERE Source LIKE '%fooValue%'
     * </code>
     *
     * @param     string $source The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterBySource($source = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($source)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $source)) {
                $source = str_replace('*', '%', $source);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::SOURCE, $source, $comparison);
    }

    /**
     * Filter the query on the Remark column
     *
     * Example usage:
     * <code>
     * $query->filterByRemark('fooValue');   // WHERE Remark = 'fooValue'
     * $query->filterByRemark('%fooValue%'); // WHERE Remark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByRemark($remark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remark)) {
                $remark = str_replace('*', '%', $remark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::REMARK, $remark, $comparison);
    }

    /**
     * Filter the query on the TaxIssue column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxissue(1234); // WHERE TaxIssue = 1234
     * $query->filterByTaxissue(array(12, 34)); // WHERE TaxIssue IN (12, 34)
     * $query->filterByTaxissue(array('min' => 12)); // WHERE TaxIssue >= 12
     * $query->filterByTaxissue(array('max' => 12)); // WHERE TaxIssue <= 12
     * </code>
     *
     * @param     mixed $taxissue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByTaxissue($taxissue = null, $comparison = null)
    {
        if (is_array($taxissue)) {
            $useMinMax = false;
            if (isset($taxissue['min'])) {
                $this->addUsingAlias(SpeciesPeer::TAXISSUE, $taxissue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taxissue['max'])) {
                $this->addUsingAlias(SpeciesPeer::TAXISSUE, $taxissue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::TAXISSUE, $taxissue, $comparison);
    }

    /**
     * Filter the query on the Fresh column
     *
     * Example usage:
     * <code>
     * $query->filterByFresh(1234); // WHERE Fresh = 1234
     * $query->filterByFresh(array(12, 34)); // WHERE Fresh IN (12, 34)
     * $query->filterByFresh(array('min' => 12)); // WHERE Fresh >= 12
     * $query->filterByFresh(array('max' => 12)); // WHERE Fresh <= 12
     * </code>
     *
     * @param     mixed $fresh The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByFresh($fresh = null, $comparison = null)
    {
        if (is_array($fresh)) {
            $useMinMax = false;
            if (isset($fresh['min'])) {
                $this->addUsingAlias(SpeciesPeer::FRESH, $fresh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fresh['max'])) {
                $this->addUsingAlias(SpeciesPeer::FRESH, $fresh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::FRESH, $fresh, $comparison);
    }

    /**
     * Filter the query on the Brack column
     *
     * Example usage:
     * <code>
     * $query->filterByBrack(1234); // WHERE Brack = 1234
     * $query->filterByBrack(array(12, 34)); // WHERE Brack IN (12, 34)
     * $query->filterByBrack(array('min' => 12)); // WHERE Brack >= 12
     * $query->filterByBrack(array('max' => 12)); // WHERE Brack <= 12
     * </code>
     *
     * @param     mixed $brack The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByBrack($brack = null, $comparison = null)
    {
        if (is_array($brack)) {
            $useMinMax = false;
            if (isset($brack['min'])) {
                $this->addUsingAlias(SpeciesPeer::BRACK, $brack['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($brack['max'])) {
                $this->addUsingAlias(SpeciesPeer::BRACK, $brack['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::BRACK, $brack, $comparison);
    }

    /**
     * Filter the query on the Saltwater column
     *
     * Example usage:
     * <code>
     * $query->filterBySaltwater(1234); // WHERE Saltwater = 1234
     * $query->filterBySaltwater(array(12, 34)); // WHERE Saltwater IN (12, 34)
     * $query->filterBySaltwater(array('min' => 12)); // WHERE Saltwater >= 12
     * $query->filterBySaltwater(array('max' => 12)); // WHERE Saltwater <= 12
     * </code>
     *
     * @param     mixed $saltwater The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterBySaltwater($saltwater = null, $comparison = null)
    {
        if (is_array($saltwater)) {
            $useMinMax = false;
            if (isset($saltwater['min'])) {
                $this->addUsingAlias(SpeciesPeer::SALTWATER, $saltwater['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saltwater['max'])) {
                $this->addUsingAlias(SpeciesPeer::SALTWATER, $saltwater['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::SALTWATER, $saltwater, $comparison);
    }

    /**
     * Filter the query on the DemersPelag column
     *
     * Example usage:
     * <code>
     * $query->filterByDemerspelag('fooValue');   // WHERE DemersPelag = 'fooValue'
     * $query->filterByDemerspelag('%fooValue%'); // WHERE DemersPelag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $demerspelag The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByDemerspelag($demerspelag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($demerspelag)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $demerspelag)) {
                $demerspelag = str_replace('*', '%', $demerspelag);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::DEMERSPELAG, $demerspelag, $comparison);
    }

    /**
     * Filter the query on the AnaCat column
     *
     * Example usage:
     * <code>
     * $query->filterByAnacat('fooValue');   // WHERE AnaCat = 'fooValue'
     * $query->filterByAnacat('%fooValue%'); // WHERE AnaCat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $anacat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByAnacat($anacat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($anacat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $anacat)) {
                $anacat = str_replace('*', '%', $anacat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::ANACAT, $anacat, $comparison);
    }

    /**
     * Filter the query on the MigratRef column
     *
     * Example usage:
     * <code>
     * $query->filterByMigratref(1234); // WHERE MigratRef = 1234
     * $query->filterByMigratref(array(12, 34)); // WHERE MigratRef IN (12, 34)
     * $query->filterByMigratref(array('min' => 12)); // WHERE MigratRef >= 12
     * $query->filterByMigratref(array('max' => 12)); // WHERE MigratRef <= 12
     * </code>
     *
     * @param     mixed $migratref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByMigratref($migratref = null, $comparison = null)
    {
        if (is_array($migratref)) {
            $useMinMax = false;
            if (isset($migratref['min'])) {
                $this->addUsingAlias(SpeciesPeer::MIGRATREF, $migratref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($migratref['max'])) {
                $this->addUsingAlias(SpeciesPeer::MIGRATREF, $migratref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::MIGRATREF, $migratref, $comparison);
    }

    /**
     * Filter the query on the DepthRangeShallow column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthrangeshallow(1234); // WHERE DepthRangeShallow = 1234
     * $query->filterByDepthrangeshallow(array(12, 34)); // WHERE DepthRangeShallow IN (12, 34)
     * $query->filterByDepthrangeshallow(array('min' => 12)); // WHERE DepthRangeShallow >= 12
     * $query->filterByDepthrangeshallow(array('max' => 12)); // WHERE DepthRangeShallow <= 12
     * </code>
     *
     * @param     mixed $depthrangeshallow The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByDepthrangeshallow($depthrangeshallow = null, $comparison = null)
    {
        if (is_array($depthrangeshallow)) {
            $useMinMax = false;
            if (isset($depthrangeshallow['min'])) {
                $this->addUsingAlias(SpeciesPeer::DEPTHRANGESHALLOW, $depthrangeshallow['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthrangeshallow['max'])) {
                $this->addUsingAlias(SpeciesPeer::DEPTHRANGESHALLOW, $depthrangeshallow['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::DEPTHRANGESHALLOW, $depthrangeshallow, $comparison);
    }

    /**
     * Filter the query on the DepthRangeDeep column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthrangedeep(1234); // WHERE DepthRangeDeep = 1234
     * $query->filterByDepthrangedeep(array(12, 34)); // WHERE DepthRangeDeep IN (12, 34)
     * $query->filterByDepthrangedeep(array('min' => 12)); // WHERE DepthRangeDeep >= 12
     * $query->filterByDepthrangedeep(array('max' => 12)); // WHERE DepthRangeDeep <= 12
     * </code>
     *
     * @param     mixed $depthrangedeep The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByDepthrangedeep($depthrangedeep = null, $comparison = null)
    {
        if (is_array($depthrangedeep)) {
            $useMinMax = false;
            if (isset($depthrangedeep['min'])) {
                $this->addUsingAlias(SpeciesPeer::DEPTHRANGEDEEP, $depthrangedeep['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthrangedeep['max'])) {
                $this->addUsingAlias(SpeciesPeer::DEPTHRANGEDEEP, $depthrangedeep['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::DEPTHRANGEDEEP, $depthrangedeep, $comparison);
    }

    /**
     * Filter the query on the DepthRangeRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthrangeref(1234); // WHERE DepthRangeRef = 1234
     * $query->filterByDepthrangeref(array(12, 34)); // WHERE DepthRangeRef IN (12, 34)
     * $query->filterByDepthrangeref(array('min' => 12)); // WHERE DepthRangeRef >= 12
     * $query->filterByDepthrangeref(array('max' => 12)); // WHERE DepthRangeRef <= 12
     * </code>
     *
     * @param     mixed $depthrangeref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByDepthrangeref($depthrangeref = null, $comparison = null)
    {
        if (is_array($depthrangeref)) {
            $useMinMax = false;
            if (isset($depthrangeref['min'])) {
                $this->addUsingAlias(SpeciesPeer::DEPTHRANGEREF, $depthrangeref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthrangeref['max'])) {
                $this->addUsingAlias(SpeciesPeer::DEPTHRANGEREF, $depthrangeref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::DEPTHRANGEREF, $depthrangeref, $comparison);
    }

    /**
     * Filter the query on the DepthRangeComShallow column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthrangecomshallow(1234); // WHERE DepthRangeComShallow = 1234
     * $query->filterByDepthrangecomshallow(array(12, 34)); // WHERE DepthRangeComShallow IN (12, 34)
     * $query->filterByDepthrangecomshallow(array('min' => 12)); // WHERE DepthRangeComShallow >= 12
     * $query->filterByDepthrangecomshallow(array('max' => 12)); // WHERE DepthRangeComShallow <= 12
     * </code>
     *
     * @param     mixed $depthrangecomshallow The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByDepthrangecomshallow($depthrangecomshallow = null, $comparison = null)
    {
        if (is_array($depthrangecomshallow)) {
            $useMinMax = false;
            if (isset($depthrangecomshallow['min'])) {
                $this->addUsingAlias(SpeciesPeer::DEPTHRANGECOMSHALLOW, $depthrangecomshallow['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthrangecomshallow['max'])) {
                $this->addUsingAlias(SpeciesPeer::DEPTHRANGECOMSHALLOW, $depthrangecomshallow['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::DEPTHRANGECOMSHALLOW, $depthrangecomshallow, $comparison);
    }

    /**
     * Filter the query on the DepthRangeComDeep column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthrangecomdeep(1234); // WHERE DepthRangeComDeep = 1234
     * $query->filterByDepthrangecomdeep(array(12, 34)); // WHERE DepthRangeComDeep IN (12, 34)
     * $query->filterByDepthrangecomdeep(array('min' => 12)); // WHERE DepthRangeComDeep >= 12
     * $query->filterByDepthrangecomdeep(array('max' => 12)); // WHERE DepthRangeComDeep <= 12
     * </code>
     *
     * @param     mixed $depthrangecomdeep The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByDepthrangecomdeep($depthrangecomdeep = null, $comparison = null)
    {
        if (is_array($depthrangecomdeep)) {
            $useMinMax = false;
            if (isset($depthrangecomdeep['min'])) {
                $this->addUsingAlias(SpeciesPeer::DEPTHRANGECOMDEEP, $depthrangecomdeep['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthrangecomdeep['max'])) {
                $this->addUsingAlias(SpeciesPeer::DEPTHRANGECOMDEEP, $depthrangecomdeep['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::DEPTHRANGECOMDEEP, $depthrangecomdeep, $comparison);
    }

    /**
     * Filter the query on the DepthComRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthcomref(1234); // WHERE DepthComRef = 1234
     * $query->filterByDepthcomref(array(12, 34)); // WHERE DepthComRef IN (12, 34)
     * $query->filterByDepthcomref(array('min' => 12)); // WHERE DepthComRef >= 12
     * $query->filterByDepthcomref(array('max' => 12)); // WHERE DepthComRef <= 12
     * </code>
     *
     * @param     mixed $depthcomref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByDepthcomref($depthcomref = null, $comparison = null)
    {
        if (is_array($depthcomref)) {
            $useMinMax = false;
            if (isset($depthcomref['min'])) {
                $this->addUsingAlias(SpeciesPeer::DEPTHCOMREF, $depthcomref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthcomref['max'])) {
                $this->addUsingAlias(SpeciesPeer::DEPTHCOMREF, $depthcomref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::DEPTHCOMREF, $depthcomref, $comparison);
    }

    /**
     * Filter the query on the LongevityWild column
     *
     * Example usage:
     * <code>
     * $query->filterByLongevitywild(1234); // WHERE LongevityWild = 1234
     * $query->filterByLongevitywild(array(12, 34)); // WHERE LongevityWild IN (12, 34)
     * $query->filterByLongevitywild(array('min' => 12)); // WHERE LongevityWild >= 12
     * $query->filterByLongevitywild(array('max' => 12)); // WHERE LongevityWild <= 12
     * </code>
     *
     * @param     mixed $longevitywild The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByLongevitywild($longevitywild = null, $comparison = null)
    {
        if (is_array($longevitywild)) {
            $useMinMax = false;
            if (isset($longevitywild['min'])) {
                $this->addUsingAlias(SpeciesPeer::LONGEVITYWILD, $longevitywild['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longevitywild['max'])) {
                $this->addUsingAlias(SpeciesPeer::LONGEVITYWILD, $longevitywild['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::LONGEVITYWILD, $longevitywild, $comparison);
    }

    /**
     * Filter the query on the LongevityWildRef column
     *
     * Example usage:
     * <code>
     * $query->filterByLongevitywildref(1234); // WHERE LongevityWildRef = 1234
     * $query->filterByLongevitywildref(array(12, 34)); // WHERE LongevityWildRef IN (12, 34)
     * $query->filterByLongevitywildref(array('min' => 12)); // WHERE LongevityWildRef >= 12
     * $query->filterByLongevitywildref(array('max' => 12)); // WHERE LongevityWildRef <= 12
     * </code>
     *
     * @param     mixed $longevitywildref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByLongevitywildref($longevitywildref = null, $comparison = null)
    {
        if (is_array($longevitywildref)) {
            $useMinMax = false;
            if (isset($longevitywildref['min'])) {
                $this->addUsingAlias(SpeciesPeer::LONGEVITYWILDREF, $longevitywildref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longevitywildref['max'])) {
                $this->addUsingAlias(SpeciesPeer::LONGEVITYWILDREF, $longevitywildref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::LONGEVITYWILDREF, $longevitywildref, $comparison);
    }

    /**
     * Filter the query on the LongevityCaptive column
     *
     * Example usage:
     * <code>
     * $query->filterByLongevitycaptive(1234); // WHERE LongevityCaptive = 1234
     * $query->filterByLongevitycaptive(array(12, 34)); // WHERE LongevityCaptive IN (12, 34)
     * $query->filterByLongevitycaptive(array('min' => 12)); // WHERE LongevityCaptive >= 12
     * $query->filterByLongevitycaptive(array('max' => 12)); // WHERE LongevityCaptive <= 12
     * </code>
     *
     * @param     mixed $longevitycaptive The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByLongevitycaptive($longevitycaptive = null, $comparison = null)
    {
        if (is_array($longevitycaptive)) {
            $useMinMax = false;
            if (isset($longevitycaptive['min'])) {
                $this->addUsingAlias(SpeciesPeer::LONGEVITYCAPTIVE, $longevitycaptive['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longevitycaptive['max'])) {
                $this->addUsingAlias(SpeciesPeer::LONGEVITYCAPTIVE, $longevitycaptive['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::LONGEVITYCAPTIVE, $longevitycaptive, $comparison);
    }

    /**
     * Filter the query on the LongevityCapRef column
     *
     * Example usage:
     * <code>
     * $query->filterByLongevitycapref(1234); // WHERE LongevityCapRef = 1234
     * $query->filterByLongevitycapref(array(12, 34)); // WHERE LongevityCapRef IN (12, 34)
     * $query->filterByLongevitycapref(array('min' => 12)); // WHERE LongevityCapRef >= 12
     * $query->filterByLongevitycapref(array('max' => 12)); // WHERE LongevityCapRef <= 12
     * </code>
     *
     * @param     mixed $longevitycapref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByLongevitycapref($longevitycapref = null, $comparison = null)
    {
        if (is_array($longevitycapref)) {
            $useMinMax = false;
            if (isset($longevitycapref['min'])) {
                $this->addUsingAlias(SpeciesPeer::LONGEVITYCAPREF, $longevitycapref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longevitycapref['max'])) {
                $this->addUsingAlias(SpeciesPeer::LONGEVITYCAPREF, $longevitycapref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::LONGEVITYCAPREF, $longevitycapref, $comparison);
    }

    /**
     * Filter the query on the Vulnerability column
     *
     * Example usage:
     * <code>
     * $query->filterByVulnerability(1234); // WHERE Vulnerability = 1234
     * $query->filterByVulnerability(array(12, 34)); // WHERE Vulnerability IN (12, 34)
     * $query->filterByVulnerability(array('min' => 12)); // WHERE Vulnerability >= 12
     * $query->filterByVulnerability(array('max' => 12)); // WHERE Vulnerability <= 12
     * </code>
     *
     * @param     mixed $vulnerability The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByVulnerability($vulnerability = null, $comparison = null)
    {
        if (is_array($vulnerability)) {
            $useMinMax = false;
            if (isset($vulnerability['min'])) {
                $this->addUsingAlias(SpeciesPeer::VULNERABILITY, $vulnerability['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vulnerability['max'])) {
                $this->addUsingAlias(SpeciesPeer::VULNERABILITY, $vulnerability['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::VULNERABILITY, $vulnerability, $comparison);
    }

    /**
     * Filter the query on the Length column
     *
     * Example usage:
     * <code>
     * $query->filterByLength(1234); // WHERE Length = 1234
     * $query->filterByLength(array(12, 34)); // WHERE Length IN (12, 34)
     * $query->filterByLength(array('min' => 12)); // WHERE Length >= 12
     * $query->filterByLength(array('max' => 12)); // WHERE Length <= 12
     * </code>
     *
     * @param     mixed $length The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByLength($length = null, $comparison = null)
    {
        if (is_array($length)) {
            $useMinMax = false;
            if (isset($length['min'])) {
                $this->addUsingAlias(SpeciesPeer::LENGTH, $length['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($length['max'])) {
                $this->addUsingAlias(SpeciesPeer::LENGTH, $length['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::LENGTH, $length, $comparison);
    }

    /**
     * Filter the query on the LTypeMaxM column
     *
     * Example usage:
     * <code>
     * $query->filterByLtypemaxm('fooValue');   // WHERE LTypeMaxM = 'fooValue'
     * $query->filterByLtypemaxm('%fooValue%'); // WHERE LTypeMaxM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ltypemaxm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByLtypemaxm($ltypemaxm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ltypemaxm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ltypemaxm)) {
                $ltypemaxm = str_replace('*', '%', $ltypemaxm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::LTYPEMAXM, $ltypemaxm, $comparison);
    }

    /**
     * Filter the query on the LengthFemale column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthfemale(1234); // WHERE LengthFemale = 1234
     * $query->filterByLengthfemale(array(12, 34)); // WHERE LengthFemale IN (12, 34)
     * $query->filterByLengthfemale(array('min' => 12)); // WHERE LengthFemale >= 12
     * $query->filterByLengthfemale(array('max' => 12)); // WHERE LengthFemale <= 12
     * </code>
     *
     * @param     mixed $lengthfemale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByLengthfemale($lengthfemale = null, $comparison = null)
    {
        if (is_array($lengthfemale)) {
            $useMinMax = false;
            if (isset($lengthfemale['min'])) {
                $this->addUsingAlias(SpeciesPeer::LENGTHFEMALE, $lengthfemale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthfemale['max'])) {
                $this->addUsingAlias(SpeciesPeer::LENGTHFEMALE, $lengthfemale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::LENGTHFEMALE, $lengthfemale, $comparison);
    }

    /**
     * Filter the query on the LTypeMaxF column
     *
     * Example usage:
     * <code>
     * $query->filterByLtypemaxf('fooValue');   // WHERE LTypeMaxF = 'fooValue'
     * $query->filterByLtypemaxf('%fooValue%'); // WHERE LTypeMaxF LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ltypemaxf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByLtypemaxf($ltypemaxf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ltypemaxf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ltypemaxf)) {
                $ltypemaxf = str_replace('*', '%', $ltypemaxf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::LTYPEMAXF, $ltypemaxf, $comparison);
    }

    /**
     * Filter the query on the MaxLengthRef column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxlengthref(1234); // WHERE MaxLengthRef = 1234
     * $query->filterByMaxlengthref(array(12, 34)); // WHERE MaxLengthRef IN (12, 34)
     * $query->filterByMaxlengthref(array('min' => 12)); // WHERE MaxLengthRef >= 12
     * $query->filterByMaxlengthref(array('max' => 12)); // WHERE MaxLengthRef <= 12
     * </code>
     *
     * @param     mixed $maxlengthref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByMaxlengthref($maxlengthref = null, $comparison = null)
    {
        if (is_array($maxlengthref)) {
            $useMinMax = false;
            if (isset($maxlengthref['min'])) {
                $this->addUsingAlias(SpeciesPeer::MAXLENGTHREF, $maxlengthref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxlengthref['max'])) {
                $this->addUsingAlias(SpeciesPeer::MAXLENGTHREF, $maxlengthref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::MAXLENGTHREF, $maxlengthref, $comparison);
    }

    /**
     * Filter the query on the CommonLength column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonlength(1234); // WHERE CommonLength = 1234
     * $query->filterByCommonlength(array(12, 34)); // WHERE CommonLength IN (12, 34)
     * $query->filterByCommonlength(array('min' => 12)); // WHERE CommonLength >= 12
     * $query->filterByCommonlength(array('max' => 12)); // WHERE CommonLength <= 12
     * </code>
     *
     * @param     mixed $commonlength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByCommonlength($commonlength = null, $comparison = null)
    {
        if (is_array($commonlength)) {
            $useMinMax = false;
            if (isset($commonlength['min'])) {
                $this->addUsingAlias(SpeciesPeer::COMMONLENGTH, $commonlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commonlength['max'])) {
                $this->addUsingAlias(SpeciesPeer::COMMONLENGTH, $commonlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::COMMONLENGTH, $commonlength, $comparison);
    }

    /**
     * Filter the query on the LTypeComM column
     *
     * Example usage:
     * <code>
     * $query->filterByLtypecomm('fooValue');   // WHERE LTypeComM = 'fooValue'
     * $query->filterByLtypecomm('%fooValue%'); // WHERE LTypeComM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ltypecomm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByLtypecomm($ltypecomm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ltypecomm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ltypecomm)) {
                $ltypecomm = str_replace('*', '%', $ltypecomm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::LTYPECOMM, $ltypecomm, $comparison);
    }

    /**
     * Filter the query on the CommonLengthF column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonlengthf(1234); // WHERE CommonLengthF = 1234
     * $query->filterByCommonlengthf(array(12, 34)); // WHERE CommonLengthF IN (12, 34)
     * $query->filterByCommonlengthf(array('min' => 12)); // WHERE CommonLengthF >= 12
     * $query->filterByCommonlengthf(array('max' => 12)); // WHERE CommonLengthF <= 12
     * </code>
     *
     * @param     mixed $commonlengthf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByCommonlengthf($commonlengthf = null, $comparison = null)
    {
        if (is_array($commonlengthf)) {
            $useMinMax = false;
            if (isset($commonlengthf['min'])) {
                $this->addUsingAlias(SpeciesPeer::COMMONLENGTHF, $commonlengthf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commonlengthf['max'])) {
                $this->addUsingAlias(SpeciesPeer::COMMONLENGTHF, $commonlengthf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::COMMONLENGTHF, $commonlengthf, $comparison);
    }

    /**
     * Filter the query on the LTypeComF column
     *
     * Example usage:
     * <code>
     * $query->filterByLtypecomf('fooValue');   // WHERE LTypeComF = 'fooValue'
     * $query->filterByLtypecomf('%fooValue%'); // WHERE LTypeComF LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ltypecomf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByLtypecomf($ltypecomf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ltypecomf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ltypecomf)) {
                $ltypecomf = str_replace('*', '%', $ltypecomf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::LTYPECOMF, $ltypecomf, $comparison);
    }

    /**
     * Filter the query on the CommonLengthRef column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonlengthref(1234); // WHERE CommonLengthRef = 1234
     * $query->filterByCommonlengthref(array(12, 34)); // WHERE CommonLengthRef IN (12, 34)
     * $query->filterByCommonlengthref(array('min' => 12)); // WHERE CommonLengthRef >= 12
     * $query->filterByCommonlengthref(array('max' => 12)); // WHERE CommonLengthRef <= 12
     * </code>
     *
     * @param     mixed $commonlengthref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByCommonlengthref($commonlengthref = null, $comparison = null)
    {
        if (is_array($commonlengthref)) {
            $useMinMax = false;
            if (isset($commonlengthref['min'])) {
                $this->addUsingAlias(SpeciesPeer::COMMONLENGTHREF, $commonlengthref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commonlengthref['max'])) {
                $this->addUsingAlias(SpeciesPeer::COMMONLENGTHREF, $commonlengthref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::COMMONLENGTHREF, $commonlengthref, $comparison);
    }

    /**
     * Filter the query on the Weight column
     *
     * Example usage:
     * <code>
     * $query->filterByWeight(1234); // WHERE Weight = 1234
     * $query->filterByWeight(array(12, 34)); // WHERE Weight IN (12, 34)
     * $query->filterByWeight(array('min' => 12)); // WHERE Weight >= 12
     * $query->filterByWeight(array('max' => 12)); // WHERE Weight <= 12
     * </code>
     *
     * @param     mixed $weight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByWeight($weight = null, $comparison = null)
    {
        if (is_array($weight)) {
            $useMinMax = false;
            if (isset($weight['min'])) {
                $this->addUsingAlias(SpeciesPeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weight['max'])) {
                $this->addUsingAlias(SpeciesPeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::WEIGHT, $weight, $comparison);
    }

    /**
     * Filter the query on the WeightFemale column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightfemale(1234); // WHERE WeightFemale = 1234
     * $query->filterByWeightfemale(array(12, 34)); // WHERE WeightFemale IN (12, 34)
     * $query->filterByWeightfemale(array('min' => 12)); // WHERE WeightFemale >= 12
     * $query->filterByWeightfemale(array('max' => 12)); // WHERE WeightFemale <= 12
     * </code>
     *
     * @param     mixed $weightfemale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByWeightfemale($weightfemale = null, $comparison = null)
    {
        if (is_array($weightfemale)) {
            $useMinMax = false;
            if (isset($weightfemale['min'])) {
                $this->addUsingAlias(SpeciesPeer::WEIGHTFEMALE, $weightfemale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightfemale['max'])) {
                $this->addUsingAlias(SpeciesPeer::WEIGHTFEMALE, $weightfemale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::WEIGHTFEMALE, $weightfemale, $comparison);
    }

    /**
     * Filter the query on the MaxWeightRef column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxweightref(1234); // WHERE MaxWeightRef = 1234
     * $query->filterByMaxweightref(array(12, 34)); // WHERE MaxWeightRef IN (12, 34)
     * $query->filterByMaxweightref(array('min' => 12)); // WHERE MaxWeightRef >= 12
     * $query->filterByMaxweightref(array('max' => 12)); // WHERE MaxWeightRef <= 12
     * </code>
     *
     * @param     mixed $maxweightref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByMaxweightref($maxweightref = null, $comparison = null)
    {
        if (is_array($maxweightref)) {
            $useMinMax = false;
            if (isset($maxweightref['min'])) {
                $this->addUsingAlias(SpeciesPeer::MAXWEIGHTREF, $maxweightref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxweightref['max'])) {
                $this->addUsingAlias(SpeciesPeer::MAXWEIGHTREF, $maxweightref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::MAXWEIGHTREF, $maxweightref, $comparison);
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
     * @return SpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SpeciesPeer::PIC, $pic, $comparison);
    }

    /**
     * Filter the query on the PictureFemale column
     *
     * Example usage:
     * <code>
     * $query->filterByPicturefemale('fooValue');   // WHERE PictureFemale = 'fooValue'
     * $query->filterByPicturefemale('%fooValue%'); // WHERE PictureFemale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $picturefemale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByPicturefemale($picturefemale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($picturefemale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $picturefemale)) {
                $picturefemale = str_replace('*', '%', $picturefemale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::PICTUREFEMALE, $picturefemale, $comparison);
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
     * @return SpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SpeciesPeer::LARVAPIC, $larvapic, $comparison);
    }

    /**
     * Filter the query on the EggPic column
     *
     * Example usage:
     * <code>
     * $query->filterByEggpic('fooValue');   // WHERE EggPic = 'fooValue'
     * $query->filterByEggpic('%fooValue%'); // WHERE EggPic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eggpic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByEggpic($eggpic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eggpic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eggpic)) {
                $eggpic = str_replace('*', '%', $eggpic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::EGGPIC, $eggpic, $comparison);
    }

    /**
     * Filter the query on the ImportanceRef column
     *
     * Example usage:
     * <code>
     * $query->filterByImportanceref(1234); // WHERE ImportanceRef = 1234
     * $query->filterByImportanceref(array(12, 34)); // WHERE ImportanceRef IN (12, 34)
     * $query->filterByImportanceref(array('min' => 12)); // WHERE ImportanceRef >= 12
     * $query->filterByImportanceref(array('max' => 12)); // WHERE ImportanceRef <= 12
     * </code>
     *
     * @param     mixed $importanceref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByImportanceref($importanceref = null, $comparison = null)
    {
        if (is_array($importanceref)) {
            $useMinMax = false;
            if (isset($importanceref['min'])) {
                $this->addUsingAlias(SpeciesPeer::IMPORTANCEREF, $importanceref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($importanceref['max'])) {
                $this->addUsingAlias(SpeciesPeer::IMPORTANCEREF, $importanceref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::IMPORTANCEREF, $importanceref, $comparison);
    }

    /**
     * Filter the query on the Importance column
     *
     * Example usage:
     * <code>
     * $query->filterByImportance('fooValue');   // WHERE Importance = 'fooValue'
     * $query->filterByImportance('%fooValue%'); // WHERE Importance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $importance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByImportance($importance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($importance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $importance)) {
                $importance = str_replace('*', '%', $importance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::IMPORTANCE, $importance, $comparison);
    }

    /**
     * Filter the query on the PriceCateg column
     *
     * Example usage:
     * <code>
     * $query->filterByPricecateg('fooValue');   // WHERE PriceCateg = 'fooValue'
     * $query->filterByPricecateg('%fooValue%'); // WHERE PriceCateg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pricecateg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByPricecateg($pricecateg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pricecateg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pricecateg)) {
                $pricecateg = str_replace('*', '%', $pricecateg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::PRICECATEG, $pricecateg, $comparison);
    }

    /**
     * Filter the query on the PriceReliability column
     *
     * Example usage:
     * <code>
     * $query->filterByPricereliability('fooValue');   // WHERE PriceReliability = 'fooValue'
     * $query->filterByPricereliability('%fooValue%'); // WHERE PriceReliability LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pricereliability The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByPricereliability($pricereliability = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pricereliability)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pricereliability)) {
                $pricereliability = str_replace('*', '%', $pricereliability);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::PRICERELIABILITY, $pricereliability, $comparison);
    }

    /**
     * Filter the query on the Remarks7 column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarks7('fooValue');   // WHERE Remarks7 = 'fooValue'
     * $query->filterByRemarks7('%fooValue%'); // WHERE Remarks7 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarks7 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByRemarks7($remarks7 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks7)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarks7)) {
                $remarks7 = str_replace('*', '%', $remarks7);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::REMARKS7, $remarks7, $comparison);
    }

    /**
     * Filter the query on the LandingStatistics column
     *
     * Example usage:
     * <code>
     * $query->filterByLandingstatistics('fooValue');   // WHERE LandingStatistics = 'fooValue'
     * $query->filterByLandingstatistics('%fooValue%'); // WHERE LandingStatistics LIKE '%fooValue%'
     * </code>
     *
     * @param     string $landingstatistics The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByLandingstatistics($landingstatistics = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($landingstatistics)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $landingstatistics)) {
                $landingstatistics = str_replace('*', '%', $landingstatistics);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::LANDINGSTATISTICS, $landingstatistics, $comparison);
    }

    /**
     * Filter the query on the Landings column
     *
     * Example usage:
     * <code>
     * $query->filterByLandings('fooValue');   // WHERE Landings = 'fooValue'
     * $query->filterByLandings('%fooValue%'); // WHERE Landings LIKE '%fooValue%'
     * </code>
     *
     * @param     string $landings The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByLandings($landings = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($landings)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $landings)) {
                $landings = str_replace('*', '%', $landings);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::LANDINGS, $landings, $comparison);
    }

    /**
     * Filter the query on the MainCatchingMethod column
     *
     * Example usage:
     * <code>
     * $query->filterByMaincatchingmethod('fooValue');   // WHERE MainCatchingMethod = 'fooValue'
     * $query->filterByMaincatchingmethod('%fooValue%'); // WHERE MainCatchingMethod LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maincatchingmethod The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByMaincatchingmethod($maincatchingmethod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maincatchingmethod)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $maincatchingmethod)) {
                $maincatchingmethod = str_replace('*', '%', $maincatchingmethod);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::MAINCATCHINGMETHOD, $maincatchingmethod, $comparison);
    }

    /**
     * Filter the query on the II column
     *
     * Example usage:
     * <code>
     * $query->filterByIi('fooValue');   // WHERE II = 'fooValue'
     * $query->filterByIi('%fooValue%'); // WHERE II LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByIi($ii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ii)) {
                $ii = str_replace('*', '%', $ii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::II, $ii, $comparison);
    }

    /**
     * Filter the query on the MSeines column
     *
     * Example usage:
     * <code>
     * $query->filterByMseines(1234); // WHERE MSeines = 1234
     * $query->filterByMseines(array(12, 34)); // WHERE MSeines IN (12, 34)
     * $query->filterByMseines(array('min' => 12)); // WHERE MSeines >= 12
     * $query->filterByMseines(array('max' => 12)); // WHERE MSeines <= 12
     * </code>
     *
     * @param     mixed $mseines The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByMseines($mseines = null, $comparison = null)
    {
        if (is_array($mseines)) {
            $useMinMax = false;
            if (isset($mseines['min'])) {
                $this->addUsingAlias(SpeciesPeer::MSEINES, $mseines['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mseines['max'])) {
                $this->addUsingAlias(SpeciesPeer::MSEINES, $mseines['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::MSEINES, $mseines, $comparison);
    }

    /**
     * Filter the query on the MGillnets column
     *
     * Example usage:
     * <code>
     * $query->filterByMgillnets(1234); // WHERE MGillnets = 1234
     * $query->filterByMgillnets(array(12, 34)); // WHERE MGillnets IN (12, 34)
     * $query->filterByMgillnets(array('min' => 12)); // WHERE MGillnets >= 12
     * $query->filterByMgillnets(array('max' => 12)); // WHERE MGillnets <= 12
     * </code>
     *
     * @param     mixed $mgillnets The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByMgillnets($mgillnets = null, $comparison = null)
    {
        if (is_array($mgillnets)) {
            $useMinMax = false;
            if (isset($mgillnets['min'])) {
                $this->addUsingAlias(SpeciesPeer::MGILLNETS, $mgillnets['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mgillnets['max'])) {
                $this->addUsingAlias(SpeciesPeer::MGILLNETS, $mgillnets['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::MGILLNETS, $mgillnets, $comparison);
    }

    /**
     * Filter the query on the MCastnets column
     *
     * Example usage:
     * <code>
     * $query->filterByMcastnets(1234); // WHERE MCastnets = 1234
     * $query->filterByMcastnets(array(12, 34)); // WHERE MCastnets IN (12, 34)
     * $query->filterByMcastnets(array('min' => 12)); // WHERE MCastnets >= 12
     * $query->filterByMcastnets(array('max' => 12)); // WHERE MCastnets <= 12
     * </code>
     *
     * @param     mixed $mcastnets The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByMcastnets($mcastnets = null, $comparison = null)
    {
        if (is_array($mcastnets)) {
            $useMinMax = false;
            if (isset($mcastnets['min'])) {
                $this->addUsingAlias(SpeciesPeer::MCASTNETS, $mcastnets['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mcastnets['max'])) {
                $this->addUsingAlias(SpeciesPeer::MCASTNETS, $mcastnets['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::MCASTNETS, $mcastnets, $comparison);
    }

    /**
     * Filter the query on the MTraps column
     *
     * Example usage:
     * <code>
     * $query->filterByMtraps(1234); // WHERE MTraps = 1234
     * $query->filterByMtraps(array(12, 34)); // WHERE MTraps IN (12, 34)
     * $query->filterByMtraps(array('min' => 12)); // WHERE MTraps >= 12
     * $query->filterByMtraps(array('max' => 12)); // WHERE MTraps <= 12
     * </code>
     *
     * @param     mixed $mtraps The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByMtraps($mtraps = null, $comparison = null)
    {
        if (is_array($mtraps)) {
            $useMinMax = false;
            if (isset($mtraps['min'])) {
                $this->addUsingAlias(SpeciesPeer::MTRAPS, $mtraps['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mtraps['max'])) {
                $this->addUsingAlias(SpeciesPeer::MTRAPS, $mtraps['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::MTRAPS, $mtraps, $comparison);
    }

    /**
     * Filter the query on the MSpears column
     *
     * Example usage:
     * <code>
     * $query->filterByMspears(1234); // WHERE MSpears = 1234
     * $query->filterByMspears(array(12, 34)); // WHERE MSpears IN (12, 34)
     * $query->filterByMspears(array('min' => 12)); // WHERE MSpears >= 12
     * $query->filterByMspears(array('max' => 12)); // WHERE MSpears <= 12
     * </code>
     *
     * @param     mixed $mspears The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByMspears($mspears = null, $comparison = null)
    {
        if (is_array($mspears)) {
            $useMinMax = false;
            if (isset($mspears['min'])) {
                $this->addUsingAlias(SpeciesPeer::MSPEARS, $mspears['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mspears['max'])) {
                $this->addUsingAlias(SpeciesPeer::MSPEARS, $mspears['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::MSPEARS, $mspears, $comparison);
    }

    /**
     * Filter the query on the MTrawls column
     *
     * Example usage:
     * <code>
     * $query->filterByMtrawls(1234); // WHERE MTrawls = 1234
     * $query->filterByMtrawls(array(12, 34)); // WHERE MTrawls IN (12, 34)
     * $query->filterByMtrawls(array('min' => 12)); // WHERE MTrawls >= 12
     * $query->filterByMtrawls(array('max' => 12)); // WHERE MTrawls <= 12
     * </code>
     *
     * @param     mixed $mtrawls The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByMtrawls($mtrawls = null, $comparison = null)
    {
        if (is_array($mtrawls)) {
            $useMinMax = false;
            if (isset($mtrawls['min'])) {
                $this->addUsingAlias(SpeciesPeer::MTRAWLS, $mtrawls['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mtrawls['max'])) {
                $this->addUsingAlias(SpeciesPeer::MTRAWLS, $mtrawls['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::MTRAWLS, $mtrawls, $comparison);
    }

    /**
     * Filter the query on the MDredges column
     *
     * Example usage:
     * <code>
     * $query->filterByMdredges(1234); // WHERE MDredges = 1234
     * $query->filterByMdredges(array(12, 34)); // WHERE MDredges IN (12, 34)
     * $query->filterByMdredges(array('min' => 12)); // WHERE MDredges >= 12
     * $query->filterByMdredges(array('max' => 12)); // WHERE MDredges <= 12
     * </code>
     *
     * @param     mixed $mdredges The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByMdredges($mdredges = null, $comparison = null)
    {
        if (is_array($mdredges)) {
            $useMinMax = false;
            if (isset($mdredges['min'])) {
                $this->addUsingAlias(SpeciesPeer::MDREDGES, $mdredges['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mdredges['max'])) {
                $this->addUsingAlias(SpeciesPeer::MDREDGES, $mdredges['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::MDREDGES, $mdredges, $comparison);
    }

    /**
     * Filter the query on the MLiftnets column
     *
     * Example usage:
     * <code>
     * $query->filterByMliftnets(1234); // WHERE MLiftnets = 1234
     * $query->filterByMliftnets(array(12, 34)); // WHERE MLiftnets IN (12, 34)
     * $query->filterByMliftnets(array('min' => 12)); // WHERE MLiftnets >= 12
     * $query->filterByMliftnets(array('max' => 12)); // WHERE MLiftnets <= 12
     * </code>
     *
     * @param     mixed $mliftnets The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByMliftnets($mliftnets = null, $comparison = null)
    {
        if (is_array($mliftnets)) {
            $useMinMax = false;
            if (isset($mliftnets['min'])) {
                $this->addUsingAlias(SpeciesPeer::MLIFTNETS, $mliftnets['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mliftnets['max'])) {
                $this->addUsingAlias(SpeciesPeer::MLIFTNETS, $mliftnets['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::MLIFTNETS, $mliftnets, $comparison);
    }

    /**
     * Filter the query on the MHooksLines column
     *
     * Example usage:
     * <code>
     * $query->filterByMhookslines(1234); // WHERE MHooksLines = 1234
     * $query->filterByMhookslines(array(12, 34)); // WHERE MHooksLines IN (12, 34)
     * $query->filterByMhookslines(array('min' => 12)); // WHERE MHooksLines >= 12
     * $query->filterByMhookslines(array('max' => 12)); // WHERE MHooksLines <= 12
     * </code>
     *
     * @param     mixed $mhookslines The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByMhookslines($mhookslines = null, $comparison = null)
    {
        if (is_array($mhookslines)) {
            $useMinMax = false;
            if (isset($mhookslines['min'])) {
                $this->addUsingAlias(SpeciesPeer::MHOOKSLINES, $mhookslines['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mhookslines['max'])) {
                $this->addUsingAlias(SpeciesPeer::MHOOKSLINES, $mhookslines['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::MHOOKSLINES, $mhookslines, $comparison);
    }

    /**
     * Filter the query on the MOther column
     *
     * Example usage:
     * <code>
     * $query->filterByMother(1234); // WHERE MOther = 1234
     * $query->filterByMother(array(12, 34)); // WHERE MOther IN (12, 34)
     * $query->filterByMother(array('min' => 12)); // WHERE MOther >= 12
     * $query->filterByMother(array('max' => 12)); // WHERE MOther <= 12
     * </code>
     *
     * @param     mixed $mother The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByMother($mother = null, $comparison = null)
    {
        if (is_array($mother)) {
            $useMinMax = false;
            if (isset($mother['min'])) {
                $this->addUsingAlias(SpeciesPeer::MOTHER, $mother['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mother['max'])) {
                $this->addUsingAlias(SpeciesPeer::MOTHER, $mother['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::MOTHER, $mother, $comparison);
    }

    /**
     * Filter the query on the UsedforAquaculture column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedforaquaculture('fooValue');   // WHERE UsedforAquaculture = 'fooValue'
     * $query->filterByUsedforaquaculture('%fooValue%'); // WHERE UsedforAquaculture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usedforaquaculture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByUsedforaquaculture($usedforaquaculture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usedforaquaculture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usedforaquaculture)) {
                $usedforaquaculture = str_replace('*', '%', $usedforaquaculture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::USEDFORAQUACULTURE, $usedforaquaculture, $comparison);
    }

    /**
     * Filter the query on the LifeCycle column
     *
     * Example usage:
     * <code>
     * $query->filterByLifecycle('fooValue');   // WHERE LifeCycle = 'fooValue'
     * $query->filterByLifecycle('%fooValue%'); // WHERE LifeCycle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lifecycle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByLifecycle($lifecycle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lifecycle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lifecycle)) {
                $lifecycle = str_replace('*', '%', $lifecycle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::LIFECYCLE, $lifecycle, $comparison);
    }

    /**
     * Filter the query on the AquacultureRef column
     *
     * Example usage:
     * <code>
     * $query->filterByAquacultureref(1234); // WHERE AquacultureRef = 1234
     * $query->filterByAquacultureref(array(12, 34)); // WHERE AquacultureRef IN (12, 34)
     * $query->filterByAquacultureref(array('min' => 12)); // WHERE AquacultureRef >= 12
     * $query->filterByAquacultureref(array('max' => 12)); // WHERE AquacultureRef <= 12
     * </code>
     *
     * @param     mixed $aquacultureref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByAquacultureref($aquacultureref = null, $comparison = null)
    {
        if (is_array($aquacultureref)) {
            $useMinMax = false;
            if (isset($aquacultureref['min'])) {
                $this->addUsingAlias(SpeciesPeer::AQUACULTUREREF, $aquacultureref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aquacultureref['max'])) {
                $this->addUsingAlias(SpeciesPeer::AQUACULTUREREF, $aquacultureref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::AQUACULTUREREF, $aquacultureref, $comparison);
    }

    /**
     * Filter the query on the UsedasBait column
     *
     * Example usage:
     * <code>
     * $query->filterByUsedasbait('fooValue');   // WHERE UsedasBait = 'fooValue'
     * $query->filterByUsedasbait('%fooValue%'); // WHERE UsedasBait LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usedasbait The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByUsedasbait($usedasbait = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usedasbait)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usedasbait)) {
                $usedasbait = str_replace('*', '%', $usedasbait);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::USEDASBAIT, $usedasbait, $comparison);
    }

    /**
     * Filter the query on the BaitRef column
     *
     * Example usage:
     * <code>
     * $query->filterByBaitref(1234); // WHERE BaitRef = 1234
     * $query->filterByBaitref(array(12, 34)); // WHERE BaitRef IN (12, 34)
     * $query->filterByBaitref(array('min' => 12)); // WHERE BaitRef >= 12
     * $query->filterByBaitref(array('max' => 12)); // WHERE BaitRef <= 12
     * </code>
     *
     * @param     mixed $baitref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByBaitref($baitref = null, $comparison = null)
    {
        if (is_array($baitref)) {
            $useMinMax = false;
            if (isset($baitref['min'])) {
                $this->addUsingAlias(SpeciesPeer::BAITREF, $baitref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baitref['max'])) {
                $this->addUsingAlias(SpeciesPeer::BAITREF, $baitref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::BAITREF, $baitref, $comparison);
    }

    /**
     * Filter the query on the Aquarium column
     *
     * Example usage:
     * <code>
     * $query->filterByAquarium('fooValue');   // WHERE Aquarium = 'fooValue'
     * $query->filterByAquarium('%fooValue%'); // WHERE Aquarium LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aquarium The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByAquarium($aquarium = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aquarium)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aquarium)) {
                $aquarium = str_replace('*', '%', $aquarium);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::AQUARIUM, $aquarium, $comparison);
    }

    /**
     * Filter the query on the AquariumFishII column
     *
     * Example usage:
     * <code>
     * $query->filterByAquariumfishii('fooValue');   // WHERE AquariumFishII = 'fooValue'
     * $query->filterByAquariumfishii('%fooValue%'); // WHERE AquariumFishII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aquariumfishii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByAquariumfishii($aquariumfishii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aquariumfishii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aquariumfishii)) {
                $aquariumfishii = str_replace('*', '%', $aquariumfishii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::AQUARIUMFISHII, $aquariumfishii, $comparison);
    }

    /**
     * Filter the query on the AquariumRef column
     *
     * Example usage:
     * <code>
     * $query->filterByAquariumref(1234); // WHERE AquariumRef = 1234
     * $query->filterByAquariumref(array(12, 34)); // WHERE AquariumRef IN (12, 34)
     * $query->filterByAquariumref(array('min' => 12)); // WHERE AquariumRef >= 12
     * $query->filterByAquariumref(array('max' => 12)); // WHERE AquariumRef <= 12
     * </code>
     *
     * @param     mixed $aquariumref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByAquariumref($aquariumref = null, $comparison = null)
    {
        if (is_array($aquariumref)) {
            $useMinMax = false;
            if (isset($aquariumref['min'])) {
                $this->addUsingAlias(SpeciesPeer::AQUARIUMREF, $aquariumref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aquariumref['max'])) {
                $this->addUsingAlias(SpeciesPeer::AQUARIUMREF, $aquariumref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::AQUARIUMREF, $aquariumref, $comparison);
    }

    /**
     * Filter the query on the GameFish column
     *
     * Example usage:
     * <code>
     * $query->filterByGamefish(1234); // WHERE GameFish = 1234
     * $query->filterByGamefish(array(12, 34)); // WHERE GameFish IN (12, 34)
     * $query->filterByGamefish(array('min' => 12)); // WHERE GameFish >= 12
     * $query->filterByGamefish(array('max' => 12)); // WHERE GameFish <= 12
     * </code>
     *
     * @param     mixed $gamefish The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByGamefish($gamefish = null, $comparison = null)
    {
        if (is_array($gamefish)) {
            $useMinMax = false;
            if (isset($gamefish['min'])) {
                $this->addUsingAlias(SpeciesPeer::GAMEFISH, $gamefish['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gamefish['max'])) {
                $this->addUsingAlias(SpeciesPeer::GAMEFISH, $gamefish['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::GAMEFISH, $gamefish, $comparison);
    }

    /**
     * Filter the query on the GameRef column
     *
     * Example usage:
     * <code>
     * $query->filterByGameref(1234); // WHERE GameRef = 1234
     * $query->filterByGameref(array(12, 34)); // WHERE GameRef IN (12, 34)
     * $query->filterByGameref(array('min' => 12)); // WHERE GameRef >= 12
     * $query->filterByGameref(array('max' => 12)); // WHERE GameRef <= 12
     * </code>
     *
     * @param     mixed $gameref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByGameref($gameref = null, $comparison = null)
    {
        if (is_array($gameref)) {
            $useMinMax = false;
            if (isset($gameref['min'])) {
                $this->addUsingAlias(SpeciesPeer::GAMEREF, $gameref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gameref['max'])) {
                $this->addUsingAlias(SpeciesPeer::GAMEREF, $gameref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::GAMEREF, $gameref, $comparison);
    }

    /**
     * Filter the query on the Dangerous column
     *
     * Example usage:
     * <code>
     * $query->filterByDangerous('fooValue');   // WHERE Dangerous = 'fooValue'
     * $query->filterByDangerous('%fooValue%'); // WHERE Dangerous LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dangerous The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByDangerous($dangerous = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dangerous)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dangerous)) {
                $dangerous = str_replace('*', '%', $dangerous);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::DANGEROUS, $dangerous, $comparison);
    }

    /**
     * Filter the query on the DangerousRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDangerousref(1234); // WHERE DangerousRef = 1234
     * $query->filterByDangerousref(array(12, 34)); // WHERE DangerousRef IN (12, 34)
     * $query->filterByDangerousref(array('min' => 12)); // WHERE DangerousRef >= 12
     * $query->filterByDangerousref(array('max' => 12)); // WHERE DangerousRef <= 12
     * </code>
     *
     * @param     mixed $dangerousref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByDangerousref($dangerousref = null, $comparison = null)
    {
        if (is_array($dangerousref)) {
            $useMinMax = false;
            if (isset($dangerousref['min'])) {
                $this->addUsingAlias(SpeciesPeer::DANGEROUSREF, $dangerousref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dangerousref['max'])) {
                $this->addUsingAlias(SpeciesPeer::DANGEROUSREF, $dangerousref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::DANGEROUSREF, $dangerousref, $comparison);
    }

    /**
     * Filter the query on the Electrogenic column
     *
     * Example usage:
     * <code>
     * $query->filterByElectrogenic('fooValue');   // WHERE Electrogenic = 'fooValue'
     * $query->filterByElectrogenic('%fooValue%'); // WHERE Electrogenic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $electrogenic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByElectrogenic($electrogenic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($electrogenic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $electrogenic)) {
                $electrogenic = str_replace('*', '%', $electrogenic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::ELECTROGENIC, $electrogenic, $comparison);
    }

    /**
     * Filter the query on the ElectroRef column
     *
     * Example usage:
     * <code>
     * $query->filterByElectroref(1234); // WHERE ElectroRef = 1234
     * $query->filterByElectroref(array(12, 34)); // WHERE ElectroRef IN (12, 34)
     * $query->filterByElectroref(array('min' => 12)); // WHERE ElectroRef >= 12
     * $query->filterByElectroref(array('max' => 12)); // WHERE ElectroRef <= 12
     * </code>
     *
     * @param     mixed $electroref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByElectroref($electroref = null, $comparison = null)
    {
        if (is_array($electroref)) {
            $useMinMax = false;
            if (isset($electroref['min'])) {
                $this->addUsingAlias(SpeciesPeer::ELECTROREF, $electroref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($electroref['max'])) {
                $this->addUsingAlias(SpeciesPeer::ELECTROREF, $electroref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::ELECTROREF, $electroref, $comparison);
    }

    /**
     * Filter the query on the Complete column
     *
     * Example usage:
     * <code>
     * $query->filterByComplete('fooValue');   // WHERE Complete = 'fooValue'
     * $query->filterByComplete('%fooValue%'); // WHERE Complete LIKE '%fooValue%'
     * </code>
     *
     * @param     string $complete The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByComplete($complete = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($complete)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $complete)) {
                $complete = str_replace('*', '%', $complete);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::COMPLETE, $complete, $comparison);
    }

    /**
     * Filter the query on the GoogleImage column
     *
     * Example usage:
     * <code>
     * $query->filterByGoogleimage(1234); // WHERE GoogleImage = 1234
     * $query->filterByGoogleimage(array(12, 34)); // WHERE GoogleImage IN (12, 34)
     * $query->filterByGoogleimage(array('min' => 12)); // WHERE GoogleImage >= 12
     * $query->filterByGoogleimage(array('max' => 12)); // WHERE GoogleImage <= 12
     * </code>
     *
     * @param     mixed $googleimage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByGoogleimage($googleimage = null, $comparison = null)
    {
        if (is_array($googleimage)) {
            $useMinMax = false;
            if (isset($googleimage['min'])) {
                $this->addUsingAlias(SpeciesPeer::GOOGLEIMAGE, $googleimage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($googleimage['max'])) {
                $this->addUsingAlias(SpeciesPeer::GOOGLEIMAGE, $googleimage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::GOOGLEIMAGE, $googleimage, $comparison);
    }

    /**
     * Filter the query on the Comments column
     *
     * Example usage:
     * <code>
     * $query->filterByComments('fooValue');   // WHERE Comments = 'fooValue'
     * $query->filterByComments('%fooValue%'); // WHERE Comments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByComments($comments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comments)) {
                $comments = str_replace('*', '%', $comments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::COMMENTS, $comments, $comparison);
    }

    /**
     * Filter the query on the Profile column
     *
     * Example usage:
     * <code>
     * $query->filterByProfile('fooValue');   // WHERE Profile = 'fooValue'
     * $query->filterByProfile('%fooValue%'); // WHERE Profile LIKE '%fooValue%'
     * </code>
     *
     * @param     string $profile The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByProfile($profile = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($profile)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $profile)) {
                $profile = str_replace('*', '%', $profile);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::PROFILE, $profile, $comparison);
    }

    /**
     * Filter the query on the PD50 column
     *
     * Example usage:
     * <code>
     * $query->filterByPd50(1234); // WHERE PD50 = 1234
     * $query->filterByPd50(array(12, 34)); // WHERE PD50 IN (12, 34)
     * $query->filterByPd50(array('min' => 12)); // WHERE PD50 >= 12
     * $query->filterByPd50(array('max' => 12)); // WHERE PD50 <= 12
     * </code>
     *
     * @param     mixed $pd50 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByPd50($pd50 = null, $comparison = null)
    {
        if (is_array($pd50)) {
            $useMinMax = false;
            if (isset($pd50['min'])) {
                $this->addUsingAlias(SpeciesPeer::PD50, $pd50['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pd50['max'])) {
                $this->addUsingAlias(SpeciesPeer::PD50, $pd50['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::PD50, $pd50, $comparison);
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
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(SpeciesPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(SpeciesPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::ENTERED, $entered, $comparison);
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
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(SpeciesPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(SpeciesPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(SpeciesPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(SpeciesPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::MODIFIED, $modified, $comparison);
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
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(SpeciesPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(SpeciesPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(SpeciesPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(SpeciesPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::EXPERT, $expert, $comparison);
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
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(SpeciesPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(SpeciesPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(SpeciesPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(SpeciesPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeciesPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Species $species Object to remove from the list of results
     *
     * @return SpeciesQuery The current query, for fluid interface
     */
    public function prune($species = null)
    {
        if ($species) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SpeciesPeer::GENUS), $species->getGenus(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SpeciesPeer::SPECIES), $species->getSpecies(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
