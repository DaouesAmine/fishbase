<?php


/**
 * Base class that represents a query for the 'foodtroph' table.
 *
 *
 *
 * @method FoodtrophQuery orderByFoodlevel($order = Criteria::ASC) Order by the FoodLevel column
 * @method FoodtrophQuery orderByFood($order = Criteria::ASC) Order by the Food column
 * @method FoodtrophQuery orderByTl($order = Criteria::ASC) Order by the TL column
 * @method FoodtrophQuery orderBySetl($order = Criteria::ASC) Order by the SETL column
 * @method FoodtrophQuery orderByRefno($order = Criteria::ASC) Order by the RefNo column
 * @method FoodtrophQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method FoodtrophQuery orderByMaxlength($order = Criteria::ASC) Order by the MaxLength column
 * @method FoodtrophQuery orderByMinlength($order = Criteria::ASC) Order by the MinLength column
 * @method FoodtrophQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FoodtrophQuery groupByFoodlevel() Group by the FoodLevel column
 * @method FoodtrophQuery groupByFood() Group by the Food column
 * @method FoodtrophQuery groupByTl() Group by the TL column
 * @method FoodtrophQuery groupBySetl() Group by the SETL column
 * @method FoodtrophQuery groupByRefno() Group by the RefNo column
 * @method FoodtrophQuery groupByRemark() Group by the Remark column
 * @method FoodtrophQuery groupByMaxlength() Group by the MaxLength column
 * @method FoodtrophQuery groupByMinlength() Group by the MinLength column
 * @method FoodtrophQuery groupByTs() Group by the TS column
 *
 * @method FoodtrophQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FoodtrophQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FoodtrophQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Foodtroph findOne(PropelPDO $con = null) Return the first Foodtroph matching the query
 * @method Foodtroph findOneOrCreate(PropelPDO $con = null) Return the first Foodtroph matching the query, or a new Foodtroph object populated from the query conditions when no match is found
 *
 * @method Foodtroph findOneByFoodlevel(int $FoodLevel) Return the first Foodtroph filtered by the FoodLevel column
 * @method Foodtroph findOneByFood(string $Food) Return the first Foodtroph filtered by the Food column
 * @method Foodtroph findOneByTl(double $TL) Return the first Foodtroph filtered by the TL column
 * @method Foodtroph findOneBySetl(double $SETL) Return the first Foodtroph filtered by the SETL column
 * @method Foodtroph findOneByRefno(double $RefNo) Return the first Foodtroph filtered by the RefNo column
 * @method Foodtroph findOneByRemark(string $Remark) Return the first Foodtroph filtered by the Remark column
 * @method Foodtroph findOneByMaxlength(double $MaxLength) Return the first Foodtroph filtered by the MaxLength column
 * @method Foodtroph findOneByMinlength(double $MinLength) Return the first Foodtroph filtered by the MinLength column
 * @method Foodtroph findOneByTs(string $TS) Return the first Foodtroph filtered by the TS column
 *
 * @method array findByFoodlevel(int $FoodLevel) Return Foodtroph objects filtered by the FoodLevel column
 * @method array findByFood(string $Food) Return Foodtroph objects filtered by the Food column
 * @method array findByTl(double $TL) Return Foodtroph objects filtered by the TL column
 * @method array findBySetl(double $SETL) Return Foodtroph objects filtered by the SETL column
 * @method array findByRefno(double $RefNo) Return Foodtroph objects filtered by the RefNo column
 * @method array findByRemark(string $Remark) Return Foodtroph objects filtered by the Remark column
 * @method array findByMaxlength(double $MaxLength) Return Foodtroph objects filtered by the MaxLength column
 * @method array findByMinlength(double $MinLength) Return Foodtroph objects filtered by the MinLength column
 * @method array findByTs(string $TS) Return Foodtroph objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFoodtrophQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFoodtrophQuery object.
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
            $modelName = 'Foodtroph';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FoodtrophQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FoodtrophQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FoodtrophQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FoodtrophQuery) {
            return $criteria;
        }
        $query = new FoodtrophQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$FoodLevel, $Food]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Foodtroph|Foodtroph[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FoodtrophPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FoodtrophPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Foodtroph A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `FoodLevel`, `Food`, `TL`, `SETL`, `RefNo`, `Remark`, `MaxLength`, `MinLength`, `TS` FROM `foodtroph` WHERE `FoodLevel` = :p0 AND `Food` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Foodtroph();
            $obj->hydrate($row);
            FoodtrophPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Foodtroph|Foodtroph[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Foodtroph[]|mixed the list of results, formatted by the current formatter
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
     * @return FoodtrophQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(FoodtrophPeer::FOODLEVEL, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(FoodtrophPeer::FOOD, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FoodtrophQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(FoodtrophPeer::FOODLEVEL, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(FoodtrophPeer::FOOD, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the FoodLevel column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodlevel(1234); // WHERE FoodLevel = 1234
     * $query->filterByFoodlevel(array(12, 34)); // WHERE FoodLevel IN (12, 34)
     * $query->filterByFoodlevel(array('min' => 12)); // WHERE FoodLevel >= 12
     * $query->filterByFoodlevel(array('max' => 12)); // WHERE FoodLevel <= 12
     * </code>
     *
     * @param     mixed $foodlevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodtrophQuery The current query, for fluid interface
     */
    public function filterByFoodlevel($foodlevel = null, $comparison = null)
    {
        if (is_array($foodlevel)) {
            $useMinMax = false;
            if (isset($foodlevel['min'])) {
                $this->addUsingAlias(FoodtrophPeer::FOODLEVEL, $foodlevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foodlevel['max'])) {
                $this->addUsingAlias(FoodtrophPeer::FOODLEVEL, $foodlevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodtrophPeer::FOODLEVEL, $foodlevel, $comparison);
    }

    /**
     * Filter the query on the Food column
     *
     * Example usage:
     * <code>
     * $query->filterByFood('fooValue');   // WHERE Food = 'fooValue'
     * $query->filterByFood('%fooValue%'); // WHERE Food LIKE '%fooValue%'
     * </code>
     *
     * @param     string $food The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodtrophQuery The current query, for fluid interface
     */
    public function filterByFood($food = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($food)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $food)) {
                $food = str_replace('*', '%', $food);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FoodtrophPeer::FOOD, $food, $comparison);
    }

    /**
     * Filter the query on the TL column
     *
     * Example usage:
     * <code>
     * $query->filterByTl(1234); // WHERE TL = 1234
     * $query->filterByTl(array(12, 34)); // WHERE TL IN (12, 34)
     * $query->filterByTl(array('min' => 12)); // WHERE TL >= 12
     * $query->filterByTl(array('max' => 12)); // WHERE TL <= 12
     * </code>
     *
     * @param     mixed $tl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodtrophQuery The current query, for fluid interface
     */
    public function filterByTl($tl = null, $comparison = null)
    {
        if (is_array($tl)) {
            $useMinMax = false;
            if (isset($tl['min'])) {
                $this->addUsingAlias(FoodtrophPeer::TL, $tl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tl['max'])) {
                $this->addUsingAlias(FoodtrophPeer::TL, $tl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodtrophPeer::TL, $tl, $comparison);
    }

    /**
     * Filter the query on the SETL column
     *
     * Example usage:
     * <code>
     * $query->filterBySetl(1234); // WHERE SETL = 1234
     * $query->filterBySetl(array(12, 34)); // WHERE SETL IN (12, 34)
     * $query->filterBySetl(array('min' => 12)); // WHERE SETL >= 12
     * $query->filterBySetl(array('max' => 12)); // WHERE SETL <= 12
     * </code>
     *
     * @param     mixed $setl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodtrophQuery The current query, for fluid interface
     */
    public function filterBySetl($setl = null, $comparison = null)
    {
        if (is_array($setl)) {
            $useMinMax = false;
            if (isset($setl['min'])) {
                $this->addUsingAlias(FoodtrophPeer::SETL, $setl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($setl['max'])) {
                $this->addUsingAlias(FoodtrophPeer::SETL, $setl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodtrophPeer::SETL, $setl, $comparison);
    }

    /**
     * Filter the query on the RefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByRefno(1234); // WHERE RefNo = 1234
     * $query->filterByRefno(array(12, 34)); // WHERE RefNo IN (12, 34)
     * $query->filterByRefno(array('min' => 12)); // WHERE RefNo >= 12
     * $query->filterByRefno(array('max' => 12)); // WHERE RefNo <= 12
     * </code>
     *
     * @param     mixed $refno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodtrophQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(FoodtrophPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(FoodtrophPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodtrophPeer::REFNO, $refno, $comparison);
    }

    /**
     * Filter the query on the Remark column
     *
     * Example usage:
     * <code>
     * $query->filterByRemark('fooValue');   // WHERE Remark = 'fooValue'
     * $query->filterByRemark('%fooValue%'); // WHERE Remark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodtrophQuery The current query, for fluid interface
     */
    public function filterByRemark($remark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remark)) {
                $remark = str_replace('*', '%', $remark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FoodtrophPeer::REMARK, $remark, $comparison);
    }

    /**
     * Filter the query on the MaxLength column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxlength(1234); // WHERE MaxLength = 1234
     * $query->filterByMaxlength(array(12, 34)); // WHERE MaxLength IN (12, 34)
     * $query->filterByMaxlength(array('min' => 12)); // WHERE MaxLength >= 12
     * $query->filterByMaxlength(array('max' => 12)); // WHERE MaxLength <= 12
     * </code>
     *
     * @param     mixed $maxlength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodtrophQuery The current query, for fluid interface
     */
    public function filterByMaxlength($maxlength = null, $comparison = null)
    {
        if (is_array($maxlength)) {
            $useMinMax = false;
            if (isset($maxlength['min'])) {
                $this->addUsingAlias(FoodtrophPeer::MAXLENGTH, $maxlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxlength['max'])) {
                $this->addUsingAlias(FoodtrophPeer::MAXLENGTH, $maxlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodtrophPeer::MAXLENGTH, $maxlength, $comparison);
    }

    /**
     * Filter the query on the MinLength column
     *
     * Example usage:
     * <code>
     * $query->filterByMinlength(1234); // WHERE MinLength = 1234
     * $query->filterByMinlength(array(12, 34)); // WHERE MinLength IN (12, 34)
     * $query->filterByMinlength(array('min' => 12)); // WHERE MinLength >= 12
     * $query->filterByMinlength(array('max' => 12)); // WHERE MinLength <= 12
     * </code>
     *
     * @param     mixed $minlength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodtrophQuery The current query, for fluid interface
     */
    public function filterByMinlength($minlength = null, $comparison = null)
    {
        if (is_array($minlength)) {
            $useMinMax = false;
            if (isset($minlength['min'])) {
                $this->addUsingAlias(FoodtrophPeer::MINLENGTH, $minlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minlength['max'])) {
                $this->addUsingAlias(FoodtrophPeer::MINLENGTH, $minlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodtrophPeer::MINLENGTH, $minlength, $comparison);
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
     * @return FoodtrophQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FoodtrophPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FoodtrophPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodtrophPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Foodtroph $foodtroph Object to remove from the list of results
     *
     * @return FoodtrophQuery The current query, for fluid interface
     */
    public function prune($foodtroph = null)
    {
        if ($foodtroph) {
            $this->addCond('pruneCond0', $this->getAliasedColName(FoodtrophPeer::FOODLEVEL), $foodtroph->getFoodlevel(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(FoodtrophPeer::FOOD), $foodtroph->getFood(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
