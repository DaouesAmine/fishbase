<?php


/**
 * Base class that represents a query for the 'rp_province' table.
 *
 *
 *
 * @method RpProvinceQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method RpProvinceQuery orderByRegion($order = Criteria::ASC) Order by the Region column
 * @method RpProvinceQuery orderByRegionname($order = Criteria::ASC) Order by the RegionName column
 * @method RpProvinceQuery orderByProvince($order = Criteria::ASC) Order by the Province column
 * @method RpProvinceQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method RpProvinceQuery groupByAutoctr() Group by the AutoCtr column
 * @method RpProvinceQuery groupByRegion() Group by the Region column
 * @method RpProvinceQuery groupByRegionname() Group by the RegionName column
 * @method RpProvinceQuery groupByProvince() Group by the Province column
 * @method RpProvinceQuery groupByTs() Group by the TS column
 *
 * @method RpProvinceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RpProvinceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RpProvinceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method RpProvince findOne(PropelPDO $con = null) Return the first RpProvince matching the query
 * @method RpProvince findOneOrCreate(PropelPDO $con = null) Return the first RpProvince matching the query, or a new RpProvince object populated from the query conditions when no match is found
 *
 * @method RpProvince findOneByRegion(string $Region) Return the first RpProvince filtered by the Region column
 * @method RpProvince findOneByRegionname(string $RegionName) Return the first RpProvince filtered by the RegionName column
 * @method RpProvince findOneByProvince(string $Province) Return the first RpProvince filtered by the Province column
 * @method RpProvince findOneByTs(string $TS) Return the first RpProvince filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return RpProvince objects filtered by the AutoCtr column
 * @method array findByRegion(string $Region) Return RpProvince objects filtered by the Region column
 * @method array findByRegionname(string $RegionName) Return RpProvince objects filtered by the RegionName column
 * @method array findByProvince(string $Province) Return RpProvince objects filtered by the Province column
 * @method array findByTs(string $TS) Return RpProvince objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseRpProvinceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRpProvinceQuery object.
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
            $modelName = 'RpProvince';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RpProvinceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RpProvinceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RpProvinceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RpProvinceQuery) {
            return $criteria;
        }
        $query = new RpProvinceQuery(null, null, $modelAlias);

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
     * @return   RpProvince|RpProvince[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RpProvincePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RpProvincePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 RpProvince A model object, or null if the key is not found
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
     * @return                 RpProvince A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `Region`, `RegionName`, `Province`, `TS` FROM `rp_province` WHERE `AutoCtr` = :p0';
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
            $obj = new RpProvince();
            $obj->hydrate($row);
            RpProvincePeer::addInstanceToPool($obj, (string) $key);
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
     * @return RpProvince|RpProvince[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|RpProvince[]|mixed the list of results, formatted by the current formatter
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
     * @return RpProvinceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RpProvincePeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RpProvinceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RpProvincePeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return RpProvinceQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(RpProvincePeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(RpProvincePeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RpProvincePeer::AUTOCTR, $autoctr, $comparison);
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
     * @return RpProvinceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RpProvincePeer::REGION, $region, $comparison);
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
     * @return RpProvinceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RpProvincePeer::REGIONNAME, $regionname, $comparison);
    }

    /**
     * Filter the query on the Province column
     *
     * Example usage:
     * <code>
     * $query->filterByProvince('fooValue');   // WHERE Province = 'fooValue'
     * $query->filterByProvince('%fooValue%'); // WHERE Province LIKE '%fooValue%'
     * </code>
     *
     * @param     string $province The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RpProvinceQuery The current query, for fluid interface
     */
    public function filterByProvince($province = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($province)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $province)) {
                $province = str_replace('*', '%', $province);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RpProvincePeer::PROVINCE, $province, $comparison);
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
     * @return RpProvinceQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(RpProvincePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(RpProvincePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RpProvincePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   RpProvince $rpProvince Object to remove from the list of results
     *
     * @return RpProvinceQuery The current query, for fluid interface
     */
    public function prune($rpProvince = null)
    {
        if ($rpProvince) {
            $this->addUsingAlias(RpProvincePeer::AUTOCTR, $rpProvince->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
