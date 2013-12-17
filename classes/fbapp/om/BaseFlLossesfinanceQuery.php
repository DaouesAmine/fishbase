<?php


/**
 * Base class that represents a query for the 'fl_lossesfinance' table.
 *
 *
 *
 * @method FlLossesfinanceQuery orderByLosscode($order = Criteria::ASC) Order by the LossCode column
 * @method FlLossesfinanceQuery orderByCurrency($order = Criteria::ASC) Order by the currency column
 * @method FlLossesfinanceQuery orderByBestprice($order = Criteria::ASC) Order by the BestPrice column
 * @method FlLossesfinanceQuery orderByValueofbatch($order = Criteria::ASC) Order by the ValueOfBatch column
 * @method FlLossesfinanceQuery orderByValueofphysicalloss($order = Criteria::ASC) Order by the ValueOfPhysicalLoss column
 * @method FlLossesfinanceQuery orderByLowerprice($order = Criteria::ASC) Order by the LowerPrice column
 * @method FlLossesfinanceQuery orderByLowerpricepofbestprice($order = Criteria::ASC) Order by the LowerPricePofBestPrice column
 * @method FlLossesfinanceQuery orderByValueofqualityloss($order = Criteria::ASC) Order by the ValueOfQualityLoss column
 * @method FlLossesfinanceQuery orderByTotalvalueofloss($order = Criteria::ASC) Order by the TotalValueofLoss column
 * @method FlLossesfinanceQuery orderByTotallosspbyvalueminimum($order = Criteria::ASC) Order by the TotalLossPByValueMinimum column
 * @method FlLossesfinanceQuery orderByTotallosspbyvaluemaximum($order = Criteria::ASC) Order by the TotalLossPByValueMaximum column
 * @method FlLossesfinanceQuery orderByEditable($order = Criteria::ASC) Order by the Editable column
 * @method FlLossesfinanceQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FlLossesfinanceQuery groupByLosscode() Group by the LossCode column
 * @method FlLossesfinanceQuery groupByCurrency() Group by the currency column
 * @method FlLossesfinanceQuery groupByBestprice() Group by the BestPrice column
 * @method FlLossesfinanceQuery groupByValueofbatch() Group by the ValueOfBatch column
 * @method FlLossesfinanceQuery groupByValueofphysicalloss() Group by the ValueOfPhysicalLoss column
 * @method FlLossesfinanceQuery groupByLowerprice() Group by the LowerPrice column
 * @method FlLossesfinanceQuery groupByLowerpricepofbestprice() Group by the LowerPricePofBestPrice column
 * @method FlLossesfinanceQuery groupByValueofqualityloss() Group by the ValueOfQualityLoss column
 * @method FlLossesfinanceQuery groupByTotalvalueofloss() Group by the TotalValueofLoss column
 * @method FlLossesfinanceQuery groupByTotallosspbyvalueminimum() Group by the TotalLossPByValueMinimum column
 * @method FlLossesfinanceQuery groupByTotallosspbyvaluemaximum() Group by the TotalLossPByValueMaximum column
 * @method FlLossesfinanceQuery groupByEditable() Group by the Editable column
 * @method FlLossesfinanceQuery groupByTs() Group by the TS column
 *
 * @method FlLossesfinanceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FlLossesfinanceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FlLossesfinanceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method FlLossesfinance findOne(PropelPDO $con = null) Return the first FlLossesfinance matching the query
 * @method FlLossesfinance findOneOrCreate(PropelPDO $con = null) Return the first FlLossesfinance matching the query, or a new FlLossesfinance object populated from the query conditions when no match is found
 *
 * @method FlLossesfinance findOneByCurrency(string $currency) Return the first FlLossesfinance filtered by the currency column
 * @method FlLossesfinance findOneByBestprice(double $BestPrice) Return the first FlLossesfinance filtered by the BestPrice column
 * @method FlLossesfinance findOneByValueofbatch(double $ValueOfBatch) Return the first FlLossesfinance filtered by the ValueOfBatch column
 * @method FlLossesfinance findOneByValueofphysicalloss(double $ValueOfPhysicalLoss) Return the first FlLossesfinance filtered by the ValueOfPhysicalLoss column
 * @method FlLossesfinance findOneByLowerprice(double $LowerPrice) Return the first FlLossesfinance filtered by the LowerPrice column
 * @method FlLossesfinance findOneByLowerpricepofbestprice(double $LowerPricePofBestPrice) Return the first FlLossesfinance filtered by the LowerPricePofBestPrice column
 * @method FlLossesfinance findOneByValueofqualityloss(double $ValueOfQualityLoss) Return the first FlLossesfinance filtered by the ValueOfQualityLoss column
 * @method FlLossesfinance findOneByTotalvalueofloss(double $TotalValueofLoss) Return the first FlLossesfinance filtered by the TotalValueofLoss column
 * @method FlLossesfinance findOneByTotallosspbyvalueminimum(double $TotalLossPByValueMinimum) Return the first FlLossesfinance filtered by the TotalLossPByValueMinimum column
 * @method FlLossesfinance findOneByTotallosspbyvaluemaximum(double $TotalLossPByValueMaximum) Return the first FlLossesfinance filtered by the TotalLossPByValueMaximum column
 * @method FlLossesfinance findOneByEditable(string $Editable) Return the first FlLossesfinance filtered by the Editable column
 * @method FlLossesfinance findOneByTs(string $TS) Return the first FlLossesfinance filtered by the TS column
 *
 * @method array findByLosscode(int $LossCode) Return FlLossesfinance objects filtered by the LossCode column
 * @method array findByCurrency(string $currency) Return FlLossesfinance objects filtered by the currency column
 * @method array findByBestprice(double $BestPrice) Return FlLossesfinance objects filtered by the BestPrice column
 * @method array findByValueofbatch(double $ValueOfBatch) Return FlLossesfinance objects filtered by the ValueOfBatch column
 * @method array findByValueofphysicalloss(double $ValueOfPhysicalLoss) Return FlLossesfinance objects filtered by the ValueOfPhysicalLoss column
 * @method array findByLowerprice(double $LowerPrice) Return FlLossesfinance objects filtered by the LowerPrice column
 * @method array findByLowerpricepofbestprice(double $LowerPricePofBestPrice) Return FlLossesfinance objects filtered by the LowerPricePofBestPrice column
 * @method array findByValueofqualityloss(double $ValueOfQualityLoss) Return FlLossesfinance objects filtered by the ValueOfQualityLoss column
 * @method array findByTotalvalueofloss(double $TotalValueofLoss) Return FlLossesfinance objects filtered by the TotalValueofLoss column
 * @method array findByTotallosspbyvalueminimum(double $TotalLossPByValueMinimum) Return FlLossesfinance objects filtered by the TotalLossPByValueMinimum column
 * @method array findByTotallosspbyvaluemaximum(double $TotalLossPByValueMaximum) Return FlLossesfinance objects filtered by the TotalLossPByValueMaximum column
 * @method array findByEditable(string $Editable) Return FlLossesfinance objects filtered by the Editable column
 * @method array findByTs(string $TS) Return FlLossesfinance objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFlLossesfinanceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFlLossesfinanceQuery object.
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
            $modelName = 'FlLossesfinance';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FlLossesfinanceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FlLossesfinanceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FlLossesfinanceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FlLossesfinanceQuery) {
            return $criteria;
        }
        $query = new FlLossesfinanceQuery(null, null, $modelAlias);

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
     * @return   FlLossesfinance|FlLossesfinance[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FlLossesfinancePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FlLossesfinancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 FlLossesfinance A model object, or null if the key is not found
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
     * @return                 FlLossesfinance A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `LossCode`, `currency`, `BestPrice`, `ValueOfBatch`, `ValueOfPhysicalLoss`, `LowerPrice`, `LowerPricePofBestPrice`, `ValueOfQualityLoss`, `TotalValueofLoss`, `TotalLossPByValueMinimum`, `TotalLossPByValueMaximum`, `Editable`, `TS` FROM `fl_lossesfinance` WHERE `LossCode` = :p0';
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
            $obj = new FlLossesfinance();
            $obj->hydrate($row);
            FlLossesfinancePeer::addInstanceToPool($obj, (string) $key);
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
     * @return FlLossesfinance|FlLossesfinance[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|FlLossesfinance[]|mixed the list of results, formatted by the current formatter
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
     * @return FlLossesfinanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FlLossesfinancePeer::LOSSCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FlLossesfinanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FlLossesfinancePeer::LOSSCODE, $keys, Criteria::IN);
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
     * @return FlLossesfinanceQuery The current query, for fluid interface
     */
    public function filterByLosscode($losscode = null, $comparison = null)
    {
        if (is_array($losscode)) {
            $useMinMax = false;
            if (isset($losscode['min'])) {
                $this->addUsingAlias(FlLossesfinancePeer::LOSSCODE, $losscode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($losscode['max'])) {
                $this->addUsingAlias(FlLossesfinancePeer::LOSSCODE, $losscode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesfinancePeer::LOSSCODE, $losscode, $comparison);
    }

    /**
     * Filter the query on the currency column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrency('fooValue');   // WHERE currency = 'fooValue'
     * $query->filterByCurrency('%fooValue%'); // WHERE currency LIKE '%fooValue%'
     * </code>
     *
     * @param     string $currency The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesfinanceQuery The current query, for fluid interface
     */
    public function filterByCurrency($currency = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($currency)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $currency)) {
                $currency = str_replace('*', '%', $currency);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FlLossesfinancePeer::CURRENCY, $currency, $comparison);
    }

    /**
     * Filter the query on the BestPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByBestprice(1234); // WHERE BestPrice = 1234
     * $query->filterByBestprice(array(12, 34)); // WHERE BestPrice IN (12, 34)
     * $query->filterByBestprice(array('min' => 12)); // WHERE BestPrice >= 12
     * $query->filterByBestprice(array('max' => 12)); // WHERE BestPrice <= 12
     * </code>
     *
     * @param     mixed $bestprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesfinanceQuery The current query, for fluid interface
     */
    public function filterByBestprice($bestprice = null, $comparison = null)
    {
        if (is_array($bestprice)) {
            $useMinMax = false;
            if (isset($bestprice['min'])) {
                $this->addUsingAlias(FlLossesfinancePeer::BESTPRICE, $bestprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bestprice['max'])) {
                $this->addUsingAlias(FlLossesfinancePeer::BESTPRICE, $bestprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesfinancePeer::BESTPRICE, $bestprice, $comparison);
    }

    /**
     * Filter the query on the ValueOfBatch column
     *
     * Example usage:
     * <code>
     * $query->filterByValueofbatch(1234); // WHERE ValueOfBatch = 1234
     * $query->filterByValueofbatch(array(12, 34)); // WHERE ValueOfBatch IN (12, 34)
     * $query->filterByValueofbatch(array('min' => 12)); // WHERE ValueOfBatch >= 12
     * $query->filterByValueofbatch(array('max' => 12)); // WHERE ValueOfBatch <= 12
     * </code>
     *
     * @param     mixed $valueofbatch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesfinanceQuery The current query, for fluid interface
     */
    public function filterByValueofbatch($valueofbatch = null, $comparison = null)
    {
        if (is_array($valueofbatch)) {
            $useMinMax = false;
            if (isset($valueofbatch['min'])) {
                $this->addUsingAlias(FlLossesfinancePeer::VALUEOFBATCH, $valueofbatch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valueofbatch['max'])) {
                $this->addUsingAlias(FlLossesfinancePeer::VALUEOFBATCH, $valueofbatch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesfinancePeer::VALUEOFBATCH, $valueofbatch, $comparison);
    }

    /**
     * Filter the query on the ValueOfPhysicalLoss column
     *
     * Example usage:
     * <code>
     * $query->filterByValueofphysicalloss(1234); // WHERE ValueOfPhysicalLoss = 1234
     * $query->filterByValueofphysicalloss(array(12, 34)); // WHERE ValueOfPhysicalLoss IN (12, 34)
     * $query->filterByValueofphysicalloss(array('min' => 12)); // WHERE ValueOfPhysicalLoss >= 12
     * $query->filterByValueofphysicalloss(array('max' => 12)); // WHERE ValueOfPhysicalLoss <= 12
     * </code>
     *
     * @param     mixed $valueofphysicalloss The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesfinanceQuery The current query, for fluid interface
     */
    public function filterByValueofphysicalloss($valueofphysicalloss = null, $comparison = null)
    {
        if (is_array($valueofphysicalloss)) {
            $useMinMax = false;
            if (isset($valueofphysicalloss['min'])) {
                $this->addUsingAlias(FlLossesfinancePeer::VALUEOFPHYSICALLOSS, $valueofphysicalloss['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valueofphysicalloss['max'])) {
                $this->addUsingAlias(FlLossesfinancePeer::VALUEOFPHYSICALLOSS, $valueofphysicalloss['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesfinancePeer::VALUEOFPHYSICALLOSS, $valueofphysicalloss, $comparison);
    }

    /**
     * Filter the query on the LowerPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByLowerprice(1234); // WHERE LowerPrice = 1234
     * $query->filterByLowerprice(array(12, 34)); // WHERE LowerPrice IN (12, 34)
     * $query->filterByLowerprice(array('min' => 12)); // WHERE LowerPrice >= 12
     * $query->filterByLowerprice(array('max' => 12)); // WHERE LowerPrice <= 12
     * </code>
     *
     * @param     mixed $lowerprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesfinanceQuery The current query, for fluid interface
     */
    public function filterByLowerprice($lowerprice = null, $comparison = null)
    {
        if (is_array($lowerprice)) {
            $useMinMax = false;
            if (isset($lowerprice['min'])) {
                $this->addUsingAlias(FlLossesfinancePeer::LOWERPRICE, $lowerprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lowerprice['max'])) {
                $this->addUsingAlias(FlLossesfinancePeer::LOWERPRICE, $lowerprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesfinancePeer::LOWERPRICE, $lowerprice, $comparison);
    }

    /**
     * Filter the query on the LowerPricePofBestPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByLowerpricepofbestprice(1234); // WHERE LowerPricePofBestPrice = 1234
     * $query->filterByLowerpricepofbestprice(array(12, 34)); // WHERE LowerPricePofBestPrice IN (12, 34)
     * $query->filterByLowerpricepofbestprice(array('min' => 12)); // WHERE LowerPricePofBestPrice >= 12
     * $query->filterByLowerpricepofbestprice(array('max' => 12)); // WHERE LowerPricePofBestPrice <= 12
     * </code>
     *
     * @param     mixed $lowerpricepofbestprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesfinanceQuery The current query, for fluid interface
     */
    public function filterByLowerpricepofbestprice($lowerpricepofbestprice = null, $comparison = null)
    {
        if (is_array($lowerpricepofbestprice)) {
            $useMinMax = false;
            if (isset($lowerpricepofbestprice['min'])) {
                $this->addUsingAlias(FlLossesfinancePeer::LOWERPRICEPOFBESTPRICE, $lowerpricepofbestprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lowerpricepofbestprice['max'])) {
                $this->addUsingAlias(FlLossesfinancePeer::LOWERPRICEPOFBESTPRICE, $lowerpricepofbestprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesfinancePeer::LOWERPRICEPOFBESTPRICE, $lowerpricepofbestprice, $comparison);
    }

    /**
     * Filter the query on the ValueOfQualityLoss column
     *
     * Example usage:
     * <code>
     * $query->filterByValueofqualityloss(1234); // WHERE ValueOfQualityLoss = 1234
     * $query->filterByValueofqualityloss(array(12, 34)); // WHERE ValueOfQualityLoss IN (12, 34)
     * $query->filterByValueofqualityloss(array('min' => 12)); // WHERE ValueOfQualityLoss >= 12
     * $query->filterByValueofqualityloss(array('max' => 12)); // WHERE ValueOfQualityLoss <= 12
     * </code>
     *
     * @param     mixed $valueofqualityloss The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesfinanceQuery The current query, for fluid interface
     */
    public function filterByValueofqualityloss($valueofqualityloss = null, $comparison = null)
    {
        if (is_array($valueofqualityloss)) {
            $useMinMax = false;
            if (isset($valueofqualityloss['min'])) {
                $this->addUsingAlias(FlLossesfinancePeer::VALUEOFQUALITYLOSS, $valueofqualityloss['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valueofqualityloss['max'])) {
                $this->addUsingAlias(FlLossesfinancePeer::VALUEOFQUALITYLOSS, $valueofqualityloss['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesfinancePeer::VALUEOFQUALITYLOSS, $valueofqualityloss, $comparison);
    }

    /**
     * Filter the query on the TotalValueofLoss column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalvalueofloss(1234); // WHERE TotalValueofLoss = 1234
     * $query->filterByTotalvalueofloss(array(12, 34)); // WHERE TotalValueofLoss IN (12, 34)
     * $query->filterByTotalvalueofloss(array('min' => 12)); // WHERE TotalValueofLoss >= 12
     * $query->filterByTotalvalueofloss(array('max' => 12)); // WHERE TotalValueofLoss <= 12
     * </code>
     *
     * @param     mixed $totalvalueofloss The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesfinanceQuery The current query, for fluid interface
     */
    public function filterByTotalvalueofloss($totalvalueofloss = null, $comparison = null)
    {
        if (is_array($totalvalueofloss)) {
            $useMinMax = false;
            if (isset($totalvalueofloss['min'])) {
                $this->addUsingAlias(FlLossesfinancePeer::TOTALVALUEOFLOSS, $totalvalueofloss['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalvalueofloss['max'])) {
                $this->addUsingAlias(FlLossesfinancePeer::TOTALVALUEOFLOSS, $totalvalueofloss['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesfinancePeer::TOTALVALUEOFLOSS, $totalvalueofloss, $comparison);
    }

    /**
     * Filter the query on the TotalLossPByValueMinimum column
     *
     * Example usage:
     * <code>
     * $query->filterByTotallosspbyvalueminimum(1234); // WHERE TotalLossPByValueMinimum = 1234
     * $query->filterByTotallosspbyvalueminimum(array(12, 34)); // WHERE TotalLossPByValueMinimum IN (12, 34)
     * $query->filterByTotallosspbyvalueminimum(array('min' => 12)); // WHERE TotalLossPByValueMinimum >= 12
     * $query->filterByTotallosspbyvalueminimum(array('max' => 12)); // WHERE TotalLossPByValueMinimum <= 12
     * </code>
     *
     * @param     mixed $totallosspbyvalueminimum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesfinanceQuery The current query, for fluid interface
     */
    public function filterByTotallosspbyvalueminimum($totallosspbyvalueminimum = null, $comparison = null)
    {
        if (is_array($totallosspbyvalueminimum)) {
            $useMinMax = false;
            if (isset($totallosspbyvalueminimum['min'])) {
                $this->addUsingAlias(FlLossesfinancePeer::TOTALLOSSPBYVALUEMINIMUM, $totallosspbyvalueminimum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totallosspbyvalueminimum['max'])) {
                $this->addUsingAlias(FlLossesfinancePeer::TOTALLOSSPBYVALUEMINIMUM, $totallosspbyvalueminimum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesfinancePeer::TOTALLOSSPBYVALUEMINIMUM, $totallosspbyvalueminimum, $comparison);
    }

    /**
     * Filter the query on the TotalLossPByValueMaximum column
     *
     * Example usage:
     * <code>
     * $query->filterByTotallosspbyvaluemaximum(1234); // WHERE TotalLossPByValueMaximum = 1234
     * $query->filterByTotallosspbyvaluemaximum(array(12, 34)); // WHERE TotalLossPByValueMaximum IN (12, 34)
     * $query->filterByTotallosspbyvaluemaximum(array('min' => 12)); // WHERE TotalLossPByValueMaximum >= 12
     * $query->filterByTotallosspbyvaluemaximum(array('max' => 12)); // WHERE TotalLossPByValueMaximum <= 12
     * </code>
     *
     * @param     mixed $totallosspbyvaluemaximum The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FlLossesfinanceQuery The current query, for fluid interface
     */
    public function filterByTotallosspbyvaluemaximum($totallosspbyvaluemaximum = null, $comparison = null)
    {
        if (is_array($totallosspbyvaluemaximum)) {
            $useMinMax = false;
            if (isset($totallosspbyvaluemaximum['min'])) {
                $this->addUsingAlias(FlLossesfinancePeer::TOTALLOSSPBYVALUEMAXIMUM, $totallosspbyvaluemaximum['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totallosspbyvaluemaximum['max'])) {
                $this->addUsingAlias(FlLossesfinancePeer::TOTALLOSSPBYVALUEMAXIMUM, $totallosspbyvaluemaximum['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesfinancePeer::TOTALLOSSPBYVALUEMAXIMUM, $totallosspbyvaluemaximum, $comparison);
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
     * @return FlLossesfinanceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FlLossesfinancePeer::EDITABLE, $editable, $comparison);
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
     * @return FlLossesfinanceQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FlLossesfinancePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FlLossesfinancePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FlLossesfinancePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   FlLossesfinance $flLossesfinance Object to remove from the list of results
     *
     * @return FlLossesfinanceQuery The current query, for fluid interface
     */
    public function prune($flLossesfinance = null)
    {
        if ($flLossesfinance) {
            $this->addUsingAlias(FlLossesfinancePeer::LOSSCODE, $flLossesfinance->getLosscode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
