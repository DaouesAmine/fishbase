<?php


/**
 * Base class that represents a query for the 'stocks_with_igfa_damaged' table.
 *
 *
 *
 * @method StocksWithIgfaDamagedQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method StocksWithIgfaDamagedQuery orderByStockdefs($order = Criteria::ASC) Order by the StockDefs column
 * @method StocksWithIgfaDamagedQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method StocksWithIgfaDamagedQuery orderByLevel($order = Criteria::ASC) Order by the Level column
 * @method StocksWithIgfaDamagedQuery orderByLocalunique($order = Criteria::ASC) Order by the LocalUnique column
 * @method StocksWithIgfaDamagedQuery orderByIucnCode($order = Criteria::ASC) Order by the IUCN_Code column
 * @method StocksWithIgfaDamagedQuery orderByIucnAssessment($order = Criteria::ASC) Order by the IUCN_Assessment column
 * @method StocksWithIgfaDamagedQuery orderByProtected($order = Criteria::ASC) Order by the Protected column
 * @method StocksWithIgfaDamagedQuery orderByStocksrefno($order = Criteria::ASC) Order by the StocksRefNo column
 * @method StocksWithIgfaDamagedQuery orderByNorthernmost($order = Criteria::ASC) Order by the Northernmost column
 * @method StocksWithIgfaDamagedQuery orderByNorthsouthn($order = Criteria::ASC) Order by the NorthSouthN column
 * @method StocksWithIgfaDamagedQuery orderBySouthermost($order = Criteria::ASC) Order by the Southermost column
 * @method StocksWithIgfaDamagedQuery orderByNorthsouths($order = Criteria::ASC) Order by the NorthSouthS column
 * @method StocksWithIgfaDamagedQuery orderByWesternmost($order = Criteria::ASC) Order by the Westernmost column
 * @method StocksWithIgfaDamagedQuery orderByWesteastw($order = Criteria::ASC) Order by the WestEastW column
 * @method StocksWithIgfaDamagedQuery orderByEasternmost($order = Criteria::ASC) Order by the Easternmost column
 * @method StocksWithIgfaDamagedQuery orderByWesteaste($order = Criteria::ASC) Order by the WestEastE column
 * @method StocksWithIgfaDamagedQuery orderByBoundingref($order = Criteria::ASC) Order by the BoundingRef column
 * @method StocksWithIgfaDamagedQuery orderByBoundingmethod($order = Criteria::ASC) Order by the BoundingMethod column
 * @method StocksWithIgfaDamagedQuery orderByTempmin($order = Criteria::ASC) Order by the TempMin column
 * @method StocksWithIgfaDamagedQuery orderByTempmax($order = Criteria::ASC) Order by the TempMax column
 * @method StocksWithIgfaDamagedQuery orderByTempref($order = Criteria::ASC) Order by the TempRef column
 * @method StocksWithIgfaDamagedQuery orderByEnvtemp($order = Criteria::ASC) Order by the EnvTemp column
 * @method StocksWithIgfaDamagedQuery orderByResilience($order = Criteria::ASC) Order by the Resilience column
 * @method StocksWithIgfaDamagedQuery orderByResilienceremark($order = Criteria::ASC) Order by the ResilienceRemark column
 * @method StocksWithIgfaDamagedQuery orderByPhmin($order = Criteria::ASC) Order by the pHMin column
 * @method StocksWithIgfaDamagedQuery orderByPhmax($order = Criteria::ASC) Order by the pHMax column
 * @method StocksWithIgfaDamagedQuery orderByPhref($order = Criteria::ASC) Order by the pHRef column
 * @method StocksWithIgfaDamagedQuery orderByDhmin($order = Criteria::ASC) Order by the dHMin column
 * @method StocksWithIgfaDamagedQuery orderByDhmax($order = Criteria::ASC) Order by the dHMax column
 * @method StocksWithIgfaDamagedQuery orderByDhref($order = Criteria::ASC) Order by the dHRef column
 * @method StocksWithIgfaDamagedQuery orderByGenbankid($order = Criteria::ASC) Order by the GenBankID column
 * @method StocksWithIgfaDamagedQuery orderByRfeid($order = Criteria::ASC) Order by the RfeID column
 * @method StocksWithIgfaDamagedQuery orderByFigisId($order = Criteria::ASC) Order by the FIGIS_ID column
 * @method StocksWithIgfaDamagedQuery orderByEcotoxid($order = Criteria::ASC) Order by the EcotoxID column
 * @method StocksWithIgfaDamagedQuery orderByScrfaData($order = Criteria::ASC) Order by the SCRFA_data column
 * @method StocksWithIgfaDamagedQuery orderByGmadId($order = Criteria::ASC) Order by the GMAD_ID column
 * @method StocksWithIgfaDamagedQuery orderBySaup($order = Criteria::ASC) Order by the SAUP column
 * @method StocksWithIgfaDamagedQuery orderBySaupId($order = Criteria::ASC) Order by the SAUP_ID column
 * @method StocksWithIgfaDamagedQuery orderBySaupGroup($order = Criteria::ASC) Order by the SAUP_Group column
 * @method StocksWithIgfaDamagedQuery orderByAusmuseum($order = Criteria::ASC) Order by the AusMuseum column
 * @method StocksWithIgfaDamagedQuery orderByFishtrace($order = Criteria::ASC) Order by the FishTrace column
 * @method StocksWithIgfaDamagedQuery orderByIucnId($order = Criteria::ASC) Order by the IUCN_ID column
 * @method StocksWithIgfaDamagedQuery orderByIucnGroup($order = Criteria::ASC) Order by the IUCN_Group column
 * @method StocksWithIgfaDamagedQuery orderByBoldId($order = Criteria::ASC) Order by the BOLD_ID column
 * @method StocksWithIgfaDamagedQuery orderByIgfaname($order = Criteria::ASC) Order by the IGFAName column
 * @method StocksWithIgfaDamagedQuery orderByEssayid($order = Criteria::ASC) Order by the EssayID column
 * @method StocksWithIgfaDamagedQuery orderByAquamaps($order = Criteria::ASC) Order by the Aquamaps column
 * @method StocksWithIgfaDamagedQuery orderByMorphology($order = Criteria::ASC) Order by the Morphology column
 * @method StocksWithIgfaDamagedQuery orderByOccurrence($order = Criteria::ASC) Order by the Occurrence column
 * @method StocksWithIgfaDamagedQuery orderByStrains($order = Criteria::ASC) Order by the Strains column
 * @method StocksWithIgfaDamagedQuery orderByEcology($order = Criteria::ASC) Order by the Ecology column
 * @method StocksWithIgfaDamagedQuery orderByDiseases($order = Criteria::ASC) Order by the Diseases column
 * @method StocksWithIgfaDamagedQuery orderByAbnorm($order = Criteria::ASC) Order by the Abnorm column
 * @method StocksWithIgfaDamagedQuery orderByMetabolism($order = Criteria::ASC) Order by the Metabolism column
 * @method StocksWithIgfaDamagedQuery orderByPredators($order = Criteria::ASC) Order by the Predators column
 * @method StocksWithIgfaDamagedQuery orderBySpawning($order = Criteria::ASC) Order by the Spawning column
 * @method StocksWithIgfaDamagedQuery orderBySpeed($order = Criteria::ASC) Order by the Speed column
 * @method StocksWithIgfaDamagedQuery orderByDiet($order = Criteria::ASC) Order by the Diet column
 * @method StocksWithIgfaDamagedQuery orderByEggs($order = Criteria::ASC) Order by the Eggs column
 * @method StocksWithIgfaDamagedQuery orderByEggdevelop($order = Criteria::ASC) Order by the EggDevelop column
 * @method StocksWithIgfaDamagedQuery orderByFood($order = Criteria::ASC) Order by the Food column
 * @method StocksWithIgfaDamagedQuery orderByLarvae($order = Criteria::ASC) Order by the Larvae column
 * @method StocksWithIgfaDamagedQuery orderByLarvdyn($order = Criteria::ASC) Order by the LarvDyn column
 * @method StocksWithIgfaDamagedQuery orderByLarvspeed($order = Criteria::ASC) Order by the LarvSpeed column
 * @method StocksWithIgfaDamagedQuery orderByPopdyn($order = Criteria::ASC) Order by the PopDyn column
 * @method StocksWithIgfaDamagedQuery orderByLengthweight($order = Criteria::ASC) Order by the LengthWeight column
 * @method StocksWithIgfaDamagedQuery orderByGillarea($order = Criteria::ASC) Order by the Gillarea column
 * @method StocksWithIgfaDamagedQuery orderByMaturity($order = Criteria::ASC) Order by the Maturity column
 * @method StocksWithIgfaDamagedQuery orderByMatsizes($order = Criteria::ASC) Order by the MatSizes column
 * @method StocksWithIgfaDamagedQuery orderByProcessing($order = Criteria::ASC) Order by the Processing column
 * @method StocksWithIgfaDamagedQuery orderByReproduction($order = Criteria::ASC) Order by the Reproduction column
 * @method StocksWithIgfaDamagedQuery orderByIntroductions($order = Criteria::ASC) Order by the Introductions column
 * @method StocksWithIgfaDamagedQuery orderByAbundance($order = Criteria::ASC) Order by the Abundance column
 * @method StocksWithIgfaDamagedQuery orderByVision($order = Criteria::ASC) Order by the Vision column
 * @method StocksWithIgfaDamagedQuery orderByGenetics($order = Criteria::ASC) Order by the Genetics column
 * @method StocksWithIgfaDamagedQuery orderByAquaculture($order = Criteria::ASC) Order by the Aquaculture column
 * @method StocksWithIgfaDamagedQuery orderByCountrycomp($order = Criteria::ASC) Order by the CountryComp column
 * @method StocksWithIgfaDamagedQuery orderByAllele($order = Criteria::ASC) Order by the Allele column
 * @method StocksWithIgfaDamagedQuery orderByGeneticstudies($order = Criteria::ASC) Order by the GeneticStudies column
 * @method StocksWithIgfaDamagedQuery orderByRation($order = Criteria::ASC) Order by the Ration column
 * @method StocksWithIgfaDamagedQuery orderByFoods($order = Criteria::ASC) Order by the Foods column
 * @method StocksWithIgfaDamagedQuery orderByEcotoxicology($order = Criteria::ASC) Order by the Ecotoxicology column
 * @method StocksWithIgfaDamagedQuery orderByCatches($order = Criteria::ASC) Order by the Catches column
 * @method StocksWithIgfaDamagedQuery orderByFaoaqua($order = Criteria::ASC) Order by the FAOAqua column
 * @method StocksWithIgfaDamagedQuery orderByLengthrelations($order = Criteria::ASC) Order by the LengthRelations column
 * @method StocksWithIgfaDamagedQuery orderByLengthfrequency($order = Criteria::ASC) Order by the LengthFrequency column
 * @method StocksWithIgfaDamagedQuery orderBySounds($order = Criteria::ASC) Order by the Sounds column
 * @method StocksWithIgfaDamagedQuery orderByBroodstock($order = Criteria::ASC) Order by the Broodstock column
 * @method StocksWithIgfaDamagedQuery orderByEggnursery($order = Criteria::ASC) Order by the EggNursery column
 * @method StocksWithIgfaDamagedQuery orderByFrynursery($order = Criteria::ASC) Order by the FryNursery column
 * @method StocksWithIgfaDamagedQuery orderByLarvalnursery($order = Criteria::ASC) Order by the LarvalNursery column
 * @method StocksWithIgfaDamagedQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method StocksWithIgfaDamagedQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method StocksWithIgfaDamagedQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method StocksWithIgfaDamagedQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method StocksWithIgfaDamagedQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method StocksWithIgfaDamagedQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 *
 * @method StocksWithIgfaDamagedQuery groupByStockcode() Group by the StockCode column
 * @method StocksWithIgfaDamagedQuery groupByStockdefs() Group by the StockDefs column
 * @method StocksWithIgfaDamagedQuery groupBySpeccode() Group by the SpecCode column
 * @method StocksWithIgfaDamagedQuery groupByLevel() Group by the Level column
 * @method StocksWithIgfaDamagedQuery groupByLocalunique() Group by the LocalUnique column
 * @method StocksWithIgfaDamagedQuery groupByIucnCode() Group by the IUCN_Code column
 * @method StocksWithIgfaDamagedQuery groupByIucnAssessment() Group by the IUCN_Assessment column
 * @method StocksWithIgfaDamagedQuery groupByProtected() Group by the Protected column
 * @method StocksWithIgfaDamagedQuery groupByStocksrefno() Group by the StocksRefNo column
 * @method StocksWithIgfaDamagedQuery groupByNorthernmost() Group by the Northernmost column
 * @method StocksWithIgfaDamagedQuery groupByNorthsouthn() Group by the NorthSouthN column
 * @method StocksWithIgfaDamagedQuery groupBySouthermost() Group by the Southermost column
 * @method StocksWithIgfaDamagedQuery groupByNorthsouths() Group by the NorthSouthS column
 * @method StocksWithIgfaDamagedQuery groupByWesternmost() Group by the Westernmost column
 * @method StocksWithIgfaDamagedQuery groupByWesteastw() Group by the WestEastW column
 * @method StocksWithIgfaDamagedQuery groupByEasternmost() Group by the Easternmost column
 * @method StocksWithIgfaDamagedQuery groupByWesteaste() Group by the WestEastE column
 * @method StocksWithIgfaDamagedQuery groupByBoundingref() Group by the BoundingRef column
 * @method StocksWithIgfaDamagedQuery groupByBoundingmethod() Group by the BoundingMethod column
 * @method StocksWithIgfaDamagedQuery groupByTempmin() Group by the TempMin column
 * @method StocksWithIgfaDamagedQuery groupByTempmax() Group by the TempMax column
 * @method StocksWithIgfaDamagedQuery groupByTempref() Group by the TempRef column
 * @method StocksWithIgfaDamagedQuery groupByEnvtemp() Group by the EnvTemp column
 * @method StocksWithIgfaDamagedQuery groupByResilience() Group by the Resilience column
 * @method StocksWithIgfaDamagedQuery groupByResilienceremark() Group by the ResilienceRemark column
 * @method StocksWithIgfaDamagedQuery groupByPhmin() Group by the pHMin column
 * @method StocksWithIgfaDamagedQuery groupByPhmax() Group by the pHMax column
 * @method StocksWithIgfaDamagedQuery groupByPhref() Group by the pHRef column
 * @method StocksWithIgfaDamagedQuery groupByDhmin() Group by the dHMin column
 * @method StocksWithIgfaDamagedQuery groupByDhmax() Group by the dHMax column
 * @method StocksWithIgfaDamagedQuery groupByDhref() Group by the dHRef column
 * @method StocksWithIgfaDamagedQuery groupByGenbankid() Group by the GenBankID column
 * @method StocksWithIgfaDamagedQuery groupByRfeid() Group by the RfeID column
 * @method StocksWithIgfaDamagedQuery groupByFigisId() Group by the FIGIS_ID column
 * @method StocksWithIgfaDamagedQuery groupByEcotoxid() Group by the EcotoxID column
 * @method StocksWithIgfaDamagedQuery groupByScrfaData() Group by the SCRFA_data column
 * @method StocksWithIgfaDamagedQuery groupByGmadId() Group by the GMAD_ID column
 * @method StocksWithIgfaDamagedQuery groupBySaup() Group by the SAUP column
 * @method StocksWithIgfaDamagedQuery groupBySaupId() Group by the SAUP_ID column
 * @method StocksWithIgfaDamagedQuery groupBySaupGroup() Group by the SAUP_Group column
 * @method StocksWithIgfaDamagedQuery groupByAusmuseum() Group by the AusMuseum column
 * @method StocksWithIgfaDamagedQuery groupByFishtrace() Group by the FishTrace column
 * @method StocksWithIgfaDamagedQuery groupByIucnId() Group by the IUCN_ID column
 * @method StocksWithIgfaDamagedQuery groupByIucnGroup() Group by the IUCN_Group column
 * @method StocksWithIgfaDamagedQuery groupByBoldId() Group by the BOLD_ID column
 * @method StocksWithIgfaDamagedQuery groupByIgfaname() Group by the IGFAName column
 * @method StocksWithIgfaDamagedQuery groupByEssayid() Group by the EssayID column
 * @method StocksWithIgfaDamagedQuery groupByAquamaps() Group by the Aquamaps column
 * @method StocksWithIgfaDamagedQuery groupByMorphology() Group by the Morphology column
 * @method StocksWithIgfaDamagedQuery groupByOccurrence() Group by the Occurrence column
 * @method StocksWithIgfaDamagedQuery groupByStrains() Group by the Strains column
 * @method StocksWithIgfaDamagedQuery groupByEcology() Group by the Ecology column
 * @method StocksWithIgfaDamagedQuery groupByDiseases() Group by the Diseases column
 * @method StocksWithIgfaDamagedQuery groupByAbnorm() Group by the Abnorm column
 * @method StocksWithIgfaDamagedQuery groupByMetabolism() Group by the Metabolism column
 * @method StocksWithIgfaDamagedQuery groupByPredators() Group by the Predators column
 * @method StocksWithIgfaDamagedQuery groupBySpawning() Group by the Spawning column
 * @method StocksWithIgfaDamagedQuery groupBySpeed() Group by the Speed column
 * @method StocksWithIgfaDamagedQuery groupByDiet() Group by the Diet column
 * @method StocksWithIgfaDamagedQuery groupByEggs() Group by the Eggs column
 * @method StocksWithIgfaDamagedQuery groupByEggdevelop() Group by the EggDevelop column
 * @method StocksWithIgfaDamagedQuery groupByFood() Group by the Food column
 * @method StocksWithIgfaDamagedQuery groupByLarvae() Group by the Larvae column
 * @method StocksWithIgfaDamagedQuery groupByLarvdyn() Group by the LarvDyn column
 * @method StocksWithIgfaDamagedQuery groupByLarvspeed() Group by the LarvSpeed column
 * @method StocksWithIgfaDamagedQuery groupByPopdyn() Group by the PopDyn column
 * @method StocksWithIgfaDamagedQuery groupByLengthweight() Group by the LengthWeight column
 * @method StocksWithIgfaDamagedQuery groupByGillarea() Group by the Gillarea column
 * @method StocksWithIgfaDamagedQuery groupByMaturity() Group by the Maturity column
 * @method StocksWithIgfaDamagedQuery groupByMatsizes() Group by the MatSizes column
 * @method StocksWithIgfaDamagedQuery groupByProcessing() Group by the Processing column
 * @method StocksWithIgfaDamagedQuery groupByReproduction() Group by the Reproduction column
 * @method StocksWithIgfaDamagedQuery groupByIntroductions() Group by the Introductions column
 * @method StocksWithIgfaDamagedQuery groupByAbundance() Group by the Abundance column
 * @method StocksWithIgfaDamagedQuery groupByVision() Group by the Vision column
 * @method StocksWithIgfaDamagedQuery groupByGenetics() Group by the Genetics column
 * @method StocksWithIgfaDamagedQuery groupByAquaculture() Group by the Aquaculture column
 * @method StocksWithIgfaDamagedQuery groupByCountrycomp() Group by the CountryComp column
 * @method StocksWithIgfaDamagedQuery groupByAllele() Group by the Allele column
 * @method StocksWithIgfaDamagedQuery groupByGeneticstudies() Group by the GeneticStudies column
 * @method StocksWithIgfaDamagedQuery groupByRation() Group by the Ration column
 * @method StocksWithIgfaDamagedQuery groupByFoods() Group by the Foods column
 * @method StocksWithIgfaDamagedQuery groupByEcotoxicology() Group by the Ecotoxicology column
 * @method StocksWithIgfaDamagedQuery groupByCatches() Group by the Catches column
 * @method StocksWithIgfaDamagedQuery groupByFaoaqua() Group by the FAOAqua column
 * @method StocksWithIgfaDamagedQuery groupByLengthrelations() Group by the LengthRelations column
 * @method StocksWithIgfaDamagedQuery groupByLengthfrequency() Group by the LengthFrequency column
 * @method StocksWithIgfaDamagedQuery groupBySounds() Group by the Sounds column
 * @method StocksWithIgfaDamagedQuery groupByBroodstock() Group by the Broodstock column
 * @method StocksWithIgfaDamagedQuery groupByEggnursery() Group by the EggNursery column
 * @method StocksWithIgfaDamagedQuery groupByFrynursery() Group by the FryNursery column
 * @method StocksWithIgfaDamagedQuery groupByLarvalnursery() Group by the LarvalNursery column
 * @method StocksWithIgfaDamagedQuery groupByEntered() Group by the Entered column
 * @method StocksWithIgfaDamagedQuery groupByDateentered() Group by the DateEntered column
 * @method StocksWithIgfaDamagedQuery groupByModified() Group by the Modified column
 * @method StocksWithIgfaDamagedQuery groupByDatemodified() Group by the DateModified column
 * @method StocksWithIgfaDamagedQuery groupByExpert() Group by the Expert column
 * @method StocksWithIgfaDamagedQuery groupByDatechecked() Group by the DateChecked column
 *
 * @method StocksWithIgfaDamagedQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method StocksWithIgfaDamagedQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method StocksWithIgfaDamagedQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method StocksWithIgfaDamaged findOne(PropelPDO $con = null) Return the first StocksWithIgfaDamaged matching the query
 * @method StocksWithIgfaDamaged findOneOrCreate(PropelPDO $con = null) Return the first StocksWithIgfaDamaged matching the query, or a new StocksWithIgfaDamaged object populated from the query conditions when no match is found
 *
 * @method StocksWithIgfaDamaged findOneByStockcode(int $StockCode) Return the first StocksWithIgfaDamaged filtered by the StockCode column
 * @method StocksWithIgfaDamaged findOneByStockdefs(string $StockDefs) Return the first StocksWithIgfaDamaged filtered by the StockDefs column
 * @method StocksWithIgfaDamaged findOneBySpeccode(int $SpecCode) Return the first StocksWithIgfaDamaged filtered by the SpecCode column
 * @method StocksWithIgfaDamaged findOneByLevel(string $Level) Return the first StocksWithIgfaDamaged filtered by the Level column
 * @method StocksWithIgfaDamaged findOneByLocalunique(string $LocalUnique) Return the first StocksWithIgfaDamaged filtered by the LocalUnique column
 * @method StocksWithIgfaDamaged findOneByIucnCode(string $IUCN_Code) Return the first StocksWithIgfaDamaged filtered by the IUCN_Code column
 * @method StocksWithIgfaDamaged findOneByIucnAssessment(string $IUCN_Assessment) Return the first StocksWithIgfaDamaged filtered by the IUCN_Assessment column
 * @method StocksWithIgfaDamaged findOneByProtected(string $Protected) Return the first StocksWithIgfaDamaged filtered by the Protected column
 * @method StocksWithIgfaDamaged findOneByStocksrefno(int $StocksRefNo) Return the first StocksWithIgfaDamaged filtered by the StocksRefNo column
 * @method StocksWithIgfaDamaged findOneByNorthernmost(int $Northernmost) Return the first StocksWithIgfaDamaged filtered by the Northernmost column
 * @method StocksWithIgfaDamaged findOneByNorthsouthn(string $NorthSouthN) Return the first StocksWithIgfaDamaged filtered by the NorthSouthN column
 * @method StocksWithIgfaDamaged findOneBySouthermost(int $Southermost) Return the first StocksWithIgfaDamaged filtered by the Southermost column
 * @method StocksWithIgfaDamaged findOneByNorthsouths(string $NorthSouthS) Return the first StocksWithIgfaDamaged filtered by the NorthSouthS column
 * @method StocksWithIgfaDamaged findOneByWesternmost(int $Westernmost) Return the first StocksWithIgfaDamaged filtered by the Westernmost column
 * @method StocksWithIgfaDamaged findOneByWesteastw(string $WestEastW) Return the first StocksWithIgfaDamaged filtered by the WestEastW column
 * @method StocksWithIgfaDamaged findOneByEasternmost(int $Easternmost) Return the first StocksWithIgfaDamaged filtered by the Easternmost column
 * @method StocksWithIgfaDamaged findOneByWesteaste(string $WestEastE) Return the first StocksWithIgfaDamaged filtered by the WestEastE column
 * @method StocksWithIgfaDamaged findOneByBoundingref(int $BoundingRef) Return the first StocksWithIgfaDamaged filtered by the BoundingRef column
 * @method StocksWithIgfaDamaged findOneByBoundingmethod(string $BoundingMethod) Return the first StocksWithIgfaDamaged filtered by the BoundingMethod column
 * @method StocksWithIgfaDamaged findOneByTempmin(double $TempMin) Return the first StocksWithIgfaDamaged filtered by the TempMin column
 * @method StocksWithIgfaDamaged findOneByTempmax(double $TempMax) Return the first StocksWithIgfaDamaged filtered by the TempMax column
 * @method StocksWithIgfaDamaged findOneByTempref(int $TempRef) Return the first StocksWithIgfaDamaged filtered by the TempRef column
 * @method StocksWithIgfaDamaged findOneByEnvtemp(string $EnvTemp) Return the first StocksWithIgfaDamaged filtered by the EnvTemp column
 * @method StocksWithIgfaDamaged findOneByResilience(string $Resilience) Return the first StocksWithIgfaDamaged filtered by the Resilience column
 * @method StocksWithIgfaDamaged findOneByResilienceremark(string $ResilienceRemark) Return the first StocksWithIgfaDamaged filtered by the ResilienceRemark column
 * @method StocksWithIgfaDamaged findOneByPhmin(double $pHMin) Return the first StocksWithIgfaDamaged filtered by the pHMin column
 * @method StocksWithIgfaDamaged findOneByPhmax(double $pHMax) Return the first StocksWithIgfaDamaged filtered by the pHMax column
 * @method StocksWithIgfaDamaged findOneByPhref(int $pHRef) Return the first StocksWithIgfaDamaged filtered by the pHRef column
 * @method StocksWithIgfaDamaged findOneByDhmin(double $dHMin) Return the first StocksWithIgfaDamaged filtered by the dHMin column
 * @method StocksWithIgfaDamaged findOneByDhmax(double $dHMax) Return the first StocksWithIgfaDamaged filtered by the dHMax column
 * @method StocksWithIgfaDamaged findOneByDhref(int $dHRef) Return the first StocksWithIgfaDamaged filtered by the dHRef column
 * @method StocksWithIgfaDamaged findOneByGenbankid(int $GenBankID) Return the first StocksWithIgfaDamaged filtered by the GenBankID column
 * @method StocksWithIgfaDamaged findOneByRfeid(string $RfeID) Return the first StocksWithIgfaDamaged filtered by the RfeID column
 * @method StocksWithIgfaDamaged findOneByFigisId(int $FIGIS_ID) Return the first StocksWithIgfaDamaged filtered by the FIGIS_ID column
 * @method StocksWithIgfaDamaged findOneByEcotoxid(int $EcotoxID) Return the first StocksWithIgfaDamaged filtered by the EcotoxID column
 * @method StocksWithIgfaDamaged findOneByScrfaData(string $SCRFA_data) Return the first StocksWithIgfaDamaged filtered by the SCRFA_data column
 * @method StocksWithIgfaDamaged findOneByGmadId(int $GMAD_ID) Return the first StocksWithIgfaDamaged filtered by the GMAD_ID column
 * @method StocksWithIgfaDamaged findOneBySaup(string $SAUP) Return the first StocksWithIgfaDamaged filtered by the SAUP column
 * @method StocksWithIgfaDamaged findOneBySaupId(int $SAUP_ID) Return the first StocksWithIgfaDamaged filtered by the SAUP_ID column
 * @method StocksWithIgfaDamaged findOneBySaupGroup(int $SAUP_Group) Return the first StocksWithIgfaDamaged filtered by the SAUP_Group column
 * @method StocksWithIgfaDamaged findOneByAusmuseum(int $AusMuseum) Return the first StocksWithIgfaDamaged filtered by the AusMuseum column
 * @method StocksWithIgfaDamaged findOneByFishtrace(string $FishTrace) Return the first StocksWithIgfaDamaged filtered by the FishTrace column
 * @method StocksWithIgfaDamaged findOneByIucnId(int $IUCN_ID) Return the first StocksWithIgfaDamaged filtered by the IUCN_ID column
 * @method StocksWithIgfaDamaged findOneByIucnGroup(string $IUCN_Group) Return the first StocksWithIgfaDamaged filtered by the IUCN_Group column
 * @method StocksWithIgfaDamaged findOneByBoldId(int $BOLD_ID) Return the first StocksWithIgfaDamaged filtered by the BOLD_ID column
 * @method StocksWithIgfaDamaged findOneByIgfaname(string $IGFAName) Return the first StocksWithIgfaDamaged filtered by the IGFAName column
 * @method StocksWithIgfaDamaged findOneByEssayid(int $EssayID) Return the first StocksWithIgfaDamaged filtered by the EssayID column
 * @method StocksWithIgfaDamaged findOneByAquamaps(string $Aquamaps) Return the first StocksWithIgfaDamaged filtered by the Aquamaps column
 * @method StocksWithIgfaDamaged findOneByMorphology(string $Morphology) Return the first StocksWithIgfaDamaged filtered by the Morphology column
 * @method StocksWithIgfaDamaged findOneByOccurrence(string $Occurrence) Return the first StocksWithIgfaDamaged filtered by the Occurrence column
 * @method StocksWithIgfaDamaged findOneByStrains(string $Strains) Return the first StocksWithIgfaDamaged filtered by the Strains column
 * @method StocksWithIgfaDamaged findOneByEcology(string $Ecology) Return the first StocksWithIgfaDamaged filtered by the Ecology column
 * @method StocksWithIgfaDamaged findOneByDiseases(string $Diseases) Return the first StocksWithIgfaDamaged filtered by the Diseases column
 * @method StocksWithIgfaDamaged findOneByAbnorm(string $Abnorm) Return the first StocksWithIgfaDamaged filtered by the Abnorm column
 * @method StocksWithIgfaDamaged findOneByMetabolism(string $Metabolism) Return the first StocksWithIgfaDamaged filtered by the Metabolism column
 * @method StocksWithIgfaDamaged findOneByPredators(string $Predators) Return the first StocksWithIgfaDamaged filtered by the Predators column
 * @method StocksWithIgfaDamaged findOneBySpawning(string $Spawning) Return the first StocksWithIgfaDamaged filtered by the Spawning column
 * @method StocksWithIgfaDamaged findOneBySpeed(string $Speed) Return the first StocksWithIgfaDamaged filtered by the Speed column
 * @method StocksWithIgfaDamaged findOneByDiet(string $Diet) Return the first StocksWithIgfaDamaged filtered by the Diet column
 * @method StocksWithIgfaDamaged findOneByEggs(string $Eggs) Return the first StocksWithIgfaDamaged filtered by the Eggs column
 * @method StocksWithIgfaDamaged findOneByEggdevelop(string $EggDevelop) Return the first StocksWithIgfaDamaged filtered by the EggDevelop column
 * @method StocksWithIgfaDamaged findOneByFood(string $Food) Return the first StocksWithIgfaDamaged filtered by the Food column
 * @method StocksWithIgfaDamaged findOneByLarvae(string $Larvae) Return the first StocksWithIgfaDamaged filtered by the Larvae column
 * @method StocksWithIgfaDamaged findOneByLarvdyn(string $LarvDyn) Return the first StocksWithIgfaDamaged filtered by the LarvDyn column
 * @method StocksWithIgfaDamaged findOneByLarvspeed(string $LarvSpeed) Return the first StocksWithIgfaDamaged filtered by the LarvSpeed column
 * @method StocksWithIgfaDamaged findOneByPopdyn(string $PopDyn) Return the first StocksWithIgfaDamaged filtered by the PopDyn column
 * @method StocksWithIgfaDamaged findOneByLengthweight(string $LengthWeight) Return the first StocksWithIgfaDamaged filtered by the LengthWeight column
 * @method StocksWithIgfaDamaged findOneByGillarea(string $Gillarea) Return the first StocksWithIgfaDamaged filtered by the Gillarea column
 * @method StocksWithIgfaDamaged findOneByMaturity(string $Maturity) Return the first StocksWithIgfaDamaged filtered by the Maturity column
 * @method StocksWithIgfaDamaged findOneByMatsizes(string $MatSizes) Return the first StocksWithIgfaDamaged filtered by the MatSizes column
 * @method StocksWithIgfaDamaged findOneByProcessing(string $Processing) Return the first StocksWithIgfaDamaged filtered by the Processing column
 * @method StocksWithIgfaDamaged findOneByReproduction(string $Reproduction) Return the first StocksWithIgfaDamaged filtered by the Reproduction column
 * @method StocksWithIgfaDamaged findOneByIntroductions(string $Introductions) Return the first StocksWithIgfaDamaged filtered by the Introductions column
 * @method StocksWithIgfaDamaged findOneByAbundance(string $Abundance) Return the first StocksWithIgfaDamaged filtered by the Abundance column
 * @method StocksWithIgfaDamaged findOneByVision(string $Vision) Return the first StocksWithIgfaDamaged filtered by the Vision column
 * @method StocksWithIgfaDamaged findOneByGenetics(string $Genetics) Return the first StocksWithIgfaDamaged filtered by the Genetics column
 * @method StocksWithIgfaDamaged findOneByAquaculture(string $Aquaculture) Return the first StocksWithIgfaDamaged filtered by the Aquaculture column
 * @method StocksWithIgfaDamaged findOneByCountrycomp(string $CountryComp) Return the first StocksWithIgfaDamaged filtered by the CountryComp column
 * @method StocksWithIgfaDamaged findOneByAllele(string $Allele) Return the first StocksWithIgfaDamaged filtered by the Allele column
 * @method StocksWithIgfaDamaged findOneByGeneticstudies(string $GeneticStudies) Return the first StocksWithIgfaDamaged filtered by the GeneticStudies column
 * @method StocksWithIgfaDamaged findOneByRation(string $Ration) Return the first StocksWithIgfaDamaged filtered by the Ration column
 * @method StocksWithIgfaDamaged findOneByFoods(string $Foods) Return the first StocksWithIgfaDamaged filtered by the Foods column
 * @method StocksWithIgfaDamaged findOneByEcotoxicology(string $Ecotoxicology) Return the first StocksWithIgfaDamaged filtered by the Ecotoxicology column
 * @method StocksWithIgfaDamaged findOneByCatches(string $Catches) Return the first StocksWithIgfaDamaged filtered by the Catches column
 * @method StocksWithIgfaDamaged findOneByFaoaqua(string $FAOAqua) Return the first StocksWithIgfaDamaged filtered by the FAOAqua column
 * @method StocksWithIgfaDamaged findOneByLengthrelations(string $LengthRelations) Return the first StocksWithIgfaDamaged filtered by the LengthRelations column
 * @method StocksWithIgfaDamaged findOneByLengthfrequency(string $LengthFrequency) Return the first StocksWithIgfaDamaged filtered by the LengthFrequency column
 * @method StocksWithIgfaDamaged findOneBySounds(string $Sounds) Return the first StocksWithIgfaDamaged filtered by the Sounds column
 * @method StocksWithIgfaDamaged findOneByBroodstock(string $Broodstock) Return the first StocksWithIgfaDamaged filtered by the Broodstock column
 * @method StocksWithIgfaDamaged findOneByEggnursery(string $EggNursery) Return the first StocksWithIgfaDamaged filtered by the EggNursery column
 * @method StocksWithIgfaDamaged findOneByFrynursery(string $FryNursery) Return the first StocksWithIgfaDamaged filtered by the FryNursery column
 * @method StocksWithIgfaDamaged findOneByLarvalnursery(string $LarvalNursery) Return the first StocksWithIgfaDamaged filtered by the LarvalNursery column
 * @method StocksWithIgfaDamaged findOneByEntered(int $Entered) Return the first StocksWithIgfaDamaged filtered by the Entered column
 * @method StocksWithIgfaDamaged findOneByDateentered(string $DateEntered) Return the first StocksWithIgfaDamaged filtered by the DateEntered column
 * @method StocksWithIgfaDamaged findOneByModified(int $Modified) Return the first StocksWithIgfaDamaged filtered by the Modified column
 * @method StocksWithIgfaDamaged findOneByDatemodified(string $DateModified) Return the first StocksWithIgfaDamaged filtered by the DateModified column
 * @method StocksWithIgfaDamaged findOneByExpert(int $Expert) Return the first StocksWithIgfaDamaged filtered by the Expert column
 * @method StocksWithIgfaDamaged findOneByDatechecked(string $DateChecked) Return the first StocksWithIgfaDamaged filtered by the DateChecked column
 *
 * @method array findByStockcode(int $StockCode) Return StocksWithIgfaDamaged objects filtered by the StockCode column
 * @method array findByStockdefs(string $StockDefs) Return StocksWithIgfaDamaged objects filtered by the StockDefs column
 * @method array findBySpeccode(int $SpecCode) Return StocksWithIgfaDamaged objects filtered by the SpecCode column
 * @method array findByLevel(string $Level) Return StocksWithIgfaDamaged objects filtered by the Level column
 * @method array findByLocalunique(string $LocalUnique) Return StocksWithIgfaDamaged objects filtered by the LocalUnique column
 * @method array findByIucnCode(string $IUCN_Code) Return StocksWithIgfaDamaged objects filtered by the IUCN_Code column
 * @method array findByIucnAssessment(string $IUCN_Assessment) Return StocksWithIgfaDamaged objects filtered by the IUCN_Assessment column
 * @method array findByProtected(string $Protected) Return StocksWithIgfaDamaged objects filtered by the Protected column
 * @method array findByStocksrefno(int $StocksRefNo) Return StocksWithIgfaDamaged objects filtered by the StocksRefNo column
 * @method array findByNorthernmost(int $Northernmost) Return StocksWithIgfaDamaged objects filtered by the Northernmost column
 * @method array findByNorthsouthn(string $NorthSouthN) Return StocksWithIgfaDamaged objects filtered by the NorthSouthN column
 * @method array findBySouthermost(int $Southermost) Return StocksWithIgfaDamaged objects filtered by the Southermost column
 * @method array findByNorthsouths(string $NorthSouthS) Return StocksWithIgfaDamaged objects filtered by the NorthSouthS column
 * @method array findByWesternmost(int $Westernmost) Return StocksWithIgfaDamaged objects filtered by the Westernmost column
 * @method array findByWesteastw(string $WestEastW) Return StocksWithIgfaDamaged objects filtered by the WestEastW column
 * @method array findByEasternmost(int $Easternmost) Return StocksWithIgfaDamaged objects filtered by the Easternmost column
 * @method array findByWesteaste(string $WestEastE) Return StocksWithIgfaDamaged objects filtered by the WestEastE column
 * @method array findByBoundingref(int $BoundingRef) Return StocksWithIgfaDamaged objects filtered by the BoundingRef column
 * @method array findByBoundingmethod(string $BoundingMethod) Return StocksWithIgfaDamaged objects filtered by the BoundingMethod column
 * @method array findByTempmin(double $TempMin) Return StocksWithIgfaDamaged objects filtered by the TempMin column
 * @method array findByTempmax(double $TempMax) Return StocksWithIgfaDamaged objects filtered by the TempMax column
 * @method array findByTempref(int $TempRef) Return StocksWithIgfaDamaged objects filtered by the TempRef column
 * @method array findByEnvtemp(string $EnvTemp) Return StocksWithIgfaDamaged objects filtered by the EnvTemp column
 * @method array findByResilience(string $Resilience) Return StocksWithIgfaDamaged objects filtered by the Resilience column
 * @method array findByResilienceremark(string $ResilienceRemark) Return StocksWithIgfaDamaged objects filtered by the ResilienceRemark column
 * @method array findByPhmin(double $pHMin) Return StocksWithIgfaDamaged objects filtered by the pHMin column
 * @method array findByPhmax(double $pHMax) Return StocksWithIgfaDamaged objects filtered by the pHMax column
 * @method array findByPhref(int $pHRef) Return StocksWithIgfaDamaged objects filtered by the pHRef column
 * @method array findByDhmin(double $dHMin) Return StocksWithIgfaDamaged objects filtered by the dHMin column
 * @method array findByDhmax(double $dHMax) Return StocksWithIgfaDamaged objects filtered by the dHMax column
 * @method array findByDhref(int $dHRef) Return StocksWithIgfaDamaged objects filtered by the dHRef column
 * @method array findByGenbankid(int $GenBankID) Return StocksWithIgfaDamaged objects filtered by the GenBankID column
 * @method array findByRfeid(string $RfeID) Return StocksWithIgfaDamaged objects filtered by the RfeID column
 * @method array findByFigisId(int $FIGIS_ID) Return StocksWithIgfaDamaged objects filtered by the FIGIS_ID column
 * @method array findByEcotoxid(int $EcotoxID) Return StocksWithIgfaDamaged objects filtered by the EcotoxID column
 * @method array findByScrfaData(string $SCRFA_data) Return StocksWithIgfaDamaged objects filtered by the SCRFA_data column
 * @method array findByGmadId(int $GMAD_ID) Return StocksWithIgfaDamaged objects filtered by the GMAD_ID column
 * @method array findBySaup(string $SAUP) Return StocksWithIgfaDamaged objects filtered by the SAUP column
 * @method array findBySaupId(int $SAUP_ID) Return StocksWithIgfaDamaged objects filtered by the SAUP_ID column
 * @method array findBySaupGroup(int $SAUP_Group) Return StocksWithIgfaDamaged objects filtered by the SAUP_Group column
 * @method array findByAusmuseum(int $AusMuseum) Return StocksWithIgfaDamaged objects filtered by the AusMuseum column
 * @method array findByFishtrace(string $FishTrace) Return StocksWithIgfaDamaged objects filtered by the FishTrace column
 * @method array findByIucnId(int $IUCN_ID) Return StocksWithIgfaDamaged objects filtered by the IUCN_ID column
 * @method array findByIucnGroup(string $IUCN_Group) Return StocksWithIgfaDamaged objects filtered by the IUCN_Group column
 * @method array findByBoldId(int $BOLD_ID) Return StocksWithIgfaDamaged objects filtered by the BOLD_ID column
 * @method array findByIgfaname(string $IGFAName) Return StocksWithIgfaDamaged objects filtered by the IGFAName column
 * @method array findByEssayid(int $EssayID) Return StocksWithIgfaDamaged objects filtered by the EssayID column
 * @method array findByAquamaps(string $Aquamaps) Return StocksWithIgfaDamaged objects filtered by the Aquamaps column
 * @method array findByMorphology(string $Morphology) Return StocksWithIgfaDamaged objects filtered by the Morphology column
 * @method array findByOccurrence(string $Occurrence) Return StocksWithIgfaDamaged objects filtered by the Occurrence column
 * @method array findByStrains(string $Strains) Return StocksWithIgfaDamaged objects filtered by the Strains column
 * @method array findByEcology(string $Ecology) Return StocksWithIgfaDamaged objects filtered by the Ecology column
 * @method array findByDiseases(string $Diseases) Return StocksWithIgfaDamaged objects filtered by the Diseases column
 * @method array findByAbnorm(string $Abnorm) Return StocksWithIgfaDamaged objects filtered by the Abnorm column
 * @method array findByMetabolism(string $Metabolism) Return StocksWithIgfaDamaged objects filtered by the Metabolism column
 * @method array findByPredators(string $Predators) Return StocksWithIgfaDamaged objects filtered by the Predators column
 * @method array findBySpawning(string $Spawning) Return StocksWithIgfaDamaged objects filtered by the Spawning column
 * @method array findBySpeed(string $Speed) Return StocksWithIgfaDamaged objects filtered by the Speed column
 * @method array findByDiet(string $Diet) Return StocksWithIgfaDamaged objects filtered by the Diet column
 * @method array findByEggs(string $Eggs) Return StocksWithIgfaDamaged objects filtered by the Eggs column
 * @method array findByEggdevelop(string $EggDevelop) Return StocksWithIgfaDamaged objects filtered by the EggDevelop column
 * @method array findByFood(string $Food) Return StocksWithIgfaDamaged objects filtered by the Food column
 * @method array findByLarvae(string $Larvae) Return StocksWithIgfaDamaged objects filtered by the Larvae column
 * @method array findByLarvdyn(string $LarvDyn) Return StocksWithIgfaDamaged objects filtered by the LarvDyn column
 * @method array findByLarvspeed(string $LarvSpeed) Return StocksWithIgfaDamaged objects filtered by the LarvSpeed column
 * @method array findByPopdyn(string $PopDyn) Return StocksWithIgfaDamaged objects filtered by the PopDyn column
 * @method array findByLengthweight(string $LengthWeight) Return StocksWithIgfaDamaged objects filtered by the LengthWeight column
 * @method array findByGillarea(string $Gillarea) Return StocksWithIgfaDamaged objects filtered by the Gillarea column
 * @method array findByMaturity(string $Maturity) Return StocksWithIgfaDamaged objects filtered by the Maturity column
 * @method array findByMatsizes(string $MatSizes) Return StocksWithIgfaDamaged objects filtered by the MatSizes column
 * @method array findByProcessing(string $Processing) Return StocksWithIgfaDamaged objects filtered by the Processing column
 * @method array findByReproduction(string $Reproduction) Return StocksWithIgfaDamaged objects filtered by the Reproduction column
 * @method array findByIntroductions(string $Introductions) Return StocksWithIgfaDamaged objects filtered by the Introductions column
 * @method array findByAbundance(string $Abundance) Return StocksWithIgfaDamaged objects filtered by the Abundance column
 * @method array findByVision(string $Vision) Return StocksWithIgfaDamaged objects filtered by the Vision column
 * @method array findByGenetics(string $Genetics) Return StocksWithIgfaDamaged objects filtered by the Genetics column
 * @method array findByAquaculture(string $Aquaculture) Return StocksWithIgfaDamaged objects filtered by the Aquaculture column
 * @method array findByCountrycomp(string $CountryComp) Return StocksWithIgfaDamaged objects filtered by the CountryComp column
 * @method array findByAllele(string $Allele) Return StocksWithIgfaDamaged objects filtered by the Allele column
 * @method array findByGeneticstudies(string $GeneticStudies) Return StocksWithIgfaDamaged objects filtered by the GeneticStudies column
 * @method array findByRation(string $Ration) Return StocksWithIgfaDamaged objects filtered by the Ration column
 * @method array findByFoods(string $Foods) Return StocksWithIgfaDamaged objects filtered by the Foods column
 * @method array findByEcotoxicology(string $Ecotoxicology) Return StocksWithIgfaDamaged objects filtered by the Ecotoxicology column
 * @method array findByCatches(string $Catches) Return StocksWithIgfaDamaged objects filtered by the Catches column
 * @method array findByFaoaqua(string $FAOAqua) Return StocksWithIgfaDamaged objects filtered by the FAOAqua column
 * @method array findByLengthrelations(string $LengthRelations) Return StocksWithIgfaDamaged objects filtered by the LengthRelations column
 * @method array findByLengthfrequency(string $LengthFrequency) Return StocksWithIgfaDamaged objects filtered by the LengthFrequency column
 * @method array findBySounds(string $Sounds) Return StocksWithIgfaDamaged objects filtered by the Sounds column
 * @method array findByBroodstock(string $Broodstock) Return StocksWithIgfaDamaged objects filtered by the Broodstock column
 * @method array findByEggnursery(string $EggNursery) Return StocksWithIgfaDamaged objects filtered by the EggNursery column
 * @method array findByFrynursery(string $FryNursery) Return StocksWithIgfaDamaged objects filtered by the FryNursery column
 * @method array findByLarvalnursery(string $LarvalNursery) Return StocksWithIgfaDamaged objects filtered by the LarvalNursery column
 * @method array findByEntered(int $Entered) Return StocksWithIgfaDamaged objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return StocksWithIgfaDamaged objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return StocksWithIgfaDamaged objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return StocksWithIgfaDamaged objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return StocksWithIgfaDamaged objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return StocksWithIgfaDamaged objects filtered by the DateChecked column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseStocksWithIgfaDamagedQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseStocksWithIgfaDamagedQuery object.
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
            $modelName = 'StocksWithIgfaDamaged';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new StocksWithIgfaDamagedQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   StocksWithIgfaDamagedQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return StocksWithIgfaDamagedQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof StocksWithIgfaDamagedQuery) {
            return $criteria;
        }
        $query = new StocksWithIgfaDamagedQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$SpecCode, $Level, $LocalUnique]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   StocksWithIgfaDamaged|StocksWithIgfaDamaged[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = StocksWithIgfaDamagedPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(StocksWithIgfaDamagedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 StocksWithIgfaDamaged A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `StockCode`, `StockDefs`, `SpecCode`, `Level`, `LocalUnique`, `IUCN_Code`, `IUCN_Assessment`, `Protected`, `StocksRefNo`, `Northernmost`, `NorthSouthN`, `Southermost`, `NorthSouthS`, `Westernmost`, `WestEastW`, `Easternmost`, `WestEastE`, `BoundingRef`, `BoundingMethod`, `TempMin`, `TempMax`, `TempRef`, `EnvTemp`, `Resilience`, `ResilienceRemark`, `pHMin`, `pHMax`, `pHRef`, `dHMin`, `dHMax`, `dHRef`, `GenBankID`, `RfeID`, `FIGIS_ID`, `EcotoxID`, `SCRFA_data`, `GMAD_ID`, `SAUP`, `SAUP_ID`, `SAUP_Group`, `AusMuseum`, `FishTrace`, `IUCN_ID`, `IUCN_Group`, `BOLD_ID`, `IGFAName`, `EssayID`, `Aquamaps`, `Morphology`, `Occurrence`, `Strains`, `Ecology`, `Diseases`, `Abnorm`, `Metabolism`, `Predators`, `Spawning`, `Speed`, `Diet`, `Eggs`, `EggDevelop`, `Food`, `Larvae`, `LarvDyn`, `LarvSpeed`, `PopDyn`, `LengthWeight`, `Gillarea`, `Maturity`, `MatSizes`, `Processing`, `Reproduction`, `Introductions`, `Abundance`, `Vision`, `Genetics`, `Aquaculture`, `CountryComp`, `Allele`, `GeneticStudies`, `Ration`, `Foods`, `Ecotoxicology`, `Catches`, `FAOAqua`, `LengthRelations`, `LengthFrequency`, `Sounds`, `Broodstock`, `EggNursery`, `FryNursery`, `LarvalNursery`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked` FROM `stocks_with_igfa_damaged` WHERE `SpecCode` = :p0 AND `Level` = :p1 AND `LocalUnique` = :p2';
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
            $obj = new StocksWithIgfaDamaged();
            $obj->hydrate($row);
            StocksWithIgfaDamagedPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return StocksWithIgfaDamaged|StocksWithIgfaDamaged[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|StocksWithIgfaDamaged[]|mixed the list of results, formatted by the current formatter
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
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(StocksWithIgfaDamagedPeer::SPECCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(StocksWithIgfaDamagedPeer::LEVEL, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(StocksWithIgfaDamagedPeer::LOCALUNIQUE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(StocksWithIgfaDamagedPeer::SPECCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(StocksWithIgfaDamagedPeer::LEVEL, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(StocksWithIgfaDamagedPeer::LOCALUNIQUE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the StockDefs column
     *
     * Example usage:
     * <code>
     * $query->filterByStockdefs('fooValue');   // WHERE StockDefs = 'fooValue'
     * $query->filterByStockdefs('%fooValue%'); // WHERE StockDefs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stockdefs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByStockdefs($stockdefs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stockdefs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stockdefs)) {
                $stockdefs = str_replace('*', '%', $stockdefs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::STOCKDEFS, $stockdefs, $comparison);
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
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the Level column
     *
     * Example usage:
     * <code>
     * $query->filterByLevel('fooValue');   // WHERE Level = 'fooValue'
     * $query->filterByLevel('%fooValue%'); // WHERE Level LIKE '%fooValue%'
     * </code>
     *
     * @param     string $level The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByLevel($level = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($level)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $level)) {
                $level = str_replace('*', '%', $level);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::LEVEL, $level, $comparison);
    }

    /**
     * Filter the query on the LocalUnique column
     *
     * Example usage:
     * <code>
     * $query->filterByLocalunique('fooValue');   // WHERE LocalUnique = 'fooValue'
     * $query->filterByLocalunique('%fooValue%'); // WHERE LocalUnique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $localunique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByLocalunique($localunique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($localunique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $localunique)) {
                $localunique = str_replace('*', '%', $localunique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::LOCALUNIQUE, $localunique, $comparison);
    }

    /**
     * Filter the query on the IUCN_Code column
     *
     * Example usage:
     * <code>
     * $query->filterByIucnCode('fooValue');   // WHERE IUCN_Code = 'fooValue'
     * $query->filterByIucnCode('%fooValue%'); // WHERE IUCN_Code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iucnCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByIucnCode($iucnCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iucnCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $iucnCode)) {
                $iucnCode = str_replace('*', '%', $iucnCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::IUCN_CODE, $iucnCode, $comparison);
    }

    /**
     * Filter the query on the IUCN_Assessment column
     *
     * Example usage:
     * <code>
     * $query->filterByIucnAssessment('fooValue');   // WHERE IUCN_Assessment = 'fooValue'
     * $query->filterByIucnAssessment('%fooValue%'); // WHERE IUCN_Assessment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iucnAssessment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByIucnAssessment($iucnAssessment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iucnAssessment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $iucnAssessment)) {
                $iucnAssessment = str_replace('*', '%', $iucnAssessment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::IUCN_ASSESSMENT, $iucnAssessment, $comparison);
    }

    /**
     * Filter the query on the Protected column
     *
     * Example usage:
     * <code>
     * $query->filterByProtected('fooValue');   // WHERE Protected = 'fooValue'
     * $query->filterByProtected('%fooValue%'); // WHERE Protected LIKE '%fooValue%'
     * </code>
     *
     * @param     string $protected The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByProtected($protected = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($protected)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $protected)) {
                $protected = str_replace('*', '%', $protected);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::PROTECTEDSTOCK, $protected, $comparison);
    }

    /**
     * Filter the query on the StocksRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByStocksrefno(1234); // WHERE StocksRefNo = 1234
     * $query->filterByStocksrefno(array(12, 34)); // WHERE StocksRefNo IN (12, 34)
     * $query->filterByStocksrefno(array('min' => 12)); // WHERE StocksRefNo >= 12
     * $query->filterByStocksrefno(array('max' => 12)); // WHERE StocksRefNo <= 12
     * </code>
     *
     * @param     mixed $stocksrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByStocksrefno($stocksrefno = null, $comparison = null)
    {
        if (is_array($stocksrefno)) {
            $useMinMax = false;
            if (isset($stocksrefno['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::STOCKSREFNO, $stocksrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stocksrefno['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::STOCKSREFNO, $stocksrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::STOCKSREFNO, $stocksrefno, $comparison);
    }

    /**
     * Filter the query on the Northernmost column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthernmost(1234); // WHERE Northernmost = 1234
     * $query->filterByNorthernmost(array(12, 34)); // WHERE Northernmost IN (12, 34)
     * $query->filterByNorthernmost(array('min' => 12)); // WHERE Northernmost >= 12
     * $query->filterByNorthernmost(array('max' => 12)); // WHERE Northernmost <= 12
     * </code>
     *
     * @param     mixed $northernmost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByNorthernmost($northernmost = null, $comparison = null)
    {
        if (is_array($northernmost)) {
            $useMinMax = false;
            if (isset($northernmost['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::NORTHERNMOST, $northernmost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($northernmost['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::NORTHERNMOST, $northernmost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::NORTHERNMOST, $northernmost, $comparison);
    }

    /**
     * Filter the query on the NorthSouthN column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouthn('fooValue');   // WHERE NorthSouthN = 'fooValue'
     * $query->filterByNorthsouthn('%fooValue%'); // WHERE NorthSouthN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouthn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByNorthsouthn($northsouthn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouthn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouthn)) {
                $northsouthn = str_replace('*', '%', $northsouthn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::NORTHSOUTHN, $northsouthn, $comparison);
    }

    /**
     * Filter the query on the Southermost column
     *
     * Example usage:
     * <code>
     * $query->filterBySouthermost(1234); // WHERE Southermost = 1234
     * $query->filterBySouthermost(array(12, 34)); // WHERE Southermost IN (12, 34)
     * $query->filterBySouthermost(array('min' => 12)); // WHERE Southermost >= 12
     * $query->filterBySouthermost(array('max' => 12)); // WHERE Southermost <= 12
     * </code>
     *
     * @param     mixed $southermost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterBySouthermost($southermost = null, $comparison = null)
    {
        if (is_array($southermost)) {
            $useMinMax = false;
            if (isset($southermost['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::SOUTHERMOST, $southermost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($southermost['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::SOUTHERMOST, $southermost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::SOUTHERMOST, $southermost, $comparison);
    }

    /**
     * Filter the query on the NorthSouthS column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouths('fooValue');   // WHERE NorthSouthS = 'fooValue'
     * $query->filterByNorthsouths('%fooValue%'); // WHERE NorthSouthS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouths The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByNorthsouths($northsouths = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouths)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouths)) {
                $northsouths = str_replace('*', '%', $northsouths);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::NORTHSOUTHS, $northsouths, $comparison);
    }

    /**
     * Filter the query on the Westernmost column
     *
     * Example usage:
     * <code>
     * $query->filterByWesternmost(1234); // WHERE Westernmost = 1234
     * $query->filterByWesternmost(array(12, 34)); // WHERE Westernmost IN (12, 34)
     * $query->filterByWesternmost(array('min' => 12)); // WHERE Westernmost >= 12
     * $query->filterByWesternmost(array('max' => 12)); // WHERE Westernmost <= 12
     * </code>
     *
     * @param     mixed $westernmost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByWesternmost($westernmost = null, $comparison = null)
    {
        if (is_array($westernmost)) {
            $useMinMax = false;
            if (isset($westernmost['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::WESTERNMOST, $westernmost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($westernmost['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::WESTERNMOST, $westernmost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::WESTERNMOST, $westernmost, $comparison);
    }

    /**
     * Filter the query on the WestEastW column
     *
     * Example usage:
     * <code>
     * $query->filterByWesteastw('fooValue');   // WHERE WestEastW = 'fooValue'
     * $query->filterByWesteastw('%fooValue%'); // WHERE WestEastW LIKE '%fooValue%'
     * </code>
     *
     * @param     string $westeastw The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByWesteastw($westeastw = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($westeastw)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $westeastw)) {
                $westeastw = str_replace('*', '%', $westeastw);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::WESTEASTW, $westeastw, $comparison);
    }

    /**
     * Filter the query on the Easternmost column
     *
     * Example usage:
     * <code>
     * $query->filterByEasternmost(1234); // WHERE Easternmost = 1234
     * $query->filterByEasternmost(array(12, 34)); // WHERE Easternmost IN (12, 34)
     * $query->filterByEasternmost(array('min' => 12)); // WHERE Easternmost >= 12
     * $query->filterByEasternmost(array('max' => 12)); // WHERE Easternmost <= 12
     * </code>
     *
     * @param     mixed $easternmost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByEasternmost($easternmost = null, $comparison = null)
    {
        if (is_array($easternmost)) {
            $useMinMax = false;
            if (isset($easternmost['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::EASTERNMOST, $easternmost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($easternmost['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::EASTERNMOST, $easternmost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::EASTERNMOST, $easternmost, $comparison);
    }

    /**
     * Filter the query on the WestEastE column
     *
     * Example usage:
     * <code>
     * $query->filterByWesteaste('fooValue');   // WHERE WestEastE = 'fooValue'
     * $query->filterByWesteaste('%fooValue%'); // WHERE WestEastE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $westeaste The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByWesteaste($westeaste = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($westeaste)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $westeaste)) {
                $westeaste = str_replace('*', '%', $westeaste);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::WESTEASTE, $westeaste, $comparison);
    }

    /**
     * Filter the query on the BoundingRef column
     *
     * Example usage:
     * <code>
     * $query->filterByBoundingref(1234); // WHERE BoundingRef = 1234
     * $query->filterByBoundingref(array(12, 34)); // WHERE BoundingRef IN (12, 34)
     * $query->filterByBoundingref(array('min' => 12)); // WHERE BoundingRef >= 12
     * $query->filterByBoundingref(array('max' => 12)); // WHERE BoundingRef <= 12
     * </code>
     *
     * @param     mixed $boundingref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByBoundingref($boundingref = null, $comparison = null)
    {
        if (is_array($boundingref)) {
            $useMinMax = false;
            if (isset($boundingref['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::BOUNDINGREF, $boundingref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boundingref['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::BOUNDINGREF, $boundingref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::BOUNDINGREF, $boundingref, $comparison);
    }

    /**
     * Filter the query on the BoundingMethod column
     *
     * Example usage:
     * <code>
     * $query->filterByBoundingmethod('fooValue');   // WHERE BoundingMethod = 'fooValue'
     * $query->filterByBoundingmethod('%fooValue%'); // WHERE BoundingMethod LIKE '%fooValue%'
     * </code>
     *
     * @param     string $boundingmethod The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByBoundingmethod($boundingmethod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($boundingmethod)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $boundingmethod)) {
                $boundingmethod = str_replace('*', '%', $boundingmethod);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::BOUNDINGMETHOD, $boundingmethod, $comparison);
    }

    /**
     * Filter the query on the TempMin column
     *
     * Example usage:
     * <code>
     * $query->filterByTempmin(1234); // WHERE TempMin = 1234
     * $query->filterByTempmin(array(12, 34)); // WHERE TempMin IN (12, 34)
     * $query->filterByTempmin(array('min' => 12)); // WHERE TempMin >= 12
     * $query->filterByTempmin(array('max' => 12)); // WHERE TempMin <= 12
     * </code>
     *
     * @param     mixed $tempmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByTempmin($tempmin = null, $comparison = null)
    {
        if (is_array($tempmin)) {
            $useMinMax = false;
            if (isset($tempmin['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::TEMPMIN, $tempmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmin['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::TEMPMIN, $tempmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::TEMPMIN, $tempmin, $comparison);
    }

    /**
     * Filter the query on the TempMax column
     *
     * Example usage:
     * <code>
     * $query->filterByTempmax(1234); // WHERE TempMax = 1234
     * $query->filterByTempmax(array(12, 34)); // WHERE TempMax IN (12, 34)
     * $query->filterByTempmax(array('min' => 12)); // WHERE TempMax >= 12
     * $query->filterByTempmax(array('max' => 12)); // WHERE TempMax <= 12
     * </code>
     *
     * @param     mixed $tempmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByTempmax($tempmax = null, $comparison = null)
    {
        if (is_array($tempmax)) {
            $useMinMax = false;
            if (isset($tempmax['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::TEMPMAX, $tempmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmax['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::TEMPMAX, $tempmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::TEMPMAX, $tempmax, $comparison);
    }

    /**
     * Filter the query on the TempRef column
     *
     * Example usage:
     * <code>
     * $query->filterByTempref(1234); // WHERE TempRef = 1234
     * $query->filterByTempref(array(12, 34)); // WHERE TempRef IN (12, 34)
     * $query->filterByTempref(array('min' => 12)); // WHERE TempRef >= 12
     * $query->filterByTempref(array('max' => 12)); // WHERE TempRef <= 12
     * </code>
     *
     * @param     mixed $tempref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByTempref($tempref = null, $comparison = null)
    {
        if (is_array($tempref)) {
            $useMinMax = false;
            if (isset($tempref['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::TEMPREF, $tempref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempref['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::TEMPREF, $tempref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::TEMPREF, $tempref, $comparison);
    }

    /**
     * Filter the query on the EnvTemp column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvtemp('fooValue');   // WHERE EnvTemp = 'fooValue'
     * $query->filterByEnvtemp('%fooValue%'); // WHERE EnvTemp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $envtemp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByEnvtemp($envtemp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($envtemp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $envtemp)) {
                $envtemp = str_replace('*', '%', $envtemp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::ENVTEMP, $envtemp, $comparison);
    }

    /**
     * Filter the query on the Resilience column
     *
     * Example usage:
     * <code>
     * $query->filterByResilience('fooValue');   // WHERE Resilience = 'fooValue'
     * $query->filterByResilience('%fooValue%'); // WHERE Resilience LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resilience The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByResilience($resilience = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resilience)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $resilience)) {
                $resilience = str_replace('*', '%', $resilience);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::RESILIENCE, $resilience, $comparison);
    }

    /**
     * Filter the query on the ResilienceRemark column
     *
     * Example usage:
     * <code>
     * $query->filterByResilienceremark('fooValue');   // WHERE ResilienceRemark = 'fooValue'
     * $query->filterByResilienceremark('%fooValue%'); // WHERE ResilienceRemark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resilienceremark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByResilienceremark($resilienceremark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resilienceremark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $resilienceremark)) {
                $resilienceremark = str_replace('*', '%', $resilienceremark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::RESILIENCEREMARK, $resilienceremark, $comparison);
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
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByPhmin($phmin = null, $comparison = null)
    {
        if (is_array($phmin)) {
            $useMinMax = false;
            if (isset($phmin['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::PHMIN, $phmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmin['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::PHMIN, $phmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::PHMIN, $phmin, $comparison);
    }

    /**
     * Filter the query on the pHMax column
     *
     * Example usage:
     * <code>
     * $query->filterByPhmax(1234); // WHERE pHMax = 1234
     * $query->filterByPhmax(array(12, 34)); // WHERE pHMax IN (12, 34)
     * $query->filterByPhmax(array('min' => 12)); // WHERE pHMax >= 12
     * $query->filterByPhmax(array('max' => 12)); // WHERE pHMax <= 12
     * </code>
     *
     * @param     mixed $phmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByPhmax($phmax = null, $comparison = null)
    {
        if (is_array($phmax)) {
            $useMinMax = false;
            if (isset($phmax['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::PHMAX, $phmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmax['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::PHMAX, $phmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::PHMAX, $phmax, $comparison);
    }

    /**
     * Filter the query on the pHRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPhref(1234); // WHERE pHRef = 1234
     * $query->filterByPhref(array(12, 34)); // WHERE pHRef IN (12, 34)
     * $query->filterByPhref(array('min' => 12)); // WHERE pHRef >= 12
     * $query->filterByPhref(array('max' => 12)); // WHERE pHRef <= 12
     * </code>
     *
     * @param     mixed $phref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByPhref($phref = null, $comparison = null)
    {
        if (is_array($phref)) {
            $useMinMax = false;
            if (isset($phref['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::PHREF, $phref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phref['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::PHREF, $phref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::PHREF, $phref, $comparison);
    }

    /**
     * Filter the query on the dHMin column
     *
     * Example usage:
     * <code>
     * $query->filterByDhmin(1234); // WHERE dHMin = 1234
     * $query->filterByDhmin(array(12, 34)); // WHERE dHMin IN (12, 34)
     * $query->filterByDhmin(array('min' => 12)); // WHERE dHMin >= 12
     * $query->filterByDhmin(array('max' => 12)); // WHERE dHMin <= 12
     * </code>
     *
     * @param     mixed $dhmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByDhmin($dhmin = null, $comparison = null)
    {
        if (is_array($dhmin)) {
            $useMinMax = false;
            if (isset($dhmin['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::DHMIN, $dhmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dhmin['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::DHMIN, $dhmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::DHMIN, $dhmin, $comparison);
    }

    /**
     * Filter the query on the dHMax column
     *
     * Example usage:
     * <code>
     * $query->filterByDhmax(1234); // WHERE dHMax = 1234
     * $query->filterByDhmax(array(12, 34)); // WHERE dHMax IN (12, 34)
     * $query->filterByDhmax(array('min' => 12)); // WHERE dHMax >= 12
     * $query->filterByDhmax(array('max' => 12)); // WHERE dHMax <= 12
     * </code>
     *
     * @param     mixed $dhmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByDhmax($dhmax = null, $comparison = null)
    {
        if (is_array($dhmax)) {
            $useMinMax = false;
            if (isset($dhmax['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::DHMAX, $dhmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dhmax['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::DHMAX, $dhmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::DHMAX, $dhmax, $comparison);
    }

    /**
     * Filter the query on the dHRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDhref(1234); // WHERE dHRef = 1234
     * $query->filterByDhref(array(12, 34)); // WHERE dHRef IN (12, 34)
     * $query->filterByDhref(array('min' => 12)); // WHERE dHRef >= 12
     * $query->filterByDhref(array('max' => 12)); // WHERE dHRef <= 12
     * </code>
     *
     * @param     mixed $dhref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByDhref($dhref = null, $comparison = null)
    {
        if (is_array($dhref)) {
            $useMinMax = false;
            if (isset($dhref['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::DHREF, $dhref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dhref['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::DHREF, $dhref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::DHREF, $dhref, $comparison);
    }

    /**
     * Filter the query on the GenBankID column
     *
     * Example usage:
     * <code>
     * $query->filterByGenbankid(1234); // WHERE GenBankID = 1234
     * $query->filterByGenbankid(array(12, 34)); // WHERE GenBankID IN (12, 34)
     * $query->filterByGenbankid(array('min' => 12)); // WHERE GenBankID >= 12
     * $query->filterByGenbankid(array('max' => 12)); // WHERE GenBankID <= 12
     * </code>
     *
     * @param     mixed $genbankid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByGenbankid($genbankid = null, $comparison = null)
    {
        if (is_array($genbankid)) {
            $useMinMax = false;
            if (isset($genbankid['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::GENBANKID, $genbankid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genbankid['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::GENBANKID, $genbankid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::GENBANKID, $genbankid, $comparison);
    }

    /**
     * Filter the query on the RfeID column
     *
     * Example usage:
     * <code>
     * $query->filterByRfeid('fooValue');   // WHERE RfeID = 'fooValue'
     * $query->filterByRfeid('%fooValue%'); // WHERE RfeID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rfeid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByRfeid($rfeid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rfeid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rfeid)) {
                $rfeid = str_replace('*', '%', $rfeid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::RFEID, $rfeid, $comparison);
    }

    /**
     * Filter the query on the FIGIS_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByFigisId(1234); // WHERE FIGIS_ID = 1234
     * $query->filterByFigisId(array(12, 34)); // WHERE FIGIS_ID IN (12, 34)
     * $query->filterByFigisId(array('min' => 12)); // WHERE FIGIS_ID >= 12
     * $query->filterByFigisId(array('max' => 12)); // WHERE FIGIS_ID <= 12
     * </code>
     *
     * @param     mixed $figisId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByFigisId($figisId = null, $comparison = null)
    {
        if (is_array($figisId)) {
            $useMinMax = false;
            if (isset($figisId['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::FIGIS_ID, $figisId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($figisId['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::FIGIS_ID, $figisId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::FIGIS_ID, $figisId, $comparison);
    }

    /**
     * Filter the query on the EcotoxID column
     *
     * Example usage:
     * <code>
     * $query->filterByEcotoxid(1234); // WHERE EcotoxID = 1234
     * $query->filterByEcotoxid(array(12, 34)); // WHERE EcotoxID IN (12, 34)
     * $query->filterByEcotoxid(array('min' => 12)); // WHERE EcotoxID >= 12
     * $query->filterByEcotoxid(array('max' => 12)); // WHERE EcotoxID <= 12
     * </code>
     *
     * @param     mixed $ecotoxid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByEcotoxid($ecotoxid = null, $comparison = null)
    {
        if (is_array($ecotoxid)) {
            $useMinMax = false;
            if (isset($ecotoxid['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::ECOTOXID, $ecotoxid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ecotoxid['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::ECOTOXID, $ecotoxid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::ECOTOXID, $ecotoxid, $comparison);
    }

    /**
     * Filter the query on the SCRFA_data column
     *
     * Example usage:
     * <code>
     * $query->filterByScrfaData('fooValue');   // WHERE SCRFA_data = 'fooValue'
     * $query->filterByScrfaData('%fooValue%'); // WHERE SCRFA_data LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scrfaData The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByScrfaData($scrfaData = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scrfaData)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $scrfaData)) {
                $scrfaData = str_replace('*', '%', $scrfaData);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::SCRFA_DATA, $scrfaData, $comparison);
    }

    /**
     * Filter the query on the GMAD_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByGmadId(1234); // WHERE GMAD_ID = 1234
     * $query->filterByGmadId(array(12, 34)); // WHERE GMAD_ID IN (12, 34)
     * $query->filterByGmadId(array('min' => 12)); // WHERE GMAD_ID >= 12
     * $query->filterByGmadId(array('max' => 12)); // WHERE GMAD_ID <= 12
     * </code>
     *
     * @param     mixed $gmadId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByGmadId($gmadId = null, $comparison = null)
    {
        if (is_array($gmadId)) {
            $useMinMax = false;
            if (isset($gmadId['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::GMAD_ID, $gmadId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gmadId['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::GMAD_ID, $gmadId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::GMAD_ID, $gmadId, $comparison);
    }

    /**
     * Filter the query on the SAUP column
     *
     * Example usage:
     * <code>
     * $query->filterBySaup('fooValue');   // WHERE SAUP = 'fooValue'
     * $query->filterBySaup('%fooValue%'); // WHERE SAUP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $saup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterBySaup($saup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($saup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $saup)) {
                $saup = str_replace('*', '%', $saup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::SAUP, $saup, $comparison);
    }

    /**
     * Filter the query on the SAUP_ID column
     *
     * Example usage:
     * <code>
     * $query->filterBySaupId(1234); // WHERE SAUP_ID = 1234
     * $query->filterBySaupId(array(12, 34)); // WHERE SAUP_ID IN (12, 34)
     * $query->filterBySaupId(array('min' => 12)); // WHERE SAUP_ID >= 12
     * $query->filterBySaupId(array('max' => 12)); // WHERE SAUP_ID <= 12
     * </code>
     *
     * @param     mixed $saupId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterBySaupId($saupId = null, $comparison = null)
    {
        if (is_array($saupId)) {
            $useMinMax = false;
            if (isset($saupId['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::SAUP_ID, $saupId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saupId['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::SAUP_ID, $saupId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::SAUP_ID, $saupId, $comparison);
    }

    /**
     * Filter the query on the SAUP_Group column
     *
     * Example usage:
     * <code>
     * $query->filterBySaupGroup(1234); // WHERE SAUP_Group = 1234
     * $query->filterBySaupGroup(array(12, 34)); // WHERE SAUP_Group IN (12, 34)
     * $query->filterBySaupGroup(array('min' => 12)); // WHERE SAUP_Group >= 12
     * $query->filterBySaupGroup(array('max' => 12)); // WHERE SAUP_Group <= 12
     * </code>
     *
     * @param     mixed $saupGroup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterBySaupGroup($saupGroup = null, $comparison = null)
    {
        if (is_array($saupGroup)) {
            $useMinMax = false;
            if (isset($saupGroup['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::SAUP_GROUP, $saupGroup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saupGroup['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::SAUP_GROUP, $saupGroup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::SAUP_GROUP, $saupGroup, $comparison);
    }

    /**
     * Filter the query on the AusMuseum column
     *
     * Example usage:
     * <code>
     * $query->filterByAusmuseum(1234); // WHERE AusMuseum = 1234
     * $query->filterByAusmuseum(array(12, 34)); // WHERE AusMuseum IN (12, 34)
     * $query->filterByAusmuseum(array('min' => 12)); // WHERE AusMuseum >= 12
     * $query->filterByAusmuseum(array('max' => 12)); // WHERE AusMuseum <= 12
     * </code>
     *
     * @param     mixed $ausmuseum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByAusmuseum($ausmuseum = null, $comparison = null)
    {
        if (is_array($ausmuseum)) {
            $useMinMax = false;
            if (isset($ausmuseum['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::AUSMUSEUM, $ausmuseum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ausmuseum['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::AUSMUSEUM, $ausmuseum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::AUSMUSEUM, $ausmuseum, $comparison);
    }

    /**
     * Filter the query on the FishTrace column
     *
     * Example usage:
     * <code>
     * $query->filterByFishtrace('fooValue');   // WHERE FishTrace = 'fooValue'
     * $query->filterByFishtrace('%fooValue%'); // WHERE FishTrace LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fishtrace The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByFishtrace($fishtrace = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fishtrace)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fishtrace)) {
                $fishtrace = str_replace('*', '%', $fishtrace);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::FISHTRACE, $fishtrace, $comparison);
    }

    /**
     * Filter the query on the IUCN_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByIucnId(1234); // WHERE IUCN_ID = 1234
     * $query->filterByIucnId(array(12, 34)); // WHERE IUCN_ID IN (12, 34)
     * $query->filterByIucnId(array('min' => 12)); // WHERE IUCN_ID >= 12
     * $query->filterByIucnId(array('max' => 12)); // WHERE IUCN_ID <= 12
     * </code>
     *
     * @param     mixed $iucnId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByIucnId($iucnId = null, $comparison = null)
    {
        if (is_array($iucnId)) {
            $useMinMax = false;
            if (isset($iucnId['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::IUCN_ID, $iucnId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iucnId['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::IUCN_ID, $iucnId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::IUCN_ID, $iucnId, $comparison);
    }

    /**
     * Filter the query on the IUCN_Group column
     *
     * Example usage:
     * <code>
     * $query->filterByIucnGroup('fooValue');   // WHERE IUCN_Group = 'fooValue'
     * $query->filterByIucnGroup('%fooValue%'); // WHERE IUCN_Group LIKE '%fooValue%'
     * </code>
     *
     * @param     string $iucnGroup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByIucnGroup($iucnGroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($iucnGroup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $iucnGroup)) {
                $iucnGroup = str_replace('*', '%', $iucnGroup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::IUCN_GROUP, $iucnGroup, $comparison);
    }

    /**
     * Filter the query on the BOLD_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByBoldId(1234); // WHERE BOLD_ID = 1234
     * $query->filterByBoldId(array(12, 34)); // WHERE BOLD_ID IN (12, 34)
     * $query->filterByBoldId(array('min' => 12)); // WHERE BOLD_ID >= 12
     * $query->filterByBoldId(array('max' => 12)); // WHERE BOLD_ID <= 12
     * </code>
     *
     * @param     mixed $boldId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByBoldId($boldId = null, $comparison = null)
    {
        if (is_array($boldId)) {
            $useMinMax = false;
            if (isset($boldId['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::BOLD_ID, $boldId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boldId['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::BOLD_ID, $boldId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::BOLD_ID, $boldId, $comparison);
    }

    /**
     * Filter the query on the IGFAName column
     *
     * Example usage:
     * <code>
     * $query->filterByIgfaname('fooValue');   // WHERE IGFAName = 'fooValue'
     * $query->filterByIgfaname('%fooValue%'); // WHERE IGFAName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $igfaname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByIgfaname($igfaname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($igfaname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $igfaname)) {
                $igfaname = str_replace('*', '%', $igfaname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::IGFANAME, $igfaname, $comparison);
    }

    /**
     * Filter the query on the EssayID column
     *
     * Example usage:
     * <code>
     * $query->filterByEssayid(1234); // WHERE EssayID = 1234
     * $query->filterByEssayid(array(12, 34)); // WHERE EssayID IN (12, 34)
     * $query->filterByEssayid(array('min' => 12)); // WHERE EssayID >= 12
     * $query->filterByEssayid(array('max' => 12)); // WHERE EssayID <= 12
     * </code>
     *
     * @param     mixed $essayid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByEssayid($essayid = null, $comparison = null)
    {
        if (is_array($essayid)) {
            $useMinMax = false;
            if (isset($essayid['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::ESSAYID, $essayid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($essayid['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::ESSAYID, $essayid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::ESSAYID, $essayid, $comparison);
    }

    /**
     * Filter the query on the Aquamaps column
     *
     * Example usage:
     * <code>
     * $query->filterByAquamaps('fooValue');   // WHERE Aquamaps = 'fooValue'
     * $query->filterByAquamaps('%fooValue%'); // WHERE Aquamaps LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aquamaps The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByAquamaps($aquamaps = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aquamaps)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aquamaps)) {
                $aquamaps = str_replace('*', '%', $aquamaps);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::AQUAMAPS, $aquamaps, $comparison);
    }

    /**
     * Filter the query on the Morphology column
     *
     * Example usage:
     * <code>
     * $query->filterByMorphology('fooValue');   // WHERE Morphology = 'fooValue'
     * $query->filterByMorphology('%fooValue%'); // WHERE Morphology LIKE '%fooValue%'
     * </code>
     *
     * @param     string $morphology The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByMorphology($morphology = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($morphology)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $morphology)) {
                $morphology = str_replace('*', '%', $morphology);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::MORPHOLOGY, $morphology, $comparison);
    }

    /**
     * Filter the query on the Occurrence column
     *
     * Example usage:
     * <code>
     * $query->filterByOccurrence('fooValue');   // WHERE Occurrence = 'fooValue'
     * $query->filterByOccurrence('%fooValue%'); // WHERE Occurrence LIKE '%fooValue%'
     * </code>
     *
     * @param     string $occurrence The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByOccurrence($occurrence = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($occurrence)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $occurrence)) {
                $occurrence = str_replace('*', '%', $occurrence);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::OCCURRENCE, $occurrence, $comparison);
    }

    /**
     * Filter the query on the Strains column
     *
     * Example usage:
     * <code>
     * $query->filterByStrains('fooValue');   // WHERE Strains = 'fooValue'
     * $query->filterByStrains('%fooValue%'); // WHERE Strains LIKE '%fooValue%'
     * </code>
     *
     * @param     string $strains The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByStrains($strains = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($strains)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $strains)) {
                $strains = str_replace('*', '%', $strains);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::STRAINS, $strains, $comparison);
    }

    /**
     * Filter the query on the Ecology column
     *
     * Example usage:
     * <code>
     * $query->filterByEcology('fooValue');   // WHERE Ecology = 'fooValue'
     * $query->filterByEcology('%fooValue%'); // WHERE Ecology LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecology The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByEcology($ecology = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecology)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecology)) {
                $ecology = str_replace('*', '%', $ecology);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::ECOLOGY, $ecology, $comparison);
    }

    /**
     * Filter the query on the Diseases column
     *
     * Example usage:
     * <code>
     * $query->filterByDiseases('fooValue');   // WHERE Diseases = 'fooValue'
     * $query->filterByDiseases('%fooValue%'); // WHERE Diseases LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diseases The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByDiseases($diseases = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diseases)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $diseases)) {
                $diseases = str_replace('*', '%', $diseases);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::DISEASES, $diseases, $comparison);
    }

    /**
     * Filter the query on the Abnorm column
     *
     * Example usage:
     * <code>
     * $query->filterByAbnorm('fooValue');   // WHERE Abnorm = 'fooValue'
     * $query->filterByAbnorm('%fooValue%'); // WHERE Abnorm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abnorm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByAbnorm($abnorm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abnorm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abnorm)) {
                $abnorm = str_replace('*', '%', $abnorm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::ABNORM, $abnorm, $comparison);
    }

    /**
     * Filter the query on the Metabolism column
     *
     * Example usage:
     * <code>
     * $query->filterByMetabolism('fooValue');   // WHERE Metabolism = 'fooValue'
     * $query->filterByMetabolism('%fooValue%'); // WHERE Metabolism LIKE '%fooValue%'
     * </code>
     *
     * @param     string $metabolism The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByMetabolism($metabolism = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($metabolism)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $metabolism)) {
                $metabolism = str_replace('*', '%', $metabolism);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::METABOLISM, $metabolism, $comparison);
    }

    /**
     * Filter the query on the Predators column
     *
     * Example usage:
     * <code>
     * $query->filterByPredators('fooValue');   // WHERE Predators = 'fooValue'
     * $query->filterByPredators('%fooValue%'); // WHERE Predators LIKE '%fooValue%'
     * </code>
     *
     * @param     string $predators The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByPredators($predators = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($predators)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $predators)) {
                $predators = str_replace('*', '%', $predators);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::PREDATORS, $predators, $comparison);
    }

    /**
     * Filter the query on the Spawning column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawning('fooValue');   // WHERE Spawning = 'fooValue'
     * $query->filterBySpawning('%fooValue%'); // WHERE Spawning LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spawning The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterBySpawning($spawning = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spawning)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spawning)) {
                $spawning = str_replace('*', '%', $spawning);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::SPAWNING, $spawning, $comparison);
    }

    /**
     * Filter the query on the Speed column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeed('fooValue');   // WHERE Speed = 'fooValue'
     * $query->filterBySpeed('%fooValue%'); // WHERE Speed LIKE '%fooValue%'
     * </code>
     *
     * @param     string $speed The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterBySpeed($speed = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($speed)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $speed)) {
                $speed = str_replace('*', '%', $speed);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::SPEED, $speed, $comparison);
    }

    /**
     * Filter the query on the Diet column
     *
     * Example usage:
     * <code>
     * $query->filterByDiet('fooValue');   // WHERE Diet = 'fooValue'
     * $query->filterByDiet('%fooValue%'); // WHERE Diet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $diet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByDiet($diet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($diet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $diet)) {
                $diet = str_replace('*', '%', $diet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::DIET, $diet, $comparison);
    }

    /**
     * Filter the query on the Eggs column
     *
     * Example usage:
     * <code>
     * $query->filterByEggs('fooValue');   // WHERE Eggs = 'fooValue'
     * $query->filterByEggs('%fooValue%'); // WHERE Eggs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eggs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByEggs($eggs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eggs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eggs)) {
                $eggs = str_replace('*', '%', $eggs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::EGGS, $eggs, $comparison);
    }

    /**
     * Filter the query on the EggDevelop column
     *
     * Example usage:
     * <code>
     * $query->filterByEggdevelop('fooValue');   // WHERE EggDevelop = 'fooValue'
     * $query->filterByEggdevelop('%fooValue%'); // WHERE EggDevelop LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eggdevelop The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByEggdevelop($eggdevelop = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eggdevelop)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eggdevelop)) {
                $eggdevelop = str_replace('*', '%', $eggdevelop);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::EGGDEVELOP, $eggdevelop, $comparison);
    }

    /**
     * Filter the query on the Food column
     *
     * Example usage:
     * <code>
     * $query->filterByFood('fooValue');   // WHERE Food = 'fooValue'
     * $query->filterByFood('%fooValue%'); // WHERE Food LIKE '%fooValue%'
     * </code>
     *
     * @param     string $food The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByFood($food = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($food)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $food)) {
                $food = str_replace('*', '%', $food);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::FOOD, $food, $comparison);
    }

    /**
     * Filter the query on the Larvae column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvae('fooValue');   // WHERE Larvae = 'fooValue'
     * $query->filterByLarvae('%fooValue%'); // WHERE Larvae LIKE '%fooValue%'
     * </code>
     *
     * @param     string $larvae The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByLarvae($larvae = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($larvae)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $larvae)) {
                $larvae = str_replace('*', '%', $larvae);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::LARVAE, $larvae, $comparison);
    }

    /**
     * Filter the query on the LarvDyn column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvdyn('fooValue');   // WHERE LarvDyn = 'fooValue'
     * $query->filterByLarvdyn('%fooValue%'); // WHERE LarvDyn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $larvdyn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByLarvdyn($larvdyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($larvdyn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $larvdyn)) {
                $larvdyn = str_replace('*', '%', $larvdyn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::LARVDYN, $larvdyn, $comparison);
    }

    /**
     * Filter the query on the LarvSpeed column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvspeed('fooValue');   // WHERE LarvSpeed = 'fooValue'
     * $query->filterByLarvspeed('%fooValue%'); // WHERE LarvSpeed LIKE '%fooValue%'
     * </code>
     *
     * @param     string $larvspeed The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByLarvspeed($larvspeed = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($larvspeed)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $larvspeed)) {
                $larvspeed = str_replace('*', '%', $larvspeed);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::LARVSPEED, $larvspeed, $comparison);
    }

    /**
     * Filter the query on the PopDyn column
     *
     * Example usage:
     * <code>
     * $query->filterByPopdyn('fooValue');   // WHERE PopDyn = 'fooValue'
     * $query->filterByPopdyn('%fooValue%'); // WHERE PopDyn LIKE '%fooValue%'
     * </code>
     *
     * @param     string $popdyn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByPopdyn($popdyn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($popdyn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $popdyn)) {
                $popdyn = str_replace('*', '%', $popdyn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::POPDYN, $popdyn, $comparison);
    }

    /**
     * Filter the query on the LengthWeight column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthweight('fooValue');   // WHERE LengthWeight = 'fooValue'
     * $query->filterByLengthweight('%fooValue%'); // WHERE LengthWeight LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthweight The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByLengthweight($lengthweight = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthweight)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthweight)) {
                $lengthweight = str_replace('*', '%', $lengthweight);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::LENGTHWEIGHT, $lengthweight, $comparison);
    }

    /**
     * Filter the query on the Gillarea column
     *
     * Example usage:
     * <code>
     * $query->filterByGillarea('fooValue');   // WHERE Gillarea = 'fooValue'
     * $query->filterByGillarea('%fooValue%'); // WHERE Gillarea LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gillarea The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByGillarea($gillarea = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gillarea)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gillarea)) {
                $gillarea = str_replace('*', '%', $gillarea);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::GILLAREA, $gillarea, $comparison);
    }

    /**
     * Filter the query on the Maturity column
     *
     * Example usage:
     * <code>
     * $query->filterByMaturity('fooValue');   // WHERE Maturity = 'fooValue'
     * $query->filterByMaturity('%fooValue%'); // WHERE Maturity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maturity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByMaturity($maturity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maturity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $maturity)) {
                $maturity = str_replace('*', '%', $maturity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::MATURITY, $maturity, $comparison);
    }

    /**
     * Filter the query on the MatSizes column
     *
     * Example usage:
     * <code>
     * $query->filterByMatsizes('fooValue');   // WHERE MatSizes = 'fooValue'
     * $query->filterByMatsizes('%fooValue%'); // WHERE MatSizes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $matsizes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByMatsizes($matsizes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($matsizes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $matsizes)) {
                $matsizes = str_replace('*', '%', $matsizes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::MATSIZES, $matsizes, $comparison);
    }

    /**
     * Filter the query on the Processing column
     *
     * Example usage:
     * <code>
     * $query->filterByProcessing('fooValue');   // WHERE Processing = 'fooValue'
     * $query->filterByProcessing('%fooValue%'); // WHERE Processing LIKE '%fooValue%'
     * </code>
     *
     * @param     string $processing The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByProcessing($processing = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($processing)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $processing)) {
                $processing = str_replace('*', '%', $processing);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::PROCESSING, $processing, $comparison);
    }

    /**
     * Filter the query on the Reproduction column
     *
     * Example usage:
     * <code>
     * $query->filterByReproduction('fooValue');   // WHERE Reproduction = 'fooValue'
     * $query->filterByReproduction('%fooValue%'); // WHERE Reproduction LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reproduction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByReproduction($reproduction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reproduction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reproduction)) {
                $reproduction = str_replace('*', '%', $reproduction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::REPRODUCTION, $reproduction, $comparison);
    }

    /**
     * Filter the query on the Introductions column
     *
     * Example usage:
     * <code>
     * $query->filterByIntroductions('fooValue');   // WHERE Introductions = 'fooValue'
     * $query->filterByIntroductions('%fooValue%'); // WHERE Introductions LIKE '%fooValue%'
     * </code>
     *
     * @param     string $introductions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByIntroductions($introductions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($introductions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $introductions)) {
                $introductions = str_replace('*', '%', $introductions);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::INTRODUCTIONS, $introductions, $comparison);
    }

    /**
     * Filter the query on the Abundance column
     *
     * Example usage:
     * <code>
     * $query->filterByAbundance('fooValue');   // WHERE Abundance = 'fooValue'
     * $query->filterByAbundance('%fooValue%'); // WHERE Abundance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abundance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByAbundance($abundance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abundance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abundance)) {
                $abundance = str_replace('*', '%', $abundance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::ABUNDANCE, $abundance, $comparison);
    }

    /**
     * Filter the query on the Vision column
     *
     * Example usage:
     * <code>
     * $query->filterByVision('fooValue');   // WHERE Vision = 'fooValue'
     * $query->filterByVision('%fooValue%'); // WHERE Vision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByVision($vision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vision)) {
                $vision = str_replace('*', '%', $vision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::VISION, $vision, $comparison);
    }

    /**
     * Filter the query on the Genetics column
     *
     * Example usage:
     * <code>
     * $query->filterByGenetics('fooValue');   // WHERE Genetics = 'fooValue'
     * $query->filterByGenetics('%fooValue%'); // WHERE Genetics LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genetics The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByGenetics($genetics = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genetics)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genetics)) {
                $genetics = str_replace('*', '%', $genetics);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::GENETICS, $genetics, $comparison);
    }

    /**
     * Filter the query on the Aquaculture column
     *
     * Example usage:
     * <code>
     * $query->filterByAquaculture('fooValue');   // WHERE Aquaculture = 'fooValue'
     * $query->filterByAquaculture('%fooValue%'); // WHERE Aquaculture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aquaculture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByAquaculture($aquaculture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aquaculture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aquaculture)) {
                $aquaculture = str_replace('*', '%', $aquaculture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::AQUACULTURE, $aquaculture, $comparison);
    }

    /**
     * Filter the query on the CountryComp column
     *
     * Example usage:
     * <code>
     * $query->filterByCountrycomp('fooValue');   // WHERE CountryComp = 'fooValue'
     * $query->filterByCountrycomp('%fooValue%'); // WHERE CountryComp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $countrycomp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByCountrycomp($countrycomp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($countrycomp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $countrycomp)) {
                $countrycomp = str_replace('*', '%', $countrycomp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::COUNTRYCOMP, $countrycomp, $comparison);
    }

    /**
     * Filter the query on the Allele column
     *
     * Example usage:
     * <code>
     * $query->filterByAllele('fooValue');   // WHERE Allele = 'fooValue'
     * $query->filterByAllele('%fooValue%'); // WHERE Allele LIKE '%fooValue%'
     * </code>
     *
     * @param     string $allele The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByAllele($allele = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($allele)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $allele)) {
                $allele = str_replace('*', '%', $allele);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::ALLELE, $allele, $comparison);
    }

    /**
     * Filter the query on the GeneticStudies column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneticstudies('fooValue');   // WHERE GeneticStudies = 'fooValue'
     * $query->filterByGeneticstudies('%fooValue%'); // WHERE GeneticStudies LIKE '%fooValue%'
     * </code>
     *
     * @param     string $geneticstudies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByGeneticstudies($geneticstudies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($geneticstudies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $geneticstudies)) {
                $geneticstudies = str_replace('*', '%', $geneticstudies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::GENETICSTUDIES, $geneticstudies, $comparison);
    }

    /**
     * Filter the query on the Ration column
     *
     * Example usage:
     * <code>
     * $query->filterByRation('fooValue');   // WHERE Ration = 'fooValue'
     * $query->filterByRation('%fooValue%'); // WHERE Ration LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ration The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByRation($ration = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ration)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ration)) {
                $ration = str_replace('*', '%', $ration);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::RATION, $ration, $comparison);
    }

    /**
     * Filter the query on the Foods column
     *
     * Example usage:
     * <code>
     * $query->filterByFoods('fooValue');   // WHERE Foods = 'fooValue'
     * $query->filterByFoods('%fooValue%'); // WHERE Foods LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foods The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByFoods($foods = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foods)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $foods)) {
                $foods = str_replace('*', '%', $foods);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::FOODS, $foods, $comparison);
    }

    /**
     * Filter the query on the Ecotoxicology column
     *
     * Example usage:
     * <code>
     * $query->filterByEcotoxicology('fooValue');   // WHERE Ecotoxicology = 'fooValue'
     * $query->filterByEcotoxicology('%fooValue%'); // WHERE Ecotoxicology LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecotoxicology The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByEcotoxicology($ecotoxicology = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecotoxicology)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecotoxicology)) {
                $ecotoxicology = str_replace('*', '%', $ecotoxicology);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::ECOTOXICOLOGY, $ecotoxicology, $comparison);
    }

    /**
     * Filter the query on the Catches column
     *
     * Example usage:
     * <code>
     * $query->filterByCatches('fooValue');   // WHERE Catches = 'fooValue'
     * $query->filterByCatches('%fooValue%'); // WHERE Catches LIKE '%fooValue%'
     * </code>
     *
     * @param     string $catches The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByCatches($catches = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($catches)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $catches)) {
                $catches = str_replace('*', '%', $catches);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::CATCHES, $catches, $comparison);
    }

    /**
     * Filter the query on the FAOAqua column
     *
     * Example usage:
     * <code>
     * $query->filterByFaoaqua('fooValue');   // WHERE FAOAqua = 'fooValue'
     * $query->filterByFaoaqua('%fooValue%'); // WHERE FAOAqua LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faoaqua The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByFaoaqua($faoaqua = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faoaqua)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $faoaqua)) {
                $faoaqua = str_replace('*', '%', $faoaqua);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::FAOAQUA, $faoaqua, $comparison);
    }

    /**
     * Filter the query on the LengthRelations column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthrelations('fooValue');   // WHERE LengthRelations = 'fooValue'
     * $query->filterByLengthrelations('%fooValue%'); // WHERE LengthRelations LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthrelations The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByLengthrelations($lengthrelations = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthrelations)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthrelations)) {
                $lengthrelations = str_replace('*', '%', $lengthrelations);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::LENGTHRELATIONS, $lengthrelations, $comparison);
    }

    /**
     * Filter the query on the LengthFrequency column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthfrequency('fooValue');   // WHERE LengthFrequency = 'fooValue'
     * $query->filterByLengthfrequency('%fooValue%'); // WHERE LengthFrequency LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthfrequency The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByLengthfrequency($lengthfrequency = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthfrequency)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthfrequency)) {
                $lengthfrequency = str_replace('*', '%', $lengthfrequency);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::LENGTHFREQUENCY, $lengthfrequency, $comparison);
    }

    /**
     * Filter the query on the Sounds column
     *
     * Example usage:
     * <code>
     * $query->filterBySounds('fooValue');   // WHERE Sounds = 'fooValue'
     * $query->filterBySounds('%fooValue%'); // WHERE Sounds LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sounds The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterBySounds($sounds = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sounds)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sounds)) {
                $sounds = str_replace('*', '%', $sounds);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::SOUNDS, $sounds, $comparison);
    }

    /**
     * Filter the query on the Broodstock column
     *
     * Example usage:
     * <code>
     * $query->filterByBroodstock('fooValue');   // WHERE Broodstock = 'fooValue'
     * $query->filterByBroodstock('%fooValue%'); // WHERE Broodstock LIKE '%fooValue%'
     * </code>
     *
     * @param     string $broodstock The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByBroodstock($broodstock = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($broodstock)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $broodstock)) {
                $broodstock = str_replace('*', '%', $broodstock);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::BROODSTOCK, $broodstock, $comparison);
    }

    /**
     * Filter the query on the EggNursery column
     *
     * Example usage:
     * <code>
     * $query->filterByEggnursery('fooValue');   // WHERE EggNursery = 'fooValue'
     * $query->filterByEggnursery('%fooValue%'); // WHERE EggNursery LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eggnursery The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByEggnursery($eggnursery = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eggnursery)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eggnursery)) {
                $eggnursery = str_replace('*', '%', $eggnursery);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::EGGNURSERY, $eggnursery, $comparison);
    }

    /**
     * Filter the query on the FryNursery column
     *
     * Example usage:
     * <code>
     * $query->filterByFrynursery('fooValue');   // WHERE FryNursery = 'fooValue'
     * $query->filterByFrynursery('%fooValue%'); // WHERE FryNursery LIKE '%fooValue%'
     * </code>
     *
     * @param     string $frynursery The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByFrynursery($frynursery = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($frynursery)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $frynursery)) {
                $frynursery = str_replace('*', '%', $frynursery);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::FRYNURSERY, $frynursery, $comparison);
    }

    /**
     * Filter the query on the LarvalNursery column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvalnursery('fooValue');   // WHERE LarvalNursery = 'fooValue'
     * $query->filterByLarvalnursery('%fooValue%'); // WHERE LarvalNursery LIKE '%fooValue%'
     * </code>
     *
     * @param     string $larvalnursery The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByLarvalnursery($larvalnursery = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($larvalnursery)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $larvalnursery)) {
                $larvalnursery = str_replace('*', '%', $larvalnursery);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::LARVALNURSERY, $larvalnursery, $comparison);
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
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::ENTERED, $entered, $comparison);
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
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::MODIFIED, $modified, $comparison);
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
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::EXPERT, $expert, $comparison);
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
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(StocksWithIgfaDamagedPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksWithIgfaDamagedPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   StocksWithIgfaDamaged $stocksWithIgfaDamaged Object to remove from the list of results
     *
     * @return StocksWithIgfaDamagedQuery The current query, for fluid interface
     */
    public function prune($stocksWithIgfaDamaged = null)
    {
        if ($stocksWithIgfaDamaged) {
            $this->addCond('pruneCond0', $this->getAliasedColName(StocksWithIgfaDamagedPeer::SPECCODE), $stocksWithIgfaDamaged->getSpeccode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(StocksWithIgfaDamagedPeer::LEVEL), $stocksWithIgfaDamaged->getLevel(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(StocksWithIgfaDamagedPeer::LOCALUNIQUE), $stocksWithIgfaDamaged->getLocalunique(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
