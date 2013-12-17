<?php


/**
 * Base class that represents a query for the 'faoarfam' table.
 *
 *
 *
 * @method FaoarfamQuery orderByFamcode($order = Criteria::ASC) Order by the FamCode column
 * @method FaoarfamQuery orderByAreacode($order = Criteria::ASC) Order by the AreaCode column
 * @method FaoarfamQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FaoarfamQuery groupByFamcode() Group by the FamCode column
 * @method FaoarfamQuery groupByAreacode() Group by the AreaCode column
 * @method FaoarfamQuery groupByTs() Group by the TS column
 *
 * @method FaoarfamQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FaoarfamQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FaoarfamQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Faoarfam findOne(PropelPDO $con = null) Return the first Faoarfam matching the query
 * @method Faoarfam findOneOrCreate(PropelPDO $con = null) Return the first Faoarfam matching the query, or a new Faoarfam object populated from the query conditions when no match is found
 *
 * @method Faoarfam findOneByFamcode(int $FamCode) Return the first Faoarfam filtered by the FamCode column
 * @method Faoarfam findOneByAreacode(int $AreaCode) Return the first Faoarfam filtered by the AreaCode column
 * @method Faoarfam findOneByTs(string $TS) Return the first Faoarfam filtered by the TS column
 *
 * @method array findByFamcode(int $FamCode) Return Faoarfam objects filtered by the FamCode column
 * @method array findByAreacode(int $AreaCode) Return Faoarfam objects filtered by the AreaCode column
 * @method array findByTs(string $TS) Return Faoarfam objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFaoarfamQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFaoarfamQuery object.
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
            $modelName = 'Faoarfam';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FaoarfamQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FaoarfamQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FaoarfamQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FaoarfamQuery) {
            return $criteria;
        }
        $query = new FaoarfamQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$FamCode, $AreaCode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Faoarfam|Faoarfam[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FaoarfamPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FaoarfamPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Faoarfam A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `FamCode`, `AreaCode`, `TS` FROM `faoarfam` WHERE `FamCode` = :p0 AND `AreaCode` = :p1';
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
            $obj = new Faoarfam();
            $obj->hydrate($row);
            FaoarfamPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Faoarfam|Faoarfam[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Faoarfam[]|mixed the list of results, formatted by the current formatter
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
     * @return FaoarfamQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(FaoarfamPeer::FAMCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(FaoarfamPeer::AREACODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FaoarfamQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(FaoarfamPeer::FAMCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(FaoarfamPeer::AREACODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the FamCode column
     *
     * Example usage:
     * <code>
     * $query->filterByFamcode(1234); // WHERE FamCode = 1234
     * $query->filterByFamcode(array(12, 34)); // WHERE FamCode IN (12, 34)
     * $query->filterByFamcode(array('min' => 12)); // WHERE FamCode >= 12
     * $query->filterByFamcode(array('max' => 12)); // WHERE FamCode <= 12
     * </code>
     *
     * @param     mixed $famcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarfamQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(FaoarfamPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(FaoarfamPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarfamPeer::FAMCODE, $famcode, $comparison);
    }

    /**
     * Filter the query on the AreaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAreacode(1234); // WHERE AreaCode = 1234
     * $query->filterByAreacode(array(12, 34)); // WHERE AreaCode IN (12, 34)
     * $query->filterByAreacode(array('min' => 12)); // WHERE AreaCode >= 12
     * $query->filterByAreacode(array('max' => 12)); // WHERE AreaCode <= 12
     * </code>
     *
     * @param     mixed $areacode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FaoarfamQuery The current query, for fluid interface
     */
    public function filterByAreacode($areacode = null, $comparison = null)
    {
        if (is_array($areacode)) {
            $useMinMax = false;
            if (isset($areacode['min'])) {
                $this->addUsingAlias(FaoarfamPeer::AREACODE, $areacode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areacode['max'])) {
                $this->addUsingAlias(FaoarfamPeer::AREACODE, $areacode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarfamPeer::AREACODE, $areacode, $comparison);
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
     * @return FaoarfamQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FaoarfamPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FaoarfamPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FaoarfamPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Faoarfam $faoarfam Object to remove from the list of results
     *
     * @return FaoarfamQuery The current query, for fluid interface
     */
    public function prune($faoarfam = null)
    {
        if ($faoarfam) {
            $this->addCond('pruneCond0', $this->getAliasedColName(FaoarfamPeer::FAMCODE), $faoarfam->getFamcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(FaoarfamPeer::AREACODE), $faoarfam->getAreacode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
