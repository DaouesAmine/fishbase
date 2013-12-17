<?php


/**
 * Base class that represents a query for the 'reproduc' table.
 *
 *
 *
 * @method ReproducQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method ReproducQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method ReproducQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method ReproducQuery orderByReproducrefno($order = Criteria::ASC) Order by the ReproducRefNo column
 * @method ReproducQuery orderByRepromode($order = Criteria::ASC) Order by the ReproMode column
 * @method ReproducQuery orderByFertilization($order = Criteria::ASC) Order by the Fertilization column
 * @method ReproducQuery orderByMatingsystem($order = Criteria::ASC) Order by the MatingSystem column
 * @method ReproducQuery orderByMatingrefno($order = Criteria::ASC) Order by the MatingRefNo column
 * @method ReproducQuery orderByMatingquality($order = Criteria::ASC) Order by the MatingQuality column
 * @method ReproducQuery orderBySpawning($order = Criteria::ASC) Order by the Spawning column
 * @method ReproducQuery orderByBatchspawner($order = Criteria::ASC) Order by the BatchSpawner column
 * @method ReproducQuery orderBySpawnmodref($order = Criteria::ASC) Order by the SpawnModRef column
 * @method ReproducQuery orderByRepguild1($order = Criteria::ASC) Order by the RepGuild1 column
 * @method ReproducQuery orderByRepguild2($order = Criteria::ASC) Order by the RepGuild2 column
 * @method ReproducQuery orderByParentalcare($order = Criteria::ASC) Order by the ParentalCare column
 * @method ReproducQuery orderByParentalcareq($order = Criteria::ASC) Order by the ParentalCareQ column
 * @method ReproducQuery orderByParentalcareref($order = Criteria::ASC) Order by the ParentalCareRef column
 * @method ReproducQuery orderByRepaquarium($order = Criteria::ASC) Order by the RepAquarium column
 * @method ReproducQuery orderByRepaquaref($order = Criteria::ASC) Order by the RepAquaRef column
 * @method ReproducQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method ReproducQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method ReproducQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method ReproducQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method ReproducQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method ReproducQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method ReproducQuery orderByAddinfos($order = Criteria::ASC) Order by the AddInfos column
 * @method ReproducQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method ReproducQuery groupByAutoctr() Group by the autoctr column
 * @method ReproducQuery groupByStockcode() Group by the StockCode column
 * @method ReproducQuery groupBySpeccode() Group by the SpecCode column
 * @method ReproducQuery groupByReproducrefno() Group by the ReproducRefNo column
 * @method ReproducQuery groupByRepromode() Group by the ReproMode column
 * @method ReproducQuery groupByFertilization() Group by the Fertilization column
 * @method ReproducQuery groupByMatingsystem() Group by the MatingSystem column
 * @method ReproducQuery groupByMatingrefno() Group by the MatingRefNo column
 * @method ReproducQuery groupByMatingquality() Group by the MatingQuality column
 * @method ReproducQuery groupBySpawning() Group by the Spawning column
 * @method ReproducQuery groupByBatchspawner() Group by the BatchSpawner column
 * @method ReproducQuery groupBySpawnmodref() Group by the SpawnModRef column
 * @method ReproducQuery groupByRepguild1() Group by the RepGuild1 column
 * @method ReproducQuery groupByRepguild2() Group by the RepGuild2 column
 * @method ReproducQuery groupByParentalcare() Group by the ParentalCare column
 * @method ReproducQuery groupByParentalcareq() Group by the ParentalCareQ column
 * @method ReproducQuery groupByParentalcareref() Group by the ParentalCareRef column
 * @method ReproducQuery groupByRepaquarium() Group by the RepAquarium column
 * @method ReproducQuery groupByRepaquaref() Group by the RepAquaRef column
 * @method ReproducQuery groupByEntered() Group by the Entered column
 * @method ReproducQuery groupByDateentered() Group by the DateEntered column
 * @method ReproducQuery groupByModified() Group by the Modified column
 * @method ReproducQuery groupByDatemodified() Group by the DateModified column
 * @method ReproducQuery groupByExpert() Group by the Expert column
 * @method ReproducQuery groupByDatechecked() Group by the DateChecked column
 * @method ReproducQuery groupByAddinfos() Group by the AddInfos column
 * @method ReproducQuery groupByTs() Group by the TS column
 *
 * @method ReproducQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ReproducQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ReproducQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Reproduc findOne(PropelPDO $con = null) Return the first Reproduc matching the query
 * @method Reproduc findOneOrCreate(PropelPDO $con = null) Return the first Reproduc matching the query, or a new Reproduc object populated from the query conditions when no match is found
 *
 * @method Reproduc findOneByAutoctr(int $autoctr) Return the first Reproduc filtered by the autoctr column
 * @method Reproduc findOneBySpeccode(int $SpecCode) Return the first Reproduc filtered by the SpecCode column
 * @method Reproduc findOneByReproducrefno(int $ReproducRefNo) Return the first Reproduc filtered by the ReproducRefNo column
 * @method Reproduc findOneByRepromode(string $ReproMode) Return the first Reproduc filtered by the ReproMode column
 * @method Reproduc findOneByFertilization(string $Fertilization) Return the first Reproduc filtered by the Fertilization column
 * @method Reproduc findOneByMatingsystem(string $MatingSystem) Return the first Reproduc filtered by the MatingSystem column
 * @method Reproduc findOneByMatingrefno(int $MatingRefNo) Return the first Reproduc filtered by the MatingRefNo column
 * @method Reproduc findOneByMatingquality(string $MatingQuality) Return the first Reproduc filtered by the MatingQuality column
 * @method Reproduc findOneBySpawning(string $Spawning) Return the first Reproduc filtered by the Spawning column
 * @method Reproduc findOneByBatchspawner(int $BatchSpawner) Return the first Reproduc filtered by the BatchSpawner column
 * @method Reproduc findOneBySpawnmodref(int $SpawnModRef) Return the first Reproduc filtered by the SpawnModRef column
 * @method Reproduc findOneByRepguild1(string $RepGuild1) Return the first Reproduc filtered by the RepGuild1 column
 * @method Reproduc findOneByRepguild2(string $RepGuild2) Return the first Reproduc filtered by the RepGuild2 column
 * @method Reproduc findOneByParentalcare(string $ParentalCare) Return the first Reproduc filtered by the ParentalCare column
 * @method Reproduc findOneByParentalcareq(string $ParentalCareQ) Return the first Reproduc filtered by the ParentalCareQ column
 * @method Reproduc findOneByParentalcareref(int $ParentalCareRef) Return the first Reproduc filtered by the ParentalCareRef column
 * @method Reproduc findOneByRepaquarium(string $RepAquarium) Return the first Reproduc filtered by the RepAquarium column
 * @method Reproduc findOneByRepaquaref(int $RepAquaRef) Return the first Reproduc filtered by the RepAquaRef column
 * @method Reproduc findOneByEntered(int $Entered) Return the first Reproduc filtered by the Entered column
 * @method Reproduc findOneByDateentered(string $DateEntered) Return the first Reproduc filtered by the DateEntered column
 * @method Reproduc findOneByModified(int $Modified) Return the first Reproduc filtered by the Modified column
 * @method Reproduc findOneByDatemodified(string $DateModified) Return the first Reproduc filtered by the DateModified column
 * @method Reproduc findOneByExpert(int $Expert) Return the first Reproduc filtered by the Expert column
 * @method Reproduc findOneByDatechecked(string $DateChecked) Return the first Reproduc filtered by the DateChecked column
 * @method Reproduc findOneByAddinfos(string $AddInfos) Return the first Reproduc filtered by the AddInfos column
 * @method Reproduc findOneByTs(string $TS) Return the first Reproduc filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Reproduc objects filtered by the autoctr column
 * @method array findByStockcode(int $StockCode) Return Reproduc objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Reproduc objects filtered by the SpecCode column
 * @method array findByReproducrefno(int $ReproducRefNo) Return Reproduc objects filtered by the ReproducRefNo column
 * @method array findByRepromode(string $ReproMode) Return Reproduc objects filtered by the ReproMode column
 * @method array findByFertilization(string $Fertilization) Return Reproduc objects filtered by the Fertilization column
 * @method array findByMatingsystem(string $MatingSystem) Return Reproduc objects filtered by the MatingSystem column
 * @method array findByMatingrefno(int $MatingRefNo) Return Reproduc objects filtered by the MatingRefNo column
 * @method array findByMatingquality(string $MatingQuality) Return Reproduc objects filtered by the MatingQuality column
 * @method array findBySpawning(string $Spawning) Return Reproduc objects filtered by the Spawning column
 * @method array findByBatchspawner(int $BatchSpawner) Return Reproduc objects filtered by the BatchSpawner column
 * @method array findBySpawnmodref(int $SpawnModRef) Return Reproduc objects filtered by the SpawnModRef column
 * @method array findByRepguild1(string $RepGuild1) Return Reproduc objects filtered by the RepGuild1 column
 * @method array findByRepguild2(string $RepGuild2) Return Reproduc objects filtered by the RepGuild2 column
 * @method array findByParentalcare(string $ParentalCare) Return Reproduc objects filtered by the ParentalCare column
 * @method array findByParentalcareq(string $ParentalCareQ) Return Reproduc objects filtered by the ParentalCareQ column
 * @method array findByParentalcareref(int $ParentalCareRef) Return Reproduc objects filtered by the ParentalCareRef column
 * @method array findByRepaquarium(string $RepAquarium) Return Reproduc objects filtered by the RepAquarium column
 * @method array findByRepaquaref(int $RepAquaRef) Return Reproduc objects filtered by the RepAquaRef column
 * @method array findByEntered(int $Entered) Return Reproduc objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Reproduc objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Reproduc objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Reproduc objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Reproduc objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Reproduc objects filtered by the DateChecked column
 * @method array findByAddinfos(string $AddInfos) Return Reproduc objects filtered by the AddInfos column
 * @method array findByTs(string $TS) Return Reproduc objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseReproducQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseReproducQuery object.
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
            $modelName = 'Reproduc';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ReproducQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ReproducQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ReproducQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ReproducQuery) {
            return $criteria;
        }
        $query = new ReproducQuery(null, null, $modelAlias);

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
     * @return   Reproduc|Reproduc[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ReproducPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ReproducPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Reproduc A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByStockcode($key, $con = null)
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
     * @return                 Reproduc A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `StockCode`, `SpecCode`, `ReproducRefNo`, `ReproMode`, `Fertilization`, `MatingSystem`, `MatingRefNo`, `MatingQuality`, `Spawning`, `BatchSpawner`, `SpawnModRef`, `RepGuild1`, `RepGuild2`, `ParentalCare`, `ParentalCareQ`, `ParentalCareRef`, `RepAquarium`, `RepAquaRef`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `AddInfos`, `TS` FROM `reproduc` WHERE `StockCode` = :p0';
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
            $obj = new Reproduc();
            $obj->hydrate($row);
            ReproducPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Reproduc|Reproduc[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Reproduc[]|mixed the list of results, formatted by the current formatter
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
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ReproducPeer::STOCKCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ReproducPeer::STOCKCODE, $keys, Criteria::IN);
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
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(ReproducPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(ReproducPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(ReproducPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(ReproducPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(ReproducPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(ReproducPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the ReproducRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByReproducrefno(1234); // WHERE ReproducRefNo = 1234
     * $query->filterByReproducrefno(array(12, 34)); // WHERE ReproducRefNo IN (12, 34)
     * $query->filterByReproducrefno(array('min' => 12)); // WHERE ReproducRefNo >= 12
     * $query->filterByReproducrefno(array('max' => 12)); // WHERE ReproducRefNo <= 12
     * </code>
     *
     * @param     mixed $reproducrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByReproducrefno($reproducrefno = null, $comparison = null)
    {
        if (is_array($reproducrefno)) {
            $useMinMax = false;
            if (isset($reproducrefno['min'])) {
                $this->addUsingAlias(ReproducPeer::REPRODUCREFNO, $reproducrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reproducrefno['max'])) {
                $this->addUsingAlias(ReproducPeer::REPRODUCREFNO, $reproducrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::REPRODUCREFNO, $reproducrefno, $comparison);
    }

    /**
     * Filter the query on the ReproMode column
     *
     * Example usage:
     * <code>
     * $query->filterByRepromode('fooValue');   // WHERE ReproMode = 'fooValue'
     * $query->filterByRepromode('%fooValue%'); // WHERE ReproMode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repromode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByRepromode($repromode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repromode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repromode)) {
                $repromode = str_replace('*', '%', $repromode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReproducPeer::REPROMODE, $repromode, $comparison);
    }

    /**
     * Filter the query on the Fertilization column
     *
     * Example usage:
     * <code>
     * $query->filterByFertilization('fooValue');   // WHERE Fertilization = 'fooValue'
     * $query->filterByFertilization('%fooValue%'); // WHERE Fertilization LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fertilization The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByFertilization($fertilization = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fertilization)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fertilization)) {
                $fertilization = str_replace('*', '%', $fertilization);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReproducPeer::FERTILIZATION, $fertilization, $comparison);
    }

    /**
     * Filter the query on the MatingSystem column
     *
     * Example usage:
     * <code>
     * $query->filterByMatingsystem('fooValue');   // WHERE MatingSystem = 'fooValue'
     * $query->filterByMatingsystem('%fooValue%'); // WHERE MatingSystem LIKE '%fooValue%'
     * </code>
     *
     * @param     string $matingsystem The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByMatingsystem($matingsystem = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($matingsystem)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $matingsystem)) {
                $matingsystem = str_replace('*', '%', $matingsystem);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReproducPeer::MATINGSYSTEM, $matingsystem, $comparison);
    }

    /**
     * Filter the query on the MatingRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByMatingrefno(1234); // WHERE MatingRefNo = 1234
     * $query->filterByMatingrefno(array(12, 34)); // WHERE MatingRefNo IN (12, 34)
     * $query->filterByMatingrefno(array('min' => 12)); // WHERE MatingRefNo >= 12
     * $query->filterByMatingrefno(array('max' => 12)); // WHERE MatingRefNo <= 12
     * </code>
     *
     * @param     mixed $matingrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByMatingrefno($matingrefno = null, $comparison = null)
    {
        if (is_array($matingrefno)) {
            $useMinMax = false;
            if (isset($matingrefno['min'])) {
                $this->addUsingAlias(ReproducPeer::MATINGREFNO, $matingrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($matingrefno['max'])) {
                $this->addUsingAlias(ReproducPeer::MATINGREFNO, $matingrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::MATINGREFNO, $matingrefno, $comparison);
    }

    /**
     * Filter the query on the MatingQuality column
     *
     * Example usage:
     * <code>
     * $query->filterByMatingquality('fooValue');   // WHERE MatingQuality = 'fooValue'
     * $query->filterByMatingquality('%fooValue%'); // WHERE MatingQuality LIKE '%fooValue%'
     * </code>
     *
     * @param     string $matingquality The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByMatingquality($matingquality = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($matingquality)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $matingquality)) {
                $matingquality = str_replace('*', '%', $matingquality);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReproducPeer::MATINGQUALITY, $matingquality, $comparison);
    }

    /**
     * Filter the query on the Spawning column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawning('fooValue');   // WHERE Spawning = 'fooValue'
     * $query->filterBySpawning('%fooValue%'); // WHERE Spawning LIKE '%fooValue%'
     * </code>
     *
     * @param     string $spawning The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterBySpawning($spawning = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($spawning)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $spawning)) {
                $spawning = str_replace('*', '%', $spawning);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReproducPeer::SPAWNING, $spawning, $comparison);
    }

    /**
     * Filter the query on the BatchSpawner column
     *
     * Example usage:
     * <code>
     * $query->filterByBatchspawner(1234); // WHERE BatchSpawner = 1234
     * $query->filterByBatchspawner(array(12, 34)); // WHERE BatchSpawner IN (12, 34)
     * $query->filterByBatchspawner(array('min' => 12)); // WHERE BatchSpawner >= 12
     * $query->filterByBatchspawner(array('max' => 12)); // WHERE BatchSpawner <= 12
     * </code>
     *
     * @param     mixed $batchspawner The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByBatchspawner($batchspawner = null, $comparison = null)
    {
        if (is_array($batchspawner)) {
            $useMinMax = false;
            if (isset($batchspawner['min'])) {
                $this->addUsingAlias(ReproducPeer::BATCHSPAWNER, $batchspawner['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($batchspawner['max'])) {
                $this->addUsingAlias(ReproducPeer::BATCHSPAWNER, $batchspawner['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::BATCHSPAWNER, $batchspawner, $comparison);
    }

    /**
     * Filter the query on the SpawnModRef column
     *
     * Example usage:
     * <code>
     * $query->filterBySpawnmodref(1234); // WHERE SpawnModRef = 1234
     * $query->filterBySpawnmodref(array(12, 34)); // WHERE SpawnModRef IN (12, 34)
     * $query->filterBySpawnmodref(array('min' => 12)); // WHERE SpawnModRef >= 12
     * $query->filterBySpawnmodref(array('max' => 12)); // WHERE SpawnModRef <= 12
     * </code>
     *
     * @param     mixed $spawnmodref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterBySpawnmodref($spawnmodref = null, $comparison = null)
    {
        if (is_array($spawnmodref)) {
            $useMinMax = false;
            if (isset($spawnmodref['min'])) {
                $this->addUsingAlias(ReproducPeer::SPAWNMODREF, $spawnmodref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($spawnmodref['max'])) {
                $this->addUsingAlias(ReproducPeer::SPAWNMODREF, $spawnmodref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::SPAWNMODREF, $spawnmodref, $comparison);
    }

    /**
     * Filter the query on the RepGuild1 column
     *
     * Example usage:
     * <code>
     * $query->filterByRepguild1('fooValue');   // WHERE RepGuild1 = 'fooValue'
     * $query->filterByRepguild1('%fooValue%'); // WHERE RepGuild1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repguild1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByRepguild1($repguild1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repguild1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repguild1)) {
                $repguild1 = str_replace('*', '%', $repguild1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReproducPeer::REPGUILD1, $repguild1, $comparison);
    }

    /**
     * Filter the query on the RepGuild2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRepguild2('fooValue');   // WHERE RepGuild2 = 'fooValue'
     * $query->filterByRepguild2('%fooValue%'); // WHERE RepGuild2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repguild2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByRepguild2($repguild2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repguild2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repguild2)) {
                $repguild2 = str_replace('*', '%', $repguild2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReproducPeer::REPGUILD2, $repguild2, $comparison);
    }

    /**
     * Filter the query on the ParentalCare column
     *
     * Example usage:
     * <code>
     * $query->filterByParentalcare('fooValue');   // WHERE ParentalCare = 'fooValue'
     * $query->filterByParentalcare('%fooValue%'); // WHERE ParentalCare LIKE '%fooValue%'
     * </code>
     *
     * @param     string $parentalcare The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByParentalcare($parentalcare = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($parentalcare)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $parentalcare)) {
                $parentalcare = str_replace('*', '%', $parentalcare);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReproducPeer::PARENTALCARE, $parentalcare, $comparison);
    }

    /**
     * Filter the query on the ParentalCareQ column
     *
     * Example usage:
     * <code>
     * $query->filterByParentalcareq('fooValue');   // WHERE ParentalCareQ = 'fooValue'
     * $query->filterByParentalcareq('%fooValue%'); // WHERE ParentalCareQ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $parentalcareq The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByParentalcareq($parentalcareq = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($parentalcareq)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $parentalcareq)) {
                $parentalcareq = str_replace('*', '%', $parentalcareq);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReproducPeer::PARENTALCAREQ, $parentalcareq, $comparison);
    }

    /**
     * Filter the query on the ParentalCareRef column
     *
     * Example usage:
     * <code>
     * $query->filterByParentalcareref(1234); // WHERE ParentalCareRef = 1234
     * $query->filterByParentalcareref(array(12, 34)); // WHERE ParentalCareRef IN (12, 34)
     * $query->filterByParentalcareref(array('min' => 12)); // WHERE ParentalCareRef >= 12
     * $query->filterByParentalcareref(array('max' => 12)); // WHERE ParentalCareRef <= 12
     * </code>
     *
     * @param     mixed $parentalcareref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByParentalcareref($parentalcareref = null, $comparison = null)
    {
        if (is_array($parentalcareref)) {
            $useMinMax = false;
            if (isset($parentalcareref['min'])) {
                $this->addUsingAlias(ReproducPeer::PARENTALCAREREF, $parentalcareref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parentalcareref['max'])) {
                $this->addUsingAlias(ReproducPeer::PARENTALCAREREF, $parentalcareref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::PARENTALCAREREF, $parentalcareref, $comparison);
    }

    /**
     * Filter the query on the RepAquarium column
     *
     * Example usage:
     * <code>
     * $query->filterByRepaquarium('fooValue');   // WHERE RepAquarium = 'fooValue'
     * $query->filterByRepaquarium('%fooValue%'); // WHERE RepAquarium LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repaquarium The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByRepaquarium($repaquarium = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repaquarium)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repaquarium)) {
                $repaquarium = str_replace('*', '%', $repaquarium);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReproducPeer::REPAQUARIUM, $repaquarium, $comparison);
    }

    /**
     * Filter the query on the RepAquaRef column
     *
     * Example usage:
     * <code>
     * $query->filterByRepaquaref(1234); // WHERE RepAquaRef = 1234
     * $query->filterByRepaquaref(array(12, 34)); // WHERE RepAquaRef IN (12, 34)
     * $query->filterByRepaquaref(array('min' => 12)); // WHERE RepAquaRef >= 12
     * $query->filterByRepaquaref(array('max' => 12)); // WHERE RepAquaRef <= 12
     * </code>
     *
     * @param     mixed $repaquaref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByRepaquaref($repaquaref = null, $comparison = null)
    {
        if (is_array($repaquaref)) {
            $useMinMax = false;
            if (isset($repaquaref['min'])) {
                $this->addUsingAlias(ReproducPeer::REPAQUAREF, $repaquaref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($repaquaref['max'])) {
                $this->addUsingAlias(ReproducPeer::REPAQUAREF, $repaquaref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::REPAQUAREF, $repaquaref, $comparison);
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
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(ReproducPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(ReproducPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::ENTERED, $entered, $comparison);
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
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(ReproducPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(ReproducPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(ReproducPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(ReproducPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::MODIFIED, $modified, $comparison);
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
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(ReproducPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(ReproducPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(ReproducPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(ReproducPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::EXPERT, $expert, $comparison);
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
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(ReproducPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(ReproducPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the AddInfos column
     *
     * Example usage:
     * <code>
     * $query->filterByAddinfos('fooValue');   // WHERE AddInfos = 'fooValue'
     * $query->filterByAddinfos('%fooValue%'); // WHERE AddInfos LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addinfos The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByAddinfos($addinfos = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addinfos)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addinfos)) {
                $addinfos = str_replace('*', '%', $addinfos);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReproducPeer::ADDINFOS, $addinfos, $comparison);
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
     * @return ReproducQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(ReproducPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(ReproducPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReproducPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Reproduc $reproduc Object to remove from the list of results
     *
     * @return ReproducQuery The current query, for fluid interface
     */
    public function prune($reproduc = null)
    {
        if ($reproduc) {
            $this->addUsingAlias(ReproducPeer::STOCKCODE, $reproduc->getStockcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
