<?php


/**
 * Base class that represents a query for the 'refrens' table.
 *
 *
 *
 * @method RefrensQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method RefrensQuery orderByRefno($order = Criteria::ASC) Order by the RefNo column
 * @method RefrensQuery orderByRmsno($order = Criteria::ASC) Order by the RMSNo column
 * @method RefrensQuery orderByAuthor($order = Criteria::ASC) Order by the Author column
 * @method RefrensQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method RefrensQuery orderByTitle($order = Criteria::ASC) Order by the Title column
 * @method RefrensQuery orderBySource($order = Criteria::ASC) Order by the Source column
 * @method RefrensQuery orderBySourceunique($order = Criteria::ASC) Order by the SourceUnique column
 * @method RefrensQuery orderByFirstauthor($order = Criteria::ASC) Order by the FirstAuthor column
 * @method RefrensQuery orderByLanguage($order = Criteria::ASC) Order by the Language column
 * @method RefrensQuery orderByComplete($order = Criteria::ASC) Order by the Complete column
 * @method RefrensQuery orderByReftype($order = Criteria::ASC) Order by the RefType column
 * @method RefrensQuery orderByKeywords($order = Criteria::ASC) Order by the Keywords column
 * @method RefrensQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method RefrensQuery orderByCrossref1($order = Criteria::ASC) Order by the CrossRef1 column
 * @method RefrensQuery orderByCrossref2($order = Criteria::ASC) Order by the CrossRef2 column
 * @method RefrensQuery orderByCrossref3($order = Criteria::ASC) Order by the CrossRef3 column
 * @method RefrensQuery orderByCrossref4($order = Criteria::ASC) Order by the CrossRef4 column
 * @method RefrensQuery orderByCrossref5($order = Criteria::ASC) Order by the CrossRef5 column
 * @method RefrensQuery orderByCasRefNo($order = Criteria::ASC) Order by the CAS_REF_NO column
 * @method RefrensQuery orderByEcology($order = Criteria::ASC) Order by the Ecology column
 * @method RefrensQuery orderByEcotoxicology($order = Criteria::ASC) Order by the Ecotoxicology column
 * @method RefrensQuery orderByPopdynamics($order = Criteria::ASC) Order by the PopDynamics column
 * @method RefrensQuery orderByAquaculture($order = Criteria::ASC) Order by the Aquaculture column
 * @method RefrensQuery orderByBrains($order = Criteria::ASC) Order by the Brains column
 * @method RefrensQuery orderByReproduction($order = Criteria::ASC) Order by the Reproduction column
 * @method RefrensQuery orderByMigration($order = Criteria::ASC) Order by the Migration column
 * @method RefrensQuery orderByGrowth($order = Criteria::ASC) Order by the Growth column
 * @method RefrensQuery orderByRecruitment($order = Criteria::ASC) Order by the Recruitment column
 * @method RefrensQuery orderByVision($order = Criteria::ASC) Order by the Vision column
 * @method RefrensQuery orderByCiguatera($order = Criteria::ASC) Order by the Ciguatera column
 * @method RefrensQuery orderByFrynursery($order = Criteria::ASC) Order by the FryNursery column
 * @method RefrensQuery orderByMaturity($order = Criteria::ASC) Order by the Maturity column
 * @method RefrensQuery orderByDistribution($order = Criteria::ASC) Order by the Distribution column
 * @method RefrensQuery orderByMortality($order = Criteria::ASC) Order by the Mortality column
 * @method RefrensQuery orderByFarmingsystem($order = Criteria::ASC) Order by the FarmingSystem column
 * @method RefrensQuery orderByEggs($order = Criteria::ASC) Order by the Eggs column
 * @method RefrensQuery orderByHabitats($order = Criteria::ASC) Order by the Habitats column
 * @method RefrensQuery orderByLengthweight($order = Criteria::ASC) Order by the LengthWeight column
 * @method RefrensQuery orderByLengthfreq($order = Criteria::ASC) Order by the LengthFreq column
 * @method RefrensQuery orderByStrains($order = Criteria::ASC) Order by the Strains column
 * @method RefrensQuery orderByLarvae($order = Criteria::ASC) Order by the Larvae column
 * @method RefrensQuery orderByEnvironment($order = Criteria::ASC) Order by the Environment column
 * @method RefrensQuery orderByStocks($order = Criteria::ASC) Order by the Stocks column
 * @method RefrensQuery orderByGenetics($order = Criteria::ASC) Order by the Genetics column
 * @method RefrensQuery orderBySpawning($order = Criteria::ASC) Order by the Spawning column
 * @method RefrensQuery orderByAbundance($order = Criteria::ASC) Order by the Abundance column
 * @method RefrensQuery orderByCatches($order = Criteria::ASC) Order by the Catches column
 * @method RefrensQuery orderByElectrophoresis($order = Criteria::ASC) Order by the Electrophoresis column
 * @method RefrensQuery orderBySexratio($order = Criteria::ASC) Order by the SexRatio column
 * @method RefrensQuery orderByActivity($order = Criteria::ASC) Order by the Activity column
 * @method RefrensQuery orderByEffort($order = Criteria::ASC) Order by the Effort column
 * @method RefrensQuery orderByDiseases($order = Criteria::ASC) Order by the Diseases column
 * @method RefrensQuery orderByPredators($order = Criteria::ASC) Order by the Predators column
 * @method RefrensQuery orderByBehavior($order = Criteria::ASC) Order by the Behavior column
 * @method RefrensQuery orderByManagement($order = Criteria::ASC) Order by the Management column
 * @method RefrensQuery orderByIntroduction($order = Criteria::ASC) Order by the Introduction column
 * @method RefrensQuery orderByCompetitors($order = Criteria::ASC) Order by the Competitors column
 * @method RefrensQuery orderByFood($order = Criteria::ASC) Order by the Food column
 * @method RefrensQuery orderByNomenclature($order = Criteria::ASC) Order by the Nomenclature column
 * @method RefrensQuery orderByRevision($order = Criteria::ASC) Order by the Revision column
 * @method RefrensQuery orderByPhysiology($order = Criteria::ASC) Order by the Physiology column
 * @method RefrensQuery orderByMorphology($order = Criteria::ASC) Order by the Morphology column
 * @method RefrensQuery orderByOtolith($order = Criteria::ASC) Order by the Otolith column
 * @method RefrensQuery orderByFoodconsum($order = Criteria::ASC) Order by the FoodConsum column
 * @method RefrensQuery orderByOrigdescr($order = Criteria::ASC) Order by the OrigDescr column
 * @method RefrensQuery orderByOxygen($order = Criteria::ASC) Order by the Oxygen column
 * @method RefrensQuery orderByMaxlength($order = Criteria::ASC) Order by the MaxLength column
 * @method RefrensQuery orderByDiet($order = Criteria::ASC) Order by the Diet column
 * @method RefrensQuery orderByRawdata($order = Criteria::ASC) Order by the RawData column
 * @method RefrensQuery orderBySpeeds($order = Criteria::ASC) Order by the Speeds column
 * @method RefrensQuery orderByMaxweight($order = Criteria::ASC) Order by the MaxWeight column
 * @method RefrensQuery orderByLongevity($order = Criteria::ASC) Order by the Longevity column
 * @method RefrensQuery orderByKeys($order = Criteria::ASC) Order by the Keys column
 * @method RefrensQuery orderByBroodstock($order = Criteria::ASC) Order by the Broodstock column
 * @method RefrensQuery orderByEggnursery($order = Criteria::ASC) Order by the EggNursery column
 * @method RefrensQuery orderByLarvalnursery($order = Criteria::ASC) Order by the LarvalNursery column
 * @method RefrensQuery orderByCitation($order = Criteria::ASC) Order by the Citation column
 * @method RefrensQuery orderByTeam($order = Criteria::ASC) Order by the Team column
 * @method RefrensQuery orderByAquarium($order = Criteria::ASC) Order by the Aquarium column
 * @method RefrensQuery orderByProcessing($order = Criteria::ASC) Order by the Processing column
 * @method RefrensQuery orderByComname($order = Criteria::ASC) Order by the Comname column
 * @method RefrensQuery orderByPictures($order = Criteria::ASC) Order by the Pictures column
 * @method RefrensQuery orderByTagrecapture($order = Criteria::ASC) Order by the Tagrecapture column
 * @method RefrensQuery orderByConservation($order = Criteria::ASC) Order by the Conservation column
 * @method RefrensQuery orderByChecklist($order = Criteria::ASC) Order by the Checklist column
 * @method RefrensQuery orderByIsbn($order = Criteria::ASC) Order by the ISBN column
 * @method RefrensQuery orderByDoi($order = Criteria::ASC) Order by the DOI column
 * @method RefrensQuery orderByAuthoremail($order = Criteria::ASC) Order by the AuthorEmail column
 * @method RefrensQuery orderByAuthoradress($order = Criteria::ASC) Order by the AuthorAdress column
 * @method RefrensQuery orderByPaperurl($order = Criteria::ASC) Order by the PaperURL column
 * @method RefrensQuery orderByUsed($order = Criteria::ASC) Order by the Used column
 * @method RefrensQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method RefrensQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method RefrensQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method RefrensQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method RefrensQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method RefrensQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method RefrensQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method RefrensQuery groupByAutoctr() Group by the autoctr column
 * @method RefrensQuery groupByRefno() Group by the RefNo column
 * @method RefrensQuery groupByRmsno() Group by the RMSNo column
 * @method RefrensQuery groupByAuthor() Group by the Author column
 * @method RefrensQuery groupByYear() Group by the Year column
 * @method RefrensQuery groupByTitle() Group by the Title column
 * @method RefrensQuery groupBySource() Group by the Source column
 * @method RefrensQuery groupBySourceunique() Group by the SourceUnique column
 * @method RefrensQuery groupByFirstauthor() Group by the FirstAuthor column
 * @method RefrensQuery groupByLanguage() Group by the Language column
 * @method RefrensQuery groupByComplete() Group by the Complete column
 * @method RefrensQuery groupByReftype() Group by the RefType column
 * @method RefrensQuery groupByKeywords() Group by the Keywords column
 * @method RefrensQuery groupByRemarks() Group by the Remarks column
 * @method RefrensQuery groupByCrossref1() Group by the CrossRef1 column
 * @method RefrensQuery groupByCrossref2() Group by the CrossRef2 column
 * @method RefrensQuery groupByCrossref3() Group by the CrossRef3 column
 * @method RefrensQuery groupByCrossref4() Group by the CrossRef4 column
 * @method RefrensQuery groupByCrossref5() Group by the CrossRef5 column
 * @method RefrensQuery groupByCasRefNo() Group by the CAS_REF_NO column
 * @method RefrensQuery groupByEcology() Group by the Ecology column
 * @method RefrensQuery groupByEcotoxicology() Group by the Ecotoxicology column
 * @method RefrensQuery groupByPopdynamics() Group by the PopDynamics column
 * @method RefrensQuery groupByAquaculture() Group by the Aquaculture column
 * @method RefrensQuery groupByBrains() Group by the Brains column
 * @method RefrensQuery groupByReproduction() Group by the Reproduction column
 * @method RefrensQuery groupByMigration() Group by the Migration column
 * @method RefrensQuery groupByGrowth() Group by the Growth column
 * @method RefrensQuery groupByRecruitment() Group by the Recruitment column
 * @method RefrensQuery groupByVision() Group by the Vision column
 * @method RefrensQuery groupByCiguatera() Group by the Ciguatera column
 * @method RefrensQuery groupByFrynursery() Group by the FryNursery column
 * @method RefrensQuery groupByMaturity() Group by the Maturity column
 * @method RefrensQuery groupByDistribution() Group by the Distribution column
 * @method RefrensQuery groupByMortality() Group by the Mortality column
 * @method RefrensQuery groupByFarmingsystem() Group by the FarmingSystem column
 * @method RefrensQuery groupByEggs() Group by the Eggs column
 * @method RefrensQuery groupByHabitats() Group by the Habitats column
 * @method RefrensQuery groupByLengthweight() Group by the LengthWeight column
 * @method RefrensQuery groupByLengthfreq() Group by the LengthFreq column
 * @method RefrensQuery groupByStrains() Group by the Strains column
 * @method RefrensQuery groupByLarvae() Group by the Larvae column
 * @method RefrensQuery groupByEnvironment() Group by the Environment column
 * @method RefrensQuery groupByStocks() Group by the Stocks column
 * @method RefrensQuery groupByGenetics() Group by the Genetics column
 * @method RefrensQuery groupBySpawning() Group by the Spawning column
 * @method RefrensQuery groupByAbundance() Group by the Abundance column
 * @method RefrensQuery groupByCatches() Group by the Catches column
 * @method RefrensQuery groupByElectrophoresis() Group by the Electrophoresis column
 * @method RefrensQuery groupBySexratio() Group by the SexRatio column
 * @method RefrensQuery groupByActivity() Group by the Activity column
 * @method RefrensQuery groupByEffort() Group by the Effort column
 * @method RefrensQuery groupByDiseases() Group by the Diseases column
 * @method RefrensQuery groupByPredators() Group by the Predators column
 * @method RefrensQuery groupByBehavior() Group by the Behavior column
 * @method RefrensQuery groupByManagement() Group by the Management column
 * @method RefrensQuery groupByIntroduction() Group by the Introduction column
 * @method RefrensQuery groupByCompetitors() Group by the Competitors column
 * @method RefrensQuery groupByFood() Group by the Food column
 * @method RefrensQuery groupByNomenclature() Group by the Nomenclature column
 * @method RefrensQuery groupByRevision() Group by the Revision column
 * @method RefrensQuery groupByPhysiology() Group by the Physiology column
 * @method RefrensQuery groupByMorphology() Group by the Morphology column
 * @method RefrensQuery groupByOtolith() Group by the Otolith column
 * @method RefrensQuery groupByFoodconsum() Group by the FoodConsum column
 * @method RefrensQuery groupByOrigdescr() Group by the OrigDescr column
 * @method RefrensQuery groupByOxygen() Group by the Oxygen column
 * @method RefrensQuery groupByMaxlength() Group by the MaxLength column
 * @method RefrensQuery groupByDiet() Group by the Diet column
 * @method RefrensQuery groupByRawdata() Group by the RawData column
 * @method RefrensQuery groupBySpeeds() Group by the Speeds column
 * @method RefrensQuery groupByMaxweight() Group by the MaxWeight column
 * @method RefrensQuery groupByLongevity() Group by the Longevity column
 * @method RefrensQuery groupByKeys() Group by the Keys column
 * @method RefrensQuery groupByBroodstock() Group by the Broodstock column
 * @method RefrensQuery groupByEggnursery() Group by the EggNursery column
 * @method RefrensQuery groupByLarvalnursery() Group by the LarvalNursery column
 * @method RefrensQuery groupByCitation() Group by the Citation column
 * @method RefrensQuery groupByTeam() Group by the Team column
 * @method RefrensQuery groupByAquarium() Group by the Aquarium column
 * @method RefrensQuery groupByProcessing() Group by the Processing column
 * @method RefrensQuery groupByComname() Group by the Comname column
 * @method RefrensQuery groupByPictures() Group by the Pictures column
 * @method RefrensQuery groupByTagrecapture() Group by the Tagrecapture column
 * @method RefrensQuery groupByConservation() Group by the Conservation column
 * @method RefrensQuery groupByChecklist() Group by the Checklist column
 * @method RefrensQuery groupByIsbn() Group by the ISBN column
 * @method RefrensQuery groupByDoi() Group by the DOI column
 * @method RefrensQuery groupByAuthoremail() Group by the AuthorEmail column
 * @method RefrensQuery groupByAuthoradress() Group by the AuthorAdress column
 * @method RefrensQuery groupByPaperurl() Group by the PaperURL column
 * @method RefrensQuery groupByUsed() Group by the Used column
 * @method RefrensQuery groupByEntered() Group by the Entered column
 * @method RefrensQuery groupByDateentered() Group by the DateEntered column
 * @method RefrensQuery groupByModified() Group by the Modified column
 * @method RefrensQuery groupByDatemodified() Group by the DateModified column
 * @method RefrensQuery groupByExpert() Group by the Expert column
 * @method RefrensQuery groupByDatechecked() Group by the DateChecked column
 * @method RefrensQuery groupByTs() Group by the TS column
 *
 * @method RefrensQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RefrensQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RefrensQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Refrens findOne(PropelPDO $con = null) Return the first Refrens matching the query
 * @method Refrens findOneOrCreate(PropelPDO $con = null) Return the first Refrens matching the query, or a new Refrens object populated from the query conditions when no match is found
 *
 * @method Refrens findOneByRefno(int $RefNo) Return the first Refrens filtered by the RefNo column
 * @method Refrens findOneByRmsno(int $RMSNo) Return the first Refrens filtered by the RMSNo column
 * @method Refrens findOneByAuthor(string $Author) Return the first Refrens filtered by the Author column
 * @method Refrens findOneByYear(int $Year) Return the first Refrens filtered by the Year column
 * @method Refrens findOneByTitle(string $Title) Return the first Refrens filtered by the Title column
 * @method Refrens findOneBySource(string $Source) Return the first Refrens filtered by the Source column
 * @method Refrens findOneBySourceunique(string $SourceUnique) Return the first Refrens filtered by the SourceUnique column
 * @method Refrens findOneByFirstauthor(string $FirstAuthor) Return the first Refrens filtered by the FirstAuthor column
 * @method Refrens findOneByLanguage(string $Language) Return the first Refrens filtered by the Language column
 * @method Refrens findOneByComplete(int $Complete) Return the first Refrens filtered by the Complete column
 * @method Refrens findOneByReftype(string $RefType) Return the first Refrens filtered by the RefType column
 * @method Refrens findOneByKeywords(string $Keywords) Return the first Refrens filtered by the Keywords column
 * @method Refrens findOneByRemarks(string $Remarks) Return the first Refrens filtered by the Remarks column
 * @method Refrens findOneByCrossref1(int $CrossRef1) Return the first Refrens filtered by the CrossRef1 column
 * @method Refrens findOneByCrossref2(int $CrossRef2) Return the first Refrens filtered by the CrossRef2 column
 * @method Refrens findOneByCrossref3(int $CrossRef3) Return the first Refrens filtered by the CrossRef3 column
 * @method Refrens findOneByCrossref4(int $CrossRef4) Return the first Refrens filtered by the CrossRef4 column
 * @method Refrens findOneByCrossref5(int $CrossRef5) Return the first Refrens filtered by the CrossRef5 column
 * @method Refrens findOneByCasRefNo(int $CAS_REF_NO) Return the first Refrens filtered by the CAS_REF_NO column
 * @method Refrens findOneByEcology(int $Ecology) Return the first Refrens filtered by the Ecology column
 * @method Refrens findOneByEcotoxicology(int $Ecotoxicology) Return the first Refrens filtered by the Ecotoxicology column
 * @method Refrens findOneByPopdynamics(int $PopDynamics) Return the first Refrens filtered by the PopDynamics column
 * @method Refrens findOneByAquaculture(int $Aquaculture) Return the first Refrens filtered by the Aquaculture column
 * @method Refrens findOneByBrains(int $Brains) Return the first Refrens filtered by the Brains column
 * @method Refrens findOneByReproduction(int $Reproduction) Return the first Refrens filtered by the Reproduction column
 * @method Refrens findOneByMigration(int $Migration) Return the first Refrens filtered by the Migration column
 * @method Refrens findOneByGrowth(int $Growth) Return the first Refrens filtered by the Growth column
 * @method Refrens findOneByRecruitment(int $Recruitment) Return the first Refrens filtered by the Recruitment column
 * @method Refrens findOneByVision(int $Vision) Return the first Refrens filtered by the Vision column
 * @method Refrens findOneByCiguatera(int $Ciguatera) Return the first Refrens filtered by the Ciguatera column
 * @method Refrens findOneByFrynursery(int $FryNursery) Return the first Refrens filtered by the FryNursery column
 * @method Refrens findOneByMaturity(int $Maturity) Return the first Refrens filtered by the Maturity column
 * @method Refrens findOneByDistribution(int $Distribution) Return the first Refrens filtered by the Distribution column
 * @method Refrens findOneByMortality(int $Mortality) Return the first Refrens filtered by the Mortality column
 * @method Refrens findOneByFarmingsystem(int $FarmingSystem) Return the first Refrens filtered by the FarmingSystem column
 * @method Refrens findOneByEggs(int $Eggs) Return the first Refrens filtered by the Eggs column
 * @method Refrens findOneByHabitats(int $Habitats) Return the first Refrens filtered by the Habitats column
 * @method Refrens findOneByLengthweight(int $LengthWeight) Return the first Refrens filtered by the LengthWeight column
 * @method Refrens findOneByLengthfreq(int $LengthFreq) Return the first Refrens filtered by the LengthFreq column
 * @method Refrens findOneByStrains(int $Strains) Return the first Refrens filtered by the Strains column
 * @method Refrens findOneByLarvae(int $Larvae) Return the first Refrens filtered by the Larvae column
 * @method Refrens findOneByEnvironment(int $Environment) Return the first Refrens filtered by the Environment column
 * @method Refrens findOneByStocks(int $Stocks) Return the first Refrens filtered by the Stocks column
 * @method Refrens findOneByGenetics(int $Genetics) Return the first Refrens filtered by the Genetics column
 * @method Refrens findOneBySpawning(int $Spawning) Return the first Refrens filtered by the Spawning column
 * @method Refrens findOneByAbundance(int $Abundance) Return the first Refrens filtered by the Abundance column
 * @method Refrens findOneByCatches(int $Catches) Return the first Refrens filtered by the Catches column
 * @method Refrens findOneByElectrophoresis(int $Electrophoresis) Return the first Refrens filtered by the Electrophoresis column
 * @method Refrens findOneBySexratio(int $SexRatio) Return the first Refrens filtered by the SexRatio column
 * @method Refrens findOneByActivity(int $Activity) Return the first Refrens filtered by the Activity column
 * @method Refrens findOneByEffort(int $Effort) Return the first Refrens filtered by the Effort column
 * @method Refrens findOneByDiseases(int $Diseases) Return the first Refrens filtered by the Diseases column
 * @method Refrens findOneByPredators(int $Predators) Return the first Refrens filtered by the Predators column
 * @method Refrens findOneByBehavior(int $Behavior) Return the first Refrens filtered by the Behavior column
 * @method Refrens findOneByManagement(int $Management) Return the first Refrens filtered by the Management column
 * @method Refrens findOneByIntroduction(int $Introduction) Return the first Refrens filtered by the Introduction column
 * @method Refrens findOneByCompetitors(int $Competitors) Return the first Refrens filtered by the Competitors column
 * @method Refrens findOneByFood(int $Food) Return the first Refrens filtered by the Food column
 * @method Refrens findOneByNomenclature(int $Nomenclature) Return the first Refrens filtered by the Nomenclature column
 * @method Refrens findOneByRevision(int $Revision) Return the first Refrens filtered by the Revision column
 * @method Refrens findOneByPhysiology(int $Physiology) Return the first Refrens filtered by the Physiology column
 * @method Refrens findOneByMorphology(int $Morphology) Return the first Refrens filtered by the Morphology column
 * @method Refrens findOneByOtolith(int $Otolith) Return the first Refrens filtered by the Otolith column
 * @method Refrens findOneByFoodconsum(int $FoodConsum) Return the first Refrens filtered by the FoodConsum column
 * @method Refrens findOneByOrigdescr(int $OrigDescr) Return the first Refrens filtered by the OrigDescr column
 * @method Refrens findOneByOxygen(int $Oxygen) Return the first Refrens filtered by the Oxygen column
 * @method Refrens findOneByMaxlength(int $MaxLength) Return the first Refrens filtered by the MaxLength column
 * @method Refrens findOneByDiet(int $Diet) Return the first Refrens filtered by the Diet column
 * @method Refrens findOneByRawdata(int $RawData) Return the first Refrens filtered by the RawData column
 * @method Refrens findOneBySpeeds(int $Speeds) Return the first Refrens filtered by the Speeds column
 * @method Refrens findOneByMaxweight(int $MaxWeight) Return the first Refrens filtered by the MaxWeight column
 * @method Refrens findOneByLongevity(int $Longevity) Return the first Refrens filtered by the Longevity column
 * @method Refrens findOneByKeys(int $Keys) Return the first Refrens filtered by the Keys column
 * @method Refrens findOneByBroodstock(int $Broodstock) Return the first Refrens filtered by the Broodstock column
 * @method Refrens findOneByEggnursery(int $EggNursery) Return the first Refrens filtered by the EggNursery column
 * @method Refrens findOneByLarvalnursery(int $LarvalNursery) Return the first Refrens filtered by the LarvalNursery column
 * @method Refrens findOneByCitation(int $Citation) Return the first Refrens filtered by the Citation column
 * @method Refrens findOneByTeam(int $Team) Return the first Refrens filtered by the Team column
 * @method Refrens findOneByAquarium(int $Aquarium) Return the first Refrens filtered by the Aquarium column
 * @method Refrens findOneByProcessing(int $Processing) Return the first Refrens filtered by the Processing column
 * @method Refrens findOneByComname(int $Comname) Return the first Refrens filtered by the Comname column
 * @method Refrens findOneByPictures(int $Pictures) Return the first Refrens filtered by the Pictures column
 * @method Refrens findOneByTagrecapture(int $Tagrecapture) Return the first Refrens filtered by the Tagrecapture column
 * @method Refrens findOneByConservation(int $Conservation) Return the first Refrens filtered by the Conservation column
 * @method Refrens findOneByChecklist(int $Checklist) Return the first Refrens filtered by the Checklist column
 * @method Refrens findOneByIsbn(string $ISBN) Return the first Refrens filtered by the ISBN column
 * @method Refrens findOneByDoi(string $DOI) Return the first Refrens filtered by the DOI column
 * @method Refrens findOneByAuthoremail(string $AuthorEmail) Return the first Refrens filtered by the AuthorEmail column
 * @method Refrens findOneByAuthoradress(string $AuthorAdress) Return the first Refrens filtered by the AuthorAdress column
 * @method Refrens findOneByPaperurl(string $PaperURL) Return the first Refrens filtered by the PaperURL column
 * @method Refrens findOneByUsed(string $Used) Return the first Refrens filtered by the Used column
 * @method Refrens findOneByEntered(int $Entered) Return the first Refrens filtered by the Entered column
 * @method Refrens findOneByDateentered(string $DateEntered) Return the first Refrens filtered by the DateEntered column
 * @method Refrens findOneByModified(int $Modified) Return the first Refrens filtered by the Modified column
 * @method Refrens findOneByDatemodified(string $DateModified) Return the first Refrens filtered by the DateModified column
 * @method Refrens findOneByExpert(int $Expert) Return the first Refrens filtered by the Expert column
 * @method Refrens findOneByDatechecked(string $DateChecked) Return the first Refrens filtered by the DateChecked column
 * @method Refrens findOneByTs(string $TS) Return the first Refrens filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Refrens objects filtered by the autoctr column
 * @method array findByRefno(int $RefNo) Return Refrens objects filtered by the RefNo column
 * @method array findByRmsno(int $RMSNo) Return Refrens objects filtered by the RMSNo column
 * @method array findByAuthor(string $Author) Return Refrens objects filtered by the Author column
 * @method array findByYear(int $Year) Return Refrens objects filtered by the Year column
 * @method array findByTitle(string $Title) Return Refrens objects filtered by the Title column
 * @method array findBySource(string $Source) Return Refrens objects filtered by the Source column
 * @method array findBySourceunique(string $SourceUnique) Return Refrens objects filtered by the SourceUnique column
 * @method array findByFirstauthor(string $FirstAuthor) Return Refrens objects filtered by the FirstAuthor column
 * @method array findByLanguage(string $Language) Return Refrens objects filtered by the Language column
 * @method array findByComplete(int $Complete) Return Refrens objects filtered by the Complete column
 * @method array findByReftype(string $RefType) Return Refrens objects filtered by the RefType column
 * @method array findByKeywords(string $Keywords) Return Refrens objects filtered by the Keywords column
 * @method array findByRemarks(string $Remarks) Return Refrens objects filtered by the Remarks column
 * @method array findByCrossref1(int $CrossRef1) Return Refrens objects filtered by the CrossRef1 column
 * @method array findByCrossref2(int $CrossRef2) Return Refrens objects filtered by the CrossRef2 column
 * @method array findByCrossref3(int $CrossRef3) Return Refrens objects filtered by the CrossRef3 column
 * @method array findByCrossref4(int $CrossRef4) Return Refrens objects filtered by the CrossRef4 column
 * @method array findByCrossref5(int $CrossRef5) Return Refrens objects filtered by the CrossRef5 column
 * @method array findByCasRefNo(int $CAS_REF_NO) Return Refrens objects filtered by the CAS_REF_NO column
 * @method array findByEcology(int $Ecology) Return Refrens objects filtered by the Ecology column
 * @method array findByEcotoxicology(int $Ecotoxicology) Return Refrens objects filtered by the Ecotoxicology column
 * @method array findByPopdynamics(int $PopDynamics) Return Refrens objects filtered by the PopDynamics column
 * @method array findByAquaculture(int $Aquaculture) Return Refrens objects filtered by the Aquaculture column
 * @method array findByBrains(int $Brains) Return Refrens objects filtered by the Brains column
 * @method array findByReproduction(int $Reproduction) Return Refrens objects filtered by the Reproduction column
 * @method array findByMigration(int $Migration) Return Refrens objects filtered by the Migration column
 * @method array findByGrowth(int $Growth) Return Refrens objects filtered by the Growth column
 * @method array findByRecruitment(int $Recruitment) Return Refrens objects filtered by the Recruitment column
 * @method array findByVision(int $Vision) Return Refrens objects filtered by the Vision column
 * @method array findByCiguatera(int $Ciguatera) Return Refrens objects filtered by the Ciguatera column
 * @method array findByFrynursery(int $FryNursery) Return Refrens objects filtered by the FryNursery column
 * @method array findByMaturity(int $Maturity) Return Refrens objects filtered by the Maturity column
 * @method array findByDistribution(int $Distribution) Return Refrens objects filtered by the Distribution column
 * @method array findByMortality(int $Mortality) Return Refrens objects filtered by the Mortality column
 * @method array findByFarmingsystem(int $FarmingSystem) Return Refrens objects filtered by the FarmingSystem column
 * @method array findByEggs(int $Eggs) Return Refrens objects filtered by the Eggs column
 * @method array findByHabitats(int $Habitats) Return Refrens objects filtered by the Habitats column
 * @method array findByLengthweight(int $LengthWeight) Return Refrens objects filtered by the LengthWeight column
 * @method array findByLengthfreq(int $LengthFreq) Return Refrens objects filtered by the LengthFreq column
 * @method array findByStrains(int $Strains) Return Refrens objects filtered by the Strains column
 * @method array findByLarvae(int $Larvae) Return Refrens objects filtered by the Larvae column
 * @method array findByEnvironment(int $Environment) Return Refrens objects filtered by the Environment column
 * @method array findByStocks(int $Stocks) Return Refrens objects filtered by the Stocks column
 * @method array findByGenetics(int $Genetics) Return Refrens objects filtered by the Genetics column
 * @method array findBySpawning(int $Spawning) Return Refrens objects filtered by the Spawning column
 * @method array findByAbundance(int $Abundance) Return Refrens objects filtered by the Abundance column
 * @method array findByCatches(int $Catches) Return Refrens objects filtered by the Catches column
 * @method array findByElectrophoresis(int $Electrophoresis) Return Refrens objects filtered by the Electrophoresis column
 * @method array findBySexratio(int $SexRatio) Return Refrens objects filtered by the SexRatio column
 * @method array findByActivity(int $Activity) Return Refrens objects filtered by the Activity column
 * @method array findByEffort(int $Effort) Return Refrens objects filtered by the Effort column
 * @method array findByDiseases(int $Diseases) Return Refrens objects filtered by the Diseases column
 * @method array findByPredators(int $Predators) Return Refrens objects filtered by the Predators column
 * @method array findByBehavior(int $Behavior) Return Refrens objects filtered by the Behavior column
 * @method array findByManagement(int $Management) Return Refrens objects filtered by the Management column
 * @method array findByIntroduction(int $Introduction) Return Refrens objects filtered by the Introduction column
 * @method array findByCompetitors(int $Competitors) Return Refrens objects filtered by the Competitors column
 * @method array findByFood(int $Food) Return Refrens objects filtered by the Food column
 * @method array findByNomenclature(int $Nomenclature) Return Refrens objects filtered by the Nomenclature column
 * @method array findByRevision(int $Revision) Return Refrens objects filtered by the Revision column
 * @method array findByPhysiology(int $Physiology) Return Refrens objects filtered by the Physiology column
 * @method array findByMorphology(int $Morphology) Return Refrens objects filtered by the Morphology column
 * @method array findByOtolith(int $Otolith) Return Refrens objects filtered by the Otolith column
 * @method array findByFoodconsum(int $FoodConsum) Return Refrens objects filtered by the FoodConsum column
 * @method array findByOrigdescr(int $OrigDescr) Return Refrens objects filtered by the OrigDescr column
 * @method array findByOxygen(int $Oxygen) Return Refrens objects filtered by the Oxygen column
 * @method array findByMaxlength(int $MaxLength) Return Refrens objects filtered by the MaxLength column
 * @method array findByDiet(int $Diet) Return Refrens objects filtered by the Diet column
 * @method array findByRawdata(int $RawData) Return Refrens objects filtered by the RawData column
 * @method array findBySpeeds(int $Speeds) Return Refrens objects filtered by the Speeds column
 * @method array findByMaxweight(int $MaxWeight) Return Refrens objects filtered by the MaxWeight column
 * @method array findByLongevity(int $Longevity) Return Refrens objects filtered by the Longevity column
 * @method array findByKeys(int $Keys) Return Refrens objects filtered by the Keys column
 * @method array findByBroodstock(int $Broodstock) Return Refrens objects filtered by the Broodstock column
 * @method array findByEggnursery(int $EggNursery) Return Refrens objects filtered by the EggNursery column
 * @method array findByLarvalnursery(int $LarvalNursery) Return Refrens objects filtered by the LarvalNursery column
 * @method array findByCitation(int $Citation) Return Refrens objects filtered by the Citation column
 * @method array findByTeam(int $Team) Return Refrens objects filtered by the Team column
 * @method array findByAquarium(int $Aquarium) Return Refrens objects filtered by the Aquarium column
 * @method array findByProcessing(int $Processing) Return Refrens objects filtered by the Processing column
 * @method array findByComname(int $Comname) Return Refrens objects filtered by the Comname column
 * @method array findByPictures(int $Pictures) Return Refrens objects filtered by the Pictures column
 * @method array findByTagrecapture(int $Tagrecapture) Return Refrens objects filtered by the Tagrecapture column
 * @method array findByConservation(int $Conservation) Return Refrens objects filtered by the Conservation column
 * @method array findByChecklist(int $Checklist) Return Refrens objects filtered by the Checklist column
 * @method array findByIsbn(string $ISBN) Return Refrens objects filtered by the ISBN column
 * @method array findByDoi(string $DOI) Return Refrens objects filtered by the DOI column
 * @method array findByAuthoremail(string $AuthorEmail) Return Refrens objects filtered by the AuthorEmail column
 * @method array findByAuthoradress(string $AuthorAdress) Return Refrens objects filtered by the AuthorAdress column
 * @method array findByPaperurl(string $PaperURL) Return Refrens objects filtered by the PaperURL column
 * @method array findByUsed(string $Used) Return Refrens objects filtered by the Used column
 * @method array findByEntered(int $Entered) Return Refrens objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Refrens objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Refrens objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Refrens objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Refrens objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Refrens objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Refrens objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseRefrensQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRefrensQuery object.
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
            $modelName = 'Refrens';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RefrensQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RefrensQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RefrensQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RefrensQuery) {
            return $criteria;
        }
        $query = new RefrensQuery(null, null, $modelAlias);

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
     * @return   Refrens|Refrens[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RefrensPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RefrensPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Refrens A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAutoctr($key, $con = null)
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
     * @return                 Refrens A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `RefNo`, `RMSNo`, `Author`, `Year`, `Title`, `Source`, `SourceUnique`, `FirstAuthor`, `Language`, `Complete`, `RefType`, `Keywords`, `Remarks`, `CrossRef1`, `CrossRef2`, `CrossRef3`, `CrossRef4`, `CrossRef5`, `CAS_REF_NO`, `Ecology`, `Ecotoxicology`, `PopDynamics`, `Aquaculture`, `Brains`, `Reproduction`, `Migration`, `Growth`, `Recruitment`, `Vision`, `Ciguatera`, `FryNursery`, `Maturity`, `Distribution`, `Mortality`, `FarmingSystem`, `Eggs`, `Habitats`, `LengthWeight`, `LengthFreq`, `Strains`, `Larvae`, `Environment`, `Stocks`, `Genetics`, `Spawning`, `Abundance`, `Catches`, `Electrophoresis`, `SexRatio`, `Activity`, `Effort`, `Diseases`, `Predators`, `Behavior`, `Management`, `Introduction`, `Competitors`, `Food`, `Nomenclature`, `Revision`, `Physiology`, `Morphology`, `Otolith`, `FoodConsum`, `OrigDescr`, `Oxygen`, `MaxLength`, `Diet`, `RawData`, `Speeds`, `MaxWeight`, `Longevity`, `Keys`, `Broodstock`, `EggNursery`, `LarvalNursery`, `Citation`, `Team`, `Aquarium`, `Processing`, `Comname`, `Pictures`, `Tagrecapture`, `Conservation`, `Checklist`, `ISBN`, `DOI`, `AuthorEmail`, `AuthorAdress`, `PaperURL`, `Used`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `refrens` WHERE `autoctr` = :p0';
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
            $obj = new Refrens();
            $obj->hydrate($row);
            RefrensPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Refrens|Refrens[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Refrens[]|mixed the list of results, formatted by the current formatter
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
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RefrensPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RefrensPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(RefrensPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(RefrensPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the RefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByRefno(1234); // WHERE RefNo = 1234
     * $query->filterByRefno(array(12, 34)); // WHERE RefNo IN (12, 34)
     * $query->filterByRefno(array('min' => 12)); // WHERE RefNo >= 12
     * $query->filterByRefno(array('max' => 12)); // WHERE RefNo <= 12
     * </code>
     *
     * @param     mixed $refno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(RefrensPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(RefrensPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::REFNO, $refno, $comparison);
    }

    /**
     * Filter the query on the RMSNo column
     *
     * Example usage:
     * <code>
     * $query->filterByRmsno(1234); // WHERE RMSNo = 1234
     * $query->filterByRmsno(array(12, 34)); // WHERE RMSNo IN (12, 34)
     * $query->filterByRmsno(array('min' => 12)); // WHERE RMSNo >= 12
     * $query->filterByRmsno(array('max' => 12)); // WHERE RMSNo <= 12
     * </code>
     *
     * @param     mixed $rmsno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByRmsno($rmsno = null, $comparison = null)
    {
        if (is_array($rmsno)) {
            $useMinMax = false;
            if (isset($rmsno['min'])) {
                $this->addUsingAlias(RefrensPeer::RMSNO, $rmsno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rmsno['max'])) {
                $this->addUsingAlias(RefrensPeer::RMSNO, $rmsno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::RMSNO, $rmsno, $comparison);
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
     * @return RefrensQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RefrensPeer::AUTHOR, $author, $comparison);
    }

    /**
     * Filter the query on the Year column
     *
     * Example usage:
     * <code>
     * $query->filterByYear(1234); // WHERE Year = 1234
     * $query->filterByYear(array(12, 34)); // WHERE Year IN (12, 34)
     * $query->filterByYear(array('min' => 12)); // WHERE Year >= 12
     * $query->filterByYear(array('max' => 12)); // WHERE Year <= 12
     * </code>
     *
     * @param     mixed $year The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(RefrensPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(RefrensPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the Title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE Title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE Title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RefrensPeer::TITLE, $title, $comparison);
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
     * @return RefrensQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RefrensPeer::SOURCE, $source, $comparison);
    }

    /**
     * Filter the query on the SourceUnique column
     *
     * Example usage:
     * <code>
     * $query->filterBySourceunique('fooValue');   // WHERE SourceUnique = 'fooValue'
     * $query->filterBySourceunique('%fooValue%'); // WHERE SourceUnique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sourceunique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterBySourceunique($sourceunique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sourceunique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sourceunique)) {
                $sourceunique = str_replace('*', '%', $sourceunique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RefrensPeer::SOURCEUNIQUE, $sourceunique, $comparison);
    }

    /**
     * Filter the query on the FirstAuthor column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstauthor('fooValue');   // WHERE FirstAuthor = 'fooValue'
     * $query->filterByFirstauthor('%fooValue%'); // WHERE FirstAuthor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstauthor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByFirstauthor($firstauthor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstauthor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $firstauthor)) {
                $firstauthor = str_replace('*', '%', $firstauthor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RefrensPeer::FIRSTAUTHOR, $firstauthor, $comparison);
    }

    /**
     * Filter the query on the Language column
     *
     * Example usage:
     * <code>
     * $query->filterByLanguage('fooValue');   // WHERE Language = 'fooValue'
     * $query->filterByLanguage('%fooValue%'); // WHERE Language LIKE '%fooValue%'
     * </code>
     *
     * @param     string $language The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByLanguage($language = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($language)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $language)) {
                $language = str_replace('*', '%', $language);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RefrensPeer::LANGUAGE, $language, $comparison);
    }

    /**
     * Filter the query on the Complete column
     *
     * Example usage:
     * <code>
     * $query->filterByComplete(1234); // WHERE Complete = 1234
     * $query->filterByComplete(array(12, 34)); // WHERE Complete IN (12, 34)
     * $query->filterByComplete(array('min' => 12)); // WHERE Complete >= 12
     * $query->filterByComplete(array('max' => 12)); // WHERE Complete <= 12
     * </code>
     *
     * @param     mixed $complete The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByComplete($complete = null, $comparison = null)
    {
        if (is_array($complete)) {
            $useMinMax = false;
            if (isset($complete['min'])) {
                $this->addUsingAlias(RefrensPeer::COMPLETE, $complete['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($complete['max'])) {
                $this->addUsingAlias(RefrensPeer::COMPLETE, $complete['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::COMPLETE, $complete, $comparison);
    }

    /**
     * Filter the query on the RefType column
     *
     * Example usage:
     * <code>
     * $query->filterByReftype('fooValue');   // WHERE RefType = 'fooValue'
     * $query->filterByReftype('%fooValue%'); // WHERE RefType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reftype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByReftype($reftype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reftype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reftype)) {
                $reftype = str_replace('*', '%', $reftype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RefrensPeer::REFTYPE, $reftype, $comparison);
    }

    /**
     * Filter the query on the Keywords column
     *
     * Example usage:
     * <code>
     * $query->filterByKeywords('fooValue');   // WHERE Keywords = 'fooValue'
     * $query->filterByKeywords('%fooValue%'); // WHERE Keywords LIKE '%fooValue%'
     * </code>
     *
     * @param     string $keywords The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByKeywords($keywords = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($keywords)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $keywords)) {
                $keywords = str_replace('*', '%', $keywords);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RefrensPeer::KEYWORDS, $keywords, $comparison);
    }

    /**
     * Filter the query on the Remarks column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarks('fooValue');   // WHERE Remarks = 'fooValue'
     * $query->filterByRemarks('%fooValue%'); // WHERE Remarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarks)) {
                $remarks = str_replace('*', '%', $remarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RefrensPeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the CrossRef1 column
     *
     * Example usage:
     * <code>
     * $query->filterByCrossref1(1234); // WHERE CrossRef1 = 1234
     * $query->filterByCrossref1(array(12, 34)); // WHERE CrossRef1 IN (12, 34)
     * $query->filterByCrossref1(array('min' => 12)); // WHERE CrossRef1 >= 12
     * $query->filterByCrossref1(array('max' => 12)); // WHERE CrossRef1 <= 12
     * </code>
     *
     * @param     mixed $crossref1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByCrossref1($crossref1 = null, $comparison = null)
    {
        if (is_array($crossref1)) {
            $useMinMax = false;
            if (isset($crossref1['min'])) {
                $this->addUsingAlias(RefrensPeer::CROSSREF1, $crossref1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crossref1['max'])) {
                $this->addUsingAlias(RefrensPeer::CROSSREF1, $crossref1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::CROSSREF1, $crossref1, $comparison);
    }

    /**
     * Filter the query on the CrossRef2 column
     *
     * Example usage:
     * <code>
     * $query->filterByCrossref2(1234); // WHERE CrossRef2 = 1234
     * $query->filterByCrossref2(array(12, 34)); // WHERE CrossRef2 IN (12, 34)
     * $query->filterByCrossref2(array('min' => 12)); // WHERE CrossRef2 >= 12
     * $query->filterByCrossref2(array('max' => 12)); // WHERE CrossRef2 <= 12
     * </code>
     *
     * @param     mixed $crossref2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByCrossref2($crossref2 = null, $comparison = null)
    {
        if (is_array($crossref2)) {
            $useMinMax = false;
            if (isset($crossref2['min'])) {
                $this->addUsingAlias(RefrensPeer::CROSSREF2, $crossref2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crossref2['max'])) {
                $this->addUsingAlias(RefrensPeer::CROSSREF2, $crossref2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::CROSSREF2, $crossref2, $comparison);
    }

    /**
     * Filter the query on the CrossRef3 column
     *
     * Example usage:
     * <code>
     * $query->filterByCrossref3(1234); // WHERE CrossRef3 = 1234
     * $query->filterByCrossref3(array(12, 34)); // WHERE CrossRef3 IN (12, 34)
     * $query->filterByCrossref3(array('min' => 12)); // WHERE CrossRef3 >= 12
     * $query->filterByCrossref3(array('max' => 12)); // WHERE CrossRef3 <= 12
     * </code>
     *
     * @param     mixed $crossref3 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByCrossref3($crossref3 = null, $comparison = null)
    {
        if (is_array($crossref3)) {
            $useMinMax = false;
            if (isset($crossref3['min'])) {
                $this->addUsingAlias(RefrensPeer::CROSSREF3, $crossref3['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crossref3['max'])) {
                $this->addUsingAlias(RefrensPeer::CROSSREF3, $crossref3['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::CROSSREF3, $crossref3, $comparison);
    }

    /**
     * Filter the query on the CrossRef4 column
     *
     * Example usage:
     * <code>
     * $query->filterByCrossref4(1234); // WHERE CrossRef4 = 1234
     * $query->filterByCrossref4(array(12, 34)); // WHERE CrossRef4 IN (12, 34)
     * $query->filterByCrossref4(array('min' => 12)); // WHERE CrossRef4 >= 12
     * $query->filterByCrossref4(array('max' => 12)); // WHERE CrossRef4 <= 12
     * </code>
     *
     * @param     mixed $crossref4 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByCrossref4($crossref4 = null, $comparison = null)
    {
        if (is_array($crossref4)) {
            $useMinMax = false;
            if (isset($crossref4['min'])) {
                $this->addUsingAlias(RefrensPeer::CROSSREF4, $crossref4['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crossref4['max'])) {
                $this->addUsingAlias(RefrensPeer::CROSSREF4, $crossref4['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::CROSSREF4, $crossref4, $comparison);
    }

    /**
     * Filter the query on the CrossRef5 column
     *
     * Example usage:
     * <code>
     * $query->filterByCrossref5(1234); // WHERE CrossRef5 = 1234
     * $query->filterByCrossref5(array(12, 34)); // WHERE CrossRef5 IN (12, 34)
     * $query->filterByCrossref5(array('min' => 12)); // WHERE CrossRef5 >= 12
     * $query->filterByCrossref5(array('max' => 12)); // WHERE CrossRef5 <= 12
     * </code>
     *
     * @param     mixed $crossref5 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByCrossref5($crossref5 = null, $comparison = null)
    {
        if (is_array($crossref5)) {
            $useMinMax = false;
            if (isset($crossref5['min'])) {
                $this->addUsingAlias(RefrensPeer::CROSSREF5, $crossref5['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crossref5['max'])) {
                $this->addUsingAlias(RefrensPeer::CROSSREF5, $crossref5['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::CROSSREF5, $crossref5, $comparison);
    }

    /**
     * Filter the query on the CAS_REF_NO column
     *
     * Example usage:
     * <code>
     * $query->filterByCasRefNo(1234); // WHERE CAS_REF_NO = 1234
     * $query->filterByCasRefNo(array(12, 34)); // WHERE CAS_REF_NO IN (12, 34)
     * $query->filterByCasRefNo(array('min' => 12)); // WHERE CAS_REF_NO >= 12
     * $query->filterByCasRefNo(array('max' => 12)); // WHERE CAS_REF_NO <= 12
     * </code>
     *
     * @param     mixed $casRefNo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByCasRefNo($casRefNo = null, $comparison = null)
    {
        if (is_array($casRefNo)) {
            $useMinMax = false;
            if (isset($casRefNo['min'])) {
                $this->addUsingAlias(RefrensPeer::CAS_REF_NO, $casRefNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($casRefNo['max'])) {
                $this->addUsingAlias(RefrensPeer::CAS_REF_NO, $casRefNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::CAS_REF_NO, $casRefNo, $comparison);
    }

    /**
     * Filter the query on the Ecology column
     *
     * Example usage:
     * <code>
     * $query->filterByEcology(1234); // WHERE Ecology = 1234
     * $query->filterByEcology(array(12, 34)); // WHERE Ecology IN (12, 34)
     * $query->filterByEcology(array('min' => 12)); // WHERE Ecology >= 12
     * $query->filterByEcology(array('max' => 12)); // WHERE Ecology <= 12
     * </code>
     *
     * @param     mixed $ecology The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByEcology($ecology = null, $comparison = null)
    {
        if (is_array($ecology)) {
            $useMinMax = false;
            if (isset($ecology['min'])) {
                $this->addUsingAlias(RefrensPeer::ECOLOGY, $ecology['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ecology['max'])) {
                $this->addUsingAlias(RefrensPeer::ECOLOGY, $ecology['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::ECOLOGY, $ecology, $comparison);
    }

    /**
     * Filter the query on the Ecotoxicology column
     *
     * Example usage:
     * <code>
     * $query->filterByEcotoxicology(1234); // WHERE Ecotoxicology = 1234
     * $query->filterByEcotoxicology(array(12, 34)); // WHERE Ecotoxicology IN (12, 34)
     * $query->filterByEcotoxicology(array('min' => 12)); // WHERE Ecotoxicology >= 12
     * $query->filterByEcotoxicology(array('max' => 12)); // WHERE Ecotoxicology <= 12
     * </code>
     *
     * @param     mixed $ecotoxicology The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByEcotoxicology($ecotoxicology = null, $comparison = null)
    {
        if (is_array($ecotoxicology)) {
            $useMinMax = false;
            if (isset($ecotoxicology['min'])) {
                $this->addUsingAlias(RefrensPeer::ECOTOXICOLOGY, $ecotoxicology['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ecotoxicology['max'])) {
                $this->addUsingAlias(RefrensPeer::ECOTOXICOLOGY, $ecotoxicology['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::ECOTOXICOLOGY, $ecotoxicology, $comparison);
    }

    /**
     * Filter the query on the PopDynamics column
     *
     * Example usage:
     * <code>
     * $query->filterByPopdynamics(1234); // WHERE PopDynamics = 1234
     * $query->filterByPopdynamics(array(12, 34)); // WHERE PopDynamics IN (12, 34)
     * $query->filterByPopdynamics(array('min' => 12)); // WHERE PopDynamics >= 12
     * $query->filterByPopdynamics(array('max' => 12)); // WHERE PopDynamics <= 12
     * </code>
     *
     * @param     mixed $popdynamics The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByPopdynamics($popdynamics = null, $comparison = null)
    {
        if (is_array($popdynamics)) {
            $useMinMax = false;
            if (isset($popdynamics['min'])) {
                $this->addUsingAlias(RefrensPeer::POPDYNAMICS, $popdynamics['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($popdynamics['max'])) {
                $this->addUsingAlias(RefrensPeer::POPDYNAMICS, $popdynamics['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::POPDYNAMICS, $popdynamics, $comparison);
    }

    /**
     * Filter the query on the Aquaculture column
     *
     * Example usage:
     * <code>
     * $query->filterByAquaculture(1234); // WHERE Aquaculture = 1234
     * $query->filterByAquaculture(array(12, 34)); // WHERE Aquaculture IN (12, 34)
     * $query->filterByAquaculture(array('min' => 12)); // WHERE Aquaculture >= 12
     * $query->filterByAquaculture(array('max' => 12)); // WHERE Aquaculture <= 12
     * </code>
     *
     * @param     mixed $aquaculture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByAquaculture($aquaculture = null, $comparison = null)
    {
        if (is_array($aquaculture)) {
            $useMinMax = false;
            if (isset($aquaculture['min'])) {
                $this->addUsingAlias(RefrensPeer::AQUACULTURE, $aquaculture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aquaculture['max'])) {
                $this->addUsingAlias(RefrensPeer::AQUACULTURE, $aquaculture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::AQUACULTURE, $aquaculture, $comparison);
    }

    /**
     * Filter the query on the Brains column
     *
     * Example usage:
     * <code>
     * $query->filterByBrains(1234); // WHERE Brains = 1234
     * $query->filterByBrains(array(12, 34)); // WHERE Brains IN (12, 34)
     * $query->filterByBrains(array('min' => 12)); // WHERE Brains >= 12
     * $query->filterByBrains(array('max' => 12)); // WHERE Brains <= 12
     * </code>
     *
     * @param     mixed $brains The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByBrains($brains = null, $comparison = null)
    {
        if (is_array($brains)) {
            $useMinMax = false;
            if (isset($brains['min'])) {
                $this->addUsingAlias(RefrensPeer::BRAINS, $brains['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($brains['max'])) {
                $this->addUsingAlias(RefrensPeer::BRAINS, $brains['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::BRAINS, $brains, $comparison);
    }

    /**
     * Filter the query on the Reproduction column
     *
     * Example usage:
     * <code>
     * $query->filterByReproduction(1234); // WHERE Reproduction = 1234
     * $query->filterByReproduction(array(12, 34)); // WHERE Reproduction IN (12, 34)
     * $query->filterByReproduction(array('min' => 12)); // WHERE Reproduction >= 12
     * $query->filterByReproduction(array('max' => 12)); // WHERE Reproduction <= 12
     * </code>
     *
     * @param     mixed $reproduction The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByReproduction($reproduction = null, $comparison = null)
    {
        if (is_array($reproduction)) {
            $useMinMax = false;
            if (isset($reproduction['min'])) {
                $this->addUsingAlias(RefrensPeer::REPRODUCTION, $reproduction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reproduction['max'])) {
                $this->addUsingAlias(RefrensPeer::REPRODUCTION, $reproduction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::REPRODUCTION, $reproduction, $comparison);
    }

    /**
     * Filter the query on the Migration column
     *
     * Example usage:
     * <code>
     * $query->filterByMigration(1234); // WHERE Migration = 1234
     * $query->filterByMigration(array(12, 34)); // WHERE Migration IN (12, 34)
     * $query->filterByMigration(array('min' => 12)); // WHERE Migration >= 12
     * $query->filterByMigration(array('max' => 12)); // WHERE Migration <= 12
     * </code>
     *
     * @param     mixed $migration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByMigration($migration = null, $comparison = null)
    {
        if (is_array($migration)) {
            $useMinMax = false;
            if (isset($migration['min'])) {
                $this->addUsingAlias(RefrensPeer::MIGRATION, $migration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($migration['max'])) {
                $this->addUsingAlias(RefrensPeer::MIGRATION, $migration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::MIGRATION, $migration, $comparison);
    }

    /**
     * Filter the query on the Growth column
     *
     * Example usage:
     * <code>
     * $query->filterByGrowth(1234); // WHERE Growth = 1234
     * $query->filterByGrowth(array(12, 34)); // WHERE Growth IN (12, 34)
     * $query->filterByGrowth(array('min' => 12)); // WHERE Growth >= 12
     * $query->filterByGrowth(array('max' => 12)); // WHERE Growth <= 12
     * </code>
     *
     * @param     mixed $growth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByGrowth($growth = null, $comparison = null)
    {
        if (is_array($growth)) {
            $useMinMax = false;
            if (isset($growth['min'])) {
                $this->addUsingAlias(RefrensPeer::GROWTH, $growth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($growth['max'])) {
                $this->addUsingAlias(RefrensPeer::GROWTH, $growth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::GROWTH, $growth, $comparison);
    }

    /**
     * Filter the query on the Recruitment column
     *
     * Example usage:
     * <code>
     * $query->filterByRecruitment(1234); // WHERE Recruitment = 1234
     * $query->filterByRecruitment(array(12, 34)); // WHERE Recruitment IN (12, 34)
     * $query->filterByRecruitment(array('min' => 12)); // WHERE Recruitment >= 12
     * $query->filterByRecruitment(array('max' => 12)); // WHERE Recruitment <= 12
     * </code>
     *
     * @param     mixed $recruitment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByRecruitment($recruitment = null, $comparison = null)
    {
        if (is_array($recruitment)) {
            $useMinMax = false;
            if (isset($recruitment['min'])) {
                $this->addUsingAlias(RefrensPeer::RECRUITMENT, $recruitment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($recruitment['max'])) {
                $this->addUsingAlias(RefrensPeer::RECRUITMENT, $recruitment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::RECRUITMENT, $recruitment, $comparison);
    }

    /**
     * Filter the query on the Vision column
     *
     * Example usage:
     * <code>
     * $query->filterByVision(1234); // WHERE Vision = 1234
     * $query->filterByVision(array(12, 34)); // WHERE Vision IN (12, 34)
     * $query->filterByVision(array('min' => 12)); // WHERE Vision >= 12
     * $query->filterByVision(array('max' => 12)); // WHERE Vision <= 12
     * </code>
     *
     * @param     mixed $vision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByVision($vision = null, $comparison = null)
    {
        if (is_array($vision)) {
            $useMinMax = false;
            if (isset($vision['min'])) {
                $this->addUsingAlias(RefrensPeer::VISION, $vision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vision['max'])) {
                $this->addUsingAlias(RefrensPeer::VISION, $vision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::VISION, $vision, $comparison);
    }

    /**
     * Filter the query on the Ciguatera column
     *
     * Example usage:
     * <code>
     * $query->filterByCiguatera(1234); // WHERE Ciguatera = 1234
     * $query->filterByCiguatera(array(12, 34)); // WHERE Ciguatera IN (12, 34)
     * $query->filterByCiguatera(array('min' => 12)); // WHERE Ciguatera >= 12
     * $query->filterByCiguatera(array('max' => 12)); // WHERE Ciguatera <= 12
     * </code>
     *
     * @param     mixed $ciguatera The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByCiguatera($ciguatera = null, $comparison = null)
    {
        if (is_array($ciguatera)) {
            $useMinMax = false;
            if (isset($ciguatera['min'])) {
                $this->addUsingAlias(RefrensPeer::CIGUATERA, $ciguatera['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ciguatera['max'])) {
                $this->addUsingAlias(RefrensPeer::CIGUATERA, $ciguatera['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::CIGUATERA, $ciguatera, $comparison);
    }

    /**
     * Filter the query on the FryNursery column
     *
     * Example usage:
     * <code>
     * $query->filterByFrynursery(1234); // WHERE FryNursery = 1234
     * $query->filterByFrynursery(array(12, 34)); // WHERE FryNursery IN (12, 34)
     * $query->filterByFrynursery(array('min' => 12)); // WHERE FryNursery >= 12
     * $query->filterByFrynursery(array('max' => 12)); // WHERE FryNursery <= 12
     * </code>
     *
     * @param     mixed $frynursery The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByFrynursery($frynursery = null, $comparison = null)
    {
        if (is_array($frynursery)) {
            $useMinMax = false;
            if (isset($frynursery['min'])) {
                $this->addUsingAlias(RefrensPeer::FRYNURSERY, $frynursery['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($frynursery['max'])) {
                $this->addUsingAlias(RefrensPeer::FRYNURSERY, $frynursery['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::FRYNURSERY, $frynursery, $comparison);
    }

    /**
     * Filter the query on the Maturity column
     *
     * Example usage:
     * <code>
     * $query->filterByMaturity(1234); // WHERE Maturity = 1234
     * $query->filterByMaturity(array(12, 34)); // WHERE Maturity IN (12, 34)
     * $query->filterByMaturity(array('min' => 12)); // WHERE Maturity >= 12
     * $query->filterByMaturity(array('max' => 12)); // WHERE Maturity <= 12
     * </code>
     *
     * @param     mixed $maturity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByMaturity($maturity = null, $comparison = null)
    {
        if (is_array($maturity)) {
            $useMinMax = false;
            if (isset($maturity['min'])) {
                $this->addUsingAlias(RefrensPeer::MATURITY, $maturity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maturity['max'])) {
                $this->addUsingAlias(RefrensPeer::MATURITY, $maturity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::MATURITY, $maturity, $comparison);
    }

    /**
     * Filter the query on the Distribution column
     *
     * Example usage:
     * <code>
     * $query->filterByDistribution(1234); // WHERE Distribution = 1234
     * $query->filterByDistribution(array(12, 34)); // WHERE Distribution IN (12, 34)
     * $query->filterByDistribution(array('min' => 12)); // WHERE Distribution >= 12
     * $query->filterByDistribution(array('max' => 12)); // WHERE Distribution <= 12
     * </code>
     *
     * @param     mixed $distribution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByDistribution($distribution = null, $comparison = null)
    {
        if (is_array($distribution)) {
            $useMinMax = false;
            if (isset($distribution['min'])) {
                $this->addUsingAlias(RefrensPeer::DISTRIBUTION, $distribution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($distribution['max'])) {
                $this->addUsingAlias(RefrensPeer::DISTRIBUTION, $distribution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::DISTRIBUTION, $distribution, $comparison);
    }

    /**
     * Filter the query on the Mortality column
     *
     * Example usage:
     * <code>
     * $query->filterByMortality(1234); // WHERE Mortality = 1234
     * $query->filterByMortality(array(12, 34)); // WHERE Mortality IN (12, 34)
     * $query->filterByMortality(array('min' => 12)); // WHERE Mortality >= 12
     * $query->filterByMortality(array('max' => 12)); // WHERE Mortality <= 12
     * </code>
     *
     * @param     mixed $mortality The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByMortality($mortality = null, $comparison = null)
    {
        if (is_array($mortality)) {
            $useMinMax = false;
            if (isset($mortality['min'])) {
                $this->addUsingAlias(RefrensPeer::MORTALITY, $mortality['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mortality['max'])) {
                $this->addUsingAlias(RefrensPeer::MORTALITY, $mortality['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::MORTALITY, $mortality, $comparison);
    }

    /**
     * Filter the query on the FarmingSystem column
     *
     * Example usage:
     * <code>
     * $query->filterByFarmingsystem(1234); // WHERE FarmingSystem = 1234
     * $query->filterByFarmingsystem(array(12, 34)); // WHERE FarmingSystem IN (12, 34)
     * $query->filterByFarmingsystem(array('min' => 12)); // WHERE FarmingSystem >= 12
     * $query->filterByFarmingsystem(array('max' => 12)); // WHERE FarmingSystem <= 12
     * </code>
     *
     * @param     mixed $farmingsystem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByFarmingsystem($farmingsystem = null, $comparison = null)
    {
        if (is_array($farmingsystem)) {
            $useMinMax = false;
            if (isset($farmingsystem['min'])) {
                $this->addUsingAlias(RefrensPeer::FARMINGSYSTEM, $farmingsystem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($farmingsystem['max'])) {
                $this->addUsingAlias(RefrensPeer::FARMINGSYSTEM, $farmingsystem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::FARMINGSYSTEM, $farmingsystem, $comparison);
    }

    /**
     * Filter the query on the Eggs column
     *
     * Example usage:
     * <code>
     * $query->filterByEggs(1234); // WHERE Eggs = 1234
     * $query->filterByEggs(array(12, 34)); // WHERE Eggs IN (12, 34)
     * $query->filterByEggs(array('min' => 12)); // WHERE Eggs >= 12
     * $query->filterByEggs(array('max' => 12)); // WHERE Eggs <= 12
     * </code>
     *
     * @param     mixed $eggs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByEggs($eggs = null, $comparison = null)
    {
        if (is_array($eggs)) {
            $useMinMax = false;
            if (isset($eggs['min'])) {
                $this->addUsingAlias(RefrensPeer::EGGS, $eggs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggs['max'])) {
                $this->addUsingAlias(RefrensPeer::EGGS, $eggs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::EGGS, $eggs, $comparison);
    }

    /**
     * Filter the query on the Habitats column
     *
     * Example usage:
     * <code>
     * $query->filterByHabitats(1234); // WHERE Habitats = 1234
     * $query->filterByHabitats(array(12, 34)); // WHERE Habitats IN (12, 34)
     * $query->filterByHabitats(array('min' => 12)); // WHERE Habitats >= 12
     * $query->filterByHabitats(array('max' => 12)); // WHERE Habitats <= 12
     * </code>
     *
     * @param     mixed $habitats The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByHabitats($habitats = null, $comparison = null)
    {
        if (is_array($habitats)) {
            $useMinMax = false;
            if (isset($habitats['min'])) {
                $this->addUsingAlias(RefrensPeer::HABITATS, $habitats['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($habitats['max'])) {
                $this->addUsingAlias(RefrensPeer::HABITATS, $habitats['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::HABITATS, $habitats, $comparison);
    }

    /**
     * Filter the query on the LengthWeight column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthweight(1234); // WHERE LengthWeight = 1234
     * $query->filterByLengthweight(array(12, 34)); // WHERE LengthWeight IN (12, 34)
     * $query->filterByLengthweight(array('min' => 12)); // WHERE LengthWeight >= 12
     * $query->filterByLengthweight(array('max' => 12)); // WHERE LengthWeight <= 12
     * </code>
     *
     * @param     mixed $lengthweight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByLengthweight($lengthweight = null, $comparison = null)
    {
        if (is_array($lengthweight)) {
            $useMinMax = false;
            if (isset($lengthweight['min'])) {
                $this->addUsingAlias(RefrensPeer::LENGTHWEIGHT, $lengthweight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthweight['max'])) {
                $this->addUsingAlias(RefrensPeer::LENGTHWEIGHT, $lengthweight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::LENGTHWEIGHT, $lengthweight, $comparison);
    }

    /**
     * Filter the query on the LengthFreq column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthfreq(1234); // WHERE LengthFreq = 1234
     * $query->filterByLengthfreq(array(12, 34)); // WHERE LengthFreq IN (12, 34)
     * $query->filterByLengthfreq(array('min' => 12)); // WHERE LengthFreq >= 12
     * $query->filterByLengthfreq(array('max' => 12)); // WHERE LengthFreq <= 12
     * </code>
     *
     * @param     mixed $lengthfreq The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByLengthfreq($lengthfreq = null, $comparison = null)
    {
        if (is_array($lengthfreq)) {
            $useMinMax = false;
            if (isset($lengthfreq['min'])) {
                $this->addUsingAlias(RefrensPeer::LENGTHFREQ, $lengthfreq['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthfreq['max'])) {
                $this->addUsingAlias(RefrensPeer::LENGTHFREQ, $lengthfreq['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::LENGTHFREQ, $lengthfreq, $comparison);
    }

    /**
     * Filter the query on the Strains column
     *
     * Example usage:
     * <code>
     * $query->filterByStrains(1234); // WHERE Strains = 1234
     * $query->filterByStrains(array(12, 34)); // WHERE Strains IN (12, 34)
     * $query->filterByStrains(array('min' => 12)); // WHERE Strains >= 12
     * $query->filterByStrains(array('max' => 12)); // WHERE Strains <= 12
     * </code>
     *
     * @param     mixed $strains The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByStrains($strains = null, $comparison = null)
    {
        if (is_array($strains)) {
            $useMinMax = false;
            if (isset($strains['min'])) {
                $this->addUsingAlias(RefrensPeer::STRAINS, $strains['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($strains['max'])) {
                $this->addUsingAlias(RefrensPeer::STRAINS, $strains['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::STRAINS, $strains, $comparison);
    }

    /**
     * Filter the query on the Larvae column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvae(1234); // WHERE Larvae = 1234
     * $query->filterByLarvae(array(12, 34)); // WHERE Larvae IN (12, 34)
     * $query->filterByLarvae(array('min' => 12)); // WHERE Larvae >= 12
     * $query->filterByLarvae(array('max' => 12)); // WHERE Larvae <= 12
     * </code>
     *
     * @param     mixed $larvae The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByLarvae($larvae = null, $comparison = null)
    {
        if (is_array($larvae)) {
            $useMinMax = false;
            if (isset($larvae['min'])) {
                $this->addUsingAlias(RefrensPeer::LARVAE, $larvae['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvae['max'])) {
                $this->addUsingAlias(RefrensPeer::LARVAE, $larvae['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::LARVAE, $larvae, $comparison);
    }

    /**
     * Filter the query on the Environment column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvironment(1234); // WHERE Environment = 1234
     * $query->filterByEnvironment(array(12, 34)); // WHERE Environment IN (12, 34)
     * $query->filterByEnvironment(array('min' => 12)); // WHERE Environment >= 12
     * $query->filterByEnvironment(array('max' => 12)); // WHERE Environment <= 12
     * </code>
     *
     * @param     mixed $environment The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByEnvironment($environment = null, $comparison = null)
    {
        if (is_array($environment)) {
            $useMinMax = false;
            if (isset($environment['min'])) {
                $this->addUsingAlias(RefrensPeer::ENVIRONMENT, $environment['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($environment['max'])) {
                $this->addUsingAlias(RefrensPeer::ENVIRONMENT, $environment['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::ENVIRONMENT, $environment, $comparison);
    }

    /**
     * Filter the query on the Stocks column
     *
     * Example usage:
     * <code>
     * $query->filterByStocks(1234); // WHERE Stocks = 1234
     * $query->filterByStocks(array(12, 34)); // WHERE Stocks IN (12, 34)
     * $query->filterByStocks(array('min' => 12)); // WHERE Stocks >= 12
     * $query->filterByStocks(array('max' => 12)); // WHERE Stocks <= 12
     * </code>
     *
     * @param     mixed $stocks The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByStocks($stocks = null, $comparison = null)
    {
        if (is_array($stocks)) {
            $useMinMax = false;
            if (isset($stocks['min'])) {
                $this->addUsingAlias(RefrensPeer::STOCKS, $stocks['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stocks['max'])) {
                $this->addUsingAlias(RefrensPeer::STOCKS, $stocks['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::STOCKS, $stocks, $comparison);
    }

    /**
     * Filter the query on the Genetics column
     *
     * Example usage:
     * <code>
     * $query->filterByGenetics(1234); // WHERE Genetics = 1234
     * $query->filterByGenetics(array(12, 34)); // WHERE Genetics IN (12, 34)
     * $query->filterByGenetics(array('min' => 12)); // WHERE Genetics >= 12
     * $query->filterByGenetics(array('max' => 12)); // WHERE Genetics <= 12
     * </code>
     *
     * @param     mixed $genetics The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByGenetics($genetics = null, $comparison = null)
    {
        if (is_array($genetics)) {
            $useMinMax = false;
            if (isset($genetics['min'])) {
                $this->addUsingAlias(RefrensPeer::GENETICS, $genetics['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genetics['max'])) {
                $this->addUsingAlias(RefrensPeer::GENETICS, $genetics['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::GENETICS, $genetics, $comparison);
    }

    /**
     * Filter the query on the Spawning column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawning(1234); // WHERE Spawning = 1234
     * $query->filterBySpawning(array(12, 34)); // WHERE Spawning IN (12, 34)
     * $query->filterBySpawning(array('min' => 12)); // WHERE Spawning >= 12
     * $query->filterBySpawning(array('max' => 12)); // WHERE Spawning <= 12
     * </code>
     *
     * @param     mixed $spawning The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterBySpawning($spawning = null, $comparison = null)
    {
        if (is_array($spawning)) {
            $useMinMax = false;
            if (isset($spawning['min'])) {
                $this->addUsingAlias(RefrensPeer::SPAWNING, $spawning['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spawning['max'])) {
                $this->addUsingAlias(RefrensPeer::SPAWNING, $spawning['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::SPAWNING, $spawning, $comparison);
    }

    /**
     * Filter the query on the Abundance column
     *
     * Example usage:
     * <code>
     * $query->filterByAbundance(1234); // WHERE Abundance = 1234
     * $query->filterByAbundance(array(12, 34)); // WHERE Abundance IN (12, 34)
     * $query->filterByAbundance(array('min' => 12)); // WHERE Abundance >= 12
     * $query->filterByAbundance(array('max' => 12)); // WHERE Abundance <= 12
     * </code>
     *
     * @param     mixed $abundance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByAbundance($abundance = null, $comparison = null)
    {
        if (is_array($abundance)) {
            $useMinMax = false;
            if (isset($abundance['min'])) {
                $this->addUsingAlias(RefrensPeer::ABUNDANCE, $abundance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abundance['max'])) {
                $this->addUsingAlias(RefrensPeer::ABUNDANCE, $abundance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::ABUNDANCE, $abundance, $comparison);
    }

    /**
     * Filter the query on the Catches column
     *
     * Example usage:
     * <code>
     * $query->filterByCatches(1234); // WHERE Catches = 1234
     * $query->filterByCatches(array(12, 34)); // WHERE Catches IN (12, 34)
     * $query->filterByCatches(array('min' => 12)); // WHERE Catches >= 12
     * $query->filterByCatches(array('max' => 12)); // WHERE Catches <= 12
     * </code>
     *
     * @param     mixed $catches The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByCatches($catches = null, $comparison = null)
    {
        if (is_array($catches)) {
            $useMinMax = false;
            if (isset($catches['min'])) {
                $this->addUsingAlias(RefrensPeer::CATCHES, $catches['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($catches['max'])) {
                $this->addUsingAlias(RefrensPeer::CATCHES, $catches['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::CATCHES, $catches, $comparison);
    }

    /**
     * Filter the query on the Electrophoresis column
     *
     * Example usage:
     * <code>
     * $query->filterByElectrophoresis(1234); // WHERE Electrophoresis = 1234
     * $query->filterByElectrophoresis(array(12, 34)); // WHERE Electrophoresis IN (12, 34)
     * $query->filterByElectrophoresis(array('min' => 12)); // WHERE Electrophoresis >= 12
     * $query->filterByElectrophoresis(array('max' => 12)); // WHERE Electrophoresis <= 12
     * </code>
     *
     * @param     mixed $electrophoresis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByElectrophoresis($electrophoresis = null, $comparison = null)
    {
        if (is_array($electrophoresis)) {
            $useMinMax = false;
            if (isset($electrophoresis['min'])) {
                $this->addUsingAlias(RefrensPeer::ELECTROPHORESIS, $electrophoresis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($electrophoresis['max'])) {
                $this->addUsingAlias(RefrensPeer::ELECTROPHORESIS, $electrophoresis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::ELECTROPHORESIS, $electrophoresis, $comparison);
    }

    /**
     * Filter the query on the SexRatio column
     *
     * Example usage:
     * <code>
     * $query->filterBySexratio(1234); // WHERE SexRatio = 1234
     * $query->filterBySexratio(array(12, 34)); // WHERE SexRatio IN (12, 34)
     * $query->filterBySexratio(array('min' => 12)); // WHERE SexRatio >= 12
     * $query->filterBySexratio(array('max' => 12)); // WHERE SexRatio <= 12
     * </code>
     *
     * @param     mixed $sexratio The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterBySexratio($sexratio = null, $comparison = null)
    {
        if (is_array($sexratio)) {
            $useMinMax = false;
            if (isset($sexratio['min'])) {
                $this->addUsingAlias(RefrensPeer::SEXRATIO, $sexratio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sexratio['max'])) {
                $this->addUsingAlias(RefrensPeer::SEXRATIO, $sexratio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::SEXRATIO, $sexratio, $comparison);
    }

    /**
     * Filter the query on the Activity column
     *
     * Example usage:
     * <code>
     * $query->filterByActivity(1234); // WHERE Activity = 1234
     * $query->filterByActivity(array(12, 34)); // WHERE Activity IN (12, 34)
     * $query->filterByActivity(array('min' => 12)); // WHERE Activity >= 12
     * $query->filterByActivity(array('max' => 12)); // WHERE Activity <= 12
     * </code>
     *
     * @param     mixed $activity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByActivity($activity = null, $comparison = null)
    {
        if (is_array($activity)) {
            $useMinMax = false;
            if (isset($activity['min'])) {
                $this->addUsingAlias(RefrensPeer::ACTIVITY, $activity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($activity['max'])) {
                $this->addUsingAlias(RefrensPeer::ACTIVITY, $activity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::ACTIVITY, $activity, $comparison);
    }

    /**
     * Filter the query on the Effort column
     *
     * Example usage:
     * <code>
     * $query->filterByEffort(1234); // WHERE Effort = 1234
     * $query->filterByEffort(array(12, 34)); // WHERE Effort IN (12, 34)
     * $query->filterByEffort(array('min' => 12)); // WHERE Effort >= 12
     * $query->filterByEffort(array('max' => 12)); // WHERE Effort <= 12
     * </code>
     *
     * @param     mixed $effort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByEffort($effort = null, $comparison = null)
    {
        if (is_array($effort)) {
            $useMinMax = false;
            if (isset($effort['min'])) {
                $this->addUsingAlias(RefrensPeer::EFFORT, $effort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($effort['max'])) {
                $this->addUsingAlias(RefrensPeer::EFFORT, $effort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::EFFORT, $effort, $comparison);
    }

    /**
     * Filter the query on the Diseases column
     *
     * Example usage:
     * <code>
     * $query->filterByDiseases(1234); // WHERE Diseases = 1234
     * $query->filterByDiseases(array(12, 34)); // WHERE Diseases IN (12, 34)
     * $query->filterByDiseases(array('min' => 12)); // WHERE Diseases >= 12
     * $query->filterByDiseases(array('max' => 12)); // WHERE Diseases <= 12
     * </code>
     *
     * @param     mixed $diseases The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByDiseases($diseases = null, $comparison = null)
    {
        if (is_array($diseases)) {
            $useMinMax = false;
            if (isset($diseases['min'])) {
                $this->addUsingAlias(RefrensPeer::DISEASES, $diseases['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diseases['max'])) {
                $this->addUsingAlias(RefrensPeer::DISEASES, $diseases['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::DISEASES, $diseases, $comparison);
    }

    /**
     * Filter the query on the Predators column
     *
     * Example usage:
     * <code>
     * $query->filterByPredators(1234); // WHERE Predators = 1234
     * $query->filterByPredators(array(12, 34)); // WHERE Predators IN (12, 34)
     * $query->filterByPredators(array('min' => 12)); // WHERE Predators >= 12
     * $query->filterByPredators(array('max' => 12)); // WHERE Predators <= 12
     * </code>
     *
     * @param     mixed $predators The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByPredators($predators = null, $comparison = null)
    {
        if (is_array($predators)) {
            $useMinMax = false;
            if (isset($predators['min'])) {
                $this->addUsingAlias(RefrensPeer::PREDATORS, $predators['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($predators['max'])) {
                $this->addUsingAlias(RefrensPeer::PREDATORS, $predators['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::PREDATORS, $predators, $comparison);
    }

    /**
     * Filter the query on the Behavior column
     *
     * Example usage:
     * <code>
     * $query->filterByBehavior(1234); // WHERE Behavior = 1234
     * $query->filterByBehavior(array(12, 34)); // WHERE Behavior IN (12, 34)
     * $query->filterByBehavior(array('min' => 12)); // WHERE Behavior >= 12
     * $query->filterByBehavior(array('max' => 12)); // WHERE Behavior <= 12
     * </code>
     *
     * @param     mixed $behavior The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByBehavior($behavior = null, $comparison = null)
    {
        if (is_array($behavior)) {
            $useMinMax = false;
            if (isset($behavior['min'])) {
                $this->addUsingAlias(RefrensPeer::BEHAVIOR, $behavior['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($behavior['max'])) {
                $this->addUsingAlias(RefrensPeer::BEHAVIOR, $behavior['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::BEHAVIOR, $behavior, $comparison);
    }

    /**
     * Filter the query on the Management column
     *
     * Example usage:
     * <code>
     * $query->filterByManagement(1234); // WHERE Management = 1234
     * $query->filterByManagement(array(12, 34)); // WHERE Management IN (12, 34)
     * $query->filterByManagement(array('min' => 12)); // WHERE Management >= 12
     * $query->filterByManagement(array('max' => 12)); // WHERE Management <= 12
     * </code>
     *
     * @param     mixed $management The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByManagement($management = null, $comparison = null)
    {
        if (is_array($management)) {
            $useMinMax = false;
            if (isset($management['min'])) {
                $this->addUsingAlias(RefrensPeer::MANAGEMENT, $management['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($management['max'])) {
                $this->addUsingAlias(RefrensPeer::MANAGEMENT, $management['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::MANAGEMENT, $management, $comparison);
    }

    /**
     * Filter the query on the Introduction column
     *
     * Example usage:
     * <code>
     * $query->filterByIntroduction(1234); // WHERE Introduction = 1234
     * $query->filterByIntroduction(array(12, 34)); // WHERE Introduction IN (12, 34)
     * $query->filterByIntroduction(array('min' => 12)); // WHERE Introduction >= 12
     * $query->filterByIntroduction(array('max' => 12)); // WHERE Introduction <= 12
     * </code>
     *
     * @param     mixed $introduction The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByIntroduction($introduction = null, $comparison = null)
    {
        if (is_array($introduction)) {
            $useMinMax = false;
            if (isset($introduction['min'])) {
                $this->addUsingAlias(RefrensPeer::INTRODUCTION, $introduction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($introduction['max'])) {
                $this->addUsingAlias(RefrensPeer::INTRODUCTION, $introduction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::INTRODUCTION, $introduction, $comparison);
    }

    /**
     * Filter the query on the Competitors column
     *
     * Example usage:
     * <code>
     * $query->filterByCompetitors(1234); // WHERE Competitors = 1234
     * $query->filterByCompetitors(array(12, 34)); // WHERE Competitors IN (12, 34)
     * $query->filterByCompetitors(array('min' => 12)); // WHERE Competitors >= 12
     * $query->filterByCompetitors(array('max' => 12)); // WHERE Competitors <= 12
     * </code>
     *
     * @param     mixed $competitors The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByCompetitors($competitors = null, $comparison = null)
    {
        if (is_array($competitors)) {
            $useMinMax = false;
            if (isset($competitors['min'])) {
                $this->addUsingAlias(RefrensPeer::COMPETITORS, $competitors['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($competitors['max'])) {
                $this->addUsingAlias(RefrensPeer::COMPETITORS, $competitors['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::COMPETITORS, $competitors, $comparison);
    }

    /**
     * Filter the query on the Food column
     *
     * Example usage:
     * <code>
     * $query->filterByFood(1234); // WHERE Food = 1234
     * $query->filterByFood(array(12, 34)); // WHERE Food IN (12, 34)
     * $query->filterByFood(array('min' => 12)); // WHERE Food >= 12
     * $query->filterByFood(array('max' => 12)); // WHERE Food <= 12
     * </code>
     *
     * @param     mixed $food The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByFood($food = null, $comparison = null)
    {
        if (is_array($food)) {
            $useMinMax = false;
            if (isset($food['min'])) {
                $this->addUsingAlias(RefrensPeer::FOOD, $food['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($food['max'])) {
                $this->addUsingAlias(RefrensPeer::FOOD, $food['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::FOOD, $food, $comparison);
    }

    /**
     * Filter the query on the Nomenclature column
     *
     * Example usage:
     * <code>
     * $query->filterByNomenclature(1234); // WHERE Nomenclature = 1234
     * $query->filterByNomenclature(array(12, 34)); // WHERE Nomenclature IN (12, 34)
     * $query->filterByNomenclature(array('min' => 12)); // WHERE Nomenclature >= 12
     * $query->filterByNomenclature(array('max' => 12)); // WHERE Nomenclature <= 12
     * </code>
     *
     * @param     mixed $nomenclature The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByNomenclature($nomenclature = null, $comparison = null)
    {
        if (is_array($nomenclature)) {
            $useMinMax = false;
            if (isset($nomenclature['min'])) {
                $this->addUsingAlias(RefrensPeer::NOMENCLATURE, $nomenclature['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nomenclature['max'])) {
                $this->addUsingAlias(RefrensPeer::NOMENCLATURE, $nomenclature['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::NOMENCLATURE, $nomenclature, $comparison);
    }

    /**
     * Filter the query on the Revision column
     *
     * Example usage:
     * <code>
     * $query->filterByRevision(1234); // WHERE Revision = 1234
     * $query->filterByRevision(array(12, 34)); // WHERE Revision IN (12, 34)
     * $query->filterByRevision(array('min' => 12)); // WHERE Revision >= 12
     * $query->filterByRevision(array('max' => 12)); // WHERE Revision <= 12
     * </code>
     *
     * @param     mixed $revision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByRevision($revision = null, $comparison = null)
    {
        if (is_array($revision)) {
            $useMinMax = false;
            if (isset($revision['min'])) {
                $this->addUsingAlias(RefrensPeer::REVISION, $revision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($revision['max'])) {
                $this->addUsingAlias(RefrensPeer::REVISION, $revision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::REVISION, $revision, $comparison);
    }

    /**
     * Filter the query on the Physiology column
     *
     * Example usage:
     * <code>
     * $query->filterByPhysiology(1234); // WHERE Physiology = 1234
     * $query->filterByPhysiology(array(12, 34)); // WHERE Physiology IN (12, 34)
     * $query->filterByPhysiology(array('min' => 12)); // WHERE Physiology >= 12
     * $query->filterByPhysiology(array('max' => 12)); // WHERE Physiology <= 12
     * </code>
     *
     * @param     mixed $physiology The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByPhysiology($physiology = null, $comparison = null)
    {
        if (is_array($physiology)) {
            $useMinMax = false;
            if (isset($physiology['min'])) {
                $this->addUsingAlias(RefrensPeer::PHYSIOLOGY, $physiology['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($physiology['max'])) {
                $this->addUsingAlias(RefrensPeer::PHYSIOLOGY, $physiology['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::PHYSIOLOGY, $physiology, $comparison);
    }

    /**
     * Filter the query on the Morphology column
     *
     * Example usage:
     * <code>
     * $query->filterByMorphology(1234); // WHERE Morphology = 1234
     * $query->filterByMorphology(array(12, 34)); // WHERE Morphology IN (12, 34)
     * $query->filterByMorphology(array('min' => 12)); // WHERE Morphology >= 12
     * $query->filterByMorphology(array('max' => 12)); // WHERE Morphology <= 12
     * </code>
     *
     * @param     mixed $morphology The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByMorphology($morphology = null, $comparison = null)
    {
        if (is_array($morphology)) {
            $useMinMax = false;
            if (isset($morphology['min'])) {
                $this->addUsingAlias(RefrensPeer::MORPHOLOGY, $morphology['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($morphology['max'])) {
                $this->addUsingAlias(RefrensPeer::MORPHOLOGY, $morphology['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::MORPHOLOGY, $morphology, $comparison);
    }

    /**
     * Filter the query on the Otolith column
     *
     * Example usage:
     * <code>
     * $query->filterByOtolith(1234); // WHERE Otolith = 1234
     * $query->filterByOtolith(array(12, 34)); // WHERE Otolith IN (12, 34)
     * $query->filterByOtolith(array('min' => 12)); // WHERE Otolith >= 12
     * $query->filterByOtolith(array('max' => 12)); // WHERE Otolith <= 12
     * </code>
     *
     * @param     mixed $otolith The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByOtolith($otolith = null, $comparison = null)
    {
        if (is_array($otolith)) {
            $useMinMax = false;
            if (isset($otolith['min'])) {
                $this->addUsingAlias(RefrensPeer::OTOLITH, $otolith['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otolith['max'])) {
                $this->addUsingAlias(RefrensPeer::OTOLITH, $otolith['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::OTOLITH, $otolith, $comparison);
    }

    /**
     * Filter the query on the FoodConsum column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodconsum(1234); // WHERE FoodConsum = 1234
     * $query->filterByFoodconsum(array(12, 34)); // WHERE FoodConsum IN (12, 34)
     * $query->filterByFoodconsum(array('min' => 12)); // WHERE FoodConsum >= 12
     * $query->filterByFoodconsum(array('max' => 12)); // WHERE FoodConsum <= 12
     * </code>
     *
     * @param     mixed $foodconsum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByFoodconsum($foodconsum = null, $comparison = null)
    {
        if (is_array($foodconsum)) {
            $useMinMax = false;
            if (isset($foodconsum['min'])) {
                $this->addUsingAlias(RefrensPeer::FOODCONSUM, $foodconsum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foodconsum['max'])) {
                $this->addUsingAlias(RefrensPeer::FOODCONSUM, $foodconsum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::FOODCONSUM, $foodconsum, $comparison);
    }

    /**
     * Filter the query on the OrigDescr column
     *
     * Example usage:
     * <code>
     * $query->filterByOrigdescr(1234); // WHERE OrigDescr = 1234
     * $query->filterByOrigdescr(array(12, 34)); // WHERE OrigDescr IN (12, 34)
     * $query->filterByOrigdescr(array('min' => 12)); // WHERE OrigDescr >= 12
     * $query->filterByOrigdescr(array('max' => 12)); // WHERE OrigDescr <= 12
     * </code>
     *
     * @param     mixed $origdescr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByOrigdescr($origdescr = null, $comparison = null)
    {
        if (is_array($origdescr)) {
            $useMinMax = false;
            if (isset($origdescr['min'])) {
                $this->addUsingAlias(RefrensPeer::ORIGDESCR, $origdescr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($origdescr['max'])) {
                $this->addUsingAlias(RefrensPeer::ORIGDESCR, $origdescr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::ORIGDESCR, $origdescr, $comparison);
    }

    /**
     * Filter the query on the Oxygen column
     *
     * Example usage:
     * <code>
     * $query->filterByOxygen(1234); // WHERE Oxygen = 1234
     * $query->filterByOxygen(array(12, 34)); // WHERE Oxygen IN (12, 34)
     * $query->filterByOxygen(array('min' => 12)); // WHERE Oxygen >= 12
     * $query->filterByOxygen(array('max' => 12)); // WHERE Oxygen <= 12
     * </code>
     *
     * @param     mixed $oxygen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByOxygen($oxygen = null, $comparison = null)
    {
        if (is_array($oxygen)) {
            $useMinMax = false;
            if (isset($oxygen['min'])) {
                $this->addUsingAlias(RefrensPeer::OXYGEN, $oxygen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygen['max'])) {
                $this->addUsingAlias(RefrensPeer::OXYGEN, $oxygen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::OXYGEN, $oxygen, $comparison);
    }

    /**
     * Filter the query on the MaxLength column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxlength(1234); // WHERE MaxLength = 1234
     * $query->filterByMaxlength(array(12, 34)); // WHERE MaxLength IN (12, 34)
     * $query->filterByMaxlength(array('min' => 12)); // WHERE MaxLength >= 12
     * $query->filterByMaxlength(array('max' => 12)); // WHERE MaxLength <= 12
     * </code>
     *
     * @param     mixed $maxlength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByMaxlength($maxlength = null, $comparison = null)
    {
        if (is_array($maxlength)) {
            $useMinMax = false;
            if (isset($maxlength['min'])) {
                $this->addUsingAlias(RefrensPeer::MAXLENGTH, $maxlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxlength['max'])) {
                $this->addUsingAlias(RefrensPeer::MAXLENGTH, $maxlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::MAXLENGTH, $maxlength, $comparison);
    }

    /**
     * Filter the query on the Diet column
     *
     * Example usage:
     * <code>
     * $query->filterByDiet(1234); // WHERE Diet = 1234
     * $query->filterByDiet(array(12, 34)); // WHERE Diet IN (12, 34)
     * $query->filterByDiet(array('min' => 12)); // WHERE Diet >= 12
     * $query->filterByDiet(array('max' => 12)); // WHERE Diet <= 12
     * </code>
     *
     * @param     mixed $diet The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByDiet($diet = null, $comparison = null)
    {
        if (is_array($diet)) {
            $useMinMax = false;
            if (isset($diet['min'])) {
                $this->addUsingAlias(RefrensPeer::DIET, $diet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diet['max'])) {
                $this->addUsingAlias(RefrensPeer::DIET, $diet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::DIET, $diet, $comparison);
    }

    /**
     * Filter the query on the RawData column
     *
     * Example usage:
     * <code>
     * $query->filterByRawdata(1234); // WHERE RawData = 1234
     * $query->filterByRawdata(array(12, 34)); // WHERE RawData IN (12, 34)
     * $query->filterByRawdata(array('min' => 12)); // WHERE RawData >= 12
     * $query->filterByRawdata(array('max' => 12)); // WHERE RawData <= 12
     * </code>
     *
     * @param     mixed $rawdata The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByRawdata($rawdata = null, $comparison = null)
    {
        if (is_array($rawdata)) {
            $useMinMax = false;
            if (isset($rawdata['min'])) {
                $this->addUsingAlias(RefrensPeer::RAWDATA, $rawdata['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rawdata['max'])) {
                $this->addUsingAlias(RefrensPeer::RAWDATA, $rawdata['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::RAWDATA, $rawdata, $comparison);
    }

    /**
     * Filter the query on the Speeds column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeeds(1234); // WHERE Speeds = 1234
     * $query->filterBySpeeds(array(12, 34)); // WHERE Speeds IN (12, 34)
     * $query->filterBySpeeds(array('min' => 12)); // WHERE Speeds >= 12
     * $query->filterBySpeeds(array('max' => 12)); // WHERE Speeds <= 12
     * </code>
     *
     * @param     mixed $speeds The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterBySpeeds($speeds = null, $comparison = null)
    {
        if (is_array($speeds)) {
            $useMinMax = false;
            if (isset($speeds['min'])) {
                $this->addUsingAlias(RefrensPeer::SPEEDS, $speeds['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speeds['max'])) {
                $this->addUsingAlias(RefrensPeer::SPEEDS, $speeds['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::SPEEDS, $speeds, $comparison);
    }

    /**
     * Filter the query on the MaxWeight column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxweight(1234); // WHERE MaxWeight = 1234
     * $query->filterByMaxweight(array(12, 34)); // WHERE MaxWeight IN (12, 34)
     * $query->filterByMaxweight(array('min' => 12)); // WHERE MaxWeight >= 12
     * $query->filterByMaxweight(array('max' => 12)); // WHERE MaxWeight <= 12
     * </code>
     *
     * @param     mixed $maxweight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByMaxweight($maxweight = null, $comparison = null)
    {
        if (is_array($maxweight)) {
            $useMinMax = false;
            if (isset($maxweight['min'])) {
                $this->addUsingAlias(RefrensPeer::MAXWEIGHT, $maxweight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxweight['max'])) {
                $this->addUsingAlias(RefrensPeer::MAXWEIGHT, $maxweight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::MAXWEIGHT, $maxweight, $comparison);
    }

    /**
     * Filter the query on the Longevity column
     *
     * Example usage:
     * <code>
     * $query->filterByLongevity(1234); // WHERE Longevity = 1234
     * $query->filterByLongevity(array(12, 34)); // WHERE Longevity IN (12, 34)
     * $query->filterByLongevity(array('min' => 12)); // WHERE Longevity >= 12
     * $query->filterByLongevity(array('max' => 12)); // WHERE Longevity <= 12
     * </code>
     *
     * @param     mixed $longevity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByLongevity($longevity = null, $comparison = null)
    {
        if (is_array($longevity)) {
            $useMinMax = false;
            if (isset($longevity['min'])) {
                $this->addUsingAlias(RefrensPeer::LONGEVITY, $longevity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longevity['max'])) {
                $this->addUsingAlias(RefrensPeer::LONGEVITY, $longevity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::LONGEVITY, $longevity, $comparison);
    }

    /**
     * Filter the query on the Keys column
     *
     * Example usage:
     * <code>
     * $query->filterByKeys(1234); // WHERE Keys = 1234
     * $query->filterByKeys(array(12, 34)); // WHERE Keys IN (12, 34)
     * $query->filterByKeys(array('min' => 12)); // WHERE Keys >= 12
     * $query->filterByKeys(array('max' => 12)); // WHERE Keys <= 12
     * </code>
     *
     * @param     mixed $keys The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByKeys($keys = null, $comparison = null)
    {
        if (is_array($keys)) {
            $useMinMax = false;
            if (isset($keys['min'])) {
                $this->addUsingAlias(RefrensPeer::KEYS, $keys['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($keys['max'])) {
                $this->addUsingAlias(RefrensPeer::KEYS, $keys['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::KEYS, $keys, $comparison);
    }

    /**
     * Filter the query on the Broodstock column
     *
     * Example usage:
     * <code>
     * $query->filterByBroodstock(1234); // WHERE Broodstock = 1234
     * $query->filterByBroodstock(array(12, 34)); // WHERE Broodstock IN (12, 34)
     * $query->filterByBroodstock(array('min' => 12)); // WHERE Broodstock >= 12
     * $query->filterByBroodstock(array('max' => 12)); // WHERE Broodstock <= 12
     * </code>
     *
     * @param     mixed $broodstock The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByBroodstock($broodstock = null, $comparison = null)
    {
        if (is_array($broodstock)) {
            $useMinMax = false;
            if (isset($broodstock['min'])) {
                $this->addUsingAlias(RefrensPeer::BROODSTOCK, $broodstock['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($broodstock['max'])) {
                $this->addUsingAlias(RefrensPeer::BROODSTOCK, $broodstock['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::BROODSTOCK, $broodstock, $comparison);
    }

    /**
     * Filter the query on the EggNursery column
     *
     * Example usage:
     * <code>
     * $query->filterByEggnursery(1234); // WHERE EggNursery = 1234
     * $query->filterByEggnursery(array(12, 34)); // WHERE EggNursery IN (12, 34)
     * $query->filterByEggnursery(array('min' => 12)); // WHERE EggNursery >= 12
     * $query->filterByEggnursery(array('max' => 12)); // WHERE EggNursery <= 12
     * </code>
     *
     * @param     mixed $eggnursery The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByEggnursery($eggnursery = null, $comparison = null)
    {
        if (is_array($eggnursery)) {
            $useMinMax = false;
            if (isset($eggnursery['min'])) {
                $this->addUsingAlias(RefrensPeer::EGGNURSERY, $eggnursery['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggnursery['max'])) {
                $this->addUsingAlias(RefrensPeer::EGGNURSERY, $eggnursery['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::EGGNURSERY, $eggnursery, $comparison);
    }

    /**
     * Filter the query on the LarvalNursery column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvalnursery(1234); // WHERE LarvalNursery = 1234
     * $query->filterByLarvalnursery(array(12, 34)); // WHERE LarvalNursery IN (12, 34)
     * $query->filterByLarvalnursery(array('min' => 12)); // WHERE LarvalNursery >= 12
     * $query->filterByLarvalnursery(array('max' => 12)); // WHERE LarvalNursery <= 12
     * </code>
     *
     * @param     mixed $larvalnursery The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByLarvalnursery($larvalnursery = null, $comparison = null)
    {
        if (is_array($larvalnursery)) {
            $useMinMax = false;
            if (isset($larvalnursery['min'])) {
                $this->addUsingAlias(RefrensPeer::LARVALNURSERY, $larvalnursery['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvalnursery['max'])) {
                $this->addUsingAlias(RefrensPeer::LARVALNURSERY, $larvalnursery['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::LARVALNURSERY, $larvalnursery, $comparison);
    }

    /**
     * Filter the query on the Citation column
     *
     * Example usage:
     * <code>
     * $query->filterByCitation(1234); // WHERE Citation = 1234
     * $query->filterByCitation(array(12, 34)); // WHERE Citation IN (12, 34)
     * $query->filterByCitation(array('min' => 12)); // WHERE Citation >= 12
     * $query->filterByCitation(array('max' => 12)); // WHERE Citation <= 12
     * </code>
     *
     * @param     mixed $citation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByCitation($citation = null, $comparison = null)
    {
        if (is_array($citation)) {
            $useMinMax = false;
            if (isset($citation['min'])) {
                $this->addUsingAlias(RefrensPeer::CITATION, $citation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($citation['max'])) {
                $this->addUsingAlias(RefrensPeer::CITATION, $citation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::CITATION, $citation, $comparison);
    }

    /**
     * Filter the query on the Team column
     *
     * Example usage:
     * <code>
     * $query->filterByTeam(1234); // WHERE Team = 1234
     * $query->filterByTeam(array(12, 34)); // WHERE Team IN (12, 34)
     * $query->filterByTeam(array('min' => 12)); // WHERE Team >= 12
     * $query->filterByTeam(array('max' => 12)); // WHERE Team <= 12
     * </code>
     *
     * @param     mixed $team The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByTeam($team = null, $comparison = null)
    {
        if (is_array($team)) {
            $useMinMax = false;
            if (isset($team['min'])) {
                $this->addUsingAlias(RefrensPeer::TEAM, $team['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($team['max'])) {
                $this->addUsingAlias(RefrensPeer::TEAM, $team['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::TEAM, $team, $comparison);
    }

    /**
     * Filter the query on the Aquarium column
     *
     * Example usage:
     * <code>
     * $query->filterByAquarium(1234); // WHERE Aquarium = 1234
     * $query->filterByAquarium(array(12, 34)); // WHERE Aquarium IN (12, 34)
     * $query->filterByAquarium(array('min' => 12)); // WHERE Aquarium >= 12
     * $query->filterByAquarium(array('max' => 12)); // WHERE Aquarium <= 12
     * </code>
     *
     * @param     mixed $aquarium The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByAquarium($aquarium = null, $comparison = null)
    {
        if (is_array($aquarium)) {
            $useMinMax = false;
            if (isset($aquarium['min'])) {
                $this->addUsingAlias(RefrensPeer::AQUARIUM, $aquarium['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aquarium['max'])) {
                $this->addUsingAlias(RefrensPeer::AQUARIUM, $aquarium['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::AQUARIUM, $aquarium, $comparison);
    }

    /**
     * Filter the query on the Processing column
     *
     * Example usage:
     * <code>
     * $query->filterByProcessing(1234); // WHERE Processing = 1234
     * $query->filterByProcessing(array(12, 34)); // WHERE Processing IN (12, 34)
     * $query->filterByProcessing(array('min' => 12)); // WHERE Processing >= 12
     * $query->filterByProcessing(array('max' => 12)); // WHERE Processing <= 12
     * </code>
     *
     * @param     mixed $processing The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByProcessing($processing = null, $comparison = null)
    {
        if (is_array($processing)) {
            $useMinMax = false;
            if (isset($processing['min'])) {
                $this->addUsingAlias(RefrensPeer::PROCESSING, $processing['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($processing['max'])) {
                $this->addUsingAlias(RefrensPeer::PROCESSING, $processing['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::PROCESSING, $processing, $comparison);
    }

    /**
     * Filter the query on the Comname column
     *
     * Example usage:
     * <code>
     * $query->filterByComname(1234); // WHERE Comname = 1234
     * $query->filterByComname(array(12, 34)); // WHERE Comname IN (12, 34)
     * $query->filterByComname(array('min' => 12)); // WHERE Comname >= 12
     * $query->filterByComname(array('max' => 12)); // WHERE Comname <= 12
     * </code>
     *
     * @param     mixed $comname The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByComname($comname = null, $comparison = null)
    {
        if (is_array($comname)) {
            $useMinMax = false;
            if (isset($comname['min'])) {
                $this->addUsingAlias(RefrensPeer::COMNAME, $comname['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($comname['max'])) {
                $this->addUsingAlias(RefrensPeer::COMNAME, $comname['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::COMNAME, $comname, $comparison);
    }

    /**
     * Filter the query on the Pictures column
     *
     * Example usage:
     * <code>
     * $query->filterByPictures(1234); // WHERE Pictures = 1234
     * $query->filterByPictures(array(12, 34)); // WHERE Pictures IN (12, 34)
     * $query->filterByPictures(array('min' => 12)); // WHERE Pictures >= 12
     * $query->filterByPictures(array('max' => 12)); // WHERE Pictures <= 12
     * </code>
     *
     * @param     mixed $pictures The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByPictures($pictures = null, $comparison = null)
    {
        if (is_array($pictures)) {
            $useMinMax = false;
            if (isset($pictures['min'])) {
                $this->addUsingAlias(RefrensPeer::PICTURES, $pictures['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pictures['max'])) {
                $this->addUsingAlias(RefrensPeer::PICTURES, $pictures['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::PICTURES, $pictures, $comparison);
    }

    /**
     * Filter the query on the Tagrecapture column
     *
     * Example usage:
     * <code>
     * $query->filterByTagrecapture(1234); // WHERE Tagrecapture = 1234
     * $query->filterByTagrecapture(array(12, 34)); // WHERE Tagrecapture IN (12, 34)
     * $query->filterByTagrecapture(array('min' => 12)); // WHERE Tagrecapture >= 12
     * $query->filterByTagrecapture(array('max' => 12)); // WHERE Tagrecapture <= 12
     * </code>
     *
     * @param     mixed $tagrecapture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByTagrecapture($tagrecapture = null, $comparison = null)
    {
        if (is_array($tagrecapture)) {
            $useMinMax = false;
            if (isset($tagrecapture['min'])) {
                $this->addUsingAlias(RefrensPeer::TAGRECAPTURE, $tagrecapture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tagrecapture['max'])) {
                $this->addUsingAlias(RefrensPeer::TAGRECAPTURE, $tagrecapture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::TAGRECAPTURE, $tagrecapture, $comparison);
    }

    /**
     * Filter the query on the Conservation column
     *
     * Example usage:
     * <code>
     * $query->filterByConservation(1234); // WHERE Conservation = 1234
     * $query->filterByConservation(array(12, 34)); // WHERE Conservation IN (12, 34)
     * $query->filterByConservation(array('min' => 12)); // WHERE Conservation >= 12
     * $query->filterByConservation(array('max' => 12)); // WHERE Conservation <= 12
     * </code>
     *
     * @param     mixed $conservation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByConservation($conservation = null, $comparison = null)
    {
        if (is_array($conservation)) {
            $useMinMax = false;
            if (isset($conservation['min'])) {
                $this->addUsingAlias(RefrensPeer::CONSERVATION, $conservation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($conservation['max'])) {
                $this->addUsingAlias(RefrensPeer::CONSERVATION, $conservation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::CONSERVATION, $conservation, $comparison);
    }

    /**
     * Filter the query on the Checklist column
     *
     * Example usage:
     * <code>
     * $query->filterByChecklist(1234); // WHERE Checklist = 1234
     * $query->filterByChecklist(array(12, 34)); // WHERE Checklist IN (12, 34)
     * $query->filterByChecklist(array('min' => 12)); // WHERE Checklist >= 12
     * $query->filterByChecklist(array('max' => 12)); // WHERE Checklist <= 12
     * </code>
     *
     * @param     mixed $checklist The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByChecklist($checklist = null, $comparison = null)
    {
        if (is_array($checklist)) {
            $useMinMax = false;
            if (isset($checklist['min'])) {
                $this->addUsingAlias(RefrensPeer::CHECKLIST, $checklist['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($checklist['max'])) {
                $this->addUsingAlias(RefrensPeer::CHECKLIST, $checklist['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::CHECKLIST, $checklist, $comparison);
    }

    /**
     * Filter the query on the ISBN column
     *
     * Example usage:
     * <code>
     * $query->filterByIsbn('fooValue');   // WHERE ISBN = 'fooValue'
     * $query->filterByIsbn('%fooValue%'); // WHERE ISBN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isbn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByIsbn($isbn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isbn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $isbn)) {
                $isbn = str_replace('*', '%', $isbn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RefrensPeer::ISBN, $isbn, $comparison);
    }

    /**
     * Filter the query on the DOI column
     *
     * Example usage:
     * <code>
     * $query->filterByDoi('fooValue');   // WHERE DOI = 'fooValue'
     * $query->filterByDoi('%fooValue%'); // WHERE DOI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $doi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByDoi($doi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($doi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $doi)) {
                $doi = str_replace('*', '%', $doi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RefrensPeer::DOI, $doi, $comparison);
    }

    /**
     * Filter the query on the AuthorEmail column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthoremail('fooValue');   // WHERE AuthorEmail = 'fooValue'
     * $query->filterByAuthoremail('%fooValue%'); // WHERE AuthorEmail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authoremail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByAuthoremail($authoremail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authoremail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authoremail)) {
                $authoremail = str_replace('*', '%', $authoremail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RefrensPeer::AUTHOREMAIL, $authoremail, $comparison);
    }

    /**
     * Filter the query on the AuthorAdress column
     *
     * Example usage:
     * <code>
     * $query->filterByAuthoradress('fooValue');   // WHERE AuthorAdress = 'fooValue'
     * $query->filterByAuthoradress('%fooValue%'); // WHERE AuthorAdress LIKE '%fooValue%'
     * </code>
     *
     * @param     string $authoradress The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByAuthoradress($authoradress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($authoradress)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $authoradress)) {
                $authoradress = str_replace('*', '%', $authoradress);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RefrensPeer::AUTHORADRESS, $authoradress, $comparison);
    }

    /**
     * Filter the query on the PaperURL column
     *
     * Example usage:
     * <code>
     * $query->filterByPaperurl('fooValue');   // WHERE PaperURL = 'fooValue'
     * $query->filterByPaperurl('%fooValue%'); // WHERE PaperURL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paperurl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByPaperurl($paperurl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paperurl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paperurl)) {
                $paperurl = str_replace('*', '%', $paperurl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RefrensPeer::PAPERURL, $paperurl, $comparison);
    }

    /**
     * Filter the query on the Used column
     *
     * Example usage:
     * <code>
     * $query->filterByUsed('fooValue');   // WHERE Used = 'fooValue'
     * $query->filterByUsed('%fooValue%'); // WHERE Used LIKE '%fooValue%'
     * </code>
     *
     * @param     string $used The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByUsed($used = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($used)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $used)) {
                $used = str_replace('*', '%', $used);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RefrensPeer::USED, $used, $comparison);
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
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(RefrensPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(RefrensPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::ENTERED, $entered, $comparison);
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
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(RefrensPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(RefrensPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(RefrensPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(RefrensPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::MODIFIED, $modified, $comparison);
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
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(RefrensPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(RefrensPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(RefrensPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(RefrensPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::EXPERT, $expert, $comparison);
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
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(RefrensPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(RefrensPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return RefrensQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(RefrensPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(RefrensPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RefrensPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Refrens $refrens Object to remove from the list of results
     *
     * @return RefrensQuery The current query, for fluid interface
     */
    public function prune($refrens = null)
    {
        if ($refrens) {
            $this->addUsingAlias(RefrensPeer::AUTOCTR, $refrens->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
