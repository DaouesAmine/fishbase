<?php


/**
 * Base class that represents a query for the 'cas_bibliogen' table.
 *
 *
 *
 * @method CasBibliogenQuery orderByCasGen($order = Criteria::ASC) Order by the CAS_GEN column
 * @method CasBibliogenQuery orderByCasRefNo($order = Criteria::ASC) Order by the CAS_REF_NO column
 * @method CasBibliogenQuery orderByPageno($order = Criteria::ASC) Order by the PageNo column
 * @method CasBibliogenQuery orderByGenuscode($order = Criteria::ASC) Order by the GenusCode column
 * @method CasBibliogenQuery orderByQuote($order = Criteria::ASC) Order by the Quote column
 * @method CasBibliogenQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method CasBibliogenQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method CasBibliogenQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method CasBibliogenQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method CasBibliogenQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method CasBibliogenQuery groupByCasGen() Group by the CAS_GEN column
 * @method CasBibliogenQuery groupByCasRefNo() Group by the CAS_REF_NO column
 * @method CasBibliogenQuery groupByPageno() Group by the PageNo column
 * @method CasBibliogenQuery groupByGenuscode() Group by the GenusCode column
 * @method CasBibliogenQuery groupByQuote() Group by the Quote column
 * @method CasBibliogenQuery groupByEntered() Group by the Entered column
 * @method CasBibliogenQuery groupByDateentered() Group by the DateEntered column
 * @method CasBibliogenQuery groupByModified() Group by the Modified column
 * @method CasBibliogenQuery groupByDatemodified() Group by the DateModified column
 * @method CasBibliogenQuery groupByTs() Group by the TS column
 *
 * @method CasBibliogenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CasBibliogenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CasBibliogenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CasBibliogen findOne(PropelPDO $con = null) Return the first CasBibliogen matching the query
 * @method CasBibliogen findOneOrCreate(PropelPDO $con = null) Return the first CasBibliogen matching the query, or a new CasBibliogen object populated from the query conditions when no match is found
 *
 * @method CasBibliogen findOneByCasGen(int $CAS_GEN) Return the first CasBibliogen filtered by the CAS_GEN column
 * @method CasBibliogen findOneByCasRefNo(int $CAS_REF_NO) Return the first CasBibliogen filtered by the CAS_REF_NO column
 * @method CasBibliogen findOneByPageno(string $PageNo) Return the first CasBibliogen filtered by the PageNo column
 * @method CasBibliogen findOneByGenuscode(int $GenusCode) Return the first CasBibliogen filtered by the GenusCode column
 * @method CasBibliogen findOneByQuote(string $Quote) Return the first CasBibliogen filtered by the Quote column
 * @method CasBibliogen findOneByEntered(int $Entered) Return the first CasBibliogen filtered by the Entered column
 * @method CasBibliogen findOneByDateentered(string $DateEntered) Return the first CasBibliogen filtered by the DateEntered column
 * @method CasBibliogen findOneByModified(int $Modified) Return the first CasBibliogen filtered by the Modified column
 * @method CasBibliogen findOneByDatemodified(string $DateModified) Return the first CasBibliogen filtered by the DateModified column
 * @method CasBibliogen findOneByTs(string $TS) Return the first CasBibliogen filtered by the TS column
 *
 * @method array findByCasGen(int $CAS_GEN) Return CasBibliogen objects filtered by the CAS_GEN column
 * @method array findByCasRefNo(int $CAS_REF_NO) Return CasBibliogen objects filtered by the CAS_REF_NO column
 * @method array findByPageno(string $PageNo) Return CasBibliogen objects filtered by the PageNo column
 * @method array findByGenuscode(int $GenusCode) Return CasBibliogen objects filtered by the GenusCode column
 * @method array findByQuote(string $Quote) Return CasBibliogen objects filtered by the Quote column
 * @method array findByEntered(int $Entered) Return CasBibliogen objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return CasBibliogen objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return CasBibliogen objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return CasBibliogen objects filtered by the DateModified column
 * @method array findByTs(string $TS) Return CasBibliogen objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCasBibliogenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCasBibliogenQuery object.
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
            $modelName = 'CasBibliogen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CasBibliogenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CasBibliogenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CasBibliogenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CasBibliogenQuery) {
            return $criteria;
        }
        $query = new CasBibliogenQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$CAS_GEN, $CAS_REF_NO]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CasBibliogen|CasBibliogen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CasBibliogenPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CasBibliogenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CasBibliogen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `CAS_GEN`, `CAS_REF_NO`, `PageNo`, `GenusCode`, `Quote`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `TS` FROM `cas_bibliogen` WHERE `CAS_GEN` = :p0 AND `CAS_REF_NO` = :p1';
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
            $obj = new CasBibliogen();
            $obj->hydrate($row);
            CasBibliogenPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CasBibliogen|CasBibliogen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CasBibliogen[]|mixed the list of results, formatted by the current formatter
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
     * @return CasBibliogenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CasBibliogenPeer::CAS_GEN, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CasBibliogenPeer::CAS_REF_NO, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CasBibliogenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CasBibliogenPeer::CAS_GEN, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CasBibliogenPeer::CAS_REF_NO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the CAS_GEN column
     *
     * Example usage:
     * <code>
     * $query->filterByCasGen(1234); // WHERE CAS_GEN = 1234
     * $query->filterByCasGen(array(12, 34)); // WHERE CAS_GEN IN (12, 34)
     * $query->filterByCasGen(array('min' => 12)); // WHERE CAS_GEN >= 12
     * $query->filterByCasGen(array('max' => 12)); // WHERE CAS_GEN <= 12
     * </code>
     *
     * @param     mixed $casGen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CasBibliogenQuery The current query, for fluid interface
     */
    public function filterByCasGen($casGen = null, $comparison = null)
    {
        if (is_array($casGen)) {
            $useMinMax = false;
            if (isset($casGen['min'])) {
                $this->addUsingAlias(CasBibliogenPeer::CAS_GEN, $casGen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($casGen['max'])) {
                $this->addUsingAlias(CasBibliogenPeer::CAS_GEN, $casGen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliogenPeer::CAS_GEN, $casGen, $comparison);
    }

    /**
     * Filter the query on the CAS_REF_NO column
     *
     * Example usage:
     * <code>
     * $query->filterByCasRefNo(1234); // WHERE CAS_REF_NO = 1234
     * $query->filterByCasRefNo(array(12, 34)); // WHERE CAS_REF_NO IN (12, 34)
     * $query->filterByCasRefNo(array('min' => 12)); // WHERE CAS_REF_NO >= 12
     * $query->filterByCasRefNo(array('max' => 12)); // WHERE CAS_REF_NO <= 12
     * </code>
     *
     * @param     mixed $casRefNo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CasBibliogenQuery The current query, for fluid interface
     */
    public function filterByCasRefNo($casRefNo = null, $comparison = null)
    {
        if (is_array($casRefNo)) {
            $useMinMax = false;
            if (isset($casRefNo['min'])) {
                $this->addUsingAlias(CasBibliogenPeer::CAS_REF_NO, $casRefNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($casRefNo['max'])) {
                $this->addUsingAlias(CasBibliogenPeer::CAS_REF_NO, $casRefNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliogenPeer::CAS_REF_NO, $casRefNo, $comparison);
    }

    /**
     * Filter the query on the PageNo column
     *
     * Example usage:
     * <code>
     * $query->filterByPageno('fooValue');   // WHERE PageNo = 'fooValue'
     * $query->filterByPageno('%fooValue%'); // WHERE PageNo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pageno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CasBibliogenQuery The current query, for fluid interface
     */
    public function filterByPageno($pageno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pageno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pageno)) {
                $pageno = str_replace('*', '%', $pageno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CasBibliogenPeer::PAGENO, $pageno, $comparison);
    }

    /**
     * Filter the query on the GenusCode column
     *
     * Example usage:
     * <code>
     * $query->filterByGenuscode(1234); // WHERE GenusCode = 1234
     * $query->filterByGenuscode(array(12, 34)); // WHERE GenusCode IN (12, 34)
     * $query->filterByGenuscode(array('min' => 12)); // WHERE GenusCode >= 12
     * $query->filterByGenuscode(array('max' => 12)); // WHERE GenusCode <= 12
     * </code>
     *
     * @param     mixed $genuscode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CasBibliogenQuery The current query, for fluid interface
     */
    public function filterByGenuscode($genuscode = null, $comparison = null)
    {
        if (is_array($genuscode)) {
            $useMinMax = false;
            if (isset($genuscode['min'])) {
                $this->addUsingAlias(CasBibliogenPeer::GENUSCODE, $genuscode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genuscode['max'])) {
                $this->addUsingAlias(CasBibliogenPeer::GENUSCODE, $genuscode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliogenPeer::GENUSCODE, $genuscode, $comparison);
    }

    /**
     * Filter the query on the Quote column
     *
     * Example usage:
     * <code>
     * $query->filterByQuote('fooValue');   // WHERE Quote = 'fooValue'
     * $query->filterByQuote('%fooValue%'); // WHERE Quote LIKE '%fooValue%'
     * </code>
     *
     * @param     string $quote The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CasBibliogenQuery The current query, for fluid interface
     */
    public function filterByQuote($quote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($quote)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $quote)) {
                $quote = str_replace('*', '%', $quote);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CasBibliogenPeer::QUOTE, $quote, $comparison);
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
     * @return CasBibliogenQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(CasBibliogenPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(CasBibliogenPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliogenPeer::ENTERED, $entered, $comparison);
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
     * @return CasBibliogenQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(CasBibliogenPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(CasBibliogenPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliogenPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return CasBibliogenQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(CasBibliogenPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(CasBibliogenPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliogenPeer::MODIFIED, $modified, $comparison);
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
     * @return CasBibliogenQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(CasBibliogenPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(CasBibliogenPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliogenPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return CasBibliogenQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(CasBibliogenPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(CasBibliogenPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliogenPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CasBibliogen $casBibliogen Object to remove from the list of results
     *
     * @return CasBibliogenQuery The current query, for fluid interface
     */
    public function prune($casBibliogen = null)
    {
        if ($casBibliogen) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CasBibliogenPeer::CAS_GEN), $casBibliogen->getCasGen(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CasBibliogenPeer::CAS_REF_NO), $casBibliogen->getCasRefNo(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
