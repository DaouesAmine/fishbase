<?php


/**
 * Base class that represents a query for the 'zweb_tour' table.
 *
 *
 *
 * @method ZwebTourQuery orderByTourno($order = Criteria::ASC) Order by the tourno column
 * @method ZwebTourQuery orderBySentence($order = Criteria::ASC) Order by the sentence column
 * @method ZwebTourQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method ZwebTourQuery orderByUrl($order = Criteria::ASC) Order by the Url column
 * @method ZwebTourQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method ZwebTourQuery groupByTourno() Group by the tourno column
 * @method ZwebTourQuery groupBySentence() Group by the sentence column
 * @method ZwebTourQuery groupByRemark() Group by the Remark column
 * @method ZwebTourQuery groupByUrl() Group by the Url column
 * @method ZwebTourQuery groupByTs() Group by the TS column
 *
 * @method ZwebTourQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ZwebTourQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ZwebTourQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ZwebTour findOne(PropelPDO $con = null) Return the first ZwebTour matching the query
 * @method ZwebTour findOneOrCreate(PropelPDO $con = null) Return the first ZwebTour matching the query, or a new ZwebTour object populated from the query conditions when no match is found
 *
 * @method ZwebTour findOneBySentence(string $sentence) Return the first ZwebTour filtered by the sentence column
 * @method ZwebTour findOneByRemark(string $Remark) Return the first ZwebTour filtered by the Remark column
 * @method ZwebTour findOneByUrl(string $Url) Return the first ZwebTour filtered by the Url column
 * @method ZwebTour findOneByTs(string $TS) Return the first ZwebTour filtered by the TS column
 *
 * @method array findByTourno(int $tourno) Return ZwebTour objects filtered by the tourno column
 * @method array findBySentence(string $sentence) Return ZwebTour objects filtered by the sentence column
 * @method array findByRemark(string $Remark) Return ZwebTour objects filtered by the Remark column
 * @method array findByUrl(string $Url) Return ZwebTour objects filtered by the Url column
 * @method array findByTs(string $TS) Return ZwebTour objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseZwebTourQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseZwebTourQuery object.
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
            $modelName = 'ZwebTour';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ZwebTourQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ZwebTourQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ZwebTourQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ZwebTourQuery) {
            return $criteria;
        }
        $query = new ZwebTourQuery(null, null, $modelAlias);

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
     * @return   ZwebTour|ZwebTour[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ZwebTourPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ZwebTourPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ZwebTour A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByTourno($key, $con = null)
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
     * @return                 ZwebTour A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `tourno`, `sentence`, `Remark`, `Url`, `TS` FROM `zweb_tour` WHERE `tourno` = :p0';
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
            $obj = new ZwebTour();
            $obj->hydrate($row);
            ZwebTourPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ZwebTour|ZwebTour[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ZwebTour[]|mixed the list of results, formatted by the current formatter
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
     * @return ZwebTourQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ZwebTourPeer::TOURNO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ZwebTourQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ZwebTourPeer::TOURNO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the tourno column
     *
     * Example usage:
     * <code>
     * $query->filterByTourno(1234); // WHERE tourno = 1234
     * $query->filterByTourno(array(12, 34)); // WHERE tourno IN (12, 34)
     * $query->filterByTourno(array('min' => 12)); // WHERE tourno >= 12
     * $query->filterByTourno(array('max' => 12)); // WHERE tourno <= 12
     * </code>
     *
     * @param     mixed $tourno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebTourQuery The current query, for fluid interface
     */
    public function filterByTourno($tourno = null, $comparison = null)
    {
        if (is_array($tourno)) {
            $useMinMax = false;
            if (isset($tourno['min'])) {
                $this->addUsingAlias(ZwebTourPeer::TOURNO, $tourno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tourno['max'])) {
                $this->addUsingAlias(ZwebTourPeer::TOURNO, $tourno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebTourPeer::TOURNO, $tourno, $comparison);
    }

    /**
     * Filter the query on the sentence column
     *
     * Example usage:
     * <code>
     * $query->filterBySentence('fooValue');   // WHERE sentence = 'fooValue'
     * $query->filterBySentence('%fooValue%'); // WHERE sentence LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sentence The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebTourQuery The current query, for fluid interface
     */
    public function filterBySentence($sentence = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sentence)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sentence)) {
                $sentence = str_replace('*', '%', $sentence);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebTourPeer::SENTENCE, $sentence, $comparison);
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
     * @return ZwebTourQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ZwebTourPeer::REMARK, $remark, $comparison);
    }

    /**
     * Filter the query on the Url column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE Url = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE Url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebTourQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebTourPeer::URL, $url, $comparison);
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
     * @return ZwebTourQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(ZwebTourPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(ZwebTourPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebTourPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ZwebTour $zwebTour Object to remove from the list of results
     *
     * @return ZwebTourQuery The current query, for fluid interface
     */
    public function prune($zwebTour = null)
    {
        if ($zwebTour) {
            $this->addUsingAlias(ZwebTourPeer::TOURNO, $zwebTour->getTourno(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
