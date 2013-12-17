<?php


/**
 * Base class that represents a query for the 'languagegroup' table.
 *
 *
 *
 * @method LanguagegroupQuery orderByLanggroupcode($order = Criteria::ASC) Order by the LangGroupCode column
 * @method LanguagegroupQuery orderByLanguagefamily($order = Criteria::ASC) Order by the LanguageFamily column
 * @method LanguagegroupQuery orderByLanguagebranch($order = Criteria::ASC) Order by the LanguageBranch column
 * @method LanguagegroupQuery orderByLanguagegroup($order = Criteria::ASC) Order by the LanguageGroup column
 * @method LanguagegroupQuery orderByExtinct($order = Criteria::ASC) Order by the Extinct column
 * @method LanguagegroupQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method LanguagegroupQuery groupByLanggroupcode() Group by the LangGroupCode column
 * @method LanguagegroupQuery groupByLanguagefamily() Group by the LanguageFamily column
 * @method LanguagegroupQuery groupByLanguagebranch() Group by the LanguageBranch column
 * @method LanguagegroupQuery groupByLanguagegroup() Group by the LanguageGroup column
 * @method LanguagegroupQuery groupByExtinct() Group by the Extinct column
 * @method LanguagegroupQuery groupByTs() Group by the TS column
 *
 * @method LanguagegroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LanguagegroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LanguagegroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Languagegroup findOne(PropelPDO $con = null) Return the first Languagegroup matching the query
 * @method Languagegroup findOneOrCreate(PropelPDO $con = null) Return the first Languagegroup matching the query, or a new Languagegroup object populated from the query conditions when no match is found
 *
 * @method Languagegroup findOneByLanggroupcode(int $LangGroupCode) Return the first Languagegroup filtered by the LangGroupCode column
 * @method Languagegroup findOneByLanguagefamily(string $LanguageFamily) Return the first Languagegroup filtered by the LanguageFamily column
 * @method Languagegroup findOneByLanguagebranch(string $LanguageBranch) Return the first Languagegroup filtered by the LanguageBranch column
 * @method Languagegroup findOneByLanguagegroup(string $LanguageGroup) Return the first Languagegroup filtered by the LanguageGroup column
 * @method Languagegroup findOneByExtinct(int $Extinct) Return the first Languagegroup filtered by the Extinct column
 * @method Languagegroup findOneByTs(string $TS) Return the first Languagegroup filtered by the TS column
 *
 * @method array findByLanggroupcode(int $LangGroupCode) Return Languagegroup objects filtered by the LangGroupCode column
 * @method array findByLanguagefamily(string $LanguageFamily) Return Languagegroup objects filtered by the LanguageFamily column
 * @method array findByLanguagebranch(string $LanguageBranch) Return Languagegroup objects filtered by the LanguageBranch column
 * @method array findByLanguagegroup(string $LanguageGroup) Return Languagegroup objects filtered by the LanguageGroup column
 * @method array findByExtinct(int $Extinct) Return Languagegroup objects filtered by the Extinct column
 * @method array findByTs(string $TS) Return Languagegroup objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLanguagegroupQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLanguagegroupQuery object.
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
            $modelName = 'Languagegroup';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LanguagegroupQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LanguagegroupQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LanguagegroupQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LanguagegroupQuery) {
            return $criteria;
        }
        $query = new LanguagegroupQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$LanguageFamily, $LanguageBranch, $LanguageGroup]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Languagegroup|Languagegroup[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LanguagegroupPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LanguagegroupPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Languagegroup A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `LangGroupCode`, `LanguageFamily`, `LanguageBranch`, `LanguageGroup`, `Extinct`, `TS` FROM `languagegroup` WHERE `LanguageFamily` = :p0 AND `LanguageBranch` = :p1 AND `LanguageGroup` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Languagegroup();
            $obj->hydrate($row);
            LanguagegroupPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Languagegroup|Languagegroup[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Languagegroup[]|mixed the list of results, formatted by the current formatter
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
     * @return LanguagegroupQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(LanguagegroupPeer::LANGUAGEFAMILY, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(LanguagegroupPeer::LANGUAGEBRANCH, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(LanguagegroupPeer::LANGUAGEGROUP, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LanguagegroupQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(LanguagegroupPeer::LANGUAGEFAMILY, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(LanguagegroupPeer::LANGUAGEBRANCH, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(LanguagegroupPeer::LANGUAGEGROUP, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the LangGroupCode column
     *
     * Example usage:
     * <code>
     * $query->filterByLanggroupcode(1234); // WHERE LangGroupCode = 1234
     * $query->filterByLanggroupcode(array(12, 34)); // WHERE LangGroupCode IN (12, 34)
     * $query->filterByLanggroupcode(array('min' => 12)); // WHERE LangGroupCode >= 12
     * $query->filterByLanggroupcode(array('max' => 12)); // WHERE LangGroupCode <= 12
     * </code>
     *
     * @param     mixed $langgroupcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagegroupQuery The current query, for fluid interface
     */
    public function filterByLanggroupcode($langgroupcode = null, $comparison = null)
    {
        if (is_array($langgroupcode)) {
            $useMinMax = false;
            if (isset($langgroupcode['min'])) {
                $this->addUsingAlias(LanguagegroupPeer::LANGGROUPCODE, $langgroupcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($langgroupcode['max'])) {
                $this->addUsingAlias(LanguagegroupPeer::LANGGROUPCODE, $langgroupcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagegroupPeer::LANGGROUPCODE, $langgroupcode, $comparison);
    }

    /**
     * Filter the query on the LanguageFamily column
     *
     * Example usage:
     * <code>
     * $query->filterByLanguagefamily('fooValue');   // WHERE LanguageFamily = 'fooValue'
     * $query->filterByLanguagefamily('%fooValue%'); // WHERE LanguageFamily LIKE '%fooValue%'
     * </code>
     *
     * @param     string $languagefamily The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagegroupQuery The current query, for fluid interface
     */
    public function filterByLanguagefamily($languagefamily = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($languagefamily)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $languagefamily)) {
                $languagefamily = str_replace('*', '%', $languagefamily);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LanguagegroupPeer::LANGUAGEFAMILY, $languagefamily, $comparison);
    }

    /**
     * Filter the query on the LanguageBranch column
     *
     * Example usage:
     * <code>
     * $query->filterByLanguagebranch('fooValue');   // WHERE LanguageBranch = 'fooValue'
     * $query->filterByLanguagebranch('%fooValue%'); // WHERE LanguageBranch LIKE '%fooValue%'
     * </code>
     *
     * @param     string $languagebranch The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagegroupQuery The current query, for fluid interface
     */
    public function filterByLanguagebranch($languagebranch = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($languagebranch)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $languagebranch)) {
                $languagebranch = str_replace('*', '%', $languagebranch);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LanguagegroupPeer::LANGUAGEBRANCH, $languagebranch, $comparison);
    }

    /**
     * Filter the query on the LanguageGroup column
     *
     * Example usage:
     * <code>
     * $query->filterByLanguagegroup('fooValue');   // WHERE LanguageGroup = 'fooValue'
     * $query->filterByLanguagegroup('%fooValue%'); // WHERE LanguageGroup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $languagegroup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagegroupQuery The current query, for fluid interface
     */
    public function filterByLanguagegroup($languagegroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($languagegroup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $languagegroup)) {
                $languagegroup = str_replace('*', '%', $languagegroup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LanguagegroupPeer::LANGUAGEGROUP, $languagegroup, $comparison);
    }

    /**
     * Filter the query on the Extinct column
     *
     * Example usage:
     * <code>
     * $query->filterByExtinct(1234); // WHERE Extinct = 1234
     * $query->filterByExtinct(array(12, 34)); // WHERE Extinct IN (12, 34)
     * $query->filterByExtinct(array('min' => 12)); // WHERE Extinct >= 12
     * $query->filterByExtinct(array('max' => 12)); // WHERE Extinct <= 12
     * </code>
     *
     * @param     mixed $extinct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LanguagegroupQuery The current query, for fluid interface
     */
    public function filterByExtinct($extinct = null, $comparison = null)
    {
        if (is_array($extinct)) {
            $useMinMax = false;
            if (isset($extinct['min'])) {
                $this->addUsingAlias(LanguagegroupPeer::EXTINCT, $extinct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($extinct['max'])) {
                $this->addUsingAlias(LanguagegroupPeer::EXTINCT, $extinct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagegroupPeer::EXTINCT, $extinct, $comparison);
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
     * @return LanguagegroupQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(LanguagegroupPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(LanguagegroupPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LanguagegroupPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Languagegroup $languagegroup Object to remove from the list of results
     *
     * @return LanguagegroupQuery The current query, for fluid interface
     */
    public function prune($languagegroup = null)
    {
        if ($languagegroup) {
            $this->addCond('pruneCond0', $this->getAliasedColName(LanguagegroupPeer::LANGUAGEFAMILY), $languagegroup->getLanguagefamily(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(LanguagegroupPeer::LANGUAGEBRANCH), $languagegroup->getLanguagebranch(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(LanguagegroupPeer::LANGUAGEGROUP), $languagegroup->getLanguagegroup(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
