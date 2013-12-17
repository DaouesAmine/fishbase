<?php


/**
 * Base class that represents a query for the 'gillarea' table.
 *
 *
 *
 * @method GillareaQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method GillareaQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method GillareaQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method GillareaQuery orderByGillarearefno($order = Criteria::ASC) Order by the GillAreaRefNo column
 * @method GillareaQuery orderByBodyweight($order = Criteria::ASC) Order by the BodyWeight column
 * @method GillareaQuery orderByDataref($order = Criteria::ASC) Order by the DataRef column
 * @method GillareaQuery orderByGillarea($order = Criteria::ASC) Order by the GillArea column
 * @method GillareaQuery orderByBloodwater($order = Criteria::ASC) Order by the BloodWater column
 * @method GillareaQuery orderByDataref2($order = Criteria::ASC) Order by the DataRef2 column
 * @method GillareaQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method GillareaQuery orderByAirbreather($order = Criteria::ASC) Order by the AirBreather column
 * @method GillareaQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method GillareaQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method GillareaQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method GillareaQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method GillareaQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method GillareaQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method GillareaQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method GillareaQuery groupByAutoctr() Group by the autoctr column
 * @method GillareaQuery groupByStockcode() Group by the StockCode column
 * @method GillareaQuery groupBySpeccode() Group by the SpecCode column
 * @method GillareaQuery groupByGillarearefno() Group by the GillAreaRefNo column
 * @method GillareaQuery groupByBodyweight() Group by the BodyWeight column
 * @method GillareaQuery groupByDataref() Group by the DataRef column
 * @method GillareaQuery groupByGillarea() Group by the GillArea column
 * @method GillareaQuery groupByBloodwater() Group by the BloodWater column
 * @method GillareaQuery groupByDataref2() Group by the DataRef2 column
 * @method GillareaQuery groupByComment() Group by the Comment column
 * @method GillareaQuery groupByAirbreather() Group by the AirBreather column
 * @method GillareaQuery groupByEntered() Group by the Entered column
 * @method GillareaQuery groupByDateentered() Group by the DateEntered column
 * @method GillareaQuery groupByModified() Group by the Modified column
 * @method GillareaQuery groupByDatemodified() Group by the DateModified column
 * @method GillareaQuery groupByExpert() Group by the Expert column
 * @method GillareaQuery groupByDatechecked() Group by the DateChecked column
 * @method GillareaQuery groupByTs() Group by the TS column
 *
 * @method GillareaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GillareaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GillareaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Gillarea findOne(PropelPDO $con = null) Return the first Gillarea matching the query
 * @method Gillarea findOneOrCreate(PropelPDO $con = null) Return the first Gillarea matching the query, or a new Gillarea object populated from the query conditions when no match is found
 *
 * @method Gillarea findOneByStockcode(int $StockCode) Return the first Gillarea filtered by the StockCode column
 * @method Gillarea findOneBySpeccode(int $SpecCode) Return the first Gillarea filtered by the SpecCode column
 * @method Gillarea findOneByGillarearefno(int $GillAreaRefNo) Return the first Gillarea filtered by the GillAreaRefNo column
 * @method Gillarea findOneByBodyweight(double $BodyWeight) Return the first Gillarea filtered by the BodyWeight column
 * @method Gillarea findOneByDataref(int $DataRef) Return the first Gillarea filtered by the DataRef column
 * @method Gillarea findOneByGillarea(double $GillArea) Return the first Gillarea filtered by the GillArea column
 * @method Gillarea findOneByBloodwater(double $BloodWater) Return the first Gillarea filtered by the BloodWater column
 * @method Gillarea findOneByDataref2(int $DataRef2) Return the first Gillarea filtered by the DataRef2 column
 * @method Gillarea findOneByComment(string $Comment) Return the first Gillarea filtered by the Comment column
 * @method Gillarea findOneByAirbreather(int $AirBreather) Return the first Gillarea filtered by the AirBreather column
 * @method Gillarea findOneByEntered(int $Entered) Return the first Gillarea filtered by the Entered column
 * @method Gillarea findOneByDateentered(string $DateEntered) Return the first Gillarea filtered by the DateEntered column
 * @method Gillarea findOneByModified(int $Modified) Return the first Gillarea filtered by the Modified column
 * @method Gillarea findOneByDatemodified(string $DateModified) Return the first Gillarea filtered by the DateModified column
 * @method Gillarea findOneByExpert(int $Expert) Return the first Gillarea filtered by the Expert column
 * @method Gillarea findOneByDatechecked(string $DateChecked) Return the first Gillarea filtered by the DateChecked column
 * @method Gillarea findOneByTs(string $TS) Return the first Gillarea filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Gillarea objects filtered by the autoctr column
 * @method array findByStockcode(int $StockCode) Return Gillarea objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Gillarea objects filtered by the SpecCode column
 * @method array findByGillarearefno(int $GillAreaRefNo) Return Gillarea objects filtered by the GillAreaRefNo column
 * @method array findByBodyweight(double $BodyWeight) Return Gillarea objects filtered by the BodyWeight column
 * @method array findByDataref(int $DataRef) Return Gillarea objects filtered by the DataRef column
 * @method array findByGillarea(double $GillArea) Return Gillarea objects filtered by the GillArea column
 * @method array findByBloodwater(double $BloodWater) Return Gillarea objects filtered by the BloodWater column
 * @method array findByDataref2(int $DataRef2) Return Gillarea objects filtered by the DataRef2 column
 * @method array findByComment(string $Comment) Return Gillarea objects filtered by the Comment column
 * @method array findByAirbreather(int $AirBreather) Return Gillarea objects filtered by the AirBreather column
 * @method array findByEntered(int $Entered) Return Gillarea objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Gillarea objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Gillarea objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Gillarea objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Gillarea objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Gillarea objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Gillarea objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseGillareaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGillareaQuery object.
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
            $modelName = 'Gillarea';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GillareaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GillareaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GillareaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GillareaQuery) {
            return $criteria;
        }
        $query = new GillareaQuery(null, null, $modelAlias);

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
     * @return   Gillarea|Gillarea[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GillareaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GillareaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Gillarea A model object, or null if the key is not found
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
     * @return                 Gillarea A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `StockCode`, `SpecCode`, `GillAreaRefNo`, `BodyWeight`, `DataRef`, `GillArea`, `BloodWater`, `DataRef2`, `Comment`, `AirBreather`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `gillarea` WHERE `autoctr` = :p0';
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
            $obj = new Gillarea();
            $obj->hydrate($row);
            GillareaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Gillarea|Gillarea[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Gillarea[]|mixed the list of results, formatted by the current formatter
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
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GillareaPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GillareaPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(GillareaPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(GillareaPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(GillareaPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(GillareaPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(GillareaPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(GillareaPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the GillAreaRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByGillarearefno(1234); // WHERE GillAreaRefNo = 1234
     * $query->filterByGillarearefno(array(12, 34)); // WHERE GillAreaRefNo IN (12, 34)
     * $query->filterByGillarearefno(array('min' => 12)); // WHERE GillAreaRefNo >= 12
     * $query->filterByGillarearefno(array('max' => 12)); // WHERE GillAreaRefNo <= 12
     * </code>
     *
     * @param     mixed $gillarearefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByGillarearefno($gillarearefno = null, $comparison = null)
    {
        if (is_array($gillarearefno)) {
            $useMinMax = false;
            if (isset($gillarearefno['min'])) {
                $this->addUsingAlias(GillareaPeer::GILLAREAREFNO, $gillarearefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gillarearefno['max'])) {
                $this->addUsingAlias(GillareaPeer::GILLAREAREFNO, $gillarearefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::GILLAREAREFNO, $gillarearefno, $comparison);
    }

    /**
     * Filter the query on the BodyWeight column
     *
     * Example usage:
     * <code>
     * $query->filterByBodyweight(1234); // WHERE BodyWeight = 1234
     * $query->filterByBodyweight(array(12, 34)); // WHERE BodyWeight IN (12, 34)
     * $query->filterByBodyweight(array('min' => 12)); // WHERE BodyWeight >= 12
     * $query->filterByBodyweight(array('max' => 12)); // WHERE BodyWeight <= 12
     * </code>
     *
     * @param     mixed $bodyweight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByBodyweight($bodyweight = null, $comparison = null)
    {
        if (is_array($bodyweight)) {
            $useMinMax = false;
            if (isset($bodyweight['min'])) {
                $this->addUsingAlias(GillareaPeer::BODYWEIGHT, $bodyweight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bodyweight['max'])) {
                $this->addUsingAlias(GillareaPeer::BODYWEIGHT, $bodyweight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::BODYWEIGHT, $bodyweight, $comparison);
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
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByDataref($dataref = null, $comparison = null)
    {
        if (is_array($dataref)) {
            $useMinMax = false;
            if (isset($dataref['min'])) {
                $this->addUsingAlias(GillareaPeer::DATAREF, $dataref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataref['max'])) {
                $this->addUsingAlias(GillareaPeer::DATAREF, $dataref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::DATAREF, $dataref, $comparison);
    }

    /**
     * Filter the query on the GillArea column
     *
     * Example usage:
     * <code>
     * $query->filterByGillarea(1234); // WHERE GillArea = 1234
     * $query->filterByGillarea(array(12, 34)); // WHERE GillArea IN (12, 34)
     * $query->filterByGillarea(array('min' => 12)); // WHERE GillArea >= 12
     * $query->filterByGillarea(array('max' => 12)); // WHERE GillArea <= 12
     * </code>
     *
     * @param     mixed $gillarea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByGillarea($gillarea = null, $comparison = null)
    {
        if (is_array($gillarea)) {
            $useMinMax = false;
            if (isset($gillarea['min'])) {
                $this->addUsingAlias(GillareaPeer::GILLAREA, $gillarea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gillarea['max'])) {
                $this->addUsingAlias(GillareaPeer::GILLAREA, $gillarea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::GILLAREA, $gillarea, $comparison);
    }

    /**
     * Filter the query on the BloodWater column
     *
     * Example usage:
     * <code>
     * $query->filterByBloodwater(1234); // WHERE BloodWater = 1234
     * $query->filterByBloodwater(array(12, 34)); // WHERE BloodWater IN (12, 34)
     * $query->filterByBloodwater(array('min' => 12)); // WHERE BloodWater >= 12
     * $query->filterByBloodwater(array('max' => 12)); // WHERE BloodWater <= 12
     * </code>
     *
     * @param     mixed $bloodwater The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByBloodwater($bloodwater = null, $comparison = null)
    {
        if (is_array($bloodwater)) {
            $useMinMax = false;
            if (isset($bloodwater['min'])) {
                $this->addUsingAlias(GillareaPeer::BLOODWATER, $bloodwater['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bloodwater['max'])) {
                $this->addUsingAlias(GillareaPeer::BLOODWATER, $bloodwater['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::BLOODWATER, $bloodwater, $comparison);
    }

    /**
     * Filter the query on the DataRef2 column
     *
     * Example usage:
     * <code>
     * $query->filterByDataref2(1234); // WHERE DataRef2 = 1234
     * $query->filterByDataref2(array(12, 34)); // WHERE DataRef2 IN (12, 34)
     * $query->filterByDataref2(array('min' => 12)); // WHERE DataRef2 >= 12
     * $query->filterByDataref2(array('max' => 12)); // WHERE DataRef2 <= 12
     * </code>
     *
     * @param     mixed $dataref2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByDataref2($dataref2 = null, $comparison = null)
    {
        if (is_array($dataref2)) {
            $useMinMax = false;
            if (isset($dataref2['min'])) {
                $this->addUsingAlias(GillareaPeer::DATAREF2, $dataref2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataref2['max'])) {
                $this->addUsingAlias(GillareaPeer::DATAREF2, $dataref2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::DATAREF2, $dataref2, $comparison);
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
     * @return GillareaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GillareaPeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the AirBreather column
     *
     * Example usage:
     * <code>
     * $query->filterByAirbreather(1234); // WHERE AirBreather = 1234
     * $query->filterByAirbreather(array(12, 34)); // WHERE AirBreather IN (12, 34)
     * $query->filterByAirbreather(array('min' => 12)); // WHERE AirBreather >= 12
     * $query->filterByAirbreather(array('max' => 12)); // WHERE AirBreather <= 12
     * </code>
     *
     * @param     mixed $airbreather The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByAirbreather($airbreather = null, $comparison = null)
    {
        if (is_array($airbreather)) {
            $useMinMax = false;
            if (isset($airbreather['min'])) {
                $this->addUsingAlias(GillareaPeer::AIRBREATHER, $airbreather['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($airbreather['max'])) {
                $this->addUsingAlias(GillareaPeer::AIRBREATHER, $airbreather['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::AIRBREATHER, $airbreather, $comparison);
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
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(GillareaPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(GillareaPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::ENTERED, $entered, $comparison);
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
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(GillareaPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(GillareaPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(GillareaPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(GillareaPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::MODIFIED, $modified, $comparison);
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
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(GillareaPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(GillareaPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(GillareaPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(GillareaPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::EXPERT, $expert, $comparison);
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
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(GillareaPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(GillareaPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return GillareaQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(GillareaPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(GillareaPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GillareaPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Gillarea $gillarea Object to remove from the list of results
     *
     * @return GillareaQuery The current query, for fluid interface
     */
    public function prune($gillarea = null)
    {
        if ($gillarea) {
            $this->addUsingAlias(GillareaPeer::AUTOCTR, $gillarea->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
