<?php


/**
 * Base class that represents a query for the 'broodstock' table.
 *
 *
 *
 * @method BroodstockQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method BroodstockQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method BroodstockQuery orderByStockcode($order = Criteria::ASC) Order by the Stockcode column
 * @method BroodstockQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method BroodstockQuery orderByCommonname($order = Criteria::ASC) Order by the CommonName column
 * @method BroodstockQuery orderByMainref($order = Criteria::ASC) Order by the MainRef column
 * @method BroodstockQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method BroodstockQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method BroodstockQuery orderByDataref($order = Criteria::ASC) Order by the DataRef column
 * @method BroodstockQuery orderByBreedingi($order = Criteria::ASC) Order by the BreedingI column
 * @method BroodstockQuery orderByFecundity($order = Criteria::ASC) Order by the Fecundity column
 * @method BroodstockQuery orderByCountriesandregions($order = Criteria::ASC) Order by the CountriesandRegions column
 * @method BroodstockQuery orderByBreedingii($order = Criteria::ASC) Order by the BreedingII column
 * @method BroodstockQuery orderByBreedingiii($order = Criteria::ASC) Order by the BreedingIII column
 * @method BroodstockQuery orderByCulturesystem($order = Criteria::ASC) Order by the CultureSystem column
 * @method BroodstockQuery orderByMainwatersource($order = Criteria::ASC) Order by the MainwaterSource column
 * @method BroodstockQuery orderBySupplwatersource($order = Criteria::ASC) Order by the SupplWaterSource column
 * @method BroodstockQuery orderByTempmin($order = Criteria::ASC) Order by the TempMin column
 * @method BroodstockQuery orderByTempmax($order = Criteria::ASC) Order by the TempMax column
 * @method BroodstockQuery orderBySpawningtempmin($order = Criteria::ASC) Order by the SpawningTempMin column
 * @method BroodstockQuery orderBySpawningtempmax($order = Criteria::ASC) Order by the SpawningTempMax column
 * @method BroodstockQuery orderBySalinmin($order = Criteria::ASC) Order by the SalinMin column
 * @method BroodstockQuery orderBySalinmax($order = Criteria::ASC) Order by the SalinMax column
 * @method BroodstockQuery orderByPhmin($order = Criteria::ASC) Order by the pHMin column
 * @method BroodstockQuery orderByPhmax($order = Criteria::ASC) Order by the pHMax column
 * @method BroodstockQuery orderByOxygenmin($order = Criteria::ASC) Order by the OxygenMin column
 * @method BroodstockQuery orderByOxygenmax($order = Criteria::ASC) Order by the OxygenMax column
 * @method BroodstockQuery orderByHardnessmin($order = Criteria::ASC) Order by the HardnessMin column
 * @method BroodstockQuery orderByHardnessmax($order = Criteria::ASC) Order by the HardnessMax column
 * @method BroodstockQuery orderByBroodstockstockingrate($order = Criteria::ASC) Order by the BroodstockStockingRate column
 * @method BroodstockQuery orderByBroodstockfemale($order = Criteria::ASC) Order by the Broodstockfemale column
 * @method BroodstockQuery orderByBroodstockmale($order = Criteria::ASC) Order by the Broodstockmale column
 * @method BroodstockQuery orderBySexratio($order = Criteria::ASC) Order by the SexRatio column
 * @method BroodstockQuery orderByEggproduction($order = Criteria::ASC) Order by the EggProduction column
 * @method BroodstockQuery orderByPostmortality($order = Criteria::ASC) Order by the PostMortality column
 * @method BroodstockQuery orderByFcr($order = Criteria::ASC) Order by the FCR column
 * @method BroodstockQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method BroodstockQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method BroodstockQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method BroodstockQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method BroodstockQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method BroodstockQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method BroodstockQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method BroodstockQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method BroodstockQuery groupByAutoctr() Group by the autoctr column
 * @method BroodstockQuery groupBySpeccode() Group by the Speccode column
 * @method BroodstockQuery groupByStockcode() Group by the Stockcode column
 * @method BroodstockQuery groupBySpecies() Group by the Species column
 * @method BroodstockQuery groupByCommonname() Group by the CommonName column
 * @method BroodstockQuery groupByMainref() Group by the MainRef column
 * @method BroodstockQuery groupByCCode() Group by the C_Code column
 * @method BroodstockQuery groupByLocality() Group by the Locality column
 * @method BroodstockQuery groupByDataref() Group by the DataRef column
 * @method BroodstockQuery groupByBreedingi() Group by the BreedingI column
 * @method BroodstockQuery groupByFecundity() Group by the Fecundity column
 * @method BroodstockQuery groupByCountriesandregions() Group by the CountriesandRegions column
 * @method BroodstockQuery groupByBreedingii() Group by the BreedingII column
 * @method BroodstockQuery groupByBreedingiii() Group by the BreedingIII column
 * @method BroodstockQuery groupByCulturesystem() Group by the CultureSystem column
 * @method BroodstockQuery groupByMainwatersource() Group by the MainwaterSource column
 * @method BroodstockQuery groupBySupplwatersource() Group by the SupplWaterSource column
 * @method BroodstockQuery groupByTempmin() Group by the TempMin column
 * @method BroodstockQuery groupByTempmax() Group by the TempMax column
 * @method BroodstockQuery groupBySpawningtempmin() Group by the SpawningTempMin column
 * @method BroodstockQuery groupBySpawningtempmax() Group by the SpawningTempMax column
 * @method BroodstockQuery groupBySalinmin() Group by the SalinMin column
 * @method BroodstockQuery groupBySalinmax() Group by the SalinMax column
 * @method BroodstockQuery groupByPhmin() Group by the pHMin column
 * @method BroodstockQuery groupByPhmax() Group by the pHMax column
 * @method BroodstockQuery groupByOxygenmin() Group by the OxygenMin column
 * @method BroodstockQuery groupByOxygenmax() Group by the OxygenMax column
 * @method BroodstockQuery groupByHardnessmin() Group by the HardnessMin column
 * @method BroodstockQuery groupByHardnessmax() Group by the HardnessMax column
 * @method BroodstockQuery groupByBroodstockstockingrate() Group by the BroodstockStockingRate column
 * @method BroodstockQuery groupByBroodstockfemale() Group by the Broodstockfemale column
 * @method BroodstockQuery groupByBroodstockmale() Group by the Broodstockmale column
 * @method BroodstockQuery groupBySexratio() Group by the SexRatio column
 * @method BroodstockQuery groupByEggproduction() Group by the EggProduction column
 * @method BroodstockQuery groupByPostmortality() Group by the PostMortality column
 * @method BroodstockQuery groupByFcr() Group by the FCR column
 * @method BroodstockQuery groupByComments() Group by the Comments column
 * @method BroodstockQuery groupByEntered() Group by the Entered column
 * @method BroodstockQuery groupByDateentered() Group by the DateEntered column
 * @method BroodstockQuery groupByModified() Group by the Modified column
 * @method BroodstockQuery groupByDatemodified() Group by the DateModified column
 * @method BroodstockQuery groupByExpert() Group by the Expert column
 * @method BroodstockQuery groupByDatechecked() Group by the DateChecked column
 * @method BroodstockQuery groupByTs() Group by the TS column
 *
 * @method BroodstockQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method BroodstockQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method BroodstockQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Broodstock findOne(PropelPDO $con = null) Return the first Broodstock matching the query
 * @method Broodstock findOneOrCreate(PropelPDO $con = null) Return the first Broodstock matching the query, or a new Broodstock object populated from the query conditions when no match is found
 *
 * @method Broodstock findOneByAutoctr(int $autoctr) Return the first Broodstock filtered by the autoctr column
 * @method Broodstock findOneBySpeccode(int $Speccode) Return the first Broodstock filtered by the Speccode column
 * @method Broodstock findOneByStockcode(int $Stockcode) Return the first Broodstock filtered by the Stockcode column
 * @method Broodstock findOneBySpecies(string $Species) Return the first Broodstock filtered by the Species column
 * @method Broodstock findOneByCommonname(string $CommonName) Return the first Broodstock filtered by the CommonName column
 * @method Broodstock findOneByMainref(int $MainRef) Return the first Broodstock filtered by the MainRef column
 * @method Broodstock findOneByCCode(string $C_Code) Return the first Broodstock filtered by the C_Code column
 * @method Broodstock findOneByLocality(string $Locality) Return the first Broodstock filtered by the Locality column
 * @method Broodstock findOneByDataref(int $DataRef) Return the first Broodstock filtered by the DataRef column
 * @method Broodstock findOneByBreedingi(string $BreedingI) Return the first Broodstock filtered by the BreedingI column
 * @method Broodstock findOneByFecundity(int $Fecundity) Return the first Broodstock filtered by the Fecundity column
 * @method Broodstock findOneByCountriesandregions(string $CountriesandRegions) Return the first Broodstock filtered by the CountriesandRegions column
 * @method Broodstock findOneByBreedingii(string $BreedingII) Return the first Broodstock filtered by the BreedingII column
 * @method Broodstock findOneByBreedingiii(string $BreedingIII) Return the first Broodstock filtered by the BreedingIII column
 * @method Broodstock findOneByCulturesystem(string $CultureSystem) Return the first Broodstock filtered by the CultureSystem column
 * @method Broodstock findOneByMainwatersource(string $MainwaterSource) Return the first Broodstock filtered by the MainwaterSource column
 * @method Broodstock findOneBySupplwatersource(string $SupplWaterSource) Return the first Broodstock filtered by the SupplWaterSource column
 * @method Broodstock findOneByTempmin(double $TempMin) Return the first Broodstock filtered by the TempMin column
 * @method Broodstock findOneByTempmax(double $TempMax) Return the first Broodstock filtered by the TempMax column
 * @method Broodstock findOneBySpawningtempmin(double $SpawningTempMin) Return the first Broodstock filtered by the SpawningTempMin column
 * @method Broodstock findOneBySpawningtempmax(double $SpawningTempMax) Return the first Broodstock filtered by the SpawningTempMax column
 * @method Broodstock findOneBySalinmin(double $SalinMin) Return the first Broodstock filtered by the SalinMin column
 * @method Broodstock findOneBySalinmax(double $SalinMax) Return the first Broodstock filtered by the SalinMax column
 * @method Broodstock findOneByPhmin(double $pHMin) Return the first Broodstock filtered by the pHMin column
 * @method Broodstock findOneByPhmax(double $pHMax) Return the first Broodstock filtered by the pHMax column
 * @method Broodstock findOneByOxygenmin(double $OxygenMin) Return the first Broodstock filtered by the OxygenMin column
 * @method Broodstock findOneByOxygenmax(double $OxygenMax) Return the first Broodstock filtered by the OxygenMax column
 * @method Broodstock findOneByHardnessmin(double $HardnessMin) Return the first Broodstock filtered by the HardnessMin column
 * @method Broodstock findOneByHardnessmax(double $HardnessMax) Return the first Broodstock filtered by the HardnessMax column
 * @method Broodstock findOneByBroodstockstockingrate(double $BroodstockStockingRate) Return the first Broodstock filtered by the BroodstockStockingRate column
 * @method Broodstock findOneByBroodstockfemale(int $Broodstockfemale) Return the first Broodstock filtered by the Broodstockfemale column
 * @method Broodstock findOneByBroodstockmale(int $Broodstockmale) Return the first Broodstock filtered by the Broodstockmale column
 * @method Broodstock findOneBySexratio(string $SexRatio) Return the first Broodstock filtered by the SexRatio column
 * @method Broodstock findOneByEggproduction(double $EggProduction) Return the first Broodstock filtered by the EggProduction column
 * @method Broodstock findOneByPostmortality(string $PostMortality) Return the first Broodstock filtered by the PostMortality column
 * @method Broodstock findOneByFcr(double $FCR) Return the first Broodstock filtered by the FCR column
 * @method Broodstock findOneByComments(string $Comments) Return the first Broodstock filtered by the Comments column
 * @method Broodstock findOneByEntered(int $Entered) Return the first Broodstock filtered by the Entered column
 * @method Broodstock findOneByDateentered(string $DateEntered) Return the first Broodstock filtered by the DateEntered column
 * @method Broodstock findOneByModified(int $Modified) Return the first Broodstock filtered by the Modified column
 * @method Broodstock findOneByDatemodified(string $DateModified) Return the first Broodstock filtered by the DateModified column
 * @method Broodstock findOneByExpert(int $Expert) Return the first Broodstock filtered by the Expert column
 * @method Broodstock findOneByDatechecked(string $DateChecked) Return the first Broodstock filtered by the DateChecked column
 * @method Broodstock findOneByTs(string $TS) Return the first Broodstock filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Broodstock objects filtered by the autoctr column
 * @method array findBySpeccode(int $Speccode) Return Broodstock objects filtered by the Speccode column
 * @method array findByStockcode(int $Stockcode) Return Broodstock objects filtered by the Stockcode column
 * @method array findBySpecies(string $Species) Return Broodstock objects filtered by the Species column
 * @method array findByCommonname(string $CommonName) Return Broodstock objects filtered by the CommonName column
 * @method array findByMainref(int $MainRef) Return Broodstock objects filtered by the MainRef column
 * @method array findByCCode(string $C_Code) Return Broodstock objects filtered by the C_Code column
 * @method array findByLocality(string $Locality) Return Broodstock objects filtered by the Locality column
 * @method array findByDataref(int $DataRef) Return Broodstock objects filtered by the DataRef column
 * @method array findByBreedingi(string $BreedingI) Return Broodstock objects filtered by the BreedingI column
 * @method array findByFecundity(int $Fecundity) Return Broodstock objects filtered by the Fecundity column
 * @method array findByCountriesandregions(string $CountriesandRegions) Return Broodstock objects filtered by the CountriesandRegions column
 * @method array findByBreedingii(string $BreedingII) Return Broodstock objects filtered by the BreedingII column
 * @method array findByBreedingiii(string $BreedingIII) Return Broodstock objects filtered by the BreedingIII column
 * @method array findByCulturesystem(string $CultureSystem) Return Broodstock objects filtered by the CultureSystem column
 * @method array findByMainwatersource(string $MainwaterSource) Return Broodstock objects filtered by the MainwaterSource column
 * @method array findBySupplwatersource(string $SupplWaterSource) Return Broodstock objects filtered by the SupplWaterSource column
 * @method array findByTempmin(double $TempMin) Return Broodstock objects filtered by the TempMin column
 * @method array findByTempmax(double $TempMax) Return Broodstock objects filtered by the TempMax column
 * @method array findBySpawningtempmin(double $SpawningTempMin) Return Broodstock objects filtered by the SpawningTempMin column
 * @method array findBySpawningtempmax(double $SpawningTempMax) Return Broodstock objects filtered by the SpawningTempMax column
 * @method array findBySalinmin(double $SalinMin) Return Broodstock objects filtered by the SalinMin column
 * @method array findBySalinmax(double $SalinMax) Return Broodstock objects filtered by the SalinMax column
 * @method array findByPhmin(double $pHMin) Return Broodstock objects filtered by the pHMin column
 * @method array findByPhmax(double $pHMax) Return Broodstock objects filtered by the pHMax column
 * @method array findByOxygenmin(double $OxygenMin) Return Broodstock objects filtered by the OxygenMin column
 * @method array findByOxygenmax(double $OxygenMax) Return Broodstock objects filtered by the OxygenMax column
 * @method array findByHardnessmin(double $HardnessMin) Return Broodstock objects filtered by the HardnessMin column
 * @method array findByHardnessmax(double $HardnessMax) Return Broodstock objects filtered by the HardnessMax column
 * @method array findByBroodstockstockingrate(double $BroodstockStockingRate) Return Broodstock objects filtered by the BroodstockStockingRate column
 * @method array findByBroodstockfemale(int $Broodstockfemale) Return Broodstock objects filtered by the Broodstockfemale column
 * @method array findByBroodstockmale(int $Broodstockmale) Return Broodstock objects filtered by the Broodstockmale column
 * @method array findBySexratio(string $SexRatio) Return Broodstock objects filtered by the SexRatio column
 * @method array findByEggproduction(double $EggProduction) Return Broodstock objects filtered by the EggProduction column
 * @method array findByPostmortality(string $PostMortality) Return Broodstock objects filtered by the PostMortality column
 * @method array findByFcr(double $FCR) Return Broodstock objects filtered by the FCR column
 * @method array findByComments(string $Comments) Return Broodstock objects filtered by the Comments column
 * @method array findByEntered(int $Entered) Return Broodstock objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Broodstock objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Broodstock objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Broodstock objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Broodstock objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Broodstock objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Broodstock objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseBroodstockQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseBroodstockQuery object.
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
            $modelName = 'Broodstock';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new BroodstockQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   BroodstockQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return BroodstockQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof BroodstockQuery) {
            return $criteria;
        }
        $query = new BroodstockQuery(null, null, $modelAlias);

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
     * @return   Broodstock|Broodstock[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = BroodstockPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(BroodstockPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Broodstock A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `Speccode`, `Stockcode`, `Species`, `CommonName`, `MainRef`, `C_Code`, `Locality`, `DataRef`, `BreedingI`, `Fecundity`, `CountriesandRegions`, `BreedingII`, `BreedingIII`, `CultureSystem`, `MainwaterSource`, `SupplWaterSource`, `TempMin`, `TempMax`, `SpawningTempMin`, `SpawningTempMax`, `SalinMin`, `SalinMax`, `pHMin`, `pHMax`, `OxygenMin`, `OxygenMax`, `HardnessMin`, `HardnessMax`, `BroodstockStockingRate`, `Broodstockfemale`, `Broodstockmale`, `SexRatio`, `EggProduction`, `PostMortality`, `FCR`, `Comments`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `broodstock` WHERE `autoctr` = :p0 AND `Stockcode` = :p1 AND `MainRef` = :p2';
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
            $obj = new Broodstock();
            $obj->hydrate($row);
            BroodstockPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Broodstock|Broodstock[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Broodstock[]|mixed the list of results, formatted by the current formatter
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(BroodstockPeer::AUTOCTR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(BroodstockPeer::STOCKCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(BroodstockPeer::MAINREF, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(BroodstockPeer::AUTOCTR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(BroodstockPeer::STOCKCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(BroodstockPeer::MAINREF, $key[2], Criteria::EQUAL);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(BroodstockPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(BroodstockPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(BroodstockPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(BroodstockPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::SPECCODE, $speccode, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(BroodstockPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(BroodstockPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BroodstockPeer::SPECIES, $species, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BroodstockPeer::COMMONNAME, $commonname, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByMainref($mainref = null, $comparison = null)
    {
        if (is_array($mainref)) {
            $useMinMax = false;
            if (isset($mainref['min'])) {
                $this->addUsingAlias(BroodstockPeer::MAINREF, $mainref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mainref['max'])) {
                $this->addUsingAlias(BroodstockPeer::MAINREF, $mainref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::MAINREF, $mainref, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BroodstockPeer::C_CODE, $cCode, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BroodstockPeer::LOCALITY, $locality, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByDataref($dataref = null, $comparison = null)
    {
        if (is_array($dataref)) {
            $useMinMax = false;
            if (isset($dataref['min'])) {
                $this->addUsingAlias(BroodstockPeer::DATAREF, $dataref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataref['max'])) {
                $this->addUsingAlias(BroodstockPeer::DATAREF, $dataref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::DATAREF, $dataref, $comparison);
    }

    /**
     * Filter the query on the BreedingI column
     *
     * Example usage:
     * <code>
     * $query->filterByBreedingi('fooValue');   // WHERE BreedingI = 'fooValue'
     * $query->filterByBreedingi('%fooValue%'); // WHERE BreedingI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $breedingi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByBreedingi($breedingi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($breedingi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $breedingi)) {
                $breedingi = str_replace('*', '%', $breedingi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::BREEDINGI, $breedingi, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByFecundity($fecundity = null, $comparison = null)
    {
        if (is_array($fecundity)) {
            $useMinMax = false;
            if (isset($fecundity['min'])) {
                $this->addUsingAlias(BroodstockPeer::FECUNDITY, $fecundity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fecundity['max'])) {
                $this->addUsingAlias(BroodstockPeer::FECUNDITY, $fecundity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::FECUNDITY, $fecundity, $comparison);
    }

    /**
     * Filter the query on the CountriesandRegions column
     *
     * Example usage:
     * <code>
     * $query->filterByCountriesandregions('fooValue');   // WHERE CountriesandRegions = 'fooValue'
     * $query->filterByCountriesandregions('%fooValue%'); // WHERE CountriesandRegions LIKE '%fooValue%'
     * </code>
     *
     * @param     string $countriesandregions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByCountriesandregions($countriesandregions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($countriesandregions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $countriesandregions)) {
                $countriesandregions = str_replace('*', '%', $countriesandregions);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::COUNTRIESANDREGIONS, $countriesandregions, $comparison);
    }

    /**
     * Filter the query on the BreedingII column
     *
     * Example usage:
     * <code>
     * $query->filterByBreedingii('fooValue');   // WHERE BreedingII = 'fooValue'
     * $query->filterByBreedingii('%fooValue%'); // WHERE BreedingII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $breedingii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByBreedingii($breedingii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($breedingii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $breedingii)) {
                $breedingii = str_replace('*', '%', $breedingii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::BREEDINGII, $breedingii, $comparison);
    }

    /**
     * Filter the query on the BreedingIII column
     *
     * Example usage:
     * <code>
     * $query->filterByBreedingiii('fooValue');   // WHERE BreedingIII = 'fooValue'
     * $query->filterByBreedingiii('%fooValue%'); // WHERE BreedingIII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $breedingiii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByBreedingiii($breedingiii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($breedingiii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $breedingiii)) {
                $breedingiii = str_replace('*', '%', $breedingiii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::BREEDINGIII, $breedingiii, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BroodstockPeer::CULTURESYSTEM, $culturesystem, $comparison);
    }

    /**
     * Filter the query on the MainwaterSource column
     *
     * Example usage:
     * <code>
     * $query->filterByMainwatersource('fooValue');   // WHERE MainwaterSource = 'fooValue'
     * $query->filterByMainwatersource('%fooValue%'); // WHERE MainwaterSource LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mainwatersource The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BroodstockQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BroodstockPeer::MAINWATERSOURCE, $mainwatersource, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BroodstockPeer::SUPPLWATERSOURCE, $supplwatersource, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByTempmin($tempmin = null, $comparison = null)
    {
        if (is_array($tempmin)) {
            $useMinMax = false;
            if (isset($tempmin['min'])) {
                $this->addUsingAlias(BroodstockPeer::TEMPMIN, $tempmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmin['max'])) {
                $this->addUsingAlias(BroodstockPeer::TEMPMIN, $tempmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::TEMPMIN, $tempmin, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByTempmax($tempmax = null, $comparison = null)
    {
        if (is_array($tempmax)) {
            $useMinMax = false;
            if (isset($tempmax['min'])) {
                $this->addUsingAlias(BroodstockPeer::TEMPMAX, $tempmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempmax['max'])) {
                $this->addUsingAlias(BroodstockPeer::TEMPMAX, $tempmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::TEMPMAX, $tempmax, $comparison);
    }

    /**
     * Filter the query on the SpawningTempMin column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawningtempmin(1234); // WHERE SpawningTempMin = 1234
     * $query->filterBySpawningtempmin(array(12, 34)); // WHERE SpawningTempMin IN (12, 34)
     * $query->filterBySpawningtempmin(array('min' => 12)); // WHERE SpawningTempMin >= 12
     * $query->filterBySpawningtempmin(array('max' => 12)); // WHERE SpawningTempMin <= 12
     * </code>
     *
     * @param     mixed $spawningtempmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterBySpawningtempmin($spawningtempmin = null, $comparison = null)
    {
        if (is_array($spawningtempmin)) {
            $useMinMax = false;
            if (isset($spawningtempmin['min'])) {
                $this->addUsingAlias(BroodstockPeer::SPAWNINGTEMPMIN, $spawningtempmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spawningtempmin['max'])) {
                $this->addUsingAlias(BroodstockPeer::SPAWNINGTEMPMIN, $spawningtempmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::SPAWNINGTEMPMIN, $spawningtempmin, $comparison);
    }

    /**
     * Filter the query on the SpawningTempMax column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawningtempmax(1234); // WHERE SpawningTempMax = 1234
     * $query->filterBySpawningtempmax(array(12, 34)); // WHERE SpawningTempMax IN (12, 34)
     * $query->filterBySpawningtempmax(array('min' => 12)); // WHERE SpawningTempMax >= 12
     * $query->filterBySpawningtempmax(array('max' => 12)); // WHERE SpawningTempMax <= 12
     * </code>
     *
     * @param     mixed $spawningtempmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterBySpawningtempmax($spawningtempmax = null, $comparison = null)
    {
        if (is_array($spawningtempmax)) {
            $useMinMax = false;
            if (isset($spawningtempmax['min'])) {
                $this->addUsingAlias(BroodstockPeer::SPAWNINGTEMPMAX, $spawningtempmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spawningtempmax['max'])) {
                $this->addUsingAlias(BroodstockPeer::SPAWNINGTEMPMAX, $spawningtempmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::SPAWNINGTEMPMAX, $spawningtempmax, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterBySalinmin($salinmin = null, $comparison = null)
    {
        if (is_array($salinmin)) {
            $useMinMax = false;
            if (isset($salinmin['min'])) {
                $this->addUsingAlias(BroodstockPeer::SALINMIN, $salinmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinmin['max'])) {
                $this->addUsingAlias(BroodstockPeer::SALINMIN, $salinmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::SALINMIN, $salinmin, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterBySalinmax($salinmax = null, $comparison = null)
    {
        if (is_array($salinmax)) {
            $useMinMax = false;
            if (isset($salinmax['min'])) {
                $this->addUsingAlias(BroodstockPeer::SALINMAX, $salinmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinmax['max'])) {
                $this->addUsingAlias(BroodstockPeer::SALINMAX, $salinmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::SALINMAX, $salinmax, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByPhmin($phmin = null, $comparison = null)
    {
        if (is_array($phmin)) {
            $useMinMax = false;
            if (isset($phmin['min'])) {
                $this->addUsingAlias(BroodstockPeer::PHMIN, $phmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmin['max'])) {
                $this->addUsingAlias(BroodstockPeer::PHMIN, $phmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::PHMIN, $phmin, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByPhmax($phmax = null, $comparison = null)
    {
        if (is_array($phmax)) {
            $useMinMax = false;
            if (isset($phmax['min'])) {
                $this->addUsingAlias(BroodstockPeer::PHMAX, $phmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phmax['max'])) {
                $this->addUsingAlias(BroodstockPeer::PHMAX, $phmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::PHMAX, $phmax, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByOxygenmin($oxygenmin = null, $comparison = null)
    {
        if (is_array($oxygenmin)) {
            $useMinMax = false;
            if (isset($oxygenmin['min'])) {
                $this->addUsingAlias(BroodstockPeer::OXYGENMIN, $oxygenmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmin['max'])) {
                $this->addUsingAlias(BroodstockPeer::OXYGENMIN, $oxygenmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::OXYGENMIN, $oxygenmin, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByOxygenmax($oxygenmax = null, $comparison = null)
    {
        if (is_array($oxygenmax)) {
            $useMinMax = false;
            if (isset($oxygenmax['min'])) {
                $this->addUsingAlias(BroodstockPeer::OXYGENMAX, $oxygenmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmax['max'])) {
                $this->addUsingAlias(BroodstockPeer::OXYGENMAX, $oxygenmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::OXYGENMAX, $oxygenmax, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByHardnessmin($hardnessmin = null, $comparison = null)
    {
        if (is_array($hardnessmin)) {
            $useMinMax = false;
            if (isset($hardnessmin['min'])) {
                $this->addUsingAlias(BroodstockPeer::HARDNESSMIN, $hardnessmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hardnessmin['max'])) {
                $this->addUsingAlias(BroodstockPeer::HARDNESSMIN, $hardnessmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::HARDNESSMIN, $hardnessmin, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByHardnessmax($hardnessmax = null, $comparison = null)
    {
        if (is_array($hardnessmax)) {
            $useMinMax = false;
            if (isset($hardnessmax['min'])) {
                $this->addUsingAlias(BroodstockPeer::HARDNESSMAX, $hardnessmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hardnessmax['max'])) {
                $this->addUsingAlias(BroodstockPeer::HARDNESSMAX, $hardnessmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::HARDNESSMAX, $hardnessmax, $comparison);
    }

    /**
     * Filter the query on the BroodstockStockingRate column
     *
     * Example usage:
     * <code>
     * $query->filterByBroodstockstockingrate(1234); // WHERE BroodstockStockingRate = 1234
     * $query->filterByBroodstockstockingrate(array(12, 34)); // WHERE BroodstockStockingRate IN (12, 34)
     * $query->filterByBroodstockstockingrate(array('min' => 12)); // WHERE BroodstockStockingRate >= 12
     * $query->filterByBroodstockstockingrate(array('max' => 12)); // WHERE BroodstockStockingRate <= 12
     * </code>
     *
     * @param     mixed $broodstockstockingrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByBroodstockstockingrate($broodstockstockingrate = null, $comparison = null)
    {
        if (is_array($broodstockstockingrate)) {
            $useMinMax = false;
            if (isset($broodstockstockingrate['min'])) {
                $this->addUsingAlias(BroodstockPeer::BROODSTOCKSTOCKINGRATE, $broodstockstockingrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($broodstockstockingrate['max'])) {
                $this->addUsingAlias(BroodstockPeer::BROODSTOCKSTOCKINGRATE, $broodstockstockingrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::BROODSTOCKSTOCKINGRATE, $broodstockstockingrate, $comparison);
    }

    /**
     * Filter the query on the Broodstockfemale column
     *
     * Example usage:
     * <code>
     * $query->filterByBroodstockfemale(1234); // WHERE Broodstockfemale = 1234
     * $query->filterByBroodstockfemale(array(12, 34)); // WHERE Broodstockfemale IN (12, 34)
     * $query->filterByBroodstockfemale(array('min' => 12)); // WHERE Broodstockfemale >= 12
     * $query->filterByBroodstockfemale(array('max' => 12)); // WHERE Broodstockfemale <= 12
     * </code>
     *
     * @param     mixed $broodstockfemale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByBroodstockfemale($broodstockfemale = null, $comparison = null)
    {
        if (is_array($broodstockfemale)) {
            $useMinMax = false;
            if (isset($broodstockfemale['min'])) {
                $this->addUsingAlias(BroodstockPeer::BROODSTOCKFEMALE, $broodstockfemale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($broodstockfemale['max'])) {
                $this->addUsingAlias(BroodstockPeer::BROODSTOCKFEMALE, $broodstockfemale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::BROODSTOCKFEMALE, $broodstockfemale, $comparison);
    }

    /**
     * Filter the query on the Broodstockmale column
     *
     * Example usage:
     * <code>
     * $query->filterByBroodstockmale(1234); // WHERE Broodstockmale = 1234
     * $query->filterByBroodstockmale(array(12, 34)); // WHERE Broodstockmale IN (12, 34)
     * $query->filterByBroodstockmale(array('min' => 12)); // WHERE Broodstockmale >= 12
     * $query->filterByBroodstockmale(array('max' => 12)); // WHERE Broodstockmale <= 12
     * </code>
     *
     * @param     mixed $broodstockmale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByBroodstockmale($broodstockmale = null, $comparison = null)
    {
        if (is_array($broodstockmale)) {
            $useMinMax = false;
            if (isset($broodstockmale['min'])) {
                $this->addUsingAlias(BroodstockPeer::BROODSTOCKMALE, $broodstockmale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($broodstockmale['max'])) {
                $this->addUsingAlias(BroodstockPeer::BROODSTOCKMALE, $broodstockmale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::BROODSTOCKMALE, $broodstockmale, $comparison);
    }

    /**
     * Filter the query on the SexRatio column
     *
     * Example usage:
     * <code>
     * $query->filterBySexratio('fooValue');   // WHERE SexRatio = 'fooValue'
     * $query->filterBySexratio('%fooValue%'); // WHERE SexRatio LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sexratio The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterBySexratio($sexratio = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sexratio)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sexratio)) {
                $sexratio = str_replace('*', '%', $sexratio);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::SEXRATIO, $sexratio, $comparison);
    }

    /**
     * Filter the query on the EggProduction column
     *
     * Example usage:
     * <code>
     * $query->filterByEggproduction(1234); // WHERE EggProduction = 1234
     * $query->filterByEggproduction(array(12, 34)); // WHERE EggProduction IN (12, 34)
     * $query->filterByEggproduction(array('min' => 12)); // WHERE EggProduction >= 12
     * $query->filterByEggproduction(array('max' => 12)); // WHERE EggProduction <= 12
     * </code>
     *
     * @param     mixed $eggproduction The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByEggproduction($eggproduction = null, $comparison = null)
    {
        if (is_array($eggproduction)) {
            $useMinMax = false;
            if (isset($eggproduction['min'])) {
                $this->addUsingAlias(BroodstockPeer::EGGPRODUCTION, $eggproduction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggproduction['max'])) {
                $this->addUsingAlias(BroodstockPeer::EGGPRODUCTION, $eggproduction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::EGGPRODUCTION, $eggproduction, $comparison);
    }

    /**
     * Filter the query on the PostMortality column
     *
     * Example usage:
     * <code>
     * $query->filterByPostmortality('fooValue');   // WHERE PostMortality = 'fooValue'
     * $query->filterByPostmortality('%fooValue%'); // WHERE PostMortality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $postmortality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByPostmortality($postmortality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($postmortality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $postmortality)) {
                $postmortality = str_replace('*', '%', $postmortality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::POSTMORTALITY, $postmortality, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByFcr($fcr = null, $comparison = null)
    {
        if (is_array($fcr)) {
            $useMinMax = false;
            if (isset($fcr['min'])) {
                $this->addUsingAlias(BroodstockPeer::FCR, $fcr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fcr['max'])) {
                $this->addUsingAlias(BroodstockPeer::FCR, $fcr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::FCR, $fcr, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BroodstockPeer::COMMENTS, $comments, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(BroodstockPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(BroodstockPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::ENTERED, $entered, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(BroodstockPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(BroodstockPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(BroodstockPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(BroodstockPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::MODIFIED, $modified, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(BroodstockPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(BroodstockPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(BroodstockPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(BroodstockPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::EXPERT, $expert, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(BroodstockPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(BroodstockPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(BroodstockPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(BroodstockPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BroodstockPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Broodstock $broodstock Object to remove from the list of results
     *
     * @return BroodstockQuery The current query, for fluid interface
     */
    public function prune($broodstock = null)
    {
        if ($broodstock) {
            $this->addCond('pruneCond0', $this->getAliasedColName(BroodstockPeer::AUTOCTR), $broodstock->getAutoctr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(BroodstockPeer::STOCKCODE), $broodstock->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(BroodstockPeer::MAINREF), $broodstock->getMainref(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
