<?php


/**
 * Base class that represents a query for the 'intrcase' table.
 *
 *
 *
 * @method IntrcaseQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method IntrcaseQuery orderByIntrcaserefno($order = Criteria::ASC) Order by the IntrCaseRefNo column
 * @method IntrcaseQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method IntrcaseQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method IntrcaseQuery orderByYear($order = Criteria::ASC) Order by the Year column
 * @method IntrcaseQuery orderByRangemin($order = Criteria::ASC) Order by the RangeMin column
 * @method IntrcaseQuery orderByRangemax($order = Criteria::ASC) Order by the RangeMax column
 * @method IntrcaseQuery orderByPeriod($order = Criteria::ASC) Order by the Period column
 * @method IntrcaseQuery orderByPeriodorder($order = Criteria::ASC) Order by the PeriodOrder column
 * @method IntrcaseQuery orderByTo($order = Criteria::ASC) Order by the TO column
 * @method IntrcaseQuery orderByCCodeTo($order = Criteria::ASC) Order by the C_Code_To column
 * @method IntrcaseQuery orderByAreaTo($order = Criteria::ASC) Order by the Area_To column
 * @method IntrcaseQuery orderByFrom($order = Criteria::ASC) Order by the From column
 * @method IntrcaseQuery orderByCCodeFrom($order = Criteria::ASC) Order by the C_Code_From column
 * @method IntrcaseQuery orderByAreaFrom($order = Criteria::ASC) Order by the Area_From column
 * @method IntrcaseQuery orderByReason($order = Criteria::ASC) Order by the Reason column
 * @method IntrcaseQuery orderByOtherreason($order = Criteria::ASC) Order by the OtherReason column
 * @method IntrcaseQuery orderByOtherreason2($order = Criteria::ASC) Order by the OtherReason2 column
 * @method IntrcaseQuery orderByReasonorder($order = Criteria::ASC) Order by the ReasonOrder column
 * @method IntrcaseQuery orderByIntroducer($order = Criteria::ASC) Order by the Introducer column
 * @method IntrcaseQuery orderByEstabwild($order = Criteria::ASC) Order by the Estabwild column
 * @method IntrcaseQuery orderByEstabtype($order = Criteria::ASC) Order by the EstabType column
 * @method IntrcaseQuery orderByEstabaqua($order = Criteria::ASC) Order by the EstabAqua column
 * @method IntrcaseQuery orderByComaqua($order = Criteria::ASC) Order by the ComAqua column
 * @method IntrcaseQuery orderByRepromode($order = Criteria::ASC) Order by the ReproMode column
 * @method IntrcaseQuery orderByEcoleff($order = Criteria::ASC) Order by the EcolEff column
 * @method IntrcaseQuery orderByEcolefftype($order = Criteria::ASC) Order by the EcolEffType column
 * @method IntrcaseQuery orderByImpacts($order = Criteria::ASC) Order by the Impacts column
 * @method IntrcaseQuery orderBySocioeff($order = Criteria::ASC) Order by the SocioEff column
 * @method IntrcaseQuery orderBySocioefftype($order = Criteria::ASC) Order by the SocioEffType column
 * @method IntrcaseQuery orderByIntrsourceref($order = Criteria::ASC) Order by the IntrSourceRef column
 * @method IntrcaseQuery orderByRecordsource($order = Criteria::ASC) Order by the RecordSource column
 * @method IntrcaseQuery orderByInvasive($order = Criteria::ASC) Order by the Invasive column
 * @method IntrcaseQuery orderByInvasiveref($order = Criteria::ASC) Order by the InvasiveRef column
 * @method IntrcaseQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method IntrcaseQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method IntrcaseQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method IntrcaseQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method IntrcaseQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method IntrcaseQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method IntrcaseQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method IntrcaseQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method IntrcaseQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method IntrcaseQuery groupByAutoctr() Group by the autoctr column
 * @method IntrcaseQuery groupByIntrcaserefno() Group by the IntrCaseRefNo column
 * @method IntrcaseQuery groupByStockcode() Group by the StockCode column
 * @method IntrcaseQuery groupBySpeccode() Group by the SpecCode column
 * @method IntrcaseQuery groupByYear() Group by the Year column
 * @method IntrcaseQuery groupByRangemin() Group by the RangeMin column
 * @method IntrcaseQuery groupByRangemax() Group by the RangeMax column
 * @method IntrcaseQuery groupByPeriod() Group by the Period column
 * @method IntrcaseQuery groupByPeriodorder() Group by the PeriodOrder column
 * @method IntrcaseQuery groupByTo() Group by the TO column
 * @method IntrcaseQuery groupByCCodeTo() Group by the C_Code_To column
 * @method IntrcaseQuery groupByAreaTo() Group by the Area_To column
 * @method IntrcaseQuery groupByFrom() Group by the From column
 * @method IntrcaseQuery groupByCCodeFrom() Group by the C_Code_From column
 * @method IntrcaseQuery groupByAreaFrom() Group by the Area_From column
 * @method IntrcaseQuery groupByReason() Group by the Reason column
 * @method IntrcaseQuery groupByOtherreason() Group by the OtherReason column
 * @method IntrcaseQuery groupByOtherreason2() Group by the OtherReason2 column
 * @method IntrcaseQuery groupByReasonorder() Group by the ReasonOrder column
 * @method IntrcaseQuery groupByIntroducer() Group by the Introducer column
 * @method IntrcaseQuery groupByEstabwild() Group by the Estabwild column
 * @method IntrcaseQuery groupByEstabtype() Group by the EstabType column
 * @method IntrcaseQuery groupByEstabaqua() Group by the EstabAqua column
 * @method IntrcaseQuery groupByComaqua() Group by the ComAqua column
 * @method IntrcaseQuery groupByRepromode() Group by the ReproMode column
 * @method IntrcaseQuery groupByEcoleff() Group by the EcolEff column
 * @method IntrcaseQuery groupByEcolefftype() Group by the EcolEffType column
 * @method IntrcaseQuery groupByImpacts() Group by the Impacts column
 * @method IntrcaseQuery groupBySocioeff() Group by the SocioEff column
 * @method IntrcaseQuery groupBySocioefftype() Group by the SocioEffType column
 * @method IntrcaseQuery groupByIntrsourceref() Group by the IntrSourceRef column
 * @method IntrcaseQuery groupByRecordsource() Group by the RecordSource column
 * @method IntrcaseQuery groupByInvasive() Group by the Invasive column
 * @method IntrcaseQuery groupByInvasiveref() Group by the InvasiveRef column
 * @method IntrcaseQuery groupByEntered() Group by the Entered column
 * @method IntrcaseQuery groupByDateentered() Group by the DateEntered column
 * @method IntrcaseQuery groupByModified() Group by the Modified column
 * @method IntrcaseQuery groupByDatemodified() Group by the DateModified column
 * @method IntrcaseQuery groupByExpert() Group by the Expert column
 * @method IntrcaseQuery groupByDatechecked() Group by the DateChecked column
 * @method IntrcaseQuery groupByComments() Group by the Comments column
 * @method IntrcaseQuery groupByRemarks() Group by the Remarks column
 * @method IntrcaseQuery groupByTs() Group by the TS column
 *
 * @method IntrcaseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method IntrcaseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method IntrcaseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Intrcase findOne(PropelPDO $con = null) Return the first Intrcase matching the query
 * @method Intrcase findOneOrCreate(PropelPDO $con = null) Return the first Intrcase matching the query, or a new Intrcase object populated from the query conditions when no match is found
 *
 * @method Intrcase findOneByAutoctr(int $autoctr) Return the first Intrcase filtered by the autoctr column
 * @method Intrcase findOneByIntrcaserefno(int $IntrCaseRefNo) Return the first Intrcase filtered by the IntrCaseRefNo column
 * @method Intrcase findOneByStockcode(int $StockCode) Return the first Intrcase filtered by the StockCode column
 * @method Intrcase findOneBySpeccode(int $SpecCode) Return the first Intrcase filtered by the SpecCode column
 * @method Intrcase findOneByYear(int $Year) Return the first Intrcase filtered by the Year column
 * @method Intrcase findOneByRangemin(int $RangeMin) Return the first Intrcase filtered by the RangeMin column
 * @method Intrcase findOneByRangemax(int $RangeMax) Return the first Intrcase filtered by the RangeMax column
 * @method Intrcase findOneByPeriod(string $Period) Return the first Intrcase filtered by the Period column
 * @method Intrcase findOneByPeriodorder(string $PeriodOrder) Return the first Intrcase filtered by the PeriodOrder column
 * @method Intrcase findOneByTo(string $TO) Return the first Intrcase filtered by the TO column
 * @method Intrcase findOneByCCodeTo(string $C_Code_To) Return the first Intrcase filtered by the C_Code_To column
 * @method Intrcase findOneByAreaTo(int $Area_To) Return the first Intrcase filtered by the Area_To column
 * @method Intrcase findOneByFrom(string $From) Return the first Intrcase filtered by the From column
 * @method Intrcase findOneByCCodeFrom(string $C_Code_From) Return the first Intrcase filtered by the C_Code_From column
 * @method Intrcase findOneByAreaFrom(int $Area_From) Return the first Intrcase filtered by the Area_From column
 * @method Intrcase findOneByReason(string $Reason) Return the first Intrcase filtered by the Reason column
 * @method Intrcase findOneByOtherreason(string $OtherReason) Return the first Intrcase filtered by the OtherReason column
 * @method Intrcase findOneByOtherreason2(string $OtherReason2) Return the first Intrcase filtered by the OtherReason2 column
 * @method Intrcase findOneByReasonorder(int $ReasonOrder) Return the first Intrcase filtered by the ReasonOrder column
 * @method Intrcase findOneByIntroducer(string $Introducer) Return the first Intrcase filtered by the Introducer column
 * @method Intrcase findOneByEstabwild(string $Estabwild) Return the first Intrcase filtered by the Estabwild column
 * @method Intrcase findOneByEstabtype(string $EstabType) Return the first Intrcase filtered by the EstabType column
 * @method Intrcase findOneByEstabaqua(int $EstabAqua) Return the first Intrcase filtered by the EstabAqua column
 * @method Intrcase findOneByComaqua(string $ComAqua) Return the first Intrcase filtered by the ComAqua column
 * @method Intrcase findOneByRepromode(string $ReproMode) Return the first Intrcase filtered by the ReproMode column
 * @method Intrcase findOneByEcoleff(string $EcolEff) Return the first Intrcase filtered by the EcolEff column
 * @method Intrcase findOneByEcolefftype(string $EcolEffType) Return the first Intrcase filtered by the EcolEffType column
 * @method Intrcase findOneByImpacts(string $Impacts) Return the first Intrcase filtered by the Impacts column
 * @method Intrcase findOneBySocioeff(string $SocioEff) Return the first Intrcase filtered by the SocioEff column
 * @method Intrcase findOneBySocioefftype(string $SocioEffType) Return the first Intrcase filtered by the SocioEffType column
 * @method Intrcase findOneByIntrsourceref(int $IntrSourceRef) Return the first Intrcase filtered by the IntrSourceRef column
 * @method Intrcase findOneByRecordsource(string $RecordSource) Return the first Intrcase filtered by the RecordSource column
 * @method Intrcase findOneByInvasive(int $Invasive) Return the first Intrcase filtered by the Invasive column
 * @method Intrcase findOneByInvasiveref(int $InvasiveRef) Return the first Intrcase filtered by the InvasiveRef column
 * @method Intrcase findOneByEntered(int $Entered) Return the first Intrcase filtered by the Entered column
 * @method Intrcase findOneByDateentered(string $DateEntered) Return the first Intrcase filtered by the DateEntered column
 * @method Intrcase findOneByModified(int $Modified) Return the first Intrcase filtered by the Modified column
 * @method Intrcase findOneByDatemodified(string $DateModified) Return the first Intrcase filtered by the DateModified column
 * @method Intrcase findOneByExpert(int $Expert) Return the first Intrcase filtered by the Expert column
 * @method Intrcase findOneByDatechecked(string $DateChecked) Return the first Intrcase filtered by the DateChecked column
 * @method Intrcase findOneByComments(string $Comments) Return the first Intrcase filtered by the Comments column
 * @method Intrcase findOneByRemarks(string $Remarks) Return the first Intrcase filtered by the Remarks column
 * @method Intrcase findOneByTs(string $TS) Return the first Intrcase filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Intrcase objects filtered by the autoctr column
 * @method array findByIntrcaserefno(int $IntrCaseRefNo) Return Intrcase objects filtered by the IntrCaseRefNo column
 * @method array findByStockcode(int $StockCode) Return Intrcase objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Intrcase objects filtered by the SpecCode column
 * @method array findByYear(int $Year) Return Intrcase objects filtered by the Year column
 * @method array findByRangemin(int $RangeMin) Return Intrcase objects filtered by the RangeMin column
 * @method array findByRangemax(int $RangeMax) Return Intrcase objects filtered by the RangeMax column
 * @method array findByPeriod(string $Period) Return Intrcase objects filtered by the Period column
 * @method array findByPeriodorder(string $PeriodOrder) Return Intrcase objects filtered by the PeriodOrder column
 * @method array findByTo(string $TO) Return Intrcase objects filtered by the TO column
 * @method array findByCCodeTo(string $C_Code_To) Return Intrcase objects filtered by the C_Code_To column
 * @method array findByAreaTo(int $Area_To) Return Intrcase objects filtered by the Area_To column
 * @method array findByFrom(string $From) Return Intrcase objects filtered by the From column
 * @method array findByCCodeFrom(string $C_Code_From) Return Intrcase objects filtered by the C_Code_From column
 * @method array findByAreaFrom(int $Area_From) Return Intrcase objects filtered by the Area_From column
 * @method array findByReason(string $Reason) Return Intrcase objects filtered by the Reason column
 * @method array findByOtherreason(string $OtherReason) Return Intrcase objects filtered by the OtherReason column
 * @method array findByOtherreason2(string $OtherReason2) Return Intrcase objects filtered by the OtherReason2 column
 * @method array findByReasonorder(int $ReasonOrder) Return Intrcase objects filtered by the ReasonOrder column
 * @method array findByIntroducer(string $Introducer) Return Intrcase objects filtered by the Introducer column
 * @method array findByEstabwild(string $Estabwild) Return Intrcase objects filtered by the Estabwild column
 * @method array findByEstabtype(string $EstabType) Return Intrcase objects filtered by the EstabType column
 * @method array findByEstabaqua(int $EstabAqua) Return Intrcase objects filtered by the EstabAqua column
 * @method array findByComaqua(string $ComAqua) Return Intrcase objects filtered by the ComAqua column
 * @method array findByRepromode(string $ReproMode) Return Intrcase objects filtered by the ReproMode column
 * @method array findByEcoleff(string $EcolEff) Return Intrcase objects filtered by the EcolEff column
 * @method array findByEcolefftype(string $EcolEffType) Return Intrcase objects filtered by the EcolEffType column
 * @method array findByImpacts(string $Impacts) Return Intrcase objects filtered by the Impacts column
 * @method array findBySocioeff(string $SocioEff) Return Intrcase objects filtered by the SocioEff column
 * @method array findBySocioefftype(string $SocioEffType) Return Intrcase objects filtered by the SocioEffType column
 * @method array findByIntrsourceref(int $IntrSourceRef) Return Intrcase objects filtered by the IntrSourceRef column
 * @method array findByRecordsource(string $RecordSource) Return Intrcase objects filtered by the RecordSource column
 * @method array findByInvasive(int $Invasive) Return Intrcase objects filtered by the Invasive column
 * @method array findByInvasiveref(int $InvasiveRef) Return Intrcase objects filtered by the InvasiveRef column
 * @method array findByEntered(int $Entered) Return Intrcase objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Intrcase objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Intrcase objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Intrcase objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Intrcase objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Intrcase objects filtered by the DateChecked column
 * @method array findByComments(string $Comments) Return Intrcase objects filtered by the Comments column
 * @method array findByRemarks(string $Remarks) Return Intrcase objects filtered by the Remarks column
 * @method array findByTs(string $TS) Return Intrcase objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseIntrcaseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseIntrcaseQuery object.
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
            $modelName = 'Intrcase';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new IntrcaseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   IntrcaseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return IntrcaseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof IntrcaseQuery) {
            return $criteria;
        }
        $query = new IntrcaseQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$StockCode, $Period, $C_Code_To, $From]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Intrcase|Intrcase[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = IntrcasePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(IntrcasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Intrcase A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `IntrCaseRefNo`, `StockCode`, `SpecCode`, `Year`, `RangeMin`, `RangeMax`, `Period`, `PeriodOrder`, `TO`, `C_Code_To`, `Area_To`, `From`, `C_Code_From`, `Area_From`, `Reason`, `OtherReason`, `OtherReason2`, `ReasonOrder`, `Introducer`, `Estabwild`, `EstabType`, `EstabAqua`, `ComAqua`, `ReproMode`, `EcolEff`, `EcolEffType`, `Impacts`, `SocioEff`, `SocioEffType`, `IntrSourceRef`, `RecordSource`, `Invasive`, `InvasiveRef`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Comments`, `Remarks`, `TS` FROM `intrcase` WHERE `StockCode` = :p0 AND `Period` = :p1 AND `C_Code_To` = :p2 AND `From` = :p3';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Intrcase();
            $obj->hydrate($row);
            IntrcasePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3])));
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
     * @return Intrcase|Intrcase[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Intrcase[]|mixed the list of results, formatted by the current formatter
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
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(IntrcasePeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(IntrcasePeer::PERIOD, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(IntrcasePeer::C_CODE_TO, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(IntrcasePeer::FROM, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(IntrcasePeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(IntrcasePeer::PERIOD, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(IntrcasePeer::C_CODE_TO, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(IntrcasePeer::FROM, $key[3], Criteria::EQUAL);
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
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(IntrcasePeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(IntrcasePeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::AUTOCTR, $autoctr, $comparison);
    }

    /**
     * Filter the query on the IntrCaseRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByIntrcaserefno(1234); // WHERE IntrCaseRefNo = 1234
     * $query->filterByIntrcaserefno(array(12, 34)); // WHERE IntrCaseRefNo IN (12, 34)
     * $query->filterByIntrcaserefno(array('min' => 12)); // WHERE IntrCaseRefNo >= 12
     * $query->filterByIntrcaserefno(array('max' => 12)); // WHERE IntrCaseRefNo <= 12
     * </code>
     *
     * @param     mixed $intrcaserefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByIntrcaserefno($intrcaserefno = null, $comparison = null)
    {
        if (is_array($intrcaserefno)) {
            $useMinMax = false;
            if (isset($intrcaserefno['min'])) {
                $this->addUsingAlias(IntrcasePeer::INTRCASEREFNO, $intrcaserefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intrcaserefno['max'])) {
                $this->addUsingAlias(IntrcasePeer::INTRCASEREFNO, $intrcaserefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::INTRCASEREFNO, $intrcaserefno, $comparison);
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
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(IntrcasePeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(IntrcasePeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::STOCKCODE, $stockcode, $comparison);
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
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(IntrcasePeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(IntrcasePeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the Year column
     *
     * Example usage:
     * <code>
     * $query->filterByYear(1234); // WHERE Year = 1234
     * $query->filterByYear(array(12, 34)); // WHERE Year IN (12, 34)
     * $query->filterByYear(array('min' => 12)); // WHERE Year >= 12
     * $query->filterByYear(array('max' => 12)); // WHERE Year <= 12
     * </code>
     *
     * @param     mixed $year The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByYear($year = null, $comparison = null)
    {
        if (is_array($year)) {
            $useMinMax = false;
            if (isset($year['min'])) {
                $this->addUsingAlias(IntrcasePeer::YEAR, $year['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($year['max'])) {
                $this->addUsingAlias(IntrcasePeer::YEAR, $year['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::YEAR, $year, $comparison);
    }

    /**
     * Filter the query on the RangeMin column
     *
     * Example usage:
     * <code>
     * $query->filterByRangemin(1234); // WHERE RangeMin = 1234
     * $query->filterByRangemin(array(12, 34)); // WHERE RangeMin IN (12, 34)
     * $query->filterByRangemin(array('min' => 12)); // WHERE RangeMin >= 12
     * $query->filterByRangemin(array('max' => 12)); // WHERE RangeMin <= 12
     * </code>
     *
     * @param     mixed $rangemin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByRangemin($rangemin = null, $comparison = null)
    {
        if (is_array($rangemin)) {
            $useMinMax = false;
            if (isset($rangemin['min'])) {
                $this->addUsingAlias(IntrcasePeer::RANGEMIN, $rangemin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rangemin['max'])) {
                $this->addUsingAlias(IntrcasePeer::RANGEMIN, $rangemin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::RANGEMIN, $rangemin, $comparison);
    }

    /**
     * Filter the query on the RangeMax column
     *
     * Example usage:
     * <code>
     * $query->filterByRangemax(1234); // WHERE RangeMax = 1234
     * $query->filterByRangemax(array(12, 34)); // WHERE RangeMax IN (12, 34)
     * $query->filterByRangemax(array('min' => 12)); // WHERE RangeMax >= 12
     * $query->filterByRangemax(array('max' => 12)); // WHERE RangeMax <= 12
     * </code>
     *
     * @param     mixed $rangemax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByRangemax($rangemax = null, $comparison = null)
    {
        if (is_array($rangemax)) {
            $useMinMax = false;
            if (isset($rangemax['min'])) {
                $this->addUsingAlias(IntrcasePeer::RANGEMAX, $rangemax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rangemax['max'])) {
                $this->addUsingAlias(IntrcasePeer::RANGEMAX, $rangemax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::RANGEMAX, $rangemax, $comparison);
    }

    /**
     * Filter the query on the Period column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriod('fooValue');   // WHERE Period = 'fooValue'
     * $query->filterByPeriod('%fooValue%'); // WHERE Period LIKE '%fooValue%'
     * </code>
     *
     * @param     string $period The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByPeriod($period = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($period)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $period)) {
                $period = str_replace('*', '%', $period);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::PERIOD, $period, $comparison);
    }

    /**
     * Filter the query on the PeriodOrder column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodorder('fooValue');   // WHERE PeriodOrder = 'fooValue'
     * $query->filterByPeriodorder('%fooValue%'); // WHERE PeriodOrder LIKE '%fooValue%'
     * </code>
     *
     * @param     string $periodorder The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByPeriodorder($periodorder = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($periodorder)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $periodorder)) {
                $periodorder = str_replace('*', '%', $periodorder);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::PERIODORDER, $periodorder, $comparison);
    }

    /**
     * Filter the query on the TO column
     *
     * Example usage:
     * <code>
     * $query->filterByTo('fooValue');   // WHERE TO = 'fooValue'
     * $query->filterByTo('%fooValue%'); // WHERE TO LIKE '%fooValue%'
     * </code>
     *
     * @param     string $to The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByTo($to = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($to)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $to)) {
                $to = str_replace('*', '%', $to);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::TO, $to, $comparison);
    }

    /**
     * Filter the query on the C_Code_To column
     *
     * Example usage:
     * <code>
     * $query->filterByCCodeTo('fooValue');   // WHERE C_Code_To = 'fooValue'
     * $query->filterByCCodeTo('%fooValue%'); // WHERE C_Code_To LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCodeTo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByCCodeTo($cCodeTo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cCodeTo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cCodeTo)) {
                $cCodeTo = str_replace('*', '%', $cCodeTo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::C_CODE_TO, $cCodeTo, $comparison);
    }

    /**
     * Filter the query on the Area_To column
     *
     * Example usage:
     * <code>
     * $query->filterByAreaTo(1234); // WHERE Area_To = 1234
     * $query->filterByAreaTo(array(12, 34)); // WHERE Area_To IN (12, 34)
     * $query->filterByAreaTo(array('min' => 12)); // WHERE Area_To >= 12
     * $query->filterByAreaTo(array('max' => 12)); // WHERE Area_To <= 12
     * </code>
     *
     * @param     mixed $areaTo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByAreaTo($areaTo = null, $comparison = null)
    {
        if (is_array($areaTo)) {
            $useMinMax = false;
            if (isset($areaTo['min'])) {
                $this->addUsingAlias(IntrcasePeer::AREA_TO, $areaTo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areaTo['max'])) {
                $this->addUsingAlias(IntrcasePeer::AREA_TO, $areaTo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::AREA_TO, $areaTo, $comparison);
    }

    /**
     * Filter the query on the From column
     *
     * Example usage:
     * <code>
     * $query->filterByFrom('fooValue');   // WHERE From = 'fooValue'
     * $query->filterByFrom('%fooValue%'); // WHERE From LIKE '%fooValue%'
     * </code>
     *
     * @param     string $from The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByFrom($from = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($from)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $from)) {
                $from = str_replace('*', '%', $from);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::FROM, $from, $comparison);
    }

    /**
     * Filter the query on the C_Code_From column
     *
     * Example usage:
     * <code>
     * $query->filterByCCodeFrom('fooValue');   // WHERE C_Code_From = 'fooValue'
     * $query->filterByCCodeFrom('%fooValue%'); // WHERE C_Code_From LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cCodeFrom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByCCodeFrom($cCodeFrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cCodeFrom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cCodeFrom)) {
                $cCodeFrom = str_replace('*', '%', $cCodeFrom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::C_CODE_FROM, $cCodeFrom, $comparison);
    }

    /**
     * Filter the query on the Area_From column
     *
     * Example usage:
     * <code>
     * $query->filterByAreaFrom(1234); // WHERE Area_From = 1234
     * $query->filterByAreaFrom(array(12, 34)); // WHERE Area_From IN (12, 34)
     * $query->filterByAreaFrom(array('min' => 12)); // WHERE Area_From >= 12
     * $query->filterByAreaFrom(array('max' => 12)); // WHERE Area_From <= 12
     * </code>
     *
     * @param     mixed $areaFrom The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByAreaFrom($areaFrom = null, $comparison = null)
    {
        if (is_array($areaFrom)) {
            $useMinMax = false;
            if (isset($areaFrom['min'])) {
                $this->addUsingAlias(IntrcasePeer::AREA_FROM, $areaFrom['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($areaFrom['max'])) {
                $this->addUsingAlias(IntrcasePeer::AREA_FROM, $areaFrom['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::AREA_FROM, $areaFrom, $comparison);
    }

    /**
     * Filter the query on the Reason column
     *
     * Example usage:
     * <code>
     * $query->filterByReason('fooValue');   // WHERE Reason = 'fooValue'
     * $query->filterByReason('%fooValue%'); // WHERE Reason LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reason The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByReason($reason = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reason)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reason)) {
                $reason = str_replace('*', '%', $reason);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::REASON, $reason, $comparison);
    }

    /**
     * Filter the query on the OtherReason column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherreason('fooValue');   // WHERE OtherReason = 'fooValue'
     * $query->filterByOtherreason('%fooValue%'); // WHERE OtherReason LIKE '%fooValue%'
     * </code>
     *
     * @param     string $otherreason The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByOtherreason($otherreason = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($otherreason)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $otherreason)) {
                $otherreason = str_replace('*', '%', $otherreason);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::OTHERREASON, $otherreason, $comparison);
    }

    /**
     * Filter the query on the OtherReason2 column
     *
     * Example usage:
     * <code>
     * $query->filterByOtherreason2('fooValue');   // WHERE OtherReason2 = 'fooValue'
     * $query->filterByOtherreason2('%fooValue%'); // WHERE OtherReason2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $otherreason2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByOtherreason2($otherreason2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($otherreason2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $otherreason2)) {
                $otherreason2 = str_replace('*', '%', $otherreason2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::OTHERREASON2, $otherreason2, $comparison);
    }

    /**
     * Filter the query on the ReasonOrder column
     *
     * Example usage:
     * <code>
     * $query->filterByReasonorder(1234); // WHERE ReasonOrder = 1234
     * $query->filterByReasonorder(array(12, 34)); // WHERE ReasonOrder IN (12, 34)
     * $query->filterByReasonorder(array('min' => 12)); // WHERE ReasonOrder >= 12
     * $query->filterByReasonorder(array('max' => 12)); // WHERE ReasonOrder <= 12
     * </code>
     *
     * @param     mixed $reasonorder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByReasonorder($reasonorder = null, $comparison = null)
    {
        if (is_array($reasonorder)) {
            $useMinMax = false;
            if (isset($reasonorder['min'])) {
                $this->addUsingAlias(IntrcasePeer::REASONORDER, $reasonorder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reasonorder['max'])) {
                $this->addUsingAlias(IntrcasePeer::REASONORDER, $reasonorder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::REASONORDER, $reasonorder, $comparison);
    }

    /**
     * Filter the query on the Introducer column
     *
     * Example usage:
     * <code>
     * $query->filterByIntroducer('fooValue');   // WHERE Introducer = 'fooValue'
     * $query->filterByIntroducer('%fooValue%'); // WHERE Introducer LIKE '%fooValue%'
     * </code>
     *
     * @param     string $introducer The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByIntroducer($introducer = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($introducer)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $introducer)) {
                $introducer = str_replace('*', '%', $introducer);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::INTRODUCER, $introducer, $comparison);
    }

    /**
     * Filter the query on the Estabwild column
     *
     * Example usage:
     * <code>
     * $query->filterByEstabwild('fooValue');   // WHERE Estabwild = 'fooValue'
     * $query->filterByEstabwild('%fooValue%'); // WHERE Estabwild LIKE '%fooValue%'
     * </code>
     *
     * @param     string $estabwild The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByEstabwild($estabwild = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($estabwild)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $estabwild)) {
                $estabwild = str_replace('*', '%', $estabwild);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::ESTABWILD, $estabwild, $comparison);
    }

    /**
     * Filter the query on the EstabType column
     *
     * Example usage:
     * <code>
     * $query->filterByEstabtype('fooValue');   // WHERE EstabType = 'fooValue'
     * $query->filterByEstabtype('%fooValue%'); // WHERE EstabType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $estabtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByEstabtype($estabtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($estabtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $estabtype)) {
                $estabtype = str_replace('*', '%', $estabtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::ESTABTYPE, $estabtype, $comparison);
    }

    /**
     * Filter the query on the EstabAqua column
     *
     * Example usage:
     * <code>
     * $query->filterByEstabaqua(1234); // WHERE EstabAqua = 1234
     * $query->filterByEstabaqua(array(12, 34)); // WHERE EstabAqua IN (12, 34)
     * $query->filterByEstabaqua(array('min' => 12)); // WHERE EstabAqua >= 12
     * $query->filterByEstabaqua(array('max' => 12)); // WHERE EstabAqua <= 12
     * </code>
     *
     * @param     mixed $estabaqua The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByEstabaqua($estabaqua = null, $comparison = null)
    {
        if (is_array($estabaqua)) {
            $useMinMax = false;
            if (isset($estabaqua['min'])) {
                $this->addUsingAlias(IntrcasePeer::ESTABAQUA, $estabaqua['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($estabaqua['max'])) {
                $this->addUsingAlias(IntrcasePeer::ESTABAQUA, $estabaqua['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::ESTABAQUA, $estabaqua, $comparison);
    }

    /**
     * Filter the query on the ComAqua column
     *
     * Example usage:
     * <code>
     * $query->filterByComaqua('fooValue');   // WHERE ComAqua = 'fooValue'
     * $query->filterByComaqua('%fooValue%'); // WHERE ComAqua LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comaqua The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByComaqua($comaqua = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comaqua)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comaqua)) {
                $comaqua = str_replace('*', '%', $comaqua);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::COMAQUA, $comaqua, $comparison);
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
     * @return IntrcaseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(IntrcasePeer::REPROMODE, $repromode, $comparison);
    }

    /**
     * Filter the query on the EcolEff column
     *
     * Example usage:
     * <code>
     * $query->filterByEcoleff('fooValue');   // WHERE EcolEff = 'fooValue'
     * $query->filterByEcoleff('%fooValue%'); // WHERE EcolEff LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecoleff The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByEcoleff($ecoleff = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecoleff)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecoleff)) {
                $ecoleff = str_replace('*', '%', $ecoleff);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::ECOLEFF, $ecoleff, $comparison);
    }

    /**
     * Filter the query on the EcolEffType column
     *
     * Example usage:
     * <code>
     * $query->filterByEcolefftype('fooValue');   // WHERE EcolEffType = 'fooValue'
     * $query->filterByEcolefftype('%fooValue%'); // WHERE EcolEffType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ecolefftype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByEcolefftype($ecolefftype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ecolefftype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ecolefftype)) {
                $ecolefftype = str_replace('*', '%', $ecolefftype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::ECOLEFFTYPE, $ecolefftype, $comparison);
    }

    /**
     * Filter the query on the Impacts column
     *
     * Example usage:
     * <code>
     * $query->filterByImpacts('fooValue');   // WHERE Impacts = 'fooValue'
     * $query->filterByImpacts('%fooValue%'); // WHERE Impacts LIKE '%fooValue%'
     * </code>
     *
     * @param     string $impacts The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByImpacts($impacts = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($impacts)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $impacts)) {
                $impacts = str_replace('*', '%', $impacts);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::IMPACTS, $impacts, $comparison);
    }

    /**
     * Filter the query on the SocioEff column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioeff('fooValue');   // WHERE SocioEff = 'fooValue'
     * $query->filterBySocioeff('%fooValue%'); // WHERE SocioEff LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioeff The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterBySocioeff($socioeff = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioeff)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioeff)) {
                $socioeff = str_replace('*', '%', $socioeff);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::SOCIOEFF, $socioeff, $comparison);
    }

    /**
     * Filter the query on the SocioEffType column
     *
     * Example usage:
     * <code>
     * $query->filterBySocioefftype('fooValue');   // WHERE SocioEffType = 'fooValue'
     * $query->filterBySocioefftype('%fooValue%'); // WHERE SocioEffType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $socioefftype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterBySocioefftype($socioefftype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($socioefftype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $socioefftype)) {
                $socioefftype = str_replace('*', '%', $socioefftype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::SOCIOEFFTYPE, $socioefftype, $comparison);
    }

    /**
     * Filter the query on the IntrSourceRef column
     *
     * Example usage:
     * <code>
     * $query->filterByIntrsourceref(1234); // WHERE IntrSourceRef = 1234
     * $query->filterByIntrsourceref(array(12, 34)); // WHERE IntrSourceRef IN (12, 34)
     * $query->filterByIntrsourceref(array('min' => 12)); // WHERE IntrSourceRef >= 12
     * $query->filterByIntrsourceref(array('max' => 12)); // WHERE IntrSourceRef <= 12
     * </code>
     *
     * @param     mixed $intrsourceref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByIntrsourceref($intrsourceref = null, $comparison = null)
    {
        if (is_array($intrsourceref)) {
            $useMinMax = false;
            if (isset($intrsourceref['min'])) {
                $this->addUsingAlias(IntrcasePeer::INTRSOURCEREF, $intrsourceref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intrsourceref['max'])) {
                $this->addUsingAlias(IntrcasePeer::INTRSOURCEREF, $intrsourceref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::INTRSOURCEREF, $intrsourceref, $comparison);
    }

    /**
     * Filter the query on the RecordSource column
     *
     * Example usage:
     * <code>
     * $query->filterByRecordsource('fooValue');   // WHERE RecordSource = 'fooValue'
     * $query->filterByRecordsource('%fooValue%'); // WHERE RecordSource LIKE '%fooValue%'
     * </code>
     *
     * @param     string $recordsource The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByRecordsource($recordsource = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($recordsource)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $recordsource)) {
                $recordsource = str_replace('*', '%', $recordsource);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::RECORDSOURCE, $recordsource, $comparison);
    }

    /**
     * Filter the query on the Invasive column
     *
     * Example usage:
     * <code>
     * $query->filterByInvasive(1234); // WHERE Invasive = 1234
     * $query->filterByInvasive(array(12, 34)); // WHERE Invasive IN (12, 34)
     * $query->filterByInvasive(array('min' => 12)); // WHERE Invasive >= 12
     * $query->filterByInvasive(array('max' => 12)); // WHERE Invasive <= 12
     * </code>
     *
     * @param     mixed $invasive The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByInvasive($invasive = null, $comparison = null)
    {
        if (is_array($invasive)) {
            $useMinMax = false;
            if (isset($invasive['min'])) {
                $this->addUsingAlias(IntrcasePeer::INVASIVE, $invasive['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($invasive['max'])) {
                $this->addUsingAlias(IntrcasePeer::INVASIVE, $invasive['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::INVASIVE, $invasive, $comparison);
    }

    /**
     * Filter the query on the InvasiveRef column
     *
     * Example usage:
     * <code>
     * $query->filterByInvasiveref(1234); // WHERE InvasiveRef = 1234
     * $query->filterByInvasiveref(array(12, 34)); // WHERE InvasiveRef IN (12, 34)
     * $query->filterByInvasiveref(array('min' => 12)); // WHERE InvasiveRef >= 12
     * $query->filterByInvasiveref(array('max' => 12)); // WHERE InvasiveRef <= 12
     * </code>
     *
     * @param     mixed $invasiveref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByInvasiveref($invasiveref = null, $comparison = null)
    {
        if (is_array($invasiveref)) {
            $useMinMax = false;
            if (isset($invasiveref['min'])) {
                $this->addUsingAlias(IntrcasePeer::INVASIVEREF, $invasiveref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($invasiveref['max'])) {
                $this->addUsingAlias(IntrcasePeer::INVASIVEREF, $invasiveref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::INVASIVEREF, $invasiveref, $comparison);
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
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(IntrcasePeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(IntrcasePeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::ENTERED, $entered, $comparison);
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
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(IntrcasePeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(IntrcasePeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::DATEENTERED, $dateentered, $comparison);
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
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(IntrcasePeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(IntrcasePeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::MODIFIED, $modified, $comparison);
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
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(IntrcasePeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(IntrcasePeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(IntrcasePeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(IntrcasePeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::EXPERT, $expert, $comparison);
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
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(IntrcasePeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(IntrcasePeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the Comments column
     *
     * Example usage:
     * <code>
     * $query->filterByComments('fooValue');   // WHERE Comments = 'fooValue'
     * $query->filterByComments('%fooValue%'); // WHERE Comments LIKE '%fooValue%'
     * </code>
     *
     * @param     string $comments The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByComments($comments = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($comments)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $comments)) {
                $comments = str_replace('*', '%', $comments);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::COMMENTS, $comments, $comparison);
    }

    /**
     * Filter the query on the Remarks column
     *
     * Example usage:
     * <code>
     * $query->filterByRemarks('fooValue');   // WHERE Remarks = 'fooValue'
     * $query->filterByRemarks('%fooValue%'); // WHERE Remarks LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remarks The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByRemarks($remarks = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remarks)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remarks)) {
                $remarks = str_replace('*', '%', $remarks);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::REMARKS, $remarks, $comparison);
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
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(IntrcasePeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(IntrcasePeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(IntrcasePeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Intrcase $intrcase Object to remove from the list of results
     *
     * @return IntrcaseQuery The current query, for fluid interface
     */
    public function prune($intrcase = null)
    {
        if ($intrcase) {
            $this->addCond('pruneCond0', $this->getAliasedColName(IntrcasePeer::STOCKCODE), $intrcase->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(IntrcasePeer::PERIOD), $intrcase->getPeriod(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(IntrcasePeer::C_CODE_TO), $intrcase->getCCodeTo(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(IntrcasePeer::FROM), $intrcase->getFrom(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
