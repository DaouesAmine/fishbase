<?php


/**
 * Base class that represents a query for the 'oxygen' table.
 *
 *
 *
 * @method OxygenQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method OxygenQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method OxygenQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method OxygenQuery orderByOxygenrefno($order = Criteria::ASC) Order by the OxygenRefNo column
 * @method OxygenQuery orderByTestcode($order = Criteria::ASC) Order by the TestCode column
 * @method OxygenQuery orderByFamilyoxref($order = Criteria::ASC) Order by the FamilyOxRef column
 * @method OxygenQuery orderBySpeciesoxref($order = Criteria::ASC) Order by the SpeciesOxRef column
 * @method OxygenQuery orderByWeight($order = Criteria::ASC) Order by the Weight column
 * @method OxygenQuery orderByNumber($order = Criteria::ASC) Order by the Number column
 * @method OxygenQuery orderBySex($order = Criteria::ASC) Order by the Sex column
 * @method OxygenQuery orderByTemp($order = Criteria::ASC) Order by the Temp column
 * @method OxygenQuery orderBySalinity($order = Criteria::ASC) Order by the Salinity column
 * @method OxygenQuery orderByOxygen($order = Criteria::ASC) Order by the Oxygen column
 * @method OxygenQuery orderByOxygenmgl($order = Criteria::ASC) Order by the Oxygenmgl column
 * @method OxygenQuery orderByOxygencons($order = Criteria::ASC) Order by the OxygenCons column
 * @method OxygenQuery orderByMetaboliclevel($order = Criteria::ASC) Order by the MetabolicLevel column
 * @method OxygenQuery orderByAppliedstress($order = Criteria::ASC) Order by the AppliedStress column
 * @method OxygenQuery orderByDataref($order = Criteria::ASC) Order by the DataRef column
 * @method OxygenQuery orderBySwimmingspeed($order = Criteria::ASC) Order by the SwimmingSpeed column
 * @method OxygenQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method OxygenQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method OxygenQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method OxygenQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method OxygenQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method OxygenQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method OxygenQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method OxygenQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method OxygenQuery groupByAutoctr() Group by the autoctr column
 * @method OxygenQuery groupBySpeccode() Group by the SpecCode column
 * @method OxygenQuery groupByStockcode() Group by the StockCode column
 * @method OxygenQuery groupByOxygenrefno() Group by the OxygenRefNo column
 * @method OxygenQuery groupByTestcode() Group by the TestCode column
 * @method OxygenQuery groupByFamilyoxref() Group by the FamilyOxRef column
 * @method OxygenQuery groupBySpeciesoxref() Group by the SpeciesOxRef column
 * @method OxygenQuery groupByWeight() Group by the Weight column
 * @method OxygenQuery groupByNumber() Group by the Number column
 * @method OxygenQuery groupBySex() Group by the Sex column
 * @method OxygenQuery groupByTemp() Group by the Temp column
 * @method OxygenQuery groupBySalinity() Group by the Salinity column
 * @method OxygenQuery groupByOxygen() Group by the Oxygen column
 * @method OxygenQuery groupByOxygenmgl() Group by the Oxygenmgl column
 * @method OxygenQuery groupByOxygencons() Group by the OxygenCons column
 * @method OxygenQuery groupByMetaboliclevel() Group by the MetabolicLevel column
 * @method OxygenQuery groupByAppliedstress() Group by the AppliedStress column
 * @method OxygenQuery groupByDataref() Group by the DataRef column
 * @method OxygenQuery groupBySwimmingspeed() Group by the SwimmingSpeed column
 * @method OxygenQuery groupByComment() Group by the Comment column
 * @method OxygenQuery groupByEntered() Group by the Entered column
 * @method OxygenQuery groupByDateentered() Group by the DateEntered column
 * @method OxygenQuery groupByModified() Group by the Modified column
 * @method OxygenQuery groupByDatemodified() Group by the DateModified column
 * @method OxygenQuery groupByExpert() Group by the Expert column
 * @method OxygenQuery groupByDatechecked() Group by the DateChecked column
 * @method OxygenQuery groupByTs() Group by the TS column
 *
 * @method OxygenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OxygenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OxygenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Oxygen findOne(PropelPDO $con = null) Return the first Oxygen matching the query
 * @method Oxygen findOneOrCreate(PropelPDO $con = null) Return the first Oxygen matching the query, or a new Oxygen object populated from the query conditions when no match is found
 *
 * @method Oxygen findOneBySpeccode(int $SpecCode) Return the first Oxygen filtered by the SpecCode column
 * @method Oxygen findOneByStockcode(int $StockCode) Return the first Oxygen filtered by the StockCode column
 * @method Oxygen findOneByOxygenrefno(int $OxygenRefNo) Return the first Oxygen filtered by the OxygenRefNo column
 * @method Oxygen findOneByTestcode(string $TestCode) Return the first Oxygen filtered by the TestCode column
 * @method Oxygen findOneByFamilyoxref(string $FamilyOxRef) Return the first Oxygen filtered by the FamilyOxRef column
 * @method Oxygen findOneBySpeciesoxref(string $SpeciesOxRef) Return the first Oxygen filtered by the SpeciesOxRef column
 * @method Oxygen findOneByWeight(double $Weight) Return the first Oxygen filtered by the Weight column
 * @method Oxygen findOneByNumber(int $Number) Return the first Oxygen filtered by the Number column
 * @method Oxygen findOneBySex(string $Sex) Return the first Oxygen filtered by the Sex column
 * @method Oxygen findOneByTemp(double $Temp) Return the first Oxygen filtered by the Temp column
 * @method Oxygen findOneBySalinity(int $Salinity) Return the first Oxygen filtered by the Salinity column
 * @method Oxygen findOneByOxygen(int $Oxygen) Return the first Oxygen filtered by the Oxygen column
 * @method Oxygen findOneByOxygenmgl(double $Oxygenmgl) Return the first Oxygen filtered by the Oxygenmgl column
 * @method Oxygen findOneByOxygencons(double $OxygenCons) Return the first Oxygen filtered by the OxygenCons column
 * @method Oxygen findOneByMetaboliclevel(string $MetabolicLevel) Return the first Oxygen filtered by the MetabolicLevel column
 * @method Oxygen findOneByAppliedstress(string $AppliedStress) Return the first Oxygen filtered by the AppliedStress column
 * @method Oxygen findOneByDataref(int $DataRef) Return the first Oxygen filtered by the DataRef column
 * @method Oxygen findOneBySwimmingspeed(double $SwimmingSpeed) Return the first Oxygen filtered by the SwimmingSpeed column
 * @method Oxygen findOneByComment(string $Comment) Return the first Oxygen filtered by the Comment column
 * @method Oxygen findOneByEntered(int $Entered) Return the first Oxygen filtered by the Entered column
 * @method Oxygen findOneByDateentered(string $DateEntered) Return the first Oxygen filtered by the DateEntered column
 * @method Oxygen findOneByModified(int $Modified) Return the first Oxygen filtered by the Modified column
 * @method Oxygen findOneByDatemodified(string $DateModified) Return the first Oxygen filtered by the DateModified column
 * @method Oxygen findOneByExpert(int $Expert) Return the first Oxygen filtered by the Expert column
 * @method Oxygen findOneByDatechecked(string $DateChecked) Return the first Oxygen filtered by the DateChecked column
 * @method Oxygen findOneByTs(string $TS) Return the first Oxygen filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Oxygen objects filtered by the autoctr column
 * @method array findBySpeccode(int $SpecCode) Return Oxygen objects filtered by the SpecCode column
 * @method array findByStockcode(int $StockCode) Return Oxygen objects filtered by the StockCode column
 * @method array findByOxygenrefno(int $OxygenRefNo) Return Oxygen objects filtered by the OxygenRefNo column
 * @method array findByTestcode(string $TestCode) Return Oxygen objects filtered by the TestCode column
 * @method array findByFamilyoxref(string $FamilyOxRef) Return Oxygen objects filtered by the FamilyOxRef column
 * @method array findBySpeciesoxref(string $SpeciesOxRef) Return Oxygen objects filtered by the SpeciesOxRef column
 * @method array findByWeight(double $Weight) Return Oxygen objects filtered by the Weight column
 * @method array findByNumber(int $Number) Return Oxygen objects filtered by the Number column
 * @method array findBySex(string $Sex) Return Oxygen objects filtered by the Sex column
 * @method array findByTemp(double $Temp) Return Oxygen objects filtered by the Temp column
 * @method array findBySalinity(int $Salinity) Return Oxygen objects filtered by the Salinity column
 * @method array findByOxygen(int $Oxygen) Return Oxygen objects filtered by the Oxygen column
 * @method array findByOxygenmgl(double $Oxygenmgl) Return Oxygen objects filtered by the Oxygenmgl column
 * @method array findByOxygencons(double $OxygenCons) Return Oxygen objects filtered by the OxygenCons column
 * @method array findByMetaboliclevel(string $MetabolicLevel) Return Oxygen objects filtered by the MetabolicLevel column
 * @method array findByAppliedstress(string $AppliedStress) Return Oxygen objects filtered by the AppliedStress column
 * @method array findByDataref(int $DataRef) Return Oxygen objects filtered by the DataRef column
 * @method array findBySwimmingspeed(double $SwimmingSpeed) Return Oxygen objects filtered by the SwimmingSpeed column
 * @method array findByComment(string $Comment) Return Oxygen objects filtered by the Comment column
 * @method array findByEntered(int $Entered) Return Oxygen objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Oxygen objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Oxygen objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Oxygen objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Oxygen objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Oxygen objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Oxygen objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseOxygenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOxygenQuery object.
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
            $modelName = 'Oxygen';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OxygenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OxygenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OxygenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OxygenQuery) {
            return $criteria;
        }
        $query = new OxygenQuery(null, null, $modelAlias);

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
     * @return   Oxygen|Oxygen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OxygenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OxygenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Oxygen A model object, or null if the key is not found
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
     * @return                 Oxygen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `SpecCode`, `StockCode`, `OxygenRefNo`, `TestCode`, `FamilyOxRef`, `SpeciesOxRef`, `Weight`, `Number`, `Sex`, `Temp`, `Salinity`, `Oxygen`, `Oxygenmgl`, `OxygenCons`, `MetabolicLevel`, `AppliedStress`, `DataRef`, `SwimmingSpeed`, `Comment`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `oxygen` WHERE `autoctr` = :p0';
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
            $obj = new Oxygen();
            $obj->hydrate($row);
            OxygenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Oxygen|Oxygen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Oxygen[]|mixed the list of results, formatted by the current formatter
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
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(OxygenPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(OxygenPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(OxygenPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(OxygenPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(OxygenPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(OxygenPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::SPECCODE, $speccode, $comparison);
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
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(OxygenPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(OxygenPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the OxygenRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByOxygenrefno(1234); // WHERE OxygenRefNo = 1234
     * $query->filterByOxygenrefno(array(12, 34)); // WHERE OxygenRefNo IN (12, 34)
     * $query->filterByOxygenrefno(array('min' => 12)); // WHERE OxygenRefNo >= 12
     * $query->filterByOxygenrefno(array('max' => 12)); // WHERE OxygenRefNo <= 12
     * </code>
     *
     * @param     mixed $oxygenrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByOxygenrefno($oxygenrefno = null, $comparison = null)
    {
        if (is_array($oxygenrefno)) {
            $useMinMax = false;
            if (isset($oxygenrefno['min'])) {
                $this->addUsingAlias(OxygenPeer::OXYGENREFNO, $oxygenrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenrefno['max'])) {
                $this->addUsingAlias(OxygenPeer::OXYGENREFNO, $oxygenrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::OXYGENREFNO, $oxygenrefno, $comparison);
    }

    /**
     * Filter the query on the TestCode column
     *
     * Example usage:
     * <code>
     * $query->filterByTestcode('fooValue');   // WHERE TestCode = 'fooValue'
     * $query->filterByTestcode('%fooValue%'); // WHERE TestCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $testcode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByTestcode($testcode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($testcode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $testcode)) {
                $testcode = str_replace('*', '%', $testcode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OxygenPeer::TESTCODE, $testcode, $comparison);
    }

    /**
     * Filter the query on the FamilyOxRef column
     *
     * Example usage:
     * <code>
     * $query->filterByFamilyoxref('fooValue');   // WHERE FamilyOxRef = 'fooValue'
     * $query->filterByFamilyoxref('%fooValue%'); // WHERE FamilyOxRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $familyoxref The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByFamilyoxref($familyoxref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($familyoxref)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $familyoxref)) {
                $familyoxref = str_replace('*', '%', $familyoxref);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OxygenPeer::FAMILYOXREF, $familyoxref, $comparison);
    }

    /**
     * Filter the query on the SpeciesOxRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeciesoxref('fooValue');   // WHERE SpeciesOxRef = 'fooValue'
     * $query->filterBySpeciesoxref('%fooValue%'); // WHERE SpeciesOxRef LIKE '%fooValue%'
     * </code>
     *
     * @param     string $speciesoxref The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterBySpeciesoxref($speciesoxref = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($speciesoxref)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $speciesoxref)) {
                $speciesoxref = str_replace('*', '%', $speciesoxref);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OxygenPeer::SPECIESOXREF, $speciesoxref, $comparison);
    }

    /**
     * Filter the query on the Weight column
     *
     * Example usage:
     * <code>
     * $query->filterByWeight(1234); // WHERE Weight = 1234
     * $query->filterByWeight(array(12, 34)); // WHERE Weight IN (12, 34)
     * $query->filterByWeight(array('min' => 12)); // WHERE Weight >= 12
     * $query->filterByWeight(array('max' => 12)); // WHERE Weight <= 12
     * </code>
     *
     * @param     mixed $weight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByWeight($weight = null, $comparison = null)
    {
        if (is_array($weight)) {
            $useMinMax = false;
            if (isset($weight['min'])) {
                $this->addUsingAlias(OxygenPeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weight['max'])) {
                $this->addUsingAlias(OxygenPeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::WEIGHT, $weight, $comparison);
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
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByNumber($number = null, $comparison = null)
    {
        if (is_array($number)) {
            $useMinMax = false;
            if (isset($number['min'])) {
                $this->addUsingAlias(OxygenPeer::NUMBER, $number['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($number['max'])) {
                $this->addUsingAlias(OxygenPeer::NUMBER, $number['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::NUMBER, $number, $comparison);
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
     * @return OxygenQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OxygenPeer::SEX, $sex, $comparison);
    }

    /**
     * Filter the query on the Temp column
     *
     * Example usage:
     * <code>
     * $query->filterByTemp(1234); // WHERE Temp = 1234
     * $query->filterByTemp(array(12, 34)); // WHERE Temp IN (12, 34)
     * $query->filterByTemp(array('min' => 12)); // WHERE Temp >= 12
     * $query->filterByTemp(array('max' => 12)); // WHERE Temp <= 12
     * </code>
     *
     * @param     mixed $temp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByTemp($temp = null, $comparison = null)
    {
        if (is_array($temp)) {
            $useMinMax = false;
            if (isset($temp['min'])) {
                $this->addUsingAlias(OxygenPeer::TEMP, $temp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($temp['max'])) {
                $this->addUsingAlias(OxygenPeer::TEMP, $temp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::TEMP, $temp, $comparison);
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
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterBySalinity($salinity = null, $comparison = null)
    {
        if (is_array($salinity)) {
            $useMinMax = false;
            if (isset($salinity['min'])) {
                $this->addUsingAlias(OxygenPeer::SALINITY, $salinity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($salinity['max'])) {
                $this->addUsingAlias(OxygenPeer::SALINITY, $salinity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::SALINITY, $salinity, $comparison);
    }

    /**
     * Filter the query on the Oxygen column
     *
     * Example usage:
     * <code>
     * $query->filterByOxygen(1234); // WHERE Oxygen = 1234
     * $query->filterByOxygen(array(12, 34)); // WHERE Oxygen IN (12, 34)
     * $query->filterByOxygen(array('min' => 12)); // WHERE Oxygen >= 12
     * $query->filterByOxygen(array('max' => 12)); // WHERE Oxygen <= 12
     * </code>
     *
     * @param     mixed $oxygen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByOxygen($oxygen = null, $comparison = null)
    {
        if (is_array($oxygen)) {
            $useMinMax = false;
            if (isset($oxygen['min'])) {
                $this->addUsingAlias(OxygenPeer::OXYGEN, $oxygen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygen['max'])) {
                $this->addUsingAlias(OxygenPeer::OXYGEN, $oxygen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::OXYGEN, $oxygen, $comparison);
    }

    /**
     * Filter the query on the Oxygenmgl column
     *
     * Example usage:
     * <code>
     * $query->filterByOxygenmgl(1234); // WHERE Oxygenmgl = 1234
     * $query->filterByOxygenmgl(array(12, 34)); // WHERE Oxygenmgl IN (12, 34)
     * $query->filterByOxygenmgl(array('min' => 12)); // WHERE Oxygenmgl >= 12
     * $query->filterByOxygenmgl(array('max' => 12)); // WHERE Oxygenmgl <= 12
     * </code>
     *
     * @param     mixed $oxygenmgl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByOxygenmgl($oxygenmgl = null, $comparison = null)
    {
        if (is_array($oxygenmgl)) {
            $useMinMax = false;
            if (isset($oxygenmgl['min'])) {
                $this->addUsingAlias(OxygenPeer::OXYGENMGL, $oxygenmgl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygenmgl['max'])) {
                $this->addUsingAlias(OxygenPeer::OXYGENMGL, $oxygenmgl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::OXYGENMGL, $oxygenmgl, $comparison);
    }

    /**
     * Filter the query on the OxygenCons column
     *
     * Example usage:
     * <code>
     * $query->filterByOxygencons(1234); // WHERE OxygenCons = 1234
     * $query->filterByOxygencons(array(12, 34)); // WHERE OxygenCons IN (12, 34)
     * $query->filterByOxygencons(array('min' => 12)); // WHERE OxygenCons >= 12
     * $query->filterByOxygencons(array('max' => 12)); // WHERE OxygenCons <= 12
     * </code>
     *
     * @param     mixed $oxygencons The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByOxygencons($oxygencons = null, $comparison = null)
    {
        if (is_array($oxygencons)) {
            $useMinMax = false;
            if (isset($oxygencons['min'])) {
                $this->addUsingAlias(OxygenPeer::OXYGENCONS, $oxygencons['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygencons['max'])) {
                $this->addUsingAlias(OxygenPeer::OXYGENCONS, $oxygencons['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::OXYGENCONS, $oxygencons, $comparison);
    }

    /**
     * Filter the query on the MetabolicLevel column
     *
     * Example usage:
     * <code>
     * $query->filterByMetaboliclevel('fooValue');   // WHERE MetabolicLevel = 'fooValue'
     * $query->filterByMetaboliclevel('%fooValue%'); // WHERE MetabolicLevel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $metaboliclevel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByMetaboliclevel($metaboliclevel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($metaboliclevel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $metaboliclevel)) {
                $metaboliclevel = str_replace('*', '%', $metaboliclevel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OxygenPeer::METABOLICLEVEL, $metaboliclevel, $comparison);
    }

    /**
     * Filter the query on the AppliedStress column
     *
     * Example usage:
     * <code>
     * $query->filterByAppliedstress('fooValue');   // WHERE AppliedStress = 'fooValue'
     * $query->filterByAppliedstress('%fooValue%'); // WHERE AppliedStress LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appliedstress The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByAppliedstress($appliedstress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appliedstress)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appliedstress)) {
                $appliedstress = str_replace('*', '%', $appliedstress);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OxygenPeer::APPLIEDSTRESS, $appliedstress, $comparison);
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
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByDataref($dataref = null, $comparison = null)
    {
        if (is_array($dataref)) {
            $useMinMax = false;
            if (isset($dataref['min'])) {
                $this->addUsingAlias(OxygenPeer::DATAREF, $dataref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataref['max'])) {
                $this->addUsingAlias(OxygenPeer::DATAREF, $dataref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::DATAREF, $dataref, $comparison);
    }

    /**
     * Filter the query on the SwimmingSpeed column
     *
     * Example usage:
     * <code>
     * $query->filterBySwimmingspeed(1234); // WHERE SwimmingSpeed = 1234
     * $query->filterBySwimmingspeed(array(12, 34)); // WHERE SwimmingSpeed IN (12, 34)
     * $query->filterBySwimmingspeed(array('min' => 12)); // WHERE SwimmingSpeed >= 12
     * $query->filterBySwimmingspeed(array('max' => 12)); // WHERE SwimmingSpeed <= 12
     * </code>
     *
     * @param     mixed $swimmingspeed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterBySwimmingspeed($swimmingspeed = null, $comparison = null)
    {
        if (is_array($swimmingspeed)) {
            $useMinMax = false;
            if (isset($swimmingspeed['min'])) {
                $this->addUsingAlias(OxygenPeer::SWIMMINGSPEED, $swimmingspeed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($swimmingspeed['max'])) {
                $this->addUsingAlias(OxygenPeer::SWIMMINGSPEED, $swimmingspeed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::SWIMMINGSPEED, $swimmingspeed, $comparison);
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
     * @return OxygenQuery The current query, for fluid interface
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

        return $this->addUsingAlias(OxygenPeer::COMMENT, $comment, $comparison);
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
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(OxygenPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(OxygenPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::ENTERED, $entered, $comparison);
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
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(OxygenPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(OxygenPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(OxygenPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(OxygenPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::MODIFIED, $modified, $comparison);
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
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(OxygenPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(OxygenPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(OxygenPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(OxygenPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::EXPERT, $expert, $comparison);
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
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(OxygenPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(OxygenPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return OxygenQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(OxygenPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(OxygenPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OxygenPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Oxygen $oxygen Object to remove from the list of results
     *
     * @return OxygenQuery The current query, for fluid interface
     */
    public function prune($oxygen = null)
    {
        if ($oxygen) {
            $this->addUsingAlias(OxygenPeer::AUTOCTR, $oxygen->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
