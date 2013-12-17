<?php


/**
 * Base class that represents a query for the 'zweb_rdecomnameslanguage' table.
 *
 *
 *
 * @method ZwebRdecomnameslanguageQuery orderByCoordinator($order = Criteria::ASC) Order by the Coordinator column
 * @method ZwebRdecomnameslanguageQuery orderByLanguage($order = Criteria::ASC) Order by the language column
 * @method ZwebRdecomnameslanguageQuery orderByAddrec($order = Criteria::ASC) Order by the addrec column
 * @method ZwebRdecomnameslanguageQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method ZwebRdecomnameslanguageQuery groupByCoordinator() Group by the Coordinator column
 * @method ZwebRdecomnameslanguageQuery groupByLanguage() Group by the language column
 * @method ZwebRdecomnameslanguageQuery groupByAddrec() Group by the addrec column
 * @method ZwebRdecomnameslanguageQuery groupByTs() Group by the TS column
 *
 * @method ZwebRdecomnameslanguageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ZwebRdecomnameslanguageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ZwebRdecomnameslanguageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ZwebRdecomnameslanguage findOne(PropelPDO $con = null) Return the first ZwebRdecomnameslanguage matching the query
 * @method ZwebRdecomnameslanguage findOneOrCreate(PropelPDO $con = null) Return the first ZwebRdecomnameslanguage matching the query, or a new ZwebRdecomnameslanguage object populated from the query conditions when no match is found
 *
 * @method ZwebRdecomnameslanguage findOneByCoordinator(int $Coordinator) Return the first ZwebRdecomnameslanguage filtered by the Coordinator column
 * @method ZwebRdecomnameslanguage findOneByLanguage(string $language) Return the first ZwebRdecomnameslanguage filtered by the language column
 * @method ZwebRdecomnameslanguage findOneByAddrec(string $addrec) Return the first ZwebRdecomnameslanguage filtered by the addrec column
 * @method ZwebRdecomnameslanguage findOneByTs(string $TS) Return the first ZwebRdecomnameslanguage filtered by the TS column
 *
 * @method array findByCoordinator(int $Coordinator) Return ZwebRdecomnameslanguage objects filtered by the Coordinator column
 * @method array findByLanguage(string $language) Return ZwebRdecomnameslanguage objects filtered by the language column
 * @method array findByAddrec(string $addrec) Return ZwebRdecomnameslanguage objects filtered by the addrec column
 * @method array findByTs(string $TS) Return ZwebRdecomnameslanguage objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseZwebRdecomnameslanguageQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseZwebRdecomnameslanguageQuery object.
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
            $modelName = 'ZwebRdecomnameslanguage';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ZwebRdecomnameslanguageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ZwebRdecomnameslanguageQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ZwebRdecomnameslanguageQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ZwebRdecomnameslanguageQuery) {
            return $criteria;
        }
        $query = new ZwebRdecomnameslanguageQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$Coordinator, $language]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ZwebRdecomnameslanguage|ZwebRdecomnameslanguage[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ZwebRdecomnameslanguagePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ZwebRdecomnameslanguagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ZwebRdecomnameslanguage A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Coordinator`, `language`, `addrec`, `TS` FROM `zweb_rdecomnameslanguage` WHERE `Coordinator` = :p0 AND `language` = :p1';
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
            $obj = new ZwebRdecomnameslanguage();
            $obj->hydrate($row);
            ZwebRdecomnameslanguagePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return ZwebRdecomnameslanguage|ZwebRdecomnameslanguage[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ZwebRdecomnameslanguage[]|mixed the list of results, formatted by the current formatter
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
     * @return ZwebRdecomnameslanguageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ZwebRdecomnameslanguagePeer::COORDINATOR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ZwebRdecomnameslanguagePeer::LANGUAGE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ZwebRdecomnameslanguageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ZwebRdecomnameslanguagePeer::COORDINATOR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ZwebRdecomnameslanguagePeer::LANGUAGE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the Coordinator column
     *
     * Example usage:
     * <code>
     * $query->filterByCoordinator(1234); // WHERE Coordinator = 1234
     * $query->filterByCoordinator(array(12, 34)); // WHERE Coordinator IN (12, 34)
     * $query->filterByCoordinator(array('min' => 12)); // WHERE Coordinator >= 12
     * $query->filterByCoordinator(array('max' => 12)); // WHERE Coordinator <= 12
     * </code>
     *
     * @param     mixed $coordinator The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebRdecomnameslanguageQuery The current query, for fluid interface
     */
    public function filterByCoordinator($coordinator = null, $comparison = null)
    {
        if (is_array($coordinator)) {
            $useMinMax = false;
            if (isset($coordinator['min'])) {
                $this->addUsingAlias(ZwebRdecomnameslanguagePeer::COORDINATOR, $coordinator['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coordinator['max'])) {
                $this->addUsingAlias(ZwebRdecomnameslanguagePeer::COORDINATOR, $coordinator['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebRdecomnameslanguagePeer::COORDINATOR, $coordinator, $comparison);
    }

    /**
     * Filter the query on the language column
     *
     * Example usage:
     * <code>
     * $query->filterByLanguage('fooValue');   // WHERE language = 'fooValue'
     * $query->filterByLanguage('%fooValue%'); // WHERE language LIKE '%fooValue%'
     * </code>
     *
     * @param     string $language The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebRdecomnameslanguageQuery The current query, for fluid interface
     */
    public function filterByLanguage($language = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($language)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $language)) {
                $language = str_replace('*', '%', $language);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebRdecomnameslanguagePeer::LANGUAGE, $language, $comparison);
    }

    /**
     * Filter the query on the addrec column
     *
     * Example usage:
     * <code>
     * $query->filterByAddrec('fooValue');   // WHERE addrec = 'fooValue'
     * $query->filterByAddrec('%fooValue%'); // WHERE addrec LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addrec The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ZwebRdecomnameslanguageQuery The current query, for fluid interface
     */
    public function filterByAddrec($addrec = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addrec)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addrec)) {
                $addrec = str_replace('*', '%', $addrec);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ZwebRdecomnameslanguagePeer::ADDREC, $addrec, $comparison);
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
     * @return ZwebRdecomnameslanguageQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(ZwebRdecomnameslanguagePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(ZwebRdecomnameslanguagePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ZwebRdecomnameslanguagePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ZwebRdecomnameslanguage $zwebRdecomnameslanguage Object to remove from the list of results
     *
     * @return ZwebRdecomnameslanguageQuery The current query, for fluid interface
     */
    public function prune($zwebRdecomnameslanguage = null)
    {
        if ($zwebRdecomnameslanguage) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ZwebRdecomnameslanguagePeer::COORDINATOR), $zwebRdecomnameslanguage->getCoordinator(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ZwebRdecomnameslanguagePeer::LANGUAGE), $zwebRdecomnameslanguage->getLanguage(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
