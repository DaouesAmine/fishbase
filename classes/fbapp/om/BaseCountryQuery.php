<?php


/**
 * Base class that represents a query for the 'country' table.
 *
 *
 *
 * @method CountryQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method CountryQuery orderByStockcode($order = Criteria::ASC) Order by the Stockcode column
 * @method CountryQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method CountryQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method CountryQuery orderByCountryrefno($order = Criteria::ASC) Order by the CountryRefNo column
 * @method CountryQuery orderByAlsoref($order = Criteria::ASC) Order by the AlsoRef column
 * @method CountryQuery orderByStatus($order = Criteria::ASC) Order by the Status column
 * @method CountryQuery orderByCurrentpresence($order = Criteria::ASC) Order by the CurrentPresence column
 * @method CountryQuery orderByFreshwater($order = Criteria::ASC) Order by the Freshwater column
 * @method CountryQuery orderByBrackish($order = Criteria::ASC) Order by the Brackish column
 * @method CountryQuery orderBySaltwater($order = Criteria::ASC) Order by the Saltwater column
 * @method CountryQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method CountryQuery orderByAbundance($order = Criteria::ASC) Order by the Abundance column
 * @method CountryQuery orderByRefabundance($order = Criteria::ASC) Order by the RefAbundance column
 * @method CountryQuery orderByImportance($order = Criteria::ASC) Order by the Importance column
 * @method CountryQuery orderByRefimportance($order = Criteria::ASC) Order by the RefImportance column
 * @method CountryQuery orderByExvesselprice($order = Criteria::ASC) Order by the ExVesselPrice column
 * @method CountryQuery orderByAquaculture($order = Criteria::ASC) Order by the Aquaculture column
 * @method CountryQuery orderByRefaquaculture($order = Criteria::ASC) Order by the RefAquaculture column
 * @method CountryQuery orderByLiveexportorg($order = Criteria::ASC) Order by the LiveExportOrg column
 * @method CountryQuery orderByLiveexport($order = Criteria::ASC) Order by the LiveExport column
 * @method CountryQuery orderByRefliveexport($order = Criteria::ASC) Order by the RefLiveExport column
 * @method CountryQuery orderByGame($order = Criteria::ASC) Order by the Game column
 * @method CountryQuery orderByBait($order = Criteria::ASC) Order by the Bait column
 * @method CountryQuery orderByRegulations($order = Criteria::ASC) Order by the Regulations column
 * @method CountryQuery orderByRefregulations($order = Criteria::ASC) Order by the RefRegulations column
 * @method CountryQuery orderByThreatened($order = Criteria::ASC) Order by the Threatened column
 * @method CountryQuery orderByCountrysubcomp($order = Criteria::ASC) Order by the CountrySubComp column
 * @method CountryQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method CountryQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method CountryQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method CountryQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method CountryQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method CountryQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method CountryQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method CountryQuery groupByAutoctr() Group by the autoctr column
 * @method CountryQuery groupByStockcode() Group by the Stockcode column
 * @method CountryQuery groupByCCode() Group by the C_Code column
 * @method CountryQuery groupBySpeccode() Group by the SpecCode column
 * @method CountryQuery groupByCountryrefno() Group by the CountryRefNo column
 * @method CountryQuery groupByAlsoref() Group by the AlsoRef column
 * @method CountryQuery groupByStatus() Group by the Status column
 * @method CountryQuery groupByCurrentpresence() Group by the CurrentPresence column
 * @method CountryQuery groupByFreshwater() Group by the Freshwater column
 * @method CountryQuery groupByBrackish() Group by the Brackish column
 * @method CountryQuery groupBySaltwater() Group by the Saltwater column
 * @method CountryQuery groupByComments() Group by the Comments column
 * @method CountryQuery groupByAbundance() Group by the Abundance column
 * @method CountryQuery groupByRefabundance() Group by the RefAbundance column
 * @method CountryQuery groupByImportance() Group by the Importance column
 * @method CountryQuery groupByRefimportance() Group by the RefImportance column
 * @method CountryQuery groupByExvesselprice() Group by the ExVesselPrice column
 * @method CountryQuery groupByAquaculture() Group by the Aquaculture column
 * @method CountryQuery groupByRefaquaculture() Group by the RefAquaculture column
 * @method CountryQuery groupByLiveexportorg() Group by the LiveExportOrg column
 * @method CountryQuery groupByLiveexport() Group by the LiveExport column
 * @method CountryQuery groupByRefliveexport() Group by the RefLiveExport column
 * @method CountryQuery groupByGame() Group by the Game column
 * @method CountryQuery groupByBait() Group by the Bait column
 * @method CountryQuery groupByRegulations() Group by the Regulations column
 * @method CountryQuery groupByRefregulations() Group by the RefRegulations column
 * @method CountryQuery groupByThreatened() Group by the Threatened column
 * @method CountryQuery groupByCountrysubcomp() Group by the CountrySubComp column
 * @method CountryQuery groupByEntered() Group by the Entered column
 * @method CountryQuery groupByDateentered() Group by the DateEntered column
 * @method CountryQuery groupByModified() Group by the Modified column
 * @method CountryQuery groupByDatemodified() Group by the DateModified column
 * @method CountryQuery groupByExpert() Group by the Expert column
 * @method CountryQuery groupByDatechecked() Group by the DateChecked column
 * @method CountryQuery groupByTs() Group by the TS column
 *
 * @method CountryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CountryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CountryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Country findOne(PropelPDO $con = null) Return the first Country matching the query
 * @method Country findOneOrCreate(PropelPDO $con = null) Return the first Country matching the query, or a new Country object populated from the query conditions when no match is found
 *
 * @method Country findOneByAutoctr(int $autoctr) Return the first Country filtered by the autoctr column
 * @method Country findOneByStockcode(int $Stockcode) Return the first Country filtered by the Stockcode column
 * @method Country findOneByCCode(string $C_Code) Return the first Country filtered by the C_Code column
 * @method Country findOneBySpeccode(int $SpecCode) Return the first Country filtered by the SpecCode column
 * @method Country findOneByCountryrefno(int $CountryRefNo) Return the first Country filtered by the CountryRefNo column
 * @method Country findOneByAlsoref(int $AlsoRef) Return the first Country filtered by the AlsoRef column
 * @method Country findOneByStatus(string $Status) Return the first Country filtered by the Status column
 * @method Country findOneByCurrentpresence(string $CurrentPresence) Return the first Country filtered by the CurrentPresence column
 * @method Country findOneByFreshwater(int $Freshwater) Return the first Country filtered by the Freshwater column
 * @method Country findOneByBrackish(int $Brackish) Return the first Country filtered by the Brackish column
 * @method Country findOneBySaltwater(int $Saltwater) Return the first Country filtered by the Saltwater column
 * @method Country findOneByComments(string $Comments) Return the first Country filtered by the Comments column
 * @method Country findOneByAbundance(string $Abundance) Return the first Country filtered by the Abundance column
 * @method Country findOneByRefabundance(int $RefAbundance) Return the first Country filtered by the RefAbundance column
 * @method Country findOneByImportance(string $Importance) Return the first Country filtered by the Importance column
 * @method Country findOneByRefimportance(int $RefImportance) Return the first Country filtered by the RefImportance column
 * @method Country findOneByExvesselprice(double $ExVesselPrice) Return the first Country filtered by the ExVesselPrice column
 * @method Country findOneByAquaculture(string $Aquaculture) Return the first Country filtered by the Aquaculture column
 * @method Country findOneByRefaquaculture(int $RefAquaculture) Return the first Country filtered by the RefAquaculture column
 * @method Country findOneByLiveexportorg(int $LiveExportOrg) Return the first Country filtered by the LiveExportOrg column
 * @method Country findOneByLiveexport(string $LiveExport) Return the first Country filtered by the LiveExport column
 * @method Country findOneByRefliveexport(int $RefLiveExport) Return the first Country filtered by the RefLiveExport column
 * @method Country findOneByGame(int $Game) Return the first Country filtered by the Game column
 * @method Country findOneByBait(int $Bait) Return the first Country filtered by the Bait column
 * @method Country findOneByRegulations(string $Regulations) Return the first Country filtered by the Regulations column
 * @method Country findOneByRefregulations(int $RefRegulations) Return the first Country filtered by the RefRegulations column
 * @method Country findOneByThreatened(int $Threatened) Return the first Country filtered by the Threatened column
 * @method Country findOneByCountrysubcomp(int $CountrySubComp) Return the first Country filtered by the CountrySubComp column
 * @method Country findOneByEntered(int $Entered) Return the first Country filtered by the Entered column
 * @method Country findOneByDateentered(string $DateEntered) Return the first Country filtered by the DateEntered column
 * @method Country findOneByModified(int $Modified) Return the first Country filtered by the Modified column
 * @method Country findOneByDatemodified(string $DateModified) Return the first Country filtered by the DateModified column
 * @method Country findOneByExpert(int $Expert) Return the first Country filtered by the Expert column
 * @method Country findOneByDatechecked(string $DateChecked) Return the first Country filtered by the DateChecked column
 * @method Country findOneByTs(string $TS) Return the first Country filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Country objects filtered by the autoctr column
 * @method array findByStockcode(int $Stockcode) Return Country objects filtered by the Stockcode column
 * @method array findByCCode(string $C_Code) Return Country objects filtered by the C_Code column
 * @method array findBySpeccode(int $SpecCode) Return Country objects filtered by the SpecCode column
 * @method array findByCountryrefno(int $CountryRefNo) Return Country objects filtered by the CountryRefNo column
 * @method array findByAlsoref(int $AlsoRef) Return Country objects filtered by the AlsoRef column
 * @method array findByStatus(string $Status) Return Country objects filtered by the Status column
 * @method array findByCurrentpresence(string $CurrentPresence) Return Country objects filtered by the CurrentPresence column
 * @method array findByFreshwater(int $Freshwater) Return Country objects filtered by the Freshwater column
 * @method array findByBrackish(int $Brackish) Return Country objects filtered by the Brackish column
 * @method array findBySaltwater(int $Saltwater) Return Country objects filtered by the Saltwater column
 * @method array findByComments(string $Comments) Return Country objects filtered by the Comments column
 * @method array findByAbundance(string $Abundance) Return Country objects filtered by the Abundance column
 * @method array findByRefabundance(int $RefAbundance) Return Country objects filtered by the RefAbundance column
 * @method array findByImportance(string $Importance) Return Country objects filtered by the Importance column
 * @method array findByRefimportance(int $RefImportance) Return Country objects filtered by the RefImportance column
 * @method array findByExvesselprice(double $ExVesselPrice) Return Country objects filtered by the ExVesselPrice column
 * @method array findByAquaculture(string $Aquaculture) Return Country objects filtered by the Aquaculture column
 * @method array findByRefaquaculture(int $RefAquaculture) Return Country objects filtered by the RefAquaculture column
 * @method array findByLiveexportorg(int $LiveExportOrg) Return Country objects filtered by the LiveExportOrg column
 * @method array findByLiveexport(string $LiveExport) Return Country objects filtered by the LiveExport column
 * @method array findByRefliveexport(int $RefLiveExport) Return Country objects filtered by the RefLiveExport column
 * @method array findByGame(int $Game) Return Country objects filtered by the Game column
 * @method array findByBait(int $Bait) Return Country objects filtered by the Bait column
 * @method array findByRegulations(string $Regulations) Return Country objects filtered by the Regulations column
 * @method array findByRefregulations(int $RefRegulations) Return Country objects filtered by the RefRegulations column
 * @method array findByThreatened(int $Threatened) Return Country objects filtered by the Threatened column
 * @method array findByCountrysubcomp(int $CountrySubComp) Return Country objects filtered by the CountrySubComp column
 * @method array findByEntered(int $Entered) Return Country objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Country objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Country objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Country objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Country objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Country objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Country objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCountryQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCountryQuery object.
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
            $modelName = 'Country';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CountryQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CountryQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CountryQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CountryQuery) {
            return $criteria;
        }
        $query = new CountryQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$Stockcode, $C_Code]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Country|Country[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CountryPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CountryPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Country A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `Stockcode`, `C_Code`, `SpecCode`, `CountryRefNo`, `AlsoRef`, `Status`, `CurrentPresence`, `Freshwater`, `Brackish`, `Saltwater`, `Comments`, `Abundance`, `RefAbundance`, `Importance`, `RefImportance`, `ExVesselPrice`, `Aquaculture`, `RefAquaculture`, `LiveExportOrg`, `LiveExport`, `RefLiveExport`, `Game`, `Bait`, `Regulations`, `RefRegulations`, `Threatened`, `CountrySubComp`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `country` WHERE `Stockcode` = :p0 AND `C_Code` = :p1';
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
            $obj = new Country();
            $obj->hydrate($row);
            CountryPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Country|Country[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Country[]|mixed the list of results, formatted by the current formatter
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
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CountryPeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CountryPeer::C_CODE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CountryPeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CountryPeer::C_CODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(CountryPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(CountryPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the Stockcode column
     *
     * Example usage:
     * <code>
     * $query->filterByStockcode(1234); // WHERE Stockcode = 1234
     * $query->filterByStockcode(array(12, 34)); // WHERE Stockcode IN (12, 34)
     * $query->filterByStockcode(array('min' => 12)); // WHERE Stockcode >= 12
     * $query->filterByStockcode(array('max' => 12)); // WHERE Stockcode <= 12
     * </code>
     *
     * @param     mixed $stockcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(CountryPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(CountryPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return CountryQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CountryPeer::C_CODE, $cCode, $comparison);
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
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(CountryPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(CountryPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the CountryRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByCountryrefno(1234); // WHERE CountryRefNo = 1234
     * $query->filterByCountryrefno(array(12, 34)); // WHERE CountryRefNo IN (12, 34)
     * $query->filterByCountryrefno(array('min' => 12)); // WHERE CountryRefNo >= 12
     * $query->filterByCountryrefno(array('max' => 12)); // WHERE CountryRefNo <= 12
     * </code>
     *
     * @param     mixed $countryrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByCountryrefno($countryrefno = null, $comparison = null)
    {
        if (is_array($countryrefno)) {
            $useMinMax = false;
            if (isset($countryrefno['min'])) {
                $this->addUsingAlias(CountryPeer::COUNTRYREFNO, $countryrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($countryrefno['max'])) {
                $this->addUsingAlias(CountryPeer::COUNTRYREFNO, $countryrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::COUNTRYREFNO, $countryrefno, $comparison);
    }

    /**
     * Filter the query on the AlsoRef column
     *
     * Example usage:
     * <code>
     * $query->filterByAlsoref(1234); // WHERE AlsoRef = 1234
     * $query->filterByAlsoref(array(12, 34)); // WHERE AlsoRef IN (12, 34)
     * $query->filterByAlsoref(array('min' => 12)); // WHERE AlsoRef >= 12
     * $query->filterByAlsoref(array('max' => 12)); // WHERE AlsoRef <= 12
     * </code>
     *
     * @param     mixed $alsoref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByAlsoref($alsoref = null, $comparison = null)
    {
        if (is_array($alsoref)) {
            $useMinMax = false;
            if (isset($alsoref['min'])) {
                $this->addUsingAlias(CountryPeer::ALSOREF, $alsoref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($alsoref['max'])) {
                $this->addUsingAlias(CountryPeer::ALSOREF, $alsoref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::ALSOREF, $alsoref, $comparison);
    }

    /**
     * Filter the query on the Status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE Status = 'fooValue'
     * $query->filterByStatus('%fooValue%'); // WHERE Status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $status)) {
                $status = str_replace('*', '%', $status);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountryPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the CurrentPresence column
     *
     * Example usage:
     * <code>
     * $query->filterByCurrentpresence('fooValue');   // WHERE CurrentPresence = 'fooValue'
     * $query->filterByCurrentpresence('%fooValue%'); // WHERE CurrentPresence LIKE '%fooValue%'
     * </code>
     *
     * @param     string $currentpresence The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByCurrentpresence($currentpresence = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($currentpresence)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $currentpresence)) {
                $currentpresence = str_replace('*', '%', $currentpresence);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountryPeer::CURRENTPRESENCE, $currentpresence, $comparison);
    }

    /**
     * Filter the query on the Freshwater column
     *
     * Example usage:
     * <code>
     * $query->filterByFreshwater(1234); // WHERE Freshwater = 1234
     * $query->filterByFreshwater(array(12, 34)); // WHERE Freshwater IN (12, 34)
     * $query->filterByFreshwater(array('min' => 12)); // WHERE Freshwater >= 12
     * $query->filterByFreshwater(array('max' => 12)); // WHERE Freshwater <= 12
     * </code>
     *
     * @param     mixed $freshwater The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByFreshwater($freshwater = null, $comparison = null)
    {
        if (is_array($freshwater)) {
            $useMinMax = false;
            if (isset($freshwater['min'])) {
                $this->addUsingAlias(CountryPeer::FRESHWATER, $freshwater['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freshwater['max'])) {
                $this->addUsingAlias(CountryPeer::FRESHWATER, $freshwater['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::FRESHWATER, $freshwater, $comparison);
    }

    /**
     * Filter the query on the Brackish column
     *
     * Example usage:
     * <code>
     * $query->filterByBrackish(1234); // WHERE Brackish = 1234
     * $query->filterByBrackish(array(12, 34)); // WHERE Brackish IN (12, 34)
     * $query->filterByBrackish(array('min' => 12)); // WHERE Brackish >= 12
     * $query->filterByBrackish(array('max' => 12)); // WHERE Brackish <= 12
     * </code>
     *
     * @param     mixed $brackish The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByBrackish($brackish = null, $comparison = null)
    {
        if (is_array($brackish)) {
            $useMinMax = false;
            if (isset($brackish['min'])) {
                $this->addUsingAlias(CountryPeer::BRACKISH, $brackish['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($brackish['max'])) {
                $this->addUsingAlias(CountryPeer::BRACKISH, $brackish['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::BRACKISH, $brackish, $comparison);
    }

    /**
     * Filter the query on the Saltwater column
     *
     * Example usage:
     * <code>
     * $query->filterBySaltwater(1234); // WHERE Saltwater = 1234
     * $query->filterBySaltwater(array(12, 34)); // WHERE Saltwater IN (12, 34)
     * $query->filterBySaltwater(array('min' => 12)); // WHERE Saltwater >= 12
     * $query->filterBySaltwater(array('max' => 12)); // WHERE Saltwater <= 12
     * </code>
     *
     * @param     mixed $saltwater The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterBySaltwater($saltwater = null, $comparison = null)
    {
        if (is_array($saltwater)) {
            $useMinMax = false;
            if (isset($saltwater['min'])) {
                $this->addUsingAlias(CountryPeer::SALTWATER, $saltwater['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($saltwater['max'])) {
                $this->addUsingAlias(CountryPeer::SALTWATER, $saltwater['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::SALTWATER, $saltwater, $comparison);
    }

    /**
     * Filter the query on the Comments column
     *
     * Example usage:
     * <code>
     * $query->filterByComments('fooValue');   // WHERE Comments = 'fooValue'
     * $query->filterByComments('%fooValue%'); // WHERE Comments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByComments($comments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comments)) {
                $comments = str_replace('*', '%', $comments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountryPeer::COMMENTS, $comments, $comparison);
    }

    /**
     * Filter the query on the Abundance column
     *
     * Example usage:
     * <code>
     * $query->filterByAbundance('fooValue');   // WHERE Abundance = 'fooValue'
     * $query->filterByAbundance('%fooValue%'); // WHERE Abundance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abundance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByAbundance($abundance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abundance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abundance)) {
                $abundance = str_replace('*', '%', $abundance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountryPeer::ABUNDANCE, $abundance, $comparison);
    }

    /**
     * Filter the query on the RefAbundance column
     *
     * Example usage:
     * <code>
     * $query->filterByRefabundance(1234); // WHERE RefAbundance = 1234
     * $query->filterByRefabundance(array(12, 34)); // WHERE RefAbundance IN (12, 34)
     * $query->filterByRefabundance(array('min' => 12)); // WHERE RefAbundance >= 12
     * $query->filterByRefabundance(array('max' => 12)); // WHERE RefAbundance <= 12
     * </code>
     *
     * @param     mixed $refabundance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByRefabundance($refabundance = null, $comparison = null)
    {
        if (is_array($refabundance)) {
            $useMinMax = false;
            if (isset($refabundance['min'])) {
                $this->addUsingAlias(CountryPeer::REFABUNDANCE, $refabundance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refabundance['max'])) {
                $this->addUsingAlias(CountryPeer::REFABUNDANCE, $refabundance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::REFABUNDANCE, $refabundance, $comparison);
    }

    /**
     * Filter the query on the Importance column
     *
     * Example usage:
     * <code>
     * $query->filterByImportance('fooValue');   // WHERE Importance = 'fooValue'
     * $query->filterByImportance('%fooValue%'); // WHERE Importance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $importance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByImportance($importance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($importance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $importance)) {
                $importance = str_replace('*', '%', $importance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountryPeer::IMPORTANCE, $importance, $comparison);
    }

    /**
     * Filter the query on the RefImportance column
     *
     * Example usage:
     * <code>
     * $query->filterByRefimportance(1234); // WHERE RefImportance = 1234
     * $query->filterByRefimportance(array(12, 34)); // WHERE RefImportance IN (12, 34)
     * $query->filterByRefimportance(array('min' => 12)); // WHERE RefImportance >= 12
     * $query->filterByRefimportance(array('max' => 12)); // WHERE RefImportance <= 12
     * </code>
     *
     * @param     mixed $refimportance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByRefimportance($refimportance = null, $comparison = null)
    {
        if (is_array($refimportance)) {
            $useMinMax = false;
            if (isset($refimportance['min'])) {
                $this->addUsingAlias(CountryPeer::REFIMPORTANCE, $refimportance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refimportance['max'])) {
                $this->addUsingAlias(CountryPeer::REFIMPORTANCE, $refimportance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::REFIMPORTANCE, $refimportance, $comparison);
    }

    /**
     * Filter the query on the ExVesselPrice column
     *
     * Example usage:
     * <code>
     * $query->filterByExvesselprice(1234); // WHERE ExVesselPrice = 1234
     * $query->filterByExvesselprice(array(12, 34)); // WHERE ExVesselPrice IN (12, 34)
     * $query->filterByExvesselprice(array('min' => 12)); // WHERE ExVesselPrice >= 12
     * $query->filterByExvesselprice(array('max' => 12)); // WHERE ExVesselPrice <= 12
     * </code>
     *
     * @param     mixed $exvesselprice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByExvesselprice($exvesselprice = null, $comparison = null)
    {
        if (is_array($exvesselprice)) {
            $useMinMax = false;
            if (isset($exvesselprice['min'])) {
                $this->addUsingAlias(CountryPeer::EXVESSELPRICE, $exvesselprice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($exvesselprice['max'])) {
                $this->addUsingAlias(CountryPeer::EXVESSELPRICE, $exvesselprice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::EXVESSELPRICE, $exvesselprice, $comparison);
    }

    /**
     * Filter the query on the Aquaculture column
     *
     * Example usage:
     * <code>
     * $query->filterByAquaculture('fooValue');   // WHERE Aquaculture = 'fooValue'
     * $query->filterByAquaculture('%fooValue%'); // WHERE Aquaculture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $aquaculture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByAquaculture($aquaculture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($aquaculture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $aquaculture)) {
                $aquaculture = str_replace('*', '%', $aquaculture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountryPeer::AQUACULTURE, $aquaculture, $comparison);
    }

    /**
     * Filter the query on the RefAquaculture column
     *
     * Example usage:
     * <code>
     * $query->filterByRefaquaculture(1234); // WHERE RefAquaculture = 1234
     * $query->filterByRefaquaculture(array(12, 34)); // WHERE RefAquaculture IN (12, 34)
     * $query->filterByRefaquaculture(array('min' => 12)); // WHERE RefAquaculture >= 12
     * $query->filterByRefaquaculture(array('max' => 12)); // WHERE RefAquaculture <= 12
     * </code>
     *
     * @param     mixed $refaquaculture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByRefaquaculture($refaquaculture = null, $comparison = null)
    {
        if (is_array($refaquaculture)) {
            $useMinMax = false;
            if (isset($refaquaculture['min'])) {
                $this->addUsingAlias(CountryPeer::REFAQUACULTURE, $refaquaculture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refaquaculture['max'])) {
                $this->addUsingAlias(CountryPeer::REFAQUACULTURE, $refaquaculture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::REFAQUACULTURE, $refaquaculture, $comparison);
    }

    /**
     * Filter the query on the LiveExportOrg column
     *
     * Example usage:
     * <code>
     * $query->filterByLiveexportorg(1234); // WHERE LiveExportOrg = 1234
     * $query->filterByLiveexportorg(array(12, 34)); // WHERE LiveExportOrg IN (12, 34)
     * $query->filterByLiveexportorg(array('min' => 12)); // WHERE LiveExportOrg >= 12
     * $query->filterByLiveexportorg(array('max' => 12)); // WHERE LiveExportOrg <= 12
     * </code>
     *
     * @param     mixed $liveexportorg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByLiveexportorg($liveexportorg = null, $comparison = null)
    {
        if (is_array($liveexportorg)) {
            $useMinMax = false;
            if (isset($liveexportorg['min'])) {
                $this->addUsingAlias(CountryPeer::LIVEEXPORTORG, $liveexportorg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($liveexportorg['max'])) {
                $this->addUsingAlias(CountryPeer::LIVEEXPORTORG, $liveexportorg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::LIVEEXPORTORG, $liveexportorg, $comparison);
    }

    /**
     * Filter the query on the LiveExport column
     *
     * Example usage:
     * <code>
     * $query->filterByLiveexport('fooValue');   // WHERE LiveExport = 'fooValue'
     * $query->filterByLiveexport('%fooValue%'); // WHERE LiveExport LIKE '%fooValue%'
     * </code>
     *
     * @param     string $liveexport The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByLiveexport($liveexport = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($liveexport)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $liveexport)) {
                $liveexport = str_replace('*', '%', $liveexport);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountryPeer::LIVEEXPORT, $liveexport, $comparison);
    }

    /**
     * Filter the query on the RefLiveExport column
     *
     * Example usage:
     * <code>
     * $query->filterByRefliveexport(1234); // WHERE RefLiveExport = 1234
     * $query->filterByRefliveexport(array(12, 34)); // WHERE RefLiveExport IN (12, 34)
     * $query->filterByRefliveexport(array('min' => 12)); // WHERE RefLiveExport >= 12
     * $query->filterByRefliveexport(array('max' => 12)); // WHERE RefLiveExport <= 12
     * </code>
     *
     * @param     mixed $refliveexport The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByRefliveexport($refliveexport = null, $comparison = null)
    {
        if (is_array($refliveexport)) {
            $useMinMax = false;
            if (isset($refliveexport['min'])) {
                $this->addUsingAlias(CountryPeer::REFLIVEEXPORT, $refliveexport['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refliveexport['max'])) {
                $this->addUsingAlias(CountryPeer::REFLIVEEXPORT, $refliveexport['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::REFLIVEEXPORT, $refliveexport, $comparison);
    }

    /**
     * Filter the query on the Game column
     *
     * Example usage:
     * <code>
     * $query->filterByGame(1234); // WHERE Game = 1234
     * $query->filterByGame(array(12, 34)); // WHERE Game IN (12, 34)
     * $query->filterByGame(array('min' => 12)); // WHERE Game >= 12
     * $query->filterByGame(array('max' => 12)); // WHERE Game <= 12
     * </code>
     *
     * @param     mixed $game The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByGame($game = null, $comparison = null)
    {
        if (is_array($game)) {
            $useMinMax = false;
            if (isset($game['min'])) {
                $this->addUsingAlias(CountryPeer::GAME, $game['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($game['max'])) {
                $this->addUsingAlias(CountryPeer::GAME, $game['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::GAME, $game, $comparison);
    }

    /**
     * Filter the query on the Bait column
     *
     * Example usage:
     * <code>
     * $query->filterByBait(1234); // WHERE Bait = 1234
     * $query->filterByBait(array(12, 34)); // WHERE Bait IN (12, 34)
     * $query->filterByBait(array('min' => 12)); // WHERE Bait >= 12
     * $query->filterByBait(array('max' => 12)); // WHERE Bait <= 12
     * </code>
     *
     * @param     mixed $bait The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByBait($bait = null, $comparison = null)
    {
        if (is_array($bait)) {
            $useMinMax = false;
            if (isset($bait['min'])) {
                $this->addUsingAlias(CountryPeer::BAIT, $bait['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bait['max'])) {
                $this->addUsingAlias(CountryPeer::BAIT, $bait['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::BAIT, $bait, $comparison);
    }

    /**
     * Filter the query on the Regulations column
     *
     * Example usage:
     * <code>
     * $query->filterByRegulations('fooValue');   // WHERE Regulations = 'fooValue'
     * $query->filterByRegulations('%fooValue%'); // WHERE Regulations LIKE '%fooValue%'
     * </code>
     *
     * @param     string $regulations The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByRegulations($regulations = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($regulations)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $regulations)) {
                $regulations = str_replace('*', '%', $regulations);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CountryPeer::REGULATIONS, $regulations, $comparison);
    }

    /**
     * Filter the query on the RefRegulations column
     *
     * Example usage:
     * <code>
     * $query->filterByRefregulations(1234); // WHERE RefRegulations = 1234
     * $query->filterByRefregulations(array(12, 34)); // WHERE RefRegulations IN (12, 34)
     * $query->filterByRefregulations(array('min' => 12)); // WHERE RefRegulations >= 12
     * $query->filterByRefregulations(array('max' => 12)); // WHERE RefRegulations <= 12
     * </code>
     *
     * @param     mixed $refregulations The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByRefregulations($refregulations = null, $comparison = null)
    {
        if (is_array($refregulations)) {
            $useMinMax = false;
            if (isset($refregulations['min'])) {
                $this->addUsingAlias(CountryPeer::REFREGULATIONS, $refregulations['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refregulations['max'])) {
                $this->addUsingAlias(CountryPeer::REFREGULATIONS, $refregulations['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::REFREGULATIONS, $refregulations, $comparison);
    }

    /**
     * Filter the query on the Threatened column
     *
     * Example usage:
     * <code>
     * $query->filterByThreatened(1234); // WHERE Threatened = 1234
     * $query->filterByThreatened(array(12, 34)); // WHERE Threatened IN (12, 34)
     * $query->filterByThreatened(array('min' => 12)); // WHERE Threatened >= 12
     * $query->filterByThreatened(array('max' => 12)); // WHERE Threatened <= 12
     * </code>
     *
     * @param     mixed $threatened The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByThreatened($threatened = null, $comparison = null)
    {
        if (is_array($threatened)) {
            $useMinMax = false;
            if (isset($threatened['min'])) {
                $this->addUsingAlias(CountryPeer::THREATENED, $threatened['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($threatened['max'])) {
                $this->addUsingAlias(CountryPeer::THREATENED, $threatened['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::THREATENED, $threatened, $comparison);
    }

    /**
     * Filter the query on the CountrySubComp column
     *
     * Example usage:
     * <code>
     * $query->filterByCountrysubcomp(1234); // WHERE CountrySubComp = 1234
     * $query->filterByCountrysubcomp(array(12, 34)); // WHERE CountrySubComp IN (12, 34)
     * $query->filterByCountrysubcomp(array('min' => 12)); // WHERE CountrySubComp >= 12
     * $query->filterByCountrysubcomp(array('max' => 12)); // WHERE CountrySubComp <= 12
     * </code>
     *
     * @param     mixed $countrysubcomp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByCountrysubcomp($countrysubcomp = null, $comparison = null)
    {
        if (is_array($countrysubcomp)) {
            $useMinMax = false;
            if (isset($countrysubcomp['min'])) {
                $this->addUsingAlias(CountryPeer::COUNTRYSUBCOMP, $countrysubcomp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($countrysubcomp['max'])) {
                $this->addUsingAlias(CountryPeer::COUNTRYSUBCOMP, $countrysubcomp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::COUNTRYSUBCOMP, $countrysubcomp, $comparison);
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
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(CountryPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(CountryPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::ENTERED, $entered, $comparison);
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
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(CountryPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(CountryPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(CountryPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(CountryPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::MODIFIED, $modified, $comparison);
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
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(CountryPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(CountryPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(CountryPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(CountryPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::EXPERT, $expert, $comparison);
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
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(CountryPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(CountryPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return CountryQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(CountryPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(CountryPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CountryPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Country $country Object to remove from the list of results
     *
     * @return CountryQuery The current query, for fluid interface
     */
    public function prune($country = null)
    {
        if ($country) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CountryPeer::STOCKCODE), $country->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CountryPeer::C_CODE), $country->getCCode(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
