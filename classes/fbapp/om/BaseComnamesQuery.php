<?php


/**
 * Base class that represents a query for the 'comnames' table.
 *
 *
 *
 * @method ComnamesQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method ComnamesQuery orderByComname($order = Criteria::ASC) Order by the ComName column
 * @method ComnamesQuery orderByTransliteration($order = Criteria::ASC) Order by the Transliteration column
 * @method ComnamesQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method ComnamesQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method ComnamesQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method ComnamesQuery orderByLanguage($order = Criteria::ASC) Order by the Language column
 * @method ComnamesQuery orderByScript($order = Criteria::ASC) Order by the Script column
 * @method ComnamesQuery orderByUnicodetext($order = Criteria::ASC) Order by the UnicodeText column
 * @method ComnamesQuery orderByNametype($order = Criteria::ASC) Order by the NameType column
 * @method ComnamesQuery orderByPreferredname($order = Criteria::ASC) Order by the PreferredName column
 * @method ComnamesQuery orderByTradename($order = Criteria::ASC) Order by the TradeName column
 * @method ComnamesQuery orderByTradenameref($order = Criteria::ASC) Order by the TradeNameRef column
 * @method ComnamesQuery orderByComnamesrefno($order = Criteria::ASC) Order by the ComNamesRefNo column
 * @method ComnamesQuery orderByMisspelling($order = Criteria::ASC) Order by the Misspelling column
 * @method ComnamesQuery orderBySize($order = Criteria::ASC) Order by the Size column
 * @method ComnamesQuery orderBySex($order = Criteria::ASC) Order by the Sex column
 * @method ComnamesQuery orderByLanguage2($order = Criteria::ASC) Order by the Language2 column
 * @method ComnamesQuery orderByLocality2($order = Criteria::ASC) Order by the Locality2 column
 * @method ComnamesQuery orderByRank($order = Criteria::ASC) Order by the Rank column
 * @method ComnamesQuery orderByRemarks($order = Criteria::ASC) Order by the Remarks column
 * @method ComnamesQuery orderBySecondword($order = Criteria::ASC) Order by the SecondWord column
 * @method ComnamesQuery orderByThirdword($order = Criteria::ASC) Order by the ThirdWord column
 * @method ComnamesQuery orderByFourthword($order = Criteria::ASC) Order by the FourthWord column
 * @method ComnamesQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method ComnamesQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method ComnamesQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method ComnamesQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method ComnamesQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method ComnamesQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method ComnamesQuery orderByCore($order = Criteria::ASC) Order by the Core column
 * @method ComnamesQuery orderByModifier1($order = Criteria::ASC) Order by the modifier1 column
 * @method ComnamesQuery orderByModifier2($order = Criteria::ASC) Order by the modifier2 column
 * @method ComnamesQuery orderByCloffsca($order = Criteria::ASC) Order by the CLOFFSCA column
 *
 * @method ComnamesQuery groupByAutoctr() Group by the autoctr column
 * @method ComnamesQuery groupByComname() Group by the ComName column
 * @method ComnamesQuery groupByTransliteration() Group by the Transliteration column
 * @method ComnamesQuery groupByStockcode() Group by the StockCode column
 * @method ComnamesQuery groupBySpeccode() Group by the SpecCode column
 * @method ComnamesQuery groupByCCode() Group by the C_Code column
 * @method ComnamesQuery groupByLanguage() Group by the Language column
 * @method ComnamesQuery groupByScript() Group by the Script column
 * @method ComnamesQuery groupByUnicodetext() Group by the UnicodeText column
 * @method ComnamesQuery groupByNametype() Group by the NameType column
 * @method ComnamesQuery groupByPreferredname() Group by the PreferredName column
 * @method ComnamesQuery groupByTradename() Group by the TradeName column
 * @method ComnamesQuery groupByTradenameref() Group by the TradeNameRef column
 * @method ComnamesQuery groupByComnamesrefno() Group by the ComNamesRefNo column
 * @method ComnamesQuery groupByMisspelling() Group by the Misspelling column
 * @method ComnamesQuery groupBySize() Group by the Size column
 * @method ComnamesQuery groupBySex() Group by the Sex column
 * @method ComnamesQuery groupByLanguage2() Group by the Language2 column
 * @method ComnamesQuery groupByLocality2() Group by the Locality2 column
 * @method ComnamesQuery groupByRank() Group by the Rank column
 * @method ComnamesQuery groupByRemarks() Group by the Remarks column
 * @method ComnamesQuery groupBySecondword() Group by the SecondWord column
 * @method ComnamesQuery groupByThirdword() Group by the ThirdWord column
 * @method ComnamesQuery groupByFourthword() Group by the FourthWord column
 * @method ComnamesQuery groupByEntered() Group by the Entered column
 * @method ComnamesQuery groupByDateentered() Group by the DateEntered column
 * @method ComnamesQuery groupByModified() Group by the Modified column
 * @method ComnamesQuery groupByDatemodified() Group by the DateModified column
 * @method ComnamesQuery groupByExpert() Group by the Expert column
 * @method ComnamesQuery groupByDatechecked() Group by the DateChecked column
 * @method ComnamesQuery groupByCore() Group by the Core column
 * @method ComnamesQuery groupByModifier1() Group by the modifier1 column
 * @method ComnamesQuery groupByModifier2() Group by the modifier2 column
 * @method ComnamesQuery groupByCloffsca() Group by the CLOFFSCA column
 *
 * @method ComnamesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ComnamesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ComnamesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Comnames findOne(PropelPDO $con = null) Return the first Comnames matching the query
 * @method Comnames findOneOrCreate(PropelPDO $con = null) Return the first Comnames matching the query, or a new Comnames object populated from the query conditions when no match is found
 *
 * @method Comnames findOneByAutoctr(int $autoctr) Return the first Comnames filtered by the autoctr column
 * @method Comnames findOneByComname(string $ComName) Return the first Comnames filtered by the ComName column
 * @method Comnames findOneByTransliteration(string $Transliteration) Return the first Comnames filtered by the Transliteration column
 * @method Comnames findOneByStockcode(int $StockCode) Return the first Comnames filtered by the StockCode column
 * @method Comnames findOneBySpeccode(int $SpecCode) Return the first Comnames filtered by the SpecCode column
 * @method Comnames findOneByCCode(string $C_Code) Return the first Comnames filtered by the C_Code column
 * @method Comnames findOneByLanguage(string $Language) Return the first Comnames filtered by the Language column
 * @method Comnames findOneByScript(string $Script) Return the first Comnames filtered by the Script column
 * @method Comnames findOneByUnicodetext(string $UnicodeText) Return the first Comnames filtered by the UnicodeText column
 * @method Comnames findOneByNametype(string $NameType) Return the first Comnames filtered by the NameType column
 * @method Comnames findOneByPreferredname(int $PreferredName) Return the first Comnames filtered by the PreferredName column
 * @method Comnames findOneByTradename(int $TradeName) Return the first Comnames filtered by the TradeName column
 * @method Comnames findOneByTradenameref(int $TradeNameRef) Return the first Comnames filtered by the TradeNameRef column
 * @method Comnames findOneByComnamesrefno(int $ComNamesRefNo) Return the first Comnames filtered by the ComNamesRefNo column
 * @method Comnames findOneByMisspelling(int $Misspelling) Return the first Comnames filtered by the Misspelling column
 * @method Comnames findOneBySize(string $Size) Return the first Comnames filtered by the Size column
 * @method Comnames findOneBySex(string $Sex) Return the first Comnames filtered by the Sex column
 * @method Comnames findOneByLanguage2(string $Language2) Return the first Comnames filtered by the Language2 column
 * @method Comnames findOneByLocality2(string $Locality2) Return the first Comnames filtered by the Locality2 column
 * @method Comnames findOneByRank(int $Rank) Return the first Comnames filtered by the Rank column
 * @method Comnames findOneByRemarks(string $Remarks) Return the first Comnames filtered by the Remarks column
 * @method Comnames findOneBySecondword(string $SecondWord) Return the first Comnames filtered by the SecondWord column
 * @method Comnames findOneByThirdword(string $ThirdWord) Return the first Comnames filtered by the ThirdWord column
 * @method Comnames findOneByFourthword(string $FourthWord) Return the first Comnames filtered by the FourthWord column
 * @method Comnames findOneByEntered(int $Entered) Return the first Comnames filtered by the Entered column
 * @method Comnames findOneByDateentered(string $DateEntered) Return the first Comnames filtered by the DateEntered column
 * @method Comnames findOneByModified(int $Modified) Return the first Comnames filtered by the Modified column
 * @method Comnames findOneByDatemodified(string $DateModified) Return the first Comnames filtered by the DateModified column
 * @method Comnames findOneByExpert(int $Expert) Return the first Comnames filtered by the Expert column
 * @method Comnames findOneByDatechecked(string $DateChecked) Return the first Comnames filtered by the DateChecked column
 * @method Comnames findOneByCore(string $Core) Return the first Comnames filtered by the Core column
 * @method Comnames findOneByModifier1(string $modifier1) Return the first Comnames filtered by the modifier1 column
 * @method Comnames findOneByModifier2(string $modifier2) Return the first Comnames filtered by the modifier2 column
 * @method Comnames findOneByCloffsca(int $CLOFFSCA) Return the first Comnames filtered by the CLOFFSCA column
 *
 * @method array findByAutoctr(int $autoctr) Return Comnames objects filtered by the autoctr column
 * @method array findByComname(string $ComName) Return Comnames objects filtered by the ComName column
 * @method array findByTransliteration(string $Transliteration) Return Comnames objects filtered by the Transliteration column
 * @method array findByStockcode(int $StockCode) Return Comnames objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Comnames objects filtered by the SpecCode column
 * @method array findByCCode(string $C_Code) Return Comnames objects filtered by the C_Code column
 * @method array findByLanguage(string $Language) Return Comnames objects filtered by the Language column
 * @method array findByScript(string $Script) Return Comnames objects filtered by the Script column
 * @method array findByUnicodetext(string $UnicodeText) Return Comnames objects filtered by the UnicodeText column
 * @method array findByNametype(string $NameType) Return Comnames objects filtered by the NameType column
 * @method array findByPreferredname(int $PreferredName) Return Comnames objects filtered by the PreferredName column
 * @method array findByTradename(int $TradeName) Return Comnames objects filtered by the TradeName column
 * @method array findByTradenameref(int $TradeNameRef) Return Comnames objects filtered by the TradeNameRef column
 * @method array findByComnamesrefno(int $ComNamesRefNo) Return Comnames objects filtered by the ComNamesRefNo column
 * @method array findByMisspelling(int $Misspelling) Return Comnames objects filtered by the Misspelling column
 * @method array findBySize(string $Size) Return Comnames objects filtered by the Size column
 * @method array findBySex(string $Sex) Return Comnames objects filtered by the Sex column
 * @method array findByLanguage2(string $Language2) Return Comnames objects filtered by the Language2 column
 * @method array findByLocality2(string $Locality2) Return Comnames objects filtered by the Locality2 column
 * @method array findByRank(int $Rank) Return Comnames objects filtered by the Rank column
 * @method array findByRemarks(string $Remarks) Return Comnames objects filtered by the Remarks column
 * @method array findBySecondword(string $SecondWord) Return Comnames objects filtered by the SecondWord column
 * @method array findByThirdword(string $ThirdWord) Return Comnames objects filtered by the ThirdWord column
 * @method array findByFourthword(string $FourthWord) Return Comnames objects filtered by the FourthWord column
 * @method array findByEntered(int $Entered) Return Comnames objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Comnames objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Comnames objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Comnames objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Comnames objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Comnames objects filtered by the DateChecked column
 * @method array findByCore(string $Core) Return Comnames objects filtered by the Core column
 * @method array findByModifier1(string $modifier1) Return Comnames objects filtered by the modifier1 column
 * @method array findByModifier2(string $modifier2) Return Comnames objects filtered by the modifier2 column
 * @method array findByCloffsca(int $CLOFFSCA) Return Comnames objects filtered by the CLOFFSCA column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseComnamesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseComnamesQuery object.
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
            $modelName = 'Comnames';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ComnamesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ComnamesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ComnamesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ComnamesQuery) {
            return $criteria;
        }
        $query = new ComnamesQuery(null, null, $modelAlias);

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
                         A Primary key composition: [$autoctr, $ComName, $StockCode, $C_Code, $Language, $NameType]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Comnames|Comnames[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ComnamesPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ComnamesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Comnames A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `ComName`, `Transliteration`, `StockCode`, `SpecCode`, `C_Code`, `Language`, `Script`, `UnicodeText`, `NameType`, `PreferredName`, `TradeName`, `TradeNameRef`, `ComNamesRefNo`, `Misspelling`, `Size`, `Sex`, `Language2`, `Locality2`, `Rank`, `Remarks`, `SecondWord`, `ThirdWord`, `FourthWord`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `Core`, `modifier1`, `modifier2`, `CLOFFSCA` FROM `comnames` WHERE `autoctr` = :p0 AND `ComName` = :p1 AND `StockCode` = :p2 AND `C_Code` = :p3 AND `Language` = :p4 AND `NameType` = :p5';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_STR);
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_STR);
            $stmt->bindValue(':p5', $key[5], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Comnames();
            $obj->hydrate($row);
            ComnamesPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4], (string) $key[5])));
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
     * @return Comnames|Comnames[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Comnames[]|mixed the list of results, formatted by the current formatter
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
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ComnamesPeer::AUTOCTR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ComnamesPeer::COMNAME, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ComnamesPeer::STOCKCODE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ComnamesPeer::C_CODE, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(ComnamesPeer::LANGUAGE, $key[4], Criteria::EQUAL);
        $this->addUsingAlias(ComnamesPeer::NAMETYPE, $key[5], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ComnamesPeer::AUTOCTR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ComnamesPeer::COMNAME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ComnamesPeer::STOCKCODE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ComnamesPeer::C_CODE, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(ComnamesPeer::LANGUAGE, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $cton5 = $this->getNewCriterion(ComnamesPeer::NAMETYPE, $key[5], Criteria::EQUAL);
            $cton0->addAnd($cton5);
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
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(ComnamesPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(ComnamesPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return ComnamesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ComnamesPeer::COMNAME, $comname, $comparison);
    }

    /**
     * Filter the query on the Transliteration column
     *
     * Example usage:
     * <code>
     * $query->filterByTransliteration('fooValue');   // WHERE Transliteration = 'fooValue'
     * $query->filterByTransliteration('%fooValue%'); // WHERE Transliteration LIKE '%fooValue%'
     * </code>
     *
     * @param     string $transliteration The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByTransliteration($transliteration = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($transliteration)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $transliteration)) {
                $transliteration = str_replace('*', '%', $transliteration);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::TRANSLITERATION, $transliteration, $comparison);
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
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(ComnamesPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(ComnamesPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(ComnamesPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(ComnamesPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::SPECCODE, $speccode, $comparison);
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
     * @return ComnamesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ComnamesPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the Language column
     *
     * Example usage:
     * <code>
     * $query->filterByLanguage('fooValue');   // WHERE Language = 'fooValue'
     * $query->filterByLanguage('%fooValue%'); // WHERE Language LIKE '%fooValue%'
     * </code>
     *
     * @param     string $language The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByLanguage($language = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($language)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $language)) {
                $language = str_replace('*', '%', $language);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::LANGUAGE, $language, $comparison);
    }

    /**
     * Filter the query on the Script column
     *
     * Example usage:
     * <code>
     * $query->filterByScript('fooValue');   // WHERE Script = 'fooValue'
     * $query->filterByScript('%fooValue%'); // WHERE Script LIKE '%fooValue%'
     * </code>
     *
     * @param     string $script The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByScript($script = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($script)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $script)) {
                $script = str_replace('*', '%', $script);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::SCRIPT, $script, $comparison);
    }

    /**
     * Filter the query on the UnicodeText column
     *
     * Example usage:
     * <code>
     * $query->filterByUnicodetext('fooValue');   // WHERE UnicodeText = 'fooValue'
     * $query->filterByUnicodetext('%fooValue%'); // WHERE UnicodeText LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unicodetext The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByUnicodetext($unicodetext = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unicodetext)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unicodetext)) {
                $unicodetext = str_replace('*', '%', $unicodetext);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::UNICODETEXT, $unicodetext, $comparison);
    }

    /**
     * Filter the query on the NameType column
     *
     * Example usage:
     * <code>
     * $query->filterByNametype('fooValue');   // WHERE NameType = 'fooValue'
     * $query->filterByNametype('%fooValue%'); // WHERE NameType LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nametype The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByNametype($nametype = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nametype)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nametype)) {
                $nametype = str_replace('*', '%', $nametype);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::NAMETYPE, $nametype, $comparison);
    }

    /**
     * Filter the query on the PreferredName column
     *
     * Example usage:
     * <code>
     * $query->filterByPreferredname(1234); // WHERE PreferredName = 1234
     * $query->filterByPreferredname(array(12, 34)); // WHERE PreferredName IN (12, 34)
     * $query->filterByPreferredname(array('min' => 12)); // WHERE PreferredName >= 12
     * $query->filterByPreferredname(array('max' => 12)); // WHERE PreferredName <= 12
     * </code>
     *
     * @param     mixed $preferredname The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByPreferredname($preferredname = null, $comparison = null)
    {
        if (is_array($preferredname)) {
            $useMinMax = false;
            if (isset($preferredname['min'])) {
                $this->addUsingAlias(ComnamesPeer::PREFERREDNAME, $preferredname['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($preferredname['max'])) {
                $this->addUsingAlias(ComnamesPeer::PREFERREDNAME, $preferredname['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::PREFERREDNAME, $preferredname, $comparison);
    }

    /**
     * Filter the query on the TradeName column
     *
     * Example usage:
     * <code>
     * $query->filterByTradename(1234); // WHERE TradeName = 1234
     * $query->filterByTradename(array(12, 34)); // WHERE TradeName IN (12, 34)
     * $query->filterByTradename(array('min' => 12)); // WHERE TradeName >= 12
     * $query->filterByTradename(array('max' => 12)); // WHERE TradeName <= 12
     * </code>
     *
     * @param     mixed $tradename The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByTradename($tradename = null, $comparison = null)
    {
        if (is_array($tradename)) {
            $useMinMax = false;
            if (isset($tradename['min'])) {
                $this->addUsingAlias(ComnamesPeer::TRADENAME, $tradename['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tradename['max'])) {
                $this->addUsingAlias(ComnamesPeer::TRADENAME, $tradename['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::TRADENAME, $tradename, $comparison);
    }

    /**
     * Filter the query on the TradeNameRef column
     *
     * Example usage:
     * <code>
     * $query->filterByTradenameref(1234); // WHERE TradeNameRef = 1234
     * $query->filterByTradenameref(array(12, 34)); // WHERE TradeNameRef IN (12, 34)
     * $query->filterByTradenameref(array('min' => 12)); // WHERE TradeNameRef >= 12
     * $query->filterByTradenameref(array('max' => 12)); // WHERE TradeNameRef <= 12
     * </code>
     *
     * @param     mixed $tradenameref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByTradenameref($tradenameref = null, $comparison = null)
    {
        if (is_array($tradenameref)) {
            $useMinMax = false;
            if (isset($tradenameref['min'])) {
                $this->addUsingAlias(ComnamesPeer::TRADENAMEREF, $tradenameref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tradenameref['max'])) {
                $this->addUsingAlias(ComnamesPeer::TRADENAMEREF, $tradenameref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::TRADENAMEREF, $tradenameref, $comparison);
    }

    /**
     * Filter the query on the ComNamesRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByComnamesrefno(1234); // WHERE ComNamesRefNo = 1234
     * $query->filterByComnamesrefno(array(12, 34)); // WHERE ComNamesRefNo IN (12, 34)
     * $query->filterByComnamesrefno(array('min' => 12)); // WHERE ComNamesRefNo >= 12
     * $query->filterByComnamesrefno(array('max' => 12)); // WHERE ComNamesRefNo <= 12
     * </code>
     *
     * @param     mixed $comnamesrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByComnamesrefno($comnamesrefno = null, $comparison = null)
    {
        if (is_array($comnamesrefno)) {
            $useMinMax = false;
            if (isset($comnamesrefno['min'])) {
                $this->addUsingAlias(ComnamesPeer::COMNAMESREFNO, $comnamesrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($comnamesrefno['max'])) {
                $this->addUsingAlias(ComnamesPeer::COMNAMESREFNO, $comnamesrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::COMNAMESREFNO, $comnamesrefno, $comparison);
    }

    /**
     * Filter the query on the Misspelling column
     *
     * Example usage:
     * <code>
     * $query->filterByMisspelling(1234); // WHERE Misspelling = 1234
     * $query->filterByMisspelling(array(12, 34)); // WHERE Misspelling IN (12, 34)
     * $query->filterByMisspelling(array('min' => 12)); // WHERE Misspelling >= 12
     * $query->filterByMisspelling(array('max' => 12)); // WHERE Misspelling <= 12
     * </code>
     *
     * @param     mixed $misspelling The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByMisspelling($misspelling = null, $comparison = null)
    {
        if (is_array($misspelling)) {
            $useMinMax = false;
            if (isset($misspelling['min'])) {
                $this->addUsingAlias(ComnamesPeer::MISSPELLING, $misspelling['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($misspelling['max'])) {
                $this->addUsingAlias(ComnamesPeer::MISSPELLING, $misspelling['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::MISSPELLING, $misspelling, $comparison);
    }

    /**
     * Filter the query on the Size column
     *
     * Example usage:
     * <code>
     * $query->filterBySize('fooValue');   // WHERE Size = 'fooValue'
     * $query->filterBySize('%fooValue%'); // WHERE Size LIKE '%fooValue%'
     * </code>
     *
     * @param     string $size The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterBySize($size = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($size)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $size)) {
                $size = str_replace('*', '%', $size);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::SIZE, $size, $comparison);
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
     * @return ComnamesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ComnamesPeer::SEX, $sex, $comparison);
    }

    /**
     * Filter the query on the Language2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLanguage2('fooValue');   // WHERE Language2 = 'fooValue'
     * $query->filterByLanguage2('%fooValue%'); // WHERE Language2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $language2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByLanguage2($language2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($language2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $language2)) {
                $language2 = str_replace('*', '%', $language2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::LANGUAGE2, $language2, $comparison);
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
     * @return ComnamesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ComnamesPeer::LOCALITY2, $locality2, $comparison);
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
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByRank($rank = null, $comparison = null)
    {
        if (is_array($rank)) {
            $useMinMax = false;
            if (isset($rank['min'])) {
                $this->addUsingAlias(ComnamesPeer::RANK, $rank['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rank['max'])) {
                $this->addUsingAlias(ComnamesPeer::RANK, $rank['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::RANK, $rank, $comparison);
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
     * @return ComnamesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ComnamesPeer::REMARKS, $remarks, $comparison);
    }

    /**
     * Filter the query on the SecondWord column
     *
     * Example usage:
     * <code>
     * $query->filterBySecondword('fooValue');   // WHERE SecondWord = 'fooValue'
     * $query->filterBySecondword('%fooValue%'); // WHERE SecondWord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $secondword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterBySecondword($secondword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($secondword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $secondword)) {
                $secondword = str_replace('*', '%', $secondword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::SECONDWORD, $secondword, $comparison);
    }

    /**
     * Filter the query on the ThirdWord column
     *
     * Example usage:
     * <code>
     * $query->filterByThirdword('fooValue');   // WHERE ThirdWord = 'fooValue'
     * $query->filterByThirdword('%fooValue%'); // WHERE ThirdWord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $thirdword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByThirdword($thirdword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($thirdword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $thirdword)) {
                $thirdword = str_replace('*', '%', $thirdword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::THIRDWORD, $thirdword, $comparison);
    }

    /**
     * Filter the query on the FourthWord column
     *
     * Example usage:
     * <code>
     * $query->filterByFourthword('fooValue');   // WHERE FourthWord = 'fooValue'
     * $query->filterByFourthword('%fooValue%'); // WHERE FourthWord LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fourthword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByFourthword($fourthword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fourthword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fourthword)) {
                $fourthword = str_replace('*', '%', $fourthword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::FOURTHWORD, $fourthword, $comparison);
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
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(ComnamesPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(ComnamesPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::ENTERED, $entered, $comparison);
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
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(ComnamesPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(ComnamesPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(ComnamesPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(ComnamesPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::MODIFIED, $modified, $comparison);
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
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(ComnamesPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(ComnamesPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(ComnamesPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(ComnamesPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::EXPERT, $expert, $comparison);
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
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(ComnamesPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(ComnamesPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the Core column
     *
     * Example usage:
     * <code>
     * $query->filterByCore('fooValue');   // WHERE Core = 'fooValue'
     * $query->filterByCore('%fooValue%'); // WHERE Core LIKE '%fooValue%'
     * </code>
     *
     * @param     string $core The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByCore($core = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($core)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $core)) {
                $core = str_replace('*', '%', $core);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::CORE, $core, $comparison);
    }

    /**
     * Filter the query on the modifier1 column
     *
     * Example usage:
     * <code>
     * $query->filterByModifier1('fooValue');   // WHERE modifier1 = 'fooValue'
     * $query->filterByModifier1('%fooValue%'); // WHERE modifier1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifier1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByModifier1($modifier1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifier1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modifier1)) {
                $modifier1 = str_replace('*', '%', $modifier1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::MODIFIER1, $modifier1, $comparison);
    }

    /**
     * Filter the query on the modifier2 column
     *
     * Example usage:
     * <code>
     * $query->filterByModifier2('fooValue');   // WHERE modifier2 = 'fooValue'
     * $query->filterByModifier2('%fooValue%'); // WHERE modifier2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modifier2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByModifier2($modifier2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modifier2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modifier2)) {
                $modifier2 = str_replace('*', '%', $modifier2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::MODIFIER2, $modifier2, $comparison);
    }

    /**
     * Filter the query on the CLOFFSCA column
     *
     * Example usage:
     * <code>
     * $query->filterByCloffsca(1234); // WHERE CLOFFSCA = 1234
     * $query->filterByCloffsca(array(12, 34)); // WHERE CLOFFSCA IN (12, 34)
     * $query->filterByCloffsca(array('min' => 12)); // WHERE CLOFFSCA >= 12
     * $query->filterByCloffsca(array('max' => 12)); // WHERE CLOFFSCA <= 12
     * </code>
     *
     * @param     mixed $cloffsca The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function filterByCloffsca($cloffsca = null, $comparison = null)
    {
        if (is_array($cloffsca)) {
            $useMinMax = false;
            if (isset($cloffsca['min'])) {
                $this->addUsingAlias(ComnamesPeer::CLOFFSCA, $cloffsca['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cloffsca['max'])) {
                $this->addUsingAlias(ComnamesPeer::CLOFFSCA, $cloffsca['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComnamesPeer::CLOFFSCA, $cloffsca, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Comnames $comnames Object to remove from the list of results
     *
     * @return ComnamesQuery The current query, for fluid interface
     */
    public function prune($comnames = null)
    {
        if ($comnames) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ComnamesPeer::AUTOCTR), $comnames->getAutoctr(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ComnamesPeer::COMNAME), $comnames->getComname(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ComnamesPeer::STOCKCODE), $comnames->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ComnamesPeer::C_CODE), $comnames->getCCode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(ComnamesPeer::LANGUAGE), $comnames->getLanguage(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond5', $this->getAliasedColName(ComnamesPeer::NAMETYPE), $comnames->getNametype(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4', 'pruneCond5'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
