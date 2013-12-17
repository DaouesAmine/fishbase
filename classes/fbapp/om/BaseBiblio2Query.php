<?php


/**
 * Base class that represents a query for the 'biblio2' table.
 *
 *
 *
 * @method Biblio2Query orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method Biblio2Query orderByRefno($order = Criteria::ASC) Order by the RefNo column
 * @method Biblio2Query orderBySyncodeprimary($order = Criteria::ASC) Order by the SynCodePrimary column
 * @method Biblio2Query orderBySyncode($order = Criteria::ASC) Order by the SynCode column
 * @method Biblio2Query orderByRefpage($order = Criteria::ASC) Order by the RefPage column
 * @method Biblio2Query orderByPagefirst($order = Criteria::ASC) Order by the PageFirst column
 * @method Biblio2Query orderByPageinsort($order = Criteria::ASC) Order by the PageInSort column
 * @method Biblio2Query orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method Biblio2Query orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method Biblio2Query orderByQuote($order = Criteria::ASC) Order by the Quote column
 * @method Biblio2Query orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method Biblio2Query orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method Biblio2Query orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method Biblio2Query orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method Biblio2Query orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method Biblio2Query groupByAutoctr() Group by the autoctr column
 * @method Biblio2Query groupByRefno() Group by the RefNo column
 * @method Biblio2Query groupBySyncodeprimary() Group by the SynCodePrimary column
 * @method Biblio2Query groupBySyncode() Group by the SynCode column
 * @method Biblio2Query groupByRefpage() Group by the RefPage column
 * @method Biblio2Query groupByPagefirst() Group by the PageFirst column
 * @method Biblio2Query groupByPageinsort() Group by the PageInSort column
 * @method Biblio2Query groupByLocality() Group by the Locality column
 * @method Biblio2Query groupByComment() Group by the Comment column
 * @method Biblio2Query groupByQuote() Group by the Quote column
 * @method Biblio2Query groupByEntered() Group by the Entered column
 * @method Biblio2Query groupByDateentered() Group by the DateEntered column
 * @method Biblio2Query groupByModified() Group by the Modified column
 * @method Biblio2Query groupByDatemodified() Group by the DateModified column
 * @method Biblio2Query groupByTs() Group by the TS column
 *
 * @method Biblio2Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method Biblio2Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method Biblio2Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Biblio2 findOne(PropelPDO $con = null) Return the first Biblio2 matching the query
 * @method Biblio2 findOneOrCreate(PropelPDO $con = null) Return the first Biblio2 matching the query, or a new Biblio2 object populated from the query conditions when no match is found
 *
 * @method Biblio2 findOneByAutoctr(int $autoctr) Return the first Biblio2 filtered by the autoctr column
 * @method Biblio2 findOneByRefno(int $RefNo) Return the first Biblio2 filtered by the RefNo column
 * @method Biblio2 findOneBySyncodeprimary(int $SynCodePrimary) Return the first Biblio2 filtered by the SynCodePrimary column
 * @method Biblio2 findOneBySyncode(int $SynCode) Return the first Biblio2 filtered by the SynCode column
 * @method Biblio2 findOneByRefpage(string $RefPage) Return the first Biblio2 filtered by the RefPage column
 * @method Biblio2 findOneByPagefirst(int $PageFirst) Return the first Biblio2 filtered by the PageFirst column
 * @method Biblio2 findOneByPageinsort(int $PageInSort) Return the first Biblio2 filtered by the PageInSort column
 * @method Biblio2 findOneByLocality(string $Locality) Return the first Biblio2 filtered by the Locality column
 * @method Biblio2 findOneByComment(string $Comment) Return the first Biblio2 filtered by the Comment column
 * @method Biblio2 findOneByQuote(string $Quote) Return the first Biblio2 filtered by the Quote column
 * @method Biblio2 findOneByEntered(int $Entered) Return the first Biblio2 filtered by the Entered column
 * @method Biblio2 findOneByDateentered(string $DateEntered) Return the first Biblio2 filtered by the DateEntered column
 * @method Biblio2 findOneByModified(int $Modified) Return the first Biblio2 filtered by the Modified column
 * @method Biblio2 findOneByDatemodified(string $DateModified) Return the first Biblio2 filtered by the DateModified column
 * @method Biblio2 findOneByTs(string $TS) Return the first Biblio2 filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Biblio2 objects filtered by the autoctr column
 * @method array findByRefno(int $RefNo) Return Biblio2 objects filtered by the RefNo column
 * @method array findBySyncodeprimary(int $SynCodePrimary) Return Biblio2 objects filtered by the SynCodePrimary column
 * @method array findBySyncode(int $SynCode) Return Biblio2 objects filtered by the SynCode column
 * @method array findByRefpage(string $RefPage) Return Biblio2 objects filtered by the RefPage column
 * @method array findByPagefirst(int $PageFirst) Return Biblio2 objects filtered by the PageFirst column
 * @method array findByPageinsort(int $PageInSort) Return Biblio2 objects filtered by the PageInSort column
 * @method array findByLocality(string $Locality) Return Biblio2 objects filtered by the Locality column
 * @method array findByComment(string $Comment) Return Biblio2 objects filtered by the Comment column
 * @method array findByQuote(string $Quote) Return Biblio2 objects filtered by the Quote column
 * @method array findByEntered(int $Entered) Return Biblio2 objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Biblio2 objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Biblio2 objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Biblio2 objects filtered by the DateModified column
 * @method array findByTs(string $TS) Return Biblio2 objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseBiblio2Query extends ModelCriteria
{
    /**
     * Initializes internal state of BaseBiblio2Query object.
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
            $modelName = 'Biblio2';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new Biblio2Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   Biblio2Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return Biblio2Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof Biblio2Query) {
            return $criteria;
        }
        $query = new Biblio2Query(null, null, $modelAlias);

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
                         A Primary key composition: [$RefNo, $SynCodePrimary, $SynCode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Biblio2|Biblio2[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = Biblio2Peer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(Biblio2Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Biblio2 A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `RefNo`, `SynCodePrimary`, `SynCode`, `RefPage`, `PageFirst`, `PageInSort`, `Locality`, `Comment`, `Quote`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `TS` FROM `biblio2` WHERE `RefNo` = :p0 AND `SynCodePrimary` = :p1 AND `SynCode` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Biblio2();
            $obj->hydrate($row);
            Biblio2Peer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Biblio2|Biblio2[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Biblio2[]|mixed the list of results, formatted by the current formatter
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
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(Biblio2Peer::REFNO, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(Biblio2Peer::SYNCODEPRIMARY, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(Biblio2Peer::SYNCODE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(Biblio2Peer::REFNO, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(Biblio2Peer::SYNCODEPRIMARY, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(Biblio2Peer::SYNCODE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(Biblio2Peer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(Biblio2Peer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Biblio2Peer::AUTOCTR, $autoctr, $comparison);
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
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(Biblio2Peer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(Biblio2Peer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Biblio2Peer::REFNO, $refno, $comparison);
    }

    /**
     * Filter the query on the SynCodePrimary column
     *
     * Example usage:
     * <code>
     * $query->filterBySyncodeprimary(1234); // WHERE SynCodePrimary = 1234
     * $query->filterBySyncodeprimary(array(12, 34)); // WHERE SynCodePrimary IN (12, 34)
     * $query->filterBySyncodeprimary(array('min' => 12)); // WHERE SynCodePrimary >= 12
     * $query->filterBySyncodeprimary(array('max' => 12)); // WHERE SynCodePrimary <= 12
     * </code>
     *
     * @param     mixed $syncodeprimary The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterBySyncodeprimary($syncodeprimary = null, $comparison = null)
    {
        if (is_array($syncodeprimary)) {
            $useMinMax = false;
            if (isset($syncodeprimary['min'])) {
                $this->addUsingAlias(Biblio2Peer::SYNCODEPRIMARY, $syncodeprimary['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncodeprimary['max'])) {
                $this->addUsingAlias(Biblio2Peer::SYNCODEPRIMARY, $syncodeprimary['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Biblio2Peer::SYNCODEPRIMARY, $syncodeprimary, $comparison);
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
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterBySyncode($syncode = null, $comparison = null)
    {
        if (is_array($syncode)) {
            $useMinMax = false;
            if (isset($syncode['min'])) {
                $this->addUsingAlias(Biblio2Peer::SYNCODE, $syncode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($syncode['max'])) {
                $this->addUsingAlias(Biblio2Peer::SYNCODE, $syncode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Biblio2Peer::SYNCODE, $syncode, $comparison);
    }

    /**
     * Filter the query on the RefPage column
     *
     * Example usage:
     * <code>
     * $query->filterByRefpage('fooValue');   // WHERE RefPage = 'fooValue'
     * $query->filterByRefpage('%fooValue%'); // WHERE RefPage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $refpage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterByRefpage($refpage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($refpage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $refpage)) {
                $refpage = str_replace('*', '%', $refpage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Biblio2Peer::REFPAGE, $refpage, $comparison);
    }

    /**
     * Filter the query on the PageFirst column
     *
     * Example usage:
     * <code>
     * $query->filterByPagefirst(1234); // WHERE PageFirst = 1234
     * $query->filterByPagefirst(array(12, 34)); // WHERE PageFirst IN (12, 34)
     * $query->filterByPagefirst(array('min' => 12)); // WHERE PageFirst >= 12
     * $query->filterByPagefirst(array('max' => 12)); // WHERE PageFirst <= 12
     * </code>
     *
     * @param     mixed $pagefirst The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterByPagefirst($pagefirst = null, $comparison = null)
    {
        if (is_array($pagefirst)) {
            $useMinMax = false;
            if (isset($pagefirst['min'])) {
                $this->addUsingAlias(Biblio2Peer::PAGEFIRST, $pagefirst['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pagefirst['max'])) {
                $this->addUsingAlias(Biblio2Peer::PAGEFIRST, $pagefirst['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Biblio2Peer::PAGEFIRST, $pagefirst, $comparison);
    }

    /**
     * Filter the query on the PageInSort column
     *
     * Example usage:
     * <code>
     * $query->filterByPageinsort(1234); // WHERE PageInSort = 1234
     * $query->filterByPageinsort(array(12, 34)); // WHERE PageInSort IN (12, 34)
     * $query->filterByPageinsort(array('min' => 12)); // WHERE PageInSort >= 12
     * $query->filterByPageinsort(array('max' => 12)); // WHERE PageInSort <= 12
     * </code>
     *
     * @param     mixed $pageinsort The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterByPageinsort($pageinsort = null, $comparison = null)
    {
        if (is_array($pageinsort)) {
            $useMinMax = false;
            if (isset($pageinsort['min'])) {
                $this->addUsingAlias(Biblio2Peer::PAGEINSORT, $pageinsort['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pageinsort['max'])) {
                $this->addUsingAlias(Biblio2Peer::PAGEINSORT, $pageinsort['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Biblio2Peer::PAGEINSORT, $pageinsort, $comparison);
    }

    /**
     * Filter the query on the Locality column
     *
     * Example usage:
     * <code>
     * $query->filterByLocality('fooValue');   // WHERE Locality = 'fooValue'
     * $query->filterByLocality('%fooValue%'); // WHERE Locality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterByLocality($locality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $locality)) {
                $locality = str_replace('*', '%', $locality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Biblio2Peer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the Comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE Comment = 'fooValue'
     * $query->filterByComment('%fooValue%'); // WHERE Comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comment)) {
                $comment = str_replace('*', '%', $comment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(Biblio2Peer::COMMENT, $comment, $comparison);
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
     * @return Biblio2Query The current query, for fluid interface
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

        return $this->addUsingAlias(Biblio2Peer::QUOTE, $quote, $comparison);
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
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(Biblio2Peer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(Biblio2Peer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Biblio2Peer::ENTERED, $entered, $comparison);
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
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(Biblio2Peer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(Biblio2Peer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Biblio2Peer::DATEENTERED, $dateentered, $comparison);
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
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(Biblio2Peer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(Biblio2Peer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Biblio2Peer::MODIFIED, $modified, $comparison);
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
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(Biblio2Peer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(Biblio2Peer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Biblio2Peer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return Biblio2Query The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(Biblio2Peer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(Biblio2Peer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(Biblio2Peer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Biblio2 $biblio2 Object to remove from the list of results
     *
     * @return Biblio2Query The current query, for fluid interface
     */
    public function prune($biblio2 = null)
    {
        if ($biblio2) {
            $this->addCond('pruneCond0', $this->getAliasedColName(Biblio2Peer::REFNO), $biblio2->getRefno(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(Biblio2Peer::SYNCODEPRIMARY), $biblio2->getSyncodeprimary(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(Biblio2Peer::SYNCODE), $biblio2->getSyncode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
