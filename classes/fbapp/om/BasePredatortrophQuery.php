<?php


/**
 * Base class that represents a query for the 'predatortroph' table.
 *
 *
 *
 * @method PredatortrophQuery orderByPredatorlevel($order = Criteria::ASC) Order by the Predatorlevel column
 * @method PredatortrophQuery orderByPredator($order = Criteria::ASC) Order by the Predator column
 * @method PredatortrophQuery orderByTl($order = Criteria::ASC) Order by the TL column
 * @method PredatortrophQuery orderBySetl($order = Criteria::ASC) Order by the SETL column
 * @method PredatortrophQuery orderByRefno($order = Criteria::ASC) Order by the RefNo column
 * @method PredatortrophQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method PredatortrophQuery orderByMaxlength($order = Criteria::ASC) Order by the MaxLength column
 * @method PredatortrophQuery orderByMinlength($order = Criteria::ASC) Order by the MinLength column
 * @method PredatortrophQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method PredatortrophQuery groupByPredatorlevel() Group by the Predatorlevel column
 * @method PredatortrophQuery groupByPredator() Group by the Predator column
 * @method PredatortrophQuery groupByTl() Group by the TL column
 * @method PredatortrophQuery groupBySetl() Group by the SETL column
 * @method PredatortrophQuery groupByRefno() Group by the RefNo column
 * @method PredatortrophQuery groupByRemark() Group by the Remark column
 * @method PredatortrophQuery groupByMaxlength() Group by the MaxLength column
 * @method PredatortrophQuery groupByMinlength() Group by the MinLength column
 * @method PredatortrophQuery groupByTs() Group by the TS column
 *
 * @method PredatortrophQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PredatortrophQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PredatortrophQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Predatortroph findOne(PropelPDO $con = null) Return the first Predatortroph matching the query
 * @method Predatortroph findOneOrCreate(PropelPDO $con = null) Return the first Predatortroph matching the query, or a new Predatortroph object populated from the query conditions when no match is found
 *
 * @method Predatortroph findOneByPredatorlevel(double $Predatorlevel) Return the first Predatortroph filtered by the Predatorlevel column
 * @method Predatortroph findOneByPredator(string $Predator) Return the first Predatortroph filtered by the Predator column
 * @method Predatortroph findOneByTl(double $TL) Return the first Predatortroph filtered by the TL column
 * @method Predatortroph findOneBySetl(double $SETL) Return the first Predatortroph filtered by the SETL column
 * @method Predatortroph findOneByRefno(double $RefNo) Return the first Predatortroph filtered by the RefNo column
 * @method Predatortroph findOneByRemark(string $Remark) Return the first Predatortroph filtered by the Remark column
 * @method Predatortroph findOneByMaxlength(double $MaxLength) Return the first Predatortroph filtered by the MaxLength column
 * @method Predatortroph findOneByMinlength(double $MinLength) Return the first Predatortroph filtered by the MinLength column
 * @method Predatortroph findOneByTs(string $TS) Return the first Predatortroph filtered by the TS column
 *
 * @method array findByPredatorlevel(double $Predatorlevel) Return Predatortroph objects filtered by the Predatorlevel column
 * @method array findByPredator(string $Predator) Return Predatortroph objects filtered by the Predator column
 * @method array findByTl(double $TL) Return Predatortroph objects filtered by the TL column
 * @method array findBySetl(double $SETL) Return Predatortroph objects filtered by the SETL column
 * @method array findByRefno(double $RefNo) Return Predatortroph objects filtered by the RefNo column
 * @method array findByRemark(string $Remark) Return Predatortroph objects filtered by the Remark column
 * @method array findByMaxlength(double $MaxLength) Return Predatortroph objects filtered by the MaxLength column
 * @method array findByMinlength(double $MinLength) Return Predatortroph objects filtered by the MinLength column
 * @method array findByTs(string $TS) Return Predatortroph objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePredatortrophQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePredatortrophQuery object.
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
            $modelName = 'Predatortroph';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PredatortrophQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PredatortrophQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PredatortrophQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PredatortrophQuery) {
            return $criteria;
        }
        $query = new PredatortrophQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$Predatorlevel, $Predator]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Predatortroph|Predatortroph[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PredatortrophPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PredatortrophPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Predatortroph A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Predatorlevel`, `Predator`, `TL`, `SETL`, `RefNo`, `Remark`, `MaxLength`, `MinLength`, `TS` FROM `predatortroph` WHERE `Predatorlevel` = :p0 AND `Predator` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Predatortroph();
            $obj->hydrate($row);
            PredatortrophPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Predatortroph|Predatortroph[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Predatortroph[]|mixed the list of results, formatted by the current formatter
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
     * @return PredatortrophQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(PredatortrophPeer::PREDATORLEVEL, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PredatortrophPeer::PREDATOR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PredatortrophQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(PredatortrophPeer::PREDATORLEVEL, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PredatortrophPeer::PREDATOR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the Predatorlevel column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatorlevel(1234); // WHERE Predatorlevel = 1234
     * $query->filterByPredatorlevel(array(12, 34)); // WHERE Predatorlevel IN (12, 34)
     * $query->filterByPredatorlevel(array('min' => 12)); // WHERE Predatorlevel >= 12
     * $query->filterByPredatorlevel(array('max' => 12)); // WHERE Predatorlevel <= 12
     * </code>
     *
     * @param     mixed $predatorlevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatortrophQuery The current query, for fluid interface
     */
    public function filterByPredatorlevel($predatorlevel = null, $comparison = null)
    {
        if (is_array($predatorlevel)) {
            $useMinMax = false;
            if (isset($predatorlevel['min'])) {
                $this->addUsingAlias(PredatortrophPeer::PREDATORLEVEL, $predatorlevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($predatorlevel['max'])) {
                $this->addUsingAlias(PredatortrophPeer::PREDATORLEVEL, $predatorlevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatortrophPeer::PREDATORLEVEL, $predatorlevel, $comparison);
    }

    /**
     * Filter the query on the Predator column
     *
     * Example usage:
     * <code>
     * $query->filterByPredator('fooValue');   // WHERE Predator = 'fooValue'
     * $query->filterByPredator('%fooValue%'); // WHERE Predator LIKE '%fooValue%'
     * </code>
     *
     * @param     string $predator The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatortrophQuery The current query, for fluid interface
     */
    public function filterByPredator($predator = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($predator)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $predator)) {
                $predator = str_replace('*', '%', $predator);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PredatortrophPeer::PREDATOR, $predator, $comparison);
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
     * @return PredatortrophQuery The current query, for fluid interface
     */
    public function filterByTl($tl = null, $comparison = null)
    {
        if (is_array($tl)) {
            $useMinMax = false;
            if (isset($tl['min'])) {
                $this->addUsingAlias(PredatortrophPeer::TL, $tl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tl['max'])) {
                $this->addUsingAlias(PredatortrophPeer::TL, $tl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatortrophPeer::TL, $tl, $comparison);
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
     * @return PredatortrophQuery The current query, for fluid interface
     */
    public function filterBySetl($setl = null, $comparison = null)
    {
        if (is_array($setl)) {
            $useMinMax = false;
            if (isset($setl['min'])) {
                $this->addUsingAlias(PredatortrophPeer::SETL, $setl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($setl['max'])) {
                $this->addUsingAlias(PredatortrophPeer::SETL, $setl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatortrophPeer::SETL, $setl, $comparison);
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
     * @return PredatortrophQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(PredatortrophPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(PredatortrophPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatortrophPeer::REFNO, $refno, $comparison);
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
     * @return PredatortrophQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PredatortrophPeer::REMARK, $remark, $comparison);
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
     * @return PredatortrophQuery The current query, for fluid interface
     */
    public function filterByMaxlength($maxlength = null, $comparison = null)
    {
        if (is_array($maxlength)) {
            $useMinMax = false;
            if (isset($maxlength['min'])) {
                $this->addUsingAlias(PredatortrophPeer::MAXLENGTH, $maxlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxlength['max'])) {
                $this->addUsingAlias(PredatortrophPeer::MAXLENGTH, $maxlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatortrophPeer::MAXLENGTH, $maxlength, $comparison);
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
     * @return PredatortrophQuery The current query, for fluid interface
     */
    public function filterByMinlength($minlength = null, $comparison = null)
    {
        if (is_array($minlength)) {
            $useMinMax = false;
            if (isset($minlength['min'])) {
                $this->addUsingAlias(PredatortrophPeer::MINLENGTH, $minlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minlength['max'])) {
                $this->addUsingAlias(PredatortrophPeer::MINLENGTH, $minlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatortrophPeer::MINLENGTH, $minlength, $comparison);
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
     * @return PredatortrophQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(PredatortrophPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(PredatortrophPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatortrophPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Predatortroph $predatortroph Object to remove from the list of results
     *
     * @return PredatortrophQuery The current query, for fluid interface
     */
    public function prune($predatortroph = null)
    {
        if ($predatortroph) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PredatortrophPeer::PREDATORLEVEL), $predatortroph->getPredatorlevel(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PredatortrophPeer::PREDATOR), $predatortroph->getPredator(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
