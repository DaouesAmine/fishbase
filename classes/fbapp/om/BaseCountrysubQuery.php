<?php


/**
 * Base class that represents a query for the 'countrysub' table.
 *
 *
 *
 * @method CountrysubQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method CountrysubQuery orderByStockcode($order = Criteria::ASC) Order by the Stockcode column
 * @method CountrysubQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method CountrysubQuery orderByCsubCode($order = Criteria::ASC) Order by the CSub_Code column
 * @method CountrysubQuery orderByCsubrefno($order = Criteria::ASC) Order by the CSubRefNo column
 * @method CountrysubQuery orderByStatus($order = Criteria::ASC) Order by the Status column
 * @method CountrysubQuery orderByAbundance($order = Criteria::ASC) Order by the Abundance column
 * @method CountrysubQuery orderByRefabundance($order = Criteria::ASC) Order by the RefAbundance column
 * @method CountrysubQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method CountrysubQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method CountrysubQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method CountrysubQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method CountrysubQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method CountrysubQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method CountrysubQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method CountrysubQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method CountrysubQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method CountrysubQuery groupBySpeccode() Group by the SpecCode column
 * @method CountrysubQuery groupByStockcode() Group by the Stockcode column
 * @method CountrysubQuery groupByCCode() Group by the C_Code column
 * @method CountrysubQuery groupByCsubCode() Group by the CSub_Code column
 * @method CountrysubQuery groupByCsubrefno() Group by the CSubRefNo column
 * @method CountrysubQuery groupByStatus() Group by the Status column
 * @method CountrysubQuery groupByAbundance() Group by the Abundance column
 * @method CountrysubQuery groupByRefabundance() Group by the RefAbundance column
 * @method CountrysubQuery groupByComments() Group by the Comments column
 * @method CountrysubQuery groupByEntered() Group by the Entered column
 * @method CountrysubQuery groupByDateentered() Group by the DateEntered column
 * @method CountrysubQuery groupByModified() Group by the Modified column
 * @method CountrysubQuery groupByDatemodified() Group by the DateModified column
 * @method CountrysubQuery groupByExpert() Group by the Expert column
 * @method CountrysubQuery groupByDatechecked() Group by the DateChecked column
 * @method CountrysubQuery groupByAutoctr() Group by the autoctr column
 * @method CountrysubQuery groupByTs() Group by the TS column
 *
 * @method CountrysubQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CountrysubQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CountrysubQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Countrysub findOne(PropelPDO $con = null) Return the first Countrysub matching the query
 * @method Countrysub findOneOrCreate(PropelPDO $con = null) Return the first Countrysub matching the query, or a new Countrysub object populated from the query conditions when no match is found
 *
 * @method Countrysub findOneBySpeccode(int $SpecCode) Return the first Countrysub filtered by the SpecCode column
 * @method Countrysub findOneByStockcode(int $Stockcode) Return the first Countrysub filtered by the Stockcode column
 * @method Countrysub findOneByCCode(string $C_Code) Return the first Countrysub filtered by the C_Code column
 * @method Countrysub findOneByCsubCode(string $CSub_Code) Return the first Countrysub filtered by the CSub_Code column
 * @method Countrysub findOneByCsubrefno(int $CSubRefNo) Return the first Countrysub filtered by the CSubRefNo column
 * @method Countrysub findOneByStatus(string $Status) Return the first Countrysub filtered by the Status column
 * @method Countrysub findOneByAbundance(string $Abundance) Return the first Countrysub filtered by the Abundance column
 * @method Countrysub findOneByRefabundance(int $RefAbundance) Return the first Countrysub filtered by the RefAbundance column
 * @method Countrysub findOneByComments(string $Comments) Return the first Countrysub filtered by the Comments column
 * @method Countrysub findOneByEntered(int $Entered) Return the first Countrysub filtered by the Entered column
 * @method Countrysub findOneByDateentered(string $DateEntered) Return the first Countrysub filtered by the DateEntered column
 * @method Countrysub findOneByModified(int $Modified) Return the first Countrysub filtered by the Modified column
 * @method Countrysub findOneByDatemodified(string $DateModified) Return the first Countrysub filtered by the DateModified column
 * @method Countrysub findOneByExpert(int $Expert) Return the first Countrysub filtered by the Expert column
 * @method Countrysub findOneByDatechecked(string $DateChecked) Return the first Countrysub filtered by the DateChecked column
 * @method Countrysub findOneByAutoctr(int $autoctr) Return the first Countrysub filtered by the autoctr column
 * @method Countrysub findOneByTs(string $TS) Return the first Countrysub filtered by the TS column
 *
 * @method array findBySpeccode(int $SpecCode) Return Countrysub objects filtered by the SpecCode column
 * @method array findByStockcode(int $Stockcode) Return Countrysub objects filtered by the Stockcode column
 * @method array findByCCode(string $C_Code) Return Countrysub objects filtered by the C_Code column
 * @method array findByCsubCode(string $CSub_Code) Return Countrysub objects filtered by the CSub_Code column
 * @method array findByCsubrefno(int $CSubRefNo) Return Countrysub objects filtered by the CSubRefNo column
 * @method array findByStatus(string $Status) Return Countrysub objects filtered by the Status column
 * @method array findByAbundance(string $Abundance) Return Countrysub objects filtered by the Abundance column
 * @method array findByRefabundance(int $RefAbundance) Return Countrysub objects filtered by the RefAbundance column
 * @method array findByComments(string $Comments) Return Countrysub objects filtered by the Comments column
 * @method array findByEntered(int $Entered) Return Countrysub objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Countrysub objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Countrysub objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Countrysub objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Countrysub objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Countrysub objects filtered by the DateChecked column
 * @method array findByAutoctr(int $autoctr) Return Countrysub objects filtered by the autoctr column
 * @method array findByTs(string $TS) Return Countrysub objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCountrysubQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCountrysubQuery object.
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
            $modelName = 'Countrysub';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CountrysubQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CountrysubQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CountrysubQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CountrysubQuery) {
            return $criteria;
        }
        $query = new CountrysubQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$Stockcode, $C_Code, $CSub_Code]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Countrysub|Countrysub[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CountrysubPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CountrysubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Countrysub A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SpecCode`, `Stockcode`, `C_Code`, `CSub_Code`, `CSubRefNo`, `Status`, `Abundance`, `RefAbundance`, `Comments`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `autoctr`, `TS` FROM `countrysub` WHERE `Stockcode` = :p0 AND `C_Code` = :p1 AND `CSub_Code` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Countrysub();
            $obj->hydrate($row);
            CountrysubPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Countrysub|Countrysub[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Countrysub[]|mixed the list of results, formatted by the current formatter
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
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CountrysubPeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CountrysubPeer::C_CODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CountrysubPeer::CSUB_CODE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CountrysubPeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CountrysubPeer::C_CODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CountrysubPeer::CSUB_CODE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the SpecCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE SpecCode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE SpecCode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE SpecCode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE SpecCode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(CountrysubPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(CountrysubPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the Stockcode column
     *
     * Example usage:
     * <code>
     * $query->filterByStockcode(1234); // WHERE Stockcode = 1234
     * $query->filterByStockcode(array(12, 34)); // WHERE Stockcode IN (12, 34)
     * $query->filterByStockcode(array('min' => 12)); // WHERE Stockcode >= 12
     * $query->filterByStockcode(array('max' => 12)); // WHERE Stockcode <= 12
     * </code>
     *
     * @param     mixed $stockcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(CountrysubPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(CountrysubPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return CountrysubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CountrysubPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the CSub_Code column
     *
     * Example usage:
     * <code>
     * $query->filterByCsubCode('fooValue');   // WHERE CSub_Code = 'fooValue'
     * $query->filterByCsubCode('%fooValue%'); // WHERE CSub_Code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $csubCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByCsubCode($csubCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($csubCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $csubCode)) {
                $csubCode = str_replace('*', '%', $csubCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubPeer::CSUB_CODE, $csubCode, $comparison);
    }

    /**
     * Filter the query on the CSubRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByCsubrefno(1234); // WHERE CSubRefNo = 1234
     * $query->filterByCsubrefno(array(12, 34)); // WHERE CSubRefNo IN (12, 34)
     * $query->filterByCsubrefno(array('min' => 12)); // WHERE CSubRefNo >= 12
     * $query->filterByCsubrefno(array('max' => 12)); // WHERE CSubRefNo <= 12
     * </code>
     *
     * @param     mixed $csubrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByCsubrefno($csubrefno = null, $comparison = null)
    {
        if (is_array($csubrefno)) {
            $useMinMax = false;
            if (isset($csubrefno['min'])) {
                $this->addUsingAlias(CountrysubPeer::CSUBREFNO, $csubrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($csubrefno['max'])) {
                $this->addUsingAlias(CountrysubPeer::CSUBREFNO, $csubrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubPeer::CSUBREFNO, $csubrefno, $comparison);
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
     * @return CountrysubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CountrysubPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the Abundance column
     *
     * Example usage:
     * <code>
     * $query->filterByAbundance('fooValue');   // WHERE Abundance = 'fooValue'
     * $query->filterByAbundance('%fooValue%'); // WHERE Abundance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abundance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByAbundance($abundance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abundance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abundance)) {
                $abundance = str_replace('*', '%', $abundance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubPeer::ABUNDANCE, $abundance, $comparison);
    }

    /**
     * Filter the query on the RefAbundance column
     *
     * Example usage:
     * <code>
     * $query->filterByRefabundance(1234); // WHERE RefAbundance = 1234
     * $query->filterByRefabundance(array(12, 34)); // WHERE RefAbundance IN (12, 34)
     * $query->filterByRefabundance(array('min' => 12)); // WHERE RefAbundance >= 12
     * $query->filterByRefabundance(array('max' => 12)); // WHERE RefAbundance <= 12
     * </code>
     *
     * @param     mixed $refabundance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByRefabundance($refabundance = null, $comparison = null)
    {
        if (is_array($refabundance)) {
            $useMinMax = false;
            if (isset($refabundance['min'])) {
                $this->addUsingAlias(CountrysubPeer::REFABUNDANCE, $refabundance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refabundance['max'])) {
                $this->addUsingAlias(CountrysubPeer::REFABUNDANCE, $refabundance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubPeer::REFABUNDANCE, $refabundance, $comparison);
    }

    /**
     * Filter the query on the Comments column
     *
     * Example usage:
     * <code>
     * $query->filterByComments('fooValue');   // WHERE Comments = 'fooValue'
     * $query->filterByComments('%fooValue%'); // WHERE Comments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByComments($comments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comments)) {
                $comments = str_replace('*', '%', $comments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubPeer::COMMENTS, $comments, $comparison);
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
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(CountrysubPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(CountrysubPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubPeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the DateEntered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('fooValue');   // WHERE DateEntered = 'fooValue'
     * $query->filterByDateentered('%fooValue%'); // WHERE DateEntered LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateentered The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateentered)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateentered)) {
                $dateentered = str_replace('*', '%', $dateentered);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(CountrysubPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(CountrysubPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the DateModified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('fooValue');   // WHERE DateModified = 'fooValue'
     * $query->filterByDatemodified('%fooValue%'); // WHERE DateModified LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datemodified The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datemodified)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datemodified)) {
                $datemodified = str_replace('*', '%', $datemodified);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(CountrysubPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(CountrysubPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubPeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the DateChecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('fooValue');   // WHERE DateChecked = 'fooValue'
     * $query->filterByDatechecked('%fooValue%'); // WHERE DateChecked LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datechecked The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datechecked)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datechecked)) {
                $datechecked = str_replace('*', '%', $datechecked);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountrysubPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the autoctr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE autoctr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE autoctr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE autoctr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE autoctr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(CountrysubPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(CountrysubPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(CountrysubPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(CountrysubPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountrysubPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Countrysub $countrysub Object to remove from the list of results
     *
     * @return CountrysubQuery The current query, for fluid interface
     */
    public function prune($countrysub = null)
    {
        if ($countrysub) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CountrysubPeer::STOCKCODE), $countrysub->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CountrysubPeer::C_CODE), $countrysub->getCCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CountrysubPeer::CSUB_CODE), $countrysub->getCsubCode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
