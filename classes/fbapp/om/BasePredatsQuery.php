<?php


/**
 * Base class that represents a query for the 'predats' table.
 *
 *
 *
 * @method PredatsQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method PredatsQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method PredatsQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method PredatsQuery orderByPredatsrefno($order = Criteria::ASC) Order by the PredatsRefNo column
 * @method PredatsQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method PredatsQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method PredatsQuery orderByPredatstage($order = Criteria::ASC) Order by the Predatstage column
 * @method PredatsQuery orderByPredatori($order = Criteria::ASC) Order by the PredatorI column
 * @method PredatsQuery orderByPredatorii($order = Criteria::ASC) Order by the PredatorII column
 * @method PredatsQuery orderByPreystage($order = Criteria::ASC) Order by the PreyStage column
 * @method PredatsQuery orderByPredatorgroup($order = Criteria::ASC) Order by the PredatorGroup column
 * @method PredatsQuery orderByDietp($order = Criteria::ASC) Order by the DietP column
 * @method PredatsQuery orderByStomachcontent($order = Criteria::ASC) Order by the StomachContent column
 * @method PredatsQuery orderByPredatorname($order = Criteria::ASC) Order by the PredatorName column
 * @method PredatsQuery orderByPredatcode($order = Criteria::ASC) Order by the Predatcode column
 * @method PredatsQuery orderByAlphacode($order = Criteria::ASC) Order by the AlphaCode column
 * @method PredatsQuery orderByMaxlength($order = Criteria::ASC) Order by the MaxLength column
 * @method PredatsQuery orderByMaxlengthtype($order = Criteria::ASC) Order by the MaxLengthType column
 * @method PredatsQuery orderByPredattroph($order = Criteria::ASC) Order by the PredatTroph column
 * @method PredatsQuery orderByPredatsetroph($order = Criteria::ASC) Order by the PredatseTroph column
 * @method PredatsQuery orderByPredatref($order = Criteria::ASC) Order by the PredatRef column
 * @method PredatsQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method PredatsQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method PredatsQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method PredatsQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method PredatsQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method PredatsQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method PredatsQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method PredatsQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method PredatsQuery groupByAutoctr() Group by the autoctr column
 * @method PredatsQuery groupByStockcode() Group by the StockCode column
 * @method PredatsQuery groupBySpeccode() Group by the SpecCode column
 * @method PredatsQuery groupByPredatsrefno() Group by the PredatsRefNo column
 * @method PredatsQuery groupByLocality() Group by the Locality column
 * @method PredatsQuery groupByCCode() Group by the C_Code column
 * @method PredatsQuery groupByPredatstage() Group by the Predatstage column
 * @method PredatsQuery groupByPredatori() Group by the PredatorI column
 * @method PredatsQuery groupByPredatorii() Group by the PredatorII column
 * @method PredatsQuery groupByPreystage() Group by the PreyStage column
 * @method PredatsQuery groupByPredatorgroup() Group by the PredatorGroup column
 * @method PredatsQuery groupByDietp() Group by the DietP column
 * @method PredatsQuery groupByStomachcontent() Group by the StomachContent column
 * @method PredatsQuery groupByPredatorname() Group by the PredatorName column
 * @method PredatsQuery groupByPredatcode() Group by the Predatcode column
 * @method PredatsQuery groupByAlphacode() Group by the AlphaCode column
 * @method PredatsQuery groupByMaxlength() Group by the MaxLength column
 * @method PredatsQuery groupByMaxlengthtype() Group by the MaxLengthType column
 * @method PredatsQuery groupByPredattroph() Group by the PredatTroph column
 * @method PredatsQuery groupByPredatsetroph() Group by the PredatseTroph column
 * @method PredatsQuery groupByPredatref() Group by the PredatRef column
 * @method PredatsQuery groupByRemarks() Group by the Remarks column
 * @method PredatsQuery groupByEntered() Group by the Entered column
 * @method PredatsQuery groupByDateentered() Group by the DateEntered column
 * @method PredatsQuery groupByModified() Group by the Modified column
 * @method PredatsQuery groupByDatemodified() Group by the DateModified column
 * @method PredatsQuery groupByExpert() Group by the Expert column
 * @method PredatsQuery groupByDatechecked() Group by the DateChecked column
 * @method PredatsQuery groupByTs() Group by the TS column
 *
 * @method PredatsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PredatsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PredatsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Predats findOne(PropelPDO $con = null) Return the first Predats matching the query
 * @method Predats findOneOrCreate(PropelPDO $con = null) Return the first Predats matching the query, or a new Predats object populated from the query conditions when no match is found
 *
 * @method Predats findOneByAutoctr(int $autoctr) Return the first Predats filtered by the autoctr column
 * @method Predats findOneByStockcode(int $StockCode) Return the first Predats filtered by the StockCode column
 * @method Predats findOneBySpeccode(int $SpecCode) Return the first Predats filtered by the SpecCode column
 * @method Predats findOneByPredatsrefno(int $PredatsRefNo) Return the first Predats filtered by the PredatsRefNo column
 * @method Predats findOneByLocality(string $Locality) Return the first Predats filtered by the Locality column
 * @method Predats findOneByCCode(string $C_Code) Return the first Predats filtered by the C_Code column
 * @method Predats findOneByPredatstage(string $Predatstage) Return the first Predats filtered by the Predatstage column
 * @method Predats findOneByPredatori(string $PredatorI) Return the first Predats filtered by the PredatorI column
 * @method Predats findOneByPredatorii(string $PredatorII) Return the first Predats filtered by the PredatorII column
 * @method Predats findOneByPreystage(string $PreyStage) Return the first Predats filtered by the PreyStage column
 * @method Predats findOneByPredatorgroup(string $PredatorGroup) Return the first Predats filtered by the PredatorGroup column
 * @method Predats findOneByDietp(double $DietP) Return the first Predats filtered by the DietP column
 * @method Predats findOneByStomachcontent(string $StomachContent) Return the first Predats filtered by the StomachContent column
 * @method Predats findOneByPredatorname(string $PredatorName) Return the first Predats filtered by the PredatorName column
 * @method Predats findOneByPredatcode(int $Predatcode) Return the first Predats filtered by the Predatcode column
 * @method Predats findOneByAlphacode(string $AlphaCode) Return the first Predats filtered by the AlphaCode column
 * @method Predats findOneByMaxlength(double $MaxLength) Return the first Predats filtered by the MaxLength column
 * @method Predats findOneByMaxlengthtype(string $MaxLengthType) Return the first Predats filtered by the MaxLengthType column
 * @method Predats findOneByPredattroph(double $PredatTroph) Return the first Predats filtered by the PredatTroph column
 * @method Predats findOneByPredatsetroph(double $PredatseTroph) Return the first Predats filtered by the PredatseTroph column
 * @method Predats findOneByPredatref(int $PredatRef) Return the first Predats filtered by the PredatRef column
 * @method Predats findOneByRemarks(string $Remarks) Return the first Predats filtered by the Remarks column
 * @method Predats findOneByEntered(int $Entered) Return the first Predats filtered by the Entered column
 * @method Predats findOneByDateentered(string $DateEntered) Return the first Predats filtered by the DateEntered column
 * @method Predats findOneByModified(int $Modified) Return the first Predats filtered by the Modified column
 * @method Predats findOneByDatemodified(string $DateModified) Return the first Predats filtered by the DateModified column
 * @method Predats findOneByExpert(int $Expert) Return the first Predats filtered by the Expert column
 * @method Predats findOneByDatechecked(string $DateChecked) Return the first Predats filtered by the DateChecked column
 * @method Predats findOneByTs(string $TS) Return the first Predats filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Predats objects filtered by the autoctr column
 * @method array findByStockcode(int $StockCode) Return Predats objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Predats objects filtered by the SpecCode column
 * @method array findByPredatsrefno(int $PredatsRefNo) Return Predats objects filtered by the PredatsRefNo column
 * @method array findByLocality(string $Locality) Return Predats objects filtered by the Locality column
 * @method array findByCCode(string $C_Code) Return Predats objects filtered by the C_Code column
 * @method array findByPredatstage(string $Predatstage) Return Predats objects filtered by the Predatstage column
 * @method array findByPredatori(string $PredatorI) Return Predats objects filtered by the PredatorI column
 * @method array findByPredatorii(string $PredatorII) Return Predats objects filtered by the PredatorII column
 * @method array findByPreystage(string $PreyStage) Return Predats objects filtered by the PreyStage column
 * @method array findByPredatorgroup(string $PredatorGroup) Return Predats objects filtered by the PredatorGroup column
 * @method array findByDietp(double $DietP) Return Predats objects filtered by the DietP column
 * @method array findByStomachcontent(string $StomachContent) Return Predats objects filtered by the StomachContent column
 * @method array findByPredatorname(string $PredatorName) Return Predats objects filtered by the PredatorName column
 * @method array findByPredatcode(int $Predatcode) Return Predats objects filtered by the Predatcode column
 * @method array findByAlphacode(string $AlphaCode) Return Predats objects filtered by the AlphaCode column
 * @method array findByMaxlength(double $MaxLength) Return Predats objects filtered by the MaxLength column
 * @method array findByMaxlengthtype(string $MaxLengthType) Return Predats objects filtered by the MaxLengthType column
 * @method array findByPredattroph(double $PredatTroph) Return Predats objects filtered by the PredatTroph column
 * @method array findByPredatsetroph(double $PredatseTroph) Return Predats objects filtered by the PredatseTroph column
 * @method array findByPredatref(int $PredatRef) Return Predats objects filtered by the PredatRef column
 * @method array findByRemarks(string $Remarks) Return Predats objects filtered by the Remarks column
 * @method array findByEntered(int $Entered) Return Predats objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Predats objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Predats objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Predats objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Predats objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Predats objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Predats objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BasePredatsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePredatsQuery object.
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
            $modelName = 'Predats';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PredatsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PredatsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PredatsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PredatsQuery) {
            return $criteria;
        }
        $query = new PredatsQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$StockCode, $Predatstage, $PreyStage, $PredatorGroup, $PredatorName]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Predats|Predats[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PredatsPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PredatsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Predats A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `StockCode`, `SpecCode`, `PredatsRefNo`, `Locality`, `C_Code`, `Predatstage`, `PredatorI`, `PredatorII`, `PreyStage`, `PredatorGroup`, `DietP`, `StomachContent`, `PredatorName`, `Predatcode`, `AlphaCode`, `MaxLength`, `MaxLengthType`, `PredatTroph`, `PredatseTroph`, `PredatRef`, `Remarks`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `predats` WHERE `StockCode` = :p0 AND `Predatstage` = :p1 AND `PreyStage` = :p2 AND `PredatorGroup` = :p3 AND `PredatorName` = :p4';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Predats();
            $obj->hydrate($row);
            PredatsPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4])));
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
     * @return Predats|Predats[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Predats[]|mixed the list of results, formatted by the current formatter
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
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(PredatsPeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PredatsPeer::PREDATSTAGE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(PredatsPeer::PREYSTAGE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(PredatsPeer::PREDATORGROUP, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(PredatsPeer::PREDATORNAME, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(PredatsPeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PredatsPeer::PREDATSTAGE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(PredatsPeer::PREYSTAGE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(PredatsPeer::PREDATORGROUP, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(PredatsPeer::PREDATORNAME, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
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
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(PredatsPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(PredatsPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(PredatsPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(PredatsPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(PredatsPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(PredatsPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the PredatsRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatsrefno(1234); // WHERE PredatsRefNo = 1234
     * $query->filterByPredatsrefno(array(12, 34)); // WHERE PredatsRefNo IN (12, 34)
     * $query->filterByPredatsrefno(array('min' => 12)); // WHERE PredatsRefNo >= 12
     * $query->filterByPredatsrefno(array('max' => 12)); // WHERE PredatsRefNo <= 12
     * </code>
     *
     * @param     mixed $predatsrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByPredatsrefno($predatsrefno = null, $comparison = null)
    {
        if (is_array($predatsrefno)) {
            $useMinMax = false;
            if (isset($predatsrefno['min'])) {
                $this->addUsingAlias(PredatsPeer::PREDATSREFNO, $predatsrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($predatsrefno['max'])) {
                $this->addUsingAlias(PredatsPeer::PREDATSREFNO, $predatsrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::PREDATSREFNO, $predatsrefno, $comparison);
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
     * @return PredatsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PredatsPeer::LOCALITY, $locality, $comparison);
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
     * @return PredatsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PredatsPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the Predatstage column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatstage('fooValue');   // WHERE Predatstage = 'fooValue'
     * $query->filterByPredatstage('%fooValue%'); // WHERE Predatstage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $predatstage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByPredatstage($predatstage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($predatstage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $predatstage)) {
                $predatstage = str_replace('*', '%', $predatstage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PredatsPeer::PREDATSTAGE, $predatstage, $comparison);
    }

    /**
     * Filter the query on the PredatorI column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatori('fooValue');   // WHERE PredatorI = 'fooValue'
     * $query->filterByPredatori('%fooValue%'); // WHERE PredatorI LIKE '%fooValue%'
     * </code>
     *
     * @param     string $predatori The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByPredatori($predatori = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($predatori)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $predatori)) {
                $predatori = str_replace('*', '%', $predatori);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PredatsPeer::PREDATORI, $predatori, $comparison);
    }

    /**
     * Filter the query on the PredatorII column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatorii('fooValue');   // WHERE PredatorII = 'fooValue'
     * $query->filterByPredatorii('%fooValue%'); // WHERE PredatorII LIKE '%fooValue%'
     * </code>
     *
     * @param     string $predatorii The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByPredatorii($predatorii = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($predatorii)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $predatorii)) {
                $predatorii = str_replace('*', '%', $predatorii);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PredatsPeer::PREDATORII, $predatorii, $comparison);
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
     * @return PredatsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PredatsPeer::PREYSTAGE, $preystage, $comparison);
    }

    /**
     * Filter the query on the PredatorGroup column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatorgroup('fooValue');   // WHERE PredatorGroup = 'fooValue'
     * $query->filterByPredatorgroup('%fooValue%'); // WHERE PredatorGroup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $predatorgroup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByPredatorgroup($predatorgroup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($predatorgroup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $predatorgroup)) {
                $predatorgroup = str_replace('*', '%', $predatorgroup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PredatsPeer::PREDATORGROUP, $predatorgroup, $comparison);
    }

    /**
     * Filter the query on the DietP column
     *
     * Example usage:
     * <code>
     * $query->filterByDietp(1234); // WHERE DietP = 1234
     * $query->filterByDietp(array(12, 34)); // WHERE DietP IN (12, 34)
     * $query->filterByDietp(array('min' => 12)); // WHERE DietP >= 12
     * $query->filterByDietp(array('max' => 12)); // WHERE DietP <= 12
     * </code>
     *
     * @param     mixed $dietp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByDietp($dietp = null, $comparison = null)
    {
        if (is_array($dietp)) {
            $useMinMax = false;
            if (isset($dietp['min'])) {
                $this->addUsingAlias(PredatsPeer::DIETP, $dietp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dietp['max'])) {
                $this->addUsingAlias(PredatsPeer::DIETP, $dietp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::DIETP, $dietp, $comparison);
    }

    /**
     * Filter the query on the StomachContent column
     *
     * Example usage:
     * <code>
     * $query->filterByStomachcontent('fooValue');   // WHERE StomachContent = 'fooValue'
     * $query->filterByStomachcontent('%fooValue%'); // WHERE StomachContent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stomachcontent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByStomachcontent($stomachcontent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stomachcontent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stomachcontent)) {
                $stomachcontent = str_replace('*', '%', $stomachcontent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PredatsPeer::STOMACHCONTENT, $stomachcontent, $comparison);
    }

    /**
     * Filter the query on the PredatorName column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatorname('fooValue');   // WHERE PredatorName = 'fooValue'
     * $query->filterByPredatorname('%fooValue%'); // WHERE PredatorName LIKE '%fooValue%'
     * </code>
     *
     * @param     string $predatorname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByPredatorname($predatorname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($predatorname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $predatorname)) {
                $predatorname = str_replace('*', '%', $predatorname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PredatsPeer::PREDATORNAME, $predatorname, $comparison);
    }

    /**
     * Filter the query on the Predatcode column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatcode(1234); // WHERE Predatcode = 1234
     * $query->filterByPredatcode(array(12, 34)); // WHERE Predatcode IN (12, 34)
     * $query->filterByPredatcode(array('min' => 12)); // WHERE Predatcode >= 12
     * $query->filterByPredatcode(array('max' => 12)); // WHERE Predatcode <= 12
     * </code>
     *
     * @param     mixed $predatcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByPredatcode($predatcode = null, $comparison = null)
    {
        if (is_array($predatcode)) {
            $useMinMax = false;
            if (isset($predatcode['min'])) {
                $this->addUsingAlias(PredatsPeer::PREDATCODE, $predatcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($predatcode['max'])) {
                $this->addUsingAlias(PredatsPeer::PREDATCODE, $predatcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::PREDATCODE, $predatcode, $comparison);
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
     * @return PredatsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PredatsPeer::ALPHACODE, $alphacode, $comparison);
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
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByMaxlength($maxlength = null, $comparison = null)
    {
        if (is_array($maxlength)) {
            $useMinMax = false;
            if (isset($maxlength['min'])) {
                $this->addUsingAlias(PredatsPeer::MAXLENGTH, $maxlength['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($maxlength['max'])) {
                $this->addUsingAlias(PredatsPeer::MAXLENGTH, $maxlength['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::MAXLENGTH, $maxlength, $comparison);
    }

    /**
     * Filter the query on the MaxLengthType column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxlengthtype('fooValue');   // WHERE MaxLengthType = 'fooValue'
     * $query->filterByMaxlengthtype('%fooValue%'); // WHERE MaxLengthType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maxlengthtype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByMaxlengthtype($maxlengthtype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maxlengthtype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $maxlengthtype)) {
                $maxlengthtype = str_replace('*', '%', $maxlengthtype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PredatsPeer::MAXLENGTHTYPE, $maxlengthtype, $comparison);
    }

    /**
     * Filter the query on the PredatTroph column
     *
     * Example usage:
     * <code>
     * $query->filterByPredattroph(1234); // WHERE PredatTroph = 1234
     * $query->filterByPredattroph(array(12, 34)); // WHERE PredatTroph IN (12, 34)
     * $query->filterByPredattroph(array('min' => 12)); // WHERE PredatTroph >= 12
     * $query->filterByPredattroph(array('max' => 12)); // WHERE PredatTroph <= 12
     * </code>
     *
     * @param     mixed $predattroph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByPredattroph($predattroph = null, $comparison = null)
    {
        if (is_array($predattroph)) {
            $useMinMax = false;
            if (isset($predattroph['min'])) {
                $this->addUsingAlias(PredatsPeer::PREDATTROPH, $predattroph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($predattroph['max'])) {
                $this->addUsingAlias(PredatsPeer::PREDATTROPH, $predattroph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::PREDATTROPH, $predattroph, $comparison);
    }

    /**
     * Filter the query on the PredatseTroph column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatsetroph(1234); // WHERE PredatseTroph = 1234
     * $query->filterByPredatsetroph(array(12, 34)); // WHERE PredatseTroph IN (12, 34)
     * $query->filterByPredatsetroph(array('min' => 12)); // WHERE PredatseTroph >= 12
     * $query->filterByPredatsetroph(array('max' => 12)); // WHERE PredatseTroph <= 12
     * </code>
     *
     * @param     mixed $predatsetroph The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByPredatsetroph($predatsetroph = null, $comparison = null)
    {
        if (is_array($predatsetroph)) {
            $useMinMax = false;
            if (isset($predatsetroph['min'])) {
                $this->addUsingAlias(PredatsPeer::PREDATSETROPH, $predatsetroph['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($predatsetroph['max'])) {
                $this->addUsingAlias(PredatsPeer::PREDATSETROPH, $predatsetroph['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::PREDATSETROPH, $predatsetroph, $comparison);
    }

    /**
     * Filter the query on the PredatRef column
     *
     * Example usage:
     * <code>
     * $query->filterByPredatref(1234); // WHERE PredatRef = 1234
     * $query->filterByPredatref(array(12, 34)); // WHERE PredatRef IN (12, 34)
     * $query->filterByPredatref(array('min' => 12)); // WHERE PredatRef >= 12
     * $query->filterByPredatref(array('max' => 12)); // WHERE PredatRef <= 12
     * </code>
     *
     * @param     mixed $predatref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByPredatref($predatref = null, $comparison = null)
    {
        if (is_array($predatref)) {
            $useMinMax = false;
            if (isset($predatref['min'])) {
                $this->addUsingAlias(PredatsPeer::PREDATREF, $predatref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($predatref['max'])) {
                $this->addUsingAlias(PredatsPeer::PREDATREF, $predatref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::PREDATREF, $predatref, $comparison);
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
     * @return PredatsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PredatsPeer::REMARKS, $remarks, $comparison);
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
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(PredatsPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(PredatsPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::ENTERED, $entered, $comparison);
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
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(PredatsPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(PredatsPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(PredatsPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(PredatsPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::MODIFIED, $modified, $comparison);
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
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(PredatsPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(PredatsPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(PredatsPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(PredatsPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::EXPERT, $expert, $comparison);
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
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(PredatsPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(PredatsPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return PredatsQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(PredatsPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(PredatsPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PredatsPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Predats $predats Object to remove from the list of results
     *
     * @return PredatsQuery The current query, for fluid interface
     */
    public function prune($predats = null)
    {
        if ($predats) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PredatsPeer::STOCKCODE), $predats->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PredatsPeer::PREDATSTAGE), $predats->getPredatstage(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(PredatsPeer::PREYSTAGE), $predats->getPreystage(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(PredatsPeer::PREDATORGROUP), $predats->getPredatorgroup(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(PredatsPeer::PREDATORNAME), $predats->getPredatorname(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
