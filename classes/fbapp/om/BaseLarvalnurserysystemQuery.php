<?php


/**
 * Base class that represents a query for the 'larvalnurserysystem' table.
 *
 *
 *
 * @method LarvalnurserysystemQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method LarvalnurserysystemQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method LarvalnurserysystemQuery orderByStockcode($order = Criteria::ASC) Order by the Stockcode column
 * @method LarvalnurserysystemQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method LarvalnurserysystemQuery orderByCommonname($order = Criteria::ASC) Order by the CommonName column
 * @method LarvalnurserysystemQuery orderByMainref($order = Criteria::ASC) Order by the MainRef column
 * @method LarvalnurserysystemQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method LarvalnurserysystemQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method LarvalnurserysystemQuery orderByDataref($order = Criteria::ASC) Order by the DataRef column
 * @method LarvalnurserysystemQuery orderByNumberoflarvaeorg($order = Criteria::ASC) Order by the NumberofLarvaeOrg column
 * @method LarvalnurserysystemQuery orderByNumberoflarvae($order = Criteria::ASC) Order by the NumberofLarvae column
 * @method LarvalnurserysystemQuery orderByNurserysystemi($order = Criteria::ASC) Order by the NurserySystemI column
 * @method LarvalnurserysystemQuery orderByNurserysystemii($order = Criteria::ASC) Order by the NurserySystemII column
 * @method LarvalnurserysystemQuery orderByCulturesystem($order = Criteria::ASC) Order by the CultureSystem column
 * @method LarvalnurserysystemQuery orderByMainwatersource($order = Criteria::ASC) Order by the MainWaterSource column
 * @method LarvalnurserysystemQuery orderBySupplwatersource($order = Criteria::ASC) Order by the SupplWaterSource column
 * @method LarvalnurserysystemQuery orderByTempmin($order = Criteria::ASC) Order by the TempMin column
 * @method LarvalnurserysystemQuery orderByTempmax($order = Criteria::ASC) Order by the TempMax column
 * @method LarvalnurserysystemQuery orderBySalinmin($order = Criteria::ASC) Order by the SalinMin column
 * @method LarvalnurserysystemQuery orderBySalinmax($order = Criteria::ASC) Order by the SalinMax column
 * @method LarvalnurserysystemQuery orderByPhmin($order = Criteria::ASC) Order by the pHMin column
 * @method LarvalnurserysystemQuery orderByPhmax($order = Criteria::ASC) Order by the pHMax column
 * @method LarvalnurserysystemQuery orderByOxygenmin($order = Criteria::ASC) Order by the OxygenMin column
 * @method LarvalnurserysystemQuery orderByOxygenmax($order = Criteria::ASC) Order by the OxygenMax column
 * @method LarvalnurserysystemQuery orderByIlluminationmin($order = Criteria::ASC) Order by the IlluminationMin column
 * @method LarvalnurserysystemQuery orderByIlluminationmax($order = Criteria::ASC) Order by the IlluminationMax column
 * @method LarvalnurserysystemQuery orderByStockingdensityorg($order = Criteria::ASC) Order by the StockingDensityOrg column
 * @method LarvalnurserysystemQuery orderByStockingdensity($order = Criteria::ASC) Order by the StockingDensity column
 * @method LarvalnurserysystemQuery orderByFirstfeeddaysmin($order = Criteria::ASC) Order by the FirstFeedDaysMin column
 * @method LarvalnurserysystemQuery orderByFirstfeeddaysmax($order = Criteria::ASC) Order by the FirstFeedDaysMax column
 * @method LarvalnurserysystemQuery orderByFirstfeeddaysdegmin($order = Criteria::ASC) Order by the FirstFeedDaysDegMin column
 * @method LarvalnurserysystemQuery orderByFirstfeeddaysdegmax($order = Criteria::ASC) Order by the FirstFeedDaysDegMax column
 * @method LarvalnurserysystemQuery orderByUnit($order = Criteria::ASC) Order by the Unit column
 * @method LarvalnurserysystemQuery orderByFoodi($order = Criteria::ASC) Order by the FoodI column
 * @method LarvalnurserysystemQuery orderByFoodii($order = Criteria::ASC) Order by the FoodII column
 * @method LarvalnurserysystemQuery orderByProductionperiode($order = Criteria::ASC) Order by the ProductionPeriode column
 * @method LarvalnurserysystemQuery orderByHatchingtofrydaysmin($order = Criteria::ASC) Order by the HatchingtoFryDaysMin column
 * @method LarvalnurserysystemQuery orderByHatchingtofrydaysmax($order = Criteria::ASC) Order by the HatchingtoFryDaysMax column
 * @method LarvalnurserysystemQuery orderByHatchingtofrydaysdegmin($order = Criteria::ASC) Order by the HatchingtoFryDaysDegMin column
 * @method LarvalnurserysystemQuery orderByHatchingtofrydaysdegmax($order = Criteria::ASC) Order by the HatchingtoFryDaysDegMax column
 * @method LarvalnurserysystemQuery orderByMortalityrate($order = Criteria::ASC) Order by the MortalityRate column
 * @method LarvalnurserysystemQuery orderByMortalityratemin($order = Criteria::ASC) Order by the MortalityRateMin column
 * @method LarvalnurserysystemQuery orderByMortalityratemax($order = Criteria::ASC) Order by the MortalityRateMax column
 * @method LarvalnurserysystemQuery orderByGrowthrate($order = Criteria::ASC) Order by the GrowthRate column
 * @method LarvalnurserysystemQuery orderByFcr($order = Criteria::ASC) Order by the FCR column
 * @method LarvalnurserysystemQuery orderByProductioncycle($order = Criteria::ASC) Order by the ProductionCycle column
 * @method LarvalnurserysystemQuery orderByUnitcycle($order = Criteria::ASC) Order by the UnitCycle column
 * @method LarvalnurserysystemQuery orderByProductionyear($order = Criteria::ASC) Order by the ProductionYear column
 * @method LarvalnurserysystemQuery orderByUnityear($order = Criteria::ASC) Order by the UnitYear column
 * @method LarvalnurserysystemQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method LarvalnurserysystemQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method LarvalnurserysystemQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method LarvalnurserysystemQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method LarvalnurserysystemQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method LarvalnurserysystemQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method LarvalnurserysystemQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method LarvalnurserysystemQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method LarvalnurserysystemQuery groupByAutoctr() Group by the autoctr column
 * @method LarvalnurserysystemQuery groupBySpeccode() Group by the Speccode column
 * @method LarvalnurserysystemQuery groupByStockcode() Group by the Stockcode column
 * @method LarvalnurserysystemQuery groupBySpecies() Group by the Species column
 * @method LarvalnurserysystemQuery groupByCommonname() Group by the CommonName column
 * @method LarvalnurserysystemQuery groupByMainref() Group by the MainRef column
 * @method LarvalnurserysystemQuery groupByCCode() Group by the C_Code column
 * @method LarvalnurserysystemQuery groupByLocality() Group by the Locality column
 * @method LarvalnurserysystemQuery groupByDataref() Group by the DataRef column
 * @method LarvalnurserysystemQuery groupByNumberoflarvaeorg() Group by the NumberofLarvaeOrg column
 * @method LarvalnurserysystemQuery groupByNumberoflarvae() Group by the NumberofLarvae column
 * @method LarvalnurserysystemQuery groupByNurserysystemi() Group by the NurserySystemI column
 * @method LarvalnurserysystemQuery groupByNurserysystemii() Group by the NurserySystemII column
 * @method LarvalnurserysystemQuery groupByCulturesystem() Group by the CultureSystem column
 * @method LarvalnurserysystemQuery groupByMainwatersource() Group by the MainWaterSource column
 * @method LarvalnurserysystemQuery groupBySupplwatersource() Group by the SupplWaterSource column
 * @method LarvalnurserysystemQuery groupByTempmin() Group by the TempMin column
 * @method LarvalnurserysystemQuery groupByTempmax() Group by the TempMax column
 * @method LarvalnurserysystemQuery groupBySalinmin() Group by the SalinMin column
 * @method LarvalnurserysystemQuery groupBySalinmax() Group by the SalinMax column
 * @method LarvalnurserysystemQuery groupByPhmin() Group by the pHMin column
 * @method LarvalnurserysystemQuery groupByPhmax() Group by the pHMax column
 * @method LarvalnurserysystemQuery groupByOxygenmin() Group by the OxygenMin column
 * @method LarvalnurserysystemQuery groupByOxygenmax() Group by the OxygenMax column
 * @method LarvalnurserysystemQuery groupByIlluminationmin() Group by the IlluminationMin column
 * @method LarvalnurserysystemQuery groupByIlluminationmax() Group by the IlluminationMax column
 * @method LarvalnurserysystemQuery groupByStockingdensityorg() Group by the StockingDensityOrg column
 * @method LarvalnurserysystemQuery groupByStockingdensity() Group by the StockingDensity column
 * @method LarvalnurserysystemQuery groupByFirstfeeddaysmin() Group by the FirstFeedDaysMin column
 * @method LarvalnurserysystemQuery groupByFirstfeeddaysmax() Group by the FirstFeedDaysMax column
 * @method LarvalnurserysystemQuery groupByFirstfeeddaysdegmin() Group by the FirstFeedDaysDegMin column
 * @method LarvalnurserysystemQuery groupByFirstfeeddaysdegmax() Group by the FirstFeedDaysDegMax column
 * @method LarvalnurserysystemQuery groupByUnit() Group by the Unit column
 * @method LarvalnurserysystemQuery groupByFoodi() Group by the FoodI column
 * @method LarvalnurserysystemQuery groupByFoodii() Group by the FoodII column
 * @method LarvalnurserysystemQuery groupByProductionperiode() Group by the ProductionPeriode column
 * @method LarvalnurserysystemQuery groupByHatchingtofrydaysmin() Group by the HatchingtoFryDaysMin column
 * @method LarvalnurserysystemQuery groupByHatchingtofrydaysmax() Group by the HatchingtoFryDaysMax column
 * @method LarvalnurserysystemQuery groupByHatchingtofrydaysdegmin() Group by the HatchingtoFryDaysDegMin column
 * @method LarvalnurserysystemQuery groupByHatchingtofrydaysdegmax() Group by the HatchingtoFryDaysDegMax column
 * @method LarvalnurserysystemQuery groupByMortalityrate() Group by the MortalityRate column
 * @method LarvalnurserysystemQuery groupByMortalityratemin() Group by the MortalityRateMin column
 * @method LarvalnurserysystemQuery groupByMortalityratemax() Group by the MortalityRateMax column
 * @method LarvalnurserysystemQuery groupByGrowthrate() Group by the GrowthRate column
 * @method LarvalnurserysystemQuery groupByFcr() Group by the FCR column
 * @method LarvalnurserysystemQuery groupByProductioncycle() Group by the ProductionCycle column
 * @method LarvalnurserysystemQuery groupByUnitcycle() Group by the UnitCycle column
 * @method LarvalnurserysystemQuery groupByProductionyear() Group by the ProductionYear column
 * @method LarvalnurserysystemQuery groupByUnityear() Group by the UnitYear column
 * @method LarvalnurserysystemQuery groupByComment() Group by the Comment column
 * @method LarvalnurserysystemQuery groupByEntered() Group by the Entered column
 * @method LarvalnurserysystemQuery groupByDateentered() Group by the DateEntered column
 * @method LarvalnurserysystemQuery groupByModified() Group by the Modified column
 * @method LarvalnurserysystemQuery groupByDatemodified() Group by the DateModified column
 * @method LarvalnurserysystemQuery groupByExpert() Group by the Expert column
 * @method LarvalnurserysystemQuery groupByDatechecked() Group by the DateChecked column
 * @method LarvalnurserysystemQuery groupByTs() Group by the TS column
 *
 * @method LarvalnurserysystemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LarvalnurserysystemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LarvalnurserysystemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Larvalnurserysystem findOne(PropelPDO $con = null) Return the first Larvalnurserysystem matching the query
 * @method Larvalnurserysystem findOneOrCreate(PropelPDO $con = null) Return the first Larvalnurserysystem matching the query, or a new Larvalnurserysystem object populated from the query conditions when no match is found
 *
 * @method Larvalnurserysystem findOneByAutoctr(int $autoctr) Return the first Larvalnurserysystem filtered by the autoctr column
 * @method Larvalnurserysystem findOneBySpeccode(int $Speccode) Return the first Larvalnurserysystem filtered by the Speccode column
 * @method Larvalnurserysystem findOneByStockcode(int $Stockcode) Return the first Larvalnurserysystem filtered by the Stockcode column
 * @method Larvalnurserysystem findOneBySpecies(string $Species) Return the first Larvalnurserysystem filtered by the Species column
 * @method Larvalnurserysystem findOneByCommonname(string $CommonName) Return the first Larvalnurserysystem filtered by the CommonName column
 * @method Larvalnurserysystem findOneByMainref(int $MainRef) Return the first Larvalnurserysystem filtered by the MainRef column
 * @method Larvalnurserysystem findOneByCCode(string $C_Code) Return the first Larvalnurserysystem filtered by the C_Code column
 * @method Larvalnurserysystem findOneByLocality(string $Locality) Return the first Larvalnurserysystem filtered by the Locality column
 * @method Larvalnurserysystem findOneByDataref(int $DataRef) Return the first Larvalnurserysystem filtered by the DataRef column
 * @method Larvalnurserysystem findOneByNumberoflarvaeorg(string $NumberofLarvaeOrg) Return the first Larvalnurserysystem filtered by the NumberofLarvaeOrg column
 * @method Larvalnurserysystem findOneByNumberoflarvae(int $NumberofLarvae) Return the first Larvalnurserysystem filtered by the NumberofLarvae column
 * @method Larvalnurserysystem findOneByNurserysystemi(string $NurserySystemI) Return the first Larvalnurserysystem filtered by the NurserySystemI column
 * @method Larvalnurserysystem findOneByNurserysystemii(string $NurserySystemII) Return the first Larvalnurserysystem filtered by the NurserySystemII column
 * @method Larvalnurserysystem findOneByCulturesystem(string $CultureSystem) Return the first Larvalnurserysystem filtered by the CultureSystem column
 * @method Larvalnurserysystem findOneByMainwatersource(string $MainWaterSource) Return the first Larvalnurserysystem filtered by the MainWaterSource column
 * @method Larvalnurserysystem findOneBySupplwatersource(string $SupplWaterSource) Return the first Larvalnurserysystem filtered by the SupplWaterSource column
 * @method Larvalnurserysystem findOneByTempmin(double $TempMin) Return the first Larvalnurserysystem filtered by the TempMin column
 * @method Larvalnurserysystem findOneByTempmax(double $TempMax) Return the first Larvalnurserysystem filtered by the TempMax column
 * @method Larvalnurserysystem findOneBySalinmin(double $SalinMin) Return the first Larvalnurserysystem filtered by the SalinMin column
 * @method Larvalnurserysystem findOneBySalinmax(double $SalinMax) Return the first Larvalnurserysystem filtered by the SalinMax column
 * @method Larvalnurserysystem findOneByPhmin(double $pHMin) Return the first Larvalnurserysystem filtered by the pHMin column
 * @method Larvalnurserysystem findOneByPhmax(double $pHMax) Return the first Larvalnurserysystem filtered by the pHMax column
 * @method Larvalnurserysystem findOneByOxygenmin(double $OxygenMin) Return the first Larvalnurserysystem filtered by the OxygenMin column
 * @method Larvalnurserysystem findOneByOxygenmax(double $OxygenMax) Return the first Larvalnurserysystem filtered by the OxygenMax column
 * @method Larvalnurserysystem findOneByIlluminationmin(double $IlluminationMin) Return the first Larvalnurserysystem filtered by the IlluminationMin column
 * @method Larvalnurserysystem findOneByIlluminationmax(double $IlluminationMax) Return the first Larvalnurserysystem filtered by the IlluminationMax column
 * @method Larvalnurserysystem findOneByStockingdensityorg(string $StockingDensityOrg) Return the first Larvalnurserysystem filtered by the StockingDensityOrg column
 * @method Larvalnurserysystem findOneByStockingdensity(double $StockingDensity) Return the first Larvalnurserysystem filtered by the StockingDensity column
 * @method Larvalnurserysystem findOneByFirstfeeddaysmin(int $FirstFeedDaysMin) Return the first Larvalnurserysystem filtered by the FirstFeedDaysMin column
 * @method Larvalnurserysystem findOneByFirstfeeddaysmax(int $FirstFeedDaysMax) Return the first Larvalnurserysystem filtered by the FirstFeedDaysMax column
 * @method Larvalnurserysystem findOneByFirstfeeddaysdegmin(int $FirstFeedDaysDegMin) Return the first Larvalnurserysystem filtered by the FirstFeedDaysDegMin column
 * @method Larvalnurserysystem findOneByFirstfeeddaysdegmax(int $FirstFeedDaysDegMax) Return the first Larvalnurserysystem filtered by the FirstFeedDaysDegMax column
 * @method Larvalnurserysystem findOneByUnit(string $Unit) Return the first Larvalnurserysystem filtered by the Unit column
 * @method Larvalnurserysystem findOneByFoodi(string $FoodI) Return the first Larvalnurserysystem filtered by the FoodI column
 * @method Larvalnurserysystem findOneByFoodii(string $FoodII) Return the first Larvalnurserysystem filtered by the FoodII column
 * @method Larvalnurserysystem findOneByProductionperiode(string $ProductionPeriode) Return the first Larvalnurserysystem filtered by the ProductionPeriode column
 * @method Larvalnurserysystem findOneByHatchingtofrydaysmin(int $HatchingtoFryDaysMin) Return the first Larvalnurserysystem filtered by the HatchingtoFryDaysMin column
 * @method Larvalnurserysystem findOneByHatchingtofrydaysmax(int $HatchingtoFryDaysMax) Return the first Larvalnurserysystem filtered by the HatchingtoFryDaysMax column
 * @method Larvalnurserysystem findOneByHatchingtofrydaysdegmin(int $HatchingtoFryDaysDegMin) Return the first Larvalnurserysystem filtered by the HatchingtoFryDaysDegMin column
 * @method Larvalnurserysystem findOneByHatchingtofrydaysdegmax(int $HatchingtoFryDaysDegMax) Return the first Larvalnurserysystem filtered by the HatchingtoFryDaysDegMax column
 * @method Larvalnurserysystem findOneByMortalityrate(string $MortalityRate) Return the first Larvalnurserysystem filtered by the MortalityRate column
 * @method Larvalnurserysystem findOneByMortalityratemin(double $MortalityRateMin) Return the first Larvalnurserysystem filtered by the MortalityRateMin column
 * @method Larvalnurserysystem findOneByMortalityratemax(double $MortalityRateMax) Return the first Larvalnurserysystem filtered by the MortalityRateMax column
 * @method Larvalnurserysystem findOneByGrowthrate(string $GrowthRate) Return the first Larvalnurserysystem filtered by the GrowthRate column
 * @method Larvalnurserysystem findOneByFcr(double $FCR) Return the first Larvalnurserysystem filtered by the FCR column
 * @method Larvalnurserysystem findOneByProductioncycle(int $ProductionCycle) Return the first Larvalnurserysystem filtered by the ProductionCycle column
 * @method Larvalnurserysystem findOneByUnitcycle(string $UnitCycle) Return the first Larvalnurserysystem filtered by the UnitCycle column
 * @method Larvalnurserysystem findOneByProductionyear(int $ProductionYear) Return the first Larvalnurserysystem filtered by the ProductionYear column
 * @method Larvalnurserysystem findOneByUnityear(string $UnitYear) Return the first Larvalnurserysystem filtered by the UnitYear column
 * @method Larvalnurserysystem findOneByComment(string $Comment) Return the first Larvalnurserysystem filtered by the Comment column
 * @method Larvalnurserysystem findOneByEntered(int $Entered) Return the first Larvalnurserysystem filtered by the Entered column
 * @method Larvalnurserysystem findOneByDateentered(string $DateEntered) Return the first Larvalnurserysystem filtered by the DateEntered column
 * @method Larvalnurserysystem findOneByModified(int $Modified) Return the first Larvalnurserysystem filtered by the Modified column
 * @method Larvalnurserysystem findOneByDatemodified(string $DateModified) Return the first Larvalnurserysystem filtered by the DateModified column
 * @method Larvalnurserysystem findOneByExpert(int $Expert) Return the first Larvalnurserysystem filtered by the Expert column
 * @method Larvalnurserysystem findOneByDatechecked(string $DateChecked) Return the first Larvalnurserysystem filtered by the DateChecked column
 * @method Larvalnurserysystem findOneByTs(string $TS) Return the first Larvalnurserysystem filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Larvalnurserysystem objects filtered by the autoctr column
 * @method array findBySpeccode(int $Speccode) Return Larvalnurserysystem objects filtered by the Speccode column
 * @method array findByStockcode(int $Stockcode) Return Larvalnurserysystem objects filtered by the Stockcode column
 * @method array findBySpecies(string $Species) Return Larvalnurserysystem objects filtered by the Species column
 * @method array findByCommonname(string $CommonName) Return Larvalnurserysystem objects filtered by the CommonName column
 * @method array findByMainref(int $MainRef) Return Larvalnurserysystem objects filtered by the MainRef column
 * @method array findByCCode(string $C_Code) Return Larvalnurserysystem objects filtered by the C_Code column
 * @method array findByLocality(string $Locality) Return Larvalnurserysystem objects filtered by the Locality column
 * @method array findByDataref(int $DataRef) Return Larvalnurserysystem objects filtered by the DataRef column
 * @method array findByNumberoflarvaeorg(string $NumberofLarvaeOrg) Return Larvalnurserysystem objects filtered by the NumberofLarvaeOrg column
 * @method array findByNumberoflarvae(int $NumberofLarvae) Return Larvalnurserysystem objects filtered by the NumberofLarvae column
 * @method array findByNurserysystemi(string $NurserySystemI) Return Larvalnurserysystem objects filtered by the NurserySystemI column
 * @method array findByNurserysystemii(string $NurserySystemII) Return Larvalnurserysystem objects filtered by the NurserySystemII column
 * @method array findByCulturesystem(string $CultureSystem) Return Larvalnurserysystem objects filtered by the CultureSystem column
 * @method array findByMainwatersource(string $MainWaterSource) Return Larvalnurserysystem objects filtered by the MainWaterSource column
 * @method array findBySupplwatersource(string $SupplWaterSource) Return Larvalnurserysystem objects filtered by the SupplWaterSource column
 * @method array findByTempmin(double $TempMin) Return Larvalnurserysystem objects filtered by the TempMin column
 * @method array findByTempmax(double $TempMax) Return Larvalnurserysystem objects filtered by the TempMax column
 * @method array findBySalinmin(double $SalinMin) Return Larvalnurserysystem objects filtered by the SalinMin column
 * @method array findBySalinmax(double $SalinMax) Return Larvalnurserysystem objects filtered by the SalinMax column
 * @method array findByPhmin(double $pHMin) Return Larvalnurserysystem objects filtered by the pHMin column
 * @method array findByPhmax(double $pHMax) Return Larvalnurserysystem objects filtered by the pHMax column
 * @method array findByOxygenmin(double $OxygenMin) Return Larvalnurserysystem objects filtered by the OxygenMin column
 * @method array findByOxygenmax(double $OxygenMax) Return Larvalnurserysystem objects filtered by the OxygenMax column
 * @method array findByIlluminationmin(double $IlluminationMin) Return Larvalnurserysystem objects filtered by the IlluminationMin column
 * @method array findByIlluminationmax(double $IlluminationMax) Return Larvalnurserysystem objects filtered by the IlluminationMax column
 * @method array findByStockingdensityorg(string $StockingDensityOrg) Return Larvalnurserysystem objects filtered by the StockingDensityOrg column
 * @method array findByStockingdensity(double $StockingDensity) Return Larvalnurserysystem objects filtered by the StockingDensity column
 * @method array findByFirstfeeddaysmin(int $FirstFeedDaysMin) Return Larvalnurserysystem objects filtered by the FirstFeedDaysMin column
 * @method array findByFirstfeeddaysmax(int $FirstFeedDaysMax) Return Larvalnurserysystem objects filtered by the FirstFeedDaysMax column
 * @method array findByFirstfeeddaysdegmin(int $FirstFeedDaysDegMin) Return Larvalnurserysystem objects filtered by the FirstFeedDaysDegMin column
 * @method array findByFirstfeeddaysdegmax(int $FirstFeedDaysDegMax) Return Larvalnurserysystem objects filtered by the FirstFeedDaysDegMax column
 * @method array findByUnit(string $Unit) Return Larvalnurserysystem objects filtered by the Unit column
 * @method array findByFoodi(string $FoodI) Return Larvalnurserysystem objects filtered by the FoodI column
 * @method array findByFoodii(string $FoodII) Return Larvalnurserysystem objects filtered by the FoodII column
 * @method array findByProductionperiode(string $ProductionPeriode) Return Larvalnurserysystem objects filtered by the ProductionPeriode column
 * @method array findByHatchingtofrydaysmin(int $HatchingtoFryDaysMin) Return Larvalnurserysystem objects filtered by the HatchingtoFryDaysMin column
 * @method array findByHatchingtofrydaysmax(int $HatchingtoFryDaysMax) Return Larvalnurserysystem objects filtered by the HatchingtoFryDaysMax column
 * @method array findByHatchingtofrydaysdegmin(int $HatchingtoFryDaysDegMin) Return Larvalnurserysystem objects filtered by the HatchingtoFryDaysDegMin column
 * @method array findByHatchingtofrydaysdegmax(int $HatchingtoFryDaysDegMax) Return Larvalnurserysystem objects filtered by the HatchingtoFryDaysDegMax column
 * @method array findByMortalityrate(string $MortalityRate) Return Larvalnurserysystem objects filtered by the MortalityRate column
 * @method array findByMortalityratemin(double $MortalityRateMin) Return Larvalnurserysystem objects filtered by the MortalityRateMin column
 * @method array findByMortalityratemax(double $MortalityRateMax) Return Larvalnurserysystem objects filtered by the MortalityRateMax column
 * @method array findByGrowthrate(string $GrowthRate) Return Larvalnurserysystem objects filtered by the GrowthRate column
 * @method array findByFcr(double $FCR) Return Larvalnurserysystem objects filtered by the FCR column
 * @method array findByProductioncycle(int $ProductionCycle) Return Larvalnurserysystem objects filtered by the ProductionCycle column
 * @method array findByUnitcycle(string $UnitCycle) Return Larvalnurserysystem objects filtered by the UnitCycle column
 * @method array findByProductionyear(int $ProductionYear) Return Larvalnurserysystem objects filtered by the ProductionYear column
 * @method array findByUnityear(string $UnitYear) Return Larvalnurserysystem objects filtered by the UnitYear column
 * @method array findByComment(string $Comment) Return Larvalnurserysystem objects filtered by the Comment column
 * @method array findByEntered(int $Entered) Return Larvalnurserysystem objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Larvalnurserysystem objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Larvalnurserysystem objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Larvalnurserysystem objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Larvalnurserysystem objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Larvalnurserysystem objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Larvalnurserysystem objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLarvalnurserysystemQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLarvalnurserysystemQuery object.
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
            $modelName = 'Larvalnurserysystem';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LarvalnurserysystemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LarvalnurserysystemQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LarvalnurserysystemQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LarvalnurserysystemQuery) {
            return $criteria;
        }
        $query = new LarvalnurserysystemQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$autoctr, $Stockcode, $MainRef]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Larvalnurserysystem|Larvalnurserysystem[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LarvalnurserysystemPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LarvalnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Larvalnurserysystem A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `Speccode`, `Stockcode`, `Species`, `CommonName`, `MainRef`, `C_Code`, `Locality`, `DataRef`, `NumberofLarvaeOrg`, `NumberofLarvae`, `NurserySystemI`, `NurserySystemII`, `CultureSystem`, `MainWaterSource`, `SupplWaterSource`, `TempMin`, `TempMax`, `SalinMin`, `SalinMax`, `pHMin`, `pHMax`, `OxygenMin`, `OxygenMax`, `IlluminationMin`, `IlluminationMax`, `StockingDensityOrg`, `StockingDensity`, `FirstFeedDaysMin`, `FirstFeedDaysMax`, `FirstFeedDaysDegMin`, `FirstFeedDaysDegMax`, `Unit`, `FoodI`, `FoodII`, `ProductionPeriode`, `HatchingtoFryDaysMin`, `HatchingtoFryDaysMax`, `HatchingtoFryDaysDegMin`, `HatchingtoFryDaysDegMax`, `MortalityRate`, `MortalityRateMin`, `MortalityRateMax`, `GrowthRate`, `FCR`, `ProductionCycle`, `UnitCycle`, `ProductionYear`, `UnitYear`, `Comment`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `larvalnurserysystem` WHERE `autoctr` = :p0 AND `Stockcode` = :p1 AND `MainRef` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Larvalnurserysystem();
            $obj->hydrate($row);
            LarvalnurserysystemPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Larvalnurserysystem|Larvalnurserysystem[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Larvalnurserysystem[]|mixed the list of results, formatted by the current formatter
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(LarvalnurserysystemPeer::AUTOCTR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(LarvalnurserysystemPeer::STOCKCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(LarvalnurserysystemPeer::MAINREF, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(LarvalnurserysystemPeer::AUTOCTR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(LarvalnurserysystemPeer::STOCKCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(LarvalnurserysystemPeer::MAINREF, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the Stockcode column
     *
     * Example usage:
     * <code>
     * $query->filterByStockcode(1234); // WHERE Stockcode = 1234
     * $query->filterByStockcode(array(12, 34)); // WHERE Stockcode IN (12, 34)
     * $query->filterByStockcode(array('min' => 12)); // WHERE Stockcode >= 12
     * $query->filterByStockcode(array('max' => 12)); // WHERE Stockcode <= 12
     * </code>
     *
     * @param     mixed $stockcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(LarvalnurserysystemPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the CommonName column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonname('fooValue');   // WHERE CommonName = 'fooValue'
     * $query->filterByCommonname('%fooValue%'); // WHERE CommonName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByCommonname($commonname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonname)) {
                $commonname = str_replace('*', '%', $commonname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::COMMONNAME, $commonname, $comparison);
    }

    /**
     * Filter the query on the MainRef column
     *
     * Example usage:
     * <code>
     * $query->filterByMainref(1234); // WHERE MainRef = 1234
     * $query->filterByMainref(array(12, 34)); // WHERE MainRef IN (12, 34)
     * $query->filterByMainref(array('min' => 12)); // WHERE MainRef >= 12
     * $query->filterByMainref(array('max' => 12)); // WHERE MainRef <= 12
     * </code>
     *
     * @param     mixed $mainref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByMainref($mainref = null, $comparison = null)
    {
        if (is_array($mainref)) {
            $useMinMax = false;
            if (isset($mainref['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::MAINREF, $mainref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mainref['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::MAINREF, $mainref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::MAINREF, $mainref, $comparison);
    }

    /**
     * Filter the query on the C_Code column
     *
     * Example usage:
     * <code>
     * $query->filterByCCode('fooValue');   // WHERE C_Code = 'fooValue'
     * $query->filterByCCode('%fooValue%'); // WHERE C_Code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByCCode($cCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cCode)) {
                $cCode = str_replace('*', '%', $cCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the Locality column
     *
     * Example usage:
     * <code>
     * $query->filterByLocality('fooValue');   // WHERE Locality = 'fooValue'
     * $query->filterByLocality('%fooValue%'); // WHERE Locality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByLocality($locality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $locality)) {
                $locality = str_replace('*', '%', $locality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the DataRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDataref(1234); // WHERE DataRef = 1234
     * $query->filterByDataref(array(12, 34)); // WHERE DataRef IN (12, 34)
     * $query->filterByDataref(array('min' => 12)); // WHERE DataRef >= 12
     * $query->filterByDataref(array('max' => 12)); // WHERE DataRef <= 12
     * </code>
     *
     * @param     mixed $dataref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByDataref($dataref = null, $comparison = null)
    {
        if (is_array($dataref)) {
            $useMinMax = false;
            if (isset($dataref['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::DATAREF, $dataref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataref['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::DATAREF, $dataref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::DATAREF, $dataref, $comparison);
    }

    /**
     * Filter the query on the NumberofLarvaeOrg column
     *
     * Example usage:
     * <code>
     * $query->filterByNumberoflarvaeorg('fooValue');   // WHERE NumberofLarvaeOrg = 'fooValue'
     * $query->filterByNumberoflarvaeorg('%fooValue%'); // WHERE NumberofLarvaeOrg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numberoflarvaeorg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByNumberoflarvaeorg($numberoflarvaeorg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numberoflarvaeorg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numberoflarvaeorg)) {
                $numberoflarvaeorg = str_replace('*', '%', $numberoflarvaeorg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::NUMBEROFLARVAEORG, $numberoflarvaeorg, $comparison);
    }

    /**
     * Filter the query on the NumberofLarvae column
     *
     * Example usage:
     * <code>
     * $query->filterByNumberoflarvae(1234); // WHERE NumberofLarvae = 1234
     * $query->filterByNumberoflarvae(array(12, 34)); // WHERE NumberofLarvae IN (12, 34)
     * $query->filterByNumberoflarvae(array('min' => 12)); // WHERE NumberofLarvae >= 12
     * $query->filterByNumberoflarvae(array('max' => 12)); // WHERE NumberofLarvae <= 12
     * </code>
     *
     * @param     mixed $numberoflarvae The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByNumberoflarvae($numberoflarvae = null, $comparison = null)
    {
        if (is_array($numberoflarvae)) {
            $useMinMax = false;
            if (isset($numberoflarvae['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::NUMBEROFLARVAE, $numberoflarvae['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numberoflarvae['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::NUMBEROFLARVAE, $numberoflarvae['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::NUMBEROFLARVAE, $numberoflarvae, $comparison);
    }

    /**
     * Filter the query on the NurserySystemI column
     *
     * Example usage:
     * <code>
     * $query->filterByNurserysystemi('fooValue');   // WHERE NurserySystemI = 'fooValue'
     * $query->filterByNurserysystemi('%fooValue%'); // WHERE NurserySystemI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nurserysystemi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByNurserysystemi($nurserysystemi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nurserysystemi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nurserysystemi)) {
                $nurserysystemi = str_replace('*', '%', $nurserysystemi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::NURSERYSYSTEMI, $nurserysystemi, $comparison);
    }

    /**
     * Filter the query on the NurserySystemII column
     *
     * Example usage:
     * <code>
     * $query->filterByNurserysystemii('fooValue');   // WHERE NurserySystemII = 'fooValue'
     * $query->filterByNurserysystemii('%fooValue%'); // WHERE NurserySystemII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nurserysystemii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByNurserysystemii($nurserysystemii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nurserysystemii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nurserysystemii)) {
                $nurserysystemii = str_replace('*', '%', $nurserysystemii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::NURSERYSYSTEMII, $nurserysystemii, $comparison);
    }

    /**
     * Filter the query on the CultureSystem column
     *
     * Example usage:
     * <code>
     * $query->filterByCulturesystem('fooValue');   // WHERE CultureSystem = 'fooValue'
     * $query->filterByCulturesystem('%fooValue%'); // WHERE CultureSystem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $culturesystem The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByCulturesystem($culturesystem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($culturesystem)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $culturesystem)) {
                $culturesystem = str_replace('*', '%', $culturesystem);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::CULTURESYSTEM, $culturesystem, $comparison);
    }

    /**
     * Filter the query on the MainWaterSource column
     *
     * Example usage:
     * <code>
     * $query->filterByMainwatersource('fooValue');   // WHERE MainWaterSource = 'fooValue'
     * $query->filterByMainwatersource('%fooValue%'); // WHERE MainWaterSource LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mainwatersource The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByMainwatersource($mainwatersource = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mainwatersource)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mainwatersource)) {
                $mainwatersource = str_replace('*', '%', $mainwatersource);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::MAINWATERSOURCE, $mainwatersource, $comparison);
    }

    /**
     * Filter the query on the SupplWaterSource column
     *
     * Example usage:
     * <code>
     * $query->filterBySupplwatersource('fooValue');   // WHERE SupplWaterSource = 'fooValue'
     * $query->filterBySupplwatersource('%fooValue%'); // WHERE SupplWaterSource LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supplwatersource The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterBySupplwatersource($supplwatersource = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supplwatersource)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $supplwatersource)) {
                $supplwatersource = str_replace('*', '%', $supplwatersource);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::SUPPLWATERSOURCE, $supplwatersource, $comparison);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByTempmin($tempmin = null, $comparison = null)
    {
        if (is_array($tempmin)) {
            $useMinMax = false;
            if (isset($tempmin['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::TEMPMIN, $tempmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmin['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::TEMPMIN, $tempmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::TEMPMIN, $tempmin, $comparison);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByTempmax($tempmax = null, $comparison = null)
    {
        if (is_array($tempmax)) {
            $useMinMax = false;
            if (isset($tempmax['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::TEMPMAX, $tempmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmax['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::TEMPMAX, $tempmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::TEMPMAX, $tempmax, $comparison);
    }

    /**
     * Filter the query on the SalinMin column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinmin(1234); // WHERE SalinMin = 1234
     * $query->filterBySalinmin(array(12, 34)); // WHERE SalinMin IN (12, 34)
     * $query->filterBySalinmin(array('min' => 12)); // WHERE SalinMin >= 12
     * $query->filterBySalinmin(array('max' => 12)); // WHERE SalinMin <= 12
     * </code>
     *
     * @param     mixed $salinmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterBySalinmin($salinmin = null, $comparison = null)
    {
        if (is_array($salinmin)) {
            $useMinMax = false;
            if (isset($salinmin['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::SALINMIN, $salinmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinmin['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::SALINMIN, $salinmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::SALINMIN, $salinmin, $comparison);
    }

    /**
     * Filter the query on the SalinMax column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinmax(1234); // WHERE SalinMax = 1234
     * $query->filterBySalinmax(array(12, 34)); // WHERE SalinMax IN (12, 34)
     * $query->filterBySalinmax(array('min' => 12)); // WHERE SalinMax >= 12
     * $query->filterBySalinmax(array('max' => 12)); // WHERE SalinMax <= 12
     * </code>
     *
     * @param     mixed $salinmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterBySalinmax($salinmax = null, $comparison = null)
    {
        if (is_array($salinmax)) {
            $useMinMax = false;
            if (isset($salinmax['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::SALINMAX, $salinmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinmax['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::SALINMAX, $salinmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::SALINMAX, $salinmax, $comparison);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByPhmin($phmin = null, $comparison = null)
    {
        if (is_array($phmin)) {
            $useMinMax = false;
            if (isset($phmin['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::PHMIN, $phmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmin['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::PHMIN, $phmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::PHMIN, $phmin, $comparison);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByPhmax($phmax = null, $comparison = null)
    {
        if (is_array($phmax)) {
            $useMinMax = false;
            if (isset($phmax['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::PHMAX, $phmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmax['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::PHMAX, $phmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::PHMAX, $phmax, $comparison);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByOxygenmin($oxygenmin = null, $comparison = null)
    {
        if (is_array($oxygenmin)) {
            $useMinMax = false;
            if (isset($oxygenmin['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::OXYGENMIN, $oxygenmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmin['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::OXYGENMIN, $oxygenmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::OXYGENMIN, $oxygenmin, $comparison);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByOxygenmax($oxygenmax = null, $comparison = null)
    {
        if (is_array($oxygenmax)) {
            $useMinMax = false;
            if (isset($oxygenmax['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::OXYGENMAX, $oxygenmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmax['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::OXYGENMAX, $oxygenmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::OXYGENMAX, $oxygenmax, $comparison);
    }

    /**
     * Filter the query on the IlluminationMin column
     *
     * Example usage:
     * <code>
     * $query->filterByIlluminationmin(1234); // WHERE IlluminationMin = 1234
     * $query->filterByIlluminationmin(array(12, 34)); // WHERE IlluminationMin IN (12, 34)
     * $query->filterByIlluminationmin(array('min' => 12)); // WHERE IlluminationMin >= 12
     * $query->filterByIlluminationmin(array('max' => 12)); // WHERE IlluminationMin <= 12
     * </code>
     *
     * @param     mixed $illuminationmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByIlluminationmin($illuminationmin = null, $comparison = null)
    {
        if (is_array($illuminationmin)) {
            $useMinMax = false;
            if (isset($illuminationmin['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::ILLUMINATIONMIN, $illuminationmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($illuminationmin['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::ILLUMINATIONMIN, $illuminationmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::ILLUMINATIONMIN, $illuminationmin, $comparison);
    }

    /**
     * Filter the query on the IlluminationMax column
     *
     * Example usage:
     * <code>
     * $query->filterByIlluminationmax(1234); // WHERE IlluminationMax = 1234
     * $query->filterByIlluminationmax(array(12, 34)); // WHERE IlluminationMax IN (12, 34)
     * $query->filterByIlluminationmax(array('min' => 12)); // WHERE IlluminationMax >= 12
     * $query->filterByIlluminationmax(array('max' => 12)); // WHERE IlluminationMax <= 12
     * </code>
     *
     * @param     mixed $illuminationmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByIlluminationmax($illuminationmax = null, $comparison = null)
    {
        if (is_array($illuminationmax)) {
            $useMinMax = false;
            if (isset($illuminationmax['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::ILLUMINATIONMAX, $illuminationmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($illuminationmax['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::ILLUMINATIONMAX, $illuminationmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::ILLUMINATIONMAX, $illuminationmax, $comparison);
    }

    /**
     * Filter the query on the StockingDensityOrg column
     *
     * Example usage:
     * <code>
     * $query->filterByStockingdensityorg('fooValue');   // WHERE StockingDensityOrg = 'fooValue'
     * $query->filterByStockingdensityorg('%fooValue%'); // WHERE StockingDensityOrg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stockingdensityorg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByStockingdensityorg($stockingdensityorg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stockingdensityorg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stockingdensityorg)) {
                $stockingdensityorg = str_replace('*', '%', $stockingdensityorg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::STOCKINGDENSITYORG, $stockingdensityorg, $comparison);
    }

    /**
     * Filter the query on the StockingDensity column
     *
     * Example usage:
     * <code>
     * $query->filterByStockingdensity(1234); // WHERE StockingDensity = 1234
     * $query->filterByStockingdensity(array(12, 34)); // WHERE StockingDensity IN (12, 34)
     * $query->filterByStockingdensity(array('min' => 12)); // WHERE StockingDensity >= 12
     * $query->filterByStockingdensity(array('max' => 12)); // WHERE StockingDensity <= 12
     * </code>
     *
     * @param     mixed $stockingdensity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByStockingdensity($stockingdensity = null, $comparison = null)
    {
        if (is_array($stockingdensity)) {
            $useMinMax = false;
            if (isset($stockingdensity['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::STOCKINGDENSITY, $stockingdensity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockingdensity['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::STOCKINGDENSITY, $stockingdensity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::STOCKINGDENSITY, $stockingdensity, $comparison);
    }

    /**
     * Filter the query on the FirstFeedDaysMin column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstfeeddaysmin(1234); // WHERE FirstFeedDaysMin = 1234
     * $query->filterByFirstfeeddaysmin(array(12, 34)); // WHERE FirstFeedDaysMin IN (12, 34)
     * $query->filterByFirstfeeddaysmin(array('min' => 12)); // WHERE FirstFeedDaysMin >= 12
     * $query->filterByFirstfeeddaysmin(array('max' => 12)); // WHERE FirstFeedDaysMin <= 12
     * </code>
     *
     * @param     mixed $firstfeeddaysmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByFirstfeeddaysmin($firstfeeddaysmin = null, $comparison = null)
    {
        if (is_array($firstfeeddaysmin)) {
            $useMinMax = false;
            if (isset($firstfeeddaysmin['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::FIRSTFEEDDAYSMIN, $firstfeeddaysmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($firstfeeddaysmin['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::FIRSTFEEDDAYSMIN, $firstfeeddaysmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::FIRSTFEEDDAYSMIN, $firstfeeddaysmin, $comparison);
    }

    /**
     * Filter the query on the FirstFeedDaysMax column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstfeeddaysmax(1234); // WHERE FirstFeedDaysMax = 1234
     * $query->filterByFirstfeeddaysmax(array(12, 34)); // WHERE FirstFeedDaysMax IN (12, 34)
     * $query->filterByFirstfeeddaysmax(array('min' => 12)); // WHERE FirstFeedDaysMax >= 12
     * $query->filterByFirstfeeddaysmax(array('max' => 12)); // WHERE FirstFeedDaysMax <= 12
     * </code>
     *
     * @param     mixed $firstfeeddaysmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByFirstfeeddaysmax($firstfeeddaysmax = null, $comparison = null)
    {
        if (is_array($firstfeeddaysmax)) {
            $useMinMax = false;
            if (isset($firstfeeddaysmax['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::FIRSTFEEDDAYSMAX, $firstfeeddaysmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($firstfeeddaysmax['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::FIRSTFEEDDAYSMAX, $firstfeeddaysmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::FIRSTFEEDDAYSMAX, $firstfeeddaysmax, $comparison);
    }

    /**
     * Filter the query on the FirstFeedDaysDegMin column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstfeeddaysdegmin(1234); // WHERE FirstFeedDaysDegMin = 1234
     * $query->filterByFirstfeeddaysdegmin(array(12, 34)); // WHERE FirstFeedDaysDegMin IN (12, 34)
     * $query->filterByFirstfeeddaysdegmin(array('min' => 12)); // WHERE FirstFeedDaysDegMin >= 12
     * $query->filterByFirstfeeddaysdegmin(array('max' => 12)); // WHERE FirstFeedDaysDegMin <= 12
     * </code>
     *
     * @param     mixed $firstfeeddaysdegmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByFirstfeeddaysdegmin($firstfeeddaysdegmin = null, $comparison = null)
    {
        if (is_array($firstfeeddaysdegmin)) {
            $useMinMax = false;
            if (isset($firstfeeddaysdegmin['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMIN, $firstfeeddaysdegmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($firstfeeddaysdegmin['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMIN, $firstfeeddaysdegmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMIN, $firstfeeddaysdegmin, $comparison);
    }

    /**
     * Filter the query on the FirstFeedDaysDegMax column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstfeeddaysdegmax(1234); // WHERE FirstFeedDaysDegMax = 1234
     * $query->filterByFirstfeeddaysdegmax(array(12, 34)); // WHERE FirstFeedDaysDegMax IN (12, 34)
     * $query->filterByFirstfeeddaysdegmax(array('min' => 12)); // WHERE FirstFeedDaysDegMax >= 12
     * $query->filterByFirstfeeddaysdegmax(array('max' => 12)); // WHERE FirstFeedDaysDegMax <= 12
     * </code>
     *
     * @param     mixed $firstfeeddaysdegmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByFirstfeeddaysdegmax($firstfeeddaysdegmax = null, $comparison = null)
    {
        if (is_array($firstfeeddaysdegmax)) {
            $useMinMax = false;
            if (isset($firstfeeddaysdegmax['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMAX, $firstfeeddaysdegmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($firstfeeddaysdegmax['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMAX, $firstfeeddaysdegmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::FIRSTFEEDDAYSDEGMAX, $firstfeeddaysdegmax, $comparison);
    }

    /**
     * Filter the query on the Unit column
     *
     * Example usage:
     * <code>
     * $query->filterByUnit('fooValue');   // WHERE Unit = 'fooValue'
     * $query->filterByUnit('%fooValue%'); // WHERE Unit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByUnit($unit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unit)) {
                $unit = str_replace('*', '%', $unit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::UNIT, $unit, $comparison);
    }

    /**
     * Filter the query on the FoodI column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodi('fooValue');   // WHERE FoodI = 'fooValue'
     * $query->filterByFoodi('%fooValue%'); // WHERE FoodI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByFoodi($foodi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foodi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $foodi)) {
                $foodi = str_replace('*', '%', $foodi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::FOODI, $foodi, $comparison);
    }

    /**
     * Filter the query on the FoodII column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodii('fooValue');   // WHERE FoodII = 'fooValue'
     * $query->filterByFoodii('%fooValue%'); // WHERE FoodII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByFoodii($foodii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foodii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $foodii)) {
                $foodii = str_replace('*', '%', $foodii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::FOODII, $foodii, $comparison);
    }

    /**
     * Filter the query on the ProductionPeriode column
     *
     * Example usage:
     * <code>
     * $query->filterByProductionperiode('fooValue');   // WHERE ProductionPeriode = 'fooValue'
     * $query->filterByProductionperiode('%fooValue%'); // WHERE ProductionPeriode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productionperiode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByProductionperiode($productionperiode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productionperiode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productionperiode)) {
                $productionperiode = str_replace('*', '%', $productionperiode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::PRODUCTIONPERIODE, $productionperiode, $comparison);
    }

    /**
     * Filter the query on the HatchingtoFryDaysMin column
     *
     * Example usage:
     * <code>
     * $query->filterByHatchingtofrydaysmin(1234); // WHERE HatchingtoFryDaysMin = 1234
     * $query->filterByHatchingtofrydaysmin(array(12, 34)); // WHERE HatchingtoFryDaysMin IN (12, 34)
     * $query->filterByHatchingtofrydaysmin(array('min' => 12)); // WHERE HatchingtoFryDaysMin >= 12
     * $query->filterByHatchingtofrydaysmin(array('max' => 12)); // WHERE HatchingtoFryDaysMin <= 12
     * </code>
     *
     * @param     mixed $hatchingtofrydaysmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByHatchingtofrydaysmin($hatchingtofrydaysmin = null, $comparison = null)
    {
        if (is_array($hatchingtofrydaysmin)) {
            $useMinMax = false;
            if (isset($hatchingtofrydaysmin['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMIN, $hatchingtofrydaysmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hatchingtofrydaysmin['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMIN, $hatchingtofrydaysmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMIN, $hatchingtofrydaysmin, $comparison);
    }

    /**
     * Filter the query on the HatchingtoFryDaysMax column
     *
     * Example usage:
     * <code>
     * $query->filterByHatchingtofrydaysmax(1234); // WHERE HatchingtoFryDaysMax = 1234
     * $query->filterByHatchingtofrydaysmax(array(12, 34)); // WHERE HatchingtoFryDaysMax IN (12, 34)
     * $query->filterByHatchingtofrydaysmax(array('min' => 12)); // WHERE HatchingtoFryDaysMax >= 12
     * $query->filterByHatchingtofrydaysmax(array('max' => 12)); // WHERE HatchingtoFryDaysMax <= 12
     * </code>
     *
     * @param     mixed $hatchingtofrydaysmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByHatchingtofrydaysmax($hatchingtofrydaysmax = null, $comparison = null)
    {
        if (is_array($hatchingtofrydaysmax)) {
            $useMinMax = false;
            if (isset($hatchingtofrydaysmax['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMAX, $hatchingtofrydaysmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hatchingtofrydaysmax['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMAX, $hatchingtofrydaysmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSMAX, $hatchingtofrydaysmax, $comparison);
    }

    /**
     * Filter the query on the HatchingtoFryDaysDegMin column
     *
     * Example usage:
     * <code>
     * $query->filterByHatchingtofrydaysdegmin(1234); // WHERE HatchingtoFryDaysDegMin = 1234
     * $query->filterByHatchingtofrydaysdegmin(array(12, 34)); // WHERE HatchingtoFryDaysDegMin IN (12, 34)
     * $query->filterByHatchingtofrydaysdegmin(array('min' => 12)); // WHERE HatchingtoFryDaysDegMin >= 12
     * $query->filterByHatchingtofrydaysdegmin(array('max' => 12)); // WHERE HatchingtoFryDaysDegMin <= 12
     * </code>
     *
     * @param     mixed $hatchingtofrydaysdegmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByHatchingtofrydaysdegmin($hatchingtofrydaysdegmin = null, $comparison = null)
    {
        if (is_array($hatchingtofrydaysdegmin)) {
            $useMinMax = false;
            if (isset($hatchingtofrydaysdegmin['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMIN, $hatchingtofrydaysdegmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hatchingtofrydaysdegmin['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMIN, $hatchingtofrydaysdegmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMIN, $hatchingtofrydaysdegmin, $comparison);
    }

    /**
     * Filter the query on the HatchingtoFryDaysDegMax column
     *
     * Example usage:
     * <code>
     * $query->filterByHatchingtofrydaysdegmax(1234); // WHERE HatchingtoFryDaysDegMax = 1234
     * $query->filterByHatchingtofrydaysdegmax(array(12, 34)); // WHERE HatchingtoFryDaysDegMax IN (12, 34)
     * $query->filterByHatchingtofrydaysdegmax(array('min' => 12)); // WHERE HatchingtoFryDaysDegMax >= 12
     * $query->filterByHatchingtofrydaysdegmax(array('max' => 12)); // WHERE HatchingtoFryDaysDegMax <= 12
     * </code>
     *
     * @param     mixed $hatchingtofrydaysdegmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByHatchingtofrydaysdegmax($hatchingtofrydaysdegmax = null, $comparison = null)
    {
        if (is_array($hatchingtofrydaysdegmax)) {
            $useMinMax = false;
            if (isset($hatchingtofrydaysdegmax['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMAX, $hatchingtofrydaysdegmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hatchingtofrydaysdegmax['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMAX, $hatchingtofrydaysdegmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::HATCHINGTOFRYDAYSDEGMAX, $hatchingtofrydaysdegmax, $comparison);
    }

    /**
     * Filter the query on the MortalityRate column
     *
     * Example usage:
     * <code>
     * $query->filterByMortalityrate('fooValue');   // WHERE MortalityRate = 'fooValue'
     * $query->filterByMortalityrate('%fooValue%'); // WHERE MortalityRate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mortalityrate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByMortalityrate($mortalityrate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mortalityrate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mortalityrate)) {
                $mortalityrate = str_replace('*', '%', $mortalityrate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::MORTALITYRATE, $mortalityrate, $comparison);
    }

    /**
     * Filter the query on the MortalityRateMin column
     *
     * Example usage:
     * <code>
     * $query->filterByMortalityratemin(1234); // WHERE MortalityRateMin = 1234
     * $query->filterByMortalityratemin(array(12, 34)); // WHERE MortalityRateMin IN (12, 34)
     * $query->filterByMortalityratemin(array('min' => 12)); // WHERE MortalityRateMin >= 12
     * $query->filterByMortalityratemin(array('max' => 12)); // WHERE MortalityRateMin <= 12
     * </code>
     *
     * @param     mixed $mortalityratemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByMortalityratemin($mortalityratemin = null, $comparison = null)
    {
        if (is_array($mortalityratemin)) {
            $useMinMax = false;
            if (isset($mortalityratemin['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::MORTALITYRATEMIN, $mortalityratemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mortalityratemin['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::MORTALITYRATEMIN, $mortalityratemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::MORTALITYRATEMIN, $mortalityratemin, $comparison);
    }

    /**
     * Filter the query on the MortalityRateMax column
     *
     * Example usage:
     * <code>
     * $query->filterByMortalityratemax(1234); // WHERE MortalityRateMax = 1234
     * $query->filterByMortalityratemax(array(12, 34)); // WHERE MortalityRateMax IN (12, 34)
     * $query->filterByMortalityratemax(array('min' => 12)); // WHERE MortalityRateMax >= 12
     * $query->filterByMortalityratemax(array('max' => 12)); // WHERE MortalityRateMax <= 12
     * </code>
     *
     * @param     mixed $mortalityratemax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByMortalityratemax($mortalityratemax = null, $comparison = null)
    {
        if (is_array($mortalityratemax)) {
            $useMinMax = false;
            if (isset($mortalityratemax['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::MORTALITYRATEMAX, $mortalityratemax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mortalityratemax['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::MORTALITYRATEMAX, $mortalityratemax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::MORTALITYRATEMAX, $mortalityratemax, $comparison);
    }

    /**
     * Filter the query on the GrowthRate column
     *
     * Example usage:
     * <code>
     * $query->filterByGrowthrate('fooValue');   // WHERE GrowthRate = 'fooValue'
     * $query->filterByGrowthrate('%fooValue%'); // WHERE GrowthRate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $growthrate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByGrowthrate($growthrate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($growthrate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $growthrate)) {
                $growthrate = str_replace('*', '%', $growthrate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::GROWTHRATE, $growthrate, $comparison);
    }

    /**
     * Filter the query on the FCR column
     *
     * Example usage:
     * <code>
     * $query->filterByFcr(1234); // WHERE FCR = 1234
     * $query->filterByFcr(array(12, 34)); // WHERE FCR IN (12, 34)
     * $query->filterByFcr(array('min' => 12)); // WHERE FCR >= 12
     * $query->filterByFcr(array('max' => 12)); // WHERE FCR <= 12
     * </code>
     *
     * @param     mixed $fcr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByFcr($fcr = null, $comparison = null)
    {
        if (is_array($fcr)) {
            $useMinMax = false;
            if (isset($fcr['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::FCR, $fcr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fcr['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::FCR, $fcr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::FCR, $fcr, $comparison);
    }

    /**
     * Filter the query on the ProductionCycle column
     *
     * Example usage:
     * <code>
     * $query->filterByProductioncycle(1234); // WHERE ProductionCycle = 1234
     * $query->filterByProductioncycle(array(12, 34)); // WHERE ProductionCycle IN (12, 34)
     * $query->filterByProductioncycle(array('min' => 12)); // WHERE ProductionCycle >= 12
     * $query->filterByProductioncycle(array('max' => 12)); // WHERE ProductionCycle <= 12
     * </code>
     *
     * @param     mixed $productioncycle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByProductioncycle($productioncycle = null, $comparison = null)
    {
        if (is_array($productioncycle)) {
            $useMinMax = false;
            if (isset($productioncycle['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::PRODUCTIONCYCLE, $productioncycle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productioncycle['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::PRODUCTIONCYCLE, $productioncycle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::PRODUCTIONCYCLE, $productioncycle, $comparison);
    }

    /**
     * Filter the query on the UnitCycle column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitcycle('fooValue');   // WHERE UnitCycle = 'fooValue'
     * $query->filterByUnitcycle('%fooValue%'); // WHERE UnitCycle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unitcycle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByUnitcycle($unitcycle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitcycle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unitcycle)) {
                $unitcycle = str_replace('*', '%', $unitcycle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::UNITCYCLE, $unitcycle, $comparison);
    }

    /**
     * Filter the query on the ProductionYear column
     *
     * Example usage:
     * <code>
     * $query->filterByProductionyear(1234); // WHERE ProductionYear = 1234
     * $query->filterByProductionyear(array(12, 34)); // WHERE ProductionYear IN (12, 34)
     * $query->filterByProductionyear(array('min' => 12)); // WHERE ProductionYear >= 12
     * $query->filterByProductionyear(array('max' => 12)); // WHERE ProductionYear <= 12
     * </code>
     *
     * @param     mixed $productionyear The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByProductionyear($productionyear = null, $comparison = null)
    {
        if (is_array($productionyear)) {
            $useMinMax = false;
            if (isset($productionyear['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::PRODUCTIONYEAR, $productionyear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productionyear['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::PRODUCTIONYEAR, $productionyear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::PRODUCTIONYEAR, $productionyear, $comparison);
    }

    /**
     * Filter the query on the UnitYear column
     *
     * Example usage:
     * <code>
     * $query->filterByUnityear('fooValue');   // WHERE UnitYear = 'fooValue'
     * $query->filterByUnityear('%fooValue%'); // WHERE UnitYear LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unityear The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByUnityear($unityear = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unityear)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unityear)) {
                $unityear = str_replace('*', '%', $unityear);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::UNITYEAR, $unityear, $comparison);
    }

    /**
     * Filter the query on the Comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE Comment = 'fooValue'
     * $query->filterByComment('%fooValue%'); // WHERE Comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(LarvalnurserysystemPeer::COMMENT, $comment, $comparison);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::ENTERED, $entered, $comparison);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::MODIFIED, $modified, $comparison);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::EXPERT, $expert, $comparison);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(LarvalnurserysystemPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalnurserysystemPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Larvalnurserysystem $larvalnurserysystem Object to remove from the list of results
     *
     * @return LarvalnurserysystemQuery The current query, for fluid interface
     */
    public function prune($larvalnurserysystem = null)
    {
        if ($larvalnurserysystem) {
            $this->addCond('pruneCond0', $this->getAliasedColName(LarvalnurserysystemPeer::AUTOCTR), $larvalnurserysystem->getAutoctr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(LarvalnurserysystemPeer::STOCKCODE), $larvalnurserysystem->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(LarvalnurserysystemPeer::MAINREF), $larvalnurserysystem->getMainref(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
