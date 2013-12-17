<?php


/**
 * Base class that represents a query for the 'fooditems' table.
 *
 *
 *
 * @method FooditemsQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method FooditemsQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method FooditemsQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method FooditemsQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method FooditemsQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method FooditemsQuery orderByFoodsrefno($order = Criteria::ASC) Order by the FoodsRefNo column
 * @method FooditemsQuery orderByFoodi($order = Criteria::ASC) Order by the FoodI column
 * @method FooditemsQuery orderByPreystage($order = Criteria::ASC) Order by the PreyStage column
 * @method FooditemsQuery orderByFoodii($order = Criteria::ASC) Order by the FoodII column
 * @method FooditemsQuery orderByFoodiii($order = Criteria::ASC) Order by the FoodIII column
 * @method FooditemsQuery orderByCommoness($order = Criteria::ASC) Order by the Commoness column
 * @method FooditemsQuery orderByCommonessii($order = Criteria::ASC) Order by the CommonessII column
 * @method FooditemsQuery orderByFoodgroup($order = Criteria::ASC) Order by the Foodgroup column
 * @method FooditemsQuery orderByFoodname($order = Criteria::ASC) Order by the Foodname column
 * @method FooditemsQuery orderByPreyspeccode($order = Criteria::ASC) Order by the PreySpecCode column
 * @method FooditemsQuery orderByPreyspeccodeslb($order = Criteria::ASC) Order by the PreySpecCodeSLB column
 * @method FooditemsQuery orderByAlphacode($order = Criteria::ASC) Order by the AlphaCode column
 * @method FooditemsQuery orderByPreytroph($order = Criteria::ASC) Order by the PreyTroph column
 * @method FooditemsQuery orderByPreysetroph($order = Criteria::ASC) Order by the PreySeTroph column
 * @method FooditemsQuery orderByTrophrefno($order = Criteria::ASC) Order by the TrophRefNo column
 * @method FooditemsQuery orderByPredatorstage($order = Criteria::ASC) Order by the PredatorStage column
 * @method FooditemsQuery orderByLocality2($order = Criteria::ASC) Order by the Locality2 column
 * @method FooditemsQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method FooditemsQuery orderByDateentered($order = Criteria::ASC) Order by the Dateentered column
 * @method FooditemsQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method FooditemsQuery orderByDatemodified($order = Criteria::ASC) Order by the Datemodified column
 * @method FooditemsQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method FooditemsQuery orderByDatechecked($order = Criteria::ASC) Order by the Datechecked column
 * @method FooditemsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method FooditemsQuery groupByAutoctr() Group by the autoctr column
 * @method FooditemsQuery groupByStockcode() Group by the StockCode column
 * @method FooditemsQuery groupBySpeccode() Group by the SpecCode column
 * @method FooditemsQuery groupByLocality() Group by the Locality column
 * @method FooditemsQuery groupByCCode() Group by the C_Code column
 * @method FooditemsQuery groupByFoodsrefno() Group by the FoodsRefNo column
 * @method FooditemsQuery groupByFoodi() Group by the FoodI column
 * @method FooditemsQuery groupByPreystage() Group by the PreyStage column
 * @method FooditemsQuery groupByFoodii() Group by the FoodII column
 * @method FooditemsQuery groupByFoodiii() Group by the FoodIII column
 * @method FooditemsQuery groupByCommoness() Group by the Commoness column
 * @method FooditemsQuery groupByCommonessii() Group by the CommonessII column
 * @method FooditemsQuery groupByFoodgroup() Group by the Foodgroup column
 * @method FooditemsQuery groupByFoodname() Group by the Foodname column
 * @method FooditemsQuery groupByPreyspeccode() Group by the PreySpecCode column
 * @method FooditemsQuery groupByPreyspeccodeslb() Group by the PreySpecCodeSLB column
 * @method FooditemsQuery groupByAlphacode() Group by the AlphaCode column
 * @method FooditemsQuery groupByPreytroph() Group by the PreyTroph column
 * @method FooditemsQuery groupByPreysetroph() Group by the PreySeTroph column
 * @method FooditemsQuery groupByTrophrefno() Group by the TrophRefNo column
 * @method FooditemsQuery groupByPredatorstage() Group by the PredatorStage column
 * @method FooditemsQuery groupByLocality2() Group by the Locality2 column
 * @method FooditemsQuery groupByEntered() Group by the Entered column
 * @method FooditemsQuery groupByDateentered() Group by the Dateentered column
 * @method FooditemsQuery groupByModified() Group by the Modified column
 * @method FooditemsQuery groupByDatemodified() Group by the Datemodified column
 * @method FooditemsQuery groupByExpert() Group by the Expert column
 * @method FooditemsQuery groupByDatechecked() Group by the Datechecked column
 * @method FooditemsQuery groupByTs() Group by the TS column
 *
 * @method FooditemsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method FooditemsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method FooditemsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Fooditems findOne(PropelPDO $con = null) Return the first Fooditems matching the query
 * @method Fooditems findOneOrCreate(PropelPDO $con = null) Return the first Fooditems matching the query, or a new Fooditems object populated from the query conditions when no match is found
 *
 * @method Fooditems findOneByAutoctr(int $autoctr) Return the first Fooditems filtered by the autoctr column
 * @method Fooditems findOneByStockcode(int $StockCode) Return the first Fooditems filtered by the StockCode column
 * @method Fooditems findOneBySpeccode(int $SpecCode) Return the first Fooditems filtered by the SpecCode column
 * @method Fooditems findOneByLocality(string $Locality) Return the first Fooditems filtered by the Locality column
 * @method Fooditems findOneByCCode(string $C_Code) Return the first Fooditems filtered by the C_Code column
 * @method Fooditems findOneByFoodsrefno(int $FoodsRefNo) Return the first Fooditems filtered by the FoodsRefNo column
 * @method Fooditems findOneByFoodi(string $FoodI) Return the first Fooditems filtered by the FoodI column
 * @method Fooditems findOneByPreystage(string $PreyStage) Return the first Fooditems filtered by the PreyStage column
 * @method Fooditems findOneByFoodii(string $FoodII) Return the first Fooditems filtered by the FoodII column
 * @method Fooditems findOneByFoodiii(string $FoodIII) Return the first Fooditems filtered by the FoodIII column
 * @method Fooditems findOneByCommoness(double $Commoness) Return the first Fooditems filtered by the Commoness column
 * @method Fooditems findOneByCommonessii(string $CommonessII) Return the first Fooditems filtered by the CommonessII column
 * @method Fooditems findOneByFoodgroup(string $Foodgroup) Return the first Fooditems filtered by the Foodgroup column
 * @method Fooditems findOneByFoodname(string $Foodname) Return the first Fooditems filtered by the Foodname column
 * @method Fooditems findOneByPreyspeccode(int $PreySpecCode) Return the first Fooditems filtered by the PreySpecCode column
 * @method Fooditems findOneByPreyspeccodeslb(int $PreySpecCodeSLB) Return the first Fooditems filtered by the PreySpecCodeSLB column
 * @method Fooditems findOneByAlphacode(string $AlphaCode) Return the first Fooditems filtered by the AlphaCode column
 * @method Fooditems findOneByPreytroph(double $PreyTroph) Return the first Fooditems filtered by the PreyTroph column
 * @method Fooditems findOneByPreysetroph(double $PreySeTroph) Return the first Fooditems filtered by the PreySeTroph column
 * @method Fooditems findOneByTrophrefno(int $TrophRefNo) Return the first Fooditems filtered by the TrophRefNo column
 * @method Fooditems findOneByPredatorstage(string $PredatorStage) Return the first Fooditems filtered by the PredatorStage column
 * @method Fooditems findOneByLocality2(string $Locality2) Return the first Fooditems filtered by the Locality2 column
 * @method Fooditems findOneByEntered(int $Entered) Return the first Fooditems filtered by the Entered column
 * @method Fooditems findOneByDateentered(string $Dateentered) Return the first Fooditems filtered by the Dateentered column
 * @method Fooditems findOneByModified(int $Modified) Return the first Fooditems filtered by the Modified column
 * @method Fooditems findOneByDatemodified(string $Datemodified) Return the first Fooditems filtered by the Datemodified column
 * @method Fooditems findOneByExpert(int $Expert) Return the first Fooditems filtered by the Expert column
 * @method Fooditems findOneByDatechecked(string $Datechecked) Return the first Fooditems filtered by the Datechecked column
 * @method Fooditems findOneByTs(string $TS) Return the first Fooditems filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Fooditems objects filtered by the autoctr column
 * @method array findByStockcode(int $StockCode) Return Fooditems objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Fooditems objects filtered by the SpecCode column
 * @method array findByLocality(string $Locality) Return Fooditems objects filtered by the Locality column
 * @method array findByCCode(string $C_Code) Return Fooditems objects filtered by the C_Code column
 * @method array findByFoodsrefno(int $FoodsRefNo) Return Fooditems objects filtered by the FoodsRefNo column
 * @method array findByFoodi(string $FoodI) Return Fooditems objects filtered by the FoodI column
 * @method array findByPreystage(string $PreyStage) Return Fooditems objects filtered by the PreyStage column
 * @method array findByFoodii(string $FoodII) Return Fooditems objects filtered by the FoodII column
 * @method array findByFoodiii(string $FoodIII) Return Fooditems objects filtered by the FoodIII column
 * @method array findByCommoness(double $Commoness) Return Fooditems objects filtered by the Commoness column
 * @method array findByCommonessii(string $CommonessII) Return Fooditems objects filtered by the CommonessII column
 * @method array findByFoodgroup(string $Foodgroup) Return Fooditems objects filtered by the Foodgroup column
 * @method array findByFoodname(string $Foodname) Return Fooditems objects filtered by the Foodname column
 * @method array findByPreyspeccode(int $PreySpecCode) Return Fooditems objects filtered by the PreySpecCode column
 * @method array findByPreyspeccodeslb(int $PreySpecCodeSLB) Return Fooditems objects filtered by the PreySpecCodeSLB column
 * @method array findByAlphacode(string $AlphaCode) Return Fooditems objects filtered by the AlphaCode column
 * @method array findByPreytroph(double $PreyTroph) Return Fooditems objects filtered by the PreyTroph column
 * @method array findByPreysetroph(double $PreySeTroph) Return Fooditems objects filtered by the PreySeTroph column
 * @method array findByTrophrefno(int $TrophRefNo) Return Fooditems objects filtered by the TrophRefNo column
 * @method array findByPredatorstage(string $PredatorStage) Return Fooditems objects filtered by the PredatorStage column
 * @method array findByLocality2(string $Locality2) Return Fooditems objects filtered by the Locality2 column
 * @method array findByEntered(int $Entered) Return Fooditems objects filtered by the Entered column
 * @method array findByDateentered(string $Dateentered) Return Fooditems objects filtered by the Dateentered column
 * @method array findByModified(int $Modified) Return Fooditems objects filtered by the Modified column
 * @method array findByDatemodified(string $Datemodified) Return Fooditems objects filtered by the Datemodified column
 * @method array findByExpert(int $Expert) Return Fooditems objects filtered by the Expert column
 * @method array findByDatechecked(string $Datechecked) Return Fooditems objects filtered by the Datechecked column
 * @method array findByTs(string $TS) Return Fooditems objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseFooditemsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseFooditemsQuery object.
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
            $modelName = 'Fooditems';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new FooditemsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   FooditemsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return FooditemsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof FooditemsQuery) {
            return $criteria;
        }
        $query = new FooditemsQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$StockCode, $FoodI, $PreyStage, $FoodII, $FoodIII, $Foodgroup, $Foodname, $PredatorStage]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Fooditems|Fooditems[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = FooditemsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5], (string) $key[6], (string) $key[7]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(FooditemsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Fooditems A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `StockCode`, `SpecCode`, `Locality`, `C_Code`, `FoodsRefNo`, `FoodI`, `PreyStage`, `FoodII`, `FoodIII`, `Commoness`, `CommonessII`, `Foodgroup`, `Foodname`, `PreySpecCode`, `PreySpecCodeSLB`, `AlphaCode`, `PreyTroph`, `PreySeTroph`, `TrophRefNo`, `PredatorStage`, `Locality2`, `Entered`, `Dateentered`, `Modified`, `Datemodified`, `Expert`, `Datechecked`, `TS` FROM `fooditems` WHERE `StockCode` = :p0 AND `FoodI` = :p1 AND `PreyStage` = :p2 AND `FoodII` = :p3 AND `FoodIII` = :p4 AND `Foodgroup` = :p5 AND `Foodname` = :p6 AND `PredatorStage` = :p7';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_STR);
            $stmt->bindValue(':p6', $key[6], PDO::PARAM_STR);
            $stmt->bindValue(':p7', $key[7], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Fooditems();
            $obj->hydrate($row);
            FooditemsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5], (string) $key[6], (string) $key[7])));
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
     * @return Fooditems|Fooditems[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Fooditems[]|mixed the list of results, formatted by the current formatter
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
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(FooditemsPeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(FooditemsPeer::FOODI, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(FooditemsPeer::PREYSTAGE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(FooditemsPeer::FOODII, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(FooditemsPeer::FOODIII, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(FooditemsPeer::FOODGROUP, $key[5], Criteria::EQUAL);
        $this->addUsingAlias(FooditemsPeer::FOODNAME, $key[6], Criteria::EQUAL);
        $this->addUsingAlias(FooditemsPeer::PREDATORSTAGE, $key[7], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(FooditemsPeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(FooditemsPeer::FOODI, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(FooditemsPeer::PREYSTAGE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(FooditemsPeer::FOODII, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(FooditemsPeer::FOODIII, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(FooditemsPeer::FOODGROUP, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
            $cton6 = $this->getNewCriterion(FooditemsPeer::FOODNAME, $key[6], Criteria::EQUAL);
            $cton0->addAnd($cton6);
            $cton7 = $this->getNewCriterion(FooditemsPeer::PREDATORSTAGE, $key[7], Criteria::EQUAL);
            $cton0->addAnd($cton7);
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
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(FooditemsPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(FooditemsPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(FooditemsPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(FooditemsPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(FooditemsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(FooditemsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::SPECCODE, $speccode, $comparison);
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
     * @return FooditemsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FooditemsPeer::LOCALITY, $locality, $comparison);
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
     * @return FooditemsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FooditemsPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the FoodsRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodsrefno(1234); // WHERE FoodsRefNo = 1234
     * $query->filterByFoodsrefno(array(12, 34)); // WHERE FoodsRefNo IN (12, 34)
     * $query->filterByFoodsrefno(array('min' => 12)); // WHERE FoodsRefNo >= 12
     * $query->filterByFoodsrefno(array('max' => 12)); // WHERE FoodsRefNo <= 12
     * </code>
     *
     * @param     mixed $foodsrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByFoodsrefno($foodsrefno = null, $comparison = null)
    {
        if (is_array($foodsrefno)) {
            $useMinMax = false;
            if (isset($foodsrefno['min'])) {
                $this->addUsingAlias(FooditemsPeer::FOODSREFNO, $foodsrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($foodsrefno['max'])) {
                $this->addUsingAlias(FooditemsPeer::FOODSREFNO, $foodsrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::FOODSREFNO, $foodsrefno, $comparison);
    }

    /**
     * Filter the query on the FoodI column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodi('fooValue');   // WHERE FoodI = 'fooValue'
     * $query->filterByFoodi('%fooValue%'); // WHERE FoodI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FooditemsPeer::FOODI, $foodi, $comparison);
    }

    /**
     * Filter the query on the PreyStage column
     *
     * Example usage:
     * <code>
     * $query->filterByPreystage('fooValue');   // WHERE PreyStage = 'fooValue'
     * $query->filterByPreystage('%fooValue%'); // WHERE PreyStage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $preystage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByPreystage($preystage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($preystage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $preystage)) {
                $preystage = str_replace('*', '%', $preystage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::PREYSTAGE, $preystage, $comparison);
    }

    /**
     * Filter the query on the FoodII column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodii('fooValue');   // WHERE FoodII = 'fooValue'
     * $query->filterByFoodii('%fooValue%'); // WHERE FoodII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FooditemsPeer::FOODII, $foodii, $comparison);
    }

    /**
     * Filter the query on the FoodIII column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodiii('fooValue');   // WHERE FoodIII = 'fooValue'
     * $query->filterByFoodiii('%fooValue%'); // WHERE FoodIII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodiii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(FooditemsPeer::FOODIII, $foodiii, $comparison);
    }

    /**
     * Filter the query on the Commoness column
     *
     * Example usage:
     * <code>
     * $query->filterByCommoness(1234); // WHERE Commoness = 1234
     * $query->filterByCommoness(array(12, 34)); // WHERE Commoness IN (12, 34)
     * $query->filterByCommoness(array('min' => 12)); // WHERE Commoness >= 12
     * $query->filterByCommoness(array('max' => 12)); // WHERE Commoness <= 12
     * </code>
     *
     * @param     mixed $commoness The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByCommoness($commoness = null, $comparison = null)
    {
        if (is_array($commoness)) {
            $useMinMax = false;
            if (isset($commoness['min'])) {
                $this->addUsingAlias(FooditemsPeer::COMMONESS, $commoness['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($commoness['max'])) {
                $this->addUsingAlias(FooditemsPeer::COMMONESS, $commoness['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::COMMONESS, $commoness, $comparison);
    }

    /**
     * Filter the query on the CommonessII column
     *
     * Example usage:
     * <code>
     * $query->filterByCommonessii('fooValue');   // WHERE CommonessII = 'fooValue'
     * $query->filterByCommonessii('%fooValue%'); // WHERE CommonessII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commonessii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByCommonessii($commonessii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commonessii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commonessii)) {
                $commonessii = str_replace('*', '%', $commonessii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::COMMONESSII, $commonessii, $comparison);
    }

    /**
     * Filter the query on the Foodgroup column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodgroup('fooValue');   // WHERE Foodgroup = 'fooValue'
     * $query->filterByFoodgroup('%fooValue%'); // WHERE Foodgroup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodgroup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByFoodgroup($foodgroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foodgroup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $foodgroup)) {
                $foodgroup = str_replace('*', '%', $foodgroup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::FOODGROUP, $foodgroup, $comparison);
    }

    /**
     * Filter the query on the Foodname column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodname('fooValue');   // WHERE Foodname = 'fooValue'
     * $query->filterByFoodname('%fooValue%'); // WHERE Foodname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByFoodname($foodname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($foodname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $foodname)) {
                $foodname = str_replace('*', '%', $foodname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::FOODNAME, $foodname, $comparison);
    }

    /**
     * Filter the query on the PreySpecCode column
     *
     * Example usage:
     * <code>
     * $query->filterByPreyspeccode(1234); // WHERE PreySpecCode = 1234
     * $query->filterByPreyspeccode(array(12, 34)); // WHERE PreySpecCode IN (12, 34)
     * $query->filterByPreyspeccode(array('min' => 12)); // WHERE PreySpecCode >= 12
     * $query->filterByPreyspeccode(array('max' => 12)); // WHERE PreySpecCode <= 12
     * </code>
     *
     * @param     mixed $preyspeccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByPreyspeccode($preyspeccode = null, $comparison = null)
    {
        if (is_array($preyspeccode)) {
            $useMinMax = false;
            if (isset($preyspeccode['min'])) {
                $this->addUsingAlias(FooditemsPeer::PREYSPECCODE, $preyspeccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preyspeccode['max'])) {
                $this->addUsingAlias(FooditemsPeer::PREYSPECCODE, $preyspeccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::PREYSPECCODE, $preyspeccode, $comparison);
    }

    /**
     * Filter the query on the PreySpecCodeSLB column
     *
     * Example usage:
     * <code>
     * $query->filterByPreyspeccodeslb(1234); // WHERE PreySpecCodeSLB = 1234
     * $query->filterByPreyspeccodeslb(array(12, 34)); // WHERE PreySpecCodeSLB IN (12, 34)
     * $query->filterByPreyspeccodeslb(array('min' => 12)); // WHERE PreySpecCodeSLB >= 12
     * $query->filterByPreyspeccodeslb(array('max' => 12)); // WHERE PreySpecCodeSLB <= 12
     * </code>
     *
     * @param     mixed $preyspeccodeslb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByPreyspeccodeslb($preyspeccodeslb = null, $comparison = null)
    {
        if (is_array($preyspeccodeslb)) {
            $useMinMax = false;
            if (isset($preyspeccodeslb['min'])) {
                $this->addUsingAlias(FooditemsPeer::PREYSPECCODESLB, $preyspeccodeslb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preyspeccodeslb['max'])) {
                $this->addUsingAlias(FooditemsPeer::PREYSPECCODESLB, $preyspeccodeslb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::PREYSPECCODESLB, $preyspeccodeslb, $comparison);
    }

    /**
     * Filter the query on the AlphaCode column
     *
     * Example usage:
     * <code>
     * $query->filterByAlphacode('fooValue');   // WHERE AlphaCode = 'fooValue'
     * $query->filterByAlphacode('%fooValue%'); // WHERE AlphaCode LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alphacode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByAlphacode($alphacode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alphacode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alphacode)) {
                $alphacode = str_replace('*', '%', $alphacode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::ALPHACODE, $alphacode, $comparison);
    }

    /**
     * Filter the query on the PreyTroph column
     *
     * Example usage:
     * <code>
     * $query->filterByPreytroph(1234); // WHERE PreyTroph = 1234
     * $query->filterByPreytroph(array(12, 34)); // WHERE PreyTroph IN (12, 34)
     * $query->filterByPreytroph(array('min' => 12)); // WHERE PreyTroph >= 12
     * $query->filterByPreytroph(array('max' => 12)); // WHERE PreyTroph <= 12
     * </code>
     *
     * @param     mixed $preytroph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByPreytroph($preytroph = null, $comparison = null)
    {
        if (is_array($preytroph)) {
            $useMinMax = false;
            if (isset($preytroph['min'])) {
                $this->addUsingAlias(FooditemsPeer::PREYTROPH, $preytroph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preytroph['max'])) {
                $this->addUsingAlias(FooditemsPeer::PREYTROPH, $preytroph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::PREYTROPH, $preytroph, $comparison);
    }

    /**
     * Filter the query on the PreySeTroph column
     *
     * Example usage:
     * <code>
     * $query->filterByPreysetroph(1234); // WHERE PreySeTroph = 1234
     * $query->filterByPreysetroph(array(12, 34)); // WHERE PreySeTroph IN (12, 34)
     * $query->filterByPreysetroph(array('min' => 12)); // WHERE PreySeTroph >= 12
     * $query->filterByPreysetroph(array('max' => 12)); // WHERE PreySeTroph <= 12
     * </code>
     *
     * @param     mixed $preysetroph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByPreysetroph($preysetroph = null, $comparison = null)
    {
        if (is_array($preysetroph)) {
            $useMinMax = false;
            if (isset($preysetroph['min'])) {
                $this->addUsingAlias(FooditemsPeer::PREYSETROPH, $preysetroph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preysetroph['max'])) {
                $this->addUsingAlias(FooditemsPeer::PREYSETROPH, $preysetroph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::PREYSETROPH, $preysetroph, $comparison);
    }

    /**
     * Filter the query on the TrophRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByTrophrefno(1234); // WHERE TrophRefNo = 1234
     * $query->filterByTrophrefno(array(12, 34)); // WHERE TrophRefNo IN (12, 34)
     * $query->filterByTrophrefno(array('min' => 12)); // WHERE TrophRefNo >= 12
     * $query->filterByTrophrefno(array('max' => 12)); // WHERE TrophRefNo <= 12
     * </code>
     *
     * @param     mixed $trophrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByTrophrefno($trophrefno = null, $comparison = null)
    {
        if (is_array($trophrefno)) {
            $useMinMax = false;
            if (isset($trophrefno['min'])) {
                $this->addUsingAlias(FooditemsPeer::TROPHREFNO, $trophrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($trophrefno['max'])) {
                $this->addUsingAlias(FooditemsPeer::TROPHREFNO, $trophrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::TROPHREFNO, $trophrefno, $comparison);
    }

    /**
     * Filter the query on the PredatorStage column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatorstage('fooValue');   // WHERE PredatorStage = 'fooValue'
     * $query->filterByPredatorstage('%fooValue%'); // WHERE PredatorStage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $predatorstage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByPredatorstage($predatorstage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($predatorstage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $predatorstage)) {
                $predatorstage = str_replace('*', '%', $predatorstage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::PREDATORSTAGE, $predatorstage, $comparison);
    }

    /**
     * Filter the query on the Locality2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLocality2('fooValue');   // WHERE Locality2 = 'fooValue'
     * $query->filterByLocality2('%fooValue%'); // WHERE Locality2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $locality2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByLocality2($locality2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($locality2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $locality2)) {
                $locality2 = str_replace('*', '%', $locality2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::LOCALITY2, $locality2, $comparison);
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
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(FooditemsPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(FooditemsPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::ENTERED, $entered, $comparison);
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
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(FooditemsPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(FooditemsPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(FooditemsPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(FooditemsPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::MODIFIED, $modified, $comparison);
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
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(FooditemsPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(FooditemsPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(FooditemsPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(FooditemsPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::EXPERT, $expert, $comparison);
    }

    /**
     * Filter the query on the Datechecked column
     *
     * Example usage:
     * <code>
     * $query->filterByDatechecked('2011-03-14'); // WHERE Datechecked = '2011-03-14'
     * $query->filterByDatechecked('now'); // WHERE Datechecked = '2011-03-14'
     * $query->filterByDatechecked(array('max' => 'yesterday')); // WHERE Datechecked < '2011-03-13'
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
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(FooditemsPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(FooditemsPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(FooditemsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(FooditemsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(FooditemsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Fooditems $fooditems Object to remove from the list of results
     *
     * @return FooditemsQuery The current query, for fluid interface
     */
    public function prune($fooditems = null)
    {
        if ($fooditems) {
            $this->addCond('pruneCond0', $this->getAliasedColName(FooditemsPeer::STOCKCODE), $fooditems->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(FooditemsPeer::FOODI), $fooditems->getFoodi(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(FooditemsPeer::PREYSTAGE), $fooditems->getPreystage(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(FooditemsPeer::FOODII), $fooditems->getFoodii(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(FooditemsPeer::FOODIII), $fooditems->getFoodiii(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(FooditemsPeer::FOODGROUP), $fooditems->getFoodgroup(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond6', $this->getAliasedColName(FooditemsPeer::FOODNAME), $fooditems->getFoodname(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond7', $this->getAliasedColName(FooditemsPeer::PREDATORSTAGE), $fooditems->getPredatorstage(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5', 'pruneCond6', 'pruneCond7'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
