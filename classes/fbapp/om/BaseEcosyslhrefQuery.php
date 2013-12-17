<?php


/**
 * Base class that represents a query for the 'ecosyslhref' table.
 *
 *
 *
 * @method EcosyslhrefQuery orderByECode($order = Criteria::ASC) Order by the E_CODE column
 * @method EcosyslhrefQuery orderByRegionno($order = Criteria::ASC) Order by the RegionNo column
 * @method EcosyslhrefQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method EcosyslhrefQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method EcosyslhrefQuery groupByECode() Group by the E_CODE column
 * @method EcosyslhrefQuery groupByRegionno() Group by the RegionNo column
 * @method EcosyslhrefQuery groupByRemark() Group by the Remark column
 * @method EcosyslhrefQuery groupByTs() Group by the TS column
 *
 * @method EcosyslhrefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EcosyslhrefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EcosyslhrefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Ecosyslhref findOne(PropelPDO $con = null) Return the first Ecosyslhref matching the query
 * @method Ecosyslhref findOneOrCreate(PropelPDO $con = null) Return the first Ecosyslhref matching the query, or a new Ecosyslhref object populated from the query conditions when no match is found
 *
 * @method Ecosyslhref findOneByECode(int $E_CODE) Return the first Ecosyslhref filtered by the E_CODE column
 * @method Ecosyslhref findOneByRegionno(int $RegionNo) Return the first Ecosyslhref filtered by the RegionNo column
 * @method Ecosyslhref findOneByRemark(string $Remark) Return the first Ecosyslhref filtered by the Remark column
 * @method Ecosyslhref findOneByTs(string $TS) Return the first Ecosyslhref filtered by the TS column
 *
 * @method array findByECode(int $E_CODE) Return Ecosyslhref objects filtered by the E_CODE column
 * @method array findByRegionno(int $RegionNo) Return Ecosyslhref objects filtered by the RegionNo column
 * @method array findByRemark(string $Remark) Return Ecosyslhref objects filtered by the Remark column
 * @method array findByTs(string $TS) Return Ecosyslhref objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEcosyslhrefQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEcosyslhrefQuery object.
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
            $modelName = 'Ecosyslhref';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EcosyslhrefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EcosyslhrefQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EcosyslhrefQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EcosyslhrefQuery) {
            return $criteria;
        }
        $query = new EcosyslhrefQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$E_CODE, $RegionNo]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Ecosyslhref|Ecosyslhref[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EcosyslhrefPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EcosyslhrefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ecosyslhref A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `E_CODE`, `RegionNo`, `Remark`, `TS` FROM `ecosyslhref` WHERE `E_CODE` = :p0 AND `RegionNo` = :p1';
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
            $obj = new Ecosyslhref();
            $obj->hydrate($row);
            EcosyslhrefPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Ecosyslhref|Ecosyslhref[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ecosyslhref[]|mixed the list of results, formatted by the current formatter
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
     * @return EcosyslhrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(EcosyslhrefPeer::E_CODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(EcosyslhrefPeer::REGIONNO, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EcosyslhrefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(EcosyslhrefPeer::E_CODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(EcosyslhrefPeer::REGIONNO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the E_CODE column
     *
     * Example usage:
     * <code>
     * $query->filterByECode(1234); // WHERE E_CODE = 1234
     * $query->filterByECode(array(12, 34)); // WHERE E_CODE IN (12, 34)
     * $query->filterByECode(array('min' => 12)); // WHERE E_CODE >= 12
     * $query->filterByECode(array('max' => 12)); // WHERE E_CODE <= 12
     * </code>
     *
     * @param     mixed $eCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosyslhrefQuery The current query, for fluid interface
     */
    public function filterByECode($eCode = null, $comparison = null)
    {
        if (is_array($eCode)) {
            $useMinMax = false;
            if (isset($eCode['min'])) {
                $this->addUsingAlias(EcosyslhrefPeer::E_CODE, $eCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eCode['max'])) {
                $this->addUsingAlias(EcosyslhrefPeer::E_CODE, $eCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosyslhrefPeer::E_CODE, $eCode, $comparison);
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
     * @return EcosyslhrefQuery The current query, for fluid interface
     */
    public function filterByRegionno($regionno = null, $comparison = null)
    {
        if (is_array($regionno)) {
            $useMinMax = false;
            if (isset($regionno['min'])) {
                $this->addUsingAlias(EcosyslhrefPeer::REGIONNO, $regionno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($regionno['max'])) {
                $this->addUsingAlias(EcosyslhrefPeer::REGIONNO, $regionno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosyslhrefPeer::REGIONNO, $regionno, $comparison);
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
     * @return EcosyslhrefQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EcosyslhrefPeer::REMARK, $remark, $comparison);
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
     * @return EcosyslhrefQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(EcosyslhrefPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(EcosyslhrefPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosyslhrefPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Ecosyslhref $ecosyslhref Object to remove from the list of results
     *
     * @return EcosyslhrefQuery The current query, for fluid interface
     */
    public function prune($ecosyslhref = null)
    {
        if ($ecosyslhref) {
            $this->addCond('pruneCond0', $this->getAliasedColName(EcosyslhrefPeer::E_CODE), $ecosyslhref->getECode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(EcosyslhrefPeer::REGIONNO), $ecosyslhref->getRegionno(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
