<?php


/**
 * Base class that represents a query for the 'elecstudies' table.
 *
 *
 *
 * @method ElecstudiesQuery orderByStudcode($order = Criteria::ASC) Order by the StudCode column
 * @method ElecstudiesQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method ElecstudiesQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method ElecstudiesQuery orderByElecdatrefno($order = Criteria::ASC) Order by the ElecDatRefNo column
 * @method ElecstudiesQuery orderByLocality($order = Criteria::ASC) Order by the Locality column
 * @method ElecstudiesQuery orderByCCode($order = Criteria::ASC) Order by the C_Code column
 * @method ElecstudiesQuery orderByTotalloci($order = Criteria::ASC) Order by the TotalLoci column
 * @method ElecstudiesQuery orderByExpheterozygosity($order = Criteria::ASC) Order by the ExpHeterozygosity column
 * @method ElecstudiesQuery orderByHeterozygosity($order = Criteria::ASC) Order by the Heterozygosity column
 * @method ElecstudiesQuery orderByPolymorphicloci($order = Criteria::ASC) Order by the PolymorphicLoci column
 * @method ElecstudiesQuery orderByComments($order = Criteria::ASC) Order by the Comments column
 * @method ElecstudiesQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method ElecstudiesQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method ElecstudiesQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method ElecstudiesQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method ElecstudiesQuery orderByChecked($order = Criteria::ASC) Order by the Checked column
 * @method ElecstudiesQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method ElecstudiesQuery orderBySource($order = Criteria::ASC) Order by the Source column
 * @method ElecstudiesQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method ElecstudiesQuery groupByStudcode() Group by the StudCode column
 * @method ElecstudiesQuery groupByStockcode() Group by the StockCode column
 * @method ElecstudiesQuery groupBySpeccode() Group by the SpecCode column
 * @method ElecstudiesQuery groupByElecdatrefno() Group by the ElecDatRefNo column
 * @method ElecstudiesQuery groupByLocality() Group by the Locality column
 * @method ElecstudiesQuery groupByCCode() Group by the C_Code column
 * @method ElecstudiesQuery groupByTotalloci() Group by the TotalLoci column
 * @method ElecstudiesQuery groupByExpheterozygosity() Group by the ExpHeterozygosity column
 * @method ElecstudiesQuery groupByHeterozygosity() Group by the Heterozygosity column
 * @method ElecstudiesQuery groupByPolymorphicloci() Group by the PolymorphicLoci column
 * @method ElecstudiesQuery groupByComments() Group by the Comments column
 * @method ElecstudiesQuery groupByEntered() Group by the Entered column
 * @method ElecstudiesQuery groupByDateentered() Group by the DateEntered column
 * @method ElecstudiesQuery groupByModified() Group by the Modified column
 * @method ElecstudiesQuery groupByDatemodified() Group by the DateModified column
 * @method ElecstudiesQuery groupByChecked() Group by the Checked column
 * @method ElecstudiesQuery groupByDatechecked() Group by the DateChecked column
 * @method ElecstudiesQuery groupBySource() Group by the Source column
 * @method ElecstudiesQuery groupByTs() Group by the TS column
 *
 * @method ElecstudiesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ElecstudiesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ElecstudiesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Elecstudies findOne(PropelPDO $con = null) Return the first Elecstudies matching the query
 * @method Elecstudies findOneOrCreate(PropelPDO $con = null) Return the first Elecstudies matching the query, or a new Elecstudies object populated from the query conditions when no match is found
 *
 * @method Elecstudies findOneByStockcode(int $StockCode) Return the first Elecstudies filtered by the StockCode column
 * @method Elecstudies findOneBySpeccode(int $SpecCode) Return the first Elecstudies filtered by the SpecCode column
 * @method Elecstudies findOneByElecdatrefno(int $ElecDatRefNo) Return the first Elecstudies filtered by the ElecDatRefNo column
 * @method Elecstudies findOneByLocality(string $Locality) Return the first Elecstudies filtered by the Locality column
 * @method Elecstudies findOneByCCode(string $C_Code) Return the first Elecstudies filtered by the C_Code column
 * @method Elecstudies findOneByTotalloci(int $TotalLoci) Return the first Elecstudies filtered by the TotalLoci column
 * @method Elecstudies findOneByExpheterozygosity(double $ExpHeterozygosity) Return the first Elecstudies filtered by the ExpHeterozygosity column
 * @method Elecstudies findOneByHeterozygosity(double $Heterozygosity) Return the first Elecstudies filtered by the Heterozygosity column
 * @method Elecstudies findOneByPolymorphicloci(double $PolymorphicLoci) Return the first Elecstudies filtered by the PolymorphicLoci column
 * @method Elecstudies findOneByComments(string $Comments) Return the first Elecstudies filtered by the Comments column
 * @method Elecstudies findOneByEntered(int $Entered) Return the first Elecstudies filtered by the Entered column
 * @method Elecstudies findOneByDateentered(string $DateEntered) Return the first Elecstudies filtered by the DateEntered column
 * @method Elecstudies findOneByModified(int $Modified) Return the first Elecstudies filtered by the Modified column
 * @method Elecstudies findOneByDatemodified(string $DateModified) Return the first Elecstudies filtered by the DateModified column
 * @method Elecstudies findOneByChecked(int $Checked) Return the first Elecstudies filtered by the Checked column
 * @method Elecstudies findOneByDatechecked(string $DateChecked) Return the first Elecstudies filtered by the DateChecked column
 * @method Elecstudies findOneBySource(string $Source) Return the first Elecstudies filtered by the Source column
 * @method Elecstudies findOneByTs(string $TS) Return the first Elecstudies filtered by the TS column
 *
 * @method array findByStudcode(int $StudCode) Return Elecstudies objects filtered by the StudCode column
 * @method array findByStockcode(int $StockCode) Return Elecstudies objects filtered by the StockCode column
 * @method array findBySpeccode(int $SpecCode) Return Elecstudies objects filtered by the SpecCode column
 * @method array findByElecdatrefno(int $ElecDatRefNo) Return Elecstudies objects filtered by the ElecDatRefNo column
 * @method array findByLocality(string $Locality) Return Elecstudies objects filtered by the Locality column
 * @method array findByCCode(string $C_Code) Return Elecstudies objects filtered by the C_Code column
 * @method array findByTotalloci(int $TotalLoci) Return Elecstudies objects filtered by the TotalLoci column
 * @method array findByExpheterozygosity(double $ExpHeterozygosity) Return Elecstudies objects filtered by the ExpHeterozygosity column
 * @method array findByHeterozygosity(double $Heterozygosity) Return Elecstudies objects filtered by the Heterozygosity column
 * @method array findByPolymorphicloci(double $PolymorphicLoci) Return Elecstudies objects filtered by the PolymorphicLoci column
 * @method array findByComments(string $Comments) Return Elecstudies objects filtered by the Comments column
 * @method array findByEntered(int $Entered) Return Elecstudies objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Elecstudies objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Elecstudies objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Elecstudies objects filtered by the DateModified column
 * @method array findByChecked(int $Checked) Return Elecstudies objects filtered by the Checked column
 * @method array findByDatechecked(string $DateChecked) Return Elecstudies objects filtered by the DateChecked column
 * @method array findBySource(string $Source) Return Elecstudies objects filtered by the Source column
 * @method array findByTs(string $TS) Return Elecstudies objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseElecstudiesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseElecstudiesQuery object.
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
            $modelName = 'Elecstudies';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ElecstudiesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ElecstudiesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ElecstudiesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ElecstudiesQuery) {
            return $criteria;
        }
        $query = new ElecstudiesQuery(null, null, $modelAlias);

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
     * @return   Elecstudies|Elecstudies[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ElecstudiesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ElecstudiesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Elecstudies A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByStudcode($key, $con = null)
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
     * @return                 Elecstudies A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `StudCode`, `StockCode`, `SpecCode`, `ElecDatRefNo`, `Locality`, `C_Code`, `TotalLoci`, `ExpHeterozygosity`, `Heterozygosity`, `PolymorphicLoci`, `Comments`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Checked`, `DateChecked`, `Source`, `TS` FROM `elecstudies` WHERE `StudCode` = :p0';
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
            $obj = new Elecstudies();
            $obj->hydrate($row);
            ElecstudiesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Elecstudies|Elecstudies[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Elecstudies[]|mixed the list of results, formatted by the current formatter
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
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ElecstudiesPeer::STUDCODE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ElecstudiesPeer::STUDCODE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the StudCode column
     *
     * Example usage:
     * <code>
     * $query->filterByStudcode(1234); // WHERE StudCode = 1234
     * $query->filterByStudcode(array(12, 34)); // WHERE StudCode IN (12, 34)
     * $query->filterByStudcode(array('min' => 12)); // WHERE StudCode >= 12
     * $query->filterByStudcode(array('max' => 12)); // WHERE StudCode <= 12
     * </code>
     *
     * @param     mixed $studcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByStudcode($studcode = null, $comparison = null)
    {
        if (is_array($studcode)) {
            $useMinMax = false;
            if (isset($studcode['min'])) {
                $this->addUsingAlias(ElecstudiesPeer::STUDCODE, $studcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($studcode['max'])) {
                $this->addUsingAlias(ElecstudiesPeer::STUDCODE, $studcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::STUDCODE, $studcode, $comparison);
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
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(ElecstudiesPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(ElecstudiesPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::STOCKCODE, $stockcode, $comparison);
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
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(ElecstudiesPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(ElecstudiesPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the ElecDatRefNo column
     *
     * Example usage:
     * <code>
     * $query->filterByElecdatrefno(1234); // WHERE ElecDatRefNo = 1234
     * $query->filterByElecdatrefno(array(12, 34)); // WHERE ElecDatRefNo IN (12, 34)
     * $query->filterByElecdatrefno(array('min' => 12)); // WHERE ElecDatRefNo >= 12
     * $query->filterByElecdatrefno(array('max' => 12)); // WHERE ElecDatRefNo <= 12
     * </code>
     *
     * @param     mixed $elecdatrefno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByElecdatrefno($elecdatrefno = null, $comparison = null)
    {
        if (is_array($elecdatrefno)) {
            $useMinMax = false;
            if (isset($elecdatrefno['min'])) {
                $this->addUsingAlias(ElecstudiesPeer::ELECDATREFNO, $elecdatrefno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($elecdatrefno['max'])) {
                $this->addUsingAlias(ElecstudiesPeer::ELECDATREFNO, $elecdatrefno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::ELECDATREFNO, $elecdatrefno, $comparison);
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
     * @return ElecstudiesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ElecstudiesPeer::LOCALITY, $locality, $comparison);
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
     * @return ElecstudiesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ElecstudiesPeer::C_CODE, $cCode, $comparison);
    }

    /**
     * Filter the query on the TotalLoci column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalloci(1234); // WHERE TotalLoci = 1234
     * $query->filterByTotalloci(array(12, 34)); // WHERE TotalLoci IN (12, 34)
     * $query->filterByTotalloci(array('min' => 12)); // WHERE TotalLoci >= 12
     * $query->filterByTotalloci(array('max' => 12)); // WHERE TotalLoci <= 12
     * </code>
     *
     * @param     mixed $totalloci The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByTotalloci($totalloci = null, $comparison = null)
    {
        if (is_array($totalloci)) {
            $useMinMax = false;
            if (isset($totalloci['min'])) {
                $this->addUsingAlias(ElecstudiesPeer::TOTALLOCI, $totalloci['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalloci['max'])) {
                $this->addUsingAlias(ElecstudiesPeer::TOTALLOCI, $totalloci['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::TOTALLOCI, $totalloci, $comparison);
    }

    /**
     * Filter the query on the ExpHeterozygosity column
     *
     * Example usage:
     * <code>
     * $query->filterByExpheterozygosity(1234); // WHERE ExpHeterozygosity = 1234
     * $query->filterByExpheterozygosity(array(12, 34)); // WHERE ExpHeterozygosity IN (12, 34)
     * $query->filterByExpheterozygosity(array('min' => 12)); // WHERE ExpHeterozygosity >= 12
     * $query->filterByExpheterozygosity(array('max' => 12)); // WHERE ExpHeterozygosity <= 12
     * </code>
     *
     * @param     mixed $expheterozygosity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByExpheterozygosity($expheterozygosity = null, $comparison = null)
    {
        if (is_array($expheterozygosity)) {
            $useMinMax = false;
            if (isset($expheterozygosity['min'])) {
                $this->addUsingAlias(ElecstudiesPeer::EXPHETEROZYGOSITY, $expheterozygosity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expheterozygosity['max'])) {
                $this->addUsingAlias(ElecstudiesPeer::EXPHETEROZYGOSITY, $expheterozygosity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::EXPHETEROZYGOSITY, $expheterozygosity, $comparison);
    }

    /**
     * Filter the query on the Heterozygosity column
     *
     * Example usage:
     * <code>
     * $query->filterByHeterozygosity(1234); // WHERE Heterozygosity = 1234
     * $query->filterByHeterozygosity(array(12, 34)); // WHERE Heterozygosity IN (12, 34)
     * $query->filterByHeterozygosity(array('min' => 12)); // WHERE Heterozygosity >= 12
     * $query->filterByHeterozygosity(array('max' => 12)); // WHERE Heterozygosity <= 12
     * </code>
     *
     * @param     mixed $heterozygosity The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByHeterozygosity($heterozygosity = null, $comparison = null)
    {
        if (is_array($heterozygosity)) {
            $useMinMax = false;
            if (isset($heterozygosity['min'])) {
                $this->addUsingAlias(ElecstudiesPeer::HETEROZYGOSITY, $heterozygosity['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($heterozygosity['max'])) {
                $this->addUsingAlias(ElecstudiesPeer::HETEROZYGOSITY, $heterozygosity['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::HETEROZYGOSITY, $heterozygosity, $comparison);
    }

    /**
     * Filter the query on the PolymorphicLoci column
     *
     * Example usage:
     * <code>
     * $query->filterByPolymorphicloci(1234); // WHERE PolymorphicLoci = 1234
     * $query->filterByPolymorphicloci(array(12, 34)); // WHERE PolymorphicLoci IN (12, 34)
     * $query->filterByPolymorphicloci(array('min' => 12)); // WHERE PolymorphicLoci >= 12
     * $query->filterByPolymorphicloci(array('max' => 12)); // WHERE PolymorphicLoci <= 12
     * </code>
     *
     * @param     mixed $polymorphicloci The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByPolymorphicloci($polymorphicloci = null, $comparison = null)
    {
        if (is_array($polymorphicloci)) {
            $useMinMax = false;
            if (isset($polymorphicloci['min'])) {
                $this->addUsingAlias(ElecstudiesPeer::POLYMORPHICLOCI, $polymorphicloci['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($polymorphicloci['max'])) {
                $this->addUsingAlias(ElecstudiesPeer::POLYMORPHICLOCI, $polymorphicloci['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::POLYMORPHICLOCI, $polymorphicloci, $comparison);
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
     * @return ElecstudiesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ElecstudiesPeer::COMMENTS, $comments, $comparison);
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
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(ElecstudiesPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(ElecstudiesPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::ENTERED, $entered, $comparison);
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
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(ElecstudiesPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(ElecstudiesPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(ElecstudiesPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(ElecstudiesPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::MODIFIED, $modified, $comparison);
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
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(ElecstudiesPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(ElecstudiesPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::DATEMODIFIED, $datemodified, $comparison);
    }

    /**
     * Filter the query on the Checked column
     *
     * Example usage:
     * <code>
     * $query->filterByChecked(1234); // WHERE Checked = 1234
     * $query->filterByChecked(array(12, 34)); // WHERE Checked IN (12, 34)
     * $query->filterByChecked(array('min' => 12)); // WHERE Checked >= 12
     * $query->filterByChecked(array('max' => 12)); // WHERE Checked <= 12
     * </code>
     *
     * @param     mixed $checked The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByChecked($checked = null, $comparison = null)
    {
        if (is_array($checked)) {
            $useMinMax = false;
            if (isset($checked['min'])) {
                $this->addUsingAlias(ElecstudiesPeer::CHECKED, $checked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($checked['max'])) {
                $this->addUsingAlias(ElecstudiesPeer::CHECKED, $checked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::CHECKED, $checked, $comparison);
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
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(ElecstudiesPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(ElecstudiesPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::DATECHECKED, $datechecked, $comparison);
    }

    /**
     * Filter the query on the Source column
     *
     * Example usage:
     * <code>
     * $query->filterBySource('fooValue');   // WHERE Source = 'fooValue'
     * $query->filterBySource('%fooValue%'); // WHERE Source LIKE '%fooValue%'
     * </code>
     *
     * @param     string $source The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterBySource($source = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($source)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $source)) {
                $source = str_replace('*', '%', $source);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::SOURCE, $source, $comparison);
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
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(ElecstudiesPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(ElecstudiesPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ElecstudiesPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Elecstudies $elecstudies Object to remove from the list of results
     *
     * @return ElecstudiesQuery The current query, for fluid interface
     */
    public function prune($elecstudies = null)
    {
        if ($elecstudies) {
            $this->addUsingAlias(ElecstudiesPeer::STUDCODE, $elecstudies->getStudcode(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
