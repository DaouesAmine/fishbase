<?php


/**
 * Base class that represents a query for the 'orderage' table.
 *
 *
 *
 * @method OrderageQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method OrderageQuery orderByOrder($order = Criteria::ASC) Order by the Order column
 * @method OrderageQuery orderByOtherorders($order = Criteria::ASC) Order by the OtherOrders column
 * @method OrderageQuery orderByCommonancestor($order = Criteria::ASC) Order by the CommonAncestor column
 * @method OrderageQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method OrderageQuery groupByAutoctr() Group by the AutoCtr column
 * @method OrderageQuery groupByOrder() Group by the Order column
 * @method OrderageQuery groupByOtherorders() Group by the OtherOrders column
 * @method OrderageQuery groupByCommonancestor() Group by the CommonAncestor column
 * @method OrderageQuery groupByTs() Group by the TS column
 *
 * @method OrderageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OrderageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OrderageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Orderage findOne(PropelPDO $con = null) Return the first Orderage matching the query
 * @method Orderage findOneOrCreate(PropelPDO $con = null) Return the first Orderage matching the query, or a new Orderage object populated from the query conditions when no match is found
 *
 * @method Orderage findOneByOrder(string $Order) Return the first Orderage filtered by the Order column
 * @method Orderage findOneByOtherorders(string $OtherOrders) Return the first Orderage filtered by the OtherOrders column
 * @method Orderage findOneByCommonancestor(int $CommonAncestor) Return the first Orderage filtered by the CommonAncestor column
 * @method Orderage findOneByTs(string $TS) Return the first Orderage filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Orderage objects filtered by the AutoCtr column
 * @method array findByOrder(string $Order) Return Orderage objects filtered by the Order column
 * @method array findByOtherorders(string $OtherOrders) Return Orderage objects filtered by the OtherOrders column
 * @method array findByCommonancestor(int $CommonAncestor) Return Orderage objects filtered by the CommonAncestor column
 * @method array findByTs(string $TS) Return Orderage objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseOrderageQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOrderageQuery object.
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
            $modelName = 'Orderage';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OrderageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OrderageQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OrderageQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OrderageQuery) {
            return $criteria;
        }
        $query = new OrderageQuery(null, null, $modelAlias);

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
     * @return   Orderage|Orderage[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OrderagePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OrderagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Orderage A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAutoctr($key, $con = null)
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
     * @return                 Orderage A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `Order`, `OtherOrders`, `CommonAncestor`, `TS` FROM `orderage` WHERE `AutoCtr` = :p0';
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
            $obj = new Orderage();
            $obj->hydrate($row);
            OrderagePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Orderage|Orderage[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Orderage[]|mixed the list of results, formatted by the current formatter
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
     * @return OrderageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OrderagePeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OrderageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OrderagePeer::AUTOCTR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the AutoCtr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE AutoCtr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE AutoCtr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE AutoCtr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE AutoCtr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrderageQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(OrderagePeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(OrderagePeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrderagePeer::AUTOCTR, $autoctr, $comparison);
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
     * @return OrderageQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OrderagePeer::ORDER, $order, $comparison);
    }

    /**
     * Filter the query on the OtherOrders column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherorders('fooValue');   // WHERE OtherOrders = 'fooValue'
     * $query->filterByOtherorders('%fooValue%'); // WHERE OtherOrders LIKE '%fooValue%'
     * </code>
     *
     * @param     string $otherorders The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrderageQuery The current query, for fluid interface
     */
    public function filterByOtherorders($otherorders = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($otherorders)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $otherorders)) {
                $otherorders = str_replace('*', '%', $otherorders);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OrderagePeer::OTHERORDERS, $otherorders, $comparison);
    }

    /**
     * Filter the query on the CommonAncestor column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonancestor(1234); // WHERE CommonAncestor = 1234
     * $query->filterByCommonancestor(array(12, 34)); // WHERE CommonAncestor IN (12, 34)
     * $query->filterByCommonancestor(array('min' => 12)); // WHERE CommonAncestor >= 12
     * $query->filterByCommonancestor(array('max' => 12)); // WHERE CommonAncestor <= 12
     * </code>
     *
     * @param     mixed $commonancestor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OrderageQuery The current query, for fluid interface
     */
    public function filterByCommonancestor($commonancestor = null, $comparison = null)
    {
        if (is_array($commonancestor)) {
            $useMinMax = false;
            if (isset($commonancestor['min'])) {
                $this->addUsingAlias(OrderagePeer::COMMONANCESTOR, $commonancestor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commonancestor['max'])) {
                $this->addUsingAlias(OrderagePeer::COMMONANCESTOR, $commonancestor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrderagePeer::COMMONANCESTOR, $commonancestor, $comparison);
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
     * @return OrderageQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(OrderagePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(OrderagePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OrderagePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Orderage $orderage Object to remove from the list of results
     *
     * @return OrderageQuery The current query, for fluid interface
     */
    public function prune($orderage = null)
    {
        if ($orderage) {
            $this->addUsingAlias(OrderagePeer::AUTOCTR, $orderage->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
