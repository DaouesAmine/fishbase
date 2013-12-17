<?php


/**
 * Base class that represents a query for the 'diet' table.
 *
 *
 *
 * @method DietQuery orderByDietcode($order = Criteria::ASC) Order by the DietCode column
 * @method DietQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method DietQuery orderBySpeccode($order = Criteria::ASC) Order by the Speccode column
 * @method DietQuery orderByDietrefno($order = Criteria::ASC) Order by the DietRefNo column
 * @method DietQuery orderBySamplestage($order = Criteria::ASC) Order by the SampleStage column
 * @method DietQuery orderBySamplesize($order = Criteria::ASC) Order by the SampleSize column
 * @method DietQuery orderByYearstart($order = Criteria::ASC) Order by the YearStart column
 * @method DietQuery orderByYearend($order = Criteria::ASC) Order by the YearEnd column
 * @method DietQuery orderByJanuary($order = Criteria::ASC) Order by the January column
 * @method DietQuery orderByFebruary($order = Criteria::ASC) Order by the February column
 * @method DietQuery orderByMarch($order = Criteria::ASC) Order by the March column
 * @method DietQuery orderByApril($order = Criteria::ASC) Order by the April column
 * @method DietQuery orderByMay($order = Criteria::ASC) Order by the May column
 * @method DietQuery orderByJune($order = Criteria::ASC) Order by the June column
 * @method DietQuery orderByJuly($order = Criteria::ASC) Order by the July column
 * @method DietQuery orderByAugust($order = Criteria::ASC) Order by the August column
 * @method DietQuery orderBySeptember($order = Criteria::ASC) Order by the September column
 * @method DietQuery orderByOctober($order = Criteria::ASC) Order by the October column
 * @method DietQuery orderByNovember($order = Criteria::ASC) Order by the November column
 * @method DietQuery orderByDecember($order = Criteria::ASC) Order by the December column
 * @method DietQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method DietQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method DietQuery orderByECode($order = Criteria::ASC) Order by the E_Code column
 * @method DietQuery orderByMethod($order = Criteria::ASC) Order by the Method column
 * @method DietQuery orderByMethodtype($order = Criteria::ASC) Order by the MethodType column
 * @method DietQuery orderByRemark($order = Criteria::ASC) Order by the Remark column
 * @method DietQuery orderByOtheritems($order = Criteria::ASC) Order by the OtherItems column
 * @method DietQuery orderByPercentempty($order = Criteria::ASC) Order by the PercentEmpty column
 * @method DietQuery orderByTroph($order = Criteria::ASC) Order by the Troph column
 * @method DietQuery orderBySetroph($order = Criteria::ASC) Order by the seTroph column
 * @method DietQuery orderBySizemin($order = Criteria::ASC) Order by the SizeMin column
 * @method DietQuery orderBySizemax($order = Criteria::ASC) Order by the SizeMax column
 * @method DietQuery orderBySizetype($order = Criteria::ASC) Order by the SizeType column
 * @method DietQuery orderByFishlength($order = Criteria::ASC) Order by the FishLength column
 * @method DietQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method DietQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method DietQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method DietQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method DietQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method DietQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 *
 * @method DietQuery groupByDietcode() Group by the DietCode column
 * @method DietQuery groupByStockcode() Group by the StockCode column
 * @method DietQuery groupBySpeccode() Group by the Speccode column
 * @method DietQuery groupByDietrefno() Group by the DietRefNo column
 * @method DietQuery groupBySamplestage() Group by the SampleStage column
 * @method DietQuery groupBySamplesize() Group by the SampleSize column
 * @method DietQuery groupByYearstart() Group by the YearStart column
 * @method DietQuery groupByYearend() Group by the YearEnd column
 * @method DietQuery groupByJanuary() Group by the January column
 * @method DietQuery groupByFebruary() Group by the February column
 * @method DietQuery groupByMarch() Group by the March column
 * @method DietQuery groupByApril() Group by the April column
 * @method DietQuery groupByMay() Group by the May column
 * @method DietQuery groupByJune() Group by the June column
 * @method DietQuery groupByJuly() Group by the July column
 * @method DietQuery groupByAugust() Group by the August column
 * @method DietQuery groupBySeptember() Group by the September column
 * @method DietQuery groupByOctober() Group by the October column
 * @method DietQuery groupByNovember() Group by the November column
 * @method DietQuery groupByDecember() Group by the December column
 * @method DietQuery groupByCCode() Group by the C_Code column
 * @method DietQuery groupByLocality() Group by the Locality column
 * @method DietQuery groupByECode() Group by the E_Code column
 * @method DietQuery groupByMethod() Group by the Method column
 * @method DietQuery groupByMethodtype() Group by the MethodType column
 * @method DietQuery groupByRemark() Group by the Remark column
 * @method DietQuery groupByOtheritems() Group by the OtherItems column
 * @method DietQuery groupByPercentempty() Group by the PercentEmpty column
 * @method DietQuery groupByTroph() Group by the Troph column
 * @method DietQuery groupBySetroph() Group by the seTroph column
 * @method DietQuery groupBySizemin() Group by the SizeMin column
 * @method DietQuery groupBySizemax() Group by the SizeMax column
 * @method DietQuery groupBySizetype() Group by the SizeType column
 * @method DietQuery groupByFishlength() Group by the FishLength column
 * @method DietQuery groupByEntered() Group by the Entered column
 * @method DietQuery groupByDateentered() Group by the DateEntered column
 * @method DietQuery groupByModified() Group by the Modified column
 * @method DietQuery groupByDatemodified() Group by the DateModified column
 * @method DietQuery groupByExpert() Group by the Expert column
 * @method DietQuery groupByDatechecked() Group by the DateChecked column
 *
 * @method DietQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DietQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DietQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Diet findOne(PropelPDO $con = null) Return the first Diet matching the query
 * @method Diet findOneOrCreate(PropelPDO $con = null) Return the first Diet matching the query, or a new Diet object populated from the query conditions when no match is found
 *
 * @method Diet findOneByDietcode(int $DietCode) Return the first Diet filtered by the DietCode column
 * @method Diet findOneByStockcode(int $StockCode) Return the first Diet filtered by the StockCode column
 * @method Diet findOneBySpeccode(int $Speccode) Return the first Diet filtered by the Speccode column
 * @method Diet findOneByDietrefno(int $DietRefNo) Return the first Diet filtered by the DietRefNo column
 * @method Diet findOneBySamplestage(string $SampleStage) Return the first Diet filtered by the SampleStage column
 * @method Diet findOneBySamplesize(int $SampleSize) Return the first Diet filtered by the SampleSize column
 * @method Diet findOneByYearstart(int $YearStart) Return the first Diet filtered by the YearStart column
 * @method Diet findOneByYearend(int $YearEnd) Return the first Diet filtered by the YearEnd column
 * @method Diet findOneByJanuary(int $January) Return the first Diet filtered by the January column
 * @method Diet findOneByFebruary(int $February) Return the first Diet filtered by the February column
 * @method Diet findOneByMarch(int $March) Return the first Diet filtered by the March column
 * @method Diet findOneByApril(int $April) Return the first Diet filtered by the April column
 * @method Diet findOneByMay(int $May) Return the first Diet filtered by the May column
 * @method Diet findOneByJune(int $June) Return the first Diet filtered by the June column
 * @method Diet findOneByJuly(int $July) Return the first Diet filtered by the July column
 * @method Diet findOneByAugust(int $August) Return the first Diet filtered by the August column
 * @method Diet findOneBySeptember(int $September) Return the first Diet filtered by the September column
 * @method Diet findOneByOctober(int $October) Return the first Diet filtered by the October column
 * @method Diet findOneByNovember(int $November) Return the first Diet filtered by the November column
 * @method Diet findOneByDecember(int $December) Return the first Diet filtered by the December column
 * @method Diet findOneByCCode(string $C_Code) Return the first Diet filtered by the C_Code column
 * @method Diet findOneByLocality(string $Locality) Return the first Diet filtered by the Locality column
 * @method Diet findOneByECode(int $E_Code) Return the first Diet filtered by the E_Code column
 * @method Diet findOneByMethod(string $Method) Return the first Diet filtered by the Method column
 * @method Diet findOneByMethodtype(string $MethodType) Return the first Diet filtered by the MethodType column
 * @method Diet findOneByRemark(string $Remark) Return the first Diet filtered by the Remark column
 * @method Diet findOneByOtheritems(double $OtherItems) Return the first Diet filtered by the OtherItems column
 * @method Diet findOneByPercentempty(double $PercentEmpty) Return the first Diet filtered by the PercentEmpty column
 * @method Diet findOneByTroph(double $Troph) Return the first Diet filtered by the Troph column
 * @method Diet findOneBySetroph(double $seTroph) Return the first Diet filtered by the seTroph column
 * @method Diet findOneBySizemin(double $SizeMin) Return the first Diet filtered by the SizeMin column
 * @method Diet findOneBySizemax(double $SizeMax) Return the first Diet filtered by the SizeMax column
 * @method Diet findOneBySizetype(string $SizeType) Return the first Diet filtered by the SizeType column
 * @method Diet findOneByFishlength(double $FishLength) Return the first Diet filtered by the FishLength column
 * @method Diet findOneByEntered(int $Entered) Return the first Diet filtered by the Entered column
 * @method Diet findOneByDateentered(string $DateEntered) Return the first Diet filtered by the DateEntered column
 * @method Diet findOneByModified(int $Modified) Return the first Diet filtered by the Modified column
 * @method Diet findOneByDatemodified(string $DateModified) Return the first Diet filtered by the DateModified column
 * @method Diet findOneByExpert(int $Expert) Return the first Diet filtered by the Expert column
 * @method Diet findOneByDatechecked(string $DateChecked) Return the first Diet filtered by the DateChecked column
 *
 * @method array findByDietcode(int $DietCode) Return Diet objects filtered by the DietCode column
 * @method array findByStockcode(int $StockCode) Return Diet objects filtered by the StockCode column
 * @method array findBySpeccode(int $Speccode) Return Diet objects filtered by the Speccode column
 * @method array findByDietrefno(int $DietRefNo) Return Diet objects filtered by the DietRefNo column
 * @method array findBySamplestage(string $SampleStage) Return Diet objects filtered by the SampleStage column
 * @method array findBySamplesize(int $SampleSize) Return Diet objects filtered by the SampleSize column
 * @method array findByYearstart(int $YearStart) Return Diet objects filtered by the YearStart column
 * @method array findByYearend(int $YearEnd) Return Diet objects filtered by the YearEnd column
 * @method array findByJanuary(int $January) Return Diet objects filtered by the January column
 * @method array findByFebruary(int $February) Return Diet objects filtered by the February column
 * @method array findByMarch(int $March) Return Diet objects filtered by the March column
 * @method array findByApril(int $April) Return Diet objects filtered by the April column
 * @method array findByMay(int $May) Return Diet objects filtered by the May column
 * @method array findByJune(int $June) Return Diet objects filtered by the June column
 * @method array findByJuly(int $July) Return Diet objects filtered by the July column
 * @method array findByAugust(int $August) Return Diet objects filtered by the August column
 * @method array findBySeptember(int $September) Return Diet objects filtered by the September column
 * @method array findByOctober(int $October) Return Diet objects filtered by the October column
 * @method array findByNovember(int $November) Return Diet objects filtered by the November column
 * @method array findByDecember(int $December) Return Diet objects filtered by the December column
 * @method array findByCCode(string $C_Code) Return Diet objects filtered by the C_Code column
 * @method array findByLocality(string $Locality) Return Diet objects filtered by the Locality column
 * @method array findByECode(int $E_Code) Return Diet objects filtered by the E_Code column
 * @method array findByMethod(string $Method) Return Diet objects filtered by the Method column
 * @method array findByMethodtype(string $MethodType) Return Diet objects filtered by the MethodType column
 * @method array findByRemark(string $Remark) Return Diet objects filtered by the Remark column
 * @method array findByOtheritems(double $OtherItems) Return Diet objects filtered by the OtherItems column
 * @method array findByPercentempty(double $PercentEmpty) Return Diet objects filtered by the PercentEmpty column
 * @method array findByTroph(double $Troph) Return Diet objects filtered by the Troph column
 * @method array findBySetroph(double $seTroph) Return Diet objects filtered by the seTroph column
 * @method array findBySizemin(double $SizeMin) Return Diet objects filtered by the SizeMin column
 * @method array findBySizemax(double $SizeMax) Return Diet objects filtered by the SizeMax column
 * @method array findBySizetype(string $SizeType) Return Diet objects filtered by the SizeType column
 * @method array findByFishlength(double $FishLength) Return Diet objects filtered by the FishLength column
 * @method array findByEntered(int $Entered) Return Diet objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Diet objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Diet objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Diet objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Diet objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Diet objects filtered by the DateChecked column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseDietQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDietQuery object.
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
            $modelName = 'Diet';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DietQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DietQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DietQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DietQuery) {
            return $criteria;
        }
        $query = new DietQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$DietCode, $StockCode, $SampleStage]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Diet|Diet[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DietPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DietPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Diet A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `DietCode`, `StockCode`, `Speccode`, `DietRefNo`, `SampleStage`, `SampleSize`, `YearStart`, `YearEnd`, `January`, `February`, `March`, `April`, `May`, `June`, `July`, `August`, `September`, `October`, `November`, `December`, `C_Code`, `Locality`, `E_Code`, `Method`, `MethodType`, `Remark`, `OtherItems`, `PercentEmpty`, `Troph`, `seTroph`, `SizeMin`, `SizeMax`, `SizeType`, `FishLength`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked` FROM `diet` WHERE `DietCode` = :p0 AND `StockCode` = :p1 AND `SampleStage` = :p2';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Diet();
            $obj->hydrate($row);
            DietPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return Diet|Diet[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Diet[]|mixed the list of results, formatted by the current formatter
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
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(DietPeer::DIETCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(DietPeer::STOCKCODE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(DietPeer::SAMPLESTAGE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(DietPeer::DIETCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(DietPeer::STOCKCODE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(DietPeer::SAMPLESTAGE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the DietCode column
     *
     * Example usage:
     * <code>
     * $query->filterByDietcode(1234); // WHERE DietCode = 1234
     * $query->filterByDietcode(array(12, 34)); // WHERE DietCode IN (12, 34)
     * $query->filterByDietcode(array('min' => 12)); // WHERE DietCode >= 12
     * $query->filterByDietcode(array('max' => 12)); // WHERE DietCode <= 12
     * </code>
     *
     * @param     mixed $dietcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByDietcode($dietcode = null, $comparison = null)
    {
        if (is_array($dietcode)) {
            $useMinMax = false;
            if (isset($dietcode['min'])) {
                $this->addUsingAlias(DietPeer::DIETCODE, $dietcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dietcode['max'])) {
                $this->addUsingAlias(DietPeer::DIETCODE, $dietcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::DIETCODE, $dietcode, $comparison);
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
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(DietPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(DietPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return DietQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(DietPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(DietPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the DietRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByDietrefno(1234); // WHERE DietRefNo = 1234
     * $query->filterByDietrefno(array(12, 34)); // WHERE DietRefNo IN (12, 34)
     * $query->filterByDietrefno(array('min' => 12)); // WHERE DietRefNo >= 12
     * $query->filterByDietrefno(array('max' => 12)); // WHERE DietRefNo <= 12
     * </code>
     *
     * @param     mixed $dietrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByDietrefno($dietrefno = null, $comparison = null)
    {
        if (is_array($dietrefno)) {
            $useMinMax = false;
            if (isset($dietrefno['min'])) {
                $this->addUsingAlias(DietPeer::DIETREFNO, $dietrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dietrefno['max'])) {
                $this->addUsingAlias(DietPeer::DIETREFNO, $dietrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::DIETREFNO, $dietrefno, $comparison);
    }

    /**
     * Filter the query on the SampleStage column
     *
     * Example usage:
     * <code>
     * $query->filterBySamplestage('fooValue');   // WHERE SampleStage = 'fooValue'
     * $query->filterBySamplestage('%fooValue%'); // WHERE SampleStage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $samplestage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterBySamplestage($samplestage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($samplestage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $samplestage)) {
                $samplestage = str_replace('*', '%', $samplestage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DietPeer::SAMPLESTAGE, $samplestage, $comparison);
    }

    /**
     * Filter the query on the SampleSize column
     *
     * Example usage:
     * <code>
     * $query->filterBySamplesize(1234); // WHERE SampleSize = 1234
     * $query->filterBySamplesize(array(12, 34)); // WHERE SampleSize IN (12, 34)
     * $query->filterBySamplesize(array('min' => 12)); // WHERE SampleSize >= 12
     * $query->filterBySamplesize(array('max' => 12)); // WHERE SampleSize <= 12
     * </code>
     *
     * @param     mixed $samplesize The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterBySamplesize($samplesize = null, $comparison = null)
    {
        if (is_array($samplesize)) {
            $useMinMax = false;
            if (isset($samplesize['min'])) {
                $this->addUsingAlias(DietPeer::SAMPLESIZE, $samplesize['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($samplesize['max'])) {
                $this->addUsingAlias(DietPeer::SAMPLESIZE, $samplesize['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::SAMPLESIZE, $samplesize, $comparison);
    }

    /**
     * Filter the query on the YearStart column
     *
     * Example usage:
     * <code>
     * $query->filterByYearstart(1234); // WHERE YearStart = 1234
     * $query->filterByYearstart(array(12, 34)); // WHERE YearStart IN (12, 34)
     * $query->filterByYearstart(array('min' => 12)); // WHERE YearStart >= 12
     * $query->filterByYearstart(array('max' => 12)); // WHERE YearStart <= 12
     * </code>
     *
     * @param     mixed $yearstart The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByYearstart($yearstart = null, $comparison = null)
    {
        if (is_array($yearstart)) {
            $useMinMax = false;
            if (isset($yearstart['min'])) {
                $this->addUsingAlias(DietPeer::YEARSTART, $yearstart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yearstart['max'])) {
                $this->addUsingAlias(DietPeer::YEARSTART, $yearstart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::YEARSTART, $yearstart, $comparison);
    }

    /**
     * Filter the query on the YearEnd column
     *
     * Example usage:
     * <code>
     * $query->filterByYearend(1234); // WHERE YearEnd = 1234
     * $query->filterByYearend(array(12, 34)); // WHERE YearEnd IN (12, 34)
     * $query->filterByYearend(array('min' => 12)); // WHERE YearEnd >= 12
     * $query->filterByYearend(array('max' => 12)); // WHERE YearEnd <= 12
     * </code>
     *
     * @param     mixed $yearend The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByYearend($yearend = null, $comparison = null)
    {
        if (is_array($yearend)) {
            $useMinMax = false;
            if (isset($yearend['min'])) {
                $this->addUsingAlias(DietPeer::YEAREND, $yearend['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($yearend['max'])) {
                $this->addUsingAlias(DietPeer::YEAREND, $yearend['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::YEAREND, $yearend, $comparison);
    }

    /**
     * Filter the query on the January column
     *
     * Example usage:
     * <code>
     * $query->filterByJanuary(1234); // WHERE January = 1234
     * $query->filterByJanuary(array(12, 34)); // WHERE January IN (12, 34)
     * $query->filterByJanuary(array('min' => 12)); // WHERE January >= 12
     * $query->filterByJanuary(array('max' => 12)); // WHERE January <= 12
     * </code>
     *
     * @param     mixed $january The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByJanuary($january = null, $comparison = null)
    {
        if (is_array($january)) {
            $useMinMax = false;
            if (isset($january['min'])) {
                $this->addUsingAlias(DietPeer::JANUARY, $january['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($january['max'])) {
                $this->addUsingAlias(DietPeer::JANUARY, $january['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::JANUARY, $january, $comparison);
    }

    /**
     * Filter the query on the February column
     *
     * Example usage:
     * <code>
     * $query->filterByFebruary(1234); // WHERE February = 1234
     * $query->filterByFebruary(array(12, 34)); // WHERE February IN (12, 34)
     * $query->filterByFebruary(array('min' => 12)); // WHERE February >= 12
     * $query->filterByFebruary(array('max' => 12)); // WHERE February <= 12
     * </code>
     *
     * @param     mixed $february The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByFebruary($february = null, $comparison = null)
    {
        if (is_array($february)) {
            $useMinMax = false;
            if (isset($february['min'])) {
                $this->addUsingAlias(DietPeer::FEBRUARY, $february['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($february['max'])) {
                $this->addUsingAlias(DietPeer::FEBRUARY, $february['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::FEBRUARY, $february, $comparison);
    }

    /**
     * Filter the query on the March column
     *
     * Example usage:
     * <code>
     * $query->filterByMarch(1234); // WHERE March = 1234
     * $query->filterByMarch(array(12, 34)); // WHERE March IN (12, 34)
     * $query->filterByMarch(array('min' => 12)); // WHERE March >= 12
     * $query->filterByMarch(array('max' => 12)); // WHERE March <= 12
     * </code>
     *
     * @param     mixed $march The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByMarch($march = null, $comparison = null)
    {
        if (is_array($march)) {
            $useMinMax = false;
            if (isset($march['min'])) {
                $this->addUsingAlias(DietPeer::MARCH, $march['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($march['max'])) {
                $this->addUsingAlias(DietPeer::MARCH, $march['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::MARCH, $march, $comparison);
    }

    /**
     * Filter the query on the April column
     *
     * Example usage:
     * <code>
     * $query->filterByApril(1234); // WHERE April = 1234
     * $query->filterByApril(array(12, 34)); // WHERE April IN (12, 34)
     * $query->filterByApril(array('min' => 12)); // WHERE April >= 12
     * $query->filterByApril(array('max' => 12)); // WHERE April <= 12
     * </code>
     *
     * @param     mixed $april The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByApril($april = null, $comparison = null)
    {
        if (is_array($april)) {
            $useMinMax = false;
            if (isset($april['min'])) {
                $this->addUsingAlias(DietPeer::APRIL, $april['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($april['max'])) {
                $this->addUsingAlias(DietPeer::APRIL, $april['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::APRIL, $april, $comparison);
    }

    /**
     * Filter the query on the May column
     *
     * Example usage:
     * <code>
     * $query->filterByMay(1234); // WHERE May = 1234
     * $query->filterByMay(array(12, 34)); // WHERE May IN (12, 34)
     * $query->filterByMay(array('min' => 12)); // WHERE May >= 12
     * $query->filterByMay(array('max' => 12)); // WHERE May <= 12
     * </code>
     *
     * @param     mixed $may The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByMay($may = null, $comparison = null)
    {
        if (is_array($may)) {
            $useMinMax = false;
            if (isset($may['min'])) {
                $this->addUsingAlias(DietPeer::MAY, $may['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($may['max'])) {
                $this->addUsingAlias(DietPeer::MAY, $may['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::MAY, $may, $comparison);
    }

    /**
     * Filter the query on the June column
     *
     * Example usage:
     * <code>
     * $query->filterByJune(1234); // WHERE June = 1234
     * $query->filterByJune(array(12, 34)); // WHERE June IN (12, 34)
     * $query->filterByJune(array('min' => 12)); // WHERE June >= 12
     * $query->filterByJune(array('max' => 12)); // WHERE June <= 12
     * </code>
     *
     * @param     mixed $june The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByJune($june = null, $comparison = null)
    {
        if (is_array($june)) {
            $useMinMax = false;
            if (isset($june['min'])) {
                $this->addUsingAlias(DietPeer::JUNE, $june['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($june['max'])) {
                $this->addUsingAlias(DietPeer::JUNE, $june['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::JUNE, $june, $comparison);
    }

    /**
     * Filter the query on the July column
     *
     * Example usage:
     * <code>
     * $query->filterByJuly(1234); // WHERE July = 1234
     * $query->filterByJuly(array(12, 34)); // WHERE July IN (12, 34)
     * $query->filterByJuly(array('min' => 12)); // WHERE July >= 12
     * $query->filterByJuly(array('max' => 12)); // WHERE July <= 12
     * </code>
     *
     * @param     mixed $july The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByJuly($july = null, $comparison = null)
    {
        if (is_array($july)) {
            $useMinMax = false;
            if (isset($july['min'])) {
                $this->addUsingAlias(DietPeer::JULY, $july['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($july['max'])) {
                $this->addUsingAlias(DietPeer::JULY, $july['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::JULY, $july, $comparison);
    }

    /**
     * Filter the query on the August column
     *
     * Example usage:
     * <code>
     * $query->filterByAugust(1234); // WHERE August = 1234
     * $query->filterByAugust(array(12, 34)); // WHERE August IN (12, 34)
     * $query->filterByAugust(array('min' => 12)); // WHERE August >= 12
     * $query->filterByAugust(array('max' => 12)); // WHERE August <= 12
     * </code>
     *
     * @param     mixed $august The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByAugust($august = null, $comparison = null)
    {
        if (is_array($august)) {
            $useMinMax = false;
            if (isset($august['min'])) {
                $this->addUsingAlias(DietPeer::AUGUST, $august['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($august['max'])) {
                $this->addUsingAlias(DietPeer::AUGUST, $august['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::AUGUST, $august, $comparison);
    }

    /**
     * Filter the query on the September column
     *
     * Example usage:
     * <code>
     * $query->filterBySeptember(1234); // WHERE September = 1234
     * $query->filterBySeptember(array(12, 34)); // WHERE September IN (12, 34)
     * $query->filterBySeptember(array('min' => 12)); // WHERE September >= 12
     * $query->filterBySeptember(array('max' => 12)); // WHERE September <= 12
     * </code>
     *
     * @param     mixed $september The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterBySeptember($september = null, $comparison = null)
    {
        if (is_array($september)) {
            $useMinMax = false;
            if (isset($september['min'])) {
                $this->addUsingAlias(DietPeer::SEPTEMBER, $september['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($september['max'])) {
                $this->addUsingAlias(DietPeer::SEPTEMBER, $september['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::SEPTEMBER, $september, $comparison);
    }

    /**
     * Filter the query on the October column
     *
     * Example usage:
     * <code>
     * $query->filterByOctober(1234); // WHERE October = 1234
     * $query->filterByOctober(array(12, 34)); // WHERE October IN (12, 34)
     * $query->filterByOctober(array('min' => 12)); // WHERE October >= 12
     * $query->filterByOctober(array('max' => 12)); // WHERE October <= 12
     * </code>
     *
     * @param     mixed $october The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByOctober($october = null, $comparison = null)
    {
        if (is_array($october)) {
            $useMinMax = false;
            if (isset($october['min'])) {
                $this->addUsingAlias(DietPeer::OCTOBER, $october['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($october['max'])) {
                $this->addUsingAlias(DietPeer::OCTOBER, $october['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::OCTOBER, $october, $comparison);
    }

    /**
     * Filter the query on the November column
     *
     * Example usage:
     * <code>
     * $query->filterByNovember(1234); // WHERE November = 1234
     * $query->filterByNovember(array(12, 34)); // WHERE November IN (12, 34)
     * $query->filterByNovember(array('min' => 12)); // WHERE November >= 12
     * $query->filterByNovember(array('max' => 12)); // WHERE November <= 12
     * </code>
     *
     * @param     mixed $november The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByNovember($november = null, $comparison = null)
    {
        if (is_array($november)) {
            $useMinMax = false;
            if (isset($november['min'])) {
                $this->addUsingAlias(DietPeer::NOVEMBER, $november['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($november['max'])) {
                $this->addUsingAlias(DietPeer::NOVEMBER, $november['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::NOVEMBER, $november, $comparison);
    }

    /**
     * Filter the query on the December column
     *
     * Example usage:
     * <code>
     * $query->filterByDecember(1234); // WHERE December = 1234
     * $query->filterByDecember(array(12, 34)); // WHERE December IN (12, 34)
     * $query->filterByDecember(array('min' => 12)); // WHERE December >= 12
     * $query->filterByDecember(array('max' => 12)); // WHERE December <= 12
     * </code>
     *
     * @param     mixed $december The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByDecember($december = null, $comparison = null)
    {
        if (is_array($december)) {
            $useMinMax = false;
            if (isset($december['min'])) {
                $this->addUsingAlias(DietPeer::DECEMBER, $december['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($december['max'])) {
                $this->addUsingAlias(DietPeer::DECEMBER, $december['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::DECEMBER, $december, $comparison);
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
     * @return DietQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DietPeer::C_CODE, $cCode, $comparison);
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
     * @return DietQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DietPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the E_Code column
     *
     * Example usage:
     * <code>
     * $query->filterByECode(1234); // WHERE E_Code = 1234
     * $query->filterByECode(array(12, 34)); // WHERE E_Code IN (12, 34)
     * $query->filterByECode(array('min' => 12)); // WHERE E_Code >= 12
     * $query->filterByECode(array('max' => 12)); // WHERE E_Code <= 12
     * </code>
     *
     * @param     mixed $eCode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByECode($eCode = null, $comparison = null)
    {
        if (is_array($eCode)) {
            $useMinMax = false;
            if (isset($eCode['min'])) {
                $this->addUsingAlias(DietPeer::E_CODE, $eCode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eCode['max'])) {
                $this->addUsingAlias(DietPeer::E_CODE, $eCode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::E_CODE, $eCode, $comparison);
    }

    /**
     * Filter the query on the Method column
     *
     * Example usage:
     * <code>
     * $query->filterByMethod('fooValue');   // WHERE Method = 'fooValue'
     * $query->filterByMethod('%fooValue%'); // WHERE Method LIKE '%fooValue%'
     * </code>
     *
     * @param     string $method The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByMethod($method = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($method)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $method)) {
                $method = str_replace('*', '%', $method);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DietPeer::METHOD, $method, $comparison);
    }

    /**
     * Filter the query on the MethodType column
     *
     * Example usage:
     * <code>
     * $query->filterByMethodtype('fooValue');   // WHERE MethodType = 'fooValue'
     * $query->filterByMethodtype('%fooValue%'); // WHERE MethodType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $methodtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByMethodtype($methodtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($methodtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $methodtype)) {
                $methodtype = str_replace('*', '%', $methodtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DietPeer::METHODTYPE, $methodtype, $comparison);
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
     * @return DietQuery The current query, for fluid interface
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

        return $this->addUsingAlias(DietPeer::REMARK, $remark, $comparison);
    }

    /**
     * Filter the query on the OtherItems column
     *
     * Example usage:
     * <code>
     * $query->filterByOtheritems(1234); // WHERE OtherItems = 1234
     * $query->filterByOtheritems(array(12, 34)); // WHERE OtherItems IN (12, 34)
     * $query->filterByOtheritems(array('min' => 12)); // WHERE OtherItems >= 12
     * $query->filterByOtheritems(array('max' => 12)); // WHERE OtherItems <= 12
     * </code>
     *
     * @param     mixed $otheritems The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByOtheritems($otheritems = null, $comparison = null)
    {
        if (is_array($otheritems)) {
            $useMinMax = false;
            if (isset($otheritems['min'])) {
                $this->addUsingAlias(DietPeer::OTHERITEMS, $otheritems['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($otheritems['max'])) {
                $this->addUsingAlias(DietPeer::OTHERITEMS, $otheritems['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::OTHERITEMS, $otheritems, $comparison);
    }

    /**
     * Filter the query on the PercentEmpty column
     *
     * Example usage:
     * <code>
     * $query->filterByPercentempty(1234); // WHERE PercentEmpty = 1234
     * $query->filterByPercentempty(array(12, 34)); // WHERE PercentEmpty IN (12, 34)
     * $query->filterByPercentempty(array('min' => 12)); // WHERE PercentEmpty >= 12
     * $query->filterByPercentempty(array('max' => 12)); // WHERE PercentEmpty <= 12
     * </code>
     *
     * @param     mixed $percentempty The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByPercentempty($percentempty = null, $comparison = null)
    {
        if (is_array($percentempty)) {
            $useMinMax = false;
            if (isset($percentempty['min'])) {
                $this->addUsingAlias(DietPeer::PERCENTEMPTY, $percentempty['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($percentempty['max'])) {
                $this->addUsingAlias(DietPeer::PERCENTEMPTY, $percentempty['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::PERCENTEMPTY, $percentempty, $comparison);
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
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByTroph($troph = null, $comparison = null)
    {
        if (is_array($troph)) {
            $useMinMax = false;
            if (isset($troph['min'])) {
                $this->addUsingAlias(DietPeer::TROPH, $troph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($troph['max'])) {
                $this->addUsingAlias(DietPeer::TROPH, $troph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::TROPH, $troph, $comparison);
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
     * @return DietQuery The current query, for fluid interface
     */
    public function filterBySetroph($setroph = null, $comparison = null)
    {
        if (is_array($setroph)) {
            $useMinMax = false;
            if (isset($setroph['min'])) {
                $this->addUsingAlias(DietPeer::SETROPH, $setroph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($setroph['max'])) {
                $this->addUsingAlias(DietPeer::SETROPH, $setroph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::SETROPH, $setroph, $comparison);
    }

    /**
     * Filter the query on the SizeMin column
     *
     * Example usage:
     * <code>
     * $query->filterBySizemin(1234); // WHERE SizeMin = 1234
     * $query->filterBySizemin(array(12, 34)); // WHERE SizeMin IN (12, 34)
     * $query->filterBySizemin(array('min' => 12)); // WHERE SizeMin >= 12
     * $query->filterBySizemin(array('max' => 12)); // WHERE SizeMin <= 12
     * </code>
     *
     * @param     mixed $sizemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterBySizemin($sizemin = null, $comparison = null)
    {
        if (is_array($sizemin)) {
            $useMinMax = false;
            if (isset($sizemin['min'])) {
                $this->addUsingAlias(DietPeer::SIZEMIN, $sizemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sizemin['max'])) {
                $this->addUsingAlias(DietPeer::SIZEMIN, $sizemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::SIZEMIN, $sizemin, $comparison);
    }

    /**
     * Filter the query on the SizeMax column
     *
     * Example usage:
     * <code>
     * $query->filterBySizemax(1234); // WHERE SizeMax = 1234
     * $query->filterBySizemax(array(12, 34)); // WHERE SizeMax IN (12, 34)
     * $query->filterBySizemax(array('min' => 12)); // WHERE SizeMax >= 12
     * $query->filterBySizemax(array('max' => 12)); // WHERE SizeMax <= 12
     * </code>
     *
     * @param     mixed $sizemax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterBySizemax($sizemax = null, $comparison = null)
    {
        if (is_array($sizemax)) {
            $useMinMax = false;
            if (isset($sizemax['min'])) {
                $this->addUsingAlias(DietPeer::SIZEMAX, $sizemax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sizemax['max'])) {
                $this->addUsingAlias(DietPeer::SIZEMAX, $sizemax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::SIZEMAX, $sizemax, $comparison);
    }

    /**
     * Filter the query on the SizeType column
     *
     * Example usage:
     * <code>
     * $query->filterBySizetype('fooValue');   // WHERE SizeType = 'fooValue'
     * $query->filterBySizetype('%fooValue%'); // WHERE SizeType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sizetype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterBySizetype($sizetype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sizetype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sizetype)) {
                $sizetype = str_replace('*', '%', $sizetype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DietPeer::SIZETYPE, $sizetype, $comparison);
    }

    /**
     * Filter the query on the FishLength column
     *
     * Example usage:
     * <code>
     * $query->filterByFishlength(1234); // WHERE FishLength = 1234
     * $query->filterByFishlength(array(12, 34)); // WHERE FishLength IN (12, 34)
     * $query->filterByFishlength(array('min' => 12)); // WHERE FishLength >= 12
     * $query->filterByFishlength(array('max' => 12)); // WHERE FishLength <= 12
     * </code>
     *
     * @param     mixed $fishlength The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByFishlength($fishlength = null, $comparison = null)
    {
        if (is_array($fishlength)) {
            $useMinMax = false;
            if (isset($fishlength['min'])) {
                $this->addUsingAlias(DietPeer::FISHLENGTH, $fishlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fishlength['max'])) {
                $this->addUsingAlias(DietPeer::FISHLENGTH, $fishlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::FISHLENGTH, $fishlength, $comparison);
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
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(DietPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(DietPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::ENTERED, $entered, $comparison);
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
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(DietPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(DietPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(DietPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(DietPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::MODIFIED, $modified, $comparison);
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
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(DietPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(DietPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(DietPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(DietPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::EXPERT, $expert, $comparison);
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
     * @return DietQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(DietPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(DietPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DietPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Diet $diet Object to remove from the list of results
     *
     * @return DietQuery The current query, for fluid interface
     */
    public function prune($diet = null)
    {
        if ($diet) {
            $this->addCond('pruneCond0', $this->getAliasedColName(DietPeer::DIETCODE), $diet->getDietcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(DietPeer::STOCKCODE), $diet->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(DietPeer::SAMPLESTAGE), $diet->getSamplestage(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
