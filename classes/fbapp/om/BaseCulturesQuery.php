<?php


/**
 * Base class that represents a query for the 'cultures' table.
 *
 *
 *
 * @method CulturesQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method CulturesQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method CulturesQuery orderByCultcode($order = Criteria::ASC) Order by the CultCode column
 * @method CulturesQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method CulturesQuery groupBySpeccode() Group by the SpecCode column
 * @method CulturesQuery groupByStockcode() Group by the StockCode column
 * @method CulturesQuery groupByCultcode() Group by the CultCode column
 * @method CulturesQuery groupByTs() Group by the TS column
 *
 * @method CulturesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CulturesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CulturesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Cultures findOne(PropelPDO $con = null) Return the first Cultures matching the query
 * @method Cultures findOneOrCreate(PropelPDO $con = null) Return the first Cultures matching the query, or a new Cultures object populated from the query conditions when no match is found
 *
 * @method Cultures findOneBySpeccode(int $SpecCode) Return the first Cultures filtered by the SpecCode column
 * @method Cultures findOneByStockcode(int $StockCode) Return the first Cultures filtered by the StockCode column
 * @method Cultures findOneByCultcode(int $CultCode) Return the first Cultures filtered by the CultCode column
 * @method Cultures findOneByTs(string $TS) Return the first Cultures filtered by the TS column
 *
 * @method array findBySpeccode(int $SpecCode) Return Cultures objects filtered by the SpecCode column
 * @method array findByStockcode(int $StockCode) Return Cultures objects filtered by the StockCode column
 * @method array findByCultcode(int $CultCode) Return Cultures objects filtered by the CultCode column
 * @method array findByTs(string $TS) Return Cultures objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCulturesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCulturesQuery object.
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
            $modelName = 'Cultures';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CulturesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CulturesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CulturesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CulturesQuery) {
            return $criteria;
        }
        $query = new CulturesQuery(null, null, $modelAlias);

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
     * @return   Cultures|Cultures[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CulturesPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CulturesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cultures A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SpecCode`, `StockCode`, `CultCode`, `TS` FROM `cultures` WHERE `StockCode` = :p0 AND `CultCode` = :p1';
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
            $obj = new Cultures();
            $obj->hydrate($row);
            CulturesPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Cultures|Cultures[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cultures[]|mixed the list of results, formatted by the current formatter
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
     * @return CulturesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CulturesPeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CulturesPeer::CULTCODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CulturesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CulturesPeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CulturesPeer::CULTCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CulturesQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(CulturesPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(CulturesPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CulturesPeer::SPECCODE, $speccode, $comparison);
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
     * @return CulturesQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(CulturesPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(CulturesPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CulturesPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return CulturesQuery The current query, for fluid interface
     */
    public function filterByCultcode($cultcode = null, $comparison = null)
    {
        if (is_array($cultcode)) {
            $useMinMax = false;
            if (isset($cultcode['min'])) {
                $this->addUsingAlias(CulturesPeer::CULTCODE, $cultcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cultcode['max'])) {
                $this->addUsingAlias(CulturesPeer::CULTCODE, $cultcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CulturesPeer::CULTCODE, $cultcode, $comparison);
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
     * @return CulturesQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(CulturesPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(CulturesPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CulturesPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Cultures $cultures Object to remove from the list of results
     *
     * @return CulturesQuery The current query, for fluid interface
     */
    public function prune($cultures = null)
    {
        if ($cultures) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CulturesPeer::STOCKCODE), $cultures->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CulturesPeer::CULTCODE), $cultures->getCultcode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
