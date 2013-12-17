<?php


/**
 * Base class that represents a query for the 'predatorecosystemtype' table.
 *
 *
 *
 * @method PredatorecosystemtypeQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method PredatorecosystemtypeQuery orderByPredatorlevel($order = Criteria::ASC) Order by the Predatorlevel column
 * @method PredatorecosystemtypeQuery orderByPredator($order = Criteria::ASC) Order by the Predator column
 * @method PredatorecosystemtypeQuery orderByEcosystemtype($order = Criteria::ASC) Order by the EcosystemType column
 * @method PredatorecosystemtypeQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method PredatorecosystemtypeQuery groupByAutoctr() Group by the AutoCtr column
 * @method PredatorecosystemtypeQuery groupByPredatorlevel() Group by the Predatorlevel column
 * @method PredatorecosystemtypeQuery groupByPredator() Group by the Predator column
 * @method PredatorecosystemtypeQuery groupByEcosystemtype() Group by the EcosystemType column
 * @method PredatorecosystemtypeQuery groupByTs() Group by the TS column
 *
 * @method PredatorecosystemtypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PredatorecosystemtypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PredatorecosystemtypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Predatorecosystemtype findOne(PropelPDO $con = null) Return the first Predatorecosystemtype matching the query
 * @method Predatorecosystemtype findOneOrCreate(PropelPDO $con = null) Return the first Predatorecosystemtype matching the query, or a new Predatorecosystemtype object populated from the query conditions when no match is found
 *
 * @method Predatorecosystemtype findOneByPredatorlevel(int $Predatorlevel) Return the first Predatorecosystemtype filtered by the Predatorlevel column
 * @method Predatorecosystemtype findOneByPredator(string $Predator) Return the first Predatorecosystemtype filtered by the Predator column
 * @method Predatorecosystemtype findOneByEcosystemtype(string $EcosystemType) Return the first Predatorecosystemtype filtered by the EcosystemType column
 * @method Predatorecosystemtype findOneByTs(string $TS) Return the first Predatorecosystemtype filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Predatorecosystemtype objects filtered by the AutoCtr column
 * @method array findByPredatorlevel(int $Predatorlevel) Return Predatorecosystemtype objects filtered by the Predatorlevel column
 * @method array findByPredator(string $Predator) Return Predatorecosystemtype objects filtered by the Predator column
 * @method array findByEcosystemtype(string $EcosystemType) Return Predatorecosystemtype objects filtered by the EcosystemType column
 * @method array findByTs(string $TS) Return Predatorecosystemtype objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePredatorecosystemtypeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePredatorecosystemtypeQuery object.
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
            $modelName = 'Predatorecosystemtype';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PredatorecosystemtypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PredatorecosystemtypeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PredatorecosystemtypeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PredatorecosystemtypeQuery) {
            return $criteria;
        }
        $query = new PredatorecosystemtypeQuery(null, null, $modelAlias);

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
     * @return   Predatorecosystemtype|Predatorecosystemtype[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PredatorecosystemtypePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PredatorecosystemtypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Predatorecosystemtype A model object, or null if the key is not found
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
     * @return                 Predatorecosystemtype A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `Predatorlevel`, `Predator`, `EcosystemType`, `TS` FROM `predatorecosystemtype` WHERE `AutoCtr` = :p0';
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
            $obj = new Predatorecosystemtype();
            $obj->hydrate($row);
            PredatorecosystemtypePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Predatorecosystemtype|Predatorecosystemtype[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Predatorecosystemtype[]|mixed the list of results, formatted by the current formatter
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
     * @return PredatorecosystemtypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PredatorecosystemtypePeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PredatorecosystemtypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PredatorecosystemtypePeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return PredatorecosystemtypeQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(PredatorecosystemtypePeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(PredatorecosystemtypePeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatorecosystemtypePeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the Predatorlevel column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatorlevel(1234); // WHERE Predatorlevel = 1234
     * $query->filterByPredatorlevel(array(12, 34)); // WHERE Predatorlevel IN (12, 34)
     * $query->filterByPredatorlevel(array('min' => 12)); // WHERE Predatorlevel >= 12
     * $query->filterByPredatorlevel(array('max' => 12)); // WHERE Predatorlevel <= 12
     * </code>
     *
     * @param     mixed $predatorlevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatorecosystemtypeQuery The current query, for fluid interface
     */
    public function filterByPredatorlevel($predatorlevel = null, $comparison = null)
    {
        if (is_array($predatorlevel)) {
            $useMinMax = false;
            if (isset($predatorlevel['min'])) {
                $this->addUsingAlias(PredatorecosystemtypePeer::PREDATORLEVEL, $predatorlevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($predatorlevel['max'])) {
                $this->addUsingAlias(PredatorecosystemtypePeer::PREDATORLEVEL, $predatorlevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatorecosystemtypePeer::PREDATORLEVEL, $predatorlevel, $comparison);
    }

    /**
     * Filter the query on the Predator column
     *
     * Example usage:
     * <code>
     * $query->filterByPredator('fooValue');   // WHERE Predator = 'fooValue'
     * $query->filterByPredator('%fooValue%'); // WHERE Predator LIKE '%fooValue%'
     * </code>
     *
     * @param     string $predator The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatorecosystemtypeQuery The current query, for fluid interface
     */
    public function filterByPredator($predator = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($predator)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $predator)) {
                $predator = str_replace('*', '%', $predator);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PredatorecosystemtypePeer::PREDATOR, $predator, $comparison);
    }

    /**
     * Filter the query on the EcosystemType column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystemtype('fooValue');   // WHERE EcosystemType = 'fooValue'
     * $query->filterByEcosystemtype('%fooValue%'); // WHERE EcosystemType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystemtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatorecosystemtypeQuery The current query, for fluid interface
     */
    public function filterByEcosystemtype($ecosystemtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystemtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystemtype)) {
                $ecosystemtype = str_replace('*', '%', $ecosystemtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PredatorecosystemtypePeer::ECOSYSTEMTYPE, $ecosystemtype, $comparison);
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
     * @return PredatorecosystemtypeQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(PredatorecosystemtypePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(PredatorecosystemtypePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatorecosystemtypePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Predatorecosystemtype $predatorecosystemtype Object to remove from the list of results
     *
     * @return PredatorecosystemtypeQuery The current query, for fluid interface
     */
    public function prune($predatorecosystemtype = null)
    {
        if ($predatorecosystemtype) {
            $this->addUsingAlias(PredatorecosystemtypePeer::AUTOCTR, $predatorecosystemtype->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
