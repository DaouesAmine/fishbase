<?php


/**
 * Base class that represents a query for the 'poplw' table.
 *
 *
 *
 * @method PoplwQuery orderByAutoctr($order = Criteria::ASC) Order by the AutoCtr column
 * @method PoplwQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method PoplwQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method PoplwQuery orderByFamcode($order = Criteria::ASC) Order by the FamCode column
 * @method PoplwQuery orderByPoplwref($order = Criteria::ASC) Order by the PopLWRef column
 * @method PoplwQuery orderByLengthmin($order = Criteria::ASC) Order by the LengthMin column
 * @method PoplwQuery orderByLengthmax($order = Criteria::ASC) Order by the LengthMax column
 * @method PoplwQuery orderByType($order = Criteria::ASC) Order by the Type column
 * @method PoplwQuery orderByLmaxcompare($order = Criteria::ASC) Order by the LmaxCompare column
 * @method PoplwQuery orderByEsq($order = Criteria::ASC) Order by the EsQ column
 * @method PoplwQuery orderByNumber($order = Criteria::ASC) Order by the Number column
 * @method PoplwQuery orderBySex($order = Criteria::ASC) Order by the Sex column
 * @method PoplwQuery orderByA($order = Criteria::ASC) Order by the a column
 * @method PoplwQuery orderByAtl($order = Criteria::ASC) Order by the aTL column
 * @method PoplwQuery orderByB($order = Criteria::ASC) Order by the b column
 * @method PoplwQuery orderByCoeffdetermination($order = Criteria::ASC) Order by the CoeffDetermination column
 * @method PoplwQuery orderBySea($order = Criteria::ASC) Order by the SEa column
 * @method PoplwQuery orderBySeb($order = Criteria::ASC) Order by the SEb column
 * @method PoplwQuery orderBySda($order = Criteria::ASC) Order by the SDa column
 * @method PoplwQuery orderBySdb($order = Criteria::ASC) Order by the SDb column
 * @method PoplwQuery orderByLcla($order = Criteria::ASC) Order by the LCLa column
 * @method PoplwQuery orderByUcla($order = Criteria::ASC) Order by the UCLa column
 * @method PoplwQuery orderByLclb($order = Criteria::ASC) Order by the LCLb column
 * @method PoplwQuery orderByUclb($order = Criteria::ASC) Order by the UCLb column
 * @method PoplwQuery orderByMethod($order = Criteria::ASC) Order by the Method column
 * @method PoplwQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method PoplwQuery orderByDataref($order = Criteria::ASC) Order by the DataRef column
 * @method PoplwQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method PoplwQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method PoplwQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method PoplwQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method PoplwQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method PoplwQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method PoplwQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method PoplwQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method PoplwQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method PoplwQuery groupByAutoctr() Group by the AutoCtr column
 * @method PoplwQuery groupByStockcode() Group by the StockCode column
 * @method PoplwQuery groupBySpeccode() Group by the SpecCode column
 * @method PoplwQuery groupByFamcode() Group by the FamCode column
 * @method PoplwQuery groupByPoplwref() Group by the PopLWRef column
 * @method PoplwQuery groupByLengthmin() Group by the LengthMin column
 * @method PoplwQuery groupByLengthmax() Group by the LengthMax column
 * @method PoplwQuery groupByType() Group by the Type column
 * @method PoplwQuery groupByLmaxcompare() Group by the LmaxCompare column
 * @method PoplwQuery groupByEsq() Group by the EsQ column
 * @method PoplwQuery groupByNumber() Group by the Number column
 * @method PoplwQuery groupBySex() Group by the Sex column
 * @method PoplwQuery groupByA() Group by the a column
 * @method PoplwQuery groupByAtl() Group by the aTL column
 * @method PoplwQuery groupByB() Group by the b column
 * @method PoplwQuery groupByCoeffdetermination() Group by the CoeffDetermination column
 * @method PoplwQuery groupBySea() Group by the SEa column
 * @method PoplwQuery groupBySeb() Group by the SEb column
 * @method PoplwQuery groupBySda() Group by the SDa column
 * @method PoplwQuery groupBySdb() Group by the SDb column
 * @method PoplwQuery groupByLcla() Group by the LCLa column
 * @method PoplwQuery groupByUcla() Group by the UCLa column
 * @method PoplwQuery groupByLclb() Group by the LCLb column
 * @method PoplwQuery groupByUclb() Group by the UCLb column
 * @method PoplwQuery groupByMethod() Group by the Method column
 * @method PoplwQuery groupByLocality() Group by the Locality column
 * @method PoplwQuery groupByDataref() Group by the DataRef column
 * @method PoplwQuery groupByCCode() Group by the C_Code column
 * @method PoplwQuery groupByComment() Group by the Comment column
 * @method PoplwQuery groupByEntered() Group by the Entered column
 * @method PoplwQuery groupByDateentered() Group by the DateEntered column
 * @method PoplwQuery groupByModified() Group by the Modified column
 * @method PoplwQuery groupByDatemodified() Group by the DateModified column
 * @method PoplwQuery groupByExpert() Group by the Expert column
 * @method PoplwQuery groupByDatechecked() Group by the DateChecked column
 * @method PoplwQuery groupByTs() Group by the TS column
 *
 * @method PoplwQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PoplwQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PoplwQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Poplw findOne(PropelPDO $con = null) Return the first Poplw matching the query
 * @method Poplw findOneOrCreate(PropelPDO $con = null) Return the first Poplw matching the query, or a new Poplw object populated from the query conditions when no match is found
 *
 * @method Poplw findOneByStockcode(int $StockCode) Return the first Poplw filtered by the StockCode column
 * @method Poplw findOneBySpeccode(int $SpecCode) Return the first Poplw filtered by the SpecCode column
 * @method Poplw findOneByFamcode(int $FamCode) Return the first Poplw filtered by the FamCode column
 * @method Poplw findOneByPoplwref(int $PopLWRef) Return the first Poplw filtered by the PopLWRef column
 * @method Poplw findOneByLengthmin(double $LengthMin) Return the first Poplw filtered by the LengthMin column
 * @method Poplw findOneByLengthmax(double $LengthMax) Return the first Poplw filtered by the LengthMax column
 * @method Poplw findOneByType(string $Type) Return the first Poplw filtered by the Type column
 * @method Poplw findOneByLmaxcompare(string $LmaxCompare) Return the first Poplw filtered by the LmaxCompare column
 * @method Poplw findOneByEsq(string $EsQ) Return the first Poplw filtered by the EsQ column
 * @method Poplw findOneByNumber(int $Number) Return the first Poplw filtered by the Number column
 * @method Poplw findOneBySex(string $Sex) Return the first Poplw filtered by the Sex column
 * @method Poplw findOneByA(double $a) Return the first Poplw filtered by the a column
 * @method Poplw findOneByAtl(double $aTL) Return the first Poplw filtered by the aTL column
 * @method Poplw findOneByB(double $b) Return the first Poplw filtered by the b column
 * @method Poplw findOneByCoeffdetermination(double $CoeffDetermination) Return the first Poplw filtered by the CoeffDetermination column
 * @method Poplw findOneBySea(double $SEa) Return the first Poplw filtered by the SEa column
 * @method Poplw findOneBySeb(double $SEb) Return the first Poplw filtered by the SEb column
 * @method Poplw findOneBySda(double $SDa) Return the first Poplw filtered by the SDa column
 * @method Poplw findOneBySdb(double $SDb) Return the first Poplw filtered by the SDb column
 * @method Poplw findOneByLcla(double $LCLa) Return the first Poplw filtered by the LCLa column
 * @method Poplw findOneByUcla(double $UCLa) Return the first Poplw filtered by the UCLa column
 * @method Poplw findOneByLclb(double $LCLb) Return the first Poplw filtered by the LCLb column
 * @method Poplw findOneByUclb(double $UCLb) Return the first Poplw filtered by the UCLb column
 * @method Poplw findOneByMethod(string $Method) Return the first Poplw filtered by the Method column
 * @method Poplw findOneByLocality(string $Locality) Return the first Poplw filtered by the Locality column
 * @method Poplw findOneByDataref(int $DataRef) Return the first Poplw filtered by the DataRef column
 * @method Poplw findOneByCCode(string $C_Code) Return the first Poplw filtered by the C_Code column
 * @method Poplw findOneByComment(string $Comment) Return the first Poplw filtered by the Comment column
 * @method Poplw findOneByEntered(int $Entered) Return the first Poplw filtered by the Entered column
 * @method Poplw findOneByDateentered(string $DateEntered) Return the first Poplw filtered by the DateEntered column
 * @method Poplw findOneByModified(int $Modified) Return the first Poplw filtered by the Modified column
 * @method Poplw findOneByDatemodified(string $DateModified) Return the first Poplw filtered by the DateModified column
 * @method Poplw findOneByExpert(int $Expert) Return the first Poplw filtered by the Expert column
 * @method Poplw findOneByDatechecked(string $DateChecked) Return the first Poplw filtered by the DateChecked column
 * @method Poplw findOneByTs(string $TS) Return the first Poplw filtered by the TS column
 *
 * @method array findByAutoctr(int $AutoCtr) Return Poplw objects filtered by the AutoCtr column
 * @method array findByStockcode(int $StockCode) Return Poplw objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Poplw objects filtered by the SpecCode column
 * @method array findByFamcode(int $FamCode) Return Poplw objects filtered by the FamCode column
 * @method array findByPoplwref(int $PopLWRef) Return Poplw objects filtered by the PopLWRef column
 * @method array findByLengthmin(double $LengthMin) Return Poplw objects filtered by the LengthMin column
 * @method array findByLengthmax(double $LengthMax) Return Poplw objects filtered by the LengthMax column
 * @method array findByType(string $Type) Return Poplw objects filtered by the Type column
 * @method array findByLmaxcompare(string $LmaxCompare) Return Poplw objects filtered by the LmaxCompare column
 * @method array findByEsq(string $EsQ) Return Poplw objects filtered by the EsQ column
 * @method array findByNumber(int $Number) Return Poplw objects filtered by the Number column
 * @method array findBySex(string $Sex) Return Poplw objects filtered by the Sex column
 * @method array findByA(double $a) Return Poplw objects filtered by the a column
 * @method array findByAtl(double $aTL) Return Poplw objects filtered by the aTL column
 * @method array findByB(double $b) Return Poplw objects filtered by the b column
 * @method array findByCoeffdetermination(double $CoeffDetermination) Return Poplw objects filtered by the CoeffDetermination column
 * @method array findBySea(double $SEa) Return Poplw objects filtered by the SEa column
 * @method array findBySeb(double $SEb) Return Poplw objects filtered by the SEb column
 * @method array findBySda(double $SDa) Return Poplw objects filtered by the SDa column
 * @method array findBySdb(double $SDb) Return Poplw objects filtered by the SDb column
 * @method array findByLcla(double $LCLa) Return Poplw objects filtered by the LCLa column
 * @method array findByUcla(double $UCLa) Return Poplw objects filtered by the UCLa column
 * @method array findByLclb(double $LCLb) Return Poplw objects filtered by the LCLb column
 * @method array findByUclb(double $UCLb) Return Poplw objects filtered by the UCLb column
 * @method array findByMethod(string $Method) Return Poplw objects filtered by the Method column
 * @method array findByLocality(string $Locality) Return Poplw objects filtered by the Locality column
 * @method array findByDataref(int $DataRef) Return Poplw objects filtered by the DataRef column
 * @method array findByCCode(string $C_Code) Return Poplw objects filtered by the C_Code column
 * @method array findByComment(string $Comment) Return Poplw objects filtered by the Comment column
 * @method array findByEntered(int $Entered) Return Poplw objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Poplw objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Poplw objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Poplw objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Poplw objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Poplw objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Poplw objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePoplwQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePoplwQuery object.
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
            $modelName = 'Poplw';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PoplwQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PoplwQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PoplwQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PoplwQuery) {
            return $criteria;
        }
        $query = new PoplwQuery(null, null, $modelAlias);

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
     * @return   Poplw|Poplw[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PoplwPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PoplwPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Poplw A model object, or null if the key is not found
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
     * @return                 Poplw A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `AutoCtr`, `StockCode`, `SpecCode`, `FamCode`, `PopLWRef`, `LengthMin`, `LengthMax`, `Type`, `LmaxCompare`, `EsQ`, `Number`, `Sex`, `a`, `aTL`, `b`, `CoeffDetermination`, `SEa`, `SEb`, `SDa`, `SDb`, `LCLa`, `UCLa`, `LCLb`, `UCLb`, `Method`, `Locality`, `DataRef`, `C_Code`, `Comment`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `poplw` WHERE `AutoCtr` = :p0';
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
            $obj = new Poplw();
            $obj->hydrate($row);
            PoplwPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Poplw|Poplw[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Poplw[]|mixed the list of results, formatted by the current formatter
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
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PoplwPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PoplwPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(PoplwPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(PoplwPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(PoplwPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(PoplwPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(PoplwPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(PoplwPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the FamCode column
     *
     * Example usage:
     * <code>
     * $query->filterByFamcode(1234); // WHERE FamCode = 1234
     * $query->filterByFamcode(array(12, 34)); // WHERE FamCode IN (12, 34)
     * $query->filterByFamcode(array('min' => 12)); // WHERE FamCode >= 12
     * $query->filterByFamcode(array('max' => 12)); // WHERE FamCode <= 12
     * </code>
     *
     * @param     mixed $famcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByFamcode($famcode = null, $comparison = null)
    {
        if (is_array($famcode)) {
            $useMinMax = false;
            if (isset($famcode['min'])) {
                $this->addUsingAlias(PoplwPeer::FAMCODE, $famcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($famcode['max'])) {
                $this->addUsingAlias(PoplwPeer::FAMCODE, $famcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::FAMCODE, $famcode, $comparison);
    }

    /**
     * Filter the query on the PopLWRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPoplwref(1234); // WHERE PopLWRef = 1234
     * $query->filterByPoplwref(array(12, 34)); // WHERE PopLWRef IN (12, 34)
     * $query->filterByPoplwref(array('min' => 12)); // WHERE PopLWRef >= 12
     * $query->filterByPoplwref(array('max' => 12)); // WHERE PopLWRef <= 12
     * </code>
     *
     * @param     mixed $poplwref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByPoplwref($poplwref = null, $comparison = null)
    {
        if (is_array($poplwref)) {
            $useMinMax = false;
            if (isset($poplwref['min'])) {
                $this->addUsingAlias(PoplwPeer::POPLWREF, $poplwref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($poplwref['max'])) {
                $this->addUsingAlias(PoplwPeer::POPLWREF, $poplwref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::POPLWREF, $poplwref, $comparison);
    }

    /**
     * Filter the query on the LengthMin column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthmin(1234); // WHERE LengthMin = 1234
     * $query->filterByLengthmin(array(12, 34)); // WHERE LengthMin IN (12, 34)
     * $query->filterByLengthmin(array('min' => 12)); // WHERE LengthMin >= 12
     * $query->filterByLengthmin(array('max' => 12)); // WHERE LengthMin <= 12
     * </code>
     *
     * @param     mixed $lengthmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByLengthmin($lengthmin = null, $comparison = null)
    {
        if (is_array($lengthmin)) {
            $useMinMax = false;
            if (isset($lengthmin['min'])) {
                $this->addUsingAlias(PoplwPeer::LENGTHMIN, $lengthmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthmin['max'])) {
                $this->addUsingAlias(PoplwPeer::LENGTHMIN, $lengthmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::LENGTHMIN, $lengthmin, $comparison);
    }

    /**
     * Filter the query on the LengthMax column
     *
     * Example usage:
     * <code>
     * $query->filterByLengthmax(1234); // WHERE LengthMax = 1234
     * $query->filterByLengthmax(array(12, 34)); // WHERE LengthMax IN (12, 34)
     * $query->filterByLengthmax(array('min' => 12)); // WHERE LengthMax >= 12
     * $query->filterByLengthmax(array('max' => 12)); // WHERE LengthMax <= 12
     * </code>
     *
     * @param     mixed $lengthmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByLengthmax($lengthmax = null, $comparison = null)
    {
        if (is_array($lengthmax)) {
            $useMinMax = false;
            if (isset($lengthmax['min'])) {
                $this->addUsingAlias(PoplwPeer::LENGTHMAX, $lengthmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lengthmax['max'])) {
                $this->addUsingAlias(PoplwPeer::LENGTHMAX, $lengthmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::LENGTHMAX, $lengthmax, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PoplwPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the LmaxCompare column
     *
     * Example usage:
     * <code>
     * $query->filterByLmaxcompare('fooValue');   // WHERE LmaxCompare = 'fooValue'
     * $query->filterByLmaxcompare('%fooValue%'); // WHERE LmaxCompare LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lmaxcompare The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByLmaxcompare($lmaxcompare = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lmaxcompare)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lmaxcompare)) {
                $lmaxcompare = str_replace('*', '%', $lmaxcompare);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplwPeer::LMAXCOMPARE, $lmaxcompare, $comparison);
    }

    /**
     * Filter the query on the EsQ column
     *
     * Example usage:
     * <code>
     * $query->filterByEsq('fooValue');   // WHERE EsQ = 'fooValue'
     * $query->filterByEsq('%fooValue%'); // WHERE EsQ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $esq The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByEsq($esq = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($esq)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $esq)) {
                $esq = str_replace('*', '%', $esq);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PoplwPeer::ESQ, $esq, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByNumber($number = null, $comparison = null)
    {
        if (is_array($number)) {
            $useMinMax = false;
            if (isset($number['min'])) {
                $this->addUsingAlias(PoplwPeer::NUMBER, $number['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($number['max'])) {
                $this->addUsingAlias(PoplwPeer::NUMBER, $number['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::NUMBER, $number, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PoplwPeer::SEX, $sex, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByA($a = null, $comparison = null)
    {
        if (is_array($a)) {
            $useMinMax = false;
            if (isset($a['min'])) {
                $this->addUsingAlias(PoplwPeer::A, $a['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($a['max'])) {
                $this->addUsingAlias(PoplwPeer::A, $a['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::A, $a, $comparison);
    }

    /**
     * Filter the query on the aTL column
     *
     * Example usage:
     * <code>
     * $query->filterByAtl(1234); // WHERE aTL = 1234
     * $query->filterByAtl(array(12, 34)); // WHERE aTL IN (12, 34)
     * $query->filterByAtl(array('min' => 12)); // WHERE aTL >= 12
     * $query->filterByAtl(array('max' => 12)); // WHERE aTL <= 12
     * </code>
     *
     * @param     mixed $atl The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByAtl($atl = null, $comparison = null)
    {
        if (is_array($atl)) {
            $useMinMax = false;
            if (isset($atl['min'])) {
                $this->addUsingAlias(PoplwPeer::ATL, $atl['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($atl['max'])) {
                $this->addUsingAlias(PoplwPeer::ATL, $atl['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::ATL, $atl, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByB($b = null, $comparison = null)
    {
        if (is_array($b)) {
            $useMinMax = false;
            if (isset($b['min'])) {
                $this->addUsingAlias(PoplwPeer::B, $b['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($b['max'])) {
                $this->addUsingAlias(PoplwPeer::B, $b['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::B, $b, $comparison);
    }

    /**
     * Filter the query on the CoeffDetermination column
     *
     * Example usage:
     * <code>
     * $query->filterByCoeffdetermination(1234); // WHERE CoeffDetermination = 1234
     * $query->filterByCoeffdetermination(array(12, 34)); // WHERE CoeffDetermination IN (12, 34)
     * $query->filterByCoeffdetermination(array('min' => 12)); // WHERE CoeffDetermination >= 12
     * $query->filterByCoeffdetermination(array('max' => 12)); // WHERE CoeffDetermination <= 12
     * </code>
     *
     * @param     mixed $coeffdetermination The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByCoeffdetermination($coeffdetermination = null, $comparison = null)
    {
        if (is_array($coeffdetermination)) {
            $useMinMax = false;
            if (isset($coeffdetermination['min'])) {
                $this->addUsingAlias(PoplwPeer::COEFFDETERMINATION, $coeffdetermination['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($coeffdetermination['max'])) {
                $this->addUsingAlias(PoplwPeer::COEFFDETERMINATION, $coeffdetermination['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::COEFFDETERMINATION, $coeffdetermination, $comparison);
    }

    /**
     * Filter the query on the SEa column
     *
     * Example usage:
     * <code>
     * $query->filterBySea(1234); // WHERE SEa = 1234
     * $query->filterBySea(array(12, 34)); // WHERE SEa IN (12, 34)
     * $query->filterBySea(array('min' => 12)); // WHERE SEa >= 12
     * $query->filterBySea(array('max' => 12)); // WHERE SEa <= 12
     * </code>
     *
     * @param     mixed $sea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterBySea($sea = null, $comparison = null)
    {
        if (is_array($sea)) {
            $useMinMax = false;
            if (isset($sea['min'])) {
                $this->addUsingAlias(PoplwPeer::SEA, $sea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sea['max'])) {
                $this->addUsingAlias(PoplwPeer::SEA, $sea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::SEA, $sea, $comparison);
    }

    /**
     * Filter the query on the SEb column
     *
     * Example usage:
     * <code>
     * $query->filterBySeb(1234); // WHERE SEb = 1234
     * $query->filterBySeb(array(12, 34)); // WHERE SEb IN (12, 34)
     * $query->filterBySeb(array('min' => 12)); // WHERE SEb >= 12
     * $query->filterBySeb(array('max' => 12)); // WHERE SEb <= 12
     * </code>
     *
     * @param     mixed $seb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterBySeb($seb = null, $comparison = null)
    {
        if (is_array($seb)) {
            $useMinMax = false;
            if (isset($seb['min'])) {
                $this->addUsingAlias(PoplwPeer::SEB, $seb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($seb['max'])) {
                $this->addUsingAlias(PoplwPeer::SEB, $seb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::SEB, $seb, $comparison);
    }

    /**
     * Filter the query on the SDa column
     *
     * Example usage:
     * <code>
     * $query->filterBySda(1234); // WHERE SDa = 1234
     * $query->filterBySda(array(12, 34)); // WHERE SDa IN (12, 34)
     * $query->filterBySda(array('min' => 12)); // WHERE SDa >= 12
     * $query->filterBySda(array('max' => 12)); // WHERE SDa <= 12
     * </code>
     *
     * @param     mixed $sda The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterBySda($sda = null, $comparison = null)
    {
        if (is_array($sda)) {
            $useMinMax = false;
            if (isset($sda['min'])) {
                $this->addUsingAlias(PoplwPeer::SDA, $sda['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sda['max'])) {
                $this->addUsingAlias(PoplwPeer::SDA, $sda['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::SDA, $sda, $comparison);
    }

    /**
     * Filter the query on the SDb column
     *
     * Example usage:
     * <code>
     * $query->filterBySdb(1234); // WHERE SDb = 1234
     * $query->filterBySdb(array(12, 34)); // WHERE SDb IN (12, 34)
     * $query->filterBySdb(array('min' => 12)); // WHERE SDb >= 12
     * $query->filterBySdb(array('max' => 12)); // WHERE SDb <= 12
     * </code>
     *
     * @param     mixed $sdb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterBySdb($sdb = null, $comparison = null)
    {
        if (is_array($sdb)) {
            $useMinMax = false;
            if (isset($sdb['min'])) {
                $this->addUsingAlias(PoplwPeer::SDB, $sdb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sdb['max'])) {
                $this->addUsingAlias(PoplwPeer::SDB, $sdb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::SDB, $sdb, $comparison);
    }

    /**
     * Filter the query on the LCLa column
     *
     * Example usage:
     * <code>
     * $query->filterByLcla(1234); // WHERE LCLa = 1234
     * $query->filterByLcla(array(12, 34)); // WHERE LCLa IN (12, 34)
     * $query->filterByLcla(array('min' => 12)); // WHERE LCLa >= 12
     * $query->filterByLcla(array('max' => 12)); // WHERE LCLa <= 12
     * </code>
     *
     * @param     mixed $lcla The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByLcla($lcla = null, $comparison = null)
    {
        if (is_array($lcla)) {
            $useMinMax = false;
            if (isset($lcla['min'])) {
                $this->addUsingAlias(PoplwPeer::LCLA, $lcla['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lcla['max'])) {
                $this->addUsingAlias(PoplwPeer::LCLA, $lcla['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::LCLA, $lcla, $comparison);
    }

    /**
     * Filter the query on the UCLa column
     *
     * Example usage:
     * <code>
     * $query->filterByUcla(1234); // WHERE UCLa = 1234
     * $query->filterByUcla(array(12, 34)); // WHERE UCLa IN (12, 34)
     * $query->filterByUcla(array('min' => 12)); // WHERE UCLa >= 12
     * $query->filterByUcla(array('max' => 12)); // WHERE UCLa <= 12
     * </code>
     *
     * @param     mixed $ucla The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByUcla($ucla = null, $comparison = null)
    {
        if (is_array($ucla)) {
            $useMinMax = false;
            if (isset($ucla['min'])) {
                $this->addUsingAlias(PoplwPeer::UCLA, $ucla['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ucla['max'])) {
                $this->addUsingAlias(PoplwPeer::UCLA, $ucla['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::UCLA, $ucla, $comparison);
    }

    /**
     * Filter the query on the LCLb column
     *
     * Example usage:
     * <code>
     * $query->filterByLclb(1234); // WHERE LCLb = 1234
     * $query->filterByLclb(array(12, 34)); // WHERE LCLb IN (12, 34)
     * $query->filterByLclb(array('min' => 12)); // WHERE LCLb >= 12
     * $query->filterByLclb(array('max' => 12)); // WHERE LCLb <= 12
     * </code>
     *
     * @param     mixed $lclb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByLclb($lclb = null, $comparison = null)
    {
        if (is_array($lclb)) {
            $useMinMax = false;
            if (isset($lclb['min'])) {
                $this->addUsingAlias(PoplwPeer::LCLB, $lclb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lclb['max'])) {
                $this->addUsingAlias(PoplwPeer::LCLB, $lclb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::LCLB, $lclb, $comparison);
    }

    /**
     * Filter the query on the UCLb column
     *
     * Example usage:
     * <code>
     * $query->filterByUclb(1234); // WHERE UCLb = 1234
     * $query->filterByUclb(array(12, 34)); // WHERE UCLb IN (12, 34)
     * $query->filterByUclb(array('min' => 12)); // WHERE UCLb >= 12
     * $query->filterByUclb(array('max' => 12)); // WHERE UCLb <= 12
     * </code>
     *
     * @param     mixed $uclb The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByUclb($uclb = null, $comparison = null)
    {
        if (is_array($uclb)) {
            $useMinMax = false;
            if (isset($uclb['min'])) {
                $this->addUsingAlias(PoplwPeer::UCLB, $uclb['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uclb['max'])) {
                $this->addUsingAlias(PoplwPeer::UCLB, $uclb['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::UCLB, $uclb, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PoplwPeer::METHOD, $method, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PoplwPeer::LOCALITY, $locality, $comparison);
    }

    /**
     * Filter the query on the DataRef column
     *
     * Example usage:
     * <code>
     * $query->filterByDataref(1234); // WHERE DataRef = 1234
     * $query->filterByDataref(array(12, 34)); // WHERE DataRef IN (12, 34)
     * $query->filterByDataref(array('min' => 12)); // WHERE DataRef >= 12
     * $query->filterByDataref(array('max' => 12)); // WHERE DataRef <= 12
     * </code>
     *
     * @param     mixed $dataref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByDataref($dataref = null, $comparison = null)
    {
        if (is_array($dataref)) {
            $useMinMax = false;
            if (isset($dataref['min'])) {
                $this->addUsingAlias(PoplwPeer::DATAREF, $dataref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dataref['max'])) {
                $this->addUsingAlias(PoplwPeer::DATAREF, $dataref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::DATAREF, $dataref, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PoplwPeer::C_CODE, $cCode, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PoplwPeer::COMMENT, $comment, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(PoplwPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(PoplwPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::ENTERED, $entered, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(PoplwPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(PoplwPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(PoplwPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(PoplwPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::MODIFIED, $modified, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(PoplwPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(PoplwPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(PoplwPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(PoplwPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::EXPERT, $expert, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(PoplwPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(PoplwPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return PoplwQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(PoplwPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(PoplwPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PoplwPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Poplw $poplw Object to remove from the list of results
     *
     * @return PoplwQuery The current query, for fluid interface
     */
    public function prune($poplw = null)
    {
        if ($poplw) {
            $this->addUsingAlias(PoplwPeer::AUTOCTR, $poplw->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
