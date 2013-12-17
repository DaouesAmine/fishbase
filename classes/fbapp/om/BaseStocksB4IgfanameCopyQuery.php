<?php


/**
 * Base class that represents a query for the 'stocks_b4_igfaname_copy' table.
 *
 *
 *
 * @method StocksB4IgfanameCopyQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method StocksB4IgfanameCopyQuery orderByStockdefs($order = Criteria::ASC) Order by the StockDefs column
 * @method StocksB4IgfanameCopyQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method StocksB4IgfanameCopyQuery orderByLevel($order = Criteria::ASC) Order by the Level column
 * @method StocksB4IgfanameCopyQuery orderByLocalunique($order = Criteria::ASC) Order by the LocalUnique column
 * @method StocksB4IgfanameCopyQuery orderByIucnCode($order = Criteria::ASC) Order by the IUCN_Code column
 * @method StocksB4IgfanameCopyQuery orderByIucnAssessment($order = Criteria::ASC) Order by the IUCN_Assessment column
 * @method StocksB4IgfanameCopyQuery orderByProtected($order = Criteria::ASC) Order by the Protected column
 * @method StocksB4IgfanameCopyQuery orderByStocksrefno($order = Criteria::ASC) Order by the StocksRefNo column
 * @method StocksB4IgfanameCopyQuery orderByNorthernmost($order = Criteria::ASC) Order by the Northernmost column
 * @method StocksB4IgfanameCopyQuery orderByNorthsouthn($order = Criteria::ASC) Order by the NorthSouthN column
 * @method StocksB4IgfanameCopyQuery orderBySouthermost($order = Criteria::ASC) Order by the Southermost column
 * @method StocksB4IgfanameCopyQuery orderByNorthsouths($order = Criteria::ASC) Order by the NorthSouthS column
 * @method StocksB4IgfanameCopyQuery orderByWesternmost($order = Criteria::ASC) Order by the Westernmost column
 * @method StocksB4IgfanameCopyQuery orderByWesteastw($order = Criteria::ASC) Order by the WestEastW column
 * @method StocksB4IgfanameCopyQuery orderByEasternmost($order = Criteria::ASC) Order by the Easternmost column
 * @method StocksB4IgfanameCopyQuery orderByWesteaste($order = Criteria::ASC) Order by the WestEastE column
 * @method StocksB4IgfanameCopyQuery orderByBoundingref($order = Criteria::ASC) Order by the BoundingRef column
 * @method StocksB4IgfanameCopyQuery orderByBoundingmethod($order = Criteria::ASC) Order by the BoundingMethod column
 * @method StocksB4IgfanameCopyQuery orderByTempmin($order = Criteria::ASC) Order by the TempMin column
 * @method StocksB4IgfanameCopyQuery orderByTempmax($order = Criteria::ASC) Order by the TempMax column
 * @method StocksB4IgfanameCopyQuery orderByTempref($order = Criteria::ASC) Order by the TempRef column
 * @method StocksB4IgfanameCopyQuery orderByEnvtemp($order = Criteria::ASC) Order by the EnvTemp column
 * @method StocksB4IgfanameCopyQuery orderByResilience($order = Criteria::ASC) Order by the Resilience column
 * @method StocksB4IgfanameCopyQuery orderByResilienceremark($order = Criteria::ASC) Order by the ResilienceRemark column
 * @method StocksB4IgfanameCopyQuery orderByPhmin($order = Criteria::ASC) Order by the pHMin column
 * @method StocksB4IgfanameCopyQuery orderByPhmax($order = Criteria::ASC) Order by the pHMax column
 * @method StocksB4IgfanameCopyQuery orderByPhref($order = Criteria::ASC) Order by the pHRef column
 * @method StocksB4IgfanameCopyQuery orderByDhmin($order = Criteria::ASC) Order by the dHMin column
 * @method StocksB4IgfanameCopyQuery orderByDhmax($order = Criteria::ASC) Order by the dHMax column
 * @method StocksB4IgfanameCopyQuery orderByDhref($order = Criteria::ASC) Order by the dHRef column
 * @method StocksB4IgfanameCopyQuery orderByGenbankid($order = Criteria::ASC) Order by the GenBankID column
 * @method StocksB4IgfanameCopyQuery orderByRfeid($order = Criteria::ASC) Order by the RfeID column
 * @method StocksB4IgfanameCopyQuery orderByFigisId($order = Criteria::ASC) Order by the FIGIS_ID column
 * @method StocksB4IgfanameCopyQuery orderByEcotoxid($order = Criteria::ASC) Order by the EcotoxID column
 * @method StocksB4IgfanameCopyQuery orderByScrfaData($order = Criteria::ASC) Order by the SCRFA_data column
 * @method StocksB4IgfanameCopyQuery orderByGmadId($order = Criteria::ASC) Order by the GMAD_ID column
 * @method StocksB4IgfanameCopyQuery orderBySaup($order = Criteria::ASC) Order by the SAUP column
 * @method StocksB4IgfanameCopyQuery orderBySaupId($order = Criteria::ASC) Order by the SAUP_ID column
 * @method StocksB4IgfanameCopyQuery orderBySaupGroup($order = Criteria::ASC) Order by the SAUP_Group column
 * @method StocksB4IgfanameCopyQuery orderByAusmuseum($order = Criteria::ASC) Order by the AusMuseum column
 * @method StocksB4IgfanameCopyQuery orderByFishtrace($order = Criteria::ASC) Order by the FishTrace column
 * @method StocksB4IgfanameCopyQuery orderByIucnId($order = Criteria::ASC) Order by the IUCN_ID column
 * @method StocksB4IgfanameCopyQuery orderByIucnGroup($order = Criteria::ASC) Order by the IUCN_Group column
 * @method StocksB4IgfanameCopyQuery orderByBoldId($order = Criteria::ASC) Order by the BOLD_ID column
 * @method StocksB4IgfanameCopyQuery orderByEssayid($order = Criteria::ASC) Order by the EssayID column
 * @method StocksB4IgfanameCopyQuery orderByAquamaps($order = Criteria::ASC) Order by the Aquamaps column
 * @method StocksB4IgfanameCopyQuery orderByMorphology($order = Criteria::ASC) Order by the Morphology column
 * @method StocksB4IgfanameCopyQuery orderByOccurrence($order = Criteria::ASC) Order by the Occurrence column
 * @method StocksB4IgfanameCopyQuery orderByStrains($order = Criteria::ASC) Order by the Strains column
 * @method StocksB4IgfanameCopyQuery orderByEcology($order = Criteria::ASC) Order by the Ecology column
 * @method StocksB4IgfanameCopyQuery orderByDiseases($order = Criteria::ASC) Order by the Diseases column
 * @method StocksB4IgfanameCopyQuery orderByAbnorm($order = Criteria::ASC) Order by the Abnorm column
 * @method StocksB4IgfanameCopyQuery orderByMetabolism($order = Criteria::ASC) Order by the Metabolism column
 * @method StocksB4IgfanameCopyQuery orderByPredators($order = Criteria::ASC) Order by the Predators column
 * @method StocksB4IgfanameCopyQuery orderBySpawning($order = Criteria::ASC) Order by the Spawning column
 * @method StocksB4IgfanameCopyQuery orderBySpeed($order = Criteria::ASC) Order by the Speed column
 * @method StocksB4IgfanameCopyQuery orderByDiet($order = Criteria::ASC) Order by the Diet column
 * @method StocksB4IgfanameCopyQuery orderByEggs($order = Criteria::ASC) Order by the Eggs column
 * @method StocksB4IgfanameCopyQuery orderByEggdevelop($order = Criteria::ASC) Order by the EggDevelop column
 * @method StocksB4IgfanameCopyQuery orderByFood($order = Criteria::ASC) Order by the Food column
 * @method StocksB4IgfanameCopyQuery orderByLarvae($order = Criteria::ASC) Order by the Larvae column
 * @method StocksB4IgfanameCopyQuery orderByLarvdyn($order = Criteria::ASC) Order by the LarvDyn column
 * @method StocksB4IgfanameCopyQuery orderByLarvspeed($order = Criteria::ASC) Order by the LarvSpeed column
 * @method StocksB4IgfanameCopyQuery orderByPopdyn($order = Criteria::ASC) Order by the PopDyn column
 * @method StocksB4IgfanameCopyQuery orderByLengthweight($order = Criteria::ASC) Order by the LengthWeight column
 * @method StocksB4IgfanameCopyQuery orderByGillarea($order = Criteria::ASC) Order by the Gillarea column
 * @method StocksB4IgfanameCopyQuery orderByMaturity($order = Criteria::ASC) Order by the Maturity column
 * @method StocksB4IgfanameCopyQuery orderByMatsizes($order = Criteria::ASC) Order by the MatSizes column
 * @method StocksB4IgfanameCopyQuery orderByProcessing($order = Criteria::ASC) Order by the Processing column
 * @method StocksB4IgfanameCopyQuery orderByReproduction($order = Criteria::ASC) Order by the Reproduction column
 * @method StocksB4IgfanameCopyQuery orderByIntroductions($order = Criteria::ASC) Order by the Introductions column
 * @method StocksB4IgfanameCopyQuery orderByAbundance($order = Criteria::ASC) Order by the Abundance column
 * @method StocksB4IgfanameCopyQuery orderByVision($order = Criteria::ASC) Order by the Vision column
 * @method StocksB4IgfanameCopyQuery orderByGenetics($order = Criteria::ASC) Order by the Genetics column
 * @method StocksB4IgfanameCopyQuery orderByAquaculture($order = Criteria::ASC) Order by the Aquaculture column
 * @method StocksB4IgfanameCopyQuery orderByCountrycomp($order = Criteria::ASC) Order by the CountryComp column
 * @method StocksB4IgfanameCopyQuery orderByAllele($order = Criteria::ASC) Order by the Allele column
 * @method StocksB4IgfanameCopyQuery orderByGeneticstudies($order = Criteria::ASC) Order by the GeneticStudies column
 * @method StocksB4IgfanameCopyQuery orderByRation($order = Criteria::ASC) Order by the Ration column
 * @method StocksB4IgfanameCopyQuery orderByFoods($order = Criteria::ASC) Order by the Foods column
 * @method StocksB4IgfanameCopyQuery orderByEcotoxicology($order = Criteria::ASC) Order by the Ecotoxicology column
 * @method StocksB4IgfanameCopyQuery orderByCatches($order = Criteria::ASC) Order by the Catches column
 * @method StocksB4IgfanameCopyQuery orderByFaoaqua($order = Criteria::ASC) Order by the FAOAqua column
 * @method StocksB4IgfanameCopyQuery orderByLengthrelations($order = Criteria::ASC) Order by the LengthRelations column
 * @method StocksB4IgfanameCopyQuery orderByLengthfrequency($order = Criteria::ASC) Order by the LengthFrequency column
 * @method StocksB4IgfanameCopyQuery orderBySounds($order = Criteria::ASC) Order by the Sounds column
 * @method StocksB4IgfanameCopyQuery orderByBroodstock($order = Criteria::ASC) Order by the Broodstock column
 * @method StocksB4IgfanameCopyQuery orderByEggnursery($order = Criteria::ASC) Order by the EggNursery column
 * @method StocksB4IgfanameCopyQuery orderByFrynursery($order = Criteria::ASC) Order by the FryNursery column
 * @method StocksB4IgfanameCopyQuery orderByLarvalnursery($order = Criteria::ASC) Order by the LarvalNursery column
 * @method StocksB4IgfanameCopyQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method StocksB4IgfanameCopyQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method StocksB4IgfanameCopyQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method StocksB4IgfanameCopyQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method StocksB4IgfanameCopyQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method StocksB4IgfanameCopyQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method StocksB4IgfanameCopyQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method StocksB4IgfanameCopyQuery groupByStockcode() Group by the StockCode column
 * @method StocksB4IgfanameCopyQuery groupByStockdefs() Group by the StockDefs column
 * @method StocksB4IgfanameCopyQuery groupBySpeccode() Group by the SpecCode column
 * @method StocksB4IgfanameCopyQuery groupByLevel() Group by the Level column
 * @method StocksB4IgfanameCopyQuery groupByLocalunique() Group by the LocalUnique column
 * @method StocksB4IgfanameCopyQuery groupByIucnCode() Group by the IUCN_Code column
 * @method StocksB4IgfanameCopyQuery groupByIucnAssessment() Group by the IUCN_Assessment column
 * @method StocksB4IgfanameCopyQuery groupByProtected() Group by the Protected column
 * @method StocksB4IgfanameCopyQuery groupByStocksrefno() Group by the StocksRefNo column
 * @method StocksB4IgfanameCopyQuery groupByNorthernmost() Group by the Northernmost column
 * @method StocksB4IgfanameCopyQuery groupByNorthsouthn() Group by the NorthSouthN column
 * @method StocksB4IgfanameCopyQuery groupBySouthermost() Group by the Southermost column
 * @method StocksB4IgfanameCopyQuery groupByNorthsouths() Group by the NorthSouthS column
 * @method StocksB4IgfanameCopyQuery groupByWesternmost() Group by the Westernmost column
 * @method StocksB4IgfanameCopyQuery groupByWesteastw() Group by the WestEastW column
 * @method StocksB4IgfanameCopyQuery groupByEasternmost() Group by the Easternmost column
 * @method StocksB4IgfanameCopyQuery groupByWesteaste() Group by the WestEastE column
 * @method StocksB4IgfanameCopyQuery groupByBoundingref() Group by the BoundingRef column
 * @method StocksB4IgfanameCopyQuery groupByBoundingmethod() Group by the BoundingMethod column
 * @method StocksB4IgfanameCopyQuery groupByTempmin() Group by the TempMin column
 * @method StocksB4IgfanameCopyQuery groupByTempmax() Group by the TempMax column
 * @method StocksB4IgfanameCopyQuery groupByTempref() Group by the TempRef column
 * @method StocksB4IgfanameCopyQuery groupByEnvtemp() Group by the EnvTemp column
 * @method StocksB4IgfanameCopyQuery groupByResilience() Group by the Resilience column
 * @method StocksB4IgfanameCopyQuery groupByResilienceremark() Group by the ResilienceRemark column
 * @method StocksB4IgfanameCopyQuery groupByPhmin() Group by the pHMin column
 * @method StocksB4IgfanameCopyQuery groupByPhmax() Group by the pHMax column
 * @method StocksB4IgfanameCopyQuery groupByPhref() Group by the pHRef column
 * @method StocksB4IgfanameCopyQuery groupByDhmin() Group by the dHMin column
 * @method StocksB4IgfanameCopyQuery groupByDhmax() Group by the dHMax column
 * @method StocksB4IgfanameCopyQuery groupByDhref() Group by the dHRef column
 * @method StocksB4IgfanameCopyQuery groupByGenbankid() Group by the GenBankID column
 * @method StocksB4IgfanameCopyQuery groupByRfeid() Group by the RfeID column
 * @method StocksB4IgfanameCopyQuery groupByFigisId() Group by the FIGIS_ID column
 * @method StocksB4IgfanameCopyQuery groupByEcotoxid() Group by the EcotoxID column
 * @method StocksB4IgfanameCopyQuery groupByScrfaData() Group by the SCRFA_data column
 * @method StocksB4IgfanameCopyQuery groupByGmadId() Group by the GMAD_ID column
 * @method StocksB4IgfanameCopyQuery groupBySaup() Group by the SAUP column
 * @method StocksB4IgfanameCopyQuery groupBySaupId() Group by the SAUP_ID column
 * @method StocksB4IgfanameCopyQuery groupBySaupGroup() Group by the SAUP_Group column
 * @method StocksB4IgfanameCopyQuery groupByAusmuseum() Group by the AusMuseum column
 * @method StocksB4IgfanameCopyQuery groupByFishtrace() Group by the FishTrace column
 * @method StocksB4IgfanameCopyQuery groupByIucnId() Group by the IUCN_ID column
 * @method StocksB4IgfanameCopyQuery groupByIucnGroup() Group by the IUCN_Group column
 * @method StocksB4IgfanameCopyQuery groupByBoldId() Group by the BOLD_ID column
 * @method StocksB4IgfanameCopyQuery groupByEssayid() Group by the EssayID column
 * @method StocksB4IgfanameCopyQuery groupByAquamaps() Group by the Aquamaps column
 * @method StocksB4IgfanameCopyQuery groupByMorphology() Group by the Morphology column
 * @method StocksB4IgfanameCopyQuery groupByOccurrence() Group by the Occurrence column
 * @method StocksB4IgfanameCopyQuery groupByStrains() Group by the Strains column
 * @method StocksB4IgfanameCopyQuery groupByEcology() Group by the Ecology column
 * @method StocksB4IgfanameCopyQuery groupByDiseases() Group by the Diseases column
 * @method StocksB4IgfanameCopyQuery groupByAbnorm() Group by the Abnorm column
 * @method StocksB4IgfanameCopyQuery groupByMetabolism() Group by the Metabolism column
 * @method StocksB4IgfanameCopyQuery groupByPredators() Group by the Predators column
 * @method StocksB4IgfanameCopyQuery groupBySpawning() Group by the Spawning column
 * @method StocksB4IgfanameCopyQuery groupBySpeed() Group by the Speed column
 * @method StocksB4IgfanameCopyQuery groupByDiet() Group by the Diet column
 * @method StocksB4IgfanameCopyQuery groupByEggs() Group by the Eggs column
 * @method StocksB4IgfanameCopyQuery groupByEggdevelop() Group by the EggDevelop column
 * @method StocksB4IgfanameCopyQuery groupByFood() Group by the Food column
 * @method StocksB4IgfanameCopyQuery groupByLarvae() Group by the Larvae column
 * @method StocksB4IgfanameCopyQuery groupByLarvdyn() Group by the LarvDyn column
 * @method StocksB4IgfanameCopyQuery groupByLarvspeed() Group by the LarvSpeed column
 * @method StocksB4IgfanameCopyQuery groupByPopdyn() Group by the PopDyn column
 * @method StocksB4IgfanameCopyQuery groupByLengthweight() Group by the LengthWeight column
 * @method StocksB4IgfanameCopyQuery groupByGillarea() Group by the Gillarea column
 * @method StocksB4IgfanameCopyQuery groupByMaturity() Group by the Maturity column
 * @method StocksB4IgfanameCopyQuery groupByMatsizes() Group by the MatSizes column
 * @method StocksB4IgfanameCopyQuery groupByProcessing() Group by the Processing column
 * @method StocksB4IgfanameCopyQuery groupByReproduction() Group by the Reproduction column
 * @method StocksB4IgfanameCopyQuery groupByIntroductions() Group by the Introductions column
 * @method StocksB4IgfanameCopyQuery groupByAbundance() Group by the Abundance column
 * @method StocksB4IgfanameCopyQuery groupByVision() Group by the Vision column
 * @method StocksB4IgfanameCopyQuery groupByGenetics() Group by the Genetics column
 * @method StocksB4IgfanameCopyQuery groupByAquaculture() Group by the Aquaculture column
 * @method StocksB4IgfanameCopyQuery groupByCountrycomp() Group by the CountryComp column
 * @method StocksB4IgfanameCopyQuery groupByAllele() Group by the Allele column
 * @method StocksB4IgfanameCopyQuery groupByGeneticstudies() Group by the GeneticStudies column
 * @method StocksB4IgfanameCopyQuery groupByRation() Group by the Ration column
 * @method StocksB4IgfanameCopyQuery groupByFoods() Group by the Foods column
 * @method StocksB4IgfanameCopyQuery groupByEcotoxicology() Group by the Ecotoxicology column
 * @method StocksB4IgfanameCopyQuery groupByCatches() Group by the Catches column
 * @method StocksB4IgfanameCopyQuery groupByFaoaqua() Group by the FAOAqua column
 * @method StocksB4IgfanameCopyQuery groupByLengthrelations() Group by the LengthRelations column
 * @method StocksB4IgfanameCopyQuery groupByLengthfrequency() Group by the LengthFrequency column
 * @method StocksB4IgfanameCopyQuery groupBySounds() Group by the Sounds column
 * @method StocksB4IgfanameCopyQuery groupByBroodstock() Group by the Broodstock column
 * @method StocksB4IgfanameCopyQuery groupByEggnursery() Group by the EggNursery column
 * @method StocksB4IgfanameCopyQuery groupByFrynursery() Group by the FryNursery column
 * @method StocksB4IgfanameCopyQuery groupByLarvalnursery() Group by the LarvalNursery column
 * @method StocksB4IgfanameCopyQuery groupByEntered() Group by the Entered column
 * @method StocksB4IgfanameCopyQuery groupByDateentered() Group by the DateEntered column
 * @method StocksB4IgfanameCopyQuery groupByModified() Group by the Modified column
 * @method StocksB4IgfanameCopyQuery groupByDatemodified() Group by the DateModified column
 * @method StocksB4IgfanameCopyQuery groupByExpert() Group by the Expert column
 * @method StocksB4IgfanameCopyQuery groupByDatechecked() Group by the DateChecked column
 * @method StocksB4IgfanameCopyQuery groupByTs() Group by the TS column
 *
 * @method StocksB4IgfanameCopyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method StocksB4IgfanameCopyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method StocksB4IgfanameCopyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method StocksB4IgfanameCopy findOne(PropelPDO $con = null) Return the first StocksB4IgfanameCopy matching the query
 * @method StocksB4IgfanameCopy findOneOrCreate(PropelPDO $con = null) Return the first StocksB4IgfanameCopy matching the query, or a new StocksB4IgfanameCopy object populated from the query conditions when no match is found
 *
 * @method StocksB4IgfanameCopy findOneByStockcode(int $StockCode) Return the first StocksB4IgfanameCopy filtered by the StockCode column
 * @method StocksB4IgfanameCopy findOneByStockdefs(string $StockDefs) Return the first StocksB4IgfanameCopy filtered by the StockDefs column
 * @method StocksB4IgfanameCopy findOneBySpeccode(int $SpecCode) Return the first StocksB4IgfanameCopy filtered by the SpecCode column
 * @method StocksB4IgfanameCopy findOneByLevel(string $Level) Return the first StocksB4IgfanameCopy filtered by the Level column
 * @method StocksB4IgfanameCopy findOneByLocalunique(string $LocalUnique) Return the first StocksB4IgfanameCopy filtered by the LocalUnique column
 * @method StocksB4IgfanameCopy findOneByIucnCode(string $IUCN_Code) Return the first StocksB4IgfanameCopy filtered by the IUCN_Code column
 * @method StocksB4IgfanameCopy findOneByIucnAssessment(string $IUCN_Assessment) Return the first StocksB4IgfanameCopy filtered by the IUCN_Assessment column
 * @method StocksB4IgfanameCopy findOneByProtected(int $Protected) Return the first StocksB4IgfanameCopy filtered by the Protected column
 * @method StocksB4IgfanameCopy findOneByStocksrefno(int $StocksRefNo) Return the first StocksB4IgfanameCopy filtered by the StocksRefNo column
 * @method StocksB4IgfanameCopy findOneByNorthernmost(int $Northernmost) Return the first StocksB4IgfanameCopy filtered by the Northernmost column
 * @method StocksB4IgfanameCopy findOneByNorthsouthn(string $NorthSouthN) Return the first StocksB4IgfanameCopy filtered by the NorthSouthN column
 * @method StocksB4IgfanameCopy findOneBySouthermost(int $Southermost) Return the first StocksB4IgfanameCopy filtered by the Southermost column
 * @method StocksB4IgfanameCopy findOneByNorthsouths(string $NorthSouthS) Return the first StocksB4IgfanameCopy filtered by the NorthSouthS column
 * @method StocksB4IgfanameCopy findOneByWesternmost(int $Westernmost) Return the first StocksB4IgfanameCopy filtered by the Westernmost column
 * @method StocksB4IgfanameCopy findOneByWesteastw(string $WestEastW) Return the first StocksB4IgfanameCopy filtered by the WestEastW column
 * @method StocksB4IgfanameCopy findOneByEasternmost(int $Easternmost) Return the first StocksB4IgfanameCopy filtered by the Easternmost column
 * @method StocksB4IgfanameCopy findOneByWesteaste(string $WestEastE) Return the first StocksB4IgfanameCopy filtered by the WestEastE column
 * @method StocksB4IgfanameCopy findOneByBoundingref(int $BoundingRef) Return the first StocksB4IgfanameCopy filtered by the BoundingRef column
 * @method StocksB4IgfanameCopy findOneByBoundingmethod(string $BoundingMethod) Return the first StocksB4IgfanameCopy filtered by the BoundingMethod column
 * @method StocksB4IgfanameCopy findOneByTempmin(double $TempMin) Return the first StocksB4IgfanameCopy filtered by the TempMin column
 * @method StocksB4IgfanameCopy findOneByTempmax(double $TempMax) Return the first StocksB4IgfanameCopy filtered by the TempMax column
 * @method StocksB4IgfanameCopy findOneByTempref(int $TempRef) Return the first StocksB4IgfanameCopy filtered by the TempRef column
 * @method StocksB4IgfanameCopy findOneByEnvtemp(string $EnvTemp) Return the first StocksB4IgfanameCopy filtered by the EnvTemp column
 * @method StocksB4IgfanameCopy findOneByResilience(string $Resilience) Return the first StocksB4IgfanameCopy filtered by the Resilience column
 * @method StocksB4IgfanameCopy findOneByResilienceremark(string $ResilienceRemark) Return the first StocksB4IgfanameCopy filtered by the ResilienceRemark column
 * @method StocksB4IgfanameCopy findOneByPhmin(double $pHMin) Return the first StocksB4IgfanameCopy filtered by the pHMin column
 * @method StocksB4IgfanameCopy findOneByPhmax(double $pHMax) Return the first StocksB4IgfanameCopy filtered by the pHMax column
 * @method StocksB4IgfanameCopy findOneByPhref(int $pHRef) Return the first StocksB4IgfanameCopy filtered by the pHRef column
 * @method StocksB4IgfanameCopy findOneByDhmin(double $dHMin) Return the first StocksB4IgfanameCopy filtered by the dHMin column
 * @method StocksB4IgfanameCopy findOneByDhmax(double $dHMax) Return the first StocksB4IgfanameCopy filtered by the dHMax column
 * @method StocksB4IgfanameCopy findOneByDhref(int $dHRef) Return the first StocksB4IgfanameCopy filtered by the dHRef column
 * @method StocksB4IgfanameCopy findOneByGenbankid(int $GenBankID) Return the first StocksB4IgfanameCopy filtered by the GenBankID column
 * @method StocksB4IgfanameCopy findOneByRfeid(string $RfeID) Return the first StocksB4IgfanameCopy filtered by the RfeID column
 * @method StocksB4IgfanameCopy findOneByFigisId(int $FIGIS_ID) Return the first StocksB4IgfanameCopy filtered by the FIGIS_ID column
 * @method StocksB4IgfanameCopy findOneByEcotoxid(int $EcotoxID) Return the first StocksB4IgfanameCopy filtered by the EcotoxID column
 * @method StocksB4IgfanameCopy findOneByScrfaData(int $SCRFA_data) Return the first StocksB4IgfanameCopy filtered by the SCRFA_data column
 * @method StocksB4IgfanameCopy findOneByGmadId(int $GMAD_ID) Return the first StocksB4IgfanameCopy filtered by the GMAD_ID column
 * @method StocksB4IgfanameCopy findOneBySaup(int $SAUP) Return the first StocksB4IgfanameCopy filtered by the SAUP column
 * @method StocksB4IgfanameCopy findOneBySaupId(int $SAUP_ID) Return the first StocksB4IgfanameCopy filtered by the SAUP_ID column
 * @method StocksB4IgfanameCopy findOneBySaupGroup(int $SAUP_Group) Return the first StocksB4IgfanameCopy filtered by the SAUP_Group column
 * @method StocksB4IgfanameCopy findOneByAusmuseum(int $AusMuseum) Return the first StocksB4IgfanameCopy filtered by the AusMuseum column
 * @method StocksB4IgfanameCopy findOneByFishtrace(int $FishTrace) Return the first StocksB4IgfanameCopy filtered by the FishTrace column
 * @method StocksB4IgfanameCopy findOneByIucnId(int $IUCN_ID) Return the first StocksB4IgfanameCopy filtered by the IUCN_ID column
 * @method StocksB4IgfanameCopy findOneByIucnGroup(string $IUCN_Group) Return the first StocksB4IgfanameCopy filtered by the IUCN_Group column
 * @method StocksB4IgfanameCopy findOneByBoldId(int $BOLD_ID) Return the first StocksB4IgfanameCopy filtered by the BOLD_ID column
 * @method StocksB4IgfanameCopy findOneByEssayid(int $EssayID) Return the first StocksB4IgfanameCopy filtered by the EssayID column
 * @method StocksB4IgfanameCopy findOneByAquamaps(int $Aquamaps) Return the first StocksB4IgfanameCopy filtered by the Aquamaps column
 * @method StocksB4IgfanameCopy findOneByMorphology(int $Morphology) Return the first StocksB4IgfanameCopy filtered by the Morphology column
 * @method StocksB4IgfanameCopy findOneByOccurrence(int $Occurrence) Return the first StocksB4IgfanameCopy filtered by the Occurrence column
 * @method StocksB4IgfanameCopy findOneByStrains(int $Strains) Return the first StocksB4IgfanameCopy filtered by the Strains column
 * @method StocksB4IgfanameCopy findOneByEcology(int $Ecology) Return the first StocksB4IgfanameCopy filtered by the Ecology column
 * @method StocksB4IgfanameCopy findOneByDiseases(int $Diseases) Return the first StocksB4IgfanameCopy filtered by the Diseases column
 * @method StocksB4IgfanameCopy findOneByAbnorm(int $Abnorm) Return the first StocksB4IgfanameCopy filtered by the Abnorm column
 * @method StocksB4IgfanameCopy findOneByMetabolism(int $Metabolism) Return the first StocksB4IgfanameCopy filtered by the Metabolism column
 * @method StocksB4IgfanameCopy findOneByPredators(int $Predators) Return the first StocksB4IgfanameCopy filtered by the Predators column
 * @method StocksB4IgfanameCopy findOneBySpawning(int $Spawning) Return the first StocksB4IgfanameCopy filtered by the Spawning column
 * @method StocksB4IgfanameCopy findOneBySpeed(int $Speed) Return the first StocksB4IgfanameCopy filtered by the Speed column
 * @method StocksB4IgfanameCopy findOneByDiet(int $Diet) Return the first StocksB4IgfanameCopy filtered by the Diet column
 * @method StocksB4IgfanameCopy findOneByEggs(int $Eggs) Return the first StocksB4IgfanameCopy filtered by the Eggs column
 * @method StocksB4IgfanameCopy findOneByEggdevelop(int $EggDevelop) Return the first StocksB4IgfanameCopy filtered by the EggDevelop column
 * @method StocksB4IgfanameCopy findOneByFood(int $Food) Return the first StocksB4IgfanameCopy filtered by the Food column
 * @method StocksB4IgfanameCopy findOneByLarvae(int $Larvae) Return the first StocksB4IgfanameCopy filtered by the Larvae column
 * @method StocksB4IgfanameCopy findOneByLarvdyn(int $LarvDyn) Return the first StocksB4IgfanameCopy filtered by the LarvDyn column
 * @method StocksB4IgfanameCopy findOneByLarvspeed(int $LarvSpeed) Return the first StocksB4IgfanameCopy filtered by the LarvSpeed column
 * @method StocksB4IgfanameCopy findOneByPopdyn(int $PopDyn) Return the first StocksB4IgfanameCopy filtered by the PopDyn column
 * @method StocksB4IgfanameCopy findOneByLengthweight(int $LengthWeight) Return the first StocksB4IgfanameCopy filtered by the LengthWeight column
 * @method StocksB4IgfanameCopy findOneByGillarea(int $Gillarea) Return the first StocksB4IgfanameCopy filtered by the Gillarea column
 * @method StocksB4IgfanameCopy findOneByMaturity(int $Maturity) Return the first StocksB4IgfanameCopy filtered by the Maturity column
 * @method StocksB4IgfanameCopy findOneByMatsizes(int $MatSizes) Return the first StocksB4IgfanameCopy filtered by the MatSizes column
 * @method StocksB4IgfanameCopy findOneByProcessing(int $Processing) Return the first StocksB4IgfanameCopy filtered by the Processing column
 * @method StocksB4IgfanameCopy findOneByReproduction(int $Reproduction) Return the first StocksB4IgfanameCopy filtered by the Reproduction column
 * @method StocksB4IgfanameCopy findOneByIntroductions(int $Introductions) Return the first StocksB4IgfanameCopy filtered by the Introductions column
 * @method StocksB4IgfanameCopy findOneByAbundance(int $Abundance) Return the first StocksB4IgfanameCopy filtered by the Abundance column
 * @method StocksB4IgfanameCopy findOneByVision(int $Vision) Return the first StocksB4IgfanameCopy filtered by the Vision column
 * @method StocksB4IgfanameCopy findOneByGenetics(int $Genetics) Return the first StocksB4IgfanameCopy filtered by the Genetics column
 * @method StocksB4IgfanameCopy findOneByAquaculture(int $Aquaculture) Return the first StocksB4IgfanameCopy filtered by the Aquaculture column
 * @method StocksB4IgfanameCopy findOneByCountrycomp(int $CountryComp) Return the first StocksB4IgfanameCopy filtered by the CountryComp column
 * @method StocksB4IgfanameCopy findOneByAllele(int $Allele) Return the first StocksB4IgfanameCopy filtered by the Allele column
 * @method StocksB4IgfanameCopy findOneByGeneticstudies(int $GeneticStudies) Return the first StocksB4IgfanameCopy filtered by the GeneticStudies column
 * @method StocksB4IgfanameCopy findOneByRation(int $Ration) Return the first StocksB4IgfanameCopy filtered by the Ration column
 * @method StocksB4IgfanameCopy findOneByFoods(int $Foods) Return the first StocksB4IgfanameCopy filtered by the Foods column
 * @method StocksB4IgfanameCopy findOneByEcotoxicology(int $Ecotoxicology) Return the first StocksB4IgfanameCopy filtered by the Ecotoxicology column
 * @method StocksB4IgfanameCopy findOneByCatches(int $Catches) Return the first StocksB4IgfanameCopy filtered by the Catches column
 * @method StocksB4IgfanameCopy findOneByFaoaqua(int $FAOAqua) Return the first StocksB4IgfanameCopy filtered by the FAOAqua column
 * @method StocksB4IgfanameCopy findOneByLengthrelations(int $LengthRelations) Return the first StocksB4IgfanameCopy filtered by the LengthRelations column
 * @method StocksB4IgfanameCopy findOneByLengthfrequency(int $LengthFrequency) Return the first StocksB4IgfanameCopy filtered by the LengthFrequency column
 * @method StocksB4IgfanameCopy findOneBySounds(int $Sounds) Return the first StocksB4IgfanameCopy filtered by the Sounds column
 * @method StocksB4IgfanameCopy findOneByBroodstock(int $Broodstock) Return the first StocksB4IgfanameCopy filtered by the Broodstock column
 * @method StocksB4IgfanameCopy findOneByEggnursery(int $EggNursery) Return the first StocksB4IgfanameCopy filtered by the EggNursery column
 * @method StocksB4IgfanameCopy findOneByFrynursery(int $FryNursery) Return the first StocksB4IgfanameCopy filtered by the FryNursery column
 * @method StocksB4IgfanameCopy findOneByLarvalnursery(int $LarvalNursery) Return the first StocksB4IgfanameCopy filtered by the LarvalNursery column
 * @method StocksB4IgfanameCopy findOneByEntered(int $Entered) Return the first StocksB4IgfanameCopy filtered by the Entered column
 * @method StocksB4IgfanameCopy findOneByDateentered(string $DateEntered) Return the first StocksB4IgfanameCopy filtered by the DateEntered column
 * @method StocksB4IgfanameCopy findOneByModified(int $Modified) Return the first StocksB4IgfanameCopy filtered by the Modified column
 * @method StocksB4IgfanameCopy findOneByDatemodified(string $DateModified) Return the first StocksB4IgfanameCopy filtered by the DateModified column
 * @method StocksB4IgfanameCopy findOneByExpert(int $Expert) Return the first StocksB4IgfanameCopy filtered by the Expert column
 * @method StocksB4IgfanameCopy findOneByDatechecked(string $DateChecked) Return the first StocksB4IgfanameCopy filtered by the DateChecked column
 * @method StocksB4IgfanameCopy findOneByTs(string $TS) Return the first StocksB4IgfanameCopy filtered by the TS column
 *
 * @method array findByStockcode(int $StockCode) Return StocksB4IgfanameCopy objects filtered by the StockCode column
 * @method array findByStockdefs(string $StockDefs) Return StocksB4IgfanameCopy objects filtered by the StockDefs column
 * @method array findBySpeccode(int $SpecCode) Return StocksB4IgfanameCopy objects filtered by the SpecCode column
 * @method array findByLevel(string $Level) Return StocksB4IgfanameCopy objects filtered by the Level column
 * @method array findByLocalunique(string $LocalUnique) Return StocksB4IgfanameCopy objects filtered by the LocalUnique column
 * @method array findByIucnCode(string $IUCN_Code) Return StocksB4IgfanameCopy objects filtered by the IUCN_Code column
 * @method array findByIucnAssessment(string $IUCN_Assessment) Return StocksB4IgfanameCopy objects filtered by the IUCN_Assessment column
 * @method array findByProtected(int $Protected) Return StocksB4IgfanameCopy objects filtered by the Protected column
 * @method array findByStocksrefno(int $StocksRefNo) Return StocksB4IgfanameCopy objects filtered by the StocksRefNo column
 * @method array findByNorthernmost(int $Northernmost) Return StocksB4IgfanameCopy objects filtered by the Northernmost column
 * @method array findByNorthsouthn(string $NorthSouthN) Return StocksB4IgfanameCopy objects filtered by the NorthSouthN column
 * @method array findBySouthermost(int $Southermost) Return StocksB4IgfanameCopy objects filtered by the Southermost column
 * @method array findByNorthsouths(string $NorthSouthS) Return StocksB4IgfanameCopy objects filtered by the NorthSouthS column
 * @method array findByWesternmost(int $Westernmost) Return StocksB4IgfanameCopy objects filtered by the Westernmost column
 * @method array findByWesteastw(string $WestEastW) Return StocksB4IgfanameCopy objects filtered by the WestEastW column
 * @method array findByEasternmost(int $Easternmost) Return StocksB4IgfanameCopy objects filtered by the Easternmost column
 * @method array findByWesteaste(string $WestEastE) Return StocksB4IgfanameCopy objects filtered by the WestEastE column
 * @method array findByBoundingref(int $BoundingRef) Return StocksB4IgfanameCopy objects filtered by the BoundingRef column
 * @method array findByBoundingmethod(string $BoundingMethod) Return StocksB4IgfanameCopy objects filtered by the BoundingMethod column
 * @method array findByTempmin(double $TempMin) Return StocksB4IgfanameCopy objects filtered by the TempMin column
 * @method array findByTempmax(double $TempMax) Return StocksB4IgfanameCopy objects filtered by the TempMax column
 * @method array findByTempref(int $TempRef) Return StocksB4IgfanameCopy objects filtered by the TempRef column
 * @method array findByEnvtemp(string $EnvTemp) Return StocksB4IgfanameCopy objects filtered by the EnvTemp column
 * @method array findByResilience(string $Resilience) Return StocksB4IgfanameCopy objects filtered by the Resilience column
 * @method array findByResilienceremark(string $ResilienceRemark) Return StocksB4IgfanameCopy objects filtered by the ResilienceRemark column
 * @method array findByPhmin(double $pHMin) Return StocksB4IgfanameCopy objects filtered by the pHMin column
 * @method array findByPhmax(double $pHMax) Return StocksB4IgfanameCopy objects filtered by the pHMax column
 * @method array findByPhref(int $pHRef) Return StocksB4IgfanameCopy objects filtered by the pHRef column
 * @method array findByDhmin(double $dHMin) Return StocksB4IgfanameCopy objects filtered by the dHMin column
 * @method array findByDhmax(double $dHMax) Return StocksB4IgfanameCopy objects filtered by the dHMax column
 * @method array findByDhref(int $dHRef) Return StocksB4IgfanameCopy objects filtered by the dHRef column
 * @method array findByGenbankid(int $GenBankID) Return StocksB4IgfanameCopy objects filtered by the GenBankID column
 * @method array findByRfeid(string $RfeID) Return StocksB4IgfanameCopy objects filtered by the RfeID column
 * @method array findByFigisId(int $FIGIS_ID) Return StocksB4IgfanameCopy objects filtered by the FIGIS_ID column
 * @method array findByEcotoxid(int $EcotoxID) Return StocksB4IgfanameCopy objects filtered by the EcotoxID column
 * @method array findByScrfaData(int $SCRFA_data) Return StocksB4IgfanameCopy objects filtered by the SCRFA_data column
 * @method array findByGmadId(int $GMAD_ID) Return StocksB4IgfanameCopy objects filtered by the GMAD_ID column
 * @method array findBySaup(int $SAUP) Return StocksB4IgfanameCopy objects filtered by the SAUP column
 * @method array findBySaupId(int $SAUP_ID) Return StocksB4IgfanameCopy objects filtered by the SAUP_ID column
 * @method array findBySaupGroup(int $SAUP_Group) Return StocksB4IgfanameCopy objects filtered by the SAUP_Group column
 * @method array findByAusmuseum(int $AusMuseum) Return StocksB4IgfanameCopy objects filtered by the AusMuseum column
 * @method array findByFishtrace(int $FishTrace) Return StocksB4IgfanameCopy objects filtered by the FishTrace column
 * @method array findByIucnId(int $IUCN_ID) Return StocksB4IgfanameCopy objects filtered by the IUCN_ID column
 * @method array findByIucnGroup(string $IUCN_Group) Return StocksB4IgfanameCopy objects filtered by the IUCN_Group column
 * @method array findByBoldId(int $BOLD_ID) Return StocksB4IgfanameCopy objects filtered by the BOLD_ID column
 * @method array findByEssayid(int $EssayID) Return StocksB4IgfanameCopy objects filtered by the EssayID column
 * @method array findByAquamaps(int $Aquamaps) Return StocksB4IgfanameCopy objects filtered by the Aquamaps column
 * @method array findByMorphology(int $Morphology) Return StocksB4IgfanameCopy objects filtered by the Morphology column
 * @method array findByOccurrence(int $Occurrence) Return StocksB4IgfanameCopy objects filtered by the Occurrence column
 * @method array findByStrains(int $Strains) Return StocksB4IgfanameCopy objects filtered by the Strains column
 * @method array findByEcology(int $Ecology) Return StocksB4IgfanameCopy objects filtered by the Ecology column
 * @method array findByDiseases(int $Diseases) Return StocksB4IgfanameCopy objects filtered by the Diseases column
 * @method array findByAbnorm(int $Abnorm) Return StocksB4IgfanameCopy objects filtered by the Abnorm column
 * @method array findByMetabolism(int $Metabolism) Return StocksB4IgfanameCopy objects filtered by the Metabolism column
 * @method array findByPredators(int $Predators) Return StocksB4IgfanameCopy objects filtered by the Predators column
 * @method array findBySpawning(int $Spawning) Return StocksB4IgfanameCopy objects filtered by the Spawning column
 * @method array findBySpeed(int $Speed) Return StocksB4IgfanameCopy objects filtered by the Speed column
 * @method array findByDiet(int $Diet) Return StocksB4IgfanameCopy objects filtered by the Diet column
 * @method array findByEggs(int $Eggs) Return StocksB4IgfanameCopy objects filtered by the Eggs column
 * @method array findByEggdevelop(int $EggDevelop) Return StocksB4IgfanameCopy objects filtered by the EggDevelop column
 * @method array findByFood(int $Food) Return StocksB4IgfanameCopy objects filtered by the Food column
 * @method array findByLarvae(int $Larvae) Return StocksB4IgfanameCopy objects filtered by the Larvae column
 * @method array findByLarvdyn(int $LarvDyn) Return StocksB4IgfanameCopy objects filtered by the LarvDyn column
 * @method array findByLarvspeed(int $LarvSpeed) Return StocksB4IgfanameCopy objects filtered by the LarvSpeed column
 * @method array findByPopdyn(int $PopDyn) Return StocksB4IgfanameCopy objects filtered by the PopDyn column
 * @method array findByLengthweight(int $LengthWeight) Return StocksB4IgfanameCopy objects filtered by the LengthWeight column
 * @method array findByGillarea(int $Gillarea) Return StocksB4IgfanameCopy objects filtered by the Gillarea column
 * @method array findByMaturity(int $Maturity) Return StocksB4IgfanameCopy objects filtered by the Maturity column
 * @method array findByMatsizes(int $MatSizes) Return StocksB4IgfanameCopy objects filtered by the MatSizes column
 * @method array findByProcessing(int $Processing) Return StocksB4IgfanameCopy objects filtered by the Processing column
 * @method array findByReproduction(int $Reproduction) Return StocksB4IgfanameCopy objects filtered by the Reproduction column
 * @method array findByIntroductions(int $Introductions) Return StocksB4IgfanameCopy objects filtered by the Introductions column
 * @method array findByAbundance(int $Abundance) Return StocksB4IgfanameCopy objects filtered by the Abundance column
 * @method array findByVision(int $Vision) Return StocksB4IgfanameCopy objects filtered by the Vision column
 * @method array findByGenetics(int $Genetics) Return StocksB4IgfanameCopy objects filtered by the Genetics column
 * @method array findByAquaculture(int $Aquaculture) Return StocksB4IgfanameCopy objects filtered by the Aquaculture column
 * @method array findByCountrycomp(int $CountryComp) Return StocksB4IgfanameCopy objects filtered by the CountryComp column
 * @method array findByAllele(int $Allele) Return StocksB4IgfanameCopy objects filtered by the Allele column
 * @method array findByGeneticstudies(int $GeneticStudies) Return StocksB4IgfanameCopy objects filtered by the GeneticStudies column
 * @method array findByRation(int $Ration) Return StocksB4IgfanameCopy objects filtered by the Ration column
 * @method array findByFoods(int $Foods) Return StocksB4IgfanameCopy objects filtered by the Foods column
 * @method array findByEcotoxicology(int $Ecotoxicology) Return StocksB4IgfanameCopy objects filtered by the Ecotoxicology column
 * @method array findByCatches(int $Catches) Return StocksB4IgfanameCopy objects filtered by the Catches column
 * @method array findByFaoaqua(int $FAOAqua) Return StocksB4IgfanameCopy objects filtered by the FAOAqua column
 * @method array findByLengthrelations(int $LengthRelations) Return StocksB4IgfanameCopy objects filtered by the LengthRelations column
 * @method array findByLengthfrequency(int $LengthFrequency) Return StocksB4IgfanameCopy objects filtered by the LengthFrequency column
 * @method array findBySounds(int $Sounds) Return StocksB4IgfanameCopy objects filtered by the Sounds column
 * @method array findByBroodstock(int $Broodstock) Return StocksB4IgfanameCopy objects filtered by the Broodstock column
 * @method array findByEggnursery(int $EggNursery) Return StocksB4IgfanameCopy objects filtered by the EggNursery column
 * @method array findByFrynursery(int $FryNursery) Return StocksB4IgfanameCopy objects filtered by the FryNursery column
 * @method array findByLarvalnursery(int $LarvalNursery) Return StocksB4IgfanameCopy objects filtered by the LarvalNursery column
 * @method array findByEntered(int $Entered) Return StocksB4IgfanameCopy objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return StocksB4IgfanameCopy objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return StocksB4IgfanameCopy objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return StocksB4IgfanameCopy objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return StocksB4IgfanameCopy objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return StocksB4IgfanameCopy objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return StocksB4IgfanameCopy objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseStocksB4IgfanameCopyQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseStocksB4IgfanameCopyQuery object.
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
            $modelName = 'StocksB4IgfanameCopy';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new StocksB4IgfanameCopyQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   StocksB4IgfanameCopyQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return StocksB4IgfanameCopyQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof StocksB4IgfanameCopyQuery) {
            return $criteria;
        }
        $query = new StocksB4IgfanameCopyQuery(null, null, $modelAlias);

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
     * @return   StocksB4IgfanameCopy|StocksB4IgfanameCopy[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = StocksB4IgfanameCopyPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(StocksB4IgfanameCopyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 StocksB4IgfanameCopy A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `StockCode`, `StockDefs`, `SpecCode`, `Level`, `LocalUnique`, `IUCN_Code`, `IUCN_Assessment`, `Protected`, `StocksRefNo`, `Northernmost`, `NorthSouthN`, `Southermost`, `NorthSouthS`, `Westernmost`, `WestEastW`, `Easternmost`, `WestEastE`, `BoundingRef`, `BoundingMethod`, `TempMin`, `TempMax`, `TempRef`, `EnvTemp`, `Resilience`, `ResilienceRemark`, `pHMin`, `pHMax`, `pHRef`, `dHMin`, `dHMax`, `dHRef`, `GenBankID`, `RfeID`, `FIGIS_ID`, `EcotoxID`, `SCRFA_data`, `GMAD_ID`, `SAUP`, `SAUP_ID`, `SAUP_Group`, `AusMuseum`, `FishTrace`, `IUCN_ID`, `IUCN_Group`, `BOLD_ID`, `EssayID`, `Aquamaps`, `Morphology`, `Occurrence`, `Strains`, `Ecology`, `Diseases`, `Abnorm`, `Metabolism`, `Predators`, `Spawning`, `Speed`, `Diet`, `Eggs`, `EggDevelop`, `Food`, `Larvae`, `LarvDyn`, `LarvSpeed`, `PopDyn`, `LengthWeight`, `Gillarea`, `Maturity`, `MatSizes`, `Processing`, `Reproduction`, `Introductions`, `Abundance`, `Vision`, `Genetics`, `Aquaculture`, `CountryComp`, `Allele`, `GeneticStudies`, `Ration`, `Foods`, `Ecotoxicology`, `Catches`, `FAOAqua`, `LengthRelations`, `LengthFrequency`, `Sounds`, `Broodstock`, `EggNursery`, `FryNursery`, `LarvalNursery`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `stocks_b4_igfaname_copy` WHERE `SpecCode` = :p0 AND `Level` = :p1 AND `LocalUnique` = :p2';
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
            $obj = new StocksB4IgfanameCopy();
            $obj->hydrate($row);
            StocksB4IgfanameCopyPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return StocksB4IgfanameCopy|StocksB4IgfanameCopy[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|StocksB4IgfanameCopy[]|mixed the list of results, formatted by the current formatter
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(StocksB4IgfanameCopyPeer::SPECCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(StocksB4IgfanameCopyPeer::LEVEL, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(StocksB4IgfanameCopyPeer::LOCALUNIQUE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(StocksB4IgfanameCopyPeer::SPECCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(StocksB4IgfanameCopyPeer::LEVEL, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(StocksB4IgfanameCopyPeer::LOCALUNIQUE, $key[2], Criteria::EQUAL);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::STOCKDEFS, $stockdefs, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::SPECCODE, $speccode, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::LEVEL, $level, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::LOCALUNIQUE, $localunique, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::IUCN_CODE, $iucnCode, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::IUCN_ASSESSMENT, $iucnAssessment, $comparison);
    }

    /**
     * Filter the query on the Protected column
     *
     * Example usage:
     * <code>
     * $query->filterByProtected(1234); // WHERE Protected = 1234
     * $query->filterByProtected(array(12, 34)); // WHERE Protected IN (12, 34)
     * $query->filterByProtected(array('min' => 12)); // WHERE Protected >= 12
     * $query->filterByProtected(array('max' => 12)); // WHERE Protected <= 12
     * </code>
     *
     * @param     mixed $protected The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByProtected($protected = null, $comparison = null)
    {
        if (is_array($protected)) {
            $useMinMax = false;
            if (isset($protected['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::PROTECTEDSTOCK, $protected['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($protected['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::PROTECTEDSTOCK, $protected['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::PROTECTEDSTOCK, $protected, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByStocksrefno($stocksrefno = null, $comparison = null)
    {
        if (is_array($stocksrefno)) {
            $useMinMax = false;
            if (isset($stocksrefno['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::STOCKSREFNO, $stocksrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stocksrefno['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::STOCKSREFNO, $stocksrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::STOCKSREFNO, $stocksrefno, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByNorthernmost($northernmost = null, $comparison = null)
    {
        if (is_array($northernmost)) {
            $useMinMax = false;
            if (isset($northernmost['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::NORTHERNMOST, $northernmost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($northernmost['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::NORTHERNMOST, $northernmost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::NORTHERNMOST, $northernmost, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::NORTHSOUTHN, $northsouthn, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterBySouthermost($southermost = null, $comparison = null)
    {
        if (is_array($southermost)) {
            $useMinMax = false;
            if (isset($southermost['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SOUTHERMOST, $southermost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($southermost['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SOUTHERMOST, $southermost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::SOUTHERMOST, $southermost, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::NORTHSOUTHS, $northsouths, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByWesternmost($westernmost = null, $comparison = null)
    {
        if (is_array($westernmost)) {
            $useMinMax = false;
            if (isset($westernmost['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::WESTERNMOST, $westernmost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($westernmost['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::WESTERNMOST, $westernmost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::WESTERNMOST, $westernmost, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::WESTEASTW, $westeastw, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByEasternmost($easternmost = null, $comparison = null)
    {
        if (is_array($easternmost)) {
            $useMinMax = false;
            if (isset($easternmost['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::EASTERNMOST, $easternmost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($easternmost['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::EASTERNMOST, $easternmost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::EASTERNMOST, $easternmost, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::WESTEASTE, $westeaste, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByBoundingref($boundingref = null, $comparison = null)
    {
        if (is_array($boundingref)) {
            $useMinMax = false;
            if (isset($boundingref['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::BOUNDINGREF, $boundingref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boundingref['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::BOUNDINGREF, $boundingref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::BOUNDINGREF, $boundingref, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::BOUNDINGMETHOD, $boundingmethod, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByTempmin($tempmin = null, $comparison = null)
    {
        if (is_array($tempmin)) {
            $useMinMax = false;
            if (isset($tempmin['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::TEMPMIN, $tempmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmin['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::TEMPMIN, $tempmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::TEMPMIN, $tempmin, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByTempmax($tempmax = null, $comparison = null)
    {
        if (is_array($tempmax)) {
            $useMinMax = false;
            if (isset($tempmax['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::TEMPMAX, $tempmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmax['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::TEMPMAX, $tempmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::TEMPMAX, $tempmax, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByTempref($tempref = null, $comparison = null)
    {
        if (is_array($tempref)) {
            $useMinMax = false;
            if (isset($tempref['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::TEMPREF, $tempref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempref['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::TEMPREF, $tempref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::TEMPREF, $tempref, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::ENVTEMP, $envtemp, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::RESILIENCE, $resilience, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::RESILIENCEREMARK, $resilienceremark, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByPhmin($phmin = null, $comparison = null)
    {
        if (is_array($phmin)) {
            $useMinMax = false;
            if (isset($phmin['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::PHMIN, $phmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmin['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::PHMIN, $phmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::PHMIN, $phmin, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByPhmax($phmax = null, $comparison = null)
    {
        if (is_array($phmax)) {
            $useMinMax = false;
            if (isset($phmax['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::PHMAX, $phmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmax['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::PHMAX, $phmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::PHMAX, $phmax, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByPhref($phref = null, $comparison = null)
    {
        if (is_array($phref)) {
            $useMinMax = false;
            if (isset($phref['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::PHREF, $phref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phref['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::PHREF, $phref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::PHREF, $phref, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByDhmin($dhmin = null, $comparison = null)
    {
        if (is_array($dhmin)) {
            $useMinMax = false;
            if (isset($dhmin['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DHMIN, $dhmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dhmin['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DHMIN, $dhmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::DHMIN, $dhmin, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByDhmax($dhmax = null, $comparison = null)
    {
        if (is_array($dhmax)) {
            $useMinMax = false;
            if (isset($dhmax['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DHMAX, $dhmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dhmax['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DHMAX, $dhmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::DHMAX, $dhmax, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByDhref($dhref = null, $comparison = null)
    {
        if (is_array($dhref)) {
            $useMinMax = false;
            if (isset($dhref['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DHREF, $dhref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dhref['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DHREF, $dhref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::DHREF, $dhref, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByGenbankid($genbankid = null, $comparison = null)
    {
        if (is_array($genbankid)) {
            $useMinMax = false;
            if (isset($genbankid['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::GENBANKID, $genbankid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genbankid['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::GENBANKID, $genbankid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::GENBANKID, $genbankid, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::RFEID, $rfeid, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByFigisId($figisId = null, $comparison = null)
    {
        if (is_array($figisId)) {
            $useMinMax = false;
            if (isset($figisId['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::FIGIS_ID, $figisId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($figisId['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::FIGIS_ID, $figisId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::FIGIS_ID, $figisId, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByEcotoxid($ecotoxid = null, $comparison = null)
    {
        if (is_array($ecotoxid)) {
            $useMinMax = false;
            if (isset($ecotoxid['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ECOTOXID, $ecotoxid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ecotoxid['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ECOTOXID, $ecotoxid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::ECOTOXID, $ecotoxid, $comparison);
    }

    /**
     * Filter the query on the SCRFA_data column
     *
     * Example usage:
     * <code>
     * $query->filterByScrfaData(1234); // WHERE SCRFA_data = 1234
     * $query->filterByScrfaData(array(12, 34)); // WHERE SCRFA_data IN (12, 34)
     * $query->filterByScrfaData(array('min' => 12)); // WHERE SCRFA_data >= 12
     * $query->filterByScrfaData(array('max' => 12)); // WHERE SCRFA_data <= 12
     * </code>
     *
     * @param     mixed $scrfaData The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByScrfaData($scrfaData = null, $comparison = null)
    {
        if (is_array($scrfaData)) {
            $useMinMax = false;
            if (isset($scrfaData['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SCRFA_DATA, $scrfaData['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scrfaData['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SCRFA_DATA, $scrfaData['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::SCRFA_DATA, $scrfaData, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByGmadId($gmadId = null, $comparison = null)
    {
        if (is_array($gmadId)) {
            $useMinMax = false;
            if (isset($gmadId['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::GMAD_ID, $gmadId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gmadId['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::GMAD_ID, $gmadId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::GMAD_ID, $gmadId, $comparison);
    }

    /**
     * Filter the query on the SAUP column
     *
     * Example usage:
     * <code>
     * $query->filterBySaup(1234); // WHERE SAUP = 1234
     * $query->filterBySaup(array(12, 34)); // WHERE SAUP IN (12, 34)
     * $query->filterBySaup(array('min' => 12)); // WHERE SAUP >= 12
     * $query->filterBySaup(array('max' => 12)); // WHERE SAUP <= 12
     * </code>
     *
     * @param     mixed $saup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterBySaup($saup = null, $comparison = null)
    {
        if (is_array($saup)) {
            $useMinMax = false;
            if (isset($saup['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SAUP, $saup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saup['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SAUP, $saup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::SAUP, $saup, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterBySaupId($saupId = null, $comparison = null)
    {
        if (is_array($saupId)) {
            $useMinMax = false;
            if (isset($saupId['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SAUP_ID, $saupId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saupId['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SAUP_ID, $saupId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::SAUP_ID, $saupId, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterBySaupGroup($saupGroup = null, $comparison = null)
    {
        if (is_array($saupGroup)) {
            $useMinMax = false;
            if (isset($saupGroup['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SAUP_GROUP, $saupGroup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saupGroup['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SAUP_GROUP, $saupGroup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::SAUP_GROUP, $saupGroup, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByAusmuseum($ausmuseum = null, $comparison = null)
    {
        if (is_array($ausmuseum)) {
            $useMinMax = false;
            if (isset($ausmuseum['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::AUSMUSEUM, $ausmuseum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ausmuseum['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::AUSMUSEUM, $ausmuseum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::AUSMUSEUM, $ausmuseum, $comparison);
    }

    /**
     * Filter the query on the FishTrace column
     *
     * Example usage:
     * <code>
     * $query->filterByFishtrace(1234); // WHERE FishTrace = 1234
     * $query->filterByFishtrace(array(12, 34)); // WHERE FishTrace IN (12, 34)
     * $query->filterByFishtrace(array('min' => 12)); // WHERE FishTrace >= 12
     * $query->filterByFishtrace(array('max' => 12)); // WHERE FishTrace <= 12
     * </code>
     *
     * @param     mixed $fishtrace The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByFishtrace($fishtrace = null, $comparison = null)
    {
        if (is_array($fishtrace)) {
            $useMinMax = false;
            if (isset($fishtrace['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::FISHTRACE, $fishtrace['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fishtrace['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::FISHTRACE, $fishtrace['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::FISHTRACE, $fishtrace, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByIucnId($iucnId = null, $comparison = null)
    {
        if (is_array($iucnId)) {
            $useMinMax = false;
            if (isset($iucnId['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::IUCN_ID, $iucnId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iucnId['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::IUCN_ID, $iucnId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::IUCN_ID, $iucnId, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::IUCN_GROUP, $iucnGroup, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByBoldId($boldId = null, $comparison = null)
    {
        if (is_array($boldId)) {
            $useMinMax = false;
            if (isset($boldId['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::BOLD_ID, $boldId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boldId['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::BOLD_ID, $boldId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::BOLD_ID, $boldId, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByEssayid($essayid = null, $comparison = null)
    {
        if (is_array($essayid)) {
            $useMinMax = false;
            if (isset($essayid['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ESSAYID, $essayid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($essayid['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ESSAYID, $essayid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::ESSAYID, $essayid, $comparison);
    }

    /**
     * Filter the query on the Aquamaps column
     *
     * Example usage:
     * <code>
     * $query->filterByAquamaps(1234); // WHERE Aquamaps = 1234
     * $query->filterByAquamaps(array(12, 34)); // WHERE Aquamaps IN (12, 34)
     * $query->filterByAquamaps(array('min' => 12)); // WHERE Aquamaps >= 12
     * $query->filterByAquamaps(array('max' => 12)); // WHERE Aquamaps <= 12
     * </code>
     *
     * @param     mixed $aquamaps The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByAquamaps($aquamaps = null, $comparison = null)
    {
        if (is_array($aquamaps)) {
            $useMinMax = false;
            if (isset($aquamaps['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::AQUAMAPS, $aquamaps['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aquamaps['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::AQUAMAPS, $aquamaps['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::AQUAMAPS, $aquamaps, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByMorphology($morphology = null, $comparison = null)
    {
        if (is_array($morphology)) {
            $useMinMax = false;
            if (isset($morphology['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::MORPHOLOGY, $morphology['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($morphology['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::MORPHOLOGY, $morphology['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::MORPHOLOGY, $morphology, $comparison);
    }

    /**
     * Filter the query on the Occurrence column
     *
     * Example usage:
     * <code>
     * $query->filterByOccurrence(1234); // WHERE Occurrence = 1234
     * $query->filterByOccurrence(array(12, 34)); // WHERE Occurrence IN (12, 34)
     * $query->filterByOccurrence(array('min' => 12)); // WHERE Occurrence >= 12
     * $query->filterByOccurrence(array('max' => 12)); // WHERE Occurrence <= 12
     * </code>
     *
     * @param     mixed $occurrence The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByOccurrence($occurrence = null, $comparison = null)
    {
        if (is_array($occurrence)) {
            $useMinMax = false;
            if (isset($occurrence['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::OCCURRENCE, $occurrence['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($occurrence['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::OCCURRENCE, $occurrence['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::OCCURRENCE, $occurrence, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByStrains($strains = null, $comparison = null)
    {
        if (is_array($strains)) {
            $useMinMax = false;
            if (isset($strains['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::STRAINS, $strains['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($strains['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::STRAINS, $strains['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::STRAINS, $strains, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByEcology($ecology = null, $comparison = null)
    {
        if (is_array($ecology)) {
            $useMinMax = false;
            if (isset($ecology['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ECOLOGY, $ecology['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ecology['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ECOLOGY, $ecology['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::ECOLOGY, $ecology, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByDiseases($diseases = null, $comparison = null)
    {
        if (is_array($diseases)) {
            $useMinMax = false;
            if (isset($diseases['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DISEASES, $diseases['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diseases['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DISEASES, $diseases['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::DISEASES, $diseases, $comparison);
    }

    /**
     * Filter the query on the Abnorm column
     *
     * Example usage:
     * <code>
     * $query->filterByAbnorm(1234); // WHERE Abnorm = 1234
     * $query->filterByAbnorm(array(12, 34)); // WHERE Abnorm IN (12, 34)
     * $query->filterByAbnorm(array('min' => 12)); // WHERE Abnorm >= 12
     * $query->filterByAbnorm(array('max' => 12)); // WHERE Abnorm <= 12
     * </code>
     *
     * @param     mixed $abnorm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByAbnorm($abnorm = null, $comparison = null)
    {
        if (is_array($abnorm)) {
            $useMinMax = false;
            if (isset($abnorm['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ABNORM, $abnorm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abnorm['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ABNORM, $abnorm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::ABNORM, $abnorm, $comparison);
    }

    /**
     * Filter the query on the Metabolism column
     *
     * Example usage:
     * <code>
     * $query->filterByMetabolism(1234); // WHERE Metabolism = 1234
     * $query->filterByMetabolism(array(12, 34)); // WHERE Metabolism IN (12, 34)
     * $query->filterByMetabolism(array('min' => 12)); // WHERE Metabolism >= 12
     * $query->filterByMetabolism(array('max' => 12)); // WHERE Metabolism <= 12
     * </code>
     *
     * @param     mixed $metabolism The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByMetabolism($metabolism = null, $comparison = null)
    {
        if (is_array($metabolism)) {
            $useMinMax = false;
            if (isset($metabolism['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::METABOLISM, $metabolism['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($metabolism['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::METABOLISM, $metabolism['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::METABOLISM, $metabolism, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByPredators($predators = null, $comparison = null)
    {
        if (is_array($predators)) {
            $useMinMax = false;
            if (isset($predators['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::PREDATORS, $predators['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($predators['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::PREDATORS, $predators['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::PREDATORS, $predators, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterBySpawning($spawning = null, $comparison = null)
    {
        if (is_array($spawning)) {
            $useMinMax = false;
            if (isset($spawning['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SPAWNING, $spawning['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spawning['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SPAWNING, $spawning['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::SPAWNING, $spawning, $comparison);
    }

    /**
     * Filter the query on the Speed column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeed(1234); // WHERE Speed = 1234
     * $query->filterBySpeed(array(12, 34)); // WHERE Speed IN (12, 34)
     * $query->filterBySpeed(array('min' => 12)); // WHERE Speed >= 12
     * $query->filterBySpeed(array('max' => 12)); // WHERE Speed <= 12
     * </code>
     *
     * @param     mixed $speed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterBySpeed($speed = null, $comparison = null)
    {
        if (is_array($speed)) {
            $useMinMax = false;
            if (isset($speed['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SPEED, $speed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speed['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SPEED, $speed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::SPEED, $speed, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByDiet($diet = null, $comparison = null)
    {
        if (is_array($diet)) {
            $useMinMax = false;
            if (isset($diet['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DIET, $diet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diet['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DIET, $diet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::DIET, $diet, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByEggs($eggs = null, $comparison = null)
    {
        if (is_array($eggs)) {
            $useMinMax = false;
            if (isset($eggs['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::EGGS, $eggs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggs['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::EGGS, $eggs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::EGGS, $eggs, $comparison);
    }

    /**
     * Filter the query on the EggDevelop column
     *
     * Example usage:
     * <code>
     * $query->filterByEggdevelop(1234); // WHERE EggDevelop = 1234
     * $query->filterByEggdevelop(array(12, 34)); // WHERE EggDevelop IN (12, 34)
     * $query->filterByEggdevelop(array('min' => 12)); // WHERE EggDevelop >= 12
     * $query->filterByEggdevelop(array('max' => 12)); // WHERE EggDevelop <= 12
     * </code>
     *
     * @param     mixed $eggdevelop The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByEggdevelop($eggdevelop = null, $comparison = null)
    {
        if (is_array($eggdevelop)) {
            $useMinMax = false;
            if (isset($eggdevelop['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::EGGDEVELOP, $eggdevelop['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggdevelop['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::EGGDEVELOP, $eggdevelop['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::EGGDEVELOP, $eggdevelop, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByFood($food = null, $comparison = null)
    {
        if (is_array($food)) {
            $useMinMax = false;
            if (isset($food['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::FOOD, $food['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($food['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::FOOD, $food['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::FOOD, $food, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByLarvae($larvae = null, $comparison = null)
    {
        if (is_array($larvae)) {
            $useMinMax = false;
            if (isset($larvae['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::LARVAE, $larvae['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvae['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::LARVAE, $larvae['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::LARVAE, $larvae, $comparison);
    }

    /**
     * Filter the query on the LarvDyn column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvdyn(1234); // WHERE LarvDyn = 1234
     * $query->filterByLarvdyn(array(12, 34)); // WHERE LarvDyn IN (12, 34)
     * $query->filterByLarvdyn(array('min' => 12)); // WHERE LarvDyn >= 12
     * $query->filterByLarvdyn(array('max' => 12)); // WHERE LarvDyn <= 12
     * </code>
     *
     * @param     mixed $larvdyn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByLarvdyn($larvdyn = null, $comparison = null)
    {
        if (is_array($larvdyn)) {
            $useMinMax = false;
            if (isset($larvdyn['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::LARVDYN, $larvdyn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvdyn['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::LARVDYN, $larvdyn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::LARVDYN, $larvdyn, $comparison);
    }

    /**
     * Filter the query on the LarvSpeed column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvspeed(1234); // WHERE LarvSpeed = 1234
     * $query->filterByLarvspeed(array(12, 34)); // WHERE LarvSpeed IN (12, 34)
     * $query->filterByLarvspeed(array('min' => 12)); // WHERE LarvSpeed >= 12
     * $query->filterByLarvspeed(array('max' => 12)); // WHERE LarvSpeed <= 12
     * </code>
     *
     * @param     mixed $larvspeed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByLarvspeed($larvspeed = null, $comparison = null)
    {
        if (is_array($larvspeed)) {
            $useMinMax = false;
            if (isset($larvspeed['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::LARVSPEED, $larvspeed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvspeed['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::LARVSPEED, $larvspeed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::LARVSPEED, $larvspeed, $comparison);
    }

    /**
     * Filter the query on the PopDyn column
     *
     * Example usage:
     * <code>
     * $query->filterByPopdyn(1234); // WHERE PopDyn = 1234
     * $query->filterByPopdyn(array(12, 34)); // WHERE PopDyn IN (12, 34)
     * $query->filterByPopdyn(array('min' => 12)); // WHERE PopDyn >= 12
     * $query->filterByPopdyn(array('max' => 12)); // WHERE PopDyn <= 12
     * </code>
     *
     * @param     mixed $popdyn The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByPopdyn($popdyn = null, $comparison = null)
    {
        if (is_array($popdyn)) {
            $useMinMax = false;
            if (isset($popdyn['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::POPDYN, $popdyn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($popdyn['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::POPDYN, $popdyn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::POPDYN, $popdyn, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByLengthweight($lengthweight = null, $comparison = null)
    {
        if (is_array($lengthweight)) {
            $useMinMax = false;
            if (isset($lengthweight['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::LENGTHWEIGHT, $lengthweight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthweight['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::LENGTHWEIGHT, $lengthweight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::LENGTHWEIGHT, $lengthweight, $comparison);
    }

    /**
     * Filter the query on the Gillarea column
     *
     * Example usage:
     * <code>
     * $query->filterByGillarea(1234); // WHERE Gillarea = 1234
     * $query->filterByGillarea(array(12, 34)); // WHERE Gillarea IN (12, 34)
     * $query->filterByGillarea(array('min' => 12)); // WHERE Gillarea >= 12
     * $query->filterByGillarea(array('max' => 12)); // WHERE Gillarea <= 12
     * </code>
     *
     * @param     mixed $gillarea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByGillarea($gillarea = null, $comparison = null)
    {
        if (is_array($gillarea)) {
            $useMinMax = false;
            if (isset($gillarea['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::GILLAREA, $gillarea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gillarea['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::GILLAREA, $gillarea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::GILLAREA, $gillarea, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByMaturity($maturity = null, $comparison = null)
    {
        if (is_array($maturity)) {
            $useMinMax = false;
            if (isset($maturity['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::MATURITY, $maturity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maturity['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::MATURITY, $maturity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::MATURITY, $maturity, $comparison);
    }

    /**
     * Filter the query on the MatSizes column
     *
     * Example usage:
     * <code>
     * $query->filterByMatsizes(1234); // WHERE MatSizes = 1234
     * $query->filterByMatsizes(array(12, 34)); // WHERE MatSizes IN (12, 34)
     * $query->filterByMatsizes(array('min' => 12)); // WHERE MatSizes >= 12
     * $query->filterByMatsizes(array('max' => 12)); // WHERE MatSizes <= 12
     * </code>
     *
     * @param     mixed $matsizes The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByMatsizes($matsizes = null, $comparison = null)
    {
        if (is_array($matsizes)) {
            $useMinMax = false;
            if (isset($matsizes['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::MATSIZES, $matsizes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($matsizes['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::MATSIZES, $matsizes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::MATSIZES, $matsizes, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByProcessing($processing = null, $comparison = null)
    {
        if (is_array($processing)) {
            $useMinMax = false;
            if (isset($processing['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::PROCESSING, $processing['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($processing['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::PROCESSING, $processing['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::PROCESSING, $processing, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByReproduction($reproduction = null, $comparison = null)
    {
        if (is_array($reproduction)) {
            $useMinMax = false;
            if (isset($reproduction['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::REPRODUCTION, $reproduction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reproduction['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::REPRODUCTION, $reproduction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::REPRODUCTION, $reproduction, $comparison);
    }

    /**
     * Filter the query on the Introductions column
     *
     * Example usage:
     * <code>
     * $query->filterByIntroductions(1234); // WHERE Introductions = 1234
     * $query->filterByIntroductions(array(12, 34)); // WHERE Introductions IN (12, 34)
     * $query->filterByIntroductions(array('min' => 12)); // WHERE Introductions >= 12
     * $query->filterByIntroductions(array('max' => 12)); // WHERE Introductions <= 12
     * </code>
     *
     * @param     mixed $introductions The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByIntroductions($introductions = null, $comparison = null)
    {
        if (is_array($introductions)) {
            $useMinMax = false;
            if (isset($introductions['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::INTRODUCTIONS, $introductions['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($introductions['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::INTRODUCTIONS, $introductions['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::INTRODUCTIONS, $introductions, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByAbundance($abundance = null, $comparison = null)
    {
        if (is_array($abundance)) {
            $useMinMax = false;
            if (isset($abundance['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ABUNDANCE, $abundance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abundance['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ABUNDANCE, $abundance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::ABUNDANCE, $abundance, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByVision($vision = null, $comparison = null)
    {
        if (is_array($vision)) {
            $useMinMax = false;
            if (isset($vision['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::VISION, $vision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vision['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::VISION, $vision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::VISION, $vision, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByGenetics($genetics = null, $comparison = null)
    {
        if (is_array($genetics)) {
            $useMinMax = false;
            if (isset($genetics['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::GENETICS, $genetics['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genetics['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::GENETICS, $genetics['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::GENETICS, $genetics, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByAquaculture($aquaculture = null, $comparison = null)
    {
        if (is_array($aquaculture)) {
            $useMinMax = false;
            if (isset($aquaculture['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::AQUACULTURE, $aquaculture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aquaculture['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::AQUACULTURE, $aquaculture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::AQUACULTURE, $aquaculture, $comparison);
    }

    /**
     * Filter the query on the CountryComp column
     *
     * Example usage:
     * <code>
     * $query->filterByCountrycomp(1234); // WHERE CountryComp = 1234
     * $query->filterByCountrycomp(array(12, 34)); // WHERE CountryComp IN (12, 34)
     * $query->filterByCountrycomp(array('min' => 12)); // WHERE CountryComp >= 12
     * $query->filterByCountrycomp(array('max' => 12)); // WHERE CountryComp <= 12
     * </code>
     *
     * @param     mixed $countrycomp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByCountrycomp($countrycomp = null, $comparison = null)
    {
        if (is_array($countrycomp)) {
            $useMinMax = false;
            if (isset($countrycomp['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::COUNTRYCOMP, $countrycomp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($countrycomp['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::COUNTRYCOMP, $countrycomp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::COUNTRYCOMP, $countrycomp, $comparison);
    }

    /**
     * Filter the query on the Allele column
     *
     * Example usage:
     * <code>
     * $query->filterByAllele(1234); // WHERE Allele = 1234
     * $query->filterByAllele(array(12, 34)); // WHERE Allele IN (12, 34)
     * $query->filterByAllele(array('min' => 12)); // WHERE Allele >= 12
     * $query->filterByAllele(array('max' => 12)); // WHERE Allele <= 12
     * </code>
     *
     * @param     mixed $allele The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByAllele($allele = null, $comparison = null)
    {
        if (is_array($allele)) {
            $useMinMax = false;
            if (isset($allele['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ALLELE, $allele['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($allele['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ALLELE, $allele['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::ALLELE, $allele, $comparison);
    }

    /**
     * Filter the query on the GeneticStudies column
     *
     * Example usage:
     * <code>
     * $query->filterByGeneticstudies(1234); // WHERE GeneticStudies = 1234
     * $query->filterByGeneticstudies(array(12, 34)); // WHERE GeneticStudies IN (12, 34)
     * $query->filterByGeneticstudies(array('min' => 12)); // WHERE GeneticStudies >= 12
     * $query->filterByGeneticstudies(array('max' => 12)); // WHERE GeneticStudies <= 12
     * </code>
     *
     * @param     mixed $geneticstudies The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByGeneticstudies($geneticstudies = null, $comparison = null)
    {
        if (is_array($geneticstudies)) {
            $useMinMax = false;
            if (isset($geneticstudies['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::GENETICSTUDIES, $geneticstudies['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($geneticstudies['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::GENETICSTUDIES, $geneticstudies['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::GENETICSTUDIES, $geneticstudies, $comparison);
    }

    /**
     * Filter the query on the Ration column
     *
     * Example usage:
     * <code>
     * $query->filterByRation(1234); // WHERE Ration = 1234
     * $query->filterByRation(array(12, 34)); // WHERE Ration IN (12, 34)
     * $query->filterByRation(array('min' => 12)); // WHERE Ration >= 12
     * $query->filterByRation(array('max' => 12)); // WHERE Ration <= 12
     * </code>
     *
     * @param     mixed $ration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByRation($ration = null, $comparison = null)
    {
        if (is_array($ration)) {
            $useMinMax = false;
            if (isset($ration['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::RATION, $ration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ration['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::RATION, $ration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::RATION, $ration, $comparison);
    }

    /**
     * Filter the query on the Foods column
     *
     * Example usage:
     * <code>
     * $query->filterByFoods(1234); // WHERE Foods = 1234
     * $query->filterByFoods(array(12, 34)); // WHERE Foods IN (12, 34)
     * $query->filterByFoods(array('min' => 12)); // WHERE Foods >= 12
     * $query->filterByFoods(array('max' => 12)); // WHERE Foods <= 12
     * </code>
     *
     * @param     mixed $foods The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByFoods($foods = null, $comparison = null)
    {
        if (is_array($foods)) {
            $useMinMax = false;
            if (isset($foods['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::FOODS, $foods['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foods['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::FOODS, $foods['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::FOODS, $foods, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByEcotoxicology($ecotoxicology = null, $comparison = null)
    {
        if (is_array($ecotoxicology)) {
            $useMinMax = false;
            if (isset($ecotoxicology['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ECOTOXICOLOGY, $ecotoxicology['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ecotoxicology['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ECOTOXICOLOGY, $ecotoxicology['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::ECOTOXICOLOGY, $ecotoxicology, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByCatches($catches = null, $comparison = null)
    {
        if (is_array($catches)) {
            $useMinMax = false;
            if (isset($catches['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::CATCHES, $catches['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($catches['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::CATCHES, $catches['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::CATCHES, $catches, $comparison);
    }

    /**
     * Filter the query on the FAOAqua column
     *
     * Example usage:
     * <code>
     * $query->filterByFaoaqua(1234); // WHERE FAOAqua = 1234
     * $query->filterByFaoaqua(array(12, 34)); // WHERE FAOAqua IN (12, 34)
     * $query->filterByFaoaqua(array('min' => 12)); // WHERE FAOAqua >= 12
     * $query->filterByFaoaqua(array('max' => 12)); // WHERE FAOAqua <= 12
     * </code>
     *
     * @param     mixed $faoaqua The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByFaoaqua($faoaqua = null, $comparison = null)
    {
        if (is_array($faoaqua)) {
            $useMinMax = false;
            if (isset($faoaqua['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::FAOAQUA, $faoaqua['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($faoaqua['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::FAOAQUA, $faoaqua['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::FAOAQUA, $faoaqua, $comparison);
    }

    /**
     * Filter the query on the LengthRelations column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthrelations(1234); // WHERE LengthRelations = 1234
     * $query->filterByLengthrelations(array(12, 34)); // WHERE LengthRelations IN (12, 34)
     * $query->filterByLengthrelations(array('min' => 12)); // WHERE LengthRelations >= 12
     * $query->filterByLengthrelations(array('max' => 12)); // WHERE LengthRelations <= 12
     * </code>
     *
     * @param     mixed $lengthrelations The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByLengthrelations($lengthrelations = null, $comparison = null)
    {
        if (is_array($lengthrelations)) {
            $useMinMax = false;
            if (isset($lengthrelations['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::LENGTHRELATIONS, $lengthrelations['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthrelations['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::LENGTHRELATIONS, $lengthrelations['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::LENGTHRELATIONS, $lengthrelations, $comparison);
    }

    /**
     * Filter the query on the LengthFrequency column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthfrequency(1234); // WHERE LengthFrequency = 1234
     * $query->filterByLengthfrequency(array(12, 34)); // WHERE LengthFrequency IN (12, 34)
     * $query->filterByLengthfrequency(array('min' => 12)); // WHERE LengthFrequency >= 12
     * $query->filterByLengthfrequency(array('max' => 12)); // WHERE LengthFrequency <= 12
     * </code>
     *
     * @param     mixed $lengthfrequency The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByLengthfrequency($lengthfrequency = null, $comparison = null)
    {
        if (is_array($lengthfrequency)) {
            $useMinMax = false;
            if (isset($lengthfrequency['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::LENGTHFREQUENCY, $lengthfrequency['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthfrequency['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::LENGTHFREQUENCY, $lengthfrequency['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::LENGTHFREQUENCY, $lengthfrequency, $comparison);
    }

    /**
     * Filter the query on the Sounds column
     *
     * Example usage:
     * <code>
     * $query->filterBySounds(1234); // WHERE Sounds = 1234
     * $query->filterBySounds(array(12, 34)); // WHERE Sounds IN (12, 34)
     * $query->filterBySounds(array('min' => 12)); // WHERE Sounds >= 12
     * $query->filterBySounds(array('max' => 12)); // WHERE Sounds <= 12
     * </code>
     *
     * @param     mixed $sounds The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterBySounds($sounds = null, $comparison = null)
    {
        if (is_array($sounds)) {
            $useMinMax = false;
            if (isset($sounds['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SOUNDS, $sounds['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sounds['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::SOUNDS, $sounds['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::SOUNDS, $sounds, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByBroodstock($broodstock = null, $comparison = null)
    {
        if (is_array($broodstock)) {
            $useMinMax = false;
            if (isset($broodstock['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::BROODSTOCK, $broodstock['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($broodstock['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::BROODSTOCK, $broodstock['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::BROODSTOCK, $broodstock, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByEggnursery($eggnursery = null, $comparison = null)
    {
        if (is_array($eggnursery)) {
            $useMinMax = false;
            if (isset($eggnursery['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::EGGNURSERY, $eggnursery['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggnursery['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::EGGNURSERY, $eggnursery['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::EGGNURSERY, $eggnursery, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByFrynursery($frynursery = null, $comparison = null)
    {
        if (is_array($frynursery)) {
            $useMinMax = false;
            if (isset($frynursery['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::FRYNURSERY, $frynursery['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($frynursery['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::FRYNURSERY, $frynursery['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::FRYNURSERY, $frynursery, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByLarvalnursery($larvalnursery = null, $comparison = null)
    {
        if (is_array($larvalnursery)) {
            $useMinMax = false;
            if (isset($larvalnursery['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::LARVALNURSERY, $larvalnursery['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvalnursery['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::LARVALNURSERY, $larvalnursery['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::LARVALNURSERY, $larvalnursery, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::ENTERED, $entered, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::MODIFIED, $modified, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::EXPERT, $expert, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(StocksB4IgfanameCopyPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksB4IgfanameCopyPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   StocksB4IgfanameCopy $stocksB4IgfanameCopy Object to remove from the list of results
     *
     * @return StocksB4IgfanameCopyQuery The current query, for fluid interface
     */
    public function prune($stocksB4IgfanameCopy = null)
    {
        if ($stocksB4IgfanameCopy) {
            $this->addCond('pruneCond0', $this->getAliasedColName(StocksB4IgfanameCopyPeer::SPECCODE), $stocksB4IgfanameCopy->getSpeccode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(StocksB4IgfanameCopyPeer::LEVEL), $stocksB4IgfanameCopy->getLevel(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(StocksB4IgfanameCopyPeer::LOCALUNIQUE), $stocksB4IgfanameCopy->getLocalunique(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
