<?php


/**
 * Base class that represents a query for the 'food' table.
 *
 *
 *
 * @method FoodQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method FoodQuery orderByFoodi($order = Criteria::ASC) Order by the FOODI column
 * @method FoodQuery orderByFoodii($order = Criteria::ASC) Order by the FOODII column
 * @method FoodQuery orderByFoodiii($order = Criteria::ASC) Order by the FOODIII column
 * @method FoodQuery orderByGenfood($order = Criteria::ASC) Order by the GenFood column
 * @method FoodQuery orderBySpecfood($order = Criteria::ASC) Order by the SpecFood column
 * @method FoodQuery orderByComname($order = Criteria::ASC) Order by the ComName column
 * @method FoodQuery orderByStage($order = Criteria::ASC) Order by the Stage column
 * @method FoodQuery orderByRank($order = Criteria::ASC) Order by the Rank column
 * @method FoodQuery orderByFoodirank($order = Criteria::ASC) Order by the FoodIRank column
 * @method FoodQuery orderByFoodiirank($order = Criteria::ASC) Order by the FoodIIRank column
 * @method FoodQuery orderByFoodiiirank($order = Criteria::ASC) Order by the FoodIIIRank column
 * @method FoodQuery orderByTroph($order = Criteria::ASC) Order by the Troph column
 * @method FoodQuery orderByTrophse($order = Criteria::ASC) Order by the TrophSe column
 * @method FoodQuery orderByRefno($order = Criteria::ASC) Order by the Refno column
 * @method FoodQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method FoodQuery orderByMaxlength($order = Criteria::ASC) Order by the MaxLength column
 * @method FoodQuery orderByMinlength($order = Criteria::ASC) Order by the MinLength column
 * @method FoodQuery orderByFoodflag($order = Criteria::ASC) Order by the FoodFlag column
 * @method FoodQuery orderByPredflag($order = Criteria::ASC) Order by the PredFlag column
 * @method FoodQuery orderByNewtroph($order = Criteria::ASC) Order by the NewTroph column
 * @method FoodQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FoodQuery groupByAutoctr() Group by the AutoCtr column
 * @method FoodQuery groupByFoodi() Group by the FOODI column
 * @method FoodQuery groupByFoodii() Group by the FOODII column
 * @method FoodQuery groupByFoodiii() Group by the FOODIII column
 * @method FoodQuery groupByGenfood() Group by the GenFood column
 * @method FoodQuery groupBySpecfood() Group by the SpecFood column
 * @method FoodQuery groupByComname() Group by the ComName column
 * @method FoodQuery groupByStage() Group by the Stage column
 * @method FoodQuery groupByRank() Group by the Rank column
 * @method FoodQuery groupByFoodirank() Group by the FoodIRank column
 * @method FoodQuery groupByFoodiirank() Group by the FoodIIRank column
 * @method FoodQuery groupByFoodiiirank() Group by the FoodIIIRank column
 * @method FoodQuery groupByTroph() Group by the Troph column
 * @method FoodQuery groupByTrophse() Group by the TrophSe column
 * @method FoodQuery groupByRefno() Group by the Refno column
 * @method FoodQuery groupByRemark() Group by the Remark column
 * @method FoodQuery groupByMaxlength() Group by the MaxLength column
 * @method FoodQuery groupByMinlength() Group by the MinLength column
 * @method FoodQuery groupByFoodflag() Group by the FoodFlag column
 * @method FoodQuery groupByPredflag() Group by the PredFlag column
 * @method FoodQuery groupByNewtroph() Group by the NewTroph column
 * @method FoodQuery groupByTs() Group by the TS column
 *
 * @method FoodQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FoodQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FoodQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Food findOne(PropelPDO $con = null) Return the first Food matching the query
 * @method Food findOneOrCreate(PropelPDO $con = null) Return the first Food matching the query, or a new Food object populated from the query conditions when no match is found
 *
 * @method Food findOneByFoodi(string $FOODI) Return the first Food filtered by the FOODI column
 * @method Food findOneByFoodii(string $FOODII) Return the first Food filtered by the FOODII column
 * @method Food findOneByFoodiii(string $FOODIII) Return the first Food filtered by the FOODIII column
 * @method Food findOneByGenfood(string $GenFood) Return the first Food filtered by the GenFood column
 * @method Food findOneBySpecfood(string $SpecFood) Return the first Food filtered by the SpecFood column
 * @method Food findOneByComname(string $ComName) Return the first Food filtered by the ComName column
 * @method Food findOneByStage(string $Stage) Return the first Food filtered by the Stage column
 * @method Food findOneByRank(double $Rank) Return the first Food filtered by the Rank column
 * @method Food findOneByFoodirank(double $FoodIRank) Return the first Food filtered by the FoodIRank column
 * @method Food findOneByFoodiirank(double $FoodIIRank) Return the first Food filtered by the FoodIIRank column
 * @method Food findOneByFoodiiirank(double $FoodIIIRank) Return the first Food filtered by the FoodIIIRank column
 * @method Food findOneByTroph(double $Troph) Return the first Food filtered by the Troph column
 * @method Food findOneByTrophse(double $TrophSe) Return the first Food filtered by the TrophSe column
 * @method Food findOneByRefno(int $Refno) Return the first Food filtered by the Refno column
 * @method Food findOneByRemark(string $Remark) Return the first Food filtered by the Remark column
 * @method Food findOneByMaxlength(double $MaxLength) Return the first Food filtered by the MaxLength column
 * @method Food findOneByMinlength(double $MinLength) Return the first Food filtered by the MinLength column
 * @method Food findOneByFoodflag(int $FoodFlag) Return the first Food filtered by the FoodFlag column
 * @method Food findOneByPredflag(int $PredFlag) Return the first Food filtered by the PredFlag column
 * @method Food findOneByNewtroph(int $NewTroph) Return the first Food filtered by the NewTroph column
 * @method Food findOneByTs(string $TS) Return the first Food filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Food objects filtered by the AutoCtr column
 * @method array findByFoodi(string $FOODI) Return Food objects filtered by the FOODI column
 * @method array findByFoodii(string $FOODII) Return Food objects filtered by the FOODII column
 * @method array findByFoodiii(string $FOODIII) Return Food objects filtered by the FOODIII column
 * @method array findByGenfood(string $GenFood) Return Food objects filtered by the GenFood column
 * @method array findBySpecfood(string $SpecFood) Return Food objects filtered by the SpecFood column
 * @method array findByComname(string $ComName) Return Food objects filtered by the ComName column
 * @method array findByStage(string $Stage) Return Food objects filtered by the Stage column
 * @method array findByRank(double $Rank) Return Food objects filtered by the Rank column
 * @method array findByFoodirank(double $FoodIRank) Return Food objects filtered by the FoodIRank column
 * @method array findByFoodiirank(double $FoodIIRank) Return Food objects filtered by the FoodIIRank column
 * @method array findByFoodiiirank(double $FoodIIIRank) Return Food objects filtered by the FoodIIIRank column
 * @method array findByTroph(double $Troph) Return Food objects filtered by the Troph column
 * @method array findByTrophse(double $TrophSe) Return Food objects filtered by the TrophSe column
 * @method array findByRefno(int $Refno) Return Food objects filtered by the Refno column
 * @method array findByRemark(string $Remark) Return Food objects filtered by the Remark column
 * @method array findByMaxlength(double $MaxLength) Return Food objects filtered by the MaxLength column
 * @method array findByMinlength(double $MinLength) Return Food objects filtered by the MinLength column
 * @method array findByFoodflag(int $FoodFlag) Return Food objects filtered by the FoodFlag column
 * @method array findByPredflag(int $PredFlag) Return Food objects filtered by the PredFlag column
 * @method array findByNewtroph(int $NewTroph) Return Food objects filtered by the NewTroph column
 * @method array findByTs(string $TS) Return Food objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFoodQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFoodQuery object.
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
            $modelName = 'Food';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FoodQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FoodQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FoodQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FoodQuery) {
            return $criteria;
        }
        $query = new FoodQuery(null, null, $modelAlias);

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
     * @return   Food|Food[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FoodPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FoodPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Food A model object, or null if the key is not found
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
     * @return                 Food A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `FOODI`, `FOODII`, `FOODIII`, `GenFood`, `SpecFood`, `ComName`, `Stage`, `Rank`, `FoodIRank`, `FoodIIRank`, `FoodIIIRank`, `Troph`, `TrophSe`, `Refno`, `Remark`, `MaxLength`, `MinLength`, `FoodFlag`, `PredFlag`, `NewTroph`, `TS` FROM `food` WHERE `AutoCtr` = :p0';
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
            $obj = new Food();
            $obj->hydrate($row);
            FoodPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Food|Food[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Food[]|mixed the list of results, formatted by the current formatter
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
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(FoodPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(FoodPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(FoodPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(FoodPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the FOODI column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodi('fooValue');   // WHERE FOODI = 'fooValue'
     * $query->filterByFoodi('%fooValue%'); // WHERE FOODI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByFoodi($foodi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foodi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $foodi)) {
                $foodi = str_replace('*', '%', $foodi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FoodPeer::FOODI, $foodi, $comparison);
    }

    /**
     * Filter the query on the FOODII column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodii('fooValue');   // WHERE FOODII = 'fooValue'
     * $query->filterByFoodii('%fooValue%'); // WHERE FOODII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByFoodii($foodii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foodii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $foodii)) {
                $foodii = str_replace('*', '%', $foodii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FoodPeer::FOODII, $foodii, $comparison);
    }

    /**
     * Filter the query on the FOODIII column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodiii('fooValue');   // WHERE FOODIII = 'fooValue'
     * $query->filterByFoodiii('%fooValue%'); // WHERE FOODIII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodiii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByFoodiii($foodiii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foodiii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $foodiii)) {
                $foodiii = str_replace('*', '%', $foodiii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FoodPeer::FOODIII, $foodiii, $comparison);
    }

    /**
     * Filter the query on the GenFood column
     *
     * Example usage:
     * <code>
     * $query->filterByGenfood('fooValue');   // WHERE GenFood = 'fooValue'
     * $query->filterByGenfood('%fooValue%'); // WHERE GenFood LIKE '%fooValue%'
     * </code>
     *
     * @param     string $genfood The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByGenfood($genfood = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($genfood)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $genfood)) {
                $genfood = str_replace('*', '%', $genfood);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FoodPeer::GENFOOD, $genfood, $comparison);
    }

    /**
     * Filter the query on the SpecFood column
     *
     * Example usage:
     * <code>
     * $query->filterBySpecfood('fooValue');   // WHERE SpecFood = 'fooValue'
     * $query->filterBySpecfood('%fooValue%'); // WHERE SpecFood LIKE '%fooValue%'
     * </code>
     *
     * @param     string $specfood The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterBySpecfood($specfood = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($specfood)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $specfood)) {
                $specfood = str_replace('*', '%', $specfood);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FoodPeer::SPECFOOD, $specfood, $comparison);
    }

    /**
     * Filter the query on the ComName column
     *
     * Example usage:
     * <code>
     * $query->filterByComname('fooValue');   // WHERE ComName = 'fooValue'
     * $query->filterByComname('%fooValue%'); // WHERE ComName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByComname($comname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comname)) {
                $comname = str_replace('*', '%', $comname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FoodPeer::COMNAME, $comname, $comparison);
    }

    /**
     * Filter the query on the Stage column
     *
     * Example usage:
     * <code>
     * $query->filterByStage('fooValue');   // WHERE Stage = 'fooValue'
     * $query->filterByStage('%fooValue%'); // WHERE Stage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByStage($stage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stage)) {
                $stage = str_replace('*', '%', $stage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FoodPeer::STAGE, $stage, $comparison);
    }

    /**
     * Filter the query on the Rank column
     *
     * Example usage:
     * <code>
     * $query->filterByRank(1234); // WHERE Rank = 1234
     * $query->filterByRank(array(12, 34)); // WHERE Rank IN (12, 34)
     * $query->filterByRank(array('min' => 12)); // WHERE Rank >= 12
     * $query->filterByRank(array('max' => 12)); // WHERE Rank <= 12
     * </code>
     *
     * @param     mixed $rank The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByRank($rank = null, $comparison = null)
    {
        if (is_array($rank)) {
            $useMinMax = false;
            if (isset($rank['min'])) {
                $this->addUsingAlias(FoodPeer::RANK, $rank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rank['max'])) {
                $this->addUsingAlias(FoodPeer::RANK, $rank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodPeer::RANK, $rank, $comparison);
    }

    /**
     * Filter the query on the FoodIRank column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodirank(1234); // WHERE FoodIRank = 1234
     * $query->filterByFoodirank(array(12, 34)); // WHERE FoodIRank IN (12, 34)
     * $query->filterByFoodirank(array('min' => 12)); // WHERE FoodIRank >= 12
     * $query->filterByFoodirank(array('max' => 12)); // WHERE FoodIRank <= 12
     * </code>
     *
     * @param     mixed $foodirank The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByFoodirank($foodirank = null, $comparison = null)
    {
        if (is_array($foodirank)) {
            $useMinMax = false;
            if (isset($foodirank['min'])) {
                $this->addUsingAlias(FoodPeer::FOODIRANK, $foodirank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foodirank['max'])) {
                $this->addUsingAlias(FoodPeer::FOODIRANK, $foodirank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodPeer::FOODIRANK, $foodirank, $comparison);
    }

    /**
     * Filter the query on the FoodIIRank column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodiirank(1234); // WHERE FoodIIRank = 1234
     * $query->filterByFoodiirank(array(12, 34)); // WHERE FoodIIRank IN (12, 34)
     * $query->filterByFoodiirank(array('min' => 12)); // WHERE FoodIIRank >= 12
     * $query->filterByFoodiirank(array('max' => 12)); // WHERE FoodIIRank <= 12
     * </code>
     *
     * @param     mixed $foodiirank The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByFoodiirank($foodiirank = null, $comparison = null)
    {
        if (is_array($foodiirank)) {
            $useMinMax = false;
            if (isset($foodiirank['min'])) {
                $this->addUsingAlias(FoodPeer::FOODIIRANK, $foodiirank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foodiirank['max'])) {
                $this->addUsingAlias(FoodPeer::FOODIIRANK, $foodiirank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodPeer::FOODIIRANK, $foodiirank, $comparison);
    }

    /**
     * Filter the query on the FoodIIIRank column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodiiirank(1234); // WHERE FoodIIIRank = 1234
     * $query->filterByFoodiiirank(array(12, 34)); // WHERE FoodIIIRank IN (12, 34)
     * $query->filterByFoodiiirank(array('min' => 12)); // WHERE FoodIIIRank >= 12
     * $query->filterByFoodiiirank(array('max' => 12)); // WHERE FoodIIIRank <= 12
     * </code>
     *
     * @param     mixed $foodiiirank The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByFoodiiirank($foodiiirank = null, $comparison = null)
    {
        if (is_array($foodiiirank)) {
            $useMinMax = false;
            if (isset($foodiiirank['min'])) {
                $this->addUsingAlias(FoodPeer::FOODIIIRANK, $foodiiirank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foodiiirank['max'])) {
                $this->addUsingAlias(FoodPeer::FOODIIIRANK, $foodiiirank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodPeer::FOODIIIRANK, $foodiiirank, $comparison);
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
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByTroph($troph = null, $comparison = null)
    {
        if (is_array($troph)) {
            $useMinMax = false;
            if (isset($troph['min'])) {
                $this->addUsingAlias(FoodPeer::TROPH, $troph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($troph['max'])) {
                $this->addUsingAlias(FoodPeer::TROPH, $troph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodPeer::TROPH, $troph, $comparison);
    }

    /**
     * Filter the query on the TrophSe column
     *
     * Example usage:
     * <code>
     * $query->filterByTrophse(1234); // WHERE TrophSe = 1234
     * $query->filterByTrophse(array(12, 34)); // WHERE TrophSe IN (12, 34)
     * $query->filterByTrophse(array('min' => 12)); // WHERE TrophSe >= 12
     * $query->filterByTrophse(array('max' => 12)); // WHERE TrophSe <= 12
     * </code>
     *
     * @param     mixed $trophse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByTrophse($trophse = null, $comparison = null)
    {
        if (is_array($trophse)) {
            $useMinMax = false;
            if (isset($trophse['min'])) {
                $this->addUsingAlias(FoodPeer::TROPHSE, $trophse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($trophse['max'])) {
                $this->addUsingAlias(FoodPeer::TROPHSE, $trophse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodPeer::TROPHSE, $trophse, $comparison);
    }

    /**
     * Filter the query on the Refno column
     *
     * Example usage:
     * <code>
     * $query->filterByRefno(1234); // WHERE Refno = 1234
     * $query->filterByRefno(array(12, 34)); // WHERE Refno IN (12, 34)
     * $query->filterByRefno(array('min' => 12)); // WHERE Refno >= 12
     * $query->filterByRefno(array('max' => 12)); // WHERE Refno <= 12
     * </code>
     *
     * @param     mixed $refno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByRefno($refno = null, $comparison = null)
    {
        if (is_array($refno)) {
            $useMinMax = false;
            if (isset($refno['min'])) {
                $this->addUsingAlias(FoodPeer::REFNO, $refno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refno['max'])) {
                $this->addUsingAlias(FoodPeer::REFNO, $refno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodPeer::REFNO, $refno, $comparison);
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
     * @return FoodQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FoodPeer::REMARK, $remark, $comparison);
    }

    /**
     * Filter the query on the MaxLength column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxlength(1234); // WHERE MaxLength = 1234
     * $query->filterByMaxlength(array(12, 34)); // WHERE MaxLength IN (12, 34)
     * $query->filterByMaxlength(array('min' => 12)); // WHERE MaxLength >= 12
     * $query->filterByMaxlength(array('max' => 12)); // WHERE MaxLength <= 12
     * </code>
     *
     * @param     mixed $maxlength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByMaxlength($maxlength = null, $comparison = null)
    {
        if (is_array($maxlength)) {
            $useMinMax = false;
            if (isset($maxlength['min'])) {
                $this->addUsingAlias(FoodPeer::MAXLENGTH, $maxlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxlength['max'])) {
                $this->addUsingAlias(FoodPeer::MAXLENGTH, $maxlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodPeer::MAXLENGTH, $maxlength, $comparison);
    }

    /**
     * Filter the query on the MinLength column
     *
     * Example usage:
     * <code>
     * $query->filterByMinlength(1234); // WHERE MinLength = 1234
     * $query->filterByMinlength(array(12, 34)); // WHERE MinLength IN (12, 34)
     * $query->filterByMinlength(array('min' => 12)); // WHERE MinLength >= 12
     * $query->filterByMinlength(array('max' => 12)); // WHERE MinLength <= 12
     * </code>
     *
     * @param     mixed $minlength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByMinlength($minlength = null, $comparison = null)
    {
        if (is_array($minlength)) {
            $useMinMax = false;
            if (isset($minlength['min'])) {
                $this->addUsingAlias(FoodPeer::MINLENGTH, $minlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($minlength['max'])) {
                $this->addUsingAlias(FoodPeer::MINLENGTH, $minlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodPeer::MINLENGTH, $minlength, $comparison);
    }

    /**
     * Filter the query on the FoodFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodflag(1234); // WHERE FoodFlag = 1234
     * $query->filterByFoodflag(array(12, 34)); // WHERE FoodFlag IN (12, 34)
     * $query->filterByFoodflag(array('min' => 12)); // WHERE FoodFlag >= 12
     * $query->filterByFoodflag(array('max' => 12)); // WHERE FoodFlag <= 12
     * </code>
     *
     * @param     mixed $foodflag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByFoodflag($foodflag = null, $comparison = null)
    {
        if (is_array($foodflag)) {
            $useMinMax = false;
            if (isset($foodflag['min'])) {
                $this->addUsingAlias(FoodPeer::FOODFLAG, $foodflag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foodflag['max'])) {
                $this->addUsingAlias(FoodPeer::FOODFLAG, $foodflag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodPeer::FOODFLAG, $foodflag, $comparison);
    }

    /**
     * Filter the query on the PredFlag column
     *
     * Example usage:
     * <code>
     * $query->filterByPredflag(1234); // WHERE PredFlag = 1234
     * $query->filterByPredflag(array(12, 34)); // WHERE PredFlag IN (12, 34)
     * $query->filterByPredflag(array('min' => 12)); // WHERE PredFlag >= 12
     * $query->filterByPredflag(array('max' => 12)); // WHERE PredFlag <= 12
     * </code>
     *
     * @param     mixed $predflag The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByPredflag($predflag = null, $comparison = null)
    {
        if (is_array($predflag)) {
            $useMinMax = false;
            if (isset($predflag['min'])) {
                $this->addUsingAlias(FoodPeer::PREDFLAG, $predflag['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($predflag['max'])) {
                $this->addUsingAlias(FoodPeer::PREDFLAG, $predflag['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodPeer::PREDFLAG, $predflag, $comparison);
    }

    /**
     * Filter the query on the NewTroph column
     *
     * Example usage:
     * <code>
     * $query->filterByNewtroph(1234); // WHERE NewTroph = 1234
     * $query->filterByNewtroph(array(12, 34)); // WHERE NewTroph IN (12, 34)
     * $query->filterByNewtroph(array('min' => 12)); // WHERE NewTroph >= 12
     * $query->filterByNewtroph(array('max' => 12)); // WHERE NewTroph <= 12
     * </code>
     *
     * @param     mixed $newtroph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByNewtroph($newtroph = null, $comparison = null)
    {
        if (is_array($newtroph)) {
            $useMinMax = false;
            if (isset($newtroph['min'])) {
                $this->addUsingAlias(FoodPeer::NEWTROPH, $newtroph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($newtroph['max'])) {
                $this->addUsingAlias(FoodPeer::NEWTROPH, $newtroph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodPeer::NEWTROPH, $newtroph, $comparison);
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
     * @return FoodQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FoodPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FoodPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FoodPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Food $food Object to remove from the list of results
     *
     * @return FoodQuery The current query, for fluid interface
     */
    public function prune($food = null)
    {
        if ($food) {
            $this->addUsingAlias(FoodPeer::AUTOCTR, $food->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
