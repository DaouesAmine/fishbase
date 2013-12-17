<?php


/**
 * Base class that represents a query for the 'rp_region' table.
 *
 *
 *
 * @method RpRegionQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method RpRegionQuery orderByRank($order = Criteria::ASC) Order by the rank column
 * @method RpRegionQuery orderByRegion($order = Criteria::ASC) Order by the Region column
 * @method RpRegionQuery orderByRegionname($order = Criteria::ASC) Order by the RegionName column
 * @method RpRegionQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method RpRegionQuery groupByAutoctr() Group by the AutoCtr column
 * @method RpRegionQuery groupByRank() Group by the rank column
 * @method RpRegionQuery groupByRegion() Group by the Region column
 * @method RpRegionQuery groupByRegionname() Group by the RegionName column
 * @method RpRegionQuery groupByTs() Group by the TS column
 *
 * @method RpRegionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RpRegionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RpRegionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RpRegion findOne(PropelPDO $con = null) Return the first RpRegion matching the query
 * @method RpRegion findOneOrCreate(PropelPDO $con = null) Return the first RpRegion matching the query, or a new RpRegion object populated from the query conditions when no match is found
 *
 * @method RpRegion findOneByRank(int $rank) Return the first RpRegion filtered by the rank column
 * @method RpRegion findOneByRegion(string $Region) Return the first RpRegion filtered by the Region column
 * @method RpRegion findOneByRegionname(string $RegionName) Return the first RpRegion filtered by the RegionName column
 * @method RpRegion findOneByTs(string $TS) Return the first RpRegion filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return RpRegion objects filtered by the AutoCtr column
 * @method array findByRank(int $rank) Return RpRegion objects filtered by the rank column
 * @method array findByRegion(string $Region) Return RpRegion objects filtered by the Region column
 * @method array findByRegionname(string $RegionName) Return RpRegion objects filtered by the RegionName column
 * @method array findByTs(string $TS) Return RpRegion objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseRpRegionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRpRegionQuery object.
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
            $modelName = 'RpRegion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RpRegionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RpRegionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RpRegionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RpRegionQuery) {
            return $criteria;
        }
        $query = new RpRegionQuery(null, null, $modelAlias);

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
     * @return   RpRegion|RpRegion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RpRegionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RpRegionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RpRegion A model object, or null if the key is not found
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
     * @return                 RpRegion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `rank`, `Region`, `RegionName`, `TS` FROM `rp_region` WHERE `AutoCtr` = :p0';
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
            $obj = new RpRegion();
            $obj->hydrate($row);
            RpRegionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return RpRegion|RpRegion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RpRegion[]|mixed the list of results, formatted by the current formatter
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
     * @return RpRegionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RpRegionPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RpRegionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RpRegionPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return RpRegionQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(RpRegionPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(RpRegionPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RpRegionPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the rank column
     *
     * Example usage:
     * <code>
     * $query->filterByRank(1234); // WHERE rank = 1234
     * $query->filterByRank(array(12, 34)); // WHERE rank IN (12, 34)
     * $query->filterByRank(array('min' => 12)); // WHERE rank >= 12
     * $query->filterByRank(array('max' => 12)); // WHERE rank <= 12
     * </code>
     *
     * @param     mixed $rank The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RpRegionQuery The current query, for fluid interface
     */
    public function filterByRank($rank = null, $comparison = null)
    {
        if (is_array($rank)) {
            $useMinMax = false;
            if (isset($rank['min'])) {
                $this->addUsingAlias(RpRegionPeer::RANK, $rank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rank['max'])) {
                $this->addUsingAlias(RpRegionPeer::RANK, $rank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RpRegionPeer::RANK, $rank, $comparison);
    }

    /**
     * Filter the query on the Region column
     *
     * Example usage:
     * <code>
     * $query->filterByRegion('fooValue');   // WHERE Region = 'fooValue'
     * $query->filterByRegion('%fooValue%'); // WHERE Region LIKE '%fooValue%'
     * </code>
     *
     * @param     string $region The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RpRegionQuery The current query, for fluid interface
     */
    public function filterByRegion($region = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($region)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $region)) {
                $region = str_replace('*', '%', $region);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RpRegionPeer::REGION, $region, $comparison);
    }

    /**
     * Filter the query on the RegionName column
     *
     * Example usage:
     * <code>
     * $query->filterByRegionname('fooValue');   // WHERE RegionName = 'fooValue'
     * $query->filterByRegionname('%fooValue%'); // WHERE RegionName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $regionname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RpRegionQuery The current query, for fluid interface
     */
    public function filterByRegionname($regionname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($regionname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $regionname)) {
                $regionname = str_replace('*', '%', $regionname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RpRegionPeer::REGIONNAME, $regionname, $comparison);
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
     * @return RpRegionQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(RpRegionPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(RpRegionPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RpRegionPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   RpRegion $rpRegion Object to remove from the list of results
     *
     * @return RpRegionQuery The current query, for fluid interface
     */
    public function prune($rpRegion = null)
    {
        if ($rpRegion) {
            $this->addUsingAlias(RpRegionPeer::AUTOCTR, $rpRegion->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
