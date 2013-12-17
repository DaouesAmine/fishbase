<?php


/**
 * Base class that represents a query for the 'estimatedepth' table.
 *
 *
 *
 * @method EstimatedepthQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method EstimatedepthQuery orderByHabitatzone($order = Criteria::ASC) Order by the HabitatZone column
 * @method EstimatedepthQuery orderByDepthmin($order = Criteria::ASC) Order by the DepthMin column
 * @method EstimatedepthQuery orderByDepthmax($order = Criteria::ASC) Order by the DepthMax column
 * @method EstimatedepthQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method EstimatedepthQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method EstimatedepthQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method EstimatedepthQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method EstimatedepthQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method EstimatedepthQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 *
 * @method EstimatedepthQuery groupBySpeccode() Group by the Speccode column
 * @method EstimatedepthQuery groupByHabitatzone() Group by the HabitatZone column
 * @method EstimatedepthQuery groupByDepthmin() Group by the DepthMin column
 * @method EstimatedepthQuery groupByDepthmax() Group by the DepthMax column
 * @method EstimatedepthQuery groupByEntered() Group by the Entered column
 * @method EstimatedepthQuery groupByDateentered() Group by the DateEntered column
 * @method EstimatedepthQuery groupByModified() Group by the Modified column
 * @method EstimatedepthQuery groupByDatemodified() Group by the DateModified column
 * @method EstimatedepthQuery groupByExpert() Group by the Expert column
 * @method EstimatedepthQuery groupByDatechecked() Group by the DateChecked column
 *
 * @method EstimatedepthQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EstimatedepthQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EstimatedepthQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Estimatedepth findOne(PropelPDO $con = null) Return the first Estimatedepth matching the query
 * @method Estimatedepth findOneOrCreate(PropelPDO $con = null) Return the first Estimatedepth matching the query, or a new Estimatedepth object populated from the query conditions when no match is found
 *
 * @method Estimatedepth findOneByHabitatzone(string $HabitatZone) Return the first Estimatedepth filtered by the HabitatZone column
 * @method Estimatedepth findOneByDepthmin(int $DepthMin) Return the first Estimatedepth filtered by the DepthMin column
 * @method Estimatedepth findOneByDepthmax(int $DepthMax) Return the first Estimatedepth filtered by the DepthMax column
 * @method Estimatedepth findOneByEntered(int $Entered) Return the first Estimatedepth filtered by the Entered column
 * @method Estimatedepth findOneByDateentered(string $DateEntered) Return the first Estimatedepth filtered by the DateEntered column
 * @method Estimatedepth findOneByModified(int $Modified) Return the first Estimatedepth filtered by the Modified column
 * @method Estimatedepth findOneByDatemodified(string $DateModified) Return the first Estimatedepth filtered by the DateModified column
 * @method Estimatedepth findOneByExpert(int $Expert) Return the first Estimatedepth filtered by the Expert column
 * @method Estimatedepth findOneByDatechecked(string $DateChecked) Return the first Estimatedepth filtered by the DateChecked column
 *
 * @method array findBySpeccode(int $Speccode) Return Estimatedepth objects filtered by the Speccode column
 * @method array findByHabitatzone(string $HabitatZone) Return Estimatedepth objects filtered by the HabitatZone column
 * @method array findByDepthmin(int $DepthMin) Return Estimatedepth objects filtered by the DepthMin column
 * @method array findByDepthmax(int $DepthMax) Return Estimatedepth objects filtered by the DepthMax column
 * @method array findByEntered(int $Entered) Return Estimatedepth objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Estimatedepth objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Estimatedepth objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Estimatedepth objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Estimatedepth objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Estimatedepth objects filtered by the DateChecked column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEstimatedepthQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEstimatedepthQuery object.
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
            $modelName = 'Estimatedepth';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EstimatedepthQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EstimatedepthQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EstimatedepthQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EstimatedepthQuery) {
            return $criteria;
        }
        $query = new EstimatedepthQuery(null, null, $modelAlias);

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
     * @return   Estimatedepth|Estimatedepth[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EstimatedepthPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EstimatedepthPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Estimatedepth A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneBySpeccode($key, $con = null)
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
     * @return                 Estimatedepth A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Speccode`, `HabitatZone`, `DepthMin`, `DepthMax`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked` FROM `estimatedepth` WHERE `Speccode` = :p0';
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
            $obj = new Estimatedepth();
            $obj->hydrate($row);
            EstimatedepthPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Estimatedepth|Estimatedepth[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Estimatedepth[]|mixed the list of results, formatted by the current formatter
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
     * @return EstimatedepthQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EstimatedepthPeer::SPECCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EstimatedepthQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EstimatedepthPeer::SPECCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Speccode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE Speccode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE Speccode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE Speccode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE Speccode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimatedepthQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(EstimatedepthPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(EstimatedepthPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatedepthPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the HabitatZone column
     *
     * Example usage:
     * <code>
     * $query->filterByHabitatzone('fooValue');   // WHERE HabitatZone = 'fooValue'
     * $query->filterByHabitatzone('%fooValue%'); // WHERE HabitatZone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $habitatzone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimatedepthQuery The current query, for fluid interface
     */
    public function filterByHabitatzone($habitatzone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($habitatzone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $habitatzone)) {
                $habitatzone = str_replace('*', '%', $habitatzone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstimatedepthPeer::HABITATZONE, $habitatzone, $comparison);
    }

    /**
     * Filter the query on the DepthMin column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthmin(1234); // WHERE DepthMin = 1234
     * $query->filterByDepthmin(array(12, 34)); // WHERE DepthMin IN (12, 34)
     * $query->filterByDepthmin(array('min' => 12)); // WHERE DepthMin >= 12
     * $query->filterByDepthmin(array('max' => 12)); // WHERE DepthMin <= 12
     * </code>
     *
     * @param     mixed $depthmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimatedepthQuery The current query, for fluid interface
     */
    public function filterByDepthmin($depthmin = null, $comparison = null)
    {
        if (is_array($depthmin)) {
            $useMinMax = false;
            if (isset($depthmin['min'])) {
                $this->addUsingAlias(EstimatedepthPeer::DEPTHMIN, $depthmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthmin['max'])) {
                $this->addUsingAlias(EstimatedepthPeer::DEPTHMIN, $depthmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatedepthPeer::DEPTHMIN, $depthmin, $comparison);
    }

    /**
     * Filter the query on the DepthMax column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthmax(1234); // WHERE DepthMax = 1234
     * $query->filterByDepthmax(array(12, 34)); // WHERE DepthMax IN (12, 34)
     * $query->filterByDepthmax(array('min' => 12)); // WHERE DepthMax >= 12
     * $query->filterByDepthmax(array('max' => 12)); // WHERE DepthMax <= 12
     * </code>
     *
     * @param     mixed $depthmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimatedepthQuery The current query, for fluid interface
     */
    public function filterByDepthmax($depthmax = null, $comparison = null)
    {
        if (is_array($depthmax)) {
            $useMinMax = false;
            if (isset($depthmax['min'])) {
                $this->addUsingAlias(EstimatedepthPeer::DEPTHMAX, $depthmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthmax['max'])) {
                $this->addUsingAlias(EstimatedepthPeer::DEPTHMAX, $depthmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatedepthPeer::DEPTHMAX, $depthmax, $comparison);
    }

    /**
     * Filter the query on the Entered column
     *
     * Example usage:
     * <code>
     * $query->filterByEntered(1234); // WHERE Entered = 1234
     * $query->filterByEntered(array(12, 34)); // WHERE Entered IN (12, 34)
     * $query->filterByEntered(array('min' => 12)); // WHERE Entered >= 12
     * $query->filterByEntered(array('max' => 12)); // WHERE Entered <= 12
     * </code>
     *
     * @param     mixed $entered The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimatedepthQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(EstimatedepthPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(EstimatedepthPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatedepthPeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the DateEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('2011-03-14'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered('now'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered(array('max' => 'yesterday')); // WHERE DateEntered < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateentered The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimatedepthQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(EstimatedepthPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(EstimatedepthPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatedepthPeer::DATEENTERED, $dateentered, $comparison);
    }

    /**
     * Filter the query on the Modified column
     *
     * Example usage:
     * <code>
     * $query->filterByModified(1234); // WHERE Modified = 1234
     * $query->filterByModified(array(12, 34)); // WHERE Modified IN (12, 34)
     * $query->filterByModified(array('min' => 12)); // WHERE Modified >= 12
     * $query->filterByModified(array('max' => 12)); // WHERE Modified <= 12
     * </code>
     *
     * @param     mixed $modified The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimatedepthQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(EstimatedepthPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(EstimatedepthPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatedepthPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the DateModified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('2011-03-14'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified('now'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified(array('max' => 'yesterday')); // WHERE DateModified < '2011-03-13'
     * </code>
     *
     * @param     mixed $datemodified The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimatedepthQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(EstimatedepthPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(EstimatedepthPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatedepthPeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the Expert column
     *
     * Example usage:
     * <code>
     * $query->filterByExpert(1234); // WHERE Expert = 1234
     * $query->filterByExpert(array(12, 34)); // WHERE Expert IN (12, 34)
     * $query->filterByExpert(array('min' => 12)); // WHERE Expert >= 12
     * $query->filterByExpert(array('max' => 12)); // WHERE Expert <= 12
     * </code>
     *
     * @param     mixed $expert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimatedepthQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(EstimatedepthPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(EstimatedepthPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatedepthPeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the DateChecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('2011-03-14'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked('now'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked(array('max' => 'yesterday')); // WHERE DateChecked < '2011-03-13'
     * </code>
     *
     * @param     mixed $datechecked The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimatedepthQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(EstimatedepthPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(EstimatedepthPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatedepthPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Estimatedepth $estimatedepth Object to remove from the list of results
     *
     * @return EstimatedepthQuery The current query, for fluid interface
     */
    public function prune($estimatedepth = null)
    {
        if ($estimatedepth) {
            $this->addUsingAlias(EstimatedepthPeer::SPECCODE, $estimatedepth->getSpeccode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
