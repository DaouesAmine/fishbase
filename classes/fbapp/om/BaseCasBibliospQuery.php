<?php


/**
 * Base class that represents a query for the 'cas_bibliosp' table.
 *
 *
 *
 * @method CasBibliospQuery orderByCasSpc($order = Criteria::ASC) Order by the CAS_SPC column
 * @method CasBibliospQuery orderByCasRefNo($order = Criteria::ASC) Order by the CAS_REF_NO column
 * @method CasBibliospQuery orderByPageno($order = Criteria::ASC) Order by the PageNo column
 * @method CasBibliospQuery orderBySyncode($order = Criteria::ASC) Order by the SynCode column
 * @method CasBibliospQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method CasBibliospQuery orderByJuniorsynonym($order = Criteria::ASC) Order by the JuniorSynonym column
 * @method CasBibliospQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method CasBibliospQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method CasBibliospQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method CasBibliospQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 *
 * @method CasBibliospQuery groupByCasSpc() Group by the CAS_SPC column
 * @method CasBibliospQuery groupByCasRefNo() Group by the CAS_REF_NO column
 * @method CasBibliospQuery groupByPageno() Group by the PageNo column
 * @method CasBibliospQuery groupBySyncode() Group by the SynCode column
 * @method CasBibliospQuery groupBySpeccode() Group by the SpecCode column
 * @method CasBibliospQuery groupByJuniorsynonym() Group by the JuniorSynonym column
 * @method CasBibliospQuery groupByEntered() Group by the Entered column
 * @method CasBibliospQuery groupByDateentered() Group by the DateEntered column
 * @method CasBibliospQuery groupByModified() Group by the Modified column
 * @method CasBibliospQuery groupByDatemodified() Group by the DateModified column
 *
 * @method CasBibliospQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CasBibliospQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CasBibliospQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CasBibliosp findOne(PropelPDO $con = null) Return the first CasBibliosp matching the query
 * @method CasBibliosp findOneOrCreate(PropelPDO $con = null) Return the first CasBibliosp matching the query, or a new CasBibliosp object populated from the query conditions when no match is found
 *
 * @method CasBibliosp findOneByCasSpc(int $CAS_SPC) Return the first CasBibliosp filtered by the CAS_SPC column
 * @method CasBibliosp findOneByCasRefNo(int $CAS_REF_NO) Return the first CasBibliosp filtered by the CAS_REF_NO column
 * @method CasBibliosp findOneByPageno(string $PageNo) Return the first CasBibliosp filtered by the PageNo column
 * @method CasBibliosp findOneBySyncode(int $SynCode) Return the first CasBibliosp filtered by the SynCode column
 * @method CasBibliosp findOneBySpeccode(int $SpecCode) Return the first CasBibliosp filtered by the SpecCode column
 * @method CasBibliosp findOneByJuniorsynonym(int $JuniorSynonym) Return the first CasBibliosp filtered by the JuniorSynonym column
 * @method CasBibliosp findOneByEntered(int $Entered) Return the first CasBibliosp filtered by the Entered column
 * @method CasBibliosp findOneByDateentered(string $DateEntered) Return the first CasBibliosp filtered by the DateEntered column
 * @method CasBibliosp findOneByModified(int $Modified) Return the first CasBibliosp filtered by the Modified column
 * @method CasBibliosp findOneByDatemodified(string $DateModified) Return the first CasBibliosp filtered by the DateModified column
 *
 * @method array findByCasSpc(int $CAS_SPC) Return CasBibliosp objects filtered by the CAS_SPC column
 * @method array findByCasRefNo(int $CAS_REF_NO) Return CasBibliosp objects filtered by the CAS_REF_NO column
 * @method array findByPageno(string $PageNo) Return CasBibliosp objects filtered by the PageNo column
 * @method array findBySyncode(int $SynCode) Return CasBibliosp objects filtered by the SynCode column
 * @method array findBySpeccode(int $SpecCode) Return CasBibliosp objects filtered by the SpecCode column
 * @method array findByJuniorsynonym(int $JuniorSynonym) Return CasBibliosp objects filtered by the JuniorSynonym column
 * @method array findByEntered(int $Entered) Return CasBibliosp objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return CasBibliosp objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return CasBibliosp objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return CasBibliosp objects filtered by the DateModified column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCasBibliospQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCasBibliospQuery object.
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
            $modelName = 'CasBibliosp';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CasBibliospQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CasBibliospQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CasBibliospQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CasBibliospQuery) {
            return $criteria;
        }
        $query = new CasBibliospQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$CAS_SPC, $CAS_REF_NO]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CasBibliosp|CasBibliosp[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CasBibliospPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CasBibliospPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CasBibliosp A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `CAS_SPC`, `CAS_REF_NO`, `PageNo`, `SynCode`, `SpecCode`, `JuniorSynonym`, `Entered`, `DateEntered`, `Modified`, `DateModified` FROM `cas_bibliosp` WHERE `CAS_SPC` = :p0 AND `CAS_REF_NO` = :p1';
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
            $obj = new CasBibliosp();
            $obj->hydrate($row);
            CasBibliospPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CasBibliosp|CasBibliosp[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CasBibliosp[]|mixed the list of results, formatted by the current formatter
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
     * @return CasBibliospQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CasBibliospPeer::CAS_SPC, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CasBibliospPeer::CAS_REF_NO, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CasBibliospQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CasBibliospPeer::CAS_SPC, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CasBibliospPeer::CAS_REF_NO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the CAS_SPC column
     *
     * Example usage:
     * <code>
     * $query->filterByCasSpc(1234); // WHERE CAS_SPC = 1234
     * $query->filterByCasSpc(array(12, 34)); // WHERE CAS_SPC IN (12, 34)
     * $query->filterByCasSpc(array('min' => 12)); // WHERE CAS_SPC >= 12
     * $query->filterByCasSpc(array('max' => 12)); // WHERE CAS_SPC <= 12
     * </code>
     *
     * @param     mixed $casSpc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CasBibliospQuery The current query, for fluid interface
     */
    public function filterByCasSpc($casSpc = null, $comparison = null)
    {
        if (is_array($casSpc)) {
            $useMinMax = false;
            if (isset($casSpc['min'])) {
                $this->addUsingAlias(CasBibliospPeer::CAS_SPC, $casSpc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($casSpc['max'])) {
                $this->addUsingAlias(CasBibliospPeer::CAS_SPC, $casSpc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliospPeer::CAS_SPC, $casSpc, $comparison);
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
     * @return CasBibliospQuery The current query, for fluid interface
     */
    public function filterByCasRefNo($casRefNo = null, $comparison = null)
    {
        if (is_array($casRefNo)) {
            $useMinMax = false;
            if (isset($casRefNo['min'])) {
                $this->addUsingAlias(CasBibliospPeer::CAS_REF_NO, $casRefNo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($casRefNo['max'])) {
                $this->addUsingAlias(CasBibliospPeer::CAS_REF_NO, $casRefNo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliospPeer::CAS_REF_NO, $casRefNo, $comparison);
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
     * @return CasBibliospQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CasBibliospPeer::PAGENO, $pageno, $comparison);
    }

    /**
     * Filter the query on the SynCode column
     *
     * Example usage:
     * <code>
     * $query->filterBySyncode(1234); // WHERE SynCode = 1234
     * $query->filterBySyncode(array(12, 34)); // WHERE SynCode IN (12, 34)
     * $query->filterBySyncode(array('min' => 12)); // WHERE SynCode >= 12
     * $query->filterBySyncode(array('max' => 12)); // WHERE SynCode <= 12
     * </code>
     *
     * @param     mixed $syncode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CasBibliospQuery The current query, for fluid interface
     */
    public function filterBySyncode($syncode = null, $comparison = null)
    {
        if (is_array($syncode)) {
            $useMinMax = false;
            if (isset($syncode['min'])) {
                $this->addUsingAlias(CasBibliospPeer::SYNCODE, $syncode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncode['max'])) {
                $this->addUsingAlias(CasBibliospPeer::SYNCODE, $syncode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliospPeer::SYNCODE, $syncode, $comparison);
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
     * @return CasBibliospQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(CasBibliospPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(CasBibliospPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliospPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the JuniorSynonym column
     *
     * Example usage:
     * <code>
     * $query->filterByJuniorsynonym(1234); // WHERE JuniorSynonym = 1234
     * $query->filterByJuniorsynonym(array(12, 34)); // WHERE JuniorSynonym IN (12, 34)
     * $query->filterByJuniorsynonym(array('min' => 12)); // WHERE JuniorSynonym >= 12
     * $query->filterByJuniorsynonym(array('max' => 12)); // WHERE JuniorSynonym <= 12
     * </code>
     *
     * @param     mixed $juniorsynonym The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CasBibliospQuery The current query, for fluid interface
     */
    public function filterByJuniorsynonym($juniorsynonym = null, $comparison = null)
    {
        if (is_array($juniorsynonym)) {
            $useMinMax = false;
            if (isset($juniorsynonym['min'])) {
                $this->addUsingAlias(CasBibliospPeer::JUNIORSYNONYM, $juniorsynonym['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($juniorsynonym['max'])) {
                $this->addUsingAlias(CasBibliospPeer::JUNIORSYNONYM, $juniorsynonym['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliospPeer::JUNIORSYNONYM, $juniorsynonym, $comparison);
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
     * @return CasBibliospQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(CasBibliospPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(CasBibliospPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliospPeer::ENTERED, $entered, $comparison);
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
     * @return CasBibliospQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(CasBibliospPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(CasBibliospPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliospPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return CasBibliospQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(CasBibliospPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(CasBibliospPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliospPeer::MODIFIED, $modified, $comparison);
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
     * @return CasBibliospQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(CasBibliospPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(CasBibliospPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CasBibliospPeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CasBibliosp $casBibliosp Object to remove from the list of results
     *
     * @return CasBibliospQuery The current query, for fluid interface
     */
    public function prune($casBibliosp = null)
    {
        if ($casBibliosp) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CasBibliospPeer::CAS_SPC), $casBibliosp->getCasSpc(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CasBibliospPeer::CAS_REF_NO), $casBibliosp->getCasRefNo(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
