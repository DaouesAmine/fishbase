<?php


/**
 * Base class that represents a query for the 'genedat' table.
 *
 *
 *
 * @method GenedatQuery orderByAutoctr($order = Criteria::ASC) Order by the autoctr column
 * @method GenedatQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method GenedatQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method GenedatQuery orderByGenedatrefno($order = Criteria::ASC) Order by the GeneDatRefNo column
 * @method GenedatQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method GenedatQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method GenedatQuery orderByTrait($order = Criteria::ASC) Order by the Trait column
 * @method GenedatQuery orderByComment($order = Criteria::ASC) Order by the Comment column
 * @method GenedatQuery orderByMeantrait($order = Criteria::ASC) Order by the MeanTrait column
 * @method GenedatQuery orderByUnitoftrait($order = Criteria::ASC) Order by the UnitofTrait column
 * @method GenedatQuery orderByStandarddeviation($order = Criteria::ASC) Order by the StandardDeviation column
 * @method GenedatQuery orderByHeritability($order = Criteria::ASC) Order by the Heritability column
 * @method GenedatQuery orderByStandarderror($order = Criteria::ASC) Order by the StandardError column
 * @method GenedatQuery orderByMethodheritab($order = Criteria::ASC) Order by the MethodHeritab column
 * @method GenedatQuery orderByCommentheritab($order = Criteria::ASC) Order by the CommentHeritab column
 * @method GenedatQuery orderBySelection($order = Criteria::ASC) Order by the Selection column
 * @method GenedatQuery orderByMethodselection($order = Criteria::ASC) Order by the MethodSelection column
 * @method GenedatQuery orderByResponse($order = Criteria::ASC) Order by the Response column
 * @method GenedatQuery orderByCommentselection($order = Criteria::ASC) Order by the CommentSelection column
 * @method GenedatQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method GenedatQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method GenedatQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method GenedatQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method GenedatQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method GenedatQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method GenedatQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method GenedatQuery groupByAutoctr() Group by the autoctr column
 * @method GenedatQuery groupByStockcode() Group by the StockCode column
 * @method GenedatQuery groupBySpeccode() Group by the SpecCode column
 * @method GenedatQuery groupByGenedatrefno() Group by the GeneDatRefNo column
 * @method GenedatQuery groupByLocality() Group by the Locality column
 * @method GenedatQuery groupByCCode() Group by the C_Code column
 * @method GenedatQuery groupByTrait() Group by the Trait column
 * @method GenedatQuery groupByComment() Group by the Comment column
 * @method GenedatQuery groupByMeantrait() Group by the MeanTrait column
 * @method GenedatQuery groupByUnitoftrait() Group by the UnitofTrait column
 * @method GenedatQuery groupByStandarddeviation() Group by the StandardDeviation column
 * @method GenedatQuery groupByHeritability() Group by the Heritability column
 * @method GenedatQuery groupByStandarderror() Group by the StandardError column
 * @method GenedatQuery groupByMethodheritab() Group by the MethodHeritab column
 * @method GenedatQuery groupByCommentheritab() Group by the CommentHeritab column
 * @method GenedatQuery groupBySelection() Group by the Selection column
 * @method GenedatQuery groupByMethodselection() Group by the MethodSelection column
 * @method GenedatQuery groupByResponse() Group by the Response column
 * @method GenedatQuery groupByCommentselection() Group by the CommentSelection column
 * @method GenedatQuery groupByEntered() Group by the Entered column
 * @method GenedatQuery groupByDateentered() Group by the DateEntered column
 * @method GenedatQuery groupByModified() Group by the Modified column
 * @method GenedatQuery groupByDatemodified() Group by the DateModified column
 * @method GenedatQuery groupByExpert() Group by the Expert column
 * @method GenedatQuery groupByDatechecked() Group by the DateChecked column
 * @method GenedatQuery groupByTs() Group by the TS column
 *
 * @method GenedatQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method GenedatQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method GenedatQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Genedat findOne(PropelPDO $con = null) Return the first Genedat matching the query
 * @method Genedat findOneOrCreate(PropelPDO $con = null) Return the first Genedat matching the query, or a new Genedat object populated from the query conditions when no match is found
 *
 * @method Genedat findOneByStockcode(int $StockCode) Return the first Genedat filtered by the StockCode column
 * @method Genedat findOneBySpeccode(int $SpecCode) Return the first Genedat filtered by the SpecCode column
 * @method Genedat findOneByGenedatrefno(int $GeneDatRefNo) Return the first Genedat filtered by the GeneDatRefNo column
 * @method Genedat findOneByLocality(string $Locality) Return the first Genedat filtered by the Locality column
 * @method Genedat findOneByCCode(string $C_Code) Return the first Genedat filtered by the C_Code column
 * @method Genedat findOneByTrait(string $Trait) Return the first Genedat filtered by the Trait column
 * @method Genedat findOneByComment(string $Comment) Return the first Genedat filtered by the Comment column
 * @method Genedat findOneByMeantrait(double $MeanTrait) Return the first Genedat filtered by the MeanTrait column
 * @method Genedat findOneByUnitoftrait(string $UnitofTrait) Return the first Genedat filtered by the UnitofTrait column
 * @method Genedat findOneByStandarddeviation(double $StandardDeviation) Return the first Genedat filtered by the StandardDeviation column
 * @method Genedat findOneByHeritability(double $Heritability) Return the first Genedat filtered by the Heritability column
 * @method Genedat findOneByStandarderror(double $StandardError) Return the first Genedat filtered by the StandardError column
 * @method Genedat findOneByMethodheritab(string $MethodHeritab) Return the first Genedat filtered by the MethodHeritab column
 * @method Genedat findOneByCommentheritab(string $CommentHeritab) Return the first Genedat filtered by the CommentHeritab column
 * @method Genedat findOneBySelection(int $Selection) Return the first Genedat filtered by the Selection column
 * @method Genedat findOneByMethodselection(string $MethodSelection) Return the first Genedat filtered by the MethodSelection column
 * @method Genedat findOneByResponse(int $Response) Return the first Genedat filtered by the Response column
 * @method Genedat findOneByCommentselection(string $CommentSelection) Return the first Genedat filtered by the CommentSelection column
 * @method Genedat findOneByEntered(int $Entered) Return the first Genedat filtered by the Entered column
 * @method Genedat findOneByDateentered(string $DateEntered) Return the first Genedat filtered by the DateEntered column
 * @method Genedat findOneByModified(int $Modified) Return the first Genedat filtered by the Modified column
 * @method Genedat findOneByDatemodified(string $DateModified) Return the first Genedat filtered by the DateModified column
 * @method Genedat findOneByExpert(int $Expert) Return the first Genedat filtered by the Expert column
 * @method Genedat findOneByDatechecked(string $DateChecked) Return the first Genedat filtered by the DateChecked column
 * @method Genedat findOneByTs(string $TS) Return the first Genedat filtered by the TS column
 *
 * @method array findByAutoctr(int $autoctr) Return Genedat objects filtered by the autoctr column
 * @method array findByStockcode(int $StockCode) Return Genedat objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Genedat objects filtered by the SpecCode column
 * @method array findByGenedatrefno(int $GeneDatRefNo) Return Genedat objects filtered by the GeneDatRefNo column
 * @method array findByLocality(string $Locality) Return Genedat objects filtered by the Locality column
 * @method array findByCCode(string $C_Code) Return Genedat objects filtered by the C_Code column
 * @method array findByTrait(string $Trait) Return Genedat objects filtered by the Trait column
 * @method array findByComment(string $Comment) Return Genedat objects filtered by the Comment column
 * @method array findByMeantrait(double $MeanTrait) Return Genedat objects filtered by the MeanTrait column
 * @method array findByUnitoftrait(string $UnitofTrait) Return Genedat objects filtered by the UnitofTrait column
 * @method array findByStandarddeviation(double $StandardDeviation) Return Genedat objects filtered by the StandardDeviation column
 * @method array findByHeritability(double $Heritability) Return Genedat objects filtered by the Heritability column
 * @method array findByStandarderror(double $StandardError) Return Genedat objects filtered by the StandardError column
 * @method array findByMethodheritab(string $MethodHeritab) Return Genedat objects filtered by the MethodHeritab column
 * @method array findByCommentheritab(string $CommentHeritab) Return Genedat objects filtered by the CommentHeritab column
 * @method array findBySelection(int $Selection) Return Genedat objects filtered by the Selection column
 * @method array findByMethodselection(string $MethodSelection) Return Genedat objects filtered by the MethodSelection column
 * @method array findByResponse(int $Response) Return Genedat objects filtered by the Response column
 * @method array findByCommentselection(string $CommentSelection) Return Genedat objects filtered by the CommentSelection column
 * @method array findByEntered(int $Entered) Return Genedat objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Genedat objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Genedat objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Genedat objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Genedat objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Genedat objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Genedat objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseGenedatQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseGenedatQuery object.
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
            $modelName = 'Genedat';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new GenedatQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   GenedatQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return GenedatQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof GenedatQuery) {
            return $criteria;
        }
        $query = new GenedatQuery(null, null, $modelAlias);

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
     * @return   Genedat|Genedat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = GenedatPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(GenedatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Genedat A model object, or null if the key is not found
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
     * @return                 Genedat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `autoctr`, `StockCode`, `SpecCode`, `GeneDatRefNo`, `Locality`, `C_Code`, `Trait`, `Comment`, `MeanTrait`, `UnitofTrait`, `StandardDeviation`, `Heritability`, `StandardError`, `MethodHeritab`, `CommentHeritab`, `Selection`, `MethodSelection`, `Response`, `CommentSelection`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `genedat` WHERE `autoctr` = :p0';
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
            $obj = new Genedat();
            $obj->hydrate($row);
            GenedatPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Genedat|Genedat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Genedat[]|mixed the list of results, formatted by the current formatter
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
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(GenedatPeer::AUTOCTR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(GenedatPeer::AUTOCTR, $keys, Criteria::IN);
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
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByAutoctr($autoctr = null, $comparison = null)
    {
        if (is_array($autoctr)) {
            $useMinMax = false;
            if (isset($autoctr['min'])) {
                $this->addUsingAlias(GenedatPeer::AUTOCTR, $autoctr['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($autoctr['max'])) {
                $this->addUsingAlias(GenedatPeer::AUTOCTR, $autoctr['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::AUTOCTR, $autoctr, $comparison);
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
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(GenedatPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(GenedatPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(GenedatPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(GenedatPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the GeneDatRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByGenedatrefno(1234); // WHERE GeneDatRefNo = 1234
     * $query->filterByGenedatrefno(array(12, 34)); // WHERE GeneDatRefNo IN (12, 34)
     * $query->filterByGenedatrefno(array('min' => 12)); // WHERE GeneDatRefNo >= 12
     * $query->filterByGenedatrefno(array('max' => 12)); // WHERE GeneDatRefNo <= 12
     * </code>
     *
     * @param     mixed $genedatrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByGenedatrefno($genedatrefno = null, $comparison = null)
    {
        if (is_array($genedatrefno)) {
            $useMinMax = false;
            if (isset($genedatrefno['min'])) {
                $this->addUsingAlias(GenedatPeer::GENEDATREFNO, $genedatrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($genedatrefno['max'])) {
                $this->addUsingAlias(GenedatPeer::GENEDATREFNO, $genedatrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::GENEDATREFNO, $genedatrefno, $comparison);
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
     * @return GenedatQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GenedatPeer::LOCALITY, $locality, $comparison);
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
     * @return GenedatQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GenedatPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the Trait column
     *
     * Example usage:
     * <code>
     * $query->filterByTrait('fooValue');   // WHERE Trait = 'fooValue'
     * $query->filterByTrait('%fooValue%'); // WHERE Trait LIKE '%fooValue%'
     * </code>
     *
     * @param     string $trait The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByTrait($trait = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($trait)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $trait)) {
                $trait = str_replace('*', '%', $trait);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GenedatPeer::TRAIT, $trait, $comparison);
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
     * @return GenedatQuery The current query, for fluid interface
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

        return $this->addUsingAlias(GenedatPeer::COMMENT, $comment, $comparison);
    }

    /**
     * Filter the query on the MeanTrait column
     *
     * Example usage:
     * <code>
     * $query->filterByMeantrait(1234); // WHERE MeanTrait = 1234
     * $query->filterByMeantrait(array(12, 34)); // WHERE MeanTrait IN (12, 34)
     * $query->filterByMeantrait(array('min' => 12)); // WHERE MeanTrait >= 12
     * $query->filterByMeantrait(array('max' => 12)); // WHERE MeanTrait <= 12
     * </code>
     *
     * @param     mixed $meantrait The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByMeantrait($meantrait = null, $comparison = null)
    {
        if (is_array($meantrait)) {
            $useMinMax = false;
            if (isset($meantrait['min'])) {
                $this->addUsingAlias(GenedatPeer::MEANTRAIT, $meantrait['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($meantrait['max'])) {
                $this->addUsingAlias(GenedatPeer::MEANTRAIT, $meantrait['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::MEANTRAIT, $meantrait, $comparison);
    }

    /**
     * Filter the query on the UnitofTrait column
     *
     * Example usage:
     * <code>
     * $query->filterByUnitoftrait('fooValue');   // WHERE UnitofTrait = 'fooValue'
     * $query->filterByUnitoftrait('%fooValue%'); // WHERE UnitofTrait LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unitoftrait The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByUnitoftrait($unitoftrait = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unitoftrait)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unitoftrait)) {
                $unitoftrait = str_replace('*', '%', $unitoftrait);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GenedatPeer::UNITOFTRAIT, $unitoftrait, $comparison);
    }

    /**
     * Filter the query on the StandardDeviation column
     *
     * Example usage:
     * <code>
     * $query->filterByStandarddeviation(1234); // WHERE StandardDeviation = 1234
     * $query->filterByStandarddeviation(array(12, 34)); // WHERE StandardDeviation IN (12, 34)
     * $query->filterByStandarddeviation(array('min' => 12)); // WHERE StandardDeviation >= 12
     * $query->filterByStandarddeviation(array('max' => 12)); // WHERE StandardDeviation <= 12
     * </code>
     *
     * @param     mixed $standarddeviation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByStandarddeviation($standarddeviation = null, $comparison = null)
    {
        if (is_array($standarddeviation)) {
            $useMinMax = false;
            if (isset($standarddeviation['min'])) {
                $this->addUsingAlias(GenedatPeer::STANDARDDEVIATION, $standarddeviation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($standarddeviation['max'])) {
                $this->addUsingAlias(GenedatPeer::STANDARDDEVIATION, $standarddeviation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::STANDARDDEVIATION, $standarddeviation, $comparison);
    }

    /**
     * Filter the query on the Heritability column
     *
     * Example usage:
     * <code>
     * $query->filterByHeritability(1234); // WHERE Heritability = 1234
     * $query->filterByHeritability(array(12, 34)); // WHERE Heritability IN (12, 34)
     * $query->filterByHeritability(array('min' => 12)); // WHERE Heritability >= 12
     * $query->filterByHeritability(array('max' => 12)); // WHERE Heritability <= 12
     * </code>
     *
     * @param     mixed $heritability The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByHeritability($heritability = null, $comparison = null)
    {
        if (is_array($heritability)) {
            $useMinMax = false;
            if (isset($heritability['min'])) {
                $this->addUsingAlias(GenedatPeer::HERITABILITY, $heritability['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($heritability['max'])) {
                $this->addUsingAlias(GenedatPeer::HERITABILITY, $heritability['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::HERITABILITY, $heritability, $comparison);
    }

    /**
     * Filter the query on the StandardError column
     *
     * Example usage:
     * <code>
     * $query->filterByStandarderror(1234); // WHERE StandardError = 1234
     * $query->filterByStandarderror(array(12, 34)); // WHERE StandardError IN (12, 34)
     * $query->filterByStandarderror(array('min' => 12)); // WHERE StandardError >= 12
     * $query->filterByStandarderror(array('max' => 12)); // WHERE StandardError <= 12
     * </code>
     *
     * @param     mixed $standarderror The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByStandarderror($standarderror = null, $comparison = null)
    {
        if (is_array($standarderror)) {
            $useMinMax = false;
            if (isset($standarderror['min'])) {
                $this->addUsingAlias(GenedatPeer::STANDARDERROR, $standarderror['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($standarderror['max'])) {
                $this->addUsingAlias(GenedatPeer::STANDARDERROR, $standarderror['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::STANDARDERROR, $standarderror, $comparison);
    }

    /**
     * Filter the query on the MethodHeritab column
     *
     * Example usage:
     * <code>
     * $query->filterByMethodheritab('fooValue');   // WHERE MethodHeritab = 'fooValue'
     * $query->filterByMethodheritab('%fooValue%'); // WHERE MethodHeritab LIKE '%fooValue%'
     * </code>
     *
     * @param     string $methodheritab The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByMethodheritab($methodheritab = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($methodheritab)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $methodheritab)) {
                $methodheritab = str_replace('*', '%', $methodheritab);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GenedatPeer::METHODHERITAB, $methodheritab, $comparison);
    }

    /**
     * Filter the query on the CommentHeritab column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentheritab('fooValue');   // WHERE CommentHeritab = 'fooValue'
     * $query->filterByCommentheritab('%fooValue%'); // WHERE CommentHeritab LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentheritab The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByCommentheritab($commentheritab = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentheritab)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentheritab)) {
                $commentheritab = str_replace('*', '%', $commentheritab);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GenedatPeer::COMMENTHERITAB, $commentheritab, $comparison);
    }

    /**
     * Filter the query on the Selection column
     *
     * Example usage:
     * <code>
     * $query->filterBySelection(1234); // WHERE Selection = 1234
     * $query->filterBySelection(array(12, 34)); // WHERE Selection IN (12, 34)
     * $query->filterBySelection(array('min' => 12)); // WHERE Selection >= 12
     * $query->filterBySelection(array('max' => 12)); // WHERE Selection <= 12
     * </code>
     *
     * @param     mixed $selection The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterBySelection($selection = null, $comparison = null)
    {
        if (is_array($selection)) {
            $useMinMax = false;
            if (isset($selection['min'])) {
                $this->addUsingAlias(GenedatPeer::SELECTION, $selection['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($selection['max'])) {
                $this->addUsingAlias(GenedatPeer::SELECTION, $selection['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::SELECTION, $selection, $comparison);
    }

    /**
     * Filter the query on the MethodSelection column
     *
     * Example usage:
     * <code>
     * $query->filterByMethodselection('fooValue');   // WHERE MethodSelection = 'fooValue'
     * $query->filterByMethodselection('%fooValue%'); // WHERE MethodSelection LIKE '%fooValue%'
     * </code>
     *
     * @param     string $methodselection The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByMethodselection($methodselection = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($methodselection)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $methodselection)) {
                $methodselection = str_replace('*', '%', $methodselection);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GenedatPeer::METHODSELECTION, $methodselection, $comparison);
    }

    /**
     * Filter the query on the Response column
     *
     * Example usage:
     * <code>
     * $query->filterByResponse(1234); // WHERE Response = 1234
     * $query->filterByResponse(array(12, 34)); // WHERE Response IN (12, 34)
     * $query->filterByResponse(array('min' => 12)); // WHERE Response >= 12
     * $query->filterByResponse(array('max' => 12)); // WHERE Response <= 12
     * </code>
     *
     * @param     mixed $response The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByResponse($response = null, $comparison = null)
    {
        if (is_array($response)) {
            $useMinMax = false;
            if (isset($response['min'])) {
                $this->addUsingAlias(GenedatPeer::RESPONSE, $response['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($response['max'])) {
                $this->addUsingAlias(GenedatPeer::RESPONSE, $response['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::RESPONSE, $response, $comparison);
    }

    /**
     * Filter the query on the CommentSelection column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentselection('fooValue');   // WHERE CommentSelection = 'fooValue'
     * $query->filterByCommentselection('%fooValue%'); // WHERE CommentSelection LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentselection The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByCommentselection($commentselection = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentselection)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentselection)) {
                $commentselection = str_replace('*', '%', $commentselection);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(GenedatPeer::COMMENTSELECTION, $commentselection, $comparison);
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
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(GenedatPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(GenedatPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::ENTERED, $entered, $comparison);
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
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(GenedatPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(GenedatPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(GenedatPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(GenedatPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::MODIFIED, $modified, $comparison);
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
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(GenedatPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(GenedatPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(GenedatPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(GenedatPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::EXPERT, $expert, $comparison);
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
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(GenedatPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(GenedatPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return GenedatQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(GenedatPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(GenedatPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(GenedatPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Genedat $genedat Object to remove from the list of results
     *
     * @return GenedatQuery The current query, for fluid interface
     */
    public function prune($genedat = null)
    {
        if ($genedat) {
            $this->addUsingAlias(GenedatPeer::AUTOCTR, $genedat->getAutoctr(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
