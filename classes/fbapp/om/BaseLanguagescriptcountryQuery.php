<?php


/**
 * Base class that represents a query for the 'languagescriptcountry' table.
 *
 *
 *
 * @method LanguagescriptcountryQuery orderByScriptname($order = Criteria::ASC) Order by the ScriptName column
 * @method LanguagescriptcountryQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method LanguagescriptcountryQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method LanguagescriptcountryQuery orderByRefno($order = Criteria::ASC) Order by the RefNo column
 * @method LanguagescriptcountryQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method LanguagescriptcountryQuery groupByScriptname() Group by the ScriptName column
 * @method LanguagescriptcountryQuery groupByCCode() Group by the C_Code column
 * @method LanguagescriptcountryQuery groupByRemarks() Group by the Remarks column
 * @method LanguagescriptcountryQuery groupByRefno() Group by the RefNo column
 * @method LanguagescriptcountryQuery groupByTs() Group by the TS column
 *
 * @method LanguagescriptcountryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LanguagescriptcountryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LanguagescriptcountryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Languagescriptcountry findOne(PropelPDO $con = null) Return the first Languagescriptcountry matching the query
 * @method Languagescriptcountry findOneOrCreate(PropelPDO $con = null) Return the first Languagescriptcountry matching the query, or a new Languagescriptcountry object populated from the query conditions when no match is found
 *
 * @method Languagescriptcountry findOneByScriptname(string $ScriptName) Return the first Languagescriptcountry filtered by the ScriptName column
 * @method Languagescriptcountry findOneByCCode(string $C_Code) Return the first Languagescriptcountry filtered by the C_Code column
 * @method Languagescriptcountry findOneByRemarks(string $Remarks) Return the first Languagescriptcountry filtered by the Remarks column
 * @method Languagescriptcountry findOneByRefno(int $RefNo) Return the first Languagescriptcountry filtered by the RefNo column
 * @method Languagescriptcountry findOneByTs(string $TS) Return the first Languagescriptcountry filtered by the TS column
 *
 * @method array findByScriptname(string $ScriptName) Return Languagescriptcountry objects filtered by the ScriptName column
 * @method array findByCCode(string $C_Code) Return Languagescriptcountry objects filtered by the C_Code column
 * @method array findByRemarks(string $Remarks) Return Languagescriptcountry objects filtered by the Remarks column
 * @method array findByRefno(int $RefNo) Return Languagescriptcountry objects filtered by the RefNo column
 * @method array findByTs(string $TS) Return Languagescriptcountry objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLanguagescriptcountryQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLanguagescriptcountryQuery object.
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
            $modelName = 'Languagescriptcountry';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LanguagescriptcountryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LanguagescriptcountryQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LanguagescriptcountryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LanguagescriptcountryQuery) {
            return $criteria;
        }
        $query = new LanguagescriptcountryQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$ScriptName, $C_Code]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Languagescriptcountry|Languagescriptcountry[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LanguagescriptcountryPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LanguagescriptcountryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Languagescriptcountry A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ScriptName`, `C_Code`, `Remarks`, `RefNo`, `TS` FROM `languagescriptcountry` WHERE `ScriptName` = :p0 AND `C_Code` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Languagescriptcountry();
            $obj->hydrate($row);
            LanguagescriptcountryPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Languagescriptcountry|Languagescriptcountry[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Languagescriptcountry[]|mixed the list of results, formatted by the current formatter
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
     * @return LanguagescriptcountryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(LanguagescriptcountryPeer::SCRIPTNAME, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(LanguagescriptcountryPeer::C_CODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LanguagescriptcountryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(LanguagescriptcountryPeer::SCRIPTNAME, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(LanguagescriptcountryPeer::C_CODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ScriptName column
     *
     * Example usage:
     * <code>
     * $query->filterByScriptname('fooValue');   // WHERE ScriptName = 'fooValue'
     * $query->filterByScriptname('%fooValue%'); // WHERE ScriptName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $scriptname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagescriptcountryQuery The current query, for fluid interface
     */
    public function filterByScriptname($scriptname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($scriptname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $scriptname)) {
                $scriptname = str_replace('*', '%', $scriptname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LanguagescriptcountryPeer::SCRIPTNAME, $scriptname, $comparison);
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
     * @return LanguagescriptcountryQuery The current query, for fluid interface
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

        return $this->addUsingAlias(LanguagescriptcountryPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the Remarks column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarks('fooValue');   // WHERE Remarks = 'fooValue'
     * $query->filterByRemarks('%fooValue%'); // WHERE Remarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagescriptcountryQuery The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarks)) {
                $remarks = str_replace('*', '%', $remarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LanguagescriptcountryPeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the RefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByRefno(1234); // WHERE RefNo = 1234
     * $query->filterByRefno(array(12, 34)); // WHERE RefNo IN (12, 34)
     * $query->filterByRefno(array('min' => 12)); // WHERE RefNo >= 12
     * $query->filterByRefno(array('max' => 12)); // WHERE RefNo <= 12
     * </code>
     *
     * @param     mixed $refno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagescriptcountryQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(LanguagescriptcountryPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(LanguagescriptcountryPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagescriptcountryPeer::REFNO, $refno, $comparison);
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
     * @return LanguagescriptcountryQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(LanguagescriptcountryPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(LanguagescriptcountryPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagescriptcountryPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Languagescriptcountry $languagescriptcountry Object to remove from the list of results
     *
     * @return LanguagescriptcountryQuery The current query, for fluid interface
     */
    public function prune($languagescriptcountry = null)
    {
        if ($languagescriptcountry) {
            $this->addCond('pruneCond0', $this->getAliasedColName(LanguagescriptcountryPeer::SCRIPTNAME), $languagescriptcountry->getScriptname(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(LanguagescriptcountryPeer::C_CODE), $languagescriptcountry->getCCode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
