<?php


/**
 * Base class that represents a query for the 'eggnurserysystem' table.
 *
 *
 *
 * @method EggnurserysystemQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method EggnurserysystemQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method EggnurserysystemQuery orderByStockcode($order = Criteria::ASC) Order by the Stockcode column
 * @method EggnurserysystemQuery orderByCommonname($order = Criteria::ASC) Order by the CommonName column
 * @method EggnurserysystemQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method EggnurserysystemQuery orderByMainref($order = Criteria::ASC) Order by the MainRef column
 * @method EggnurserysystemQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method EggnurserysystemQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method EggnurserysystemQuery orderByDataref($order = Criteria::ASC) Order by the DataRef column
 * @method EggnurserysystemQuery orderByNumberofeggs($order = Criteria::ASC) Order by the NumberofEggs column
 * @method EggnurserysystemQuery orderByUnit($order = Criteria::ASC) Order by the Unit column
 * @method EggnurserysystemQuery orderByNurserysystemi($order = Criteria::ASC) Order by the NurserySystemI column
 * @method EggnurserysystemQuery orderByNurserysystemii($order = Criteria::ASC) Order by the NurserySystemII column
 * @method EggnurserysystemQuery orderByCulturesystem($order = Criteria::ASC) Order by the CultureSystem column
 * @method EggnurserysystemQuery orderByMainwatersource($order = Criteria::ASC) Order by the MainWaterSource column
 * @method EggnurserysystemQuery orderBySupplwatersource($order = Criteria::ASC) Order by the SupplWaterSource column
 * @method EggnurserysystemQuery orderByTempmin($order = Criteria::ASC) Order by the TempMin column
 * @method EggnurserysystemQuery orderByTempmax($order = Criteria::ASC) Order by the TempMax column
 * @method EggnurserysystemQuery orderBySalinmin($order = Criteria::ASC) Order by the SalinMin column
 * @method EggnurserysystemQuery orderBySalinmax($order = Criteria::ASC) Order by the SalinMax column
 * @method EggnurserysystemQuery orderByPhmin($order = Criteria::ASC) Order by the pHmin column
 * @method EggnurserysystemQuery orderByPhmax($order = Criteria::ASC) Order by the pHmax column
 * @method EggnurserysystemQuery orderByOxygenmin($order = Criteria::ASC) Order by the OxygenMin column
 * @method EggnurserysystemQuery orderByOxygenmax($order = Criteria::ASC) Order by the OxygenMax column
 * @method EggnurserysystemQuery orderByHardnessmin($order = Criteria::ASC) Order by the HardnessMin column
 * @method EggnurserysystemQuery orderByHardnessmax($order = Criteria::ASC) Order by the HardnessMax column
 * @method EggnurserysystemQuery orderByIlluminationmin($order = Criteria::ASC) Order by the IlluminationMin column
 * @method EggnurserysystemQuery orderByIlluminationmax($order = Criteria::ASC) Order by the IlluminationMax column
 * @method EggnurserysystemQuery orderByEggmortalitymin($order = Criteria::ASC) Order by the EggMortalityMin column
 * @method EggnurserysystemQuery orderByEggmortalitymax($order = Criteria::ASC) Order by the EggMortalityMax column
 * @method EggnurserysystemQuery orderByEyeingmin($order = Criteria::ASC) Order by the EyeingMin column
 * @method EggnurserysystemQuery orderByEyeingmax($order = Criteria::ASC) Order by the EyeingMax column
 * @method EggnurserysystemQuery orderByHatchdegreemin($order = Criteria::ASC) Order by the HatchDegreeMin column
 * @method EggnurserysystemQuery orderByHatchdegreemax($order = Criteria::ASC) Order by the HatchDegreeMax column
 * @method EggnurserysystemQuery orderByHatchhoursmin($order = Criteria::ASC) Order by the HatchHoursMin column
 * @method EggnurserysystemQuery orderByHatchhoursmax($order = Criteria::ASC) Order by the HatchHoursMax column
 * @method EggnurserysystemQuery orderByProductioncycle($order = Criteria::ASC) Order by the ProductionCycle column
 * @method EggnurserysystemQuery orderByProductionyear($order = Criteria::ASC) Order by the ProductionYear column
 * @method EggnurserysystemQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method EggnurserysystemQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method EggnurserysystemQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method EggnurserysystemQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method EggnurserysystemQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method EggnurserysystemQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method EggnurserysystemQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method EggnurserysystemQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method EggnurserysystemQuery groupByAutoctr() Group by the autoctr column
 * @method EggnurserysystemQuery groupBySpeccode() Group by the Speccode column
 * @method EggnurserysystemQuery groupByStockcode() Group by the Stockcode column
 * @method EggnurserysystemQuery groupByCommonname() Group by the CommonName column
 * @method EggnurserysystemQuery groupBySpecies() Group by the Species column
 * @method EggnurserysystemQuery groupByMainref() Group by the MainRef column
 * @method EggnurserysystemQuery groupByCCode() Group by the C_Code column
 * @method EggnurserysystemQuery groupByLocality() Group by the Locality column
 * @method EggnurserysystemQuery groupByDataref() Group by the DataRef column
 * @method EggnurserysystemQuery groupByNumberofeggs() Group by the NumberofEggs column
 * @method EggnurserysystemQuery groupByUnit() Group by the Unit column
 * @method EggnurserysystemQuery groupByNurserysystemi() Group by the NurserySystemI column
 * @method EggnurserysystemQuery groupByNurserysystemii() Group by the NurserySystemII column
 * @method EggnurserysystemQuery groupByCulturesystem() Group by the CultureSystem column
 * @method EggnurserysystemQuery groupByMainwatersource() Group by the MainWaterSource column
 * @method EggnurserysystemQuery groupBySupplwatersource() Group by the SupplWaterSource column
 * @method EggnurserysystemQuery groupByTempmin() Group by the TempMin column
 * @method EggnurserysystemQuery groupByTempmax() Group by the TempMax column
 * @method EggnurserysystemQuery groupBySalinmin() Group by the SalinMin column
 * @method EggnurserysystemQuery groupBySalinmax() Group by the SalinMax column
 * @method EggnurserysystemQuery groupByPhmin() Group by the pHmin column
 * @method EggnurserysystemQuery groupByPhmax() Group by the pHmax column
 * @method EggnurserysystemQuery groupByOxygenmin() Group by the OxygenMin column
 * @method EggnurserysystemQuery groupByOxygenmax() Group by the OxygenMax column
 * @method EggnurserysystemQuery groupByHardnessmin() Group by the HardnessMin column
 * @method EggnurserysystemQuery groupByHardnessmax() Group by the HardnessMax column
 * @method EggnurserysystemQuery groupByIlluminationmin() Group by the IlluminationMin column
 * @method EggnurserysystemQuery groupByIlluminationmax() Group by the IlluminationMax column
 * @method EggnurserysystemQuery groupByEggmortalitymin() Group by the EggMortalityMin column
 * @method EggnurserysystemQuery groupByEggmortalitymax() Group by the EggMortalityMax column
 * @method EggnurserysystemQuery groupByEyeingmin() Group by the EyeingMin column
 * @method EggnurserysystemQuery groupByEyeingmax() Group by the EyeingMax column
 * @method EggnurserysystemQuery groupByHatchdegreemin() Group by the HatchDegreeMin column
 * @method EggnurserysystemQuery groupByHatchdegreemax() Group by the HatchDegreeMax column
 * @method EggnurserysystemQuery groupByHatchhoursmin() Group by the HatchHoursMin column
 * @method EggnurserysystemQuery groupByHatchhoursmax() Group by the HatchHoursMax column
 * @method EggnurserysystemQuery groupByProductioncycle() Group by the ProductionCycle column
 * @method EggnurserysystemQuery groupByProductionyear() Group by the ProductionYear column
 * @method EggnurserysystemQuery groupByComment() Group by the Comment column
 * @method EggnurserysystemQuery groupByEntered() Group by the Entered column
 * @method EggnurserysystemQuery groupByDateentered() Group by the DateEntered column
 * @method EggnurserysystemQuery groupByModified() Group by the Modified column
 * @method EggnurserysystemQuery groupByDatemodified() Group by the DateModified column
 * @method EggnurserysystemQuery groupByExpert() Group by the Expert column
 * @method EggnurserysystemQuery groupByDatechecked() Group by the DateChecked column
 * @method EggnurserysystemQuery groupByTs() Group by the TS column
 *
 * @method EggnurserysystemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EggnurserysystemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EggnurserysystemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Eggnurserysystem findOne(PropelPDO $con = null) Return the first Eggnurserysystem matching the query
 * @method Eggnurserysystem findOneOrCreate(PropelPDO $con = null) Return the first Eggnurserysystem matching the query, or a new Eggnurserysystem object populated from the query conditions when no match is found
 *
 * @method Eggnurserysystem findOneByAutoctr(int $autoctr) Return the first Eggnurserysystem filtered by the autoctr column
 * @method Eggnurserysystem findOneBySpeccode(int $Speccode) Return the first Eggnurserysystem filtered by the Speccode column
 * @method Eggnurserysystem findOneByStockcode(int $Stockcode) Return the first Eggnurserysystem filtered by the Stockcode column
 * @method Eggnurserysystem findOneByCommonname(string $CommonName) Return the first Eggnurserysystem filtered by the CommonName column
 * @method Eggnurserysystem findOneBySpecies(string $Species) Return the first Eggnurserysystem filtered by the Species column
 * @method Eggnurserysystem findOneByMainref(int $MainRef) Return the first Eggnurserysystem filtered by the MainRef column
 * @method Eggnurserysystem findOneByCCode(string $C_Code) Return the first Eggnurserysystem filtered by the C_Code column
 * @method Eggnurserysystem findOneByLocality(string $Locality) Return the first Eggnurserysystem filtered by the Locality column
 * @method Eggnurserysystem findOneByDataref(int $DataRef) Return the first Eggnurserysystem filtered by the DataRef column
 * @method Eggnurserysystem findOneByNumberofeggs(int $NumberofEggs) Return the first Eggnurserysystem filtered by the NumberofEggs column
 * @method Eggnurserysystem findOneByUnit(string $Unit) Return the first Eggnurserysystem filtered by the Unit column
 * @method Eggnurserysystem findOneByNurserysystemi(string $NurserySystemI) Return the first Eggnurserysystem filtered by the NurserySystemI column
 * @method Eggnurserysystem findOneByNurserysystemii(string $NurserySystemII) Return the first Eggnurserysystem filtered by the NurserySystemII column
 * @method Eggnurserysystem findOneByCulturesystem(string $CultureSystem) Return the first Eggnurserysystem filtered by the CultureSystem column
 * @method Eggnurserysystem findOneByMainwatersource(string $MainWaterSource) Return the first Eggnurserysystem filtered by the MainWaterSource column
 * @method Eggnurserysystem findOneBySupplwatersource(string $SupplWaterSource) Return the first Eggnurserysystem filtered by the SupplWaterSource column
 * @method Eggnurserysystem findOneByTempmin(double $TempMin) Return the first Eggnurserysystem filtered by the TempMin column
 * @method Eggnurserysystem findOneByTempmax(double $TempMax) Return the first Eggnurserysystem filtered by the TempMax column
 * @method Eggnurserysystem findOneBySalinmin(double $SalinMin) Return the first Eggnurserysystem filtered by the SalinMin column
 * @method Eggnurserysystem findOneBySalinmax(double $SalinMax) Return the first Eggnurserysystem filtered by the SalinMax column
 * @method Eggnurserysystem findOneByPhmin(double $pHmin) Return the first Eggnurserysystem filtered by the pHmin column
 * @method Eggnurserysystem findOneByPhmax(double $pHmax) Return the first Eggnurserysystem filtered by the pHmax column
 * @method Eggnurserysystem findOneByOxygenmin(double $OxygenMin) Return the first Eggnurserysystem filtered by the OxygenMin column
 * @method Eggnurserysystem findOneByOxygenmax(double $OxygenMax) Return the first Eggnurserysystem filtered by the OxygenMax column
 * @method Eggnurserysystem findOneByHardnessmin(double $HardnessMin) Return the first Eggnurserysystem filtered by the HardnessMin column
 * @method Eggnurserysystem findOneByHardnessmax(double $HardnessMax) Return the first Eggnurserysystem filtered by the HardnessMax column
 * @method Eggnurserysystem findOneByIlluminationmin(int $IlluminationMin) Return the first Eggnurserysystem filtered by the IlluminationMin column
 * @method Eggnurserysystem findOneByIlluminationmax(int $IlluminationMax) Return the first Eggnurserysystem filtered by the IlluminationMax column
 * @method Eggnurserysystem findOneByEggmortalitymin(double $EggMortalityMin) Return the first Eggnurserysystem filtered by the EggMortalityMin column
 * @method Eggnurserysystem findOneByEggmortalitymax(int $EggMortalityMax) Return the first Eggnurserysystem filtered by the EggMortalityMax column
 * @method Eggnurserysystem findOneByEyeingmin(int $EyeingMin) Return the first Eggnurserysystem filtered by the EyeingMin column
 * @method Eggnurserysystem findOneByEyeingmax(int $EyeingMax) Return the first Eggnurserysystem filtered by the EyeingMax column
 * @method Eggnurserysystem findOneByHatchdegreemin(int $HatchDegreeMin) Return the first Eggnurserysystem filtered by the HatchDegreeMin column
 * @method Eggnurserysystem findOneByHatchdegreemax(int $HatchDegreeMax) Return the first Eggnurserysystem filtered by the HatchDegreeMax column
 * @method Eggnurserysystem findOneByHatchhoursmin(double $HatchHoursMin) Return the first Eggnurserysystem filtered by the HatchHoursMin column
 * @method Eggnurserysystem findOneByHatchhoursmax(double $HatchHoursMax) Return the first Eggnurserysystem filtered by the HatchHoursMax column
 * @method Eggnurserysystem findOneByProductioncycle(int $ProductionCycle) Return the first Eggnurserysystem filtered by the ProductionCycle column
 * @method Eggnurserysystem findOneByProductionyear(int $ProductionYear) Return the first Eggnurserysystem filtered by the ProductionYear column
 * @method Eggnurserysystem findOneByComment(string $Comment) Return the first Eggnurserysystem filtered by the Comment column
 * @method Eggnurserysystem findOneByEntered(int $Entered) Return the first Eggnurserysystem filtered by the Entered column
 * @method Eggnurserysystem findOneByDateentered(string $DateEntered) Return the first Eggnurserysystem filtered by the DateEntered column
 * @method Eggnurserysystem findOneByModified(int $Modified) Return the first Eggnurserysystem filtered by the Modified column
 * @method Eggnurserysystem findOneByDatemodified(string $DateModified) Return the first Eggnurserysystem filtered by the DateModified column
 * @method Eggnurserysystem findOneByExpert(double $Expert) Return the first Eggnurserysystem filtered by the Expert column
 * @method Eggnurserysystem findOneByDatechecked(string $DateChecked) Return the first Eggnurserysystem filtered by the DateChecked column
 * @method Eggnurserysystem findOneByTs(string $TS) Return the first Eggnurserysystem filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Eggnurserysystem objects filtered by the autoctr column
 * @method array findBySpeccode(int $Speccode) Return Eggnurserysystem objects filtered by the Speccode column
 * @method array findByStockcode(int $Stockcode) Return Eggnurserysystem objects filtered by the Stockcode column
 * @method array findByCommonname(string $CommonName) Return Eggnurserysystem objects filtered by the CommonName column
 * @method array findBySpecies(string $Species) Return Eggnurserysystem objects filtered by the Species column
 * @method array findByMainref(int $MainRef) Return Eggnurserysystem objects filtered by the MainRef column
 * @method array findByCCode(string $C_Code) Return Eggnurserysystem objects filtered by the C_Code column
 * @method array findByLocality(string $Locality) Return Eggnurserysystem objects filtered by the Locality column
 * @method array findByDataref(int $DataRef) Return Eggnurserysystem objects filtered by the DataRef column
 * @method array findByNumberofeggs(int $NumberofEggs) Return Eggnurserysystem objects filtered by the NumberofEggs column
 * @method array findByUnit(string $Unit) Return Eggnurserysystem objects filtered by the Unit column
 * @method array findByNurserysystemi(string $NurserySystemI) Return Eggnurserysystem objects filtered by the NurserySystemI column
 * @method array findByNurserysystemii(string $NurserySystemII) Return Eggnurserysystem objects filtered by the NurserySystemII column
 * @method array findByCulturesystem(string $CultureSystem) Return Eggnurserysystem objects filtered by the CultureSystem column
 * @method array findByMainwatersource(string $MainWaterSource) Return Eggnurserysystem objects filtered by the MainWaterSource column
 * @method array findBySupplwatersource(string $SupplWaterSource) Return Eggnurserysystem objects filtered by the SupplWaterSource column
 * @method array findByTempmin(double $TempMin) Return Eggnurserysystem objects filtered by the TempMin column
 * @method array findByTempmax(double $TempMax) Return Eggnurserysystem objects filtered by the TempMax column
 * @method array findBySalinmin(double $SalinMin) Return Eggnurserysystem objects filtered by the SalinMin column
 * @method array findBySalinmax(double $SalinMax) Return Eggnurserysystem objects filtered by the SalinMax column
 * @method array findByPhmin(double $pHmin) Return Eggnurserysystem objects filtered by the pHmin column
 * @method array findByPhmax(double $pHmax) Return Eggnurserysystem objects filtered by the pHmax column
 * @method array findByOxygenmin(double $OxygenMin) Return Eggnurserysystem objects filtered by the OxygenMin column
 * @method array findByOxygenmax(double $OxygenMax) Return Eggnurserysystem objects filtered by the OxygenMax column
 * @method array findByHardnessmin(double $HardnessMin) Return Eggnurserysystem objects filtered by the HardnessMin column
 * @method array findByHardnessmax(double $HardnessMax) Return Eggnurserysystem objects filtered by the HardnessMax column
 * @method array findByIlluminationmin(int $IlluminationMin) Return Eggnurserysystem objects filtered by the IlluminationMin column
 * @method array findByIlluminationmax(int $IlluminationMax) Return Eggnurserysystem objects filtered by the IlluminationMax column
 * @method array findByEggmortalitymin(double $EggMortalityMin) Return Eggnurserysystem objects filtered by the EggMortalityMin column
 * @method array findByEggmortalitymax(int $EggMortalityMax) Return Eggnurserysystem objects filtered by the EggMortalityMax column
 * @method array findByEyeingmin(int $EyeingMin) Return Eggnurserysystem objects filtered by the EyeingMin column
 * @method array findByEyeingmax(int $EyeingMax) Return Eggnurserysystem objects filtered by the EyeingMax column
 * @method array findByHatchdegreemin(int $HatchDegreeMin) Return Eggnurserysystem objects filtered by the HatchDegreeMin column
 * @method array findByHatchdegreemax(int $HatchDegreeMax) Return Eggnurserysystem objects filtered by the HatchDegreeMax column
 * @method array findByHatchhoursmin(double $HatchHoursMin) Return Eggnurserysystem objects filtered by the HatchHoursMin column
 * @method array findByHatchhoursmax(double $HatchHoursMax) Return Eggnurserysystem objects filtered by the HatchHoursMax column
 * @method array findByProductioncycle(int $ProductionCycle) Return Eggnurserysystem objects filtered by the ProductionCycle column
 * @method array findByProductionyear(int $ProductionYear) Return Eggnurserysystem objects filtered by the ProductionYear column
 * @method array findByComment(string $Comment) Return Eggnurserysystem objects filtered by the Comment column
 * @method array findByEntered(int $Entered) Return Eggnurserysystem objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Eggnurserysystem objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Eggnurserysystem objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Eggnurserysystem objects filtered by the DateModified column
 * @method array findByExpert(double $Expert) Return Eggnurserysystem objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Eggnurserysystem objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Eggnurserysystem objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEggnurserysystemQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEggnurserysystemQuery object.
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
            $modelName = 'Eggnurserysystem';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EggnurserysystemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EggnurserysystemQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EggnurserysystemQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EggnurserysystemQuery) {
            return $criteria;
        }
        $query = new EggnurserysystemQuery(null, null, $modelAlias);

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
     * @return   Eggnurserysystem|Eggnurserysystem[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EggnurserysystemPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EggnurserysystemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Eggnurserysystem A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `Speccode`, `Stockcode`, `CommonName`, `Species`, `MainRef`, `C_Code`, `Locality`, `DataRef`, `NumberofEggs`, `Unit`, `NurserySystemI`, `NurserySystemII`, `CultureSystem`, `MainWaterSource`, `SupplWaterSource`, `TempMin`, `TempMax`, `SalinMin`, `SalinMax`, `pHmin`, `pHmax`, `OxygenMin`, `OxygenMax`, `HardnessMin`, `HardnessMax`, `IlluminationMin`, `IlluminationMax`, `EggMortalityMin`, `EggMortalityMax`, `EyeingMin`, `EyeingMax`, `HatchDegreeMin`, `HatchDegreeMax`, `HatchHoursMin`, `HatchHoursMax`, `ProductionCycle`, `ProductionYear`, `Comment`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `eggnurserysystem` WHERE `autoctr` = :p0 AND `Stockcode` = :p1 AND `MainRef` = :p2';
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
            $obj = new Eggnurserysystem();
            $obj->hydrate($row);
            EggnurserysystemPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Eggnurserysystem|Eggnurserysystem[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Eggnurserysystem[]|mixed the list of results, formatted by the current formatter
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(EggnurserysystemPeer::AUTOCTR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(EggnurserysystemPeer::STOCKCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(EggnurserysystemPeer::MAINREF, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(EggnurserysystemPeer::AUTOCTR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(EggnurserysystemPeer::STOCKCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(EggnurserysystemPeer::MAINREF, $key[2], Criteria::EQUAL);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::SPECCODE, $speccode, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EggnurserysystemPeer::COMMONNAME, $commonname, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EggnurserysystemPeer::SPECIES, $species, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByMainref($mainref = null, $comparison = null)
    {
        if (is_array($mainref)) {
            $useMinMax = false;
            if (isset($mainref['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::MAINREF, $mainref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mainref['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::MAINREF, $mainref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::MAINREF, $mainref, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EggnurserysystemPeer::C_CODE, $cCode, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EggnurserysystemPeer::LOCALITY, $locality, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByDataref($dataref = null, $comparison = null)
    {
        if (is_array($dataref)) {
            $useMinMax = false;
            if (isset($dataref['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::DATAREF, $dataref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataref['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::DATAREF, $dataref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::DATAREF, $dataref, $comparison);
    }

    /**
     * Filter the query on the NumberofEggs column
     *
     * Example usage:
     * <code>
     * $query->filterByNumberofeggs(1234); // WHERE NumberofEggs = 1234
     * $query->filterByNumberofeggs(array(12, 34)); // WHERE NumberofEggs IN (12, 34)
     * $query->filterByNumberofeggs(array('min' => 12)); // WHERE NumberofEggs >= 12
     * $query->filterByNumberofeggs(array('max' => 12)); // WHERE NumberofEggs <= 12
     * </code>
     *
     * @param     mixed $numberofeggs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByNumberofeggs($numberofeggs = null, $comparison = null)
    {
        if (is_array($numberofeggs)) {
            $useMinMax = false;
            if (isset($numberofeggs['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::NUMBEROFEGGS, $numberofeggs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numberofeggs['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::NUMBEROFEGGS, $numberofeggs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::NUMBEROFEGGS, $numberofeggs, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EggnurserysystemPeer::UNIT, $unit, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EggnurserysystemPeer::NURSERYSYSTEMI, $nurserysystemi, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EggnurserysystemPeer::NURSERYSYSTEMII, $nurserysystemii, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EggnurserysystemPeer::CULTURESYSTEM, $culturesystem, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EggnurserysystemPeer::MAINWATERSOURCE, $mainwatersource, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EggnurserysystemPeer::SUPPLWATERSOURCE, $supplwatersource, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByTempmin($tempmin = null, $comparison = null)
    {
        if (is_array($tempmin)) {
            $useMinMax = false;
            if (isset($tempmin['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::TEMPMIN, $tempmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmin['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::TEMPMIN, $tempmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::TEMPMIN, $tempmin, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByTempmax($tempmax = null, $comparison = null)
    {
        if (is_array($tempmax)) {
            $useMinMax = false;
            if (isset($tempmax['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::TEMPMAX, $tempmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmax['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::TEMPMAX, $tempmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::TEMPMAX, $tempmax, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterBySalinmin($salinmin = null, $comparison = null)
    {
        if (is_array($salinmin)) {
            $useMinMax = false;
            if (isset($salinmin['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::SALINMIN, $salinmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinmin['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::SALINMIN, $salinmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::SALINMIN, $salinmin, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterBySalinmax($salinmax = null, $comparison = null)
    {
        if (is_array($salinmax)) {
            $useMinMax = false;
            if (isset($salinmax['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::SALINMAX, $salinmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinmax['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::SALINMAX, $salinmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::SALINMAX, $salinmax, $comparison);
    }

    /**
     * Filter the query on the pHmin column
     *
     * Example usage:
     * <code>
     * $query->filterByPhmin(1234); // WHERE pHmin = 1234
     * $query->filterByPhmin(array(12, 34)); // WHERE pHmin IN (12, 34)
     * $query->filterByPhmin(array('min' => 12)); // WHERE pHmin >= 12
     * $query->filterByPhmin(array('max' => 12)); // WHERE pHmin <= 12
     * </code>
     *
     * @param     mixed $phmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByPhmin($phmin = null, $comparison = null)
    {
        if (is_array($phmin)) {
            $useMinMax = false;
            if (isset($phmin['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::PHMIN, $phmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmin['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::PHMIN, $phmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::PHMIN, $phmin, $comparison);
    }

    /**
     * Filter the query on the pHmax column
     *
     * Example usage:
     * <code>
     * $query->filterByPhmax(1234); // WHERE pHmax = 1234
     * $query->filterByPhmax(array(12, 34)); // WHERE pHmax IN (12, 34)
     * $query->filterByPhmax(array('min' => 12)); // WHERE pHmax >= 12
     * $query->filterByPhmax(array('max' => 12)); // WHERE pHmax <= 12
     * </code>
     *
     * @param     mixed $phmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByPhmax($phmax = null, $comparison = null)
    {
        if (is_array($phmax)) {
            $useMinMax = false;
            if (isset($phmax['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::PHMAX, $phmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmax['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::PHMAX, $phmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::PHMAX, $phmax, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByOxygenmin($oxygenmin = null, $comparison = null)
    {
        if (is_array($oxygenmin)) {
            $useMinMax = false;
            if (isset($oxygenmin['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::OXYGENMIN, $oxygenmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmin['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::OXYGENMIN, $oxygenmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::OXYGENMIN, $oxygenmin, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByOxygenmax($oxygenmax = null, $comparison = null)
    {
        if (is_array($oxygenmax)) {
            $useMinMax = false;
            if (isset($oxygenmax['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::OXYGENMAX, $oxygenmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmax['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::OXYGENMAX, $oxygenmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::OXYGENMAX, $oxygenmax, $comparison);
    }

    /**
     * Filter the query on the HardnessMin column
     *
     * Example usage:
     * <code>
     * $query->filterByHardnessmin(1234); // WHERE HardnessMin = 1234
     * $query->filterByHardnessmin(array(12, 34)); // WHERE HardnessMin IN (12, 34)
     * $query->filterByHardnessmin(array('min' => 12)); // WHERE HardnessMin >= 12
     * $query->filterByHardnessmin(array('max' => 12)); // WHERE HardnessMin <= 12
     * </code>
     *
     * @param     mixed $hardnessmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByHardnessmin($hardnessmin = null, $comparison = null)
    {
        if (is_array($hardnessmin)) {
            $useMinMax = false;
            if (isset($hardnessmin['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::HARDNESSMIN, $hardnessmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hardnessmin['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::HARDNESSMIN, $hardnessmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::HARDNESSMIN, $hardnessmin, $comparison);
    }

    /**
     * Filter the query on the HardnessMax column
     *
     * Example usage:
     * <code>
     * $query->filterByHardnessmax(1234); // WHERE HardnessMax = 1234
     * $query->filterByHardnessmax(array(12, 34)); // WHERE HardnessMax IN (12, 34)
     * $query->filterByHardnessmax(array('min' => 12)); // WHERE HardnessMax >= 12
     * $query->filterByHardnessmax(array('max' => 12)); // WHERE HardnessMax <= 12
     * </code>
     *
     * @param     mixed $hardnessmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByHardnessmax($hardnessmax = null, $comparison = null)
    {
        if (is_array($hardnessmax)) {
            $useMinMax = false;
            if (isset($hardnessmax['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::HARDNESSMAX, $hardnessmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hardnessmax['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::HARDNESSMAX, $hardnessmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::HARDNESSMAX, $hardnessmax, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByIlluminationmin($illuminationmin = null, $comparison = null)
    {
        if (is_array($illuminationmin)) {
            $useMinMax = false;
            if (isset($illuminationmin['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::ILLUMINATIONMIN, $illuminationmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($illuminationmin['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::ILLUMINATIONMIN, $illuminationmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::ILLUMINATIONMIN, $illuminationmin, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByIlluminationmax($illuminationmax = null, $comparison = null)
    {
        if (is_array($illuminationmax)) {
            $useMinMax = false;
            if (isset($illuminationmax['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::ILLUMINATIONMAX, $illuminationmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($illuminationmax['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::ILLUMINATIONMAX, $illuminationmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::ILLUMINATIONMAX, $illuminationmax, $comparison);
    }

    /**
     * Filter the query on the EggMortalityMin column
     *
     * Example usage:
     * <code>
     * $query->filterByEggmortalitymin(1234); // WHERE EggMortalityMin = 1234
     * $query->filterByEggmortalitymin(array(12, 34)); // WHERE EggMortalityMin IN (12, 34)
     * $query->filterByEggmortalitymin(array('min' => 12)); // WHERE EggMortalityMin >= 12
     * $query->filterByEggmortalitymin(array('max' => 12)); // WHERE EggMortalityMin <= 12
     * </code>
     *
     * @param     mixed $eggmortalitymin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByEggmortalitymin($eggmortalitymin = null, $comparison = null)
    {
        if (is_array($eggmortalitymin)) {
            $useMinMax = false;
            if (isset($eggmortalitymin['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::EGGMORTALITYMIN, $eggmortalitymin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggmortalitymin['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::EGGMORTALITYMIN, $eggmortalitymin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::EGGMORTALITYMIN, $eggmortalitymin, $comparison);
    }

    /**
     * Filter the query on the EggMortalityMax column
     *
     * Example usage:
     * <code>
     * $query->filterByEggmortalitymax(1234); // WHERE EggMortalityMax = 1234
     * $query->filterByEggmortalitymax(array(12, 34)); // WHERE EggMortalityMax IN (12, 34)
     * $query->filterByEggmortalitymax(array('min' => 12)); // WHERE EggMortalityMax >= 12
     * $query->filterByEggmortalitymax(array('max' => 12)); // WHERE EggMortalityMax <= 12
     * </code>
     *
     * @param     mixed $eggmortalitymax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByEggmortalitymax($eggmortalitymax = null, $comparison = null)
    {
        if (is_array($eggmortalitymax)) {
            $useMinMax = false;
            if (isset($eggmortalitymax['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::EGGMORTALITYMAX, $eggmortalitymax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggmortalitymax['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::EGGMORTALITYMAX, $eggmortalitymax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::EGGMORTALITYMAX, $eggmortalitymax, $comparison);
    }

    /**
     * Filter the query on the EyeingMin column
     *
     * Example usage:
     * <code>
     * $query->filterByEyeingmin(1234); // WHERE EyeingMin = 1234
     * $query->filterByEyeingmin(array(12, 34)); // WHERE EyeingMin IN (12, 34)
     * $query->filterByEyeingmin(array('min' => 12)); // WHERE EyeingMin >= 12
     * $query->filterByEyeingmin(array('max' => 12)); // WHERE EyeingMin <= 12
     * </code>
     *
     * @param     mixed $eyeingmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByEyeingmin($eyeingmin = null, $comparison = null)
    {
        if (is_array($eyeingmin)) {
            $useMinMax = false;
            if (isset($eyeingmin['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::EYEINGMIN, $eyeingmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eyeingmin['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::EYEINGMIN, $eyeingmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::EYEINGMIN, $eyeingmin, $comparison);
    }

    /**
     * Filter the query on the EyeingMax column
     *
     * Example usage:
     * <code>
     * $query->filterByEyeingmax(1234); // WHERE EyeingMax = 1234
     * $query->filterByEyeingmax(array(12, 34)); // WHERE EyeingMax IN (12, 34)
     * $query->filterByEyeingmax(array('min' => 12)); // WHERE EyeingMax >= 12
     * $query->filterByEyeingmax(array('max' => 12)); // WHERE EyeingMax <= 12
     * </code>
     *
     * @param     mixed $eyeingmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByEyeingmax($eyeingmax = null, $comparison = null)
    {
        if (is_array($eyeingmax)) {
            $useMinMax = false;
            if (isset($eyeingmax['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::EYEINGMAX, $eyeingmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eyeingmax['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::EYEINGMAX, $eyeingmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::EYEINGMAX, $eyeingmax, $comparison);
    }

    /**
     * Filter the query on the HatchDegreeMin column
     *
     * Example usage:
     * <code>
     * $query->filterByHatchdegreemin(1234); // WHERE HatchDegreeMin = 1234
     * $query->filterByHatchdegreemin(array(12, 34)); // WHERE HatchDegreeMin IN (12, 34)
     * $query->filterByHatchdegreemin(array('min' => 12)); // WHERE HatchDegreeMin >= 12
     * $query->filterByHatchdegreemin(array('max' => 12)); // WHERE HatchDegreeMin <= 12
     * </code>
     *
     * @param     mixed $hatchdegreemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByHatchdegreemin($hatchdegreemin = null, $comparison = null)
    {
        if (is_array($hatchdegreemin)) {
            $useMinMax = false;
            if (isset($hatchdegreemin['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::HATCHDEGREEMIN, $hatchdegreemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hatchdegreemin['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::HATCHDEGREEMIN, $hatchdegreemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::HATCHDEGREEMIN, $hatchdegreemin, $comparison);
    }

    /**
     * Filter the query on the HatchDegreeMax column
     *
     * Example usage:
     * <code>
     * $query->filterByHatchdegreemax(1234); // WHERE HatchDegreeMax = 1234
     * $query->filterByHatchdegreemax(array(12, 34)); // WHERE HatchDegreeMax IN (12, 34)
     * $query->filterByHatchdegreemax(array('min' => 12)); // WHERE HatchDegreeMax >= 12
     * $query->filterByHatchdegreemax(array('max' => 12)); // WHERE HatchDegreeMax <= 12
     * </code>
     *
     * @param     mixed $hatchdegreemax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByHatchdegreemax($hatchdegreemax = null, $comparison = null)
    {
        if (is_array($hatchdegreemax)) {
            $useMinMax = false;
            if (isset($hatchdegreemax['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::HATCHDEGREEMAX, $hatchdegreemax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hatchdegreemax['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::HATCHDEGREEMAX, $hatchdegreemax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::HATCHDEGREEMAX, $hatchdegreemax, $comparison);
    }

    /**
     * Filter the query on the HatchHoursMin column
     *
     * Example usage:
     * <code>
     * $query->filterByHatchhoursmin(1234); // WHERE HatchHoursMin = 1234
     * $query->filterByHatchhoursmin(array(12, 34)); // WHERE HatchHoursMin IN (12, 34)
     * $query->filterByHatchhoursmin(array('min' => 12)); // WHERE HatchHoursMin >= 12
     * $query->filterByHatchhoursmin(array('max' => 12)); // WHERE HatchHoursMin <= 12
     * </code>
     *
     * @param     mixed $hatchhoursmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByHatchhoursmin($hatchhoursmin = null, $comparison = null)
    {
        if (is_array($hatchhoursmin)) {
            $useMinMax = false;
            if (isset($hatchhoursmin['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::HATCHHOURSMIN, $hatchhoursmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hatchhoursmin['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::HATCHHOURSMIN, $hatchhoursmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::HATCHHOURSMIN, $hatchhoursmin, $comparison);
    }

    /**
     * Filter the query on the HatchHoursMax column
     *
     * Example usage:
     * <code>
     * $query->filterByHatchhoursmax(1234); // WHERE HatchHoursMax = 1234
     * $query->filterByHatchhoursmax(array(12, 34)); // WHERE HatchHoursMax IN (12, 34)
     * $query->filterByHatchhoursmax(array('min' => 12)); // WHERE HatchHoursMax >= 12
     * $query->filterByHatchhoursmax(array('max' => 12)); // WHERE HatchHoursMax <= 12
     * </code>
     *
     * @param     mixed $hatchhoursmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByHatchhoursmax($hatchhoursmax = null, $comparison = null)
    {
        if (is_array($hatchhoursmax)) {
            $useMinMax = false;
            if (isset($hatchhoursmax['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::HATCHHOURSMAX, $hatchhoursmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hatchhoursmax['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::HATCHHOURSMAX, $hatchhoursmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::HATCHHOURSMAX, $hatchhoursmax, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByProductioncycle($productioncycle = null, $comparison = null)
    {
        if (is_array($productioncycle)) {
            $useMinMax = false;
            if (isset($productioncycle['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::PRODUCTIONCYCLE, $productioncycle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productioncycle['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::PRODUCTIONCYCLE, $productioncycle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::PRODUCTIONCYCLE, $productioncycle, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByProductionyear($productionyear = null, $comparison = null)
    {
        if (is_array($productionyear)) {
            $useMinMax = false;
            if (isset($productionyear['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::PRODUCTIONYEAR, $productionyear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productionyear['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::PRODUCTIONYEAR, $productionyear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::PRODUCTIONYEAR, $productionyear, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EggnurserysystemPeer::COMMENT, $comment, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::ENTERED, $entered, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::MODIFIED, $modified, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::EXPERT, $expert, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(EggnurserysystemPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(EggnurserysystemPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggnurserysystemPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Eggnurserysystem $eggnurserysystem Object to remove from the list of results
     *
     * @return EggnurserysystemQuery The current query, for fluid interface
     */
    public function prune($eggnurserysystem = null)
    {
        if ($eggnurserysystem) {
            $this->addCond('pruneCond0', $this->getAliasedColName(EggnurserysystemPeer::AUTOCTR), $eggnurserysystem->getAutoctr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(EggnurserysystemPeer::STOCKCODE), $eggnurserysystem->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(EggnurserysystemPeer::MAINREF), $eggnurserysystem->getMainref(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
