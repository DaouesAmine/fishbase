<?php


/**
 * Base class that represents a query for the 'larvdyn' table.
 *
 *
 *
 * @method LarvdynQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method LarvdynQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method LarvdynQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method LarvdynQuery orderByGenus($order = Criteria::ASC) Order by the Genus column
 * @method LarvdynQuery orderBySpecies($order = Criteria::ASC) Order by the Species column
 * @method LarvdynQuery orderByLarvdynrefno($order = Criteria::ASC) Order by the LarvDynRefNo column
 * @method LarvdynQuery orderByEcosystem($order = Criteria::ASC) Order by the Ecosystem column
 * @method LarvdynQuery orderByTemperature($order = Criteria::ASC) Order by the Temperature column
 * @method LarvdynQuery orderByDuration($order = Criteria::ASC) Order by the Duration column
 * @method LarvdynQuery orderByWhatch($order = Criteria::ASC) Order by the WHatch column
 * @method LarvdynQuery orderByWmeta($order = Criteria::ASC) Order by the WMeta column
 * @method LarvdynQuery orderByGrowth($order = Criteria::ASC) Order by the Growth column
 * @method LarvdynQuery orderByMortality($order = Criteria::ASC) Order by the Mortality column
 * @method LarvdynQuery orderByOxygencons($order = Criteria::ASC) Order by the OxygenCons column
 * @method LarvdynQuery orderByIngestion($order = Criteria::ASC) Order by the Ingestion column
 * @method LarvdynQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method LarvdynQuery orderByRefs($order = Criteria::ASC) Order by the Refs column
 * @method LarvdynQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method LarvdynQuery orderByDateentered($order = Criteria::ASC) Order by the Dateentered column
 * @method LarvdynQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method LarvdynQuery orderByDatemodified($order = Criteria::ASC) Order by the Datemodified column
 * @method LarvdynQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method LarvdynQuery orderByDatechecked($order = Criteria::ASC) Order by the Datechecked column
 * @method LarvdynQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method LarvdynQuery groupByAutoctr() Group by the autoctr column
 * @method LarvdynQuery groupByStockcode() Group by the StockCode column
 * @method LarvdynQuery groupBySpeccode() Group by the SpecCode column
 * @method LarvdynQuery groupByGenus() Group by the Genus column
 * @method LarvdynQuery groupBySpecies() Group by the Species column
 * @method LarvdynQuery groupByLarvdynrefno() Group by the LarvDynRefNo column
 * @method LarvdynQuery groupByEcosystem() Group by the Ecosystem column
 * @method LarvdynQuery groupByTemperature() Group by the Temperature column
 * @method LarvdynQuery groupByDuration() Group by the Duration column
 * @method LarvdynQuery groupByWhatch() Group by the WHatch column
 * @method LarvdynQuery groupByWmeta() Group by the WMeta column
 * @method LarvdynQuery groupByGrowth() Group by the Growth column
 * @method LarvdynQuery groupByMortality() Group by the Mortality column
 * @method LarvdynQuery groupByOxygencons() Group by the OxygenCons column
 * @method LarvdynQuery groupByIngestion() Group by the Ingestion column
 * @method LarvdynQuery groupByRemark() Group by the Remark column
 * @method LarvdynQuery groupByRefs() Group by the Refs column
 * @method LarvdynQuery groupByEntered() Group by the Entered column
 * @method LarvdynQuery groupByDateentered() Group by the Dateentered column
 * @method LarvdynQuery groupByModified() Group by the Modified column
 * @method LarvdynQuery groupByDatemodified() Group by the Datemodified column
 * @method LarvdynQuery groupByExpert() Group by the Expert column
 * @method LarvdynQuery groupByDatechecked() Group by the Datechecked column
 * @method LarvdynQuery groupByTs() Group by the TS column
 *
 * @method LarvdynQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method LarvdynQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method LarvdynQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Larvdyn findOne(PropelPDO $con = null) Return the first Larvdyn matching the query
 * @method Larvdyn findOneOrCreate(PropelPDO $con = null) Return the first Larvdyn matching the query, or a new Larvdyn object populated from the query conditions when no match is found
 *
 * @method Larvdyn findOneByStockcode(int $StockCode) Return the first Larvdyn filtered by the StockCode column
 * @method Larvdyn findOneBySpeccode(int $SpecCode) Return the first Larvdyn filtered by the SpecCode column
 * @method Larvdyn findOneByGenus(string $Genus) Return the first Larvdyn filtered by the Genus column
 * @method Larvdyn findOneBySpecies(string $Species) Return the first Larvdyn filtered by the Species column
 * @method Larvdyn findOneByLarvdynrefno(int $LarvDynRefNo) Return the first Larvdyn filtered by the LarvDynRefNo column
 * @method Larvdyn findOneByEcosystem(string $Ecosystem) Return the first Larvdyn filtered by the Ecosystem column
 * @method Larvdyn findOneByTemperature(double $Temperature) Return the first Larvdyn filtered by the Temperature column
 * @method Larvdyn findOneByDuration(double $Duration) Return the first Larvdyn filtered by the Duration column
 * @method Larvdyn findOneByWhatch(int $WHatch) Return the first Larvdyn filtered by the WHatch column
 * @method Larvdyn findOneByWmeta(int $WMeta) Return the first Larvdyn filtered by the WMeta column
 * @method Larvdyn findOneByGrowth(double $Growth) Return the first Larvdyn filtered by the Growth column
 * @method Larvdyn findOneByMortality(double $Mortality) Return the first Larvdyn filtered by the Mortality column
 * @method Larvdyn findOneByOxygencons(double $OxygenCons) Return the first Larvdyn filtered by the OxygenCons column
 * @method Larvdyn findOneByIngestion(double $Ingestion) Return the first Larvdyn filtered by the Ingestion column
 * @method Larvdyn findOneByRemark(string $Remark) Return the first Larvdyn filtered by the Remark column
 * @method Larvdyn findOneByRefs(string $Refs) Return the first Larvdyn filtered by the Refs column
 * @method Larvdyn findOneByEntered(int $Entered) Return the first Larvdyn filtered by the Entered column
 * @method Larvdyn findOneByDateentered(string $Dateentered) Return the first Larvdyn filtered by the Dateentered column
 * @method Larvdyn findOneByModified(int $Modified) Return the first Larvdyn filtered by the Modified column
 * @method Larvdyn findOneByDatemodified(string $Datemodified) Return the first Larvdyn filtered by the Datemodified column
 * @method Larvdyn findOneByExpert(int $Expert) Return the first Larvdyn filtered by the Expert column
 * @method Larvdyn findOneByDatechecked(string $Datechecked) Return the first Larvdyn filtered by the Datechecked column
 * @method Larvdyn findOneByTs(string $TS) Return the first Larvdyn filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Larvdyn objects filtered by the autoctr column
 * @method array findByStockcode(int $StockCode) Return Larvdyn objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Larvdyn objects filtered by the SpecCode column
 * @method array findByGenus(string $Genus) Return Larvdyn objects filtered by the Genus column
 * @method array findBySpecies(string $Species) Return Larvdyn objects filtered by the Species column
 * @method array findByLarvdynrefno(int $LarvDynRefNo) Return Larvdyn objects filtered by the LarvDynRefNo column
 * @method array findByEcosystem(string $Ecosystem) Return Larvdyn objects filtered by the Ecosystem column
 * @method array findByTemperature(double $Temperature) Return Larvdyn objects filtered by the Temperature column
 * @method array findByDuration(double $Duration) Return Larvdyn objects filtered by the Duration column
 * @method array findByWhatch(int $WHatch) Return Larvdyn objects filtered by the WHatch column
 * @method array findByWmeta(int $WMeta) Return Larvdyn objects filtered by the WMeta column
 * @method array findByGrowth(double $Growth) Return Larvdyn objects filtered by the Growth column
 * @method array findByMortality(double $Mortality) Return Larvdyn objects filtered by the Mortality column
 * @method array findByOxygencons(double $OxygenCons) Return Larvdyn objects filtered by the OxygenCons column
 * @method array findByIngestion(double $Ingestion) Return Larvdyn objects filtered by the Ingestion column
 * @method array findByRemark(string $Remark) Return Larvdyn objects filtered by the Remark column
 * @method array findByRefs(string $Refs) Return Larvdyn objects filtered by the Refs column
 * @method array findByEntered(int $Entered) Return Larvdyn objects filtered by the Entered column
 * @method array findByDateentered(string $Dateentered) Return Larvdyn objects filtered by the Dateentered column
 * @method array findByModified(int $Modified) Return Larvdyn objects filtered by the Modified column
 * @method array findByDatemodified(string $Datemodified) Return Larvdyn objects filtered by the Datemodified column
 * @method array findByExpert(int $Expert) Return Larvdyn objects filtered by the Expert column
 * @method array findByDatechecked(string $Datechecked) Return Larvdyn objects filtered by the Datechecked column
 * @method array findByTs(string $TS) Return Larvdyn objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseLarvdynQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseLarvdynQuery object.
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
            $modelName = 'Larvdyn';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new LarvdynQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   LarvdynQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return LarvdynQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof LarvdynQuery) {
            return $criteria;
        }
        $query = new LarvdynQuery(null, null, $modelAlias);

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
     * @return   Larvdyn|Larvdyn[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = LarvdynPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(LarvdynPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Larvdyn A model object, or null if the key is not found
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
     * @return                 Larvdyn A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `StockCode`, `SpecCode`, `Genus`, `Species`, `LarvDynRefNo`, `Ecosystem`, `Temperature`, `Duration`, `WHatch`, `WMeta`, `Growth`, `Mortality`, `OxygenCons`, `Ingestion`, `Remark`, `Refs`, `Entered`, `Dateentered`, `Modified`, `Datemodified`, `Expert`, `Datechecked`, `TS` FROM `larvdyn` WHERE `autoctr` = :p0';
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
            $obj = new Larvdyn();
            $obj->hydrate($row);
            LarvdynPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Larvdyn|Larvdyn[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Larvdyn[]|mixed the list of results, formatted by the current formatter
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
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(LarvdynPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(LarvdynPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(LarvdynPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(LarvdynPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(LarvdynPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(LarvdynPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(LarvdynPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(LarvdynPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::SPECCODE, $speccode, $comparison);
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
     * @return LarvdynQuery The current query, for fluid interface
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

        return $this->addUsingAlias(LarvdynPeer::GENUS, $genus, $comparison);
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
     * @return LarvdynQuery The current query, for fluid interface
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

        return $this->addUsingAlias(LarvdynPeer::SPECIES, $species, $comparison);
    }

    /**
     * Filter the query on the LarvDynRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByLarvdynrefno(1234); // WHERE LarvDynRefNo = 1234
     * $query->filterByLarvdynrefno(array(12, 34)); // WHERE LarvDynRefNo IN (12, 34)
     * $query->filterByLarvdynrefno(array('min' => 12)); // WHERE LarvDynRefNo >= 12
     * $query->filterByLarvdynrefno(array('max' => 12)); // WHERE LarvDynRefNo <= 12
     * </code>
     *
     * @param     mixed $larvdynrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByLarvdynrefno($larvdynrefno = null, $comparison = null)
    {
        if (is_array($larvdynrefno)) {
            $useMinMax = false;
            if (isset($larvdynrefno['min'])) {
                $this->addUsingAlias(LarvdynPeer::LARVDYNREFNO, $larvdynrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($larvdynrefno['max'])) {
                $this->addUsingAlias(LarvdynPeer::LARVDYNREFNO, $larvdynrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::LARVDYNREFNO, $larvdynrefno, $comparison);
    }

    /**
     * Filter the query on the Ecosystem column
     *
     * Example usage:
     * <code>
     * $query->filterByEcosystem('fooValue');   // WHERE Ecosystem = 'fooValue'
     * $query->filterByEcosystem('%fooValue%'); // WHERE Ecosystem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecosystem The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByEcosystem($ecosystem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecosystem)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecosystem)) {
                $ecosystem = str_replace('*', '%', $ecosystem);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::ECOSYSTEM, $ecosystem, $comparison);
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
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByTemperature($temperature = null, $comparison = null)
    {
        if (is_array($temperature)) {
            $useMinMax = false;
            if (isset($temperature['min'])) {
                $this->addUsingAlias(LarvdynPeer::TEMPERATURE, $temperature['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($temperature['max'])) {
                $this->addUsingAlias(LarvdynPeer::TEMPERATURE, $temperature['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::TEMPERATURE, $temperature, $comparison);
    }

    /**
     * Filter the query on the Duration column
     *
     * Example usage:
     * <code>
     * $query->filterByDuration(1234); // WHERE Duration = 1234
     * $query->filterByDuration(array(12, 34)); // WHERE Duration IN (12, 34)
     * $query->filterByDuration(array('min' => 12)); // WHERE Duration >= 12
     * $query->filterByDuration(array('max' => 12)); // WHERE Duration <= 12
     * </code>
     *
     * @param     mixed $duration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByDuration($duration = null, $comparison = null)
    {
        if (is_array($duration)) {
            $useMinMax = false;
            if (isset($duration['min'])) {
                $this->addUsingAlias(LarvdynPeer::DURATION, $duration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($duration['max'])) {
                $this->addUsingAlias(LarvdynPeer::DURATION, $duration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::DURATION, $duration, $comparison);
    }

    /**
     * Filter the query on the WHatch column
     *
     * Example usage:
     * <code>
     * $query->filterByWhatch(1234); // WHERE WHatch = 1234
     * $query->filterByWhatch(array(12, 34)); // WHERE WHatch IN (12, 34)
     * $query->filterByWhatch(array('min' => 12)); // WHERE WHatch >= 12
     * $query->filterByWhatch(array('max' => 12)); // WHERE WHatch <= 12
     * </code>
     *
     * @param     mixed $whatch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByWhatch($whatch = null, $comparison = null)
    {
        if (is_array($whatch)) {
            $useMinMax = false;
            if (isset($whatch['min'])) {
                $this->addUsingAlias(LarvdynPeer::WHATCH, $whatch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($whatch['max'])) {
                $this->addUsingAlias(LarvdynPeer::WHATCH, $whatch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::WHATCH, $whatch, $comparison);
    }

    /**
     * Filter the query on the WMeta column
     *
     * Example usage:
     * <code>
     * $query->filterByWmeta(1234); // WHERE WMeta = 1234
     * $query->filterByWmeta(array(12, 34)); // WHERE WMeta IN (12, 34)
     * $query->filterByWmeta(array('min' => 12)); // WHERE WMeta >= 12
     * $query->filterByWmeta(array('max' => 12)); // WHERE WMeta <= 12
     * </code>
     *
     * @param     mixed $wmeta The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByWmeta($wmeta = null, $comparison = null)
    {
        if (is_array($wmeta)) {
            $useMinMax = false;
            if (isset($wmeta['min'])) {
                $this->addUsingAlias(LarvdynPeer::WMETA, $wmeta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wmeta['max'])) {
                $this->addUsingAlias(LarvdynPeer::WMETA, $wmeta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::WMETA, $wmeta, $comparison);
    }

    /**
     * Filter the query on the Growth column
     *
     * Example usage:
     * <code>
     * $query->filterByGrowth(1234); // WHERE Growth = 1234
     * $query->filterByGrowth(array(12, 34)); // WHERE Growth IN (12, 34)
     * $query->filterByGrowth(array('min' => 12)); // WHERE Growth >= 12
     * $query->filterByGrowth(array('max' => 12)); // WHERE Growth <= 12
     * </code>
     *
     * @param     mixed $growth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByGrowth($growth = null, $comparison = null)
    {
        if (is_array($growth)) {
            $useMinMax = false;
            if (isset($growth['min'])) {
                $this->addUsingAlias(LarvdynPeer::GROWTH, $growth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($growth['max'])) {
                $this->addUsingAlias(LarvdynPeer::GROWTH, $growth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::GROWTH, $growth, $comparison);
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
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByMortality($mortality = null, $comparison = null)
    {
        if (is_array($mortality)) {
            $useMinMax = false;
            if (isset($mortality['min'])) {
                $this->addUsingAlias(LarvdynPeer::MORTALITY, $mortality['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mortality['max'])) {
                $this->addUsingAlias(LarvdynPeer::MORTALITY, $mortality['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::MORTALITY, $mortality, $comparison);
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
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByOxygencons($oxygencons = null, $comparison = null)
    {
        if (is_array($oxygencons)) {
            $useMinMax = false;
            if (isset($oxygencons['min'])) {
                $this->addUsingAlias(LarvdynPeer::OXYGENCONS, $oxygencons['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($oxygencons['max'])) {
                $this->addUsingAlias(LarvdynPeer::OXYGENCONS, $oxygencons['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::OXYGENCONS, $oxygencons, $comparison);
    }

    /**
     * Filter the query on the Ingestion column
     *
     * Example usage:
     * <code>
     * $query->filterByIngestion(1234); // WHERE Ingestion = 1234
     * $query->filterByIngestion(array(12, 34)); // WHERE Ingestion IN (12, 34)
     * $query->filterByIngestion(array('min' => 12)); // WHERE Ingestion >= 12
     * $query->filterByIngestion(array('max' => 12)); // WHERE Ingestion <= 12
     * </code>
     *
     * @param     mixed $ingestion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByIngestion($ingestion = null, $comparison = null)
    {
        if (is_array($ingestion)) {
            $useMinMax = false;
            if (isset($ingestion['min'])) {
                $this->addUsingAlias(LarvdynPeer::INGESTION, $ingestion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ingestion['max'])) {
                $this->addUsingAlias(LarvdynPeer::INGESTION, $ingestion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::INGESTION, $ingestion, $comparison);
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
     * @return LarvdynQuery The current query, for fluid interface
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

        return $this->addUsingAlias(LarvdynPeer::REMARK, $remark, $comparison);
    }

    /**
     * Filter the query on the Refs column
     *
     * Example usage:
     * <code>
     * $query->filterByRefs('fooValue');   // WHERE Refs = 'fooValue'
     * $query->filterByRefs('%fooValue%'); // WHERE Refs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $refs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByRefs($refs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($refs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $refs)) {
                $refs = str_replace('*', '%', $refs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::REFS, $refs, $comparison);
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
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(LarvdynPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(LarvdynPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::ENTERED, $entered, $comparison);
    }

    /**
     * Filter the query on the Dateentered column
     *
     * Example usage:
     * <code>
     * $query->filterByDateentered('2011-03-14'); // WHERE Dateentered = '2011-03-14'
     * $query->filterByDateentered('now'); // WHERE Dateentered = '2011-03-14'
     * $query->filterByDateentered(array('max' => 'yesterday')); // WHERE Dateentered < '2011-03-13'
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
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(LarvdynPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(LarvdynPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(LarvdynPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(LarvdynPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::MODIFIED, $modified, $comparison);
    }

    /**
     * Filter the query on the Datemodified column
     *
     * Example usage:
     * <code>
     * $query->filterByDatemodified('2011-03-14'); // WHERE Datemodified = '2011-03-14'
     * $query->filterByDatemodified('now'); // WHERE Datemodified = '2011-03-14'
     * $query->filterByDatemodified(array('max' => 'yesterday')); // WHERE Datemodified < '2011-03-13'
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
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(LarvdynPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(LarvdynPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(LarvdynPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(LarvdynPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the Datechecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('fooValue');   // WHERE Datechecked = 'fooValue'
     * $query->filterByDatechecked('%fooValue%'); // WHERE Datechecked LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datechecked The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datechecked)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datechecked)) {
                $datechecked = str_replace('*', '%', $datechecked);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(LarvdynPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(LarvdynPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(LarvdynPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Larvdyn $larvdyn Object to remove from the list of results
     *
     * @return LarvdynQuery The current query, for fluid interface
     */
    public function prune($larvdyn = null)
    {
        if ($larvdyn) {
            $this->addUsingAlias(LarvdynPeer::AUTOCTR, $larvdyn->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
