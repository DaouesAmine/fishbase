<?php


/**
 * Base class that represents a query for the 'larvalswimspeed' table.
 *
 *
 *
 * @method LarvalswimspeedQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method LarvalswimspeedQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method LarvalswimspeedQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method LarvalswimspeedQuery orderBySpeedrefno($order = Criteria::ASC) Order by the SpeedRefNo column
 * @method LarvalswimspeedQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method LarvalswimspeedQuery orderByLarvallocality($order = Criteria::ASC) Order by the Larvallocality column
 * @method LarvalswimspeedQuery orderByLength($order = Criteria::ASC) Order by the Length column
 * @method LarvalswimspeedQuery orderByLengthtype($order = Criteria::ASC) Order by the LengthType column
 * @method LarvalswimspeedQuery orderBySpeedls($order = Criteria::ASC) Order by the SpeedLS column
 * @method LarvalswimspeedQuery orderByLengthtypespeed($order = Criteria::ASC) Order by the LengthTypeSpeed column
 * @method LarvalswimspeedQuery orderBySpeedms($order = Criteria::ASC) Order by the Speedms column
 * @method LarvalswimspeedQuery orderByMode($order = Criteria::ASC) Order by the Mode column
 * @method LarvalswimspeedQuery orderByDataref($order = Criteria::ASC) Order by the DataRef column
 * @method LarvalswimspeedQuery orderByReliable($order = Criteria::ASC) Order by the Reliable column
 * @method LarvalswimspeedQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method LarvalswimspeedQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method LarvalswimspeedQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method LarvalswimspeedQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method LarvalswimspeedQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method LarvalswimspeedQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method LarvalswimspeedQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method LarvalswimspeedQuery orderBySla($order = Criteria::ASC) Order by the SLa column
 * @method LarvalswimspeedQuery orderBySlb($order = Criteria::ASC) Order by the SLb column
 * @method LarvalswimspeedQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method LarvalswimspeedQuery groupByAutoctr() Group by the autoctr column
 * @method LarvalswimspeedQuery groupByStockcode() Group by the StockCode column
 * @method LarvalswimspeedQuery groupBySpeccode() Group by the SpecCode column
 * @method LarvalswimspeedQuery groupBySpeedrefno() Group by the SpeedRefNo column
 * @method LarvalswimspeedQuery groupByCCode() Group by the C_Code column
 * @method LarvalswimspeedQuery groupByLarvallocality() Group by the Larvallocality column
 * @method LarvalswimspeedQuery groupByLength() Group by the Length column
 * @method LarvalswimspeedQuery groupByLengthtype() Group by the LengthType column
 * @method LarvalswimspeedQuery groupBySpeedls() Group by the SpeedLS column
 * @method LarvalswimspeedQuery groupByLengthtypespeed() Group by the LengthTypeSpeed column
 * @method LarvalswimspeedQuery groupBySpeedms() Group by the Speedms column
 * @method LarvalswimspeedQuery groupByMode() Group by the Mode column
 * @method LarvalswimspeedQuery groupByDataref() Group by the DataRef column
 * @method LarvalswimspeedQuery groupByReliable() Group by the Reliable column
 * @method LarvalswimspeedQuery groupByComment() Group by the Comment column
 * @method LarvalswimspeedQuery groupByEntered() Group by the Entered column
 * @method LarvalswimspeedQuery groupByDateentered() Group by the DateEntered column
 * @method LarvalswimspeedQuery groupByModified() Group by the Modified column
 * @method LarvalswimspeedQuery groupByDatemodified() Group by the DateModified column
 * @method LarvalswimspeedQuery groupByExpert() Group by the Expert column
 * @method LarvalswimspeedQuery groupByDatechecked() Group by the DateChecked column
 * @method LarvalswimspeedQuery groupBySla() Group by the SLa column
 * @method LarvalswimspeedQuery groupBySlb() Group by the SLb column
 * @method LarvalswimspeedQuery groupByTs() Group by the TS column
 *
 * @method LarvalswimspeedQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LarvalswimspeedQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LarvalswimspeedQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Larvalswimspeed findOne(PropelPDO $con = null) Return the first Larvalswimspeed matching the query
 * @method Larvalswimspeed findOneOrCreate(PropelPDO $con = null) Return the first Larvalswimspeed matching the query, or a new Larvalswimspeed object populated from the query conditions when no match is found
 *
 * @method Larvalswimspeed findOneByStockcode(int $StockCode) Return the first Larvalswimspeed filtered by the StockCode column
 * @method Larvalswimspeed findOneBySpeccode(int $SpecCode) Return the first Larvalswimspeed filtered by the SpecCode column
 * @method Larvalswimspeed findOneBySpeedrefno(int $SpeedRefNo) Return the first Larvalswimspeed filtered by the SpeedRefNo column
 * @method Larvalswimspeed findOneByCCode(string $C_Code) Return the first Larvalswimspeed filtered by the C_Code column
 * @method Larvalswimspeed findOneByLarvallocality(string $Larvallocality) Return the first Larvalswimspeed filtered by the Larvallocality column
 * @method Larvalswimspeed findOneByLength(double $Length) Return the first Larvalswimspeed filtered by the Length column
 * @method Larvalswimspeed findOneByLengthtype(string $LengthType) Return the first Larvalswimspeed filtered by the LengthType column
 * @method Larvalswimspeed findOneBySpeedls(double $SpeedLS) Return the first Larvalswimspeed filtered by the SpeedLS column
 * @method Larvalswimspeed findOneByLengthtypespeed(string $LengthTypeSpeed) Return the first Larvalswimspeed filtered by the LengthTypeSpeed column
 * @method Larvalswimspeed findOneBySpeedms(double $Speedms) Return the first Larvalswimspeed filtered by the Speedms column
 * @method Larvalswimspeed findOneByMode(string $Mode) Return the first Larvalswimspeed filtered by the Mode column
 * @method Larvalswimspeed findOneByDataref(int $DataRef) Return the first Larvalswimspeed filtered by the DataRef column
 * @method Larvalswimspeed findOneByReliable(string $Reliable) Return the first Larvalswimspeed filtered by the Reliable column
 * @method Larvalswimspeed findOneByComment(string $Comment) Return the first Larvalswimspeed filtered by the Comment column
 * @method Larvalswimspeed findOneByEntered(int $Entered) Return the first Larvalswimspeed filtered by the Entered column
 * @method Larvalswimspeed findOneByDateentered(string $DateEntered) Return the first Larvalswimspeed filtered by the DateEntered column
 * @method Larvalswimspeed findOneByModified(int $Modified) Return the first Larvalswimspeed filtered by the Modified column
 * @method Larvalswimspeed findOneByDatemodified(string $DateModified) Return the first Larvalswimspeed filtered by the DateModified column
 * @method Larvalswimspeed findOneByExpert(int $Expert) Return the first Larvalswimspeed filtered by the Expert column
 * @method Larvalswimspeed findOneByDatechecked(string $DateChecked) Return the first Larvalswimspeed filtered by the DateChecked column
 * @method Larvalswimspeed findOneBySla(double $SLa) Return the first Larvalswimspeed filtered by the SLa column
 * @method Larvalswimspeed findOneBySlb(double $SLb) Return the first Larvalswimspeed filtered by the SLb column
 * @method Larvalswimspeed findOneByTs(string $TS) Return the first Larvalswimspeed filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Larvalswimspeed objects filtered by the autoctr column
 * @method array findByStockcode(int $StockCode) Return Larvalswimspeed objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Larvalswimspeed objects filtered by the SpecCode column
 * @method array findBySpeedrefno(int $SpeedRefNo) Return Larvalswimspeed objects filtered by the SpeedRefNo column
 * @method array findByCCode(string $C_Code) Return Larvalswimspeed objects filtered by the C_Code column
 * @method array findByLarvallocality(string $Larvallocality) Return Larvalswimspeed objects filtered by the Larvallocality column
 * @method array findByLength(double $Length) Return Larvalswimspeed objects filtered by the Length column
 * @method array findByLengthtype(string $LengthType) Return Larvalswimspeed objects filtered by the LengthType column
 * @method array findBySpeedls(double $SpeedLS) Return Larvalswimspeed objects filtered by the SpeedLS column
 * @method array findByLengthtypespeed(string $LengthTypeSpeed) Return Larvalswimspeed objects filtered by the LengthTypeSpeed column
 * @method array findBySpeedms(double $Speedms) Return Larvalswimspeed objects filtered by the Speedms column
 * @method array findByMode(string $Mode) Return Larvalswimspeed objects filtered by the Mode column
 * @method array findByDataref(int $DataRef) Return Larvalswimspeed objects filtered by the DataRef column
 * @method array findByReliable(string $Reliable) Return Larvalswimspeed objects filtered by the Reliable column
 * @method array findByComment(string $Comment) Return Larvalswimspeed objects filtered by the Comment column
 * @method array findByEntered(int $Entered) Return Larvalswimspeed objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Larvalswimspeed objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Larvalswimspeed objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Larvalswimspeed objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Larvalswimspeed objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Larvalswimspeed objects filtered by the DateChecked column
 * @method array findBySla(double $SLa) Return Larvalswimspeed objects filtered by the SLa column
 * @method array findBySlb(double $SLb) Return Larvalswimspeed objects filtered by the SLb column
 * @method array findByTs(string $TS) Return Larvalswimspeed objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLarvalswimspeedQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLarvalswimspeedQuery object.
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
            $modelName = 'Larvalswimspeed';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LarvalswimspeedQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LarvalswimspeedQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LarvalswimspeedQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LarvalswimspeedQuery) {
            return $criteria;
        }
        $query = new LarvalswimspeedQuery(null, null, $modelAlias);

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
     * @return   Larvalswimspeed|Larvalswimspeed[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LarvalswimspeedPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LarvalswimspeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Larvalswimspeed A model object, or null if the key is not found
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
     * @return                 Larvalswimspeed A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `StockCode`, `SpecCode`, `SpeedRefNo`, `C_Code`, `Larvallocality`, `Length`, `LengthType`, `SpeedLS`, `LengthTypeSpeed`, `Speedms`, `Mode`, `DataRef`, `Reliable`, `Comment`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `SLa`, `SLb`, `TS` FROM `larvalswimspeed` WHERE `autoctr` = :p0';
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
            $obj = new Larvalswimspeed();
            $obj->hydrate($row);
            LarvalswimspeedPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Larvalswimspeed|Larvalswimspeed[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Larvalswimspeed[]|mixed the list of results, formatted by the current formatter
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
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LarvalswimspeedPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LarvalswimspeedPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the SpeedRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeedrefno(1234); // WHERE SpeedRefNo = 1234
     * $query->filterBySpeedrefno(array(12, 34)); // WHERE SpeedRefNo IN (12, 34)
     * $query->filterBySpeedrefno(array('min' => 12)); // WHERE SpeedRefNo >= 12
     * $query->filterBySpeedrefno(array('max' => 12)); // WHERE SpeedRefNo <= 12
     * </code>
     *
     * @param     mixed $speedrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterBySpeedrefno($speedrefno = null, $comparison = null)
    {
        if (is_array($speedrefno)) {
            $useMinMax = false;
            if (isset($speedrefno['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::SPEEDREFNO, $speedrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speedrefno['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::SPEEDREFNO, $speedrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::SPEEDREFNO, $speedrefno, $comparison);
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
     * @return LarvalswimspeedQuery The current query, for fluid interface
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

        return $this->addUsingAlias(LarvalswimspeedPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the Larvallocality column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvallocality('fooValue');   // WHERE Larvallocality = 'fooValue'
     * $query->filterByLarvallocality('%fooValue%'); // WHERE Larvallocality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $larvallocality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByLarvallocality($larvallocality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($larvallocality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $larvallocality)) {
                $larvallocality = str_replace('*', '%', $larvallocality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::LARVALLOCALITY, $larvallocality, $comparison);
    }

    /**
     * Filter the query on the Length column
     *
     * Example usage:
     * <code>
     * $query->filterByLength(1234); // WHERE Length = 1234
     * $query->filterByLength(array(12, 34)); // WHERE Length IN (12, 34)
     * $query->filterByLength(array('min' => 12)); // WHERE Length >= 12
     * $query->filterByLength(array('max' => 12)); // WHERE Length <= 12
     * </code>
     *
     * @param     mixed $length The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByLength($length = null, $comparison = null)
    {
        if (is_array($length)) {
            $useMinMax = false;
            if (isset($length['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::LENGTH, $length['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($length['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::LENGTH, $length['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::LENGTH, $length, $comparison);
    }

    /**
     * Filter the query on the LengthType column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthtype('fooValue');   // WHERE LengthType = 'fooValue'
     * $query->filterByLengthtype('%fooValue%'); // WHERE LengthType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByLengthtype($lengthtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthtype)) {
                $lengthtype = str_replace('*', '%', $lengthtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::LENGTHTYPE, $lengthtype, $comparison);
    }

    /**
     * Filter the query on the SpeedLS column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeedls(1234); // WHERE SpeedLS = 1234
     * $query->filterBySpeedls(array(12, 34)); // WHERE SpeedLS IN (12, 34)
     * $query->filterBySpeedls(array('min' => 12)); // WHERE SpeedLS >= 12
     * $query->filterBySpeedls(array('max' => 12)); // WHERE SpeedLS <= 12
     * </code>
     *
     * @param     mixed $speedls The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterBySpeedls($speedls = null, $comparison = null)
    {
        if (is_array($speedls)) {
            $useMinMax = false;
            if (isset($speedls['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::SPEEDLS, $speedls['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speedls['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::SPEEDLS, $speedls['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::SPEEDLS, $speedls, $comparison);
    }

    /**
     * Filter the query on the LengthTypeSpeed column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthtypespeed('fooValue');   // WHERE LengthTypeSpeed = 'fooValue'
     * $query->filterByLengthtypespeed('%fooValue%'); // WHERE LengthTypeSpeed LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthtypespeed The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByLengthtypespeed($lengthtypespeed = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthtypespeed)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthtypespeed)) {
                $lengthtypespeed = str_replace('*', '%', $lengthtypespeed);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::LENGTHTYPESPEED, $lengthtypespeed, $comparison);
    }

    /**
     * Filter the query on the Speedms column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeedms(1234); // WHERE Speedms = 1234
     * $query->filterBySpeedms(array(12, 34)); // WHERE Speedms IN (12, 34)
     * $query->filterBySpeedms(array('min' => 12)); // WHERE Speedms >= 12
     * $query->filterBySpeedms(array('max' => 12)); // WHERE Speedms <= 12
     * </code>
     *
     * @param     mixed $speedms The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterBySpeedms($speedms = null, $comparison = null)
    {
        if (is_array($speedms)) {
            $useMinMax = false;
            if (isset($speedms['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::SPEEDMS, $speedms['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speedms['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::SPEEDMS, $speedms['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::SPEEDMS, $speedms, $comparison);
    }

    /**
     * Filter the query on the Mode column
     *
     * Example usage:
     * <code>
     * $query->filterByMode('fooValue');   // WHERE Mode = 'fooValue'
     * $query->filterByMode('%fooValue%'); // WHERE Mode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByMode($mode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mode)) {
                $mode = str_replace('*', '%', $mode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::MODE, $mode, $comparison);
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
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByDataref($dataref = null, $comparison = null)
    {
        if (is_array($dataref)) {
            $useMinMax = false;
            if (isset($dataref['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::DATAREF, $dataref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataref['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::DATAREF, $dataref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::DATAREF, $dataref, $comparison);
    }

    /**
     * Filter the query on the Reliable column
     *
     * Example usage:
     * <code>
     * $query->filterByReliable('fooValue');   // WHERE Reliable = 'fooValue'
     * $query->filterByReliable('%fooValue%'); // WHERE Reliable LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reliable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByReliable($reliable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reliable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reliable)) {
                $reliable = str_replace('*', '%', $reliable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::RELIABLE, $reliable, $comparison);
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
     * @return LarvalswimspeedQuery The current query, for fluid interface
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

        return $this->addUsingAlias(LarvalswimspeedPeer::COMMENT, $comment, $comparison);
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
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::ENTERED, $entered, $comparison);
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
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::MODIFIED, $modified, $comparison);
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
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::EXPERT, $expert, $comparison);
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
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the SLa column
     *
     * Example usage:
     * <code>
     * $query->filterBySla(1234); // WHERE SLa = 1234
     * $query->filterBySla(array(12, 34)); // WHERE SLa IN (12, 34)
     * $query->filterBySla(array('min' => 12)); // WHERE SLa >= 12
     * $query->filterBySla(array('max' => 12)); // WHERE SLa <= 12
     * </code>
     *
     * @param     mixed $sla The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterBySla($sla = null, $comparison = null)
    {
        if (is_array($sla)) {
            $useMinMax = false;
            if (isset($sla['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::SLA, $sla['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sla['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::SLA, $sla['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::SLA, $sla, $comparison);
    }

    /**
     * Filter the query on the SLb column
     *
     * Example usage:
     * <code>
     * $query->filterBySlb(1234); // WHERE SLb = 1234
     * $query->filterBySlb(array(12, 34)); // WHERE SLb IN (12, 34)
     * $query->filterBySlb(array('min' => 12)); // WHERE SLb >= 12
     * $query->filterBySlb(array('max' => 12)); // WHERE SLb <= 12
     * </code>
     *
     * @param     mixed $slb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterBySlb($slb = null, $comparison = null)
    {
        if (is_array($slb)) {
            $useMinMax = false;
            if (isset($slb['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::SLB, $slb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($slb['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::SLB, $slb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::SLB, $slb, $comparison);
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
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(LarvalswimspeedPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvalswimspeedPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Larvalswimspeed $larvalswimspeed Object to remove from the list of results
     *
     * @return LarvalswimspeedQuery The current query, for fluid interface
     */
    public function prune($larvalswimspeed = null)
    {
        if ($larvalswimspeed) {
            $this->addUsingAlias(LarvalswimspeedPeer::AUTOCTR, $larvalswimspeed->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
