<?php


/**
 * Base class that represents a query for the 'slb_species' table.
 *
 *
 *
 * @method SlbSpeciesQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method SlbSpeciesQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method SlbSpeciesQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method SlbSpeciesQuery orderBySpeciesrefno($order = Criteria::ASC) Order by the SpeciesRefNo column
 * @method SlbSpeciesQuery orderByAuthor($order = Criteria::ASC) Order by the Author column
 * @method SlbSpeciesQuery orderByAuthorref($order = Criteria::ASC) Order by the AuthorRef column
 * @method SlbSpeciesQuery orderByFbname($order = Criteria::ASC) Order by the FBname column
 * @method SlbSpeciesQuery orderByFamcode($order = Criteria::ASC) Order by the FamCode column
 * @method SlbSpeciesQuery orderBySubfamily($order = Criteria::ASC) Order by the Subfamily column
 * @method SlbSpeciesQuery orderByFossil($order = Criteria::ASC) Order by the Fossil column
 * @method SlbSpeciesQuery orderByPeriodrange($order = Criteria::ASC) Order by the PeriodRange column
 * @method SlbSpeciesQuery orderByPeriod($order = Criteria::ASC) Order by the Period column
 * @method SlbSpeciesQuery orderBySource($order = Criteria::ASC) Order by the Source column
 * @method SlbSpeciesQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method SlbSpeciesQuery orderByFresh($order = Criteria::ASC) Order by the Fresh column
 * @method SlbSpeciesQuery orderByBrack($order = Criteria::ASC) Order by the Brack column
 * @method SlbSpeciesQuery orderBySaltwater($order = Criteria::ASC) Order by the Saltwater column
 * @method SlbSpeciesQuery orderByLand($order = Criteria::ASC) Order by the Land column
 * @method SlbSpeciesQuery orderByDemerspelag($order = Criteria::ASC) Order by the DemersPelag column
 * @method SlbSpeciesQuery orderByAnacat($order = Criteria::ASC) Order by the AnaCat column
 * @method SlbSpeciesQuery orderByMigratref($order = Criteria::ASC) Order by the MigratRef column
 * @method SlbSpeciesQuery orderByDepthrangeshallow($order = Criteria::ASC) Order by the DepthRangeShallow column
 * @method SlbSpeciesQuery orderByDepthrangedeep($order = Criteria::ASC) Order by the DepthRangeDeep column
 * @method SlbSpeciesQuery orderByDepthrangeref($order = Criteria::ASC) Order by the DepthRangeRef column
 * @method SlbSpeciesQuery orderByDepthrangecomshallow($order = Criteria::ASC) Order by the DepthRangeComShallow column
 * @method SlbSpeciesQuery orderByDepthrangecomdeep($order = Criteria::ASC) Order by the DepthRangeComDeep column
 * @method SlbSpeciesQuery orderByDepthcomref($order = Criteria::ASC) Order by the DepthComRef column
 * @method SlbSpeciesQuery orderByLongevitywild($order = Criteria::ASC) Order by the LongevityWild column
 * @method SlbSpeciesQuery orderByLongevitywildref($order = Criteria::ASC) Order by the LongevityWildRef column
 * @method SlbSpeciesQuery orderByLongevitycaptive($order = Criteria::ASC) Order by the LongevityCaptive column
 * @method SlbSpeciesQuery orderByLongevitycapref($order = Criteria::ASC) Order by the LongevityCapRef column
 * @method SlbSpeciesQuery orderByLength($order = Criteria::ASC) Order by the Length column
 * @method SlbSpeciesQuery orderByLtypemaxm($order = Criteria::ASC) Order by the LTypeMaxM column
 * @method SlbSpeciesQuery orderByLengthfemale($order = Criteria::ASC) Order by the LengthFemale column
 * @method SlbSpeciesQuery orderByLtypemaxf($order = Criteria::ASC) Order by the LTypeMaxF column
 * @method SlbSpeciesQuery orderByMaxlengthref($order = Criteria::ASC) Order by the MaxLengthRef column
 * @method SlbSpeciesQuery orderByCommonlength($order = Criteria::ASC) Order by the CommonLength column
 * @method SlbSpeciesQuery orderByLtypecomm($order = Criteria::ASC) Order by the LTypeComM column
 * @method SlbSpeciesQuery orderByCommonlengthf($order = Criteria::ASC) Order by the CommonLengthF column
 * @method SlbSpeciesQuery orderByLtypecomf($order = Criteria::ASC) Order by the LTypeComF column
 * @method SlbSpeciesQuery orderByCommonlengthref($order = Criteria::ASC) Order by the CommonLengthRef column
 * @method SlbSpeciesQuery orderByWeight($order = Criteria::ASC) Order by the Weight column
 * @method SlbSpeciesQuery orderByWeightfemale($order = Criteria::ASC) Order by the WeightFemale column
 * @method SlbSpeciesQuery orderByMaxweightref($order = Criteria::ASC) Order by the MaxWeightRef column
 * @method SlbSpeciesQuery orderByPic($order = Criteria::ASC) Order by the Pic column
 * @method SlbSpeciesQuery orderByPicturefemale($order = Criteria::ASC) Order by the PictureFemale column
 * @method SlbSpeciesQuery orderByLarvapic($order = Criteria::ASC) Order by the LarvaPic column
 * @method SlbSpeciesQuery orderByEggpic($order = Criteria::ASC) Order by the EggPic column
 * @method SlbSpeciesQuery orderByImportanceref($order = Criteria::ASC) Order by the ImportanceRef column
 * @method SlbSpeciesQuery orderByImportance($order = Criteria::ASC) Order by the Importance column
 * @method SlbSpeciesQuery orderByRemarks7($order = Criteria::ASC) Order by the Remarks7 column
 * @method SlbSpeciesQuery orderByPricecateg($order = Criteria::ASC) Order by the PriceCateg column
 * @method SlbSpeciesQuery orderByPricereliability($order = Criteria::ASC) Order by the PriceReliability column
 * @method SlbSpeciesQuery orderByLandingstatistics($order = Criteria::ASC) Order by the LandingStatistics column
 * @method SlbSpeciesQuery orderByLandings($order = Criteria::ASC) Order by the Landings column
 * @method SlbSpeciesQuery orderByMaincatchingmethod($order = Criteria::ASC) Order by the MainCatchingMethod column
 * @method SlbSpeciesQuery orderByIi($order = Criteria::ASC) Order by the II column
 * @method SlbSpeciesQuery orderByMseines($order = Criteria::ASC) Order by the MSeines column
 * @method SlbSpeciesQuery orderByMgillnets($order = Criteria::ASC) Order by the MGillnets column
 * @method SlbSpeciesQuery orderByMcastnets($order = Criteria::ASC) Order by the MCastnets column
 * @method SlbSpeciesQuery orderByMtraps($order = Criteria::ASC) Order by the MTraps column
 * @method SlbSpeciesQuery orderByMspears($order = Criteria::ASC) Order by the MSpears column
 * @method SlbSpeciesQuery orderByMtrawls($order = Criteria::ASC) Order by the MTrawls column
 * @method SlbSpeciesQuery orderByMdredges($order = Criteria::ASC) Order by the MDredges column
 * @method SlbSpeciesQuery orderByMliftnets($order = Criteria::ASC) Order by the MLiftnets column
 * @method SlbSpeciesQuery orderByMhookslines($order = Criteria::ASC) Order by the MHooksLines column
 * @method SlbSpeciesQuery orderByMother($order = Criteria::ASC) Order by the MOther column
 * @method SlbSpeciesQuery orderByUsedforaquaculture($order = Criteria::ASC) Order by the UsedforAquaculture column
 * @method SlbSpeciesQuery orderByLifecycle($order = Criteria::ASC) Order by the LifeCycle column
 * @method SlbSpeciesQuery orderByAquacultureref($order = Criteria::ASC) Order by the AquacultureRef column
 * @method SlbSpeciesQuery orderByUsedasbait($order = Criteria::ASC) Order by the UsedasBait column
 * @method SlbSpeciesQuery orderByBaitref($order = Criteria::ASC) Order by the BaitRef column
 * @method SlbSpeciesQuery orderByAquarium($order = Criteria::ASC) Order by the Aquarium column
 * @method SlbSpeciesQuery orderByAquariumfishii($order = Criteria::ASC) Order by the AquariumFishII column
 * @method SlbSpeciesQuery orderByAquariumref($order = Criteria::ASC) Order by the AquariumRef column
 * @method SlbSpeciesQuery orderByGamefish($order = Criteria::ASC) Order by the GameFish column
 * @method SlbSpeciesQuery orderByGameref($order = Criteria::ASC) Order by the GameRef column
 * @method SlbSpeciesQuery orderByDangerous($order = Criteria::ASC) Order by the Dangerous column
 * @method SlbSpeciesQuery orderByDangerousref($order = Criteria::ASC) Order by the DangerousRef column
 * @method SlbSpeciesQuery orderByElectrogenic($order = Criteria::ASC) Order by the Electrogenic column
 * @method SlbSpeciesQuery orderByElectroref($order = Criteria::ASC) Order by the ElectroRef column
 * @method SlbSpeciesQuery orderByComplete($order = Criteria::ASC) Order by the Complete column
 * @method SlbSpeciesQuery orderByAsfa($order = Criteria::ASC) Order by the ASFA column
 * @method SlbSpeciesQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method SlbSpeciesQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method SlbSpeciesQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method SlbSpeciesQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method SlbSpeciesQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method SlbSpeciesQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method SlbSpeciesQuery orderBySynopsis($order = Criteria::ASC) Order by the Synopsis column
 * @method SlbSpeciesQuery orderByDatesynopsis($order = Criteria::ASC) Order by the DateSynopsis column
 * @method SlbSpeciesQuery orderByFlag($order = Criteria::ASC) Order by the Flag column
 * @method SlbSpeciesQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method SlbSpeciesQuery orderByVancouveraquarium($order = Criteria::ASC) Order by the VancouverAquarium column
 * @method SlbSpeciesQuery orderByProfile($order = Criteria::ASC) Order by the Profile column
 * @method SlbSpeciesQuery orderBySp2000Namecode($order = Criteria::ASC) Order by the Sp2000_NameCode column
 * @method SlbSpeciesQuery orderBySp2000Hierarchycode($order = Criteria::ASC) Order by the Sp2000_HierarchyCode column
 * @method SlbSpeciesQuery orderBySp2000Authorrefnumber($order = Criteria::ASC) Order by the Sp2000_AuthorRefNumber column
 *
 * @method SlbSpeciesQuery groupBySpeccode() Group by the SpecCode column
 * @method SlbSpeciesQuery groupByGenus() Group by the Genus column
 * @method SlbSpeciesQuery groupBySpecies() Group by the Species column
 * @method SlbSpeciesQuery groupBySpeciesrefno() Group by the SpeciesRefNo column
 * @method SlbSpeciesQuery groupByAuthor() Group by the Author column
 * @method SlbSpeciesQuery groupByAuthorref() Group by the AuthorRef column
 * @method SlbSpeciesQuery groupByFbname() Group by the FBname column
 * @method SlbSpeciesQuery groupByFamcode() Group by the FamCode column
 * @method SlbSpeciesQuery groupBySubfamily() Group by the Subfamily column
 * @method SlbSpeciesQuery groupByFossil() Group by the Fossil column
 * @method SlbSpeciesQuery groupByPeriodrange() Group by the PeriodRange column
 * @method SlbSpeciesQuery groupByPeriod() Group by the Period column
 * @method SlbSpeciesQuery groupBySource() Group by the Source column
 * @method SlbSpeciesQuery groupByRemark() Group by the Remark column
 * @method SlbSpeciesQuery groupByFresh() Group by the Fresh column
 * @method SlbSpeciesQuery groupByBrack() Group by the Brack column
 * @method SlbSpeciesQuery groupBySaltwater() Group by the Saltwater column
 * @method SlbSpeciesQuery groupByLand() Group by the Land column
 * @method SlbSpeciesQuery groupByDemerspelag() Group by the DemersPelag column
 * @method SlbSpeciesQuery groupByAnacat() Group by the AnaCat column
 * @method SlbSpeciesQuery groupByMigratref() Group by the MigratRef column
 * @method SlbSpeciesQuery groupByDepthrangeshallow() Group by the DepthRangeShallow column
 * @method SlbSpeciesQuery groupByDepthrangedeep() Group by the DepthRangeDeep column
 * @method SlbSpeciesQuery groupByDepthrangeref() Group by the DepthRangeRef column
 * @method SlbSpeciesQuery groupByDepthrangecomshallow() Group by the DepthRangeComShallow column
 * @method SlbSpeciesQuery groupByDepthrangecomdeep() Group by the DepthRangeComDeep column
 * @method SlbSpeciesQuery groupByDepthcomref() Group by the DepthComRef column
 * @method SlbSpeciesQuery groupByLongevitywild() Group by the LongevityWild column
 * @method SlbSpeciesQuery groupByLongevitywildref() Group by the LongevityWildRef column
 * @method SlbSpeciesQuery groupByLongevitycaptive() Group by the LongevityCaptive column
 * @method SlbSpeciesQuery groupByLongevitycapref() Group by the LongevityCapRef column
 * @method SlbSpeciesQuery groupByLength() Group by the Length column
 * @method SlbSpeciesQuery groupByLtypemaxm() Group by the LTypeMaxM column
 * @method SlbSpeciesQuery groupByLengthfemale() Group by the LengthFemale column
 * @method SlbSpeciesQuery groupByLtypemaxf() Group by the LTypeMaxF column
 * @method SlbSpeciesQuery groupByMaxlengthref() Group by the MaxLengthRef column
 * @method SlbSpeciesQuery groupByCommonlength() Group by the CommonLength column
 * @method SlbSpeciesQuery groupByLtypecomm() Group by the LTypeComM column
 * @method SlbSpeciesQuery groupByCommonlengthf() Group by the CommonLengthF column
 * @method SlbSpeciesQuery groupByLtypecomf() Group by the LTypeComF column
 * @method SlbSpeciesQuery groupByCommonlengthref() Group by the CommonLengthRef column
 * @method SlbSpeciesQuery groupByWeight() Group by the Weight column
 * @method SlbSpeciesQuery groupByWeightfemale() Group by the WeightFemale column
 * @method SlbSpeciesQuery groupByMaxweightref() Group by the MaxWeightRef column
 * @method SlbSpeciesQuery groupByPic() Group by the Pic column
 * @method SlbSpeciesQuery groupByPicturefemale() Group by the PictureFemale column
 * @method SlbSpeciesQuery groupByLarvapic() Group by the LarvaPic column
 * @method SlbSpeciesQuery groupByEggpic() Group by the EggPic column
 * @method SlbSpeciesQuery groupByImportanceref() Group by the ImportanceRef column
 * @method SlbSpeciesQuery groupByImportance() Group by the Importance column
 * @method SlbSpeciesQuery groupByRemarks7() Group by the Remarks7 column
 * @method SlbSpeciesQuery groupByPricecateg() Group by the PriceCateg column
 * @method SlbSpeciesQuery groupByPricereliability() Group by the PriceReliability column
 * @method SlbSpeciesQuery groupByLandingstatistics() Group by the LandingStatistics column
 * @method SlbSpeciesQuery groupByLandings() Group by the Landings column
 * @method SlbSpeciesQuery groupByMaincatchingmethod() Group by the MainCatchingMethod column
 * @method SlbSpeciesQuery groupByIi() Group by the II column
 * @method SlbSpeciesQuery groupByMseines() Group by the MSeines column
 * @method SlbSpeciesQuery groupByMgillnets() Group by the MGillnets column
 * @method SlbSpeciesQuery groupByMcastnets() Group by the MCastnets column
 * @method SlbSpeciesQuery groupByMtraps() Group by the MTraps column
 * @method SlbSpeciesQuery groupByMspears() Group by the MSpears column
 * @method SlbSpeciesQuery groupByMtrawls() Group by the MTrawls column
 * @method SlbSpeciesQuery groupByMdredges() Group by the MDredges column
 * @method SlbSpeciesQuery groupByMliftnets() Group by the MLiftnets column
 * @method SlbSpeciesQuery groupByMhookslines() Group by the MHooksLines column
 * @method SlbSpeciesQuery groupByMother() Group by the MOther column
 * @method SlbSpeciesQuery groupByUsedforaquaculture() Group by the UsedforAquaculture column
 * @method SlbSpeciesQuery groupByLifecycle() Group by the LifeCycle column
 * @method SlbSpeciesQuery groupByAquacultureref() Group by the AquacultureRef column
 * @method SlbSpeciesQuery groupByUsedasbait() Group by the UsedasBait column
 * @method SlbSpeciesQuery groupByBaitref() Group by the BaitRef column
 * @method SlbSpeciesQuery groupByAquarium() Group by the Aquarium column
 * @method SlbSpeciesQuery groupByAquariumfishii() Group by the AquariumFishII column
 * @method SlbSpeciesQuery groupByAquariumref() Group by the AquariumRef column
 * @method SlbSpeciesQuery groupByGamefish() Group by the GameFish column
 * @method SlbSpeciesQuery groupByGameref() Group by the GameRef column
 * @method SlbSpeciesQuery groupByDangerous() Group by the Dangerous column
 * @method SlbSpeciesQuery groupByDangerousref() Group by the DangerousRef column
 * @method SlbSpeciesQuery groupByElectrogenic() Group by the Electrogenic column
 * @method SlbSpeciesQuery groupByElectroref() Group by the ElectroRef column
 * @method SlbSpeciesQuery groupByComplete() Group by the Complete column
 * @method SlbSpeciesQuery groupByAsfa() Group by the ASFA column
 * @method SlbSpeciesQuery groupByEntered() Group by the Entered column
 * @method SlbSpeciesQuery groupByDateentered() Group by the DateEntered column
 * @method SlbSpeciesQuery groupByModified() Group by the Modified column
 * @method SlbSpeciesQuery groupByDatemodified() Group by the DateModified column
 * @method SlbSpeciesQuery groupByExpert() Group by the Expert column
 * @method SlbSpeciesQuery groupByDatechecked() Group by the DateChecked column
 * @method SlbSpeciesQuery groupBySynopsis() Group by the Synopsis column
 * @method SlbSpeciesQuery groupByDatesynopsis() Group by the DateSynopsis column
 * @method SlbSpeciesQuery groupByFlag() Group by the Flag column
 * @method SlbSpeciesQuery groupByComments() Group by the Comments column
 * @method SlbSpeciesQuery groupByVancouveraquarium() Group by the VancouverAquarium column
 * @method SlbSpeciesQuery groupByProfile() Group by the Profile column
 * @method SlbSpeciesQuery groupBySp2000Namecode() Group by the Sp2000_NameCode column
 * @method SlbSpeciesQuery groupBySp2000Hierarchycode() Group by the Sp2000_HierarchyCode column
 * @method SlbSpeciesQuery groupBySp2000Authorrefnumber() Group by the Sp2000_AuthorRefNumber column
 *
 * @method SlbSpeciesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SlbSpeciesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SlbSpeciesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SlbSpecies findOne(PropelPDO $con = null) Return the first SlbSpecies matching the query
 * @method SlbSpecies findOneOrCreate(PropelPDO $con = null) Return the first SlbSpecies matching the query, or a new SlbSpecies object populated from the query conditions when no match is found
 *
 * @method SlbSpecies findOneBySpeccode(int $SpecCode) Return the first SlbSpecies filtered by the SpecCode column
 * @method SlbSpecies findOneByGenus(string $Genus) Return the first SlbSpecies filtered by the Genus column
 * @method SlbSpecies findOneBySpecies(string $Species) Return the first SlbSpecies filtered by the Species column
 * @method SlbSpecies findOneBySpeciesrefno(int $SpeciesRefNo) Return the first SlbSpecies filtered by the SpeciesRefNo column
 * @method SlbSpecies findOneByAuthor(string $Author) Return the first SlbSpecies filtered by the Author column
 * @method SlbSpecies findOneByAuthorref(int $AuthorRef) Return the first SlbSpecies filtered by the AuthorRef column
 * @method SlbSpecies findOneByFbname(string $FBname) Return the first SlbSpecies filtered by the FBname column
 * @method SlbSpecies findOneByFamcode(int $FamCode) Return the first SlbSpecies filtered by the FamCode column
 * @method SlbSpecies findOneBySubfamily(string $Subfamily) Return the first SlbSpecies filtered by the Subfamily column
 * @method SlbSpecies findOneByFossil(int $Fossil) Return the first SlbSpecies filtered by the Fossil column
 * @method SlbSpecies findOneByPeriodrange(string $PeriodRange) Return the first SlbSpecies filtered by the PeriodRange column
 * @method SlbSpecies findOneByPeriod(string $Period) Return the first SlbSpecies filtered by the Period column
 * @method SlbSpecies findOneBySource(string $Source) Return the first SlbSpecies filtered by the Source column
 * @method SlbSpecies findOneByRemark(string $Remark) Return the first SlbSpecies filtered by the Remark column
 * @method SlbSpecies findOneByFresh(int $Fresh) Return the first SlbSpecies filtered by the Fresh column
 * @method SlbSpecies findOneByBrack(int $Brack) Return the first SlbSpecies filtered by the Brack column
 * @method SlbSpecies findOneBySaltwater(int $Saltwater) Return the first SlbSpecies filtered by the Saltwater column
 * @method SlbSpecies findOneByLand(int $Land) Return the first SlbSpecies filtered by the Land column
 * @method SlbSpecies findOneByDemerspelag(string $DemersPelag) Return the first SlbSpecies filtered by the DemersPelag column
 * @method SlbSpecies findOneByAnacat(string $AnaCat) Return the first SlbSpecies filtered by the AnaCat column
 * @method SlbSpecies findOneByMigratref(int $MigratRef) Return the first SlbSpecies filtered by the MigratRef column
 * @method SlbSpecies findOneByDepthrangeshallow(int $DepthRangeShallow) Return the first SlbSpecies filtered by the DepthRangeShallow column
 * @method SlbSpecies findOneByDepthrangedeep(int $DepthRangeDeep) Return the first SlbSpecies filtered by the DepthRangeDeep column
 * @method SlbSpecies findOneByDepthrangeref(int $DepthRangeRef) Return the first SlbSpecies filtered by the DepthRangeRef column
 * @method SlbSpecies findOneByDepthrangecomshallow(int $DepthRangeComShallow) Return the first SlbSpecies filtered by the DepthRangeComShallow column
 * @method SlbSpecies findOneByDepthrangecomdeep(int $DepthRangeComDeep) Return the first SlbSpecies filtered by the DepthRangeComDeep column
 * @method SlbSpecies findOneByDepthcomref(int $DepthComRef) Return the first SlbSpecies filtered by the DepthComRef column
 * @method SlbSpecies findOneByLongevitywild(double $LongevityWild) Return the first SlbSpecies filtered by the LongevityWild column
 * @method SlbSpecies findOneByLongevitywildref(int $LongevityWildRef) Return the first SlbSpecies filtered by the LongevityWildRef column
 * @method SlbSpecies findOneByLongevitycaptive(double $LongevityCaptive) Return the first SlbSpecies filtered by the LongevityCaptive column
 * @method SlbSpecies findOneByLongevitycapref(int $LongevityCapRef) Return the first SlbSpecies filtered by the LongevityCapRef column
 * @method SlbSpecies findOneByLength(double $Length) Return the first SlbSpecies filtered by the Length column
 * @method SlbSpecies findOneByLtypemaxm(string $LTypeMaxM) Return the first SlbSpecies filtered by the LTypeMaxM column
 * @method SlbSpecies findOneByLengthfemale(double $LengthFemale) Return the first SlbSpecies filtered by the LengthFemale column
 * @method SlbSpecies findOneByLtypemaxf(string $LTypeMaxF) Return the first SlbSpecies filtered by the LTypeMaxF column
 * @method SlbSpecies findOneByMaxlengthref(int $MaxLengthRef) Return the first SlbSpecies filtered by the MaxLengthRef column
 * @method SlbSpecies findOneByCommonlength(double $CommonLength) Return the first SlbSpecies filtered by the CommonLength column
 * @method SlbSpecies findOneByLtypecomm(string $LTypeComM) Return the first SlbSpecies filtered by the LTypeComM column
 * @method SlbSpecies findOneByCommonlengthf(double $CommonLengthF) Return the first SlbSpecies filtered by the CommonLengthF column
 * @method SlbSpecies findOneByLtypecomf(string $LTypeComF) Return the first SlbSpecies filtered by the LTypeComF column
 * @method SlbSpecies findOneByCommonlengthref(int $CommonLengthRef) Return the first SlbSpecies filtered by the CommonLengthRef column
 * @method SlbSpecies findOneByWeight(double $Weight) Return the first SlbSpecies filtered by the Weight column
 * @method SlbSpecies findOneByWeightfemale(double $WeightFemale) Return the first SlbSpecies filtered by the WeightFemale column
 * @method SlbSpecies findOneByMaxweightref(int $MaxWeightRef) Return the first SlbSpecies filtered by the MaxWeightRef column
 * @method SlbSpecies findOneByPic(string $Pic) Return the first SlbSpecies filtered by the Pic column
 * @method SlbSpecies findOneByPicturefemale(string $PictureFemale) Return the first SlbSpecies filtered by the PictureFemale column
 * @method SlbSpecies findOneByLarvapic(string $LarvaPic) Return the first SlbSpecies filtered by the LarvaPic column
 * @method SlbSpecies findOneByEggpic(string $EggPic) Return the first SlbSpecies filtered by the EggPic column
 * @method SlbSpecies findOneByImportanceref(int $ImportanceRef) Return the first SlbSpecies filtered by the ImportanceRef column
 * @method SlbSpecies findOneByImportance(string $Importance) Return the first SlbSpecies filtered by the Importance column
 * @method SlbSpecies findOneByRemarks7(string $Remarks7) Return the first SlbSpecies filtered by the Remarks7 column
 * @method SlbSpecies findOneByPricecateg(string $PriceCateg) Return the first SlbSpecies filtered by the PriceCateg column
 * @method SlbSpecies findOneByPricereliability(string $PriceReliability) Return the first SlbSpecies filtered by the PriceReliability column
 * @method SlbSpecies findOneByLandingstatistics(string $LandingStatistics) Return the first SlbSpecies filtered by the LandingStatistics column
 * @method SlbSpecies findOneByLandings(string $Landings) Return the first SlbSpecies filtered by the Landings column
 * @method SlbSpecies findOneByMaincatchingmethod(string $MainCatchingMethod) Return the first SlbSpecies filtered by the MainCatchingMethod column
 * @method SlbSpecies findOneByIi(string $II) Return the first SlbSpecies filtered by the II column
 * @method SlbSpecies findOneByMseines(int $MSeines) Return the first SlbSpecies filtered by the MSeines column
 * @method SlbSpecies findOneByMgillnets(int $MGillnets) Return the first SlbSpecies filtered by the MGillnets column
 * @method SlbSpecies findOneByMcastnets(int $MCastnets) Return the first SlbSpecies filtered by the MCastnets column
 * @method SlbSpecies findOneByMtraps(int $MTraps) Return the first SlbSpecies filtered by the MTraps column
 * @method SlbSpecies findOneByMspears(int $MSpears) Return the first SlbSpecies filtered by the MSpears column
 * @method SlbSpecies findOneByMtrawls(int $MTrawls) Return the first SlbSpecies filtered by the MTrawls column
 * @method SlbSpecies findOneByMdredges(int $MDredges) Return the first SlbSpecies filtered by the MDredges column
 * @method SlbSpecies findOneByMliftnets(int $MLiftnets) Return the first SlbSpecies filtered by the MLiftnets column
 * @method SlbSpecies findOneByMhookslines(int $MHooksLines) Return the first SlbSpecies filtered by the MHooksLines column
 * @method SlbSpecies findOneByMother(int $MOther) Return the first SlbSpecies filtered by the MOther column
 * @method SlbSpecies findOneByUsedforaquaculture(string $UsedforAquaculture) Return the first SlbSpecies filtered by the UsedforAquaculture column
 * @method SlbSpecies findOneByLifecycle(string $LifeCycle) Return the first SlbSpecies filtered by the LifeCycle column
 * @method SlbSpecies findOneByAquacultureref(int $AquacultureRef) Return the first SlbSpecies filtered by the AquacultureRef column
 * @method SlbSpecies findOneByUsedasbait(string $UsedasBait) Return the first SlbSpecies filtered by the UsedasBait column
 * @method SlbSpecies findOneByBaitref(int $BaitRef) Return the first SlbSpecies filtered by the BaitRef column
 * @method SlbSpecies findOneByAquarium(string $Aquarium) Return the first SlbSpecies filtered by the Aquarium column
 * @method SlbSpecies findOneByAquariumfishii(string $AquariumFishII) Return the first SlbSpecies filtered by the AquariumFishII column
 * @method SlbSpecies findOneByAquariumref(int $AquariumRef) Return the first SlbSpecies filtered by the AquariumRef column
 * @method SlbSpecies findOneByGamefish(int $GameFish) Return the first SlbSpecies filtered by the GameFish column
 * @method SlbSpecies findOneByGameref(int $GameRef) Return the first SlbSpecies filtered by the GameRef column
 * @method SlbSpecies findOneByDangerous(string $Dangerous) Return the first SlbSpecies filtered by the Dangerous column
 * @method SlbSpecies findOneByDangerousref(int $DangerousRef) Return the first SlbSpecies filtered by the DangerousRef column
 * @method SlbSpecies findOneByElectrogenic(string $Electrogenic) Return the first SlbSpecies filtered by the Electrogenic column
 * @method SlbSpecies findOneByElectroref(int $ElectroRef) Return the first SlbSpecies filtered by the ElectroRef column
 * @method SlbSpecies findOneByComplete(string $Complete) Return the first SlbSpecies filtered by the Complete column
 * @method SlbSpecies findOneByAsfa(string $ASFA) Return the first SlbSpecies filtered by the ASFA column
 * @method SlbSpecies findOneByEntered(int $Entered) Return the first SlbSpecies filtered by the Entered column
 * @method SlbSpecies findOneByDateentered(string $DateEntered) Return the first SlbSpecies filtered by the DateEntered column
 * @method SlbSpecies findOneByModified(int $Modified) Return the first SlbSpecies filtered by the Modified column
 * @method SlbSpecies findOneByDatemodified(string $DateModified) Return the first SlbSpecies filtered by the DateModified column
 * @method SlbSpecies findOneByExpert(int $Expert) Return the first SlbSpecies filtered by the Expert column
 * @method SlbSpecies findOneByDatechecked(string $DateChecked) Return the first SlbSpecies filtered by the DateChecked column
 * @method SlbSpecies findOneBySynopsis(int $Synopsis) Return the first SlbSpecies filtered by the Synopsis column
 * @method SlbSpecies findOneByDatesynopsis(string $DateSynopsis) Return the first SlbSpecies filtered by the DateSynopsis column
 * @method SlbSpecies findOneByFlag(string $Flag) Return the first SlbSpecies filtered by the Flag column
 * @method SlbSpecies findOneByComments(string $Comments) Return the first SlbSpecies filtered by the Comments column
 * @method SlbSpecies findOneByVancouveraquarium(int $VancouverAquarium) Return the first SlbSpecies filtered by the VancouverAquarium column
 * @method SlbSpecies findOneByProfile(string $Profile) Return the first SlbSpecies filtered by the Profile column
 * @method SlbSpecies findOneBySp2000Namecode(string $Sp2000_NameCode) Return the first SlbSpecies filtered by the Sp2000_NameCode column
 * @method SlbSpecies findOneBySp2000Hierarchycode(string $Sp2000_HierarchyCode) Return the first SlbSpecies filtered by the Sp2000_HierarchyCode column
 * @method SlbSpecies findOneBySp2000Authorrefnumber(string $Sp2000_AuthorRefNumber) Return the first SlbSpecies filtered by the Sp2000_AuthorRefNumber column
 *
 * @method array findBySpeccode(int $SpecCode) Return SlbSpecies objects filtered by the SpecCode column
 * @method array findByGenus(string $Genus) Return SlbSpecies objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return SlbSpecies objects filtered by the Species column
 * @method array findBySpeciesrefno(int $SpeciesRefNo) Return SlbSpecies objects filtered by the SpeciesRefNo column
 * @method array findByAuthor(string $Author) Return SlbSpecies objects filtered by the Author column
 * @method array findByAuthorref(int $AuthorRef) Return SlbSpecies objects filtered by the AuthorRef column
 * @method array findByFbname(string $FBname) Return SlbSpecies objects filtered by the FBname column
 * @method array findByFamcode(int $FamCode) Return SlbSpecies objects filtered by the FamCode column
 * @method array findBySubfamily(string $Subfamily) Return SlbSpecies objects filtered by the Subfamily column
 * @method array findByFossil(int $Fossil) Return SlbSpecies objects filtered by the Fossil column
 * @method array findByPeriodrange(string $PeriodRange) Return SlbSpecies objects filtered by the PeriodRange column
 * @method array findByPeriod(string $Period) Return SlbSpecies objects filtered by the Period column
 * @method array findBySource(string $Source) Return SlbSpecies objects filtered by the Source column
 * @method array findByRemark(string $Remark) Return SlbSpecies objects filtered by the Remark column
 * @method array findByFresh(int $Fresh) Return SlbSpecies objects filtered by the Fresh column
 * @method array findByBrack(int $Brack) Return SlbSpecies objects filtered by the Brack column
 * @method array findBySaltwater(int $Saltwater) Return SlbSpecies objects filtered by the Saltwater column
 * @method array findByLand(int $Land) Return SlbSpecies objects filtered by the Land column
 * @method array findByDemerspelag(string $DemersPelag) Return SlbSpecies objects filtered by the DemersPelag column
 * @method array findByAnacat(string $AnaCat) Return SlbSpecies objects filtered by the AnaCat column
 * @method array findByMigratref(int $MigratRef) Return SlbSpecies objects filtered by the MigratRef column
 * @method array findByDepthrangeshallow(int $DepthRangeShallow) Return SlbSpecies objects filtered by the DepthRangeShallow column
 * @method array findByDepthrangedeep(int $DepthRangeDeep) Return SlbSpecies objects filtered by the DepthRangeDeep column
 * @method array findByDepthrangeref(int $DepthRangeRef) Return SlbSpecies objects filtered by the DepthRangeRef column
 * @method array findByDepthrangecomshallow(int $DepthRangeComShallow) Return SlbSpecies objects filtered by the DepthRangeComShallow column
 * @method array findByDepthrangecomdeep(int $DepthRangeComDeep) Return SlbSpecies objects filtered by the DepthRangeComDeep column
 * @method array findByDepthcomref(int $DepthComRef) Return SlbSpecies objects filtered by the DepthComRef column
 * @method array findByLongevitywild(double $LongevityWild) Return SlbSpecies objects filtered by the LongevityWild column
 * @method array findByLongevitywildref(int $LongevityWildRef) Return SlbSpecies objects filtered by the LongevityWildRef column
 * @method array findByLongevitycaptive(double $LongevityCaptive) Return SlbSpecies objects filtered by the LongevityCaptive column
 * @method array findByLongevitycapref(int $LongevityCapRef) Return SlbSpecies objects filtered by the LongevityCapRef column
 * @method array findByLength(double $Length) Return SlbSpecies objects filtered by the Length column
 * @method array findByLtypemaxm(string $LTypeMaxM) Return SlbSpecies objects filtered by the LTypeMaxM column
 * @method array findByLengthfemale(double $LengthFemale) Return SlbSpecies objects filtered by the LengthFemale column
 * @method array findByLtypemaxf(string $LTypeMaxF) Return SlbSpecies objects filtered by the LTypeMaxF column
 * @method array findByMaxlengthref(int $MaxLengthRef) Return SlbSpecies objects filtered by the MaxLengthRef column
 * @method array findByCommonlength(double $CommonLength) Return SlbSpecies objects filtered by the CommonLength column
 * @method array findByLtypecomm(string $LTypeComM) Return SlbSpecies objects filtered by the LTypeComM column
 * @method array findByCommonlengthf(double $CommonLengthF) Return SlbSpecies objects filtered by the CommonLengthF column
 * @method array findByLtypecomf(string $LTypeComF) Return SlbSpecies objects filtered by the LTypeComF column
 * @method array findByCommonlengthref(int $CommonLengthRef) Return SlbSpecies objects filtered by the CommonLengthRef column
 * @method array findByWeight(double $Weight) Return SlbSpecies objects filtered by the Weight column
 * @method array findByWeightfemale(double $WeightFemale) Return SlbSpecies objects filtered by the WeightFemale column
 * @method array findByMaxweightref(int $MaxWeightRef) Return SlbSpecies objects filtered by the MaxWeightRef column
 * @method array findByPic(string $Pic) Return SlbSpecies objects filtered by the Pic column
 * @method array findByPicturefemale(string $PictureFemale) Return SlbSpecies objects filtered by the PictureFemale column
 * @method array findByLarvapic(string $LarvaPic) Return SlbSpecies objects filtered by the LarvaPic column
 * @method array findByEggpic(string $EggPic) Return SlbSpecies objects filtered by the EggPic column
 * @method array findByImportanceref(int $ImportanceRef) Return SlbSpecies objects filtered by the ImportanceRef column
 * @method array findByImportance(string $Importance) Return SlbSpecies objects filtered by the Importance column
 * @method array findByRemarks7(string $Remarks7) Return SlbSpecies objects filtered by the Remarks7 column
 * @method array findByPricecateg(string $PriceCateg) Return SlbSpecies objects filtered by the PriceCateg column
 * @method array findByPricereliability(string $PriceReliability) Return SlbSpecies objects filtered by the PriceReliability column
 * @method array findByLandingstatistics(string $LandingStatistics) Return SlbSpecies objects filtered by the LandingStatistics column
 * @method array findByLandings(string $Landings) Return SlbSpecies objects filtered by the Landings column
 * @method array findByMaincatchingmethod(string $MainCatchingMethod) Return SlbSpecies objects filtered by the MainCatchingMethod column
 * @method array findByIi(string $II) Return SlbSpecies objects filtered by the II column
 * @method array findByMseines(int $MSeines) Return SlbSpecies objects filtered by the MSeines column
 * @method array findByMgillnets(int $MGillnets) Return SlbSpecies objects filtered by the MGillnets column
 * @method array findByMcastnets(int $MCastnets) Return SlbSpecies objects filtered by the MCastnets column
 * @method array findByMtraps(int $MTraps) Return SlbSpecies objects filtered by the MTraps column
 * @method array findByMspears(int $MSpears) Return SlbSpecies objects filtered by the MSpears column
 * @method array findByMtrawls(int $MTrawls) Return SlbSpecies objects filtered by the MTrawls column
 * @method array findByMdredges(int $MDredges) Return SlbSpecies objects filtered by the MDredges column
 * @method array findByMliftnets(int $MLiftnets) Return SlbSpecies objects filtered by the MLiftnets column
 * @method array findByMhookslines(int $MHooksLines) Return SlbSpecies objects filtered by the MHooksLines column
 * @method array findByMother(int $MOther) Return SlbSpecies objects filtered by the MOther column
 * @method array findByUsedforaquaculture(string $UsedforAquaculture) Return SlbSpecies objects filtered by the UsedforAquaculture column
 * @method array findByLifecycle(string $LifeCycle) Return SlbSpecies objects filtered by the LifeCycle column
 * @method array findByAquacultureref(int $AquacultureRef) Return SlbSpecies objects filtered by the AquacultureRef column
 * @method array findByUsedasbait(string $UsedasBait) Return SlbSpecies objects filtered by the UsedasBait column
 * @method array findByBaitref(int $BaitRef) Return SlbSpecies objects filtered by the BaitRef column
 * @method array findByAquarium(string $Aquarium) Return SlbSpecies objects filtered by the Aquarium column
 * @method array findByAquariumfishii(string $AquariumFishII) Return SlbSpecies objects filtered by the AquariumFishII column
 * @method array findByAquariumref(int $AquariumRef) Return SlbSpecies objects filtered by the AquariumRef column
 * @method array findByGamefish(int $GameFish) Return SlbSpecies objects filtered by the GameFish column
 * @method array findByGameref(int $GameRef) Return SlbSpecies objects filtered by the GameRef column
 * @method array findByDangerous(string $Dangerous) Return SlbSpecies objects filtered by the Dangerous column
 * @method array findByDangerousref(int $DangerousRef) Return SlbSpecies objects filtered by the DangerousRef column
 * @method array findByElectrogenic(string $Electrogenic) Return SlbSpecies objects filtered by the Electrogenic column
 * @method array findByElectroref(int $ElectroRef) Return SlbSpecies objects filtered by the ElectroRef column
 * @method array findByComplete(string $Complete) Return SlbSpecies objects filtered by the Complete column
 * @method array findByAsfa(string $ASFA) Return SlbSpecies objects filtered by the ASFA column
 * @method array findByEntered(int $Entered) Return SlbSpecies objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return SlbSpecies objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return SlbSpecies objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return SlbSpecies objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return SlbSpecies objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return SlbSpecies objects filtered by the DateChecked column
 * @method array findBySynopsis(int $Synopsis) Return SlbSpecies objects filtered by the Synopsis column
 * @method array findByDatesynopsis(string $DateSynopsis) Return SlbSpecies objects filtered by the DateSynopsis column
 * @method array findByFlag(string $Flag) Return SlbSpecies objects filtered by the Flag column
 * @method array findByComments(string $Comments) Return SlbSpecies objects filtered by the Comments column
 * @method array findByVancouveraquarium(int $VancouverAquarium) Return SlbSpecies objects filtered by the VancouverAquarium column
 * @method array findByProfile(string $Profile) Return SlbSpecies objects filtered by the Profile column
 * @method array findBySp2000Namecode(string $Sp2000_NameCode) Return SlbSpecies objects filtered by the Sp2000_NameCode column
 * @method array findBySp2000Hierarchycode(string $Sp2000_HierarchyCode) Return SlbSpecies objects filtered by the Sp2000_HierarchyCode column
 * @method array findBySp2000Authorrefnumber(string $Sp2000_AuthorRefNumber) Return SlbSpecies objects filtered by the Sp2000_AuthorRefNumber column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSlbSpeciesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSlbSpeciesQuery object.
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
            $modelName = 'SlbSpecies';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SlbSpeciesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SlbSpeciesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SlbSpeciesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SlbSpeciesQuery) {
            return $criteria;
        }
        $query = new SlbSpeciesQuery(null, null, $modelAlias);

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
     * @return   SlbSpecies|SlbSpecies[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SlbSpeciesPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SlbSpeciesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 SlbSpecies A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SpecCode`, `Genus`, `Species`, `SpeciesRefNo`, `Author`, `AuthorRef`, `FBname`, `FamCode`, `Subfamily`, `Fossil`, `PeriodRange`, `Period`, `Source`, `Remark`, `Fresh`, `Brack`, `Saltwater`, `Land`, `DemersPelag`, `AnaCat`, `MigratRef`, `DepthRangeShallow`, `DepthRangeDeep`, `DepthRangeRef`, `DepthRangeComShallow`, `DepthRangeComDeep`, `DepthComRef`, `LongevityWild`, `LongevityWildRef`, `LongevityCaptive`, `LongevityCapRef`, `Length`, `LTypeMaxM`, `LengthFemale`, `LTypeMaxF`, `MaxLengthRef`, `CommonLength`, `LTypeComM`, `CommonLengthF`, `LTypeComF`, `CommonLengthRef`, `Weight`, `WeightFemale`, `MaxWeightRef`, `Pic`, `PictureFemale`, `LarvaPic`, `EggPic`, `ImportanceRef`, `Importance`, `Remarks7`, `PriceCateg`, `PriceReliability`, `LandingStatistics`, `Landings`, `MainCatchingMethod`, `II`, `MSeines`, `MGillnets`, `MCastnets`, `MTraps`, `MSpears`, `MTrawls`, `MDredges`, `MLiftnets`, `MHooksLines`, `MOther`, `UsedforAquaculture`, `LifeCycle`, `AquacultureRef`, `UsedasBait`, `BaitRef`, `Aquarium`, `AquariumFishII`, `AquariumRef`, `GameFish`, `GameRef`, `Dangerous`, `DangerousRef`, `Electrogenic`, `ElectroRef`, `Complete`, `ASFA`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Synopsis`, `DateSynopsis`, `Flag`, `Comments`, `VancouverAquarium`, `Profile`, `Sp2000_NameCode`, `Sp2000_HierarchyCode`, `Sp2000_AuthorRefNumber` FROM `slb_species` WHERE `Genus` = :p0 AND `Species` = :p1';
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
            $obj = new SlbSpecies();
            $obj->hydrate($row);
            SlbSpeciesPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return SlbSpecies|SlbSpecies[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|SlbSpecies[]|mixed the list of results, formatted by the current formatter
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(SlbSpeciesPeer::GENUS, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SlbSpeciesPeer::SPECIES, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SlbSpeciesPeer::GENUS, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SlbSpeciesPeer::SPECIES, $key[1], Criteria::EQUAL);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::SPECCODE, $speccode, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::GENUS, $genus, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::SPECIES, $species, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterBySpeciesrefno($speciesrefno = null, $comparison = null)
    {
        if (is_array($speciesrefno)) {
            $useMinMax = false;
            if (isset($speciesrefno['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::SPECIESREFNO, $speciesrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speciesrefno['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::SPECIESREFNO, $speciesrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::SPECIESREFNO, $speciesrefno, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::AUTHOR, $author, $comparison);
    }

    /**
     * Filter the query on the AuthorRef column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthorref(1234); // WHERE AuthorRef = 1234
     * $query->filterByAuthorref(array(12, 34)); // WHERE AuthorRef IN (12, 34)
     * $query->filterByAuthorref(array('min' => 12)); // WHERE AuthorRef >= 12
     * $query->filterByAuthorref(array('max' => 12)); // WHERE AuthorRef <= 12
     * </code>
     *
     * @param     mixed $authorref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByAuthorref($authorref = null, $comparison = null)
    {
        if (is_array($authorref)) {
            $useMinMax = false;
            if (isset($authorref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::AUTHORREF, $authorref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($authorref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::AUTHORREF, $authorref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::AUTHORREF, $authorref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::FBNAME, $fbname, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::FAMCODE, $famcode, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::SUBFAMILY, $subfamily, $comparison);
    }

    /**
     * Filter the query on the Fossil column
     *
     * Example usage:
     * <code>
     * $query->filterByFossil(1234); // WHERE Fossil = 1234
     * $query->filterByFossil(array(12, 34)); // WHERE Fossil IN (12, 34)
     * $query->filterByFossil(array('min' => 12)); // WHERE Fossil >= 12
     * $query->filterByFossil(array('max' => 12)); // WHERE Fossil <= 12
     * </code>
     *
     * @param     mixed $fossil The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByFossil($fossil = null, $comparison = null)
    {
        if (is_array($fossil)) {
            $useMinMax = false;
            if (isset($fossil['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::FOSSIL, $fossil['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fossil['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::FOSSIL, $fossil['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::FOSSIL, $fossil, $comparison);
    }

    /**
     * Filter the query on the PeriodRange column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodrange('fooValue');   // WHERE PeriodRange = 'fooValue'
     * $query->filterByPeriodrange('%fooValue%'); // WHERE PeriodRange LIKE '%fooValue%'
     * </code>
     *
     * @param     string $periodrange The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByPeriodrange($periodrange = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($periodrange)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $periodrange)) {
                $periodrange = str_replace('*', '%', $periodrange);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::PERIODRANGE, $periodrange, $comparison);
    }

    /**
     * Filter the query on the Period column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriod('fooValue');   // WHERE Period = 'fooValue'
     * $query->filterByPeriod('%fooValue%'); // WHERE Period LIKE '%fooValue%'
     * </code>
     *
     * @param     string $period The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByPeriod($period = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($period)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $period)) {
                $period = str_replace('*', '%', $period);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::PERIOD, $period, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::SOURCE, $source, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::REMARK, $remark, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByFresh($fresh = null, $comparison = null)
    {
        if (is_array($fresh)) {
            $useMinMax = false;
            if (isset($fresh['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::FRESH, $fresh['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fresh['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::FRESH, $fresh['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::FRESH, $fresh, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByBrack($brack = null, $comparison = null)
    {
        if (is_array($brack)) {
            $useMinMax = false;
            if (isset($brack['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::BRACK, $brack['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($brack['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::BRACK, $brack['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::BRACK, $brack, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterBySaltwater($saltwater = null, $comparison = null)
    {
        if (is_array($saltwater)) {
            $useMinMax = false;
            if (isset($saltwater['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::SALTWATER, $saltwater['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saltwater['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::SALTWATER, $saltwater['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::SALTWATER, $saltwater, $comparison);
    }

    /**
     * Filter the query on the Land column
     *
     * Example usage:
     * <code>
     * $query->filterByLand(1234); // WHERE Land = 1234
     * $query->filterByLand(array(12, 34)); // WHERE Land IN (12, 34)
     * $query->filterByLand(array('min' => 12)); // WHERE Land >= 12
     * $query->filterByLand(array('max' => 12)); // WHERE Land <= 12
     * </code>
     *
     * @param     mixed $land The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByLand($land = null, $comparison = null)
    {
        if (is_array($land)) {
            $useMinMax = false;
            if (isset($land['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::LAND, $land['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($land['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::LAND, $land['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::LAND, $land, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::DEMERSPELAG, $demerspelag, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::ANACAT, $anacat, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByMigratref($migratref = null, $comparison = null)
    {
        if (is_array($migratref)) {
            $useMinMax = false;
            if (isset($migratref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MIGRATREF, $migratref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($migratref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MIGRATREF, $migratref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::MIGRATREF, $migratref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByDepthrangeshallow($depthrangeshallow = null, $comparison = null)
    {
        if (is_array($depthrangeshallow)) {
            $useMinMax = false;
            if (isset($depthrangeshallow['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DEPTHRANGESHALLOW, $depthrangeshallow['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthrangeshallow['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DEPTHRANGESHALLOW, $depthrangeshallow['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::DEPTHRANGESHALLOW, $depthrangeshallow, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByDepthrangedeep($depthrangedeep = null, $comparison = null)
    {
        if (is_array($depthrangedeep)) {
            $useMinMax = false;
            if (isset($depthrangedeep['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DEPTHRANGEDEEP, $depthrangedeep['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthrangedeep['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DEPTHRANGEDEEP, $depthrangedeep['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::DEPTHRANGEDEEP, $depthrangedeep, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByDepthrangeref($depthrangeref = null, $comparison = null)
    {
        if (is_array($depthrangeref)) {
            $useMinMax = false;
            if (isset($depthrangeref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DEPTHRANGEREF, $depthrangeref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthrangeref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DEPTHRANGEREF, $depthrangeref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::DEPTHRANGEREF, $depthrangeref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByDepthrangecomshallow($depthrangecomshallow = null, $comparison = null)
    {
        if (is_array($depthrangecomshallow)) {
            $useMinMax = false;
            if (isset($depthrangecomshallow['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DEPTHRANGECOMSHALLOW, $depthrangecomshallow['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthrangecomshallow['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DEPTHRANGECOMSHALLOW, $depthrangecomshallow['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::DEPTHRANGECOMSHALLOW, $depthrangecomshallow, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByDepthrangecomdeep($depthrangecomdeep = null, $comparison = null)
    {
        if (is_array($depthrangecomdeep)) {
            $useMinMax = false;
            if (isset($depthrangecomdeep['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DEPTHRANGECOMDEEP, $depthrangecomdeep['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthrangecomdeep['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DEPTHRANGECOMDEEP, $depthrangecomdeep['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::DEPTHRANGECOMDEEP, $depthrangecomdeep, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByDepthcomref($depthcomref = null, $comparison = null)
    {
        if (is_array($depthcomref)) {
            $useMinMax = false;
            if (isset($depthcomref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DEPTHCOMREF, $depthcomref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthcomref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DEPTHCOMREF, $depthcomref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::DEPTHCOMREF, $depthcomref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByLongevitywild($longevitywild = null, $comparison = null)
    {
        if (is_array($longevitywild)) {
            $useMinMax = false;
            if (isset($longevitywild['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::LONGEVITYWILD, $longevitywild['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longevitywild['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::LONGEVITYWILD, $longevitywild['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::LONGEVITYWILD, $longevitywild, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByLongevitywildref($longevitywildref = null, $comparison = null)
    {
        if (is_array($longevitywildref)) {
            $useMinMax = false;
            if (isset($longevitywildref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::LONGEVITYWILDREF, $longevitywildref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longevitywildref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::LONGEVITYWILDREF, $longevitywildref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::LONGEVITYWILDREF, $longevitywildref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByLongevitycaptive($longevitycaptive = null, $comparison = null)
    {
        if (is_array($longevitycaptive)) {
            $useMinMax = false;
            if (isset($longevitycaptive['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::LONGEVITYCAPTIVE, $longevitycaptive['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longevitycaptive['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::LONGEVITYCAPTIVE, $longevitycaptive['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::LONGEVITYCAPTIVE, $longevitycaptive, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByLongevitycapref($longevitycapref = null, $comparison = null)
    {
        if (is_array($longevitycapref)) {
            $useMinMax = false;
            if (isset($longevitycapref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::LONGEVITYCAPREF, $longevitycapref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longevitycapref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::LONGEVITYCAPREF, $longevitycapref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::LONGEVITYCAPREF, $longevitycapref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByLength($length = null, $comparison = null)
    {
        if (is_array($length)) {
            $useMinMax = false;
            if (isset($length['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::LENGTH, $length['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($length['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::LENGTH, $length['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::LENGTH, $length, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::LTYPEMAXM, $ltypemaxm, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByLengthfemale($lengthfemale = null, $comparison = null)
    {
        if (is_array($lengthfemale)) {
            $useMinMax = false;
            if (isset($lengthfemale['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::LENGTHFEMALE, $lengthfemale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthfemale['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::LENGTHFEMALE, $lengthfemale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::LENGTHFEMALE, $lengthfemale, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::LTYPEMAXF, $ltypemaxf, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByMaxlengthref($maxlengthref = null, $comparison = null)
    {
        if (is_array($maxlengthref)) {
            $useMinMax = false;
            if (isset($maxlengthref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MAXLENGTHREF, $maxlengthref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxlengthref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MAXLENGTHREF, $maxlengthref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::MAXLENGTHREF, $maxlengthref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByCommonlength($commonlength = null, $comparison = null)
    {
        if (is_array($commonlength)) {
            $useMinMax = false;
            if (isset($commonlength['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::COMMONLENGTH, $commonlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commonlength['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::COMMONLENGTH, $commonlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::COMMONLENGTH, $commonlength, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::LTYPECOMM, $ltypecomm, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByCommonlengthf($commonlengthf = null, $comparison = null)
    {
        if (is_array($commonlengthf)) {
            $useMinMax = false;
            if (isset($commonlengthf['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::COMMONLENGTHF, $commonlengthf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commonlengthf['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::COMMONLENGTHF, $commonlengthf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::COMMONLENGTHF, $commonlengthf, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::LTYPECOMF, $ltypecomf, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByCommonlengthref($commonlengthref = null, $comparison = null)
    {
        if (is_array($commonlengthref)) {
            $useMinMax = false;
            if (isset($commonlengthref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::COMMONLENGTHREF, $commonlengthref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commonlengthref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::COMMONLENGTHREF, $commonlengthref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::COMMONLENGTHREF, $commonlengthref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByWeight($weight = null, $comparison = null)
    {
        if (is_array($weight)) {
            $useMinMax = false;
            if (isset($weight['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weight['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::WEIGHT, $weight, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByWeightfemale($weightfemale = null, $comparison = null)
    {
        if (is_array($weightfemale)) {
            $useMinMax = false;
            if (isset($weightfemale['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::WEIGHTFEMALE, $weightfemale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightfemale['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::WEIGHTFEMALE, $weightfemale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::WEIGHTFEMALE, $weightfemale, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByMaxweightref($maxweightref = null, $comparison = null)
    {
        if (is_array($maxweightref)) {
            $useMinMax = false;
            if (isset($maxweightref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MAXWEIGHTREF, $maxweightref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxweightref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MAXWEIGHTREF, $maxweightref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::MAXWEIGHTREF, $maxweightref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::PIC, $pic, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::PICTUREFEMALE, $picturefemale, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::LARVAPIC, $larvapic, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::EGGPIC, $eggpic, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByImportanceref($importanceref = null, $comparison = null)
    {
        if (is_array($importanceref)) {
            $useMinMax = false;
            if (isset($importanceref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::IMPORTANCEREF, $importanceref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($importanceref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::IMPORTANCEREF, $importanceref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::IMPORTANCEREF, $importanceref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::IMPORTANCE, $importance, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::REMARKS7, $remarks7, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::PRICECATEG, $pricecateg, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::PRICERELIABILITY, $pricereliability, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::LANDINGSTATISTICS, $landingstatistics, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::LANDINGS, $landings, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::MAINCATCHINGMETHOD, $maincatchingmethod, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::II, $ii, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByMseines($mseines = null, $comparison = null)
    {
        if (is_array($mseines)) {
            $useMinMax = false;
            if (isset($mseines['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MSEINES, $mseines['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mseines['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MSEINES, $mseines['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::MSEINES, $mseines, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByMgillnets($mgillnets = null, $comparison = null)
    {
        if (is_array($mgillnets)) {
            $useMinMax = false;
            if (isset($mgillnets['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MGILLNETS, $mgillnets['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mgillnets['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MGILLNETS, $mgillnets['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::MGILLNETS, $mgillnets, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByMcastnets($mcastnets = null, $comparison = null)
    {
        if (is_array($mcastnets)) {
            $useMinMax = false;
            if (isset($mcastnets['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MCASTNETS, $mcastnets['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mcastnets['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MCASTNETS, $mcastnets['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::MCASTNETS, $mcastnets, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByMtraps($mtraps = null, $comparison = null)
    {
        if (is_array($mtraps)) {
            $useMinMax = false;
            if (isset($mtraps['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MTRAPS, $mtraps['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mtraps['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MTRAPS, $mtraps['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::MTRAPS, $mtraps, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByMspears($mspears = null, $comparison = null)
    {
        if (is_array($mspears)) {
            $useMinMax = false;
            if (isset($mspears['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MSPEARS, $mspears['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mspears['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MSPEARS, $mspears['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::MSPEARS, $mspears, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByMtrawls($mtrawls = null, $comparison = null)
    {
        if (is_array($mtrawls)) {
            $useMinMax = false;
            if (isset($mtrawls['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MTRAWLS, $mtrawls['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mtrawls['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MTRAWLS, $mtrawls['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::MTRAWLS, $mtrawls, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByMdredges($mdredges = null, $comparison = null)
    {
        if (is_array($mdredges)) {
            $useMinMax = false;
            if (isset($mdredges['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MDREDGES, $mdredges['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mdredges['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MDREDGES, $mdredges['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::MDREDGES, $mdredges, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByMliftnets($mliftnets = null, $comparison = null)
    {
        if (is_array($mliftnets)) {
            $useMinMax = false;
            if (isset($mliftnets['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MLIFTNETS, $mliftnets['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mliftnets['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MLIFTNETS, $mliftnets['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::MLIFTNETS, $mliftnets, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByMhookslines($mhookslines = null, $comparison = null)
    {
        if (is_array($mhookslines)) {
            $useMinMax = false;
            if (isset($mhookslines['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MHOOKSLINES, $mhookslines['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mhookslines['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MHOOKSLINES, $mhookslines['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::MHOOKSLINES, $mhookslines, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByMother($mother = null, $comparison = null)
    {
        if (is_array($mother)) {
            $useMinMax = false;
            if (isset($mother['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MOTHER, $mother['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mother['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MOTHER, $mother['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::MOTHER, $mother, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::USEDFORAQUACULTURE, $usedforaquaculture, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::LIFECYCLE, $lifecycle, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByAquacultureref($aquacultureref = null, $comparison = null)
    {
        if (is_array($aquacultureref)) {
            $useMinMax = false;
            if (isset($aquacultureref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::AQUACULTUREREF, $aquacultureref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aquacultureref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::AQUACULTUREREF, $aquacultureref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::AQUACULTUREREF, $aquacultureref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::USEDASBAIT, $usedasbait, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByBaitref($baitref = null, $comparison = null)
    {
        if (is_array($baitref)) {
            $useMinMax = false;
            if (isset($baitref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::BAITREF, $baitref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baitref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::BAITREF, $baitref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::BAITREF, $baitref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::AQUARIUM, $aquarium, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::AQUARIUMFISHII, $aquariumfishii, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByAquariumref($aquariumref = null, $comparison = null)
    {
        if (is_array($aquariumref)) {
            $useMinMax = false;
            if (isset($aquariumref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::AQUARIUMREF, $aquariumref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aquariumref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::AQUARIUMREF, $aquariumref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::AQUARIUMREF, $aquariumref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByGamefish($gamefish = null, $comparison = null)
    {
        if (is_array($gamefish)) {
            $useMinMax = false;
            if (isset($gamefish['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::GAMEFISH, $gamefish['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gamefish['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::GAMEFISH, $gamefish['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::GAMEFISH, $gamefish, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByGameref($gameref = null, $comparison = null)
    {
        if (is_array($gameref)) {
            $useMinMax = false;
            if (isset($gameref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::GAMEREF, $gameref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gameref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::GAMEREF, $gameref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::GAMEREF, $gameref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::DANGEROUS, $dangerous, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByDangerousref($dangerousref = null, $comparison = null)
    {
        if (is_array($dangerousref)) {
            $useMinMax = false;
            if (isset($dangerousref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DANGEROUSREF, $dangerousref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dangerousref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DANGEROUSREF, $dangerousref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::DANGEROUSREF, $dangerousref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::ELECTROGENIC, $electrogenic, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByElectroref($electroref = null, $comparison = null)
    {
        if (is_array($electroref)) {
            $useMinMax = false;
            if (isset($electroref['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::ELECTROREF, $electroref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($electroref['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::ELECTROREF, $electroref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::ELECTROREF, $electroref, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::COMPLETE, $complete, $comparison);
    }

    /**
     * Filter the query on the ASFA column
     *
     * Example usage:
     * <code>
     * $query->filterByAsfa('2011-03-14'); // WHERE ASFA = '2011-03-14'
     * $query->filterByAsfa('now'); // WHERE ASFA = '2011-03-14'
     * $query->filterByAsfa(array('max' => 'yesterday')); // WHERE ASFA < '2011-03-13'
     * </code>
     *
     * @param     mixed $asfa The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByAsfa($asfa = null, $comparison = null)
    {
        if (is_array($asfa)) {
            $useMinMax = false;
            if (isset($asfa['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::ASFA, $asfa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($asfa['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::ASFA, $asfa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::ASFA, $asfa, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::ENTERED, $entered, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::MODIFIED, $modified, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::EXPERT, $expert, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the Synopsis column
     *
     * Example usage:
     * <code>
     * $query->filterBySynopsis(1234); // WHERE Synopsis = 1234
     * $query->filterBySynopsis(array(12, 34)); // WHERE Synopsis IN (12, 34)
     * $query->filterBySynopsis(array('min' => 12)); // WHERE Synopsis >= 12
     * $query->filterBySynopsis(array('max' => 12)); // WHERE Synopsis <= 12
     * </code>
     *
     * @param     mixed $synopsis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterBySynopsis($synopsis = null, $comparison = null)
    {
        if (is_array($synopsis)) {
            $useMinMax = false;
            if (isset($synopsis['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::SYNOPSIS, $synopsis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($synopsis['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::SYNOPSIS, $synopsis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::SYNOPSIS, $synopsis, $comparison);
    }

    /**
     * Filter the query on the DateSynopsis column
     *
     * Example usage:
     * <code>
     * $query->filterByDatesynopsis('2011-03-14'); // WHERE DateSynopsis = '2011-03-14'
     * $query->filterByDatesynopsis('now'); // WHERE DateSynopsis = '2011-03-14'
     * $query->filterByDatesynopsis(array('max' => 'yesterday')); // WHERE DateSynopsis < '2011-03-13'
     * </code>
     *
     * @param     mixed $datesynopsis The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByDatesynopsis($datesynopsis = null, $comparison = null)
    {
        if (is_array($datesynopsis)) {
            $useMinMax = false;
            if (isset($datesynopsis['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DATESYNOPSIS, $datesynopsis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datesynopsis['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::DATESYNOPSIS, $datesynopsis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::DATESYNOPSIS, $datesynopsis, $comparison);
    }

    /**
     * Filter the query on the Flag column
     *
     * Example usage:
     * <code>
     * $query->filterByFlag('fooValue');   // WHERE Flag = 'fooValue'
     * $query->filterByFlag('%fooValue%'); // WHERE Flag LIKE '%fooValue%'
     * </code>
     *
     * @param     string $flag The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByFlag($flag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($flag)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $flag)) {
                $flag = str_replace('*', '%', $flag);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::FLAG, $flag, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::COMMENTS, $comments, $comparison);
    }

    /**
     * Filter the query on the VancouverAquarium column
     *
     * Example usage:
     * <code>
     * $query->filterByVancouveraquarium(1234); // WHERE VancouverAquarium = 1234
     * $query->filterByVancouveraquarium(array(12, 34)); // WHERE VancouverAquarium IN (12, 34)
     * $query->filterByVancouveraquarium(array('min' => 12)); // WHERE VancouverAquarium >= 12
     * $query->filterByVancouveraquarium(array('max' => 12)); // WHERE VancouverAquarium <= 12
     * </code>
     *
     * @param     mixed $vancouveraquarium The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterByVancouveraquarium($vancouveraquarium = null, $comparison = null)
    {
        if (is_array($vancouveraquarium)) {
            $useMinMax = false;
            if (isset($vancouveraquarium['min'])) {
                $this->addUsingAlias(SlbSpeciesPeer::VANCOUVERAQUARIUM, $vancouveraquarium['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vancouveraquarium['max'])) {
                $this->addUsingAlias(SlbSpeciesPeer::VANCOUVERAQUARIUM, $vancouveraquarium['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::VANCOUVERAQUARIUM, $vancouveraquarium, $comparison);
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
     * @return SlbSpeciesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SlbSpeciesPeer::PROFILE, $profile, $comparison);
    }

    /**
     * Filter the query on the Sp2000_NameCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySp2000Namecode('fooValue');   // WHERE Sp2000_NameCode = 'fooValue'
     * $query->filterBySp2000Namecode('%fooValue%'); // WHERE Sp2000_NameCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp2000Namecode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterBySp2000Namecode($sp2000Namecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp2000Namecode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sp2000Namecode)) {
                $sp2000Namecode = str_replace('*', '%', $sp2000Namecode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::SP2000_NAMECODE, $sp2000Namecode, $comparison);
    }

    /**
     * Filter the query on the Sp2000_HierarchyCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySp2000Hierarchycode('fooValue');   // WHERE Sp2000_HierarchyCode = 'fooValue'
     * $query->filterBySp2000Hierarchycode('%fooValue%'); // WHERE Sp2000_HierarchyCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp2000Hierarchycode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterBySp2000Hierarchycode($sp2000Hierarchycode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp2000Hierarchycode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sp2000Hierarchycode)) {
                $sp2000Hierarchycode = str_replace('*', '%', $sp2000Hierarchycode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::SP2000_HIERARCHYCODE, $sp2000Hierarchycode, $comparison);
    }

    /**
     * Filter the query on the Sp2000_AuthorRefNumber column
     *
     * Example usage:
     * <code>
     * $query->filterBySp2000Authorrefnumber('fooValue');   // WHERE Sp2000_AuthorRefNumber = 'fooValue'
     * $query->filterBySp2000Authorrefnumber('%fooValue%'); // WHERE Sp2000_AuthorRefNumber LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sp2000Authorrefnumber The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function filterBySp2000Authorrefnumber($sp2000Authorrefnumber = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sp2000Authorrefnumber)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sp2000Authorrefnumber)) {
                $sp2000Authorrefnumber = str_replace('*', '%', $sp2000Authorrefnumber);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SlbSpeciesPeer::SP2000_AUTHORREFNUMBER, $sp2000Authorrefnumber, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   SlbSpecies $slbSpecies Object to remove from the list of results
     *
     * @return SlbSpeciesQuery The current query, for fluid interface
     */
    public function prune($slbSpecies = null)
    {
        if ($slbSpecies) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SlbSpeciesPeer::GENUS), $slbSpecies->getGenus(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SlbSpeciesPeer::SPECIES), $slbSpecies->getSpecies(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
