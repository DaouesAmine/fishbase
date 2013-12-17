<?php


/**
 * Base class that represents a query for the 'instlanguage' table.
 *
 *
 *
 * @method InstlanguageQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method InstlanguageQuery orderByLanguagename($order = Criteria::ASC) Order by the LanguageName column
 * @method InstlanguageQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method InstlanguageQuery groupById() Group by the ID column
 * @method InstlanguageQuery groupByLanguagename() Group by the LanguageName column
 * @method InstlanguageQuery groupByTs() Group by the TS column
 *
 * @method InstlanguageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method InstlanguageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method InstlanguageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Instlanguage findOne(PropelPDO $con = null) Return the first Instlanguage matching the query
 * @method Instlanguage findOneOrCreate(PropelPDO $con = null) Return the first Instlanguage matching the query, or a new Instlanguage object populated from the query conditions when no match is found
 *
 * @method Instlanguage findOneById(int $ID) Return the first Instlanguage filtered by the ID column
 * @method Instlanguage findOneByLanguagename(string $LanguageName) Return the first Instlanguage filtered by the LanguageName column
 * @method Instlanguage findOneByTs(string $TS) Return the first Instlanguage filtered by the TS column
 *
 * @method array findById(int $ID) Return Instlanguage objects filtered by the ID column
 * @method array findByLanguagename(string $LanguageName) Return Instlanguage objects filtered by the LanguageName column
 * @method array findByTs(string $TS) Return Instlanguage objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseInstlanguageQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseInstlanguageQuery object.
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
            $modelName = 'Instlanguage';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new InstlanguageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   InstlanguageQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return InstlanguageQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof InstlanguageQuery) {
            return $criteria;
        }
        $query = new InstlanguageQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$ID, $LanguageName]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Instlanguage|Instlanguage[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = InstlanguagePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(InstlanguagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Instlanguage A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `LanguageName`, `TS` FROM `instlanguage` WHERE `ID` = :p0 AND `LanguageName` = :p1';
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
            $obj = new Instlanguage();
            $obj->hydrate($row);
            InstlanguagePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Instlanguage|Instlanguage[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Instlanguage[]|mixed the list of results, formatted by the current formatter
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
     * @return InstlanguageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(InstlanguagePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(InstlanguagePeer::LANGUAGENAME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return InstlanguageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(InstlanguagePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(InstlanguagePeer::LANGUAGENAME, $key[1], Criteria::EQUAL);
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
     * @return InstlanguageQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(InstlanguagePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(InstlanguagePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InstlanguagePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the LanguageName column
     *
     * Example usage:
     * <code>
     * $query->filterByLanguagename('fooValue');   // WHERE LanguageName = 'fooValue'
     * $query->filterByLanguagename('%fooValue%'); // WHERE LanguageName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $languagename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return InstlanguageQuery The current query, for fluid interface
     */
    public function filterByLanguagename($languagename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($languagename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $languagename)) {
                $languagename = str_replace('*', '%', $languagename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(InstlanguagePeer::LANGUAGENAME, $languagename, $comparison);
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
     * @return InstlanguageQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(InstlanguagePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(InstlanguagePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(InstlanguagePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Instlanguage $instlanguage Object to remove from the list of results
     *
     * @return InstlanguageQuery The current query, for fluid interface
     */
    public function prune($instlanguage = null)
    {
        if ($instlanguage) {
            $this->addCond('pruneCond0', $this->getAliasedColName(InstlanguagePeer::ID), $instlanguage->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(InstlanguagePeer::LANGUAGENAME), $instlanguage->getLanguagename(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
