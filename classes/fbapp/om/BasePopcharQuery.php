<?php


/**
 * Base class that represents a query for the 'popchar' table.
 *
 *
 *
 * @method PopcharQuery orderByAutoctr($order = Criteria::ASC) Order by the Autoctr column
 * @method PopcharQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method PopcharQuery orderByStockcode($order = Criteria::ASC) Order by the Stockcode column
 * @method PopcharQuery orderByPopcharrefno($order = Criteria::ASC) Order by the PopCharRefNo column
 * @method PopcharQuery orderBySex($order = Criteria::ASC) Order by the Sex column
 * @method PopcharQuery orderBySourceref($order = Criteria::ASC) Order by the SourceRef column
 * @method PopcharQuery orderByWmax($order = Criteria::ASC) Order by the Wmax column
 * @method PopcharQuery orderByTypeweight($order = Criteria::ASC) Order by the TypeWeight column
 * @method PopcharQuery orderByLmax($order = Criteria::ASC) Order by the Lmax column
 * @method PopcharQuery orderByType($order = Criteria::ASC) Order by the Type column
 * @method PopcharQuery orderByTmax($order = Criteria::ASC) Order by the tmax column
 * @method PopcharQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method PopcharQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method PopcharQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method PopcharQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method PopcharQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method PopcharQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method PopcharQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method PopcharQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method PopcharQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method PopcharQuery orderBySamewl($order = Criteria::ASC) Order by the SameWL column
 * @method PopcharQuery orderBySamelt($order = Criteria::ASC) Order by the SameLt column
 * @method PopcharQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method PopcharQuery groupByAutoctr() Group by the Autoctr column
 * @method PopcharQuery groupBySpeccode() Group by the Speccode column
 * @method PopcharQuery groupByStockcode() Group by the Stockcode column
 * @method PopcharQuery groupByPopcharrefno() Group by the PopCharRefNo column
 * @method PopcharQuery groupBySex() Group by the Sex column
 * @method PopcharQuery groupBySourceref() Group by the SourceRef column
 * @method PopcharQuery groupByWmax() Group by the Wmax column
 * @method PopcharQuery groupByTypeweight() Group by the TypeWeight column
 * @method PopcharQuery groupByLmax() Group by the Lmax column
 * @method PopcharQuery groupByType() Group by the Type column
 * @method PopcharQuery groupByTmax() Group by the tmax column
 * @method PopcharQuery groupByLocality() Group by the Locality column
 * @method PopcharQuery groupByCCode() Group by the C_Code column
 * @method PopcharQuery groupByEntered() Group by the Entered column
 * @method PopcharQuery groupByDateentered() Group by the DateEntered column
 * @method PopcharQuery groupByModified() Group by the Modified column
 * @method PopcharQuery groupByDatemodified() Group by the DateModified column
 * @method PopcharQuery groupByExpert() Group by the Expert column
 * @method PopcharQuery groupByDatechecked() Group by the DateChecked column
 * @method PopcharQuery groupByComments() Group by the Comments column
 * @method PopcharQuery groupBySamewl() Group by the SameWL column
 * @method PopcharQuery groupBySamelt() Group by the SameLt column
 * @method PopcharQuery groupByTs() Group by the TS column
 *
 * @method PopcharQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PopcharQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PopcharQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Popchar findOne(PropelPDO $con = null) Return the first Popchar matching the query
 * @method Popchar findOneOrCreate(PropelPDO $con = null) Return the first Popchar matching the query, or a new Popchar object populated from the query conditions when no match is found
 *
 * @method Popchar findOneByAutoctr(int $Autoctr) Return the first Popchar filtered by the Autoctr column
 * @method Popchar findOneBySpeccode(int $Speccode) Return the first Popchar filtered by the Speccode column
 * @method Popchar findOneByStockcode(int $Stockcode) Return the first Popchar filtered by the Stockcode column
 * @method Popchar findOneByPopcharrefno(int $PopCharRefNo) Return the first Popchar filtered by the PopCharRefNo column
 * @method Popchar findOneBySex(string $Sex) Return the first Popchar filtered by the Sex column
 * @method Popchar findOneBySourceref(int $SourceRef) Return the first Popchar filtered by the SourceRef column
 * @method Popchar findOneByWmax(double $Wmax) Return the first Popchar filtered by the Wmax column
 * @method Popchar findOneByTypeweight(string $TypeWeight) Return the first Popchar filtered by the TypeWeight column
 * @method Popchar findOneByLmax(double $Lmax) Return the first Popchar filtered by the Lmax column
 * @method Popchar findOneByType(string $Type) Return the first Popchar filtered by the Type column
 * @method Popchar findOneByTmax(double $tmax) Return the first Popchar filtered by the tmax column
 * @method Popchar findOneByLocality(string $Locality) Return the first Popchar filtered by the Locality column
 * @method Popchar findOneByCCode(string $C_Code) Return the first Popchar filtered by the C_Code column
 * @method Popchar findOneByEntered(int $Entered) Return the first Popchar filtered by the Entered column
 * @method Popchar findOneByDateentered(string $DateEntered) Return the first Popchar filtered by the DateEntered column
 * @method Popchar findOneByModified(int $Modified) Return the first Popchar filtered by the Modified column
 * @method Popchar findOneByDatemodified(string $DateModified) Return the first Popchar filtered by the DateModified column
 * @method Popchar findOneByExpert(int $Expert) Return the first Popchar filtered by the Expert column
 * @method Popchar findOneByDatechecked(string $DateChecked) Return the first Popchar filtered by the DateChecked column
 * @method Popchar findOneByComments(string $Comments) Return the first Popchar filtered by the Comments column
 * @method Popchar findOneBySamewl(int $SameWL) Return the first Popchar filtered by the SameWL column
 * @method Popchar findOneBySamelt(int $SameLt) Return the first Popchar filtered by the SameLt column
 * @method Popchar findOneByTs(string $TS) Return the first Popchar filtered by the TS column
 *
 * @method array findByAutoctr(int $Autoctr) Return Popchar objects filtered by the Autoctr column
 * @method array findBySpeccode(int $Speccode) Return Popchar objects filtered by the Speccode column
 * @method array findByStockcode(int $Stockcode) Return Popchar objects filtered by the Stockcode column
 * @method array findByPopcharrefno(int $PopCharRefNo) Return Popchar objects filtered by the PopCharRefNo column
 * @method array findBySex(string $Sex) Return Popchar objects filtered by the Sex column
 * @method array findBySourceref(int $SourceRef) Return Popchar objects filtered by the SourceRef column
 * @method array findByWmax(double $Wmax) Return Popchar objects filtered by the Wmax column
 * @method array findByTypeweight(string $TypeWeight) Return Popchar objects filtered by the TypeWeight column
 * @method array findByLmax(double $Lmax) Return Popchar objects filtered by the Lmax column
 * @method array findByType(string $Type) Return Popchar objects filtered by the Type column
 * @method array findByTmax(double $tmax) Return Popchar objects filtered by the tmax column
 * @method array findByLocality(string $Locality) Return Popchar objects filtered by the Locality column
 * @method array findByCCode(string $C_Code) Return Popchar objects filtered by the C_Code column
 * @method array findByEntered(int $Entered) Return Popchar objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Popchar objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Popchar objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Popchar objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Popchar objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Popchar objects filtered by the DateChecked column
 * @method array findByComments(string $Comments) Return Popchar objects filtered by the Comments column
 * @method array findBySamewl(int $SameWL) Return Popchar objects filtered by the SameWL column
 * @method array findBySamelt(int $SameLt) Return Popchar objects filtered by the SameLt column
 * @method array findByTs(string $TS) Return Popchar objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePopcharQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePopcharQuery object.
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
            $modelName = 'Popchar';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PopcharQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PopcharQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PopcharQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PopcharQuery) {
            return $criteria;
        }
        $query = new PopcharQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$Stockcode, $PopCharRefNo, $Sex, $Locality]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Popchar|Popchar[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PopcharPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PopcharPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Popchar A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Autoctr`, `Speccode`, `Stockcode`, `PopCharRefNo`, `Sex`, `SourceRef`, `Wmax`, `TypeWeight`, `Lmax`, `Type`, `tmax`, `Locality`, `C_Code`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Comments`, `SameWL`, `SameLt`, `TS` FROM `popchar` WHERE `Stockcode` = :p0 AND `PopCharRefNo` = :p1 AND `Sex` = :p2 AND `Locality` = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Popchar();
            $obj->hydrate($row);
            PopcharPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3])));
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
     * @return Popchar|Popchar[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Popchar[]|mixed the list of results, formatted by the current formatter
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
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(PopcharPeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PopcharPeer::POPCHARREFNO, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(PopcharPeer::SEX, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(PopcharPeer::LOCALITY, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(PopcharPeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PopcharPeer::POPCHARREFNO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(PopcharPeer::SEX, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(PopcharPeer::LOCALITY, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the Autoctr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE Autoctr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE Autoctr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE Autoctr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE Autoctr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(PopcharPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(PopcharPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the Speccode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE Speccode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE Speccode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE Speccode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE Speccode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(PopcharPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(PopcharPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::SPECCODE, $speccode, $comparison);
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
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(PopcharPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(PopcharPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the PopCharRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByPopcharrefno(1234); // WHERE PopCharRefNo = 1234
     * $query->filterByPopcharrefno(array(12, 34)); // WHERE PopCharRefNo IN (12, 34)
     * $query->filterByPopcharrefno(array('min' => 12)); // WHERE PopCharRefNo >= 12
     * $query->filterByPopcharrefno(array('max' => 12)); // WHERE PopCharRefNo <= 12
     * </code>
     *
     * @param     mixed $popcharrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByPopcharrefno($popcharrefno = null, $comparison = null)
    {
        if (is_array($popcharrefno)) {
            $useMinMax = false;
            if (isset($popcharrefno['min'])) {
                $this->addUsingAlias(PopcharPeer::POPCHARREFNO, $popcharrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($popcharrefno['max'])) {
                $this->addUsingAlias(PopcharPeer::POPCHARREFNO, $popcharrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::POPCHARREFNO, $popcharrefno, $comparison);
    }

    /**
     * Filter the query on the Sex column
     *
     * Example usage:
     * <code>
     * $query->filterBySex('fooValue');   // WHERE Sex = 'fooValue'
     * $query->filterBySex('%fooValue%'); // WHERE Sex LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sex The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterBySex($sex = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sex)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sex)) {
                $sex = str_replace('*', '%', $sex);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopcharPeer::SEX, $sex, $comparison);
    }

    /**
     * Filter the query on the SourceRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySourceref(1234); // WHERE SourceRef = 1234
     * $query->filterBySourceref(array(12, 34)); // WHERE SourceRef IN (12, 34)
     * $query->filterBySourceref(array('min' => 12)); // WHERE SourceRef >= 12
     * $query->filterBySourceref(array('max' => 12)); // WHERE SourceRef <= 12
     * </code>
     *
     * @param     mixed $sourceref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterBySourceref($sourceref = null, $comparison = null)
    {
        if (is_array($sourceref)) {
            $useMinMax = false;
            if (isset($sourceref['min'])) {
                $this->addUsingAlias(PopcharPeer::SOURCEREF, $sourceref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sourceref['max'])) {
                $this->addUsingAlias(PopcharPeer::SOURCEREF, $sourceref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::SOURCEREF, $sourceref, $comparison);
    }

    /**
     * Filter the query on the Wmax column
     *
     * Example usage:
     * <code>
     * $query->filterByWmax(1234); // WHERE Wmax = 1234
     * $query->filterByWmax(array(12, 34)); // WHERE Wmax IN (12, 34)
     * $query->filterByWmax(array('min' => 12)); // WHERE Wmax >= 12
     * $query->filterByWmax(array('max' => 12)); // WHERE Wmax <= 12
     * </code>
     *
     * @param     mixed $wmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByWmax($wmax = null, $comparison = null)
    {
        if (is_array($wmax)) {
            $useMinMax = false;
            if (isset($wmax['min'])) {
                $this->addUsingAlias(PopcharPeer::WMAX, $wmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wmax['max'])) {
                $this->addUsingAlias(PopcharPeer::WMAX, $wmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::WMAX, $wmax, $comparison);
    }

    /**
     * Filter the query on the TypeWeight column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeweight('fooValue');   // WHERE TypeWeight = 'fooValue'
     * $query->filterByTypeweight('%fooValue%'); // WHERE TypeWeight LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeweight The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByTypeweight($typeweight = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeweight)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeweight)) {
                $typeweight = str_replace('*', '%', $typeweight);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopcharPeer::TYPEWEIGHT, $typeweight, $comparison);
    }

    /**
     * Filter the query on the Lmax column
     *
     * Example usage:
     * <code>
     * $query->filterByLmax(1234); // WHERE Lmax = 1234
     * $query->filterByLmax(array(12, 34)); // WHERE Lmax IN (12, 34)
     * $query->filterByLmax(array('min' => 12)); // WHERE Lmax >= 12
     * $query->filterByLmax(array('max' => 12)); // WHERE Lmax <= 12
     * </code>
     *
     * @param     mixed $lmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByLmax($lmax = null, $comparison = null)
    {
        if (is_array($lmax)) {
            $useMinMax = false;
            if (isset($lmax['min'])) {
                $this->addUsingAlias(PopcharPeer::LMAX, $lmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lmax['max'])) {
                $this->addUsingAlias(PopcharPeer::LMAX, $lmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::LMAX, $lmax, $comparison);
    }

    /**
     * Filter the query on the Type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE Type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE Type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopcharPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the tmax column
     *
     * Example usage:
     * <code>
     * $query->filterByTmax(1234); // WHERE tmax = 1234
     * $query->filterByTmax(array(12, 34)); // WHERE tmax IN (12, 34)
     * $query->filterByTmax(array('min' => 12)); // WHERE tmax >= 12
     * $query->filterByTmax(array('max' => 12)); // WHERE tmax <= 12
     * </code>
     *
     * @param     mixed $tmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByTmax($tmax = null, $comparison = null)
    {
        if (is_array($tmax)) {
            $useMinMax = false;
            if (isset($tmax['min'])) {
                $this->addUsingAlias(PopcharPeer::TMAX, $tmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tmax['max'])) {
                $this->addUsingAlias(PopcharPeer::TMAX, $tmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::TMAX, $tmax, $comparison);
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
     * @return PopcharQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PopcharPeer::LOCALITY, $locality, $comparison);
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
     * @return PopcharQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PopcharPeer::C_CODE, $cCode, $comparison);
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
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(PopcharPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(PopcharPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::ENTERED, $entered, $comparison);
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
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(PopcharPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(PopcharPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(PopcharPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(PopcharPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::MODIFIED, $modified, $comparison);
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
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(PopcharPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(PopcharPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(PopcharPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(PopcharPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::EXPERT, $expert, $comparison);
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
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(PopcharPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(PopcharPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return PopcharQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PopcharPeer::COMMENTS, $comments, $comparison);
    }

    /**
     * Filter the query on the SameWL column
     *
     * Example usage:
     * <code>
     * $query->filterBySamewl(1234); // WHERE SameWL = 1234
     * $query->filterBySamewl(array(12, 34)); // WHERE SameWL IN (12, 34)
     * $query->filterBySamewl(array('min' => 12)); // WHERE SameWL >= 12
     * $query->filterBySamewl(array('max' => 12)); // WHERE SameWL <= 12
     * </code>
     *
     * @param     mixed $samewl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterBySamewl($samewl = null, $comparison = null)
    {
        if (is_array($samewl)) {
            $useMinMax = false;
            if (isset($samewl['min'])) {
                $this->addUsingAlias(PopcharPeer::SAMEWL, $samewl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($samewl['max'])) {
                $this->addUsingAlias(PopcharPeer::SAMEWL, $samewl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::SAMEWL, $samewl, $comparison);
    }

    /**
     * Filter the query on the SameLt column
     *
     * Example usage:
     * <code>
     * $query->filterBySamelt(1234); // WHERE SameLt = 1234
     * $query->filterBySamelt(array(12, 34)); // WHERE SameLt IN (12, 34)
     * $query->filterBySamelt(array('min' => 12)); // WHERE SameLt >= 12
     * $query->filterBySamelt(array('max' => 12)); // WHERE SameLt <= 12
     * </code>
     *
     * @param     mixed $samelt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterBySamelt($samelt = null, $comparison = null)
    {
        if (is_array($samelt)) {
            $useMinMax = false;
            if (isset($samelt['min'])) {
                $this->addUsingAlias(PopcharPeer::SAMELT, $samelt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($samelt['max'])) {
                $this->addUsingAlias(PopcharPeer::SAMELT, $samelt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::SAMELT, $samelt, $comparison);
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
     * @return PopcharQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(PopcharPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(PopcharPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopcharPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Popchar $popchar Object to remove from the list of results
     *
     * @return PopcharQuery The current query, for fluid interface
     */
    public function prune($popchar = null)
    {
        if ($popchar) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PopcharPeer::STOCKCODE), $popchar->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PopcharPeer::POPCHARREFNO), $popchar->getPopcharrefno(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(PopcharPeer::SEX), $popchar->getSex(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(PopcharPeer::LOCALITY), $popchar->getLocality(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
