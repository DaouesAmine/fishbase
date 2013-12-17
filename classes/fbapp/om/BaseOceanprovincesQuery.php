<?php


/**
 * Base class that represents a query for the 'oceanprovinces' table.
 *
 *
 *
 * @method OceanprovincesQuery orderByStockcode($order = Criteria::ASC) Order by the StockCode column
 * @method OceanprovincesQuery orderByRegionno($order = Criteria::ASC) Order by the RegionNo column
 * @method OceanprovincesQuery orderBySpeccode($order = Criteria::ASC) Order by the SpecCode column
 * @method OceanprovincesQuery orderByStatus($order = Criteria::ASC) Order by the Status column
 * @method OceanprovincesQuery orderByProvinceref($order = Criteria::ASC) Order by the ProvinceRef column
 * @method OceanprovincesQuery orderByEntered($order = Criteria::ASC) Order by the Entered column
 * @method OceanprovincesQuery orderByDateentered($order = Criteria::ASC) Order by the DateEntered column
 * @method OceanprovincesQuery orderByModified($order = Criteria::ASC) Order by the Modified column
 * @method OceanprovincesQuery orderByDatemodified($order = Criteria::ASC) Order by the DateModified column
 * @method OceanprovincesQuery orderByExpert($order = Criteria::ASC) Order by the Expert column
 * @method OceanprovincesQuery orderByDatechecked($order = Criteria::ASC) Order by the DateChecked column
 * @method OceanprovincesQuery orderByTs($order = Criteria::ASC) Order by the TS column
 *
 * @method OceanprovincesQuery groupByStockcode() Group by the StockCode column
 * @method OceanprovincesQuery groupByRegionno() Group by the RegionNo column
 * @method OceanprovincesQuery groupBySpeccode() Group by the SpecCode column
 * @method OceanprovincesQuery groupByStatus() Group by the Status column
 * @method OceanprovincesQuery groupByProvinceref() Group by the ProvinceRef column
 * @method OceanprovincesQuery groupByEntered() Group by the Entered column
 * @method OceanprovincesQuery groupByDateentered() Group by the DateEntered column
 * @method OceanprovincesQuery groupByModified() Group by the Modified column
 * @method OceanprovincesQuery groupByDatemodified() Group by the DateModified column
 * @method OceanprovincesQuery groupByExpert() Group by the Expert column
 * @method OceanprovincesQuery groupByDatechecked() Group by the DateChecked column
 * @method OceanprovincesQuery groupByTs() Group by the TS column
 *
 * @method OceanprovincesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method OceanprovincesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method OceanprovincesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Oceanprovinces findOne(PropelPDO $con = null) Return the first Oceanprovinces matching the query
 * @method Oceanprovinces findOneOrCreate(PropelPDO $con = null) Return the first Oceanprovinces matching the query, or a new Oceanprovinces object populated from the query conditions when no match is found
 *
 * @method Oceanprovinces findOneByStockcode(double $StockCode) Return the first Oceanprovinces filtered by the StockCode column
 * @method Oceanprovinces findOneByRegionno(int $RegionNo) Return the first Oceanprovinces filtered by the RegionNo column
 * @method Oceanprovinces findOneBySpeccode(int $SpecCode) Return the first Oceanprovinces filtered by the SpecCode column
 * @method Oceanprovinces findOneByStatus(string $Status) Return the first Oceanprovinces filtered by the Status column
 * @method Oceanprovinces findOneByProvinceref(int $ProvinceRef) Return the first Oceanprovinces filtered by the ProvinceRef column
 * @method Oceanprovinces findOneByEntered(int $Entered) Return the first Oceanprovinces filtered by the Entered column
 * @method Oceanprovinces findOneByDateentered(string $DateEntered) Return the first Oceanprovinces filtered by the DateEntered column
 * @method Oceanprovinces findOneByModified(int $Modified) Return the first Oceanprovinces filtered by the Modified column
 * @method Oceanprovinces findOneByDatemodified(string $DateModified) Return the first Oceanprovinces filtered by the DateModified column
 * @method Oceanprovinces findOneByExpert(int $Expert) Return the first Oceanprovinces filtered by the Expert column
 * @method Oceanprovinces findOneByDatechecked(string $DateChecked) Return the first Oceanprovinces filtered by the DateChecked column
 * @method Oceanprovinces findOneByTs(string $TS) Return the first Oceanprovinces filtered by the TS column
 *
 * @method array findByStockcode(double $StockCode) Return Oceanprovinces objects filtered by the StockCode column
 * @method array findByRegionno(int $RegionNo) Return Oceanprovinces objects filtered by the RegionNo column
 * @method array findBySpeccode(int $SpecCode) Return Oceanprovinces objects filtered by the SpecCode column
 * @method array findByStatus(string $Status) Return Oceanprovinces objects filtered by the Status column
 * @method array findByProvinceref(int $ProvinceRef) Return Oceanprovinces objects filtered by the ProvinceRef column
 * @method array findByEntered(int $Entered) Return Oceanprovinces objects filtered by the Entered column
 * @method array findByDateentered(string $DateEntered) Return Oceanprovinces objects filtered by the DateEntered column
 * @method array findByModified(int $Modified) Return Oceanprovinces objects filtered by the Modified column
 * @method array findByDatemodified(string $DateModified) Return Oceanprovinces objects filtered by the DateModified column
 * @method array findByExpert(int $Expert) Return Oceanprovinces objects filtered by the Expert column
 * @method array findByDatechecked(string $DateChecked) Return Oceanprovinces objects filtered by the DateChecked column
 * @method array findByTs(string $TS) Return Oceanprovinces objects filtered by the TS column
 *
 * @package    propel.generator.fbapp.om
 */
