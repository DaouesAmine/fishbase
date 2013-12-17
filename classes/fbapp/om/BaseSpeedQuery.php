<?php


/**
 * Base class that represents a query for the 'speed' table.
 *
 *
 *
 * @method SpeedQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method SpeedQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method SpeedQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method SpeedQuery orderBySpeedrefno($order = Criteria::ASC) Order by the SpeedRefNo column
 * @method SpeedQuery orderByLength($order = Criteria::ASC) Order by the Length column
 * @method SpeedQuery orderByLengthtype($order = Criteria::ASC) Order by the LengthType column
 * @method SpeedQuery orderBySpeedls($order = Criteria::ASC) Order by the SpeedLS column
 * @method SpeedQuery orderByLengthtypespeed($order = Criteria::ASC) Order by the LengthTypeSpeed column
 * @method SpeedQuery orderBySpeedms($order = Criteria::ASC) Order by the Speedms column
 * @method SpeedQuery orderByMode($order = Criteria::ASC) Order by the Mode column
 * @method SpeedQuery orderByDataref($order = Criteria::ASC) Order by the DataRef column
 * @method SpeedQuery orderByReliable($order = Criteria::ASC) Order by the Reliable column
 * @method SpeedQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method SpeedQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method SpeedQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method SpeedQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method SpeedQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method SpeedQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method SpeedQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method SpeedQuery orderBySla($order = Criteria::ASC) Order by the SLa column
 * @method SpeedQuery orderBySlb($order = Criteria::ASC) Order by the SLb column
 * @method SpeedQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method SpeedQuery groupByAutoctr() Group by the autoctr column
 * @method SpeedQuery groupByStockcode() Group by the StockCode column
 * @method SpeedQuery groupBySpeccode() Group by the SpecCode column
 * @method SpeedQuery groupBySpeedrefno() Group by the SpeedRefNo column
 * @method SpeedQuery groupByLength() Group by the Length column
 * @method SpeedQuery groupByLengthtype() Group by the LengthType column
 * @method SpeedQuery groupBySpeedls() Group by the SpeedLS column
 * @method SpeedQuery groupByLengthtypespeed() Group by the LengthTypeSpeed column
 * @method SpeedQuery groupBySpeedms() Group by the Speedms column
 * @method SpeedQuery groupByMode() Group by the Mode column
 * @method SpeedQuery groupByDataref() Group by the DataRef column
 * @method SpeedQuery groupByReliable() Group by the Reliable column
 * @method SpeedQuery groupByComment() Group by the Comment column
 * @method SpeedQuery groupByEntered() Group by the Entered column
 * @method SpeedQuery groupByDateentered() Group by the DateEntered column
 * @method SpeedQuery groupByModified() Group by the Modified column
 * @method SpeedQuery groupByDatemodified() Group by the DateModified column
 * @method SpeedQuery groupByExpert() Group by the Expert column
 * @method SpeedQuery groupByDatechecked() Group by the DateChecked column
 * @method SpeedQuery groupBySla() Group by the SLa column
 * @method SpeedQuery groupBySlb() Group by the SLb column
 * @method SpeedQuery groupByTs() Group by the TS column
 *
 * @method SpeedQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SpeedQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SpeedQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Speed findOne(PropelPDO $con = null) Return the first Speed matching the query
 * @method Speed findOneOrCreate(PropelPDO $con = null) Return the first Speed matching the query, or a new Speed object populated from the query conditions when no match is found
 *
 * @method Speed findOneByStockcode(int $StockCode) Return the first Speed filtered by the StockCode column
 * @method Speed findOneBySpeccode(int $SpecCode) Return the first Speed filtered by the SpecCode column
 * @method Speed findOneBySpeedrefno(int $SpeedRefNo) Return the first Speed filtered by the SpeedRefNo column
 * @method Speed findOneByLength(double $Length) Return the first Speed filtered by the Length column
 * @method Speed findOneByLengthtype(string $LengthType) Return the first Speed filtered by the LengthType column
 * @method Speed findOneBySpeedls(double $SpeedLS) Return the first Speed filtered by the SpeedLS column
 * @method Speed findOneByLengthtypespeed(string $LengthTypeSpeed) Return the first Speed filtered by the LengthTypeSpeed column
 * @method Speed findOneBySpeedms(double $Speedms) Return the first Speed filtered by the Speedms column
 * @method Speed findOneByMode(string $Mode) Return the first Speed filtered by the Mode column
 * @method Speed findOneByDataref(int $DataRef) Return the first Speed filtered by the DataRef column
 * @method Speed findOneByReliable(string $Reliable) Return the first Speed filtered by the Reliable column
 * @method Speed findOneByComment(string $Comment) Return the first Speed filtered by the Comment column
 * @method Speed findOneByEntered(int $Entered) Return the first Speed filtered by the Entered column
 * @method Speed findOneByDateentered(string $DateEntered) Return the first Speed filtered by the DateEntered column
 * @method Speed findOneByModified(int $Modified) Return the first Speed filtered by the Modified column
 * @method Speed findOneByDatemodified(string $DateModified) Return the first Speed filtered by the DateModified column
 * @method Speed findOneByExpert(int $Expert) Return the first Speed filtered by the Expert column
 * @method Speed findOneByDatechecked(string $DateChecked) Return the first Speed filtered by the DateChecked column
 * @method Speed findOneBySla(double $SLa) Return the first Speed filtered by the SLa column
 * @method Speed findOneBySlb(double $SLb) Return the first Speed filtered by the SLb column
 * @method Speed findOneByTs(string $TS) Return the first Speed filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Speed objects filtered by the autoctr column
 * @method array findByStockcode(int $StockCode) Return Speed objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Speed objects filtered by the SpecCode column
 * @method array findBySpeedrefno(int $SpeedRefNo) Return Speed objects filtered by the SpeedRefNo column
 * @method array findByLength(double $Length) Return Speed objects filtered by the Length column
 * @method array findByLengthtype(string $LengthType) Return Speed objects filtered by the LengthType column
 * @method array findBySpeedls(double $SpeedLS) Return Speed objects filtered by the SpeedLS column
 * @method array findByLengthtypespeed(string $LengthTypeSpeed) Return Speed objects filtered by the LengthTypeSpeed column
 * @method array findBySpeedms(double $Speedms) Return Speed objects filtered by the Speedms column
 * @method array findByMode(string $Mode) Return Speed objects filtered by the Mode column
 * @method array findByDataref(int $DataRef) Return Speed objects filtered by the DataRef column
 * @method array findByReliable(string $Reliable) Return Speed objects filtered by the Reliable column
 * @method array findByComment(string $Comment) Return Speed objects filtered by the Comment column
 * @method array findByEntered(int $Entered) Return Speed objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Speed objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Speed objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Speed objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Speed objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Speed objects filtered by the DateChecked column
 * @method array findBySla(double $SLa) Return Speed objects filtered by the SLa column
 * @method array findBySlb(double $SLb) Return Speed objects filtered by the SLb column
 * @method array findByTs(string $TS) Return Speed objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseSpeedQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSpeedQuery object.
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
            $modelName = 'Speed';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SpeedQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SpeedQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SpeedQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SpeedQuery) {
            return $criteria;
        }
        $query = new SpeedQuery(null, null, $modelAlias);

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
     * @return   Speed|Speed[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SpeedPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SpeedPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Speed A model object, or null if the key is not found
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
     * @return                 Speed A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `StockCode`, `SpecCode`, `SpeedRefNo`, `Length`, `LengthType`, `SpeedLS`, `LengthTypeSpeed`, `Speedms`, `Mode`, `DataRef`, `Reliable`, `Comment`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `SLa`, `SLb`, `TS` FROM `speed` WHERE `autoctr` = :p0';
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
            $obj = new Speed();
            $obj->hydrate($row);
            SpeedPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Speed|Speed[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Speed[]|mixed the list of results, formatted by the current formatter
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SpeedPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SpeedPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(SpeedPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(SpeedPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(SpeedPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(SpeedPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(SpeedPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(SpeedPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::SPECCODE, $speccode, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterBySpeedrefno($speedrefno = null, $comparison = null)
    {
        if (is_array($speedrefno)) {
            $useMinMax = false;
            if (isset($speedrefno['min'])) {
                $this->addUsingAlias(SpeedPeer::SPEEDREFNO, $speedrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speedrefno['max'])) {
                $this->addUsingAlias(SpeedPeer::SPEEDREFNO, $speedrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::SPEEDREFNO, $speedrefno, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterByLength($length = null, $comparison = null)
    {
        if (is_array($length)) {
            $useMinMax = false;
            if (isset($length['min'])) {
                $this->addUsingAlias(SpeedPeer::LENGTH, $length['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($length['max'])) {
                $this->addUsingAlias(SpeedPeer::LENGTH, $length['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::LENGTH, $length, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SpeedPeer::LENGTHTYPE, $lengthtype, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterBySpeedls($speedls = null, $comparison = null)
    {
        if (is_array($speedls)) {
            $useMinMax = false;
            if (isset($speedls['min'])) {
                $this->addUsingAlias(SpeedPeer::SPEEDLS, $speedls['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speedls['max'])) {
                $this->addUsingAlias(SpeedPeer::SPEEDLS, $speedls['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::SPEEDLS, $speedls, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SpeedPeer::LENGTHTYPESPEED, $lengthtypespeed, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterBySpeedms($speedms = null, $comparison = null)
    {
        if (is_array($speedms)) {
            $useMinMax = false;
            if (isset($speedms['min'])) {
                $this->addUsingAlias(SpeedPeer::SPEEDMS, $speedms['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speedms['max'])) {
                $this->addUsingAlias(SpeedPeer::SPEEDMS, $speedms['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::SPEEDMS, $speedms, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SpeedPeer::MODE, $mode, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterByDataref($dataref = null, $comparison = null)
    {
        if (is_array($dataref)) {
            $useMinMax = false;
            if (isset($dataref['min'])) {
                $this->addUsingAlias(SpeedPeer::DATAREF, $dataref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataref['max'])) {
                $this->addUsingAlias(SpeedPeer::DATAREF, $dataref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::DATAREF, $dataref, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SpeedPeer::RELIABLE, $reliable, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SpeedPeer::COMMENT, $comment, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(SpeedPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(SpeedPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::ENTERED, $entered, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(SpeedPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(SpeedPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(SpeedPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(SpeedPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::MODIFIED, $modified, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(SpeedPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(SpeedPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(SpeedPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(SpeedPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::EXPERT, $expert, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(SpeedPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(SpeedPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterBySla($sla = null, $comparison = null)
    {
        if (is_array($sla)) {
            $useMinMax = false;
            if (isset($sla['min'])) {
                $this->addUsingAlias(SpeedPeer::SLA, $sla['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sla['max'])) {
                $this->addUsingAlias(SpeedPeer::SLA, $sla['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::SLA, $sla, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterBySlb($slb = null, $comparison = null)
    {
        if (is_array($slb)) {
            $useMinMax = false;
            if (isset($slb['min'])) {
                $this->addUsingAlias(SpeedPeer::SLB, $slb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($slb['max'])) {
                $this->addUsingAlias(SpeedPeer::SLB, $slb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::SLB, $slb, $comparison);
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
     * @return SpeedQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(SpeedPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(SpeedPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SpeedPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Speed $speed Object to remove from the list of results
     *
     * @return SpeedQuery The current query, for fluid interface
     */
    public function prune($speed = null)
    {
        if ($speed) {
            $this->addUsingAlias(SpeedPeer::AUTOCTR, $speed->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
