<?php


/**
 * Base class that represents a query for the 'popqb' table.
 *
 *
 *
 * @method PopqbQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method PopqbQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method PopqbQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method PopqbQuery orderByPopqbrefno($order = Criteria::ASC) Order by the PopQBRefNo column
 * @method PopqbQuery orderByPopqb($order = Criteria::ASC) Order by the PopQB column
 * @method PopqbQuery orderByMaintqb($order = Criteria::ASC) Order by the MaintQB column
 * @method PopqbQuery orderByWinf($order = Criteria::ASC) Order by the Winf column
 * @method PopqbQuery orderByFoodtype($order = Criteria::ASC) Order by the FoodType column
 * @method PopqbQuery orderByK($order = Criteria::ASC) Order by the K column
 * @method PopqbQuery orderBySalinity($order = Criteria::ASC) Order by the Salinity column
 * @method PopqbQuery orderByT0($order = Criteria::ASC) Order by the t0 column
 * @method PopqbQuery orderByTemperature($order = Criteria::ASC) Order by the Temperature column
 * @method PopqbQuery orderByMortality($order = Criteria::ASC) Order by the Mortality column
 * @method PopqbQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method PopqbQuery orderByB($order = Criteria::ASC) Order by the b column
 * @method PopqbQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method PopqbQuery orderByQbremarks($order = Criteria::ASC) Order by the QBRemarks column
 * @method PopqbQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method PopqbQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method PopqbQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method PopqbQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method PopqbQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method PopqbQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method PopqbQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method PopqbQuery groupByAutoctr() Group by the AutoCtr column
 * @method PopqbQuery groupByStockcode() Group by the StockCode column
 * @method PopqbQuery groupBySpeccode() Group by the SpecCode column
 * @method PopqbQuery groupByPopqbrefno() Group by the PopQBRefNo column
 * @method PopqbQuery groupByPopqb() Group by the PopQB column
 * @method PopqbQuery groupByMaintqb() Group by the MaintQB column
 * @method PopqbQuery groupByWinf() Group by the Winf column
 * @method PopqbQuery groupByFoodtype() Group by the FoodType column
 * @method PopqbQuery groupByK() Group by the K column
 * @method PopqbQuery groupBySalinity() Group by the Salinity column
 * @method PopqbQuery groupByT0() Group by the t0 column
 * @method PopqbQuery groupByTemperature() Group by the Temperature column
 * @method PopqbQuery groupByMortality() Group by the Mortality column
 * @method PopqbQuery groupByLocality() Group by the Locality column
 * @method PopqbQuery groupByB() Group by the b column
 * @method PopqbQuery groupByCCode() Group by the C_Code column
 * @method PopqbQuery groupByQbremarks() Group by the QBRemarks column
 * @method PopqbQuery groupByEntered() Group by the Entered column
 * @method PopqbQuery groupByDateentered() Group by the DateEntered column
 * @method PopqbQuery groupByModified() Group by the Modified column
 * @method PopqbQuery groupByDatemodified() Group by the DateModified column
 * @method PopqbQuery groupByExpert() Group by the Expert column
 * @method PopqbQuery groupByDatechecked() Group by the DateChecked column
 * @method PopqbQuery groupByTs() Group by the TS column
 *
 * @method PopqbQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PopqbQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PopqbQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Popqb findOne(PropelPDO $con = null) Return the first Popqb matching the query
 * @method Popqb findOneOrCreate(PropelPDO $con = null) Return the first Popqb matching the query, or a new Popqb object populated from the query conditions when no match is found
 *
 * @method Popqb findOneByStockcode(int $StockCode) Return the first Popqb filtered by the StockCode column
 * @method Popqb findOneBySpeccode(int $SpecCode) Return the first Popqb filtered by the SpecCode column
 * @method Popqb findOneByPopqbrefno(int $PopQBRefNo) Return the first Popqb filtered by the PopQBRefNo column
 * @method Popqb findOneByPopqb(double $PopQB) Return the first Popqb filtered by the PopQB column
 * @method Popqb findOneByMaintqb(double $MaintQB) Return the first Popqb filtered by the MaintQB column
 * @method Popqb findOneByWinf(double $Winf) Return the first Popqb filtered by the Winf column
 * @method Popqb findOneByFoodtype(string $FoodType) Return the first Popqb filtered by the FoodType column
 * @method Popqb findOneByK(double $K) Return the first Popqb filtered by the K column
 * @method Popqb findOneBySalinity(string $Salinity) Return the first Popqb filtered by the Salinity column
 * @method Popqb findOneByT0(double $t0) Return the first Popqb filtered by the t0 column
 * @method Popqb findOneByTemperature(double $Temperature) Return the first Popqb filtered by the Temperature column
 * @method Popqb findOneByMortality(double $Mortality) Return the first Popqb filtered by the Mortality column
 * @method Popqb findOneByLocality(string $Locality) Return the first Popqb filtered by the Locality column
 * @method Popqb findOneByB(double $b) Return the first Popqb filtered by the b column
 * @method Popqb findOneByCCode(string $C_Code) Return the first Popqb filtered by the C_Code column
 * @method Popqb findOneByQbremarks(string $QBRemarks) Return the first Popqb filtered by the QBRemarks column
 * @method Popqb findOneByEntered(int $Entered) Return the first Popqb filtered by the Entered column
 * @method Popqb findOneByDateentered(string $DateEntered) Return the first Popqb filtered by the DateEntered column
 * @method Popqb findOneByModified(int $Modified) Return the first Popqb filtered by the Modified column
 * @method Popqb findOneByDatemodified(string $DateModified) Return the first Popqb filtered by the DateModified column
 * @method Popqb findOneByExpert(int $Expert) Return the first Popqb filtered by the Expert column
 * @method Popqb findOneByDatechecked(string $DateChecked) Return the first Popqb filtered by the DateChecked column
 * @method Popqb findOneByTs(string $TS) Return the first Popqb filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Popqb objects filtered by the AutoCtr column
 * @method array findByStockcode(int $StockCode) Return Popqb objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Popqb objects filtered by the SpecCode column
 * @method array findByPopqbrefno(int $PopQBRefNo) Return Popqb objects filtered by the PopQBRefNo column
 * @method array findByPopqb(double $PopQB) Return Popqb objects filtered by the PopQB column
 * @method array findByMaintqb(double $MaintQB) Return Popqb objects filtered by the MaintQB column
 * @method array findByWinf(double $Winf) Return Popqb objects filtered by the Winf column
 * @method array findByFoodtype(string $FoodType) Return Popqb objects filtered by the FoodType column
 * @method array findByK(double $K) Return Popqb objects filtered by the K column
 * @method array findBySalinity(string $Salinity) Return Popqb objects filtered by the Salinity column
 * @method array findByT0(double $t0) Return Popqb objects filtered by the t0 column
 * @method array findByTemperature(double $Temperature) Return Popqb objects filtered by the Temperature column
 * @method array findByMortality(double $Mortality) Return Popqb objects filtered by the Mortality column
 * @method array findByLocality(string $Locality) Return Popqb objects filtered by the Locality column
 * @method array findByB(double $b) Return Popqb objects filtered by the b column
 * @method array findByCCode(string $C_Code) Return Popqb objects filtered by the C_Code column
 * @method array findByQbremarks(string $QBRemarks) Return Popqb objects filtered by the QBRemarks column
 * @method array findByEntered(int $Entered) Return Popqb objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Popqb objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Popqb objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Popqb objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Popqb objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Popqb objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Popqb objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePopqbQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePopqbQuery object.
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
            $modelName = 'Popqb';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PopqbQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PopqbQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PopqbQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PopqbQuery) {
            return $criteria;
        }
        $query = new PopqbQuery(null, null, $modelAlias);

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
     * @return   Popqb|Popqb[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PopqbPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PopqbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Popqb A model object, or null if the key is not found
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
     * @return                 Popqb A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `StockCode`, `SpecCode`, `PopQBRefNo`, `PopQB`, `MaintQB`, `Winf`, `FoodType`, `K`, `Salinity`, `t0`, `Temperature`, `Mortality`, `Locality`, `b`, `C_Code`, `QBRemarks`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `popqb` WHERE `AutoCtr` = :p0';
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
            $obj = new Popqb();
            $obj->hydrate($row);
            PopqbPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Popqb|Popqb[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Popqb[]|mixed the list of results, formatted by the current formatter
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
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PopqbPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PopqbPeer::AUTOCTR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the AutoCtr column
     *
     * Example usage:
     * <code>
     * $query->filterByAutoctr(1234); // WHERE AutoCtr = 1234
     * $query->filterByAutoctr(array(12, 34)); // WHERE AutoCtr IN (12, 34)
     * $query->filterByAutoctr(array('min' => 12)); // WHERE AutoCtr >= 12
     * $query->filterByAutoctr(array('max' => 12)); // WHERE AutoCtr <= 12
     * </code>
     *
     * @param     mixed $autoctr The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(PopqbPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(PopqbPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(PopqbPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(PopqbPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(PopqbPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(PopqbPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the PopQBRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByPopqbrefno(1234); // WHERE PopQBRefNo = 1234
     * $query->filterByPopqbrefno(array(12, 34)); // WHERE PopQBRefNo IN (12, 34)
     * $query->filterByPopqbrefno(array('min' => 12)); // WHERE PopQBRefNo >= 12
     * $query->filterByPopqbrefno(array('max' => 12)); // WHERE PopQBRefNo <= 12
     * </code>
     *
     * @param     mixed $popqbrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByPopqbrefno($popqbrefno = null, $comparison = null)
    {
        if (is_array($popqbrefno)) {
            $useMinMax = false;
            if (isset($popqbrefno['min'])) {
                $this->addUsingAlias(PopqbPeer::POPQBREFNO, $popqbrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($popqbrefno['max'])) {
                $this->addUsingAlias(PopqbPeer::POPQBREFNO, $popqbrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::POPQBREFNO, $popqbrefno, $comparison);
    }

    /**
     * Filter the query on the PopQB column
     *
     * Example usage:
     * <code>
     * $query->filterByPopqb(1234); // WHERE PopQB = 1234
     * $query->filterByPopqb(array(12, 34)); // WHERE PopQB IN (12, 34)
     * $query->filterByPopqb(array('min' => 12)); // WHERE PopQB >= 12
     * $query->filterByPopqb(array('max' => 12)); // WHERE PopQB <= 12
     * </code>
     *
     * @param     mixed $popqb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByPopqb($popqb = null, $comparison = null)
    {
        if (is_array($popqb)) {
            $useMinMax = false;
            if (isset($popqb['min'])) {
                $this->addUsingAlias(PopqbPeer::POPQB, $popqb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($popqb['max'])) {
                $this->addUsingAlias(PopqbPeer::POPQB, $popqb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::POPQB, $popqb, $comparison);
    }

    /**
     * Filter the query on the MaintQB column
     *
     * Example usage:
     * <code>
     * $query->filterByMaintqb(1234); // WHERE MaintQB = 1234
     * $query->filterByMaintqb(array(12, 34)); // WHERE MaintQB IN (12, 34)
     * $query->filterByMaintqb(array('min' => 12)); // WHERE MaintQB >= 12
     * $query->filterByMaintqb(array('max' => 12)); // WHERE MaintQB <= 12
     * </code>
     *
     * @param     mixed $maintqb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByMaintqb($maintqb = null, $comparison = null)
    {
        if (is_array($maintqb)) {
            $useMinMax = false;
            if (isset($maintqb['min'])) {
                $this->addUsingAlias(PopqbPeer::MAINTQB, $maintqb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maintqb['max'])) {
                $this->addUsingAlias(PopqbPeer::MAINTQB, $maintqb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::MAINTQB, $maintqb, $comparison);
    }

    /**
     * Filter the query on the Winf column
     *
     * Example usage:
     * <code>
     * $query->filterByWinf(1234); // WHERE Winf = 1234
     * $query->filterByWinf(array(12, 34)); // WHERE Winf IN (12, 34)
     * $query->filterByWinf(array('min' => 12)); // WHERE Winf >= 12
     * $query->filterByWinf(array('max' => 12)); // WHERE Winf <= 12
     * </code>
     *
     * @param     mixed $winf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByWinf($winf = null, $comparison = null)
    {
        if (is_array($winf)) {
            $useMinMax = false;
            if (isset($winf['min'])) {
                $this->addUsingAlias(PopqbPeer::WINF, $winf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($winf['max'])) {
                $this->addUsingAlias(PopqbPeer::WINF, $winf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::WINF, $winf, $comparison);
    }

    /**
     * Filter the query on the FoodType column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodtype('fooValue');   // WHERE FoodType = 'fooValue'
     * $query->filterByFoodtype('%fooValue%'); // WHERE FoodType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByFoodtype($foodtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foodtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $foodtype)) {
                $foodtype = str_replace('*', '%', $foodtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopqbPeer::FOODTYPE, $foodtype, $comparison);
    }

    /**
     * Filter the query on the K column
     *
     * Example usage:
     * <code>
     * $query->filterByK(1234); // WHERE K = 1234
     * $query->filterByK(array(12, 34)); // WHERE K IN (12, 34)
     * $query->filterByK(array('min' => 12)); // WHERE K >= 12
     * $query->filterByK(array('max' => 12)); // WHERE K <= 12
     * </code>
     *
     * @param     mixed $k The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByK($k = null, $comparison = null)
    {
        if (is_array($k)) {
            $useMinMax = false;
            if (isset($k['min'])) {
                $this->addUsingAlias(PopqbPeer::K, $k['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($k['max'])) {
                $this->addUsingAlias(PopqbPeer::K, $k['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::K, $k, $comparison);
    }

    /**
     * Filter the query on the Salinity column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinity('fooValue');   // WHERE Salinity = 'fooValue'
     * $query->filterBySalinity('%fooValue%'); // WHERE Salinity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salinity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterBySalinity($salinity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salinity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $salinity)) {
                $salinity = str_replace('*', '%', $salinity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopqbPeer::SALINITY, $salinity, $comparison);
    }

    /**
     * Filter the query on the t0 column
     *
     * Example usage:
     * <code>
     * $query->filterByT0(1234); // WHERE t0 = 1234
     * $query->filterByT0(array(12, 34)); // WHERE t0 IN (12, 34)
     * $query->filterByT0(array('min' => 12)); // WHERE t0 >= 12
     * $query->filterByT0(array('max' => 12)); // WHERE t0 <= 12
     * </code>
     *
     * @param     mixed $t0 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByT0($t0 = null, $comparison = null)
    {
        if (is_array($t0)) {
            $useMinMax = false;
            if (isset($t0['min'])) {
                $this->addUsingAlias(PopqbPeer::T0, $t0['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($t0['max'])) {
                $this->addUsingAlias(PopqbPeer::T0, $t0['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::T0, $t0, $comparison);
    }

    /**
     * Filter the query on the Temperature column
     *
     * Example usage:
     * <code>
     * $query->filterByTemperature(1234); // WHERE Temperature = 1234
     * $query->filterByTemperature(array(12, 34)); // WHERE Temperature IN (12, 34)
     * $query->filterByTemperature(array('min' => 12)); // WHERE Temperature >= 12
     * $query->filterByTemperature(array('max' => 12)); // WHERE Temperature <= 12
     * </code>
     *
     * @param     mixed $temperature The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByTemperature($temperature = null, $comparison = null)
    {
        if (is_array($temperature)) {
            $useMinMax = false;
            if (isset($temperature['min'])) {
                $this->addUsingAlias(PopqbPeer::TEMPERATURE, $temperature['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($temperature['max'])) {
                $this->addUsingAlias(PopqbPeer::TEMPERATURE, $temperature['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::TEMPERATURE, $temperature, $comparison);
    }

    /**
     * Filter the query on the Mortality column
     *
     * Example usage:
     * <code>
     * $query->filterByMortality(1234); // WHERE Mortality = 1234
     * $query->filterByMortality(array(12, 34)); // WHERE Mortality IN (12, 34)
     * $query->filterByMortality(array('min' => 12)); // WHERE Mortality >= 12
     * $query->filterByMortality(array('max' => 12)); // WHERE Mortality <= 12
     * </code>
     *
     * @param     mixed $mortality The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByMortality($mortality = null, $comparison = null)
    {
        if (is_array($mortality)) {
            $useMinMax = false;
            if (isset($mortality['min'])) {
                $this->addUsingAlias(PopqbPeer::MORTALITY, $mortality['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mortality['max'])) {
                $this->addUsingAlias(PopqbPeer::MORTALITY, $mortality['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::MORTALITY, $mortality, $comparison);
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
     * @return PopqbQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PopqbPeer::LOCALITY, $locality, $comparison);
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
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByB($b = null, $comparison = null)
    {
        if (is_array($b)) {
            $useMinMax = false;
            if (isset($b['min'])) {
                $this->addUsingAlias(PopqbPeer::B, $b['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($b['max'])) {
                $this->addUsingAlias(PopqbPeer::B, $b['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::B, $b, $comparison);
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
     * @return PopqbQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PopqbPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the QBRemarks column
     *
     * Example usage:
     * <code>
     * $query->filterByQbremarks('fooValue');   // WHERE QBRemarks = 'fooValue'
     * $query->filterByQbremarks('%fooValue%'); // WHERE QBRemarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qbremarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByQbremarks($qbremarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qbremarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $qbremarks)) {
                $qbremarks = str_replace('*', '%', $qbremarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopqbPeer::QBREMARKS, $qbremarks, $comparison);
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
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(PopqbPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(PopqbPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::ENTERED, $entered, $comparison);
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
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(PopqbPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(PopqbPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(PopqbPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(PopqbPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::MODIFIED, $modified, $comparison);
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
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(PopqbPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(PopqbPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(PopqbPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(PopqbPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::EXPERT, $expert, $comparison);
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
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(PopqbPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(PopqbPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return PopqbQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(PopqbPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(PopqbPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopqbPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Popqb $popqb Object to remove from the list of results
     *
     * @return PopqbQuery The current query, for fluid interface
     */
    public function prune($popqb = null)
    {
        if ($popqb) {
            $this->addUsingAlias(PopqbPeer::AUTOCTR, $popqb->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
