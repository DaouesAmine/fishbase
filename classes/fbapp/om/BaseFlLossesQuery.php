<?php


/**
 * Base class that represents a query for the 'fl_losses' table.
 *
 *
 *
 * @method FlLossesQuery orderByLosscode($order = Criteria::ASC) Order by the LossCode column
 * @method FlLossesQuery orderByFishcode($order = Criteria::ASC) Order by the FishCode column
 * @method FlLossesQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method FlLossesQuery orderByStockcode($order = Criteria::ASC) Order by the Stockcode column
 * @method FlLossesQuery orderByDatasourcecode($order = Criteria::ASC) Order by the DataSourceCode column
 * @method FlLossesQuery orderByLocationcode($order = Criteria::ASC) Order by the LocationCode column
 * @method FlLossesQuery orderByEstimatecode($order = Criteria::ASC) Order by the EstimateCode column
 * @method FlLossesQuery orderByLossstage($order = Criteria::ASC) Order by the LossStage column
 * @method FlLossesQuery orderByPeriodofstudy($order = Criteria::ASC) Order by the PeriodofStudy column
 * @method FlLossesQuery orderByPreviousprocess($order = Criteria::ASC) Order by the PreviousProcess column
 * @method FlLossesQuery orderByPrevioustreatment($order = Criteria::ASC) Order by the PreviousTreatment column
 * @method FlLossesQuery orderByFishsizemin($order = Criteria::ASC) Order by the FishSizeMin column
 * @method FlLossesQuery orderByFishsizemax($order = Criteria::ASC) Order by the FishSizeMax column
 * @method FlLossesQuery orderByEndusebestquality($order = Criteria::ASC) Order by the EndUseBestQuality column
 * @method FlLossesQuery orderByEnduselowerquality($order = Criteria::ASC) Order by the EndUseLowerQuality column
 * @method FlLossesQuery orderByReasonforloss($order = Criteria::ASC) Order by the ReasonForLoss column
 * @method FlLossesQuery orderByInsecttype($order = Criteria::ASC) Order by the InsectType column
 * @method FlLossesQuery orderByBatchweight($order = Criteria::ASC) Order by the BatchWeight column
 * @method FlLossesQuery orderByWeightofphysicalloss($order = Criteria::ASC) Order by the WeightOfPhysicalLoss column
 * @method FlLossesQuery orderByPhysicallossmin($order = Criteria::ASC) Order by the PhysicalLossMin column
 * @method FlLossesQuery orderByPhysicallossmax($order = Criteria::ASC) Order by the PhysicalLossMax column
 * @method FlLossesQuery orderByWeightlosingquality($order = Criteria::ASC) Order by the WeightLosingQuality column
 * @method FlLossesQuery orderByPweightlosingqualitymin($order = Criteria::ASC) Order by the PWeightLosingQualityMin column
 * @method FlLossesQuery orderByPweightlosingqualitymax($order = Criteria::ASC) Order by the PWeightLosingQualityMax column
 * @method FlLossesQuery orderByPfishaffectedbynumbermin($order = Criteria::ASC) Order by the PFishAffectedByNumberMin column
 * @method FlLossesQuery orderByPfishaffectedbynumbermax($order = Criteria::ASC) Order by the PFishAffectedByNumberMax column
 * @method FlLossesQuery orderByCosts($order = Criteria::ASC) Order by the Costs column
 * @method FlLossesQuery orderByOthers($order = Criteria::ASC) Order by the Others column
 * @method FlLossesQuery orderByEditable($order = Criteria::ASC) Order by the Editable column
 * @method FlLossesQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FlLossesQuery groupByLosscode() Group by the LossCode column
 * @method FlLossesQuery groupByFishcode() Group by the FishCode column
 * @method FlLossesQuery groupBySpeccode() Group by the Speccode column
 * @method FlLossesQuery groupByStockcode() Group by the Stockcode column
 * @method FlLossesQuery groupByDatasourcecode() Group by the DataSourceCode column
 * @method FlLossesQuery groupByLocationcode() Group by the LocationCode column
 * @method FlLossesQuery groupByEstimatecode() Group by the EstimateCode column
 * @method FlLossesQuery groupByLossstage() Group by the LossStage column
 * @method FlLossesQuery groupByPeriodofstudy() Group by the PeriodofStudy column
 * @method FlLossesQuery groupByPreviousprocess() Group by the PreviousProcess column
 * @method FlLossesQuery groupByPrevioustreatment() Group by the PreviousTreatment column
 * @method FlLossesQuery groupByFishsizemin() Group by the FishSizeMin column
 * @method FlLossesQuery groupByFishsizemax() Group by the FishSizeMax column
 * @method FlLossesQuery groupByEndusebestquality() Group by the EndUseBestQuality column
 * @method FlLossesQuery groupByEnduselowerquality() Group by the EndUseLowerQuality column
 * @method FlLossesQuery groupByReasonforloss() Group by the ReasonForLoss column
 * @method FlLossesQuery groupByInsecttype() Group by the InsectType column
 * @method FlLossesQuery groupByBatchweight() Group by the BatchWeight column
 * @method FlLossesQuery groupByWeightofphysicalloss() Group by the WeightOfPhysicalLoss column
 * @method FlLossesQuery groupByPhysicallossmin() Group by the PhysicalLossMin column
 * @method FlLossesQuery groupByPhysicallossmax() Group by the PhysicalLossMax column
 * @method FlLossesQuery groupByWeightlosingquality() Group by the WeightLosingQuality column
 * @method FlLossesQuery groupByPweightlosingqualitymin() Group by the PWeightLosingQualityMin column
 * @method FlLossesQuery groupByPweightlosingqualitymax() Group by the PWeightLosingQualityMax column
 * @method FlLossesQuery groupByPfishaffectedbynumbermin() Group by the PFishAffectedByNumberMin column
 * @method FlLossesQuery groupByPfishaffectedbynumbermax() Group by the PFishAffectedByNumberMax column
 * @method FlLossesQuery groupByCosts() Group by the Costs column
 * @method FlLossesQuery groupByOthers() Group by the Others column
 * @method FlLossesQuery groupByEditable() Group by the Editable column
 * @method FlLossesQuery groupByTs() Group by the TS column
 *
 * @method FlLossesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FlLossesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FlLossesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FlLosses findOne(PropelPDO $con = null) Return the first FlLosses matching the query
 * @method FlLosses findOneOrCreate(PropelPDO $con = null) Return the first FlLosses matching the query, or a new FlLosses object populated from the query conditions when no match is found
 *
 * @method FlLosses findOneByFishcode(int $FishCode) Return the first FlLosses filtered by the FishCode column
 * @method FlLosses findOneBySpeccode(int $Speccode) Return the first FlLosses filtered by the Speccode column
 * @method FlLosses findOneByStockcode(int $Stockcode) Return the first FlLosses filtered by the Stockcode column
 * @method FlLosses findOneByDatasourcecode(int $DataSourceCode) Return the first FlLosses filtered by the DataSourceCode column
 * @method FlLosses findOneByLocationcode(int $LocationCode) Return the first FlLosses filtered by the LocationCode column
 * @method FlLosses findOneByEstimatecode(string $EstimateCode) Return the first FlLosses filtered by the EstimateCode column
 * @method FlLosses findOneByLossstage(string $LossStage) Return the first FlLosses filtered by the LossStage column
 * @method FlLosses findOneByPeriodofstudy(string $PeriodofStudy) Return the first FlLosses filtered by the PeriodofStudy column
 * @method FlLosses findOneByPreviousprocess(string $PreviousProcess) Return the first FlLosses filtered by the PreviousProcess column
 * @method FlLosses findOneByPrevioustreatment(string $PreviousTreatment) Return the first FlLosses filtered by the PreviousTreatment column
 * @method FlLosses findOneByFishsizemin(double $FishSizeMin) Return the first FlLosses filtered by the FishSizeMin column
 * @method FlLosses findOneByFishsizemax(double $FishSizeMax) Return the first FlLosses filtered by the FishSizeMax column
 * @method FlLosses findOneByEndusebestquality(string $EndUseBestQuality) Return the first FlLosses filtered by the EndUseBestQuality column
 * @method FlLosses findOneByEnduselowerquality(string $EndUseLowerQuality) Return the first FlLosses filtered by the EndUseLowerQuality column
 * @method FlLosses findOneByReasonforloss(string $ReasonForLoss) Return the first FlLosses filtered by the ReasonForLoss column
 * @method FlLosses findOneByInsecttype(string $InsectType) Return the first FlLosses filtered by the InsectType column
 * @method FlLosses findOneByBatchweight(double $BatchWeight) Return the first FlLosses filtered by the BatchWeight column
 * @method FlLosses findOneByWeightofphysicalloss(double $WeightOfPhysicalLoss) Return the first FlLosses filtered by the WeightOfPhysicalLoss column
 * @method FlLosses findOneByPhysicallossmin(double $PhysicalLossMin) Return the first FlLosses filtered by the PhysicalLossMin column
 * @method FlLosses findOneByPhysicallossmax(double $PhysicalLossMax) Return the first FlLosses filtered by the PhysicalLossMax column
 * @method FlLosses findOneByWeightlosingquality(double $WeightLosingQuality) Return the first FlLosses filtered by the WeightLosingQuality column
 * @method FlLosses findOneByPweightlosingqualitymin(double $PWeightLosingQualityMin) Return the first FlLosses filtered by the PWeightLosingQualityMin column
 * @method FlLosses findOneByPweightlosingqualitymax(double $PWeightLosingQualityMax) Return the first FlLosses filtered by the PWeightLosingQualityMax column
 * @method FlLosses findOneByPfishaffectedbynumbermin(double $PFishAffectedByNumberMin) Return the first FlLosses filtered by the PFishAffectedByNumberMin column
 * @method FlLosses findOneByPfishaffectedbynumbermax(double $PFishAffectedByNumberMax) Return the first FlLosses filtered by the PFishAffectedByNumberMax column
 * @method FlLosses findOneByCosts(string $Costs) Return the first FlLosses filtered by the Costs column
 * @method FlLosses findOneByOthers(string $Others) Return the first FlLosses filtered by the Others column
 * @method FlLosses findOneByEditable(string $Editable) Return the first FlLosses filtered by the Editable column
 * @method FlLosses findOneByTs(string $TS) Return the first FlLosses filtered by the TS column
 *
 * @method array findByLosscode(int $LossCode) Return FlLosses objects filtered by the LossCode column
 * @method array findByFishcode(int $FishCode) Return FlLosses objects filtered by the FishCode column
 * @method array findBySpeccode(int $Speccode) Return FlLosses objects filtered by the Speccode column
 * @method array findByStockcode(int $Stockcode) Return FlLosses objects filtered by the Stockcode column
 * @method array findByDatasourcecode(int $DataSourceCode) Return FlLosses objects filtered by the DataSourceCode column
 * @method array findByLocationcode(int $LocationCode) Return FlLosses objects filtered by the LocationCode column
 * @method array findByEstimatecode(string $EstimateCode) Return FlLosses objects filtered by the EstimateCode column
 * @method array findByLossstage(string $LossStage) Return FlLosses objects filtered by the LossStage column
 * @method array findByPeriodofstudy(string $PeriodofStudy) Return FlLosses objects filtered by the PeriodofStudy column
 * @method array findByPreviousprocess(string $PreviousProcess) Return FlLosses objects filtered by the PreviousProcess column
 * @method array findByPrevioustreatment(string $PreviousTreatment) Return FlLosses objects filtered by the PreviousTreatment column
 * @method array findByFishsizemin(double $FishSizeMin) Return FlLosses objects filtered by the FishSizeMin column
 * @method array findByFishsizemax(double $FishSizeMax) Return FlLosses objects filtered by the FishSizeMax column
 * @method array findByEndusebestquality(string $EndUseBestQuality) Return FlLosses objects filtered by the EndUseBestQuality column
 * @method array findByEnduselowerquality(string $EndUseLowerQuality) Return FlLosses objects filtered by the EndUseLowerQuality column
 * @method array findByReasonforloss(string $ReasonForLoss) Return FlLosses objects filtered by the ReasonForLoss column
 * @method array findByInsecttype(string $InsectType) Return FlLosses objects filtered by the InsectType column
 * @method array findByBatchweight(double $BatchWeight) Return FlLosses objects filtered by the BatchWeight column
 * @method array findByWeightofphysicalloss(double $WeightOfPhysicalLoss) Return FlLosses objects filtered by the WeightOfPhysicalLoss column
 * @method array findByPhysicallossmin(double $PhysicalLossMin) Return FlLosses objects filtered by the PhysicalLossMin column
 * @method array findByPhysicallossmax(double $PhysicalLossMax) Return FlLosses objects filtered by the PhysicalLossMax column
 * @method array findByWeightlosingquality(double $WeightLosingQuality) Return FlLosses objects filtered by the WeightLosingQuality column
 * @method array findByPweightlosingqualitymin(double $PWeightLosingQualityMin) Return FlLosses objects filtered by the PWeightLosingQualityMin column
 * @method array findByPweightlosingqualitymax(double $PWeightLosingQualityMax) Return FlLosses objects filtered by the PWeightLosingQualityMax column
 * @method array findByPfishaffectedbynumbermin(double $PFishAffectedByNumberMin) Return FlLosses objects filtered by the PFishAffectedByNumberMin column
 * @method array findByPfishaffectedbynumbermax(double $PFishAffectedByNumberMax) Return FlLosses objects filtered by the PFishAffectedByNumberMax column
 * @method array findByCosts(string $Costs) Return FlLosses objects filtered by the Costs column
 * @method array findByOthers(string $Others) Return FlLosses objects filtered by the Others column
 * @method array findByEditable(string $Editable) Return FlLosses objects filtered by the Editable column
 * @method array findByTs(string $TS) Return FlLosses objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlLossesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFlLossesQuery object.
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
            $modelName = 'FlLosses';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FlLossesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FlLossesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FlLossesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FlLossesQuery) {
            return $criteria;
        }
        $query = new FlLossesQuery(null, null, $modelAlias);

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
     * @return   FlLosses|FlLosses[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FlLossesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FlLossesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FlLosses A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByLosscode($key, $con = null)
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
     * @return                 FlLosses A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `LossCode`, `FishCode`, `Speccode`, `Stockcode`, `DataSourceCode`, `LocationCode`, `EstimateCode`, `LossStage`, `PeriodofStudy`, `PreviousProcess`, `PreviousTreatment`, `FishSizeMin`, `FishSizeMax`, `EndUseBestQuality`, `EndUseLowerQuality`, `ReasonForLoss`, `InsectType`, `BatchWeight`, `WeightOfPhysicalLoss`, `PhysicalLossMin`, `PhysicalLossMax`, `WeightLosingQuality`, `PWeightLosingQualityMin`, `PWeightLosingQualityMax`, `PFishAffectedByNumberMin`, `PFishAffectedByNumberMax`, `Costs`, `Others`, `Editable`, `TS` FROM `fl_losses` WHERE `LossCode` = :p0';
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
            $obj = new FlLosses();
            $obj->hydrate($row);
            FlLossesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return FlLosses|FlLosses[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FlLosses[]|mixed the list of results, formatted by the current formatter
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
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FlLossesPeer::LOSSCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FlLossesPeer::LOSSCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the LossCode column
     *
     * Example usage:
     * <code>
     * $query->filterByLosscode(1234); // WHERE LossCode = 1234
     * $query->filterByLosscode(array(12, 34)); // WHERE LossCode IN (12, 34)
     * $query->filterByLosscode(array('min' => 12)); // WHERE LossCode >= 12
     * $query->filterByLosscode(array('max' => 12)); // WHERE LossCode <= 12
     * </code>
     *
     * @param     mixed $losscode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByLosscode($losscode = null, $comparison = null)
    {
        if (is_array($losscode)) {
            $useMinMax = false;
            if (isset($losscode['min'])) {
                $this->addUsingAlias(FlLossesPeer::LOSSCODE, $losscode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($losscode['max'])) {
                $this->addUsingAlias(FlLossesPeer::LOSSCODE, $losscode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::LOSSCODE, $losscode, $comparison);
    }

    /**
     * Filter the query on the FishCode column
     *
     * Example usage:
     * <code>
     * $query->filterByFishcode(1234); // WHERE FishCode = 1234
     * $query->filterByFishcode(array(12, 34)); // WHERE FishCode IN (12, 34)
     * $query->filterByFishcode(array('min' => 12)); // WHERE FishCode >= 12
     * $query->filterByFishcode(array('max' => 12)); // WHERE FishCode <= 12
     * </code>
     *
     * @param     mixed $fishcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByFishcode($fishcode = null, $comparison = null)
    {
        if (is_array($fishcode)) {
            $useMinMax = false;
            if (isset($fishcode['min'])) {
                $this->addUsingAlias(FlLossesPeer::FISHCODE, $fishcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fishcode['max'])) {
                $this->addUsingAlias(FlLossesPeer::FISHCODE, $fishcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::FISHCODE, $fishcode, $comparison);
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
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(FlLossesPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(FlLossesPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::SPECCODE, $speccode, $comparison);
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
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(FlLossesPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(FlLossesPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the DataSourceCode column
     *
     * Example usage:
     * <code>
     * $query->filterByDatasourcecode(1234); // WHERE DataSourceCode = 1234
     * $query->filterByDatasourcecode(array(12, 34)); // WHERE DataSourceCode IN (12, 34)
     * $query->filterByDatasourcecode(array('min' => 12)); // WHERE DataSourceCode >= 12
     * $query->filterByDatasourcecode(array('max' => 12)); // WHERE DataSourceCode <= 12
     * </code>
     *
     * @param     mixed $datasourcecode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByDatasourcecode($datasourcecode = null, $comparison = null)
    {
        if (is_array($datasourcecode)) {
            $useMinMax = false;
            if (isset($datasourcecode['min'])) {
                $this->addUsingAlias(FlLossesPeer::DATASOURCECODE, $datasourcecode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datasourcecode['max'])) {
                $this->addUsingAlias(FlLossesPeer::DATASOURCECODE, $datasourcecode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::DATASOURCECODE, $datasourcecode, $comparison);
    }

    /**
     * Filter the query on the LocationCode column
     *
     * Example usage:
     * <code>
     * $query->filterByLocationcode(1234); // WHERE LocationCode = 1234
     * $query->filterByLocationcode(array(12, 34)); // WHERE LocationCode IN (12, 34)
     * $query->filterByLocationcode(array('min' => 12)); // WHERE LocationCode >= 12
     * $query->filterByLocationcode(array('max' => 12)); // WHERE LocationCode <= 12
     * </code>
     *
     * @param     mixed $locationcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByLocationcode($locationcode = null, $comparison = null)
    {
        if (is_array($locationcode)) {
            $useMinMax = false;
            if (isset($locationcode['min'])) {
                $this->addUsingAlias(FlLossesPeer::LOCATIONCODE, $locationcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($locationcode['max'])) {
                $this->addUsingAlias(FlLossesPeer::LOCATIONCODE, $locationcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::LOCATIONCODE, $locationcode, $comparison);
    }

    /**
     * Filter the query on the EstimateCode column
     *
     * Example usage:
     * <code>
     * $query->filterByEstimatecode('fooValue');   // WHERE EstimateCode = 'fooValue'
     * $query->filterByEstimatecode('%fooValue%'); // WHERE EstimateCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $estimatecode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByEstimatecode($estimatecode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($estimatecode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $estimatecode)) {
                $estimatecode = str_replace('*', '%', $estimatecode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::ESTIMATECODE, $estimatecode, $comparison);
    }

    /**
     * Filter the query on the LossStage column
     *
     * Example usage:
     * <code>
     * $query->filterByLossstage('fooValue');   // WHERE LossStage = 'fooValue'
     * $query->filterByLossstage('%fooValue%'); // WHERE LossStage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lossstage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByLossstage($lossstage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lossstage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lossstage)) {
                $lossstage = str_replace('*', '%', $lossstage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::LOSSSTAGE, $lossstage, $comparison);
    }

    /**
     * Filter the query on the PeriodofStudy column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodofstudy('fooValue');   // WHERE PeriodofStudy = 'fooValue'
     * $query->filterByPeriodofstudy('%fooValue%'); // WHERE PeriodofStudy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $periodofstudy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByPeriodofstudy($periodofstudy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($periodofstudy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $periodofstudy)) {
                $periodofstudy = str_replace('*', '%', $periodofstudy);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::PERIODOFSTUDY, $periodofstudy, $comparison);
    }

    /**
     * Filter the query on the PreviousProcess column
     *
     * Example usage:
     * <code>
     * $query->filterByPreviousprocess('fooValue');   // WHERE PreviousProcess = 'fooValue'
     * $query->filterByPreviousprocess('%fooValue%'); // WHERE PreviousProcess LIKE '%fooValue%'
     * </code>
     *
     * @param     string $previousprocess The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByPreviousprocess($previousprocess = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($previousprocess)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $previousprocess)) {
                $previousprocess = str_replace('*', '%', $previousprocess);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::PREVIOUSPROCESS, $previousprocess, $comparison);
    }

    /**
     * Filter the query on the PreviousTreatment column
     *
     * Example usage:
     * <code>
     * $query->filterByPrevioustreatment('fooValue');   // WHERE PreviousTreatment = 'fooValue'
     * $query->filterByPrevioustreatment('%fooValue%'); // WHERE PreviousTreatment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $previoustreatment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByPrevioustreatment($previoustreatment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($previoustreatment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $previoustreatment)) {
                $previoustreatment = str_replace('*', '%', $previoustreatment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::PREVIOUSTREATMENT, $previoustreatment, $comparison);
    }

    /**
     * Filter the query on the FishSizeMin column
     *
     * Example usage:
     * <code>
     * $query->filterByFishsizemin(1234); // WHERE FishSizeMin = 1234
     * $query->filterByFishsizemin(array(12, 34)); // WHERE FishSizeMin IN (12, 34)
     * $query->filterByFishsizemin(array('min' => 12)); // WHERE FishSizeMin >= 12
     * $query->filterByFishsizemin(array('max' => 12)); // WHERE FishSizeMin <= 12
     * </code>
     *
     * @param     mixed $fishsizemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByFishsizemin($fishsizemin = null, $comparison = null)
    {
        if (is_array($fishsizemin)) {
            $useMinMax = false;
            if (isset($fishsizemin['min'])) {
                $this->addUsingAlias(FlLossesPeer::FISHSIZEMIN, $fishsizemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fishsizemin['max'])) {
                $this->addUsingAlias(FlLossesPeer::FISHSIZEMIN, $fishsizemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::FISHSIZEMIN, $fishsizemin, $comparison);
    }

    /**
     * Filter the query on the FishSizeMax column
     *
     * Example usage:
     * <code>
     * $query->filterByFishsizemax(1234); // WHERE FishSizeMax = 1234
     * $query->filterByFishsizemax(array(12, 34)); // WHERE FishSizeMax IN (12, 34)
     * $query->filterByFishsizemax(array('min' => 12)); // WHERE FishSizeMax >= 12
     * $query->filterByFishsizemax(array('max' => 12)); // WHERE FishSizeMax <= 12
     * </code>
     *
     * @param     mixed $fishsizemax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByFishsizemax($fishsizemax = null, $comparison = null)
    {
        if (is_array($fishsizemax)) {
            $useMinMax = false;
            if (isset($fishsizemax['min'])) {
                $this->addUsingAlias(FlLossesPeer::FISHSIZEMAX, $fishsizemax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fishsizemax['max'])) {
                $this->addUsingAlias(FlLossesPeer::FISHSIZEMAX, $fishsizemax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::FISHSIZEMAX, $fishsizemax, $comparison);
    }

    /**
     * Filter the query on the EndUseBestQuality column
     *
     * Example usage:
     * <code>
     * $query->filterByEndusebestquality('fooValue');   // WHERE EndUseBestQuality = 'fooValue'
     * $query->filterByEndusebestquality('%fooValue%'); // WHERE EndUseBestQuality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $endusebestquality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByEndusebestquality($endusebestquality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($endusebestquality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $endusebestquality)) {
                $endusebestquality = str_replace('*', '%', $endusebestquality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::ENDUSEBESTQUALITY, $endusebestquality, $comparison);
    }

    /**
     * Filter the query on the EndUseLowerQuality column
     *
     * Example usage:
     * <code>
     * $query->filterByEnduselowerquality('fooValue');   // WHERE EndUseLowerQuality = 'fooValue'
     * $query->filterByEnduselowerquality('%fooValue%'); // WHERE EndUseLowerQuality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $enduselowerquality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByEnduselowerquality($enduselowerquality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($enduselowerquality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $enduselowerquality)) {
                $enduselowerquality = str_replace('*', '%', $enduselowerquality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::ENDUSELOWERQUALITY, $enduselowerquality, $comparison);
    }

    /**
     * Filter the query on the ReasonForLoss column
     *
     * Example usage:
     * <code>
     * $query->filterByReasonforloss('fooValue');   // WHERE ReasonForLoss = 'fooValue'
     * $query->filterByReasonforloss('%fooValue%'); // WHERE ReasonForLoss LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reasonforloss The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByReasonforloss($reasonforloss = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reasonforloss)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reasonforloss)) {
                $reasonforloss = str_replace('*', '%', $reasonforloss);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::REASONFORLOSS, $reasonforloss, $comparison);
    }

    /**
     * Filter the query on the InsectType column
     *
     * Example usage:
     * <code>
     * $query->filterByInsecttype('fooValue');   // WHERE InsectType = 'fooValue'
     * $query->filterByInsecttype('%fooValue%'); // WHERE InsectType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $insecttype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByInsecttype($insecttype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($insecttype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $insecttype)) {
                $insecttype = str_replace('*', '%', $insecttype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::INSECTTYPE, $insecttype, $comparison);
    }

    /**
     * Filter the query on the BatchWeight column
     *
     * Example usage:
     * <code>
     * $query->filterByBatchweight(1234); // WHERE BatchWeight = 1234
     * $query->filterByBatchweight(array(12, 34)); // WHERE BatchWeight IN (12, 34)
     * $query->filterByBatchweight(array('min' => 12)); // WHERE BatchWeight >= 12
     * $query->filterByBatchweight(array('max' => 12)); // WHERE BatchWeight <= 12
     * </code>
     *
     * @param     mixed $batchweight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByBatchweight($batchweight = null, $comparison = null)
    {
        if (is_array($batchweight)) {
            $useMinMax = false;
            if (isset($batchweight['min'])) {
                $this->addUsingAlias(FlLossesPeer::BATCHWEIGHT, $batchweight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchweight['max'])) {
                $this->addUsingAlias(FlLossesPeer::BATCHWEIGHT, $batchweight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::BATCHWEIGHT, $batchweight, $comparison);
    }

    /**
     * Filter the query on the WeightOfPhysicalLoss column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightofphysicalloss(1234); // WHERE WeightOfPhysicalLoss = 1234
     * $query->filterByWeightofphysicalloss(array(12, 34)); // WHERE WeightOfPhysicalLoss IN (12, 34)
     * $query->filterByWeightofphysicalloss(array('min' => 12)); // WHERE WeightOfPhysicalLoss >= 12
     * $query->filterByWeightofphysicalloss(array('max' => 12)); // WHERE WeightOfPhysicalLoss <= 12
     * </code>
     *
     * @param     mixed $weightofphysicalloss The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByWeightofphysicalloss($weightofphysicalloss = null, $comparison = null)
    {
        if (is_array($weightofphysicalloss)) {
            $useMinMax = false;
            if (isset($weightofphysicalloss['min'])) {
                $this->addUsingAlias(FlLossesPeer::WEIGHTOFPHYSICALLOSS, $weightofphysicalloss['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightofphysicalloss['max'])) {
                $this->addUsingAlias(FlLossesPeer::WEIGHTOFPHYSICALLOSS, $weightofphysicalloss['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::WEIGHTOFPHYSICALLOSS, $weightofphysicalloss, $comparison);
    }

    /**
     * Filter the query on the PhysicalLossMin column
     *
     * Example usage:
     * <code>
     * $query->filterByPhysicallossmin(1234); // WHERE PhysicalLossMin = 1234
     * $query->filterByPhysicallossmin(array(12, 34)); // WHERE PhysicalLossMin IN (12, 34)
     * $query->filterByPhysicallossmin(array('min' => 12)); // WHERE PhysicalLossMin >= 12
     * $query->filterByPhysicallossmin(array('max' => 12)); // WHERE PhysicalLossMin <= 12
     * </code>
     *
     * @param     mixed $physicallossmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByPhysicallossmin($physicallossmin = null, $comparison = null)
    {
        if (is_array($physicallossmin)) {
            $useMinMax = false;
            if (isset($physicallossmin['min'])) {
                $this->addUsingAlias(FlLossesPeer::PHYSICALLOSSMIN, $physicallossmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($physicallossmin['max'])) {
                $this->addUsingAlias(FlLossesPeer::PHYSICALLOSSMIN, $physicallossmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::PHYSICALLOSSMIN, $physicallossmin, $comparison);
    }

    /**
     * Filter the query on the PhysicalLossMax column
     *
     * Example usage:
     * <code>
     * $query->filterByPhysicallossmax(1234); // WHERE PhysicalLossMax = 1234
     * $query->filterByPhysicallossmax(array(12, 34)); // WHERE PhysicalLossMax IN (12, 34)
     * $query->filterByPhysicallossmax(array('min' => 12)); // WHERE PhysicalLossMax >= 12
     * $query->filterByPhysicallossmax(array('max' => 12)); // WHERE PhysicalLossMax <= 12
     * </code>
     *
     * @param     mixed $physicallossmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByPhysicallossmax($physicallossmax = null, $comparison = null)
    {
        if (is_array($physicallossmax)) {
            $useMinMax = false;
            if (isset($physicallossmax['min'])) {
                $this->addUsingAlias(FlLossesPeer::PHYSICALLOSSMAX, $physicallossmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($physicallossmax['max'])) {
                $this->addUsingAlias(FlLossesPeer::PHYSICALLOSSMAX, $physicallossmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::PHYSICALLOSSMAX, $physicallossmax, $comparison);
    }

    /**
     * Filter the query on the WeightLosingQuality column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightlosingquality(1234); // WHERE WeightLosingQuality = 1234
     * $query->filterByWeightlosingquality(array(12, 34)); // WHERE WeightLosingQuality IN (12, 34)
     * $query->filterByWeightlosingquality(array('min' => 12)); // WHERE WeightLosingQuality >= 12
     * $query->filterByWeightlosingquality(array('max' => 12)); // WHERE WeightLosingQuality <= 12
     * </code>
     *
     * @param     mixed $weightlosingquality The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByWeightlosingquality($weightlosingquality = null, $comparison = null)
    {
        if (is_array($weightlosingquality)) {
            $useMinMax = false;
            if (isset($weightlosingquality['min'])) {
                $this->addUsingAlias(FlLossesPeer::WEIGHTLOSINGQUALITY, $weightlosingquality['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightlosingquality['max'])) {
                $this->addUsingAlias(FlLossesPeer::WEIGHTLOSINGQUALITY, $weightlosingquality['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::WEIGHTLOSINGQUALITY, $weightlosingquality, $comparison);
    }

    /**
     * Filter the query on the PWeightLosingQualityMin column
     *
     * Example usage:
     * <code>
     * $query->filterByPweightlosingqualitymin(1234); // WHERE PWeightLosingQualityMin = 1234
     * $query->filterByPweightlosingqualitymin(array(12, 34)); // WHERE PWeightLosingQualityMin IN (12, 34)
     * $query->filterByPweightlosingqualitymin(array('min' => 12)); // WHERE PWeightLosingQualityMin >= 12
     * $query->filterByPweightlosingqualitymin(array('max' => 12)); // WHERE PWeightLosingQualityMin <= 12
     * </code>
     *
     * @param     mixed $pweightlosingqualitymin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByPweightlosingqualitymin($pweightlosingqualitymin = null, $comparison = null)
    {
        if (is_array($pweightlosingqualitymin)) {
            $useMinMax = false;
            if (isset($pweightlosingqualitymin['min'])) {
                $this->addUsingAlias(FlLossesPeer::PWEIGHTLOSINGQUALITYMIN, $pweightlosingqualitymin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pweightlosingqualitymin['max'])) {
                $this->addUsingAlias(FlLossesPeer::PWEIGHTLOSINGQUALITYMIN, $pweightlosingqualitymin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::PWEIGHTLOSINGQUALITYMIN, $pweightlosingqualitymin, $comparison);
    }

    /**
     * Filter the query on the PWeightLosingQualityMax column
     *
     * Example usage:
     * <code>
     * $query->filterByPweightlosingqualitymax(1234); // WHERE PWeightLosingQualityMax = 1234
     * $query->filterByPweightlosingqualitymax(array(12, 34)); // WHERE PWeightLosingQualityMax IN (12, 34)
     * $query->filterByPweightlosingqualitymax(array('min' => 12)); // WHERE PWeightLosingQualityMax >= 12
     * $query->filterByPweightlosingqualitymax(array('max' => 12)); // WHERE PWeightLosingQualityMax <= 12
     * </code>
     *
     * @param     mixed $pweightlosingqualitymax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByPweightlosingqualitymax($pweightlosingqualitymax = null, $comparison = null)
    {
        if (is_array($pweightlosingqualitymax)) {
            $useMinMax = false;
            if (isset($pweightlosingqualitymax['min'])) {
                $this->addUsingAlias(FlLossesPeer::PWEIGHTLOSINGQUALITYMAX, $pweightlosingqualitymax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pweightlosingqualitymax['max'])) {
                $this->addUsingAlias(FlLossesPeer::PWEIGHTLOSINGQUALITYMAX, $pweightlosingqualitymax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::PWEIGHTLOSINGQUALITYMAX, $pweightlosingqualitymax, $comparison);
    }

    /**
     * Filter the query on the PFishAffectedByNumberMin column
     *
     * Example usage:
     * <code>
     * $query->filterByPfishaffectedbynumbermin(1234); // WHERE PFishAffectedByNumberMin = 1234
     * $query->filterByPfishaffectedbynumbermin(array(12, 34)); // WHERE PFishAffectedByNumberMin IN (12, 34)
     * $query->filterByPfishaffectedbynumbermin(array('min' => 12)); // WHERE PFishAffectedByNumberMin >= 12
     * $query->filterByPfishaffectedbynumbermin(array('max' => 12)); // WHERE PFishAffectedByNumberMin <= 12
     * </code>
     *
     * @param     mixed $pfishaffectedbynumbermin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByPfishaffectedbynumbermin($pfishaffectedbynumbermin = null, $comparison = null)
    {
        if (is_array($pfishaffectedbynumbermin)) {
            $useMinMax = false;
            if (isset($pfishaffectedbynumbermin['min'])) {
                $this->addUsingAlias(FlLossesPeer::PFISHAFFECTEDBYNUMBERMIN, $pfishaffectedbynumbermin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfishaffectedbynumbermin['max'])) {
                $this->addUsingAlias(FlLossesPeer::PFISHAFFECTEDBYNUMBERMIN, $pfishaffectedbynumbermin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::PFISHAFFECTEDBYNUMBERMIN, $pfishaffectedbynumbermin, $comparison);
    }

    /**
     * Filter the query on the PFishAffectedByNumberMax column
     *
     * Example usage:
     * <code>
     * $query->filterByPfishaffectedbynumbermax(1234); // WHERE PFishAffectedByNumberMax = 1234
     * $query->filterByPfishaffectedbynumbermax(array(12, 34)); // WHERE PFishAffectedByNumberMax IN (12, 34)
     * $query->filterByPfishaffectedbynumbermax(array('min' => 12)); // WHERE PFishAffectedByNumberMax >= 12
     * $query->filterByPfishaffectedbynumbermax(array('max' => 12)); // WHERE PFishAffectedByNumberMax <= 12
     * </code>
     *
     * @param     mixed $pfishaffectedbynumbermax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByPfishaffectedbynumbermax($pfishaffectedbynumbermax = null, $comparison = null)
    {
        if (is_array($pfishaffectedbynumbermax)) {
            $useMinMax = false;
            if (isset($pfishaffectedbynumbermax['min'])) {
                $this->addUsingAlias(FlLossesPeer::PFISHAFFECTEDBYNUMBERMAX, $pfishaffectedbynumbermax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfishaffectedbynumbermax['max'])) {
                $this->addUsingAlias(FlLossesPeer::PFISHAFFECTEDBYNUMBERMAX, $pfishaffectedbynumbermax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::PFISHAFFECTEDBYNUMBERMAX, $pfishaffectedbynumbermax, $comparison);
    }

    /**
     * Filter the query on the Costs column
     *
     * Example usage:
     * <code>
     * $query->filterByCosts('fooValue');   // WHERE Costs = 'fooValue'
     * $query->filterByCosts('%fooValue%'); // WHERE Costs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $costs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByCosts($costs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($costs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $costs)) {
                $costs = str_replace('*', '%', $costs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::COSTS, $costs, $comparison);
    }

    /**
     * Filter the query on the Others column
     *
     * Example usage:
     * <code>
     * $query->filterByOthers('fooValue');   // WHERE Others = 'fooValue'
     * $query->filterByOthers('%fooValue%'); // WHERE Others LIKE '%fooValue%'
     * </code>
     *
     * @param     string $others The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByOthers($others = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($others)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $others)) {
                $others = str_replace('*', '%', $others);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::OTHERS, $others, $comparison);
    }

    /**
     * Filter the query on the Editable column
     *
     * Example usage:
     * <code>
     * $query->filterByEditable('fooValue');   // WHERE Editable = 'fooValue'
     * $query->filterByEditable('%fooValue%'); // WHERE Editable LIKE '%fooValue%'
     * </code>
     *
     * @param     string $editable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByEditable($editable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($editable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $editable)) {
                $editable = str_replace('*', '%', $editable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::EDITABLE, $editable, $comparison);
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
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FlLossesPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FlLossesPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   FlLosses $flLosses Object to remove from the list of results
     *
     * @return FlLossesQuery The current query, for fluid interface
     */
    public function prune($flLosses = null)
    {
        if ($flLosses) {
            $this->addUsingAlias(FlLossesPeer::LOSSCODE, $flLosses->getLosscode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