abstract class BaseOceanprovincesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseOceanprovincesQuery object.
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
            $modelName = 'Oceanprovinces';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new OceanprovincesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   OceanprovincesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return OceanprovincesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof OceanprovincesQuery) {
            return $criteria;
        }
        $query = new OceanprovincesQuery(null, null, $modelAlias);

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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query
                         A Primary key composition: [$StockCode, $RegionNo]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Oceanprovinces|Oceanprovinces[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = OceanprovincesPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(OceanprovincesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Oceanprovinces A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `StockCode`, `RegionNo`, `SpecCode`, `Status`, `ProvinceRef`, `Entered`, `DateEntered`, `Modified`, `DateModified`, `Expert`, `DateChecked`, `TS` FROM `oceanprovinces` WHERE `StockCode` = :p0 AND `RegionNo` = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Oceanprovinces();
            $obj->hydrate($row);
            OceanprovincesPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Oceanprovinces|Oceanprovinces[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Oceanprovinces[]|mixed the list of results, formatted by the current formatter
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
     * @return OceanprovincesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(OceanprovincesPeer::STOCKCODE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(OceanprovincesPeer::REGIONNO, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return OceanprovincesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(OceanprovincesPeer::STOCKCODE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(OceanprovincesPeer::REGIONNO, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return OceanprovincesQuery The current query, for fluid interface
     */
    public function filterByStockcode($stockcode = null, $comparison = null)
    {
        if (is_array($stockcode)) {
            $useMinMax = false;
            if (isset($stockcode['min'])) {
                $this->addUsingAlias(OceanprovincesPeer::STOCKCODE, $stockcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockcode['max'])) {
                $this->addUsingAlias(OceanprovincesPeer::STOCKCODE, $stockcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesPeer::STOCKCODE, $stockcode, $comparison);
    }

    /**
     * Filter the query on the RegionNo column
     *
     * Example usage:
     * <code>
     * $query->filterByRegionno(1234); // WHERE RegionNo = 1234
     * $query->filterByRegionno(array(12, 34)); // WHERE RegionNo IN (12, 34)
     * $query->filterByRegionno(array('min' => 12)); // WHERE RegionNo >= 12
     * $query->filterByRegionno(array('max' => 12)); // WHERE RegionNo <= 12
     * </code>
     *
     * @param     mixed $regionno The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesQuery The current query, for fluid interface
     */
    public function filterByRegionno($regionno = null, $comparison = null)
    {
        if (is_array($regionno)) {
            $useMinMax = false;
            if (isset($regionno['min'])) {
                $this->addUsingAlias(OceanprovincesPeer::REGIONNO, $regionno['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($regionno['max'])) {
                $this->addUsingAlias(OceanprovincesPeer::REGIONNO, $regionno['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesPeer::REGIONNO, $regionno, $comparison);
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
     * @return OceanprovincesQuery The current query, for fluid interface
     */
    public function filterBySpeccode($speccode = null, $comparison = null)
    {
        if (is_array($speccode)) {
            $useMinMax = false;
            if (isset($speccode['min'])) {
                $this->addUsingAlias(OceanprovincesPeer::SPECCODE, $speccode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($speccode['max'])) {
                $this->addUsingAlias(OceanprovincesPeer::SPECCODE, $speccode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesPeer::SPECCODE, $speccode, $comparison);
    }

    /**
     * Filter the query on the Status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE Status = 'fooValue'
     * $query->filterByStatus('%fooValue%'); // WHERE Status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $status)) {
                $status = str_replace('*', '%', $status);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(OceanprovincesPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the ProvinceRef column
     *
     * Example usage:
     * <code>
     * $query->filterByProvinceref(1234); // WHERE ProvinceRef = 1234
     * $query->filterByProvinceref(array(12, 34)); // WHERE ProvinceRef IN (12, 34)
     * $query->filterByProvinceref(array('min' => 12)); // WHERE ProvinceRef >= 12
     * $query->filterByProvinceref(array('max' => 12)); // WHERE ProvinceRef <= 12
     * </code>
     *
     * @param     mixed $provinceref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return OceanprovincesQuery The current query, for fluid interface
     */
    public function filterByProvinceref($provinceref = null, $comparison = null)
    {
        if (is_array($provinceref)) {
            $useMinMax = false;
            if (isset($provinceref['min'])) {
                $this->addUsingAlias(OceanprovincesPeer::PROVINCEREF, $provinceref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($provinceref['max'])) {
                $this->addUsingAlias(OceanprovincesPeer::PROVINCEREF, $provinceref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesPeer::PROVINCEREF, $provinceref, $comparison);
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
     * @return OceanprovincesQuery The current query, for fluid interface
     */
    public function filterByEntered($entered = null, $comparison = null)
    {
        if (is_array($entered)) {
            $useMinMax = false;
            if (isset($entered['min'])) {
                $this->addUsingAlias(OceanprovincesPeer::ENTERED, $entered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entered['max'])) {
                $this->addUsingAlias(OceanprovincesPeer::ENTERED, $entered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesPeer::ENTERED, $entered, $comparison);
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
     * @return OceanprovincesQuery The current query, for fluid interface
     */
    public function filterByDateentered($dateentered = null, $comparison = null)
    {
        if (is_array($dateentered)) {
            $useMinMax = false;
            if (isset($dateentered['min'])) {
                $this->addUsingAlias(OceanprovincesPeer::DATEENTERED, $dateentered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateentered['max'])) {
                $this->addUsingAlias(OceanprovincesPeer::DATEENTERED, $dateentered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesPeer::DATEENTERED, $dateentered, $comparison);
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
     * @return OceanprovincesQuery The current query, for fluid interface
     */
    public function filterByModified($modified = null, $comparison = null)
    {
        if (is_array($modified)) {
            $useMinMax = false;
            if (isset($modified['min'])) {
                $this->addUsingAlias(OceanprovincesPeer::MODIFIED, $modified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modified['max'])) {
                $this->addUsingAlias(OceanprovincesPeer::MODIFIED, $modified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesPeer::MODIFIED, $modified, $comparison);
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
     * @return OceanprovincesQuery The current query, for fluid interface
     */
    public function filterByDatemodified($datemodified = null, $comparison = null)
    {
        if (is_array($datemodified)) {
            $useMinMax = false;
            if (isset($datemodified['min'])) {
                $this->addUsingAlias(OceanprovincesPeer::DATEMODIFIED, $datemodified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datemodified['max'])) {
                $this->addUsingAlias(OceanprovincesPeer::DATEMODIFIED, $datemodified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesPeer::DATEMODIFIED, $datemodified, $comparison);
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
     * @return OceanprovincesQuery The current query, for fluid interface
     */
    public function filterByExpert($expert = null, $comparison = null)
    {
        if (is_array($expert)) {
            $useMinMax = false;
            if (isset($expert['min'])) {
                $this->addUsingAlias(OceanprovincesPeer::EXPERT, $expert['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($expert['max'])) {
                $this->addUsingAlias(OceanprovincesPeer::EXPERT, $expert['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesPeer::EXPERT, $expert, $comparison);
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
     * @return OceanprovincesQuery The current query, for fluid interface
     */
    public function filterByDatechecked($datechecked = null, $comparison = null)
    {
        if (is_array($datechecked)) {
            $useMinMax = false;
            if (isset($datechecked['min'])) {
                $this->addUsingAlias(OceanprovincesPeer::DATECHECKED, $datechecked['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datechecked['max'])) {
                $this->addUsingAlias(OceanprovincesPeer::DATECHECKED, $datechecked['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesPeer::DATECHECKED, $datechecked, $comparison);
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
     * @return OceanprovincesQuery The current query, for fluid interface
     */
    public function filterByTs($ts = null, $comparison = null)
    {
        if (is_array($ts)) {
            $useMinMax = false;
            if (isset($ts['min'])) {
                $this->addUsingAlias(OceanprovincesPeer::TS, $ts['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ts['max'])) {
                $this->addUsingAlias(OceanprovincesPeer::TS, $ts['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(OceanprovincesPeer::TS, $ts, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Oceanprovinces $oceanprovinces Object to remove from the list of results
     *
     * @return OceanprovincesQuery The current query, for fluid interface
     */
    public function prune($oceanprovinces = null)
    {
        if ($oceanprovinces) {
            $this->addCond('pruneCond0', $this->getAliasedColName(OceanprovincesPeer::STOCKCODE), $oceanprovinces->getStockcode(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(OceanprovincesPeer::REGIONNO), $oceanprovinces->getRegionno(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
