<?php


/**
 * Base class that represents a query for the 'estimate' table.
 *
 *
 *
 * @method EstimateQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method EstimateQuery orderByMaxlengthtl($order = Criteria::ASC) Order by the MaxLengthTL column
 * @method EstimateQuery orderByTlobserved($order = Criteria::ASC) Order by the TLObserved column
 * @method EstimateQuery orderByTroph($order = Criteria::ASC) Order by the Troph column
 * @method EstimateQuery orderBySetroph($order = Criteria::ASC) Order by the seTroph column
 * @method EstimateQuery orderByTrophobserved($order = Criteria::ASC) Order by the TrophObserved column
 * @method EstimateQuery orderByTrophpredicted($order = Criteria::ASC) Order by the TrophPredicted column
 * @method EstimateQuery orderBySetrophpredicted($order = Criteria::ASC) Order by the seTrophPredicted column
 * @method EstimateQuery orderByA($order = Criteria::ASC) Order by the a column
 * @method EstimateQuery orderBySdLog10a($order = Criteria::ASC) Order by the sd_log10a column
 * @method EstimateQuery orderByB($order = Criteria::ASC) Order by the b column
 * @method EstimateQuery orderBySdB($order = Criteria::ASC) Order by the sd_b column
 * @method EstimateQuery orderByMethodAb($order = Criteria::ASC) Order by the Method_ab column
 * @method EstimateQuery orderByK($order = Criteria::ASC) Order by the K column
 * @method EstimateQuery orderBySdLogk($order = Criteria::ASC) Order by the SD_logK column
 * @method EstimateQuery orderByLinf($order = Criteria::ASC) Order by the Linf column
 * @method EstimateQuery orderBySdLoglinf($order = Criteria::ASC) Order by the SD_logLinf column
 * @method EstimateQuery orderByLengthtype($order = Criteria::ASC) Order by the LengthType column
 * @method EstimateQuery orderByComdepthmin($order = Criteria::ASC) Order by the ComDepthMin column
 * @method EstimateQuery orderByComdepthmax($order = Criteria::ASC) Order by the ComDepthMax column
 * @method EstimateQuery orderByComdepminobserved($order = Criteria::ASC) Order by the ComDepMinObserved column
 * @method EstimateQuery orderByComdepmaxobserved($order = Criteria::ASC) Order by the ComDepMaxObserved column
 * @method EstimateQuery orderByDepthmin($order = Criteria::ASC) Order by the DepthMin column
 * @method EstimateQuery orderByDepthmax($order = Criteria::ASC) Order by the DepthMax column
 * @method EstimateQuery orderByDepthminestimate($order = Criteria::ASC) Order by the DepthMinEstimate column
 * @method EstimateQuery orderByDepthmaxestimate($order = Criteria::ASC) Order by the DepthMaxEstimate column
 * @method EstimateQuery orderByLastmodified($order = Criteria::ASC) Order by the LastModified column
 * @method EstimateQuery orderByMaxlengthsl($order = Criteria::ASC) Order by the MaxLengthSL column
 * @method EstimateQuery orderByKobserved($order = Criteria::ASC) Order by the KObserved column
 *
 * @method EstimateQuery groupBySpeccode() Group by the SpecCode column
 * @method EstimateQuery groupByMaxlengthtl() Group by the MaxLengthTL column
 * @method EstimateQuery groupByTlobserved() Group by the TLObserved column
 * @method EstimateQuery groupByTroph() Group by the Troph column
 * @method EstimateQuery groupBySetroph() Group by the seTroph column
 * @method EstimateQuery groupByTrophobserved() Group by the TrophObserved column
 * @method EstimateQuery groupByTrophpredicted() Group by the TrophPredicted column
 * @method EstimateQuery groupBySetrophpredicted() Group by the seTrophPredicted column
 * @method EstimateQuery groupByA() Group by the a column
 * @method EstimateQuery groupBySdLog10a() Group by the sd_log10a column
 * @method EstimateQuery groupByB() Group by the b column
 * @method EstimateQuery groupBySdB() Group by the sd_b column
 * @method EstimateQuery groupByMethodAb() Group by the Method_ab column
 * @method EstimateQuery groupByK() Group by the K column
 * @method EstimateQuery groupBySdLogk() Group by the SD_logK column
 * @method EstimateQuery groupByLinf() Group by the Linf column
 * @method EstimateQuery groupBySdLoglinf() Group by the SD_logLinf column
 * @method EstimateQuery groupByLengthtype() Group by the LengthType column
 * @method EstimateQuery groupByComdepthmin() Group by the ComDepthMin column
 * @method EstimateQuery groupByComdepthmax() Group by the ComDepthMax column
 * @method EstimateQuery groupByComdepminobserved() Group by the ComDepMinObserved column
 * @method EstimateQuery groupByComdepmaxobserved() Group by the ComDepMaxObserved column
 * @method EstimateQuery groupByDepthmin() Group by the DepthMin column
 * @method EstimateQuery groupByDepthmax() Group by the DepthMax column
 * @method EstimateQuery groupByDepthminestimate() Group by the DepthMinEstimate column
 * @method EstimateQuery groupByDepthmaxestimate() Group by the DepthMaxEstimate column
 * @method EstimateQuery groupByLastmodified() Group by the LastModified column
 * @method EstimateQuery groupByMaxlengthsl() Group by the MaxLengthSL column
 * @method EstimateQuery groupByKobserved() Group by the KObserved column
 *
 * @method EstimateQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EstimateQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EstimateQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Estimate findOne(PropelPDO $con = null) Return the first Estimate matching the query
 * @method Estimate findOneOrCreate(PropelPDO $con = null) Return the first Estimate matching the query, or a new Estimate object populated from the query conditions when no match is found
 *
 * @method Estimate findOneByMaxlengthtl(double $MaxLengthTL) Return the first Estimate filtered by the MaxLengthTL column
 * @method Estimate findOneByTlobserved(string $TLObserved) Return the first Estimate filtered by the TLObserved column
 * @method Estimate findOneByTroph(double $Troph) Return the first Estimate filtered by the Troph column
 * @method Estimate findOneBySetroph(double $seTroph) Return the first Estimate filtered by the seTroph column
 * @method Estimate findOneByTrophobserved(string $TrophObserved) Return the first Estimate filtered by the TrophObserved column
 * @method Estimate findOneByTrophpredicted(double $TrophPredicted) Return the first Estimate filtered by the TrophPredicted column
 * @method Estimate findOneBySetrophpredicted(double $seTrophPredicted) Return the first Estimate filtered by the seTrophPredicted column
 * @method Estimate findOneByA(double $a) Return the first Estimate filtered by the a column
 * @method Estimate findOneBySdLog10a(double $sd_log10a) Return the first Estimate filtered by the sd_log10a column
 * @method Estimate findOneByB(double $b) Return the first Estimate filtered by the b column
 * @method Estimate findOneBySdB(double $sd_b) Return the first Estimate filtered by the sd_b column
 * @method Estimate findOneByMethodAb(string $Method_ab) Return the first Estimate filtered by the Method_ab column
 * @method Estimate findOneByK(double $K) Return the first Estimate filtered by the K column
 * @method Estimate findOneBySdLogk(double $SD_logK) Return the first Estimate filtered by the SD_logK column
 * @method Estimate findOneByLinf(double $Linf) Return the first Estimate filtered by the Linf column
 * @method Estimate findOneBySdLoglinf(double $SD_logLinf) Return the first Estimate filtered by the SD_logLinf column
 * @method Estimate findOneByLengthtype(string $LengthType) Return the first Estimate filtered by the LengthType column
 * @method Estimate findOneByComdepthmin(int $ComDepthMin) Return the first Estimate filtered by the ComDepthMin column
 * @method Estimate findOneByComdepthmax(int $ComDepthMax) Return the first Estimate filtered by the ComDepthMax column
 * @method Estimate findOneByComdepminobserved(string $ComDepMinObserved) Return the first Estimate filtered by the ComDepMinObserved column
 * @method Estimate findOneByComdepmaxobserved(string $ComDepMaxObserved) Return the first Estimate filtered by the ComDepMaxObserved column
 * @method Estimate findOneByDepthmin(int $DepthMin) Return the first Estimate filtered by the DepthMin column
 * @method Estimate findOneByDepthmax(int $DepthMax) Return the first Estimate filtered by the DepthMax column
 * @method Estimate findOneByDepthminestimate(string $DepthMinEstimate) Return the first Estimate filtered by the DepthMinEstimate column
 * @method Estimate findOneByDepthmaxestimate(string $DepthMaxEstimate) Return the first Estimate filtered by the DepthMaxEstimate column
 * @method Estimate findOneByLastmodified(string $LastModified) Return the first Estimate filtered by the LastModified column
 * @method Estimate findOneByMaxlengthsl(double $MaxLengthSL) Return the first Estimate filtered by the MaxLengthSL column
 * @method Estimate findOneByKobserved(string $KObserved) Return the first Estimate filtered by the KObserved column
 *
 * @method array findBySpeccode(int $SpecCode) Return Estimate objects filtered by the SpecCode column
 * @method array findByMaxlengthtl(double $MaxLengthTL) Return Estimate objects filtered by the MaxLengthTL column
 * @method array findByTlobserved(string $TLObserved) Return Estimate objects filtered by the TLObserved column
 * @method array findByTroph(double $Troph) Return Estimate objects filtered by the Troph column
 * @method array findBySetroph(double $seTroph) Return Estimate objects filtered by the seTroph column
 * @method array findByTrophobserved(string $TrophObserved) Return Estimate objects filtered by the TrophObserved column
 * @method array findByTrophpredicted(double $TrophPredicted) Return Estimate objects filtered by the TrophPredicted column
 * @method array findBySetrophpredicted(double $seTrophPredicted) Return Estimate objects filtered by the seTrophPredicted column
 * @method array findByA(double $a) Return Estimate objects filtered by the a column
 * @method array findBySdLog10a(double $sd_log10a) Return Estimate objects filtered by the sd_log10a column
 * @method array findByB(double $b) Return Estimate objects filtered by the b column
 * @method array findBySdB(double $sd_b) Return Estimate objects filtered by the sd_b column
 * @method array findByMethodAb(string $Method_ab) Return Estimate objects filtered by the Method_ab column
 * @method array findByK(double $K) Return Estimate objects filtered by the K column
 * @method array findBySdLogk(double $SD_logK) Return Estimate objects filtered by the SD_logK column
 * @method array findByLinf(double $Linf) Return Estimate objects filtered by the Linf column
 * @method array findBySdLoglinf(double $SD_logLinf) Return Estimate objects filtered by the SD_logLinf column
 * @method array findByLengthtype(string $LengthType) Return Estimate objects filtered by the LengthType column
 * @method array findByComdepthmin(int $ComDepthMin) Return Estimate objects filtered by the ComDepthMin column
 * @method array findByComdepthmax(int $ComDepthMax) Return Estimate objects filtered by the ComDepthMax column
 * @method array findByComdepminobserved(string $ComDepMinObserved) Return Estimate objects filtered by the ComDepMinObserved column
 * @method array findByComdepmaxobserved(string $ComDepMaxObserved) Return Estimate objects filtered by the ComDepMaxObserved column
 * @method array findByDepthmin(int $DepthMin) Return Estimate objects filtered by the DepthMin column
 * @method array findByDepthmax(int $DepthMax) Return Estimate objects filtered by the DepthMax column
 * @method array findByDepthminestimate(string $DepthMinEstimate) Return Estimate objects filtered by the DepthMinEstimate column
 * @method array findByDepthmaxestimate(string $DepthMaxEstimate) Return Estimate objects filtered by the DepthMaxEstimate column
 * @method array findByLastmodified(string $LastModified) Return Estimate objects filtered by the LastModified column
 * @method array findByMaxlengthsl(double $MaxLengthSL) Return Estimate objects filtered by the MaxLengthSL column
 * @method array findByKobserved(string $KObserved) Return Estimate objects filtered by the KObserved column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseEstimateQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEstimateQuery object.
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
            $modelName = 'Estimate';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EstimateQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EstimateQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EstimateQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EstimateQuery) {
            return $criteria;
        }
        $query = new EstimateQuery(null, null, $modelAlias);

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
     * @return   Estimate|Estimate[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EstimatePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EstimatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Estimate A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneBySpeccode($key, $con = null)
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
     * @return                 Estimate A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `SpecCode`, `MaxLengthTL`, `TLObserved`, `Troph`, `seTroph`, `TrophObserved`, `TrophPredicted`, `seTrophPredicted`, `a`, `sd_log10a`, `b`, `sd_b`, `Method_ab`, `K`, `SD_logK`, `Linf`, `SD_logLinf`, `LengthType`, `ComDepthMin`, `ComDepthMax`, `ComDepMinObserved`, `ComDepMaxObserved`, `DepthMin`, `DepthMax`, `DepthMinEstimate`, `DepthMaxEstimate`, `LastModified`, `MaxLengthSL`, `KObserved` FROM `estimate` WHERE `SpecCode` = :p0';
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
            $obj = new Estimate();
            $obj->hydrate($row);
            EstimatePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Estimate|Estimate[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Estimate[]|mixed the list of results, formatted by the current formatter
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
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EstimatePeer::SPECCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EstimatePeer::SPECCODE, $keys, Criteria::IN);
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
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(EstimatePeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(EstimatePeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the MaxLengthTL column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxlengthtl(1234); // WHERE MaxLengthTL = 1234
     * $query->filterByMaxlengthtl(array(12, 34)); // WHERE MaxLengthTL IN (12, 34)
     * $query->filterByMaxlengthtl(array('min' => 12)); // WHERE MaxLengthTL >= 12
     * $query->filterByMaxlengthtl(array('max' => 12)); // WHERE MaxLengthTL <= 12
     * </code>
     *
     * @param     mixed $maxlengthtl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByMaxlengthtl($maxlengthtl = null, $comparison = null)
    {
        if (is_array($maxlengthtl)) {
            $useMinMax = false;
            if (isset($maxlengthtl['min'])) {
                $this->addUsingAlias(EstimatePeer::MAXLENGTHTL, $maxlengthtl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxlengthtl['max'])) {
                $this->addUsingAlias(EstimatePeer::MAXLENGTHTL, $maxlengthtl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::MAXLENGTHTL, $maxlengthtl, $comparison);
    }

    /**
     * Filter the query on the TLObserved column
     *
     * Example usage:
     * <code>
     * $query->filterByTlobserved('fooValue');   // WHERE TLObserved = 'fooValue'
     * $query->filterByTlobserved('%fooValue%'); // WHERE TLObserved LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tlobserved The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByTlobserved($tlobserved = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tlobserved)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tlobserved)) {
                $tlobserved = str_replace('*', '%', $tlobserved);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstimatePeer::TLOBSERVED, $tlobserved, $comparison);
    }

    /**
     * Filter the query on the Troph column
     *
     * Example usage:
     * <code>
     * $query->filterByTroph(1234); // WHERE Troph = 1234
     * $query->filterByTroph(array(12, 34)); // WHERE Troph IN (12, 34)
     * $query->filterByTroph(array('min' => 12)); // WHERE Troph >= 12
     * $query->filterByTroph(array('max' => 12)); // WHERE Troph <= 12
     * </code>
     *
     * @param     mixed $troph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByTroph($troph = null, $comparison = null)
    {
        if (is_array($troph)) {
            $useMinMax = false;
            if (isset($troph['min'])) {
                $this->addUsingAlias(EstimatePeer::TROPH, $troph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($troph['max'])) {
                $this->addUsingAlias(EstimatePeer::TROPH, $troph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::TROPH, $troph, $comparison);
    }

    /**
     * Filter the query on the seTroph column
     *
     * Example usage:
     * <code>
     * $query->filterBySetroph(1234); // WHERE seTroph = 1234
     * $query->filterBySetroph(array(12, 34)); // WHERE seTroph IN (12, 34)
     * $query->filterBySetroph(array('min' => 12)); // WHERE seTroph >= 12
     * $query->filterBySetroph(array('max' => 12)); // WHERE seTroph <= 12
     * </code>
     *
     * @param     mixed $setroph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterBySetroph($setroph = null, $comparison = null)
    {
        if (is_array($setroph)) {
            $useMinMax = false;
            if (isset($setroph['min'])) {
                $this->addUsingAlias(EstimatePeer::SETROPH, $setroph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($setroph['max'])) {
                $this->addUsingAlias(EstimatePeer::SETROPH, $setroph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::SETROPH, $setroph, $comparison);
    }

    /**
     * Filter the query on the TrophObserved column
     *
     * Example usage:
     * <code>
     * $query->filterByTrophobserved('fooValue');   // WHERE TrophObserved = 'fooValue'
     * $query->filterByTrophobserved('%fooValue%'); // WHERE TrophObserved LIKE '%fooValue%'
     * </code>
     *
     * @param     string $trophobserved The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByTrophobserved($trophobserved = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($trophobserved)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $trophobserved)) {
                $trophobserved = str_replace('*', '%', $trophobserved);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstimatePeer::TROPHOBSERVED, $trophobserved, $comparison);
    }

    /**
     * Filter the query on the TrophPredicted column
     *
     * Example usage:
     * <code>
     * $query->filterByTrophpredicted(1234); // WHERE TrophPredicted = 1234
     * $query->filterByTrophpredicted(array(12, 34)); // WHERE TrophPredicted IN (12, 34)
     * $query->filterByTrophpredicted(array('min' => 12)); // WHERE TrophPredicted >= 12
     * $query->filterByTrophpredicted(array('max' => 12)); // WHERE TrophPredicted <= 12
     * </code>
     *
     * @param     mixed $trophpredicted The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByTrophpredicted($trophpredicted = null, $comparison = null)
    {
        if (is_array($trophpredicted)) {
            $useMinMax = false;
            if (isset($trophpredicted['min'])) {
                $this->addUsingAlias(EstimatePeer::TROPHPREDICTED, $trophpredicted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($trophpredicted['max'])) {
                $this->addUsingAlias(EstimatePeer::TROPHPREDICTED, $trophpredicted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::TROPHPREDICTED, $trophpredicted, $comparison);
    }

    /**
     * Filter the query on the seTrophPredicted column
     *
     * Example usage:
     * <code>
     * $query->filterBySetrophpredicted(1234); // WHERE seTrophPredicted = 1234
     * $query->filterBySetrophpredicted(array(12, 34)); // WHERE seTrophPredicted IN (12, 34)
     * $query->filterBySetrophpredicted(array('min' => 12)); // WHERE seTrophPredicted >= 12
     * $query->filterBySetrophpredicted(array('max' => 12)); // WHERE seTrophPredicted <= 12
     * </code>
     *
     * @param     mixed $setrophpredicted The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterBySetrophpredicted($setrophpredicted = null, $comparison = null)
    {
        if (is_array($setrophpredicted)) {
            $useMinMax = false;
            if (isset($setrophpredicted['min'])) {
                $this->addUsingAlias(EstimatePeer::SETROPHPREDICTED, $setrophpredicted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($setrophpredicted['max'])) {
                $this->addUsingAlias(EstimatePeer::SETROPHPREDICTED, $setrophpredicted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::SETROPHPREDICTED, $setrophpredicted, $comparison);
    }

    /**
     * Filter the query on the a column
     *
     * Example usage:
     * <code>
     * $query->filterByA(1234); // WHERE a = 1234
     * $query->filterByA(array(12, 34)); // WHERE a IN (12, 34)
     * $query->filterByA(array('min' => 12)); // WHERE a >= 12
     * $query->filterByA(array('max' => 12)); // WHERE a <= 12
     * </code>
     *
     * @param     mixed $a The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByA($a = null, $comparison = null)
    {
        if (is_array($a)) {
            $useMinMax = false;
            if (isset($a['min'])) {
                $this->addUsingAlias(EstimatePeer::A, $a['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($a['max'])) {
                $this->addUsingAlias(EstimatePeer::A, $a['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::A, $a, $comparison);
    }

    /**
     * Filter the query on the sd_log10a column
     *
     * Example usage:
     * <code>
     * $query->filterBySdLog10a(1234); // WHERE sd_log10a = 1234
     * $query->filterBySdLog10a(array(12, 34)); // WHERE sd_log10a IN (12, 34)
     * $query->filterBySdLog10a(array('min' => 12)); // WHERE sd_log10a >= 12
     * $query->filterBySdLog10a(array('max' => 12)); // WHERE sd_log10a <= 12
     * </code>
     *
     * @param     mixed $sdLog10a The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterBySdLog10a($sdLog10a = null, $comparison = null)
    {
        if (is_array($sdLog10a)) {
            $useMinMax = false;
            if (isset($sdLog10a['min'])) {
                $this->addUsingAlias(EstimatePeer::SD_LOG10A, $sdLog10a['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sdLog10a['max'])) {
                $this->addUsingAlias(EstimatePeer::SD_LOG10A, $sdLog10a['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::SD_LOG10A, $sdLog10a, $comparison);
    }

    /**
     * Filter the query on the b column
     *
     * Example usage:
     * <code>
     * $query->filterByB(1234); // WHERE b = 1234
     * $query->filterByB(array(12, 34)); // WHERE b IN (12, 34)
     * $query->filterByB(array('min' => 12)); // WHERE b >= 12
     * $query->filterByB(array('max' => 12)); // WHERE b <= 12
     * </code>
     *
     * @param     mixed $b The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByB($b = null, $comparison = null)
    {
        if (is_array($b)) {
            $useMinMax = false;
            if (isset($b['min'])) {
                $this->addUsingAlias(EstimatePeer::B, $b['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($b['max'])) {
                $this->addUsingAlias(EstimatePeer::B, $b['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::B, $b, $comparison);
    }

    /**
     * Filter the query on the sd_b column
     *
     * Example usage:
     * <code>
     * $query->filterBySdB(1234); // WHERE sd_b = 1234
     * $query->filterBySdB(array(12, 34)); // WHERE sd_b IN (12, 34)
     * $query->filterBySdB(array('min' => 12)); // WHERE sd_b >= 12
     * $query->filterBySdB(array('max' => 12)); // WHERE sd_b <= 12
     * </code>
     *
     * @param     mixed $sdB The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterBySdB($sdB = null, $comparison = null)
    {
        if (is_array($sdB)) {
            $useMinMax = false;
            if (isset($sdB['min'])) {
                $this->addUsingAlias(EstimatePeer::SD_B, $sdB['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sdB['max'])) {
                $this->addUsingAlias(EstimatePeer::SD_B, $sdB['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::SD_B, $sdB, $comparison);
    }

    /**
     * Filter the query on the Method_ab column
     *
     * Example usage:
     * <code>
     * $query->filterByMethodAb('fooValue');   // WHERE Method_ab = 'fooValue'
     * $query->filterByMethodAb('%fooValue%'); // WHERE Method_ab LIKE '%fooValue%'
     * </code>
     *
     * @param     string $methodAb The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByMethodAb($methodAb = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($methodAb)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $methodAb)) {
                $methodAb = str_replace('*', '%', $methodAb);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstimatePeer::METHOD_AB, $methodAb, $comparison);
    }

    /**
     * Filter the query on the K column
     *
     * Example usage:
     * <code>
     * $query->filterByK(1234); // WHERE K = 1234
     * $query->filterByK(array(12, 34)); // WHERE K IN (12, 34)
     * $query->filterByK(array('min' => 12)); // WHERE K >= 12
     * $query->filterByK(array('max' => 12)); // WHERE K <= 12
     * </code>
     *
     * @param     mixed $k The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByK($k = null, $comparison = null)
    {
        if (is_array($k)) {
            $useMinMax = false;
            if (isset($k['min'])) {
                $this->addUsingAlias(EstimatePeer::K, $k['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($k['max'])) {
                $this->addUsingAlias(EstimatePeer::K, $k['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::K, $k, $comparison);
    }

    /**
     * Filter the query on the SD_logK column
     *
     * Example usage:
     * <code>
     * $query->filterBySdLogk(1234); // WHERE SD_logK = 1234
     * $query->filterBySdLogk(array(12, 34)); // WHERE SD_logK IN (12, 34)
     * $query->filterBySdLogk(array('min' => 12)); // WHERE SD_logK >= 12
     * $query->filterBySdLogk(array('max' => 12)); // WHERE SD_logK <= 12
     * </code>
     *
     * @param     mixed $sdLogk The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterBySdLogk($sdLogk = null, $comparison = null)
    {
        if (is_array($sdLogk)) {
            $useMinMax = false;
            if (isset($sdLogk['min'])) {
                $this->addUsingAlias(EstimatePeer::SD_LOGK, $sdLogk['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sdLogk['max'])) {
                $this->addUsingAlias(EstimatePeer::SD_LOGK, $sdLogk['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::SD_LOGK, $sdLogk, $comparison);
    }

    /**
     * Filter the query on the Linf column
     *
     * Example usage:
     * <code>
     * $query->filterByLinf(1234); // WHERE Linf = 1234
     * $query->filterByLinf(array(12, 34)); // WHERE Linf IN (12, 34)
     * $query->filterByLinf(array('min' => 12)); // WHERE Linf >= 12
     * $query->filterByLinf(array('max' => 12)); // WHERE Linf <= 12
     * </code>
     *
     * @param     mixed $linf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByLinf($linf = null, $comparison = null)
    {
        if (is_array($linf)) {
            $useMinMax = false;
            if (isset($linf['min'])) {
                $this->addUsingAlias(EstimatePeer::LINF, $linf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($linf['max'])) {
                $this->addUsingAlias(EstimatePeer::LINF, $linf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::LINF, $linf, $comparison);
    }

    /**
     * Filter the query on the SD_logLinf column
     *
     * Example usage:
     * <code>
     * $query->filterBySdLoglinf(1234); // WHERE SD_logLinf = 1234
     * $query->filterBySdLoglinf(array(12, 34)); // WHERE SD_logLinf IN (12, 34)
     * $query->filterBySdLoglinf(array('min' => 12)); // WHERE SD_logLinf >= 12
     * $query->filterBySdLoglinf(array('max' => 12)); // WHERE SD_logLinf <= 12
     * </code>
     *
     * @param     mixed $sdLoglinf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterBySdLoglinf($sdLoglinf = null, $comparison = null)
    {
        if (is_array($sdLoglinf)) {
            $useMinMax = false;
            if (isset($sdLoglinf['min'])) {
                $this->addUsingAlias(EstimatePeer::SD_LOGLINF, $sdLoglinf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sdLoglinf['max'])) {
                $this->addUsingAlias(EstimatePeer::SD_LOGLINF, $sdLoglinf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::SD_LOGLINF, $sdLoglinf, $comparison);
    }

    /**
     * Filter the query on the LengthType column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthtype('fooValue');   // WHERE LengthType = 'fooValue'
     * $query->filterByLengthtype('%fooValue%'); // WHERE LengthType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lengthtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByLengthtype($lengthtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lengthtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lengthtype)) {
                $lengthtype = str_replace('*', '%', $lengthtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstimatePeer::LENGTHTYPE, $lengthtype, $comparison);
    }

    /**
     * Filter the query on the ComDepthMin column
     *
     * Example usage:
     * <code>
     * $query->filterByComdepthmin(1234); // WHERE ComDepthMin = 1234
     * $query->filterByComdepthmin(array(12, 34)); // WHERE ComDepthMin IN (12, 34)
     * $query->filterByComdepthmin(array('min' => 12)); // WHERE ComDepthMin >= 12
     * $query->filterByComdepthmin(array('max' => 12)); // WHERE ComDepthMin <= 12
     * </code>
     *
     * @param     mixed $comdepthmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByComdepthmin($comdepthmin = null, $comparison = null)
    {
        if (is_array($comdepthmin)) {
            $useMinMax = false;
            if (isset($comdepthmin['min'])) {
                $this->addUsingAlias(EstimatePeer::COMDEPTHMIN, $comdepthmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($comdepthmin['max'])) {
                $this->addUsingAlias(EstimatePeer::COMDEPTHMIN, $comdepthmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::COMDEPTHMIN, $comdepthmin, $comparison);
    }

    /**
     * Filter the query on the ComDepthMax column
     *
     * Example usage:
     * <code>
     * $query->filterByComdepthmax(1234); // WHERE ComDepthMax = 1234
     * $query->filterByComdepthmax(array(12, 34)); // WHERE ComDepthMax IN (12, 34)
     * $query->filterByComdepthmax(array('min' => 12)); // WHERE ComDepthMax >= 12
     * $query->filterByComdepthmax(array('max' => 12)); // WHERE ComDepthMax <= 12
     * </code>
     *
     * @param     mixed $comdepthmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByComdepthmax($comdepthmax = null, $comparison = null)
    {
        if (is_array($comdepthmax)) {
            $useMinMax = false;
            if (isset($comdepthmax['min'])) {
                $this->addUsingAlias(EstimatePeer::COMDEPTHMAX, $comdepthmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($comdepthmax['max'])) {
                $this->addUsingAlias(EstimatePeer::COMDEPTHMAX, $comdepthmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::COMDEPTHMAX, $comdepthmax, $comparison);
    }

    /**
     * Filter the query on the ComDepMinObserved column
     *
     * Example usage:
     * <code>
     * $query->filterByComdepminobserved('fooValue');   // WHERE ComDepMinObserved = 'fooValue'
     * $query->filterByComdepminobserved('%fooValue%'); // WHERE ComDepMinObserved LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comdepminobserved The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByComdepminobserved($comdepminobserved = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comdepminobserved)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comdepminobserved)) {
                $comdepminobserved = str_replace('*', '%', $comdepminobserved);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstimatePeer::COMDEPMINOBSERVED, $comdepminobserved, $comparison);
    }

    /**
     * Filter the query on the ComDepMaxObserved column
     *
     * Example usage:
     * <code>
     * $query->filterByComdepmaxobserved('fooValue');   // WHERE ComDepMaxObserved = 'fooValue'
     * $query->filterByComdepmaxobserved('%fooValue%'); // WHERE ComDepMaxObserved LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comdepmaxobserved The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByComdepmaxobserved($comdepmaxobserved = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comdepmaxobserved)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comdepmaxobserved)) {
                $comdepmaxobserved = str_replace('*', '%', $comdepmaxobserved);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstimatePeer::COMDEPMAXOBSERVED, $comdepmaxobserved, $comparison);
    }

    /**
     * Filter the query on the DepthMin column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthmin(1234); // WHERE DepthMin = 1234
     * $query->filterByDepthmin(array(12, 34)); // WHERE DepthMin IN (12, 34)
     * $query->filterByDepthmin(array('min' => 12)); // WHERE DepthMin >= 12
     * $query->filterByDepthmin(array('max' => 12)); // WHERE DepthMin <= 12
     * </code>
     *
     * @param     mixed $depthmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByDepthmin($depthmin = null, $comparison = null)
    {
        if (is_array($depthmin)) {
            $useMinMax = false;
            if (isset($depthmin['min'])) {
                $this->addUsingAlias(EstimatePeer::DEPTHMIN, $depthmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthmin['max'])) {
                $this->addUsingAlias(EstimatePeer::DEPTHMIN, $depthmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::DEPTHMIN, $depthmin, $comparison);
    }

    /**
     * Filter the query on the DepthMax column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthmax(1234); // WHERE DepthMax = 1234
     * $query->filterByDepthmax(array(12, 34)); // WHERE DepthMax IN (12, 34)
     * $query->filterByDepthmax(array('min' => 12)); // WHERE DepthMax >= 12
     * $query->filterByDepthmax(array('max' => 12)); // WHERE DepthMax <= 12
     * </code>
     *
     * @param     mixed $depthmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByDepthmax($depthmax = null, $comparison = null)
    {
        if (is_array($depthmax)) {
            $useMinMax = false;
            if (isset($depthmax['min'])) {
                $this->addUsingAlias(EstimatePeer::DEPTHMAX, $depthmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depthmax['max'])) {
                $this->addUsingAlias(EstimatePeer::DEPTHMAX, $depthmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::DEPTHMAX, $depthmax, $comparison);
    }

    /**
     * Filter the query on the DepthMinEstimate column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthminestimate('fooValue');   // WHERE DepthMinEstimate = 'fooValue'
     * $query->filterByDepthminestimate('%fooValue%'); // WHERE DepthMinEstimate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depthminestimate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByDepthminestimate($depthminestimate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depthminestimate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depthminestimate)) {
                $depthminestimate = str_replace('*', '%', $depthminestimate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstimatePeer::DEPTHMINESTIMATE, $depthminestimate, $comparison);
    }

    /**
     * Filter the query on the DepthMaxEstimate column
     *
     * Example usage:
     * <code>
     * $query->filterByDepthmaxestimate('fooValue');   // WHERE DepthMaxEstimate = 'fooValue'
     * $query->filterByDepthmaxestimate('%fooValue%'); // WHERE DepthMaxEstimate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depthmaxestimate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByDepthmaxestimate($depthmaxestimate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depthmaxestimate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depthmaxestimate)) {
                $depthmaxestimate = str_replace('*', '%', $depthmaxestimate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstimatePeer::DEPTHMAXESTIMATE, $depthmaxestimate, $comparison);
    }

    /**
     * Filter the query on the LastModified column
     *
     * Example usage:
     * <code>
     * $query->filterByLastmodified('2011-03-14'); // WHERE LastModified = '2011-03-14'
     * $query->filterByLastmodified('now'); // WHERE LastModified = '2011-03-14'
     * $query->filterByLastmodified(array('max' => 'yesterday')); // WHERE LastModified < '2011-03-13'
     * </code>
     *
     * @param     mixed $lastmodified The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByLastmodified($lastmodified = null, $comparison = null)
    {
        if (is_array($lastmodified)) {
            $useMinMax = false;
            if (isset($lastmodified['min'])) {
                $this->addUsingAlias(EstimatePeer::LASTMODIFIED, $lastmodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastmodified['max'])) {
                $this->addUsingAlias(EstimatePeer::LASTMODIFIED, $lastmodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::LASTMODIFIED, $lastmodified, $comparison);
    }

    /**
     * Filter the query on the MaxLengthSL column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxlengthsl(1234); // WHERE MaxLengthSL = 1234
     * $query->filterByMaxlengthsl(array(12, 34)); // WHERE MaxLengthSL IN (12, 34)
     * $query->filterByMaxlengthsl(array('min' => 12)); // WHERE MaxLengthSL >= 12
     * $query->filterByMaxlengthsl(array('max' => 12)); // WHERE MaxLengthSL <= 12
     * </code>
     *
     * @param     mixed $maxlengthsl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByMaxlengthsl($maxlengthsl = null, $comparison = null)
    {
        if (is_array($maxlengthsl)) {
            $useMinMax = false;
            if (isset($maxlengthsl['min'])) {
                $this->addUsingAlias(EstimatePeer::MAXLENGTHSL, $maxlengthsl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxlengthsl['max'])) {
                $this->addUsingAlias(EstimatePeer::MAXLENGTHSL, $maxlengthsl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EstimatePeer::MAXLENGTHSL, $maxlengthsl, $comparison);
    }

    /**
     * Filter the query on the KObserved column
     *
     * Example usage:
     * <code>
     * $query->filterByKobserved('fooValue');   // WHERE KObserved = 'fooValue'
     * $query->filterByKobserved('%fooValue%'); // WHERE KObserved LIKE '%fooValue%'
     * </code>
     *
     * @param     string $kobserved The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function filterByKobserved($kobserved = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($kobserved)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $kobserved)) {
                $kobserved = str_replace('*', '%', $kobserved);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EstimatePeer::KOBSERVED, $kobserved, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Estimate $estimate Object to remove from the list of results
     *
     * @return EstimateQuery The current query, for fluid interface
     */
    public function prune($estimate = null)
    {
        if ($estimate) {
            $this->addUsingAlias(EstimatePeer::SPECCODE, $estimate->getSpeccode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
