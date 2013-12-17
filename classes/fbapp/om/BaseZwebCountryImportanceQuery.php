<?php


/**
 * Base class that represents a query for the 'zweb_country_importance' table.
 *
 *
 *
 * @method ZwebCountryImportanceQuery orderByImportance($order = Criteria::ASC) Order by the Importance column
 * @method ZwebCountryImportanceQuery orderByRank($order = Criteria::ASC) Order by the rank column
 * @method ZwebCountryImportanceQuery orderByTs($order = Criteria::ASC) Order by the TS column
 * @method ZwebCountryImportanceQuery orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method ZwebCountryImportanceQuery groupByImportance() Group by the Importance column
 * @method ZwebCountryImportanceQuery groupByRank() Group by the rank column
 * @method ZwebCountryImportanceQuery groupByTs() Group by the TS column
 * @method ZwebCountryImportanceQuery groupByPkid() Group by the PKID column
 *
 * @method ZwebCountryImportanceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ZwebCountryImportanceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ZwebCountryImportanceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ZwebCountryImportance findOne(PropelPDO $con = null) Return the first ZwebCountryImportance matching the query
 * @method ZwebCountryImportance findOneOrCreate(PropelPDO $con = null) Return the first ZwebCountryImportance matching the query, or a new ZwebCountryImportance object populated from the query conditions when no match is found
 *
 * @method ZwebCountryImportance findOneByImportance(string $Importance) Return the first ZwebCountryImportance filtered by the Importance column
 * @method ZwebCountryImportance findOneByRank(int $rank) Return the first ZwebCountryImportance filtered by the rank column
 * @method ZwebCountryImportance findOneByTs(string $TS) Return the first ZwebCountryImportance filtered by the TS column
 *
 * @method array findByImportance(string $Importance) Return ZwebCountryImportance objects filtered by the Importance column
 * @method array findByRank(int $rank) Return ZwebCountryImportance objects filtered by the rank column
 * @method array findByTs(string $TS) Return ZwebCountryImportance objects filtered by the TS column
 * @method array findByPkid(string $PKID) Return ZwebCountryImportance objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseZwebCountryImportanceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseZwebCountryImportanceQuery object.
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
            $modelName = 'ZwebCountryImportance';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ZwebCountryImportanceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ZwebCountryImportanceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ZwebCountryImportanceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ZwebCountryImportanceQuery) {
            return $criteria;
        }
        $query = new ZwebCountryImportanceQuery(null, null, $modelAlias);

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
     * @return   ZwebCountryImportance|ZwebCountryImportance[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ZwebCountryImportancePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ZwebCountryImportancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ZwebCountryImportance A model object, or null if the key is not found
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
     * @return                 ZwebCountryImportance A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Importance`, `rank`, `TS`, `PKID` FROM `zweb_country_importance` WHERE `PKID` = :p0';
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
            $obj = new ZwebCountryImportance();
            $obj->hydrate($row);
            ZwebCountryImportancePeer::addInstanceToPool($obj, (string) $key);
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
     * @return ZwebCountryImportance|ZwebCountryImportance[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ZwebCountryImportance[]|mixed the list of results, formatted by the current formatter
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
     * @return ZwebCountryImportanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ZwebCountryImportancePeer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ZwebCountryImportanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ZwebCountryImportancePeer::PKID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Importance column
     *
     * Example usage:
     * <code>
     * $query->filterByImportance('fooValue');   // WHERE Importance = 'fooValue'
     * $query->filterByImportance('%fooValue%'); // WHERE Importance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $importance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebCountryImportanceQuery The current query, for fluid interface
     */
    public function filterByImportance($importance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($importance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $importance)) {
                $importance = str_replace('*', '%', $importance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebCountryImportancePeer::IMPORTANCE, $importance, $comparison);
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
     * @return ZwebCountryImportanceQuery The current query, for fluid interface
     */
    public function filterByRank($rank = null, $comparison = null)
    {
        if (is_array($rank)) {
            $useMinMax = false;
            if (isset($rank['min'])) {
                $this->addUsingAlias(ZwebCountryImportancePeer::RANK, $rank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rank['max'])) {
                $this->addUsingAlias(ZwebCountryImportancePeer::RANK, $rank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebCountryImportancePeer::RANK, $rank, $comparison);
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
     * @return ZwebCountryImportanceQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(ZwebCountryImportancePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(ZwebCountryImportancePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebCountryImportancePeer::TS, $ts, $comparison);
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
     * @return ZwebCountryImportanceQuery The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(ZwebCountryImportancePeer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(ZwebCountryImportancePeer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebCountryImportancePeer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ZwebCountryImportance $zwebCountryImportance Object to remove from the list of results
     *
     * @return ZwebCountryImportanceQuery The current query, for fluid interface
     */
    public function prune($zwebCountryImportance = null)
    {
        if ($zwebCountryImportance) {
            $this->addUsingAlias(ZwebCountryImportancePeer::PKID, $zwebCountryImportance->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
