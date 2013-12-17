<?php


/**
 * Base class that represents a query for the 'cultspec' table.
 *
 *
 *
 * @method CultspecQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method CultspecQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method CultspecQuery orderByCultspecrefno($order = Criteria::ASC) Order by the CultSpecRefNo column
 * @method CultspecQuery orderByCultcode($order = Criteria::ASC) Order by the CultCode column
 * @method CultspecQuery orderByStockingrate($order = Criteria::ASC) Order by the StockingRate column
 * @method CultspecQuery orderByUnitstocking($order = Criteria::ASC) Order by the UnitStocking column
 * @method CultspecQuery orderByTotalstocking($order = Criteria::ASC) Order by the TotalStocking column
 * @method CultspecQuery orderByStockinglength($order = Criteria::ASC) Order by the StockingLength column
 * @method CultspecQuery orderByTypestocklength($order = Criteria::ASC) Order by the TypeStockLength column
 * @method CultspecQuery orderByCommentstocklength($order = Criteria::ASC) Order by the CommentStockLength column
 * @method CultspecQuery orderByWeightstocking($order = Criteria::ASC) Order by the WeightStocking column
 * @method CultspecQuery orderByStockingage($order = Criteria::ASC) Order by the StockingAge column
 * @method CultspecQuery orderByLoounsexed($order = Criteria::ASC) Order by the LooUnsexed column
 * @method CultspecQuery orderByKunsexed($order = Criteria::ASC) Order by the KUnsexed column
 * @method CultspecQuery orderByMethod($order = Criteria::ASC) Order by the Method column
 * @method CultspecQuery orderByLoofemale($order = Criteria::ASC) Order by the LooFemale column
 * @method CultspecQuery orderByKfemale($order = Criteria::ASC) Order by the KFemale column
 * @method CultspecQuery orderByLoomale($order = Criteria::ASC) Order by the LooMale column
 * @method CultspecQuery orderByKmale($order = Criteria::ASC) Order by the KMale column
 * @method CultspecQuery orderByRemarksongrowth($order = Criteria::ASC) Order by the RemarksonGrowth column
 * @method CultspecQuery orderByProductionperiod($order = Criteria::ASC) Order by the ProductionPeriod column
 * @method CultspecQuery orderByHarvestingpractice($order = Criteria::ASC) Order by the HarvestingPractice column
 * @method CultspecQuery orderByHarvestinglength($order = Criteria::ASC) Order by the HarvestingLength column
 * @method CultspecQuery orderByTypeharvestlength($order = Criteria::ASC) Order by the TypeHarvestLength column
 * @method CultspecQuery orderByCommentharvlength($order = Criteria::ASC) Order by the CommentHarvLength column
 * @method CultspecQuery orderByHarvestingweight($order = Criteria::ASC) Order by the HarvestingWeight column
 * @method CultspecQuery orderByMatureatharvest($order = Criteria::ASC) Order by the MatureatHarvest column
 * @method CultspecQuery orderByMperiod($order = Criteria::ASC) Order by the MPeriod column
 * @method CultspecQuery orderByProductioncycle($order = Criteria::ASC) Order by the ProductionCycle column
 * @method CultspecQuery orderByUnitcycle($order = Criteria::ASC) Order by the UnitCycle column
 * @method CultspecQuery orderByProductionyear($order = Criteria::ASC) Order by the ProductionYear column
 * @method CultspecQuery orderByUnityear($order = Criteria::ASC) Order by the UnitYear column
 * @method CultspecQuery orderByProductionyearext($order = Criteria::ASC) Order by the ProductionYearExt column
 * @method CultspecQuery orderByUnityearext($order = Criteria::ASC) Order by the UnitYearExt column
 * @method CultspecQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method CultspecQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method CultspecQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method CultspecQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method CultspecQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method CultspecQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method CultspecQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method CultspecQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method CultspecQuery groupByStockcode() Group by the StockCode column
 * @method CultspecQuery groupBySpeccode() Group by the SpecCode column
 * @method CultspecQuery groupByCultspecrefno() Group by the CultSpecRefNo column
 * @method CultspecQuery groupByCultcode() Group by the CultCode column
 * @method CultspecQuery groupByStockingrate() Group by the StockingRate column
 * @method CultspecQuery groupByUnitstocking() Group by the UnitStocking column
 * @method CultspecQuery groupByTotalstocking() Group by the TotalStocking column
 * @method CultspecQuery groupByStockinglength() Group by the StockingLength column
 * @method CultspecQuery groupByTypestocklength() Group by the TypeStockLength column
 * @method CultspecQuery groupByCommentstocklength() Group by the CommentStockLength column
 * @method CultspecQuery groupByWeightstocking() Group by the WeightStocking column
 * @method CultspecQuery groupByStockingage() Group by the StockingAge column
 * @method CultspecQuery groupByLoounsexed() Group by the LooUnsexed column
 * @method CultspecQuery groupByKunsexed() Group by the KUnsexed column
 * @method CultspecQuery groupByMethod() Group by the Method column
 * @method CultspecQuery groupByLoofemale() Group by the LooFemale column
 * @method CultspecQuery groupByKfemale() Group by the KFemale column
 * @method CultspecQuery groupByLoomale() Group by the LooMale column
 * @method CultspecQuery groupByKmale() Group by the KMale column
 * @method CultspecQuery groupByRemarksongrowth() Group by the RemarksonGrowth column
 * @method CultspecQuery groupByProductionperiod() Group by the ProductionPeriod column
 * @method CultspecQuery groupByHarvestingpractice() Group by the HarvestingPractice column
 * @method CultspecQuery groupByHarvestinglength() Group by the HarvestingLength column
 * @method CultspecQuery groupByTypeharvestlength() Group by the TypeHarvestLength column
 * @method CultspecQuery groupByCommentharvlength() Group by the CommentHarvLength column
 * @method CultspecQuery groupByHarvestingweight() Group by the HarvestingWeight column
 * @method CultspecQuery groupByMatureatharvest() Group by the MatureatHarvest column
 * @method CultspecQuery groupByMperiod() Group by the MPeriod column
 * @method CultspecQuery groupByProductioncycle() Group by the ProductionCycle column
 * @method CultspecQuery groupByUnitcycle() Group by the UnitCycle column
 * @method CultspecQuery groupByProductionyear() Group by the ProductionYear column
 * @method CultspecQuery groupByUnityear() Group by the UnitYear column
 * @method CultspecQuery groupByProductionyearext() Group by the ProductionYearExt column
 * @method CultspecQuery groupByUnityearext() Group by the UnitYearExt column
 * @method CultspecQuery groupByComment() Group by the Comment column
 * @method CultspecQuery groupByEntered() Group by the Entered column
 * @method CultspecQuery groupByDateentered() Group by the DateEntered column
 * @method CultspecQuery groupByModified() Group by the Modified column
 * @method CultspecQuery groupByDatemodified() Group by the DateModified column
 * @method CultspecQuery groupByExpert() Group by the Expert column
 * @method CultspecQuery groupByDatechecked() Group by the DateChecked column
 * @method CultspecQuery groupByTs() Group by the TS column
 *
 * @method CultspecQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CultspecQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CultspecQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Cultspec findOne(PropelPDO $con = null) Return the first Cultspec matching the query
 * @method Cultspec findOneOrCreate(PropelPDO $con = null) Return the first Cultspec matching the query, or a new Cultspec object populated from the query conditions when no match is found
 *
 * @method Cultspec findOneByStockcode(int $StockCode) Return the first Cultspec filtered by the StockCode column
 * @method Cultspec findOneBySpeccode(int $SpecCode) Return the first Cultspec filtered by the SpecCode column
 * @method Cultspec findOneByCultspecrefno(int $CultSpecRefNo) Return the first Cultspec filtered by the CultSpecRefNo column
 * @method Cultspec findOneByCultcode(int $CultCode) Return the first Cultspec filtered by the CultCode column
 * @method Cultspec findOneByStockingrate(double $StockingRate) Return the first Cultspec filtered by the StockingRate column
 * @method Cultspec findOneByUnitstocking(string $UnitStocking) Return the first Cultspec filtered by the UnitStocking column
 * @method Cultspec findOneByTotalstocking(double $TotalStocking) Return the first Cultspec filtered by the TotalStocking column
 * @method Cultspec findOneByStockinglength(double $StockingLength) Return the first Cultspec filtered by the StockingLength column
 * @method Cultspec findOneByTypestocklength(string $TypeStockLength) Return the first Cultspec filtered by the TypeStockLength column
 * @method Cultspec findOneByCommentstocklength(string $CommentStockLength) Return the first Cultspec filtered by the CommentStockLength column
 * @method Cultspec findOneByWeightstocking(double $WeightStocking) Return the first Cultspec filtered by the WeightStocking column
 * @method Cultspec findOneByStockingage(int $StockingAge) Return the first Cultspec filtered by the StockingAge column
 * @method Cultspec findOneByLoounsexed(double $LooUnsexed) Return the first Cultspec filtered by the LooUnsexed column
 * @method Cultspec findOneByKunsexed(double $KUnsexed) Return the first Cultspec filtered by the KUnsexed column
 * @method Cultspec findOneByMethod(string $Method) Return the first Cultspec filtered by the Method column
 * @method Cultspec findOneByLoofemale(double $LooFemale) Return the first Cultspec filtered by the LooFemale column
 * @method Cultspec findOneByKfemale(double $KFemale) Return the first Cultspec filtered by the KFemale column
 * @method Cultspec findOneByLoomale(double $LooMale) Return the first Cultspec filtered by the LooMale column
 * @method Cultspec findOneByKmale(double $KMale) Return the first Cultspec filtered by the KMale column
 * @method Cultspec findOneByRemarksongrowth(string $RemarksonGrowth) Return the first Cultspec filtered by the RemarksonGrowth column
 * @method Cultspec findOneByProductionperiod(int $ProductionPeriod) Return the first Cultspec filtered by the ProductionPeriod column
 * @method Cultspec findOneByHarvestingpractice(string $HarvestingPractice) Return the first Cultspec filtered by the HarvestingPractice column
 * @method Cultspec findOneByHarvestinglength(double $HarvestingLength) Return the first Cultspec filtered by the HarvestingLength column
 * @method Cultspec findOneByTypeharvestlength(string $TypeHarvestLength) Return the first Cultspec filtered by the TypeHarvestLength column
 * @method Cultspec findOneByCommentharvlength(string $CommentHarvLength) Return the first Cultspec filtered by the CommentHarvLength column
 * @method Cultspec findOneByHarvestingweight(double $HarvestingWeight) Return the first Cultspec filtered by the HarvestingWeight column
 * @method Cultspec findOneByMatureatharvest(string $MatureatHarvest) Return the first Cultspec filtered by the MatureatHarvest column
 * @method Cultspec findOneByMperiod(double $MPeriod) Return the first Cultspec filtered by the MPeriod column
 * @method Cultspec findOneByProductioncycle(double $ProductionCycle) Return the first Cultspec filtered by the ProductionCycle column
 * @method Cultspec findOneByUnitcycle(string $UnitCycle) Return the first Cultspec filtered by the UnitCycle column
 * @method Cultspec findOneByProductionyear(double $ProductionYear) Return the first Cultspec filtered by the ProductionYear column
 * @method Cultspec findOneByUnityear(string $UnitYear) Return the first Cultspec filtered by the UnitYear column
 * @method Cultspec findOneByProductionyearext(double $ProductionYearExt) Return the first Cultspec filtered by the ProductionYearExt column
 * @method Cultspec findOneByUnityearext(string $UnitYearExt) Return the first Cultspec filtered by the UnitYearExt column
 * @method Cultspec findOneByComment(string $Comment) Return the first Cultspec filtered by the Comment column
 * @method Cultspec findOneByEntered(int $Entered) Return the first Cultspec filtered by the Entered column
 * @method Cultspec findOneByDateentered(string $DateEntered) Return the first Cultspec filtered by the DateEntered column
 * @method Cultspec findOneByModified(int $Modified) Return the first Cultspec filtered by the Modified column
 * @method Cultspec findOneByDatemodified(string $DateModified) Return the first Cultspec filtered by the DateModified column
 * @method Cultspec findOneByExpert(int $Expert) Return the first Cultspec filtered by the Expert column
 * @method Cultspec findOneByDatechecked(string $DateChecked) Return the first Cultspec filtered by the DateChecked column
 * @method Cultspec findOneByTs(string $TS) Return the first Cultspec filtered by the TS column
 *
 * @method array findByStockcode(int $StockCode) Return Cultspec objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Cultspec objects filtered by the SpecCode column
 * @method array findByCultspecrefno(int $CultSpecRefNo) Return Cultspec objects filtered by the CultSpecRefNo column
 * @method array findByCultcode(int $CultCode) Return Cultspec objects filtered by the CultCode column
 * @method array findByStockingrate(double $StockingRate) Return Cultspec objects filtered by the StockingRate column
 * @method array findByUnitstocking(string $UnitStocking) Return Cultspec objects filtered by the UnitStocking column
 * @method array findByTotalstocking(double $TotalStocking) Return Cultspec objects filtered by the TotalStocking column
 * @method array findByStockinglength(double $StockingLength) Return Cultspec objects filtered by the StockingLength column
 * @method array findByTypestocklength(string $TypeStockLength) Return Cultspec objects filtered by the TypeStockLength column
 * @method array findByCommentstocklength(string $CommentStockLength) Return Cultspec objects filtered by the CommentStockLength column
 * @method array findByWeightstocking(double $WeightStocking) Return Cultspec objects filtered by the WeightStocking column
 * @method array findByStockingage(int $StockingAge) Return Cultspec objects filtered by the StockingAge column
 * @method array findByLoounsexed(double $LooUnsexed) Return Cultspec objects filtered by the LooUnsexed column
 * @method array findByKunsexed(double $KUnsexed) Return Cultspec objects filtered by the KUnsexed column
 * @method array findByMethod(string $Method) Return Cultspec objects filtered by the Method column
 * @method array findByLoofemale(double $LooFemale) Return Cultspec objects filtered by the LooFemale column
 * @method array findByKfemale(double $KFemale) Return Cultspec objects filtered by the KFemale column
 * @method array findByLoomale(double $LooMale) Return Cultspec objects filtered by the LooMale column
 * @method array findByKmale(double $KMale) Return Cultspec objects filtered by the KMale column
 * @method array findByRemarksongrowth(string $RemarksonGrowth) Return Cultspec objects filtered by the RemarksonGrowth column
 * @method array findByProductionperiod(int $ProductionPeriod) Return Cultspec objects filtered by the ProductionPeriod column
 * @method array findByHarvestingpractice(string $HarvestingPractice) Return Cultspec objects filtered by the HarvestingPractice column
 * @method array findByHarvestinglength(double $HarvestingLength) Return Cultspec objects filtered by the HarvestingLength column
 * @method array findByTypeharvestlength(string $TypeHarvestLength) Return Cultspec objects filtered by the TypeHarvestLength column
 * @method array findByCommentharvlength(string $CommentHarvLength) Return Cultspec objects filtered by the CommentHarvLength column
 * @method array findByHarvestingweight(double $HarvestingWeight) Return Cultspec objects filtered by the HarvestingWeight column
 * @method array findByMatureatharvest(string $MatureatHarvest) Return Cultspec objects filtered by the MatureatHarvest column
 * @method array findByMperiod(double $MPeriod) Return Cultspec objects filtered by the MPeriod column
 * @method array findByProductioncycle(double $ProductionCycle) Return Cultspec objects filtered by the ProductionCycle column
 * @method array findByUnitcycle(string $UnitCycle) Return Cultspec objects filtered by the UnitCycle column
 * @method array findByProductionyear(double $ProductionYear) Return Cultspec objects filtered by the ProductionYear column
 * @method array findByUnityear(string $UnitYear) Return Cultspec objects filtered by the UnitYear column
 * @method array findByProductionyearext(double $ProductionYearExt) Return Cultspec objects filtered by the ProductionYearExt column
 * @method array findByUnityearext(string $UnitYearExt) Return Cultspec objects filtered by the UnitYearExt column
 * @method array findByComment(string $Comment) Return Cultspec objects filtered by the Comment column
 * @method array findByEntered(int $Entered) Return Cultspec objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Cultspec objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Cultspec objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Cultspec objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Cultspec objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Cultspec objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Cultspec objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCultspecQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCultspecQuery object.
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
            $modelName = 'Cultspec';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CultspecQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CultspecQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CultspecQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CultspecQuery) {
            return $criteria;
        }
        $query = new CultspecQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$StockCode, $CultCode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Cultspec|Cultspec[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CultspecPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CultspecPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cultspec A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `StockCode`, `SpecCode`, `CultSpecRefNo`, `CultCode`, `StockingRate`, `UnitStocking`, `TotalStocking`, `StockingLength`, `TypeStockLength`, `CommentStockLength`, `WeightStocking`, `StockingAge`, `LooUnsexed`, `KUnsexed`, `Method`, `LooFemale`, `KFemale`, `LooMale`, `KMale`, `RemarksonGrowth`, `ProductionPeriod`, `HarvestingPractice`, `HarvestingLength`, `TypeHarvestLength`, `CommentHarvLength`, `HarvestingWeight`, `MatureatHarvest`, `MPeriod`, `ProductionCycle`, `UnitCycle`, `ProductionYear`, `UnitYear`, `ProductionYearExt`, `UnitYearExt`, `Comment`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `cultspec` WHERE `StockCode` = :p0 AND `CultCode` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Cultspec();
            $obj->hydrate($row);
            CultspecPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Cultspec|Cultspec[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cultspec[]|mixed the list of results, formatted by the current formatter
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
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CultspecPeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CultspecPeer::CULTCODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CultspecPeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CultspecPeer::CULTCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
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
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(CultspecPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(CultspecPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(CultspecPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(CultspecPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the CultSpecRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByCultspecrefno(1234); // WHERE CultSpecRefNo = 1234
     * $query->filterByCultspecrefno(array(12, 34)); // WHERE CultSpecRefNo IN (12, 34)
     * $query->filterByCultspecrefno(array('min' => 12)); // WHERE CultSpecRefNo >= 12
     * $query->filterByCultspecrefno(array('max' => 12)); // WHERE CultSpecRefNo <= 12
     * </code>
     *
     * @param     mixed $cultspecrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByCultspecrefno($cultspecrefno = null, $comparison = null)
    {
        if (is_array($cultspecrefno)) {
            $useMinMax = false;
            if (isset($cultspecrefno['min'])) {
                $this->addUsingAlias(CultspecPeer::CULTSPECREFNO, $cultspecrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cultspecrefno['max'])) {
                $this->addUsingAlias(CultspecPeer::CULTSPECREFNO, $cultspecrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::CULTSPECREFNO, $cultspecrefno, $comparison);
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
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByCultcode($cultcode = null, $comparison = null)
    {
        if (is_array($cultcode)) {
            $useMinMax = false;
            if (isset($cultcode['min'])) {
                $this->addUsingAlias(CultspecPeer::CULTCODE, $cultcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cultcode['max'])) {
                $this->addUsingAlias(CultspecPeer::CULTCODE, $cultcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::CULTCODE, $cultcode, $comparison);
    }

    /**
     * Filter the query on the StockingRate column
     *
     * Example usage:
     * <code>
     * $query->filterByStockingrate(1234); // WHERE StockingRate = 1234
     * $query->filterByStockingrate(array(12, 34)); // WHERE StockingRate IN (12, 34)
     * $query->filterByStockingrate(array('min' => 12)); // WHERE StockingRate >= 12
     * $query->filterByStockingrate(array('max' => 12)); // WHERE StockingRate <= 12
     * </code>
     *
     * @param     mixed $stockingrate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByStockingrate($stockingrate = null, $comparison = null)
    {
        if (is_array($stockingrate)) {
            $useMinMax = false;
            if (isset($stockingrate['min'])) {
                $this->addUsingAlias(CultspecPeer::STOCKINGRATE, $stockingrate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockingrate['max'])) {
                $this->addUsingAlias(CultspecPeer::STOCKINGRATE, $stockingrate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::STOCKINGRATE, $stockingrate, $comparison);
    }

    /**
     * Filter the query on the UnitStocking column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitstocking('fooValue');   // WHERE UnitStocking = 'fooValue'
     * $query->filterByUnitstocking('%fooValue%'); // WHERE UnitStocking LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unitstocking The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByUnitstocking($unitstocking = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitstocking)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unitstocking)) {
                $unitstocking = str_replace('*', '%', $unitstocking);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultspecPeer::UNITSTOCKING, $unitstocking, $comparison);
    }

    /**
     * Filter the query on the TotalStocking column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalstocking(1234); // WHERE TotalStocking = 1234
     * $query->filterByTotalstocking(array(12, 34)); // WHERE TotalStocking IN (12, 34)
     * $query->filterByTotalstocking(array('min' => 12)); // WHERE TotalStocking >= 12
     * $query->filterByTotalstocking(array('max' => 12)); // WHERE TotalStocking <= 12
     * </code>
     *
     * @param     mixed $totalstocking The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByTotalstocking($totalstocking = null, $comparison = null)
    {
        if (is_array($totalstocking)) {
            $useMinMax = false;
            if (isset($totalstocking['min'])) {
                $this->addUsingAlias(CultspecPeer::TOTALSTOCKING, $totalstocking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalstocking['max'])) {
                $this->addUsingAlias(CultspecPeer::TOTALSTOCKING, $totalstocking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::TOTALSTOCKING, $totalstocking, $comparison);
    }

    /**
     * Filter the query on the StockingLength column
     *
     * Example usage:
     * <code>
     * $query->filterByStockinglength(1234); // WHERE StockingLength = 1234
     * $query->filterByStockinglength(array(12, 34)); // WHERE StockingLength IN (12, 34)
     * $query->filterByStockinglength(array('min' => 12)); // WHERE StockingLength >= 12
     * $query->filterByStockinglength(array('max' => 12)); // WHERE StockingLength <= 12
     * </code>
     *
     * @param     mixed $stockinglength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByStockinglength($stockinglength = null, $comparison = null)
    {
        if (is_array($stockinglength)) {
            $useMinMax = false;
            if (isset($stockinglength['min'])) {
                $this->addUsingAlias(CultspecPeer::STOCKINGLENGTH, $stockinglength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockinglength['max'])) {
                $this->addUsingAlias(CultspecPeer::STOCKINGLENGTH, $stockinglength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::STOCKINGLENGTH, $stockinglength, $comparison);
    }

    /**
     * Filter the query on the TypeStockLength column
     *
     * Example usage:
     * <code>
     * $query->filterByTypestocklength('fooValue');   // WHERE TypeStockLength = 'fooValue'
     * $query->filterByTypestocklength('%fooValue%'); // WHERE TypeStockLength LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typestocklength The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByTypestocklength($typestocklength = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typestocklength)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typestocklength)) {
                $typestocklength = str_replace('*', '%', $typestocklength);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultspecPeer::TYPESTOCKLENGTH, $typestocklength, $comparison);
    }

    /**
     * Filter the query on the CommentStockLength column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentstocklength('fooValue');   // WHERE CommentStockLength = 'fooValue'
     * $query->filterByCommentstocklength('%fooValue%'); // WHERE CommentStockLength LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentstocklength The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByCommentstocklength($commentstocklength = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentstocklength)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentstocklength)) {
                $commentstocklength = str_replace('*', '%', $commentstocklength);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultspecPeer::COMMENTSTOCKLENGTH, $commentstocklength, $comparison);
    }

    /**
     * Filter the query on the WeightStocking column
     *
     * Example usage:
     * <code>
     * $query->filterByWeightstocking(1234); // WHERE WeightStocking = 1234
     * $query->filterByWeightstocking(array(12, 34)); // WHERE WeightStocking IN (12, 34)
     * $query->filterByWeightstocking(array('min' => 12)); // WHERE WeightStocking >= 12
     * $query->filterByWeightstocking(array('max' => 12)); // WHERE WeightStocking <= 12
     * </code>
     *
     * @param     mixed $weightstocking The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByWeightstocking($weightstocking = null, $comparison = null)
    {
        if (is_array($weightstocking)) {
            $useMinMax = false;
            if (isset($weightstocking['min'])) {
                $this->addUsingAlias(CultspecPeer::WEIGHTSTOCKING, $weightstocking['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weightstocking['max'])) {
                $this->addUsingAlias(CultspecPeer::WEIGHTSTOCKING, $weightstocking['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::WEIGHTSTOCKING, $weightstocking, $comparison);
    }

    /**
     * Filter the query on the StockingAge column
     *
     * Example usage:
     * <code>
     * $query->filterByStockingage(1234); // WHERE StockingAge = 1234
     * $query->filterByStockingage(array(12, 34)); // WHERE StockingAge IN (12, 34)
     * $query->filterByStockingage(array('min' => 12)); // WHERE StockingAge >= 12
     * $query->filterByStockingage(array('max' => 12)); // WHERE StockingAge <= 12
     * </code>
     *
     * @param     mixed $stockingage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByStockingage($stockingage = null, $comparison = null)
    {
        if (is_array($stockingage)) {
            $useMinMax = false;
            if (isset($stockingage['min'])) {
                $this->addUsingAlias(CultspecPeer::STOCKINGAGE, $stockingage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockingage['max'])) {
                $this->addUsingAlias(CultspecPeer::STOCKINGAGE, $stockingage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::STOCKINGAGE, $stockingage, $comparison);
    }

    /**
     * Filter the query on the LooUnsexed column
     *
     * Example usage:
     * <code>
     * $query->filterByLoounsexed(1234); // WHERE LooUnsexed = 1234
     * $query->filterByLoounsexed(array(12, 34)); // WHERE LooUnsexed IN (12, 34)
     * $query->filterByLoounsexed(array('min' => 12)); // WHERE LooUnsexed >= 12
     * $query->filterByLoounsexed(array('max' => 12)); // WHERE LooUnsexed <= 12
     * </code>
     *
     * @param     mixed $loounsexed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByLoounsexed($loounsexed = null, $comparison = null)
    {
        if (is_array($loounsexed)) {
            $useMinMax = false;
            if (isset($loounsexed['min'])) {
                $this->addUsingAlias(CultspecPeer::LOOUNSEXED, $loounsexed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($loounsexed['max'])) {
                $this->addUsingAlias(CultspecPeer::LOOUNSEXED, $loounsexed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::LOOUNSEXED, $loounsexed, $comparison);
    }

    /**
     * Filter the query on the KUnsexed column
     *
     * Example usage:
     * <code>
     * $query->filterByKunsexed(1234); // WHERE KUnsexed = 1234
     * $query->filterByKunsexed(array(12, 34)); // WHERE KUnsexed IN (12, 34)
     * $query->filterByKunsexed(array('min' => 12)); // WHERE KUnsexed >= 12
     * $query->filterByKunsexed(array('max' => 12)); // WHERE KUnsexed <= 12
     * </code>
     *
     * @param     mixed $kunsexed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByKunsexed($kunsexed = null, $comparison = null)
    {
        if (is_array($kunsexed)) {
            $useMinMax = false;
            if (isset($kunsexed['min'])) {
                $this->addUsingAlias(CultspecPeer::KUNSEXED, $kunsexed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kunsexed['max'])) {
                $this->addUsingAlias(CultspecPeer::KUNSEXED, $kunsexed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::KUNSEXED, $kunsexed, $comparison);
    }

    /**
     * Filter the query on the Method column
     *
     * Example usage:
     * <code>
     * $query->filterByMethod('fooValue');   // WHERE Method = 'fooValue'
     * $query->filterByMethod('%fooValue%'); // WHERE Method LIKE '%fooValue%'
     * </code>
     *
     * @param     string $method The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByMethod($method = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($method)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $method)) {
                $method = str_replace('*', '%', $method);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultspecPeer::METHOD, $method, $comparison);
    }

    /**
     * Filter the query on the LooFemale column
     *
     * Example usage:
     * <code>
     * $query->filterByLoofemale(1234); // WHERE LooFemale = 1234
     * $query->filterByLoofemale(array(12, 34)); // WHERE LooFemale IN (12, 34)
     * $query->filterByLoofemale(array('min' => 12)); // WHERE LooFemale >= 12
     * $query->filterByLoofemale(array('max' => 12)); // WHERE LooFemale <= 12
     * </code>
     *
     * @param     mixed $loofemale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByLoofemale($loofemale = null, $comparison = null)
    {
        if (is_array($loofemale)) {
            $useMinMax = false;
            if (isset($loofemale['min'])) {
                $this->addUsingAlias(CultspecPeer::LOOFEMALE, $loofemale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($loofemale['max'])) {
                $this->addUsingAlias(CultspecPeer::LOOFEMALE, $loofemale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::LOOFEMALE, $loofemale, $comparison);
    }

    /**
     * Filter the query on the KFemale column
     *
     * Example usage:
     * <code>
     * $query->filterByKfemale(1234); // WHERE KFemale = 1234
     * $query->filterByKfemale(array(12, 34)); // WHERE KFemale IN (12, 34)
     * $query->filterByKfemale(array('min' => 12)); // WHERE KFemale >= 12
     * $query->filterByKfemale(array('max' => 12)); // WHERE KFemale <= 12
     * </code>
     *
     * @param     mixed $kfemale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByKfemale($kfemale = null, $comparison = null)
    {
        if (is_array($kfemale)) {
            $useMinMax = false;
            if (isset($kfemale['min'])) {
                $this->addUsingAlias(CultspecPeer::KFEMALE, $kfemale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kfemale['max'])) {
                $this->addUsingAlias(CultspecPeer::KFEMALE, $kfemale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::KFEMALE, $kfemale, $comparison);
    }

    /**
     * Filter the query on the LooMale column
     *
     * Example usage:
     * <code>
     * $query->filterByLoomale(1234); // WHERE LooMale = 1234
     * $query->filterByLoomale(array(12, 34)); // WHERE LooMale IN (12, 34)
     * $query->filterByLoomale(array('min' => 12)); // WHERE LooMale >= 12
     * $query->filterByLoomale(array('max' => 12)); // WHERE LooMale <= 12
     * </code>
     *
     * @param     mixed $loomale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByLoomale($loomale = null, $comparison = null)
    {
        if (is_array($loomale)) {
            $useMinMax = false;
            if (isset($loomale['min'])) {
                $this->addUsingAlias(CultspecPeer::LOOMALE, $loomale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($loomale['max'])) {
                $this->addUsingAlias(CultspecPeer::LOOMALE, $loomale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::LOOMALE, $loomale, $comparison);
    }

    /**
     * Filter the query on the KMale column
     *
     * Example usage:
     * <code>
     * $query->filterByKmale(1234); // WHERE KMale = 1234
     * $query->filterByKmale(array(12, 34)); // WHERE KMale IN (12, 34)
     * $query->filterByKmale(array('min' => 12)); // WHERE KMale >= 12
     * $query->filterByKmale(array('max' => 12)); // WHERE KMale <= 12
     * </code>
     *
     * @param     mixed $kmale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByKmale($kmale = null, $comparison = null)
    {
        if (is_array($kmale)) {
            $useMinMax = false;
            if (isset($kmale['min'])) {
                $this->addUsingAlias(CultspecPeer::KMALE, $kmale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($kmale['max'])) {
                $this->addUsingAlias(CultspecPeer::KMALE, $kmale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::KMALE, $kmale, $comparison);
    }

    /**
     * Filter the query on the RemarksonGrowth column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarksongrowth('fooValue');   // WHERE RemarksonGrowth = 'fooValue'
     * $query->filterByRemarksongrowth('%fooValue%'); // WHERE RemarksonGrowth LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarksongrowth The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByRemarksongrowth($remarksongrowth = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarksongrowth)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarksongrowth)) {
                $remarksongrowth = str_replace('*', '%', $remarksongrowth);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultspecPeer::REMARKSONGROWTH, $remarksongrowth, $comparison);
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
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByProductionperiod($productionperiod = null, $comparison = null)
    {
        if (is_array($productionperiod)) {
            $useMinMax = false;
            if (isset($productionperiod['min'])) {
                $this->addUsingAlias(CultspecPeer::PRODUCTIONPERIOD, $productionperiod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productionperiod['max'])) {
                $this->addUsingAlias(CultspecPeer::PRODUCTIONPERIOD, $productionperiod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::PRODUCTIONPERIOD, $productionperiod, $comparison);
    }

    /**
     * Filter the query on the HarvestingPractice column
     *
     * Example usage:
     * <code>
     * $query->filterByHarvestingpractice('fooValue');   // WHERE HarvestingPractice = 'fooValue'
     * $query->filterByHarvestingpractice('%fooValue%'); // WHERE HarvestingPractice LIKE '%fooValue%'
     * </code>
     *
     * @param     string $harvestingpractice The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByHarvestingpractice($harvestingpractice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($harvestingpractice)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $harvestingpractice)) {
                $harvestingpractice = str_replace('*', '%', $harvestingpractice);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultspecPeer::HARVESTINGPRACTICE, $harvestingpractice, $comparison);
    }

    /**
     * Filter the query on the HarvestingLength column
     *
     * Example usage:
     * <code>
     * $query->filterByHarvestinglength(1234); // WHERE HarvestingLength = 1234
     * $query->filterByHarvestinglength(array(12, 34)); // WHERE HarvestingLength IN (12, 34)
     * $query->filterByHarvestinglength(array('min' => 12)); // WHERE HarvestingLength >= 12
     * $query->filterByHarvestinglength(array('max' => 12)); // WHERE HarvestingLength <= 12
     * </code>
     *
     * @param     mixed $harvestinglength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByHarvestinglength($harvestinglength = null, $comparison = null)
    {
        if (is_array($harvestinglength)) {
            $useMinMax = false;
            if (isset($harvestinglength['min'])) {
                $this->addUsingAlias(CultspecPeer::HARVESTINGLENGTH, $harvestinglength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($harvestinglength['max'])) {
                $this->addUsingAlias(CultspecPeer::HARVESTINGLENGTH, $harvestinglength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::HARVESTINGLENGTH, $harvestinglength, $comparison);
    }

    /**
     * Filter the query on the TypeHarvestLength column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeharvestlength('fooValue');   // WHERE TypeHarvestLength = 'fooValue'
     * $query->filterByTypeharvestlength('%fooValue%'); // WHERE TypeHarvestLength LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeharvestlength The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByTypeharvestlength($typeharvestlength = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeharvestlength)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeharvestlength)) {
                $typeharvestlength = str_replace('*', '%', $typeharvestlength);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultspecPeer::TYPEHARVESTLENGTH, $typeharvestlength, $comparison);
    }

    /**
     * Filter the query on the CommentHarvLength column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentharvlength('fooValue');   // WHERE CommentHarvLength = 'fooValue'
     * $query->filterByCommentharvlength('%fooValue%'); // WHERE CommentHarvLength LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentharvlength The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByCommentharvlength($commentharvlength = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentharvlength)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentharvlength)) {
                $commentharvlength = str_replace('*', '%', $commentharvlength);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultspecPeer::COMMENTHARVLENGTH, $commentharvlength, $comparison);
    }

    /**
     * Filter the query on the HarvestingWeight column
     *
     * Example usage:
     * <code>
     * $query->filterByHarvestingweight(1234); // WHERE HarvestingWeight = 1234
     * $query->filterByHarvestingweight(array(12, 34)); // WHERE HarvestingWeight IN (12, 34)
     * $query->filterByHarvestingweight(array('min' => 12)); // WHERE HarvestingWeight >= 12
     * $query->filterByHarvestingweight(array('max' => 12)); // WHERE HarvestingWeight <= 12
     * </code>
     *
     * @param     mixed $harvestingweight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByHarvestingweight($harvestingweight = null, $comparison = null)
    {
        if (is_array($harvestingweight)) {
            $useMinMax = false;
            if (isset($harvestingweight['min'])) {
                $this->addUsingAlias(CultspecPeer::HARVESTINGWEIGHT, $harvestingweight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($harvestingweight['max'])) {
                $this->addUsingAlias(CultspecPeer::HARVESTINGWEIGHT, $harvestingweight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::HARVESTINGWEIGHT, $harvestingweight, $comparison);
    }

    /**
     * Filter the query on the MatureatHarvest column
     *
     * Example usage:
     * <code>
     * $query->filterByMatureatharvest('fooValue');   // WHERE MatureatHarvest = 'fooValue'
     * $query->filterByMatureatharvest('%fooValue%'); // WHERE MatureatHarvest LIKE '%fooValue%'
     * </code>
     *
     * @param     string $matureatharvest The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByMatureatharvest($matureatharvest = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($matureatharvest)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $matureatharvest)) {
                $matureatharvest = str_replace('*', '%', $matureatharvest);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultspecPeer::MATUREATHARVEST, $matureatharvest, $comparison);
    }

    /**
     * Filter the query on the MPeriod column
     *
     * Example usage:
     * <code>
     * $query->filterByMperiod(1234); // WHERE MPeriod = 1234
     * $query->filterByMperiod(array(12, 34)); // WHERE MPeriod IN (12, 34)
     * $query->filterByMperiod(array('min' => 12)); // WHERE MPeriod >= 12
     * $query->filterByMperiod(array('max' => 12)); // WHERE MPeriod <= 12
     * </code>
     *
     * @param     mixed $mperiod The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByMperiod($mperiod = null, $comparison = null)
    {
        if (is_array($mperiod)) {
            $useMinMax = false;
            if (isset($mperiod['min'])) {
                $this->addUsingAlias(CultspecPeer::MPERIOD, $mperiod['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mperiod['max'])) {
                $this->addUsingAlias(CultspecPeer::MPERIOD, $mperiod['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::MPERIOD, $mperiod, $comparison);
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
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByProductioncycle($productioncycle = null, $comparison = null)
    {
        if (is_array($productioncycle)) {
            $useMinMax = false;
            if (isset($productioncycle['min'])) {
                $this->addUsingAlias(CultspecPeer::PRODUCTIONCYCLE, $productioncycle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productioncycle['max'])) {
                $this->addUsingAlias(CultspecPeer::PRODUCTIONCYCLE, $productioncycle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::PRODUCTIONCYCLE, $productioncycle, $comparison);
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
     * @return CultspecQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CultspecPeer::UNITCYCLE, $unitcycle, $comparison);
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
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByProductionyear($productionyear = null, $comparison = null)
    {
        if (is_array($productionyear)) {
            $useMinMax = false;
            if (isset($productionyear['min'])) {
                $this->addUsingAlias(CultspecPeer::PRODUCTIONYEAR, $productionyear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productionyear['max'])) {
                $this->addUsingAlias(CultspecPeer::PRODUCTIONYEAR, $productionyear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::PRODUCTIONYEAR, $productionyear, $comparison);
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
     * @return CultspecQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CultspecPeer::UNITYEAR, $unityear, $comparison);
    }

    /**
     * Filter the query on the ProductionYearExt column
     *
     * Example usage:
     * <code>
     * $query->filterByProductionyearext(1234); // WHERE ProductionYearExt = 1234
     * $query->filterByProductionyearext(array(12, 34)); // WHERE ProductionYearExt IN (12, 34)
     * $query->filterByProductionyearext(array('min' => 12)); // WHERE ProductionYearExt >= 12
     * $query->filterByProductionyearext(array('max' => 12)); // WHERE ProductionYearExt <= 12
     * </code>
     *
     * @param     mixed $productionyearext The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByProductionyearext($productionyearext = null, $comparison = null)
    {
        if (is_array($productionyearext)) {
            $useMinMax = false;
            if (isset($productionyearext['min'])) {
                $this->addUsingAlias(CultspecPeer::PRODUCTIONYEAREXT, $productionyearext['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productionyearext['max'])) {
                $this->addUsingAlias(CultspecPeer::PRODUCTIONYEAREXT, $productionyearext['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::PRODUCTIONYEAREXT, $productionyearext, $comparison);
    }

    /**
     * Filter the query on the UnitYearExt column
     *
     * Example usage:
     * <code>
     * $query->filterByUnityearext('fooValue');   // WHERE UnitYearExt = 'fooValue'
     * $query->filterByUnityearext('%fooValue%'); // WHERE UnitYearExt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unityearext The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByUnityearext($unityearext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unityearext)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unityearext)) {
                $unityearext = str_replace('*', '%', $unityearext);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CultspecPeer::UNITYEAREXT, $unityearext, $comparison);
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
     * @return CultspecQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CultspecPeer::COMMENT, $comment, $comparison);
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
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(CultspecPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(CultspecPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::ENTERED, $entered, $comparison);
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
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(CultspecPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(CultspecPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(CultspecPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(CultspecPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::MODIFIED, $modified, $comparison);
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
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(CultspecPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(CultspecPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(CultspecPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(CultspecPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::EXPERT, $expert, $comparison);
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
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(CultspecPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(CultspecPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return CultspecQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(CultspecPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(CultspecPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CultspecPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Cultspec $cultspec Object to remove from the list of results
     *
     * @return CultspecQuery The current query, for fluid interface
     */
    public function prune($cultspec = null)
    {
        if ($cultspec) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CultspecPeer::STOCKCODE), $cultspec->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CultspecPeer::CULTCODE), $cultspec->getCultcode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
