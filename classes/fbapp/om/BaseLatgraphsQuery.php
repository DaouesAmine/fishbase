<?php


/**
 * Base class that represents a query for the 'latgraphs' table.
 *
 *
 *
 * @method LatgraphsQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method LatgraphsQuery orderByNorthernmost($order = Criteria::ASC) Order by the Northernmost column
 * @method LatgraphsQuery orderByNorthsouths($order = Criteria::ASC) Order by the NorthSouthS column
 * @method LatgraphsQuery orderBySouthermost($order = Criteria::ASC) Order by the Southermost column
 * @method LatgraphsQuery orderByNorthsouthn($order = Criteria::ASC) Order by the NorthSouthN column
 * @method LatgraphsQuery orderByLatbeg($order = Criteria::ASC) Order by the LatBeg column
 * @method LatgraphsQuery orderByLatend($order = Criteria::ASC) Order by the LatEnd column
 * @method LatgraphsQuery orderByLoclass($order = Criteria::ASC) Order by the LoClass column
 * @method LatgraphsQuery orderByHiclass($order = Criteria::ASC) Order by the HiClass column
 * @method LatgraphsQuery orderByTotclass($order = Criteria::ASC) Order by the TotClass column
 * @method LatgraphsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method LatgraphsQuery groupBySpeccode() Group by the SpecCode column
 * @method LatgraphsQuery groupByNorthernmost() Group by the Northernmost column
 * @method LatgraphsQuery groupByNorthsouths() Group by the NorthSouthS column
 * @method LatgraphsQuery groupBySouthermost() Group by the Southermost column
 * @method LatgraphsQuery groupByNorthsouthn() Group by the NorthSouthN column
 * @method LatgraphsQuery groupByLatbeg() Group by the LatBeg column
 * @method LatgraphsQuery groupByLatend() Group by the LatEnd column
 * @method LatgraphsQuery groupByLoclass() Group by the LoClass column
 * @method LatgraphsQuery groupByHiclass() Group by the HiClass column
 * @method LatgraphsQuery groupByTotclass() Group by the TotClass column
 * @method LatgraphsQuery groupByTs() Group by the TS column
 *
 * @method LatgraphsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LatgraphsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LatgraphsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Latgraphs findOne(PropelPDO $con = null) Return the first Latgraphs matching the query
 * @method Latgraphs findOneOrCreate(PropelPDO $con = null) Return the first Latgraphs matching the query, or a new Latgraphs object populated from the query conditions when no match is found
 *
 * @method Latgraphs findOneByNorthernmost(int $Northernmost) Return the first Latgraphs filtered by the Northernmost column
 * @method Latgraphs findOneByNorthsouths(string $NorthSouthS) Return the first Latgraphs filtered by the NorthSouthS column
 * @method Latgraphs findOneBySouthermost(int $Southermost) Return the first Latgraphs filtered by the Southermost column
 * @method Latgraphs findOneByNorthsouthn(string $NorthSouthN) Return the first Latgraphs filtered by the NorthSouthN column
 * @method Latgraphs findOneByLatbeg(int $LatBeg) Return the first Latgraphs filtered by the LatBeg column
 * @method Latgraphs findOneByLatend(int $LatEnd) Return the first Latgraphs filtered by the LatEnd column
 * @method Latgraphs findOneByLoclass(int $LoClass) Return the first Latgraphs filtered by the LoClass column
 * @method Latgraphs findOneByHiclass(int $HiClass) Return the first Latgraphs filtered by the HiClass column
 * @method Latgraphs findOneByTotclass(int $TotClass) Return the first Latgraphs filtered by the TotClass column
 * @method Latgraphs findOneByTs(string $TS) Return the first Latgraphs filtered by the TS column
 *
 * @method array findBySpeccode(int $SpecCode) Return Latgraphs objects filtered by the SpecCode column
 * @method array findByNorthernmost(int $Northernmost) Return Latgraphs objects filtered by the Northernmost column
 * @method array findByNorthsouths(string $NorthSouthS) Return Latgraphs objects filtered by the NorthSouthS column
 * @method array findBySouthermost(int $Southermost) Return Latgraphs objects filtered by the Southermost column
 * @method array findByNorthsouthn(string $NorthSouthN) Return Latgraphs objects filtered by the NorthSouthN column
 * @method array findByLatbeg(int $LatBeg) Return Latgraphs objects filtered by the LatBeg column
 * @method array findByLatend(int $LatEnd) Return Latgraphs objects filtered by the LatEnd column
 * @method array findByLoclass(int $LoClass) Return Latgraphs objects filtered by the LoClass column
 * @method array findByHiclass(int $HiClass) Return Latgraphs objects filtered by the HiClass column
 * @method array findByTotclass(int $TotClass) Return Latgraphs objects filtered by the TotClass column
 * @method array findByTs(string $TS) Return Latgraphs objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLatgraphsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLatgraphsQuery object.
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
            $modelName = 'Latgraphs';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LatgraphsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LatgraphsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LatgraphsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LatgraphsQuery) {
            return $criteria;
        }
        $query = new LatgraphsQuery(null, null, $modelAlias);

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
     * @return   Latgraphs|Latgraphs[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LatgraphsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LatgraphsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Latgraphs A model object, or null if the key is not found
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
     * @return                 Latgraphs A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SpecCode`, `Northernmost`, `NorthSouthS`, `Southermost`, `NorthSouthN`, `LatBeg`, `LatEnd`, `LoClass`, `HiClass`, `TotClass`, `TS` FROM `latgraphs` WHERE `SpecCode` = :p0';
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
            $obj = new Latgraphs();
            $obj->hydrate($row);
            LatgraphsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Latgraphs|Latgraphs[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Latgraphs[]|mixed the list of results, formatted by the current formatter
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
     * @return LatgraphsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LatgraphsPeer::SPECCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LatgraphsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LatgraphsPeer::SPECCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the SpecCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE SpecCode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE SpecCode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE SpecCode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE SpecCode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LatgraphsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(LatgraphsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(LatgraphsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LatgraphsPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the Northernmost column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthernmost(1234); // WHERE Northernmost = 1234
     * $query->filterByNorthernmost(array(12, 34)); // WHERE Northernmost IN (12, 34)
     * $query->filterByNorthernmost(array('min' => 12)); // WHERE Northernmost >= 12
     * $query->filterByNorthernmost(array('max' => 12)); // WHERE Northernmost <= 12
     * </code>
     *
     * @param     mixed $northernmost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LatgraphsQuery The current query, for fluid interface
     */
    public function filterByNorthernmost($northernmost = null, $comparison = null)
    {
        if (is_array($northernmost)) {
            $useMinMax = false;
            if (isset($northernmost['min'])) {
                $this->addUsingAlias(LatgraphsPeer::NORTHERNMOST, $northernmost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($northernmost['max'])) {
                $this->addUsingAlias(LatgraphsPeer::NORTHERNMOST, $northernmost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LatgraphsPeer::NORTHERNMOST, $northernmost, $comparison);
    }

    /**
     * Filter the query on the NorthSouthS column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouths('fooValue');   // WHERE NorthSouthS = 'fooValue'
     * $query->filterByNorthsouths('%fooValue%'); // WHERE NorthSouthS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouths The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LatgraphsQuery The current query, for fluid interface
     */
    public function filterByNorthsouths($northsouths = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouths)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouths)) {
                $northsouths = str_replace('*', '%', $northsouths);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LatgraphsPeer::NORTHSOUTHS, $northsouths, $comparison);
    }

    /**
     * Filter the query on the Southermost column
     *
     * Example usage:
     * <code>
     * $query->filterBySouthermost(1234); // WHERE Southermost = 1234
     * $query->filterBySouthermost(array(12, 34)); // WHERE Southermost IN (12, 34)
     * $query->filterBySouthermost(array('min' => 12)); // WHERE Southermost >= 12
     * $query->filterBySouthermost(array('max' => 12)); // WHERE Southermost <= 12
     * </code>
     *
     * @param     mixed $southermost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LatgraphsQuery The current query, for fluid interface
     */
    public function filterBySouthermost($southermost = null, $comparison = null)
    {
        if (is_array($southermost)) {
            $useMinMax = false;
            if (isset($southermost['min'])) {
                $this->addUsingAlias(LatgraphsPeer::SOUTHERMOST, $southermost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($southermost['max'])) {
                $this->addUsingAlias(LatgraphsPeer::SOUTHERMOST, $southermost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LatgraphsPeer::SOUTHERMOST, $southermost, $comparison);
    }

    /**
     * Filter the query on the NorthSouthN column
     *
     * Example usage:
     * <code>
     * $query->filterByNorthsouthn('fooValue');   // WHERE NorthSouthN = 'fooValue'
     * $query->filterByNorthsouthn('%fooValue%'); // WHERE NorthSouthN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $northsouthn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LatgraphsQuery The current query, for fluid interface
     */
    public function filterByNorthsouthn($northsouthn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($northsouthn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $northsouthn)) {
                $northsouthn = str_replace('*', '%', $northsouthn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LatgraphsPeer::NORTHSOUTHN, $northsouthn, $comparison);
    }

    /**
     * Filter the query on the LatBeg column
     *
     * Example usage:
     * <code>
     * $query->filterByLatbeg(1234); // WHERE LatBeg = 1234
     * $query->filterByLatbeg(array(12, 34)); // WHERE LatBeg IN (12, 34)
     * $query->filterByLatbeg(array('min' => 12)); // WHERE LatBeg >= 12
     * $query->filterByLatbeg(array('max' => 12)); // WHERE LatBeg <= 12
     * </code>
     *
     * @param     mixed $latbeg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LatgraphsQuery The current query, for fluid interface
     */
    public function filterByLatbeg($latbeg = null, $comparison = null)
    {
        if (is_array($latbeg)) {
            $useMinMax = false;
            if (isset($latbeg['min'])) {
                $this->addUsingAlias(LatgraphsPeer::LATBEG, $latbeg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latbeg['max'])) {
                $this->addUsingAlias(LatgraphsPeer::LATBEG, $latbeg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LatgraphsPeer::LATBEG, $latbeg, $comparison);
    }

    /**
     * Filter the query on the LatEnd column
     *
     * Example usage:
     * <code>
     * $query->filterByLatend(1234); // WHERE LatEnd = 1234
     * $query->filterByLatend(array(12, 34)); // WHERE LatEnd IN (12, 34)
     * $query->filterByLatend(array('min' => 12)); // WHERE LatEnd >= 12
     * $query->filterByLatend(array('max' => 12)); // WHERE LatEnd <= 12
     * </code>
     *
     * @param     mixed $latend The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LatgraphsQuery The current query, for fluid interface
     */
    public function filterByLatend($latend = null, $comparison = null)
    {
        if (is_array($latend)) {
            $useMinMax = false;
            if (isset($latend['min'])) {
                $this->addUsingAlias(LatgraphsPeer::LATEND, $latend['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($latend['max'])) {
                $this->addUsingAlias(LatgraphsPeer::LATEND, $latend['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LatgraphsPeer::LATEND, $latend, $comparison);
    }

    /**
     * Filter the query on the LoClass column
     *
     * Example usage:
     * <code>
     * $query->filterByLoclass(1234); // WHERE LoClass = 1234
     * $query->filterByLoclass(array(12, 34)); // WHERE LoClass IN (12, 34)
     * $query->filterByLoclass(array('min' => 12)); // WHERE LoClass >= 12
     * $query->filterByLoclass(array('max' => 12)); // WHERE LoClass <= 12
     * </code>
     *
     * @param     mixed $loclass The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LatgraphsQuery The current query, for fluid interface
     */
    public function filterByLoclass($loclass = null, $comparison = null)
    {
        if (is_array($loclass)) {
            $useMinMax = false;
            if (isset($loclass['min'])) {
                $this->addUsingAlias(LatgraphsPeer::LOCLASS, $loclass['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($loclass['max'])) {
                $this->addUsingAlias(LatgraphsPeer::LOCLASS, $loclass['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LatgraphsPeer::LOCLASS, $loclass, $comparison);
    }

    /**
     * Filter the query on the HiClass column
     *
     * Example usage:
     * <code>
     * $query->filterByHiclass(1234); // WHERE HiClass = 1234
     * $query->filterByHiclass(array(12, 34)); // WHERE HiClass IN (12, 34)
     * $query->filterByHiclass(array('min' => 12)); // WHERE HiClass >= 12
     * $query->filterByHiclass(array('max' => 12)); // WHERE HiClass <= 12
     * </code>
     *
     * @param     mixed $hiclass The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LatgraphsQuery The current query, for fluid interface
     */
    public function filterByHiclass($hiclass = null, $comparison = null)
    {
        if (is_array($hiclass)) {
            $useMinMax = false;
            if (isset($hiclass['min'])) {
                $this->addUsingAlias(LatgraphsPeer::HICLASS, $hiclass['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hiclass['max'])) {
                $this->addUsingAlias(LatgraphsPeer::HICLASS, $hiclass['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LatgraphsPeer::HICLASS, $hiclass, $comparison);
    }

    /**
     * Filter the query on the TotClass column
     *
     * Example usage:
     * <code>
     * $query->filterByTotclass(1234); // WHERE TotClass = 1234
     * $query->filterByTotclass(array(12, 34)); // WHERE TotClass IN (12, 34)
     * $query->filterByTotclass(array('min' => 12)); // WHERE TotClass >= 12
     * $query->filterByTotclass(array('max' => 12)); // WHERE TotClass <= 12
     * </code>
     *
     * @param     mixed $totclass The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LatgraphsQuery The current query, for fluid interface
     */
    public function filterByTotclass($totclass = null, $comparison = null)
    {
        if (is_array($totclass)) {
            $useMinMax = false;
            if (isset($totclass['min'])) {
                $this->addUsingAlias(LatgraphsPeer::TOTCLASS, $totclass['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totclass['max'])) {
                $this->addUsingAlias(LatgraphsPeer::TOTCLASS, $totclass['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LatgraphsPeer::TOTCLASS, $totclass, $comparison);
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
     * @return LatgraphsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(LatgraphsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(LatgraphsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LatgraphsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Latgraphs $latgraphs Object to remove from the list of results
     *
     * @return LatgraphsQuery The current query, for fluid interface
     */
    public function prune($latgraphs = null)
    {
        if ($latgraphs) {
            $this->addUsingAlias(LatgraphsPeer::SPECCODE, $latgraphs->getSpeccode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
