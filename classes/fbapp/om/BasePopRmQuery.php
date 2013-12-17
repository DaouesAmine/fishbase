<?php


/**
 * Base class that represents a query for the 'pop_rm' table.
 *
 *
 *
 * @method PopRmQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method PopRmQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method PopRmQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method PopRmQuery orderByPoprmref($order = Criteria::ASC) Order by the PopRMRef column
 * @method PopRmQuery orderByData($order = Criteria::ASC) Order by the Data column
 * @method PopRmQuery orderByDatasourceref($order = Criteria::ASC) Order by the DataSourceRef column
 * @method PopRmQuery orderByRm($order = Criteria::ASC) Order by the rm column
 * @method PopRmQuery orderByLoo($order = Criteria::ASC) Order by the Loo column
 * @method PopRmQuery orderByTlinfinity($order = Criteria::ASC) Order by the TLinfinity column
 * @method PopRmQuery orderByK($order = Criteria::ASC) Order by the K column
 * @method PopRmQuery orderByType($order = Criteria::ASC) Order by the Type column
 * @method PopRmQuery orderByMethodrm($order = Criteria::ASC) Order by the Methodrm column
 * @method PopRmQuery orderByWinfinity($order = Criteria::ASC) Order by the Winfinity column
 * @method PopRmQuery orderByWm($order = Criteria::ASC) Order by the Wm column
 * @method PopRmQuery orderByLinflmax($order = Criteria::ASC) Order by the LinfLmax column
 * @method PopRmQuery orderByReliability($order = Criteria::ASC) Order by the Reliability column
 * @method PopRmQuery orderByLoga($order = Criteria::ASC) Order by the loga column
 * @method PopRmQuery orderByB($order = Criteria::ASC) Order by the b column
 * @method PopRmQuery orderByM($order = Criteria::ASC) Order by the M column
 * @method PopRmQuery orderByMethodm($order = Criteria::ASC) Order by the MethodM column
 * @method PopRmQuery orderByMref($order = Criteria::ASC) Order by the MRef column
 * @method PopRmQuery orderByTm($order = Criteria::ASC) Order by the tm column
 * @method PopRmQuery orderByLm($order = Criteria::ASC) Order by the Lm column
 * @method PopRmQuery orderByTypelm($order = Criteria::ASC) Order by the TypeLm column
 * @method PopRmQuery orderByTmax($order = Criteria::ASC) Order by the tmax column
 * @method PopRmQuery orderByF($order = Criteria::ASC) Order by the F column
 * @method PopRmQuery orderByLmloo($order = Criteria::ASC) Order by the LmLoo column
 * @method PopRmQuery orderByUnsexedref($order = Criteria::ASC) Order by the unsexedRef column
 * @method PopRmQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method PopRmQuery orderByGrowthenviron($order = Criteria::ASC) Order by the GrowthEnviron column
 * @method PopRmQuery orderByTemperature($order = Criteria::ASC) Order by the Temperature column
 * @method PopRmQuery orderByDeltat($order = Criteria::ASC) Order by the DeltaT column
 * @method PopRmQuery orderByTempref($order = Criteria::ASC) Order by the TempRef column
 * @method PopRmQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method PopRmQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method PopRmQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method PopRmQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method PopRmQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method PopRmQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method PopRmQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method PopRmQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method PopRmQuery groupByAutoctr() Group by the AutoCtr column
 * @method PopRmQuery groupByStockcode() Group by the StockCode column
 * @method PopRmQuery groupBySpeccode() Group by the SpecCode column
 * @method PopRmQuery groupByPoprmref() Group by the PopRMRef column
 * @method PopRmQuery groupByData() Group by the Data column
 * @method PopRmQuery groupByDatasourceref() Group by the DataSourceRef column
 * @method PopRmQuery groupByRm() Group by the rm column
 * @method PopRmQuery groupByLoo() Group by the Loo column
 * @method PopRmQuery groupByTlinfinity() Group by the TLinfinity column
 * @method PopRmQuery groupByK() Group by the K column
 * @method PopRmQuery groupByType() Group by the Type column
 * @method PopRmQuery groupByMethodrm() Group by the Methodrm column
 * @method PopRmQuery groupByWinfinity() Group by the Winfinity column
 * @method PopRmQuery groupByWm() Group by the Wm column
 * @method PopRmQuery groupByLinflmax() Group by the LinfLmax column
 * @method PopRmQuery groupByReliability() Group by the Reliability column
 * @method PopRmQuery groupByLoga() Group by the loga column
 * @method PopRmQuery groupByB() Group by the b column
 * @method PopRmQuery groupByM() Group by the M column
 * @method PopRmQuery groupByMethodm() Group by the MethodM column
 * @method PopRmQuery groupByMref() Group by the MRef column
 * @method PopRmQuery groupByTm() Group by the tm column
 * @method PopRmQuery groupByLm() Group by the Lm column
 * @method PopRmQuery groupByTypelm() Group by the TypeLm column
 * @method PopRmQuery groupByTmax() Group by the tmax column
 * @method PopRmQuery groupByF() Group by the F column
 * @method PopRmQuery groupByLmloo() Group by the LmLoo column
 * @method PopRmQuery groupByUnsexedref() Group by the unsexedRef column
 * @method PopRmQuery groupByLocality() Group by the Locality column
 * @method PopRmQuery groupByGrowthenviron() Group by the GrowthEnviron column
 * @method PopRmQuery groupByTemperature() Group by the Temperature column
 * @method PopRmQuery groupByDeltat() Group by the DeltaT column
 * @method PopRmQuery groupByTempref() Group by the TempRef column
 * @method PopRmQuery groupByComment() Group by the Comment column
 * @method PopRmQuery groupByEntered() Group by the Entered column
 * @method PopRmQuery groupByDateentered() Group by the DateEntered column
 * @method PopRmQuery groupByModified() Group by the Modified column
 * @method PopRmQuery groupByDatemodified() Group by the DateModified column
 * @method PopRmQuery groupByExpert() Group by the Expert column
 * @method PopRmQuery groupByDatechecked() Group by the DateChecked column
 * @method PopRmQuery groupByTs() Group by the TS column
 *
 * @method PopRmQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PopRmQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PopRmQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PopRm findOne(PropelPDO $con = null) Return the first PopRm matching the query
 * @method PopRm findOneOrCreate(PropelPDO $con = null) Return the first PopRm matching the query, or a new PopRm object populated from the query conditions when no match is found
 *
 * @method PopRm findOneByStockcode(int $StockCode) Return the first PopRm filtered by the StockCode column
 * @method PopRm findOneBySpeccode(int $SpecCode) Return the first PopRm filtered by the SpecCode column
 * @method PopRm findOneByPoprmref(int $PopRMRef) Return the first PopRm filtered by the PopRMRef column
 * @method PopRm findOneByData(string $Data) Return the first PopRm filtered by the Data column
 * @method PopRm findOneByDatasourceref(int $DataSourceRef) Return the first PopRm filtered by the DataSourceRef column
 * @method PopRm findOneByRm(double $rm) Return the first PopRm filtered by the rm column
 * @method PopRm findOneByLoo(double $Loo) Return the first PopRm filtered by the Loo column
 * @method PopRm findOneByTlinfinity(double $TLinfinity) Return the first PopRm filtered by the TLinfinity column
 * @method PopRm findOneByK(double $K) Return the first PopRm filtered by the K column
 * @method PopRm findOneByType(string $Type) Return the first PopRm filtered by the Type column
 * @method PopRm findOneByMethodrm(string $Methodrm) Return the first PopRm filtered by the Methodrm column
 * @method PopRm findOneByWinfinity(double $Winfinity) Return the first PopRm filtered by the Winfinity column
 * @method PopRm findOneByWm(double $Wm) Return the first PopRm filtered by the Wm column
 * @method PopRm findOneByLinflmax(string $LinfLmax) Return the first PopRm filtered by the LinfLmax column
 * @method PopRm findOneByReliability(string $Reliability) Return the first PopRm filtered by the Reliability column
 * @method PopRm findOneByLoga(double $loga) Return the first PopRm filtered by the loga column
 * @method PopRm findOneByB(double $b) Return the first PopRm filtered by the b column
 * @method PopRm findOneByM(double $M) Return the first PopRm filtered by the M column
 * @method PopRm findOneByMethodm(string $MethodM) Return the first PopRm filtered by the MethodM column
 * @method PopRm findOneByMref(int $MRef) Return the first PopRm filtered by the MRef column
 * @method PopRm findOneByTm(double $tm) Return the first PopRm filtered by the tm column
 * @method PopRm findOneByLm(double $Lm) Return the first PopRm filtered by the Lm column
 * @method PopRm findOneByTypelm(string $TypeLm) Return the first PopRm filtered by the TypeLm column
 * @method PopRm findOneByTmax(double $tmax) Return the first PopRm filtered by the tmax column
 * @method PopRm findOneByF(double $F) Return the first PopRm filtered by the F column
 * @method PopRm findOneByLmloo(double $LmLoo) Return the first PopRm filtered by the LmLoo column
 * @method PopRm findOneByUnsexedref(int $unsexedRef) Return the first PopRm filtered by the unsexedRef column
 * @method PopRm findOneByLocality(string $Locality) Return the first PopRm filtered by the Locality column
 * @method PopRm findOneByGrowthenviron(string $GrowthEnviron) Return the first PopRm filtered by the GrowthEnviron column
 * @method PopRm findOneByTemperature(double $Temperature) Return the first PopRm filtered by the Temperature column
 * @method PopRm findOneByDeltat(double $DeltaT) Return the first PopRm filtered by the DeltaT column
 * @method PopRm findOneByTempref(int $TempRef) Return the first PopRm filtered by the TempRef column
 * @method PopRm findOneByComment(string $Comment) Return the first PopRm filtered by the Comment column
 * @method PopRm findOneByEntered(int $Entered) Return the first PopRm filtered by the Entered column
 * @method PopRm findOneByDateentered(string $DateEntered) Return the first PopRm filtered by the DateEntered column
 * @method PopRm findOneByModified(int $Modified) Return the first PopRm filtered by the Modified column
 * @method PopRm findOneByDatemodified(string $DateModified) Return the first PopRm filtered by the DateModified column
 * @method PopRm findOneByExpert(int $Expert) Return the first PopRm filtered by the Expert column
 * @method PopRm findOneByDatechecked(string $DateChecked) Return the first PopRm filtered by the DateChecked column
 * @method PopRm findOneByTs(string $TS) Return the first PopRm filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return PopRm objects filtered by the AutoCtr column
 * @method array findByStockcode(int $StockCode) Return PopRm objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return PopRm objects filtered by the SpecCode column
 * @method array findByPoprmref(int $PopRMRef) Return PopRm objects filtered by the PopRMRef column
 * @method array findByData(string $Data) Return PopRm objects filtered by the Data column
 * @method array findByDatasourceref(int $DataSourceRef) Return PopRm objects filtered by the DataSourceRef column
 * @method array findByRm(double $rm) Return PopRm objects filtered by the rm column
 * @method array findByLoo(double $Loo) Return PopRm objects filtered by the Loo column
 * @method array findByTlinfinity(double $TLinfinity) Return PopRm objects filtered by the TLinfinity column
 * @method array findByK(double $K) Return PopRm objects filtered by the K column
 * @method array findByType(string $Type) Return PopRm objects filtered by the Type column
 * @method array findByMethodrm(string $Methodrm) Return PopRm objects filtered by the Methodrm column
 * @method array findByWinfinity(double $Winfinity) Return PopRm objects filtered by the Winfinity column
 * @method array findByWm(double $Wm) Return PopRm objects filtered by the Wm column
 * @method array findByLinflmax(string $LinfLmax) Return PopRm objects filtered by the LinfLmax column
 * @method array findByReliability(string $Reliability) Return PopRm objects filtered by the Reliability column
 * @method array findByLoga(double $loga) Return PopRm objects filtered by the loga column
 * @method array findByB(double $b) Return PopRm objects filtered by the b column
 * @method array findByM(double $M) Return PopRm objects filtered by the M column
 * @method array findByMethodm(string $MethodM) Return PopRm objects filtered by the MethodM column
 * @method array findByMref(int $MRef) Return PopRm objects filtered by the MRef column
 * @method array findByTm(double $tm) Return PopRm objects filtered by the tm column
 * @method array findByLm(double $Lm) Return PopRm objects filtered by the Lm column
 * @method array findByTypelm(string $TypeLm) Return PopRm objects filtered by the TypeLm column
 * @method array findByTmax(double $tmax) Return PopRm objects filtered by the tmax column
 * @method array findByF(double $F) Return PopRm objects filtered by the F column
 * @method array findByLmloo(double $LmLoo) Return PopRm objects filtered by the LmLoo column
 * @method array findByUnsexedref(int $unsexedRef) Return PopRm objects filtered by the unsexedRef column
 * @method array findByLocality(string $Locality) Return PopRm objects filtered by the Locality column
 * @method array findByGrowthenviron(string $GrowthEnviron) Return PopRm objects filtered by the GrowthEnviron column
 * @method array findByTemperature(double $Temperature) Return PopRm objects filtered by the Temperature column
 * @method array findByDeltat(double $DeltaT) Return PopRm objects filtered by the DeltaT column
 * @method array findByTempref(int $TempRef) Return PopRm objects filtered by the TempRef column
 * @method array findByComment(string $Comment) Return PopRm objects filtered by the Comment column
 * @method array findByEntered(int $Entered) Return PopRm objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return PopRm objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return PopRm objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return PopRm objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return PopRm objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return PopRm objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return PopRm objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePopRmQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePopRmQuery object.
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
            $modelName = 'PopRm';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PopRmQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PopRmQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PopRmQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PopRmQuery) {
            return $criteria;
        }
        $query = new PopRmQuery(null, null, $modelAlias);

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
     * @return   PopRm|PopRm[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PopRmPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PopRmPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PopRm A model object, or null if the key is not found
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
     * @return                 PopRm A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `StockCode`, `SpecCode`, `PopRMRef`, `Data`, `DataSourceRef`, `rm`, `Loo`, `TLinfinity`, `K`, `Type`, `Methodrm`, `Winfinity`, `Wm`, `LinfLmax`, `Reliability`, `loga`, `b`, `M`, `MethodM`, `MRef`, `tm`, `Lm`, `TypeLm`, `tmax`, `F`, `LmLoo`, `unsexedRef`, `Locality`, `GrowthEnviron`, `Temperature`, `DeltaT`, `TempRef`, `Comment`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `pop_rm` WHERE `AutoCtr` = :p0';
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
            $obj = new PopRm();
            $obj->hydrate($row);
            PopRmPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PopRm|PopRm[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PopRm[]|mixed the list of results, formatted by the current formatter
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PopRmPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PopRmPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(PopRmPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(PopRmPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(PopRmPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(PopRmPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(PopRmPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(PopRmPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the PopRMRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPoprmref(1234); // WHERE PopRMRef = 1234
     * $query->filterByPoprmref(array(12, 34)); // WHERE PopRMRef IN (12, 34)
     * $query->filterByPoprmref(array('min' => 12)); // WHERE PopRMRef >= 12
     * $query->filterByPoprmref(array('max' => 12)); // WHERE PopRMRef <= 12
     * </code>
     *
     * @param     mixed $poprmref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByPoprmref($poprmref = null, $comparison = null)
    {
        if (is_array($poprmref)) {
            $useMinMax = false;
            if (isset($poprmref['min'])) {
                $this->addUsingAlias(PopRmPeer::POPRMREF, $poprmref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($poprmref['max'])) {
                $this->addUsingAlias(PopRmPeer::POPRMREF, $poprmref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::POPRMREF, $poprmref, $comparison);
    }

    /**
     * Filter the query on the Data column
     *
     * Example usage:
     * <code>
     * $query->filterByData('fooValue');   // WHERE Data = 'fooValue'
     * $query->filterByData('%fooValue%'); // WHERE Data LIKE '%fooValue%'
     * </code>
     *
     * @param     string $data The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByData($data = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($data)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $data)) {
                $data = str_replace('*', '%', $data);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopRmPeer::DATA, $data, $comparison);
    }

    /**
     * Filter the query on the DataSourceRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDatasourceref(1234); // WHERE DataSourceRef = 1234
     * $query->filterByDatasourceref(array(12, 34)); // WHERE DataSourceRef IN (12, 34)
     * $query->filterByDatasourceref(array('min' => 12)); // WHERE DataSourceRef >= 12
     * $query->filterByDatasourceref(array('max' => 12)); // WHERE DataSourceRef <= 12
     * </code>
     *
     * @param     mixed $datasourceref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByDatasourceref($datasourceref = null, $comparison = null)
    {
        if (is_array($datasourceref)) {
            $useMinMax = false;
            if (isset($datasourceref['min'])) {
                $this->addUsingAlias(PopRmPeer::DATASOURCEREF, $datasourceref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datasourceref['max'])) {
                $this->addUsingAlias(PopRmPeer::DATASOURCEREF, $datasourceref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::DATASOURCEREF, $datasourceref, $comparison);
    }

    /**
     * Filter the query on the rm column
     *
     * Example usage:
     * <code>
     * $query->filterByRm(1234); // WHERE rm = 1234
     * $query->filterByRm(array(12, 34)); // WHERE rm IN (12, 34)
     * $query->filterByRm(array('min' => 12)); // WHERE rm >= 12
     * $query->filterByRm(array('max' => 12)); // WHERE rm <= 12
     * </code>
     *
     * @param     mixed $rm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByRm($rm = null, $comparison = null)
    {
        if (is_array($rm)) {
            $useMinMax = false;
            if (isset($rm['min'])) {
                $this->addUsingAlias(PopRmPeer::RM, $rm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rm['max'])) {
                $this->addUsingAlias(PopRmPeer::RM, $rm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::RM, $rm, $comparison);
    }

    /**
     * Filter the query on the Loo column
     *
     * Example usage:
     * <code>
     * $query->filterByLoo(1234); // WHERE Loo = 1234
     * $query->filterByLoo(array(12, 34)); // WHERE Loo IN (12, 34)
     * $query->filterByLoo(array('min' => 12)); // WHERE Loo >= 12
     * $query->filterByLoo(array('max' => 12)); // WHERE Loo <= 12
     * </code>
     *
     * @param     mixed $loo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByLoo($loo = null, $comparison = null)
    {
        if (is_array($loo)) {
            $useMinMax = false;
            if (isset($loo['min'])) {
                $this->addUsingAlias(PopRmPeer::LOO, $loo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($loo['max'])) {
                $this->addUsingAlias(PopRmPeer::LOO, $loo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::LOO, $loo, $comparison);
    }

    /**
     * Filter the query on the TLinfinity column
     *
     * Example usage:
     * <code>
     * $query->filterByTlinfinity(1234); // WHERE TLinfinity = 1234
     * $query->filterByTlinfinity(array(12, 34)); // WHERE TLinfinity IN (12, 34)
     * $query->filterByTlinfinity(array('min' => 12)); // WHERE TLinfinity >= 12
     * $query->filterByTlinfinity(array('max' => 12)); // WHERE TLinfinity <= 12
     * </code>
     *
     * @param     mixed $tlinfinity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByTlinfinity($tlinfinity = null, $comparison = null)
    {
        if (is_array($tlinfinity)) {
            $useMinMax = false;
            if (isset($tlinfinity['min'])) {
                $this->addUsingAlias(PopRmPeer::TLINFINITY, $tlinfinity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tlinfinity['max'])) {
                $this->addUsingAlias(PopRmPeer::TLINFINITY, $tlinfinity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::TLINFINITY, $tlinfinity, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByK($k = null, $comparison = null)
    {
        if (is_array($k)) {
            $useMinMax = false;
            if (isset($k['min'])) {
                $this->addUsingAlias(PopRmPeer::K, $k['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($k['max'])) {
                $this->addUsingAlias(PopRmPeer::K, $k['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::K, $k, $comparison);
    }

    /**
     * Filter the query on the Type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE Type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE Type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopRmPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the Methodrm column
     *
     * Example usage:
     * <code>
     * $query->filterByMethodrm('fooValue');   // WHERE Methodrm = 'fooValue'
     * $query->filterByMethodrm('%fooValue%'); // WHERE Methodrm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $methodrm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByMethodrm($methodrm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($methodrm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $methodrm)) {
                $methodrm = str_replace('*', '%', $methodrm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopRmPeer::METHODRM, $methodrm, $comparison);
    }

    /**
     * Filter the query on the Winfinity column
     *
     * Example usage:
     * <code>
     * $query->filterByWinfinity(1234); // WHERE Winfinity = 1234
     * $query->filterByWinfinity(array(12, 34)); // WHERE Winfinity IN (12, 34)
     * $query->filterByWinfinity(array('min' => 12)); // WHERE Winfinity >= 12
     * $query->filterByWinfinity(array('max' => 12)); // WHERE Winfinity <= 12
     * </code>
     *
     * @param     mixed $winfinity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByWinfinity($winfinity = null, $comparison = null)
    {
        if (is_array($winfinity)) {
            $useMinMax = false;
            if (isset($winfinity['min'])) {
                $this->addUsingAlias(PopRmPeer::WINFINITY, $winfinity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($winfinity['max'])) {
                $this->addUsingAlias(PopRmPeer::WINFINITY, $winfinity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::WINFINITY, $winfinity, $comparison);
    }

    /**
     * Filter the query on the Wm column
     *
     * Example usage:
     * <code>
     * $query->filterByWm(1234); // WHERE Wm = 1234
     * $query->filterByWm(array(12, 34)); // WHERE Wm IN (12, 34)
     * $query->filterByWm(array('min' => 12)); // WHERE Wm >= 12
     * $query->filterByWm(array('max' => 12)); // WHERE Wm <= 12
     * </code>
     *
     * @param     mixed $wm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByWm($wm = null, $comparison = null)
    {
        if (is_array($wm)) {
            $useMinMax = false;
            if (isset($wm['min'])) {
                $this->addUsingAlias(PopRmPeer::WM, $wm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wm['max'])) {
                $this->addUsingAlias(PopRmPeer::WM, $wm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::WM, $wm, $comparison);
    }

    /**
     * Filter the query on the LinfLmax column
     *
     * Example usage:
     * <code>
     * $query->filterByLinflmax('fooValue');   // WHERE LinfLmax = 'fooValue'
     * $query->filterByLinflmax('%fooValue%'); // WHERE LinfLmax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $linflmax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByLinflmax($linflmax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($linflmax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $linflmax)) {
                $linflmax = str_replace('*', '%', $linflmax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopRmPeer::LINFLMAX, $linflmax, $comparison);
    }

    /**
     * Filter the query on the Reliability column
     *
     * Example usage:
     * <code>
     * $query->filterByReliability('fooValue');   // WHERE Reliability = 'fooValue'
     * $query->filterByReliability('%fooValue%'); // WHERE Reliability LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reliability The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByReliability($reliability = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reliability)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reliability)) {
                $reliability = str_replace('*', '%', $reliability);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopRmPeer::RELIABILITY, $reliability, $comparison);
    }

    /**
     * Filter the query on the loga column
     *
     * Example usage:
     * <code>
     * $query->filterByLoga(1234); // WHERE loga = 1234
     * $query->filterByLoga(array(12, 34)); // WHERE loga IN (12, 34)
     * $query->filterByLoga(array('min' => 12)); // WHERE loga >= 12
     * $query->filterByLoga(array('max' => 12)); // WHERE loga <= 12
     * </code>
     *
     * @param     mixed $loga The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByLoga($loga = null, $comparison = null)
    {
        if (is_array($loga)) {
            $useMinMax = false;
            if (isset($loga['min'])) {
                $this->addUsingAlias(PopRmPeer::LOGA, $loga['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($loga['max'])) {
                $this->addUsingAlias(PopRmPeer::LOGA, $loga['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::LOGA, $loga, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByB($b = null, $comparison = null)
    {
        if (is_array($b)) {
            $useMinMax = false;
            if (isset($b['min'])) {
                $this->addUsingAlias(PopRmPeer::B, $b['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($b['max'])) {
                $this->addUsingAlias(PopRmPeer::B, $b['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::B, $b, $comparison);
    }

    /**
     * Filter the query on the M column
     *
     * Example usage:
     * <code>
     * $query->filterByM(1234); // WHERE M = 1234
     * $query->filterByM(array(12, 34)); // WHERE M IN (12, 34)
     * $query->filterByM(array('min' => 12)); // WHERE M >= 12
     * $query->filterByM(array('max' => 12)); // WHERE M <= 12
     * </code>
     *
     * @param     mixed $m The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByM($m = null, $comparison = null)
    {
        if (is_array($m)) {
            $useMinMax = false;
            if (isset($m['min'])) {
                $this->addUsingAlias(PopRmPeer::M, $m['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($m['max'])) {
                $this->addUsingAlias(PopRmPeer::M, $m['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::M, $m, $comparison);
    }

    /**
     * Filter the query on the MethodM column
     *
     * Example usage:
     * <code>
     * $query->filterByMethodm('fooValue');   // WHERE MethodM = 'fooValue'
     * $query->filterByMethodm('%fooValue%'); // WHERE MethodM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $methodm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByMethodm($methodm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($methodm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $methodm)) {
                $methodm = str_replace('*', '%', $methodm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopRmPeer::METHODM, $methodm, $comparison);
    }

    /**
     * Filter the query on the MRef column
     *
     * Example usage:
     * <code>
     * $query->filterByMref(1234); // WHERE MRef = 1234
     * $query->filterByMref(array(12, 34)); // WHERE MRef IN (12, 34)
     * $query->filterByMref(array('min' => 12)); // WHERE MRef >= 12
     * $query->filterByMref(array('max' => 12)); // WHERE MRef <= 12
     * </code>
     *
     * @param     mixed $mref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByMref($mref = null, $comparison = null)
    {
        if (is_array($mref)) {
            $useMinMax = false;
            if (isset($mref['min'])) {
                $this->addUsingAlias(PopRmPeer::MREF, $mref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mref['max'])) {
                $this->addUsingAlias(PopRmPeer::MREF, $mref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::MREF, $mref, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByTm($tm = null, $comparison = null)
    {
        if (is_array($tm)) {
            $useMinMax = false;
            if (isset($tm['min'])) {
                $this->addUsingAlias(PopRmPeer::TM, $tm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tm['max'])) {
                $this->addUsingAlias(PopRmPeer::TM, $tm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::TM, $tm, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByLm($lm = null, $comparison = null)
    {
        if (is_array($lm)) {
            $useMinMax = false;
            if (isset($lm['min'])) {
                $this->addUsingAlias(PopRmPeer::LM, $lm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lm['max'])) {
                $this->addUsingAlias(PopRmPeer::LM, $lm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::LM, $lm, $comparison);
    }

    /**
     * Filter the query on the TypeLm column
     *
     * Example usage:
     * <code>
     * $query->filterByTypelm('fooValue');   // WHERE TypeLm = 'fooValue'
     * $query->filterByTypelm('%fooValue%'); // WHERE TypeLm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typelm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByTypelm($typelm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typelm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typelm)) {
                $typelm = str_replace('*', '%', $typelm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopRmPeer::TYPELM, $typelm, $comparison);
    }

    /**
     * Filter the query on the tmax column
     *
     * Example usage:
     * <code>
     * $query->filterByTmax(1234); // WHERE tmax = 1234
     * $query->filterByTmax(array(12, 34)); // WHERE tmax IN (12, 34)
     * $query->filterByTmax(array('min' => 12)); // WHERE tmax >= 12
     * $query->filterByTmax(array('max' => 12)); // WHERE tmax <= 12
     * </code>
     *
     * @param     mixed $tmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByTmax($tmax = null, $comparison = null)
    {
        if (is_array($tmax)) {
            $useMinMax = false;
            if (isset($tmax['min'])) {
                $this->addUsingAlias(PopRmPeer::TMAX, $tmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tmax['max'])) {
                $this->addUsingAlias(PopRmPeer::TMAX, $tmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::TMAX, $tmax, $comparison);
    }

    /**
     * Filter the query on the F column
     *
     * Example usage:
     * <code>
     * $query->filterByF(1234); // WHERE F = 1234
     * $query->filterByF(array(12, 34)); // WHERE F IN (12, 34)
     * $query->filterByF(array('min' => 12)); // WHERE F >= 12
     * $query->filterByF(array('max' => 12)); // WHERE F <= 12
     * </code>
     *
     * @param     mixed $f The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByF($f = null, $comparison = null)
    {
        if (is_array($f)) {
            $useMinMax = false;
            if (isset($f['min'])) {
                $this->addUsingAlias(PopRmPeer::F, $f['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($f['max'])) {
                $this->addUsingAlias(PopRmPeer::F, $f['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::F, $f, $comparison);
    }

    /**
     * Filter the query on the LmLoo column
     *
     * Example usage:
     * <code>
     * $query->filterByLmloo(1234); // WHERE LmLoo = 1234
     * $query->filterByLmloo(array(12, 34)); // WHERE LmLoo IN (12, 34)
     * $query->filterByLmloo(array('min' => 12)); // WHERE LmLoo >= 12
     * $query->filterByLmloo(array('max' => 12)); // WHERE LmLoo <= 12
     * </code>
     *
     * @param     mixed $lmloo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByLmloo($lmloo = null, $comparison = null)
    {
        if (is_array($lmloo)) {
            $useMinMax = false;
            if (isset($lmloo['min'])) {
                $this->addUsingAlias(PopRmPeer::LMLOO, $lmloo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lmloo['max'])) {
                $this->addUsingAlias(PopRmPeer::LMLOO, $lmloo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::LMLOO, $lmloo, $comparison);
    }

    /**
     * Filter the query on the unsexedRef column
     *
     * Example usage:
     * <code>
     * $query->filterByUnsexedref(1234); // WHERE unsexedRef = 1234
     * $query->filterByUnsexedref(array(12, 34)); // WHERE unsexedRef IN (12, 34)
     * $query->filterByUnsexedref(array('min' => 12)); // WHERE unsexedRef >= 12
     * $query->filterByUnsexedref(array('max' => 12)); // WHERE unsexedRef <= 12
     * </code>
     *
     * @param     mixed $unsexedref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByUnsexedref($unsexedref = null, $comparison = null)
    {
        if (is_array($unsexedref)) {
            $useMinMax = false;
            if (isset($unsexedref['min'])) {
                $this->addUsingAlias(PopRmPeer::UNSEXEDREF, $unsexedref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unsexedref['max'])) {
                $this->addUsingAlias(PopRmPeer::UNSEXEDREF, $unsexedref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::UNSEXEDREF, $unsexedref, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PopRmPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the GrowthEnviron column
     *
     * Example usage:
     * <code>
     * $query->filterByGrowthenviron('fooValue');   // WHERE GrowthEnviron = 'fooValue'
     * $query->filterByGrowthenviron('%fooValue%'); // WHERE GrowthEnviron LIKE '%fooValue%'
     * </code>
     *
     * @param     string $growthenviron The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByGrowthenviron($growthenviron = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($growthenviron)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $growthenviron)) {
                $growthenviron = str_replace('*', '%', $growthenviron);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PopRmPeer::GROWTHENVIRON, $growthenviron, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByTemperature($temperature = null, $comparison = null)
    {
        if (is_array($temperature)) {
            $useMinMax = false;
            if (isset($temperature['min'])) {
                $this->addUsingAlias(PopRmPeer::TEMPERATURE, $temperature['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($temperature['max'])) {
                $this->addUsingAlias(PopRmPeer::TEMPERATURE, $temperature['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::TEMPERATURE, $temperature, $comparison);
    }

    /**
     * Filter the query on the DeltaT column
     *
     * Example usage:
     * <code>
     * $query->filterByDeltat(1234); // WHERE DeltaT = 1234
     * $query->filterByDeltat(array(12, 34)); // WHERE DeltaT IN (12, 34)
     * $query->filterByDeltat(array('min' => 12)); // WHERE DeltaT >= 12
     * $query->filterByDeltat(array('max' => 12)); // WHERE DeltaT <= 12
     * </code>
     *
     * @param     mixed $deltat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByDeltat($deltat = null, $comparison = null)
    {
        if (is_array($deltat)) {
            $useMinMax = false;
            if (isset($deltat['min'])) {
                $this->addUsingAlias(PopRmPeer::DELTAT, $deltat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deltat['max'])) {
                $this->addUsingAlias(PopRmPeer::DELTAT, $deltat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::DELTAT, $deltat, $comparison);
    }

    /**
     * Filter the query on the TempRef column
     *
     * Example usage:
     * <code>
     * $query->filterByTempref(1234); // WHERE TempRef = 1234
     * $query->filterByTempref(array(12, 34)); // WHERE TempRef IN (12, 34)
     * $query->filterByTempref(array('min' => 12)); // WHERE TempRef >= 12
     * $query->filterByTempref(array('max' => 12)); // WHERE TempRef <= 12
     * </code>
     *
     * @param     mixed $tempref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByTempref($tempref = null, $comparison = null)
    {
        if (is_array($tempref)) {
            $useMinMax = false;
            if (isset($tempref['min'])) {
                $this->addUsingAlias(PopRmPeer::TEMPREF, $tempref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tempref['max'])) {
                $this->addUsingAlias(PopRmPeer::TEMPREF, $tempref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::TEMPREF, $tempref, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PopRmPeer::COMMENT, $comment, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(PopRmPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(PopRmPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::ENTERED, $entered, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(PopRmPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(PopRmPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(PopRmPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(PopRmPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::MODIFIED, $modified, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(PopRmPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(PopRmPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(PopRmPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(PopRmPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::EXPERT, $expert, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(PopRmPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(PopRmPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return PopRmQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(PopRmPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(PopRmPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PopRmPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PopRm $popRm Object to remove from the list of results
     *
     * @return PopRmQuery The current query, for fluid interface
     */
    public function prune($popRm = null)
    {
        if ($popRm) {
            $this->addUsingAlias(PopRmPeer::AUTOCTR, $popRm->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
