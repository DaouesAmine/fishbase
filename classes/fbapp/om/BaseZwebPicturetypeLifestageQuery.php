<?php


/**
 * Base class that represents a query for the 'zweb_picturetype_lifestage' table.
 *
 *
 *
 * @method ZwebPicturetypeLifestageQuery orderByLifestage($order = Criteria::ASC) Order by the LifeStage column
 * @method ZwebPicturetypeLifestageQuery orderByRanktype($order = Criteria::ASC) Order by the ranktype column
 * @method ZwebPicturetypeLifestageQuery orderByTs($order = Criteria::ASC) Order by the TS column
 * @method ZwebPicturetypeLifestageQuery orderByPkid($order = Criteria::ASC) Order by the PKID column
 *
 * @method ZwebPicturetypeLifestageQuery groupByLifestage() Group by the LifeStage column
 * @method ZwebPicturetypeLifestageQuery groupByRanktype() Group by the ranktype column
 * @method ZwebPicturetypeLifestageQuery groupByTs() Group by the TS column
 * @method ZwebPicturetypeLifestageQuery groupByPkid() Group by the PKID column
 *
 * @method ZwebPicturetypeLifestageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ZwebPicturetypeLifestageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ZwebPicturetypeLifestageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ZwebPicturetypeLifestage findOne(PropelPDO $con = null) Return the first ZwebPicturetypeLifestage matching the query
 * @method ZwebPicturetypeLifestage findOneOrCreate(PropelPDO $con = null) Return the first ZwebPicturetypeLifestage matching the query, or a new ZwebPicturetypeLifestage object populated from the query conditions when no match is found
 *
 * @method ZwebPicturetypeLifestage findOneByLifestage(string $LifeStage) Return the first ZwebPicturetypeLifestage filtered by the LifeStage column
 * @method ZwebPicturetypeLifestage findOneByRanktype(int $ranktype) Return the first ZwebPicturetypeLifestage filtered by the ranktype column
 * @method ZwebPicturetypeLifestage findOneByTs(string $TS) Return the first ZwebPicturetypeLifestage filtered by the TS column
 *
 * @method array findByLifestage(string $LifeStage) Return ZwebPicturetypeLifestage objects filtered by the LifeStage column
 * @method array findByRanktype(int $ranktype) Return ZwebPicturetypeLifestage objects filtered by the ranktype column
 * @method array findByTs(string $TS) Return ZwebPicturetypeLifestage objects filtered by the TS column
 * @method array findByPkid(string $PKID) Return ZwebPicturetypeLifestage objects filtered by the PKID column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseZwebPicturetypeLifestageQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseZwebPicturetypeLifestageQuery object.
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
            $modelName = 'ZwebPicturetypeLifestage';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ZwebPicturetypeLifestageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ZwebPicturetypeLifestageQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ZwebPicturetypeLifestageQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ZwebPicturetypeLifestageQuery) {
            return $criteria;
        }
        $query = new ZwebPicturetypeLifestageQuery(null, null, $modelAlias);

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
     * @return   ZwebPicturetypeLifestage|ZwebPicturetypeLifestage[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ZwebPicturetypeLifestagePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ZwebPicturetypeLifestagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ZwebPicturetypeLifestage A model object, or null if the key is not found
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
     * @return                 ZwebPicturetypeLifestage A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `LifeStage`, `ranktype`, `TS`, `PKID` FROM `zweb_picturetype_lifestage` WHERE `PKID` = :p0';
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
            $obj = new ZwebPicturetypeLifestage();
            $obj->hydrate($row);
            ZwebPicturetypeLifestagePeer::addInstanceToPool($obj, (string) $key);
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
     * @return ZwebPicturetypeLifestage|ZwebPicturetypeLifestage[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ZwebPicturetypeLifestage[]|mixed the list of results, formatted by the current formatter
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
     * @return ZwebPicturetypeLifestageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ZwebPicturetypeLifestagePeer::PKID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ZwebPicturetypeLifestageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ZwebPicturetypeLifestagePeer::PKID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the LifeStage column
     *
     * Example usage:
     * <code>
     * $query->filterByLifestage('fooValue');   // WHERE LifeStage = 'fooValue'
     * $query->filterByLifestage('%fooValue%'); // WHERE LifeStage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lifestage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebPicturetypeLifestageQuery The current query, for fluid interface
     */
    public function filterByLifestage($lifestage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lifestage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lifestage)) {
                $lifestage = str_replace('*', '%', $lifestage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebPicturetypeLifestagePeer::LIFESTAGE, $lifestage, $comparison);
    }

    /**
     * Filter the query on the ranktype column
     *
     * Example usage:
     * <code>
     * $query->filterByRanktype(1234); // WHERE ranktype = 1234
     * $query->filterByRanktype(array(12, 34)); // WHERE ranktype IN (12, 34)
     * $query->filterByRanktype(array('min' => 12)); // WHERE ranktype >= 12
     * $query->filterByRanktype(array('max' => 12)); // WHERE ranktype <= 12
     * </code>
     *
     * @param     mixed $ranktype The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebPicturetypeLifestageQuery The current query, for fluid interface
     */
    public function filterByRanktype($ranktype = null, $comparison = null)
    {
        if (is_array($ranktype)) {
            $useMinMax = false;
            if (isset($ranktype['min'])) {
                $this->addUsingAlias(ZwebPicturetypeLifestagePeer::RANKTYPE, $ranktype['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ranktype['max'])) {
                $this->addUsingAlias(ZwebPicturetypeLifestagePeer::RANKTYPE, $ranktype['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebPicturetypeLifestagePeer::RANKTYPE, $ranktype, $comparison);
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
     * @return ZwebPicturetypeLifestageQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(ZwebPicturetypeLifestagePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(ZwebPicturetypeLifestagePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebPicturetypeLifestagePeer::TS, $ts, $comparison);
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
     * @return ZwebPicturetypeLifestageQuery The current query, for fluid interface
     */
    public function filterByPkid($pkid = null, $comparison = null)
    {
        if (is_array($pkid)) {
            $useMinMax = false;
            if (isset($pkid['min'])) {
                $this->addUsingAlias(ZwebPicturetypeLifestagePeer::PKID, $pkid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pkid['max'])) {
                $this->addUsingAlias(ZwebPicturetypeLifestagePeer::PKID, $pkid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebPicturetypeLifestagePeer::PKID, $pkid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ZwebPicturetypeLifestage $zwebPicturetypeLifestage Object to remove from the list of results
     *
     * @return ZwebPicturetypeLifestageQuery The current query, for fluid interface
     */
    public function prune($zwebPicturetypeLifestage = null)
    {
        if ($zwebPicturetypeLifestage) {
            $this->addUsingAlias(ZwebPicturetypeLifestagePeer::PKID, $zwebPicturetypeLifestage->getPkid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
