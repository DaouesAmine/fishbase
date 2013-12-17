<?php


/**
 * Base class that represents a query for the 'strains' table.
 *
 *
 *
 * @method StrainsQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method StrainsQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method StrainsQuery orderByStrainsrefno($order = Criteria::ASC) Order by the StrainsRefNo column
 * @method StrainsQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method StrainsQuery orderByStraincode($order = Criteria::ASC) Order by the StrainCode column
 * @method StrainsQuery orderByTrait($order = Criteria::ASC) Order by the Trait column
 * @method StrainsQuery orderByPic($order = Criteria::ASC) Order by the Pic column
 * @method StrainsQuery orderByBreedingstrategy($order = Criteria::ASC) Order by the BreedingStrategy column
 * @method StrainsQuery orderByViability($order = Criteria::ASC) Order by the Viability column
 * @method StrainsQuery orderBySizeoffounding($order = Criteria::ASC) Order by the SizeofFounding column
 * @method StrainsQuery orderBySizeoffoundingf($order = Criteria::ASC) Order by the SizeofFoundingF column
 * @method StrainsQuery orderBySizeoffoundingm($order = Criteria::ASC) Order by the SizeofFoundingM column
 * @method StrainsQuery orderByNumberofbroodstock($order = Criteria::ASC) Order by the NumberofBroodstock column
 * @method StrainsQuery orderByBreedingyear($order = Criteria::ASC) Order by the BreedingYear column
 * @method StrainsQuery orderBySource($order = Criteria::ASC) Order by the Source column
 * @method StrainsQuery orderBySourceii($order = Criteria::ASC) Order by the SourceII column
 * @method StrainsQuery orderByStraincodefounder($order = Criteria::ASC) Order by the StrainCodeFounder column
 * @method StrainsQuery orderByArrivaloffounder($order = Criteria::ASC) Order by the ArrivalofFounder column
 * @method StrainsQuery orderByAvailability($order = Criteria::ASC) Order by the Availability column
 * @method StrainsQuery orderByRemarksref($order = Criteria::ASC) Order by the RemarksRef column
 * @method StrainsQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method StrainsQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method StrainsQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method StrainsQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method StrainsQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method StrainsQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method StrainsQuery orderByAddremark($order = Criteria::ASC) Order by the AddRemark column
 * @method StrainsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method StrainsQuery groupByStockcode() Group by the StockCode column
 * @method StrainsQuery groupBySpeccode() Group by the SpecCode column
 * @method StrainsQuery groupByStrainsrefno() Group by the StrainsRefNo column
 * @method StrainsQuery groupByCCode() Group by the C_Code column
 * @method StrainsQuery groupByStraincode() Group by the StrainCode column
 * @method StrainsQuery groupByTrait() Group by the Trait column
 * @method StrainsQuery groupByPic() Group by the Pic column
 * @method StrainsQuery groupByBreedingstrategy() Group by the BreedingStrategy column
 * @method StrainsQuery groupByViability() Group by the Viability column
 * @method StrainsQuery groupBySizeoffounding() Group by the SizeofFounding column
 * @method StrainsQuery groupBySizeoffoundingf() Group by the SizeofFoundingF column
 * @method StrainsQuery groupBySizeoffoundingm() Group by the SizeofFoundingM column
 * @method StrainsQuery groupByNumberofbroodstock() Group by the NumberofBroodstock column
 * @method StrainsQuery groupByBreedingyear() Group by the BreedingYear column
 * @method StrainsQuery groupBySource() Group by the Source column
 * @method StrainsQuery groupBySourceii() Group by the SourceII column
 * @method StrainsQuery groupByStraincodefounder() Group by the StrainCodeFounder column
 * @method StrainsQuery groupByArrivaloffounder() Group by the ArrivalofFounder column
 * @method StrainsQuery groupByAvailability() Group by the Availability column
 * @method StrainsQuery groupByRemarksref() Group by the RemarksRef column
 * @method StrainsQuery groupByEntered() Group by the Entered column
 * @method StrainsQuery groupByDateentered() Group by the DateEntered column
 * @method StrainsQuery groupByModified() Group by the Modified column
 * @method StrainsQuery groupByDatemodified() Group by the DateModified column
 * @method StrainsQuery groupByExpert() Group by the Expert column
 * @method StrainsQuery groupByDatechecked() Group by the DateChecked column
 * @method StrainsQuery groupByAddremark() Group by the AddRemark column
 * @method StrainsQuery groupByTs() Group by the TS column
 *
 * @method StrainsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method StrainsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method StrainsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Strains findOne(PropelPDO $con = null) Return the first Strains matching the query
 * @method Strains findOneOrCreate(PropelPDO $con = null) Return the first Strains matching the query, or a new Strains object populated from the query conditions when no match is found
 *
 * @method Strains findOneByStockcode(int $StockCode) Return the first Strains filtered by the StockCode column
 * @method Strains findOneBySpeccode(int $SpecCode) Return the first Strains filtered by the SpecCode column
 * @method Strains findOneByStrainsrefno(int $StrainsRefNo) Return the first Strains filtered by the StrainsRefNo column
 * @method Strains findOneByCCode(string $C_Code) Return the first Strains filtered by the C_Code column
 * @method Strains findOneByStraincode(string $StrainCode) Return the first Strains filtered by the StrainCode column
 * @method Strains findOneByTrait(string $Trait) Return the first Strains filtered by the Trait column
 * @method Strains findOneByPic(string $Pic) Return the first Strains filtered by the Pic column
 * @method Strains findOneByBreedingstrategy(string $BreedingStrategy) Return the first Strains filtered by the BreedingStrategy column
 * @method Strains findOneByViability(int $Viability) Return the first Strains filtered by the Viability column
 * @method Strains findOneBySizeoffounding(int $SizeofFounding) Return the first Strains filtered by the SizeofFounding column
 * @method Strains findOneBySizeoffoundingf(int $SizeofFoundingF) Return the first Strains filtered by the SizeofFoundingF column
 * @method Strains findOneBySizeoffoundingm(int $SizeofFoundingM) Return the first Strains filtered by the SizeofFoundingM column
 * @method Strains findOneByNumberofbroodstock(int $NumberofBroodstock) Return the first Strains filtered by the NumberofBroodstock column
 * @method Strains findOneByBreedingyear(int $BreedingYear) Return the first Strains filtered by the BreedingYear column
 * @method Strains findOneBySource(string $Source) Return the first Strains filtered by the Source column
 * @method Strains findOneBySourceii(string $SourceII) Return the first Strains filtered by the SourceII column
 * @method Strains findOneByStraincodefounder(string $StrainCodeFounder) Return the first Strains filtered by the StrainCodeFounder column
 * @method Strains findOneByArrivaloffounder(int $ArrivalofFounder) Return the first Strains filtered by the ArrivalofFounder column
 * @method Strains findOneByAvailability(string $Availability) Return the first Strains filtered by the Availability column
 * @method Strains findOneByRemarksref(int $RemarksRef) Return the first Strains filtered by the RemarksRef column
 * @method Strains findOneByEntered(int $Entered) Return the first Strains filtered by the Entered column
 * @method Strains findOneByDateentered(string $DateEntered) Return the first Strains filtered by the DateEntered column
 * @method Strains findOneByModified(int $Modified) Return the first Strains filtered by the Modified column
 * @method Strains findOneByDatemodified(string $DateModified) Return the first Strains filtered by the DateModified column
 * @method Strains findOneByExpert(int $Expert) Return the first Strains filtered by the Expert column
 * @method Strains findOneByDatechecked(string $DateChecked) Return the first Strains filtered by the DateChecked column
 * @method Strains findOneByAddremark(string $AddRemark) Return the first Strains filtered by the AddRemark column
 * @method Strains findOneByTs(string $TS) Return the first Strains filtered by the TS column
 *
 * @method array findByStockcode(int $StockCode) Return Strains objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Strains objects filtered by the SpecCode column
 * @method array findByStrainsrefno(int $StrainsRefNo) Return Strains objects filtered by the StrainsRefNo column
 * @method array findByCCode(string $C_Code) Return Strains objects filtered by the C_Code column
 * @method array findByStraincode(string $StrainCode) Return Strains objects filtered by the StrainCode column
 * @method array findByTrait(string $Trait) Return Strains objects filtered by the Trait column
 * @method array findByPic(string $Pic) Return Strains objects filtered by the Pic column
 * @method array findByBreedingstrategy(string $BreedingStrategy) Return Strains objects filtered by the BreedingStrategy column
 * @method array findByViability(int $Viability) Return Strains objects filtered by the Viability column
 * @method array findBySizeoffounding(int $SizeofFounding) Return Strains objects filtered by the SizeofFounding column
 * @method array findBySizeoffoundingf(int $SizeofFoundingF) Return Strains objects filtered by the SizeofFoundingF column
 * @method array findBySizeoffoundingm(int $SizeofFoundingM) Return Strains objects filtered by the SizeofFoundingM column
 * @method array findByNumberofbroodstock(int $NumberofBroodstock) Return Strains objects filtered by the NumberofBroodstock column
 * @method array findByBreedingyear(int $BreedingYear) Return Strains objects filtered by the BreedingYear column
 * @method array findBySource(string $Source) Return Strains objects filtered by the Source column
 * @method array findBySourceii(string $SourceII) Return Strains objects filtered by the SourceII column
 * @method array findByStraincodefounder(string $StrainCodeFounder) Return Strains objects filtered by the StrainCodeFounder column
 * @method array findByArrivaloffounder(int $ArrivalofFounder) Return Strains objects filtered by the ArrivalofFounder column
 * @method array findByAvailability(string $Availability) Return Strains objects filtered by the Availability column
 * @method array findByRemarksref(int $RemarksRef) Return Strains objects filtered by the RemarksRef column
 * @method array findByEntered(int $Entered) Return Strains objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Strains objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Strains objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Strains objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Strains objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Strains objects filtered by the DateChecked column
 * @method array findByAddremark(string $AddRemark) Return Strains objects filtered by the AddRemark column
 * @method array findByTs(string $TS) Return Strains objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseStrainsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseStrainsQuery object.
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
            $modelName = 'Strains';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new StrainsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   StrainsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return StrainsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof StrainsQuery) {
            return $criteria;
        }
        $query = new StrainsQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$StockCode, $StrainCode]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Strains|Strains[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = StrainsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(StrainsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Strains A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `StockCode`, `SpecCode`, `StrainsRefNo`, `C_Code`, `StrainCode`, `Trait`, `Pic`, `BreedingStrategy`, `Viability`, `SizeofFounding`, `SizeofFoundingF`, `SizeofFoundingM`, `NumberofBroodstock`, `BreedingYear`, `Source`, `SourceII`, `StrainCodeFounder`, `ArrivalofFounder`, `Availability`, `RemarksRef`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `AddRemark`, `TS` FROM `strains` WHERE `StockCode` = :p0 AND `StrainCode` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Strains();
            $obj->hydrate($row);
            StrainsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Strains|Strains[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Strains[]|mixed the list of results, formatted by the current formatter
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
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(StrainsPeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(StrainsPeer::STRAINCODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(StrainsPeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(StrainsPeer::STRAINCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(StrainsPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(StrainsPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(StrainsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(StrainsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the StrainsRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByStrainsrefno(1234); // WHERE StrainsRefNo = 1234
     * $query->filterByStrainsrefno(array(12, 34)); // WHERE StrainsRefNo IN (12, 34)
     * $query->filterByStrainsrefno(array('min' => 12)); // WHERE StrainsRefNo >= 12
     * $query->filterByStrainsrefno(array('max' => 12)); // WHERE StrainsRefNo <= 12
     * </code>
     *
     * @param     mixed $strainsrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByStrainsrefno($strainsrefno = null, $comparison = null)
    {
        if (is_array($strainsrefno)) {
            $useMinMax = false;
            if (isset($strainsrefno['min'])) {
                $this->addUsingAlias(StrainsPeer::STRAINSREFNO, $strainsrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($strainsrefno['max'])) {
                $this->addUsingAlias(StrainsPeer::STRAINSREFNO, $strainsrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::STRAINSREFNO, $strainsrefno, $comparison);
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
     * @return StrainsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StrainsPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the StrainCode column
     *
     * Example usage:
     * <code>
     * $query->filterByStraincode('fooValue');   // WHERE StrainCode = 'fooValue'
     * $query->filterByStraincode('%fooValue%'); // WHERE StrainCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $straincode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByStraincode($straincode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($straincode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $straincode)) {
                $straincode = str_replace('*', '%', $straincode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StrainsPeer::STRAINCODE, $straincode, $comparison);
    }

    /**
     * Filter the query on the Trait column
     *
     * Example usage:
     * <code>
     * $query->filterByTrait('fooValue');   // WHERE Trait = 'fooValue'
     * $query->filterByTrait('%fooValue%'); // WHERE Trait LIKE '%fooValue%'
     * </code>
     *
     * @param     string $trait The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByTrait($trait = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($trait)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $trait)) {
                $trait = str_replace('*', '%', $trait);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StrainsPeer::TRAIT, $trait, $comparison);
    }

    /**
     * Filter the query on the Pic column
     *
     * Example usage:
     * <code>
     * $query->filterByPic('fooValue');   // WHERE Pic = 'fooValue'
     * $query->filterByPic('%fooValue%'); // WHERE Pic LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByPic($pic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pic)) {
                $pic = str_replace('*', '%', $pic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StrainsPeer::PIC, $pic, $comparison);
    }

    /**
     * Filter the query on the BreedingStrategy column
     *
     * Example usage:
     * <code>
     * $query->filterByBreedingstrategy('fooValue');   // WHERE BreedingStrategy = 'fooValue'
     * $query->filterByBreedingstrategy('%fooValue%'); // WHERE BreedingStrategy LIKE '%fooValue%'
     * </code>
     *
     * @param     string $breedingstrategy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByBreedingstrategy($breedingstrategy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($breedingstrategy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $breedingstrategy)) {
                $breedingstrategy = str_replace('*', '%', $breedingstrategy);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StrainsPeer::BREEDINGSTRATEGY, $breedingstrategy, $comparison);
    }

    /**
     * Filter the query on the Viability column
     *
     * Example usage:
     * <code>
     * $query->filterByViability(1234); // WHERE Viability = 1234
     * $query->filterByViability(array(12, 34)); // WHERE Viability IN (12, 34)
     * $query->filterByViability(array('min' => 12)); // WHERE Viability >= 12
     * $query->filterByViability(array('max' => 12)); // WHERE Viability <= 12
     * </code>
     *
     * @param     mixed $viability The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByViability($viability = null, $comparison = null)
    {
        if (is_array($viability)) {
            $useMinMax = false;
            if (isset($viability['min'])) {
                $this->addUsingAlias(StrainsPeer::VIABILITY, $viability['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($viability['max'])) {
                $this->addUsingAlias(StrainsPeer::VIABILITY, $viability['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::VIABILITY, $viability, $comparison);
    }

    /**
     * Filter the query on the SizeofFounding column
     *
     * Example usage:
     * <code>
     * $query->filterBySizeoffounding(1234); // WHERE SizeofFounding = 1234
     * $query->filterBySizeoffounding(array(12, 34)); // WHERE SizeofFounding IN (12, 34)
     * $query->filterBySizeoffounding(array('min' => 12)); // WHERE SizeofFounding >= 12
     * $query->filterBySizeoffounding(array('max' => 12)); // WHERE SizeofFounding <= 12
     * </code>
     *
     * @param     mixed $sizeoffounding The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterBySizeoffounding($sizeoffounding = null, $comparison = null)
    {
        if (is_array($sizeoffounding)) {
            $useMinMax = false;
            if (isset($sizeoffounding['min'])) {
                $this->addUsingAlias(StrainsPeer::SIZEOFFOUNDING, $sizeoffounding['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sizeoffounding['max'])) {
                $this->addUsingAlias(StrainsPeer::SIZEOFFOUNDING, $sizeoffounding['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::SIZEOFFOUNDING, $sizeoffounding, $comparison);
    }

    /**
     * Filter the query on the SizeofFoundingF column
     *
     * Example usage:
     * <code>
     * $query->filterBySizeoffoundingf(1234); // WHERE SizeofFoundingF = 1234
     * $query->filterBySizeoffoundingf(array(12, 34)); // WHERE SizeofFoundingF IN (12, 34)
     * $query->filterBySizeoffoundingf(array('min' => 12)); // WHERE SizeofFoundingF >= 12
     * $query->filterBySizeoffoundingf(array('max' => 12)); // WHERE SizeofFoundingF <= 12
     * </code>
     *
     * @param     mixed $sizeoffoundingf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterBySizeoffoundingf($sizeoffoundingf = null, $comparison = null)
    {
        if (is_array($sizeoffoundingf)) {
            $useMinMax = false;
            if (isset($sizeoffoundingf['min'])) {
                $this->addUsingAlias(StrainsPeer::SIZEOFFOUNDINGF, $sizeoffoundingf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sizeoffoundingf['max'])) {
                $this->addUsingAlias(StrainsPeer::SIZEOFFOUNDINGF, $sizeoffoundingf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::SIZEOFFOUNDINGF, $sizeoffoundingf, $comparison);
    }

    /**
     * Filter the query on the SizeofFoundingM column
     *
     * Example usage:
     * <code>
     * $query->filterBySizeoffoundingm(1234); // WHERE SizeofFoundingM = 1234
     * $query->filterBySizeoffoundingm(array(12, 34)); // WHERE SizeofFoundingM IN (12, 34)
     * $query->filterBySizeoffoundingm(array('min' => 12)); // WHERE SizeofFoundingM >= 12
     * $query->filterBySizeoffoundingm(array('max' => 12)); // WHERE SizeofFoundingM <= 12
     * </code>
     *
     * @param     mixed $sizeoffoundingm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterBySizeoffoundingm($sizeoffoundingm = null, $comparison = null)
    {
        if (is_array($sizeoffoundingm)) {
            $useMinMax = false;
            if (isset($sizeoffoundingm['min'])) {
                $this->addUsingAlias(StrainsPeer::SIZEOFFOUNDINGM, $sizeoffoundingm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sizeoffoundingm['max'])) {
                $this->addUsingAlias(StrainsPeer::SIZEOFFOUNDINGM, $sizeoffoundingm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::SIZEOFFOUNDINGM, $sizeoffoundingm, $comparison);
    }

    /**
     * Filter the query on the NumberofBroodstock column
     *
     * Example usage:
     * <code>
     * $query->filterByNumberofbroodstock(1234); // WHERE NumberofBroodstock = 1234
     * $query->filterByNumberofbroodstock(array(12, 34)); // WHERE NumberofBroodstock IN (12, 34)
     * $query->filterByNumberofbroodstock(array('min' => 12)); // WHERE NumberofBroodstock >= 12
     * $query->filterByNumberofbroodstock(array('max' => 12)); // WHERE NumberofBroodstock <= 12
     * </code>
     *
     * @param     mixed $numberofbroodstock The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByNumberofbroodstock($numberofbroodstock = null, $comparison = null)
    {
        if (is_array($numberofbroodstock)) {
            $useMinMax = false;
            if (isset($numberofbroodstock['min'])) {
                $this->addUsingAlias(StrainsPeer::NUMBEROFBROODSTOCK, $numberofbroodstock['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numberofbroodstock['max'])) {
                $this->addUsingAlias(StrainsPeer::NUMBEROFBROODSTOCK, $numberofbroodstock['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::NUMBEROFBROODSTOCK, $numberofbroodstock, $comparison);
    }

    /**
     * Filter the query on the BreedingYear column
     *
     * Example usage:
     * <code>
     * $query->filterByBreedingyear(1234); // WHERE BreedingYear = 1234
     * $query->filterByBreedingyear(array(12, 34)); // WHERE BreedingYear IN (12, 34)
     * $query->filterByBreedingyear(array('min' => 12)); // WHERE BreedingYear >= 12
     * $query->filterByBreedingyear(array('max' => 12)); // WHERE BreedingYear <= 12
     * </code>
     *
     * @param     mixed $breedingyear The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByBreedingyear($breedingyear = null, $comparison = null)
    {
        if (is_array($breedingyear)) {
            $useMinMax = false;
            if (isset($breedingyear['min'])) {
                $this->addUsingAlias(StrainsPeer::BREEDINGYEAR, $breedingyear['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($breedingyear['max'])) {
                $this->addUsingAlias(StrainsPeer::BREEDINGYEAR, $breedingyear['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::BREEDINGYEAR, $breedingyear, $comparison);
    }

    /**
     * Filter the query on the Source column
     *
     * Example usage:
     * <code>
     * $query->filterBySource('fooValue');   // WHERE Source = 'fooValue'
     * $query->filterBySource('%fooValue%'); // WHERE Source LIKE '%fooValue%'
     * </code>
     *
     * @param     string $source The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterBySource($source = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($source)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $source)) {
                $source = str_replace('*', '%', $source);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StrainsPeer::SOURCE, $source, $comparison);
    }

    /**
     * Filter the query on the SourceII column
     *
     * Example usage:
     * <code>
     * $query->filterBySourceii('fooValue');   // WHERE SourceII = 'fooValue'
     * $query->filterBySourceii('%fooValue%'); // WHERE SourceII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sourceii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterBySourceii($sourceii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sourceii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sourceii)) {
                $sourceii = str_replace('*', '%', $sourceii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StrainsPeer::SOURCEII, $sourceii, $comparison);
    }

    /**
     * Filter the query on the StrainCodeFounder column
     *
     * Example usage:
     * <code>
     * $query->filterByStraincodefounder('fooValue');   // WHERE StrainCodeFounder = 'fooValue'
     * $query->filterByStraincodefounder('%fooValue%'); // WHERE StrainCodeFounder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $straincodefounder The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByStraincodefounder($straincodefounder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($straincodefounder)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $straincodefounder)) {
                $straincodefounder = str_replace('*', '%', $straincodefounder);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StrainsPeer::STRAINCODEFOUNDER, $straincodefounder, $comparison);
    }

    /**
     * Filter the query on the ArrivalofFounder column
     *
     * Example usage:
     * <code>
     * $query->filterByArrivaloffounder(1234); // WHERE ArrivalofFounder = 1234
     * $query->filterByArrivaloffounder(array(12, 34)); // WHERE ArrivalofFounder IN (12, 34)
     * $query->filterByArrivaloffounder(array('min' => 12)); // WHERE ArrivalofFounder >= 12
     * $query->filterByArrivaloffounder(array('max' => 12)); // WHERE ArrivalofFounder <= 12
     * </code>
     *
     * @param     mixed $arrivaloffounder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByArrivaloffounder($arrivaloffounder = null, $comparison = null)
    {
        if (is_array($arrivaloffounder)) {
            $useMinMax = false;
            if (isset($arrivaloffounder['min'])) {
                $this->addUsingAlias(StrainsPeer::ARRIVALOFFOUNDER, $arrivaloffounder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($arrivaloffounder['max'])) {
                $this->addUsingAlias(StrainsPeer::ARRIVALOFFOUNDER, $arrivaloffounder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::ARRIVALOFFOUNDER, $arrivaloffounder, $comparison);
    }

    /**
     * Filter the query on the Availability column
     *
     * Example usage:
     * <code>
     * $query->filterByAvailability('fooValue');   // WHERE Availability = 'fooValue'
     * $query->filterByAvailability('%fooValue%'); // WHERE Availability LIKE '%fooValue%'
     * </code>
     *
     * @param     string $availability The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByAvailability($availability = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($availability)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $availability)) {
                $availability = str_replace('*', '%', $availability);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StrainsPeer::AVAILABILITY, $availability, $comparison);
    }

    /**
     * Filter the query on the RemarksRef column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarksref(1234); // WHERE RemarksRef = 1234
     * $query->filterByRemarksref(array(12, 34)); // WHERE RemarksRef IN (12, 34)
     * $query->filterByRemarksref(array('min' => 12)); // WHERE RemarksRef >= 12
     * $query->filterByRemarksref(array('max' => 12)); // WHERE RemarksRef <= 12
     * </code>
     *
     * @param     mixed $remarksref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByRemarksref($remarksref = null, $comparison = null)
    {
        if (is_array($remarksref)) {
            $useMinMax = false;
            if (isset($remarksref['min'])) {
                $this->addUsingAlias(StrainsPeer::REMARKSREF, $remarksref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($remarksref['max'])) {
                $this->addUsingAlias(StrainsPeer::REMARKSREF, $remarksref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::REMARKSREF, $remarksref, $comparison);
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
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(StrainsPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(StrainsPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::ENTERED, $entered, $comparison);
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
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(StrainsPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(StrainsPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(StrainsPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(StrainsPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::MODIFIED, $modified, $comparison);
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
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(StrainsPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(StrainsPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(StrainsPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(StrainsPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::EXPERT, $expert, $comparison);
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
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(StrainsPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(StrainsPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the AddRemark column
     *
     * Example usage:
     * <code>
     * $query->filterByAddremark('fooValue');   // WHERE AddRemark = 'fooValue'
     * $query->filterByAddremark('%fooValue%'); // WHERE AddRemark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addremark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByAddremark($addremark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addremark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addremark)) {
                $addremark = str_replace('*', '%', $addremark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StrainsPeer::ADDREMARK, $addremark, $comparison);
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
     * @return StrainsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(StrainsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(StrainsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StrainsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Strains $strains Object to remove from the list of results
     *
     * @return StrainsQuery The current query, for fluid interface
     */
    public function prune($strains = null)
    {
        if ($strains) {
            $this->addCond('pruneCond0', $this->getAliasedColName(StrainsPeer::STOCKCODE), $strains->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(StrainsPeer::STRAINCODE), $strains->getStraincode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
