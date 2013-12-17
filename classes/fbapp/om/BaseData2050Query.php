<?php


/**
 * Base class that represents a query for the 'data2050' table.
 *
 *
 *
 * @method Data2050Query orderBySpc100($order = Criteria::ASC) Order by the spc100 column
 * @method Data2050Query orderByCid($order = Criteria::ASC) Order by the cid column
 * @method Data2050Query orderByProxcell($order = Criteria::ASC) Order by the proxcell column
 * @method Data2050Query orderByPid($order = Criteria::ASC) Order by the pid column
 * @method Data2050Query orderBySpc1001($order = Criteria::ASC) Order by the spc100_1 column
 * @method Data2050Query orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method Data2050Query groupBySpc100() Group by the spc100 column
 * @method Data2050Query groupByCid() Group by the cid column
 * @method Data2050Query groupByProxcell() Group by the proxcell column
 * @method Data2050Query groupByPid() Group by the pid column
 * @method Data2050Query groupBySpc1001() Group by the spc100_1 column
 * @method Data2050Query groupByPkid() Group by the PKID column
 *
 * @method Data2050Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method Data2050Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method Data2050Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Data2050 findOne(PropelPDO $con = null) Return the first Data2050 matching the query
 * @method Data2050 findOneOrCreate(PropelPDO $con = null) Return the first Data2050 matching the query, or a new Data2050 object populated from the query conditions when no match is found
 *
 * @method Data2050 findOneBySpc100(int $spc100) Return the first Data2050 filtered by the spc100 column
 * @method Data2050 findOneByCid(int $cid) Return the first Data2050 filtered by the cid column
 * @method Data2050 findOneByProxcell(int $proxcell) Return the first Data2050 filtered by the proxcell column
 * @method Data2050 findOneByPid(int $pid) Return the first Data2050 filtered by the pid column
 * @method Data2050 findOneBySpc1001(int $spc100_1) Return the first Data2050 filtered by the spc100_1 column
 *
 * @method array findBySpc100(int $spc100) Return Data2050 objects filtered by the spc100 column
 * @method array findByCid(int $cid) Return Data2050 objects filtered by the cid column
 * @method array findByProxcell(int $proxcell) Return Data2050 objects filtered by the proxcell column
 * @method array findByPid(int $pid) Return Data2050 objects filtered by the pid column
 * @method array findBySpc1001(int $spc100_1) Return Data2050 objects filtered by the spc100_1 column
 * @method array findByPkid(string $PKID) Return Data2050 objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseData2050Query extends ModelCriteria
{
    /**
     * Initializes internal state of BaseData2050Query object.
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
            $modelName = 'Data2050';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new Data2050Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   Data2050Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return Data2050Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof Data2050Query) {
            return $criteria;
        }
        $query = new Data2050Query(null, null, $modelAlias);

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
     * @return   Data2050|Data2050[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = Data2050Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(Data2050Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Data2050 A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByPkid($key, $con = null)
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
     * @return                 Data2050 A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `spc100`, `cid`, `proxcell`, `pid`, `spc100_1`, `PKID` FROM `data2050` WHERE `PKID` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Data2050();
            $obj->hydrate($row);
            Data2050Peer::addInstanceToPool($obj, (string) $key);
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
     * @return Data2050|Data2050[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Data2050[]|mixed the list of results, formatted by the current formatter
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
     * @return Data2050Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(Data2050Peer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return Data2050Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(Data2050Peer::PKID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the spc100 column
     *
     * Example usage:
     * <code>
     * $query->filterBySpc100(1234); // WHERE spc100 = 1234
     * $query->filterBySpc100(array(12, 34)); // WHERE spc100 IN (12, 34)
     * $query->filterBySpc100(array('min' => 12)); // WHERE spc100 >= 12
     * $query->filterBySpc100(array('max' => 12)); // WHERE spc100 <= 12
     * </code>
     *
     * @param     mixed $spc100 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Data2050Query The current query, for fluid interface
     */
    public function filterBySpc100($spc100 = null, $comparison = null)
    {
        if (is_array($spc100)) {
            $useMinMax = false;
            if (isset($spc100['min'])) {
                $this->addUsingAlias(Data2050Peer::SPC100, $spc100['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spc100['max'])) {
                $this->addUsingAlias(Data2050Peer::SPC100, $spc100['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Data2050Peer::SPC100, $spc100, $comparison);
    }

    /**
     * Filter the query on the cid column
     *
     * Example usage:
     * <code>
     * $query->filterByCid(1234); // WHERE cid = 1234
     * $query->filterByCid(array(12, 34)); // WHERE cid IN (12, 34)
     * $query->filterByCid(array('min' => 12)); // WHERE cid >= 12
     * $query->filterByCid(array('max' => 12)); // WHERE cid <= 12
     * </code>
     *
     * @param     mixed $cid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Data2050Query The current query, for fluid interface
     */
    public function filterByCid($cid = null, $comparison = null)
    {
        if (is_array($cid)) {
            $useMinMax = false;
            if (isset($cid['min'])) {
                $this->addUsingAlias(Data2050Peer::CID, $cid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cid['max'])) {
                $this->addUsingAlias(Data2050Peer::CID, $cid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Data2050Peer::CID, $cid, $comparison);
    }

    /**
     * Filter the query on the proxcell column
     *
     * Example usage:
     * <code>
     * $query->filterByProxcell(1234); // WHERE proxcell = 1234
     * $query->filterByProxcell(array(12, 34)); // WHERE proxcell IN (12, 34)
     * $query->filterByProxcell(array('min' => 12)); // WHERE proxcell >= 12
     * $query->filterByProxcell(array('max' => 12)); // WHERE proxcell <= 12
     * </code>
     *
     * @param     mixed $proxcell The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Data2050Query The current query, for fluid interface
     */
    public function filterByProxcell($proxcell = null, $comparison = null)
    {
        if (is_array($proxcell)) {
            $useMinMax = false;
            if (isset($proxcell['min'])) {
                $this->addUsingAlias(Data2050Peer::PROXCELL, $proxcell['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proxcell['max'])) {
                $this->addUsingAlias(Data2050Peer::PROXCELL, $proxcell['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Data2050Peer::PROXCELL, $proxcell, $comparison);
    }

    /**
     * Filter the query on the pid column
     *
     * Example usage:
     * <code>
     * $query->filterByPid(1234); // WHERE pid = 1234
     * $query->filterByPid(array(12, 34)); // WHERE pid IN (12, 34)
     * $query->filterByPid(array('min' => 12)); // WHERE pid >= 12
     * $query->filterByPid(array('max' => 12)); // WHERE pid <= 12
     * </code>
     *
     * @param     mixed $pid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Data2050Query The current query, for fluid interface
     */
    public function filterByPid($pid = null, $comparison = null)
    {
        if (is_array($pid)) {
            $useMinMax = false;
            if (isset($pid['min'])) {
                $this->addUsingAlias(Data2050Peer::PID, $pid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pid['max'])) {
                $this->addUsingAlias(Data2050Peer::PID, $pid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Data2050Peer::PID, $pid, $comparison);
    }

    /**
     * Filter the query on the spc100_1 column
     *
     * Example usage:
     * <code>
     * $query->filterBySpc1001(1234); // WHERE spc100_1 = 1234
     * $query->filterBySpc1001(array(12, 34)); // WHERE spc100_1 IN (12, 34)
     * $query->filterBySpc1001(array('min' => 12)); // WHERE spc100_1 >= 12
     * $query->filterBySpc1001(array('max' => 12)); // WHERE spc100_1 <= 12
     * </code>
     *
     * @param     mixed $spc1001 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Data2050Query The current query, for fluid interface
     */
    public function filterBySpc1001($spc1001 = null, $comparison = null)
    {
        if (is_array($spc1001)) {
            $useMinMax = false;
            if (isset($spc1001['min'])) {
                $this->addUsingAlias(Data2050Peer::SPC100_1, $spc1001['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spc1001['max'])) {
                $this->addUsingAlias(Data2050Peer::SPC100_1, $spc1001['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Data2050Peer::SPC100_1, $spc1001, $comparison);
    }

    /**
     * Filter the query on the PKID column
     *
     * Example usage:
     * <code>
     * $query->filterByPkid(1234); // WHERE PKID = 1234
     * $query->filterByPkid(array(12, 34)); // WHERE PKID IN (12, 34)
     * $query->filterByPkid(array('min' => 12)); // WHERE PKID >= 12
     * $query->filterByPkid(array('max' => 12)); // WHERE PKID <= 12
     * </code>
     *
     * @param     mixed $pkid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Data2050Query The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(Data2050Peer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(Data2050Peer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Data2050Peer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Data2050 $data2050 Object to remove from the list of results
     *
     * @return Data2050Query The current query, for fluid interface
     */
    public function prune($data2050 = null)
    {
        if ($data2050) {
            $this->addUsingAlias(Data2050Peer::PKID, $data2050->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
