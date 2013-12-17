<?php


/**
 * Base class that represents a query for the 'ciguafb' table.
 *
 *
 *
 * @method CiguafbQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method CiguafbQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method CiguafbQuery orderByValidgenus($order = Criteria::ASC) Order by the ValidGenus column
 * @method CiguafbQuery orderByValidspecies($order = Criteria::ASC) Order by the ValidSpecies column
 * @method CiguafbQuery orderByCountryct($order = Criteria::ASC) Order by the CountryCT column
 * @method CiguafbQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method CiguafbQuery orderByFrequencyct($order = Criteria::ASC) Order by the FrequencyCT column
 * @method CiguafbQuery orderByDistributionct($order = Criteria::ASC) Order by the DistributionCT column
 * @method CiguafbQuery orderByNotect($order = Criteria::ASC) Order by the NoteCT column
 * @method CiguafbQuery orderByRefcountryct($order = Criteria::ASC) Order by the RefCountryCT column
 * @method CiguafbQuery orderByDalzelcode($order = Criteria::ASC) Order by the DalzelCode column
 * @method CiguafbQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method CiguafbQuery groupByAutoctr() Group by the AutoCtr column
 * @method CiguafbQuery groupBySpeccode() Group by the SpecCode column
 * @method CiguafbQuery groupByValidgenus() Group by the ValidGenus column
 * @method CiguafbQuery groupByValidspecies() Group by the ValidSpecies column
 * @method CiguafbQuery groupByCountryct() Group by the CountryCT column
 * @method CiguafbQuery groupByCCode() Group by the C_Code column
 * @method CiguafbQuery groupByFrequencyct() Group by the FrequencyCT column
 * @method CiguafbQuery groupByDistributionct() Group by the DistributionCT column
 * @method CiguafbQuery groupByNotect() Group by the NoteCT column
 * @method CiguafbQuery groupByRefcountryct() Group by the RefCountryCT column
 * @method CiguafbQuery groupByDalzelcode() Group by the DalzelCode column
 * @method CiguafbQuery groupByTs() Group by the TS column
 *
 * @method CiguafbQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CiguafbQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CiguafbQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Ciguafb findOne(PropelPDO $con = null) Return the first Ciguafb matching the query
 * @method Ciguafb findOneOrCreate(PropelPDO $con = null) Return the first Ciguafb matching the query, or a new Ciguafb object populated from the query conditions when no match is found
 *
 * @method Ciguafb findOneBySpeccode(int $SpecCode) Return the first Ciguafb filtered by the SpecCode column
 * @method Ciguafb findOneByValidgenus(string $ValidGenus) Return the first Ciguafb filtered by the ValidGenus column
 * @method Ciguafb findOneByValidspecies(string $ValidSpecies) Return the first Ciguafb filtered by the ValidSpecies column
 * @method Ciguafb findOneByCountryct(string $CountryCT) Return the first Ciguafb filtered by the CountryCT column
 * @method Ciguafb findOneByCCode(string $C_Code) Return the first Ciguafb filtered by the C_Code column
 * @method Ciguafb findOneByFrequencyct(string $FrequencyCT) Return the first Ciguafb filtered by the FrequencyCT column
 * @method Ciguafb findOneByDistributionct(string $DistributionCT) Return the first Ciguafb filtered by the DistributionCT column
 * @method Ciguafb findOneByNotect(string $NoteCT) Return the first Ciguafb filtered by the NoteCT column
 * @method Ciguafb findOneByRefcountryct(int $RefCountryCT) Return the first Ciguafb filtered by the RefCountryCT column
 * @method Ciguafb findOneByDalzelcode(int $DalzelCode) Return the first Ciguafb filtered by the DalzelCode column
 * @method Ciguafb findOneByTs(string $TS) Return the first Ciguafb filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Ciguafb objects filtered by the AutoCtr column
 * @method array findBySpeccode(int $SpecCode) Return Ciguafb objects filtered by the SpecCode column
 * @method array findByValidgenus(string $ValidGenus) Return Ciguafb objects filtered by the ValidGenus column
 * @method array findByValidspecies(string $ValidSpecies) Return Ciguafb objects filtered by the ValidSpecies column
 * @method array findByCountryct(string $CountryCT) Return Ciguafb objects filtered by the CountryCT column
 * @method array findByCCode(string $C_Code) Return Ciguafb objects filtered by the C_Code column
 * @method array findByFrequencyct(string $FrequencyCT) Return Ciguafb objects filtered by the FrequencyCT column
 * @method array findByDistributionct(string $DistributionCT) Return Ciguafb objects filtered by the DistributionCT column
 * @method array findByNotect(string $NoteCT) Return Ciguafb objects filtered by the NoteCT column
 * @method array findByRefcountryct(int $RefCountryCT) Return Ciguafb objects filtered by the RefCountryCT column
 * @method array findByDalzelcode(int $DalzelCode) Return Ciguafb objects filtered by the DalzelCode column
 * @method array findByTs(string $TS) Return Ciguafb objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseCiguafbQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCiguafbQuery object.
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
            $modelName = 'Ciguafb';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CiguafbQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CiguafbQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CiguafbQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CiguafbQuery) {
            return $criteria;
        }
        $query = new CiguafbQuery(null, null, $modelAlias);

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
     * @return   Ciguafb|Ciguafb[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CiguafbPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CiguafbPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ciguafb A model object, or null if the key is not found
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
     * @return                 Ciguafb A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `SpecCode`, `ValidGenus`, `ValidSpecies`, `CountryCT`, `C_Code`, `FrequencyCT`, `DistributionCT`, `NoteCT`, `RefCountryCT`, `DalzelCode`, `TS` FROM `ciguafb` WHERE `AutoCtr` = :p0';
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
            $obj = new Ciguafb();
            $obj->hydrate($row);
            CiguafbPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ciguafb|Ciguafb[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ciguafb[]|mixed the list of results, formatted by the current formatter
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
     * @return CiguafbQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CiguafbPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CiguafbQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CiguafbPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return CiguafbQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(CiguafbPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(CiguafbPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguafbPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return CiguafbQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(CiguafbPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(CiguafbPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguafbPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the ValidGenus column
     *
     * Example usage:
     * <code>
     * $query->filterByValidgenus('fooValue');   // WHERE ValidGenus = 'fooValue'
     * $query->filterByValidgenus('%fooValue%'); // WHERE ValidGenus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validgenus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguafbQuery The current query, for fluid interface
     */
    public function filterByValidgenus($validgenus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validgenus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validgenus)) {
                $validgenus = str_replace('*', '%', $validgenus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguafbPeer::VALIDGENUS, $validgenus, $comparison);
    }

    /**
     * Filter the query on the ValidSpecies column
     *
     * Example usage:
     * <code>
     * $query->filterByValidspecies('fooValue');   // WHERE ValidSpecies = 'fooValue'
     * $query->filterByValidspecies('%fooValue%'); // WHERE ValidSpecies LIKE '%fooValue%'
     * </code>
     *
     * @param     string $validspecies The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguafbQuery The current query, for fluid interface
     */
    public function filterByValidspecies($validspecies = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($validspecies)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $validspecies)) {
                $validspecies = str_replace('*', '%', $validspecies);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguafbPeer::VALIDSPECIES, $validspecies, $comparison);
    }

    /**
     * Filter the query on the CountryCT column
     *
     * Example usage:
     * <code>
     * $query->filterByCountryct('fooValue');   // WHERE CountryCT = 'fooValue'
     * $query->filterByCountryct('%fooValue%'); // WHERE CountryCT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $countryct The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguafbQuery The current query, for fluid interface
     */
    public function filterByCountryct($countryct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($countryct)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $countryct)) {
                $countryct = str_replace('*', '%', $countryct);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguafbPeer::COUNTRYCT, $countryct, $comparison);
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
     * @return CiguafbQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CiguafbPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the FrequencyCT column
     *
     * Example usage:
     * <code>
     * $query->filterByFrequencyct('fooValue');   // WHERE FrequencyCT = 'fooValue'
     * $query->filterByFrequencyct('%fooValue%'); // WHERE FrequencyCT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $frequencyct The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguafbQuery The current query, for fluid interface
     */
    public function filterByFrequencyct($frequencyct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($frequencyct)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $frequencyct)) {
                $frequencyct = str_replace('*', '%', $frequencyct);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguafbPeer::FREQUENCYCT, $frequencyct, $comparison);
    }

    /**
     * Filter the query on the DistributionCT column
     *
     * Example usage:
     * <code>
     * $query->filterByDistributionct('fooValue');   // WHERE DistributionCT = 'fooValue'
     * $query->filterByDistributionct('%fooValue%'); // WHERE DistributionCT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $distributionct The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguafbQuery The current query, for fluid interface
     */
    public function filterByDistributionct($distributionct = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($distributionct)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $distributionct)) {
                $distributionct = str_replace('*', '%', $distributionct);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguafbPeer::DISTRIBUTIONCT, $distributionct, $comparison);
    }

    /**
     * Filter the query on the NoteCT column
     *
     * Example usage:
     * <code>
     * $query->filterByNotect('fooValue');   // WHERE NoteCT = 'fooValue'
     * $query->filterByNotect('%fooValue%'); // WHERE NoteCT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notect The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguafbQuery The current query, for fluid interface
     */
    public function filterByNotect($notect = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notect)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $notect)) {
                $notect = str_replace('*', '%', $notect);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CiguafbPeer::NOTECT, $notect, $comparison);
    }

    /**
     * Filter the query on the RefCountryCT column
     *
     * Example usage:
     * <code>
     * $query->filterByRefcountryct(1234); // WHERE RefCountryCT = 1234
     * $query->filterByRefcountryct(array(12, 34)); // WHERE RefCountryCT IN (12, 34)
     * $query->filterByRefcountryct(array('min' => 12)); // WHERE RefCountryCT >= 12
     * $query->filterByRefcountryct(array('max' => 12)); // WHERE RefCountryCT <= 12
     * </code>
     *
     * @param     mixed $refcountryct The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguafbQuery The current query, for fluid interface
     */
    public function filterByRefcountryct($refcountryct = null, $comparison = null)
    {
        if (is_array($refcountryct)) {
            $useMinMax = false;
            if (isset($refcountryct['min'])) {
                $this->addUsingAlias(CiguafbPeer::REFCOUNTRYCT, $refcountryct['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refcountryct['max'])) {
                $this->addUsingAlias(CiguafbPeer::REFCOUNTRYCT, $refcountryct['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguafbPeer::REFCOUNTRYCT, $refcountryct, $comparison);
    }

    /**
     * Filter the query on the DalzelCode column
     *
     * Example usage:
     * <code>
     * $query->filterByDalzelcode(1234); // WHERE DalzelCode = 1234
     * $query->filterByDalzelcode(array(12, 34)); // WHERE DalzelCode IN (12, 34)
     * $query->filterByDalzelcode(array('min' => 12)); // WHERE DalzelCode >= 12
     * $query->filterByDalzelcode(array('max' => 12)); // WHERE DalzelCode <= 12
     * </code>
     *
     * @param     mixed $dalzelcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CiguafbQuery The current query, for fluid interface
     */
    public function filterByDalzelcode($dalzelcode = null, $comparison = null)
    {
        if (is_array($dalzelcode)) {
            $useMinMax = false;
            if (isset($dalzelcode['min'])) {
                $this->addUsingAlias(CiguafbPeer::DALZELCODE, $dalzelcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dalzelcode['max'])) {
                $this->addUsingAlias(CiguafbPeer::DALZELCODE, $dalzelcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguafbPeer::DALZELCODE, $dalzelcode, $comparison);
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
     * @return CiguafbQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(CiguafbPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(CiguafbPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CiguafbPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Ciguafb $ciguafb Object to remove from the list of results
     *
     * @return CiguafbQuery The current query, for fluid interface
     */
    public function prune($ciguafb = null)
    {
        if ($ciguafb) {
            $this->addUsingAlias(CiguafbPeer::AUTOCTR, $ciguafb->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
