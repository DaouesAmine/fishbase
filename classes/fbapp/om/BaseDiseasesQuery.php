<?php


/**
 * Base class that represents a query for the 'diseases' table.
 *
 *
 *
 * @method DiseasesQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method DiseasesQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method DiseasesQuery orderByDiseasesrefno($order = Criteria::ASC) Order by the DiseasesRefNo column
 * @method DiseasesQuery orderByDiscode($order = Criteria::ASC) Order by the DisCode column
 * @method DiseasesQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method DiseasesQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method DiseasesQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method DiseasesQuery orderByEggs($order = Criteria::ASC) Order by the Eggs column
 * @method DiseasesQuery orderByLarvae($order = Criteria::ASC) Order by the Larvae column
 * @method DiseasesQuery orderByFry($order = Criteria::ASC) Order by the Fry column
 * @method DiseasesQuery orderByJuveniles($order = Criteria::ASC) Order by the Juveniles column
 * @method DiseasesQuery orderByFemales($order = Criteria::ASC) Order by the Females column
 * @method DiseasesQuery orderByMales($order = Criteria::ASC) Order by the Males column
 * @method DiseasesQuery orderByWild($order = Criteria::ASC) Order by the Wild column
 * @method DiseasesQuery orderByCulture($order = Criteria::ASC) Order by the Culture column
 * @method DiseasesQuery orderByPrevalence($order = Criteria::ASC) Order by the Prevalence column
 * @method DiseasesQuery orderByIntensity($order = Criteria::ASC) Order by the Intensity column
 * @method DiseasesQuery orderByMortality($order = Criteria::ASC) Order by the Mortality column
 * @method DiseasesQuery orderByTypeofculture($order = Criteria::ASC) Order by the TypeofCulture column
 * @method DiseasesQuery orderByWatertemp($order = Criteria::ASC) Order by the WaterTemp column
 * @method DiseasesQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method DiseasesQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method DiseasesQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method DiseasesQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method DiseasesQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method DiseasesQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method DiseasesQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method DiseasesQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method DiseasesQuery groupByStockcode() Group by the StockCode column
 * @method DiseasesQuery groupBySpeccode() Group by the SpecCode column
 * @method DiseasesQuery groupByDiseasesrefno() Group by the DiseasesRefNo column
 * @method DiseasesQuery groupByDiscode() Group by the DisCode column
 * @method DiseasesQuery groupByCCode() Group by the C_Code column
 * @method DiseasesQuery groupByYear() Group by the Year column
 * @method DiseasesQuery groupByLocality() Group by the Locality column
 * @method DiseasesQuery groupByEggs() Group by the Eggs column
 * @method DiseasesQuery groupByLarvae() Group by the Larvae column
 * @method DiseasesQuery groupByFry() Group by the Fry column
 * @method DiseasesQuery groupByJuveniles() Group by the Juveniles column
 * @method DiseasesQuery groupByFemales() Group by the Females column
 * @method DiseasesQuery groupByMales() Group by the Males column
 * @method DiseasesQuery groupByWild() Group by the Wild column
 * @method DiseasesQuery groupByCulture() Group by the Culture column
 * @method DiseasesQuery groupByPrevalence() Group by the Prevalence column
 * @method DiseasesQuery groupByIntensity() Group by the Intensity column
 * @method DiseasesQuery groupByMortality() Group by the Mortality column
 * @method DiseasesQuery groupByTypeofculture() Group by the TypeofCulture column
 * @method DiseasesQuery groupByWatertemp() Group by the WaterTemp column
 * @method DiseasesQuery groupByEntered() Group by the Entered column
 * @method DiseasesQuery groupByDateentered() Group by the DateEntered column
 * @method DiseasesQuery groupByModified() Group by the Modified column
 * @method DiseasesQuery groupByDatemodified() Group by the DateModified column
 * @method DiseasesQuery groupByExpert() Group by the Expert column
 * @method DiseasesQuery groupByDatechecked() Group by the DateChecked column
 * @method DiseasesQuery groupByRemark() Group by the Remark column
 * @method DiseasesQuery groupByTs() Group by the TS column
 *
 * @method DiseasesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DiseasesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DiseasesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Diseases findOne(PropelPDO $con = null) Return the first Diseases matching the query
 * @method Diseases findOneOrCreate(PropelPDO $con = null) Return the first Diseases matching the query, or a new Diseases object populated from the query conditions when no match is found
 *
 * @method Diseases findOneByStockcode(int $StockCode) Return the first Diseases filtered by the StockCode column
 * @method Diseases findOneBySpeccode(int $SpecCode) Return the first Diseases filtered by the SpecCode column
 * @method Diseases findOneByDiseasesrefno(int $DiseasesRefNo) Return the first Diseases filtered by the DiseasesRefNo column
 * @method Diseases findOneByDiscode(int $DisCode) Return the first Diseases filtered by the DisCode column
 * @method Diseases findOneByCCode(string $C_Code) Return the first Diseases filtered by the C_Code column
 * @method Diseases findOneByYear(string $Year) Return the first Diseases filtered by the Year column
 * @method Diseases findOneByLocality(string $Locality) Return the first Diseases filtered by the Locality column
 * @method Diseases findOneByEggs(int $Eggs) Return the first Diseases filtered by the Eggs column
 * @method Diseases findOneByLarvae(int $Larvae) Return the first Diseases filtered by the Larvae column
 * @method Diseases findOneByFry(int $Fry) Return the first Diseases filtered by the Fry column
 * @method Diseases findOneByJuveniles(int $Juveniles) Return the first Diseases filtered by the Juveniles column
 * @method Diseases findOneByFemales(int $Females) Return the first Diseases filtered by the Females column
 * @method Diseases findOneByMales(int $Males) Return the first Diseases filtered by the Males column
 * @method Diseases findOneByWild(int $Wild) Return the first Diseases filtered by the Wild column
 * @method Diseases findOneByCulture(int $Culture) Return the first Diseases filtered by the Culture column
 * @method Diseases findOneByPrevalence(string $Prevalence) Return the first Diseases filtered by the Prevalence column
 * @method Diseases findOneByIntensity(string $Intensity) Return the first Diseases filtered by the Intensity column
 * @method Diseases findOneByMortality(string $Mortality) Return the first Diseases filtered by the Mortality column
 * @method Diseases findOneByTypeofculture(string $TypeofCulture) Return the first Diseases filtered by the TypeofCulture column
 * @method Diseases findOneByWatertemp(int $WaterTemp) Return the first Diseases filtered by the WaterTemp column
 * @method Diseases findOneByEntered(int $Entered) Return the first Diseases filtered by the Entered column
 * @method Diseases findOneByDateentered(string $DateEntered) Return the first Diseases filtered by the DateEntered column
 * @method Diseases findOneByModified(int $Modified) Return the first Diseases filtered by the Modified column
 * @method Diseases findOneByDatemodified(string $DateModified) Return the first Diseases filtered by the DateModified column
 * @method Diseases findOneByExpert(int $Expert) Return the first Diseases filtered by the Expert column
 * @method Diseases findOneByDatechecked(string $DateChecked) Return the first Diseases filtered by the DateChecked column
 * @method Diseases findOneByRemark(string $Remark) Return the first Diseases filtered by the Remark column
 * @method Diseases findOneByTs(string $TS) Return the first Diseases filtered by the TS column
 *
 * @method array findByStockcode(int $StockCode) Return Diseases objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Diseases objects filtered by the SpecCode column
 * @method array findByDiseasesrefno(int $DiseasesRefNo) Return Diseases objects filtered by the DiseasesRefNo column
 * @method array findByDiscode(int $DisCode) Return Diseases objects filtered by the DisCode column
 * @method array findByCCode(string $C_Code) Return Diseases objects filtered by the C_Code column
 * @method array findByYear(string $Year) Return Diseases objects filtered by the Year column
 * @method array findByLocality(string $Locality) Return Diseases objects filtered by the Locality column
 * @method array findByEggs(int $Eggs) Return Diseases objects filtered by the Eggs column
 * @method array findByLarvae(int $Larvae) Return Diseases objects filtered by the Larvae column
 * @method array findByFry(int $Fry) Return Diseases objects filtered by the Fry column
 * @method array findByJuveniles(int $Juveniles) Return Diseases objects filtered by the Juveniles column
 * @method array findByFemales(int $Females) Return Diseases objects filtered by the Females column
 * @method array findByMales(int $Males) Return Diseases objects filtered by the Males column
 * @method array findByWild(int $Wild) Return Diseases objects filtered by the Wild column
 * @method array findByCulture(int $Culture) Return Diseases objects filtered by the Culture column
 * @method array findByPrevalence(string $Prevalence) Return Diseases objects filtered by the Prevalence column
 * @method array findByIntensity(string $Intensity) Return Diseases objects filtered by the Intensity column
 * @method array findByMortality(string $Mortality) Return Diseases objects filtered by the Mortality column
 * @method array findByTypeofculture(string $TypeofCulture) Return Diseases objects filtered by the TypeofCulture column
 * @method array findByWatertemp(int $WaterTemp) Return Diseases objects filtered by the WaterTemp column
 * @method array findByEntered(int $Entered) Return Diseases objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Diseases objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Diseases objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Diseases objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Diseases objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Diseases objects filtered by the DateChecked column
 * @method array findByRemark(string $Remark) Return Diseases objects filtered by the Remark column
 * @method array findByTs(string $TS) Return Diseases objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseDiseasesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDiseasesQuery object.
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
            $modelName = 'Diseases';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DiseasesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DiseasesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DiseasesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DiseasesQuery) {
            return $criteria;
        }
        $query = new DiseasesQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$StockCode, $DiseasesRefNo, $DisCode, $Locality]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Diseases|Diseases[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DiseasesPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DiseasesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Diseases A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `StockCode`, `SpecCode`, `DiseasesRefNo`, `DisCode`, `C_Code`, `Year`, `Locality`, `Eggs`, `Larvae`, `Fry`, `Juveniles`, `Females`, `Males`, `Wild`, `Culture`, `Prevalence`, `Intensity`, `Mortality`, `TypeofCulture`, `WaterTemp`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Remark`, `TS` FROM `diseases` WHERE `StockCode` = :p0 AND `DiseasesRefNo` = :p1 AND `DisCode` = :p2 AND `Locality` = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Diseases();
            $obj->hydrate($row);
            DiseasesPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3])));
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
     * @return Diseases|Diseases[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Diseases[]|mixed the list of results, formatted by the current formatter
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
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(DiseasesPeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(DiseasesPeer::DISEASESREFNO, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(DiseasesPeer::DISCODE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(DiseasesPeer::LOCALITY, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(DiseasesPeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(DiseasesPeer::DISEASESREFNO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(DiseasesPeer::DISCODE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(DiseasesPeer::LOCALITY, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
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
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(DiseasesPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(DiseasesPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(DiseasesPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(DiseasesPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the DiseasesRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByDiseasesrefno(1234); // WHERE DiseasesRefNo = 1234
     * $query->filterByDiseasesrefno(array(12, 34)); // WHERE DiseasesRefNo IN (12, 34)
     * $query->filterByDiseasesrefno(array('min' => 12)); // WHERE DiseasesRefNo >= 12
     * $query->filterByDiseasesrefno(array('max' => 12)); // WHERE DiseasesRefNo <= 12
     * </code>
     *
     * @param     mixed $diseasesrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByDiseasesrefno($diseasesrefno = null, $comparison = null)
    {
        if (is_array($diseasesrefno)) {
            $useMinMax = false;
            if (isset($diseasesrefno['min'])) {
                $this->addUsingAlias(DiseasesPeer::DISEASESREFNO, $diseasesrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($diseasesrefno['max'])) {
                $this->addUsingAlias(DiseasesPeer::DISEASESREFNO, $diseasesrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::DISEASESREFNO, $diseasesrefno, $comparison);
    }

    /**
     * Filter the query on the DisCode column
     *
     * Example usage:
     * <code>
     * $query->filterByDiscode(1234); // WHERE DisCode = 1234
     * $query->filterByDiscode(array(12, 34)); // WHERE DisCode IN (12, 34)
     * $query->filterByDiscode(array('min' => 12)); // WHERE DisCode >= 12
     * $query->filterByDiscode(array('max' => 12)); // WHERE DisCode <= 12
     * </code>
     *
     * @param     mixed $discode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByDiscode($discode = null, $comparison = null)
    {
        if (is_array($discode)) {
            $useMinMax = false;
            if (isset($discode['min'])) {
                $this->addUsingAlias(DiseasesPeer::DISCODE, $discode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($discode['max'])) {
                $this->addUsingAlias(DiseasesPeer::DISCODE, $discode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::DISCODE, $discode, $comparison);
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
     * @return DiseasesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DiseasesPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the Year column
     *
     * Example usage:
     * <code>
     * $query->filterByYear('fooValue');   // WHERE Year = 'fooValue'
     * $query->filterByYear('%fooValue%'); // WHERE Year LIKE '%fooValue%'
     * </code>
     *
     * @param     string $year The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($year)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $year)) {
                $year = str_replace('*', '%', $year);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::YEAR, $year, $comparison);
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
     * @return DiseasesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DiseasesPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the Eggs column
     *
     * Example usage:
     * <code>
     * $query->filterByEggs(1234); // WHERE Eggs = 1234
     * $query->filterByEggs(array(12, 34)); // WHERE Eggs IN (12, 34)
     * $query->filterByEggs(array('min' => 12)); // WHERE Eggs >= 12
     * $query->filterByEggs(array('max' => 12)); // WHERE Eggs <= 12
     * </code>
     *
     * @param     mixed $eggs The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByEggs($eggs = null, $comparison = null)
    {
        if (is_array($eggs)) {
            $useMinMax = false;
            if (isset($eggs['min'])) {
                $this->addUsingAlias(DiseasesPeer::EGGS, $eggs['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eggs['max'])) {
                $this->addUsingAlias(DiseasesPeer::EGGS, $eggs['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::EGGS, $eggs, $comparison);
    }

    /**
     * Filter the query on the Larvae column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvae(1234); // WHERE Larvae = 1234
     * $query->filterByLarvae(array(12, 34)); // WHERE Larvae IN (12, 34)
     * $query->filterByLarvae(array('min' => 12)); // WHERE Larvae >= 12
     * $query->filterByLarvae(array('max' => 12)); // WHERE Larvae <= 12
     * </code>
     *
     * @param     mixed $larvae The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByLarvae($larvae = null, $comparison = null)
    {
        if (is_array($larvae)) {
            $useMinMax = false;
            if (isset($larvae['min'])) {
                $this->addUsingAlias(DiseasesPeer::LARVAE, $larvae['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvae['max'])) {
                $this->addUsingAlias(DiseasesPeer::LARVAE, $larvae['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::LARVAE, $larvae, $comparison);
    }

    /**
     * Filter the query on the Fry column
     *
     * Example usage:
     * <code>
     * $query->filterByFry(1234); // WHERE Fry = 1234
     * $query->filterByFry(array(12, 34)); // WHERE Fry IN (12, 34)
     * $query->filterByFry(array('min' => 12)); // WHERE Fry >= 12
     * $query->filterByFry(array('max' => 12)); // WHERE Fry <= 12
     * </code>
     *
     * @param     mixed $fry The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByFry($fry = null, $comparison = null)
    {
        if (is_array($fry)) {
            $useMinMax = false;
            if (isset($fry['min'])) {
                $this->addUsingAlias(DiseasesPeer::FRY, $fry['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fry['max'])) {
                $this->addUsingAlias(DiseasesPeer::FRY, $fry['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::FRY, $fry, $comparison);
    }

    /**
     * Filter the query on the Juveniles column
     *
     * Example usage:
     * <code>
     * $query->filterByJuveniles(1234); // WHERE Juveniles = 1234
     * $query->filterByJuveniles(array(12, 34)); // WHERE Juveniles IN (12, 34)
     * $query->filterByJuveniles(array('min' => 12)); // WHERE Juveniles >= 12
     * $query->filterByJuveniles(array('max' => 12)); // WHERE Juveniles <= 12
     * </code>
     *
     * @param     mixed $juveniles The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByJuveniles($juveniles = null, $comparison = null)
    {
        if (is_array($juveniles)) {
            $useMinMax = false;
            if (isset($juveniles['min'])) {
                $this->addUsingAlias(DiseasesPeer::JUVENILES, $juveniles['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($juveniles['max'])) {
                $this->addUsingAlias(DiseasesPeer::JUVENILES, $juveniles['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::JUVENILES, $juveniles, $comparison);
    }

    /**
     * Filter the query on the Females column
     *
     * Example usage:
     * <code>
     * $query->filterByFemales(1234); // WHERE Females = 1234
     * $query->filterByFemales(array(12, 34)); // WHERE Females IN (12, 34)
     * $query->filterByFemales(array('min' => 12)); // WHERE Females >= 12
     * $query->filterByFemales(array('max' => 12)); // WHERE Females <= 12
     * </code>
     *
     * @param     mixed $females The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByFemales($females = null, $comparison = null)
    {
        if (is_array($females)) {
            $useMinMax = false;
            if (isset($females['min'])) {
                $this->addUsingAlias(DiseasesPeer::FEMALES, $females['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($females['max'])) {
                $this->addUsingAlias(DiseasesPeer::FEMALES, $females['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::FEMALES, $females, $comparison);
    }

    /**
     * Filter the query on the Males column
     *
     * Example usage:
     * <code>
     * $query->filterByMales(1234); // WHERE Males = 1234
     * $query->filterByMales(array(12, 34)); // WHERE Males IN (12, 34)
     * $query->filterByMales(array('min' => 12)); // WHERE Males >= 12
     * $query->filterByMales(array('max' => 12)); // WHERE Males <= 12
     * </code>
     *
     * @param     mixed $males The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByMales($males = null, $comparison = null)
    {
        if (is_array($males)) {
            $useMinMax = false;
            if (isset($males['min'])) {
                $this->addUsingAlias(DiseasesPeer::MALES, $males['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($males['max'])) {
                $this->addUsingAlias(DiseasesPeer::MALES, $males['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::MALES, $males, $comparison);
    }

    /**
     * Filter the query on the Wild column
     *
     * Example usage:
     * <code>
     * $query->filterByWild(1234); // WHERE Wild = 1234
     * $query->filterByWild(array(12, 34)); // WHERE Wild IN (12, 34)
     * $query->filterByWild(array('min' => 12)); // WHERE Wild >= 12
     * $query->filterByWild(array('max' => 12)); // WHERE Wild <= 12
     * </code>
     *
     * @param     mixed $wild The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByWild($wild = null, $comparison = null)
    {
        if (is_array($wild)) {
            $useMinMax = false;
            if (isset($wild['min'])) {
                $this->addUsingAlias(DiseasesPeer::WILD, $wild['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wild['max'])) {
                $this->addUsingAlias(DiseasesPeer::WILD, $wild['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::WILD, $wild, $comparison);
    }

    /**
     * Filter the query on the Culture column
     *
     * Example usage:
     * <code>
     * $query->filterByCulture(1234); // WHERE Culture = 1234
     * $query->filterByCulture(array(12, 34)); // WHERE Culture IN (12, 34)
     * $query->filterByCulture(array('min' => 12)); // WHERE Culture >= 12
     * $query->filterByCulture(array('max' => 12)); // WHERE Culture <= 12
     * </code>
     *
     * @param     mixed $culture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByCulture($culture = null, $comparison = null)
    {
        if (is_array($culture)) {
            $useMinMax = false;
            if (isset($culture['min'])) {
                $this->addUsingAlias(DiseasesPeer::CULTURE, $culture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($culture['max'])) {
                $this->addUsingAlias(DiseasesPeer::CULTURE, $culture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::CULTURE, $culture, $comparison);
    }

    /**
     * Filter the query on the Prevalence column
     *
     * Example usage:
     * <code>
     * $query->filterByPrevalence('fooValue');   // WHERE Prevalence = 'fooValue'
     * $query->filterByPrevalence('%fooValue%'); // WHERE Prevalence LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prevalence The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByPrevalence($prevalence = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prevalence)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prevalence)) {
                $prevalence = str_replace('*', '%', $prevalence);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::PREVALENCE, $prevalence, $comparison);
    }

    /**
     * Filter the query on the Intensity column
     *
     * Example usage:
     * <code>
     * $query->filterByIntensity('fooValue');   // WHERE Intensity = 'fooValue'
     * $query->filterByIntensity('%fooValue%'); // WHERE Intensity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intensity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByIntensity($intensity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intensity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intensity)) {
                $intensity = str_replace('*', '%', $intensity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::INTENSITY, $intensity, $comparison);
    }

    /**
     * Filter the query on the Mortality column
     *
     * Example usage:
     * <code>
     * $query->filterByMortality('fooValue');   // WHERE Mortality = 'fooValue'
     * $query->filterByMortality('%fooValue%'); // WHERE Mortality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mortality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByMortality($mortality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mortality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mortality)) {
                $mortality = str_replace('*', '%', $mortality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::MORTALITY, $mortality, $comparison);
    }

    /**
     * Filter the query on the TypeofCulture column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeofculture('fooValue');   // WHERE TypeofCulture = 'fooValue'
     * $query->filterByTypeofculture('%fooValue%'); // WHERE TypeofCulture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeofculture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByTypeofculture($typeofculture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeofculture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeofculture)) {
                $typeofculture = str_replace('*', '%', $typeofculture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::TYPEOFCULTURE, $typeofculture, $comparison);
    }

    /**
     * Filter the query on the WaterTemp column
     *
     * Example usage:
     * <code>
     * $query->filterByWatertemp(1234); // WHERE WaterTemp = 1234
     * $query->filterByWatertemp(array(12, 34)); // WHERE WaterTemp IN (12, 34)
     * $query->filterByWatertemp(array('min' => 12)); // WHERE WaterTemp >= 12
     * $query->filterByWatertemp(array('max' => 12)); // WHERE WaterTemp <= 12
     * </code>
     *
     * @param     mixed $watertemp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByWatertemp($watertemp = null, $comparison = null)
    {
        if (is_array($watertemp)) {
            $useMinMax = false;
            if (isset($watertemp['min'])) {
                $this->addUsingAlias(DiseasesPeer::WATERTEMP, $watertemp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($watertemp['max'])) {
                $this->addUsingAlias(DiseasesPeer::WATERTEMP, $watertemp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::WATERTEMP, $watertemp, $comparison);
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
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(DiseasesPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(DiseasesPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::ENTERED, $entered, $comparison);
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
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(DiseasesPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(DiseasesPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(DiseasesPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(DiseasesPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::MODIFIED, $modified, $comparison);
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
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(DiseasesPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(DiseasesPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(DiseasesPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(DiseasesPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::EXPERT, $expert, $comparison);
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
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(DiseasesPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(DiseasesPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the Remark column
     *
     * Example usage:
     * <code>
     * $query->filterByRemark('fooValue');   // WHERE Remark = 'fooValue'
     * $query->filterByRemark('%fooValue%'); // WHERE Remark LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remark The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByRemark($remark = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remark)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remark)) {
                $remark = str_replace('*', '%', $remark);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::REMARK, $remark, $comparison);
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
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(DiseasesPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(DiseasesPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DiseasesPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Diseases $diseases Object to remove from the list of results
     *
     * @return DiseasesQuery The current query, for fluid interface
     */
    public function prune($diseases = null)
    {
        if ($diseases) {
            $this->addCond('pruneCond0', $this->getAliasedColName(DiseasesPeer::STOCKCODE), $diseases->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(DiseasesPeer::DISEASESREFNO), $diseases->getDiseasesrefno(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(DiseasesPeer::DISCODE), $diseases->getDiscode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(DiseasesPeer::LOCALITY), $diseases->getLocality(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
