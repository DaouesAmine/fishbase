<?php


/**
 * Base class that represents a query for the 'journals' table.
 *
 *
 *
 * @method JournalsQuery orderByJId($order = Criteria::ASC) Order by the J_ID column
 * @method JournalsQuery orderByJAbbreviation($order = Criteria::ASC) Order by the J_Abbreviation column
 * @method JournalsQuery orderByJName($order = Criteria::ASC) Order by the J_Name column
 * @method JournalsQuery orderByJUrl($order = Criteria::ASC) Order by the J_URL column
 * @method JournalsQuery orderByEissn($order = Criteria::ASC) Order by the eISSN column
 * @method JournalsQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method JournalsQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method JournalsQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method JournalsQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method JournalsQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method JournalsQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 *
 * @method JournalsQuery groupByJId() Group by the J_ID column
 * @method JournalsQuery groupByJAbbreviation() Group by the J_Abbreviation column
 * @method JournalsQuery groupByJName() Group by the J_Name column
 * @method JournalsQuery groupByJUrl() Group by the J_URL column
 * @method JournalsQuery groupByEissn() Group by the eISSN column
 * @method JournalsQuery groupByEntered() Group by the Entered column
 * @method JournalsQuery groupByDateentered() Group by the DateEntered column
 * @method JournalsQuery groupByModified() Group by the Modified column
 * @method JournalsQuery groupByDatemodified() Group by the DateModified column
 * @method JournalsQuery groupByExpert() Group by the Expert column
 * @method JournalsQuery groupByDatechecked() Group by the DateChecked column
 *
 * @method JournalsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method JournalsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method JournalsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Journals findOne(PropelPDO $con = null) Return the first Journals matching the query
 * @method Journals findOneOrCreate(PropelPDO $con = null) Return the first Journals matching the query, or a new Journals object populated from the query conditions when no match is found
 *
 * @method Journals findOneByJAbbreviation(string $J_Abbreviation) Return the first Journals filtered by the J_Abbreviation column
 * @method Journals findOneByJName(string $J_Name) Return the first Journals filtered by the J_Name column
 * @method Journals findOneByJUrl(string $J_URL) Return the first Journals filtered by the J_URL column
 * @method Journals findOneByEissn(string $eISSN) Return the first Journals filtered by the eISSN column
 * @method Journals findOneByEntered(int $Entered) Return the first Journals filtered by the Entered column
 * @method Journals findOneByDateentered(string $DateEntered) Return the first Journals filtered by the DateEntered column
 * @method Journals findOneByModified(int $Modified) Return the first Journals filtered by the Modified column
 * @method Journals findOneByDatemodified(string $DateModified) Return the first Journals filtered by the DateModified column
 * @method Journals findOneByExpert(int $Expert) Return the first Journals filtered by the Expert column
 * @method Journals findOneByDatechecked(string $DateChecked) Return the first Journals filtered by the DateChecked column
 *
 * @method array findByJId(int $J_ID) Return Journals objects filtered by the J_ID column
 * @method array findByJAbbreviation(string $J_Abbreviation) Return Journals objects filtered by the J_Abbreviation column
 * @method array findByJName(string $J_Name) Return Journals objects filtered by the J_Name column
 * @method array findByJUrl(string $J_URL) Return Journals objects filtered by the J_URL column
 * @method array findByEissn(string $eISSN) Return Journals objects filtered by the eISSN column
 * @method array findByEntered(int $Entered) Return Journals objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Journals objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Journals objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Journals objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Journals objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Journals objects filtered by the DateChecked column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseJournalsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseJournalsQuery object.
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
            $modelName = 'Journals';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new JournalsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   JournalsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return JournalsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof JournalsQuery) {
            return $criteria;
        }
        $query = new JournalsQuery(null, null, $modelAlias);

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
     * @return   Journals|Journals[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = JournalsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(JournalsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Journals A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByJId($key, $con = null)
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
     * @return                 Journals A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `J_ID`, `J_Abbreviation`, `J_Name`, `J_URL`, `eISSN`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked` FROM `journals` WHERE `J_ID` = :p0';
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
            $obj = new Journals();
            $obj->hydrate($row);
            JournalsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Journals|Journals[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Journals[]|mixed the list of results, formatted by the current formatter
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
     * @return JournalsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(JournalsPeer::J_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return JournalsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(JournalsPeer::J_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the J_ID column
     *
     * Example usage:
     * <code>
     * $query->filterByJId(1234); // WHERE J_ID = 1234
     * $query->filterByJId(array(12, 34)); // WHERE J_ID IN (12, 34)
     * $query->filterByJId(array('min' => 12)); // WHERE J_ID >= 12
     * $query->filterByJId(array('max' => 12)); // WHERE J_ID <= 12
     * </code>
     *
     * @param     mixed $jId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalsQuery The current query, for fluid interface
     */
    public function filterByJId($jId = null, $comparison = null)
    {
        if (is_array($jId)) {
            $useMinMax = false;
            if (isset($jId['min'])) {
                $this->addUsingAlias(JournalsPeer::J_ID, $jId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jId['max'])) {
                $this->addUsingAlias(JournalsPeer::J_ID, $jId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalsPeer::J_ID, $jId, $comparison);
    }

    /**
     * Filter the query on the J_Abbreviation column
     *
     * Example usage:
     * <code>
     * $query->filterByJAbbreviation('fooValue');   // WHERE J_Abbreviation = 'fooValue'
     * $query->filterByJAbbreviation('%fooValue%'); // WHERE J_Abbreviation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jAbbreviation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalsQuery The current query, for fluid interface
     */
    public function filterByJAbbreviation($jAbbreviation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jAbbreviation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jAbbreviation)) {
                $jAbbreviation = str_replace('*', '%', $jAbbreviation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalsPeer::J_ABBREVIATION, $jAbbreviation, $comparison);
    }

    /**
     * Filter the query on the J_Name column
     *
     * Example usage:
     * <code>
     * $query->filterByJName('fooValue');   // WHERE J_Name = 'fooValue'
     * $query->filterByJName('%fooValue%'); // WHERE J_Name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalsQuery The current query, for fluid interface
     */
    public function filterByJName($jName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jName)) {
                $jName = str_replace('*', '%', $jName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalsPeer::J_NAME, $jName, $comparison);
    }

    /**
     * Filter the query on the J_URL column
     *
     * Example usage:
     * <code>
     * $query->filterByJUrl('fooValue');   // WHERE J_URL = 'fooValue'
     * $query->filterByJUrl('%fooValue%'); // WHERE J_URL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jUrl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalsQuery The current query, for fluid interface
     */
    public function filterByJUrl($jUrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jUrl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jUrl)) {
                $jUrl = str_replace('*', '%', $jUrl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalsPeer::J_URL, $jUrl, $comparison);
    }

    /**
     * Filter the query on the eISSN column
     *
     * Example usage:
     * <code>
     * $query->filterByEissn('fooValue');   // WHERE eISSN = 'fooValue'
     * $query->filterByEissn('%fooValue%'); // WHERE eISSN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $eissn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalsQuery The current query, for fluid interface
     */
    public function filterByEissn($eissn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($eissn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $eissn)) {
                $eissn = str_replace('*', '%', $eissn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(JournalsPeer::EISSN, $eissn, $comparison);
    }

    /**
     * Filter the query on the Entered column
     *
     * Example usage:
     * <code>
     * $query->filterByEntered(1234); // WHERE Entered = 1234
     * $query->filterByEntered(array(12, 34)); // WHERE Entered IN (12, 34)
     * $query->filterByEntered(array('min' => 12)); // WHERE Entered >= 12
     * $query->filterByEntered(array('max' => 12)); // WHERE Entered <= 12
     * </code>
     *
     * @param     mixed $entered The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalsQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(JournalsPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(JournalsPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalsPeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the DateEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('2011-03-14'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered('now'); // WHERE DateEntered = '2011-03-14'
     * $query->filterByDateentered(array('max' => 'yesterday')); // WHERE DateEntered < '2011-03-13'
     * </code>
     *
     * @param     mixed $dateentered The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalsQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(JournalsPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(JournalsPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalsPeer::DATEENTERED, $dateentered, $comparison);
    }

    /**
     * Filter the query on the Modified column
     *
     * Example usage:
     * <code>
     * $query->filterByModified(1234); // WHERE Modified = 1234
     * $query->filterByModified(array(12, 34)); // WHERE Modified IN (12, 34)
     * $query->filterByModified(array('min' => 12)); // WHERE Modified >= 12
     * $query->filterByModified(array('max' => 12)); // WHERE Modified <= 12
     * </code>
     *
     * @param     mixed $modified The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalsQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(JournalsPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(JournalsPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalsPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the DateModified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('2011-03-14'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified('now'); // WHERE DateModified = '2011-03-14'
     * $query->filterByDatemodified(array('max' => 'yesterday')); // WHERE DateModified < '2011-03-13'
     * </code>
     *
     * @param     mixed $datemodified The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalsQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(JournalsPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(JournalsPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalsPeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the Expert column
     *
     * Example usage:
     * <code>
     * $query->filterByExpert(1234); // WHERE Expert = 1234
     * $query->filterByExpert(array(12, 34)); // WHERE Expert IN (12, 34)
     * $query->filterByExpert(array('min' => 12)); // WHERE Expert >= 12
     * $query->filterByExpert(array('max' => 12)); // WHERE Expert <= 12
     * </code>
     *
     * @param     mixed $expert The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalsQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(JournalsPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(JournalsPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalsPeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the DateChecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('2011-03-14'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked('now'); // WHERE DateChecked = '2011-03-14'
     * $query->filterByDatechecked(array('max' => 'yesterday')); // WHERE DateChecked < '2011-03-13'
     * </code>
     *
     * @param     mixed $datechecked The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return JournalsQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(JournalsPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(JournalsPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(JournalsPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Journals $journals Object to remove from the list of results
     *
     * @return JournalsQuery The current query, for fluid interface
     */
    public function prune($journals = null)
    {
        if ($journals) {
            $this->addUsingAlias(JournalsPeer::J_ID, $journals->getJId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
