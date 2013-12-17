<?php


/**
 * Base class that represents a query for the 'countfao' table.
 *
 *
 *
 * @method CountfaoQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method CountfaoQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method CountfaoQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method CountfaoQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method CountfaoQuery orderByAreacode($order = Criteria::ASC) Order by the AreaCode column
 * @method CountfaoQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method CountfaoQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method CountfaoQuery groupByAutoctr() Group by the autoctr column
 * @method CountfaoQuery groupBySpeccode() Group by the SpecCode column
 * @method CountfaoQuery groupByStockcode() Group by the StockCode column
 * @method CountfaoQuery groupByCCode() Group by the C_Code column
 * @method CountfaoQuery groupByAreacode() Group by the AreaCode column
 * @method CountfaoQuery groupByDateentered() Group by the DateEntered column
 * @method CountfaoQuery groupByTs() Group by the TS column
 *
 * @method CountfaoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CountfaoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CountfaoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Countfao findOne(PropelPDO $con = null) Return the first Countfao matching the query
 * @method Countfao findOneOrCreate(PropelPDO $con = null) Return the first Countfao matching the query, or a new Countfao object populated from the query conditions when no match is found
 *
 * @method Countfao findOneByAutoctr(int $autoctr) Return the first Countfao filtered by the autoctr column
 * @method Countfao findOneBySpeccode(int $SpecCode) Return the first Countfao filtered by the SpecCode column
 * @method Countfao findOneByStockcode(int $StockCode) Return the first Countfao filtered by the StockCode column
 * @method Countfao findOneByCCode(string $C_Code) Return the first Countfao filtered by the C_Code column
 * @method Countfao findOneByAreacode(int $AreaCode) Return the first Countfao filtered by the AreaCode column
 * @method Countfao findOneByDateentered(string $DateEntered) Return the first Countfao filtered by the DateEntered column
 * @method Countfao findOneByTs(string $TS) Return the first Countfao filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Countfao objects filtered by the autoctr column
 * @method array findBySpeccode(int $SpecCode) Return Countfao objects filtered by the SpecCode column
 * @method array findByStockcode(int $StockCode) Return Countfao objects filtered by the StockCode column
 * @method array findByCCode(string $C_Code) Return Countfao objects filtered by the C_Code column
 * @method array findByAreacode(int $AreaCode) Return Countfao objects filtered by the AreaCode column
 * @method array findByDateentered(string $DateEntered) Return Countfao objects filtered by the DateEntered column
 * @method array findByTs(string $TS) Return Countfao objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCountfaoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCountfaoQuery object.
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
            $modelName = 'Countfao';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CountfaoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CountfaoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CountfaoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CountfaoQuery) {
            return $criteria;
        }
        $query = new CountfaoQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$StockCode, $C_Code, $AreaCode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Countfao|Countfao[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CountfaoPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CountfaoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Countfao A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `SpecCode`, `StockCode`, `C_Code`, `AreaCode`, `DateEntered`, `TS` FROM `countfao` WHERE `StockCode` = :p0 AND `C_Code` = :p1 AND `AreaCode` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Countfao();
            $obj->hydrate($row);
            CountfaoPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Countfao|Countfao[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Countfao[]|mixed the list of results, formatted by the current formatter
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
     * @return CountfaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CountfaoPeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CountfaoPeer::C_CODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CountfaoPeer::AREACODE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CountfaoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CountfaoPeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CountfaoPeer::C_CODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CountfaoPeer::AREACODE, $key[2], Criteria::EQUAL);
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
     * @return CountfaoQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(CountfaoPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(CountfaoPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountfaoPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return CountfaoQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(CountfaoPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(CountfaoPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountfaoPeer::SPECCODE, $speccode, $comparison);
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
     * @return CountfaoQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(CountfaoPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(CountfaoPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountfaoPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return CountfaoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CountfaoPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the AreaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacode(1234); // WHERE AreaCode = 1234
     * $query->filterByAreacode(array(12, 34)); // WHERE AreaCode IN (12, 34)
     * $query->filterByAreacode(array('min' => 12)); // WHERE AreaCode >= 12
     * $query->filterByAreacode(array('max' => 12)); // WHERE AreaCode <= 12
     * </code>
     *
     * @param     mixed $areacode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountfaoQuery The current query, for fluid interface
     */
    public function filterByAreacode($areacode = null, $comparison = null)
    {
        if (is_array($areacode)) {
            $useMinMax = false;
            if (isset($areacode['min'])) {
                $this->addUsingAlias(CountfaoPeer::AREACODE, $areacode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacode['max'])) {
                $this->addUsingAlias(CountfaoPeer::AREACODE, $areacode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountfaoPeer::AREACODE, $areacode, $comparison);
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
     * @return CountfaoQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(CountfaoPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(CountfaoPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountfaoPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return CountfaoQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(CountfaoPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(CountfaoPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountfaoPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Countfao $countfao Object to remove from the list of results
     *
     * @return CountfaoQuery The current query, for fluid interface
     */
    public function prune($countfao = null)
    {
        if ($countfao) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CountfaoPeer::STOCKCODE), $countfao->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CountfaoPeer::C_CODE), $countfao->getCCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CountfaoPeer::AREACODE), $countfao->getAreacode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
