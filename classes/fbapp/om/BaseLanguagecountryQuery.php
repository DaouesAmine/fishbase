<?php


/**
 * Base class that represents a query for the 'languagecountry' table.
 *
 *
 *
 * @method LanguagecountryQuery orderByLangcode($order = Criteria::ASC) Order by the LangCode column
 * @method LanguagecountryQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method LanguagecountryQuery orderByNumberofspeakers($order = Criteria::ASC) Order by the NumberofSpeakers column
 * @method LanguagecountryQuery orderByRefno($order = Criteria::ASC) Order by the RefNo column
 * @method LanguagecountryQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method LanguagecountryQuery orderByLangcountryrank($order = Criteria::ASC) Order by the LangCountryRank column
 * @method LanguagecountryQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method LanguagecountryQuery groupByLangcode() Group by the LangCode column
 * @method LanguagecountryQuery groupByCCode() Group by the C_Code column
 * @method LanguagecountryQuery groupByNumberofspeakers() Group by the NumberofSpeakers column
 * @method LanguagecountryQuery groupByRefno() Group by the RefNo column
 * @method LanguagecountryQuery groupByRemarks() Group by the Remarks column
 * @method LanguagecountryQuery groupByLangcountryrank() Group by the LangCountryRank column
 * @method LanguagecountryQuery groupByTs() Group by the TS column
 *
 * @method LanguagecountryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LanguagecountryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LanguagecountryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Languagecountry findOne(PropelPDO $con = null) Return the first Languagecountry matching the query
 * @method Languagecountry findOneOrCreate(PropelPDO $con = null) Return the first Languagecountry matching the query, or a new Languagecountry object populated from the query conditions when no match is found
 *
 * @method Languagecountry findOneByLangcode(int $LangCode) Return the first Languagecountry filtered by the LangCode column
 * @method Languagecountry findOneByCCode(string $C_Code) Return the first Languagecountry filtered by the C_Code column
 * @method Languagecountry findOneByNumberofspeakers(double $NumberofSpeakers) Return the first Languagecountry filtered by the NumberofSpeakers column
 * @method Languagecountry findOneByRefno(int $RefNo) Return the first Languagecountry filtered by the RefNo column
 * @method Languagecountry findOneByRemarks(string $Remarks) Return the first Languagecountry filtered by the Remarks column
 * @method Languagecountry findOneByLangcountryrank(int $LangCountryRank) Return the first Languagecountry filtered by the LangCountryRank column
 * @method Languagecountry findOneByTs(string $TS) Return the first Languagecountry filtered by the TS column
 *
 * @method array findByLangcode(int $LangCode) Return Languagecountry objects filtered by the LangCode column
 * @method array findByCCode(string $C_Code) Return Languagecountry objects filtered by the C_Code column
 * @method array findByNumberofspeakers(double $NumberofSpeakers) Return Languagecountry objects filtered by the NumberofSpeakers column
 * @method array findByRefno(int $RefNo) Return Languagecountry objects filtered by the RefNo column
 * @method array findByRemarks(string $Remarks) Return Languagecountry objects filtered by the Remarks column
 * @method array findByLangcountryrank(int $LangCountryRank) Return Languagecountry objects filtered by the LangCountryRank column
 * @method array findByTs(string $TS) Return Languagecountry objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLanguagecountryQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLanguagecountryQuery object.
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
            $modelName = 'Languagecountry';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LanguagecountryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LanguagecountryQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LanguagecountryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LanguagecountryQuery) {
            return $criteria;
        }
        $query = new LanguagecountryQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$LangCode, $C_Code]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Languagecountry|Languagecountry[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LanguagecountryPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LanguagecountryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Languagecountry A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `LangCode`, `C_Code`, `NumberofSpeakers`, `RefNo`, `Remarks`, `LangCountryRank`, `TS` FROM `languagecountry` WHERE `LangCode` = :p0 AND `C_Code` = :p1';
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
            $obj = new Languagecountry();
            $obj->hydrate($row);
            LanguagecountryPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Languagecountry|Languagecountry[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Languagecountry[]|mixed the list of results, formatted by the current formatter
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
     * @return LanguagecountryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(LanguagecountryPeer::LANGCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(LanguagecountryPeer::C_CODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LanguagecountryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(LanguagecountryPeer::LANGCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(LanguagecountryPeer::C_CODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the LangCode column
     *
     * Example usage:
     * <code>
     * $query->filterByLangcode(1234); // WHERE LangCode = 1234
     * $query->filterByLangcode(array(12, 34)); // WHERE LangCode IN (12, 34)
     * $query->filterByLangcode(array('min' => 12)); // WHERE LangCode >= 12
     * $query->filterByLangcode(array('max' => 12)); // WHERE LangCode <= 12
     * </code>
     *
     * @param     mixed $langcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagecountryQuery The current query, for fluid interface
     */
    public function filterByLangcode($langcode = null, $comparison = null)
    {
        if (is_array($langcode)) {
            $useMinMax = false;
            if (isset($langcode['min'])) {
                $this->addUsingAlias(LanguagecountryPeer::LANGCODE, $langcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($langcode['max'])) {
                $this->addUsingAlias(LanguagecountryPeer::LANGCODE, $langcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagecountryPeer::LANGCODE, $langcode, $comparison);
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
     * @return LanguagecountryQuery The current query, for fluid interface
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

        return $this->addUsingAlias(LanguagecountryPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the NumberofSpeakers column
     *
     * Example usage:
     * <code>
     * $query->filterByNumberofspeakers(1234); // WHERE NumberofSpeakers = 1234
     * $query->filterByNumberofspeakers(array(12, 34)); // WHERE NumberofSpeakers IN (12, 34)
     * $query->filterByNumberofspeakers(array('min' => 12)); // WHERE NumberofSpeakers >= 12
     * $query->filterByNumberofspeakers(array('max' => 12)); // WHERE NumberofSpeakers <= 12
     * </code>
     *
     * @param     mixed $numberofspeakers The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagecountryQuery The current query, for fluid interface
     */
    public function filterByNumberofspeakers($numberofspeakers = null, $comparison = null)
    {
        if (is_array($numberofspeakers)) {
            $useMinMax = false;
            if (isset($numberofspeakers['min'])) {
                $this->addUsingAlias(LanguagecountryPeer::NUMBEROFSPEAKERS, $numberofspeakers['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numberofspeakers['max'])) {
                $this->addUsingAlias(LanguagecountryPeer::NUMBEROFSPEAKERS, $numberofspeakers['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagecountryPeer::NUMBEROFSPEAKERS, $numberofspeakers, $comparison);
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
     * @return LanguagecountryQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(LanguagecountryPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(LanguagecountryPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagecountryPeer::REFNO, $refno, $comparison);
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
     * @return LanguagecountryQuery The current query, for fluid interface
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

        return $this->addUsingAlias(LanguagecountryPeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the LangCountryRank column
     *
     * Example usage:
     * <code>
     * $query->filterByLangcountryrank(1234); // WHERE LangCountryRank = 1234
     * $query->filterByLangcountryrank(array(12, 34)); // WHERE LangCountryRank IN (12, 34)
     * $query->filterByLangcountryrank(array('min' => 12)); // WHERE LangCountryRank >= 12
     * $query->filterByLangcountryrank(array('max' => 12)); // WHERE LangCountryRank <= 12
     * </code>
     *
     * @param     mixed $langcountryrank The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagecountryQuery The current query, for fluid interface
     */
    public function filterByLangcountryrank($langcountryrank = null, $comparison = null)
    {
        if (is_array($langcountryrank)) {
            $useMinMax = false;
            if (isset($langcountryrank['min'])) {
                $this->addUsingAlias(LanguagecountryPeer::LANGCOUNTRYRANK, $langcountryrank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($langcountryrank['max'])) {
                $this->addUsingAlias(LanguagecountryPeer::LANGCOUNTRYRANK, $langcountryrank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagecountryPeer::LANGCOUNTRYRANK, $langcountryrank, $comparison);
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
     * @return LanguagecountryQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(LanguagecountryPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(LanguagecountryPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagecountryPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Languagecountry $languagecountry Object to remove from the list of results
     *
     * @return LanguagecountryQuery The current query, for fluid interface
     */
    public function prune($languagecountry = null)
    {
        if ($languagecountry) {
            $this->addCond('pruneCond0', $this->getAliasedColName(LanguagecountryPeer::LANGCODE), $languagecountry->getLangcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(LanguagecountryPeer::C_CODE), $languagecountry->getCCode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
