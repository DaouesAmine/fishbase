<?php


/**
 * Base class that represents a query for the 'oceanprovfaoref' table.
 *
 *
 *
 * @method OceanprovfaorefQuery orderByAreacode($order = Criteria::ASC) Order by the AreaCode column
 * @method OceanprovfaorefQuery orderByRegionno($order = Criteria::ASC) Order by the RegionNo column
 * @method OceanprovfaorefQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method OceanprovfaorefQuery groupByAreacode() Group by the AreaCode column
 * @method OceanprovfaorefQuery groupByRegionno() Group by the RegionNo column
 * @method OceanprovfaorefQuery groupByTs() Group by the TS column
 *
 * @method OceanprovfaorefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OceanprovfaorefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OceanprovfaorefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Oceanprovfaoref findOne(PropelPDO $con = null) Return the first Oceanprovfaoref matching the query
 * @method Oceanprovfaoref findOneOrCreate(PropelPDO $con = null) Return the first Oceanprovfaoref matching the query, or a new Oceanprovfaoref object populated from the query conditions when no match is found
 *
 * @method Oceanprovfaoref findOneByAreacode(int $AreaCode) Return the first Oceanprovfaoref filtered by the AreaCode column
 * @method Oceanprovfaoref findOneByRegionno(int $RegionNo) Return the first Oceanprovfaoref filtered by the RegionNo column
 * @method Oceanprovfaoref findOneByTs(string $TS) Return the first Oceanprovfaoref filtered by the TS column
 *
 * @method array findByAreacode(int $AreaCode) Return Oceanprovfaoref objects filtered by the AreaCode column
 * @method array findByRegionno(int $RegionNo) Return Oceanprovfaoref objects filtered by the RegionNo column
 * @method array findByTs(string $TS) Return Oceanprovfaoref objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseOceanprovfaorefQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOceanprovfaorefQuery object.
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
            $modelName = 'Oceanprovfaoref';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OceanprovfaorefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OceanprovfaorefQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OceanprovfaorefQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OceanprovfaorefQuery) {
            return $criteria;
        }
        $query = new OceanprovfaorefQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$AreaCode, $RegionNo]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Oceanprovfaoref|Oceanprovfaoref[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OceanprovfaorefPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OceanprovfaorefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Oceanprovfaoref A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AreaCode`, `RegionNo`, `TS` FROM `oceanprovfaoref` WHERE `AreaCode` = :p0 AND `RegionNo` = :p1';
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
            $obj = new Oceanprovfaoref();
            $obj->hydrate($row);
            OceanprovfaorefPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Oceanprovfaoref|Oceanprovfaoref[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Oceanprovfaoref[]|mixed the list of results, formatted by the current formatter
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
     * @return OceanprovfaorefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(OceanprovfaorefPeer::AREACODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(OceanprovfaorefPeer::REGIONNO, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OceanprovfaorefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(OceanprovfaorefPeer::AREACODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(OceanprovfaorefPeer::REGIONNO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return OceanprovfaorefQuery The current query, for fluid interface
     */
    public function filterByAreacode($areacode = null, $comparison = null)
    {
        if (is_array($areacode)) {
            $useMinMax = false;
            if (isset($areacode['min'])) {
                $this->addUsingAlias(OceanprovfaorefPeer::AREACODE, $areacode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacode['max'])) {
                $this->addUsingAlias(OceanprovfaorefPeer::AREACODE, $areacode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovfaorefPeer::AREACODE, $areacode, $comparison);
    }

    /**
     * Filter the query on the RegionNo column
     *
     * Example usage:
     * <code>
     * $query->filterByRegionno(1234); // WHERE RegionNo = 1234
     * $query->filterByRegionno(array(12, 34)); // WHERE RegionNo IN (12, 34)
     * $query->filterByRegionno(array('min' => 12)); // WHERE RegionNo >= 12
     * $query->filterByRegionno(array('max' => 12)); // WHERE RegionNo <= 12
     * </code>
     *
     * @param     mixed $regionno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovfaorefQuery The current query, for fluid interface
     */
    public function filterByRegionno($regionno = null, $comparison = null)
    {
        if (is_array($regionno)) {
            $useMinMax = false;
            if (isset($regionno['min'])) {
                $this->addUsingAlias(OceanprovfaorefPeer::REGIONNO, $regionno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($regionno['max'])) {
                $this->addUsingAlias(OceanprovfaorefPeer::REGIONNO, $regionno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovfaorefPeer::REGIONNO, $regionno, $comparison);
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
     * @return OceanprovfaorefQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(OceanprovfaorefPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(OceanprovfaorefPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovfaorefPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Oceanprovfaoref $oceanprovfaoref Object to remove from the list of results
     *
     * @return OceanprovfaorefQuery The current query, for fluid interface
     */
    public function prune($oceanprovfaoref = null)
    {
        if ($oceanprovfaoref) {
            $this->addCond('pruneCond0', $this->getAliasedColName(OceanprovfaorefPeer::AREACODE), $oceanprovfaoref->getAreacode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(OceanprovfaorefPeer::REGIONNO), $oceanprovfaoref->getRegionno(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
