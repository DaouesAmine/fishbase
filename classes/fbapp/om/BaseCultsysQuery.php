<?php


/**
 * Base class that represents a query for the 'cultsys' table.
 *
 *
 *
 * @method CultsysQuery orderByCultcode($order = Criteria::ASC) Order by the CultCode column
 * @method CultsysQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method CultsysQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method CultsysQuery orderByCultsysrefno($order = Criteria::ASC) Order by the CultSysRefNo column
 * @method CultsysQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method CultsysQuery orderByNameoffarm($order = Criteria::ASC) Order by the NameofFarm column
 * @method CultsysQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method CultsysQuery orderByLatitude($order = Criteria::ASC) Order by the Latitude column
 * @method CultsysQuery orderByNs($order = Criteria::ASC) Order by the NS column
 * @method CultsysQuery orderByLongitude($order = Criteria::ASC) Order by the Longitude column
 * @method CultsysQuery orderByEw($order = Criteria::ASC) Order by the EW column
 * @method CultsysQuery orderByAltitude($order = Criteria::ASC) Order by the Altitude column
 * @method CultsysQuery orderByEnvironment($order = Criteria::ASC) Order by the Environment column
 * @method CultsysQuery orderByTypeofculture($order = Criteria::ASC) Order by the TypeofCulture column
 * @method CultsysQuery orderBySexoffish($order = Criteria::ASC) Order by the SexofFish column
 * @method CultsysQuery orderByCulturei($order = Criteria::ASC) Order by the CultureI column
 * @method CultsysQuery orderByCultureii($order = Criteria::ASC) Order by the CultureII column
 * @method CultsysQuery orderByUnitcycle($order = Criteria::ASC) Order by the UnitCycle column
 * @method CultsysQuery orderByProductionunits($order = Criteria::ASC) Order by the ProductionUnits column
 * @method CultsysQuery orderByArea($order = Criteria::ASC) Order by the Area column
 * @method CultsysQuery orderByAveragedepth($order = Criteria::ASC) Order by the AverageDepth column
 * @method CultsysQuery orderByVolume($order = Criteria::ASC) Order by the Volume column
 * @method CultsysQuery orderByMainwatersource($order = Criteria::ASC) Order by the MainWaterSource column
 * @method CultsysQuery orderBySuppwatersource($order = Criteria::ASC) Order by the SuppWaterSource column
 * @method CultsysQuery orderByTempmax($order = Criteria::ASC) Order by the TempMax column
 * @method CultsysQuery orderBySalinmax($order = Criteria::ASC) Order by the SalinMax column
 * @method CultsysQuery orderByPhmax($order = Criteria::ASC) Order by the pHMax column
 * @method CultsysQuery orderByOxygenmax($order = Criteria::ASC) Order by the OxygenMax column
 * @method CultsysQuery orderBySaturationmax($order = Criteria::ASC) Order by the SaturationMax column
 * @method CultsysQuery orderByAlcalinitymax($order = Criteria::ASC) Order by the AlcalinityMax column
 * @method CultsysQuery orderByTempmin($order = Criteria::ASC) Order by the TempMin column
 * @method CultsysQuery orderBySalinmin($order = Criteria::ASC) Order by the SalinMin column
 * @method CultsysQuery orderByPhmin($order = Criteria::ASC) Order by the pHMin column
 * @method CultsysQuery orderByOxygenmin($order = Criteria::ASC) Order by the OxygenMin column
 * @method CultsysQuery orderBySaturationmin($order = Criteria::ASC) Order by the SaturationMin column
 * @method CultsysQuery orderByAlcalinitymin($order = Criteria::ASC) Order by the AlcalinityMin column
 * @method CultsysQuery orderByTempmod($order = Criteria::ASC) Order by the TempMod column
 * @method CultsysQuery orderBySalinmod($order = Criteria::ASC) Order by the SalinMod column
 * @method CultsysQuery orderByPhmod($order = Criteria::ASC) Order by the pHMod column
 * @method CultsysQuery orderByOxygenmod($order = Criteria::ASC) Order by the OxygenMod column
 * @method CultsysQuery orderBySaturationmod($order = Criteria::ASC) Order by the SaturationMod column
 * @method CultsysQuery orderByAlcalinitymod($order = Criteria::ASC) Order by the AlcalinityMod column
 * @method CultsysQuery orderByFoodi($order = Criteria::ASC) Order by the FoodI column
 * @method CultsysQuery orderByFeedquality($order = Criteria::ASC) Order by the FeedQuality column
 * @method CultsysQuery orderByFeedtotal($order = Criteria::ASC) Order by the FeedTotal column
 * @method CultsysQuery orderByFeedtype($order = Criteria::ASC) Order by the FeedType column
 * @method CultsysQuery orderByFeedquanity($order = Criteria::ASC) Order by the FeedQuanity column
 * @method CultsysQuery orderByN($order = Criteria::ASC) Order by the N column
 * @method CultsysQuery orderByNunit($order = Criteria::ASC) Order by the NUnit column
 * @method CultsysQuery orderByP($order = Criteria::ASC) Order by the P column
 * @method CultsysQuery orderByPunit($order = Criteria::ASC) Order by the PUnit column
 * @method CultsysQuery orderByProductionperiod($order = Criteria::ASC) Order by the ProductionPeriod column
 * @method CultsysQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method CultsysQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method CultsysQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method CultsysQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method CultsysQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method CultsysQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method CultsysQuery orderByDescribecult($order = Criteria::ASC) Order by the DescribeCult column
 * @method CultsysQuery orderByDescribefood($order = Criteria::ASC) Order by the DescribeFood column
 * @method CultsysQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method CultsysQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method CultsysQuery groupByCultcode() Group by the CultCode column
 * @method CultsysQuery groupByStockcode() Group by the StockCode column
 * @method CultsysQuery groupBySpeccode() Group by the SpecCode column
 * @method CultsysQuery groupByCultsysrefno() Group by the CultSysRefNo column
 * @method CultsysQuery groupByCCode() Group by the C_Code column
 * @method CultsysQuery groupByNameoffarm() Group by the NameofFarm column
 * @method CultsysQuery groupByYear() Group by the Year column
 * @method CultsysQuery groupByLatitude() Group by the Latitude column
 * @method CultsysQuery groupByNs() Group by the NS column
 * @method CultsysQuery groupByLongitude() Group by the Longitude column
 * @method CultsysQuery groupByEw() Group by the EW column
 * @method CultsysQuery groupByAltitude() Group by the Altitude column
 * @method CultsysQuery groupByEnvironment() Group by the Environment column
 * @method CultsysQuery groupByTypeofculture() Group by the TypeofCulture column
 * @method CultsysQuery groupBySexoffish() Group by the SexofFish column
 * @method CultsysQuery groupByCulturei() Group by the CultureI column
 * @method CultsysQuery groupByCultureii() Group by the CultureII column
 * @method CultsysQuery groupByUnitcycle() Group by the UnitCycle column
 * @method CultsysQuery groupByProductionunits() Group by the ProductionUnits column
 * @method CultsysQuery groupByArea() Group by the Area column
 * @method CultsysQuery groupByAveragedepth() Group by the AverageDepth column
 * @method CultsysQuery groupByVolume() Group by the Volume column
 * @method CultsysQuery groupByMainwatersource() Group by the MainWaterSource column
 * @method CultsysQuery groupBySuppwatersource() Group by the SuppWaterSource column
 * @method CultsysQuery groupByTempmax() Group by the TempMax column
 * @method CultsysQuery groupBySalinmax() Group by the SalinMax column
 * @method CultsysQuery groupByPhmax() Group by the pHMax column
 * @method CultsysQuery groupByOxygenmax() Group by the OxygenMax column
 * @method CultsysQuery groupBySaturationmax() Group by the SaturationMax column
 * @method CultsysQuery groupByAlcalinitymax() Group by the AlcalinityMax column
 * @method CultsysQuery groupByTempmin() Group by the TempMin column
 * @method CultsysQuery groupBySalinmin() Group by the SalinMin column
 * @method CultsysQuery groupByPhmin() Group by the pHMin column
 * @method CultsysQuery groupByOxygenmin() Group by the OxygenMin column
 * @method CultsysQuery groupBySaturationmin() Group by the SaturationMin column
 * @method CultsysQuery groupByAlcalinitymin() Group by the AlcalinityMin column
 * @method CultsysQuery groupByTempmod() Group by the TempMod column
 * @method CultsysQuery groupBySalinmod() Group by the SalinMod column
 * @method CultsysQuery groupByPhmod() Group by the pHMod column
 * @method CultsysQuery groupByOxygenmod() Group by the OxygenMod column
 * @method CultsysQuery groupBySaturationmod() Group by the SaturationMod column
 * @method CultsysQuery groupByAlcalinitymod() Group by the AlcalinityMod column
 * @method CultsysQuery groupByFoodi() Group by the FoodI column
 * @method CultsysQuery groupByFeedquality() Group by the FeedQuality column
 * @method CultsysQuery groupByFeedtotal() Group by the FeedTotal column
 * @method CultsysQuery groupByFeedtype() Group by the FeedType column
 * @method CultsysQuery groupByFeedquanity() Group by the FeedQuanity column
 * @method CultsysQuery groupByN() Group by the N column
 * @method CultsysQuery groupByNunit() Group by the NUnit column
 * @method CultsysQuery groupByP() Group by the P column
 * @method CultsysQuery groupByPunit() Group by the PUnit column
 * @method CultsysQuery groupByProductionperiod() Group by the ProductionPeriod column
 * @method CultsysQuery groupByEntered() Group by the Entered column
 * @method CultsysQuery groupByDateentered() Group by the DateEntered column
 * @method CultsysQuery groupByModified() Group by the Modified column
 * @method CultsysQuery groupByDatemodified() Group by the DateModified column
 * @method CultsysQuery groupByExpert() Group by the Expert column
 * @method CultsysQuery groupByDatechecked() Group by the DateChecked column
 * @method CultsysQuery groupByDescribecult() Group by the DescribeCult column
 * @method CultsysQuery groupByDescribefood() Group by the DescribeFood column
 * @method CultsysQuery groupByComments() Group by the Comments column
 * @method CultsysQuery groupByTs() Group by the TS column
 *
 * @method CultsysQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CultsysQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CultsysQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Cultsys findOne(PropelPDO $con = null) Return the first Cultsys matching the query
 * @method Cultsys findOneOrCreate(PropelPDO $con = null) Return the first Cultsys matching the query, or a new Cultsys object populated from the query conditions when no match is found
 *
 * @method Cultsys findOneByCultcode(int $CultCode) Return the first Cultsys filtered by the CultCode column
 * @method Cultsys findOneByStockcode(int $StockCode) Return the first Cultsys filtered by the StockCode column
 * @method Cultsys findOneBySpeccode(int $SpecCode) Return the first Cultsys filtered by the SpecCode column
 * @method Cultsys findOneByCultsysrefno(int $CultSysRefNo) Return the first Cultsys filtered by the CultSysRefNo column
 * @method Cultsys findOneByCCode(string $C_Code) Return the first Cultsys filtered by the C_Code column
 * @method Cultsys findOneByNameoffarm(string $NameofFarm) Return the first Cultsys filtered by the NameofFarm column
 * @method Cultsys findOneByYear(int $Year) Return the first Cultsys filtered by the Year column
 * @method Cultsys findOneByLatitude(double $Latitude) Return the first Cultsys filtered by the Latitude column
 * @method Cultsys findOneByNs(string $NS) Return the first Cultsys filtered by the NS column
 * @method Cultsys findOneByLongitude(double $Longitude) Return the first Cultsys filtered by the Longitude column
 * @method Cultsys findOneByEw(string $EW) Return the first Cultsys filtered by the EW column
 * @method Cultsys findOneByAltitude(int $Altitude) Return the first Cultsys filtered by the Altitude column
 * @method Cultsys findOneByEnvironment(string $Environment) Return the first Cultsys filtered by the Environment column
 * @method Cultsys findOneByTypeofculture(string $TypeofCulture) Return the first Cultsys filtered by the TypeofCulture column
 * @method Cultsys findOneBySexoffish(string $SexofFish) Return the first Cultsys filtered by the SexofFish column
 * @method Cultsys findOneByCulturei(string $CultureI) Return the first Cultsys filtered by the CultureI column
 * @method Cultsys findOneByCultureii(string $CultureII) Return the first Cultsys filtered by the CultureII column
 * @method Cultsys findOneByUnitcycle(string $UnitCycle) Return the first Cultsys filtered by the UnitCycle column
 * @method Cultsys findOneByProductionunits(int $ProductionUnits) Return the first Cultsys filtered by the ProductionUnits column
 * @method Cultsys findOneByArea(double $Area) Return the first Cultsys filtered by the Area column
 * @method Cultsys findOneByAveragedepth(double $AverageDepth) Return the first Cultsys filtered by the AverageDepth column
 * @method Cultsys findOneByVolume(double $Volume) Return the first Cultsys filtered by the Volume column
 * @method Cultsys findOneByMainwatersource(string $MainWaterSource) Return the first Cultsys filtered by the MainWaterSource column
 * @method Cultsys findOneBySuppwatersource(string $SuppWaterSource) Return the first Cultsys filtered by the SuppWaterSource column
 * @method Cultsys findOneByTempmax(double $TempMax) Return the first Cultsys filtered by the TempMax column
 * @method Cultsys findOneBySalinmax(double $SalinMax) Return the first Cultsys filtered by the SalinMax column
 * @method Cultsys findOneByPhmax(double $pHMax) Return the first Cultsys filtered by the pHMax column
 * @method Cultsys findOneByOxygenmax(double $OxygenMax) Return the first Cultsys filtered by the OxygenMax column
 * @method Cultsys findOneBySaturationmax(double $SaturationMax) Return the first Cultsys filtered by the SaturationMax column
 * @method Cultsys findOneByAlcalinitymax(double $AlcalinityMax) Return the first Cultsys filtered by the AlcalinityMax column
 * @method Cultsys findOneByTempmin(double $TempMin) Return the first Cultsys filtered by the TempMin column
 * @method Cultsys findOneBySalinmin(double $SalinMin) Return the first Cultsys filtered by the SalinMin column
 * @method Cultsys findOneByPhmin(double $pHMin) Return the first Cultsys filtered by the pHMin column
 * @method Cultsys findOneByOxygenmin(double $OxygenMin) Return the first Cultsys filtered by the OxygenMin column
 * @method Cultsys findOneBySaturationmin(double $SaturationMin) Return the first Cultsys filtered by the SaturationMin column
 * @method Cultsys findOneByAlcalinitymin(double $AlcalinityMin) Return the first Cultsys filtered by the AlcalinityMin column
 * @method Cultsys findOneByTempmod(double $TempMod) Return the first Cultsys filtered by the TempMod column
 * @method Cultsys findOneBySalinmod(double $SalinMod) Return the first Cultsys filtered by the SalinMod column
 * @method Cultsys findOneByPhmod(double $pHMod) Return the first Cultsys filtered by the pHMod column
 * @method Cultsys findOneByOxygenmod(double $OxygenMod) Return the first Cultsys filtered by the OxygenMod column
 * @method Cultsys findOneBySaturationmod(double $SaturationMod) Return the first Cultsys filtered by the SaturationMod column
 * @method Cultsys findOneByAlcalinitymod(double $AlcalinityMod) Return the first Cultsys filtered by the AlcalinityMod column
 * @method Cultsys findOneByFoodi(string $FoodI) Return the first Cultsys filtered by the FoodI column
 * @method Cultsys findOneByFeedquality(double $FeedQuality) Return the first Cultsys filtered by the FeedQuality column
 * @method Cultsys findOneByFeedtotal(double $FeedTotal) Return the first Cultsys filtered by the FeedTotal column
 * @method Cultsys findOneByFeedtype(string $FeedType) Return the first Cultsys filtered by the FeedType column
 * @method Cultsys findOneByFeedquanity(double $FeedQuanity) Return the first Cultsys filtered by the FeedQuanity column
 * @method Cultsys findOneByN(double $N) Return the first Cultsys filtered by the N column
 * @method Cultsys findOneByNunit(string $NUnit) Return the first Cultsys filtered by the NUnit column
 * @method Cultsys findOneByP(double $P) Return the first Cultsys filtered by the P column
 * @method Cultsys findOneByPunit(string $PUnit) Return the first Cultsys filtered by the PUnit column
 * @method Cultsys findOneByProductionperiod(int $ProductionPeriod) Return the first Cultsys filtered by the ProductionPeriod column
 * @method Cultsys findOneByEntered(int $Entered) Return the first Cultsys filtered by the Entered column
 * @method Cultsys findOneByDateentered(string $DateEntered) Return the first Cultsys filtered by the DateEntered column
 * @method Cultsys findOneByModified(int $Modified) Return the first Cultsys filtered by the Modified column
 * @method Cultsys findOneByDatemodified(string $DateModified) Return the first Cultsys filtered by the DateModified column
 * @method Cultsys findOneByExpert(int $Expert) Return the first Cultsys filtered by the Expert column
 * @method Cultsys findOneByDatechecked(string $DateChecked) Return the first Cultsys filtered by the DateChecked column
 * @method Cultsys findOneByDescribecult(string $DescribeCult) Return the first Cultsys filtered by the DescribeCult column
 * @method Cultsys findOneByDescribefood(string $DescribeFood) Return the first Cultsys filtered by the DescribeFood column
 * @method Cultsys findOneByComments(string $Comments) Return the first Cultsys filtered by the Comments column
 * @method Cultsys findOneByTs(string $TS) Return the first Cultsys filtered by the TS column
 *
 * @method array findByCultcode(int $CultCode) Return Cultsys objects filtered by the CultCode column
 * @method array findByStockcode(int $StockCode) Return Cultsys objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Cultsys objects filtered by the SpecCode column
 * @method array findByCultsysrefno(int $CultSysRefNo) Return Cultsys objects filtered by the CultSysRefNo column
 * @method array findByCCode(string $C_Code) Return Cultsys objects filtered by the C_Code column
 * @method array findByNameoffarm(string $NameofFarm) Return Cultsys objects filtered by the NameofFarm column
 * @method array findByYear(int $Year) Return Cultsys objects filtered by the Year column
 * @method array findByLatitude(double $Latitude) Return Cultsys objects filtered by the Latitude column
 * @method array findByNs(string $NS) Return Cultsys objects filtered by the NS column
 * @method array findByLongitude(double $Longitude) Return Cultsys objects filtered by the Longitude column
 * @method array findByEw(string $EW) Return Cultsys objects filtered by the EW column
 * @method array findByAltitude(int $Altitude) Return Cultsys objects filtered by the Altitude column
 * @method array findByEnvironment(string $Environment) Return Cultsys objects filtered by the Environment column
 * @method array findByTypeofculture(string $TypeofCulture) Return Cultsys objects filtered by the TypeofCulture column
 * @method array findBySexoffish(string $SexofFish) Return Cultsys objects filtered by the SexofFish column
 * @method array findByCulturei(string $CultureI) Return Cultsys objects filtered by the CultureI column
 * @method array findByCultureii(string $CultureII) Return Cultsys objects filtered by the CultureII column
 * @method array findByUnitcycle(string $UnitCycle) Return Cultsys objects filtered by the UnitCycle column
 * @method array findByProductionunits(int $ProductionUnits) Return Cultsys objects filtered by the ProductionUnits column
 * @method array findByArea(double $Area) Return Cultsys objects filtered by the Area column
 * @method array findByAveragedepth(double $AverageDepth) Return Cultsys objects filtered by the AverageDepth column
 * @method array findByVolume(double $Volume) Return Cultsys objects filtered by the Volume column
 * @method array findByMainwatersource(string $MainWaterSource) Return Cultsys objects filtered by the MainWaterSource column
 * @method array findBySuppwatersource(string $SuppWaterSource) Return Cultsys objects filtered by the SuppWaterSource column
 * @method array findByTempmax(double $TempMax) Return Cultsys objects filtered by the TempMax column
 * @method array findBySalinmax(double $SalinMax) Return Cultsys objects filtered by the SalinMax column
 * @method array findByPhmax(double $pHMax) Return Cultsys objects filtered by the pHMax column
 * @method array findByOxygenmax(double $OxygenMax) Return Cultsys objects filtered by the OxygenMax column
 * @method array findBySaturationmax(double $SaturationMax) Return Cultsys objects filtered by the SaturationMax column
 * @method array findByAlcalinitymax(double $AlcalinityMax) Return Cultsys objects filtered by the AlcalinityMax column
 * @method array findByTempmin(double $TempMin) Return Cultsys objects filtered by the TempMin column
 * @method array findBySalinmin(double $SalinMin) Return Cultsys objects filtered by the SalinMin column
 * @method array findByPhmin(double $pHMin) Return Cultsys objects filtered by the pHMin column
 * @method array findByOxygenmin(double $OxygenMin) Return Cultsys objects filtered by the OxygenMin column
 * @method array findBySaturationmin(double $SaturationMin) Return Cultsys objects filtered by the SaturationMin column
 * @method array findByAlcalinitymin(double $AlcalinityMin) Return Cultsys objects filtered by the AlcalinityMin column
 * @method array findByTempmod(double $TempMod) Return Cultsys objects filtered by the TempMod column
 * @method array findBySalinmod(double $SalinMod) Return Cultsys objects filtered by the SalinMod column
 * @method array findByPhmod(double $pHMod) Return Cultsys objects filtered by the pHMod column
 * @method array findByOxygenmod(double $OxygenMod) Return Cultsys objects filtered by the OxygenMod column
 * @method array findBySaturationmod(double $SaturationMod) Return Cultsys objects filtered by the SaturationMod column
 * @method array findByAlcalinitymod(double $AlcalinityMod) Return Cultsys objects filtered by the AlcalinityMod column
 * @method array findByFoodi(string $FoodI) Return Cultsys objects filtered by the FoodI column
 * @method array findByFeedquality(double $FeedQuality) Return Cultsys objects filtered by the FeedQuality column
 * @method array findByFeedtotal(double $FeedTotal) Return Cultsys objects filtered by the FeedTotal column
 * @method array findByFeedtype(string $FeedType) Return Cultsys objects filtered by the FeedType column
 * @method array findByFeedquanity(double $FeedQuanity) Return Cultsys objects filtered by the FeedQuanity column
 * @method array findByN(double $N) Return Cultsys objects filtered by the N column
 * @method array findByNunit(string $NUnit) Return Cultsys objects filtered by the NUnit column
 * @method array findByP(double $P) Return Cultsys objects filtered by the P column
 * @method array findByPunit(string $PUnit) Return Cultsys objects filtered by the PUnit column
 * @method array findByProductionperiod(int $ProductionPeriod) Return Cultsys objects filtered by the ProductionPeriod column
 * @method array findByEntered(int $Entered) Return Cultsys objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Cultsys objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Cultsys objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Cultsys objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Cultsys objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Cultsys objects filtered by the DateChecked column
 * @method array findByDescribecult(string $DescribeCult) Return Cultsys objects filtered by the DescribeCult column
 * @method array findByDescribefood(string $DescribeFood) Return Cultsys objects filtered by the DescribeFood column
 * @method array findByComments(string $Comments) Return Cultsys objects filtered by the Comments column
 * @method array findByTs(string $TS) Return Cultsys objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCultsysQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCultsysQuery object.
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
            $modelName = 'Cultsys';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CultsysQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CultsysQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CultsysQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CultsysQuery) {
            return $criteria;
        }
        $query = new CultsysQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$StockCode, $CultSysRefNo, $Environment]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Cultsys|Cultsys[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CultsysPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CultsysPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cultsys A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `CultCode`, `StockCode`, `SpecCode`, `CultSysRefNo`, `C_Code`, `NameofFarm`, `Year`, `Latitude`, `NS`, `Longitude`, `EW`, `Altitude`, `Environment`, `TypeofCulture`, `SexofFish`, `CultureI`, `CultureII`, `UnitCycle`, `ProductionUnits`, `Area`, `AverageDepth`, `Volume`, `MainWaterSource`, `SuppWaterSource`, `TempMax`, `SalinMax`, `pHMax`, `OxygenMax`, `SaturationMax`, `AlcalinityMax`, `TempMin`, `SalinMin`, `pHMin`, `OxygenMin`, `SaturationMin`, `AlcalinityMin`, `TempMod`, `SalinMod`, `pHMod`, `OxygenMod`, `SaturationMod`, `AlcalinityMod`, `FoodI`, `FeedQuality`, `FeedTotal`, `FeedType`, `FeedQuanity`, `N`, `NUnit`, `P`, `PUnit`, `ProductionPeriod`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `DescribeCult`, `DescribeFood`, `Comments`, `TS` FROM `cultsys` WHERE `StockCode` = :p0 AND `CultSysRefNo` = :p1 AND `Environment` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Cultsys();
            $obj->hydrate($row);
            CultsysPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Cultsys|Cultsys[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cultsys[]|mixed the list of results, formatted by the current formatter
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CultsysPeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CultsysPeer::CULTSYSREFNO, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CultsysPeer::ENVIRONMENT, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CultsysPeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CultsysPeer::CULTSYSREFNO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CultsysPeer::ENVIRONMENT, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the CultCode column
     *
     * Example usage:
     * <code>
     * $query->filterByCultcode(1234); // WHERE CultCode = 1234
     * $query->filterByCultcode(array(12, 34)); // WHERE CultCode IN (12, 34)
     * $query->filterByCultcode(array('min' => 12)); // WHERE CultCode >= 12
     * $query->filterByCultcode(array('max' => 12)); // WHERE CultCode <= 12
     * </code>
     *
     * @param     mixed $cultcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByCultcode($cultcode = null, $comparison = null)
    {
        if (is_array($cultcode)) {
            $useMinMax = false;
            if (isset($cultcode['min'])) {
                $this->addUsingAlias(CultsysPeer::CULTCODE, $cultcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cultcode['max'])) {
                $this->addUsingAlias(CultsysPeer::CULTCODE, $cultcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::CULTCODE, $cultcode, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(CultsysPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(CultsysPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(CultsysPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(CultsysPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the CultSysRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByCultsysrefno(1234); // WHERE CultSysRefNo = 1234
     * $query->filterByCultsysrefno(array(12, 34)); // WHERE CultSysRefNo IN (12, 34)
     * $query->filterByCultsysrefno(array('min' => 12)); // WHERE CultSysRefNo >= 12
     * $query->filterByCultsysrefno(array('max' => 12)); // WHERE CultSysRefNo <= 12
     * </code>
     *
     * @param     mixed $cultsysrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByCultsysrefno($cultsysrefno = null, $comparison = null)
    {
        if (is_array($cultsysrefno)) {
            $useMinMax = false;
            if (isset($cultsysrefno['min'])) {
                $this->addUsingAlias(CultsysPeer::CULTSYSREFNO, $cultsysrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cultsysrefno['max'])) {
                $this->addUsingAlias(CultsysPeer::CULTSYSREFNO, $cultsysrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::CULTSYSREFNO, $cultsysrefno, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CultsysPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the NameofFarm column
     *
     * Example usage:
     * <code>
     * $query->filterByNameoffarm('fooValue');   // WHERE NameofFarm = 'fooValue'
     * $query->filterByNameoffarm('%fooValue%'); // WHERE NameofFarm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nameoffarm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByNameoffarm($nameoffarm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nameoffarm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nameoffarm)) {
                $nameoffarm = str_replace('*', '%', $nameoffarm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultsysPeer::NAMEOFFARM, $nameoffarm, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(CultsysPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(CultsysPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the Latitude column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitude(1234); // WHERE Latitude = 1234
     * $query->filterByLatitude(array(12, 34)); // WHERE Latitude IN (12, 34)
     * $query->filterByLatitude(array('min' => 12)); // WHERE Latitude >= 12
     * $query->filterByLatitude(array('max' => 12)); // WHERE Latitude <= 12
     * </code>
     *
     * @param     mixed $latitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByLatitude($latitude = null, $comparison = null)
    {
        if (is_array($latitude)) {
            $useMinMax = false;
            if (isset($latitude['min'])) {
                $this->addUsingAlias(CultsysPeer::LATITUDE, $latitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latitude['max'])) {
                $this->addUsingAlias(CultsysPeer::LATITUDE, $latitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::LATITUDE, $latitude, $comparison);
    }

    /**
     * Filter the query on the NS column
     *
     * Example usage:
     * <code>
     * $query->filterByNs('fooValue');   // WHERE NS = 'fooValue'
     * $query->filterByNs('%fooValue%'); // WHERE NS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ns The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByNs($ns = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ns)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ns)) {
                $ns = str_replace('*', '%', $ns);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultsysPeer::NS, $ns, $comparison);
    }

    /**
     * Filter the query on the Longitude column
     *
     * Example usage:
     * <code>
     * $query->filterByLongitude(1234); // WHERE Longitude = 1234
     * $query->filterByLongitude(array(12, 34)); // WHERE Longitude IN (12, 34)
     * $query->filterByLongitude(array('min' => 12)); // WHERE Longitude >= 12
     * $query->filterByLongitude(array('max' => 12)); // WHERE Longitude <= 12
     * </code>
     *
     * @param     mixed $longitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByLongitude($longitude = null, $comparison = null)
    {
        if (is_array($longitude)) {
            $useMinMax = false;
            if (isset($longitude['min'])) {
                $this->addUsingAlias(CultsysPeer::LONGITUDE, $longitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($longitude['max'])) {
                $this->addUsingAlias(CultsysPeer::LONGITUDE, $longitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::LONGITUDE, $longitude, $comparison);
    }

    /**
     * Filter the query on the EW column
     *
     * Example usage:
     * <code>
     * $query->filterByEw('fooValue');   // WHERE EW = 'fooValue'
     * $query->filterByEw('%fooValue%'); // WHERE EW LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ew The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByEw($ew = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ew)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ew)) {
                $ew = str_replace('*', '%', $ew);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultsysPeer::EW, $ew, $comparison);
    }

    /**
     * Filter the query on the Altitude column
     *
     * Example usage:
     * <code>
     * $query->filterByAltitude(1234); // WHERE Altitude = 1234
     * $query->filterByAltitude(array(12, 34)); // WHERE Altitude IN (12, 34)
     * $query->filterByAltitude(array('min' => 12)); // WHERE Altitude >= 12
     * $query->filterByAltitude(array('max' => 12)); // WHERE Altitude <= 12
     * </code>
     *
     * @param     mixed $altitude The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByAltitude($altitude = null, $comparison = null)
    {
        if (is_array($altitude)) {
            $useMinMax = false;
            if (isset($altitude['min'])) {
                $this->addUsingAlias(CultsysPeer::ALTITUDE, $altitude['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($altitude['max'])) {
                $this->addUsingAlias(CultsysPeer::ALTITUDE, $altitude['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::ALTITUDE, $altitude, $comparison);
    }

    /**
     * Filter the query on the Environment column
     *
     * Example usage:
     * <code>
     * $query->filterByEnvironment('fooValue');   // WHERE Environment = 'fooValue'
     * $query->filterByEnvironment('%fooValue%'); // WHERE Environment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $environment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByEnvironment($environment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($environment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $environment)) {
                $environment = str_replace('*', '%', $environment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultsysPeer::ENVIRONMENT, $environment, $comparison);
    }

    /**
     * Filter the query on the TypeofCulture column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeofculture('fooValue');   // WHERE TypeofCulture = 'fooValue'
     * $query->filterByTypeofculture('%fooValue%'); // WHERE TypeofCulture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeofculture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByTypeofculture($typeofculture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeofculture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeofculture)) {
                $typeofculture = str_replace('*', '%', $typeofculture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultsysPeer::TYPEOFCULTURE, $typeofculture, $comparison);
    }

    /**
     * Filter the query on the SexofFish column
     *
     * Example usage:
     * <code>
     * $query->filterBySexoffish('fooValue');   // WHERE SexofFish = 'fooValue'
     * $query->filterBySexoffish('%fooValue%'); // WHERE SexofFish LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sexoffish The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterBySexoffish($sexoffish = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sexoffish)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sexoffish)) {
                $sexoffish = str_replace('*', '%', $sexoffish);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultsysPeer::SEXOFFISH, $sexoffish, $comparison);
    }

    /**
     * Filter the query on the CultureI column
     *
     * Example usage:
     * <code>
     * $query->filterByCulturei('fooValue');   // WHERE CultureI = 'fooValue'
     * $query->filterByCulturei('%fooValue%'); // WHERE CultureI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $culturei The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByCulturei($culturei = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($culturei)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $culturei)) {
                $culturei = str_replace('*', '%', $culturei);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultsysPeer::CULTUREI, $culturei, $comparison);
    }

    /**
     * Filter the query on the CultureII column
     *
     * Example usage:
     * <code>
     * $query->filterByCultureii('fooValue');   // WHERE CultureII = 'fooValue'
     * $query->filterByCultureii('%fooValue%'); // WHERE CultureII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cultureii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByCultureii($cultureii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cultureii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cultureii)) {
                $cultureii = str_replace('*', '%', $cultureii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultsysPeer::CULTUREII, $cultureii, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CultsysPeer::UNITCYCLE, $unitcycle, $comparison);
    }

    /**
     * Filter the query on the ProductionUnits column
     *
     * Example usage:
     * <code>
     * $query->filterByProductionunits(1234); // WHERE ProductionUnits = 1234
     * $query->filterByProductionunits(array(12, 34)); // WHERE ProductionUnits IN (12, 34)
     * $query->filterByProductionunits(array('min' => 12)); // WHERE ProductionUnits >= 12
     * $query->filterByProductionunits(array('max' => 12)); // WHERE ProductionUnits <= 12
     * </code>
     *
     * @param     mixed $productionunits The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByProductionunits($productionunits = null, $comparison = null)
    {
        if (is_array($productionunits)) {
            $useMinMax = false;
            if (isset($productionunits['min'])) {
                $this->addUsingAlias(CultsysPeer::PRODUCTIONUNITS, $productionunits['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productionunits['max'])) {
                $this->addUsingAlias(CultsysPeer::PRODUCTIONUNITS, $productionunits['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::PRODUCTIONUNITS, $productionunits, $comparison);
    }

    /**
     * Filter the query on the Area column
     *
     * Example usage:
     * <code>
     * $query->filterByArea(1234); // WHERE Area = 1234
     * $query->filterByArea(array(12, 34)); // WHERE Area IN (12, 34)
     * $query->filterByArea(array('min' => 12)); // WHERE Area >= 12
     * $query->filterByArea(array('max' => 12)); // WHERE Area <= 12
     * </code>
     *
     * @param     mixed $area The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByArea($area = null, $comparison = null)
    {
        if (is_array($area)) {
            $useMinMax = false;
            if (isset($area['min'])) {
                $this->addUsingAlias(CultsysPeer::AREA, $area['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($area['max'])) {
                $this->addUsingAlias(CultsysPeer::AREA, $area['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::AREA, $area, $comparison);
    }

    /**
     * Filter the query on the AverageDepth column
     *
     * Example usage:
     * <code>
     * $query->filterByAveragedepth(1234); // WHERE AverageDepth = 1234
     * $query->filterByAveragedepth(array(12, 34)); // WHERE AverageDepth IN (12, 34)
     * $query->filterByAveragedepth(array('min' => 12)); // WHERE AverageDepth >= 12
     * $query->filterByAveragedepth(array('max' => 12)); // WHERE AverageDepth <= 12
     * </code>
     *
     * @param     mixed $averagedepth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByAveragedepth($averagedepth = null, $comparison = null)
    {
        if (is_array($averagedepth)) {
            $useMinMax = false;
            if (isset($averagedepth['min'])) {
                $this->addUsingAlias(CultsysPeer::AVERAGEDEPTH, $averagedepth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($averagedepth['max'])) {
                $this->addUsingAlias(CultsysPeer::AVERAGEDEPTH, $averagedepth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::AVERAGEDEPTH, $averagedepth, $comparison);
    }

    /**
     * Filter the query on the Volume column
     *
     * Example usage:
     * <code>
     * $query->filterByVolume(1234); // WHERE Volume = 1234
     * $query->filterByVolume(array(12, 34)); // WHERE Volume IN (12, 34)
     * $query->filterByVolume(array('min' => 12)); // WHERE Volume >= 12
     * $query->filterByVolume(array('max' => 12)); // WHERE Volume <= 12
     * </code>
     *
     * @param     mixed $volume The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByVolume($volume = null, $comparison = null)
    {
        if (is_array($volume)) {
            $useMinMax = false;
            if (isset($volume['min'])) {
                $this->addUsingAlias(CultsysPeer::VOLUME, $volume['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($volume['max'])) {
                $this->addUsingAlias(CultsysPeer::VOLUME, $volume['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::VOLUME, $volume, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CultsysPeer::MAINWATERSOURCE, $mainwatersource, $comparison);
    }

    /**
     * Filter the query on the SuppWaterSource column
     *
     * Example usage:
     * <code>
     * $query->filterBySuppwatersource('fooValue');   // WHERE SuppWaterSource = 'fooValue'
     * $query->filterBySuppwatersource('%fooValue%'); // WHERE SuppWaterSource LIKE '%fooValue%'
     * </code>
     *
     * @param     string $suppwatersource The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterBySuppwatersource($suppwatersource = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($suppwatersource)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $suppwatersource)) {
                $suppwatersource = str_replace('*', '%', $suppwatersource);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultsysPeer::SUPPWATERSOURCE, $suppwatersource, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByTempmax($tempmax = null, $comparison = null)
    {
        if (is_array($tempmax)) {
            $useMinMax = false;
            if (isset($tempmax['min'])) {
                $this->addUsingAlias(CultsysPeer::TEMPMAX, $tempmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmax['max'])) {
                $this->addUsingAlias(CultsysPeer::TEMPMAX, $tempmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::TEMPMAX, $tempmax, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterBySalinmax($salinmax = null, $comparison = null)
    {
        if (is_array($salinmax)) {
            $useMinMax = false;
            if (isset($salinmax['min'])) {
                $this->addUsingAlias(CultsysPeer::SALINMAX, $salinmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinmax['max'])) {
                $this->addUsingAlias(CultsysPeer::SALINMAX, $salinmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::SALINMAX, $salinmax, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByPhmax($phmax = null, $comparison = null)
    {
        if (is_array($phmax)) {
            $useMinMax = false;
            if (isset($phmax['min'])) {
                $this->addUsingAlias(CultsysPeer::PHMAX, $phmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmax['max'])) {
                $this->addUsingAlias(CultsysPeer::PHMAX, $phmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::PHMAX, $phmax, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByOxygenmax($oxygenmax = null, $comparison = null)
    {
        if (is_array($oxygenmax)) {
            $useMinMax = false;
            if (isset($oxygenmax['min'])) {
                $this->addUsingAlias(CultsysPeer::OXYGENMAX, $oxygenmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmax['max'])) {
                $this->addUsingAlias(CultsysPeer::OXYGENMAX, $oxygenmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::OXYGENMAX, $oxygenmax, $comparison);
    }

    /**
     * Filter the query on the SaturationMax column
     *
     * Example usage:
     * <code>
     * $query->filterBySaturationmax(1234); // WHERE SaturationMax = 1234
     * $query->filterBySaturationmax(array(12, 34)); // WHERE SaturationMax IN (12, 34)
     * $query->filterBySaturationmax(array('min' => 12)); // WHERE SaturationMax >= 12
     * $query->filterBySaturationmax(array('max' => 12)); // WHERE SaturationMax <= 12
     * </code>
     *
     * @param     mixed $saturationmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterBySaturationmax($saturationmax = null, $comparison = null)
    {
        if (is_array($saturationmax)) {
            $useMinMax = false;
            if (isset($saturationmax['min'])) {
                $this->addUsingAlias(CultsysPeer::SATURATIONMAX, $saturationmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saturationmax['max'])) {
                $this->addUsingAlias(CultsysPeer::SATURATIONMAX, $saturationmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::SATURATIONMAX, $saturationmax, $comparison);
    }

    /**
     * Filter the query on the AlcalinityMax column
     *
     * Example usage:
     * <code>
     * $query->filterByAlcalinitymax(1234); // WHERE AlcalinityMax = 1234
     * $query->filterByAlcalinitymax(array(12, 34)); // WHERE AlcalinityMax IN (12, 34)
     * $query->filterByAlcalinitymax(array('min' => 12)); // WHERE AlcalinityMax >= 12
     * $query->filterByAlcalinitymax(array('max' => 12)); // WHERE AlcalinityMax <= 12
     * </code>
     *
     * @param     mixed $alcalinitymax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByAlcalinitymax($alcalinitymax = null, $comparison = null)
    {
        if (is_array($alcalinitymax)) {
            $useMinMax = false;
            if (isset($alcalinitymax['min'])) {
                $this->addUsingAlias(CultsysPeer::ALCALINITYMAX, $alcalinitymax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($alcalinitymax['max'])) {
                $this->addUsingAlias(CultsysPeer::ALCALINITYMAX, $alcalinitymax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::ALCALINITYMAX, $alcalinitymax, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByTempmin($tempmin = null, $comparison = null)
    {
        if (is_array($tempmin)) {
            $useMinMax = false;
            if (isset($tempmin['min'])) {
                $this->addUsingAlias(CultsysPeer::TEMPMIN, $tempmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmin['max'])) {
                $this->addUsingAlias(CultsysPeer::TEMPMIN, $tempmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::TEMPMIN, $tempmin, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterBySalinmin($salinmin = null, $comparison = null)
    {
        if (is_array($salinmin)) {
            $useMinMax = false;
            if (isset($salinmin['min'])) {
                $this->addUsingAlias(CultsysPeer::SALINMIN, $salinmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinmin['max'])) {
                $this->addUsingAlias(CultsysPeer::SALINMIN, $salinmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::SALINMIN, $salinmin, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByPhmin($phmin = null, $comparison = null)
    {
        if (is_array($phmin)) {
            $useMinMax = false;
            if (isset($phmin['min'])) {
                $this->addUsingAlias(CultsysPeer::PHMIN, $phmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmin['max'])) {
                $this->addUsingAlias(CultsysPeer::PHMIN, $phmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::PHMIN, $phmin, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByOxygenmin($oxygenmin = null, $comparison = null)
    {
        if (is_array($oxygenmin)) {
            $useMinMax = false;
            if (isset($oxygenmin['min'])) {
                $this->addUsingAlias(CultsysPeer::OXYGENMIN, $oxygenmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmin['max'])) {
                $this->addUsingAlias(CultsysPeer::OXYGENMIN, $oxygenmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::OXYGENMIN, $oxygenmin, $comparison);
    }

    /**
     * Filter the query on the SaturationMin column
     *
     * Example usage:
     * <code>
     * $query->filterBySaturationmin(1234); // WHERE SaturationMin = 1234
     * $query->filterBySaturationmin(array(12, 34)); // WHERE SaturationMin IN (12, 34)
     * $query->filterBySaturationmin(array('min' => 12)); // WHERE SaturationMin >= 12
     * $query->filterBySaturationmin(array('max' => 12)); // WHERE SaturationMin <= 12
     * </code>
     *
     * @param     mixed $saturationmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterBySaturationmin($saturationmin = null, $comparison = null)
    {
        if (is_array($saturationmin)) {
            $useMinMax = false;
            if (isset($saturationmin['min'])) {
                $this->addUsingAlias(CultsysPeer::SATURATIONMIN, $saturationmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saturationmin['max'])) {
                $this->addUsingAlias(CultsysPeer::SATURATIONMIN, $saturationmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::SATURATIONMIN, $saturationmin, $comparison);
    }

    /**
     * Filter the query on the AlcalinityMin column
     *
     * Example usage:
     * <code>
     * $query->filterByAlcalinitymin(1234); // WHERE AlcalinityMin = 1234
     * $query->filterByAlcalinitymin(array(12, 34)); // WHERE AlcalinityMin IN (12, 34)
     * $query->filterByAlcalinitymin(array('min' => 12)); // WHERE AlcalinityMin >= 12
     * $query->filterByAlcalinitymin(array('max' => 12)); // WHERE AlcalinityMin <= 12
     * </code>
     *
     * @param     mixed $alcalinitymin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByAlcalinitymin($alcalinitymin = null, $comparison = null)
    {
        if (is_array($alcalinitymin)) {
            $useMinMax = false;
            if (isset($alcalinitymin['min'])) {
                $this->addUsingAlias(CultsysPeer::ALCALINITYMIN, $alcalinitymin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($alcalinitymin['max'])) {
                $this->addUsingAlias(CultsysPeer::ALCALINITYMIN, $alcalinitymin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::ALCALINITYMIN, $alcalinitymin, $comparison);
    }

    /**
     * Filter the query on the TempMod column
     *
     * Example usage:
     * <code>
     * $query->filterByTempmod(1234); // WHERE TempMod = 1234
     * $query->filterByTempmod(array(12, 34)); // WHERE TempMod IN (12, 34)
     * $query->filterByTempmod(array('min' => 12)); // WHERE TempMod >= 12
     * $query->filterByTempmod(array('max' => 12)); // WHERE TempMod <= 12
     * </code>
     *
     * @param     mixed $tempmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByTempmod($tempmod = null, $comparison = null)
    {
        if (is_array($tempmod)) {
            $useMinMax = false;
            if (isset($tempmod['min'])) {
                $this->addUsingAlias(CultsysPeer::TEMPMOD, $tempmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmod['max'])) {
                $this->addUsingAlias(CultsysPeer::TEMPMOD, $tempmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::TEMPMOD, $tempmod, $comparison);
    }

    /**
     * Filter the query on the SalinMod column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinmod(1234); // WHERE SalinMod = 1234
     * $query->filterBySalinmod(array(12, 34)); // WHERE SalinMod IN (12, 34)
     * $query->filterBySalinmod(array('min' => 12)); // WHERE SalinMod >= 12
     * $query->filterBySalinmod(array('max' => 12)); // WHERE SalinMod <= 12
     * </code>
     *
     * @param     mixed $salinmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterBySalinmod($salinmod = null, $comparison = null)
    {
        if (is_array($salinmod)) {
            $useMinMax = false;
            if (isset($salinmod['min'])) {
                $this->addUsingAlias(CultsysPeer::SALINMOD, $salinmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinmod['max'])) {
                $this->addUsingAlias(CultsysPeer::SALINMOD, $salinmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::SALINMOD, $salinmod, $comparison);
    }

    /**
     * Filter the query on the pHMod column
     *
     * Example usage:
     * <code>
     * $query->filterByPhmod(1234); // WHERE pHMod = 1234
     * $query->filterByPhmod(array(12, 34)); // WHERE pHMod IN (12, 34)
     * $query->filterByPhmod(array('min' => 12)); // WHERE pHMod >= 12
     * $query->filterByPhmod(array('max' => 12)); // WHERE pHMod <= 12
     * </code>
     *
     * @param     mixed $phmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByPhmod($phmod = null, $comparison = null)
    {
        if (is_array($phmod)) {
            $useMinMax = false;
            if (isset($phmod['min'])) {
                $this->addUsingAlias(CultsysPeer::PHMOD, $phmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmod['max'])) {
                $this->addUsingAlias(CultsysPeer::PHMOD, $phmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::PHMOD, $phmod, $comparison);
    }

    /**
     * Filter the query on the OxygenMod column
     *
     * Example usage:
     * <code>
     * $query->filterByOxygenmod(1234); // WHERE OxygenMod = 1234
     * $query->filterByOxygenmod(array(12, 34)); // WHERE OxygenMod IN (12, 34)
     * $query->filterByOxygenmod(array('min' => 12)); // WHERE OxygenMod >= 12
     * $query->filterByOxygenmod(array('max' => 12)); // WHERE OxygenMod <= 12
     * </code>
     *
     * @param     mixed $oxygenmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByOxygenmod($oxygenmod = null, $comparison = null)
    {
        if (is_array($oxygenmod)) {
            $useMinMax = false;
            if (isset($oxygenmod['min'])) {
                $this->addUsingAlias(CultsysPeer::OXYGENMOD, $oxygenmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmod['max'])) {
                $this->addUsingAlias(CultsysPeer::OXYGENMOD, $oxygenmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::OXYGENMOD, $oxygenmod, $comparison);
    }

    /**
     * Filter the query on the SaturationMod column
     *
     * Example usage:
     * <code>
     * $query->filterBySaturationmod(1234); // WHERE SaturationMod = 1234
     * $query->filterBySaturationmod(array(12, 34)); // WHERE SaturationMod IN (12, 34)
     * $query->filterBySaturationmod(array('min' => 12)); // WHERE SaturationMod >= 12
     * $query->filterBySaturationmod(array('max' => 12)); // WHERE SaturationMod <= 12
     * </code>
     *
     * @param     mixed $saturationmod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterBySaturationmod($saturationmod = null, $comparison = null)
    {
        if (is_array($saturationmod)) {
            $useMinMax = false;
            if (isset($saturationmod['min'])) {
                $this->addUsingAlias(CultsysPeer::SATURATIONMOD, $saturationmod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saturationmod['max'])) {
                $this->addUsingAlias(CultsysPeer::SATURATIONMOD, $saturationmod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::SATURATIONMOD, $saturationmod, $comparison);
    }

    /**
     * Filter the query on the AlcalinityMod column
     *
     * Example usage:
     * <code>
     * $query->filterByAlcalinitymod(1234); // WHERE AlcalinityMod = 1234
     * $query->filterByAlcalinitymod(array(12, 34)); // WHERE AlcalinityMod IN (12, 34)
     * $query->filterByAlcalinitymod(array('min' => 12)); // WHERE AlcalinityMod >= 12
     * $query->filterByAlcalinitymod(array('max' => 12)); // WHERE AlcalinityMod <= 12
     * </code>
     *
     * @param     mixed $alcalinitymod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByAlcalinitymod($alcalinitymod = null, $comparison = null)
    {
        if (is_array($alcalinitymod)) {
            $useMinMax = false;
            if (isset($alcalinitymod['min'])) {
                $this->addUsingAlias(CultsysPeer::ALCALINITYMOD, $alcalinitymod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($alcalinitymod['max'])) {
                $this->addUsingAlias(CultsysPeer::ALCALINITYMOD, $alcalinitymod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::ALCALINITYMOD, $alcalinitymod, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CultsysPeer::FOODI, $foodi, $comparison);
    }

    /**
     * Filter the query on the FeedQuality column
     *
     * Example usage:
     * <code>
     * $query->filterByFeedquality(1234); // WHERE FeedQuality = 1234
     * $query->filterByFeedquality(array(12, 34)); // WHERE FeedQuality IN (12, 34)
     * $query->filterByFeedquality(array('min' => 12)); // WHERE FeedQuality >= 12
     * $query->filterByFeedquality(array('max' => 12)); // WHERE FeedQuality <= 12
     * </code>
     *
     * @param     mixed $feedquality The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByFeedquality($feedquality = null, $comparison = null)
    {
        if (is_array($feedquality)) {
            $useMinMax = false;
            if (isset($feedquality['min'])) {
                $this->addUsingAlias(CultsysPeer::FEEDQUALITY, $feedquality['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($feedquality['max'])) {
                $this->addUsingAlias(CultsysPeer::FEEDQUALITY, $feedquality['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::FEEDQUALITY, $feedquality, $comparison);
    }

    /**
     * Filter the query on the FeedTotal column
     *
     * Example usage:
     * <code>
     * $query->filterByFeedtotal(1234); // WHERE FeedTotal = 1234
     * $query->filterByFeedtotal(array(12, 34)); // WHERE FeedTotal IN (12, 34)
     * $query->filterByFeedtotal(array('min' => 12)); // WHERE FeedTotal >= 12
     * $query->filterByFeedtotal(array('max' => 12)); // WHERE FeedTotal <= 12
     * </code>
     *
     * @param     mixed $feedtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByFeedtotal($feedtotal = null, $comparison = null)
    {
        if (is_array($feedtotal)) {
            $useMinMax = false;
            if (isset($feedtotal['min'])) {
                $this->addUsingAlias(CultsysPeer::FEEDTOTAL, $feedtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($feedtotal['max'])) {
                $this->addUsingAlias(CultsysPeer::FEEDTOTAL, $feedtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::FEEDTOTAL, $feedtotal, $comparison);
    }

    /**
     * Filter the query on the FeedType column
     *
     * Example usage:
     * <code>
     * $query->filterByFeedtype('fooValue');   // WHERE FeedType = 'fooValue'
     * $query->filterByFeedtype('%fooValue%'); // WHERE FeedType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $feedtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByFeedtype($feedtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($feedtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $feedtype)) {
                $feedtype = str_replace('*', '%', $feedtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultsysPeer::FEEDTYPE, $feedtype, $comparison);
    }

    /**
     * Filter the query on the FeedQuanity column
     *
     * Example usage:
     * <code>
     * $query->filterByFeedquanity(1234); // WHERE FeedQuanity = 1234
     * $query->filterByFeedquanity(array(12, 34)); // WHERE FeedQuanity IN (12, 34)
     * $query->filterByFeedquanity(array('min' => 12)); // WHERE FeedQuanity >= 12
     * $query->filterByFeedquanity(array('max' => 12)); // WHERE FeedQuanity <= 12
     * </code>
     *
     * @param     mixed $feedquanity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByFeedquanity($feedquanity = null, $comparison = null)
    {
        if (is_array($feedquanity)) {
            $useMinMax = false;
            if (isset($feedquanity['min'])) {
                $this->addUsingAlias(CultsysPeer::FEEDQUANITY, $feedquanity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($feedquanity['max'])) {
                $this->addUsingAlias(CultsysPeer::FEEDQUANITY, $feedquanity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::FEEDQUANITY, $feedquanity, $comparison);
    }

    /**
     * Filter the query on the N column
     *
     * Example usage:
     * <code>
     * $query->filterByN(1234); // WHERE N = 1234
     * $query->filterByN(array(12, 34)); // WHERE N IN (12, 34)
     * $query->filterByN(array('min' => 12)); // WHERE N >= 12
     * $query->filterByN(array('max' => 12)); // WHERE N <= 12
     * </code>
     *
     * @param     mixed $n The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByN($n = null, $comparison = null)
    {
        if (is_array($n)) {
            $useMinMax = false;
            if (isset($n['min'])) {
                $this->addUsingAlias(CultsysPeer::N, $n['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($n['max'])) {
                $this->addUsingAlias(CultsysPeer::N, $n['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::N, $n, $comparison);
    }

    /**
     * Filter the query on the NUnit column
     *
     * Example usage:
     * <code>
     * $query->filterByNunit('fooValue');   // WHERE NUnit = 'fooValue'
     * $query->filterByNunit('%fooValue%'); // WHERE NUnit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nunit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByNunit($nunit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nunit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nunit)) {
                $nunit = str_replace('*', '%', $nunit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultsysPeer::NUNIT, $nunit, $comparison);
    }

    /**
     * Filter the query on the P column
     *
     * Example usage:
     * <code>
     * $query->filterByP(1234); // WHERE P = 1234
     * $query->filterByP(array(12, 34)); // WHERE P IN (12, 34)
     * $query->filterByP(array('min' => 12)); // WHERE P >= 12
     * $query->filterByP(array('max' => 12)); // WHERE P <= 12
     * </code>
     *
     * @param     mixed $p The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByP($p = null, $comparison = null)
    {
        if (is_array($p)) {
            $useMinMax = false;
            if (isset($p['min'])) {
                $this->addUsingAlias(CultsysPeer::P, $p['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($p['max'])) {
                $this->addUsingAlias(CultsysPeer::P, $p['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::P, $p, $comparison);
    }

    /**
     * Filter the query on the PUnit column
     *
     * Example usage:
     * <code>
     * $query->filterByPunit('fooValue');   // WHERE PUnit = 'fooValue'
     * $query->filterByPunit('%fooValue%'); // WHERE PUnit LIKE '%fooValue%'
     * </code>
     *
     * @param     string $punit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByPunit($punit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($punit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $punit)) {
                $punit = str_replace('*', '%', $punit);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultsysPeer::PUNIT, $punit, $comparison);
    }

    /**
     * Filter the query on the ProductionPeriod column
     *
     * Example usage:
     * <code>
     * $query->filterByProductionperiod(1234); // WHERE ProductionPeriod = 1234
     * $query->filterByProductionperiod(array(12, 34)); // WHERE ProductionPeriod IN (12, 34)
     * $query->filterByProductionperiod(array('min' => 12)); // WHERE ProductionPeriod >= 12
     * $query->filterByProductionperiod(array('max' => 12)); // WHERE ProductionPeriod <= 12
     * </code>
     *
     * @param     mixed $productionperiod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByProductionperiod($productionperiod = null, $comparison = null)
    {
        if (is_array($productionperiod)) {
            $useMinMax = false;
            if (isset($productionperiod['min'])) {
                $this->addUsingAlias(CultsysPeer::PRODUCTIONPERIOD, $productionperiod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productionperiod['max'])) {
                $this->addUsingAlias(CultsysPeer::PRODUCTIONPERIOD, $productionperiod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::PRODUCTIONPERIOD, $productionperiod, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(CultsysPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(CultsysPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::ENTERED, $entered, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(CultsysPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(CultsysPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(CultsysPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(CultsysPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::MODIFIED, $modified, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(CultsysPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(CultsysPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(CultsysPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(CultsysPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::EXPERT, $expert, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(CultsysPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(CultsysPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the DescribeCult column
     *
     * Example usage:
     * <code>
     * $query->filterByDescribecult('fooValue');   // WHERE DescribeCult = 'fooValue'
     * $query->filterByDescribecult('%fooValue%'); // WHERE DescribeCult LIKE '%fooValue%'
     * </code>
     *
     * @param     string $describecult The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByDescribecult($describecult = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($describecult)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $describecult)) {
                $describecult = str_replace('*', '%', $describecult);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultsysPeer::DESCRIBECULT, $describecult, $comparison);
    }

    /**
     * Filter the query on the DescribeFood column
     *
     * Example usage:
     * <code>
     * $query->filterByDescribefood('fooValue');   // WHERE DescribeFood = 'fooValue'
     * $query->filterByDescribefood('%fooValue%'); // WHERE DescribeFood LIKE '%fooValue%'
     * </code>
     *
     * @param     string $describefood The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByDescribefood($describefood = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($describefood)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $describefood)) {
                $describefood = str_replace('*', '%', $describefood);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultsysPeer::DESCRIBEFOOD, $describefood, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CultsysPeer::COMMENTS, $comments, $comparison);
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
     * @return CultsysQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(CultsysPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(CultsysPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultsysPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Cultsys $cultsys Object to remove from the list of results
     *
     * @return CultsysQuery The current query, for fluid interface
     */
    public function prune($cultsys = null)
    {
        if ($cultsys) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CultsysPeer::STOCKCODE), $cultsys->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CultsysPeer::CULTSYSREFNO), $cultsys->getCultsysrefno(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CultsysPeer::ENVIRONMENT), $cultsys->getEnvironment(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
