<?php


/**
 * Base class that represents a query for the 'stocks' table.
 *
 *
 *
 * @method StocksQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method StocksQuery orderByStockdefs($order = Criteria::ASC) Order by the StockDefs column
 * @method StocksQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method StocksQuery orderByLevel($order = Criteria::ASC) Order by the Level column
 * @method StocksQuery orderByLocalunique($order = Criteria::ASC) Order by the LocalUnique column
 * @method StocksQuery orderByIucnCode($order = Criteria::ASC) Order by the IUCN_Code column
 * @method StocksQuery orderByIucnAssessment($order = Criteria::ASC) Order by the IUCN_Assessment column
 * @method StocksQuery orderByProtected($order = Criteria::ASC) Order by the Protected column
 * @method StocksQuery orderByStocksrefno($order = Criteria::ASC) Order by the StocksRefNo column
 * @method StocksQuery orderByCitesCode($order = Criteria::ASC) Order by the CITES_Code column
 * @method StocksQuery orderByCitesDate($order = Criteria::ASC) Order by the CITES_Date column
 * @method StocksQuery orderByCitesRef($order = Criteria::ASC) Order by the CITES_Ref column
 * @method StocksQuery orderByCitesRemarks($order = Criteria::ASC) Order by the CITES_Remarks column
 * @method StocksQuery orderByNorthernmost($order = Criteria::ASC) Order by the Northernmost column
 * @method StocksQuery orderByNorthsouthn($order = Criteria::ASC) Order by the NorthSouthN column
 * @method StocksQuery orderBySouthermost($order = Criteria::ASC) Order by the Southermost column
 * @method StocksQuery orderByNorthsouths($order = Criteria::ASC) Order by the NorthSouthS column
 * @method StocksQuery orderByWesternmost($order = Criteria::ASC) Order by the Westernmost column
 * @method StocksQuery orderByWesteastw($order = Criteria::ASC) Order by the WestEastW column
 * @method StocksQuery orderByEasternmost($order = Criteria::ASC) Order by the Easternmost column
 * @method StocksQuery orderByWesteaste($order = Criteria::ASC) Order by the WestEastE column
 * @method StocksQuery orderByBoundingref($order = Criteria::ASC) Order by the BoundingRef column
 * @method StocksQuery orderByBoundingmethod($order = Criteria::ASC) Order by the BoundingMethod column
 * @method StocksQuery orderByTempmin($order = Criteria::ASC) Order by the TempMin column
 * @method StocksQuery orderByTempmax($order = Criteria::ASC) Order by the TempMax column
 * @method StocksQuery orderByTempref($order = Criteria::ASC) Order by the TempRef column
 * @method StocksQuery orderByEnvtemp($order = Criteria::ASC) Order by the EnvTemp column
 * @method StocksQuery orderByResilience($order = Criteria::ASC) Order by the Resilience column
 * @method StocksQuery orderByResilienceremark($order = Criteria::ASC) Order by the ResilienceRemark column
 * @method StocksQuery orderByPhmin($order = Criteria::ASC) Order by the pHMin column
 * @method StocksQuery orderByPhmax($order = Criteria::ASC) Order by the pHMax column
 * @method StocksQuery orderByPhref($order = Criteria::ASC) Order by the pHRef column
 * @method StocksQuery orderByDhmin($order = Criteria::ASC) Order by the dHMin column
 * @method StocksQuery orderByDhmax($order = Criteria::ASC) Order by the dHMax column
 * @method StocksQuery orderByDhref($order = Criteria::ASC) Order by the dHRef column
 * @method StocksQuery orderByGenbankid($order = Criteria::ASC) Order by the GenBankID column
 * @method StocksQuery orderByRfeid($order = Criteria::ASC) Order by the RfeID column
 * @method StocksQuery orderByFigisId($order = Criteria::ASC) Order by the FIGIS_ID column
 * @method StocksQuery orderByEcotoxid($order = Criteria::ASC) Order by the EcotoxID column
 * @method StocksQuery orderByScrfaData($order = Criteria::ASC) Order by the SCRFA_data column
 * @method StocksQuery orderByGmadId($order = Criteria::ASC) Order by the GMAD_ID column
 * @method StocksQuery orderBySaup($order = Criteria::ASC) Order by the SAUP column
 * @method StocksQuery orderBySaupId($order = Criteria::ASC) Order by the SAUP_ID column
 * @method StocksQuery orderBySaupGroup($order = Criteria::ASC) Order by the SAUP_Group column
 * @method StocksQuery orderByAusmuseum($order = Criteria::ASC) Order by the AusMuseum column
 * @method StocksQuery orderByFishtrace($order = Criteria::ASC) Order by the FishTrace column
 * @method StocksQuery orderByIucnId($order = Criteria::ASC) Order by the IUCN_ID column
 * @method StocksQuery orderByIucnGroup($order = Criteria::ASC) Order by the IUCN_Group column
 * @method StocksQuery orderByBoldId($order = Criteria::ASC) Order by the BOLD_ID column
 * @method StocksQuery orderByIgfaname($order = Criteria::ASC) Order by the IGFAName column
 * @method StocksQuery orderByEssayid($order = Criteria::ASC) Order by the EssayID column
 * @method StocksQuery orderByIcesstockid($order = Criteria::ASC) Order by the ICESStockID column
 * @method StocksQuery orderByOsteobaseid($order = Criteria::ASC) Order by the OsteoBaseID column
 * @method StocksQuery orderByDorisId($order = Criteria::ASC) Order by the DORIS_ID column
 * @method StocksQuery orderByAquamaps($order = Criteria::ASC) Order by the Aquamaps column
 * @method StocksQuery orderByMorphology($order = Criteria::ASC) Order by the Morphology column
 * @method StocksQuery orderByOccurrence($order = Criteria::ASC) Order by the Occurrence column
 * @method StocksQuery orderByStrains($order = Criteria::ASC) Order by the Strains column
 * @method StocksQuery orderByEcology($order = Criteria::ASC) Order by the Ecology column
 * @method StocksQuery orderByDiseases($order = Criteria::ASC) Order by the Diseases column
 * @method StocksQuery orderByAbnorm($order = Criteria::ASC) Order by the Abnorm column
 * @method StocksQuery orderByMetabolism($order = Criteria::ASC) Order by the Metabolism column
 * @method StocksQuery orderByPredators($order = Criteria::ASC) Order by the Predators column
 * @method StocksQuery orderBySpawning($order = Criteria::ASC) Order by the Spawning column
 * @method StocksQuery orderByFecundity($order = Criteria::ASC) Order by the Fecundity column
 * @method StocksQuery orderBySpeed($order = Criteria::ASC) Order by the Speed column
 * @method StocksQuery orderByDiet($order = Criteria::ASC) Order by the Diet column
 * @method StocksQuery orderByEggs($order = Criteria::ASC) Order by the Eggs column
 * @method StocksQuery orderByEggdevelop($order = Criteria::ASC) Order by the EggDevelop column
 * @method StocksQuery orderByFood($order = Criteria::ASC) Order by the Food column
 * @method StocksQuery orderByLarvae($order = Criteria::ASC) Order by the Larvae column
 * @method StocksQuery orderByLarvdyn($order = Criteria::ASC) Order by the LarvDyn column
 * @method StocksQuery orderByLarvspeed($order = Criteria::ASC) Order by the LarvSpeed column
 * @method StocksQuery orderByPopdyn($order = Criteria::ASC) Order by the PopDyn column
 * @method StocksQuery orderByLengthweight($order = Criteria::ASC) Order by the LengthWeight column
 * @method StocksQuery orderByGillarea($order = Criteria::ASC) Order by the Gillarea column
 * @method StocksQuery orderByMaturity($order = Criteria::ASC) Order by the Maturity column
 * @method StocksQuery orderByMatsizes($order = Criteria::ASC) Order by the MatSizes column
 * @method StocksQuery orderByProcessing($order = Criteria::ASC) Order by the Processing column
 * @method StocksQuery orderByReproduction($order = Criteria::ASC) Order by the Reproduction column
 * @method StocksQuery orderByIntroductions($order = Criteria::ASC) Order by the Introductions column
 * @method StocksQuery orderByAbundance($order = Criteria::ASC) Order by the Abundance column
 * @method StocksQuery orderByVision($order = Criteria::ASC) Order by the Vision column
 * @method StocksQuery orderByGenetics($order = Criteria::ASC) Order by the Genetics column
 * @method StocksQuery orderByAquaculture($order = Criteria::ASC) Order by the Aquaculture column
 * @method StocksQuery orderByCountrycomp($order = Criteria::ASC) Order by the CountryComp column
 * @method StocksQuery orderByAllele($order = Criteria::ASC) Order by the Allele column
 * @method StocksQuery orderByGeneticstudies($order = Criteria::ASC) Order by the GeneticStudies column
 * @method StocksQuery orderByRation($order = Criteria::ASC) Order by the Ration column
 * @method StocksQuery orderByFoods($order = Criteria::ASC) Order by the Foods column
 * @method StocksQuery orderByEcotoxicology($order = Criteria::ASC) Order by the Ecotoxicology column
 * @method StocksQuery orderByCatches($order = Criteria::ASC) Order by the Catches column
 * @method StocksQuery orderByFaoaqua($order = Criteria::ASC) Order by the FAOAqua column
 * @method StocksQuery orderByLengthrelations($order = Criteria::ASC) Order by the LengthRelations column
 * @method StocksQuery orderByLengthfrequency($order = Criteria::ASC) Order by the LengthFrequency column
 * @method StocksQuery orderBySounds($order = Criteria::ASC) Order by the Sounds column
 * @method StocksQuery orderByBroodstock($order = Criteria::ASC) Order by the Broodstock column
 * @method StocksQuery orderByEggnursery($order = Criteria::ASC) Order by the EggNursery column
 * @method StocksQuery orderByFrynursery($order = Criteria::ASC) Order by the FryNursery column
 * @method StocksQuery orderByLarvalnursery($order = Criteria::ASC) Order by the LarvalNursery column
 * @method StocksQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method StocksQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method StocksQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method StocksQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method StocksQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method StocksQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method StocksQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method StocksQuery groupByStockcode() Group by the StockCode column
 * @method StocksQuery groupByStockdefs() Group by the StockDefs column
 * @method StocksQuery groupBySpeccode() Group by the SpecCode column
 * @method StocksQuery groupByLevel() Group by the Level column
 * @method StocksQuery groupByLocalunique() Group by the LocalUnique column
 * @method StocksQuery groupByIucnCode() Group by the IUCN_Code column
 * @method StocksQuery groupByIucnAssessment() Group by the IUCN_Assessment column
 * @method StocksQuery groupByProtected() Group by the Protected column
 * @method StocksQuery groupByStocksrefno() Group by the StocksRefNo column
 * @method StocksQuery groupByCitesCode() Group by the CITES_Code column
 * @method StocksQuery groupByCitesDate() Group by the CITES_Date column
 * @method StocksQuery groupByCitesRef() Group by the CITES_Ref column
 * @method StocksQuery groupByCitesRemarks() Group by the CITES_Remarks column
 * @method StocksQuery groupByNorthernmost() Group by the Northernmost column
 * @method StocksQuery groupByNorthsouthn() Group by the NorthSouthN column
 * @method StocksQuery groupBySouthermost() Group by the Southermost column
 * @method StocksQuery groupByNorthsouths() Group by the NorthSouthS column
 * @method StocksQuery groupByWesternmost() Group by the Westernmost column
 * @method StocksQuery groupByWesteastw() Group by the WestEastW column
 * @method StocksQuery groupByEasternmost() Group by the Easternmost column
 * @method StocksQuery groupByWesteaste() Group by the WestEastE column
 * @method StocksQuery groupByBoundingref() Group by the BoundingRef column
 * @method StocksQuery groupByBoundingmethod() Group by the BoundingMethod column
 * @method StocksQuery groupByTempmin() Group by the TempMin column
 * @method StocksQuery groupByTempmax() Group by the TempMax column
 * @method StocksQuery groupByTempref() Group by the TempRef column
 * @method StocksQuery groupByEnvtemp() Group by the EnvTemp column
 * @method StocksQuery groupByResilience() Group by the Resilience column
 * @method StocksQuery groupByResilienceremark() Group by the ResilienceRemark column
 * @method StocksQuery groupByPhmin() Group by the pHMin column
 * @method StocksQuery groupByPhmax() Group by the pHMax column
 * @method StocksQuery groupByPhref() Group by the pHRef column
 * @method StocksQuery groupByDhmin() Group by the dHMin column
 * @method StocksQuery groupByDhmax() Group by the dHMax column
 * @method StocksQuery groupByDhref() Group by the dHRef column
 * @method StocksQuery groupByGenbankid() Group by the GenBankID column
 * @method StocksQuery groupByRfeid() Group by the RfeID column
 * @method StocksQuery groupByFigisId() Group by the FIGIS_ID column
 * @method StocksQuery groupByEcotoxid() Group by the EcotoxID column
 * @method StocksQuery groupByScrfaData() Group by the SCRFA_data column
 * @method StocksQuery groupByGmadId() Group by the GMAD_ID column
 * @method StocksQuery groupBySaup() Group by the SAUP column
 * @method StocksQuery groupBySaupId() Group by the SAUP_ID column
 * @method StocksQuery groupBySaupGroup() Group by the SAUP_Group column
 * @method StocksQuery groupByAusmuseum() Group by the AusMuseum column
 * @method StocksQuery groupByFishtrace() Group by the FishTrace column
 * @method StocksQuery groupByIucnId() Group by the IUCN_ID column
 * @method StocksQuery groupByIucnGroup() Group by the IUCN_Group column
 * @method StocksQuery groupByBoldId() Group by the BOLD_ID column
 * @method StocksQuery groupByIgfaname() Group by the IGFAName column
 * @method StocksQuery groupByEssayid() Group by the EssayID column
 * @method StocksQuery groupByIcesstockid() Group by the ICESStockID column
 * @method StocksQuery groupByOsteobaseid() Group by the OsteoBaseID column
 * @method StocksQuery groupByDorisId() Group by the DORIS_ID column
 * @method StocksQuery groupByAquamaps() Group by the Aquamaps column
 * @method StocksQuery groupByMorphology() Group by the Morphology column
 * @method StocksQuery groupByOccurrence() Group by the Occurrence column
 * @method StocksQuery groupByStrains() Group by the Strains column
 * @method StocksQuery groupByEcology() Group by the Ecology column
 * @method StocksQuery groupByDiseases() Group by the Diseases column
 * @method StocksQuery groupByAbnorm() Group by the Abnorm column
 * @method StocksQuery groupByMetabolism() Group by the Metabolism column
 * @method StocksQuery groupByPredators() Group by the Predators column
 * @method StocksQuery groupBySpawning() Group by the Spawning column
 * @method StocksQuery groupByFecundity() Group by the Fecundity column
 * @method StocksQuery groupBySpeed() Group by the Speed column
 * @method StocksQuery groupByDiet() Group by the Diet column
 * @method StocksQuery groupByEggs() Group by the Eggs column
 * @method StocksQuery groupByEggdevelop() Group by the EggDevelop column
 * @method StocksQuery groupByFood() Group by the Food column
 * @method StocksQuery groupByLarvae() Group by the Larvae column
 * @method StocksQuery groupByLarvdyn() Group by the LarvDyn column
 * @method StocksQuery groupByLarvspeed() Group by the LarvSpeed column
 * @method StocksQuery groupByPopdyn() Group by the PopDyn column
 * @method StocksQuery groupByLengthweight() Group by the LengthWeight column
 * @method StocksQuery groupByGillarea() Group by the Gillarea column
 * @method StocksQuery groupByMaturity() Group by the Maturity column
 * @method StocksQuery groupByMatsizes() Group by the MatSizes column
 * @method StocksQuery groupByProcessing() Group by the Processing column
 * @method StocksQuery groupByReproduction() Group by the Reproduction column
 * @method StocksQuery groupByIntroductions() Group by the Introductions column
 * @method StocksQuery groupByAbundance() Group by the Abundance column
 * @method StocksQuery groupByVision() Group by the Vision column
 * @method StocksQuery groupByGenetics() Group by the Genetics column
 * @method StocksQuery groupByAquaculture() Group by the Aquaculture column
 * @method StocksQuery groupByCountrycomp() Group by the CountryComp column
 * @method StocksQuery groupByAllele() Group by the Allele column
 * @method StocksQuery groupByGeneticstudies() Group by the GeneticStudies column
 * @method StocksQuery groupByRation() Group by the Ration column
 * @method StocksQuery groupByFoods() Group by the Foods column
 * @method StocksQuery groupByEcotoxicology() Group by the Ecotoxicology column
 * @method StocksQuery groupByCatches() Group by the Catches column
 * @method StocksQuery groupByFaoaqua() Group by the FAOAqua column
 * @method StocksQuery groupByLengthrelations() Group by the LengthRelations column
 * @method StocksQuery groupByLengthfrequency() Group by the LengthFrequency column
 * @method StocksQuery groupBySounds() Group by the Sounds column
 * @method StocksQuery groupByBroodstock() Group by the Broodstock column
 * @method StocksQuery groupByEggnursery() Group by the EggNursery column
 * @method StocksQuery groupByFrynursery() Group by the FryNursery column
 * @method StocksQuery groupByLarvalnursery() Group by the LarvalNursery column
 * @method StocksQuery groupByEntered() Group by the Entered column
 * @method StocksQuery groupByDateentered() Group by the DateEntered column
 * @method StocksQuery groupByModified() Group by the Modified column
 * @method StocksQuery groupByDatemodified() Group by the DateModified column
 * @method StocksQuery groupByExpert() Group by the Expert column
 * @method StocksQuery groupByDatechecked() Group by the DateChecked column
 * @method StocksQuery groupByTs() Group by the TS column
 *
 * @method StocksQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method StocksQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method StocksQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Stocks findOne(PropelPDO $con = null) Return the first Stocks matching the query
 * @method Stocks findOneOrCreate(PropelPDO $con = null) Return the first Stocks matching the query, or a new Stocks object populated from the query conditions when no match is found
 *
 * @method Stocks findOneByStockcode(int $StockCode) Return the first Stocks filtered by the StockCode column
 * @method Stocks findOneByStockdefs(string $StockDefs) Return the first Stocks filtered by the StockDefs column
 * @method Stocks findOneBySpeccode(int $SpecCode) Return the first Stocks filtered by the SpecCode column
 * @method Stocks findOneByLevel(string $Level) Return the first Stocks filtered by the Level column
 * @method Stocks findOneByLocalunique(string $LocalUnique) Return the first Stocks filtered by the LocalUnique column
 * @method Stocks findOneByIucnCode(string $IUCN_Code) Return the first Stocks filtered by the IUCN_Code column
 * @method Stocks findOneByIucnAssessment(string $IUCN_Assessment) Return the first Stocks filtered by the IUCN_Assessment column
 * @method Stocks findOneByProtected(int $Protected) Return the first Stocks filtered by the Protected column
 * @method Stocks findOneByStocksrefno(int $StocksRefNo) Return the first Stocks filtered by the StocksRefNo column
 * @method Stocks findOneByCitesCode(string $CITES_Code) Return the first Stocks filtered by the CITES_Code column
 * @method Stocks findOneByCitesDate(string $CITES_Date) Return the first Stocks filtered by the CITES_Date column
 * @method Stocks findOneByCitesRef(int $CITES_Ref) Return the first Stocks filtered by the CITES_Ref column
 * @method Stocks findOneByCitesRemarks(string $CITES_Remarks) Return the first Stocks filtered by the CITES_Remarks column
 * @method Stocks findOneByNorthernmost(int $Northernmost) Return the first Stocks filtered by the Northernmost column
 * @method Stocks findOneByNorthsouthn(string $NorthSouthN) Return the first Stocks filtered by the NorthSouthN column
 * @method Stocks findOneBySouthermost(int $Southermost) Return the first Stocks filtered by the Southermost column
 * @method Stocks findOneByNorthsouths(string $NorthSouthS) Return the first Stocks filtered by the NorthSouthS column
 * @method Stocks findOneByWesternmost(int $Westernmost) Return the first Stocks filtered by the Westernmost column
 * @method Stocks findOneByWesteastw(string $WestEastW) Return the first Stocks filtered by the WestEastW column
 * @method Stocks findOneByEasternmost(int $Easternmost) Return the first Stocks filtered by the Easternmost column
 * @method Stocks findOneByWesteaste(string $WestEastE) Return the first Stocks filtered by the WestEastE column
 * @method Stocks findOneByBoundingref(int $BoundingRef) Return the first Stocks filtered by the BoundingRef column
 * @method Stocks findOneByBoundingmethod(string $BoundingMethod) Return the first Stocks filtered by the BoundingMethod column
 * @method Stocks findOneByTempmin(double $TempMin) Return the first Stocks filtered by the TempMin column
 * @method Stocks findOneByTempmax(double $TempMax) Return the first Stocks filtered by the TempMax column
 * @method Stocks findOneByTempref(int $TempRef) Return the first Stocks filtered by the TempRef column
 * @method Stocks findOneByEnvtemp(string $EnvTemp) Return the first Stocks filtered by the EnvTemp column
 * @method Stocks findOneByResilience(string $Resilience) Return the first Stocks filtered by the Resilience column
 * @method Stocks findOneByResilienceremark(string $ResilienceRemark) Return the first Stocks filtered by the ResilienceRemark column
 * @method Stocks findOneByPhmin(double $pHMin) Return the first Stocks filtered by the pHMin column
 * @method Stocks findOneByPhmax(double $pHMax) Return the first Stocks filtered by the pHMax column
 * @method Stocks findOneByPhref(int $pHRef) Return the first Stocks filtered by the pHRef column
 * @method Stocks findOneByDhmin(double $dHMin) Return the first Stocks filtered by the dHMin column
 * @method Stocks findOneByDhmax(double $dHMax) Return the first Stocks filtered by the dHMax column
 * @method Stocks findOneByDhref(int $dHRef) Return the first Stocks filtered by the dHRef column
 * @method Stocks findOneByGenbankid(int $GenBankID) Return the first Stocks filtered by the GenBankID column
 * @method Stocks findOneByRfeid(string $RfeID) Return the first Stocks filtered by the RfeID column
 * @method Stocks findOneByFigisId(int $FIGIS_ID) Return the first Stocks filtered by the FIGIS_ID column
 * @method Stocks findOneByEcotoxid(int $EcotoxID) Return the first Stocks filtered by the EcotoxID column
 * @method Stocks findOneByScrfaData(int $SCRFA_data) Return the first Stocks filtered by the SCRFA_data column
 * @method Stocks findOneByGmadId(int $GMAD_ID) Return the first Stocks filtered by the GMAD_ID column
 * @method Stocks findOneBySaup(int $SAUP) Return the first Stocks filtered by the SAUP column
 * @method Stocks findOneBySaupId(int $SAUP_ID) Return the first Stocks filtered by the SAUP_ID column
 * @method Stocks findOneBySaupGroup(int $SAUP_Group) Return the first Stocks filtered by the SAUP_Group column
 * @method Stocks findOneByAusmuseum(int $AusMuseum) Return the first Stocks filtered by the AusMuseum column
 * @method Stocks findOneByFishtrace(int $FishTrace) Return the first Stocks filtered by the FishTrace column
 * @method Stocks findOneByIucnId(int $IUCN_ID) Return the first Stocks filtered by the IUCN_ID column
 * @method Stocks findOneByIucnGroup(string $IUCN_Group) Return the first Stocks filtered by the IUCN_Group column
 * @method Stocks findOneByBoldId(int $BOLD_ID) Return the first Stocks filtered by the BOLD_ID column
 * @method Stocks findOneByIgfaname(string $IGFAName) Return the first Stocks filtered by the IGFAName column
 * @method Stocks findOneByEssayid(int $EssayID) Return the first Stocks filtered by the EssayID column
 * @method Stocks findOneByIcesstockid(string $ICESStockID) Return the first Stocks filtered by the ICESStockID column
 * @method Stocks findOneByOsteobaseid(int $OsteoBaseID) Return the first Stocks filtered by the OsteoBaseID column
 * @method Stocks findOneByDorisId(int $DORIS_ID) Return the first Stocks filtered by the DORIS_ID column
 * @method Stocks findOneByAquamaps(int $Aquamaps) Return the first Stocks filtered by the Aquamaps column
 * @method Stocks findOneByMorphology(int $Morphology) Return the first Stocks filtered by the Morphology column
 * @method Stocks findOneByOccurrence(int $Occurrence) Return the first Stocks filtered by the Occurrence column
 * @method Stocks findOneByStrains(int $Strains) Return the first Stocks filtered by the Strains column
 * @method Stocks findOneByEcology(int $Ecology) Return the first Stocks filtered by the Ecology column
 * @method Stocks findOneByDiseases(int $Diseases) Return the first Stocks filtered by the Diseases column
 * @method Stocks findOneByAbnorm(int $Abnorm) Return the first Stocks filtered by the Abnorm column
 * @method Stocks findOneByMetabolism(int $Metabolism) Return the first Stocks filtered by the Metabolism column
 * @method Stocks findOneByPredators(int $Predators) Return the first Stocks filtered by the Predators column
 * @method Stocks findOneBySpawning(int $Spawning) Return the first Stocks filtered by the Spawning column
 * @method Stocks findOneByFecundity(int $Fecundity) Return the first Stocks filtered by the Fecundity column
 * @method Stocks findOneBySpeed(int $Speed) Return the first Stocks filtered by the Speed column
 * @method Stocks findOneByDiet(int $Diet) Return the first Stocks filtered by the Diet column
 * @method Stocks findOneByEggs(int $Eggs) Return the first Stocks filtered by the Eggs column
 * @method Stocks findOneByEggdevelop(int $EggDevelop) Return the first Stocks filtered by the EggDevelop column
 * @method Stocks findOneByFood(int $Food) Return the first Stocks filtered by the Food column
 * @method Stocks findOneByLarvae(int $Larvae) Return the first Stocks filtered by the Larvae column
 * @method Stocks findOneByLarvdyn(int $LarvDyn) Return the first Stocks filtered by the LarvDyn column
 * @method Stocks findOneByLarvspeed(int $LarvSpeed) Return the first Stocks filtered by the LarvSpeed column
 * @method Stocks findOneByPopdyn(int $PopDyn) Return the first Stocks filtered by the PopDyn column
 * @method Stocks findOneByLengthweight(int $LengthWeight) Return the first Stocks filtered by the LengthWeight column
 * @method Stocks findOneByGillarea(int $Gillarea) Return the first Stocks filtered by the Gillarea column
 * @method Stocks findOneByMaturity(int $Maturity) Return the first Stocks filtered by the Maturity column
 * @method Stocks findOneByMatsizes(int $MatSizes) Return the first Stocks filtered by the MatSizes column
 * @method Stocks findOneByProcessing(int $Processing) Return the first Stocks filtered by the Processing column
 * @method Stocks findOneByReproduction(int $Reproduction) Return the first Stocks filtered by the Reproduction column
 * @method Stocks findOneByIntroductions(int $Introductions) Return the first Stocks filtered by the Introductions column
 * @method Stocks findOneByAbundance(int $Abundance) Return the first Stocks filtered by the Abundance column
 * @method Stocks findOneByVision(int $Vision) Return the first Stocks filtered by the Vision column
 * @method Stocks findOneByGenetics(int $Genetics) Return the first Stocks filtered by the Genetics column
 * @method Stocks findOneByAquaculture(int $Aquaculture) Return the first Stocks filtered by the Aquaculture column
 * @method Stocks findOneByCountrycomp(int $CountryComp) Return the first Stocks filtered by the CountryComp column
 * @method Stocks findOneByAllele(int $Allele) Return the first Stocks filtered by the Allele column
 * @method Stocks findOneByGeneticstudies(int $GeneticStudies) Return the first Stocks filtered by the GeneticStudies column
 * @method Stocks findOneByRation(int $Ration) Return the first Stocks filtered by the Ration column
 * @method Stocks findOneByFoods(int $Foods) Return the first Stocks filtered by the Foods column
 * @method Stocks findOneByEcotoxicology(int $Ecotoxicology) Return the first Stocks filtered by the Ecotoxicology column
 * @method Stocks findOneByCatches(int $Catches) Return the first Stocks filtered by the Catches column
 * @method Stocks findOneByFaoaqua(int $FAOAqua) Return the first Stocks filtered by the FAOAqua column
 * @method Stocks findOneByLengthrelations(int $LengthRelations) Return the first Stocks filtered by the LengthRelations column
 * @method Stocks findOneByLengthfrequency(int $LengthFrequency) Return the first Stocks filtered by the LengthFrequency column
 * @method Stocks findOneBySounds(int $Sounds) Return the first Stocks filtered by the Sounds column
 * @method Stocks findOneByBroodstock(int $Broodstock) Return the first Stocks filtered by the Broodstock column
 * @method Stocks findOneByEggnursery(int $EggNursery) Return the first Stocks filtered by the EggNursery column
 * @method Stocks findOneByFrynursery(int $FryNursery) Return the first Stocks filtered by the FryNursery column
 * @method Stocks findOneByLarvalnursery(int $LarvalNursery) Return the first Stocks filtered by the LarvalNursery column
 * @method Stocks findOneByEntered(int $Entered) Return the first Stocks filtered by the Entered column
 * @method Stocks findOneByDateentered(string $DateEntered) Return the first Stocks filtered by the DateEntered column
 * @method Stocks findOneByModified(int $Modified) Return the first Stocks filtered by the Modified column
 * @method Stocks findOneByDatemodified(string $DateModified) Return the first Stocks filtered by the DateModified column
 * @method Stocks findOneByExpert(int $Expert) Return the first Stocks filtered by the Expert column
 * @method Stocks findOneByDatechecked(string $DateChecked) Return the first Stocks filtered by the DateChecked column
 * @method Stocks findOneByTs(string $TS) Return the first Stocks filtered by the TS column
 *
 * @method array findByStockcode(int $StockCode) Return Stocks objects filtered by the StockCode column
 * @method array findByStockdefs(string $StockDefs) Return Stocks objects filtered by the StockDefs column
 * @method array findBySpeccode(int $SpecCode) Return Stocks objects filtered by the SpecCode column
 * @method array findByLevel(string $Level) Return Stocks objects filtered by the Level column
 * @method array findByLocalunique(string $LocalUnique) Return Stocks objects filtered by the LocalUnique column
 * @method array findByIucnCode(string $IUCN_Code) Return Stocks objects filtered by the IUCN_Code column
 * @method array findByIucnAssessment(string $IUCN_Assessment) Return Stocks objects filtered by the IUCN_Assessment column
 * @method array findByProtected(int $Protected) Return Stocks objects filtered by the Protected column
 * @method array findByStocksrefno(int $StocksRefNo) Return Stocks objects filtered by the StocksRefNo column
 * @method array findByCitesCode(string $CITES_Code) Return Stocks objects filtered by the CITES_Code column
 * @method array findByCitesDate(string $CITES_Date) Return Stocks objects filtered by the CITES_Date column
 * @method array findByCitesRef(int $CITES_Ref) Return Stocks objects filtered by the CITES_Ref column
 * @method array findByCitesRemarks(string $CITES_Remarks) Return Stocks objects filtered by the CITES_Remarks column
 * @method array findByNorthernmost(int $Northernmost) Return Stocks objects filtered by the Northernmost column
 * @method array findByNorthsouthn(string $NorthSouthN) Return Stocks objects filtered by the NorthSouthN column
 * @method array findBySouthermost(int $Southermost) Return Stocks objects filtered by the Southermost column
 * @method array findByNorthsouths(string $NorthSouthS) Return Stocks objects filtered by the NorthSouthS column
 * @method array findByWesternmost(int $Westernmost) Return Stocks objects filtered by the Westernmost column
 * @method array findByWesteastw(string $WestEastW) Return Stocks objects filtered by the WestEastW column
 * @method array findByEasternmost(int $Easternmost) Return Stocks objects filtered by the Easternmost column
 * @method array findByWesteaste(string $WestEastE) Return Stocks objects filtered by the WestEastE column
 * @method array findByBoundingref(int $BoundingRef) Return Stocks objects filtered by the BoundingRef column
 * @method array findByBoundingmethod(string $BoundingMethod) Return Stocks objects filtered by the BoundingMethod column
 * @method array findByTempmin(double $TempMin) Return Stocks objects filtered by the TempMin column
 * @method array findByTempmax(double $TempMax) Return Stocks objects filtered by the TempMax column
 * @method array findByTempref(int $TempRef) Return Stocks objects filtered by the TempRef column
 * @method array findByEnvtemp(string $EnvTemp) Return Stocks objects filtered by the EnvTemp column
 * @method array findByResilience(string $Resilience) Return Stocks objects filtered by the Resilience column
 * @method array findByResilienceremark(string $ResilienceRemark) Return Stocks objects filtered by the ResilienceRemark column
 * @method array findByPhmin(double $pHMin) Return Stocks objects filtered by the pHMin column
 * @method array findByPhmax(double $pHMax) Return Stocks objects filtered by the pHMax column
 * @method array findByPhref(int $pHRef) Return Stocks objects filtered by the pHRef column
 * @method array findByDhmin(double $dHMin) Return Stocks objects filtered by the dHMin column
 * @method array findByDhmax(double $dHMax) Return Stocks objects filtered by the dHMax column
 * @method array findByDhref(int $dHRef) Return Stocks objects filtered by the dHRef column
 * @method array findByGenbankid(int $GenBankID) Return Stocks objects filtered by the GenBankID column
 * @method array findByRfeid(string $RfeID) Return Stocks objects filtered by the RfeID column
 * @method array findByFigisId(int $FIGIS_ID) Return Stocks objects filtered by the FIGIS_ID column
 * @method array findByEcotoxid(int $EcotoxID) Return Stocks objects filtered by the EcotoxID column
 * @method array findByScrfaData(int $SCRFA_data) Return Stocks objects filtered by the SCRFA_data column
 * @method array findByGmadId(int $GMAD_ID) Return Stocks objects filtered by the GMAD_ID column
 * @method array findBySaup(int $SAUP) Return Stocks objects filtered by the SAUP column
 * @method array findBySaupId(int $SAUP_ID) Return Stocks objects filtered by the SAUP_ID column
 * @method array findBySaupGroup(int $SAUP_Group) Return Stocks objects filtered by the SAUP_Group column
 * @method array findByAusmuseum(int $AusMuseum) Return Stocks objects filtered by the AusMuseum column
 * @method array findByFishtrace(int $FishTrace) Return Stocks objects filtered by the FishTrace column
 * @method array findByIucnId(int $IUCN_ID) Return Stocks objects filtered by the IUCN_ID column
 * @method array findByIucnGroup(string $IUCN_Group) Return Stocks objects filtered by the IUCN_Group column
 * @method array findByBoldId(int $BOLD_ID) Return Stocks objects filtered by the BOLD_ID column
 * @method array findByIgfaname(string $IGFAName) Return Stocks objects filtered by the IGFAName column
 * @method array findByEssayid(int $EssayID) Return Stocks objects filtered by the EssayID column
 * @method array findByIcesstockid(string $ICESStockID) Return Stocks objects filtered by the ICESStockID column
 * @method array findByOsteobaseid(int $OsteoBaseID) Return Stocks objects filtered by the OsteoBaseID column
 * @method array findByDorisId(int $DORIS_ID) Return Stocks objects filtered by the DORIS_ID column
 * @method array findByAquamaps(int $Aquamaps) Return Stocks objects filtered by the Aquamaps column
 * @method array findByMorphology(int $Morphology) Return Stocks objects filtered by the Morphology column
 * @method array findByOccurrence(int $Occurrence) Return Stocks objects filtered by the Occurrence column
 * @method array findByStrains(int $Strains) Return Stocks objects filtered by the Strains column
 * @method array findByEcology(int $Ecology) Return Stocks objects filtered by the Ecology column
 * @method array findByDiseases(int $Diseases) Return Stocks objects filtered by the Diseases column
 * @method array findByAbnorm(int $Abnorm) Return Stocks objects filtered by the Abnorm column
 * @method array findByMetabolism(int $Metabolism) Return Stocks objects filtered by the Metabolism column
 * @method array findByPredators(int $Predators) Return Stocks objects filtered by the Predators column
 * @method array findBySpawning(int $Spawning) Return Stocks objects filtered by the Spawning column
 * @method array findByFecundity(int $Fecundity) Return Stocks objects filtered by the Fecundity column
 * @method array findBySpeed(int $Speed) Return Stocks objects filtered by the Speed column
 * @method array findByDiet(int $Diet) Return Stocks objects filtered by the Diet column
 * @method array findByEggs(int $Eggs) Return Stocks objects filtered by the Eggs column
 * @method array findByEggdevelop(int $EggDevelop) Return Stocks objects filtered by the EggDevelop column
 * @method array findByFood(int $Food) Return Stocks objects filtered by the Food column
 * @method array findByLarvae(int $Larvae) Return Stocks objects filtered by the Larvae column
 * @method array findByLarvdyn(int $LarvDyn) Return Stocks objects filtered by the LarvDyn column
 * @method array findByLarvspeed(int $LarvSpeed) Return Stocks objects filtered by the LarvSpeed column
 * @method array findByPopdyn(int $PopDyn) Return Stocks objects filtered by the PopDyn column
 * @method array findByLengthweight(int $LengthWeight) Return Stocks objects filtered by the LengthWeight column
 * @method array findByGillarea(int $Gillarea) Return Stocks objects filtered by the Gillarea column
 * @method array findByMaturity(int $Maturity) Return Stocks objects filtered by the Maturity column
 * @method array findByMatsizes(int $MatSizes) Return Stocks objects filtered by the MatSizes column
 * @method array findByProcessing(int $Processing) Return Stocks objects filtered by the Processing column
 * @method array findByReproduction(int $Reproduction) Return Stocks objects filtered by the Reproduction column
 * @method array findByIntroductions(int $Introductions) Return Stocks objects filtered by the Introductions column
 * @method array findByAbundance(int $Abundance) Return Stocks objects filtered by the Abundance column
 * @method array findByVision(int $Vision) Return Stocks objects filtered by the Vision column
 * @method array findByGenetics(int $Genetics) Return Stocks objects filtered by the Genetics column
 * @method array findByAquaculture(int $Aquaculture) Return Stocks objects filtered by the Aquaculture column
 * @method array findByCountrycomp(int $CountryComp) Return Stocks objects filtered by the CountryComp column
 * @method array findByAllele(int $Allele) Return Stocks objects filtered by the Allele column
 * @method array findByGeneticstudies(int $GeneticStudies) Return Stocks objects filtered by the GeneticStudies column
 * @method array findByRation(int $Ration) Return Stocks objects filtered by the Ration column
 * @method array findByFoods(int $Foods) Return Stocks objects filtered by the Foods column
 * @method array findByEcotoxicology(int $Ecotoxicology) Return Stocks objects filtered by the Ecotoxicology column
 * @method array findByCatches(int $Catches) Return Stocks objects filtered by the Catches column
 * @method array findByFaoaqua(int $FAOAqua) Return Stocks objects filtered by the FAOAqua column
 * @method array findByLengthrelations(int $LengthRelations) Return Stocks objects filtered by the LengthRelations column
 * @method array findByLengthfrequency(int $LengthFrequency) Return Stocks objects filtered by the LengthFrequency column
 * @method array findBySounds(int $Sounds) Return Stocks objects filtered by the Sounds column
 * @method array findByBroodstock(int $Broodstock) Return Stocks objects filtered by the Broodstock column
 * @method array findByEggnursery(int $EggNursery) Return Stocks objects filtered by the EggNursery column
 * @method array findByFrynursery(int $FryNursery) Return Stocks objects filtered by the FryNursery column
 * @method array findByLarvalnursery(int $LarvalNursery) Return Stocks objects filtered by the LarvalNursery column
 * @method array findByEntered(int $Entered) Return Stocks objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Stocks objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Stocks objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Stocks objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Stocks objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Stocks objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Stocks objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseStocksQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseStocksQuery object.
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
            $modelName = 'Stocks';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new StocksQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   StocksQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return StocksQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof StocksQuery) {
            return $criteria;
        }
        $query = new StocksQuery(null, null, $modelAlias);

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
     * @return   Stocks|Stocks[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = StocksPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(StocksPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Stocks A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `StockCode`, `StockDefs`, `SpecCode`, `Level`, `LocalUnique`, `IUCN_Code`, `IUCN_Assessment`, `Protected`, `StocksRefNo`, `CITES_Code`, `CITES_Date`, `CITES_Ref`, `CITES_Remarks`, `Northernmost`, `NorthSouthN`, `Southermost`, `NorthSouthS`, `Westernmost`, `WestEastW`, `Easternmost`, `WestEastE`, `BoundingRef`, `BoundingMethod`, `TempMin`, `TempMax`, `TempRef`, `EnvTemp`, `Resilience`, `ResilienceRemark`, `pHMin`, `pHMax`, `pHRef`, `dHMin`, `dHMax`, `dHRef`, `GenBankID`, `RfeID`, `FIGIS_ID`, `EcotoxID`, `SCRFA_data`, `GMAD_ID`, `SAUP`, `SAUP_ID`, `SAUP_Group`, `AusMuseum`, `FishTrace`, `IUCN_ID`, `IUCN_Group`, `BOLD_ID`, `IGFAName`, `EssayID`, `ICESStockID`, `OsteoBaseID`, `DORIS_ID`, `Aquamaps`, `Morphology`, `Occurrence`, `Strains`, `Ecology`, `Diseases`, `Abnorm`, `Metabolism`, `Predators`, `Spawning`, `Fecundity`, `Speed`, `Diet`, `Eggs`, `EggDevelop`, `Food`, `Larvae`, `LarvDyn`, `LarvSpeed`, `PopDyn`, `LengthWeight`, `Gillarea`, `Maturity`, `MatSizes`, `Processing`, `Reproduction`, `Introductions`, `Abundance`, `Vision`, `Genetics`, `Aquaculture`, `CountryComp`, `Allele`, `GeneticStudies`, `Ration`, `Foods`, `Ecotoxicology`, `Catches`, `FAOAqua`, `LengthRelations`, `LengthFrequency`, `Sounds`, `Broodstock`, `EggNursery`, `FryNursery`, `LarvalNursery`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `stocks` WHERE `SpecCode` = :p0 AND `Level` = :p1 AND `LocalUnique` = :p2';
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
            $obj = new Stocks();
            $obj->hydrate($row);
            StocksPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Stocks|Stocks[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Stocks[]|mixed the list of results, formatted by the current formatter
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(StocksPeer::SPECCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(StocksPeer::LEVEL, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(StocksPeer::LOCALUNIQUE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(StocksPeer::SPECCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(StocksPeer::LEVEL, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(StocksPeer::LOCALUNIQUE, $key[2], Criteria::EQUAL);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(StocksPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(StocksPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::STOCKDEFS, $stockdefs, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(StocksPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(StocksPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::SPECCODE, $speccode, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::LEVEL, $level, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::LOCALUNIQUE, $localunique, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::IUCN_CODE, $iucnCode, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::IUCN_ASSESSMENT, $iucnAssessment, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByProtected($protected = null, $comparison = null)
    {
        if (is_array($protected)) {
            $useMinMax = false;
            if (isset($protected['min'])) {
                $this->addUsingAlias(StocksPeer::PROTECTEDSTOCK, $protected['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($protected['max'])) {
                $this->addUsingAlias(StocksPeer::PROTECTEDSTOCK, $protected['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::PROTECTEDSTOCK, $protected, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByStocksrefno($stocksrefno = null, $comparison = null)
    {
        if (is_array($stocksrefno)) {
            $useMinMax = false;
            if (isset($stocksrefno['min'])) {
                $this->addUsingAlias(StocksPeer::STOCKSREFNO, $stocksrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stocksrefno['max'])) {
                $this->addUsingAlias(StocksPeer::STOCKSREFNO, $stocksrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::STOCKSREFNO, $stocksrefno, $comparison);
    }

    /**
     * Filter the query on the CITES_Code column
     *
     * Example usage:
     * <code>
     * $query->filterByCitesCode('fooValue');   // WHERE CITES_Code = 'fooValue'
     * $query->filterByCitesCode('%fooValue%'); // WHERE CITES_Code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citesCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByCitesCode($citesCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citesCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $citesCode)) {
                $citesCode = str_replace('*', '%', $citesCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksPeer::CITES_CODE, $citesCode, $comparison);
    }

    /**
     * Filter the query on the CITES_Date column
     *
     * Example usage:
     * <code>
     * $query->filterByCitesDate('2011-03-14'); // WHERE CITES_Date = '2011-03-14'
     * $query->filterByCitesDate('now'); // WHERE CITES_Date = '2011-03-14'
     * $query->filterByCitesDate(array('max' => 'yesterday')); // WHERE CITES_Date < '2011-03-13'
     * </code>
     *
     * @param     mixed $citesDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByCitesDate($citesDate = null, $comparison = null)
    {
        if (is_array($citesDate)) {
            $useMinMax = false;
            if (isset($citesDate['min'])) {
                $this->addUsingAlias(StocksPeer::CITES_DATE, $citesDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($citesDate['max'])) {
                $this->addUsingAlias(StocksPeer::CITES_DATE, $citesDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::CITES_DATE, $citesDate, $comparison);
    }

    /**
     * Filter the query on the CITES_Ref column
     *
     * Example usage:
     * <code>
     * $query->filterByCitesRef(1234); // WHERE CITES_Ref = 1234
     * $query->filterByCitesRef(array(12, 34)); // WHERE CITES_Ref IN (12, 34)
     * $query->filterByCitesRef(array('min' => 12)); // WHERE CITES_Ref >= 12
     * $query->filterByCitesRef(array('max' => 12)); // WHERE CITES_Ref <= 12
     * </code>
     *
     * @param     mixed $citesRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByCitesRef($citesRef = null, $comparison = null)
    {
        if (is_array($citesRef)) {
            $useMinMax = false;
            if (isset($citesRef['min'])) {
                $this->addUsingAlias(StocksPeer::CITES_REF, $citesRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($citesRef['max'])) {
                $this->addUsingAlias(StocksPeer::CITES_REF, $citesRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::CITES_REF, $citesRef, $comparison);
    }

    /**
     * Filter the query on the CITES_Remarks column
     *
     * Example usage:
     * <code>
     * $query->filterByCitesRemarks('fooValue');   // WHERE CITES_Remarks = 'fooValue'
     * $query->filterByCitesRemarks('%fooValue%'); // WHERE CITES_Remarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $citesRemarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByCitesRemarks($citesRemarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($citesRemarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $citesRemarks)) {
                $citesRemarks = str_replace('*', '%', $citesRemarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksPeer::CITES_REMARKS, $citesRemarks, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByNorthernmost($northernmost = null, $comparison = null)
    {
        if (is_array($northernmost)) {
            $useMinMax = false;
            if (isset($northernmost['min'])) {
                $this->addUsingAlias(StocksPeer::NORTHERNMOST, $northernmost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($northernmost['max'])) {
                $this->addUsingAlias(StocksPeer::NORTHERNMOST, $northernmost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::NORTHERNMOST, $northernmost, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::NORTHSOUTHN, $northsouthn, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterBySouthermost($southermost = null, $comparison = null)
    {
        if (is_array($southermost)) {
            $useMinMax = false;
            if (isset($southermost['min'])) {
                $this->addUsingAlias(StocksPeer::SOUTHERMOST, $southermost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($southermost['max'])) {
                $this->addUsingAlias(StocksPeer::SOUTHERMOST, $southermost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::SOUTHERMOST, $southermost, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::NORTHSOUTHS, $northsouths, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByWesternmost($westernmost = null, $comparison = null)
    {
        if (is_array($westernmost)) {
            $useMinMax = false;
            if (isset($westernmost['min'])) {
                $this->addUsingAlias(StocksPeer::WESTERNMOST, $westernmost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($westernmost['max'])) {
                $this->addUsingAlias(StocksPeer::WESTERNMOST, $westernmost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::WESTERNMOST, $westernmost, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::WESTEASTW, $westeastw, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByEasternmost($easternmost = null, $comparison = null)
    {
        if (is_array($easternmost)) {
            $useMinMax = false;
            if (isset($easternmost['min'])) {
                $this->addUsingAlias(StocksPeer::EASTERNMOST, $easternmost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($easternmost['max'])) {
                $this->addUsingAlias(StocksPeer::EASTERNMOST, $easternmost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::EASTERNMOST, $easternmost, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::WESTEASTE, $westeaste, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByBoundingref($boundingref = null, $comparison = null)
    {
        if (is_array($boundingref)) {
            $useMinMax = false;
            if (isset($boundingref['min'])) {
                $this->addUsingAlias(StocksPeer::BOUNDINGREF, $boundingref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boundingref['max'])) {
                $this->addUsingAlias(StocksPeer::BOUNDINGREF, $boundingref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::BOUNDINGREF, $boundingref, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::BOUNDINGMETHOD, $boundingmethod, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByTempmin($tempmin = null, $comparison = null)
    {
        if (is_array($tempmin)) {
            $useMinMax = false;
            if (isset($tempmin['min'])) {
                $this->addUsingAlias(StocksPeer::TEMPMIN, $tempmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmin['max'])) {
                $this->addUsingAlias(StocksPeer::TEMPMIN, $tempmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::TEMPMIN, $tempmin, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByTempmax($tempmax = null, $comparison = null)
    {
        if (is_array($tempmax)) {
            $useMinMax = false;
            if (isset($tempmax['min'])) {
                $this->addUsingAlias(StocksPeer::TEMPMAX, $tempmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmax['max'])) {
                $this->addUsingAlias(StocksPeer::TEMPMAX, $tempmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::TEMPMAX, $tempmax, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByTempref($tempref = null, $comparison = null)
    {
        if (is_array($tempref)) {
            $useMinMax = false;
            if (isset($tempref['min'])) {
                $this->addUsingAlias(StocksPeer::TEMPREF, $tempref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempref['max'])) {
                $this->addUsingAlias(StocksPeer::TEMPREF, $tempref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::TEMPREF, $tempref, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::ENVTEMP, $envtemp, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::RESILIENCE, $resilience, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::RESILIENCEREMARK, $resilienceremark, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByPhmin($phmin = null, $comparison = null)
    {
        if (is_array($phmin)) {
            $useMinMax = false;
            if (isset($phmin['min'])) {
                $this->addUsingAlias(StocksPeer::PHMIN, $phmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmin['max'])) {
                $this->addUsingAlias(StocksPeer::PHMIN, $phmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::PHMIN, $phmin, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByPhmax($phmax = null, $comparison = null)
    {
        if (is_array($phmax)) {
            $useMinMax = false;
            if (isset($phmax['min'])) {
                $this->addUsingAlias(StocksPeer::PHMAX, $phmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmax['max'])) {
                $this->addUsingAlias(StocksPeer::PHMAX, $phmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::PHMAX, $phmax, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByPhref($phref = null, $comparison = null)
    {
        if (is_array($phref)) {
            $useMinMax = false;
            if (isset($phref['min'])) {
                $this->addUsingAlias(StocksPeer::PHREF, $phref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phref['max'])) {
                $this->addUsingAlias(StocksPeer::PHREF, $phref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::PHREF, $phref, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByDhmin($dhmin = null, $comparison = null)
    {
        if (is_array($dhmin)) {
            $useMinMax = false;
            if (isset($dhmin['min'])) {
                $this->addUsingAlias(StocksPeer::DHMIN, $dhmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dhmin['max'])) {
                $this->addUsingAlias(StocksPeer::DHMIN, $dhmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::DHMIN, $dhmin, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByDhmax($dhmax = null, $comparison = null)
    {
        if (is_array($dhmax)) {
            $useMinMax = false;
            if (isset($dhmax['min'])) {
                $this->addUsingAlias(StocksPeer::DHMAX, $dhmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dhmax['max'])) {
                $this->addUsingAlias(StocksPeer::DHMAX, $dhmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::DHMAX, $dhmax, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByDhref($dhref = null, $comparison = null)
    {
        if (is_array($dhref)) {
            $useMinMax = false;
            if (isset($dhref['min'])) {
                $this->addUsingAlias(StocksPeer::DHREF, $dhref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dhref['max'])) {
                $this->addUsingAlias(StocksPeer::DHREF, $dhref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::DHREF, $dhref, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByGenbankid($genbankid = null, $comparison = null)
    {
        if (is_array($genbankid)) {
            $useMinMax = false;
            if (isset($genbankid['min'])) {
                $this->addUsingAlias(StocksPeer::GENBANKID, $genbankid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genbankid['max'])) {
                $this->addUsingAlias(StocksPeer::GENBANKID, $genbankid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::GENBANKID, $genbankid, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::RFEID, $rfeid, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByFigisId($figisId = null, $comparison = null)
    {
        if (is_array($figisId)) {
            $useMinMax = false;
            if (isset($figisId['min'])) {
                $this->addUsingAlias(StocksPeer::FIGIS_ID, $figisId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($figisId['max'])) {
                $this->addUsingAlias(StocksPeer::FIGIS_ID, $figisId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::FIGIS_ID, $figisId, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByEcotoxid($ecotoxid = null, $comparison = null)
    {
        if (is_array($ecotoxid)) {
            $useMinMax = false;
            if (isset($ecotoxid['min'])) {
                $this->addUsingAlias(StocksPeer::ECOTOXID, $ecotoxid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ecotoxid['max'])) {
                $this->addUsingAlias(StocksPeer::ECOTOXID, $ecotoxid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::ECOTOXID, $ecotoxid, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByScrfaData($scrfaData = null, $comparison = null)
    {
        if (is_array($scrfaData)) {
            $useMinMax = false;
            if (isset($scrfaData['min'])) {
                $this->addUsingAlias(StocksPeer::SCRFA_DATA, $scrfaData['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($scrfaData['max'])) {
                $this->addUsingAlias(StocksPeer::SCRFA_DATA, $scrfaData['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::SCRFA_DATA, $scrfaData, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByGmadId($gmadId = null, $comparison = null)
    {
        if (is_array($gmadId)) {
            $useMinMax = false;
            if (isset($gmadId['min'])) {
                $this->addUsingAlias(StocksPeer::GMAD_ID, $gmadId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gmadId['max'])) {
                $this->addUsingAlias(StocksPeer::GMAD_ID, $gmadId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::GMAD_ID, $gmadId, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterBySaup($saup = null, $comparison = null)
    {
        if (is_array($saup)) {
            $useMinMax = false;
            if (isset($saup['min'])) {
                $this->addUsingAlias(StocksPeer::SAUP, $saup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saup['max'])) {
                $this->addUsingAlias(StocksPeer::SAUP, $saup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::SAUP, $saup, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterBySaupId($saupId = null, $comparison = null)
    {
        if (is_array($saupId)) {
            $useMinMax = false;
            if (isset($saupId['min'])) {
                $this->addUsingAlias(StocksPeer::SAUP_ID, $saupId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saupId['max'])) {
                $this->addUsingAlias(StocksPeer::SAUP_ID, $saupId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::SAUP_ID, $saupId, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterBySaupGroup($saupGroup = null, $comparison = null)
    {
        if (is_array($saupGroup)) {
            $useMinMax = false;
            if (isset($saupGroup['min'])) {
                $this->addUsingAlias(StocksPeer::SAUP_GROUP, $saupGroup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saupGroup['max'])) {
                $this->addUsingAlias(StocksPeer::SAUP_GROUP, $saupGroup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::SAUP_GROUP, $saupGroup, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByAusmuseum($ausmuseum = null, $comparison = null)
    {
        if (is_array($ausmuseum)) {
            $useMinMax = false;
            if (isset($ausmuseum['min'])) {
                $this->addUsingAlias(StocksPeer::AUSMUSEUM, $ausmuseum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ausmuseum['max'])) {
                $this->addUsingAlias(StocksPeer::AUSMUSEUM, $ausmuseum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::AUSMUSEUM, $ausmuseum, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByFishtrace($fishtrace = null, $comparison = null)
    {
        if (is_array($fishtrace)) {
            $useMinMax = false;
            if (isset($fishtrace['min'])) {
                $this->addUsingAlias(StocksPeer::FISHTRACE, $fishtrace['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fishtrace['max'])) {
                $this->addUsingAlias(StocksPeer::FISHTRACE, $fishtrace['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::FISHTRACE, $fishtrace, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByIucnId($iucnId = null, $comparison = null)
    {
        if (is_array($iucnId)) {
            $useMinMax = false;
            if (isset($iucnId['min'])) {
                $this->addUsingAlias(StocksPeer::IUCN_ID, $iucnId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iucnId['max'])) {
                $this->addUsingAlias(StocksPeer::IUCN_ID, $iucnId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::IUCN_ID, $iucnId, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::IUCN_GROUP, $iucnGroup, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByBoldId($boldId = null, $comparison = null)
    {
        if (is_array($boldId)) {
            $useMinMax = false;
            if (isset($boldId['min'])) {
                $this->addUsingAlias(StocksPeer::BOLD_ID, $boldId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($boldId['max'])) {
                $this->addUsingAlias(StocksPeer::BOLD_ID, $boldId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::BOLD_ID, $boldId, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StocksPeer::IGFANAME, $igfaname, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByEssayid($essayid = null, $comparison = null)
    {
        if (is_array($essayid)) {
            $useMinMax = false;
            if (isset($essayid['min'])) {
                $this->addUsingAlias(StocksPeer::ESSAYID, $essayid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($essayid['max'])) {
                $this->addUsingAlias(StocksPeer::ESSAYID, $essayid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::ESSAYID, $essayid, $comparison);
    }

    /**
     * Filter the query on the ICESStockID column
     *
     * Example usage:
     * <code>
     * $query->filterByIcesstockid('fooValue');   // WHERE ICESStockID = 'fooValue'
     * $query->filterByIcesstockid('%fooValue%'); // WHERE ICESStockID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $icesstockid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByIcesstockid($icesstockid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($icesstockid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $icesstockid)) {
                $icesstockid = str_replace('*', '%', $icesstockid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StocksPeer::ICESSTOCKID, $icesstockid, $comparison);
    }

    /**
     * Filter the query on the OsteoBaseID column
     *
     * Example usage:
     * <code>
     * $query->filterByOsteobaseid(1234); // WHERE OsteoBaseID = 1234
     * $query->filterByOsteobaseid(array(12, 34)); // WHERE OsteoBaseID IN (12, 34)
     * $query->filterByOsteobaseid(array('min' => 12)); // WHERE OsteoBaseID >= 12
     * $query->filterByOsteobaseid(array('max' => 12)); // WHERE OsteoBaseID <= 12
     * </code>
     *
     * @param     mixed $osteobaseid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByOsteobaseid($osteobaseid = null, $comparison = null)
    {
        if (is_array($osteobaseid)) {
            $useMinMax = false;
            if (isset($osteobaseid['min'])) {
                $this->addUsingAlias(StocksPeer::OSTEOBASEID, $osteobaseid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($osteobaseid['max'])) {
                $this->addUsingAlias(StocksPeer::OSTEOBASEID, $osteobaseid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::OSTEOBASEID, $osteobaseid, $comparison);
    }

    /**
     * Filter the query on the DORIS_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByDorisId(1234); // WHERE DORIS_ID = 1234
     * $query->filterByDorisId(array(12, 34)); // WHERE DORIS_ID IN (12, 34)
     * $query->filterByDorisId(array('min' => 12)); // WHERE DORIS_ID >= 12
     * $query->filterByDorisId(array('max' => 12)); // WHERE DORIS_ID <= 12
     * </code>
     *
     * @param     mixed $dorisId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByDorisId($dorisId = null, $comparison = null)
    {
        if (is_array($dorisId)) {
            $useMinMax = false;
            if (isset($dorisId['min'])) {
                $this->addUsingAlias(StocksPeer::DORIS_ID, $dorisId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dorisId['max'])) {
                $this->addUsingAlias(StocksPeer::DORIS_ID, $dorisId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::DORIS_ID, $dorisId, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByAquamaps($aquamaps = null, $comparison = null)
    {
        if (is_array($aquamaps)) {
            $useMinMax = false;
            if (isset($aquamaps['min'])) {
                $this->addUsingAlias(StocksPeer::AQUAMAPS, $aquamaps['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aquamaps['max'])) {
                $this->addUsingAlias(StocksPeer::AQUAMAPS, $aquamaps['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::AQUAMAPS, $aquamaps, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByMorphology($morphology = null, $comparison = null)
    {
        if (is_array($morphology)) {
            $useMinMax = false;
            if (isset($morphology['min'])) {
                $this->addUsingAlias(StocksPeer::MORPHOLOGY, $morphology['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($morphology['max'])) {
                $this->addUsingAlias(StocksPeer::MORPHOLOGY, $morphology['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::MORPHOLOGY, $morphology, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByOccurrence($occurrence = null, $comparison = null)
    {
        if (is_array($occurrence)) {
            $useMinMax = false;
            if (isset($occurrence['min'])) {
                $this->addUsingAlias(StocksPeer::OCCURRENCE, $occurrence['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($occurrence['max'])) {
                $this->addUsingAlias(StocksPeer::OCCURRENCE, $occurrence['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::OCCURRENCE, $occurrence, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByStrains($strains = null, $comparison = null)
    {
        if (is_array($strains)) {
            $useMinMax = false;
            if (isset($strains['min'])) {
                $this->addUsingAlias(StocksPeer::STRAINS, $strains['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($strains['max'])) {
                $this->addUsingAlias(StocksPeer::STRAINS, $strains['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::STRAINS, $strains, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByEcology($ecology = null, $comparison = null)
    {
        if (is_array($ecology)) {
            $useMinMax = false;
            if (isset($ecology['min'])) {
                $this->addUsingAlias(StocksPeer::ECOLOGY, $ecology['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ecology['max'])) {
                $this->addUsingAlias(StocksPeer::ECOLOGY, $ecology['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::ECOLOGY, $ecology, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByDiseases($diseases = null, $comparison = null)
    {
        if (is_array($diseases)) {
            $useMinMax = false;
            if (isset($diseases['min'])) {
                $this->addUsingAlias(StocksPeer::DISEASES, $diseases['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diseases['max'])) {
                $this->addUsingAlias(StocksPeer::DISEASES, $diseases['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::DISEASES, $diseases, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByAbnorm($abnorm = null, $comparison = null)
    {
        if (is_array($abnorm)) {
            $useMinMax = false;
            if (isset($abnorm['min'])) {
                $this->addUsingAlias(StocksPeer::ABNORM, $abnorm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abnorm['max'])) {
                $this->addUsingAlias(StocksPeer::ABNORM, $abnorm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::ABNORM, $abnorm, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByMetabolism($metabolism = null, $comparison = null)
    {
        if (is_array($metabolism)) {
            $useMinMax = false;
            if (isset($metabolism['min'])) {
                $this->addUsingAlias(StocksPeer::METABOLISM, $metabolism['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($metabolism['max'])) {
                $this->addUsingAlias(StocksPeer::METABOLISM, $metabolism['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::METABOLISM, $metabolism, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByPredators($predators = null, $comparison = null)
    {
        if (is_array($predators)) {
            $useMinMax = false;
            if (isset($predators['min'])) {
                $this->addUsingAlias(StocksPeer::PREDATORS, $predators['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($predators['max'])) {
                $this->addUsingAlias(StocksPeer::PREDATORS, $predators['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::PREDATORS, $predators, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterBySpawning($spawning = null, $comparison = null)
    {
        if (is_array($spawning)) {
            $useMinMax = false;
            if (isset($spawning['min'])) {
                $this->addUsingAlias(StocksPeer::SPAWNING, $spawning['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spawning['max'])) {
                $this->addUsingAlias(StocksPeer::SPAWNING, $spawning['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::SPAWNING, $spawning, $comparison);
    }

    /**
     * Filter the query on the Fecundity column
     *
     * Example usage:
     * <code>
     * $query->filterByFecundity(1234); // WHERE Fecundity = 1234
     * $query->filterByFecundity(array(12, 34)); // WHERE Fecundity IN (12, 34)
     * $query->filterByFecundity(array('min' => 12)); // WHERE Fecundity >= 12
     * $query->filterByFecundity(array('max' => 12)); // WHERE Fecundity <= 12
     * </code>
     *
     * @param     mixed $fecundity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByFecundity($fecundity = null, $comparison = null)
    {
        if (is_array($fecundity)) {
            $useMinMax = false;
            if (isset($fecundity['min'])) {
                $this->addUsingAlias(StocksPeer::FECUNDITY, $fecundity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecundity['max'])) {
                $this->addUsingAlias(StocksPeer::FECUNDITY, $fecundity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::FECUNDITY, $fecundity, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterBySpeed($speed = null, $comparison = null)
    {
        if (is_array($speed)) {
            $useMinMax = false;
            if (isset($speed['min'])) {
                $this->addUsingAlias(StocksPeer::SPEED, $speed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speed['max'])) {
                $this->addUsingAlias(StocksPeer::SPEED, $speed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::SPEED, $speed, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByDiet($diet = null, $comparison = null)
    {
        if (is_array($diet)) {
            $useMinMax = false;
            if (isset($diet['min'])) {
                $this->addUsingAlias(StocksPeer::DIET, $diet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diet['max'])) {
                $this->addUsingAlias(StocksPeer::DIET, $diet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::DIET, $diet, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByEggs($eggs = null, $comparison = null)
    {
        if (is_array($eggs)) {
            $useMinMax = false;
            if (isset($eggs['min'])) {
                $this->addUsingAlias(StocksPeer::EGGS, $eggs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggs['max'])) {
                $this->addUsingAlias(StocksPeer::EGGS, $eggs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::EGGS, $eggs, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByEggdevelop($eggdevelop = null, $comparison = null)
    {
        if (is_array($eggdevelop)) {
            $useMinMax = false;
            if (isset($eggdevelop['min'])) {
                $this->addUsingAlias(StocksPeer::EGGDEVELOP, $eggdevelop['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggdevelop['max'])) {
                $this->addUsingAlias(StocksPeer::EGGDEVELOP, $eggdevelop['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::EGGDEVELOP, $eggdevelop, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByFood($food = null, $comparison = null)
    {
        if (is_array($food)) {
            $useMinMax = false;
            if (isset($food['min'])) {
                $this->addUsingAlias(StocksPeer::FOOD, $food['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($food['max'])) {
                $this->addUsingAlias(StocksPeer::FOOD, $food['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::FOOD, $food, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByLarvae($larvae = null, $comparison = null)
    {
        if (is_array($larvae)) {
            $useMinMax = false;
            if (isset($larvae['min'])) {
                $this->addUsingAlias(StocksPeer::LARVAE, $larvae['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvae['max'])) {
                $this->addUsingAlias(StocksPeer::LARVAE, $larvae['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::LARVAE, $larvae, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByLarvdyn($larvdyn = null, $comparison = null)
    {
        if (is_array($larvdyn)) {
            $useMinMax = false;
            if (isset($larvdyn['min'])) {
                $this->addUsingAlias(StocksPeer::LARVDYN, $larvdyn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvdyn['max'])) {
                $this->addUsingAlias(StocksPeer::LARVDYN, $larvdyn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::LARVDYN, $larvdyn, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByLarvspeed($larvspeed = null, $comparison = null)
    {
        if (is_array($larvspeed)) {
            $useMinMax = false;
            if (isset($larvspeed['min'])) {
                $this->addUsingAlias(StocksPeer::LARVSPEED, $larvspeed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvspeed['max'])) {
                $this->addUsingAlias(StocksPeer::LARVSPEED, $larvspeed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::LARVSPEED, $larvspeed, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByPopdyn($popdyn = null, $comparison = null)
    {
        if (is_array($popdyn)) {
            $useMinMax = false;
            if (isset($popdyn['min'])) {
                $this->addUsingAlias(StocksPeer::POPDYN, $popdyn['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($popdyn['max'])) {
                $this->addUsingAlias(StocksPeer::POPDYN, $popdyn['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::POPDYN, $popdyn, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByLengthweight($lengthweight = null, $comparison = null)
    {
        if (is_array($lengthweight)) {
            $useMinMax = false;
            if (isset($lengthweight['min'])) {
                $this->addUsingAlias(StocksPeer::LENGTHWEIGHT, $lengthweight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthweight['max'])) {
                $this->addUsingAlias(StocksPeer::LENGTHWEIGHT, $lengthweight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::LENGTHWEIGHT, $lengthweight, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByGillarea($gillarea = null, $comparison = null)
    {
        if (is_array($gillarea)) {
            $useMinMax = false;
            if (isset($gillarea['min'])) {
                $this->addUsingAlias(StocksPeer::GILLAREA, $gillarea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gillarea['max'])) {
                $this->addUsingAlias(StocksPeer::GILLAREA, $gillarea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::GILLAREA, $gillarea, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByMaturity($maturity = null, $comparison = null)
    {
        if (is_array($maturity)) {
            $useMinMax = false;
            if (isset($maturity['min'])) {
                $this->addUsingAlias(StocksPeer::MATURITY, $maturity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maturity['max'])) {
                $this->addUsingAlias(StocksPeer::MATURITY, $maturity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::MATURITY, $maturity, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByMatsizes($matsizes = null, $comparison = null)
    {
        if (is_array($matsizes)) {
            $useMinMax = false;
            if (isset($matsizes['min'])) {
                $this->addUsingAlias(StocksPeer::MATSIZES, $matsizes['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($matsizes['max'])) {
                $this->addUsingAlias(StocksPeer::MATSIZES, $matsizes['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::MATSIZES, $matsizes, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByProcessing($processing = null, $comparison = null)
    {
        if (is_array($processing)) {
            $useMinMax = false;
            if (isset($processing['min'])) {
                $this->addUsingAlias(StocksPeer::PROCESSING, $processing['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($processing['max'])) {
                $this->addUsingAlias(StocksPeer::PROCESSING, $processing['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::PROCESSING, $processing, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByReproduction($reproduction = null, $comparison = null)
    {
        if (is_array($reproduction)) {
            $useMinMax = false;
            if (isset($reproduction['min'])) {
                $this->addUsingAlias(StocksPeer::REPRODUCTION, $reproduction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reproduction['max'])) {
                $this->addUsingAlias(StocksPeer::REPRODUCTION, $reproduction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::REPRODUCTION, $reproduction, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByIntroductions($introductions = null, $comparison = null)
    {
        if (is_array($introductions)) {
            $useMinMax = false;
            if (isset($introductions['min'])) {
                $this->addUsingAlias(StocksPeer::INTRODUCTIONS, $introductions['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($introductions['max'])) {
                $this->addUsingAlias(StocksPeer::INTRODUCTIONS, $introductions['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::INTRODUCTIONS, $introductions, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByAbundance($abundance = null, $comparison = null)
    {
        if (is_array($abundance)) {
            $useMinMax = false;
            if (isset($abundance['min'])) {
                $this->addUsingAlias(StocksPeer::ABUNDANCE, $abundance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abundance['max'])) {
                $this->addUsingAlias(StocksPeer::ABUNDANCE, $abundance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::ABUNDANCE, $abundance, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByVision($vision = null, $comparison = null)
    {
        if (is_array($vision)) {
            $useMinMax = false;
            if (isset($vision['min'])) {
                $this->addUsingAlias(StocksPeer::VISION, $vision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($vision['max'])) {
                $this->addUsingAlias(StocksPeer::VISION, $vision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::VISION, $vision, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByGenetics($genetics = null, $comparison = null)
    {
        if (is_array($genetics)) {
            $useMinMax = false;
            if (isset($genetics['min'])) {
                $this->addUsingAlias(StocksPeer::GENETICS, $genetics['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genetics['max'])) {
                $this->addUsingAlias(StocksPeer::GENETICS, $genetics['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::GENETICS, $genetics, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByAquaculture($aquaculture = null, $comparison = null)
    {
        if (is_array($aquaculture)) {
            $useMinMax = false;
            if (isset($aquaculture['min'])) {
                $this->addUsingAlias(StocksPeer::AQUACULTURE, $aquaculture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($aquaculture['max'])) {
                $this->addUsingAlias(StocksPeer::AQUACULTURE, $aquaculture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::AQUACULTURE, $aquaculture, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByCountrycomp($countrycomp = null, $comparison = null)
    {
        if (is_array($countrycomp)) {
            $useMinMax = false;
            if (isset($countrycomp['min'])) {
                $this->addUsingAlias(StocksPeer::COUNTRYCOMP, $countrycomp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($countrycomp['max'])) {
                $this->addUsingAlias(StocksPeer::COUNTRYCOMP, $countrycomp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::COUNTRYCOMP, $countrycomp, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByAllele($allele = null, $comparison = null)
    {
        if (is_array($allele)) {
            $useMinMax = false;
            if (isset($allele['min'])) {
                $this->addUsingAlias(StocksPeer::ALLELE, $allele['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($allele['max'])) {
                $this->addUsingAlias(StocksPeer::ALLELE, $allele['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::ALLELE, $allele, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByGeneticstudies($geneticstudies = null, $comparison = null)
    {
        if (is_array($geneticstudies)) {
            $useMinMax = false;
            if (isset($geneticstudies['min'])) {
                $this->addUsingAlias(StocksPeer::GENETICSTUDIES, $geneticstudies['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($geneticstudies['max'])) {
                $this->addUsingAlias(StocksPeer::GENETICSTUDIES, $geneticstudies['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::GENETICSTUDIES, $geneticstudies, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByRation($ration = null, $comparison = null)
    {
        if (is_array($ration)) {
            $useMinMax = false;
            if (isset($ration['min'])) {
                $this->addUsingAlias(StocksPeer::RATION, $ration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ration['max'])) {
                $this->addUsingAlias(StocksPeer::RATION, $ration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::RATION, $ration, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByFoods($foods = null, $comparison = null)
    {
        if (is_array($foods)) {
            $useMinMax = false;
            if (isset($foods['min'])) {
                $this->addUsingAlias(StocksPeer::FOODS, $foods['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foods['max'])) {
                $this->addUsingAlias(StocksPeer::FOODS, $foods['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::FOODS, $foods, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByEcotoxicology($ecotoxicology = null, $comparison = null)
    {
        if (is_array($ecotoxicology)) {
            $useMinMax = false;
            if (isset($ecotoxicology['min'])) {
                $this->addUsingAlias(StocksPeer::ECOTOXICOLOGY, $ecotoxicology['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ecotoxicology['max'])) {
                $this->addUsingAlias(StocksPeer::ECOTOXICOLOGY, $ecotoxicology['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::ECOTOXICOLOGY, $ecotoxicology, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByCatches($catches = null, $comparison = null)
    {
        if (is_array($catches)) {
            $useMinMax = false;
            if (isset($catches['min'])) {
                $this->addUsingAlias(StocksPeer::CATCHES, $catches['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($catches['max'])) {
                $this->addUsingAlias(StocksPeer::CATCHES, $catches['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::CATCHES, $catches, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByFaoaqua($faoaqua = null, $comparison = null)
    {
        if (is_array($faoaqua)) {
            $useMinMax = false;
            if (isset($faoaqua['min'])) {
                $this->addUsingAlias(StocksPeer::FAOAQUA, $faoaqua['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($faoaqua['max'])) {
                $this->addUsingAlias(StocksPeer::FAOAQUA, $faoaqua['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::FAOAQUA, $faoaqua, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByLengthrelations($lengthrelations = null, $comparison = null)
    {
        if (is_array($lengthrelations)) {
            $useMinMax = false;
            if (isset($lengthrelations['min'])) {
                $this->addUsingAlias(StocksPeer::LENGTHRELATIONS, $lengthrelations['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthrelations['max'])) {
                $this->addUsingAlias(StocksPeer::LENGTHRELATIONS, $lengthrelations['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::LENGTHRELATIONS, $lengthrelations, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByLengthfrequency($lengthfrequency = null, $comparison = null)
    {
        if (is_array($lengthfrequency)) {
            $useMinMax = false;
            if (isset($lengthfrequency['min'])) {
                $this->addUsingAlias(StocksPeer::LENGTHFREQUENCY, $lengthfrequency['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthfrequency['max'])) {
                $this->addUsingAlias(StocksPeer::LENGTHFREQUENCY, $lengthfrequency['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::LENGTHFREQUENCY, $lengthfrequency, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterBySounds($sounds = null, $comparison = null)
    {
        if (is_array($sounds)) {
            $useMinMax = false;
            if (isset($sounds['min'])) {
                $this->addUsingAlias(StocksPeer::SOUNDS, $sounds['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sounds['max'])) {
                $this->addUsingAlias(StocksPeer::SOUNDS, $sounds['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::SOUNDS, $sounds, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByBroodstock($broodstock = null, $comparison = null)
    {
        if (is_array($broodstock)) {
            $useMinMax = false;
            if (isset($broodstock['min'])) {
                $this->addUsingAlias(StocksPeer::BROODSTOCK, $broodstock['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($broodstock['max'])) {
                $this->addUsingAlias(StocksPeer::BROODSTOCK, $broodstock['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::BROODSTOCK, $broodstock, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByEggnursery($eggnursery = null, $comparison = null)
    {
        if (is_array($eggnursery)) {
            $useMinMax = false;
            if (isset($eggnursery['min'])) {
                $this->addUsingAlias(StocksPeer::EGGNURSERY, $eggnursery['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggnursery['max'])) {
                $this->addUsingAlias(StocksPeer::EGGNURSERY, $eggnursery['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::EGGNURSERY, $eggnursery, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByFrynursery($frynursery = null, $comparison = null)
    {
        if (is_array($frynursery)) {
            $useMinMax = false;
            if (isset($frynursery['min'])) {
                $this->addUsingAlias(StocksPeer::FRYNURSERY, $frynursery['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($frynursery['max'])) {
                $this->addUsingAlias(StocksPeer::FRYNURSERY, $frynursery['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::FRYNURSERY, $frynursery, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByLarvalnursery($larvalnursery = null, $comparison = null)
    {
        if (is_array($larvalnursery)) {
            $useMinMax = false;
            if (isset($larvalnursery['min'])) {
                $this->addUsingAlias(StocksPeer::LARVALNURSERY, $larvalnursery['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvalnursery['max'])) {
                $this->addUsingAlias(StocksPeer::LARVALNURSERY, $larvalnursery['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::LARVALNURSERY, $larvalnursery, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(StocksPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(StocksPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::ENTERED, $entered, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(StocksPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(StocksPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(StocksPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(StocksPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::MODIFIED, $modified, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(StocksPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(StocksPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(StocksPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(StocksPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::EXPERT, $expert, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(StocksPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(StocksPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return StocksQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(StocksPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(StocksPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StocksPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Stocks $stocks Object to remove from the list of results
     *
     * @return StocksQuery The current query, for fluid interface
     */
    public function prune($stocks = null)
    {
        if ($stocks) {
            $this->addCond('pruneCond0', $this->getAliasedColName(StocksPeer::SPECCODE), $stocks->getSpeccode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(StocksPeer::LEVEL), $stocks->getLevel(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(StocksPeer::LOCALUNIQUE), $stocks->getLocalunique(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
