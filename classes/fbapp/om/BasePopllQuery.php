<?php


/**
 * Base class that represents a query for the 'popll' table.
 *
 *
 *
 * @method PopllQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method PopllQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method PopllQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method PopllQuery orderByLength1($order = Criteria::ASC) Order by the Length1 column
 * @method PopllQuery orderByLength2($order = Criteria::ASC) Order by the Length2 column
 * @method PopllQuery orderByA($order = Criteria::ASC) Order by the a column
 * @method PopllQuery orderByB($order = Criteria::ASC) Order by the b column
 * @method PopllQuery orderByLengthmin($order = Criteria::ASC) Order by the LengthMin column
 * @method PopllQuery orderByLengthmax($order = Criteria::ASC) Order by the LengthMax column
 * @method PopllQuery orderByType($order = Criteria::ASC) Order by the Type column
 * @method PopllQuery orderByNumber($order = Criteria::ASC) Order by the Number column
 * @method PopllQuery orderByR($order = Criteria::ASC) Order by the r column
 * @method PopllQuery orderBySex($order = Criteria::ASC) Order by the Sex column
 * @method PopllQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method PopllQuery orderByDataref($order = Criteria::ASC) Order by the DataRef column
 * @method PopllQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method PopllQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method PopllQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method PopllQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method PopllQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method PopllQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method PopllQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method PopllQuery groupByAutoctr() Group by the autoctr column
 * @method PopllQuery groupByStockcode() Group by the StockCode column
 * @method PopllQuery groupBySpeccode() Group by the SpecCode column
 * @method PopllQuery groupByLength1() Group by the Length1 column
 * @method PopllQuery groupByLength2() Group by the Length2 column
 * @method PopllQuery groupByA() Group by the a column
 * @method PopllQuery groupByB() Group by the b column
 * @method PopllQuery groupByLengthmin() Group by the LengthMin column
 * @method PopllQuery groupByLengthmax() Group by the LengthMax column
 * @method PopllQuery groupByType() Group by the Type column
 * @method PopllQuery groupByNumber() Group by the Number column
 * @method PopllQuery groupByR() Group by the r column
 * @method PopllQuery groupBySex() Group by the Sex column
 * @method PopllQuery groupByComment() Group by the Comment column
 * @method PopllQuery groupByDataref() Group by the DataRef column
 * @method PopllQuery groupByEntered() Group by the Entered column
 * @method PopllQuery groupByDateentered() Group by the DateEntered column
 * @method PopllQuery groupByModified() Group by the Modified column
 * @method PopllQuery groupByDatemodified() Group by the DateModified column
 * @method PopllQuery groupByExpert() Group by the Expert column
 * @method PopllQuery groupByDatechecked() Group by the DateChecked column
 * @method PopllQuery groupByTs() Group by the TS column
 *
 * @method PopllQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PopllQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PopllQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Popll findOne(PropelPDO $con = null) Return the first Popll matching the query
 * @method Popll findOneOrCreate(PropelPDO $con = null) Return the first Popll matching the query, or a new Popll object populated from the query conditions when no match is found
 *
 * @method Popll findOneByStockcode(int $StockCode) Return the first Popll filtered by the StockCode column
 * @method Popll findOneBySpeccode(int $SpecCode) Return the first Popll filtered by the SpecCode column
 * @method Popll findOneByLength1(string $Length1) Return the first Popll filtered by the Length1 column
 * @method Popll findOneByLength2(string $Length2) Return the first Popll filtered by the Length2 column
 * @method Popll findOneByA(double $a) Return the first Popll filtered by the a column
 * @method Popll findOneByB(double $b) Return the first Popll filtered by the b column
 * @method Popll findOneByLengthmin(double $LengthMin) Return the first Popll filtered by the LengthMin column
 * @method Popll findOneByLengthmax(double $LengthMax) Return the first Popll filtered by the LengthMax column
 * @method Popll findOneByType(string $Type) Return the first Popll filtered by the Type column
 * @method Popll findOneByNumber(int $Number) Return the first Popll filtered by the Number column
 * @method Popll findOneByR(double $r) Return the first Popll filtered by the r column
 * @method Popll findOneBySex(string $Sex) Return the first Popll filtered by the Sex column
 * @method Popll findOneByComment(string $Comment) Return the first Popll filtered by the Comment column
 * @method Popll findOneByDataref(int $DataRef) Return the first Popll filtered by the DataRef column
 * @method Popll findOneByEntered(double $Entered) Return the first Popll filtered by the Entered column
 * @method Popll findOneByDateentered(string $DateEntered) Return the first Popll filtered by the DateEntered column
 * @method Popll findOneByModified(double $Modified) Return the first Popll filtered by the Modified column
 * @method Popll findOneByDatemodified(string $DateModified) Return the first Popll filtered by the DateModified column
 * @method Popll findOneByExpert(double $Expert) Return the first Popll filtered by the Expert column
 * @method Popll findOneByDatechecked(string $DateChecked) Return the first Popll filtered by the DateChecked column
 * @method Popll findOneByTs(string $TS) Return the first Popll filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Popll objects filtered by the autoctr column
 * @method array findByStockcode(int $StockCode) Return Popll objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Popll objects filtered by the SpecCode column
 * @method array findByLength1(string $Length1) Return Popll objects filtered by the Length1 column
 * @method array findByLength2(string $Length2) Return Popll objects filtered by the Length2 column
 * @method array findByA(double $a) Return Popll objects filtered by the a column
 * @method array findByB(double $b) Return Popll objects filtered by the b column
 * @method array findByLengthmin(double $LengthMin) Return Popll objects filtered by the LengthMin column
 * @method array findByLengthmax(double $LengthMax) Return Popll objects filtered by the LengthMax column
 * @method array findByType(string $Type) Return Popll objects filtered by the Type column
 * @method array findByNumber(int $Number) Return Popll objects filtered by the Number column
 * @method array findByR(double $r) Return Popll objects filtered by the r column
 * @method array findBySex(string $Sex) Return Popll objects filtered by the Sex column
 * @method array findByComment(string $Comment) Return Popll objects filtered by the Comment column
 * @method array findByDataref(int $DataRef) Return Popll objects filtered by the DataRef column
 * @method array findByEntered(double $Entered) Return Popll objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Popll objects filtered by the DateEntered column
 * @method array findByModified(double $Modified) Return Popll objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Popll objects filtered by the DateModified column
 * @method array findByExpert(double $Expert) Return Popll objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Popll objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Popll objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePopllQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePopllQuery object.
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
            $modelName = 'Popll';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PopllQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PopllQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PopllQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PopllQuery) {
            return $criteria;
        }
        $query = new PopllQuery(null, null, $modelAlias);

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
     * @return   Popll|Popll[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PopllPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PopllPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Popll A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByAutoctr($key, $con = null)
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
     * @return                 Popll A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `StockCode`, `SpecCode`, `Length1`, `Length2`, `a`, `b`, `LengthMin`, `LengthMax`, `Type`, `Number`, `r`, `Sex`, `Comment`, `DataRef`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `popll` WHERE `autoctr` = :p0';
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
            $obj = new Popll();
            $obj->hydrate($row);
            PopllPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Popll|Popll[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Popll[]|mixed the list of results, formatted by the current formatter
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
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PopllPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PopllPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(PopllPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(PopllPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the StockCode column
     *
     * Example usage:
     * <code>
     * $query->filterByStockcode(1234); // WHERE StockCode = 1234
     * $query->filterByStockcode(array(12, 34)); // WHERE StockCode IN (12, 34)
     * $query->filterByStockcode(array('min' => 12)); // WHERE StockCode >= 12
     * $query->filterByStockcode(array('max' => 12)); // WHERE StockCode <= 12
     * </code>
     *
     * @param     mixed $stockcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(PopllPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(PopllPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(PopllPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(PopllPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the Length1 column
     *
     * Example usage:
     * <code>
     * $query->filterByLength1('fooValue');   // WHERE Length1 = 'fooValue'
     * $query->filterByLength1('%fooValue%'); // WHERE Length1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $length1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByLength1($length1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($length1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $length1)) {
                $length1 = str_replace('*', '%', $length1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopllPeer::LENGTH1, $length1, $comparison);
    }

    /**
     * Filter the query on the Length2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLength2('fooValue');   // WHERE Length2 = 'fooValue'
     * $query->filterByLength2('%fooValue%'); // WHERE Length2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $length2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByLength2($length2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($length2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $length2)) {
                $length2 = str_replace('*', '%', $length2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopllPeer::LENGTH2, $length2, $comparison);
    }

    /**
     * Filter the query on the a column
     *
     * Example usage:
     * <code>
     * $query->filterByA(1234); // WHERE a = 1234
     * $query->filterByA(array(12, 34)); // WHERE a IN (12, 34)
     * $query->filterByA(array('min' => 12)); // WHERE a >= 12
     * $query->filterByA(array('max' => 12)); // WHERE a <= 12
     * </code>
     *
     * @param     mixed $a The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByA($a = null, $comparison = null)
    {
        if (is_array($a)) {
            $useMinMax = false;
            if (isset($a['min'])) {
                $this->addUsingAlias(PopllPeer::A, $a['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($a['max'])) {
                $this->addUsingAlias(PopllPeer::A, $a['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::A, $a, $comparison);
    }

    /**
     * Filter the query on the b column
     *
     * Example usage:
     * <code>
     * $query->filterByB(1234); // WHERE b = 1234
     * $query->filterByB(array(12, 34)); // WHERE b IN (12, 34)
     * $query->filterByB(array('min' => 12)); // WHERE b >= 12
     * $query->filterByB(array('max' => 12)); // WHERE b <= 12
     * </code>
     *
     * @param     mixed $b The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByB($b = null, $comparison = null)
    {
        if (is_array($b)) {
            $useMinMax = false;
            if (isset($b['min'])) {
                $this->addUsingAlias(PopllPeer::B, $b['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($b['max'])) {
                $this->addUsingAlias(PopllPeer::B, $b['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::B, $b, $comparison);
    }

    /**
     * Filter the query on the LengthMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthmin(1234); // WHERE LengthMin = 1234
     * $query->filterByLengthmin(array(12, 34)); // WHERE LengthMin IN (12, 34)
     * $query->filterByLengthmin(array('min' => 12)); // WHERE LengthMin >= 12
     * $query->filterByLengthmin(array('max' => 12)); // WHERE LengthMin <= 12
     * </code>
     *
     * @param     mixed $lengthmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByLengthmin($lengthmin = null, $comparison = null)
    {
        if (is_array($lengthmin)) {
            $useMinMax = false;
            if (isset($lengthmin['min'])) {
                $this->addUsingAlias(PopllPeer::LENGTHMIN, $lengthmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthmin['max'])) {
                $this->addUsingAlias(PopllPeer::LENGTHMIN, $lengthmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::LENGTHMIN, $lengthmin, $comparison);
    }

    /**
     * Filter the query on the LengthMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthmax(1234); // WHERE LengthMax = 1234
     * $query->filterByLengthmax(array(12, 34)); // WHERE LengthMax IN (12, 34)
     * $query->filterByLengthmax(array('min' => 12)); // WHERE LengthMax >= 12
     * $query->filterByLengthmax(array('max' => 12)); // WHERE LengthMax <= 12
     * </code>
     *
     * @param     mixed $lengthmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByLengthmax($lengthmax = null, $comparison = null)
    {
        if (is_array($lengthmax)) {
            $useMinMax = false;
            if (isset($lengthmax['min'])) {
                $this->addUsingAlias(PopllPeer::LENGTHMAX, $lengthmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthmax['max'])) {
                $this->addUsingAlias(PopllPeer::LENGTHMAX, $lengthmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::LENGTHMAX, $lengthmax, $comparison);
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
     * @return PopllQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PopllPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the Number column
     *
     * Example usage:
     * <code>
     * $query->filterByNumber(1234); // WHERE Number = 1234
     * $query->filterByNumber(array(12, 34)); // WHERE Number IN (12, 34)
     * $query->filterByNumber(array('min' => 12)); // WHERE Number >= 12
     * $query->filterByNumber(array('max' => 12)); // WHERE Number <= 12
     * </code>
     *
     * @param     mixed $number The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByNumber($number = null, $comparison = null)
    {
        if (is_array($number)) {
            $useMinMax = false;
            if (isset($number['min'])) {
                $this->addUsingAlias(PopllPeer::NUMBER, $number['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($number['max'])) {
                $this->addUsingAlias(PopllPeer::NUMBER, $number['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::NUMBER, $number, $comparison);
    }

    /**
     * Filter the query on the r column
     *
     * Example usage:
     * <code>
     * $query->filterByR(1234); // WHERE r = 1234
     * $query->filterByR(array(12, 34)); // WHERE r IN (12, 34)
     * $query->filterByR(array('min' => 12)); // WHERE r >= 12
     * $query->filterByR(array('max' => 12)); // WHERE r <= 12
     * </code>
     *
     * @param     mixed $r The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByR($r = null, $comparison = null)
    {
        if (is_array($r)) {
            $useMinMax = false;
            if (isset($r['min'])) {
                $this->addUsingAlias(PopllPeer::R, $r['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($r['max'])) {
                $this->addUsingAlias(PopllPeer::R, $r['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::R, $r, $comparison);
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
     * @return PopllQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PopllPeer::SEX, $sex, $comparison);
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
     * @return PopllQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PopllPeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the DataRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDataref(1234); // WHERE DataRef = 1234
     * $query->filterByDataref(array(12, 34)); // WHERE DataRef IN (12, 34)
     * $query->filterByDataref(array('min' => 12)); // WHERE DataRef >= 12
     * $query->filterByDataref(array('max' => 12)); // WHERE DataRef <= 12
     * </code>
     *
     * @param     mixed $dataref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByDataref($dataref = null, $comparison = null)
    {
        if (is_array($dataref)) {
            $useMinMax = false;
            if (isset($dataref['min'])) {
                $this->addUsingAlias(PopllPeer::DATAREF, $dataref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataref['max'])) {
                $this->addUsingAlias(PopllPeer::DATAREF, $dataref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::DATAREF, $dataref, $comparison);
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
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(PopllPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(PopllPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::ENTERED, $entered, $comparison);
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
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(PopllPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(PopllPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(PopllPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(PopllPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::MODIFIED, $modified, $comparison);
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
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(PopllPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(PopllPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(PopllPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(PopllPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::EXPERT, $expert, $comparison);
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
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(PopllPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(PopllPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return PopllQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(PopllPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(PopllPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopllPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Popll $popll Object to remove from the list of results
     *
     * @return PopllQuery The current query, for fluid interface
     */
    public function prune($popll = null)
    {
        if ($popll) {
            $this->addUsingAlias(PopllPeer::AUTOCTR, $popll->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
