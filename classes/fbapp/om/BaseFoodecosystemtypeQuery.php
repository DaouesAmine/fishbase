<?php


/**
 * Base class that represents a query for the 'foodecosystemtype' table.
 *
 *
 *
 * @method FoodecosystemtypeQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method FoodecosystemtypeQuery orderByFoodlevel($order = Criteria::ASC) Order by the FoodLevel column
 * @method FoodecosystemtypeQuery orderByFood($order = Criteria::ASC) Order by the Food column
 * @method FoodecosystemtypeQuery orderByEcosystemtype($order = Criteria::ASC) Order by the EcosystemType column
 * @method FoodecosystemtypeQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FoodecosystemtypeQuery groupByAutoctr() Group by the AutoCtr column
 * @method FoodecosystemtypeQuery groupByFoodlevel() Group by the FoodLevel column
 * @method FoodecosystemtypeQuery groupByFood() Group by the Food column
 * @method FoodecosystemtypeQuery groupByEcosystemtype() Group by the EcosystemType column
 * @method FoodecosystemtypeQuery groupByTs() Group by the TS column
 *
 * @method FoodecosystemtypeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FoodecosystemtypeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FoodecosystemtypeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Foodecosystemtype findOne(PropelPDO $con = null) Return the first Foodecosystemtype matching the query
 * @method Foodecosystemtype findOneOrCreate(PropelPDO $con = null) Return the first Foodecosystemtype matching the query, or a new Foodecosystemtype object populated from the query conditions when no match is found
 *
 * @method Foodecosystemtype findOneByFoodlevel(int $FoodLevel) Return the first Foodecosystemtype filtered by the FoodLevel column
 * @method Foodecosystemtype findOneByFood(string $Food) Return the first Foodecosystemtype filtered by the Food column
 * @method Foodecosystemtype findOneByEcosystemtype(string $EcosystemType) Return the first Foodecosystemtype filtered by the EcosystemType column
 * @method Foodecosystemtype findOneByTs(string $TS) Return the first Foodecosystemtype filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Foodecosystemtype objects filtered by the AutoCtr column
 * @method array findByFoodlevel(int $FoodLevel) Return Foodecosystemtype objects filtered by the FoodLevel column
 * @method array findByFood(string $Food) Return Foodecosystemtype objects filtered by the Food column
 * @method array findByEcosystemtype(string $EcosystemType) Return Foodecosystemtype objects filtered by the EcosystemType column
 * @method array findByTs(string $TS) Return Foodecosystemtype objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFoodecosystemtypeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFoodecosystemtypeQuery object.
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
            $modelName = 'Foodecosystemtype';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FoodecosystemtypeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FoodecosystemtypeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FoodecosystemtypeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FoodecosystemtypeQuery) {
            return $criteria;
        }
        $query = new FoodecosystemtypeQuery(null, null, $modelAlias);

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
     * @return   Foodecosystemtype|Foodecosystemtype[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FoodecosystemtypePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FoodecosystemtypePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Foodecosystemtype A model object, or null if the key is not found
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
     * @return                 Foodecosystemtype A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `FoodLevel`, `Food`, `EcosystemType`, `TS` FROM `foodecosystemtype` WHERE `AutoCtr` = :p0';
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
            $obj = new Foodecosystemtype();
            $obj->hydrate($row);
            FoodecosystemtypePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Foodecosystemtype|Foodecosystemtype[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Foodecosystemtype[]|mixed the list of results, formatted by the current formatter
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
     * @return FoodecosystemtypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FoodecosystemtypePeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FoodecosystemtypeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FoodecosystemtypePeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return FoodecosystemtypeQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(FoodecosystemtypePeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(FoodecosystemtypePeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodecosystemtypePeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the FoodLevel column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodlevel(1234); // WHERE FoodLevel = 1234
     * $query->filterByFoodlevel(array(12, 34)); // WHERE FoodLevel IN (12, 34)
     * $query->filterByFoodlevel(array('min' => 12)); // WHERE FoodLevel >= 12
     * $query->filterByFoodlevel(array('max' => 12)); // WHERE FoodLevel <= 12
     * </code>
     *
     * @param     mixed $foodlevel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodecosystemtypeQuery The current query, for fluid interface
     */
    public function filterByFoodlevel($foodlevel = null, $comparison = null)
    {
        if (is_array($foodlevel)) {
            $useMinMax = false;
            if (isset($foodlevel['min'])) {
                $this->addUsingAlias(FoodecosystemtypePeer::FOODLEVEL, $foodlevel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foodlevel['max'])) {
                $this->addUsingAlias(FoodecosystemtypePeer::FOODLEVEL, $foodlevel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodecosystemtypePeer::FOODLEVEL, $foodlevel, $comparison);
    }

    /**
     * Filter the query on the Food column
     *
     * Example usage:
     * <code>
     * $query->filterByFood('fooValue');   // WHERE Food = 'fooValue'
     * $query->filterByFood('%fooValue%'); // WHERE Food LIKE '%fooValue%'
     * </code>
     *
     * @param     string $food The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodecosystemtypeQuery The current query, for fluid interface
     */
    public function filterByFood($food = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($food)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $food)) {
                $food = str_replace('*', '%', $food);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FoodecosystemtypePeer::FOOD, $food, $comparison);
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
     * @return FoodecosystemtypeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FoodecosystemtypePeer::ECOSYSTEMTYPE, $ecosystemtype, $comparison);
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
     * @return FoodecosystemtypeQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FoodecosystemtypePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FoodecosystemtypePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodecosystemtypePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Foodecosystemtype $foodecosystemtype Object to remove from the list of results
     *
     * @return FoodecosystemtypeQuery The current query, for fluid interface
     */
    public function prune($foodecosystemtype = null)
    {
        if ($foodecosystemtype) {
            $this->addUsingAlias(FoodecosystemtypePeer::AUTOCTR, $foodecosystemtype->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
