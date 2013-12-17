<?php


/**
 * Base class that represents a query for the 'faoarord' table.
 *
 *
 *
 * @method FaoarordQuery orderByOrder($order = Criteria::ASC) Order by the Order column
 * @method FaoarordQuery orderByAreacode($order = Criteria::ASC) Order by the AreaCode column
 * @method FaoarordQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FaoarordQuery groupByOrder() Group by the Order column
 * @method FaoarordQuery groupByAreacode() Group by the AreaCode column
 * @method FaoarordQuery groupByTs() Group by the TS column
 *
 * @method FaoarordQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FaoarordQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FaoarordQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Faoarord findOne(PropelPDO $con = null) Return the first Faoarord matching the query
 * @method Faoarord findOneOrCreate(PropelPDO $con = null) Return the first Faoarord matching the query, or a new Faoarord object populated from the query conditions when no match is found
 *
 * @method Faoarord findOneByOrder(string $Order) Return the first Faoarord filtered by the Order column
 * @method Faoarord findOneByAreacode(int $AreaCode) Return the first Faoarord filtered by the AreaCode column
 * @method Faoarord findOneByTs(string $TS) Return the first Faoarord filtered by the TS column
 *
 * @method array findByOrder(string $Order) Return Faoarord objects filtered by the Order column
 * @method array findByAreacode(int $AreaCode) Return Faoarord objects filtered by the AreaCode column
 * @method array findByTs(string $TS) Return Faoarord objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFaoarordQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFaoarordQuery object.
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
            $modelName = 'Faoarord';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FaoarordQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FaoarordQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FaoarordQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FaoarordQuery) {
            return $criteria;
        }
        $query = new FaoarordQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$Order, $AreaCode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Faoarord|Faoarord[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FaoarordPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FaoarordPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Faoarord A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Order`, `AreaCode`, `TS` FROM `faoarord` WHERE `Order` = :p0 AND `AreaCode` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Faoarord();
            $obj->hydrate($row);
            FaoarordPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Faoarord|Faoarord[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Faoarord[]|mixed the list of results, formatted by the current formatter
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
     * @return FaoarordQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(FaoarordPeer::ORDER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(FaoarordPeer::AREACODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FaoarordQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(FaoarordPeer::ORDER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(FaoarordPeer::AREACODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the Order column
     *
     * Example usage:
     * <code>
     * $query->filterByOrder('fooValue');   // WHERE Order = 'fooValue'
     * $query->filterByOrder('%fooValue%'); // WHERE Order LIKE '%fooValue%'
     * </code>
     *
     * @param     string $order The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarordQuery The current query, for fluid interface
     */
    public function filterByOrder($order = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($order)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $order)) {
                $order = str_replace('*', '%', $order);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FaoarordPeer::ORDER, $order, $comparison);
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
     * @return FaoarordQuery The current query, for fluid interface
     */
    public function filterByAreacode($areacode = null, $comparison = null)
    {
        if (is_array($areacode)) {
            $useMinMax = false;
            if (isset($areacode['min'])) {
                $this->addUsingAlias(FaoarordPeer::AREACODE, $areacode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacode['max'])) {
                $this->addUsingAlias(FaoarordPeer::AREACODE, $areacode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarordPeer::AREACODE, $areacode, $comparison);
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
     * @return FaoarordQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FaoarordPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FaoarordPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarordPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Faoarord $faoarord Object to remove from the list of results
     *
     * @return FaoarordQuery The current query, for fluid interface
     */
    public function prune($faoarord = null)
    {
        if ($faoarord) {
            $this->addCond('pruneCond0', $this->getAliasedColName(FaoarordPeer::ORDER), $faoarord->getOrder(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(FaoarordPeer::AREACODE), $faoarord->getAreacode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
