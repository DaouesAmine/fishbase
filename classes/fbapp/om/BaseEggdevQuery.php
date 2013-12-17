<?php


/**
 * Base class that represents a query for the 'eggdev' table.
 *
 *
 *
 * @method EggdevQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method EggdevQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method EggdevQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method EggdevQuery orderByEggdevrefno($order = Criteria::ASC) Order by the EggDevRefNo column
 * @method EggdevQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method EggdevQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method EggdevQuery orderByTemperature($order = Criteria::ASC) Order by the Temperature column
 * @method EggdevQuery orderBySalinity($order = Criteria::ASC) Order by the Salinity column
 * @method EggdevQuery orderBySalinity2($order = Criteria::ASC) Order by the Salinity2 column
 * @method EggdevQuery orderByEggdiameter($order = Criteria::ASC) Order by the EggDiameter column
 * @method EggdevQuery orderByEggdevtime($order = Criteria::ASC) Order by the EggDevTime column
 * @method EggdevQuery orderByDataref($order = Criteria::ASC) Order by the DataRef column
 * @method EggdevQuery orderByDatatype($order = Criteria::ASC) Order by the DataType column
 * @method EggdevQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method EggdevQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method EggdevQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method EggdevQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method EggdevQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method EggdevQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method EggdevQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method EggdevQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method EggdevQuery groupByAutoctr() Group by the AutoCtr column
 * @method EggdevQuery groupByStockcode() Group by the StockCode column
 * @method EggdevQuery groupBySpeccode() Group by the SpecCode column
 * @method EggdevQuery groupByEggdevrefno() Group by the EggDevRefNo column
 * @method EggdevQuery groupByLocality() Group by the Locality column
 * @method EggdevQuery groupByCCode() Group by the C_Code column
 * @method EggdevQuery groupByTemperature() Group by the Temperature column
 * @method EggdevQuery groupBySalinity() Group by the Salinity column
 * @method EggdevQuery groupBySalinity2() Group by the Salinity2 column
 * @method EggdevQuery groupByEggdiameter() Group by the EggDiameter column
 * @method EggdevQuery groupByEggdevtime() Group by the EggDevTime column
 * @method EggdevQuery groupByDataref() Group by the DataRef column
 * @method EggdevQuery groupByDatatype() Group by the DataType column
 * @method EggdevQuery groupByRemarks() Group by the Remarks column
 * @method EggdevQuery groupByEntered() Group by the Entered column
 * @method EggdevQuery groupByDateentered() Group by the DateEntered column
 * @method EggdevQuery groupByModified() Group by the Modified column
 * @method EggdevQuery groupByDatemodified() Group by the DateModified column
 * @method EggdevQuery groupByExpert() Group by the Expert column
 * @method EggdevQuery groupByDatechecked() Group by the DateChecked column
 * @method EggdevQuery groupByTs() Group by the TS column
 *
 * @method EggdevQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EggdevQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EggdevQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Eggdev findOne(PropelPDO $con = null) Return the first Eggdev matching the query
 * @method Eggdev findOneOrCreate(PropelPDO $con = null) Return the first Eggdev matching the query, or a new Eggdev object populated from the query conditions when no match is found
 *
 * @method Eggdev findOneByStockcode(int $StockCode) Return the first Eggdev filtered by the StockCode column
 * @method Eggdev findOneBySpeccode(int $SpecCode) Return the first Eggdev filtered by the SpecCode column
 * @method Eggdev findOneByEggdevrefno(int $EggDevRefNo) Return the first Eggdev filtered by the EggDevRefNo column
 * @method Eggdev findOneByLocality(string $Locality) Return the first Eggdev filtered by the Locality column
 * @method Eggdev findOneByCCode(string $C_Code) Return the first Eggdev filtered by the C_Code column
 * @method Eggdev findOneByTemperature(double $Temperature) Return the first Eggdev filtered by the Temperature column
 * @method Eggdev findOneBySalinity(double $Salinity) Return the first Eggdev filtered by the Salinity column
 * @method Eggdev findOneBySalinity2(string $Salinity2) Return the first Eggdev filtered by the Salinity2 column
 * @method Eggdev findOneByEggdiameter(double $EggDiameter) Return the first Eggdev filtered by the EggDiameter column
 * @method Eggdev findOneByEggdevtime(double $EggDevTime) Return the first Eggdev filtered by the EggDevTime column
 * @method Eggdev findOneByDataref(int $DataRef) Return the first Eggdev filtered by the DataRef column
 * @method Eggdev findOneByDatatype(string $DataType) Return the first Eggdev filtered by the DataType column
 * @method Eggdev findOneByRemarks(string $Remarks) Return the first Eggdev filtered by the Remarks column
 * @method Eggdev findOneByEntered(int $Entered) Return the first Eggdev filtered by the Entered column
 * @method Eggdev findOneByDateentered(string $DateEntered) Return the first Eggdev filtered by the DateEntered column
 * @method Eggdev findOneByModified(int $Modified) Return the first Eggdev filtered by the Modified column
 * @method Eggdev findOneByDatemodified(string $DateModified) Return the first Eggdev filtered by the DateModified column
 * @method Eggdev findOneByExpert(int $Expert) Return the first Eggdev filtered by the Expert column
 * @method Eggdev findOneByDatechecked(string $DateChecked) Return the first Eggdev filtered by the DateChecked column
 * @method Eggdev findOneByTs(string $TS) Return the first Eggdev filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Eggdev objects filtered by the AutoCtr column
 * @method array findByStockcode(int $StockCode) Return Eggdev objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Eggdev objects filtered by the SpecCode column
 * @method array findByEggdevrefno(int $EggDevRefNo) Return Eggdev objects filtered by the EggDevRefNo column
 * @method array findByLocality(string $Locality) Return Eggdev objects filtered by the Locality column
 * @method array findByCCode(string $C_Code) Return Eggdev objects filtered by the C_Code column
 * @method array findByTemperature(double $Temperature) Return Eggdev objects filtered by the Temperature column
 * @method array findBySalinity(double $Salinity) Return Eggdev objects filtered by the Salinity column
 * @method array findBySalinity2(string $Salinity2) Return Eggdev objects filtered by the Salinity2 column
 * @method array findByEggdiameter(double $EggDiameter) Return Eggdev objects filtered by the EggDiameter column
 * @method array findByEggdevtime(double $EggDevTime) Return Eggdev objects filtered by the EggDevTime column
 * @method array findByDataref(int $DataRef) Return Eggdev objects filtered by the DataRef column
 * @method array findByDatatype(string $DataType) Return Eggdev objects filtered by the DataType column
 * @method array findByRemarks(string $Remarks) Return Eggdev objects filtered by the Remarks column
 * @method array findByEntered(int $Entered) Return Eggdev objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Eggdev objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Eggdev objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Eggdev objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Eggdev objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Eggdev objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Eggdev objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEggdevQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEggdevQuery object.
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
            $modelName = 'Eggdev';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EggdevQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EggdevQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EggdevQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EggdevQuery) {
            return $criteria;
        }
        $query = new EggdevQuery(null, null, $modelAlias);

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
     * @return   Eggdev|Eggdev[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EggdevPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EggdevPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Eggdev A model object, or null if the key is not found
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
     * @return                 Eggdev A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `StockCode`, `SpecCode`, `EggDevRefNo`, `Locality`, `C_Code`, `Temperature`, `Salinity`, `Salinity2`, `EggDiameter`, `EggDevTime`, `DataRef`, `DataType`, `Remarks`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `eggdev` WHERE `AutoCtr` = :p0';
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
            $obj = new Eggdev();
            $obj->hydrate($row);
            EggdevPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Eggdev|Eggdev[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Eggdev[]|mixed the list of results, formatted by the current formatter
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
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EggdevPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EggdevPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(EggdevPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(EggdevPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(EggdevPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(EggdevPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(EggdevPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(EggdevPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the EggDevRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByEggdevrefno(1234); // WHERE EggDevRefNo = 1234
     * $query->filterByEggdevrefno(array(12, 34)); // WHERE EggDevRefNo IN (12, 34)
     * $query->filterByEggdevrefno(array('min' => 12)); // WHERE EggDevRefNo >= 12
     * $query->filterByEggdevrefno(array('max' => 12)); // WHERE EggDevRefNo <= 12
     * </code>
     *
     * @param     mixed $eggdevrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByEggdevrefno($eggdevrefno = null, $comparison = null)
    {
        if (is_array($eggdevrefno)) {
            $useMinMax = false;
            if (isset($eggdevrefno['min'])) {
                $this->addUsingAlias(EggdevPeer::EGGDEVREFNO, $eggdevrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggdevrefno['max'])) {
                $this->addUsingAlias(EggdevPeer::EGGDEVREFNO, $eggdevrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::EGGDEVREFNO, $eggdevrefno, $comparison);
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
     * @return EggdevQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EggdevPeer::LOCALITY, $locality, $comparison);
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
     * @return EggdevQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EggdevPeer::C_CODE, $cCode, $comparison);
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
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByTemperature($temperature = null, $comparison = null)
    {
        if (is_array($temperature)) {
            $useMinMax = false;
            if (isset($temperature['min'])) {
                $this->addUsingAlias(EggdevPeer::TEMPERATURE, $temperature['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($temperature['max'])) {
                $this->addUsingAlias(EggdevPeer::TEMPERATURE, $temperature['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::TEMPERATURE, $temperature, $comparison);
    }

    /**
     * Filter the query on the Salinity column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinity(1234); // WHERE Salinity = 1234
     * $query->filterBySalinity(array(12, 34)); // WHERE Salinity IN (12, 34)
     * $query->filterBySalinity(array('min' => 12)); // WHERE Salinity >= 12
     * $query->filterBySalinity(array('max' => 12)); // WHERE Salinity <= 12
     * </code>
     *
     * @param     mixed $salinity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterBySalinity($salinity = null, $comparison = null)
    {
        if (is_array($salinity)) {
            $useMinMax = false;
            if (isset($salinity['min'])) {
                $this->addUsingAlias(EggdevPeer::SALINITY, $salinity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinity['max'])) {
                $this->addUsingAlias(EggdevPeer::SALINITY, $salinity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::SALINITY, $salinity, $comparison);
    }

    /**
     * Filter the query on the Salinity2 column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinity2('fooValue');   // WHERE Salinity2 = 'fooValue'
     * $query->filterBySalinity2('%fooValue%'); // WHERE Salinity2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salinity2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterBySalinity2($salinity2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salinity2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $salinity2)) {
                $salinity2 = str_replace('*', '%', $salinity2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EggdevPeer::SALINITY2, $salinity2, $comparison);
    }

    /**
     * Filter the query on the EggDiameter column
     *
     * Example usage:
     * <code>
     * $query->filterByEggdiameter(1234); // WHERE EggDiameter = 1234
     * $query->filterByEggdiameter(array(12, 34)); // WHERE EggDiameter IN (12, 34)
     * $query->filterByEggdiameter(array('min' => 12)); // WHERE EggDiameter >= 12
     * $query->filterByEggdiameter(array('max' => 12)); // WHERE EggDiameter <= 12
     * </code>
     *
     * @param     mixed $eggdiameter The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByEggdiameter($eggdiameter = null, $comparison = null)
    {
        if (is_array($eggdiameter)) {
            $useMinMax = false;
            if (isset($eggdiameter['min'])) {
                $this->addUsingAlias(EggdevPeer::EGGDIAMETER, $eggdiameter['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggdiameter['max'])) {
                $this->addUsingAlias(EggdevPeer::EGGDIAMETER, $eggdiameter['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::EGGDIAMETER, $eggdiameter, $comparison);
    }

    /**
     * Filter the query on the EggDevTime column
     *
     * Example usage:
     * <code>
     * $query->filterByEggdevtime(1234); // WHERE EggDevTime = 1234
     * $query->filterByEggdevtime(array(12, 34)); // WHERE EggDevTime IN (12, 34)
     * $query->filterByEggdevtime(array('min' => 12)); // WHERE EggDevTime >= 12
     * $query->filterByEggdevtime(array('max' => 12)); // WHERE EggDevTime <= 12
     * </code>
     *
     * @param     mixed $eggdevtime The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByEggdevtime($eggdevtime = null, $comparison = null)
    {
        if (is_array($eggdevtime)) {
            $useMinMax = false;
            if (isset($eggdevtime['min'])) {
                $this->addUsingAlias(EggdevPeer::EGGDEVTIME, $eggdevtime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggdevtime['max'])) {
                $this->addUsingAlias(EggdevPeer::EGGDEVTIME, $eggdevtime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::EGGDEVTIME, $eggdevtime, $comparison);
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
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByDataref($dataref = null, $comparison = null)
    {
        if (is_array($dataref)) {
            $useMinMax = false;
            if (isset($dataref['min'])) {
                $this->addUsingAlias(EggdevPeer::DATAREF, $dataref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataref['max'])) {
                $this->addUsingAlias(EggdevPeer::DATAREF, $dataref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::DATAREF, $dataref, $comparison);
    }

    /**
     * Filter the query on the DataType column
     *
     * Example usage:
     * <code>
     * $query->filterByDatatype('fooValue');   // WHERE DataType = 'fooValue'
     * $query->filterByDatatype('%fooValue%'); // WHERE DataType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datatype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByDatatype($datatype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datatype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datatype)) {
                $datatype = str_replace('*', '%', $datatype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EggdevPeer::DATATYPE, $datatype, $comparison);
    }

    /**
     * Filter the query on the Remarks column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarks('fooValue');   // WHERE Remarks = 'fooValue'
     * $query->filterByRemarks('%fooValue%'); // WHERE Remarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarks)) {
                $remarks = str_replace('*', '%', $remarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EggdevPeer::REMARKS, $remarks, $comparison);
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
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(EggdevPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(EggdevPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::ENTERED, $entered, $comparison);
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
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(EggdevPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(EggdevPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(EggdevPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(EggdevPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::MODIFIED, $modified, $comparison);
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
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(EggdevPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(EggdevPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(EggdevPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(EggdevPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::EXPERT, $expert, $comparison);
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
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(EggdevPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(EggdevPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return EggdevQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(EggdevPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(EggdevPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EggdevPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Eggdev $eggdev Object to remove from the list of results
     *
     * @return EggdevQuery The current query, for fluid interface
     */
    public function prune($eggdev = null)
    {
        if ($eggdev) {
            $this->addUsingAlias(EggdevPeer::AUTOCTR, $eggdev->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
