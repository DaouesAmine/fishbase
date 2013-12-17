<?php


/**
 * Base class that represents a query for the 'maturity' table.
 *
 *
 *
 * @method MaturityQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method MaturityQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method MaturityQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method MaturityQuery orderByMaturityrefno($order = Criteria::ASC) Order by the MaturityRefNo column
 * @method MaturityQuery orderBySex($order = Criteria::ASC) Order by the Sex column
 * @method MaturityQuery orderByAgematmin($order = Criteria::ASC) Order by the AgeMatMin column
 * @method MaturityQuery orderByAgematmin2($order = Criteria::ASC) Order by the AgeMatMin2 column
 * @method MaturityQuery orderByAgematref($order = Criteria::ASC) Order by the AgeMatRef column
 * @method MaturityQuery orderByTm($order = Criteria::ASC) Order by the tm column
 * @method MaturityQuery orderByNumber($order = Criteria::ASC) Order by the Number column
 * @method MaturityQuery orderByR2($order = Criteria::ASC) Order by the r2 column
 * @method MaturityQuery orderBySeTm($order = Criteria::ASC) Order by the SE_tm column
 * @method MaturityQuery orderBySdTm($order = Criteria::ASC) Order by the SD_tm column
 * @method MaturityQuery orderByLclTm($order = Criteria::ASC) Order by the LCL_tm column
 * @method MaturityQuery orderByUclTm($order = Criteria::ASC) Order by the UCL_tm column
 * @method MaturityQuery orderByLengthmatmin($order = Criteria::ASC) Order by the LengthMatMin column
 * @method MaturityQuery orderByLengthmatmin2($order = Criteria::ASC) Order by the LengthMatMin2 column
 * @method MaturityQuery orderByType1($order = Criteria::ASC) Order by the Type1 column
 * @method MaturityQuery orderByLengthmatref($order = Criteria::ASC) Order by the LengthMatRef column
 * @method MaturityQuery orderByLm($order = Criteria::ASC) Order by the Lm column
 * @method MaturityQuery orderBySeLm($order = Criteria::ASC) Order by the SE_Lm column
 * @method MaturityQuery orderBySdLm($order = Criteria::ASC) Order by the SD_Lm column
 * @method MaturityQuery orderByLclLm($order = Criteria::ASC) Order by the LCL_Lm column
 * @method MaturityQuery orderByUclLm($order = Criteria::ASC) Order by the UCL_Lm column
 * @method MaturityQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method MaturityQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method MaturityQuery orderByECode($order = Criteria::ASC) Order by the E_CODE column
 * @method MaturityQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method MaturityQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method MaturityQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method MaturityQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method MaturityQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method MaturityQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method MaturityQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method MaturityQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method MaturityQuery groupByAutoctr() Group by the autoctr column
 * @method MaturityQuery groupBySpeccode() Group by the Speccode column
 * @method MaturityQuery groupByStockcode() Group by the StockCode column
 * @method MaturityQuery groupByMaturityrefno() Group by the MaturityRefNo column
 * @method MaturityQuery groupBySex() Group by the Sex column
 * @method MaturityQuery groupByAgematmin() Group by the AgeMatMin column
 * @method MaturityQuery groupByAgematmin2() Group by the AgeMatMin2 column
 * @method MaturityQuery groupByAgematref() Group by the AgeMatRef column
 * @method MaturityQuery groupByTm() Group by the tm column
 * @method MaturityQuery groupByNumber() Group by the Number column
 * @method MaturityQuery groupByR2() Group by the r2 column
 * @method MaturityQuery groupBySeTm() Group by the SE_tm column
 * @method MaturityQuery groupBySdTm() Group by the SD_tm column
 * @method MaturityQuery groupByLclTm() Group by the LCL_tm column
 * @method MaturityQuery groupByUclTm() Group by the UCL_tm column
 * @method MaturityQuery groupByLengthmatmin() Group by the LengthMatMin column
 * @method MaturityQuery groupByLengthmatmin2() Group by the LengthMatMin2 column
 * @method MaturityQuery groupByType1() Group by the Type1 column
 * @method MaturityQuery groupByLengthmatref() Group by the LengthMatRef column
 * @method MaturityQuery groupByLm() Group by the Lm column
 * @method MaturityQuery groupBySeLm() Group by the SE_Lm column
 * @method MaturityQuery groupBySdLm() Group by the SD_Lm column
 * @method MaturityQuery groupByLclLm() Group by the LCL_Lm column
 * @method MaturityQuery groupByUclLm() Group by the UCL_Lm column
 * @method MaturityQuery groupByLocality() Group by the Locality column
 * @method MaturityQuery groupByCCode() Group by the C_Code column
 * @method MaturityQuery groupByECode() Group by the E_CODE column
 * @method MaturityQuery groupByComment() Group by the Comment column
 * @method MaturityQuery groupByEntered() Group by the Entered column
 * @method MaturityQuery groupByDateentered() Group by the DateEntered column
 * @method MaturityQuery groupByModified() Group by the Modified column
 * @method MaturityQuery groupByDatemodified() Group by the DateModified column
 * @method MaturityQuery groupByExpert() Group by the Expert column
 * @method MaturityQuery groupByDatechecked() Group by the DateChecked column
 * @method MaturityQuery groupByTs() Group by the TS column
 *
 * @method MaturityQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MaturityQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MaturityQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Maturity findOne(PropelPDO $con = null) Return the first Maturity matching the query
 * @method Maturity findOneOrCreate(PropelPDO $con = null) Return the first Maturity matching the query, or a new Maturity object populated from the query conditions when no match is found
 *
 * @method Maturity findOneByAutoctr(int $autoctr) Return the first Maturity filtered by the autoctr column
 * @method Maturity findOneBySpeccode(int $Speccode) Return the first Maturity filtered by the Speccode column
 * @method Maturity findOneByStockcode(int $StockCode) Return the first Maturity filtered by the StockCode column
 * @method Maturity findOneByMaturityrefno(int $MaturityRefNo) Return the first Maturity filtered by the MaturityRefNo column
 * @method Maturity findOneBySex(string $Sex) Return the first Maturity filtered by the Sex column
 * @method Maturity findOneByAgematmin(double $AgeMatMin) Return the first Maturity filtered by the AgeMatMin column
 * @method Maturity findOneByAgematmin2(double $AgeMatMin2) Return the first Maturity filtered by the AgeMatMin2 column
 * @method Maturity findOneByAgematref(int $AgeMatRef) Return the first Maturity filtered by the AgeMatRef column
 * @method Maturity findOneByTm(double $tm) Return the first Maturity filtered by the tm column
 * @method Maturity findOneByNumber(int $Number) Return the first Maturity filtered by the Number column
 * @method Maturity findOneByR2(double $r2) Return the first Maturity filtered by the r2 column
 * @method Maturity findOneBySeTm(double $SE_tm) Return the first Maturity filtered by the SE_tm column
 * @method Maturity findOneBySdTm(double $SD_tm) Return the first Maturity filtered by the SD_tm column
 * @method Maturity findOneByLclTm(double $LCL_tm) Return the first Maturity filtered by the LCL_tm column
 * @method Maturity findOneByUclTm(double $UCL_tm) Return the first Maturity filtered by the UCL_tm column
 * @method Maturity findOneByLengthmatmin(double $LengthMatMin) Return the first Maturity filtered by the LengthMatMin column
 * @method Maturity findOneByLengthmatmin2(double $LengthMatMin2) Return the first Maturity filtered by the LengthMatMin2 column
 * @method Maturity findOneByType1(string $Type1) Return the first Maturity filtered by the Type1 column
 * @method Maturity findOneByLengthmatref(int $LengthMatRef) Return the first Maturity filtered by the LengthMatRef column
 * @method Maturity findOneByLm(double $Lm) Return the first Maturity filtered by the Lm column
 * @method Maturity findOneBySeLm(double $SE_Lm) Return the first Maturity filtered by the SE_Lm column
 * @method Maturity findOneBySdLm(double $SD_Lm) Return the first Maturity filtered by the SD_Lm column
 * @method Maturity findOneByLclLm(double $LCL_Lm) Return the first Maturity filtered by the LCL_Lm column
 * @method Maturity findOneByUclLm(double $UCL_Lm) Return the first Maturity filtered by the UCL_Lm column
 * @method Maturity findOneByLocality(string $Locality) Return the first Maturity filtered by the Locality column
 * @method Maturity findOneByCCode(string $C_Code) Return the first Maturity filtered by the C_Code column
 * @method Maturity findOneByECode(int $E_CODE) Return the first Maturity filtered by the E_CODE column
 * @method Maturity findOneByComment(string $Comment) Return the first Maturity filtered by the Comment column
 * @method Maturity findOneByEntered(int $Entered) Return the first Maturity filtered by the Entered column
 * @method Maturity findOneByDateentered(string $DateEntered) Return the first Maturity filtered by the DateEntered column
 * @method Maturity findOneByModified(int $Modified) Return the first Maturity filtered by the Modified column
 * @method Maturity findOneByDatemodified(string $DateModified) Return the first Maturity filtered by the DateModified column
 * @method Maturity findOneByExpert(int $Expert) Return the first Maturity filtered by the Expert column
 * @method Maturity findOneByDatechecked(string $DateChecked) Return the first Maturity filtered by the DateChecked column
 * @method Maturity findOneByTs(string $TS) Return the first Maturity filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Maturity objects filtered by the autoctr column
 * @method array findBySpeccode(int $Speccode) Return Maturity objects filtered by the Speccode column
 * @method array findByStockcode(int $StockCode) Return Maturity objects filtered by the StockCode column
 * @method array findByMaturityrefno(int $MaturityRefNo) Return Maturity objects filtered by the MaturityRefNo column
 * @method array findBySex(string $Sex) Return Maturity objects filtered by the Sex column
 * @method array findByAgematmin(double $AgeMatMin) Return Maturity objects filtered by the AgeMatMin column
 * @method array findByAgematmin2(double $AgeMatMin2) Return Maturity objects filtered by the AgeMatMin2 column
 * @method array findByAgematref(int $AgeMatRef) Return Maturity objects filtered by the AgeMatRef column
 * @method array findByTm(double $tm) Return Maturity objects filtered by the tm column
 * @method array findByNumber(int $Number) Return Maturity objects filtered by the Number column
 * @method array findByR2(double $r2) Return Maturity objects filtered by the r2 column
 * @method array findBySeTm(double $SE_tm) Return Maturity objects filtered by the SE_tm column
 * @method array findBySdTm(double $SD_tm) Return Maturity objects filtered by the SD_tm column
 * @method array findByLclTm(double $LCL_tm) Return Maturity objects filtered by the LCL_tm column
 * @method array findByUclTm(double $UCL_tm) Return Maturity objects filtered by the UCL_tm column
 * @method array findByLengthmatmin(double $LengthMatMin) Return Maturity objects filtered by the LengthMatMin column
 * @method array findByLengthmatmin2(double $LengthMatMin2) Return Maturity objects filtered by the LengthMatMin2 column
 * @method array findByType1(string $Type1) Return Maturity objects filtered by the Type1 column
 * @method array findByLengthmatref(int $LengthMatRef) Return Maturity objects filtered by the LengthMatRef column
 * @method array findByLm(double $Lm) Return Maturity objects filtered by the Lm column
 * @method array findBySeLm(double $SE_Lm) Return Maturity objects filtered by the SE_Lm column
 * @method array findBySdLm(double $SD_Lm) Return Maturity objects filtered by the SD_Lm column
 * @method array findByLclLm(double $LCL_Lm) Return Maturity objects filtered by the LCL_Lm column
 * @method array findByUclLm(double $UCL_Lm) Return Maturity objects filtered by the UCL_Lm column
 * @method array findByLocality(string $Locality) Return Maturity objects filtered by the Locality column
 * @method array findByCCode(string $C_Code) Return Maturity objects filtered by the C_Code column
 * @method array findByECode(int $E_CODE) Return Maturity objects filtered by the E_CODE column
 * @method array findByComment(string $Comment) Return Maturity objects filtered by the Comment column
 * @method array findByEntered(int $Entered) Return Maturity objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Maturity objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Maturity objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Maturity objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Maturity objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Maturity objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Maturity objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseMaturityQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMaturityQuery object.
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
            $modelName = 'Maturity';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MaturityQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MaturityQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MaturityQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MaturityQuery) {
            return $criteria;
        }
        $query = new MaturityQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$StockCode, $MaturityRefNo, $Sex, $Locality]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Maturity|Maturity[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MaturityPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MaturityPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Maturity A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `Speccode`, `StockCode`, `MaturityRefNo`, `Sex`, `AgeMatMin`, `AgeMatMin2`, `AgeMatRef`, `tm`, `Number`, `r2`, `SE_tm`, `SD_tm`, `LCL_tm`, `UCL_tm`, `LengthMatMin`, `LengthMatMin2`, `Type1`, `LengthMatRef`, `Lm`, `SE_Lm`, `SD_Lm`, `LCL_Lm`, `UCL_Lm`, `Locality`, `C_Code`, `E_CODE`, `Comment`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `maturity` WHERE `StockCode` = :p0 AND `MaturityRefNo` = :p1 AND `Sex` = :p2 AND `Locality` = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Maturity();
            $obj->hydrate($row);
            MaturityPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3])));
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
     * @return Maturity|Maturity[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Maturity[]|mixed the list of results, formatted by the current formatter
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
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(MaturityPeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(MaturityPeer::MATURITYREFNO, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(MaturityPeer::SEX, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(MaturityPeer::LOCALITY, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(MaturityPeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(MaturityPeer::MATURITYREFNO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(MaturityPeer::SEX, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(MaturityPeer::LOCALITY, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
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
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(MaturityPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(MaturityPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the Speccode column
     *
     * Example usage:
     * <code>
     * $query->filterBySpeccode(1234); // WHERE Speccode = 1234
     * $query->filterBySpeccode(array(12, 34)); // WHERE Speccode IN (12, 34)
     * $query->filterBySpeccode(array('min' => 12)); // WHERE Speccode >= 12
     * $query->filterBySpeccode(array('max' => 12)); // WHERE Speccode <= 12
     * </code>
     *
     * @param     mixed $speccode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(MaturityPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(MaturityPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::SPECCODE, $speccode, $comparison);
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
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(MaturityPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(MaturityPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the MaturityRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByMaturityrefno(1234); // WHERE MaturityRefNo = 1234
     * $query->filterByMaturityrefno(array(12, 34)); // WHERE MaturityRefNo IN (12, 34)
     * $query->filterByMaturityrefno(array('min' => 12)); // WHERE MaturityRefNo >= 12
     * $query->filterByMaturityrefno(array('max' => 12)); // WHERE MaturityRefNo <= 12
     * </code>
     *
     * @param     mixed $maturityrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByMaturityrefno($maturityrefno = null, $comparison = null)
    {
        if (is_array($maturityrefno)) {
            $useMinMax = false;
            if (isset($maturityrefno['min'])) {
                $this->addUsingAlias(MaturityPeer::MATURITYREFNO, $maturityrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maturityrefno['max'])) {
                $this->addUsingAlias(MaturityPeer::MATURITYREFNO, $maturityrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::MATURITYREFNO, $maturityrefno, $comparison);
    }

    /**
     * Filter the query on the Sex column
     *
     * Example usage:
     * <code>
     * $query->filterBySex('fooValue');   // WHERE Sex = 'fooValue'
     * $query->filterBySex('%fooValue%'); // WHERE Sex LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sex The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterBySex($sex = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sex)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sex)) {
                $sex = str_replace('*', '%', $sex);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MaturityPeer::SEX, $sex, $comparison);
    }

    /**
     * Filter the query on the AgeMatMin column
     *
     * Example usage:
     * <code>
     * $query->filterByAgematmin(1234); // WHERE AgeMatMin = 1234
     * $query->filterByAgematmin(array(12, 34)); // WHERE AgeMatMin IN (12, 34)
     * $query->filterByAgematmin(array('min' => 12)); // WHERE AgeMatMin >= 12
     * $query->filterByAgematmin(array('max' => 12)); // WHERE AgeMatMin <= 12
     * </code>
     *
     * @param     mixed $agematmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByAgematmin($agematmin = null, $comparison = null)
    {
        if (is_array($agematmin)) {
            $useMinMax = false;
            if (isset($agematmin['min'])) {
                $this->addUsingAlias(MaturityPeer::AGEMATMIN, $agematmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agematmin['max'])) {
                $this->addUsingAlias(MaturityPeer::AGEMATMIN, $agematmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::AGEMATMIN, $agematmin, $comparison);
    }

    /**
     * Filter the query on the AgeMatMin2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAgematmin2(1234); // WHERE AgeMatMin2 = 1234
     * $query->filterByAgematmin2(array(12, 34)); // WHERE AgeMatMin2 IN (12, 34)
     * $query->filterByAgematmin2(array('min' => 12)); // WHERE AgeMatMin2 >= 12
     * $query->filterByAgematmin2(array('max' => 12)); // WHERE AgeMatMin2 <= 12
     * </code>
     *
     * @param     mixed $agematmin2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByAgematmin2($agematmin2 = null, $comparison = null)
    {
        if (is_array($agematmin2)) {
            $useMinMax = false;
            if (isset($agematmin2['min'])) {
                $this->addUsingAlias(MaturityPeer::AGEMATMIN2, $agematmin2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agematmin2['max'])) {
                $this->addUsingAlias(MaturityPeer::AGEMATMIN2, $agematmin2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::AGEMATMIN2, $agematmin2, $comparison);
    }

    /**
     * Filter the query on the AgeMatRef column
     *
     * Example usage:
     * <code>
     * $query->filterByAgematref(1234); // WHERE AgeMatRef = 1234
     * $query->filterByAgematref(array(12, 34)); // WHERE AgeMatRef IN (12, 34)
     * $query->filterByAgematref(array('min' => 12)); // WHERE AgeMatRef >= 12
     * $query->filterByAgematref(array('max' => 12)); // WHERE AgeMatRef <= 12
     * </code>
     *
     * @param     mixed $agematref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByAgematref($agematref = null, $comparison = null)
    {
        if (is_array($agematref)) {
            $useMinMax = false;
            if (isset($agematref['min'])) {
                $this->addUsingAlias(MaturityPeer::AGEMATREF, $agematref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agematref['max'])) {
                $this->addUsingAlias(MaturityPeer::AGEMATREF, $agematref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::AGEMATREF, $agematref, $comparison);
    }

    /**
     * Filter the query on the tm column
     *
     * Example usage:
     * <code>
     * $query->filterByTm(1234); // WHERE tm = 1234
     * $query->filterByTm(array(12, 34)); // WHERE tm IN (12, 34)
     * $query->filterByTm(array('min' => 12)); // WHERE tm >= 12
     * $query->filterByTm(array('max' => 12)); // WHERE tm <= 12
     * </code>
     *
     * @param     mixed $tm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByTm($tm = null, $comparison = null)
    {
        if (is_array($tm)) {
            $useMinMax = false;
            if (isset($tm['min'])) {
                $this->addUsingAlias(MaturityPeer::TM, $tm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tm['max'])) {
                $this->addUsingAlias(MaturityPeer::TM, $tm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::TM, $tm, $comparison);
    }

    /**
     * Filter the query on the Number column
     *
     * Example usage:
     * <code>
     * $query->filterByNumber(1234); // WHERE Number = 1234
     * $query->filterByNumber(array(12, 34)); // WHERE Number IN (12, 34)
     * $query->filterByNumber(array('min' => 12)); // WHERE Number >= 12
     * $query->filterByNumber(array('max' => 12)); // WHERE Number <= 12
     * </code>
     *
     * @param     mixed $number The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByNumber($number = null, $comparison = null)
    {
        if (is_array($number)) {
            $useMinMax = false;
            if (isset($number['min'])) {
                $this->addUsingAlias(MaturityPeer::NUMBER, $number['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($number['max'])) {
                $this->addUsingAlias(MaturityPeer::NUMBER, $number['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::NUMBER, $number, $comparison);
    }

    /**
     * Filter the query on the r2 column
     *
     * Example usage:
     * <code>
     * $query->filterByR2(1234); // WHERE r2 = 1234
     * $query->filterByR2(array(12, 34)); // WHERE r2 IN (12, 34)
     * $query->filterByR2(array('min' => 12)); // WHERE r2 >= 12
     * $query->filterByR2(array('max' => 12)); // WHERE r2 <= 12
     * </code>
     *
     * @param     mixed $r2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByR2($r2 = null, $comparison = null)
    {
        if (is_array($r2)) {
            $useMinMax = false;
            if (isset($r2['min'])) {
                $this->addUsingAlias(MaturityPeer::R2, $r2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($r2['max'])) {
                $this->addUsingAlias(MaturityPeer::R2, $r2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::R2, $r2, $comparison);
    }

    /**
     * Filter the query on the SE_tm column
     *
     * Example usage:
     * <code>
     * $query->filterBySeTm(1234); // WHERE SE_tm = 1234
     * $query->filterBySeTm(array(12, 34)); // WHERE SE_tm IN (12, 34)
     * $query->filterBySeTm(array('min' => 12)); // WHERE SE_tm >= 12
     * $query->filterBySeTm(array('max' => 12)); // WHERE SE_tm <= 12
     * </code>
     *
     * @param     mixed $seTm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterBySeTm($seTm = null, $comparison = null)
    {
        if (is_array($seTm)) {
            $useMinMax = false;
            if (isset($seTm['min'])) {
                $this->addUsingAlias(MaturityPeer::SE_TM, $seTm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($seTm['max'])) {
                $this->addUsingAlias(MaturityPeer::SE_TM, $seTm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::SE_TM, $seTm, $comparison);
    }

    /**
     * Filter the query on the SD_tm column
     *
     * Example usage:
     * <code>
     * $query->filterBySdTm(1234); // WHERE SD_tm = 1234
     * $query->filterBySdTm(array(12, 34)); // WHERE SD_tm IN (12, 34)
     * $query->filterBySdTm(array('min' => 12)); // WHERE SD_tm >= 12
     * $query->filterBySdTm(array('max' => 12)); // WHERE SD_tm <= 12
     * </code>
     *
     * @param     mixed $sdTm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterBySdTm($sdTm = null, $comparison = null)
    {
        if (is_array($sdTm)) {
            $useMinMax = false;
            if (isset($sdTm['min'])) {
                $this->addUsingAlias(MaturityPeer::SD_TM, $sdTm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sdTm['max'])) {
                $this->addUsingAlias(MaturityPeer::SD_TM, $sdTm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::SD_TM, $sdTm, $comparison);
    }

    /**
     * Filter the query on the LCL_tm column
     *
     * Example usage:
     * <code>
     * $query->filterByLclTm(1234); // WHERE LCL_tm = 1234
     * $query->filterByLclTm(array(12, 34)); // WHERE LCL_tm IN (12, 34)
     * $query->filterByLclTm(array('min' => 12)); // WHERE LCL_tm >= 12
     * $query->filterByLclTm(array('max' => 12)); // WHERE LCL_tm <= 12
     * </code>
     *
     * @param     mixed $lclTm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByLclTm($lclTm = null, $comparison = null)
    {
        if (is_array($lclTm)) {
            $useMinMax = false;
            if (isset($lclTm['min'])) {
                $this->addUsingAlias(MaturityPeer::LCL_TM, $lclTm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lclTm['max'])) {
                $this->addUsingAlias(MaturityPeer::LCL_TM, $lclTm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::LCL_TM, $lclTm, $comparison);
    }

    /**
     * Filter the query on the UCL_tm column
     *
     * Example usage:
     * <code>
     * $query->filterByUclTm(1234); // WHERE UCL_tm = 1234
     * $query->filterByUclTm(array(12, 34)); // WHERE UCL_tm IN (12, 34)
     * $query->filterByUclTm(array('min' => 12)); // WHERE UCL_tm >= 12
     * $query->filterByUclTm(array('max' => 12)); // WHERE UCL_tm <= 12
     * </code>
     *
     * @param     mixed $uclTm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByUclTm($uclTm = null, $comparison = null)
    {
        if (is_array($uclTm)) {
            $useMinMax = false;
            if (isset($uclTm['min'])) {
                $this->addUsingAlias(MaturityPeer::UCL_TM, $uclTm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uclTm['max'])) {
                $this->addUsingAlias(MaturityPeer::UCL_TM, $uclTm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::UCL_TM, $uclTm, $comparison);
    }

    /**
     * Filter the query on the LengthMatMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthmatmin(1234); // WHERE LengthMatMin = 1234
     * $query->filterByLengthmatmin(array(12, 34)); // WHERE LengthMatMin IN (12, 34)
     * $query->filterByLengthmatmin(array('min' => 12)); // WHERE LengthMatMin >= 12
     * $query->filterByLengthmatmin(array('max' => 12)); // WHERE LengthMatMin <= 12
     * </code>
     *
     * @param     mixed $lengthmatmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByLengthmatmin($lengthmatmin = null, $comparison = null)
    {
        if (is_array($lengthmatmin)) {
            $useMinMax = false;
            if (isset($lengthmatmin['min'])) {
                $this->addUsingAlias(MaturityPeer::LENGTHMATMIN, $lengthmatmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthmatmin['max'])) {
                $this->addUsingAlias(MaturityPeer::LENGTHMATMIN, $lengthmatmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::LENGTHMATMIN, $lengthmatmin, $comparison);
    }

    /**
     * Filter the query on the LengthMatMin2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthmatmin2(1234); // WHERE LengthMatMin2 = 1234
     * $query->filterByLengthmatmin2(array(12, 34)); // WHERE LengthMatMin2 IN (12, 34)
     * $query->filterByLengthmatmin2(array('min' => 12)); // WHERE LengthMatMin2 >= 12
     * $query->filterByLengthmatmin2(array('max' => 12)); // WHERE LengthMatMin2 <= 12
     * </code>
     *
     * @param     mixed $lengthmatmin2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByLengthmatmin2($lengthmatmin2 = null, $comparison = null)
    {
        if (is_array($lengthmatmin2)) {
            $useMinMax = false;
            if (isset($lengthmatmin2['min'])) {
                $this->addUsingAlias(MaturityPeer::LENGTHMATMIN2, $lengthmatmin2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthmatmin2['max'])) {
                $this->addUsingAlias(MaturityPeer::LENGTHMATMIN2, $lengthmatmin2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::LENGTHMATMIN2, $lengthmatmin2, $comparison);
    }

    /**
     * Filter the query on the Type1 column
     *
     * Example usage:
     * <code>
     * $query->filterByType1('fooValue');   // WHERE Type1 = 'fooValue'
     * $query->filterByType1('%fooValue%'); // WHERE Type1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByType1($type1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type1)) {
                $type1 = str_replace('*', '%', $type1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MaturityPeer::TYPE1, $type1, $comparison);
    }

    /**
     * Filter the query on the LengthMatRef column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthmatref(1234); // WHERE LengthMatRef = 1234
     * $query->filterByLengthmatref(array(12, 34)); // WHERE LengthMatRef IN (12, 34)
     * $query->filterByLengthmatref(array('min' => 12)); // WHERE LengthMatRef >= 12
     * $query->filterByLengthmatref(array('max' => 12)); // WHERE LengthMatRef <= 12
     * </code>
     *
     * @param     mixed $lengthmatref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByLengthmatref($lengthmatref = null, $comparison = null)
    {
        if (is_array($lengthmatref)) {
            $useMinMax = false;
            if (isset($lengthmatref['min'])) {
                $this->addUsingAlias(MaturityPeer::LENGTHMATREF, $lengthmatref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthmatref['max'])) {
                $this->addUsingAlias(MaturityPeer::LENGTHMATREF, $lengthmatref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::LENGTHMATREF, $lengthmatref, $comparison);
    }

    /**
     * Filter the query on the Lm column
     *
     * Example usage:
     * <code>
     * $query->filterByLm(1234); // WHERE Lm = 1234
     * $query->filterByLm(array(12, 34)); // WHERE Lm IN (12, 34)
     * $query->filterByLm(array('min' => 12)); // WHERE Lm >= 12
     * $query->filterByLm(array('max' => 12)); // WHERE Lm <= 12
     * </code>
     *
     * @param     mixed $lm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByLm($lm = null, $comparison = null)
    {
        if (is_array($lm)) {
            $useMinMax = false;
            if (isset($lm['min'])) {
                $this->addUsingAlias(MaturityPeer::LM, $lm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lm['max'])) {
                $this->addUsingAlias(MaturityPeer::LM, $lm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::LM, $lm, $comparison);
    }

    /**
     * Filter the query on the SE_Lm column
     *
     * Example usage:
     * <code>
     * $query->filterBySeLm(1234); // WHERE SE_Lm = 1234
     * $query->filterBySeLm(array(12, 34)); // WHERE SE_Lm IN (12, 34)
     * $query->filterBySeLm(array('min' => 12)); // WHERE SE_Lm >= 12
     * $query->filterBySeLm(array('max' => 12)); // WHERE SE_Lm <= 12
     * </code>
     *
     * @param     mixed $seLm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterBySeLm($seLm = null, $comparison = null)
    {
        if (is_array($seLm)) {
            $useMinMax = false;
            if (isset($seLm['min'])) {
                $this->addUsingAlias(MaturityPeer::SE_LM, $seLm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($seLm['max'])) {
                $this->addUsingAlias(MaturityPeer::SE_LM, $seLm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::SE_LM, $seLm, $comparison);
    }

    /**
     * Filter the query on the SD_Lm column
     *
     * Example usage:
     * <code>
     * $query->filterBySdLm(1234); // WHERE SD_Lm = 1234
     * $query->filterBySdLm(array(12, 34)); // WHERE SD_Lm IN (12, 34)
     * $query->filterBySdLm(array('min' => 12)); // WHERE SD_Lm >= 12
     * $query->filterBySdLm(array('max' => 12)); // WHERE SD_Lm <= 12
     * </code>
     *
     * @param     mixed $sdLm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterBySdLm($sdLm = null, $comparison = null)
    {
        if (is_array($sdLm)) {
            $useMinMax = false;
            if (isset($sdLm['min'])) {
                $this->addUsingAlias(MaturityPeer::SD_LM, $sdLm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sdLm['max'])) {
                $this->addUsingAlias(MaturityPeer::SD_LM, $sdLm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::SD_LM, $sdLm, $comparison);
    }

    /**
     * Filter the query on the LCL_Lm column
     *
     * Example usage:
     * <code>
     * $query->filterByLclLm(1234); // WHERE LCL_Lm = 1234
     * $query->filterByLclLm(array(12, 34)); // WHERE LCL_Lm IN (12, 34)
     * $query->filterByLclLm(array('min' => 12)); // WHERE LCL_Lm >= 12
     * $query->filterByLclLm(array('max' => 12)); // WHERE LCL_Lm <= 12
     * </code>
     *
     * @param     mixed $lclLm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByLclLm($lclLm = null, $comparison = null)
    {
        if (is_array($lclLm)) {
            $useMinMax = false;
            if (isset($lclLm['min'])) {
                $this->addUsingAlias(MaturityPeer::LCL_LM, $lclLm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lclLm['max'])) {
                $this->addUsingAlias(MaturityPeer::LCL_LM, $lclLm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::LCL_LM, $lclLm, $comparison);
    }

    /**
     * Filter the query on the UCL_Lm column
     *
     * Example usage:
     * <code>
     * $query->filterByUclLm(1234); // WHERE UCL_Lm = 1234
     * $query->filterByUclLm(array(12, 34)); // WHERE UCL_Lm IN (12, 34)
     * $query->filterByUclLm(array('min' => 12)); // WHERE UCL_Lm >= 12
     * $query->filterByUclLm(array('max' => 12)); // WHERE UCL_Lm <= 12
     * </code>
     *
     * @param     mixed $uclLm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByUclLm($uclLm = null, $comparison = null)
    {
        if (is_array($uclLm)) {
            $useMinMax = false;
            if (isset($uclLm['min'])) {
                $this->addUsingAlias(MaturityPeer::UCL_LM, $uclLm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uclLm['max'])) {
                $this->addUsingAlias(MaturityPeer::UCL_LM, $uclLm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::UCL_LM, $uclLm, $comparison);
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
     * @return MaturityQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MaturityPeer::LOCALITY, $locality, $comparison);
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
     * @return MaturityQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MaturityPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the E_CODE column
     *
     * Example usage:
     * <code>
     * $query->filterByECode(1234); // WHERE E_CODE = 1234
     * $query->filterByECode(array(12, 34)); // WHERE E_CODE IN (12, 34)
     * $query->filterByECode(array('min' => 12)); // WHERE E_CODE >= 12
     * $query->filterByECode(array('max' => 12)); // WHERE E_CODE <= 12
     * </code>
     *
     * @param     mixed $eCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByECode($eCode = null, $comparison = null)
    {
        if (is_array($eCode)) {
            $useMinMax = false;
            if (isset($eCode['min'])) {
                $this->addUsingAlias(MaturityPeer::E_CODE, $eCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eCode['max'])) {
                $this->addUsingAlias(MaturityPeer::E_CODE, $eCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::E_CODE, $eCode, $comparison);
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
     * @return MaturityQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MaturityPeer::COMMENT, $comment, $comparison);
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
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(MaturityPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(MaturityPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::ENTERED, $entered, $comparison);
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
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(MaturityPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(MaturityPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(MaturityPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(MaturityPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::MODIFIED, $modified, $comparison);
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
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(MaturityPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(MaturityPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(MaturityPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(MaturityPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::EXPERT, $expert, $comparison);
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
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(MaturityPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(MaturityPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return MaturityQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(MaturityPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(MaturityPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaturityPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Maturity $maturity Object to remove from the list of results
     *
     * @return MaturityQuery The current query, for fluid interface
     */
    public function prune($maturity = null)
    {
        if ($maturity) {
            $this->addCond('pruneCond0', $this->getAliasedColName(MaturityPeer::STOCKCODE), $maturity->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(MaturityPeer::MATURITYREFNO), $maturity->getMaturityrefno(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(MaturityPeer::SEX), $maturity->getSex(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(MaturityPeer::LOCALITY), $maturity->getLocality(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
