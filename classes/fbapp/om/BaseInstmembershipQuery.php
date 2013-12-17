<?php


/**
 * Base class that represents a query for the 'instmembership' table.
 *
 *
 *
 * @method InstmembershipQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method InstmembershipQuery orderByCountry($order = Criteria::ASC) Order by the Country column
 * @method InstmembershipQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method InstmembershipQuery orderByStatus($order = Criteria::ASC) Order by the Status column
 * @method InstmembershipQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method InstmembershipQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method InstmembershipQuery groupById() Group by the ID column
 * @method InstmembershipQuery groupByCountry() Group by the Country column
 * @method InstmembershipQuery groupByCCode() Group by the C_Code column
 * @method InstmembershipQuery groupByStatus() Group by the Status column
 * @method InstmembershipQuery groupByYear() Group by the Year column
 * @method InstmembershipQuery groupByTs() Group by the TS column
 *
 * @method InstmembershipQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method InstmembershipQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method InstmembershipQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Instmembership findOne(PropelPDO $con = null) Return the first Instmembership matching the query
 * @method Instmembership findOneOrCreate(PropelPDO $con = null) Return the first Instmembership matching the query, or a new Instmembership object populated from the query conditions when no match is found
 *
 * @method Instmembership findOneById(int $ID) Return the first Instmembership filtered by the ID column
 * @method Instmembership findOneByCountry(string $Country) Return the first Instmembership filtered by the Country column
 * @method Instmembership findOneByCCode(string $C_Code) Return the first Instmembership filtered by the C_Code column
 * @method Instmembership findOneByStatus(string $Status) Return the first Instmembership filtered by the Status column
 * @method Instmembership findOneByYear(string $Year) Return the first Instmembership filtered by the Year column
 * @method Instmembership findOneByTs(string $TS) Return the first Instmembership filtered by the TS column
 *
 * @method array findById(int $ID) Return Instmembership objects filtered by the ID column
 * @method array findByCountry(string $Country) Return Instmembership objects filtered by the Country column
 * @method array findByCCode(string $C_Code) Return Instmembership objects filtered by the C_Code column
 * @method array findByStatus(string $Status) Return Instmembership objects filtered by the Status column
 * @method array findByYear(string $Year) Return Instmembership objects filtered by the Year column
 * @method array findByTs(string $TS) Return Instmembership objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseInstmembershipQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseInstmembershipQuery object.
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
            $modelName = 'Instmembership';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new InstmembershipQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   InstmembershipQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return InstmembershipQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof InstmembershipQuery) {
            return $criteria;
        }
        $query = new InstmembershipQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$ID, $Country]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Instmembership|Instmembership[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = InstmembershipPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(InstmembershipPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Instmembership A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `Country`, `C_Code`, `Status`, `Year`, `TS` FROM `instmembership` WHERE `ID` = :p0 AND `Country` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Instmembership();
            $obj->hydrate($row);
            InstmembershipPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Instmembership|Instmembership[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Instmembership[]|mixed the list of results, formatted by the current formatter
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
     * @return InstmembershipQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InstmembershipPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InstmembershipPeer::COUNTRY, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return InstmembershipQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InstmembershipPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InstmembershipPeer::COUNTRY, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstmembershipQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(InstmembershipPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(InstmembershipPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InstmembershipPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the Country column
     *
     * Example usage:
     * <code>
     * $query->filterByCountry('fooValue');   // WHERE Country = 'fooValue'
     * $query->filterByCountry('%fooValue%'); // WHERE Country LIKE '%fooValue%'
     * </code>
     *
     * @param     string $country The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstmembershipQuery The current query, for fluid interface
     */
    public function filterByCountry($country = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($country)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $country)) {
                $country = str_replace('*', '%', $country);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstmembershipPeer::COUNTRY, $country, $comparison);
    }

    /**
     * Filter the query on the C_Code column
     *
     * Example usage:
     * <code>
     * $query->filterByCCode('fooValue');   // WHERE C_Code = 'fooValue'
     * $query->filterByCCode('%fooValue%'); // WHERE C_Code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstmembershipQuery The current query, for fluid interface
     */
    public function filterByCCode($cCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cCode)) {
                $cCode = str_replace('*', '%', $cCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstmembershipPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the Status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE Status = 'fooValue'
     * $query->filterByStatus('%fooValue%'); // WHERE Status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstmembershipQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $status)) {
                $status = str_replace('*', '%', $status);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstmembershipPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the Year column
     *
     * Example usage:
     * <code>
     * $query->filterByYear('2011-03-14'); // WHERE Year = '2011-03-14'
     * $query->filterByYear('now'); // WHERE Year = '2011-03-14'
     * $query->filterByYear(array('max' => 'yesterday')); // WHERE Year < '2011-03-13'
     * </code>
     *
     * @param     mixed $year The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstmembershipQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(InstmembershipPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(InstmembershipPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InstmembershipPeer::YEAR, $year, $comparison);
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
     * @return InstmembershipQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(InstmembershipPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(InstmembershipPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InstmembershipPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Instmembership $instmembership Object to remove from the list of results
     *
     * @return InstmembershipQuery The current query, for fluid interface
     */
    public function prune($instmembership = null)
    {
        if ($instmembership) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InstmembershipPeer::ID), $instmembership->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InstmembershipPeer::COUNTRY), $instmembership->getCountry(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
