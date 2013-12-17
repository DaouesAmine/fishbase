<?php


/**
 * Base class that represents a query for the 'ration' table.
 *
 *
 *
 * @method RationQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method RationQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method RationQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method RationQuery orderByRdrefno($order = Criteria::ASC) Order by the RDRefNo column
 * @method RationQuery orderByDataref1($order = Criteria::ASC) Order by the DataRef1 column
 * @method RationQuery orderByEvacrate1($order = Criteria::ASC) Order by the EvacRate1 column
 * @method RationQuery orderByFoodi($order = Criteria::ASC) Order by the FoodI column
 * @method RationQuery orderByRd1($order = Criteria::ASC) Order by the Rd1 column
 * @method RationQuery orderByFoodii($order = Criteria::ASC) Order by the FoodII column
 * @method RationQuery orderByGce($order = Criteria::ASC) Order by the GCE column
 * @method RationQuery orderByFoodname($order = Criteria::ASC) Order by the FoodName column
 * @method RationQuery orderByTbw($order = Criteria::ASC) Order by the TBW column
 * @method RationQuery orderByWater($order = Criteria::ASC) Order by the Water column
 * @method RationQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method RationQuery orderBySalinity($order = Criteria::ASC) Order by the Salinity column
 * @method RationQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method RationQuery orderByComrdk1($order = Criteria::ASC) Order by the ComRDK1 column
 * @method RationQuery orderByMethrdevacref($order = Criteria::ASC) Order by the MethRDEvacRef column
 * @method RationQuery orderByEvacrate2($order = Criteria::ASC) Order by the EvacRate2 column
 * @method RationQuery orderByFeedbegin1($order = Criteria::ASC) Order by the FeedBegin1 column
 * @method RationQuery orderByFeedbegin2($order = Criteria::ASC) Order by the FeedBegin2 column
 * @method RationQuery orderByRd2($order = Criteria::ASC) Order by the RD2 column
 * @method RationQuery orderByFeedstop1($order = Criteria::ASC) Order by the FeedStop1 column
 * @method RationQuery orderByFeedstop2($order = Criteria::ASC) Order by the FeedStop2 column
 * @method RationQuery orderByDailyfeedingcycle($order = Criteria::ASC) Order by the DailyFeedingCycle column
 * @method RationQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method RationQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method RationQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method RationQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method RationQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method RationQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method RationQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method RationQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method RationQuery groupByAutoctr() Group by the AutoCtr column
 * @method RationQuery groupByStockcode() Group by the StockCode column
 * @method RationQuery groupBySpeccode() Group by the SpecCode column
 * @method RationQuery groupByRdrefno() Group by the RDRefNo column
 * @method RationQuery groupByDataref1() Group by the DataRef1 column
 * @method RationQuery groupByEvacrate1() Group by the EvacRate1 column
 * @method RationQuery groupByFoodi() Group by the FoodI column
 * @method RationQuery groupByRd1() Group by the Rd1 column
 * @method RationQuery groupByFoodii() Group by the FoodII column
 * @method RationQuery groupByGce() Group by the GCE column
 * @method RationQuery groupByFoodname() Group by the FoodName column
 * @method RationQuery groupByTbw() Group by the TBW column
 * @method RationQuery groupByWater() Group by the Water column
 * @method RationQuery groupByLocality() Group by the Locality column
 * @method RationQuery groupBySalinity() Group by the Salinity column
 * @method RationQuery groupByCCode() Group by the C_Code column
 * @method RationQuery groupByComrdk1() Group by the ComRDK1 column
 * @method RationQuery groupByMethrdevacref() Group by the MethRDEvacRef column
 * @method RationQuery groupByEvacrate2() Group by the EvacRate2 column
 * @method RationQuery groupByFeedbegin1() Group by the FeedBegin1 column
 * @method RationQuery groupByFeedbegin2() Group by the FeedBegin2 column
 * @method RationQuery groupByRd2() Group by the RD2 column
 * @method RationQuery groupByFeedstop1() Group by the FeedStop1 column
 * @method RationQuery groupByFeedstop2() Group by the FeedStop2 column
 * @method RationQuery groupByDailyfeedingcycle() Group by the DailyFeedingCycle column
 * @method RationQuery groupByComment() Group by the Comment column
 * @method RationQuery groupByEntered() Group by the Entered column
 * @method RationQuery groupByDateentered() Group by the DateEntered column
 * @method RationQuery groupByModified() Group by the Modified column
 * @method RationQuery groupByDatemodified() Group by the DateModified column
 * @method RationQuery groupByExpert() Group by the Expert column
 * @method RationQuery groupByDatechecked() Group by the DateChecked column
 * @method RationQuery groupByTs() Group by the TS column
 *
 * @method RationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Ration findOne(PropelPDO $con = null) Return the first Ration matching the query
 * @method Ration findOneOrCreate(PropelPDO $con = null) Return the first Ration matching the query, or a new Ration object populated from the query conditions when no match is found
 *
 * @method Ration findOneByStockcode(int $StockCode) Return the first Ration filtered by the StockCode column
 * @method Ration findOneBySpeccode(int $SpecCode) Return the first Ration filtered by the SpecCode column
 * @method Ration findOneByRdrefno(int $RDRefNo) Return the first Ration filtered by the RDRefNo column
 * @method Ration findOneByDataref1(int $DataRef1) Return the first Ration filtered by the DataRef1 column
 * @method Ration findOneByEvacrate1(double $EvacRate1) Return the first Ration filtered by the EvacRate1 column
 * @method Ration findOneByFoodi(string $FoodI) Return the first Ration filtered by the FoodI column
 * @method Ration findOneByRd1(double $Rd1) Return the first Ration filtered by the Rd1 column
 * @method Ration findOneByFoodii(string $FoodII) Return the first Ration filtered by the FoodII column
 * @method Ration findOneByGce(double $GCE) Return the first Ration filtered by the GCE column
 * @method Ration findOneByFoodname(string $FoodName) Return the first Ration filtered by the FoodName column
 * @method Ration findOneByTbw(double $TBW) Return the first Ration filtered by the TBW column
 * @method Ration findOneByWater(double $Water) Return the first Ration filtered by the Water column
 * @method Ration findOneByLocality(string $Locality) Return the first Ration filtered by the Locality column
 * @method Ration findOneBySalinity(string $Salinity) Return the first Ration filtered by the Salinity column
 * @method Ration findOneByCCode(string $C_Code) Return the first Ration filtered by the C_Code column
 * @method Ration findOneByComrdk1(string $ComRDK1) Return the first Ration filtered by the ComRDK1 column
 * @method Ration findOneByMethrdevacref(int $MethRDEvacRef) Return the first Ration filtered by the MethRDEvacRef column
 * @method Ration findOneByEvacrate2(string $EvacRate2) Return the first Ration filtered by the EvacRate2 column
 * @method Ration findOneByFeedbegin1(string $FeedBegin1) Return the first Ration filtered by the FeedBegin1 column
 * @method Ration findOneByFeedbegin2(string $FeedBegin2) Return the first Ration filtered by the FeedBegin2 column
 * @method Ration findOneByRd2(string $RD2) Return the first Ration filtered by the RD2 column
 * @method Ration findOneByFeedstop1(string $FeedStop1) Return the first Ration filtered by the FeedStop1 column
 * @method Ration findOneByFeedstop2(string $FeedStop2) Return the first Ration filtered by the FeedStop2 column
 * @method Ration findOneByDailyfeedingcycle(string $DailyFeedingCycle) Return the first Ration filtered by the DailyFeedingCycle column
 * @method Ration findOneByComment(string $Comment) Return the first Ration filtered by the Comment column
 * @method Ration findOneByEntered(int $Entered) Return the first Ration filtered by the Entered column
 * @method Ration findOneByDateentered(string $DateEntered) Return the first Ration filtered by the DateEntered column
 * @method Ration findOneByModified(int $Modified) Return the first Ration filtered by the Modified column
 * @method Ration findOneByDatemodified(string $DateModified) Return the first Ration filtered by the DateModified column
 * @method Ration findOneByExpert(int $Expert) Return the first Ration filtered by the Expert column
 * @method Ration findOneByDatechecked(string $DateChecked) Return the first Ration filtered by the DateChecked column
 * @method Ration findOneByTs(string $TS) Return the first Ration filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Ration objects filtered by the AutoCtr column
 * @method array findByStockcode(int $StockCode) Return Ration objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Ration objects filtered by the SpecCode column
 * @method array findByRdrefno(int $RDRefNo) Return Ration objects filtered by the RDRefNo column
 * @method array findByDataref1(int $DataRef1) Return Ration objects filtered by the DataRef1 column
 * @method array findByEvacrate1(double $EvacRate1) Return Ration objects filtered by the EvacRate1 column
 * @method array findByFoodi(string $FoodI) Return Ration objects filtered by the FoodI column
 * @method array findByRd1(double $Rd1) Return Ration objects filtered by the Rd1 column
 * @method array findByFoodii(string $FoodII) Return Ration objects filtered by the FoodII column
 * @method array findByGce(double $GCE) Return Ration objects filtered by the GCE column
 * @method array findByFoodname(string $FoodName) Return Ration objects filtered by the FoodName column
 * @method array findByTbw(double $TBW) Return Ration objects filtered by the TBW column
 * @method array findByWater(double $Water) Return Ration objects filtered by the Water column
 * @method array findByLocality(string $Locality) Return Ration objects filtered by the Locality column
 * @method array findBySalinity(string $Salinity) Return Ration objects filtered by the Salinity column
 * @method array findByCCode(string $C_Code) Return Ration objects filtered by the C_Code column
 * @method array findByComrdk1(string $ComRDK1) Return Ration objects filtered by the ComRDK1 column
 * @method array findByMethrdevacref(int $MethRDEvacRef) Return Ration objects filtered by the MethRDEvacRef column
 * @method array findByEvacrate2(string $EvacRate2) Return Ration objects filtered by the EvacRate2 column
 * @method array findByFeedbegin1(string $FeedBegin1) Return Ration objects filtered by the FeedBegin1 column
 * @method array findByFeedbegin2(string $FeedBegin2) Return Ration objects filtered by the FeedBegin2 column
 * @method array findByRd2(string $RD2) Return Ration objects filtered by the RD2 column
 * @method array findByFeedstop1(string $FeedStop1) Return Ration objects filtered by the FeedStop1 column
 * @method array findByFeedstop2(string $FeedStop2) Return Ration objects filtered by the FeedStop2 column
 * @method array findByDailyfeedingcycle(string $DailyFeedingCycle) Return Ration objects filtered by the DailyFeedingCycle column
 * @method array findByComment(string $Comment) Return Ration objects filtered by the Comment column
 * @method array findByEntered(int $Entered) Return Ration objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Ration objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Ration objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Ration objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Ration objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Ration objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Ration objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseRationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRationQuery object.
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
            $modelName = 'Ration';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RationQuery) {
            return $criteria;
        }
        $query = new RationQuery(null, null, $modelAlias);

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
     * @return   Ration|Ration[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ration A model object, or null if the key is not found
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
     * @return                 Ration A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `StockCode`, `SpecCode`, `RDRefNo`, `DataRef1`, `EvacRate1`, `FoodI`, `Rd1`, `FoodII`, `GCE`, `FoodName`, `TBW`, `Water`, `Locality`, `Salinity`, `C_Code`, `ComRDK1`, `MethRDEvacRef`, `EvacRate2`, `FeedBegin1`, `FeedBegin2`, `RD2`, `FeedStop1`, `FeedStop2`, `DailyFeedingCycle`, `Comment`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `ration` WHERE `AutoCtr` = :p0';
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
            $obj = new Ration();
            $obj->hydrate($row);
            RationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ration|Ration[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ration[]|mixed the list of results, formatted by the current formatter
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
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RationPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RationPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(RationPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(RationPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(RationPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(RationPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return RationQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(RationPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(RationPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the RDRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByRdrefno(1234); // WHERE RDRefNo = 1234
     * $query->filterByRdrefno(array(12, 34)); // WHERE RDRefNo IN (12, 34)
     * $query->filterByRdrefno(array('min' => 12)); // WHERE RDRefNo >= 12
     * $query->filterByRdrefno(array('max' => 12)); // WHERE RDRefNo <= 12
     * </code>
     *
     * @param     mixed $rdrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByRdrefno($rdrefno = null, $comparison = null)
    {
        if (is_array($rdrefno)) {
            $useMinMax = false;
            if (isset($rdrefno['min'])) {
                $this->addUsingAlias(RationPeer::RDREFNO, $rdrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rdrefno['max'])) {
                $this->addUsingAlias(RationPeer::RDREFNO, $rdrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::RDREFNO, $rdrefno, $comparison);
    }

    /**
     * Filter the query on the DataRef1 column
     *
     * Example usage:
     * <code>
     * $query->filterByDataref1(1234); // WHERE DataRef1 = 1234
     * $query->filterByDataref1(array(12, 34)); // WHERE DataRef1 IN (12, 34)
     * $query->filterByDataref1(array('min' => 12)); // WHERE DataRef1 >= 12
     * $query->filterByDataref1(array('max' => 12)); // WHERE DataRef1 <= 12
     * </code>
     *
     * @param     mixed $dataref1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByDataref1($dataref1 = null, $comparison = null)
    {
        if (is_array($dataref1)) {
            $useMinMax = false;
            if (isset($dataref1['min'])) {
                $this->addUsingAlias(RationPeer::DATAREF1, $dataref1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataref1['max'])) {
                $this->addUsingAlias(RationPeer::DATAREF1, $dataref1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::DATAREF1, $dataref1, $comparison);
    }

    /**
     * Filter the query on the EvacRate1 column
     *
     * Example usage:
     * <code>
     * $query->filterByEvacrate1(1234); // WHERE EvacRate1 = 1234
     * $query->filterByEvacrate1(array(12, 34)); // WHERE EvacRate1 IN (12, 34)
     * $query->filterByEvacrate1(array('min' => 12)); // WHERE EvacRate1 >= 12
     * $query->filterByEvacrate1(array('max' => 12)); // WHERE EvacRate1 <= 12
     * </code>
     *
     * @param     mixed $evacrate1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByEvacrate1($evacrate1 = null, $comparison = null)
    {
        if (is_array($evacrate1)) {
            $useMinMax = false;
            if (isset($evacrate1['min'])) {
                $this->addUsingAlias(RationPeer::EVACRATE1, $evacrate1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evacrate1['max'])) {
                $this->addUsingAlias(RationPeer::EVACRATE1, $evacrate1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::EVACRATE1, $evacrate1, $comparison);
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
     * @return RationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RationPeer::FOODI, $foodi, $comparison);
    }

    /**
     * Filter the query on the Rd1 column
     *
     * Example usage:
     * <code>
     * $query->filterByRd1(1234); // WHERE Rd1 = 1234
     * $query->filterByRd1(array(12, 34)); // WHERE Rd1 IN (12, 34)
     * $query->filterByRd1(array('min' => 12)); // WHERE Rd1 >= 12
     * $query->filterByRd1(array('max' => 12)); // WHERE Rd1 <= 12
     * </code>
     *
     * @param     mixed $rd1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByRd1($rd1 = null, $comparison = null)
    {
        if (is_array($rd1)) {
            $useMinMax = false;
            if (isset($rd1['min'])) {
                $this->addUsingAlias(RationPeer::RD1, $rd1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rd1['max'])) {
                $this->addUsingAlias(RationPeer::RD1, $rd1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::RD1, $rd1, $comparison);
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
     * @return RationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RationPeer::FOODII, $foodii, $comparison);
    }

    /**
     * Filter the query on the GCE column
     *
     * Example usage:
     * <code>
     * $query->filterByGce(1234); // WHERE GCE = 1234
     * $query->filterByGce(array(12, 34)); // WHERE GCE IN (12, 34)
     * $query->filterByGce(array('min' => 12)); // WHERE GCE >= 12
     * $query->filterByGce(array('max' => 12)); // WHERE GCE <= 12
     * </code>
     *
     * @param     mixed $gce The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByGce($gce = null, $comparison = null)
    {
        if (is_array($gce)) {
            $useMinMax = false;
            if (isset($gce['min'])) {
                $this->addUsingAlias(RationPeer::GCE, $gce['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gce['max'])) {
                $this->addUsingAlias(RationPeer::GCE, $gce['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::GCE, $gce, $comparison);
    }

    /**
     * Filter the query on the FoodName column
     *
     * Example usage:
     * <code>
     * $query->filterByFoodname('fooValue');   // WHERE FoodName = 'fooValue'
     * $query->filterByFoodname('%fooValue%'); // WHERE FoodName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $foodname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RationPeer::FOODNAME, $foodname, $comparison);
    }

    /**
     * Filter the query on the TBW column
     *
     * Example usage:
     * <code>
     * $query->filterByTbw(1234); // WHERE TBW = 1234
     * $query->filterByTbw(array(12, 34)); // WHERE TBW IN (12, 34)
     * $query->filterByTbw(array('min' => 12)); // WHERE TBW >= 12
     * $query->filterByTbw(array('max' => 12)); // WHERE TBW <= 12
     * </code>
     *
     * @param     mixed $tbw The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByTbw($tbw = null, $comparison = null)
    {
        if (is_array($tbw)) {
            $useMinMax = false;
            if (isset($tbw['min'])) {
                $this->addUsingAlias(RationPeer::TBW, $tbw['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tbw['max'])) {
                $this->addUsingAlias(RationPeer::TBW, $tbw['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::TBW, $tbw, $comparison);
    }

    /**
     * Filter the query on the Water column
     *
     * Example usage:
     * <code>
     * $query->filterByWater(1234); // WHERE Water = 1234
     * $query->filterByWater(array(12, 34)); // WHERE Water IN (12, 34)
     * $query->filterByWater(array('min' => 12)); // WHERE Water >= 12
     * $query->filterByWater(array('max' => 12)); // WHERE Water <= 12
     * </code>
     *
     * @param     mixed $water The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByWater($water = null, $comparison = null)
    {
        if (is_array($water)) {
            $useMinMax = false;
            if (isset($water['min'])) {
                $this->addUsingAlias(RationPeer::WATER, $water['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($water['max'])) {
                $this->addUsingAlias(RationPeer::WATER, $water['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::WATER, $water, $comparison);
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
     * @return RationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RationPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the Salinity column
     *
     * Example usage:
     * <code>
     * $query->filterBySalinity('fooValue');   // WHERE Salinity = 'fooValue'
     * $query->filterBySalinity('%fooValue%'); // WHERE Salinity LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salinity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterBySalinity($salinity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salinity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $salinity)) {
                $salinity = str_replace('*', '%', $salinity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RationPeer::SALINITY, $salinity, $comparison);
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
     * @return RationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(RationPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the ComRDK1 column
     *
     * Example usage:
     * <code>
     * $query->filterByComrdk1('fooValue');   // WHERE ComRDK1 = 'fooValue'
     * $query->filterByComrdk1('%fooValue%'); // WHERE ComRDK1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comrdk1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByComrdk1($comrdk1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comrdk1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comrdk1)) {
                $comrdk1 = str_replace('*', '%', $comrdk1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RationPeer::COMRDK1, $comrdk1, $comparison);
    }

    /**
     * Filter the query on the MethRDEvacRef column
     *
     * Example usage:
     * <code>
     * $query->filterByMethrdevacref(1234); // WHERE MethRDEvacRef = 1234
     * $query->filterByMethrdevacref(array(12, 34)); // WHERE MethRDEvacRef IN (12, 34)
     * $query->filterByMethrdevacref(array('min' => 12)); // WHERE MethRDEvacRef >= 12
     * $query->filterByMethrdevacref(array('max' => 12)); // WHERE MethRDEvacRef <= 12
     * </code>
     *
     * @param     mixed $methrdevacref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByMethrdevacref($methrdevacref = null, $comparison = null)
    {
        if (is_array($methrdevacref)) {
            $useMinMax = false;
            if (isset($methrdevacref['min'])) {
                $this->addUsingAlias(RationPeer::METHRDEVACREF, $methrdevacref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($methrdevacref['max'])) {
                $this->addUsingAlias(RationPeer::METHRDEVACREF, $methrdevacref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::METHRDEVACREF, $methrdevacref, $comparison);
    }

    /**
     * Filter the query on the EvacRate2 column
     *
     * Example usage:
     * <code>
     * $query->filterByEvacrate2('fooValue');   // WHERE EvacRate2 = 'fooValue'
     * $query->filterByEvacrate2('%fooValue%'); // WHERE EvacRate2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $evacrate2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByEvacrate2($evacrate2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($evacrate2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $evacrate2)) {
                $evacrate2 = str_replace('*', '%', $evacrate2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RationPeer::EVACRATE2, $evacrate2, $comparison);
    }

    /**
     * Filter the query on the FeedBegin1 column
     *
     * Example usage:
     * <code>
     * $query->filterByFeedbegin1('2011-03-14'); // WHERE FeedBegin1 = '2011-03-14'
     * $query->filterByFeedbegin1('now'); // WHERE FeedBegin1 = '2011-03-14'
     * $query->filterByFeedbegin1(array('max' => 'yesterday')); // WHERE FeedBegin1 < '2011-03-13'
     * </code>
     *
     * @param     mixed $feedbegin1 The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByFeedbegin1($feedbegin1 = null, $comparison = null)
    {
        if (is_array($feedbegin1)) {
            $useMinMax = false;
            if (isset($feedbegin1['min'])) {
                $this->addUsingAlias(RationPeer::FEEDBEGIN1, $feedbegin1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($feedbegin1['max'])) {
                $this->addUsingAlias(RationPeer::FEEDBEGIN1, $feedbegin1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::FEEDBEGIN1, $feedbegin1, $comparison);
    }

    /**
     * Filter the query on the FeedBegin2 column
     *
     * Example usage:
     * <code>
     * $query->filterByFeedbegin2('2011-03-14'); // WHERE FeedBegin2 = '2011-03-14'
     * $query->filterByFeedbegin2('now'); // WHERE FeedBegin2 = '2011-03-14'
     * $query->filterByFeedbegin2(array('max' => 'yesterday')); // WHERE FeedBegin2 < '2011-03-13'
     * </code>
     *
     * @param     mixed $feedbegin2 The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByFeedbegin2($feedbegin2 = null, $comparison = null)
    {
        if (is_array($feedbegin2)) {
            $useMinMax = false;
            if (isset($feedbegin2['min'])) {
                $this->addUsingAlias(RationPeer::FEEDBEGIN2, $feedbegin2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($feedbegin2['max'])) {
                $this->addUsingAlias(RationPeer::FEEDBEGIN2, $feedbegin2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::FEEDBEGIN2, $feedbegin2, $comparison);
    }

    /**
     * Filter the query on the RD2 column
     *
     * Example usage:
     * <code>
     * $query->filterByRd2('fooValue');   // WHERE RD2 = 'fooValue'
     * $query->filterByRd2('%fooValue%'); // WHERE RD2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rd2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByRd2($rd2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rd2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rd2)) {
                $rd2 = str_replace('*', '%', $rd2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RationPeer::RD2, $rd2, $comparison);
    }

    /**
     * Filter the query on the FeedStop1 column
     *
     * Example usage:
     * <code>
     * $query->filterByFeedstop1('2011-03-14'); // WHERE FeedStop1 = '2011-03-14'
     * $query->filterByFeedstop1('now'); // WHERE FeedStop1 = '2011-03-14'
     * $query->filterByFeedstop1(array('max' => 'yesterday')); // WHERE FeedStop1 < '2011-03-13'
     * </code>
     *
     * @param     mixed $feedstop1 The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByFeedstop1($feedstop1 = null, $comparison = null)
    {
        if (is_array($feedstop1)) {
            $useMinMax = false;
            if (isset($feedstop1['min'])) {
                $this->addUsingAlias(RationPeer::FEEDSTOP1, $feedstop1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($feedstop1['max'])) {
                $this->addUsingAlias(RationPeer::FEEDSTOP1, $feedstop1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::FEEDSTOP1, $feedstop1, $comparison);
    }

    /**
     * Filter the query on the FeedStop2 column
     *
     * Example usage:
     * <code>
     * $query->filterByFeedstop2('2011-03-14'); // WHERE FeedStop2 = '2011-03-14'
     * $query->filterByFeedstop2('now'); // WHERE FeedStop2 = '2011-03-14'
     * $query->filterByFeedstop2(array('max' => 'yesterday')); // WHERE FeedStop2 < '2011-03-13'
     * </code>
     *
     * @param     mixed $feedstop2 The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByFeedstop2($feedstop2 = null, $comparison = null)
    {
        if (is_array($feedstop2)) {
            $useMinMax = false;
            if (isset($feedstop2['min'])) {
                $this->addUsingAlias(RationPeer::FEEDSTOP2, $feedstop2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($feedstop2['max'])) {
                $this->addUsingAlias(RationPeer::FEEDSTOP2, $feedstop2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::FEEDSTOP2, $feedstop2, $comparison);
    }

    /**
     * Filter the query on the DailyFeedingCycle column
     *
     * Example usage:
     * <code>
     * $query->filterByDailyfeedingcycle('fooValue');   // WHERE DailyFeedingCycle = 'fooValue'
     * $query->filterByDailyfeedingcycle('%fooValue%'); // WHERE DailyFeedingCycle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dailyfeedingcycle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByDailyfeedingcycle($dailyfeedingcycle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dailyfeedingcycle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dailyfeedingcycle)) {
                $dailyfeedingcycle = str_replace('*', '%', $dailyfeedingcycle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RationPeer::DAILYFEEDINGCYCLE, $dailyfeedingcycle, $comparison);
    }

    /**
     * Filter the query on the Comment column
     *
     * Example usage:
     * <code>
     * $query->filterByComment('fooValue');   // WHERE Comment = 'fooValue'
     * $query->filterByComment('%fooValue%'); // WHERE Comment LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comment The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByComment($comment = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comment)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comment)) {
                $comment = str_replace('*', '%', $comment);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RationPeer::COMMENT, $comment, $comparison);
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
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(RationPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(RationPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::ENTERED, $entered, $comparison);
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
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(RationPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(RationPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(RationPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(RationPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::MODIFIED, $modified, $comparison);
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
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(RationPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(RationPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(RationPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(RationPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::EXPERT, $expert, $comparison);
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
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(RationPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(RationPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return RationQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(RationPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(RationPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RationPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Ration $ration Object to remove from the list of results
     *
     * @return RationQuery The current query, for fluid interface
     */
    public function prune($ration = null)
    {
        if ($ration) {
            $this->addUsingAlias(RationPeer::AUTOCTR, $ration->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
