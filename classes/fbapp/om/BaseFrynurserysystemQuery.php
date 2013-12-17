<?php


/**
 * Base class that represents a query for the 'frynurserysystem' table.
 *
 *
 *
 * @method FrynurserysystemQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method FrynurserysystemQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method FrynurserysystemQuery orderByStockcode($order = Criteria::ASC) Order by the Stockcode column
 * @method FrynurserysystemQuery orderByCommonname($order = Criteria::ASC) Order by the CommonName column
 * @method FrynurserysystemQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method FrynurserysystemQuery orderByMainref($order = Criteria::ASC) Order by the MainRef column
 * @method FrynurserysystemQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method FrynurserysystemQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method FrynurserysystemQuery orderByDataref($order = Criteria::ASC) Order by the DataRef column
 * @method FrynurserysystemQuery orderByNumberoffry($order = Criteria::ASC) Order by the NumberofFry column
 * @method FrynurserysystemQuery orderByNurserysystemi($order = Criteria::ASC) Order by the NurserySystemI column
 * @method FrynurserysystemQuery orderByNurserysystemii($order = Criteria::ASC) Order by the NurserySystemII column
 * @method FrynurserysystemQuery orderByCulturesystem($order = Criteria::ASC) Order by the CultureSystem column
 * @method FrynurserysystemQuery orderByMainwatersource($order = Criteria::ASC) Order by the MainWaterSource column
 * @method FrynurserysystemQuery orderBySupplwatersource($order = Criteria::ASC) Order by the SupplWaterSource column
 * @method FrynurserysystemQuery orderByTempmin($order = Criteria::ASC) Order by the TempMin column
 * @method FrynurserysystemQuery orderByTempmax($order = Criteria::ASC) Order by the TempMax column
 * @method FrynurserysystemQuery orderBySalinmin($order = Criteria::ASC) Order by the SalinMin column
 * @method FrynurserysystemQuery orderBySalinmax($order = Criteria::ASC) Order by the SalinMax column
 * @method FrynurserysystemQuery orderByPhmin($order = Criteria::ASC) Order by the pHMin column
 * @method FrynurserysystemQuery orderByPhmax($order = Criteria::ASC) Order by the pHMax column
 * @method FrynurserysystemQuery orderByOxygenmin($order = Criteria::ASC) Order by the OxygenMin column
 * @method FrynurserysystemQuery orderByOxygenmax($order = Criteria::ASC) Order by the OxygenMax column
 * @method FrynurserysystemQuery orderByIlluminationmin($order = Criteria::ASC) Order by the IlluminationMin column
 * @method FrynurserysystemQuery orderByIlluminationmax($order = Criteria::ASC) Order by the IlluminationMax column
 * @method FrynurserysystemQuery orderByStockingdensityorg($order = Criteria::ASC) Order by the StockingDensityOrg column
 * @method FrynurserysystemQuery orderByStockingdensity($order = Criteria::ASC) Order by the StockingDensity column
 * @method FrynurserysystemQuery orderByUnit($order = Criteria::ASC) Order by the Unit column
 * @method FrynurserysystemQuery orderByFoodi($order = Criteria::ASC) Order by the FoodI column
 * @method FrynurserysystemQuery orderByFoodii($order = Criteria::ASC) Order by the FoodII column
 * @method FrynurserysystemQuery orderByProductionperiode($order = Criteria::ASC) Order by the ProductionPeriode column
 * @method FrynurserysystemQuery orderByTimetoalevinsdaysmin($order = Criteria::ASC) Order by the TimetoAlevinsDaysMin column
 * @method FrynurserysystemQuery orderByTimetoalevinsdaysmax($order = Criteria::ASC) Order by the TimetoAlevinsDaysMax column
 * @method FrynurserysystemQuery orderByTimetoalevinsdaysdegmin($order = Criteria::ASC) Order by the TimetoAlevinsDaysDegMin column
 * @method FrynurserysystemQuery orderByTimetoalevinsdaysdegmax($order = Criteria::ASC) Order by the TimetoAlevinsDaysDegMax column
 * @method FrynurserysystemQuery orderByMortalityrateorg($order = Criteria::ASC) Order by the MortalityrateOrg column
 * @method FrynurserysystemQuery orderByMortalityratemin($order = Criteria::ASC) Order by the MortalityRateMin column
 * @method FrynurserysystemQuery orderByMortalityratemax($order = Criteria::ASC) Order by the MortalityRateMax column
 * @method FrynurserysystemQuery orderByGrowthrate($order = Criteria::ASC) Order by the GrowthRate column
 * @method FrynurserysystemQuery orderByFcr($order = Criteria::ASC) Order by the FCR column
 * @method FrynurserysystemQuery orderByProductioncycle($order = Criteria::ASC) Order by the ProductionCycle column
 * @method FrynurserysystemQuery orderByUnitcycle($order = Criteria::ASC) Order by the UnitCycle column
 * @method FrynurserysystemQuery orderByProductionyearorg($order = Criteria::ASC) Order by the ProductionYearOrg column
 * @method FrynurserysystemQuery orderByProductionyear($order = Criteria::ASC) Order by the ProductionYear column
 * @method FrynurserysystemQuery orderByUnityear($order = Criteria::ASC) Order by the UnitYear column
 * @method FrynurserysystemQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method FrynurserysystemQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method FrynurserysystemQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method FrynurserysystemQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method FrynurserysystemQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method FrynurserysystemQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method FrynurserysystemQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method FrynurserysystemQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FrynurserysystemQuery groupByAutoctr() Group by the autoctr column
 * @method FrynurserysystemQuery groupBySpeccode() Group by the Speccode column
 * @method FrynurserysystemQuery groupByStockcode() Group by the Stockcode column
 * @method FrynurserysystemQuery groupByCommonname() Group by the CommonName column
 * @method FrynurserysystemQuery groupBySpecies() Group by the Species column
 * @method FrynurserysystemQuery groupByMainref() Group by the MainRef column
 * @method FrynurserysystemQuery groupByCCode() Group by the C_Code column
 * @method FrynurserysystemQuery groupByLocality() Group by the Locality column
 * @method FrynurserysystemQuery groupByDataref() Group by the DataRef column
 * @method FrynurserysystemQuery groupByNumberoffry() Group by the NumberofFry column
 * @method FrynurserysystemQuery groupByNurserysystemi() Group by the NurserySystemI column
 * @method FrynurserysystemQuery groupByNurserysystemii() Group by the NurserySystemII column
 * @method FrynurserysystemQuery groupByCulturesystem() Group by the CultureSystem column
 * @method FrynurserysystemQuery groupByMainwatersource() Group by the MainWaterSource column
 * @method FrynurserysystemQuery groupBySupplwatersource() Group by the SupplWaterSource column
 * @method FrynurserysystemQuery groupByTempmin() Group by the TempMin column
 * @method FrynurserysystemQuery groupByTempmax() Group by the TempMax column
 * @method FrynurserysystemQuery groupBySalinmin() Group by the SalinMin column
 * @method FrynurserysystemQuery groupBySalinmax() Group by the SalinMax column
 * @method FrynurserysystemQuery groupByPhmin() Group by the pHMin column
 * @method FrynurserysystemQuery groupByPhmax() Group by the pHMax column
 * @method FrynurserysystemQuery groupByOxygenmin() Group by the OxygenMin column
 * @method FrynurserysystemQuery groupByOxygenmax() Group by the OxygenMax column
 * @method FrynurserysystemQuery groupByIlluminationmin() Group by the IlluminationMin column
 * @method FrynurserysystemQuery groupByIlluminationmax() Group by the IlluminationMax column
 * @method FrynurserysystemQuery groupByStockingdensityorg() Group by the StockingDensityOrg column
 * @method FrynurserysystemQuery groupByStockingdensity() Group by the StockingDensity column
 * @method FrynurserysystemQuery groupByUnit() Group by the Unit column
 * @method FrynurserysystemQuery groupByFoodi() Group by the FoodI column
 * @method FrynurserysystemQuery groupByFoodii() Group by the FoodII column
 * @method FrynurserysystemQuery groupByProductionperiode() Group by the ProductionPeriode column
 * @method FrynurserysystemQuery groupByTimetoalevinsdaysmin() Group by the TimetoAlevinsDaysMin column
 * @method FrynurserysystemQuery groupByTimetoalevinsdaysmax() Group by the TimetoAlevinsDaysMax column
 * @method FrynurserysystemQuery groupByTimetoalevinsdaysdegmin() Group by the TimetoAlevinsDaysDegMin column
 * @method FrynurserysystemQuery groupByTimetoalevinsdaysdegmax() Group by the TimetoAlevinsDaysDegMax column
 * @method FrynurserysystemQuery groupByMortalityrateorg() Group by the MortalityrateOrg column
 * @method FrynurserysystemQuery groupByMortalityratemin() Group by the MortalityRateMin column
 * @method FrynurserysystemQuery groupByMortalityratemax() Group by the MortalityRateMax column
 * @method FrynurserysystemQuery groupByGrowthrate() Group by the GrowthRate column
 * @method FrynurserysystemQuery groupByFcr() Group by the FCR column
 * @method FrynurserysystemQuery groupByProductioncycle() Group by the ProductionCycle column
 * @method FrynurserysystemQuery groupByUnitcycle() Group by the UnitCycle column
 * @method FrynurserysystemQuery groupByProductionyearorg() Group by the ProductionYearOrg column
 * @method FrynurserysystemQuery groupByProductionyear() Group by the ProductionYear column
 * @method FrynurserysystemQuery groupByUnityear() Group by the UnitYear column
 * @method FrynurserysystemQuery groupByComment() Group by the Comment column
 * @method FrynurserysystemQuery groupByEntered() Group by the Entered column
 * @method FrynurserysystemQuery groupByDateentered() Group by the DateEntered column
 * @method FrynurserysystemQuery groupByModified() Group by the Modified column
 * @method FrynurserysystemQuery groupByDatemodified() Group by the DateModified column
 * @method FrynurserysystemQuery groupByExpert() Group by the Expert column
 * @method FrynurserysystemQuery groupByDatechecked() Group by the DateChecked column
 * @method FrynurserysystemQuery groupByTs() Group by the TS column
 *
 * @method FrynurserysystemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FrynurserysystemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FrynurserysystemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Frynurserysystem findOne(PropelPDO $con = null) Return the first Frynurserysystem matching the query
 * @method Frynurserysystem findOneOrCreate(PropelPDO $con = null) Return the first Frynurserysystem matching the query, or a new Frynurserysystem object populated from the query conditions when no match is found
 *
 * @method Frynurserysystem findOneByAutoctr(int $autoctr) Return the first Frynurserysystem filtered by the autoctr column
 * @method Frynurserysystem findOneBySpeccode(int $Speccode) Return the first Frynurserysystem filtered by the Speccode column
 * @method Frynurserysystem findOneByStockcode(int $Stockcode) Return the first Frynurserysystem filtered by the Stockcode column
 * @method Frynurserysystem findOneByCommonname(string $CommonName) Return the first Frynurserysystem filtered by the CommonName column
 * @method Frynurserysystem findOneBySpecies(string $Species) Return the first Frynurserysystem filtered by the Species column
 * @method Frynurserysystem findOneByMainref(int $MainRef) Return the first Frynurserysystem filtered by the MainRef column
 * @method Frynurserysystem findOneByCCode(string $C_Code) Return the first Frynurserysystem filtered by the C_Code column
 * @method Frynurserysystem findOneByLocality(string $Locality) Return the first Frynurserysystem filtered by the Locality column
 * @method Frynurserysystem findOneByDataref(int $DataRef) Return the first Frynurserysystem filtered by the DataRef column
 * @method Frynurserysystem findOneByNumberoffry(int $NumberofFry) Return the first Frynurserysystem filtered by the NumberofFry column
 * @method Frynurserysystem findOneByNurserysystemi(string $NurserySystemI) Return the first Frynurserysystem filtered by the NurserySystemI column
 * @method Frynurserysystem findOneByNurserysystemii(string $NurserySystemII) Return the first Frynurserysystem filtered by the NurserySystemII column
 * @method Frynurserysystem findOneByCulturesystem(string $CultureSystem) Return the first Frynurserysystem filtered by the CultureSystem column
 * @method Frynurserysystem findOneByMainwatersource(string $MainWaterSource) Return the first Frynurserysystem filtered by the MainWaterSource column
 * @method Frynurserysystem findOneBySupplwatersource(string $SupplWaterSource) Return the first Frynurserysystem filtered by the SupplWaterSource column
 * @method Frynurserysystem findOneByTempmin(double $TempMin) Return the first Frynurserysystem filtered by the TempMin column
 * @method Frynurserysystem findOneByTempmax(double $TempMax) Return the first Frynurserysystem filtered by the TempMax column
 * @method Frynurserysystem findOneBySalinmin(double $SalinMin) Return the first Frynurserysystem filtered by the SalinMin column
 * @method Frynurserysystem findOneBySalinmax(double $SalinMax) Return the first Frynurserysystem filtered by the SalinMax column
 * @method Frynurserysystem findOneByPhmin(double $pHMin) Return the first Frynurserysystem filtered by the pHMin column
 * @method Frynurserysystem findOneByPhmax(double $pHMax) Return the first Frynurserysystem filtered by the pHMax column
 * @method Frynurserysystem findOneByOxygenmin(double $OxygenMin) Return the first Frynurserysystem filtered by the OxygenMin column
 * @method Frynurserysystem findOneByOxygenmax(double $OxygenMax) Return the first Frynurserysystem filtered by the OxygenMax column
 * @method Frynurserysystem findOneByIlluminationmin(int $IlluminationMin) Return the first Frynurserysystem filtered by the IlluminationMin column
 * @method Frynurserysystem findOneByIlluminationmax(int $IlluminationMax) Return the first Frynurserysystem filtered by the IlluminationMax column
 * @method Frynurserysystem findOneByStockingdensityorg(string $StockingDensityOrg) Return the first Frynurserysystem filtered by the StockingDensityOrg column
 * @method Frynurserysystem findOneByStockingdensity(int $StockingDensity) Return the first Frynurserysystem filtered by the StockingDensity column
 * @method Frynurserysystem findOneByUnit(string $Unit) Return the first Frynurserysystem filtered by the Unit column
 * @method Frynurserysystem findOneByFoodi(string $FoodI) Return the first Frynurserysystem filtered by the FoodI column
 * @method Frynurserysystem findOneByFoodii(string $FoodII) Return the first Frynurserysystem filtered by the FoodII column
 * @method Frynurserysystem findOneByProductionperiode(string $ProductionPeriode) Return the first Frynurserysystem filtered by the ProductionPeriode column
 * @method Frynurserysystem findOneByTimetoalevinsdaysmin(int $TimetoAlevinsDaysMin) Return the first Frynurserysystem filtered by the TimetoAlevinsDaysMin column
 * @method Frynurserysystem findOneByTimetoalevinsdaysmax(int $TimetoAlevinsDaysMax) Return the first Frynurserysystem filtered by the TimetoAlevinsDaysMax column
 * @method Frynurserysystem findOneByTimetoalevinsdaysdegmin(int $TimetoAlevinsDaysDegMin) Return the first Frynurserysystem filtered by the TimetoAlevinsDaysDegMin column
 * @method Frynurserysystem findOneByTimetoalevinsdaysdegmax(int $TimetoAlevinsDaysDegMax) Return the first Frynurserysystem filtered by the TimetoAlevinsDaysDegMax column
 * @method Frynurserysystem findOneByMortalityrateorg(string $MortalityrateOrg) Return the first Frynurserysystem filtered by the MortalityrateOrg column
 * @method Frynurserysystem findOneByMortalityratemin(double $MortalityRateMin) Return the first Frynurserysystem filtered by the MortalityRateMin column
 * @method Frynurserysystem findOneByMortalityratemax(double $MortalityRateMax) Return the first Frynurserysystem filtered by the MortalityRateMax column
 * @method Frynurserysystem findOneByGrowthrate(string $GrowthRate) Return the first Frynurserysystem filtered by the GrowthRate column
 * @method Frynurserysystem findOneByFcr(double $FCR) Return the first Frynurserysystem filtered by the FCR column
 * @method Frynurserysystem findOneByProductioncycle(int $ProductionCycle) Return the first Frynurserysystem filtered by the ProductionCycle column
 * @method Frynurserysystem findOneByUnitcycle(string $UnitCycle) Return the first Frynurserysystem filtered by the UnitCycle column
 * @method Frynurserysystem findOneByProductionyearorg(string $ProductionYearOrg) Return the first Frynurserysystem filtered by the ProductionYearOrg column
 * @method Frynurserysystem findOneByProductionyear(int $ProductionYear) Return the first Frynurserysystem filtered by the ProductionYear column
 * @method Frynurserysystem findOneByUnityear(string $UnitYear) Return the first Frynurserysystem filtered by the UnitYear column
 * @method Frynurserysystem findOneByComment(string $Comment) Return the first Frynurserysystem filtered by the Comment column
 * @method Frynurserysystem findOneByEntered(int $Entered) Return the first Frynurserysystem filtered by the Entered column
 * @method Frynurserysystem findOneByDateentered(string $DateEntered) Return the first Frynurserysystem filtered by the DateEntered column
 * @method Frynurserysystem findOneByModified(int $Modified) Return the first Frynurserysystem filtered by the Modified column
 * @method Frynurserysystem findOneByDatemodified(string $DateModified) Return the first Frynurserysystem filtered by the DateModified column
 * @method Frynurserysystem findOneByExpert(int $Expert) Return the first Frynurserysystem filtered by the Expert column
 * @method Frynurserysystem findOneByDatechecked(string $DateChecked) Return the first Frynurserysystem filtered by the DateChecked column
 * @method Frynurserysystem findOneByTs(string $TS) Return the first Frynurserysystem filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Frynurserysystem objects filtered by the autoctr column
 * @method array findBySpeccode(int $Speccode) Return Frynurserysystem objects filtered by the Speccode column
 * @method array findByStockcode(int $Stockcode) Return Frynurserysystem objects filtered by the Stockcode column
 * @method array findByCommonname(string $CommonName) Return Frynurserysystem objects filtered by the CommonName column
 * @method array findBySpecies(string $Species) Return Frynurserysystem objects filtered by the Species column
 * @method array findByMainref(int $MainRef) Return Frynurserysystem objects filtered by the MainRef column
 * @method array findByCCode(string $C_Code) Return Frynurserysystem objects filtered by the C_Code column
 * @method array findByLocality(string $Locality) Return Frynurserysystem objects filtered by the Locality column
 * @method array findByDataref(int $DataRef) Return Frynurserysystem objects filtered by the DataRef column
 * @method array findByNumberoffry(int $NumberofFry) Return Frynurserysystem objects filtered by the NumberofFry column
 * @method array findByNurserysystemi(string $NurserySystemI) Return Frynurserysystem objects filtered by the NurserySystemI column
 * @method array findByNurserysystemii(string $NurserySystemII) Return Frynurserysystem objects filtered by the NurserySystemII column
 * @method array findByCulturesystem(string $CultureSystem) Return Frynurserysystem objects filtered by the CultureSystem column
 * @method array findByMainwatersource(string $MainWaterSource) Return Frynurserysystem objects filtered by the MainWaterSource column
 * @method array findBySupplwatersource(string $SupplWaterSource) Return Frynurserysystem objects filtered by the SupplWaterSource column
 * @method array findByTempmin(double $TempMin) Return Frynurserysystem objects filtered by the TempMin column
 * @method array findByTempmax(double $TempMax) Return Frynurserysystem objects filtered by the TempMax column
 * @method array findBySalinmin(double $SalinMin) Return Frynurserysystem objects filtered by the SalinMin column
 * @method array findBySalinmax(double $SalinMax) Return Frynurserysystem objects filtered by the SalinMax column
 * @method array findByPhmin(double $pHMin) Return Frynurserysystem objects filtered by the pHMin column
 * @method array findByPhmax(double $pHMax) Return Frynurserysystem objects filtered by the pHMax column
 * @method array findByOxygenmin(double $OxygenMin) Return Frynurserysystem objects filtered by the OxygenMin column
 * @method array findByOxygenmax(double $OxygenMax) Return Frynurserysystem objects filtered by the OxygenMax column
 * @method array findByIlluminationmin(int $IlluminationMin) Return Frynurserysystem objects filtered by the IlluminationMin column
 * @method array findByIlluminationmax(int $IlluminationMax) Return Frynurserysystem objects filtered by the IlluminationMax column
 * @method array findByStockingdensityorg(string $StockingDensityOrg) Return Frynurserysystem objects filtered by the StockingDensityOrg column
 * @method array findByStockingdensity(int $StockingDensity) Return Frynurserysystem objects filtered by the StockingDensity column
 * @method array findByUnit(string $Unit) Return Frynurserysystem objects filtered by the Unit column
 * @method array findByFoodi(string $FoodI) Return Frynurserysystem objects filtered by the FoodI column
 * @method array findByFoodii(string $FoodII) Return Frynurserysystem objects filtered by the FoodII column
 * @method array findByProductionperiode(string $ProductionPeriode) Return Frynurserysystem objects filtered by the ProductionPeriode column
 * @method array findByTimetoalevinsdaysmin(int $TimetoAlevinsDaysMin) Return Frynurserysystem objects filtered by the TimetoAlevinsDaysMin column
 * @method array findByTimetoalevinsdaysmax(int $TimetoAlevinsDaysMax) Return Frynurserysystem objects filtered by the TimetoAlevinsDaysMax column
 * @method array findByTimetoalevinsdaysdegmin(int $TimetoAlevinsDaysDegMin) Return Frynurserysystem objects filtered by the TimetoAlevinsDaysDegMin column
 * @method array findByTimetoalevinsdaysdegmax(int $TimetoAlevinsDaysDegMax) Return Frynurserysystem objects filtered by the TimetoAlevinsDaysDegMax column
 * @method array findByMortalityrateorg(string $MortalityrateOrg) Return Frynurserysystem objects filtered by the MortalityrateOrg column
 * @method array findByMortalityratemin(double $MortalityRateMin) Return Frynurserysystem objects filtered by the MortalityRateMin column
 * @method array findByMortalityratemax(double $MortalityRateMax) Return Frynurserysystem objects filtered by the MortalityRateMax column
 * @method array findByGrowthrate(string $GrowthRate) Return Frynurserysystem objects filtered by the GrowthRate column
 * @method array findByFcr(double $FCR) Return Frynurserysystem objects filtered by the FCR column
 * @method array findByProductioncycle(int $ProductionCycle) Return Frynurserysystem objects filtered by the ProductionCycle column
 * @method array findByUnitcycle(string $UnitCycle) Return Frynurserysystem objects filtered by the UnitCycle column
 * @method array findByProductionyearorg(string $ProductionYearOrg) Return Frynurserysystem objects filtered by the ProductionYearOrg column
 * @method array findByProductionyear(int $ProductionYear) Return Frynurserysystem objects filtered by the ProductionYear column
 * @method array findByUnityear(string $UnitYear) Return Frynurserysystem objects filtered by the UnitYear column
 * @method array findByComment(string $Comment) Return Frynurserysystem objects filtered by the Comment column
 * @method array findByEntered(int $Entered) Return Frynurserysystem objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Frynurserysystem objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Frynurserysystem objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Frynurserysystem objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Frynurserysystem objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Frynurserysystem objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Frynurserysystem objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFrynurserysystemQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFrynurserysystemQuery object.
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
            $modelName = 'Frynurserysystem';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FrynurserysystemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FrynurserysystemQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FrynurserysystemQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FrynurserysystemQuery) {
            return $criteria;
        }
        $query = new FrynurserysystemQuery(null, null, $modelAlias);

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
     * @return   Frynurserysystem|Frynurserysystem[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FrynurserysystemPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FrynurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Frynurserysystem A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `Speccode`, `Stockcode`, `CommonName`, `Species`, `MainRef`, `C_Code`, `Locality`, `DataRef`, `NumberofFry`, `NurserySystemI`, `NurserySystemII`, `CultureSystem`, `MainWaterSource`, `SupplWaterSource`, `TempMin`, `TempMax`, `SalinMin`, `SalinMax`, `pHMin`, `pHMax`, `OxygenMin`, `OxygenMax`, `IlluminationMin`, `IlluminationMax`, `StockingDensityOrg`, `StockingDensity`, `Unit`, `FoodI`, `FoodII`, `ProductionPeriode`, `TimetoAlevinsDaysMin`, `TimetoAlevinsDaysMax`, `TimetoAlevinsDaysDegMin`, `TimetoAlevinsDaysDegMax`, `MortalityrateOrg`, `MortalityRateMin`, `MortalityRateMax`, `GrowthRate`, `FCR`, `ProductionCycle`, `UnitCycle`, `ProductionYearOrg`, `ProductionYear`, `UnitYear`, `Comment`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `frynurserysystem` WHERE `autoctr` = :p0 AND `Stockcode` = :p1 AND `MainRef` = :p2';
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
            $obj = new Frynurserysystem();
            $obj->hydrate($row);
            FrynurserysystemPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Frynurserysystem|Frynurserysystem[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Frynurserysystem[]|mixed the list of results, formatted by the current formatter
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(FrynurserysystemPeer::AUTOCTR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(FrynurserysystemPeer::STOCKCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(FrynurserysystemPeer::MAINREF, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(FrynurserysystemPeer::AUTOCTR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(FrynurserysystemPeer::STOCKCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(FrynurserysystemPeer::MAINREF, $key[2], Criteria::EQUAL);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::SPECCODE, $speccode, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::COMMONNAME, $commonname, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::SPECIES, $species, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByMainref($mainref = null, $comparison = null)
    {
        if (is_array($mainref)) {
            $useMinMax = false;
            if (isset($mainref['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::MAINREF, $mainref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mainref['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::MAINREF, $mainref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::MAINREF, $mainref, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::C_CODE, $cCode, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::LOCALITY, $locality, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByDataref($dataref = null, $comparison = null)
    {
        if (is_array($dataref)) {
            $useMinMax = false;
            if (isset($dataref['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::DATAREF, $dataref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataref['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::DATAREF, $dataref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::DATAREF, $dataref, $comparison);
    }

    /**
     * Filter the query on the NumberofFry column
     *
     * Example usage:
     * <code>
     * $query->filterByNumberoffry(1234); // WHERE NumberofFry = 1234
     * $query->filterByNumberoffry(array(12, 34)); // WHERE NumberofFry IN (12, 34)
     * $query->filterByNumberoffry(array('min' => 12)); // WHERE NumberofFry >= 12
     * $query->filterByNumberoffry(array('max' => 12)); // WHERE NumberofFry <= 12
     * </code>
     *
     * @param     mixed $numberoffry The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByNumberoffry($numberoffry = null, $comparison = null)
    {
        if (is_array($numberoffry)) {
            $useMinMax = false;
            if (isset($numberoffry['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::NUMBEROFFRY, $numberoffry['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numberoffry['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::NUMBEROFFRY, $numberoffry['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::NUMBEROFFRY, $numberoffry, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::NURSERYSYSTEMI, $nurserysystemi, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::NURSERYSYSTEMII, $nurserysystemii, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::CULTURESYSTEM, $culturesystem, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::MAINWATERSOURCE, $mainwatersource, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::SUPPLWATERSOURCE, $supplwatersource, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByTempmin($tempmin = null, $comparison = null)
    {
        if (is_array($tempmin)) {
            $useMinMax = false;
            if (isset($tempmin['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::TEMPMIN, $tempmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmin['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::TEMPMIN, $tempmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::TEMPMIN, $tempmin, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByTempmax($tempmax = null, $comparison = null)
    {
        if (is_array($tempmax)) {
            $useMinMax = false;
            if (isset($tempmax['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::TEMPMAX, $tempmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmax['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::TEMPMAX, $tempmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::TEMPMAX, $tempmax, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterBySalinmin($salinmin = null, $comparison = null)
    {
        if (is_array($salinmin)) {
            $useMinMax = false;
            if (isset($salinmin['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::SALINMIN, $salinmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinmin['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::SALINMIN, $salinmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::SALINMIN, $salinmin, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterBySalinmax($salinmax = null, $comparison = null)
    {
        if (is_array($salinmax)) {
            $useMinMax = false;
            if (isset($salinmax['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::SALINMAX, $salinmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinmax['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::SALINMAX, $salinmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::SALINMAX, $salinmax, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByPhmin($phmin = null, $comparison = null)
    {
        if (is_array($phmin)) {
            $useMinMax = false;
            if (isset($phmin['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::PHMIN, $phmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmin['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::PHMIN, $phmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::PHMIN, $phmin, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByPhmax($phmax = null, $comparison = null)
    {
        if (is_array($phmax)) {
            $useMinMax = false;
            if (isset($phmax['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::PHMAX, $phmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmax['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::PHMAX, $phmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::PHMAX, $phmax, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByOxygenmin($oxygenmin = null, $comparison = null)
    {
        if (is_array($oxygenmin)) {
            $useMinMax = false;
            if (isset($oxygenmin['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::OXYGENMIN, $oxygenmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmin['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::OXYGENMIN, $oxygenmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::OXYGENMIN, $oxygenmin, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByOxygenmax($oxygenmax = null, $comparison = null)
    {
        if (is_array($oxygenmax)) {
            $useMinMax = false;
            if (isset($oxygenmax['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::OXYGENMAX, $oxygenmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmax['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::OXYGENMAX, $oxygenmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::OXYGENMAX, $oxygenmax, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByIlluminationmin($illuminationmin = null, $comparison = null)
    {
        if (is_array($illuminationmin)) {
            $useMinMax = false;
            if (isset($illuminationmin['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::ILLUMINATIONMIN, $illuminationmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($illuminationmin['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::ILLUMINATIONMIN, $illuminationmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::ILLUMINATIONMIN, $illuminationmin, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByIlluminationmax($illuminationmax = null, $comparison = null)
    {
        if (is_array($illuminationmax)) {
            $useMinMax = false;
            if (isset($illuminationmax['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::ILLUMINATIONMAX, $illuminationmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($illuminationmax['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::ILLUMINATIONMAX, $illuminationmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::ILLUMINATIONMAX, $illuminationmax, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::STOCKINGDENSITYORG, $stockingdensityorg, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByStockingdensity($stockingdensity = null, $comparison = null)
    {
        if (is_array($stockingdensity)) {
            $useMinMax = false;
            if (isset($stockingdensity['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::STOCKINGDENSITY, $stockingdensity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockingdensity['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::STOCKINGDENSITY, $stockingdensity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::STOCKINGDENSITY, $stockingdensity, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::UNIT, $unit, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::FOODI, $foodi, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::FOODII, $foodii, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::PRODUCTIONPERIODE, $productionperiode, $comparison);
    }

    /**
     * Filter the query on the TimetoAlevinsDaysMin column
     *
     * Example usage:
     * <code>
     * $query->filterByTimetoalevinsdaysmin(1234); // WHERE TimetoAlevinsDaysMin = 1234
     * $query->filterByTimetoalevinsdaysmin(array(12, 34)); // WHERE TimetoAlevinsDaysMin IN (12, 34)
     * $query->filterByTimetoalevinsdaysmin(array('min' => 12)); // WHERE TimetoAlevinsDaysMin >= 12
     * $query->filterByTimetoalevinsdaysmin(array('max' => 12)); // WHERE TimetoAlevinsDaysMin <= 12
     * </code>
     *
     * @param     mixed $timetoalevinsdaysmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByTimetoalevinsdaysmin($timetoalevinsdaysmin = null, $comparison = null)
    {
        if (is_array($timetoalevinsdaysmin)) {
            $useMinMax = false;
            if (isset($timetoalevinsdaysmin['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::TIMETOALEVINSDAYSMIN, $timetoalevinsdaysmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timetoalevinsdaysmin['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::TIMETOALEVINSDAYSMIN, $timetoalevinsdaysmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::TIMETOALEVINSDAYSMIN, $timetoalevinsdaysmin, $comparison);
    }

    /**
     * Filter the query on the TimetoAlevinsDaysMax column
     *
     * Example usage:
     * <code>
     * $query->filterByTimetoalevinsdaysmax(1234); // WHERE TimetoAlevinsDaysMax = 1234
     * $query->filterByTimetoalevinsdaysmax(array(12, 34)); // WHERE TimetoAlevinsDaysMax IN (12, 34)
     * $query->filterByTimetoalevinsdaysmax(array('min' => 12)); // WHERE TimetoAlevinsDaysMax >= 12
     * $query->filterByTimetoalevinsdaysmax(array('max' => 12)); // WHERE TimetoAlevinsDaysMax <= 12
     * </code>
     *
     * @param     mixed $timetoalevinsdaysmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByTimetoalevinsdaysmax($timetoalevinsdaysmax = null, $comparison = null)
    {
        if (is_array($timetoalevinsdaysmax)) {
            $useMinMax = false;
            if (isset($timetoalevinsdaysmax['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::TIMETOALEVINSDAYSMAX, $timetoalevinsdaysmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timetoalevinsdaysmax['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::TIMETOALEVINSDAYSMAX, $timetoalevinsdaysmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::TIMETOALEVINSDAYSMAX, $timetoalevinsdaysmax, $comparison);
    }

    /**
     * Filter the query on the TimetoAlevinsDaysDegMin column
     *
     * Example usage:
     * <code>
     * $query->filterByTimetoalevinsdaysdegmin(1234); // WHERE TimetoAlevinsDaysDegMin = 1234
     * $query->filterByTimetoalevinsdaysdegmin(array(12, 34)); // WHERE TimetoAlevinsDaysDegMin IN (12, 34)
     * $query->filterByTimetoalevinsdaysdegmin(array('min' => 12)); // WHERE TimetoAlevinsDaysDegMin >= 12
     * $query->filterByTimetoalevinsdaysdegmin(array('max' => 12)); // WHERE TimetoAlevinsDaysDegMin <= 12
     * </code>
     *
     * @param     mixed $timetoalevinsdaysdegmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByTimetoalevinsdaysdegmin($timetoalevinsdaysdegmin = null, $comparison = null)
    {
        if (is_array($timetoalevinsdaysdegmin)) {
            $useMinMax = false;
            if (isset($timetoalevinsdaysdegmin['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMIN, $timetoalevinsdaysdegmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timetoalevinsdaysdegmin['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMIN, $timetoalevinsdaysdegmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMIN, $timetoalevinsdaysdegmin, $comparison);
    }

    /**
     * Filter the query on the TimetoAlevinsDaysDegMax column
     *
     * Example usage:
     * <code>
     * $query->filterByTimetoalevinsdaysdegmax(1234); // WHERE TimetoAlevinsDaysDegMax = 1234
     * $query->filterByTimetoalevinsdaysdegmax(array(12, 34)); // WHERE TimetoAlevinsDaysDegMax IN (12, 34)
     * $query->filterByTimetoalevinsdaysdegmax(array('min' => 12)); // WHERE TimetoAlevinsDaysDegMax >= 12
     * $query->filterByTimetoalevinsdaysdegmax(array('max' => 12)); // WHERE TimetoAlevinsDaysDegMax <= 12
     * </code>
     *
     * @param     mixed $timetoalevinsdaysdegmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByTimetoalevinsdaysdegmax($timetoalevinsdaysdegmax = null, $comparison = null)
    {
        if (is_array($timetoalevinsdaysdegmax)) {
            $useMinMax = false;
            if (isset($timetoalevinsdaysdegmax['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMAX, $timetoalevinsdaysdegmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($timetoalevinsdaysdegmax['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMAX, $timetoalevinsdaysdegmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::TIMETOALEVINSDAYSDEGMAX, $timetoalevinsdaysdegmax, $comparison);
    }

    /**
     * Filter the query on the MortalityrateOrg column
     *
     * Example usage:
     * <code>
     * $query->filterByMortalityrateorg('fooValue');   // WHERE MortalityrateOrg = 'fooValue'
     * $query->filterByMortalityrateorg('%fooValue%'); // WHERE MortalityrateOrg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mortalityrateorg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByMortalityrateorg($mortalityrateorg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mortalityrateorg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mortalityrateorg)) {
                $mortalityrateorg = str_replace('*', '%', $mortalityrateorg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::MORTALITYRATEORG, $mortalityrateorg, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByMortalityratemin($mortalityratemin = null, $comparison = null)
    {
        if (is_array($mortalityratemin)) {
            $useMinMax = false;
            if (isset($mortalityratemin['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::MORTALITYRATEMIN, $mortalityratemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mortalityratemin['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::MORTALITYRATEMIN, $mortalityratemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::MORTALITYRATEMIN, $mortalityratemin, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByMortalityratemax($mortalityratemax = null, $comparison = null)
    {
        if (is_array($mortalityratemax)) {
            $useMinMax = false;
            if (isset($mortalityratemax['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::MORTALITYRATEMAX, $mortalityratemax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mortalityratemax['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::MORTALITYRATEMAX, $mortalityratemax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::MORTALITYRATEMAX, $mortalityratemax, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::GROWTHRATE, $growthrate, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByFcr($fcr = null, $comparison = null)
    {
        if (is_array($fcr)) {
            $useMinMax = false;
            if (isset($fcr['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::FCR, $fcr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fcr['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::FCR, $fcr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::FCR, $fcr, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByProductioncycle($productioncycle = null, $comparison = null)
    {
        if (is_array($productioncycle)) {
            $useMinMax = false;
            if (isset($productioncycle['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::PRODUCTIONCYCLE, $productioncycle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productioncycle['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::PRODUCTIONCYCLE, $productioncycle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::PRODUCTIONCYCLE, $productioncycle, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::UNITCYCLE, $unitcycle, $comparison);
    }

    /**
     * Filter the query on the ProductionYearOrg column
     *
     * Example usage:
     * <code>
     * $query->filterByProductionyearorg('fooValue');   // WHERE ProductionYearOrg = 'fooValue'
     * $query->filterByProductionyearorg('%fooValue%'); // WHERE ProductionYearOrg LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productionyearorg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByProductionyearorg($productionyearorg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productionyearorg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productionyearorg)) {
                $productionyearorg = str_replace('*', '%', $productionyearorg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::PRODUCTIONYEARORG, $productionyearorg, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByProductionyear($productionyear = null, $comparison = null)
    {
        if (is_array($productionyear)) {
            $useMinMax = false;
            if (isset($productionyear['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::PRODUCTIONYEAR, $productionyear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productionyear['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::PRODUCTIONYEAR, $productionyear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::PRODUCTIONYEAR, $productionyear, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::UNITYEAR, $unityear, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FrynurserysystemPeer::COMMENT, $comment, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::ENTERED, $entered, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::MODIFIED, $modified, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::EXPERT, $expert, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FrynurserysystemPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FrynurserysystemPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FrynurserysystemPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Frynurserysystem $frynurserysystem Object to remove from the list of results
     *
     * @return FrynurserysystemQuery The current query, for fluid interface
     */
    public function prune($frynurserysystem = null)
    {
        if ($frynurserysystem) {
            $this->addCond('pruneCond0', $this->getAliasedColName(FrynurserysystemPeer::AUTOCTR), $frynurserysystem->getAutoctr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(FrynurserysystemPeer::STOCKCODE), $frynurserysystem->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(FrynurserysystemPeer::MAINREF), $frynurserysystem->getMainref(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
