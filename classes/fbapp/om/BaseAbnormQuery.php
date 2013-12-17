<?php


/**
 * Base class that represents a query for the 'abnorm' table.
 *
 *
 *
 * @method AbnormQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method AbnormQuery orderByFamily($order = Criteria::ASC) Order by the Family column
 * @method AbnormQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method AbnormQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method AbnormQuery orderByCommonname($order = Criteria::ASC) Order by the CommonName column
 * @method AbnormQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method AbnormQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method AbnormQuery orderByLifestage($order = Criteria::ASC) Order by the LifeStage column
 * @method AbnormQuery orderByLocation($order = Criteria::ASC) Order by the Location column
 * @method AbnormQuery orderBySeason($order = Criteria::ASC) Order by the Season column
 * @method AbnormQuery orderByAbnormalitydisease($order = Criteria::ASC) Order by the AbnormalityDisease column
 * @method AbnormQuery orderByPrevalence($order = Criteria::ASC) Order by the Prevalence column
 * @method AbnormQuery orderByStressor($order = Criteria::ASC) Order by the Stressor column
 * @method AbnormQuery orderByLabfield($order = Criteria::ASC) Order by the LabField column
 * @method AbnormQuery orderByConcentration($order = Criteria::ASC) Order by the Concentration column
 * @method AbnormQuery orderByAbnormrefno($order = Criteria::ASC) Order by the ABNORMRefNo column
 * @method AbnormQuery orderBySecondrefno($order = Criteria::ASC) Order by the SecondRefNo column
 * @method AbnormQuery orderByNotes($order = Criteria::ASC) Order by the Notes column
 * @method AbnormQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method AbnormQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method AbnormQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method AbnormQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method AbnormQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method AbnormQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method AbnormQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method AbnormQuery groupByAutoctr() Group by the AutoCtr column
 * @method AbnormQuery groupByFamily() Group by the Family column
 * @method AbnormQuery groupByGenus() Group by the Genus column
 * @method AbnormQuery groupBySpecies() Group by the Species column
 * @method AbnormQuery groupByCommonname() Group by the CommonName column
 * @method AbnormQuery groupBySpeccode() Group by the SpecCode column
 * @method AbnormQuery groupByStockcode() Group by the StockCode column
 * @method AbnormQuery groupByLifestage() Group by the LifeStage column
 * @method AbnormQuery groupByLocation() Group by the Location column
 * @method AbnormQuery groupBySeason() Group by the Season column
 * @method AbnormQuery groupByAbnormalitydisease() Group by the AbnormalityDisease column
 * @method AbnormQuery groupByPrevalence() Group by the Prevalence column
 * @method AbnormQuery groupByStressor() Group by the Stressor column
 * @method AbnormQuery groupByLabfield() Group by the LabField column
 * @method AbnormQuery groupByConcentration() Group by the Concentration column
 * @method AbnormQuery groupByAbnormrefno() Group by the ABNORMRefNo column
 * @method AbnormQuery groupBySecondrefno() Group by the SecondRefNo column
 * @method AbnormQuery groupByNotes() Group by the Notes column
 * @method AbnormQuery groupByEntered() Group by the Entered column
 * @method AbnormQuery groupByDateentered() Group by the DateEntered column
 * @method AbnormQuery groupByModified() Group by the Modified column
 * @method AbnormQuery groupByDatemodified() Group by the DateModified column
 * @method AbnormQuery groupByExpert() Group by the Expert column
 * @method AbnormQuery groupByDatechecked() Group by the DateChecked column
 * @method AbnormQuery groupByTs() Group by the TS column
 *
 * @method AbnormQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AbnormQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AbnormQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Abnorm findOne(PropelPDO $con = null) Return the first Abnorm matching the query
 * @method Abnorm findOneOrCreate(PropelPDO $con = null) Return the first Abnorm matching the query, or a new Abnorm object populated from the query conditions when no match is found
 *
 * @method Abnorm findOneByFamily(string $Family) Return the first Abnorm filtered by the Family column
 * @method Abnorm findOneByGenus(string $Genus) Return the first Abnorm filtered by the Genus column
 * @method Abnorm findOneBySpecies(string $Species) Return the first Abnorm filtered by the Species column
 * @method Abnorm findOneByCommonname(string $CommonName) Return the first Abnorm filtered by the CommonName column
 * @method Abnorm findOneBySpeccode(int $SpecCode) Return the first Abnorm filtered by the SpecCode column
 * @method Abnorm findOneByStockcode(int $StockCode) Return the first Abnorm filtered by the StockCode column
 * @method Abnorm findOneByLifestage(string $LifeStage) Return the first Abnorm filtered by the LifeStage column
 * @method Abnorm findOneByLocation(string $Location) Return the first Abnorm filtered by the Location column
 * @method Abnorm findOneBySeason(string $Season) Return the first Abnorm filtered by the Season column
 * @method Abnorm findOneByAbnormalitydisease(string $AbnormalityDisease) Return the first Abnorm filtered by the AbnormalityDisease column
 * @method Abnorm findOneByPrevalence(string $Prevalence) Return the first Abnorm filtered by the Prevalence column
 * @method Abnorm findOneByStressor(string $Stressor) Return the first Abnorm filtered by the Stressor column
 * @method Abnorm findOneByLabfield(string $LabField) Return the first Abnorm filtered by the LabField column
 * @method Abnorm findOneByConcentration(string $Concentration) Return the first Abnorm filtered by the Concentration column
 * @method Abnorm findOneByAbnormrefno(int $ABNORMRefNo) Return the first Abnorm filtered by the ABNORMRefNo column
 * @method Abnorm findOneBySecondrefno(int $SecondRefNo) Return the first Abnorm filtered by the SecondRefNo column
 * @method Abnorm findOneByNotes(string $Notes) Return the first Abnorm filtered by the Notes column
 * @method Abnorm findOneByEntered(int $Entered) Return the first Abnorm filtered by the Entered column
 * @method Abnorm findOneByDateentered(string $DateEntered) Return the first Abnorm filtered by the DateEntered column
 * @method Abnorm findOneByModified(int $Modified) Return the first Abnorm filtered by the Modified column
 * @method Abnorm findOneByDatemodified(string $DateModified) Return the first Abnorm filtered by the DateModified column
 * @method Abnorm findOneByExpert(int $Expert) Return the first Abnorm filtered by the Expert column
 * @method Abnorm findOneByDatechecked(string $DateChecked) Return the first Abnorm filtered by the DateChecked column
 * @method Abnorm findOneByTs(string $TS) Return the first Abnorm filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Abnorm objects filtered by the AutoCtr column
 * @method array findByFamily(string $Family) Return Abnorm objects filtered by the Family column
 * @method array findByGenus(string $Genus) Return Abnorm objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Abnorm objects filtered by the Species column
 * @method array findByCommonname(string $CommonName) Return Abnorm objects filtered by the CommonName column
 * @method array findBySpeccode(int $SpecCode) Return Abnorm objects filtered by the SpecCode column
 * @method array findByStockcode(int $StockCode) Return Abnorm objects filtered by the StockCode column
 * @method array findByLifestage(string $LifeStage) Return Abnorm objects filtered by the LifeStage column
 * @method array findByLocation(string $Location) Return Abnorm objects filtered by the Location column
 * @method array findBySeason(string $Season) Return Abnorm objects filtered by the Season column
 * @method array findByAbnormalitydisease(string $AbnormalityDisease) Return Abnorm objects filtered by the AbnormalityDisease column
 * @method array findByPrevalence(string $Prevalence) Return Abnorm objects filtered by the Prevalence column
 * @method array findByStressor(string $Stressor) Return Abnorm objects filtered by the Stressor column
 * @method array findByLabfield(string $LabField) Return Abnorm objects filtered by the LabField column
 * @method array findByConcentration(string $Concentration) Return Abnorm objects filtered by the Concentration column
 * @method array findByAbnormrefno(int $ABNORMRefNo) Return Abnorm objects filtered by the ABNORMRefNo column
 * @method array findBySecondrefno(int $SecondRefNo) Return Abnorm objects filtered by the SecondRefNo column
 * @method array findByNotes(string $Notes) Return Abnorm objects filtered by the Notes column
 * @method array findByEntered(int $Entered) Return Abnorm objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Abnorm objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Abnorm objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Abnorm objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Abnorm objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Abnorm objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Abnorm objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseAbnormQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAbnormQuery object.
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
            $modelName = 'Abnorm';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AbnormQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AbnormQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AbnormQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AbnormQuery) {
            return $criteria;
        }
        $query = new AbnormQuery(null, null, $modelAlias);

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
     * @return   Abnorm|Abnorm[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AbnormPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AbnormPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Abnorm A model object, or null if the key is not found
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
     * @return                 Abnorm A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `Family`, `Genus`, `Species`, `CommonName`, `SpecCode`, `StockCode`, `LifeStage`, `Location`, `Season`, `AbnormalityDisease`, `Prevalence`, `Stressor`, `LabField`, `Concentration`, `ABNORMRefNo`, `SecondRefNo`, `Notes`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `abnorm` WHERE `AutoCtr` = :p0';
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
            $obj = new Abnorm();
            $obj->hydrate($row);
            AbnormPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Abnorm|Abnorm[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Abnorm[]|mixed the list of results, formatted by the current formatter
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
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AbnormPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AbnormPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(AbnormPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(AbnormPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the Family column
     *
     * Example usage:
     * <code>
     * $query->filterByFamily('fooValue');   // WHERE Family = 'fooValue'
     * $query->filterByFamily('%fooValue%'); // WHERE Family LIKE '%fooValue%'
     * </code>
     *
     * @param     string $family The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByFamily($family = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($family)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $family)) {
                $family = str_replace('*', '%', $family);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbnormPeer::FAMILY, $family, $comparison);
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
     * @return AbnormQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AbnormPeer::GENUS, $genus, $comparison);
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
     * @return AbnormQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AbnormPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the CommonName column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonname('fooValue');   // WHERE CommonName = 'fooValue'
     * $query->filterByCommonname('%fooValue%'); // WHERE CommonName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByCommonname($commonname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonname)) {
                $commonname = str_replace('*', '%', $commonname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbnormPeer::COMMONNAME, $commonname, $comparison);
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
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(AbnormPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(AbnormPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormPeer::SPECCODE, $speccode, $comparison);
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
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(AbnormPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(AbnormPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the LifeStage column
     *
     * Example usage:
     * <code>
     * $query->filterByLifestage('fooValue');   // WHERE LifeStage = 'fooValue'
     * $query->filterByLifestage('%fooValue%'); // WHERE LifeStage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lifestage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByLifestage($lifestage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lifestage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lifestage)) {
                $lifestage = str_replace('*', '%', $lifestage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbnormPeer::LIFESTAGE, $lifestage, $comparison);
    }

    /**
     * Filter the query on the Location column
     *
     * Example usage:
     * <code>
     * $query->filterByLocation('fooValue');   // WHERE Location = 'fooValue'
     * $query->filterByLocation('%fooValue%'); // WHERE Location LIKE '%fooValue%'
     * </code>
     *
     * @param     string $location The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByLocation($location = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($location)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $location)) {
                $location = str_replace('*', '%', $location);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbnormPeer::LOCATION, $location, $comparison);
    }

    /**
     * Filter the query on the Season column
     *
     * Example usage:
     * <code>
     * $query->filterBySeason('fooValue');   // WHERE Season = 'fooValue'
     * $query->filterBySeason('%fooValue%'); // WHERE Season LIKE '%fooValue%'
     * </code>
     *
     * @param     string $season The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterBySeason($season = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($season)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $season)) {
                $season = str_replace('*', '%', $season);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbnormPeer::SEASON, $season, $comparison);
    }

    /**
     * Filter the query on the AbnormalityDisease column
     *
     * Example usage:
     * <code>
     * $query->filterByAbnormalitydisease('fooValue');   // WHERE AbnormalityDisease = 'fooValue'
     * $query->filterByAbnormalitydisease('%fooValue%'); // WHERE AbnormalityDisease LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abnormalitydisease The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByAbnormalitydisease($abnormalitydisease = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abnormalitydisease)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abnormalitydisease)) {
                $abnormalitydisease = str_replace('*', '%', $abnormalitydisease);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbnormPeer::ABNORMALITYDISEASE, $abnormalitydisease, $comparison);
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
     * @return AbnormQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AbnormPeer::PREVALENCE, $prevalence, $comparison);
    }

    /**
     * Filter the query on the Stressor column
     *
     * Example usage:
     * <code>
     * $query->filterByStressor('fooValue');   // WHERE Stressor = 'fooValue'
     * $query->filterByStressor('%fooValue%'); // WHERE Stressor LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stressor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByStressor($stressor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stressor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stressor)) {
                $stressor = str_replace('*', '%', $stressor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbnormPeer::STRESSOR, $stressor, $comparison);
    }

    /**
     * Filter the query on the LabField column
     *
     * Example usage:
     * <code>
     * $query->filterByLabfield('fooValue');   // WHERE LabField = 'fooValue'
     * $query->filterByLabfield('%fooValue%'); // WHERE LabField LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labfield The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByLabfield($labfield = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labfield)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labfield)) {
                $labfield = str_replace('*', '%', $labfield);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbnormPeer::LABFIELD, $labfield, $comparison);
    }

    /**
     * Filter the query on the Concentration column
     *
     * Example usage:
     * <code>
     * $query->filterByConcentration('fooValue');   // WHERE Concentration = 'fooValue'
     * $query->filterByConcentration('%fooValue%'); // WHERE Concentration LIKE '%fooValue%'
     * </code>
     *
     * @param     string $concentration The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByConcentration($concentration = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($concentration)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $concentration)) {
                $concentration = str_replace('*', '%', $concentration);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbnormPeer::CONCENTRATION, $concentration, $comparison);
    }

    /**
     * Filter the query on the ABNORMRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByAbnormrefno(1234); // WHERE ABNORMRefNo = 1234
     * $query->filterByAbnormrefno(array(12, 34)); // WHERE ABNORMRefNo IN (12, 34)
     * $query->filterByAbnormrefno(array('min' => 12)); // WHERE ABNORMRefNo >= 12
     * $query->filterByAbnormrefno(array('max' => 12)); // WHERE ABNORMRefNo <= 12
     * </code>
     *
     * @param     mixed $abnormrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByAbnormrefno($abnormrefno = null, $comparison = null)
    {
        if (is_array($abnormrefno)) {
            $useMinMax = false;
            if (isset($abnormrefno['min'])) {
                $this->addUsingAlias(AbnormPeer::ABNORMREFNO, $abnormrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($abnormrefno['max'])) {
                $this->addUsingAlias(AbnormPeer::ABNORMREFNO, $abnormrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormPeer::ABNORMREFNO, $abnormrefno, $comparison);
    }

    /**
     * Filter the query on the SecondRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterBySecondrefno(1234); // WHERE SecondRefNo = 1234
     * $query->filterBySecondrefno(array(12, 34)); // WHERE SecondRefNo IN (12, 34)
     * $query->filterBySecondrefno(array('min' => 12)); // WHERE SecondRefNo >= 12
     * $query->filterBySecondrefno(array('max' => 12)); // WHERE SecondRefNo <= 12
     * </code>
     *
     * @param     mixed $secondrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterBySecondrefno($secondrefno = null, $comparison = null)
    {
        if (is_array($secondrefno)) {
            $useMinMax = false;
            if (isset($secondrefno['min'])) {
                $this->addUsingAlias(AbnormPeer::SECONDREFNO, $secondrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($secondrefno['max'])) {
                $this->addUsingAlias(AbnormPeer::SECONDREFNO, $secondrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormPeer::SECONDREFNO, $secondrefno, $comparison);
    }

    /**
     * Filter the query on the Notes column
     *
     * Example usage:
     * <code>
     * $query->filterByNotes('fooValue');   // WHERE Notes = 'fooValue'
     * $query->filterByNotes('%fooValue%'); // WHERE Notes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByNotes($notes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $notes)) {
                $notes = str_replace('*', '%', $notes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AbnormPeer::NOTES, $notes, $comparison);
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
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(AbnormPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(AbnormPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormPeer::ENTERED, $entered, $comparison);
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
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(AbnormPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(AbnormPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(AbnormPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(AbnormPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormPeer::MODIFIED, $modified, $comparison);
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
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(AbnormPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(AbnormPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(AbnormPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(AbnormPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormPeer::EXPERT, $expert, $comparison);
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
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(AbnormPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(AbnormPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return AbnormQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(AbnormPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(AbnormPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AbnormPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Abnorm $abnorm Object to remove from the list of results
     *
     * @return AbnormQuery The current query, for fluid interface
     */
    public function prune($abnorm = null)
    {
        if ($abnorm) {
            $this->addUsingAlias(AbnormPeer::AUTOCTR, $abnorm->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
