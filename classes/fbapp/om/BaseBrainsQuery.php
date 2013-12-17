<?php


/**
 * Base class that represents a query for the 'brains' table.
 *
 *
 *
 * @method BrainsQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method BrainsQuery orderByName($order = Criteria::ASC) Order by the Name column
 * @method BrainsQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method BrainsQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method BrainsQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method BrainsQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method BrainsQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method BrainsQuery orderByNumber($order = Criteria::ASC) Order by the Number column
 * @method BrainsQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method BrainsQuery orderByBodyweight($order = Criteria::ASC) Order by the BodyWeight column
 * @method BrainsQuery orderByBrainweight($order = Criteria::ASC) Order by the BrainWeight column
 * @method BrainsQuery orderByEnccoeff($order = Criteria::ASC) Order by the EncCoeff column
 * @method BrainsQuery orderByEncindex($order = Criteria::ASC) Order by the EncIndex column
 * @method BrainsQuery orderBySl($order = Criteria::ASC) Order by the SL column
 * @method BrainsQuery orderByTl($order = Criteria::ASC) Order by the TL column
 * @method BrainsQuery orderByBrainsrefno($order = Criteria::ASC) Order by the BRAINSRefNo column
 * @method BrainsQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method BrainsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method BrainsQuery groupByAutoctr() Group by the autoctr column
 * @method BrainsQuery groupByName() Group by the Name column
 * @method BrainsQuery groupByGenus() Group by the Genus column
 * @method BrainsQuery groupBySpecies() Group by the Species column
 * @method BrainsQuery groupBySpeccode() Group by the SpecCode column
 * @method BrainsQuery groupByStockcode() Group by the StockCode column
 * @method BrainsQuery groupByLocality() Group by the Locality column
 * @method BrainsQuery groupByNumber() Group by the Number column
 * @method BrainsQuery groupByYear() Group by the Year column
 * @method BrainsQuery groupByBodyweight() Group by the BodyWeight column
 * @method BrainsQuery groupByBrainweight() Group by the BrainWeight column
 * @method BrainsQuery groupByEnccoeff() Group by the EncCoeff column
 * @method BrainsQuery groupByEncindex() Group by the EncIndex column
 * @method BrainsQuery groupBySl() Group by the SL column
 * @method BrainsQuery groupByTl() Group by the TL column
 * @method BrainsQuery groupByBrainsrefno() Group by the BRAINSRefNo column
 * @method BrainsQuery groupByRemarks() Group by the Remarks column
 * @method BrainsQuery groupByTs() Group by the TS column
 *
 * @method BrainsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method BrainsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method BrainsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Brains findOne(PropelPDO $con = null) Return the first Brains matching the query
 * @method Brains findOneOrCreate(PropelPDO $con = null) Return the first Brains matching the query, or a new Brains object populated from the query conditions when no match is found
 *
 * @method Brains findOneByName(string $Name) Return the first Brains filtered by the Name column
 * @method Brains findOneByGenus(string $Genus) Return the first Brains filtered by the Genus column
 * @method Brains findOneBySpecies(string $Species) Return the first Brains filtered by the Species column
 * @method Brains findOneBySpeccode(int $SpecCode) Return the first Brains filtered by the SpecCode column
 * @method Brains findOneByStockcode(int $StockCode) Return the first Brains filtered by the StockCode column
 * @method Brains findOneByLocality(string $Locality) Return the first Brains filtered by the Locality column
 * @method Brains findOneByNumber(int $Number) Return the first Brains filtered by the Number column
 * @method Brains findOneByYear(int $Year) Return the first Brains filtered by the Year column
 * @method Brains findOneByBodyweight(double $BodyWeight) Return the first Brains filtered by the BodyWeight column
 * @method Brains findOneByBrainweight(double $BrainWeight) Return the first Brains filtered by the BrainWeight column
 * @method Brains findOneByEnccoeff(double $EncCoeff) Return the first Brains filtered by the EncCoeff column
 * @method Brains findOneByEncindex(int $EncIndex) Return the first Brains filtered by the EncIndex column
 * @method Brains findOneBySl(double $SL) Return the first Brains filtered by the SL column
 * @method Brains findOneByTl(double $TL) Return the first Brains filtered by the TL column
 * @method Brains findOneByBrainsrefno(int $BRAINSRefNo) Return the first Brains filtered by the BRAINSRefNo column
 * @method Brains findOneByRemarks(string $Remarks) Return the first Brains filtered by the Remarks column
 * @method Brains findOneByTs(string $TS) Return the first Brains filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Brains objects filtered by the autoctr column
 * @method array findByName(string $Name) Return Brains objects filtered by the Name column
 * @method array findByGenus(string $Genus) Return Brains objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Brains objects filtered by the Species column
 * @method array findBySpeccode(int $SpecCode) Return Brains objects filtered by the SpecCode column
 * @method array findByStockcode(int $StockCode) Return Brains objects filtered by the StockCode column
 * @method array findByLocality(string $Locality) Return Brains objects filtered by the Locality column
 * @method array findByNumber(int $Number) Return Brains objects filtered by the Number column
 * @method array findByYear(int $Year) Return Brains objects filtered by the Year column
 * @method array findByBodyweight(double $BodyWeight) Return Brains objects filtered by the BodyWeight column
 * @method array findByBrainweight(double $BrainWeight) Return Brains objects filtered by the BrainWeight column
 * @method array findByEnccoeff(double $EncCoeff) Return Brains objects filtered by the EncCoeff column
 * @method array findByEncindex(int $EncIndex) Return Brains objects filtered by the EncIndex column
 * @method array findBySl(double $SL) Return Brains objects filtered by the SL column
 * @method array findByTl(double $TL) Return Brains objects filtered by the TL column
 * @method array findByBrainsrefno(int $BRAINSRefNo) Return Brains objects filtered by the BRAINSRefNo column
 * @method array findByRemarks(string $Remarks) Return Brains objects filtered by the Remarks column
 * @method array findByTs(string $TS) Return Brains objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseBrainsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseBrainsQuery object.
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
            $modelName = 'Brains';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new BrainsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   BrainsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return BrainsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof BrainsQuery) {
            return $criteria;
        }
        $query = new BrainsQuery(null, null, $modelAlias);

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
     * @return   Brains|Brains[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = BrainsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(BrainsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Brains A model object, or null if the key is not found
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
     * @return                 Brains A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `Name`, `Genus`, `Species`, `SpecCode`, `StockCode`, `Locality`, `Number`, `Year`, `BodyWeight`, `BrainWeight`, `EncCoeff`, `EncIndex`, `SL`, `TL`, `BRAINSRefNo`, `Remarks`, `TS` FROM `brains` WHERE `autoctr` = :p0';
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
            $obj = new Brains();
            $obj->hydrate($row);
            BrainsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Brains|Brains[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Brains[]|mixed the list of results, formatted by the current formatter
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
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(BrainsPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(BrainsPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(BrainsPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(BrainsPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BrainsPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the Name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE Name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE Name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BrainsPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the Genus column
     *
     * Example usage:
     * <code>
     * $query->filterByGenus('fooValue');   // WHERE Genus = 'fooValue'
     * $query->filterByGenus('%fooValue%'); // WHERE Genus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterByGenus($genus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genus)) {
                $genus = str_replace('*', '%', $genus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BrainsPeer::GENUS, $genus, $comparison);
    }

    /**
     * Filter the query on the Species column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecies('fooValue');   // WHERE Species = 'fooValue'
     * $query->filterBySpecies('%fooValue%'); // WHERE Species LIKE '%fooValue%'
     * </code>
     *
     * @param     string $species The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterBySpecies($species = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($species)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $species)) {
                $species = str_replace('*', '%', $species);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BrainsPeer::SPECIES, $species, $comparison);
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
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(BrainsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(BrainsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BrainsPeer::SPECCODE, $speccode, $comparison);
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
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(BrainsPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(BrainsPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BrainsPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return BrainsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BrainsPeer::LOCALITY, $locality, $comparison);
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
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterByNumber($number = null, $comparison = null)
    {
        if (is_array($number)) {
            $useMinMax = false;
            if (isset($number['min'])) {
                $this->addUsingAlias(BrainsPeer::NUMBER, $number['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($number['max'])) {
                $this->addUsingAlias(BrainsPeer::NUMBER, $number['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BrainsPeer::NUMBER, $number, $comparison);
    }

    /**
     * Filter the query on the Year column
     *
     * Example usage:
     * <code>
     * $query->filterByYear(1234); // WHERE Year = 1234
     * $query->filterByYear(array(12, 34)); // WHERE Year IN (12, 34)
     * $query->filterByYear(array('min' => 12)); // WHERE Year >= 12
     * $query->filterByYear(array('max' => 12)); // WHERE Year <= 12
     * </code>
     *
     * @param     mixed $year The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(BrainsPeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(BrainsPeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BrainsPeer::YEAR, $year, $comparison);
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
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterByBodyweight($bodyweight = null, $comparison = null)
    {
        if (is_array($bodyweight)) {
            $useMinMax = false;
            if (isset($bodyweight['min'])) {
                $this->addUsingAlias(BrainsPeer::BODYWEIGHT, $bodyweight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bodyweight['max'])) {
                $this->addUsingAlias(BrainsPeer::BODYWEIGHT, $bodyweight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BrainsPeer::BODYWEIGHT, $bodyweight, $comparison);
    }

    /**
     * Filter the query on the BrainWeight column
     *
     * Example usage:
     * <code>
     * $query->filterByBrainweight(1234); // WHERE BrainWeight = 1234
     * $query->filterByBrainweight(array(12, 34)); // WHERE BrainWeight IN (12, 34)
     * $query->filterByBrainweight(array('min' => 12)); // WHERE BrainWeight >= 12
     * $query->filterByBrainweight(array('max' => 12)); // WHERE BrainWeight <= 12
     * </code>
     *
     * @param     mixed $brainweight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterByBrainweight($brainweight = null, $comparison = null)
    {
        if (is_array($brainweight)) {
            $useMinMax = false;
            if (isset($brainweight['min'])) {
                $this->addUsingAlias(BrainsPeer::BRAINWEIGHT, $brainweight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($brainweight['max'])) {
                $this->addUsingAlias(BrainsPeer::BRAINWEIGHT, $brainweight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BrainsPeer::BRAINWEIGHT, $brainweight, $comparison);
    }

    /**
     * Filter the query on the EncCoeff column
     *
     * Example usage:
     * <code>
     * $query->filterByEnccoeff(1234); // WHERE EncCoeff = 1234
     * $query->filterByEnccoeff(array(12, 34)); // WHERE EncCoeff IN (12, 34)
     * $query->filterByEnccoeff(array('min' => 12)); // WHERE EncCoeff >= 12
     * $query->filterByEnccoeff(array('max' => 12)); // WHERE EncCoeff <= 12
     * </code>
     *
     * @param     mixed $enccoeff The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterByEnccoeff($enccoeff = null, $comparison = null)
    {
        if (is_array($enccoeff)) {
            $useMinMax = false;
            if (isset($enccoeff['min'])) {
                $this->addUsingAlias(BrainsPeer::ENCCOEFF, $enccoeff['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($enccoeff['max'])) {
                $this->addUsingAlias(BrainsPeer::ENCCOEFF, $enccoeff['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BrainsPeer::ENCCOEFF, $enccoeff, $comparison);
    }

    /**
     * Filter the query on the EncIndex column
     *
     * Example usage:
     * <code>
     * $query->filterByEncindex(1234); // WHERE EncIndex = 1234
     * $query->filterByEncindex(array(12, 34)); // WHERE EncIndex IN (12, 34)
     * $query->filterByEncindex(array('min' => 12)); // WHERE EncIndex >= 12
     * $query->filterByEncindex(array('max' => 12)); // WHERE EncIndex <= 12
     * </code>
     *
     * @param     mixed $encindex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterByEncindex($encindex = null, $comparison = null)
    {
        if (is_array($encindex)) {
            $useMinMax = false;
            if (isset($encindex['min'])) {
                $this->addUsingAlias(BrainsPeer::ENCINDEX, $encindex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($encindex['max'])) {
                $this->addUsingAlias(BrainsPeer::ENCINDEX, $encindex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BrainsPeer::ENCINDEX, $encindex, $comparison);
    }

    /**
     * Filter the query on the SL column
     *
     * Example usage:
     * <code>
     * $query->filterBySl(1234); // WHERE SL = 1234
     * $query->filterBySl(array(12, 34)); // WHERE SL IN (12, 34)
     * $query->filterBySl(array('min' => 12)); // WHERE SL >= 12
     * $query->filterBySl(array('max' => 12)); // WHERE SL <= 12
     * </code>
     *
     * @param     mixed $sl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterBySl($sl = null, $comparison = null)
    {
        if (is_array($sl)) {
            $useMinMax = false;
            if (isset($sl['min'])) {
                $this->addUsingAlias(BrainsPeer::SL, $sl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sl['max'])) {
                $this->addUsingAlias(BrainsPeer::SL, $sl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BrainsPeer::SL, $sl, $comparison);
    }

    /**
     * Filter the query on the TL column
     *
     * Example usage:
     * <code>
     * $query->filterByTl(1234); // WHERE TL = 1234
     * $query->filterByTl(array(12, 34)); // WHERE TL IN (12, 34)
     * $query->filterByTl(array('min' => 12)); // WHERE TL >= 12
     * $query->filterByTl(array('max' => 12)); // WHERE TL <= 12
     * </code>
     *
     * @param     mixed $tl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterByTl($tl = null, $comparison = null)
    {
        if (is_array($tl)) {
            $useMinMax = false;
            if (isset($tl['min'])) {
                $this->addUsingAlias(BrainsPeer::TL, $tl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tl['max'])) {
                $this->addUsingAlias(BrainsPeer::TL, $tl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BrainsPeer::TL, $tl, $comparison);
    }

    /**
     * Filter the query on the BRAINSRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByBrainsrefno(1234); // WHERE BRAINSRefNo = 1234
     * $query->filterByBrainsrefno(array(12, 34)); // WHERE BRAINSRefNo IN (12, 34)
     * $query->filterByBrainsrefno(array('min' => 12)); // WHERE BRAINSRefNo >= 12
     * $query->filterByBrainsrefno(array('max' => 12)); // WHERE BRAINSRefNo <= 12
     * </code>
     *
     * @param     mixed $brainsrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterByBrainsrefno($brainsrefno = null, $comparison = null)
    {
        if (is_array($brainsrefno)) {
            $useMinMax = false;
            if (isset($brainsrefno['min'])) {
                $this->addUsingAlias(BrainsPeer::BRAINSREFNO, $brainsrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($brainsrefno['max'])) {
                $this->addUsingAlias(BrainsPeer::BRAINSREFNO, $brainsrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BrainsPeer::BRAINSREFNO, $brainsrefno, $comparison);
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
     * @return BrainsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BrainsPeer::REMARKS, $remarks, $comparison);
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
     * @return BrainsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(BrainsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(BrainsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BrainsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Brains $brains Object to remove from the list of results
     *
     * @return BrainsQuery The current query, for fluid interface
     */
    public function prune($brains = null)
    {
        if ($brains) {
            $this->addUsingAlias(BrainsPeer::AUTOCTR, $brains->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
