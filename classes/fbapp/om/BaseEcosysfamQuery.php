<?php


/**
 * Base class that represents a query for the 'ecosysfam' table.
 *
 *
 *
 * @method EcosysfamQuery orderByECode($order = Criteria::ASC) Order by the E_CODE column
 * @method EcosysfamQuery orderByFamcode($order = Criteria::ASC) Order by the FamCode column
 * @method EcosysfamQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method EcosysfamQuery orderByDate($order = Criteria::ASC) Order by the Date column
 * @method EcosysfamQuery orderByPersonnel($order = Criteria::ASC) Order by the Personnel column
 * @method EcosysfamQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method EcosysfamQuery groupByECode() Group by the E_CODE column
 * @method EcosysfamQuery groupByFamcode() Group by the FamCode column
 * @method EcosysfamQuery groupByExpert() Group by the Expert column
 * @method EcosysfamQuery groupByDate() Group by the Date column
 * @method EcosysfamQuery groupByPersonnel() Group by the Personnel column
 * @method EcosysfamQuery groupByTs() Group by the TS column
 *
 * @method EcosysfamQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EcosysfamQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EcosysfamQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Ecosysfam findOne(PropelPDO $con = null) Return the first Ecosysfam matching the query
 * @method Ecosysfam findOneOrCreate(PropelPDO $con = null) Return the first Ecosysfam matching the query, or a new Ecosysfam object populated from the query conditions when no match is found
 *
 * @method Ecosysfam findOneByECode(int $E_CODE) Return the first Ecosysfam filtered by the E_CODE column
 * @method Ecosysfam findOneByFamcode(int $FamCode) Return the first Ecosysfam filtered by the FamCode column
 * @method Ecosysfam findOneByExpert(string $Expert) Return the first Ecosysfam filtered by the Expert column
 * @method Ecosysfam findOneByDate(string $Date) Return the first Ecosysfam filtered by the Date column
 * @method Ecosysfam findOneByPersonnel(int $Personnel) Return the first Ecosysfam filtered by the Personnel column
 * @method Ecosysfam findOneByTs(string $TS) Return the first Ecosysfam filtered by the TS column
 *
 * @method array findByECode(int $E_CODE) Return Ecosysfam objects filtered by the E_CODE column
 * @method array findByFamcode(int $FamCode) Return Ecosysfam objects filtered by the FamCode column
 * @method array findByExpert(string $Expert) Return Ecosysfam objects filtered by the Expert column
 * @method array findByDate(string $Date) Return Ecosysfam objects filtered by the Date column
 * @method array findByPersonnel(int $Personnel) Return Ecosysfam objects filtered by the Personnel column
 * @method array findByTs(string $TS) Return Ecosysfam objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEcosysfamQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEcosysfamQuery object.
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
            $modelName = 'Ecosysfam';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EcosysfamQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EcosysfamQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EcosysfamQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EcosysfamQuery) {
            return $criteria;
        }
        $query = new EcosysfamQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$E_CODE, $FamCode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Ecosysfam|Ecosysfam[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EcosysfamPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EcosysfamPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ecosysfam A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `E_CODE`, `FamCode`, `Expert`, `Date`, `Personnel`, `TS` FROM `ecosysfam` WHERE `E_CODE` = :p0 AND `FamCode` = :p1';
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
            $obj = new Ecosysfam();
            $obj->hydrate($row);
            EcosysfamPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Ecosysfam|Ecosysfam[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ecosysfam[]|mixed the list of results, formatted by the current formatter
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
     * @return EcosysfamQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(EcosysfamPeer::E_CODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(EcosysfamPeer::FAMCODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EcosysfamQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(EcosysfamPeer::E_CODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(EcosysfamPeer::FAMCODE, $key[1], Criteria::EQUAL);
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
     * @return EcosysfamQuery The current query, for fluid interface
     */
    public function filterByECode($eCode = null, $comparison = null)
    {
        if (is_array($eCode)) {
            $useMinMax = false;
            if (isset($eCode['min'])) {
                $this->addUsingAlias(EcosysfamPeer::E_CODE, $eCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eCode['max'])) {
                $this->addUsingAlias(EcosysfamPeer::E_CODE, $eCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosysfamPeer::E_CODE, $eCode, $comparison);
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
     * @return EcosysfamQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(EcosysfamPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(EcosysfamPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosysfamPeer::FAMCODE, $famcode, $comparison);
    }

    /**
     * Filter the query on the Expert column
     *
     * Example usage:
     * <code>
     * $query->filterByExpert('fooValue');   // WHERE Expert = 'fooValue'
     * $query->filterByExpert('%fooValue%'); // WHERE Expert LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expert The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosysfamQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expert)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expert)) {
                $expert = str_replace('*', '%', $expert);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EcosysfamPeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the Date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE Date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE Date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE Date < '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosysfamQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(EcosysfamPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(EcosysfamPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosysfamPeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the Personnel column
     *
     * Example usage:
     * <code>
     * $query->filterByPersonnel(1234); // WHERE Personnel = 1234
     * $query->filterByPersonnel(array(12, 34)); // WHERE Personnel IN (12, 34)
     * $query->filterByPersonnel(array('min' => 12)); // WHERE Personnel >= 12
     * $query->filterByPersonnel(array('max' => 12)); // WHERE Personnel <= 12
     * </code>
     *
     * @param     mixed $personnel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EcosysfamQuery The current query, for fluid interface
     */
    public function filterByPersonnel($personnel = null, $comparison = null)
    {
        if (is_array($personnel)) {
            $useMinMax = false;
            if (isset($personnel['min'])) {
                $this->addUsingAlias(EcosysfamPeer::PERSONNEL, $personnel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($personnel['max'])) {
                $this->addUsingAlias(EcosysfamPeer::PERSONNEL, $personnel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosysfamPeer::PERSONNEL, $personnel, $comparison);
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
     * @return EcosysfamQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(EcosysfamPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(EcosysfamPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EcosysfamPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Ecosysfam $ecosysfam Object to remove from the list of results
     *
     * @return EcosysfamQuery The current query, for fluid interface
     */
    public function prune($ecosysfam = null)
    {
        if ($ecosysfam) {
            $this->addCond('pruneCond0', $this->getAliasedColName(EcosysfamPeer::E_CODE), $ecosysfam->getECode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(EcosysfamPeer::FAMCODE), $ecosysfam->getFamcode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
