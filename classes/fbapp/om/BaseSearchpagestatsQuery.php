<?php


/**
 * Base class that represents a query for the 'searchpagestats' table.
 *
 *
 *
 * @method SearchpagestatsQuery orderByTablename($order = Criteria::ASC) Order by the TableName column
 * @method SearchpagestatsQuery orderByActualcount($order = Criteria::ASC) Order by the ActualCount column
 * @method SearchpagestatsQuery orderByDisplaycount($order = Criteria::ASC) Order by the DisplayCount column
 * @method SearchpagestatsQuery orderByDatecovered($order = Criteria::ASC) Order by the DateCovered column
 * @method SearchpagestatsQuery orderByHitsmonthinmillions($order = Criteria::ASC) Order by the HitsMonthInMillions column
 * @method SearchpagestatsQuery orderBySessions($order = Criteria::ASC) Order by the Sessions column
 * @method SearchpagestatsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method SearchpagestatsQuery groupByTablename() Group by the TableName column
 * @method SearchpagestatsQuery groupByActualcount() Group by the ActualCount column
 * @method SearchpagestatsQuery groupByDisplaycount() Group by the DisplayCount column
 * @method SearchpagestatsQuery groupByDatecovered() Group by the DateCovered column
 * @method SearchpagestatsQuery groupByHitsmonthinmillions() Group by the HitsMonthInMillions column
 * @method SearchpagestatsQuery groupBySessions() Group by the Sessions column
 * @method SearchpagestatsQuery groupByTs() Group by the TS column
 *
 * @method SearchpagestatsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SearchpagestatsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SearchpagestatsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Searchpagestats findOne(PropelPDO $con = null) Return the first Searchpagestats matching the query
 * @method Searchpagestats findOneOrCreate(PropelPDO $con = null) Return the first Searchpagestats matching the query, or a new Searchpagestats object populated from the query conditions when no match is found
 *
 * @method Searchpagestats findOneByActualcount(int $ActualCount) Return the first Searchpagestats filtered by the ActualCount column
 * @method Searchpagestats findOneByDisplaycount(int $DisplayCount) Return the first Searchpagestats filtered by the DisplayCount column
 * @method Searchpagestats findOneByDatecovered(string $DateCovered) Return the first Searchpagestats filtered by the DateCovered column
 * @method Searchpagestats findOneByHitsmonthinmillions(int $HitsMonthInMillions) Return the first Searchpagestats filtered by the HitsMonthInMillions column
 * @method Searchpagestats findOneBySessions(int $Sessions) Return the first Searchpagestats filtered by the Sessions column
 * @method Searchpagestats findOneByTs(string $TS) Return the first Searchpagestats filtered by the TS column
 *
 * @method array findByTablename(string $TableName) Return Searchpagestats objects filtered by the TableName column
 * @method array findByActualcount(int $ActualCount) Return Searchpagestats objects filtered by the ActualCount column
 * @method array findByDisplaycount(int $DisplayCount) Return Searchpagestats objects filtered by the DisplayCount column
 * @method array findByDatecovered(string $DateCovered) Return Searchpagestats objects filtered by the DateCovered column
 * @method array findByHitsmonthinmillions(int $HitsMonthInMillions) Return Searchpagestats objects filtered by the HitsMonthInMillions column
 * @method array findBySessions(int $Sessions) Return Searchpagestats objects filtered by the Sessions column
 * @method array findByTs(string $TS) Return Searchpagestats objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSearchpagestatsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSearchpagestatsQuery object.
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
            $modelName = 'Searchpagestats';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SearchpagestatsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SearchpagestatsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SearchpagestatsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SearchpagestatsQuery) {
            return $criteria;
        }
        $query = new SearchpagestatsQuery(null, null, $modelAlias);

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
     * @return   Searchpagestats|Searchpagestats[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SearchpagestatsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SearchpagestatsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Searchpagestats A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByTablename($key, $con = null)
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
     * @return                 Searchpagestats A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `TableName`, `ActualCount`, `DisplayCount`, `DateCovered`, `HitsMonthInMillions`, `Sessions`, `TS` FROM `searchpagestats` WHERE `TableName` = :p0';
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
            $obj = new Searchpagestats();
            $obj->hydrate($row);
            SearchpagestatsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Searchpagestats|Searchpagestats[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Searchpagestats[]|mixed the list of results, formatted by the current formatter
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
     * @return SearchpagestatsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SearchpagestatsPeer::TABLENAME, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SearchpagestatsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SearchpagestatsPeer::TABLENAME, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the TableName column
     *
     * Example usage:
     * <code>
     * $query->filterByTablename('fooValue');   // WHERE TableName = 'fooValue'
     * $query->filterByTablename('%fooValue%'); // WHERE TableName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tablename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SearchpagestatsQuery The current query, for fluid interface
     */
    public function filterByTablename($tablename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tablename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tablename)) {
                $tablename = str_replace('*', '%', $tablename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SearchpagestatsPeer::TABLENAME, $tablename, $comparison);
    }

    /**
     * Filter the query on the ActualCount column
     *
     * Example usage:
     * <code>
     * $query->filterByActualcount(1234); // WHERE ActualCount = 1234
     * $query->filterByActualcount(array(12, 34)); // WHERE ActualCount IN (12, 34)
     * $query->filterByActualcount(array('min' => 12)); // WHERE ActualCount >= 12
     * $query->filterByActualcount(array('max' => 12)); // WHERE ActualCount <= 12
     * </code>
     *
     * @param     mixed $actualcount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SearchpagestatsQuery The current query, for fluid interface
     */
    public function filterByActualcount($actualcount = null, $comparison = null)
    {
        if (is_array($actualcount)) {
            $useMinMax = false;
            if (isset($actualcount['min'])) {
                $this->addUsingAlias(SearchpagestatsPeer::ACTUALCOUNT, $actualcount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actualcount['max'])) {
                $this->addUsingAlias(SearchpagestatsPeer::ACTUALCOUNT, $actualcount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SearchpagestatsPeer::ACTUALCOUNT, $actualcount, $comparison);
    }

    /**
     * Filter the query on the DisplayCount column
     *
     * Example usage:
     * <code>
     * $query->filterByDisplaycount(1234); // WHERE DisplayCount = 1234
     * $query->filterByDisplaycount(array(12, 34)); // WHERE DisplayCount IN (12, 34)
     * $query->filterByDisplaycount(array('min' => 12)); // WHERE DisplayCount >= 12
     * $query->filterByDisplaycount(array('max' => 12)); // WHERE DisplayCount <= 12
     * </code>
     *
     * @param     mixed $displaycount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SearchpagestatsQuery The current query, for fluid interface
     */
    public function filterByDisplaycount($displaycount = null, $comparison = null)
    {
        if (is_array($displaycount)) {
            $useMinMax = false;
            if (isset($displaycount['min'])) {
                $this->addUsingAlias(SearchpagestatsPeer::DISPLAYCOUNT, $displaycount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($displaycount['max'])) {
                $this->addUsingAlias(SearchpagestatsPeer::DISPLAYCOUNT, $displaycount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SearchpagestatsPeer::DISPLAYCOUNT, $displaycount, $comparison);
    }

    /**
     * Filter the query on the DateCovered column
     *
     * Example usage:
     * <code>
     * $query->filterByDatecovered('2011-03-14'); // WHERE DateCovered = '2011-03-14'
     * $query->filterByDatecovered('now'); // WHERE DateCovered = '2011-03-14'
     * $query->filterByDatecovered(array('max' => 'yesterday')); // WHERE DateCovered < '2011-03-13'
     * </code>
     *
     * @param     mixed $datecovered The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SearchpagestatsQuery The current query, for fluid interface
     */
    public function filterByDatecovered($datecovered = null, $comparison = null)
    {
        if (is_array($datecovered)) {
            $useMinMax = false;
            if (isset($datecovered['min'])) {
                $this->addUsingAlias(SearchpagestatsPeer::DATECOVERED, $datecovered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datecovered['max'])) {
                $this->addUsingAlias(SearchpagestatsPeer::DATECOVERED, $datecovered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SearchpagestatsPeer::DATECOVERED, $datecovered, $comparison);
    }

    /**
     * Filter the query on the HitsMonthInMillions column
     *
     * Example usage:
     * <code>
     * $query->filterByHitsmonthinmillions(1234); // WHERE HitsMonthInMillions = 1234
     * $query->filterByHitsmonthinmillions(array(12, 34)); // WHERE HitsMonthInMillions IN (12, 34)
     * $query->filterByHitsmonthinmillions(array('min' => 12)); // WHERE HitsMonthInMillions >= 12
     * $query->filterByHitsmonthinmillions(array('max' => 12)); // WHERE HitsMonthInMillions <= 12
     * </code>
     *
     * @param     mixed $hitsmonthinmillions The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SearchpagestatsQuery The current query, for fluid interface
     */
    public function filterByHitsmonthinmillions($hitsmonthinmillions = null, $comparison = null)
    {
        if (is_array($hitsmonthinmillions)) {
            $useMinMax = false;
            if (isset($hitsmonthinmillions['min'])) {
                $this->addUsingAlias(SearchpagestatsPeer::HITSMONTHINMILLIONS, $hitsmonthinmillions['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hitsmonthinmillions['max'])) {
                $this->addUsingAlias(SearchpagestatsPeer::HITSMONTHINMILLIONS, $hitsmonthinmillions['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SearchpagestatsPeer::HITSMONTHINMILLIONS, $hitsmonthinmillions, $comparison);
    }

    /**
     * Filter the query on the Sessions column
     *
     * Example usage:
     * <code>
     * $query->filterBySessions(1234); // WHERE Sessions = 1234
     * $query->filterBySessions(array(12, 34)); // WHERE Sessions IN (12, 34)
     * $query->filterBySessions(array('min' => 12)); // WHERE Sessions >= 12
     * $query->filterBySessions(array('max' => 12)); // WHERE Sessions <= 12
     * </code>
     *
     * @param     mixed $sessions The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SearchpagestatsQuery The current query, for fluid interface
     */
    public function filterBySessions($sessions = null, $comparison = null)
    {
        if (is_array($sessions)) {
            $useMinMax = false;
            if (isset($sessions['min'])) {
                $this->addUsingAlias(SearchpagestatsPeer::SESSIONS, $sessions['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sessions['max'])) {
                $this->addUsingAlias(SearchpagestatsPeer::SESSIONS, $sessions['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SearchpagestatsPeer::SESSIONS, $sessions, $comparison);
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
     * @return SearchpagestatsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(SearchpagestatsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(SearchpagestatsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SearchpagestatsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Searchpagestats $searchpagestats Object to remove from the list of results
     *
     * @return SearchpagestatsQuery The current query, for fluid interface
     */
    public function prune($searchpagestats = null)
    {
        if ($searchpagestats) {
            $this->addUsingAlias(SearchpagestatsPeer::TABLENAME, $searchpagestats->getTablename(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
